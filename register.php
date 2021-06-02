<?php
require_once "config.php";
require_once "session.php";

if ($_SESSION["REQUEST_METHOD"] == "POST" && isset($_POST['submit'])) {
    $fullname = trim($_POST['name']);
    $email = trim($_POST['email']);
    $password = trim($_POST['password']);
    $confirm_password = trim($_POST['confirm_password']);
    $password_hash = password_hash($password, PASSWORD_BCRYPT);

    if ($query = $db->prepare("SELECT * FROM users WHERE email = ?")){
        $error = '';

        $query->bind_param('s', $email);
        $query->execute();
        $query->store_result();
        if ($query->num_rows > 0){
            $error .= '<p class="error">Het email address is al geregristreerd!</p>';
        } else {
            if (strlen($password) < 6){
                $error .= '<p class="error">Password moet minstens 6 letters lang zijn</p>';
            }

            if (empty($confirm_password)){
                $error .= '<p class="error">graag iets invullen in confirm password</p>';
            } else {
                if (empty($error) && ($password != $confirm_password)) {
                    $error .= '<p class="error">de passwords zijn niet hetzelfde</p>';
                }
            }
            if (empty($error) ){
                $insertQuery = $db->prepare("INSERT INTO users (name, email, password) VALUES (?, ?, ?);");
                $insertQuery->bind_param("sss", $fullname, $email, $password_hash);
                $result = $insertQuery->execute();
                if ($result) {
                    $error .= '<p class="succes">je bent nu geregistreerd!</p>';
                } else {
                    $error .= '<p class="error">Er is iets fout gegaan!</p>';
                }
            }
        }
    }
    $query->close();
    $insertQuery->close();
    mysqli_close($db);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>signUp</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300&display=swap">
</head>
<body>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h2>Register</h2>
            <p>fill this in to create account</p>
            <form action="" method="post">
                <div class="form-group">
                    <label>Full Name</label>
                    <input type="text" name="name" class="form-control" required>
                </div>
                <div class="form-group">
                    <label>Email</label>
                    <input type="email" name="email" class="form-control" required>
                </div>
                <div class="form-group">
                    <label>Password</label>
                    <input type="password" name="password" class="form-control" required>
                </div>
                <div class="form-group">
                    <label>Confirm Password</label>
                    <input type="password" name="confirm_password" class="form-control" required>
                </div>
                <div class="form-group">
                    <label>Submit</label>
                    <input type="submit" name="submit" class="btn btn-primary" value="Submit">
                </div>
                <p>already have an account? <a href="login.php">Login here</a></p>
            </form>
        </div>
    </div>
</div>

</body>
</html>
