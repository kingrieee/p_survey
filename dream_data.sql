-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 06, 2018 at 03:58 PM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `psychcare`
--

-- --------------------------------------------------------

--
-- Table structure for table `dream_data`
--

CREATE TABLE `dream_data` (
  `dream_id` int(50) NOT NULL,
  `dream_name` varchar(100) NOT NULL,
  `dream_meaning` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dream_data`
--

INSERT INTO `dream_data` (`dream_id`, `dream_name`, `dream_meaning`) VALUES
(1, 'ACCESORIES	', '- to dream of accessorizing yourself suggests that you are feeling incomplete. Something is missing in your life.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dream_data`
--
ALTER TABLE `dream_data`
  ADD PRIMARY KEY (`dream_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dream_data`
--
ALTER TABLE `dream_data`
  MODIFY `dream_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
