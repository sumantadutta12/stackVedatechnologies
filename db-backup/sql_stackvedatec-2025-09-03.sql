-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Sep 02, 2025 at 08:58 PM
-- Server version: 8.0.40
-- PHP Version: 8.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `stackveda`
--

-- --------------------------------------------------------

--
-- Table structure for table `banners`
--

CREATE TABLE `banners` (
  `id` bigint UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `primary_btn_text` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `primary_btn_link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `secondary_btn_text` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `secondary_btn_link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `order` int NOT NULL DEFAULT '0',
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `banners`
--

INSERT INTO `banners` (`id`, `title`, `description`, `image`, `primary_btn_text`, `primary_btn_link`, `secondary_btn_text`, `secondary_btn_link`, `order`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Easy Solutions for it problems', 'We are experienced professionals who understand that It services is changing, and are true partners who care about your success. Our team provides a consultative approach on emerging technology.', 'storage/banners/1755020301720.jpg', NULL, NULL, NULL, NULL, 1, 1, '2025-08-12 11:59:44', '2025-08-15 01:56:53');

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cache`
--

INSERT INTO `cache` (`key`, `value`, `expiration`) VALUES
('laravel_cache_captcha_16c67077553fc890e925cf69dc751f6f', 'a:6:{i:0;s:1:\"u\";i:1;s:1:\"p\";i:2;s:1:\"f\";i:3;s:1:\"m\";i:4;s:1:\"4\";i:5;s:1:\"n\";}', 1756844546),
('laravel_cache_captcha_1c542bb4b2c42a5526690093f031ee05', 'a:6:{i:0;s:1:\"d\";i:1;s:1:\"q\";i:2;s:1:\"9\";i:3;s:1:\"y\";i:4;s:1:\"p\";i:5;s:1:\"r\";}', 1756846177),
('laravel_cache_captcha_22fed2aecefc58e9902391b3eb2558d4', 'a:6:{i:0;s:1:\"6\";i:1;s:1:\"g\";i:2;s:1:\"t\";i:3;s:1:\"3\";i:4;s:1:\"h\";i:5;s:1:\"z\";}', 1756844226),
('laravel_cache_captcha_60546edc49a010288af30cbc6f2ae366', 'a:6:{i:0;s:1:\"n\";i:1;s:1:\"7\";i:2;s:1:\"n\";i:3;s:1:\"m\";i:4;s:1:\"r\";i:5;s:1:\"a\";}', 1756844562),
('laravel_cache_captcha_8fde38ada414fb21ae950e50eb009cf8', 'a:6:{i:0;s:1:\"e\";i:1;s:1:\"c\";i:2;s:1:\"b\";i:3;s:1:\"c\";i:4;s:1:\"t\";i:5;s:1:\"n\";}', 1756844441),
('laravel_cache_captcha_a0fc2479bf8011ac775b101883365eb0', 'a:6:{i:0;s:1:\"a\";i:1;s:1:\"q\";i:2;s:1:\"p\";i:3;s:1:\"p\";i:4;s:1:\"4\";i:5;s:1:\"h\";}', 1756844479),
('laravel_cache_captcha_bf59a8249a17c72b6bc5831ad45155ce', 'a:6:{i:0;s:1:\"c\";i:1;s:1:\"a\";i:2;s:1:\"f\";i:3;s:1:\"7\";i:4;s:1:\"j\";i:5;s:1:\"t\";}', 1756844346),
('laravel_cache_captcha_c290d852068666b9370e5fdacb74200f', 'a:6:{i:0;s:1:\"n\";i:1;s:1:\"q\";i:2;s:1:\"y\";i:3;s:1:\"r\";i:4;s:1:\"c\";i:5;s:1:\"g\";}', 1756844554),
('laravel_cache_captcha_dc7877fcbf1dbbe0edd08dfcabfdad18', 'a:6:{i:0;s:1:\"3\";i:1;s:1:\"z\";i:2;s:1:\"h\";i:3;s:1:\"q\";i:4;s:1:\"p\";i:5;s:1:\"f\";}', 1756844643);

-- --------------------------------------------------------

--
-- Table structure for table `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `owner` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `website_url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `message` text COLLATE utf8mb4_unicode_ci,
  `status` enum('pending','replied') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'pending',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `email`, `mobile`, `website_url`, `message`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Bidhan Rakshit', 'bidhan.rakshit@ebestsolutions.net', '9898989889', 'https://www.stackvedatechnologies.com', 'hjfrjgfjrhj', 'replied', '2025-09-02 13:09:24', '2025-09-02 13:11:12');

-- --------------------------------------------------------

--
-- Table structure for table `enquiries`
--

CREATE TABLE `enquiries` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `service_id` bigint UNSIGNED NOT NULL,
  `message` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` enum('pending','replied') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'pending',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `enquiries`
--

INSERT INTO `enquiries` (`id`, `name`, `email`, `phone`, `service_id`, `message`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Bidhan Rakshit', 'bidhan.rakshit@ebestsolutions.net', '8989898989', 1, 'Nothing', 'replied', '2025-09-02 14:46:05', '2025-09-02 14:47:33');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `queue` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `attempts` tinyint UNSIGNED NOT NULL,
  `reserved_at` int UNSIGNED DEFAULT NULL,
  `available_at` int UNSIGNED NOT NULL,
  `created_at` int UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_jobs` int NOT NULL,
  `pending_jobs` int NOT NULL,
  `failed_jobs` int NOT NULL,
  `failed_job_ids` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `options` mediumtext COLLATE utf8mb4_unicode_ci,
  `cancelled_at` int DEFAULT NULL,
  `created_at` int NOT NULL,
  `finished_at` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '0001_01_01_000000_create_users_table', 1),
(2, '0001_01_01_000001_create_cache_table', 1),
(3, '0001_01_01_000002_create_jobs_table', 1),
(4, '2025_08_12_170359_create_banners_table', 2),
(6, '2025_08_28_175123_create_tech_logos_table', 3),
(11, '2025_09_01_164327_create_settings_table', 4),
(12, '2025_08_15_073723_create_contacts_table', 5),
(13, '2025_09_02_184701_create_services_table', 6),
(14, '2025_09_02_195200_create_enquiries_table', 7),
(16, '2025_09_02_202408_create_portfolios_table', 8);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `portfolios`
--

CREATE TABLE `portfolios` (
  `id` bigint UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `order` int NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `portfolios`
--

INSERT INTO `portfolios` (`id`, `title`, `image`, `description`, `status`, `order`, `created_at`, `updated_at`) VALUES
(1, 'ADIKRISHI', 'storage/portfolios/1756845599.webp', 'Adikrishi connects you directly with farmers and organic producers, bringing fresh, chemical-free agricultural products straight to your doorstep. Our platform ensures you get the highest quality Vegetable seeds, fruits seeds, crop seeds, fertilizers, vermicompost and more, sourced ethically from trusted growers. By cutting out middlemen, we offer fair prices to farmers and affordable rates for you.\r\n\r\nShop with confidence knowing every product is carefully verified for authenticity and purity with Adikrishi. Enjoy a seamless shopping experience with easy ordering, secure payments, and fast delivery.', 1, 1, '2025-09-02 15:09:59', '2025-09-02 15:12:26'),
(2, 'Utalii - Peer To Peer Tourism', 'storage/portfolios/1756845814.webp', 'Connecting exploring tourists with trustworthy local guides!\r\n\r\nConnect. Explore. Experience.\r\n\r\nYou’ve landed safe & sound & now you want to experience the local food, culture & history of where you are. Regardless if you are ready for a night on the town, a quiet stroll in the park, an', 1, 2, '2025-09-02 15:13:34', '2025-09-02 15:13:34'),
(3, 'Flirtwithme -Online Dating App', 'storage/portfolios/1756845875.webp', 'No more feeling lonely and depressed. Flirtwithme brings you an opportunity to find your partner through interesting chat. If you are thinking that this is one of those fake online dating apps that allow fake identities and con on people, Flirt With Me is not like that. The first thing they ensure that whoever is logging in holds a genuine identity so that the app can create a real bond between interested people.\r\n\r\nBeing one of the best online dating apps Flirtwthme is categorized into three sections. Chat, flirt and date. After sorting out people', 1, 3, '2025-09-02 15:14:35', '2025-09-02 15:14:35');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` bigint UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `short_description` text COLLATE utf8mb4_unicode_ci,
  `background_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `icon` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `order` int NOT NULL DEFAULT '0',
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `title`, `slug`, `description`, `short_description`, `background_image`, `description_image`, `icon`, `order`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Digital Marketing', 'digital-marketing', '<h2>What is Digital Marketing?</h2>\r\n\r\n<p>Digital marketing is the promotion of products, services, or brands using digital channels such as search engines, social media, email, and websites. It helps businesses connect with their target audience effectively and drive measurable results.</p>\r\n\r\n<h3>Our Digital Marketing Services</h3>\r\n\r\n<ul>\r\n	<li><strong>Search Engine Optimization (SEO):</strong> Improve your website ranking and visibility on Google and other search engines.</li>\r\n	<li><strong>Social Media Marketing:</strong> Engage with your audience on platforms like Facebook, Instagram, LinkedIn, and Twitter.</li>\r\n	<li><strong>Pay-Per-Click (PPC) Advertising:</strong> Drive instant traffic with targeted Google Ads and social media campaigns.</li>\r\n	<li><strong>Content Marketing:</strong> Create and distribute valuable content to attract and retain your audience.</li>\r\n	<li><strong>Email Marketing:</strong> Build relationships and nurture leads through personalized email campaigns.</li>\r\n</ul>\r\n\r\n<h3>Why Choose Us?</h3>\r\n\r\n<p>With a team of experienced digital marketers, we design strategies tailored to your business goals. Our data-driven approach ensures that every campaign delivers maximum ROI while building your brand presence online.</p>\r\n\r\n<blockquote>\r\n<p><em>&ldquo;Digital marketing is not just about being online &mdash; it&rsquo;s about being found, trusted, and remembered.&rdquo;</em></p>\r\n</blockquote>', 'IT management service that manages and oversees the IT infrastructure of organization responsible for network and operations which includes data communication.', 'storage/services/backgrounds/1756840554_bg.jpg', 'storage/services/descriptions/1756842525_desc.png', NULL, 1, 1, '2025-09-02 13:45:54', '2025-09-02 14:18:45');

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('exd4i9v0CXWNdtgNmatgDc6WKszyjJkw73dLag8e', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/139.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiR1Y0SWtEdHk1ZUJBUG11VkxnOTNGcnc2ejUyWXBFTU5VN2NnRWVVZSI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo1MDoibG9naW5fd2ViXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6MTtzOjk6Il9wcmV2aW91cyI7YToxOntzOjM6InVybCI7czo0MToiaHR0cDovLzEyNy4wLjAuMTo4MDAwL2FkbWluL3NldHRpbmdzL3NpdGUiO319', 1756846189),
('XTJ0PfzgVrx9zjLurZ3b3arjG1eMNg0276dHXTI8', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/139.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiOXAwdlpVYnpqdG43QWpneUZZaGlEN1pwYW1meWE2ekszV2ZFcUVxQyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9vdXItd29ya3MiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX1zOjc6ImNhcHRjaGEiO2E6Mzp7czo5OiJzZW5zaXRpdmUiO2I6MDtzOjM6ImtleSI7czozMTI6ImV5SnBkaUk2SW1OeWNGWlNNbXhETXk4eWFrSlRjMmR1YUdKQ2NGRTlQU0lzSW5aaGJIVmxJam9pVEdSS2NVOUJVRkZSY3pOeGQxaDBWRzloYkZoaFEyVklhRkpyZDJwQlMyTnJiazFTV0dRd2JHSlplalY2WkZKR1JGQk5ZbXhoZFdwbmNISjFNVXc1VFN0NVJtTlNXbEJqU2taalJ6QTJORmRoVjFFeU0ySldjaXR4Y0hneWIwTkxPRTVETkVOVldFRXJiV2M5SWl3aWJXRmpJam9pT0RRNFpqVTFPRGczTm1NMVl6QmxOVFJoWVRneVpUSTBOVGxtWVRsa09ETTJNR0prTkdJMllqZzJZVGxoTURobU5qSmxORGcyTURnMk16ZzBNemN3WVNJc0luUmhaeUk2SWlKOSI7czo3OiJlbmNyeXB0IjtiOjE7fX0=', 1756846194);

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` bigint UNSIGNED NOT NULL,
  `site_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `location` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `facebook_url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `x_url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `youtube_url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `linkdin_url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `short_description` longtext COLLATE utf8mb4_unicode_ci,
  `mobile_2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mobile_3` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_3` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `instagram_url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `office_time` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `map_link` longtext COLLATE utf8mb4_unicode_ci,
  `logo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `favicon` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `inverted_logo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `site_name`, `location`, `mobile`, `email`, `facebook_url`, `x_url`, `youtube_url`, `linkdin_url`, `short_description`, `mobile_2`, `mobile_3`, `email_2`, `email_3`, `instagram_url`, `office_time`, `map_link`, `logo`, `favicon`, `inverted_logo`, `created_at`, `updated_at`) VALUES
(1, 'StackVeda Technologies', 'Unit no. 3/22, Suhatta Mall, Shahid Khudiram Sarani, City Center, Durgapur, West Bengal 713216', '+91 9254 541 217', 'info@stackvedatechnologies.com', NULL, NULL, NULL, NULL, 'We are experienced professionals who understand that It services is changing, and are true partners who care about your future business success.', NULL, NULL, NULL, NULL, NULL, 'Hours: Mon-Fri: 8am – 7pm', NULL, 'storage/settings/17567475005198.png', 'storage/settings/17567475002678.png', NULL, '2025-09-01 11:54:41', '2025-09-02 15:19:49');

-- --------------------------------------------------------

--
-- Table structure for table `tech_logos`
--

CREATE TABLE `tech_logos` (
  `id` bigint UNSIGNED NOT NULL,
  `logo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `order` int NOT NULL DEFAULT '0',
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tech_logos`
--

INSERT INTO `tech_logos` (`id`, `logo`, `order`, `status`, `created_at`, `updated_at`) VALUES
(1, 'storage/tech_logos/17567504416937.png', 1, 1, '2025-09-01 12:44:01', '2025-09-01 12:44:01'),
(2, 'storage/tech_logos/17567509855627.png', 2, 1, '2025-09-01 12:53:05', '2025-09-01 12:53:30'),
(3, 'storage/tech_logos/17567510012706.png', 3, 1, '2025-09-01 12:53:21', '2025-09-01 12:53:21'),
(4, 'storage/tech_logos/17567510249178.png', 4, 1, '2025-09-01 12:53:44', '2025-09-01 12:53:44'),
(5, 'storage/tech_logos/17567510371684.png', 5, 1, '2025-09-01 12:53:57', '2025-09-01 12:53:57'),
(6, 'storage/tech_logos/17567510591983.png', 6, 1, '2025-09-01 12:54:19', '2025-09-01 12:54:19'),
(7, 'storage/tech_logos/17567510722757.png', 7, 1, '2025-09-01 12:54:32', '2025-09-01 12:54:32');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_type` enum('admin','customer') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'customer',
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `is_active` tinyint(1) NOT NULL DEFAULT '0',
  `mobile_verified_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `mobile`, `image`, `email_verified_at`, `password`, `user_type`, `status`, `is_active`, `mobile_verified_at`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin User', 'admin@gmail.com', '0000000000', NULL, NULL, '$2y$12$5reTBOQbVjB8ZVCkywBN2uS4YZc35Pd44VnJeOxEORe8Psh1JBBqy', 'admin', 1, 1, '2025-06-24 12:35:12', NULL, '2025-06-24 12:35:12', '2025-06-24 12:35:12'),
(2, 'Super Admin', 'superadmin@gmail.com', '0000000001', NULL, NULL, '$2y$12$ZZjv9d6u/AOPsxYemJSTTuEgfbtvJDX.PjAGz6m8ayX4HlqOvdeeG', 'admin', 1, 1, '2025-06-24 12:35:12', NULL, '2025-06-24 12:35:12', '2025-06-24 12:35:12');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `banners`
--
ALTER TABLE `banners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `enquiries`
--
ALTER TABLE `enquiries`
  ADD PRIMARY KEY (`id`),
  ADD KEY `enquiries_service_id_foreign` (`service_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indexes for table `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `portfolios`
--
ALTER TABLE `portfolios`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `services_slug_unique` (`slug`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tech_logos`
--
ALTER TABLE `tech_logos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD UNIQUE KEY `users_mobile_unique` (`mobile`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `banners`
--
ALTER TABLE `banners`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `enquiries`
--
ALTER TABLE `enquiries`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `portfolios`
--
ALTER TABLE `portfolios`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tech_logos`
--
ALTER TABLE `tech_logos`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `enquiries`
--
ALTER TABLE `enquiries`
  ADD CONSTRAINT `enquiries_service_id_foreign` FOREIGN KEY (`service_id`) REFERENCES `services` (`id`) ON DELETE RESTRICT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
