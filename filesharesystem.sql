-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 03, 2021 at 06:14 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 7.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `filesharesystem`
--

-- --------------------------------------------------------

--
-- Table structure for table `40c3e0`
--

CREATE TABLE `40c3e0` (
  `id` int(10) UNSIGNED NOT NULL,
  `doc_name` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `new_name` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `40c3e0`
--

INSERT INTO `40c3e0` (`id`, `doc_name`, `name`, `new_name`) VALUES
(1, 'test doc 1', 'testdoc1.docx', '0306211622734748testdoc1.docx'),
(2, 'test doc 2', 'testdoc2.docx', '0306211622734769testdoc2.docx');

-- --------------------------------------------------------

--
-- Table structure for table `56f849`
--

CREATE TABLE `56f849` (
  `id` int(10) UNSIGNED NOT NULL,
  `doc_name` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `new_name` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `56f849`
--

INSERT INTO `56f849` (`id`, `doc_name`, `name`, `new_name`) VALUES
(1, 'test doc 3', 'testdoc3.docx', '0306211622734807testdoc3.docx'),
(2, 'test doc 4', 'testdoc4.docx', '0306211622735059testdoc4.docx');

-- --------------------------------------------------------

--
-- Table structure for table `804f06`
--

CREATE TABLE `804f06` (
  `id` int(10) UNSIGNED NOT NULL,
  `doc_name` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `new_name` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `804f06`
--

INSERT INTO `804f06` (`id`, `doc_name`, `name`, `new_name`) VALUES
(1, 'test doc 5', 'testdoc5.docx', '0306211622735123testdoc5.docx'),
(2, 'test doc 6', 'testdoc6.docx', '0306211622735136testdoc6.docx');

-- --------------------------------------------------------

--
-- Table structure for table `registered_rooms`
--

CREATE TABLE `registered_rooms` (
  `room_name` varchar(30) NOT NULL,
  `password` varchar(15) NOT NULL,
  `admin_id` varchar(255) NOT NULL,
  `room_id` varchar(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `registered_rooms`
--

INSERT INTO `registered_rooms` (`room_name`, `password`, `admin_id`, `room_id`) VALUES
('test 1', 'kamesh212', 'kamesh', '40c3e0'),
('test 2', 'kamesh212', 'kamesh', 'bb7d9e'),
('test 3', 'kamesh212', 'kamesh', '804f06');

-- --------------------------------------------------------

--
-- Table structure for table `super_admin`
--

CREATE TABLE `super_admin` (
  `username` varchar(25) NOT NULL,
  `password` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `super_admin`
--

INSERT INTO `super_admin` (`username`, `password`) VALUES
('admin212', 'admin212');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(255) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`) VALUES
(3, 'akash', '2002-06-12'),
(4, 'ganapathy', '2000-12-05'),
(6, 'kamesh', '2000-12-02'),
(7, 'vengadesh', '2001-02-04');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `40c3e0`
--
ALTER TABLE `40c3e0`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `56f849`
--
ALTER TABLE `56f849`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `804f06`
--
ALTER TABLE `804f06`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `40c3e0`
--
ALTER TABLE `40c3e0`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `56f849`
--
ALTER TABLE `56f849`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `804f06`
--
ALTER TABLE `804f06`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
