<?php

define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'ayushya');
define('DB_PASSWORD', '1010');
define('DB_NAME', 'employees');
 
/* Attempt to connect to MySQL database */
$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
?>
