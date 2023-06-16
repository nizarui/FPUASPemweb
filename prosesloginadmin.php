<?php
session_start();

// Mendapatkan username yang dikirimkan dari formulir login
$username = $_POST['username'];
$password = $_POST['password'];

// Menentukan halaman yang sesuai berdasarkan username
if ($username === 'admin' && $password === '1234') {
    header("Location: halamanadmin.php");
    exit();
} elseif ($username === 'perusahaan a' && $password === 'perusahaana') {
    header("Location: aksesperusahaana.php");
    exit();
} elseif ($username === 'perusahaan b' && $password === 'perusahaanb') {
    header("Location: aksesperusahaanb.php");
    exit();
} elseif ($username === 'perusahaan c' && $password === 'perusahaanc') {
    header("Location: aksesperusahaanc.php");
    exit();
} else {
    // Login gagal, arahkan kembali ke halaman login dengan pesan kesalahan
    header("Location: loginadmin.php?error=1");
    exit();
}
?>
