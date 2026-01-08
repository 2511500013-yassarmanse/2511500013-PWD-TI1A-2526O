-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jan 08, 2026 at 01:16 PM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_pwd2025`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_mahasiswa`
--

CREATE TABLE `tbl_mahasiswa` (
  `cmid` int NOT NULL,
  `cnim` varchar(20) NOT NULL,
  `cnama` varchar(100) NOT NULL,
  `ctempat_lahir` varchar(50) NOT NULL,
  `ctanggal_lahir` date NOT NULL,
  `chobi` varchar(100) NOT NULL,
  `cpasangan` varchar(50) DEFAULT NULL,
  `cpekerjaan` varchar(50) DEFAULT NULL,
  `cnama_ortu` varchar(100) NOT NULL,
  `cnama_kakak` varchar(100) DEFAULT NULL,
  `cnama_adik` varchar(100) DEFAULT NULL,
  `dcreated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `dupdated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_tamu`
--

CREATE TABLE `tbl_tamu` (
  `cid` int NOT NULL,
  `cnama` varchar(100) DEFAULT NULL,
  `cemail` varchar(100) DEFAULT NULL,
  `cpesan` text,
  `dcreated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tbl_tamu`
--

INSERT INTO `tbl_tamu` (`cid`, `cnama`, `cemail`, `cpesan`, `dcreated_at`) VALUES
(15, 'yassarmanse', 'boyyassar@gmail.com', 'yassarsssssssssssssssssssssss', '2025-12-24 12:04:13'),
(16, 'yassarmanse', 'boyyassar@gmail.com', 'ALHAMDULILAHs', '2025-12-24 12:16:35'),
(17, 'yassarmanse', 'boyyassar@gmail.com', 'anjay32423223', '2025-12-24 12:21:19');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_mahasiswa`
--
ALTER TABLE `tbl_mahasiswa`
  ADD PRIMARY KEY (`cmid`),
  ADD UNIQUE KEY `cnim` (`cnim`),
  ADD KEY `idx_nim` (`cnim`),
  ADD KEY `idx_nama` (`cnama`);

--
-- Indexes for table `tbl_tamu`
--
ALTER TABLE `tbl_tamu`
  ADD PRIMARY KEY (`cid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_mahasiswa`
--
ALTER TABLE `tbl_mahasiswa`
  MODIFY `cmid` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_tamu`
--
ALTER TABLE `tbl_tamu`
  MODIFY `cid` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
