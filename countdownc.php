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
    #satu {
        padding-top: 20px;
        padding-right: 200px;
        padding-left: 200px;
    }
    .text-center {
        position: relative;
    }
    #berhasil {
        position: absolute;
        top: 0;
        right: 0;
        margin-top: 10px;
        margin-right: 10px;
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
                                    <li><a href="halamanutama1.php">Logout</a></li>
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

    <section id="satu">
        <div class="border border-secondary text-center">
            <h1>Pembayaran</h1>
            <h4>Total Pembayaran: <?php echo $_SESSION['harga']; ?></h4>
            <h4>BCA : 2108xxxxxxxxx</h4>
            <p id="countdown"></p>
            <form action="simpanclosingc.php" method="post">
            <button type="submit" id="berhasil" name="berhasil" class="btn btn-primary">Berhasil</button>
            </form>
        </div>
    </section>
</body>
<script>

    // Menghitung mundur selama 30 detik
    const countdownElement = document.getElementById('countdown');
    let countdown = 30;

    function updateCountdown() {
        countdownElement.innerText = `Countdown: ${countdown} detik`;

        if (countdown === 0) {
            // Countdown selesai, kembali ke halaman halamanutama2.php
            window.location.href = 'halamanutama2.php';
        } else {
            countdown--;
            setTimeout(updateCountdown, 1000); // Memanggil fungsi ini setiap 1 detik
        }
    }

    setTimeout(updateCountdown, 1000); // Memulai countdown setelah 1 detik
</script>