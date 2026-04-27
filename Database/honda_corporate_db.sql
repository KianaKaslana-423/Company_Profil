-- phpMyAdmin SQL Dump
-- version 5.2.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 27, 2026 at 09:11 AM
-- Server version: 8.0.30
-- PHP Version: 8.3.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `honda_corporate_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `inbox`
--

CREATE TABLE `inbox` (
  `id` int NOT NULL,
  `ticket_id` varchar(50) DEFAULT NULL,
  `sender_name` varchar(100) NOT NULL,
  `sender_email` varchar(100) NOT NULL,
  `inquiry_tag` varchar(50) DEFAULT 'GENERAL',
  `message` text NOT NULL,
  `is_read` tinyint(1) DEFAULT '0',
  `status` enum('open','closed') DEFAULT 'open',
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `inbox`
--

INSERT INTO `inbox` (`id`, `ticket_id`, `sender_name`, `sender_email`, `inquiry_tag`, `message`, `is_read`, `status`, `created_at`) VALUES
(1, '#HK-99281', 'Alex Rivers', 'alex.rivers@design.com', 'NEW INQUIRY', 'I am looking to customize my new 2024 Civic Type R...', 0, 'open', '2026-04-23 23:38:52'),
(2, '#HK-99282', 'Sarah Jenkins', 'sarah.j@mail.com', 'SERVICE REQUEST', 'Scheduling first maintenance for HR-V Hybrid...', 1, 'open', '2026-04-23 23:38:52'),
(3, '#HK-99283', 'Marcus Thorne', 'marcus.t@mail.com', 'PARTS INQUIRY', 'Availability of OEM forged wheels for NSX...', 1, 'open', '2026-04-23 23:38:52'),
(4, '#HK-99284', 'Elena Rodriguez', 'elena.r@mail.com', 'TEST DRIVE', 'Confirming appointment for Accord test drive...', 1, 'open', '2026-04-23 23:38:52');

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE `pages` (
  `id` int NOT NULL,
  `title` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `content` text,
  `thumbnail_image` varchar(255) DEFAULT 'default-page.jpg',
  `status` enum('published','draft') DEFAULT 'draft',
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`id`, `title`, `slug`, `content`, `thumbnail_image`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Civic Type R - Heritage', 'civic', 'Konten sejarah Civic Type R...', 'page-civic.jpg', 'published', '2026-04-23 23:38:52', '2026-04-25 00:12:57'),
(2, 'VTEC Technology Deep-Dive', 'vtec', 'Detail teknologi mesin VTEC yang legendaris, memberikan keseimbangan sempurna antara efisiensi bahan bakar dan performa tinggi khas Honda.', 'page-vtec.jpg', 'draft', '2026-04-23 23:38:52', '2026-04-25 00:12:57'),
(3, 'Sustainable Mobility 2030', 'sustainable', 'Visi Lingkungan Honda 2030 berfokus pada pengembangan kendaraan listrik dan teknologi ramah lingkungan untuk mewujudkan masyarakat bebas karbon.', 'page-sus.jpg', 'published', '2026-04-23 23:38:52', '2026-04-25 00:12:57'),
(4, 'Winter Maintenance Guide', 'winter', 'Panduan servis musim dingin...', 'page-winter.jpg', 'published', '2026-04-23 23:38:52', '2026-04-25 00:12:57'),
(7, 'halo', 'halo', 'dimas', '1777048833_03aa7d77883cd75af59d.png', 'published', '2026-04-24 23:40:33', '2026-04-24 23:40:33'),
(9, 'rafi', 'rafi', 'test', '1777279751_02f4caaaa093a2d8ba69.jpg', 'published', '2026-04-27 15:49:11', '2026-04-27 15:49:11');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `STATUS` enum('published','Draft') DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int NOT NULL,
  `name` varchar(100) NOT NULL,
  `category` enum('automobile','motorcycle','power_equipment') DEFAULT 'automobile',
  `horsepower` int DEFAULT NULL,
  `acceleration` decimal(3,1) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `description` text,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `category`, `horsepower`, `acceleration`, `image`, `description`, `created_at`) VALUES
(1, 'NSX Type S', 'automobile', 600, 2.9, 'nsx-red.jpg', 'Experience the synergy of high-performance engineering.', '2026-04-23 23:38:52'),
(2, 'Civic Type R', 'automobile', 315, 4.9, 'civic-type-r.jpg', 'Engineered for emotion and pure driving pleasure.', '2026-04-23 23:38:52');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `foto_profil` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT 'default.png',
  `role` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT 'user',
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `name`, `foto_profil`, `role`, `created_at`, `updated_at`) VALUES
(1, 'admin@honda-cloud.com', '$2y$10$V/KfNv25sKlxgGuITND9aervYwEEL2R29t/KCdjA6m3QQuMf/28ha', 'Administrator Honda', 'default.png', 'admin', '2026-04-23 17:51:04', NULL),
(2, 'user@honda-cloud.com', '$2y$10$sFH3.JAywmy17mouxZzPv.ojdAVIj4tjhoW6eHVBpiVFaTJaH.XGi', 'Ahmad Firmansyah', '1777209767_8a5923899122b61378fe.jpg', 'user', '2026-04-24 11:37:41', '2026-04-26 06:22:47');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `inbox`
--
ALTER TABLE `inbox`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `ticket_id` (`ticket_id`);

--
-- Indexes for table `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `slug` (`slug`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `inbox`
--
ALTER TABLE `inbox`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
