-- --------------------------------------------------------
-- Host:                         localhost
-- Server version:               5.7.24 - MySQL Community Server (GPL)
-- Server OS:                    Win32
-- HeidiSQL Version:             10.2.0.5599
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Dumping database structure for db_ibox
CREATE DATABASE IF NOT EXISTS `db_ibox` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `db_ibox`;

-- Dumping structure for table db_ibox.asetcustomers
CREATE TABLE IF NOT EXISTS `asetcustomers` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `customer_id` bigint(20) unsigned NOT NULL,
  `rackcust_id` bigint(20) unsigned NOT NULL,
  `asset_id` int(11) NOT NULL,
  `hostname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alias` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `users_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `asetcustomers_customer_id_foreign` (`customer_id`),
  KEY `asetcustomers_rackcust_id_foreign` (`rackcust_id`),
  CONSTRAINT `asetcustomers_customer_id_foreign` FOREIGN KEY (`customer_id`) REFERENCES `customers` (`id`),
  CONSTRAINT `asetcustomers_rackcust_id_foreign` FOREIGN KEY (`rackcust_id`) REFERENCES `rackcustomers` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table db_ibox.asetcustomers: ~0 rows (approximately)
DELETE FROM `asetcustomers`;
/*!40000 ALTER TABLE `asetcustomers` DISABLE KEYS */;
/*!40000 ALTER TABLE `asetcustomers` ENABLE KEYS */;

-- Dumping structure for table db_ibox.asetpops
CREATE TABLE IF NOT EXISTS `asetpops` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `pop_id` bigint(20) unsigned NOT NULL,
  `rackpop_id` bigint(20) unsigned NOT NULL,
  `asset_id` int(11) NOT NULL,
  `hostname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alias` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `users_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `asset_group` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `asetpops_pop_id_foreign` (`pop_id`),
  KEY `asetpops_rackpop_id_foreign` (`rackpop_id`),
  CONSTRAINT `asetpops_pop_id_foreign` FOREIGN KEY (`pop_id`) REFERENCES `pops` (`id`),
  CONSTRAINT `asetpops_rackpop_id_foreign` FOREIGN KEY (`rackpop_id`) REFERENCES `rackpops` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table db_ibox.asetpops: ~0 rows (approximately)
DELETE FROM `asetpops`;
/*!40000 ALTER TABLE `asetpops` DISABLE KEYS */;
/*!40000 ALTER TABLE `asetpops` ENABLE KEYS */;

-- Dumping structure for table db_ibox.asets
CREATE TABLE IF NOT EXISTS `asets` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `gudang_id` bigint(20) unsigned NOT NULL,
  `material_number_id` bigint(20) unsigned NOT NULL,
  `ip_nms` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sap_gi_doc_number` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `customer_id` bigint(20) unsigned DEFAULT NULL,
  `pop_id` bigint(20) unsigned DEFAULT NULL,
  `port` int(11) DEFAULT NULL,
  `slot` int(11) DEFAULT NULL,
  `serial_number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remark1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remark2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remark3` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remark4` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remark5` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `users_id` bigint(20) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `sap_gr_doc_number` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `asets_serial_number_unique` (`serial_number`),
  KEY `asets_material_number_id_foreign` (`material_number_id`),
  KEY `asets_gudang_id_foreign` (`gudang_id`),
  KEY `asets_users_id_foreign` (`users_id`),
  KEY `asets_customer_id_foreign` (`customer_id`),
  KEY `asets_pop_id_foreign` (`pop_id`),
  CONSTRAINT `asets_customer_id_foreign` FOREIGN KEY (`customer_id`) REFERENCES `customers` (`id`),
  CONSTRAINT `asets_gudang_id_foreign` FOREIGN KEY (`gudang_id`) REFERENCES `gudangs` (`id`),
  CONSTRAINT `asets_material_number_id_foreign` FOREIGN KEY (`material_number_id`) REFERENCES `masterasets` (`id`) ON DELETE CASCADE,
  CONSTRAINT `asets_pop_id_foreign` FOREIGN KEY (`pop_id`) REFERENCES `pops` (`id`),
  CONSTRAINT `asets_users_id_foreign` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table db_ibox.asets: ~0 rows (approximately)
DELETE FROM `asets`;
/*!40000 ALTER TABLE `asets` DISABLE KEYS */;
/*!40000 ALTER TABLE `asets` ENABLE KEYS */;

-- Dumping structure for table db_ibox.a_ac_electricity
CREATE TABLE IF NOT EXISTS `a_ac_electricity` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `desc_kwh` varchar(255) DEFAULT NULL,
  `desc_acpdb` varchar(255) DEFAULT NULL,
  `kondisi_kwh` varchar(255) DEFAULT NULL,
  `kondisi_acpdb` varchar(255) DEFAULT NULL,
  `file_kwh` varchar(255) DEFAULT NULL,
  `file_acpdb` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `id_pop` bigint(20) unsigned DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_a_ac_electricity_pops` (`id_pop`),
  CONSTRAINT `FK_a_ac_electricity_pops` FOREIGN KEY (`id_pop`) REFERENCES `pops` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- Dumping data for table db_ibox.a_ac_electricity: ~2 rows (approximately)
DELETE FROM `a_ac_electricity`;
/*!40000 ALTER TABLE `a_ac_electricity` DISABLE KEYS */;
INSERT INTO `a_ac_electricity` (`id`, `desc_kwh`, `desc_acpdb`, `kondisi_kwh`, `kondisi_acpdb`, `file_kwh`, `file_acpdb`, `created_at`, `id_pop`) VALUES
	(1, 'tes', 'edit', 'Kurang', 'Kurang', '15012020_124427.jpg', '15012020_1244271.jpg', '2020-01-05 22:24:02', 4),
	(2, 'tayib', 'sddd', 'Baik', 'Baik', '05012020_071042.png', '05012020_071042.jpg', '2020-01-05 23:10:42', 2);
/*!40000 ALTER TABLE `a_ac_electricity` ENABLE KEYS */;

-- Dumping structure for table db_ibox.a_build_infs
CREATE TABLE IF NOT EXISTS `a_build_infs` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `desc_rack` varchar(255) DEFAULT NULL,
  `kondisi_rack` varchar(255) DEFAULT NULL,
  `file_rack` varchar(255) DEFAULT NULL,
  `desc_building` varchar(255) DEFAULT NULL,
  `kondisi_building` varchar(255) DEFAULT NULL,
  `file_building` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `id_pop` bigint(20) unsigned DEFAULT NULL,
  `no_rack` bigint(20) unsigned DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_a_build_infs_pops` (`id_pop`),
  KEY `FK_a_build_infs_rackpops` (`no_rack`),
  CONSTRAINT `FK_a_build_infs_pops` FOREIGN KEY (`id_pop`) REFERENCES `pops` (`id`),
  CONSTRAINT `FK_a_build_infs_rackpops` FOREIGN KEY (`no_rack`) REFERENCES `rackpops` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

-- Dumping data for table db_ibox.a_build_infs: ~3 rows (approximately)
DELETE FROM `a_build_infs`;
/*!40000 ALTER TABLE `a_build_infs` DISABLE KEYS */;
INSERT INTO `a_build_infs` (`id`, `desc_rack`, `kondisi_rack`, `file_rack`, `desc_building`, `kondisi_building`, `file_building`, `created_at`, `id_pop`, `no_rack`) VALUES
	(2, 'tes', 'Rusak', '12012020_070401.jpg', 'di edit', 'Kurang', '12012020_0704011.jpg', '2020-01-05 00:46:23', 1, 1),
	(3, 'asdf', 'Baik', '04012020_085319.jpg', 'ssfd', 'Rusak', '04012020_0853191.jpg', '2020-01-05 00:53:19', 4, 1),
	(4, 'ada no rack', 'Baik', '07012020_130213.png', 'buildign', 'Kurang', '07012020_130213.jpg', '2020-01-08 05:02:14', 2, 2);
/*!40000 ALTER TABLE `a_build_infs` ENABLE KEYS */;

-- Dumping structure for table db_ibox.a_dc_electricity
CREATE TABLE IF NOT EXISTS `a_dc_electricity` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `desc_rectifier` varchar(255) DEFAULT NULL,
  `kondisi_rectifier` varchar(255) DEFAULT NULL,
  `file_rectifier` varchar(255) DEFAULT NULL,
  `desc_dcpdb` varchar(255) DEFAULT NULL,
  `kondisi_dcpdb` varchar(255) DEFAULT NULL,
  `file_dcpdb` varchar(255) DEFAULT NULL,
  `desc_baterai` varchar(255) DEFAULT NULL,
  `kondisi_baterai` varchar(255) DEFAULT NULL,
  `file_baterai` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `id_pop` bigint(20) unsigned DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_a_dc_electricity_pops` (`id_pop`),
  CONSTRAINT `FK_a_dc_electricity_pops` FOREIGN KEY (`id_pop`) REFERENCES `pops` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- Dumping data for table db_ibox.a_dc_electricity: ~2 rows (approximately)
DELETE FROM `a_dc_electricity`;
/*!40000 ALTER TABLE `a_dc_electricity` DISABLE KEYS */;
INSERT INTO `a_dc_electricity` (`id`, `desc_rectifier`, `kondisi_rectifier`, `file_rectifier`, `desc_dcpdb`, `kondisi_dcpdb`, `file_dcpdb`, `desc_baterai`, `kondisi_baterai`, `file_baterai`, `created_at`, `id_pop`) VALUES
	(1, 'ini', 'Baik', '06012020_122121.jpg', 'dc', 'Rusak', '06012020_1221211.jpg', NULL, NULL, NULL, '2020-01-07 04:21:21', 2),
	(2, 'tes', 'Rusak', '12012020_091328.jpg', 'sdfs', 'Rusak', '12012020_0913281.jpg', 'fdsf', 'Rusak', '12012020_0913282.jpg', '2020-01-12 17:13:28', 2);
/*!40000 ALTER TABLE `a_dc_electricity` ENABLE KEYS */;

-- Dumping structure for table db_ibox.a_monitoring_sistem
CREATE TABLE IF NOT EXISTS `a_monitoring_sistem` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `desc_ac` varchar(255) DEFAULT NULL,
  `kondisi_ac` varchar(255) DEFAULT NULL,
  `file_ac` varchar(255) DEFAULT NULL,
  `desc_alarm` varchar(255) DEFAULT NULL,
  `kondisi_alarm` varchar(255) DEFAULT NULL,
  `file_alarm` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `id_pop` bigint(20) unsigned DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_a_monitoring_sistem_pops` (`id_pop`),
  CONSTRAINT `FK_a_monitoring_sistem_pops` FOREIGN KEY (`id_pop`) REFERENCES `pops` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- Dumping data for table db_ibox.a_monitoring_sistem: ~0 rows (approximately)
DELETE FROM `a_monitoring_sistem`;
/*!40000 ALTER TABLE `a_monitoring_sistem` DISABLE KEYS */;
INSERT INTO `a_monitoring_sistem` (`id`, `desc_ac`, `kondisi_ac`, `file_ac`, `desc_alarm`, `kondisi_alarm`, `file_alarm`, `created_at`, `id_pop`) VALUES
	(1, 'ini AC', 'Baik', '06012020_124557.jpg', 'ini ALARM', 'Kurang', '06012020_1245571.jpg', '2020-01-07 04:45:57', 2);
/*!40000 ALTER TABLE `a_monitoring_sistem` ENABLE KEYS */;

-- Dumping structure for table db_ibox.a_odf
CREATE TABLE IF NOT EXISTS `a_odf` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `desc_odf` varchar(255) DEFAULT NULL,
  `kondisi_odf` varchar(255) DEFAULT NULL,
  `file_odf` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `id_pop` bigint(20) unsigned DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_a_odf_pops` (`id_pop`),
  CONSTRAINT `FK_a_odf_pops` FOREIGN KEY (`id_pop`) REFERENCES `pops` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- Dumping data for table db_ibox.a_odf: ~0 rows (approximately)
DELETE FROM `a_odf`;
/*!40000 ALTER TABLE `a_odf` DISABLE KEYS */;
INSERT INTO `a_odf` (`id`, `desc_odf`, `kondisi_odf`, `file_odf`, `created_at`, `id_pop`) VALUES
	(1, 'ini odf', 'Baik', '06012020_124951.jpg', '2020-01-07 04:49:51', 3);
/*!40000 ALTER TABLE `a_odf` ENABLE KEYS */;

-- Dumping structure for table db_ibox.a_pwr_supply
CREATE TABLE IF NOT EXISTS `a_pwr_supply` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `desc_genset` varchar(255) DEFAULT NULL,
  `kondisi_genset` varchar(255) DEFAULT NULL,
  `file_genset` varchar(255) DEFAULT NULL,
  `desc_ats` varchar(255) DEFAULT NULL,
  `kondisi_ats` varchar(255) DEFAULT NULL,
  `file_ats` varchar(255) DEFAULT NULL,
  `desc_inverter` varchar(255) DEFAULT NULL,
  `kondisi_inverter` varchar(255) DEFAULT NULL,
  `file_inverter` varchar(255) DEFAULT NULL,
  `desc_ups` varchar(255) DEFAULT NULL,
  `kondisi_ups` varchar(255) DEFAULT NULL,
  `file_ups` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `id_pop` bigint(20) unsigned DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_a_pwr_supply_pops` (`id_pop`),
  CONSTRAINT `FK_a_pwr_supply_pops` FOREIGN KEY (`id_pop`) REFERENCES `pops` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- Dumping data for table db_ibox.a_pwr_supply: ~0 rows (approximately)
DELETE FROM `a_pwr_supply`;
/*!40000 ALTER TABLE `a_pwr_supply` DISABLE KEYS */;
INSERT INTO `a_pwr_supply` (`id`, `desc_genset`, `kondisi_genset`, `file_genset`, `desc_ats`, `kondisi_ats`, `file_ats`, `desc_inverter`, `kondisi_inverter`, `file_inverter`, `desc_ups`, `kondisi_ups`, `file_ups`, `created_at`, `id_pop`) VALUES
	(1, 'ini genset', 'Baik', '06012020_123601.jpg', 'ini ATS', 'Baik', '06012020_1236011.jpg', 'ini INVERTER', 'Rusak', '06012020_1236012.jpg', 'ini UPS', 'Baik', '06012020_1236013.jpg', '2020-01-07 04:36:01', 2);
/*!40000 ALTER TABLE `a_pwr_supply` ENABLE KEYS */;

-- Dumping structure for table db_ibox.customers
CREATE TABLE IF NOT EXISTS `customers` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `building_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `level` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `room` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `province_id` int(11) NOT NULL,
  `city_id` int(11) NOT NULL,
  `segment` int(11) NOT NULL,
  `lat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lng` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_customer` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `crm_customer` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `users_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `type_id` bigint(20) unsigned DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `customers_id_customer_unique` (`id_customer`),
  UNIQUE KEY `customers_crm_customer_unique` (`crm_customer`),
  KEY `customers_type_id_foreign` (`type_id`),
  CONSTRAINT `customers_type_id_foreign` FOREIGN KEY (`type_id`) REFERENCES `types` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table db_ibox.customers: ~0 rows (approximately)
DELETE FROM `customers`;
/*!40000 ALTER TABLE `customers` DISABLE KEYS */;
/*!40000 ALTER TABLE `customers` ENABLE KEYS */;

-- Dumping structure for table db_ibox.gudangs
CREATE TABLE IF NOT EXISTS `gudangs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `id_gudang` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `lat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lng` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `type_id` bigint(20) unsigned DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `gudangs_type_id_foreign` (`type_id`),
  CONSTRAINT `gudangs_type_id_foreign` FOREIGN KEY (`type_id`) REFERENCES `types` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table db_ibox.gudangs: ~0 rows (approximately)
DELETE FROM `gudangs`;
/*!40000 ALTER TABLE `gudangs` DISABLE KEYS */;
/*!40000 ALTER TABLE `gudangs` ENABLE KEYS */;

-- Dumping structure for table db_ibox.heatmap
CREATE TABLE IF NOT EXISTS `heatmap` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `wo_number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ar_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lng` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `count` int(11) NOT NULL,
  `root_cause_foc` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `duration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table db_ibox.heatmap: ~0 rows (approximately)
DELETE FROM `heatmap`;
/*!40000 ALTER TABLE `heatmap` DISABLE KEYS */;
/*!40000 ALTER TABLE `heatmap` ENABLE KEYS */;

-- Dumping structure for table db_ibox.indonesia_cities
CREATE TABLE IF NOT EXISTS `indonesia_cities` (
  `id` char(4) COLLATE utf8mb4_unicode_ci NOT NULL,
  `province_id` char(2) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `indonesia_cities_province_id_foreign` (`province_id`),
  CONSTRAINT `indonesia_cities_province_id_foreign` FOREIGN KEY (`province_id`) REFERENCES `indonesia_provinces` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table db_ibox.indonesia_cities: ~0 rows (approximately)
DELETE FROM `indonesia_cities`;
/*!40000 ALTER TABLE `indonesia_cities` DISABLE KEYS */;
/*!40000 ALTER TABLE `indonesia_cities` ENABLE KEYS */;

-- Dumping structure for table db_ibox.indonesia_districts
CREATE TABLE IF NOT EXISTS `indonesia_districts` (
  `id` char(7) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city_id` char(4) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `indonesia_districts_city_id_foreign` (`city_id`),
  CONSTRAINT `indonesia_districts_city_id_foreign` FOREIGN KEY (`city_id`) REFERENCES `indonesia_cities` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table db_ibox.indonesia_districts: ~0 rows (approximately)
DELETE FROM `indonesia_districts`;
/*!40000 ALTER TABLE `indonesia_districts` DISABLE KEYS */;
/*!40000 ALTER TABLE `indonesia_districts` ENABLE KEYS */;

-- Dumping structure for table db_ibox.indonesia_provinces
CREATE TABLE IF NOT EXISTS `indonesia_provinces` (
  `id` char(2) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table db_ibox.indonesia_provinces: ~0 rows (approximately)
DELETE FROM `indonesia_provinces`;
/*!40000 ALTER TABLE `indonesia_provinces` DISABLE KEYS */;
/*!40000 ALTER TABLE `indonesia_provinces` ENABLE KEYS */;

-- Dumping structure for table db_ibox.indonesia_villages
CREATE TABLE IF NOT EXISTS `indonesia_villages` (
  `id` char(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `district_id` char(7) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `indonesia_villages_district_id_foreign` (`district_id`),
  CONSTRAINT `indonesia_villages_district_id_foreign` FOREIGN KEY (`district_id`) REFERENCES `indonesia_districts` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table db_ibox.indonesia_villages: ~0 rows (approximately)
DELETE FROM `indonesia_villages`;
/*!40000 ALTER TABLE `indonesia_villages` DISABLE KEYS */;
/*!40000 ALTER TABLE `indonesia_villages` ENABLE KEYS */;

-- Dumping structure for table db_ibox.isps
CREATE TABLE IF NOT EXISTS `isps` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table db_ibox.isps: ~0 rows (approximately)
DELETE FROM `isps`;
/*!40000 ALTER TABLE `isps` DISABLE KEYS */;
/*!40000 ALTER TABLE `isps` ENABLE KEYS */;

-- Dumping structure for table db_ibox.jobs
CREATE TABLE IF NOT EXISTS `jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `job_number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `location` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lng` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` date NOT NULL,
  `category` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `severity` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `priority` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `impact` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `disposisi` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `file` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `excecution_number` date DEFAULT NULL,
  `relization_date` date DEFAULT NULL,
  `users_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `subcategory` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table db_ibox.jobs: ~2 rows (approximately)
DELETE FROM `jobs`;
/*!40000 ALTER TABLE `jobs` DISABLE KEYS */;
INSERT INTO `jobs` (`id`, `job_number`, `description`, `location`, `lat`, `lng`, `date`, `category`, `severity`, `priority`, `impact`, `disposisi`, `status`, `file`, `excecution_number`, `relization_date`, `users_id`, `created_at`, `updated_at`, `subcategory`) VALUES
	(1, '001', 'maintenance kabel jalurA2', '', '', '', '0000-00-00', '', '', '', '', NULL, 'selesai', NULL, NULL, NULL, '2', NULL, NULL, NULL),
	(2, '002', 'ini job admin', 'pgg', '3.434', '3.434', '2020-01-06', '3', '4', '4', '3', NULL, 'selesai', NULL, NULL, NULL, '1', NULL, NULL, NULL);
/*!40000 ALTER TABLE `jobs` ENABLE KEYS */;

-- Dumping structure for table db_ibox.logmutasis
CREATE TABLE IF NOT EXISTS `logmutasis` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `aset_id` bigint(20) unsigned NOT NULL,
  `gudang_id` bigint(20) unsigned DEFAULT NULL,
  `customer_id` bigint(20) unsigned DEFAULT NULL,
  `pop_id` bigint(20) unsigned DEFAULT NULL,
  `gr` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gi` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `logmutasis_aset_id_foreign` (`aset_id`),
  CONSTRAINT `logmutasis_aset_id_foreign` FOREIGN KEY (`aset_id`) REFERENCES `asets` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table db_ibox.logmutasis: ~0 rows (approximately)
DELETE FROM `logmutasis`;
/*!40000 ALTER TABLE `logmutasis` DISABLE KEYS */;
/*!40000 ALTER TABLE `logmutasis` ENABLE KEYS */;

-- Dumping structure for table db_ibox.masterasets
CREATE TABLE IF NOT EXISTS `masterasets` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `material_number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `part_number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `brand` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category` int(11) NOT NULL,
  `material_description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `aset_type` int(11) DEFAULT NULL,
  `patching_name_id` int(11) DEFAULT NULL,
  `asset_value` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rack_type` int(11) DEFAULT NULL,
  `material_status` int(11) DEFAULT NULL,
  `ndps` int(11) DEFAULT NULL,
  `mpls` int(11) DEFAULT NULL,
  `dimension` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `license` int(11) DEFAULT NULL,
  `media_holder` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `datasheet` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `notes` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `asset_group` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `users_id` bigint(20) unsigned DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `masterasets_material_number_unique` (`material_number`),
  UNIQUE KEY `masterasets_part_number_unique` (`part_number`),
  KEY `masterasets_users_id_foreign` (`users_id`),
  CONSTRAINT `masterasets_users_id_foreign` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table db_ibox.masterasets: ~0 rows (approximately)
DELETE FROM `masterasets`;
/*!40000 ALTER TABLE `masterasets` DISABLE KEYS */;
/*!40000 ALTER TABLE `masterasets` ENABLE KEYS */;

-- Dumping structure for table db_ibox.migrations
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=36 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table db_ibox.migrations: ~35 rows (approximately)
DELETE FROM `migrations`;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
	(1, '2014_10_12_000000_create_users_table', 1),
	(2, '2014_10_12_100000_create_password_resets_table', 1),
	(3, '2016_08_03_072729_create_provinces_table', 1),
	(4, '2016_08_03_072750_create_cities_table', 1),
	(5, '2016_08_03_072804_create_districts_table', 1),
	(6, '2016_08_03_072819_create_villages_table', 1),
	(7, '2019_09_07_191957_create_customers_table', 1),
	(8, '2019_09_09_165858_create_mrtgs_table', 1),
	(9, '2019_09_11_015009_create_masterasets_table', 1),
	(10, '2019_09_13_065854_create_pops_table', 1),
	(11, '2019_09_16_052036_create_rackpops_table', 1),
	(12, '2019_09_17_160510_create_asetpops_table', 1),
	(13, '2019_09_24_160245_create_isps_table', 1),
	(14, '2019_09_24_162247_create_ports_table', 1),
	(15, '2019_09_24_162259_create_slots_table', 1),
	(16, '2019_09_30_054040_create_rackcustomers_table', 1),
	(17, '2019_09_30_055134_create_asetcustomers_table', 1),
	(18, '2019_10_04_141932_create_jobs_table', 1),
	(19, '2019_10_07_143210_create_segment_table', 1),
	(20, '2019_10_14_153243_add_job_table', 1),
	(21, '2019_11_02_165444_create_gudangs_table', 1),
	(22, '2019_11_11_075215_create_asets_table', 1),
	(23, '2019_11_13_011743_create_types_table', 1),
	(24, '2019_11_13_012135_alter_aset_table', 1),
	(25, '2019_11_13_012255_alter_cust_table', 1),
	(26, '2019_11_13_012316_alter_gdg_table', 1),
	(27, '2019_11_13_012357_alter_pop_table', 1),
	(28, '2019_11_13_155245_create_heatmap_table', 1),
	(29, '2019_11_19_151823_create_schedule_table', 1),
	(30, '2019_11_20_155352_create_logmutasis_table', 1),
	(31, '2019_11_25_191308_add_poprack_table', 1),
	(32, '2019_11_25_191341_add_popaset_table', 1),
	(33, '2019_11_26_073833_create_servicecat_table', 1),
	(34, '2019_11_27_051811_create_services_table', 1),
	(35, '2019_11_27_052142_create_terminasis_table', 1);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;

-- Dumping structure for table db_ibox.mrtgs
CREATE TABLE IF NOT EXISTS `mrtgs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `customer_id` bigint(20) unsigned NOT NULL,
  `service_id` int(11) NOT NULL,
  `link` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `users_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `mrtgs_customer_id_foreign` (`customer_id`),
  CONSTRAINT `mrtgs_customer_id_foreign` FOREIGN KEY (`customer_id`) REFERENCES `customers` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table db_ibox.mrtgs: ~0 rows (approximately)
DELETE FROM `mrtgs`;
/*!40000 ALTER TABLE `mrtgs` DISABLE KEYS */;
/*!40000 ALTER TABLE `mrtgs` ENABLE KEYS */;

-- Dumping structure for table db_ibox.password_resets
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table db_ibox.password_resets: ~0 rows (approximately)
DELETE FROM `password_resets`;
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;

-- Dumping structure for table db_ibox.pm_ac_acpdb_dataacpdb
CREATE TABLE IF NOT EXISTS `pm_ac_acpdb_dataacpdb` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `kondisi_box` varchar(255) NOT NULL,
  `aset_amarta` varchar(255) NOT NULL,
  `id_pop` bigint(20) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_pm_ac_acpdb_dataacpdb_pops` (`id_pop`),
  CONSTRAINT `FK_pm_ac_acpdb_dataacpdb_pops` FOREIGN KEY (`id_pop`) REFERENCES `pops` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

-- Dumping data for table db_ibox.pm_ac_acpdb_dataacpdb: ~4 rows (approximately)
DELETE FROM `pm_ac_acpdb_dataacpdb`;
/*!40000 ALTER TABLE `pm_ac_acpdb_dataacpdb` DISABLE KEYS */;
INSERT INTO `pm_ac_acpdb_dataacpdb` (`id`, `kondisi_box`, `aset_amarta`, `id_pop`) VALUES
	(2, 'Instalasi Rapi', 'yesdfsf', 1),
	(3, 'Kering', 'cid', 1),
	(4, 'Bersih', 'tt', 1),
	(5, 'Bersih', 'tes acpdb', 4);
/*!40000 ALTER TABLE `pm_ac_acpdb_dataacpdb` ENABLE KEYS */;

-- Dumping structure for table db_ibox.pm_ac_acpdb_dokumentasi
CREATE TABLE IF NOT EXISTS `pm_ac_acpdb_dokumentasi` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `foto_1` varchar(255) NOT NULL,
  `foto_2` varchar(255) NOT NULL,
  `foto_3` varchar(255) NOT NULL,
  `foto_4` varchar(255) NOT NULL,
  `foto_5` varchar(255) NOT NULL,
  `foto_6` varchar(255) NOT NULL,
  `id_pop` bigint(20) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_pm_ac_acpdb_dokumentasi_pops` (`id_pop`),
  CONSTRAINT `FK_pm_ac_acpdb_dokumentasi_pops` FOREIGN KEY (`id_pop`) REFERENCES `pops` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

-- Dumping data for table db_ibox.pm_ac_acpdb_dokumentasi: ~3 rows (approximately)
DELETE FROM `pm_ac_acpdb_dokumentasi`;
/*!40000 ALTER TABLE `pm_ac_acpdb_dokumentasi` DISABLE KEYS */;
INSERT INTO `pm_ac_acpdb_dokumentasi` (`id`, `foto_1`, `foto_2`, `foto_3`, `foto_4`, `foto_5`, `foto_6`, `id_pop`) VALUES
	(2, '21012020_021914.jpg', '21012020_0219141.jpg', '21012020_0219142.jpg', '21012020_0219143.jpg', '21012020_0219144.jpg', '21012020_0219145.jpg', 1),
	(3, '', '', '', '', '', '', 2),
	(4, '23012020_152815.jpg', '23012020_1528151.jpg', '23012020_1528152.jpg', '23012020_1528153.jpg', '23012020_1528154.jpg', '23012020_1528155.jpg', 4);
/*!40000 ALTER TABLE `pm_ac_acpdb_dokumentasi` ENABLE KEYS */;

-- Dumping structure for table db_ibox.pm_ac_acpdb_foto_single
CREATE TABLE IF NOT EXISTS `pm_ac_acpdb_foto_single` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `foto` varchar(255) NOT NULL,
  `id_pop` bigint(20) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_pm_ac_acpdb_foto_single_pops` (`id_pop`),
  CONSTRAINT `FK_pm_ac_acpdb_foto_single_pops` FOREIGN KEY (`id_pop`) REFERENCES `pops` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- Dumping data for table db_ibox.pm_ac_acpdb_foto_single: ~3 rows (approximately)
DELETE FROM `pm_ac_acpdb_foto_single`;
/*!40000 ALTER TABLE `pm_ac_acpdb_foto_single` DISABLE KEYS */;
INSERT INTO `pm_ac_acpdb_foto_single` (`id`, `foto`, `id_pop`) VALUES
	(1, '16012020_114620.jpg', 4),
	(2, '16012020_114740.jpg', 4),
	(3, '16012020_115854.jpg', 4);
/*!40000 ALTER TABLE `pm_ac_acpdb_foto_single` ENABLE KEYS */;

-- Dumping structure for table db_ibox.pm_ac_acpdb_inspeksi
CREATE TABLE IF NOT EXISTS `pm_ac_acpdb_inspeksi` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `k_terminal_mcb` varchar(255) DEFAULT NULL,
  `indikator_r` varchar(255) DEFAULT NULL,
  `indikator_s` varchar(255) DEFAULT NULL,
  `indikator_t` varchar(255) DEFAULT NULL,
  `timer_theben_ac` varchar(255) DEFAULT NULL,
  `thermostat_honeywell_k` varchar(255) DEFAULT NULL,
  `thermostat_dc_fan` varchar(255) DEFAULT NULL,
  `fail_over` varchar(255) DEFAULT NULL,
  `merek_tipe` varchar(255) DEFAULT NULL,
  `perangkat_off` varchar(255) DEFAULT NULL,
  `id_pop` bigint(20) unsigned DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_pm_ac_acpdb_inspeksi_pops` (`id_pop`),
  CONSTRAINT `FK_pm_ac_acpdb_inspeksi_pops` FOREIGN KEY (`id_pop`) REFERENCES `pops` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- Dumping data for table db_ibox.pm_ac_acpdb_inspeksi: ~0 rows (approximately)
DELETE FROM `pm_ac_acpdb_inspeksi`;
/*!40000 ALTER TABLE `pm_ac_acpdb_inspeksi` DISABLE KEYS */;
INSERT INTO `pm_ac_acpdb_inspeksi` (`id`, `k_terminal_mcb`, `indikator_r`, `indikator_s`, `indikator_t`, `timer_theben_ac`, `thermostat_honeywell_k`, `thermostat_dc_fan`, `fail_over`, `merek_tipe`, `perangkat_off`, `id_pop`) VALUES
	(1, 'Kencang', 'Hijau', 'Hijau', 'Hijau', 'Berfungsi', 'Berfungsi', 'Berfungsi', 'Berhasil', 'tes', 'tes', 1);
/*!40000 ALTER TABLE `pm_ac_acpdb_inspeksi` ENABLE KEYS */;

-- Dumping structure for table db_ibox.pm_ac_acpdb_lain_lain
CREATE TABLE IF NOT EXISTS `pm_ac_acpdb_lain_lain` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `keterangan` varchar(255) NOT NULL,
  `id_pop` bigint(20) unsigned DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_pm_ac_acpdb_lain_lain_pops` (`id_pop`),
  CONSTRAINT `FK_pm_ac_acpdb_lain_lain_pops` FOREIGN KEY (`id_pop`) REFERENCES `pops` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- Dumping data for table db_ibox.pm_ac_acpdb_lain_lain: ~0 rows (approximately)
DELETE FROM `pm_ac_acpdb_lain_lain`;
/*!40000 ALTER TABLE `pm_ac_acpdb_lain_lain` DISABLE KEYS */;
INSERT INTO `pm_ac_acpdb_lain_lain` (`id`, `keterangan`, `id_pop`) VALUES
	(1, 'heiiiiii', 3);
/*!40000 ALTER TABLE `pm_ac_acpdb_lain_lain` ENABLE KEYS */;

-- Dumping structure for table db_ibox.pm_ac_acpdb_pengukuran_tegangan
CREATE TABLE IF NOT EXISTS `pm_ac_acpdb_pengukuran_tegangan` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `r_s_tegangan` bigint(20) NOT NULL,
  `r_t_tegangan` bigint(20) NOT NULL,
  `s_t_tegangan` bigint(20) NOT NULL,
  `n_g_tegangan` bigint(20) NOT NULL,
  `r_n_tegangan` bigint(20) NOT NULL,
  `s_n_tegangan` bigint(20) NOT NULL,
  `t_n_tegangan` bigint(20) NOT NULL,
  `r_g_tegangan` bigint(20) NOT NULL,
  `s_g_tegangan` bigint(20) NOT NULL,
  `t_g_tegangan` bigint(20) NOT NULL,
  `fasa_r_beban` bigint(20) NOT NULL,
  `fasa_s_beban` bigint(20) NOT NULL,
  `fasa_t_beban` bigint(20) NOT NULL,
  `id_pop` bigint(20) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_pm_ac_acpdb_pengukuran_tegangan_pops` (`id_pop`),
  CONSTRAINT `FK_pm_ac_acpdb_pengukuran_tegangan_pops` FOREIGN KEY (`id_pop`) REFERENCES `pops` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- Dumping data for table db_ibox.pm_ac_acpdb_pengukuran_tegangan: ~0 rows (approximately)
DELETE FROM `pm_ac_acpdb_pengukuran_tegangan`;
/*!40000 ALTER TABLE `pm_ac_acpdb_pengukuran_tegangan` DISABLE KEYS */;
INSERT INTO `pm_ac_acpdb_pengukuran_tegangan` (`id`, `r_s_tegangan`, `r_t_tegangan`, `s_t_tegangan`, `n_g_tegangan`, `r_n_tegangan`, `s_n_tegangan`, `t_n_tegangan`, `r_g_tegangan`, `s_g_tegangan`, `t_g_tegangan`, `fasa_r_beban`, `fasa_s_beban`, `fasa_t_beban`, `id_pop`) VALUES
	(1, 4545, 454, 53423, 34, 656, 324, 5656, 234, 56, 34, 1000, 1000, 1000, 3);
/*!40000 ALTER TABLE `pm_ac_acpdb_pengukuran_tegangan` ENABLE KEYS */;

-- Dumping structure for table db_ibox.pm_ac_acpdb_temuan
CREATE TABLE IF NOT EXISTS `pm_ac_acpdb_temuan` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `keterangan` varchar(255) NOT NULL,
  `id_pop` bigint(20) unsigned DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_pm_ac_acpdb_temuan_pops` (`id_pop`),
  CONSTRAINT `FK_pm_ac_acpdb_temuan_pops` FOREIGN KEY (`id_pop`) REFERENCES `pops` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- Dumping data for table db_ibox.pm_ac_acpdb_temuan: ~0 rows (approximately)
DELETE FROM `pm_ac_acpdb_temuan`;
/*!40000 ALTER TABLE `pm_ac_acpdb_temuan` DISABLE KEYS */;
INSERT INTO `pm_ac_acpdb_temuan` (`id`, `keterangan`, `id_pop`) VALUES
	(1, 'uuu', 3);
/*!40000 ALTER TABLE `pm_ac_acpdb_temuan` ENABLE KEYS */;

-- Dumping structure for table db_ibox.pm_ac_kwh_datakwhmeter
CREATE TABLE IF NOT EXISTS `pm_ac_kwh_datakwhmeter` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `id_pop` bigint(20) unsigned NOT NULL,
  `id_pelanggan` bigint(20) NOT NULL,
  `id_kwh_meter` bigint(20) DEFAULT NULL,
  `no_label_amarta` bigint(20) NOT NULL,
  `daya_pasang` bigint(20) DEFAULT NULL,
  `mcb_pasang` bigint(20) DEFAULT NULL,
  `fasa` varchar(255) DEFAULT NULL,
  `gembok` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `Index 2` (`id_pop`),
  CONSTRAINT `FK_pm_ac_datakwhmeter_pops` FOREIGN KEY (`id_pop`) REFERENCES `pops` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

-- Dumping data for table db_ibox.pm_ac_kwh_datakwhmeter: ~7 rows (approximately)
DELETE FROM `pm_ac_kwh_datakwhmeter`;
/*!40000 ALTER TABLE `pm_ac_kwh_datakwhmeter` DISABLE KEYS */;
INSERT INTO `pm_ac_kwh_datakwhmeter` (`id`, `id_pop`, `id_pelanggan`, `id_kwh_meter`, `no_label_amarta`, `daya_pasang`, `mcb_pasang`, `fasa`, `gembok`) VALUES
	(1, 4, 0, 0, 0, 0, 0, 'tes', 'Ada'),
	(2, 3, 3, 55565, 0, 500, 5, 'tes', 'Ada'),
	(3, 3, 5656, 56, 656, 656, 656, 'tes', 'Tidak Ada'),
	(4, 4, 0, 0, 0, 0, 0, 'halo', 'Tidak Ada'),
	(5, 4, 1111, 1111, 1111, 1111, 1111, 'hei', 'Tidak Ada'),
	(6, 4, 5, 5, 5, 5, 5, '5', 'Ada'),
	(7, 4, 5, 0, 0, 0, 0, '', 'Ada');
/*!40000 ALTER TABLE `pm_ac_kwh_datakwhmeter` ENABLE KEYS */;

-- Dumping structure for table db_ibox.pm_ac_kwh_dokumentasi
CREATE TABLE IF NOT EXISTS `pm_ac_kwh_dokumentasi` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `foto_1` varchar(255) NOT NULL,
  `foto_2` varchar(255) NOT NULL,
  `foto_3` varchar(255) NOT NULL,
  `foto_4` varchar(255) NOT NULL,
  `foto_5` varchar(255) NOT NULL,
  `foto_6` varchar(255) NOT NULL,
  `id_pop` bigint(20) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_pm_ac_dokumentasi_pops` (`id_pop`),
  CONSTRAINT `FK_pm_ac_dokumentasi_pops` FOREIGN KEY (`id_pop`) REFERENCES `pops` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

-- Dumping data for table db_ibox.pm_ac_kwh_dokumentasi: ~5 rows (approximately)
DELETE FROM `pm_ac_kwh_dokumentasi`;
/*!40000 ALTER TABLE `pm_ac_kwh_dokumentasi` DISABLE KEYS */;
INSERT INTO `pm_ac_kwh_dokumentasi` (`id`, `foto_1`, `foto_2`, `foto_3`, `foto_4`, `foto_5`, `foto_6`, `id_pop`) VALUES
	(3, '21012020_021431.jpg', '21012020_0214311.jpg', '21012020_0214312.jpg', '21012020_0214313.jpg', '21012020_0214314.jpg', '21012020_0214315.jpg', 1),
	(4, '', '', '', '', '', '', 1),
	(5, '', '', '', '', '', '', 1),
	(6, '21012020_070405.jpg', '21012020_0704051.jpg', '21012020_0704052.jpg', '21012020_0704053.jpg', '21012020_0704054.jpg', '21012020_0704055.jpg', 1),
	(7, '', '', '', '', '', '', 2);
/*!40000 ALTER TABLE `pm_ac_kwh_dokumentasi` ENABLE KEYS */;

-- Dumping structure for table db_ibox.pm_ac_kwh_inspeksi
CREATE TABLE IF NOT EXISTS `pm_ac_kwh_inspeksi` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `kondisi_box` varchar(255) DEFAULT NULL,
  `k_terminal_mcb` varchar(255) DEFAULT NULL,
  `indikator_r` varchar(255) DEFAULT NULL,
  `indikator_s` varchar(255) DEFAULT NULL,
  `indikator_t` varchar(255) DEFAULT NULL,
  `merek_tipe` varchar(255) DEFAULT NULL,
  `id_pop` bigint(20) unsigned DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_pm_ac_inspeksi_pops` (`id_pop`),
  CONSTRAINT `FK_pm_ac_inspeksi_pops` FOREIGN KEY (`id_pop`) REFERENCES `pops` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- Dumping data for table db_ibox.pm_ac_kwh_inspeksi: ~2 rows (approximately)
DELETE FROM `pm_ac_kwh_inspeksi`;
/*!40000 ALTER TABLE `pm_ac_kwh_inspeksi` DISABLE KEYS */;
INSERT INTO `pm_ac_kwh_inspeksi` (`id`, `kondisi_box`, `k_terminal_mcb`, `indikator_r`, `indikator_s`, `indikator_t`, `merek_tipe`, `id_pop`) VALUES
	(1, 'Bersih', 'Kencang', 'Hijau', 'Hijau', 'Hijau', 'samsung', 3),
	(2, 'Kotor', 'Kendor', 'Merah', 'Merah', 'Merah', 'rigat', 4);
/*!40000 ALTER TABLE `pm_ac_kwh_inspeksi` ENABLE KEYS */;

-- Dumping structure for table db_ibox.pm_ac_kwh_lain_lain
CREATE TABLE IF NOT EXISTS `pm_ac_kwh_lain_lain` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `keterangan` varchar(255) NOT NULL,
  `id_pop` bigint(20) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_pm_ac_lain_lain_pops` (`id_pop`),
  CONSTRAINT `FK_pm_ac_lain_lain_pops` FOREIGN KEY (`id_pop`) REFERENCES `pops` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- Dumping data for table db_ibox.pm_ac_kwh_lain_lain: ~2 rows (approximately)
DELETE FROM `pm_ac_kwh_lain_lain`;
/*!40000 ALTER TABLE `pm_ac_kwh_lain_lain` DISABLE KEYS */;
INSERT INTO `pm_ac_kwh_lain_lain` (`id`, `keterangan`, `id_pop`) VALUES
	(1, 'ini percobaan', 1),
	(2, 'heyy', 4);
/*!40000 ALTER TABLE `pm_ac_kwh_lain_lain` ENABLE KEYS */;

-- Dumping structure for table db_ibox.pm_ac_kwh_pengukuran_tegangan
CREATE TABLE IF NOT EXISTS `pm_ac_kwh_pengukuran_tegangan` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `r_s_tegangan` bigint(20) NOT NULL,
  `r_t_tegangan` bigint(20) NOT NULL,
  `s_t_tegangan` bigint(20) NOT NULL,
  `n_g_tegangan` bigint(20) NOT NULL,
  `r_n_tegangan` bigint(20) NOT NULL,
  `s_n_tegangan` bigint(20) NOT NULL,
  `t_n_tegangan` bigint(20) NOT NULL,
  `r_g_tegangan` bigint(20) NOT NULL,
  `s_g_tegangan` bigint(20) NOT NULL,
  `t_g_tegangan` bigint(20) NOT NULL,
  `fasa_r_beban` bigint(20) NOT NULL,
  `fasa_s_beban` bigint(20) NOT NULL,
  `fasa_t_beban` bigint(20) NOT NULL,
  `id_pop` bigint(20) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_pm_ac_pengukuran_tegangan_pops` (`id_pop`),
  CONSTRAINT `FK_pm_ac_pengukuran_tegangan_pops` FOREIGN KEY (`id_pop`) REFERENCES `pops` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- Dumping data for table db_ibox.pm_ac_kwh_pengukuran_tegangan: ~2 rows (approximately)
DELETE FROM `pm_ac_kwh_pengukuran_tegangan`;
/*!40000 ALTER TABLE `pm_ac_kwh_pengukuran_tegangan` DISABLE KEYS */;
INSERT INTO `pm_ac_kwh_pengukuran_tegangan` (`id`, `r_s_tegangan`, `r_t_tegangan`, `s_t_tegangan`, `n_g_tegangan`, `r_n_tegangan`, `s_n_tegangan`, `t_n_tegangan`, `r_g_tegangan`, `s_g_tegangan`, `t_g_tegangan`, `fasa_r_beban`, `fasa_s_beban`, `fasa_t_beban`, `id_pop`) VALUES
	(1, 34, 34, 34, 34, 34, 34, 34, 34, 34, 34, 50, 50, 50, 3),
	(2, 400, 400, 400, 400, 400, 400, 400, 400, 400, 400, 500, 500, 500, 4);
/*!40000 ALTER TABLE `pm_ac_kwh_pengukuran_tegangan` ENABLE KEYS */;

-- Dumping structure for table db_ibox.pm_ac_kwh_temuan
CREATE TABLE IF NOT EXISTS `pm_ac_kwh_temuan` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `keterangan` varchar(255) NOT NULL,
  `id_pop` bigint(20) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_pm_ac_temuan_pops` (`id_pop`),
  CONSTRAINT `FK_pm_ac_temuan_pops` FOREIGN KEY (`id_pop`) REFERENCES `pops` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- Dumping data for table db_ibox.pm_ac_kwh_temuan: ~2 rows (approximately)
DELETE FROM `pm_ac_kwh_temuan`;
/*!40000 ALTER TABLE `pm_ac_kwh_temuan` DISABLE KEYS */;
INSERT INTO `pm_ac_kwh_temuan` (`id`, `keterangan`, `id_pop`) VALUES
	(1, 'ini temuan untuk ditindak lanjuti', 1),
	(2, 'yeyyy', 4);
/*!40000 ALTER TABLE `pm_ac_kwh_temuan` ENABLE KEYS */;

-- Dumping structure for table db_ibox.pm_build_building
CREATE TABLE IF NOT EXISTS `pm_build_building` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `f_o_sisi_1` varchar(255) DEFAULT NULL,
  `f_o_sisi_2` varchar(255) DEFAULT NULL,
  `f_o_sisi_3` varchar(255) DEFAULT NULL,
  `f_o_sisi_4` varchar(255) DEFAULT NULL,
  `f_i_sisi_1` varchar(255) DEFAULT NULL,
  `f_i_sisi_2` varchar(255) DEFAULT NULL,
  `f_i_sisi_3` varchar(255) DEFAULT NULL,
  `f_i_sisi_4` varchar(255) DEFAULT NULL,
  `foto_atap` varchar(255) DEFAULT NULL,
  `foto_lantai` varchar(255) DEFAULT NULL,
  `lain_lain` varchar(255) DEFAULT NULL,
  `id_pop` bigint(20) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `Index 2` (`id_pop`),
  CONSTRAINT `FK_pm_build_building_pops` FOREIGN KEY (`id_pop`) REFERENCES `pops` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

-- Dumping data for table db_ibox.pm_build_building: ~0 rows (approximately)
DELETE FROM `pm_build_building`;
/*!40000 ALTER TABLE `pm_build_building` DISABLE KEYS */;
INSERT INTO `pm_build_building` (`id`, `f_o_sisi_1`, `f_o_sisi_2`, `f_o_sisi_3`, `f_o_sisi_4`, `f_i_sisi_1`, `f_i_sisi_2`, `f_i_sisi_3`, `f_i_sisi_4`, `foto_atap`, `foto_lantai`, `lain_lain`, `id_pop`) VALUES
	(3, '21012020_014118.jpg', '21012020_0141181.jpg', '21012020_0141182.jpg', '21012020_0141183.jpg', '21012020_0141184.jpg', '21012020_0141185.jpg', '21012020_0141186.jpg', '21012020_0141187.jpg', '21012020_0141188.jpg', '21012020_0141189.jpg', 'lagi', 4),
	(4, '23012020_141854.jpg', '23012020_1418541.jpg', '23012020_1418542.jpg', '23012020_1418543.jpg', '23012020_1418544.jpg', '23012020_1418545.jpg', '23012020_1418546.jpg', '23012020_1418547.jpg', '23012020_1418548.jpg', '23012020_1418549.jpg', 'tes isi building', 4);
/*!40000 ALTER TABLE `pm_build_building` ENABLE KEYS */;

-- Dumping structure for table db_ibox.pm_build_rack
CREATE TABLE IF NOT EXISTS `pm_build_rack` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `f_rack_1` varchar(255) DEFAULT NULL,
  `f_rack_2` varchar(255) DEFAULT NULL,
  `f_rack_3` varchar(255) DEFAULT NULL,
  `f_rack_4` varchar(255) DEFAULT NULL,
  `f_rack_5` varchar(255) DEFAULT NULL,
  `lain_lain` varchar(255) DEFAULT NULL,
  `id_pop` bigint(20) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `Index 2` (`id_pop`),
  CONSTRAINT `FK_pm_build_rack_pops` FOREIGN KEY (`id_pop`) REFERENCES `pops` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

-- Dumping data for table db_ibox.pm_build_rack: ~2 rows (approximately)
DELETE FROM `pm_build_rack`;
/*!40000 ALTER TABLE `pm_build_rack` DISABLE KEYS */;
INSERT INTO `pm_build_rack` (`id`, `f_rack_1`, `f_rack_2`, `f_rack_3`, `f_rack_4`, `f_rack_5`, `lain_lain`, `id_pop`) VALUES
	(2, '21012020_020616.jpg', '21012020_0206161.jpg', '21012020_0206162.jpg', '21012020_0206163.jpg', '21012020_0206164.jpg', 'rack', 4),
	(3, '23012020_142008.jpg', '23012020_1420081.jpg', '23012020_1420082.jpg', '23012020_1420083.jpg', '23012020_1420084.jpg', 'tes isi rack', 4);
/*!40000 ALTER TABLE `pm_build_rack` ENABLE KEYS */;

-- Dumping structure for table db_ibox.pm_dcpbd_rectifier_data
CREATE TABLE IF NOT EXISTS `pm_dcpbd_rectifier_data` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `merk_tipe` varchar(255) DEFAULT NULL,
  `sn` varchar(255) DEFAULT NULL,
  `no_amarta` varchar(255) DEFAULT NULL,
  `jumlah_slot` varchar(255) DEFAULT NULL,
  `kondisi_fuse` varchar(255) DEFAULT NULL,
  `tegangan` varchar(255) DEFAULT NULL,
  `beban` varchar(255) DEFAULT NULL,
  `alarm` varchar(255) DEFAULT NULL,
  `kondisi_mcb_1` varchar(255) DEFAULT NULL,
  `kondisi_mcb_2` varchar(255) DEFAULT NULL,
  `m1_kapasitas` varchar(255) DEFAULT NULL,
  `m1_ampere` varchar(255) DEFAULT NULL,
  `m1_sn` varchar(255) DEFAULT NULL,
  `m2_kapasitas` varchar(255) DEFAULT NULL,
  `m2_ampere` varchar(255) DEFAULT NULL,
  `m2_sn` varchar(255) DEFAULT NULL,
  `m3_kapasitas` varchar(255) DEFAULT NULL,
  `m3_ampere` varchar(255) DEFAULT NULL,
  `m3_sn` varchar(255) DEFAULT NULL,
  `m4_kapasitas` varchar(255) DEFAULT NULL,
  `m4_ampere` varchar(255) DEFAULT NULL,
  `m4_sn` varchar(255) DEFAULT NULL,
  `m5_kapasitas` varchar(255) DEFAULT NULL,
  `m5_ampere` varchar(255) DEFAULT NULL,
  `m5_sn` varchar(255) DEFAULT NULL,
  `m6_kapasitas` varchar(255) DEFAULT NULL,
  `m6_ampere` varchar(255) DEFAULT NULL,
  `m6_sn` varchar(255) DEFAULT NULL,
  `m7_kapasitas` varchar(255) DEFAULT NULL,
  `m7_ampere` varchar(255) DEFAULT NULL,
  `m7_sn` varchar(255) DEFAULT NULL,
  `m8_kapasitas` varchar(255) DEFAULT NULL,
  `m8_ampere` varchar(255) DEFAULT NULL,
  `m8_sn` varchar(255) DEFAULT NULL,
  `m9_kapasitas` varchar(255) DEFAULT NULL,
  `m9_ampere` varchar(255) DEFAULT NULL,
  `m9_sn` varchar(255) DEFAULT NULL,
  `kapasitas_1` varchar(255) DEFAULT NULL,
  `kapasitas_2` varchar(255) DEFAULT NULL,
  `beban_1` varchar(255) DEFAULT NULL,
  `beban_2` varchar(255) DEFAULT NULL,
  `selisih_1` varchar(255) DEFAULT NULL,
  `selisih_2` varchar(255) DEFAULT NULL,
  `id_pop` bigint(20) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `Index 2` (`id_pop`),
  CONSTRAINT `FK_pm_dcpbd_rectifier_data_pops` FOREIGN KEY (`id_pop`) REFERENCES `pops` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

-- Dumping data for table db_ibox.pm_dcpbd_rectifier_data: ~4 rows (approximately)
DELETE FROM `pm_dcpbd_rectifier_data`;
/*!40000 ALTER TABLE `pm_dcpbd_rectifier_data` DISABLE KEYS */;
INSERT INTO `pm_dcpbd_rectifier_data` (`id`, `merk_tipe`, `sn`, `no_amarta`, `jumlah_slot`, `kondisi_fuse`, `tegangan`, `beban`, `alarm`, `kondisi_mcb_1`, `kondisi_mcb_2`, `m1_kapasitas`, `m1_ampere`, `m1_sn`, `m2_kapasitas`, `m2_ampere`, `m2_sn`, `m3_kapasitas`, `m3_ampere`, `m3_sn`, `m4_kapasitas`, `m4_ampere`, `m4_sn`, `m5_kapasitas`, `m5_ampere`, `m5_sn`, `m6_kapasitas`, `m6_ampere`, `m6_sn`, `m7_kapasitas`, `m7_ampere`, `m7_sn`, `m8_kapasitas`, `m8_ampere`, `m8_sn`, `m9_kapasitas`, `m9_ampere`, `m9_sn`, `kapasitas_1`, `kapasitas_2`, `beban_1`, `beban_2`, `selisih_1`, `selisih_2`, `id_pop`) VALUES
	(1, '', '', '', '', '', '', '', '', NULL, NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 3),
	(2, 't', 'tyy', 'y', 'y', 'y', 'y', 'y', 'yuy', 'Berfungsi', 'Berfungsi', 'yg', 'y', 'y', 'y', 'y', 'y', 'y', 'yy', 'dc', 'j', 'hk', 'h', 'h', 'h', 'h', 'h', 'h', 'h', 'h', 'h', 'h', 'h', 'h', 'h', 'h', 'h', 'h', 'h', 'h', 'h', 'h', 'h', 'h', 3),
	(3, '', '', '', '', '', '', '', '', NULL, NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 2),
	(4, 'tes Rectifier', '', '', '', '', '', '', '', NULL, NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 3);
/*!40000 ALTER TABLE `pm_dcpbd_rectifier_data` ENABLE KEYS */;

-- Dumping structure for table db_ibox.pm_dcpbd_rectifier_dokumentasi
CREATE TABLE IF NOT EXISTS `pm_dcpbd_rectifier_dokumentasi` (
  `id` bigint(20) NOT NULL,
  `foto_1` varchar(255) DEFAULT NULL,
  `foto_2` varchar(255) DEFAULT NULL,
  `foto_3` varchar(255) DEFAULT NULL,
  `foto_4` varchar(255) DEFAULT NULL,
  `foto_5` varchar(255) DEFAULT NULL,
  `foto_6` varchar(255) DEFAULT NULL,
  `id_pop` bigint(20) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `Index 2` (`id_pop`),
  CONSTRAINT `FK_pm_dcpbd_rectifier_dokumentasi_pops` FOREIGN KEY (`id_pop`) REFERENCES `pops` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table db_ibox.pm_dcpbd_rectifier_dokumentasi: ~0 rows (approximately)
DELETE FROM `pm_dcpbd_rectifier_dokumentasi`;
/*!40000 ALTER TABLE `pm_dcpbd_rectifier_dokumentasi` DISABLE KEYS */;
INSERT INTO `pm_dcpbd_rectifier_dokumentasi` (`id`, `foto_1`, `foto_2`, `foto_3`, `foto_4`, `foto_5`, `foto_6`, `id_pop`) VALUES
	(0, NULL, NULL, NULL, NULL, NULL, NULL, 1);
/*!40000 ALTER TABLE `pm_dcpbd_rectifier_dokumentasi` ENABLE KEYS */;

-- Dumping structure for table db_ibox.pm_dcpbd_rectifier_foto_single
CREATE TABLE IF NOT EXISTS `pm_dcpbd_rectifier_foto_single` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `foto` varchar(255) DEFAULT NULL,
  `id_pop` bigint(20) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `Index 2` (`id_pop`),
  CONSTRAINT `FK_pm_dcpbd_rectifier_foto_single_pops` FOREIGN KEY (`id_pop`) REFERENCES `pops` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

-- Dumping data for table db_ibox.pm_dcpbd_rectifier_foto_single: ~3 rows (approximately)
DELETE FROM `pm_dcpbd_rectifier_foto_single`;
/*!40000 ALTER TABLE `pm_dcpbd_rectifier_foto_single` DISABLE KEYS */;
INSERT INTO `pm_dcpbd_rectifier_foto_single` (`id`, `foto`, `id_pop`) VALUES
	(1, '21012020_091456.jpg', 1),
	(3, '21012020_164845.jpg', 3),
	(4, NULL, 3);
/*!40000 ALTER TABLE `pm_dcpbd_rectifier_foto_single` ENABLE KEYS */;

-- Dumping structure for table db_ibox.pm_dcpbd_rectifier_lain
CREATE TABLE IF NOT EXISTS `pm_dcpbd_rectifier_lain` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `keterangan` varchar(255) DEFAULT NULL,
  `id_pop` bigint(20) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `Index 2` (`id_pop`),
  CONSTRAINT `FK_pm_dcpbd_rectifier_lain_pops` FOREIGN KEY (`id_pop`) REFERENCES `pops` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- Dumping data for table db_ibox.pm_dcpbd_rectifier_lain: ~2 rows (approximately)
DELETE FROM `pm_dcpbd_rectifier_lain`;
/*!40000 ALTER TABLE `pm_dcpbd_rectifier_lain` DISABLE KEYS */;
INSERT INTO `pm_dcpbd_rectifier_lain` (`id`, `keterangan`, `id_pop`) VALUES
	(1, 'wd', 1),
	(2, 'vbn', 3);
/*!40000 ALTER TABLE `pm_dcpbd_rectifier_lain` ENABLE KEYS */;

-- Dumping structure for table db_ibox.pm_dcpbd_rectifier_temuan
CREATE TABLE IF NOT EXISTS `pm_dcpbd_rectifier_temuan` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `keterangan` varchar(255) DEFAULT NULL,
  `id_pop` bigint(20) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `Index 2` (`id_pop`),
  CONSTRAINT `FK_pm_dcpbd_rectifier_temuan_pops` FOREIGN KEY (`id_pop`) REFERENCES `pops` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- Dumping data for table db_ibox.pm_dcpbd_rectifier_temuan: ~0 rows (approximately)
DELETE FROM `pm_dcpbd_rectifier_temuan`;
/*!40000 ALTER TABLE `pm_dcpbd_rectifier_temuan` DISABLE KEYS */;
INSERT INTO `pm_dcpbd_rectifier_temuan` (`id`, `keterangan`, `id_pop`) VALUES
	(1, 'de', 1);
/*!40000 ALTER TABLE `pm_dcpbd_rectifier_temuan` ENABLE KEYS */;

-- Dumping structure for table db_ibox.pm_dcpdb_baterai_data
CREATE TABLE IF NOT EXISTS `pm_dcpdb_baterai_data` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `diameter_kabel` varchar(255) DEFAULT NULL,
  `kondisi_terminal` varchar(255) DEFAULT NULL,
  `kondisi_fisik` varchar(255) DEFAULT NULL,
  `no_amarta` varchar(255) DEFAULT NULL,
  `merk` varchar(255) DEFAULT NULL,
  `tipe` varchar(255) DEFAULT NULL,
  `kapasitas` varchar(255) DEFAULT NULL,
  `unit` varchar(255) DEFAULT NULL,
  `sn` varchar(255) DEFAULT NULL,
  `id_pop` bigint(20) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `Index 2` (`id_pop`),
  CONSTRAINT `FK_pm_dcpdb_baterai_data_pops` FOREIGN KEY (`id_pop`) REFERENCES `pops` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

-- Dumping data for table db_ibox.pm_dcpdb_baterai_data: ~3 rows (approximately)
DELETE FROM `pm_dcpdb_baterai_data`;
/*!40000 ALTER TABLE `pm_dcpdb_baterai_data` DISABLE KEYS */;
INSERT INTO `pm_dcpdb_baterai_data` (`id`, `diameter_kabel`, `kondisi_terminal`, `kondisi_fisik`, `no_amarta`, `merk`, `tipe`, `kapasitas`, `unit`, `sn`, `id_pop`) VALUES
	(2, '10mm', 'Kencang', 'Normal', '12', 'sony', 'S12', '90', '55', '123456', 2),
	(3, NULL, NULL, NULL, '', '', '', '', '', '', 1),
	(4, NULL, NULL, NULL, 'tes baterai', '', '', '', '', '', 3);
/*!40000 ALTER TABLE `pm_dcpdb_baterai_data` ENABLE KEYS */;

-- Dumping structure for table db_ibox.pm_dcpdb_baterai_dokumentasi
CREATE TABLE IF NOT EXISTS `pm_dcpdb_baterai_dokumentasi` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `foto_1` varchar(255) DEFAULT NULL,
  `foto_2` varchar(255) DEFAULT NULL,
  `foto_3` varchar(255) DEFAULT NULL,
  `foto_4` varchar(255) DEFAULT NULL,
  `foto_5` varchar(255) DEFAULT NULL,
  `foto_6` varchar(255) DEFAULT NULL,
  `id_pop` bigint(20) unsigned DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `Index 2` (`id_pop`),
  CONSTRAINT `FK_pm_dcpdb_baterai_dokumentasi_pops` FOREIGN KEY (`id_pop`) REFERENCES `pops` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- Dumping data for table db_ibox.pm_dcpdb_baterai_dokumentasi: ~0 rows (approximately)
DELETE FROM `pm_dcpdb_baterai_dokumentasi`;
/*!40000 ALTER TABLE `pm_dcpdb_baterai_dokumentasi` DISABLE KEYS */;
INSERT INTO `pm_dcpdb_baterai_dokumentasi` (`id`, `foto_1`, `foto_2`, `foto_3`, `foto_4`, `foto_5`, `foto_6`, `id_pop`) VALUES
	(2, '21012020_174452.jpg', '21012020_1744521.jpg', '21012020_1744522.jpg', '21012020_1744523.jpg', '21012020_1744524.jpg', '21012020_1744525.jpg', 2);
/*!40000 ALTER TABLE `pm_dcpdb_baterai_dokumentasi` ENABLE KEYS */;

-- Dumping structure for table db_ibox.pm_dcpdb_baterai_lain_lain
CREATE TABLE IF NOT EXISTS `pm_dcpdb_baterai_lain_lain` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `keterangan` varchar(255) DEFAULT NULL,
  `id_pop` bigint(20) unsigned DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `Index 2` (`id_pop`),
  CONSTRAINT `FK_pm_dcpdb_baterai_lain_lain_pops` FOREIGN KEY (`id_pop`) REFERENCES `pops` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- Dumping data for table db_ibox.pm_dcpdb_baterai_lain_lain: ~2 rows (approximately)
DELETE FROM `pm_dcpdb_baterai_lain_lain`;
/*!40000 ALTER TABLE `pm_dcpdb_baterai_lain_lain` DISABLE KEYS */;
INSERT INTO `pm_dcpdb_baterai_lain_lain` (`id`, `keterangan`, `id_pop`) VALUES
	(1, '', 2),
	(2, 'dsd', 2);
/*!40000 ALTER TABLE `pm_dcpdb_baterai_lain_lain` ENABLE KEYS */;

-- Dumping structure for table db_ibox.pm_dcpdb_baterai_temuan
CREATE TABLE IF NOT EXISTS `pm_dcpdb_baterai_temuan` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `keterangan` varchar(255) DEFAULT NULL,
  `id_pop` bigint(20) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `Index 2` (`id_pop`),
  CONSTRAINT `FK_pm_dcpdb_baterai_temuan_pops` FOREIGN KEY (`id_pop`) REFERENCES `pops` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- Dumping data for table db_ibox.pm_dcpdb_baterai_temuan: ~2 rows (approximately)
DELETE FROM `pm_dcpdb_baterai_temuan`;
/*!40000 ALTER TABLE `pm_dcpdb_baterai_temuan` DISABLE KEYS */;
INSERT INTO `pm_dcpdb_baterai_temuan` (`id`, `keterangan`, `id_pop`) VALUES
	(1, '', 2),
	(2, 'ddds', 2);
/*!40000 ALTER TABLE `pm_dcpdb_baterai_temuan` ENABLE KEYS */;

-- Dumping structure for table db_ibox.pm_dc_data_dcpdb
CREATE TABLE IF NOT EXISTS `pm_dc_data_dcpdb` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `kondisi_box` varchar(255) DEFAULT NULL,
  `kondsisi_terminal` varchar(255) DEFAULT NULL,
  `no_amarta` varchar(255) DEFAULT NULL,
  `id_pop` bigint(20) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `Index 2` (`id_pop`),
  CONSTRAINT `FK_pm_dc_data_dcpdb_pops` FOREIGN KEY (`id_pop`) REFERENCES `pops` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=latin1;

-- Dumping data for table db_ibox.pm_dc_data_dcpdb: ~6 rows (approximately)
DELETE FROM `pm_dc_data_dcpdb`;
/*!40000 ALTER TABLE `pm_dc_data_dcpdb` DISABLE KEYS */;
INSERT INTO `pm_dc_data_dcpdb` (`id`, `kondisi_box`, `kondsisi_terminal`, `no_amarta`, `id_pop`) VALUES
	(24, 'Kotor', 'Kendor', 'sdds', 4),
	(25, 'Bersih', 'Kencang', 'mantan', 3),
	(26, 'Kurang Rapi', 'Kendor', 'qerty', 3),
	(27, 'Kurang Rapi', 'Kencang', 'tes dcpdb', 3),
	(28, 'Kurang Rapi', 'Kencang', 'tes dcpdb', 3),
	(29, 'Kotor', 'Kencang', 'sudah tambah db', 3);
/*!40000 ALTER TABLE `pm_dc_data_dcpdb` ENABLE KEYS */;

-- Dumping structure for table db_ibox.pm_dc_dcpdb_dokumentasi
CREATE TABLE IF NOT EXISTS `pm_dc_dcpdb_dokumentasi` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `foto_1` varchar(255) DEFAULT NULL,
  `foto_2` varchar(255) DEFAULT NULL,
  `foto_3` varchar(255) DEFAULT NULL,
  `foto_4` varchar(255) DEFAULT NULL,
  `foto_5` varchar(255) DEFAULT NULL,
  `foto_6` varchar(255) DEFAULT NULL,
  `id_pop` bigint(20) unsigned DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `Index 2` (`id_pop`),
  CONSTRAINT `FK_pm_dc_dcpdb_dokumentasi_pops` FOREIGN KEY (`id_pop`) REFERENCES `pops` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;

-- Dumping data for table db_ibox.pm_dc_dcpdb_dokumentasi: ~4 rows (approximately)
DELETE FROM `pm_dc_dcpdb_dokumentasi`;
/*!40000 ALTER TABLE `pm_dc_dcpdb_dokumentasi` DISABLE KEYS */;
INSERT INTO `pm_dc_dcpdb_dokumentasi` (`id`, `foto_1`, `foto_2`, `foto_3`, `foto_4`, `foto_5`, `foto_6`, `id_pop`) VALUES
	(11, '21012020_040429.jpg', '21012020_0404291.jpg', '21012020_0404292.jpg', '21012020_0404293.jpg', '21012020_0404294.jpg', '21012020_0404295.jpg', 1),
	(16, NULL, NULL, NULL, NULL, NULL, NULL, 2),
	(17, NULL, NULL, NULL, NULL, NULL, NULL, 2),
	(18, NULL, NULL, NULL, NULL, NULL, NULL, 1);
/*!40000 ALTER TABLE `pm_dc_dcpdb_dokumentasi` ENABLE KEYS */;

-- Dumping structure for table db_ibox.pm_dc_dcpdb_foto_single
CREATE TABLE IF NOT EXISTS `pm_dc_dcpdb_foto_single` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `foto` varchar(255) DEFAULT NULL,
  `id_pop` bigint(20) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `Index 2` (`id_pop`),
  CONSTRAINT `FK_pm_dc_dcpdb_foto_single_pops` FOREIGN KEY (`id_pop`) REFERENCES `pops` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- Dumping data for table db_ibox.pm_dc_dcpdb_foto_single: ~2 rows (approximately)
DELETE FROM `pm_dc_dcpdb_foto_single`;
/*!40000 ALTER TABLE `pm_dc_dcpdb_foto_single` DISABLE KEYS */;
INSERT INTO `pm_dc_dcpdb_foto_single` (`id`, `foto`, `id_pop`) VALUES
	(2, '21012020_031843.jpg', 1),
	(3, NULL, 1);
/*!40000 ALTER TABLE `pm_dc_dcpdb_foto_single` ENABLE KEYS */;

-- Dumping structure for table db_ibox.pm_dc_dcpdb_lain
CREATE TABLE IF NOT EXISTS `pm_dc_dcpdb_lain` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `keterangan` varchar(255) DEFAULT NULL,
  `id_pop` bigint(20) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `Index 2` (`id_pop`),
  CONSTRAINT `FK_pm_dc_dcpdb_lain_pops` FOREIGN KEY (`id_pop`) REFERENCES `pops` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

-- Dumping data for table db_ibox.pm_dc_dcpdb_lain: ~7 rows (approximately)
DELETE FROM `pm_dc_dcpdb_lain`;
/*!40000 ALTER TABLE `pm_dc_dcpdb_lain` DISABLE KEYS */;
INSERT INTO `pm_dc_dcpdb_lain` (`id`, `keterangan`, `id_pop`) VALUES
	(1, 'eefe', 2),
	(6, 'ghhg', 1),
	(7, 'dfdsf', 3),
	(8, '', 3),
	(9, NULL, 1),
	(10, NULL, 1),
	(11, NULL, 4);
/*!40000 ALTER TABLE `pm_dc_dcpdb_lain` ENABLE KEYS */;

-- Dumping structure for table db_ibox.pm_dc_dcpdb_temuan
CREATE TABLE IF NOT EXISTS `pm_dc_dcpdb_temuan` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `keterangan` varchar(255) DEFAULT NULL,
  `id_pop` bigint(20) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `Index 2` (`id_pop`),
  CONSTRAINT `FK_pm_dc_dcpdb_temuan_pops` FOREIGN KEY (`id_pop`) REFERENCES `pops` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- Dumping data for table db_ibox.pm_dc_dcpdb_temuan: ~2 rows (approximately)
DELETE FROM `pm_dc_dcpdb_temuan`;
/*!40000 ALTER TABLE `pm_dc_dcpdb_temuan` DISABLE KEYS */;
INSERT INTO `pm_dc_dcpdb_temuan` (`id`, `keterangan`, `id_pop`) VALUES
	(1, 'sdsd', 1),
	(2, '', 1);
/*!40000 ALTER TABLE `pm_dc_dcpdb_temuan` ENABLE KEYS */;

-- Dumping structure for table db_ibox.pm_eksternal_env_data
CREATE TABLE IF NOT EXISTS `pm_eksternal_env_data` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `merk_ac1` varchar(255) DEFAULT NULL,
  `merk_ac2` varchar(255) DEFAULT NULL,
  `merk_ac3` varchar(255) DEFAULT NULL,
  `tipe_ac1` varchar(255) DEFAULT NULL,
  `tipe_ac2` varchar(255) DEFAULT NULL,
  `tipe_ac3` varchar(255) DEFAULT NULL,
  `kap_ac1` varchar(255) DEFAULT NULL,
  `kap_ac2` varchar(255) DEFAULT NULL,
  `kap_ac3` varchar(255) DEFAULT NULL,
  `sn_o_ac1` varchar(255) DEFAULT NULL,
  `sn_o_ac2` varchar(255) DEFAULT NULL,
  `sn_o_ac3` varchar(255) DEFAULT NULL,
  `no_amarta_ac1` varchar(255) DEFAULT NULL,
  `no_amarta_ac2` varchar(255) DEFAULT NULL,
  `no_amarta_ac3` varchar(255) DEFAULT NULL,
  `sn_i_ac1` varchar(255) DEFAULT NULL,
  `sn_i_ac2` varchar(255) DEFAULT NULL,
  `sn_i_ac3` varchar(255) DEFAULT NULL,
  `no_amarta2_ac1` varchar(255) DEFAULT NULL,
  `no_amarta2_ac2` varchar(255) DEFAULT NULL,
  `no_amarta2_ac3` varchar(255) DEFAULT NULL,
  `suhu_ac_ac1` varchar(255) DEFAULT NULL,
  `suhu_ac_ac2` varchar(255) DEFAULT NULL,
  `suhu_ac_ac3` varchar(255) DEFAULT NULL,
  `fungsi_ac1` varchar(255) DEFAULT NULL,
  `fungsi_ac2` varchar(255) DEFAULT NULL,
  `fungsi_ac3` varchar(255) DEFAULT NULL,
  `suhu_ruang` varchar(255) DEFAULT NULL,
  `id_pop` bigint(20) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `Index 2` (`id_pop`),
  CONSTRAINT `FK_pm_eksternal_env_data_pops` FOREIGN KEY (`id_pop`) REFERENCES `pops` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

-- Dumping data for table db_ibox.pm_eksternal_env_data: ~1 rows (approximately)
DELETE FROM `pm_eksternal_env_data`;
/*!40000 ALTER TABLE `pm_eksternal_env_data` DISABLE KEYS */;
INSERT INTO `pm_eksternal_env_data` (`id`, `merk_ac1`, `merk_ac2`, `merk_ac3`, `tipe_ac1`, `tipe_ac2`, `tipe_ac3`, `kap_ac1`, `kap_ac2`, `kap_ac3`, `sn_o_ac1`, `sn_o_ac2`, `sn_o_ac3`, `no_amarta_ac1`, `no_amarta_ac2`, `no_amarta_ac3`, `sn_i_ac1`, `sn_i_ac2`, `sn_i_ac3`, `no_amarta2_ac1`, `no_amarta2_ac2`, `no_amarta2_ac3`, `suhu_ac_ac1`, `suhu_ac_ac2`, `suhu_ac_ac3`, `fungsi_ac1`, `fungsi_ac2`, `fungsi_ac3`, `suhu_ruang`, `id_pop`) VALUES
	(3, 'u', 'u', 'u', 'u', 'u', 'u', 'u', 'u', 'u', 'u', 'u', 'u', 'u', 'u', 'u', 'u', 'u', 'u', 'u', 'u', 'u', 'u', 'u', 'u', 'Tidak Normal', 'Normal', 'Tidak Normal', '20', 4),
	(8, 'tes AC', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Normal', 'Normal', 'Normal', 'tes', 4);
/*!40000 ALTER TABLE `pm_eksternal_env_data` ENABLE KEYS */;

-- Dumping structure for table db_ibox.pm_eksternal_env_dokumentasi
CREATE TABLE IF NOT EXISTS `pm_eksternal_env_dokumentasi` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `foto_1` varchar(255) DEFAULT NULL,
  `foto_2` varchar(255) DEFAULT NULL,
  `foto_3` varchar(255) DEFAULT NULL,
  `foto_4` varchar(255) DEFAULT NULL,
  `foto_5` varchar(255) DEFAULT NULL,
  `foto_6` varchar(255) DEFAULT NULL,
  `id_pop` bigint(20) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `Index 2` (`id_pop`),
  CONSTRAINT `FK_pm_eksternal_env_dokumentasi_pops` FOREIGN KEY (`id_pop`) REFERENCES `pops` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

-- Dumping data for table db_ibox.pm_eksternal_env_dokumentasi: ~0 rows (approximately)
DELETE FROM `pm_eksternal_env_dokumentasi`;
/*!40000 ALTER TABLE `pm_eksternal_env_dokumentasi` DISABLE KEYS */;
INSERT INTO `pm_eksternal_env_dokumentasi` (`id`, `foto_1`, `foto_2`, `foto_3`, `foto_4`, `foto_5`, `foto_6`, `id_pop`) VALUES
	(4, '22012020_185834.jpg', '22012020_1858341.jpg', '22012020_1858342.jpg', '22012020_1858343.jpg', '22012020_1858344.jpg', '22012020_1858345.jpg', 4);
/*!40000 ALTER TABLE `pm_eksternal_env_dokumentasi` ENABLE KEYS */;

-- Dumping structure for table db_ibox.pm_eksternal_env_eksternal_alarm
CREATE TABLE IF NOT EXISTS `pm_eksternal_env_eksternal_alarm` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `merk` varchar(255) DEFAULT NULL,
  `tipe` varchar(255) DEFAULT NULL,
  `sn` varchar(255) DEFAULT NULL,
  `no_amarta` varchar(255) DEFAULT NULL,
  `door_fungsi` varchar(255) DEFAULT NULL,
  `door_catatan` varchar(255) DEFAULT NULL,
  `main_fungsi` varchar(255) DEFAULT NULL,
  `main_catatan` varchar(255) DEFAULT NULL,
  `temp_fungsi` varchar(255) DEFAULT NULL,
  `temp_catatan` varchar(255) DEFAULT NULL,
  `smoke_fungsi` varchar(255) DEFAULT NULL,
  `smoke_catatan` varchar(255) DEFAULT NULL,
  `rectifier_fungsi` varchar(255) DEFAULT NULL,
  `rectifier_catatan` varchar(255) DEFAULT NULL,
  `genset_fungsi` varchar(255) DEFAULT NULL,
  `genset_catatan` varchar(255) DEFAULT NULL,
  `fuel_fungsi` varchar(255) DEFAULT NULL,
  `fuel_catatan` varchar(255) DEFAULT NULL,
  `id_pop` bigint(20) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `Index 2` (`id_pop`),
  CONSTRAINT `FK_pm_eksternal_env_eksternal_alarm_pops` FOREIGN KEY (`id_pop`) REFERENCES `pops` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- Dumping data for table db_ibox.pm_eksternal_env_eksternal_alarm: ~1 rows (approximately)
DELETE FROM `pm_eksternal_env_eksternal_alarm`;
/*!40000 ALTER TABLE `pm_eksternal_env_eksternal_alarm` DISABLE KEYS */;
INSERT INTO `pm_eksternal_env_eksternal_alarm` (`id`, `merk`, `tipe`, `sn`, `no_amarta`, `door_fungsi`, `door_catatan`, `main_fungsi`, `main_catatan`, `temp_fungsi`, `temp_catatan`, `smoke_fungsi`, `smoke_catatan`, `rectifier_fungsi`, `rectifier_catatan`, `genset_fungsi`, `genset_catatan`, `fuel_fungsi`, `fuel_catatan`, `id_pop`) VALUES
	(2, 'e', 'e', 'e', 'e', 'Normal', 'ee', 'Normal', 'e', 'Normal', 'r', 'Normal', 'r', 'Normal', 'r', 'Normal', 'r', 'Normal', 'r', 4),
	(3, 'tes alarm', '', '', '', NULL, '', NULL, '', NULL, '', NULL, '', NULL, '', NULL, '', NULL, '', 4);
/*!40000 ALTER TABLE `pm_eksternal_env_eksternal_alarm` ENABLE KEYS */;

-- Dumping structure for table db_ibox.pm_odf_data_odf
CREATE TABLE IF NOT EXISTS `pm_odf_data_odf` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `no_amarta` varchar(255) DEFAULT NULL,
  `label_kabel` varchar(255) DEFAULT NULL,
  `kap_core` varchar(255) DEFAULT NULL,
  `tipe_konektor` varchar(255) DEFAULT NULL,
  `id_pop` bigint(20) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `Index 2` (`id_pop`),
  CONSTRAINT `FK_pm_odf_data_odf_pops` FOREIGN KEY (`id_pop`) REFERENCES `pops` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

-- Dumping data for table db_ibox.pm_odf_data_odf: ~4 rows (approximately)
DELETE FROM `pm_odf_data_odf`;
/*!40000 ALTER TABLE `pm_odf_data_odf` DISABLE KEYS */;
INSERT INTO `pm_odf_data_odf` (`id`, `no_amarta`, `label_kabel`, `kap_core`, `tipe_konektor`, `id_pop`) VALUES
	(1, '', '', NULL, NULL, 4),
	(2, '1212', 'A12', '144', 'SC', 4),
	(3, '123', '', '12', 'FC', 3),
	(4, 'tes odf', '', '6', 'FC', 4);
/*!40000 ALTER TABLE `pm_odf_data_odf` ENABLE KEYS */;

-- Dumping structure for table db_ibox.pm_odf_inputan_lain
CREATE TABLE IF NOT EXISTS `pm_odf_inputan_lain` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `core` varchar(255) DEFAULT NULL,
  `jarak_otdr` varchar(255) DEFAULT NULL,
  `label_pelanggan` varchar(255) DEFAULT NULL,
  `koneksi` varchar(255) DEFAULT NULL,
  `id_pop` bigint(20) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `Index 2` (`id_pop`),
  CONSTRAINT `FK_pm_odf_inputan_lain_pops` FOREIGN KEY (`id_pop`) REFERENCES `pops` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- Dumping data for table db_ibox.pm_odf_inputan_lain: ~3 rows (approximately)
DELETE FROM `pm_odf_inputan_lain`;
/*!40000 ALTER TABLE `pm_odf_inputan_lain` DISABLE KEYS */;
INSERT INTO `pm_odf_inputan_lain` (`id`, `core`, `jarak_otdr`, `label_pelanggan`, `koneksi`, `id_pop`) VALUES
	(1, '', '', '', '', 4),
	(2, 'C11', '12', 'P123', 'BAGUS', 4),
	(3, 'yiuy', 'uu', 'uhu', 'u', 3);
/*!40000 ALTER TABLE `pm_odf_inputan_lain` ENABLE KEYS */;

-- Dumping structure for table db_ibox.pm_ps_ats_ats
CREATE TABLE IF NOT EXISTS `pm_ps_ats_ats` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `merk` varchar(255) DEFAULT NULL,
  `seri` varchar(255) DEFAULT NULL,
  `sn` varchar(255) DEFAULT NULL,
  `tahun_aset` varchar(255) DEFAULT NULL,
  `no_amarta` varchar(255) DEFAULT NULL,
  `id_pop` bigint(20) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `Index 2` (`id_pop`),
  CONSTRAINT `FK_pm_ps_ats_ats_pops` FOREIGN KEY (`id_pop`) REFERENCES `pops` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- Dumping data for table db_ibox.pm_ps_ats_ats: ~1 rows (approximately)
DELETE FROM `pm_ps_ats_ats`;
/*!40000 ALTER TABLE `pm_ps_ats_ats` DISABLE KEYS */;
INSERT INTO `pm_ps_ats_ats` (`id`, `merk`, `seri`, `sn`, `tahun_aset`, `no_amarta`, `id_pop`) VALUES
	(1, 'efe', 'uh', 'u', 'ukh', 'kh', 2),
	(2, 'tes ats', '', '', '', '', 4);
/*!40000 ALTER TABLE `pm_ps_ats_ats` ENABLE KEYS */;

-- Dumping structure for table db_ibox.pm_ps_ats_dokumentasi
CREATE TABLE IF NOT EXISTS `pm_ps_ats_dokumentasi` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `foto_1` varchar(255) DEFAULT NULL,
  `foto_2` varchar(255) DEFAULT NULL,
  `foto_3` varchar(255) DEFAULT NULL,
  `foto_4` varchar(255) DEFAULT NULL,
  `foto_5` varchar(255) DEFAULT NULL,
  `foto_6` varchar(255) DEFAULT NULL,
  `id_pop` bigint(20) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `Index 2` (`id_pop`),
  CONSTRAINT `FK_pm_ps_ats_dokumentasi_pops` FOREIGN KEY (`id_pop`) REFERENCES `pops` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- Dumping data for table db_ibox.pm_ps_ats_dokumentasi: ~0 rows (approximately)
DELETE FROM `pm_ps_ats_dokumentasi`;
/*!40000 ALTER TABLE `pm_ps_ats_dokumentasi` DISABLE KEYS */;
INSERT INTO `pm_ps_ats_dokumentasi` (`id`, `foto_1`, `foto_2`, `foto_3`, `foto_4`, `foto_5`, `foto_6`, `id_pop`) VALUES
	(1, '23012020_031646.jpg', '23012020_0316461.jpg', '23012020_0316462.jpg', '23012020_0316463.jpg', '23012020_0316464.jpg', '23012020_0316465.jpg', 1);
/*!40000 ALTER TABLE `pm_ps_ats_dokumentasi` ENABLE KEYS */;

-- Dumping structure for table db_ibox.pm_ps_ats_foto_single
CREATE TABLE IF NOT EXISTS `pm_ps_ats_foto_single` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `foto` varchar(255) DEFAULT NULL,
  `id_pop` bigint(20) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `Index 2` (`id_pop`),
  CONSTRAINT `FK_pm_ps_ats_foto_single_pops` FOREIGN KEY (`id_pop`) REFERENCES `pops` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- Dumping data for table db_ibox.pm_ps_ats_foto_single: ~0 rows (approximately)
DELETE FROM `pm_ps_ats_foto_single`;
/*!40000 ALTER TABLE `pm_ps_ats_foto_single` DISABLE KEYS */;
INSERT INTO `pm_ps_ats_foto_single` (`id`, `foto`, `id_pop`) VALUES
	(1, '22012020_192317.jpg', 2);
/*!40000 ALTER TABLE `pm_ps_ats_foto_single` ENABLE KEYS */;

-- Dumping structure for table db_ibox.pm_ps_ats_inspeksi
CREATE TABLE IF NOT EXISTS `pm_ps_ats_inspeksi` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `failover_test` varchar(255) DEFAULT NULL,
  `mode_ats` varchar(255) DEFAULT NULL,
  `alarm_panel` varchar(255) DEFAULT NULL,
  `catatan` varchar(255) DEFAULT NULL,
  `id_pop` bigint(20) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `Index 2` (`id_pop`),
  CONSTRAINT `FK_pm_ps_ats_inspeksi_pops` FOREIGN KEY (`id_pop`) REFERENCES `pops` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- Dumping data for table db_ibox.pm_ps_ats_inspeksi: ~0 rows (approximately)
DELETE FROM `pm_ps_ats_inspeksi`;
/*!40000 ALTER TABLE `pm_ps_ats_inspeksi` DISABLE KEYS */;
INSERT INTO `pm_ps_ats_inspeksi` (`id`, `failover_test`, `mode_ats`, `alarm_panel`, `catatan`, `id_pop`) VALUES
	(1, 'Setengah', 'dsdS', 'FSD', 'SDDS', 2);
/*!40000 ALTER TABLE `pm_ps_ats_inspeksi` ENABLE KEYS */;

-- Dumping structure for table db_ibox.pm_ps_ats_lain_lain
CREATE TABLE IF NOT EXISTS `pm_ps_ats_lain_lain` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `keterangan` varchar(255) DEFAULT NULL,
  `id_pop` bigint(20) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `Index 2` (`id_pop`),
  CONSTRAINT `FK_pm_ps_ats_lain_lain_pops` FOREIGN KEY (`id_pop`) REFERENCES `pops` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- Dumping data for table db_ibox.pm_ps_ats_lain_lain: ~0 rows (approximately)
DELETE FROM `pm_ps_ats_lain_lain`;
/*!40000 ALTER TABLE `pm_ps_ats_lain_lain` DISABLE KEYS */;
INSERT INTO `pm_ps_ats_lain_lain` (`id`, `keterangan`, `id_pop`) VALUES
	(1, 'fsfs', 1);
/*!40000 ALTER TABLE `pm_ps_ats_lain_lain` ENABLE KEYS */;

-- Dumping structure for table db_ibox.pm_ps_ats_panel_kontrol_after
CREATE TABLE IF NOT EXISTS `pm_ps_ats_panel_kontrol_after` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `switch_c_1` varchar(255) DEFAULT NULL,
  `switch_c_2` varchar(255) DEFAULT NULL,
  `switch_c_3` varchar(255) DEFAULT NULL,
  `id_pop` bigint(20) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `Index 2` (`id_pop`),
  CONSTRAINT `FK_pm_ps_ats_panel_kontrol_after_pops` FOREIGN KEY (`id_pop`) REFERENCES `pops` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- Dumping data for table db_ibox.pm_ps_ats_panel_kontrol_after: ~0 rows (approximately)
DELETE FROM `pm_ps_ats_panel_kontrol_after`;
/*!40000 ALTER TABLE `pm_ps_ats_panel_kontrol_after` DISABLE KEYS */;
INSERT INTO `pm_ps_ats_panel_kontrol_after` (`id`, `switch_c_1`, `switch_c_2`, `switch_c_3`, `id_pop`) VALUES
	(1, 'df', 'fds', 'dfd', 1);
/*!40000 ALTER TABLE `pm_ps_ats_panel_kontrol_after` ENABLE KEYS */;

-- Dumping structure for table db_ibox.pm_ps_ats_panel_kontrol_before
CREATE TABLE IF NOT EXISTS `pm_ps_ats_panel_kontrol_before` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `switch_c_1` varchar(255) DEFAULT NULL,
  `switch_c_2` varchar(255) DEFAULT NULL,
  `switch_c_3` varchar(255) DEFAULT NULL,
  `id_pop` bigint(20) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `Index 2` (`id_pop`),
  CONSTRAINT `FK_pm_ps_ats_panel_kontrol_before_pops` FOREIGN KEY (`id_pop`) REFERENCES `pops` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- Dumping data for table db_ibox.pm_ps_ats_panel_kontrol_before: ~0 rows (approximately)
DELETE FROM `pm_ps_ats_panel_kontrol_before`;
/*!40000 ALTER TABLE `pm_ps_ats_panel_kontrol_before` DISABLE KEYS */;
INSERT INTO `pm_ps_ats_panel_kontrol_before` (`id`, `switch_c_1`, `switch_c_2`, `switch_c_3`, `id_pop`) VALUES
	(1, 'ere', 'r', 'rtr', 1);
/*!40000 ALTER TABLE `pm_ps_ats_panel_kontrol_before` ENABLE KEYS */;

-- Dumping structure for table db_ibox.pm_ps_ats_status_sebelum_pm
CREATE TABLE IF NOT EXISTS `pm_ps_ats_status_sebelum_pm` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `pln` varchar(255) DEFAULT NULL,
  `input_pln` varchar(255) DEFAULT NULL,
  `input_genset` varchar(255) DEFAULT NULL,
  `genset` varchar(255) DEFAULT NULL,
  `genset_off` varchar(255) DEFAULT NULL,
  `manual` varchar(255) DEFAULT NULL,
  `tanpa_pln` varchar(255) DEFAULT NULL,
  `otomatis` varchar(255) DEFAULT NULL,
  `alarm_off` varchar(255) DEFAULT NULL,
  `genset_on` varchar(255) DEFAULT NULL,
  `id_pop` bigint(20) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `Index 2` (`id_pop`),
  CONSTRAINT `FK_pm_ps_ats_status_sebelum_pm_pops` FOREIGN KEY (`id_pop`) REFERENCES `pops` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- Dumping data for table db_ibox.pm_ps_ats_status_sebelum_pm: ~0 rows (approximately)
DELETE FROM `pm_ps_ats_status_sebelum_pm`;
/*!40000 ALTER TABLE `pm_ps_ats_status_sebelum_pm` DISABLE KEYS */;
INSERT INTO `pm_ps_ats_status_sebelum_pm` (`id`, `pln`, `input_pln`, `input_genset`, `genset`, `genset_off`, `manual`, `tanpa_pln`, `otomatis`, `alarm_off`, `genset_on`, `id_pop`) VALUES
	(1, 'uU', 'KH', 'H', 'H', 'H', 'H', 'H', 'H', 'H', 'H', 2);
/*!40000 ALTER TABLE `pm_ps_ats_status_sebelum_pm` ENABLE KEYS */;

-- Dumping structure for table db_ibox.pm_ps_ats_status_sesudah_pm
CREATE TABLE IF NOT EXISTS `pm_ps_ats_status_sesudah_pm` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `pln` varchar(255) DEFAULT NULL,
  `input_pln` varchar(255) DEFAULT NULL,
  `input_genset` varchar(255) DEFAULT NULL,
  `genset` varchar(255) DEFAULT NULL,
  `genset_off` varchar(255) DEFAULT NULL,
  `manual` varchar(255) DEFAULT NULL,
  `tanpa_pln` varchar(255) DEFAULT NULL,
  `otomatis` varchar(255) DEFAULT NULL,
  `alarm_off` varchar(255) DEFAULT NULL,
  `genset_on` varchar(255) DEFAULT NULL,
  `id_pop` bigint(20) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `Index 2` (`id_pop`),
  CONSTRAINT `FK_pm_ps_ats_status_sesudah_pm_pops` FOREIGN KEY (`id_pop`) REFERENCES `pops` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- Dumping data for table db_ibox.pm_ps_ats_status_sesudah_pm: ~0 rows (approximately)
DELETE FROM `pm_ps_ats_status_sesudah_pm`;
/*!40000 ALTER TABLE `pm_ps_ats_status_sesudah_pm` DISABLE KEYS */;
INSERT INTO `pm_ps_ats_status_sesudah_pm` (`id`, `pln`, `input_pln`, `input_genset`, `genset`, `genset_off`, `manual`, `tanpa_pln`, `otomatis`, `alarm_off`, `genset_on`, `id_pop`) VALUES
	(1, 'jk', 'khk', 'dd', 'hh', 'h', 'h', '', 'h', 'h', 'd', 2);
/*!40000 ALTER TABLE `pm_ps_ats_status_sesudah_pm` ENABLE KEYS */;

-- Dumping structure for table db_ibox.pm_ps_ats_temuan
CREATE TABLE IF NOT EXISTS `pm_ps_ats_temuan` (
  `id` bigint(20) NOT NULL,
  `keterangan` varchar(255) DEFAULT NULL,
  `id_pop` bigint(20) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `Index 2` (`id_pop`),
  CONSTRAINT `FK_pm_ps_ats_temuan_pops` FOREIGN KEY (`id_pop`) REFERENCES `pops` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table db_ibox.pm_ps_ats_temuan: ~0 rows (approximately)
DELETE FROM `pm_ps_ats_temuan`;
/*!40000 ALTER TABLE `pm_ps_ats_temuan` DISABLE KEYS */;
INSERT INTO `pm_ps_ats_temuan` (`id`, `keterangan`, `id_pop`) VALUES
	(0, 'fsfv', 1);
/*!40000 ALTER TABLE `pm_ps_ats_temuan` ENABLE KEYS */;

-- Dumping structure for table db_ibox.pm_ps_genset_data_fisik
CREATE TABLE IF NOT EXISTS `pm_ps_genset_data_fisik` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `merk_generator` varchar(255) DEFAULT NULL,
  `kapasitas` varchar(255) DEFAULT NULL,
  `tipe` varchar(255) DEFAULT NULL,
  `fasa` varchar(255) DEFAULT NULL,
  `s_n` varchar(255) DEFAULT NULL,
  `tahun_aset` varchar(255) DEFAULT NULL,
  `kebersihan` varchar(255) DEFAULT NULL,
  `merk_engine` varchar(255) DEFAULT NULL,
  `tipe_engine` varchar(255) DEFAULT NULL,
  `s_n_engine` varchar(255) DEFAULT NULL,
  `rpm` varchar(255) DEFAULT NULL,
  `no_amarta` varchar(255) DEFAULT NULL,
  `id_pop` bigint(20) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `Index 2` (`id_pop`),
  CONSTRAINT `FK_pm_ps_genset_data_fisik_pops` FOREIGN KEY (`id_pop`) REFERENCES `pops` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- Dumping data for table db_ibox.pm_ps_genset_data_fisik: ~1 rows (approximately)
DELETE FROM `pm_ps_genset_data_fisik`;
/*!40000 ALTER TABLE `pm_ps_genset_data_fisik` DISABLE KEYS */;
INSERT INTO `pm_ps_genset_data_fisik` (`id`, `merk_generator`, `kapasitas`, `tipe`, `fasa`, `s_n`, `tahun_aset`, `kebersihan`, `merk_engine`, `tipe_engine`, `s_n_engine`, `rpm`, `no_amarta`, `id_pop`) VALUES
	(2, 'Yamaha', '12', 'SN12', '11', '1111', '2013', 'bagus', 'yhm', 'SN45', '1234567', '00', 'SI12', 3),
	(3, 'tes genset', '', '', '', '', '', '', '', '', '', '', '', 4);
/*!40000 ALTER TABLE `pm_ps_genset_data_fisik` ENABLE KEYS */;

-- Dumping structure for table db_ibox.pm_ps_genset_dokumentasi
CREATE TABLE IF NOT EXISTS `pm_ps_genset_dokumentasi` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `foto_1` varchar(255) DEFAULT NULL,
  `foto_2` varchar(255) DEFAULT NULL,
  `foto_3` varchar(255) DEFAULT NULL,
  `foto_4` varchar(255) DEFAULT NULL,
  `foto_5` varchar(255) DEFAULT NULL,
  `foto_6` varchar(255) DEFAULT NULL,
  `id_pop` bigint(20) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `Index 2` (`id_pop`),
  CONSTRAINT `FK_pm_ps_genset_dokumentasi_pops` FOREIGN KEY (`id_pop`) REFERENCES `pops` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- Dumping data for table db_ibox.pm_ps_genset_dokumentasi: ~0 rows (approximately)
DELETE FROM `pm_ps_genset_dokumentasi`;
/*!40000 ALTER TABLE `pm_ps_genset_dokumentasi` DISABLE KEYS */;
INSERT INTO `pm_ps_genset_dokumentasi` (`id`, `foto_1`, `foto_2`, `foto_3`, `foto_4`, `foto_5`, `foto_6`, `id_pop`) VALUES
	(1, NULL, NULL, NULL, NULL, NULL, NULL, 4);
/*!40000 ALTER TABLE `pm_ps_genset_dokumentasi` ENABLE KEYS */;

-- Dumping structure for table db_ibox.pm_ps_genset_inspeksi
CREATE TABLE IF NOT EXISTS `pm_ps_genset_inspeksi` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `fuel_level` varchar(255) DEFAULT NULL,
  `h_meter` varchar(255) DEFAULT NULL,
  `t_aki` varchar(255) DEFAULT NULL,
  `air_radiator` varchar(255) DEFAULT NULL,
  `kapasitas_tangki` varchar(255) DEFAULT NULL,
  `id_pop` bigint(20) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `Index 2` (`id_pop`),
  CONSTRAINT `FK_pm_ps_genset_inspeksi_pops` FOREIGN KEY (`id_pop`) REFERENCES `pops` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- Dumping data for table db_ibox.pm_ps_genset_inspeksi: ~1 rows (approximately)
DELETE FROM `pm_ps_genset_inspeksi`;
/*!40000 ALTER TABLE `pm_ps_genset_inspeksi` DISABLE KEYS */;
INSERT INTO `pm_ps_genset_inspeksi` (`id`, `fuel_level`, `h_meter`, `t_aki`, `air_radiator`, `kapasitas_tangki`, `id_pop`) VALUES
	(2, '20', '24', '55', 'Setengah', '12', 3),
	(3, '', '', '', NULL, 'fd', 1);
/*!40000 ALTER TABLE `pm_ps_genset_inspeksi` ENABLE KEYS */;

-- Dumping structure for table db_ibox.pm_ps_genset_kondisi_nol
CREATE TABLE IF NOT EXISTS `pm_ps_genset_kondisi_nol` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `r_s_tegangan` bigint(20) NOT NULL,
  `r_t_tegangan` bigint(20) NOT NULL,
  `s_t_tegangan` bigint(20) NOT NULL,
  `n_g_tegangan` bigint(20) NOT NULL,
  `r_n_tegangan` bigint(20) NOT NULL,
  `s_n_tegangan` bigint(20) NOT NULL,
  `t_n_tegangan` bigint(20) NOT NULL,
  `r_g_tegangan` bigint(20) NOT NULL,
  `s_g_tegangan` bigint(20) NOT NULL,
  `t_g_tegangan` bigint(20) NOT NULL,
  `fasa_r_beban` bigint(20) NOT NULL,
  `fasa_s_beban` bigint(20) NOT NULL,
  `fasa_t_beban` bigint(20) NOT NULL,
  `id_pop` bigint(20) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `Index 2` (`id_pop`),
  CONSTRAINT `FK_pm_ps_genset_kondisi_nol_pops` FOREIGN KEY (`id_pop`) REFERENCES `pops` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- Dumping data for table db_ibox.pm_ps_genset_kondisi_nol: ~2 rows (approximately)
DELETE FROM `pm_ps_genset_kondisi_nol`;
/*!40000 ALTER TABLE `pm_ps_genset_kondisi_nol` DISABLE KEYS */;
INSERT INTO `pm_ps_genset_kondisi_nol` (`id`, `r_s_tegangan`, `r_t_tegangan`, `s_t_tegangan`, `n_g_tegangan`, `r_n_tegangan`, `s_n_tegangan`, `t_n_tegangan`, `r_g_tegangan`, `s_g_tegangan`, `t_g_tegangan`, `fasa_r_beban`, `fasa_s_beban`, `fasa_t_beban`, `id_pop`) VALUES
	(1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 3),
	(2, 45, 34, 44, 46, 46, 44, 64, 65, 35, 65, 65, 65, 65, 3);
/*!40000 ALTER TABLE `pm_ps_genset_kondisi_nol` ENABLE KEYS */;

-- Dumping structure for table db_ibox.pm_ps_genset_kondisi_penuh
CREATE TABLE IF NOT EXISTS `pm_ps_genset_kondisi_penuh` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `r_s_tegangan` bigint(20) NOT NULL,
  `r_t_tegangan` bigint(20) NOT NULL,
  `s_t_tegangan` bigint(20) NOT NULL,
  `n_g_tegangan` bigint(20) NOT NULL,
  `r_n_tegangan` bigint(20) NOT NULL,
  `s_n_tegangan` bigint(20) NOT NULL,
  `t_n_tegangan` bigint(20) NOT NULL,
  `r_g_tegangan` bigint(20) NOT NULL,
  `s_g_tegangan` bigint(20) NOT NULL,
  `t_g_tegangan` bigint(20) NOT NULL,
  `fasa_r_beban` bigint(20) NOT NULL,
  `fasa_s_beban` bigint(20) NOT NULL,
  `fasa_t_beban` bigint(20) NOT NULL,
  `id_pop` bigint(20) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `Index 2` (`id_pop`),
  CONSTRAINT `FK_pm_ps_genset_kondisi_penuh_pops` FOREIGN KEY (`id_pop`) REFERENCES `pops` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- Dumping data for table db_ibox.pm_ps_genset_kondisi_penuh: ~0 rows (approximately)
DELETE FROM `pm_ps_genset_kondisi_penuh`;
/*!40000 ALTER TABLE `pm_ps_genset_kondisi_penuh` DISABLE KEYS */;
INSERT INTO `pm_ps_genset_kondisi_penuh` (`id`, `r_s_tegangan`, `r_t_tegangan`, `s_t_tegangan`, `n_g_tegangan`, `r_n_tegangan`, `s_n_tegangan`, `t_n_tegangan`, `r_g_tegangan`, `s_g_tegangan`, `t_g_tegangan`, `fasa_r_beban`, `fasa_s_beban`, `fasa_t_beban`, `id_pop`) VALUES
	(1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 3);
/*!40000 ALTER TABLE `pm_ps_genset_kondisi_penuh` ENABLE KEYS */;

-- Dumping structure for table db_ibox.pm_ps_genset_lain_lain
CREATE TABLE IF NOT EXISTS `pm_ps_genset_lain_lain` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `keterangan` varchar(255) DEFAULT NULL,
  `id_pop` bigint(20) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `Index 2` (`id_pop`),
  CONSTRAINT `FK_pm_ps_genset_lain_lain_pops` FOREIGN KEY (`id_pop`) REFERENCES `pops` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- Dumping data for table db_ibox.pm_ps_genset_lain_lain: ~0 rows (approximately)
DELETE FROM `pm_ps_genset_lain_lain`;
/*!40000 ALTER TABLE `pm_ps_genset_lain_lain` DISABLE KEYS */;
INSERT INTO `pm_ps_genset_lain_lain` (`id`, `keterangan`, `id_pop`) VALUES
	(1, '', 3);
/*!40000 ALTER TABLE `pm_ps_genset_lain_lain` ENABLE KEYS */;

-- Dumping structure for table db_ibox.pm_ps_genset_temuan
CREATE TABLE IF NOT EXISTS `pm_ps_genset_temuan` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `keterangan` varchar(255) DEFAULT NULL,
  `id_pop` bigint(20) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `Index 2` (`id_pop`),
  CONSTRAINT `FK_pm_ps_genset_temuan_pops` FOREIGN KEY (`id_pop`) REFERENCES `pops` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- Dumping data for table db_ibox.pm_ps_genset_temuan: ~0 rows (approximately)
DELETE FROM `pm_ps_genset_temuan`;
/*!40000 ALTER TABLE `pm_ps_genset_temuan` DISABLE KEYS */;
INSERT INTO `pm_ps_genset_temuan` (`id`, `keterangan`, `id_pop`) VALUES
	(1, '', 3);
/*!40000 ALTER TABLE `pm_ps_genset_temuan` ENABLE KEYS */;

-- Dumping structure for table db_ibox.pm_ps_inverter_data
CREATE TABLE IF NOT EXISTS `pm_ps_inverter_data` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `merk_tipe` varchar(255) DEFAULT NULL,
  `s_n` varchar(255) DEFAULT NULL,
  `no_amarta` varchar(255) DEFAULT NULL,
  `t_output` varchar(255) DEFAULT NULL,
  `kapasitas` varchar(255) DEFAULT NULL,
  `beban` varchar(255) DEFAULT NULL,
  `utilisasi` varchar(255) DEFAULT NULL,
  `indikasi_alarm` varchar(255) DEFAULT NULL,
  `id_pop` bigint(20) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `Index 2` (`id_pop`),
  CONSTRAINT `FK_pm_ps_inverter_data_pops` FOREIGN KEY (`id_pop`) REFERENCES `pops` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- Dumping data for table db_ibox.pm_ps_inverter_data: ~1 rows (approximately)
DELETE FROM `pm_ps_inverter_data`;
/*!40000 ALTER TABLE `pm_ps_inverter_data` DISABLE KEYS */;
INSERT INTO `pm_ps_inverter_data` (`id`, `merk_tipe`, `s_n`, `no_amarta`, `t_output`, `kapasitas`, `beban`, `utilisasi`, `indikasi_alarm`, `id_pop`) VALUES
	(1, '', '', '', '', '', '', '', '', 2),
	(2, 'tes inverter', '', '', '', '', '', '', '', 4);
/*!40000 ALTER TABLE `pm_ps_inverter_data` ENABLE KEYS */;

-- Dumping structure for table db_ibox.pm_ps_inverter_dokumentasi
CREATE TABLE IF NOT EXISTS `pm_ps_inverter_dokumentasi` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `foto_1` varchar(255) DEFAULT NULL,
  `foto_2` varchar(255) DEFAULT NULL,
  `foto_3` varchar(255) DEFAULT NULL,
  `foto_4` varchar(255) DEFAULT NULL,
  `foto_5` varchar(255) DEFAULT NULL,
  `foto_6` varchar(255) DEFAULT NULL,
  `id_pop` bigint(20) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `Index 2` (`id_pop`),
  CONSTRAINT `FK_pm_ps_inverter_dokumentasi_pops` FOREIGN KEY (`id_pop`) REFERENCES `pops` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- Dumping data for table db_ibox.pm_ps_inverter_dokumentasi: ~0 rows (approximately)
DELETE FROM `pm_ps_inverter_dokumentasi`;
/*!40000 ALTER TABLE `pm_ps_inverter_dokumentasi` DISABLE KEYS */;
INSERT INTO `pm_ps_inverter_dokumentasi` (`id`, `foto_1`, `foto_2`, `foto_3`, `foto_4`, `foto_5`, `foto_6`, `id_pop`) VALUES
	(1, NULL, NULL, NULL, NULL, NULL, NULL, 4);
/*!40000 ALTER TABLE `pm_ps_inverter_dokumentasi` ENABLE KEYS */;

-- Dumping structure for table db_ibox.pm_ps_inverter_lain_lain
CREATE TABLE IF NOT EXISTS `pm_ps_inverter_lain_lain` (
  `id` bigint(20) NOT NULL,
  `keterangan` varchar(255) DEFAULT NULL,
  `id_pop` bigint(20) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `Index 2` (`id_pop`),
  CONSTRAINT `FK_pm_ps_inverter_lain_lain_pops` FOREIGN KEY (`id_pop`) REFERENCES `pops` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table db_ibox.pm_ps_inverter_lain_lain: ~0 rows (approximately)
DELETE FROM `pm_ps_inverter_lain_lain`;
/*!40000 ALTER TABLE `pm_ps_inverter_lain_lain` DISABLE KEYS */;
INSERT INTO `pm_ps_inverter_lain_lain` (`id`, `keterangan`, `id_pop`) VALUES
	(0, '', 4);
/*!40000 ALTER TABLE `pm_ps_inverter_lain_lain` ENABLE KEYS */;

-- Dumping structure for table db_ibox.pm_ps_inverter_temuan
CREATE TABLE IF NOT EXISTS `pm_ps_inverter_temuan` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `keterangan` varchar(255) DEFAULT NULL,
  `id_pop` bigint(20) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `Index 2` (`id_pop`),
  CONSTRAINT `FK_pm_ps_inverter_temuan_pops` FOREIGN KEY (`id_pop`) REFERENCES `pops` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- Dumping data for table db_ibox.pm_ps_inverter_temuan: ~0 rows (approximately)
DELETE FROM `pm_ps_inverter_temuan`;
/*!40000 ALTER TABLE `pm_ps_inverter_temuan` DISABLE KEYS */;
INSERT INTO `pm_ps_inverter_temuan` (`id`, `keterangan`, `id_pop`) VALUES
	(1, '', 4);
/*!40000 ALTER TABLE `pm_ps_inverter_temuan` ENABLE KEYS */;

-- Dumping structure for table db_ibox.pm_ps_ups_data
CREATE TABLE IF NOT EXISTS `pm_ps_ups_data` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `merk_tipe` varchar(255) NOT NULL DEFAULT '',
  `s_n` varchar(255) NOT NULL DEFAULT '',
  `no_amarta` varchar(255) NOT NULL DEFAULT '',
  `t_output` varchar(255) NOT NULL DEFAULT '',
  `kapasitas` varchar(255) NOT NULL DEFAULT '',
  `beban` varchar(255) NOT NULL DEFAULT '',
  `utilisasi` varchar(255) NOT NULL DEFAULT '',
  `lain_lain` varchar(255) NOT NULL DEFAULT '',
  `temuan` varchar(255) NOT NULL DEFAULT '',
  `id_pop` bigint(20) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `Index 2` (`id_pop`),
  CONSTRAINT `FK_pm_ps_ups_data_pops` FOREIGN KEY (`id_pop`) REFERENCES `pops` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- Dumping data for table db_ibox.pm_ps_ups_data: ~1 rows (approximately)
DELETE FROM `pm_ps_ups_data`;
/*!40000 ALTER TABLE `pm_ps_ups_data` DISABLE KEYS */;
INSERT INTO `pm_ps_ups_data` (`id`, `merk_tipe`, `s_n`, `no_amarta`, `t_output`, `kapasitas`, `beban`, `utilisasi`, `lain_lain`, `temuan`, `id_pop`) VALUES
	(1, '', '', '', '', '', '', '', '', '', 4),
	(2, 'tes ups', '', '', '', '', '', '', '', '', 4);
/*!40000 ALTER TABLE `pm_ps_ups_data` ENABLE KEYS */;

-- Dumping structure for table db_ibox.pm_ps_ups_dokumentasi
CREATE TABLE IF NOT EXISTS `pm_ps_ups_dokumentasi` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `foto_1` varchar(255) DEFAULT NULL,
  `foto_2` varchar(255) DEFAULT NULL,
  `foto_3` varchar(255) DEFAULT NULL,
  `foto_4` varchar(255) DEFAULT NULL,
  `foto_5` varchar(255) DEFAULT NULL,
  `foto_6` varchar(255) DEFAULT NULL,
  `id_pop` bigint(20) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `Index 2` (`id_pop`),
  CONSTRAINT `FK_pm_ps_ups_dokumentasi_pops` FOREIGN KEY (`id_pop`) REFERENCES `pops` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- Dumping data for table db_ibox.pm_ps_ups_dokumentasi: ~0 rows (approximately)
DELETE FROM `pm_ps_ups_dokumentasi`;
/*!40000 ALTER TABLE `pm_ps_ups_dokumentasi` DISABLE KEYS */;
INSERT INTO `pm_ps_ups_dokumentasi` (`id`, `foto_1`, `foto_2`, `foto_3`, `foto_4`, `foto_5`, `foto_6`, `id_pop`) VALUES
	(1, NULL, NULL, NULL, NULL, NULL, NULL, 4);
/*!40000 ALTER TABLE `pm_ps_ups_dokumentasi` ENABLE KEYS */;

-- Dumping structure for table db_ibox.pm_ps_ups_lain_lain
CREATE TABLE IF NOT EXISTS `pm_ps_ups_lain_lain` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `keterangan` varchar(255) DEFAULT NULL,
  `id_pop` bigint(20) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `Index 2` (`id_pop`),
  CONSTRAINT `FK_pm_ps_ups_lain_lain_pops` FOREIGN KEY (`id_pop`) REFERENCES `pops` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- Dumping data for table db_ibox.pm_ps_ups_lain_lain: ~0 rows (approximately)
DELETE FROM `pm_ps_ups_lain_lain`;
/*!40000 ALTER TABLE `pm_ps_ups_lain_lain` DISABLE KEYS */;
INSERT INTO `pm_ps_ups_lain_lain` (`id`, `keterangan`, `id_pop`) VALUES
	(1, '', 4);
/*!40000 ALTER TABLE `pm_ps_ups_lain_lain` ENABLE KEYS */;

-- Dumping structure for table db_ibox.pm_ps_ups_temuan
CREATE TABLE IF NOT EXISTS `pm_ps_ups_temuan` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `keterangan` varchar(255) DEFAULT NULL,
  `id_pop` bigint(20) unsigned DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `Index 2` (`id_pop`),
  CONSTRAINT `FK_pm_ps_ups_temuan_pops` FOREIGN KEY (`id_pop`) REFERENCES `pops` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- Dumping data for table db_ibox.pm_ps_ups_temuan: ~0 rows (approximately)
DELETE FROM `pm_ps_ups_temuan`;
/*!40000 ALTER TABLE `pm_ps_ups_temuan` DISABLE KEYS */;
INSERT INTO `pm_ps_ups_temuan` (`id`, `keterangan`, `id_pop`) VALUES
	(1, '', 4);
/*!40000 ALTER TABLE `pm_ps_ups_temuan` ENABLE KEYS */;

-- Dumping structure for table db_ibox.pops
CREATE TABLE IF NOT EXISTS `pops` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `id_pop` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `lat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lng` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_pelanggan_pln` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fasa` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `daya` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mcb` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `area_pln` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rayon_yantek` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `users_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `type_id` bigint(20) unsigned DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `pops_type_id_foreign` (`type_id`),
  CONSTRAINT `pops_type_id_foreign` FOREIGN KEY (`type_id`) REFERENCES `types` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table db_ibox.pops: ~4 rows (approximately)
DELETE FROM `pops`;
/*!40000 ALTER TABLE `pops` DISABLE KEYS */;
INSERT INTO `pops` (`id`, `id_pop`, `name`, `address`, `lat`, `lng`, `id_pelanggan_pln`, `fasa`, `daya`, `mcb`, `area_pln`, `rayon_yantek`, `users_id`, `created_at`, `updated_at`, `type_id`, `status`) VALUES
	(1, '1', 'POP PLH', 'PLH', '3.434', '2.323232', NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL),
	(2, '2', 'POP BJB', 'BJB', '3.1231', '14.22323', NULL, NULL, NULL, NULL, NULL, NULL, 2, NULL, NULL, NULL, NULL),
	(3, '3', 'POP ULIN', 'ULIN', '5.3234', '3432.2343234', NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL),
	(4, '4', 'POP CEMPAKA', 'CEMPAKA', '5.343432', '14.4434', NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL);
/*!40000 ALTER TABLE `pops` ENABLE KEYS */;

-- Dumping structure for table db_ibox.ports
CREATE TABLE IF NOT EXISTS `ports` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `port_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection_type` int(11) DEFAULT NULL,
  `connector_type` int(11) DEFAULT NULL,
  `customer_id` int(11) DEFAULT NULL,
  `aset_id` bigint(20) unsigned DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table db_ibox.ports: ~0 rows (approximately)
DELETE FROM `ports`;
/*!40000 ALTER TABLE `ports` DISABLE KEYS */;
/*!40000 ALTER TABLE `ports` ENABLE KEYS */;

-- Dumping structure for table db_ibox.rackcustomers
CREATE TABLE IF NOT EXISTS `rackcustomers` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `customer_id` bigint(20) unsigned NOT NULL,
  `aset_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hostname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alias` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `users_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `rackcustomers_customer_id_foreign` (`customer_id`),
  CONSTRAINT `rackcustomers_customer_id_foreign` FOREIGN KEY (`customer_id`) REFERENCES `customers` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table db_ibox.rackcustomers: ~0 rows (approximately)
DELETE FROM `rackcustomers`;
/*!40000 ALTER TABLE `rackcustomers` DISABLE KEYS */;
/*!40000 ALTER TABLE `rackcustomers` ENABLE KEYS */;

-- Dumping structure for table db_ibox.rackpops
CREATE TABLE IF NOT EXISTS `rackpops` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `pop_id` bigint(20) unsigned NOT NULL,
  `aset_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hostname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alias` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `users_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `asset_group` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `rackpops_pop_id_foreign` (`pop_id`),
  CONSTRAINT `rackpops_pop_id_foreign` FOREIGN KEY (`pop_id`) REFERENCES `pops` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table db_ibox.rackpops: ~2 rows (approximately)
DELETE FROM `rackpops`;
/*!40000 ALTER TABLE `rackpops` DISABLE KEYS */;
INSERT INTO `rackpops` (`id`, `pop_id`, `aset_id`, `hostname`, `alias`, `users_id`, `created_at`, `updated_at`, `asset_group`) VALUES
	(1, 1, '43', 'ww.tes.com', 'ww.tes.com', 1, NULL, NULL, NULL),
	(2, 1, '40', 'www.ibox.com', 'www.ibox.com', 2, NULL, NULL, NULL);
/*!40000 ALTER TABLE `rackpops` ENABLE KEYS */;

-- Dumping structure for table db_ibox.schedule
CREATE TABLE IF NOT EXISTS `schedule` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `start` datetime NOT NULL,
  `end` datetime NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table db_ibox.schedule: ~0 rows (approximately)
DELETE FROM `schedule`;
/*!40000 ALTER TABLE `schedule` DISABLE KEYS */;
INSERT INTO `schedule` (`id`, `title`, `description`, `start`, `end`, `status`, `created_at`, `updated_at`) VALUES
	(1, 'Tes', 'ini tes jadwal', '2020-01-23 23:36:17', '2020-01-24 00:06:00', 'belum', NULL, NULL);
/*!40000 ALTER TABLE `schedule` ENABLE KEYS */;

-- Dumping structure for table db_ibox.segment
CREATE TABLE IF NOT EXISTS `segment` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table db_ibox.segment: ~0 rows (approximately)
DELETE FROM `segment`;
/*!40000 ALTER TABLE `segment` DISABLE KEYS */;
/*!40000 ALTER TABLE `segment` ENABLE KEYS */;

-- Dumping structure for table db_ibox.servicecat
CREATE TABLE IF NOT EXISTS `servicecat` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `service_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table db_ibox.servicecat: ~0 rows (approximately)
DELETE FROM `servicecat`;
/*!40000 ALTER TABLE `servicecat` DISABLE KEYS */;
/*!40000 ALTER TABLE `servicecat` ENABLE KEYS */;

-- Dumping structure for table db_ibox.services
CREATE TABLE IF NOT EXISTS `services` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `pa_number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `customer_id` bigint(20) unsigned NOT NULL,
  `service` bigint(20) unsigned NOT NULL,
  `sid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `capacity` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `users_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `services_pa_number_unique` (`pa_number`),
  UNIQUE KEY `services_sid_unique` (`sid`),
  KEY `services_customer_id_foreign` (`customer_id`),
  KEY `services_service_foreign` (`service`),
  CONSTRAINT `services_customer_id_foreign` FOREIGN KEY (`customer_id`) REFERENCES `customers` (`id`) ON DELETE CASCADE,
  CONSTRAINT `services_service_foreign` FOREIGN KEY (`service`) REFERENCES `servicecat` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table db_ibox.services: ~0 rows (approximately)
DELETE FROM `services`;
/*!40000 ALTER TABLE `services` DISABLE KEYS */;
/*!40000 ALTER TABLE `services` ENABLE KEYS */;

-- Dumping structure for table db_ibox.slots
CREATE TABLE IF NOT EXISTS `slots` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `slot_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `compatible` int(11) DEFAULT NULL,
  `aset_id` bigint(20) unsigned NOT NULL,
  `customer_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table db_ibox.slots: ~0 rows (approximately)
DELETE FROM `slots`;
/*!40000 ALTER TABLE `slots` DISABLE KEYS */;
/*!40000 ALTER TABLE `slots` ENABLE KEYS */;

-- Dumping structure for table db_ibox.terminasis
CREATE TABLE IF NOT EXISTS `terminasis` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `pop_id` bigint(20) unsigned NOT NULL,
  `rackpop_id` int(11) NOT NULL,
  `asetpop_id` int(11) NOT NULL,
  `popport_id` int(11) NOT NULL,
  `customer_id` bigint(20) unsigned NOT NULL,
  `service_id` bigint(20) unsigned DEFAULT NULL,
  `rackcust_id` bigint(20) unsigned NOT NULL,
  `asetcust_id` bigint(20) unsigned NOT NULL,
  `users_id` bigint(20) unsigned NOT NULL,
  `custport_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `terminasis_pop_id_foreign` (`pop_id`),
  KEY `terminasis_customer_id_foreign` (`customer_id`),
  KEY `terminasis_service_id_foreign` (`service_id`),
  KEY `terminasis_rackcust_id_foreign` (`rackcust_id`),
  CONSTRAINT `terminasis_customer_id_foreign` FOREIGN KEY (`customer_id`) REFERENCES `customers` (`id`) ON DELETE CASCADE,
  CONSTRAINT `terminasis_pop_id_foreign` FOREIGN KEY (`pop_id`) REFERENCES `pops` (`id`),
  CONSTRAINT `terminasis_rackcust_id_foreign` FOREIGN KEY (`rackcust_id`) REFERENCES `rackcustomers` (`id`),
  CONSTRAINT `terminasis_service_id_foreign` FOREIGN KEY (`service_id`) REFERENCES `services` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table db_ibox.terminasis: ~0 rows (approximately)
DELETE FROM `terminasis`;
/*!40000 ALTER TABLE `terminasis` DISABLE KEYS */;
/*!40000 ALTER TABLE `terminasis` ENABLE KEYS */;

-- Dumping structure for table db_ibox.types
CREATE TABLE IF NOT EXISTS `types` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table db_ibox.types: ~0 rows (approximately)
DELETE FROM `types`;
/*!40000 ALTER TABLE `types` DISABLE KEYS */;
/*!40000 ALTER TABLE `types` ENABLE KEYS */;

-- Dumping structure for table db_ibox.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` int(11) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '0',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_username_unique` (`username`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table db_ibox.users: ~2 rows (approximately)
DELETE FROM `users`;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`id`, `name`, `username`, `email`, `email_verified_at`, `password`, `role`, `status`, `remember_token`, `created_at`, `updated_at`) VALUES
	(1, 'ADMIN', 'admin', 'admin@gmail.com', NULL, 'admin', 1, 0, NULL, NULL, NULL),
	(2, 'toyib', 'toyib', 'toyib@gmail.com', NULL, 'toyib', 2, 0, NULL, NULL, NULL);
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
