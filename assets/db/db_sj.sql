-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 13, 2024 at 04:07 AM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_sj`
--

-- --------------------------------------------------------

--
-- Table structure for table `author`
--

CREATE TABLE `author` (
  `id` int(11) NOT NULL,
  `nama` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `author`
--

INSERT INTO `author` (`id`, `nama`) VALUES
(1, 'Rinaldi'),
(2, 'Fitria');

-- --------------------------------------------------------

--
-- Table structure for table `car_plat`
--

CREATE TABLE `car_plat` (
  `id` int(11) NOT NULL,
  `plat` varchar(15) NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `car_plat`
--

INSERT INTO `car_plat` (`id`, `plat`, `keterangan`) VALUES
(4, 'Gatau', 'Inova');

-- --------------------------------------------------------

--
-- Table structure for table `log_s`
--

CREATE TABLE `log_s` (
  `id` int(11) NOT NULL,
  `tanggal` varchar(30) NOT NULL,
  `aksi` text NOT NULL,
  `aktor` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `log_s`
--

INSERT INTO `log_s` (`id`, `tanggal`, `aksi`, `aktor`) VALUES
(1, '06 Aug 2024 | 12:41', 'Logout dari sistem informasi', 'Doni'),
(2, '06 Aug 2024 | 12:41', 'Login kedalam sistem informasi', 'Doni'),
(3, '07 Aug 2024 | 02:59', 'Login kedalam sistem informasi', 'Fitri'),
(4, '07 Aug 2024 | 03:02', 'Login kedalam sistem informasi', 'Doni'),
(5, '07 Aug 2024 | 03:04', 'Login kedalam sistem informasi', 'Fitri'),
(6, '07 Aug 2024 | 03:05', 'Logout dari sistem informasi', 'Fitri'),
(7, '07 Aug 2024 | 03:05', 'Login kedalam sistem informasi', 'Fitri'),
(8, '07 Aug 2024 | 03:05', 'Delete Data (  No Surat : NO/SJ/VIII/24/03)', 'Fitri'),
(9, '07 Aug 2024 | 03:05', 'Delete Data (  No Surat : 1)', 'Fitri'),
(10, '07 Aug 2024 | 03:06', 'Add Data Surat Jalan ( No Surat : NO/SJ/VIII/24/01, perihal : )', 'Fitri'),
(11, '07 Aug 2024 | 03:09', 'Add Data Surat Jalan ( No Surat : NO/SJ/VIII/24/0135, perihal : REGRINDING)', 'Fitri'),
(12, '07 Aug 2024 | 03:09', 'Delete Data (  No Surat : NO/SJ/VIII/24/0135)', 'Fitri'),
(13, '07 Aug 2024 | 03:11', 'Add Data Surat Jalan ( No Surat : NO/SJ/VIII/24/0135, perihal : REGRINDING)', 'Fitri'),
(14, '07 Aug 2024 | 03:31', 'Login kedalam sistem informasi', 'Fitri'),
(15, '07 Aug 2024 | 03:40', 'Add Data Surat Jalan ( No Surat : NO/SJ/VIII/24/0136, perihal : Perihal xxx)', 'Fitri'),
(16, '07 Aug 2024 | 04:16', 'Delete Data (  No Surat : NO/SJ/VIII/24/0136)', 'Fitri'),
(17, '07 Aug 2024 | 04:16', 'Delete Data (  No Surat : NO/SJ/VIII/24/01)', 'Fitri'),
(18, '07 Aug 2024 | 04:20', 'Add Data Surat Jalan ( No Surat : NO/SJ/VIII/24/0136, perihal : )', 'Fitri'),
(19, '07 Aug 2024 | 04:21', 'Delete Data (  No Surat : NO/SJ/VIII/24/0136)', 'Fitri'),
(20, '07 Aug 2024 | 04:21', 'Edit Data ( Plat : Gatau, Keterangan : Inova)', 'Fitri'),
(21, '07 Aug 2024 | 04:35', 'Add Data Surat Jalan ( No Surat : NO/SJ/VIII/24/0136, perihal : )', 'Fitri'),
(22, '07 Aug 2024 | 04:36', 'Delete Data (  No Surat : NO/SJ/VIII/24/0136)', 'Fitri'),
(23, '08 Aug 2024 | 04:05', 'Login kedalam sistem informasi', 'Fitri'),
(24, '08 Aug 2024 | 04:06', 'Add Data Surat Jalan ( No Surat : NO/SJ/VIII/24/0136, perihal : REGRINDING)', 'Fitri'),
(25, '08 Aug 2024 | 04:13', 'Login kedalam sistem informasi', 'Doni'),
(26, '08 Aug 2024 | 08:01', 'Login kedalam sistem informasi', 'Doni'),
(27, '08 Aug 2024 | 08:06', 'Login kedalam sistem informasi', 'Fitri'),
(28, '08 Aug 2024 | 08:13', 'Add Data Surat Jalan ( No Surat : NO/SJ/VIII/24/0137, perihal : C959 OAP)', 'Fitri'),
(29, '09 Aug 2024 | 03:59', 'Login kedalam sistem informasi', 'Fitri'),
(30, '09 Aug 2024 | 05:13', 'Login kedalam sistem informasi', 'Fitri'),
(31, '09 Aug 2024 | 05:18', 'Add Data Surat Jalan ( No Surat : NO/SJ/VIII/24/0138, perihal : SILK PRINT)', 'Fitri'),
(32, '09 Aug 2024 | 05:38', 'Login kedalam sistem informasi', 'Doni'),
(33, '09 Aug 2024 | 05:40', 'Add Data Surat Jalan ( No Surat : NO/SJ/VIII/24/0139, perihal : tes)', 'Doni'),
(34, '09 Aug 2024 | 05:41', 'Delete Data (  No Surat : NO/SJ/VIII/24/0139)', 'Doni'),
(35, '13 Aug 2024 | 03:47', 'Login kedalam sistem informasi', 'Fitri'),
(36, '13 Aug 2024 | 03:49', 'Add Data Surat Jalan ( No Surat : NO/SJ/VIII/24/0139, perihal : REGRINDING)', 'Fitri'),
(37, '13 Aug 2024 | 04:03', 'Login kedalam sistem informasi', 'Doni');

-- --------------------------------------------------------

--
-- Table structure for table `riwayat_surat_jalan`
--

CREATE TABLE `riwayat_surat_jalan` (
  `id` int(11) NOT NULL,
  `tgl` varchar(18) NOT NULL,
  `no_surat` int(5) NOT NULL,
  `no_surat_db` varchar(25) NOT NULL,
  `tujuan` text NOT NULL,
  `perihal` text NOT NULL,
  `paraf_pic` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `riwayat_surat_jalan`
--

INSERT INTO `riwayat_surat_jalan` (`id`, `tgl`, `no_surat`, `no_surat_db`, `tujuan`, `perihal`, `paraf_pic`) VALUES
(12, '2024-08-07', 135, 'NO/SJ/VIII/24/0135', 'SELAKSA TEKNIK', 'REGRINDING', 'FITRI'),
(13, '2024-08-08', 136, 'NO/SJ/VIII/24/0136', 'SELAKSA TEKNIK', 'REGRINDING', ''),
(14, '2024-08-08', 137, 'NO/SJ/VIII/24/0137', 'PT. ORLEEOZORA ANUGERAH PERKASA', 'C959 OAP', 'ALDI'),
(15, '2024-08-09', 138, 'NO/SJ/VIII/24/0138', 'ADA ADV', 'SILK PRINT', 'FITRI'),
(16, '2024-08-13', 139, 'NO/SJ/VIII/24/0139', 'SELAKSA TEKNIK', 'REGRINDING', 'FITRI');

-- --------------------------------------------------------

--
-- Table structure for table `surat_jalan`
--

CREATE TABLE `surat_jalan` (
  `id` int(11) NOT NULL,
  `no_surat` int(5) NOT NULL,
  `no_surat_db` varchar(25) NOT NULL,
  `tgl` varchar(15) NOT NULL,
  `kepada` text NOT NULL,
  `car_plat` varchar(20) NOT NULL,
  `inv_no` varchar(25) NOT NULL,
  `item` text NOT NULL,
  `deskripsi` text NOT NULL,
  `qty` varchar(11) NOT NULL,
  `remark` text NOT NULL,
  `author` varchar(25) NOT NULL,
  `receiver` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `surat_jalan`
--

INSERT INTO `surat_jalan` (`id`, `no_surat`, `no_surat_db`, `tgl`, `kepada`, `car_plat`, `inv_no`, `item`, `deskripsi`, `qty`, `remark`, `author`, `receiver`) VALUES
(1, 1, 'NO/SJ/VIII/24/01', '2024-08-01', '', '', '', '', '', '', '', '', ''),
(2, 135, 'NO/SJ/VIII/24/0135', '2024-08-07', 'SELAKSA TEKNIK', '', '', 'REGRINDING', 'CT-TCC001', '8 PCS', '', 'Fitria', ''),
(3, 135, 'NO/SJ/VIII/24/0135', '2024-08-07', 'SELAKSA TEKNIK', '', '', '', 'CT-TCC002', '2 PCS', '', 'Fitria', ''),
(4, 135, 'NO/SJ/VIII/24/0135', '2024-08-07', 'SELAKSA TEKNIK', '', '', '', 'CT-TCC003', '2 PCS', '', 'Fitria', ''),
(5, 135, 'NO/SJ/VIII/24/0135', '2024-08-07', 'SELAKSA TEKNIK', '', '', '', 'CT-TCC009', '1 PCS', '', 'Fitria', ''),
(6, 135, 'NO/SJ/VIII/24/0135', '2024-08-07', 'SELAKSA TEKNIK', '', '', '', 'CT-TSL003B', '1 PCS', '', 'Fitria', ''),
(7, 136, 'NO/SJ/VIII/24/0136', '2024-08-08', 'SELAKSA TEKNIK', '', '', 'REGRINDING', 'CT-TCC001', '2', '', '', ''),
(8, 137, 'NO/SJ/VIII/24/0137', '2024-08-08', 'PT. ORLEEOZORA ANUGERAH PERKASA', 'L 9138 AT', 'C959', 'BAB1 WBD', 'ACCOUSTIC GUITARS', '48 PCS', 'PERGUDANGAN CIP', 'Rinaldi', 'ANTOK SUTIKNO'),
(9, 137, 'NO/SJ/VIII/24/0137', '2024-08-08', 'PT. ORLEEOZORA ANUGERAH PERKASA', 'L 9138 AT', 'C959', 'BAT2CE WBD', 'ACCOUSTIC GUITARS', '1 PCS', 'BLOK KAPPA NO.11', 'Rinaldi', 'ANTOK SUTIKNO'),
(10, 137, 'NO/SJ/VIII/24/0137', '2024-08-08', 'PT. ORLEEOZORA ANUGERAH PERKASA', 'L 9138 AT', 'C959', '', '', '', 'JL. LINGKAR TIMUR KM 4', 'Rinaldi', 'ANTOK SUTIKNO'),
(11, 137, 'NO/SJ/VIII/24/0137', '2024-08-08', 'PT. ORLEEOZORA ANUGERAH PERKASA', 'L 9138 AT', 'C959', '', '', '', 'DS KEMIRI, KAB SIDOARJO', 'Rinaldi', 'ANTOK SUTIKNO'),
(12, 137, 'NO/SJ/VIII/24/0137', '2024-08-08', 'PT. ORLEEOZORA ANUGERAH PERKASA', 'L 9138 AT', 'C959', '', '', '', 'JAWA TIMUR', 'Rinaldi', 'ANTOK SUTIKNO'),
(13, 138, 'NO/SJ/VIII/24/0138', '2024-08-09', 'ADA ADV', '', '', 'SILK PRINT', 'JM-SSC-M1-DOT', '1', '', '', ''),
(14, 138, 'NO/SJ/VIII/24/0138', '2024-08-09', 'ADA ADV', '', '', '', 'JM-SSC-HEAD-HAWAII-C', '1', '', '', ''),
(15, 138, 'NO/SJ/VIII/24/0138', '2024-08-09', 'ADA ADV', '', '', '', 'JM-SSC-MAHALO', '1', '', '', ''),
(16, 138, 'NO/SJ/VIII/24/0138', '2024-08-09', 'ADA ADV', '', '', '', 'JM-SSC-ROPE-M1', '2', '', '', ''),
(17, 139, 'NO/SJ/VIII/24/0139', '2024-08-13', 'SELAKSA TEKNIK', '', '', 'REGRINDING', 'CT-TCC001', '6', '', '', ''),
(18, 139, 'NO/SJ/VIII/24/0139', '2024-08-13', 'SELAKSA TEKNIK', '', '', '', 'CT-TCC025', '1', '', '', ''),
(19, 139, 'NO/SJ/VIII/24/0139', '2024-08-13', 'SELAKSA TEKNIK', '', '', '', 'CT-TSL002', '1', '', '', ''),
(20, 139, 'NO/SJ/VIII/24/0139', '2024-08-13', 'SELAKSA TEKNIK', '', '', '', '', '', '', '', ''),
(21, 139, 'NO/SJ/VIII/24/0139', '2024-08-13', 'SELAKSA TEKNIK', '', '', '', '', '', '', '', ''),
(22, 139, 'NO/SJ/VIII/24/0139', '2024-08-13', 'SELAKSA TEKNIK', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `no_telp` varchar(15) NOT NULL,
  `role` enum('admin','non_admin') NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` int(11) NOT NULL,
  `foto` text NOT NULL,
  `is_active` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `nama`, `username`, `email`, `no_telp`, `role`, `password`, `created_at`, `foto`, `is_active`) VALUES
(40, 'Doni', 'Doni', 'IT', '-', 'admin', '$2y$10$vitJvnf1fj39mvoQhq4v2esXNny./432Jk71hPIxuaekweaYEs4km', 1718692487, 'user.png', 1),
(41, 'Fitri', 'fitri', 'Purchasing', '-', 'admin', '$2y$10$Z1Wu0aJa7eJz7nwMjzKLpewMGMjl7f/bLlzvIAOOhhnN6Z2rE3MM6', 1722940758, 'user.png', 1),
(42, 'Rinaldi', 'aldi', 'Exim', '-', 'admin', '$2y$10$CMbkr/b86oUtPXY/PAEWuOSL4v04.y3c9LnlW35OplQdwk5Am1dTe', 1722940797, 'user.png', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `author`
--
ALTER TABLE `author`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `car_plat`
--
ALTER TABLE `car_plat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `log_s`
--
ALTER TABLE `log_s`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `riwayat_surat_jalan`
--
ALTER TABLE `riwayat_surat_jalan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `surat_jalan`
--
ALTER TABLE `surat_jalan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `author`
--
ALTER TABLE `author`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `car_plat`
--
ALTER TABLE `car_plat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `log_s`
--
ALTER TABLE `log_s`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `riwayat_surat_jalan`
--
ALTER TABLE `riwayat_surat_jalan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `surat_jalan`
--
ALTER TABLE `surat_jalan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
