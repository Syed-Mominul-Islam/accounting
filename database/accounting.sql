-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jul 04, 2021 at 03:22 PM
-- Server version: 5.7.24
-- PHP Version: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
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
(1, 'Cash Ledger Form', 'cash-ledger-form', 0, 1, 51, '2021-06-27', 51, '2021-07-03'),
(2, 'Cash Report', 'bank-ledger-form', 0, 1, 51, '2021-06-27', 51, '2021-07-04'),
(3, 'Cash Ledger Edit/Delete', 'general-ledger-form', 0, 1, 51, '2021-06-27', 51, '2021-07-04'),
(4, 'Bank Ledger Form ', 'party-ledger-form ', 0, 1, 51, '2021-06-27', 51, '2021-07-04'),
(5, 'Bank Report', 'purchase-ledger-form ', 0, 1, 51, '2021-06-27', 51, '2021-07-04'),
(6, 'Bank Ledger Edit/Delete ', 'sales-ledger-form ', 0, 1, 51, '2021-07-04', 0, NULL),
(7, 'Bank Manager', 'service-ldeger-form', 0, 1, 51, '2021-07-04', 0, NULL),
(8, 'General Ledger Form ', 'fixed-asset-ledger-form ', 0, 1, 51, '2021-07-04', 0, NULL),
(9, 'General Ledger Report', 'opening-balance-form', 0, 1, 51, '2021-07-04', 0, NULL),
(10, 'General Ledger Edit/Delete', 'adjust-journal-form', 0, 1, 51, '2021-07-04', 0, NULL),
(11, 'General Ledger Manager', 'pos-form', 0, 1, 51, '2021-07-04', 0, NULL),
(12, 'Party Ledger Form ', 'cash-report', 0, 1, 51, '2021-07-04', 0, NULL),
(13, 'Party Ledger Report ', 'bank-report ', 0, 1, 51, '2021-07-04', 0, NULL),
(14, 'Party Ledger Edit/Delete ', 'general-purpose-report ', 0, 1, 51, '2021-07-04', 0, NULL),
(15, 'Party Manager', 'party-report', 0, 1, 51, '2021-07-04', 0, NULL),
(16, 'Purchase Ledger Form', 'product-purchase-report ', 0, 1, 51, '2021-07-04', 0, NULL),
(17, 'Purchase Report', 'total-product-purchase-report ', 0, 1, 51, '2021-07-04', 0, NULL),
(18, 'Purchase Ledger Edit/Delete', 'fixed-asset-report', 0, 1, 51, '2021-07-04', 0, NULL),
(19, 'Product Manager', 'sales-report ', 0, 1, 51, '2021-07-04', 0, NULL),
(20, 'Sales Ledger Form ', 'service-report', 0, 1, 51, '2021-07-04', 51, '2021-07-04'),
(21, 'Sales Report', 'store-report', 0, 1, 51, '2021-07-04', 0, NULL),
(22, 'Sales Ledger Edit/Delete', 'total-stock-report', 0, 1, 51, '2021-07-04', 0, NULL),
(23, 'Service Ldeger Form', 'partywise-product-report', 0, 1, 51, '2021-07-04', 51, '2021-07-04'),
(24, 'Service Report', 'daily-transaction-report', 0, 1, 51, '2021-07-04', 0, NULL),
(25, 'Service Ldeger Edit/Delete', 'trial-balance', 0, 1, 51, '2021-07-04', 0, NULL),
(26, 'Service Manager', ' income-statement ', 0, 1, 51, '2021-07-04', 0, NULL),
(27, 'Fixed Asset Ledger Form', 'notes-to-the-accounts', 0, 1, 51, '2021-07-04', 0, NULL),
(28, 'Fixed Asset Report', 'balance-sheet', 0, 1, 51, '2021-07-04', 0, NULL),
(29, 'Fixed Asset Ledger Edit/Delete', ' settings', 0, 1, 51, '2021-07-04', 0, NULL),
(30, 'Fixed Asset Manager', ' user-manager', 0, 1, 51, '2021-07-04', 0, NULL),
(31, 'Opening Balance Form', 'user-role-manager ', 0, 1, 51, '2021-07-04', 0, NULL),
(32, 'Adjusting Journal Form ', 'bank-manager', 0, 1, 51, '2021-07-04', 0, NULL),
(33, 'Adjusting Journal Report', 'party-manager', 0, 1, 51, '2021-07-04', 0, NULL),
(34, 'Adjusting Journal Edit/Delete', 'general-purpose-manager', 0, 1, 51, '2021-07-04', 0, NULL),
(35, 'Total Product Purchase Report ', 'product-manager', 0, 1, 51, '2021-07-04', 0, NULL),
(36, 'Store Report', 'fixed-asset-manager ', 0, 1, 51, '2021-07-04', 0, NULL),
(37, 'Store Edit/delete', 'category-manager', 0, 1, 51, '2021-07-04', 0, NULL),
(38, 'Total Stock Report ', 'total-stock-report', 0, 1, 51, '2021-07-04', 0, NULL),
(39, 'Daily Transaction Report', 'daily-transaction-report', 0, 1, 51, '2021-07-04', 0, NULL),
(40, ' Trial Balance ', 'trial-balance', 0, 0, 51, '2021-07-04', 0, NULL),
(41, 'Income Statement ', 'income-statement', 0, 1, 51, '2021-07-04', 0, NULL),
(42, 'Balance Sheet ', 'balance-sheet', 0, 1, 51, '2021-07-04', 0, NULL),
(43, 'Settings', 'settings', 0, 1, 51, '2021-07-04', 0, NULL),
(44, 'User Manager ', 'user-manager', 0, 1, 51, '2021-07-04', 51, '2021-07-04'),
(45, 'User Role Manager ', 'user-role-manager', 0, 1, 51, '2021-07-04', 0, NULL),
(46, 'Category Manager ', 'category-manager', 0, 1, 51, '2021-07-04', 0, NULL),
(47, 'Product Unit Manager', 'product-unit-manager', 0, 1, 51, '2021-07-04', 0, NULL),
(48, 'Fixed Asset Depreciation', 'fixed-asset-depreciation', 0, 1, 51, '2021-07-04', 0, NULL),
(49, 'Permission manager', 'permission-manager', 0, 1, 3, '2021-07-04', 0, NULL);

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
-- Table structure for table `snit_role_permission_map`
--

CREATE TABLE `snit_role_permission_map` (
  `id` int(10) NOT NULL,
  `role_id` int(10) NOT NULL,
  `permission_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `snit_role_permission_map`
--

INSERT INTO `snit_role_permission_map` (`id`, `role_id`, `permission_id`) VALUES
(133, 4, 1),
(134, 4, 2),
(135, 4, 3),
(136, 4, 4),
(137, 4, 5),
(138, 4, 6),
(139, 4, 7),
(140, 4, 8),
(141, 4, 9),
(142, 4, 10),
(143, 4, 11),
(144, 4, 12),
(145, 4, 13),
(146, 4, 14),
(147, 4, 16),
(148, 4, 17),
(149, 4, 18),
(150, 4, 20),
(151, 4, 21),
(152, 4, 22),
(153, 4, 23),
(154, 4, 24),
(155, 4, 25),
(156, 4, 27),
(157, 4, 28),
(158, 4, 29),
(159, 4, 35),
(160, 4, 36),
(161, 4, 38),
(162, 4, 42),
(163, 5, 16),
(164, 5, 17),
(165, 5, 18),
(166, 5, 19),
(167, 5, 20),
(168, 5, 21),
(169, 5, 22),
(170, 5, 36),
(171, 5, 37),
(172, 5, 38),
(173, 1, 1),
(174, 1, 2),
(175, 1, 3),
(176, 1, 4),
(177, 1, 5),
(178, 1, 6),
(179, 1, 7),
(180, 1, 8),
(181, 1, 9),
(182, 1, 10),
(183, 1, 11),
(184, 1, 12),
(185, 1, 13),
(186, 1, 14),
(187, 1, 15),
(188, 1, 16),
(189, 1, 17),
(190, 1, 18),
(191, 1, 19),
(192, 1, 20),
(193, 1, 21),
(194, 1, 22),
(195, 1, 23),
(196, 1, 24),
(197, 1, 25),
(198, 1, 26),
(199, 1, 27),
(200, 1, 28),
(201, 1, 29),
(202, 1, 30),
(203, 1, 31),
(204, 1, 32),
(205, 1, 33),
(206, 1, 34),
(207, 1, 35),
(208, 1, 36),
(209, 1, 37),
(210, 1, 38),
(211, 1, 39),
(212, 1, 41),
(213, 1, 42),
(214, 1, 43),
(215, 1, 44),
(216, 1, 45),
(217, 1, 46),
(218, 1, 47),
(219, 1, 48),
(220, 2, 1),
(221, 2, 2),
(222, 2, 3),
(223, 2, 4),
(224, 2, 5),
(225, 2, 6),
(226, 2, 7),
(227, 2, 8),
(228, 2, 9),
(229, 2, 10),
(230, 2, 11),
(231, 2, 12),
(232, 2, 13),
(233, 2, 14),
(234, 2, 15),
(235, 2, 16),
(236, 2, 17),
(237, 2, 18),
(238, 2, 19),
(239, 2, 20),
(240, 2, 21),
(241, 2, 22),
(242, 2, 23),
(243, 2, 24),
(244, 2, 25),
(245, 2, 26),
(246, 2, 27),
(247, 2, 28),
(248, 2, 29),
(249, 2, 30),
(250, 2, 31),
(251, 2, 32),
(252, 2, 33),
(253, 2, 34),
(254, 2, 35),
(255, 2, 36),
(256, 2, 37),
(257, 2, 38),
(258, 2, 39),
(259, 2, 41),
(260, 2, 42),
(261, 2, 46),
(262, 2, 47),
(263, 2, 48),
(478, 3, 1),
(479, 3, 2),
(480, 3, 3),
(481, 3, 4),
(482, 3, 5),
(483, 3, 6),
(484, 3, 7),
(485, 3, 8),
(486, 3, 9),
(487, 3, 10),
(488, 3, 11),
(489, 3, 12),
(490, 3, 13),
(491, 3, 14),
(492, 3, 15),
(493, 3, 16),
(494, 3, 17),
(495, 3, 18),
(496, 3, 19),
(497, 3, 20),
(498, 3, 21),
(499, 3, 22),
(500, 3, 23),
(501, 3, 24),
(502, 3, 25),
(503, 3, 26),
(504, 3, 27),
(505, 3, 28),
(506, 3, 29),
(507, 3, 30),
(508, 3, 31),
(509, 3, 32),
(510, 3, 33),
(511, 3, 34),
(512, 3, 35),
(513, 3, 36),
(514, 3, 37),
(515, 3, 38),
(516, 3, 39),
(517, 3, 41),
(518, 3, 42),
(519, 3, 47);

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
(1, 20);

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
(1, 'SNIT', 'Admin', 'snit-admin', 'info@websnit.com', '$2y$10$ncB8lQgmKIcn67rj6wRoxeskBW08bQOCPhLd8auw5qgiJXoBqS9HO', '', 1, 0, 1, NULL, NULL, 1, '2021-07-04'),
(2, 'Syed Nurul', 'Islam', 'syednurulislam', 'nurulku02@gmail.com', '$2y$10$ncB8lQgmKIcn67rj6wRoxeskBW08bQOCPhLd8auw5qgiJXoBqS9HO', '', 1, 0, 2, 1, '2021-07-04', NULL, NULL),
(3, 'Syed Mominul', 'Islam', 'momin', 'mominulbu56@gmail.com', '$2y$10$Zsy1nXsqN1.5sNOeJixOFeenrLMwQpbv.gqqvLsV.c1GeXRgi4Z6O', '', 1, 0, 3, 1, '2021-07-04', NULL, NULL),
(4, 'Safwan', 'Abdullah', 'safwan', 'safwan@websnit.com', '$2y$10$t27K0nTN9zxmdXE0xPE/gufyqAvsUPCYfSGnpLTjfV6L2gTAP5YqG', '', 1, 0, 4, 1, '2021-07-04', NULL, NULL),
(5, 'Ahmad', 'Zuhayer', 'ahmad', 'ahmad@websnit.com', '$2y$10$QZW8Dht1UgSkeUzixPItyO2vSDScaA2SZcwezM.zzqPf0Q6L4VoXO', '', 1, 0, 5, 1, '2021-07-04', NULL, NULL);

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
(1, 'Super Administrator', 1, 0, 51, '2021-06-27', 1, '2021-07-04'),
(2, 'Administrator', 1, 0, 51, '2021-06-27', 1, '2021-07-04'),
(3, 'Accounts Manager', 1, 0, 51, '2021-07-04', 3, '2021-07-04'),
(4, 'Accounts Executive', 1, 0, 51, '2021-07-04', 51, '2021-07-04'),
(5, 'Store Manager', 1, 0, 51, '2021-07-04', 51, '2021-07-04');

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
-- Indexes for table `snit_role_permission_map`
--
ALTER TABLE `snit_role_permission_map`
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
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

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
-- AUTO_INCREMENT for table `snit_role_permission_map`
--
ALTER TABLE `snit_role_permission_map`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=520;

--
-- AUTO_INCREMENT for table `snit_settings`
--
ALTER TABLE `snit_settings`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `snit_user_list`
--
ALTER TABLE `snit_user_list`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `snit_user_role_list`
--
ALTER TABLE `snit_user_role_list`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
