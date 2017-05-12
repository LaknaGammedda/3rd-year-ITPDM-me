-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 12, 2017 at 12:33 PM
-- Server version: 5.6.12-log
-- PHP Version: 5.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `b&b`
--
CREATE DATABASE IF NOT EXISTS `b&b` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `b&b`;

-- --------------------------------------------------------

--
-- Table structure for table `blog_vote`
--

CREATE TABLE IF NOT EXISTS `blog_vote` (
  `vote_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `blog_vote` float unsigned NOT NULL,
  `blog_id` int(10) unsigned NOT NULL,
  `ip_address` varchar(20) COLLATE latin1_general_ci DEFAULT NULL,
  PRIMARY KEY (`vote_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE IF NOT EXISTS `posts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `comment` text NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `title`, `slug`, `comment`, `time`) VALUES
(1, 'Post_One', 'P_one', 'hello thereeee', '2017-04-23 14:45:40'),
(2, 'Post_two', 'P_two', 'I really impressed', '2017-04-23 14:45:40'),
(3, 'Post_three', 'Post_three', 'this is already edited', '2017-05-01 03:59:17'),
(12, 'Post_four', 'Post_four', 'greate', '2017-05-07 07:02:22'),
(13, 'adf', 'adf', 'mdsfm', '2017-05-12 08:00:03');

-- --------------------------------------------------------

--
-- Table structure for table `rentouts`
--

CREATE TABLE IF NOT EXISTS `rentouts` (
  `accomodationId` int(11) NOT NULL AUTO_INCREMENT,
  `renterName` varchar(25) NOT NULL,
  `address1` varchar(255) NOT NULL,
  `address2` varchar(255) NOT NULL,
  `city` varchar(25) NOT NULL,
  `price` float NOT NULL,
  `facility` text NOT NULL,
  `NumberOfRooms` int(11) NOT NULL,
  `path` varchar(125) NOT NULL,
  PRIMARY KEY (`accomodationId`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=22 ;

--
-- Dumping data for table `rentouts`
--

INSERT INTO `rentouts` (`accomodationId`, `renterName`, `address1`, `address2`, `city`, `price`, `facility`, `NumberOfRooms`, `path`) VALUES
(1, 'sfdf', 'rgeg', 'bfbfdv', 'ererw', 654545, 'hjkdgfzhshAJ', 3, ''),
(2, 'sfdf', 'rgeg', 'bfbfdv', 'ererw', 654545, 'hjkdgfzhshAJ', 3, ''),
(3, 'sadnas', 'cbbds', 'rhejrh', 'fvfjhj', 454210, 'ahdjedhjsndsm', 2, ''),
(4, 'vnbvn', 'ehwj', 'dsnjh', 'dhfjvhfdj', 548655, 'shdjhdskcn', 4, ''),
(5, 'zcghzc', 'sdhfjs', 'wdgjhd', 'zxcjx', 435465, 'shdgjasdhjsc', 3, ''),
(6, 'fhgfhgfghf', 'bhghx', 'dc', 'sc', 25, 'cs', 3, ''),
(7, 'thiwanka', 'sdhfjssfg', 'sndbfndsf', 'sfs', 5423.2, 'sbfdbshf', 3, ''),
(8, 'cvcv', 'dhjdsh', 'jdhajsdhfd', 'dhjvd', 23455, 'dchgdshcgdh', 2, ''),
(9, 'thiwanka', 'dhjdsh', 'gdfhgef', 'dhfjvhfdj', 10255, 'bbvnbvxcnx', 2, ''),
(10, 'nbn', 'nvbb', 'bm,', 'vnv', 2345, 'cdg', 2, './images/179215911fd6407b99.'),
(11, 's', 'c', 'd', 'v', 5423.2, 'dv', 2, './images/196225912007f8c44b.'),
(12, 's', 'c', 'd', 'v', 5423.2, 'dv', 2, './images/26343591202427d880.'),
(13, 's', 'c', 'd', 'v', 5423.2, 'dv', 2, './images/252365912096b034c5.'),
(14, 's', 'c', 'd', 'v', 5423.2, 'dv', 2, './images/1670159120977ed8df.'),
(15, 's', 'c', 'd', 'v', 5423.2, 'dv', 2, './images/337859120a711b28b.'),
(16, 's', 'c', 'd', 'v', 5423.2, 'dv', 2, './images/269159120b2c955bd.'),
(17, 's', 'c', 'd', 'v', 5423.2, 'dv', 2, './images/512059120befe8029.'),
(18, 'vilasha', 'sdhfjs', 'cdscd', 'assssa', 6454, 'cascbc', 2, './images/270705912d1e5a7ff0.jpg'),
(19, 'thiwanka', 'korasawalduwa road', 'wanawasala', 'kelaniya', 50000, 'two rooms attached bathrooms aircondition', 2, './images/17069591300a4cf51b.jpg'),
(20, 'dhsfhj', 'sdfhdf', 'sdhfd', 'ehfhe', 52, 'gsfhsgf', 2, './images/387659135ffedb755.jpg'),
(21, 'jdsfhjs', 'sdfhdf', 'dsfds', 'dsfds', 6533, 'sdfhjd', 1, './images/2142459156a65c7c92.jpg');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
