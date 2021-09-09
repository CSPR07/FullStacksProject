<?php
define('DBSERVER', 'localhost');
define('DBUSERNAME', 'id17176924_root');
define('DBPASSWORD', 'cKWw]H8Nu4+piGwW');
define('DBNAME', 'id17176924_fullstackproject');

$db = mysqli_connect(DBSERVER, DBUSERNAME, DBPASSWORD, DBNAME);

if ($db===false){
    die("ERROR: connection error. " .mysqli_connect_error());
}
?>
