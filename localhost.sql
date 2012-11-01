-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Aug 27, 2012 at 10:21 PM
-- Server version: 5.5.25
-- PHP Version: 5.4.4

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `tsp`
--
CREATE DATABASE `tsp` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `tsp`;

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE IF NOT EXISTS `events` (
  `index` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` text NOT NULL,
  `date` date NOT NULL,
  `days` text NOT NULL,
  `location` text NOT NULL,
  `instructor` text NOT NULL,
  PRIMARY KEY (`index`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=149 ;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`index`, `title`, `date`, `days`, `location`, `instructor`) VALUES
(2, 'Orientation', '2012-09-06', '0.5', '371', 'Debra Williams'),
(3, 'Study Skills', '2012-09-06', '0.5', '371', 'Marlene Delanghe'),
(4, 'Team Building', '2012-09-07', '1', '371', 'Marlene Delange'),
(5, 'A+', '2012-09-08', '1', '371', 'Orrett Morgan'),
(6, 'A+', '2012-09-09', '1', '371', 'Orrett Morgan'),
(7, 'A+', '2012-09-12', '1', '371', 'Orrett Morgan'),
(8, 'A+', '2012-09-13', '1', '371', 'Orrett Morgan'),
(9, 'SELF STUDY', '2012-09-14', '1', ' ', ' '),
(10, 'Conflict Resolution', '2012-09-15', '1', '870', 'Marlene Delange'),
(11, 'A+', '2012-09-16', '1', '371', 'Orrett Morgan'),
(12, 'A+', '2012-09-19', '1', '371', 'Orrett Morgan'),
(13, 'A+', '2012-09-20', '1', '371', 'Orrett Morgan'),
(14, 'SELF STUDY', '2012-09-21', '1', ' ', ' '),
(15, 'SELF STUDY', '2012-09-22', '1', ' ', ' '),
(16, 'A+', '2012-09-23', '1', '371', 'Orrett Morgan'),
(17, 'A+', '2012-09-26', '1', '371', 'Orrett Morgan'),
(18, 'A+', '2012-09-27', '1', '371', 'Orrett Morgan'),
(19, 'SELF STUDY', '2012-09-28', '1', ' ', ' '),
(20, 'SELF STUDY', '2012-09-29', '1', ' ', ' '),
(21, 'Net +', '2012-09-30', '1', '371', 'Orrett Morgan'),
(22, 'Net +', '2012-10-03', '1', '371', 'Orrett Morgan'),
(23, 'Net +', '2012-10-04', '1', '371', 'Orrett Morgan'),
(24, 'SELF STUDY', '2012-10-05', '1', ' ', ' '),
(25, 'SELF STUDY', '2012-10-06', '1', ' ', ' '),
(26, 'Recommended: CompTIA A+ Essentials Exam', '2012-10-07', '1', ' ', ' '),
(27, 'Thanksgiving, BCIT Closed', '2012-10-10', ' ', 'Closed', ' '),
(28, 'Net +', '2012-10-11', '1', '371', 'Orrett Morgan'),
(29, 'Net +', '2012-10-12', '1', '371', 'Orrett Morgan'),
(30, 'SELF STUDY', '2012-10-13', '1', ' ', ' '),
(31, 'Recommended: CompTIA A+ Practical Applications Exam', '2012-10-14', '1', ' ', ' '),
(32, 'Net +', '2012-10-17', '1', '371', 'Orrett Morgan'),
(33, 'Net +', '2012-10-18', '1', '371', 'Orrett Morgan'),
(34, 'SELF STUDY', '2012-10-19', '1', ' ', ' '),
(35, 'SELF STUDY', '2012-10-20', '1', ' ', ' '),
(36, 'Net+', '2012-10-21', '1', '371', 'Orrett Morgan'),
(37, 'Net +', '2012-10-24', '1', '371', 'Orrett Morgan'),
(38, 'Net +', '2012-10-25', '1', '371', 'Orrett Morgan'),
(39, 'Presentaion Skills', '2012-10-26', '1', '381', 'Marlene Delanghe'),
(40, 'SELF STUDY', '2012-10-27', '1', ' ', ' '),
(41, 'SELF STUDY', '2012-10-28', '1', ' ', ' '),
(42, 'Recommended: CompTIA Network+ Certification Exam ', '2012-10-31', '1', ' ', ' '),
(43, 'MS Word', '2012-11-01', '1', '371', 'Kim Huie'),
(44, 'MS Powerpoint', '2012-11-02', '1', '371', 'Kim Huie'),
(45, 'MS Excel', '2012-11-03', '1', '371', 'Kim Huie'),
(46, 'MS Excel', '2012-11-04', '1', '371', 'Kim Huie'),
(47, 'UBC Orientation Windows 7', '2012-11-07', '1', 'UBC', 'Sarah Ashlie'),
(48, 'Windows 7', '2012-11-08', '1', 'UBC', 'Sarah Ashlie'),
(49, 'Windows 7', '2012-11-09', '1', 'UBC', 'Sarah Ashlie'),
(50, 'Windows 7', '2012-11-10', '1', 'UBC', 'Sarah Ashlie'),
(51, 'Remembrance Day, UBC Closed', '2012-11-11', '1', 'Closed', ' '),
(52, 'Windows 7', '2012-11-14', '1', 'UBC', 'Sarah Ashlie'),
(53, 'Windows 7', '2012-11-15', '1', 'UBC', 'Sarah Ashlie'),
(54, 'Windows 7', '2012-11-16', '1', 'UBC', 'Sarah Ashlie'),
(55, 'Server 2008', '2012-11-17', '1', 'UBC', 'Sarah Ashlie'),
(56, 'Server 2008', '2012-11-18', '1', 'UBC', 'Sarah Ashlie'),
(57, 'Server 2008', '2012-11-21', '1', 'UBC', 'Sarah Ashlie'),
(58, 'Server 2008', '2012-11-22', '1', 'UBC', 'Sarah Ashlie'),
(59, 'Server 2008', '2012-11-23', '1', 'UBC', 'Sarah Ashlie'),
(60, 'Server 2008', '2012-11-24', '1', 'UBC', 'Sarah Ashlie'),
(61, 'Server 2008', '2012-11-25', '1', 'UBC', 'Sarah Ashlie'),
(62, 'Server 2008', '2012-11-28', '1', 'UBC', 'Sarah Ashlie'),
(63, 'Server 2008', '2012-11-29', '1', 'UBC', 'Sarah Ashlie'),
(64, 'Server 2008', '2012-11-30', '1', 'UBC', 'Sarah Ashlie'),
(65, 'Self Study', '2012-12-01', '1', ' ', ' '),
(66, 'Recommended: Microsoft Certification Exam ', '2012-12-02', '1', ' ', ' '),
(67, 'Web Development', '2012-12-05', '1', '364', 'John Bower - Smyth'),
(68, 'Apple', '2012-12-06', '1', '371', 'Orrett Morgan'),
(69, 'Apple', '2012-12-07', '1', '371', 'Orrett Morgan'),
(70, 'Web Development', '2012-12-08', '1', '364', 'John Bower - Smyth'),
(71, 'Web Development', '2012-12-09', '1', '364', 'John Bower - Smyth'),
(72, 'Web Development', '2012-12-12', '1', '364', 'John Bower - Smyth'),
(73, 'Apple', '2012-12-13', '1', '371', 'Orrett Morgan'),
(74, 'Apple', '2012-12-14', '1', '371', 'Orrett Morgan'),
(75, 'Web Development', '2012-12-15', '1', '364', 'John Bower - Smyth'),
(76, 'Apple', '2012-12-16', '1', '371', 'Orrett Morgan'),
(78, 'Resumes & Cover Letters', '2012-01-09', '1', '371', 'Marlene Delanghe'),
(79, 'Network Infrastructure', '2012-01-10', '1', 'UBC', 'Sarah Ashlie'),
(80, 'Network Infrastructure', '2012-01-11', '1', 'UBC', 'Sarah Ashlie'),
(81, 'Network Infrastructure', '2012-01-12', '1', 'UBC', 'Sarah Ashlie'),
(82, 'Network Infrastructure', '2012-01-13', '1', 'UBC', 'Sarah Ashlie'),
(83, 'Network Infrastructure', '2012-01-16', '1', 'UBC', 'Sarah Ashlie'),
(84, 'Network Infrastructure', '2012-01-17', '1', 'UBC', 'Sarah Ashlie'),
(85, 'SELF STUDY', '2012-01-18', ' ', ' ', ' '),
(86, 'Network Infrastructure', '2012-01-19', '1', 'UBC', 'Sarah Ashlie'),
(87, 'Network Infrastructure', '2012-01-20', '1', 'UBC', 'Sarah Ashlie'),
(88, 'Network Infrastructure', '2012-01-23', '1', 'UBC', 'Sarah Ashlie'),
(89, 'Network Infrastructure', '2012-01-24', '1', 'UBC', 'Sarah Ashlie'),
(90, 'Network Infrastructure', '2012-01-25', '1', 'UBC', 'Sarah Ashlie'),
(91, 'SELF STUDY', '2012-01-26', '1', ' ', ' '),
(92, 'Recommended: Microsoft Certification Exam ', '2012-01-27', '1', ' ', ' '),
(93, 'Active Directory', '2012-01-30', '1', 'UBC', 'Sarah Ashlie'),
(94, 'Active Directory', '2012-01-31', '1', 'UBC', 'Sarah Ashlie'),
(95, 'SELF STUDY', '2012-02-01', '1', ' ', ' '),
(96, 'Active Directory', '2012-02-02', '1', 'UBC', 'Sarah Ashlie'),
(97, 'Active Directory', '2012-02-03', '1', 'UBC', 'Sarah Ashlie'),
(98, 'Active Directory', '2012-02-06', '1', 'UBC', 'Sarah Ashlie'),
(99, 'Active Directory', '2012-02-07', '1', 'UBC', 'Sarah Ashlie'),
(100, 'SELF STUDY', '2012-02-08', '1', ' ', ' '),
(101, 'Active Directory', '2012-02-09', '1', 'UBC', 'Sarah Ashlie'),
(102, 'Active Directory', '2012-02-10', '1', 'UBC', 'Sarah Ashlie'),
(103, 'Active Directory', '2012-02-13', '1', 'UBC', 'Sarah Ashlie'),
(104, 'Active Directory', '2012-02-14', '1', 'UBC', 'Sarah Ashlie'),
(105, 'Active Directory', '2012-02-15', '1', 'UBC', 'Sarah Ashlie'),
(106, 'SELF STUDY', '2012-02-16', '1', ' ', ' '),
(107, 'Recommended: Microsoft Certification Exam ', '2012-02-17', '1', ' ', ' '),
(108, 'Self Study / Exams', '2012-02-20', '5', ' ', ' '),
(110, 'Access', '2012-02-27', '5', '310', 'Kim Huie'),
(111, 'Help Desk', '2012-03-05', '1', '310', 'Orrett Morgan'),
(112, 'Help Desk', '2012-03-06', '1', '310', 'Orrett Morgan'),
(113, 'Help Desk', '2012-03-07', '1', '310', 'Orrett Morgan'),
(114, 'Help Desk', '2012-03-08', '1', '310', 'Orrett Morgan'),
(115, 'SELF STUDY', '2012-03-09', '1', ' ', ' '),
(116, 'Linux', '2012-03-12', '1', '371', 'Dave Nielsen'),
(117, 'Linux', '2012-03-13', '1', '371', 'Dave Nielsen'),
(118, 'Self Study', '2012-03-14', '1', ' ', ' '),
(119, 'Linux', '2012-03-15', '1', '371', 'Dave Nielsen'),
(120, 'Linux', '2012-03-16', '1', '371', 'Dave Nielsen'),
(121, 'Linux', '2012-03-19', '1', '371', 'Dave Nielsen'),
(122, 'Help Desk BC', '2012-03-20', '1', ' ', ' '),
(123, 'Linux', '2012-03-21', '1', '371', 'Dave Nielsen'),
(124, 'Linux', '2012-03-22', '1', '371', 'Dave Nielsen'),
(125, 'Linux', '2012-03-23', '1', '371', 'Dave Nielsen'),
(126, 'Linux', '2012-03-26', '1', '371', 'Dave Nielsen'),
(127, 'Linux', '2012-03-27', '1', '371', 'Dave Nielsen'),
(128, 'Linux', '2012-03-28', '1', '371', 'Dave Nielsen'),
(129, 'Interview Skills', '2012-03-29', '1', '371', 'Marlene Delanghe'),
(130, 'Linux', '2012-03-30', '1', '371', 'Dave Nielsen'),
(131, 'Practicum Host Intervies & Self Study', '2012-04-02', '4', '364', ' '),
(132, 'Good Friday (BCIT Closed)', '2012-04-06', '1', ' ', ' '),
(133, 'Easter Monday (BCIT Closed)', '2012-04-09', '1', ' ', ' '),
(134, 'Security', '2012-04-10', '4', '364 /360', 'Erik Whiteway'),
(135, 'Work Term / Self Study', '2012-04-16', '10 weeks', ' ', ' '),
(136, 'Self Study / Job Search', '2012-06-25', '5', '371', ''),
(144, 'Class #1', '2012-08-27', '', 'Room 320', 'Mr. Teacher'),
(145, 'Class #2', '2012-08-28', '', 'Room 320', 'Mr. Teacher'),
(146, 'Class #3', '2012-08-29', '', 'Room 320', 'Mr. Teacher'),
(147, 'Class #4', '2012-08-30', '', 'Room 320', 'Mr. Teacher'),
(148, 'Class #5', '2012-08-31', '', 'Room 320', 'Mr. Teacher');

-- --------------------------------------------------------

--
-- Table structure for table `exCurrEvents`
--

CREATE TABLE IF NOT EXISTS `exCurrEvents` (
  `index` int(10) unsigned NOT NULL,
  `title` text NOT NULL,
  `date` date NOT NULL,
  `location` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `exCurrEvents`
--

INSERT INTO `exCurrEvents` (`index`, `title`, `date`, `location`) VALUES
(0, 'Fun Times BBQ', '2012-08-30', 'BCIT DTC');

-- --------------------------------------------------------

--
-- Table structure for table `tests`
--

CREATE TABLE IF NOT EXISTS `tests` (
  `index` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `test` text NOT NULL,
  `date` date NOT NULL,
  `description` text NOT NULL,
  PRIMARY KEY (`index`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `tests`
--

INSERT INTO `tests` (`index`, `test`, `date`, `description`) VALUES
(2, 'CompTIA A+ Essentials Exam', '2012-10-07', 'CompTIA A+ Essentials Exam'),
(3, 'CompTIA A+ Practical Applications Exam', '2012-10-14', 'CompTIA A+ Practical Applications Exam'),
(4, 'CompTIA Network+ Certification Exam ', '2012-10-31', 'CompTIA Network+ Certification Exam '),
(5, 'Microsoft Certification Exam ', '2012-12-02', 'Microsoft Certification Exam '),
(6, 'Microsoft Certification Exam ', '2013-01-27', 'Microsoft Certification Exam '),
(7, 'Test #1', '2012-08-27', 'Test #1'),
(8, 'Test #2', '2012-08-28', 'Test #2'),
(9, 'Test #3', '2012-08-28', 'Test #3');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `index` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(15) NOT NULL,
  `password` varchar(15) NOT NULL,
  PRIMARY KEY (`index`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`index`, `username`, `password`) VALUES
(1, 'admin', 'passwd'),
(2, 'eric', 'bcit');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
