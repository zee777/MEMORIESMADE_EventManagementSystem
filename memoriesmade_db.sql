-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 18, 2017 at 11:26 PM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `memoriesmade_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `userID` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `firstName` varchar(50) NOT NULL,
  `lastName` varchar(50) NOT NULL,
  `image` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`userID`, `username`, `password`, `firstName`, `lastName`, `image`) VALUES
(1, 'admin_djpedida', 'margaux4', 'Desiree Joy', 'Pedida', ''),
(2, 'admin_ksadorico', 'margaux1', 'Karen Shane', 'Adorico', ''),
(3, 'admin_mgjamison', 'margaux2', 'Mary Grace', 'Jamison', ''),
(4, 'admin_zlavapiz', 'margaux3', 'Zimrose', 'Lavapiz', '');

-- --------------------------------------------------------

--
-- Table structure for table `createevent`
--

CREATE TABLE `createevent` (
  `id` int(100) NOT NULL,
  `event_title` varchar(100) DEFAULT NULL,
  `location` varchar(100) DEFAULT NULL,
  `start_date` varchar(20) DEFAULT NULL,
  `start_time` varchar(10) DEFAULT NULL,
  `end_date` varchar(20) DEFAULT NULL,
  `end_time` varchar(10) DEFAULT NULL,
  `event_description` text,
  `ticket_price` int(100) DEFAULT NULL,
  `paid_ticket` int(100) DEFAULT NULL,
  `eventtype` varchar(100) NOT NULL,
  `uID` int(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `createevent`
--

INSERT INTO `createevent` (`id`, `event_title`, `location`, `start_date`, `start_time`, `end_date`, `end_time`, `event_description`, `ticket_price`, `paid_ticket`, `eventtype`, `uID`) VALUES
(1, 'IT Conference', 'IC Lab 2', '11/17/17', '1:00PM', '11/17/17', '4:00PM', 'All IT students are required to join', NULL, NULL, '', 0),
(6, 'MARGAUX Meeting', 'IC Lab 2', '11/18/17', '9:00AM', '11/18/17', '7:00PM', 'Mag finalize sa tanan huhuuhu', NULL, NULL, '', 0),
(5, 'ASD Class', 'IC Lab 2', '11/17/17', '7:00AM', '11/17/17', '9:30AM', 'All students must be present in class', NULL, NULL, '', 0),
(7, 'Sleepover ng Margaux', 'Badit\'s House', '11/18/17', '7:00AM', '11/19/17', '4:00PM', 'Mangadto dapat tanan', NULL, NULL, '', 0),
(12, 'Taylor Swift Concert', 'USEP Gym', '2017-11-19', '19:00', '2017-11-19', '01:00', 'Reputation out now', 10000, 1, 'Music Festivals', 0),
(13, 'EXO Concert', 'USEP Gym', '2017-11-19', '09:00', '2017-11-20', '12:00', 'Come and witness the beauty of EXO', 50000, 3, 'Music Festivals', 0),
(49, 'B', '', '', '', '', '', '', 0, 0, 'Music Festivals', 64),
(48, 'PSITS', 'Ambot ', '', '', '', '', 'Dula dula ni siya', 150, 200, 'Music Festivals', 64);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `userID` int(100) NOT NULL,
  `firstName` varchar(20) NOT NULL,
  `lastName` varchar(20) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(16) NOT NULL,
  `event_title` varchar(100) NOT NULL,
  `location` varchar(100) NOT NULL,
  `start_date` varchar(20) NOT NULL,
  `start_time` varchar(10) NOT NULL,
  `end_date` varchar(20) NOT NULL,
  `end_time` varchar(10) NOT NULL,
  `event_description` text NOT NULL,
  `ticket_price` int(100) NOT NULL,
  `paid_ticket` int(100) NOT NULL,
  `eventtype` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userID`, `firstName`, `lastName`, `username`, `password`, `event_title`, `location`, `start_date`, `start_time`, `end_date`, `end_time`, `event_description`, `ticket_price`, `paid_ticket`, `eventtype`) VALUES
(1, 'GLevinzon', 'Dapal', 'glevin', 'glevinzon', '', '', '', '', '', '', '', 0, 0, ''),
(68, 'Karen', 'Adorico', 'AkoSiKayin', '123456890', '', '', '', '', '', '', '', 0, 0, ''),
(64, 'Des', 'Peds', 'DesPeds', '1234567890', '', '', '', '', '', '', '', 0, 0, ''),
(67, 'Grasya', 'Jamison', 'Jameson', 'sehun143', '', '', '', '', '', '', '', 0, 0, '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`userID`);

--
-- Indexes for table `createevent`
--
ALTER TABLE `createevent`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `userID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `createevent`
--
ALTER TABLE `createevent`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `userID` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
