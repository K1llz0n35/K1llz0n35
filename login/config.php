<?php
/* Database credentials. Change these for your own database */
define('DB_SERVER', 'XXXX');
define('DB_USERNAME', 'XXXX');
define('DB_PASSWORD', 'XXXX');
define('DB_NAME', 'XXXX');
 
/* Attempt to connect to MySQL database */
$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
?>