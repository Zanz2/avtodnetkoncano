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
-- Zbirka podatkov: `phpexcelltest`
--

-- --------------------------------------------------------

--
-- Struktura tabele `kategorije`
--

CREATE TABLE IF NOT EXISTS `kategorije` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ime` varchar(250) COLLATE utf8_slovenian_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `ime` (`ime`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_slovenian_ci AUTO_INCREMENT=9 ;

--
-- Odloži podatke za tabelo `kategorije`
--

INSERT INTO `kategorije` (`id`, `ime`) VALUES
(3, 'mala cev'),
(4, 'srednja cev'),
(1, 'velika cev');

-- --------------------------------------------------------

--
-- Struktura tabele `ostalo`
--

CREATE TABLE IF NOT EXISTS `ostalo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cena` varchar(250) COLLATE utf8_slovenian_ci NOT NULL,
  `sifra` varchar(250) COLLATE utf8_slovenian_ci NOT NULL,
  `ime` varchar(250) COLLATE utf8_slovenian_ci NOT NULL,
  `k_ime` varchar(250) COLLATE utf8_slovenian_ci NOT NULL,
  `p_ime` varchar(250) COLLATE utf8_slovenian_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `sifra` (`sifra`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_slovenian_ci AUTO_INCREMENT=10 ;

-- --------------------------------------------------------

--
-- Struktura tabele `proizvajalci`
--

CREATE TABLE IF NOT EXISTS `proizvajalci` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ime` varchar(250) COLLATE utf8_slovenian_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `ime` (`ime`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_slovenian_ci AUTO_INCREMENT=9 ;

--
-- Odloži podatke za tabelo `proizvajalci`
--

INSERT INTO `proizvajalci` (`id`, `ime`) VALUES
(2, 'audi'),
(3, 'ford'),
(1, 'mercedes');

-- --------------------------------------------------------

--
-- Struktura tabele `video`
--

CREATE TABLE IF NOT EXISTS `video` (
  `video_id` int(11) NOT NULL AUTO_INCREMENT,
  `video_name` text COLLATE utf8mb4_slovenian_ci NOT NULL,
  `video_size` float NOT NULL,
  `filetype` varchar(20) COLLATE utf8mb4_slovenian_ci NOT NULL,
  PRIMARY KEY (`video_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_slovenian_ci AUTO_INCREMENT=24 ;

--
-- Odloži podatke za tabelo `video`
--

INSERT INTO `video` (`video_id`, `video_name`, `video_size`, `filetype`) VALUES
(19, 'Snapchat-1589749106122623544.mp4', 1780720, 'video/mp4'),
(20, 'Snapchat-4807666540131509276.mp4', 1779380, 'video/mp4'),
(21, 'Snapchat-4807666540131509276.mp4', 1779380, 'video/mp4'),
(22, 'Snapchat-4807666540131509276.mp4', 1779380, 'video/mp4'),
(23, 'lmao.mp3', 123, 'audio/mp3');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
