-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 18, 2022 at 09:29 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `restoran`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nameCustomer` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `emailCustomer` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phoneCustomer` varchar(13) COLLATE utf8mb4_unicode_ci NOT NULL,
  `member` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id`, `nameCustomer`, `emailCustomer`, `phoneCustomer`, `member`, `created_at`, `updated_at`) VALUES
(1, 'Nurhalizah', 'halizah@gmail.com', '0895414802791', 0, '2022-03-12 18:06:11', '2022-03-12 18:06:11'),
(2, 'Putri Lestari', 'putri@gmail.com', '0817104283', 1, '2022-03-12 18:06:48', '2022-03-12 18:06:48'),
(3, 'Khopipah', 'khopipah20@gmail.com', '0895637827736', 1, '2022-03-12 18:07:55', '2022-03-12 18:07:55'),
(4, 'Junet', 'jj@gmail.com', '0874736766784', 0, '2022-03-12 21:26:18', '2022-03-12 21:26:18'),
(5, 'Kim Taehyung', 'istrinyNur@gmail.com', '0875353344346', 1, '2022-03-12 21:27:03', '2022-03-12 21:27:03'),
(6, 'Karma Akabane', 'krm@gmail.com', '0897467747585', 1, '2022-03-13 01:54:54', '2022-03-13 01:54:54'),
(7, 'Levi', 'kecap@gmail.com', '0877678334522', 0, '2022-03-13 01:55:34', '2022-03-13 01:55:34'),
(8, 'Veronica Park', 'park@gmail.com', '0812367733552', 1, '2022-03-13 01:56:30', '2022-03-13 01:56:30'),
(9, 'Haru', 'figuran@gmail.com', '0812445566445', 1, '2022-03-13 01:57:10', '2022-03-13 01:57:10'),
(10, 'Kim Hyeohyeon', 'halizah@gmail.com', '0895637827736', 1, '2022-03-14 08:34:30', '2022-03-14 08:34:30');

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
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nameMenu` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `descMenu` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `photoMenu` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` double NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`id`, `nameMenu`, `descMenu`, `photoMenu`, `price`, `created_at`, `updated_at`) VALUES
(1, 'Ramen', 'wibu', 'images/u87X86QOhWstrxorqCohpUmi3krZHKLVV8IEFZXX.jpg', 20000, '2022-03-12 19:07:01', '2022-03-14 00:08:30'),
(2, 'Ayam Geprek', 'pedas seperti omongan filza', 'images/cWxiPG7LBB9hV4fQdb9jsINyi7PoVce1rguRUY9Z.jpg', 10000, '2022-03-12 21:24:16', '2022-03-12 21:24:16'),
(3, 'Sayur Asem', 'Asem kek muka saya', 'images/Lr9bwBwSn5RMs4yDx2ROyDtOMyHsTx9Y0ERXUv6p.jpg', 7000, '2022-03-12 21:24:53', '2022-03-12 21:24:53'),
(5, 'Soto', 'makanan khas depok', 'images/GeLSGhRwQjR9rWT7YKxs98hWazOhKJxVi7jvGktM.jpg', 10000, '2022-03-13 07:22:42', '2022-03-13 07:22:42'),
(6, 'Makaroni Telur', 'dikampung ku namany maklor, dikampung mu namany apa?', 'images/vbgR6JzD8qO7cQDzTA7ol5FVBjStQyiFYpWa6P24.jpg', 1000, '2022-03-14 02:24:17', '2022-03-14 02:24:17'),
(7, 'Martabak', 'kenapa cwo kl kermh cwe identik sm martabak?', 'images/adPWUXBL0cDb4omqavL9Bwz7zeISvsBqI5wThnNZ.jpg', 20000, '2022-03-14 02:25:23', '2022-03-14 02:25:23'),
(8, 'Tteokbokki', 'susah bgt ngetiknya, ampe liat google. btw rasany kek cilok', 'images/AfLLJcImksweSTCkfBMVNZUtjmk2nRPAflGgtAgl.jpg', 15000, '2022-03-14 02:26:43', '2022-03-14 02:26:43'),
(9, 'Dessert By Najla', 'pengen beli mahal bgt anjeng', 'images/xN0ibOJD7ZjOamC6kPiofRX71w5ohNwdPxRDPjr1.jpg', 60000, '2022-03-14 08:37:13', '2022-03-14 08:37:13'),
(10, 'Cimory Squeze', 'FAV BGT ASW', 'images/VTS35Y2OweNCIKbqcEfgPXraOhUMbJUKS6GJABnO.jpg', 10000, '2022-03-14 08:38:20', '2022-03-14 08:38:20'),
(11, 'Aice Cookies Ice Cream Cup', 'ENAK WOE', 'images/CMl1wYdL8NXO8i8jQsbWLreK2BNBIz2uQ8bvsz7j.jpg', 5000, '2022-03-14 08:43:23', '2022-03-14 08:43:43'),
(12, 'Campina Cheese Cake Strawberry', 'ENAKKKKKKKKK', 'images/BufYSEd1dJ2k1ZWxkmyZtxYrwyFpNxFAOBbyQy1S.jpg', 35000, '2022-03-14 08:45:50', '2022-03-14 08:45:50');

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
(5, '2022_02_28_013005_create_customer_table', 1),
(6, '2022_02_28_013115_create_menu_table', 1),
(7, '2022_02_28_013201_create_order_table', 1),
(8, '2022_03_12_234127_create_order_item_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `customerId` int(11) NOT NULL,
  `code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `order`
--

INSERT INTO `order` (`id`, `customerId`, `code`, `total`, `created_at`, `updated_at`) VALUES
(18, 7, '1403220535', 56000, '2022-03-14 07:05:35', '2022-03-14 07:05:35'),
(19, 5, '1403224903', 139500, '2022-03-14 08:49:03', '2022-03-14 08:49:03'),
(20, 5, '1803223203', 24300, '2022-03-17 18:32:04', '2022-03-17 18:32:04'),
(21, 1, '1803225033', 345000, '2022-03-18 00:50:34', '2022-03-18 00:50:34');

-- --------------------------------------------------------

--
-- Table structure for table `order_item`
--

CREATE TABLE `order_item` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `orderId` int(11) NOT NULL,
  `menuId` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `subTotal` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `order_item`
--

INSERT INTO `order_item` (`id`, `orderId`, `menuId`, `quantity`, `subTotal`, `created_at`, `updated_at`) VALUES
(14, 10, 3, 7, 49000, '2022-03-13 03:20:44', '2022-03-13 03:20:44'),
(15, 11, 4, 6, 24000, '2022-03-13 05:43:01', '2022-03-13 05:43:01'),
(17, 12, 3, 1, 7000, '2022-03-13 07:05:07', '2022-03-13 07:05:07'),
(18, 13, 4, 3, 12000, '2022-03-13 07:09:21', '2022-03-13 07:09:21'),
(19, 14, 4, 6, 24000, '2022-03-13 07:18:43', '2022-03-13 07:18:43'),
(20, 14, 3, 2, 14000, '2022-03-13 07:18:43', '2022-03-13 07:18:43'),
(21, 14, 1, 1, 40000, '2022-03-13 07:18:43', '2022-03-13 07:18:43'),
(22, 15, 3, 3, 21000, '2022-03-13 23:29:25', '2022-03-13 23:29:25'),
(23, 15, 2, 1, 10000, '2022-03-13 23:29:25', '2022-03-13 23:29:25'),
(24, 15, 1, 1, 40000, '2022-03-13 23:29:25', '2022-03-13 23:29:25'),
(28, 18, 3, 8, 56000, '2022-03-14 07:05:35', '2022-03-14 07:05:35'),
(29, 19, 6, 3, 3000, '2022-03-14 08:49:03', '2022-03-14 08:49:03'),
(30, 19, 12, 2, 70000, '2022-03-14 08:49:03', '2022-03-14 08:49:03'),
(31, 19, 5, 1, 10000, '2022-03-14 08:49:04', '2022-03-14 08:49:04'),
(32, 19, 10, 2, 20000, '2022-03-14 08:49:04', '2022-03-14 08:49:04'),
(33, 19, 8, 2, 30000, '2022-03-14 08:49:04', '2022-03-14 08:49:04'),
(34, 19, 1, 1, 20000, '2022-03-14 08:49:04', '2022-03-14 08:49:04'),
(35, 19, 6, 2, 2000, '2022-03-14 08:49:04', '2022-03-14 08:49:04'),
(36, 20, 5, 2, 20000, '2022-03-17 18:32:04', '2022-03-17 18:32:04'),
(37, 20, 6, 7, 7000, '2022-03-17 18:32:04', '2022-03-17 18:32:04'),
(38, 21, 12, 9, 315000, '2022-03-18 00:50:34', '2022-03-18 00:50:34'),
(39, 21, 10, 3, 30000, '2022-03-18 00:50:34', '2022-03-18 00:50:34');

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
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
  `role` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `role`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@gmail.com', NULL, '$2y$10$ufO3ElZ6HifxzKX9kLFbIuB4R8iOpUq/bfRImCkO8nWZe8V/GtKxO', 'admin', NULL, '2022-03-12 16:43:56', '2022-03-12 16:43:56'),
(2, 'kasir', 'kasir@gmail.com', NULL, '$2y$10$/EloTccFLn6hZWt4Bgbn9e5BvGrBQPalFuPxGfK1LIZfHV9WUz1H.', 'kasir', NULL, '2022-03-12 16:43:56', '2022-03-12 16:43:56');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_item`
--
ALTER TABLE `order_item`
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
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `order`
--
ALTER TABLE `order`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `order_item`
--
ALTER TABLE `order_item`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
