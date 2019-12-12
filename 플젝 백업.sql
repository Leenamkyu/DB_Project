-- MySQL dump 10.13  Distrib 8.0.12, for Win64 (x86_64)
--
-- Host: localhost    Database: test
-- ------------------------------------------------------
-- Server version	8.0.12

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
 SET NAMES utf8 ;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `actor`
--

DROP TABLE IF EXISTS `actor`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `actor` (
  `a_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) NOT NULL,
  `birth` date NOT NULL,
  `gender` char(1) NOT NULL,
  `country` varchar(45) NOT NULL,
  PRIMARY KEY (`a_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `actor`
--

LOCK TABLES `actor` WRITE;
/*!40000 ALTER TABLE `actor` DISABLE KEYS */;
INSERT INTO `actor` VALUES (1,'정우성','1976-03-22','M','한국'),(2,'엘샤','2018-12-02','W','미국'),(3,'이시언','1980-07-10','M','한국'),(4,'폴리','2006-01-04','M','영국'),(5,'권상우','1984-07-25','M','한국');
/*!40000 ALTER TABLE `actor` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `actor_awards`
--

DROP TABLE IF EXISTS `actor_awards`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `actor_awards` (
  `a_id` int(11) NOT NULL,
  `m_id` int(11) NOT NULL,
  `appearance` varchar(45) NOT NULL,
  `awards` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`a_id`,`m_id`),
  CONSTRAINT `fk_actor_multivalued_actor` FOREIGN KEY (`a_id`) REFERENCES `actor` (`a_id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `actor_awards`
--

LOCK TABLES `actor_awards` WRITE;
/*!40000 ALTER TABLE `actor_awards` DISABLE KEYS */;
/*!40000 ALTER TABLE `actor_awards` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cast`
--

DROP TABLE IF EXISTS `cast`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `cast` (
  `m_id` int(11) NOT NULL,
  `a_id` int(11) NOT NULL,
  PRIMARY KEY (`m_id`,`a_id`),
  KEY `fk_movie_multivalued_movie1_idx` (`m_id`),
  KEY `fk_movie_multivalued_actor1_idx` (`a_id`),
  CONSTRAINT `fk_movie_multivalued_actor1` FOREIGN KEY (`a_id`) REFERENCES `actor` (`a_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `fk_movie_multivalued_movie1` FOREIGN KEY (`m_id`) REFERENCES `movie` (`m_id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cast`
--

LOCK TABLES `cast` WRITE;
/*!40000 ALTER TABLE `cast` DISABLE KEYS */;
/*!40000 ALTER TABLE `cast` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `director`
--

DROP TABLE IF EXISTS `director`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `director` (
  `d_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) NOT NULL,
  `birth` date NOT NULL,
  `gender` char(1) NOT NULL,
  `country` varchar(45) NOT NULL,
  PRIMARY KEY (`d_id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `director`
--

LOCK TABLES `director` WRITE;
/*!40000 ALTER TABLE `director` DISABLE KEYS */;
INSERT INTO `director` VALUES (1,'이남규','1994-01-01','M','한국'),(2,'이전제','1994-02-02','M','미국'),(4,'하정우','1994-06-06','M','태국'),(5,'김민우','1994-03-03','M','중국'),(6,'박찬욱','1994-05-05','M','한국'),(7,'이시영','1994-07-07','M','베트남'),(8,'이남규리','2019-12-06','M','한국'),(9,'황민수','2019-12-13','M','독일'),(10,'원소영','1997-02-06','W','한국');
/*!40000 ALTER TABLE `director` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `movie`
--

DROP TABLE IF EXISTS `movie`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `movie` (
  `m_id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(45) NOT NULL,
  `genre` varchar(45) NOT NULL,
  `country` varchar(45) NOT NULL,
  `running_time` int(11) NOT NULL,
  `release_date` date NOT NULL,
  `age_limit` int(11) NOT NULL,
  `d_id` int(11) NOT NULL,
  `rating` double NOT NULL,
  `opening_period` int(11) NOT NULL,
  `booking_rate` double NOT NULL,
  PRIMARY KEY (`m_id`),
  KEY `fk_movie_director1_idx` (`d_id`),
  CONSTRAINT `fk_movie_director1` FOREIGN KEY (`d_id`) REFERENCES `director` (`d_id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `movie`
--

LOCK TABLES `movie` WRITE;
/*!40000 ALTER TABLE `movie` DISABLE KEYS */;
INSERT INTO `movie` VALUES (1,'신의 한수','액션','한국',106,'2019-10-22',19,1,9.01,28,40.06),(2,'겨울왕국','애니매이션','미국',96,'2019-12-02',12,2,10,35,82.06),(4,'폴리익스프레스','애니매이션','영국',90,'2016-10-22',12,4,6.01,25,30.06),(5,'쥬만지','오락','미국',122,'2019-12-11',12,5,10,30,78.05),(6,'전제상','호러','한국',100,'2019-12-14',12,5,9.2,23,78.05);
/*!40000 ALTER TABLE `movie` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `movie_review`
--

DROP TABLE IF EXISTS `movie_review`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `movie_review` (
  `m_id` int(11) NOT NULL,
  `review` varchar(200) DEFAULT NULL,
  `r_id` varchar(45) NOT NULL,
  PRIMARY KEY (`r_id`),
  KEY `fk_movie_multivalued2_movie1` (`m_id`),
  CONSTRAINT `fk_movie_multivalued2_movie1` FOREIGN KEY (`m_id`) REFERENCES `movie` (`m_id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `movie_review`
--

LOCK TABLES `movie_review` WRITE;
/*!40000 ALTER TABLE `movie_review` DISABLE KEYS */;
/*!40000 ALTER TABLE `movie_review` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `running_movie`
--

DROP TABLE IF EXISTS `running_movie`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `running_movie` (
  `theater_name` varchar(45) NOT NULL,
  `m_id` int(11) NOT NULL,
  PRIMARY KEY (`theater_name`,`m_id`),
  KEY `fk_theater_multivalued_movie1_idx` (`m_id`),
  CONSTRAINT `fk_theater_multivalued_movie1` FOREIGN KEY (`m_id`) REFERENCES `movie` (`m_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `fk_theater_multivalued_theater1` FOREIGN KEY (`theater_name`) REFERENCES `theater` (`theater_name`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `running_movie`
--

LOCK TABLES `running_movie` WRITE;
/*!40000 ALTER TABLE `running_movie` DISABLE KEYS */;
/*!40000 ALTER TABLE `running_movie` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `screening`
--

DROP TABLE IF EXISTS `screening`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `screening` (
  `s_num` int(11) NOT NULL AUTO_INCREMENT,
  `theater_name` varchar(45) NOT NULL,
  `capacity` int(11) NOT NULL,
  PRIMARY KEY (`s_num`,`theater_name`),
  KEY `fk_screening_theater1_idx` (`theater_name`),
  CONSTRAINT `fk_screening_theater1` FOREIGN KEY (`theater_name`) REFERENCES `theater` (`theater_name`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `screening`
--

LOCK TABLES `screening` WRITE;
/*!40000 ALTER TABLE `screening` DISABLE KEYS */;
/*!40000 ALTER TABLE `screening` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `theater`
--

DROP TABLE IF EXISTS `theater`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `theater` (
  `theater_name` varchar(45) NOT NULL,
  `si_do` varchar(45) DEFAULT NULL,
  `si_gun_gu` varchar(45) DEFAULT NULL,
  `phone_number` varchar(45) NOT NULL,
  PRIMARY KEY (`theater_name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `theater`
--

LOCK TABLES `theater` WRITE;
/*!40000 ALTER TABLE `theater` DISABLE KEYS */;
INSERT INTO `theater` VALUES ('신촌 CGV','서울시',NULL,'010-1111-1111'),('신촌 메가박스','서울시',NULL,'010-2222-2222'),('영등포 cgv','서울시',NULL,'010-3333-3333'),('해운대 cgv','부산시',NULL,'010-4444-4444');
/*!40000 ALTER TABLE `theater` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2019-12-11 22:18:46
