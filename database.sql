-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 09, 2025 at 07:05 AM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `data_analyser`
--
CREATE DATABASE IF NOT EXISTS `data_analyser` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `data_analyser`;

-- --------------------------------------------------------

--
-- Table structure for table `mail_info`
--

CREATE TABLE IF NOT EXISTS `mail_info` (
  `mail_id` int(11) NOT NULL AUTO_INCREMENT,
  `sender` int(11) NOT NULL,
  `receiver` int(11) NOT NULL,
  `mail_content` text NOT NULL,
  `mail_heading` text NOT NULL,
  `send_date` date NOT NULL,
  PRIMARY KEY (`mail_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `mail_info`
--

INSERT INTO `mail_info` (`mail_id`, `sender`, `receiver`, `mail_content`, `mail_heading`, `send_date`) VALUES
(1, 0, 2, 'bye bye', 'Check', '2024-07-13'),
(2, 0, 3, 'wdc', 'wadcf', '2024-07-13');

-- --------------------------------------------------------

--
-- Table structure for table `param_info`
--

CREATE TABLE IF NOT EXISTS `param_info` (
  `pid` int(11) NOT NULL AUTO_INCREMENT,
  `param_name` varchar(50) NOT NULL,
  `param_low_range` int(11) NOT NULL,
  `param_high_range` int(11) NOT NULL,
  `low_color` varchar(10) NOT NULL,
  `high_color` varchar(10) NOT NULL,
  `mid_color` varchar(10) NOT NULL,
  PRIMARY KEY (`pid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `param_info`
--

INSERT INTO `param_info` (`pid`, `param_name`, `param_low_range`, `param_high_range`, `low_color`, `high_color`, `mid_color`) VALUES
(1, 'Temperature', 10, 20, '#8b7e7e', '#f20d0d', '#14f52e'),
(2, 'test', 59, 69, '#000000', '#000000', '#000000');

-- --------------------------------------------------------

--
-- Table structure for table `user_info`
--

CREATE TABLE IF NOT EXISTS `user_info` (
  `uid` int(11) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(30) NOT NULL,
  `user_pass` varchar(16) NOT NULL,
  `user_type` varchar(5) NOT NULL,
  `login_date` date NOT NULL,
  PRIMARY KEY (`uid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `user_info`
--

INSERT INTO `user_info` (`uid`, `user_name`, `user_pass`, `user_type`, `login_date`) VALUES
(1, 'a', 'a', 'admin', '2024-06-28'),
(2, 'ram', 'r', 'user', '2024-06-28'),
(4, 'mohan', 'mohini', 'user', '2024-08-24');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
