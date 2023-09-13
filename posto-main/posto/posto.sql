-- MySQL dump 10.13  Distrib 8.0.33, for Win64 (x86_64)
--
-- Host: localhost    Database: posto
-- ------------------------------------------------------
-- Server version	8.0.31

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
-- Table structure for table `funcionarios`
--

DROP TABLE IF EXISTS `funcionarios`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `funcionarios` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nome` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(60) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `telefone` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `sexo` varchar(15) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `data_nascimento` date NOT NULL,
  `cidade` varchar(45) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `estado` varchar(45) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `cep` char(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `rua` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `bairro` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `numero` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `cargos` varchar(15) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `usuario` varchar(45) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `senha` varchar(45) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `funcionarios`
--

LOCK TABLES `funcionarios` WRITE;
/*!40000 ALTER TABLE `funcionarios` DISABLE KEYS */;
INSERT INTO `funcionarios` VALUES (3,'Alice','alice@gmail.com','11111111','feminino','2023-05-03','rg','gf','31268800','araras','tal','22','DBA','alicinha23','11111'),(4,'Samanta','samanta@gmail.com','22222222','feminino','2023-05-01','bh','mg','33333333','Rua Geraldo','Bairro Paquetá','22','Médica','samantinha','1234');
/*!40000 ALTER TABLE `funcionarios` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `medicamento_cadastro`
--

DROP TABLE IF EXISTS `medicamento_cadastro`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `medicamento_cadastro` (
  `id` int NOT NULL,
  `nome` varchar(200) NOT NULL,
  `nome_cientifico` varchar(200) NOT NULL,
  `dosagem` decimal(10,2) NOT NULL,
  `fabricante` varchar(200) NOT NULL,
  `origem` varchar(100) NOT NULL,
  `forma_farmaceutica` varchar(300) NOT NULL,
  `tipo_uso` varchar(45) NOT NULL,
  `numero_registro` varchar(45) NOT NULL,
  `dt_fabricacao` date NOT NULL,
  `dt_validade` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `medicamento_cadastro`
--

LOCK TABLES `medicamento_cadastro` WRITE;
/*!40000 ALTER TABLE `medicamento_cadastro` DISABLE KEYS */;
/*!40000 ALTER TABLE `medicamento_cadastro` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pacientes`
--

DROP TABLE IF EXISTS `pacientes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `pacientes` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nome` varchar(200) NOT NULL,
  `email` varchar(100) NOT NULL,
  `sexo` varchar(45) NOT NULL,
  `data_nascimento` date NOT NULL,
  `telefone` varchar(45) NOT NULL,
  `cidade` varchar(45) NOT NULL,
  `estado` varchar(45) NOT NULL,
  `cep` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `rua` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `bairro` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `numero` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `alergia` varchar(100) NOT NULL,
  `descricao_alergia` varchar(400) NOT NULL,
  `cpf` varchar(21) NOT NULL,
  `rg` varchar(45) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pacientes`
--

LOCK TABLES `pacientes` WRITE;
/*!40000 ALTER TABLE `pacientes` DISABLE KEYS */;
INSERT INTO `pacientes` VALUES (1,'Rafael','rafinha@email.com','masculino','2008-06-17','(27)97363-3737','Vitória','ES','29010-004','Avenida Jerônimo Monteiro','Centro','34','nao','Sem alergia','',''),(2,'Theo Silva','theo45@gmail.com','masculino','1972-10-18','(31)97676-7676','Sabará','MG','30190-040','Praça Professor Alberto Deodato','Centro','23','alimentar','Amendoim','05956257629','');
/*!40000 ALTER TABLE `pacientes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `vacina_cadastro`
--

DROP TABLE IF EXISTS `vacina_cadastro`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `vacina_cadastro` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nome_vacina` varchar(100) NOT NULL,
  `fabricante` varchar(100) NOT NULL,
  `quantidade` varchar(100) NOT NULL,
  `lote` varchar(100) NOT NULL,
  `origem` varchar(300) NOT NULL,
  `dt_recebimento` date NOT NULL,
  `dt_fabricacao` date NOT NULL,
  `dt_validade` date NOT NULL,
  PRIMARY KEY (`id`),
  KEY `nome_vacina` (`nome_vacina`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `vacina_cadastro`
--

LOCK TABLES `vacina_cadastro` WRITE;
/*!40000 ALTER TABLE `vacina_cadastro` DISABLE KEYS */;
INSERT INTO `vacina_cadastro` VALUES (1,'ASTRAZENECA','Fiocruz','300','21PVCD362W','Recebido','0000-00-00','0000-00-00','0000-00-00'),(2,'Janssen','Pharmaceutica NV','100','211J21A','Recebido do estado','0000-00-00','0000-00-00','0000-00-00');
/*!40000 ALTER TABLE `vacina_cadastro` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `vacina_paciente`
--

DROP TABLE IF EXISTS `vacina_paciente`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `vacina_paciente` (
  `id` int NOT NULL AUTO_INCREMENT,
  `paciente_id` int NOT NULL,
  `nome_vacina` varchar(100) NOT NULL,
  `data_vacinacao` date NOT NULL,
  `cpf` char(11) NOT NULL,
  `nome` varchar(300) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `paciente_id` (`paciente_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `vacina_paciente`
--

LOCK TABLES `vacina_paciente` WRITE;
/*!40000 ALTER TABLE `vacina_paciente` DISABLE KEYS */;
/*!40000 ALTER TABLE `vacina_paciente` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2023-09-12 21:37:35
