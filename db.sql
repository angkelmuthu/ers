-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               10.4.11-MariaDB - mariadb.org binary distribution
-- Server OS:                    Win64
-- HeidiSQL Version:             10.3.0.5771
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Dumping database structure for ers
DROP DATABASE IF EXISTS `ers`;
CREATE DATABASE IF NOT EXISTS `ers` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `ers`;

-- Dumping structure for table ers.m_test
CREATE TABLE IF NOT EXISTS `m_test` (
  `kdtest` int(11) NOT NULL AUTO_INCREMENT,
  `test_ket` varchar(50) NOT NULL,
  PRIMARY KEY (`kdtest`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;

-- Dumping data for table ers.m_test: ~2 rows (approximately)
/*!40000 ALTER TABLE `m_test` DISABLE KEYS */;
INSERT INTO `m_test` (`kdtest`, `test_ket`) VALUES
	(1, 'test1'),
	(2, 'test2');
/*!40000 ALTER TABLE `m_test` ENABLE KEYS */;

-- Dumping structure for table ers.tbl_hak_akses
CREATE TABLE IF NOT EXISTS `tbl_hak_akses` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_user_level` int(11) NOT NULL,
  `id_menu` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=47 DEFAULT CHARSET=latin1;

-- Dumping data for table ers.tbl_hak_akses: ~16 rows (approximately)
/*!40000 ALTER TABLE `tbl_hak_akses` DISABLE KEYS */;
INSERT INTO `tbl_hak_akses` (`id`, `id_user_level`, `id_menu`) VALUES
	(15, 1, 1),
	(19, 1, 3),
	(21, 2, 1),
	(24, 1, 9),
	(28, 2, 3),
	(29, 2, 2),
	(30, 1, 2),
	(31, 1, 10),
	(32, 1, 11),
	(36, 1, 13),
	(37, 1, 37),
	(38, 1, 38),
	(39, 1, 39),
	(40, 1, 42),
	(41, 1, 53),
	(42, 1, 54),
	(44, 1, 56),
	(45, 1, 59),
	(46, 1, 60);
/*!40000 ALTER TABLE `tbl_hak_akses` ENABLE KEYS */;

-- Dumping structure for table ers.tbl_menu
CREATE TABLE IF NOT EXISTS `tbl_menu` (
  `id_menu` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(50) NOT NULL,
  `url` varchar(30) NOT NULL,
  `icon` varchar(30) NOT NULL,
  `is_main_menu` int(11) NOT NULL,
  `is_aktif` enum('y','n') NOT NULL COMMENT 'y=yes,n=no',
  PRIMARY KEY (`id_menu`)
) ENGINE=InnoDB AUTO_INCREMENT=61 DEFAULT CHARSET=latin1;

-- Dumping data for table ers.tbl_menu: ~8 rows (approximately)
/*!40000 ALTER TABLE `tbl_menu` DISABLE KEYS */;
INSERT INTO `tbl_menu` (`id_menu`, `title`, `url`, `icon`, `is_main_menu`, `is_aktif`) VALUES
	(1, 'KELOLA MENU', 'kelolamenu', 'fal fa-align-justify', 59, 'y'),
	(2, 'KELOLA PENGGUNA', 'user', 'fal fa-align-justify', 59, 'y'),
	(3, 'HAK AKSES', 'userlevel', 'fal fa-align-justify', 59, 'y'),
	(9, 'Contoh Form', 'welcome/form', 'fal fa-align-justify', 60, 'y'),
	(10, 'VAICRUD', 'Vaicrud', 'fal fa-align-justify', 60, 'y'),
	(11, 'VAIEMR', 'Vaiemr', 'fal fa-align-justify', 60, 'y'),
	(13, 'PASIEN RAJAL', 'pasien_rajal', 'fal fa-align-justify', 0, 'y'),
	(37, 'T_soap_perawat', 'T_soap_perawat', 'fal fa-align-justify', 0, 'y'),
	(55, 'SOAP COBA', 'T_soap_coba', 'fal fa-align-justify', 0, 'n'),
	(56, 'T_soap_test', 'T_soap_test', 'fal fa-align-justify', 0, 'n'),
	(58, 'Test', 'Test', 'fal fa-align-justify', 0, 'y'),
	(59, 'SETTING', '#', 'fal fa-cogs', 0, 'y'),
	(60, 'FORM GENERATE', '#', 'fal fa-object-group', 0, 'y');
/*!40000 ALTER TABLE `tbl_menu` ENABLE KEYS */;

-- Dumping structure for table ers.tbl_setting
CREATE TABLE IF NOT EXISTS `tbl_setting` (
  `id_setting` int(11) NOT NULL AUTO_INCREMENT,
  `nama_setting` varchar(50) NOT NULL,
  `value` varchar(40) NOT NULL,
  PRIMARY KEY (`id_setting`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- Dumping data for table ers.tbl_setting: ~0 rows (approximately)
/*!40000 ALTER TABLE `tbl_setting` DISABLE KEYS */;
INSERT INTO `tbl_setting` (`id_setting`, `nama_setting`, `value`) VALUES
	(1, 'Tampil Menu', 'ya');
/*!40000 ALTER TABLE `tbl_setting` ENABLE KEYS */;

-- Dumping structure for table ers.tbl_user
CREATE TABLE IF NOT EXISTS `tbl_user` (
  `id_users` int(11) NOT NULL AUTO_INCREMENT,
  `full_name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `images` text NOT NULL,
  `id_user_level` int(11) NOT NULL,
  `is_aktif` enum('y','n') NOT NULL,
  PRIMARY KEY (`id_users`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

-- Dumping data for table ers.tbl_user: ~2 rows (approximately)
/*!40000 ALTER TABLE `tbl_user` DISABLE KEYS */;
INSERT INTO `tbl_user` (`id_users`, `full_name`, `email`, `password`, `images`, `id_user_level`, `is_aktif`) VALUES
	(1, 'Rifai Achmad, S.Si', 'rifai@gmail.com', '$2y$04$Wbyfv4xwihb..POfhxY5Y.jHOJqEFIG3dLfBYwAmnOACpH0EWCCdq', 'avatar.jpg', 1, 'y'),
	(3, 'Administrator', 'admin@gmail.com', '$2y$04$Wbyfv4xwihb..POfhxY5Y.jHOJqEFIG3dLfBYwAmnOACpH0EWCCdq', '7.png', 2, 'y');
/*!40000 ALTER TABLE `tbl_user` ENABLE KEYS */;

-- Dumping structure for table ers.tbl_user_level
CREATE TABLE IF NOT EXISTS `tbl_user_level` (
  `id_user_level` int(11) NOT NULL AUTO_INCREMENT,
  `nama_level` varchar(30) NOT NULL,
  PRIMARY KEY (`id_user_level`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- Dumping data for table ers.tbl_user_level: ~2 rows (approximately)
/*!40000 ALTER TABLE `tbl_user_level` DISABLE KEYS */;
INSERT INTO `tbl_user_level` (`id_user_level`, `nama_level`) VALUES
	(1, 'Super Admin'),
	(2, 'Admin');
/*!40000 ALTER TABLE `tbl_user_level` ENABLE KEYS */;

-- Dumping structure for table ers.test
CREATE TABLE IF NOT EXISTS `test` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `kdtest` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `tgl` date NOT NULL,
  `alamat` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4;

-- Dumping data for table ers.test: ~3 rows (approximately)
/*!40000 ALTER TABLE `test` DISABLE KEYS */;
INSERT INTO `test` (`id`, `kdtest`, `nama`, `tgl`, `alamat`) VALUES
	(1, 1, 'mansyur', '2022-01-01', 'JL.PANGKALAN RT.002 / RW.04 KEL.PONDOK RANGGON KEC.CIPAYUNG JAKARTA TIMUR'),
	(3, 2, 'mansyur', '2020-04-23', 'vvvv'),
	(4, 2, 'mansyur', '2020-04-15', 'bbb');
/*!40000 ALTER TABLE `test` ENABLE KEYS */;

-- Dumping structure for table ers.t_menu_emr
CREATE TABLE IF NOT EXISTS `t_menu_emr` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tabel` varchar(100) NOT NULL,
  `title` varchar(100) NOT NULL,
  `url` varchar(50) NOT NULL,
  `aktif` enum('Y','N') NOT NULL DEFAULT 'Y',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=utf8mb4;

-- Dumping data for table ers.t_menu_emr: ~2 rows (approximately)
/*!40000 ALTER TABLE `t_menu_emr` DISABLE KEYS */;
INSERT INTO `t_menu_emr` (`id`, `tabel`, `title`, `url`, `aktif`) VALUES
	(1, 't_soap_perawat', 'T_soap_perawat', 'T_soap_perawat', 'Y'),
	(6, 'test', 'Test', 'Test', 'Y'),
	(29, 't_soap_coba', 'SOAP COBA', 'T_soap_coba', 'Y'),
	(30, 't_soap_test', 'T_soap_test', 'T_soap_test', 'Y');
/*!40000 ALTER TABLE `t_menu_emr` ENABLE KEYS */;

-- Dumping structure for table ers.t_soap_coba
CREATE TABLE IF NOT EXISTS `t_soap_coba` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idxdaftar` int(11) NOT NULL,
  `nomr` int(11) NOT NULL,
  `s` text DEFAULT NULL,
  `o` text DEFAULT NULL,
  `a` text DEFAULT NULL,
  `p` text DEFAULT NULL,
  `id_users` int(11) NOT NULL,
  `tgl` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ROW_FORMAT=DYNAMIC;

-- Dumping data for table ers.t_soap_coba: ~0 rows (approximately)
/*!40000 ALTER TABLE `t_soap_coba` DISABLE KEYS */;
/*!40000 ALTER TABLE `t_soap_coba` ENABLE KEYS */;

-- Dumping structure for table ers.t_soap_perawat
CREATE TABLE IF NOT EXISTS `t_soap_perawat` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idxdaftar` int(11) NOT NULL,
  `nomr` int(11) NOT NULL,
  `s` text DEFAULT NULL,
  `o` text DEFAULT NULL,
  `a` text DEFAULT NULL,
  `p` text DEFAULT NULL,
  `id_users` int(11) NOT NULL,
  `tgl` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;

-- Dumping data for table ers.t_soap_perawat: ~2 rows (approximately)
/*!40000 ALTER TABLE `t_soap_perawat` DISABLE KEYS */;
INSERT INTO `t_soap_perawat` (`id`, `idxdaftar`, `nomr`, `s`, `o`, `a`, `p`, `id_users`, `tgl`) VALUES
	(1, 366835, 20007, 'aa', 'bb', '11', 'dd', 1, '2020-05-08 20:58:55'),
	(2, 366835, 20007, 'aa', 'bb', '11', 'dd', 1, '2020-05-08 20:18:58');
/*!40000 ALTER TABLE `t_soap_perawat` ENABLE KEYS */;

-- Dumping structure for table ers.t_soap_test
CREATE TABLE IF NOT EXISTS `t_soap_test` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idxdaftar` int(11) NOT NULL,
  `nomr` int(11) NOT NULL,
  `s` text DEFAULT NULL,
  `o` text DEFAULT NULL,
  `a` text DEFAULT NULL,
  `p` text DEFAULT NULL,
  `id_users` int(11) NOT NULL,
  `tgl` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 ROW_FORMAT=DYNAMIC;

-- Dumping data for table ers.t_soap_test: ~2 rows (approximately)
/*!40000 ALTER TABLE `t_soap_test` DISABLE KEYS */;
INSERT INTO `t_soap_test` (`id`, `idxdaftar`, `nomr`, `s`, `o`, `a`, `p`, `id_users`, `tgl`) VALUES
	(4, 366835, 20007, 'x', 'xx', 'xxx', 'qqqq', 1, '2020-05-09 21:49:24'),
	(5, 366827, 20221, 'a', 'c', 'w', 'r', 1, '2020-05-10 16:10:11');
/*!40000 ALTER TABLE `t_soap_test` ENABLE KEYS */;

-- Dumping structure for view ers.v_menu
-- Creating temporary table to overcome VIEW dependency errors
CREATE TABLE `v_menu` (
	`id_menu` INT(11) NOT NULL,
	`title` VARCHAR(50) NOT NULL COLLATE 'latin1_swedish_ci',
	`url` VARCHAR(30) NOT NULL COLLATE 'latin1_swedish_ci',
	`icon` VARCHAR(30) NOT NULL COLLATE 'latin1_swedish_ci',
	`is_main_menu` INT(11) NOT NULL,
	`is_aktif` ENUM('y','n') NOT NULL COMMENT 'y=yes,n=no' COLLATE 'latin1_swedish_ci',
	`id` INT(11) NOT NULL,
	`tabel` VARCHAR(100) NOT NULL COLLATE 'utf8mb4_general_ci',
	`title_emr` VARCHAR(100) NOT NULL COLLATE 'utf8mb4_general_ci',
	`url_emr` VARCHAR(50) NOT NULL COLLATE 'utf8mb4_general_ci',
	`aktif` ENUM('Y','N') NOT NULL COLLATE 'utf8mb4_general_ci'
) ENGINE=MyISAM;

-- Dumping structure for view ers.v_menu
-- Removing temporary table and create final VIEW structure
DROP TABLE IF EXISTS `v_menu`;
CREATE ALGORITHM=UNDEFINED SQL SECURITY DEFINER VIEW `v_menu` AS SELECT a.id_menu,a.title,a.url,a.icon,a.is_main_menu,a.is_aktif,b.id,b.tabel,b.title AS title_emr,b.url AS url_emr,b.aktif FROM tbl_menu a
INNER JOIN t_menu_emr b ON a.url=b.url ;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
