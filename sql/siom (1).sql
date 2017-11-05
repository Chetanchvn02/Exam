-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 03, 2017 at 06:53 PM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `siom`
--

-- --------------------------------------------------------

--
-- Table structure for table `question`
--

CREATE TABLE `question` (
  `testid` text NOT NULL,
  `que_id` text NOT NULL,
  `que` text NOT NULL,
  `op_1` text NOT NULL,
  `op_2` text NOT NULL,
  `op_3` text NOT NULL,
  `op_4` text NOT NULL,
  `answer` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `super`
--

CREATE TABLE `super` (
  `uid` text NOT NULL,
  `name` text NOT NULL,
  `email` text NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `super`
--

INSERT INTO `super` (`uid`, `name`, `email`, `password`) VALUES
('UUI1', 'Anupam Singh', 'anupamvns0099@gmail.com', 'admin'),
('UUI2', 'Prashant Mali', 'prashantmalicomp@gmail.com', '1234'),
('UUI3', 'Lawkush Kumar', 'lawkushom@gmail.com', 'lawkush'),
('UUI4', 'Chetan Chavan', 'chetanji@gmail.com', 'chetan'),
('UUI5', 'super', 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `test`
--

CREATE TABLE `test` (
  `testid` text NOT NULL,
  `testname` text NOT NULL,
  `course` text NOT NULL,
  `semester` text NOT NULL,
  `cor_div` text NOT NULL,
  `total_question` int(11) NOT NULL,
  `duration` int(11) NOT NULL,
  `from_valid` date NOT NULL,
  `to_valid` date NOT NULL,
  `test_code` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
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
('SELECT2017SELECT2B11', 'Anuoam Singh', 'Select', 'd15e1cb42202e00c13729306f2dca0a2', 'Select', 'Select', '2', 'b', '11', 'Pune', '1234567890', 'anupamvns0099@gmail.com');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
