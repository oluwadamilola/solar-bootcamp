<?php
//create connection credentials
$db_host = "localhost";
$username = "root";
$password = "";
$dbname = "academy";

$db_con = new mysqli($db_host, $username, $password,$dbname

);

if ($db_con->connect_error) {
    printf("connect failed: %s\n, 
    ", $db_con->connect_error);
    exit();
}
?>