-- MySQL dump 10.13  Distrib 5.7.9, for linux-glibc2.5 (x86_64)
--
-- Host: localhost    Database: yuva
-- ------------------------------------------------------
-- Server version	5.5.47-0ubuntu0.14.04.1

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
-- Table structure for table `LogDetails`
--

DROP TABLE IF EXISTS `LogDetails`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `LogDetails` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `UserAgent` varchar(255) NOT NULL,
  `IpAddress` varchar(255) NOT NULL,
  `BrowserName` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Version` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `Platform` varchar(255) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `LogDetails`
--

LOCK TABLES `LogDetails` WRITE;
/*!40000 ALTER TABLE `LogDetails` DISABLE KEYS */;
INSERT INTO `LogDetails` VALUES (1,'{\"userAgent\":\"Mozilla\\/5.0 (X11; Linux x86_64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/49.0.2623.112 Safari\\/537.36\",\"name\":\"Google Chrome\",\"version\":\"49.0.2623.112\",\"platform\":\"linux\",\"pattern\":\"#(?<browser>Version|Chrome|other)[\\/ ]+(?<version>[','192.168.100.1','Google Chrome','yuvashree.b@karmanya.co.in','49.0.2623.112','2016-05-30 05:27:32','2016-05-30 05:27:32','linux'),(2,'{\"userAgent\":\"Mozilla\\/5.0 (X11; Linux x86_64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/49.0.2623.112 Safari\\/537.36\",\"name\":\"Google Chrome\",\"version\":\"49.0.2623.112\",\"platform\":\"linux\",\"pattern\":\"#(?<browser>Version|Chrome|other)[\\/ ]+(?<version>[','192.168.100.1','Google Chrome','yuvashree.b@karmanya.co.in','49.0.2623.112','2016-05-30 05:30:08','2016-05-30 05:30:08','linux'),(3,'{\"userAgent\":\"Mozilla\\/5.0 (X11; Linux x86_64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/49.0.2623.112 Safari\\/537.36\",\"name\":\"Google Chrome\",\"version\":\"49.0.2623.112\",\"platform\":\"linux\",\"pattern\":\"#(?<browser>Version|Chrome|other)[\\/ ]+(?<version>[','192.168.100.1','Google Chrome','yuvashree.b@karmanya.co.in','49.0.2623.112','2016-05-30 05:33:33','2016-05-30 05:33:33','linux'),(4,'{\"userAgent\":\"Mozilla\\/5.0 (X11; Linux x86_64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/49.0.2623.112 Safari\\/537.36\",\"name\":\"Google Chrome\",\"version\":\"49.0.2623.112\",\"platform\":\"linux\",\"pattern\":\"#(?<browser>Version|Chrome|other)[\\/ ]+(?<version>[','192.168.100.1','Google Chrome','yuvashree.b@karmanya.co.in','49.0.2623.112','2016-05-30 05:34:23','2016-05-30 05:34:23','linux'),(5,'{\"userAgent\":\"Mozilla\\/5.0 (X11; Linux x86_64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/49.0.2623.112 Safari\\/537.36\",\"name\":\"Google Chrome\",\"version\":\"49.0.2623.112\",\"platform\":\"linux\",\"pattern\":\"#(?<browser>Version|Chrome|other)[\\/ ]+(?<version>[','192.168.100.1','Google Chrome','yuvashree.b@karmanya.co.in','49.0.2623.112','2016-05-30 05:36:16','2016-05-30 05:36:16','linux'),(6,'{\"userAgent\":\"Mozilla\\/5.0 (X11; Linux x86_64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/49.0.2623.112 Safari\\/537.36\",\"name\":\"Google Chrome\",\"version\":\"49.0.2623.112\",\"platform\":\"linux\",\"pattern\":\"#(?<browser>Version|Chrome|other)[\\/ ]+(?<version>[','192.168.100.1','Google Chrome','yuvashree.b@karmanya.co.in','49.0.2623.112','2016-05-30 05:48:44','2016-05-30 05:48:44','linux'),(7,'{\"userAgent\":\"Mozilla\\/5.0 (X11; Ubuntu; Linux x86_64; rv:45.0) Gecko\\/20100101 Firefox\\/45.0\",\"name\":\"Mozilla Firefox\",\"version\":\"45.0\",\"platform\":\"linux\",\"pattern\":\"#(?<browser>Version|Firefox|other)[\\/ ]+(?<version>[0-9.|a-zA-Z.]*)#\"}','192.168.100.1','Mozilla Firefox','yuvashree.b@karmanya.co.in','45.0','2016-05-30 05:55:58','2016-05-30 05:55:58','linux'),(8,'{\"userAgent\":\"Mozilla\\/5.0 (X11; Linux x86_64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/49.0.2623.112 Safari\\/537.36\",\"name\":\"Google Chrome\",\"version\":\"49.0.2623.112\",\"platform\":\"linux\",\"pattern\":\"#(?<browser>Version|Chrome|other)[\\/ ]+(?<version>[','192.168.100.1','Google Chrome','yuva231292@gmail.com','49.0.2623.112','2016-05-30 06:08:23','2016-05-30 06:08:23','linux');
/*!40000 ALTER TABLE `LogDetails` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2016-05-30 11:50:02
