-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 15, 2018 at 05:56 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ideasowners`
--

-- --------------------------------------------------------

--
-- Table structure for table `menus`
--

CREATE TABLE `menus` (
  `id` int(10) UNSIGNED NOT NULL,
  `parent_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `menus`
--

INSERT INTO `menus` (`id`, `parent_id`, `title`, `url`, `created_at`, `updated_at`) VALUES
(1, '0', 'Home', '/', NULL, NULL),
(2, '0', 'About US', '/about', NULL, NULL),
(3, '0', 'Services', '', NULL, NULL),
(5, '0', 'Portfolio', '/portfolio', NULL, NULL),
(12, '0', 'Contact Us', '/contact', NULL, NULL),
(21, '20', 'new 2', 'menu/new 2', '2018-04-11 02:34:56', '2018-04-11 02:34:56'),
(29, '28', 'l2', 'menu/l2', '2018-04-14 11:25:37', '2018-04-14 11:25:37'),
(40, '5', 'Petrolet', 'portfolio/menu/Petrolet', '2018-04-15 12:11:53', '2018-04-15 12:11:53'),
(41, '5', 'Tasaweeq', 'portfolio/menu/Tasaweeq', '2018-04-15 12:12:25', '2018-04-15 12:12:25'),
(42, '5', 'Vazzat', 'portfolio/menu/Vazzat', '2018-04-15 12:13:01', '2018-04-15 12:13:01'),
(43, '5', 'Abaty', 'portfolio/menu/Abaty', '2018-04-15 12:13:55', '2018-04-15 12:13:55'),
(44, '5', 'Home Key', 'portfolio/menu/Home Key', '2018-04-15 12:15:26', '2018-04-15 12:15:26'),
(45, '3', 'Web Development', 'services/menu/Web Development', '2018-04-15 12:18:02', '2018-04-15 12:18:02'),
(46, '3', 'Logo Design', 'services/menu/Logo Design', '2018-04-15 12:18:48', '2018-04-15 12:18:48'),
(47, '3', 'Graphic Designing', 'services/menu/Graphic Designing', '2018-04-15 12:19:47', '2018-04-15 12:19:47'),
(48, '3', 'Create Your Videos', 'services/menu/Create Your Videos', '2018-04-15 12:20:32', '2018-04-15 12:20:32');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(6, '2014_10_12_000000_create_users_table', 1),
(7, '2014_10_12_100000_create_password_resets_table', 1),
(8, '2018_03_28_051512_create_services_table', 1),
(9, '2018_03_28_051810_create_menus_table', 1),
(10, '2018_03_28_051921_create_sliders_table', 1),
(11, '2018_03_31_133301_add_column_to_services', 2),
(12, '2018_04_11_101858_create_portfolios_table', 3);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `portfolios`
--

CREATE TABLE `portfolios` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tag` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `portfolios`
--

INSERT INTO `portfolios` (`id`, `title`, `description`, `image`, `tag`, `created_at`, `updated_at`) VALUES
(9, 'Petrolet', '<p>Petrolet</p>', 'http://localhost:8000/uploads/web-5.jpeg', 'websites', '2018-04-15 12:11:53', '2018-04-15 12:11:53'),
(10, 'Tasaweeq', '<p>Tasaweeq</p>', 'http://localhost:8000/uploads/web-6.jpeg', 'websites', '2018-04-15 12:12:24', '2018-04-15 12:12:24'),
(11, 'Vazzat', '<p>Vazzat</p>', 'http://localhost:8000/uploads/web-7.jpeg', 'websites', '2018-04-15 12:13:01', '2018-04-15 12:13:01'),
(12, 'Abaty', '<p>Abaty</p>', 'http://localhost:8000/uploads/logo-3.jpeg', 'logos', '2018-04-15 12:13:55', '2018-04-15 12:13:55'),
(13, 'Home Key', '<p>Home Key</p>', 'http://localhost:8000/uploads/app-1.jpeg', 'app', '2018-04-15 12:15:26', '2018-04-15 12:15:26');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `icon` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `title`, `description`, `image`, `created_at`, `updated_at`, `icon`) VALUES
(14, 'Web Development', '<p>Web Development</p>', 'http://localhost:8000/uploads/2.jpg', '2018-04-15 12:18:02', '2018-04-15 12:18:02', 'http://localhost:8000/uploads/web.png'),
(15, 'Logo Design', '<p>Logo Design</p>', 'http://localhost:8000/uploads/logo.jpg', '2018-04-15 12:18:48', '2018-04-15 12:18:48', 'http://localhost:8000/uploads/graphic.png'),
(16, 'Graphic Designing', '<p>Graphic Designing</p>', 'http://localhost:8000/uploads/graphic.jpg', '2018-04-15 12:19:47', '2018-04-15 12:19:47', 'http://localhost:8000/uploads/graphic.png'),
(17, 'Create Your Videos', '<p>Create Your Videos</p>', 'http://localhost:8000/uploads/video.jpg', '2018-04-15 12:20:32', '2018-04-15 12:20:32', 'http://localhost:8000/uploads/videos.png');

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE `sliders` (
  `id` int(10) UNSIGNED NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`id`, `image`, `created_at`, `updated_at`) VALUES
(2, 'img/slider/2.jpg', '2018-03-28 03:23:23', '2018-03-28 03:23:23'),
(3, 'img/slider/graphic.jpg', '2018-04-08 13:07:37', '2018-04-08 13:07:37');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin@admin.com', '$2y$10$doWZSN7FVNm33hhaqPR0.evGIXekAZQi6OHuesMeKCQHDu8C036SS', 'Cdf6aFmwPBEgIbAU1VQurXtM7ILC8zsxTvISWgFw6KEDB7mYrjEDBYQcm5yH', '2018-04-15 11:46:24', '2018-04-15 11:46:24');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `menus`
--
ALTER TABLE `menus`
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
-- Indexes for table `portfolios`
--
ALTER TABLE `portfolios`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sliders`
--
ALTER TABLE `sliders`
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
-- AUTO_INCREMENT for table `menus`
--
ALTER TABLE `menus`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `portfolios`
--
ALTER TABLE `portfolios`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
