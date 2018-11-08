-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Aug 29, 2018 at 12:25 PM
-- Server version: 5.1.30
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `classdaily`
--

CREATE TABLE IF NOT EXISTS `classdaily` (
  `hours` varchar(255) NOT NULL,
  `branch` varchar(255) NOT NULL,
  `matters` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `application` varchar(255) NOT NULL,
  `observation` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `teacher_id` int(11) NOT NULL,
  `classdairy_id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`classdairy_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `classdaily`
--

INSERT INTO `classdaily` (`hours`, `branch`, `matters`, `subject`, `application`, `observation`, `date`, `teacher_id`, `classdairy_id`) VALUES
('1st hourr', 'adfadsr', 'dafsfasdcr', 'asdfasdfr', 'asdfasdr', 'asdfar', '2018-08-06', 1, 1),
('1st hour', 'ict', 'programing', 'c++', 'comp lab', 'qiuz', '2018-08-29', 2, 3),
('1st hour', 'afdadf', 'erwqe', 'qwerqwe', 'qwerqwe', 'werqwerqqerr', '2018-08-29', 2, 9),
('2nd hour', 'afdadf', 'adfasd', 'sdfasdf', 'csdcfasd', 'asdfasd', '2018-08-29', 2, 10);

-- --------------------------------------------------------

--
-- Table structure for table `session_plan`
--

CREATE TABLE IF NOT EXISTS `session_plan` (
  `sector` varchar(255) NOT NULL,
  `No.of students:` varchar(255) NOT NULL,
  `Date` varchar(255) NOT NULL,
  `time` varchar(255) NOT NULL,
  `class` varchar(255) NOT NULL,
  `week` varchar(255) NOT NULL,
  `Trade` varchar(255) NOT NULL,
  `Module` varchar(255) NOT NULL,
  `lu` varchar(255) NOT NULL,
  `learning_place` varchar(255) NOT NULL,
  `bb` varchar(255) NOT NULL,
  `specific_objectives` varchar(255) NOT NULL,
  `teaching_aids` varchar(255) NOT NULL,
  `presentation` varchar(255) NOT NULL,
  `presentation_estm` varchar(255) NOT NULL,
  `development` varchar(255) NOT NULL,
  `development_estm` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `session_plan`
--


-- --------------------------------------------------------

--
-- Table structure for table `teachers_identifications`
--

CREATE TABLE IF NOT EXISTS `teachers_identifications` (
  `teacher_id` int(11) NOT NULL AUTO_INCREMENT,
  `teacher_firstname` varchar(2555) NOT NULL,
  `teacher_lastname` varchar(255) NOT NULL,
  `teacher_email` varchar(255) NOT NULL,
  `teacher_username` varchar(255) NOT NULL,
  `teacher_usertype` varchar(255) NOT NULL,
  `teacher_passwords` varchar(255) NOT NULL,
  `teacher_lesson` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `photo` varchar(255) NOT NULL,
  PRIMARY KEY (`teacher_id`),
  UNIQUE KEY `teacher_username` (`teacher_username`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `teachers_identifications`
--

INSERT INTO `teachers_identifications` (`teacher_id`, `teacher_firstname`, `teacher_lastname`, `teacher_email`, `teacher_username`, `teacher_usertype`, `teacher_passwords`, `teacher_lesson`, `date`, `photo`) VALUES
(2, 'GASANA', 'Jean Paul', 'gasanajp@gmail.com', 'gasanajpaul', 'teacher', 'user', 'c++', '2018-08-12', ''),
(3, 'azabe', ' patrick', 'azabepratrick@gmail.com', 'azabepatrick', 'teacher', 'user', 'sport', '2018-08-19', ''),
(5, 'habimana', 'theogine', 'habitheo@gmail.com', 'habimanatheo', 'dos', 'admin', 'e-ship', '2018-08-06', 'pics/people.png'),
(6, 'nicole', 'sarah', 'azabepratrick@gmail.com', 'nicolesarah', 'teacher', 'user', 'english', '2018-08-06', ''),
(7, 'ngarambe', 'pascal', 'ngambepascal@gmail.com', 'ngarambe', 'teacher', 'user', 'political education', '2018-08-13', 'pics'),
(8, 'praside', 'magambo', 'prasidemagambo@gmail.com', 'praside', 'teacher', 'user', 'php ', '2018-08-13', 'pics/people.png');
