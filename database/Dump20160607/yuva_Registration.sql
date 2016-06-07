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
-- Table structure for table `Registration`
--

DROP TABLE IF EXISTS `Registration`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Registration` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `FullName` varchar(45) DEFAULT NULL,
  `Address` varchar(255) DEFAULT NULL,
  `City` varchar(45) DEFAULT NULL,
  `State` varchar(45) DEFAULT NULL,
  `PhoneNumber` varchar(45) DEFAULT NULL,
  `Email` varchar(255) DEFAULT NULL,
  `Password` varchar(255) DEFAULT NULL,
  `CreditCard` varchar(255) DEFAULT NULL,
  `FbId` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Registration`
--

LOCK TABLES `Registration` WRITE;
/*!40000 ALTER TABLE `Registration` DISABLE KEYS */;
INSERT INTO `Registration` VALUES (1,'Yuva Shree Sriramula','','','','','yuva231292@gmail.com',NULL,'eyJpdiI6Ik1HVzJiem9zVDZwNHp5Q25YRFpVRHc9PSIsInZhbHVlIjoiaW5rZkFYam12cjhYU2pXcW54ZXVzTnpTNVNvSm9jd2loaVk5d0ZlRTA1UT0iLCJtYWMiOiI2YzNjMzQ0ZTIyNGMyOTFjNzJhZmNlMDc3YzQxODdiMWNkZTBlNWZkOThjZjQyNTM2NjU2MTlkYzhhOGYyODA3In0=','1050609355031886'),(2,'Yuva Shree Bandapally',NULL,NULL,NULL,NULL,'yuvashree.b@karmanya.co.in',NULL,NULL,'nd5UssyTlB'),(4,'kaveri nagunuri',NULL,NULL,NULL,NULL,'kaveri.nagunuri@karmanya.co.in',NULL,NULL,'X4BqAa_Fx_'),(5,'lakshmi','vr nagar','Hyderabad','Telanagana','9533801100','lprasanna537@gmail.com','8610f613419fd6fadabb5be4324d2a4a','eyJpdiI6IllSWXlwNGlTUFByZDJLMG01Y0RZTEE9PSIsInZhbHVlIjoiMjNtYURrZm9MQkRpV3VUakxKemRWOFMwWlJKM0RLTWNhUGNqNHExamZRND0iLCJtYWMiOiI0YzRlYzU5YWU3Y2NmNTViMjVjMzhkNjg5YjQwMjg3MjcyZmRlMDUxMDFmMTQ0YjBlN2FkNWU5M2ExMWZhYjAwIn0=',NULL);
/*!40000 ALTER TABLE `Registration` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2016-06-07 10:40:13
