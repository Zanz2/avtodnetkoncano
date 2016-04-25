-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Gostitelj: 127.0.0.1
-- Čas nastanka: 25. apr 2016 ob 09.40
-- Različica strežnika: 5.5.47-0ubuntu0.14.04.1
-- Različica PHP: 5.5.9-1ubuntu4.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Zbirka podatkov: `projekt`
--

-- --------------------------------------------------------

--
-- Struktura tabele `images`
--

CREATE TABLE IF NOT EXISTS `images` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `order` int(5) NOT NULL DEFAULT '0',
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=14 ;

--
-- Odloži podatke za tabelo `images`
--

INSERT INTO `images` (`id`, `image`, `order`, `created`, `modified`, `status`) VALUES
(1, 'img1.jpg', 3, '2015-04-14 00:00:00', '2015-04-14 00:00:00', 1),
(2, 'img2.jpg', 6, '2015-04-14 00:00:00', '2015-04-14 00:00:00', 1),
(3, 'img3.jpg', 8, '2015-04-14 00:00:00', '2015-04-14 00:00:00', 1),
(4, 'img4.jpg', 11, '2015-04-14 00:00:00', '2015-04-14 00:00:00', 1),
(5, 'img5.jpg', 5, '2015-04-14 00:00:00', '2015-04-14 00:00:00', 1),
(6, 'img6.jpg', 9, '2015-04-14 00:00:00', '2015-04-14 00:00:00', 1),
(7, 'img7.jpg', 7, '2015-04-14 00:00:00', '2015-04-14 00:00:00', 1),
(8, 'img8.jpg', 13, '2015-04-14 00:00:00', '2015-04-14 00:00:00', 1),
(9, '_5617077587d3a.jpg', 12, '2016-04-24 17:09:28', '2016-04-24 17:09:28', 1),
(10, '_55e0f04fd03c2.jpg', 2, '2016-04-24 17:35:54', '2016-04-24 17:35:54', 1),
(11, 'databajs.jpg', 10, '2016-04-25 09:03:52', '2016-04-25 09:03:52', 1),
(12, 'najbolsidatabase.jpg', 1, '2016-04-25 09:31:37', '2016-04-25 09:31:37', 1),
(13, 'Neimenovano.jpg', 4, '2016-04-25 09:31:37', '2016-04-25 09:31:37', 1);

-- --------------------------------------------------------

--
-- Struktura tabele `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `uid` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(45) COLLATE utf8_slovenian_ci DEFAULT NULL,
  `password` varchar(100) COLLATE utf8_slovenian_ci DEFAULT NULL,
  `email` varchar(45) COLLATE utf8_slovenian_ci DEFAULT NULL,
  `profile_pic` varchar(150) COLLATE utf8_slovenian_ci DEFAULT NULL,
  `admin` varchar(20) COLLATE utf8_slovenian_ci DEFAULT NULL,
  `news` varchar(20) COLLATE utf8_slovenian_ci NOT NULL,
  PRIMARY KEY (`uid`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_slovenian_ci AUTO_INCREMENT=50 ;

--
-- Odloži podatke za tabelo `users`
--

INSERT INTO `users` (`uid`, `username`, `password`, `email`, `profile_pic`, `admin`, `news`) VALUES
(37, 'lan', '73f50c9f17291ce93ee52e50b73f6f63', 'lan', '20160329113402.jpg', NULL, ''),
(38, '1234', '81dc9bdb52d04dc20036dbd8313ed055', '1234', NULL, NULL, ''),
(39, 'zan0', '211340d1aab430caaadba78431c3e810', 'zanr512@gmail.com', NULL, '1', ''),
(40, '1234', 'fca0789e7891cbc0583298a238316122', '1234', NULL, NULL, ''),
(41, '12345', 'e347d981d19e6088b67f640ce48c4c32', '12345', NULL, NULL, ''),
(42, '4321', 'd93591bdf7860e1e4ee2fca799911215', '4321', 'GexideLwallpaperblackAAEmedium.png', NULL, '1'),
(43, 'zanr512', '202cb962ac59075b964b07152d234b70', 'zanr512@gmail.com', NULL, NULL, ''),
(44, 'zanrotovnik', '202cb962ac59075b964b07152d234b70', 'zigaprasnic@gmail.com', NULL, NULL, ''),
(45, '321', 'caf1a3dfb505ffed0d024130f58c5cfa', '321', NULL, NULL, ''),
(46, '987', 'df6d2338b2b8fce1ec2f6dda0a630eb0', '987', NULL, NULL, ''),
(47, '876', '67d16d00201083a2b118dd5128dd6f59', '876', 'GexideLwallpaperblackAAEmedium.png', NULL, ''),
(48, 'zanz', '202cb962ac59075b964b07152d234b70', 'zanz', NULL, NULL, ''),
(49, 'ttttt', '6cee4618fc4960d184eb7efbd0aa27b5', 'ttttt@ttttt', '20160329113402.jpg', NULL, '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
