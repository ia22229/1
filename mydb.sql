-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Nov 29, 2023 at 01:46 PM
-- Server version: 8.2.0
-- PHP Version: 8.2.13

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
-- Table structure for table `ladyloaf`
--

DROP TABLE IF EXISTS `ladyloaf`;
CREATE TABLE IF NOT EXISTS `ladyloaf` (
  `foodname` varchar(30) NOT NULL,
  `foodid` int NOT NULL,
  PRIMARY KEY (`foodid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `ladyloaf`
--

INSERT INTO `ladyloaf` (`foodname`, `foodid`) VALUES
('zinger burger', 9),
('club sandwich', 10),
('pizza', 11),
('BBQ', 12),
('momos', 13),
('fried chicken', 14),
('wraps', 15),
('tacos', 16);

-- --------------------------------------------------------

--
-- Table structure for table `lattecafe`
--

DROP TABLE IF EXISTS `lattecafe`;
CREATE TABLE IF NOT EXISTS `lattecafe` (
  `foodname` varchar(30) NOT NULL,
  `foodid` int NOT NULL,
  PRIMARY KEY (`foodid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `lattecafe`
--

INSERT INTO `lattecafe` (`foodname`, `foodid`) VALUES
('chicken biriyani', 1),
('blueberry shake', 17),
('pineapple mojitho', 18),
('lotus biscof cheese cake', 19),
('pan cake', 20),
('milk cake', 21),
('tender coconut shake', 22),
('brownee', 23),
('dragon falooda', 24);

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
('lena', '7444', 5555, 30, 'hha');

-- --------------------------------------------------------

--
-- Table structure for table `whitehouse`
--

DROP TABLE IF EXISTS `whitehouse`;
CREATE TABLE IF NOT EXISTS `whitehouse` (
  `foodname` varchar(30) NOT NULL,
  `foodid` int NOT NULL,
  PRIMARY KEY (`foodid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `whitehouse`
--

INSERT INTO `whitehouse` (`foodname`, `foodid`) VALUES
('chicken noodles', 2),
('chicken biriyani', 1),
('chicken fry', 3),
('porotta', 4),
('meals', 5),
('beef fry', 6),
('fried rice', 7),
('chicken chilly', 8);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
