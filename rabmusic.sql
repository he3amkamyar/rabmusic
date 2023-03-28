-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Mar 28, 2023 at 10:27 AM
-- Server version: 5.7.40
-- PHP Version: 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rabmusic`
--

-- --------------------------------------------------------

--
-- Table structure for table `music`
--

DROP TABLE IF EXISTS `music`;
CREATE TABLE IF NOT EXISTS `music` (
  `mid` int(255) NOT NULL AUTO_INCREMENT,
  `mname` varchar(255) COLLATE utf8_persian_ci NOT NULL,
  `msinger` varchar(255) COLLATE utf8_persian_ci NOT NULL,
  `mmusic` text COLLATE utf8_persian_ci NOT NULL,
  `mcover` text COLLATE utf8_persian_ci NOT NULL,
  `mdate` timestamp NOT NULL,
  `mstatus` int(255) NOT NULL,
  `myear` varchar(10) COLLATE utf8_persian_ci NOT NULL,
  PRIMARY KEY (`mid`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

--
-- Dumping data for table `music`
--

INSERT INTO `music` (`mid`, `mname`, `msinger`, `mmusic`, `mcover`, `mdate`, `mstatus`, `myear`) VALUES
(4, 'Ú©Ø§Ø¨ÙˆØ³', 'Ø§Ù…ÛŒÙ† Ø­Ø¨ÛŒØ¨ÛŒ', 'amin1.mp3', 'img2.jpg', '2023-03-28 09:38:53', 1, '1401'),
(14, 'Ù‡Ù…ÛŒÙ†Ùˆ Ù…ÛŒØ®ÙˆØ§Ø³ØªÛŒ', 'Ø­Ø§Ù…Ø¯ Ù¾Ù‡Ù„Ø§Ù†', 'hamed.mp3', 'img3.jpg', '2023-03-28 10:19:39', 1, '1402');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
