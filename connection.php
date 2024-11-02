<?php
$hostname = "localhost";
$username = "root";
$password = "";
$dbName = "inventory";

$con = mysqli_connect($hostname, $username, $password, $dbName);
if (!$con) {
    die("" . mysqli_connect_error());
}
?>