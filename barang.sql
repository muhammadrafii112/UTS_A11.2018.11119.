-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 22 Apr 2020 pada 13.54
-- Versi server: 10.4.11-MariaDB
-- Versi PHP: 7.2.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gaber`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `barang`
--

CREATE TABLE `barang` (
  `kd_sub` varchar(10) NOT NULL,
  `nm_sup` varchar(50) NOT NULL,
  `alm_sup` varchar(50) NOT NULL,
  `telp_sup` varchar(20) NOT NULL,
  `hp_sup` varchar(20) NOT NULL,
  `email_sup` varchar(50) NOT NULL,
  `kota_sup` varchar(50) NOT NULL,
  `kode_pos` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `barang`
--

INSERT INTO `barang` (`kd_sub`, `nm_sup`, `alm_sup`, `telp_sup`, `hp_sup`, `email_sup`, `kota_sup`, `kode_pos`) VALUES
('1001', 'Muhammad Rafi Dian Andila', 'Pucang Gading', '0987543322', '5789853467', 'muh@gmaill.com', 'Semarang', '8975'),
('1243', 'dfghj', 'sdfghjk', '234567', '2345678', 'wertyui', 'sdfghj', '5678');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`kd_sub`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
