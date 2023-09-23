-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 23, 2023 at 11:19 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admindash`
--

INSERT INTO `admindash` (`id`, `username`, `email`, `password`, `firstname`, `lastname`, `gender`, `dob`, `contact`, `address`, `image`, `created_on`, `group_id`) VALUES
(1, 'admin', 'admin@gmail.com', 'aa7f019c326413d5b8bcad4314228bcd33ef557f5d81c7cc977f7728156f4357', 'admin', 'admin', 'Male', '2021-09-29', 912312312, '0', 'SW8_Advantage_3_Scroll.png', '2020-12-27', 1),
(2, 'admin1', 'admin12@gmail.com', '1e0650e2f4b7012026077ce7e1ae4ee0d127e3b290d4e4c39c108d0c82070516', 'admin1', 'admin1', 'Male', '1997-02-01', 956548888, '', 'user.png', '2022-03-29', 2),
(3, 'admin2', 'admin2@gmail.com', '4cdc904368dd6c44fb8db9ef5fd8d569f7de1b8b408319ee2ffda658c4769ada', 'admin2', 'admin2', 'male', '', 0, '', '', '0000-00-00', 3),
(4, 'admin3', 'admin2@gmail.com', 'd31dbfa2beffe50eacc7d04050ed407b34ecb83aead4c1841e6e2969eb253b26', 'admin3', 'admin3', 'male', '', 0, '', '', '0000-00-00', 4);

-- --------------------------------------------------------

--
-- Table structure for table `cancel_pendingcheckin`
--

CREATE TABLE `cancel_pendingcheckin` (
  `id` int(11) NOT NULL,
  `firstname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lastname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact` int(11) NOT NULL,
  `position` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `purposeofstay` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `adults` int(11) NOT NULL,
  `children` int(11) NOT NULL,
  `room_type` int(255) NOT NULL,
  `room_price` int(255) NOT NULL,
  `checkin` date NOT NULL,
  `bookcheckin_time` time NOT NULL,
  `days` int(255) NOT NULL,
  `checkout` date NOT NULL,
  `bookcheckout_time` time NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deposit_total` int(255) NOT NULL,
  `discount` int(255) NOT NULL,
  `discount_total` int(255) NOT NULL,
  `deposit` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deposit_method` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_balance` int(255) NOT NULL,
  `cancellation_fee` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payment_method` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cancel_pendingcheckin`
--

INSERT INTO `cancel_pendingcheckin` (`id`, `firstname`, `lastname`, `email`, `address`, `contact`, `position`, `purposeofstay`, `adults`, `children`, `room_type`, `room_price`, `checkin`, `bookcheckin_time`, `days`, `checkout`, `bookcheckout_time`, `status`, `deposit_total`, `discount`, `discount_total`, `deposit`, `deposit_method`, `total_balance`, `cancellation_fee`, `payment_method`) VALUES
(1, 'Ch', 'Yu', 'xtianjeffersonyu22@gmail.com', 'bulacan', 2147483647, 'Alumni', 'Christening', 1, 0, 0, 1398, '2022-03-27', '00:00:00', 1, '2022-03-28', '00:00:00', 'Cancelled Pending Check In', 1398, 30, 979, 'Advance Full Payment', 'Bank', 0, 'No Cancellation Fee', 'No Cancellation Fee'),
(2, 'Ja', 'Morant', 'christianjeffersonfyu22@gmail.com', 'bulacan', 2147483647, 'Alumni', 'Family Events', 1, 0, 0, 1898, '2022-03-31', '00:00:00', 1, '2022-04-01', '00:00:00', 'Cancelled Pending Check In', 1898, 30, 1329, 'Advance 50% Payment', 'Cashier', 829, 'Already Paid', 'Paymaya'),
(3, 'Jonathan ', 'De ocampo', 'jonathandeocampo06@gmail.com', 'QC', 2147483647, 'Alumni', 'Family Events', 1, 0, 0, 1598, '2022-04-01', '00:00:00', 2, '2022-04-03', '00:00:00', 'Cancelled Pending Check In', 1598, 30, 1118, 'Advance 50% Payment', 'Cashier', 1736, 'No Cancellation Fee', 'No Cancellation Fee'),
(4, 'Ch', 'Hfhrthdh', 'christianjeffersonfyu22@gmail.com', 'bulacan', 2147483647, 'Alumni', 'Family Events', 1, 0, 0, 1898, '2022-04-04', '00:00:00', 5, '2022-04-09', '00:00:00', 'Cancelled Pending Check In', 9490, 0, 9490, 'Advance Full Payment', 'Cashier', 0, 'No Cancellation Fee', 'No Cancellation Fee'),
(5, 'Test', 'Test', 'test@gmail.com', 'test', 2147483647, 'Guest', 'Birthday', 1, 0, 0, 1898, '2022-07-02', '00:00:00', 1, '2022-07-03', '00:00:00', 'Cancelled Pending Check In', 1898, 0, 1898, 'Advance Full Payment', 'Bank', 0, 'No Cancellation Fee', 'No Cancellation Fee'),
(6, 'Test', 'Test', 'test@gmail.com', 'test', 2147483647, 'Guest', 'Meeting/Seminar', 1, 0, 0, 1398, '2022-07-17', '00:00:00', 2, '2022-07-19', '00:00:00', 'Cancelled Pending Check In', 2796, 0, 2796, 'Advance Full Payment', 'Bank', 0, 'No Cancellation Fee', 'No Cancellation Fee'),
(7, 'Test', 'Test', 'test@gmail.com', 'test', 2147483647, 'Guest', 'Birthday', 1, 0, 0, 1898, '2022-07-12', '00:00:00', 1, '2022-07-13', '00:00:00', 'Cancelled Pending Check In', 1898, 0, 1898, 'Advance Full Payment', 'Cashier', 0, 'No Cancellation Fee', 'No Cancellation Fee'),
(8, 'Enzo', 'Laput', 'enzlaps@gmail.com', 'Tandang Sora, Quezon City', 2147483647, 'Alumni', 'Family Events', 1, 0, 0, 1898, '2022-06-22', '00:00:00', 4, '2022-06-26', '00:00:00', 'Cancelled Pending Check In', 7592, 0, 7592, 'Advance Full Payment', 'Bank', 2000, 'Already Paid', 'G Cash'),
(9, 'Sample', 'Sample', 'sample@gmail.com', 'bulacan', 2147483647, 'Guest', 'Meeting/Seminar', 2, 0, 0, 1898, '2022-07-14', '00:00:00', 2, '2022-07-16', '00:00:00', 'Cancelled Pending Check In', 3796, 0, 3796, 'Advance 50% Payment', 'Bank', 2796, 'Already Paid', 'Cash'),
(10, 'Jonathan ', 'De ocampo', 'jonathandeocampo06@gmail.com', 'QC', 2147483647, 'Alumni', 'Christening', 1, 0, 0, 1398, '2022-06-13', '00:00:00', 1, '2022-06-14', '00:00:00', 'Cancelled Pending Check In', 1398, 30, 978, 'Advance Full Payment', 'Bank', 0, 'Already Paid', 'G Cash');

-- --------------------------------------------------------

--
-- Table structure for table `cancel_reservation`
--

CREATE TABLE `cancel_reservation` (
  `id` int(11) NOT NULL,
  `firstname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lastname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact` int(11) NOT NULL,
  `position` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `purposeofstay` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `adults` int(100) NOT NULL,
  `children` int(100) NOT NULL,
  `room_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `room_price` int(11) NOT NULL,
  `checkin` date NOT NULL,
  `bookcheckin_time` time NOT NULL,
  `days` int(255) NOT NULL,
  `checkout` date NOT NULL,
  `bookcheckout_time` time NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cancellation_fee` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payment_method` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cancel_reservation`
--

INSERT INTO `cancel_reservation` (`id`, `firstname`, `lastname`, `email`, `address`, `contact`, `position`, `purposeofstay`, `adults`, `children`, `room_type`, `room_price`, `checkin`, `bookcheckin_time`, `days`, `checkout`, `bookcheckout_time`, `status`, `cancellation_fee`, `payment_method`) VALUES
(23, 'Tes', 'Ting', 'a@g.com', 'test', 2147483647, 'Alumni', 'Birthday', 1, 0, 'Executive King (4 PAX)', 1598, '2022-05-01', '00:00:00', 0, '2022-05-02', '00:00:00', 'Cancelled Reservation', 'No Cancellation Fee', 'No Cancellation Fee'),
(24, 'Tes', 'Ting', 'a@g.com', 'test', 2147483647, 'Employee', 'Family Events', 1, 0, 'Executive Double (2 PAX)', 1398, '2022-05-01', '00:00:00', 1, '2022-05-02', '00:00:00', 'Cancelled Reservation', 'No Cancellation Fee', 'No Cancellation Fee'),
(25, 'Test', 'Test', 'test@gmail.com', 'test', 2147483647, 'Guest', 'Birthday', 1, 0, 'Executive Double (2 PAX)', 1398, '2022-05-10', '00:00:00', 0, '2022-05-11', '00:00:00', 'Cancelled Reservation', 'Already Paid', 'No Cancellation Fee'),
(26, 'Test', 'Test', 'test@gmail.com', 'test', 2147483647, 'Guest', 'Birthday', 1, 0, 'Executive Double (2 PAX)', 1398, '2022-05-10', '00:00:00', 0, '2022-05-11', '00:00:00', 'Cancelled Reservation', 'Already Paid', 'No Cancellation Fee'),
(27, 'Ruth', 'Centeno', 'ruth.centeno@dlsau.edu.ph', 'Malabon', 2147483647, 'Employee', 'Family Events', 1, 0, 'Executive Double (2 PAX)', 1398, '2022-05-06', '00:00:00', 1, '2022-05-07', '00:00:00', 'Cancelled Reservation', 'Already Paid', 'Cashier'),
(28, 'Christian', 'Yu', 'christianjeffersonfyu22@gmail.com', 'saiodusiaoduioasduoiasuoiwqe', 2147483647, 'Student', 'Meeting/Seminar', 2, 2, 'Executive King (2 PAX)', 1398, '2022-06-15', '00:00:00', 0, '2022-06-18', '00:00:00', 'Cancelled Reservation', 'Already Paid', 'No Cancellation Fee'),
(29, 'Jayson', 'Dueza', 'dueza23jayson@gmail.com', 'Quiapo, Manila', 2147483647, 'Alumni', 'Family Events', 1, 1, 'Executive Family (4 PAX)', 1898, '2022-06-08', '00:00:00', 6, '2022-06-14', '00:00:00', 'Cancelled Reservation', 'No Cancellation Fee', 'No Cancellation Fee'),
(30, 'Jonathan ', 'De ocampo', 'jonathandeocampo06@gmail.com', 'QC', 2147483647, 'Alumni', 'Family Events', 1, 0, 'Executive Family (4 PAX)', 1898, '2022-06-08', '00:00:00', 3, '2022-06-11', '00:00:00', 'Cancelled Reservation', 'Already Paid', 'Salary Deduction'),
(31, 'Jonathan ', 'De ocampo', 'jonathandeocampo06@gmail.com', 'QC', 2147483647, 'Student', 'Birthday', 1, 0, 'Executive Family (4 PAX)', 1898, '2022-06-15', '00:00:00', 0, '2022-06-17', '00:00:00', 'Cancelled Reservation', 'Already Paid', 'Cash');

-- --------------------------------------------------------

--
-- Table structure for table `checkout_report`
--

CREATE TABLE `checkout_report` (
  `checkout_id` int(11) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `email_address` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `contact_no` varchar(15) NOT NULL,
  `purposeofstay` varchar(25) NOT NULL,
  `position` varchar(15) NOT NULL,
  `adults` int(255) NOT NULL,
  `children` varchar(255) NOT NULL,
  `room_type` varchar(255) NOT NULL,
  `room_no` int(255) NOT NULL,
  `room_price` int(255) NOT NULL,
  `days` int(255) NOT NULL,
  `extend_days` int(2) NOT NULL,
  `early_checkin` varchar(11) NOT NULL,
  `extra_towel` varchar(11) NOT NULL,
  `extra_bed` varchar(255) NOT NULL,
  `lost_key` varchar(11) NOT NULL,
  `checkin` date NOT NULL,
  `bookcheckin_time` time NOT NULL,
  `checkin_time` time NOT NULL,
  `checkout` date NOT NULL,
  `bookcheckout_time` time NOT NULL,
  `checkout_time` time NOT NULL,
  `late_checkout` int(11) NOT NULL,
  `generate_code` varchar(255) NOT NULL,
  `deposit_total` int(255) NOT NULL,
  `discount` int(50) NOT NULL,
  `discount_total` int(255) NOT NULL,
  `previous_balance` int(255) NOT NULL,
  `total_amount` int(255) NOT NULL,
  `deposit` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `payment_date` date NOT NULL,
  `payment_time` time NOT NULL,
  `payment_method` varchar(255) NOT NULL,
  `payment_status` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `checkout_report`
--

INSERT INTO `checkout_report` (`checkout_id`, `fullname`, `email_address`, `address`, `contact_no`, `purposeofstay`, `position`, `adults`, `children`, `room_type`, `room_no`, `room_price`, `days`, `extend_days`, `early_checkin`, `extra_towel`, `extra_bed`, `lost_key`, `checkin`, `bookcheckin_time`, `checkin_time`, `checkout`, `bookcheckout_time`, `checkout_time`, `late_checkout`, `generate_code`, `deposit_total`, `discount`, `discount_total`, `previous_balance`, `total_amount`, `deposit`, `status`, `payment_date`, `payment_time`, `payment_method`, `payment_status`) VALUES
(1, 'Christian Yu', 'xtianjeffersonyu22@gmail.com', 'Bulacan', '09156486235', 'Reunion', 'Student', 1, '1', 'Executive King (4 PAX)', 102, 1598, 2, 1, '0', '0', '0', '0', '2022-03-28', '00:00:00', '16:42:08', '2022-03-30', '00:00:00', '16:45:01', 500, 'Jr#lhvQnIE', 3196, 30, 2238, 619, 2738, 'Advance 50% Payment', 'Check Out', '2022-03-27', '16:45:01', 'Salary Deduction', 'Paid'),
(2, 'Kevin Murphy', 'kevinmurphy@gmail.com', 'Malabon', '09564218634', 'Family Events', 'Guest', 1, '0', 'Executive King (4 PAX)', 102, 1598, 2, 1, '500', '0', '1', '0', '2022-03-29', '00:00:00', '07:58:29', '2022-03-31', '00:00:00', '08:03:56', 500, 'bcu@pqkKVn', 3196, 20, 2257, 0, 4057, 'Advance 50% Payment', 'Check Out', '2022-03-28', '08:08:12', 'Cash', 'Paid'),
(4, 'Jonathan De ocampo', 'jonathandeocampo06@gmail.com', 'Qc', '09565656842', 'Christening', 'Guest', 1, '0', 'Executive King (2 PAX)', 103, 1898, 1, 0, '0', '1', '1', '0', '2022-03-29', '00:00:00', '15:16:11', '2022-03-30', '00:00:00', '15:25:33', 500, 'QYcx2qsHGK', 1898, 0, 1898, 1198, 2298, 'Advance 50% Payment', 'Check Out', '2022-03-28', '15:25:33', 'Cash', 'Paid'),
(6, 'Jonathan De ocampo', 'jonathandeocampo06@gmail.com', 'Qc', '09565656842', 'Meeting/Seminar', 'Student', 2, '0', 'Executive Double (2 PAX)', 101, 1398, 2, 0, '0', '0', '1', '0', '2022-04-04', '00:00:00', '08:40:45', '2022-04-06', '00:00:00', '08:42:18', 500, '9qEcOQ0Sg3', 2796, 30, 1957, 0, 2957, 'Advance 50% Payment', 'Check Out', '2022-03-30', '08:42:18', 'Cash', 'Paid'),
(7, 'Ruth Centeno', 'ruth.centeno@dlsau.edu.ph', 'Malabon', '09254689231', 'Birthday', 'Employee', 1, '0', 'Executive Family (4 PAX)', 202, 1898, 1, 0, '500', '0', '0', '0', '2022-04-12', '00:00:00', '19:10:50', '2022-04-13', '00:00:00', '19:11:03', 500, 'ZzgpYX17tK', 1898, 0, 1898, 0, 2898, 'Advance Full Payment', 'Check Out', '2022-04-11', '19:11:36', 'Salary Deduction', 'Paid'),
(18, 'Justin Dueza', 'jstndza11@gmail.com', 'Makati', '09116524814', 'Meeting/Seminar', 'Guest', 1, '0', 'Executive King (4 PAX)', 202, 1598, 3, 1, '500', '0', '1', '0', '2022-04-14', '00:00:00', '09:44:05', '2022-04-17', '00:00:00', '09:44:53', 500, 'mB*HbGfeMo', 4794, 30, 3356, 0, 4856, 'Advance 50% Payment', 'Check Out', '2022-04-13', '09:44:53', 'Cash', 'Paid'),
(19, 'Zach Dee', 'zachdee@yahoo.com', 'Malolos, Bulacan', '09156486235', 'Family Events', 'Guest', 1, '0', 'Executive King (4 PAX)', 102, 1598, 1, 0, '500', '0', '0', '0', '2022-04-15', '00:00:00', '08:47:04', '2022-04-16', '00:00:00', '08:47:17', 500, 'ICW*gk?GrD', 1598, 0, 1598, 0, 2598, 'Advance Full Payment', 'Check Out', '2022-04-14', '08:47:17', 'Cash', 'Paid'),
(20, 'John Cerdon', 'jhn_crdn@gmail.com', 'Qc', '09156486235', 'Birthday', 'Guest', 1, '0', 'Executive King (4 PAX)', 102, 1598, 1, 0, '500', '0', '0', '0', '2022-04-19', '00:00:00', '16:10:48', '2022-04-20', '00:00:00', '16:10:58', 500, 'a820i5RZAs', 1598, 30, 1118, 0, 2118, 'Advance Full Payment', 'Check Out', '2022-04-18', '16:10:58', 'Cash', 'Paid'),
(21, 'Gustavo Fring', 'fring_gustavo@gmail.com', 'Bulacan', '09256426892', 'Family Events', 'Guest', 1, '0', 'Executive King (4 PAX)', 102, 1598, 1, 0, '500', '0', '1', '0', '2022-04-20', '00:00:00', '17:19:32', '2022-04-21', '00:00:00', '17:19:45', 500, 'y?F6nZYp13', 1598, 30, 1118, 618, 2618, 'Advance 50% Payment', 'Check Out', '2022-04-19', '17:19:45', 'Cash', 'Paid'),
(22, 'Christian Yu', 'xtianjeffersonyu22@gmail.com', 'Bulacan', '09156486235', 'Meeting/Seminar', 'Student', 1, '0', 'Executive King (4 PAX)', 102, 1598, 2, 0, '500', '0', '0', '0', '2022-04-21', '00:00:00', '14:50:14', '2022-04-23', '00:00:00', '14:50:44', 500, 'ikxnch1uBm', 3196, 30, 2237, 0, 3237, 'Advance Full Payment', 'Check Out', '2022-04-20', '14:50:44', 'Cash', 'Paid'),
(23, 'Tes Ting', 'a@a.com', 'Test', '09121231234', 'Meeting/Seminar', 'Employee', 3, '0', 'Executive Double (2 PAX)', 1, 1398, 1, 0, '0', '0', '0', '0', '2022-04-11', '00:00:00', '12:08:07', '2022-04-12', '00:00:00', '12:20:11', 0, '9O2FLHtisq', 1398, 0, 1398, 0, 1398, 'Advance Full Payment', 'Check Out', '2022-04-21', '12:24:42', 'Cash', 'Paid'),
(24, 'Christian Yu', 'xtianjeffersonyu22@gmail.com', 'Bulacan', '09156486235', 'Christening', 'Alumni', 1, '1', 'Executive Double (2 PAX)', 102, 1398, 1, 0, '500', '0', '0', '0', '2022-04-22', '00:00:00', '12:30:14', '2022-04-23', '00:00:00', '12:30:32', 500, 's*CWa4wSHF', 1398, 30, 978, 0, 1978, 'Advance Full Payment', 'Check Out', '2022-04-21', '12:30:32', 'Salary Deduction', 'Paid'),
(25, 'Jonathan  De ocampo', 'jonathandeocampo06@gmail.com', 'QC', '09565456456', 'Family Events', 'Guest', 1, '3', 'Executive King (4 PAX)', 102, 1598, 1, 0, '500', '0', '0', '0', '2022-04-23', '00:00:00', '16:18:16', '2022-04-24', '00:00:00', '16:18:33', 500, 'G9QsJod?a6', 1598, 50, 799, 0, 1799, 'Advance Full Payment', 'Check Out', '2022-04-22', '16:18:33', 'Cash', 'Paid'),
(26, 'Bea Llorin', 'bea08llorin@gmail.com', 'Malabon', '09252264852', 'Christening', 'Guest', 3, '2', 'Executive King (2 PAX)', 102, 1898, 1, 0, '500', '0', '0', '0', '2022-04-23', '00:00:00', '14:00:59', '2022-04-24', '00:00:00', '14:01:12', 500, '?6TPIyUozg', 1898, 0, 1898, 0, 2898, 'Advance 50% Payment', 'Check Out', '2022-04-23', '14:01:36', 'Bank', 'Paid'),
(27, 'Christian Yu', 'xtianjeffersonyu22@gmail.com', 'Bulacan', '09156486235', 'Christening', 'Alumni', 1, '0', 'Executive Double (2 PAX)', 102, 1398, 1, 0, '500', '0', '0', '0', '2022-04-23', '00:00:00', '13:19:54', '2022-04-24', '00:00:00', '13:20:18', 500, 'bHUFviKYOq', 1398, 30, 978, 0, 1978, 'Advance Full Payment', 'Check Out', '2022-04-24', '13:20:18', 'Cash', 'Paid'),
(28, 'Jonathan  De ocampo', 'jonathandeocampo06@gmail.com', 'QC', '09156486235', 'Christening', 'Alumni', 1, '0', 'Executive Double (2 PAX)', 105, 1398, 2, 0, '500', '0', '0', '0', '2022-04-26', '00:00:00', '11:13:18', '2022-04-28', '00:00:00', '11:13:35', 500, '@gUL6JK7hF', 2796, 30, 1957, 0, 2957, 'Advance 50% Payment', 'Check Out', '2022-04-25', '08:13:35', 'Cash', 'Paid'),
(29, 'Joy Velante', 'joyvelantee@gmail.com', 'Manila', '09617187783', 'Christening', 'Guest', 1, '0', 'Executive King (2 PAX)', 102, 1898, 2, 0, '0', '0', '0', '0', '2022-04-01', '00:00:00', '10:30:58', '2022-04-03', '00:00:00', '14:40:21', 500, 'ap?gC@x21V', 3796, 30, 2658, 0, 3158, 'Advance 50% Payment', 'Check Out', '2022-04-25', '11:13:59', 'Bank', 'Paid'),
(30, 'Tess Ting', 'tessting@gmail.com', 'Test', '09121231234', 'Christening', 'Alumni', 1, '0', 'Executive Double (2 PAX)', 201, 1398, 1, 0, '0', '0', '0', '0', '2022-04-07', '00:00:00', '23:18:34', '2022-04-08', '00:00:00', '11:15:13', 500, 'hJ537d0CZR', 1398, 0, 1398, 0, 1898, 'Advance Full Payment', 'Check Out', '2022-04-25', '14:15:40', 'Bank', 'Paid'),
(31, 'Christian Yu', 'xtianjeffersonyu22@gmail.com', 'Bulacan', '09156486235', 'Christening', 'Alumni', 1, '0', 'Executive King (2 PAX)', 105, 1398, 2, 1, '500', '1', '1', '1', '2022-04-28', '00:00:00', '18:38:10', '2022-04-30', '00:00:00', '18:39:40', 500, 'fY?ArnMh@4', 2796, 10, 2517, 758, 4417, 'Advance 50% Payment', 'Check Out', '2022-04-27', '18:39:40', 'Cash', 'Paid'),
(32, 'Christian Yu', 'xtianjeffersonyu22@gmail.com', 'Bulacan', '09156486235', 'Birthday', 'Guest', 1, '0', 'Executive Family (4 PAX)', 102, 1898, 2, 1, '500', '0', '0', '0', '2022-04-29', '00:00:00', '17:21:34', '2022-05-01', '00:00:00', '17:22:37', 500, 'lQepZ@Eq?a', 3796, 30, 2658, 0, 3658, 'Advance Full Payment', 'Check Out', '2022-04-28', '17:24:27', 'Cash', 'Paid'),
(33, 'Jeffrey Tan', 'jeffreytan@gmail.com', 'bulacan', '09562445829', 'Birthday', 'Guest', 1, '0', 'Executive Double (2 PAX)', 102, 1398, 1, 0, '500', '0', '0', '0', '2022-04-30', '00:00:00', '15:49:29', '2022-05-01', '00:00:00', '15:49:37', 500, 'EA9g*@3y0W', 1398, 30, 978, 0, 1978, 'Advance 50% Payment', 'Check Out', '2022-04-29', '15:49:37', 'Cash', 'Paid'),
(34, 'Christian Yu', 'xtianjeffersonyu22@gmail.com', 'Bulacan', '09156486235', 'Family Events', 'Employee', 1, '0', 'Executive King (2 PAX)', 102, 1398, 1, 0, '500', '0', '1', '0', '2022-05-01', '00:00:00', '15:05:39', '2022-05-02', '00:00:00', '15:05:50', 500, 'lQKEeIvn0D', 1398, 0, 1398, 0, 2898, 'Advance 50% Payment', 'Check Out', '2022-04-30', '15:05:50', 'Cash', 'Paid'),
(35, 'Angela Eroles', 'gelaiiieroles@gmail.com', 'Tandang Sora, Quezon City', '09562489575', 'Family Events', 'Guest', 1, '0', 'Executive King (2 PAX)', 101, 1398, 1, 0, '500', '0', '0', '0', '2022-05-02', '00:00:00', '17:12:00', '2022-05-03', '00:00:00', '17:12:10', 500, 'oyM0YmVvaE', 1398, 40, 838, 438, 1838, 'Advance 50% Payment', 'Check Out', '2022-05-01', '10:12:10', 'Cash', 'Paid'),
(36, 'Christian Yu', 'xtianjeffersonyu22@gmail.com', 'bulacan', '09156486235', 'Family Events', 'Alumni', 1, '0', 'Executive King (2 PAX)', 101, 1398, 1, 0, '500', '0', '0', '0', '2022-05-02', '00:00:00', '17:12:00', '2022-05-03', '00:00:00', '17:12:11', 500, 'oyM0YmVvaE', 1398, 40, 838, 438, 1838, 'Advance 50% Payment', 'Check Out', '2022-05-01', '17:12:11', 'Cash', 'Paid'),
(37, 'Sample Sample', 'sample@gmail.com', '#17 estaban street, bulacan ', '09155248221', 'Christening', 'Alumni', 1, '0', 'Executive King (2 PAX)', 102, 1398, 1, 0, '0', '0', '0', '0', '2022-05-03', '00:00:00', '15:59:23', '2022-05-04', '00:00:00', '15:59:35', 500, 'e6dnVgF@v*', 1398, 50, 699, 0, 1199, 'Advance Full Payment', 'Check Out', '2022-05-02', '10:40:35', 'Cash', 'Paid'),
(38, 'Chistian Yu', 'xtianjeffersonyu22@gmail.com', 'Bulacan', '09156486235', 'Family Events', 'Guest', 1, '0', 'Executive Double (2 PAX)', 201, 1398, 2, 0, '0', '0', '0', '0', '2022-05-04', '00:00:00', '15:39:03', '2022-05-06', '00:00:00', '15:39:13', 0, 'CLlb#8KPfm', 2796, 10, 2516, 0, 2516, 'Advance 50% Payment', 'Check Out', '2022-05-03', '15:39:13', 'Cash', 'Paid'),
(39, 'Christian Yu', 'christian.yu@dlsau.edu.ph', 'Bulacan', '09156486235', 'Meeting/Seminar', 'Employee', 1, '0', 'Executive Double (2 PAX)', 201, 1398, 1, 0, '0', '0', '0', '0', '2022-05-05', '00:00:00', '15:41:33', '2022-05-06', '00:00:00', '15:41:49', 0, 'k67V8Y*nOB', 1398, 10, 1258, 0, 1258, 'Advance Full Payment', 'Check Out', '2022-05-03', '18:41:49', 'Cash', 'Paid'),
(40, 'Jonathan  De ocampo', 'jonathan.deocampo@dlsau.edu.ph', 'QC', '09247105212', 'Family Events', 'Alumni', 1, '0', 'Executive King (2 PAX)', 202, 1398, 1, 0, '0', '0', '0', '0', '2022-05-05', '00:00:00', '14:34:54', '2022-05-06', '00:00:00', '14:35:01', 500, 'zcdB9AX5#*', 1398, 10, 1258, 0, 1758, 'Advance Full Payment', 'Check Out', '2022-05-04', '12:35:01', 'Cash', 'Paid'),
(41, 'Ruth Centeno', 'ruth.centeno@dlsau.edu.ph', 'Malabon', '09254689231', 'Christening', 'Employee', 2, '1', 'Executive Family (4 PAX)', 201, 1898, 2, 0, '500', '0', '0', '0', '2022-05-05', '00:00:00', '14:37:51', '2022-05-07', '00:00:00', '14:38:24', 500, '35vpS#yhdH', 3796, 30, 2657, 657, 3657, 'Advance 50% Payment', 'Check Out', '2022-05-04', '14:38:24', 'Cash', 'Paid'),
(42, 'Ruth Centeno', 'ruth.centeno@dlsau.edu.ph', 'Malabon', '09254689231', 'Birthday', 'Employee', 3, '1', 'Executive Family (4 PAX)', 202, 1898, 3, 0, '500', '0', '0', '0', '2022-05-06', '00:00:00', '16:42:18', '2022-05-09', '00:00:00', '16:42:35', 500, 'CGivqc1?nd', 5694, 50, 2847, 0, 3847, 'Advance 50% Payment', 'Check Out', '2022-05-05', '16:42:58', 'Salary Deduction', 'Paid'),
(43, 'Chistian Yu', 'christian.yu@dlsau.edu.ph', 'Bulacan', '09156486235', 'Birthday', 'Guest', 1, '0', 'Executive King (2 PAX)', 201, 1398, 1, 0, '500', '0', '0', '0', '2022-05-07', '00:00:00', '18:09:58', '2022-05-08', '00:00:00', '18:10:19', 500, '6uLmnAfJdp', 1398, 40, 838, 0, 1838, 'Advance 50% Payment', 'Check Out', '2022-05-06', '18:10:19', 'Cash', 'Paid'),
(44, 'Chistian Yu', 'xtianjeffersonyu22@gmail.com', 'Malabon', '09156486235', 'Family Events', 'Alumni', 1, '0', 'Executive King (2 PAX)', 201, 1398, 2, 0, '500', '0', '0', '0', '2022-05-10', '00:00:00', '17:45:23', '2022-05-12', '00:00:00', '17:45:48', 500, '9bOiztqL5l', 2796, 30, 1957, 757, 2957, 'Advance 50% Payment', 'Check Out', '2022-05-07', '17:45:48', 'Cash', 'Paid'),
(46, 'Chistian Yu', 'xtianjeffersonyu22@gmail.com', 'Bulacan', '09156486235', 'Christening', 'Guest', 1, '0', 'Executive Family (4 PAX)', 101, 1898, 2, 0, '500', '0', '0', '0', '2022-05-10', '00:00:00', '19:16:57', '2022-05-12', '00:00:00', '19:17:05', 500, 'qGZpXBAyeQ', 3796, 40, 2277, 0, 3277, 'Advance Full Payment', 'Check Out', '2022-05-08', '19:17:05', 'Cash', 'Paid'),
(47, 'Ruth Centeno', 'ruth.centeno@dlsau.edu.ph', 'Malabon', '09254689231', 'Christening', 'Employee', 4, '1', 'Executive Family (4 PAX)', 205, 1898, 2, 0, '0', '0', '0', '0', '2022-05-14', '00:00:00', '19:21:30', '2022-05-16', '00:00:00', '19:21:59', 0, '7Egui3dAV#', 3796, 30, 2657, 657, 2657, 'Advance 50% Payment', 'Check Out', '2022-05-09', '19:21:59', 'Cash', 'Paid'),
(48, 'Christian Yu', 'christian.yu@dlsau.edu.ph', 'Bulacan', '09156486235', 'Student', 'Guest', 4, '0', 'Executive Family (4 PAX)', 205, 1898, 3, 1, '0', '1', '1', '1', '2022-05-14', '00:00:00', '16:44:23', '2022-05-17', '00:00:00', '16:46:34', 500, 'TaiclYGOQh', 3796, 50, 1898, 0, 3298, 'Advance 50% Payment', 'Check Out', '2022-05-10', '16:46:34', 'Cash', 'Paid'),
(49, 'Christian Yu', 'christianjeffersonfyu22@gmail.com', 'Bulacan', '09156486235', 'Meeting/Seminar', 'Alumni', 2, '0', 'Executive Double (2 PAX)', 201, 1398, 1, 0, '500', '0', '1', '0', '2022-05-24', '00:00:00', '17:12:52', '2022-05-25', '00:00:00', '17:13:05', 500, 'DpPa2sBAKr', 1398, 0, 1398, 0, 2898, 'Advance Full Payment', 'Check Out', '2022-05-11', '17:13:05', 'Cash', 'Paid'),
(50, 'Jonathan  De ocampo', 'jonathandeocampo06@gmail.com', 'QC', '09542471050', 'Student', 'Guest', 1, '0', 'Executive King (2 PAX)', 201, 1398, 1, 0, '500', '1', '1', '1', '2022-05-15', '00:00:00', '15:59:33', '2022-05-16', '00:00:00', '16:00:03', 0, 'DzC1@EsGKR', 1398, 40, 838, 0, 2238, 'Advance 50% Payment', 'Check Out', '2022-05-12', '16:00:03', 'Cash', 'Paid'),
(51, 'Christian Yu', 'xtianjeffersonyu22@gmail.com', 'Bulacan', '09156486235', 'Christening', 'Employee', 1, '0', 'Executive King (2 PAX)', 102, 1398, 1, 0, '500', '0', '1', '0', '2022-05-16', '00:00:00', '17:44:10', '2022-05-17', '00:00:00', '17:44:26', 500, 'riIWZJxnPB', 1398, 50, 699, 0, 2199, 'Advance Full Payment', 'Check Out', '2022-05-13', '17:44:26', 'Cash', 'Paid'),
(52, 'Christian Yu', 'christian.yu@dlsau.edu.ph', 'Bulacan', '09156486235', 'Christening', 'Employee', 2, '1', 'Executive Family (4 PAX)', 102, 1898, 2, 0, '500', '1', '3', '1', '2022-05-15', '00:00:00', '16:16:34', '2022-05-17', '00:00:00', '16:17:48', 500, 'sL2pJroq8U', 3796, 50, 1898, 0, 4798, 'Advance Full Payment', 'Check Out', '2022-05-14', '16:17:48', 'Salary Deduction', 'Paid'),
(53, 'Jonathan De ocampo', 'jonathandeocampo06@gmail.com', 'Qc', '09052471050', 'Student', 'Student', 1, '0', 'Executive King (2 PAX)', 202, 1398, 1, 0, '500', '1', '1', '1', '2022-05-18', '00:00:00', '16:38:44', '2022-05-19', '00:00:00', '16:39:14', 500, 'cDJ#HlS0wi', 1398, 40, 838, 0, 2738, 'Advance Full Payment', 'Check Out', '2022-05-15', '16:39:14', 'Cash', 'Paid'),
(54, 'Christian Yu', 'christianjeffersonfyu22@gmail.com', 'Bulacan', '09156486235', 'Meeting/Seminar', 'Guest', 2, '1', 'Executive Family (4 PAX)', 102, 1898, 2, 0, '500', '0', '0', '0', '2022-05-18', '00:00:00', '17:34:38', '2022-05-20', '00:00:00', '17:34:49', 500, 'c8mf@g91Zt', 3796, 30, 2657, 0, 3657, 'Advance Full Payment', 'Check Out', '2022-05-16', '17:34:49', 'Salary Deduction', 'Paid'),
(55, 'Jonathan  De ocampo', 'jonathandeocampo06@gmail.com', 'QC', '09052471050', 'Student', 'Student', 1, '0', 'Executive King (2 PAX)', 201, 1398, 1, 0, '0', '1', '1', '1', '2022-05-18', '00:00:00', '11:57:46', '2022-05-19', '00:00:00', '11:58:42', 500, 'Lf2CxqMoX?', 1398, 30, 978, 0, 2378, 'Advance Full Payment', 'Check Out', '2022-05-17', '11:59:13', 'Cash', 'Paid'),
(56, 'Melvin Ramirez', 'melvinramirez09@gmail.com', 'Novaliches, Quezon City', '09562148575', 'Meeting/Seminar', 'Guest', 1, '0', 'Executive King (2 PAX)', 201, 1398, 2, 0, '500', '2', '1', '1', '2022-05-19', '00:00:00', '17:48:49', '2022-05-21', '00:00:00', '17:50:13', 500, 'HrUdMoRBVt', 2796, 0, 2796, 0, 4796, 'Advance Full Payment', 'Check Out', '2022-05-18', '17:50:13', 'Cash', 'Paid'),
(57, 'Melvin Ramirez', 'melvinramirez09@gmail.com', 'Novaliches, Quezon City', '09562148575', 'Family Events', 'Guest', 1, '0', 'Executive King (2 PAX)', 202, 1398, 2, 0, '0', '0', '0', '0', '2022-05-20', '00:00:00', '18:00:10', '2022-05-22', '00:00:00', '18:00:24', 500, '90*kyE1Vbc', 2796, 0, 2796, 0, 3296, 'Advance Full Payment', 'Check Out', '2022-05-19', '18:00:24', 'Cash', 'Paid'),
(58, 'Christian Yu', 'xtianjeffersonyu22@gmail.com', 'Bulacan', '09156486235', 'Birthday', 'Alumni', 2, '2', 'Executive King (2 PAX)', 201, 1398, 2, 1, '500', '1', '1', '1', '2022-05-21', '00:00:00', '16:59:07', '2022-05-23', '00:00:00', '16:59:48', 500, 'klGqX?sDvA', 1398, 0, 1398, 0, 3298, 'Advance Full Payment', 'Check Out', '2022-05-20', '16:59:48', 'Cash', 'Paid'),
(59, 'Christian Yu', 'xtianjeffersonyu22@gmail.com', 'Bulacan', '09156486235', 'Student Activit', 'Alumni', 1, '0', 'Executive King (2 PAX)', 202, 1398, 2, 0, '500', '0', '1', '0', '2022-05-22', '00:00:00', '18:04:09', '2022-05-24', '00:00:00', '18:04:34', 500, 'qWreiDSsv0', 2796, 40, 1677, 0, 3177, 'Advance Full Payment', 'Check Out', '2022-05-21', '18:04:34', 'Cash', 'Paid'),
(60, 'Christine Pascua', 'Chrstnpascua22@gmail.com', 'Puerto Princesa, Palawan', '09505883869', 'Weddings', 'Guest', 1, '0', 'Executive Family (4 PAX)', 201, 1898, 2, 0, '0', '0', '0', '0', '2022-05-23', '00:00:00', '14:58:13', '2022-05-25', '00:00:00', '14:58:22', 0, 'lIrRe?0sM9', 3796, 50, 1898, 0, 1898, 'Advance Full Payment', 'Check Out', '2022-05-22', '14:58:22', 'Cash', 'Paid'),
(61, 'Chistian Yu', 'christianjeffersonfyu22@gmail.com', 'Bulacan', '09156486235', 'Reunion', 'Alumni', 2, '0', 'Executive Double (2 PAX)', 201, 1398, 3, 1, '500', '0', '1', '0', '2022-05-25', '00:00:00', '15:47:14', '2022-05-28', '00:00:00', '15:47:26', 500, 'yiiKeUoTAO', 2796, 0, 2796, 0, 4296, 'Advance Full Payment', 'Check Out', '2022-05-23', '15:47:26', 'Cash', 'Paid'),
(62, 'Nicole Pascua', 'Najpascua18@gmail.com', 'Puerto Princesa, Palawan', '09154452888', 'Meeting/Seminar', 'Guest', 2, '2', 'Executive Double (2 PAX)', 201, 1398, 3, 0, '0', '1', '1', '1', '2022-06-15', '00:00:00', '05:45:35', '2022-06-18', '00:00:00', '05:47:16', 500, 'n9QqtMpzhB', 4194, 40, 2516, 0, 3916, 'Advance 50% Payment', 'Check Out', '2022-05-26', '09:53:39', 'Cash', 'Paid'),
(63, 'Johnrafael Rufino', 'johnrafael_rufino@yahoo.com', 'QC', '09270175530', 'Birthday', 'Guest', 3, '2', 'Executive King (2 PAX)', 613, 1398, 3, 0, '0', '0', '0', '0', '2022-06-15', '00:00:00', '20:44:57', '2022-06-18', '00:00:00', '20:45:22', 0, 'mIucHqgQBw', 4194, 0, 4194, 0, 4194, 'Advance Full Payment', 'Check Out', '2022-05-28', '20:45:22', 'Cash', 'Paid'),
(64, 'Kath Garol', 'kthgrl11@gmail.com', 'Marikina', '09562154841', 'Christening', 'Guest', 1, '1', 'Executive Family (4 PAX)', 102, 1898, 2, 0, '500', '0', '1', '0', '2022-06-08', '00:00:00', '16:35:50', '2022-06-10', '00:00:00', '16:37:52', 500, 'sJO8gpHxBD', 3796, 30, 2657, 1657, 4157, 'Advance 50% Payment', 'Check Out', '2022-05-29', '11:37:52', 'Cash', 'Paid'),
(65, 'Honey De ocampo', 'deocampohoneygrace@gmail.com', 'San Juan, Batangas', '09095718888', 'Birthday', 'Guest', 1, '0', 'Executive Family (4 PAX)', 103, 1898, 3, 0, '0', '1', '1', '1', '2022-06-01', '00:00:00', '16:06:50', '2022-06-04', '00:00:00', '16:52:30', 500, 'k2e@pxFTQ#', 5694, 40, 3416, 0, 4816, 'Advance Full Payment', 'Check Out', '2022-05-29', '15:06:11', 'Cash', 'Paid'),
(66, 'Honey De ocampo', 'deocampohoneygrace@gmail.com', 'San Juan, Batangas', '09095718888', 'Family Events', 'Guest', 1, '0', 'Executive Double (2 PAX)', 205, 1398, 7, 1, '500', '0', '1', '0', '2022-06-08', '00:00:00', '16:44:54', '2022-06-15', '00:00:00', '17:06:48', 500, 'LVI9t1SEiY', 9786, 0, 9786, 0, 10786, 'Advance Full Payment', 'Check Out', '2022-05-29', '20:13:44', 'Cash', 'Paid'),
(67, 'Levi Carballo', 'lvicarballo@gmail.com', 'Sampaloc, Manila', '09265556422', 'Christening', 'Guest', 2, '0', 'Executive Family (4 PAX)', 205, 1898, 6, 1, '500', '1', '2', '1', '2022-06-20', '00:00:00', '17:29:31', '2022-06-26', '00:00:00', '17:31:15', 500, '83gxctmdwP', 11388, 40, 6833, 1500, 9233, 'Advance Full Payment', 'Check Out', '2022-05-30', '16:31:15', 'Cash', 'Paid'),
(68, 'Ronai Cruz', 'ronronaicrz@gmail.com', 'BGC, Taguig', '09618545245', 'Birthday', 'Guest', 2, '2', 'Executive Double (2 PAX)', 208, 1398, 8, 2, '0', '1', '1', '1', '2022-06-08', '00:00:00', '17:33:28', '2022-06-16', '00:00:00', '17:34:42', 500, 'VymCqE9oi8', 11184, 30, 7829, 979, 9229, 'Advance Full Payment', 'Check Out', '2022-05-30', '16:50:40', 'Bank', 'Paid'),
(69, 'Justin Santos', 'justsants@gmail.com', 'Fairview, Quezon City', '09565451122', 'Meeting/Seminar', 'Guest', 2, '1', 'Executive Double (2 PAX)', 205, 1398, 7, 1, '500', '1', '2', '1', '2022-06-22', '00:00:00', '19:12:15', '2022-06-29', '00:00:00', '19:14:53', 500, '6nshfc7F1A', 9786, 0, 9786, 4388, 12186, 'Advance 50% Payment', 'Check Out', '2022-05-30', '19:15:57', 'Bank', 'Paid'),
(70, 'Kim Marquez', 'marqueezkim@gmail.com', 'Bagong, Bario', '09564524589', 'Christening', 'Guest', 2, '1', 'Executive King (2 PAX)', 208, 1398, 4, 2, '500', '1', '2', '1', '2022-06-22', '00:00:00', '19:18:56', '2022-06-26', '00:00:00', '19:21:39', 500, '2az0buMtTS', 5592, 0, 5592, 1398, 7992, 'Advance Full Payment', 'Check Out', '2022-05-31', '09:21:39', 'Cash', 'Paid'),
(71, 'Jonathan  De ocampo', 'jonathandeocampo06@gmail.com', 'QC', '09254152315', 'Christening', 'Alumni', 1, '1', 'Executive Family (4 PAX)', 210, 1898, 9, 2, '500', '1', '2', '1', '2022-06-08', '00:00:00', '08:07:54', '2022-06-17', '00:00:00', '08:11:29', 500, 'vPasUDC?oe', 17082, 30, 11958, 1329, 14358, 'Advance Full Payment', 'Check Out', '2022-05-31', '12:11:29', 'Cash', 'Paid'),
(72, 'Roy Abalos', 'roy_abaloss@gmail.com', 'Caloocan', '09565824685', 'Family Events', 'Guest', 2, '0', 'Executive Family (4 PAX)', 212, 1898, 4, 2, '500', '1', '2', '1', '2022-06-22', '00:00:00', '08:19:33', '2022-06-26', '00:00:00', '08:21:27', 500, 'wIEVXt6faK', 7592, 40, 4556, 0, 6956, 'Advance Full Payment', 'Check Out', '2022-05-31', '16:22:31', 'Cash', 'Paid'),
(73, 'Jonathan  De ocampo', 'jonathandeocampo06@gmail.com', 'Novaliches, Quezon City', '09617187783', 'Meeting/Seminar', 'Alumni', 2, '2', 'Executive Family (4 PAX)', 210, 1898, 5, 3, '500', '1', '2', '1', '2022-06-12', '00:00:00', '12:36:27', '2022-06-17', '00:00:00', '12:38:51', 500, 'WKUYvaFBJ*', 9490, 40, 5695, 3555, 8095, 'Advance 50% Payment', 'Check Out', '2022-05-31', '20:38:51', 'Cash', 'Paid'),
(74, 'Christian daniel Perez', 'christian.daniel.perez12@gmail.com', '284 Joaquin Street Catanghalan, Obando, Bulacan', '09267234147', 'Family Events', 'Guest', 4, '0', 'Executive Family (4 PAX)', 1, 1898, 1, 0, '500', '0', '0', '0', '2022-12-12', '00:00:00', '16:10:17', '2022-12-13', '00:00:00', '16:14:55', 0, 'ydlOr3GPqX', 1898, 0, 1898, 0, 2398, 'Advance Full Payment', 'Check Out', '2022-06-01', '11:14:55', 'Cash', 'Paid'),
(75, 'Arzee Hipolito', 'zeehipolits@gmail.com', 'Libtong Meycauayan Bulacan', '09913398384', 'Reunion', 'Guest', 3, '0', 'Executive Family (4 PAX)', 202, 1898, 2, 3, '0', '0', '0', '0', '2022-06-13', '00:00:00', '00:39:04', '2022-06-15', '00:00:00', '16:26:44', 0, 'rxoG?SHi0@', 3796, 0, 3796, 0, 3796, 'Advance Full Payment', 'Check Out', '2022-06-01', '16:27:17', 'Cash', 'Paid'),
(76, 'Johnrafael Rufino', 'johnrafael_rufino@yahoo.com', 'Tandang Sora, Quezon City', '09270175530', 'Weddings', 'Guest', 2, '0', 'Executive King (2 PAX)', 1, 1398, 1, 0, '0', '0', '0', '0', '2022-05-29', '00:00:00', '16:26:04', '2022-05-30', '00:00:00', '16:27:05', 500, 'p0ZE1s?7YH', 1398, 0, 1398, 0, 1898, 'Advance Full Payment', 'Check Out', '2022-06-01', '21:27:28', 'Cash', 'Paid'),
(77, 'Arzee Hipolito', 'arzeehipolito@gmail.com', 'Libtong Meycauayan Bulacan', '09913398384', 'Christening', 'Guest', 2, '2', 'Executive King (2 PAX)', 2, 1398, 1, 0, '0', '0', '0', '0', '2022-05-28', '00:00:00', '16:26:24', '2022-05-29', '00:00:00', '16:27:49', 0, '@P9cp6FiXf', 1398, 0, 1398, 0, 1398, 'Advance Full Payment', 'Check Out', '2022-06-01', '22:28:01', 'Cash', 'Paid'),
(78, 'Roberto Asistores', 'rnasistorez@gmail.com', 'Malanday', '09659889334', 'Student Activit', 'Guest', 5, '0', 'Executive Family (4 PAX)', 2, 1898, 1, 0, '500', '0', '0', '0', '2022-10-02', '00:00:00', '16:48:14', '2022-10-03', '00:00:00', '09:30:54', 0, '8MXydcfrpR', 1898, 0, 1898, 0, 2398, 'Advance Full Payment', 'Check Out', '2022-06-02', '10:49:22', 'Bank', 'Paid'),
(79, 'Francine Maniti', 'frances.maniti04@yahoo.com', 'Bulacan City', '09345273683', 'Reunion', 'Guest', 2, '0', 'Executive Double (2 PAX)', 4, 1398, 1, 0, '500', '0', '0', '0', '2022-10-02', '00:00:00', '16:48:26', '2022-10-03', '00:00:00', '16:49:04', 0, '*IWe9#CHlg', 1398, 0, 1398, 0, 1898, 'Advance Full Payment', 'Check Out', '2022-06-02', '12:23:35', 'Cash', 'Paid'),
(80, 'Peter San miguel', 'petersmg@gmail.com', '544 Belmond St. Balubaran', '09321775849', 'Family Events', 'Guest', 3, '0', 'Executive King (2 PAX)', 1, 1398, 1, 0, '500', '0', '0', '0', '2022-10-02', '00:00:00', '16:48:07', '2022-10-03', '00:00:00', '16:48:49', 0, '@DLfuiB03S', 1398, 0, 1398, 0, 1898, 'Advance Full Payment', 'Check Out', '2022-06-02', '16:49:37', 'Cash', 'Paid'),
(81, 'Emmanuel Perez', 'emperador465@gmail.com', 'Manila City', '09464358457', 'Birthday', 'Guest', 2, '0', 'Executive Double (2 PAX)', 3, 1398, 1, 0, '500', '0', '0', '0', '2022-10-02', '00:00:00', '16:48:21', '2022-10-03', '00:00:00', '16:49:00', 0, 'SMLRf?3tEO', 1398, 0, 1398, 0, 1898, 'Advance Full Payment', 'Check Out', '2022-06-03', '20:20:39', 'Cash', 'Paid'),
(82, 'Cyrill Bariring', 'bariringcyrill@gmail.com', 'Pandayan Bulacan', '09167652177', 'Birthday', 'Guest', 2, '0', 'Executive King (2 PAX)', 1, 1398, 1, 0, '0', '0', '0', '0', '2022-06-05', '00:00:00', '20:28:08', '2022-06-06', '00:00:00', '20:47:37', 0, 'aOHoWhn4Dm', 1398, 30, 978, 0, 978, 'Advance Full Payment', 'Check Out', '2022-06-04', '14:47:49', 'Cash', 'Paid'),
(83, 'John Sins', 'shllw01@gmail.com', '232S T CS Lost City', '09232445623', 'Family Events', 'Guest', 3, '1', 'Executive Double (2 PAX)', 3, 1398, 13, 0, '500', '0', '0', '0', '2022-06-14', '00:00:00', '20:47:02', '2022-06-27', '00:00:00', '20:48:37', 0, 'mv?A7BDzcI', 18174, 0, 18174, 0, 18674, 'Advance Full Payment', 'Check Out', '2022-06-04', '20:48:48', 'Cash', 'Paid'),
(84, 'Vince Bacosa', 'vince_bacosa@gmail.com', 'Puerto Princesa, Palawan', '09156214862', 'Family Events', 'Guest', 2, '1', 'Executive Family (4 PAX)', 301, 1898, 4, 2, '500', '1', '2', '1', '2022-07-01', '00:00:00', '09:53:33', '2022-07-05', '00:00:00', '09:55:48', 500, 'y?xEmbqDJV', 7592, 30, 5316, 0, 7716, 'Advance 50% Payment', 'Check Out', '2022-06-04', '09:55:48', 'Cash', 'Paid'),
(85, 'John Sabando', 'jpascua1129@yahoo.com', 'Palawan', '09774485231', 'Family Events', 'Guest', 1, '0', 'Executive King (2 PAX)', 111, 1398, 5, 1, '0', '1', '1', '1', '2022-07-14', '00:00:00', '12:09:53', '2022-07-19', '00:00:00', '12:11:03', 500, 'S3Al#v9fiI', 6990, 10, 6290, 0, 7690, 'Advance Full Payment', 'Check Out', '2022-06-05', '12:11:31', 'Bank', 'Paid'),
(86, 'Angelo Suarez', 'angelosuarez20@gmail.com', 'Palawan, Puerto Princesa', '09565845625', 'Family Events', 'Guest', 1, '0', 'Executive Family (4 PAX)', 114, 1898, 3, 1, '0', '0', '0', '0', '2022-07-14', '00:00:00', '12:28:53', '2022-07-17', '00:00:00', '12:30:39', 500, 'M3XqfUGSb4', 5694, 0, 5694, 796, 6194, 'Advance 50% Payment', 'Check Out', '2022-06-05', '15:30:39', 'Cash', 'Paid'),
(87, 'Jonathan  De ocampo', 'jonathandeocampo06@gmail.com', 'QC', '09617187783', 'Family Events', 'Student', 2, '2', 'Executive Family (4 PAX)', 202, 1898, 4, 2, '500', '0', '1', '0', '2022-06-20', '00:00:00', '15:08:11', '2022-06-24', '00:00:00', '15:09:03', 500, 'RalJtXe*@1', 7592, 40, 4556, 0, 6056, 'Advance Full Payment', 'Check Out', '2022-06-06', '15:09:03', 'Cash', 'Paid'),
(88, 'Christian Yu', 'xtianjeffersonyu22@gmail.com', 'Bulacan', '09156486235', 'Student Activit', 'Student', 1, '1', 'Executive Family (4 PAX)', 203, 1898, 2, 1, '0', '1', '1', '1', '2022-06-09', '00:00:00', '17:07:36', '2022-06-11', '00:00:00', '17:28:20', 500, 'nVl6pTUJe9', 3796, 30, 2658, 0, 4058, 'Advance Full Payment', 'Check Out', '2022-06-07', '17:37:57', 'Salary Deduction', 'Paid'),
(89, 'Name Last', 'temporary@gmail.com', 'lastaddress234', '09832424241', 'Birthday', 'Guest', 3, '0', 'Executive King (2 PAX)', 1, 1398, 14, 0, '0', '0', '0', '0', '2022-07-06', '00:00:00', '20:24:24', '2022-07-20', '00:00:00', '18:40:56', 500, 'Fdvi7CKcXS', 19572, 0, 19572, 0, 20072, 'Advance Full Payment', 'Check Out', '2022-06-07', '18:40:56', 'Salary Deduction', 'Paid'),
(90, 'Christian Yu', 'christianjeffersonfyu22@gmail.com', 'Bulacan', '09156486235', 'Birthday', 'Student', 1, '2', 'Executive Family (4 PAX)', 101, 1898, 3, 2, '0', '1', '1', '1', '2022-06-10', '00:00:00', '17:40:13', '2022-06-13', '00:00:00', '15:26:59', 500, 'CxF8RgA#sD', 5694, 30, 3987, 0, 5387, 'Advance Full Payment', 'Check Out', '2022-06-08', '15:37:57', 'Salary Deduction', 'Paid'),
(91, 'Christian Yu', 'christianjeffersonfyu22@gmail.com', 'bulacan', '09156486235', 'Family Events', 'Student', 1, '0', 'Executive Family (4 PAX)', 102, 1898, 4, 2, '500', '1', '2', '1', '2022-06-10', '00:00:00', '15:25:16', '2022-06-14', '00:00:00', '15:43:19', 500, 'MS9pnkuVYo', 7592, 40, 4556, 1277, 6956, 'Advance 50% Payment', 'Check Out', '2022-06-08', '16:21:13', 'Salary Deduction', 'Paid'),
(92, 'Lynx Barasi', 'lynxbarasi@gmail.com', 'Novaliches, Quezon City', '09496944240', 'Family Events', 'Alumni', 1, '0', 'Executive Family (4 PAX)', 204, 1898, 2, 1, '500', '1', '1', '1', '2022-06-10', '00:00:00', '16:23:36', '2022-06-13', '00:00:00', '16:25:59', 500, '4Ka5UJ7@MP', 3796, 30, 2658, 928, 4558, 'Advance 50% Payment', 'Check Out', '2022-06-08', '16:27:13', 'Cash', 'Paid'),
(93, 'Jonathan  De ocampo', 'jonathandeocampo06@gmail.com', 'QC', '09617187783', 'Christening', 'Student', 1, '0', 'Executive Family (4 PAX)', 201, 1898, 4, 2, '500', '1', '2', '1', '2022-06-12', '00:00:00', '16:31:50', '2022-06-16', '00:00:00', '16:37:02', 500, 'rMgiWOfyok', 7592, 30, 5315, 700, 7715, 'Advance Full Payment', 'Check Out', '2022-06-08', '16:37:02', 'Cash', 'Paid'),
(94, 'Jonathan De ocampo', 'jonathandeocampo06@gmail.com', 'QC', '09617187783', 'Weddings', 'Student', 2, '2', 'Executive Family (4 PAX)', 200, 1898, 4, 2, '500', '1', '2', '1', '2022-06-14', '00:00:00', '16:45:59', '2022-06-18', '00:00:00', '16:47:15', 500, 'DsiVM0urG2', 7592, 30, 5315, 0, 7715, 'Advance Full Payment', 'Check Out', '2022-06-08', '16:47:15', 'Cash', 'Paid'),
(95, 'Yuri Uy', 'Yuriuy00@gmail.com', 'Novaliches, Quezon City', '09667688497', 'Student Activities', 'Alumni', 3, '0', 'Executive Family (4 PAX)', 202, 1898, 2, 0, '500', '1', '2', '1', '2022-06-13', '00:00:00', '18:09:57', '2022-06-17', '00:00:00', '18:12:18', 500, 'qz0DZ7nxK#', 3796, 30, 2658, 0, 5058, 'Advance Full Payment', 'Check Out', '2022-06-09', '18:35:53', 'Cash', 'Paid'),
(96, 'Jonathan  De ocampo', 'jonathandeocampo06@gmail.com', 'QC', '09617187783', 'Meeting/Seminar', 'Student', 2, '0', 'Executive Family (4 PAX)', 122, 1898, 4, 2, '500', '1', '2', '1', '2022-06-20', '00:00:00', '18:44:29', '2022-06-24', '00:00:00', '18:46:33', 500, 'E#7Q1P0Lb*', 7592, 30, 5315, 700, 7715, 'Advance Full Payment', 'Check Out', '2022-06-09', '18:47:18', 'Cash', 'Paid'),
(97, 'Jonathan  De ocampo', 'jonathandeocampo06@gmail.com', 'QC', '09617187783', 'Meeting/Seminar', 'Student', 2, '0', 'Executive Family (4 PAX)', 1, 1898, 2, 0, '500', '0', '1', '0', '2022-06-20', '00:00:00', '09:17:40', '2022-06-22', '00:00:00', '11:35:47', 500, 'GFfKVv0Hdp', 3796, 30, 2657, 0, 4157, 'Advance 50% Payment', 'Check Out', '2022-06-10', '11:35:47', 'Cash', 'Paid'),
(98, 'Joseph Peralta', 'joseph.peralta@dlsau.edu.ph', 'pasig city', '09123456789', 'Birthday', 'Student', 2, '0', 'Executive King (2 PAX)', 304, 1398, 1, 0, '0', '0', '0', '0', '2022-06-18', '00:00:00', '14:16:15', '2022-06-19', '00:00:00', '17:07:36', 500, '6rDKg4GReM', 1398, 30, 978, 0, 1478, 'Advance Full Payment', 'Check Out', '2022-06-10', '17:07:36', 'Cash', 'Paid'),
(99, 'Rose hazel joy Bigcas', 'hazelbigcas22@gmail.com', '164 Quirino Hi-way Baesa Q.C', '09183758910', 'Student Activities', 'Student', 5, '0', 'Executive Family (4 PAX)', 202, 1898, 1, 0, '500', '0', '1', '0', '2022-06-15', '00:00:00', '19:53:04', '2022-06-16', '00:00:00', '09:47:41', 500, 'GKq6V51i2J', 1898, 30, 1328, 328, 2828, 'Advance 50% Payment', 'Check Out', '2022-06-11', '09:47:41', 'Cash', 'Paid');

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
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`contact_id`, `contact_firstname`, `contact_lastname`, `contact_position`, `contact_email`, `contact_subject`, `contact_message`) VALUES
(74, 'Henrytob', 'Henrytob', 'DLSAU-Alumni', 'danielhenriksen@forum.dk', 'Start your onli', 'Start making thousands of dollars every week. https://tob.coronect.de/tob '),
(70, 'Henrytob', 'Henrytob', 'DLSAU-Student', 'andreashandi@aol.com', 'Thousands of bu', 'Only one click can grow up your money really fast. https://tob.coronect.de/tob '),
(71, 'Henrytob', 'Henrytob', 'DLSAU-Student', 'auuto297@mailme.dk', 'Financial robot', 'Thousands of bucks are guaranteed if you use this robot. https://tob.coronect.de/tob '),
(72, 'Henrytob', 'Henrytob', 'Others', 'abetterphoto@forum.dk', 'Start your onli', 'Feel free to buy everything you want with the additional income. https://tob.coronect.de/tob '),
(73, 'Henrytob', 'Henrytob', 'DLSAU-Employee', 'janlf@forum.dk', 'It is the best ', 'Trust the financial Bot to become rich. https://tob.coronect.de/tob '),
(69, 'Henrytob', 'Henrytob', 'DLSAU-Student', 'kirke@forum.dk', 'Check out the n', 'Trust your dollar to the Robot and see how it grows to $100. https://tob.coronect.de/tob '),
(68, 'Ila', 'Rinon', 'DLSAU-Student', 'ila.rinon@dlsau.edu.ph', 'inquiry', 'can I still book a room even if I have a dorm? HAHAHA. CHAROT.'),
(67, 'Jeniel', 'Mendoza', 'DLSAU-Student', 'jeniel.mendoza@dlsau.edu.ph', 'Sample Message', 'Hello World!');

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
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`photo_id`, `photo_description`, `photo`, `photo1`, `photo2`, `photo3`, `photo4`) VALUES
(3, 'Christmas Party 2019', '1 1.jpg', '56.jpg', '44.jpg', '22.jpg', '44.jpg'),
(4, 'Birthday', 'b1.jpg', '22.jpg', 'b3.jpg', 'b (2).jpg', 'b4.jpg'),
(5, 'Venue', 'm1.jpg', 'm3.jpg', 'm4.jpg', 'm5.jpg', 'm6.jpg'),
(6, 'Food Tasting', 'g6.jpg', 'v4.jpg', 'v3.jpg', 'v4.jpg', 'g2.jpg'),
(13, 'Sportsfest\r\n', '44.jpg', 'c2.jpg', 'c3.jpg', 'c4.jpg', 'c5.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `guest`
--

CREATE TABLE `guest` (
  `guest_id` int(11) NOT NULL,
  `firstname` varchar(150) NOT NULL,
  `lastname` varchar(150) NOT NULL,
  `email_address` varchar(150) NOT NULL,
  `address` varchar(255) NOT NULL,
  `contact_no` varchar(12) NOT NULL,
  `position` varchar(13) NOT NULL,
  `purposeofstay` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `guest`
--

INSERT INTO `guest` (`guest_id`, `firstname`, `lastname`, `email_address`, `address`, `contact_no`, `position`, `purposeofstay`) VALUES
(1, 'Jonathan ', 'De ocampo', 'jonathandeocampo06@gmail.com', 'QC', '09617187783', 'Student', 'Family Events'),
(3, 'Ila', 'Rinon', 'ila.rinon@dlsau.edu.ph', 'Novaliches, Quezon City', '09123456789', 'Student', 'Family Events'),
(4, 'Sample', 'Sample', 'sample@gmail.com', 'sample city', '09564231587', 'Alumni', 'Family Events');

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
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

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
  `news_title` varchar(255) NOT NULL,
  `news_date` date NOT NULL,
  `photo` varchar(255) NOT NULL,
  `news_description` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`news_id`, `news_title`, `news_date`, `photo`, `news_description`) VALUES
(1, 'Discount', '2021-09-22', 'upto50.jpg', 'Discount'),
(2, 'Discount', '2022-04-25', '101.jpg', 'Discount'),
(3, 'Discount', '2021-09-22', 'personnel50.jpg', 'Discount');

-- --------------------------------------------------------

--
-- Table structure for table `pendingcheckout_report`
--

CREATE TABLE `pendingcheckout_report` (
  `pendingcheckout_id` int(11) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `email_address` varchar(50) NOT NULL,
  `address` varchar(255) NOT NULL,
  `contact_no` varchar(11) NOT NULL,
  `purposeofstay` varchar(255) NOT NULL,
  `position` varchar(15) NOT NULL,
  `adults` int(255) NOT NULL,
  `children` int(255) NOT NULL,
  `room_type` varchar(255) NOT NULL,
  `room_no` int(255) NOT NULL,
  `room_price` int(255) NOT NULL,
  `days` int(255) NOT NULL,
  `extend_days` int(2) NOT NULL,
  `early_checkin` varchar(11) NOT NULL,
  `extra_towel` varchar(11) NOT NULL,
  `extra_bed` varchar(255) NOT NULL,
  `lost_key` varchar(11) NOT NULL,
  `checkin` date NOT NULL,
  `bookcheckin_time` time NOT NULL,
  `checkin_time` time NOT NULL,
  `checkout` date NOT NULL,
  `bookcheckout_time` time NOT NULL,
  `checkout_time` time NOT NULL,
  `late_checkout` int(11) NOT NULL,
  `generate_code` varchar(255) NOT NULL,
  `deposit_total` int(255) NOT NULL,
  `discount` int(50) NOT NULL,
  `discount_total` int(255) NOT NULL,
  `previous_balance` int(255) NOT NULL,
  `total_amount` int(255) NOT NULL,
  `deposit` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `payment_method` varchar(255) NOT NULL,
  `payment_status` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pendingcheckout_report`
--

INSERT INTO `pendingcheckout_report` (`pendingcheckout_id`, `fullname`, `email_address`, `address`, `contact_no`, `purposeofstay`, `position`, `adults`, `children`, `room_type`, `room_no`, `room_price`, `days`, `extend_days`, `early_checkin`, `extra_towel`, `extra_bed`, `lost_key`, `checkin`, `bookcheckin_time`, `checkin_time`, `checkout`, `bookcheckout_time`, `checkout_time`, `late_checkout`, `generate_code`, `deposit_total`, `discount`, `discount_total`, `previous_balance`, `total_amount`, `deposit`, `status`, `payment_method`, `payment_status`) VALUES
(27, 'Jeniel  mendoza', 'jeniel.mendoza@dlsau.edu.ph', 'Blk 5 L15', '09424657380', 'Student Activities', 'Student', 1, 1, 'Executive Double (2 PAX)', 204, 1398, 8, 0, '0', '0', '0', '0', '2022-06-15', '00:00:00', '17:21:11', '2022-06-23', '00:00:00', '17:21:48', 500, 'Mtnw#p5?Xv', 11184, 30, 7828, 0, 500, 'Advance Full Payment', 'Pending Check Out', 'Cash', 'Unpaid');

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
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `room`
--

INSERT INTO `room` (`room_id`, `room_no`, `room_type`, `max`, `bed`, `price`, `photo`, `photo1`, `photo2`, `photo3`, `photo4`) VALUES
(1, 201, 3, 2, 1, '1398.00', '107017657_1366147483578455_6016630183153706840_o (2).jpg', 'room-3.jpg', 'room-6.jpg', 'room-1.jpg', 'room-5.jpg'),
(2, 202, 2, 4, 1, '1898.00', '107061195_1366147480245122_2512712329625183016_o (2).jpg', 'room-2.jpg', 'room-4.jpg', 'room-5.jpg', 'room-6.jpg'),
(3, 203, 1, 2, 2, '1398.00', '107893206_1366057166920820_7506672819801105459_n (2).jpg', 'room-3.jpg', 'room-4.jpg', 'room-5.jpg', 'room-6.jpg'),
(5, 204, 1, 2, 2, '1398.00', '109569745_1366057163587487_6193043321425288759_n (2).jpg', 'room-5.jpg', 'room-2.jpg', 'room-6.jpg', 'room-3.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `room_type`
--

CREATE TABLE `room_type` (
  `roomtype_id` int(11) NOT NULL,
  `room_type` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `room_type`
--

INSERT INTO `room_type` (`roomtype_id`, `room_type`) VALUES
(1, 'Executive Double (2 PAX)'),
(2, 'Executive Family (4 PAX)'),
(3, 'Executive King (2 PAX)'),
(4, 'Executive King (4 PAX)'),
(21, 'Double King');

-- --------------------------------------------------------

--
-- Table structure for table `transaction`
--

CREATE TABLE `transaction` (
  `transaction_id` int(11) NOT NULL,
  `guest_id` int(11) NOT NULL,
  `room_id` int(11) NOT NULL,
  `room_no` int(5) DEFAULT NULL,
  `adults` int(11) NOT NULL,
  `children` varchar(3) DEFAULT NULL,
  `early_checkin` int(11) DEFAULT NULL,
  `extra_towel` varchar(2) DEFAULT NULL,
  `extra_bed` varchar(3) DEFAULT NULL,
  `lost_key` varchar(2) DEFAULT NULL,
  `generate_code` varchar(255) DEFAULT NULL,
  `status` varchar(255) NOT NULL,
  `days` int(2) DEFAULT NULL,
  `extend_days` int(2) NOT NULL,
  `bookcheckin_time` time NOT NULL,
  `checkin` date NOT NULL,
  `checkin_time` time DEFAULT NULL,
  `bookcheckout_time` time NOT NULL,
  `checkout` date NOT NULL,
  `checkout_time` time DEFAULT NULL,
  `deposit_method` varchar(255) NOT NULL,
  `deposit` int(255) NOT NULL,
  `deposit_total` int(255) NOT NULL,
  `discount` int(255) NOT NULL,
  `discount_total` int(255) NOT NULL,
  `previous_balance` int(255) NOT NULL,
  `bill` int(255) DEFAULT NULL,
  `payment_method` varchar(255) DEFAULT NULL,
  `payment_status` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transaction`
--

INSERT INTO `transaction` (`transaction_id`, `guest_id`, `room_id`, `room_no`, `adults`, `children`, `early_checkin`, `extra_towel`, `extra_bed`, `lost_key`, `generate_code`, `status`, `days`, `extend_days`, `bookcheckin_time`, `checkin`, `checkin_time`, `bookcheckout_time`, `checkout`, `checkout_time`, `deposit_method`, `deposit`, `deposit_total`, `discount`, `discount_total`, `previous_balance`, `bill`, `payment_method`, `payment_status`) VALUES
(1, 1, 1, NULL, 1, '0', NULL, NULL, NULL, NULL, 'Erm2kfPMtU', 'Pending Payment Reservation', NULL, 0, '00:00:00', '2022-06-15', NULL, '00:00:00', '2022-06-17', NULL, '', 0, 2796, 0, 2796, 0, 2796, NULL, NULL),
(3, 3, 2, 202, 5, '0', 500, NULL, '0', NULL, 'F0h#Yp6g9Q', 'Check In', 1, 0, '00:00:00', '2022-06-11', '09:48:21', '00:00:00', '2022-06-12', NULL, 'Bank', 0, 1898, 30, 1328, 0, 500, NULL, NULL),
(4, 4, 1, NULL, 1, '', NULL, NULL, NULL, NULL, NULL, 'Pending Reservation', NULL, 0, '17:08:00', '2023-09-24', NULL, '17:08:00', '2023-09-25', NULL, '', 0, 0, 0, 0, 0, NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admindash`
--
ALTER TABLE `admindash`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cancel_pendingcheckin`
--
ALTER TABLE `cancel_pendingcheckin`
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `cancel_pendingcheckin`
--
ALTER TABLE `cancel_pendingcheckin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `cancel_reservation`
--
ALTER TABLE `cancel_reservation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `checkout_report`
--
ALTER TABLE `checkout_report`
  MODIFY `checkout_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=100;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `contact_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=75;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `photo_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `guest`
--
ALTER TABLE `guest`
  MODIFY `guest_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `manage_website`
--
ALTER TABLE `manage_website`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `news_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `pendingcheckout_report`
--
ALTER TABLE `pendingcheckout_report`
  MODIFY `pendingcheckout_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `room`
--
ALTER TABLE `room`
  MODIFY `room_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `room_type`
--
ALTER TABLE `room_type`
  MODIFY `roomtype_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `transaction`
--
ALTER TABLE `transaction`
  MODIFY `transaction_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
