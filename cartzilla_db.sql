-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Feb 01, 2024 at 08:18 AM
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
-- Database: `cartzilla_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `image` text DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`id`, `name`, `description`, `image`, `status`, `created_at`, `updated_at`) VALUES
(2, 'International', 'International', ' ', 1, '2023-12-16 01:38:40', '2023-12-16 01:38:40'),
(3, 'Local', 'Local', ' ', 1, '2023-12-30 02:31:41', '2023-12-30 02:31:41'),
(4, 'Export', 'Export', ' ', 1, '2023-12-30 02:31:59', '2023-12-30 02:31:59'),
(5, 'Adidas', 'Adidas', ' ', 1, '2023-12-30 02:32:45', '2023-12-30 02:32:45'),
(6, 'Apple', 'Apple iPhone, MacBook,Airbuds', ' ', 1, '2023-12-30 02:34:00', '2023-12-30 02:34:00'),
(7, 'Samsung', 'Samsung', ' ', 1, '2023-12-30 02:34:48', '2023-12-30 02:34:48'),
(8, 'Xiaomi', 'Xiaomi', ' ', 1, '2023-12-30 02:35:30', '2023-12-30 02:35:30'),
(9, 'OnePlus', 'OnePlus', ' ', 1, '2023-12-30 02:36:37', '2023-12-30 02:36:37'),
(10, 'Intel', 'Intel', ' ', 1, '2023-12-30 02:37:53', '2023-12-30 02:37:53'),
(11, 'Nikon', 'Nikon', ' ', 1, '2023-12-30 02:38:30', '2023-12-30 02:38:30'),
(12, 'Raymond', 'Raymond', ' ', 1, '2023-12-30 02:39:20', '2023-12-30 02:39:20'),
(13, 'Puma', 'Puma', ' ', 1, '2023-12-30 02:39:34', '2023-12-30 02:39:34'),
(14, 'US Polo', 'Us Polo', ' ', 1, '2023-12-30 02:40:03', '2023-12-30 02:40:03'),
(15, 'Lacoste', 'Lacoste', ' ', 1, '2023-12-30 02:40:31', '2023-12-30 02:40:31'),
(16, 'Zara', 'Zara', ' ', 1, '2023-12-30 02:40:55', '2023-12-30 02:40:55'),
(17, 'Prada', 'Prada', ' ', 1, '2023-12-30 02:41:56', '2023-12-30 02:41:56'),
(18, 'Yellow', 'Yellow', ' ', 1, '2023-12-30 02:42:13', '2023-12-30 02:42:13'),
(19, 'Arong', 'Arong', ' ', 1, '2023-12-30 02:42:30', '2023-12-30 02:42:30'),
(20, 'Custom', 'Custom', ' ', 1, '2023-12-30 02:43:09', '2023-12-30 02:43:09');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `image` text DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `description`, `image`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Clothing', 'Clothing', 'uploaded-files/category-images/2798051702320913.jpg', 1, '2023-12-11 12:55:13', '2023-12-11 12:55:13'),
(2, 'Shoes', 'Shoes', 'uploaded-files/category-images/4436961702321178.jpg', 1, '2023-12-11 12:59:38', '2023-12-11 12:59:38'),
(3, 'Gadgets', 'Gadgets', 'uploaded-files/category-images/1289721702321222.jpg', 1, '2023-12-11 13:00:22', '2023-12-11 13:00:22'),
(4, 'Furniture & Decor', 'Furniture & Decor', 'uploaded-files/category-images/2207811702321260.jpg', 1, '2023-12-11 13:01:00', '2023-12-11 13:01:00'),
(5, 'Entertainment', 'Entertainment', 'uploaded-files/category-images/1226361702321318.jpg', 1, '2023-12-11 13:01:58', '2023-12-11 13:01:58');

-- --------------------------------------------------------

--
-- Table structure for table `colors`
--

CREATE TABLE `colors` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `code` varchar(255) NOT NULL,
  `description` varchar(255) DEFAULT NULL,
  `status` varchar(255) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `colors`
--

INSERT INTO `colors` (`id`, `name`, `code`, `description`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Black', '#000000', NULL, '1', '2023-12-11 13:04:49', '2023-12-11 13:04:49'),
(2, 'Blue', '#0019d6', NULL, '1', '2023-12-11 13:05:12', '2023-12-11 13:05:12'),
(3, 'Red', '#eb0000', NULL, '1', '2023-12-11 13:05:25', '2023-12-11 13:05:25'),
(4, 'White', '#f7f7f7', NULL, '1', '2023-12-11 13:05:41', '2023-12-11 13:05:41'),
(5, 'Yellow', '#d8dc04', NULL, '1', '2023-12-11 13:06:07', '2023-12-11 13:06:07'),
(6, 'Pink', '#df0de3', NULL, '1', '2023-12-30 03:25:03', '2023-12-30 03:25:03'),
(7, 'None', '#000000', NULL, '1', '2023-12-30 04:28:52', '2023-12-30 04:28:52');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `address` text DEFAULT NULL,
  `date_of_birth` text DEFAULT NULL,
  `blood_group` varchar(255) DEFAULT NULL,
  `district` varchar(255) DEFAULT NULL,
  `image` text DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `name`, `email`, `mobile`, `password`, `address`, `date_of_birth`, `blood_group`, `district`, `image`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Kelly Porter', 'jukojew@mailinator.com', '265', '$2y$10$wDbnzfGxFZVInTEUHt07ceL0Jga8xbjBlCAPxVJMBtE3vXvd0wtJG', NULL, NULL, NULL, NULL, NULL, 1, '2023-12-30 14:45:39', '2023-12-30 14:45:39'),
(2, 'Amethyst Moss', 'wefu@mailinator.com', '277', '$2y$10$uvHjKdJcj/qYpiFZczBXW.4fcE3wlhG9XoM5SHVMNKRqe/VCbdgRi', NULL, NULL, NULL, NULL, NULL, 1, '2023-12-30 15:10:41', '2023-12-30 15:10:41'),
(3, 'afgh', 'admin@admin.com', '45666', '$2y$10$WOi2mO3TahvXOizk9SR06eK3/g7mSHnvVmWPlczb3AcPsjtFfEel.', NULL, NULL, NULL, NULL, NULL, 1, '2023-12-30 16:28:06', '2023-12-30 16:28:06'),
(4, 'sdsad', 'khan@khan.com', '454545', '$2y$10$baXSrCOmiFk5bdOLi3HQzO6Ks8fR0DOQSyH1jc7ob/bqChg6OKbEe', NULL, NULL, NULL, NULL, NULL, 1, '2024-01-23 13:33:43', '2024-01-23 13:33:43'),
(5, 'Andrew Gordon', 'ripakaza@mailinator.com', '58', '$2y$10$bfv0cZhjrbrjbjC6YLbgI.qBxKiowhH6KSog2Y6QuXjJVznHNluQ6', NULL, NULL, NULL, NULL, NULL, 1, '2024-01-23 15:15:31', '2024-01-23 15:15:31'),
(7, 'Fuller Moody', 'dunydebo@mailinator.com', '875', '$2y$10$dIXmA9aN2WyVGzNAwbeug.L21G/W4pAW6F/.RBr83Ldq5nUCuxd9G', NULL, NULL, NULL, NULL, NULL, 1, '2024-01-23 15:21:17', '2024-01-23 15:21:17'),
(9, 'Emi Murray', 'sazonitak@mailinator.com', '162', '$2y$10$UeBFPOiVRCdyN7ssmlOd1e8dZg142sfOkzNtoCoSO/ly5i/1KuQ36', NULL, NULL, NULL, NULL, NULL, 1, '2024-01-25 14:25:41', '2024-01-25 14:25:41'),
(10, 'Macy Bush', 'nenided@mailinator.com', '128', '$2y$10$OCpkSLKV0ik7MjkTb8CCGOm7RJp5QlGxN6QgphB99CKmPkPXtZPZG', NULL, NULL, NULL, NULL, NULL, 1, '2024-01-25 14:41:39', '2024-01-25 14:41:39'),
(11, 'Khannan', 'juvuhefu@mailinator.com', '139', '$2y$10$j4IRaHULpoI3/kcUnRKgn./tGV00dF/9opAb97fxzvACs59yP8xNC', NULL, NULL, NULL, NULL, NULL, 1, '2024-01-25 15:17:48', '2024-01-25 15:17:48');

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2014_10_12_200000_add_two_factor_columns_to_users_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2023_10_21_102444_create_sessions_table', 1),
(7, '2023_10_21_174400_create_categories_table', 1),
(8, '2023_10_23_142044_create_brands_table', 1),
(9, '2023_12_09_052814_create_sub_categories_table', 1),
(10, '2023_12_09_053124_create_units_table', 1),
(11, '2023_12_09_053135_create_colors_table', 1),
(12, '2023_12_09_053146_create_sizes_table', 1),
(13, '2023_12_09_053157_create_products_table', 1),
(14, '2023_12_09_053255_create_product_offers_table', 1),
(15, '2023_12_11_183433_create_product_colors_table', 1),
(16, '2023_12_11_183442_create_product_sizes_table', 1),
(17, '2023_12_11_183452_create_product_images_table', 1),
(18, '2023_12_27_203223_create_offers_table', 2),
(19, '2023_12_30_183011_create_customers_table', 3),
(20, '2023_12_30_183030_create_orders_table', 3),
(21, '2023_12_30_183102_create_order_details_table', 3),
(22, '2023_12_31_053040_create_wishlists_table', 4);

-- --------------------------------------------------------

--
-- Table structure for table `offers`
--

CREATE TABLE `offers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` int(11) NOT NULL,
  `title_one` varchar(255) NOT NULL,
  `title_two` varchar(255) NOT NULL,
  `description` varchar(255) DEFAULT NULL,
  `image` text DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `offers`
--

INSERT INTO `offers` (`id`, `product_id`, `title_one`, `title_two`, `description`, `image`, `status`, `created_at`, `updated_at`) VALUES
(1, 18, 'Complete your look with', 'New Men\'s Accessories', 'Hats & Caps, Sunglasses, Bags & much more...', 'uploaded-files/offer-images/3365941703712267.png', 1, '2023-12-27 15:03:04', '2023-12-27 15:24:27'),
(2, 20, 'Has just arrived!', 'Huge Summer Collection', 'Swimwear, Tops, Shorts, Sunglasses & much more...', 'uploaded-files/offer-images/3108631703712634.png', 1, '2023-12-27 15:12:00', '2023-12-27 15:30:34'),
(3, 21, 'Hurry up! Limited time offer.', 'Hurry up! Limited time offer.', 'Sneakers, Keds, Sweatshirts, Hoodies & much more...', 'uploaded-files/offer-images/4030831703712779.png', 1, '2023-12-27 15:14:26', '2023-12-27 15:32:59');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `customer_id` int(11) NOT NULL,
  `order_total` int(11) NOT NULL,
  `tax_total` int(11) NOT NULL,
  `shipping_total` int(11) NOT NULL,
  `order_date` text NOT NULL,
  `order_timestamp` text NOT NULL,
  `order_status` varchar(255) NOT NULL DEFAULT 'Pending',
  `delivery_address` text NOT NULL,
  `delivery_status` varchar(255) NOT NULL DEFAULT 'Pending',
  `payment_method` text NOT NULL,
  `payment_amount` int(11) NOT NULL DEFAULT 0,
  `payment_date` text DEFAULT NULL,
  `payment_timestamp` text DEFAULT NULL,
  `payment_status` varchar(255) NOT NULL DEFAULT 'Pending',
  `currency` varchar(255) DEFAULT NULL,
  `transaction_id` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `customer_id`, `order_total`, `tax_total`, `shipping_total`, `order_date`, `order_timestamp`, `order_status`, `delivery_address`, `delivery_status`, `payment_method`, `payment_amount`, `payment_date`, `payment_timestamp`, `payment_status`, `currency`, `transaction_id`, `created_at`, `updated_at`) VALUES
(1, 1, 204, 14, 100, '23-12-30', '1703894400', 'Pending', 'Ea in quidem Nam por', 'Pending', 'online', 0, NULL, NULL, 'Pending', NULL, NULL, '2023-12-30 14:45:40', '2023-12-30 14:45:40'),
(2, 2, 185, 11, 100, '23-12-30', '1703894400', 'Pending', 'Id incidunt deseru', 'Pending', 'cash', 0, NULL, NULL, 'Pending', NULL, NULL, '2023-12-30 15:10:41', '2023-12-30 15:10:41'),
(3, 3, 278, 23, 100, '23-12-30', '1703894400', 'Pending', 'Mirpur', 'Pending', 'online', 0, NULL, NULL, 'Pending', NULL, NULL, '2023-12-30 16:41:07', '2023-12-30 16:41:07'),
(4, 3, 278, 23, 100, '23-12-30', '1703894400', 'Pending', 'Mirpur', 'Pending', 'online', 0, NULL, NULL, 'Pending', NULL, NULL, '2023-12-30 16:41:07', '2023-12-30 16:41:07'),
(5, 4, 158, 8, 100, '24-01-23', '1705968000', 'Pending', 'sdsad', 'Pending', 'online', 0, NULL, NULL, 'Pending', NULL, NULL, '2024-01-23 13:33:43', '2024-01-23 13:33:43'),
(6, 4, 158, 8, 100, '24-01-23', '1705968000', 'Pending', 'sdsad', 'Pending', 'online', 0, NULL, NULL, 'Pending', NULL, NULL, '2024-01-23 13:34:48', '2024-01-23 13:34:48'),
(7, 4, 158, 8, 100, '24-01-23', '1705968000', 'Pending', 'sdsad', 'Pending', 'online', 0, NULL, NULL, 'Pending', NULL, NULL, '2024-01-23 13:37:58', '2024-01-23 13:37:58'),
(8, 4, 100, 0, 100, '24-01-23', '1705968000', 'Pending', 'gfdgfdg', 'Pending', 'online', 0, NULL, NULL, 'Pending', NULL, NULL, '2024-01-23 13:38:31', '2024-01-23 13:38:31'),
(9, 4, 100, 0, 100, '24-01-23', '1705968000', 'Pending', 'fdgfdgfdgfd', 'Pending', 'cash', 0, NULL, NULL, 'Pending', NULL, NULL, '2024-01-23 13:39:25', '2024-01-23 13:39:25'),
(10, 4, 100, 0, 100, '24-01-23', '1705968000', 'Pending', 'ytuytuytu', 'Pending', 'cash', 0, NULL, NULL, 'Pending', NULL, NULL, '2024-01-23 13:45:30', '2024-01-23 13:45:30'),
(11, 4, 100, 0, 100, '24-01-23', '1705968000', 'Pending', 'ytuiuyiyui', 'Pending', 'online', 0, NULL, NULL, 'Pending', NULL, NULL, '2024-01-23 13:48:10', '2024-01-23 13:48:10'),
(29, 11, 158, 8, 100, '2024-01-25', '1706140800', 'Processing', 'Modi dolorem aut con', 'Pending', 'online', 0, NULL, NULL, 'Pending', 'BDT', '65b2cffd0152d', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `order_details`
--

CREATE TABLE `order_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `product_color` varchar(255) NOT NULL,
  `product_size` varchar(255) NOT NULL,
  `product_price` int(11) NOT NULL,
  `product_qty` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `order_details`
--

INSERT INTO `order_details` (`id`, `order_id`, `product_id`, `product_name`, `product_color`, `product_size`, `product_price`, `product_qty`, `created_at`, `updated_at`) VALUES
(1, 1, 30, 'Men\'s Blazer Plaid Wool Suit Coats Lapel Long Sleeve Button Suit Business Casual and Formal Suit Jacket', 'Blue', 'XL', 45, 2, '2023-12-30 14:45:40', '2023-12-30 14:45:40'),
(2, 2, 28, 'Journee Collection Womens Tru Pointed Toe High Stiletto Pumps', 'Red', '7', 74, 1, '2023-12-30 15:10:41', '2023-12-30 15:10:41'),
(3, 3, 34, 'Verizon Samsung Galaxy A14 5G, 64GB, Black', 'Black', 'NA', 155, 1, '2023-12-30 16:41:07', '2023-12-30 16:41:07'),
(4, 5, 27, 'Dockers Mens Irving Slip Resistant Work Dress Oxford Shoe', 'Black', '8', 50, 1, '2024-01-23 13:33:43', '2024-01-23 13:33:43'),
(5, 24, 30, 'Men\'s Blazer Plaid Wool Suit Coats Lapel Long Sleeve Button Suit Business Casual and Formal Suit Jacket', 'Blue', 'M', 45, 1, '2024-01-25 14:37:43', '2024-01-25 14:37:43'),
(6, 29, 27, 'Dockers Mens Irving Slip Resistant Work Dress Oxford Shoe', 'Black', '8', 50, 1, '2024-01-25 15:17:49', '2024-01-25 15:17:49');

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
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` int(11) NOT NULL,
  `sub_category_id` int(11) NOT NULL,
  `brand_id` int(11) NOT NULL,
  `unit_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `code` varchar(255) NOT NULL,
  `short_description` text NOT NULL,
  `long_description` longtext NOT NULL,
  `image` text NOT NULL,
  `regular_price` double(11,2) NOT NULL,
  `selling_price` double(11,2) NOT NULL,
  `stock_amount` int(11) NOT NULL DEFAULT 0,
  `hit_count` int(11) NOT NULL DEFAULT 0,
  `sales_count` int(11) NOT NULL DEFAULT 0,
  `featured_status` tinyint(4) NOT NULL DEFAULT 1,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `category_id`, `sub_category_id`, `brand_id`, `unit_id`, `name`, `code`, `short_description`, `long_description`, `image`, `regular_price`, `selling_price`, `stock_amount`, `hit_count`, `sales_count`, `featured_status`, `status`, `created_at`, `updated_at`) VALUES
(23, 1, 3, 2, 1, 'Hind 3 Piece Jogger, T-Shirt and Hoodie Set , Boys Size 5-12', '15478', 'Elevate your little boy\'s fashion game with the Hind 3-Piece Jogger, T-Shirt, and Hoodie Set. The Hind Boys 3-Piece Jogger, T-Shirt, and Hoodie Set is all about mixing and matching. Create multiple looks by pairing these pieces together or incorporating them into your child\'s existing wardrobe. From lounging at home, sports to exploring the outdoors, this set effortlessly adapts to various occasions.', '<div class=\"expand-collapse-header flex justify-between items-center w-100\" style=\"display: flex; align-items: center; justify-content: space-between; width: 860.656px; color: rgb(0, 0, 0); font-family: Bogle, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: medium;\"><h3 class=\"w-100 ma0 pa3 f5 lh-copy normal\" style=\"line-height: 1.5; width: 820.656px; padding: 1rem; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; font-size: 1rem;\">Product details</h3><div class=\"pr3\" style=\"padding-right: 1rem;\"><button class=\"bg-transparent bn lh-solid pa0 sans-serif tc underline inline-button black pointer f6 bw0 bg-white pt3\" type=\"button\" aria-expanded=\"true\" aria-label=\"Product details\" style=\"box-sizing: inherit; font-family: Bogle, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 0.875rem; line-height: 1; border-width: 0px; color: rgb(0, 0, 0); padding: 1rem 0px 0px; text-decoration-line: underline;\"><span class=\"ld ld-ChevronUp pa0\" style=\"box-sizing: content-box; -webkit-font-smoothing: antialiased; display: inline-block; font-variant-numeric: normal; font-variant-east-asian: normal; font-variant-alternates: normal; font-kerning: auto; font-optical-sizing: auto; font-feature-settings: normal; font-variation-settings: normal; font-variant-position: normal; font-stretch: normal; font-size: 1.5rem; line-height: 1; font-family: ui-icons; padding: 0px; vertical-align: -0.25em; width: 1.5rem; height: 1.5rem;\"></span></button></div></div><div class=\"w_rNem expand-collapse-content\" data-testid=\"ui-collapse-panel\" style=\"overflow-y: hidden; transition: height 0.3s linear 0s; width: 860.656px; color: rgb(0, 0, 0); font-family: Bogle, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: medium; height: auto;\"><div class=\"ph3 pb4 pt1\" style=\"padding: 0.25rem 1rem 1.5rem;\"><div class=\"nb3\" data-testid=\"product-description-content\" style=\"margin-bottom: -1rem;\"><div class=\"mb3\" style=\"margin-bottom: 1rem;\"><span class=\"b f6 mid-gray lh-copy lh-title overflow-visible db w_V_DM\" style=\"box-sizing: inherit; -webkit-box-orient: vertical; display: block; font-weight: 700; line-height: 1.5; color: rgb(70, 71, 74); font-size: 0.875rem; padding-bottom: 0em; margin-bottom: 0em;\"><div class=\"dangerous-html mb3\" style=\"margin-bottom: 1rem;\">Elevate your little boy\'s fashion game with the Hind 3-Piece Jogger, T-Shirt, and Hoodie Set. The Hind Boys 3-Piece Jogger, T-Shirt, and Hoodie Set is all about mixing and matching. Create multiple looks by pairing these pieces together or incorporating them into your child\'s existing wardrobe. From lounging at home, sports to exploring the outdoors, this set effortlessly adapts to various occasions.</div></span></div><div class=\"mb3\" style=\"margin-bottom: 1rem;\"><span class=\"f6 mid-gray lh-title overflow-visible db w_V_DM\" style=\"box-sizing: inherit; -webkit-box-orient: vertical; display: block; line-height: 1.25; color: rgb(70, 71, 74); font-size: 0.875rem; padding-bottom: 0em; margin-bottom: 0em;\"><div class=\"dangerous-html mb3\" style=\"margin-bottom: 1rem;\"><ul style=\"margin-bottom: 1rem; margin-top: 1rem; padding-left: 1.5rem;\"><li>Set inluded 1 t shirt, a pair of joggers, and a pullover hoodie</li><li>Machine Washable</li><li>Mix and match for endless outfit combinations: Create unique looks by pairing different hoodies, sweatpants, and tees from the collection</li></ul></div></span></div><div class=\"w_LDl2 w_ISLy bn bg-transparent dark-gray pa0 sans-serif mb3 lh-copy\" style=\"border-radius: 0.25rem; border-style: none; border-width: 0px; display: flex; font-size: 0.875rem; line-height: 1.5; padding: 0px; width: 828.656px; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; border-color: rgb(186, 187, 190) rgb(186, 187, 190) rgb(186, 187, 190) rgb(0, 0, 0); color: rgb(46, 47, 50); margin-bottom: 1rem;\"><span class=\"w__zJP\" style=\"box-sizing: inherit; margin-right: 0.5rem;\"><span class=\"w_iUH7\" style=\"box-sizing: inherit; border: 0px !important; clip: rect(1px, 1px, 1px, 1px) !important; clip-path: inset(50%) !important; height: 1px !important; overflow: hidden !important; padding: 0px !important; position: absolute !important; text-wrap: nowrap !important; width: 1px !important;\">info:</span><svg fill=\"currentColor\" height=\"1em\" viewBox=\"0 0 16 16\" width=\"1em\" xmlns=\"http://www.w3.org/2000/svg\" aria-hidden=\"true\" role=\"presentation\" style=\"font-size: 1rem; vertical-align: -0.175em;\"><path fill-rule=\"evenodd\" d=\"M8 1a7 7 0 1 1 0 14A7 7 0 0 1 8 1Zm0 1a6 6 0 1 0 0 12A6 6 0 0 0 8 2Zm-1 9.5a.5.5 0 0 1-.09-.992L7 10.5h.499v-3H7a.5.5 0 0 1-.492-.41L6.5 7a.5.5 0 0 1 .41-.492L7 6.5h1.5l-.001 4H9a.5.5 0 0 1 .09.992L9 11.5H7Zm.879-7.121a.621.621 0 1 1 0 1.242.621.621 0 0 1 0-1.242Z\"></path></svg></span><div class=\"w_2NhK\" style=\"gap: 0.25rem 1rem; display: flex; flex-wrap: wrap;\"><span class=\"b\" style=\"box-sizing: inherit; font-weight: 700;\">We aim to show you accurate product information.&nbsp;</span>Manufacturers, suppliers and others provide what you see here, and we have not verified it.&nbsp;&nbsp;<button type=\"button\" class=\"underline pointer b--none bg-transparent sans-serif dark-gray ph0\" aria-label=\"See our disclaimer\" style=\"box-sizing: inherit; font-family: Bogle, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 14px; line-height: 1.15; color: rgb(46, 47, 50); padding-left: 0px; padding-right: 0px; text-decoration-line: underline;\">See our disclaimer</button></div></div></div></div></div>', 'uploaded-files/product-images/4924821703918240.webp', 32.00, 25.00, 35, 0, 0, 1, 1, '2023-12-30 00:37:20', '2023-12-30 00:37:20'),
(24, 1, 3, 2, 1, 'Summer Savings Clearance 2023! loopsun Summer Toddler Baby Girls Sleeveless Dress Tank Dress Children\'s Clothing Red 2-3 Years', '154895', 'Stylish and fashion design make your baby more attractive\r\nGreat for casual, Daily, party or photoshoot, also a great idea for a baby show gifts\r\nIt is made of high quality materials,Soft hand feeling, no any harm to your baby\'s skin\r\nPlease allow slight 1-3cm difference due to manual measurement and a little color variation for different display setting,\r\nthanks for your understanding!', '<div class=\"expand-collapse-header flex justify-between items-center w-100\" style=\"display: flex; align-items: center; justify-content: space-between; width: 860.656px; color: rgb(0, 0, 0); font-family: Bogle, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: medium;\"><h3 class=\"w-100 ma0 pa3 f5 lh-copy normal\" style=\"line-height: 1.5; width: 820.656px; padding: 1rem; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; font-size: 1rem;\">Product details</h3><div class=\"pr3\" style=\"padding-right: 1rem;\"><button class=\"bg-transparent bn lh-solid pa0 sans-serif tc underline inline-button black pointer f6 bw0 bg-white pt3\" type=\"button\" aria-expanded=\"true\" aria-label=\"Product details\" style=\"box-sizing: inherit; font-family: Bogle, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 0.875rem; line-height: 1; border-width: 0px; color: rgb(0, 0, 0); padding: 1rem 0px 0px; text-decoration-line: underline;\"><span class=\"ld ld-ChevronUp pa0\" style=\"box-sizing: content-box; -webkit-font-smoothing: antialiased; display: inline-block; font-variant-numeric: normal; font-variant-east-asian: normal; font-variant-alternates: normal; font-kerning: auto; font-optical-sizing: auto; font-feature-settings: normal; font-variation-settings: normal; font-variant-position: normal; font-stretch: normal; font-size: 1.5rem; line-height: 1; font-family: ui-icons; padding: 0px; vertical-align: -0.25em; width: 1.5rem; height: 1.5rem;\"></span></button></div></div><div class=\"w_rNem expand-collapse-content\" data-testid=\"ui-collapse-panel\" style=\"overflow-y: hidden; transition: height 0.3s linear 0s; width: 860.656px; color: rgb(0, 0, 0); font-family: Bogle, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: medium; height: auto;\"><div class=\"ph3 pb4 pt1\" style=\"padding: 0.25rem 1rem 1.5rem;\"><div class=\"nb3\" data-testid=\"product-description-content\" style=\"margin-bottom: -1rem;\"><div class=\"mb3\" style=\"margin-bottom: 1rem;\"><span class=\"b f6 mid-gray lh-copy lh-title overflow-visible db w_V_DM\" style=\"box-sizing: inherit; -webkit-box-orient: vertical; display: block; font-weight: 700; line-height: 1.5; color: rgb(70, 71, 74); font-size: 0.875rem; padding-bottom: 0em; margin-bottom: 0em;\"><div class=\"dangerous-html mb3\" style=\"margin-bottom: 1rem;\">Summer Toddler Baby Girls Sleeveless Dress Tank Dress Children\'s Clothing<br style=\"box-sizing: inherit;\">Product Description:<br style=\"box-sizing: inherit;\">Fashion design,100% Brand New,high quality!<br style=\"box-sizing: inherit;\">Material: Cotton<br style=\"box-sizing: inherit;\">Pattern Type:Print Sleeve length: Sleeveless<br style=\"box-sizing: inherit;\">Main Color: As The Picture Show<br style=\"box-sizing: inherit;\">Style: Fashion<br style=\"box-sizing: inherit;\">Stylish and fashion design make your baby more attractive<br style=\"box-sizing: inherit;\">Great for casual, Daily, party or photoshoot, also a great idea for a baby show gifts<br style=\"box-sizing: inherit;\">It is made of high quality materials,Soft hand feeling, no any harm to your baby\'s skin<br style=\"box-sizing: inherit;\">Please allow slight 1-3cm difference due to manual measurement and a little color variation for different display setting,<br style=\"box-sizing: inherit;\">thanks for your understanding!<br style=\"box-sizing: inherit;\">1 inch = 2.54 cm<br style=\"box-sizing: inherit;\">Thank you and nice day!<br style=\"box-sizing: inherit;\">Package include:1PC Dress</div></span></div><div class=\"mb3\" style=\"margin-bottom: 1rem;\"><span class=\"f6 mid-gray lh-title overflow-visible db w_V_DM\" style=\"box-sizing: inherit; -webkit-box-orient: vertical; display: block; line-height: 1.25; color: rgb(70, 71, 74); font-size: 0.875rem; padding-bottom: 0em; margin-bottom: 0em;\"><div class=\"dangerous-html mb3\" style=\"margin-bottom: 1rem;\"><ul style=\"margin-bottom: 1rem; margin-top: 1rem; padding-left: 1.5rem;\"><li>Summer Toddler Baby Girls Sleeveless Dress Tank Dress Children\'s Clothing Red 2-3 Years</li><li>Occasion:Party,Club,Daily,Running,Sports</li><li>Toddler Kids Baby Girls Plaid Skirt Set</li><li>Girls Princess Summer Dress</li><li>Toddler Kids Baby Girls Plaid Skirt Set</li></ul></div></span></div><div class=\"w_LDl2 w_ISLy bn bg-transparent dark-gray pa0 sans-serif mb3 lh-copy\" style=\"border-radius: 0.25rem; border-style: none; border-width: 0px; display: flex; font-size: 0.875rem; line-height: 1.5; padding: 0px; width: 828.656px; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; border-color: rgb(186, 187, 190) rgb(186, 187, 190) rgb(186, 187, 190) rgb(0, 0, 0); color: rgb(46, 47, 50); margin-bottom: 1rem;\"><span class=\"w__zJP\" style=\"box-sizing: inherit; margin-right: 0.5rem;\"><span class=\"w_iUH7\" style=\"box-sizing: inherit; border: 0px !important; clip: rect(1px, 1px, 1px, 1px) !important; clip-path: inset(50%) !important; height: 1px !important; overflow: hidden !important; padding: 0px !important; position: absolute !important; text-wrap: nowrap !important; width: 1px !important;\">info:</span><svg fill=\"currentColor\" height=\"1em\" viewBox=\"0 0 16 16\" width=\"1em\" xmlns=\"http://www.w3.org/2000/svg\" aria-hidden=\"true\" role=\"presentation\" style=\"font-size: 1rem; vertical-align: -0.175em;\"><path fill-rule=\"evenodd\" d=\"M8 1a7 7 0 1 1 0 14A7 7 0 0 1 8 1Zm0 1a6 6 0 1 0 0 12A6 6 0 0 0 8 2Zm-1 9.5a.5.5 0 0 1-.09-.992L7 10.5h.499v-3H7a.5.5 0 0 1-.492-.41L6.5 7a.5.5 0 0 1 .41-.492L7 6.5h1.5l-.001 4H9a.5.5 0 0 1 .09.992L9 11.5H7Zm.879-7.121a.621.621 0 1 1 0 1.242.621.621 0 0 1 0-1.242Z\"></path></svg></span><div class=\"w_2NhK\" style=\"gap: 0.25rem 1rem; display: flex; flex-wrap: wrap;\"><span class=\"b\" style=\"box-sizing: inherit; font-weight: 700;\">We aim to show you accurate product information.&nbsp;</span>Manufacturers, suppliers and others provide what you see here, and we have not verified it.&nbsp;&nbsp;<button type=\"button\" class=\"underline pointer b--none bg-transparent sans-serif dark-gray ph0\" aria-label=\"See our disclaimer\" style=\"box-sizing: inherit; font-family: Bogle, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 14px; line-height: 1.15; color: rgb(46, 47, 50); padding-left: 0px; padding-right: 0px; text-decoration-line: underline;\">See our disclaimer</button></div></div></div></div></div>', 'uploaded-files/product-images/4209601703924563.jpeg', 10.00, 7.00, 29, 0, 0, 1, 1, '2023-12-30 02:22:43', '2023-12-30 02:22:43'),
(25, 2, 7, 20, 1, 'HOBIBEAR Boys Girls Toddler Snow Boots', '154841', 'HOBIBEAR Boys Girls Toddler Snow Boots Waterproof Slip Resistant Outdoor Winter Shoes(Toddler/Little Kids/Big Kids)', '<div class=\"expand-collapse-header flex justify-between items-center w-100\" style=\"display: flex; align-items: center; justify-content: space-between; width: 860.656px; color: rgb(0, 0, 0); font-family: Bogle, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: medium;\"><h3 class=\"w-100 ma0 pa3 f5 lh-copy normal\" style=\"line-height: 1.5; width: 820.656px; padding: 1rem; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; font-size: 1rem;\">Product details</h3><div class=\"pr3\" style=\"padding-right: 1rem;\"><button class=\"bg-transparent bn lh-solid pa0 sans-serif tc underline inline-button black pointer f6 bw0 bg-white pt3\" type=\"button\" aria-expanded=\"true\" aria-label=\"Product details\" style=\"box-sizing: inherit; font-family: Bogle, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 0.875rem; line-height: 1; border-width: 0px; color: rgb(0, 0, 0); padding: 1rem 0px 0px; text-decoration-line: underline;\"><span class=\"ld ld-ChevronUp pa0\" style=\"box-sizing: content-box; -webkit-font-smoothing: antialiased; display: inline-block; font-variant-numeric: normal; font-variant-east-asian: normal; font-variant-alternates: normal; font-kerning: auto; font-optical-sizing: auto; font-feature-settings: normal; font-variation-settings: normal; font-variant-position: normal; font-stretch: normal; font-size: 1.5rem; line-height: 1; font-family: ui-icons; padding: 0px; vertical-align: -0.25em; width: 1.5rem; height: 1.5rem;\"></span></button></div></div><div class=\"w_rNem expand-collapse-content\" data-testid=\"ui-collapse-panel\" style=\"overflow-y: hidden; transition: height 0.3s linear 0s; width: 860.656px; color: rgb(0, 0, 0); font-family: Bogle, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: medium; height: auto;\"><div class=\"ph3 pb4 pt1\" style=\"padding: 0.25rem 1rem 1.5rem;\"><div class=\"nb3\" data-testid=\"product-description-content\" style=\"margin-bottom: -1rem;\"><div class=\"mb3\" style=\"margin-bottom: 1rem;\"><span class=\"b f6 mid-gray lh-copy lh-title overflow-visible db w_V_DM\" style=\"box-sizing: inherit; -webkit-box-orient: vertical; display: block; font-weight: 700; line-height: 1.5; color: rgb(70, 71, 74); font-size: 0.875rem; padding-bottom: 0em; margin-bottom: 0em;\"><div class=\"dangerous-html mb3\" style=\"margin-bottom: 1rem;\">Kids snow boots featuring faux fur lining, maximizing warmth and comfort all day. easy to clean.High quality water-resistant and features durable textile upper, easy to care for and stain resistant, keep feet dry and comfortable.Hook-and-loop fastener at the top to tighten in order to make children easy to pull on and off by themselves. (Toddler Size 4~Little Kids Size 1)</div></span></div><div class=\"mb3\" style=\"margin-bottom: 1rem;\"><span class=\"f6 mid-gray lh-title overflow-visible db w_V_DM\" style=\"box-sizing: inherit; -webkit-box-orient: vertical; display: block; line-height: 1.25; color: rgb(70, 71, 74); font-size: 0.875rem; padding-bottom: 0em; margin-bottom: 0em;\"><div class=\"dangerous-html mb3\" style=\"margin-bottom: 1rem;\"><ul style=\"margin-bottom: 1rem; margin-top: 1rem; padding-left: 1.5rem;\"><li>Material: Ethylene Vinyl Acetate sole + Waterproof Upper</li><li>Waterproof Surface: High quality water-resistant and features durable textile upper, easy to care for and stain resistant, keep feet dry and comfortable.</li><li>Easy On and Off: Hook-and-loop fastener at the top to tighten in order to keep snow out, easy to pull on and off for kids by themselves</li><li>Ideal For Any Activity: Our snow boots are anti-skid and anti-wear, these perfect for activities like camping, hiking running, playing sledding, ski, trip, walking the dog, walking, outdoor.</li><li>Thank you for your trust in HOBIBEAR, and wish you a happy shopping!!!</li></ul></div></span></div></div></div></div>', 'uploaded-files/product-images/3707041703926185.jpeg', 40.00, 32.00, 30, 0, 0, 1, 1, '2023-12-30 02:49:45', '2023-12-30 02:49:45'),
(26, 2, 7, 2, 1, 'Skechers Little & Big Boys Go Run 650 Tigrux Sneakers', '154895', 'Lightweight Gore and Strap Sneaker with Upper 3d Print\r\nLightweight\r\nFlexible traction outsole\r\nCushioned comfort insole', '<div class=\"expand-collapse-header flex justify-between items-center w-100\" style=\"display: flex; align-items: center; justify-content: space-between; width: 860.656px; color: rgb(0, 0, 0); font-family: Bogle, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: medium;\"><h3 class=\"w-100 ma0 pa3 f5 lh-copy normal\" style=\"line-height: 1.5; width: 820.656px; padding: 1rem; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; font-size: 1rem;\">Product details</h3><div class=\"pr3\" style=\"padding-right: 1rem;\"><button class=\"bg-transparent bn lh-solid pa0 sans-serif tc underline inline-button black pointer f6 bw0 bg-white pt3\" type=\"button\" aria-expanded=\"true\" aria-label=\"Product details\" style=\"box-sizing: inherit; font-family: Bogle, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 0.875rem; line-height: 1; border-width: 0px; color: rgb(0, 0, 0); padding: 1rem 0px 0px; text-decoration-line: underline;\"><span class=\"ld ld-ChevronUp pa0\" style=\"box-sizing: content-box; -webkit-font-smoothing: antialiased; display: inline-block; font-variant-numeric: normal; font-variant-east-asian: normal; font-variant-alternates: normal; font-kerning: auto; font-optical-sizing: auto; font-feature-settings: normal; font-variation-settings: normal; font-variant-position: normal; font-stretch: normal; font-size: 1.5rem; line-height: 1; font-family: ui-icons; padding: 0px; vertical-align: -0.25em; width: 1.5rem; height: 1.5rem;\"></span></button></div></div><div class=\"w_rNem expand-collapse-content\" data-testid=\"ui-collapse-panel\" style=\"overflow-y: hidden; transition: height 0.3s linear 0s; width: 860.656px; color: rgb(0, 0, 0); font-family: Bogle, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: medium; height: auto;\"><div class=\"ph3 pb4 pt1\" style=\"padding: 0.25rem 1rem 1.5rem;\"><div class=\"nb3\" data-testid=\"product-description-content\" style=\"margin-bottom: -1rem;\"><div class=\"mb3\" style=\"margin-bottom: 1rem;\"><span class=\"b f6 mid-gray lh-copy lh-title overflow-visible db w_V_DM\" style=\"box-sizing: inherit; -webkit-box-orient: vertical; display: block; font-weight: 700; line-height: 1.5; color: rgb(70, 71, 74); font-size: 0.875rem; padding-bottom: 0em; margin-bottom: 0em;\"><div class=\"dangerous-html mb3\" style=\"margin-bottom: 1rem;\">Lightweight Gore and Strap Sneaker with Upper 3d Print</div></span></div><div class=\"mb3\" style=\"margin-bottom: 1rem;\"><span class=\"f6 mid-gray lh-title overflow-visible db w_V_DM\" style=\"box-sizing: inherit; -webkit-box-orient: vertical; display: block; line-height: 1.25; color: rgb(70, 71, 74); font-size: 0.875rem; padding-bottom: 0em; margin-bottom: 0em;\"><div class=\"dangerous-html mb3\" style=\"margin-bottom: 1rem;\"><ul style=\"margin-bottom: 1rem; margin-top: 1rem; padding-left: 1.5rem;\"><li>Lightweight</li><li>Flexible traction outsole</li><li>Cushioned comfort insole</li></ul></div></span></div></div></div></div>', 'uploaded-files/product-images/2335011703927387.jpeg', 55.00, 45.00, 50, 0, 0, 1, 1, '2023-12-30 03:09:47', '2023-12-30 03:09:47'),
(27, 2, 4, 2, 1, 'Dockers Mens Irving Slip Resistant Work Dress Oxford Shoe', '548941', 'Keep your style sleek, refined, and worry-free with these slip-resistant Dockers dress shoes. The safety outsole creates next level traction, while the memory foam insole provides unmatched support and comfort, making these oxfords ideal for good foot health. These men’s shoes have polished man-made uppers that have been treated with Stain Defender, so you can stay looking sharp for any occasion.', '<div class=\"expand-collapse-header flex justify-between items-center w-100\" style=\"display: flex; align-items: center; justify-content: space-between; width: 860.656px; color: rgb(0, 0, 0); font-family: Bogle, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: medium;\"><h3 class=\"w-100 ma0 pa3 f5 lh-copy normal\" style=\"line-height: 1.5; width: 820.656px; padding: 1rem; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; font-size: 1rem;\">Product details</h3><div class=\"pr3\" style=\"padding-right: 1rem;\"><button class=\"bg-transparent bn lh-solid pa0 sans-serif tc underline inline-button black pointer f6 bw0 bg-white pt3\" type=\"button\" aria-expanded=\"true\" aria-label=\"Product details\" style=\"box-sizing: inherit; font-family: Bogle, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 0.875rem; line-height: 1; border-width: 0px; color: rgb(0, 0, 0); padding: 1rem 0px 0px; text-decoration-line: underline;\"><span class=\"ld ld-ChevronUp pa0\" style=\"box-sizing: content-box; -webkit-font-smoothing: antialiased; display: inline-block; font-variant-numeric: normal; font-variant-east-asian: normal; font-variant-alternates: normal; font-kerning: auto; font-optical-sizing: auto; font-feature-settings: normal; font-variation-settings: normal; font-variant-position: normal; font-stretch: normal; font-size: 1.5rem; line-height: 1; font-family: ui-icons; padding: 0px; vertical-align: -0.25em; width: 1.5rem; height: 1.5rem;\"></span></button></div></div><div class=\"w_rNem expand-collapse-content\" data-testid=\"ui-collapse-panel\" style=\"overflow-y: hidden; transition: height 0.3s linear 0s; width: 860.656px; color: rgb(0, 0, 0); font-family: Bogle, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: medium; height: auto;\"><div class=\"ph3 pb4 pt1\" style=\"padding: 0.25rem 1rem 1.5rem;\"><div class=\"nb3\" data-testid=\"product-description-content\" style=\"margin-bottom: -1rem;\"><div class=\"mb3\" style=\"margin-bottom: 1rem;\"><span class=\"b f6 mid-gray lh-copy lh-title overflow-visible db w_V_DM\" style=\"box-sizing: inherit; -webkit-box-orient: vertical; display: block; font-weight: 700; line-height: 1.5; color: rgb(70, 71, 74); font-size: 0.875rem; padding-bottom: 0em; margin-bottom: 0em;\"><div class=\"dangerous-html mb3\" style=\"margin-bottom: 1rem;\">Keep your style sleek, refined, and worry-free with these slip-resistant Dockers dress shoes. The safety outsole creates next level traction, while the memory foam insole provides unmatched support and comfort, making these oxfords ideal for good foot health. These men’s shoes have polished man-made uppers that have been treated with Stain Defender, so you can stay looking sharp for any occasion.</div></span></div><div class=\"mb3\" style=\"margin-bottom: 1rem;\"><span class=\"f6 mid-gray lh-title overflow-visible db w_V_DM\" style=\"box-sizing: inherit; -webkit-box-orient: vertical; display: block; line-height: 1.25; color: rgb(70, 71, 74); font-size: 0.875rem; padding-bottom: 0em; margin-bottom: 0em;\"><div class=\"dangerous-html mb3\" style=\"margin-bottom: 1rem;\"><ul style=\"margin-bottom: 1rem; margin-top: 1rem; padding-left: 1.5rem;\"><li>Polished man-made uppers</li><li>Slip-resistant safety outsole which meets ASTM F1677-05 standards for slip resistance</li><li>Treated with Stain Defender, a revolutionary water and stain guard that protects your shoes from spills and stains</li><li>Memory Foam insole shapes to foot for instant comfort and Fusion Footbed adds an extra layer of dual density cushion</li><li>Accepted by the American Podiatric Medical Association for quality and effectiveness in allowing for normal foot function and promoting good foot health</li></ul></div></span></div></div></div></div>', 'uploaded-files/product-images/3382731703927965.jpeg', 65.00, 50.00, 26, 0, 0, 1, 1, '2023-12-30 03:19:25', '2023-12-30 03:19:25'),
(28, 2, 8, 2, 1, 'Journee Collection Womens Tru Pointed Toe High Stiletto Pumps', '451879', 'Show off stunning style in shiny t-strap pumps by Journee Collection. These sleek cut-out pumps feature premium faux leather uppers with a lustrous patent finish and a modern double t-strap design. At Journee Collection, our pump styles will let you go from a fun night out with the girls to kicking back and relaxing at the end of the night without any trouble.', '<div class=\"expand-collapse-header flex justify-between items-center w-100\" style=\"display: flex; align-items: center; justify-content: space-between; width: 860.656px; color: rgb(0, 0, 0); font-family: Bogle, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: medium;\"><h3 class=\"w-100 ma0 pa3 f5 lh-copy normal\" style=\"line-height: 1.5; width: 820.656px; padding: 1rem; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; font-size: 1rem;\">Product details</h3><div class=\"pr3\" style=\"padding-right: 1rem;\"><button class=\"bg-transparent bn lh-solid pa0 sans-serif tc underline inline-button black pointer f6 bw0 bg-white pt3\" type=\"button\" aria-expanded=\"true\" aria-label=\"Product details\" style=\"box-sizing: inherit; font-family: Bogle, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 0.875rem; line-height: 1; border-width: 0px; color: rgb(0, 0, 0); padding: 1rem 0px 0px; text-decoration-line: underline;\"><span class=\"ld ld-ChevronUp pa0\" style=\"box-sizing: content-box; -webkit-font-smoothing: antialiased; display: inline-block; font-variant-numeric: normal; font-variant-east-asian: normal; font-variant-alternates: normal; font-kerning: auto; font-optical-sizing: auto; font-feature-settings: normal; font-variation-settings: normal; font-variant-position: normal; font-stretch: normal; font-size: 1.5rem; line-height: 1; font-family: ui-icons; padding: 0px; vertical-align: -0.25em; width: 1.5rem; height: 1.5rem;\"></span></button></div></div><div class=\"w_rNem expand-collapse-content\" data-testid=\"ui-collapse-panel\" style=\"overflow-y: hidden; transition: height 0.3s linear 0s; width: 860.656px; color: rgb(0, 0, 0); font-family: Bogle, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: medium; height: auto;\"><div class=\"ph3 pb4 pt1\" style=\"padding: 0.25rem 1rem 1.5rem;\"><div class=\"nb3\" data-testid=\"product-description-content\" style=\"margin-bottom: -1rem;\"><div class=\"mb3\" style=\"margin-bottom: 1rem;\"><span class=\"b f6 mid-gray lh-copy lh-title overflow-visible db w_V_DM\" style=\"box-sizing: inherit; -webkit-box-orient: vertical; display: block; font-weight: 700; line-height: 1.5; color: rgb(70, 71, 74); font-size: 0.875rem; padding-bottom: 0em; margin-bottom: 0em;\"><div class=\"dangerous-html mb3\" style=\"margin-bottom: 1rem;\">Show off stunning style in shiny t-strap pumps by Journee Collection. These sleek cut-out pumps feature premium faux leather uppers with a lustrous patent finish and a modern double t-strap design. At Journee Collection, our pump styles will let you go from a fun night out with the girls to kicking back and relaxing at the end of the night without any trouble.</div></span></div><div class=\"mb3\" style=\"margin-bottom: 1rem;\"><span class=\"f6 mid-gray lh-title overflow-visible db w_V_DM\" style=\"box-sizing: inherit; -webkit-box-orient: vertical; display: block; line-height: 1.25; color: rgb(70, 71, 74); font-size: 0.875rem; padding-bottom: 0em; margin-bottom: 0em;\"><div class=\"dangerous-html mb3\" style=\"margin-bottom: 1rem;\"><ul style=\"margin-bottom: 1rem; margin-top: 1rem; padding-left: 1.5rem;\"><li><ul style=\"margin-bottom: 1rem; margin-top: 1rem; padding-left: 1.5rem;\"><li>Heel Height:4-inch</li><li>Heel Type: Stiletto</li><li>Platform Height:1/2-inch</li><li>Shoe Width: Medium</li><li>Closure Type: Buckle</li><li>Strap Type: T-Strap</li><li>Toe Style: Pointed</li><li>Lining: Faux Leather</li><li>Upper Material: Faux Leather</li><li>Outersole Material: Faux Leather over Synthetic</li><li>Footbed: Padded</li></ul></li></ul></div></span></div></div></div></div>', 'uploaded-files/product-images/3370571703928437.jpeg', 85.00, 74.00, 34, 0, 0, 1, 1, '2023-12-30 03:27:17', '2023-12-30 03:27:17'),
(29, 1, 2, 2, 1, 'YAOLAN Men\'s Formal Suits 3 Pieces Single Breated 2 Buttons Blazer Vest Pant Set USA Size', '154899', '1. Please select according to the size chart. This is a standard American size. Please feel free to contact me if you have any questions before purchasing.\r\n2. There will be 1-2in error when measuring. If the suit is not suitable or there are other problems after receiving it, please contact me at any time to help you solve them.', '<div class=\"expand-collapse-header flex justify-between items-center w-100\" style=\"display: flex; align-items: center; justify-content: space-between; width: 860.656px; color: rgb(0, 0, 0); font-family: Bogle, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: medium;\"><h3 class=\"w-100 ma0 pa3 f5 lh-copy normal\" style=\"line-height: 1.5; width: 820.656px; padding: 1rem; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; font-size: 1rem;\">Product details</h3><div class=\"pr3\" style=\"padding-right: 1rem;\"><button class=\"bg-transparent bn lh-solid pa0 sans-serif tc underline inline-button black pointer f6 bw0 bg-white pt3\" type=\"button\" aria-expanded=\"true\" aria-label=\"Product details\" style=\"box-sizing: inherit; font-family: Bogle, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 0.875rem; line-height: 1; border-width: 0px; color: rgb(0, 0, 0); padding: 1rem 0px 0px; text-decoration-line: underline;\"><span class=\"ld ld-ChevronUp pa0\" style=\"box-sizing: content-box; -webkit-font-smoothing: antialiased; display: inline-block; font-variant-numeric: normal; font-variant-east-asian: normal; font-variant-alternates: normal; font-kerning: auto; font-optical-sizing: auto; font-feature-settings: normal; font-variation-settings: normal; font-variant-position: normal; font-stretch: normal; font-size: 1.5rem; line-height: 1; font-family: ui-icons; padding: 0px; vertical-align: -0.25em; width: 1.5rem; height: 1.5rem;\"></span></button></div></div><div class=\"w_rNem expand-collapse-content\" data-testid=\"ui-collapse-panel\" style=\"overflow-y: hidden; transition: height 0.3s linear 0s; width: 860.656px; color: rgb(0, 0, 0); font-family: Bogle, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: medium; height: auto;\"><div class=\"ph3 pb4 pt1\" style=\"padding: 0.25rem 1rem 1.5rem;\"><div class=\"nb3\" data-testid=\"product-description-content\" style=\"margin-bottom: -1rem;\"><div class=\"mb3\" style=\"margin-bottom: 1rem;\"><span class=\"b f6 mid-gray lh-copy lh-title overflow-visible db w_V_DM\" style=\"box-sizing: inherit; -webkit-box-orient: vertical; display: block; font-weight: 700; line-height: 1.5; color: rgb(70, 71, 74); font-size: 0.875rem; padding-bottom: 0em; margin-bottom: 0em;\"><div class=\"dangerous-html mb3\" style=\"margin-bottom: 1rem;\">1. Please select according to the size chart. This is a standard American size. Please feel free to contact me if you have any questions before purchasing.<br style=\"box-sizing: inherit;\">2. There will be 1-2in error when measuring. If the suit is not suitable or there are other problems after receiving it, please contact me at any time to help you solve them.<br style=\"box-sizing: inherit;\">3. The delivery will be arranged within 1 day after the order is placed, and you will receive the package within 5-7days.<br style=\"box-sizing: inherit;\">4.CARE INSTRUCTION:Dry Clean Recommended If Conditions Permit,If You Have To Hand Wash It,Please Keep the Water Temperature Below 40 Degrees and Wash Gently.Steam Ironing,Hang the Suit on the Hangers When You Are Not Wearing them.<br style=\"box-sizing: inherit;\">5.OCCASIONS:Easy to Match with Any Formal/Business /Party/Business/Graduation/Date/Work/Meeting/Prom,Good Gift for Your Friend,Father,Brother and Son.</div></span></div><div class=\"mb3\" style=\"margin-bottom: 1rem;\"><span class=\"f6 mid-gray lh-title overflow-visible db w_V_DM\" style=\"box-sizing: inherit; -webkit-box-orient: vertical; display: block; line-height: 1.25; color: rgb(70, 71, 74); font-size: 0.875rem; padding-bottom: 0em; margin-bottom: 0em;\"><div class=\"dangerous-html mb3\" style=\"margin-bottom: 1rem;\"><div><span style=\"box-sizing: inherit; font-weight: bolder;\">Brand:YAOLAN<br style=\"box-sizing: inherit;\"></span></div><div><span style=\"box-sizing: inherit; font-weight: bolder;\">Color:Navy Blue<br style=\"box-sizing: inherit;\"></span></div><div><span style=\"box-sizing: inherit; font-weight: bolder;\">Jacket/Coat Length:Regular<br style=\"box-sizing: inherit;\"></span></div><div><span style=\"box-sizing: inherit; font-weight: bolder;\">Jacket Sleeve Button Style:Four-Button<br style=\"box-sizing: inherit;\"></span></div><div><span style=\"box-sizing: inherit; font-weight: bolder;\">Jacket Cut:Single-Breasted<br style=\"box-sizing: inherit;\"></span></div><div><span style=\"box-sizing: inherit; font-weight: bolder;\">Department:Men<br style=\"box-sizing: inherit;\"></span></div><div><span style=\"box-sizing: inherit; font-weight: bolder;\">Fabric Type:Polyester and cotton<br style=\"box-sizing: inherit;\"></span></div><div><span style=\"box-sizing: inherit; font-weight: bolder;\">Season:Fall, Spring, Summer, Winter<br style=\"box-sizing: inherit;\"></span></div><div><span style=\"box-sizing: inherit; font-weight: bolder;\">Material:Polyester<br style=\"box-sizing: inherit;\"></span></div><div><span style=\"box-sizing: inherit; font-weight: bolder;\">Front Type:Flat Front<br style=\"box-sizing: inherit;\"></span></div><div><span style=\"box-sizing: inherit; font-weight: bolder;\">Fit:Slim<br style=\"box-sizing: inherit;\"></span></div><div><span style=\"box-sizing: inherit; font-weight: bolder;\">Number of Pieces:3 Pieces<br style=\"box-sizing: inherit;\"></span></div><div><span style=\"box-sizing: inherit; font-weight: bolder;\">Jacket Lapel Style:Notched<br style=\"box-sizing: inherit;\"></span></div><div><span style=\"box-sizing: inherit; font-weight: bolder;\">Garment Care:Dry Clean Only<br style=\"box-sizing: inherit;\"></span></div><div><span style=\"box-sizing: inherit; font-weight: bolder;\">Leg Style:Straight<br style=\"box-sizing: inherit;\"></span></div><div><span style=\"box-sizing: inherit; font-weight: bolder;\">Occasion:Formal, Business, Wedding,Prom.etc, Formal, Wedding<br style=\"box-sizing: inherit;\"></span></div><div><span style=\"box-sizing: inherit; font-weight: bolder;\">Jacket Front Button Style:Two-Button<br style=\"box-sizing: inherit;\"></span></div><div><span style=\"box-sizing: inherit; font-weight: bolder;\">Jacket Vent Style:Single-Vented<br style=\"box-sizing: inherit;\"></span></div><div><span style=\"box-sizing: inherit; font-weight: bolder;\">Size Type:Reguar</span></div></div></span></div></div></div></div>', 'uploaded-files/product-images/4853811703928861.jpeg', 120.00, 100.00, 20, 0, 0, 1, 1, '2023-12-30 03:34:21', '2023-12-30 03:34:21'),
(30, 1, 2, 2, 1, 'Men\'s Blazer Plaid Wool Suit Coats Lapel Long Sleeve Button Suit Business Casual and Formal Suit Jacket', '154898', 'Material: Polyester\r\nColor: Wine Red Plaid/Blue Plaid/Black Plain Color\r\nSize: S, M, L, XL, XXL, XXXL\r\nGender: Men\r\nAge: Adult\r\nSleeve: Long Sleeve\r\nNeck Style: Lapel\r\nPattern: Plaid, Plain Color\r\nQuantity: 1 Piece\r\nOccasion: Great for vacation, party, dating, photography, etc.', '<div class=\"expand-collapse-header flex justify-between items-center w-100\" style=\"display: flex; align-items: center; justify-content: space-between; width: 860.656px; color: rgb(0, 0, 0); font-family: Bogle, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: medium;\"><h3 class=\"w-100 ma0 pa3 f5 lh-copy normal\" style=\"line-height: 1.5; width: 820.656px; padding: 1rem; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; font-size: 1rem;\">Product details</h3><div class=\"pr3\" style=\"padding-right: 1rem;\"><button class=\"bg-transparent bn lh-solid pa0 sans-serif tc underline inline-button black pointer f6 bw0 bg-white pt3\" type=\"button\" aria-expanded=\"true\" aria-label=\"Product details\" style=\"box-sizing: inherit; font-family: Bogle, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 0.875rem; line-height: 1; border-width: 0px; color: rgb(0, 0, 0); padding: 1rem 0px 0px; text-decoration-line: underline;\"><span class=\"ld ld-ChevronUp pa0\" style=\"box-sizing: content-box; -webkit-font-smoothing: antialiased; display: inline-block; font-variant-numeric: normal; font-variant-east-asian: normal; font-variant-alternates: normal; font-kerning: auto; font-optical-sizing: auto; font-feature-settings: normal; font-variation-settings: normal; font-variant-position: normal; font-stretch: normal; font-size: 1.5rem; line-height: 1; font-family: ui-icons; padding: 0px; vertical-align: -0.25em; width: 1.5rem; height: 1.5rem;\"></span></button></div></div><div class=\"w_rNem expand-collapse-content\" data-testid=\"ui-collapse-panel\" style=\"overflow-y: hidden; transition: height 0.3s linear 0s; width: 860.656px; color: rgb(0, 0, 0); font-family: Bogle, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: medium; height: auto;\"><div class=\"ph3 pb4 pt1\" style=\"padding: 0.25rem 1rem 1.5rem;\"><div class=\"nb3\" data-testid=\"product-description-content\" style=\"margin-bottom: -1rem;\"><div class=\"mb3\" style=\"margin-bottom: 1rem;\"><span class=\"b f6 mid-gray lh-copy lh-title overflow-visible db w_V_DM\" style=\"box-sizing: inherit; -webkit-box-orient: vertical; display: block; font-weight: 700; line-height: 1.5; color: rgb(70, 71, 74); font-size: 0.875rem; padding-bottom: 0em; margin-bottom: 0em;\"><div class=\"dangerous-html mb3\" style=\"margin-bottom: 1rem;\">Men\'s Blazer Plaid/Plain Color Lapel Long Sleeve Button Suit Coat<br style=\"box-sizing: inherit;\"><br style=\"box-sizing: inherit;\">Size(cm)<br style=\"box-sizing: inherit;\">S Blazer Length: 73.5 Bust: 103 Sleeve: 63 Shoulder: 44.5<br style=\"box-sizing: inherit;\">M Blazer Length: 75 Bust: 108 Sleeve: 64 Shoulder: 46<br style=\"box-sizing: inherit;\">L Blazer Length: 76.5 Bust: 113 Sleeve: 65 Shoulder: 47.5<br style=\"box-sizing: inherit;\">XL Blazer Length: 78 Bust: 118 Sleeve: 66 Shoulder: 49<br style=\"box-sizing: inherit;\">XXL Blazer Length: 79.5 Bust: 123 Sleeve: 67 Shoulder: 50.5<br style=\"box-sizing: inherit;\">XXXL Blazer Length: 81 Bust: 128 Sleeve: 68 Shoulder: 52<br style=\"box-sizing: inherit;\"><br style=\"box-sizing: inherit;\">Size(inch)<br style=\"box-sizing: inherit;\">S Blazer Length: 28.94 Bust: 40.55 Sleeve: 24.80 Shoulder: 17.52<br style=\"box-sizing: inherit;\">M Blazer Length: 29.53 Bust: 42.52 Sleeve: 25.20 Shoulder: 18.11<br style=\"box-sizing: inherit;\">L Blazer Length: 30.12 Bust: 44.49 Sleeve: 25.59 Shoulder: 18.70<br style=\"box-sizing: inherit;\">XL Blazer Length: 30.71 Bust: 46.46 Sleeve: 25.98 Shoulder: 19.29<br style=\"box-sizing: inherit;\">XXL Blazer Length: 31.30 Bust: 48.43 Sleeve: 26.38 Shoulder: 19.88<br style=\"box-sizing: inherit;\">XXXL Blazer Length: 31.89 Bust: 50.39 Sleeve: 26.77 Shoulder: 20.47<br style=\"box-sizing: inherit;\"><br style=\"box-sizing: inherit;\">Note:<br style=\"box-sizing: inherit;\">1. Please kindly allow 2-3% difference according to manual measurement.<br style=\"box-sizing: inherit;\">2. Please check the measurement chart carefully before you buy the item. (1 inch = 2.54 cm)<br style=\"box-sizing: inherit;\">3. Please note that slight color difference should be acceptable due to the light and screen. Thanks!<br style=\"box-sizing: inherit;\"><br style=\"box-sizing: inherit;\">Specifications:<br style=\"box-sizing: inherit;\">Material: Polyester<br style=\"box-sizing: inherit;\">Color: Wine Red Plaid/Blue Plaid/Black Plain Color<br style=\"box-sizing: inherit;\">Size: S, M, L, XL, XXL, XXXL<br style=\"box-sizing: inherit;\">Gender: Men<br style=\"box-sizing: inherit;\">Age: Adult<br style=\"box-sizing: inherit;\">Sleeve: Long Sleeve<br style=\"box-sizing: inherit;\">Neck Style: Lapel<br style=\"box-sizing: inherit;\">Pattern: Plaid, Plain Color<br style=\"box-sizing: inherit;\">Quantity: 1 Piece<br style=\"box-sizing: inherit;\">Occasion: Great for vacation, party, dating, photography, etc.<br style=\"box-sizing: inherit;\"><br style=\"box-sizing: inherit;\">Package Contents:<br style=\"box-sizing: inherit;\">1 x Men\'s Blazer<br style=\"box-sizing: inherit;\"><br style=\"box-sizing: inherit;\">Promise:<br style=\"box-sizing: inherit;\">If the product has any quality problems, please feel free to contact us, we will help you solve the problem as quickly as possible.</div></span></div><div class=\"mb3\" style=\"margin-bottom: 1rem;\"><span class=\"f6 mid-gray lh-title overflow-visible db w_V_DM\" style=\"box-sizing: inherit; -webkit-box-orient: vertical; display: block; line-height: 1.25; color: rgb(70, 71, 74); font-size: 0.875rem; padding-bottom: 0em; margin-bottom: 0em;\"><div class=\"dangerous-html mb3\" style=\"margin-bottom: 1rem;\"><ul style=\"margin-bottom: 1rem; margin-top: 1rem; padding-left: 1.5rem;\"><li>Material: The blazer is made of high-quality polyester material, safe and harmless, breathable, non-irritating, skin-friendly, comfortable to wear.</li><li>Design: With plaid pattern/plain color, lapel and long sleeve design, the button blazer can provide comfort and bring much beauty and fashion.</li><li>Size: S, M, L, XL, XXL, XXXL. Available in six sizes, please carefully refer to the size detail that we provided before you purchase. A good choice for you.</li><li>Gift: The men suit coat is stylish, form-fitting and beautiful. A nice and thoughtful gift for yourself, your classmates, relatives, family or friends.</li><li>Occasions: Suitable for dating, photography, vacation, party, holiday, daily wear, activities, travelling, photos, shopping, work, friends gathering, etc.</li></ul></div></span></div></div></div></div>', 'uploaded-files/product-images/1798871703929218.jpeg', 55.00, 45.00, 24, 0, 0, 1, 1, '2023-12-30 03:40:18', '2023-12-30 03:40:18'),
(31, 3, 6, 2, 1, 'SAMSUNG 50\" Class TU690T Crystal UHD 4K Smart TV', '154879', 'See how the 50\" Class TU690T Crystal UHD 4K Smart TV powered by Tizen elevates what you watch, at a value you\'ll love. Go beyond HDTV to enjoy your content in 4K resolution, and in PurColor. And with Smart TV powered by Tizen built in, it\'s easy to find and stream the latest shows and movies in just a few clicks.', '<div class=\"expand-collapse-header flex justify-between items-center w-100\" style=\"display: flex; align-items: center; justify-content: space-between; width: 860.656px; color: rgb(0, 0, 0); font-family: Bogle, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: medium;\"><h3 class=\"w-100 ma0 pa3 f5 lh-copy normal\" style=\"line-height: 1.5; width: 820.656px; padding: 1rem; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; font-size: 1rem;\">Product details</h3><div class=\"pr3\" style=\"padding-right: 1rem;\"><button class=\"bg-transparent bn lh-solid pa0 sans-serif tc underline inline-button black pointer f6 bw0 bg-white pt3\" type=\"button\" aria-expanded=\"true\" aria-label=\"Product details\" style=\"box-sizing: inherit; font-family: Bogle, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 0.875rem; line-height: 1; border-width: 0px; color: rgb(0, 0, 0); padding: 1rem 0px 0px; text-decoration-line: underline;\"><span class=\"ld ld-ChevronUp pa0\" style=\"box-sizing: content-box; -webkit-font-smoothing: antialiased; display: inline-block; font-variant-numeric: normal; font-variant-east-asian: normal; font-variant-alternates: normal; font-kerning: auto; font-optical-sizing: auto; font-feature-settings: normal; font-variation-settings: normal; font-variant-position: normal; font-stretch: normal; font-size: 1.5rem; line-height: 1; font-family: ui-icons; padding: 0px; vertical-align: -0.25em; width: 1.5rem; height: 1.5rem;\"></span></button></div></div><div class=\"w_rNem expand-collapse-content\" data-testid=\"ui-collapse-panel\" style=\"overflow-y: hidden; transition: height 0.3s linear 0s; width: 860.656px; color: rgb(0, 0, 0); font-family: Bogle, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: medium; height: auto;\"><div class=\"ph3 pb4 pt1\" style=\"padding: 0.25rem 1rem 1.5rem;\"><div class=\"nb3\" data-testid=\"product-description-content\" style=\"margin-bottom: -1rem;\"><div class=\"mb3\" style=\"margin-bottom: 1rem;\"><span class=\"b f6 mid-gray lh-copy lh-title overflow-visible db w_V_DM\" style=\"box-sizing: inherit; -webkit-box-orient: vertical; display: block; font-weight: 700; line-height: 1.5; color: rgb(70, 71, 74); font-size: 0.875rem; padding-bottom: 0em; margin-bottom: 0em;\"><div class=\"dangerous-html mb3\" style=\"margin-bottom: 1rem;\"><p>See how the 50\" Class TU690T Crystal UHD 4K Smart TV powered by Tizen elevates what you watch, at a value you\'ll love. Go beyond HDTV to enjoy your content in 4K resolution, and in PurColor. And with Smart TV powered by Tizen built in, it\'s easy to find and stream the latest shows and movies in just a few clicks.</p></div></span></div><div class=\"mb3\" style=\"margin-bottom: 1rem;\"><span class=\"f6 mid-gray lh-title overflow-visible db w_V_DM\" style=\"box-sizing: inherit; -webkit-box-orient: vertical; display: block; line-height: 1.25; color: rgb(70, 71, 74); font-size: 0.875rem; padding-bottom: 0em; margin-bottom: 0em;\"><div class=\"dangerous-html mb3\" style=\"margin-bottom: 1rem;\"><ul style=\"margin-bottom: 1rem; margin-top: 1rem; padding-left: 1.5rem;\"><li>Watch what you love upgraded to 4K resolution with this blazing fast processor. See your content the way it was intended thanks to the powerful 4K upscaling of the Crystal Processor 4K. The best part, it\'s automatically done for you.</li><li>Enjoy colors fine-tuned to how they were meant to be seen. Innovative color technology electronically adjusts and optimizes the colors on screen for true-to-life picture quality. Your favorite movies, shows and sports will suddenly take on a new look.</li><li>Stream your favorite shows. Play games. Work out with a trainer. Do all you enjoy with Smart TV Powered by Tizen. Discover your must-have apps and streaming services all just a few clicks away.</li><li>See the blacks and whites fine-tuned for enhanced contrast by Direct Lit LED technology. Right behind the screen, rows of LED bulbs bring color and brightness to the shows, movies and sports you watch and stream.</li><li>See the dark and light in every scene to discover what today\'s HDR content delivers. With High Dynamic Range, enjoy a range of light levels that reveal a spectrum of vivid colors that turn up the contrast for a new generation of content made for it.</li></ul></div></span></div></div></div></div>', 'uploaded-files/product-images/75281703931679.jpeg', 300.00, 278.00, 76, 0, 0, 1, 1, '2023-12-30 04:21:19', '2023-12-30 04:21:19');
INSERT INTO `products` (`id`, `category_id`, `sub_category_id`, `brand_id`, `unit_id`, `name`, `code`, `short_description`, `long_description`, `image`, `regular_price`, `selling_price`, `stock_amount`, `hit_count`, `sales_count`, `featured_status`, `status`, `created_at`, `updated_at`) VALUES
(32, 3, 6, 7, 1, 'SAMSUNG 75\" Class CU7000 Crystal UHD 4K Smart TV UN75CU7000FXZA', '214879', 'True-to-life color. Effortless connectivity. Dazzling 4K value. Samsung Crystal UHD is worth a look (and more). Effortlessly access TV shows, movies and ambient content using the Samsung Smart Hub, or find a range of great games on the Samsung Gaming Hub.(High speed internet connection, additional gaming service subscriptions and compatible controller required.) Enjoy content even more clear than it was created as its upgraded to 4K resolution. Color and contrast are also improved with our PurColor and Contrast Enhancer technologies that instantly analyze and adjust what you see on screen. As all the visual details shine through, you\'ll be surrounded by 3D sound that moves with the action, engaging all your senses.', '<div class=\"expand-collapse-header flex justify-between items-center w-100\" style=\"display: flex; align-items: center; justify-content: space-between; width: 860.656px;\"><h3 class=\"w-100 ma0 pa3 f5 lh-copy normal\" style=\"line-height: 1.5; width: 820.656px; padding: 1rem; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; font-size: 1rem;\">Product details</h3><div class=\"pr3\" style=\"padding-right: 1rem;\"><button class=\"bg-transparent bn lh-solid pa0 sans-serif tc underline inline-button black pointer f6 bw0 bg-white pt3\" type=\"button\" aria-expanded=\"true\" aria-label=\"Product details\" style=\"box-sizing: inherit; font-family: Bogle, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 0.875rem; line-height: 1; border-width: 0px; color: rgb(0, 0, 0); padding: 1rem 0px 0px; text-decoration-line: underline;\"><span class=\"ld ld-ChevronUp pa0\" style=\"box-sizing: content-box; -webkit-font-smoothing: antialiased; display: inline-block; font-variant-numeric: normal; font-variant-east-asian: normal; font-variant-alternates: normal; font-kerning: auto; font-optical-sizing: auto; font-feature-settings: normal; font-variation-settings: normal; font-variant-position: normal; font-stretch: normal; font-size: 1.5rem; line-height: 1; font-family: ui-icons; padding: 0px; vertical-align: -0.25em; width: 1.5rem; height: 1.5rem;\"></span></button></div></div><div class=\"w_rNem expand-collapse-content\" data-testid=\"ui-collapse-panel\" style=\"overflow-y: hidden; transition: height 0.3s linear 0s; width: 860.656px; height: auto;\"><div class=\"ph3 pb4 pt1\" style=\"padding: 0.25rem 1rem 1.5rem;\"><div class=\"nb3\" data-testid=\"product-description-content\" style=\"margin-bottom: -1rem;\"><div class=\"mb3\" style=\"margin-bottom: 1rem;\"><span class=\"b f6 mid-gray lh-copy lh-title overflow-visible db w_V_DM\" style=\"box-sizing: inherit; -webkit-box-orient: vertical; display: block; font-weight: 700; line-height: 1.5; color: rgb(70, 71, 74); font-size: 0.875rem; padding-bottom: 0em; margin-bottom: 0em;\"><div class=\"dangerous-html mb3\" style=\"margin-bottom: 1rem;\"><p>True-to-life color. Effortless connectivity. Dazzling 4K value. Samsung Crystal UHD is worth a look (and more). Effortlessly access TV shows, movies and ambient content using the Samsung Smart Hub, or find a range of great games on the Samsung Gaming Hub.(High speed internet connection, additional gaming service subscriptions and compatible controller required.) Enjoy content even more clear than it was created as its upgraded to 4K resolution. Color and contrast are also improved with our PurColor and Contrast Enhancer technologies that instantly analyze and adjust what you see on screen. As all the visual details shine through, you\'ll be surrounded by 3D sound that moves with the action, engaging all your senses.</p></div></span></div><div class=\"mb3\" style=\"margin-bottom: 1rem;\"><span class=\"f6 mid-gray lh-title overflow-visible db w_V_DM\" style=\"box-sizing: inherit; -webkit-box-orient: vertical; display: block; line-height: 1.25; color: rgb(70, 71, 74); font-size: 0.875rem; padding-bottom: 0em; margin-bottom: 0em;\"><div class=\"dangerous-html mb3\" style=\"margin-bottom: 1rem;\"><ul style=\"margin-bottom: 1rem; margin-top: 1rem; padding-left: 1.5rem;\"><li>PurColor - Perceive a wider spectrum of colors than traditional RGB models with PurColor. From the green turf on the football field to an amazing sunset straight from the big screen, you\'ll enjoy true-to-life picture quality with our innovative color technology that electronically adjusts and optimizes the colors on screen.</li><li>Crystal Processor with 4K UHD Upscaling - Go from good to great. Watch the content you love upgraded to dazzling 4K resolution. You\'ll be able to better enjoy your TV\'s capabilities as the Crystal Processor automatically transforms your favorite movies and shows with 16-bit 3D color mapping and Adaptive Sound. Even if the content you\'re watching wasn\'t produced in 4K, you can enjoy it like it was.</li><li>Motion Xcelerator - Stay cool in the driver\'s seat. Don\'t let the action pass by in a blur. Experience smooth motion and improved clarity with Motion Xcelerator. Now you can fuel your need for speed with high-intensity sports, movies, and games, and enjoy crisp and clear details at the same time. The picture on-screen moves smoothly as motion performance features make automatic adjustments so you don\'t miss a thing.</li><li>Mega Contrast - See more detail as our Mega Contrast analyzes and adjusts each image. Every frame appears more natural, and a feeling of depth is added as contrast is dialed up in the foreground. Incredible details are revealed, drawing your eyes to the most important parts of whatever you\'re watching.</li><li>Object Tracking Sound Lite - Get in the mix with Object Tracking Sound Lite. You\'ll hear 3D surround sound that follows the movement on screen using our incredible virtual top channel audio—putting you right in the middle of the car chase, stampede or party scene.</li><li>Q-Symphony - Amp up your audio with the greatest duo of all time—Samsung TVs paired with a Samsung soundbar. With Q-Symphony, your TV speakers paired with Q-Series and S-Series soundbar operate as one. Together, they can optimize all the channels to bring you a masterfully orchestrated sound experience. It\'s a completely next-level experience that even works with Object Tracking Sound for an extra layer of depth.*Q-Series and S-Series soundbars sold separately.</li><li>Samsung Smart TV Hub - Finding what everyone wants to watch is effortless with the easy-to-use Samsung Smart TV Hub. Movies, TV shows and games are all available on a home screen tailored to you. By learning about what and how you watch, the Smart Hub makes your favorites easily available and recommends new content when you\'re looking for what\'s next. *Content services may vary by regions and are subject to change without notifications.</li><li>ConnecTime - Crowd-watch your favorites with your favorites on your big screen.*Additional compatible Samsung SlimFit cam, compatible Logitech webcam or mobile camera required. Sold separately. Requires Samsung account.</li><li>IR Remote (TM2240A) - The sleek and slim the IR Remote controls all compatible connected devices and content.</li><li>Samsung Gaming Hub - Stream your favorite games, no console required.*High speed internet connection, additional gaming service subscriptions and compatible controller required.</li></ul></div></span></div><div class=\"w_LDl2 w_ISLy bn bg-transparent dark-gray pa0 sans-serif mb3 lh-copy\" style=\"border-radius: 0.25rem; border-style: none; border-width: 0px; display: flex; font-family: Bogle, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 0.875rem; line-height: 1.5; padding: 0px; width: 828.656px; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; border-color: rgb(186, 187, 190) rgb(186, 187, 190) rgb(186, 187, 190) rgb(0, 0, 0); color: rgb(46, 47, 50); margin-bottom: 1rem;\"><span class=\"w__zJP\" style=\"box-sizing: inherit; margin-right: 0.5rem;\"><span class=\"w_iUH7\" style=\"box-sizing: inherit; border: 0px !important; clip: rect(1px, 1px, 1px, 1px) !important; clip-path: inset(50%) !important; height: 1px !important; overflow: hidden !important; padding: 0px !important; position: absolute !important; text-wrap: nowrap !important; width: 1px !important;\">info:</span><svg fill=\"currentColor\" height=\"1em\" viewBox=\"0 0 16 16\" width=\"1em\" xmlns=\"http://www.w3.org/2000/svg\" aria-hidden=\"true\" role=\"presentation\" style=\"font-size: 1rem; vertical-align: -0.175em;\"><path fill-rule=\"evenodd\" d=\"M8 1a7 7 0 1 1 0 14A7 7 0 0 1 8 1Zm0 1a6 6 0 1 0 0 12A6 6 0 0 0 8 2Zm-1 9.5a.5.5 0 0 1-.09-.992L7 10.5h.499v-3H7a.5.5 0 0 1-.492-.41L6.5 7a.5.5 0 0 1 .41-.492L7 6.5h1.5l-.001 4H9a.5.5 0 0 1 .09.992L9 11.5H7Zm.879-7.121a.621.621 0 1 1 0 1.242.621.621 0 0 1 0-1.242Z\"></path></svg></span><div class=\"w_2NhK\" style=\"gap: 0.25rem 1rem; display: flex; flex-wrap: wrap;\"></div></div></div></div></div>', 'uploaded-files/product-images/521781703931956.jpeg', 648.00, 700.00, 39, 0, 0, 1, 1, '2023-12-30 04:25:56', '2023-12-30 04:25:56'),
(34, 3, 5, 7, 1, 'Verizon Samsung Galaxy A14 5G, 64GB, Black', '784932', 'Keep up with life with a phone that gets you. Find everything you need online with 5G connectivity,1more information in foot notes and see your favorite games and apps in high definition with a 6.6\" screen.2more information in foot notes Stay ready for all life’s moments with a long-lasting and fast-charging battery3more information in foot notes, and snap stunning selfies with an awesome 13MP front camera. Built with all the essentials to stay connected, Galaxy A14 5G is the perfect match for those wanting to upgrade their phone at an amazing value. And, get a great 5G experience with Verizon, the network America relies on.', '<div class=\"expand-collapse-header flex justify-between items-center w-100\" style=\"display: flex; align-items: center; justify-content: space-between; width: 860.656px; color: rgb(0, 0, 0); font-family: Bogle, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: medium;\"><h3 class=\"w-100 ma0 pa3 f5 lh-copy normal\" style=\"line-height: 1.5; width: 820.656px; padding: 1rem; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; font-size: 1rem;\">Product details</h3><div class=\"pr3\" style=\"padding-right: 1rem;\"><button class=\"bg-transparent bn lh-solid pa0 sans-serif tc underline inline-button black pointer f6 bw0 bg-white pt3\" type=\"button\" aria-expanded=\"true\" aria-label=\"Product details\" style=\"box-sizing: inherit; font-family: Bogle, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 0.875rem; line-height: 1; border-width: 0px; color: rgb(0, 0, 0); padding: 1rem 0px 0px; text-decoration-line: underline;\"><span class=\"ld ld-ChevronUp pa0\" style=\"box-sizing: content-box; -webkit-font-smoothing: antialiased; display: inline-block; font-variant-numeric: normal; font-variant-east-asian: normal; font-variant-alternates: normal; font-kerning: auto; font-optical-sizing: auto; font-feature-settings: normal; font-variation-settings: normal; font-variant-position: normal; font-stretch: normal; font-size: 1.5rem; line-height: 1; font-family: ui-icons; padding: 0px; vertical-align: -0.25em; width: 1.5rem; height: 1.5rem;\"></span></button></div></div><div class=\"w_rNem expand-collapse-content\" data-testid=\"ui-collapse-panel\" style=\"overflow-y: hidden; transition: height 0.3s linear 0s; width: 860.656px; color: rgb(0, 0, 0); font-family: Bogle, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: medium; height: auto;\"><div class=\"ph3 pb4 pt1\" style=\"padding: 0.25rem 1rem 1.5rem;\"><div class=\"nb3\" data-testid=\"product-description-content\" style=\"margin-bottom: -1rem;\"><div class=\"mb3\" style=\"margin-bottom: 1rem;\"><span class=\"b f6 mid-gray lh-copy lh-title overflow-visible db w_V_DM\" style=\"box-sizing: inherit; -webkit-box-orient: vertical; display: block; font-weight: 700; line-height: 1.5; color: rgb(70, 71, 74); font-size: 0.875rem; padding-bottom: 0em; margin-bottom: 0em;\"><div class=\"dangerous-html mb3\" style=\"margin-bottom: 1rem;\">Keep up with life with a phone that gets you. Find everything you need online with 5G connectivity,1more information in foot notes&nbsp;and see your favorite games and apps in high definition with a 6.6\" screen.2more information in foot notes&nbsp;Stay ready for all life’s moments with a long-lasting and fast-charging battery3more information in foot notes, and snap stunning selfies with an awesome 13MP front camera. Built with all the essentials to stay connected, Galaxy A14 5G is the perfect match for those wanting to upgrade their phone at an amazing value. And, get a great 5G experience with Verizon, the network America relies on.&nbsp;</div></span></div><div class=\"mb3\" style=\"margin-bottom: 1rem;\"><span class=\"f6 mid-gray lh-title overflow-visible db w_V_DM\" style=\"box-sizing: inherit; -webkit-box-orient: vertical; display: block; line-height: 1.25; color: rgb(70, 71, 74); font-size: 0.875rem; padding-bottom: 0em; margin-bottom: 0em;\"><div class=\"dangerous-html mb3\" style=\"margin-bottom: 1rem;\"><ul style=\"margin-bottom: 1rem; margin-top: 1rem; padding-left: 1.5rem;\"><li>Long-lasting battery life. Stay ready for today’s surprises with the fast-charging, long-lasting battery of Galaxy A14 5G. Confidently handle work on the go, and play your favorite games to your heart’s content with a battery that gives your charger a break.</li><li>Super-fast 5G capability. Enjoy playing games and streaming with 5G and the fast, reliable processor of Galaxy A14 5G. Download and share content quickly with a phone that keeps up with the speed of life.</li><li>Expandable storage to save more moments that matter. Live and relive your favorite experiences with the expandable memory of Galaxy A14 5G. Savor all those unforgettable moments — off-trail adventures with friends and family vacations — with 64GB of internal storage4more information in foot notesmore information in foot notes and room for up to 1TB more when you add a microSD card.</li><li>A versatile camera experience. Capture amazing selfies with a 13MP front camera, and get all the action — whether that’s the bright smiles of friends or captivating sunsets — in high resolution that will take people\'s breath away. With a triple-lens camera system and 50MP resolution, Galaxy A14 5G helps you unlock your inner photographer for an incredible value.</li><li>See more on an infinite display. Press play and experience your games and videos like never before with Galaxy A14 5G. A 6.6\" edge-to-edge screen lets you catch all the details while an adaptive 90Hz Infinity-V FHD+ display makes enjoying your favorite shows a breeze.</li></ul></div></span></div></div></div></div>', 'uploaded-files/product-images/4823651703932556.jpeg', 165.00, 155.00, 80, 0, 0, 1, 1, '2023-12-30 04:35:56', '2023-12-30 04:35:56'),
(35, 3, 5, 8, 1, 'oihuhiu hvhjvg', '154895', 'gfdgfdbtygb', '<p>gbvbgfdhrrfh bvbbfgtgrgb vbcbgfgtrtrg</p>', 'uploaded-files/product-images/4813331703954538.png', 154.00, 120.00, 150, 0, 0, 1, 1, '2023-12-30 10:42:19', '2023-12-30 10:42:19');

-- --------------------------------------------------------

--
-- Table structure for table `product_colors`
--

CREATE TABLE `product_colors` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` int(11) NOT NULL,
  `color_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_colors`
--

INSERT INTO `product_colors` (`id`, `product_id`, `color_id`, `created_at`, `updated_at`) VALUES
(55, 23, 2, '2023-12-30 00:37:20', '2023-12-30 00:37:20'),
(56, 23, 4, '2023-12-30 00:37:20', '2023-12-30 00:37:20'),
(57, 24, 2, '2023-12-30 02:22:43', '2023-12-30 02:22:43'),
(58, 24, 4, '2023-12-30 02:22:44', '2023-12-30 02:22:44'),
(59, 25, 1, '2023-12-30 02:49:45', '2023-12-30 02:49:45'),
(60, 25, 3, '2023-12-30 02:49:45', '2023-12-30 02:49:45'),
(61, 26, 1, '2023-12-30 03:09:47', '2023-12-30 03:09:47'),
(62, 26, 3, '2023-12-30 03:09:47', '2023-12-30 03:09:47'),
(63, 27, 1, '2023-12-30 03:19:25', '2023-12-30 03:19:25'),
(64, 27, 2, '2023-12-30 03:19:25', '2023-12-30 03:19:25'),
(65, 28, 3, '2023-12-30 03:27:17', '2023-12-30 03:27:17'),
(66, 28, 6, '2023-12-30 03:27:17', '2023-12-30 03:27:17'),
(67, 29, 1, '2023-12-30 03:34:21', '2023-12-30 03:34:21'),
(68, 29, 2, '2023-12-30 03:34:21', '2023-12-30 03:34:21'),
(69, 30, 2, '2023-12-30 03:40:18', '2023-12-30 03:40:18'),
(70, 31, 1, '2023-12-30 04:21:20', '2023-12-30 04:21:20'),
(71, 32, 1, '2023-12-30 04:25:57', '2023-12-30 04:25:57'),
(73, 34, 1, '2023-12-30 04:35:56', '2023-12-30 04:35:56'),
(74, 35, 7, '2023-12-30 10:42:19', '2023-12-30 10:42:19');

-- --------------------------------------------------------

--
-- Table structure for table `product_images`
--

CREATE TABLE `product_images` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` int(11) NOT NULL,
  `image` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_images`
--

INSERT INTO `product_images` (`id`, `product_id`, `image`, `created_at`, `updated_at`) VALUES
(49, 23, 'uploaded-files/product-other-images/1166651703918241.jpeg', '2023-12-30 00:37:21', '2023-12-30 00:37:21'),
(50, 23, 'uploaded-files/product-other-images/4355791703918241.jpeg', '2023-12-30 00:37:21', '2023-12-30 00:37:21'),
(51, 24, 'uploaded-files/product-other-images/902091703924564.jpeg', '2023-12-30 02:22:44', '2023-12-30 02:22:44'),
(52, 24, 'uploaded-files/product-other-images/4221581703924564.jpeg', '2023-12-30 02:22:44', '2023-12-30 02:22:44'),
(53, 25, 'uploaded-files/product-other-images/1792101703926185.jpeg', '2023-12-30 02:49:45', '2023-12-30 02:49:45'),
(54, 25, 'uploaded-files/product-other-images/311361703926185.jpeg', '2023-12-30 02:49:45', '2023-12-30 02:49:45'),
(55, 26, 'uploaded-files/product-other-images/536741703927388.jpeg', '2023-12-30 03:09:48', '2023-12-30 03:09:48'),
(56, 26, 'uploaded-files/product-other-images/847251703927388.jpeg', '2023-12-30 03:09:48', '2023-12-30 03:09:48'),
(57, 27, 'uploaded-files/product-other-images/4019381703927965.jpeg', '2023-12-30 03:19:25', '2023-12-30 03:19:25'),
(58, 27, 'uploaded-files/product-other-images/4817511703927965.jpeg', '2023-12-30 03:19:25', '2023-12-30 03:19:25'),
(59, 27, 'uploaded-files/product-other-images/290861703927965.jpeg', '2023-12-30 03:19:25', '2023-12-30 03:19:25'),
(60, 28, 'uploaded-files/product-other-images/679871703928437.jpeg', '2023-12-30 03:27:17', '2023-12-30 03:27:17'),
(61, 28, 'uploaded-files/product-other-images/4350141703928437.jpeg', '2023-12-30 03:27:17', '2023-12-30 03:27:17'),
(62, 28, 'uploaded-files/product-other-images/3342641703928437.jpeg', '2023-12-30 03:27:17', '2023-12-30 03:27:17'),
(63, 29, 'uploaded-files/product-other-images/4923231703928862.jpeg', '2023-12-30 03:34:22', '2023-12-30 03:34:22'),
(64, 29, 'uploaded-files/product-other-images/4368491703928862.jpeg', '2023-12-30 03:34:22', '2023-12-30 03:34:22'),
(65, 30, 'uploaded-files/product-other-images/3502111703929218.jpeg', '2023-12-30 03:40:18', '2023-12-30 03:40:18'),
(66, 30, 'uploaded-files/product-other-images/403481703929218.jpeg', '2023-12-30 03:40:18', '2023-12-30 03:40:18'),
(67, 31, 'uploaded-files/product-other-images/3032791703931680.jpeg', '2023-12-30 04:21:20', '2023-12-30 04:21:20'),
(68, 31, 'uploaded-files/product-other-images/3110021703931680.jpeg', '2023-12-30 04:21:20', '2023-12-30 04:21:20'),
(69, 31, 'uploaded-files/product-other-images/2032931703931680.jpeg', '2023-12-30 04:21:20', '2023-12-30 04:21:20'),
(70, 32, 'uploaded-files/product-other-images/2153931703931957.jpeg', '2023-12-30 04:25:57', '2023-12-30 04:25:57'),
(71, 32, 'uploaded-files/product-other-images/2276781703931957.jpeg', '2023-12-30 04:25:57', '2023-12-30 04:25:57'),
(72, 32, 'uploaded-files/product-other-images/4430601703931957.jpeg', '2023-12-30 04:25:57', '2023-12-30 04:25:57'),
(76, 34, 'uploaded-files/product-other-images/4195741703932556.jpeg', '2023-12-30 04:35:56', '2023-12-30 04:35:56'),
(77, 34, 'uploaded-files/product-other-images/3701461703932556.jpeg', '2023-12-30 04:35:56', '2023-12-30 04:35:56'),
(78, 34, 'uploaded-files/product-other-images/133391703932556.jpeg', '2023-12-30 04:35:56', '2023-12-30 04:35:56'),
(79, 35, 'uploaded-files/product-other-images/4174291703954539.jpg', '2023-12-30 10:42:19', '2023-12-30 10:42:19'),
(80, 35, 'uploaded-files/product-other-images/2163341703954539.png', '2023-12-30 10:42:19', '2023-12-30 10:42:19');

-- --------------------------------------------------------

--
-- Table structure for table `product_offers`
--

CREATE TABLE `product_offers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` int(11) NOT NULL,
  `title_one` varchar(255) NOT NULL,
  `title_two` varchar(255) NOT NULL,
  `title_three` varchar(255) NOT NULL,
  `description` varchar(255) DEFAULT NULL,
  `image` text DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `product_sizes`
--

CREATE TABLE `product_sizes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` int(11) NOT NULL,
  `size_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_sizes`
--

INSERT INTO `product_sizes` (`id`, `product_id`, `size_id`, `created_at`, `updated_at`) VALUES
(6, 4, 1, '2023-12-11 13:31:02', '2023-12-11 13:31:02'),
(7, 4, 2, '2023-12-11 13:31:02', '2023-12-11 13:31:02'),
(8, 4, 4, '2023-12-11 13:31:02', '2023-12-11 13:31:02'),
(9, 5, 2, '2023-12-11 13:47:07', '2023-12-11 13:47:07'),
(10, 5, 3, '2023-12-11 13:47:07', '2023-12-11 13:47:07'),
(11, 6, 2, '2023-12-11 13:50:08', '2023-12-11 13:50:08'),
(12, 6, 3, '2023-12-11 13:50:08', '2023-12-11 13:50:08'),
(13, 7, 2, '2023-12-11 13:55:47', '2023-12-11 13:55:47'),
(14, 7, 3, '2023-12-11 13:55:47', '2023-12-11 13:55:47'),
(15, 8, 3, '2023-12-11 13:59:44', '2023-12-11 13:59:44'),
(16, 9, 3, '2023-12-11 14:00:43', '2023-12-11 14:00:43'),
(54, 23, 1, '2023-12-30 00:37:21', '2023-12-30 00:37:21'),
(55, 23, 2, '2023-12-30 00:37:21', '2023-12-30 00:37:21'),
(56, 23, 4, '2023-12-30 00:37:21', '2023-12-30 00:37:21'),
(57, 24, 1, '2023-12-30 02:22:44', '2023-12-30 02:22:44'),
(58, 24, 2, '2023-12-30 02:22:44', '2023-12-30 02:22:44'),
(59, 24, 4, '2023-12-30 02:22:44', '2023-12-30 02:22:44'),
(60, 25, 10, '2023-12-30 02:49:45', '2023-12-30 02:49:45'),
(61, 25, 11, '2023-12-30 02:49:45', '2023-12-30 02:49:45'),
(62, 25, 13, '2023-12-30 02:49:45', '2023-12-30 02:49:45'),
(63, 26, 11, '2023-12-30 03:09:47', '2023-12-30 03:09:47'),
(64, 26, 12, '2023-12-30 03:09:47', '2023-12-30 03:09:47'),
(65, 27, 11, '2023-12-30 03:19:25', '2023-12-30 03:19:25'),
(66, 27, 12, '2023-12-30 03:19:25', '2023-12-30 03:19:25'),
(67, 28, 10, '2023-12-30 03:27:17', '2023-12-30 03:27:17'),
(68, 28, 11, '2023-12-30 03:27:17', '2023-12-30 03:27:17'),
(69, 29, 2, '2023-12-30 03:34:21', '2023-12-30 03:34:21'),
(70, 29, 3, '2023-12-30 03:34:21', '2023-12-30 03:34:21'),
(71, 29, 4, '2023-12-30 03:34:22', '2023-12-30 03:34:22'),
(72, 30, 2, '2023-12-30 03:40:18', '2023-12-30 03:40:18'),
(73, 30, 3, '2023-12-30 03:40:18', '2023-12-30 03:40:18'),
(74, 30, 4, '2023-12-30 03:40:18', '2023-12-30 03:40:18'),
(75, 31, 14, '2023-12-30 04:21:20', '2023-12-30 04:21:20'),
(76, 32, 14, '2023-12-30 04:25:57', '2023-12-30 04:25:57'),
(78, 34, 14, '2023-12-30 04:35:56', '2023-12-30 04:35:56'),
(79, 35, 10, '2023-12-30 10:42:19', '2023-12-30 10:42:19'),
(80, 35, 11, '2023-12-30 10:42:19', '2023-12-30 10:42:19'),
(81, 35, 12, '2023-12-30 10:42:19', '2023-12-30 10:42:19');

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
('BWUPZUbz6Ld7zqdzSvJ88iJRrFOOIWSxJIqpcETH', NULL, '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/120.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoibWwxQ05PZmR6ZGU0MXl1T1prbmkySFlHM01ka0Q2VmFGUjJ0VVByOSI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJuZXciO2E6MDp7fXM6Mzoib2xkIjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mzk6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9jaGVja291dC1jb21wbGV0ZSI7fX0=', 1706217566),
('d4xJpFhCiMqERItyZ1ob8Dvypbme9WSgsaznEEIX', NULL, '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/120.0.0.0 Safari/537.36', 'YTo4OntzOjY6Il90b2tlbiI7czo0MDoiNmRCTGgyMTJkNGV1UEtpVmJndUx6TXdXbWtZTnl0TzN0RzlMZkV2aSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mzc6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9jaGVja291dC1kZXRhaWwiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX1zOjQ6ImNhcnQiO2E6MTp7czo3OiJkZWZhdWx0IjtPOjI5OiJJbGx1bWluYXRlXFN1cHBvcnRcQ29sbGVjdGlvbiI6Mjp7czo4OiIAKgBpdGVtcyI7YTowOnt9czoyODoiACoAZXNjYXBlV2hlbkNhc3RpbmdUb1N0cmluZyI7YjowO319czo1OiJyb3dJZCI7czozMjoiMWM1YzdhNWVlY2Y1YjJiNzcxNWIwYTkzYTI5N2YxNzIiO3M6Mzoic3VtIjtkOjQ1O3M6MTE6ImN1c3RvbWVyX2lkIjtpOjk7czoxMzoiY3VzdG9tZXJfbmFtZSI7czoxMDoiRW1pIE11cnJheSI7fQ==', 1706215063),
('EaXmzT8bxnao659AQgav60FupOKLAhGWaNCflOHV', NULL, '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/120.0.0.0 Safari/537.36', 'YTo2OntzOjY6Il90b2tlbiI7czo0MDoib1NJUUJ4cW1UelpBUmgwQnNVTlNUZnpWWU8wdVZOZUVIMzhKU2FYbCI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJuZXciO2E6MDp7fXM6Mzoib2xkIjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mzc6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9jaGVja291dC1kZXRhaWwiO31zOjQ6ImNhcnQiO2E6MTp7czo3OiJkZWZhdWx0IjtPOjI5OiJJbGx1bWluYXRlXFN1cHBvcnRcQ29sbGVjdGlvbiI6Mjp7czo4OiIAKgBpdGVtcyI7YToxOntzOjMyOiI3MjYyMTY4NDJjNDJhYTYxYjE2ZDFiMmNhZWM4ZWZmMSI7TzozMjoiR2xvdWRlbWFuc1xTaG9wcGluZ2NhcnRcQ2FydEl0ZW0iOjg6e3M6NToicm93SWQiO3M6MzI6IjcyNjIxNjg0MmM0MmFhNjFiMTZkMWIyY2FlYzhlZmYxIjtzOjI6ImlkIjtzOjI6IjI3IjtzOjM6InF0eSI7czoxOiIxIjtzOjQ6Im5hbWUiO3M6NTc6IkRvY2tlcnMgTWVucyBJcnZpbmcgU2xpcCBSZXNpc3RhbnQgV29yayBEcmVzcyBPeGZvcmQgU2hvZSI7czo1OiJwcmljZSI7ZDo1MDtzOjc6Im9wdGlvbnMiO086Mzk6Ikdsb3VkZW1hbnNcU2hvcHBpbmdjYXJ0XENhcnRJdGVtT3B0aW9ucyI6Mjp7czo4OiIAKgBpdGVtcyI7YTozOntzOjU6ImltYWdlIjtzOjUxOiJ1cGxvYWRlZC1maWxlcy9wcm9kdWN0LWltYWdlcy8zMzgyNzMxNzAzOTI3OTY1LmpwZWciO3M6NDoic2l6ZSI7czoxOiI4IjtzOjU6ImNvbG9yIjtzOjU6IkJsYWNrIjt9czoyODoiACoAZXNjYXBlV2hlbkNhc3RpbmdUb1N0cmluZyI7YjowO31zOjQ5OiIAR2xvdWRlbWFuc1xTaG9wcGluZ2NhcnRcQ2FydEl0ZW0AYXNzb2NpYXRlZE1vZGVsIjtOO3M6NDE6IgBHbG91ZGVtYW5zXFNob3BwaW5nY2FydFxDYXJ0SXRlbQB0YXhSYXRlIjtpOjE1O319czoyODoiACoAZXNjYXBlV2hlbkNhc3RpbmdUb1N0cmluZyI7YjowO319czo1OiJyb3dJZCI7czozMjoiNzI2MjE2ODQyYzQyYWE2MWIxNmQxYjJjYWVjOGVmZjEiO3M6Mzoic3VtIjtkOjUwO30=', 1706217445),
('NfeakOReclEQLt1aEhCHhv16l6hiMVgTZjWwkKfZ', NULL, '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/120.0.0.0 Safari/537.36', 'YToyOntzOjY6Il90b2tlbiI7czo0MDoiamc5dnlxclc5MzNNQU52bUZBRnFhS2QzUkFZMENPakFuZWg3MEw5biI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1706215672),
('QlKa5I7TaEnLqf8ag3M68wAzhaLDRbnMayqOX6Q7', NULL, '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/120.0.0.0 Safari/537.36', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoiUlFNMkMxTUpTSDhKNUViRzlCR1hPZWRQTGRSNHI3VllPUFZad0k2ayI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mzc6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9jaGVja291dC1kZXRhaWwiO31zOjExOiJjdXN0b21lcl9pZCI7aToxMDtzOjEzOiJjdXN0b21lcl9uYW1lIjtzOjk6Ik1hY3kgQnVzaCI7fQ==', 1706215642);

-- --------------------------------------------------------

--
-- Table structure for table `sizes`
--

CREATE TABLE `sizes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `code` varchar(255) NOT NULL,
  `description` varchar(255) DEFAULT NULL,
  `status` varchar(255) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sizes`
--

INSERT INTO `sizes` (`id`, `name`, `code`, `description`, `status`, `created_at`, `updated_at`) VALUES
(1, 'small', 's', NULL, '1', '2023-12-11 13:06:45', '2023-12-11 13:06:45'),
(2, 'Medium', 'M', NULL, '1', '2023-12-11 13:07:04', '2023-12-11 13:07:04'),
(3, 'Extra Large', 'XL', NULL, '1', '2023-12-11 13:07:25', '2023-12-11 13:07:25'),
(4, 'Large', 'L', NULL, '1', '2023-12-11 13:07:42', '2023-12-11 13:07:42'),
(5, '35', '35', NULL, '1', '2023-12-30 02:29:28', '2023-12-30 02:29:28'),
(6, '36', '36', NULL, '1', '2023-12-30 02:29:40', '2023-12-30 02:29:40'),
(7, '38', '38', NULL, '1', '2023-12-30 02:29:54', '2023-12-30 02:29:54'),
(8, '40', '40', NULL, '1', '2023-12-30 02:30:06', '2023-12-30 02:30:06'),
(10, '7', '7', NULL, '1', '2023-12-30 02:30:29', '2023-12-30 02:30:29'),
(11, '8', '8', NULL, '1', '2023-12-30 02:30:40', '2023-12-30 02:30:40'),
(12, '9', '9', NULL, '1', '2023-12-30 02:30:51', '2023-12-30 02:30:51'),
(13, '6', '6', NULL, '1', '2023-12-30 02:31:03', '2023-12-30 02:31:03'),
(14, 'None', 'NA', NULL, '1', '2023-12-30 04:16:50', '2023-12-30 04:16:50');

-- --------------------------------------------------------

--
-- Table structure for table `sub_categories`
--

CREATE TABLE `sub_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `image` text DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sub_categories`
--

INSERT INTO `sub_categories` (`id`, `category_id`, `name`, `description`, `image`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, 'Women\'s Clothing', NULL, ' ', 1, '2023-12-11 12:56:07', '2023-12-11 12:56:07'),
(2, 1, 'Men\'s Clothing', 'Clothing', ' ', 1, '2023-12-11 12:57:01', '2023-12-11 12:57:01'),
(3, 1, 'Kid\'s Clothing', 'Clothing', ' ', 1, '2023-12-11 12:57:51', '2023-12-11 12:57:51'),
(4, 2, 'Men\'s Shoes', NULL, ' ', 1, '2023-12-16 01:36:32', '2023-12-16 01:36:32'),
(5, 3, 'Smartphone', NULL, ' ', 1, '2023-12-16 01:36:49', '2023-12-16 01:36:49'),
(6, 3, 'TV', NULL, ' ', 1, '2023-12-16 01:37:08', '2023-12-16 01:37:08'),
(7, 2, 'Kid\'s Shoes', NULL, ' ', 1, '2023-12-16 01:37:53', '2023-12-16 01:37:53'),
(8, 2, 'Women\'s Shoes', 'Women\'s Shoes', ' ', 1, '2023-12-29 15:05:22', '2023-12-29 15:05:22');

-- --------------------------------------------------------

--
-- Table structure for table `units`
--

CREATE TABLE `units` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `code` varchar(255) NOT NULL,
  `description` varchar(255) DEFAULT NULL,
  `status` varchar(255) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `units`
--

INSERT INTO `units` (`id`, `name`, `code`, `description`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Number', 'Num', NULL, '1', '2023-12-11 13:04:29', '2023-12-11 13:04:29'),
(2, 'Weight', 'KG', NULL, '1', '2023-12-30 02:46:51', '2023-12-30 02:46:51');

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
  `two_factor_secret` text DEFAULT NULL,
  `two_factor_recovery_codes` text DEFAULT NULL,
  `two_factor_confirmed_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `current_team_id` bigint(20) UNSIGNED DEFAULT NULL,
  `profile_photo_path` varchar(2048) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `two_factor_confirmed_at`, `remember_token`, `current_team_id`, `profile_photo_path`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@admin.com', NULL, '$2y$10$pB93lto/nG05GEUJ3bSYxun4ql5IonBguk3YrjQ.wCb6sK3IxCuCC', NULL, NULL, NULL, NULL, NULL, NULL, '2023-12-11 12:53:10', '2023-12-11 12:53:10');

-- --------------------------------------------------------

--
-- Table structure for table `wishlists`
--

CREATE TABLE `wishlists` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `customer_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `date` text NOT NULL,
  `timestamp` text NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `brands_name_unique` (`name`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `categories_name_unique` (`name`);

--
-- Indexes for table `colors`
--
ALTER TABLE `colors`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `colors_name_unique` (`name`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `customers_email_unique` (`email`),
  ADD UNIQUE KEY `customers_mobile_unique` (`mobile`);

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
-- Indexes for table `offers`
--
ALTER TABLE `offers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_details`
--
ALTER TABLE `order_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_colors`
--
ALTER TABLE `product_colors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_images`
--
ALTER TABLE `product_images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_offers`
--
ALTER TABLE `product_offers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_sizes`
--
ALTER TABLE `product_sizes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `sizes`
--
ALTER TABLE `sizes`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `sizes_name_unique` (`name`);

--
-- Indexes for table `sub_categories`
--
ALTER TABLE `sub_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `units`
--
ALTER TABLE `units`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `units_name_unique` (`name`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `wishlists`
--
ALTER TABLE `wishlists`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `colors`
--
ALTER TABLE `colors`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `offers`
--
ALTER TABLE `offers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `order_details`
--
ALTER TABLE `order_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `product_colors`
--
ALTER TABLE `product_colors`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=75;

--
-- AUTO_INCREMENT for table `product_images`
--
ALTER TABLE `product_images`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=81;

--
-- AUTO_INCREMENT for table `product_offers`
--
ALTER TABLE `product_offers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `product_sizes`
--
ALTER TABLE `product_sizes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=82;

--
-- AUTO_INCREMENT for table `sizes`
--
ALTER TABLE `sizes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `sub_categories`
--
ALTER TABLE `sub_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `units`
--
ALTER TABLE `units`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `wishlists`
--
ALTER TABLE `wishlists`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
