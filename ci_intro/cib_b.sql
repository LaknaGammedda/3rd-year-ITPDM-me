-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 10, 2017 at 04:06 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cib&b`
--

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
-- Table structure for table `res`
--

CREATE TABLE `res` (
  `Did` int(11) NOT NULL,
  `CheckIn` date NOT NULL,
  `CheckOut` date NOT NULL,
  `Rid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `res`
--

INSERT INTO `res` (`Did`, `CheckIn`, `CheckOut`, `Rid`) VALUES
(1, '2017-05-01', '2017-05-10', 1),
(2, '2017-05-01', '2017-05-04', 2);

-- --------------------------------------------------------

--
-- Table structure for table `reservation`
--

CREATE TABLE `reservation` (
  `Rid` int(11) NOT NULL,
  `Destination` varchar(50) NOT NULL,
  `Availability` varchar(50) NOT NULL,
  `ImagePath` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reservation`
--

INSERT INTO `reservation` (`Rid`, `Destination`, `Availability`, `ImagePath`) VALUES
(1, 'Nuwaraeliya', 'reserved', 'Image/img4.jpg'),
(2, 'Colombo', 'yes', 'Image/img2.jpg');

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
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`Rid`);

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
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `Rid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `res`
--
ALTER TABLE `res`
  MODIFY `Did` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `reservation`
--
ALTER TABLE `reservation`
  MODIFY `Rid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
