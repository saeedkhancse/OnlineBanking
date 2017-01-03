-- phpMyAdmin SQL Dump
-- version 3.2.0.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 22, 2013 at 03:10 AM
-- Server version: 5.1.37
-- PHP Version: 5.3.0

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
-- Table structure for table `user_info`
--

CREATE TABLE IF NOT EXISTS `user_info` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `password` varchar(100) DEFAULT NULL,
  `email` varchar(50) NOT NULL,
  `address` text NOT NULL,
  `balance` int(11) NOT NULL,
  `acc_no` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `user_info`
--

INSERT INTO `user_info` (`id`, `password`, `email`, `address`, `balance`, `acc_no`) VALUES
(1, '21232f297a57a5a743894a0e4a801fc3', 's@n.com', 'hghg', 2700, ''),
(2, '320c8d45fe4ee818e1d185954c2c251d', 's@b', 'ghg', 900, ''),
(3, '21232f297a57a5a743894a0e4a801fc3', '', '', 1000, ''),
(4, '21232f297a57a5a743894a0e4a801fc3', '', '', 1000, ''),
(5, '21232f297a57a5a743894a0e4a801fc3', '', '', 1000, ''),
(6, '21232f297a57a5a743894a0e4a801fc3', '', '', 1000, ''),
(7, '21232f297a57a5a743894a0e4a801fc3', '', '', 1000, ''),
(8, 'c20ad4d76fe97759aa27a0c99bff6710', 's@n.com', 'sdf', 800, ''),
(9, NULL, '', '', 0, ''),
(10, 'klk', 'kk', 'k', 10, ''),
(11, 'c20ad4d76fe97759aa27a0c99bff6710', 's@n.com', 'hfgf', 1000, '12345'),
(12, 'c4ca4238a0b923820dcc509a6f75849b', 's@m.com', 'jhjh', 1000, '111');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
