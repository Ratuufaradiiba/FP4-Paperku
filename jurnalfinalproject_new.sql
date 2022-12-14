-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 23, 2022 at 07:26 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jurnalfinalproject_ratu`
--

-- --------------------------------------------------------

--
-- Table structure for table `download_jurnal`
--

CREATE TABLE `download_jurnal` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `jurnal_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `download_jurnal`
--

INSERT INTO `download_jurnal` (`id`, `jurnal_id`, `created_at`, `updated_at`) VALUES
(9, 11, '2022-08-09 10:37:34', '2022-11-23 10:37:34'),
(10, 11, '2022-01-15 17:44:29', '2022-11-23 10:43:31'),
(11, 11, '2022-11-23 10:43:34', '2022-11-23 10:43:34'),
(12, 11, '2022-11-23 10:45:19', '2022-11-23 10:45:19'),
(13, 11, '2022-11-23 10:45:21', '2022-11-23 10:45:21'),
(14, 11, '2022-11-23 10:52:26', '2022-11-23 10:52:26'),
(15, 11, '2022-05-08 17:54:01', NULL),
(16, 11, '2022-05-19 17:54:41', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jurnal`
--

CREATE TABLE `jurnal` (
  `id` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `tahun` year(4) NOT NULL,
  `foto` varchar(255) DEFAULT NULL,
  `ket` varchar(255) NOT NULL,
  `isi` varchar(225) NOT NULL,
  `id_kategori` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `id_profile` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jurnal`
--

INSERT INTO `jurnal` (`id`, `judul`, `tahun`, `foto`, `ket`, `isi`, `id_kategori`, `created_at`, `updated_at`, `id_profile`) VALUES
(3, 'Sistem Informasi Periklanan Dan Pelelangan Barang Hasil Pertanian (Studi Kasus Dinas Pertanian)', 2015, 'assets/img/jurnals/aGZrHlTzZRnynpDMbX4zERFxM9abfq3LMM1FK06Y.jpg', 'Recently technology developed and applied in our daily activities.', 'INI ISI JURNAL SI', 3, NULL, '2022-11-16 09:21:54', 1),
(8, 'Digitalisasi dan Ketimpangan Pendidikan: Studi Kasus terhadap Guru Sekolah Dasar di Kecamatan Baraka', 2022, 'assets/img/jurnals/HpVTW7eiNQgdCIDbGJZ4yf9xyEnlRXS2uQWzrmqq.jpg', 'Digitalisasi pendidikan pada dasarnya merupakan upaya pemerintah untuk pemerataan akses pendidikan', 'INI ISI JURNAL PENDIDIKAN', 1, NULL, '2022-11-16 09:21:36', 2),
(11, 'Kurikulum Pendidikan di Indonesia Sepanjang Sejarah (suatu Tinjauan Kritis Filosofis)', 2022, 'assets/img/jurnals/65LhXQEeldYf3b674FMhB54eDLYlqcqKZyeCfiIk.png', 'apa aja', 'INI ISI JURNAL PENDIDIKAN', 1, '2022-11-16 08:56:05', '2022-11-16 09:14:34', 6);

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id` int(11) NOT NULL,
  `nama_kategori` varchar(50) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id`, `nama_kategori`, `created_at`, `updated_at`) VALUES
(1, 'Pendidikan', NULL, '2022-11-17 06:03:00'),
(2, 'Manajemen Bisnis', NULL, '2022-11-16 09:17:35'),
(3, 'Sistem dan Teknologi Informasi', NULL, NULL),
(4, 'Kesehatan', NULL, NULL),
(8, 'Olahraga', '2022-11-16 09:24:21', '2022-11-16 09:24:21'),
(9, 'Sejarah', '2022-11-16 09:24:28', '2022-11-16 09:24:28');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_11_08_023201_create_pengguna_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `profile`
--

CREATE TABLE `profile` (
  `id` int(11) NOT NULL,
  `nama` varchar(45) NOT NULL,
  `username` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  `foto` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `profile`
--

INSERT INTO `profile` (`id`, `nama`, `username`, `email`, `foto`, `created_at`, `updated_at`) VALUES
(1, 'Queen Faradiba', 'Queenie', 'queen@gmail.com', 'assets/img/authors/r6xbYUby8qK2Ppa2VfcNkoYt50uGFQUJPvLYY7Hw.jpg', NULL, '2022-11-16 09:20:47'),
(2, 'Alana van Debora', 'Alana', 'alana@gmail.com', 'assets/img/authors/LODau2WZVTVvGG6Nvk6KdghQZYiiQ2qNEC4wGcAZ.jpg', NULL, '2022-11-16 09:21:04'),
(6, 'Alexandra', 'Alexxx', 'Alex@gmail.com', 'assets/img/authors/JeHGMphErFW6mkXdwAXUSTa87Gr5geDvUC02FOta.jpg', '2022-11-16 08:56:42', '2022-11-17 07:42:46'),
(8, 'Alea Mazaya Taleetha', 'Mazlea', 'Mazlea@gmail.com', 'assets/img/authors/y1hr2ER6jyZtN0DXu08N3FmTZn5uD2unAidkOzws.jpg', '2022-11-18 02:23:50', '2022-11-18 02:23:50'),
(9, 'Rizky Dharma Sanjaya', 'Rizky Darms', 'rizkydarms@gmail.com', 'assets/img/authors/T266Rb0ImX8PEdeo89LTDb0aubk6n2v0v3YtHUta.png', '2022-11-20 22:16:38', '2022-11-20 22:16:38');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `role` enum('admin','user') COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `username`, `email_verified_at`, `password`, `foto`, `role`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@gmail.com', 'admin', NULL, '$2a$12$881mZdZ5siv70hyS.CEpNudI8KO3PY3yij2TO8OCqTH3F7zUYM5A2', NULL, 'admin', NULL, '2022-11-15 11:07:26', '2022-11-15 11:07:26'),
(2, 'Rizky Darms', 'rizkydarms@gmail.com', 'rizkydarms', NULL, '$2y$10$UK4LBJfOgMks2dlhdae8gObA3FzsrxXcZsmh4nGASPb9ymbI2EKmq', NULL, 'user', NULL, '2022-11-15 11:53:56', '2022-11-15 11:53:56'),
(3, 'RatuFaradiba', 'ratu@gmail.com', 'ratu', NULL, '$2y$10$sNrMvI658boPEVntnMrh4OTU5BpXzeTD4mcYNWXPR6SsxczuEu8iy', NULL, 'admin', NULL, '2022-11-15 21:07:10', '2022-11-15 21:07:10');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `download_jurnal`
--
ALTER TABLE `download_jurnal`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `jurnal`
--
ALTER TABLE `jurnal`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_jurnal_kategori1_idx` (`id_kategori`),
  ADD KEY `fk_jurnal_profile1_idx` (`id_profile`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `profile`
--
ALTER TABLE `profile`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email_UNIQUE` (`email`),
  ADD UNIQUE KEY `username_UNIQUE` (`username`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `download_jurnal`
--
ALTER TABLE `download_jurnal`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jurnal`
--
ALTER TABLE `jurnal`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `profile`
--
ALTER TABLE `profile`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `jurnal`
--
ALTER TABLE `jurnal`
  ADD CONSTRAINT `fk_jurnal_kategori1` FOREIGN KEY (`id_kategori`) REFERENCES `kategori` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_jurnal_profile1` FOREIGN KEY (`id_profile`) REFERENCES `profile` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
