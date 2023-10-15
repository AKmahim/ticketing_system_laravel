-- phpMyAdmin SQL Dump
-- version 5.1.1deb5ubuntu1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Oct 15, 2023 at 05:53 AM
-- Server version: 8.0.34-0ubuntu0.22.04.1
-- PHP Version: 8.1.2-1ubuntu2.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gp_ticketing`
--

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `page_views`
--

CREATE TABLE `page_views` (
  `id` bigint UNSIGNED NOT NULL,
  `page_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `views` int NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `page_views`
--

INSERT INTO `page_views` (`id`, `page_name`, `views`, `created_at`, `updated_at`) VALUES
(12, 'index', 74, NULL, NULL),
(13, 'signup', 8, NULL, NULL),
(14, 'signin', 3, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `stream_editor`
--

CREATE TABLE `stream_editor` (
  `id` bigint UNSIGNED NOT NULL,
  `countdown_time` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `server_status` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `stream_editor`
--

INSERT INTO `stream_editor` (`id`, `countdown_time`, `server_status`, `created_at`, `updated_at`) VALUES
(34, NULL, 'on', '2023-10-11 15:21:07', NULL),
(35, NULL, NULL, '2023-10-12 06:28:34', NULL),
(36, NULL, 'on', '2023-10-12 06:32:18', NULL),
(37, NULL, NULL, '2023-10-14 13:10:32', NULL),
(38, NULL, 'on', '2023-10-14 13:11:27', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'bKash', 'bkashconsert@gmail.com', NULL, '$2y$10$vJ.dDem.iF8m6EBwGRrQUOSIroHMzeTaLzog7/WFS6TcgioOi9mOO', NULL, '2023-06-30 10:08:32', '2023-06-30 10:08:32');

-- --------------------------------------------------------

--
-- Table structure for table `users_ticket`
--

CREATE TABLE `users_ticket` (
  `id` int NOT NULL,
  `name` varchar(255) NOT NULL,
  `phone_number` varchar(12) NOT NULL,
  `email` varchar(255) NOT NULL,
  `date_of_birth` varchar(255) NOT NULL,
  `NID` varchar(255) NOT NULL,
  `NID_photo` varchar(255) NOT NULL,
  `fb_id` varchar(255) DEFAULT NULL,
  `occupation` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `user_photo` varchar(255) NOT NULL,
  `QRcode` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `users_ticket`
--

INSERT INTO `users_ticket` (`id`, `name`, `phone_number`, `email`, `date_of_birth`, `NID`, `NID_photo`, `fb_id`, `occupation`, `address`, `user_photo`, `QRcode`, `created_at`) VALUES
(2, 'Mirajul Islam Mahim', '01635227461', 'mdmahimhossen134@gmail.com', '2023-09-19', '49494949848', 'frontend/images/1779473898410643.png', '498', 'student', 'savar', 'frontend/images/1779473898410848.jpg', NULL, '2023-10-11 09:35:53'),
(3, 'Mirajul Islam Mahim', '01635227462', 'mdmahimhossen134@gmail.com', '1999-11-09', '49494949848', 'frontend/images/1779481001784229.png', NULL, 'student', 'savar', 'frontend/images/1779481001784382.jpg', NULL, '2023-10-11 11:28:47'),
(4, 'Mirajul Islam Mahim', '01613567054', 'mdmahimhossen134@gmail.com', '1999-10-13', '49494949848', 'frontend/images/1779481159206786.png', NULL, 'student', 'savar', 'frontend/images/1779481159206984.jpg', NULL, '2023-10-11 11:31:18'),
(5, 'mahim', '01684100800', 'rabbyfarhan@gmail.com', '1994-06-15', '49494949848', 'frontend/images/1779481409961357.png', NULL, 'Business', 'Dhannmondi', 'frontend/images/1779481409963147.jpg', NULL, '2023-10-11 11:35:17'),
(6, 'Mirajul Islam Mahim', '01686330157', 'mdmahimhossen134@gmail.com', '1999-11-09', '49494949848', 'frontend/images/1779482947779042.png', NULL, 'student', 'Dhannmondi', 'frontend/images/1779482947779204.jpg', NULL, '2023-10-11 11:59:43'),
(7, 'Mirajul Islam Mahim', '01686330158', 'mdmahimhossen134@gmail.com', '1999-11-09', '49494949848', 'frontend/images/1779483125776687.png', NULL, 'student', 'Dhannmondi', 'frontend/images/1779483125778667.jpg', NULL, '2023-10-11 12:02:33'),
(8, 'Mirajul Islam Mahim', '01635227460', 'mdmahimhossen134@gmail.com', '2023-10-11', '49494949848', 'frontend/images/1779487172867426.png', NULL, 'student', 'Dhannmondi', 'frontend/images/1779487172867832.jpg', NULL, '2023-10-11 13:06:53');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `page_views`
--
ALTER TABLE `page_views`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stream_editor`
--
ALTER TABLE `stream_editor`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `users_ticket`
--
ALTER TABLE `users_ticket`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `page_views`
--
ALTER TABLE `page_views`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `stream_editor`
--
ALTER TABLE `stream_editor`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users_ticket`
--
ALTER TABLE `users_ticket`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
