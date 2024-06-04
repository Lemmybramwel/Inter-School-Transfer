-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 30, 2019 at 07:07 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.1.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lemmy`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
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

CREATE TABLE `hod` (
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

CREATE TABLE `lib` (
  `roll` varchar(50) NOT NULL,
  `approve_l` varchar(50) NOT NULL
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

CREATE TABLE `login_user` (
  `Id` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `firstname` varchar(40) NOT NULL,
  `lastname` varchar(40) NOT NULL,
  `category` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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

CREATE TABLE `register` (
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `roll` varchar(50) NOT NULL,
  `sem` int(50) NOT NULL,
  `gred` varchar(200) NOT NULL,
  `nwschl` varchar(200) NOT NULL,
  `schl` varchar(200) NOT NULL,
  `year` int(50) NOT NULL,
  `roleid` varchar(200) NOT NULL,
  `refid` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`name`, `email`, `roll`, `sem`, `gred`, `nwschl`, `schl`, `year`, `roleid`, `refid`) VALUES
('Shivam', 'shv@email.com', 'B140025CS', 8, '', '', '', 4, '25', 456),
('Chandra Jyoti Dhakal', 'chandrajyotidhakal@yahoo.com', 'B140026CS', 0, '', '', '', 0, '26', 123456),
('ap', 'akj', 'bddsd', 8, '', '', '', 4, '0', 0);

-- --------------------------------------------------------

--
-- Table structure for table `sub`
--

CREATE TABLE `sub` (
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
-- Indexes for dumped tables
--

--
-- Indexes for table `lib`
--
ALTER TABLE `lib`
  ADD KEY `roll` (`roll`) USING BTREE;

--
-- Indexes for table `login_user`
--
ALTER TABLE `login_user`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`roll`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `login_user`
--
ALTER TABLE `login_user`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `lib`
--
ALTER TABLE `lib`
  ADD CONSTRAINT `lib_ibfk_1` FOREIGN KEY (`roll`) REFERENCES `register` (`roll`),
  ADD CONSTRAINT `lib_ibfk_2` FOREIGN KEY (`roll`) REFERENCES `register` (`roll`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
