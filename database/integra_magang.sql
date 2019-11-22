-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 12 Sep 2019 pada 04.39
-- Versi Server: 10.1.28-MariaDB
-- PHP Version: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `integra_magang`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `absensi`
--

CREATE TABLE `absensi` (
  `id_absensi` int(50) NOT NULL,
  `id_magang` int(50) NOT NULL,
  `tanggal` date NOT NULL,
  `jam_absen` time NOT NULL,
  `absen` enum('Masuk','Tidak Masuk','','') NOT NULL,
  `alasan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `absensi`
--

INSERT INTO `absensi` (`id_absensi`, `id_magang`, `tanggal`, `jam_absen`, `absen`, `alasan`) VALUES
(22, 26, '2019-08-20', '00:00:00', 'Tidak Masuk', 'sakit perut'),
(23, 26, '2019-08-21', '00:00:00', 'Masuk', ''),
(24, 26, '2019-08-22', '00:00:00', 'Masuk', ''),
(25, 26, '2019-08-23', '00:00:00', 'Masuk', ''),
(26, 26, '2019-08-27', '00:00:00', 'Masuk', ''),
(27, 26, '2019-08-27', '00:00:00', 'Masuk', ''),
(28, 26, '2019-08-27', '00:00:00', 'Masuk', ''),
(29, 26, '2019-08-27', '00:00:00', 'Tidak Masuk', 'Sakit kepala'),
(40, 26, '2019-08-28', '00:00:00', 'Masuk', ''),
(52, 26, '2019-08-29', '00:00:00', 'Masuk', ''),
(53, 26, '2019-09-02', '00:00:00', 'Masuk', ''),
(64, 26, '2019-09-03', '02:09:22', 'Masuk', ''),
(65, 26, '2019-09-04', '09:49:24', 'Masuk', ''),
(66, 28, '2019-09-04', '02:45:30', 'Masuk', ''),
(67, 28, '2019-09-05', '09:36:20', 'Masuk', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `nama_admin` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id_admin`, `username`, `password`, `nama_admin`) VALUES
(1, 'admin', 'fddf42d74baff104e3969569d27e33df0f4b3f98', 'Muhammad Fahmi');

-- --------------------------------------------------------

--
-- Struktur dari tabel `aktifitas`
--

CREATE TABLE `aktifitas` (
  `id_aktifitas` int(11) NOT NULL,
  `id_magang` int(50) NOT NULL,
  `tgl_aktifitas` date NOT NULL,
  `isi_aktifitas` text NOT NULL,
  `capture_aktifitas` varchar(255) NOT NULL,
  `status_aktifitas` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `aktifitas`
--

INSERT INTO `aktifitas` (`id_aktifitas`, `id_magang`, `tgl_aktifitas`, `isi_aktifitas`, `capture_aktifitas`, `status_aktifitas`) VALUES
(16, 26, '2019-08-15', 'membuat absensi', 'modem.jpeg', 'Diterima'),
(17, 26, '2019-08-14', 'membuat validasi', 'printer.jpg', 'Diterima'),
(18, 26, '2019-09-03', 'hahsasuahsh', 'cap.png', 'pending'),
(19, 28, '2019-09-05', 'membuat forgot password', 'avatar.png', 'Diterima'),
(20, 28, '2019-09-04', 'memperbaiki error', 'call-answer.png', 'Ditolak');

-- --------------------------------------------------------

--
-- Struktur dari tabel `catatan_penolakan`
--

CREATE TABLE `catatan_penolakan` (
  `id_catatan` int(50) NOT NULL,
  `id_magang` int(50) NOT NULL,
  `status_magang` varchar(50) NOT NULL,
  `catatan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `catatan_penolakan`
--

INSERT INTO `catatan_penolakan` (`id_catatan`, `id_magang`, `status_magang`, `catatan`) VALUES
(13, 26, 'Diterima', 'Jaga tata tertib dengan baik, ikuti nasehat pembimbing');

-- --------------------------------------------------------

--
-- Struktur dari tabel `datacv`
--

CREATE TABLE `datacv` (
  `id_dataCV` int(11) NOT NULL,
  `id_magang` int(11) NOT NULL,
  `data` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `datacv`
--

INSERT INTO `datacv` (`id_dataCV`, `id_magang`, `data`) VALUES
(1, 28, '<p>Nama Saya Fani</p>\r\n');

-- --------------------------------------------------------

--
-- Struktur dari tabel `magang`
--

CREATE TABLE `magang` (
  `id_magang` int(11) NOT NULL,
  `nim_magang` varchar(50) NOT NULL,
  `nama_magang` varchar(200) NOT NULL,
  `ttl_magang` varchar(255) NOT NULL,
  `email_magang` varchar(90) NOT NULL,
  `password_magang` varchar(255) NOT NULL,
  `kampus_magang` varchar(100) NOT NULL,
  `jurusan_magang` varchar(100) NOT NULL,
  `alamat_magang` varchar(200) NOT NULL,
  `nohp_magang` varchar(20) NOT NULL,
  `status_magang` varchar(100) NOT NULL,
  `file_magang` varchar(225) NOT NULL,
  `foto_magang` varchar(50) NOT NULL,
  `jk_magang` varchar(20) NOT NULL,
  `is_actived` int(1) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `magang`
--

INSERT INTO `magang` (`id_magang`, `nim_magang`, `nama_magang`, `ttl_magang`, `email_magang`, `password_magang`, `kampus_magang`, `jurusan_magang`, `alamat_magang`, `nohp_magang`, `status_magang`, `file_magang`, `foto_magang`, `jk_magang`, `is_actived`, `date_created`) VALUES
(26, '028089237429811', 'Fani Rahmatulloh', 'Jombang, 28 September 2001', 'fanirahmatulloh842@gmail.com', '$2y$10$i6M2gonFPQcOGxoCwvkvhObvuSeJr108uAv1d/VTpxqymvW71Ot/.', 'Universitas Gajah Mada', 'Teknik Kendaraan Ringan', 'JL. Danau Buyan G7 D7 Sawojajar Malang', '081389031167', 'Diterima', 'doc_3.pdf', 'facebook1.png', 'Laki-Laki', 1, 1565842559),
(27, '028089237429811', 'Riski', '', '', '', '', '', '', '', '', '', '', '', 1, 0),
(28, '00122137823428', 'Mohammad Fani', 'Jombang ,29 September 2001', 'mohammad_fani_26rpl@student.smktelkom-mlg.sch.id', '$2y$10$v6hmuIHT6Qwm/iHVUUhyFuxW92m1ZNao/leVLgLvIn3qHiPmjSOzi', 'SMK Telkom Malang', 'Rekayasa Perangkat Lunak', 'JL. Danau Buyan G7 D7, Sawojajar, Malang', '081389031168977', 'Diterima', 'Mohammad_Fani_Rahmatulloh.pdf', 'Mohammad_Fani_Rahmatulloh.jpg', 'Laki-Laki', 1, 1567581490);

-- --------------------------------------------------------

--
-- Struktur dari tabel `periode_pemagang`
--

CREATE TABLE `periode_pemagang` (
  `id_periode_pemagang` int(11) NOT NULL,
  `id_magang` int(50) NOT NULL,
  `tgl_awal` date NOT NULL,
  `tgl_akhir` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `periode_pemagang`
--

INSERT INTO `periode_pemagang` (`id_periode_pemagang`, `id_magang`, `tgl_awal`, `tgl_akhir`) VALUES
(48, 26, '2019-04-01', '2019-09-23'),
(49, 27, '2019-09-01', '2019-12-30'),
(51, 28, '2019-07-01', '2019-09-27');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_token`
--

CREATE TABLE `user_token` (
  `id` int(11) NOT NULL,
  `email` varchar(128) NOT NULL,
  `token` varchar(128) NOT NULL,
  `date_created` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `absensi`
--
ALTER TABLE `absensi`
  ADD PRIMARY KEY (`id_absensi`),
  ADD KEY `id_magang` (`id_magang`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `aktifitas`
--
ALTER TABLE `aktifitas`
  ADD PRIMARY KEY (`id_aktifitas`),
  ADD KEY `id_magang` (`id_magang`);

--
-- Indexes for table `catatan_penolakan`
--
ALTER TABLE `catatan_penolakan`
  ADD PRIMARY KEY (`id_catatan`),
  ADD KEY `id_magang` (`id_magang`);

--
-- Indexes for table `datacv`
--
ALTER TABLE `datacv`
  ADD PRIMARY KEY (`id_dataCV`),
  ADD KEY `id_magang` (`id_magang`);

--
-- Indexes for table `magang`
--
ALTER TABLE `magang`
  ADD PRIMARY KEY (`id_magang`);

--
-- Indexes for table `periode_pemagang`
--
ALTER TABLE `periode_pemagang`
  ADD PRIMARY KEY (`id_periode_pemagang`),
  ADD KEY `id_magang` (`id_magang`);

--
-- Indexes for table `user_token`
--
ALTER TABLE `user_token`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `absensi`
--
ALTER TABLE `absensi`
  MODIFY `id_absensi` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `aktifitas`
--
ALTER TABLE `aktifitas`
  MODIFY `id_aktifitas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `catatan_penolakan`
--
ALTER TABLE `catatan_penolakan`
  MODIFY `id_catatan` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `datacv`
--
ALTER TABLE `datacv`
  MODIFY `id_dataCV` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `magang`
--
ALTER TABLE `magang`
  MODIFY `id_magang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `periode_pemagang`
--
ALTER TABLE `periode_pemagang`
  MODIFY `id_periode_pemagang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `user_token`
--
ALTER TABLE `user_token`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `absensi`
--
ALTER TABLE `absensi`
  ADD CONSTRAINT `absensi_ibfk_1` FOREIGN KEY (`id_magang`) REFERENCES `magang` (`id_magang`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `aktifitas`
--
ALTER TABLE `aktifitas`
  ADD CONSTRAINT `aktifitas_ibfk_2` FOREIGN KEY (`id_magang`) REFERENCES `magang` (`id_magang`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `catatan_penolakan`
--
ALTER TABLE `catatan_penolakan`
  ADD CONSTRAINT `catatan_penolakan_ibfk_1` FOREIGN KEY (`id_magang`) REFERENCES `magang` (`id_magang`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `periode_pemagang`
--
ALTER TABLE `periode_pemagang`
  ADD CONSTRAINT `periode_pemagang_ibfk_1` FOREIGN KEY (`id_magang`) REFERENCES `magang` (`id_magang`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
