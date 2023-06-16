<?php
include('koneksi.php');
require 'vendor/autoload.php';
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

$spreadsheet = new Spreadsheet();
$sheet = $spreadsheet->getActiveSheet();
$sheet->setCellValue('A1', 'Nomor');
$sheet->setCellValue('B1', 'mobil');
$sheet->setCellValue('C1', 'tanggalstartrental');
$sheet->setCellValue('D1', 'waktustartrental');
$sheet->setCellValue('E1', 'tanggalendrental');
$sheet->setCellValue('F1', 'waktuendrental');
$sheet->setCellValue('G1', 'nama');
$sheet->setCellValue('H1', 'nomorhp');
$sheet->setCellValue('I1', 'email');
$sheet->setCellValue('J1', 'pengambilan');
$sheet->setCellValue('K1', 'lokasi_lain');
$sheet->setCellValue('L1', 'harga');
$sheet->setCellValue('M1', 'perusahaan');

$query = mysqli_query($conn, "select * from tb_dashboard");
$i = 2;
$no = 1;
while($row = mysqli_fetch_array($query))
{
    $sheet->setCellValue('A'.$i, $no++);
    $sheet->setCellValue('B'.$i, $row['mobil']);
    $sheet->setCellValue('C'.$i, $row['tanggalstartrental']);
    $sheet->setCellValue('D'.$i, $row['waktustartrental']);
    $sheet->setCellValue('E'.$i, $row['tanggalendrental']);
    $sheet->setCellValue('F'.$i, $row['waktuendrental']);
    $sheet->setCellValue('G'.$i, $row['nama']);
    $sheet->setCellValue('H'.$i, $row['nomorhp']);
    $sheet->setCellValue('I'.$i, $row['email']);
    $sheet->setCellValue('J'.$i, $row['pengambilan']);
    $sheet->setCellValue('K'.$i, $row['lokasi_lain']);
    $sheet->setCellValue('L'.$i, $row['harga']);
    $sheet->setCellValue('M'.$i, $row['perusahaan']);
    $i++;
}

$styleArray = [
    'borders' => [
        'allBorders' => [
            'borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN,
        ],
    ],
];
$i = $i - 1;
$sheet->getStyle('A1:M'.$i)->applyFromArray($styleArray);

// ...

$writer = new Xlsx($spreadsheet);
$filename = 'Report Dashboard.xlsx';

// Set header untuk mengirim file sebagai download
header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
header('Content-Disposition: attachment;filename="'. $filename .'"');
header('Cache-Control: max-age=0');

$writer->save('php://output');
exit;

?>