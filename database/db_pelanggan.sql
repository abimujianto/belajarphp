-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 16, 2020 at 06:39 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_pelanggan`
--

-- --------------------------------------------------------

--
-- Table structure for table `langganan`
--

CREATE TABLE `langganan` (
  `id` varchar(10) NOT NULL,
  `paket_id` varchar(4) NOT NULL,
  `pelanggan_id` varchar(2) NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `langganan`
--

INSERT INTO `langganan` (`id`, `paket_id`, `pelanggan_id`, `tanggal`) VALUES
('1', 'PKT2', 'P1', '2020-10-13'),
('2', 'PKT1', 'P2', '2020-10-10'),
('3', 'PKT3', 'P3', '2019-10-13'),
('4', 'PKT4', 'P4', '2019-10-13');

-- --------------------------------------------------------

--
-- Table structure for table `paket`
--

CREATE TABLE `paket` (
  `id_paket` varchar(10) NOT NULL,
  `nama_paket` varchar(20) NOT NULL,
  `internet` varchar(10) NOT NULL,
  `useetv` varchar(20) NOT NULL,
  `kategori` varchar(3) NOT NULL,
  `price` int(20) NOT NULL,
  `pajak` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `paket`
--

INSERT INTO `paket` (`id_paket`, `nama_paket`, `internet`, `useetv`, `kategori`, `price`, `pajak`) VALUES
('PKT1', 'New Premium 3P', '10 Mbps', 'Esential + OTT', 'A10', 345000, '10%'),
('PKT2', 'New Premium 5P', '20 Mbps', 'Esential + OTT', 'A10', 450000, '10%'),
('PKT3', 'New Premium 4P', '100 Mbps', 'Esential + OTT', 'A30', 955000, '10%'),
('PKT4', 'New Premium 4P', '100 Mbps', 'Esential + OTT', 'A40', 955000, '10%');

-- --------------------------------------------------------

--
-- Table structure for table `pelanggan`
--

CREATE TABLE `pelanggan` (
  `id_pelanggan` varchar(10) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `jenis_kelamin` varchar(10) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `telpon` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pelanggan`
--

INSERT INTO `pelanggan` (`id_pelanggan`, `nama`, `jenis_kelamin`, `alamat`, `telpon`) VALUES
('P1', 'Muhammad Aldy Asmin', 'Laki-Laki', 'Balikpapan, Jl. Cendrawasih', '085820133411'),
('P2', 'Abi Mujianto', 'Laki-Laki', 'Balikpapan, KM4', '082222222222'),
('P3', 'Jaka Iswahyudi', 'Laki-laki', 'Balikpapan, DAM', '083333333333'),
('P4', 'Andika Samputra', 'Laki-Laki', 'Balikpapan, KM2.5', '084444444444'),
('P5', 'Lia Nuraini', 'Perempuan', 'Balikpapan, KM4', '084444444444'),
('P6', 'Ismail', 'Laki-Laki', 'Balikpapan, Ringroad', '084444444444'),
('P7', 'Mawar', 'Perempuan', 'Balikpapan, Ringroad', '084444444555');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `langganan`
--
ALTER TABLE `langganan`
  ADD KEY `paket_id` (`paket_id`) USING BTREE,
  ADD KEY `pelanggan_id` (`pelanggan_id`) USING BTREE;

--
-- Indexes for table `paket`
--
ALTER TABLE `paket`
  ADD UNIQUE KEY `id_paket` (`id_paket`),
  ADD KEY `id_paket_2` (`id_paket`);

--
-- Indexes for table `pelanggan`
--
ALTER TABLE `pelanggan`
  ADD UNIQUE KEY `id_pelanggan` (`id_pelanggan`),
  ADD KEY `id_pelanggan_2` (`id_pelanggan`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `langganan`
--
ALTER TABLE `langganan`
  ADD CONSTRAINT `langganan_ibfk_1` FOREIGN KEY (`paket_id`) REFERENCES `paket` (`id_paket`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `langganan_ibfk_2` FOREIGN KEY (`pelanggan_id`) REFERENCES `pelanggan` (`id_pelanggan`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
