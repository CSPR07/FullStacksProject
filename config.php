<?php
define('DBSERVER', 'localhost');
define('DBUSERNAME', 'root');
define('DBPASSWORD', 'R@ps@c2307');
define('DBNAME', 'fullstackproject');

$db = mysqli_connect(DBSERVER, DBUSERNAME, DBPASSWORD, DBNAME);

if ($db===false){
    die("ERROR: connection error. " .mysqli_connect_error());
}
?>