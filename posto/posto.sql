create database posto;
use posto;
-- MySQL dump 10.13  Distrib 8.0.33, for Win64 (x86_64)
--
-- Host: localhost    Database: posto
-- ------------------------------------------------------
-- Server version 8.0.31

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
INSERT INTO `funcionarios` VALUES (3,'Alice','alice@gmail.com','11111111','feminino','2023-05-03','rg','gf','araras 31','alicinha23','11111'),(4,'Samanta','samanta@gmail.com','22222222','feminino','2023-05-01','bh','mg','Rua Geraldo, 22 - Bairro Paquetá','samantinha','1234'),(5,'Gabriel','biel@gmail.com','3333','masculino','2016-02-15','bh','mg','Rua Tales da Silva, 45 - Castelo','',''),(6,'Gabriel','biel@gmail.com','3333','masculino','2016-02-15','bh','mg','Rua Tales da Silva, 45 - Castelo','',''),(7,'Gabriel','biel@gmail.com','3333','masculino','2016-02-15','bh','mg','Rua Tales da Silva, 45 - Castelo','',''),(8,'Gabriel','biel@gmail.com','3333','masculino','2016-02-15','bh','mg','Rua Tales da Silva, 45 - Castelo','',''),(9,'Gabriel','biel@gmail.com','3333','masculino','2016-02-15','bh','mg','Rua Tales da Silva, 45 - Castelo','',''),(10,'Gabriel','biel@gmail.com','3333','masculino','2016-02-15','bh','mg','Rua Tales da Silva, 45 - Castelo','',''),(11,'Gabriel','biel@gmail.com','3333','masculino','2016-02-15','bh','mg','Rua Tales da Silva, 45 - Castelo','',''),(12,'Gabriel','biel@gmail.com','3333','masculino','2023-05-01','bh','mg','Rua Tales da Silva, 45 - Castelo','bielzin','12345'),(13,'Rafael','rafinha@email.com','33333','masculino','2023-05-01','bh','mg','Rua Silva, 99 - Sinimbu','',''),(14,'Rafael','rafinha@email.com','33333','masculino','2023-05-01','bh','mg','Rua Silva, 99 - Sinimbu','',''),(15,'Rafael','rafinha@email.com','33333','masculino','2023-05-01','bh','mg','Rua Silva, 99 - Sinimbu','',''),(16,'Fernanda','fefe@email.com','2222','feminino','2023-05-02','bh','mg','Rua Tata, 23 - Gono','',''),(17,'Fernanda','fefe@email.com','2222','feminino','2023-05-02','bh','mg','Rua Tata, 23 - Gono','',''),(18,'Fernanda','fefe@email.com','2222','feminino','2023-05-02','bh','mg','Rua Tata, 23 - Gono','',''),(19,'Gabriel Souza','biel@gmail.com','2222222222','masculino','2023-05-02','gh','ff','Rua da Silva, 45 - Castelo','gabriel','11111'),(20,'Gabriel Souza','biel@gmail.com','2222222222','masculino','2023-05-02','gh','ff','Rua da Silva, 45 - Castelo','gabriel','11111');
/*!40000 ALTER TABLE `funcionarios` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pacientes`
--

DROP TABLE IF EXISTS `pacientes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `pacientes` (
  `id` int NOT NULL auto_increment,
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
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pacientes`
--

LOCK TABLES `pacientes` WRITE;
/*!40000 ALTER TABLE `pacientes` DISABLE KEYS */;
/*!40000 ALTER TABLE `pacientes` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2023-05-29 18:18:30

CREATE TABLE vacinas (
    id INT AUTO_INCREMENT PRIMARY KEY,
    paciente_id INT NOT NULL,
    nome_vacina VARCHAR(100) NOT NULL,
    data_vacinacao DATE NOT NULL,
    FOREIGN KEY (paciente_id) REFERENCES pacientes(id)
);

CREATE TABLE vacina_cadastro (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome_vacina VARCHAR(100) NOT NULL,
fabricante VARCHAR(100) NOT NULL,
    quantidade VARCHAR(100) NOT NULL,
    FOREIGN KEY (nome_vacina) REFERENCES vacinas(nome_vacina)
);
select * from posto.funcionarios;
select * from posto.pacientes;
select * from posto.vacinas;
select * from posto.vacina_cadastro;