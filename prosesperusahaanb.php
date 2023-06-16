<?php
require_once "koneksi.php";

// Query untuk mengambil jumlah user
$queryUser = "SELECT COUNT(*) as id FROM tb_perusahaan_b";

// Eksekusi query user
$resultUser = mysqli_query($conn, $queryUser);

// Ambil jumlah user
$totalUser = mysqli_fetch_assoc($resultUser)['id'];

// Query untuk mengambil data harga dan mobil
$queryData = "SELECT harga, mobil FROM tb_perusahaan_b";

// Eksekusi query data
$resultData = mysqli_query($conn, $queryData);

// Inisialisasi array untuk menyimpan data harga dan mobil
$hargaData = array();
$mobilData = array();

// Loop melalui hasil query data dan menyimpan data harga dan mobil ke dalam array
while ($rowData = mysqli_fetch_assoc($resultData)) {
    $hargaData[] = $rowData['harga'];
    $mobilData[] = $rowData['mobil'];
}

// Jika jumlah data harga kurang dari jumlah user, tambahkan data kosong hingga sejumlah user
$hargaCount = count($hargaData);
if ($hargaCount < $totalUser) {
    $emptyCount = $totalUser - $hargaCount;
    $emptyData = array_fill(0, $emptyCount, null);
    $hargaData = array_merge($hargaData, $emptyData);
}

// Tutup koneksi
mysqli_close($conn);

// Mengirimkan data harga dan mobil dalam format JSON sebagai respons
$responseData = array(
    'hargaData' => $hargaData,
    'mobilData' => $mobilData
);

header('Content-Type: application/json');
echo json_encode($responseData);
?>
