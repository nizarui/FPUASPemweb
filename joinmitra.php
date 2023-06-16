<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulir Join Mitra</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.0/css/bootstrap.min.css"
        integrity="sha512-vTyD31Uf4ECqwljZroI6Z/DaCMBwgxogznCqvG3t0NcNvrtTVgVbHBR2TzSiZVLuV1w9XC8j4CEVls18zPFqYg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <div class="container">
        <h1 class="mt-5">Formulir Join Mitra</h1>
        <form action="prosesjoinmitra.php" method="POST">
            <div class="mb-3">
                <label for="nama" class="form-label">Nama anda?</label>
                <input type="text" class="form-control" id="nama" name="nama" required>
            </div>

            <div class="mb-3">
                <label for="telepon" class="form-label">Nomor telepon perusahaan?</label>
                <input type="tel" class="form-control" id="telepon" name="telepon" required>
            </div>

            <div class="mb-3">
                <label for="perusahaan" class="form-label">Nama perusahaan?</label>
                <input type="text" class="form-control" id="perusahaan" name="perusahaan" required>
            </div>

            <div class="mb-3">
                <label for="alamat" class="form-label">Alamat lengkap perusahaan Anda?</label>
                <input type="text" class="form-control" id="alamat" name="alamat" required>
            </div>

            <div class="mb-3">
                <label for="jenis_mobil" class="form-label">Apa jenis mobil yang tersedia di perusahaan Anda?</label>
                <input type="text" class="form-control" id="jenis_mobil" name="jenis_mobil" required>
            </div>

            <div class="mb-3">
                <label for="jumlah_armada" class="form-label">Berapa jumlah armada mobil yang dimiliki
                    perusahaan?</label>
                <input type="number" class="form-control" id="jumlah_armada" name="jumlah_armada" required>
            </div>

            <div class="mb-3">
                <label for="lama_operasi" class="form-label">Apakah perusahaan Anda telah beroperasi selama berapa
                    lama?</label>
                <input type="text" class="form-control" id="lama_operasi" name="lama_operasi" required>
            </div>

            <div class="mb-3">
                <label for="izin_usaha" class="form-label">Apakah perusahaan Anda memiliki izin usaha yang sah?</label>
                <select class="form-control" id="izin_usaha" name="izin_usaha" required>
                    <option value="Ya">Ya</option>
                    <option value="Tidak">Tidak</option>
                </select>
            </div>

            <div class="mb-3">
                <label for="asuransi" class="form-label">Apakah perusahaan Anda memiliki asuransi untuk mobil yang
                    disewakan?</label>
                <select class="form-control" id="asuransi" name="asuransi" required>
                    <option value="Ya">Ya</option>
                    <option value="Tidak">Tidak</option>
                </select>
            </div>

            <div class="mb-3">
                <label for="lokasi_operasional" class="form-label">Lokasi atau daerah operasional perusahaan
                    Anda?</label>
                <input type="text" class="form-control" id="lokasi_operasional" name="lokasi_operasional" required>
            </div>

            <div class="mb-3">
                <label for="pengalaman_sebelumnya" class="form-label">Apakah perusahaan Anda memiliki pengalaman dalam
                    menyewakan mobil sebelumnya?</label>
                <select class="form-control" id="pengalaman_sebelumnya" name="pengalaman_sebelumnya" required>
                    <option value="Ya">Ya</option>
                    <option value="Tidak">Tidak</option>
                </select>
            </div>

            <!-- Tambahkan 10 pertanyaan lagi sesuai kebutuhan -->

            <input type="submit" value="Submit">
        </form>
    </div>
    <script>
        header("Location: beranda.php");
        exit();
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.0/js/bootstrap.bundle.min.js"
        integrity="sha512-VCg0cO8SoMQ+gqdfX4L/l3bif5kPTUmL91pFFm+/HQmC1pVM6bP2MiMdnkMhneXaW0dqFue73K7OxEH3vW72uw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</body>

</html>