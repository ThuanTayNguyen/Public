-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Oct 17, 2017 at 01:16 PM
-- Server version: 5.7.19
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `adweb`
--

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `rank_id` tinyint(4) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `username`, `password`, `rank_id`) VALUES
(1, 'eschi', 'd41d8cd98f00b204e9800998ecf8427e', 1),
(2, 'silvakun', 'd41d8cd98f00b204e9800998ecf8427e', 1),
(3, 'peterhiep', 'd41d8cd98f00b204e9800998ecf8427e', 1),
(4, 'jinariju', 'd41d8cd98f00b204e9800998ecf8427e', 2),
(5, 'poro', 'd41d8cd98f00b204e9800998ecf8427e', 2),
(6, 'beri', 'd41d8cd98f00b204e9800998ecf8427e', 2),
(7, 'bot1', 'd41d8cd98f00b204e9800998ecf8427e', 3),
(8, 'bot2', 'd41d8cd98f00b204e9800998ecf8427e', 3),
(9, 'bot3', 'd41d8cd98f00b204e9800998ecf8427e', 3),
(10, 'bot4', 'd41d8cd98f00b204e9800998ecf8427e', 3),
(11, 'bot5', 'd41d8cd98f00b204e9800998ecf8427e', 3),
(12, 'bot6', 'd41d8cd98f00b204e9800998ecf8427e', 3);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
