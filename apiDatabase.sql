-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 11, 2020 at 06:49 PM
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
-- Table structure for table `awards`
--

CREATE TABLE `awards` (
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
-- Dumping data for table `awards`
--

INSERT INTO `awards` (`id`, `noticeId`, `title`, `solicitationNumber`, `department`, `subTier`, `office`, `postedDate`, `type`, `baseType`, `archiveType`, `archiveDate`, `typeOfSetAsideDescription`, `typeOfSetAside`, `responseDeadLine`, `naicsCode`, `classificationCode`, `active`, `award`, `pointOfContact`, `description`, `organizationType`, `officeAddress`, `placeOfPerformance`, `additionalInfoLink`, `links`, `uiLink`) VALUES
(1, 'asdasdas', 'asdasdasdas', 'asda', 'asdasdas', 'asdasdas', 'asdasdas', 'asdasdas', 'asdasdqwweqw', 'asdqwqwqwe', 'asxqwqqwqeqw', 'xsaqwwqw', 'werwefgwfcsadqw', 'wdf2er233223', 'asdewqwqweqw', 'asdsadweqwewq', 'asxsdeqwqw', 'asdasdqw', 'sadqwq', 'asdxassswqqw', 'zasdewq', 'xasdqwqwqw', 'cxasdqwqw', 'casdasqw', 'asdqeweqwqwe', 'asdqwqw', 'xasdqwswq'),
(2, 'asdasdas', 'asdasdasdas', 'asda', 'asdasdas', 'asdasdas', 'asdasdas', 'asdasdas', 'asdasdqwweqw', 'asdqwqwqwe', 'asxqwqqwqeqw', 'xsaqwwqw', 'werwefgwfcsadqw', 'wdf2er233223', 'asdewqwqweqw', 'asdsadweqwewq', 'asxsdeqwqw', 'asdasdqw', 'sadqwq', 'asdxassswqqw', 'zasdewq', 'xasdqwqwqw', 'cxasdqwqw', 'casdasqw', 'asdqeweqwqwe', 'asdqwqw', 'xasdqwswq');

-- --------------------------------------------------------

--
-- Table structure for table `contract`
--

CREATE TABLE `contract` (
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
-- Dumping data for table `contract`
--

INSERT INTO `contract` (`id`, `noticeId`, `title`, `solicitationNumber`, `department`, `subTier`, `office`, `postedDate`, `type`, `baseType`, `archiveType`, `archiveDate`, `typeOfSetAsideDescription`, `typeOfSetAside`, `responseDeadLine`, `naicsCode`, `classificationCode`, `active`, `award`, `pointOfContact`, `description`, `organizationType`, `officeAddress`, `placeOfPerformance`, `additionalInfoLink`, `links`, `uiLink`) VALUES
(1, 'asdasdas', 'asdasdasdas', 'asda', 'asdasdas', 'asdasdas', 'asdasdas', 'asdasdas', 'asdasdqwweqw', 'asdqwqwqwe', 'asxqwqqwqeqw', 'xsaqwwqw', 'werwefgwfcsadqw', 'wdf2er233223', 'asdewqwqweqw', 'asdsadweqwewq', 'asxsdeqwqw', 'asdasdqw', 'sadqwq', 'asdxassswqqw', 'zasdewq', 'xasdqwqwqw', 'cxasdqwqw', 'casdasqw', 'asdqeweqwqwe', 'asdqwqw', 'xasdqwswq'),
(2, 'asdasdas', 'asdasdasdas', 'asda', 'asdasdas', 'asdasdas', 'asdasdas', 'asdasdas', 'asdasdqwweqw', 'asdqwqwqwe', 'asxqwqqwqeqw', 'xsaqwwqw', 'werwefgwfcsadqw', 'wdf2er233223', 'asdewqwqweqw', 'asdsadweqwewq', 'asxsdeqwqw', 'asdasdqw', 'sadqwq', 'asdxassswqqw', 'zasdewq', 'xasdqwqwqw', 'cxasdqwqw', 'casdasqw', 'asdqeweqwqwe', 'asdqwqw', 'xasdqwswq');

-- --------------------------------------------------------

--
-- Table structure for table `entity`
--

CREATE TABLE `entity` (
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
-- Dumping data for table `entity`
--

INSERT INTO `entity` (`id`, `noticeId`, `title`, `solicitationNumber`, `department`, `subTier`, `office`, `postedDate`, `type`, `baseType`, `archiveType`, `archiveDate`, `typeOfSetAsideDescription`, `typeOfSetAside`, `responseDeadLine`, `naicsCode`, `classificationCode`, `active`, `award`, `pointOfContact`, `description`, `organizationType`, `officeAddress`, `placeOfPerformance`, `additionalInfoLink`, `links`, `uiLink`) VALUES
(1, 'asdasdas', 'asdasdasdas', 'asda', 'asdasdas', 'asdasdas', 'asdasdas', 'asdasdas', 'asdasdqwweqw', 'asdqwqwqwe', 'asxqwqqwqeqw', 'xsaqwwqw', 'werwefgwfcsadqw', 'wdf2er233223', 'asdewqwqweqw', 'asdsadweqwewq', 'asxsdeqwqw', 'asdasdqw', 'sadqwq', 'asdxassswqqw', 'zasdewq', 'xasdqwqwqw', 'cxasdqwqw', 'casdasqw', 'asdqeweqwqwe', 'asdqwqw', 'xasdqwswq'),
(2, 'asdasdas', 'asdasdasdas', 'asda', 'asdasdas', 'asdasdas', 'asdasdas', 'asdasdas', 'asdasdqwweqw', 'asdqwqwqwe', 'asxqwqqwqeqw', 'xsaqwwqw', 'werwefgwfcsadqw', 'wdf2er233223', 'asdewqwqweqw', 'asdsadweqwewq', 'asxsdeqwqw', 'asdasdqw', 'sadqwq', 'asdxassswqqw', 'zasdewq', 'xasdqwqwqw', 'cxasdqwqw', 'casdasqw', 'asdqeweqwqwe', 'asdqwqw', 'xasdqwswq');

-- --------------------------------------------------------

--
-- Table structure for table `federalhierarchy`
--

CREATE TABLE `federalhierarchy` (
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
-- Dumping data for table `federalhierarchy`
--

INSERT INTO `federalhierarchy` (`id`, `noticeId`, `title`, `solicitationNumber`, `department`, `subTier`, `office`, `postedDate`, `type`, `baseType`, `archiveType`, `archiveDate`, `typeOfSetAsideDescription`, `typeOfSetAside`, `responseDeadLine`, `naicsCode`, `classificationCode`, `active`, `award`, `pointOfContact`, `description`, `organizationType`, `officeAddress`, `placeOfPerformance`, `additionalInfoLink`, `links`, `uiLink`) VALUES
(1, 'asdasdas', 'asdasdasdas', 'asda', 'asdasdas', 'asdasdas', 'asdasdas', 'asdasdas', 'asdasdqwweqw', 'asdqwqwqwe', 'asxqwqqwqeqw', 'xsaqwwqw', 'werwefgwfcsadqw', 'wdf2er233223', 'asdewqwqweqw', 'asdsadweqwewq', 'asxsdeqwqw', 'asdasdqw', 'sadqwq', 'asdxassswqqw', 'zasdewq', 'xasdqwqwqw', 'cxasdqwqw', 'casdasqw', 'asdqeweqwqwe', 'asdqwqw', 'xasdqwswq'),
(2, 'asdasdas', 'asdasdasdas', 'asda', 'asdasdas', 'asdasdas', 'asdasdas', 'asdasdas', 'asdasdqwweqw', 'asdqwqwqwe', 'asxqwqqwqeqw', 'xsaqwwqw', 'werwefgwfcsadqw', 'wdf2er233223', 'asdewqwqweqw', 'asdsadweqwewq', 'asxsdeqwqw', 'asdasdqw', 'sadqwq', 'asdxassswqqw', 'zasdewq', 'xasdqwqwqw', 'cxasdqwqw', 'casdasqw', 'asdqeweqwqwe', 'asdqwqw', 'xasdqwswq');

-- --------------------------------------------------------

--
-- Table structure for table `listing`
--

CREATE TABLE `listing` (
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
-- Dumping data for table `listing`
--

INSERT INTO `listing` (`id`, `noticeId`, `title`, `solicitationNumber`, `department`, `subTier`, `office`, `postedDate`, `type`, `baseType`, `archiveType`, `archiveDate`, `typeOfSetAsideDescription`, `typeOfSetAside`, `responseDeadLine`, `naicsCode`, `classificationCode`, `active`, `award`, `pointOfContact`, `description`, `organizationType`, `officeAddress`, `placeOfPerformance`, `additionalInfoLink`, `links`, `uiLink`) VALUES
(1, 'asdasdas', 'asdasdasdas', 'asda', 'asdasdas', 'asdasdas', 'asdasdas', 'asdasdas', 'asdasdqwweqw', 'asdqwqwqwe', 'asxqwqqwqeqw', 'xsaqwwqw', 'werwefgwfcsadqw', 'wdf2er233223', 'asdewqwqweqw', 'asdsadweqwewq', 'asxsdeqwqw', 'asdasdqw', 'sadqwq', 'asdxassswqqw', 'zasdewq', 'xasdqwqwqw', 'cxasdqwqw', 'casdasqw', 'asdqeweqwqwe', 'asdqwqw', 'xasdqwswq'),
(2, 'asdasdas', 'asdasdasdas', 'asda', 'asdasdas', 'asdasdas', 'asdasdas', 'asdasdas', 'asdasdqwweqw', 'asdqwqwqwe', 'asxqwqqwqeqw', 'xsaqwwqw', 'werwefgwfcsadqw', 'wdf2er233223', 'asdewqwqweqw', 'asdsadweqwewq', 'asxsdeqwqw', 'asdasdqw', 'sadqwq', 'asdxassswqqw', 'zasdewq', 'xasdqwqwqw', 'cxasdqwqw', 'casdasqw', 'asdqeweqwqwe', 'asdqwqw', 'xasdqwswq');

-- --------------------------------------------------------

--
-- Table structure for table `oppertunities`
--

CREATE TABLE `oppertunities` (
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
-- Dumping data for table `oppertunities`
--

INSERT INTO `oppertunities` (`id`, `noticeId`, `title`, `solicitationNumber`, `department`, `subTier`, `office`, `postedDate`, `type`, `baseType`, `archiveType`, `archiveDate`, `typeOfSetAsideDescription`, `typeOfSetAside`, `responseDeadLine`, `naicsCode`, `classificationCode`, `active`, `award`, `pointOfContact`, `description`, `organizationType`, `officeAddress`, `placeOfPerformance`, `additionalInfoLink`, `links`, `uiLink`) VALUES
(1, 'asdasdas', 'asdasdasdas', 'asda', 'asdasdas', 'asdasdas', 'asdasdas', 'asdasdas', 'asdasdqwweqw', 'asdqwqwqwe', 'asxqwqqwqeqw', 'xsaqwwqw', 'werwefgwfcsadqw', 'wdf2er233223', 'asdewqwqweqw', 'asdsadweqwewq', 'asxsdeqwqw', 'asdasdqw', 'sadqwq', 'asdxassswqqw', 'zasdewq', 'xasdqwqwqw', 'cxasdqwqw', 'casdasqw', 'asdqeweqwqwe', 'asdqwqw', 'xasdqwswq'),
(2, 'asdasdas', 'asdasdasdas', 'asda', 'asdasdas', 'asdasdas', 'asdasdas', 'asdasdas', 'asdasdqwweqw', 'asdqwqwqwe', 'asxqwqqwqeqw', 'xsaqwwqw', 'werwefgwfcsadqw', 'wdf2er233223', 'asdewqwqweqw', 'asdsadweqwewq', 'asxsdeqwqw', 'asdasdqw', 'sadqwq', 'asdxassswqqw', 'zasdewq', 'xasdqwqwqw', 'cxasdqwqw', 'casdasqw', 'asdqeweqwqwe', 'asdqwqw', 'xasdqwswq');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `name`) VALUES
(1, 'admin@admin.com', 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `wages`
--

CREATE TABLE `wages` (
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
-- Dumping data for table `wages`
--

INSERT INTO `wages` (`id`, `noticeId`, `title`, `solicitationNumber`, `department`, `subTier`, `office`, `postedDate`, `type`, `baseType`, `archiveType`, `archiveDate`, `typeOfSetAsideDescription`, `typeOfSetAside`, `responseDeadLine`, `naicsCode`, `classificationCode`, `active`, `award`, `pointOfContact`, `description`, `organizationType`, `officeAddress`, `placeOfPerformance`, `additionalInfoLink`, `links`, `uiLink`) VALUES
(1, 'asdasdas', 'asdasdasdas', 'asda', 'asdasdas', 'asdasdas', 'asdasdas', 'asdasdas', 'asdasdqwweqw', 'asdqwqwqwe', 'asxqwqqwqeqw', 'xsaqwwqw', 'werwefgwfcsadqw', 'wdf2er233223', 'asdewqwqweqw', 'asdsadweqwewq', 'asxsdeqwqw', 'asdasdqw', 'sadqwq', 'asdxassswqqw', 'zasdewq', 'xasdqwqwqw', 'cxasdqwqw', 'casdasqw', 'asdqeweqwqwe', 'asdqwqw', 'xasdqwswq'),
(2, 'asdasdas', 'asdasdasdas', 'asda', 'asdasdas', 'asdasdas', 'asdasdas', 'asdasdas', 'asdasdqwweqw', 'asdqwqwqwe', 'asxqwqqwqeqw', 'xsaqwwqw', 'werwefgwfcsadqw', 'wdf2er233223', 'asdewqwqweqw', 'asdsadweqwewq', 'asxsdeqwqw', 'asdasdqw', 'sadqwq', 'asdxassswqqw', 'zasdewq', 'xasdqwqwqw', 'cxasdqwqw', 'casdasqw', 'asdqeweqwqwe', 'asdqwqw', 'xasdqwswq');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `awards`
--
ALTER TABLE `awards`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contract`
--
ALTER TABLE `contract`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `entity`
--
ALTER TABLE `entity`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `federalhierarchy`
--
ALTER TABLE `federalhierarchy`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `listing`
--
ALTER TABLE `listing`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `oppertunities`
--
ALTER TABLE `oppertunities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `wages`
--
ALTER TABLE `wages`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `awards`
--
ALTER TABLE `awards`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `contract`
--
ALTER TABLE `contract`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `entity`
--
ALTER TABLE `entity`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `federalhierarchy`
--
ALTER TABLE `federalhierarchy`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `listing`
--
ALTER TABLE `listing`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `oppertunities`
--
ALTER TABLE `oppertunities`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `wages`
--
ALTER TABLE `wages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
