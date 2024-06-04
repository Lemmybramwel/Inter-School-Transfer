-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 23, 2018 at 10:58 AM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `dummy_test`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `roll` varchar(50) NOT NULL,
  `approve` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`roll`, `approve`) VALUES
('B140026CS', 'yes'),
('B140025CS', 'yes'),
('bddsd', 'no');

-- --------------------------------------------------------

--
-- Table structure for table `hod`
--

CREATE TABLE IF NOT EXISTS `hod` (
  `roll` varchar(50) NOT NULL,
  `approve_h` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hod`
--

INSERT INTO `hod` (`roll`, `approve_h`) VALUES
('B140026CS', 'yes'),
('B140025CS', 'yes'),
('bddsd', 'no');

-- --------------------------------------------------------

--
-- Table structure for table `lib`
--

CREATE TABLE IF NOT EXISTS `lib` (
  `roll` varchar(50) NOT NULL,
  `approve_l` varchar(50) NOT NULL,
  KEY `roll` (`roll`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lib`
--

INSERT INTO `lib` (`roll`, `approve_l`) VALUES
('B140026CS', 'yes'),
('B140025CS', 'yes'),
('bddsd', 'yes');

-- --------------------------------------------------------

--
-- Table structure for table `login_user`
--

CREATE TABLE IF NOT EXISTS `login_user` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `firstname` varchar(40) NOT NULL,
  `lastname` varchar(40) NOT NULL,
  `category` varchar(40) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `login_user`
--

INSERT INTO `login_user` (`Id`, `username`, `password`, `firstname`, `lastname`, `category`) VALUES
(3, 'hod', 'headofdepartment', 'Sangram ', 'Ray', 'hod'),
(4, 'admin', 'fiaa', 'Nurujaman', '', 'admin'),
(5, 'lib', 'kic', 'Swapan', 'Manna', 'library'),
(7, 'b140026cs', 'b140026', 'Chandra', 'Dhakal', 'student'),
(8, 'b140058me', 'b140058', 'Anurag', 'Piyush', 'student'),
(9, 'b140025cs', 'b140025', 'Shivam', 'Kumar', 'student');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE IF NOT EXISTS `register` (
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `roll` varchar(50) NOT NULL,
  `branch` varchar(50) NOT NULL,
  `sem` int(50) NOT NULL,
  `year` int(50) NOT NULL,
  `roleid` int(50) NOT NULL,
  `sgpa` varchar(50) NOT NULL,
  `backlog` varchar(50) NOT NULL,
  `refid` int(50) NOT NULL,
  PRIMARY KEY (`roll`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`name`, `email`, `roll`, `branch`, `sem`, `year`, `roleid`, `sgpa`, `backlog`, `refid`) VALUES
('Shivam', 'shv@email.com', 'B140025CS', 'cse', 8, 4, 25, '7', 'no', 456),
('Chandra Jyoti Dhakal', 'chandrajyotidhakal@yahoo.com', 'B140026CS', 'cse', 0, 0, 26, '7.8', 'no', 123456),
('ap', 'akj', 'bddsd', 'me', 8, 4, 0, '7', 'yes', 0);

-- --------------------------------------------------------

--
-- Table structure for table `sub`
--

CREATE TABLE IF NOT EXISTS `sub` (
  `roll` varchar(50) NOT NULL,
  `subname` varchar(50) NOT NULL,
  `subcode` varchar(50) NOT NULL,
  `credit` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sub`
--

INSERT INTO `sub` (`roll`, `subname`, `subcode`, `credit`) VALUES
('B140026CS', 'cs1', 'cs1001', 3),
('B140026CS', 'cs2', 'cs1002', 3),
('B140026CS', 'cs3', 'cs1003', 3),
('B140026CS', 'cs4', 'cs1004', 3),
('B140025CS', '5', '1', 4),
('B140025CS', '5', '1', 4),
('B140025CS', '5', '1', 4),
('B140025CS', '5', '1', 4),
('bddsd', 'fvf', 'fvfc', 7),
('bddsd', 'ggggggggggg', 'bvfbgb', 6),
('bddsd', 'ljljl', 'fvf', 9),
('bddsd', 'sljl', 'de;', 9);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `lib`
--
ALTER TABLE `lib`
  ADD CONSTRAINT `lib_ibfk_1` FOREIGN KEY (`roll`) REFERENCES `register` (`roll`),
  ADD CONSTRAINT `lib_ibfk_2` FOREIGN KEY (`roll`) REFERENCES `register` (`roll`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
