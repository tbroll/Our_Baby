@@ -1,184 +0,0 @@
--
-- Host: localhost    Database: application
-- ------------------------------------------------------
-- Server version	5.1.56-log

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
-- Table structure for table `Student`
--

DROP TABLE IF EXISTS `Student`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Student` (
  `fname` varchar(120) NOT NULL DEFAULT '0',
  `lname` varchar(120) NOT NULL DEFAULT '0',
  `S_ID` varchar(10) DEFAULT NULL,
  `address` varchar(120) DEFAULT NULL,
  `phone` varchar(10) DEFAULT NULL,
  `city` varchar(30) DEFAULT '0',
  `sta` varchar(30) DEFAULT '0',
  `zip` varchar(6) DEFAULT '0',
  `birth_date` varchar(10) DEFAULT '0',
  `citizenship` varchar(70) DEFAULT '0',
  `email` varchar(100) DEFAULT '0',
  `expected_grad` varchar(12) DEFAULT '0',
  PRIMARY KEY (`S_ID`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;


--
-- Table structure for table `Major`
--

DROP TABLE IF EXISTS `Major`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Major` (
  `major` varchar(60) NOT NULL DEFAULT '0',
  `S_ID` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`S_ID`,`major`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;


--
-- Table structure for table `Minor`
--

DROP TABLE IF EXISTS `Minor`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Minor` (
  `minor` varchar(60) NOT NULL DEFAULT '0',
  `S_ID` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`S_ID`, `minor`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;


--
-- Table structure for table `Activities`
--

DROP TABLE IF EXISTS `Activities`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Activities` (
  `S_ID` varchar(10) DEFAULT NULL,
  `activity` varchar(60) NOT NULL DEFAULT '0',
  `time_per_week` varchar(60) NOT NULL DEFAULT '0',
  PRIMARY KEY (`S_ID`, `activity`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;


--
-- Table structure for table `Courses`
--

DROP TABLE IF EXISTS `Courses`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Courses` (
  `S_ID` varchar(10) DEFAULT NULL,
  `course_num` varchar(10) NOT NULL DEFAULT '0',
  `name` varchar(70) NOT NULL DEFAULT '0',
  `term` varchar(10) NOT NULL DEFAULT '0',
  `grade` varchar(3) NOT NULL DEFAULT '0',
  `instructor` varchar(90) NOT NULL DEFAULT '0',
  `rep` boolean NOT NULL DEFAULT '0',
  PRIMARY KEY (`S_ID`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;


--
-- Table structure for table `Skills`
--

DROP TABLE IF EXISTS `Skills`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Skills` (
  `S_ID` varchar(40) DEFAULT NULL,
  `skill` varchar(60) NOT NULL DEFAULT '0',
  `Rate` int NOT NULL DEFAULT '0',
  PRIMARY KEY (`S_ID`, `skill`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;


--
-- Table structure for table `WorkInfo`
--

DROP TABLE IF EXISTS `WorkInfo`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `WorkInfo` (
  `S_ID` varchar(40) DEFAULT NULL,
  `summer` boolean NOT NULL DEFAULT '0',
  `hours` boolean NOT NULL DEFAULT '0',
  `oncampus` boolean NOT NULL DEFAULT '0',
  `practicum` boolean NOT NULL DEFAULT '0',
  PRIMARY KEY (`S_ID`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;


--
-- Table structure for table `EverOnCamp`
--

DROP TABLE IF EXISTS `EverOnCamp`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `EverOnCamp` (
  `S_ID` varchar(40) DEFAULT NULL,
  `evercamp` boolean NOT NULL DEFAULT '0',
  PRIMARY KEY (`S_ID`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;



--
-- Table structure for table `OnCampusWhere`
--

DROP TABLE IF EXISTS `OnCampusWhere`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `OnCampusWhere` (
  `S_ID` varchar(40) DEFAULT NULL,
  `whereoncamp` varchar(50) NOT NULL DEFAULT '0',
  PRIMARY KEY (`S_ID`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;


--
-- Table structure for table `Practicum`
--

DROP TABLE IF EXISTS `Practicum`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Practicum` (
  `S_ID` varchar(40) DEFAULT NULL,
  `practicum` varchar(50) NOT NULL DEFAULT '0',
  PRIMARY KEY (`S_ID`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;
