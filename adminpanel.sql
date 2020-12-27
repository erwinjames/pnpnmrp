-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 13, 2020 at 10:43 AM
-- Server version: 5.5.32
-- PHP Version: 5.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `adminpanel`
--
CREATE DATABASE IF NOT EXISTS `adminpanel` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `adminpanel`;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(100) NOT NULL,
  `Region` varchar(100) NOT NULL,
  `Role` varchar(100) NOT NULL,
  `Status` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `Name`, `Region`, `Role`, `Status`) VALUES
(5, 'Cazzy Tajanlangit', 'Region XIII', 'Regional Admin', 'Active'),
(6, 'Jephthah Dinoy', 'Region VII', 'Super Admin', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `adminarchive`
--

CREATE TABLE IF NOT EXISTS `adminarchive` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `Username` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Address` varchar(250) NOT NULL,
  `Role` varchar(100) NOT NULL,
  `Team` varchar(100) NOT NULL,
  `Status` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `adminarchive`
--

INSERT INTO `adminarchive` (`id`, `Username`, `Email`, `Address`, `Role`, `Team`, `Status`) VALUES
(1, 'cj', 'cj@gmail.com', 'Lapu-Lapu', 'National Admin', 'National', 'Active'),
(2, 'JephTzy', 'JephTzy@gmail.com', 'Cordova', 'Tank', 'Humble Gamers', 'In a relationship'),
(3, 'ChristianJohnTzy', 'Tzy@gmail.com', 'Lapu-Lapu', 'Assassin', 'HumbleGamers', 'Single and ready to mingle.');

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE IF NOT EXISTS `event` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `Title` varchar(200) NOT NULL,
  `Photo` varchar(100) NOT NULL,
  `Speaker` varchar(200) NOT NULL,
  `Location` varchar(200) NOT NULL,
  `Dates` date NOT NULL,
  `Timess` time NOT NULL,
  `RegFee` int(100) NOT NULL,
  `ShortDesc` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`id`, `Title`, `Photo`, `Speaker`, `Location`, `Dates`, `Timess`, `RegFee`, `ShortDesc`) VALUES
(2, 'Test', '111.jpg', 'Test', 'Test', '1997-11-11', '12:31:00', 100, 'Test'),
(3, 'test1', '123.jpg', 'Test', 'Test', '0023-12-31', '12:31:00', 150, 'Test'),
(4, 'JephTzy', 'after2.jpg', 'asdadasd', 'asdasdasd', '2312-12-31', '12:31:00', 1000, 'Test'),
(5, 'asd', '', 'asd', '', '0000-00-00', '00:00:00', 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `fund`
--

CREATE TABLE IF NOT EXISTS `fund` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `Name` varchar(100) NOT NULL,
  `Description` varchar(500) NOT NULL,
  `Amount` int(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `location`
--

CREATE TABLE IF NOT EXISTS `location` (
  `id` int(250) NOT NULL AUTO_INCREMENT,
  `Region` varchar(1000) NOT NULL,
  `TotalNumbers` int(250) NOT NULL,
  `Status` varchar(1000) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `location`
--

INSERT INTO `location` (`id`, `Region`, `TotalNumbers`, `Status`) VALUES
(1, 'VII', 100, 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE IF NOT EXISTS `register` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`id`, `username`, `email`, `password`) VALUES
(8, 'cj', 'cj@gmail.com', '123');

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE IF NOT EXISTS `role` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `rolename` varchar(1000) NOT NULL,
  `arights` varchar(1000) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 AUTO_INCREMENT=23 ;

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`id`, `rolename`, `arights`) VALUES
(22, 'Super Admin', '');

-- --------------------------------------------------------

--
-- Table structure for table `rolearchive`
--

CREATE TABLE IF NOT EXISTS `rolearchive` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `rolename` varchar(100) NOT NULL,
  `arights` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

--
-- Dumping data for table `rolearchive`
--

INSERT INTO `rolearchive` (`id`, `rolename`, `arights`) VALUES
(1, 'Test', 'Test'),
(2, 'Provincial Admin', 'Request Fund, Accept members'),
(3, 'Provincial Admin', 'Array'),
(4, 'TEst111', 'Create Event'),
(5, 'aaaaa', 'Request Fund'),
(6, '123', 'View Files'),
(7, '11', 'Create Event'),
(8, '', ''),
(9, '', 'Array'),
(10, '', 'Print ID,Create Event,View Files,Request Fund,'),
(11, '1111', 'Print ID,Create Event,View Files,Request Fund,'),
(12, '', ''),
(13, '', 'Print ID,Create Event,'),
(14, 'City Admin', 'Print ID,'),
(15, '', ''),
(16, 'City Admin', ''),
(17, 'Provincial Admin', 'Print ID'),
(18, 'carlo', 'degamo'),
(19, 'Super Admin', 'Print ID'),
(20, 'Super Admin', 'Request Fund');

-- --------------------------------------------------------

--
-- Table structure for table `subscription`
--

CREATE TABLE IF NOT EXISTS `subscription` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `Subscription Name` varchar(1000) NOT NULL,
  `Price` int(100) NOT NULL,
  `Total Subscription` int(255) NOT NULL,
  `Total Amount` int(255) NOT NULL,
  `Status` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `subscription`
--

INSERT INTO `subscription` (`id`, `Subscription Name`, `Price`, `Total Subscription`, `Total Amount`, `Status`) VALUES
(1, '1 year plan', 300, 1, 300, 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(100) NOT NULL,
  `Region` varchar(100) NOT NULL,
  `Status` varchar(100) NOT NULL,
  `Password` varchar(255) DEFAULT NULL,
  `Email` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `Name`, `Region`, `Status`, `Password`, `Email`) VALUES
(1, 'cj', 'Region VII', 'Active', NULL, NULL),
(2, 'JephTzy', 'Region VII', 'Active', NULL, NULL),
(5, 'Jeph Dinoy', 'VII', 'Active', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `userarchive`
--

CREATE TABLE IF NOT EXISTS `userarchive` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `Username` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Mobile` varchar(100) NOT NULL,
  `Address` varchar(250) NOT NULL,
  `Status` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `userarchive`
--

INSERT INTO `userarchive` (`id`, `Username`, `Email`, `Mobile`, `Address`, `Status`) VALUES
(2, 'JephTzy', 'JephTzy@gmail.com', '09234567890', 'Cordova', 'In a relationship'),
(3, 'cj1', 'cj1@gmail.com', '0912312312312', 'Lapu-Lapu', 'Active'),
(6, 'asdasda', 'NCR', 'Active', 'asd', 'asdasd@gmail.com');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
