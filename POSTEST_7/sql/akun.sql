-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 02, 2022 at 05:22 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `akun`
--

-- --------------------------------------------------------

--
-- Table structure for table `akun`
--

CREATE TABLE `akun` (
  `username` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `akun`
--

INSERT INTO `akun` (`username`, `pass`) VALUES
('r', '$2y$10$mdUVSELzj4Jha/mOxNt6IORensaDhiZjZjTweQkl1dmOySUkHGbcW'),
('rahman', '$2y$10$0vlPwD7JgmCljQd1uMpBlOxGN1aFoKxnzlHINBYroDyfdN2jq8.Pe'),
('a', '$2y$10$wEKzByzLINRG8bBVMX8DwO/A0TcXX4QR6.p0eN70bF9Grkmu4FrE6'),
('admin', '$2y$10$nPox5tfAQ3E1o69IXZwxqeQj7Z9ORYUmehOHjiX/3Sq94b8l/MKCG'),
('user', '$2y$10$uO6Tn1Tf4gabXZ2gBOV8Muh3cD1VXa3XQCeKnYhUF1KHO//FQTmeK');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
