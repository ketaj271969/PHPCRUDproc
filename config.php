<?php
/* Database credentials. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
define('DB_SERVER', '3FZLBM1-BSD-B.superfly.rocks:33061');
define('DB_USERNAME', '3fzlbm1-bsd-b-admin');
define('DB_PASSWORD', 'h1s-dos@is11f1ll32');
define('DB_NAME', 'eCommerce');
 
/* Attempt to connect to MySQL database */
$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
?>