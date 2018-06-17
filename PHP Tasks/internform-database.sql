-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 17, 2018 at 01:59 PM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `internform`
--

-- --------------------------------------------------------

--
-- Table structure for table `date`
--

CREATE TABLE `date` (
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `pwd` varchar(50) NOT NULL,
  `dateS` date NOT NULL,
  `dateE` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `date`
--

INSERT INTO `date` (`name`, `email`, `pwd`, `dateS`, `dateE`) VALUES
('manoj', 'manoj@gmail.com', '789456', '2018-06-05', '0000-00-00'),
('Sweety', 'sweety@gmail.com', '456456', '2018-08-23', '0000-00-00'),
('Sweety', 'sweety@gmail.com', '456456', '2018-08-23', '0000-00-00'),
('Jaya Prakash', 'jp@yahoo.com', '741741', '2018-10-18', '0000-00-00'),
('veeresh', 'veeru@hotmail.com', '789789', '2018-06-16', '0000-00-00'),
('pandu', 'pandu@gmail.com', '123456', '2018-07-05', '2018-09-05'),
('pandu', 'pandu@gmail.com', '123456', '2018-09-15', '2018-11-12'),
('geethika', 'geethika@gmail.com', '789789', '2018-10-17', '2018-11-20');

-- --------------------------------------------------------

--
-- Table structure for table `details`
--

CREATE TABLE `details` (
  `id` int(11) NOT NULL,
  `Name` varchar(50) COLLATE latin1_bin NOT NULL,
  `Phone` int(15) NOT NULL,
  `Email` varchar(50) COLLATE latin1_bin NOT NULL,
  `Password` varchar(50) COLLATE latin1_bin NOT NULL,
  `Gender` varchar(10) COLLATE latin1_bin NOT NULL,
  `Course` varchar(50) COLLATE latin1_bin NOT NULL,
  `Date_start` date NOT NULL,
  `Date_end` date NOT NULL,
  `Class_duration` int(10) NOT NULL,
  `Shift` varchar(50) COLLATE latin1_bin NOT NULL,
  `City` varchar(50) COLLATE latin1_bin NOT NULL,
  `File` blob NOT NULL,
  `File_type` varchar(10) COLLATE latin1_bin NOT NULL,
  `File_size` int(10) NOT NULL,
  `Comments` longtext COLLATE latin1_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_bin;

--
-- Dumping data for table `details`
--

INSERT INTO `details` (`id`, `Name`, `Phone`, `Email`, `Password`, `Gender`, `Course`, `Date_start`, `Date_end`, `Class_duration`, `Shift`, `City`, `File`, `File_type`, `File_size`, `Comments`) VALUES
(1, 'Geethika', 2147483647, 'geethika@gmail.com', '46546465', 'female', 'php', '2018-05-06', '2018-12-06', 2, 'Morning', 'Hyderabad', 0x34363132342d31313133393432315f313539303535333031343535373130325f323036333134323933353037383833363636385f6e2e6a7067, 'image/jpeg', 167570, ''),
(9, 'Manoj Enumula', 2147483647, 'manoje@gmail.com', '74185212', 'male', 'php', '2018-12-05', '2018-12-06', 2, 'Morning', 'Hyderabad', 0x32393439362d494d475f32303135313230335f3037343835312e6a7067, 'image/jpeg', 200743, '');

-- --------------------------------------------------------

--
-- Table structure for table `form1`
--

CREATE TABLE `form1` (
  `id` int(5) NOT NULL,
  `fname` varchar(55) NOT NULL,
  `lname` varchar(25) DEFAULT NULL,
  `uname` varchar(55) DEFAULT NULL,
  `email` varchar(65) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `form1`
--

INSERT INTO `form1` (`id`, `fname`, `lname`, `uname`, `email`, `password`) VALUES
(1, 'Manoj', 'Enumula', 'ManuSwee', 'manoje4897@gmail.com', '789789'),
(5, 'Geethika', 'Poludasu', 'Sweety21097', 'geethika@gmail.com', '41852');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `details`
--
ALTER TABLE `details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `form1`
--
ALTER TABLE `form1`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `details`
--
ALTER TABLE `details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `form1`
--
ALTER TABLE `form1`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
