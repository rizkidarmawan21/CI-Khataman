-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 17, 2021 at 04:10 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.4.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `khatam`
--

-- --------------------------------------------------------

--
-- Table structure for table `bilghoib`
--

CREATE TABLE `bilghoib` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `kelas` int(11) NOT NULL,
  `jenjang` varchar(50) NOT NULL,
  `jenkel` varchar(50) NOT NULL,
  `nama_ayah` varchar(50) NOT NULL,
  `lahir` date NOT NULL,
  `temp_lahir` varchar(50) NOT NULL,
  `no_telp` text NOT NULL,
  `statuss` set('1','0') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bilghoib`
--

INSERT INTO `bilghoib` (`id`, `nama`, `alamat`, `kelas`, `jenjang`, `jenkel`, `nama_ayah`, `lahir`, `temp_lahir`, `no_telp`, `statuss`) VALUES
(10, 'Siska Chol', 'Dusun sukamti rt 1 rw 2 kabupaten malangan, kecamatan milingan,kota malang jawa timur', 8, 'MA', 'putra', 'Sukino', '2021-05-08', 'Semarang', '089123456789', '0');

-- --------------------------------------------------------

--
-- Table structure for table `binadhor`
--

CREATE TABLE `binadhor` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `kelas` int(11) NOT NULL,
  `jenjang` varchar(20) NOT NULL,
  `jenkel` varchar(20) NOT NULL,
  `nama_ayah` varchar(100) NOT NULL,
  `lahir` date NOT NULL,
  `temp_lahir` varchar(20) NOT NULL,
  `no_telp` text NOT NULL,
  `statuss` set('1','0') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `seragam`
--

CREATE TABLE `seragam` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `ukuran` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `serbilghoib`
--

CREATE TABLE `serbilghoib` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `ukuran` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `serbilghoib`
--

INSERT INTO `serbilghoib` (`id`, `nama`, `ukuran`) VALUES
(4, 'Siska', 'M');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bilghoib`
--
ALTER TABLE `bilghoib`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `binadhor`
--
ALTER TABLE `binadhor`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `seragam`
--
ALTER TABLE `seragam`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `serbilghoib`
--
ALTER TABLE `serbilghoib`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bilghoib`
--
ALTER TABLE `bilghoib`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `binadhor`
--
ALTER TABLE `binadhor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `seragam`
--
ALTER TABLE `seragam`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `serbilghoib`
--
ALTER TABLE `serbilghoib`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
