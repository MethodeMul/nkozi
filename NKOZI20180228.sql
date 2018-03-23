-- MySQL dump 10.13  Distrib 5.7.17, for Win64 (x86_64)
--
-- Host: localhost    Database: nkozi
-- ------------------------------------------------------
-- Server version	5.5.10-log

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `concept_dic`
--

DROP TABLE IF EXISTS `concept_dic`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `concept_dic` (
  `id` int(11) unsigned NOT NULL,
  `type` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `code` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(25) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `concept_dic`
--

LOCK TABLES `concept_dic` WRITE;
/*!40000 ALTER TABLE `concept_dic` DISABLE KEYS */;
INSERT INTO `concept_dic` VALUES (1,'symptom','1','headache'),(2,'symptom','2','fever'),(3,'symptom','3','nausea/vomiting'),(4,'symptom','4','diarrhea'),(5,'symptom','5','weakness'),(6,'symptom','6','hiccup'),(7,'symptom','7','body pain'),(8,'symptom','8','abdominal pain'),(9,'symptom','9','respiratory disorder'),(10,'symptom','10','dehydratation'),(11,'symptom','11','red eye'),(12,'symptom','12','hemorragic symptoms'),(13,'general','1','conscious'),(14,'general','2','confused/agitated'),(15,'general','3','unconscious'),(16,'general','4','deceased'),(17,'status','1','walking'),(18,'status','2','bedridden'),(19,'status','3','terminal'),(20,'pain','1','-'),(21,'pain','2','+ PCM'),(22,'pain','3','++ tramadol'),(23,'pain','4','+++ morphine'),(24,'intake','1','normal food'),(25,'intake','2','normal food with support'),(26,'intake','3','liquid only'),(27,'intake','4','liquid only with support'),(28,'intake','5','IV treatment'),(29,'drug','1','prometazine'),(30,'drug','2','metoclopramide'),(31,'drug','3','loperamide'),(32,'drug','4','vit A, B, C'),(33,'drug','5','chlorpromazine'),(34,'outcome','1','cured'),(35,'outcome','2','escaped'),(36,'outcome','3','dead'),(37,'test','1','negative'),(38,'test','2','positive'),(39,'test','3','inconclusive'),(40,'tent','8','C1'),(41,'tent','2','C2'),(42,'tent','3','C3'),(43,'tent','4','C4'),(50,'intake','6','none'),(51,'intake','10','with support'),(52,'tent','11','C9');
/*!40000 ALTER TABLE `concept_dic` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `loginuser`
--

DROP TABLE IF EXISTS `loginuser`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `loginuser` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `creation_date` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `loginuser`
--

LOCK TABLES `loginuser` WRITE;
/*!40000 ALTER TABLE `loginuser` DISABLE KEYS */;
INSERT INTO `loginuser` VALUES (12,'user','12dea96fec20593566ab75692c9949596833adc9','2018-01-12 18:35:00');
/*!40000 ALTER TABLE `loginuser` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `record`
--

DROP TABLE IF EXISTS `record`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `record` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `value` int(11) DEFAULT NULL,
  `what` int(11) NOT NULL,
  `who` int(11) NOT NULL,
  `when` varchar(55) COLLATE utf8_unicode_ci NOT NULL,
  `where` varchar(55) COLLATE utf8_unicode_ci NOT NULL,
  `upd_date` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=315 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `record`
--

LOCK TABLES `record` WRITE;
/*!40000 ALTER TABLE `record` DISABLE KEYS */;
INSERT INTO `record` VALUES (216,2,2,1,'1','1','2018-02-28 14:13:56'),(217,2,2,2,'1','1','2018-02-28 14:13:56'),(218,45,1,1,'1','1','2018-02-28 14:13:56'),(219,21,3,1,'1','1','2018-02-28 14:13:56'),(220,21,3,2,'1','1','2018-02-28 14:13:56'),(221,21,6,3,'1','1','2018-01-11 03:55:21'),(222,21,5,3,'1','1','2018-01-11 03:55:22'),(223,11,2,1,'2','1','2018-01-12 03:40:36'),(224,11,2,2,'2','1','2018-01-12 03:40:37'),(225,1,1,1,'2','1','2018-01-12 03:40:37'),(226,1,1,2,'2','1','2018-01-12 03:40:37'),(227,1,3,1,'2','1','2018-01-12 03:40:37'),(228,1,3,2,'2','1','2018-01-12 03:40:38'),(229,1,4,1,'2','1','2018-01-12 03:40:38'),(230,1,4,2,'2','1','2018-01-12 03:40:38'),(231,1,6,3,'2','1','2018-01-12 03:40:38'),(232,1,5,3,'2','1','2018-01-12 03:40:38'),(234,2,2,2,'1','1','2018-01-12 08:35:03'),(235,2,2,1,'3','1','2018-01-12 08:41:24'),(236,2,2,2,'3','1','2018-01-12 08:41:24'),(237,1,1,1,'3','1','2018-01-12 08:41:24'),(238,10,3,1,'3','1','2018-01-12 08:41:24'),(239,65,2,1,'3','1','2018-01-12 09:37:00'),(240,615,2,2,'3','1','2018-01-12 09:37:00'),(241,61,1,1,'3','1','2018-01-12 09:37:00'),(242,212,3,1,'3','1','2018-01-12 09:37:00'),(243,14,2,1,'4','1','2018-01-12 10:00:59'),(244,14,4,2,'4','1','2018-01-12 10:01:00'),(245,12,1,1,'4','1','2018-01-12 10:00:59'),(246,1,2,1,'4','1','2018-01-12 13:09:28'),(247,1,2,2,'4','1','2018-01-12 13:09:28'),(248,1,4,1,'4','1','2018-01-12 13:09:29'),(249,12,2,1,'4','1','2018-01-12 16:13:05'),(250,21,2,2,'4','1','2018-01-12 16:13:05'),(251,656,1,1,'4','1','2018-01-12 16:13:05'),(252,8,1,2,'4','1','2018-01-12 16:13:05'),(253,8,3,1,'4','1','2018-01-12 16:13:05'),(254,8,3,2,'4','1','2018-01-12 16:13:05'),(255,8,4,1,'4','1','2018-01-12 16:13:05'),(256,8,4,2,'4','1','2018-01-12 16:13:05'),(257,32,6,3,'4','1','2018-01-12 16:13:05'),(258,34,5,3,'4','1','2018-01-12 16:13:06'),(259,1,2,1,'2','1','2018-01-12 16:16:47'),(260,1,2,2,'2','1','2018-01-12 16:16:47'),(261,1,1,1,'2','1','2018-01-12 16:16:47'),(262,1,1,2,'2','1','2018-01-12 16:16:47'),(263,12,3,1,'2','1','2018-01-12 16:16:47'),(264,224,3,2,'2','1','2018-01-12 16:16:48'),(265,32,4,1,'2','1','2018-01-12 16:16:48'),(266,12,4,2,'2','1','2018-01-12 16:16:48'),(269,1,2,1,'2','1','2018-01-12 16:32:48'),(270,1,6,3,'2','1','2018-01-12 16:32:48'),(271,1,2,1,'2','1','2018-01-12 18:15:36'),(272,2,2,2,'2','1','2018-01-12 18:15:36'),(273,2,1,1,'2','1','2018-01-12 18:15:36'),(274,4,1,2,'2','1','2018-01-12 18:15:36'),(275,4,3,1,'2','1','2018-01-12 18:15:36'),(276,4,3,2,'2','1','2018-01-12 18:15:36'),(277,4,4,1,'2','1','2018-01-12 18:15:36'),(278,4,4,2,'2','1','2018-01-12 18:15:36'),(279,4,6,3,'2','1','2018-01-12 18:15:36'),(280,4,5,3,'2','1','2018-01-12 18:15:36'),(281,111,2,1,'2','1','2018-02-28 12:00:10'),(282,22,2,1,'','','2018-02-28 13:58:52'),(283,2,2,2,'','','2018-02-28 13:58:52'),(284,45,1,1,'','','2018-02-28 13:58:52'),(285,21,3,1,'','','2018-02-28 13:58:52'),(286,21,3,2,'','','2018-02-28 13:58:52'),(287,22,2,1,'2018wk1','1','2018-02-28 14:00:04'),(288,2,2,2,'2018wk1','1','2018-02-28 14:00:04'),(289,45,1,1,'2018wk1','1','2018-02-28 14:00:04'),(290,21,3,1,'2018wk1','1','2018-02-28 14:00:04'),(291,21,3,2,'2018wk1','1','2018-02-28 14:00:04'),(292,2,2,1,'2018wk1','1','2018-02-28 14:00:24'),(293,2,2,2,'2018wk1','1','2018-02-28 14:00:24'),(294,45,1,1,'2018wk1','1','2018-02-28 14:00:24'),(295,21,3,1,'2018wk1','1','2018-02-28 14:00:24'),(296,21,3,2,'2018wk1','1','2018-02-28 14:00:24'),(297,1,2,1,'2018wk1','1','2018-02-28 14:01:04'),(298,2,2,2,'2018wk1','1','2018-02-28 14:01:04'),(299,45,1,1,'2018wk1','1','2018-02-28 14:01:04'),(300,21,3,1,'2018wk1','1','2018-02-28 14:01:04'),(301,21,3,2,'2018wk1','1','2018-02-28 14:01:04'),(302,2,2,1,'2018wk1','1','2018-02-28 14:01:59'),(303,2,2,2,'2018wk1','1','2018-02-28 14:01:59'),(304,45,1,1,'2018wk1','1','2018-02-28 14:01:59'),(305,21,3,1,'2018wk1','1','2018-02-28 14:01:59'),(306,21,3,2,'2018wk1','1','2018-02-28 14:01:59'),(307,1,4,2,'2018wk1','1','2018-02-28 14:05:09'),(308,111,1,2,'','1','2018-02-28 14:10:03'),(309,111,1,2,'','1','2018-02-28 14:11:02'),(310,222,1,2,'','1','2018-02-28 14:11:25'),(311,77,1,2,'','1','2018-02-28 14:12:31'),(312,77,1,2,'','1','2018-02-28 14:13:05'),(313,77,1,2,'','1','2018-02-28 14:13:25'),(314,77,1,2,'1','1','2018-02-28 14:13:56');
/*!40000 ALTER TABLE `record` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `what`
--

DROP TABLE IF EXISTS `what`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `what` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `type` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `code` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `upd_time` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `what`
--

LOCK TABLES `what` WRITE;
/*!40000 ALTER TABLE `what` DISABLE KEYS */;
INSERT INTO `what` VALUES (1,'Malaria','dis',NULL,'2018-01-01 15:37:34'),(2,'Cholera','dis',NULL,'2018-01-01 15:37:34'),(3,'Measles','dis',NULL,'2018-01-01 15:37:34'),(4,'Trauma','dis',NULL,'2018-01-01 15:37:34'),(5,'Malaria Test','test',NULL,'2018-01-01 15:37:34'),(6,'Malaria Positive','result',NULL,'2018-01-01 15:37:34');
/*!40000 ALTER TABLE `what` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `when`
--

DROP TABLE IF EXISTS `when`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `when` (
  `id` int(11) unsigned NOT NULL,
  `name` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `code` varchar(25) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `type` varchar(5) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `value` bigint(14) DEFAULT NULL,
  `year` varchar(4) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `start` datetime DEFAULT NULL,
  `end` datetime DEFAULT NULL,
  `nbDays` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `uniquewncode` (`code`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `when`
--

LOCK TABLES `when` WRITE;
/*!40000 ALTER TABLE `when` DISABLE KEYS */;
INSERT INTO `when` VALUES (1,'2018wk1',NULL,'w',1,'2018','2017-12-31 00:00:00','2018-01-06 00:00:00',7),(2,'2018wk2',NULL,'w',2,'2018','2018-01-07 00:00:00','2018-01-13 00:00:00',7),(3,'2018wk3',NULL,'w',3,'2018','2018-01-14 00:00:00','2018-01-20 00:00:00',7),(4,'2018wk4',NULL,'w',4,'2018','2018-01-21 00:00:00','2018-01-27 00:00:00',7);
/*!40000 ALTER TABLE `when` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `where`
--

DROP TABLE IF EXISTS `where`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `where` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `type` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `code` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `update_tine` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `where`
--

LOCK TABLES `where` WRITE;
/*!40000 ALTER TABLE `where` DISABLE KEYS */;
INSERT INTO `where` VALUES (1,'OPD Nkozi','srv','','2018-01-11 12:15:04'),(2,'ED Nkozi','srv','','2018-01-12 11:16:00'),(3,'IPD Nkozi','srv','','2018-01-12 13:08:00'),(4,'Mat Nkozi','srv',' ','2018-01-12 13:08:00');
/*!40000 ALTER TABLE `where` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `who`
--

DROP TABLE IF EXISTS `who`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `who` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `type` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `code` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `upd_time` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `who`
--

LOCK TABLES `who` WRITE;
/*!40000 ALTER TABLE `who` DISABLE KEYS */;
INSERT INTO `who` VALUES (1,'<5y','age',NULL,'2017-07-01 15:38:11'),(2,'>=5y','age',NULL,'2017-07-01 15:38:11'),(3,'undefined','age',NULL,'2017-07-01 17:38:11');
/*!40000 ALTER TABLE `who` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-02-28 14:29:10
