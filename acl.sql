-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 29, 2017 at 06:15 AM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `acl`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `id_roles` int(10) UNSIGNED NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_number` varchar(12) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `start_time` time NOT NULL,
  `end_time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`, `id_roles`, `address`, `phone_number`, `gender`, `start_time`, `end_time`) VALUES
(4, 'Mikan Akane', 'mikan@gmail.com', '$2y$10$eQ1hGjEnvDhhmL2nHpmzYOxt3RLTSk0szOD7BJwFLtXmku5cj6g/O', NULL, NULL, NULL, 2, 'Minato', '098765432123', 'Male', '10:30:00', '22:00:00'),
(5, 'Suika', 'suika@gmail.com', '$2y$10$eQ1hGjEnvDhhmL2nHpmzYOxt3RLTSk0szOD7BJwFLtXmku5cj6g/O', NULL, NULL, NULL, 2, 'Kyoto', '098767876543', 'Male', '08:00:00', '19:00:00'),
(6, 'Mayu', 'mayu@gmail.com', '$2y$10$eQ1hGjEnvDhhmL2nHpmzYOxt3RLTSk0szOD7BJwFLtXmku5cj6g/O', NULL, NULL, NULL, 2, 'Hakkaido', '019876543222', 'Female', '09:00:00', '22:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `id_item` int(11) NOT NULL,
  `item_name` varchar(255) COLLATE eucjpms_bin NOT NULL,
  `item_stock` int(11) NOT NULL,
  `item_price` float NOT NULL,
  `id` int(10) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=eucjpms COLLATE=eucjpms_bin;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`id_item`, `item_name`, `item_stock`, `item_price`, `id`) VALUES
(10, 'buah segar', 7, 10003, 4),
(11, 'kacang', 12, 2000, 5),
(12, 'Crepe', 12, 20000, 4),
(14, 'Peach', 8, 20000, 5),
(15, 'Berries', 10, 10000, 4),
(16, 'jelly', 96, 1000, 4),
(17, 'Burger', 45, 20000, 4),
(18, 'Blueberry', 11, 20000, 6),
(19, 'Burger', 45, 12000, 5),
(20, 'Nasi Goreng', 12, 12000, 4),
(21, 'Kopi Pahit', 23, 289999, 4);

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2017_08_08_150753_create_admins_table', 2);

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
-- Table structure for table `reservations`
--

CREATE TABLE `reservations` (
  `id_reservation` int(11) NOT NULL,
  `id` int(10) UNSIGNED NOT NULL,
  `reservation_date` datetime NOT NULL,
  `id_admin` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reservations`
--

INSERT INTO `reservations` (`id_reservation`, `id`, `reservation_date`, `id_admin`) VALUES
(1, 21, '2017-08-08 02:40:52', 4),
(2, 20, '2017-08-22 02:49:56', 4),
(3, 20, '2017-08-23 02:49:56', 4),
(4, 20, '2017-08-23 02:49:56', 4),
(5, 20, '2017-08-01 04:06:21', 4),
(6, 20, '2017-08-17 04:11:42', 6),
(7, 20, '2017-08-24 04:47:21', 5),
(8, 20, '2017-08-24 04:47:21', 5),
(9, 21, '2017-08-08 05:00:32', 5),
(10, 20, '2017-08-25 05:23:11', 6),
(11, 20, '2017-08-24 05:57:50', 4),
(12, 20, '2017-08-25 06:01:08', 4),
(13, 23, '2017-08-24 06:06:42', 5),
(14, 23, '2017-08-24 06:11:34', 4),
(15, 21, '2017-08-09 05:01:28', 4),
(16, 21, '2017-08-28 10:26:30', 4),
(17, 21, '2017-08-26 02:00:00', 4),
(18, 21, '2017-08-23 07:12:47', 4),
(19, 21, '2017-08-25 08:43:45', 5),
(20, 21, '2017-08-26 10:00:00', 4),
(21, 21, '2017-08-26 10:00:00', 4),
(22, 21, '2017-08-26 10:00:00', 4),
(23, 21, '2017-08-26 10:00:00', 4),
(24, 21, '2017-08-26 10:00:00', 4),
(25, 21, '2017-08-26 03:15:48', 4),
(26, 21, '2017-08-29 02:12:26', 4),
(27, 21, '2017-08-29 02:49:55', 4),
(28, 21, '2017-08-29 02:49:55', 4),
(29, 21, '2017-08-29 03:00:00', 4),
(30, 24, '2017-08-29 05:24:54', 4),
(31, 24, '2017-08-29 05:24:54', 4),
(32, 24, '2017-08-29 05:26:10', 6),
(33, 24, '2017-08-30 05:27:28', 5),
(34, 24, '2017-09-01 05:27:28', 5),
(35, 24, '2017-09-01 05:27:28', 5),
(36, 25, '2017-08-30 06:25:42', 5),
(37, 21, '2017-08-29 09:21:20', 4),
(38, 21, '2017-08-29 09:29:55', 4),
(39, 21, '2017-08-30 10:22:00', 4),
(40, 21, '2017-08-29 10:58:01', 4),
(41, 21, '2017-08-30 11:06:42', 4),
(42, 21, '2017-08-30 11:11:34', 4),
(43, 21, '2017-08-31 11:12:06', 4);

-- --------------------------------------------------------

--
-- Table structure for table `reservations_items`
--

CREATE TABLE `reservations_items` (
  `id_reservation` int(11) NOT NULL,
  `id_item` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `total_price` int(11) DEFAULT NULL,
  `reservation_status` varchar(233) COLLATE eucjpms_bin DEFAULT NULL,
  `alasan` varchar(255) COLLATE eucjpms_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=eucjpms COLLATE=eucjpms_bin;

--
-- Dumping data for table `reservations_items`
--

INSERT INTO `reservations_items` (`id_reservation`, `id_item`, `quantity`, `total_price`, `reservation_status`, `alasan`) VALUES
(28, 17, 8, 160000, 'Ditolak', 'Tutup'),
(29, 15, 5, 50000, 'Ditolak', 'sasa'),
(36, 19, 6, 72000, 'Ditolak', 'Tutup'),
(39, 10, 12, 120036, 'Ditolak', 'Habis'),
(40, 10, 5, 50015, 'Diterima', NULL),
(41, 16, 4, 4000, 'Diterima', NULL),
(42, 12, 4, 80000, 'Ditolak', 'Habis'),
(43, 15, 6, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id_roles` int(10) UNSIGNED NOT NULL,
  `nama_roles` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id_roles`, `nama_roles`) VALUES
(1, 'user'),
(2, 'admin');

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
  `updated_at` timestamp NULL DEFAULT NULL,
  `id_roles` int(10) UNSIGNED DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_number` varchar(12) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`, `id_roles`, `address`, `phone_number`, `gender`) VALUES
(20, 'Lily', 'lily@gmail.com', '$2y$10$VdD7Ljwk1zTlu4MxBq6kaO6EYMr88LeXNGjjdPi.RmDT2EiUrjNba', 'rxqLR1SdhVZ0dniLCswIXBD4AS02POavYmzcT9VoyDlwEhywIclt3SJhHPl3', NULL, NULL, 1, 'Tarutung', '098765432123', 'Female'),
(21, 'Gloria L Hutauruk', 'gloria@gmail.com', '$2y$10$erivrBWrQ/4nEby/BlbgOuTE8cBQEr84GpaX91R4I2fi0KBn7w672', 'sUHfp78o8S4BFHTucx5OaKmjKzUl9wMa7D6wqP3P5hiHhNRG7QmQKZ4zzPCF', NULL, NULL, 1, 'Sipoholon Ujung', '087965433456', 'Male'),
(22, 'Sam', 'sam@gmail.com', '$2y$10$EVjfqvm5aJ990jJM5Xx2du9LSIBNTrbLvB/seW7ZAyMpQ8ODnY91C', 'GI0oolLRI32hgkbtO3drCwoOkTJ7nAM0duRT1A13prVt8TNf6rDN0zRHuARz', NULL, NULL, 1, 'Medan', '098767654322', 'Male'),
(23, 'Ben', 'ben@gmail.com', '$2y$10$t1CC6BEgrK7idloz7zG/JeUR.lpNuMFYYCCMIWsxhFaVozEmZhqTa', '0nIiSskSOvbzqTCf4Z55RQqdtYajWPz1afjAmIplKCZnjC2G2qMpn3RWDffy', NULL, NULL, 1, 'Medan', '098765432123', 'Male'),
(24, 'sari', 'sari@gmail.com', '$2y$10$LbQtFC1e1.g7QpHRe7e6ve252NKJkcigwOXgz4dFnfooLnYqm.RiO', 'U6XxuOz8Wr2gqI39QkFiy0kNBcWbJnEniUn8mE0TVy2o3CPKVq5czMHXOKOd', NULL, NULL, 1, 'Jakarta', '08123736367', 'Male'),
(25, 'Mawigu', 'mawigu@gmail.com', '$2y$10$DLeeF1pYL1aBphgz59dEL.0xfVXOziBW61tvA0C/rEI0vnLv7U2bW', '28rLHSGiHqJURfCvBLj5xOZ1Hndzdb7zuzBv2dexwoaCqkAHBtopUpnVpM0y', NULL, NULL, 1, 'Medan', '081237387812', 'Female'),
(26, 'Delima', 'del@gmail.com', '$2y$10$uuc8KWxdDtSj7i0JCwnbTOe/mS9sKNb28ntzoFQAICWct4Zj61B7q', 'YTCZ1SwFhfi4LxQAhu2tMXq7YMgdW90dzDn1K8MLKACGg7eSBJzwxmgHpUyQ', NULL, NULL, 1, 'Jakarta', '081269121913', 'Male');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_email_unique` (`email`),
  ADD KEY `id` (`id`),
  ADD KEY `id_roles` (`id_roles`),
  ADD KEY `id_roles_2` (`id_roles`),
  ADD KEY `id_roles_3` (`id_roles`),
  ADD KEY `id_2` (`id`),
  ADD KEY `id_3` (`id`),
  ADD KEY `id_4` (`id`);

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`id_item`),
  ADD KEY `id_item` (`id_item`),
  ADD KEY `id_item_2` (`id_item`),
  ADD KEY `id` (`id`);

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
-- Indexes for table `reservations`
--
ALTER TABLE `reservations`
  ADD PRIMARY KEY (`id_reservation`),
  ADD KEY `id_reservation` (`id_reservation`),
  ADD KEY `id` (`id`),
  ADD KEY `id_admin` (`id_admin`);

--
-- Indexes for table `reservations_items`
--
ALTER TABLE `reservations_items`
  ADD PRIMARY KEY (`id_reservation`,`id_item`),
  ADD KEY `id_reservation` (`id_reservation`,`id_item`),
  ADD KEY `id_item` (`id_item`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id_roles`),
  ADD KEY `id_roles` (`id_roles`),
  ADD KEY `id_roles_2` (`id_roles`),
  ADD KEY `id_roles_3` (`id_roles`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD KEY `id` (`id`),
  ADD KEY `id_2` (`id`),
  ADD KEY `id_3` (`id`),
  ADD KEY `id_role` (`id_roles`),
  ADD KEY `id_roles` (`id_roles`),
  ADD KEY `id_roles_2` (`id_roles`),
  ADD KEY `id_roles_3` (`id_roles`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `id_item` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `reservations`
--
ALTER TABLE `reservations`
  MODIFY `id_reservation` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;
--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id_roles` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `admins`
--
ALTER TABLE `admins`
  ADD CONSTRAINT `admins_ibfk_1` FOREIGN KEY (`id_roles`) REFERENCES `roles` (`id_roles`);

--
-- Constraints for table `items`
--
ALTER TABLE `items`
  ADD CONSTRAINT `items_ibfk_1` FOREIGN KEY (`id`) REFERENCES `admins` (`id`);

--
-- Constraints for table `reservations`
--
ALTER TABLE `reservations`
  ADD CONSTRAINT `reservations_ibfk_1` FOREIGN KEY (`id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `reservations_ibfk_2` FOREIGN KEY (`id_admin`) REFERENCES `admins` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
