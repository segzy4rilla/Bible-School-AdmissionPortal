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

CREATE TABLE `Application_Form` (
  `User_ID` varchar(255) NOT NULL,
  `First_Name` varchar(255) NOT NULL,
  `Last_Name` varchar(255) NOT NULL,
  `Date_Of_Birth` varchar(255) NOT NULL,
  `Sex` varchar(255) NOT NULL,
  `Age` varchar(255) NOT NULL,
  `Nationality_At_Birth` varchar(255) NOT NULL,
  `Church_Part_Of_UD` varchar(255) NOT NULL,
  `Marital_Status` varchar(255) NOT NULL,
  `Country_Of_Residence` varchar(255) NOT NULL,
  `Residential_Address` varchar(255) NOT NULL,
  `Email_Address` varchar(255) NOT NULL,
  `WhatsApp_Number` varchar(255) NOT NULL,
  `Profession` varchar(255) NOT NULL,
  `Current_Occupation` varchar(255) NOT NULL,
  `Name_Of_Father` varchar(255) NOT NULL,
  `Name_Of_Mother` varchar(255) NOT NULL,
  `Name_Of_Gurdian` varchar(255) NOT NULL,
  `Profession_Of_Father` varchar(255) NOT NULL,
  `Profession_Of_Mother` varchar(255) NOT NULL,
  `Profession_Of_Guardian` varchar(255) NOT NULL,
  `Where_Do_You_Live` varchar(255) NOT NULL,
  `Parents_Guardian_OwnHouse` varchar(255) NOT NULL,
  `Parents_Guardian_RentHouse` varchar(255) NOT NULL,
  `Parents_Guardian_OwnCar` varchar(255) NOT NULL,
  `Parents_Guardian_OwnBusiness` varchar(255) NOT NULL,
  `Name_Of_Sponsor` varchar(255) NOT NULL,
  `Sponsor_Phone_Number` varchar(255) NOT NULL,
  `Next_Of_Kin` varchar(255) NOT NULL,
  `Next_Of_Kin_Contact_Number` varchar(255) NOT NULL,
  `Course` varchar(255) NOT NULL,
  `Start_Month` varchar(255) NOT NULL,
  `Born_Again` varchar(255) NOT NULL,
  `Believe_Called` varchar(255) NOT NULL,
  `Name_Of_Church` varchar(255) NOT NULL,
  `Church_Role` varchar(255) NOT NULL,
  `Pastoral_Length` varchar(255) NOT NULL,
  `Why_Bible_School` varchar(255) NOT NULL,
  `Do_You_Have_A_Calling` varchar(255) NOT NULL,
  `Do_You_Have_A_Calling_Explain` varchar(255) NOT NULL,
  `Narcotic_Drugs` varchar(255) NOT NULL,
  `Narcotic_Drugs_Explain` varchar(255) NOT NULL,
  `Arrested_Police` varchar(255) NOT NULL,
  `Arrested_Police_Explain` varchar(255) NOT NULL,
  `Court_Prosecution` varchar(255) NOT NULL,
  `Court_Prosecution_Explain` varchar(255) NOT NULL,
  `Been_Jail` varchar(255) NOT NULL,
  `Been_Jail_Explain` varchar(255) NOT NULL,
  `Alcoholic_Drinks` varchar(255) NOT NULL,
  `Alcoholic_Drinks_Explain` varchar(255) NOT NULL,
  `Virgin` varchar(255) NOT NULL,
  `Immoral_Involvement` varchar(255) NOT NULL,
  `Armed_Robbery` varchar(255) NOT NULL,
  `Armed_Robbery_Explain` varchar(255) NOT NULL,
  `Revolution_Rebel` varchar(255) NOT NULL,
  `Revolution_Rebel_Explain` varchar(255) NOT NULL,
  `Prostitution` varchar(255) NOT NULL,
  `Prostitution_Explain` varchar(255) NOT NULL,
  `Treated_Disease_List` varchar(255) NOT NULL,
  `Treated_Disease_List_Other` varchar(255) NOT NULL,
  `Serious_MedicalCondition` varchar(255) NOT NULL,
  `Regular_Medication` varchar(255) NOT NULL,
  `Major_Surgeries` varchar(255) NOT NULL,
  `Major_Surgeries_Specify` varchar(255) NOT NULL,
  `Allergies` varchar(255) NOT NULL,
  `Law_Problems` varchar(255) NOT NULL,
  `Law_Problems_Specify` varchar(255) NOT NULL,
  `Recommended_By` varchar(255) NOT NULL,
  `Recommended_By_Specify` varchar(255) NOT NULL,
  `Signature` varchar(255) NOT NULL,
  `Submission_Date` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
