-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 24, 2021 at 05:00 AM
-- Server version: 10.4.16-MariaDB
-- PHP Version: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tes`
--

-- --------------------------------------------------------

--
-- Table structure for table `custamer`
--

CREATE TABLE `custamer` (
  `username` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `custamer`
--

INSERT INTO `custamer` (`username`, `email`, `password`) VALUES
('regina', 'rayhanhasyim00@gmail.com', 'rere'),
('zelda', 'rayhanhasyim00@gmail.com', 'wawak');

-- --------------------------------------------------------

--
-- Table structure for table `datapembeli`
--

CREATE TABLE `datapembeli` (
  `nama` varchar(33) NOT NULL,
  `email` varchar(33) NOT NULL,
  `telepon` varchar(33) NOT NULL,
  `tanggal` varchar(33) NOT NULL,
  `transportasi` varchar(33) NOT NULL,
  `kelas` varchar(33) NOT NULL,
  `catatan` varchar(100) NOT NULL,
  `asal` varchar(80) NOT NULL,
  `tujuan` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `username` varchar(33) NOT NULL,
  `password` varchar(22) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`username`, `password`) VALUES
('mrhnhsm_', 'Hasyim04'),
('patre_cella', 'regina123'),
('zelda_ginting', 'zeldaginting');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `custamer`
--
ALTER TABLE `custamer`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `datapembeli`
--
ALTER TABLE `datapembeli`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`username`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
