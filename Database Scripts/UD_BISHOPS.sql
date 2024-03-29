-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jun 28, 2020 at 10:29 PM
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
-- Table structure for table `UD_BISHOPS`
--

CREATE TABLE `UD_BISHOPS` (
  `Count` varchar(2) DEFAULT NULL,
  `Denomination` varchar(33) DEFAULT NULL,
  `Council` varchar(22) DEFAULT NULL,
  `Bishop_In_Charge` varchar(53) DEFAULT NULL,
  `Num_Pot` varchar(29) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `UD_BISHOPS`
--

INSERT INTO `UD_BISHOPS` (`Count`, `Denomination`, `Council`, `Bishop_In_Charge`, `Num_Pot`) VALUES
('1', 'ANAGKAZO ASSEMBLIES', 'ASOKWA', 'BISHOP CHARLES AMOO', '0'),
('2', 'ANAGKAZO ASSEMBLIES', 'AWOSHIE', 'SISTER KATHLEEN ALLOTEY', '1'),
('3', 'ANAGKAZO ASSEMBLIES', 'BANTAMA', 'BISHOP PATRICK BRUCE', '2'),
('4', 'ANAGKAZO ASSEMBLIES', 'OFAAKOR', 'BISHOP EMMANUEL LOUIS NTERFUL', '0'),
('5', 'ANAGKAZO ASSEMBLIES', 'SANTA MARIA', 'BISHOP ALFRED ADIGBO', '0'),
('6', 'ANAGKAZO ASSEMBLIES', 'SOWUTUOM', 'BISHOP ERIC ASARE', '3'),
('7', 'ANAGKAZO ASSEMBLIES', 'ABEKA', 'BISHOP JUDE ORRACA-TETTEH', '0'),
('8', 'ANAGKAZO ASSEMBLIES', 'AYEDUASE', 'SISTER JOY PHILLIPE BRUCE', '0'),
('9', 'CATCH THE ANOINTING CENTRE', 'BAWKU', 'BISHOP FREDERICK NORTEY', '1'),
('10', 'CATCH THE ANOINTING CENTRE', 'BOLGATANGA', 'BISHOP SAMPSON KISSI', '1'),
('11', 'CATCH THE ANOINTING CENTRE', 'LA', 'BISHOP SAMUEL BENJAMIN SAWYERR', '2'),
('12', 'CATCH THE ANOINTING CENTRE', 'QADOSH', 'BISHOP KAKRA BAIDEN/ BISHOP BRIAN ADU', '37'),
('13', 'EVANGELICAL LIGHTHOUSE CHAPEL INT', 'HO', 'BISHOP WISDOM KWESI ELI TSYI', '4'),
('14', 'EVANGELICAL LIGHTHOUSE CHAPEL INT', 'HOHOE', 'BISHOP JOSHUA DORMEDIAME', '0'),
('15', 'EVANGELICAL LIGHTHOUSE CHAPEL INT', 'KETE-KRACHI', 'BISHOP RICHARD GYAMENA', '0'),
('16', 'EVANGELICAL LIGHTHOUSE CHAPEL INT', 'KPANDO', 'BISHOP KUDZO BEKUI', '0'),
('17', 'GREATER LOVE  CHURCH GHANA', 'KINTAMPO', 'BISHOP CHRISTIAN AGO MENSAH', '2'),
('18', 'GREATER LOVE  CHURCH GHANA', 'SUNYANI', 'BISHOP KEVIN BARNSLEY', '0'),
('19', 'GREATER LOVE  CHURCH GHANA', 'TESHIE', 'BISHOP ERNEST ARYEE', '0'),
('20', 'GOSPEL SALVATION CHURCH', 'MANDELA', 'BISHOP WILLIAM AGGREY-MENSAH', '3'),
('21', 'GOSPEL SALVATION CHURCH', 'NYANYANOR KAKRABA', 'BISHOP CHRISTIAN QUINSTON-ADDO', '2'),
('22', 'GOSPEL SALVATION CHURCH', 'ODA', '*', '0'),
('23', 'GOSPEL SALVATION CHURCH', 'QADESH', 'BISHOP EAT SACKEY/ BISHOP ISAAC SSALI', '0'),
('24', 'GOSPEL SALVATION CHURCH', 'SWEDRU', 'BISHOP NANA AKOTO ASIRIFI', '1'),
('25', 'GOSPEL SALVATION CHURCH', 'WINNEBA', 'BISHOP FRANCIS HAMMOND', '1'),
('26', 'GOSPEL SALVATION CHURCH', 'SYDNEY*', 'APOSTLE KRISTOFFER YEMOH', '15'),
('27', 'HEALING JESUS MISSION INT', 'LA BELLE EGLISE', 'SISTER SIMONE-PIERRE EYRA ADEMOLA', '1'),
('28', 'HEALING JESUS MISSION INT', 'QADISH', 'BISHOP ATO DICKSON', '1'),
('29', 'HEALING JESUS MISSION INT', 'SOGAKOPE', 'BISHOP FRANCIS TSIKATA-AKATTO', '1'),
('30', 'JESUS IS THE ANSWER CHURCH', 'TAMALE NORTH', 'BISHOP HARRY KWESI DODD', '0'),
('31', 'JESUS IS THE ANSWER CHURCH', 'WA', 'BISHOP NANA OSEI DARKO', '0'),
('32', 'JESUS IS THE ANSWER CHURCH', 'TAMALE', 'BISHOP DANIEL KWAKU ATIEMOH', '0'),
('33', 'LIGHTHOUSE CHAPEL INT', 'ACHIMOTA', 'BISHOP KENNETH BAMFO', '1'),
('34', 'LIGHTHOUSE CHAPEL INT', 'AYAWASO', 'BISHOP STEVE ASARE', '4'),
('35', 'LIGHTHOUSE CHAPEL INT', 'BEREKUSO', 'BISHOP ROBERT NUNOO', '0'),
('36', 'LIGHTHOUSE CHAPEL INT', 'EJURA', 'BISHOP DAVID ASHONG', '0'),
('37', 'LIGHTHOUSE CHAPEL INT', 'NSAWAM', 'BISHOP KWAME KARPUS AMPOFO', '0'),
('38', 'LOYALTY HOUSE INT', 'ASHAIMAN CHAPEL SQUARE', 'BISHOP FRED ANSAH QUARTEY', '1'),
('39', 'LOYALTY HOUSE INT', 'ASSIN FOSU', 'BISHOP ISHMAEL SAM', '3'),
('40', 'LOYALTY HOUSE INT', 'CAPE COAST', 'BISHOP ISHMAEL SAM', '3'),
('41', 'LOYALTY HOUSE INT', 'DAWHENYA', 'BISHOP ISHMAEL SAM/BISHOP DAVID ASIEDU', '3'),
('42', 'LOYALTY HOUSE INT', 'TEMA', 'BISHOP FRANK OFORI ADJEI', '2'),
('43', 'LOYALTY HOUSE INT', 'TEMA COMMUNITY 22', 'BISHOP DAVID YALLEH', '0'),
('44', 'LOYALTY HOUSE INT', 'LOME', 'BISHOP EMMANUEL YEBOAH', '0'),
('45', 'LOYALTY HOUSE INT', 'CONTONOU', 'BISHOP ARMSTRONG SIMPSON NARTEY', '1'),
('46', 'LOYALTY HOUSE INT', 'KPALIME', 'BISHOP MAWUSI ADAGBE', '1'),
('47', 'LOYALTY HOUSE INT', 'LAGOS', 'BISHOP ALEX KOFI-OPATA/ SISTER OLIVIA-ANNA KOFI-OPATA', '6'),
('48', 'QFC GHANA', 'KORLE GONNO', 'BISHOP HAMISH ODDOYE', '3'),
('49', 'QFC GHANA', 'QODESH', 'BISHOP NATHANIEL NII ADJEIDU ARMAR', '0'),
('50', 'THE MACHANEH CHURCH', 'ADENTA', 'BISHOP SOLOMON BOATENG', '6'),
('51', 'THE MACHANEH CHURCH', 'KOFORIDUA', '*', '0'),
('52', 'THE MACHANEH CHURCH', 'OYIBI', 'BISHOP EDWIN MORGAN OGOE/BISHOP KWABENA ASAMOAH', '6'),
('53', 'THE MACHANEH CHURCH', 'PEDUASE', 'BISHOP RORY ARYEE', '0'),
('54', 'THE MACHANEH CHURCH', 'LUSAKA FOXDALE', 'BISHOP DANIEL ODEI SIAW', '0'),
('55', 'THE MACHANEH CHURCH', 'LUSAKA CITY', 'BISHOP LANDY AMOFA-SEKYI', '2'),
('56', 'THE MAKARIOS CHURCH', 'QEDESH', 'BISHOP EDDY ADDY/BISHOP DAVID ASOMANI', '5'),
('57', 'THE MAKARIOS CHURCH', 'SEKONDI ', 'BISHOP EBENEZER ADOM BARNOR', '0'),
('58', 'THE MAKARIOS CHURCH', 'TARKWA', 'BISHOP SAMUEL OBENG', '1'),
('59', 'THE MAKARIOS CHURCH', 'TAKORADI', 'BISHOP EMMANUEL SAMUEL BAIDOO', '0'),
('60', 'THE MAKARIOS CHURCH', 'BAKAU, GAMBIA', 'BISHOP EDWARD BOTWE', '2'),
('61', 'THE MAKARIOS CHURCH', 'BISSAU', 'BISHOP JEFFREY OCRAN', '6'),
('62', 'THE MEGA CHURCH', 'ATONSU', 'BISHOP NASSIB HAGE', '0'),
('63', 'THE MEGA CHURCH', 'BIBIANI', 'BISHOP DENNIS AGYEI-GYAN', '3'),
('64', 'THE MEGA CHURCH', 'OBUASI', 'BISHOP EDDIE FABIN', '1'),
('65', 'MUSTARD SEED CHAPEL INT', 'EDMONTON', 'BISHOP RICHARD ARYEE/SISTER PHILLIPA MARKA COKER', '6'),
('66', 'MUSTARD SEED CHAPEL INT', 'PUNE', 'SISTER LEONORA JAMIE HYDE', '0'),
('67', 'MUSTARD SEED CHAPEL INT', 'BARCELONA', 'BISHOP KWEKU AMPONSAH', '0'),
('68', 'IGREJA DO PRIMIERO AMOR', 'MAPUTO', 'BISHOP FRANK OTCHERE', '0'),
('69', 'IGREJA DO PRIMIERO AMOR', 'LUANDA', 'APOSTLE KINGSLEY GYASI', '5'),
('70', 'IGREJA DO PRIMIERO AMOR', 'SAO PAOLO', 'BISHOP FRANK OTCHERE', '0'),
('71', 'QFC USA', 'LOS ANGELES', 'APOSTLE JOEL OBUOBISA', '0'),
('72', 'QFC USA', 'GEORGETOWN', 'BISHOP VICTOR COLLINS ASABERE', '11'),
('73', 'QFC USA', 'KINGSTON', 'BISHOP DAVID GYEDU', '0'),
('74', 'LCI KENYA', 'NAIROBI', 'BISHOP ISAAC OBLITEY-COMMEY', '0'),
('75', 'LCI SA', 'JOBURG', 'BISHOP EMMANUEL KLUFIO\\BISHOP XOLA MPUPU', '0'),
('76', 'LCI SA', 'MASERU', 'BISHOP KHAUHELO MOKOBOCHO', '0'),
('77', 'LCI SA', 'PRETORIA', 'BISHOP PETER MOKGANYA', '0'),
('78', 'LCI SA', 'CAPETOWN', 'BISHOP NAPOLEON ESSIEN', '0'),
('79', 'LCI SA', 'PIETERMARITZBURG', 'BISHOP DANIEL HARLLEY', '2'),
('80', 'LCI SA', 'MANZINI', 'BISHOP ANDY JUMAH', '4');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
