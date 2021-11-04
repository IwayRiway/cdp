-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Waktu pembuatan: 04 Nov 2021 pada 07.38
-- Versi server: 10.4.20-MariaDB
-- Versi PHP: 7.4.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cdp`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `container`
--

CREATE TABLE `container` (
  `id` int(11) NOT NULL,
  `container_no` varchar(25) NOT NULL,
  `size` int(10) NOT NULL,
  `type` varchar(10) NOT NULL,
  `gate_in` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `container`
--

INSERT INTO `container` (`id`, `container_no`, `size`, `type`, `gate_in`) VALUES
(1, 'COAU12345670', 21, 'Dry', '2021-11-04 12:35:00'),
(3, 'MEAU1234567', 41, 'Reefer', '2021-11-04 13:00:00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `customer`
--

CREATE TABLE `customer` (
  `id` int(11) NOT NULL,
  `code_cust` varchar(10) NOT NULL,
  `cust_name` varchar(150) NOT NULL,
  `address` varchar(250) NOT NULL,
  `join_date` date NOT NULL,
  `order_type` varchar(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `customer`
--

INSERT INTO `customer` (`id`, `code_cust`, `cust_name`, `address`, `join_date`, `order_type`) VALUES
(2, 'C0001', 'PT A', 'Jakarta', '2019-10-10', 'Import'),
(3, 'C0002', 'PT B', 'Surabaya', '2019-11-15', 'Import'),
(4, 'B0003', 'PT C', 'Cikarang', '2020-01-01', 'Export'),
(5, 'B0004', 'PT D', 'Bekasi', '2020-01-15', 'Export');

-- --------------------------------------------------------

--
-- Struktur dari tabel `forwarder`
--

CREATE TABLE `forwarder` (
  `id` int(11) NOT NULL,
  `code_fwd` varchar(10) NOT NULL,
  `fwd_name` varchar(25) NOT NULL,
  `address` varchar(25) NOT NULL,
  `code_cust` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `forwarder`
--

INSERT INTO `forwarder` (`id`, `code_fwd`, `fwd_name`, `address`, `code_cust`) VALUES
(1, 'F0001', 'PT AA', 'Jakarta', 'C0001'),
(2, 'F0002', 'PT BB', 'Bekasi', 'C0001'),
(3, 'F0003', 'PT CC', 'Bekasi', 'B0003'),
(4, 'F0004', 'PT DD', 'Jakarta', 'B0004');

-- --------------------------------------------------------

--
-- Struktur dari tabel `order`
--

CREATE TABLE `order` (
  `id` int(11) NOT NULL,
  `code_cust` varchar(10) NOT NULL,
  `container_no` varchar(25) NOT NULL,
  `type` varchar(10) NOT NULL,
  `amount` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `order`
--

INSERT INTO `order` (`id`, `code_cust`, `container_no`, `type`, `amount`) VALUES
(1, 'C0002', 'TCNU7660378', 'Dry', '700.000'),
(2, 'C0001', 'BMOU4353883', 'Dry', '700.000'),
(3, 'B0004', 'MSKU9917038', 'Dry', '700.000'),
(4, 'B0003', 'MRKU2306056', 'Refeer', '800.000');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `container`
--
ALTER TABLE `container`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `forwarder`
--
ALTER TABLE `forwarder`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `container`
--
ALTER TABLE `container`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `customer`
--
ALTER TABLE `customer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `forwarder`
--
ALTER TABLE `forwarder`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `order`
--
ALTER TABLE `order`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
