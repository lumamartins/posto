-- MySQL dump 10.13  Distrib 8.0.34, for Win64 (x86_64)
--
-- Host: localhost    Database: posto
-- ------------------------------------------------------
-- Server version	8.0.31

create database posto;
use posto;

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
-- Table structure for table `consulta`
--

DROP TABLE IF EXISTS `consulta`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `consulta` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) DEFAULT NULL,
  `dataconsulta` date DEFAULT NULL,
  `hora` time DEFAULT NULL,
  `motivo` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `consulta`
--

LOCK TABLES `consulta` WRITE;
/*!40000 ALTER TABLE `consulta` DISABLE KEYS */;
INSERT INTO `consulta` VALUES (1,'jon doe','2000-11-11','00:00:00','aeiou'),(2,'dfghjk','0000-00-00','00:00:00','n'),(3,'dfghjk','0000-00-00','00:00:00','n'),(4,'dfghjk','2222-11-11','00:00:00','n'),(5,'fhdsofhdal','2023-10-07','08:46:00','sdfghjkl'),(6,'dfghjkl','2023-10-10','08:50:00','xdfghjk'),(7,'','0000-00-00','00:00:00',''),(8,'Theo Silva','2023-10-09','14:25:00','Dores nas articulações'),(9,'Rafael Teixeira','2023-10-27','15:30:00','Dores na coluna. ');
/*!40000 ALTER TABLE `consulta` ENABLE KEYS */;
UNLOCK TABLES;

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
  `id` int NOT NULL AUTO_INCREMENT,
  `nome_comercial` varchar(200) NOT NULL,
  `dosagem` decimal(10,2) NOT NULL,
  `fabricante` varchar(200) NOT NULL,
  `origem` varchar(100) NOT NULL,
  `forma_farmaceutica` varchar(300) NOT NULL,
  `tipo_uso` varchar(45) NOT NULL,
  `numero_registro` varchar(45) NOT NULL,
  `dt_fabricacao` date NOT NULL,
  `dt_validade` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `medicamento_cadastro`
--

LOCK TABLES `medicamento_cadastro` WRITE;
/*!40000 ALTER TABLE `medicamento_cadastro` DISABLE KEYS */;
INSERT INTO `medicamento_cadastro` VALUES (1,'nome',0.00,'nome','nome','sólido','via oral','nome','2023-11-03','2023-10-20'),(2,'Dipirona',50.00,'Butantan','Dentro do estado','sólido','via oral','24256383838383','1998-04-10','2023-11-10'),(3,'Dipirona',5.00,'Fiocruz','Dentro do estado','sólido','via oral','24256383838382','2023-10-17','2027-05-11');
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
  `rg` varchar(100) NOT NULL,
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
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pacientes`
--

LOCK TABLES `pacientes` WRITE;
/*!40000 ALTER TABLE `pacientes` DISABLE KEYS */;
INSERT INTO `pacientes` VALUES (1,'Rafael','rafinha@email.com','masculino','2008-06-17','(27)97363-3737','Vitória','ES','29010-004','Avenida Jerônimo Monteiro','Centro','34','nao','Sem alergia',''),(2,'Theo Silva','theo45@gmail.com','masculino','1972-10-18','(31)97676-7676','Sabará','MG','30190-040','Praça Professor Alberto Deodato','Centro','23','alimentar','Amendoim','05956257629'),(3,'05956257626','16.501-459','F','2007-01-23','31984563726','Belo Horizonte','PR','31630900','Rua Noronha','Centro','201','','',''),(4,'','16.501-452','M','2023-10-17','9999999','bh','PR','290100004','Praça Professor Alberto Deodato','Centro','24','Amendoim','Alimenticia','184.061.976-76'),(5,'','16.501-452','M','2023-10-17','9999999','bh','PR','290100004','Praça Professor Alberto Deodato','Centro','24','Amendoim','Alimenticia','184.061.976-76'),(6,'','16.501-452','M','2023-10-17','9999999','bh','PR','290100004','Praça Professor Alberto Deodato','Centro','24','Amendoim','Alimenticia','184.061.976-76'),(7,'','16.501-452','M','2023-10-17','9999999','bh','PR','290100004','Praça Professor Alberto Deodato','Centro','24','Amendoim','Alimenticia','184.061.976-76'),(8,'fdkhiasdf','16.501-452','M','2023-10-17','9999999','bh','PR','290100004','Praça Professor Alberto Deodato','Centro','24','Amendoim','Alimenticia','184.061.976-76'),(9,'LUMA ESTA FUNCIONANDO','16.501-452','M','2023-10-17','9999999','bh','PR','290100004','Praça Professor Alberto Deodato','Centro','24','Amendoim','Alimenticia','184.061.976-76'),(10,'Rafael','16.501-452','M','2023-10-17','22222222','bh','PR','31330600','Avenida Jerônimo Monteiro','Centro','22','Amendoim','Sem alergia','05956257629'),(11,'Rafael','16.501-452','F','2023-10-11','22222222','bh','PR','31330600','Rua Farmacêutica Mariquinha Noronha','Centro','66','Amendoim','Alimenticia','184.061.976-76'),(12,'Theo Silva','16.501-452','F','2023-10-03','22222222','Belo Horizonte','PR','31330600','Rua Farmacêutica Mariquinha Noronha','Centro','22','Amendoim','Alimenticia','184.061.976-76'),(13,'Rafaela Oliveira','16.501-222','F','2004-04-23','3122222222','Belo Horizonte','PR','31630900','Rod. Jornalista Teixeira','Castelo','23','Camarão','Alimenticia','184.061.976-72'),(14,'Miguel de Freitas','13.501-123','M','2013-06-11','22222222','Belo Horizonte','PR','31330600','Rua Farmacêutica Mariquinha Noronha','Paquetá','34','Amendoim','Alimenticia','134.061.976-34');
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
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `vacina_cadastro`
--

LOCK TABLES `vacina_cadastro` WRITE;
/*!40000 ALTER TABLE `vacina_cadastro` DISABLE KEYS */;
INSERT INTO `vacina_cadastro` VALUES (1,'ASTRAZENECA','Fiocruz','300','21PVCD362W','Recebido','2023-09-11','0000-00-00','2023-09-19'),(2,'Janssen','Pharmaceutica NV','100','211J21A','Recebido do estado','2023-09-20','0000-00-00','2023-09-25'),(3,'nome','nome','74','333555','nome','1111-11-11','1111-11-11','1111-11-11'),(4,'Gripe','Pfizer','300','222224','Recebido do estado','2023-10-09','2023-10-01','2023-11-03'),(5,'HPV','Butantan','100','211J234','Dentro do estado','2023-10-01','2010-04-03','2023-11-09');
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
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `vacina_paciente`
--

LOCK TABLES `vacina_paciente` WRITE;
/*!40000 ALTER TABLE `vacina_paciente` DISABLE KEYS */;
INSERT INTO `vacina_paciente` VALUES (1,0,'nome','2023-10-17','111111111','nome'),(2,0,'Gripe','2023-10-16','05956257628','Theo Silva'),(3,0,'Gripe','2023-10-17','184.061.976','Theo Silva');
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

-- Dump completed on 2023-11-09 15:01:13
