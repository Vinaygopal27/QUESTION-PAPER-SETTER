-- phpMyAdmin SQL Dump
-- version 2.11.6
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 16, 2020 at 02:31 PM
-- Server version: 5.0.51
-- PHP Version: 5.2.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `php_question_paper_generator`
--

-- --------------------------------------------------------

--
-- Table structure for table `question_02`
--

CREATE TABLE `question_02` (
  `id` int(100) NOT NULL,
  `degree` varchar(100) NOT NULL,
  `dept` varchar(100) NOT NULL,
  `year` varchar(100) NOT NULL,
  `semester` varchar(100) NOT NULL,
  `subjectcode` varchar(100) NOT NULL,
  `subjectname` varchar(100) NOT NULL,
  `unit` varchar(100) NOT NULL,
  `mark` varchar(100) NOT NULL,
  `qstn` varchar(100) NOT NULL,
  `a1` varchar(100) NOT NULL,
  `a2` varchar(100) NOT NULL,
  `a3` varchar(100) NOT NULL,
  `a4` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL,
  `report` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `question_02`
--

INSERT INTO `question_02` (`id`, `degree`, `dept`, `year`, `semester`, `subjectcode`, `subjectname`, `unit`, `mark`, `qstn`, `a1`, `a2`, `a3`, `a4`, `status`, `report`) VALUES
(23, 'BE', 'CSE', 'III', '5', 'P16CA520', 'Mobile Computing', '4', '0.5', 'UDP is called a ', 'Connectionless,reliable', 'Connection oriented unreliable', 'Connectionless,unreliable', 'Connection oriented,reliable', '0', '0'),
(24, 'BE', 'CSE', 'III', '5', 'P16CA520', 'Mobile Computing', '4', '0.5', '----- is the mechanism of taking a packet consisting of packet header and data and putting it into t', 'Encapsulation', 'Tunneling', 'Decapsulation', 'Authentication', '0', '0'),
(25, 'BE', 'CSE','III', '5', 'P16CA520', 'Mobile Computing', '4', '0.5', 'Expansion for ICMP is', 'Inter Control Main Protocol', 'Internet Control Main Program', 'Internet Control Message Protocol', 'Inter Change Mobile Protocol', '0', '0'),
(26, 'BE', 'CSE', 'III', '5', 'P16CA520', 'Mobile Computing', '4', '0.5', 'DSDV', 'Direct Sequence Direct  Vector', 'Destination sequence Direct Vector', 'Destination Sequence Distance Vector', 'Direct Sequence Distance vector', '0', '0'),
(27, 'BE', 'CSE', 'III', '5', 'P16CA520', 'Mobile Computing', '4', '0.5', 'Who owns the Android platform?', 'Oracle Technology', 'Dalvik', 'Open Handset Alliance', 'by Google', '0', '0'),
(28, 'BE', 'CSE', 'III', '5', 'P16CA520', 'Mobile Computing', '4', '0.5', 'Android is an operating system based on the', 'Linux Kernel', 'Unix', 'Windows Xp', 'windows 2000', '0', '0'),
(29, 'BE', 'CSE', 'III', '5', 'P16CA520', 'Mobile Computing', '4', '0.5', 'What is the built -in database in Android?', 'SQLite', 'Apache', 'MySqL', 'Oracle', '0', '0'),
(30,'BE', 'CSE', 'III', '5', 'P16CA520', 'Mobile Computing', '4', '0.5', 'Which of these is not one of the three main components of the APK?', 'Dalvik Executable', 'Resources', 'Native Libraries', 'Webkit', '0', '0');

-- --------------------------------------------------------

--
-- Table structure for table `question_2`
--

CREATE TABLE `question_2` (
  `id` int(100) NOT NULL,
  `degree` varchar(100) NOT NULL,
  `dept` varchar(100) NOT NULL,
  `year` varchar(100) NOT NULL,
  `semester` varchar(100) NOT NULL,
  `subjectcode` varchar(100) NOT NULL,
  `subjectname` varchar(100) NOT NULL,
  `unit` varchar(100) NOT NULL,
  `mark` varchar(100) NOT NULL,
  `qstn` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL,
  `report` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `question_2`
--

INSERT INTO `question_2` (`id`, `degree`, `dept`, `year`, `semester`, `subjectcode`, `subjectname`, `unit`, `mark`, `qstn`, `status`, `report`) VALUES
(8, 'BE', 'CSE', 'III', '5', 'P16CA520', 'Mobile Computing', '4', '2', 'What is a socket pair?', '0', '0'),
(9, 'BE', 'CSE','III', '5', 'P16CA520', 'Mobile Computing', '4', '2', 'What is the function of a Foreign Agent?', '0', '0'),
(10,'BE', 'CSE', 'III', '5', 'P16CA520', 'Mobile Computing', '4', '2', 'Define Encapsulation', '0', '0'),
(11, 'BE','CSE', 'III', '5', 'P16CA520', 'Mobile Computing', '5', '2', 'What is mobility binding?', '0', '0'),
(12,'BE', 'CSE', 'III', '5', 'P16CA520', 'Mobile Computing', '5', '2', 'What is an activity?', '0', '0');

-- --------------------------------------------------------

--
-- Table structure for table `question_5`
--

CREATE TABLE `question_5` (
  `id` int(100) NOT NULL,
  `degree` varchar(100) NOT NULL,
  `dept` varchar(100) NOT NULL,
  `year` varchar(100) NOT NULL,
  `semester` varchar(100) NOT NULL,
  `subjectcode` varchar(100) NOT NULL,
  `subjectname` varchar(100) NOT NULL,
  `unit` varchar(100) NOT NULL,
  `mark` varchar(100) NOT NULL,
  `qstn` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL,
  `report` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `question_5`
--

INSERT INTO `question_5` (`id`, `degree`, `dept`, `year`, `semester`, `subjectcode`, `subjectname`, `unit`, `mark`, `qstn`, `status`, `report`) VALUES
(11,'BE', 'CSE', 'III', '5', 'P16CA520', 'Mobile Computing', '1', '5', 'Discuss on  IP Packet delivery', '0', '0'),
(12, 'BE','CSE', 'III', '5', 'P16CA520', 'Mobile Computing', '1', '5', 'Give a short note on Agent Registration in mobile IP', '0', '0'),
(13, 'BE','CSE', 'III', '5', 'P16CA520', 'Mobile Computing', '4', '5', 'Explain on the optimization of the registration process', '0', '0'),
(14, 'BE', 'CSE','III', '5', 'P16CA520', 'Mobile Computing', '4', '5', 'With a neat diagrram explain about the architecture of WAP', '0', '0'),
(15, 'BE', 'CSE', 'III', '5', 'P16CA520', 'Mobile Computing', '2', '5', 'Give a brief account on the Destination Sequence distance vector', '0', '0'),
(16,'BE','CSE', 'III', '5', 'P16CA520', 'Mobile Computing', '5', '5', 'Briefly explain about the Android SDK', '0', '0'),
(17, 'BE', 'CSE', 'III', '5', 'P16CA520', 'Mobile Computing', '3', '5', 'Discuss on the android application architecture', '0', '0'),
(18, 'BE','CSE', 'III', '5', 'P16CA520', 'Mobile Computing', '5', '5', 'Write down the steps to create and run an Android virtual device', '0', '0'),
(19, 'BE', 'CSE', 'III', '5', 'P16CA520', 'Mobile Computing', '1', '5', 'Discuss on  IP Packet delivery', '0', '0'),
(20, 'BE', 'CSE', 'III', '5', 'P16CA520', 'Mobile Computing', '4', '5', 'Give a short note on Agent Registration in mobile IP', '0', '0'),
(21, 'BE', 'CSE', 'III', '5', 'P16CA520', 'Mobile Computing', '4', '5', 'Explain on the optimization of the registration process', '0', '0'),
(22, v 'III', '5', 'P16CA520', 'Mobile Computing', '2', '5', 'With a neat diagrram explain about the architecture of WAP', '0', '0'),
(23, 'BE', 'CSE', 'III', '5', 'P16CA520', 'Mobile Computing', '5', '5', 'Give a brief account on the Destination Sequence distance vector', '0', '0'),
(24,'BE', 'CSE', 'III', '5', 'P16CA520', 'Mobile Computing', '5', '5', 'Briefly explain about the Android SDK', '0', '0'),
(25, 'BE', 'CSE','III', '5', 'P16CA520', 'Mobile Computing', '3', '5', 'Discuss on the android application architecture', '0', '0'),
(26,'BE', 'CSE', 'III', '5', 'P16CA520', 'Mobile Computing', '3', '5', 'Write down the steps to create and run an Android virtual device', '0', '0');

-- --------------------------------------------------------

--
-- Table structure for table `question_10`
--

CREATE TABLE `question_10` (
  `id` int(100) NOT NULL,
  `degree` varchar(100) NOT NULL,
  `dept` varchar(100) NOT NULL,
  `year` varchar(100) NOT NULL,
  `semester` varchar(100) NOT NULL,
  `subjectcode` varchar(100) NOT NULL,
  `subjectname` varchar(100) NOT NULL,
  `unit` varchar(100) NOT NULL,
  `mark` varchar(100) NOT NULL,
  `qstn` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL,
  `report` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `question_10`
--

INSERT INTO `question_10` (`id`, `degree`, `dept`, `year`, `semester`, `subjectcode`, `subjectname`, `unit`, `mark`, `qstn`, `status`, `report`) VALUES
(6, 'BE', 'CSE', 'III', '5', 'P16CA520', 'Mobile Computing', '4', '10', 'Illustrate on the types of encapsulation in Mobile IP', '0', '0'),
(7, 'BE', 'CSE' 'III', '5', 'P16CA520', 'Mobile Computing', '4', '10', 'Narrate on the registration process in Mobile IP', '0', '0'),
(8, 'BE', 'CSE', 'III', '5', 'P16CA520', 'Mobile Computing', '5', '10', 'Give a detailed account on the various components of Android', '0', '0');


