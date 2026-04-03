-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 03, 2026 at 02:10 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db-perpus-2`
--

-- --------------------------------------------------------

--
-- Table structure for table `bukus`
--

CREATE TABLE `bukus` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `judul` varchar(255) NOT NULL,
  `pengarang` varchar(255) NOT NULL,
  `penerbit` varchar(255) NOT NULL,
  `tahun_terbit` varchar(4) NOT NULL,
  `stok` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bukus`
--

INSERT INTO `bukus` (`id`, `judul`, `pengarang`, `penerbit`, `tahun_terbit`, `stok`, `created_at`, `updated_at`) VALUES
(1, 'Pemrograman Web dengan HTML, CSS & JS', 'Budi Raharjo', 'Informatika', '2023', 20, '2026-04-03 05:04:33', '2026-04-03 05:04:33'),
(2, 'Panduan Lengkap Reparasi & Flashing Smartphone', 'Joko Susilo', 'Elex Media', '2021', 15, '2026-04-03 05:04:33', '2026-04-03 05:04:33'),
(3, 'Mastering Audio Mixer & Teori Frekuensi Suara', 'Agus Setiawan', 'Andi Publisher', '2020', 12, '2026-04-03 05:04:33', '2026-04-03 05:04:33'),
(4, 'Kumpulan Rumus Cepat Matematika Terapan', 'Prof. Yohanes Surya', 'Kandel', '2018', 30, '2026-04-03 05:04:33', '2026-04-03 05:04:33'),
(5, 'Filosofi Teras', 'Henry Manampiring', 'Kompas', '2019', 45, '2026-04-03 05:04:33', '2026-04-03 05:04:33'),
(6, 'Atomic Habits (Edisi Terjemahan)', 'James Clear', 'Gramedia', '2020', 50, '2026-04-03 05:04:33', '2026-04-03 05:04:33'),
(7, 'Algoritma dan Struktur Data Tingkat Lanjut', 'Rinaldi Munir', 'Informatika', '2016', 25, '2026-04-03 05:04:33', '2026-04-03 05:04:33'),
(8, 'Dasar-Dasar Jaringan Komputer Modern', 'Iwan Sofana', 'Informatika', '2022', 18, '2026-04-03 05:04:33', '2026-04-03 05:04:33'),
(9, 'Pengantar Pengembangan Diri numquam', 'Icha Nilam Mandasari S.Farm', 'UD Melani Oktaviani Tbk', '2019', 18, '2026-04-03 05:04:33', '2026-04-03 05:04:33'),
(10, 'Pengantar Sains Terapan maiores', 'Gasti Fujiati', 'CV Santoso (Persero) Tbk', '2015', 18, '2026-04-03 05:04:33', '2026-04-03 05:04:33'),
(11, 'Pengantar Bisnis & Ekonomi magni', 'Pranawa Nyoman Ardianto M.Ak', 'PT Simbolon Yolanda', '2021', 27, '2026-04-03 05:04:33', '2026-04-03 05:04:33'),
(12, 'Pengantar Pengembangan Diri perferendis', 'Kasiyah Usada', 'Perum Winarsih Kuswoyo (Persero) Tbk', '2015', 19, '2026-04-03 05:04:33', '2026-04-03 05:04:33'),
(13, 'Pengantar Pengembangan Diri dolores', 'Jaeman Halim', 'PD Maryadi Tbk', '2020', 39, '2026-04-03 05:04:33', '2026-04-03 05:04:33'),
(14, 'Pengantar Teknologi Informasi voluptatem', 'Luwar Kariman Tampubolon M.Ak', 'CV Pradipta (Persero) Tbk', '2020', 22, '2026-04-03 05:04:33', '2026-04-03 05:04:33'),
(15, 'Pengantar Teknologi Informasi assumenda', 'Ratih Safitri', 'PD Haryanto Palastri', '2021', 24, '2026-04-03 05:04:33', '2026-04-03 05:04:33'),
(16, 'Pengantar Teknologi Informasi necessitatibus', 'Banawi Winarno', 'UD Yuliarti (Persero) Tbk', '2017', 12, '2026-04-03 05:04:33', '2026-04-03 05:04:33'),
(17, 'Pengantar Matematika Dasar neque', 'Harimurti Salahudin', 'Perum Permata Mardhiyah (Persero) Tbk', '2016', 17, '2026-04-03 05:04:33', '2026-04-03 05:04:33'),
(18, 'Pengantar Sains Terapan eum', 'Ganda Sihombing', 'Fa Rajata', '2015', 37, '2026-04-03 05:04:33', '2026-04-03 05:04:33'),
(19, 'Pengantar Sains Terapan voluptatem', 'Dian Cindy Winarsih', 'Yayasan Ramadan', '2025', 11, '2026-04-03 05:04:33', '2026-04-03 05:04:33'),
(20, 'Pengantar Pengembangan Diri rerum', 'Martani Wadi Winarno', 'UD Marbun Tbk', '2015', 28, '2026-04-03 05:04:33', '2026-04-03 05:04:33'),
(21, 'Pengantar Teknologi Informasi cupiditate', 'Zahra Febi Lailasari S.Pd', 'CV Sihombing Hidayat', '2019', 30, '2026-04-03 05:04:33', '2026-04-03 05:04:33'),
(22, 'Pengantar Matematika Dasar accusantium', 'Raden Winarno', 'UD Usamah Natsir', '2024', 36, '2026-04-03 05:04:33', '2026-04-03 05:04:33'),
(23, 'Pengantar Matematika Dasar aut', 'Rahmi Astuti', 'PT Maulana Samosir (Persero) Tbk', '2019', 23, '2026-04-03 05:04:33', '2026-04-03 05:04:33'),
(24, 'Pengantar Sains Terapan repellat', 'Nadia Widiastuti', 'PJ Firgantoro Hasanah', '2018', 11, '2026-04-03 05:04:33', '2026-04-03 05:04:33'),
(25, 'Pengantar Matematika Dasar cupiditate', 'Adika Wijaya S.Psi', 'PT Wahyuni Tbk', '2025', 15, '2026-04-03 05:04:33', '2026-04-03 05:04:33'),
(26, 'Pengantar Teknologi Informasi placeat', 'Titi Hassanah', 'PT Suryono Agustina Tbk', '2023', 37, '2026-04-03 05:04:33', '2026-04-03 05:04:33'),
(27, 'Pengantar Teknologi Informasi quia', 'Cawisono Bagus Adriansyah', 'PD Santoso Yolanda', '2025', 16, '2026-04-03 05:04:33', '2026-04-03 05:04:33'),
(28, 'Pengantar Matematika Dasar cupiditate', 'Cemeti Bambang Megantara', 'PT Yuliarti Melani', '2025', 11, '2026-04-03 05:04:33', '2026-04-03 05:04:33');

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(255) NOT NULL,
  `payload` longtext NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `total_jobs` int(11) NOT NULL,
  `pending_jobs` int(11) NOT NULL,
  `failed_jobs` int(11) NOT NULL,
  `failed_job_ids` longtext NOT NULL,
  `options` mediumtext DEFAULT NULL,
  `cancelled_at` int(11) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `finished_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '0001_01_01_000000_create_users_table', 1),
(2, '0001_01_01_000001_create_cache_table', 1),
(3, '0001_01_01_000002_create_jobs_table', 1),
(4, '2026_04_01_103217_create_buku_table', 1),
(5, '2026_04_01_103250_create_peminjaman_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `peminjamans`
--

CREATE TABLE `peminjamans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `buku_id` bigint(20) UNSIGNED NOT NULL,
  `tanggal_pinjam` date NOT NULL,
  `tanggal_kembali` date DEFAULT NULL,
  `status` enum('Dipinjam','Dikembalikan') NOT NULL DEFAULT 'Dipinjam',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `peminjamans`
--

INSERT INTO `peminjamans` (`id`, `user_id`, `buku_id`, `tanggal_pinjam`, `tanggal_kembali`, `status`, `created_at`, `updated_at`) VALUES
(1, 2, 19, '2026-03-29', '2026-03-31', 'Dikembalikan', '2026-04-03 05:04:33', '2026-04-03 05:04:33'),
(2, 3, 5, '2026-03-23', '2026-03-29', 'Dikembalikan', '2026-04-03 05:04:33', '2026-04-03 05:04:33'),
(3, 3, 18, '2026-03-23', '2026-03-31', 'Dikembalikan', '2026-04-03 05:04:33', '2026-04-03 05:04:33'),
(4, 3, 13, '2026-03-22', '2026-03-24', 'Dikembalikan', '2026-04-03 05:04:33', '2026-04-03 05:04:33'),
(5, 3, 3, '2026-03-27', '2026-04-06', 'Dikembalikan', '2026-04-03 05:04:33', '2026-04-03 05:04:33'),
(6, 2, 24, '2026-03-17', '2026-03-26', 'Dikembalikan', '2026-04-03 05:04:33', '2026-04-03 05:04:33'),
(7, 4, 14, '2026-04-01', '2026-04-03', 'Dikembalikan', '2026-04-03 05:04:33', '2026-04-03 05:04:33'),
(8, 2, 24, '2026-03-30', NULL, 'Dipinjam', '2026-04-03 05:04:33', '2026-04-03 05:04:33'),
(9, 5, 22, '2026-03-31', '2026-04-10', 'Dikembalikan', '2026-04-03 05:04:33', '2026-04-03 05:04:33'),
(10, 6, 9, '2026-03-23', '2026-03-31', 'Dikembalikan', '2026-04-03 05:04:33', '2026-04-03 05:04:33'),
(11, 6, 15, '2026-03-27', '2026-04-05', 'Dikembalikan', '2026-04-03 05:04:33', '2026-04-03 05:04:33'),
(12, 4, 12, '2026-03-18', '2026-03-23', 'Dikembalikan', '2026-04-03 05:04:33', '2026-04-03 05:04:33'),
(13, 5, 16, '2026-03-16', '2026-03-23', 'Dikembalikan', '2026-04-03 05:04:33', '2026-04-03 05:04:33'),
(14, 5, 4, '2026-03-17', '2026-03-20', 'Dikembalikan', '2026-04-03 05:04:33', '2026-04-03 05:04:33'),
(15, 7, 15, '2026-03-26', NULL, 'Dipinjam', '2026-04-03 05:04:33', '2026-04-03 05:04:33'),
(16, 5, 14, '2026-03-17', '2026-03-26', 'Dikembalikan', '2026-04-03 05:04:33', '2026-04-03 05:04:33'),
(17, 5, 28, '2026-03-18', NULL, 'Dipinjam', '2026-04-03 05:04:33', '2026-04-03 05:04:33'),
(18, 7, 9, '2026-03-14', NULL, 'Dipinjam', '2026-04-03 05:04:33', '2026-04-03 05:04:33'),
(19, 3, 20, '2026-03-19', '2026-03-21', 'Dikembalikan', '2026-04-03 05:04:33', '2026-04-03 05:04:33'),
(20, 3, 6, '2026-04-01', '2026-04-06', 'Dikembalikan', '2026-04-03 05:04:33', '2026-04-03 05:04:33'),
(21, 3, 22, '2026-03-17', '2026-03-27', 'Dikembalikan', '2026-04-03 05:04:33', '2026-04-03 05:04:33'),
(22, 4, 13, '2026-03-30', '2026-04-03', 'Dikembalikan', '2026-04-03 05:04:33', '2026-04-03 05:04:33'),
(23, 7, 6, '2026-03-18', '2026-03-26', 'Dikembalikan', '2026-04-03 05:04:33', '2026-04-03 05:04:33'),
(24, 3, 22, '2026-03-21', '2026-03-31', 'Dikembalikan', '2026-04-03 05:04:33', '2026-04-03 05:04:33'),
(25, 6, 21, '2026-03-24', NULL, 'Dipinjam', '2026-04-03 05:04:33', '2026-04-03 05:04:33'),
(26, 7, 14, '2026-03-18', '2026-03-20', 'Dikembalikan', '2026-04-03 05:04:33', '2026-04-03 05:04:33'),
(27, 5, 4, '2026-03-30', NULL, 'Dipinjam', '2026-04-03 05:04:33', '2026-04-03 05:04:33'),
(28, 3, 8, '2026-03-14', '2026-03-16', 'Dikembalikan', '2026-04-03 05:04:33', '2026-04-03 05:04:33'),
(29, 4, 2, '2026-03-18', '2026-03-21', 'Dikembalikan', '2026-04-03 05:04:33', '2026-04-03 05:04:33'),
(30, 3, 2, '2026-03-15', NULL, 'Dipinjam', '2026-04-03 05:04:33', '2026-04-03 05:04:33');

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('V0b59NLSaVw8afS5u29Fk9qDq2kWgJqvtvlmVCM0', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/146.0.0.0 Safari/537.36', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoiOUUyUHFsaFpicmk0S0FvdXJQek8xTFhsRmxNb2dpRkF3WFNaSE9WTyI7czozOiJ1cmwiO2E6MDp7fXM6OToiX3ByZXZpb3VzIjthOjI6e3M6MzoidXJsIjtzOjMxOiJodHRwOi8vMTI3LjAuMC4xOjgwMDAvZGFzaGJvYXJkIjtzOjU6InJvdXRlIjtzOjk6ImRhc2hib2FyZCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fXM6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjE7fQ==', 1775217910);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` enum('admin','siswa') NOT NULL DEFAULT 'siswa',
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `password`, `role`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin Sistem', 'admin', '$2y$12$/vwye13kfFZkOwCoXfcmruXdUpU1lO0ifyzkA7ClHwTdWslg7NABq', 'admin', NULL, '2026-04-03 05:04:32', '2026-04-03 05:04:32'),
(2, 'Pengguna Demo', 'siswa', '$2y$12$PIUXEpdRhoMHs9VbXjIq.ejPyC7KZ7oEEyuD3lkCMcm749LXa2Rcu', 'siswa', NULL, '2026-04-03 05:04:32', '2026-04-03 05:04:32'),
(3, 'Rahayu Rahayu', 'darman19', '$2y$12$vbTKdRdhmWfg6v.puAStN.2nI4EFZ7gOalwFkcWiP23ah.3uCo.82', 'siswa', NULL, '2026-04-03 05:04:32', '2026-04-03 05:04:32'),
(4, 'Galak Santoso', 'haryanto.rizki', '$2y$12$SQnqlApgA7T9AjnDTDui6OV5SkF8uLhparnTo878L2tP9StAKQfYu', 'siswa', NULL, '2026-04-03 05:04:32', '2026-04-03 05:04:32'),
(5, 'Bancar Atma Putra', 'paris.tarihoran', '$2y$12$UtQcTtFnOtWtsUG4JcyWXe0Cq9FTzTAUqeFppfHxkD2pIF2fcZleq', 'siswa', NULL, '2026-04-03 05:04:33', '2026-04-03 05:04:33'),
(6, 'Clara Padmi Hariyah S.Gz', 'adika.lestari', '$2y$12$et6KRUdllFY7b.OgGeT9fe7Akt/mNK22sVON3tWnti1M5rQKa8kBy', 'siswa', NULL, '2026-04-03 05:04:33', '2026-04-03 05:04:33'),
(7, 'Bakidin Widodo', 'humaira17', '$2y$12$DINeu03nk.nhGX9mxCgRmevdtogl4rNkbhbRluup4h4krjqvQPeZm', 'siswa', NULL, '2026-04-03 05:04:33', '2026-04-03 05:04:33');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bukus`
--
ALTER TABLE `bukus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`),
  ADD KEY `cache_expiration_index` (`expiration`);

--
-- Indexes for table `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`),
  ADD KEY `cache_locks_expiration_index` (`expiration`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indexes for table `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `peminjamans`
--
ALTER TABLE `peminjamans`
  ADD PRIMARY KEY (`id`),
  ADD KEY `peminjamans_user_id_foreign` (`user_id`),
  ADD KEY `peminjamans_buku_id_foreign` (`buku_id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_username_unique` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bukus`
--
ALTER TABLE `bukus`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `peminjamans`
--
ALTER TABLE `peminjamans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `peminjamans`
--
ALTER TABLE `peminjamans`
  ADD CONSTRAINT `peminjamans_buku_id_foreign` FOREIGN KEY (`buku_id`) REFERENCES `bukus` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `peminjamans_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
