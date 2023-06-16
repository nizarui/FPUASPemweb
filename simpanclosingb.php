<?php
session_start();
require 'koneksi.php';

if (isset($_POST['nextb'])) {
    $_SESSION["mobil"] = $_POST["mobil"];
    $_SESSION["tanggalstartrental"] = $_POST["tanggalstartrental"];
    $_SESSION["waktustartrental"] = $_POST["waktustartrental"];
    $_SESSION["tanggalendrental"] = $_POST["tanggalendrental"];
    $_SESSION["waktuendrental"] = $_POST["waktuendrental"];
    $_SESSION["nama"] = $_POST["nama"];
    $_SESSION["nomorhp"] = $_POST["nomorhp"];
    $_SESSION["email"] = $_POST["email"];
    $_SESSION["pengambilan"] = $_POST["pengambilan"];
    $_SESSION["lokasi_lain"] = $_POST["lokasi_lain"];
    $_SESSION["harga"] = $_POST["harga"];

    header('location: countdownb.php');
    exit();
} elseif (isset($_POST['berhasil'])) {
    // Retrieve the necessary form data
    $mobil = $_SESSION["mobil"];
    $tanggalstartrental = $_SESSION["tanggalstartrental"];
    $waktustartrental = $_SESSION["waktustartrental"];
    $tanggalendrental = $_SESSION["tanggalendrental"];
    $waktuendrental = $_SESSION["waktuendrental"];
    $nama = $_SESSION["nama"];
    $nomorhp = $_SESSION["nomorhp"];
    $email = $_SESSION["email"];
    $pengambilan = $_SESSION["pengambilan"];
    $lokasi_lain = $_SESSION["lokasi_lain"];
    $harga = $_SESSION["harga"];
    $perusahaan = "Perusahaan B"; // Nama perusahaan
    $_SESSION["perusahaan"] = $perusahaan;

    // Perform the database insertion for tb_perusahaan_b
    $queryPerusahaanB = "INSERT INTO tb_perusahaan_b (mobil, tanggalstartrental, waktustartrental, tanggalendrental, waktuendrental, nama, nomorhp, email, pengambilan, lokasi_lain, harga, perusahaan) 
              VALUES ('$mobil', '$tanggalstartrental', '$waktustartrental', '$tanggalendrental', '$waktuendrental', '$nama', '$nomorhp', '$email', '$pengambilan', '$lokasi_lain', '$harga', '$perusahaan')";

    // Perform the database insertion for tb_dashboard
    $queryDashboard = "INSERT INTO tb_dashboard (mobil, tanggalstartrental, waktustartrental, tanggalendrental, waktuendrental, nama, nomorhp, email, pengambilan, lokasi_lain, harga, perusahaan) 
              VALUES ('$mobil', '$tanggalstartrental', '$waktustartrental', '$tanggalendrental', '$waktuendrental', '$nama', '$nomorhp', '$email', '$pengambilan', '$lokasi_lain', '$harga', '$perusahaan')";

    if (mysqli_query($conn, $queryPerusahaanB) && mysqli_query($conn, $queryDashboard)) {
        // Data successfully inserted into both tables

        // Redirect to the success page or any other desired page
        header('Location: cetakstrukb.php');
        exit();
    } else {
        // Error occurred while inserting data into the database
        echo "Gagal menyimpan data: " . mysqli_error($conn);
        exit();
    }
} else {
    // Redirect to the appropriate page if the form was not submitted
    header('Location: halamanutama2.php');
    exit();
}
?>
