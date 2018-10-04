<?php
/* Database credentials. Assuming you are running MySQL
server with default setting (user 'root' with no password) */

 
/* Attempt to connect to MySQL database */
$link = mysqli_connect("ma-gar.com", "magarcom_pranil", "toshiba2015", "magarcom_digitalid");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
?>