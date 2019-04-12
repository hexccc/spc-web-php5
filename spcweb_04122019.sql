CREATE DATABASE  IF NOT EXISTS `spc_web` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `spc_web`;
-- MySQL dump 10.13  Distrib 5.7.17, for Win64 (x86_64)
--
-- Host: localhost    Database: spc_web
-- ------------------------------------------------------
-- Server version	5.7.19-log

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
-- Table structure for table `brgys`
--

DROP TABLE IF EXISTS `brgys`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `brgys` (
  `brgy_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `brgy_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `brgy_district` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `brgy_code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `brgy_chairman` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `brgy_contact` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `brgy_population` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `brgy_area` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`brgy_id`)
) ENGINE=InnoDB AUTO_INCREMENT=81 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `brgys`
--

LOCK TABLES `brgys` WRITE;
/*!40000 ALTER TABLE `brgys` DISABLE KEYS */;
INSERT INTO `brgys` VALUES (1,'Barangay I-A','1','1','Gertrudes Penalin V. Gapaz','','566',''),(2,'Barangay I-B','1','2','Ricardo B. San Diego','','4,690',''),(3,'Barangay I-C','1','3','Bernardo Q. Ramos','','5,846',''),(4,'Barangay II-A','1','4','Rodelson Himor','','2,774',''),(5,'Barangay II-B','1','5','Leonardo C. Villanueva','','2,339',''),(6,'Barangay II-C','1','6','Ramon B. Panganiban','','1,184',''),(7,'Barangay II-D','1','7','Salvador A. Gamara Jr.','','1,264',''),(8,'Barangay II-E','1','8','Nicasio V. Janolino','','2,955',''),(9,'Barangay II-F','1','9','William I. Pujanes','','2,183',''),(10,'Barangay III-A','1','10','Jocelyn M. Avanzado','','416',''),(11,'Barangay III-B','1','11','Ferdinand R. Reyes','','927',''),(12,'Barangay III-C','1','12','Restituto M. Torino','','3,047',''),(13,'Barangay III-D','1','13','Sofronio A. Reyes','','1,359',''),(14,'Barangay III-E','1','14','Romeo O. Maghirang III','','649',''),(15,'Barangay III-F','1','15','Peter S. Chan','','319',''),(16,'Barangay IV-A','1','16','Gilbert T. Ticzon','','811',''),(17,'Barangay IV-B','1','17','Ronald Allan A. De Gala','','480',''),(18,'Barangay IV-C','1','18','Adelaida L. Malabuyoc','','850',''),(19,'Barangay V-A','1','19','Reynaldo L. Castaneda','','503',''),(20,'Barangay V-B','1','20','Rosilon C. Exconde','','944',''),(21,'Barangay V-C','1','21','Marytess A. Tala','','490',''),(22,'Barangay V-D','1','22','Clarito M. Angeles','','422',''),(23,'Barangay VI-A','1','23','Ronald M. Castillo','','515',''),(24,'Barangay VI-B','1','24','Filomena P. Mendoza','','893',''),(25,'Barangay VI-C','1','25','Ernesto S. Carreon','','1,991',''),(26,'Barangay VI-D','1','26','Generoso M.Bartolome','','2,003',''),(27,'Barangay VI-E','1','27','Mauricio G. Casalme','','2,708',''),(28,'Barangay VII-A','1','28','Joel B. Katigbak','','1,767',''),(29,'Barangay VII-B','1','29','William T. Lim','','540',''),(30,'Barangay VII-C','1','30','Marvin Gerard R. Tunay','','173',''),(31,'Barangay VII-D','1','31','Carmela A. Acebedo','','83',''),(32,'Barangay VII-E','1','32','RonelioA. Mendoza','','160',''),(33,'Barangay Atisan','','','Renato M. Guevarra','','1,271',''),(34,'Barangay Bautista','4','38','Noriel D.L. Titular','','2,535',''),(35,'Barangay Concepcion','2','41','Ernesto M. Banting','','8,218',''),(36,'Barangay Del Remedio','5','46','Ronaldo A. Reyes','','4,294',''),(37,'Barangay Dolores','2','48','Fred E. Espiritu','','2,335',''),(38,'Barangay San Antonio I','7','35','Rexon U. Banaag','','4,990',''),(39,'Barangay San Antonio II','7','36','Edwin C. Alvero','','3,620',''),(40,'Barangay San Bartolome','4','37','Raymundo DL De Castro','','3,275',''),(41,'Barangay San Buenaventura','2','39','Jerry Z. Briz','','3,832',''),(42,'Bsrangay San Crispin','5','42','Juancho DM Dionglay','','3,934',''),(43,'Barangay San Cristobal','3','44','Benjamin M. Felismino II','','5,651',''),(44,'Barangay San Diego','2','47','Estelito M. Reyes','','5,368',''),(45,'Barangay San Francisco','7','51','Dandi C. Medina','','15,365',''),(46,'Barangay San Gabriel','6','52','Efren V. Janolino','','8,085',''),(47,'Barangay San Gregorio','7','53','Rene A. Calabia','','5,709',''),(48,'Barangay San Ignacio','7','55','Hernan A. Calabia','','4,700',''),(49,'Barangay San Isidro','7','56','Zoilo M. Dela Paz','','3,656',''),(50,'Barangay San Joaquin','7','57','Cristina A. Samsaman','','1,521',''),(51,'Barangay San Jose','7','58','Gener B. Amante','','7,247',''),(52,'Barangay San Juan','5','59','Aniano H. Belda','','3,578',''),(53,'Barangay San Lorenzo','2','60','Ronaldo R. Flores','','1,973',''),(54,'Barangay San Lucas I','5','61','Rommel E. Cordano','','5,538',''),(55,'Barangay San Lucas II','5','62','Eufracio L. Ciabal','','5,981',''),(56,'Barangay San Marcos','5','63','Rolando B. Cosico','','2,902',''),(57,'Barangay San Mateo','5','66','Rodelo C. Arceo','','3,016',''),(58,'Barangay San Miguel','6','57','Ericson C. Guevarra','','3,084',''),(59,'Barangay San Nicolas','5','69','Ricalinda B. Batolinao','','4,644',''),(60,'Barangay San Pedro','2','71','Macario P. Almario','','2,490',''),(61,'Barangay San Refael','5','72','Plaridel DG Dela Cruz','','3,594',''),(62,'Barangay San Roque','4','73','Trecesito T. Deogracias','','3,199',''),(63,'Barangay San Vicente','7','79','Renato P. Pasajo','','3,285',''),(64,'Barangay Sta. Ana','7','33','Edison A. Anoyo','','2,617',''),(65,'Barangay Sta. Catalina','2','40','Brigida B. Alican','','2,464',''),(66,'Barangay Sta. Cruz','7','45','Cirilo M. Motas','','2,451',''),(67,'Barangay Sta. Elena','3','49','Dorben A. Roa','','4,585',''),(68,'Barangay Sta. Felomena','5','50','Rolito C. Devanadera','','3,556',''),(69,'Barangay Sta. Isabel','2','54','Edison J. Alib','','3,378',''),(70,'Barangay Sta. Maria','6','64','Restituto H. Pere','','3,413',''),(71,'Barangay Sta. Maria Magdalena','5','65','Carmelita A. Amante','','2,517',''),(72,'Barangay Sta. Monica','4','68','Daniel M. Asejo','','7,532',''),(73,'Barangay Sta. Veronica','4','78','Proceso B. Manalo','','1,596',''),(74,'Barangay Santiago I','4','75','Ariel M. Diangkinay','','2,144',''),(75,'Barangay Santiago II','4','76','Mario B. Flores','','3,142',''),(76,'Barangay Santisimo Rosario','6','74','Cresenciana G. Calabia','','4,693',''),(77,'Barangay Sto. Angel','2','34','Cesarito C. Ticzon','','9,094',''),(78,'Barangay Sto. Cristo','7','43','Eduardo R. Ruidera','','3,199',''),(79,'Barangay Sto. Nino','3','70','Ernesto R. Quezada','','4,315',''),(80,'Barangay Soledad','6','77','Romeo E. Gonzales','','2,566','');
/*!40000 ALTER TABLE `brgys` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `clients`
--

DROP TABLE IF EXISTS `clients`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `clients` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `fname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `province` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `zip_code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `business_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `clients`
--

LOCK TABLES `clients` WRITE;
/*!40000 ALTER TABLE `clients` DISABLE KEYS */;
/*!40000 ALTER TABLE `clients` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (9,'2014_10_12_000000_create_users_table',1),(10,'2014_10_12_100000_create_password_resets_table',1),(11,'2018_12_12_064020_create_registrtion',1),(12,'2019_04_10_195425_barangay_list',1);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `password_resets`
--

LOCK TABLES `password_resets` WRITE;
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping routines for database 'spc_web'
--
/*!50003 DROP PROCEDURE IF EXISTS `get_brgys_ls` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8 */ ;
/*!50003 SET character_set_results = utf8 */ ;
/*!50003 SET collation_connection  = utf8_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'STRICT_TRANS_TABLES,NO_AUTO_CREATE_USER,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `get_brgys_ls`()
BEGIN
	SELECT * FROM spc_web.brgys;
END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2019-04-12 13:55:15
