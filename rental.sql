-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 16 Des 2020 pada 08.18
-- Versi server: 10.1.38-MariaDB
-- Versi PHP: 7.3.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rental`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `kendaraan`
--

CREATE TABLE `kendaraan` (
  `id` varchar(6) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `plat` varchar(30) NOT NULL,
  `harga` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kendaraan`
--

INSERT INTO `kendaraan` (`id`, `nama`, `plat`, `harga`) VALUES
('DHT001', 'Ayla', 'N 7668 ADE', '150000'),
('DHT002', 'Xenia', 'N 9877 KKN', '250000'),
('DHT003', 'Ayla', 'N 1120 AAS', '150000'),
('HND001', 'Jazz', 'N 512 AD', '200000'),
('HND002', 'Brio', 'N 6899 AAQ', '200000'),
('HND003', 'Civic', 'N 24 KKL', '500000'),
('HND004', 'Mobilio', 'N 4309 MMN', '300000'),
('HND005', 'CR-V', 'N 1190 GHI', '350000'),
('HND006', 'Jazz', 'N 3001 RRT', '250000'),
('HND007', 'Mobilio', 'N 1209 HHI', '300000'),
('HND008', 'Mobilio', 'N 2173 BBO', '300000'),
('HND009', 'CR-V', 'N 9255 DD', '350000'),
('TYT001', 'Agya', 'N 5690 SSE', '150000'),
('TYT002', 'Avanza', 'N 2128 OOK', '250000'),
('TYT003', 'Avanza', 'N 3224 HN', '250000'),
('TYT004', 'Agya', 'N 3320 VB', '150000');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `kendaraan`
--
ALTER TABLE `kendaraan`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
