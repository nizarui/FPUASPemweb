<?php
require 'koneksi.php';
$nama_lengkap = $_POST["nama_lengkap"];
$email = $_POST["email"];
$password = $_POST["password"];

$query_sql = "INSERT INTO tb_user (nama_lengkap, email, password)
            VALUES ('$nama_lengkap', '$email', '$password')";

if (mysqli_query($conn, $query_sql)) {
    header("Location: formlogin.php");
} else {
    echo "Pendaftaran Gagal : " . mysqli_error($conn);
}