-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 10, 2023 at 01:39 PM
-- Server version: 5.6.12-log
-- PHP Version: 5.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `hostel_management_suraj`
--
CREATE DATABASE IF NOT EXISTS `hostel_management_suraj` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `hostel_management_suraj`;

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE IF NOT EXISTS `contact` (
  `fullname` varchar(50) NOT NULL,
  `email` varchar(30) NOT NULL,
  `number` int(15) NOT NULL,
  `message` varchar(500) NOT NULL,
  UNIQUE KEY `email` (`number`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`fullname`, `email`, `number`, `message`) VALUES
('Suraj Kumar', '544654', 565465, '64684'),
('kshgkjhsdjfghksdf', 'nikhilkumadvxdfbcxr89535@gmail', 628926435, 'esrtertser'),
('dhjdhjfgh', 'nxbjvbjcfxgbvjhcxfb', 2147483647, 'dbgjdjfhgkgfdhn');

-- --------------------------------------------------------

--
-- Table structure for table `mess`
--

CREATE TABLE IF NOT EXISTS `mess` (
  `full_name` varchar(200) NOT NULL,
  `roll` int(50) NOT NULL,
  `number` int(13) NOT NULL,
  `email` varchar(50) NOT NULL,
  `messtype` varchar(13) NOT NULL,
  `present` varchar(20) NOT NULL,
  UNIQUE KEY `roll` (`roll`,`number`,`email`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mess`
--

INSERT INTO `mess` (`full_name`, `roll`, `number`, `email`, `messtype`, `present`) VALUES
('SAHIL KUMAR', 2231722, 2147483647, 'nikhilkumar89535@gmail.com', 'mess1', 'jxnkbcjfnb');

-- --------------------------------------------------------

--
-- Table structure for table `register_student`
--

CREATE TABLE IF NOT EXISTS `register_student` (
  `full_name` varchar(100) NOT NULL,
  `user_name` varchar(100) NOT NULL,
  `phone_number` int(15) NOT NULL,
  `email` varchar(50) NOT NULL,
  `pwd` varchar(50) NOT NULL,
  `log1` varchar(20) NOT NULL,
  PRIMARY KEY (`user_name`),
  UNIQUE KEY `phone_number` (`phone_number`,`email`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `register_student`
--

INSERT INTO `register_student` (`full_name`, `user_name`, `phone_number`, `email`, `pwd`, `log1`) VALUES
('jbhjkhbknb', 'nbkmbnbm', 2147483647, 'nikhilkumarnmvjbv89535@gmail.com', 'fcfhgvhg@8654', 'Admin');

-- --------------------------------------------------------

--
-- Table structure for table `room`
--

CREATE TABLE IF NOT EXISTS `room` (
  `full_name` varchar(100) NOT NULL,
  `roll` int(30) NOT NULL,
  `number` int(15) NOT NULL,
  `email` varchar(50) NOT NULL,
  `room1` varchar(30) NOT NULL,
  UNIQUE KEY `roll` (`roll`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `room`
--

INSERT INTO `room` (`full_name`, `roll`, `number`, `email`, `room1`) VALUES
('SAHIL KUMAR', 5652656, 2147483647, 'nikhilkumar89535@gmail.com', 'tbhbj22');

-- --------------------------------------------------------

--
-- Table structure for table `sports`
--

CREATE TABLE IF NOT EXISTS `sports` (
  `full_name` varchar(50) NOT NULL,
  `roll` int(30) NOT NULL,
  `number` int(13) NOT NULL,
  `email` varchar(50) NOT NULL,
  `message` varchar(200) NOT NULL,
  UNIQUE KEY `roll` (`roll`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sports`
--

INSERT INTO `sports` (`full_name`, `roll`, `number`, `email`, `message`) VALUES
('SAHIL KUMAR', 5652656, 2147483647, 'nikhilkumar89535@gmail.com', 'boll,and bat');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
