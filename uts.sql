-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 12, 2024 at 07:54 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `uts`
--

-- --------------------------------------------------------

--
-- Table structure for table `data_mhs`
--

CREATE TABLE `data_mhs` (
  `nim` varchar(13) NOT NULL,
  `nama` text NOT NULL,
  `prodi` text NOT NULL,
  `shift` text NOT NULL,
  `angkatan` varchar(5) NOT NULL,
  `tempat_lahir` text NOT NULL,
  `tgl_lahir` varchar(99) NOT NULL,
  `agama` text NOT NULL,
  `jk` text NOT NULL,
  `no_hp` varchar(14) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data_mhs`
--

INSERT INTO `data_mhs` (`nim`, `nama`, `prodi`, `shift`, `angkatan`, `tempat_lahir`, `tgl_lahir`, `agama`, `jk`, `no_hp`) VALUES
('2110031805031', 'Hafiz Syahputra', 'Teknologi Informasi', 'Malam', '2021', 'Jambi', '11/12/2001', 'Islam', 'Pria ', '082298131635');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_mhs`
--
ALTER TABLE `data_mhs`
  ADD PRIMARY KEY (`nim`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
