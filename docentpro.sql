-- phpMyAdmin SQL Dump
-- version 4.1.6
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 24, 2019 at 01:59 AM
-- Server version: 5.5.36
-- PHP Version: 5.4.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `docentpro`
--

-- --------------------------------------------------------

--
-- Table structure for table `addbook`
--

CREATE TABLE IF NOT EXISTS `addbook` (
  `bookid` int(50) NOT NULL AUTO_INCREMENT,
  `bookname` varchar(50) NOT NULL,
  `author` varchar(50) NOT NULL,
  `course` varchar(50) NOT NULL,
  `details` varchar(50) NOT NULL,
  PRIMARY KEY (`bookid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `addbook`
--

INSERT INTO `addbook` (`bookid`, `bookname`, `author`, `course`, `details`) VALUES
(1, 'aaa', 'xxx', 'ff', 'gg'),
(2, 'sdfghj', 'dfghj', 'bba', 'rtyuij');

-- --------------------------------------------------------

--
-- Table structure for table `addbusdetails`
--

CREATE TABLE IF NOT EXISTS `addbusdetails` (
  `route` varchar(50) NOT NULL,
  `rate` int(50) NOT NULL,
  `route_id` int(50) NOT NULL AUTO_INCREMENT,
  `stud_id` varchar(50) NOT NULL,
  PRIMARY KEY (`route_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Dumping data for table `addbusdetails`
--

INSERT INTO `addbusdetails` (`route`, `rate`, `route_id`, `stud_id`) VALUES
('m-k', 652, 3, '4'),
('i-m', 889, 5, '8'),
('i-m', 889, 6, '8'),
('q-q', 22, 7, '8'),
('m-m', 889, 8, '8'),
('d-d', 888, 9, '8'),
('d-d', 888, 10, '8'),
('-', 0, 11, '13'),
('-', 0, 12, '13'),
('-', 0, 13, '13'),
('-', 0, 14, '14'),
('-', 800, 15, '17'),
('g-j', 44, 16, '17');

-- --------------------------------------------------------

--
-- Table structure for table `addcourse`
--

CREATE TABLE IF NOT EXISTS `addcourse` (
  `course_id` int(4) NOT NULL AUTO_INCREMENT,
  `dept_id` varchar(50) NOT NULL,
  `course_name` varchar(50) NOT NULL,
  `years` int(20) NOT NULL,
  PRIMARY KEY (`course_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `addcourse`
--

INSERT INTO `addcourse` (`course_id`, `dept_id`, `course_name`, `years`) VALUES
(3, '3', 'bsc', 3),
(4, '6', 'bca 1st', 3),
(5, '3', 'mca', 5);

-- --------------------------------------------------------

--
-- Table structure for table `adddepartment`
--

CREATE TABLE IF NOT EXISTS `adddepartment` (
  `dept_id` int(50) NOT NULL AUTO_INCREMENT,
  `dept_name` varchar(50) NOT NULL,
  PRIMARY KEY (`dept_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `adddepartment`
--

INSERT INTO `adddepartment` (`dept_id`, `dept_name`) VALUES
(3, 'computer application'),
(5, 'b com'),
(6, 'bca'),
(7, 'bba');

-- --------------------------------------------------------

--
-- Table structure for table `addform`
--

CREATE TABLE IF NOT EXISTS `addform` (
  `img_id` int(50) NOT NULL AUTO_INCREMENT,
  `img_name` varchar(50) NOT NULL,
  `image` varchar(50) NOT NULL,
  PRIMARY KEY (`img_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `addform`
--

INSERT INTO `addform` (`img_id`, `img_name`, `image`) VALUES
(2, 'reg', '2017-09-08-09-19-33-816.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `addpersonal`
--

CREATE TABLE IF NOT EXISTS `addpersonal` (
  `stud_id` int(50) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `dob` date NOT NULL,
  `address` varchar(50) NOT NULL,
  `contact` int(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `mname` varchar(50) NOT NULL,
  `gurdian` varchar(50) NOT NULL,
  `occupation` varchar(50) NOT NULL,
  `gaddress` varchar(50) NOT NULL,
  `state` varchar(50) NOT NULL,
  `dist` varchar(50) NOT NULL,
  `country` varchar(50) NOT NULL,
  `photo` varchar(150) NOT NULL,
  PRIMARY KEY (`stud_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=18 ;

--
-- Dumping data for table `addpersonal`
--

INSERT INTO `addpersonal` (`stud_id`, `name`, `gender`, `dob`, `address`, `contact`, `email`, `fname`, `mname`, `gurdian`, `occupation`, `gaddress`, `state`, `dist`, `country`, `photo`) VALUES
(4, 'ccccc', 'male', '2019-01-08', 'gfge', 9515, 'leematomy@yahoo.in', 'qq', 'qq', 'aa', 'aaaa', '', 'kottayam', 'kottayam', 'kottayam', '8945.png'),
(5, 'cf', 'male', '2019-01-08', 'f', 9515, 'leematomy@yahoo.in', 'qq', 'qq', 'aa', 'aaaa', 'hgfd', 'kollam', 'kottayam', 'kollam', '84.jpg'),
(6, 'aaqq', 'male', '2019-01-28', 'poothottathil', 1234, 'leematomy@yahoo.in', 'aa', 'qq', 'qq', 'aaaa', 'hgfd', 'kottayam', 'kottayam', 'kottayam', '8945.png'),
(7, 'efff', 'female', '2019-01-09', 'ef', 9515, 'leematomy@yahoo.in', 'sadwdw', 'sd', 'aa', 'aaaa', 'sd', 'kottayam', 'kottayam', 'kottayam', '8945.png'),
(8, 'eeerr', 'female', '2019-02-12', 'll', 2147483647, 'anubaby4444@yahoo.in', 'aa', 'qq', 'aa', 'aaaa', 'hgfd', 'kottayam', 'kottayam', 'kottayam', '1.png'),
(9, 'anishababy', 'female', '2018-04-12', 'Poothottathil/686503/pala, Kottayam', 268035, 'anisha@gmail.com', 'baby thomas', 'mercy', 'baby thomas', '7025868035', 'Poothottathil/686503/pala', 'kottayam', 'kottayam', 'kottayam', '88.png'),
(10, 'anishababy', 'female', '2018-04-12', 'Poothottathil/686503/pala, Kottayam', 268035, 'anisha@gmail.com', 'baby thomas', 'mercy', 'baby thomas', '7025868035', 'Poothottathil/686503/pala', 'kottayam', 'kottayam', 'kottayam', '88.png'),
(11, 'albinsbaby', 'male', '0000-00-00', 'pala', 2147483647, 'anuu@gmail.com', 'philip', 'anu', 'philip', 'job', 'pala', 'kottayam', 'kottayam', 'kollam', '84.jpg'),
(12, 'annthomas', 'female', '0000-00-00', 'kottayam', 2147483647, 'ann@gmail.com', 'thomas', 'mer', 'thomas', 'job', 'pala', 'kollam', 'kottayam', 'kottayam', '84.jpg'),
(13, 'amalababy', 'female', '2019-02-27', 'kerala', 2147483647, 'amala@gmail.com', 'baby thomas', 'mercy baby', 'baby thomas', 'farmer', 'kottayam', 'kottayam', 'kottayam', 'kollam', '2017-09-01-15-34-21-081.jpg'),
(14, 'ghjkcvb', 'male', '2019-02-12', 'ertghn', 2147483647, 'alphonsababy231@gmail.com', 'dfghj', 'zxcvbn', 'hh', 'dfghj', 'Poothottathil/686503/pala', 'kottayam', 'kottayam', 'kollam', '88.png'),
(15, 'fghewd', 'male', '2019-02-20', 'efewf', 2147483647, 'sds@fdvfdd.com', 'Alphons', 'sd', 'philip', 'feg', 'Poothottathil/686503/pala', 'kottayam', 'kottayam', 'kollam', '88.png'),
(16, 'wqwqqwewqwqewe', 'female', '2019-02-05', 'Poothottathil/686503/pala\r\nKottayam', 5652585, 'alphonsababy231@gmail.com', 'Alphons', 'qq', 'baby thomas', '7025868035', 'hgfd', 'kottayam', 'kottayam', 'kottayam', '84.jpg'),
(17, 'hfghygyt', 'female', '2019-02-15', 'yugyujjj', 1234789153, 'alphonsababy23@gmail.com', 'jhgyu', 'jgu', 'hghg', '7025868038', 'jhghj', 'kottayam', 'kottayam', 'kottayam', '84.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `addreference`
--

CREATE TABLE IF NOT EXISTS `addreference` (
  `ref_id` int(50) NOT NULL AUTO_INCREMENT,
  `subject` varchar(50) NOT NULL,
  `ref_link` varchar(50) NOT NULL,
  `course` varchar(50) NOT NULL,
  `sem` varchar(50) NOT NULL,
  PRIMARY KEY (`ref_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `addreference`
--

INSERT INTO `addreference` (`ref_id`, `subject`, `ref_link`, `course`, `sem`) VALUES
(1, 'computer application', 'sdfghj', '', ''),
(2, 'c ', 'hyy', '1 ', '1');

-- --------------------------------------------------------

--
-- Table structure for table `addstaff`
--

CREATE TABLE IF NOT EXISTS `addstaff` (
  `staff_id` int(50) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `dob` date NOT NULL,
  `contact` int(50) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `job_cat` varchar(50) NOT NULL,
  `course_id` int(50) NOT NULL,
  `designation` varchar(50) NOT NULL,
  `resume` varchar(150) NOT NULL,
  `qualification` varchar(50) NOT NULL,
  `photo` varchar(150) NOT NULL,
  `dept_id` varchar(150) NOT NULL,
  PRIMARY KEY (`staff_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `addstaff`
--

INSERT INTO `addstaff` (`staff_id`, `name`, `address`, `dob`, `contact`, `gender`, `email`, `job_cat`, `course_id`, `designation`, `resume`, `qualification`, `photo`, `dept_id`) VALUES
(9, 'anu baby', 'fmjg', '2019-01-01', 9515, 'female', 'anubaby4444@yahoo.in', 't', 3, 't', 'edu.doc.docx', 'd', '84.jpg', '3'),
(12, 'anisha baby', 'zxcvb', '2019-01-15', 9515, 'female', 'leematomy@yahoo.in', 't', 4, 'e', 'edu.doc.docx', 'd', '84.jpg', '3');

-- --------------------------------------------------------

--
-- Table structure for table `addstudcoursedetails`
--

CREATE TABLE IF NOT EXISTS `addstudcoursedetails` (
  `id` int(150) NOT NULL AUTO_INCREMENT,
  `stud_id` varchar(50) NOT NULL,
  `course` varchar(50) NOT NULL,
  `startyear` int(50) NOT NULL,
  `startsem` int(50) NOT NULL,
  `qualification` varchar(50) NOT NULL,
  `docupload` varchar(150) NOT NULL,
  `currentyear` int(50) NOT NULL,
  `dept_id` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `addstudcoursedetails`
--

INSERT INTO `addstudcoursedetails` (`id`, `stud_id`, `course`, `startyear`, `startsem`, `qualification`, `docupload`, `currentyear`, `dept_id`) VALUES
(2, '4', '3', 2019, 2, '+2', '84.jpg', 2019, '5'),
(3, '6', '1', 2018, 1, '+2', '8945.png', 2019, '3'),
(4, '7', '1', 2018, 1, '+2', '84.jpg', 2019, '3'),
(8, '10', '3', 2018, 2, '+2', '84.jpg', 2019, '3'),
(9, '8', '3', 2018, 1, '+2', '84.jpg', 2019, '3'),
(10, '12', '3', 2019, 2, '10th', '88.png', 2019, '6'),
(11, '13', '3', 2018, 4, '+2', '84.jpg', 2019, '6'),
(12, '14', '3', 2018, 3, '+2', '84.jpg', 2019, '5'),
(13, '17', '3', 2018, 2, '+2', '2017-09-01-15-34-21-081.jpg', 0, '6');

-- --------------------------------------------------------

--
-- Table structure for table `addstudentfacility`
--

CREATE TABLE IF NOT EXISTS `addstudentfacility` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `stud_id` varchar(50) NOT NULL,
  `library` varchar(150) NOT NULL,
  `lab` varchar(150) NOT NULL,
  `bus` varchar(150) NOT NULL,
  `hostel` varchar(150) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=28 ;

--
-- Dumping data for table `addstudentfacility`
--

INSERT INTO `addstudentfacility` (`id`, `stud_id`, `library`, `lab`, `bus`, `hostel`) VALUES
(2, '6', 'lib', '', '', 'Array'),
(3, '6', '', 'lab', 'bus', 'Array'),
(4, '7', 'lib', 'lab', 'bus', 'hostel'),
(5, '8', '', '', 'bus', ''),
(6, '8', '', '', 'bus', 'hostel'),
(7, '8', '', '', 'bus', ''),
(9, '8', 'lib', 'lab', 'bus', 'hostel'),
(10, '8', '', '', '', ''),
(11, '8', 'lib', '', '', ''),
(12, '8', 'lib', '', '', ''),
(13, '8', 'lib', '', '', ''),
(14, '8', '', 'lab', '', ''),
(15, '8', 'lib', '', '', ''),
(16, '8', 'lib', '', '', ''),
(17, '8', 'lib', '', '', ''),
(18, '10', 'lib', 'lab', '', ''),
(19, '10', 'lib', '', '', ''),
(20, '11', 'lib', 'lab', '', 'hostel'),
(21, '12', 'lib', '', '', ''),
(22, '13', 'lib', '', 'bus', ''),
(23, '13', 'lib', '', 'bus', ''),
(24, '13', 'lib', '', 'bus', ''),
(25, '14', 'lib', '', 'bus', ''),
(26, '17', '', '', 'bus', ''),
(27, '17', 'lib', 'lab', 'bus', '');

-- --------------------------------------------------------

--
-- Table structure for table `addstudentmarklist`
--

CREATE TABLE IF NOT EXISTS `addstudentmarklist` (
  `stud_id` int(50) NOT NULL,
  `sub_id` varchar(50) NOT NULL,
  `inmark` int(50) NOT NULL,
  `exmark` int(50) NOT NULL,
  `status` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `addstudentmarklist`
--

INSERT INTO `addstudentmarklist` (`stud_id`, `sub_id`, `inmark`, `exmark`, `status`) VALUES
(0, '0', 0, 0, '0'),
(0, '0', 23, 33, '0'),
(0, '0', 33, 44, '0'),
(0, '0', 33, 33, '0'),
(0, '0', 23, 44, '0'),
(0, '0', 33, 33, '0'),
(0, '0', 33, 44, '0'),
(0, '0', 33, 44, '0'),
(6, '0', 33, 44, '0'),
(6, '<br />\r\n<b>Notice</b>:  Undefined index: sub_id in', 33, 55, 'm'),
(6, 'c', 33, 44, 'm');

-- --------------------------------------------------------

--
-- Table structure for table `addsubject`
--

CREATE TABLE IF NOT EXISTS `addsubject` (
  `sub_id` int(50) NOT NULL AUTO_INCREMENT,
  `sub_name` varchar(50) NOT NULL,
  PRIMARY KEY (`sub_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `addsubject`
--

INSERT INTO `addsubject` (`sub_id`, `sub_name`) VALUES
(1, 'c'),
(2, 'c++'),
(3, 'ds'),
(4, 'dbms'),
(5, 'cobol'),
(6, 'c'),
(7, 'sad'),
(8, 'php'),
(9, 'html'),
(10, 'micro processor'),
(11, 'maths'),
(12, 'english'),
(14, 'malayalam');

-- --------------------------------------------------------

--
-- Table structure for table `addsubjecttocourse`
--

CREATE TABLE IF NOT EXISTS `addsubjecttocourse` (
  `course_id` varchar(50) NOT NULL,
  `sub_id` varchar(50) NOT NULL,
  `sem` int(15) NOT NULL,
  `id` int(4) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `addsubjecttocourse`
--

INSERT INTO `addsubjecttocourse` (`course_id`, `sub_id`, `sem`, `id`) VALUES
('3', '8,9', 4, 6);

-- --------------------------------------------------------

--
-- Table structure for table `admina`
--

CREATE TABLE IF NOT EXISTS `admina` (
  `acholder` varchar(50) NOT NULL,
  `id` int(50) NOT NULL AUTO_INCREMENT,
  `ac no` int(50) NOT NULL,
  `ifscode` varchar(50) NOT NULL,
  `bankname` varchar(50) NOT NULL,
  `balance` int(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `admina`
--

INSERT INTO `admina` (`acholder`, `id`, `ac no`, `ifscode`, `bankname`, `balance`) VALUES
('admin', 1, 268035, '125412FSC526', 'kottayam', 500);

-- --------------------------------------------------------

--
-- Table structure for table `busfeenotification`
--

CREATE TABLE IF NOT EXISTS `busfeenotification` (
  `notif_id` int(50) NOT NULL AUTO_INCREMENT,
  `title` varchar(50) NOT NULL,
  `msg` varchar(50) NOT NULL,
  `last_date` varchar(30) NOT NULL,
  `stud_id` varchar(50) NOT NULL,
  `date` varchar(30) NOT NULL,
  PRIMARY KEY (`notif_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `busfeenotification`
--

INSERT INTO `busfeenotification` (`notif_id`, `title`, `msg`, `last_date`, `stud_id`, `date`) VALUES
(4, 'fghjk', 'f', '2019-02-15', '', '0000-00-00'),
(5, 'fghjk', 'f', '2019-02-15', '6', '0000-00-00'),
(6, 'fghjk', 'f', '2019-02-15', '7', '0000-00-00'),
(7, 'fghjk', 'f', '2019-02-22', '6', '0000-00-00'),
(8, 'fghjk', 'f', '2019-02-22', '7', '0000-00-00'),
(9, 'fghjk', 'f', '2019-02-22', '6', '0000-00-00'),
(10, 'fghjk', 'f', '2019-02-22', '7', '0000-00-00'),
(11, 'ff', 'f', '2019-02-14', '6', '0000-00-00'),
(12, 'ff', 'f', '2019-02-14', '7', '0000-00-00'),
(13, 'ff', 'f', '2019-02-14', '6', '07/02/2019'),
(14, 'ff', 'f', '2019-02-14', '7', '07/02/2019');

-- --------------------------------------------------------

--
-- Table structure for table `feenotification`
--

CREATE TABLE IF NOT EXISTS `feenotification` (
  `notif_id` int(50) NOT NULL AUTO_INCREMENT,
  `title` varchar(50) NOT NULL,
  `msg` varchar(50) NOT NULL,
  `course_id` varchar(50) NOT NULL,
  `sem` int(50) NOT NULL,
  `fee` int(50) NOT NULL,
  `additionalpay` int(50) NOT NULL,
  `total` int(50) NOT NULL,
  `last_date` varchar(30) NOT NULL,
  PRIMARY KEY (`notif_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `feenotification`
--

INSERT INTO `feenotification` (`notif_id`, `title`, `msg`, `course_id`, `sem`, `fee`, `additionalpay`, `total`, `last_date`) VALUES
(1, 'w', 'w', '2', 2, 0, 2, 180002, '2019-01-30'),
(2, 'xcvb', 'sdfgh', '1', 2, 180000, 3, 180003, '2019-01-24'),
(7, 'fd', 'fd', '3', 2, 180000, 200, 180200, '2019-02-28');

-- --------------------------------------------------------

--
-- Table structure for table `feepayment`
--

CREATE TABLE IF NOT EXISTS `feepayment` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `cid` varchar(10) NOT NULL,
  `sid` varchar(10) NOT NULL,
  `semfee` varchar(20) NOT NULL,
  `busfee` varchar(20) NOT NULL,
  `addfee` varchar(20) NOT NULL,
  `date` varchar(20) NOT NULL,
  `totalamount` varchar(20) NOT NULL,
  `payamount` varchar(20) NOT NULL,
  `bal` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `feepayment`
--

INSERT INTO `feepayment` (`id`, `cid`, `sid`, `semfee`, `busfee`, `addfee`, `date`, `totalamount`, `payamount`, `bal`) VALUES
(5, '3', '4', '180000', '0', '0', '2019-02-24', '180852', 'Rs.180000', '852');

-- --------------------------------------------------------

--
-- Table structure for table `generalnotification`
--

CREATE TABLE IF NOT EXISTS `generalnotification` (
  `notif_id` int(50) NOT NULL AUTO_INCREMENT,
  `date` varchar(40) NOT NULL,
  `title` varchar(50) NOT NULL,
  `msg` varchar(50) NOT NULL,
  `role` varchar(50) NOT NULL,
  `dept_id` int(50) NOT NULL,
  `stid` int(4) NOT NULL,
  PRIMARY KEY (`notif_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=24 ;

--
-- Dumping data for table `generalnotification`
--

INSERT INTO `generalnotification` (`notif_id`, `date`, `title`, `msg`, `role`, `dept_id`, `stid`) VALUES
(16, '07/02/2019', 'rt', 'r', 'student', 3, 6),
(17, '07/02/2019', 'rt', 'r', 'student', 3, 7),
(18, '07/02/2019', 'rt', 'r', 'student', 5, 2),
(19, '08/02/2019', 'ff', 'sdfgh', 'staff', 3, 9),
(20, '08/02/2019', 'ff', 'sdfgh', 'staff', 3, 12),
(21, '08/02/2019', 'ff', 'sdfgh', 'staff', 3, 13),
(22, '08/02/2019', 'mj', 'ik', 'student', 3, 6),
(23, '08/02/2019', 'mj', 'ik', 'student', 3, 7);

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `log_id` int(50) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `status` int(50) NOT NULL,
  `id` varchar(50) NOT NULL,
  `role` varchar(30) NOT NULL,
  `contact` varchar(50) NOT NULL,
  PRIMARY KEY (`log_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`log_id`, `user_name`, `password`, `status`, `id`, `role`, `contact`) VALUES
(2, 'anubaby4444@yahoo.in', 'g', 1, '8 ', 'student', ''),
(3, 'admin', 'admin', 1, '1', 'admin', ''),
(4, 'anisha@gmail.com', '', 1, '10 ', 'student', '268035'),
(5, 'anisha@gmail.com', '', 1, '10 ', 'student', 'EI82FJC'),
(6, 'anuu@gmail.com', 'LC36H9F', 1, '11 ', 'student', '2147483647'),
(7, 'alphonsababygfghf23@gmail.com', 'C8F20H1', 1, '17 ', 'student', '1234789153');

-- --------------------------------------------------------

--
-- Table structure for table `paidfeenotification`
--

CREATE TABLE IF NOT EXISTS `paidfeenotification` (
  `notif_id` int(50) NOT NULL AUTO_INCREMENT,
  `title` varchar(50) NOT NULL,
  `msg` varchar(50) NOT NULL,
  `last_date` date NOT NULL,
  `stud_id` int(50) NOT NULL,
  `date` date NOT NULL,
  `role` varchar(50) NOT NULL,
  PRIMARY KEY (`notif_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE IF NOT EXISTS `payment` (
  `pay_id` int(50) NOT NULL AUTO_INCREMENT,
  `stud_id` int(50) NOT NULL,
  `semfee` int(50) NOT NULL,
  `busfee` int(50) NOT NULL,
  `addi_pay` int(50) NOT NULL,
  `busstatus` int(50) NOT NULL,
  `date` date NOT NULL,
  `semstatus` int(50) NOT NULL,
  `paidamount` int(50) NOT NULL,
  `balance` int(50) NOT NULL,
  PRIMARY KEY (`pay_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `setsemfee`
--

CREATE TABLE IF NOT EXISTS `setsemfee` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `course_id` varchar(50) NOT NULL,
  `fee` int(50) NOT NULL,
  `sem` int(15) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `setsemfee`
--

INSERT INTO `setsemfee` (`id`, `course_id`, `fee`, `sem`) VALUES
(1, '3', 180000, 2),
(2, '3', 12000, 3),
(3, '5', 4152222, 3),
(4, '3', 41524152, 6),
(5, '3', 12000, 0),
(6, '3', 180000, 0),
(7, '3', 2000, 1);

-- --------------------------------------------------------

--
-- Table structure for table `staffcourse`
--

CREATE TABLE IF NOT EXISTS `staffcourse` (
  `staff_id` varchar(50) NOT NULL,
  `sub_id` varchar(50) NOT NULL,
  `course_id` varchar(50) NOT NULL,
  `sem` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `staffcourse`
--

INSERT INTO `staffcourse` (`staff_id`, `sub_id`, `course_id`, `sem`) VALUES
('9', '2', '1', 3),
('9', '2', '1', 3),
('12', '2', '1', 3),
('0', '2', '1', 3);

-- --------------------------------------------------------

--
-- Table structure for table `staffinformation`
--

CREATE TABLE IF NOT EXISTS `staffinformation` (
  `notif_id` int(50) NOT NULL AUTO_INCREMENT,
  `title` varchar(50) NOT NULL,
  `msg` varchar(50) NOT NULL,
  `date` date NOT NULL,
  `course_id` int(50) NOT NULL,
  `sem` int(50) NOT NULL,
  `file` varchar(150) NOT NULL,
  PRIMARY KEY (`notif_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `staffinformation`
--

INSERT INTO `staffinformation` (`notif_id`, `title`, `msg`, `date`, `course_id`, `sem`, `file`) VALUES
(1, '8945.png', 'sdfgh', '2019-01-26', 1, 1, '8945.png');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
