<?php
session_start();
include 'koneksi.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Website Rental Mobil</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.0/css/bootstrap.min.css" integrity="sha512-vTyD31Uf4ECqwljZroI6Z/DaCMBwgxogznCqvG3t0NcNvrtTVgVbHBR2TzSiZVLuV1w9XC8j4CEVls18zPFqYg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="style2.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-BHlY6W3Jhm1b+J3a9js0mq+YxkKVRcZ0A8Qo9DmFVdYbt76XOhN7SB2prCkF3q6t0ehdGPRaezOKInhGNyX1+w==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.0/js/bootstrap.bundle.min.js" integrity="sha512-VCg0cO8SoMQ+gqdfX4L/l3bif5kPTUmL91pFFm+/HQmC1pVM6bP2MiMdnkMhneXaW0dqFue73K7OxEH3vW72uw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</head>

<style>
    .container {
        display: flex;
    }

    .card {
        flex: 1;
        margin: 10px;
        max-width: 18rem;
    }

    #section3 {
        margin: 10px;
    }

    #satusatu {
        padding-left: 200px;
        padding-right: 200px;
        padding-top: 50px;
        padding-bottom: 50px;
    }
</style>

<body>
    <header>
        <nav class="navbar navbar-expand-lg" style="background-color: #27374D;">
            <div class="container">
                <a class="navbar-brand" href="halamanutama2.php" style="color: #fff;">FLEXMOB</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="#about-us" style="color: #fff; padding-right: 30px;">TENTANG KAMI</a>

                        </li>
                        <li class="nav-item text-white">
                            <div class="dropdown">
                                <button onclick="toggleMenu()" class="dropbtn">Hai!
                                    <?php echo $_SESSION['nama_lengkap']; ?>
                                </button>
                                <ul id="menu" class="dropdown-content">
                                    <li><a href="index.php">Logout</a></li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <script>
        function toggleMenu() {
            var menu = document.getElementById("menu");
            menu.classList.toggle("show");
        }

        window.onclick = function(event) {
            if (!event.target.matches('.dropbtn')) {
                var dropdowns = document.getElementsByClassName("dropdown-content");
                for (var i = 0; i < dropdowns.length; i++) {
                    var openDropdown = dropdowns[i];
                    if (openDropdown.classList.contains('show')) {
                        openDropdown.classList.remove('show');
                    }
                }
            }
        };
    </script>


    <!-- Load Bootstrap JS and jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <section style="margin: 10px">
        <h2 class="text-center">Galeri Rental Perusahaan C</h2>
        <div class="container">
            <div class="card">
                <img class="card-img-top" src="img/ayla.jpg" alt="Card image cap">
                <div class="card-body">
                    <h3>Ayla</h3>
                    <p class="card-text text-muted">180 rb / hari</p>
                </div>
            </div>
            <div class="card">
                <img class="card-img-top" src="img/innova" alt="Card image cap">
                <div class="card-body">
                    <h3>Innova</h3>
                    <p class="card-text text-muted">250 rb / hari</p>
                </div>
            </div>
        </div>
    </section>

    <section id="satusatu">
        <div class="border border-secondary">
            <h2 class="text-center">Form Pemesanan</h2>
            <form action="simpanclosingc.php" method="post" style="margin: 50px;">
                <div class="row">
                    <div class="col-xl-3">
                        <h5>Pilih Mobil</h5>
                    </div>
                    <div class="col-xl-9">
                        <div class="input-group">
                            <select class="form-select" id="mobil" name="mobil">
                                <option value="Ayla">Ayla</option>
                                <option value="Innova">Innova</option>
                            </select>
                        </div>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-xl-3">
                        Tanggal Penyewaan
                    </div>
                    <div class="col-xl-9">
                        <input type="date" class="form-control" id="rental-start-date" name="tanggalstartrental" required>
                        <input type="time" class="form-control mt-2" id="rental-start-time" name="waktustartrental" required>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-xl-3">
                        Tanggal Pengembalian
                    </div>
                    <div class="col-xl-9">
                        <input type="date" class="form-control" id="rental-end-date" name="tanggalendrental" required>
                        <input type="time" class="form-control mt-2" id="rental-end-time" name="waktuendrental" required>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-xl-3">
                        <h5>Data Pemesan</h5>
                    </div>
                    <div class="col-xl-9">
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-3">
                        Nama
                    </div>
                    <div class="col-xl-9">
                        <input id="nis" name="nama" type="text" required>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-xl-3">
                        Nomor Handphone
                    </div>
                    <div class="col-xl-9">
                        <input id="npu" name="nomorhp" type="text" required>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-xl-3">
                        Email
                    </div>
                    <div class="col-xl-9">
                        <input id="npu" name="email" type="text" required>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-xl-3">
                        <h5>Lokasi Ambil/Jemput</h5>
                    </div>
                    <div class="col-xl-9">
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-3">
                        Pengambilan/Penjemputan
                    </div>
                    <div class="col-xl-9">
                        <div class="form-check-inline">
                            <label class="form-check-label" for="pengambilan-kantor">
                                <input type="radio" class="form-check-input" id="pengambilan-kantor" name="pengambilan" value="Kantor">Kantor
                            </label>
                        </div>
                        <div class="form-check-inline">
                            <label class="form-check-label" for="pengambilan-lokasi-lain">
                                <input type="radio" class="form-check-input" id="pengambilan-lokasi-lain" name="pengambilan" value="Lokasi Lain">Lokasi Lain <span class="text-muted">(Dapat
                                    Dikenakan Biaya Tambahan 75.000)</span>
                            </label>
                        </div>
                    </div>
                </div>

                <div id="field-lokasi-lain" style="display: none;">
                    <div class="row mt-3">
                        <div class="col-xl-3">
                            Lokasi Lain:
                        </div>
                        <div class="col-xl-9">
                            <input type="text" id="lokasi_lain" name="lokasi_lain">
                        </div>
                    </div>
                </div>

                <br>
                <div class="row">
                    <div class="col-xl-3">
                        Harga:
                    </div>
                    <div class="col-xl-9">
                        <input type="text" id="harga" name="harga" readonly>
                    </div>
                </div>
                <br>
                <button type="submit" id="nextc" name="nextc" class="btn btn-primary">Next</button>
            </form>
        </div>
    </section>

    <footer class="footer" id="about-us">
        <div class="container">
            <div class="row">
                <div class="footer__cols">
                    <span class="title">Tentang Kami</span>
                    <ul>
                        <li>Email : flexmob@gmail.com</li>
                        <li>Kontak Kami : 087716353188</li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
    <script>
        const mobilSelect = document.getElementById('mobil');
        const rentalStartDate = document.getElementById('rental-start-date');
        const rentalStartTime = document.getElementById('rental-start-time');
        const rentalEndDate = document.getElementById('rental-end-date');
        const rentalEndTime = document.getElementById('rental-end-time');
        const totalHargaInput = document.getElementById('harga');

        mobilSelect.addEventListener('change', updateTotalHarga);
        rentalStartDate.addEventListener('input', updateTotalHarga);
        rentalStartTime.addEventListener('input', updateTotalHarga);
        rentalEndDate.addEventListener('input', updateTotalHarga);
        rentalEndTime.addEventListener('input', updateTotalHarga);

        function updateTotalHarga() {
            const mobilValue = mobilSelect.value;
            const startDateTime = new Date(`${rentalStartDate.value}T${rentalStartTime.value}`);
            const endDateTime = new Date(`${rentalEndDate.value}T${rentalEndTime.value}`);
            const diffInTime = endDateTime.getTime() - startDateTime.getTime();
            const diffInDays = diffInTime / (1000 * 3600 * 24);

            let hargaPerHari = 0;
            if (mobilValue === 'Ayla') {
                hargaPerHari = 180000;
            } else if (mobilValue === 'Innova') {
                hargaPerHari = 250000;
            }

            let totalHarga = hargaPerHari * diffInDays;

            if (lokasiLainRadio.checked) {
                totalHarga += 75000; // Tambah biaya tambahan 75.000
            }

            if (isNaN(totalHarga)) {
                totalHarga = 0;
            }

            totalHargaInput.value = totalHarga;
        }
    </script>

    <script>
        const pengambilanKantorRadio = document.getElementById('pengambilan-kantor');
        const lokasiLainRadio = document.getElementById('pengambilan-lokasi-lain');
        const fieldLokasiLain = document.getElementById('field-lokasi-lain');

        pengambilanKantorRadio.addEventListener('change', function() {
            if (this.checked) {
                fieldLokasiLain.style.display = 'none';
                lokasiLainRadio.checked = false;
                updateTotalHarga();
            }
        });

        lokasiLainRadio.addEventListener('change', function() {
            if (this.checked) {
                fieldLokasiLain.style.display = 'block';
                updateTotalHarga();
            }
        });
    </script>

</body>

</html>