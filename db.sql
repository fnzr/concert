-- MariaDB dump 10.19-11.0.2-MariaDB, for Linux (x86_64)
--
-- Host: 127.0.0.1    Database: concert
-- ------------------------------------------------------
-- Server version	10.7.8-MariaDB-1:10.7.8+maria~ubu2004

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `album`
--

DROP TABLE IF EXISTS `album`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `album` (
  `id_album` int(11) NOT NULL AUTO_INCREMENT,
  `name` text NOT NULL,
  `release_date` bigint(20) NOT NULL,
  `id_artist` int(11) NOT NULL,
  PRIMARY KEY (`id_album`),
  KEY `id_artist` (`id_artist`),
  CONSTRAINT `album_ibfk_1` FOREIGN KEY (`id_artist`) REFERENCES `artist` (`id_artist`)
) ENGINE=InnoDB AUTO_INCREMENT=518 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `album`
--

LOCK TABLES `album` WRITE;
/*!40000 ALTER TABLE `album` DISABLE KEYS */;
INSERT INTO `album` VALUES
(1,'Mag Mell',1411516800000,2),
(2,'Miracle Milk',1476230400000,2),
(3,'Millenium Mother',1524614400000,2),
(4,'Meu mundo gira em torno de você',820454400000,1),
(5,'Meio desligado',784166400000,1),
(6,'Goodbye Yellow Brick Road',624078000,3),
(7,'Blue Moves',189313200,3),
(8,'Michizure',1,2);
/*!40000 ALTER TABLE `album` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `artist`
--

DROP TABLE IF EXISTS `artist`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `artist` (
  `id_artist` int(11) NOT NULL AUTO_INCREMENT,
  `name` text NOT NULL,
  PRIMARY KEY (`id_artist`)
) ENGINE=InnoDB AUTO_INCREMENT=126 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `artist`
--

LOCK TABLES `artist` WRITE;
/*!40000 ALTER TABLE `artist` DISABLE KEYS */;
INSERT INTO `artist` VALUES
(1,'Kid Abelha'),
(2,'Mili'),
(3,'Elton John'),
(4,'Michael Jackson');
/*!40000 ALTER TABLE `artist` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `group`
--

DROP TABLE IF EXISTS `group`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `group` (
  `id_group` int(11) NOT NULL AUTO_INCREMENT,
  `name` text NOT NULL,
  PRIMARY KEY (`id_group`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `group`
--

LOCK TABLES `group` WRITE;
/*!40000 ALTER TABLE `group` DISABLE KEYS */;
INSERT INTO `group` VALUES
(1,'admin'),
(2,'editor'),
(3,'viewer');
/*!40000 ALTER TABLE `group` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `phinxlog`
--

DROP TABLE IF EXISTS `phinxlog`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `phinxlog` (
  `version` bigint(20) NOT NULL,
  `migration_name` varchar(100) DEFAULT NULL,
  `start_time` timestamp NULL DEFAULT NULL,
  `end_time` timestamp NULL DEFAULT NULL,
  `breakpoint` tinyint(1) NOT NULL DEFAULT 0,
  PRIMARY KEY (`version`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `phinxlog`
--

LOCK TABLES `phinxlog` WRITE;
/*!40000 ALTER TABLE `phinxlog` DISABLE KEYS */;
INSERT INTO `phinxlog` VALUES
(20230531133715,'Init','2023-06-23 12:52:00','2023-06-23 12:52:00',0);
/*!40000 ALTER TABLE `phinxlog` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `recording`
--

DROP TABLE IF EXISTS `recording`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `recording` (
  `id_recording` int(11) NOT NULL AUTO_INCREMENT,
  `name` text NOT NULL,
  `id_album` int(11) NOT NULL,
  PRIMARY KEY (`id_recording`),
  KEY `id_album` (`id_album`),
  CONSTRAINT `recording_ibfk_1` FOREIGN KEY (`id_album`) REFERENCES `album` (`id_album`)
) ENGINE=InnoDB AUTO_INCREMENT=106 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `recording`
--

LOCK TABLES `recording` WRITE;
/*!40000 ALTER TABLE `recording` DISABLE KEYS */;
INSERT INTO `recording` VALUES
(1,'A Turtle\'s Heart',1),
(2,'Nine Point Eight',1),
(3,'Utiosphere',1),
(4,'Friction',1),
(5,'Chocological',1),
(6,'YUBIKIRI-GENMAN',1),
(7,'Sacramentum: Unaccompanied Hymm for Torino',1),
(8,'Epheremeral',1),
(9,'Imagined Flight',1),
(10,'Fable',1),
(11,'Rosetta',1),
(12,'Maroma Samsa',1),
(13,'Witch\'s Invitation',1),
(14,'Boys in Kaleidosphere',3),
(15,'Camelia',3),
(16,'Summoning 101',3),
(17,'Vitamins',3),
(18,'Lemonade',3),
(19,'奶水',3),
(20,'world.search(you);',3),
(21,'Mushrooms',3),
(22,'Gertrauda',3),
(23,'TOKYO NEON',3),
(24,'Extension of You',3),
(25,'Mirror Mirror',3),
(26,'With a Billion Worldful of Love',3),
(27,'Every Other Ghost',3),
(28,'Fossil',3),
(29,'Excαlibur',3),
(30,'Let the Maggots SIng',3),
(31,'Nine Point Eight -special edit-',3),
(32,'Red Dahlia',2),
(33,'Ga1ahad and Scientific Witchery',2),
(34,'RTRT',2),
(35,'Unidentified Flavourful Object',2),
(36,'Meatball Submarine',2),
(37,'NENTEN',2),
(38,'Bathtub Mermaid',2),
(39,'Cerebrite',2),
(40,'Space Colony',2),
(41,'world.execute(me);',2),
(42,'Utipiosphere -Platonism-',2),
(43,'Painful Death for the Lactose Intolerant',2),
(44,'YUBIKIRI‐GENMAN (special edit)',2),
(45,'Sl0t',2),
(46,'Past the Stargazing Season',2),
(47,'Colorful',2),
(48,'Como é que eu vou embora',4),
(49,'Te amo pra sempre',4),
(50,'Meu mundo gira em torno de você',4),
(51,'Combinação',4),
(52,'Na rua, na chuva, na fazenda (Casinha de sapê)',4),
(53,'Apenas timidez',4),
(54,'La nouveauté',4),
(55,'Quero me deitar',4),
(56,'Baixa pressão',4),
(57,'Vou mergulhar',4),
(58,'A moto',4),
(59,'O animal',4),
(60,'Deus (Apareça na televisão)',5),
(61,'Alice (Não me escreva aquela carta de amor)',5),
(62,'Gosto de ser cruel',5),
(63,'Como eu quero',5),
(64,'Por que não eu',5),
(65,'Seu espião',5),
(66,'Eu tive um sonho',5),
(67,'O beijo',5),
(68,'Cristina',5),
(69,'No meio da rua',5),
(70,'Nada por mim',5),
(71,'Grand\' Hotel (intro)',5),
(72,'Grand\' Hotel',5),
(73,'Solidão que nada',5),
(74,'Canário do reino',5),
(75,'Funeral for a Friend / Love Lies Bleeding',6),
(76,'Candle in the Wind',6),
(77,'Bennie and the Jets',6),
(78,'Goodbye Yellow Brick Road',6),
(79,'This Song Has No Title',6),
(80,'Grey Seal',6),
(81,'Jamaica Jerk‐Off',6),
(82,'I’ve Seen That Movie Too',6),
(83,'Sweet Painted Lady',6),
(84,'The Ballad of Danny Bailey (1909–34)',6),
(85,'Dirty Little Girl',6),
(86,'All the Girls Love Alice',6),
(87,'Your Sister Can’t Twist (but She Can Rock ’n Roll)',6),
(88,'Saturday Night’s Alright for Fighting',6),
(89,'Roy Rogers',6),
(90,'Social Disease',6),
(91,'Harmony',6),
(92,'Your Starter For',7),
(93,'Tonight',7),
(94,'One Horse Town',7),
(95,'Chameleon',7),
(96,'Boogie Pilgrim',7),
(97,'Crazy Water',7),
(98,'Sorry Seems to Be the Hardest Word',7),
(99,'Out of the Blue',7),
(100,'Between Seventeen and Twenty',7),
(101,'Someone’s Final Song',7),
(102,'If There’s a God in Heaven (What’s He Waiting For?)',7),
(103,'Idol',7),
(104,'Theme From a Non-Existent TV Series',7),
(105,'Bite Your Lip (Get Up and Dance!)',7);
/*!40000 ALTER TABLE `recording` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user` (
  `id_user` int(11) NOT NULL AUTO_INCREMENT,
  `login` text NOT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user`
--

LOCK TABLES `user` WRITE;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` VALUES
(1,'mary'),
(2,'bob'),
(3,'john');
/*!40000 ALTER TABLE `user` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users_groups`
--

DROP TABLE IF EXISTS `users_groups`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users_groups` (
  `id_user` int(11) NOT NULL,
  `id_group` int(11) NOT NULL,
  PRIMARY KEY (`id_user`,`id_group`),
  KEY `id_group` (`id_group`),
  CONSTRAINT `users_groups_ibfk_1` FOREIGN KEY (`id_group`) REFERENCES `group` (`id_group`),
  CONSTRAINT `users_groups_ibfk_2` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users_groups`
--

LOCK TABLES `users_groups` WRITE;
/*!40000 ALTER TABLE `users_groups` DISABLE KEYS */;
INSERT INTO `users_groups` VALUES
(1,1),
(1,3),
(2,1),
(3,3);
/*!40000 ALTER TABLE `users_groups` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2023-07-30 13:30:22
