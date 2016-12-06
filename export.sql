-- MySQL dump 10.13  Distrib 5.7.13, for Linux (x86_64)
--
-- 
-- ------------------------------------------------------
-- Server version	5.7.13

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
-- Table structure for table `error_reportings`
--

DROP TABLE IF EXISTS `error_reportings`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `error_reportings` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `strDescripcion` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `error_reportings`
--

LOCK TABLES `error_reportings` WRITE;
/*!40000 ALTER TABLE `error_reportings` DISABLE KEYS */;
/*!40000 ALTER TABLE `error_reportings` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `languages`
--

DROP TABLE IF EXISTS `languages`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `languages` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `strNombre` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `strDescripcion` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `languages_strnombre_unique` (`strNombre`),
  UNIQUE KEY `languages_strdescripcion_unique` (`strDescripcion`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `languages`
--

LOCK TABLES `languages` WRITE;
/*!40000 ALTER TABLE `languages` DISABLE KEYS */;
INSERT INTO `languages` VALUES (1,'es','español',NULL,NULL);
/*!40000 ALTER TABLE `languages` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (11,'2016_11_01_173206_create_sectors_table',1),(12,'2016_11_02_173213_create_servicios_table',1),(13,'2016_11_21_172900_create_preguntas_y_comentarios_table',1),(14,'2016_11_21_172955_create_languages_table',1),(15,'2016_11_21_173036_create_error_reportings_table',1),(16,'2016_11_21_173153_create_ubicacions_table',1),(17,'2016_11_22_000000_create_users_table',1),(18,'2016_11_22_100000_create_password_resets_table',1),(19,'2016_11_23_173107_create_servicio_solicitados_table',1),(20,'2016_11_23_173131_create_servicio_buscados_table',1);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`),
  KEY `password_resets_token_index` (`token`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `password_resets`
--

LOCK TABLES `password_resets` WRITE;
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `preguntas_y_comentarios`
--

DROP TABLE IF EXISTS `preguntas_y_comentarios`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `preguntas_y_comentarios` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `strNombre` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `strEmail` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `strMessage` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `preguntas_y_comentarios`
--

LOCK TABLES `preguntas_y_comentarios` WRITE;
/*!40000 ALTER TABLE `preguntas_y_comentarios` DISABLE KEYS */;
/*!40000 ALTER TABLE `preguntas_y_comentarios` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sectors`
--

DROP TABLE IF EXISTS `sectors`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sectors` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `strDescripcion` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `sectors_strdescripcion_unique` (`strDescripcion`)
) ENGINE=InnoDB AUTO_INCREMENT=63 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sectors`
--

LOCK TABLES `sectors` WRITE;
/*!40000 ALTER TABLE `sectors` DISABLE KEYS */;
INSERT INTO `sectors` VALUES (1,'Aeroespacial',NULL,NULL),(2,'Agroindustrial',NULL,NULL),(3,'Agropecuario y Pesca',NULL,NULL),(4,'Apoyo a los Negocios',NULL,NULL),(5,'Automotriz',NULL,NULL),(6,'Automotriz y Autopartes',NULL,NULL),(7,'Biomasa',NULL,NULL),(8,'Biotecnología',NULL,NULL),(9,'Biotecnología Marina',NULL,NULL),(10,'Biotecnología y Alimentos',NULL,NULL),(11,'Cinematográfico',NULL,NULL),(12,'Comunicación y Medios',NULL,NULL),(13,'Cuero-Calzado Proveduría',NULL,NULL),(14,'Diseño y Moda',NULL,NULL),(15,'Educación',NULL,NULL),(16,'Electrodomésticos',NULL,NULL),(17,'Electrónicos',NULL,NULL),(18,'Electrónicos y Productos Electrónicos',NULL,NULL),(19,'Energía Renovable',NULL,NULL),(20,'Energía Verdes y Alternativas',NULL,NULL),(21,'Energías Alternativas',NULL,NULL),(22,'Equipo Médico',NULL,NULL),(23,'Equipo y Servicio Aeroespacial',NULL,NULL),(24,'Farmacéuticos y Cosméticos',NULL,NULL),(25,'Gobierno',NULL,NULL),(26,'Gourmet',NULL,NULL),(27,'Industria Creativa',NULL,NULL),(28,'Industria Cultural',NULL,NULL),(29,'Industria Electrónica',NULL,NULL),(30,'Industrial Naval',NULL,NULL),(31,'Innovación',NULL,NULL),(32,'Logístico / Logística',NULL,NULL),(33,'Maquinaria y Equipo',NULL,NULL),(34,'Metalmecánica',NULL,NULL),(35,'Minería',NULL,NULL),(36,'Minería y Productos no Metálicos',NULL,NULL),(37,'Moda',NULL,NULL),(38,'Muebles y Decoración',NULL,NULL),(39,'Productos Agropecuarios y Agrícolas',NULL,NULL),(40,'Productos Biofarmacéticos',NULL,NULL),(41,'Productos de Madera',NULL,NULL),(42,'Productos de Madera Biomasa',NULL,NULL),(43,'Productos de Plástico',NULL,NULL),(44,'Productos para la Construcción',NULL,NULL),(45,'Productos Químicos',NULL,NULL),(46,'Productos Químicos y Petroquímicos',NULL,NULL),(47,'Puertos',NULL,NULL),(48,'Químicos y petroquímicos',NULL,NULL),(49,'Restaurantes',NULL,NULL),(50,'Robótica',NULL,NULL),(51,'Servicios de Información',NULL,NULL),(52,'Servicios de Investigación',NULL,NULL),(53,'Servicios de Salud',NULL,NULL),(54,'Servicios Financieros Especializados',NULL,NULL),(55,'Servicios Médicos',NULL,NULL),(56,'Servicios Profesionales de Investigación e Innovación',NULL,NULL),(57,'Tecnologías de la información',NULL,NULL),(58,'Textil',NULL,NULL),(59,'Textil y Confección',NULL,NULL),(60,'Turismo Médico',NULL,NULL),(61,'Turístico',NULL,NULL),(62,'Vivienda y Construcción',NULL,NULL);
/*!40000 ALTER TABLE `sectors` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `servicio_buscados`
--

DROP TABLE IF EXISTS `servicio_buscados`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `servicio_buscados` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `strComentario` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `user_id` int(10) unsigned NOT NULL,
  `ubicacion_id` int(10) unsigned NOT NULL,
  `servicio_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `servicio_buscados_servicio_id_foreign` (`servicio_id`),
  KEY `servicio_buscados_ubicacion_id_foreign` (`ubicacion_id`),
  KEY `servicio_buscados_user_id_foreign` (`user_id`),
  CONSTRAINT `servicio_buscados_servicio_id_foreign` FOREIGN KEY (`servicio_id`) REFERENCES `servicios` (`id`),
  CONSTRAINT `servicio_buscados_ubicacion_id_foreign` FOREIGN KEY (`ubicacion_id`) REFERENCES `ubicacions` (`id`),
  CONSTRAINT `servicio_buscados_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `servicio_buscados`
--

LOCK TABLES `servicio_buscados` WRITE;
/*!40000 ALTER TABLE `servicio_buscados` DISABLE KEYS */;
INSERT INTO `servicio_buscados` VALUES (1,'n','2016-12-03 07:16:47','2016-12-03 07:16:47',1,11,1),(2,'en mi colonia no hay medicos','2016-12-03 08:00:21','2016-12-03 08:00:21',1,13,1);
/*!40000 ALTER TABLE `servicio_buscados` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `servicio_solicitados`
--

DROP TABLE IF EXISTS `servicio_solicitados`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `servicio_solicitados` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `strOpinion` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `servicio_id` int(10) unsigned NOT NULL,
  `ubicacion_id` int(10) unsigned NOT NULL,
  `user_id` int(10) unsigned NOT NULL,
  `serviciosSimilares` enum('si','no') COLLATE utf8_unicode_ci NOT NULL DEFAULT 'no',
  `recibirInformacion` enum('si','no') COLLATE utf8_unicode_ci NOT NULL DEFAULT 'no',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `servicio_solicitados_servicio_id_foreign` (`servicio_id`),
  KEY `servicio_solicitados_ubicacion_id_foreign` (`ubicacion_id`),
  KEY `servicio_solicitados_user_id_foreign` (`user_id`),
  CONSTRAINT `servicio_solicitados_servicio_id_foreign` FOREIGN KEY (`servicio_id`) REFERENCES `servicios` (`id`),
  CONSTRAINT `servicio_solicitados_ubicacion_id_foreign` FOREIGN KEY (`ubicacion_id`) REFERENCES `ubicacions` (`id`),
  CONSTRAINT `servicio_solicitados_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `servicio_solicitados`
--

LOCK TABLES `servicio_solicitados` WRITE;
/*!40000 ALTER TABLE `servicio_solicitados` DISABLE KEYS */;
INSERT INTO `servicio_solicitados` VALUES (1,'mmmm',1,9,1,'no','no','2016-12-02 08:56:52','2016-12-02 08:56:52'),(2,'mmmm',1,10,1,'no','no','2016-12-02 09:08:42','2016-12-02 09:08:42'),(3,'nnnn',1,12,1,'no','no','2016-12-03 07:26:41','2016-12-03 07:26:41');
/*!40000 ALTER TABLE `servicio_solicitados` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `servicios`
--

DROP TABLE IF EXISTS `servicios`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `servicios` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `strDescripcion` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `sector_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `servicios_strdescripcion_unique` (`strDescripcion`),
  KEY `servicios_sector_id_foreign` (`sector_id`),
  CONSTRAINT `servicios_sector_id_foreign` FOREIGN KEY (`sector_id`) REFERENCES `sectors` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `servicios`
--

LOCK TABLES `servicios` WRITE;
/*!40000 ALTER TABLE `servicios` DISABLE KEYS */;
INSERT INTO `servicios` VALUES (1,'diseño de aeronaves',1,NULL,NULL),(2,'diseño de naves espaciales',1,NULL,NULL),(3,'diseño de cohetes',1,NULL,NULL),(4,'equipos de propulcion aerea',1,NULL,NULL),(5,'sistemas de navegación aerea',1,NULL,NULL),(6,'abastecimiento de materiales militares',1,NULL,NULL);
/*!40000 ALTER TABLE `servicios` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ubicacions`
--

DROP TABLE IF EXISTS `ubicacions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ubicacions` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `latitud` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `longitud` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ubicacions`
--

LOCK TABLES `ubicacions` WRITE;
/*!40000 ALTER TABLE `ubicacions` DISABLE KEYS */;
INSERT INTO `ubicacions` VALUES (1,'house','20.017192599999998','-99.340398',NULL,NULL),(2,'','20.017454','-99.3402462','2016-12-02 05:08:15','2016-12-02 05:08:15'),(3,'','20.017454','-99.3402462','2016-12-02 05:08:37','2016-12-02 05:08:37'),(4,'','20.0187165','-99.3411998','2016-12-02 08:49:24','2016-12-02 08:49:24'),(5,'','20.0187165','-99.3411998','2016-12-02 08:50:25','2016-12-02 08:50:25'),(6,'','20.0187165','-99.3411998','2016-12-02 08:53:52','2016-12-02 08:53:52'),(7,'','20.0187165','-99.3411998','2016-12-02 08:54:09','2016-12-02 08:54:09'),(8,'','20.0187165','-99.3411998','2016-12-02 08:54:24','2016-12-02 08:54:24'),(9,'','20.0187165','-99.3411998','2016-12-02 08:56:52','2016-12-02 08:56:52'),(10,'Santiago, Chile','-33.4378305','-70.65044920000003','2016-12-02 09:08:42','2016-12-02 09:08:42'),(11,'','19.9129979','-99.3492732','2016-12-03 07:16:47','2016-12-03 07:16:47'),(12,'','19.911182163256512','-99.35403680321042','2016-12-03 07:26:41','2016-12-03 07:26:41'),(13,'','19.9129979','-99.3492732','2016-12-03 08:00:21','2016-12-03 08:00:21');
/*!40000 ALTER TABLE `ubicacions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `language_id` int(10) unsigned DEFAULT '1',
  `ubicacion_id` int(10) unsigned DEFAULT '1',
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`),
  KEY `users_language_id_foreign` (`language_id`),
  KEY `users_ubicacion_id_foreign` (`ubicacion_id`),
  CONSTRAINT `users_language_id_foreign` FOREIGN KEY (`language_id`) REFERENCES `languages` (`id`),
  CONSTRAINT `users_ubicacion_id_foreign` FOREIGN KEY (`ubicacion_id`) REFERENCES `ubicacions` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'Daniel Mera Alvarez','danielmeraalvarez.it@gmail.com',1,1,'$2y$10$ULjLynRNzp883qcXiCba7OElnYoGUbboSTDEGH68MZAywt.YbCxAS','RjkR9k0yKUSGzBZqTYn7YgtpuOQT2bNJZ5MLlzwGnjpX2Lg7uFv8UmZtfVCV','2016-12-01 01:59:07','2016-12-03 07:05:03');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2016-12-03 16:51:03
