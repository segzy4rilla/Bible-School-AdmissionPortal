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
-- Table structure for table `Documemt_Upload`
--

CREATE TABLE `Documemt_Upload` (
  `User_ID` varchar(255) NOT NULL,
  `DocFilepath1` varchar(255) DEFAULT NULL,
  `DocFilepath2` varchar(255) DEFAULT NULL,
  `DocFilepath3` varchar(255) DEFAULT NULL,
  `DocFilepath4` varchar(255) DEFAULT NULL,
  `DocFilepath5` varchar(255) DEFAULT NULL,
  `DocFilepath6` varchar(255) DEFAULT NULL,
  `DocFilepath7` varchar(255) DEFAULT NULL,
  `DocFilepath8` varchar(255) DEFAULT NULL,
  `DocFilepath9` varchar(255) DEFAULT NULL,
  `DocFilepath10` varchar(255) DEFAULT NULL,
  `DocFilepath11` varchar(255) DEFAULT NULL,
  `DocFilepath12` varchar(255) DEFAULT NULL,
  `DocComment1` varchar(255) DEFAULT NULL,
  `DocComment2` varchar(255) DEFAULT NULL,
  `DocComment3` varchar(255) DEFAULT NULL,
  `DocComment4` varchar(255) DEFAULT NULL,
  `DocComment5` varchar(255) DEFAULT NULL,
  `DocComment6` varchar(255) DEFAULT NULL,
  `DocComment7` varchar(255) DEFAULT NULL,
  `DocComment8` varchar(255) DEFAULT NULL,
  `DocComment9` varchar(255) DEFAULT NULL,
  `DocComment10` varchar(255) DEFAULT NULL,
  `DocComment11` varchar(255) DEFAULT NULL,
  `DocComment12` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

ALTER TABLE Documemt_Upload
ADD PRIMARY KEY(User_ID);

ALTER TABLE `Documemt_Upload` 
ADD CONSTRAINT `FK_User_ID` 
FOREIGN KEY (`User_ID`) REFERENCES `User_Table`(`User_ID`) 
ON DELETE RESTRICT ON UPDATE RESTRICT;

COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
