-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 06, 2017 at 01:02 PM
-- Server version: 5.5.32
-- PHP Version: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `siomdb`
--
CREATE DATABASE IF NOT EXISTS `siomdb` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `siomdb`;

-- --------------------------------------------------------

--
-- Table structure for table `aaaaaa`
--

CREATE TABLE IF NOT EXISTS `aaaaaa` (
  `suid` varchar(10) NOT NULL,
  `ruid` varchar(30) NOT NULL,
  `chat` varchar(100) NOT NULL,
  `status` varchar(10) DEFAULT NULL,
  `reg_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`suid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `giribabuakib`
--

CREATE TABLE IF NOT EXISTS `giribabuakib` (
  `suid` varchar(10) NOT NULL,
  `ruid` varchar(30) NOT NULL,
  `chat` varchar(100) NOT NULL,
  `status` varchar(10) DEFAULT NULL,
  `reg_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`suid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `giribabukotha`
--

CREATE TABLE IF NOT EXISTS `giribabukotha` (
  `suid` varchar(10) NOT NULL,
  `ruid` varchar(30) NOT NULL,
  `chat` varchar(100) NOT NULL,
  `status` varchar(10) DEFAULT NULL,
  `reg_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`suid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `logintb`
--

CREATE TABLE IF NOT EXISTS `logintb` (
  `suid` varchar(4) NOT NULL,
  `spassword` varchar(10) NOT NULL,
  `sname` varchar(20) NOT NULL,
  `stype` varchar(20) NOT NULL,
  `sotp` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='user login database';

--
-- Dumping data for table `logintb`
--

INSERT INTO `logintb` (`suid`, `spassword`, `sname`, `stype`, `sotp`) VALUES
('m001', 'murli', 'murli', 'student', '0'),
('g002', 'giri', 'giri', 'student', '0'),
('l003', 'lawkush', 'lawkush', 'faculty', '0'),
('y004', 'yogita', 'yogita', 'faculty', '0');

-- --------------------------------------------------------

--
-- Table structure for table `test`
--

CREATE TABLE IF NOT EXISTS `test` (
  `testid` text NOT NULL,
  `testname` text NOT NULL,
  `course` text NOT NULL,
  `semester` text NOT NULL,
  `total_question` int(11) NOT NULL,
  `duration` int(11) NOT NULL,
  `from_valid` date NOT NULL,
  `to_valid` date NOT NULL,
  `test_code` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `test`
--

INSERT INTO `test` (`testid`, `testname`, `course`, `semester`, `total_question`, `duration`, `from_valid`, `to_valid`, `test_code`) VALUES
('mc12', 'AIT', 'MCA', 'MCA2nd', 50, 60, '2017-09-05', '2017-09-07', 'AIT123'),
('mca123', 'C++A@', 'MCA', 'MCA(III)', 100, 60, '2017-09-07', '2017-09-09', 'c1234'),
('mca111', 'DAA', 'MCA', 'MCA(III)', 50, 60, '2017-09-10', '2017-09-14', 'daa123'),
('12', 'AIT', '', '', 0, 0, '0000-00-00', '0000-00-00', ''),
('13', 'c++', 'MCA', '', 0, 0, '0000-00-00', '0000-00-00', ''),
('14', 'c++', 'mca', 'III', 0, 0, '0000-00-00', '0000-00-00', ''),
('15', 'OOAD', 'MCA', '3rd', 100, 0, '0000-00-00', '0000-00-00', ''),
('16', 'MTP', 'MCA', '3rd', 100, 80, '0000-00-00', '0000-00-00', ''),
('17', 'MTP', 'MCA', '3rd', 100, 80, '2017-09-07', '0000-00-00', ''),
('18', 'DAA', 'DaA', '3rd', 100, 590, '2017-09-29', '2017-05-07', ''),
('20', 'DAA', 'MCA', '3rd', 100, 50, '2017-09-29', '2017-09-30', 'DA!@'),
('878', 'iuiu', 'MCA', '3rd', 77, 30, '2017-09-20', '2017-09-20', '55');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` text NOT NULL,
  `name` text NOT NULL,
  `gender` text NOT NULL,
  `password` text NOT NULL,
  `college` text NOT NULL,
  `course` text NOT NULL,
  `semester` text NOT NULL,
  `division` text NOT NULL,
  `rollno` text NOT NULL,
  `address` text NOT NULL,
  `mobile` text NOT NULL,
  `email` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `gender`, `password`, `college`, `course`, `semester`, `division`, `rollno`, `address`, `mobile`, `email`) VALUES
('SIOM2017MCA2B11', 'anupam Kumar', 'male', 'anu', 'siom', 'mca', '2', 'b', '11', 'Pune', '7080603070', 'anupamvns0099@gmail.com'),
('SIOM2017MCA2B44', 'Anupam Kumar', 'male', 'anu', 'siom', 'mca', '2', 'b', '44', 'Pune', '7080603070', 'anupamvns0099@gmail.com'),
('SIOM2017MCA2B11', 'Twinkle Kumar', 'male', 'anu', 'siom', 'mca', '2', 'b', '11', 'Pune', '1234567890', 'anupamvns0099@gmail.com'),
('SIOM2017MCA2B11', 'anupam Kumar', 'male', 'anu', 'siom', 'mca', '2', 'b', '11', 'Pune', '1234567890', 'anupamvns0099@gmail.com'),
('SIOM2017MCA2B11', 'anupam Kumar', 'male', '89a4b5bd7d02ad1e342c960e6a98365c', 'siom', 'mca', '2', 'b', '11', 'Pune', '1234567890', 'anupamvns0099@gmail.com'),
('SIOM2017MCA2B11', 'Twinkle Kumar', 'male', '89a4b5bd7d02ad1e342c960e6a98365c', 'siom', 'mca', '2', 'b', '11', 'Pune', '1234567890', 'anupamvns0099@gmail.com'),
('SIOM2017MCA2B11', 'Twinkle Kumar', 'male', '89a4b5bd7d02ad1e342c960e6a98365c', 'siom', 'mca', '2', 'b', '11', 'Pune', '1234567890', 'anupamvns0099@gmail.com'),
('NBN2017MCA1B23', 'Twinkle Singh', 'male', '89a4b5bd7d02ad1e342c960e6a98365c', 'nbn', 'mca', '1', 'b', '23', 'pune', '1234567890', 'anupamvns0099@gmail.com'),
('NBN2017MCA1B23', 'Twinkle Singh', 'male', '89a4b5bd7d02ad1e342c960e6a98365c', 'nbn', 'mca', '1', 'b', '23', 'pune', '1234567890', 'anupamvns0099@gmail.com'),
('NBN2017MCA1B23', 'Twinkle Singh', 'male', '89a4b5bd7d02ad1e342c960e6a98365c', 'nbn', 'mca', '1', 'b', '23', 'pune', '1234567890', 'anupamvns0099@gmail.com'),
('SIOM2017MCA2B26', 'Lawkush Kumar', 'male', '89a4b5bd7d02ad1e342c960e6a98365c', 'siom', 'mca', '2', 'b', '26', 'Pune', '1234567890', 'lawkushom@gmail.com');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
