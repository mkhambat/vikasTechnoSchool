-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 23, 2018 at 02:42 AM
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
-- Database: `vikastechno`
--

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `CourseID` int(11) NOT NULL,
  `Division` varchar(5) NOT NULL,
  `course_name` varchar(100) NOT NULL,
  `file_path` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`CourseID`, `Division`, `course_name`, `file_path`) VALUES
(8, 'V', 'English', 'courses/cbse-class-5-maths-syllabus.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `registeration`
--

CREATE TABLE `registeration` (
  `First` varchar(20) NOT NULL,
  `Last` varchar(20) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `EmpID` int(11) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `Confirm_Pass` varchar(50) NOT NULL,
  `Admin_Status` varchar(10) NOT NULL,
  `Approved_status` varchar(10) NOT NULL,
  `U_Str` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registeration`
--

INSERT INTO `registeration` (`First`, `Last`, `Email`, `EmpID`, `Password`, `Confirm_Pass`, `Admin_Status`, `Approved_status`, `U_Str`) VALUES
('Devika', 'Chaudhari', 'devika.chaudhari320@gmail.com', 293, '532250e4b063abbcae81d72bd0218897', '532250e4b063abbcae81d72bd0218897', '', 'Yes', ''),
('Raghottam', 'Talwai', 'rtalwai@iu.edu', 21861, '82880d8f73a227163173e74e3b32772b', '82880d8f73a227163173e74e3b32772b', 'Yes', 'Yes', ''),
('Varun', 'Machingal', 'varun.machingal@gmail.com', 23456, '2eea8d780ba9db467a9baaa52ea492c0', '2eea8d780ba9db467a9baaa52ea492c0', '', 'Yes', ''),
('Raghottam', 'Talwai', 'raghottam.talwai@gma', 67890, '6c8ceb33a60159a17c1f8b91fae8470e', '6c8ceb33a60159a17c1f8b91fae8470e', '', 'Yes', ''),
('Murtaza', 'Khambhatty', 'mjurtaza.kh@gmail.com', 84201, '58ff26609f1c9ed744339fa4b9b776d9', '58ff26609f1c9ed744339fa4b9b776d9', '', 'Yes', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`CourseID`);

--
-- Indexes for table `registeration`
--
ALTER TABLE `registeration`
  ADD PRIMARY KEY (`EmpID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `CourseID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;