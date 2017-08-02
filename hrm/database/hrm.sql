-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 01, 2017 at 04:39 PM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hrm`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminstrator`
--

CREATE TABLE `adminstrator` (
  `adminid` int(11) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `city` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `dob` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `employeeid` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `fathersname` varchar(100) NOT NULL,
  `mothersname` varchar(100) NOT NULL,
  `phone` varchar(110) NOT NULL,
  `dob` date NOT NULL,
  `localaddress` varchar(100) NOT NULL,
  `permanentaddress` varchar(100) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `department` varchar(111) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `active` int(3) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`employeeid`, `username`, `fathersname`, `mothersname`, `phone`, `dob`, `localaddress`, `permanentaddress`, `gender`, `department`, `email`, `password`, `active`) VALUES
(1, 'admin', 'mahamud khan', 'gulsanara begum', '01676993822', '1994-08-09', 'dhaka bangladesh gulistan', 'dhaka gulshan 1', '', '', 'admin@admin.com', 'admin', 1),
(2, 'majid khan', 'sadsa', 'dsadsad', '0196543233', '1988-08-21', 'sdasdsa', 'sdsdsadsa', 'male', 'worker', 'majid@gmail.com', '123456', 1);

-- --------------------------------------------------------

--
-- Table structure for table `employee_transection`
--

CREATE TABLE `employee_transection` (
  `employeeid` int(11) NOT NULL,
  `accountholder` varchar(100) NOT NULL,
  `accountnumber` varchar(100) NOT NULL,
  `bankname` varchar(200) NOT NULL,
  `ifsc` varchar(200) NOT NULL,
  `pannumber` varchar(100) NOT NULL,
  `facebook` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee_transection`
--

INSERT INTO `employee_transection` (`employeeid`, `accountholder`, `accountnumber`, `bankname`, `ifsc`, `pannumber`, `facebook`) VALUES
(8, '1204', '123654789963', 'Dutch bangla bank ltd', '5963', '96321', 'majidkhan123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adminstrator`
--
ALTER TABLE `adminstrator`
  ADD PRIMARY KEY (`adminid`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`employeeid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
