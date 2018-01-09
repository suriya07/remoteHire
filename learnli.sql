-- MySQL dump 10.13  Distrib 5.7.10, for Win64 (x86_64)
--
-- Host: localhost    Database: learnli
-- ------------------------------------------------------
-- Server version	5.7.10-log

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
-- Table structure for table `about_company_info`
--

DROP TABLE IF EXISTS `about_company_info`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `about_company_info` (
  `COMPANY_ID` varchar(12) NOT NULL,
  `COMPANY_LOCATION` varchar(50) DEFAULT NULL,
  `COMPANY_TYPE` varchar(50) DEFAULT NULL,
  `COMPANY_SIZE` varchar(100) DEFAULT NULL,
  `COMPANY_DESCRIPTION` text,
  `COMPANY_TWITTER_URL` varchar(100) DEFAULT NULL,
  `COMPANY_FACEBOOK_URL` varchar(100) DEFAULT NULL,
  `COMPANY_LINKEDIN_URL` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`COMPANY_ID`),
  UNIQUE KEY `COMPANY_ID` (`COMPANY_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `about_company_info`
--

LOCK TABLES `about_company_info` WRITE;
/*!40000 ALTER TABLE `about_company_info` DISABLE KEYS */;
INSERT INTO `about_company_info` VALUES ('COMP_1','Chennai','E-Commerce','2','Vembu is a leading provider of a portfolio of software products and cloud services to small and medium businesses for more than a decade. Vembu’s vision is to make software and cloud services very affordable for the hundreds of thousands of small and medium businesses worldwide.\nVembu’s flagship offering is the BDR Suite of products meant for on-premise, offsite, cloud backup and disaster recovery across diverse IT environments including physical, virtual, applications and endpoints.\n\nSince 2002, Vembu’s industry-recognized data protection solutions have delivered tangible value to more than 60,000 businesses worldwide through a network of 4000+ partners (MSPs/VARs & Resellers).','https://twitter.com/profasee','https://facebook.com/profasee','https://linkedin.com/profasee');
/*!40000 ALTER TABLE `about_company_info` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `company_job_info`
--

DROP TABLE IF EXISTS `company_job_info`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `company_job_info` (
  `COMPANY_ID` varchar(12) NOT NULL,
  `JOB_ID` varchar(12) NOT NULL,
  `JOB_TITLE` varchar(50) DEFAULT NULL,
  `JOB_DESCRIPTION` text,
  `JOB_TYPE` int(11) DEFAULT NULL,
  `JOB_ROLE` varchar(200) DEFAULT NULL,
  `JOB_EXPERIENCE` int(11) DEFAULT NULL,
  `JOB_SKILLS` varchar(200) DEFAULT NULL,
  `JOB_LOCATION` varchar(50) DEFAULT NULL,
  `MIN_SAL` int(11) DEFAULT NULL,
  `MAX_SAL` int(11) DEFAULT NULL,
  `STATUS` int(11) DEFAULT NULL,
  `DATE_POSTED` int(11) DEFAULT NULL,
  `DATE_UPDATED` int(11) DEFAULT NULL,
  PRIMARY KEY (`COMPANY_ID`,`JOB_ID`),
  UNIQUE KEY `JOB_ID` (`JOB_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `company_job_info`
--

LOCK TABLES `company_job_info` WRITE;
/*!40000 ALTER TABLE `company_job_info` DISABLE KEYS */;
INSERT INTO `company_job_info` VALUES ('COMP_1','1','Product Analyst','Job description\r\n\r\nProduct analyst is responsible to carry out thorough market research and competitors’ research\r\nPreparing detailed requirement specification for the product development team, based on their research by analysing the competition and discussions with product experts and customers\r\nWork with Product Managers and other stakeholders in promoting products to improve sales and revenue\r\nWork with the quality assurance team to ensure that delivered product is properly tested and meets the customer requirements by executing the pre-release product testing\r\nWork with sales and sales engineering teams to help them on sales scripts, product demo\r\nAbility to write technical articles, user guides, product datasheets, presentations, training materials and etc\r\nAssist the leads in the deployment of new products\r\nDesired Skills\r\n\r\nExcellent written and verbal communication\r\nStrong analytical and exceptional problem solving skills\r\nAbility to multitask, stick to timelines and prioritize tasks accordingly\r\nWilling to learn new technologies\r\nClosely work with the Marketing, Sales, Support and Engineering teams\r\nNice to have\r\n\r\nKnowledge in virtualization technologies, cloud computing, business continuity and storage concepts',1,'UI/UX Designer',0,'virtualization technologies, cloud computing, business continuity and storage ','Chennai',5,6,0,1514183276,1514183276);
/*!40000 ALTER TABLE `company_job_info` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `company_login_info`
--

DROP TABLE IF EXISTS `company_login_info`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `company_login_info` (
  `USER_FNAME` varchar(50) DEFAULT NULL,
  `USER_LNAME` varchar(50) DEFAULT NULL,
  `COMPANY_NAME` varchar(100) DEFAULT NULL,
  `COMPANY_WEBURL` varchar(100) DEFAULT NULL,
  `EMAIL` varchar(100) NOT NULL,
  `SIGNUPUSR_ROLE` int(11) DEFAULT NULL,
  `PHONE` bigint(20) DEFAULT NULL,
  `PASSWORD` varchar(40) DEFAULT NULL,
  `STATUS` int(11) DEFAULT NULL,
  `COMPANY_ID` varchar(12) NOT NULL,
  `ACCOUNT_CREATED_TIME` int(11) DEFAULT NULL,
  `LAST_LOGIN_TIME` int(11) DEFAULT NULL,
  `IS_EMAIL_VERFIED` int(11) DEFAULT NULL,
  PRIMARY KEY (`COMPANY_ID`,`EMAIL`),
  UNIQUE KEY `COMPANY_ID` (`COMPANY_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `company_login_info`
--

LOCK TABLES `company_login_info` WRITE;
/*!40000 ALTER TABLE `company_login_info` DISABLE KEYS */;
INSERT INTO `company_login_info` VALUES ('Vishnu','Prakash','profasee','https://profasee.com','prakas.vishnu@profasee.com',2,9876543210,'tester',1,'COMP_1',1513192451,1513192451,0);
/*!40000 ALTER TABLE `company_login_info` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `predefine_list`
--

DROP TABLE IF EXISTS `predefine_list`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `predefine_list` (
  `SKILL_ID` int(11) DEFAULT NULL,
  `SKILL_NAME` varchar(20) DEFAULT NULL,
  `LOCATION_ID` int(11) DEFAULT NULL,
  `LOCATION` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `predefine_list`
--

LOCK TABLES `predefine_list` WRITE;
/*!40000 ALTER TABLE `predefine_list` DISABLE KEYS */;
INSERT INTO `predefine_list` VALUES (1,'HTML',NULL,NULL),(2,'HTML5',NULL,NULL),(3,'CSS',NULL,NULL),(4,'CSS3',NULL,NULL),(5,'Javascript',NULL,NULL),(6,'C',NULL,NULL),(7,'C++',NULL,NULL),(8,'Java',NULL,NULL),(9,'.NET',NULL,NULL),(10,'Python',NULL,NULL),(11,'Ruby',NULL,NULL),(12,'C#',NULL,NULL),(13,'SQL',NULL,NULL),(14,'MySQL',NULL,NULL),(15,'ReactJS',NULL,NULL),(16,'NodeJS',NULL,NULL),(17,'AngularJS',NULL,NULL),(18,'PHP',NULL,NULL),(19,'Android',NULL,NULL),(20,'iOS',NULL,NULL),(21,'Perl',NULL,NULL),(22,'Go',NULL,NULL),(23,'XML',NULL,NULL),(24,'JSON',NULL,NULL),(25,'AJAX',NULL,NULL),(26,'Jquery',NULL,NULL);
/*!40000 ALTER TABLE `predefine_list` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `profile_id_generator`
--

DROP TABLE IF EXISTS `profile_id_generator`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `profile_id_generator` (
  `LAST_USED_USRID` varchar(50) DEFAULT NULL,
  `LAST_USED_CMPID` varchar(50) DEFAULT NULL,
  `NEXT_USR_ID` int(11) DEFAULT NULL,
  `USER_COMPANY_ID` int(11) DEFAULT NULL,
  `USER_EXPERIENCE_ID` int(11) DEFAULT NULL,
  `USER_EDUCATION_ID` int(11) DEFAULT NULL,
  `NEXT_CMP_ID` int(11) DEFAULT NULL,
  `JOB_SEQ_ID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `profile_id_generator`
--

LOCK TABLES `profile_id_generator` WRITE;
/*!40000 ALTER TABLE `profile_id_generator` DISABLE KEYS */;
INSERT INTO `profile_id_generator` VALUES ('CAN_2','0',3,1,28,2,2,1);
/*!40000 ALTER TABLE `profile_id_generator` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user_company_info`
--

DROP TABLE IF EXISTS `user_company_info`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user_company_info` (
  `USER_ID` varchar(12) NOT NULL,
  `USER_COMPANY_ID` int(11) DEFAULT NULL,
  `COMPANY_ID` varchar(255) DEFAULT NULL,
  `COMPANY_NAME` varchar(255) DEFAULT NULL,
  `COMPANY_LOCATION` varchar(255) DEFAULT NULL,
  `ROLE_H1` varchar(255) DEFAULT NULL,
  `ROLE_DESCRIPTION` text,
  `COMPANY_WORKED_FROM` date DEFAULT NULL,
  `COMPANY_WORKED_TILL` date DEFAULT NULL,
  `EXPERIENCE_IN_YRS` int(11) DEFAULT NULL,
  `EXPERIENCE_IN_MONTHS` int(11) DEFAULT NULL,
  `IS_CURRENT_COMPANY` int(11) DEFAULT NULL,
  UNIQUE KEY `USER_ID_2` (`USER_ID`,`USER_COMPANY_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user_company_info`
--

LOCK TABLES `user_company_info` WRITE;
/*!40000 ALTER TABLE `user_company_info` DISABLE KEYS */;
INSERT INTO `user_company_info` VALUES ('CAN_1',3,NULL,'Vembu Technologies Pvt Ltd','Chennai','Lead Engineer',NULL,'2015-02-01',NULL,NULL,NULL,1),('CAN_1',4,NULL,'Vembu Tehnologies Pvt Ltd','Chennai','Senior Software Engineer',NULL,'2013-07-01','2015-01-01',1,6,NULL),('CAN_1',5,NULL,'Vembu Technologies Pvt Ltd','Chennai','Software Engineer',NULL,'2011-02-01','2013-06-01',2,4,NULL),('CAN_2',1,NULL,'HCL Technology','India','Lead Engineer',NULL,NULL,NULL,NULL,NULL,NULL);
/*!40000 ALTER TABLE `user_company_info` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user_education_info`
--

DROP TABLE IF EXISTS `user_education_info`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user_education_info` (
  `USER_ID` varchar(12) DEFAULT NULL,
  `USER_EDUCATION_ID` int(11) NOT NULL,
  `INSTITUTION_ID` varchar(255) DEFAULT NULL,
  `INSTITUTION_NAME` varchar(255) DEFAULT NULL,
  `INSTITUTION_TITLE` varchar(255) DEFAULT NULL,
  `EDUCATION_FIELD` varchar(255) DEFAULT NULL,
  `STUDIED_FROM` date DEFAULT NULL,
  `STUDIED_TILL` date DEFAULT NULL,
  PRIMARY KEY (`USER_EDUCATION_ID`),
  UNIQUE KEY `USER_EDUCATION_ID` (`USER_EDUCATION_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user_education_info`
--

LOCK TABLES `user_education_info` WRITE;
/*!40000 ALTER TABLE `user_education_info` DISABLE KEYS */;
INSERT INTO `user_education_info` VALUES ('CAN_1',1,NULL,'SASTRA UNIVERSITY','B.Tech','Electronics and Communication Engineering','2005-05-01','2009-06-01'),('CAN_1',2,NULL,'Chirst The King Matriculation School','XII','','2004-06-01','2005-04-01');
/*!40000 ALTER TABLE `user_education_info` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user_experience_info`
--

DROP TABLE IF EXISTS `user_experience_info`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user_experience_info` (
  `USER_ID` varchar(12) DEFAULT NULL,
  `USER_EXPERIENCE_ID` int(11) NOT NULL,
  `SKILL_ID` varchar(255) DEFAULT NULL,
  `SKILL_NAME` varchar(255) DEFAULT NULL,
  `SKILL_FROM` date DEFAULT NULL,
  `SKILL_TILL` date DEFAULT NULL,
  `EXPERIENCE_IN_YRS` int(11) DEFAULT NULL,
  `EXPERIENCE_IN_MONTHS` int(11) DEFAULT NULL,
  PRIMARY KEY (`USER_EXPERIENCE_ID`),
  UNIQUE KEY `USER_EXPERIENCE_ID` (`USER_EXPERIENCE_ID`),
  UNIQUE KEY `USER_ID` (`USER_ID`,`SKILL_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user_experience_info`
--

LOCK TABLES `user_experience_info` WRITE;
/*!40000 ALTER TABLE `user_experience_info` DISABLE KEYS */;
INSERT INTO `user_experience_info` VALUES ('CAN_1',1,NULL,'PHP',NULL,NULL,NULL,NULL),('CAN_1',2,NULL,'HTML',NULL,NULL,NULL,NULL),('CAN_1',3,NULL,'CSS',NULL,NULL,NULL,NULL),('CAN_1',4,NULL,'CSS3',NULL,NULL,NULL,NULL),('CAN_1',5,NULL,'HTML5',NULL,NULL,NULL,NULL),('CAN_1',6,NULL,'AngularJS',NULL,NULL,NULL,NULL),('CAN_2',7,NULL,'C  ',NULL,NULL,NULL,NULL),('CAN_2',8,NULL,'C  ',NULL,NULL,NULL,NULL),('CAN_2',9,NULL,'Java',NULL,NULL,NULL,NULL),('CAN_2',10,NULL,'C  ',NULL,NULL,NULL,NULL),('CAN_1',15,'7','C++',NULL,NULL,NULL,NULL),('CAN_1',16,'18','PHP',NULL,NULL,NULL,NULL),('CAN_1',18,'5','Javascript',NULL,NULL,NULL,NULL),('CAN_1',19,'19','Android',NULL,NULL,NULL,NULL),('CAN_1',20,'12','C#',NULL,NULL,NULL,NULL),('CAN_1',21,'15','ReactJS',NULL,NULL,NULL,NULL),('CAN_1',22,'11','Ruby',NULL,NULL,NULL,NULL),('CAN_1',23,'20','iOS',NULL,NULL,NULL,NULL),('CAN_1',24,'25','AJAX',NULL,NULL,NULL,NULL),('CAN_1',25,'24','JSON',NULL,NULL,NULL,NULL),('CAN_1',26,'4','CSS3',NULL,NULL,NULL,NULL),('CAN_1',27,'10','Python',NULL,NULL,NULL,NULL),('CAN_1',28,NULL,'',NULL,NULL,NULL,NULL);
/*!40000 ALTER TABLE `user_experience_info` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user_login_info`
--

DROP TABLE IF EXISTS `user_login_info`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user_login_info` (
  `USER_FNAME` varchar(50) DEFAULT NULL,
  `USER_LNAME` varchar(50) DEFAULT NULL,
  `PROFILE_SUMMARY` text,
  `EMAIL` varchar(100) NOT NULL,
  `PHONE` bigint(20) DEFAULT NULL,
  `PASSWORD` varchar(40) DEFAULT NULL,
  `STATUS` int(11) DEFAULT NULL,
  `USER_ID` varchar(12) NOT NULL,
  `ACCOUNT_CREATED_TIME` int(11) DEFAULT NULL,
  `LAST_LOGIN_TIME` int(11) DEFAULT NULL,
  `IS_EMAIL_VERFIED` int(11) DEFAULT NULL,
  PRIMARY KEY (`USER_ID`,`EMAIL`),
  UNIQUE KEY `USER_ID` (`USER_ID`),
  UNIQUE KEY `EMAIL` (`EMAIL`,`PHONE`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user_login_info`
--

LOCK TABLES `user_login_info` WRITE;
/*!40000 ALTER TABLE `user_login_info` DISABLE KEYS */;
INSERT INTO `user_login_info` VALUES ('Suriya','Prakash','A Lead Engineer in Vembu Technologies (P) Ltd with 5+ years of experience in Software development. Actively involved in all phases of SDLC - Analysis, Design, Development, Implementation, Testing and maintenance of Applications\r\n\r\n•	A Lead Engineer in Vembu Technologies (P) Ltd  with 4.5+ years of experience in Software development and 1.5 years in Software testing. Actively involved in all phases of SDLC - Analysis, Design, Development, Implementation, Testing and maintenance of Applications.\r\n•	Developed front end client side and server side for backup product using PHP, MySQL, HTML, CSS, JavaScript, jQuery.\r\n•	Self-starter and able to work independently or as part of a team.\r\n•	Handled the support for backup disaster recovery product and assisted customers with prompt solutions.\r\n•	Developed a self-project for posting and searching remote working jobs around  the world - http://worknremote.com\r\n','suriya227@gmail.com',9677046049,'tester',1,'CAN_1',1512358662,1512358662,0),('Suriya','Prakash','','ramasamy.vignesh@gmail.com',9894586745,'Welcome123!',1,'CAN_2',1513055504,1513055504,0);
/*!40000 ALTER TABLE `user_login_info` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-01-09 22:43:44
