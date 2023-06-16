<?php
$servername = "localhost";
$database = "fpuas";
$username = "root";
$password = "";

$conn = mysqli_connect($servername, $username, $password, $database);

if (!$conn) {
    die("Koneksi Gagal: " . mysqli_connect_error());
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Mengambil nilai dari setiap field formulir
  $nama = $_POST["nama"];
  $telepon = $_POST["telepon"];
  $perusahaan = $_POST["perusahaan"];
  $alamat = $_POST["alamat"];
  $jenis_mobil = $_POST["jenis_mobil"];
  $jumlah_armada = $_POST["jumlah_armada"];
  $lama_operasi = $_POST["lama_operasi"];
  $izin_usaha = $_POST["izin_usaha"];
  $asuransi = $_POST["asuransi"];
  $lokasi_operasional = $_POST["lokasi_operasional"];
  $pengalaman_sebelumnya = $_POST["pengalaman_sebelumnya"];

  $sql = "INSERT INTO mitra (nama, telepon, perusahaan, alamat, jenis_mobil, jumlah_armada, lama_operasi, izin_usaha, asuransi, lokasi_operasional, pengalaman_sebelumnya)
  VALUES ('$nama', '$telepon', '$perusahaan', '$alamat', '$jenis_mobil', '$jumlah_armada', '$lama_operasi', '$izin_usaha', '$asuransi', '$lokasi_operasional', '$pengalaman_sebelumnya')";

  if (mysqli_query($conn, $sql)) {
    header("Location: index.php");
    exit();
  } else {
    echo "Terjadi kesalahan: " . mysqli_error($conn);
  }

  mysqli_close($conn);
}
?>
