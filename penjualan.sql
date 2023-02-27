-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 23, 2022 at 03:17 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `penjualan`
--

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE `barang` (
  `kode_barang` varchar(256) NOT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `stok` int(50) DEFAULT NULL,
  `harga` int(50) DEFAULT NULL,
  `id_kategori` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`kode_barang`, `nama`, `stok`, `harga`, `id_kategori`) VALUES
('1', 'iPhone 12', 10, 50000, 4),
('2', 'Acer Nitro 5', 3, 100000, 4),
('3', 'Kasur', 3, 5000, 2),
('4', 'Kompor', 3, 8000, 2),
('5', 'Traktor', 20, 100000, 1),
('6', 'Tali Skipping', 100, 2500, 3),
('7', 'Gitar Epiphone', 12, 12000, 5);

-- --------------------------------------------------------

--
-- Table structure for table `detail_order`
--

CREATE TABLE `detail_order` (
  `id_detailorder` int(11) NOT NULL,
  `quantity` int(50) DEFAULT NULL,
  `id_order` int(11) DEFAULT NULL,
  `id_barang` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `detail_order`
--

INSERT INTO `detail_order` (`id_detailorder`, `quantity`, `id_order`, `id_barang`) VALUES
(18, 1, 1, 1),
(19, 3, 2, 2),
(20, 2, 2, 4),
(21, 8, 3, 6),
(22, 2, 3, 7),
(23, 11, 4, 3),
(24, 4, 5, 5),
(25, 2, 5, 3);

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` int(11) NOT NULL,
  `nama` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `nama`) VALUES
(1, 'Alat Pertanian'),
(2, 'Alat Rumah Tangga'),
(3, 'Alat Olahraga'),
(4, 'Alat Elektronik'),
(5, 'Alat Musik');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id_order` int(11) NOT NULL,
  `tanggal` date DEFAULT NULL,
  `status` varchar(50) DEFAULT NULL,
  `total` int(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id_order`, `tanggal`, `status`, `total`) VALUES
(1, '2022-05-20', 'Selesai', 50000),
(2, '2022-05-23', 'Selesai', 90000),
(3, '2022-05-23', 'Selesai', 70000),
(4, '2022-05-24', 'Selesai', 10000),
(5, '2022-05-24', 'Selesai', 65000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`kode_barang`);

--
-- Indexes for table `detail_order`
--
ALTER TABLE `detail_order`
  ADD PRIMARY KEY (`id_detailorder`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id_order`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `detail_order`
--
ALTER TABLE `detail_order`
  MODIFY `id_detailorder` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
