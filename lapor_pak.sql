/*
 Navicat MySQL Data Transfer

 Source Server         : localhost
 Source Server Type    : MySQL
 Source Server Version : 80023
 Source Host           : localhost:3306
 Source Schema         : lapor_pak

 Target Server Type    : MySQL
 Target Server Version : 80023
 File Encoding         : 65001

 Date: 25/05/2021 21:36:30
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for jabatan
-- ----------------------------
DROP TABLE IF EXISTS `jabatan`;
CREATE TABLE `jabatan` (
  `id` bigint NOT NULL AUTO_INCREMENT,
  `nip` varchar(255) DEFAULT NULL,
  `nama_jabatan` varchar(255) DEFAULT NULL,
  `tgl_sk` date DEFAULT NULL,
  `no_sk` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- ----------------------------
-- Records of jabatan
-- ----------------------------
BEGIN;
COMMIT;

-- ----------------------------
-- Table structure for keluarga
-- ----------------------------
DROP TABLE IF EXISTS `keluarga`;
CREATE TABLE `keluarga` (
  `id` bigint NOT NULL AUTO_INCREMENT,
  `nip` varchar(255) DEFAULT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `tgl_lahir` date DEFAULT NULL,
  `tempat_lahir` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- ----------------------------
-- Records of keluarga
-- ----------------------------
BEGIN;
COMMIT;

-- ----------------------------
-- Table structure for naik_berkala
-- ----------------------------
DROP TABLE IF EXISTS `naik_berkala`;
CREATE TABLE `naik_berkala` (
  `id` bigint NOT NULL COMMENT ' ',
  `nip` varchar(255) DEFAULT NULL,
  `tgl_sk` date DEFAULT NULL,
  `masa_kerja` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- ----------------------------
-- Records of naik_berkala
-- ----------------------------
BEGIN;
COMMIT;

-- ----------------------------
-- Table structure for naik_golongan
-- ----------------------------
DROP TABLE IF EXISTS `naik_golongan`;
CREATE TABLE `naik_golongan` (
  `id` bigint NOT NULL AUTO_INCREMENT,
  `nip` varchar(255) DEFAULT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `golongan_sebelumnya` varchar(255) DEFAULT NULL,
  `golongan_sekarang` varchar(255) DEFAULT NULL,
  `tgl_naik_golongan` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- ----------------------------
-- Records of naik_golongan
-- ----------------------------
BEGIN;
COMMIT;

-- ----------------------------
-- Table structure for pegawai
-- ----------------------------
DROP TABLE IF EXISTS `pegawai`;
CREATE TABLE `pegawai` (
  `id` bigint NOT NULL AUTO_INCREMENT,
  `nip` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `alamat` text,
  `golongan` varchar(255) DEFAULT NULL,
  `tgl_lahir` date DEFAULT NULL,
  `tempat_lahir` varchar(255) DEFAULT NULL,
  `jenis_kelamin` varchar(255) DEFAULT NULL,
  `agama` varchar(255) DEFAULT NULL,
  `telepon` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `pendidikan` varchar(255) DEFAULT NULL,
  `status_pernikahan` varchar(255) DEFAULT NULL,
  `tgl_masuk` date DEFAULT NULL,
  `jabatan` varchar(255) DEFAULT NULL,
  `kantor` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- ----------------------------
-- Records of pegawai
-- ----------------------------
BEGIN;
INSERT INTO `pegawai` VALUES (5, '4444444', 'fajar', 'mataram', '3B', '1990-03-02', 'Nganjuk', 'Laki-laki', 'Islam', '6281803747336', 'S1', 'Menikah', '2016-01-01', 'Staf', 'PDAM', '2021-05-25 21:09:18', '2021-05-25 21:26:51');
INSERT INTO `pegawai` VALUES (6, '325245', 'fajar', 'mataram', '3B', '1990-03-02', 'Nganjuk', 'Laki-laki', 'Islam', '6281803747336', 'S1', 'Menikah', '2016-01-01', 'Staf', 'PDAM', '2021-05-25 21:09:18', '2021-05-25 21:26:51');
INSERT INTO `pegawai` VALUES (7, '1234', 'fajar', 'mataram', '3B', '1990-03-02', 'Nganjuk', 'Laki-laki', 'Islam', '6281803747336', 'S1', 'Menikah', '2016-01-01', 'Staf', 'PDAM', '2021-05-25 21:26:51', '2021-05-25 21:26:51');
COMMIT;

-- ----------------------------
-- Table structure for pendidikan_formal
-- ----------------------------
DROP TABLE IF EXISTS `pendidikan_formal`;
CREATE TABLE `pendidikan_formal` (
  `id` bigint NOT NULL AUTO_INCREMENT,
  `nip` varchar(255) DEFAULT NULL,
  `jenjang` varchar(255) DEFAULT NULL,
  `nama_sekolah` varchar(255) DEFAULT NULL,
  `jurusan` varchar(255) DEFAULT NULL,
  `tahun_lulus` int DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- ----------------------------
-- Records of pendidikan_formal
-- ----------------------------
BEGIN;
COMMIT;

-- ----------------------------
-- Table structure for pendidikan_non_formal
-- ----------------------------
DROP TABLE IF EXISTS `pendidikan_non_formal`;
CREATE TABLE `pendidikan_non_formal` (
  `id` bigint DEFAULT NULL,
  `nip` varchar(255) DEFAULT NULL,
  `nama_pendidikan` varchar(255) DEFAULT NULL,
  `tgl_pendidikan` date DEFAULT NULL,
  `lokasi` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- ----------------------------
-- Records of pendidikan_non_formal
-- ----------------------------
BEGIN;
COMMIT;

-- ----------------------------
-- Table structure for pengguna
-- ----------------------------
DROP TABLE IF EXISTS `pengguna`;
CREATE TABLE `pengguna` (
  `id` bigint NOT NULL AUTO_INCREMENT,
  `uid` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `kata_sandi` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `nama` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `remember_token` text CHARACTER SET latin1 COLLATE latin1_swedish_ci,
  `created_at` timestamp NOT NULL,
  `updated_at` timestamp NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE KEY `member_user` (`uid`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of pengguna
-- ----------------------------
BEGIN;
INSERT INTO `pengguna` VALUES (1, 'administrator', '$2y$10$OO1hR3ytcCs/ChytOAk7d.ZUDvFJl.Tcz/F4pxzB6yjLbtANHbfLq', 'Administrator', NULL, '2021-05-22 00:00:00', '2021-05-25 20:39:22', NULL);
COMMIT;

-- ----------------------------
-- Table structure for pensiun
-- ----------------------------
DROP TABLE IF EXISTS `pensiun`;
CREATE TABLE `pensiun` (
  `id` bigint NOT NULL AUTO_INCREMENT,
  `nip` varchar(255) DEFAULT NULL,
  `tgl_pensiun` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- ----------------------------
-- Records of pensiun
-- ----------------------------
BEGIN;
COMMIT;

SET FOREIGN_KEY_CHECKS = 1;
