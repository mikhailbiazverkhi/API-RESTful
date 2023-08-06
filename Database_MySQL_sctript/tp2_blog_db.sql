-- MySQL dump 10.13  Distrib 8.0.33, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: tp2_blog_db
-- ------------------------------------------------------
-- Server version	8.0.33

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `article`
--

DROP TABLE IF EXISTS `article`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `article` (
  `id` int NOT NULL AUTO_INCREMENT,
  `titre` varchar(200) NOT NULL,
  `image` longtext NOT NULL,
  `categorie` varchar(45) NOT NULL,
  `contenu` longtext NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `article`
--

LOCK TABLES `article` WRITE;
/*!40000 ALTER TABLE `article` DISABLE KEYS */;
INSERT INTO `article` VALUES (2,'Five Things','http://lablogbeaute.co.uk/wp-content/uploads/2016/07/camping.jpg','camping','Camping'),(3,'El Mouradi Mahdia','http://lablogbeaute.co.uk/wp-content/uploads/2016/07/camping.jpg','hotels','lo'),(5,'Test2','http://lablogbeaute.co.uk/wp-content/uploads/2016/07/camping.jpg','chalets','sdvsd'),(8,'Test Article','https://static.wikia.nocookie.net/zelda_gamepedia_en/images/2/29/OoT_Link_Artwork.png/revision/latest/scale-to-width-down/320?cb=20120304192937','conte','Livre'),(9,'Test Article','https://static.wikia.nocookie.net/zelda_gamepedia_en/images/2/29/OoT_Link_Artwork.png/revision/latest/scale-to-width-down/320?cb=20120304192937','conte','Livre'),(11,'Test Article1','https://static.wikia.nocookie.net/zelda_gamepedia_en/images/2/29/OoT_Link_Artwork.png/revision/latest/scale-to-width-down/320?cb=20120304192937','conte','Livre'),(12,'Test Article1','https://static.wikia.nocookie.net/zelda_gamepedia_en/images/2/29/OoT_Link_Artwork.png/revision/latest/scale-to-width-down/320?cb=20120304192937','conte','Livre'),(13,'Test Article1','https://static.wikia.nocookie.net/zelda_gamepedia_en/images/2/29/OoT_Link_Artwork.png/revision/latest/scale-to-width-down/320?cb=20120304192937','conte','Livre'),(14,'Test Article1','https://static.wikia.nocookie.net/zelda_gamepedia_en/images/2/29/OoT_Link_Artwork.png/revision/latest/scale-to-width-down/320?cb=20120304192937','conte','Livre'),(16,'','https://static.wikia.nocookie.net/zelda_gamepedia_en/images/2/29/OoT_Link_Artwork.png/revision/latest/scale-to-width-down/320?cb=20120304192937','conte','Livre'),(17,'Test Article1','https://static.wikia.nocookie.net/zelda_gamepedia_en/images/2/29/OoT_Link_Artwork.png/revision/latest/scale-to-width-down/320?cb=20120304192937','conte','Livre'),(26,'VVV','https://static.wikia.nocookie.net/zelda_gamepedia_en/images/2/29/OoT_Link_Artwork.png/revision/latest/scale-to-width-down/320?cb=20120304192937','conte','Livre'),(28,'Good+++++++++++++++','https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRJMt2ZekJhHekFkGZshiBttaALGTfzrf-AYQ&usqp=CAU','LivreBook','Wow'),(29,'Good+++++++++++++++','wwwhttps://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRJMt2ZekJhHekFkGZshiBttaALGTfzrf-AYQ&usqp=CAU','LivreBook','WowWowWow');
/*!40000 ALTER TABLE `article` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2023-08-06  8:44:23
