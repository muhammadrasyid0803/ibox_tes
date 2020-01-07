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

-- Dumping data for table db_ibox.a_ac_electricity: ~0 rows (approximately)
DELETE FROM `a_ac_electricity`;
/*!40000 ALTER TABLE `a_ac_electricity` DISABLE KEYS */;
INSERT INTO `a_ac_electricity` (`id`, `desc_kwh`, `desc_acpdb`, `kondisi_kwh`, `kondisi_acpdb`, `file_kwh`, `file_acpdb`, `created_at`, `id_pop`) VALUES
	(1, 'yy', 'ss', 'Baik', 'Rusak', '05012020_062402.jpg', '05012020_0624021.jpg', '2020-01-05 14:24:02', 4),
	(2, 'tayib', 'sddd', 'Baik', 'Baik', '05012020_071042.png', '05012020_071042.jpg', '2020-01-05 15:10:42', 2);
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
	(1, 'ssd', 'Baik', '04012020_080002.jpg', 'dfsdf', 'Baik', '04012020_0800021.jpg', '2020-01-04 16:00:02', 1, 2),
	(2, 'tse', 'Baik', '04012020_084623.jpg', 'ssd', 'Baik', '04012020_0846231.jpg', '2020-01-04 16:46:23', 1, 2),
	(3, 'asdf', 'Baik', '04012020_085319.jpg', 'ssfd', 'Rusak', '04012020_0853191.jpg', '2020-01-04 16:53:19', 4, 1),
	(4, 'ada no rack', 'Baik', '07012020_130213.png', 'buildign', 'Kurang', '07012020_130213.jpg', '2020-01-07 21:02:14', 2, 1);
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
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `id_pop` bigint(20) unsigned DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_a_dc_electricity_pops` (`id_pop`),
  CONSTRAINT `FK_a_dc_electricity_pops` FOREIGN KEY (`id_pop`) REFERENCES `pops` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- Dumping data for table db_ibox.a_dc_electricity: ~0 rows (approximately)
DELETE FROM `a_dc_electricity`;
/*!40000 ALTER TABLE `a_dc_electricity` DISABLE KEYS */;
INSERT INTO `a_dc_electricity` (`id`, `desc_rectifier`, `kondisi_rectifier`, `file_rectifier`, `desc_dcpdb`, `kondisi_dcpdb`, `file_dcpdb`, `created_at`, `id_pop`) VALUES
	(1, 'ini', 'Baik', '06012020_122121.jpg', 'dc', 'Rusak', '06012020_1221211.jpg', '2020-01-06 20:21:21', 2);
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
	(1, 'ini AC', 'Baik', '06012020_124557.jpg', 'ini ALARM', 'Kurang', '06012020_1245571.jpg', '2020-01-06 20:45:57', 2);
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
	(1, 'ini odf', 'Baik', '06012020_124951.jpg', '2020-01-06 20:49:51', 3);
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
	(1, 'ini genset', 'Baik', '06012020_123601.jpg', 'ini ATS', 'Baik', '06012020_1236011.jpg', 'ini INVERTER', 'Rusak', '06012020_1236012.jpg', 'ini UPS', 'Baik', '06012020_1236013.jpg', '2020-01-06 20:36:01', 2);
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

-- Dumping data for table db_ibox.jobs: ~0 rows (approximately)
DELETE FROM `jobs`;
/*!40000 ALTER TABLE `jobs` DISABLE KEYS */;
INSERT INTO `jobs` (`id`, `job_number`, `description`, `location`, `lat`, `lng`, `date`, `category`, `severity`, `priority`, `impact`, `disposisi`, `status`, `file`, `excecution_number`, `relization_date`, `users_id`, `created_at`, `updated_at`, `subcategory`) VALUES
	(1, '001', 'maintenance kabel jalurA2', '', '', '', '0000-00-00', '', '', '', '', NULL, 'selesai', NULL, NULL, NULL, '2', NULL, NULL, NULL),
	(2, '002', 'ini job admin', 'pgg', '3.434', '3.434', '2020-01-06', '3', '4', '4', '3', NULL, 'belum', NULL, NULL, NULL, '1', NULL, NULL, NULL);
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

-- Dumping data for table db_ibox.rackpops: ~0 rows (approximately)
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
  `start` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `end` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table db_ibox.schedule: ~0 rows (approximately)
DELETE FROM `schedule`;
/*!40000 ALTER TABLE `schedule` DISABLE KEYS */;
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

-- Dumping data for table db_ibox.users: ~0 rows (approximately)
DELETE FROM `users`;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`id`, `name`, `username`, `email`, `email_verified_at`, `password`, `role`, `status`, `remember_token`, `created_at`, `updated_at`) VALUES
	(1, 'ADMIN', 'admin', 'admin@gmail.com', NULL, 'admin', 1, 0, NULL, NULL, NULL),
	(2, 'toyib', 'toyib', 'toyib@gmail.com', NULL, 'toyib', 2, 0, NULL, NULL, NULL);
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
