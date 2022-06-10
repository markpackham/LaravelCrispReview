-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 10, 2022 at 12:25 PM
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
-- Database: `laravelcrispreview`
--

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `brand_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `company_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`id`, `created_at`, `updated_at`, `brand_name`, `company_id`) VALUES
(1, NULL, NULL, 'Golden Cross', 1),
(2, NULL, NULL, 'Monster Munch', 2),
(3, NULL, NULL, 'Pringles', 3),
(4, NULL, NULL, 'Skips', 4),
(5, NULL, NULL, 'Walkers', 2),
(6, NULL, NULL, 'Golden Wonder', 5),
(7, NULL, NULL, 'Chipsticks', 6),
(8, NULL, NULL, 'Mackie\'s of Scotland', 7);

-- --------------------------------------------------------

--
-- Table structure for table `companies`
--

CREATE TABLE `companies` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `company_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `company_address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `company_phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `company_website` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `companies`
--

INSERT INTO `companies` (`id`, `company_name`, `company_address`, `company_phone`, `company_website`, `created_at`, `updated_at`) VALUES
(1, 'Nisha Enterprises incorporating Golden Cross Snacks and Millar Confectionary', '5A Grange Rd, Houstoun Industrial Estate, Livingston, Scotland, EH54 5DE', '01506 443 383', 'https://www.nishaenterprises.co.uk/', NULL, NULL),
(2, 'Walkers Snacks Ltd', '450 South Oak Way, Green Park, Reading RG2 6UW', '800 274 777', 'https://www.walkers.co.uk/', NULL, NULL),
(3, 'Kellogg Co.', 'Orange Tower Media City Uk, Salford, Greater Manchester, United Kingdom, M50 2HF', '0800 626066', 'https://www.kelloggs.co.uk/en_GB/home.html', NULL, NULL),
(4, 'KP Snacks Limited', 'Fifth Floor, The Urban Building, 3-9 Albert Street, Slough, SL1 2BE', '0800 917 4494', 'https://www.kpsnacks.com/', NULL, NULL),
(5, 'Tayto Group Limited', 'Princewood Road, Earlstrees Industrial Estate, Corby, Northamptonshire NN17 4AP, The Urban Building, 3-9 Albert Street, Slough, SL1 2BE', '0800 917 4494', 'https://www.taytogroup.com/', NULL, NULL),
(6, 'PepsiCo Australia Holdings Pty Ltd', 'L 4 799 Pacific Hwy Chatswood, New South Wales, 2067 Australia', '61-1800025789', 'https://smiths.com.au/', NULL, NULL),
(7, 'Mackie’s Crisps', 'Mackie’s at Taypack, Inchcoonans, Errol, Perthshire PH2 7RB', '01821 641250', 'https://www.mackiescrisps.co.uk/', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `crisps`
--

CREATE TABLE `crisps` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `crisp_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `crisp_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `crisp_weight` int(11) NOT NULL,
  `crisp_review_score` int(11) DEFAULT NULL,
  `crisp_review` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `brand_id` bigint(20) UNSIGNED NOT NULL,
  `flavour_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `crisps`
--

INSERT INTO `crisps` (`id`, `crisp_name`, `crisp_image`, `crisp_weight`, `crisp_review_score`, `crisp_review`, `brand_id`, `flavour_id`, `created_at`, `updated_at`) VALUES
(1, 'Walkers Monster Munch Mega Pickled Onion Snack', 'crisp_image/MrFxQ4APXC8ENsHTwUA6Set5mCYTv0TBxDE2LTZc.jpg', 40, 4, 'Amazing strong if polarizing taste, lots of pickle but little onion flavour', 2, 2, NULL, '2022-06-09 14:52:20'),
(2, 'Walkers Ready Salted Crisps', 'crisp_image/ooJ2P3zbDznXDoMydMEvZXJgaLKdUAPZ0pTZ2vkG.jpg', 25, 2, 'The most average vanilla of crisps', 5, 4, NULL, '2022-06-09 15:03:11'),
(3, 'Transform-A-Snack Saucy BBQ', 'crisp_image/QJAMklnLHfzyxe0Zrqr4UXlx3CL3r4hkAAYMsCIZ.png', 30, 4, 'Surprisingly good and cheap', 6, 12, NULL, '2022-06-09 15:03:45'),
(4, 'Smith\'s Chipsticks Salt & Vinegar 8 Pack', 'crisp_image/QI3rmXPmE003uJ7LZeYnY6ZdF9rWPYkekZiGSCA1.jpg', 136, 4, 'You will love this if you love a very strong vinegar flavour, really packs a punch', 7, 3, NULL, '2022-06-09 15:04:15'),
(5, 'Walkers Cheese & Onion Crisps 6X25g', 'crisp_image/jfy1aY4FUq1lcGPYJkhmoKnbYTCGLGri1CpckKjH.jpg', 150, 3, 'Cheese and onion is one area the typically bland Walkers brand actually excels at. No wonder it\'s very popular.', 5, 5, NULL, '2022-06-09 15:04:39'),
(6, 'Golden Wonder Ready Salted 6X25g', 'crisp_image/z3YVpFbh5xqwhLT2lJFXtEKvkDL5ABDNtqJWVnxq.jpg', 150, 3, 'More flavour and a sharper crisp quality than bland old Walkers', 6, 4, NULL, '2022-06-09 15:05:17'),
(7, 'Kp Skips Prawn Cocktail Crisps 6 X 13.1G', 'crisp_image/5YCtwZCPuRom1Jjx8csIlS9L9atJiRHHICPbQeSL.jpg', 79, 4, 'Best prawn and cocktail crisp flavour ever and novel fizzling crisp design, they lose 1 point for the lack of volume.', 4, 7, NULL, '2022-06-09 15:05:45'),
(8, 'Flamegrilled Aberdeen Angus', 'crisp_image/yv6LaF8kyOjzUteibL2ZPs93LhUdikohbgUqIK43.png', 40, 4, 'Great unique taste, good value for money', 8, 14, NULL, '2022-06-09 15:06:10'),
(9, 'Johnny\'s Spicy Onion Rings', 'crisp_image/w8sS9E3LrCWq2hlbE4MRLSL8U93PknXMvofCjNb9.jpg', 25, 5, 'Perfect strong flavour and very cheap, best crisps so far', 1, 1, NULL, '2022-06-09 15:06:56'),
(10, 'Lorne Sausage & Brown Sauce Crisps', 'crisp_image/GW4ytVARab5yW5mZh7mhOWQkmVeCkD9wox8g3dVB.webp', 150, 3, 'Ok but unique flavour, bonus points for originality', 8, 28, NULL, '2022-06-09 15:07:27');

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
-- Table structure for table `flavours`
--

CREATE TABLE `flavours` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `flavour_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `flavours`
--

INSERT INTO `flavours` (`id`, `flavour_name`, `created_at`, `updated_at`) VALUES
(1, 'Spicey', NULL, NULL),
(2, 'Pickled Onion', NULL, NULL),
(3, 'Salt and Vinegar', NULL, NULL),
(4, 'Ready Salted', NULL, NULL),
(5, 'Cheese and Onion', NULL, NULL),
(6, 'Ham and Bacon', NULL, NULL),
(7, 'Prawn and Cocktail', NULL, NULL),
(8, 'Mustard', NULL, NULL),
(9, 'Chicken', NULL, NULL),
(10, 'Worcestershire Sauce', NULL, NULL),
(11, 'Haggis and Black Pepper', NULL, NULL),
(12, 'BBQ', NULL, NULL),
(13, 'Beef', NULL, NULL),
(14, 'Aberdeen Angus', NULL, NULL),
(15, 'Mustard and Honey', NULL, NULL),
(16, 'Paprika', NULL, NULL),
(17, 'Beef and Onion', NULL, NULL),
(18, 'Cheese', NULL, NULL),
(19, 'Tomato', NULL, NULL),
(20, 'Caramelized Red Onion', NULL, NULL),
(28, 'Sausage', NULL, NULL);

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
(5, '2022_06_03_093023_create_companies_table', 1),
(6, '2022_06_03_093051_create_brands_table', 1),
(7, '2022_06_03_093131_create_potatoes_table', 1),
(8, '2022_06_03_130740_create_flavours_table', 1),
(9, '2022_06_04_093121_create_crisps_table', 2);

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
-- Table structure for table `potatoes`
--

CREATE TABLE `potatoes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `potato_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `potato_country` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `potatoes`
--

INSERT INTO `potatoes` (`id`, `potato_name`, `potato_country`, `created_at`, `updated_at`) VALUES
(1, 'Agata', 'Netherlands', NULL, NULL),
(2, 'Bamberg', 'Germany', NULL, NULL),
(3, 'Black Champion', 'Ireland', NULL, NULL),
(4, 'British Queen', 'UK', NULL, NULL),
(5, 'Dejima', 'Japan', NULL, NULL),
(6, 'Irish White', 'Ireland', NULL, NULL),
(7, 'King Edward', 'UK', NULL, NULL),
(8, 'Pink Fir Apple', 'France', NULL, NULL),
(9, 'Ranger Russet', 'USA', NULL, NULL),
(10, 'Red Gold', 'Canada', NULL, NULL),
(11, 'Russian Blue', 'Russia', NULL, NULL),
(12, 'Shetland Black', 'UK', NULL, NULL),
(13, 'Yukon Gold', 'Canada', NULL, NULL);

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
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'demoUser', 'demoUser@email.com', NULL, '$2y$10$84F07S8Od09kshmOpjc7mOtQwIXDoybYF9nYNx0JlqmxH3hzWLCGW', NULL, '2022-06-10 09:14:53', '2022-06-10 09:14:53');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `brands_brand_name_unique` (`brand_name`);

--
-- Indexes for table `companies`
--
ALTER TABLE `companies`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `companies_company_name_unique` (`company_name`);

--
-- Indexes for table `crisps`
--
ALTER TABLE `crisps`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `crisps_crisp_name_unique` (`crisp_name`),
  ADD KEY `crisps_brand_id_foreign` (`brand_id`),
  ADD KEY `crisps_flavour_id_foreign` (`flavour_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `flavours`
--
ALTER TABLE `flavours`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `flavours_flavour_name_unique` (`flavour_name`);

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
-- Indexes for table `potatoes`
--
ALTER TABLE `potatoes`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `potatoes_potato_name_unique` (`potato_name`);

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
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `companies`
--
ALTER TABLE `companies`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `crisps`
--
ALTER TABLE `crisps`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `flavours`
--
ALTER TABLE `flavours`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `potatoes`
--
ALTER TABLE `potatoes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `crisps`
--
ALTER TABLE `crisps`
  ADD CONSTRAINT `crisps_brand_id_foreign` FOREIGN KEY (`brand_id`) REFERENCES `brands` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `crisps_flavour_id_foreign` FOREIGN KEY (`flavour_id`) REFERENCES `flavours` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
