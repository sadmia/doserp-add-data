-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 13, 2023 at 01:08 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dos`
--

-- --------------------------------------------------------

--
-- Table structure for table `driverclass1`
--

CREATE TABLE `driverclass1` (
  `id` int(9) NOT NULL,
  `yourName` varchar(50) DEFAULT NULL,
  `fatherName` varchar(50) DEFAULT NULL,
  `motherName` varchar(50) DEFAULT NULL,
  `dateOfBarth` date DEFAULT NULL,
  `nidNumber` varchar(17) DEFAULT NULL,
  `phoneNumber` varchar(11) DEFAULT NULL,
  `address` varchar(250) DEFAULT NULL,
  `yourIMage` varchar(150) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `driverclass1`
--

INSERT INTO `driverclass1` (`id`, `yourName`, `fatherName`, `motherName`, `dateOfBarth`, `nidNumber`, `phoneNumber`, `address`, `yourIMage`) VALUES
(11, 'Sad MIa', 'Hello', 'World', '2023-02-21', '5555555555', '01880136814', 'Kamarkhali', 'ub400.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `driverclass2`
--

CREATE TABLE `driverclass2` (
  `id` int(9) NOT NULL,
  `yourName` varchar(50) DEFAULT NULL,
  `fatherName` varchar(50) DEFAULT NULL,
  `motherName` varchar(50) DEFAULT NULL,
  `dateOfBarth` date DEFAULT NULL,
  `nidNumber` varchar(17) DEFAULT NULL,
  `phoneNumber` varchar(11) DEFAULT NULL,
  `address` varchar(250) DEFAULT NULL,
  `yourImage` varchar(150) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `driverclass3`
--

CREATE TABLE `driverclass3` (
  `id` int(9) NOT NULL,
  `yourName` varchar(50) DEFAULT NULL,
  `fatherName` varchar(50) DEFAULT NULL,
  `motherName` varchar(50) DEFAULT NULL,
  `dateOfBarth` date DEFAULT NULL,
  `nidNumber` varchar(17) DEFAULT NULL,
  `phoneNumber` varchar(11) DEFAULT NULL,
  `address` varchar(250) DEFAULT NULL,
  `yourImage` varchar(150) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `masterclass1`
--

CREATE TABLE `masterclass1` (
  `id` int(9) NOT NULL,
  `yourName` varchar(50) DEFAULT NULL,
  `fatherName` varchar(50) DEFAULT NULL,
  `motherName` varchar(50) DEFAULT NULL,
  `dateOfBarth` date DEFAULT NULL,
  `nidNumber` varchar(17) DEFAULT NULL,
  `phoneNumber` varchar(11) DEFAULT NULL,
  `address` varchar(250) DEFAULT NULL,
  `yourImage` varchar(150) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `masterclass2`
--

CREATE TABLE `masterclass2` (
  `id` int(9) NOT NULL,
  `yourName` varchar(50) DEFAULT NULL,
  `fatherName` varchar(50) DEFAULT NULL,
  `motherName` varchar(50) DEFAULT NULL,
  `dateOfBarth` date DEFAULT NULL,
  `nidNumber` varchar(17) DEFAULT NULL,
  `phoneNumber` varchar(11) DEFAULT NULL,
  `address` varchar(250) DEFAULT NULL,
  `yourImage` varchar(150) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `masterclass3`
--

CREATE TABLE `masterclass3` (
  `id` int(9) NOT NULL,
  `yourName` varchar(50) DEFAULT NULL,
  `fatherName` varchar(50) DEFAULT NULL,
  `motherName` varchar(50) DEFAULT NULL,
  `dateOfBarth` date DEFAULT NULL,
  `nidNumber` varchar(17) DEFAULT NULL,
  `phoneNumber` varchar(11) DEFAULT NULL,
  `address` varchar(250) DEFAULT NULL,
  `yourImage` varchar(150) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `driverclass1`
--
ALTER TABLE `driverclass1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `driverclass2`
--
ALTER TABLE `driverclass2`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `driverclass3`
--
ALTER TABLE `driverclass3`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `masterclass1`
--
ALTER TABLE `masterclass1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `masterclass2`
--
ALTER TABLE `masterclass2`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `masterclass3`
--
ALTER TABLE `masterclass3`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `driverclass1`
--
ALTER TABLE `driverclass1`
  MODIFY `id` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `driverclass2`
--
ALTER TABLE `driverclass2`
  MODIFY `id` int(9) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `driverclass3`
--
ALTER TABLE `driverclass3`
  MODIFY `id` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `masterclass1`
--
ALTER TABLE `masterclass1`
  MODIFY `id` int(9) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `masterclass2`
--
ALTER TABLE `masterclass2`
  MODIFY `id` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `masterclass3`
--
ALTER TABLE `masterclass3`
  MODIFY `id` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
