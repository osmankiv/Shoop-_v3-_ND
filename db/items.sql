-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: 15 مايو 2024 الساعة 07:45
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
-- بنية الجدول `items`
--

DROP TABLE IF EXISTS `items`;
CREATE TABLE IF NOT EXISTS `items` (
  `id` int NOT NULL,
  `heading` text NOT NULL,
  `details` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci,
  `price` double NOT NULL,
  `image0` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `linkOfImge` text CHARACTER SET utf8mb4 COLLATE utf8mb4_zh_0900_as_cs,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`),
  KEY `id_2` (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- إرجاع أو استيراد بيانات الجدول `items`
--

INSERT INTO `items` (`id`, `heading`, `details`, `price`, `image0`, `linkOfImge`) VALUES
(1, 'facebook', 'i have good expreites ', 400, 'imgs/5296500_fb_social media_facebook_facebook logo_social network_icon.png', ''),
(2, 'githube', 'i have good expreites ', 2334, 'imgs/291716_github_logo_social network_social_icon.png', ''),
(3, 'abdo', 'is donce', 0, 'imgs/self-control.png', ''),
(4, 'SuperMalik', 'i have good expreites ', 400, 'imgs/label.png', ''),
(5, 'instegram', 'i have good expreites ', 400, 'imgs/5296765_camera_instagram_instagram logo_icon.png', ''),
(6, 'phoen num', 'Beste Design till date.<br>', 400, 'imgs/352510_local_phone_icon.png', ''),
(7, 'bag', 'black bage.', 400, 'imgs/market.png', ''),
(8, 'shanpo', 'i have good sup face and nice', 950, 'imgs/bottling.png', ''),
(9, 'factory disin', 'i have factory disin', 9852, 'imgs/factory.png', ''),
(10, 'factory disin', 'i have factory disin', 9852, 'imgs/factory.png', ''),
(11, 'blue teshert', 'new ma', 2000, 'imgs/skin-care.png', '');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
