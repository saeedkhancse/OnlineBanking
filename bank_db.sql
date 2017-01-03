-- phpMyAdmin SQL Dump
-- version 3.1.3.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 01, 2015 at 07:43 AM
-- Server version: 5.1.33
-- PHP Version: 5.2.9

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `bank_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_info`
--

CREATE TABLE IF NOT EXISTS `admin_info` (
  `user_id` int(11) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_info`
--

INSERT INTO `admin_info` (`user_id`, `password`) VALUES
(1184, '1184');

-- --------------------------------------------------------

--
-- Table structure for table `atm`
--

CREATE TABLE IF NOT EXISTS `atm` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `atm_name` varchar(100) NOT NULL,
  `location` varchar(100) NOT NULL,
  `area` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `atm`
--

INSERT INTO `atm` (`id`, `atm_name`, `location`, `area`) VALUES
(1, 'Rampura', '23/A rampura', 'Dhaka');

-- --------------------------------------------------------

--
-- Table structure for table `branches`
--

CREATE TABLE IF NOT EXISTS `branches` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `branch_name` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `area` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `branches`
--

INSERT INTO `branches` (`id`, `branch_name`, `phone`, `area`, `address`) VALUES
(1, 'shantinagar', '4568657', 'dhaka', '9/70 shantinagar'),
(2, 'rampura', '57858799', 'dhaka', '65/A new road'),
(3, 'agargaon', '6758098', 'khulna', '16/B new road'),
(4, 'dighabari', '9869000', 'khulna', 'asghhjg'),
(5, 'rupatali', '9080997', 'barishal', 'a/hjchjj'),
(6, 'rupganj', '0980645', 'barishal', 'jhfhjmkl');

-- --------------------------------------------------------

--
-- Table structure for table `complain`
--

CREATE TABLE IF NOT EXISTS `complain` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `acc_no` varchar(100) NOT NULL,
  `contact_no` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `description` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `complain`
--

INSERT INTO `complain` (`id`, `acc_no`, `contact_no`, `email`, `description`) VALUES
(1, '300', '01677', 'fg@yahoomail.com', 'hdghfhs'),
(3, '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `consumer_pro`
--

CREATE TABLE IF NOT EXISTS `consumer_pro` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `photo` varchar(100) NOT NULL,
  `description` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `consumer_pro`
--

INSERT INTO `consumer_pro` (`id`, `photo`, `description`) VALUES
(1, '1.jpg', 'A unique savings account that maximizes your savings with ease of transactions. '),
(2, '4.jpg', 'hfdddddddddddddddddddd'),
(6, 'boys.jpg', 'gfghgh'),
(8, '2.jpg', 'uhbikjn');

-- --------------------------------------------------------

--
-- Table structure for table `downloads`
--

CREATE TABLE IF NOT EXISTS `downloads` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `file` varchar(100) NOT NULL,
  `file_name` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `downloads`
--

INSERT INTO `downloads` (`id`, `file`, `file_name`) VALUES
(1, 'reference.pdf', 'reference_form'),
(6, '10690902_742763222479196_1225293214_n.zip', 'fv'),
(7, '10690933_766153993476380_1913330222_n (2).zip', 'cvbn'),
(8, 'Debit_card.pdf', 'Debit card'),
(9, 'Debit_card.pdf', 'Debit Card');

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE IF NOT EXISTS `events` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `type` varchar(100) NOT NULL,
  `description` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `type`, `description`) VALUES
(1, 'news', 'jfgjshfjshfhsh'),
(4, 'events', 'vggh'),
(5, 'news', 'dcyctcy');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE IF NOT EXISTS `payment` (
  `p_id` int(11) NOT NULL AUTO_INCREMENT,
  `u_id` int(11) DEFAULT NULL,
  `company` varchar(100) DEFAULT NULL,
  `amount` int(11) DEFAULT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `acc_no` int(11) NOT NULL,
  PRIMARY KEY (`p_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`p_id`, `u_id`, `company`, `amount`, `date`, `acc_no`) VALUES
(1, 2, 'Desa', 600, '2013-05-21 01:00:11', 909091),
(2, 2, 'Desco', 100, '2013-05-21 01:01:35', 909091),
(3, 2, 'Desco', 100, '2013-05-21 01:02:29', 909091);

-- --------------------------------------------------------

--
-- Table structure for table `transfer_balance`
--

CREATE TABLE IF NOT EXISTS `transfer_balance` (
  `t_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `amount` int(11) DEFAULT NULL,
  `to_account` int(11) DEFAULT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`t_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `transfer_balance`
--

INSERT INTO `transfer_balance` (`t_id`, `user_id`, `amount`, `to_account`, `date`) VALUES
(1, 2, 100, 1, '2013-05-21 00:25:30'),
(2, 13, 1000, 11, '2014-12-31 22:33:59');

-- --------------------------------------------------------

--
-- Table structure for table `user_info`
--

CREATE TABLE IF NOT EXISTS `user_info` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uname` varchar(40) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `email` varchar(50) NOT NULL,
  `address` text NOT NULL,
  `balance` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `user_info`
--

INSERT INTO `user_info` (`id`, `uname`, `password`, `email`, `address`, `balance`) VALUES
(14, '300', '94f6d7e04a4d452035300f18b984988c', 'ffgghj@bn.com', 'cghmcllfuh', 10000),
(13, '200', '3644a684f98ea8fe223c713b77189a77', 'ffgghj@bn.com', 'cghmcllfuh', 9000);
