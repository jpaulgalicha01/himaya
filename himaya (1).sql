-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 22, 2023 at 05:48 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `himaya`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_accounts`
--

CREATE TABLE `tbl_accounts` (
  `acc_id` int(11) NOT NULL,
  `acc_rand_id` text DEFAULT NULL,
  `acc_fname` text DEFAULT NULL,
  `acc_mname` text DEFAULT NULL,
  `acc_lname` text DEFAULT NULL,
  `acc_address` text DEFAULT NULL,
  `acc_birth` text DEFAULT NULL,
  `acc_phone` text DEFAULT NULL,
  `acc_email` text DEFAULT NULL,
  `acc_uname` text DEFAULT NULL,
  `acc_password` text DEFAULT NULL,
  `acc_profile` text DEFAULT NULL,
  `acc_type` text DEFAULT NULL,
  `acc_status` text DEFAULT NULL,
  `acc_otp` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_accounts`
--

INSERT INTO `tbl_accounts` (`acc_id`, `acc_rand_id`, `acc_fname`, `acc_mname`, `acc_lname`, `acc_address`, `acc_birth`, `acc_phone`, `acc_email`, `acc_uname`, `acc_password`, `acc_profile`, `acc_type`, `acc_status`, `acc_otp`) VALUES
(22, '1668125060', 'admin', 'admin', 'admin', 'Brgy. Binicuil Kabankalan City, Neg. Occ', '2023-12-31', '09948487917', 'jpaulgalicha01@gmail.com', 'admin', '7815696ecbf1c96e6894b779456d330e', 'default-img.png', 'admin', NULL, '59164');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_products`
--

CREATE TABLE `tbl_products` (
  `prod_id` int(11) NOT NULL,
  `prod_post_user_id` text DEFAULT NULL,
  `product_post_name` text DEFAULT NULL,
  `product_categories` text DEFAULT NULL,
  `product_image` text DEFAULT NULL,
  `product_type` text DEFAULT NULL,
  `product_name` text DEFAULT NULL,
  `product_address` text DEFAULT NULL,
  `product_contact` text DEFAULT NULL,
  `carrier_cap` text DEFAULT NULL,
  `trade_expected_trade` text DEFAULT NULL,
  `trade_duration_date` text DEFAULT NULL,
  `product_availability` text DEFAULT NULL,
  `product_status` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_accounts`
--
ALTER TABLE `tbl_accounts`
  ADD PRIMARY KEY (`acc_id`);

--
-- Indexes for table `tbl_products`
--
ALTER TABLE `tbl_products`
  ADD PRIMARY KEY (`prod_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_accounts`
--
ALTER TABLE `tbl_accounts`
  MODIFY `acc_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

--
-- AUTO_INCREMENT for table `tbl_products`
--
ALTER TABLE `tbl_products`
  MODIFY `prod_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
