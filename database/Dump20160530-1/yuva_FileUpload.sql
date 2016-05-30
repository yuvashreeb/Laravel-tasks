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
-- Table structure for table `FileUpload`
--

DROP TABLE IF EXISTS `FileUpload`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `FileUpload` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `File` varchar(45) NOT NULL,
  `Type` varchar(45) NOT NULL,
  `Size` varchar(45) NOT NULL,
  `Email` varchar(45) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `FileUpload`
--

LOCK TABLES `FileUpload` WRITE;
/*!40000 ALTER TABLE `FileUpload` DISABLE KEYS */;
INSERT INTO `FileUpload` VALUES (1,'login.blade.php','application/x-php','3558','yuvashree.b@karmanya.co.in'),(2,'login.blade.php','application/x-php','3558','yuvashree.b@karmanya.co.in'),(3,'location.blade.php','application/x-php','1452','yuvashree.b@karmanya.co.in'),(4,'admin.blade.php','application/x-php','50881','yuvashree.b@karmanya.co.in'),(5,'userdashboard.php','application/x-httpd-php','3094','yuvashree.b@karmanya.co.in'),(6,'userview.php','application/x-httpd-php','7183','yuvashree.b@karmanya.co.in'),(7,'img.jpeg','image/jpeg','189597','yuva231292@gmail.com'),(8,'bg.jpg','image/jpeg','6641','yuva231292@gmail.com'),(9,'bg.jpg','image/jpeg','6641','yuva231292@gmail.com');
/*!40000 ALTER TABLE `FileUpload` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2016-05-30 16:10:15
