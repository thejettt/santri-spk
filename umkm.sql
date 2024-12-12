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


-- Dumping database structure for umkm
CREATE DATABASE IF NOT EXISTS `umkm` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `umkm`;

-- Dumping structure for table umkm.data_alternatif
CREATE TABLE IF NOT EXISTS `data_alternatif` (
  `id` int NOT NULL AUTO_INCREMENT,
  `kode_alternatif` varchar(50) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `nama_alternatif` varchar(50) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `C1` double DEFAULT NULL,
  `C2` double DEFAULT NULL,
  `C3` double DEFAULT NULL,
  `C4` double DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dumping data for table umkm.data_alternatif: ~1 rows (approximately)
INSERT INTO `data_alternatif` (`id`, `kode_alternatif`, `nama_alternatif`, `C1`, `C2`, `C3`, `C4`) VALUES
	(1, 'A1', 'Adelbertus Saputra Klau', 85.51, 89.24, 80.22, 77),
	(2, 'A2', 'Alfonsia Seran', 89.19, 86.25, 88.35, 83);

-- Dumping structure for table umkm.data_bobot
CREATE TABLE IF NOT EXISTS `data_bobot` (
  `id` int NOT NULL AUTO_INCREMENT,
  `kode_kriteria` varchar(10) NOT NULL,
  `nama_kriteria` varchar(100) NOT NULL,
  `nama_bobot` varchar(50) NOT NULL,
  `nilai_bobot` decimal(5,2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table umkm.data_bobot: ~10 rows (approximately)
INSERT INTO `data_bobot` (`id`, `kode_kriteria`, `nama_kriteria`, `nama_bobot`, `nilai_bobot`) VALUES
	(1, 'C1', 'Jenis Usaha', 'Mikro', 30.00),
	(2, 'C1', 'Jenis Usaha', 'Makro', 70.00),
	(3, 'C2', 'Jumlah Pekerja', '<=1', 10.00),
	(4, 'C2', 'Jumlah Pekerja', '2-5', 20.00),
	(5, 'C2', 'Jumlah Pekerja', '5-100', 30.00),
	(6, 'C2', 'Jumlah Pekerja', '>100', 40.00),
	(7, 'C3', 'Modal Usaha', '<=1000000', 10.00),
	(8, 'C3', 'Modal Usaha', '1000001-2000000', 20.00),
	(9, 'C3', 'Modal Usaha', '2000001-3000000', 30.00),
	(10, 'C3', 'Modal Usaha', '>3000000', 40.00);

-- Dumping structure for table umkm.data_kriteria
CREATE TABLE IF NOT EXISTS `data_kriteria` (
  `id` int NOT NULL AUTO_INCREMENT,
  `kode_kriteria` varchar(10) NOT NULL,
  `nama_kriteria` varchar(100) NOT NULL,
  `nilai_kriteria` decimal(5,2) NOT NULL,
  `tipe_kriteria` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table umkm.data_kriteria: ~4 rows (approximately)
INSERT INTO `data_kriteria` (`id`, `kode_kriteria`, `nama_kriteria`, `nilai_kriteria`, `tipe_kriteria`) VALUES
	(0, 'C1', 'Nilai UN', 5.00, 'Benefit'),
	(1, 'C2', 'Nilai Ujian Sekolah IPA', 4.00, 'Benefit'),
	(2, 'C3', 'Nilai Ujian Sekolah IPS', 4.00, 'Benefit'),
	(3, 'C4', 'Nilai Test', 5.00, 'Benefit');

-- Dumping structure for table umkm.data_umkm
CREATE TABLE IF NOT EXISTS `data_umkm` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nama_umkm` varchar(100) NOT NULL,
  `nama_pimpinan` varchar(100) NOT NULL,
  `jalan` varchar(150) NOT NULL,
  `desa` varchar(100) NOT NULL,
  `kecamatan` varchar(100) NOT NULL,
  `jenis_usaha` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table umkm.data_umkm: ~4 rows (approximately)
INSERT INTO `data_umkm` (`id`, `nama_umkm`, `nama_pimpinan`, `jalan`, `desa`, `kecamatan`, `jenis_usaha`) VALUES
	(2, 'UD. Linggar Jati', 'Muhammad Bahrus Salim', 'JL. Gatot Subroto 45', 'Bukur', 'Purworejo', 'Jual Kayu Bangunan'),
	(3, 'Nanda Motor', 'Rudi Santoso', 'JL. Pattimura', 'Pohjentrek', 'Purworejo', 'Bengkel'),
	(4, 'Zayaka Tailor', 'Maritsa Salim', 'JL. Mawar 78', 'Krapyak', 'Kraton', 'Penjahitan');

-- Dumping structure for table umkm.jenis_usaha
CREATE TABLE IF NOT EXISTS `jenis_usaha` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nama_jenis_usaha` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table umkm.jenis_usaha: ~1 rows (approximately)
INSERT INTO `jenis_usaha` (`id`, `nama_jenis_usaha`) VALUES
	(14, 'Alif');

-- Dumping structure for table umkm.konversi_penilaian
CREATE TABLE IF NOT EXISTS `konversi_penilaian` (
  `id_konversi` int NOT NULL AUTO_INCREMENT,
  `nama_usaha` varchar(100) DEFAULT NULL,
  `C1` int DEFAULT NULL,
  `C2` int DEFAULT NULL,
  `C3` int DEFAULT NULL,
  PRIMARY KEY (`id_konversi`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table umkm.konversi_penilaian: ~4 rows (approximately)
INSERT INTO `konversi_penilaian` (`id_konversi`, `nama_usaha`, `C1`, `C2`, `C3`) VALUES
	(1, 'Kios Lumintu', 30, 40, 30),
	(2, 'UD.Linggar Jati', 70, 40, 40),
	(3, 'Nanda Motor', 30, 10, 10),
	(4, 'Zakiya Tailor', 30, 10, 30);

-- Dumping structure for table umkm.tbl_mahasiswa
CREATE TABLE IF NOT EXISTS `tbl_mahasiswa` (
  `id_mhs` int NOT NULL AUTO_INCREMENT,
  `nim` varchar(50) DEFAULT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `jurusan` varchar(255) DEFAULT NULL,
  `alamat` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id_mhs`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table umkm.tbl_mahasiswa: ~2 rows (approximately)
INSERT INTO `tbl_mahasiswa` (`id_mhs`, `nim`, `nama`, `jurusan`, `alamat`) VALUES
	(8, '220605110126', 'Andre', 'Teknik Arsitektur', 'Jakarta'),
	(9, '220605110126', 'Andrean', 'Teknik Informatika', 'Bekasi');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
