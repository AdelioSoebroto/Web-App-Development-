-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 12 Nov 2023 pada 16.15
-- Versi server: 10.4.28-MariaDB
-- Versi PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `olen_store`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tokoabc`
--

CREATE TABLE `tokoabc` (
  `no` int(11) NOT NULL,
  `kode_barang` varchar(255) NOT NULL,
  `nama_barang` varchar(255) NOT NULL,
  `harga_barang` float NOT NULL,
  `stok_barang` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tokoabc`
--

INSERT INTO `tokoabc` (`no`, `kode_barang`, `nama_barang`, `harga_barang`, `stok_barang`) VALUES
(7, 'A-304', 'Helicopter Mini', 45000000, 230),
(8, 'B-300', 'Paku Payung', 30, 5000),
(9, 'M-210', 'Xiao Macan', 237819000, 2),
(10, 'N-283', 'Lampu Neon', 3500, 10000),
(11, 'T-200', 'Kunci Pintu TULT', 28192800, 1);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tokoabc`
--
ALTER TABLE `tokoabc`
  ADD PRIMARY KEY (`no`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tokoabc`
--
ALTER TABLE `tokoabc`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
