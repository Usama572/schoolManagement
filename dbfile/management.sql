-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 24, 2022 at 09:20 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `management`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(255) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `Type` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `Name`, `Email`, `Password`, `Type`) VALUES
(1, 'usama', 'usamakhan345@gmail.com', 'usama123', 'A');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(255) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `Type` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `Name`, `Email`, `Password`, `Type`) VALUES
(3, 'usama', 'usama2123@123.com', 'usama123', 'T'),
(4, 'student', 'usama2123@123.com', 'student123', 's'),
(5, 'Admin', 'Admin@123.com', 'admin123', 'A'),
(6, 'Ali', 'Alikhan@gmail.com', '123', 's');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `id` int(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `First_Name` varchar(255) NOT NULL,
  `Last_Name` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `Dob` date DEFAULT NULL,
  `Roll_no` varchar(255) NOT NULL,
  `class` varchar(255) NOT NULL,
  `Type` varchar(255) NOT NULL,
  `Address` varchar(255) NOT NULL,
  `lastschool` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `title`, `image`, `First_Name`, `Last_Name`, `Password`, `Dob`, `Roll_no`, `class`, `Type`, `Address`, `lastschool`) VALUES
(48, '', '5.jpg', 'usaman', 'khan', 'usaman123', '2012-01-22', '1', '10th', 's', 'House no;4 Wh cantt', 'Hitec'),
(72, '', '5.jpg', 'usama', 'khan', '12345', '2005-01-22', '456', '8th', '3456', 'House no;4 Wh cantt', 'Hitec'),
(75, '', '8154-6.jpg', 'Rizwan', 'khan', '234', '2022-01-04', '456', '9th', 's', 'House no;14 Wh cantt', 'Hitec'),
(81, '', '5.jpg', 'usama', 'khan', '23456u', '2005-01-22', '456', '9th', '3456', 'House no;4 Wh cantt', 'Fg boys school');

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

CREATE TABLE `teacher` (
  `id` int(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `First_Name` varchar(255) NOT NULL,
  `Last_Name` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `Dob` date NOT NULL,
  `id_no` varchar(255) NOT NULL,
  `Department` varchar(255) NOT NULL,
  `Type` varchar(255) NOT NULL,
  `Address` varchar(255) NOT NULL,
  `Qualification` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `teacher`
--

INSERT INTO `teacher` (`id`, `image`, `First_Name`, `Last_Name`, `Email`, `Password`, `Dob`, `id_no`, `Department`, `Type`, `Address`, `Qualification`) VALUES
(15, '5859-5.jpg', 'Rizwan', 'sir', 'usamaahtasham32@gmail.com', 'usama123', '2003-01-22', '2022-01-03', '234', 'cs', 'House no;4 Wh cantt', 'phd'),
(18, '1139-6.jpg', 'Rizwan                                    ', 'sir                                    ', 'usamaahtasham3332@gmail.com                                    ', 'usama123          ', '0000-00-00', '2022-01-13                                    ', 'cs 12445785     ', 't          ', 'House no;4 Wh cantt                                    ', 'bs                                    '),
(20, '8587-IMG-20211217-WA0045.jpg', 'usama k', 'khan', 'usamaahtasham32@gmail.com', 'sdfasd', '2004-01-22', '2022-01-04', '234', 'cs', 'House no;4 Wh cantt', 'phd'),
(24, '1927-5.jpg', 'usama    ', 'khan    ', 'usamaahtasham32@gmail.com    ', 'asdf    ', '0000-00-00', '3456    ', 'cs    ', 't    ', 'House no;4 Wh cantt    ', 'phd    '),
(25, '8084-5.jpg', 'usama', 'khan', 'usamaahtasham32@gmail.com', '234', '2026-01-22', '234', '456', '3456', 'House no;4 Wh cantt', 'phd');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teacher`
--
ALTER TABLE `teacher`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=83;

--
-- AUTO_INCREMENT for table `teacher`
--
ALTER TABLE `teacher`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
