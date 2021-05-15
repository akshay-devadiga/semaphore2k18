-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 20, 2018 at 09:20 AM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 5.6.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `semresdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `admintb`
--

CREATE TABLE `admintb` (
  `id` int(11) NOT NULL,
  `username` varchar(100) DEFAULT NULL,
  `userpass` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admintb`
--

INSERT INTO `admintb` (`id`, `username`, `userpass`) VALUES
(1, 'a@gmail.com', 'admin'),
(3, 'admin', 'f925916e2754e5e03f75dd58a5733251');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `reg_id` int(11) NOT NULL,
  `cname` varchar(35) NOT NULL,
  `name` varchar(35) NOT NULL,
  `email` varchar(35) NOT NULL,
  `nop` int(35) NOT NULL,
  `contact` int(35) NOT NULL,
  `boys` int(35) NOT NULL,
  `girls` int(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`reg_id`, `cname`, `name`, `email`, `nop`, `contact`, `boys`, `girls`) VALUES
(1, 'k', 'gurudeep', 'swathi.uliya@gmail.com', 5, 5, 5, 4),
(2, 'e', 'gg', 'guru.uliya@gmail.com', 5, 5, 5, 5),
(3, 'g', 'g', 'guru.uliya@gmail.com', 555, 1, 5, 5),
(4, 'ek', 'k', 'guru.uliya@gmail.com', 12, 2147483647, 2, 2),
(5, 'g', 'gurudeep', 'guru.uliya@gmail.com', 6, 6666666, 7, 7);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admintb`
--
ALTER TABLE `admintb`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`reg_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admintb`
--
ALTER TABLE `admintb`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `reg_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
