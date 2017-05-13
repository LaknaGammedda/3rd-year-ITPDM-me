-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 13, 2017 at 06:38 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `b&b`
--

-- --------------------------------------------------------

--
-- Table structure for table `blog_vote`
--

CREATE TABLE `blog_vote` (
  `vote_id` int(10) UNSIGNED NOT NULL,
  `blog_vote` float UNSIGNED NOT NULL,
  `blog_id` int(10) UNSIGNED NOT NULL,
  `ip_address` varchar(20) COLLATE latin1_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `blog_vote`
--

INSERT INTO `blog_vote` (`vote_id`, `blog_vote`, `blog_id`, `ip_address`) VALUES
(1, 3, 1, NULL),
(2, 4, 1, NULL),
(3, 3, 1, '0');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `comment` text NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `title`, `slug`, `comment`, `time`) VALUES
(1, 'Post_One', 'Post_One', 'hello ', '2017-04-23 14:45:40');

-- --------------------------------------------------------

--
-- Table structure for table `rentouts`
--

CREATE TABLE `rentouts` (
  `accomodationId` int(11) NOT NULL,
  `renterName` varchar(25) NOT NULL,
  `address1` varchar(255) NOT NULL,
  `address2` varchar(255) NOT NULL,
  `city` varchar(25) NOT NULL,
  `price` float NOT NULL,
  `facility` text NOT NULL,
  `NumberOfRooms` int(11) NOT NULL,
  `path` varchar(125) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blog_vote`
--
ALTER TABLE `blog_vote`
  ADD PRIMARY KEY (`vote_id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rentouts`
--
ALTER TABLE `rentouts`
  ADD PRIMARY KEY (`accomodationId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blog_vote`
--
ALTER TABLE `blog_vote`
  MODIFY `vote_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `rentouts`
--
ALTER TABLE `rentouts`
  MODIFY `accomodationId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
