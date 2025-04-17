-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Nov 30, 2023 at 07:00 PM
-- Server version: 8.0.31
-- PHP Version: 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mydb`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

DROP TABLE IF EXISTS `cart`;
CREATE TABLE IF NOT EXISTS `cart` (
  `productid` int NOT NULL,
  `username` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`productid`, `username`) VALUES
(3, 'lena'),
(2, 'lena'),
(1, 'lena'),
(22, 'lena'),
(21, 'lena'),
(7, 'lena'),
(24, 'lena'),
(4, 'lena');

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

DROP TABLE IF EXISTS `menu`;
CREATE TABLE IF NOT EXISTS `menu` (
  `foodid` int NOT NULL,
  `foodname` varchar(100) NOT NULL,
  `price` int NOT NULL,
  PRIMARY KEY (`foodid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`foodid`, `foodname`, `price`) VALUES
(2, 'chicken noodles', 549),
(1, 'chicken biriyani', 549),
(3, 'chicken fry', 549),
(4, 'porotta', 549),
(5, 'meals', 549),
(6, 'beef fry', 549),
(7, 'fried rice', 549),
(8, 'chicken chilli', 549),
(9, 'zinger burger', 549),
(10, 'club sandwich', 549),
(11, 'pizza', 549),
(12, 'BBQ', 549),
(13, 'momos', 549),
(14, 'fried chicken', 549),
(15, 'wraps', 549),
(16, 'tacos', 549),
(17, 'blueberry shake', 549),
(18, 'pineapple mojitho', 549),
(19, 'lotus biscof cheese cake', 549),
(20, 'pan cake', 549),
(21, 'milk cake', 549),
(22, 'tender coconut shake', 549),
(23, 'brownee', 549),
(24, 'dragon falooda', 549);

-- --------------------------------------------------------

--
-- Table structure for table `table1`
--

DROP TABLE IF EXISTS `table1`;
CREATE TABLE IF NOT EXISTS `table1` (
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `phoneno` int NOT NULL,
  `age` int NOT NULL,
  `address` varchar(30) NOT NULL,
  PRIMARY KEY (`username`),
  UNIQUE KEY `username` (`username`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `table1`
--

INSERT INTO `table1` (`username`, `password`, `phoneno`, `age`, `address`) VALUES
('lena', '7444', 5555, 30, 'hha'),
('rwy', 'rbghr', 435, 4, '435');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
