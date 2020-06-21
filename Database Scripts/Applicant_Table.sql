-- phpMyAdmin SQL Dump
-- version 4.9.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 16, 2020 at 12:48 AM
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
-- Table structure for table `Applicant_Table`
--

CREATE TABLE `Applicant_Table` (
  `User_ID` varchar(255) NOT NULL,
  `First_Name` varchar(255) DEFAULT NULL,
  `Last_Name` varchar(255) NOT NULL,
  `EmailWhatsapp` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `Nationality` varchar(255) NOT NULL,
  `Application_Form_Submitted` tinyint(1) NOT NULL,
  `Interview_Form_Submitted` tinyint(1) NOT NULL,
  `Document_Uploads_Status` varchar(20) DEFAULT "Incomplete" NOT NULL,
  `Timestamp` timestamp(6) NOT NULL DEFAULT CURRENT_TIMESTAMP(6)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Applicant_Table`
--


--
-- Indexes for dumped tables
--

--
-- Indexes for table `Applicant_Table`
--
ALTER TABLE `Applicant_Table`
  ADD PRIMARY KEY (`EmailWhatsapp`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
