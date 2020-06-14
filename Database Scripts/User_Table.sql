-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jun 13, 2020 at 12:48 PM
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
  `User_ID` INT NOT NULL AUTO_INCREMENT,
  `First_Name` varchar(255) DEFAULT NULL,
  `Last_Name` varchar(255) NOT NULL,
  `EmailWhatsapp` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `Nationality` varchar(255) NOT NULL,
  `Application_Form_Submitted` tinyint(1) NOT NULL,
  `Interview_Form_Submitted` tinyint(1) NOT NULL,
  `Document_Uploads_Submitted` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
COMMIT;

ALTER TABLE User_Table
ADD PRIMARY KEY(User_ID);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
