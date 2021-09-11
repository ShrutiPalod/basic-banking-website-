phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: 8 september, 2021 at 11:09 AM
-- Server version: 8.0.18
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bankuser`
--

-- --------------------------------------------------------

--
-- Table structure for table `trans`
--

DROP TABLE IF EXISTS `trans`;
CREATE TABLE IF NOT EXISTS `trans` (
  `sender` varchar(45) NOT NULL,
  `receiver` varchar(45) NOT NULL,
  `amount` varchar(45) NOT NULL,
  `date` varchar(45) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `trans`
--

INSERT INTO `trans` (`sender`, `receiver`, `amount`, `date`) VALUES
('mannu', 'surya', '6000', '2020-11-08'),
('hari', 'mannu', '2000', '2020-11-22'),
('mannu', 'hari', '500', '2020-11-29'),
('surya', 'hari', '5000', '2020-11-29');

-- --------------------------------------------------------

--
-- Table structure for table `userinfo`
--

DROP TABLE IF EXISTS `userinfo`;
CREATE TABLE IF NOT EXISTS `userinfo` (
  `accountno` varchar(45) NOT NULL,
  `name` varchar(45) NOT NULL,
  `age` varchar(45) NOT NULL,
  `bank` varchar(45) NOT NULL,
  `cuamt` varchar(45) NOT NULL,
  PRIMARY KEY (`accountno`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `userinfo`
--

INSERT INTO `userinfo` (`accountno`, `name`, `age`, `bank`, `cuamt`) VALUES
('18007565982346', 'surya', '21', 'Andhra Bank', '10000'),
('18007565982345', 'sandeep', '18', 'HDFC', '4000'),
('18007565982349', 'vandhana', '56', 'Andhra Bank', '2000'),
('18007565982344', 'kiran', '40', 'Punjab National Bank', '1000'),
('18007565982340', 'hari', '19', 'ICICI', '5500'),
('18007565982367', 'mannu', '16', 'HDFC', '1500'),
('18007565982377', 'sandeep', '29', 'Punjab National Bank', '4000');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;