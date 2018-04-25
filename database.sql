-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 25, 2018 at 06:50 PM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mydbtraining`
--

-- --------------------------------------------------------

--
-- Table structure for table `functions_basic`
--

CREATE TABLE `functions_basic` (
  `id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `functions_basic`
--

INSERT INTO `functions_basic` (`id`, `email`, `username`, `password`) VALUES
(1, 'amandeep.madaan@outlook.com', 'aman', '1234'),
(3, 'roots.gaurav@gmail.com', 'gaurav', '1234'),
(4, 'shilpiverma47@gmail.com', 'shilpi', 'shilpi@1'),
(5, 'harmeet.dhami247@gmail.com', 'harmeet', 'harry'),
(6, 'ripushgupta247@gmail.com', 'ripush', 'osm'),
(9, 'monikabhardwaj@gmail.com', 'mannu', 'moni'),
(11, 'manpreet.singh@gmail.com', 'manni', 'manni@1'),
(12, 'vijay.chandel247@gmail.com', 'vijay', 'vijay@1'),
(17, 'abc@xyz.com', 'webmaster', 'webmaster');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `functions_basic`
--
ALTER TABLE `functions_basic`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `functions_basic`
--
ALTER TABLE `functions_basic`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
