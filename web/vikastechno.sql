-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 21, 2018 at 05:05 PM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.1.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vikastechno`
--

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `course_name` varchar(100) NOT NULL,
  `file_path` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`course_name`, `file_path`) VALUES
('a1', 'courses/ext2.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `registeration`
--

CREATE TABLE `registeration` (
  `First` varchar(20) NOT NULL,
  `Last` varchar(20) NOT NULL,
  `Email` varchar(20) NOT NULL,
  `EmpID` int(11) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `Confirm_Pass` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registeration`
--

INSERT INTO `registeration` (`First`, `Last`, `Email`, `EmpID`, `Password`, `Confirm_Pass`) VALUES
('Varun', 'Machingal', 'varun.machingal@gmai', 12345, '465271c4c598622cc868a5a56b2bf5dc', '465271c4c598622cc868a5a56b2bf5dc'),
('Raghottam', 'Talwai', 'rtalwai@iu.edu', 21861, '82880d8f73a227163173e74e3b32772b', '82880d8f73a227163173e74e3b32772b'),
('Varun', 'Machingal', 'vmaching@iu.edu', 22255, '0cc93f2411ca3f753c9e987a1483a6e0', '0cc93f2411ca3f753c9e987a1483a6e0'),
('Varun', 'Machingal', 'vmaching@iu.edu', 32145, '2d91ad1569c04ca327c9da46362d9ac7', '2d91ad1569c04ca327c9da46362d9ac7');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `registeration`
--
ALTER TABLE `registeration`
  ADD PRIMARY KEY (`EmpID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
