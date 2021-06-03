<?php

session_start();

if (!isset($_SESSION["userid"]) || $_SESSION["userid"] !== true){
    header("location: login.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome <?php echo $_SESSION["name"];?></title>
    <link rel="stylesheet" href=https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Helle, <strong><?php echo $_SESSION["name"]; ?></strong> Welcome to my site.</h1>
        </div>
        <p>
            <a href="logout.php" class="btn btn-secondary btn-lg active" role="button" aria-pressed="true">logout</a>
        </p>
    </div>
</div>
</body>
</html>