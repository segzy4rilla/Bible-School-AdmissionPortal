-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jun 19, 2020 at 08:36 AM
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
-- Table structure for table `Excel_Table`
--

CREATE TABLE `Excel_Table` (
  `First Name` varchar(13) DEFAULT NULL,
  `Last Name` varchar(13) DEFAULT NULL,
  `Country` varchar(8) DEFAULT NULL,
  `Email_Address` varchar(44) DEFAULT NULL,
  `Phone_Number` varchar(30) DEFAULT NULL,
  `Church` varchar(53) DEFAULT NULL,
  `Denomination` varchar(10) DEFAULT NULL,
  `Created_an_ABMTC_Account` varchar(10) DEFAULT NULL,
  `Sent Email` varchar(10) DEFAULT NULL,
  `Sent Whatsapp Message` varchar(10) DEFAULT NULL,
  `Response` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Excel_Table`
--

INSERT INTO `Excel_Table` (`First Name`, `Last Name`, `Country`, `Email_Address`, `Phone_Number`, `Church`, `Denomination`, `Created_an_ABMTC_Account`, `Sent Email`, `Sent Whatsapp Message`, `Response`) VALUES
('Tshenolo', 'Othusitse', 'Botswana', 'othusitserichardtebogo@gmail.com', '77915747', 'Glory Miracle Tabernacle', '', '', '', '', ''),
('Kalantle', 'Nfana', 'Botswana', 'nanceemosmme@yahoo.com', '71622184', 'Liberty Church ', '', '', '', '', ''),
('LORAKO', 'Bampheletse', 'Botswana', 'lorakobampheletse@gmail.com', '76170518', 'Living Rock church', '', '', '', '', ''),
('Dipogiso', 'Kabelo', 'Botswana', 'dipogosik9@gmail.com', '76195793', 'Gospel Impact Church', '', '', '', '', ''),
('Goitsemodimo ', 'Keatshotse', 'Botswana', 'gkeatshotse@yahoo.com', '72831139', 'First Love Church', '', '', '', '', ''),
('Innocent ', 'Maphika', 'Botswana', 'imaphila39@gmail.com', '76766820', 'First Love  Church ', '', '', '', '', ''),
('Boitshwarelo', 'Jackson ', 'Botswana', 'none', '74576625', 'First Love Church ', '', '', '', '', ''),
('Goitsemodimo', 'Joshua', 'Botswana', 'joshuagoitsemodimo@gmail.com', '+26771627324', 'Apostolic Faith Mission church', '', '', '', '', ''),
('Gomolemo', 'Setlhare', 'Botswana', 'heavenextension@gmail.com', '71967529', 'Christ - Citadel International Church', '', '', '', '', ''),
('Agisanang', 'Ramashaba', 'Botswana', 'ramashabaagisanang@gmail.com', '77165213', 'Tarbanacle of His Glory', '', '', '', '', ''),
('Olebogeng', 'Tiro', 'Botswana', 'perncytiro@gmail.com', '76054462', 'First Love Church', '', '', '', '', ''),
('Clensinah', 'Sankoloba', 'Botswana', 'tracelclen@gmail.com', '+267 77900703', 'Apostolic Faith mission', '', '', '', '', ''),
('Tumisang', 'Senne', 'Botswana', 'tumiesenne4@gmail.com', '74278123 / 77934006', 'The Living Rock Church', '', '', '', '', ''),
('Tshepiso ', 'Maja', 'Botswana', 'tshepi97maja@gmail.com', '74549106', 'First Love Church ', '', '', '', '', ''),
('Moatlhodi', 'Kgwatalala', 'Botswana', 'moatlhodikgwatalala@gmail.com', '76939662', 'First love church', '', '', '', '', ''),
('Nijel', 'Bvuwayi', 'Botswana', 'nijelbvuwayi@gmail.com', '72669264', 'First Love Church', '', '', '', '', ''),
('Benedictor', 'Thanda', 'Botswana', '____', '74974764', 'Bread of life international church', '', '', '', '', ''),
('AMUCHILANI', 'JOSHUA', 'Botswana', 'mmakgetho@gmail.com', '26771357230', 'APOSTOLIC FAITH MISSION', '', '', '', '', ''),
('Karabo', 'Robert', 'Botswana', 'robertkarabo.j@gmail.com', '+267 76712992', 'House of Glory Ministries International', '', '', '', '', ''),
('Candice ', 'Fulele', 'Botswana', 'cfulele92@gmail.com', '71497101', 'Christ- Citadel Church Francistown', '', '', '', '', ''),
('Candice ', 'Fulele', 'Botswana', 'cfulele92@gmail.com', '71497101', 'Christ- Citadel Church Francistown', '', '', '', '', ''),
('Tarisayi', 'Matlapeng', 'Botswana', 'terry.matlapeng280994@gmail.com ', '+26774688133', 'Enlightened Christian Gathering Church', '', '', '', '', ''),
('Tarisayi', 'Matlapeng', 'Botswana', 'terry.matlapeng280994@gmail.com ', '+26774688133', 'Enlightened Christian Gathering Church', '', '', '', '', ''),
('Anna', 'Ncube', 'Botswana', 'angel thato01@gmail.com', '74749538', 'Glory miracle tabernacle', '', '', '', '', ''),
('Felly', 'Bakani', 'Botswana', 'bakanif@yahoo.com', '74746909', 'Bible Life Ministry', '', '', '', '', ''),
('Tsholofelo', 'Moshodi', 'Botswana', 'tsholomoshodi@gmail.com ', '+267 74797000 ', 'Apostolic Faith Mission', '', '', '', '', ''),
('Bernard', 'Mpolokang', 'Botswana', 'BLACCTROY @GMAIL.COM', '75514800', 'Faith is now international church', '', '', '', '', ''),
('Thatayaone', 'Mmopelwa', 'Botswana', 'thatayaone.mmopelwa@gmail.com', '74752961', 'Family Covenant Church', '', '', '', '', ''),
('Tumelo', 'Awee', 'Botswana', 'aweetumelo@outlook.com', '74206984', 'Bible life', '', '', '', '', ''),
('Mavis', 'Sigweni', 'Botswana', 'sigwenimavis@yahoo.com', '76585288', 'Pentecostal Holiness Church', '', '', '', '', ''),
('OBAKENG', 'NGEBANI', 'Botswana', 'obakengngebani@gmail.com', '76136860/72781734', 'CHARISMATIC WORD CHURCH', '', '', '', '', ''),
('Alakanani ', 'Nkhoma', 'Botswana', 'deanmodise2007@yahoo.com ', '+267 71363478', 'Bible Life Ministries ', '', '', '', '', ''),
('Mothusi', 'Dikgang', 'Botswana', 'Prestigefitnesspfc@gmail.com', '+ 267 77131366', 'Fire aglow prayer ministries international', '', '', '', '', ''),
('Goitseone', 'Oaitse', 'Botswana', 'goitseonetinymichael@gmail.com', '+267 74210944', 'Kingdom Embassy International', '', '', '', '', ''),
('Princess', 'Ketlhalefile', 'Botswana', 'Noemail@gmail.com', '76147435', 'The latter glory', '', '', '', '', ''),
('Masego', 'Shime', 'Botswana', 'masegoshime@gmail.com', '74172692', 'Church of the Nazarene ', '', '', '', '', ''),
('Tshepo', 'Mokgalagadi', 'Botswana', 'Mokgalagaditshepo@yahoo.com', '77156137', 'WORD OF FAITH DYNAMIC MINISTRIES INTERNATIONAL', '', '', '', '', ''),
('Naledi', 'Sesuku', 'Botswana', 'nketlogetswe@gmail.com', '77181247', 'Everlasting Faith Foundation Ministries', '', '', '', '', ''),
('Lemogang', 'Mokuelele', 'Botswana', 'Kuasmasei86@gmail.com ', '+267 71890864', 'Bread of life Christian church international', '', '', '', '', ''),
('Kabelo', 'Gaborone', 'Botswana', 'Prestigefitnesspfc@gmail.com', '77010208', 'Fire Aglow Prayer Ministries International', '', '', '', '', ''),
('Kgosi', 'Oraletse', 'Botswana', 'oraletsek@gmail.com', '+26772734745', 'Word of Faith Dynamic Ministries international', '', '', '', '', ''),
('BOTHO', 'MAZEBEDI ', 'Botswana', 'bothom50@gmail.com', '+267 71527448', 'CHRIST CITADEL INTERNATIONAL CHURCH OF BOTSWANA ', '', '', '', '', ''),
('Letticia', 'Makuku', 'Botswana', 'letticiamakuku89@gmail.com ', '72757526', 'Redemptive Covenant Ministries', '', '', '', '', ''),
('Gaolatheope', 'Ngisi ', 'Botswana', 'Sadiengisi@gmail.com', '+26772477801', 'Bread of life Christian church ', '', '', '', '', ''),
('Kelebogile ', 'Kekgathegile ', 'Botswana', 'keddiokm@gmail.com', '74777477', 'Tehillah Worship Centre ', '', '', '', '', ''),
('Tracy', 'Phirinyane', 'Botswana', 'tracyp@gmail.com ', '76289233', 'Assemblies of God', '', '', '', '', ''),
('Tshegofatso ', 'Kootserekae', 'Botswana', 'Tshegofatsofreddykootserekae.gmail.com', '71607123', 'Signs of heaven minitries international', '', '', '', '', ''),
('Phemelo', 'Ntima', 'Botswana', 'phemelomoagintima@gmail.com', '74004608', 'Signs of heaven ministries ', '', '', '', '', ''),
('Tlhompho', 'Ketlhalefile', 'Botswana', 'N/A', '+26772491790', 'Signs of heaven', '', '', '', '', ''),
('Matilda', 'Mmuru ', 'Botswana', 'matmmuru@gmail.com', '+267 74229517', 'Flaming sword international ministry ', '', '', '', '', ''),
('Akanyang', 'Mothubakgang', 'Botswana', 'mothubakganga86@gmail.com', '76188298', 'Faith Tabernacle Centre  ', '', '', '', '', ''),
('Setso', 'Didimalang', 'Botswana', 'Hoddalesto@gmail.com', '+26774109276', 'Christ Citadel international church', '', '', '', '', ''),
('Lemogang', 'Kebafetotse', 'Botswana', 'lordagab396@gmail.com', '+26774540277', 'Signs Of Heaven Ministries International ', '', '', '', '', ''),
('Kealeboga', 'Ofithile', 'Botswana', 'stephinahofithile@yahoo.com', '74733033', 'The gathering church international ', '', '', '', '', ''),
('Olorato', 'Rakgola', 'Botswana', 'orakgola@gmail.com ', '76767648', 'First Love Church ', '', '', '', '', ''),
('JAVET', 'GOEMEMANG', 'Botswana', 'Javetgoeme@gmail.com', '+26774252351', 'Winners Chapel International', '', '', '', '', ''),
('Zane', 'Macheng', 'Botswana', 'machengzane9@gmail.com', '+26774232969', 'Christ Citadel International Church Botswana', '', '', '', '', ''),
('Floyd', 'Dibapile', 'Botswana', 'flodibapile@gmail.com', '+26771874374', 'Assemblies of God church', '', '', '', '', ''),
('Dennis', 'Nthata', 'Botswana', 'dnthata7@gmail.com ', '+267 75499534', 'Christ International Church ', '', '', '', '', ''),
('Basadibotlhe ', 'Mosweu', 'Botswana', 'lilymosweu@gmail.com', '+267 72191557', 'The Shadow of God International Ministries', '', '', '', '', ''),
('Gobe', 'Batshani', 'Botswana', 'gbbmc@mst.edu', '+267 71994227', 'Assemblies of God (Francistown, Gerald)', '', '', '', '', ''),
('Dithapelo', 'Tiro', 'Botswana', 'jnrwarren26@gmail.com', '75677634', 'Restoration and Healing words ministers international', '', '', '', '', ''),
('Uyapo', 'Gulubane', 'Botswana', 'uyapogulubane@gmail.com', '77732213', 'Light of God ministry', '', '', '', '', ''),
('Kesegofetse ', 'Monnana', 'Botswana', 'sebirik@gmail.com', '+267 71995375', 'The Gathering Church International ', '', '', '', '', ''),
('Wazha', 'Lebang', 'Botswana', 'batisanileb45@gmail.com', '26777010955', 'Biblelife', '', '', '', '', ''),
('Mamello', 'Sago', 'Botswana', 'mamkeke@gmail.com', '73233415', 'The Worship Center', '', '', '', '', ''),
('Lindiwe', 'Giddie', 'Botswana', 'giddielindiwe@gmail.com', '+267 75976258', 'Harvest House International', '', '', '', '', ''),
('Thato', 'Ramosweu', 'Botswana', 'thatorams1996@gmail.com', '75974671', 'WINNERS CHAPEL INTERNATIONAL CHURCH', '', '', '', '', ''),
('Geoffrey', 'Jikijela', 'Botswana', 'seerider.g@gmail.com', '+27 63 129 3837', 'The Testimony Of Jesus Fellowship ', '', '', '', '', ''),
('ONALETHATA', 'Shimane', 'Botswana', 'onalethatashimane@gmail.com', '+26776305024', 'The Gathering church Intetnational', '', '', '', '', ''),
('Boemo ', 'Lathang ', 'Botswana', 'sirboemo@gmail.com ', '73194178', 'Word of Christ Ministries ', '', '', '', '', ''),
('Samson', 'Tlhobosi', 'Botswana', 'thobosisam@gmail.com', '71731865', 'Full Grace Ministries', '', '', '', '', ''),
('Clement', 'Phinda', 'Botswana', 'clementphinda@gmail.com', '±26776671417', 'Apostolic Faith Mission Botswana', '', '', '', '', ''),
('Modisaotsile ', 'Lekuku', 'Botswana', 'braunlekuku0@gmail.com', '(267) 74385077', 'Full Grace Ministries ', '', '', '', '', ''),
('NEO', 'BAIKEPI', 'Botswana', 'baikepineo@gmail.com', '+26772276236', 'DIVINE WORD MINISTRIES INTERNATIONAL', '', '', '', '', ''),
('BANGWE', 'BAEMISI', 'Botswana', 'apostleedward90@gmail.com', '+26777498072', 'Heaven Harvest Ministries', '', '', '', '', ''),
('Monthusi ', 'Jeremiah', 'Botswana', 'monthusijeremiah@gmail.com', '+26772623428', 'ALLELUIA MINISTRIES INTERNATIONAL ', '', '', '', '', ''),
('Christopher', 'Khanye', 'Botswana', 'criskhanye@gmail.com', '+26771540257', 'Apostolic Faith Mission ', '', '', '', '', ''),
('Oitsile', 'Setoroise', 'Botswana', 'Oitsilesetoroise@gmail.com', '+26776085653', 'Pentecostal Protestant Church', '', '', '', '', ''),
('Oaitse', 'Molatlhegi', 'Botswana', 'dolphymolatlhegi@gmail.com', '+267 71664646', 'Bethel Transfiguration Church', '', '', '', '', ''),
('Ronnie', 'Tladi', 'Botswana', 'Ronboanerges@gmail.com', '73445448', 'Mighty Breakthrough House Of Prayer', '', '', '', '', ''),
('Morekolodi', 'Mathule', 'Botswana', 'morekolodimathule@yahoo.com', '+26775199942', 'Bible Life Ministries', '', '', '', '', ''),
('Wame', 'Ramontsho', 'Botswana', ' Wameruth@gmail.com', '75663348', 'Royal Assembly Ministries International ', '', '', '', '', ''),
('MODISAOTSILE', 'Lekuku', 'Botswana', 'braunlekuku0@gmail.com', '+26774385077', 'Full Grace ministries', '', '', '', '', ''),
('Baalosi', 'Ranko', 'Botswana', 'kingbfavor403@gmail.com', '72298890', 'Eagle Grace Worship Centre', '', '', '', '', ''),
('Samuel', 'Matshaba', 'Botswana', 'smlcrist@gmail.com', '+267 74777171', 'Reconciliation Ministry International', '', '', '', '', ''),
('Bosaitseweng', 'Mbaiwa', 'Botswana', 'tebbymb@yahoo.com', ' 0026771500123/00267 76547980 ', 'Breakthrough ministry international ', '', '', '', '', ''),
('Lentswe', 'Otloleng', 'Botswana', 'N/A', '71738131', 'Taberah International ', '', '', '', '', ''),
('CHIPO', 'MAJINDA', 'Botswana', 'majindac@gmail.com', '+26775631796', 'Apostolic Faith Mission', '', '', '', '', ''),
('OBAKENG', 'SHAMUKUNI', 'Botswana', 'shamukuniruth@gmail.com', '74079871', 'CHRISTIAN ASSEMBLIES CHURCH IN BOTSWANA ', '', '', '', '', ''),
('ONE', 'MOSIMANEMOTHO', 'Botswana', 'oneazmos@gmail.com', '+267 76403488', 'THE LIVING FOUNTAIN CHRISTIAN MINISTRIESIST', '', '', '', '', ''),
('NDIYE', 'BATENDI', 'Botswana', 'batendi.ndiye@gmail.com ', '76032429', 'HEALING FAITH INTERNATIONAL CHURCH', '', '', '', '', ''),
('Lentlafetse ', 'Kediretswe', 'Botswana', 'rosekediretswe@gmail.com', '74547625', 'Bible Life Ministries ', '', '', '', '', ''),
('Tshepo', 'Mokgalagadi', 'Botswana', 'tshepodaddyt@gmail.com', '77156137', 'Word of faith Dynamic Ministries', '', '', '', '', ''),
('Tebogo', 'Seoseng', 'Botswana', 'teefreeseoseng@gmail.com', '74321618', 'Worship House Miracle Centre', '', '', '', '', ''),
('Ntumisang', 'Segola', 'Botswana', 'mntumisangrorisang@yahoo.com', '+267 71 484 300', 'Christ Citadel International Botswana', '', '', '', '', ''),
('Bame', 'Kesetse', 'Botswana', 'bamekesetse@gmail.com', '74464623', 'Worship House Miracle Centre', '', '', '', '', ''),
('Kesaobaka ', 'Maifale', 'Botswana', 'Aviankesamaifale@gmail.com ', '72589577', 'VICTORS CROWN INTERNATIONAL CHURCH ', '', '', '', '', ''),
('Geoffrey', 'Jikijela', 'Botswana', 'seerider.g@gmail.com', '+27 63 129 3837', 'The Testimony Of Jesus Fellowship ', '', '', '', '', ''),
('Tumelo', 'Mosime', 'Botswana', 'Tumie411@gmail.com', '+26777474844', 'Divine Word Ministries', '', '', '', '', ''),
('Pelonomi ', 'Gabosekwe', 'Botswana', 'Pelonomigabosekwe@gmail.com ', '+267 76224587', 'Christian assemblies Botswana ', '', '', '', '', ''),
('Mighty', 'Katshipi', 'Botswana', 'komanemighty@gmail.com', '+267 72348973', 'Church Of God Of Propecy', '', '', '', '', ''),
('Thatayaone ', 'Mbegwa ', 'Botswana', 'ThatayaoneBotsheloMbengwa@gmail.com', '+26775120125', 'Joyous Christian Centre ', '', '', '', '', ''),
('Aobakwe', 'Dinao', 'Botswana', 'aobadinao@gmail.com', '+26772932306', 'Holiness Union Church', '', '', '', '', ''),
('Tumelo', 'Gabositwe', 'Botswana', 'castodiancreations@gmail.com', '+267 71880425', 'The Divine Word Ministries', '', '', '', '', ''),
('GRACIOUS', 'MWEWA', 'Botswana', 'graciousmwewa@gmail.com', '+26775273294', 'LIVINGSPRING CHRISTIAN CENTRE', '', '', '', '', ''),
('Aobakwe ', 'Nkoni', 'Botswana', 'otengnkoni@gmail.com', '+26774568084', 'Victory Fellowship World Outreach Centre', '', '', '', '', ''),
('Tsaone', 'Makula', 'Botswana', 'tsaone.clix@gmail.com', '+267 75125350', 'Gaborone Assembly of God', '', '', '', '', ''),
('BRENDA', 'GOFETOLWANG', 'Botswana', 'gofetwangb@gmail.com', '+26772770448', 'APOSTOLIC FAITH MISSION CHURCH', '', '', '', '', ''),
('Lorato', 'Sebego', 'Botswana', 'ltselaesele@yahoo.com', '+267 77900044', 'Kingdom Builders', '', '', '', '', ''),
('Nonofo ', 'Mogome ', 'Botswana', 'Solomonmogome@gmail.com', '+26776049219 / +26771711866', 'Spirit Embassy ‘The GoodNews Church‘', '', '', '', '', ''),
('Thabang', 'Dzwikiti', 'Botswana', 'fdzwikiti@gmail.com', '76137284', 'Apdc ', '', '', '', '', ''),
('Keotshephile ', 'Ditau', 'Botswana', 'Chrisboyditau@gmail.com', '75409976', 'Worship House Miracle Center', '', '', '', '', ''),
('Thabiso', 'Bafitlhile', 'Botswana', 'Thabisobaf@gmail.com', '77836034', 'Worship house miracle centrr', '', '', '', '', ''),
('Onneile', 'Selebogo', 'Botswana', 'Ojmolf@gmail.com', '+26773140211', 'Assemblies of God', '', '', '', '', ''),
('Tshepiso', 'Setlabane', 'Botswana', 'tshepiso.setlabane@botho.ac.bw', '74259096 / 76535102', 'Gospel Rama Church', '', '', '', '', ''),
('Teng', 'Mokabiri', 'Botswana', 'tdmmokabiri@gmail.com', '0026772558800', 'The Livingstone Church', '', '', '', '', ''),
('VIOLET', 'JANI', 'Botswana', 'Violetjani@gmail.com', '74667829', 'PROPHETIC HEALING AND DELIVERANCE CHURCH', '', '', '', '', ''),
('Mooketsi', 'Oteng', 'Botswana', 'hopeotengm@gmail.com', '+267 75633098', 'Flaming Sword Ministries International', '', '', '', '', ''),
('NAIYE', 'KGANG', 'Botswana', 'naiyekgang@gmail.com', '+267 71767841', 'WORSHIP HOUSE MIRACLE CENTRE', '', '', '', '', ''),
('MAANO', 'BANTSI', 'Botswana', 'maanobantsi@gmail.com', '74059424', 'UCCSA', '', '', '', '', ''),
('NAIYE', 'KGANG', 'Botswana', 'naiyekgang@gmail.com', '+267 71767841', 'WORSHIP HOUSE MIRACLE CENTRE', '', '', '', '', ''),
('Sapelo', 'Ramarumo', 'Botswana', 'sapeloaliceramarumo@yahoo.com', '+267 75617170', 'Assemblies of God_Minestone Francistown', '', '', '', '', ''),
('DIBOY', 'LETSATSI', 'Botswana', 'letsatsidiboymompati@gmail.com', '+26776753732', 'NEW WAY CHURCH', '', '', '', '', ''),
('Holy', 'Kootsene', 'Botswana', 'Holykootsene@gmail.com', '+26775326658', 'Holy one of israel', '', '', '', '', ''),
('Philimon', 'Pilato', 'Botswana', 'holy kootsene @gmail.com', '+26775205902', 'The Holy ones of Israel', '', '', '', '', ''),
('Olerato', 'Leburu', 'Botswana', 'leburufabian3@gmail.com', '+267 75440915', 'The Holy One of Israel', '', '', '', '', ''),
('Bala', 'Ntsima', 'Botswana', 'balantsima@gmail.com', '267 71830190', 'Chosen Generation', '', '', '', '', ''),
('BOKANG', 'PHIRI', 'Botswana', 'Ecclesiastebokang@gmail.com ', '+26771408898', 'BLAZING FIRE INTERNATIONAL CHURCH ', '', '', '', '', ''),
('Bala', 'Ntsima', 'Botswana', 'balantsima@gmail.com', '267 71830190', 'Chosen Generation', '', '', '', '', ''),
('BOKANG ', 'PHIRI ', 'Botswana', 'Ecclesiastebokang@gmail.com ', '+26771408898', 'BLAZING FIRE INTERNATIONAL CHURCH ', '', '', '', '', ''),
('Zwabo', 'Mafa', 'Botswana', 'ponomafa@yahoo.com', '77040417', 'Kingdom Embassy International ', '', '', '', '', ''),
('MAANO', 'BANTSI', 'Botswana', 'maanobantsi@gmail.com', '+26774059424', 'UNITED CONGREGATION CHURCH SOUTHERN AFRICA', '', '', '', '', ''),
('GOMOLEMO ', 'GAOLEFUFA ', 'Botswana', 'ggaolefufa@idmbls.ac.bw', '+26776241897', 'BIBLE LIFE MINISTRIES', '', '', '', '', ''),
('Abi', 'Makwape', 'Botswana', 'abbyonemakwape@gmail.com', '74539296', 'Divine word ministry', '', '', '', '', ''),
('Kesegofetse', 'July', 'Botswana', 'Kessyjuly1@gmail.com', '+267 71808982', 'Shofar Prophetic Voice Ministries', '', '', '', '', ''),
('Thatayaone', 'Mmopelwa', 'Botswana', 'thatayaone.mmopelwa@gmail.com', '+267 74752961', 'Family Covenant Church', '', '', '', '', ''),
('Jerry', 'Pearce', 'Botswana', 'jerrypearce28@gmailcom', '(+267) 71916562', 'Royal Assembly Ministries International', '', '', '', '', ''),
('Martin', 'Mosupi', 'Botswana', 'Martinmosupi@yahoo.com', '0026772382770', 'El Unati Apostolic church ', '', '', '', '', ''),
('Onkabetse ', 'Galekhutle', 'Botswana', 'galekhutleog@gmail.com ', '71991445', 'Tower of Peace international church of Christ', '', '', '', '', ''),
('OLORATO', 'MOLAKO', 'Botswana', 'molakololo@gmail.com', '+26775608821', 'AFRICA EVANGELICAL CHURCH INTERNATIONAL', '', '', '', '', ''),
('Phillip', 'Sesoma', 'Botswana', 'PhillipSesoma', '26771697210', ' Bethel Church forallnation,Gaborone', '', '', '', '', ''),
('Tshwanelo', 'Tsheko', 'Botswana', 'tshekoclark01@gmail.com', '+26774060537', 'Mount Olives international Church', '', '', '', '', ''),
('Segolame', 'Modongo', 'Botswana', 'segomodongo@gmail.com', '76784286', 'The Tower of Peace International church of Christ ', '', '', '', '', ''),
('Kitso', 'Kusane', 'Botswana', 'kitsokusane@gmail.com', '26774875226', 'Light to the world church', '', '', '', '', ''),
('Onalethata', 'Elias', 'Botswana', 'Lykaelias@gmail.com', '76696026', 'Shofar Prophetic ministries', '', '', '', '', ''),
('Botlhe', 'Lesiela', 'Botswana', 'Basimanebotlhebofelokiddoh@gmail.com ', '+26776646654/+26775181498', 'Winners Chapel International Botswana ', '', '', '', '', ''),
('MERAPELO', 'KENATSHELE', 'Botswana', 'mkenatshele@gmail.com/ mkenatshele@yahoo.com', '75643100/ 72592853', 'GOODNEWS MINISTRIES', '', '', '', '', ''),
('GLADYS', 'MASOCHA', 'Botswana', 'neogmasocha@gmail.com', '77784249/ 76922824', 'SHOFAR PROPHETIC VOICE MINISTRIES', '', '', '', '', ''),
('GOITSEONE', 'KEBONEILWE', 'Botswana', 'gnametso88@gmail.com', '74092860', 'WINNERS CHAPEL FRANCISTOWN', '', '', '', '', ''),
('Sesupo', 'Lebang', 'Botswana', 'sesupoleb@gmail.com / manslou@yahoo.com', '(+267) 71516996 / 72928779', 'Apostolic Faith Mission, Gaborone branch', '', '', '', '', ''),
('Botsile', 'Gulubane', 'Botswana', 'botsilegulu9@gmail.com', '+26776567471', 'Shofar Prophetic Voice Ministries', '', '', '', '', ''),
('Botsile', 'Gulubane', 'Botswana', 'botsilegulu9@gmail.com', '+26776567471', 'Shofar Prophetic Voice Ministries', '', '', '', '', ''),
('GOMOLEMO ', 'GAOLEFUFA ', 'Botswana', 'gkgaolefufa@gmail.com ', '+26774643705', 'Bible Life Ministries ', '', '', '', '', ''),
('Kesaobaka ', 'Kelebeng', 'Botswana', 'kesakelebeng@gmail.com', '74064952', 'Assemblies of God ', '', '', '', '', ''),
('Keiteretse', 'Tahla', 'Botswana', 'tahlaalicia@gmail.com', '77139570', 'Forward in Faith', '', '', '', '', ''),
('Atone', 'Zwinani ', 'Botswana', 'atone.zwinani@gmail.com', '+267 72717370', 'Apostolic Faith Mission Sebina', '', '', '', '', ''),
('Noah', 'Chithu', 'Botswana', 'kgosimuchenje@gmail.com', '+2675511672', 'Reing Of God Ministry', '', '', '', '', ''),
('Gorata', 'Keakantse ', 'Botswana', 'gkeakantse@gmail.com', '+26771126000', 'Christ in Citadel Church of Botswana', '', '', '', '', ''),
('Gorata', 'Keakantse ', 'Botswana', 'keakantae27@gmail.com', '+267 71126000', 'Christ in Citadel Church of Botswana ', '', '', '', '', ''),
('ATANG', 'KGOSIMOLAO', 'Botswana', 'iakgosimolao@gmail.com', '+26777732740', 'BREAD OF LIFE CHRISTIAN CHURCH INTERNATIONAL', '', '', '', '', ''),
('Obonetse', 'Goromente', 'Botswana', 'Obonetsegoromente57@gmail.com', '+267 76151459', 'Joyous Christian Center ', '', '', '', '', ''),
('Cyvous', 'Mabulana', 'Botswana', 'Cyvousmabulana@gmail.com', '74305882', 'New way church', '', '', '', '', ''),
('Kabelo', 'Jackson', 'Botswana', 'kabelozibani.jackson@gmail.com', '+26774438492', 'None', '', '', '', '', ''),
('Regomoditswe', 'Maja', 'Botswana', 'regomoditswemaja@gmail.com', '+267 76315486', 'Glory Land Bible Church ', '', '', '', '', ''),
('Pako', 'Phillimon', 'Botswana', 'pako.phillimon@gmail.com', '+26771739546', 'Africa Evangelical Church Botswana (AEC)', '', '', '', '', ''),
('Lancelot', 'Morupisi', 'Botswana', 'Lancelotmorupisi@gmail.com', '+267 74952311/72927896', 'Christian Assemblies Church in Botswana', '', '', '', '', ''),
('Dikatso', 'Monene', 'Botswana', 'dvdmonex@mail.com', '+267 72782855', 'Open Baptist Church Botswana', '', '', '', '', '');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
