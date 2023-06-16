<?php
session_start();

// Ambil data dari session
$perusahaan = $_SESSION["perusahaan"];
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
?>


<?php
require_once 'dompdf/autoload.inc.php';
use Dompdf\Dompdf;

$dompdf = new Dompdf();

$html = '<html>
<head>
    <meta charset="UTF-8">
    <title>Struk Pembayaran</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        .struk-container {
            max-width: 400px;
            margin: 0 auto;
            padding: 20px;
            border: 1px solid #ccc;
        }

        .struk-heading {
            text-align: center;
            margin-bottom: 20px;
        }

        .struk-info {
            margin-bottom: 10px;
        }

        .note {
            text-align: center;
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <div class="struk-container">
        <h2 class="struk-heading">Struk Pembayaran</h2>
        <div class="struk-info">
            <p>Perusahaan : ' . $perusahaan . '</p>
            <p>Mobil: ' . $mobil . '</p>
            <p>Tanggal Rental: ' . $tanggalstartrental . '</p>
            <p>Waktu Rental: ' . $waktustartrental . '</p>
            <p>Tanggal Pengembalian: ' . $tanggalendrental . '</p>
            <p>Waktu Pengembalian: ' . $waktuendrental . '</p>
            <p>Nama: ' . $nama . '</p>
            <p>Nomor HP: ' . $nomorhp . '</p>
            <p>Email: ' . $email . '</p>
            <p>Pengambilan: ' . $pengambilan . '</p>
            <p>Lokasi Lain: ' . $lokasi_lain . '</p>
            <p>Total Pembayaran: ' . $harga . '</p>
            <p>Metode Pembayaran: BCA</p>
            <p>No. Rekening: 2108xxxxxxxxx</p>
        </div>
        <div class="note">
            <p><strong>Simpan struk ini dan berikan saat mengambil mobil.</strong></p>
        </div>
    </div>
</body>
</html>';

$dompdf->loadHtml($html);

// Setting ukuran dan orientasi kertas
$dompdf->setPaper('A4', 'portrait');

// Rendering dari HTML ke PDF
$dompdf->render();

// Menggunakan output file PDF
$dompdf->stream('struk_pembayaran.pdf', array('Attachment' => false));
?>
