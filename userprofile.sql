-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 10, 2016 at 06:17 PM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `userprofile`
--

-- --------------------------------------------------------

--
-- Table structure for table `userprofile`
--

CREATE TABLE `userprofile` (
  `ID` int(11) NOT NULL,
  `Profile_Picture` varchar(50) NOT NULL,
  `Full_Name` varchar(50) NOT NULL,
  `Gender` varchar(50) NOT NULL,
  `Date_Of_Birth` date NOT NULL,
  `Years_Of_Experience` varchar(50) NOT NULL,
  `Industry` varchar(50) NOT NULL,
  `Location` varchar(50) NOT NULL,
  `About_Me` varchar(50) NOT NULL,
  `Professional_Title` varchar(50) NOT NULL,
  `Career_Level` varchar(50) NOT NULL,
  `Communication_Level` varchar(50) NOT NULL,
  `Organizational_Level` varchar(50) NOT NULL,
  `Job_Related_Level` varchar(50) NOT NULL,
  `Address` varchar(50) NOT NULL,
  `Phone_Number` varchar(50) NOT NULL,
  `Website` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userprofile`
--

INSERT INTO `userprofile` (`ID`, `Profile_Picture`, `Full_Name`, `Gender`, `Date_Of_Birth`, `Years_Of_Experience`, `Industry`, `Location`, `About_Me`, `Professional_Title`, `Career_Level`, `Communication_Level`, `Organizational_Level`, `Job_Related_Level`, `Address`, `Phone_Number`, `Website`, `Email`) VALUES
(7, 'uploads/profile/97lorna.jpg', 'Ms Chris', 'Female', '2016-02-07', '5 - 10 Years', 'Music', 'Kingston', 'I r di one', 'Roadie', '80%', '70%', '90%', '70%', 'abc mart', '5050005', 'www.jam.com', 'you@me.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `userprofile`
--
ALTER TABLE `userprofile`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `userprofile`
--
ALTER TABLE `userprofile`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
