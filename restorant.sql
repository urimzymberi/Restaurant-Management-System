-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jan 28, 2021 at 08:49 PM
-- Server version: 5.7.24
-- PHP Version: 7.4.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `restorant`
--

-- --------------------------------------------------------

--
-- Table structure for table `bills`
--

CREATE TABLE `bills` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order_id` bigint(20) UNSIGNED NOT NULL,
  `amount` decimal(6,2) NOT NULL,
  `payment_type` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bills`
--

INSERT INTO `bills` (`id`, `order_id`, `amount`, `payment_type`, `created_at`, `updated_at`) VALUES
(1, 1, '20.00', 1, '2021-01-21 13:01:37', '2021-01-21 13:01:37'),
(2, 18, '32.00', 1, '2021-01-24 20:27:41', '2021-01-24 20:27:41'),
(3, 3, '8.00', 1, '2021-01-24 20:28:23', '2021-01-24 20:28:23'),
(4, 19, '4.00', 1, '2021-01-24 20:28:38', '2021-01-24 20:28:38'),
(5, 0, '0.00', 1, '2021-01-24 20:46:20', '2021-01-24 20:46:20'),
(6, 20, '20.00', 1, '2021-01-24 20:46:37', '2021-01-24 20:46:37'),
(7, 22, '16.00', 1, '2021-01-24 21:20:01', '2021-01-24 21:20:01'),
(8, 23, '4.00', 1, '2021-01-24 21:20:33', '2021-01-24 21:20:33'),
(9, 24, '56.00', 1, '2021-01-24 21:21:44', '2021-01-24 21:21:44'),
(10, 25, '2.00', 1, '2021-01-25 22:46:27', '2021-01-25 22:46:27'),
(11, 26, '52.00', 1, '2021-01-25 23:30:11', '2021-01-25 23:30:11'),
(12, 27, '62.00', 1, '2021-01-25 23:35:51', '2021-01-25 23:35:51'),
(13, 28, '16.00', 1, '2021-01-26 15:30:54', '2021-01-26 15:30:54'),
(14, 30, '4.00', 1, '2021-01-27 08:43:25', '2021-01-27 08:43:25'),
(15, 31, '0.00', 1, '2021-01-27 09:37:54', '2021-01-27 09:37:54'),
(16, 32, '0.00', 1, '2021-01-27 09:39:16', '2021-01-27 09:39:16'),
(17, 38, '30.00', 1, '2021-01-27 15:39:53', '2021-01-27 15:39:53'),
(18, 34, '14.00', 1, '2021-01-27 22:00:15', '2021-01-27 22:00:15'),
(19, 41, '4.00', 1, '2021-01-28 08:20:53', '2021-01-28 08:20:53'),
(20, 48, '2.00', 1, '2021-01-28 10:52:32', '2021-01-28 10:52:32'),
(21, 2, '114.00', 1, '2021-01-28 10:52:39', '2021-01-28 10:52:39'),
(22, 49, '20.00', 1, '2021-01-28 15:10:11', '2021-01-28 15:10:11'),
(23, 50, '8.00', 1, '2021-01-28 17:35:50', '2021-01-28 17:35:50');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Mëngjesi', '2021-01-19 21:53:25', '2021-01-19 21:53:25'),
(2, 'Senduiq', '2021-01-19 21:53:25', '2021-01-19 21:53:25'),
(3, 'Burgers', '2021-01-19 21:53:25', '2021-01-19 21:53:25'),
(4, 'Pizza', '2021-01-19 21:53:25', '2021-01-19 21:53:25'),
(5, 'Pasta', '2021-01-28 13:21:11', '2021-01-28 13:21:11'),
(6, 'Risoto', '2021-01-28 13:21:11', '2021-01-28 13:21:11'),
(7, 'Mish Zgare', '2021-01-28 13:21:11', '2021-01-28 13:21:11'),
(8, 'Pije të Nxehta', NULL, NULL),
(9, 'Pifje Freskuese', NULL, NULL);

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
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ingredients`
--

CREATE TABLE `ingredients` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ingredients`
--

INSERT INTO `ingredients` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Proshutë', NULL, NULL),
(2, 'Suxhuk', NULL, NULL),
(3, 'Perime', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` decimal(6,2) NOT NULL,
  `stock` int(11) NOT NULL,
  `prepared` tinyint(4) NOT NULL DEFAULT '1',
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`id`, `name`, `image`, `price`, `stock`, `prepared`, `category_id`, `created_at`, `updated_at`) VALUES
(1, 'Omlet Naturale', 'img-19.jpg', '2.00', 10, 1, 1, '2021-01-19 21:53:25', '2021-01-28 09:07:13'),
(2, 'Omletë Naturale2', 'img-19.jpg', '4.00', 10, 1, 1, '2021-01-19 21:53:25', '2021-01-28 10:09:17'),
(3, 'Omlet Proshute2', 'img-19.jpg', '6.00', 10, 1, 1, '2021-01-19 21:53:25', '2021-01-19 21:53:25'),
(4, 'Omlet Vegjetarian2', 'img-19.jpg', '8.00', 10, 1, 1, '2021-01-19 21:53:25', '2021-01-19 21:53:25'),
(5, 'Senduiq me Pershute\r\n', 'img-20.jpg', '10.00', 10, 1, 2, '2021-01-19 21:53:25', '2021-01-19 21:53:25'),
(6, 'Senduiq\r\n\r\n', 'img-20.jpg', '12.00', 10, 1, 2, '2021-01-19 21:53:25', '2021-01-19 21:53:25'),
(7, 'Senduiq2\r\n\r\n', 'img-20.jpg', '14.00', 10, 1, 2, '2021-01-19 21:53:25', '2021-01-19 21:53:25'),
(8, 'Senduiq3\r\n\r\n', 'img-8.jpg', '16.00', 10, 1, 2, '2021-01-19 21:53:25', '2021-01-19 21:53:25'),
(9, 'Burger Klasik1', 'img-3.jpg', '18.00', 10, 1, 3, '2021-01-19 21:53:25', '2021-01-19 21:53:25'),
(10, 'Burger', 'img-3.jpg', '20.00', 10, 1, 3, '2021-01-19 21:53:25', '2021-01-19 21:53:25'),
(11, 'Burger me Vezë', 'img-3.jpg', '22.00', 10, 1, 3, '2021-01-19 21:53:25', '2021-01-19 21:53:25'),
(12, 'Burger me Vezë2', 'img-3.jpg', '24.00', 10, 1, 3, '2021-01-19 21:53:25', '2021-01-19 21:53:25'),
(13, 'test13', 'img-13.jpg', '26.00', 10, 1, 4, '2021-01-19 21:53:25', '2021-01-19 21:53:25'),
(14, 'test14', 'img-14.jpg', '28.00', 10, 1, 4, '2021-01-19 21:53:25', '2021-01-19 21:53:25'),
(15, 'test15', 'img-15.jpg', '30.00', 10, 1, 4, '2021-01-19 21:53:25', '2021-01-19 21:53:25'),
(16, 'test16', 'img-16.jpg', '32.00', 10, 1, 4, '2021-01-19 21:53:25', '2021-01-19 21:53:25'),
(17, 'Omlet Naturale', 'img-17.jpg', '2.00', 10, 1, 1, '2021-01-28 12:41:37', '2021-01-28 12:41:37'),
(18, 'Omlet Proshute', 'img-18.jpg', '2.20', 10, 1, 1, '2021-01-28 12:42:32', '2021-01-28 12:42:32'),
(19, 'Omlet Vegjetarian', 'img-19.jpg', '2.20', 10, 1, 1, '2021-01-28 12:43:37', '2021-01-28 12:43:37'),
(20, 'Senduiq me Pershute', 'img-20.jpg', '2.00', 10, 1, 2, '2021-01-28 12:54:27', '2021-01-28 12:54:27'),
(21, 'Senduiq Pule Mix', 'img-21.jpg', '2.20', 10, 1, 2, '2021-01-28 12:55:25', '2021-01-28 12:55:25'),
(22, 'Burger Klasik', 'img-20.jpg', '2.20', 10, 1, 3, '2021-01-28 12:57:29', '2021-01-28 12:57:29'),
(23, 'Burger me Vezë', 'img-17.jpg', '2.20', 10, 1, 3, '2021-01-28 12:58:00', '2021-01-28 12:58:00'),
(24, 'Pizza Margarita', 'img-17.jpg', '3.00', 10, 1, 4, '2021-01-28 12:59:07', '2021-01-28 12:59:07'),
(25, 'Pizza Pershute', 'img-17.jpg', '3.50', 10, 1, 4, '2021-01-28 12:59:59', '2021-01-28 12:59:59'),
(26, 'Kakiato e madhe', 'img-1.jpg', '1.00', 10, 1, 8, '2021-01-28 13:04:38', '2021-01-28 13:04:38'),
(27, 'Makiateo e Vogel', 'img-1.jpg', '70.00', 10, 1, 8, '2021-01-28 13:05:15', '2021-01-28 13:05:15'),
(28, 'Caj Mali', 'img-1.jpg', '1.00', 10, 1, 8, '2021-01-28 13:05:51', '2021-01-28 13:05:51'),
(29, 'Cocacola', 'img-1.jpg', '1.00', 30, 0, 9, '2021-01-28 13:06:28', '2021-01-28 13:06:28');

-- --------------------------------------------------------

--
-- Table structure for table `item_ingredients`
--

CREATE TABLE `item_ingredients` (
  `ingredient_id` bigint(20) UNSIGNED NOT NULL,
  `item_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `item_orders`
--

CREATE TABLE `item_orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order_id` bigint(20) UNSIGNED NOT NULL,
  `item_id` bigint(20) UNSIGNED NOT NULL,
  `quantity` int(11) NOT NULL,
  `start_time` time DEFAULT NULL,
  `end_time` time DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `item_orders`
--

INSERT INTO `item_orders` (`id`, `order_id`, `item_id`, `quantity`, `start_time`, `end_time`, `created_at`, `updated_at`) VALUES
(1, 1, 3, 2, NULL, NULL, '2021-01-21 09:18:57', '2021-01-21 09:19:01'),
(2, 1, 2, 1, NULL, NULL, '2021-01-23 18:16:31', '2021-01-23 18:16:31'),
(3, 3, 2, 2, NULL, NULL, '2021-01-23 18:34:06', '2021-01-23 18:35:59'),
(7, 4, 1, 1, '08:25:39', '08:25:47', '2021-01-23 19:48:17', '2021-01-25 19:25:47'),
(8, 5, 1, 1, NULL, NULL, '2021-01-23 19:48:38', '2021-01-23 19:48:38'),
(9, 6, 1, 1, NULL, NULL, '2021-01-23 19:48:43', '2021-01-23 19:48:43'),
(10, 7, 2, 1, NULL, NULL, '2021-01-23 19:48:56', '2021-01-23 19:48:56'),
(11, 8, 1, 1, NULL, NULL, '2021-01-23 19:48:59', '2021-01-23 19:48:59'),
(12, 9, 1, 1, NULL, NULL, '2021-01-23 19:54:50', '2021-01-23 19:54:50'),
(13, 10, 1, 1, NULL, NULL, '2021-01-23 19:55:00', '2021-01-23 19:55:00'),
(14, 11, 1, 1, NULL, NULL, '2021-01-23 19:55:08', '2021-01-23 19:55:08'),
(15, 12, 1, 1, NULL, NULL, '2021-01-23 20:01:20', '2021-01-23 20:01:20'),
(16, 13, 1, 1, NULL, NULL, '2021-01-23 20:02:36', '2021-01-23 20:02:36'),
(17, 14, 1, 1, NULL, NULL, '2021-01-23 20:04:39', '2021-01-23 20:04:39'),
(18, 15, 1, 1, NULL, NULL, '2021-01-23 20:08:52', '2021-01-23 20:08:52'),
(19, 16, 1, 1, NULL, NULL, '2021-01-23 20:09:05', '2021-01-23 20:09:05'),
(20, 17, 1, 1, NULL, NULL, '2021-01-23 20:09:10', '2021-01-23 20:09:10'),
(21, 18, 2, 1, '04:43:55', NULL, '2021-01-24 08:37:31', '2021-01-26 15:43:55'),
(22, 18, 8, 2, NULL, NULL, '2021-01-24 15:02:25', '2021-01-24 15:02:28'),
(23, 19, 2, 1, NULL, NULL, '2021-01-24 20:28:04', '2021-01-24 20:28:04'),
(24, 20, 8, 1, NULL, NULL, '2021-01-24 20:46:12', '2021-01-24 20:46:12'),
(25, 20, 10, 1, NULL, NULL, '2021-01-24 20:46:16', '2021-01-24 20:46:16'),
(26, 21, 1, 1, NULL, NULL, '2021-01-24 20:47:26', '2021-01-24 20:47:26'),
(27, 21, 8, 2, NULL, NULL, '2021-01-24 20:47:28', '2021-01-24 20:47:29'),
(28, 22, 8, 1, NULL, NULL, '2021-01-24 20:48:53', '2021-01-24 20:48:53'),
(29, 23, 1, 1, NULL, NULL, '2021-01-24 21:20:07', '2021-01-24 21:20:07'),
(30, 23, 8, 4, NULL, NULL, '2021-01-24 21:20:20', '2021-01-24 21:20:25'),
(31, 23, 9, 1, NULL, NULL, '2021-01-24 21:20:20', '2021-01-24 21:20:20'),
(32, 23, 3, 1, NULL, NULL, '2021-01-24 21:20:21', '2021-01-24 21:20:21'),
(33, 23, 2, 1, NULL, NULL, '2021-01-24 21:20:21', '2021-01-24 21:20:21'),
(34, 24, 8, 1, NULL, NULL, '2021-01-24 21:21:35', '2021-01-24 21:21:35'),
(35, 24, 9, 1, NULL, NULL, '2021-01-24 21:21:35', '2021-01-24 21:21:35'),
(36, 24, 2, 1, NULL, NULL, '2021-01-24 21:21:36', '2021-01-24 21:21:36'),
(37, 24, 3, 3, NULL, NULL, '2021-01-24 21:21:37', '2021-01-24 21:21:39'),
(38, 25, 1, 1, NULL, NULL, '2021-01-25 22:46:22', '2021-01-25 22:46:22'),
(39, 26, 8, 2, NULL, NULL, '2021-01-25 23:29:55', '2021-01-25 23:29:58'),
(41, 26, 10, 1, '04:44:32', NULL, '2021-01-25 23:30:03', '2021-01-26 15:44:32'),
(42, 27, 7, 1, '04:44:31', NULL, '2021-01-25 23:35:38', '2021-01-26 15:44:31'),
(43, 27, 8, 3, '04:44:25', '04:44:48', '2021-01-25 23:35:39', '2021-01-26 15:44:48'),
(45, 28, 2, 1, '04:44:22', '04:44:44', '2021-01-26 15:28:41', '2021-01-26 15:44:44'),
(46, 28, 3, 2, '04:44:19', '04:44:40', '2021-01-26 15:28:42', '2021-01-26 15:44:40'),
(48, 30, 2, 1, NULL, NULL, '2021-01-27 08:43:20', '2021-01-27 08:43:20'),
(53, 34, 7, 1, '06:37:23', '06:37:30', '2021-01-27 15:28:24', '2021-01-28 17:37:30'),
(58, 38, 7, 1, NULL, NULL, '2021-01-27 15:39:44', '2021-01-27 15:39:44'),
(59, 38, 8, 1, NULL, NULL, '2021-01-27 15:39:45', '2021-01-27 15:39:45'),
(65, 41, 2, 1, NULL, NULL, '2021-01-28 08:20:49', '2021-01-28 08:20:49'),
(67, 47, 1, 1, NULL, NULL, '2021-01-28 09:07:02', '2021-01-28 09:07:02'),
(68, 48, 1, 1, NULL, NULL, '2021-01-28 09:07:13', '2021-01-28 09:07:13'),
(69, 2, 2, 1, '01:13:39', '01:13:42', '2021-01-28 10:08:38', '2021-01-28 12:13:42'),
(70, 2, 5, 11, '01:13:29', '01:13:33', '2021-01-28 10:09:43', '2021-01-28 12:13:33'),
(71, 49, 5, 2, NULL, NULL, '2021-01-28 15:08:28', '2021-01-28 15:09:30'),
(72, 50, 1, 2, NULL, NULL, '2021-01-28 16:02:42', '2021-01-28 17:35:01'),
(73, 50, 2, 1, NULL, NULL, '2021-01-28 16:02:43', '2021-01-28 16:02:43'),
(74, 51, 2, 1, NULL, NULL, '2021-01-28 17:36:00', '2021-01-28 17:36:00');

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
(53, '2014_10_12_000000_create_users_table', 1),
(54, '2014_10_12_100000_create_password_resets_table', 1),
(55, '2019_08_19_000000_create_failed_jobs_table', 1),
(56, '2021_01_02_131258_create_reservations_table', 1),
(57, '2021_01_02_131453_create_tables_table', 1),
(58, '2021_01_02_131519_create_orders_table', 1),
(59, '2021_01_02_131543_create_bills_table', 1),
(60, '2021_01_02_131609_create_items_table', 1),
(61, '2021_01_02_131639_create_categories_table', 1),
(62, '2021_01_02_131723_create_ingredients_table', 1),
(63, '2021_01_02_223006_create_item_orders_table', 1),
(64, '2021_01_02_223850_create_item_ingredients_table', 1),
(65, '2021_01_03_203812_create_permission_tables', 1);

-- --------------------------------------------------------

--
-- Table structure for table `model_has_permissions`
--

CREATE TABLE `model_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `model_has_roles`
--

CREATE TABLE `model_has_roles` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `model_has_roles`
--

INSERT INTO `model_has_roles` (`role_id`, `model_type`, `model_id`) VALUES
(1, 'App\\Models\\User', 1),
(2, 'App\\Models\\User', 2),
(3, 'App\\Models\\User', 3),
(4, 'App\\Models\\User', 4),
(4, 'App\\Models\\User', 5),
(4, 'App\\Models\\User', 6),
(4, 'App\\Models\\User', 7),
(4, 'App\\Models\\User', 8),
(4, 'App\\Models\\User', 9),
(2, 'App\\Models\\User', 10),
(2, 'App\\Models\\User', 11),
(2, 'App\\Models\\User', 12),
(2, 'App\\Models\\User', 13);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `waiter_id` bigint(20) UNSIGNED NOT NULL,
  `chef_id` bigint(20) UNSIGNED NOT NULL,
  `table_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `waiter_id`, `chef_id`, `table_id`, `created_at`, `updated_at`) VALUES
(1, 2, 0, 1, '2021-01-19 21:53:25', '2021-01-19 21:53:25'),
(2, 2, 3, 1, '2021-01-19 21:53:25', '2021-01-19 21:53:25'),
(3, 2, 1, 3, '2021-01-21 16:09:18', '2021-01-21 16:09:18'),
(4, 2, 0, 2, '2021-01-23 19:48:11', '2021-01-23 19:48:11'),
(5, 2, 0, 2, '2021-01-23 19:48:38', '2021-01-23 19:48:38'),
(6, 2, 0, 2, '2021-01-23 19:48:43', '2021-01-23 19:48:43'),
(7, 2, 0, 2, '2021-01-23 19:48:56', '2021-01-23 19:48:56'),
(8, 2, 0, 2, '2021-01-23 19:48:59', '2021-01-23 19:48:59'),
(9, 2, 0, 2, '2021-01-23 19:54:50', '2021-01-23 19:54:50'),
(10, 2, 0, 2, '2021-01-23 19:55:00', '2021-01-23 19:55:00'),
(11, 2, 0, 2, '2021-01-23 19:55:08', '2021-01-23 19:55:08'),
(12, 2, 0, 2, '2021-01-23 20:01:20', '2021-01-23 20:01:20'),
(13, 2, 0, 2, '2021-01-23 20:02:36', '2021-01-23 20:02:36'),
(14, 2, 0, 2, '2021-01-23 20:04:39', '2021-01-23 20:04:39'),
(15, 2, 0, 2, '2021-01-23 20:08:52', '2021-01-23 20:08:52'),
(16, 2, 0, 2, '2021-01-23 20:09:05', '2021-01-23 20:09:05'),
(17, 2, 0, 2, '2021-01-23 20:09:10', '2021-01-23 20:09:10'),
(18, 2, 0, 2, '2021-01-23 20:09:54', '2021-01-23 20:09:54'),
(19, 2, 0, 2, '2021-01-24 20:28:04', '2021-01-24 20:28:04'),
(20, 2, 0, 2, '2021-01-24 20:46:12', '2021-01-24 20:46:12'),
(21, 2, 0, 2, '2021-01-24 20:47:26', '2021-01-24 20:47:26'),
(22, 2, 0, 2, '2021-01-24 20:48:53', '2021-01-24 20:48:53'),
(23, 2, 0, 2, '2021-01-24 21:20:07', '2021-01-24 21:20:07'),
(24, 2, 0, 2, '2021-01-24 21:21:35', '2021-01-24 21:21:35'),
(25, 2, 0, 2, '2021-01-25 22:46:22', '2021-01-25 22:46:22'),
(26, 4, 0, 2, '2021-01-25 23:29:55', '2021-01-25 23:29:55'),
(27, 4, 0, 3, '2021-01-25 23:35:38', '2021-01-25 23:35:38'),
(28, 4, 0, 2, '2021-01-26 15:28:30', '2021-01-26 15:28:30'),
(30, 4, 0, 3, '2021-01-27 08:43:20', '2021-01-27 08:43:20'),
(31, 4, 0, 3, '2021-01-27 09:37:48', '2021-01-27 09:37:48'),
(32, 4, 0, 3, '2021-01-27 09:38:38', '2021-01-27 09:38:38'),
(34, 4, 0, 2, '2021-01-27 15:28:24', '2021-01-27 15:28:24'),
(38, 4, 0, 3, '2021-01-27 15:39:44', '2021-01-27 15:39:44'),
(39, 4, 0, 2, '2021-01-28 07:33:50', '2021-01-28 07:33:50'),
(40, 4, 0, 2, '2021-01-28 07:34:15', '2021-01-28 07:34:15'),
(41, 4, 0, 2, '2021-01-28 07:34:39', '2021-01-28 07:34:39'),
(46, 4, 0, 2, '2021-01-28 09:02:05', '2021-01-28 09:02:05'),
(47, 4, 0, 2, '2021-01-28 09:07:02', '2021-01-28 09:07:02'),
(48, 2, 0, 2, '2021-01-28 09:07:13', '2021-01-28 09:07:13'),
(49, 2, 0, 1, '2021-01-28 15:08:28', '2021-01-28 15:08:28'),
(50, 2, 0, 1, '2021-01-28 16:02:42', '2021-01-28 16:02:42'),
(51, 2, 0, 1, '2021-01-28 17:36:00', '2021-01-28 17:36:00');

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
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `reservations`
--

CREATE TABLE `reservations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `fullname` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone_number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guest_number` int(11) NOT NULL,
  `date_time` datetime NOT NULL,
  `comment` text COLLATE utf8mb4_unicode_ci,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `table_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `reservations`
--

INSERT INTO `reservations` (`id`, `fullname`, `email`, `phone_number`, `guest_number`, `date_time`, `comment`, `user_id`, `table_id`, `created_at`, `updated_at`) VALUES
(1, 'test', 'uz@uz', '123', 12, '2021-01-20 10:22:24', '', 1, 1, '2021-01-20 10:22:24', '2021-01-20 10:22:24'),
(2, 'test', 'test@test', '123', 12, '2021-01-20 10:11:19', 'testsetset', 1, 1, '2021-01-20 14:11:19', '2021-01-20 14:11:19'),
(3, NULL, NULL, '123', 12, '2021-01-21 09:30:00', NULL, 1, NULL, '2021-01-20 16:13:52', '2021-01-20 16:13:52'),
(4, NULL, NULL, '123', 12, '2021-01-21 09:30:00', NULL, 1, NULL, '2021-01-20 16:18:15', '2021-01-20 16:18:15'),
(5, NULL, NULL, '123', 12, '2021-01-21 09:30:00', NULL, 1, NULL, '2021-01-20 16:18:33', '2021-01-20 16:18:33'),
(6, NULL, NULL, '123', 12, '2021-01-21 09:30:00', NULL, 1, NULL, '2021-01-20 16:18:46', '2021-01-20 16:18:46'),
(7, NULL, NULL, '123', 12, '2021-01-21 18:30:00', NULL, 1, NULL, '2021-01-20 16:20:16', '2021-01-20 16:20:16'),
(8, NULL, NULL, '123456789', 12, '2021-01-22 09:30:00', NULL, 1, NULL, '2021-01-20 18:13:09', '2021-01-20 18:13:09'),
(9, NULL, NULL, '123456789', 12, '2021-01-29 09:30:00', NULL, 1, NULL, '2021-01-20 18:14:27', '2021-01-20 18:14:27'),
(10, NULL, NULL, '123456789', 12, '2021-01-29 09:30:00', NULL, 1, NULL, '2021-01-20 18:19:55', '2021-01-20 18:19:55'),
(11, NULL, NULL, '123456789', 12, '2021-01-31 09:30:00', NULL, 1, NULL, '2021-01-20 18:22:56', '2021-01-20 18:22:56'),
(12, NULL, NULL, '123456789', 12, '2021-01-28 09:30:00', NULL, 1, NULL, '2021-01-20 19:28:04', '2021-01-20 19:28:04'),
(13, NULL, NULL, '123456789', 12, '2021-01-30 09:30:00', NULL, 1, NULL, '2021-01-20 19:28:34', '2021-01-20 19:28:34'),
(14, NULL, NULL, '123456789', 12, '2021-01-23 09:30:00', 'testtest', 1, NULL, '2021-01-20 19:29:30', '2021-01-20 19:29:30'),
(15, NULL, NULL, '123456789', 12, '2021-02-05 09:30:00', NULL, 1, 1, '2021-01-21 09:18:18', '2021-01-25 19:27:45'),
(16, NULL, NULL, '123456789', 12, '2021-01-26 09:30:00', 'tewt', 1, NULL, '2021-01-26 07:31:53', '2021-01-26 07:31:53'),
(17, NULL, NULL, '123456789', 12, '2021-01-27 09:30:00', NULL, 1, NULL, '2021-01-26 10:55:17', '2021-01-26 10:55:17'),
(18, NULL, NULL, '123456789', 12, '2021-01-28 10:40:00', NULL, 1, 2, '2021-01-26 11:00:32', '2021-01-26 11:00:32'),
(19, NULL, NULL, '123456789', 12, '2021-01-27 23:40:48', NULL, 1, 1, '2021-01-26 15:27:27', '2021-01-26 15:30:04'),
(20, NULL, NULL, '1234567897', 12, '2021-01-28 10:30:00', NULL, 4, NULL, '2021-01-28 15:03:14', '2021-01-28 15:03:14'),
(21, NULL, NULL, '1234567897', 3, '2021-01-28 19:50:00', NULL, 4, 5, '2021-01-28 15:04:35', '2021-01-28 15:05:44'),
(22, NULL, NULL, '1234567897', 2, '2021-01-29 09:30:00', NULL, 4, 7, '2021-01-28 17:30:45', '2021-01-28 17:32:01');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'web', '2021-01-19 21:53:25', '2021-01-19 21:53:25'),
(2, 'Waiter', 'web', '2021-01-19 21:53:25', '2021-01-19 21:53:25'),
(3, 'Chief', 'web', '2021-01-19 21:53:25', '2021-01-19 21:53:25'),
(4, 'Client', 'web', '2021-01-19 21:53:25', '2021-01-19 21:53:25');

-- --------------------------------------------------------

--
-- Table structure for table `role_has_permissions`
--

CREATE TABLE `role_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `states`
--

CREATE TABLE `states` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `balance` decimal(6,2) NOT NULL,
  `orders` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `states`
--

INSERT INTO `states` (`id`, `created_at`, `updated_at`, `balance`, `orders`) VALUES
(1, '2021-01-13 21:01:18', '2021-01-13 21:01:18', '150.00', 10),
(2, '2020-04-14 17:51:39', '2020-04-14 10:23:01', '300.00', 20);

-- --------------------------------------------------------

--
-- Table structure for table `tables`
--

CREATE TABLE `tables` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `table_no` int(11) NOT NULL,
  `order_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tables`
--

INSERT INTO `tables` (`id`, `table_no`, `order_id`, `created_at`, `updated_at`) VALUES
(1, 1, NULL, '2021-01-20 08:57:06', '2021-01-20 10:57:06'),
(2, 2, NULL, '2021-01-20 13:53:15', '2021-01-20 13:53:15'),
(3, 3, NULL, '2021-01-21 16:01:03', '2021-01-21 16:01:03'),
(4, 4, NULL, '2021-01-28 08:15:01', '2021-01-28 08:15:01'),
(5, 5, NULL, '2021-01-28 08:15:01', '2021-01-28 08:15:01'),
(6, 6, NULL, '2021-01-28 08:15:01', '2021-01-28 08:15:01'),
(7, 7, NULL, '2021-01-28 08:15:01', '2021-01-28 08:15:01'),
(8, 8, NULL, '2021-01-28 08:15:01', '2021-01-28 08:15:01'),
(9, 9, NULL, '2021-01-28 08:15:01', '2021-01-28 08:15:01'),
(10, 10, NULL, '2021-01-28 08:15:01', '2021-01-28 08:15:01'),
(11, 11, NULL, '2021-01-28 08:15:01', '2021-01-28 08:15:01'),
(12, 12, NULL, '2021-01-28 08:15:01', '2021-01-28 08:15:01'),
(13, 13, NULL, '2021-01-28 08:15:01', '2021-01-28 08:15:01'),
(14, 14, NULL, '2021-01-28 08:15:01', '2021-01-28 08:15:01'),
(15, 15, NULL, '2021-01-28 08:15:01', '2021-01-28 08:15:01'),
(16, 16, NULL, '2021-01-28 08:15:01', '2021-01-28 08:15:01'),
(17, 17, NULL, '2021-01-28 08:15:01', '2021-01-28 08:15:01'),
(18, 18, NULL, '2021-01-28 08:15:01', '2021-01-28 08:15:01'),
(19, 19, NULL, '2021-01-28 08:15:01', '2021-01-28 08:15:01'),
(20, 20, NULL, '2021-01-28 08:15:01', '2021-01-28 08:15:01');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `personal_number` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone_number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `active` smallint(6) NOT NULL DEFAULT '1',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `photo`, `personal_number`, `phone_number`, `active`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin1', 'admin1@admin', NULL, '$2y$10$3ZksIJbcEnSTGrDZVQAKB.RrqK.H2laDFrM5AviFhLOPwfM4nQubu', 'photo', '1234567897', '123456789', 1, NULL, '2021-01-19 21:53:25', '2021-01-19 21:53:25'),
(2, 'Kamarier1', 'kamarier1@kamarier', NULL, '$2y$10$3ZksIJbcEnSTGrDZVQAKB.RrqK.H2laDFrM5AviFhLOPwfM4nQubu', 'photo', '1234567897', '123456789', 1, NULL, '2021-01-19 21:53:25', '2021-01-19 21:53:25'),
(3, 'Kuzhinjer1', 'kuzhnjer1@kuzhinjer', NULL, '$2y$10$oRlsX8eVUp5h4Bv3EkUfqunSmiEBdv38tn67LOBGpNtW6xy0YZmV2', 'photo', '1234567897', '123456789', 1, NULL, '2021-01-19 21:53:25', '2021-01-19 21:53:25'),
(4, 'User1', 'user1@user', NULL, '$2y$10$oRlsX8eVUp5h4Bv3EkUfqunSmiEBdv38tn67LOBGpNtW6xy0YZmV2', NULL, NULL, '1234567897', 1, NULL, '2021-01-19 22:56:55', '2021-01-19 22:56:55'),
(5, 'User2', 'user2@user', NULL, '$2y$10$oRlsX8eVUp5h4Bv3EkUfqunSmiEBdv38tn67LOBGpNtW6xy0YZmV2', NULL, '123456789', '123456789', 1, NULL, '2021-01-28 11:31:01', '2021-01-28 11:31:01'),
(6, 'User3', 'user3@user', NULL, '$2y$10$oRlsX8eVUp5h4Bv3EkUfqunSmiEBdv38tn67LOBGpNtW6xy0YZmV2', NULL, '123456789', '123456789', 1, NULL, '2021-01-28 11:31:01', '2021-01-28 11:31:01'),
(7, 'User4', 'user4@user', NULL, '$2y$10$oRlsX8eVUp5h4Bv3EkUfqunSmiEBdv38tn67LOBGpNtW6xy0YZmV2', NULL, '123456789', '123456789', 1, NULL, '2021-01-28 11:31:01', '2021-01-28 11:31:01'),
(8, 'User5', 'user5@user', NULL, '$2y$10$oRlsX8eVUp5h4Bv3EkUfqunSmiEBdv38tn67LOBGpNtW6xy0YZmV2', NULL, '123456789', '123456789', 1, NULL, '2021-01-28 11:31:01', '2021-01-28 11:31:01'),
(9, 'User6', 'user6@user', NULL, '$2y$10$oRlsX8eVUp5h4Bv3EkUfqunSmiEBdv38tn67LOBGpNtW6xy0YZmV2', NULL, '123456789', '123456789', 1, NULL, '2021-01-28 11:31:01', '2021-01-28 11:31:01'),
(10, 'Kamarier2', 'kamarier2@kamarier', NULL, '$2y$10$3ZksIJbcEnSTGrDZVQAKB.RrqK.H2laDFrM5AviFhLOPwfM4nQubu', NULL, '1234567897', '123456789', 1, NULL, '2021-01-28 11:33:38', '2021-01-28 11:33:38'),
(11, 'Kamarier3', 'kamarier3@kamarier', NULL, '$2y$10$3ZksIJbcEnSTGrDZVQAKB.RrqK.H2laDFrM5AviFhLOPwfM4nQubu', NULL, '1234567897', '123456789', 1, NULL, '2021-01-28 11:33:38', '2021-01-28 11:33:38'),
(12, 'Kamarier4', 'kamarier4@kamarier', NULL, '$2y$10$3ZksIJbcEnSTGrDZVQAKB.RrqK.H2laDFrM5AviFhLOPwfM4nQubu', NULL, '1234567897', '123456789', 1, NULL, '2021-01-28 11:33:38', '2021-01-28 11:33:38'),
(13, 'Kamarier5', 'kamarier5@kamarier', NULL, '$2y$10$3ZksIJbcEnSTGrDZVQAKB.RrqK.H2laDFrM5AviFhLOPwfM4nQubu', NULL, '1234567897', '123456789', 1, NULL, '2021-01-28 11:33:38', '2021-01-28 11:33:38');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bills`
--
ALTER TABLE `bills`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD KEY `categories_name_index` (`name`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `ingredients`
--
ALTER TABLE `ingredients`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `item_orders`
--
ALTER TABLE `item_orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  ADD KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  ADD KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reservations`
--
ALTER TABLE `reservations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `role_has_permissions_role_id_foreign` (`role_id`);

--
-- Indexes for table `states`
--
ALTER TABLE `states`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tables`
--
ALTER TABLE `tables`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `bills`
--
ALTER TABLE `bills`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ingredients`
--
ALTER TABLE `ingredients`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `item_orders`
--
ALTER TABLE `item_orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=75;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `reservations`
--
ALTER TABLE `reservations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tables`
--
ALTER TABLE `tables`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
