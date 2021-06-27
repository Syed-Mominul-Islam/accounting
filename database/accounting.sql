-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 27, 2021 at 04:12 PM
-- Server version: 5.7.33
-- PHP Version: 7.4.19

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
  `status` tinyint(1) DEFAULT '0',
  `deleted` tinyint(1) DEFAULT '0',
  `created_by` int(5) DEFAULT '0',
  `created_date` date DEFAULT NULL,
  `updated_by` int(5) DEFAULT '0',
  `updated_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `snit_bank_list`
--

INSERT INTO `snit_bank_list` (`id`, `bank_name`, `account_number`, `status`, `deleted`, `created_by`, `created_date`, `updated_by`, `updated_date`) VALUES
(1, 'ZZZZ', '2222', 1, 0, 51, '2021-06-27', 51, '2021-06-27'),
(2, 'aaaa', 'aaaaa', 0, 0, 51, '2021-06-27', NULL, NULL),
(3, 'bbbb', '2113', 0, 0, 51, '2021-06-27', NULL, NULL),
(4, '', '', 0, 1, 51, '2021-06-27', NULL, NULL),
(5, 'sdada', '', 0, 1, 51, '2021-06-27', NULL, NULL),
(6, 'sdfsfssdf', '', 0, 1, 51, '2021-06-27', NULL, NULL),
(7, 'aaa', '0000000', 1, 1, 51, '2021-06-27', 51, '2021-06-27'),
(8, 'abcdef', '12345', 1, 0, 51, '2021-06-27', 51, '2021-06-27');

-- --------------------------------------------------------

--
-- Table structure for table `snit_category_list`
--

CREATE TABLE `snit_category_list` (
  `id` int(10) NOT NULL,
  `category_name` varchar(50) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `deleted` tinyint(1) NOT NULL DEFAULT '0',
  `created_by` int(5) DEFAULT '0',
  `created_date` date DEFAULT NULL,
  `updated_by` int(5) DEFAULT '0',
  `updated_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `snit_category_list`
--

INSERT INTO `snit_category_list` (`id`, `category_name`, `status`, `deleted`, `created_by`, `created_date`, `updated_by`, `updated_date`) VALUES
(1, 'a', 0, 0, 51, '2021-06-27', NULL, NULL),
(2, 'b', 1, 0, 51, '2021-06-27', 51, '2021-06-27'),
(3, 'c', 1, 0, 51, '2021-06-27', 0, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `snit_fixed_asset_list`
--

CREATE TABLE `snit_fixed_asset_list` (
  `id` int(10) NOT NULL,
  `asset_name` varchar(200) NOT NULL,
  `salvage_value` float DEFAULT '0',
  `useful_years` int(3) NOT NULL DEFAULT '0',
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `deleted` tinyint(4) NOT NULL DEFAULT '0',
  `adjusted` tinyint(1) DEFAULT NULL,
  `created_by` int(5) NOT NULL DEFAULT '0',
  `created_date` date DEFAULT NULL,
  `updated_by` int(11) NOT NULL DEFAULT '0',
  `updated_date` date DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `snit_fixed_asset_list`
--

INSERT INTO `snit_fixed_asset_list` (`id`, `asset_name`, `salvage_value`, `useful_years`, `status`, `deleted`, `adjusted`, `created_by`, `created_date`, `updated_by`, `updated_date`) VALUES
(1, 'pawra', 4, 7, 1, 0, NULL, 51, '2021-06-27', 0, NULL),
(2, 'pawra', 4, 7, 1, 1, NULL, 51, '2021-06-27', 0, NULL),
(3, 'ahmad juhaer', 22, 22, 1, 0, NULL, 51, '2021-06-27', 51, '2021-06-27');

-- --------------------------------------------------------

--
-- Table structure for table `snit_general_ledger_list`
--

CREATE TABLE `snit_general_ledger_list` (
  `id` int(10) NOT NULL,
  `ledger_name` varchar(200) NOT NULL,
  `ledger_type` tinyint(1) NOT NULL DEFAULT '0',
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `deleted` tinyint(1) NOT NULL DEFAULT '0',
  `created_by` int(5) NOT NULL DEFAULT '0',
  `created_date` date DEFAULT NULL,
  `updated_by` int(5) DEFAULT '0',
  `updated_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `snit_general_ledger_list`
--

INSERT INTO `snit_general_ledger_list` (`id`, `ledger_name`, `ledger_type`, `status`, `deleted`, `created_by`, `created_date`, `updated_by`, `updated_date`) VALUES
(1, 'role', 1, 1, 0, 51, '2021-06-27', 0, NULL),
(2, 'principle main', 1, 1, 1, 51, '2021-06-27', 51, '2021-06-27');

-- --------------------------------------------------------

--
-- Table structure for table `snit_party_list`
--

CREATE TABLE `snit_party_list` (
  `id` int(12) NOT NULL,
  `party_name` varchar(200) NOT NULL,
  `party_email` varchar(100) DEFAULT NULL,
  `party_contact_person` varchar(200) DEFAULT NULL,
  `party_contact_number` varchar(20) DEFAULT NULL,
  `party_code` varchar(30) DEFAULT NULL,
  `address` varchar(500) DEFAULT NULL,
  `trade_licence_no` varchar(100) DEFAULT NULL,
  `vat_no` varchar(100) DEFAULT NULL,
  `tin_no` varchar(100) DEFAULT NULL,
  `party_bank_name` varchar(100) DEFAULT NULL,
  `party_bank_ac_no` varchar(100) DEFAULT NULL,
  `party_cheque_routing_no` varchar(100) DEFAULT NULL,
  `party_type` tinyint(1) NOT NULL DEFAULT '0',
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `deleted` tinyint(1) NOT NULL DEFAULT '0',
  `created_by` int(5) NOT NULL DEFAULT '0',
  `created_date` date DEFAULT NULL,
  `updated_by` int(5) NOT NULL DEFAULT '0',
  `updated_date` date DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `snit_party_list`
--

INSERT INTO `snit_party_list` (`id`, `party_name`, `party_email`, `party_contact_person`, `party_contact_number`, `party_code`, `address`, `trade_licence_no`, `vat_no`, `tin_no`, `party_bank_name`, `party_bank_ac_no`, `party_cheque_routing_no`, `party_type`, `status`, `deleted`, `created_by`, `created_date`, `updated_by`, `updated_date`) VALUES
(1, 'aaa', 'aa@gmail.com', 'aaa', 'aaa', '111', 'aaa', '111', '111', '111', 'aaa', '111', '111', 1, 1, 0, 51, '2021-06-27', 0, NULL),
(2, 'zzzaaa', 'zzz@gmail.com', 'zzz', 'zzz', '999', 'zzz', '999', '999', '999', 'zzz', '999', '999	', 1, 1, 1, 51, '2021-06-27', 51, '2021-06-27');

-- --------------------------------------------------------

--
-- Table structure for table `snit_permission_list`
--

CREATE TABLE `snit_permission_list` (
  `id` int(5) NOT NULL,
  `permission_name` varchar(100) CHARACTER SET latin1 NOT NULL,
  `permission_slug` varchar(100) CHARACTER SET latin1 DEFAULT NULL,
  `deleted` tinyint(1) DEFAULT '0',
  `status` tinyint(1) DEFAULT '0',
  `created_by` int(5) DEFAULT '0',
  `created_date` date DEFAULT NULL,
  `updated_by` int(5) DEFAULT '0',
  `updated_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `snit_permission_list`
--

INSERT INTO `snit_permission_list` (`id`, `permission_name`, `permission_slug`, `deleted`, `status`, `created_by`, `created_date`, `updated_by`, `updated_date`) VALUES
(1, 'aaa', 'aaa', 0, 1, 51, '2021-06-27', 0, NULL),
(2, 'asd', 'asd', 1, 1, 51, '2021-06-27', 0, NULL),
(3, 'kkkkkk tumi', 'ssd', 0, 1, 51, '2021-06-27', 51, '2021-06-27'),
(4, 'aaaa', '', 1, 1, 51, '2021-06-27', 0, NULL),
(5, 'go home', 'ssd', 1, 1, 51, '2021-06-27', 0, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `snit_product_list`
--

CREATE TABLE `snit_product_list` (
  `id` int(10) NOT NULL,
  `category_id` int(10) NOT NULL,
  `product_name` varchar(150) NOT NULL,
  `product_number` varchar(100) NOT NULL,
  `description` varchar(500) NOT NULL DEFAULT '0',
  `party_id` int(10) NOT NULL DEFAULT '0',
  `barcode` varchar(100) NOT NULL DEFAULT '0',
  `sale_price` double DEFAULT NULL,
  `print_quantity` int(10) DEFAULT '0',
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `deleted` tinyint(1) NOT NULL DEFAULT '0',
  `created_by` int(5) DEFAULT '0',
  `created_date` date DEFAULT NULL,
  `updated_by` int(5) DEFAULT '0',
  `updated_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `snit_product_list`
--

INSERT INTO `snit_product_list` (`id`, `category_id`, `product_name`, `product_number`, `description`, `party_id`, `barcode`, `sale_price`, `print_quantity`, `status`, `deleted`, `created_by`, `created_date`, `updated_by`, `updated_date`) VALUES
(1, 1, 'a', '1', 'a', 1, 'a', 1, 1, 1, 0, 51, '2021-06-27', 0, NULL),
(2, 1, 'a', '1', 'a', 1, 'a', 1, 1, 1, 0, 51, '2021-06-27', 0, NULL),
(3, 1, 'm', '1', 'm', 1, 'm', 3, 3, 1, 1, 51, '2021-06-27', 0, NULL),
(4, 1, 'm', '1', 'm', 1, 'm', 3, 3, 1, 1, 51, '2021-06-27', 0, NULL),
(5, 1, 'm', '9', 'm', 1, 'm', 9, 9, 1, 1, 51, '2021-06-27', 0, NULL),
(6, 1, 'mmmmmmmmmm', '99999', 'mmmmm', 1, '9m9m', 99999, 9, 1, 0, 51, '2021-06-27', 0, NULL),
(7, 3, 'bbbbbbbbbcccccccc', '9999', 'bbbbbbbb', 2, '666', 66666, 666666, 1, 0, 51, '2021-06-27', 51, '2021-06-27');

-- --------------------------------------------------------

--
-- Table structure for table `snit_product_unit_list`
--

CREATE TABLE `snit_product_unit_list` (
  `id` int(10) NOT NULL,
  `unit_name` varchar(300) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `deleted` tinyint(1) NOT NULL DEFAULT '0',
  `created_by` int(5) NOT NULL DEFAULT '0',
  `created_date` date DEFAULT NULL,
  `updated_by` int(5) NOT NULL DEFAULT '0',
  `updated_date` date DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `snit_product_unit_list`
--

INSERT INTO `snit_product_unit_list` (`id`, `unit_name`, `status`, `deleted`, `created_by`, `created_date`, `updated_by`, `updated_date`) VALUES
(1, 'k', 1, 0, 51, '2021-06-27', 0, NULL),
(2, 'kkkk', 1, 1, 51, '2021-06-27', 51, '2021-06-27'),
(3, 'nazrul kamta', 1, 1, 51, '2021-06-27', 51, '2021-06-27');

-- --------------------------------------------------------

--
-- Table structure for table `snit_settings`
--

CREATE TABLE `snit_settings` (
  `id` int(5) NOT NULL,
  `number_of_items_per_page` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `snit_settings`
--

INSERT INTO `snit_settings` (`id`, `number_of_items_per_page`) VALUES
(1, 30);

-- --------------------------------------------------------

--
-- Table structure for table `snit_user_list`
--

CREATE TABLE `snit_user_list` (
  `id` int(10) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) DEFAULT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `profile_image` varchar(200) DEFAULT NULL,
  `status` tinyint(1) DEFAULT '0',
  `deleted` tinyint(1) DEFAULT '0',
  `user_role_id` int(5) DEFAULT '0',
  `created_by` int(5) DEFAULT NULL,
  `created_date` date DEFAULT NULL,
  `updated_by` int(5) DEFAULT NULL,
  `updated_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `snit_user_list`
--

INSERT INTO `snit_user_list` (`id`, `first_name`, `last_name`, `username`, `email`, `password`, `profile_image`, `status`, `deleted`, `user_role_id`, `created_by`, `created_date`, `updated_by`, `updated_date`) VALUES
(51, 'momin', 'moin', 'momin', 'momin@gmail.com', '$2y$10$dsjnpWBJuafmyDbxyuzaouALg6UUGOS0bt3xuqdm847iClnIDwyHy', '', 1, 0, 24, 0, '2021-06-27', NULL, NULL),
(52, 'hhhhhhh', 'hhhhhhhh', 'hhhhhhhhh', 'hhhhhh@gmail.com', '$2y$10$kWbMShkG9byT2FeJiXWGvuHpgK3qEYIWLsd24rSmObkMhoSeSqGfu', '', 1, 1, 0, 51, '2021-06-27', NULL, NULL),
(53, 'syed mominulKKKKKKKKKK', 'islam', 'momin', 'mominulbu56@gmail.com', '$2y$10$cVSSV2FdGfMwbZ.MdpL9QOxziOEKgiNuoVm89c/9sWT6O2hFygoka', '', 1, 0, 0, 51, '2021-06-27', 51, '2021-06-27');

-- --------------------------------------------------------

--
-- Table structure for table `snit_user_role_list`
--

CREATE TABLE `snit_user_role_list` (
  `id` int(10) NOT NULL,
  `role_name` varchar(50) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `deleted` tinyint(1) NOT NULL DEFAULT '0',
  `created_by` int(5) NOT NULL DEFAULT '0',
  `created_date` date DEFAULT NULL,
  `updated_by` int(5) NOT NULL DEFAULT '0',
  `updated_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `snit_user_role_list`
--

INSERT INTO `snit_user_role_list` (`id`, `role_name`, `status`, `deleted`, `created_by`, `created_date`, `updated_by`, `updated_date`) VALUES
(1, 'manager', 1, 0, 51, '2021-06-27', 0, NULL),
(2, 'admin team', 1, 0, 51, '2021-06-27', 51, '2021-06-27');

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
-- Indexes for table `snit_fixed_asset_list`
--
ALTER TABLE `snit_fixed_asset_list`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `snit_general_ledger_list`
--
ALTER TABLE `snit_general_ledger_list`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `snit_party_list`
--
ALTER TABLE `snit_party_list`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `snit_permission_list`
--
ALTER TABLE `snit_permission_list`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `snit_product_list`
--
ALTER TABLE `snit_product_list`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `snit_product_unit_list`
--
ALTER TABLE `snit_product_unit_list`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `snit_settings`
--
ALTER TABLE `snit_settings`
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
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `snit_category_list`
--
ALTER TABLE `snit_category_list`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `snit_fixed_asset_list`
--
ALTER TABLE `snit_fixed_asset_list`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `snit_general_ledger_list`
--
ALTER TABLE `snit_general_ledger_list`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `snit_party_list`
--
ALTER TABLE `snit_party_list`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `snit_permission_list`
--
ALTER TABLE `snit_permission_list`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `snit_product_list`
--
ALTER TABLE `snit_product_list`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `snit_product_unit_list`
--
ALTER TABLE `snit_product_unit_list`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `snit_settings`
--
ALTER TABLE `snit_settings`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `snit_user_list`
--
ALTER TABLE `snit_user_list`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT for table `snit_user_role_list`
--
ALTER TABLE `snit_user_role_list`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
