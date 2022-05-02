-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 01, 2022 at 05:27 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tgcr`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `VNumber` varchar(9) NOT NULL,
  `Password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`VNumber`, `Password`) VALUES
('V00632167', '948c1fca200d775d19231c57a1d666ff');

-- --------------------------------------------------------

--
-- Table structure for table `consoles`
--

CREATE TABLE `consoles` (
  `VNumber` varchar(9) NOT NULL,
  `Model` varchar(20) NOT NULL,
  `Controllers` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `consoles`
--

INSERT INTO `consoles` (`VNumber`, `Model`, `Controllers`) VALUES
('V00632167', 'Nintendo Switch', 2);

-- --------------------------------------------------------

--
-- Table structure for table `eventlogin`
--

CREATE TABLE `eventlogin` (
  `LoginDate` date NOT NULL,
  `LoginTime` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `VNumber` varchar(9) NOT NULL,
  `FirstName` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `VNumber` varchar(9) NOT NULL,
  `FirstName` varchar(30) NOT NULL,
  `LastName` varchar(30) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Phone` int(10) DEFAULT NULL,
  `Admin` tinyint(1) NOT NULL DEFAULT 0,
  `InventoryContributor` tinyint(1) NOT NULL DEFAULT 0,
  `ContactPhone` tinyint(1) DEFAULT 0,
  `ContactEmail` tinyint(1) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`VNumber`, `FirstName`, `LastName`, `Email`, `Phone`, `Admin`, `InventoryContributor`, `ContactPhone`, `ContactEmail`) VALUES
('V00123456', 'Reginald', 'Toure', 'mousathe14@gmail.com', 2147483647, 0, 1, 1, 1),
('V0061672', 'Malron', 'Shine', 'malron@vsu.edu', 2147483647, 1, 0, 0, 0),
('V00632167', 'Mousa', 'Toure', 'rtou2167@students.vsu.edu', 2147483647, 0, 0, 0, 0),
('V123', 'Aryal', 'Tide', 'arya@vsu.edu', 2025555555, 1, 1, 1, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`VNumber`);

--
-- Indexes for table `consoles`
--
ALTER TABLE `consoles`
  ADD PRIMARY KEY (`VNumber`,`Model`);

--
-- Indexes for table `eventlogin`
--
ALTER TABLE `eventlogin`
  ADD PRIMARY KEY (`LoginDate`,`LoginTime`,`VNumber`);

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`VNumber`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `admin`
--
ALTER TABLE `admin`
  ADD CONSTRAINT `admin_ibfk_1` FOREIGN KEY (`VNumber`) REFERENCES `member` (`VNumber`);

--
-- Constraints for table `consoles`
--
ALTER TABLE `consoles`
  ADD CONSTRAINT `consoles_ibfk_1` FOREIGN KEY (`VNumber`) REFERENCES `member` (`VNumber`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
