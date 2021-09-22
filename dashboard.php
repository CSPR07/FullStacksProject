<?php
include("auth_session.php");
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Dashboard</title>
    <link rel="stylesheet" href="style.css" />
</head>
<body>
    <div class="form">
        <p>Hoi, <?php echo $_SESSION['username']; ?>!</p>
        <p>dashboard pagina</p>
        <p><a href="logout.php">Loguit</a></p>
    </div>
</body>
</html>
