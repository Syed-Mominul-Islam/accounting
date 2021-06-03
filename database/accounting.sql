-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 03, 2021 at 05:37 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `accounting`
--

-- --------------------------------------------------------

--
-- Table structure for table `snit_bank_list`
--

CREATE TABLE `snit_bank_list` (
  `id` int(10) NOT NULL,
  `bank_name` varchar(50) NOT NULL,
  `account_number` varchar(50) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `deleted` tinyint(1) NOT NULL,
  `created_by` varchar(50) NOT NULL,
  `created_date` date NOT NULL,
  `updated_by` varchar(50) NOT NULL,
  `updated_date` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `snit_bank_list`
--

INSERT INTO `snit_bank_list` (`id`, `bank_name`, `account_number`, `status`, `deleted`, `created_by`, `created_date`, `updated_by`, `updated_date`) VALUES
(1, 'islamic bank', '1111111111', 0, 0, '', '0000-00-00', '', 0),
(3, 'islamic bank', '1111111111', 0, 0, '', '0000-00-00', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `snit_category_list`
--

CREATE TABLE `snit_category_list` (
  `id` int(10) NOT NULL,
  `category_name` varchar(50) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `created_by` varchar(50) NOT NULL,
  `created_date` date NOT NULL,
  `updated_by` varchar(50) NOT NULL,
  `updated_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `snit_category_list`
--

INSERT INTO `snit_category_list` (`id`, `category_name`, `status`, `created_by`, `created_date`, `updated_by`, `updated_date`) VALUES
(3, ' category ', 0, '', '0000-00-00', '', '0000-00-00'),
(5, '1 category', 0, '', '0000-00-00', '', '0000-00-00'),
(6, '2 category', 0, '', '0000-00-00', '', '0000-00-00'),
(7, '3 category', 0, '', '0000-00-00', '', '0000-00-00'),
(8, '4 category', 0, '', '0000-00-00', '', '0000-00-00'),
(9, '5 category', 0, '', '0000-00-00', '', '0000-00-00'),
(10, '6 category', 0, '', '0000-00-00', '', '0000-00-00'),
(11, '7 category', 0, '', '0000-00-00', '', '0000-00-00'),
(12, '8 category', 0, '', '0000-00-00', '', '0000-00-00'),
(13, '9 category', 0, '', '0000-00-00', '', '0000-00-00'),
(14, 'fffffff', 0, '', '0000-00-00', '', '0000-00-00'),
(15, 'llllll', 0, '', '0000-00-00', '', '0000-00-00'),
(16, 'lllllll', 0, '', '0000-00-00', '', '0000-00-00'),
(17, 'llllll', 0, '', '0000-00-00', '', '0000-00-00'),
(18, 'llllll', 0, '', '0000-00-00', '', '0000-00-00'),
(19, 'llllllllllll', 0, '', '0000-00-00', '', '0000-00-00'),
(20, 'feiu ghefkbnr', 0, '', '0000-00-00', '', '0000-00-00'),
(21, 'llllllllllllllllllll', 0, '', '0000-00-00', '', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `snit_user_list`
--

CREATE TABLE `snit_user_list` (
  `id` int(10) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `created_by` int(5) NOT NULL,
  `created_date` date NOT NULL,
  `updated_by` int(5) NOT NULL,
  `updated_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `snit_user_list`
--

INSERT INTO `snit_user_list` (`id`, `first_name`, `last_name`, `username`, `email`, `password`, `created_by`, `created_date`, `updated_by`, `updated_date`) VALUES
(14, 'a', 'b', 'c', 'momin@gmail.com', '$2y$10$QjtoawMZ2aAFNHXvP67QIuA8XC3n3YsBpOvOSIneHI8bUZFgXSm3u', 0, '0000-00-00', 0, '0000-00-00'),
(17, 'safwan', 'abdullah', 'nusaer', 'nusaer@gmail.com', '$2y$10$FHdI9qm/7FW5H2uWZe4hbeqeHQSWfiaDJwSn8/r/po4tO/ERVtjvW', 0, '0000-00-00', 0, '0000-00-00'),
(19, 'aaaa', 'aaaa', 'aaaa', 'aaa@gmail.com', '$2y$10$Nxy4f.c1Z1Ruu3E2oKDilevUOfSrBsPBxmZjYnhaDfHXSWe6yd4je', 0, '0000-00-00', 0, '0000-00-00'),
(22, 'acacac', 'acacac', 'acacac', 'acacac@test.com', '$2y$10$WtP9eRJghHILpU5FexegWezJPjMrlKPId5AmwN/jvAeQBFLMzK/bq', 0, '0000-00-00', 0, '0000-00-00'),
(25, 'aes', 'fds', 'fgsd', 'gdf@zdfs.fghy', '$2y$10$dg5s4f.RwhH5wdno1l8tku1rMpTc0gmnEdBCar9bRDNq0oTMi2qTS', 0, '0000-00-00', 0, '0000-00-00'),
(32, 'asda', 'asdas', 'ada', 'asd', 'asdas', 0, '0000-00-00', 0, '0000-00-00'),
(33, 'asdas', 'asdas', 'asd', 'adsa', 'asdas', 0, '0000-00-00', 0, '0000-00-00'),
(34, 'daf', 'sfdas', 'sfsd', 'sdfdsf', 'sdf', 0, '0000-00-00', 0, '0000-00-00'),
(35, 'sfds', 'dsf', 'sdfds', 'sdf', 'sdf', 0, '0000-00-00', 0, '0000-00-00'),
(36, 'lllllllll', 'llllllll', 'lllllll', 'llllllll@gmail.com', '$2y$10$ER4Zz2K2/3DyDKkAPFPAg.JdCNeJ8kJbOCdHUJRMs5dbv2comkl6y', 0, '0000-00-00', 0, '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `snit_user_role_list`
--

CREATE TABLE `snit_user_role_list` (
  `id` int(10) NOT NULL,
  `role_name` varchar(50) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `created_by` varchar(50) NOT NULL,
  `created_date` date NOT NULL,
  `updated_by` varchar(50) NOT NULL,
  `updated_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `snit_user_role_list`
--

INSERT INTO `snit_user_role_list` (`id`, `role_name`, `status`, `created_by`, `created_date`, `updated_by`, `updated_date`) VALUES
(13, 'fdgvgvgvgv', 0, '', '0000-00-00', '', '0000-00-00'),
(14, 'hjtyj', 0, '', '0000-00-00', '', '0000-00-00'),
(17, 'hgnjtgjnt', 0, '', '0000-00-00', '', '0000-00-00'),
(18, 'kljh,k', 0, '', '0000-00-00', '', '0000-00-00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `snit_bank_list`
--
ALTER TABLE `snit_bank_list`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `snit_category_list`
--
ALTER TABLE `snit_category_list`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `snit_user_list`
--
ALTER TABLE `snit_user_list`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `snit_user_role_list`
--
ALTER TABLE `snit_user_role_list`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `snit_bank_list`
--
ALTER TABLE `snit_bank_list`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `snit_category_list`
--
ALTER TABLE `snit_category_list`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `snit_user_list`
--
ALTER TABLE `snit_user_list`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `snit_user_role_list`
--
ALTER TABLE `snit_user_role_list`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
