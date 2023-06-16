<?php
session_start();

// Ambil data dari session
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
$perusahaan = $_SESSION["perusahaan"];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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

        .export-pdf {
            text-align: center;
            margin-top: 20px;
        }
    </style>
</head>

<body>
    <div class="struk-container">
        <h2 class="struk-heading">Struk Pembayaran</h2>
        <div class="struk-info">
            <p>Perusahaan: <?php echo $perusahaan; ?></p>
            <p>Mobil: <?php echo $mobil; ?></p>
            <p>Tanggal Rental: <?php echo $tanggalstartrental; ?></p>
            <p>Waktu Rental: <?php echo $waktustartrental; ?></p>
            <p>Tanggal Pengembalian: <?php echo $tanggalendrental; ?></p>
            <p>Waktu Pengembalian: <?php echo $waktuendrental; ?></p>
            <p>Nama: <?php echo $nama; ?></p>
            <p>Nomor HP: <?php echo $nomorhp; ?></p>
            <p>Email: <?php echo $email; ?></p>
            <p>Pengambilan: <?php echo $pengambilan; ?></p>
            <p>Lokasi Lain: <?php echo $lokasi_lain; ?></p>
            <p>Total Pembayaran: <?php echo $harga; ?></p>
            <p>Metode Pembayaran: BCA</p>
            <p>No. Rekening: 2108xxxxxxxxx</p>
        </div>
        <div class="note">
            <p><strong>Simpan struk ini dan berikan saat mengambil mobil.</strong></p>
        </div>
        <div class="export-pdf">
            <a href="exportpdf.php" target="_blank">Export PDF</a>
        </div>
        <div class="back-to-home">
            <a href="halamanutama2.php">Kembali ke Halaman Utama</a>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/dompdf/0.8.5/dompdf.min.js" integrity="sha512-HbxdFs3iG3MELgDmi5x6EGVQx4OrLoV9CNFl8s5ghc3MBw/ExLqswrqGQD/QfUXYEOJZL9E51Iv4wF8Tw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
        function exportPDF() {
            var strukContainer = document.querySelector('.struk-container');

            // Menggunakan library dompdf
            var pdf = new window.jsPDF();
            pdf.addHTML(strukContainer, function() {
                pdf.save('struk_pembayaran.pdf');
            });
        }
    </script>
</body>

</html>
