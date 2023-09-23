-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 24, 2022 at 01:34 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dlsau_hotel`
--

-- --------------------------------------------------------

--
-- Table structure for table `admindash`
--

CREATE TABLE `admindash` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `dob` text NOT NULL,
  `contact` int(11) NOT NULL,
  `address` varchar(255) NOT NULL,
  `image` varchar(2000) NOT NULL,
  `created_on` date NOT NULL,
  `group_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admindash`
--

INSERT INTO `admindash` (`id`, `username`, `email`, `password`, `firstname`, `lastname`, `gender`, `dob`, `contact`, `address`, `image`, `created_on`, `group_id`) VALUES
(1, 'admin', 'admin@gmail.com', 'aa7f019c326413d5b8bcad4314228bcd33ef557f5d81c7cc977f7728156f4357', 'admin', 'admin', 'Male', '', 945612357, '0', 'user.png', '2020-12-27', 1),
(2, 'user', 'user@gmail.com', 'user', '', '', '', '', 0, '', '', '0000-00-00', 0);

-- --------------------------------------------------------

--
-- Table structure for table `cancel_reservation`
--

CREATE TABLE `cancel_reservation` (
  `id` int(11) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `contact` int(11) NOT NULL,
  `position` varchar(255) NOT NULL,
  `purposeofstay` varchar(255) NOT NULL,
  `adults` int(100) NOT NULL,
  `children` int(100) NOT NULL,
  `room_type` varchar(255) NOT NULL,
  `room_price` int(255) NOT NULL,
  `checkin` date NOT NULL,
  `bookcheckin_time` time NOT NULL,
  `checkout` date NOT NULL,
  `bookcheckout_time` time NOT NULL,
  `status` varchar(100) NOT NULL,
  `cancellation_fee` int(11) NOT NULL,
  `payment_method` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cancel_reservation`
--

INSERT INTO `cancel_reservation` (`id`, `firstname`, `lastname`, `email`, `address`, `contact`, `position`, `purposeofstay`, `adults`, `children`, `room_type`, `room_price`, `checkin`, `bookcheckin_time`, `checkout`, `bookcheckout_time`, `status`, `cancellation_fee`, `payment_method`) VALUES
(2, 'Ch', 'Yu', 'xtianjeffersonyu22@gmail.com', 'bulacan', 2147483647, 'Guest', 'Christening', 1, 0, 'Executive Double (2 PAX)', 1538, '2021-11-05', '10:04:00', '2021-11-06', '12:01:00', 'Cancelled Pending Reservation', 0, 'No Cancellation Fee'),
(3, 'Ch', 'Yu', 'xtianjeffersonyu22@gmail.com', 'bulacan', 2147483647, 'Employee', 'Birthday', 1, 0, 'Executive King (4 PAX)', 1898, '2021-09-25', '08:54:00', '2021-09-26', '11:50:00', 'Cancelled Reservation', 400, 'Bank'),
(4, 'Ada', 'Yu', 'christianjeffersonfyu22@gmail.com', 'Malabon', 2147483647, 'Alumni', 'Family Events', 1, 0, 'Executive King (2 PAX)', 1898, '2021-11-08', '12:01:00', '2021-11-09', '12:01:00', 'Cancelled Reservation', 0, 'No Cancellation Fee'),
(5, 'Hij', 'Yu', 'christianjeffersonfyu22@gmail.com', 'bulacan', 2147483647, 'Guest', 'Family Events', 1, 0, 'Executive Double (2 PAX)', 1538, '2021-11-08', '12:02:00', '2021-11-09', '12:00:00', 'Cancelled Reservation', 400, 'Cash');

-- --------------------------------------------------------

--
-- Table structure for table `checkout_report`
--

CREATE TABLE `checkout_report` (
  `checkout_id` int(11) NOT NULL,
  `fullname` varchar(255) CHARACTER SET latin1 NOT NULL,
  `email_address` varchar(50) CHARACTER SET latin1 NOT NULL,
  `address` varchar(255) CHARACTER SET latin1 NOT NULL,
  `contact_no` int(11) NOT NULL,
  `purposeofstay` varchar(15) CHARACTER SET latin1 NOT NULL,
  `position` varchar(15) CHARACTER SET latin1 NOT NULL,
  `adults` int(255) NOT NULL,
  `children` int(255) NOT NULL,
  `room_type` varchar(255) CHARACTER SET latin1 NOT NULL,
  `room_no` int(255) NOT NULL,
  `room_price` int(255) NOT NULL,
  `days` int(255) NOT NULL,
  `early_checkin` int(11) NOT NULL,
  `extra_towel` int(11) NOT NULL,
  `extra_bed` int(255) NOT NULL,
  `lost_key` int(11) NOT NULL,
  `checkin` date NOT NULL,
  `bookcheckin_time` time NOT NULL,
  `checkin_time` time NOT NULL,
  `checkout` date NOT NULL,
  `bookcheckout_time` time NOT NULL,
  `checkout_time` time NOT NULL,
  `late_checkout` int(11) NOT NULL,
  `generate_code` varchar(255) CHARACTER SET latin1 NOT NULL,
  `sub_total` int(255) NOT NULL,
  `discount` int(50) NOT NULL,
  `total_amount` int(255) NOT NULL,
  `deposit` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `payment_date` date NOT NULL,
  `payment_time` time NOT NULL,
  `payment_method` varchar(255) CHARACTER SET latin1 NOT NULL,
  `payment_status` varchar(255) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `checkout_report`
--

INSERT INTO `checkout_report` (`checkout_id`, `fullname`, `email_address`, `address`, `contact_no`, `purposeofstay`, `position`, `adults`, `children`, `room_type`, `room_no`, `room_price`, `days`, `early_checkin`, `extra_towel`, `extra_bed`, `lost_key`, `checkin`, `bookcheckin_time`, `checkin_time`, `checkout`, `bookcheckout_time`, `checkout_time`, `late_checkout`, `generate_code`, `sub_total`, `discount`, `total_amount`, `deposit`, `status`, `payment_date`, `payment_time`, `payment_method`, `payment_status`) VALUES
(18, 'Jonathan  De Ocampo', 'jonathandeocampo06@gmail.com', 'QC', 2147483647, 'Christening', 'Alumni', 1, 0, 'Executive Double (2 PAX)', 201, 1398, 1, 0, 0, 1, 0, '2021-04-24', '07:44:00', '00:00:00', '2021-04-25', '08:44:00', '00:00:00', 0, '34iAHeMpvT', 0, 0, 0, '0', 'Check Out', '2021-04-28', '14:10:36', 'Cash', 'Paid'),
(19, 'Jonathan  De Ocampo', 'jonathandeocampo06@gmail.com', 'QC', 2147483647, 'Birthday', 'Alumni', 1, 0, 'Executive Double (2 PAX)', 201, 1398, 1, 0, 0, 1, 0, '2021-04-21', '08:21:00', '00:00:00', '2021-04-22', '09:21:00', '00:00:00', 0, 'PnWxKpRQhi', 0, 0, 0, '0', 'Check Out', '2021-05-03', '11:41:05', 'Cash', 'Paid'),
(22, 'Jonathan  De Ocampo', 'jonathandeocampo06@gmail.com', 'QC', 2147483647, 'Birthday', 'Student', 1, 0, 'Executive Double (2 PAX)', 202, 1398, 1, 0, 0, 1, 0, '2021-04-25', '08:44:00', '00:00:00', '2021-04-26', '09:43:00', '00:00:00', 0, 'SGzuiyngAQ', 0, 0, 0, '0', 'Check Out', '2021-05-03', '13:46:59', 'Cash', 'Paid'),
(23, 'Jonathan  De Ocampo', 'jonathandeocampo06@gmail.com', 'QC', 2147483647, 'Family Events', 'Alumni', 1, 0, 'Executive Double (2 PAX)', 201, 1398, 4, 0, 0, 1, 0, '2021-04-27', '09:49:00', '00:00:00', '2021-05-01', '09:49:00', '00:00:00', 0, 'sXlhaUZ2@w', 0, 0, 57528, '0', 'Check Out', '2021-05-03', '13:48:21', 'Cash', 'Paid'),
(24, 'Jonathan  De Ocampo', 'jonathandeocampo06@gmail.com', 'QC', 2147483647, 'Christening', 'Guest', 2, 1, 'Executive King (4 PAX)', 204, 1898, 1, 0, 0, 1, 0, '2021-06-14', '12:41:00', '00:00:00', '2021-06-15', '12:42:00', '00:00:00', 0, 'idhOtJPmYg', 0, 0, 2698, '0', 'Pending Check Out', '0000-00-00', '00:00:00', 'Cash', 'Unpaid'),
(25, 'hij klm', 'xtianjeffersonyu22@gmail.com', 'Malabon', 2147483647, 'Weddings', 'Student', 1, 0, 'Executive Double (2 PAX)', 202, 1398, 1, 0, 0, 0, 0, '2021-06-23', '08:06:00', '00:00:00', '2021-06-24', '07:08:00', '00:00:00', 0, 'MidTzo?t2a', 0, 0, 699, '0', 'Check Out', '2021-06-07', '15:44:36', 'Cash', 'Paid'),
(26, 'hij klm', 'xtianjeffersonyu22@gmail.com', 'Malabon', 2147483647, 'Weddings', 'Student', 1, 0, 'Executive Double (2 PAX)', 202, 1398, 1, 0, 0, 0, 0, '2021-06-23', '08:06:00', '00:00:00', '2021-06-24', '07:08:00', '00:00:00', 0, 'MidTzo?t2a', 0, 0, 699, '0', 'Check Out', '2021-06-07', '15:45:55', 'Cash', 'Paid'),
(27, 'abc def', 'xtianjeffersonyu22@gmail.com', 'QC', 2147483647, 'Student', 'Guest', 1, 0, 'Executive Double (2 PAX)', 202, 1398, 1, 0, 0, 1, 0, '2021-06-23', '07:56:00', '00:00:00', '2021-06-24', '06:56:00', '00:00:00', 0, 'kGKm#IqyiP', 0, 0, 1978, '0', 'Check Out', '2021-06-07', '15:51:24', 'Cash', 'Paid'),
(28, 'ch yu', 'xtianjeffersonyu22@gmail.com', 'bulacan', 2147483647, 'Weddings', 'Student', 2, 1, 'Executive Double (2 PAX)', 0, 1398, 1, 0, 0, 5, 0, '2021-06-09', '07:48:00', '00:00:00', '2021-06-10', '07:48:00', '00:00:00', 0, 'ktL3lmX2OI', 0, 50, 0, '0', 'Check Out', '2021-06-07', '17:08:15', 'Cash', 'Paid'),
(29, 'ch def', 'xtianjeffersonyu22@gmail.com', 'bulacan', 2147483647, 'Family Events', 'Guest', 1, 0, 'Executive Double (2 PAX)', 0, 1398, 1, 0, 0, 0, 0, '2021-06-11', '09:11:00', '00:00:00', '2021-06-12', '09:11:00', '00:00:00', 0, 'PXZErLVFfG', 0, 50, 0, '0', 'Check Out', '2021-06-07', '17:14:03', 'Cash', 'Paid'),
(30, 'abc def', 'xtianjeffersonyu22@gmail.com', 'Malabon', 2147483647, 'Student', 'Employee', 1, 0, 'Executive Double (2 PAX)', 44, 1398, 1, 0, 0, 0, 0, '2021-06-25', '08:11:00', '00:00:00', '2021-06-26', '07:11:00', '00:00:00', 0, 'v5RPMQE7dU', 0, 0, 0, '0', 'Check Out', '2021-06-07', '17:24:15', 'Cash', 'Paid'),
(31, 'hij klm', 'xtianjeffersonyu22@gmail.com', 'Malabon', 2147483647, 'Christening', 'Alumni', 1, 0, 'Executive Double (2 PAX)', 10, 1398, 1, 0, 0, 0, 0, '2021-06-11', '10:30:00', '00:00:00', '2021-06-12', '08:30:00', '00:00:00', 0, 'eW09mKhU@k', 0, 50, 0, '0', 'Check Out', '2021-06-07', '17:33:35', 'Cash', 'Paid'),
(32, 'abc def', 'xtianjeffersonyu22@gmail.com', 'bulacan', 2147483647, 'Christening', 'Alumni', 1, 0, 'Executive Double (2 PAX)', 50, 1398, 1, 0, 0, 2, 0, '2021-06-14', '07:39:00', '00:00:00', '2021-06-15', '07:39:00', '00:00:00', 0, 'STBUXZ7OiH', 0, 50, 1499, '0', 'Check Out', '2021-06-07', '17:40:59', 'Cash', 'Paid'),
(33, 'abc klm', 'xtianjeffersonyu22@gmail.com', 'bulacan', 2147483647, 'Birthday', 'Guest', 1, 0, 'Executive Double (2 PAX)', 12, 1398, 1, 0, 0, 5, 0, '2021-06-15', '10:45:00', '00:00:00', '2021-06-16', '10:45:00', '00:00:00', 0, 'Qz*fxvW93b', 0, 80, 1080, '0', 'Check Out', '2021-06-07', '18:04:05', 'Cash', 'Paid'),
(34, 'abc def', 'xtianjeffersonyu22@gmail.com', 'Malabon', 2147483647, 'Christening', 'Alumni', 1, 0, 'Executive King (4 PAX)', 4, 1898, 5, 0, 0, 5, 0, '2021-06-17', '08:45:00', '00:00:00', '2021-06-22', '07:45:00', '00:00:00', 0, 'Vt0eiUqrRL', 0, 10, 3600, '0', 'Check Out', '2021-06-08', '17:31:17', 'Cash', 'Paid'),
(35, 'hij yu', 'xtianjeffersonyu22@gmail.com', 'Malabon', 2147483647, 'Meeting/Seminar', 'Guest', 1, 0, 'Executive Double (2 PAX)', 0, 1398, 1, 0, 0, 0, 0, '2021-06-14', '08:21:00', '12:00:00', '2021-06-15', '10:21:00', '12:00:00', 0, '0Ars#IqHOi', 0, 50, 699, '0', 'Check Out', '2021-06-08', '17:49:27', 'Cash', 'Paid'),
(36, 'Jonathan  De Ocampo', 'jonathandeocampo06@gmail.com', 'QC', 2147483647, 'Birthday', 'Alumni', 1, 1, 'Executive Double (2 PAX)', 202, 1398, 1, 0, 0, 0, 0, '2021-06-22', '06:51:00', '12:00:00', '2021-06-23', '07:51:00', '12:00:00', 0, 'ocOY1k5PL#', 0, 0, 1258, '0', 'Check Out', '2021-06-09', '13:08:32', 'Cash', 'Paid'),
(37, 'Jonathan  De Ocampo', 'jonathandeocampo06@gmail.com', 'QC', 2147483647, 'Family Events', 'Guest', 1, 2, 'Executive Double (2 PAX)', 202, 1398, 1, 0, 0, 0, 0, '2021-06-21', '06:46:00', '12:00:00', '2021-06-22', '06:46:00', '12:00:00', 0, 'vOP@QJ73pL', 0, 0, 1398, '0', 'Check Out', '2021-06-09', '13:17:10', 'Cash', 'Paid'),
(38, 'abc def', 'xtianjeffersonyu22@gmail.com', 'QC', 2147483647, 'Christening', 'Guest', 1, 0, 'Executive King (4 PAX)', 50, 1898, 1, 0, 0, 2, 0, '2021-06-16', '08:58:00', '07:12:00', '2021-06-17', '08:58:00', '02:00:00', 0, '6piAhuTgaE', 3498, 50, 1749, '0', 'Check Out', '2021-06-09', '14:01:14', 'Cash', 'Paid'),
(39, 'abc def', 'xtianjeffersonyu22@gmail.com', 'bulacan', 2147483647, 'Christening', 'Guest', 1, 0, 'Executive Double (2 PAX)', 1, 1398, 1, 0, 0, 2, 0, '2021-06-14', '07:18:00', '07:23:00', '2021-06-15', '07:18:00', '02:05:00', 0, '0RKkch7Dal', 2998, 50, 1499, '0', 'Check Out', '2021-06-09', '14:05:50', 'Cash', 'Paid'),
(40, 'hij klm', 'xtianjeffersonyu22@gmail.com', 'QC', 2147483647, 'Christening', 'Guest', 1, 0, 'Executive Double (2 PAX)', 10, 1398, 1, 0, 0, 2, 0, '2021-06-10', '05:10:00', '01:26:00', '2021-06-11', '05:10:00', '14:11:01', 0, '#FXEdiIAa?', 0, 50, 1499, '0', 'Check Out', '2021-06-09', '14:11:01', 'Salary Deduction', 'Paid'),
(41, 'ch def', 'xtianjeffersonyu22@gmail.com', 'QC', 2147483647, 'Birthday', 'Guest', 1, 1, 'Executive Double (2 PAX)', 1, 1398, 1, 0, 0, 5, 0, '2021-06-10', '06:31:00', '02:32:00', '2021-06-11', '06:31:00', '14:46:29', 0, 'XoVnrik7H2', 5398, 10, 4858, '0', 'Check Out', '2021-06-09', '14:46:29', 'Salary Deduction', 'Paid'),
(42, 'abc def', 'xtianjeffersonyu22@gmail.com', 'bulacan', 2147483647, 'Family Events', 'Alumni', 1, 0, 'Executive Double (2 PAX)', 10, 1398, 1, 0, 0, 5, 0, '2021-06-10', '07:38:00', '03:39:00', '2021-06-11', '06:38:00', '03:46:00', 0, 'Z9hLYM@UG?', 5398, 50, 2699, '0', 'Check Out', '2021-06-09', '15:48:42', 'Cash', 'Paid'),
(43, 'abc klm', 'xtianjeffersonyu22@gmail.com', 'QC', 2147483647, 'Christening', 'Alumni', 1, 0, 'Executive King (2 PAX)', 1, 1598, 1, 0, 0, 5, 0, '2021-06-10', '04:54:00', '02:56:00', '2021-06-11', '04:54:00', '02:59:00', 0, 'k0lzUDhr6V', 5598, 10, 5038, '0', 'Check Out', '2021-06-09', '15:51:05', 'Cash', 'Paid'),
(44, 'Jonathan  De Ocampo', 'jonathandeocampo06@gmail.com', 'QC', 2147483647, 'Weddings', 'Student', 1, 0, 'Executive King (2 PAX)', 203, 1598, 1, 0, 0, 0, 0, '2021-06-09', '01:40:00', '12:00:00', '2021-06-10', '02:40:00', '12:00:00', 0, 'kfwz@pLaVU', 0, 0, 1598, '0', 'Check Out', '2021-06-09', '16:07:52', 'Cash', 'Paid'),
(45, 'abc def', 'xtianjeffersonyu22@gmail.com', 'Malabon', 2147483647, 'Christening', 'Alumni', 1, 0, 'Executive Double (2 PAX)', 1, 1398, 1, 0, 0, 2, 0, '2021-06-10', '08:15:00', '04:16:00', '2021-06-11', '08:15:00', '04:16:00', 0, 'byui5k#8ph', 2998, 50, 1499, '0', 'Check Out', '2021-06-09', '16:17:09', 'Cash', 'Paid'),
(46, 'ch yu', 'xtianjeffersonyu22@gmail.com', 'Malabon', 2147483647, 'Family Events', 'Alumni', 1, 0, 'Executive Double (2 PAX)', 1, 1398, 1, 0, 0, 5, 0, '2021-06-10', '08:21:00', '04:22:00', '2021-06-11', '07:21:00', '04:22:00', 0, 'XQHB70GzVi', 5398, 50, 2699, '0', 'Check Out', '2021-06-09', '16:22:27', 'Bank', 'Paid'),
(47, 'abc def', 'xtianjeffersonyu22@gmail.com', 'Malabon', 2147483647, 'Christening', 'Guest', 1, 0, 'Executive Double (2 PAX)', 1, 1398, 1, 0, 0, 5, 0, '2021-06-10', '07:24:00', '04:25:00', '2021-06-11', '08:24:00', '04:25:00', 0, 'tiMLlydSGQ', 4000, 10, 3600, '0', 'Check Out', '2021-06-09', '16:27:39', 'Salary Deduction', 'Paid'),
(48, 'ch def', 'xtianjeffersonyu22@gmail.com', 'bulacan', 3224, 'Christening', 'Alumni', 1, 0, 'Executive King (2 PAX)', 23, 1598, 1, 0, 1, 1, 1, '2021-06-25', '04:51:00', '04:49:00', '2021-06-26', '07:49:00', '05:43:00', 0, 'idGhJ5Q63t', 2998, 50, 1499, '0', 'Check Out', '2021-06-10', '17:50:45', 'Cash', 'Paid'),
(49, 'abc def', 'xtianjeffersonyu22@gmail.com', 'Malabon', 3224, 'Reunion', 'Guest', 1, 0, 'Executive King (4 PAX)', 14, 1898, 1, 0, 1, 1, 1, '2021-06-26', '09:05:00', '05:05:00', '2021-06-27', '09:05:00', '05:42:00', 0, '0LqtMcWsST', 2798, 50, 1399, '0', 'Check Out', '2021-06-10', '18:01:08', 'Cash', 'Paid'),
(50, 'ch yu', 'xtianjeffersonyu22@gmail.com', 'bulacan', 2147483647, 'Christening', 'Guest', 1, 0, 'Executive Double (2 PAX)', 1, 1398, 1, 0, 0, 1, 0, '2021-06-10', '09:41:00', '04:42:00', '2021-06-11', '09:41:00', '04:58:00', 0, '3ukIVerEzM', 2198, 10, 1978, '0', 'Check Out', '2021-06-10', '18:07:55', 'Cash', 'Paid'),
(51, 'ch def', 'xtianjeffersonyu22@gmail.com', 'Malabon', 2147483647, 'Family Events', 'Guest', 1, 0, 'Executive King (2 PAX)', 10, 1598, 1, 500, 1, 0, 0, '2021-06-13', '04:48:00', '01:49:00', '2021-06-14', '03:48:00', '06:02:00', 0, 'owDbXQfahI', 2198, 50, 1099, '0', 'Check Out', '2021-06-10', '18:08:44', 'Cash', 'Paid'),
(52, 'ch klm', 'xtianjeffersonyu22@gmail.com', 'Malabon', 2147483647, 'Family Events', 'Alumni', 1, 1, 'Executive King (4 PAX)', 12, 1898, 1, 0, 0, 1, 0, '2021-06-26', '08:54:00', '04:55:00', '2021-06-27', '07:54:00', '05:37:00', 0, 'wOlFYQq2ai', 2798, 50, 1399, '0', 'Check Out', '2021-06-10', '18:14:40', 'Salary Deduction', 'Paid'),
(53, 'ch yu', 'xtianjeffersonyu22@gmail.com', 'bulacan', 2147483647, 'Birthday', 'Guest', 1, 2, 'Executive Double (2 PAX)', 1, 1398, 1, 0, 1, 1, 1, '2021-06-12', '12:53:00', '01:41:00', '2021-06-13', '11:54:00', '06:18:00', 0, '1ZVIv3Ht#y', 2298, 10, 2068, '0', 'Check Out', '2021-06-10', '18:21:58', 'Salary Deduction', 'Paid'),
(54, 'abc klm', 'xtianjeffersonyu22@gmail.com', 'Malabon', 2147483647, 'Family Events', 'Guest', 1, 1, 'Executive Double (2 PAX)', 20, 1398, 1, 0, 0, 1, 1, '2021-06-14', '06:55:00', '01:56:00', '2021-06-15', '05:55:00', '06:23:00', 0, '1Ds*ezwB2d', 1898, 10, 1708, '0', 'Check Out', '2021-06-10', '18:23:39', 'Cash', 'Paid'),
(55, 'ch klm', 'xtianjeffersonyu22@gmail.com', 'bulacan', 2147483647, 'Christening', 'Guest', 1, 0, 'Executive King (4 PAX)', 42, 1898, 1, 0, 0, 0, 0, '2021-06-24', '08:47:00', '04:48:00', '2021-06-25', '08:47:00', '06:39:00', 0, 'xoDqIS971R', 1898, 50, 949, '0', 'Check Out', '2021-06-10', '19:45:09', 'Cash', 'Paid'),
(56, 'abc def', 'xtianjeffersonyu22@gmail.com', 'Malabon', 2147483647, 'Christening', 'Guest', 1, 1, 'Executive Double (2 PAX)', 30, 1398, 1, 0, 0, 0, 0, '2021-06-21', '08:38:00', '04:42:00', '2021-06-22', '07:38:00', '06:49:00', 0, 'SX6pQaJcG@', 1398, 10, 1258, '0', 'Check Out', '2021-07-08', '13:30:14', 'Cash', 'Paid'),
(57, 'ch yu', 'xtianjeffersonyu22@gmail.com', 'bulacan', 2147483647, 'Christening', 'Guest', 1, 1, 'Executive King (2 PAX)', 50, 1598, 1, 500, 0, 0, 0, '2021-07-21', '17:18:00', '17:16:01', '2021-07-22', '17:17:00', '17:16:19', 0, 'y1HRJixAPF', 2098, 5, 1993, '0', 'Check Out', '2021-07-13', '17:16:44', 'Salary Deduction', 'Paid'),
(58, 'Hij Yu', 'christianjeffersonfyu22@gmail.com', 'ada', 2147483647, 'Christening', 'Guest', 1, 0, 'Executive King (2 PAX)', 1, 1898, 1, 0, 0, 0, 0, '2021-11-08', '12:01:00', '11:57:17', '2021-11-09', '15:58:00', '11:57:32', 500, 'TiOMP8s3zG', 1898, 5, 2278, '0', 'Check Out', '2021-11-30', '12:09:30', 'Cash', 'Paid'),
(59, 'Ch Yu', 'xtianjeffersonyu22@gmail.com', 'Malabon', 2147483647, 'Christening', 'Alumni', 1, 0, 'Executive King (4 PAX)', 4, 1898, 1, 0, 1, 1, 1, '2022-03-23', '14:44:00', '16:32:45', '2022-03-24', '14:45:00', '16:36:56', 500, 'ctbh6lR4VF', 1400, 0, 1400, '0', 'Check Out', '2022-03-22', '16:40:02', 'Cash', 'Paid'),
(60, 'Ch Yu', 'xtianjeffersonyu22@gmail.com', 'bulacan', 2147483647, 'Meeting/Seminar', 'Alumni', 1, 0, 'Executive Double (2 PAX)', 1, 1538, 1, 0, 0, 0, 0, '2022-03-23', '20:39:00', '20:38:13', '2022-03-24', '03:39:00', '20:55:15', 0, 'pmMq2EPtb?', 0, 0, 0, '0', 'Check Out', '2022-03-22', '21:00:14', 'Salary Deduction', 'Paid'),
(61, 'Ch Yu', 'xtianjeffersonyu22@gmail.com', 'Malabon', 2147483647, 'Christening', 'Alumni', 1, 0, 'Executive King (2 PAX)', 2, 1898, 1, 0, 0, 0, 1, '2021-09-24', '17:55:00', '19:38:49', '2021-09-25', '17:54:00', '19:39:54', 0, 'yzTP4fwke#', 1898, 0, 0, '0', 'Check Out', '2022-03-22', '21:01:23', 'Cash', 'Paid'),
(62, 'abc klm', 'xtianjeffersonyu22@gmail.com', 'QC', 2147483647, 'Christening', 'Guest', 1, 0, 'Executive King (4 PAX)', 18, 1898, 1, 500, 1, 1, 1, '2021-06-28', '09:08:00', '05:09:00', '2021-06-29', '08:08:00', '18:37:42', 0, 'K@7iZdI46S', 3298, 50, 1649, '', 'Check Out', '2022-03-22', '21:03:08', 'Cash', 'Paid'),
(63, 'abc klm', 'xtianjeffersonyu22@gmail.com', 'Malabon', 2147483647, 'Christening', 'Guest', 1, 0, 'Executive King (4 PAX)', 41, 1898, 1, 0, 1, 1, 1, '2021-06-22', '05:44:00', '04:45:00', '2021-06-23', '06:44:00', '18:47:55', 0, 'PrlDiW9Hfa', 2798, 10, 2518, '', 'Check Out', '2022-03-22', '21:08:10', 'Cash', 'Paid'),
(64, 'ch yu', 'xtianjeffersonyu22@gmail.com', 'bulacan', 2147483647, 'Christening', 'Alumni', 1, 0, 'Executive King (2 PAX)', 12, 1898, 1, 0, 0, 0, 0, '2021-08-16', '13:37:00', '13:37:06', '2021-08-17', '16:36:00', '15:24:24', 0, 'InR#UtKd@M', 1398, 0, 1398, '', 'Check Out', '2022-03-22', '21:09:21', 'Cash', 'Paid'),
(65, 'abc def', 'xtianjeffersonyu22@gmail.com', 'bulacan', 2147483647, 'Christening', 'Guest', 1, 2, 'Executive King (2 PAX)', 40, 1898, 2, 0, 1, 1, 1, '2021-06-11', '18:27:00', '14:28:48', '2021-06-13', '18:27:00', '17:35:26', 0, 'sflItGuzVe', 3696, 10, 3326, '', 'Check Out', '2022-03-22', '21:09:38', 'Cash', 'Paid'),
(66, 'Ch Yu', 'xtianjeffersonyu22@gmail.com', 'bulacan', 2147483647, 'Christening', 'Employee', 1, 0, 'Executive Family (4 PAX)', 50, 1598, 1, 0, 0, 0, 0, '2021-10-01', '18:37:00', '17:37:27', '2021-10-02', '19:37:00', '17:45:18', 0, '9BvLDQAtfs', 1598, 0, 1598, '', 'Check Out', '2022-03-22', '21:12:37', 'Cash', 'Paid'),
(67, 'Ch Yu', 'xtianjeffersonyu22@gmail.com', 'bulacan', 2147483647, 'Birthday', 'Alumni', 1, 0, 'Executive Family (4 PAX)', 2, 1598, 2, 0, 0, 1, 1, '2021-09-24', '17:23:00', '17:36:21', '2021-09-26', '17:28:00', '19:26:27', 0, '1TyFutzJL@', 3696, 0, 3696, '', 'Check Out', '2022-03-22', '21:12:58', 'Salary Deduction', 'Paid'),
(68, 'Ch Yu', 'xtianjeffersonyu22@gmail.com', 'bulacan', 2147483647, 'Family Events', 'Employee', 1, 0, 'Executive Family (4 PAX)', 2, 1598, 1, 0, 0, 0, 1, '2021-10-01', '19:40:00', '19:42:50', '2021-10-02', '19:39:00', '19:43:16', 0, '3cyi82hsPz', 1598, 0, 1599, '', 'Check Out', '2022-03-22', '21:14:40', 'Cash', 'Paid'),
(69, 'Ch Yu', 'xtianjeffersonyu22@gmail.com', 'bulacan', 2147483647, 'Family Events', 'Alumni', 1, 0, 'Executive Family (4 PAX)', 2, 1598, 1, 0, 0, 0, 2, '2021-10-01', '19:43:00', '19:45:48', '2021-10-02', '19:44:00', '20:43:19', 0, 'OCTVJF@iyr', 2198, 0, 2198, '', 'Check Out', '2022-03-22', '21:16:37', 'Salary Deduction', 'Paid'),
(70, 'Ch Yu', 'xtianjeffersonyu22@gmail.com', 'bulacan', 2147483647, 'Christening', 'Alumni', 1, 0, 'Executive King (2 PAX)', 1, 1898, 2, 500, 1, 1, 1, '2021-09-27', '20:51:00', '21:01:29', '2021-09-29', '20:50:00', '21:02:04', 0, 'sQ?gMkOEh1', 5196, 50, 2598, '', 'Check Out', '2022-03-22', '21:16:57', 'Cash', 'Paid');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `contact_id` int(11) NOT NULL,
  `contact_firstname` varchar(15) NOT NULL,
  `contact_lastname` varchar(15) NOT NULL,
  `contact_position` varchar(15) NOT NULL,
  `contact_email` varchar(255) NOT NULL,
  `contact_subject` varchar(15) NOT NULL,
  `contact_message` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`contact_id`, `contact_firstname`, `contact_lastname`, `contact_position`, `contact_email`, `contact_subject`, `contact_message`) VALUES
(2, 'Yu', 'Yu', 'Guest', 'xtianjeffersonyu22@gmail.com', 'book', 'dadadwaar');

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `photo_id` int(11) NOT NULL,
  `photo_description` varchar(255) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `photo1` varchar(255) NOT NULL,
  `photo2` varchar(255) NOT NULL,
  `photo3` varchar(255) NOT NULL,
  `photo4` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`photo_id`, `photo_description`, `photo`, `photo1`, `photo2`, `photo3`, `photo4`) VALUES
(3, 'Christmas Party 2019', '22.jpg', '22.jpg', '44.jpg', '33.jpg', '1 1.jpg'),
(4, 'Food Tasting', 'g6.jpg', '55.jpg', '44.jpg', 'rates(2015).jpg', '55.jpg'),
(5, 'Birthday', 'b1.jpg', '33.jpg', '22.jpg', 'b4.jpg', '1 1.jpg'),
(6, 'Food Tasting', '44.jpg', '44.jpg', 'rates(2015).jpg', '33.jpg', 'g6.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `guest`
--

CREATE TABLE `guest` (
  `guest_id` int(11) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `email_address` varchar(150) NOT NULL,
  `address` varchar(255) NOT NULL,
  `contact_no` int(12) NOT NULL,
  `position` varchar(13) NOT NULL,
  `purposeofstay` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `guest`
--

INSERT INTO `guest` (`guest_id`, `firstname`, `lastname`, `email_address`, `address`, `contact_no`, `position`, `purposeofstay`) VALUES
(11, 'Ch', 'Yu', 'christianjeffersonfyu22@gmail.com', 'bulacan', 2147483647, 'Alumni', 'Family Events'),
(13, 'Ch', 'Yu', 'xtianjeffersonyu22@gmail.com', 'Salvador Araneta Campus, 303 Victoneta Ave, Potrero, Malabon, 1475 Metro Manila', 2147483647, 'Alumni', 'Family Events'),
(17, 'Ch', 'Yu', 'xtianjeffersonyu22@gmail.com', 'Salvador Araneta Campus, 303 Victoneta Ave, Potrero, Malabon, 1475 Metro Manila', 2147483647, 'Alumni', 'Family Events'),
(35, 'Ch', 'Yu', 'xtianjeffersonyu22@gmail.com', 'bulacan', 2147483647, 'Alumni', 'Christening'),
(36, 'Ch', 'Yu', 'xtianjeffersonyu22@gmail.com', 'bulacan', 2147483647, 'Alumni', 'Christening'),
(42, 'Ch', 'Yu', 'xtianjeffersonyu22@gmail.com', 'bulacan', 2147483647, 'Guest', 'Christening'),
(43, 'Ch', 'Yu', 'xtianjeffersonyu22@gmail.com', 'bulacan', 2147483647, 'Employee', 'Christening'),
(44, 'Ch', 'Yu', 'xtianjeffersonyu22@gmail.com', 'bulacan', 2147483647, 'Alumni', 'Christening'),
(45, 'Ch', 'Yu', 'xtianjeffersonyu22@gmail.com', 'bulacan', 2147483647, 'Alumni', 'Christening'),
(46, 'Ch', 'Yu', 'xtianjeffersonyu22@gmail.com', 'bulacan', 2147483647, 'Alumni', 'Birthday'),
(47, 'Ch', 'Yu', 'xtianjeffersonyu22@gmail.com', 'bulacan', 2147483647, 'Alumni', 'Christening'),
(48, 'Ch', 'Yu', 'xtianjeffersonyu22@gmail.com', 'bulacan', 2147483647, 'Employee', 'Christening'),
(49, 'Ch', 'Yu', 'xtianjeffersonyu22@gmail.com', 'bulacan', 2147483647, 'Employee', 'Christening'),
(50, 'Ch', 'Yu', 'xtianjeffersonyu22@gmail.com', 'bulacan', 2147483647, 'Alumni', 'Meeting/Seminar'),
(51, 'Ch', 'Yu', 'xtianjeffersonyu22@gmail.com', 'bulacan', 2147483647, 'Alumni', 'Meeting/Seminar'),
(52, 'Ch', 'Yu', 'xtianjeffersonyu22@gmail.com', 'bulacan', 2147483647, 'Employee', 'Christening'),
(53, 'Ch', 'Yu', 'xtianjeffersonyu22@gmail.com', 'bulacan', 2147483647, 'Alumni', 'Christening'),
(54, 'Ch', 'Yu', 'xtianjeffersonyu22@gmail.com', 'bulacan', 2147483647, 'Employee', 'Birthday'),
(55, 'Ch', 'Yu', 'xtianjeffersonyu22@gmail.com', 'bulacan', 2147483647, 'Alumni', 'Christening'),
(56, 'Ch', 'Yu', 'xtianjeffersonyu22@gmail.com', 'bulacan', 2147483647, 'Alumni', 'Christening'),
(57, 'Ch', 'Yu', 'xtianjeffersonyu22@gmail.com', 'bulacan', 2147483647, 'Alumni', 'Christening'),
(59, 'Ch', 'Yu', 'xtianjeffersonyu22@gmail.com', 'bulacan', 2147483647, 'Alumni', 'Christening'),
(60, 'Ch', 'Yu', 'xtianjeffersonyu22@gmail.com', 'Salvador Araneta Campus, 303 Victoneta Ave, Potrero, Malabon, 1475 Metro Manila', 2147483647, 'Alumni', 'Family Events'),
(61, 'Ch', 'Yu', 'xtianjeffersonyu22@gmail.com', 'bulacan', 2147483647, 'Guest', 'Christening'),
(62, 'Ch', 'Yu', 'xtianjeffersonyu22@gmail.com', 'bulacan', 2147483647, 'Alumni', 'Christening'),
(63, 'Ch', 'Yu', 'xtianjeffersonyu22@gmail.com', 'bulacan', 2147483647, 'Alumni', 'Family Events'),
(64, 'Ch', 'Yu', 'xtianjeffersonyu22@gmail.com', 'bulacan', 2147483647, 'Alumni', 'Birthday'),
(65, 'Ch', 'Yu', 'xtianjeffersonyu22@gmail.com', 'bulacan', 2147483647, 'Guest', 'Family Events'),
(66, 'Ch', 'Yu', 'xtianjeffersonyu22@gmail.com', 'bulacan', 2147483647, 'Guest', 'Birthday'),
(67, 'Ch', 'Yu', 'xtianjeffersonyu22@gmail.com', 'bulacan', 2147483647, 'Alumni', 'Meeting/Seminar'),
(68, 'Ch', 'Yu', 'xtianjeffersonyu22@gmail.com', 'bulacan', 2147483647, 'Alumni', 'Christening'),
(69, 'Ch', 'Yu', 'xtianjeffersonyu22@gmail.com', 'bulacan', 2147483647, 'Alumni', 'Christening'),
(70, 'Ch', 'Yu', 'xtianjeffersonyu22@gmail.com', 'bulacan', 2147483647, 'Alumni', 'Christening'),
(71, 'Ch', 'Yu', 'xtianjeffersonyu22@gmail.com', 'bulacan', 2147483647, 'Alumni', 'Christening'),
(72, 'Ch', 'Yu', 'xtianjeffersonyu22@gmail.com', 'bulacan', 2147483647, 'Employee', 'Family Events'),
(73, 'Ch', 'Yu', 'xtianjeffersonyu22@gmail.com', 'bulacan', 2147483647, 'Student', 'Meeting/Seminar'),
(74, 'Ch', 'Yu', 'xtianjeffersonyu22@gmail.com', 'bulacan', 2147483647, 'Student', 'Christening'),
(75, 'Ch', 'Yu', 'xtianjeffersonyu22@gmail.com', 'bulacan', 2147483647, 'Alumni', 'Family Events'),
(76, 'Ch', 'Yu', 'xtianjeffersonyu22@gmail.com', 'bulacan', 2147483647, 'Alumni', 'Family Events'),
(77, 'Ch', 'Yu', 'xtianjeffersonyu22@gmail.com', 'bulacan', 2147483647, 'Alumni', 'Family Events'),
(78, 'Ch', 'Yu', 'xtianjeffersonyu22@gmail.com', 'bulacan', 2147483647, 'Alumni', 'Family Events'),
(79, 'Ch', 'Yu', 'xtianjeffersonyu22@gmail.com', 'bulacan', 2147483647, 'Alumni', 'Christening'),
(80, 'Ch', 'Yu', 'xtianjeffersonyu22@gmail.com', 'bulacan', 2147483647, 'Alumni', 'Christening'),
(81, 'Ch', 'Yu', 'xtianjeffersonyu22@gmail.com', 'bulacan', 2147483647, 'Guest', 'Christening');

-- --------------------------------------------------------

--
-- Table structure for table `manage_website`
--

CREATE TABLE `manage_website` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `short_title` varchar(255) NOT NULL,
  `logo` text NOT NULL,
  `footer` text NOT NULL,
  `currency_code` varchar(600) NOT NULL,
  `currency_symbol` varchar(600) NOT NULL,
  `login_logo` text NOT NULL,
  `invoice_logo` text NOT NULL,
  `background_login_image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `manage_website`
--

INSERT INTO `manage_website` (`id`, `title`, `short_title`, `logo`, `footer`, `currency_code`, `currency_symbol`, `login_logo`, `invoice_logo`, `background_login_image`) VALUES
(1, '', '', 'dlsau.png', '', '', '', 'dlsau1.png', '', 'campus.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `news_id` int(11) NOT NULL,
  `news_title` varchar(11) NOT NULL,
  `news_date` date NOT NULL,
  `photo` varchar(255) NOT NULL,
  `news_description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`news_id`, `news_title`, `news_date`, `photo`, `news_description`) VALUES
(1, 'Discount', '2021-09-22', 'upto50.jpg', 'Discount'),
(2, 'Discount', '2021-09-22', '10.jpg', 'Discount'),
(3, 'Discount', '2021-09-22', 'personnel50.jpg', 'Discount');

-- --------------------------------------------------------

--
-- Table structure for table `pendingcheckout_report`
--

CREATE TABLE `pendingcheckout_report` (
  `pendingcheckout_id` int(11) NOT NULL,
  `fullname` varchar(255) CHARACTER SET latin1 NOT NULL,
  `email_address` varchar(50) CHARACTER SET latin1 NOT NULL,
  `address` varchar(255) CHARACTER SET latin1 NOT NULL,
  `contact_no` int(11) NOT NULL,
  `purposeofstay` varchar(15) CHARACTER SET latin1 NOT NULL,
  `position` varchar(15) CHARACTER SET latin1 NOT NULL,
  `adults` int(255) NOT NULL,
  `children` int(255) NOT NULL,
  `room_type` varchar(255) CHARACTER SET latin1 NOT NULL,
  `room_no` int(255) NOT NULL,
  `room_price` int(255) NOT NULL,
  `days` int(255) NOT NULL,
  `extend_days` int(255) NOT NULL,
  `early_checkin` int(255) NOT NULL,
  `extra_towel` int(255) NOT NULL,
  `extra_bed` int(255) NOT NULL,
  `lost_key` int(11) NOT NULL,
  `checkin` date NOT NULL,
  `bookcheckin_time` time NOT NULL,
  `checkin_time` time NOT NULL,
  `checkout` date NOT NULL,
  `bookcheckout_time` time NOT NULL,
  `checkout_time` time NOT NULL,
  `late_checkout` int(11) NOT NULL,
  `generate_code` varchar(255) CHARACTER SET latin1 NOT NULL,
  `sub_total` int(255) NOT NULL,
  `discount` int(50) NOT NULL,
  `total_amount` int(255) NOT NULL,
  `deposit` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `payment_method` varchar(255) CHARACTER SET latin1 NOT NULL,
  `payment_status` varchar(255) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pendingcheckout_report`
--

INSERT INTO `pendingcheckout_report` (`pendingcheckout_id`, `fullname`, `email_address`, `address`, `contact_no`, `purposeofstay`, `position`, `adults`, `children`, `room_type`, `room_no`, `room_price`, `days`, `extend_days`, `early_checkin`, `extra_towel`, `extra_bed`, `lost_key`, `checkin`, `bookcheckin_time`, `checkin_time`, `checkout`, `bookcheckout_time`, `checkout_time`, `late_checkout`, `generate_code`, `sub_total`, `discount`, `total_amount`, `deposit`, `status`, `payment_method`, `payment_status`) VALUES
(66, 'Ch Yu', 'xtianjeffersonyu22@gmail.com', 'bulacan', 2147483647, 'Christening', 'Alumni', 1, 0, 'Executive King (4 PAX)', 1, 1898, 1, 0, 0, 0, 0, 0, '2021-09-29', '20:55:00', '21:04:12', '2021-09-30', '20:56:00', '11:49:55', 500, 'IiR8Z0TihY', 9490, 5, 9491, '0', 'Pending Check Out', 'Cash', 'Unpaid'),
(68, 'Abc Yu', 'christianjeffersonfyu22@gmail.com', 'QC', 2147483647, 'Family Events', 'Alumni', 1, 0, 'Executive King (2 PAX)', 1, 1898, 1, 0, 500, 0, 0, 0, '2021-11-08', '12:44:00', '10:08:18', '2021-11-09', '12:44:00', '10:36:09', 0, 'vM5nlIE3mX', 2398, 50, 1199, '0', 'Pending Check Out', 'Bank', 'Unpaid'),
(69, 'Ch Yu', 'christianjeffersonfyu22@gmail.com', 'bulacan', 2147483647, 'Christening', 'Alumni', 1, 0, 'Executive Double (2 PAX)', 1, 1538, 1, 0, 500, 0, 1, 0, '2022-03-07', '01:38:00', '10:39:42', '2022-03-08', '01:38:00', '10:39:55', 500, 'uiOGXl4rhf', 3038, 50, 1519, '0', 'Pending Check Out', 'Cash', 'Unpaid'),
(70, 'Ch Yu', 'xtianjeffersonyu22@gmail.com', 'Malabon', 2147483647, 'Christening', 'Guest', 1, 0, 'Executive King (4 PAX)', 1, 1898, 1, 0, 500, 0, 0, 0, '2022-03-07', '11:01:00', '10:47:38', '2022-03-08', '11:01:00', '10:59:52', 0, 'MJAH9IhunB', 2398, 0, 2398, '0', 'Pending Check Out', 'Cash', 'Unpaid'),
(71, 'Abc Yu', 'xtianjeffersonyu22@gmail.com', 'bulacan', 2147483647, 'Christening', 'Alumni', 1, 0, 'Executive Double (2 PAX)', 50, 1538, 2, 0, 0, 0, 0, 0, '2021-11-06', '11:59:00', '10:48:14', '2021-11-04', '02:57:00', '11:00:52', 500, 'r5BCURPyKa', 3576, 50, 1788, '0', 'Pending Check Out', 'Bank', 'Unpaid'),
(72, 'Ch Def', 'xtianjeffersonyu22@gmail.com', 'Malabon', 2147483647, 'Meeting/Seminar', 'Alumni', 1, 0, 'Executive Double (2 PAX)', 1, 1538, 2, 0, 0, 0, 0, 0, '2021-11-06', '11:58:00', '11:02:30', '2021-11-04', '11:58:00', '11:02:42', 500, 'kmtSzprsU@', 3576, 10, 3218, '0', 'Pending Check Out', 'Bank', 'Unpaid'),
(73, 'Ch Yu', 'christianjeffersonfyu22@gmail.com', 'bulacan', 2147483647, 'Family Events', 'Employee', 1, 0, 'Executive Family (4 PAX)', 10, 1598, 1, 0, 0, 1, 1, 1, '2022-03-08', '11:11:00', '11:10:11', '2022-03-09', '11:12:00', '11:21:09', 0, 'DFExKR5cLb', 2498, 0, 2498, '0', 'Pending Check Out', 'Bank', 'Unpaid'),
(74, 'Ch Yu', 'xtianjeffersonyu22@gmail.com', 'Salvador Araneta Campus, 303 Victoneta Ave, Potrero, Malabon, 1475 Metro Manila', 2147483647, 'Christening', 'Alumni', 1, 0, 'Executive Double (2 PAX)', 10, 1538, 1, 0, 0, 0, 0, 0, '2022-03-07', '11:41:00', '11:40:49', '2022-03-08', '11:43:00', '11:40:57', 0, 'RC0pYfoVJZ', 1538, 0, 1538, '0', 'Pending Check Out', 'Bank', 'Unpaid'),
(75, 'Ch Yu', 'christianjeffersonfyu22@gmail.com', 'bulacan', 2147483647, 'Family Events', 'Employee', 1, 0, 'Executive Double (2 PAX)', 1, 1538, 1, 0, 0, 0, 0, 0, '2022-03-07', '11:44:00', '11:45:34', '2022-03-08', '11:43:00', '11:46:20', 0, 'BLe#F0JnZA', 1538, 0, 1538, '0', 'Pending Check Out', 'Cash', 'Unpaid'),
(76, 'Ch Yu', 'xtianjeffersonyu22@gmail.com', 'bulacan', 2147483647, 'Birthday', 'Alumni', 1, 0, 'Executive King (4 PAX)', 2, 1898, 1, 0, 0, 0, 0, 0, '2022-03-23', '14:10:00', '14:08:58', '2022-03-24', '14:10:00', '14:11:08', 0, 'Q38OJv9WzM', 0, 0, 0, '0', 'Pending Check Out', 'Cash', 'Unpaid'),
(77, 'Ch Yu', 'xtianjeffersonyu22@gmail.com', 'bulacan', 2147483647, 'Christening', 'Guest', 1, 0, 'Executive Double (2 PAX)', 2, 1538, 1, 0, 0, 0, 0, 0, '2022-03-23', '14:14:00', '14:12:41', '2022-03-24', '14:15:00', '14:16:41', 500, 'Pq?J7hEAfe', 731, 0, 731, '0', 'Pending Check Out', 'Cash', 'Unpaid'),
(79, 'Ch Yu', 'xtianjeffersonyu22@gmail.com', 'bulacan', 2147483647, 'Family Events', 'Alumni', 1, 0, 'Executive King (4 PAX)', 5, 1898, 1, 0, 0, 0, 0, 0, '2022-03-23', '16:48:00', '16:47:00', '2022-03-24', '16:48:00', '20:29:47', 0, 'GZv86VKry5', 0, 0, 0, '0', 'Pending Check Out', 'Cash', 'Unpaid'),
(80, 'Ch Yu', 'xtianjeffersonyu22@gmail.com', 'Malabon', 2147483647, 'Birthday', 'Guest', 1, 0, 'Executive King (4 PAX)', 3, 1898, 1, 0, 0, 1, 0, 0, '2022-03-23', '14:40:00', '14:38:26', '2022-03-24', '14:38:00', '20:30:33', 0, 'lMPwTd?k8i', 101, 0, 101, '0', 'Pending Check Out', 'Cash', 'Unpaid'),
(81, 'Ch Yu', 'xtianjeffersonyu22@gmail.com', 'bulacan', 2147483647, 'Christening', 'Alumni', 1, 0, 'Executive King (4 PAX)', 1, 1898, 1, 0, 0, 2, 0, 0, '2022-03-23', '10:01:00', '14:08:01', '2022-03-24', '10:01:00', '20:34:37', 0, 'hwI7EVD126', 401, 0, 401, '0', 'Pending Check Out', 'Salary Deduction', 'Unpaid'),
(82, 'Ch Yu', 'xtianjeffersonyu22@gmail.com', 'bulacan', 2147483647, 'Family Events', 'Alumni', 1, 0, 'Executive King (4 PAX)', 1, 1898, 1, 0, 0, 0, 0, 0, '2022-03-23', '20:37:00', '20:35:52', '2022-03-24', '20:38:00', '20:37:03', 0, '3TtWMc9DXq', 0, 0, 0, '0', 'Pending Check Out', 'Cash', 'Unpaid'),
(83, 'Ch Yu', 'xtianjeffersonyu22@gmail.com', 'bulacan', 2147483647, 'Birthday', 'Alumni', 1, 0, 'Executive Double (2 PAX)', 3, 1538, 1, 0, 0, 1, 1, 1, '2022-03-23', '20:45:00', '20:42:26', '2022-03-24', '20:44:00', '20:46:03', 0, '7JdK4cs3y0', 1769, 50, 885, '0', 'Pending Check Out', 'Cash', 'Unpaid'),
(84, 'Ch Yu', 'xtianjeffersonyu22@gmail.com', 'bulacan', 2147483647, 'Christening', 'Employee', 1, 0, 'Executive King (4 PAX)', 5, 1898, 1, 0, 0, 0, 0, 0, '2022-03-23', '20:46:00', '20:45:40', '2022-03-24', '20:47:00', '20:49:48', 0, 'Lc*h3iHJ?x', 949, 0, 949, '0', 'Pending Check Out', 'Cash', 'Unpaid'),
(86, 'Ch Yu', 'xtianjeffersonyu22@gmail.com', 'bulacan', 2147483647, 'Christening', 'Alumni', 1, 0, 'Executive King (4 PAX)', 7, 1898, 2, 0, 0, 0, 0, 0, '2022-03-24', '00:00:00', '20:00:25', '2022-03-26', '00:00:00', '15:29:52', 0, '4pLoJ#DanS', 0, 0, 3600, '', 'Pending Check Out', 'Cash', 'Unpaid'),
(87, 'Ch Yu', 'xtianjeffersonyu22@gmail.com', 'bulacan', 2147483647, 'Meeting/Seminar', 'Guest', 1, 0, 'Executive Double (2 PAX)', 8, 1538, 3, 0, 500, 0, 1, 0, '2022-03-24', '00:00:00', '20:06:45', '2022-03-27', '00:00:00', '15:41:33', 0, 'PvdezJl6hD', 0, 0, 3500, '', 'Pending Check Out', 'Cash', 'Unpaid');

-- --------------------------------------------------------

--
-- Table structure for table `room`
--

CREATE TABLE `room` (
  `room_id` int(11) NOT NULL,
  `room_no` int(5) NOT NULL,
  `room_type` int(50) NOT NULL,
  `max` int(255) NOT NULL,
  `bed` int(255) NOT NULL,
  `price` varchar(11) NOT NULL,
  `photo` varchar(100) NOT NULL,
  `photo1` varchar(255) NOT NULL,
  `photo2` varchar(255) NOT NULL,
  `photo3` varchar(255) NOT NULL,
  `photo4` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `room`
--

INSERT INTO `room` (`room_id`, `room_no`, `room_type`, `max`, `bed`, `price`, `photo`, `photo1`, `photo2`, `photo3`, `photo4`) VALUES
(1, 201, 4, 2, 2, '1898.00', '107017657_1366147483578455_6016630183153706840_o (2).jpg', '3.jpg', 'room-2.jpg', 'room-3.jpg', 'room-4.jpg'),
(2, 202, 3, 2, 2, '1898.00', '107061195_1366147480245122_2512712329625183016_o (2).jpg', 'room-2.jpg', 'room-4.jpg', 'room-5.jpg', 'room-6.jpg'),
(3, 203, 1, 2, 2, '1538.00', '107893206_1366057166920820_7506672819801105459_n (2).jpg', 'room-3.jpg', 'room-4.jpg', 'room-5.jpg', 'room-6.jpg'),
(4, 204, 5, 4, 4, '1598.00', '109569745_1366057163587487_6193043321425288759_n (2).jpg', 'room-6.jpg', 'room-5.jpg', 'room-4.jpg', 'room-3.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `room_type`
--

CREATE TABLE `room_type` (
  `roomtype_id` int(11) NOT NULL,
  `room_type` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `room_type`
--

INSERT INTO `room_type` (`roomtype_id`, `room_type`) VALUES
(1, 'Executive Double (2 PAX)'),
(3, 'Executive King (2 PAX)'),
(4, 'Executive King (4 PAX)'),
(5, 'Executive Family (4 PAX)');

-- --------------------------------------------------------

--
-- Table structure for table `transaction`
--

CREATE TABLE `transaction` (
  `transaction_id` int(11) NOT NULL,
  `guest_id` int(11) NOT NULL,
  `room_id` int(11) NOT NULL,
  `room_no` int(5) NOT NULL,
  `adults` int(11) NOT NULL,
  `children` int(11) NOT NULL,
  `early_checkin` int(11) NOT NULL,
  `extra_towel` int(11) NOT NULL,
  `extra_bed` int(11) NOT NULL,
  `lost_key` int(11) NOT NULL,
  `generate_code` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `days` int(2) NOT NULL,
  `extend_days` int(2) NOT NULL,
  `bookcheckin_time` time NOT NULL,
  `checkin` date NOT NULL,
  `checkin_time` time NOT NULL,
  `bookcheckout_time` time NOT NULL,
  `checkout` date NOT NULL,
  `checkout_time` time NOT NULL,
  `deposit_method` varchar(255) NOT NULL,
  `deposit` int(255) NOT NULL,
  `deposit_total` int(255) NOT NULL,
  `discount` int(255) NOT NULL,
  `discount_total` int(255) NOT NULL,
  `previous_balance` int(255) NOT NULL,
  `bill` varchar(10) NOT NULL,
  `payment_method` varchar(255) NOT NULL,
  `payment_status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transaction`
--

INSERT INTO `transaction` (`transaction_id`, `guest_id`, `room_id`, `room_no`, `adults`, `children`, `early_checkin`, `extra_towel`, `extra_bed`, `lost_key`, `generate_code`, `status`, `days`, `extend_days`, `bookcheckin_time`, `checkin`, `checkin_time`, `bookcheckout_time`, `checkout`, `checkout_time`, `deposit_method`, `deposit`, `deposit_total`, `discount`, `discount_total`, `previous_balance`, `bill`, `payment_method`, `payment_status`) VALUES
(13, 12, 4, 0, 1, 0, 0, 0, 0, 0, '', 'Pending Reservation', 0, 0, '11:59:00', '2021-11-06', '00:00:00', '11:59:00', '2021-11-07', '00:00:00', '', 0, 0, 0, 0, 0, '', '', ''),
(28, 29, 1, 2, 1, 0, 0, 1, 0, 0, 'QFc3GDZ8lm', 'Check In', 1, 0, '14:20:00', '2022-03-23', '14:18:29', '14:21:00', '2022-03-24', '00:00:00', '', 0, 0, 0, 0, 0, '101', '', ''),
(31, 29, 1, 0, 1, 0, 0, 0, 0, 0, '', 'Pending Reservation', 0, 0, '16:33:00', '2022-03-23', '00:00:00', '20:31:00', '2022-03-24', '00:00:00', '', 0, 0, 0, 0, 0, '', '', ''),
(32, 29, 1, 4, 1, 0, 0, 0, 0, 0, 'ARes3il29J', 'Check In', 1, 0, '16:43:00', '2022-03-23', '16:41:39', '16:43:00', '2022-03-24', '00:00:00', '', 0, 0, 0, 0, 0, '0', '', ''),
(38, 42, 0, 1, 1, 0, 0, 0, 0, 0, 'u4rYng97CD', 'Check In', 4, 0, '08:20:00', '2022-03-24', '08:19:18', '00:00:00', '2022-03-28', '00:00:00', '', 50, 0, 0, 0, 0, '4745', '', ''),
(39, 43, 1, 0, 1, 0, 0, 0, 0, 0, 'hL1O0g@DbF', 'Pending Payment Rese', 0, 0, '09:28:00', '2022-03-24', '00:00:00', '09:27:00', '2022-03-25', '00:00:00', '', 0, 0, 0, 0, 0, '', '', ''),
(40, 32, 0, 10, 1, 0, 0, 0, 0, 0, 'zswd@1MQkA', 'Check In', 2, 1, '09:50:00', '2022-03-24', '20:20:23', '09:49:00', '2022-03-26', '00:00:00', 'Bank', 50, 0, 0, 0, 0, '3896', '', ''),
(41, 32, 1898, 0, 1, 0, 0, 0, 0, 0, 'ip5o1P9XwQ', 'Pending Payment Reservation', 0, 0, '10:35:00', '2022-03-24', '00:00:00', '10:36:00', '2022-03-25', '00:00:00', '', 0, 0, 0, 0, 0, '', '', ''),
(42, 46, 0, 0, 1, 0, 0, 0, 0, 0, 'QqRlEtg3GP', 'Pending Check In', 0, 0, '10:41:00', '2022-03-24', '00:00:00', '01:39:00', '2022-03-25', '00:00:00', 'Bank', 0, 0, 0, 0, 0, '0', '', ''),
(43, 32, 0, 6, 1, 0, 0, 0, 0, 0, 'qtmsK#LvR3', 'Check In', 3, 0, '10:44:00', '2022-03-24', '11:14:44', '10:45:00', '2022-03-27', '00:00:00', '', 0, 0, 0, 0, 0, '1538', '', ''),
(44, 43, 1, 0, 1, 0, 0, 0, 0, 0, '?q#EURTJ2X', 'Pending Check In', 0, 0, '10:49:00', '2022-03-24', '00:00:00', '10:50:00', '2022-03-25', '00:00:00', 'Cahier', 0, 0, 0, 0, 0, '0', '', ''),
(45, 43, 0, 23, 1, 0, 0, 0, 0, 0, 'cJhyi5sxKu', 'Check In', 4, 1, '10:00:00', '2022-03-24', '11:30:51', '10:01:00', '2022-03-28', '00:00:00', 'Cahier', 0, 0, 0, 0, 0, '0', '', ''),
(46, 50, 0, 5, 1, 0, 0, 1, 0, 0, 'qAPoFVmxfy', 'Check In', 2, 0, '11:05:00', '2022-03-24', '11:12:37', '02:03:00', '2022-03-26', '00:00:00', 'Bank', 50, 0, 0, 0, 0, '4898', '', ''),
(47, 50, 0, 13, 1, 0, 0, 0, 0, 0, 'p4zkoQ65uM', 'Check In', 2, 0, '11:09:00', '2022-03-24', '21:22:01', '11:10:00', '2022-03-26', '00:00:00', 'Salary Deduction', 50, 0, 0, 0, 0, '4614', '', ''),
(48, 43, 0, 12, 1, 0, 0, 0, 0, 0, 'qSBI6rVzko', 'Check In', 3, 0, '11:20:00', '2022-03-24', '20:45:13', '01:18:00', '2022-03-27', '00:00:00', 'Cahier', 0, 0, 0, 0, 0, '1538', '', ''),
(49, 32, 0, 16, 1, 0, 0, 0, 0, 0, 'xqHX*A56U@', 'Check In', 2, 0, '01:19:00', '2022-03-24', '07:56:43', '01:19:00', '2022-03-26', '00:00:00', 'Cahier', 50, 0, 0, 0, 0, '1898', '', ''),
(50, 54, 0, 17, 1, 0, 0, 0, 0, 0, 'sRh2gx9*Gy', 'Check In', 2, 0, '11:53:00', '2022-03-24', '07:57:29', '11:53:00', '2022-03-27', '00:00:00', 'Bank', 50, 1898, 0, 0, 0, '900', '', ''),
(51, 32, 0, 11, 1, 0, 0, 3, 1, 1, 'YJFTgUx1iE', 'Check In', 3, 0, '12:35:00', '2022-03-24', '20:22:56', '14:34:00', '2022-03-27', '00:00:00', 'Cashier', 50, 1898, 30, 569, 0, '4296', '', ''),
(53, 32, 1, 0, 1, 0, 0, 0, 0, 0, 'R03?wv1LoT', 'Pending Check In', 1, 0, '13:25:00', '2022-03-24', '00:00:00', '15:27:00', '2022-03-25', '00:00:00', 'Bank', 50, 1898, 30, 569, 0, '1898', '', ''),
(55, 32, 1, 0, 1, 0, 0, 0, 0, 0, 'B3G#tZl9V0', 'Pending Check In', 2, 1, '13:41:00', '2022-03-25', '00:00:00', '19:41:00', '2022-03-27', '00:00:00', 'Salary Deduction', 50, 1898, 0, 0, 0, '3796', '', ''),
(56, 13, 3, 0, 1, 0, 0, 0, 0, 0, 'BGiXQdhS3L', 'Pending Check In', 0, 0, '13:46:00', '2022-03-24', '00:00:00', '15:43:00', '2022-03-25', '00:00:00', 'Bank', 50, 1538, 0, 0, 0, '1538', '', ''),
(57, 42, 1, 0, 1, 0, 0, 0, 0, 0, 'GRWtQ3h16Z', 'Pending Check In', 0, 0, '13:49:00', '2022-03-24', '00:00:00', '15:47:00', '2022-03-25', '00:00:00', 'Bank', 50, 1898, 30, 569, 0, '284.7', '', ''),
(58, 32, 0, 15, 1, 0, 0, 1, 1, 1, 'ifgY37vom2', 'Check In', 5, 1, '13:51:00', '2022-03-24', '07:55:56', '17:48:00', '2022-03-29', '00:00:00', 'Bank', 50, 1898, 50, 0, 0, '2798', '', ''),
(59, 63, 1, 0, 1, 0, 0, 0, 0, 0, 'er6?R7Tz#1', 'Pending Check In', 1, 0, '15:51:00', '2022-03-26', '00:00:00', '15:51:00', '2022-03-27', '00:00:00', 'Salary Deduction', 50, 1898, 1, 19, 0, '949', '', ''),
(60, 46, 0, 19, 1, 0, 0, 0, 0, 0, 'o2wL#g@elY', 'Check In', 1, 0, '14:05:00', '2022-03-24', '11:01:25', '14:07:00', '2022-03-25', '00:00:00', 'Bank', 0, 0, 30, 0, 0, '250', '', ''),
(61, 65, 1, 0, 1, 0, 0, 0, 0, 0, 'PKDUFwhM3A', 'Pending Payment Reservation', 0, 0, '14:23:00', '2022-03-24', '00:00:00', '14:24:00', '2022-03-25', '00:00:00', '', 0, 0, 30, 0, 0, '', '', ''),
(62, 66, 1, 0, 1, 0, 0, 0, 0, 0, 'ZC0obJxeE4', 'Pending Payment Reservation', 0, 0, '14:26:00', '2022-03-24', '00:00:00', '14:25:00', '2022-03-25', '00:00:00', '', 0, 1898, 0, 0, 0, '', '', ''),
(63, 50, 1, 0, 1, 0, 0, 0, 0, 0, 'sGW*BCzb0a', 'Pending Payment Reservation', 0, 0, '14:26:00', '2022-03-24', '00:00:00', '18:23:00', '2022-03-25', '00:00:00', '', 0, 1898, 30, 569, 0, '', '', ''),
(64, 32, 0, 18, 1, 0, 0, 0, 0, 0, 'ZFQDyv9m?X', 'Check In', 2, 1, '14:36:00', '2022-03-24', '10:59:45', '18:32:00', '2022-03-26', '00:00:00', 'Bank', 0, 1898, 1, 19, 0, '1898', '', ''),
(65, 32, 0, 20, 1, 0, 0, 0, 0, 0, 'FzywJm5UWY', 'Check In', 3, 1, '14:42:00', '2022-03-24', '11:03:42', '14:38:00', '2022-03-27', '00:00:00', 'Bank', 50, 1898, 100, 1898, 0, '2847', '', ''),
(66, 32, 0, 21, 1, 0, 0, 0, 0, 0, 'qJbFSVMs*?', 'Check In', 3, 0, '16:45:00', '2022-03-24', '11:12:43', '16:44:00', '2022-03-27', '00:00:00', 'Cashier', 50, 1898, 30, 569, 500, '1638.8', '', ''),
(67, 32, 0, 22, 1, 0, 0, 1, 0, 0, 'BPvE1XuAyq', 'Check In', 2, 0, '16:46:00', '2022-03-24', '11:22:50', '16:47:00', '2022-03-26', '00:00:00', 'Cashier', 50, 1898, 50, 949, 474, '2472', '', ''),
(68, 72, 1, 0, 1, 0, 0, 0, 0, 0, 'hYQZsu7dqt', 'Pending Payment Reservation', 0, 0, '17:03:00', '2022-03-24', '00:00:00', '17:03:00', '2022-03-25', '00:00:00', '', 0, 1898, 100, 1898, 0, '1898', '', ''),
(69, 73, 1, 0, 1, 0, 0, 0, 0, 0, 'FY2SbsqnUP', 'Pending Payment Reservation', 0, 0, '17:13:00', '2022-03-24', '00:00:00', '18:09:00', '2022-03-25', '00:00:00', '', 0, 1898, 100, 1898, 0, '1898', '', ''),
(70, 74, 1, 0, 1, 0, 0, 0, 0, 0, '4e8SK6YyU#', 'Pending Payment Reservation', 0, 0, '17:15:00', '2022-03-24', '00:00:00', '17:14:00', '2022-03-25', '00:00:00', '', 0, 1898, 100, 1898, 0, '1898', '', ''),
(71, 63, 1, 0, 1, 0, 0, 0, 0, 0, 'l7aEO@IfwR', 'Pending Check In', 0, 0, '12:51:00', '2022-03-25', '00:00:00', '15:52:00', '2022-03-27', '00:00:00', 'Cashier', 50, 3796, 100, 3796, 0, '-3096', '', ''),
(72, 63, 1, 0, 1, 0, 0, 0, 0, 0, 'gAmcTfYLKl', 'Pending Check In', 0, 0, '15:58:00', '2022-03-25', '00:00:00', '19:56:00', '2022-03-26', '00:00:00', 'Bank', 0, 1898, 30, 1329, 0, '-700', '', ''),
(73, 63, 1, 0, 1, 0, 0, 0, 0, 0, 'KM7*zgaEXm', 'Pending Check In', 0, 0, '19:52:00', '2022-03-25', '00:00:00', '19:51:00', '2022-03-26', '00:00:00', 'Cashier', 0, 1898, 30, 1329, 0, '-700', '', ''),
(74, 63, 1, 0, 1, 0, 0, 0, 0, 0, 'htW#y*XfkS', 'Pending Check In', 0, 0, '19:00:00', '2022-03-25', '00:00:00', '19:00:00', '2022-03-26', '00:00:00', 'Bank', 0, 1898, 50, 1329, 0, '700', '', ''),
(75, 35, 1, 0, 1, 0, 0, 0, 0, 0, 'Lm8IptErWC', 'Pending Check In', 0, 0, '20:06:00', '2022-03-25', '00:00:00', '20:06:00', '2022-03-26', '00:00:00', 'Cashier', 0, 1898, 50, 1329, 0, '700', '', ''),
(76, 35, 1, 0, 1, 0, 0, 0, 0, 0, 'UTYd@hA*xb', 'Pending Payment Reservation', 0, 0, '20:15:00', '2022-03-25', '00:00:00', '20:16:00', '2022-03-26', '00:00:00', '', 0, 1898, 30, 1329, 0, '1328.6', '', ''),
(77, 42, 1, 0, 1, 0, 0, 0, 0, 0, '#?IkRMQBUa', 'Pending Payment Reservation', 0, 0, '20:23:00', '2022-03-25', '00:00:00', '20:22:00', '2022-03-26', '00:00:00', '', 0, 1898, 30, 1329, 0, '1328.6', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admindash`
--
ALTER TABLE `admindash`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cancel_reservation`
--
ALTER TABLE `cancel_reservation`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `checkout_report`
--
ALTER TABLE `checkout_report`
  ADD PRIMARY KEY (`checkout_id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`contact_id`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`photo_id`);

--
-- Indexes for table `guest`
--
ALTER TABLE `guest`
  ADD PRIMARY KEY (`guest_id`);

--
-- Indexes for table `manage_website`
--
ALTER TABLE `manage_website`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`news_id`);

--
-- Indexes for table `pendingcheckout_report`
--
ALTER TABLE `pendingcheckout_report`
  ADD PRIMARY KEY (`pendingcheckout_id`);

--
-- Indexes for table `room`
--
ALTER TABLE `room`
  ADD PRIMARY KEY (`room_id`);

--
-- Indexes for table `room_type`
--
ALTER TABLE `room_type`
  ADD PRIMARY KEY (`roomtype_id`);

--
-- Indexes for table `transaction`
--
ALTER TABLE `transaction`
  ADD PRIMARY KEY (`transaction_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admindash`
--
ALTER TABLE `admindash`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `cancel_reservation`
--
ALTER TABLE `cancel_reservation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `checkout_report`
--
ALTER TABLE `checkout_report`
  MODIFY `checkout_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `contact_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `photo_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;

--
-- AUTO_INCREMENT for table `guest`
--
ALTER TABLE `guest`
  MODIFY `guest_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=82;

--
-- AUTO_INCREMENT for table `manage_website`
--
ALTER TABLE `manage_website`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `news_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `pendingcheckout_report`
--
ALTER TABLE `pendingcheckout_report`
  MODIFY `pendingcheckout_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=88;

--
-- AUTO_INCREMENT for table `room`
--
ALTER TABLE `room`
  MODIFY `room_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `room_type`
--
ALTER TABLE `room_type`
  MODIFY `roomtype_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `transaction`
--
ALTER TABLE `transaction`
  MODIFY `transaction_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=78;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
