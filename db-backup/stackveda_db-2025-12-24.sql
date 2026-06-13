-- phpMyAdmin SQL Dump
-- version 5.2.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 24, 2025 at 04:49 AM
-- Server version: 10.6.23-MariaDB-cll-lve
-- PHP Version: 8.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `stackveda_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `banners`
--

CREATE TABLE `banners` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `primary_btn_text` varchar(255) DEFAULT NULL,
  `primary_btn_link` varchar(255) DEFAULT NULL,
  `secondary_btn_text` varchar(255) DEFAULT NULL,
  `secondary_btn_link` varchar(255) DEFAULT NULL,
  `order` int(11) NOT NULL DEFAULT 0,
  `status` tinyint(1) NOT NULL DEFAULT 1,
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
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `website_url` varchar(255) DEFAULT NULL,
  `message` text DEFAULT NULL,
  `status` enum('pending','replied') NOT NULL DEFAULT 'pending',
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
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `service_id` bigint(20) UNSIGNED NOT NULL,
  `message` varchar(255) DEFAULT NULL,
  `status` enum('pending','replied') NOT NULL DEFAULT 'pending',
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
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(255) NOT NULL,
  `payload` longtext NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `total_jobs` int(11) NOT NULL,
  `pending_jobs` int(11) NOT NULL,
  `failed_jobs` int(11) NOT NULL,
  `failed_job_ids` longtext NOT NULL,
  `options` mediumtext DEFAULT NULL,
  `cancelled_at` int(11) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `finished_at` int(11) DEFAULT NULL
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
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `portfolios`
--

CREATE TABLE `portfolios` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `order` int(11) NOT NULL DEFAULT 0,
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
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `short_description` text DEFAULT NULL,
  `background_image` varchar(255) DEFAULT NULL,
  `description_image` varchar(255) DEFAULT NULL,
  `icon` varchar(255) DEFAULT NULL,
  `order` int(11) NOT NULL DEFAULT 0,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `title`, `slug`, `description`, `short_description`, `background_image`, `description_image`, `icon`, `order`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Digital Marketing', 'digital-marketing', '<h2>What is Digital Marketing?</h2>\r\n\r\n<p>Digital marketing is the promotion of products, services, or brands using digital channels such as search engines, social media, email, and websites. It helps businesses connect with their target audience effectively and drive measurable results.</p>\r\n\r\n<h3>Our Digital Marketing Services</h3>\r\n\r\n<ul>\r\n	<li><strong>Search Engine Optimization (SEO):</strong> Improve your website ranking and visibility on Google and other search engines.</li>\r\n	<li><strong>Social Media Marketing:</strong> Engage with your audience on platforms like Facebook, Instagram, LinkedIn, and Twitter.</li>\r\n	<li><strong>Pay-Per-Click (PPC) Advertising:</strong> Drive instant traffic with targeted Google Ads and social media campaigns.</li>\r\n	<li><strong>Content Marketing:</strong> Create and distribute valuable content to attract and retain your audience.</li>\r\n	<li><strong>Email Marketing:</strong> Build relationships and nurture leads through personalized email campaigns.</li>\r\n</ul>\r\n\r\n<h3>Why Choose Us?</h3>\r\n\r\n<p>With a team of experienced digital marketers, we design strategies tailored to your business goals. Our data-driven approach ensures that every campaign delivers maximum ROI while building your brand presence online.</p>\r\n\r\n<blockquote>\r\n<p><em>&ldquo;Digital marketing is not just about being online &mdash; it&rsquo;s about being found, trusted, and remembered.&rdquo;</em></p>\r\n</blockquote>', 'IT management service that manages and oversees the IT infrastructure of organization responsible for network and operations which includes data communication.', 'storage/services/backgrounds/1756840554_bg.jpg', 'storage/services/descriptions/1756842525_desc.png', NULL, 1, 1, '2025-09-02 13:45:54', '2025-09-02 14:18:45'),
(3, 'Software Applications', 'software-applications', '<h2>What is Software Application Development?</h2>\r\n\r\n<p>Software application development is the process of designing, building, and maintaining software applications that meet the needs of businesses and users. These applications can range from mobile apps to complex enterprise solutions, all aimed at improving efficiency, productivity, and user experience.</p>\r\n\r\n<h3>Our Software Application Development Services</h3>\r\n\r\n<ul>\r\n	<li><strong>Custom Software Development:</strong> We create tailor-made software solutions to meet your unique business needs and requirements.</li>\r\n	<li><strong>Mobile App Development:</strong> Develop high-performance mobile applications for iOS and Android platforms to engage your customers on the go.</li>\r\n	<li><strong>Web Application Development:</strong> Build scalable and secure web applications that work seamlessly across devices and platforms.</li>\r\n	<li><strong>Enterprise Software Solutions:</strong> Implement robust enterprise systems that streamline operations, improve collaboration, and optimize workflows.</li>\r\n	<li><strong>Cloud-Based Solutions:</strong> Develop cloud applications that offer flexibility, scalability, and enhanced collaboration for your business.</li>\r\n</ul>\r\n\r\n<h3>Why Choose Us?</h3>\r\n\r\n<p>Our team of skilled developers and engineers is committed to delivering innovative and scalable software solutions. With a focus on user-centric design, we ensure that every application is built to provide the best user experience while meeting your business objectives.</p>\r\n\r\n<blockquote>\r\n<p><em>&ldquo;The right software application can transform your business by automating processes, enhancing user experiences, and driving growth.&rdquo;</em></p>\r\n</blockquote>', 'Software application service that develops and maintains the software ecosystem of an organization responsible for business logic and features which includes user experience.', 'storage/services/backgrounds/1759055138_bg.png', 'storage/services/descriptions/1759054959_desc.png', NULL, 2, 1, '2025-09-28 10:22:40', '2025-09-28 10:25:38'),
(4, 'IT Consulting and Staffing', 'it-consulting-and-staffing', '<h2>What is IT Consulting and Staffing?</h2>\r\n\r\n<p>IT Consulting and Staffing involves providing businesses with expert technology guidance and the right talent to achieve their goals. From planning and implementing IT solutions to connecting organizations with skilled professionals, it ensures efficiency, scalability, and long-term success.</p>\r\n\r\n<h3>Our IT Consulting and Staffing Services</h3>\r\n\r\n<ul>\r\n	<li><strong>Technology Consulting:</strong> Analyze your current IT infrastructure and recommend solutions that align with your business needs.</li>\r\n	<li><strong>IT Strategy &amp; Roadmap:</strong> Develop customized strategies for digital transformation, cloud adoption, and cybersecurity.</li>\r\n	<li><strong>Staff Augmentation:</strong> Quickly scale your team with qualified IT professionals on a short-term or long-term basis.</li>\r\n	<li><strong>Permanent Staffing:</strong> Find and hire the right technology talent to strengthen your organization&rsquo;s workforce.</li>\r\n	<li><strong>Managed IT Services:</strong> Outsource IT operations and support to ensure smooth, secure, and cost-effective business processes.</li>\r\n</ul>\r\n\r\n<h3>Why Choose Us?</h3>\r\n\r\n<p>With a proven track record in IT consulting and staffing, we combine technical expertise with industry insights. Whether you need to optimize your IT strategy or hire top-notch professionals, our team ensures solutions that drive productivity and innovation.</p>\r\n\r\n<blockquote>\r\n<p><em>&ldquo;The right technology and the right people are the foundation of every successful business transformation.&rdquo;</em></p>\r\n</blockquote>', 'IT Consulting and Staffing provides expert guidance and skilled personnel to optimize an organization\'s technology strategy and operational efficiency.', 'storage/services/backgrounds/1759055501_bg.png', 'storage/services/descriptions/1759055501_desc.png', NULL, 3, 1, '2025-09-28 10:31:41', '2025-09-28 10:31:41'),
(5, 'Web Application Development', 'web-application-development', '<h2>What is Web Application Development?</h2>\r\n\r\n<p>Web Application Development is the process of designing, building, and maintaining software applications that run on web browsers. Unlike simple websites, web apps provide interactive features and dynamic functionality to help businesses automate processes, improve user experience, and scale efficiently.</p>\r\n\r\n<h3>Our Web Application Development Services</h3>\r\n\r\n<ul>\r\n	<li><strong>Custom Web App Development:</strong> Tailor-made applications designed to fit your unique business requirements.</li>\r\n	<li><strong>Enterprise Solutions:</strong> Scalable and secure apps for managing workflows, operations, and data across organizations.</li>\r\n	<li><strong>E-commerce Applications:</strong> Robust platforms with payment integration, product management, and personalized shopping experiences.</li>\r\n	<li><strong>Progressive Web Apps (PWAs):</strong> Fast, reliable, and mobile-friendly apps that deliver a native-like experience on the web.</li>\r\n	<li><strong>API Integration &amp; Development:</strong> Seamless connectivity between your web app and third-party systems or services.</li>\r\n	<li><strong>Maintenance &amp; Support:</strong> Continuous monitoring, updates, and enhancements to keep your app secure and high-performing.</li>\r\n</ul>\r\n\r\n<h3>Why Choose Us?</h3>\r\n\r\n<p>We combine modern technologies, agile methodologies, and creative design to deliver web applications that are secure, scalable, and user-friendly. Our team ensures your web app not only meets your current needs but is also ready to adapt as your business grows.</p>\r\n\r\n<blockquote>\r\n<p><em>&ldquo;A powerful web application is more than just code &mdash; it&rsquo;s the bridge between your vision and your customer&rsquo;s experience.&rdquo;</em></p>\r\n</blockquote>', 'Web Application Development creates robust, custom, and scalable web-based software solutions to streamline business processes and deliver engaging user experiences across all devices.', 'storage/services/backgrounds/1759055896_bg.png', 'storage/services/descriptions/1759055896_desc.png', NULL, 4, 1, '2025-09-28 10:38:16', '2025-09-28 10:38:16'),
(6, 'Mobile App Development', 'mobile-app-development', '<h2>What is Mobile App Development?</h2>\r\n\r\n<p>Mobile App Development is the process of creating software applications designed to run on mobile devices such as smartphones and tablets. With the growing use of iOS and Android platforms, mobile apps have become a powerful tool for businesses to connect with customers, enhance engagement, and streamline operations.</p>\r\n\r\n<h3>Our Mobile App Development Services</h3>\r\n\r\n<ul>\r\n	<li><strong>Custom Mobile Apps:</strong> Fully tailored applications built to match your unique business requirements and brand identity.</li>\r\n	<li><strong>iOS App Development:</strong> High-performance apps for iPhones and iPads, optimized for Apple&rsquo;s ecosystem.</li>\r\n	<li><strong>Android App Development:</strong> Scalable, feature-rich apps for the world&rsquo;s most popular mobile platform.</li>\r\n	<li><strong>Cross-Platform Apps:</strong> Cost-effective apps using frameworks like React Native and Flutter that run seamlessly on both iOS and Android.</li>\r\n	<li><strong>UI/UX Design:</strong> Engaging and intuitive mobile experiences designed with the end-user in mind.</li>\r\n	<li><strong>App Maintenance &amp; Support:</strong> Continuous updates, performance optimization, and feature enhancements.</li>\r\n</ul>\r\n\r\n<h3>Why Choose Us?</h3>\r\n\r\n<p>Our expert developers blend creativity, innovation, and technical expertise to build mobile applications that are fast, reliable, and user-friendly. From concept to launch, we ensure your app delivers real value and drives business growth.</p>\r\n\r\n<blockquote>\r\n<p><em>&ldquo;A great mobile app is not just installed &mdash; it becomes a part of your user&rsquo;s daily life.&rdquo;</em></p>\r\n</blockquote>', 'Mobile App Development designs and builds native and cross-platform applications, delivering seamless, high-performance, and engaging digital experiences directly to users\' smartphones and tablets.', 'storage/services/backgrounds/1759056259_bg.png', 'storage/services/descriptions/1759056259_desc.png', NULL, 5, 1, '2025-09-28 10:44:19', '2025-09-28 10:44:19'),
(7, 'SEO', 'seo', '<h2>What is SEO?</h2>\r\n\r\n<p>Search Engine Optimization (SEO) is the process of improving your website&rsquo;s visibility on search engines like Google, Bing, and Yahoo. A well-optimized website helps attract more organic traffic, generate qualified leads, and increase your online presence without relying solely on paid advertising.</p>\r\n\r\n<h3>Our SEO Services</h3>\r\n\r\n<ul>\r\n	<li><strong>On-Page SEO:</strong> Optimize website content, structure, and HTML tags for maximum search engine visibility.</li>\r\n	<li><strong>Off-Page SEO:</strong> Build high-quality backlinks and improve your domain authority through ethical strategies.</li>\r\n	<li><strong>Technical SEO:</strong> Enhance website speed, mobile-friendliness, and indexing for better performance.</li>\r\n	<li><strong>Local SEO:</strong> Boost your visibility in local searches and Google Maps to attract nearby customers.</li>\r\n	<li><strong>Keyword Research &amp; Strategy:</strong> Identify and target the right keywords to capture your ideal audience.</li>\r\n	<li><strong>SEO Audits &amp; Reporting:</strong> Comprehensive audits with transparent reporting to track growth and ROI.</li>\r\n</ul>\r\n\r\n<h3>Why Choose Us?</h3>\r\n\r\n<p>We use proven SEO strategies tailored to your business goals, ensuring long-term success and sustainable rankings. Our focus is not just on traffic but on driving qualified visitors who convert into customers.</p>\r\n\r\n<blockquote>\r\n<p><em>&ldquo;SEO is not about getting to the top of Google &mdash; it&rsquo;s about staying there and growing your business.&rdquo;</em></p>\r\n</blockquote>', 'SEO strategically optimizes digital content and web structure to achieve higher rankings in search engine results, increasing organic traffic and maximizing online visibility and reach.', 'storage/services/backgrounds/1759056484_bg.png', 'storage/services/descriptions/1759056484_desc.png', NULL, 6, 1, '2025-09-28 10:48:04', '2025-09-28 10:48:04'),
(8, 'Business Process Outsourcing (BPO)', 'business-process-outsourcing-bpo', '<h2>What is Business Process Outsourcing (BPO)?</h2>\r\n\r\n<p>Business Process Outsourcing (BPO) is the practice of contracting specific business tasks or operations to a third-party service provider. It enables companies to reduce costs, enhance efficiency, and focus on their core business goals while delegating routine or specialized processes to experts.</p>\r\n\r\n<h3>Our BPO Services</h3>\r\n\r\n<ul>\r\n	<li><strong>Customer Support:</strong> 24/7 inbound and outbound assistance through phone, email, and live chat to ensure excellent customer experiences.</li>\r\n	<li><strong>Technical Support:</strong> Expert troubleshooting and product assistance to help your customers resolve issues quickly.</li>\r\n	<li><strong>Data Entry &amp; Management:</strong> Accurate data entry, validation, and database management for seamless operations.</li>\r\n	<li><strong>Finance &amp; Accounting:</strong> Comprehensive bookkeeping, payroll, invoice processing, and financial reporting solutions.</li>\r\n	<li><strong>Human Resources Outsourcing (HRO):</strong> Recruitment support, onboarding, and HR administration tailored to your needs.</li>\r\n	<li><strong>Back-Office Operations:</strong> Administrative tasks like document processing, order management, and record keeping.</li>\r\n</ul>\r\n\r\n<h3>Why Choose Us?</h3>\r\n\r\n<p>With a skilled team and advanced technology, we deliver reliable BPO solutions that align with your business objectives. Our approach ensures cost savings, operational excellence, and scalability, giving you the freedom to focus on growth while we handle the rest.</p>\r\n\r\n<blockquote>\r\n<p><em>&ldquo;BPO is more than outsourcing &mdash; it&rsquo;s a partnership that drives efficiency, innovation, and business success.&rdquo;</em></p>\r\n</blockquote>', 'Business Process Outsourcing (BPO) involves delegating specific non-core business functions to third-party providers, enhancing efficiency, reducing costs, and allowing organizations to focus on their primary objectives.', 'storage/services/backgrounds/1759056719_bg.png', 'storage/services/descriptions/1759056719_desc.png', NULL, 7, 1, '2025-09-28 10:51:59', '2025-09-28 10:51:59');

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
('0pMXiTJynmjjGFVZFn2HahP9wStGLuaQjJx4XVYw', NULL, '51.195.244.113', 'Mozilla/5.0 (compatible; AhrefsBot/7.0; +http://ahrefs.com/robot/)', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoia0I2NEdJV0l1VWwyYXdPMTg3UjZ3UHdrWGxkVDhhTEpPYmttak5yWiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzM6Imh0dHBzOi8vc3RhY2t2ZWRhdGVjaG5vbG9naWVzLmNvbSI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1766534288),
('0TdR8z2WqBg9SObyKpuhQO3mQtkpA1201HB6Ax1J', NULL, '204.76.203.25', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/134.0.0.0 Safari/537.3', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiMElyTDFzdlNCVXphVXdscGFrdW9MY0RhdWZsZGRNUERaOGM1ZHFwUiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mzg6Imh0dHBzOi8vbWFpbC5zdGFja3ZlZGF0ZWNobm9sb2dpZXMuY29tIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1766457246),
('1gntQYNVjnu6Quo7xgrmjGRraTxyeEV3OAVHGIQq', NULL, '106.75.70.23', 'Mozilla/5.0 (Windows NT 9_1_1; Win64; x64) AppleWebKit/601.45 (KHTML, like Gecko) Chrome/57.0.2523 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiWWZHV1FuclRUS0k0ZU42NjIwTExQa3hQVjl2cVU3SVJPck1vU09DQyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzI6Imh0dHA6Ly9zdGFja3ZlZGF0ZWNobm9sb2dpZXMuY29tIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1766422061),
('1qW9Dxr3fT45ESQZ22wjDibAcSNthEsuimxj9WUZ', NULL, '104.236.80.3', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/142.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiYkd4N2ZQM2FaRUVYR2NKNE1lQm9HanBzMkIyS3BiSHg5Mkoyd2NnYSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzM6Imh0dHBzOi8vc3RhY2t2ZWRhdGVjaG5vbG9naWVzLmNvbSI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1766497737),
('1S7LXf1b6WyXGPidBDVQmYuz0d1kYWSMtgHpK3Ty', NULL, '74.7.241.5', 'Mozilla/5.0 AppleWebKit/537.36 (KHTML, like Gecko; compatible; GPTBot/1.3; +https://openai.com/gptbot)', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiOGZLQzU2bmF4enZFd3NMY2JFYVdIcmRmQXFwakNmMktJNllMNlVhayI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mzg6Imh0dHBzOi8vbWFpbC5zdGFja3ZlZGF0ZWNobm9sb2dpZXMuY29tIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1766503379),
('2dnCAkjttU4BDHRImgmQGHKIKAruMatwvFuzEb8K', NULL, '34.34.231.123', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/132.0.0.0 Safari/537.36 OPR/117.0.0.', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoickhYZE9YYW1PbU5PQXlrRFVRVFU2YjJEQVJXTDBHRnlpRUFNZERYbSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzI6Imh0dHA6Ly9zdGFja3ZlZGF0ZWNobm9sb2dpZXMuY29tIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1766495741),
('2eWIUa3Myg3GtMCYTTshMQGcz2JtxGUTGlCZgtiU', NULL, '34.0.153.150', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko; compatible; BW/1.3; rb.gy/qyzae5) Chrome/124.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiSTFXOUF0V3R4UDEzSzI1c0xkaG1rTzRFOUZmQVZMa0xjbE9Ra3QwUiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NjU6Imh0dHA6Ly9zdGFja3ZlZGF0ZWNobm9sb2dpZXMuY29tL3NlcnZpY2UtZGV0YWlsL2RpZ2l0YWwtbWFya2V0aW5nIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1766411561),
('2ofyR49DglcQc0OsmvuCvLZCusOGIkchwEOgNAXw', NULL, '34.96.62.72', 'Mozilla/5.0 (iPhone; CPU iPhone OS 17_5_1 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/17.5 Mobile/15E148 Safari/604.', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiQXR2amxLZVRaNDhmR0ZCVkZOQ3AwZXlEbzZyTEFYTVg5dHBkRjZsNyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzI6Imh0dHA6Ly9zdGFja3ZlZGF0ZWNobm9sb2dpZXMuY29tIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1766503386),
('377HnCES4mwZGclKGeTuNrgrqfLe5FQRUDXBxZCB', NULL, '162.62.231.139', 'Mozilla/5.0 (iPhone; CPU iPhone OS 13_2_3 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/13.0.3 Mobile/15E148 Safari/604.1', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoibXc2eUN5ZjBZd1lXSUlZeFZQUWVtS0VLZEFkU0hGZEhucmdiZWVlOCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzY6Imh0dHA6Ly93d3cuc3RhY2t2ZWRhdGVjaG5vbG9naWVzLmNvbSI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1766429686),
('3E89oRVDPGyxggbbww3EYkWxP18fGgSX4kN9JFtN', NULL, '198.244.168.21', 'Mozilla/5.0 (compatible; AhrefsBot/7.0; +http://ahrefs.com/robot/)', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiNHVLdFA2UUl2ZkxpbnFqdER3Y0p2Y2lKMkQ4QWVrU3E3d0xFY21DcSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDQ6Imh0dHBzOi8vc3RhY2t2ZWRhdGVjaG5vbG9naWVzLmNvbS9jb250YWN0LXVzIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1766507944),
('4jMwdyLC7drbG0tFwGxmuldqxfVtsHPDWg4UP7RF', NULL, '117.33.163.216', 'Mozilla/5.0 (iPhone; CPU iPhone OS 13_2_3 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/13.0.3 Mobile/15E148 Safari/604.1', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoib1V0NFp0blpyTzVQb2YxN0I4V01ZRmZNUUNQWERUNlRDNlhObkRQNSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzI6Imh0dHA6Ly9zdGFja3ZlZGF0ZWNobm9sb2dpZXMuY29tIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1766490289),
('4JvcccypocZj38X8jFSRGx4WaWZDBQ5QQxSySQLt', NULL, '162.120.184.3', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/143.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiMGYzM1V3UWJlRjNjZWpJR1hYRjdmNGhxZDFiVndmUlV6enJEWmJvZCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDg6Imh0dHBzOi8vd3d3LnN0YWNrdmVkYXRlY2hub2xvZ2llcy5jb20vY29udGFjdC11cyI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1766571010),
('4Zqa6QzwcVGlfD4tbUoauRTBvWQBMWfkZJhAoW44', NULL, '162.120.184.2', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/143.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiMUJRb3AxUG9EdlliYmlnR3p4c3BPelZBVzI0allGY0VQWmxyMGhoSCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mzc6Imh0dHBzOi8vd3d3LnN0YWNrdmVkYXRlY2hub2xvZ2llcy5jb20iO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1766570927),
('5aVqENxVa7wjGueoNSMAzlSVdyK3YfiAKfBLJOQ7', NULL, '34.34.231.31', 'Mozilla/5.0 (iPhone; CPU iPhone OS 18_3_2 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) GSA/360.1.737798518 Mobile/15E148 Safari/604.', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoicXpTUjZGUElRbnU4bUpYTVo3bE41czRtWW9QbWlHeFZ4M2xycUphWSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzI6Imh0dHA6Ly9zdGFja3ZlZGF0ZWNobm9sb2dpZXMuY29tIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1766502953),
('5d4pXiSQAgpghkTqHkfd6eFsKbci395eVq8iRwnk', NULL, '66.249.68.3', 'Mozilla/5.0 (Linux; Android 6.0.1; Nexus 5X Build/MMB29P) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/141.0.7390.122 Mobile Safari/537.36 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoibTBwNzRuUUM5M0hzTko1VFZRMWp0TXVIUGtlc2w3cWxndlFvS3p6TCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDc6Imh0dHBzOi8vc3RhY2t2ZWRhdGVjaG5vbG9naWVzLmNvbS9yZXF1ZXN0LXF1b3RlIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1766464191),
('5M4EX4xoJmfXau1ocR2eY2tVWtGYyQlyQ6Wvssfo', NULL, '104.236.80.3', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/142.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiUUl5TGY3OEloZVpieG1MMjdTTUx0THBwT3prakpRbk8xYkxnRG1yaCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzI6Imh0dHA6Ly9zdGFja3ZlZGF0ZWNobm9sb2dpZXMuY29tIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1766497735),
('79Y1LL62TrRKicDjZgoCVtPZSzhiT0E8kTZRMy7v', NULL, '43.157.50.58', 'Mozilla/5.0 (iPhone; CPU iPhone OS 13_2_3 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/13.0.3 Mobile/15E148 Safari/604.1', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiRGxMOWdURlRpQUdpNFZOTjlUb1NuYW5DMDBOUWt3OFRRQnVQejBXSiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzI6Imh0dHA6Ly9zdGFja3ZlZGF0ZWNobm9sb2dpZXMuY29tIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1766527723),
('7c3RkfdLN7Ymw3zjKwGQowXtYY2YpaKwtFhUm1WE', NULL, '66.249.79.3', 'Mozilla/5.0 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiNDVpSkVKNG56d2s3V3V6NEV4dk5pRjRSYU5oZ3V6MGJUVUJTQzNJNSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mzc6Imh0dHBzOi8vd3d3LnN0YWNrdmVkYXRlY2hub2xvZ2llcy5jb20iO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1766462669),
('7RccROjY0jK08Ywt7AcO8LUv4xu4a1hM197fBeWL', NULL, '43.130.34.74', 'Mozilla/5.0 (iPhone; CPU iPhone OS 13_2_3 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/13.0.3 Mobile/15E148 Safari/604.1', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiZjJ2ZW5sb0lUM0hoT0ZNOGlyN2x5aTZ2SWJqZmpzTnlhTVNFdUlMNCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzY6Imh0dHA6Ly93d3cuc3RhY2t2ZWRhdGVjaG5vbG9naWVzLmNvbSI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1766563239),
('7uRcUH03uDU3FtaBVVOctVgTXL0zHviK8YBn4bZr', NULL, '198.244.168.27', 'Mozilla/5.0 (compatible; AhrefsBot/7.0; +http://ahrefs.com/robot/)', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoicWtqdkZxQmp6dkg2VUdoRFd0eU1QVFJSVHJmN3BGcDdyZUk0ZTFKZiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDc6Imh0dHBzOi8vc3RhY2t2ZWRhdGVjaG5vbG9naWVzLmNvbS9yZXF1ZXN0LXF1b3RlIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1766538842),
('93lbioMG13VKpDqljZBaSqMtvZcdwtXVPLNQHk3K', NULL, '52.167.144.149', 'Mozilla/5.0 AppleWebKit/537.36 (KHTML, like Gecko; compatible; bingbot/2.0; +http://www.bing.com/bingbot.htm) Chrome/116.0.1938.76 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiMm9BU1ZOU1NtTkp0ZVpPa0pPUzVhYkxYNENBcnZxR3JwTFlRT1FpWiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzM6Imh0dHBzOi8vc3RhY2t2ZWRhdGVjaG5vbG9naWVzLmNvbSI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1766491238),
('9Ij4kQR2nmbqXICYxhnQu8qIHjQrxeskKuJXqxOa', NULL, '103.211.20.117', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/143.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiR1ZDQ3FITTBFdk1mOHRyYzQ2NkpremZyUGFkcnlDY1pyVGdJU3o3MSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzM6Imh0dHBzOi8vc3RhY2t2ZWRhdGVjaG5vbG9naWVzLmNvbSI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1766553138),
('9uB7WVIdeW5tKXLZLmSc86ApzaGMXDNC9ADaYqPH', NULL, '122.162.149.235', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 12_5) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/114.0.0.0 YaBrowser/22.7.0 Yowser/2.5 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoicVQ2U0hoaUZuZ1V0d1dsMEU1ZUtsSGJQZEhHYUJhY3JNSGw0MGtqVCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDM6Imh0dHA6Ly9zdGFja3ZlZGF0ZWNobm9sb2dpZXMuY29tL2NvbnRhY3QtdXMiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1766569071),
('9ut2isbXJBcnhFPX0o4fLjgSqhMtFW5U8clLNuOl', NULL, '34.34.231.56', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/134.0.0.0 Safari/537.3', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiaVlHZ1RQS2FiMTdmN05BVmFnaVpLNmZhYjFNRHE0MVFXV1BYRzRNdiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzI6Imh0dHA6Ly9zdGFja3ZlZGF0ZWNobm9sb2dpZXMuY29tIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1766507095),
('aRI6FRnAZCHtHfCQiaoxKo9UwA9Ez6fcy8H7kbgM', NULL, '167.71.8.159', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:124.0) Gecko/20100101 Firefox/124.0', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiNTUwczNNOUxsZkM4TkZwZWpkODg3WHpGbTE0bnhxRWg0OFRPekJieCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDI6Imh0dHBzOi8vc3RhY2t2ZWRhdGVjaG5vbG9naWVzLmNvbS9hYm91dC11cyI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1766488767),
('Aw9FoCcguwLdW4R56kqm0eZwBI6AMPuPPdl6WTyV', NULL, '18.97.9.96', 'Mozilla/5.0 AppleWebKit/537.36 (KHTML, like Gecko; compatible; PerplexityBot/1.0; +https://perplexity.ai/perplexitybot)', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiWmFsUGRjOXpsT2RGM1N4MGQ2SnlQajNYaVU2R3g5OXFXNUdaTzZqRiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mzc6Imh0dHBzOi8vd3d3LnN0YWNrdmVkYXRlY2hub2xvZ2llcy5jb20iO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1766416123),
('B7ogiDcG549H0eiW5tPsSFD1z1NtlrrP8zFU7Spi', NULL, '193.186.4.184', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/143.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiRDk2M0p3NzhCeFpyODFkNW4xR1FHZHFTWVhJUWlmSVFNRjF0U2xNOSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDI6Imh0dHBzOi8vc3RhY2t2ZWRhdGVjaG5vbG9naWVzLmNvbS9hYm91dC11cyI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1766571775),
('BHWGKdU1cEzSqRK2h3Ht2gocCBWD07umRO0jJtjS', NULL, '45.114.179.231', 'WhatsApp/2.2587.9 W', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiMEh4eTNxaHJIZ2s0elNnRm5YdXM2VkpsUUxYU0JHSjUya2ljTzQ5YSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mzc6Imh0dHBzOi8vd3d3LnN0YWNrdmVkYXRlY2hub2xvZ2llcy5jb20iO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1766572594),
('bIbAfbmXVOfM005sKn1MzHXft0IzvapRu44Za36L', NULL, '87.236.176.204', 'Mozilla/5.0 (compatible; InternetMeasurement/1.0; +https://internet-measurement.com/)', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoicTZ5UEZoaTI2S212aUt6R0ZPYzQ2Q3VBNzNKZjc1ajgxdVd5Q2xYSyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzI6Imh0dHA6Ly9zdGFja3ZlZGF0ZWNobm9sb2dpZXMuY29tIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1766441452),
('BQ0qQHH6fr9AmjY7YEDlhYQEZ8GIvLIaEMHyekmY', NULL, '34.34.231.65', 'Mozilla/5.0 (iPhone; CPU iPhone OS 18_3_2 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/18.3.1 Mobile/15E148 Safari/604.', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiTk11V2dyZXpsSkZMVE9senRRMmh5TEFBUnVXZ281bFM2UUNEaWlkVCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzI6Imh0dHA6Ly9zdGFja3ZlZGF0ZWNobm9sb2dpZXMuY29tIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1766517541),
('BY3wOnet6C6LvawkFp5vlsATFp1zPnfjWqwirPeb', NULL, '223.15.245.170', 'Mozilla/5.0 (iPhone; CPU iPhone OS 13_2_3 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/13.0.3 Mobile/15E148 Safari/604.1', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiUTk4SDE0NDlGRnlxMGNCbFVaNURFb0RPdkVCNUdNZTVPRm1EOHdrVCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzI6Imh0dHA6Ly9zdGFja3ZlZGF0ZWNobm9sb2dpZXMuY29tIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1766444744),
('c5ziEONckzDMpObzmyJncEO3szK7ftImoIFSc0Fn', NULL, '81.33.233.180', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:145.0) Gecko/20100101 Firefox/145.0', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiajhLMERiTExTRVdPYXdUbTg1SVZHQUpoSmJtTHY0QzNLYnA5SkxXVSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzI6Imh0dHA6Ly9zdGFja3ZlZGF0ZWNobm9sb2dpZXMuY29tIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1766540709),
('CJIPgZEW50f5ZiN9Q33zWGa41DzYfdPA5JDEoDtf', NULL, '34.34.253.226', 'Mozilla/5.0 (Linux; Android 10; K) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/133.0.0.0 Mobile Safari/537.3', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiYVdsR04xaDBXYnV0aXhXZ0t6cnQ5Y2xmd2Y1MElzb1BlQ1p1YWtmUyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzI6Imh0dHA6Ly9zdGFja3ZlZGF0ZWNobm9sb2dpZXMuY29tIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1766514155),
('cpgyOEQ3gbq4tFgKpRVfcHumTdzMGxov1ZKee2ac', NULL, '43.135.211.148', 'Mozilla/5.0 (iPhone; CPU iPhone OS 13_2_3 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/13.0.3 Mobile/15E148 Safari/604.1', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiR0FYS0gySUFBeGZ3VFhsbVJpQ3lrQU9TSDQwakFIRjQySXZ1OE14MCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzI6Imh0dHA6Ly9zdGFja3ZlZGF0ZWNobm9sb2dpZXMuY29tIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1766475211),
('cYlHWmgDko2bDEG9cbOd5bUOWudzUGTVjwdCHVHf', NULL, '193.186.4.189', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/143.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoidloyQWpNUnRqcGZWb3pOVEJPaUEyMzU3T2l3UmpsV3hsZUJOZHNjbyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDI6Imh0dHBzOi8vc3RhY2t2ZWRhdGVjaG5vbG9naWVzLmNvbS9hYm91dC11cyI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1766571759),
('d2IIudaaeZTLiwXix6g0BJEaQR9tiT3LOrGdkmog', NULL, '34.34.231.66', 'Mozilla/5.0 (iPhone; CPU iPhone OS 17_5_1 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/17.5 Mobile/15E148 Safari/604.', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoidGs4d0ZIVjRVSWFXbDBCa05ReFdLT1dMRFN5ZjJ1WlhGR2VZRFFoWiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzI6Imh0dHA6Ly9zdGFja3ZlZGF0ZWNobm9sb2dpZXMuY29tIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1766521660),
('dfbfW5ACdU3VZuHaqdtQ7eKmCMvDwIYwQkmf6ysE', NULL, '103.211.20.117', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/143.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoibXhtcTVEN1hKcmhBQUdHSWo1c2ZmaTExVUxMaXZOYzJnNTR3RFRGZiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDM6Imh0dHBzOi8vc3RhY2t2ZWRhdGVjaG5vbG9naWVzLmNvbS9vdXItd29ya3MiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1766553196),
('DGREtD4SNyKNvmpFo08BcCFWP7pt2rgauhXi9eh9', NULL, '66.249.79.3', 'Mozilla/5.0 (Linux; Android 6.0.1; Nexus 5X Build/MMB29P) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/141.0.7390.122 Mobile Safari/537.36 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiY3Nxb3BWR0RTN1dzcEszeHA0T2NKRzFFQ2dqZmVQNGp2a25iUUhtdSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mzc6Imh0dHBzOi8vd3d3LnN0YWNrdmVkYXRlY2hub2xvZ2llcy5jb20iO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1766462669),
('Dp2cztAnahcFnhocU1mxrFqnNTFE9hoh2vWPwUmh', NULL, '34.34.231.44', 'Mozilla/5.0 (Linux; Android 10; K) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/126.0.0.0 Mobile Safari/537.3', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiMDVoSWt3TzdRRUVlc0FXMEJndldTak96M1dTSkpnOUlHVEE3UUc2diI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzI6Imh0dHA6Ly9zdGFja3ZlZGF0ZWNobm9sb2dpZXMuY29tIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1766536313),
('EBGK9Q1yjg6SUlFintkNTVwzZGJoUEVkoi7fhDiX', NULL, '34.34.253.151', 'Mozilla/5.0 (Android 15; Mobile; rv:136.0) Gecko/136.0 Firefox/136.', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiOFFmRGdBUk12UnpMWVQ1dWFhdEdQMGpjMnViMWVCUlpjcFpHZG1McSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzI6Imh0dHA6Ly9zdGFja3ZlZGF0ZWNobm9sb2dpZXMuY29tIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1766532285),
('eObiqaUCC0oJNVSEWT5GEUAKWMLKw4PF4A27gF7M', NULL, '146.59.34.59', 'Mozilla/5.0', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoieFl5ZTdrNE5yYU53MUxobDlXenN2VmtKdXdJWWFkSzUyQm9DRU0waSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzM6Imh0dHBzOi8vc3RhY2t2ZWRhdGVjaG5vbG9naWVzLmNvbSI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1766505214),
('et9eCIWnr1Rb0Cqs9hBLIBHstVu2Ixx7LP7sgE8K', NULL, '43.135.148.92', 'Mozilla/5.0 (iPhone; CPU iPhone OS 13_2_3 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/13.0.3 Mobile/15E148 Safari/604.1', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiS1JkVTc2SnlXWElkY0RKYmFDTWQ5aTRGdXQ3eGgxQktXTWp4U3ZaUCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzY6Imh0dHA6Ly93d3cuc3RhY2t2ZWRhdGVjaG5vbG9naWVzLmNvbSI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1766456221),
('f0In9e5HvvTh6MoW8qeSVEIiaV227sKRcJN6mYAy', NULL, '34.96.62.18', 'Mozilla/5.0 (Android 15; Mobile; rv:136.0) Gecko/136.0 Firefox/136.', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiT25wQjNxVlVGaWtEdWZjRUtTNDFXSHAyRmM3ZEpSUGlFVHBkNUhPeSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzI6Imh0dHA6Ly9zdGFja3ZlZGF0ZWNobm9sb2dpZXMuY29tIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1766535704),
('f4xKr4JtZ1dpe49TWrzsotRK5yzcZRrBkJwLyqzl', NULL, '51.89.129.17', 'Mozilla/5.0 (compatible; AhrefsBot/7.0; +http://ahrefs.com/robot/)', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiNXl4djFkMGZjbVFZNlFSUjByTlkzWk5vN2gwQWhoUFFlbUdYNnNjSiI7czo3OiJjYXB0Y2hhIjthOjM6e3M6OToic2Vuc2l0aXZlIjtiOjA7czozOiJrZXkiO3M6MzEyOiJleUpwZGlJNkltcHdiVUl5WVhwMGQwdHpjR016VjNkNWNYcEtTbWM5UFNJc0luWmhiSFZsSWpvaVUxcFZaMHBzTlVkTE4xaEhjbk5sWVVJd00yVXZhM0JJVFRSU1JrNTZNREV2YkhZNWEwWkphRlpJTVd4bFozazJlV2RXVFhsTE1GWlFieXRNYkRkblUxWnVVVmN6TkVsdlN6SnJUa2hGTjJkaFYzaEJVRU4wTTI5amJqUlNOVVp1WkVkVFIzUnBLMjFNZUZVOUlpd2liV0ZqSWpvaVpUQmtPV1JrWkRObFpqa3lPR1V4WVdRMU9ERmhZMlpsTkRnNU1tSXdORGRrTm1Jd1ptVXlaalprWkRNM1l6Z3lZbVJpTjJSbVpqRmlPVGRqWmpka1lpSXNJblJoWnlJNklpSjkiO3M6NzoiZW5jcnlwdCI7YjoxO31zOjk6Il9wcmV2aW91cyI7YToxOntzOjM6InVybCI7czo1NjoiaHR0cHM6Ly9zdGFja3ZlZGF0ZWNobm9sb2dpZXMuY29tL2NhcHRjaGEvZmxhdD9xQWUxWDRIdz0iO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1766538909),
('f6xnBZslLWBysJeVAFeGGWnNQViRsEPeT5Cwcp1j', NULL, '195.178.110.155', 'Mozilla/5.0', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiVlhwSGRNd25IWVVRWTEwT3ROTTdMdWF6eG50VVBXTXhQaGdabWxLRSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzM6Imh0dHBzOi8vc3RhY2t2ZWRhdGVjaG5vbG9naWVzLmNvbSI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1766528222),
('fEpwDnoFDS2Xmmc4GpkWWppKyC3RqkPqgrIub3GM', NULL, '5.9.109.178', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:128.0) Gecko/20100101 Firefox/128.0', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiWHVnR25DeGxHTDVUd0hiTVcyOWE5NFFlbXNCOGNUOHh5NEVvVFBrbiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzM6Imh0dHBzOi8vc3RhY2t2ZWRhdGVjaG5vbG9naWVzLmNvbSI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1766488762),
('fKcjTvrf0WZbyGhom1rmQHntl80Af1gIOvAVLyyZ', NULL, '34.34.231.6', 'Mozilla/5.0 (iPhone; CPU iPhone OS 17_5_1 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/17.5 Mobile/15E148 Safari/604.', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiSmtNTXU0MlpPc09IY04wd2J2bDR5V0dqWVNmS09wQjVOM2VmdU84SiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzI6Imh0dHA6Ly9zdGFja3ZlZGF0ZWNobm9sb2dpZXMuY29tIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1766531755),
('GAaNXqdacwkBxYa5BCWE7HTZoWVqtmWGsQUZOGH2', NULL, '106.75.20.152', 'Mozilla/5.0 (Windows NT 7_2_1; Win64; x64) AppleWebKit/566.38 (KHTML, like Gecko) Chrome/56.0.1712 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoibzVVbkVNcjM0VFEzVVJlTlpVWldNZldPVDVPQ2xFWk1Zck9aWTR6MiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzM6Imh0dHBzOi8vc3RhY2t2ZWRhdGVjaG5vbG9naWVzLmNvbSI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1766422101),
('GJGcEQGoVPTCNcsHUj9kE82xabMNKKsNRuJ8tEc9', 1, '45.114.179.231', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/143.0.0.0 Safari/537.36', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoiVkc2VjJHWERxZHpnNU1DZ3hCellMQVZKSW5PZ0YzRHFpVlhZakxDNyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NTM6Imh0dHBzOi8vd3d3LnN0YWNrdmVkYXRlY2hub2xvZ2llcy5jb20vYWRtaW4vZW5xdWlyaWVzIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo3OiJjYXB0Y2hhIjthOjM6e3M6OToic2Vuc2l0aXZlIjtiOjA7czozOiJrZXkiO3M6MzEyOiJleUpwZGlJNklpOUNWa1JqTW1scU5VVjZRbkEwYjJwT1NHMUdiWGM5UFNJc0luWmhiSFZsSWpvaU5YRmhNbXRYVVVaVVdEUlhlbkZGVkhCVVdXeEJjMU5qYlhkclRFTnFWbTg0SzA1Uk5sRkpZbE5SWjFvM1lVVm9VR1ZaSzNSbGNubzJOMEoxVFdoak5GUklVbGN5TWl0TlVEUkJUSGQ0S3l0WlRteFhkSFJ5VEhwa2FUUnFUbUo2UW01eFdWbFpLMUJZZFZVOUlpd2liV0ZqSWpvaU1qVmxNamhqWkdOaFpUZzNZalJqWVRJMU1UZzFZek0wWTJaaE5USTRZVFE0TXpkbFpXTTVNVFEyWkdZMVpHWTBPRGRtTWpGbU16a3pZMlptTjJJeU9TSXNJblJoWnlJNklpSjkiO3M6NzoiZW5jcnlwdCI7YjoxO31zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aToxO30=', 1766576752),
('H2va7QU01mVIrrmOQswA4nHzt8ED1KdpF1QHlbmv', NULL, '162.120.184.3', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/143.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiMDRHMW5OU0d5UWIwT2dQTlFtaDRXT2ZvblhqQmMza0RhMjhFeE16OCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDg6Imh0dHBzOi8vd3d3LnN0YWNrdmVkYXRlY2hub2xvZ2llcy5jb20vY29udGFjdC11cyI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1766570894),
('h4N0ea5nm3uQvK3I1fImtW4r3yTOFwKabw8HGtHp', NULL, '217.182.64.155', 'Mozilla/5.0', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoieklsTEFCdWZwcUJOYnFodHViQ3d5cVpNVmxBaXhKd25VU0o3Y2o2OCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzM6Imh0dHBzOi8vc3RhY2t2ZWRhdGVjaG5vbG9naWVzLmNvbSI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1766459321),
('hBuNMhgm4mEHxBemWdbkPtjIGYlTCxEuZdqwEnHB', NULL, '170.106.197.109', 'Mozilla/5.0 (iPhone; CPU iPhone OS 13_2_3 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/13.0.3 Mobile/15E148 Safari/604.1', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiQ3Nwa1FMNEtOckN0T1l0ZjdQVnFXOEVQRnhUbjljOG1kNzVMNGVtdiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzI6Imh0dHA6Ly9zdGFja3ZlZGF0ZWNobm9sb2dpZXMuY29tIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1766556103),
('IBUcFmgoPSKKc0SvXXGvKT1qMRNBZvkW0vbmPFlK', NULL, '43.153.47.201', 'Mozilla/5.0 (iPhone; CPU iPhone OS 13_2_3 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/13.0.3 Mobile/15E148 Safari/604.1', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiNjlaNHZiTG1PUHU0VFkxWWFJRFNGaWFGeWwyYUlGTHdJeEdQWExJSSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzI6Imh0dHA6Ly9zdGFja3ZlZGF0ZWNobm9sb2dpZXMuY29tIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1766422861),
('IcWMURoHdHWu1T8S9HtITyAb7hOYrdAk1hZqv5SL', NULL, '162.120.184.62', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/143.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoidVM4V2Y0dnhWcXlGOEk2czBDRjYzNERtSGkzTnBNWjdQZzJnaGZsSyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mzc6Imh0dHBzOi8vd3d3LnN0YWNrdmVkYXRlY2hub2xvZ2llcy5jb20iO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1766571716),
('j4NtVr5BRel9zbUOVX21U1midWhuNoya3EgCUX9i', NULL, '93.158.90.67', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/122.0.0.0 Safari/537.36 Agency/93.8.2357.5', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiUERncGx4VmRxaEIxaFpsNGM3VVZEcE95Y3piN2MxdERud0N5Rlp2eSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6ODA6Imh0dHA6Ly9zdGFja3ZlZGF0ZWNobm9sb2dpZXMuY29tL3NlcnZpY2UtZGV0YWlsL2J1c2luZXNzLXByb2Nlc3Mtb3V0c291cmNpbmctYnBvIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1766514762),
('JNW2rt1dHqlyGKKt4iuvrgLRLkim1ou1rwoGixFy', NULL, '18.97.9.97', 'Mozilla/5.0 AppleWebKit/537.36 (KHTML, like Gecko; compatible; PerplexityBot/1.0; +https://perplexity.ai/perplexitybot)', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoieVJ4VUhtbHRFajZOc1R4Zm5LRWduR3Q5Slk2bkFFaGZPNkdyZmVKVyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDc6Imh0dHBzOi8vc3RhY2t2ZWRhdGVjaG5vbG9naWVzLmNvbS9yZXF1ZXN0LXF1b3RlIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1766416146),
('jYES5gUs0zCL2sWCk21VVwRtthIf2Wt3USeapn6P', NULL, '57.131.35.166', 'Mozilla/5.0 (compatible; VertexWP/1.0; +https://vertexwp.com/bot)', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiajhjbkpuRzlCa3pmZFlGaDFxa284NTZqOTYwaXpqQlBtSTdWeFdLQyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzM6Imh0dHBzOi8vc3RhY2t2ZWRhdGVjaG5vbG9naWVzLmNvbSI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1766497711),
('JYhRqivO0KetxUtXIAGe2AosyxJ9ygczDZ9gzySp', NULL, '152.42.157.60', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/143.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoianV5QzBOd2R4MWhrdXFXVzFXeWdneURPVXNWM056R0NGNEFzR245dyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzI6Imh0dHA6Ly9zdGFja3ZlZGF0ZWNobm9sb2dpZXMuY29tIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1766540708),
('kabQFbEWi00rOvDWz12MXPp3EiAoomsdmvJiM6Wk', NULL, '93.158.90.68', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/122.0.0.0 Safari/537.36 Agency/93.8.2357.5', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoic3NQczIxOUFjem1nTlZpdkRFMmt5c21jOE5Gb2dBbzBheTFlME1qYiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NzU6Imh0dHA6Ly9zdGFja3ZlZGF0ZWNobm9sb2dpZXMuY29tL3NlcnZpY2UtZGV0YWlsL3dlYi1hcHBsaWNhdGlvbi1kZXZlbG9wbWVudCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1766514762),
('KBByGnWxLChK6ZT1pxR5R5BR3glJeEm0GZjyKgz5', NULL, '209.38.125.40', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/143.0.0.0 Safari/537.36 Edg/143.0.0.0', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiTG9IN2Z1QjVFNDJKNzV2aEZ1dTIwTllLQ3E2YWJxTHNXa0tEUlFlTCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzM6Imh0dHBzOi8vc3RhY2t2ZWRhdGVjaG5vbG9naWVzLmNvbSI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1766540990),
('Kg5cpX3iJEaSYifTvUypvss354I07G2LugQzkIBI', NULL, '34.34.231.135', 'Mozilla/5.0 (Linux; Android 10; JNY-LX1; HMSCore 6.15.0.302) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/114.0.5735.196 HuaweiBrowser/15.0.4.312 Mobile Safari/537.3', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiQ1ZPaldqMUttd2kzQ2ZySjNlU1ZMNkVkVDlXWEFBR1M0a0YzNWRWaSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzI6Imh0dHA6Ly9zdGFja3ZlZGF0ZWNobm9sb2dpZXMuY29tIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1766499395),
('L3Dc8zyDLa8kiMt8cHZYba8FLfG8xiylPMcZKyFZ', NULL, '156.146.57.114', 'Mozilla/5.0 (Linux; Android 10; K) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/137.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoibGdSN0lPYUFGTEg3SnpUOHlOOW10Z1pMVnBSZEJVUVR2SlZMYXk0SyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzM6Imh0dHBzOi8vc3RhY2t2ZWRhdGVjaG5vbG9naWVzLmNvbSI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1766540990),
('mALPXlZVCW1ctoWaC1DBQ2pVd1gOEaDvmfuIlfY2', NULL, '103.211.134.118', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/143.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiRGphalJKU0FtNEpmbFN2TnNTOTU3MU9zQkxzT1hwU1RYMzFIVEM0SyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzM6Imh0dHBzOi8vc3RhY2t2ZWRhdGVjaG5vbG9naWVzLmNvbSI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1766506523),
('mGfVyVmwIISz4workLzERYcmLrh9iLmOdsOv3l0N', NULL, '162.120.184.9', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/143.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiTHNjb2RibDFmWVRmWnkwSWppa3BSa0RKQjhSWHg0Nk9STmFIdjdPTCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NzA6Imh0dHBzOi8vd3d3LnN0YWNrdmVkYXRlY2hub2xvZ2llcy5jb20vc2VydmljZS1kZXRhaWwvZGlnaXRhbC1tYXJrZXRpbmciO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1766571762),
('mjmESuVflcI699uEb9kmgkVYphS36iQLOQHatXH8', NULL, '72.14.201.187', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/143.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiTEVaczFoQWhYYTAzZ3dZTWtLUVhCaVNUMVlVTlRDOWJielpYZEV1dSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mzc6Imh0dHBzOi8vd3d3LnN0YWNrdmVkYXRlY2hub2xvZ2llcy5jb20iO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1766571753),
('neIXHyFvm6vMN18k3Abe4wmPODxzFiROndGajPKp', NULL, '167.99.45.103', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36 Edg/115.0.1901.200', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoidjFLZnQxSWYyWWdQc0d2eEo4cDNra1o0THQ0WERVRldmb2d1RE91cCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzI6Imh0dHA6Ly9zdGFja3ZlZGF0ZWNobm9sb2dpZXMuY29tIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1766488761),
('nRn2wvExYGwozt118rr0AAj4WRrxG5e3kUOucm6c', NULL, '43.155.157.239', 'Mozilla/5.0 (iPhone; CPU iPhone OS 13_2_3 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/13.0.3 Mobile/15E148 Safari/604.1', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiU2ppa3lHbUtoa1ZxWDZpeU50YTgxcFF0MXJxdzdRN2V3aHRWb3JuNSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzY6Imh0dHA6Ly93d3cuc3RhY2t2ZWRhdGVjaG5vbG9naWVzLmNvbSI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1766534887),
('NxVj2U0U9GR9GlItsEF5JV5km8soo7V5CiY3Rr8R', NULL, '43.155.140.157', 'Mozilla/5.0 (iPhone; CPU iPhone OS 13_2_3 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/13.0.3 Mobile/15E148 Safari/604.1', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiSU1GeE03M0VOWXR1ZXcxZG1GZHFBMGdqbHEwN1doTkhRRWdUNUpOaSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzY6Imh0dHA6Ly93d3cuc3RhY2t2ZWRhdGVjaG5vbG9naWVzLmNvbSI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1766508357),
('Nyu8cGdwcmn8jwXTLbzaorZu22H7W20irIyShQrK', NULL, '43.128.67.187', 'Mozilla/5.0 (iPhone; CPU iPhone OS 13_2_3 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/13.0.3 Mobile/15E148 Safari/604.1', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoicWdVYXpVVXYxaDN3dERYOHRLQ215UHQ0bkVmb3J5aE1VMXl6NERqcCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzI6Imh0dHA6Ly9zdGFja3ZlZGF0ZWNobm9sb2dpZXMuY29tIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1766501145),
('O1fBx073HDxyVxK7vPceKjFz4LQ8DUTfRNYP94sG', NULL, '34.96.41.250', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/134.0.0.0 Safari/537.3', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoic0FidERvUHhoaHg5VVpBc0d2M2JqbnpvM1k1a3VUZk85VDhONzhjQiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzI6Imh0dHA6Ly9zdGFja3ZlZGF0ZWNobm9sb2dpZXMuY29tIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1766499419),
('O85uvUpdgc9EOmAGVfaUaDjbDQbo9x1n4xmQCBUN', NULL, '66.249.79.5', 'Mozilla/5.0 (Linux; Android 6.0.1; Nexus 5X Build/MMB29P) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/141.0.7390.122 Mobile Safari/537.36 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiMnBNQ1hCOEZkZmNtZ0pvOVFpWVlydTVHRUxEZFZicE5KanRWRjY5cSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzY6Imh0dHA6Ly93d3cuc3RhY2t2ZWRhdGVjaG5vbG9naWVzLmNvbSI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1766446157),
('ObKaQRwFIOH1imRV9iYCVcyIDSjJHrUGcSHgYaAC', NULL, '45.114.179.231', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/143.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiQ010QW1yN05VN1VaMjhkWkxXN29PUE5VV3k4NWNUM2hXdWVrbnRzQiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzM6Imh0dHBzOi8vc3RhY2t2ZWRhdGVjaG5vbG9naWVzLmNvbSI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1766506512),
('oLpXwRcmBGK5X4vB9UEhpcthUs85GqEKeQcfE3hg', NULL, '66.249.79.2', 'Mozilla/5.0 (Linux; Android 6.0.1; Nexus 5X Build/MMB29P) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/141.0.7390.122 Mobile Safari/537.36 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiSXBBdTZqYWRyYm5td2RHVzJSZUNCMkJUUndzODY3ajNuVkZEUm5TRiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NzA6Imh0dHBzOi8vd3d3LnN0YWNrdmVkYXRlY2hub2xvZ2llcy5jb20vc2VydmljZS1kZXRhaWwvZGlnaXRhbC1tYXJrZXRpbmciO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1766466621),
('otAzYxoXYp0zW0f75OGPb0AS2EL2oMp0526pgEpm', NULL, '66.249.79.1', 'Mozilla/5.0 (Linux; Android 6.0.1; Nexus 5X Build/MMB29P) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/141.0.7390.122 Mobile Safari/537.36 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiYTY3WngwZU1IRGM1c0pIaTVoVlZuZjhpUHN2UjdFNXRCZzRhOFdFZSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mzc6Imh0dHBzOi8vd3d3LnN0YWNrdmVkYXRlY2hub2xvZ2llcy5jb20iO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1766468871),
('pc6Go6NAwAl8dDVN8vcSH6vHsVPFAMpqVy3dpYGf', NULL, '162.120.185.9', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/143.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiYTd3VXNFTE0xNEg4RlZhNHRMbHdOWWtoSDlHRzF3bW5oaTNKR2MwaCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDc6Imh0dHBzOi8vc3RhY2t2ZWRhdGVjaG5vbG9naWVzLmNvbS9yZXF1ZXN0LXF1b3RlIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1766571769),
('po4Tfz5XXqvCd8iyZlROw3Adt8hGowg8mpAzrLAw', NULL, '167.71.8.159', 'Mozilla/5.0 (X11; Linux x86_64; rv:102.0) Gecko/20100101 Firefox/102.0', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoidWl4RlZHMnVWNEFOdmdvRHlJbFNkMExRdjRhRkN0YkdLM2dENTIyRCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzI6Imh0dHA6Ly9zdGFja3ZlZGF0ZWNobm9sb2dpZXMuY29tIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1766488760),
('pqGuwbQkVveeKtjCCnFgiCvn6QmkBzDDw9NR4wmc', NULL, '52.173.235.87', 'Mozilla/5.0 AppleWebKit/537.36 (KHTML, like Gecko); compatible; ChatGPT-User/1.0; +https://openai.com/bot', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiYWRaaE5pV2xQUjI2cWc4aTJVWWswb2lGUGRwWkRUdHJPeko5cFBNYyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mzc6Imh0dHBzOi8vd3d3LnN0YWNrdmVkYXRlY2hub2xvZ2llcy5jb20iO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1766413842),
('qff7XukbQM1ZIdm2rac65pIGibES1RQ8QUemTT1v', NULL, '188.166.64.95', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/123.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiVHB6UzlFUktkckQ1cmJ2RjhvZW8zNGlTdGQ5SGh5a1Z3VWJCdE12ciI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzM6Imh0dHBzOi8vc3RhY2t2ZWRhdGVjaG5vbG9naWVzLmNvbSI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1766488761),
('QkeJbH07IjImLDQJydMLdV21yWZyBD4VIUElR7Is', NULL, '49.51.243.156', 'Mozilla/5.0 (iPhone; CPU iPhone OS 13_2_3 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/13.0.3 Mobile/15E148 Safari/604.1', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiSlVpaUxDVFlwWlh2UEZOYXFpRFd0SkozTVhYWUNBdnFTZGZKWjFhOCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzI6Imh0dHA6Ly9zdGFja3ZlZGF0ZWNobm9sb2dpZXMuY29tIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1766448050),
('qnAJYAvUZz6rlGb2IavPUSa5qbK4sRhgUXmlUfRz', NULL, '34.34.253.53', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/132.0.0.0 Safari/537.36 Edg/132.0.0.', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiUGtYQXVqbXA0RllCYnZ1cVhZM3NWTmp3ZTJmc0JScFlZUFFPa2JDSSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzI6Imh0dHA6Ly9zdGFja3ZlZGF0ZWNobm9sb2dpZXMuY29tIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1766535612),
('qPnGXmYQjGtukYCxFYqFfEIqfi7N781cxLBYMqPc', NULL, '34.96.41.24', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/134.0.0.0 Safari/537.36 Trailer/93.3.8652.5', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoicDBzNG05WnJPaks4OVdvTW52SzZ5NHA1eXBoeUVmb0hTaVQ3TEhHVyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzI6Imh0dHA6Ly9zdGFja3ZlZGF0ZWNobm9sb2dpZXMuY29tIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1766506727),
('R2NDs4Na24NslRQAl8pDHkWLMpauIefCfbzWanOE', NULL, '34.96.52.111', 'Mozilla/5.0 (Linux; Android 10; K) AppleWebKit/537.36 (KHTML, like Gecko) SamsungBrowser/27.0 Chrome/125.0.0.0 Mobile Safari/537.3', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiVEdzYjd6U0ZvVUZPQm9sb0FtTDNDQWhXTWtpVkpvQ2t5NnIzMTFrMSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzI6Imh0dHA6Ly9zdGFja3ZlZGF0ZWNobm9sb2dpZXMuY29tIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1766499557),
('r6QdQKX7zKZNnHeIT1RsUXfVdBQI7OnGbQr9FyMu', NULL, '52.45.9.143', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/124.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoid09WVmpYS3FUdFREVjExeWN2ZzhZSTdIQUZSSDFUSU1FemZlN2VPTiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzM6Imh0dHBzOi8vc3RhY2t2ZWRhdGVjaG5vbG9naWVzLmNvbSI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1766486637),
('S01522DOHRhKFHbiPbGbZ3qhclYsBDQOWHfKjvkf', NULL, '93.158.90.66', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/122.0.0.0 Safari/537.36 Agency/93.8.2357.5', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoic1RNMmNqN2VibjZWQnA0dGZidXFzbzVidmpxSG5NZGExczZjaExZUCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzI6Imh0dHA6Ly9zdGFja3ZlZGF0ZWNobm9sb2dpZXMuY29tIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1766514761),
('Se9x7crqfCLloRtkS0oIXbI2tRgnk3kNj9bBFB2V', NULL, '203.2.64.59', 'Mozilla/5.0 (iPhone; CPU iPhone OS 13_2_3 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/13.0.3 Mobile/15E148 Safari/604.1', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiTXFpeE5tMzhaenZaejZkdVJrTHBlVnQwSXFZNHBUOXhvQXM3ZHREayI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzY6Imh0dHA6Ly93d3cuc3RhY2t2ZWRhdGVjaG5vbG9naWVzLmNvbSI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1766467173),
('SHKOzrTCNz15EieTBgfks7jj79W8QiJu44InpKEw', NULL, '74.7.243.230', 'Mozilla/5.0 AppleWebKit/537.36 (KHTML, like Gecko; compatible; GPTBot/1.3; +https://openai.com/gptbot)', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiaU5IZGU1MlUzWldQMVR6QTd1bUdkdW8wMXBUTndJZHZDM3lHdzJ4USI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzM6Imh0dHBzOi8vc3RhY2t2ZWRhdGVjaG5vbG9naWVzLmNvbSI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1766508536),
('uIvaSlmyzzxGFv1tMclhdZmzLVoPP5LAe8aVFjtB', NULL, '45.114.179.231', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/143.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiNHMzeVFyUnNzTTlkSUJiWVBGMEI2bmczRjBJSU1ZYTY3bHJRbTJTVSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mzc6Imh0dHBzOi8vd3d3LnN0YWNrdmVkYXRlY2hub2xvZ2llcy5jb20iO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1766427037),
('UOe5BNDf93P72ECqvpyhpcHoqnEMDrlzsWsgS90I', NULL, '43.131.26.226', 'Mozilla/5.0 (iPhone; CPU iPhone OS 13_2_3 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/13.0.3 Mobile/15E148 Safari/604.1', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiaHVqcWNTYnRYOERoZzV5RDNtY280dFVwdllrVXNCZ2FNTHFPVGZVQSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzY6Imh0dHA6Ly93d3cuc3RhY2t2ZWRhdGVjaG5vbG9naWVzLmNvbSI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1766482533),
('urfnVPyBG8NHrLplNJlvXmZ4rCIvzAGoS03LTO6c', NULL, '223.15.245.170', 'Mozilla/5.0 (iPhone; CPU iPhone OS 13_2_3 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/13.0.3 Mobile/15E148 Safari/604.1', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiREdZMmc3aUplenkybE5OWXFXZk04cmJObkt1Zzd2cDZmc21TbVlTWCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzY6Imh0dHA6Ly93d3cuc3RhY2t2ZWRhdGVjaG5vbG9naWVzLmNvbSI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1766558973),
('UWyTTPWTMAMyBFJMFgTXq2q4RGW3GvBjnHkPsFCd', NULL, '34.34.253.244', 'Mozilla/5.0 (Linux; Android 10; K) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/126.0.0.0 Mobile Safari/537.3', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoieXFTUTlZa0FmZTVVbWowbjdrbHhIcGpZN1lLb3F3NnU5Um94SVI3MyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzI6Imh0dHA6Ly9zdGFja3ZlZGF0ZWNobm9sb2dpZXMuY29tIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1766510257),
('Vg9oMIdVRcsZIzFYOJuDebGyD0UJbSknqMdT2lFb', NULL, '34.96.52.40', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/134.0.0.0 Safari/537.3', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoidHowSkxrQmdINVlqdEtJWjF2aE1aYVFIRFJEY3c1V3dvOFI1VElLbyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzI6Imh0dHA6Ly9zdGFja3ZlZGF0ZWNobm9sb2dpZXMuY29tIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1766525030),
('VmZPaqyYZAB15QTk1GUqlByZyvKdDbU5w3s9BOwA', NULL, '74.7.229.233', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36; compatible; OAI-SearchBot/1.3; +https://openai.com/searchbot', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiSXZuTDVOUkJlamdReGZFd3prUFpGendsS1duY0pkTFVDOXR6QVpDVSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mzc6Imh0dHBzOi8vd3d3LnN0YWNrdmVkYXRlY2hub2xvZ2llcy5jb20iO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1766413917),
('VP4TFvko0wbA009BY0KKjqI1cqsORO7IOomDYLyL', NULL, '114.80.36.40', 'Mozilla/5.0 (iPhone; CPU iPhone OS 13_2_3 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/13.0.3 Mobile/15E148 Safari/604.1', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoieU5HZkNlWldqV3VIM0tKUEdjd3oxYXhqSHdBcFNJdUVsODBXb0ZHbyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzI6Imh0dHA6Ly9zdGFja3ZlZGF0ZWNobm9sb2dpZXMuY29tIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1766536325),
('VwjQaIbcrqgJXEZKoc1nR6xzxQ9MPcLmWRJBfnZ4', NULL, '18.97.9.98', 'Mozilla/5.0 AppleWebKit/537.36 (KHTML, like Gecko; compatible; PerplexityBot/1.0; +https://perplexity.ai/perplexitybot)', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiWVVOdXU3NHl5Mlo5eUtPTmVaZnBTUnhyendUaVJVYWlNcUQ3ME9jVSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NzA6Imh0dHBzOi8vd3d3LnN0YWNrdmVkYXRlY2hub2xvZ2llcy5jb20vc2VydmljZS1kZXRhaWwvZGlnaXRhbC1tYXJrZXRpbmciO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1766416123),
('WffY6IubisxobNbkcGdReeAjirMQEBZ7evCCqOvR', NULL, '18.97.9.97', 'Mozilla/5.0 AppleWebKit/537.36 (KHTML, like Gecko; compatible; PerplexityBot/1.0; +https://perplexity.ai/perplexitybot)', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoic1dIS0Jtenl4TWRaaW9mU1FrSElLV0prRnZCTDR4cXI5anAyWWptRCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzM6Imh0dHBzOi8vc3RhY2t2ZWRhdGVjaG5vbG9naWVzLmNvbSI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1766416139),
('WSWP5ty3gDTtUXDMZ5iZWBdVsxu8nzBFLlvC45lu', NULL, '192.144.148.122', 'Mozilla/5.0 (iPhone; CPU iPhone OS 13_2_3 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/13.0.3 Mobile/15E148 Safari/604.1', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiWDJIdUJ2YkxYZEphRW1UTHRhckhyTWwyc0NqN1JYVjFJUm54c2ZDSiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzY6Imh0dHA6Ly93d3cuc3RhY2t2ZWRhdGVjaG5vbG9naWVzLmNvbSI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1766422440),
('WVsOtfynGXsCiuqumiCpfGtqZU5PvCVW296SvrwF', NULL, '198.244.240.54', 'Mozilla/5.0 (compatible; AhrefsBot/7.0; +http://ahrefs.com/robot/)', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiY1VsOG9FaHN4YktoMllKb1p1R25MamZ5RW9VenF5d0tIRTBOZEZvNSI7czo3OiJjYXB0Y2hhIjthOjM6e3M6OToic2Vuc2l0aXZlIjtiOjA7czozOiJrZXkiO3M6MzEyOiJleUpwZGlJNklrRkNZMVJGV1ZaeFYwSnNRbThyVjI4eE1XSlRWbEU5UFNJc0luWmhiSFZsSWpvaVExa3dNMEYwWW05M1EwdFphVmtyVld0dFUzVnlRVGwwTjJaNlZGcEZhbEZwWlVkR1oyUlBVWE5HVVZKM2FYUkplREZYVG1oaFpVdEZjelkyUmxSbVduTTBVVzlxZG5CWlpsaFJlbGg2YWxSSWFVZFJXRXBKTVcxb1oyeHFjVkEyUzBGMVZXZ3JWRXQ1WTNNOUlpd2liV0ZqSWpvaVpHWmpZbVV5WkRFM1ltRTFZV05qTmpjNE1UUTNZalF5WWpVMU1EaGhNakJqT0RBNVpUbGtOamMzT1RKbU5ETmtZV0UzTnpCa05qWmtNV1F4WlRGbU55SXNJblJoWnlJNklpSjkiO3M6NzoiZW5jcnlwdCI7YjoxO31zOjk6Il9wcmV2aW91cyI7YToxOntzOjM6InVybCI7czo1NjoiaHR0cHM6Ly9zdGFja3ZlZGF0ZWNobm9sb2dpZXMuY29tL2NhcHRjaGEvZmxhdD95YXUzTnd4aD0iO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1766508007),
('x8QsbcujTPvpHvEqXWfsR8h0hJFCBH5kTXYAPRpy', NULL, '35.84.182.144', 'Mozilla/5.0 (compatible; wpbot/1.3; +https://forms.gle/ajBaxygz9jSR8p8G9)', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoicVh1UFozOUpSbTlyeXU4RlhzSEZwVzdWRUlsRzRQY3p3VEJpaFJLdCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzM6Imh0dHBzOi8vc3RhY2t2ZWRhdGVjaG5vbG9naWVzLmNvbSI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1766483102),
('xB63y03MKQ7naZMfGNDJ1LjrKQKzuw6pNSOR8plW', NULL, '106.54.62.156', 'Mozilla/5.0 (iPhone; CPU iPhone OS 13_2_3 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/13.0.3 Mobile/15E148 Safari/604.1', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoibFZBSEFpRHJlS3Uyb21DVkVYWkJXMkNsR1RTSVl5dDdLVkdyblFWcSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzY6Imh0dHA6Ly93d3cuc3RhY2t2ZWRhdGVjaG5vbG9naWVzLmNvbSI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1766513800),
('yjCKIqM2VtJrohvPcwIbUW4TFIIux3IzgAw4W2Gt', NULL, '34.96.41.3', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/17.10 Safari/605.1.1', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiR3N3MTNZc1Zhc24zM25hZkV1a3VtWEVZMTlpdjM4T1lkdEJWdDRIaSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzI6Imh0dHA6Ly9zdGFja3ZlZGF0ZWNobm9sb2dpZXMuY29tIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1766528315),
('YZ1qrYpDqV9MH2vNkvM4EBHF5UAiy7xjEeQ8IFJw', NULL, '45.114.179.231', 'WhatsApp/2.2587.9 W', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoib2dVTENrRGlSRXE2Ym9rbVp3Q2FEMnROVVR1NElkbnhrTEp1MXdGYiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mzc6Imh0dHBzOi8vd3d3LnN0YWNrdmVkYXRlY2hub2xvZ2llcy5jb20iO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1766571984),
('z099Va9ZJ6ga5PT65SloQNsoNmh70S7Hi5ZckkYX', NULL, '34.96.41.67', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/70.0.3538.102 Safari/537.36 Edge/18.1958', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiMUNTdUdrTk9IcmZ3YmdIY1MwckVtbDI2TlpjSzFOM2pnMjRZQ0NFSCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzI6Imh0dHA6Ly9zdGFja3ZlZGF0ZWNobm9sb2dpZXMuY29tIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1766496156),
('ze6q6YrIBg7yp1g7S4TrjlLzoRAW8XqZmJIMsia2', NULL, '162.120.184.15', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/143.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiQnZSbGtrdXhQYjZ6Y2lwaEVFeDlRaGhtM1FKSUt4ZkNRRGxkT0llQSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDg6Imh0dHBzOi8vd3d3LnN0YWNrdmVkYXRlY2hub2xvZ2llcy5jb20vY29udGFjdC11cyI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1766571754);
INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('ZNw0QF0tzmmCBAkt1EPHPXvluCWV18ENmkfnAAqo', NULL, '52.112.125.9', 'Mozilla/5.0 (Windows NT 6.1; WOW64) SkypeUriPreview Preview/0.5 skype-url-preview@microsoft.com', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiYkN6S3BGR3JWZldwOFJBb3ZDcXlaWkROcW51NmtxcGZDcjJhSE9HYSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mzc6Imh0dHBzOi8vd3d3LnN0YWNrdmVkYXRlY2hub2xvZ2llcy5jb20iO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1766415857),
('ZujbJgs9gXhawAyaOd4LzbDd0muBpyiB3C2F3ZVN', NULL, '93.158.90.66', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/122.0.0.0 Safari/537.36 Agency/93.8.2357.5', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiQzBsYW9kNTlhcmMzakk0SnhGajVlb3p0UmZNOUVadFRPNzZCaUN2NSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NzQ6Imh0dHA6Ly9zdGFja3ZlZGF0ZWNobm9sb2dpZXMuY29tL3NlcnZpY2UtZGV0YWlsL2l0LWNvbnN1bHRpbmctYW5kLXN0YWZmaW5nIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1766514763);

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `site_name` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `facebook_url` varchar(255) DEFAULT NULL,
  `x_url` varchar(255) DEFAULT NULL,
  `youtube_url` varchar(255) DEFAULT NULL,
  `linkdin_url` varchar(255) DEFAULT NULL,
  `short_description` longtext DEFAULT NULL,
  `mobile_2` varchar(255) DEFAULT NULL,
  `mobile_3` varchar(255) DEFAULT NULL,
  `email_2` varchar(255) DEFAULT NULL,
  `email_3` varchar(255) DEFAULT NULL,
  `instagram_url` varchar(255) DEFAULT NULL,
  `office_time` varchar(255) DEFAULT NULL,
  `map_link` longtext DEFAULT NULL,
  `logo` varchar(255) DEFAULT NULL,
  `favicon` varchar(255) DEFAULT NULL,
  `inverted_logo` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `site_name`, `location`, `mobile`, `email`, `facebook_url`, `x_url`, `youtube_url`, `linkdin_url`, `short_description`, `mobile_2`, `mobile_3`, `email_2`, `email_3`, `instagram_url`, `office_time`, `map_link`, `logo`, `favicon`, `inverted_logo`, `created_at`, `updated_at`) VALUES
(1, 'StackVeda Technologies', 'Unit no. 3/22, Suhatta Mall, Shahid Khudiram Sarani, City Center, Durgapur, West Bengal 713216', '+91-9046240275', 'info@stackvedatechnologies.com', 'https://www.facebook.com/profile.php?id=61581121325811', NULL, NULL, 'https://www.linkedin.com/company/stackveda-technologies', 'We are experienced professionals who understand that It services is changing, and are true partners who care about your future business success.', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'storage/settings/17567475005198.png', 'storage/settings/17567475002678.png', NULL, '2025-09-01 11:54:41', '2025-12-24 18:44:30');

-- --------------------------------------------------------

--
-- Table structure for table `tech_logos`
--

CREATE TABLE `tech_logos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `logo` varchar(255) NOT NULL,
  `order` int(11) NOT NULL DEFAULT 0,
  `status` tinyint(1) NOT NULL DEFAULT 1,
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
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `user_type` enum('admin','customer') NOT NULL DEFAULT 'customer',
  `status` tinyint(1) NOT NULL DEFAULT 0,
  `is_active` tinyint(1) NOT NULL DEFAULT 0,
  `mobile_verified_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `enquiries`
--
ALTER TABLE `enquiries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `portfolios`
--
ALTER TABLE `portfolios`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tech_logos`
--
ALTER TABLE `tech_logos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `enquiries`
--
ALTER TABLE `enquiries`
  ADD CONSTRAINT `enquiries_service_id_foreign` FOREIGN KEY (`service_id`) REFERENCES `services` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
