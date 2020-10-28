-- MySQL dump 10.13  Distrib 5.7.17, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: medicao_backup
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
  `usuario` int(11) DEFAULT NULL,
  `ativo` int(11) DEFAULT 1,
  PRIMARY KEY (`id_movimento`),
  KEY `fk_usuario_pessoa_idx` (`id_pessoa`),
  KEY `fk_usuario_idx` (`usuario`),
  CONSTRAINT `fk_usuario` FOREIGN KEY (`usuario`) REFERENCES `usuario` (`id_usuario`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_usuario_pessoa` FOREIGN KEY (`id_pessoa`) REFERENCES `pessoa` (`id_pessoa`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=56 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `movimento`
--

LOCK TABLES `movimento` WRITE;
/*!40000 ALTER TABLE `movimento` DISABLE KEYS */;
INSERT INTO `movimento` VALUES (7,44,36.6,'2020-10-24 22:19:54',NULL,1),(8,43,36.1,'2020-10-24 22:20:04',NULL,1),(9,42,36.1,'2020-10-24 22:20:19',NULL,1),(10,51,36.5,'2020-10-24 22:20:31',NULL,1),(11,41,36.3,'2020-10-24 22:21:29',NULL,1),(12,52,36.5,'2020-10-24 22:21:41',NULL,1),(13,53,35.9,'2020-10-24 22:23:03',NULL,1),(14,31,36.1,'2020-10-24 22:23:30',NULL,1),(15,54,35.3,'2020-10-24 22:25:22',NULL,1),(16,56,33.9,'2020-10-24 22:27:39',NULL,1),(17,55,36,'2020-10-24 22:27:50',NULL,1),(18,58,34.5,'2020-10-24 22:29:27',NULL,1),(19,61,36.1,'2020-10-24 22:31:49',NULL,1),(20,34,36.3,'2020-10-24 22:32:38',NULL,1),(21,45,36.2,'2020-10-24 22:32:48',NULL,1),(23,62,36.5,'2020-10-24 22:35:03',NULL,1),(24,35,36.3,'2020-10-24 22:35:27',NULL,1),(25,36,36.6,'2020-10-24 22:35:35',NULL,1),(26,60,32.4,'2020-10-24 22:38:09',NULL,1),(27,44,0,'2020-10-24 22:46:16',NULL,1),(28,30,35.4,'2020-10-24 22:47:19',NULL,1),(29,25,36.4,'2020-10-24 22:47:27',NULL,1),(30,26,36.4,'2020-10-24 22:47:54',NULL,1),(31,28,35.7,'2020-10-24 22:52:37',NULL,1),(32,27,36.1,'2020-10-24 22:52:49',NULL,1),(33,68,36.4,'2020-10-24 22:53:35',NULL,1),(34,69,36.2,'2020-10-24 22:54:20',NULL,1),(35,71,35.7,'2020-10-24 22:57:18',NULL,1),(36,66,36.8,'2020-10-24 23:00:51',NULL,1),(37,65,35.4,'2020-10-24 23:01:28',NULL,1),(38,74,36.1,'2020-10-24 23:03:42',NULL,1),(39,75,34.3,'2020-10-24 23:09:18',NULL,1),(40,76,36.2,'2020-10-24 23:11:00',NULL,1),(41,77,34.7,'2020-10-24 23:12:11',NULL,1),(42,78,35.7,'2020-10-24 23:13:32',NULL,1),(43,79,32.1,'2020-10-24 23:14:33',NULL,1),(44,80,36.3,'2020-10-24 23:15:31',NULL,1),(45,81,34.6,'2020-10-24 23:16:40',NULL,1),(46,82,35.9,'2020-10-24 23:18:53',NULL,1),(47,83,32,'2020-10-24 23:20:36',NULL,1),(48,84,35.7,'2020-10-24 23:24:56',NULL,1),(49,85,34,'2020-10-24 23:25:11',NULL,1),(50,86,34.1,'2020-10-24 23:25:25',NULL,1),(51,87,35.7,'2020-10-24 23:25:42',NULL,1),(52,88,32.1,'2020-10-24 23:25:56',NULL,1),(53,89,36.4,'2020-10-24 23:26:09',NULL,1),(54,90,35.6,'2020-10-24 23:26:28',NULL,1),(55,72,34.3,'2020-10-24 23:28:19',NULL,1);
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
  `ativo` int(11) DEFAULT 1,
  PRIMARY KEY (`id_pessoa`),
  KEY `fk_pessoa_casa_idx` (`id_casa`),
  CONSTRAINT `fk_pessoa_casa` FOREIGN KEY (`id_casa`) REFERENCES `casas_oracao` (`id_casa`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=93 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pessoa`
--

LOCK TABLES `pessoa` WRITE;
/*!40000 ALTER TABLE `pessoa` DISABLE KEYS */;
INSERT INTO `pessoa` VALUES (25,'Maycon ','31985438562','AV Rio Amazonas ','3004','','Betim',1,1),(26,'Cléber','31986620548','AV Rio Amazonas ','3004','','Betim',1,1),(27,'Igor (Músico) ','31989013573','Rua Campina Grande','80','Jd Teresópolis','Betim',1,1),(28,'Isaías (Músico)','31993950295','Rua Campina Grande','80','Jd Teresópolis','Betim',1,1),(29,'Rafael (músico)','31986072481','Rua Vargem Grande ','81','Jd Teresópolis','Betim',1,1),(30,'Valtécio (Músico)','31986998478','Rua Vargem Grande ','81','Jd Teresópolis','Betim',1,1),(31,'Claudiane (Organista) ','31987857778','Av Juiz Marco Túlio Isaac','','','Betim',1,1),(32,'Thiago (músico)','31987079357','Rua Lagoa Santa','302','Jd Teresópolis','Betim',1,1),(34,'Raimundo Sebastiao Martins','3135910176','Rua Ulisses Ferreira','50','Jd Teresópolis','Betim',1,1),(35,'Maria Cristina Rocha','31998252943','Rua Monte Siao ','369','Renascer','Betim',1,1),(36,'Hércules Ferreira da Rocha Correa','31993994295','Rua Monte Siao ','369','Renascer','Betim',1,1),(37,'Geraldo Ribeiro','31991360297','Av Belo Horizonte','1641','Jd Teresópolis','Betim',1,1),(38,'Sirlei Leite Caldeira','31992437478','Rua Araxá ','105','Jd Teresópolis','Betim',1,1),(39,'Ester Geovana Queiroz Amaral','31973458717','Rua dos eucalipitos','6','Jd Teresópolis','Betim',1,1),(40,'Alberto','31992189736','Rua Mantena','38','Jd Teresópolis','Betim',1,1),(41,'Pedro Henrique de Sousa Rocha Correa','31994870472','Rua de Brasilia','863','Duque de Caxias','Betim',1,1),(42,'Marytza (organista)','31991761271','Rua de Brasilia','863','Duque de Caxias','Betim',1,1),(43,'Eduarda Candido','31995488940','Rua dois','400 Apt 30','Parque das Acácias','Betim',1,1),(44,'Elias (regional)','31991458292','Rua dois','400 Apt 30','Parque das Acácias','Betim',1,1),(45,'Glauciene','31995292971','Rua dois','400 Apt 30','Parque das Acácias','Betim',1,1),(46,'Aparecida Garcia','3135910176','Rua Ulisses Ferreira','50','Novo Amazonas','Betim',1,1),(48,'Almiro Pedro ','31998284546','Rua Lagoa Dourada ','126','Jd Teresópolis','Betim',1,1),(49,'Maria Ribeiro (piedade)','31995292971','Rua Lagoa Dourada ','126','Jd Teresópolis','Betim',1,1),(50,'Kevin Almeida ','31998284546','Rua Lagoa Dourada ','126','Jd Teresópolis','Betim',1,1),(51,'Geraldo Ferreira','31973086517','Rua Palmares','51','Jd Teresópolis','Betim',1,1),(52,'Teresa Sousa Lima','31973086517','Rua Palmares','51','Jd Teresópolis','Betim',1,1),(53,'Renilda Gonçalves','3135917817','Rua Geraldo Martins Silveira','60','Jd Teresópolis','Betim',1,1),(54,'Hamilton','31988456379','av Rio Negro','64','Jardim Santa Cruz','Betim',1,1),(55,'Maria Inocencia','','Rua Ilheus','4','Jd Teresópolis','Betim',1,1),(56,'Dorotelio','31975244815','Rua Ilheus','4','Jd Teresópolis','Betim',1,1),(57,'Maria Cunha','','Rua Ilheus','4','Jd Teresópolis','Betim',1,1),(58,'Giliane Ribeiro','31998032648','Av Belo Horizonte','1641','Santo Antonio','Betim',1,1),(60,'Yan','31988456379','av Rio Negro','','','Betim',1,1),(61,'Idalina Lemes','31971168237','Rua Botumirim','140','Santo Antonio','Betim',1,1),(62,'Amarildo Ferreira','31989413610','Rua botumirim','330','Santo Antonio','Betim',1,1),(63,'Beatriz Carolaine','31988635705','Rua Lagoa Dourada ','126','Jd Teresópolis','Betim',1,1),(64,'Samuel Santos','31994089684','Rua Sao Salvador','8','Jd Teresópolis','Betim',1,1),(65,'Mirian Peres','3134121220','Av Rio Amazonas','3004','Campos Elisios','Betim',1,1),(66,'Reinaldo Souza','31992463342','Av Duque de Caxias','137','Jd Teresópolis','Betim',1,1),(68,'Mirian Ferreira','31996415069','Beco Eucalipitos','6','Jd Teresópolis','Betim',1,1),(69,'Euler Amaral','3199960506','Beco Eucalipitos','6','Jd Teresópolis','Betim',1,1),(71,'Agnalda Aguiar','31993707434','Rua Sucupira','211','Boa Esperança','Betim',1,1),(72,'Helena Vieira','31985751223','Rua Bom Jesus','345','Jd Teresópolis','Betim',1,1),(73,'Re','','','','','',1,1),(74,'Ellen Flavia','3134121220','AV Rio Amazonas ','3004','Campos Elisios','Betim',1,1),(75,'Alcemar','31989554303','Rua Bom Jesus','345','Jd Teresópolis','Betim',1,1),(76,'Teco','3135931309','Rua Sucupira','211','Boa Esperança','Betim',1,1),(77,'Elisangela Ribeiro','31986825608','Av Belo Horizonte','1641','Santo Antonio','Betim',1,1),(78,'Marta Ribeiro','31986825608','Av Belo Horizonte','1641','Santo Antonio','Betim',1,1),(79,'Estefane','','Rua Limoeira','377','Villa Benge','Betim',1,1),(80,'Miguel (Estefane)','','Rua Limoeira','377','Villa Benge','Betim',1,1),(81,'Thiago Medino','31987678559','Rua Santo Antonio','161','Jd Teresópolis','Betim',1,1),(82,'Eleonio','31987678559','Rua Santo Antonio','161','Jd Teresópolis','Betim',1,1),(83,'Cleberson','31975300202','Rua Duque de Caxias','37','Jd Teresópolis','Betim',1,1),(84,'Edimilson','31975300202','Rua Duque de Caxias','37','Jd Teresópolis','Betim',1,1),(85,'Maria Rosangela','31975300202','Rua Duque de Caxias','37','Jd Teresópolis','Betim',1,1),(86,'Clessio','31975300202','Rua Duque de Caxias','37','Jd Teresópolis','Betim',1,1),(87,'Jucilene','31975300202','Rua Duque de Caxias','37','Jd Teresópolis','Betim',1,1),(88,'Ana Cláudia','31975300202','Rua Duque de Caxias','37','Jd Teresópolis','Betim',1,1),(89,'Dácio','31986132832','Rua Camposi','50','Jd Teresópolis','Betim',1,1),(90,'Vilma','31986132832','Rua Camposi','50','Jd Teresópolis','Betim',1,1);
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
  `usuario` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id_usuario`),
  KEY `fk_user_pessoa_idx` (`id_pessoa`),
  CONSTRAINT `fk_user_pessoa` FOREIGN KEY (`id_pessoa`) REFERENCES `pessoa` (`id_pessoa`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usuario`
--

LOCK TABLES `usuario` WRITE;
/*!40000 ALTER TABLE `usuario` DISABLE KEYS */;
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

-- Dump completed on 2020-10-27 18:30:25
