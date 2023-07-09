-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 08, 2023 at 05:15 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `profile_matching_ci4`
--

-- --------------------------------------------------------

--
-- Table structure for table `aspek`
--

CREATE TABLE `aspek` (
  `id` int(11) UNSIGNED NOT NULL,
  `kode_aspek` varchar(50) NOT NULL,
  `nama_aspek` varchar(100) NOT NULL,
  `persentase` int(11) NOT NULL,
  `bobot_core` int(11) NOT NULL,
  `bobot_secondary` int(11) NOT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `aspek`
--

INSERT INTO `aspek` (`id`, `kode_aspek`, `nama_aspek`, `persentase`, `bobot_core`, `bobot_secondary`, `created_at`, `updated_at`) VALUES
(1, 'AA01', 'Kecerdasan', 30, 60, 40, '2023-07-08 11:33:32', '2023-07-08 11:33:32'),
(2, 'AA02', 'Sikap Kerja', 30, 65, 35, '2023-07-08 11:33:32', '2023-07-08 11:33:32'),
(3, 'AA03', 'Perilaku', 40, 65, 35, '2023-07-08 11:33:32', '2023-07-08 11:33:32');

-- --------------------------------------------------------

--
-- Table structure for table `data_kandidat`
--

CREATE TABLE `data_kandidat` (
  `id` int(11) UNSIGNED NOT NULL,
  `id_nama_kandidat` int(11) UNSIGNED NOT NULL,
  `i1` int(11) NOT NULL,
  `i2` int(11) NOT NULL,
  `i3` int(11) NOT NULL,
  `i4` int(11) NOT NULL,
  `i5` int(11) NOT NULL,
  `i6` int(11) NOT NULL,
  `i7` int(11) NOT NULL,
  `i8` int(11) NOT NULL,
  `i9` int(11) NOT NULL,
  `i10` int(11) NOT NULL,
  `s1` int(11) NOT NULL,
  `s2` int(11) NOT NULL,
  `s3` int(11) NOT NULL,
  `s4` int(11) NOT NULL,
  `s5` int(11) NOT NULL,
  `s6` int(11) NOT NULL,
  `p1` int(11) NOT NULL,
  `p2` int(11) NOT NULL,
  `p3` int(11) NOT NULL,
  `p4` int(11) NOT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `data_kandidat`
--

INSERT INTO `data_kandidat` (`id`, `id_nama_kandidat`, `i1`, `i2`, `i3`, `i4`, `i5`, `i6`, `i7`, `i8`, `i9`, `i10`, `s1`, `s2`, `s3`, `s4`, `s5`, `s6`, `p1`, `p2`, `p3`, `p4`, `created_at`, `updated_at`) VALUES
(2, 1, 3, 5, 4, 3, 4, 4, 3, 5, 4, 3, 1, 5, 5, 5, 5, 2, 3, 3, 4, 5, '2023-07-08 16:53:16', '2023-07-08 21:52:52'),
(3, 2, 2, 4, 3, 3, 2, 2, 4, 3, 2, 3, 3, 4, 3, 1, 3, 1, 4, 4, 4, 4, '2023-07-08 20:06:05', '2023-07-08 21:54:06'),
(4, 3, 3, 3, 3, 1, 2, 5, 3, 2, 5, 4, 4, 5, 4, 3, 5, 3, 4, 3, 3, 5, '2023-07-08 20:43:28', '2023-07-08 21:55:23'),
(5, 4, 3, 4, 3, 3, 2, 3, 4, 2, 4, 4, 4, 5, 5, 1, 4, 1, 4, 3, 4, 4, '2023-07-08 21:56:43', '2023-07-08 21:56:43'),
(6, 5, 5, 3, 2, 4, 2, 2, 4, 2, 3, 4, 2, 3, 3, 3, 4, 2, 3, 4, 5, 3, '2023-07-08 21:57:44', '2023-07-08 21:57:44'),
(7, 6, 4, 4, 3, 3, 4, 3, 2, 3, 3, 2, 4, 2, 2, 4, 5, 2, 4, 5, 5, 2, '2023-07-08 21:59:40', '2023-07-08 21:59:40');

-- --------------------------------------------------------

--
-- Table structure for table `faktor_penilaian`
--

CREATE TABLE `faktor_penilaian` (
  `id` int(11) UNSIGNED NOT NULL,
  `id_aspek` int(11) UNSIGNED NOT NULL,
  `nama_kriteria` varchar(50) NOT NULL,
  `faktor` varchar(100) NOT NULL,
  `nilai` int(11) NOT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `faktor_penilaian`
--

INSERT INTO `faktor_penilaian` (`id`, `id_aspek`, `nama_kriteria`, `faktor`, `nilai`, `created_at`, `updated_at`) VALUES
(1, 1, 'Common Sense', 'Secondary Factor', 3, '2023-07-08 11:44:16', '2023-07-08 11:45:03'),
(2, 1, 'Verbalisasi Ide', 'Secondary Factor', 3, '2023-07-08 11:44:16', '2023-07-08 11:44:16'),
(3, 1, 'Sistematika Berpikir', 'Core Factor', 4, '2023-07-08 11:44:16', '2023-07-08 11:44:16'),
(4, 1, 'Penalaran dan Solusi Real', 'Core Factor', 4, '2023-07-08 11:44:16', '2023-07-08 11:44:16'),
(5, 1, 'Konsentrasi', 'Secondary Factor', 3, '2023-07-08 11:44:16', '2023-07-08 11:44:16'),
(6, 1, 'Logika Praktis', 'Core Factor', 4, '2023-07-08 11:44:16', '2023-07-08 11:44:16'),
(7, 1, 'Fleksibilitas Berpikir', 'Core Factor', 4, '2023-07-08 11:44:16', '2023-07-08 11:44:16'),
(8, 1, 'Imajinasi Kreatif', 'Core Factor', 5, '2023-07-08 11:44:16', '2023-07-08 11:44:16'),
(9, 1, 'Antisipasi', 'Secondary Factor', 3, '2023-07-08 11:44:16', '2023-07-08 11:44:16'),
(10, 1, 'Potensi Kecerdasan', 'Core Factor', 4, '2023-07-08 11:44:16', '2023-07-08 11:44:16'),
(11, 2, 'Energi Psikis', 'Secondary Factor', 3, '2023-07-08 11:44:16', '2023-07-08 11:44:16'),
(12, 2, 'Ketelitian dan tanggung jawab', 'Core Factor', 4, '2023-07-08 11:44:16', '2023-07-08 11:44:16'),
(13, 2, 'Kehati-hatian', 'Secondary Factor', 2, '2023-07-08 11:44:16', '2023-07-08 11:44:16'),
(14, 2, 'Pengendalian Perasaan', 'Secondary Factor', 3, '2023-07-08 11:44:16', '2023-07-08 11:44:16'),
(15, 2, 'Dorongan Berprestasi', 'Secondary Factor', 3, '2023-07-08 11:44:16', '2023-07-08 11:44:16'),
(16, 2, 'Vitalitas dan Perencanaan', 'Core Factor', 5, '2023-07-08 11:44:16', '2023-07-08 11:44:16'),
(17, 3, 'Dominance (Kekuasaan)', 'Secondary Factor', 3, '2023-07-08 11:44:16', '2023-07-08 11:44:16'),
(18, 3, 'Influences (Pengaruh)', 'Secondary Factor', 3, '2023-07-08 11:44:16', '2023-07-08 11:44:16'),
(19, 3, 'Steadiness (Keteguhan Hati)', 'Core Factor', 4, '2023-07-08 11:44:16', '2023-07-08 11:44:16'),
(20, 3, 'Compliance (Pemenuhan)', 'Core Factor', 5, '2023-07-08 11:44:16', '2023-07-08 11:44:16');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `version` varchar(255) NOT NULL,
  `class` varchar(255) NOT NULL,
  `group` varchar(255) NOT NULL,
  `namespace` varchar(255) NOT NULL,
  `time` int(11) NOT NULL,
  `batch` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `version`, `class`, `group`, `namespace`, `time`, `batch`) VALUES
(51, '2023-06-23-160450', 'App\\Database\\Migrations\\Users', 'default', 'App', 1688790812, 1),
(52, '2023-06-24-034552', 'App\\Database\\Migrations\\Aspek', 'default', 'App', 1688790812, 1),
(53, '2023-06-24-051921', 'App\\Database\\Migrations\\FaktorPenilaian', 'default', 'App', 1688790812, 1),
(54, '2023-06-24-075752', 'App\\Database\\Migrations\\NamaKandidat', 'default', 'App', 1688790812, 1),
(55, '2023-06-24-121115', 'App\\Database\\Migrations\\TabelPembobotan', 'default', 'App', 1688790812, 1),
(56, '2023-06-25-023210', 'App\\Database\\Migrations\\DataKandidat', 'default', 'App', 1688790812, 1),
(57, '2023-06-27-082615', 'App\\Database\\Migrations\\NilaiGap', 'default', 'App', 1688790812, 1),
(58, '2023-07-02-031048', 'App\\Database\\Migrations\\PembobotanGap', 'default', 'App', 1688790812, 1),
(59, '2023-07-03-130623', 'App\\Database\\Migrations\\NilaiTotal', 'default', 'App', 1688790812, 1),
(60, '2023-07-08-090148', 'App\\Database\\Migrations\\Perhitungan', 'default', 'App', 1688808810, 2);

-- --------------------------------------------------------

--
-- Table structure for table `nama_kandidat`
--

CREATE TABLE `nama_kandidat` (
  `id` int(11) UNSIGNED NOT NULL,
  `kode_pendaftar` varchar(50) NOT NULL,
  `nama_pendaftar` varchar(100) NOT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `nama_kandidat`
--

INSERT INTO `nama_kandidat` (`id`, `kode_pendaftar`, `nama_pendaftar`, `created_at`, `updated_at`) VALUES
(1, 'NK01', 'Nabila', '2023-07-08 11:33:32', '2023-07-08 11:33:32'),
(2, 'NK02', 'Sarah', '2023-07-08 11:33:32', '2023-07-08 11:33:32'),
(3, 'NK03', 'Lisna', '2023-07-08 13:18:58', '2023-07-08 13:18:58'),
(4, 'NK04', 'Mawan', '2023-07-08 13:24:01', '2023-07-08 13:24:01'),
(5, 'NK05', 'Fares', '2023-07-08 16:38:15', '2023-07-08 16:38:15'),
(6, 'NK06', 'Atin', '2023-07-08 21:58:26', '2023-07-08 21:58:26');

-- --------------------------------------------------------

--
-- Table structure for table `nilai_gap`
--

CREATE TABLE `nilai_gap` (
  `id` int(11) UNSIGNED NOT NULL,
  `id_nama_kandidat` int(11) UNSIGNED NOT NULL,
  `i1` int(11) NOT NULL,
  `i2` int(11) NOT NULL,
  `i3` int(11) NOT NULL,
  `i4` int(11) NOT NULL,
  `i5` int(11) NOT NULL,
  `i6` int(11) NOT NULL,
  `i7` int(11) NOT NULL,
  `i8` int(11) NOT NULL,
  `i9` int(11) NOT NULL,
  `i10` int(11) NOT NULL,
  `s1` int(11) NOT NULL,
  `s2` int(11) NOT NULL,
  `s3` int(11) NOT NULL,
  `s4` int(11) NOT NULL,
  `s5` int(11) NOT NULL,
  `s6` int(11) NOT NULL,
  `p1` int(11) NOT NULL,
  `p2` int(11) NOT NULL,
  `p3` int(11) NOT NULL,
  `p4` int(11) NOT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `nilai_gap`
--

INSERT INTO `nilai_gap` (`id`, `id_nama_kandidat`, `i1`, `i2`, `i3`, `i4`, `i5`, `i6`, `i7`, `i8`, `i9`, `i10`, `s1`, `s2`, `s3`, `s4`, `s5`, `s6`, `p1`, `p2`, `p3`, `p4`, `created_at`, `updated_at`) VALUES
(2, 1, 0, 2, 0, -1, 1, 0, -1, 0, 1, -1, -2, 1, 3, 2, 2, -3, 0, 0, 0, 0, '2023-07-08 16:53:16', '2023-07-08 21:52:52'),
(3, 2, -1, 1, -1, -1, -1, -2, 0, -2, -1, -1, 0, 0, 1, -2, 0, -4, 1, 1, 0, -1, '2023-07-08 20:06:05', '2023-07-08 21:54:06'),
(4, 3, 0, 0, -1, -3, -1, 1, -1, -3, 2, 0, 1, 1, 2, 0, 2, -2, 1, 0, -1, 0, '2023-07-08 20:43:28', '2023-07-08 21:55:23'),
(5, 4, 0, 1, -1, -1, -1, -1, 0, -3, 1, 0, 1, 1, 3, -2, 1, -4, 1, 0, 0, -1, '2023-07-08 21:56:43', '2023-07-08 21:56:43'),
(6, 5, 2, 0, -2, 0, -1, -2, 0, -3, 0, 0, -1, -1, 1, 0, 1, -3, 0, 1, 1, -2, '2023-07-08 21:57:44', '2023-07-08 21:57:44'),
(7, 6, 1, 1, -1, -1, 1, -1, -2, -2, 0, -2, 1, -2, 0, 1, 2, -3, 1, 2, 1, -3, '2023-07-08 21:59:40', '2023-07-08 21:59:40');

-- --------------------------------------------------------

--
-- Table structure for table `nilai_total`
--

CREATE TABLE `nilai_total` (
  `id` int(11) UNSIGNED NOT NULL,
  `id_nama_kandidat` int(11) UNSIGNED NOT NULL,
  `core_factor_i` float NOT NULL,
  `secondary_factor_i` float NOT NULL,
  `nilai_total_i` float NOT NULL,
  `core_factor_s` float NOT NULL,
  `secondary_factor_s` float NOT NULL,
  `nilai_total_s` float NOT NULL,
  `core_factor_p` float NOT NULL,
  `secondary_factor_p` float NOT NULL,
  `nilai_total_p` float NOT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `nilai_total`
--

INSERT INTO `nilai_total` (`id`, `id_nama_kandidat`, `core_factor_i`, `secondary_factor_i`, `nilai_total_i`, `core_factor_s`, `secondary_factor_s`, `nilai_total_s`, `core_factor_p`, `secondary_factor_p`, `nilai_total_p`, `created_at`, `updated_at`) VALUES
(2, 1, 4.5, 4.375, 4.45, 3.25, 3.125, 3.20625, 5, 5, 5, '2023-07-08 16:53:16', '2023-07-08 21:52:52'),
(3, 2, 3.83333, 4.125, 3.95, 3, 4.375, 3.48125, 4.5, 4.5, 4.5, '2023-07-08 20:06:05', '2023-07-08 21:54:06'),
(4, 3, 3.58333, 4.375, 3.9, 3.75, 4.125, 3.88125, 4.5, 4.75, 4.5875, '2023-07-08 20:43:28', '2023-07-08 21:55:23'),
(5, 4, 4, 4.5, 4.2, 2.75, 3.625, 3.05625, 4.5, 4.75, 4.5875, '2023-07-08 21:56:43', '2023-07-08 21:56:43'),
(6, 5, 3.83333, 4.375, 4.05, 3, 4.5, 3.525, 3.75, 4.75, 4.1, '2023-07-08 21:57:44', '2023-07-08 21:57:44'),
(7, 6, 3.5, 4.625, 3.95, 2.5, 4.375, 3.15625, 3.25, 4, 3.5125, '2023-07-08 21:59:40', '2023-07-08 21:59:40');

-- --------------------------------------------------------

--
-- Table structure for table `pembobotan_gap`
--

CREATE TABLE `pembobotan_gap` (
  `id` int(11) UNSIGNED NOT NULL,
  `id_nama_kandidat` int(11) UNSIGNED NOT NULL,
  `i1` float NOT NULL,
  `i2` float NOT NULL,
  `i3` float NOT NULL,
  `i4` float NOT NULL,
  `i5` float NOT NULL,
  `i6` float NOT NULL,
  `i7` float NOT NULL,
  `i8` float NOT NULL,
  `i9` float NOT NULL,
  `i10` float NOT NULL,
  `s1` float NOT NULL,
  `s2` float NOT NULL,
  `s3` float NOT NULL,
  `s4` float NOT NULL,
  `s5` float NOT NULL,
  `s6` float NOT NULL,
  `p1` float NOT NULL,
  `p2` float NOT NULL,
  `p3` float NOT NULL,
  `p4` float NOT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `pembobotan_gap`
--

INSERT INTO `pembobotan_gap` (`id`, `id_nama_kandidat`, `i1`, `i2`, `i3`, `i4`, `i5`, `i6`, `i7`, `i8`, `i9`, `i10`, `s1`, `s2`, `s3`, `s4`, `s5`, `s6`, `p1`, `p2`, `p3`, `p4`, `created_at`, `updated_at`) VALUES
(2, 1, 5, 3.5, 5, 4, 4.5, 5, 4, 5, 4.5, 4, 3, 4.5, 2.5, 3.5, 3.5, 2, 5, 5, 5, 5, '2023-07-08 16:53:16', '2023-07-08 21:52:52'),
(3, 2, 4, 4.5, 4, 4, 4, 3, 5, 3, 4, 4, 5, 5, 4.5, 3, 5, 1, 4.5, 4.5, 5, 4, '2023-07-08 20:06:05', '2023-07-08 21:54:06'),
(4, 3, 5, 5, 4, 2, 4, 4.5, 4, 2, 3.5, 5, 4.5, 4.5, 3.5, 5, 3.5, 3, 4.5, 5, 4, 5, '2023-07-08 20:43:28', '2023-07-08 21:55:23'),
(5, 4, 5, 4.5, 4, 4, 4, 4, 5, 2, 4.5, 5, 4.5, 4.5, 2.5, 3, 4.5, 1, 4.5, 5, 5, 4, '2023-07-08 21:56:43', '2023-07-08 21:56:43'),
(6, 5, 3.5, 5, 3, 5, 4, 3, 5, 2, 5, 5, 4, 4, 4.5, 5, 4.5, 2, 5, 4.5, 4.5, 3, '2023-07-08 21:57:44', '2023-07-08 21:57:44'),
(7, 6, 4.5, 4.5, 4, 4, 4.5, 4, 3, 3, 5, 3, 4.5, 3, 5, 4.5, 3.5, 2, 4.5, 3.5, 4.5, 2, '2023-07-08 21:59:40', '2023-07-08 21:59:40');

-- --------------------------------------------------------

--
-- Table structure for table `perhitungan`
--

CREATE TABLE `perhitungan` (
  `id` int(11) UNSIGNED NOT NULL,
  `id_nama_kandidat` int(11) UNSIGNED NOT NULL,
  `nilai_total` float NOT NULL,
  `rank` float NOT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `perhitungan`
--

INSERT INTO `perhitungan` (`id`, `id_nama_kandidat`, `nilai_total`, `rank`, `created_at`, `updated_at`) VALUES
(5, 1, 4.29688, 1, '2023-07-08 16:53:16', '2023-07-08 21:52:52'),
(6, 2, 4.02938, 1, '2023-07-08 20:06:05', '2023-07-08 21:54:06'),
(7, 3, 4.16937, 1, '2023-07-08 20:43:28', '2023-07-08 21:55:23'),
(8, 4, 4.01188, 1, '2023-07-08 21:56:43', '2023-07-08 21:56:43'),
(9, 5, 3.9125, 1, '2023-07-08 21:57:44', '2023-07-08 21:57:44'),
(10, 6, 3.53688, 1, '2023-07-08 21:59:40', '2023-07-08 21:59:40');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(11) NOT NULL,
  `role` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `role`) VALUES
(1, 'Super Admin'),
(2, 'Administrator'),
(3, 'Kasir');

-- --------------------------------------------------------

--
-- Table structure for table `tabel_pembobotan`
--

CREATE TABLE `tabel_pembobotan` (
  `id` int(11) UNSIGNED NOT NULL,
  `selisih` tinyint(3) NOT NULL,
  `bobot` float NOT NULL,
  `keterangan` varchar(100) NOT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `tabel_pembobotan`
--

INSERT INTO `tabel_pembobotan` (`id`, `selisih`, `bobot`, `keterangan`, `created_at`, `updated_at`) VALUES
(1, 0, 5, 'Tidak ada selisih (kompetensi sesuai dgn yg dibutuhkan)', '2023-07-08 16:41:57', '2023-07-08 16:41:57'),
(2, 1, 4.5, 'Kompetensi individu kelebihan 1 tingkat', '2023-07-08 16:41:57', '2023-07-08 16:41:57'),
(3, -1, 4, 'Kompetensi individu kekurangan 1 tingkat', '2023-07-08 16:41:57', '2023-07-08 16:41:57'),
(4, 2, 3.5, 'Kompetensi individu kelebihan 2 tingkat', '2023-07-08 16:41:57', '2023-07-08 16:41:57'),
(5, -2, 3, 'Kompetensi individu kekurangan 2 tingkat', '2023-07-08 16:41:57', '2023-07-08 16:41:57'),
(6, 3, 2.5, 'Kompetensi individu  kelebihan 3 tingkat', '2023-07-08 16:41:57', '2023-07-08 16:41:57'),
(7, -3, 2, 'Kompetensi individu  kekurangan 3 tingkat', '2023-07-08 16:41:57', '2023-07-08 16:41:57'),
(8, 4, 1.5, 'Kompetensi individu kelebihan 4 tingkat', '2023-07-08 16:41:57', '2023-07-08 16:41:57'),
(9, -4, 1, 'Kompetensi individu kekurangan 4 tingkat', '2023-07-08 16:41:57', '2023-07-08 16:41:57');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) UNSIGNED NOT NULL,
  `email` varchar(50) NOT NULL,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `alamat` varchar(255) DEFAULT NULL,
  `avatar` varchar(255) NOT NULL DEFAULT 'avatar.jpg',
  `status` enum('aktif','non-aktif') NOT NULL DEFAULT 'aktif',
  `role_id` int(11) NOT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `username`, `password`, `nama`, `alamat`, `avatar`, `status`, `role_id`, `created_at`, `updated_at`) VALUES
(1, 'superadmin@gmail.com', 'superadmin123', '$2y$10$BQ1cL.RTAH/m1eFaCQYvB.YuvgLyh8Om2n1eJsMjyi5nTGrStfQIu', 'Super Admin', 'Cibinong, Bogor', 'avatar.jpg', 'aktif', 1, '2023-07-08 11:33:32', '2023-07-08 11:33:32'),
(2, 'admin@gmail.com', 'admin', '$2y$10$UBLiIVuWyvAqSeFRFscTSefTDRQ0fRRnQLCo08WRQ90jMvLqzZrp.', 'Admin', 'Ciriung, Bogor', 'avatar.jpg', 'aktif', 2, '2023-07-08 11:33:32', '2023-07-08 11:33:32'),
(3, 'kasir@gmail.com', 'kasir', '$2y$10$d13T8dzyuNCI.mb6TwcJQ.Z9WUdTJejyIeTwmOtiwMsx7889f6rPi', 'Kasir', 'Cilodong, Depok', 'avatar.jpg', 'aktif', 3, '2023-07-08 11:33:32', '2023-07-08 11:33:32');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `aspek`
--
ALTER TABLE `aspek`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `data_kandidat`
--
ALTER TABLE `data_kandidat`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_nama_kandidat` (`id_nama_kandidat`);

--
-- Indexes for table `faktor_penilaian`
--
ALTER TABLE `faktor_penilaian`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nama_kriteria` (`nama_kriteria`),
  ADD KEY `id_aspek` (`id_aspek`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `nama_kandidat`
--
ALTER TABLE `nama_kandidat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `nilai_gap`
--
ALTER TABLE `nilai_gap`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_nama_kandidat` (`id_nama_kandidat`);

--
-- Indexes for table `nilai_total`
--
ALTER TABLE `nilai_total`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_nama_kandidat` (`id_nama_kandidat`);

--
-- Indexes for table `pembobotan_gap`
--
ALTER TABLE `pembobotan_gap`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_nama_kandidat` (`id_nama_kandidat`);

--
-- Indexes for table `perhitungan`
--
ALTER TABLE `perhitungan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_nama_kandidat` (`id_nama_kandidat`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tabel_pembobotan`
--
ALTER TABLE `tabel_pembobotan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email_username` (`email`,`username`),
  ADD KEY `users_role_id_foreign` (`role_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `aspek`
--
ALTER TABLE `aspek`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `data_kandidat`
--
ALTER TABLE `data_kandidat`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `faktor_penilaian`
--
ALTER TABLE `faktor_penilaian`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT for table `nama_kandidat`
--
ALTER TABLE `nama_kandidat`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `nilai_gap`
--
ALTER TABLE `nilai_gap`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `nilai_total`
--
ALTER TABLE `nilai_total`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `pembobotan_gap`
--
ALTER TABLE `pembobotan_gap`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `perhitungan`
--
ALTER TABLE `perhitungan`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tabel_pembobotan`
--
ALTER TABLE `tabel_pembobotan`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `data_kandidat`
--
ALTER TABLE `data_kandidat`
  ADD CONSTRAINT `data_kandidat_id_nama_kandidat_foreign` FOREIGN KEY (`id_nama_kandidat`) REFERENCES `nama_kandidat` (`id`) ON UPDATE CASCADE;

--
-- Constraints for table `faktor_penilaian`
--
ALTER TABLE `faktor_penilaian`
  ADD CONSTRAINT `faktor_penilaian_id_aspek_foreign` FOREIGN KEY (`id_aspek`) REFERENCES `aspek` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `nilai_gap`
--
ALTER TABLE `nilai_gap`
  ADD CONSTRAINT `nilai_gap_id_nama_kandidat_foreign` FOREIGN KEY (`id_nama_kandidat`) REFERENCES `nama_kandidat` (`id`) ON UPDATE CASCADE;

--
-- Constraints for table `nilai_total`
--
ALTER TABLE `nilai_total`
  ADD CONSTRAINT `nilai_total_id_nama_kandidat_foreign` FOREIGN KEY (`id_nama_kandidat`) REFERENCES `nama_kandidat` (`id`) ON UPDATE CASCADE;

--
-- Constraints for table `pembobotan_gap`
--
ALTER TABLE `pembobotan_gap`
  ADD CONSTRAINT `pembobotan_gap_id_nama_kandidat_foreign` FOREIGN KEY (`id_nama_kandidat`) REFERENCES `nama_kandidat` (`id`) ON UPDATE CASCADE;

--
-- Constraints for table `perhitungan`
--
ALTER TABLE `perhitungan`
  ADD CONSTRAINT `perhitungan_id_nama_kandidat_foreign` FOREIGN KEY (`id_nama_kandidat`) REFERENCES `nama_kandidat` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
