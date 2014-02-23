-- phpMyAdmin SQL Dump
-- version 3.4.7.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 28, 2012 at 09:07 AM
-- Server version: 5.1.56
-- PHP Version: 5.2.9

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `geekve5_geekved`
--

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE IF NOT EXISTS `members` (
  `uid` int(255) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(100) DEFAULT NULL,
  `lastname` varchar(100) DEFAULT NULL,
  `login` varchar(100) NOT NULL DEFAULT '',
  `passwd` varchar(32) NOT NULL DEFAULT '',
  `profile_image` varchar(255) NOT NULL,
  `profile_image_small` varchar(200) NOT NULL,
  `email` varchar(255) NOT NULL,
  `time` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  PRIMARY KEY (`uid`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=32 ;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`uid`, `firstname`, `lastname`, `login`, `passwd`, `profile_image`, `profile_image_small`, `email`) VALUES
(1, 'admin', 'admin', 'Admin', 'b0d15a272608678647e0e8e7b33215eb', '1342984509.png', 't1.png', 'admin@geekved.com'),
(2, 'Prince', 'Kumar', 'princekumar', '3b34f5d844540d656a218eefc0617a59', 't1.png', '', ''),
(3, 'Ravi', 'Raj', 'raviraj', '3b34f5d844540d656a218eefc0617a59', '1342935829642CC-1070669-800.jpg', '4-C0B642CC-1070669-800.jpg', ''),
(4, 'Electrical Engineering', 'Admin', 'Electrical_Engineering', 'b0d15a272608678647e0e8e7b33215eb', 't1.png', '', ''),
(5, 'akash', 'bhardwaj', 'aki', '1d3220951d65ae8da8f9c7da835fa0e0', 't1.png', '', ''),
(6, 'Akash', 'bhardwaj', 'aaksh.shikha.in@gmail.com', '1d3220951d65ae8da8f9c7da835fa0e0', 't1.png', '', ''),
(7, 'nano tech', 'nano tech', 'nano tech', 'b815ce9970309d135cb6fb42f3ca0fd3', 't1.png', '', ''),
(8, 'Assembly', 'language', 'Assembly_language', 'b0d15a272608678647e0e8e7b33215eb', '1343055271e_pb2_ani.gif', 'apache_pb2_ani.gif', ''),
(9, 'c#', 'C3', 'C#', 'b0d15a272608678647e0e8e7b33215eb', 't1.png', '', ''),
(10, 'c++', 'c++', 'c++', 'b0d15a272608678647e0e8e7b33215eb', 't1.png', '', ''),
(11, 'c#c++', 'c#c++', 'c#c++', 'b0d15a272608678647e0e8e7b33215eb', 't1.png', '', ''),
(12, 'Computer Programming for Teens', 'Computer Programming for Teens', 'Computer Programming for Teens', 'b0d15a272608678647e0e8e7b33215eb', 't1.png', '', ''),
(13, 'Game Programing', 'Game Programing', 'Game Programing', 'b0d15a272608678647e0e8e7b33215eb', 't1.png', '', ''),
(14, 'Java Programming', 'Java Programming', 'Java Programming', 'b0d15a272608678647e0e8e7b33215eb', 't1.png', '', ''),
(15, 'wahab', 'alam', 'wahab.alam', '6838d13c3c272d3f43619fb01fec3581', 't1.png', '', ''),
(16, 'Web Developement', 'Web Developement', 'Web Developement', 'b0d15a272608678647e0e8e7b33215eb', 't1.png', '', ''),
(17, 'Microcontrollers Programming', 'Microcontrollers Programming', 'Microcontrollers Programming', 'b0d15a272608678647e0e8e7b33215eb', '1343226903.png', 'gv.png', ''),
(18, 'Mat lab', 'Mat lab', 'Mat lab', 'b0d15a272608678647e0e8e7b33215eb', 't1.png', '', ''),
(19, 'stories', 'stories', 'stories', 'b0d15a272608678647e0e8e7b33215eb', 't1.png', '', ''),
(20, 'Social Science', 'Social Science', 'Social Science', 'b0d15a272608678647e0e8e7b33215eb', 't1.png', '', ''),
(21, 'physics', 'physics', 'physics', 'b0d15a272608678647e0e8e7b33215eb', 't1.png', '', ''),
(22, 'mathematics', 'mathematics', 'mathematics', 'b0d15a272608678647e0e8e7b33215eb', 't1.png', '', ''),
(23, 'EC', 'EC', 'EC', 'b0d15a272608678647e0e8e7b33215eb', 't1.png', '', ''),
(24, 'a', 'a', 'a', '0cc175b9c0f1b6a831c399e269772661', '1343390031.jpg', 'Koala.jpg', ''),
(25, 'c', 'c', 'c', 'b0d15a272608678647e0e8e7b33215eb', 't1.png', '', ''),
(26, 'robo_softwares', 'robo_softwares', 'robo_softwares', 'b0d15a272608678647e0e8e7b33215eb', 't1.png', '', ''),
(27, 'ROBO_RACE_@JNU', 'ROBO_RACE_@JNU', 'ROBO_RACE_@JNU', 'b0d15a272608678647e0e8e7b33215eb', 't1.png', '', ''),
(28, 'robo_drivers', 'robo_drivers', 'robo_drivers', 'b0d15a272608678647e0e8e7b33215eb', 't1.png', '', ''),
(29, 'mohammed', 'jaleesh', 'Username', '5eda958ce0a8c250ad09b1c610a85e1d', 't1.png', '', ''),
(30, 'shreya', 'Last name', 'minu1110', '53481967fe31ef682a32dd2092504908', 't1.png', '', ''),
(31, 'rohan', 'kumar', 'rohan', '8fe982ac55aa1558ea46963c7823c6ff', 't1.png', '', '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
