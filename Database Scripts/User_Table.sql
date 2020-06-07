-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jun 06, 2020 at 11:59 PM
-- Server version: 10.1.33-MariaDB
-- PHP Version: 7.2.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ABTMC_Portal`
--

-- --------------------------------------------------------

--
-- Table structure for table `User_Table`
--

CREATE TABLE `User_Table` (
  `User_ID` varchar(255) NOT NULL,
  `First_Name` varchar(255) DEFAULT NULL,
  `Last_Name` varchar(255) NOT NULL,
  `Username` varchar(255) NOT NULL,
  `EmailWhatsapp` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `User_Table`
--

INSERT INTO `User_Table` (`User_ID`, `First_Name`, `Last_Name`, `Username`, `EmailWhatsapp`, `Password`) VALUES
('5edbfd1305901', 'John', 'Doe', 'jaa13', 'john@example.com', 'Duduosun96'),
('5edc0d91a6c00', '', '', '', '', ''),
('5edc0e8641eab', 'Godwin', 'Adebimpe', 'james', 'ade.segs@yahoo.com', 'Duduosun96');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
