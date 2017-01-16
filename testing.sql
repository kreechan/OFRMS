-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 16, 2017 at 08:23 PM
-- Server version: 10.1.10-MariaDB
-- PHP Version: 7.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `testing`
--

-- --------------------------------------------------------

--
-- Table structure for table `building`
--

CREATE TABLE `building` (
  `build_id` int(20) NOT NULL,
  `build_name` varchar(200) NOT NULL,
  `build_description` varchar(200) NOT NULL,
  `bldg_pic` longblob NOT NULL,
  `lastmodified` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `flag` int(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `building`
--

INSERT INTO `building` (`build_id`, `build_name`, `build_description`, `bldg_pic`, `lastmodified`, `flag`) VALUES
(1, 'Bunzel', 'this is it pancit\r\n1', '', '2017-01-16 17:18:18', 0),
(2, 'LRC', 'MR', '', '2017-01-13 12:41:03', 0),
(3, 'MR', 'upper ground floor', '', '2017-01-13 12:41:09', 1),
(4, 'SAFAD', 'with 2 active hall', '', '2017-01-13 12:39:56', 1),
(5, 'Nursing Building', 'Nursing Desc test', '', '2017-01-13 12:37:23', 1),
(6, 'New Bldg', 'new ssss', '', '2017-01-16 16:15:30', 1),
(7, 'asd', '222ssaas', '', '2017-01-16 17:23:00', 1);

-- --------------------------------------------------------

--
-- Table structure for table `hall`
--

CREATE TABLE `hall` (
  `hall_id` int(50) NOT NULL,
  `hall_name` varchar(50) NOT NULL,
  `hall_buildloc` int(50) NOT NULL,
  `hall_description` varchar(50) NOT NULL,
  `hall_pic` longblob NOT NULL,
  `hall_price` double NOT NULL,
  `hall_lastmodified` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `hall_approver` varchar(50) NOT NULL,
  `reservation__sched` varchar(200) NOT NULL,
  `flag` int(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hall`
--

INSERT INTO `hall` (`hall_id`, `hall_name`, `hall_buildloc`, `hall_description`, `hall_pic`, `hall_price`, `hall_lastmodified`, `hall_approver`, `reservation__sched`, `flag`) VALUES
(4, 'trialNoError', 6, 'Hope this time its correct2', '', 9022, '2017-01-16 19:10:38', '', '', 0),
(14, 'canteen', 4, 'this is for the event sssssa', '', 35022221, '2017-01-16 19:10:31', '', '', 0),
(17, 'asd', 2, 'desc', '', 33, '2017-01-16 18:10:24', '', '', 1),
(18, '123', 3, '123s', '', 1123, '2017-01-16 18:31:28', '', '', 1),
(22, 'nn', 1, 'test', '', 22, '2017-01-16 18:47:25', '', '', 1),
(25, '12312', 4, '3123123', '', 123123, '2017-01-16 19:01:59', '', '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `temp_users`
--

CREATE TABLE `temp_users` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `key` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `temp_users`
--

INSERT INTO `temp_users` (`id`, `email`, `key`) VALUES
(1, 'john@doe.com', '22');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `idNumber` int(50) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `dept` varchar(50) NOT NULL,
  `position` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `flag` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `idNumber`, `fname`, `lname`, `dept`, `position`, `password`, `email`, `flag`) VALUES
(1, 36372638, 'jane', 'Doe', 'Administration', 'Secretary', '21232f297a57a5a743894a0e4a801fc3', 'john@doe.com', 0),
(2, 391625, 'joan', 'Gabuya', 'DCIS', 'student', '21232f297a57a5a743894a0e4a801fc3', 'jmag.school@gmail.com', 0),
(6, 12106988, 'trial', 'asdfasd', 'CAS', 'student', 'admin', 'fasfd@gmail.com', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `building`
--
ALTER TABLE `building`
  ADD PRIMARY KEY (`build_id`);

--
-- Indexes for table `hall`
--
ALTER TABLE `hall`
  ADD PRIMARY KEY (`hall_id`);

--
-- Indexes for table `temp_users`
--
ALTER TABLE `temp_users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `idNumber` (`idNumber`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `building`
--
ALTER TABLE `building`
  MODIFY `build_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `hall`
--
ALTER TABLE `hall`
  MODIFY `hall_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
--
-- AUTO_INCREMENT for table `temp_users`
--
ALTER TABLE `temp_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
