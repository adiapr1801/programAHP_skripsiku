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
-- Database: `employees`
--

-- --------------------------------------------------------

--
-- Table structure for table `analisa_alternatif`
--

CREATE TABLE `analisa_alternatif` (
  `alternatif_pertama` varchar(4) NOT NULL,
  `nilai_analisa_alternatif` double NOT NULL,
  `hasil_analisa_alternatif` double NOT NULL,
  `alternatif_kedua` varchar(4) NOT NULL,
  `id_kriteria` varchar(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `analisa_alternatif`
--

INSERT INTO `analisa_alternatif` (`alternatif_pertama`, `nilai_analisa_alternatif`, `hasil_analisa_alternatif`, `alternatif_kedua`, `id_kriteria`) VALUES
('A002', 1, 0.79746835443038, 'A002', 'C1'),
('A002', 1, 0.65217391304348, 'A002', 'C2'),
('A002', 1, 0.45454545454545, 'A002', 'C4'),
('A002', 1, 0.42857142857143, 'A002', 'C5'),
('A002', 9, 0.87096774193548, 'A003', 'C1'),
('A002', 3, 0.72413793103448, 'A003', 'C2'),
('A002', 1, 0.47368421052632, 'A003', 'C4'),
('A002', 1, 0.45454545454545, 'A003', 'C5'),
('A002', 7, 0.63636363636364, 'A004', 'C1'),
('A002', 5, 0.38461538461538, 'A004', 'C2'),
('A002', 5, 0.33333333333333, 'A004', 'C4'),
('A002', 3, 0.33333333333333, 'A004', 'C5'),
('A003', 0.11111111111111, 0.088607594936708, 'A002', 'C1'),
('A003', 0.33333333333333, 0.21739130434782, 'A002', 'C2'),
('A003', 1, 0.45454545454545, 'A002', 'C4'),
('A003', 1, 0.42857142857143, 'A002', 'C5'),
('A003', 1, 0.096774193548387, 'A003', 'C1'),
('A003', 1, 0.24137931034483, 'A003', 'C2'),
('A003', 1, 0.47368421052632, 'A003', 'C4'),
('A003', 1, 0.45454545454545, 'A003', 'C5'),
('A003', 3, 0.27272727272727, 'A004', 'C1'),
('A003', 7, 0.53846153846154, 'A004', 'C2'),
('A003', 9, 0.6, 'A004', 'C4'),
('A003', 5, 0.55555555555556, 'A004', 'C5'),
('A004', 0.14285714285714, 0.11392405063291, 'A002', 'C1'),
('A004', 0.2, 0.1304347826087, 'A002', 'C2'),
('A004', 0.2, 0.090909090909091, 'A002', 'C4'),
('A004', 0.33333333333333, 0.14285714285714, 'A002', 'C5'),
('A004', 0.33333333333333, 0.032258064516129, 'A003', 'C1'),
('A004', 0.14285714285714, 0.034482758620689, 'A003', 'C2'),
('A004', 0.11111111111111, 0.052631578947368, 'A003', 'C4'),
('A004', 0.2, 0.090909090909091, 'A003', 'C5'),
('A004', 1, 0.090909090909091, 'A004', 'C1'),
('A004', 1, 0.076923076923077, 'A004', 'C2'),
('A004', 1, 0.066666666666667, 'A004', 'C4'),
('A004', 1, 0.11111111111111, 'A004', 'C5');

-- --------------------------------------------------------

--
-- Table structure for table `analisa_kriteria`
--

CREATE TABLE `analisa_kriteria` (
  `kriteria_pertama` varchar(2) NOT NULL,
  `nilai_analisa_kriteria` double NOT NULL,
  `hasil_analisa_kriteria` double NOT NULL,
  `kriteria_kedua` varchar(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `analisa_kriteria`
--

INSERT INTO `analisa_kriteria` (`kriteria_pertama`, `nilai_analisa_kriteria`, `hasil_analisa_kriteria`, `kriteria_kedua`) VALUES
('C1', 1, 0.49763033175356, 'C1'),
('C1', 3, 0.61643835616438, 'C2'),
('C1', 3, 0.39823008849558, 'C3'),
('C1', 5, 0.40983606557377, 'C4'),
('C1', 7, 0.30434782608696, 'C5'),
('C2', 0.33333333333333, 0.16587677725118, 'C1'),
('C2', 1, 0.20547945205479, 'C2'),
('C2', 3, 0.39823008849558, 'C3'),
('C2', 3, 0.24590163934426, 'C4'),
('C2', 5, 0.21739130434783, 'C5'),
('C3', 0.33333333333333, 0.16587677725118, 'C1'),
('C3', 0.33333333333333, 0.068493150684931, 'C2'),
('C3', 1, 0.13274336283186, 'C3'),
('C3', 3, 0.24590163934426, 'C4'),
('C3', 5, 0.21739130434783, 'C5'),
('C4', 0.2, 0.099526066350711, 'C1'),
('C4', 0.33333333333333, 0.068493150684931, 'C2'),
('C4', 0.33333333333333, 0.044247787610619, 'C3'),
('C4', 1, 0.081967213114754, 'C4'),
('C4', 5, 0.21739130434783, 'C5'),
('C5', 0.14285714285714, 0.071090047393364, 'C1'),
('C5', 0.2, 0.041095890410959, 'C2'),
('C5', 0.2, 0.026548672566372, 'C3'),
('C5', 0.2, 0.016393442622951, 'C4'),
('C5', 1, 0.043478260869565, 'C5');

-- --------------------------------------------------------

--
-- Table structure for table `data_alternatif`
--

CREATE TABLE `data_alternatif` (
  `id_alternatif` varchar(4) NOT NULL,
  `nik` char(18) NOT NULL,
  `nama` varchar(45) NOT NULL,
  `tempat_lahir` varchar(100) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `kelamin` enum('pria','wanita') NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `jabatan` varchar(20) NOT NULL,
  `tanggal_masuk` date NOT NULL,
  `pendidikan` varchar(20) NOT NULL,
  `hasil_akhir` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_alternatif`
--

INSERT INTO `data_alternatif` (`id_alternatif`, `nik`, `nama`, `tempat_lahir`, `tanggal_lahir`, `kelamin`, `alamat`, `jabatan`, `tanggal_masuk`, `pendidikan`, `hasil_akhir`) VALUES
('A001', '11', 'jeki', 'won', '0000-00-00', 'wanita', 'wonogiri', 'operator', '0000-00-00', 'smk', NULL),
('A002', '222', 'dwi', 'wonogiri', '0000-00-00', 'pria', 'wonogiri', 'operator', '0000-00-00', 'smk', 0.5955959881808629),
('A003', '333', 'elan', 'wonogiri', '0000-00-00', 'wanita', 'wonogiri', 'operator', '0000-00-00', 'SMK', 0.183206813739397),
('A004', '444', 'ADI', 'WO', '0000-00-00', 'wanita', 'wonogiri', 'operator', '0000-00-00', 'SMK', 0.0755809720720849);

-- --------------------------------------------------------

--
-- Table structure for table `data_kriteria`
--

CREATE TABLE `data_kriteria` (
  `id_kriteria` varchar(2) NOT NULL,
  `nama_kriteria` varchar(45) NOT NULL,
  `jumlah_kriteria` double NOT NULL,
  `bobot_kriteria` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_kriteria`
--

INSERT INTO `data_kriteria` (`id_kriteria`, `nama_kriteria`, `jumlah_kriteria`, `bobot_kriteria`) VALUES
('C1', 'Hasil', 2.0095238095237997, 0.44529653361485),
('C2', 'Kualitas', 4.866666666666661, 0.24657585229872797),
('C3', 'Kecepatan', 7.5333333333333306, 0.16608124689201217),
('C4', 'Absensi', 12.2, 0.10232510442176901),
('C5', 'Sikap', 23, 0.0397212627726422);

-- --------------------------------------------------------

--
-- Table structure for table `jum_alt_kri`
--

CREATE TABLE `jum_alt_kri` (
  `id_alternatif` varchar(4) NOT NULL,
  `id_kriteria` varchar(2) NOT NULL,
  `jumlah_alt_kri` double NOT NULL,
  `skor_alt_kri` double NOT NULL,
  `hasil_alt_kri` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jum_alt_kri`
--

INSERT INTO `jum_alt_kri` (`id_alternatif`, `id_kriteria`, `jumlah_alt_kri`, `skor_alt_kri`, `hasil_alt_kri`) VALUES
('A002', 'C1', 1.25396825396825, 0.7682665775765001, 0.34210644388696),
('A002', 'C2', 1.5333333333333299, 0.6776211602371399, 0.16708501512113),
('A002', 'C4', 2.2, 0.632728995982794, 0.06474406058462),
('A002', 'C5', 2.33333333333333, 0.5453116813565125, 0.021660468588153),
('A003', 'C1', 10.33333333333333, 0.15270302040412168, 0.067998125658473),
('A003', 'C2', 4.14285714285714, 0.2425568690610925, 0.05980866671965),
('A003', 'C4', 2.11111111111111, 0.39835708794383246, 0.040761930621004),
('A003', 'C5', 2.2, 0.3685202765092304, 0.01463809074027),
('A004', 'C1', 11, 0.07903040201937667, 0.035191964069416),
('A004', 'C2', 13, 0.079821970701766, 0.019682170457952),
('A004', 'C4', 15, 0.1689139160733722, 0.017284134100498),
('A004', 'C5', 9, 0.08616804213425526, 0.0034227034442189);

-- --------------------------------------------------------

--
-- Table structure for table `nilai`
--

CREATE TABLE `nilai` (
  `id_nilai` int(11) NOT NULL,
  `jum_nilai` double NOT NULL,
  `ket_nilai` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `nilai`
--

INSERT INTO `nilai` (`id_nilai`, `jum_nilai`, `ket_nilai`) VALUES
(2, 9, 'Mutlak sangat penting dari'),
(3, 8, 'Mendekati mutlak dari'),
(8, 7, 'Sangat penting dari'),
(9, 6, 'Mendekati sangat penting dari'),
(10, 5, 'Lebih penting dari'),
(11, 4, 'Mendekati lebih penting dari'),
(12, 3, 'Sedikit lebih penting dari'),
(13, 2, 'Mendekati sedikit lebih penting dari'),
(14, 1, 'Sama penting dengan'),
(15, 0.5, '1 bagi mendekati sedikit lebih penting dari'),
(16, 0.333, '1 bagi sedikit lebih penting dari'),
(17, 0.25, '1 bagi mendekati lebih penting dari'),
(18, 0.2, '1 bagi lebih penting dari'),
(19, 0.167, '1 bagi mendekati sangat penting dari'),
(20, 0.143, '1 bagi sangat penting dari'),
(21, 0.125, '1 bagi mendekati mutlak dari'),
(22, 0.1, '1 bagi mutlak sangat penting dari');

-- --------------------------------------------------------

--
-- Table structure for table `nilai_awal`
--

CREATE TABLE `nilai_awal` (
  `id_nilai_awal` int(11) NOT NULL,
  `id_alternatif` varchar(4) NOT NULL,
  `nilai` varchar(5) NOT NULL,
  `keterangan` enum('B','C','K') NOT NULL,
  `periode` varchar(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `nilai_awal`
--

INSERT INTO `nilai_awal` (`id_nilai_awal`, `id_alternatif`, `nilai`, `keterangan`, `periode`) VALUES
(14, 'A001', '144.2', 'K', '2016'),
(15, 'A002', '86.8', 'B', '2016'),
(16, 'A003', '82.2', 'B', '2016'),
(17, 'A004', '79', 'B', '2016');

-- --------------------------------------------------------

--
-- Table structure for table `nilai_awal_detail`
--

CREATE TABLE `nilai_awal_detail` (
  `id_nilai_awal_detail` int(11) NOT NULL,
  `id_nilai_awal` int(11) NOT NULL,
  `id_kriteria` varchar(2) NOT NULL,
  `nilai` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `nilai_awal_detail`
--

INSERT INTO `nilai_awal_detail` (`id_nilai_awal_detail`, `id_nilai_awal`, `id_kriteria`, `nilai`) VALUES
(66, 14, 'C1', 707),
(67, 14, 'C2', 3),
(68, 14, 'C3', 2),
(69, 14, 'C4', 5),
(70, 14, 'C5', 4),
(71, 15, 'C1', 421),
(72, 15, 'C2', 3),
(73, 15, 'C3', 2),
(74, 15, 'C4', 5),
(75, 15, 'C5', 3),
(76, 16, 'C1', 400),
(77, 16, 'C2', 2),
(78, 16, 'C3', 1),
(79, 16, 'C4', 4),
(80, 16, 'C5', 4),
(81, 17, 'C1', 385),
(82, 17, 'C2', 3),
(83, 17, 'C3', 1),
(84, 17, 'C4', 4),
(85, 17, 'C5', 2);

-- --------------------------------------------------------

--
-- Table structure for table `pengguna`
--

CREATE TABLE `pengguna` (
  `id_pengguna` int(11) NOT NULL,
  `nama_lengkap` varchar(255) NOT NULL,
  `role` enum('atasan','kepegawaian','manajer') NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pengguna`
--

INSERT INTO `pengguna` (`id_pengguna`, `nama_lengkap`, `role`, `username`, `password`) VALUES
(1, 'Imam Digmi', 'kepegawaian', 'pegawai', '047aeeb234644b9e2d4138ed3bc7976a'),
(2, 'Sriwani', 'atasan', 'atasan', '221ef2597affd3f083ac94af9e1b1e7f'),
(3, 'Dede', 'manajer', 'manajer', '69b731ea8f289cf16a192ce78a37b4f0');

-- --------------------------------------------------------

--
-- Table structure for table `ranking`
--

CREATE TABLE `ranking` (
  `kriteria` varchar(2) NOT NULL,
  `skor_bobot` double NOT NULL,
  `alternatif` varchar(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `analisa_alternatif`
--
ALTER TABLE `analisa_alternatif`
  ADD PRIMARY KEY (`alternatif_pertama`,`alternatif_kedua`,`id_kriteria`),
  ADD KEY `alternatif_kedua` (`alternatif_kedua`),
  ADD KEY `id_kriteria` (`id_kriteria`);

--
-- Indexes for table `analisa_kriteria`
--
ALTER TABLE `analisa_kriteria`
  ADD PRIMARY KEY (`kriteria_pertama`,`kriteria_kedua`),
  ADD KEY `kriteria_kedua` (`kriteria_kedua`);

--
-- Indexes for table `data_alternatif`
--
ALTER TABLE `data_alternatif`
  ADD PRIMARY KEY (`id_alternatif`);

--
-- Indexes for table `data_kriteria`
--
ALTER TABLE `data_kriteria`
  ADD PRIMARY KEY (`id_kriteria`);

--
-- Indexes for table `jum_alt_kri`
--
ALTER TABLE `jum_alt_kri`
  ADD PRIMARY KEY (`id_alternatif`,`id_kriteria`),
  ADD KEY `id_kriteria` (`id_kriteria`);

--
-- Indexes for table `nilai`
--
ALTER TABLE `nilai`
  ADD PRIMARY KEY (`id_nilai`);

--
-- Indexes for table `nilai_awal`
--
ALTER TABLE `nilai_awal`
  ADD PRIMARY KEY (`id_nilai_awal`,`id_alternatif`),
  ADD KEY `alternatif` (`id_alternatif`);

--
-- Indexes for table `nilai_awal_detail`
--
ALTER TABLE `nilai_awal_detail`
  ADD PRIMARY KEY (`id_nilai_awal_detail`,`id_nilai_awal`),
  ADD KEY `alternatif` (`id_nilai_awal`),
  ADD KEY `id_kriteria` (`id_kriteria`);

--
-- Indexes for table `pengguna`
--
ALTER TABLE `pengguna`
  ADD PRIMARY KEY (`id_pengguna`);

--
-- Indexes for table `ranking`
--
ALTER TABLE `ranking`
  ADD PRIMARY KEY (`kriteria`,`alternatif`),
  ADD KEY `alternatif` (`alternatif`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `nilai`
--
ALTER TABLE `nilai`
  MODIFY `id_nilai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `nilai_awal`
--
ALTER TABLE `nilai_awal`
  MODIFY `id_nilai_awal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `nilai_awal_detail`
--
ALTER TABLE `nilai_awal_detail`
  MODIFY `id_nilai_awal_detail` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=86;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `analisa_alternatif`
--
ALTER TABLE `analisa_alternatif`
  ADD CONSTRAINT `analisa_alternatif_ibfk_1` FOREIGN KEY (`id_kriteria`) REFERENCES `data_kriteria` (`id_kriteria`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `analisa_alternatif_ibfk_2` FOREIGN KEY (`alternatif_pertama`) REFERENCES `data_alternatif` (`id_alternatif`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `analisa_alternatif_ibfk_3` FOREIGN KEY (`alternatif_kedua`) REFERENCES `data_alternatif` (`id_alternatif`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `analisa_kriteria`
--
ALTER TABLE `analisa_kriteria`
  ADD CONSTRAINT `analisa_kriteria_ibfk_1` FOREIGN KEY (`kriteria_pertama`) REFERENCES `data_kriteria` (`id_kriteria`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `analisa_kriteria_ibfk_2` FOREIGN KEY (`kriteria_kedua`) REFERENCES `data_kriteria` (`id_kriteria`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `jum_alt_kri`
--
ALTER TABLE `jum_alt_kri`
  ADD CONSTRAINT `jum_alt_kri_ibfk_1` FOREIGN KEY (`id_kriteria`) REFERENCES `data_kriteria` (`id_kriteria`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `jum_alt_kri_ibfk_2` FOREIGN KEY (`id_alternatif`) REFERENCES `data_alternatif` (`id_alternatif`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `nilai_awal`
--
ALTER TABLE `nilai_awal`
  ADD CONSTRAINT `nilai_awal_ibfk_1` FOREIGN KEY (`id_alternatif`) REFERENCES `data_alternatif` (`id_alternatif`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `nilai_awal_detail`
--
ALTER TABLE `nilai_awal_detail`
  ADD CONSTRAINT `nilai_awal_detail_ibfk_1` FOREIGN KEY (`id_kriteria`) REFERENCES `data_kriteria` (`id_kriteria`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `nilai_awal_detail_ibfk_2` FOREIGN KEY (`id_nilai_awal`) REFERENCES `nilai_awal` (`id_nilai_awal`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `ranking`
--
ALTER TABLE `ranking`
  ADD CONSTRAINT `ranking_ibfk_1` FOREIGN KEY (`kriteria`) REFERENCES `data_kriteria` (`id_kriteria`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `ranking_ibfk_2` FOREIGN KEY (`alternatif`) REFERENCES `data_alternatif` (`id_alternatif`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
