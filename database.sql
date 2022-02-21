-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               10.4.19-MariaDB - mariadb.org binary distribution
-- Server OS:                    Win64
-- HeidiSQL Version:             11.0.0.5919
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Dumping database structure for laundry
CREATE DATABASE IF NOT EXISTS `laundry` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `laundry`;

-- Dumping structure for table laundry.customer
CREATE TABLE IF NOT EXISTS `customer` (
  `id_customer` int(11) NOT NULL AUTO_INCREMENT,
  `nama_customer` varchar(50) DEFAULT NULL,
  `alamat` varchar(50) DEFAULT NULL,
  `no_hp` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id_customer`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4;

-- Dumping data for table laundry.customer: ~4 rows (approximately)
/*!40000 ALTER TABLE `customer` DISABLE KEYS */;
INSERT INTO `customer` (`id_customer`, `nama_customer`, `alamat`, `no_hp`) VALUES
	(1, 'ucok', 'sanjar', '08265468565'),
	(2, 'domo', 'blubuk', '0856412186565'),
	(3, 'palkon', 'tegalandong', '0856564645646'),
	(4, 'hadeh', 'mbuh', '654654654654');
/*!40000 ALTER TABLE `customer` ENABLE KEYS */;

-- Dumping structure for table laundry.kasir
CREATE TABLE IF NOT EXISTS `kasir` (
  `id_kasir` int(11) NOT NULL AUTO_INCREMENT,
  `nama_kasir` varchar(50) DEFAULT NULL,
  `id_kategori` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_kasir`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;

-- Dumping data for table laundry.kasir: ~3 rows (approximately)
/*!40000 ALTER TABLE `kasir` DISABLE KEYS */;
INSERT INTO `kasir` (`id_kasir`, `nama_kasir`, `id_kategori`) VALUES
	(1, 'ade', 1),
	(2, 'rizki', 2),
	(3, 'yaya', 3);
/*!40000 ALTER TABLE `kasir` ENABLE KEYS */;

-- Dumping structure for table laundry.kategori
CREATE TABLE IF NOT EXISTS `kategori` (
  `id_kategori` int(10) NOT NULL AUTO_INCREMENT,
  `kategori` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id_kategori`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4;

-- Dumping data for table laundry.kategori: ~3 rows (approximately)
/*!40000 ALTER TABLE `kategori` DISABLE KEYS */;
INSERT INTO `kategori` (`id_kategori`, `kategori`) VALUES
	(1, 'reguler'),
	(2, 'express'),
	(3, 'oneday');
/*!40000 ALTER TABLE `kategori` ENABLE KEYS */;

-- Dumping structure for table laundry.transaksi
CREATE TABLE IF NOT EXISTS `transaksi` (
  `id_transaksi` int(10) NOT NULL,
  `tanggal_transaksi` date DEFAULT NULL,
  `id_customer` int(10) DEFAULT NULL,
  `id_kasir` int(10) DEFAULT NULL,
  `id_kategori` int(10) DEFAULT NULL,
  `berat` int(10) DEFAULT NULL,
  `biaya_jasa` int(20) DEFAULT NULL,
  PRIMARY KEY (`id_transaksi`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Dumping data for table laundry.transaksi: ~6 rows (approximately)
/*!40000 ALTER TABLE `transaksi` DISABLE KEYS */;
INSERT INTO `transaksi` (`id_transaksi`, `tanggal_transaksi`, `id_customer`, `id_kasir`, `id_kategori`, `berat`, `biaya_jasa`) VALUES
	(1, '2022-01-06', 1, 1, 1, 21, 300000),
	(2, '2022-01-06', 2, 2, 1, 10, 20000),
	(3, '2022-01-06', 3, 1, 1, 25, 25000),
	(5, '2005-06-10', 3, 3, 3, 2, 500000),
	(7, '0000-00-00', 2, 3, 3, 5, 12000),
	(13, '2021-03-17', 1, 2, 3, 21, 12000);
/*!40000 ALTER TABLE `transaksi` ENABLE KEYS */;

-- Dumping structure for table laundry.user
CREATE TABLE IF NOT EXISTS `user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `level` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Dumping data for table laundry.user: ~2 rows (approximately)
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` (`id_user`, `username`, `password`, `level`) VALUES
	(1, 'admin', 'asd', 'admin'),
	(2, 'user', 'user', 'user');
/*!40000 ALTER TABLE `user` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
