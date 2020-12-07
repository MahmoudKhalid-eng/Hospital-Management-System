-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 04, 2020 at 12:06 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hospital system`
--

-- --------------------------------------------------------

--
-- Table structure for table `appointments`
--

CREATE TABLE `appointments` (
  `Doc_Name` varchar(20) NOT NULL,
  `Appointment` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `appointments`
--

INSERT INTO `appointments` (`Doc_Name`, `Appointment`) VALUES
('khalid', '4'),
('mashaal', '6'),
('ali', '4'),
('youssef', '3'),
('youssef', '3'),
('youssef', '3'),
('Doctor', 'Appointment'),
('mashaal', '4'),
('mashaal', '2'),
('mashaal', '3'),
('mashaal', '3');

-- --------------------------------------------------------

--
-- Table structure for table `client`
--

CREATE TABLE `client` (
  `Name` varchar(20) NOT NULL,
  `Phone` varchar(20) NOT NULL,
  `Age` varchar(20) NOT NULL,
  `ID` varchar(20) NOT NULL,
  `Password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `client`
--

INSERT INTO `client` (`Name`, `Phone`, `Age`, `ID`, `Password`) VALUES
('mahmoud', '01283650759', '19', '1', 'mahmoud'),
('ahmed', '01090892683', '15', '2', 'ahmed'),
('ssds', 'sdsdsd', 'sdsdsdsd', 'sdsdsd', 'sdsdsdsd');

-- --------------------------------------------------------

--
-- Table structure for table `doctor`
--

CREATE TABLE `doctor` (
  `ID` varchar(20) NOT NULL,
  `Password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `doctor`
--

INSERT INTO `doctor` (`ID`, `Password`) VALUES
('1', 'mahmoud');

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

CREATE TABLE `patient` (
  `Name` varchar(20) NOT NULL,
  `Phone` varchar(20) NOT NULL,
  `Age` varchar(20) NOT NULL,
  `ID` varchar(20) NOT NULL,
  `room` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `patient`
--

INSERT INTO `patient` (`Name`, `Phone`, `Age`, `ID`, `room`) VALUES
('mahmoud', '01283650759', '19', '1', 0),
('mahmoud', '01283650759', '19', '1', 1),
('khalid', '0403513979', '18', '5', 7);

-- --------------------------------------------------------

--
-- Table structure for table `recep`
--

CREATE TABLE `recep` (
  `ID` varchar(20) NOT NULL,
  `Password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `recep`
--

INSERT INTO `recep` (`ID`, `Password`) VALUES
('1', 'mahmoud');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
