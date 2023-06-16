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

    <body>
        <section class="bg-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 d-flex align-items-center">
                        <div>
                            <h1>FLEXible MOBil rental</h1>
                            <h1>#MOBILITASTIDAKTERBATAS</h1>
                            <br>
                            <p>FlexMob - Fleksibilitas dan Mobilitas Tanpa Batas! Temukan Pengalaman Sewa Mobil Terbaik
                                dengan Mudah di Website Kami. Nikmati Kemudahan, Kebebasan, dan Kualitas Terpercaya
                                untuk Perjalanan Anda yang Lebih Menyenangkan dan Lancar!.</p>
                            <br>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div id="carouselExample" class="carousel slide" data-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <div class="card mb-0">
                                        <img src="img/mobil1.jpeg" class="card-img-top" alt="Gambar 1" style="height: 300px; object-fit: cover;">
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="card mb-0">
                                        <img src="img/mobil2.jpg" class="card-img-top" alt="Gambar 2" style="height: 300px; object-fit: cover;">
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="card mb-0">
                                        <img src="img/mobil3.jpg" class="card-img-top" alt="Gambar 3" style="height: 300px; object-fit: cover;">
                                    </div>
                                </div>
                            </div>
                            <a class="carousel-control-prev" href="#carouselExample" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carouselExample" role="button" data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Load Bootstrap JS and jQuery -->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

        <section style="padding-top: 20px; padding-bottom: 20px;">
            <div class="container">
                <div class="card shadow">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="card-body" style="margin-left: 10px;">
                                <h4 class="card-title">Perusahaan C Rental</h4>
                                <p class="card-text text-dark">&#128077; 8.5 / 10.0</p>
                                <p class="card-text text-dark">Yang Disukai Traveller :</p>
                                <p class="card-text text-muted">Kemudahan proses pengambilan dan pengembalian mobil</p>
                                <p class="card-text text-muted">Kebersihan Mobil</p>
                                <p class="card-text text-muted">Sikap Staff</p>
                                <br>
                            </div>
                        </div>
                        <div class="col-md-6 d-flex align-items-end justify-content-end">
                            <a href="closingc.php" class="btn btn-primary" style="margin-bottom: 10px; margin-right: 10px;">Pilih</a>
                        </div>
                    </div>
                </div>
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

    </body>

</html>