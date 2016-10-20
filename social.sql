-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 20, 2016 at 02:35 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `social`
--

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2016_09_26_042553_create_users_table', 1),
('2016_09_27_030705_create_posts_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(10) UNSIGNED NOT NULL,
  `body` text COLLATE utf8_unicode_ci NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `body`, `user_id`, `created_at`, `updated_at`) VALUES
(8, 'وهنا يكشف أوباما بوضوح أنه إذا لم يغيًر المسلمون نصوصهم الدينية فعليهم أن يتأقلموا مع الدكتاتوريات التى تحكمهم ، والتى ندعمها بالضرورة باعتبارأن ذلك أفضل خيار للحد من خطرالمسلمين الكونى حسب تعبيره .', 4, '2016-09-27 02:26:58', '2016-09-27 02:26:58'),
(9, 'My To Day Is Your Tomorrow', 4, '2016-09-27 02:27:39', '2016-09-28 04:18:27'),
(10, 'لاتُكثروا من الفَضْفضه....\r\nفأنتم لاتَدرون متى يخون المُنصتون', 4, '2016-09-27 02:28:01', '2016-09-27 02:28:01'),
(12, 'Mohamed zayed Mohamed', 4, '2016-09-27 23:47:55', '2016-10-19 22:34:57'),
(14, 'tata ana alaa yla\r\n', 5, '2016-09-27 23:55:51', '2016-09-27 23:55:51'),
(15, 'eslkrm', 5, '2016-09-28 00:38:01', '2016-09-28 00:38:01');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `frist_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `frist_name`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(4, 'mohamedzayed709@yahoo.com', 'Mohamed', '$2y$10$EM.LmEGS158VCU5.DybWG.gigjrP3keHW3EN0z483mg3aNfS7RARW', '1fmNyd7K9MHiOivs6Xrzw7JfaBW5GQ5QvbEH0aebR0gGSQi3wBkIco4IkVyL', '2016-09-26 04:16:35', '2016-09-28 04:22:43'),
(5, 'alaa@alaa.com', 'alaa', '$2y$10$Ki94DQpGlZb9m37n3euns.7HNWSQBX3QmNXPHkDLPuxCf07B5ZflG', 'COlmoPOyAWPdKsGXN2licD5qxQSQ3vjx9I6WyWUYmlaAiVLopry0waBEKbRE', '2016-09-27 23:55:06', '2016-09-28 00:46:55'),
(6, 'mohamedzayed7889@yahoo.com', '123123', '$2y$10$EM.LmEGS158VCU5.DybWG.gigjrP3keHW3EN0z483mg3aNfS7RARW', NULL, '2016-10-19 22:33:11', '2016-10-19 22:33:11');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
