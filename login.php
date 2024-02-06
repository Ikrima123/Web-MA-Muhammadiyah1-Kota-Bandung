<?php
require 'koneksi.php';
$email = $_POST["email"];
$password = $_POST["password"];

$query_sql = "SELECT * FROM tbl_user
            WHERE email = '$email' AND password = '$password'";

$result = mysqli_query($conn, $query_sql);

if (mysqli_query($conn, $query_sql)) {
    header("Location: persetujuan_kepsek.html");
    
} else {
    echo "Pendaftaran Gagal : " . mysqli_error($conn);
}
