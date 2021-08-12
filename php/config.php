<?php 

$server = "localhost";
$user = "id16807605_admin";
$pass = "%MmqDS}9D@|ez@]H";
$database = "id16807605_users";

$conn = mysqli_connect($server, $user, $pass, $database);

if (!$conn) {
    die("<script>alert('Connection Failed.')</script>");
}

?>