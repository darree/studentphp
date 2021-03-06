-- phpMyAdmin SQL Dump
-- version 4.0.9
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 02, 2015 at 05:47 PM
-- Server version: 5.6.14
-- PHP Version: 5.5.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `test3`
--

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE IF NOT EXISTS `students` (
  `first_name` varchar(30) NOT NULL,
  `last_name` varchar(30) NOT NULL,
  `email` varchar(30) DEFAULT NULL,
  `street` varchar(30) NOT NULL,
  `city` varchar(30) NOT NULL,
  `state` varchar(30) NOT NULL,
  `zip` int(8) unsigned NOT NULL,
  `phone` varchar(20) NOT NULL,
  `birth_date` date NOT NULL,
  `sex` enum('M','F') NOT NULL DEFAULT 'M',
  `date_entered` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `lunch_cost` float DEFAULT NULL,
  `student_id` int(10) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`student_id`),
  KEY `city` (`city`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2147483647 ;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`first_name`, `last_name`, `email`, `street`, `city`, `state`, `zip`, `phone`, `birth_date`, `sex`, `date_entered`, `lunch_cost`, `student_id`) VALUES
('qqqqq', 'wwwwwww', 'eeeeeee', 'rrrrrrrrr', 'ttttttttt', 'yyyyyyyy', 11111, '1111111111', '1111-12-11', 'M', '2015-04-01 21:29:14', 7654, 2),
('ddd', 'ffffff', 'gggggg', 'hh', 'ttttttttt', 'yyyyyyyy', 11111, '1111111111', '1111-12-11', 'M', '2015-04-01 21:30:31', 321, 3);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
