-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 19, 2015 at 06:23 AM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `dabawala`
--

-- --------------------------------------------------------

--
-- Table structure for table `catlog2`
--

CREATE TABLE IF NOT EXISTS `catlog2` (
`cid` int(90) NOT NULL,
  `name` varchar(90) NOT NULL,
  `path` varchar(90) NOT NULL,
  `cost` int(90) NOT NULL,
  `typ1` varchar(90) NOT NULL,
  `type2` varchar(90) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `catlog2`
--

INSERT INTO `catlog2` (`cid`, `name`, `path`, `cost`, `typ1`, `type2`) VALUES
(1, 'BUTTER CHICKEN', 'images/Chicken_makhani.jpg', 150, 'CHINISE', 'NON VEG'),
(2, 'VEG THALI', 'images/food-thali1.jpg', 100, 'INDIAN', 'VEG'),
(3, 'NON-VEG THALI', 'images/nonveg thali.jpg', 125, 'INDIAN', 'NON VEG'),
(4, 'CHICKEN FRY', 'images/tandoori-chicken-recipe.jpg', 180, 'CHINISE', 'NON VEG'),
(5, 'TANDOORI', 'images/tandoori.jpg', 160, 'CHINISE', 'NON VEG');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
`uid` int(90) NOT NULL,
  `username` varchar(90) NOT NULL,
  `password` varchar(90) NOT NULL,
  `status` tinyint(1) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`uid`, `username`, `password`, `status`) VALUES
(1, 'kevin', 'dsouza', 1),
(2, 'rohit', 'mane', 1),
(3, 'larry', 'dcruz', 1),
(4, 'ameya', 'nadkarni', 0);

-- --------------------------------------------------------

--
-- Table structure for table `userdetails`
--

CREATE TABLE IF NOT EXISTS `userdetails` (
  `first_name` varchar(30) NOT NULL,
  `last_name` varchar(30) NOT NULL,
  `contact_no` varchar(11) NOT NULL,
  `email_id` varchar(30) NOT NULL,
  `address` varchar(1000) NOT NULL,
  `user_name` varchar(30) NOT NULL,
  `password` varchar(20) NOT NULL,
  `last_login` varchar(30) NOT NULL,
  `user_type` varchar(30) NOT NULL,
  `insert_date` varchar(30) NOT NULL,
  `insert_by` varchar(30) NOT NULL,
  `update_date` varchar(30) NOT NULL,
  `update_by` varchar(30) NOT NULL,
  `user_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userdetails`
--

INSERT INTO `userdetails` (`first_name`, `last_name`, `contact_no`, `email_id`, `address`, `user_name`, `password`, `last_login`, `user_type`, `insert_date`, `insert_by`, `update_date`, `update_by`, `user_id`) VALUES
('Amey', 'nadkarni', '8999945485', 'amey@gmail.com', 'New Link Road, Motilal Nagar 3,', 'sfit', 'sfit', '', '', '17/10/15 : 08:04:09', 'Web Interface', '17/10/15 : 08:04:09', 'Web Interface', 0),
('abcd', 'pqrs', '8999945485', 'kevin@gmail.com', 'New Link Road', 'kevin', 'kevin123', '', '', '19/10/15 : 05:55:17', 'Web Interface', '19/10/15 : 05:55:17', 'Web Interface', 0),
('Rohit', 'Mane', '9819557619', 'passion_k1993@yahoo.in', 'New Link Road', 'kevin', 'asdf123', '', '', '17/10/15 : 07:48:53', 'Web Interface', '17/10/15 : 07:48:53', 'Web Interface', 0),
('shahrukh', 'patil', '87654346', 'srk@srk.com', 'mannat', 'srk', 'srk123', '', '', '17/10/15 : 08:08:58', 'Web Interface', '17/10/15 : 08:08:58', 'Web Interface', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `catlog2`
--
ALTER TABLE `catlog2`
 ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
 ADD PRIMARY KEY (`uid`);

--
-- Indexes for table `userdetails`
--
ALTER TABLE `userdetails`
 ADD UNIQUE KEY `email_id` (`email_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `catlog2`
--
ALTER TABLE `catlog2`
MODIFY `cid` int(90) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
MODIFY `uid` int(90) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
