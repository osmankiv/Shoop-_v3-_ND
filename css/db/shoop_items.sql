-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: 19 مايو 2024 الساعة 12:36
-- إصدار الخادم: 8.0.31
-- PHP Version: 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shoop items`
--

-- --------------------------------------------------------

--
-- بنية الجدول `food`
--

DROP TABLE IF EXISTS `food`;
CREATE TABLE IF NOT EXISTS `food` (
  `id` int NOT NULL AUTO_INCREMENT,
  `heading` text NOT NULL,
  `details` text NOT NULL,
  `price` int NOT NULL,
  `image0` text NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`),
  KEY `id_2` (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci PACK_KEYS=1;

--
-- إرجاع أو استيراد بيانات الجدول `food`
--

INSERT INTO `food` (`id`, `heading`, `details`, `price`, `image0`) VALUES
(5, 'github', '291716_github_logo_social network_social_icon', 98, 'server/291716_github_logo_social network_social_icon.png'),
(6, 'sda', 'ad', 234, 'server/Karu_Quad_Headset.png'),
(7, 'we', 'AS', 0, 'server/coffee-cup.png'),
(8, 'adasdsasd', 'asdaewqd', 231, 'server/market.png');

-- --------------------------------------------------------

--
-- بنية الجدول `items`
--

DROP TABLE IF EXISTS `items`;
CREATE TABLE IF NOT EXISTS `items` (
  `id` int NOT NULL AUTO_INCREMENT,
  `heading` text NOT NULL,
  `details` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci,
  `price` double NOT NULL,
  `image0` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`),
  KEY `id_2` (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 CHECKSUM=1 COLLATE=utf8mb4_0900_ai_ci DELAY_KEY_WRITE=1 PACK_KEYS=0;

--
-- إرجاع أو استيراد بيانات الجدول `items`
--

INSERT INTO `items` (`id`, `heading`, `details`, `price`, `image0`) VALUES
(1, 'coffee cup', 'we have good coffee', 5, 'server/coffee-cup.png'),
(2, 'bottling', 'we have bottling of sudan', 40, 'server/bottling.png'),
(3, 'w', 'w', 3, 'server/market (1).png'),
(4, 'q', 'q', 2, 'server/manager.png'),
(5, '[value-2]', '[value-3]', 0, '[value-5]'),
(6, '[value-2]', '[value-3]', 0, '[value-5]'),
(7, '4234', 'wrwe', 0, 'server/5296500_fb_social media_facebook_facebook logo_social network_icon.png'),
(8, '', '', 0, 'server/'),
(9, 'ddddddddddddddddddddddd', 'ddddddddddddddddd', 0, 'server/');

-- --------------------------------------------------------

--
-- بنية الجدول `smart`
--

DROP TABLE IF EXISTS `smart`;
CREATE TABLE IF NOT EXISTS `smart` (
  `id` int NOT NULL AUTO_INCREMENT,
  `heading` text NOT NULL,
  `details` text NOT NULL,
  `price` text NOT NULL,
  `image0` text NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- إرجاع أو استيراد بيانات الجدول `smart`
--

INSERT INTO `smart` (`id`, `heading`, `details`, `price`, `image0`) VALUES
(1, 'we', 'AS', 'sad', 'server/coffee-cup.png'),
(2, 'adasdsasd', 'asdaewqd', '231', 'server/market.png'),
(3, 'tbetet4', 'fsfdsf4', '4', 'server/manager.png');

-- --------------------------------------------------------

--
-- بنية الجدول `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id` int NOT NULL AUTO_INCREMENT,
  `user_name` text NOT NULL,
  `passwerd` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `gmail` text NOT NULL,
  `phone_number` int NOT NULL,
  `Gender` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `delverloction` text NOT NULL,
  `ipUser` text NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`),
  KEY `id_2` (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- إرجاع أو استيراد بيانات الجدول `user`
--

INSERT INTO `user` (`id`, `user_name`, `passwerd`, `gmail`, `phone_number`, `Gender`, `delverloction`, `ipUser`) VALUES
(9, 'osman', 'TWNgFFWhj2KGl11Cn90oSw==', 'singsan324@gamil.com', 999553493, 'Male ', 'natchnal', '101.44.23.1');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
