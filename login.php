<?php
session_start();
require 'koneksi.php';
$email = $_POST["email"];
$password = $_POST["password"];

$query_sql = "SELECT * FROM tb_user
            WHERE email = '$email' AND password = '$password'";

$result = mysqli_query($conn, $query_sql);

if (mysqli_num_rows($result) > 0) {
    $data = mysqli_fetch_assoc($result);
    $_SESSION['nama_lengkap'] = $data['nama_lengkap'];
    echo $_SESSION['nama_lengkap']; // Menggunakan $_SESSION['nama_lengkap'] untuk mencetak nilai
    header("Location: halamanutama2.php");
} else {
    echo "<center><h1>Email atau Password Anda Salah. Silahkan Coba Login Kembali.</h1>
            <button><strong><a href='formlogin.php'>Login</a></strong></button></center>";
}
