-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jun 07, 2020 at 12:09 PM
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
-- Table structure for table `Interview_Form`
--

CREATE TABLE `Interview_Form` (
  `Are_You_Born_Again` varchar(255) NOT NULL,
  `What_Does_It_Mean` varchar(255) NOT NULL,
  `When_were_you` varchar(255) NOT NULL,
  `How_long_have_you` varchar(255) NOT NULL,
  `User_ID` varchar(255) NOT NULL,
  `New_Creature_Meaning` varchar(255) NOT NULL,
  `Old_Habits` varchar(255) NOT NULL,
  `Old_Habits_Other` varchar(255) NOT NULL,
  `Stop_Old_Habits` varchar(255) NOT NULL,
  `Stop_Old_Habits_Other` varchar(255) NOT NULL,
  `Is_Pastor_Aware` varchar(255) NOT NULL,
  `Comment` varchar(255) NOT NULL,
  `Role_In_Church` varchar(255) NOT NULL,
  `Other_Role_In_Church` varchar(255) NOT NULL,
  `John_3_16` varchar(255) NOT NULL,
  `Genesis_1_1` varchar(255) NOT NULL,
  `Why_Bible_School` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
