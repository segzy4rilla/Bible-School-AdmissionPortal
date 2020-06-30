-- phpMyAdmin SQL Dump
-- version 4.9.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 29, 2020 at 10:28 PM
-- Server version: 5.6.47
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `anagkaz1_wp780`
--

-- --------------------------------------------------------

--
-- Table structure for table `Admin_User`
--

CREATE TABLE `Admin_User` (
  `Username` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `User_Level` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Admin_User`
--

INSERT INTO `Admin_User` (`Username`, `Password`, `User_Level`) VALUES
('ABMTC_Admin', 's^s{_h2aSEpbrK&?', 0),
('ABMTC_Staff1', '66wd%`TPK4_+]Au,', 1);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;