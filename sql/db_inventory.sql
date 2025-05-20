-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 21, 2025 at 06:18 AM
-- Server version: 10.5.28-MariaDB-0+deb11u2
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_inventory`
--
CREATE DATABASE IF NOT EXISTS `db_inventory` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `db_inventory`;

-- --------------------------------------------------------

--
-- Table structure for table `tb_inventory`
--

CREATE TABLE `tb_inventory` (
  `id_barang` int(11) NOT NULL,
  `kode_barang` varchar(20) NOT NULL,
  `nama_barang` varchar(50) NOT NULL,
  `jumlah_barang` int(11) NOT NULL,
  `satuan_barang` varchar(20) NOT NULL,
  `harga_beli` double(20,2) NOT NULL,
  `status_barang` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_inventory`
--

INSERT INTO `tb_inventory` (`id_barang`, `kode_barang`, `nama_barang`, `jumlah_barang`, `satuan_barang`, `harga_beli`, `status_barang`) VALUES
(18, '49726-034', 'Adjustable Height Standing Desk Converter', 0, 'pcs', 1439840.00, 0),
(23, '16729-173', 'Wall Calendar', 16, 'pcs', 287840.00, 1),
(30, '55289-298', 'Kids\' Building Blocks', 12, 'pcs', 319840.00, 1),
(36, '58657-401', 'Wireless Earbud Silicone Covers', 0, 'pcs', 159840.00, 0),
(39, '51655-951', 'Portable Camping Shower', 78, 'pcs', 639840.00, 1),
(40, '36987-1064', 'Granola', 72, 'pcs', 76640.00, 1),
(43, '43526-107', 'Decorative Wall Tapestry', 25, 'pcs', 559840.00, 1),
(44, '54482-148', 'Children\'s Musical Instrument Set', 10, 'pcs', 639840.00, 1),
(47, '0904-6327', 'Beef Stew Meat', 12, 'pcs', 95840.00, 1),
(76, '49999-924', 'Dark Chocolate Bars', 40, 'pcs', 47840.00, 1),
(80, '60505-2604', 'Rechargeable Hand Warmer', 78, 'pcs', 367840.00, 1),
(81, '0781-3165', 'Home Office Chair', 69, 'pcs', 3199840.00, 1),
(93, '51414-600', 'Garlic and Herb Cream Cheese', 6, 'pcs', 55840.00, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_inventory`
--
ALTER TABLE `tb_inventory`
  ADD PRIMARY KEY (`id_barang`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_inventory`
--
ALTER TABLE `tb_inventory`
  MODIFY `id_barang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=98;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
