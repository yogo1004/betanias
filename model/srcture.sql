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

-- Listage de la structure de la table betanias. betanias
CREATE TABLE IF NOT EXISTS `betanias` (
  `id_betania` int NOT NULL AUTO_INCREMENT,
  `name` varchar(45) COLLATE utf8mb3_bin NOT NULL,
  `date_creation` date DEFAULT CURRENT_TIMESTAMP,
  `place` varchar(45) COLLATE utf8mb3_bin DEFAULT NULL,
  PRIMARY KEY (`id_betania`),
  UNIQUE KEY `UNIQUE` (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_bin;

-- Listage des données de la table betanias.betanias : ~0 rows (environ)
DELETE FROM `betanias`;

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_bin;

-- Listage des données de la table betanias.meetings : ~0 rows (environ)
DELETE FROM `meetings`;

-- Listage de la structure de la table betanias. responsibles
CREATE TABLE IF NOT EXISTS `responsibles` (
  `id_responsible` int NOT NULL AUTO_INCREMENT,
  `firstname` varchar(45) COLLATE utf8mb3_bin NOT NULL,
  `Betanias_id_betania` int NOT NULL,
  PRIMARY KEY (`id_responsible`),
  UNIQUE KEY `UNIQUE` (`firstname`),
  KEY `fk_Responsibles_Betanias_idx` (`Betanias_id_betania`),
  CONSTRAINT `fk_Responsibles_Betanias` FOREIGN KEY (`Betanias_id_betania`) REFERENCES `betanias` (`id_betania`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_bin;

-- Listage des données de la table betanias.responsibles : ~0 rows (environ)
DELETE FROM `responsibles`;

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
