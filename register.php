<?php
require 'koneksi.php';

$email = mysqli_real_escape_string($conn, $_POST["email"]);
$password = mysqli_real_escape_string($conn, $_POST["password"]);
$confirm = mysqli_real_escape_string($conn, $_POST["confirm"]);

$hashed_password = password_hash($password, PASSWORD_DEFAULT);

$query_sql = "INSERT INTO tbl_user ( email, password, confirm)
            VALUES ('$email', '$password', '$confirm')";

if (mysqli_query($conn, $query_sql)) {
    header("Location: login.html");
} else {
    echo "Pendaftaran Gagal : " . mysqli_error($conn);
}