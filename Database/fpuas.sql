-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 20 Jun 2023 pada 10.16
-- Versi server: 10.4.22-MariaDB
-- Versi PHP: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fpuas`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `mitra`
--

CREATE TABLE `mitra` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `telepon` varchar(20) NOT NULL,
  `perusahaan` varchar(100) NOT NULL,
  `alamat` varchar(200) NOT NULL,
  `jenis_mobil` varchar(100) NOT NULL,
  `jumlah_armada` int(11) NOT NULL,
  `lama_operasi` varchar(50) NOT NULL,
  `izin_usaha` enum('Ya','Tidak') NOT NULL,
  `asuransi` enum('Ya','Tidak') NOT NULL,
  `lokasi_operasional` varchar(100) NOT NULL,
  `pengalaman_sebelumnya` enum('Ya','Tidak') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `mitra`
--

INSERT INTO `mitra` (`id`, `nama`, `telepon`, `perusahaan`, `alamat`, `jenis_mobil`, `jumlah_armada`, `lama_operasi`, `izin_usaha`, `asuransi`, `lokasi_operasional`, `pengalaman_sebelumnya`) VALUES
(1, 'wisnu', '11', 'pt wow', 'jl mobil', 'avanza, inova, dll', 100, '50 tahun', '', '', 'jl kanan', ''),
(2, 'wisnu', '121212', 'pt wow', 'jl mobil', 'avanza, inova, dll', 8, '50 tahun', 'Ya', 'Ya', 'jl kanan', 'Ya'),
(3, 'wisnu', '11', 'pt wow', 'jl mobil', 'avanza, inova, dll', 15, '50 tahun', 'Ya', 'Ya', 'jl kanan', 'Ya'),
(4, 'Nizar Maulana Arrasyid', '087716353188', 'apa', 'Jl. Tambak Medokan Ayu, XI-B/Kav-98, Rungkut, Surabaya', 'apa', 5, '50 tahun', 'Ya', 'Ya', 'papapa', 'Ya'),
(5, 'Nizar Maulana Arrasyid', '087716353188', 'apa', 'Jl. Tambak Medokan Ayu, XI-B/Kav-98, Rungkut, Surabaya', 'apa', 5, '50 tahun', 'Ya', 'Ya', 'papapa', 'Ya'),
(6, 'Abrila', '087742135521', 'Rental XYZ', 'Jl. Tambak Medokan Ayu, XI-B/Kav-98, Rungkut, Surabaya', 'Avanza dan Xenia', 3, '5 Tahun', 'Ya', 'Ya', 'Surabaya', 'Ya');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_dashboard`
--

CREATE TABLE `tb_dashboard` (
  `id` int(11) NOT NULL,
  `mobil` varchar(50) DEFAULT NULL,
  `tanggalstartrental` date DEFAULT NULL,
  `waktustartrental` time DEFAULT NULL,
  `tanggalendrental` date DEFAULT NULL,
  `waktuendrental` time DEFAULT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `nomorhp` varchar(20) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `pengambilan` varchar(50) DEFAULT NULL,
  `lokasi_lain` varchar(50) DEFAULT NULL,
  `harga` decimal(10,2) DEFAULT NULL,
  `perusahaan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_dashboard`
--

INSERT INTO `tb_dashboard` (`id`, `mobil`, `tanggalstartrental`, `waktustartrental`, `tanggalendrental`, `waktuendrental`, `nama`, `nomorhp`, `email`, `pengambilan`, `lokasi_lain`, `harga`, `perusahaan`) VALUES
(1, 'Innova', '2023-06-12', '14:33:00', '2023-06-14', '14:33:00', 'Nizar Maulana Arrasyid', '087716353188', 'nizarmaulana777@gmail.com', 'Kantor', '', '500000.00', 'Perusahaan A'),
(2, 'Ayla', '2023-06-12', '17:50:00', '2023-06-13', '17:50:00', 'Nizar Maulana Arrasyid', '087716353188', 'nizarmaulana777@gmail.com', 'Kantor', '', '180000.00', 'Perusahaan B'),
(3, 'Avanza', '2023-06-13', '18:43:00', '2023-06-14', '18:43:00', 'Nizar Maulana Arrasyid', '087716353188', 'nizarmaulana777@gmail.com', 'Kantor', '', '200000.00', 'Perusahaan A'),
(4, 'Avanza', '2023-06-12', '18:46:00', '2023-06-14', '18:46:00', 'Nizar Maulana Arrasyid', '087716353188', 'nizarmaulana777@gmail.com', 'Kantor', '', '400000.00', 'Perusahaan A'),
(5, 'Avanza', '2023-06-12', '19:06:00', '2023-06-14', '19:06:00', 'Nizar Maulana Arrasyid', '087716353188', 'nizarmaulana777@gmail.com', 'Kantor', '', '400000.00', 'Perusahaan A'),
(6, 'Avanza', '2023-06-12', '19:16:00', '2023-06-13', '19:16:00', 'Nizar Maulana Arrasyid', '087716353188', 'nizarmaulana777@gmail.com', 'Kantor', '', '200000.00', 'Perusahaan A'),
(7, 'Innova', '2023-06-12', '19:19:00', '2023-06-14', '19:19:00', 'Nizar Maulana Arrasyid', '087716353188', 'nizarmaulana777@gmail.com', 'Kantor', '', '500000.00', 'Perusahaan A'),
(8, 'Ayla', '2023-06-12', '19:22:00', '2023-06-13', '19:22:00', 'Nizar Maulana Arrasyid', '087716353188', 'nizarmaulana777@gmail.com', 'Lokasi Lain', 'Rumah', '255000.00', 'Perusahaan B'),
(9, 'Innova', '2023-06-14', '19:25:00', '2023-06-16', '19:25:00', 'Nizar Maulana Arrasyid', '087716353188', 'nizarmaulana777@gmail.com', 'Kantor', '', '500000.00', 'Perusahaan B'),
(10, 'Innova', '2023-06-15', '20:18:00', '2023-06-18', '20:18:00', 'Bela', '087716353188', 'Bela123@gmail.com', 'Lokasi Lain', 'Rumah', '825000.00', 'Perusahaan A'),
(11, 'Ayla', '2023-06-16', '02:51:00', '2023-06-20', '02:51:00', 'Nizar Maulana Arrasyid', '087716353188', 'nizarmaulana777@gmail.com', 'Kantor', '', '720000.00', 'Perusahaan B'),
(12, 'Innova', '2023-06-17', '03:09:00', '2023-06-19', '03:09:00', 'Nizar Maulana Arrasyid', '087716353188', 'nizarmaulana777@gmail.com', 'Lokasi Lain', 'Rumah', '575000.00', 'Perusahaan C'),
(13, 'Ayla', '2023-06-17', '03:12:00', '2023-06-18', '03:12:00', 'Pak Sunarto', '08681246721', 'Sunarto77@gmail.com', 'Kantor', '', '180000.00', 'Perusahaan C'),
(14, 'Innova', '2023-06-18', '03:26:00', '2023-06-21', '03:26:00', 'Nizar Maulana Arrasyid', '087716353188', 'nizarmaulana777@gmail.com', 'Kantor', '', '750000.00', 'Perusahaan A'),
(15, 'Avanza', '2023-06-16', '20:23:00', '2023-06-20', '20:23:00', 'Nizar Maulana Arrasyid', '087716353188', 'nizarmaulana777@gmail.com', 'Lokasi Lain', 'Jl. Thamrin no 29, sby', '875000.00', 'Perusahaan A'),
(16, 'Ayla', '2023-06-17', '20:35:00', '2023-06-20', '20:35:00', 'Wisnu Mukti', '08787682412', 'wisnu123@gmail.com', 'Kantor', '', '540000.00', 'Perusahaan B'),
(17, 'Ayla', '2023-06-17', '20:37:00', '2023-06-24', '20:37:00', 'Wisnu', '087876576423', 'wisnu123@gmail.com', 'Lokasi Lain', 'Jl. Medokan Ayu/66, Surabaya', '1335000.00', 'Perusahaan C'),
(18, 'Ayla', '2023-06-21', '15:08:00', '2023-06-23', '15:08:00', 'Nizar Maulana Arrasyid', '087716353188', 'nizarmaulana777@gmail.com', 'Lokasi Lain', 'Universitas Indonesia', '435000.00', 'Perusahaan C');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_perusahaan_a`
--

CREATE TABLE `tb_perusahaan_a` (
  `id` int(11) NOT NULL,
  `mobil` varchar(255) NOT NULL,
  `tanggalstartrental` date NOT NULL,
  `waktustartrental` time NOT NULL,
  `tanggalendrental` date NOT NULL,
  `waktuendrental` time NOT NULL,
  `nama` varchar(255) NOT NULL,
  `nomorhp` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `pengambilan` varchar(255) NOT NULL,
  `lokasi_lain` varchar(255) DEFAULT NULL,
  `harga` varchar(255) NOT NULL,
  `perusahaan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_perusahaan_a`
--

INSERT INTO `tb_perusahaan_a` (`id`, `mobil`, `tanggalstartrental`, `waktustartrental`, `tanggalendrental`, `waktuendrental`, `nama`, `nomorhp`, `email`, `pengambilan`, `lokasi_lain`, `harga`, `perusahaan`) VALUES
(1, 'Innova', '2023-06-11', '04:37:00', '2023-06-13', '04:37:00', 'wisnu', '1020120', 'wisnu@gmail.com', 'Lokasi Lain', 'rumah', '575000', ''),
(2, '', '0000-00-00', '00:00:00', '0000-00-00', '00:00:00', '', '', '', '', '', '', ''),
(3, 'Avanza', '2023-06-07', '16:21:00', '2023-06-13', '16:21:00', 'Nizar Maulana Arrasyid', '087716353188', 'nizarmaulana777@gmail.com', 'Lokasi Lain', 'Rumah', '1275000', ''),
(4, 'Innova', '2023-06-11', '16:29:00', '2023-06-13', '16:29:00', 'Nizar Maulana Arrasyid', '087716353188', 'nizarmaulana777@gmail.com', 'Kantor', '', '500000', ''),
(6, 'Avanza', '2023-06-12', '16:30:00', '2023-06-14', '16:30:00', 'Nizar Maulana Arrasyid', '087716353188', 'nizarmaulana777@gmail.com', 'Kantor', '', '400000', ''),
(7, 'Avanza', '2023-06-12', '16:32:00', '2023-06-14', '16:32:00', 'Nizar Maulana Arrasyid', '087716353188', 'nizarmaulana777@gmail.com', 'Kantor', '', '400000', ''),
(8, 'Avanza', '2023-06-12', '16:36:00', '2023-06-14', '16:36:00', 'Nizar Maulana Arrasyid', '087716353188', 'nizarmaulana777@gmail.com', 'Kantor', '', '400000', ''),
(9, 'Avanza', '2023-06-12', '16:45:00', '2023-06-14', '16:48:00', 'Nizar Maulana Arrasyid', '087716353188', 'nizarmaulana777@gmail.com', 'Kantor', '', '400416.6666666666', 'Perusahaan A'),
(10, 'Avanza', '2023-06-12', '17:34:00', '2023-06-14', '17:34:00', 'Nizar Maulana Arrasyid', '087716353188', 'nizarmaulana777@gmail.com', 'Kantor', '', '400000', 'Perusahaan A'),
(11, 'Innova', '2023-06-12', '14:33:00', '2023-06-14', '14:33:00', 'Nizar Maulana Arrasyid', '087716353188', 'nizarmaulana777@gmail.com', 'Kantor', '', '500000', 'Perusahaan A'),
(12, 'Avanza', '2023-06-13', '18:43:00', '2023-06-14', '18:43:00', 'Nizar Maulana Arrasyid', '087716353188', 'nizarmaulana777@gmail.com', 'Kantor', '', '200000', 'Perusahaan A'),
(13, 'Avanza', '2023-06-12', '18:46:00', '2023-06-14', '18:46:00', 'Nizar Maulana Arrasyid', '087716353188', 'nizarmaulana777@gmail.com', 'Kantor', '', '400000', 'Perusahaan A'),
(14, 'Avanza', '2023-06-12', '19:06:00', '2023-06-14', '19:06:00', 'Nizar Maulana Arrasyid', '087716353188', 'nizarmaulana777@gmail.com', 'Kantor', '', '400000', 'Perusahaan A'),
(15, 'Avanza', '2023-06-12', '19:16:00', '2023-06-13', '19:16:00', 'Nizar Maulana Arrasyid', '087716353188', 'nizarmaulana777@gmail.com', 'Kantor', '', '200000', 'Perusahaan A'),
(16, 'Innova', '2023-06-12', '19:19:00', '2023-06-14', '19:19:00', 'Nizar Maulana Arrasyid', '087716353188', 'nizarmaulana777@gmail.com', 'Kantor', '', '500000', 'Perusahaan A'),
(17, 'Innova', '2023-06-15', '20:18:00', '2023-06-18', '20:18:00', 'Bela', '087716353188', 'Bela123@gmail.com', 'Lokasi Lain', 'Rumah', '825000', 'Perusahaan A'),
(18, 'Innova', '2023-06-18', '03:26:00', '2023-06-21', '03:26:00', 'Nizar Maulana Arrasyid', '087716353188', 'nizarmaulana777@gmail.com', 'Kantor', '', '750000', 'Perusahaan A'),
(19, 'Avanza', '2023-06-16', '20:23:00', '2023-06-20', '20:23:00', 'Nizar Maulana Arrasyid', '087716353188', 'nizarmaulana777@gmail.com', 'Lokasi Lain', 'Jl. Thamrin no 29, sby', '875000', 'Perusahaan A');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_perusahaan_b`
--

CREATE TABLE `tb_perusahaan_b` (
  `id` int(11) NOT NULL,
  `mobil` varchar(50) DEFAULT NULL,
  `tanggalstartrental` date DEFAULT NULL,
  `waktustartrental` time DEFAULT NULL,
  `tanggalendrental` date DEFAULT NULL,
  `waktuendrental` time DEFAULT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `nomorhp` varchar(20) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `pengambilan` varchar(50) DEFAULT NULL,
  `lokasi_lain` varchar(50) DEFAULT NULL,
  `harga` decimal(10,2) DEFAULT NULL,
  `perusahaan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_perusahaan_b`
--

INSERT INTO `tb_perusahaan_b` (`id`, `mobil`, `tanggalstartrental`, `waktustartrental`, `tanggalendrental`, `waktuendrental`, `nama`, `nomorhp`, `email`, `pengambilan`, `lokasi_lain`, `harga`, `perusahaan`) VALUES
(1, 'Ayla', '2023-06-12', '17:50:00', '2023-06-13', '17:50:00', 'Nizar Maulana Arrasyid', '087716353188', 'nizarmaulana777@gmail.com', 'Kantor', '', '180000.00', 'Perusahaan B'),
(2, 'Ayla', '2023-06-12', '19:22:00', '2023-06-13', '19:22:00', 'Nizar Maulana Arrasyid', '087716353188', 'nizarmaulana777@gmail.com', 'Lokasi Lain', 'Rumah', '255000.00', 'Perusahaan B'),
(3, 'Innova', '2023-06-14', '19:25:00', '2023-06-16', '19:25:00', 'Nizar Maulana Arrasyid', '087716353188', 'nizarmaulana777@gmail.com', 'Kantor', '', '500000.00', 'Perusahaan B'),
(4, 'Ayla', '2023-06-16', '02:51:00', '2023-06-20', '02:51:00', 'Nizar Maulana Arrasyid', '087716353188', 'nizarmaulana777@gmail.com', 'Kantor', '', '720000.00', 'Perusahaan B'),
(5, 'Ayla', '2023-06-17', '20:35:00', '2023-06-20', '20:35:00', 'Wisnu Mukti', '08787682412', 'wisnu123@gmail.com', 'Kantor', '', '540000.00', 'Perusahaan B');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_perusahaan_c`
--

CREATE TABLE `tb_perusahaan_c` (
  `id` int(11) NOT NULL,
  `mobil` varchar(50) DEFAULT NULL,
  `tanggalstartrental` date DEFAULT NULL,
  `waktustartrental` time DEFAULT NULL,
  `tanggalendrental` date DEFAULT NULL,
  `waktuendrental` time DEFAULT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `nomorhp` varchar(20) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `pengambilan` varchar(50) DEFAULT NULL,
  `lokasi_lain` varchar(50) DEFAULT NULL,
  `harga` decimal(10,2) DEFAULT NULL,
  `perusahaan` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_perusahaan_c`
--

INSERT INTO `tb_perusahaan_c` (`id`, `mobil`, `tanggalstartrental`, `waktustartrental`, `tanggalendrental`, `waktuendrental`, `nama`, `nomorhp`, `email`, `pengambilan`, `lokasi_lain`, `harga`, `perusahaan`) VALUES
(1, 'Innova', '2023-06-17', '03:09:00', '2023-06-19', '03:09:00', 'Nizar Maulana Arrasyid', '087716353188', 'nizarmaulana777@gmail.com', 'Lokasi Lain', 'Rumah', '575000.00', 'Perusahaan C'),
(2, 'Ayla', '2023-06-17', '03:12:00', '2023-06-18', '03:12:00', 'Pak Sunarto', '08681246721', 'Sunarto77@gmail.com', 'Kantor', '', '180000.00', 'Perusahaan C'),
(3, 'Ayla', '2023-06-17', '20:37:00', '2023-06-24', '20:37:00', 'Wisnu', '087876576423', 'wisnu123@gmail.com', 'Lokasi Lain', 'Jl. Medokan Ayu/66, Surabaya', '1335000.00', 'Perusahaan C'),
(4, 'Ayla', '2023-06-21', '15:08:00', '2023-06-23', '15:08:00', 'Nizar Maulana Arrasyid', '087716353188', 'nizarmaulana777@gmail.com', 'Lokasi Lain', 'Universitas Indonesia', '435000.00', 'Perusahaan C');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_user`
--

CREATE TABLE `tb_user` (
  `id_user` int(11) NOT NULL,
  `nama_lengkap` varchar(50) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_user`
--

INSERT INTO `tb_user` (`id_user`, `nama_lengkap`, `email`, `password`) VALUES
(1, 'Nizar Maulana Arrasyid', 'nizarmaulana777@gmail.com', '1234'),
(2, 'Miptah Ramadhani', 'Miptah123@gmail.com', 'miptahoke'),
(3, 'Farrel Farhan', 'Farrel123@gmail.com', 'farrel'),
(4, 'Bela Trinanda', 'Bela123@gmail.com', 'Bela123');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `mitra`
--
ALTER TABLE `mitra`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_dashboard`
--
ALTER TABLE `tb_dashboard`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_perusahaan_a`
--
ALTER TABLE `tb_perusahaan_a`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_perusahaan_b`
--
ALTER TABLE `tb_perusahaan_b`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_perusahaan_c`
--
ALTER TABLE `tb_perusahaan_c`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `mitra`
--
ALTER TABLE `mitra`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `tb_dashboard`
--
ALTER TABLE `tb_dashboard`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT untuk tabel `tb_perusahaan_a`
--
ALTER TABLE `tb_perusahaan_a`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT untuk tabel `tb_perusahaan_b`
--
ALTER TABLE `tb_perusahaan_b`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `tb_perusahaan_c`
--
ALTER TABLE `tb_perusahaan_c`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
