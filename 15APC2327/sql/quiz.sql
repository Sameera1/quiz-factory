-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 02, 2019 at 03:56 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `quiz`
--

-- --------------------------------------------------------

--
-- Table structure for table `answer`
--

CREATE TABLE `answer` (
  `aID` int(3) NOT NULL,
  `answer` varchar(100) NOT NULL,
  `ansID` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `answer`
--

INSERT INTO `answer` (`aID`, `answer`, `ansID`) VALUES
(1, 'Cathay Airways', '1'),
(2, 'Singappore Airlines', '1'),
(3, 'Air New Zealand', '1'),
(4, 'Emirates', '1'),
(5, 'Quatar Airways', '1'),
(6, 'George Owell', '2'),
(7, 'Mark Twain', '2'),
(8, 'J.K Rowling', '2'),
(9, 'Leo Tolstoy', '2'),
(10, 'Ryder Haggard', '2'),
(11, 'Exo\'rdium', '3'),
(12, 'The Lost Planet', '3'),
(13, 'Sweetest Xiu', '3'),
(14, 'Exo\'luxiun', '3'),
(15, 'The Lost world ', '3'),
(16, 'Japan', '4'),
(17, 'Belugas', '4'),
(18, 'Iceland', '4'),
(19, 'Norway', '4'),
(20, 'China', '4'),
(21, 'TVX', '5'),
(22, 'Shinee', '5'),
(23, 'BTS', '5'),
(24, 'SNSD', '5'),
(25, 'EXO', '5');

-- --------------------------------------------------------

--
-- Table structure for table `question`
--

CREATE TABLE `question` (
  `qID` int(3) NOT NULL,
  `question` varchar(200) NOT NULL,
  `ansID` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `question`
--

INSERT INTO `question` (`qID`, `question`, `ansID`) VALUES
(1, 'According to Forbes,what is the best air line service of the world in 2018?', 3),
(2, 'Who is the writer of the book \"Anna Karenina\"?', 9),
(3, 'What was the name of EXO\'s first solo concert?', 15),
(4, 'What country kills the most whales in the world?', 16),
(5, 'Who has won the highest number of daesang awards in kpop?', 25);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `answer`
--
ALTER TABLE `answer`
  ADD PRIMARY KEY (`aID`);

--
-- Indexes for table `question`
--
ALTER TABLE `question`
  ADD PRIMARY KEY (`qID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
