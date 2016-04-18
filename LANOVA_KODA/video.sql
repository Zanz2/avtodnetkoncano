-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Gostitelj: 127.0.0.1
-- Čas nastanka: 16. apr 2016 ob 12.29
-- Različica strežnika: 10.1.10-MariaDB
-- Različica PHP: 5.6.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Zbirka podatkov: `admin`
--

-- --------------------------------------------------------

--
-- Struktura tabele `video`
--

CREATE TABLE `video` (
  `video_id` int(11) NOT NULL,
  `video_name` text COLLATE utf8mb4_slovenian_ci NOT NULL,
  `video_size` float NOT NULL,
  `filetype` varchar(20) COLLATE utf8mb4_slovenian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_slovenian_ci;

--
-- Odloži podatke za tabelo `video`
--

INSERT INTO `video` (`video_id`, `video_name`, `video_size`, `filetype`) VALUES
(15, 'Developers.mp3', 2905270, 'audio/mp3'),
(16, 'Lukas Graham.mp4', 54534600, 'video/mp4'),
(17, 'video123.mp4', 62124200, 'video/mp4');

--
-- Indeksi zavrženih tabel
--

--
-- Indeksi tabele `video`
--
ALTER TABLE `video`
  ADD PRIMARY KEY (`video_id`);

--
-- AUTO_INCREMENT zavrženih tabel
--

--
-- AUTO_INCREMENT tabele `video`
--
ALTER TABLE `video`
  MODIFY `video_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
