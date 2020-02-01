-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 31, 2020 at 06:30 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `api`
--

-- --------------------------------------------------------

--
-- Table structure for table `opportunities`
--

CREATE TABLE `opportunities` (
  `id` int(11) NOT NULL,
  `noticeId` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `solicitationNumber` varchar(255) NOT NULL,
  `department` varchar(255) NOT NULL,
  `subTier` varchar(255) NOT NULL,
  `office` varchar(255) NOT NULL,
  `postedDate` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `baseType` varchar(255) NOT NULL,
  `archiveType` varchar(255) NOT NULL,
  `archiveDate` varchar(255) NOT NULL,
  `typeOfSetAsideDescription` varchar(255) NOT NULL,
  `typeOfSetAside` varchar(255) NOT NULL,
  `responseDeadLine` varchar(255) NOT NULL,
  `naicsCode` varchar(255) NOT NULL,
  `classificationCode` varchar(255) NOT NULL,
  `active` varchar(255) NOT NULL,
  `award` varchar(255) NOT NULL,
  `pointOfContact` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `organizationType` varchar(255) NOT NULL,
  `officeAddress` varchar(255) NOT NULL,
  `placeOfPerformance` varchar(255) NOT NULL,
  `additionalInfoLink` varchar(255) NOT NULL,
  `links` varchar(255) NOT NULL,
  `uiLink` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `opportunities`
--
ALTER TABLE `opportunities`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `opportunities`
--
ALTER TABLE `opportunities`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
