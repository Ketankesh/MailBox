-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 18, 2021 at 09:07 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mailbox`
--

-- --------------------------------------------------------

--
-- Table structure for table `draft`
--

CREATE TABLE `draft` (
  `id` int(11) NOT NULL,
  `reciver` varchar(100) NOT NULL,
  `sender` varchar(100) NOT NULL,
  `subject` varchar(200) NOT NULL,
  `message` varchar(1000) NOT NULL,
  `datetime` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `draft`
--

INSERT INTO `draft` (`id`, `reciver`, `sender`, `subject`, `message`, `datetime`) VALUES
(2, 'tomer223', 'sid112@mailbox.com', 'oi oi ', 'tomar ', '2021-08-18 06:25:30'),
(3, 'aryaketan', 'sid112@mailbox.com', 'oi oi ', 'hello', '2021-08-15 18:14:22'),
(4, 'ketan@mailbox.com', 'tomer223', 'hi', 'keshav', '2021-08-16 08:36:55'),
(5, 'aryaketan', 'bhavya88', 'hi ', 'ketan', '2021-08-16 13:52:11');

-- --------------------------------------------------------

--
-- Table structure for table `inbox`
--

CREATE TABLE `inbox` (
  `id` int(11) NOT NULL,
  `reciver` varchar(100) NOT NULL,
  `sender` varchar(100) NOT NULL,
  `subject` varchar(200) NOT NULL,
  `message` varchar(1000) NOT NULL,
  `datetime` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `inbox`
--

INSERT INTO `inbox` (`id`, `reciver`, `sender`, `subject`, `message`, `datetime`) VALUES
(3, 'aryaketan', 'aryaketan', 'hii', 'asshole', '2021-08-14 16:20:05'),
(4, 'sid112@mailbox.com', 'aryaketan', 'hiii', 'sidharth', '2021-08-14 16:20:41'),
(5, 'tomer223', 'sid112@mailbox.com', 'hiii', 'tomar ', '2021-08-18 06:25:19'),
(6, 'aryaketan', 'sid112@mailbox.com', 'oi oi ', 'Keshav', '2021-08-15 18:13:50'),
(7, 'tomer223', 'sid112@mailbox.com', 'oi oi', 'hi', '2021-08-16 04:35:41'),
(8, 'sid112@mailbox.com', 'tomer223', 'what?', 'oi oi', '2021-08-16 08:36:38'),
(9, 'aryaketan', 'bhavya88', 'oi oi', 'hiii', '2021-08-16 09:10:54');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `id` int(11) NOT NULL,
  `fname` varchar(30) NOT NULL,
  `lname` varchar(30) NOT NULL,
  `username` varchar(20) NOT NULL,
  `pass` varchar(20) NOT NULL,
  `cpass` varchar(20) NOT NULL,
  `dob` varchar(20) NOT NULL,
  `sex` varchar(10) NOT NULL,
  `mobile` bigint(20) DEFAULT NULL,
  `country` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`id`, `fname`, `lname`, `username`, `pass`, `cpass`, `dob`, `sex`, `mobile`, `country`) VALUES
(1, 'keshav', 'arya', 'ketan@mailbox.com', 'poiu', 'poiu', '2021-08-23', 'Male', 9871908614, 'iran'),
(2, 'sid', 'srivastav', 'sid112@mailbox.com', 'sid11', 'sid11', '2021-08-20', 'Male', 9871908614, 'china'),
(3, 'aman', 'tomar', 'tomer223', 'tomer', 'tomer', '2011-08-22', 'Male', 9871908614, 'Australia'),
(5, 'ketan', 'arya', 'aryaketan', 'keshav', 'keshav', '2021-08-22', 'Male', 9871908614, 'iran'),
(7, 'Bhavya', 'Arya', 'bhavya88', 'bhavya', 'bhavya', '1999-07-08', 'Female', 8368885297, 'nepal'),
(9, 'himani', 'arya', 'himani', 'himani', 'himani', '2021-08-10', 'Female', 87778997, 'china'),
(10, 'meenakshi', 'arya', 'aryameeku', '12345', '12345', '2021-08-30', 'Female', 8368885297, 'iran');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `draft`
--
ALTER TABLE `draft`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `inbox`
--
ALTER TABLE `inbox`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `draft`
--
ALTER TABLE `draft`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `inbox`
--
ALTER TABLE `inbox`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
