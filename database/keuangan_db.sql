-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 25, 2025 at 06:29 PM
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
-- Database: `keuangan_db`
--

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
(4, '2025_06_23_115545_create_transactions_table', 1);

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
('aLPjHc3LOX2BpKzpZ8Hj9Ix2IqgeyZ0f1piazXy5', 5, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/137.0.0.0 Safari/537.36 Edg/137.0.0.0', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiTUFsQUVIUXZ0MGU1WkwyVWI5enR5NUc2YmRIRWRWRjZRcnlJR1JQayI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDI6Imh0dHA6Ly9icm9hZGx5LXNldHRsZWQtZHJ1bS5uZ3Jvay1mcmVlLmFwcCI7fXM6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjU7fQ==', 1750868622),
('hloCQ294CZaaIGbLlJ0RZhWJ6IA6zxj7aTMWFe1g', NULL, '127.0.0.1', 'Mozilla/5.0 (Linux; Android 10; K) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/137.0.0.0 Mobile Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoicXJDRHYzMlZ0a0RITWtreHM5ZHh2dEhIRzFMNnQ0TnhXVnZVekpnZiI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDg6Imh0dHA6Ly9icm9hZGx5LXNldHRsZWQtZHJ1bS5uZ3Jvay1mcmVlLmFwcC9sb2dpbiI7fX0=', 1750867972),
('qG6m8sS99iqExGdrrvdku2wmg94jMWk1XX0Z1D1w', 5, '127.0.0.1', 'Mozilla/5.0 (Linux; Android 14; SM-A055F Build/UP1A.231005.007; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/137.0.7151.115 Mobile Safari/537.36 WpsMoffice/18.17.2/arm64-v8a/1534', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoiakRHcGhyUzdqRUdhcm92UU9GWGFtTXdUQjJocnROb1hla0g1RFZxSyI7czozOiJ1cmwiO2E6MTp7czo4OiJpbnRlbmRlZCI7czo0MjoiaHR0cDovL2Jyb2FkbHktc2V0dGxlZC1kcnVtLm5ncm9rLWZyZWUuYXBwIjt9czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NTA6Imh0dHA6Ly9icm9hZGx5LXNldHRsZWQtZHJ1bS5uZ3Jvay1mcmVlLmFwcC9sYXBvcmFuIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo1MDoibG9naW5fd2ViXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6NTt9', 1750864024),
('tlMPU1VnRF7ioIvPHVMw0JorNU0wyUpqTaILpTOc', NULL, '127.0.0.1', 'Mozilla/5.0 (Linux; Android 10; K) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/137.0.0.0 Mobile Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiTEh0TXVoRTRLTEVtNXlRYWdMWlY0MGlkMnQ4S2Y3NVdJVWVOYWhOeCI7czozOiJ1cmwiO2E6MTp7czo4OiJpbnRlbmRlZCI7czo0MjoiaHR0cDovL2Jyb2FkbHktc2V0dGxlZC1kcnVtLm5ncm9rLWZyZWUuYXBwIjt9czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDg6Imh0dHA6Ly9icm9hZGx5LXNldHRsZWQtZHJ1bS5uZ3Jvay1mcmVlLmFwcC9sb2dpbiI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1750865933),
('y8IU5MvLh6Qafx1ayjQnlSFNaoQ9J8eFmjrl5xlF', 3, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/137.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoielpLVDQwZnQ5SFlONXJ6UDRuTVc3OWRkdGFRR084TDVrbzRJYldyWSI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDI6Imh0dHA6Ly9icm9hZGx5LXNldHRsZWQtZHJ1bS5uZ3Jvay1mcmVlLmFwcCI7fXM6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjM7fQ==', 1750868630);

-- --------------------------------------------------------

--
-- Table structure for table `transactions`
--

CREATE TABLE `transactions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `type` enum('pemasukan','pengeluaran') NOT NULL,
  `category` varchar(255) NOT NULL,
  `amount` decimal(15,2) NOT NULL,
  `date` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `transactions`
--

INSERT INTO `transactions` (`id`, `user_id`, `type`, `category`, `amount`, `date`, `created_at`, `updated_at`) VALUES
(1, 3, 'pemasukan', 'asal', 120000.00, '2025-06-24', '2025-06-23 19:41:43', '2025-06-23 19:41:43'),
(3, 3, 'pengeluaran', 'Gaji', 18000000.00, '2025-06-25', '2025-06-24 18:44:33', '2025-06-24 19:18:15'),
(4, 3, 'pemasukan', 'Gaji', 5000000.00, '2025-06-15', '2025-06-24 20:12:27', '2025-06-24 20:12:27'),
(5, 3, 'pemasukan', 'Bonus', 1000000.00, '2025-06-20', '2025-06-24 20:12:27', '2025-06-24 20:12:27'),
(6, 3, 'pengeluaran', 'Belanja', 750000.00, '2025-06-22', '2025-06-24 20:12:27', '2025-06-24 20:12:27'),
(7, 3, 'pengeluaran', 'Transportasi', 200000.00, '2025-06-24', '2025-06-24 20:12:27', '2025-06-24 20:12:27'),
(8, 3, 'pengeluaran', 'Hiburan', 500000.00, '2025-06-25', '2025-06-24 20:12:27', '2025-06-24 20:12:27'),
(9, 3, 'pemasukan', 'Freelance', 2500000.00, '2025-06-27', '2025-06-24 20:12:27', '2025-06-24 20:12:27'),
(10, 3, 'pemasukan', 'Gaji', 5000000.00, '2025-06-15', '2025-06-24 20:12:27', '2025-06-24 20:12:27'),
(11, 3, 'pemasukan', 'Bonus', 1000000.00, '2025-06-20', '2025-06-24 20:12:27', '2025-06-24 20:12:27'),
(12, 3, 'pengeluaran', 'Belanja', 750000.00, '2025-06-22', '2025-06-24 20:12:27', '2025-06-24 20:12:27'),
(13, 3, 'pengeluaran', 'Transportasi', 200000.00, '2025-06-24', '2025-06-24 20:12:27', '2025-06-24 20:12:27'),
(14, 3, 'pengeluaran', 'Hiburan', 500000.00, '2025-06-25', '2025-06-24 20:12:27', '2025-06-24 20:12:27'),
(15, 3, 'pemasukan', 'Freelance', 2500000.00, '2025-06-27', '2025-06-24 20:12:27', '2025-06-24 20:12:27'),
(16, 3, 'pemasukan', 'Gaji', 5000000.00, '2025-06-15', '2025-06-24 20:12:27', '2025-06-24 20:12:27'),
(17, 3, 'pemasukan', 'Bonus', 1000000.00, '2025-06-20', '2025-06-24 20:12:27', '2025-06-24 20:12:27'),
(18, 3, 'pengeluaran', 'Belanja', 750000.00, '2025-06-22', '2025-06-24 20:12:27', '2025-06-24 20:12:27'),
(19, 3, 'pengeluaran', 'Transportasi', 200000.00, '2025-06-24', '2025-06-24 20:12:27', '2025-06-24 20:12:27'),
(20, 3, 'pengeluaran', 'Hiburan', 500000.00, '2025-06-25', '2025-06-24 20:12:27', '2025-06-24 20:12:27'),
(21, 3, 'pemasukan', 'Freelance', 2500000.00, '2025-06-27', '2025-06-24 20:12:27', '2025-06-24 20:12:27'),
(22, 3, 'pemasukan', 'Gaji', 5000000.00, '2025-06-15', '2025-06-24 20:12:27', '2025-06-24 20:12:27'),
(23, 3, 'pemasukan', 'Bonus', 1000000.00, '2025-06-20', '2025-06-24 20:12:27', '2025-06-24 20:12:27'),
(24, 3, 'pengeluaran', 'Belanja', 750000.00, '2025-06-22', '2025-06-24 20:12:27', '2025-06-24 20:12:27'),
(25, 3, 'pengeluaran', 'Transportasi', 200000.00, '2025-06-24', '2025-06-24 20:12:27', '2025-06-24 20:12:27'),
(26, 3, 'pengeluaran', 'Hiburan', 500000.00, '2025-06-25', '2025-06-24 20:12:27', '2025-06-24 20:12:27'),
(27, 3, 'pemasukan', 'Freelance', 2500000.00, '2025-06-27', '2025-06-24 20:12:27', '2025-06-24 20:12:27'),
(28, 3, 'pemasukan', 'Gaji', 5000000.00, '2025-06-15', '2025-06-24 20:12:27', '2025-06-24 20:12:27'),
(29, 3, 'pemasukan', 'Bonus', 1000000.00, '2025-06-20', '2025-06-24 20:12:27', '2025-06-24 20:12:27'),
(30, 3, 'pengeluaran', 'Belanja', 750000.00, '2025-06-22', '2025-06-24 20:12:27', '2025-06-24 20:12:27'),
(31, 3, 'pengeluaran', 'Transportasi', 200000.00, '2025-06-24', '2025-06-24 20:12:27', '2025-06-24 20:12:27'),
(32, 3, 'pengeluaran', 'Hiburan', 500000.00, '2025-06-25', '2025-06-24 20:12:27', '2025-06-24 20:12:27'),
(33, 3, 'pemasukan', 'Freelance', 2500000.00, '2025-06-27', '2025-06-24 20:12:27', '2025-06-24 20:12:27'),
(34, 3, 'pemasukan', 'Gaji', 5000000.00, '2025-06-15', '2025-06-24 20:12:27', '2025-06-24 20:12:27'),
(35, 3, 'pemasukan', 'Bonus', 1000000.00, '2025-06-20', '2025-06-24 20:12:27', '2025-06-24 20:12:27'),
(36, 3, 'pengeluaran', 'Belanja', 750000.00, '2025-06-22', '2025-06-24 20:12:27', '2025-06-24 20:12:27'),
(37, 3, 'pengeluaran', 'Transportasi', 200000.00, '2025-06-24', '2025-06-24 20:12:27', '2025-06-24 20:12:27'),
(38, 3, 'pengeluaran', 'Hiburan', 500000.00, '2025-06-25', '2025-06-24 20:12:27', '2025-06-24 20:12:27'),
(39, 3, 'pemasukan', 'Freelance', 2500000.00, '2025-06-27', '2025-06-24 20:12:27', '2025-06-24 20:12:27'),
(40, 3, 'pemasukan', 'Gaji', 5000000.00, '2025-06-15', '2025-06-24 20:12:27', '2025-06-24 20:12:27'),
(41, 3, 'pemasukan', 'Bonus', 1000000.00, '2025-06-20', '2025-06-24 20:12:27', '2025-06-24 20:12:27'),
(42, 3, 'pengeluaran', 'Belanja', 750000.00, '2025-06-22', '2025-06-24 20:12:27', '2025-06-24 20:12:27'),
(43, 3, 'pengeluaran', 'Transportasi', 200000.00, '2025-06-24', '2025-06-24 20:12:27', '2025-06-24 20:12:27'),
(44, 3, 'pengeluaran', 'Hiburan', 500000.00, '2025-06-25', '2025-06-24 20:12:27', '2025-06-24 20:12:27'),
(45, 3, 'pemasukan', 'Freelance', 2500000.00, '2025-06-27', '2025-06-24 20:12:27', '2025-06-24 20:12:27'),
(46, 3, 'pemasukan', 'Gaji', 5000000.00, '2025-06-15', '2025-06-24 20:12:27', '2025-06-24 20:12:27'),
(47, 3, 'pemasukan', 'Bonus', 1000000.00, '2025-06-20', '2025-06-24 20:12:27', '2025-06-24 20:12:27'),
(48, 3, 'pengeluaran', 'Belanja', 750000.00, '2025-06-22', '2025-06-24 20:12:27', '2025-06-24 20:12:27'),
(49, 3, 'pengeluaran', 'Transportasi', 200000.00, '2025-06-24', '2025-06-24 20:12:27', '2025-06-24 20:12:27'),
(50, 3, 'pengeluaran', 'Hiburan', 500000.00, '2025-06-25', '2025-06-24 20:12:27', '2025-06-24 20:12:27'),
(51, 3, 'pemasukan', 'Freelance', 2500000.00, '2025-06-27', '2025-06-24 20:12:27', '2025-06-24 20:12:27'),
(52, 3, 'pemasukan', 'Gaji', 5000000.00, '2025-06-15', '2025-06-24 20:12:27', '2025-06-24 20:12:27'),
(53, 3, 'pemasukan', 'Bonus', 1000000.00, '2025-06-20', '2025-06-24 20:12:27', '2025-06-24 20:12:27'),
(54, 3, 'pengeluaran', 'Belanja', 750000.00, '2025-06-22', '2025-06-24 20:12:27', '2025-06-24 20:12:27'),
(55, 3, 'pengeluaran', 'Transportasi', 200000.00, '2025-06-24', '2025-06-24 20:12:27', '2025-06-24 20:12:27'),
(56, 3, 'pengeluaran', 'Hiburan', 500000.00, '2025-06-25', '2025-06-24 20:12:27', '2025-06-24 20:12:27'),
(57, 3, 'pemasukan', 'Freelance', 2500000.00, '2025-06-27', '2025-06-24 20:12:27', '2025-06-24 20:12:27'),
(58, 3, 'pemasukan', 'Gaji', 5000000.00, '2025-06-15', '2025-06-24 20:12:27', '2025-06-24 20:12:27'),
(59, 3, 'pemasukan', 'Bonus', 1000000.00, '2025-06-20', '2025-06-24 20:12:27', '2025-06-24 20:12:27'),
(60, 3, 'pengeluaran', 'Belanja', 750000.00, '2025-06-22', '2025-06-24 20:12:27', '2025-06-24 20:12:27'),
(61, 3, 'pengeluaran', 'Transportasi', 200000.00, '2025-06-24', '2025-06-24 20:12:27', '2025-06-24 20:12:27'),
(62, 3, 'pengeluaran', 'Hiburan', 500000.00, '2025-06-25', '2025-06-24 20:12:27', '2025-06-24 20:12:27'),
(63, 3, 'pemasukan', 'Freelance', 2500000.00, '2025-06-27', '2025-06-24 20:12:27', '2025-06-24 20:12:27'),
(64, 3, 'pemasukan', 'Gaji', 5000000.00, '2025-06-15', '2025-06-24 20:12:27', '2025-06-24 20:12:27'),
(65, 3, 'pemasukan', 'Bonus', 1000000.00, '2025-06-20', '2025-06-24 20:12:27', '2025-06-24 20:12:27'),
(66, 3, 'pengeluaran', 'Belanja', 750000.00, '2025-06-22', '2025-06-24 20:12:27', '2025-06-24 20:12:27'),
(67, 3, 'pengeluaran', 'Transportasi', 200000.00, '2025-06-24', '2025-06-24 20:12:27', '2025-06-24 20:12:27'),
(68, 3, 'pengeluaran', 'Hiburan', 500000.00, '2025-06-25', '2025-06-24 20:12:27', '2025-06-24 20:12:27'),
(69, 3, 'pemasukan', 'Freelance', 2500000.00, '2025-06-27', '2025-06-24 20:12:27', '2025-06-24 20:12:27'),
(70, 5, 'pemasukan', 'Gaji', 3000000.00, '2025-06-10', '2025-06-25 08:26:33', '2025-06-25 08:26:33'),
(71, 3, 'pemasukan', 'Gaji', 5000000.00, '2025-06-15', '2025-06-25 09:20:24', '2025-06-25 09:20:24'),
(72, 3, 'pemasukan', 'Bonus', 1000000.00, '2025-06-20', '2025-06-25 09:20:24', '2025-06-25 09:20:24'),
(73, 3, 'pengeluaran', 'Belanja', 750000.00, '2025-06-22', '2025-06-25 09:20:24', '2025-06-25 09:20:24'),
(74, 3, 'pengeluaran', 'Transportasi', 200000.00, '2025-06-24', '2025-06-25 09:20:24', '2025-06-25 09:20:24'),
(75, 3, 'pengeluaran', 'Hiburan', 500000.00, '2025-06-25', '2025-06-25 09:20:24', '2025-06-25 09:20:24'),
(76, 3, 'pemasukan', 'Freelance', 2500000.00, '2025-06-27', '2025-06-25 09:20:24', '2025-06-25 09:20:24'),
(77, 3, 'pemasukan', 'Gaji', 5000000.00, '2025-06-15', '2025-06-25 09:20:24', '2025-06-25 09:20:24'),
(78, 3, 'pemasukan', 'Bonus', 1000000.00, '2025-06-20', '2025-06-25 09:20:24', '2025-06-25 09:20:24'),
(79, 3, 'pengeluaran', 'Belanja', 750000.00, '2025-06-22', '2025-06-25 09:20:24', '2025-06-25 09:20:24'),
(80, 3, 'pengeluaran', 'Transportasi', 200000.00, '2025-06-24', '2025-06-25 09:20:24', '2025-06-25 09:20:24'),
(81, 3, 'pengeluaran', 'Hiburan', 500000.00, '2025-06-25', '2025-06-25 09:20:24', '2025-06-25 09:20:24'),
(82, 3, 'pemasukan', 'Freelance', 2500000.00, '2025-06-27', '2025-06-25 09:20:24', '2025-06-25 09:20:24'),
(83, 3, 'pemasukan', 'Gaji', 5000000.00, '2025-06-15', '2025-06-25 09:20:24', '2025-06-25 09:20:24'),
(84, 3, 'pemasukan', 'Bonus', 1000000.00, '2025-06-20', '2025-06-25 09:20:24', '2025-06-25 09:20:24'),
(85, 3, 'pengeluaran', 'Belanja', 750000.00, '2025-06-22', '2025-06-25 09:20:24', '2025-06-25 09:20:24'),
(86, 3, 'pengeluaran', 'Transportasi', 200000.00, '2025-06-24', '2025-06-25 09:20:24', '2025-06-25 09:20:24'),
(87, 3, 'pengeluaran', 'Hiburan', 500000.00, '2025-06-25', '2025-06-25 09:20:24', '2025-06-25 09:20:24'),
(88, 3, 'pemasukan', 'Freelance', 2500000.00, '2025-06-27', '2025-06-25 09:20:24', '2025-06-25 09:20:24'),
(89, 3, 'pemasukan', 'Gaji', 5000000.00, '2025-06-15', '2025-06-25 09:20:24', '2025-06-25 09:20:24'),
(90, 3, 'pemasukan', 'Bonus', 1000000.00, '2025-06-20', '2025-06-25 09:20:24', '2025-06-25 09:20:24'),
(91, 3, 'pengeluaran', 'Belanja', 750000.00, '2025-06-22', '2025-06-25 09:20:24', '2025-06-25 09:20:24'),
(92, 3, 'pengeluaran', 'Transportasi', 200000.00, '2025-06-24', '2025-06-25 09:20:24', '2025-06-25 09:20:24'),
(93, 3, 'pengeluaran', 'Hiburan', 500000.00, '2025-06-25', '2025-06-25 09:20:24', '2025-06-25 09:20:24'),
(94, 3, 'pemasukan', 'Freelance', 2500000.00, '2025-06-27', '2025-06-25 09:20:24', '2025-06-25 09:20:24'),
(95, 3, 'pemasukan', 'Gaji', 5000000.00, '2025-06-15', '2025-06-25 09:20:24', '2025-06-25 09:20:24'),
(96, 3, 'pemasukan', 'Bonus', 1000000.00, '2025-06-20', '2025-06-25 09:20:24', '2025-06-25 09:20:24'),
(97, 3, 'pengeluaran', 'Belanja', 750000.00, '2025-06-22', '2025-06-25 09:20:24', '2025-06-25 09:20:24'),
(98, 3, 'pengeluaran', 'Transportasi', 200000.00, '2025-06-24', '2025-06-25 09:20:24', '2025-06-25 09:20:24'),
(99, 3, 'pengeluaran', 'Hiburan', 500000.00, '2025-06-25', '2025-06-25 09:20:24', '2025-06-25 09:20:24'),
(100, 3, 'pemasukan', 'Freelance', 2500000.00, '2025-06-27', '2025-06-25 09:20:24', '2025-06-25 09:20:24'),
(101, 3, 'pemasukan', 'Gaji', 5000000.00, '2025-06-15', '2025-06-25 09:20:24', '2025-06-25 09:20:24'),
(102, 3, 'pemasukan', 'Bonus', 1000000.00, '2025-06-20', '2025-06-25 09:20:24', '2025-06-25 09:20:24'),
(103, 3, 'pengeluaran', 'Belanja', 750000.00, '2025-06-22', '2025-06-25 09:20:24', '2025-06-25 09:20:24'),
(104, 3, 'pengeluaran', 'Transportasi', 200000.00, '2025-06-24', '2025-06-25 09:20:24', '2025-06-25 09:20:24'),
(105, 3, 'pengeluaran', 'Hiburan', 500000.00, '2025-06-25', '2025-06-25 09:20:24', '2025-06-25 09:20:24'),
(106, 3, 'pemasukan', 'Freelance', 2500000.00, '2025-06-27', '2025-06-25 09:20:24', '2025-06-25 09:20:24'),
(107, 3, 'pemasukan', 'Gaji', 5000000.00, '2025-06-15', '2025-06-25 09:20:24', '2025-06-25 09:20:24'),
(108, 3, 'pemasukan', 'Bonus', 1000000.00, '2025-06-20', '2025-06-25 09:20:24', '2025-06-25 09:20:24'),
(109, 3, 'pengeluaran', 'Belanja', 750000.00, '2025-06-22', '2025-06-25 09:20:24', '2025-06-25 09:20:24'),
(110, 3, 'pengeluaran', 'Transportasi', 200000.00, '2025-06-24', '2025-06-25 09:20:24', '2025-06-25 09:20:24'),
(111, 3, 'pengeluaran', 'Hiburan', 500000.00, '2025-06-25', '2025-06-25 09:20:24', '2025-06-25 09:20:24'),
(112, 3, 'pemasukan', 'Freelance', 2500000.00, '2025-06-27', '2025-06-25 09:20:24', '2025-06-25 09:20:24'),
(113, 3, 'pemasukan', 'Gaji', 5000000.00, '2025-06-15', '2025-06-25 09:20:24', '2025-06-25 09:20:24'),
(114, 3, 'pemasukan', 'Bonus', 1000000.00, '2025-06-20', '2025-06-25 09:20:24', '2025-06-25 09:20:24'),
(115, 3, 'pengeluaran', 'Belanja', 750000.00, '2025-06-22', '2025-06-25 09:20:24', '2025-06-25 09:20:24'),
(116, 3, 'pengeluaran', 'Transportasi', 200000.00, '2025-06-24', '2025-06-25 09:20:24', '2025-06-25 09:20:24'),
(117, 3, 'pengeluaran', 'Hiburan', 500000.00, '2025-06-25', '2025-06-25 09:20:24', '2025-06-25 09:20:24'),
(118, 3, 'pemasukan', 'Freelance', 2500000.00, '2025-06-27', '2025-06-25 09:20:24', '2025-06-25 09:20:24'),
(119, 3, 'pemasukan', 'Gaji', 5000000.00, '2025-06-15', '2025-06-25 09:20:24', '2025-06-25 09:20:24'),
(120, 3, 'pemasukan', 'Bonus', 1000000.00, '2025-06-20', '2025-06-25 09:20:24', '2025-06-25 09:20:24'),
(121, 3, 'pengeluaran', 'Belanja', 750000.00, '2025-06-22', '2025-06-25 09:20:24', '2025-06-25 09:20:24'),
(122, 3, 'pengeluaran', 'Transportasi', 200000.00, '2025-06-24', '2025-06-25 09:20:24', '2025-06-25 09:20:24'),
(123, 3, 'pengeluaran', 'Hiburan', 500000.00, '2025-06-25', '2025-06-25 09:20:24', '2025-06-25 09:20:24'),
(124, 3, 'pemasukan', 'Freelance', 2500000.00, '2025-06-27', '2025-06-25 09:20:24', '2025-06-25 09:20:24'),
(125, 3, 'pemasukan', 'Gaji', 5000000.00, '2025-06-15', '2025-06-25 09:20:24', '2025-06-25 09:20:24'),
(126, 3, 'pemasukan', 'Bonus', 1000000.00, '2025-06-20', '2025-06-25 09:20:24', '2025-06-25 09:20:24'),
(127, 3, 'pengeluaran', 'Belanja', 750000.00, '2025-06-22', '2025-06-25 09:20:24', '2025-06-25 09:20:24'),
(128, 3, 'pengeluaran', 'Transportasi', 200000.00, '2025-06-24', '2025-06-25 09:20:24', '2025-06-25 09:20:24'),
(129, 3, 'pengeluaran', 'Hiburan', 500000.00, '2025-06-25', '2025-06-25 09:20:24', '2025-06-25 09:20:24'),
(130, 3, 'pemasukan', 'Freelance', 2500000.00, '2025-06-27', '2025-06-25 09:20:24', '2025-06-25 09:20:24'),
(131, 3, 'pemasukan', 'Gaji', 5000000.00, '2025-06-15', '2025-06-25 09:20:24', '2025-06-25 09:20:24'),
(132, 3, 'pemasukan', 'Bonus', 1000000.00, '2025-06-20', '2025-06-25 09:20:24', '2025-06-25 09:20:24'),
(133, 3, 'pengeluaran', 'Belanja', 750000.00, '2025-06-22', '2025-06-25 09:20:24', '2025-06-25 09:20:24'),
(134, 3, 'pengeluaran', 'Transportasi', 200000.00, '2025-06-24', '2025-06-25 09:20:24', '2025-06-25 09:20:24'),
(135, 3, 'pengeluaran', 'Hiburan', 500000.00, '2025-06-25', '2025-06-25 09:20:24', '2025-06-25 09:20:24'),
(136, 3, 'pemasukan', 'Freelance', 2500000.00, '2025-06-27', '2025-06-25 09:20:24', '2025-06-25 09:20:24'),
(137, 5, 'pemasukan', 'Gaji', 5000000.00, '2025-06-15', '2025-06-25 09:26:54', '2025-06-25 09:26:54'),
(138, 5, 'pemasukan', 'Bonus', 1000000.00, '2025-06-20', '2025-06-25 09:26:54', '2025-06-25 09:26:54'),
(139, 5, 'pengeluaran', 'Belanja', 750000.00, '2025-06-22', '2025-06-25 09:26:54', '2025-06-25 09:26:54'),
(140, 5, 'pengeluaran', 'Transportasi', 200000.00, '2025-06-24', '2025-06-25 09:26:54', '2025-06-25 09:26:54'),
(141, 5, 'pengeluaran', 'Hiburan', 500000.00, '2025-06-25', '2025-06-25 09:26:54', '2025-06-25 09:26:54'),
(142, 5, 'pemasukan', 'Freelance', 2500000.00, '2025-06-27', '2025-06-25 09:26:54', '2025-06-25 09:26:54'),
(143, 5, 'pemasukan', 'Gaji', 5000000.00, '2025-06-15', '2025-06-25 09:26:54', '2025-06-25 09:26:54'),
(144, 5, 'pemasukan', 'Bonus', 1000000.00, '2025-06-20', '2025-06-25 09:26:54', '2025-06-25 09:26:54'),
(145, 5, 'pengeluaran', 'Belanja', 750000.00, '2025-06-22', '2025-06-25 09:26:54', '2025-06-25 09:26:54'),
(146, 5, 'pengeluaran', 'Transportasi', 200000.00, '2025-06-24', '2025-06-25 09:26:54', '2025-06-25 09:26:54'),
(147, 5, 'pengeluaran', 'Hiburan', 500000.00, '2025-06-25', '2025-06-25 09:26:54', '2025-06-25 09:26:54'),
(148, 5, 'pemasukan', 'Freelance', 2500000.00, '2025-06-27', '2025-06-25 09:26:54', '2025-06-25 09:26:54'),
(149, 5, 'pemasukan', 'Gaji', 5000000.00, '2025-06-15', '2025-06-25 09:26:54', '2025-06-25 09:26:54'),
(150, 5, 'pemasukan', 'Bonus', 1000000.00, '2025-06-20', '2025-06-25 09:26:54', '2025-06-25 09:26:54'),
(151, 5, 'pengeluaran', 'Belanja', 750000.00, '2025-06-22', '2025-06-25 09:26:54', '2025-06-25 09:26:54'),
(152, 5, 'pengeluaran', 'Transportasi', 200000.00, '2025-06-24', '2025-06-25 09:26:54', '2025-06-25 09:26:54'),
(153, 5, 'pengeluaran', 'Hiburan', 500000.00, '2025-06-25', '2025-06-25 09:26:54', '2025-06-25 09:26:54'),
(154, 5, 'pemasukan', 'Freelance', 2500000.00, '2025-06-27', '2025-06-25 09:26:54', '2025-06-25 09:26:54'),
(155, 5, 'pemasukan', 'Gaji', 5000000.00, '2025-06-15', '2025-06-25 09:26:54', '2025-06-25 09:26:54'),
(156, 5, 'pemasukan', 'Bonus', 1000000.00, '2025-06-20', '2025-06-25 09:26:54', '2025-06-25 09:26:54'),
(157, 5, 'pengeluaran', 'Belanja', 750000.00, '2025-06-22', '2025-06-25 09:26:54', '2025-06-25 09:26:54'),
(158, 5, 'pengeluaran', 'Transportasi', 200000.00, '2025-06-24', '2025-06-25 09:26:54', '2025-06-25 09:26:54'),
(159, 5, 'pengeluaran', 'Hiburan', 500000.00, '2025-06-25', '2025-06-25 09:26:54', '2025-06-25 09:26:54'),
(160, 5, 'pemasukan', 'Freelance', 2500000.00, '2025-06-27', '2025-06-25 09:26:54', '2025-06-25 09:26:54'),
(161, 5, 'pemasukan', 'Gaji', 5000000.00, '2025-06-15', '2025-06-25 09:26:54', '2025-06-25 09:26:54'),
(162, 5, 'pemasukan', 'Bonus', 1000000.00, '2025-06-20', '2025-06-25 09:26:54', '2025-06-25 09:26:54'),
(163, 5, 'pengeluaran', 'Belanja', 750000.00, '2025-06-22', '2025-06-25 09:26:54', '2025-06-25 09:26:54'),
(164, 5, 'pengeluaran', 'Transportasi', 200000.00, '2025-06-24', '2025-06-25 09:26:54', '2025-06-25 09:26:54'),
(165, 5, 'pengeluaran', 'Hiburan', 500000.00, '2025-06-25', '2025-06-25 09:26:54', '2025-06-25 09:26:54'),
(166, 5, 'pemasukan', 'Freelance', 2500000.00, '2025-06-27', '2025-06-25 09:26:54', '2025-06-25 09:26:54'),
(167, 5, 'pemasukan', 'Gaji', 5000000.00, '2025-06-15', '2025-06-25 09:26:54', '2025-06-25 09:26:54'),
(168, 5, 'pemasukan', 'Bonus', 1000000.00, '2025-06-20', '2025-06-25 09:26:54', '2025-06-25 09:26:54'),
(169, 5, 'pengeluaran', 'Belanja', 750000.00, '2025-06-22', '2025-06-25 09:26:54', '2025-06-25 09:26:54'),
(170, 5, 'pengeluaran', 'Transportasi', 200000.00, '2025-06-24', '2025-06-25 09:26:54', '2025-06-25 09:26:54'),
(171, 5, 'pengeluaran', 'Hiburan', 500000.00, '2025-06-25', '2025-06-25 09:26:54', '2025-06-25 09:26:54'),
(172, 5, 'pemasukan', 'Freelance', 2500000.00, '2025-06-27', '2025-06-25 09:26:54', '2025-06-25 09:26:54'),
(173, 5, 'pemasukan', 'Gaji', 5000000.00, '2025-06-15', '2025-06-25 09:26:54', '2025-06-25 09:26:54'),
(174, 5, 'pemasukan', 'Bonus', 1000000.00, '2025-06-20', '2025-06-25 09:26:54', '2025-06-25 09:26:54'),
(175, 5, 'pengeluaran', 'Belanja', 750000.00, '2025-06-22', '2025-06-25 09:26:54', '2025-06-25 09:26:54'),
(176, 5, 'pengeluaran', 'Transportasi', 200000.00, '2025-06-24', '2025-06-25 09:26:54', '2025-06-25 09:26:54'),
(177, 5, 'pengeluaran', 'Hiburan', 500000.00, '2025-06-25', '2025-06-25 09:26:54', '2025-06-25 09:26:54'),
(178, 5, 'pemasukan', 'Freelance', 2500000.00, '2025-06-27', '2025-06-25 09:26:54', '2025-06-25 09:26:54'),
(179, 5, 'pemasukan', 'Gaji', 5000000.00, '2025-06-15', '2025-06-25 09:26:54', '2025-06-25 09:26:54'),
(180, 5, 'pemasukan', 'Bonus', 1000000.00, '2025-06-20', '2025-06-25 09:26:54', '2025-06-25 09:26:54'),
(181, 5, 'pengeluaran', 'Belanja', 750000.00, '2025-06-22', '2025-06-25 09:26:54', '2025-06-25 09:26:54'),
(182, 5, 'pengeluaran', 'Transportasi', 200000.00, '2025-06-24', '2025-06-25 09:26:54', '2025-06-25 09:26:54'),
(183, 5, 'pengeluaran', 'Hiburan', 500000.00, '2025-06-25', '2025-06-25 09:26:54', '2025-06-25 09:26:54'),
(184, 5, 'pemasukan', 'Freelance', 2500000.00, '2025-06-27', '2025-06-25 09:26:54', '2025-06-25 09:26:54'),
(185, 5, 'pemasukan', 'Gaji', 5000000.00, '2025-06-15', '2025-06-25 09:26:54', '2025-06-25 09:26:54'),
(186, 5, 'pemasukan', 'Bonus', 1000000.00, '2025-06-20', '2025-06-25 09:26:54', '2025-06-25 09:26:54'),
(187, 5, 'pengeluaran', 'Belanja', 750000.00, '2025-06-22', '2025-06-25 09:26:54', '2025-06-25 09:26:54'),
(188, 5, 'pengeluaran', 'Transportasi', 200000.00, '2025-06-24', '2025-06-25 09:26:54', '2025-06-25 09:26:54'),
(189, 5, 'pengeluaran', 'Hiburan', 500000.00, '2025-06-25', '2025-06-25 09:26:54', '2025-06-25 09:26:54'),
(190, 5, 'pemasukan', 'Freelance', 2500000.00, '2025-06-27', '2025-06-25 09:26:54', '2025-06-25 09:26:54'),
(191, 5, 'pemasukan', 'Gaji', 5000000.00, '2025-06-15', '2025-06-25 09:26:54', '2025-06-25 09:26:54'),
(192, 5, 'pemasukan', 'Bonus', 1000000.00, '2025-06-20', '2025-06-25 09:26:54', '2025-06-25 09:26:54'),
(193, 5, 'pengeluaran', 'Belanja', 750000.00, '2025-06-22', '2025-06-25 09:26:54', '2025-06-25 09:26:54'),
(194, 5, 'pengeluaran', 'Transportasi', 200000.00, '2025-06-24', '2025-06-25 09:26:54', '2025-06-25 09:26:54'),
(195, 5, 'pengeluaran', 'Hiburan', 500000.00, '2025-06-25', '2025-06-25 09:26:54', '2025-06-25 09:26:54'),
(196, 5, 'pemasukan', 'Freelance', 2500000.00, '2025-06-27', '2025-06-25 09:26:54', '2025-06-25 09:26:54'),
(197, 5, 'pemasukan', 'Gaji', 5000000.00, '2025-06-15', '2025-06-25 09:26:54', '2025-06-25 09:26:54'),
(198, 5, 'pemasukan', 'Bonus', 1000000.00, '2025-06-20', '2025-06-25 09:26:54', '2025-06-25 09:26:54'),
(199, 5, 'pengeluaran', 'Belanja', 750000.00, '2025-06-22', '2025-06-25 09:26:54', '2025-06-25 09:26:54'),
(200, 5, 'pengeluaran', 'Transportasi', 200000.00, '2025-06-24', '2025-06-25 09:26:54', '2025-06-25 09:26:54'),
(201, 5, 'pengeluaran', 'Hiburan', 500000.00, '2025-06-25', '2025-06-25 09:26:54', '2025-06-25 09:26:54'),
(202, 5, 'pemasukan', 'Freelance', 2500000.00, '2025-06-27', '2025-06-25 09:26:54', '2025-06-25 09:26:54');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@gmail.com', NULL, '$2y$12$71o9N1Sy6jVF0CNGdM3stefllwcfYsq3znDe9JZGbSS3TVzOjY2uq', NULL, NULL, NULL),
(3, 'user updated', 'arifinhabibi94@gmail.com', NULL, '$2y$12$4z/O76rOTh9PDrC0lzT9we7BWIos0GayMlZBCGWTkG6JKyIPhk266', 'tY89ZcBRBDbE0n4YDKTmCnMsd3EnE4EhflmfvmW8c52hXjLHHncYMtrcN2kw', '2025-06-23 19:34:05', '2025-06-25 01:30:31'),
(5, 'Dina', 'dinakarlina801@gmail.com', NULL, '$2y$12$iihA4bV1gkg9jqSxTjvDa.7U5QOEmNcZVQ.l2myLXvvefyHS9TeRS', NULL, '2025-06-25 08:05:40', '2025-06-25 08:05:40');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

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
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `transactions`
--
ALTER TABLE `transactions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `transactions_user_id_foreign` (`user_id`);

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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `transactions`
--
ALTER TABLE `transactions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=203;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `transactions`
--
ALTER TABLE `transactions`
  ADD CONSTRAINT `transactions_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
