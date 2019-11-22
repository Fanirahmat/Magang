-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 18 Feb 2019 pada 04.32
-- Versi server: 10.1.36-MariaDB
-- Versi PHP: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sim_integra`
--

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
(1, 'admin', 'd033e22ae348aeb5660fc2140aec35850c4da997', 'Muhammad Fahmi');

-- --------------------------------------------------------

--
-- Struktur dari tabel `aktifitas`
--

CREATE TABLE `aktifitas` (
  `id_aktifitas` int(11) NOT NULL,
  `id_periode_pemagang` int(11) NOT NULL,
  `tgl_aktifitas` date NOT NULL,
  `judul_aktifitas` varchar(225) NOT NULL,
  `isi_aktifitas` text NOT NULL,
  `file_aktifitas` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `aktifitas`
--

INSERT INTO `aktifitas` (`id_aktifitas`, `id_periode_pemagang`, `tgl_aktifitas`, `judul_aktifitas`, `isi_aktifitas`, `file_aktifitas`) VALUES
(7, 3, '2019-02-07', 'Membuat desain halaman depan', '<ul>\r\n	<li>desian</li>\r\n	<li>desain2</li>\r\n	<li>desain3</li>\r\n</ul>\r\n', '1748552.png'),
(8, 1, '2019-02-07', 'Desain 1', '<ul>\r\n	<li>desain 1</li>\r\n	<li>desain 2</li>\r\n	<li>desain 3</li>\r\n	<li>eaaaaaaak</li>\r\n</ul>\r\n', '1748553.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `jadwal_magang`
--

CREATE TABLE `jadwal_magang` (
  `id_periode_pemagang` int(30) NOT NULL,
  `jam_magang` varchar(225) NOT NULL,
  `hari_magang` varchar(100) NOT NULL,
  `id_jadwal` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `jadwal_magang`
--

INSERT INTO `jadwal_magang` (`id_periode_pemagang`, `jam_magang`, `hari_magang`, `id_jadwal`) VALUES
(6, '08:00s/d16:00', 'Senin', 1),
(1, '08:00s/d16:00', 'Selasa', 2),
(6, '08:00s/d16:00', 'Selasa', 3);

-- --------------------------------------------------------

--
-- Struktur dari tabel `magang`
--

CREATE TABLE `magang` (
  `id_magang` int(11) NOT NULL,
  `nim_magang` varchar(50) NOT NULL,
  `nama_magang` varchar(200) NOT NULL,
  `email_magang` varchar(90) NOT NULL,
  `password_magang` varchar(50) NOT NULL,
  `kampus_magang` varchar(100) NOT NULL,
  `jurusan_magang` varchar(100) NOT NULL,
  `alamat_magang` varchar(200) NOT NULL,
  `nohp_magang` varchar(20) NOT NULL,
  `status_magang` varchar(100) NOT NULL,
  `file_magang` varchar(225) NOT NULL,
  `foto_magang` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `magang`
--

INSERT INTO `magang` (`id_magang`, `nim_magang`, `nama_magang`, `email_magang`, `password_magang`, `kampus_magang`, `jurusan_magang`, `alamat_magang`, `nohp_magang`, `status_magang`, `file_magang`, `foto_magang`) VALUES
(1, '1203810', 'Indah Ayu', 'indahayu@gmail.com', '10d0b55e0ce96e1ad711adaac266c9200cbc27e4', 'Amikom', 'Teknik Informatika', 'Jogja', '0908968697069', 'Diterima', '', 'izone.PNG'),
(2, '9749273', 'MemetJamed', 'memet@gmail.com', '10d0b55e0ce96e1ad711adaac266c9200cbc27e4', 'UTY', 'Informasi', 'Kulon', '0897979696758', 'Diterima', '', ''),
(3, '2091010', 'RizaAhmad', 'rizariza@gmail.com', '10d0b55e0ce96e1ad711adaac266c9200cbc27e4', 'UGM', 'Informatika', 'jogja', '79786860060', 'Diterima', '', ''),
(4, '', 'BudiRahman', 'budi@gmail.com', '10d0b55e0ce96e1ad711adaac266c9200cbc27e4', '', '', 'Jogja', '0857890079', '', '', ''),
(5, '', 'AntonBagaskara', 'bagas@gmail.com', '10d0b55e0ce96e1ad711adaac266c9200cbc27e4', '', '', 'Jogja', '09787966575565', '', '', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `periode_magang`
--

CREATE TABLE `periode_magang` (
  `id_periode` int(11) NOT NULL,
  `bulan` varchar(12) NOT NULL,
  `tahun` varchar(200) NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `periode_magang`
--

INSERT INTO `periode_magang` (`id_periode`, `bulan`, `tahun`, `status`) VALUES
(13, 'Januari', '2019', 'Aktif'),
(14, 'Februari', '2019', 'Aktif'),
(15, 'Maret', '2019', 'Aktif'),
(16, 'April', '2019', 'Aktif'),
(17, 'Mei', '2019', 'Aktif'),
(18, 'Juni', '2019', 'Aktif'),
(19, 'Juli', '2019', 'Aktif'),
(21, 'Januari', '2020', 'Aktif');

-- --------------------------------------------------------

--
-- Struktur dari tabel `periode_pemagang`
--

CREATE TABLE `periode_pemagang` (
  `id_periode_pemagang` int(11) NOT NULL,
  `id_magang` int(11) NOT NULL,
  `id_periode` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `periode_pemagang`
--

INSERT INTO `periode_pemagang` (`id_periode_pemagang`, `id_magang`, `id_periode`) VALUES
(1, 1, 13),
(2, 1, 14),
(3, 2, 14),
(4, 2, 15),
(5, 3, 14),
(6, 3, 15);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indeks untuk tabel `aktifitas`
--
ALTER TABLE `aktifitas`
  ADD PRIMARY KEY (`id_aktifitas`);

--
-- Indeks untuk tabel `jadwal_magang`
--
ALTER TABLE `jadwal_magang`
  ADD PRIMARY KEY (`id_jadwal`);

--
-- Indeks untuk tabel `magang`
--
ALTER TABLE `magang`
  ADD PRIMARY KEY (`id_magang`);

--
-- Indeks untuk tabel `periode_magang`
--
ALTER TABLE `periode_magang`
  ADD PRIMARY KEY (`id_periode`);

--
-- Indeks untuk tabel `periode_pemagang`
--
ALTER TABLE `periode_pemagang`
  ADD PRIMARY KEY (`id_periode_pemagang`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `aktifitas`
--
ALTER TABLE `aktifitas`
  MODIFY `id_aktifitas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `jadwal_magang`
--
ALTER TABLE `jadwal_magang`
  MODIFY `id_jadwal` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `magang`
--
ALTER TABLE `magang`
  MODIFY `id_magang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `periode_magang`
--
ALTER TABLE `periode_magang`
  MODIFY `id_periode` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT untuk tabel `periode_pemagang`
--
ALTER TABLE `periode_pemagang`
  MODIFY `id_periode_pemagang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
