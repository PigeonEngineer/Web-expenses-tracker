-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: May 13, 2018 at 12:28 PM
-- Server version: 5.7.21
-- PHP Version: 5.6.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `web-tracker-db`
--

-- --------------------------------------------------------

--
-- Table structure for table `budgets`
--

DROP TABLE IF EXISTS `budgets`;
CREATE TABLE IF NOT EXISTS `budgets` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fromDateTime` datetime(6) DEFAULT NULL,
  `ToDateTime` datetime(6) DEFAULT NULL,
  `amount` decimal(19,4) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=26 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `budgets`
--

INSERT INTO `budgets` (`id`, `fromDateTime`, `ToDateTime`, `amount`) VALUES
(1, '2005-04-30 07:27:39.000000', '2011-04-30 07:27:39.000000', '100.0000'),
(2, '2000-04-30 07:27:39.000000', '2001-04-30 07:27:39.000000', '5000.0000'),
(3, '2001-04-30 07:27:39.000000', '2002-04-30 07:27:39.000000', '5020.0000'),
(4, '2002-04-30 07:27:39.000000', '2003-04-30 07:27:39.000000', '5003.0000'),
(5, '2009-04-30 07:27:39.000000', '2010-04-30 07:27:39.000000', '50.0000'),
(6, '2005-04-30 07:27:39.000000', '2011-04-30 07:27:39.000000', '100.0000'),
(7, '2000-04-30 07:27:39.000000', '2001-04-30 07:27:39.000000', '5000.0000'),
(8, '2001-04-30 07:27:39.000000', '2002-04-30 07:27:39.000000', '5020.0000'),
(9, '2002-04-30 07:27:39.000000', '2003-04-30 07:27:39.000000', '5003.0000'),
(10, '2009-04-30 07:27:39.000000', '2010-04-30 07:27:39.000000', '50.0000'),
(11, '2005-04-30 07:27:39.000000', '2011-04-30 07:27:39.000000', '100.0000'),
(12, '2000-04-30 07:27:39.000000', '2001-04-30 07:27:39.000000', '5000.0000'),
(13, '2001-04-30 07:27:39.000000', '2002-04-30 07:27:39.000000', '5020.0000'),
(14, '2002-04-30 07:27:39.000000', '2003-04-30 07:27:39.000000', '5003.0000'),
(15, '2009-04-30 07:27:39.000000', '2010-04-30 07:27:39.000000', '50.0000'),
(16, '2005-04-30 07:27:39.000000', '2011-04-30 07:27:39.000000', '100.0000'),
(17, '2000-04-30 07:27:39.000000', '2001-04-30 07:27:39.000000', '5000.0000'),
(18, '2001-04-30 07:27:39.000000', '2002-04-30 07:27:39.000000', '5020.0000'),
(19, '2002-04-30 07:27:39.000000', '2003-04-30 07:27:39.000000', '5003.0000'),
(20, '2009-04-30 07:27:39.000000', '2010-04-30 07:27:39.000000', '50.0000'),
(21, '2005-04-30 07:27:39.000000', '2011-04-30 07:27:39.000000', '100.0000'),
(22, '2000-04-30 07:27:39.000000', '2001-04-30 07:27:39.000000', '5000.0000'),
(23, '2001-04-30 07:27:39.000000', '2002-04-30 07:27:39.000000', '5020.0000'),
(24, '2002-04-30 07:27:39.000000', '2003-04-30 07:27:39.000000', '5003.0000'),
(25, '2009-04-30 07:27:39.000000', '2010-04-30 07:27:39.000000', '50.0000');

-- --------------------------------------------------------

--
-- Table structure for table `categorys`
--

DROP TABLE IF EXISTS `categorys`;
CREATE TABLE IF NOT EXISTS `categorys` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=26 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categorys`
--

INSERT INTO `categorys` (`id`, `name`) VALUES
(1, 'Work expense'),
(2, 'Footbal'),
(3, 'Food and stuff'),
(4, 'Entertainment'),
(5, 'Unrelated'),
(6, 'Work expense'),
(7, 'Footbal'),
(8, 'Food and stuff'),
(9, 'Entertainment'),
(10, 'Unrelated'),
(11, 'Work expense'),
(12, 'Footbal'),
(13, 'Food and stuff'),
(14, 'Entertainment'),
(15, 'Unrelated'),
(16, 'Work expense'),
(17, 'Footbal'),
(18, 'Food and stuff'),
(19, 'Entertainment'),
(20, 'Unrelated'),
(21, 'Work expense'),
(22, 'Footbal'),
(23, 'Food and stuff'),
(24, 'Entertainment'),
(25, 'Unrelated');

-- --------------------------------------------------------

--
-- Table structure for table `categorys_budgets`
--

DROP TABLE IF EXISTS `categorys_budgets`;
CREATE TABLE IF NOT EXISTS `categorys_budgets` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `budgets_id` int(11) DEFAULT NULL,
  `categorys_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `budgets_id` (`budgets_id`),
  KEY `categorys_id` (`categorys_id`)
) ENGINE=MyISAM AUTO_INCREMENT=26 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categorys_budgets`
--

INSERT INTO `categorys_budgets` (`id`, `budgets_id`, `categorys_id`) VALUES
(1, 1, 2),
(2, 2, 3),
(3, 3, 1),
(4, 4, 1),
(5, 5, 4),
(6, 1, 2),
(7, 2, 3),
(8, 3, 1),
(9, 4, 1),
(10, 5, 4),
(11, 1, 2),
(12, 2, 3),
(13, 3, 1),
(14, 4, 1),
(15, 5, 4),
(16, 1, 2),
(17, 2, 3),
(18, 3, 1),
(19, 4, 1),
(20, 5, 4),
(21, 1, 2),
(22, 2, 3),
(23, 3, 1),
(24, 4, 1),
(25, 5, 4);

-- --------------------------------------------------------

--
-- Table structure for table `expenses`
--

DROP TABLE IF EXISTS `expenses`;
CREATE TABLE IF NOT EXISTS `expenses` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `categorys_id` int(11) DEFAULT NULL,
  `creationTimeStamp` datetime(6) DEFAULT NULL,
  `amount` decimal(19,4) DEFAULT NULL,
  `comments` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `categorys_id` (`categorys_id`)
) ENGINE=MyISAM AUTO_INCREMENT=36 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `expenses`
--

INSERT INTO `expenses` (`id`, `categorys_id`, `creationTimeStamp`, `amount`, `comments`) VALUES
(1, 1, '2000-04-30 07:27:39.000000', '50.0000', 'bought license for software'),
(2, 2, '2000-04-30 07:27:39.000000', '10.0000', 'bought football'),
(3, 3, '2000-04-30 07:27:39.000000', '40.0000', 'bought food and stuff'),
(4, 4, '2000-04-30 07:27:39.000000', '500.0000', 'bought a boat'),
(5, 5, '2000-04-30 07:27:39.000000', '1000000.0000', 'gave out a small loan'),
(6, 1, '2000-04-30 07:27:39.000000', '50.0000', 'bought license for software'),
(7, 2, '2000-04-30 07:27:39.000000', '10.0000', 'bought football'),
(8, 3, '2000-04-30 07:27:39.000000', '40.0000', 'bought food and stuff'),
(9, 4, '2000-04-30 07:27:39.000000', '500.0000', 'bought a boat'),
(10, 5, '2000-04-30 07:27:39.000000', '1000000.0000', 'gave out a small loan'),
(11, 1, '2000-04-30 07:27:39.000000', '50.0000', 'bought license for software'),
(12, 2, '2000-04-30 07:27:39.000000', '10.0000', 'bought football'),
(13, 3, '2000-04-30 07:27:39.000000', '40.0000', 'bought food and stuff'),
(14, 4, '2000-04-30 07:27:39.000000', '500.0000', 'bought a boat'),
(15, 5, '2000-04-30 07:27:39.000000', '1000000.0000', 'gave out a small loan'),
(16, 1, '2000-04-30 07:27:39.000000', '50.0000', 'bought license for software'),
(17, 2, '2000-04-30 07:27:39.000000', '10.0000', 'bought football'),
(18, 3, '2000-04-30 07:27:39.000000', '40.0000', 'bought food and stuff'),
(19, 4, '2000-04-30 07:27:39.000000', '500.0000', 'bought a boat'),
(20, 5, '2000-04-30 07:27:39.000000', '1000000.0000', 'gave out a small loan'),
(21, 1, '2000-04-30 07:27:39.000000', '50.0000', 'bought license for software'),
(22, 2, '2000-04-30 07:27:39.000000', '10.0000', 'bought football'),
(23, 3, '2000-04-30 07:27:39.000000', '40.0000', 'bought food and stuff'),
(24, 4, '2000-04-30 07:27:39.000000', '500.0000', 'bought a boat'),
(25, 5, '2000-04-30 07:27:39.000000', '1000000.0000', 'gave out a small loan'),
(26, 1, '2000-04-30 07:27:39.000000', '50.0000', 'bought license for software'),
(27, 2, '2000-04-30 07:27:39.000000', '10.0000', 'bought football'),
(28, 3, '2000-04-30 07:27:39.000000', '40.0000', 'bought food and stuff'),
(29, 4, '2000-04-30 07:27:39.000000', '500.0000', 'bought a boat'),
(30, 5, '2000-04-30 07:27:39.000000', '1000000.0000', 'gave out a small loan1'),
(31, 5, '2001-04-30 07:27:39.000000', '1000000.0000', 'gave out a small loan2'),
(32, 4, '2000-01-30 07:27:39.000000', '1000000.0000', 'gave out a small loan3'),
(33, 4, '2000-01-30 07:27:39.000000', '1000000.0000', 'gave out a small loan4'),
(34, 4, '2000-01-30 07:27:39.000000', '1000000.0000', 'gave out a small loan5'),
(35, 5, '2000-04-30 07:27:39.000000', '1000000.0000', 'omgwtfbbq');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

DROP TABLE IF EXISTS `settings`;
CREATE TABLE IF NOT EXISTS `settings` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `users_id` int(11) DEFAULT NULL,
  `categoryCount` int(11) DEFAULT NULL,
  `mainColour` varchar(10) DEFAULT NULL,
  `mainStyle` varchar(10) DEFAULT NULL,
  `notificationPreference` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `users_id` (`users_id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `users_id`, `categoryCount`, `mainColour`, `mainStyle`, `notificationPreference`) VALUES
(1, 1, 6, 'white', 'a-style', 0),
(2, 2, 16, 'red', 'l-style', 1),
(3, 3, 2, 'blue', 'c-style', 2),
(4, 4, 4, 'white', 'b-style', 2),
(5, 5, 6, 'red', 'x-style', 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` enum('F','M','O') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `age` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `gender`, `password`, `remember_token`, `created_at`, `updated_at`, `age`) VALUES
(1, 'spam.misans@gmail.com', 'spam.misans@gmail.com', NULL, '$2y$10$oJ9FrhmeEI.okw9PgtGwJuZSZBMTkLcKSibxBnmHDy5M9pO52qIsC', NULL, '2018-05-05 09:41:00', '2018-05-05 09:41:00', NULL),
(2, 'test', 'test@test.com', NULL, '$2y$10$mbZ5eFmXJsuLFFtwDqvJt.GO/a5nKOZj3d1aQE2UtJX9ZM3UzXmly', NULL, '2018-05-13 06:02:22', '2018-05-13 06:02:22', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users_categorys`
--

DROP TABLE IF EXISTS `users_categorys`;
CREATE TABLE IF NOT EXISTS `users_categorys` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `users_id` int(11) DEFAULT NULL,
  `categorys_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `categorys_id` (`categorys_id`),
  KEY `users_id` (`users_id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users_categorys`
--

INSERT INTO `users_categorys` (`id`, `users_id`, `categorys_id`) VALUES
(1, 1, 1),
(2, 1, 2),
(3, 1, 3),
(4, 1, 4),
(5, 1, 5),
(6, 2, 5),
(7, 3, 1),
(8, 3, 3),
(9, 2, 2),
(10, 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `users_expenses`
--

DROP TABLE IF EXISTS `users_expenses`;
CREATE TABLE IF NOT EXISTS `users_expenses` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `expenses_id` int(11) DEFAULT NULL,
  `users_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `expenses_id` (`expenses_id`),
  KEY `users_id` (`users_id`)
) ENGINE=MyISAM AUTO_INCREMENT=36 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users_expenses`
--

INSERT INTO `users_expenses` (`id`, `expenses_id`, `users_id`) VALUES
(1, 1, 1),
(2, 2, 1),
(3, 3, 3),
(4, 4, 4),
(5, 5, 5),
(6, 1, 1),
(7, 2, 1),
(8, 3, 3),
(9, 4, 4),
(10, 5, 5),
(11, 1, 1),
(12, 2, 1),
(13, 3, 3),
(14, 4, 4),
(15, 5, 5),
(16, 1, 1),
(17, 2, 1),
(18, 3, 3),
(19, 4, 4),
(20, 5, 5),
(21, 1, 1),
(22, 2, 1),
(23, 3, 3),
(24, 4, 4),
(25, 5, 5),
(26, 1, 2),
(27, 2, 2),
(28, 3, 2),
(29, 4, 2),
(30, 5, 2),
(31, 6, 2),
(32, 7, 2),
(33, 8, 2),
(34, 9, 2),
(35, 10, 2);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
