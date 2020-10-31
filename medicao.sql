-- MySQL dump 10.13  Distrib 5.7.17, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: medicao
-- ------------------------------------------------------
-- Server version	5.5.5-10.4.13-MariaDB

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
-- Table structure for table `casas_oracao`
--

DROP TABLE IF EXISTS `casas_oracao`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `casas_oracao` (
  `id_casa` int(11) NOT NULL AUTO_INCREMENT,
  `casa_oracao` varchar(100) DEFAULT NULL,
  `rua` varchar(100) DEFAULT NULL,
  `numero` int(11) DEFAULT NULL,
  `cidade` int(11) DEFAULT NULL,
  `cep` int(11) DEFAULT NULL,
  `numero_relatorio` int(11) DEFAULT NULL,
  `id_usuario` int(11) DEFAULT NULL,
  `data` timestamp NULL DEFAULT NULL,
  `ativo` int(11) DEFAULT 1,
  PRIMARY KEY (`id_casa`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `casas_oracao`
--

LOCK TABLES `casas_oracao` WRITE;
/*!40000 ALTER TABLE `casas_oracao` DISABLE KEYS */;
INSERT INTO `casas_oracao` VALUES (1,'Jardim Teresópolis','Rua Butumirim',8545,0,32687,1056515,0,NULL,1),(2,'Guarujá','Rua do Pinho Angelo',109,0,NULL,NULL,0,NULL,1);
/*!40000 ALTER TABLE `casas_oracao` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `movimento`
--

DROP TABLE IF EXISTS `movimento`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `movimento` (
  `id_movimento` int(11) NOT NULL AUTO_INCREMENT,
  `id_pessoa` int(11) DEFAULT NULL,
  `temperatura` float DEFAULT NULL,
  `data` timestamp NULL DEFAULT current_timestamp(),
  `id_casa` int(11) DEFAULT NULL,
  `usuario` int(11) DEFAULT NULL,
  `ativo` int(11) DEFAULT 1,
  PRIMARY KEY (`id_movimento`),
  KEY `fk_usuario_pessoa_idx` (`id_pessoa`),
  KEY `fk_usuario_idx` (`usuario`),
  KEY `fk_usuario_casa_idx` (`id_casa`),
  CONSTRAINT `fk_movimento_casa` FOREIGN KEY (`id_casa`) REFERENCES `casas_oracao` (`id_casa`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_usuario` FOREIGN KEY (`usuario`) REFERENCES `usuario` (`id_usuario`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_usuario_pessoa` FOREIGN KEY (`id_pessoa`) REFERENCES `pessoa` (`id_pessoa`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=107 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `movimento`
--

LOCK TABLES `movimento` WRITE;
/*!40000 ALTER TABLE `movimento` DISABLE KEYS */;
INSERT INTO `movimento` VALUES (101,40,32,'2020-10-31 13:21:09',NULL,NULL,1),(102,71,32,'2020-10-31 13:22:18',1,5,1),(103,98,34,'2020-10-31 13:57:04',1,6,1),(104,41,34,'2020-10-31 14:08:33',1,6,1),(105,40,32,'2020-10-31 14:19:38',1,5,1),(106,40,24,'2020-10-31 14:20:28',1,5,1);
/*!40000 ALTER TABLE `movimento` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pessoa`
--

DROP TABLE IF EXISTS `pessoa`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pessoa` (
  `id_pessoa` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) DEFAULT NULL,
  `telefone` varchar(20) DEFAULT NULL,
  `rua` varchar(100) DEFAULT NULL,
  `numero` varchar(10) DEFAULT NULL,
  `bairro` varchar(100) DEFAULT NULL,
  `cidade` varchar(100) DEFAULT NULL,
  `id_casa` int(11) DEFAULT NULL,
  `usuario` int(11) DEFAULT NULL,
  `ativo` int(11) DEFAULT 1,
  PRIMARY KEY (`id_pessoa`),
  KEY `fk_pessoa_casa_idx` (`id_casa`),
  CONSTRAINT `fk_pessoa_casa` FOREIGN KEY (`id_casa`) REFERENCES `casas_oracao` (`id_casa`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=99 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pessoa`
--

LOCK TABLES `pessoa` WRITE;
/*!40000 ALTER TABLE `pessoa` DISABLE KEYS */;
INSERT INTO `pessoa` VALUES (40,'Alberto','31992189736','Rua Mantena','38','Jd Teresópolis','Betim',1,NULL,1),(41,'Pedro Henrique de Sousa Rocha Correa','31994870472','Rua de Brasilia - Teste','863','Duque de Caxias','Betim',1,NULL,1),(42,'Marytza (organista)','31991761271','Rua de Brasilia','863','Duque de Caxias','Betim',1,NULL,1),(71,'Agnalda Aguiar','31993707434','Rua Sucupira','211','Boa Esperança','Betim',1,NULL,1),(97,'Teste','31994870472','Teste','234','Teste','Teste',1,5,1),(98,'Willian ','43854939008','Teste','9890','dsjakf','sjklç',1,6,1);
/*!40000 ALTER TABLE `pessoa` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `usuario`
--

DROP TABLE IF EXISTS `usuario`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `usuario` (
  `id_usuario` int(11) NOT NULL AUTO_INCREMENT,
  `id_pessoa` int(11) DEFAULT NULL,
  `senha` varchar(100) DEFAULT NULL,
  `usuario` varchar(100) DEFAULT NULL,
  `is_admin` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_usuario`),
  KEY `fk_user_pessoa_idx` (`id_pessoa`),
  CONSTRAINT `fk_user_pessoa` FOREIGN KEY (`id_pessoa`) REFERENCES `pessoa` (`id_pessoa`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usuario`
--

LOCK TABLES `usuario` WRITE;
/*!40000 ALTER TABLE `usuario` DISABLE KEYS */;
INSERT INTO `usuario` VALUES (5,41,'123456','pedro.rocha',1),(6,42,'123456','marytza.rocha',NULL);
/*!40000 ALTER TABLE `usuario` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2020-10-31 11:38:39
