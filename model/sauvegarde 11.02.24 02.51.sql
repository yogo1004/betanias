-- --------------------------------------------------------
-- Hôte:                         127.0.0.1
-- Version du serveur:           8.0.31 - MySQL Community Server - GPL
-- SE du serveur:                Win64
-- HeidiSQL Version:             12.4.0.6659
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Listage de la structure de la base pour betanias
CREATE DATABASE IF NOT EXISTS `betanias` /*!40100 DEFAULT CHARACTER SET utf8mb3 COLLATE utf8mb3_bin */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `betanias`;

-- Listage de la structure de la table betanias. betanias
CREATE TABLE IF NOT EXISTS `betanias` (
  `id_betania` int NOT NULL AUTO_INCREMENT,
  `name` varchar(45) COLLATE utf8mb3_bin NOT NULL,
  `date_creation` date NOT NULL DEFAULT (curdate()),
  `place` varchar(45) COLLATE utf8mb3_bin DEFAULT NULL,
  PRIMARY KEY (`id_betania`),
  UNIQUE KEY `UNIQUE` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_bin;

-- Listage des données de la table betanias.betanias : ~3 rows (environ)
DELETE FROM `betanias`;
INSERT INTO `betanias` (`id_betania`, `name`, `date_creation`, `place`) VALUES
	(1, 'Armonia', '2024-02-10', NULL),
	(2, 'Bethel', '2024-02-10', NULL),
	(3, 'Casa de Frutos', '2024-02-10', NULL);

-- Listage de la structure de la table betanias. meetings
CREATE TABLE IF NOT EXISTS `meetings` (
  `id_meeting` int NOT NULL AUTO_INCREMENT,
  `friends` int DEFAULT NULL,
  `Siblings` int DEFAULT NULL,
  `childrens` int DEFAULT NULL,
  `date_meeting` date NOT NULL,
  `offering` double DEFAULT NULL,
  `Betanias_id_betania` int NOT NULL,
  PRIMARY KEY (`id_meeting`),
  UNIQUE KEY `UNIQUE` (`date_meeting`,`Betanias_id_betania`),
  KEY `fk_Meetings_Betanias1_idx` (`Betanias_id_betania`),
  CONSTRAINT `fk_Meetings_Betanias1` FOREIGN KEY (`Betanias_id_betania`) REFERENCES `betanias` (`id_betania`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_bin;

-- Listage des données de la table betanias.meetings : ~15 rows (environ)
DELETE FROM `meetings`;
INSERT INTO `meetings` (`id_meeting`, `friends`, `Siblings`, `childrens`, `date_meeting`, `offering`, `Betanias_id_betania`) VALUES
	(1, 1, 11, 111, '2024-03-01', 1111, 1),
	(2, 2, 22, 222, '2024-03-02', 2222, 1),
	(3, 3, 33, 333, '2024-02-03', 3333, 1),
	(4, 4, 44, 444, '2024-02-04', 4444, 1),
	(5, 5, 55, 555, '2024-02-05', 5555, 2),
	(6, 6, 66, 666, '2024-02-06', 6666, 2),
	(7, 7, 77, 777, '2024-02-07', 7777, 2),
	(8, 8, 88, 888, '2024-02-08', 8888, 2),
	(9, 12, 13, 14, '2024-02-11', 15, 2),
	(10, 29, 89, 907, '2024-12-29', 44, 1),
	(11, 44, 55, 66, '2024-05-06', 77, 3),
	(14, 22, 33, 44, '2024-07-01', 55, 2),
	(17, 45, 76, 35, '2024-02-11', 88, 3),
	(18, 67, 78, 89, '2024-08-31', 90, 3),
	(20, 7, 3, 14, '2024-11-09', 109, 2);

-- Listage de la structure de la table betanias. responsibles
CREATE TABLE IF NOT EXISTS `responsibles` (
  `id_responsible` int NOT NULL AUTO_INCREMENT,
  `firstname` varchar(45) COLLATE utf8mb3_bin NOT NULL,
  `Betanias_id_betania` int NOT NULL,
  PRIMARY KEY (`id_responsible`),
  UNIQUE KEY `UNIQUE` (`firstname`),
  KEY `fk_Responsibles_Betanias_idx` (`Betanias_id_betania`),
  CONSTRAINT `fk_Responsibles_Betanias` FOREIGN KEY (`Betanias_id_betania`) REFERENCES `betanias` (`id_betania`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_bin;

-- Listage des données de la table betanias.responsibles : ~6 rows (environ)
DELETE FROM `responsibles`;
INSERT INTO `responsibles` (`id_responsible`, `firstname`, `Betanias_id_betania`) VALUES
	(1, 'Stalin Ocaña', 1),
	(2, 'Luis Pucuji', 2),
	(3, 'Consuelo Jaramillo', 1),
	(4, 'Nelson Guevara', 2),
	(5, 'Dennis Saavedra', 3),
	(6, 'Javier Guevara', 3);

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
