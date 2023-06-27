-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 27, 2023 at 09:55 AM
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
(1, 'AA01', 'Kecerdasan', 30, 60, 40, '2023-06-24 18:47:32', '2023-06-24 18:47:32'),
(2, 'AA02', 'Sikap Kerja', 30, 65, 35, '2023-06-24 18:47:32', '2023-06-24 18:47:32'),
(3, 'AA03', 'Perilaku', 40, 65, 35, '2023-06-24 18:56:07', '2023-06-24 18:56:07');

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
(1, 1, 'Common Sense', 'Secondary Factor', 3, '2023-06-24 18:56:32', '2023-06-25 20:27:21'),
(2, 1, 'Verbalisasi Ide', 'Secondary Factor', 3, '2023-06-24 18:56:32', '2023-06-25 20:27:31'),
(3, 1, 'Sistematika Berpikir', 'Core Factor', 4, '2023-06-24 18:56:32', '2023-06-25 20:27:41'),
(4, 1, 'Penalaran dan Solusi Real', 'Core Factor', 4, '2023-06-24 18:56:32', '2023-06-25 20:28:02'),
(5, 1, 'Konsentrasi', 'Secondary Factor', 3, '2023-06-24 18:56:32', '2023-06-25 20:28:15'),
(6, 1, 'Logika Praktis', 'Core Factor', 4, '2023-06-24 18:56:32', '2023-06-25 20:28:25'),
(7, 1, 'Fleksibilitas Berpikir', 'Core Factor', 4, '2023-06-24 18:56:32', '2023-06-25 20:28:37'),
(8, 1, 'Imajinasi Kreatif', 'Core Factor', 5, '2023-06-24 18:56:32', '2023-06-25 20:28:47'),
(9, 1, 'Antisipasi', 'Secondary Factor', 3, '2023-06-24 18:56:32', '2023-06-25 20:29:06'),
(10, 1, 'Potensi Kecerdasan', 'Core Factor', 4, '2023-06-24 18:56:32', '2023-06-25 20:29:16'),
(11, 2, 'Energi Psikis', 'Secondary Factor', 3, '2023-06-24 18:56:32', '2023-06-25 20:29:36'),
(12, 2, 'Ketelitian dan tanggung jawab', 'Core Factor', 4, '2023-06-24 18:56:32', '2023-06-25 20:29:49'),
(13, 2, 'Kehati-hatian', 'Secondary Factor', 2, '2023-06-24 18:56:32', '2023-06-25 20:30:35'),
(14, 2, 'Pengendalian Perasaan', 'Secondary Factor', 3, '2023-06-24 18:56:32', '2023-06-25 20:30:49'),
(15, 2, 'Dorongan Berprestasi', 'Secondary Factor', 3, '2023-06-24 18:56:32', '2023-06-25 20:31:44'),
(16, 2, 'Vitalitas dan Perencanaan', 'Core Factor', 5, '2023-06-24 18:56:32', '2023-06-25 20:32:10'),
(17, 3, 'Dominance (Kekuasaan)', 'Secondary Factor', 3, '2023-06-24 18:56:32', '2023-06-25 20:32:24'),
(18, 3, 'Influences (Pengaruh)', 'Secondary Factor', 3, '2023-06-24 18:56:32', '2023-06-25 20:31:27'),
(19, 3, 'Steadiness (Keteguhan Hati)', 'Core Factor', 4, '2023-06-24 18:56:32', '2023-06-25 20:31:15'),
(20, 3, 'Compliance (Pemenuhan)', 'Core Factor', 5, '2023-06-24 18:56:32', '2023-06-25 20:31:04'),
(21, 2, 'dsfdfraeaart', 'Secondary Factor', 30, '2023-06-24 20:24:14', '2023-06-25 20:30:06'),
(22, 3, 'acdaas', 'Secondary Factor', 2, '2023-06-24 20:50:52', '2023-06-24 20:50:52'),
(23, 3, 'aaaaaa', 'Secondary Factor', 50, '2023-06-25 10:26:46', '2023-06-25 10:27:04');

-- --------------------------------------------------------

--
-- Table structure for table `kecerdasan`
--

CREATE TABLE `kecerdasan` (
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
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `kecerdasan`
--

INSERT INTO `kecerdasan` (`id`, `id_nama_kandidat`, `i1`, `i2`, `i3`, `i4`, `i5`, `i6`, `i7`, `i8`, `i9`, `i10`, `created_at`, `updated_at`) VALUES
(1, 1, 5, 3, 4, 4, 2, 3, 4, 2, 5, 5, '2023-06-25 12:36:35', '2023-06-25 12:36:35'),
(2, 2, 1, 3, 5, 4, 4, 3, 4, 2, 4, 3, '2023-06-25 13:50:19', '2023-06-25 13:50:19'),
(5, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, '2023-06-25 13:55:22', '2023-06-25 20:22:24'),
(6, 4, 2, 4, 1, 4, 3, 3, 4, 2, 1, 5, '2023-06-25 20:23:17', '2023-06-25 20:23:17');

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
(5, '2023-06-23-160450', 'App\\Database\\Migrations\\Users', 'default', 'App', 1687607252, 1),
(6, '2023-06-24-034552', 'App\\Database\\Migrations\\Aspek', 'default', 'App', 1687607252, 1),
(7, '2023-06-24-051921', 'App\\Database\\Migrations\\FaktorPenilaian', 'default', 'App', 1687607252, 1),
(8, '2023-06-24-075752', 'App\\Database\\Migrations\\NamaKandidat', 'default', 'App', 1687607252, 1),
(9, '2023-06-24-121115', 'App\\Database\\Migrations\\TabelPembobotan', 'default', 'App', 1687609017, 2),
(10, '2023-06-25-023210', 'App\\Database\\Migrations\\DataKandidat', 'default', 'App', 1687667858, 3);

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
(1, 'NK01', 'Nabila', '2023-06-24 18:47:32', '2023-06-24 18:47:32'),
(2, 'NK02', 'Sarah', '2023-06-24 18:47:32', '2023-06-24 18:47:32'),
(3, 'NK03', 'Lisna', '2023-06-24 18:57:04', '2023-06-24 18:57:04'),
(4, 'NK04', 'Mawan', '2023-06-25 20:22:51', '2023-06-25 20:22:51');

-- --------------------------------------------------------

--
-- Table structure for table `perilaku`
--

CREATE TABLE `perilaku` (
  `id` int(11) UNSIGNED NOT NULL,
  `id_nama_kandidat` int(11) UNSIGNED NOT NULL,
  `p1` int(11) NOT NULL,
  `p2` int(11) NOT NULL,
  `p3` int(11) NOT NULL,
  `p4` int(11) NOT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `perilaku`
--

INSERT INTO `perilaku` (`id`, `id_nama_kandidat`, `p1`, `p2`, `p3`, `p4`, `created_at`, `updated_at`) VALUES
(1, 1, 3, 4, 4, 4, '2023-06-25 21:44:30', '2023-06-25 21:44:30'),
(2, 2, 3, 1, 3, 5, '2023-06-25 21:44:45', '2023-06-25 21:44:45'),
(4, 3, 3, 2, 2, 4, '2023-06-25 21:48:11', '2023-06-25 21:48:11'),
(5, 4, 3, 3, 1, 4, '2023-06-25 21:48:42', '2023-06-25 21:48:42');

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
-- Table structure for table `sikap_kerja`
--

CREATE TABLE `sikap_kerja` (
  `id` int(11) UNSIGNED NOT NULL,
  `id_nama_kandidat` int(11) UNSIGNED NOT NULL,
  `s1` int(11) NOT NULL,
  `s2` int(11) NOT NULL,
  `s3` int(11) NOT NULL,
  `s4` int(11) NOT NULL,
  `s5` int(11) NOT NULL,
  `s6` int(11) NOT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `sikap_kerja`
--

INSERT INTO `sikap_kerja` (`id`, `id_nama_kandidat`, `s1`, `s2`, `s3`, `s4`, `s5`, `s6`, `created_at`, `updated_at`) VALUES
(1, 1, 3, 2, 4, 4, 5, 2, '2023-06-25 20:40:50', '2023-06-25 20:40:50'),
(2, 2, 4, 4, 4, 4, 4, 4, '2023-06-25 20:41:30', '2023-06-25 21:05:48'),
(3, 3, 3, 1, 2, 3, 3, 5, '2023-06-25 21:06:07', '2023-06-25 21:06:07'),
(5, 4, 4, 2, 5, 4, 3, 3, '2023-06-25 21:49:35', '2023-06-25 21:49:35');

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
(1, 0, 5, 'Tidak ada selisih (kompetensi sesuai dgn yg dibutuhkan)', '2023-06-24 19:17:16', '2023-06-24 19:17:16'),
(2, 1, 4.5, 'Kompetensi individu kelebihan 1 tingkat', '2023-06-24 19:17:16', '2023-06-24 19:17:16'),
(3, -1, 4, 'Kompetensi individu kekurangan 1 tingkat', '2023-06-24 19:17:16', '2023-06-24 19:17:16'),
(4, 2, 3.5, 'Kompetensi individu kelebihan 2 tingkat', '2023-06-24 19:17:16', '2023-06-24 19:17:16'),
(5, -2, 3, 'Kompetensi individu kekurangan 2 tingkat', '2023-06-24 19:17:16', '2023-06-24 19:17:16'),
(6, 3, 2.5, 'Kompetensi individu  kelebihan 3 tingkat', '2023-06-24 19:17:16', '2023-06-24 19:17:16'),
(7, -3, 2, 'Kompetensi individu  kekurangan 3 tingkat', '2023-06-24 19:17:16', '2023-06-24 19:17:16'),
(8, 4, 1.5, 'Kompetensi individu kelebihan 4 tingkat', '2023-06-24 19:17:16', '2023-06-24 19:17:16'),
(9, -4, 1, 'Kompetensi individu kekurangan 4 tingkat', '2023-06-24 19:17:16', '2023-06-24 19:17:16');

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
(1, 'superadmin@gmail.com', 'superadmin123', '$2y$10$6vWzdPf.cggfawcL2Ssz5efKuRL8Vrcr/9jKqtbU5ymuLRK05JFL.', 'Super Admin', 'Cibinong, Bogor', 'avatar.jpg', 'aktif', 1, '2023-06-24 18:47:32', '2023-06-24 18:47:32'),
(2, 'admin@gmail.com', 'admin', '$2y$10$8hw3Vebea2ciyl.Nbie7peKsNxMns5CN3xsBcCNDfAsZJIAjZZvri', 'Admin', 'Ciriung, Bogor', 'avatar.jpg', 'aktif', 2, '2023-06-24 18:47:32', '2023-06-24 18:47:32'),
(3, 'kasir@gmail.com', 'kasir', '$2y$10$7mFt.zGLUwZRs9xv89JurOcK.nE7KVNui0tJWRlMUT5baA3UbLRSW', 'Kasir', 'Cilodong, Depok', 'avatar.jpg', 'aktif', 3, '2023-06-24 18:47:32', '2023-06-24 18:47:32');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `aspek`
--
ALTER TABLE `aspek`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `faktor_penilaian`
--
ALTER TABLE `faktor_penilaian`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nama_kriteria` (`nama_kriteria`),
  ADD KEY `id_aspek` (`id_aspek`);

--
-- Indexes for table `kecerdasan`
--
ALTER TABLE `kecerdasan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_nama_kandidat` (`id_nama_kandidat`);

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
-- Indexes for table `perilaku`
--
ALTER TABLE `perilaku`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_nama_kandidat` (`id_nama_kandidat`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sikap_kerja`
--
ALTER TABLE `sikap_kerja`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_nama_kandidat` (`id_nama_kandidat`);

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
-- AUTO_INCREMENT for table `faktor_penilaian`
--
ALTER TABLE `faktor_penilaian`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `kecerdasan`
--
ALTER TABLE `kecerdasan`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `nama_kandidat`
--
ALTER TABLE `nama_kandidat`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `perilaku`
--
ALTER TABLE `perilaku`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `sikap_kerja`
--
ALTER TABLE `sikap_kerja`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

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
-- Constraints for table `faktor_penilaian`
--
ALTER TABLE `faktor_penilaian`
  ADD CONSTRAINT `faktor_penilaian_id_aspek_foreign` FOREIGN KEY (`id_aspek`) REFERENCES `aspek` (`id`) ON UPDATE CASCADE;

--
-- Constraints for table `kecerdasan`
--
ALTER TABLE `kecerdasan`
  ADD CONSTRAINT `kecerdasan_id_nama_kandidat_foreign` FOREIGN KEY (`id_nama_kandidat`) REFERENCES `nama_kandidat` (`id`) ON UPDATE CASCADE;

--
-- Constraints for table `perilaku`
--
ALTER TABLE `perilaku`
  ADD CONSTRAINT `perilaku_id_nama_kandidat_foreign` FOREIGN KEY (`id_nama_kandidat`) REFERENCES `nama_kandidat` (`id`) ON UPDATE CASCADE;

--
-- Constraints for table `sikap_kerja`
--
ALTER TABLE `sikap_kerja`
  ADD CONSTRAINT `sikap_kerja_id_nama_kandidat_foreign` FOREIGN KEY (`id_nama_kandidat`) REFERENCES `nama_kandidat` (`id`) ON UPDATE CASCADE;

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
