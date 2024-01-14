-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               8.0.30 - MySQL Community Server - GPL
-- Server OS:                    Win64
-- HeidiSQL Version:             12.1.0.6537
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

-- Dumping structure for table trip.scooter_makes
CREATE TABLE IF NOT EXISTS `scooter_makes` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table trip.scooter_makes: ~5 rows (approximately)
INSERT INTO `scooter_makes` (`id`, `name`, `status`, `created_at`, `updated_at`) VALUES
	(2, 'HAWA', 1, '2024-01-13 16:55:46', '2024-01-13 16:55:46'),
	(3, 'SYM', 1, '2024-01-13 16:56:12', '2024-01-13 16:56:12'),
	(4, 'LML', 1, '2024-01-13 16:56:38', '2024-01-13 16:56:38'),
	(5, 'Kymco', 1, '2024-01-13 16:57:00', '2024-01-13 16:57:00'),
	(6, 'Benelli', 1, '2024-01-13 16:57:21', '2024-01-13 16:57:21');

-- Dumping structure for table trip.scooter_models
CREATE TABLE IF NOT EXISTS `scooter_models` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `scooter_make_id` bigint unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `scooter_models_scooter_make_id_foreign` (`scooter_make_id`),
  CONSTRAINT `scooter_models_scooter_make_id_foreign` FOREIGN KEY (`scooter_make_id`) REFERENCES `scooter_makes` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table trip.scooter_models: ~16 rows (approximately)
INSERT INTO `scooter_models` (`id`, `name`, `status`, `scooter_make_id`, `created_at`, `updated_at`) VALUES
	(2, 'Marino Classic', 1, 2, '2024-01-13 19:21:34', '2024-01-13 19:21:34'),
	(3, 'Orbit', 1, 3, '2024-01-13 19:22:02', '2024-01-13 19:22:02'),
	(4, 'JET4', 1, 3, '2024-01-13 19:22:47', '2024-01-13 19:22:47'),
	(5, '150', 1, 4, '2024-01-13 19:23:11', '2024-01-13 19:23:11'),
	(6, 'Urban S', 1, 5, '2024-01-13 19:23:41', '2024-01-13 19:23:41'),
	(7, 'Caffenero', 1, 5, '2024-01-13 19:24:06', '2024-01-13 19:24:06'),
	(8, 'Agility', 1, 5, '2024-01-13 19:24:32', '2024-01-13 19:24:32'),
	(9, 'Fiddle 2', 1, 3, '2024-01-13 19:24:55', '2024-01-13 19:29:11'),
	(10, 'Semphoney SR', 1, 3, '2024-01-13 19:25:20', '2024-01-13 19:25:20'),
	(11, 'zafferano', 1, 6, '2024-01-13 19:25:42', '2024-01-13 19:25:42'),
	(12, 'Fiddle 3', 1, 3, '2024-01-13 19:29:33', '2024-01-13 19:29:33'),
	(13, 'JET 14', 1, 3, '2024-01-13 19:30:24', '2024-01-13 19:30:24'),
	(14, 'Semphoney S', 1, 3, '2024-01-13 19:31:08', '2024-01-13 19:31:08'),
	(15, 'Semphoney ST', 1, 3, '2024-01-13 19:31:27', '2024-01-13 19:31:27'),
	(16, 'JET X', 1, 3, '2024-01-13 19:31:53', '2024-01-13 19:31:53'),
	(17, 'CRUISYM', 1, 3, '2024-01-13 19:39:00', '2024-01-13 19:39:00');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
