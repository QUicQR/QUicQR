<?php
/* Database credentials. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
define('DB_SERVER', 'eu-cdbr-west-02.cleardb.net');
define('DB_USERNAME', 'bf97ff4bac30bc');
define('DB_PASSWORD', '802affa3');
define('DB_NAME', 'heroku_cae582ac646e5b6');
 
/* Attempt to connect to MySQL database */
$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
?>