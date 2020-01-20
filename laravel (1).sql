-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 20, 2020 at 03:57 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.2.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laravel`
--

-- --------------------------------------------------------

--
-- Table structure for table `about_profiles`
--

CREATE TABLE `about_profiles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `Name` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Designation` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `CompleateProject` int(11) DEFAULT NULL,
  `Experience` int(11) DEFAULT NULL,
  `HappyClient` int(11) DEFAULT NULL,
  `TotalSkillOfWork` int(11) DEFAULT NULL,
  `ShortBrief` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Details` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image1` int(11) DEFAULT NULL,
  `image2` int(11) DEFAULT NULL,
  `imageAltText` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `imageTitleText` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Discover_link` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Download_link` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Email1` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Email2` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Phone1` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Phone2` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Address` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Facebook_Link` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Youtube_Link` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Twitter_Link` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Linkedin_Link` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Fiveer_Link` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Upwork_Link` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Instagram_Link` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Pinterest_Link` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Behance_Link` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Dribble_Link` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Vimeo_Link` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Github_Link` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Google_Map` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `stackoverflow_link` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `about_profiles`
--

INSERT INTO `about_profiles` (`id`, `Name`, `Designation`, `CompleateProject`, `Experience`, `HappyClient`, `TotalSkillOfWork`, `ShortBrief`, `Details`, `image1`, `image2`, `imageAltText`, `imageTitleText`, `Discover_link`, `Download_link`, `Email1`, `Email2`, `Phone1`, `Phone2`, `Address`, `Facebook_Link`, `Youtube_Link`, `Twitter_Link`, `Linkedin_Link`, `Fiveer_Link`, `Upwork_Link`, `Instagram_Link`, `Pinterest_Link`, `Behance_Link`, `Dribble_Link`, `Vimeo_Link`, `Github_Link`, `Google_Map`, `stackoverflow_link`, `created_at`, `updated_at`) VALUES
(1, 'MITHUN RANA', 'software Engineer', 7, 3, 7, 7, 'I’m Mithun Rana. Thank you for visiting my website. I am an Web application design and development expert in Bangladesh, who also provides web design development Training,\r\n Web design application development service, in as well as consultancy services\r\nto businesses. I have expertise in all areas of Web application design development, including advanced Web design application development services, \r\nbut I consider myself more of a Local Web application design development specialist. During my professional lifespan I’ve\r\nworked with numerous centers for Web application design development Training in Bangladesh, like BITM,\r\nDIPTI, and Rosetta Technology Training. Now I am among the top most Web application design development specialist specialists \r\nin Bangladesh, according to Google.', 'also I have good experience on Graphics Design, SEO, Digital marketing too.  I\'m currently working at unicode technology also performing tech help info on My Youtube Channel and website\r\nI have been working as a Web Developer over the last 3 years. and I provide local web design development, local google business listing service from Tech Help Info.  Moreover I used to work with different companies as a graphics designer and digital marketer. Recently I am trying to work for development my own company as an Entrepreneur\r\nI welcome you to look around my website and get in touch with me if you feel my services could add value to your business and its online presence. Please feel free to download and peruse my Curriculum Vitae by clicking the button below.', 34, 33, NULL, NULL, NULL, NULL, 'mithunrana.developer@gmail.com', 'mithunrana139@gmail.com', '01836375309', NULL, '41/8, box culvert road, puran paltan, dhaka-1000', 'https://www.facebook.com/mithunrana.bd', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2020-01-14 06:40:50', '2020-01-14 23:00:29');

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `browser_title` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `blog_title` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `permalink` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `video_url` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `embedded_video` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `blog_details` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `category` int(11) DEFAULT NULL,
  `blog_poster` int(11) NOT NULL,
  `featured_image` int(11) NOT NULL,
  `seo_keyword` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `seo_description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `imageAltText` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `imageTitleText` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Active_Status` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `browser_title`, `blog_title`, `permalink`, `video_url`, `embedded_video`, `blog_details`, `category`, `blog_poster`, `featured_image`, `seo_keyword`, `seo_description`, `imageAltText`, `imageTitleText`, `Active_Status`, `created_at`, `updated_at`) VALUES
(1, 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo', 'https://www.youtube.com/watch?v=iDgFHctbOf8', '<iframe width=\"100%\" height=\"450\" src=\"https://www.youtube.com/embed/N9zUUYZzIPU\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', '<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo&nbsp;Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo</p>', 1, 1, 24, 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo', 'fasf', 'fasdf', 1, '2020-01-14 07:19:07', '2020-01-20 05:00:14');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `CategoryName` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `CategoryUrl` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `CategorySeoKeyword` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `CategorySeoDescription` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `CategoryBrowserTitle` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `CategoryName`, `CategoryUrl`, `CategorySeoKeyword`, `CategorySeoDescription`, `CategoryBrowserTitle`, `created_at`, `updated_at`) VALUES
(1, 'web design', 'web-design', 'web design', 'web design', 'web-design', '2020-01-14 07:16:29', '2020-01-14 07:16:29');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `Name` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Designation` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Image` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Comment` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `Active_Status` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `Name`, `Designation`, `Image`, `Comment`, `Active_Status`, `created_at`, `updated_at`) VALUES
(1, 'MOHAMMAD KABIR', 'CEO OF SOSHINE', '25', 'As an SEO expert, my answer is SEO is just not only important for your online business but also you need to promote your website to', 1, '2020-01-14 07:02:10', '2020-01-18 10:53:42'),
(2, 'MITHUN RANA', 'CEO OF TECH HELP INFO', '24', 'My team and I are the top best SEO service provider in Bangladesh. We provide complete SEO solution for your business', 1, '2020-01-14 07:02:28', '2020-01-14 23:33:40');

-- --------------------------------------------------------

--
-- Table structure for table `expertnesses`
--

CREATE TABLE `expertnesses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `Name` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Percentage` int(11) NOT NULL,
  `Active_Status` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `expertnesses`
--

INSERT INTO `expertnesses` (`id`, `Name`, `Percentage`, `Active_Status`, `created_at`, `updated_at`) VALUES
(1, 'WEB DESIGN', 85, 1, '2020-01-14 06:59:37', '2020-01-14 23:01:30'),
(2, 'WEB DEVELOPMENT', 90, 1, '2020-01-14 06:59:50', '2020-01-14 23:01:55'),
(3, 'SEO', 80, 1, '2020-01-14 07:00:06', '2020-01-14 23:02:06'),
(4, 'GRAPHICS DESIGN', 75, 1, '2020-01-14 23:02:26', '2020-01-14 23:02:31'),
(5, 'VIDEO EDITING', 55, 1, '2020-01-14 23:02:51', '2020-01-14 23:03:25'),
(6, 'DIGITAL MARKETING', 80, 1, '2020-01-14 23:03:21', '2020-01-14 23:03:27'),
(7, 'HTML5', 80, 1, '2020-01-14 23:04:16', '2020-01-14 23:06:14'),
(8, 'CSS3', 80, 1, '2020-01-14 23:04:27', '2020-01-14 23:06:16'),
(9, 'PHP', 80, 1, '2020-01-14 23:04:43', '2020-01-14 23:06:18'),
(10, 'KEYWORD RESEARCH', 75, 1, '2020-01-14 23:05:03', '2020-01-14 23:06:20'),
(11, 'LARAVEL', 82, 1, '2020-01-14 23:05:39', '2020-01-14 23:06:22'),
(12, 'VUE JS', 80, 1, '2020-01-14 23:05:53', '2020-01-14 23:06:24'),
(13, 'Codeigniter', 80, 1, '2020-01-14 23:06:08', '2020-01-14 23:06:12');

-- --------------------------------------------------------

--
-- Table structure for table `galleries`
--

CREATE TABLE `galleries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` int(11) NOT NULL,
  `imageAltText` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `imageTitleText` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `EventNameOFImage` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Active_Status` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `galleries`
--

INSERT INTO `galleries` (`id`, `image`, `imageAltText`, `imageTitleText`, `EventNameOFImage`, `Active_Status`, `created_at`, `updated_at`) VALUES
(1, 31, 'image alt', 'image title', 'image first', 1, '2020-01-17 02:15:21', '2020-01-17 02:29:04'),
(2, 32, 'fasdf', 'fadsf', 'fasdf', 1, '2020-01-17 02:26:00', '2020-01-17 02:29:10'),
(3, 34, 'fasdf', 'fasdf', 'fadsfdf', 1, '2020-01-17 02:26:23', '2020-01-17 02:29:14');

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `imageurl` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id`, `imageurl`, `created_at`, `updated_at`) VALUES
(19, 'images/graphics-design-image.jpg', NULL, NULL),
(20, 'images/seo-image.jpg', NULL, NULL),
(21, 'images/video-editing-image.jpg', NULL, NULL),
(22, 'images/web-design-image.jpg', NULL, NULL),
(23, 'images/web-development-image.jpg', NULL, NULL),
(24, 'images/digital-marketing-image.jpg', NULL, NULL),
(25, 'images/digital-marketing-icon.png', NULL, NULL),
(26, 'images/graphics-design-icon.png', NULL, NULL),
(27, 'images/seo-icon.png', NULL, NULL),
(28, 'images/video-editing-icon.png', NULL, NULL),
(29, 'images/web-design-icon.png', NULL, NULL),
(30, 'images/web-development-icon.png', NULL, NULL),
(31, 'images/hikvision-bangladesh.png', NULL, NULL),
(32, 'images/soshine-marketing-company.png', NULL, NULL),
(33, 'images/soshine-marketing-company-web-seo.png', NULL, NULL),
(34, 'images/frontier-internation-school.png', NULL, NULL),
(35, 'images/mithun-rana-seo-portfolio.png', NULL, NULL),
(36, 'images/mithunrana-website.PNG', NULL, NULL),
(37, 'images/avtech-happy-new-year-design.jpg', NULL, NULL),
(38, 'images/avtech-cctv-camera.jpg', NULL, NULL),
(39, 'images/mithunrana-rana-graphics-design.jpg', NULL, NULL),
(44, 'images/Avtech-cctv-list-bangladesh.jpg', '2020-01-20 06:27:36', '2020-01-20 06:27:36');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_12_16_130324_create_images_table', 1),
(4, '2019_12_17_123257_create_blogs_table', 1),
(5, '2019_12_17_130722_create_categories_table', 1),
(6, '2019_12_23_161744_create_services_table', 1),
(7, '2019_12_23_162356_create_portfolios_table', 1),
(8, '2019_12_25_123312_create_portfolio_categories_table', 1),
(9, '2019_12_25_155238_create_about_profiles_table', 1),
(10, '2020_01_02_123212_create_comments_table', 1),
(11, '2020_01_02_123429_create_expertnesses_table', 1),
(12, '2020_01_02_123559_create_qualifications_table', 1),
(13, '2020_01_16_085355_create_galleries_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `portfolios`
--

CREATE TABLE `portfolios` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `Portfolio_title` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `BrowserTitle` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `permalink` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category` int(11) DEFAULT NULL,
  `featured_image` int(11) NOT NULL,
  `SeoKeyword` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `SeoDescription` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `FeaturedImageAltText` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `FeaturedImageTitleText` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `MainContent` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `OpenContent` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `Active_Status` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `portfolios`
--

INSERT INTO `portfolios` (`id`, `Portfolio_title`, `BrowserTitle`, `permalink`, `category`, `featured_image`, `SeoKeyword`, `SeoDescription`, `FeaturedImageAltText`, `FeaturedImageTitleText`, `MainContent`, `OpenContent`, `Active_Status`, `created_at`, `updated_at`) VALUES
(1, 'Frontier International School Web Development Project', 'Frontier International School | Web Development By Mithun Rana', 'frontier-international-school-web-development-by-mithun-rana', 1, 34, 'Frontier International School, web development, web development project, mithun rana, md mithun rana', 'Frontier International School web development project develop by mithun rana. this is full school management project ERP Software full compleate by mithun rana', 'frontier international school mithun rana', 'Frontier International School Mithun Rana', '<h5>Web Design:</h5>\r\n<p>HTML, CSS, Javascript, ajax, JQuery</p>\r\n<h5>Web Development:</h5>\r\n<p>PHP, MySql, Codeigniter, Google Map Integration</p>\r\n<h2>Features</h2>\r\n<p><strong><span style=\"text-decoration: underline;\">API</span></strong></p>\r\n<ul style=\"list-style-type: square;\">\r\n<li style=\"text-align: left;\">student fee payment by paypal</li>\r\n<li>student fee payment by stripe</li>\r\n<li style=\"text-align: left;\">sms sending by clickta bell</li>\r\n<li style=\"text-align: left;\">sms sending by twillio</li>\r\n<li style=\"text-align: left;\">sms sending by msg 91</li>\r\n</ul>', '<section class=\"row\">\r\n<section class=\"col-sm-6\">\r\n<h3>Web Site Feature</h3>\r\n<ul style=\"list-style-type: square;\">\r\n<li>Event Updates</li>\r\n<li>school notice board</li>\r\n<li>school photo gallery</li>\r\n<li>Teacher Portfolio</li>\r\n<li>Home Page Slider</li>\r\n<li>Contact Form For School</li>\r\n<li>Social Media Linkup</li>\r\n</ul>\r\n</section>\r\n<section class=\"col-sm-6\">\r\n<h3><span style=\"text-decoration: underline;\">Business Feature&nbsp;</span></h3>\r\n<ul style=\"list-style-type: square;\">\r\n<li>Compleately Responsive Design</li>\r\n<li>Latest And Trendy User interface</li>\r\n<li>Extremly User friendly layout</li>\r\n<li>Multi User Account Panel</li>\r\n<li>Right To Left Alignment</li>\r\n<li>Strong Data policy for whole system</li>\r\n<li>Compleate Oper Source Code</li>\r\n<li>Professional Developer Support</li>\r\n<li>Life Time Free Updates</li>\r\n</ul>\r\n</section>\r\n</section>', 1, '2020-01-15 00:07:58', '2020-01-15 02:51:02'),
(2, 'Hikvision Bangladesh Web Development Project', 'Hikvision Bangladesh Web Development By Mithun Rana', 'hikvision-bangladesh-web-development-mithun-rana', 1, 31, 'hikvision bangladesh, hikvision bangladesh website, who develop hikvision bangladesh website,mithun rana', 'hikvision bangladesh website develoment by mithun rana. hikvision is the cctv camera brand this brand  bangladesh zone website development by mithun rana', 'hikvision bangladesh', 'hikvision bangladesh', '<h5>Web Design:</h5>\r\n<p>HTML4, HTML5, CSS, Javascript, ajax, JQuery, Bootstrap</p>\r\n<h5>Web Development:</h5>\r\n<p>PHP, MySql, Codeigniter, Google Map Integration</p>\r\n<h2>Features</h2>\r\n<p><strong><span style=\"text-decoration: underline;\">Page List</span></strong></p>\r\n<ul style=\"list-style-type: square;\">\r\n<li style=\"text-align: left;\">HOME PAGE</li>\r\n<li style=\"text-align: left;\">Career</li>\r\n<li style=\"text-align: left;\">About us</li>\r\n<li style=\"text-align: left;\">Contact US</li>\r\n<li style=\"text-align: left;\">Particular product view</li>\r\n<li style=\"text-align: left;\">Support&nbsp;</li>\r\n<li style=\"text-align: left;\">Solution</li>\r\n<li style=\"text-align: left;\">Particular solution view</li>\r\n<li style=\"text-align: left;\">Sucess history</li>\r\n<li style=\"text-align: left;\">Particular&nbsp; Sucess history view</li>\r\n<li style=\"text-align: left;\">Importer&nbsp;</li>\r\n<li style=\"text-align: left;\">Distributor</li>\r\n<li style=\"text-align: left;\">Search Product</li>\r\n</ul>\r\n<p><strong><span style=\"text-decoration: underline;\">Product Feature</span></strong></p>\r\n<ul style=\"list-style-type: circle;\">\r\n<li><span style=\"text-decoration: underline;\">Product Category</span></li>\r\n<li><span style=\"text-decoration: underline;\">Product Category Product</span></li>\r\n<li><span style=\"text-decoration: underline;\">Brand wise product</span></li>\r\n</ul>', '', 1, '2020-01-15 03:37:36', '2020-01-17 07:17:43'),
(3, 'Soshine Marketing Company Web Development', 'Soshine Marketing Company Web Development Development Mithun Rana', 'soshine-marketing-company-web-development-mithun-rana', 1, 32, 'soshine marketing company web development, soshine, soshine marketing company web development by mithun rana, mithun rana', 'soshine marketing company web development, soshine, soshine marketing company web development by mithun rana, mithun rana', 'SOSHINE MARKETING COMPANY', 'soshine marketing company', '<h5>Project Design Source:</h5>\r\n<p>HTML, CSS, Javascript, ajax, JQuery, Bootstrap</p>\r\n<h5>Web Development:</h5>\r\n<p>PHP, MySql, Codeigniter, Google Map Integration</p>\r\n<h2>Project Features</h2>\r\n<p><strong><span style=\"text-decoration: underline;\">Page List</span></strong></p>\r\n<ul>\r\n<li>Home Page</li>\r\n<li>Product Page</li>\r\n<li>Product By Secondary Category</li>\r\n<li>Product By Brand</li>\r\n<li>Product By Search</li>\r\n<li>Product By Primary Category</li>\r\n<li>Sucess history</li>\r\n<li>Particular sucess history view</li>\r\n<li>Solution</li>\r\n<li>Particular solution view</li>\r\n<li>About us&nbsp;</li>\r\n<li>Contact us</li>\r\n<li>User login</li>\r\n<li>User Signup</li>\r\n<li>Blog Tutorial</li>\r\n<li>Partcular Blog View</li>\r\n</ul>\r\n<p>&nbsp;</p>', '<p>soshine marketing company is the avtech importer in bangladesh. soshine marketing company sole distributor of avtech in bangladesh. and &lt;a href=\"www.mithunrana.com\"&gt;mithun rana&lt;/a&gt; develop the soshine marketing company website.</p>\r\n<h3><span style=\"text-decoration: underline;\"><strong>The Web site feature</strong></span></h3>\r\n<p><span style=\"text-decoration: underline;\">Admin Panel</span></p>\r\n<section class=\"row\">\r\n<section class=\"col-sm-6\">\r\n<p>1. Add Product</p>\r\n<p>2. Edit Product</p>\r\n<p>3. Delete Product</p>\r\n<p>4. Tutorial Add</p>\r\n<p>5. Manage Tutorial</p>\r\n<p>6. Edit Tutorial</p>\r\n<p>7. Delete Tutorial</p>\r\n<p>8. Success history add</p>\r\n</section>\r\n<section class=\"col-sm-6\">\r\n<p>9. Manage success history</p>\r\n<p>10.Edit Success history</p>\r\n<p>11. Delete Success history</p>\r\n<p>12. Solution Add</p>\r\n<p>13. Solution Manage</p>\r\n<p>14. Solution Delete</p>\r\n<p>14. Dynamically Contact page</p>\r\n<p>16. User can send mail for contact</p>\r\n</section>\r\n</section>', 1, '2020-01-15 04:55:09', '2020-01-17 07:55:21'),
(4, 'Personal Portfolio And Bloging Website', 'Personal Portfolio And Bloging Website Free Download', 'personal-portfolio-bloging-website-free-download', 1, 36, 'personal portfolio website, bloging website, free download, portfolio website free  download', 'personal portfolio and bloging website free download, personal portfolio and blogin website development by php laravel and vue js, development by mithun rana', 'Mithun Rana', 'mithun rana', '<h5>Project Design Source (Front End):</h5>\r\n<p>HTML, CSS, Javascript, ajax, Vue js, JQuery, Bootstrap</p>\r\n<h5>Web Development (Server Side):</h5>\r\n<p>PHP, MySql, laravel 5.8</p>\r\n<h2>Project Features</h2>\r\n<p><strong><span style=\"text-decoration: underline;\">Page List</span></strong></p>\r\n<ul>\r\n<li>Home Page</li>\r\n<li>Dynamically About Page</li>\r\n<li>Dynamically Contact Page</li>\r\n<li>Dynamically Gallery</li>\r\n<li>Portfolio Page</li>\r\n<li>Particular Portfolio View</li>\r\n<li>Service Page</li>\r\n<li>Particular Service View</li>\r\n<li>Blog Page</li>\r\n<li>Particular Blog View</li>\r\n</ul>\r\n<p>&nbsp;</p>', '<p>personal portfolio, service, and bloging web site design and development by &lt;a href=\"www.mithunrana.com\"&gt;mithun rana&lt;/a&gt; . this website user can publish portfolio, service, and blog and it can do marketing this service portfolio and blog . more user can do linkbuilding user social account.</p>\r\n<h3><span style=\"text-decoration: underline;\"><strong>The Web site Admin Side feature</strong></span></h3>\r\n<p><span style=\"text-decoration: underline;\">Admin Panel</span></p>\r\n<section class=\"row\">\r\n<section class=\"col-sm-6\">\r\n<p>1. Add Gallery Image</p>\r\n<p>2. Delete Gallery Image</p>\r\n<p>3. Full Image manage with databse normalization</p>\r\n<p>4. Blog Add</p>\r\n<p>5. Manage Blog</p>\r\n</section>\r\n<section class=\"col-sm-6\">\r\n<p>6. Service Add</p>\r\n<p>7. Service Manage</p>\r\n<p>8. Portfolio Add</p>\r\n<p>9. Portfolio Manage</p>\r\n<p>10.User Can Delete Portfolio, service, Blog Tutorial&nbsp;</p>\r\n</section>\r\n</section>', 1, '2020-01-15 05:38:13', '2020-01-17 08:56:55'),
(5, 'HIKVISION BANGLADESH SEO WORK', 'SEO  FOR HIKVISION BANGLADESH | Development By Mithun Rana', 'hikvision-bangladesh-seo-work', 3, 35, 'seo, hikvision bangladesh, who develop hikvision bangladesh website, hikvision cctv camera, who do seo of hikvision bangladesh website', 'seo, hikvision bangladesh, who develop hikvision bangladesh website, hikvision cctv camera, who do seo of hikvision bangladesh website', 'SEO WORK FOR HIKVISION BANGLADESH', 'SEO WORK OF  HIKVISION BANGLADESH', '<p>It is important that your site can advertise your item or administration successfully. Our SEO mentors are experienced experts of the internet advertising industry. They are equipped for guaranteeing a strong stage by offering courses which spread the best of computerized advertising aptitudes. Our group of coaches easily covers the intricate details of SEO through an exhaustive scope of instructional classes in Bangladesh.</p>\r\n<p>&nbsp;</p>', '<p>Search Engine Optimization(SEO) is the way toward upgrading the perceivability of an individual site or site page. This is accomplished for mainstream web crawlers, primarily Google. The procedure is included natural indexed lists for focused catchphrases. To just express, the regular and unpaid strategy for seeking after this is alluded to as natural.</p>\r\n<h2>For This Site My SEO Working Feature:</h2>\r\n<ul>\r\n<li>Website Setup (Full)</li>\r\n<li>Basic WordPress</li>\r\n<li>AMP Setup (Full)</li>\r\n<li>WP Recommended Plugins</li>\r\n<li>FREE SSL Setup</li>\r\n<li>Get Free Images From Shutterstock</li>\r\n<li>Page Speed SEO</li>\r\n<li>Content Strategy Development</li>\r\n<li>Content Writing Formula</li>\r\n<li>Find Contents For Free</li>\r\n<li>On Page SEO (Full)</li>\r\n<li>SEO Audit</li>\r\n<li>Schema Tags/Rich Cards (Manual Code &amp; Plugins)</li>\r\n<li>Link Building (26+ SEO Link Building Methods)</li>\r\n<li>More link building videos are being added monthly!</li>\r\n<li>Google&rsquo;s Algorithm Updates</li>\r\n<li>Unnatural Link Penalty (25th Dec, 2017)</li>\r\n<li>&ndash; Researching Keywords (Revenue Potential,</li>\r\n<li>&ndash; Competitor Analysis)</li>\r\n<li>&ndash; Picking a Niche (keeping future in mind)</li>\r\n<li>&ndash; Selecting a Domain</li>\r\n<li>&ndash; Buying Hosting &amp; Setting Up</li>\r\n<li>&ndash; Designing The Site</li>\r\n<li>&ndash; Buying/Review Content Planning</li>\r\n<li>&ndash; Info Content Planning</li>\r\n<li>&ndash; Content Publishing</li>\r\n<li>&ndash; Linking To Amazon</li>\r\n<li>&ndash; On Page SEO</li>\r\n<li>&ndash; Link Building</li>\r\n<li>&ndash; Ranking the site</li>\r\n<li>&ndash; Selling the Amazon Affiliate site</li>\r\n<li>Monthly Live SEO Webinar (Check our SEO Webinars for FREE)</li>\r\n</ul>', 1, '2020-01-15 05:52:19', '2020-01-17 09:18:20'),
(6, 'Soshine Marketing Company Website SEO', 'Soshine Marketing Company Website SEO | Mithun Rana', 'soshine-marketing-company-website-seo', 3, 33, 'soshine marketing company, seo, search engine optimization, soshine marketing company website seo', 'mithun rana provide seo service of soshine marketing company soshine marketing company, seo, search engine optimization, soshine marketing company website seo', 'seo of soshine marketing company', 'seo of soshine marketing company', '<p>It is important that your site can advertise your item or administration successfully. Our SEO mentors are experienced experts of the internet advertising industry. They are equipped for guaranteeing a strong stage by offering courses which spread the best of computerized advertising aptitudes. Our group of coaches easily covers the intricate details of SEO through an exhaustive scope of instructional classes in Bangladesh.</p>', '<p>Search Engine Optimization(SEO) is the way toward upgrading the perceivability of an individual site or site page. This is accomplished for mainstream web crawlers, primarily Google. The procedure is included natural indexed lists for focused catchphrases. To just express, the regular and unpaid strategy for seeking after this is alluded to as natural.</p>\r\n<h2>For This Site My SEO Working Feature:</h2>\r\n<ul>\r\n<li>Website Setup (Full)</li>\r\n<li>Basic WordPress</li>\r\n<li>AMP Setup (Full)</li>\r\n<li>WP Recommended Plugins</li>\r\n<li>FREE SSL Setup</li>\r\n<li>Get Free Images From Shutterstock</li>\r\n<li>Page Speed SEO</li>\r\n<li>Content Strategy Development</li>\r\n<li>Content Writing Formula</li>\r\n<li>Find Contents For Free</li>\r\n<li>On Page SEO (Full)</li>\r\n<li>SEO Audit</li>\r\n<li>Schema Tags/Rich Cards (Manual Code &amp; Plugins)</li>\r\n<li>Link Building (26+ SEO Link Building Methods)</li>\r\n<li>More link building videos are being added monthly!</li>\r\n<li>Google&rsquo;s Algorithm Updates</li>\r\n<li>Unnatural Link Penalty (25th Dec, 2017)</li>\r\n<li>&ndash; Researching Keywords (Revenue Potential,</li>\r\n<li>&ndash; Competitor Analysis)</li>\r\n<li>&ndash; Picking a Niche (keeping future in mind)</li>\r\n<li>&ndash; Selecting a Domain</li>\r\n<li>&ndash; Buying Hosting &amp; Setting Up</li>\r\n<li>&ndash; Designing The Site</li>\r\n<li>&ndash; Buying/Review Content Planning</li>\r\n<li>&ndash; Info Content Planning</li>\r\n<li>&ndash; Content Publishing</li>\r\n<li>&ndash; Linking To Amazon</li>\r\n<li>&ndash; On Page SEO</li>\r\n<li>&ndash; Link Building</li>\r\n<li>&ndash; Ranking the site</li>\r\n<li>&ndash; Selling the Amazon Affiliate site</li>\r\n<li>Monthly Live SEO Webinar (Check our SEO Webinars for FREE)</li>\r\n</ul>', 1, '2020-01-15 06:06:03', '2020-01-17 09:33:34'),
(7, 'AVTECH CCTV CAMERA BRANDING DESIGN', 'AVTECH CCTV CAMERA BRANDING DESIGN | MITHUN RANA', 'avtech-cctv-camera-branding-design', 2, 38, 'graphics design, avtech cctv camera , mithun rana, avtech cctv graphics design, software enginner mithun rana', 'graphics design, avtech cctv camera , mithun rana, avtech cctv graphics design, software enginner mithun rana', 'Graphics Design', 'mithun rana graphics design', '<p>This is design for avtech cctv camera boost post campaign.&nbsp;</p>', '', 1, '2020-01-15 06:20:39', '2020-01-17 09:42:19'),
(8, 'AVTECH CCTV CAMERA DESIGN', 'AVTECH CCTV CAMERA DESIGN | MITHUN RANA', 'avtech-cctv-camera-design', 2, 39, 'avtech cctv camera, avtech, avtech ip camera, avtech hd camera, ccctv camera price', 'avtech cctv camera design by mithun rana, avtech cctv camera avtech, avtech ip camera, avtech hd camera, ccctv camera price', 'avtech cctv camera', 'avtech cctv camera', '<p>this is avtech cctv camera branding design for facebook boost post campaign</p>', '<p>this is avtech cctv camera branding design for facebook boost post campaign</p>', 1, '2020-01-15 06:47:19', '2020-01-17 09:43:20'),
(9, 'AVTECH HAPPY NEW YEAR BRANDING DESIGN', 'AVTECH HAPPY NEW YEAR DESIGN | MITHUN RANA', 'avtech-happy-new-year-design', 2, 37, 'avtech, happy new year design, avtech related happy new year design, avtech cctv camera', 'avtech cctv branding happy new year design by mithun rana, avtech, happy new year design, avtech related happy new year design, avtech cctv camera', 'avtech cctv camera happy new year design', 'avtech cctv camera happy new year design', '<p>avtech cctv branding happy new year design by mithun rana, avtech, happy new year design, avtech related happy new year design, avtech cctv camera</p>', '<p>avtech cctv branding happy new year design by mithun rana, avtech, happy new year design, avtech related happy new year design, avtech cctv camera</p>', 1, '2020-01-15 07:08:54', '2020-01-15 07:09:02');

-- --------------------------------------------------------

--
-- Table structure for table `portfolio_categories`
--

CREATE TABLE `portfolio_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `CategoryName` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `CategoryUrl` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `CategorySeoKeyword` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `CategorySeoDescription` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `CategoryBrowserTitle` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `portfolio_categories`
--

INSERT INTO `portfolio_categories` (`id`, `CategoryName`, `CategoryUrl`, `CategorySeoKeyword`, `CategorySeoDescription`, `CategoryBrowserTitle`, `created_at`, `updated_at`) VALUES
(1, 'Web Development', 'web-development', 'web development, web development project, php website free download, mithun rana web development portfolio, mithun rana project list', 'here is web development project list of mithun rana. mithun rana compleated website list. mithun rana compleated ERP software. this is my web design web development project list', 'Mithun Rana Web Development Project List', '2020-01-14 23:49:04', '2020-01-14 23:49:04'),
(2, 'Graphics Design', 'graphics-design-mithun-rana-project', 'graphics design, creative design, graphic design examples, graphic design career, graphic design online, graphic design salary, graphic design website', 'mithun rana graphics design project list, mithun rana graphics design portfolio, mithun rana graphics design work', 'Graphics Design Mithun Rana Project', '2020-01-14 23:58:34', '2020-01-14 23:58:34'),
(3, 'SEO', 'mithun-rana-seo-portfolio', 'Mithun Rana, seo , search engine optimization, what is search engine optimization, mithun rana search engine optimization work', 'Mithun Rana, seo , search engine optimization, what is search engine optimization, mithun rana search engine optimization work', 'Mithun Rana SEO Work Portfolio', '2020-01-15 00:01:10', '2020-01-15 00:01:10');

-- --------------------------------------------------------

--
-- Table structure for table `qualifications`
--

CREATE TABLE `qualifications` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `Degree` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Session` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Result` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Active_Status` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `qualifications`
--

INSERT INTO `qualifications` (`id`, `Degree`, `Session`, `Result`, `Active_Status`, `created_at`, `updated_at`) VALUES
(1, 'Junior School Certificate', '2012', 'Result Don\'t Know', 1, '2020-01-14 07:00:33', '2020-01-14 23:18:33'),
(2, 'Diploma In Engineering', '2014-2018', '3.67', 1, '2020-01-14 07:01:02', '2020-01-14 23:18:49'),
(3, 'Secondary School Certificate', '2013-2014', '4.56(out of 5.00)', 1, '2020-01-14 23:19:51', '2020-01-14 23:19:53'),
(4, 'Certify Programing In HTML5 Java script And CSS3', '19 January 2018 - 19 April 2018', '4.00 (Out of 4.00)', 1, '2020-01-14 23:25:18', '2020-01-14 23:25:22'),
(5, 'Web Application Development Dot NET', '07/03/2018 - 07/06/2018', 'First Class', 1, '2020-01-14 23:27:34', '2020-01-14 23:27:36'),
(6, 'Web Application Development PHP(with Laravel)', '2019 - 2019', 'First Class', 1, '2020-01-14 23:29:14', '2020-01-14 23:29:19'),
(7, 'Web Application Development PHP(with Codeigniter)', '19 January 2018 - 19 April 2018', 'First Class', 1, '2020-01-14 23:30:08', '2020-01-14 23:30:12');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `service_title` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `BrowserTitle` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `permalink` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `featured_image` int(11) NOT NULL,
  `ServiceIcon` int(11) NOT NULL,
  `SeoKeyword` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `SeoDescription` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `FeaturedImageAltText` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `FeaturedImageTitleText` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `MainContent` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `OpenContent` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `Active_Status` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `service_title`, `BrowserTitle`, `permalink`, `featured_image`, `ServiceIcon`, `SeoKeyword`, `SeoDescription`, `FeaturedImageAltText`, `FeaturedImageTitleText`, `MainContent`, `OpenContent`, `Active_Status`, `created_at`, `updated_at`) VALUES
(1, 'Web Design', 'Web Design Service Provider Company Bangladesh | Mithun Rana', 'web-design-service-provider-company-bangladesh', 22, 29, 'web design, web design service provider company bangladesh, mithun rana, web designer , software engineer mithun rana', 'web design, web design service provider company bangladesh, mithun rana, web designer , software engineer mithun rana', 'Web Design', 'web design', 'Website development is our main service at Tech Help Info. We are one of the leading website development company in Bangladesh since 2014, Our customers are not only from Bangladesh, we have global client like india, bangladesh, china, usa etc. So if you are thinking a world class website design & functional website development (Tech Help Info) is the best web site design and development company in bangladesh is your one stop solution.\r\n\r\nEach impression checks with regards to catching clients on the web. Presently like never before, your online picture is basic to the accomplishment of your business. An extravagant plan isn\'t sufficient for your webpage now a days clients are requesting sites that are easy to understand, useful, appealing, and available just as receptive to all gadgets.', '<h1>Web Development Service Provider Company Bangladesh</h1>\r\n<p style=\"font-size: 19px;\">There is no disarray that &lt;a href=\"https://www.techhelpinfo.com\"&gt;Tech Help Info&lt;/a&gt; is the best Web Design organization in Bangladesh. We have confidence in QUALITY and on time convey your task. In the in the mean time have done numerous nearby and universal site with great notoriety. We likewise in great site improvement and enormous size of web application for your business arrangement!</p>\r\n<p style=\"font-size: 19px;\">&lt;a href=\"https://www.techhelpinfo.com\"&gt;Tech Help Info&lt;/a&gt; is Website Development Company in Bangladesh. Our Specialist is Static, Dynamic Website Development (Web Application Development, E-Commerce Solution, Large Scale of Web Application like ERP) and Wordpres, Joomla, Cakephp, Codeigniter, PHP, MYSQL, Jave,, Magento, HTML5, CSS3 and responsive and SEO Friendly Website Development in Bangladesh and everywhere throughout the world. &lt;a href=\"https://www.techhelpinfo.com\"&gt;Tech Help Info&lt;/a&gt; is best Website Design and Development Company in Bangladesh. We have high talented expert Website Design group who can serve the best and world class quality web composition and web application arrangements inside a brief timeframe for your business site. Our remarkable web composition and improvement expert can give the definite work what you need to work for your business and can convey on schedule. We are the best Web plan and advancement organization in the Bangladesh and south Asia as well. We have done loads of value site in USA, CANADA, AUSTRALIA, UK, SINGAPORE, FRANCE and numerous different nations everywhere throughout the world. We constantly dedicated to our customers to serve the quality assistance on schedule. If you don\'t mind visit our portfolio to see quality web architecture. You are constantly free to take our support of maintain your business easily all around.</p>\r\n<h2><span style=\"text-decoration: underline;\">Feature OF Web Design</span></h2>\r\n<h3>2.&nbsp;Clear, User-friendly Navigation.</h3>\r\n<h3>1.&nbsp;Quality Web Content.</h3>\r\n<h3>3.&nbsp;Simple and Professional Web Design.</h3>\r\n<h3>4. Webpage Speed.&nbsp;</h3>\r\n<h3>5.&nbsp;Search Engine Optimization.</h3>\r\n<h3>6.&nbsp;Web Compatibility.</h3>', 1, '2020-01-15 07:30:47', '2020-01-19 12:33:02'),
(2, 'Web Development', 'Web Development Service Provider Company Bangladesh | Mithun Rana', '#', 23, 30, 'Web Development Service Provider Company Bangladesh, web development', 'Web Development Service Provider Company Bangladesh, web development', 'web development', 'web development', 'we provide best custom software and web applicaiton development service in bangladesh. We build them with care and strong belief in agile approach.', '<p>Web Development Service Provider Company Bangladesh, web development</p>', 1, '2020-01-15 07:51:47', '2020-01-20 01:30:22'),
(3, 'SEO', 'SEO Service Provider Company Bangladesh | Mithun Rana', '#', 20, 27, 'seo, SEO Service Provider Company Bangladesh , mithun rana, seo expert in bangladesh', 'seo, SEO Service Provider Company Bangladesh , mithun rana, seo expert in bangladesh', 'SEP', 'SEO search engine optimization', 'we are the best search engine optimization(SEO) service provider in bangladesh, we provide world wide and local seo service', '<p>seo, SEO Service Provider Company Bangladesh , mithun rana, seo expert in bangladesh</p>', 1, '2020-01-15 07:58:19', '2020-01-20 01:32:09'),
(4, 'Digital marketing', 'Digital Marketing Service Provider Company Bangladesh | Mithun Rana', '#', 24, 25, 'Digital Marketing Service Provider Company Bangladesh, digital marketing, mithun rana software engineer mithun rana', 'software engineer mithun rana provide digital marketing service in bangladesh', 'Digital Marketing', 'Digital Marketing', 'In this time digital marketing is the best way for grow business or any service, and we provide best digital marketing service', '<p>software engineer mithun rana provide digital marketing service in bangladesh</p>', 1, '2020-01-15 08:10:42', '2020-01-20 01:33:25'),
(5, 'Graphics Design', 'Graphics Design Service Provider Company Bangladesh | Mithun Rana', '#', 19, 26, 'Graphics Design, Graphics Design Service Provider Company Bangladesh, mithun rana, software engineer mithun rana', 'mithun rana provide graphics design service in bangladesh, Graphics Design, Graphics Design Service Provider Company Bangladesh, mithun rana, software engineer mithun rana', 'Graphics Design', 'Graphics Design', 'first impression is the best impression so graphics design is the main element of impression and we provide best graphics design service in bangladesh', '<p>Graphics Design, Graphics Design Service Provider Company Bangladesh, mithun rana, software engineer mithun rana</p>', 1, '2020-01-15 08:21:12', '2020-01-20 01:35:10'),
(6, 'Video Animation', 'Video Editing Service Provider Company In Bangladesh | Mithun Rana', '#', 21, 28, 'Video Editing Service Provider Company In Bangladesh | Mithun Rana', 'Video Editing Service Provider Company In Bangladesh | Mithun Rana', 'Video Editing', 'Video Editing', 'web provide video editing and video animation service in bangladesh.', '<p>Video Editing Service Provider Company In Bangladesh | Mithun Rana</p>', 1, '2020-01-15 08:41:47', '2020-01-20 01:36:10');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'mithunrana.developer@gmail.com', 'mithunrana.developer@gmail.com', NULL, '$2y$10$ZIdT9GLgGkEFDatMARjwguRG.k8LKciX/UH6V2yhsC7YlRxct.wPO', NULL, '2020-01-17 13:10:49', '2020-01-20 04:07:56');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about_profiles`
--
ALTER TABLE `about_profiles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `expertnesses`
--
ALTER TABLE `expertnesses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `galleries`
--
ALTER TABLE `galleries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `portfolios`
--
ALTER TABLE `portfolios`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `portfolio_categories`
--
ALTER TABLE `portfolio_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `qualifications`
--
ALTER TABLE `qualifications`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
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
-- AUTO_INCREMENT for table `about_profiles`
--
ALTER TABLE `about_profiles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `expertnesses`
--
ALTER TABLE `expertnesses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `galleries`
--
ALTER TABLE `galleries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `portfolios`
--
ALTER TABLE `portfolios`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `portfolio_categories`
--
ALTER TABLE `portfolio_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `qualifications`
--
ALTER TABLE `qualifications`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
