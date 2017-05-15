-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 15, 2017 at 02:33 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ci_b`
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
(3, 3, 1, '0'),
(4, 3, 2, NULL),
(5, 4, 2, NULL),
(6, 2, 1, '0'),
(7, 3, 1, '0');

-- --------------------------------------------------------

--
-- Table structure for table `ci_sessions`
--

CREATE TABLE `ci_sessions` (
  `id` varchar(128) NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `timestamp` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `data` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `userName` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `confPass` varchar(15) NOT NULL,
  `first_name` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `userName`, `password`, `confPass`, `first_name`, `email`) VALUES
(1, 'admin', 'admin', '', '', '');

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
(1, 'post1', 'post1', 'heyyyyyyyyyyyyyyyyyyyyy3', '2017-05-14 13:09:15');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `Rid` int(11) NOT NULL,
  `firstName` varchar(20) NOT NULL,
  `lastName` varchar(20) NOT NULL,
  `Email` varchar(40) NOT NULL,
  `Telephone` int(11) NOT NULL,
  `Add1` varchar(20) NOT NULL,
  `Add2` varchar(20) NOT NULL,
  `City` varchar(20) NOT NULL,
  `Username` varchar(20) NOT NULL,
  `Password` varchar(20) NOT NULL,
  `role` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`Rid`, `firstName`, `lastName`, `Email`, `Telephone`, `Add1`, `Add2`, `City`, `Username`, `Password`, `role`) VALUES
(1, 'lakna', 'harindie', 'chanddabare@gmail.com', 718163361, '139B1C', 'jagathrd', 'mahargama', 'my1234', 'abc12345', ''),
(2, 'lakna', 'harindie', 'chanddabare@gmail.com', 718163361, '139B1C', 'jagathrd', 'mahargama', 'my1234', 'abc12345', ''),
(3, 'lakna', 'harindie', 'chanddabare@gmail.com', 718163361, '139B1C', 'jagathrd', 'mahargama', 'my1234', 'abc12345', ''),
(4, 'lakna', 'harindie', 'chanddabare@gmail.com', 718163361, '139B1C', 'jagathrd', 'mahargama', 'my1234', 'abc12345', ''),
(5, 'lakna', 'harindie', 'chanddabare@gmail.com', 718163361, '139B1C', 'jagathrd', 'mahargama', 'my1234', 'abc12345', ''),
(6, 'lakna', 'harindie', 'chanddabare@gmail.com', 718163361, '139B1C', 'jagathrd', 'mahargama', 'my1234', 'abc12345', ''),
(7, 'missa', 'mewan', 'chanddabare@gmail.com', 1234567890, '190ABC', 'jagathrd', 'mahargama', '12345ac', 'ABCD123', 'Tourist');

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

-- --------------------------------------------------------

--
-- Table structure for table `res`
--

CREATE TABLE `res` (
  `Did` int(11) NOT NULL,
  `CheckIn` date NOT NULL,
  `CheckOut` date NOT NULL,
  `Rid` int(11) NOT NULL,
  `TeleNo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `res`
--

INSERT INTO `res` (`Did`, `CheckIn`, `CheckOut`, `Rid`, `TeleNo`) VALUES
(1, '2017-05-01', '2017-05-10', 1, 718164462),
(2, '2017-05-01', '2017-05-04', 2, 777366982),
(3, '2017-05-03', '2017-05-05', 3, 711572422),
(4, '2017-05-11', '2017-05-12', 4, 724566710),
(5, '2017-05-12', '2017-05-16', 5, 782456172);

-- --------------------------------------------------------

--
-- Table structure for table `reservation`
--

CREATE TABLE `reservation` (
  `Rid` int(11) NOT NULL,
  `Destination` varchar(50) NOT NULL,
  `Availability` varchar(50) NOT NULL,
  `ImagePath` varchar(100) NOT NULL,
  `LodgeName` varchar(100) NOT NULL,
  `Address1` varchar(50) NOT NULL,
  `Address2` varchar(60) NOT NULL,
  `NumRooms` int(11) NOT NULL,
  `Price` int(11) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reservation`
--

INSERT INTO `reservation` (`Rid`, `Destination`, `Availability`, `ImagePath`, `LodgeName`, `Address1`, `Address2`, `NumRooms`, `Price`, `description`) VALUES
(1, 'Nuwara Eliya', 'No', 'Image/img3.jpg', 'Heritance Tea Factory', 'No:340A', 'welimada', 1, 5020, 'Born in Chavaniac, in the province of Auvergne in south central France, Lafayette came from a wealthy landowning family. He followed its martial tradition, and was commissioned an officer at age 13. He became convinced that the American cause in its revolutionary war was noble, and traveled to the New World seeking glory in it. There, he was made a major general; however, the 19-year-old was initially not given troops to command. Wounded during the Battle of Brandywine, he still managed to organize an orderly retreat. He served with distinction in the Battle of Rhode Island. In the middle of the war, he returned home to lobby for an increase in French support. He again sailed to America in 1780, and was given senior positions in the Continental Army. In 1781, troops in Virginia under his command blocked forces led by Cornwallis until other American and French forces could position themselves for the decisive Siege of Yorktown.'),
(2, 'Colombo', 'yes', 'Image/img2.jpg', 'Cinnamon Lake', 'No:130A', 'Kollupitiya', 2, 10500, 'Born in Chavaniac, in the province of Auvergne in south central France, Lafayette came from a wealthy landowning family. He followed its martial tradition, and was commissioned an officer at age 13. He became convinced that the American cause in its revolutionary war was noble, and traveled to the New World seeking glory in it. There, he was made a major general; however, the 19-year-old was initially not given troops to command. Wounded during the Battle of Brandywine, he still managed to organize an orderly retreat. He served with distinction in the Battle of Rhode Island. In the middle of the war, he returned home to lobby for an increase in French support. He again sailed to America in 1780, and was given senior positions in the Continental Army. In 1781, troops in Virginia under his command blocked forces led by Cornwallis until other American and French forces could position themselves for the decisive Siege of Yorktown.'),
(3, 'Colombo', 'yes', 'Image/img6.jpg', 'Kandalama', 'No:132', 'Rajaweediya', 2, 7000, 'Born in Chavaniac, in the province of Auvergne in south central France, Lafayette came from a wealthy landowning family. He followed its martial tradition, and was commissioned an officer at age 13. He became convinced that the American cause in its revolutionary war was noble, and traveled to the New World seeking glory in it. There, he was made a major general; however, the 19-year-old was initially not given troops to command. Wounded during the Battle of Brandywine, he still managed to organize an orderly retreat. He served with distinction in the Battle of Rhode Island. In the middle of the war, he returned home to lobby for an increase in French support. He again sailed to America in 1780, and was given senior positions in the Continental Army. In 1781, troops in Virginia under his command blocked forces led by Cornwallis until other American and French forces could position themselves for the decisive Siege of Yorktown.'),
(4, 'Colombo', 'yes', 'Image/img4.jpg', 'Villa Ocean', 'No:139B', 'Temple Rd.', 2, 6980, 'Born in Chavaniac, in the province of Auvergne in south central France, Lafayette came from a wealthy landowning family. He followed its martial tradition, and was commissioned an officer at age 13. He became convinced that the American cause in its revolutionary war was noble, and traveled to the New World seeking glory in it. There, he was made a major general; however, the 19-year-old was initially not given troops to command. Wounded during the Battle of Brandywine, he still managed to organize an orderly retreat. He served with distinction in the Battle of Rhode Island. In the middle of the war, he returned home to lobby for an increase in French support. He again sailed to America in 1780, and was given senior positions in the Continental Army. In 1781, troops in Virginia under his command blocked forces led by Cornwallis until other American and French forces could position themselves for the decisive Siege of Yorktown.'),
(5, 'Nuwara Eliya', 'yes', 'Image/img8.jpg', 'Golf Green Bungalow', 'No:123C', 'Grand Hotel Rd.', 2, 8024, 'Born in Chavaniac, in the province of Auvergne in south central France, Lafayette came from a wealthy landowning family. He followed its martial tradition, and was commissioned an officer at age 13. He became convinced that the American cause in its revolutionary war was noble, and traveled to the New World seeking glory in it. There, he was made a major general; however, the 19-year-old was initially not given troops to command. Wounded during the Battle of Brandywine, he still managed to organize an orderly retreat. He served with distinction in the Battle of Rhode Island. In the middle of the war, he returned home to lobby for an increase in French support. He again sailed to America in 1780, and was given senior positions in the Continental Army. In 1781, troops in Virginia under his command blocked forces led by Cornwallis until other American and French forces could position themselves for the decisive Siege of Yorktown.');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `firstName` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstName`, `Email`) VALUES
(1, 'nimal', 'abc@gmail.com'),
(2, 'kaniska', 'chanddabare@gmail.com'),
(3, 'rose', 'ahgammedda@gmail.com'),
(4, 'Nany', 'Elwisqrs@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blog_vote`
--
ALTER TABLE `blog_vote`
  ADD PRIMARY KEY (`vote_id`);

--
-- Indexes for table `ci_sessions`
--
ALTER TABLE `ci_sessions`
  ADD KEY `ci_sessions_timestamp` (`timestamp`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`Rid`);

--
-- Indexes for table `rentouts`
--
ALTER TABLE `rentouts`
  ADD PRIMARY KEY (`accomodationId`);

--
-- Indexes for table `res`
--
ALTER TABLE `res`
  ADD PRIMARY KEY (`Did`);

--
-- Indexes for table `reservation`
--
ALTER TABLE `reservation`
  ADD PRIMARY KEY (`Rid`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blog_vote`
--
ALTER TABLE `blog_vote`
  MODIFY `vote_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `Rid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `rentouts`
--
ALTER TABLE `rentouts`
  MODIFY `accomodationId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `res`
--
ALTER TABLE `res`
  MODIFY `Did` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `reservation`
--
ALTER TABLE `reservation`
  MODIFY `Rid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
