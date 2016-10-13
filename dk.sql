-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               10.1.13-MariaDB - mariadb.org binary distribution
-- Server OS:                    Win32
-- HeidiSQL Version:             9.3.0.4984
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Dumping structure for table dk.photo
CREATE TABLE IF NOT EXISTS `photo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(100) NOT NULL,
  `desc` varchar(200) NOT NULL,
  `filename` varchar(200) NOT NULL,
  `is_gallery` tinyint(4) NOT NULL DEFAULT '0',
  `user_create` tinyint(4) NOT NULL,
  `date_create` datetime NOT NULL,
  `user_update` tinyint(4) NOT NULL,
  `date_update` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table dk.photo: ~0 rows (approximately)
/*!40000 ALTER TABLE `photo` DISABLE KEYS */;
/*!40000 ALTER TABLE `photo` ENABLE KEYS */;


-- Dumping structure for table dk.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `code` varchar(15) NOT NULL,
  `name` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `level` varchar(10) NOT NULL,
  `ip_login` varchar(50) NOT NULL,
  `date_login` datetime NOT NULL,
  `user_agent` varchar(50) NOT NULL,
  `status` varchar(10) NOT NULL,
  `user_create` int(11) NOT NULL,
  `date_create` datetime NOT NULL,
  `user_update` int(11) NOT NULL,
  `date_update` datetime NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

-- Dumping data for table dk.users: ~1 rows (approximately)
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`id`, `code`, `name`, `username`, `password`, `level`, `ip_login`, `date_login`, `user_agent`, `status`, `user_create`, `date_create`, `user_update`, `date_update`) VALUES
	(12, '001', 'Adam Prasetia', 'damz', '202cb962ac59075b964b07152d234b70', '1', '::1', '2016-10-13 20:31:59', 'Windows 7(Google Chrome 53.0.2785.143)', '1', 0, '0000-00-00 00:00:00', 12, '2016-06-24 11:01:44');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;


-- Dumping structure for table dk.users_level
CREATE TABLE IF NOT EXISTS `users_level` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `code` varchar(15) NOT NULL,
  `name` varchar(50) NOT NULL,
  `user_create` int(11) NOT NULL,
  `date_create` datetime NOT NULL,
  `user_update` int(11) NOT NULL,
  `date_update` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

-- Dumping data for table dk.users_level: ~2 rows (approximately)
/*!40000 ALTER TABLE `users_level` DISABLE KEYS */;
INSERT INTO `users_level` (`id`, `code`, `name`, `user_create`, `date_create`, `user_update`, `date_update`) VALUES
	(1, '1', 'ADMIN', 0, '0000-00-00 00:00:00', 12, '2016-06-24 10:44:04'),
	(2, '2', 'OPERATOR', 0, '0000-00-00 00:00:00', 12, '2016-06-24 10:44:08');
/*!40000 ALTER TABLE `users_level` ENABLE KEYS */;


-- Dumping structure for table dk.users_status
CREATE TABLE IF NOT EXISTS `users_status` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `code` varchar(15) NOT NULL,
  `name` varchar(50) NOT NULL,
  `user_create` int(11) NOT NULL,
  `date_create` datetime NOT NULL,
  `user_update` int(11) NOT NULL,
  `date_update` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

-- Dumping data for table dk.users_status: ~2 rows (approximately)
/*!40000 ALTER TABLE `users_status` DISABLE KEYS */;
INSERT INTO `users_status` (`id`, `code`, `name`, `user_create`, `date_create`, `user_update`, `date_update`) VALUES
	(1, '1', 'ACTIVE', 0, '2015-10-31 14:00:03', 12, '2016-06-24 10:43:51'),
	(2, '2', 'NOT ACTIVE', 0, '2015-10-31 14:00:03', 12, '2016-06-24 10:43:55');
/*!40000 ALTER TABLE `users_status` ENABLE KEYS */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
