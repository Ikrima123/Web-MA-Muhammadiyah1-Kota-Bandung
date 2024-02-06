<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "db_user"; // Replace with your actual database name

$conn = mysqli_connect($servername, $username, $password, $database);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
