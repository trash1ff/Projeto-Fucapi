CREATE DATABASE  IF NOT EXISTS `empresa`;
USE `empresa`;

DROP TABLE IF EXISTS `cargo`;

CREATE TABLE `cargo` (
  `idcargo` int NOT NULL AUTO_INCREMENT,
  `nome_cargo` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`idcargo`)
);

LOCK TABLES `cargo` WRITE;

INSERT INTO `cargo` VALUES (1,'Vendedor'),(2,'Recepcionista'),(3,'Auxiliar administrativo'),(4,'Assistente administrativo'),(5,'Auxiliar Logístico');

UNLOCK TABLES;

DROP TABLE IF EXISTS `funcionario`;

CREATE TABLE `funcionario` (
  `idfuncionario` int NOT NULL AUTO_INCREMENT,
  `senha` int NOT NULL,
  `nome_funcionario` varchar(45) DEFAULT NULL,
  `cpf` varchar(11) DEFAULT NULL,
  `salario` float DEFAULT NULL,
  `id_cargo` int NOT NULL,
  PRIMARY KEY (`idfuncionario`),
  KEY `id_cargo_idx` (`id_cargo`),
  CONSTRAINT `id_cargo` FOREIGN KEY (`id_cargo`) REFERENCES `cargo` (`idcargo`) ON DELETE CASCADE
) ;

LOCK TABLES `funcionario` WRITE;

INSERT INTO `funcionario` VALUES (1,1234,'João Paulo',1234567890,1000,3),(2,5678,'Marcos Vinicius',1234567891,1100,2),(3,4321,'Maria Silva',1234567892,1200,1),(4,9876,'Jeferson Souza',1234567893,1300,4),(5,7689,'Paula Roberta',1234567894,1400,5);

UNLOCK TABLES;

DROP TABLE IF EXISTS `registro`;

CREATE TABLE `registro` (
  `idregistro` int NOT NULL AUTO_INCREMENT,
  `data_hora` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `id_funcionario` int NOT NULL,
  PRIMARY KEY (`idregistro`),
  KEY `id_funcionario_idx` (`id_funcionario`),
  CONSTRAINT `id_funcionario` FOREIGN KEY (`id_funcionario`) REFERENCES `funcionario` (`idfuncionario`) ON DELETE CASCADE
);

LOCK TABLES `registro` WRITE;

INSERT INTO `registro` VALUES (1,'2022-09-09 05:49:58',5),(2,'2022-09-09 05:49:58',4),(3,'2022-09-09 05:49:58',3),(4,'2022-09-09 05:49:58',2),(5,'2022-09-09 05:49:58',1);

UNLOCK TABLES;
