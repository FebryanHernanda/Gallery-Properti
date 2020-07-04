-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Waktu pembuatan: 30 Jun 2020 pada 07.57
-- Versi server: 10.4.11-MariaDB
-- Versi PHP: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `Gallery_Property`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `Properti`
--

CREATE TABLE `Properti` (
  `propertiCode` int(255) NOT NULL,
  `Nama` varchar(255) NOT NULL,
  `Deskripsi` varchar(255) NOT NULL,
  `Alamat` varchar(255) NOT NULL,
  `Harga` bigint(20) NOT NULL,
  `Gambar` blob NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `Properti`
--

INSERT INTO `Properti` (`propertiCode`, `Nama`, `Deskripsi`, `Alamat`, `Harga`, `Gambar`) VALUES
(2, 'Villa Nusa Kambangan', 'Mantap Pisan ueyy', 'bekasi', 1200000000000, '');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `Properti`
--
ALTER TABLE `Properti`
  ADD PRIMARY KEY (`propertiCode`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `Properti`
--
ALTER TABLE `Properti`
  MODIFY `propertiCode` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
