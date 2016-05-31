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
) ENGINE=InnoDB AUTO_INCREMENT=34 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `FileUpload`
--

LOCK TABLES `FileUpload` WRITE;
/*!40000 ALTER TABLE `FileUpload` DISABLE KEYS */;
INSERT INTO `FileUpload` VALUES (1,'login.blade.php','application/x-php','3558','yuvashree.b@karmanya.co.in'),(2,'login.blade.php','application/x-php','3558','yuvashree.b@karmanya.co.in'),(3,'location.blade.php','application/x-php','1452','yuvashree.b@karmanya.co.in'),(4,'admin.blade.php','application/x-php','50881','yuvashree.b@karmanya.co.in'),(5,'userdashboard.php','application/x-httpd-php','3094','yuvashree.b@karmanya.co.in'),(6,'userview.php','application/x-httpd-php','7183','yuvashree.b@karmanya.co.in'),(7,'img.jpeg','image/jpeg','189597','yuva231292@gmail.com'),(8,'bg.jpg','image/jpeg','6641','yuva231292@gmail.com'),(9,'bg.jpg','image/jpeg','6641','yuva231292@gmail.com'),(10,'navigation.html','text/html','2317','yuvashree.b@karmanya.co.in'),(11,'hello.html','text/html','1535','kaveri.nagunuri@karmanya.co.in'),(12,'hello.html','text/html','1535','yuvashree.b@karmanya.co.in'),(13,'skype.png','image/png','933','yuvashree.b@karmanya.co.in'),(14,'Twitter.png','image/png','489','yuvashree.b@karmanya.co.in'),(15,'tick.png','image/png','1357','yuvashree.b@karmanya.co.in'),(16,'pic3.jpeg','image/jpeg','30896','yuvashree.b@karmanya.co.in'),(17,'img1.jpg','image/jpeg','8063','yuvashree.b@karmanya.co.in'),(18,'tick.png','image/png','1357','yuvashree.b@karmanya.co.in'),(19,'img.jpeg','image/jpeg','189597','yuvashree.b@karmanya.co.in'),(20,'pic3.jpeg','image/jpeg','30896','yuvashree.b@karmanya.co.in'),(21,'logo.png','image/png','5767','yuvashree.b@karmanya.co.in'),(22,'fb.gif','image/gif','1149','yuvashree.b@karmanya.co.in'),(23,'google.png','image/png','670','yuvashree.b@karmanya.co.in'),(24,'image4.jpg','image/jpeg','27212','yuvashree.b@karmanya.co.in'),(25,'image6.jpg','image/jpeg','24118','yuvashree.b@karmanya.co.in'),(26,'validate.js','application/javascript','8642','yuvashree.b@karmanya.co.in'),(27,'test.php','application/x-php','213','yuvashree.b@karmanya.co.in'),(28,'weather.php','application/x-php','2550','yuvashree.b@karmanya.co.in'),(29,'index.php','application/x-php','7674','yuvashree.b@karmanya.co.in'),(30,'forgotpassword.php','application/x-php','1883','yuvashree.b@karmanya.co.in'),(31,'connection.php','application/x-php','82','yuvashree.b@karmanya.co.in'),(32,'mail.php','application/x-php','439','yuvashree.b@karmanya.co.in'),(33,'post.php','application/x-php','1076','yuvashree.b@karmanya.co.in');
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

-- Dump completed on 2016-05-31 19:16:34
