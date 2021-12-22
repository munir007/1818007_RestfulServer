-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 22, 2021 at 06:34 AM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 7.4.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wildrift`
--

-- --------------------------------------------------------

--
-- Table structure for table `champions`
--

CREATE TABLE `champions` (
  `id_champion` varchar(5) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `role` varchar(100) NOT NULL,
  `lane` varchar(100) NOT NULL,
  `region` varchar(100) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `difficulty` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `champions`
--

INSERT INTO `champions` (`id_champion`, `nama`, `role`, `lane`, `region`, `gender`, `difficulty`) VALUES
('CH001', 'AHRI', 'MAGE/ASSASIN', 'MID/SUPPORT', 'IONIA', 'FEMALE', 'MODERATE'),
('CH002', 'AKALI', 'ASSASSIN', 'MID/TOP', 'IONIA', 'FEMALE', 'HIGH'),
('CH003', 'AKSHAN', 'MARKSMAN/ASSASSIN', 'MID/TOP/BOT', 'SHURIMA', 'MALE', 'HIGH'),
('CH004', 'ALISTAR', 'TANK/SUPPORT', 'SUPPORT', 'RUNETERRA', 'MALE', 'LOW'),
('CH005', 'AMUMU', 'TANK', 'JUNGLE/SUPPORT', 'SHURIMA', 'MALE', 'LOW'),
('CH006', 'ANNIE', 'MAGE/SUPPORT', 'MID/SUPPORT', 'RUNETERRA', 'FEMALE', 'LOW'),
('CH007', 'ASHE', 'MARKSMAN/SUPPORT', 'BOT/SUPPORT', 'FRELJORD', 'FEMALE', 'LOW'),
('CH008', 'AURELION SOL', 'MAGE', 'MID', 'RUNETERRA', 'MALE', 'HIGH');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `champions`
--
ALTER TABLE `champions`
  ADD PRIMARY KEY (`id_champion`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
