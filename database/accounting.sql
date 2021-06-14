-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 14, 2021 at 04:33 PM
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
(3, 'islamic bank', '1111111111', 0, 1, '', '0000-00-00', '', 0),
(5, 'ucb bank', '123456789', 0, 0, '17', '2021-06-05', '17', 2021);

-- --------------------------------------------------------

--
-- Table structure for table `snit_category_list`
--

CREATE TABLE `snit_category_list` (
  `id` int(10) NOT NULL,
  `category_name` varchar(50) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `deleted` tinyint(1) NOT NULL,
  `created_by` varchar(50) NOT NULL,
  `created_date` date NOT NULL,
  `updated_by` varchar(50) NOT NULL,
  `updated_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `snit_category_list`
--

INSERT INTO `snit_category_list` (`id`, `category_name`, `status`, `deleted`, `created_by`, `created_date`, `updated_by`, `updated_date`) VALUES
(3, ' category ', 0, 1, '', '0000-00-00', '', '0000-00-00'),
(5, 'category 1', 1, 0, '', '0000-00-00', '17', '2021-06-05'),
(6, '2 category', 0, 0, '', '0000-00-00', '', '0000-00-00'),
(7, '3 category', 0, 0, '', '0000-00-00', '', '0000-00-00'),
(8, '4 category', 0, 0, '', '0000-00-00', '', '0000-00-00'),
(9, '5 category', 0, 0, '', '0000-00-00', '', '0000-00-00'),
(10, '6 category', 0, 0, '', '0000-00-00', '', '0000-00-00'),
(11, '7 category', 0, 0, '', '0000-00-00', '', '0000-00-00'),
(12, '8 category', 0, 0, '', '0000-00-00', '', '0000-00-00'),
(13, '9 category', 0, 0, '', '0000-00-00', '', '0000-00-00'),
(14, 'fffffff', 0, 0, '', '0000-00-00', '', '0000-00-00'),
(15, 'llllll', 0, 0, '', '0000-00-00', '', '0000-00-00'),
(16, 'lllllll', 0, 0, '', '0000-00-00', '', '0000-00-00'),
(17, 'llllll', 0, 0, '', '0000-00-00', '', '0000-00-00'),
(18, 'llllll', 0, 0, '', '0000-00-00', '', '0000-00-00'),
(19, 'llllllllllll', 0, 0, '', '0000-00-00', '', '0000-00-00'),
(20, 'feiu ghefkbnr', 0, 0, '', '0000-00-00', '', '0000-00-00'),
(21, 'llllllllllllllllllll', 0, 0, '', '0000-00-00', '', '0000-00-00'),
(22, 'jjjjjj', 1, 0, '17', '2021-06-05', '', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `snit_fixed_asset_list`
--

CREATE TABLE `snit_fixed_asset_list` (
  `id` int(10) NOT NULL,
  `asset_name` varchar(200) NOT NULL,
  `salvage_value` float NOT NULL,
  `useful_years` int(3) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `deleted` tinyint(4) NOT NULL,
  `adjusted` tinyint(1) NOT NULL,
  `created_by` varchar(50) NOT NULL,
  `created_date` date NOT NULL,
  `updated_by` varchar(50) NOT NULL,
  `updated_date` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `snit_fixed_asset_list`
--

INSERT INTO `snit_fixed_asset_list` (`id`, `asset_name`, `salvage_value`, `useful_years`, `status`, `deleted`, `adjusted`, `created_by`, `created_date`, `updated_by`, `updated_date`) VALUES
(1, 'mmmmm', 123, 2, 1, 1, 0, '17', '2021-06-13', '', '0000-00-00'),
(2, 'llllllll', 13, 5, 0, 2, 2, '17', '2021-06-13', '', '0000-00-00'),
(3, 'llllllll', 0, 0, 0, 1, 0, '17', '2021-06-13', '', '0000-00-00'),
(4, 'aaaaaaaaa', 2, 2, 0, 1, 0, '17', '2021-06-13', '', '0000-00-00'),
(5, 'kk', 1, 1, 1, 1, 0, '17', '2021-06-14', '', '0000-00-00'),
(6, 'bbbb', 1, 1, 1, 1, 0, '17', '2021-06-14', '', '0000-00-00'),
(7, 'safwan', 20, 20, 1, 1, 1, '17', '2021-06-14', '', '0000-00-00'),
(8, 'bbbbbbbbbbb', 666667000, 0, 0, 1, 0, '17', '2021-06-14', '', '0000-00-00'),
(9, 'ccccccccccccccc', 0, 0, 1, 1, 0, '17', '2021-06-14', '', '0000-00-00'),
(10, 'property', 2, 2, 1, 1, 1, '17', '2021-06-14', '', '0000-00-00'),
(11, 'property', 2, 2, 1, 1, 1, '17', '2021-06-14', '', '0000-00-00'),
(12, 'property', 2, 2, 1, 1, 0, '17', '2021-06-14', '', '0000-00-00'),
(13, 'kkkkkkkkkkbbbbbbbbb', 2, 2, 1, 0, 0, '17', '2021-06-14', '17', '2021-06-14'),
(14, 'mmmmmmmmm', 1, 1, 1, 0, 0, '17', '2021-06-14', '', '0000-00-00'),
(15, 'aaaaaaaa', 3, 3, 1, 0, 0, '17', '2021-06-14', '', '0000-00-00'),
(16, 'llllllllkkkkkk', 1, 1, 1, 1, 0, '17', '2021-06-14', '17', '2021-06-14');

-- --------------------------------------------------------

--
-- Table structure for table `snit_general_ledger_list`
--

CREATE TABLE `snit_general_ledger_list` (
  `id` int(10) NOT NULL,
  `ledger_name` text NOT NULL,
  `ledger_type` tinyint(1) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `deleted` tinyint(1) NOT NULL,
  `created_by` varchar(50) NOT NULL,
  `created_date` date NOT NULL,
  `updated_by` varchar(50) NOT NULL,
  `updated_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `snit_general_ledger_list`
--

INSERT INTO `snit_general_ledger_list` (`id`, `ledger_name`, `ledger_type`, `status`, `deleted`, `created_by`, `created_date`, `updated_by`, `updated_date`) VALUES
(1, 'jjjjkkkkkkkkk', 1, 1, 0, '17', '2021-06-10', '17', '2021-06-10'),
(2, 'hhhhhhhhhhh', 0, 0, 1, '17', '2021-06-10', '', '0000-00-00'),
(3, 'ggggggggg', 1, 1, 0, '17', '2021-06-10', '', '0000-00-00'),
(4, 'snack', 0, 1, 0, '17', '2021-06-10', '', '0000-00-00'),
(5, 'kkkk', 1, 1, 0, '17', '2021-06-10', '', '0000-00-00'),
(6, 'kjghkjghj', 0, 1, 0, '17', '2021-06-10', '', '0000-00-00'),
(7, 'hjkhjkgh', 1, 1, 0, '17', '2021-06-10', '', '0000-00-00'),
(8, 'ooooooooooooo', 1, 1, 0, '17', '2021-06-10', '', '0000-00-00'),
(9, 'lllll', 1, 0, 0, '17', '2021-06-10', '', '0000-00-00'),
(10, 'asdf;;lkjasdf;lkjasdf;lkj', 0, 0, 0, '17', '2021-06-10', '17', '2021-06-10');

-- --------------------------------------------------------

--
-- Table structure for table `snit_party_list`
--

CREATE TABLE `snit_party_list` (
  `id` int(12) NOT NULL,
  `party_name` varchar(200) NOT NULL,
  `party_email` varchar(100) NOT NULL,
  `party_contact_person` varchar(200) NOT NULL,
  `party_contact_number` varchar(20) NOT NULL,
  `party_code` varchar(30) NOT NULL,
  `address` varchar(500) NOT NULL,
  `trade_licence_no` varchar(100) NOT NULL,
  `vat_no` varchar(100) NOT NULL,
  `tin_no` varchar(100) NOT NULL,
  `party_bank_name` varchar(100) NOT NULL,
  `party_bank_ac_no` varchar(100) NOT NULL,
  `party_cheque_routing_no` varchar(100) NOT NULL,
  `party_type` tinyint(1) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0,
  `deleted` tinyint(4) NOT NULL,
  `created_by` varchar(50) NOT NULL,
  `created_date` date NOT NULL,
  `updated_by` varchar(50) NOT NULL,
  `updated_date` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `snit_party_list`
--

INSERT INTO `snit_party_list` (`id`, `party_name`, `party_email`, `party_contact_person`, `party_contact_number`, `party_code`, `address`, `trade_licence_no`, `vat_no`, `tin_no`, `party_bank_name`, `party_bank_ac_no`, `party_cheque_routing_no`, `party_type`, `status`, `deleted`, `created_by`, `created_date`, `updated_by`, `updated_date`) VALUES
(6, 'LGlg', 'lg@gmail.com', '01310940121', 'lg', 'lg', 'lg', '01310940121', '01310940121', '013109401212', 'lg', '01310940121', '01989322152	', 0, 1, 1, '17', '2021-06-12', '17', '2021-06-12'),
(7, 'kkkkjjj', 'nnnn@gmail.com', 'nnnnn', '01310940121', '013', 'nnnnn', '013', '013', '013', 'nnnn', '013', '013		', 0, 1, 0, '17', '2021-06-12', '17', '2021-06-14'),
(8, 'mmmmmmmmmm', 'mmmmmm@gmail.com', 'mmmmm', '013', '013', '', '', '', '', '', '', '', 0, 0, 0, '17', '2021-06-12', '', '0000-00-00'),
(9, 'jjjjjjj', 'jjjjjjjjj@gmail.com', 'jjjjj', '77777', '7777', 'jjjjjj', '7777', '777', '7', 'jjj', '777', '777', 1, 0, 0, '17', '2021-06-14', '', '0000-00-00'),
(5, 'syed Nurul', 'syed@gmail.com', '01310940121', 'syed', 'syed', 'syed', '01310940121', '01310940121', '01310940121', 'syed', '01310940121', '01310940121	', 1, 1, 1, '17', '2021-06-12', '17', '2021-06-12');

-- --------------------------------------------------------

--
-- Table structure for table `snit_product_list`
--

CREATE TABLE `snit_product_list` (
  `id` int(10) NOT NULL,
  `category_id` int(10) NOT NULL,
  `product_name` varchar(150) NOT NULL,
  `product_number` varchar(100) NOT NULL,
  `description` varchar(500) NOT NULL,
  `party_id` int(10) NOT NULL,
  `barcode` varchar(100) NOT NULL,
  `sale_price` double NOT NULL,
  `print_quantity` int(10) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `deleted` tinyint(1) NOT NULL,
  `created_by` varchar(50) NOT NULL,
  `created_date` date NOT NULL,
  `updated_by` varchar(50) NOT NULL,
  `updated_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `snit_product_list`
--

INSERT INTO `snit_product_list` (`id`, `category_id`, `product_name`, `product_number`, `description`, `party_id`, `barcode`, `sale_price`, `print_quantity`, `status`, `deleted`, `created_by`, `created_date`, `updated_by`, `updated_date`) VALUES
(1, 777, 'jjjj', '77', 'jjj', 77, '77', 77, 77, 1, 7, '17', '2021-06-14', '', '0000-00-00'),
(2, 777, 'jjj', '777', 'jjj', 777, 'jjj', 777, 777, 7, 7, '', '0000-00-00', '', '0000-00-00'),
(3, 777, 'jjj', '777', 'jjj', 777, 'jjj', 777, 777, 7, 7, '', '0000-00-00', '', '0000-00-00'),
(4, 22, 'kkkkkkk', '111567678', '1', 5, '1', 1, 0, 1, 0, '17', '2021-06-14', '17', '2021-06-14'),
(5, 5, 'iiiiii', '11111111', 'iiiiiiiiii', 5, '111111111', 1111111111, 2147483647, 1, 0, '17', '2021-06-14', '', '0000-00-00'),
(6, 13, 'nnnnn', '99999999', 'nnnnnnn', 7, '999', 999, 999, 1, 1, '17', '2021-06-14', '', '0000-00-00'),
(7, 22, 'jjjkkkk', 'jjjkkkk', 'kk', 5, '', 0, 0, 1, 0, '17', '2021-06-14', '17', '2021-06-14');

-- --------------------------------------------------------

--
-- Table structure for table `snit_product_unit_list`
--

CREATE TABLE `snit_product_unit_list` (
  `id` int(10) NOT NULL,
  `unit_name` varchar(300) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `deleted` tinyint(1) NOT NULL DEFAULT 0,
  `created_by` varchar(50) NOT NULL,
  `created_date` date NOT NULL,
  `updated_by` varchar(50) NOT NULL,
  `updated_date` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `snit_product_unit_list`
--

INSERT INTO `snit_product_unit_list` (`id`, `unit_name`, `status`, `deleted`, `created_by`, `created_date`, `updated_by`, `updated_date`) VALUES
(1, 'yyyyyyyyyhhhhhhhh', 0, 0, '17', '2021-06-14', '17', '2021-06-14'),
(2, 'tttttttttt', 0, 1, '17', '2021-06-14', '', '0000-00-00');

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
(1, 4);

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
  `profile_image` varchar(200) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `deleted` tinyint(1) NOT NULL,
  `user_role_id` int(5) NOT NULL,
  `created_by` int(5) NOT NULL,
  `created_date` date NOT NULL,
  `updated_by` int(5) NOT NULL,
  `updated_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `snit_user_list`
--

INSERT INTO `snit_user_list` (`id`, `first_name`, `last_name`, `username`, `email`, `password`, `profile_image`, `status`, `deleted`, `user_role_id`, `created_by`, `created_date`, `updated_by`, `updated_date`) VALUES
(14, 'a', 'b', 'c', 'momin@gmail.com', '$2y$10$8uCAlJ2i9bfvXCAzd7X1weTsubOajn2JkCbAPpLQOX3rzsdJeVXSW', '', 1, 1, 18, 0, '0000-00-00', 17, '2021-06-04'),
(17, 'safwan', 'abdullah', 'nusaer', 'nusaer@gmail.com', '$2y$10$sNB9K9FifZz902Rpc4XEP.LDXE0L2AtWBXCFKH7GK9AJ1v.METie.', 'IMG_20200917_171221.jpg', 0, 0, 24, 0, '0000-00-00', 17, '2021-06-08'),
(19, 'aaaa', 'aaaa', 'aaaa', 'aaa@gmail.com', '$2y$10$Nxy4f.c1Z1Ruu3E2oKDilevUOfSrBsPBxmZjYnhaDfHXSWe6yd4je', '', 0, 1, 0, 0, '0000-00-00', 0, '0000-00-00'),
(22, 'acacac', 'acacac', 'acacac', 'acacac@test.com', '$2y$10$WtP9eRJghHILpU5FexegWezJPjMrlKPId5AmwN/jvAeQBFLMzK/bq', '', 0, 0, 0, 0, '0000-00-00', 0, '0000-00-00'),
(25, 'aes', 'fds', 'fgsd', 'gdf@zdfs.fghy', '$2y$10$yosSFpTYUENza/HOEx82TOPNd4UXMUbNeO1yyTWjwVom2NnCkdA/y', '', 0, 1, 18, 0, '0000-00-00', 0, '2021-06-04'),
(32, 'asda', 'asdas', 'ada', 'asd', 'asdas', '', 0, 0, 0, 0, '0000-00-00', 0, '0000-00-00'),
(33, 'asdas', 'asdas', 'asd', 'adsa', 'asdas', '', 0, 0, 0, 0, '0000-00-00', 0, '0000-00-00'),
(34, 'daf', 'sfdas', 'sfsd', 'sdfdsf', 'sdf', '', 0, 0, 0, 0, '0000-00-00', 0, '0000-00-00'),
(35, 'sfds', 'dsf', 'sdfds', 'sdf', 'sdf', '', 0, 0, 0, 0, '0000-00-00', 0, '0000-00-00'),
(36, 'lllllllll', 'llllllll', 'lllllll', 'llllllll@gmail.com', '$2y$10$ER4Zz2K2/3DyDKkAPFPAg.JdCNeJ8kJbOCdHUJRMs5dbv2comkl6y', '', 0, 0, 0, 0, '0000-00-00', 0, '0000-00-00'),
(38, 'aaaaabbbbbbbbb', 'aaaaa', 'aaaaa', 'aaa@gmail.com', '$2y$10$G4StmcYym31L47o.65IpzOhf3UxvnKJ/xrvL3cFmDb.cvIzCC926q', '', 0, 0, 13, 0, '0000-00-00', 0, '0000-00-00'),
(39, 'bg', 'dfgdf', 'dfdfg', 'hhh@gmail.com', '$2y$10$xN0FpbW9JHf1PehILTFEdemo6FSR3KhiiWxuFu85V.qG5Y6eI7sk2', '', 0, 0, 13, 0, '0000-00-00', 0, '0000-00-00'),
(40, 'xvcv', 'xbxv', 'cvb', 'st@gmail.com', '$2y$10$V97tNc7YhlymcpdzyALXteeWsnJeuxAnNaZdJnqvdxwrcJUDqEZpK', '', 0, 0, 17, 17, '2021-06-04', 0, '0000-00-00'),
(41, 'syed mominul', ' islam', 'momin', 'momin@gmail.com', '$2y$10$7j54WJguZQ9JrUr80as9PuwrnJLoLHiF5gjGfb40d4e2NzVj0cFrO', '', 1, 0, 13, 17, '2021-06-04', 0, '0000-00-00'),
(42, 'zzzz', 'zzzzz', 'zzzzzzzzz', 'zzzz@gmail.com', '$2y$10$FhgGMILQ6vj8DaVM.PIGAeV9tyd2M/xJ/vMRugtvKp9F/d5Ml1xNG', '', 1, 0, 17, 17, '2021-06-06', 0, '0000-00-00'),
(43, 'ddfg', 'fgdf', 'gd', 'dsfs@fs.com', '$2y$10$rG96kOQjn3tf46R8QUSKau4Z1gUSIEuRFVEqBk/LQEPFJRgc1Ks2m', '', 0, 0, 19, 17, '2021-06-07', 0, '0000-00-00'),
(44, 'dsf', 'sfdsd', 'sdf', 'sfdsd@sdf.ccc', '$2y$10$YaxDpcvpkIcTMrpw1nU81ebrJY./A2qyURy7arjJ/BEagXbaignYW', '', 0, 0, 24, 17, '2021-06-07', 0, '0000-00-00'),
(45, 'afsd', 'sdfsdf', 'sfdds', '', '$2y$10$8gIcvhQ3fFFGK3gIkv/MEuqQXZEpzG2gQYvIYNd.ZELPjMGwo.U4i', '', 1, 0, 24, 17, '2021-06-07', 0, '0000-00-00'),
(46, 'syed ', 'Islam', 'momin', 'syedmia56@gmail.com', '$2y$10$PiZJLispmyBb.Rgtzv1jQeOiM2nr0f5VNhMOW8S9dWpc44j3sg0r2', '', 1, 0, 24, 17, '2021-06-07', 17, '2021-06-07'),
(47, 'safwan', 'nusaer', 'abdulla', 'ab@gmail.com', '$2y$10$SCHnafq228m72XwtLsusC.V/ZTRlE/6LdK.2gQdw0N/n5PgYnyDf6', '_MG_0119.JPG', 1, 0, 18, 17, '2021-06-07', 0, '0000-00-00'),
(48, 'ahmad', 'juhaer', 'ahmad', 'ahmad@gmail.com', '$2y$10$5QaCZh0iPg3NiKrdocLrFeaMTgQ1dmVwk2SHg.2w3Q0m57/12dka2', '00100sPORTRAIT_00100_BURST20200916162741840_COVER.jpg', 1, 0, 14, 17, '2021-06-07', 0, '0000-00-00'),
(49, 'Syed Nurul', 'Islam', 'syednurulislam', 'syednurulislam@gmail.com', '$2y$10$wd4/Xf6w6iorXI9K.OIVNeAud8ZySvYNgYPCWspiIa5XNFBVyP3fu', 'mominul_1.jpg', 1, 0, 24, 48, '2021-06-07', 0, '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `snit_user_role_list`
--

CREATE TABLE `snit_user_role_list` (
  `id` int(10) NOT NULL,
  `role_name` varchar(50) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `deleted` tinyint(1) NOT NULL,
  `created_by` varchar(50) NOT NULL,
  `created_date` date NOT NULL,
  `updated_by` varchar(50) NOT NULL,
  `updated_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `snit_user_role_list`
--

INSERT INTO `snit_user_role_list` (`id`, `role_name`, `status`, `deleted`, `created_by`, `created_date`, `updated_by`, `updated_date`) VALUES
(13, 'Account ', 0, 0, '', '0000-00-00', '17', '2021-06-05'),
(14, 'Administrator', 0, 0, '', '0000-00-00', '', '0000-00-00'),
(17, 'Data Entry User', 0, 1, '', '0000-00-00', '', '0000-00-00'),
(18, ' Manager', 0, 0, '', '0000-00-00', '', '0000-00-00'),
(19, 'kkkkkkkkkkkkk', 0, 1, '', '0000-00-00', '', '0000-00-00'),
(20, 'kkkkkkkkkkk', 0, 0, '', '0000-00-00', '', '0000-00-00'),
(21, 'kkkkkkkkkkk', 0, 0, '', '0000-00-00', '', '0000-00-00'),
(22, 'hhhh', 1, 0, '17', '2021-06-04', '', '0000-00-00'),
(23, 'hhhh', 1, 0, '17', '2021-06-05', '', '0000-00-00'),
(24, 'mmmmmmmmmmmmm', 1, 0, '17', '2021-06-05', '', '0000-00-00');

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
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `snit_category_list`
--
ALTER TABLE `snit_category_list`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `snit_fixed_asset_list`
--
ALTER TABLE `snit_fixed_asset_list`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `snit_general_ledger_list`
--
ALTER TABLE `snit_general_ledger_list`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `snit_party_list`
--
ALTER TABLE `snit_party_list`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `snit_product_list`
--
ALTER TABLE `snit_product_list`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `snit_product_unit_list`
--
ALTER TABLE `snit_product_unit_list`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `snit_settings`
--
ALTER TABLE `snit_settings`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `snit_user_list`
--
ALTER TABLE `snit_user_list`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT for table `snit_user_role_list`
--
ALTER TABLE `snit_user_role_list`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
