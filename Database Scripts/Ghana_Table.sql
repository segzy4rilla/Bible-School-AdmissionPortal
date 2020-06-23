-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jun 23, 2020 at 06:51 AM
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
-- Table structure for table `Ghana_Table`
--

CREATE TABLE `Ghana_Table` (
  `First Name` varchar(15) DEFAULT NULL,
  `Last Name` varchar(15) DEFAULT NULL,
  `Country` varchar(5) DEFAULT NULL,
  `Email_Address` varchar(33) DEFAULT NULL,
  `Phone_Number` varchar(25) DEFAULT NULL,
  `Church` varchar(60) DEFAULT NULL,
  `Denomination` varchar(10) DEFAULT NULL,
  `Created_an_ABMTC_Account` varchar(10) DEFAULT NULL,
  `Sent Email` varchar(10) DEFAULT NULL,
  `Sent Whatsapp Message` varchar(10) DEFAULT NULL,
  `Response` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Ghana_Table`
--

INSERT INTO `Ghana_Table` (`First Name`, `Last Name`, `Country`, `Email_Address`, `Phone_Number`, `Church`, `Denomination`, `Created_an_ABMTC_Account`, `Sent Email`, `Sent Whatsapp Message`, `Response`) VALUES
('Emil ', 'Osafo-Yeboah', 'Ghana', 'emilyeboah2009@gmail.com', '0549389149', 'Evergreen Church', '', '', '', '', ''),
('Desmond ', 'Ifejjlunigkle', 'Ghana', 'NA', '0202748704', 'NA', '', '', '', '', ''),
('Samuel ', 'Donkor', 'Ghana', 'donkorsamuel@gmail.com', '0249320220', 'Presbyterian Church of Ghana', '', '', '', '', ''),
('Eric', 'SaaniKuu', 'Ghana', 'saanikuueric@gmail.com', '0558829905', 'Winners Chapel Ghana Tamale Branch', '', '', '', '', ''),
('HENRY', 'QUAYE', 'Ghana', 'nhiiyellow@gmail.com', '0559945238', 'CTAC ROSE OF SHARON CATHEDRAL, LA', '', '', '', '', ''),
('AARON ', 'ANSAH', 'Ghana', 'ronaspayne@gmail.com', '241593445', 'LOYALTY HOUSE INTERNATIONAL, GETHSEMANE-SALTPOND ', '', '', '', '', ''),
('timothy', 'jackson', 'Ghana', 'okine994@gmail.com', '0243989321', 'Living Hope Christian Ministry International', '', '', '', '', ''),
('GODWIN', 'ADZOBU', 'Ghana', 'pkwesi617@gmail.com', '0558168114', 'EVANGELICAL LIGHTHOUSE CHAPEL INTERNATIONAL, KPANDO ', '', '', '', '', ''),
('Maxwell ', 'Agyei-Manu ', 'Ghana', 'maxwellagyeimanu@gmail.com ', '+233542985620', 'Firstlove church', '', '', '', '', ''),
('Dickson', 'Amoafo', 'Ghana', 'dicksonwamoafo@gmail.com', '+233240273178', 'Wesley Methodist Church', '', '', '', '', ''),
('Richard ', 'Nyarko', 'Ghana', 'richardnyarko58@gmail.com', '0241357049', 'Zion Tent ministry ', '', '', '', '', ''),
('Abraham ', 'Lamptey', 'Ghana', 'Abrahamlamptey26@g-mail.com', '0554268667', 'Ebenezer Gospel Ministry int ', '', '', '', '', ''),
('Rex', 'Okyere', 'Ghana', 'rexfordokyere@yahoo.co.uk ', '209093284', 'United faith tabernacle ', '', '', '', '', ''),
('Paul', 'Tandoh', 'Ghana', 'Paultandoh66@gmail.com', '0549642655', 'Light House (Greater Love) - Tarkwa', '', '', '', '', ''),
('Dorcas', 'Paintsil ', 'Ghana', 'adadziewaamaamepaintsil@gmail.com', '0249507777', 'Christian Faith Church International ', '', '', '', '', ''),
('Benjamin', 'Yevugah ', 'Ghana', 'benjaminqyevugah@gmail.com', '0244706203', 'Glowing Light Church International', '', '', '', '', ''),
('Douglas', 'Dzodzegbe', 'Ghana', 'douglasjackson40@yahoo.com', '0546824050', 'Redeemers Evangelical Power  Sanctuary International (REPSI)', '', '', '', '', ''),
('Benjamin', 'Ababio', 'Ghana', 'Cynthiawilliamroxy@gmail.com', '0576109191', 'Qedesh', '', '', '', '', ''),
('Douglas', 'Boampong', 'Ghana', 'Boampongdesire38@gmail.com', '0248748754', 'Qedesh', '', '', '', '', ''),
('Benjamin', 'Turkson', 'Ghana', 'turksonbenjamin7@gmail.com', '0551273462', 'Qedesh', '', '', '', '', ''),
('Richmond', 'Miezah', 'Ghana', 'wwwrichmondmiezah.com', '0246353919', 'Makaroius Assambles', '', '', '', '', ''),
('OSCAR', 'NSIAWU', 'Ghana', 'nsiawuoscar@gmail.com', '0547100051', 'EVANGELICAL LIGHTHOUSE CHAPEL INTERNATIONAL', '', '', '', '', ''),
('Stephen ', 'Bekoe ', 'Ghana', 'Bekoestephen0040@gmail.co ', '0270802726', 'Word of life', '', '', '', '', ''),
('Hannah', 'Sokpoli ', 'Ghana', 'Hannahskpoli@gmail.com', '0554691229/0203330954', 'Asiama Makarios Church', '', '', '', '', ''),
('Kwaku', 'Frimpong', 'Ghana', 'Frimpongkwaku1997@gmail.com', '0553443982', 'Makarios church Ashale Botwe', '', '', '', '', ''),
('Isaac', 'Ekpone', 'Ghana', 'Jesuseisaac.79', '0240678112', 'Lighthouse', '', '', '', '', ''),
('Samuel ', 'Azietaku', 'Ghana', 'Sammytettey@gmail.com', '0248513768', 'Makarios-Ashaleybotwe', '', '', '', '', ''),
('Oheneba', 'Wirekoh', 'Ghana', 'wirekoh20@gmail.com', '+233542592723', 'Makarious Church-Elubo LCI', '', '', '', '', ''),
('Richard', 'Obeng', 'Ghana', 'richardnanayawrichie93@gmail.com', '0543178273', 'The Makarios church (Qedesh)', '', '', '', '', ''),
('WILHEMINA ', 'ACQUAH ', 'Ghana', 'wilheminaacquah@gmail.com', '0249913464', 'TMC NEW ADENTA', '', '', '', '', ''),
('Felix ', 'Nartey ', 'Ghana', 'None', '0552237739', 'Qedesh ', '', '', '', '', ''),
('Witmond', 'de-Graft Hanson', 'Ghana', 'witmondhanson2004@gmail.com', '0544890678', 'Makarios Church', '', '', '', '', ''),
('Witmond', 'de-Graft Hanson', 'Ghana', 'witmondhanson2004@gmail.com', '0544890678', 'Makarios Church', '', '', '', '', ''),
('Witmond', 'de-Graft Hanson', 'Ghana', 'witmondhanson2004@gmail.com', '0544890678', 'Makarios Church', '', '', '', '', ''),
('Leonard ', 'Gamado', 'Ghana', 'leonardgamado4@gmail.com', '0547606953', 'Makarios church ', '', '', '', '', ''),
('Edwin ', 'Kwakye ', 'Ghana', 'edwinnick38@gmail.com ', '‭+233 20 285 0405‬', 'The Mega Church, Sokoban Branch, Atonsu Council', '', '', '', '', ''),
('Prince', 'Bempah', 'Ghana', 'princetbempah@gmail.com', '0553062861', 'Christian Foindatiin Ministries International ', '', '', '', '', ''),
('Anthony', 'Xorlali', 'Ghana', 'anthonyxorlali2@gmail.com', '0540274565', 'The Church of Pentecost', '', '', '', '', ''),
('Agbenya', 'Nyarko', 'Ghana', 'paul.agbenya.75@gmail.com', '0548452097', 'Covenant Temple Prayer International Ministry', '', '', '', '', ''),
('Amos ', 'Asum', 'Ghana', 'Www amosbarachel com', '0241043682', 'Impact family chapel ', '', '', '', '', ''),
('Samuel', 'Gyebi', 'Ghana', 'Samuelgyebi@gmail.com', '0541942092', 'Church of Hope', '', '', '', '', ''),
('Francis', 'Kipo', 'Ghana', 'fkkipo@gmail.com', '0200570473', 'Impact family chaple', '', '', '', '', ''),
('Kyere', 'Gyan', 'Ghana', 'Kj.antwi@gmail.com', '0554351322', 'Pentecost church', '', '', '', '', ''),
('Patrick', 'Takyi', 'Ghana', 'takyipatrick66@gmail.com', '0549884444', 'Thy word Chapel', '', '', '', '', ''),
('GOFRED', 'KYEREMEH', 'Ghana', 'Godfredambitious41.gmail', '0544024231', 'The Bethel Ambassadors ', '', '', '', '', ''),
('Oboady’s ', 'Solomon ', 'Ghana', 'Soboady@gmail.com', '0557076274', 'Grace community  church ', '', '', '', '', ''),
('Derrick', 'Gyau', 'Ghana', 'gyauderrick67@gmail.com', '0245348358', 'Thy word Chapel International', '', '', '', '', ''),
('Akua', 'Yeboaa', 'Ghana', 'yeboaakua@gmail.com', '0249090682', 'Temple of Praise', '', '', '', '', ''),
('Joseph', 'Dari', 'Ghana', 'Darijoseph4@gmail.com', '0240853053', 'Methodist church', '', '', '', '', ''),
('Kingsley', 'Adjei ', 'Ghana', 'nanakumiwise777@gmail.com', '0241907235', 'GOLGOTHA Prayer Ministries International', '', '', '', '', ''),
('Kingsley', 'Adjei ', 'Ghana', 'nanakumiwise777@gmail.com', '0241907235', 'GOLGOTHA Prayer Ministries International', '', '', '', '', ''),
('ADINKRA', 'PRINCE', 'Ghana', 'pastork024@gmail.com', '0545704401/0242364673', 'THE CHURCH OF HOPE', '', '', '', '', ''),
('Francis', 'Amponsah', 'Ghana', 'francisamponsah89@gmail.com', '0553726324', 'Christ Embassy', '', '', '', '', ''),
('Jacob', 'Boabeng', 'Ghana', 'jacobboabeng57@gmail.com', '0546575141', 'Temple of Praise', '', '', '', '', ''),
('Collins', 'Kwao', 'Ghana', 'kwaocollins99@gmail.com', '0549983650', 'Thyword Chapel International', '', '', '', '', ''),
('Mavis', 'Nyarko', 'Ghana', 'obrempongnyarko@gmail.com', '0544544705', 'Temple of Praise', '', '', '', '', ''),
('Raphael', 'Anterbie ', 'Ghana', 'anterbieraphael@gmail.com', '0201185289', 'Greater Love (Berekum)', '', '', '', '', ''),
('Samson', 'Asige', 'Ghana', 'asigesamson@ ymail.com', '0246703323', 'Police Church ', '', '', '', '', ''),
('Augustine', 'Yeboah', 'Ghana', 'yestyny2@gmail.com', '0544168000', 'Ghana Baptist Convention', '', '', '', '', ''),
('Ansu', 'Ansu Daniel', 'Ghana', 'ansud6715@gmail.com', '0551390804', 'Pentecost', '', '', '', '', ''),
('Evans', 'Assi', 'Ghana', 'assievans404@gmail.com', '0249645730', 'Presby', '', '', '', '', ''),
('Micheal', 'Amankwaa', 'Ghana', 'adinkraisaac5@gmail.com', '5,508,750,420,502,500,000', 'Ebenezer Baptist Church Japekrom', '', '', '', '', ''),
('Esther', 'Frimpomaa', 'Ghana', 'antwiwaaesther75@gmail.com', '0557161706', 'Christ Apostolic Church', '', '', '', '', ''),
('Dankwaa', 'Josephine', 'Ghana', 'adinkraisaac5@gmail.com', '0549961740', 'Church of Pentecost', '', '', '', '', ''),
('Christian', 'Gyan', 'Ghana', 'gyanchristian2000@gmail.com', 'O556993207', 'Grace Community Church', '', '', '', '', ''),
('Effah', 'Dartey', 'Ghana', 'effah1993', '0554305171', 'Resurrecrtion power new Generation church', '', '', '', '', ''),
('Prince', 'Kumi', 'Ghana', 'princekumi2019@gmail.com', '0247585197', 'Fountain Gate Chapel', '', '', '', '', ''),
('Ebenezer', 'Boamah ', 'Ghana', 'boamahe763@gmail.com', '0249324910', 'Miracle World Gospel Outreach Ministries', '', '', '', '', ''),
('ENOCK', 'NKETIA', 'Ghana', 'nketiakofienock234@gmail.com', '0558074370', 'ROMAN CATHOLIC', '', '', '', '', ''),
('Albert', 'Tweneboah', 'Ghana', 'tweneboahalbert7@gmail.com', '0245432280', 'Assemblies Of God', '', '', '', '', ''),
('Francis', 'Adum', 'Ghana', 'Adumfrancis534gmail.com ', '0553724625', 'Christ Embassy drobo ', '', '', '', '', ''),
('Raphael Ani', 'Johnson', 'Ghana', 'Dont have ', '0557433984', 'First love church', '', '', '', '', ''),
('Luke', 'Azure', 'Ghana', 'None', '0547957285', 'Assemblies of God', '', '', '', '', ''),
('Kusi', 'Hagan', 'Ghana', 'adinkraisaac5@gmail.com', '0241386918', 'House of Faith International Church', '', '', '', '', ''),
('Ansu', 'Amponsah', 'Ghana', 'ansufredrick23@gmail,com.', '0548173503', 'Pentecost', '', '', '', '', ''),
('Vincent', 'Awuah', 'Ghana', 'enochawuah79@gmail.com', '0555192022', 'Grounds of testimony', '', '', '', '', ''),
('ANKAMAH', 'MAHAMA', 'Ghana', 'Nyameba emmasco', '0552018436', 'THE PROMISE BIBLE MINISTRY', '', '', '', '', ''),
('JUSTICE', 'OPPONG', 'Ghana', 'nanajustice81@gmail.com', '0546984004', 'FAMILY LIFE CHURCH INTERNATIONAL- AHAFO KENYASI', '', '', '', '', ''),
('Emmanuel', 'Yeboah', 'Ghana', 'Yeboahemmanuel17@gmailcom', '0540417155', 'Bethel', '', '', '', '', ''),
('Kate', 'Tawiah', 'Ghana', 'maameesitawiah93@gmail.com', '0241576053', 'The Apostolic Church Ghana', '', '', '', '', ''),
('EMMANUEL ', 'TULLAH', 'Ghana', 'tullahemmanuel@gmail.com', '0546421324', 'PRESBYTERIAN CHURCH OF GHANA ', '', '', '', '', ''),
('Robert', 'Yiriwi', 'Ghana', 'Prophetyiriwo@gmail.com', '0240202942', 'Christ apostolic church', '', '', '', '', ''),
('DESMOND', 'MANTEY', 'Ghana', 'MANTEYDESMOND@GMAIL.COM', '0548171838', 'PRESBYTERIAN CHURCH OF GHANA - EBENERZER CONGREGATION TEPA', '', '', '', '', ''),
('Vincent', 'Agyeman', 'Ghana', 'godwingenya@gmail.com', '0542303440', 'New Life Generation ', '', '', '', '', ''),
('Belma', 'Darba ', 'Ghana', 'kwamedah816@gmail.com', '0545894545', 'Baptist Church', '', '', '', '', ''),
('Peter', 'Apraku', 'Ghana', 'aprakupeter15@yahoo.com', '0248374748', 'Church of Pentecost ', '', '', '', '', ''),
('Isaiah ', 'Apraku', 'Ghana', 'Issaiah4876@gmail.com', '0240894876', 'Assemblies Of God', '', '', '', '', ''),
('Stella', 'Mensah', 'Ghana', 'www.stella@yahoo.com', '0541095491', 'Assemblies of God', '', '', '', '', ''),
('Martha', 'Amanfo', 'Ghana', 'asantewaamartha462@gmail.com', '0544902900 / 0263041652', 'Bliss Kingdom', '', '', '', '', ''),
('Nana', 'Yeboah', 'Ghana', 'osein7578@gmail.com', '0551818562', 'Baptist Church', '', '', '', '', ''),
('STEPHEN', 'NAAH', 'Ghana', 'kungbewa@gmail.com', '0241081502', 'PIWC', '', '', '', '', ''),
('DOMINIC', 'ADJEI', 'Ghana', 'adjeipokudominic@yahoo.com', '0242046682', 'CATHOLIC', '', '', '', '', ''),
('Antoinette', 'Yankah', 'Ghana', 'Yankah A 17@ g mail. com', '0245418184', 'Methodist ', '', '', '', '', ''),
('Gladys', 'Antwi', 'Ghana', 'Dilysemm@g.mail.com', '0245179914', 'Pentecost', '', '', '', '', ''),
('Sampson ', 'Asante ', 'Ghana', 'Asantesampson16@gmail.com', '+233245412921', 'Church of Pentecost ', '', '', '', '', ''),
('Isaiah ', 'Apraku', 'Ghana', 'Issaiah4876@gmail.com', '0240894876', 'Assemblies Of God', '', '', '', '', ''),
('Alex', 'Asante', 'Ghana', 'Bshopkasantealex@gmail', '0541177851', 'Pentecost', '', '', '', '', ''),
('GYAN', 'OFORI', 'Ghana', 'oforigyangifty123@gmail.com', '0550647879 / 0245318508', 'CALVARY PRAYER CENTER', '', '', '', '', ''),
('Philomena ', 'Awine ', 'Ghana', 'awinephilomena1@gmail.com', '0542264460', 'Roman Catholic ', '', '', '', '', ''),
('Lisa', 'Opoku', 'Ghana', 'amoakohmichael@ymail.com', '027205565', 'Calvary Charismatic Church', '', '', '', '', ''),
('Reuben', 'Dwumfour', 'Ghana', 'dwumfourreuben13@gmil.com', '0241673654', 'Light house chapel inte', '', '', '', '', ''),
('Henrietta ', 'Kotey ', 'Ghana', 'I don\'t have one ', '0242916281', 'The church of Pentecost ', '', '', '', '', ''),
('Philomena ', 'Awine ', 'Ghana', 'awinephilomena1@gmail.com', '0542264460', 'Roman Catholic ', '', '', '', '', ''),
('SIMON', 'GYABENG', 'Ghana', 'Gyabengsimon4@gmail.com', '0558326637', 'Methodist church', '', '', '', '', ''),
('Christian ', 'Oppong', 'Ghana', 'ck_man12@yahoo.com ', '0248800352 / 0204907216 ', 'Presbyterian Church of Ghana. ', '', '', '', '', ''),
('STEPHEN', 'OPOKU', 'Ghana', 'sopoku124@gmail.com', '0554002113', 'CURRENTLY WITH LIGHTHOUSE CHAPEL TEPA', '', '', '', '', ''),
('Samuel', 'Asamoah ', 'Ghana', 'sasamoah250@gmail.com', '233548721166', 'Christ is Life Mission-Ghana', '', '', '', '', ''),
('THEOPHILUS JEFF', 'AMOAH', 'Ghana', 'MAIL4NYAMEBAKOJO@GMAIL.COM', '276917357', 'GLORIOUS LIBERTY IMPACT MINISTRIES', '', '', '', '', ''),
('DAVID', 'AGYEMANG', 'Ghana', 'DAVIDAGYEMANG161@GMAIL.COM', '0550524602', 'GLORIOUS LIBERTY IMPACT MINISTRIES', '', '', '', '', ''),
('EVANS', 'YEBOAH', 'Ghana', 'eyeboah664@e-mail', '0248306793', 'KING\'S ROYAL MISSION CHURCH', '', '', '', '', ''),
('Jonathan', 'Tetteh', 'Ghana', 'Tettehjonathan108@email.com', '0554974233', 'APOSTOLIC DIVIDE GHANAà', '', '', '', '', ''),
('Abraham', 'Ayisi', 'Ghana', 'ayisiabraham22@gmail.com', '0554811581', 'Victorious Child Ministry', '', '', '', '', ''),
('Theophilus ', 'Antwi', 'Ghana', 'Antwitheophilus73@gmail.com', '0279883908', 'Anagkazo Assembly santa-Maria', '', '', '', '', ''),
('Naomi', 'Amankwanor', 'Ghana', 'oteiba1993@gmail.com', '0249329765', 'Anakazo Assembly (The Life Cathedral)', '', '', '', '', ''),
('HENRIETTA', 'COLEMAN', 'Ghana', 'rietta.jones90@gmail.com', '05527319', 'ANAGKAZO ASSEMBLY (LIFE CATHEDRAL)', '', '', '', '', ''),
('Albert', 'Amoah', 'Ghana', 'kojoamoah99@gmail.com', '0265501006', 'The Makarios Church, Madina Estate', '', '', '', '', ''),
('ERIC', 'AIDOO', 'Ghana', 'eaidoo1920@gmail.com', '0245652448', 'QADESH', '', '', '', '', ''),
('Benjamin ', 'Ayitey ', 'Ghana', 'ayiteybenjamin66@gmil.com ', '0551385245', 'Qedesh family church Eastlegon Hill ', '', '', '', '', ''),
('Godwin', 'Altivor', 'Ghana', 'georgeannor89@yahoo.com', '+233249566899', 'Lighthouse Chapel International, Asamankese', '', '', '', '', ''),
('Gideon', 'Nutornutsi', 'Ghana', 'georgeannor89@yahoo.com', '+233555082677', 'Lighthouse Chapel International, Asamankese ', '', '', '', '', ''),
('Vanessa ', 'Dosseh', 'Ghana', 'Vanessadosseh123@gmail.com', '+233550511636', 'Makarios church at East lagon', '', '', '', '', ''),
('Emmanuel', 'Amedekanya', 'Ghana', '0557866296', '0557866296', 'Qadesh(Kasoa)', '', '', '', '', ''),
('Yvonne ', 'Danquah', 'Ghana', 'henkelyvonne8@gmail.com', '574442116', 'Emmanuel cathedral.. Abeka main', '', '', '', '', ''),
('Emmanuel', 'Armah', 'Ghana', 'emmanuelarmah081@gmail. com', '0540433159', 'Lighthouse chapel international Korle Gonno', '', '', '', '', ''),
('CEPHAS', 'FERGUSON', 'Ghana', 'Cephasf4@gmail.com', '0263558187/0544285312', 'MATAHEKO', '', '', '', '', ''),
('Enock', 'Anokye', 'Ghana', 'Enockanokye@77', '0556628183', 'Assemblies Of God', '', '', '', '', ''),
('Daniel', 'Attah', 'Ghana', 'DanielAttah@g.mail.com', '0540390983', 'Divine wisdom Chapel', '', '', '', '', ''),
('Emmanuel', 'Ahumatah', 'Ghana', 'kwesimawuli2019@gmail.com', '0553876148', 'True light Bible Church', '', '', '', '', ''),
('James', 'Dsane', 'Ghana', 'Chickyranking@gmail.com', '0500410158', ' Victory bible church international ', '', '', '', '', '');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
