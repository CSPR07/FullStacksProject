<?php

require_once "config.php";
require_once "session.php";

$error = '';
if ($_SERVER["REQUIRE_METHOD"] == "POST" && isset($_POST['submit'])){

    $email = trim($_POST["email"]);
    $password = trim($_POST["password"]);

    if (empty($email)){
        $error .= '<p class="error">Email alsjeblieft invullen</p>';
    }

    if (empty($password)){
        $error .= '<p class="error">Wachtwoord alsjeblieft invullen</p>';
    }

    if (empty($error)){
        if ($query = $db->prepare("SELECT * FROM users WHERE email = ?")){
            $query->bind_param('s', $email);
            $query->execute();
            $row = $query->fetch();
            if ($row){
                if (password_verify($password, $row['password'])){
                    $_SESSION["userid"] = $row['id'];
                    $_SESSION["user"] = $row;

                    header("location: welcome.php");
                    exit;
                } else {
                    $error .='<p class="error">Het wachtwoord is verkeerd</p>';
                }
                } else {
                $error .= '<p class="error">Er is niemand die dit email addres gebruikt</p>';
            }
        }
        $query->close();
    }
    mysqli_close($db);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h2>Login</h2>
            <p>Vul alsjeblieft je email en wachtwoord in</p>
            <form action="" method="post">
                <div class="form-group">
                    <label>email addres</label>
                    <input type="email" name="email" class="form-control" required>
                </div>
                <div class="form-group">
                    <label>Wachtwoord</label>
                    <input type="password" name="password" class="form-control" required>
                </div>
                <div class="form-group">
                    <input type="submit" name="submit" class="btn btn-primary" value="Submit">
                </div>
                <p>Heb je geen account? <a href="register.php">Meld je hier aan</a>.</p>
            </form>
        </div>
    </div>
</div>
</body>
</html>

