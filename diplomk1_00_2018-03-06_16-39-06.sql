-- MySQL dump 10.14  Distrib 5.5.56-MariaDB, for Linux (x86_64)
--
-- Host: srv-pleskdb28.ps.kz    Database: diplomk1_00
-- ------------------------------------------------------
-- Server version	5.5.56-MariaDB

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
-- Current Database: `diplomk1_00`
--


--
-- Table structure for table `forprepod`
--

DROP TABLE IF EXISTS `forprepod`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `forprepod` (
  `id` int(11) NOT NULL,
  `ych` text NOT NULL,
  `prepod` text NOT NULL,
  `prim` text NOT NULL,
  `url` text NOT NULL,
  `mark` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `forprepod`
--

LOCK TABLES `forprepod` WRITE;
/*!40000 ALTER TABLE `forprepod` DISABLE KEYS */;
INSERT INTO `forprepod` VALUES (2,'Ярмухаметов Карим','admin1','Я закончил','homeworks/finished/2017_Matiematika_1-gh.xlsx',''),(3,'ученик 1','www','111','homeworks/finished/Документ Microsoft Word (2) (1).docx','5'),(4,'ученик 1','t1','','homeworks/finished/1.xlsx','3'),(5,'ученик 1','t1','','homeworks/finished/(1)1.xlsx','3'),(6,'ученик 1','Рамазанова Алия','','homeworks/finished/1.png',''),(7,'ученик 1','Рамазанова Алия','понял тему на 50%','homeworks/finished/(1)1.png',''),(8,'ученик 2','t2','jikjik','homeworks/finished/График работы технички.docx','5');
/*!40000 ALTER TABLE `forprepod` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `forych`
--

DROP TABLE IF EXISTS `forych`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `forych` (
  `id` int(11) NOT NULL,
  `ych` text NOT NULL,
  `prepod` text NOT NULL,
  `prim` text NOT NULL,
  `url` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `forych`
--

LOCK TABLES `forych` WRITE;
/*!40000 ALTER TABLE `forych` DISABLE KEYS */;
INSERT INTO `forych` VALUES (2,'u1','www','111','homeworks/notstarted/Документ Microsoft Word (2).docx'),(3,'u1','учитель 1','','homeworks/notstarted/1.xlsx'),(4,'u1','учитель 1','','homeworks/notstarted/(1)1.xlsx'),(5,'u1','Рамазанова Алия Жексембаевна','','homeworks/notstarted/1.png'),(6,'Alixan','Рамазанова Алия Жексембаевна','','homeworks/notstarted/Безымянный.png'),(7,'u2','учитель 2','swdww','homeworks/notstarted/Новый текстовый документ.txt'),(8,'u2','учитель 2','ghfghfghfghgfhfghf','homeworks/notstarted/1.docx');
/*!40000 ALTER TABLE `forych` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `login` text NOT NULL,
  `password` text NOT NULL,
  `type` text NOT NULL,
  `fio` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (0,'','','0',''),(1,'admin','admin','1','Администратор'),(3,'t2','t2','2','учитель 2'),(4,'t3','t3','2','учитель 3'),(6,'u2','u2','3','ученик 2'),(7,'u3','u3','3','ученик 3'),(10,'123','123','2','123'),(11,'www','www','2','www'),(12,'pre','pre','2','pre'),(13,'Alixan','alixan','3','Рамазанов Алихан Нариманович'),(14,'Aliya','Aliya','2','Рамазанова Алия Жексембаевна');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `zanyatie`
--

DROP TABLE IF EXISTS `zanyatie`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `zanyatie` (
  `id` int(11) NOT NULL,
  `ych` text NOT NULL,
  `prepod` text NOT NULL,
  `prim` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `zanyatie`
--

LOCK TABLES `zanyatie` WRITE;
/*!40000 ALTER TABLE `zanyatie` DISABLE KEYS */;
INSERT INTO `zanyatie` VALUES (6,'Карим','admin1','Четверг'),(7,'u1','123','123'),(9,'u1','www','математика'),(10,'u1','t1','1'),(11,'u1','t1','2'),(12,'u1','t1','3'),(13,'u1','t1',''),(14,'u1','t1',''),(15,'u2','t2','hgfjhgjhgjgg'),(16,'u1','Рамазанова Алия',''),(17,'u1','Рамазанова Алия',''),(18,'u1','Рамазанова Алия','урок 1'),(19,'u1','Рамазанова Алия','урок 1'),(20,'Alixan','Aliya','урок 1'),(21,'u2','t2','dgdgd');
/*!40000 ALTER TABLE `zanyatie` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-03-06 16:39:29

