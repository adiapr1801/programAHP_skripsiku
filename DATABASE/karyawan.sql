-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 15, 2020 at 11:24 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `karyawan`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_absensi`
--

CREATE TABLE `tb_absensi` (
  `no` int(5) NOT NULL,
  `NPK` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `statusabsensi` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_absensi`
--

INSERT INTO `tb_absensi` (`no`, `NPK`, `tanggal`, `statusabsensi`) VALUES
(11, 1, '2020-07-10', 1),
(12, 1, '0000-00-00', 1),
(13, 4, '2020-07-08', 1),
(14, 2, '2020-07-10', 1),
(15, 3, '2020-07-10', 1),
(16, 4, '2020-07-10', 1),
(17, 5, '2020-07-10', 1),
(18, 6, '2020-07-10', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tb_gaji`
--

CREATE TABLE `tb_gaji` (
  `kd_gaji` int(11) NOT NULL,
  `NPK` int(11) NOT NULL,
  `kd_produksi` int(11) NOT NULL,
  `kd_absen` int(11) NOT NULL,
  `gaji_pokok` int(11) NOT NULL,
  `grade` int(11) NOT NULL,
  `total_gaji` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_karyawan`
--

CREATE TABLE `tb_karyawan` (
  `NPK` int(5) NOT NULL,
  `nama_karyawan` varchar(20) NOT NULL,
  `tgl_masuk` date NOT NULL,
  `bagian` varchar(10) NOT NULL,
  `kualitas_produk` int(1) NOT NULL,
  `kecepatan` int(1) NOT NULL,
  `absensi` int(1) NOT NULL,
  `sikap` int(1) NOT NULL,
  `grade` varchar(1) NOT NULL,
  `foto` longblob NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `hasil_produksi` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_karyawan`
--

INSERT INTO `tb_karyawan` (`NPK`, `nama_karyawan`, `tgl_masuk`, `bagian`, `kualitas_produk`, `kecepatan`, `absensi`, `sikap`, `grade`, `foto`, `alamat`, `hasil_produksi`) VALUES
(1, 'jeki', '2020-07-08', 'Operator', 3, 4, 0, 5, 'C', 0x4368727973616e7468656d756d2e6a7067, 'wonogiri', 0),
(2, 'edi', '2020-07-08', 'Operator', 3, 2, 0, 4, 'C', 0x4465736572742e6a7067, 'Pondok', 0),
(3, 'wisnu', '2020-07-08', 'Operator', 4, 5, 0, 4, 'C', 0x48796472616e676561732e6a7067, 'wonogiriioio', 0),
(4, 'dwi', '2020-07-08', 'Operator', 3, 3, 0, 5, 'C', 0x4a656c6c79666973682e6a7067, 'sragen', 0),
(5, 'elan', '2020-07-08', 'Operator', 2, 4, 0, 4, 'C', 0x4b6f616c612e6a7067, 'wonogiriioio', 0),
(6, 'adi', '2020-07-08', 'operator', 3, 2, 0, 3, 'C', 0x54756c6970732e6a7067, 'podok', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tb_produksi`
--

CREATE TABLE `tb_produksi` (
  `no` int(5) NOT NULL,
  `NPK` int(5) NOT NULL,
  `Tanggal` date NOT NULL,
  `jamke` int(2) NOT NULL,
  `hasil` int(3) NOT NULL,
  `status` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_produksi`
--

INSERT INTO `tb_produksi` (`no`, `NPK`, `Tanggal`, `jamke`, `hasil`, `status`) VALUES
(1, 1, '2020-07-08', 1, 25, 2),
(2, 1, '2020-07-08', 2, 30, 2),
(3, 1, '2020-07-08', 3, 30, 2),
(4, 1, '2020-07-08', 4, 29, 2),
(5, 1, '2020-07-08', 5, 28, 2),
(8, 1, '2020-07-08', 6, 20, 2),
(9, 1, '2020-07-08', 7, 10, 2),
(10, 1, '2020-07-08', 8, 10, 2),
(11, 1, '2020-07-08', 9, 16, 2),
(12, 1, '2020-07-08', 10, 25, 2),
(13, 1, '2020-07-08', 11, 30, 2),
(14, 1, '2020-07-08', 12, 26, 2),
(15, 1, '2020-07-08', 13, 30, 2),
(16, 1, '2020-07-08', 14, 29, 2),
(17, 1, '2020-07-08', 15, 15, 2),
(18, 1, '2020-07-08', 16, 20, 2),
(19, 2, '2020-07-08', 1, 30, 2),
(20, 2, '2020-07-08', 2, 20, 2),
(21, 2, '2020-07-08', 3, 29, 2),
(22, 2, '2020-07-08', 4, 30, 2),
(23, 2, '2020-07-08', 5, 21, 2),
(24, 2, '2020-07-08', 6, 27, 2),
(25, 2, '2020-07-08', 7, 19, 2),
(26, 2, '2020-07-08', 8, 25, 2),
(27, 2, '2020-07-08', 9, 25, 2),
(28, 2, '2020-07-08', 10, 27, 2),
(29, 2, '2020-07-08', 11, 30, 2),
(30, 2, '2020-07-08', 12, 24, 2),
(31, 2, '2020-07-08', 13, 24, 2),
(32, 2, '2020-07-08', 14, 13, 2),
(33, 2, '2020-07-08', 15, 16, 2),
(34, 2, '2020-07-08', 16, 25, 2),
(35, 3, '2020-07-08', 1, 25, 2),
(36, 3, '2020-07-08', 2, 26, 2),
(37, 3, '2020-07-08', 3, 27, 2),
(38, 3, '2020-07-08', 4, 29, 2),
(39, 3, '2020-07-08', 5, 28, 2),
(40, 3, '2020-07-08', 6, 24, 2),
(41, 3, '2020-07-08', 7, 21, 2),
(42, 3, '2020-07-08', 8, 30, 2),
(43, 3, '2020-07-08', 9, 29, 2),
(44, 3, '2020-07-08', 10, 17, 2),
(45, 3, '2020-07-08', 11, 30, 2),
(46, 3, '2020-07-08', 12, 17, 2),
(47, 3, '2020-07-08', 13, 17, 2),
(48, 3, '2020-07-08', 14, 16, 2),
(49, 3, '2020-07-08', 15, 20, 2),
(50, 3, '2020-07-08', 16, 25, 2),
(51, 4, '2020-07-08', 1, 30, 2),
(52, 4, '2020-07-08', 2, 30, 2),
(53, 4, '2020-07-08', 3, 29, 2),
(54, 4, '2020-07-08', 4, 29, 2),
(55, 4, '2020-07-08', 5, 28, 2),
(56, 4, '2020-07-08', 6, 28, 2),
(57, 4, '2020-07-08', 7, 27, 2),
(58, 4, '2020-07-08', 8, 27, 2),
(59, 4, '2020-07-08', 9, 25, 2),
(60, 4, '2020-07-08', 10, 27, 2),
(61, 4, '2020-07-08', 11, 23, 2),
(62, 4, '2020-07-08', 12, 23, 2),
(63, 4, '2020-07-08', 13, 26, 2),
(64, 4, '2020-07-08', 14, 23, 2),
(65, 4, '2020-07-08', 15, 24, 2),
(66, 4, '2020-07-08', 16, 22, 2),
(67, 5, '2020-07-08', 1, 20, 2),
(68, 5, '2020-07-08', 2, 22, 2),
(69, 5, '2020-07-08', 3, 25, 2),
(70, 5, '2020-07-08', 4, 25, 2),
(71, 5, '2020-07-08', 5, 27, 2),
(72, 5, '2020-07-08', 6, 26, 2),
(73, 5, '2020-07-08', 7, 28, 2),
(74, 5, '2020-07-08', 8, 9, 2),
(75, 5, '2020-07-08', 9, 39, 2),
(76, 5, '2020-07-08', 10, 27, 2),
(77, 5, '2020-07-08', 11, 26, 2),
(78, 5, '2020-07-08', 12, 30, 2),
(79, 5, '2020-07-08', 13, 20, 2),
(80, 5, '2020-07-08', 14, 28, 2),
(81, 5, '2020-07-08', 15, 29, 2),
(82, 5, '2020-07-08', 16, 19, 2),
(83, 6, '2020-07-08', 1, 27, 1),
(84, 6, '2020-07-08', 2, 27, 1),
(85, 6, '2020-07-08', 3, 26, 1),
(86, 6, '2020-07-08', 4, 25, 1),
(87, 6, '2020-07-08', 5, 24, 1),
(88, 6, '2020-07-08', 6, 23, 1),
(89, 6, '2020-07-08', 7, 27, 1),
(90, 6, '2020-07-08', 8, 19, 1),
(91, 6, '2020-07-08', 9, 16, 1),
(92, 6, '2020-07-08', 10, 16, 1),
(93, 6, '2020-07-08', 11, 16, 1),
(94, 6, '2020-07-08', 12, 16, 1),
(95, 6, '2020-07-08', 13, 17, 1),
(96, 6, '2020-07-08', 14, 16, 1),
(97, 6, '2020-07-08', 15, 16, 1),
(98, 6, '2020-07-08', 16, 29, 1),
(99, 1, '2020-07-10', 1, 23, 2),
(100, 1, '2020-07-10', 2, 10, 2),
(101, 1, '2020-07-10', 3, 30, 2),
(102, 1, '2020-07-10', 4, 30, 2),
(103, 1, '2020-07-10', 6, 10, 2),
(104, 1, '2020-07-10', 7, 29, 2),
(105, 1, '2020-07-10', 8, 28, 2),
(106, 1, '2020-07-10', 9, 27, 2),
(107, 1, '2020-07-10', 10, 27, 2),
(108, 1, '2020-07-10', 11, 26, 2),
(109, 1, '2020-07-10', 5, 25, 2),
(110, 1, '2020-07-10', 6, 10, 2),
(111, 1, '2020-07-10', 6, 10, 2),
(112, 1, '2020-07-10', 6, 10, 2),
(113, 1, '2020-07-10', 12, 24, 2),
(114, 1, '2020-07-10', 13, 15, 2),
(115, 1, '2020-07-10', 14, 30, 2),
(116, 1, '2020-07-10', 15, 30, 2),
(117, 1, '2020-07-10', 16, 30, 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_absensi`
--
ALTER TABLE `tb_absensi`
  ADD PRIMARY KEY (`no`);

--
-- Indexes for table `tb_karyawan`
--
ALTER TABLE `tb_karyawan`
  ADD PRIMARY KEY (`NPK`);

--
-- Indexes for table `tb_produksi`
--
ALTER TABLE `tb_produksi`
  ADD PRIMARY KEY (`no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_absensi`
--
ALTER TABLE `tb_absensi`
  MODIFY `no` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `tb_karyawan`
--
ALTER TABLE `tb_karyawan`
  MODIFY `NPK` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tb_produksi`
--
ALTER TABLE `tb_produksi`
  MODIFY `no` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=118;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
