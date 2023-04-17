-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 17, 2023 at 05:05 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `spl`
--

-- --------------------------------------------------------

--
-- Table structure for table `auth_activation_attempts`
--

CREATE TABLE `auth_activation_attempts` (
  `id` int(11) UNSIGNED NOT NULL,
  `ip_address` varchar(255) NOT NULL,
  `user_agent` varchar(255) NOT NULL,
  `token` varchar(255) DEFAULT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `auth_groups`
--

CREATE TABLE `auth_groups` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `auth_groups_permissions`
--

CREATE TABLE `auth_groups_permissions` (
  `group_id` int(11) UNSIGNED NOT NULL DEFAULT 0,
  `permission_id` int(11) UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `auth_groups_users`
--

CREATE TABLE `auth_groups_users` (
  `group_id` int(11) UNSIGNED NOT NULL DEFAULT 0,
  `user_id` int(11) UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `auth_logins`
--

CREATE TABLE `auth_logins` (
  `id` int(11) UNSIGNED NOT NULL,
  `ip_address` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `user_id` int(11) UNSIGNED DEFAULT NULL,
  `date` datetime NOT NULL,
  `success` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `auth_logins`
--

INSERT INTO `auth_logins` (`id`, `ip_address`, `email`, `user_id`, `date`, `success`) VALUES
(1, '::1', 'fbiakbr@gmail.com', 2, '2023-04-05 14:00:44', 1),
(2, '::1', 'a', NULL, '2023-04-05 14:24:39', 0),
(3, '::1', 'admin', NULL, '2023-04-05 14:24:51', 0),
(4, '::1', 'fbiakbr@gmail.com', 2, '2023-04-05 14:25:02', 1),
(5, '::1', 'fbiakbr@gmail.com', 2, '2023-04-05 14:37:11', 1),
(6, '::1', 'admin', NULL, '2023-04-05 15:03:49', 0),
(7, '::1', 'fbiakbr@gmail.com', 2, '2023-04-05 15:04:00', 1),
(8, '::1', 'fbiakbr@gmail.com', 2, '2023-04-05 15:04:13', 1),
(9, '::1', 'a', NULL, '2023-04-05 15:29:11', 0),
(10, '::1', 'a', NULL, '2023-04-05 15:30:05', 0),
(11, '::1', 'admin', NULL, '2023-04-05 15:30:13', 0),
(12, '::1', 'fbiakbr@gmail.com', 2, '2023-04-05 15:30:22', 1),
(13, '::1', 'fbiakbr@gmail.com', 2, '2023-04-05 15:31:01', 1),
(14, '::1', 'admin', NULL, '2023-04-05 16:24:30', 0),
(15, '::1', 'fbiakbr@gmail.com', 2, '2023-04-05 16:24:36', 1),
(16, '::1', 'fbiakbr@gmail.com', 2, '2023-04-05 16:29:46', 1),
(17, '::1', 'fbiakbr@gmail.com', 2, '2023-04-05 16:31:36', 1),
(18, '::1', 'a', NULL, '2023-04-05 16:33:33', 0),
(19, '::1', 'fbiakbr@gmail.com', 2, '2023-04-05 16:33:38', 1),
(20, '::1', 'fbiakbr@gmail.com', 2, '2023-04-05 16:34:43', 1),
(21, '::1', 'fbiakbr@gmail.com', 2, '2023-04-05 16:35:53', 1),
(22, '::1', 'fbiakbr@gmail.com', 2, '2023-04-05 16:37:15', 1),
(23, '::1', 'fbiakbr@gmail.com', 2, '2023-04-05 16:37:46', 1),
(24, '::1', 'fbiakbr@gmail.com', 2, '2023-04-05 16:38:20', 1),
(25, '::1', 'fbiakbr@gmail.com', 2, '2023-04-05 16:38:40', 1),
(26, '::1', 'fbiakbr@gmail.com', 2, '2023-04-05 16:46:02', 1),
(27, '::1', 'fbiakbr@gmail.com', 2, '2023-04-05 16:47:09', 1),
(28, '::1', 'fbiakbr@gmail.com', 2, '2023-04-05 16:47:30', 1),
(29, '::1', 'fbiakbr@gmail.com', 2, '2023-04-05 16:47:46', 1),
(30, '::1', 'fbiakbr@gmail.com', 2, '2023-04-05 16:50:43', 1),
(31, '::1', 'fbiakbr@gmail.com', 2, '2023-04-05 16:51:00', 1),
(32, '::1', 'fbiakbr@gmail.com', 2, '2023-04-05 16:51:22', 1),
(33, '127.0.0.1', 'admin', NULL, '2023-04-06 02:15:28', 0),
(34, '127.0.0.1', 'fbiakbr@gmail.com', 2, '2023-04-06 02:15:34', 1),
(35, '127.0.0.1', 'fbiakbr@gmail.com', 2, '2023-04-06 02:46:18', 1),
(36, '127.0.0.1', 'fbiakbr@gmail.com', 2, '2023-04-06 03:29:15', 1),
(37, '127.0.0.1', 'fbiakbr@gmail.com', 2, '2023-04-06 03:30:53', 1),
(38, '127.0.0.1', 'fbiakbr@gmail.com', 2, '2023-04-06 06:33:50', 1),
(39, '127.0.0.1', 'fbiakbr@gmail.com', 2, '2023-04-06 09:21:07', 1),
(40, '127.0.0.1', 'fbiakbr@gmail.com', 2, '2023-04-11 12:53:16', 1),
(41, '127.0.0.1', 'fbiakbr@gmail.com', 2, '2023-04-17 02:29:24', 1),
(42, '127.0.0.1', 'fbiakbr@gmail.com', 2, '2023-04-17 02:35:00', 1);

-- --------------------------------------------------------

--
-- Table structure for table `auth_permissions`
--

CREATE TABLE `auth_permissions` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `auth_reset_attempts`
--

CREATE TABLE `auth_reset_attempts` (
  `id` int(11) UNSIGNED NOT NULL,
  `email` varchar(255) NOT NULL,
  `ip_address` varchar(255) NOT NULL,
  `user_agent` varchar(255) NOT NULL,
  `token` varchar(255) DEFAULT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `auth_tokens`
--

CREATE TABLE `auth_tokens` (
  `id` int(11) UNSIGNED NOT NULL,
  `selector` varchar(255) NOT NULL,
  `hashedValidator` varchar(255) NOT NULL,
  `user_id` int(11) UNSIGNED NOT NULL,
  `expires` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `auth_users_permissions`
--

CREATE TABLE `auth_users_permissions` (
  `user_id` int(11) UNSIGNED NOT NULL DEFAULT 0,
  `permission_id` int(11) UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

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
(1, '2017-11-20-223112', 'Myth\\Auth\\Database\\Migrations\\CreateAuthTables', 'default', 'Myth\\Auth', 1680702386, 1);

-- --------------------------------------------------------

--
-- Table structure for table `pemakaian`
--

CREATE TABLE `pemakaian` (
  `id_pemakaian` int(11) NOT NULL,
  `nis` int(5) NOT NULL,
  `nama_siswa` varchar(50) NOT NULL,
  `kelas` varchar(10) NOT NULL,
  `tanggal` date NOT NULL,
  `jam` time NOT NULL,
  `lab` varchar(20) NOT NULL,
  `no_pc` int(11) NOT NULL,
  `materi_praktek` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pemakaian`
--

INSERT INTO `pemakaian` (`id_pemakaian`, `nis`, `nama_siswa`, `kelas`, `tanggal`, `jam`, `lab`, `no_pc`, `materi_praktek`) VALUES
(40, 6120, 'M KHOIRUL ANAM', 'XI TJKT 2', '2023-04-06', '10:01:26', 'Lab TKJ L6', 1, 'Konfigurasi router'),
(41, 6282, 'AHMAD AZRIL AFIF', 'XI TJKT 1', '2023-04-06', '10:05:51', 'Lab TKJ L6', 1, 'Konfigurasi web server'),
(42, 6284, 'ASSEGAF', 'XI TJKT 1', '2023-04-06', '10:31:30', 'Lab TKJ L6', 12, 'Krimping kabel'),
(43, 6120, 'M KHOIRUL ANAM', 'XI TJKT 2', '2023-04-06', '16:21:40', 'Lab TKJ L6', 1, 'A'),
(44, 6120, 'M KHOIRUL ANAM', 'XI TJKT 2', '2023-04-11', '19:53:38', 'Lab TKJ L6', 1, 'A'),
(45, 6290, 'M FADHIL FERDIANSYAH', 'XI TJKT 1', '2023-04-17', '09:30:14', 'Lab TKJ L6', 1, 'Test');

-- --------------------------------------------------------

--
-- Table structure for table `siswa`
--

CREATE TABLE `siswa` (
  `nis` int(5) NOT NULL,
  `nama_siswa` varchar(50) NOT NULL,
  `kelas` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `siswa`
--

INSERT INTO `siswa` (`nis`, `nama_siswa`, `kelas`) VALUES
(6120, 'M KHOIRUL ANAM', 'XI TJKT 2'),
(6282, 'AHMAD AZRIL AFIF', 'XI TJKT 1'),
(6283, 'ANGGELI WULAN SAFITRI', 'XI TJKT 1'),
(6284, 'ASSEGAF', 'XI TJKT 1'),
(6285, 'DEVI AZIFATUL AZMI', 'XI TJKT 1'),
(6286, 'DINA NOVIANA', 'XI TJKT 1'),
(6288, 'EMA FATIMATUZZAHRO', 'XI TJKT 1'),
(6289, 'FATKHUL MANAN', 'XI TJKT 1'),
(6290, 'M FADHIL FERDIANSYAH', 'XI TJKT 1'),
(6291, 'M. WILDAN ILMI', 'XI TJKT 1'),
(6292, 'M.ANDIKA AL FAIZIN', 'XI TJKT 1'),
(6293, 'M.FIKRI ARIS SETIAWAN', 'XI TJKT 1'),
(6294, 'M.RIZQI ALFATDILLAH', 'XI TJKT 1'),
(6295, 'MAULANA FAJAR RAHMAN SIDIQ', 'XI TJKT 1'),
(6296, 'MOHAMMAD ABDUL HALIM', 'XI TJKT 1'),
(6297, 'MUHAMAD IPNU FAIQ', 'XI TJKT 1'),
(6298, 'MUHAMMAD IQBAL SURYA ADI', 'XI TJKT 1'),
(6299, 'NUR HIDAYAH', 'XI TJKT 1'),
(6300, 'NURUL ROJAFINA', 'XI TJKT 1'),
(6301, 'PANJI SALMAN AL FARISI', 'XI TJKT 1'),
(6302, 'REVA OKTAVIA', 'XI TJKT 1'),
(6303, 'SASKIA RAYA WULAN', 'XI TJKT 1'),
(6304, 'SITI DALILAH MUSTAQIMAH', 'XI TJKT 1'),
(6305, 'SULISTIO NUGROHO', 'XI TJKT 1'),
(6306, 'TRI ISNAINI', 'XI TJKT 1'),
(6307, 'ACHMAD BACHRUL ULUM', 'XI TJKT 2'),
(6309, 'ALDO ALDINO FEBRIAN ADHA', 'XI TJKT 2'),
(6310, 'ARYA AGUNG PRATAMA', 'XI TJKT 2'),
(6311, 'AYU KURNIANINGSIH', 'XI TJKT 2'),
(6312, 'DINA FAZA AMALIA', 'XI TJKT 2'),
(6313, 'ELA SAFANA', 'XI TJKT 2'),
(6314, 'FAREL ALISSANAYA', 'XI TJKT 2'),
(6315, 'FRIZY ANANDA', 'XI TJKT 2'),
(6316, 'ISTIANA RISQI', 'XI TJKT 2'),
(6317, 'M. AUVAL HANA', 'XI TJKT 2'),
(6318, 'M.ALEIF FATIH', 'XI TJKT 2'),
(6319, 'M.ASYRIL MAULA', 'XI TJKT 2'),
(6320, 'M.IBROHIM', 'XI TJKT 2'),
(6321, 'M.TAUFIK HIDAYAT', 'XI TJKT 2'),
(6322, 'MOHAMAD YUDIS ALFAREZI', 'XI TJKT 2'),
(6323, 'MOHAMMAD NURFAHROZI', 'XI TJKT 2'),
(6324, 'MUHAMMAD ARJUNNAJAH', 'XI TJKT 2'),
(6325, 'MUHAMMAD ZAHRIE TIYYAS HABIBIE', 'XI TJKT 2'),
(6326, 'NURJANAH', 'XI TJKT 2'),
(6327, 'PUTRI ANDINI', 'XI TJKT 2'),
(6328, 'RINA WATI', 'XI TJKT 2'),
(6329, 'SAJI TRI WIJOYO', 'XI TJKT 2'),
(6330, 'SEPTIA IKFI TANIA', 'XI TJKT 2'),
(6331, 'TIWI ARINI', 'XI TJKT 2'),
(6332, 'YUSTIFAN ARIF HIDAYATULLAH', 'XI TJKT 2'),
(6335, 'NUNUNG NOVIANI', 'XI TJKT 1'),
(6337, 'MUHAMMAD GHOZALI', 'XI TJKT 2'),
(6340, 'NASRUL ANNAM', 'XI TJKT 1'),
(6342, 'VITA NABILA', 'XI TJKT 2');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) UNSIGNED NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(30) DEFAULT NULL,
  `password_hash` varchar(255) NOT NULL,
  `reset_hash` varchar(255) DEFAULT NULL,
  `reset_at` datetime DEFAULT NULL,
  `reset_expires` datetime DEFAULT NULL,
  `activate_hash` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `status_message` varchar(255) DEFAULT NULL,
  `active` tinyint(1) NOT NULL DEFAULT 0,
  `force_pass_reset` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `username`, `password_hash`, `reset_hash`, `reset_at`, `reset_expires`, `activate_hash`, `status`, `status_message`, `active`, `force_pass_reset`, `created_at`, `updated_at`, `deleted_at`) VALUES
(2, 'fbiakbr@gmail.com', 'admin', '$2y$10$7u4V79suENOPi1ec5gWUu.rVPJqYc7X0jBMLw/sP7EXCtuNhOZiYa', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2023-04-05 14:00:34', '2023-04-05 14:00:34', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `auth_activation_attempts`
--
ALTER TABLE `auth_activation_attempts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `auth_groups`
--
ALTER TABLE `auth_groups`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `auth_groups_permissions`
--
ALTER TABLE `auth_groups_permissions`
  ADD KEY `auth_groups_permissions_permission_id_foreign` (`permission_id`),
  ADD KEY `group_id_permission_id` (`group_id`,`permission_id`);

--
-- Indexes for table `auth_groups_users`
--
ALTER TABLE `auth_groups_users`
  ADD KEY `auth_groups_users_user_id_foreign` (`user_id`),
  ADD KEY `group_id_user_id` (`group_id`,`user_id`);

--
-- Indexes for table `auth_logins`
--
ALTER TABLE `auth_logins`
  ADD PRIMARY KEY (`id`),
  ADD KEY `email` (`email`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `auth_permissions`
--
ALTER TABLE `auth_permissions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `auth_reset_attempts`
--
ALTER TABLE `auth_reset_attempts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `auth_tokens`
--
ALTER TABLE `auth_tokens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `auth_tokens_user_id_foreign` (`user_id`),
  ADD KEY `selector` (`selector`);

--
-- Indexes for table `auth_users_permissions`
--
ALTER TABLE `auth_users_permissions`
  ADD KEY `auth_users_permissions_permission_id_foreign` (`permission_id`),
  ADD KEY `user_id_permission_id` (`user_id`,`permission_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pemakaian`
--
ALTER TABLE `pemakaian`
  ADD PRIMARY KEY (`id_pemakaian`);

--
-- Indexes for table `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`nis`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `auth_activation_attempts`
--
ALTER TABLE `auth_activation_attempts`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `auth_groups`
--
ALTER TABLE `auth_groups`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `auth_logins`
--
ALTER TABLE `auth_logins`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `auth_permissions`
--
ALTER TABLE `auth_permissions`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `auth_reset_attempts`
--
ALTER TABLE `auth_reset_attempts`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `auth_tokens`
--
ALTER TABLE `auth_tokens`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `pemakaian`
--
ALTER TABLE `pemakaian`
  MODIFY `id_pemakaian` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `auth_groups_permissions`
--
ALTER TABLE `auth_groups_permissions`
  ADD CONSTRAINT `auth_groups_permissions_group_id_foreign` FOREIGN KEY (`group_id`) REFERENCES `auth_groups` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `auth_groups_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `auth_permissions` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `auth_groups_users`
--
ALTER TABLE `auth_groups_users`
  ADD CONSTRAINT `auth_groups_users_group_id_foreign` FOREIGN KEY (`group_id`) REFERENCES `auth_groups` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `auth_groups_users_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `auth_tokens`
--
ALTER TABLE `auth_tokens`
  ADD CONSTRAINT `auth_tokens_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `auth_users_permissions`
--
ALTER TABLE `auth_users_permissions`
  ADD CONSTRAINT `auth_users_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `auth_permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `auth_users_permissions_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
