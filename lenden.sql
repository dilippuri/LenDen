-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 13, 2016 at 03:50 PM
-- Server version: 5.5.46-0ubuntu0.14.04.2
-- PHP Version: 5.5.9-1ubuntu4.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `lenden`
--

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE IF NOT EXISTS `event` (
  `eid` int(15) NOT NULL AUTO_INCREMENT,
  `id` varchar(15) NOT NULL,
  `spenid` varchar(15) NOT NULL,
  `amount` int(5) NOT NULL,
  `description` varchar(20) NOT NULL,
  PRIMARY KEY (`eid`,`id`,`spenid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`eid`, `id`, `spenid`, `amount`, `description`) VALUES
(1, '1', '2', 50, 'Juice'),
(1, '3', '2', 50, 'Juice'),
(1, '4', '2', 50, 'Juice'),
(2, '2', '5', 100, 'Lunch'),
(2, '3', '5', 100, 'Lunch'),
(2, '4', '5', 100, 'Lunch'),
(3, '2', '3', 200, 'Synapse'),
(3, '5', '3', 200, 'Synapse');

-- --------------------------------------------------------

--
-- Table structure for table `group1`
--

CREATE TABLE IF NOT EXISTS `group1` (
  `gid` int(15) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `adminid` varchar(15) NOT NULL,
  PRIMARY KEY (`gid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=31 ;

--
-- Dumping data for table `group1`
--

INSERT INTO `group1` (`gid`, `name`, `adminid`) VALUES
(1, 'gn1', '2'),
(2, 'gn2', '5'),
(3, 'gn3', '3'),
(10, 'gp4', '2'),
(11, '', '2'),
(12, '', '2'),
(13, '', '2'),
(14, '', '2'),
(15, '', '2'),
(16, 'hithis', '1'),
(17, 'newnewenw', '1'),
(18, '', '1'),
(19, 'namememem', '1'),
(20, 'gr1', '2'),
(21, '', '2'),
(22, '', '2'),
(23, ' xvn', '2'),
(24, ' xvn', '2'),
(25, 'dnm', '2'),
(26, 's', '2'),
(27, 's', '2'),
(28, 'dd', '2'),
(29, 'c', '2'),
(30, 'c', '2');

-- --------------------------------------------------------

--
-- Table structure for table `groupnid`
--

CREATE TABLE IF NOT EXISTS `groupnid` (
  `gid` varchar(15) NOT NULL,
  `id` varchar(15) NOT NULL,
  PRIMARY KEY (`gid`,`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `groupnid`
--

INSERT INTO `groupnid` (`gid`, `id`) VALUES
('1', '1'),
('1', '2'),
('1', '3'),
('1', '4'),
('10', '2'),
('11', '2'),
('16', '1'),
('17', '1'),
('18', '1'),
('19', '1'),
('2', '2'),
('2', '3'),
('2', '4'),
('2', '5'),
('20', '2'),
('23', '2'),
('25', '2'),
('26', '2'),
('28', '2'),
('29', '2'),
('3', '2'),
('3', '3'),
('3', '5'),
('7', ''),
('8', '1'),
('9', '5');

-- --------------------------------------------------------

--
-- Table structure for table `transection`
--

CREATE TABLE IF NOT EXISTS `transection` (
  `tid` int(15) NOT NULL AUTO_INCREMENT,
  `id1` varchar(15) NOT NULL,
  `id2` varchar(15) NOT NULL,
  `lenn` int(5) NOT NULL,
  `denn` int(5) NOT NULL,
  PRIMARY KEY (`tid`,`id1`,`id2`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `transection`
--

INSERT INTO `transection` (`tid`, `id1`, `id2`, `lenn`, `denn`) VALUES
(1, '1', '2', 0, 50),
(2, '2', '1', 50, 0),
(3, '2', '3', 50, 200),
(4, '2', '4', 50, 0),
(5, '2', '5', 0, 100),
(6, '3', '2', 200, 50),
(7, '3', '5', 100, 200),
(8, '4', '2', 0, 50),
(9, '4', '5', 0, 100),
(10, '5', '2', 100, 0),
(11, '5', '3', 100, 200),
(12, '5', '4', 100, 0);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `uid` int(15) NOT NULL AUTO_INCREMENT,
  `name` varchar(15) NOT NULL,
  `password` varchar(15) NOT NULL,
  `pic` varchar(25) NOT NULL,
  PRIMARY KEY (`uid`),
  KEY `uid` (`uid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`uid`, `name`, `password`, `pic`) VALUES
(1, 'A', 'ap', ''),
(2, 'D', 'dp', ''),
(3, 'G', 'gp', ''),
(4, 'H', 'hp', ''),
(5, 'M', 'mp', '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
