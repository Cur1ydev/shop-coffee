-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jul 05, 2023 at 07:04 AM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `coffee`
--

-- --------------------------------------------------------

--
-- Table structure for table `address_order`
--

CREATE TABLE `address_order` (
                                 `id` bigint UNSIGNED NOT NULL,
                                 `id_province_order` int NOT NULL,
                                 `address` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
                                 `created_at` timestamp NULL DEFAULT NULL,
                                 `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `address_order`
--

INSERT INTO `address_order` (`id`, `id_province_order`, `address`, `created_at`, `updated_at`) VALUES
                                                                                                   (1, 1, 'The My Dinh Coffee House', NULL, '2023-05-20 11:32:03'),
                                                                                                   (2, 1, 'The Nguyen Chi Thanh Coffee House', NULL, NULL),
                                                                                                   (3, 2, 'The Hai Hau Coffee House', NULL, NULL),
                                                                                                   (4, 2, 'The Nam Dinh Coffee House', NULL, '2023-05-19 09:38:28');

-- --------------------------------------------------------

--
-- Table structure for table `attributes`
--

CREATE TABLE `attributes` (
                              `id` bigint UNSIGNED NOT NULL,
                              `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
                              `value` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
                              `price` int NOT NULL,
                              `created_at` timestamp NULL DEFAULT NULL,
                              `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `attributes`
--

INSERT INTO `attributes` (`id`, `name`, `value`, `price`, `created_at`, `updated_at`) VALUES
                                                                                          (1, 'size', 'Nhỏ', 0, NULL, NULL),
                                                                                          (2, 'size', 'Vừa', 19000, NULL, NULL),
                                                                                          (3, 'topping', 'Kem phô mai', 10000, NULL, NULL),
                                                                                          (4, 'topping', 'Thạch Cà Phê', 10000, NULL, NULL),
                                                                                          (5, 'topping', 'Trân Châu Trắng', 10000, NULL, '2023-05-20 11:31:19');

-- --------------------------------------------------------

--
-- Table structure for table `banners`
--

CREATE TABLE `banners` (
                           `id` bigint UNSIGNED NOT NULL,
                           `image` text COLLATE utf8mb4_unicode_ci NOT NULL,
                           `created_at` timestamp NULL DEFAULT NULL,
                           `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `banners`
--

INSERT INTO `banners` (`id`, `image`, `created_at`, `updated_at`) VALUES
                                                                      (1, 'images/banner1.png', NULL, NULL),
                                                                      (2, 'images/banner2.png', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
                            `id` bigint UNSIGNED NOT NULL,
                            `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
                            `slug` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
                            `status` tinyint NOT NULL,
                            `description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
                            `created_at` timestamp NULL DEFAULT NULL,
                            `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `name`, `slug`, `status`, `description`, `created_at`, `updated_at`) VALUES
                                                                                                       (1, 'Cà Phê', 'ca-phe', 1, 'Đây là cà phê', NULL, NULL),
                                                                                                       (2, 'Trà Sữa', 'tra-sua', 1, 'Đây là trà sữa', NULL, '2023-05-20 06:39:25');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
                            `id` bigint UNSIGNED NOT NULL,
                            `product_id` int NOT NULL,
                            `user_id` int NOT NULL,
                            `comment` text COLLATE utf8mb4_unicode_ci NOT NULL,
                            `created_at` timestamp NULL DEFAULT NULL,
                            `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `coupon`
--

CREATE TABLE `coupon` (
                          `id` bigint UNSIGNED NOT NULL,
                          `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
                          `price` int NOT NULL,
                          `created_at` timestamp NULL DEFAULT NULL,
                          `updated_at` timestamp NULL DEFAULT NULL,
                          `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `coupon`
--

INSERT INTO `coupon` (`id`, `name`, `price`, `created_at`, `updated_at`, `deleted_at`) VALUES
                                                                                           (1, 'LOIXOANDEPTRAIQUA', 15000, NULL, '2023-07-05 05:02:33', NULL),
                                                                                           (3, 'hí hí', 9999999, '2023-07-05 04:53:43', '2023-07-05 05:01:58', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
                               `id` bigint UNSIGNED NOT NULL,
                               `uuid` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
                               `connection` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
                               `queue` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
                               `payload` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
                               `exception` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
                               `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
                              `id` int UNSIGNED NOT NULL,
                              `migration` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
                              `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
                                                          (1, '2014_10_12_000000_create_users_table', 1),
                                                          (2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
                                                          (3, '2019_08_19_000000_create_failed_jobs_table', 1),
                                                          (4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
                                                          (5, '2023_05_10_233827_create_product_table', 1),
                                                          (6, '2023_05_11_001646_create_attributes_table', 2),
                                                          (7, '2023_05_11_001720_create_product_attribute_table', 2),
                                                          (8, '2023_05_11_001741_create_category_table', 2),
                                                          (9, '2023_05_11_001802_create_orderitem_table', 2),
                                                          (10, '2023_05_16_002725_create_province_order_table', 3),
                                                          (11, '2023_05_16_002815_create_address_order_table', 3),
                                                          (12, '2023_05_16_014822_create_coupon_table', 4),
                                                          (13, '2023_05_18_115919_create_status_table', 5),
                                                          (14, '2023_05_20_125353_create_notification_table', 6),
                                                          (15, '2023_05_30_204827_modifi_users', 7),
                                                          (16, '2023_05_30_210157_drop_password_reset_tokens_table', 8),
                                                          (17, '2023_06_13_212001_add_deleted_at_coupon', 9),
                                                          (18, '2023_06_29_093822_create_column_delete_at_orderitem', 10),
                                                          (19, '2023_07_04_140830_create_comments_table', 10),
                                                          (20, '2023_07_05_093904_create_banners_table', 10);

-- --------------------------------------------------------

--
-- Table structure for table `notification`
--

CREATE TABLE `notification` (
                                `id` bigint UNSIGNED NOT NULL,
                                `message` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
                                `created_at` timestamp NULL DEFAULT NULL,
                                `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `notification`
--

INSERT INTO `notification` (`id`, `message`, `created_at`, `updated_at`) VALUES
                                                                             (1, 'Bạn đã Xoá mã giảm giá thành công', '2023-06-13 14:21:36', '2023-06-13 14:21:36'),
                                                                             (2, 'Bạn đã Xoá mã giảm giá thành công', '2023-06-13 14:34:26', '2023-06-13 14:34:26'),
                                                                             (3, 'Bạn đã Xoá mã giảm giá thành công', '2023-06-13 14:35:21', '2023-06-13 14:35:21'),
                                                                             (4, 'Bạn đã Khôi phục mã giảm giá thành công', '2023-06-13 14:35:30', '2023-06-13 14:35:30'),
                                                                             (5, 'Bạn đã Khôi phục mã giảm giá thành công', '2023-06-13 14:38:41', '2023-06-13 14:38:41'),
                                                                             (6, 'Bạn đã Xoá mã giảm giá thành công', '2023-06-13 14:38:43', '2023-06-13 14:38:43'),
                                                                             (7, 'Bạn đã Thêm danh mục thành công', '2023-07-05 04:44:06', '2023-07-05 04:44:06'),
                                                                             (8, 'Bạn đã Sửa danh mục thành công', '2023-07-05 04:51:03', '2023-07-05 04:51:03'),
                                                                             (9, 'Bạn đã Sửa danh mục thành công', '2023-07-05 04:51:20', '2023-07-05 04:51:20'),
                                                                             (10, 'Bạn đã Xoá danh mục thành công', '2023-07-05 04:51:23', '2023-07-05 04:51:23'),
                                                                             (11, 'Bạn đã Thêm danh mục thành công', '2023-07-05 04:52:09', '2023-07-05 04:52:09'),
                                                                             (12, 'Bạn đã Thêm danh mục thành công', '2023-07-05 04:52:10', '2023-07-05 04:52:10'),
                                                                             (13, 'Bạn đã Xoá danh mục thành công', '2023-07-05 04:52:15', '2023-07-05 04:52:15'),
                                                                             (14, 'Bạn đã Xoá danh mục thành công', '2023-07-05 04:52:39', '2023-07-05 04:52:39'),
                                                                             (15, 'Bạn đã Xoá mã giảm giá thành công', '2023-07-05 04:53:25', '2023-07-05 04:53:25'),
                                                                             (16, 'Bạn đã Khôi phục mã giảm giá thành công', '2023-07-05 04:53:28', '2023-07-05 04:53:28'),
                                                                             (17, 'Bạn đã Thêm mã giảm giá thành công', '2023-07-05 04:53:43', '2023-07-05 04:53:43'),
                                                                             (18, 'Bạn đã Sửa mã giảm giá thành công', '2023-07-05 05:00:59', '2023-07-05 05:00:59'),
                                                                             (19, 'Bạn đã Sửa mã giảm giá thành công', '2023-07-05 05:01:15', '2023-07-05 05:01:15'),
                                                                             (20, 'Bạn đã Xoá mã giảm giá thành công', '2023-07-05 05:01:53', '2023-07-05 05:01:53'),
                                                                             (21, 'Bạn đã Xoá mã giảm giá thành công', '2023-07-05 05:01:53', '2023-07-05 05:01:53'),
                                                                             (22, 'Bạn đã Khôi phục mã giảm giá thành công', '2023-07-05 05:02:26', '2023-07-05 05:02:26'),
                                                                             (23, 'Bạn đã Khôi phục mã giảm giá thành công', '2023-07-05 05:02:30', '2023-07-05 05:02:30'),
                                                                             (24, 'Bạn đã Xoá mã giảm giá thành công', '2023-07-05 05:02:32', '2023-07-05 05:02:32');

-- --------------------------------------------------------

--
-- Table structure for table `orderitem`
--

CREATE TABLE `orderitem` (
                             `id` bigint UNSIGNED NOT NULL,
                             `order_code` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
                             `coupon` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
                             `product_id` int NOT NULL,
                             `status_id` int NOT NULL,
                             `attribute` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL,
                             `price` int NOT NULL,
                             `quantity` int NOT NULL,
                             `total_price` int NOT NULL,
                             `address` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
                             `username` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
                             `phone_number` varchar(11) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
                             `note` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
                             `get_product` tinyint DEFAULT NULL,
                             `created_at` timestamp NULL DEFAULT NULL,
                             `updated_at` timestamp NULL DEFAULT NULL,
                             `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
                                          `id` bigint UNSIGNED NOT NULL,
                                          `tokenable_type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
                                          `tokenable_id` bigint UNSIGNED NOT NULL,
                                          `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
                                          `token` varchar(64) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
                                          `abilities` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
                                          `last_used_at` timestamp NULL DEFAULT NULL,
                                          `expires_at` timestamp NULL DEFAULT NULL,
                                          `created_at` timestamp NULL DEFAULT NULL,
                                          `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
                           `id` bigint UNSIGNED NOT NULL,
                           `category_id` int NOT NULL,
                           `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
                           `slug` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
                           `image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
                           `price` int NOT NULL,
                           `discount` int NOT NULL,
                           `status` tinyint NOT NULL,
                           `feature_product` tinyint NOT NULL,
                           `description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
                           `created_at` timestamp NULL DEFAULT NULL,
                           `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `category_id`, `name`, `slug`, `image`, `price`, `discount`, `status`, `feature_product`, `description`, `created_at`, `updated_at`) VALUES
                                                                                                                                                                      (1, 1, 'Đường Đen Sữa Đá', 'duong-den-sua-da', 'https://product.hstatic.net/1000075078/product/1680709856_tagnew-dd-suada_19e9ff3863c3428fb01bd3f509ce4b4f.jpg', 45000, 0, 1, 1, 'Đây là Đường Đen Sữa của bạn', NULL, '2023-05-21 02:29:15'),
                                                                                                                                                                      (2, 1, 'Đường Đen Marble Latte', 'duong-den-marble-latte', 'https://product.hstatic.net/1000075078/product/1680709921_tagnew-dd-latte-2_b127b50deca54f57b484720b0b1a086a.jpg', 55000, 0, 1, 0, 'Đây là Đường Đen Marble Latte', NULL, NULL),
                                                                                                                                                                      (3, 1, 'Cà Phê Sữa Đá', 'ca-phe-sua-da', 'https://product.hstatic.net/1000075078/product/1669736835_ca-phe-sua-da_ecadaeeedef34cce898764ee63b12f7d.png', 29000, 0, 1, 1, 'Đây là Cà Phê Sữa Đá', NULL, NULL),
                                                                                                                                                                      (5, 2, 'Trà Sữa Chân Trâu', 'tra-sua-chan-trau', 'https://product.hstatic.net/1000075078/product/1675355728_cheese_75d8eb182e5b470cbf4a10c688d3b24d_large.jpg', 30000, 0, 1, 0, 'Đây là Trà sữa chân trâu', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `product_attribute`
--

CREATE TABLE `product_attribute` (
                                     `id` bigint UNSIGNED NOT NULL,
                                     `product_id` int NOT NULL,
                                     `attribute_id` int NOT NULL,
                                     `created_at` timestamp NULL DEFAULT NULL,
                                     `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_attribute`
--

INSERT INTO `product_attribute` (`id`, `product_id`, `attribute_id`, `created_at`, `updated_at`) VALUES
                                                                                                     (1, 1, 1, NULL, NULL),
                                                                                                     (2, 1, 2, NULL, NULL),
                                                                                                     (3, 1, 3, NULL, NULL),
                                                                                                     (4, 1, 4, NULL, NULL),
                                                                                                     (5, 1, 5, NULL, NULL),
                                                                                                     (6, 2, 1, NULL, NULL),
                                                                                                     (7, 2, 3, NULL, NULL),
                                                                                                     (8, 2, 4, NULL, NULL),
                                                                                                     (9, 3, 1, NULL, NULL),
                                                                                                     (10, 3, 3, NULL, NULL),
                                                                                                     (13, 5, 1, '2023-05-19 03:00:09', '2023-05-19 03:00:09');

-- --------------------------------------------------------

--
-- Table structure for table `province_order`
--

CREATE TABLE `province_order` (
                                  `id` bigint UNSIGNED NOT NULL,
                                  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
                                  `created_at` timestamp NULL DEFAULT NULL,
                                  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `province_order`
--

INSERT INTO `province_order` (`id`, `name`, `created_at`, `updated_at`) VALUES
                                                                            (1, 'Hà Nội', NULL, NULL),
                                                                            (2, 'Nam Định', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `status`
--

CREATE TABLE `status` (
                          `id` bigint UNSIGNED NOT NULL,
                          `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
                          `created_at` timestamp NULL DEFAULT NULL,
                          `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `status`
--

INSERT INTO `status` (`id`, `name`, `created_at`, `updated_at`) VALUES
                                                                    (1, 'Đã thanh toán', NULL, NULL),
                                                                    (2, 'Chưa thanh toán', NULL, NULL);

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
                         `role` tinyint NOT NULL DEFAULT '1',
                         `remember_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
                         `created_at` timestamp NULL DEFAULT NULL,
                         `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `role`, `remember_token`, `created_at`, `updated_at`) VALUES
    (1, 'admin', 'admin@gmail.com', NULL, '$2y$10$beUHOmEzGOgv3Bt.2l91E.xtn4nwizq5cozV/teIwrx98HwCvjKYC', 0, NULL, '2023-05-31 01:58:27', '2023-05-31 08:51:28');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `address_order`
--
ALTER TABLE `address_order`
    ADD PRIMARY KEY (`id`);

--
-- Indexes for table `attributes`
--
ALTER TABLE `attributes`
    ADD PRIMARY KEY (`id`);

--
-- Indexes for table `banners`
--
ALTER TABLE `banners`
    ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
    ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
    ADD PRIMARY KEY (`id`);

--
-- Indexes for table `coupon`
--
ALTER TABLE `coupon`
    ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
    ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
    ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notification`
--
ALTER TABLE `notification`
    ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orderitem`
--
ALTER TABLE `orderitem`
    ADD PRIMARY KEY (`id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
    ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
    ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_attribute`
--
ALTER TABLE `product_attribute`
    ADD PRIMARY KEY (`id`);

--
-- Indexes for table `province_order`
--
ALTER TABLE `province_order`
    ADD PRIMARY KEY (`id`);

--
-- Indexes for table `status`
--
ALTER TABLE `status`
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
-- AUTO_INCREMENT for table `address_order`
--
ALTER TABLE `address_order`
    MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `attributes`
--
ALTER TABLE `attributes`
    MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `banners`
--
ALTER TABLE `banners`
    MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
    MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
    MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `coupon`
--
ALTER TABLE `coupon`
    MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
    MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
    MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `notification`
--
ALTER TABLE `notification`
    MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `orderitem`
--
ALTER TABLE `orderitem`
    MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
    MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
    MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `product_attribute`
--
ALTER TABLE `product_attribute`
    MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `province_order`
--
ALTER TABLE `province_order`
    MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `status`
--
ALTER TABLE `status`
    MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
    MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
