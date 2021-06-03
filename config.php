<?php
define('DBSERVER', 'localhost:3306');
define('DBUSERNAME', 'root');
define('DBPASSWORD', '');
define('DBNAME', 'fullstackproject');

$db = mysqli_connect(DBSERVER, DBUSERNAME, DBPASSWORD, DBNAME);

if ($db===false){
    die("ERROR: connection error. " .mysqli_connect_error());
}
?>