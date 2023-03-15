<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$conn = new mysqli("localhost", "root", "", "rest_api");
 
// Check connection
if($conn === false){
    die("ERROR: Could not connect. to MYSQL " . $mysqli->connect_error);
}
?>