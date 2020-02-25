-- MariaDB dump 10.17  Distrib 10.4.10-MariaDB, for Win64 (AMD64)
--
-- Host: localhost    Database: bdcolegio
-- ------------------------------------------------------
-- Server version	10.4.10-MariaDB

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
-- Table structure for table `tblestudiantes`
--

DROP TABLE IF EXISTS `tblestudiantes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tblestudiantes` (
  `tipodoc` tinyint(4) NOT NULL,
  `numero` int(12) NOT NULL,
  `f_nacimiento` date DEFAULT NULL,
  `nombre` varchar(100) NOT NULL,
  PRIMARY KEY (`numero`),
  KEY `tipodoc` (`tipodoc`),
  CONSTRAINT `tblestudiantes_ibfk_1` FOREIGN KEY (`tipodoc`) REFERENCES `tbltipodocumento` (`idtipo`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tblestudiantes`
--

LOCK TABLES `tblestudiantes` WRITE;
/*!40000 ALTER TABLE `tblestudiantes` DISABLE KEYS */;
INSERT INTO `tblestudiantes` VALUES (1,1000758088,'2002-04-25','Kevin Arias');
/*!40000 ALTER TABLE `tblestudiantes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbltipodocumento`
--

DROP TABLE IF EXISTS `tbltipodocumento`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbltipodocumento` (
  `idtipo` tinyint(4) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(30) NOT NULL,
  PRIMARY KEY (`idtipo`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbltipodocumento`
--

LOCK TABLES `tbltipodocumento` WRITE;
/*!40000 ALTER TABLE `tbltipodocumento` DISABLE KEYS */;
INSERT INTO `tbltipodocumento` VALUES (1,'Tarjeta de Identidad'),(2,'Cedula');
/*!40000 ALTER TABLE `tbltipodocumento` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2020-02-24 20:20:27
