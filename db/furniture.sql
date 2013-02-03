-- --------------------------------------------------------
-- Host:                         
-- Server version:               5.5.25 - MySQL Community Server (GPL)
-- Server OS:                    Win32
-- HeidiSQL version:             7.0.0.4053
-- Date/time:                    2013-02-03 13:13:20
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET FOREIGN_KEY_CHECKS=0 */;

-- Dumping database structure for furniture
DROP DATABASE IF EXISTS `furniture`;
CREATE DATABASE IF NOT EXISTS `furniture` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `furniture`;


-- Dumping structure for table furniture.cart
DROP TABLE IF EXISTS `cart`;
CREATE TABLE IF NOT EXISTS `cart` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `member_id` int(10) DEFAULT NULL,
  `order_date` date DEFAULT NULL,
  `status` varchar(50) DEFAULT NULL,
  `total_price` float DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Dumping data for table furniture.cart: ~0 rows (approximately)
/*!40000 ALTER TABLE `cart` DISABLE KEYS */;
/*!40000 ALTER TABLE `cart` ENABLE KEYS */;


-- Dumping structure for table furniture.mapping_cart_product
DROP TABLE IF EXISTS `mapping_cart_product`;
CREATE TABLE IF NOT EXISTS `mapping_cart_product` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `cart_id` int(10) unsigned DEFAULT NULL,
  `produc_id` int(10) unsigned DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Dumping data for table furniture.mapping_cart_product: ~0 rows (approximately)
/*!40000 ALTER TABLE `mapping_cart_product` DISABLE KEYS */;
/*!40000 ALTER TABLE `mapping_cart_product` ENABLE KEYS */;


-- Dumping structure for table furniture.member
DROP TABLE IF EXISTS `member`;
CREATE TABLE IF NOT EXISTS `member` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name_display` varchar(50) NOT NULL DEFAULT '0',
  `name` varchar(50) NOT NULL DEFAULT '0',
  `last_name` varchar(50) NOT NULL DEFAULT '0',
  `email` varchar(50) NOT NULL DEFAULT '0',
  `password` varchar(50) NOT NULL DEFAULT '0',
  `gender` varchar(50) NOT NULL DEFAULT '0',
  `birthdate` date DEFAULT NULL,
  `phone` varchar(50) DEFAULT NULL,
  `number` varchar(50) DEFAULT '0',
  `room` varchar(50) DEFAULT '0',
  `floor` varchar(50) DEFAULT '0',
  `building` varchar(50) DEFAULT '0',
  `village` varchar(50) DEFAULT '0',
  `group` varchar(50) DEFAULT '0',
  `alley` varchar(50) DEFAULT '0',
  `road` varchar(50) DEFAULT '0',
  `subdistrict` varchar(50) DEFAULT '0',
  `district` varchar(50) DEFAULT '0',
  `province` varchar(50) DEFAULT '0',
  `zipcode` varchar(50) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- Dumping data for table furniture.member: ~2 rows (approximately)
/*!40000 ALTER TABLE `member` DISABLE KEYS */;
REPLACE INTO `member` (`id`, `name_display`, `name`, `last_name`, `email`, `password`, `gender`, `birthdate`, `phone`, `number`, `room`, `floor`, `building`, `village`, `group`, `alley`, `road`, `subdistrict`, `district`, `province`, `zipcode`) VALUES
	(1, 'first ', 'name', 'lastname', 'email', 'pass', 'gender', '1998-01-10', '111111', 'number', 'room', 'floor', 'building', 'vill', 'moo', 'soi', 'road', 'sub', 'dis', 'prov', 'zip'),
	(2, 'User', 'user1', 'useruser', 'mail@mail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'F', '1997-02-09', '', '', '', '', '', '', '', '', '', '', '', '', '');
/*!40000 ALTER TABLE `member` ENABLE KEYS */;


-- Dumping structure for table furniture.product
DROP TABLE IF EXISTS `product`;
CREATE TABLE IF NOT EXISTS `product` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `product_name` varchar(50) DEFAULT NULL,
  `product_detail` varchar(500) DEFAULT NULL,
  `price` float DEFAULT NULL,
  `img` varchar(500) DEFAULT NULL,
  `type_id` int(10) unsigned DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

-- Dumping data for table furniture.product: ~4 rows (approximately)
/*!40000 ALTER TABLE `product` DISABLE KEYS */;
REPLACE INTO `product` (`id`, `product_name`, `product_detail`, `price`, `img`, `type_id`) VALUES
	(4, 'headsets', 'samsung', 30, '001003.jpg', 5),
	(6, 'p1', 'product1', 25, 'joshsommers18.jpg', 6);
/*!40000 ALTER TABLE `product` ENABLE KEYS */;


-- Dumping structure for table furniture.product_type
DROP TABLE IF EXISTS `product_type`;
CREATE TABLE IF NOT EXISTS `product_type` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `type_name` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

-- Dumping data for table furniture.product_type: ~6 rows (approximately)
/*!40000 ALTER TABLE `product_type` DISABLE KEYS */;
REPLACE INTO `product_type` (`id`, `type_name`) VALUES
	(1, 'chair'),
	(2, 'cot'),
	(3, 'table'),
	(4, 'sofa'),
	(5, 'wardrobe'),
	(6, 'showcase');
/*!40000 ALTER TABLE `product_type` ENABLE KEYS */;
/*!40014 SET FOREIGN_KEY_CHECKS=1 */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
