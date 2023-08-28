-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 28, 2023 at 03:14 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `emailservice`
--

-- --------------------------------------------------------

--
-- Table structure for table `emailrecords`
--

CREATE TABLE `emailrecords` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `recipient_email` varchar(255) NOT NULL,
  `email_template` varchar(5000) NOT NULL,
  `time_sent` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `emailrecords`
--

INSERT INTO `emailrecords` (`id`, `recipient_email`, `email_template`, `time_sent`, `created_at`, `updated_at`) VALUES
(1, 'joshuaadedoyin2@gmail.com', 'Certainly! Here\'s a short and welcoming message for new sign-ups: Welcome aboard! 🚀 We\'re thrilled to have you as part of our community. Get ready for an amazing journey with us. If you ever need assistance or have any questions, don\'t hesitate to reach out. Happy exploring!', '2023-08-28 11:00:06', '2023-08-28 11:00:06', '2023-08-28 11:00:06'),
(2, 'joshuaadedoyin2@gmail.com', 'Certainly! Here\'s a short and welcoming message for new sign-ups: Welcome aboard! 🚀 We\'re thrilled to have you as part of our community. Get ready for an amazing journey with us. If you ever need assistance or have any questions, don\'t hesitate to reach out. Happy exploring!', '2023-08-28 11:02:34', '2023-08-28 11:02:34', '2023-08-28 11:02:34'),
(3, 'joshuaadedoyin2@gmail.com', 'Hey ma we are glad to welcome you to Skillsforge\"', '2023-08-28 11:49:58', '2023-08-28 11:49:58', '2023-08-28 11:49:58'),
(4, 'joshuaadedoyin2@gmail.com', 'Hey ma we are glad to welcome you to Skillsforge\"', '2023-08-28 11:51:09', '2023-08-28 11:51:09', '2023-08-28 11:51:09'),
(5, 'jgraphics73@gmail.com', 'Hey ma we are glad to welcome you to Skillsforge\"', '2023-08-28 11:51:10', '2023-08-28 11:51:10', '2023-08-28 11:51:10'),
(6, 'jflashphotography73@gmail.com', 'Hey ma we are glad to welcome you to Skillsforge\"', '2023-08-28 11:51:11', '2023-08-28 11:51:11', '2023-08-28 11:51:11');

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
-- Indexes for dumped tables
--

--
-- Indexes for table `emailrecords`
--
ALTER TABLE `emailrecords`
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
-- AUTO_INCREMENT for table `emailrecords`
--
ALTER TABLE `emailrecords`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
