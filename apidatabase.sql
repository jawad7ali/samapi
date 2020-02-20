-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 18, 2020 at 08:52 PM
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
-- Database: `apidatabase`
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
-- Dumping data for table `opportunities`
--

INSERT INTO `opportunities` (`id`, `noticeId`, `title`, `solicitationNumber`, `department`, `subTier`, `office`, `postedDate`, `type`, `baseType`, `archiveType`, `archiveDate`, `typeOfSetAsideDescription`, `typeOfSetAside`, `responseDeadLine`, `naicsCode`, `classificationCode`, `active`, `award`, `pointOfContact`, `description`, `organizationType`, `officeAddress`, `placeOfPerformance`, `additionalInfoLink`, `links`, `uiLink`) VALUES
(76, 'f02e61a54948c8cc44b17c2c5a4473e5', 'IHWCU ACU', 'SPE1C1-18-R-0062', '', '', '', '2018-05-10', 'Combined Synopsis/Solicitation', 'Combined Synopsis/Solicitation', 'manual', '', '', '', '', '315210', '84', 'Yes', 'null', '[{\"fax\":null,\"type\":\"primary\",\"email\":\"Michael.Baron@dla.mil\",\"phone\":\"2157373052\",\"title\":null,\"fullName\":\"Michael S. Baron\"},{\"fax\":null,\"type\":\"secondary\",\"email\":\"Evan.Eisenberg@dla.mil\",\"phone\":\"215-737-2040\",\"title\":\"Contract Sprcialist\",\"fullName\":', 'https://api.sam.gov/prod/opportunities/v1/noticedesc?noticeid=f02e61a54948c8cc44b17c2c5a4473e5', '', 'null', 'null', '', '[{\"rel\":\"self\",\"href\":\"https://api.sam.gov/prod/opportunities/v1/search?noticeid=f02e61a54948c8cc44b17c2c5a4473e5&limit=1\",\"hreflang\":null,\"media\":null,\"title\":null,\"type\":null,\"deprecation\":null}]', 'https://beta.sam.gov/opp/f02e61a54948c8cc44b17c2c5a4473e5/view'),
(78, 'ebc0b37bb80dbdc227e2e7f506585b3b', 'CNC Lathe', '4037898TLM', 'INTERIOR, DEPARTMENT OF THE', 'BUREAU OF RECLAMATION', 'DENVER FED CENTER', '2018-05-10', 'Combined Synopsis/Solicitation', 'Combined Synopsis/Solicitation', 'manual', '', '', '', '2018-05-18T17:00:00-08:00', '333517', '66', 'Yes', 'null', '[{\"fax\":\"509-633-9175\",\"type\":\"primary\",\"email\":\"tmest@usbr.gov\",\"phone\":\"509-633-9327\",\"title\":\"Contract Specialist\",\"fullName\":\"Terry L. Mest\"}]', 'https://api.sam.gov/prod/opportunities/v1/noticedesc?noticeid=ebc0b37bb80dbdc227e2e7f506585b3b', 'OFFICE', '{\"zipcode\":\"80225\",\"city\":\"DENVER\",\"countryCode\":\"USA\",\"state\":\"CO\"}', 'null', '', '[{\"rel\":\"self\",\"href\":\"https://api.sam.gov/prod/opportunities/v1/search?noticeid=ebc0b37bb80dbdc227e2e7f506585b3b&limit=1\",\"hreflang\":null,\"media\":null,\"title\":null,\"type\":null,\"deprecation\":null}]', 'https://beta.sam.gov/opp/ebc0b37bb80dbdc227e2e7f506585b3b/view'),
(79, 'ea503a8c3e2b574fcbc26dbc7d5098dc', 'Medical Community of Interest (MedCOI) Transition', 'FA500018T0009', 'DEPARTMENT OF DEFENSE', 'DEPT OF THE AIR FORCE', 'FA5000  673 CONS LGC', '2018-05-10', 'Sources Sought', 'Sources Sought', 'manual', '', '', '', '2018-05-25T14:00:00-10:00', '541512', 'D', 'Yes', 'null', '[{\"fax\":null,\"type\":\"primary\",\"email\":\"nicholas.parsons.2@us.af.mil\",\"phone\":\"907-552-3969\",\"title\":\"Contracting Officer\",\"fullName\":\"Nicholas D Parsons\"}]', 'https://api.sam.gov/prod/opportunities/v1/noticedesc?noticeid=ea503a8c3e2b574fcbc26dbc7d5098dc', 'OFFICE', '{\"zipcode\":\"99506\",\"city\":\"JBER\",\"countryCode\":\"USA\",\"state\":\"AK\"}', '{\"streetAddress\":\"Joint Base Elmendorf Richardson\",\"city\":{\"code\":\"3000\",\"name\":\"Anchorage\"},\"state\":{\"code\":\"AK\"},\"zip\":\"99504\",\"country\":{\"code\":\"USA\"}}', '', '[{\"rel\":\"self\",\"href\":\"https://api.sam.gov/prod/opportunities/v1/search?noticeid=ea503a8c3e2b574fcbc26dbc7d5098dc&limit=1\",\"hreflang\":null,\"media\":null,\"title\":null,\"type\":null,\"deprecation\":null}]', 'https://beta.sam.gov/opp/ea503a8c3e2b574fcbc26dbc7d5098dc/view'),
(80, 'e6b371e192f3a1780498116dcf6e435b', 'SPMYM2-18-Q-2691', 'SPMYM2-18-Q-2691', '', '', '', '2018-05-10', 'Solicitation', 'Presolicitation', 'manual', '', '', '', '2018-05-18T08:00:00-08:00', '331491', '47', 'Yes', 'null', '[{\"fax\":null,\"type\":\"primary\",\"email\":\"andrea.hart@dla.mil\",\"phone\":\"3604760263\",\"title\":null,\"fullName\":\"Andrea Hart\"}]', 'https://api.sam.gov/prod/opportunities/v1/noticedesc?noticeid=e6b371e192f3a1780498116dcf6e435b', '', 'null', 'null', '', '[{\"rel\":\"self\",\"href\":\"https://api.sam.gov/prod/opportunities/v1/search?noticeid=e6b371e192f3a1780498116dcf6e435b&limit=1\",\"hreflang\":null,\"media\":null,\"title\":null,\"type\":null,\"deprecation\":null}]', 'https://beta.sam.gov/opp/e6b371e192f3a1780498116dcf6e435b/view'),
(81, 'e69c9e9de5e2a7d8176706dcc492536b', 'Repair Bldg 715, Camp Casey', 'W91QVN18R0064', 'DEPARTMENT OF DEFENSE', 'DEPT OF THE ARMY', '411TH CONTRACTING SUPORT BRIGAGE AU', '2018-05-10', 'Combined Synopsis/Solicitation', 'Combined Synopsis/Solicitation', 'manual', '', '', '', '2018-05-10T23:59:00-05:00', '236220', 'Z', 'Yes', 'null', '[{\"fax\":null,\"type\":\"primary\",\"email\":\"myonghui.kang1.ln@mail.mil\",\"phone\":\"7247275\",\"title\":\"Contract Specialist\",\"fullName\":\"Kang, Myong Hui\"}]', 'https://api.sam.gov/prod/opportunities/v1/noticedesc?noticeid=e69c9e9de5e2a7d8176706dcc492536b', 'OFFICE', '{\"zipcode\":\"96205-0062\",\"city\":\"APO\",\"countryCode\":\"USA\",\"state\":\"AP\"}', 'null', '', '[{\"rel\":\"self\",\"href\":\"https://api.sam.gov/prod/opportunities/v1/search?noticeid=e69c9e9de5e2a7d8176706dcc492536b&limit=1\",\"hreflang\":null,\"media\":null,\"title\":null,\"type\":null,\"deprecation\":null}]', 'https://beta.sam.gov/opp/e69c9e9de5e2a7d8176706dcc492536b/view'),
(82, 'e5209fbdc3a8e6745be52f02546b3098', '12000 Block Rolling Pin Barracks Renovations, Fort Hood, Texas (Phase 1)', 'W9126G-17-R-0078', 'DEPARTMENT OF DEFENSE', 'DEPT OF THE ARMY', 'US ARMY ENGINEER DISTRICT FT WORTH', '2018-05-10', 'Award Notice', 'Combined Synopsis/Solicitation', 'manual', '', '', '', '', '236220', 'Z', 'Yes', '{\"date\":\"2018-05-09\",\"number\":\"W9126G18C0028\",\"amount\":\"$56,724,500.00\",\"awardee\":{\"name\":\"Guyco, Inc.\",\"location\":{\"streetAddress\":\"175 Private Road 3020\",\"city\":{\"code\":\"41188\",\"name\":\"Lampasas\"},\"state\":{\"code\":\"TX\"},\"zip\":\"76660\",\"country\":{\"code\":\"US', '[{\"fax\":null,\"type\":\"primary\",\"email\":\"richard.feller@usace.army.mil\",\"phone\":\"8178861165\",\"title\":null,\"fullName\":\"Richard D. Feller\"},{\"fax\":null,\"type\":\"secondary\",\"email\":\"john.h.rodgers@usace.army.mil\",\"phone\":\"877-866-1048\",\"title\":\"Contracting Offi', 'https://api.sam.gov/prod/opportunities/v1/noticedesc?noticeid=e5209fbdc3a8e6745be52f02546b3098', 'OFFICE', '{\"zipcode\":\"76102\",\"city\":\"FORT WORTH\",\"countryCode\":\"USA\",\"state\":\"TX\"}', '{\"streetAddress\":\"Fort Hood Army Post\",\"city\":{\"code\":\"39148\",\"name\":\"Killeen\"},\"state\":{\"code\":\"TX\"},\"zip\":\"76544\",\"country\":{\"code\":\"USA\"}}', '', '[{\"rel\":\"self\",\"href\":\"https://api.sam.gov/prod/opportunities/v1/search?noticeid=e5209fbdc3a8e6745be52f02546b3098&limit=1\",\"hreflang\":null,\"media\":null,\"title\":null,\"type\":null,\"deprecation\":null}]', 'https://beta.sam.gov/opp/e5209fbdc3a8e6745be52f02546b3098/view');

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
-- Indexes for table `opportunities`
--
ALTER TABLE `opportunities`
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
-- AUTO_INCREMENT for table `opportunities`
--
ALTER TABLE `opportunities`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=83;

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
