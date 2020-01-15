-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 15, 2020 at 07:54 PM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mithun`
--

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
(1, 'Web Design', 'Web Design Service Provider Company Bangladesh | Mithun Rana', 'web-design-service-provider-company-bangladesh', 1, 13, 'web design, web design service provider company bangladesh, mithun rana, web designer , software engineer mithun rana', 'web design, web design service provider company bangladesh, mithun rana, web designer , software engineer mithun rana', 'Web Design', 'web design', 'Website development is our main service at Tech Help Info. We are one of the leading website development company in Bangladesh since 2014, Our customers are not only from Bangladesh, we have global client like india, bangladesh, china, usa etc. So if you are thinking a world class website design & functional website development (Tech Help Info) is the best web site design and development company in bangladesh is your one stop solution.\r\n\r\nEach impression checks with regards to catching clients on the web. Presently like never before, your online picture is basic to the accomplishment of your business. An extravagant plan isn\'t sufficient for your webpage now a days clients are requesting sites that are easy to understand, useful, appealing, and available just as receptive to all gadgets.', '<h1>Web Development Service Provider Company Bangladesh</h1>\r\n<p style=\"font-size: 19px;\">There is no disarray that &lt;a href=\"https://www.techhelpinfo.com\"&gt;Tech Help Info&lt;/a&gt; is the best Web Design organization in Bangladesh. We have confidence in QUALITY and on time convey your task. In the in the mean time have done numerous nearby and universal site with great notoriety. We likewise in great site improvement and enormous size of web application for your business arrangement!</p>\r\n<p style=\"font-size: 19px;\">&lt;a href=\"https://www.techhelpinfo.com\"&gt;Tech Help Info&lt;/a&gt; is Website Development Company in Bangladesh. Our Specialist is Static, Dynamic Website Development (Web Application Development, E-Commerce Solution, Large Scale of Web Application like ERP) and Wordpres, Joomla, Cakephp, Codeigniter, PHP, MYSQL, Jave,, Magento, HTML5, CSS3 and responsive and SEO Friendly Website Development in Bangladesh and everywhere throughout the world. &lt;a href=\"https://www.techhelpinfo.com\"&gt;Tech Help Info&lt;/a&gt; is best Website Design and Development Company in Bangladesh. We have high talented expert Website Design group who can serve the best and world class quality web composition and web application arrangements inside a brief timeframe for your business site. Our remarkable web composition and improvement expert can give the definite work what you need to work for your business and can convey on schedule. We are the best Web plan and advancement organization in the Bangladesh and south Asia as well. We have done loads of value site in USA, CANADA, AUSTRALIA, UK, SINGAPORE, FRANCE and numerous different nations everywhere throughout the world. We constantly dedicated to our customers to serve the quality assistance on schedule. If you don\'t mind visit our portfolio to see quality web architecture. You are constantly free to take our support of maintain your business easily all around.</p>\r\n<h2><span style=\"text-decoration: underline;\">Feature OF Web Design</span></h2>\r\n<h3>2.&nbsp;Clear, User-friendly Navigation.</h3>\r\n<h3>1.&nbsp;Quality Web Content.</h3>\r\n<h3>3.&nbsp;Simple and Professional Web Design.</h3>\r\n<h3>4. Webpage Speed.&nbsp;</h3>\r\n<h3>5.&nbsp;Search Engine Optimization.</h3>\r\n<h3>6.&nbsp;Web Compatibility.</h3>', 1, '2020-01-15 07:30:47', '2020-01-15 12:43:23'),
(2, 'Web Development', 'Web Development Service Provider Company Bangladesh | Mithun Rana', 'web-development-service-provider-company-bangladesh', 11, 14, 'Web Development Service Provider Company Bangladesh, web development', 'Web Development Service Provider Company Bangladesh, web development', 'web development', 'web development', 'Web Development Service Provider Company Bangladesh, web development', '<p>Web Development Service Provider Company Bangladesh, web development</p>', 1, '2020-01-15 07:51:47', '2020-01-15 07:51:50'),
(3, 'SEO', 'SEO Service Provider Company Bangladesh | Mithun Rana', 'seo-service-provider-company-bangladesh', 6, 15, 'seo, SEO Service Provider Company Bangladesh , mithun rana, seo expert in bangladesh', 'seo, SEO Service Provider Company Bangladesh , mithun rana, seo expert in bangladesh', 'SEP', 'SEO search engine optimization', 'seo, SEO Service Provider Company Bangladesh , mithun rana, seo expert in bangladesh', '<p>seo, SEO Service Provider Company Bangladesh , mithun rana, seo expert in bangladesh</p>', 1, '2020-01-15 07:58:19', '2020-01-15 11:22:04'),
(4, 'Digital marketing', 'Digital Marketing Service Provider Company Bangladesh | Mithun Rana', 'digital-marketing-service-provider-company-bangladesh', 6, 16, 'Digital Marketing Service Provider Company Bangladesh, digital marketing, mithun rana software engineer mithun rana', 'software engineer mithun rana provide digital marketing service in bangladesh', 'Digital Marketing', 'Digital Marketing', 'software engineer mithun rana provide digital marketing service in bangladesh', '<p>software engineer mithun rana provide digital marketing service in bangladesh</p>', 1, '2020-01-15 08:10:42', '2020-01-15 08:11:14'),
(5, 'Graphics Design', 'Graphics Design Service Provider Company Bangladesh | Mithun Rana', 'graphics-design-service-provider-company-bangladesh', 7, 17, 'Graphics Design, Graphics Design Service Provider Company Bangladesh, mithun rana, software engineer mithun rana', 'mithun rana provide graphics design service in bangladesh, Graphics Design, Graphics Design Service Provider Company Bangladesh, mithun rana, software engineer mithun rana', 'Graphics Design', 'Graphics Design', 'Graphics Design, Graphics Design Service Provider Company Bangladesh, mithun rana, software engineer mithun rana', '<p>Graphics Design, Graphics Design Service Provider Company Bangladesh, mithun rana, software engineer mithun rana</p>', 1, '2020-01-15 08:21:12', '2020-01-15 08:21:21'),
(6, 'Video Animation', 'Video Editing Service Provider Company In Bangladesh | Mithun Rana', 'video-editing-service-provider-company-bangladesh', 2, 18, 'Video Editing Service Provider Company In Bangladesh | Mithun Rana', 'Video Editing Service Provider Company In Bangladesh | Mithun Rana', 'Video Editing', 'Video Editing', 'Video Editing Service Provider Company In Bangladesh | Mithun Rana', '<p>Video Editing Service Provider Company In Bangladesh | Mithun Rana</p>', 1, '2020-01-15 08:41:47', '2020-01-15 11:27:37');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
