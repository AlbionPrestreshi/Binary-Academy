-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 13, 2023 at 07:00 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `user_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `user_form`
--

CREATE TABLE `user_form` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `user_type` varchar(255) NOT NULL DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_form`
--

INSERT INTO `user_form` (`id`, `name`, `email`, `password`, `user_type`) VALUES
(0, 'rinesa', 'cakiqirinesa6@gmail.com', 'd41d8cd98f00b204e9800998ecf8427e', 'user_type'),
(0, 'hello', 'everyoner', 'd41d8cd98f00b204e9800998ecf8427e', 'user_type'),
(0, 'tiku', 'tikatika', '42adbf9a06b334531e4cbc411941604a', 'user_type'),
(0, 'mreti', 'mrei', '9da26b1e7310c00dc7feef34996b990b', 'user_type'),
(0, 'hej', 'hej', '541c57960bb997942655d14e3b9607f9', 'user_type'),
(0, 'sjjsn', 'snklslkslk', '6c1fad7ce694bd07d0db13d4ede00984', 'user_type'),
(0, 'egfghsgd', 'dtsgaega', '42adbf9a06b334531e4cbc411941604a', 'user_type'),
(0, 'Albion Prestreshi', 'Albion.pres1@gmail.com', '51c68688f3e3583d1fd7ad22942c2138', 'user_type'),
(0, 'Yllka', 'Sahiti', 'cc100f8759c5f5c5957cecfbafd1f37f', 'user_type'),
(0, 'Prestreshi', 'Prestreshi.1@gmail.com', '6d1d65e95d9a01ca66d03a5781a29efe', 'user_type'),
(0, 'yllka sahiti', 'yllkasahiti@gmail.com', '42adbf9a06b334531e4cbc411941604a', 'user_type'),
(0, 'kumrije', 'kumrije@gmail.com', '42adbf9a06b334531e4cbc411941604a', 'admin'),
(0, 'beatrika', 'beatrika@gmail.com', '42adbf9a06b334531e4cbc411941604a', 'user'),
(0, 'filloreta', 'filloreta@gmail.com', '42adbf9a06b334531e4cbc411941604a', 'admin'),
(0, 'art', 'art@gmail.com', 'f5bb0c8de146c67b44babbf4e6584cc0', 'user'),
(0, 'art', 'art@admin.com', 'f5bb0c8de146c67b44babbf4e6584cc0', 'admin');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
