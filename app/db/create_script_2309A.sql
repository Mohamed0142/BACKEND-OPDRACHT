CREATE DATABASE `nailstudio` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */ /*!80016 DEFAULT ENCRYPTION='N' */

CREATE TABLE `appointments` (
   `id` int NOT NULL AUTO_INCREMENT,
   `color_1` varchar(7) NOT NULL,
   `color_2` varchar(7) NOT NULL,
   `color_3` varchar(7) NOT NULL,
   `color_4` varchar(7) NOT NULL,
   `phone_number` varchar(15) NOT NULL,
   `email` varchar(255) NOT NULL,
   `date` date NOT NULL,
   `nail_biting` tinyint(1) NOT NULL,
   `massage` tinyint(1) NOT NULL,
   `nail_repair` tinyint(1) NOT NULL,
   PRIMARY KEY (`id`)
 ) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci