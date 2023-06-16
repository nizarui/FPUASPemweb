<?php
session_start();
include 'koneksi.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f1f1f1;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 600px;
            margin: 50px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h1 {
            color: #333;
        }

        p {
            margin-bottom: 10px;
        }

        a {
            color: #333;
            text-decoration: none;
            border-bottom: 1px dotted #333;
        }

        a:hover {
            border-bottom-style: solid;
        }

        .btn {
            display: inline-block;
            padding: 8px 16px;
            margin-bottom: 0;
            font-size: 14px;
            font-weight: 400;
            line-height: 1.42857143;
            text-align: center;
            white-space: nowrap;
            vertical-align: middle;
            -ms-touch-action: manipulation;
            touch-action: manipulation;
            cursor: pointer;
            user-select: none;
            background-image: none;
            border: 1px solid transparent;
            border-radius: 4px;
            color: #fff;
            background-color: #337ab7;
            border-color: #2e6da4;
        }

        .btn:hover {
            color: #fff;
            background-color: #286090;
            border-color: #204d74;
        }
    </style>
</head>

<body>
<?php
session_start();

// Check if the user is already logged in
if (isset($_SESSION['email'])) {
    $email = $_SESSION['email'];

    // You can replace this code with fetching user data from the database
    $nama = "John Doe";
    $deskripsi = "Halo, saya adalah John Doe. Saya adalah seorang pengguna yang aktif dan suka belajar hal-hal baru.";

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // Update the user's name
        $namaBaru = isset($_POST['nama']) ? $_POST['nama'] : "";
        $nama = $namaBaru;
    }

    // Display the profile information
    echo "<div class='container'>";
    echo "<h1>Profile</h1>";
    echo "<p><strong>Nama:</strong> $nama</p>";
    echo "<p><strong>Email:</strong> $email</p>";
    echo "<p><strong>Deskripsi:</strong> $deskripsi</p>";
    echo "<a href='halamanutama1.php' class='btn'>Logout</a>";
    echo "<a href='halamanutama2.php' class='btn'>Balik ke Beranda</a>";
    echo "<br><br>";
    echo "<form action='' method='POST'>";
    echo "<label for='nama'>Ganti Nama:</label>";
    echo "<input type='text' name='nama' id='nama' placeholder='Masukkan nama baru'>";
    echo "<button type='submit' class='btn'>Simpan</button>";
    echo "</form>";
    echo "</div>";
} else {
    // User is not logged in, redirect to the login page
    header("Location: login.php");
    exit();
}
?>

</body>

</html>