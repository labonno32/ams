-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 27, 2019 at 08:23 PM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `ams`
--

-- --------------------------------------------------------

--
-- Table structure for table `attendance`
--

CREATE TABLE IF NOT EXISTS `attendance` (
`id` int(2) NOT NULL,
  `studentid` varchar(64) COLLATE utf8_bin NOT NULL,
  `subid` varchar(32) COLLATE utf8_bin NOT NULL,
  `datetoday` varchar(16) COLLATE utf8_bin NOT NULL,
  `presence` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `attendance`
--

INSERT INTO `attendance` (`id`, `studentid`, `subid`, `datetoday`, `presence`) VALUES
(1, 'CS102030', 'CSE103', '27/07/2019', 1),
(2, 'CS102031', 'CSE103', '27/07/2019', 0),
(3, 'CS102032', 'CSE103', '27/07/2019', 0);

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE IF NOT EXISTS `student` (
`id` smallint(10) NOT NULL,
  `sname` varchar(64) COLLATE utf8_bin NOT NULL,
  `semail` varchar(32) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `studentid` varchar(20) COLLATE utf8_bin NOT NULL,
  `coursesTaken` varchar(128) COLLATE utf8_bin DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `sname`, `semail`, `studentid`, `coursesTaken`) VALUES
(1, 'Akkass Doe', 'Student1doe@gmail.com', 'CS102030', 'CSE101,CSE102,CSE103,CSE201'),
(2, 'Kashem Doe', 'Student2doe@gmail.com', 'CS102031', 'CSE101,CSE102,CSE103,CSE201'),
(3, 'Zorina Doe', 'Student3doe@gmail.com', 'CS102032', 'CSE101,CSE102,CSE103,CSE201'),
(4, 'Abul Doe', 'Student4doe@gmail.com', 'CS102033', 'CSE101,CSE102,CSE103,CSE201');

-- --------------------------------------------------------

--
-- Table structure for table `subjects`
--

CREATE TABLE IF NOT EXISTS `subjects` (
`id` int(10) NOT NULL,
  `subname` varchar(128) COLLATE utf8_bin NOT NULL,
  `subid` varchar(32) COLLATE utf8_bin NOT NULL,
  `assignedto` varchar(32) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `subjects`
--

INSERT INTO `subjects` (`id`, `subname`, `subid`, `assignedto`) VALUES
(1, 'Algorithm', 'CSE103', 't001'),
(2, 'Programming', 'CSE101', 't001'),
(3, 'Programming Lab', 'CSE102', 't002');

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

CREATE TABLE IF NOT EXISTS `teacher` (
`id` tinyint(2) unsigned NOT NULL,
  `tname` varchar(32) COLLATE utf8_bin NOT NULL,
  `temail` varchar(32) COLLATE utf8_bin NOT NULL,
  `tpass` varchar(32) COLLATE utf8_bin NOT NULL,
  `tid` varchar(64) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `teacher`
--

INSERT INTO `teacher` (`id`, `tname`, `temail`, `tpass`, `tid`) VALUES
(1, 'Labonno Jannat Doe', 'teacher1@gmail.com', 'pass', 't001'),
(2, 'Rohim Doe', 'rohimdoe@gmail.com', 'pass2', 't002'),
(3, 'Korim Doe', 'Korimdoe@gmail.com', 'pass3', 't003');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `attendance`
--
ALTER TABLE `attendance`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
 ADD UNIQUE KEY `id` (`id`,`studentid`);

--
-- Indexes for table `subjects`
--
ALTER TABLE `subjects`
 ADD UNIQUE KEY `id` (`id`,`subid`);

--
-- Indexes for table `teacher`
--
ALTER TABLE `teacher`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `attendance`
--
ALTER TABLE `attendance`
MODIFY `id` int(2) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
MODIFY `id` smallint(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `subjects`
--
ALTER TABLE `subjects`
MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `teacher`
--
ALTER TABLE `teacher`
MODIFY `id` tinyint(2) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
