-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 17, 2018 at 05:49 AM
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
-- Table structure for table `registeration`
--

CREATE TABLE `registeration` (
  `Email` varchar(20) NOT NULL,
  `EmpID` int(11) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `Confirm_Pass` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registeration`
--

INSERT INTO `registeration` (`Email`, `EmpID`, `Password`, `Confirm_Pass`) VALUES
('rtalwai@iu.edu', 3345, '202cb962ac59075b964b07152d234b70', '99c5e07b4d5de9d18c350cdf64c5aa3d'),
('rtalwai@iu.edu', 12345, '82880d8f73a227163173e74e3b32772b', '39bb8b730cadbce808c2c01f34997759'),
('raghottam.talwai@gma', 12348, 'd8b0a3af032479c5de3c6e645d89a7d7', 'd8b0a3af032479c5de3c6e645d89a7d7'),
('raghottam.talwai@gma', 16780, 'd496156dcf8e2e7d2ea552ee7d91d9e0', 'd496156dcf8e2e7d2ea552ee7d91d9e0'),
('raghottam.talwai@gma', 16789, 'dc380d0f2ed1dda93fcae780c2dd4f3f', 'dc380d0f2ed1dda93fcae780c2dd4f3f'),
('rtalwai@iu.edu', 21345, 'd00ff5846094e91d744ce1c36f5b4fbc', 'd00ff5846094e91d744ce1c36f5b4fbc'),
('rtalwai@iu.edu', 22456, 'ddf06a14839371b4b6e7e8f961589073', 'ddf06a14839371b4b6e7e8f961589073'),
('rtalwai@iu.edu', 23123, '3b59b517d529d467d595b44d5af01cc4', '3b59b517d529d467d595b44d5af01cc4'),
('rtalwai@iu.edu', 23134, 'f6ab5048971bad6f36a30aaaecab2fa1', 'f6ab5048971bad6f36a30aaaecab2fa1'),
('rtalwai@iu.edu', 45678, 'c20ad4d76fe97759aa27a0c99bff6710', 'd81f9c1be2e08964bf9f24b15f0e4900'),
('devika.chaudhari320@', 56789, '15b14bf84c581e1efc98262cb80cc3b9', '15b14bf84c581e1efc98262cb80cc3b9'),
('raghya992@gmail.com', 98790, '82880d8f73a227163173e74e3b32772b', '82880d8f73a227163173e74e3b32772b'),
('varun.machingal@gmai', 98791, '1df32b80fb09eb52497e7027c6f7f84b', '1df32b80fb09eb52497e7027c6f7f84b');

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
