/*!40101 SET NAMES utf8 */;
/*!40014 SET FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/ workshop_db /*!40100 DEFAULT CHARACTER SET utf8mb4 */;
USE workshop_db;

DROP TABLE IF EXISTS customers;
CREATE TABLE `customers` (
  `id` int NOT NULL AUTO_INCREMENT,
  `signed` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

DROP TABLE IF EXISTS logindata;
CREATE TABLE `logindata` (
  `id` int NOT NULL AUTO_INCREMENT,
  `userName` varchar(50) DEFAULT NULL,
  `userPas` varchar(60) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `userName` (`userName`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

INSERT INTO customers(id,signed) VALUES(1,'2021-10-12 11:34:54'),(2,'2021-10-12 12:25:52');
INSERT INTO logindata(id,userName,userPas) VALUES(1,'KittyLower','$2y$10$imHI6jyc1gqIysMC.1kvJeIUYpI1Xmvigj7QhJv3AwgSVRs647GFO'),(2,'','$2y$10$NuPQy31225q2Gzb/OzRvg.0I2rBgErtwV5qNOW373Te/WICq4w.be');DROP PROCEDURE IF EXISTS AddNewUser;
CREATE PROCEDURE `AddNewUser`(
IN firstnameVar VARCHAR(100),
IN pasVar VARCHAR(60)
)
BEGIN

INSERT INTO customers (signed)
VALUES (NOW());
INSERT INTO loginData (userName, userPas)
VALUES (firstnameVar, pasVar);
END;