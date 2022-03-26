-- MariaDB dump 10.19  Distrib 10.5.12-MariaDB, for debian-linux-gnu (x86_64)
--
-- Host: localhost    Database: pars
-- ------------------------------------------------------
-- Server version	10.5.12-MariaDB-0+deb11u1

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
-- Table structure for table `adresse`
--

DROP TABLE IF EXISTS `adresse`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `adresse` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uname` varchar(20) NOT NULL,
  `anrede` varchar(40) NOT NULL,
  `titel` varchar(40) NOT NULL,
  `soundex` varchar(20) NOT NULL,
  `firma` varchar(40) DEFAULT NULL,
  `nachname` varchar(40) NOT NULL,
  `vorname` varchar(40) NOT NULL,
  `strasse` varchar(40) NOT NULL,
  `hausnr` varchar(10) NOT NULL,
  `postfach` varchar(20) NOT NULL,
  `landkz` varchar(3) NOT NULL DEFAULT 'D',
  `plz` varchar(10) NOT NULL,
  `stadt` varchar(40) NOT NULL,
  `land` varchar(40) NOT NULL DEFAULT 'DEUTSCHLAND',
  `landvorwahl` varchar(10) NOT NULL DEFAULT '+49',
  `telefon` varchar(30) NOT NULL,
  `mail` varchar(64) NOT NULL,
  `lastact` bigint(20) NOT NULL DEFAULT 0,
  PRIMARY KEY (`id`),
  UNIQUE KEY `uname` (`uname`),
  KEY `soundex` (`soundex`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `adresse`
--

LOCK TABLES `adresse` WRITE;
/*!40000 ALTER TABLE `adresse` DISABLE KEYS */;
INSERT INTO `adresse` VALUES (1,'admin','Herr','','P252','PQM Consulting Heise Maintal','Heise','Veit','Breslauer Straße','24','','D','63477','Maintal','DEUTSCHLAND','+49','(6181) 369 85 11','veit.heise@heise-media.eu',1608975212),(4,'veith','Firma','','P252','PQM Consulting Maintal','Heise','Veit','Breslauer Straße','24','','D','63477','Maintal','DEUTSCHLAND','+49','(6181)610-8324','veit.heise@heise-media.eu',1608975184),(6,'carlo','Herr','','','','Rabino','Pier Carlo','Vilbeler Landstraße','170a','','D','60388','Frankfurt','DEUTSCHLAND','+49','(69)272-465-16','piercarlor@t-online.de',1623784495),(7,'sproessel','Herr','','S162242','PQM Consulting Maintal','Sproessél','Guy','Breslauer Straße','24','','D','63477','Maintal','DEUTSCHLAND','+49','(6181)3698511','veit.heise@heise-media.eu',1647170155);
/*!40000 ALTER TABLE `adresse` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `buch`
--

DROP TABLE IF EXISTS `buch`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `buch` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `signatur` varchar(20) NOT NULL,
  `autor` varchar(80) DEFAULT NULL,
  `herausgeber` varchar(80) DEFAULT NULL,
  `titel` varchar(128) NOT NULL,
  `kategorie` varchar(30) NOT NULL,
  `reihe` varchar(80) NOT NULL,
  `band` varchar(5) DEFAULT NULL,
  `jahr` int(11) NOT NULL,
  `monat` int(11) DEFAULT NULL,
  `verlag` varchar(80) NOT NULL,
  `ort` varchar(80) DEFAULT NULL,
  `lagerort` varchar(20) NOT NULL,
  `bestellcode` varchar(22) DEFAULT NULL,
  `isbn` varchar(25) DEFAULT NULL,
  `klappentext` text NOT NULL,
  `anschaffung` date NOT NULL DEFAULT '1900-01-01',
  `preis` decimal(10,2) NOT NULL DEFAULT 0.00,
  `wert` decimal(10,2) NOT NULL DEFAULT 0.00,
  `sprache` varchar(3) NOT NULL DEFAULT 'DEU',
  `einband` varchar(30) NOT NULL DEFAULT 'gebunden',
  `bildurl` varchar(128) DEFAULT NULL,
  `sound_titel` varchar(25) DEFAULT NULL,
  `sound_autor` varchar(25) DEFAULT NULL,
  `sound_herausg` varchar(25) DEFAULT NULL,
  `sound_verlag` varchar(25) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `signatur` (`signatur`),
  FULLTEXT KEY `autor` (`autor`,`signatur`),
  FULLTEXT KEY `herausgeber` (`herausgeber`,`signatur`),
  FULLTEXT KEY `titel` (`titel`,`signatur`),
  FULLTEXT KEY `verlag` (`verlag`,`signatur`),
  FULLTEXT KEY `klappentext` (`klappentext`,`signatur`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `buch`
--

LOCK TABLES `buch` WRITE;
/*!40000 ALTER TABLE `buch` DISABLE KEYS */;
INSERT INTO `buch` VALUES (1,'BHae2-1','Haefs,Hanswilhelm','','Das ultimative Handbuch des nutzlosen Wissens','Beletristik','Weisheiten,Humor,Kurioses','',1998,12,'Deutscher Taschenbuch Verlag GmbH & CoKG','München','2-1','','978-3-423-20206-0','Das Neueste und Beste auf dem Gebiet des nutzlosen Wissens.\r\nHanswilhelm Haefs hat hier Vieles zum Vergnügen gesammelt: Naturgeheimnisse, Lebensläufe und Kurioses aus aller Welt.','2000-01-01',12.00,5.00,'DEU','gebunden','http://localhost/zend/sig/buch.jpg','D2435315312325324252252','H125','','D326'),(2,'BHei1','Heise, Veit','','Gott war nicht da','Beletristik','Romane,Kriminalromane','',2022,1,'Heise Media Eu','Maintal','Unbekannt','Unbekannt','Unbekannt','Dies wird mein neuster Krimi, der erst noch fertig geschrieben werden muss.\r\nIch bin erst bei Kapitel 11 ... LOL ... und gerade mitten drin.','2021-06-17',0.00,0.00,'DEU','gebunden','https://heise-media.eu','G3365233','H213','','H253'),(11,'SbGaz1','Gazzaniga, Michael S.','','The Ethical Brain','Sachbuch','Wissenschaft;Medizin;Neurologie;Psychiatrie;Ethik','',2005,1,'Dana Press','New York; Washington','Unbekannt','Unbekannt','Unbekannt','test','2006-01-01',15.00,15.00,'ENG','gebunden','https://heise-media.eu',NULL,'G252','','D516'),(12,'FbAda1','','Taft,S.Tucker;Duff,Robert,A.;Bruckhardt,Randall,L.;Ploedereder,Erhard','Ada 2005 Reference Manual','Fachbuch','Technik;Informatik;Programmiersprachen;Ada','',2006,8,'Springer Verlag','Berlin;Heidelberg;New York','2-1','','978-3-540-69335-2','The Ada 2012 Reference Manual combines the International Standards ISO/IEC 8652/1995(E) for the programming language Ada with the corrections of the Technical Corrigandum, approved by ISO in February 2001 and with the Amendment, expected to be approved by ISO in the late 2007.','2007-01-01',50.00,49.93,'ENG','gebunden','http://localhost/zend/sig/FbAda1.jpg',NULL,'','T132','S165'),(13,'FbGra1','Gray,Jim;Reuter,Andreas','','Transaction Processing: Concepts and Techniques','Fachbuch','Technik;Informatik;Datenbanken;Technik','',1993,2,'Morgan Kaufmann Publishers, Inc.','San Mateo','L/34','Unbekannt','1-55860-190-2','test','1994-01-01',245.00,245.00,'ENG','gebunden','https://heise-media.eu',NULL,'G625','','M625'),(14,'FbPyth1','Ernesti, Johannes; Kaiser, Peter','','Python 3 - Das umfassende Buch','Fachbuch','Technik, Informatik, Programmiersprachen, Python, Python3','',2017,1,'Rheinwerk Verlag','Bonn','2-Freihand','','978-3-8652-5864-7','Einführung\r\nPraxis\r\nReferenz\r\nSprachgrundlagen\r\nObjektorientierung\r\nModularisierung\r\nMigration\r\nDebugging\r\nWebentwicklung mit Django\r\nGUIs\r\nNetzwerkkommunikation\r\nu.v.m.','2017-07-01',44.90,0.01,'DEU','gebunden','http://localhost/zend/sig/FbPyth1.jpg',NULL,'E652','','R562');
/*!40000 ALTER TABLE `buch` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `log`
--

DROP TABLE IF EXISTS `log`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `log` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `logtime` timestamp NOT NULL DEFAULT current_timestamp(),
  `uname` varchar(20) NOT NULL,
  `modus` varchar(3) NOT NULL,
  `session` varchar(60) NOT NULL,
  `url` varchar(255) NOT NULL,
  `msg` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=39 DEFAULT CHARSET=utf8 COMMENT='System-Log Datei';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `log`
--

LOCK TABLES `log` WRITE;
/*!40000 ALTER TABLE `log` DISABLE KEYS */;
INSERT INTO `log` VALUES (1,'2022-03-18 02:45:39','','','2edo9l350ojsrtdm6njpcfaukf','login.php','Execute App'),(2,'2022-03-18 02:45:39','carlo','USR','2edo9l350ojsrtdm6njpcfaukf','usr-start.php','Execute App'),(3,'2022-03-18 02:45:47','carlo','USR','2edo9l350ojsrtdm6njpcfaukf','book-lstsig.php','Execute App'),(4,'2022-03-18 02:45:50','carlo','USR','2edo9l350ojsrtdm6njpcfaukf','book-info.php','Execute App'),(5,'2022-03-18 02:45:56','carlo','USR','2edo9l350ojsrtdm6njpcfaukf','usr-start.php','Execute App'),(6,'2022-03-18 02:46:02','carlo','USR','2edo9l350ojsrtdm6njpcfaukf','book-lstaut.php','Execute App'),(7,'2022-03-18 02:46:05','carlo','USR','2edo9l350ojsrtdm6njpcfaukf','book-lstaut1-p01.php','Execute App'),(8,'2022-03-18 02:46:07','carlo','USR','2edo9l350ojsrtdm6njpcfaukf','book-lstaut2.php','Execute App'),(9,'2022-03-18 02:46:11','carlo','USR','2edo9l350ojsrtdm6njpcfaukf','usr-start.php','Execute App'),(10,'2022-03-18 02:46:15','carlo','USR','2edo9l350ojsrtdm6njpcfaukf','book-lsthrg.php','Execute App'),(11,'2022-03-18 02:46:18','carlo','USR','2edo9l350ojsrtdm6njpcfaukf','book-lsthrg1.php','Execute App'),(12,'2022-03-18 02:46:18','carlo','USR','2edo9l350ojsrtdm6njpcfaukf','book-lsthrg1-p01.php','Execute App'),(13,'2022-03-18 02:46:20','carlo','USR','2edo9l350ojsrtdm6njpcfaukf','book-lsthrg2.php','Execute App'),(14,'2022-03-18 02:46:24','carlo','USR','2edo9l350ojsrtdm6njpcfaukf','usr-start.php','Execute App'),(15,'2022-03-18 02:46:32','carlo','USR','2edo9l350ojsrtdm6njpcfaukf','book-lstkat1.php','Execute App'),(16,'2022-03-21 12:41:33','','','of2ufruqvo4mdjatdq0191ig1s','login.php','Execute App'),(17,'2022-03-21 12:41:33','carlo','USR','of2ufruqvo4mdjatdq0191ig1s','usr-start.php','Execute App'),(18,'2022-03-21 12:41:38','carlo','USR','of2ufruqvo4mdjatdq0191ig1s','book-lsthrg.php','Execute App'),(19,'2022-03-21 12:41:39','carlo','USR','of2ufruqvo4mdjatdq0191ig1s','book-lsthrg1.php','Execute App'),(20,'2022-03-21 12:41:39','carlo','USR','of2ufruqvo4mdjatdq0191ig1s','book-lsthrg1-p01.php','Execute App'),(21,'2022-03-21 12:41:41','carlo','USR','of2ufruqvo4mdjatdq0191ig1s','book-lsthrg2.php','Execute App'),(22,'2022-03-21 12:41:44','carlo','USR','of2ufruqvo4mdjatdq0191ig1s','book-info.php','Execute App'),(23,'2022-03-21 12:41:54','carlo','USR','of2ufruqvo4mdjatdq0191ig1s','book-info.php','Execute App'),(24,'2022-03-23 22:16:58','','','t2mdfqthecu2vm8f7l332rgrmb','login.php','Execute App'),(25,'2022-03-23 22:16:58','admin','ADM','t2mdfqthecu2vm8f7l332rgrmb','adm-book.php','Execute App'),(26,'2022-03-23 22:22:11','','','qsqnm9v73u1bt9lm5fpimtcvqv','login.php','Execute App'),(27,'2022-03-23 22:26:42','','','v5fv90if3bcibda22umcuephpb','login.php','Execute App'),(28,'2022-03-23 22:26:42','admin','ADM','v5fv90if3bcibda22umcuephpb','adm-book.php','Execute App'),(29,'2022-03-24 19:06:24','','','ctmgaiakc1hjq0ombfhjguitqt','login.php','Execute App'),(30,'2022-03-24 19:06:24','admin','ADM','ctmgaiakc1hjq0ombfhjguitqt','adm-book.php','Execute App'),(31,'2022-03-24 19:09:32','','','o4st9j58qed1eg4et2fhn2vrkr','login.php','Execute App'),(32,'2022-03-24 19:09:33','admin','ADM','o4st9j58qed1eg4et2fhn2vrkr','adm-book.php','Execute App'),(33,'2022-03-24 19:12:00','','','j5anj6j52194ggkbtls3n8cpk9','login.php','Execute App'),(34,'2022-03-24 19:12:00','admin','ADM','j5anj6j52194ggkbtls3n8cpk9','adm-book.php','Execute App'),(35,'2022-03-24 20:37:17','','','1nq4voc9pk7v8bm7ui62pigkmq','login.php','Execute App'),(36,'2022-03-24 20:37:17','admin','ADM','1nq4voc9pk7v8bm7ui62pigkmq','adm-book.php','Execute App'),(37,'2022-03-24 20:38:03','','','2smb975od0cnd6o6018qjvfggt','login.php','Execute App'),(38,'2022-03-24 20:38:04','admin','ADM','2smb975od0cnd6o6018qjvfggt','adm-book.php','Execute App');
/*!40000 ALTER TABLE `log` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `musikalien`
--

DROP TABLE IF EXISTS `musikalien`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `musikalien` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `signatur` varchar(20) NOT NULL,
  `komponist` varchar(80) DEFAULT NULL,
  `herausgeber` varchar(80) DEFAULT NULL,
  `titel` varchar(128) NOT NULL,
  `untertitel` varchar(128) DEFAULT NULL,
  `kategorie` varchar(12) NOT NULL,
  `instrumente` varchar(80) NOT NULL,
  `jahr` int(11) NOT NULL DEFAULT 0,
  `monat` int(11) NOT NULL DEFAULT 0,
  `verlag` varchar(80) DEFAULT NULL,
  `ort` varchar(20) NOT NULL,
  `bestellcode` varchar(22) DEFAULT NULL,
  `klappentext` text DEFAULT NULL,
  `sprache` varchar(3) NOT NULL DEFAULT 'DEU',
  `einband` varchar(30) NOT NULL DEFAULT 'gebunden',
  `sound_autor` varchar(5) DEFAULT NULL,
  `sound_hrsg` varchar(5) DEFAULT NULL,
  `sound_verlag` varchar(5) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `signatur` (`signatur`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `musikalien`
--

LOCK TABLES `musikalien` WRITE;
/*!40000 ALTER TABLE `musikalien` DISABLE KEYS */;
/*!40000 ALTER TABLE `musikalien` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ranrede`
--

DROP TABLE IF EXISTS `ranrede`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ranrede` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `anrede` varchar(40) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `anrede` (`anrede`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ranrede`
--

LOCK TABLES `ranrede` WRITE;
/*!40000 ALTER TABLE `ranrede` DISABLE KEYS */;
INSERT INTO `ranrede` VALUES (1,'Firma'),(2,'Frau'),(3,'Herr');
/*!40000 ALTER TABLE `ranrede` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `reinband`
--

DROP TABLE IF EXISTS `reinband`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `reinband` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `einband` varchar(30) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `einband` (`einband`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `reinband`
--

LOCK TABLES `reinband` WRITE;
/*!40000 ALTER TABLE `reinband` DISABLE KEYS */;
INSERT INTO `reinband` VALUES (7,'Box'),(3,'gebunden'),(4,'geklebt'),(2,'Hardcover'),(6,'Kunststoff'),(5,'Leder'),(9,'Leinen gebunden'),(10,'Leinen geklebt'),(1,'Paperback');
/*!40000 ALTER TABLE `reinband` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `rkategorie`
--

DROP TABLE IF EXISTS `rkategorie`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `rkategorie` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `kategorie` varchar(20) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `kategorie` (`kategorie`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8 COMMENT='System-Tabelle kategorien';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `rkategorie`
--

LOCK TABLES `rkategorie` WRITE;
/*!40000 ALTER TABLE `rkategorie` DISABLE KEYS */;
INSERT INTO `rkategorie` VALUES (3,'Beletristik'),(2,'Fachbuch'),(7,'Fachzeitschrift'),(6,'Jahresband'),(8,'Musikalien'),(1,'Sachbuch'),(5,'Sammelband'),(9,'Unbekannt'),(4,'Zeitschrift');
/*!40000 ALTER TABLE `rkategorie` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `rlagerort`
--

DROP TABLE IF EXISTS `rlagerort`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `rlagerort` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `lagerort` varchar(20) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `lagerort` (`lagerort`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COMMENT='Lagerort gesammelt';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `rlagerort`
--

LOCK TABLES `rlagerort` WRITE;
/*!40000 ALTER TABLE `rlagerort` DISABLE KEYS */;
INSERT INTO `rlagerort` VALUES (1,'2-1'),(4,'2-2'),(3,'2-Freihand'),(5,'M2-1'),(6,'M2-2');
/*!40000 ALTER TABLE `rlagerort` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `rlandkz`
--

DROP TABLE IF EXISTS `rlandkz`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `rlandkz` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `landkz` varchar(3) NOT NULL,
  `land` varchar(40) NOT NULL,
  `landvorwahl` varchar(5) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `landkz` (`landkz`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8 COMMENT='Steuertabelle Ländercodes';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `rlandkz`
--

LOCK TABLES `rlandkz` WRITE;
/*!40000 ALTER TABLE `rlandkz` DISABLE KEYS */;
INSERT INTO `rlandkz` VALUES (1,'D','DEUTSCHLAND','+49'),(2,'F','FRANKREICH','+33'),(3,'CH','SCHWEIZ','+41'),(4,'LI','LIECHTENSTEIN','+423'),(5,'A','ÖSTERREICH','+43'),(6,'DK','DÄNEMARK','+45'),(7,'PL','POLEN','+48'),(8,'SK','SLOWAKEI','+421'),(9,'CZ','TSCHECHIEN','+420'),(10,'HU','UNGARN','+36'),(11,'IT','ITALIEN','+39'),(12,'MC','MONACO','+377'),(13,'N/A','NICHT GENANNT','+000');
/*!40000 ALTER TABLE `rlandkz` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `rmodus`
--

DROP TABLE IF EXISTS `rmodus`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `rmodus` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `modus` varchar(3) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `modus` (`modus`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COMMENT='Benutzer-Modus Steuer-Datei';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `rmodus`
--

LOCK TABLES `rmodus` WRITE;
/*!40000 ALTER TABLE `rmodus` DISABLE KEYS */;
INSERT INTO `rmodus` VALUES (1,'ADM'),(3,'LOG'),(2,'SYS'),(4,'USR');
/*!40000 ALTER TABLE `rmodus` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `rsprache`
--

DROP TABLE IF EXISTS `rsprache`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `rsprache` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `sprache` varchar(3) NOT NULL,
  `lang` varchar(25) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `sprache` (`sprache`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `rsprache`
--

LOCK TABLES `rsprache` WRITE;
/*!40000 ALTER TABLE `rsprache` DISABLE KEYS */;
INSERT INTO `rsprache` VALUES (1,'DEU','deutsch'),(2,'ITA','italienisch'),(3,'SPA','spanisch'),(4,'FRA','französisch'),(5,'GRI','alt-griechisch'),(6,'NGR','neu-griechisch'),(7,'LAT','lateinisch'),(8,'HEB','hebräisch'),(9,'RAT','räthisch/romanisch'),(10,'RUS','russisch'),(11,'ENG','englisch'),(12,'DAN','dänisch'),(13,'SWE','schwedisch'),(14,'FIN','finnisch'),(15,'BAS','baskisch');
/*!40000 ALTER TABLE `rsprache` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tmp_admin_1`
--

DROP TABLE IF EXISTS `tmp_admin_1`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tmp_admin_1` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `aut_init` char(1) NOT NULL,
  `aut_kurz` char(3) NOT NULL,
  `autor` varchar(80) NOT NULL,
  `signatur` varchar(20) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `aut_init` (`aut_init`,`aut_kurz`,`autor`),
  KEY `signatur` (`signatur`)
) ENGINE=MEMORY DEFAULT CHARSET=utf8 COMMENT='Suchreihenfolge für Bücher-Suche nach Autoren';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tmp_admin_1`
--

LOCK TABLES `tmp_admin_1` WRITE;
/*!40000 ALTER TABLE `tmp_admin_1` DISABLE KEYS */;
/*!40000 ALTER TABLE `tmp_admin_1` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tmp_admin_1_lock`
--

DROP TABLE IF EXISTS `tmp_admin_1_lock`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tmp_admin_1_lock` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uname` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MEMORY DEFAULT CHARSET=utf8 COMMENT='LOCK Erkennung für tmp_admin_1';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tmp_admin_1_lock`
--

LOCK TABLES `tmp_admin_1_lock` WRITE;
/*!40000 ALTER TABLE `tmp_admin_1_lock` DISABLE KEYS */;
/*!40000 ALTER TABLE `tmp_admin_1_lock` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tmp_admin_2`
--

DROP TABLE IF EXISTS `tmp_admin_2`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tmp_admin_2` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Sequel ID number',
  `uname` varchar(20) NOT NULL,
  `reihe` varchar(80) NOT NULL,
  `signatur` varchar(20) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `uname` (`uname`,`reihe`,`signatur`) USING BTREE
) ENGINE=MEMORY DEFAULT CHARSET=utf8 COMMENT='Suchtabelle Kategorien';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tmp_admin_2`
--

LOCK TABLES `tmp_admin_2` WRITE;
/*!40000 ALTER TABLE `tmp_admin_2` DISABLE KEYS */;
/*!40000 ALTER TABLE `tmp_admin_2` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Lfd. ID-Nr.',
  `uname` varchar(20) NOT NULL,
  `modus` enum('SYS','USR','LOG','ADM') NOT NULL DEFAULT 'USR',
  `password` varchar(65) NOT NULL,
  `lastact` bigint(20) NOT NULL DEFAULT 0,
  PRIMARY KEY (`id`),
  UNIQUE KEY `uname` (`uname`),
  UNIQUE KEY `password` (`password`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8 COMMENT='Benutzer-Datenbank mit Passwörtern';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user`
--

LOCK TABLES `user` WRITE;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` VALUES (2,'admin','ADM','$2y$12$c2YjrE.eC864bpS18TSz4OUX1OOWRugxhr3HSz8nANeLPxVxPI3Ce',1648154284),(4,'veith','SYS','$2y$12$fHaiHxZuYk7.Af5wXTktQugKziNT0i3k.hmY7n6Fv0W5iPRmeVOzi',1646466189),(10,'carlo','USR','$2y$12$66.1VnTt1T7YPJZF03Mgx.ckjp4lUsYh7VlZYo5pOJmfXog/e3AVK',1647866514),(12,'sproessel','USR','$2y$12$YiILkgZbP4Kr4BP2382ko.13X/YlFv3FD6umy9lcS0aa0d4XzvASm',1647471204);
/*!40000 ALTER TABLE `user` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `zeitschrift`
--

DROP TABLE IF EXISTS `zeitschrift`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `zeitschrift` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `signatur` varchar(20) NOT NULL,
  `einband` varchar(12) NOT NULL DEFAULT 'Hardcover',
  `autor` varchar(80) DEFAULT NULL,
  `herausgeber` varchar(80) DEFAULT NULL,
  `titel` varchar(128) NOT NULL,
  `kategorie` varchar(12) NOT NULL,
  `jahr` int(11) NOT NULL DEFAULT 0,
  `monat` int(11) NOT NULL DEFAULT 0,
  `verlag` varchar(80) DEFAULT NULL,
  `ort` varchar(20) NOT NULL,
  `issn` varchar(22) DEFAULT NULL,
  `klappentext` text DEFAULT NULL,
  `sprache` varchar(3) NOT NULL DEFAULT 'DEU',
  `sound_autor` varchar(5) DEFAULT NULL,
  `sound_hrsg` varchar(5) DEFAULT NULL,
  `sound_verlag` varchar(5) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `signatur` (`signatur`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `zeitschrift`
--

LOCK TABLES `zeitschrift` WRITE;
/*!40000 ALTER TABLE `zeitschrift` DISABLE KEYS */;
/*!40000 ALTER TABLE `zeitschrift` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-03-24 22:54:35
