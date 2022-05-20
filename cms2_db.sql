-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 25, 2021 at 11:39 AM
-- Server version: 8.0.22
-- PHP Version: 7.4.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cms2_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `branches`
--

CREATE TABLE `branches` (
  `id` int NOT NULL,
  `branch_code` varchar(50) NOT NULL,
  `street` text NOT NULL,
  `city` text NOT NULL,
  `state` text NOT NULL,
  `zip_code` varchar(50) NOT NULL,
  `country` text NOT NULL,
  `contact` varchar(100) NOT NULL,
  `date_created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `branches`
--

INSERT INTO `branches` (`id`, `branch_code`, `street`, `city`, `state`, `zip_code`, `country`, `contact`, `date_created`) VALUES
(1, 'vzTL0PqMogyOWhF', 'Branch 1 St., Quiapo', 'Manila', 'Metro Manila', '1001', 'Philippines', '+2 123 455 623', '2020-11-26 11:21:41'),
(3, 'KyIab3mYBgAX71t', 'SAmple', 'Cebu', 'Cebu', '6000', 'Philippines', '+1234567489', '2020-11-26 16:45:05'),
(4, 'dIbUK5mEh96f0Zc', 'Sample', 'Sample', 'Sample', '123456', 'Philippines', '123456', '2020-11-27 13:31:49');

-- --------------------------------------------------------

--
-- Table structure for table `parcels`
--

CREATE TABLE `parcels` (
  `S.No.` int NOT NULL,
  `S_FullName` varchar(20) NOT NULL,
  `S_Email` varchar(30) NOT NULL,
  `S_Address` varchar(50) NOT NULL,
  `S_Contact` varchar(10) NOT NULL,
  `S_State` varchar(10) NOT NULL,
  `S_PinCode` varchar(20) NOT NULL,
  `S_Weight` varchar(30) NOT NULL,
  `R_FullName` varchar(20) NOT NULL,
  `R_Email` varchar(30) NOT NULL,
  `R_Address` varchar(50) NOT NULL,
  `R_Contact` varchar(10) NOT NULL,
  `R_State` varchar(10) NOT NULL,
  `R_PinCode` varchar(20) NOT NULL,
  `Tracking_Id` varchar(255) DEFAULT NULL,
  `Status` varchar(255) NOT NULL,
  `Location` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `parcels`
--

INSERT INTO `parcels` (`S.No.`, `S_FullName`, `S_Email`, `S_Address`, `S_Contact`, `S_State`, `S_PinCode`, `S_Weight`, `R_FullName`, `R_Email`, `R_Address`, `R_Contact`, `R_State`, `R_PinCode`, `Tracking_Id`, `Status`, `Location`) VALUES
(1, 'ARYAN SINGH', 'aryan@gmail.com', 'SAMBALPR, ODISHA', '9582456487', '', '768001', '8', 'MAHIMA MITTAL', 'mahima@gmail.com', 'HISAR, HARYANA', '9416787159', '', '125001', '87750252', 'Order Placed', 'Not Updated'),
(2, 'ARYAN SINGH', 'aryan@gmail.com', 'SAMBALPR, ODISHA', '9582456487', '', '768001', '8', 'MAHIMA MITTAL', 'mahima@gmail.com', 'HISAR, HARYANA', '9416787159', '', '125001', '93010744', 'Order Placed', 'Not Updated'),
(3, 'ARYAN SINGH', 'aryan@gmail.com', 'SAMBALPR, ODISHA', '9582456487', '', '768001', '8', 'MAHIMA MITTAL', 'mahima@gmail.com', 'HISAR, HARYANA', '9416787159', '', '125001', '56282667', 'Order Placed', 'Not Updated'),
(4, 'ARYAN SINGH', 'aryan@gmail.com', 'SAMBALPR, ODISHA', '9582456487', '', '768001', '8', 'MAHIMA MITTAL', 'mahima@gmail.com', 'HISAR, HARYANA', '9416787159', '', '125001', '25826116', 'Order Placed', 'Not Updated'),
(5, 'ARYAN SINGH', 'aryan@gmail.com', 'SAMBALPR, ODISHA', '9582456487', '', '768001', '8', 'MAHIMA MITTAL', 'mahima@gmail.com', 'HISAR, HARYANA', '9416787159', '', '125001', '79387633', 'Order Placed', 'Not Updated'),
(6, '', '', '', '', '', '', '', '', '', '', '', '', '', '64465467', 'Order Placed', 'Not Updated'),
(7, 'ARYAN SINGH', 'aryan@gmail.com', 'SAMBALPR, ODISHA', '9582456487', '', '811311', '4', 'MAHIMA MITTAL', 'mahima@gmail.com', 'HISAR, HARYANA', '9416787159', '', '811311', '64744399', 'Order Placed', 'Not Updated'),
(8, 'ABINASH SINHA', 'binash0251@gmail.com', 'TETARHAT', '9416787159', '', '811311', '5', 'ABINASH SINHA', 'binash0251@gmail.com', 'LAKHISARAI', '9416787159', '', '125001', '99878165', 'Order Placed', 'Not Updated'),
(9, 'Kumar', 'shubham@gmail.com', 'SAMBALPR, ODISHA', '9582456487', '', '811311', '6', 'ABINASH SINHA', 'hsdgfh@gm,ail.com', 'chandi', '54656', '', '811311', '14350700', 'Order Placed', 'Not Updated'),
(10, 'Kumar', 'shubham@gmail.com', 'SAMBALPR, ODISHA', '9582456487', '', '811311', '6', 'ABINASH SINHA', 'hsdgfh@gm,ail.com', 'chandi', '54656', '', '811311', '56905822', 'Order Placed', 'Not Updated');

-- --------------------------------------------------------

--
-- Table structure for table `parcel_tracks`
--

CREATE TABLE `parcel_tracks` (
  `id` int NOT NULL,
  `parcel_id` int NOT NULL,
  `status` int NOT NULL,
  `date_created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `parcel_tracks`
--

INSERT INTO `parcel_tracks` (`id`, `parcel_id`, `status`, `date_created`) VALUES
(1, 2, 1, '2020-11-27 09:53:27'),
(2, 3, 1, '2020-11-27 09:55:17'),
(3, 1, 1, '2020-11-27 10:28:01'),
(4, 1, 2, '2020-11-27 10:28:10'),
(5, 1, 3, '2020-11-27 10:28:16'),
(6, 1, 4, '2020-11-27 11:05:03'),
(7, 1, 5, '2020-11-27 11:05:17'),
(8, 1, 7, '2020-11-27 11:05:26'),
(9, 3, 2, '2020-11-27 11:05:41'),
(10, 6, 1, '2020-11-27 14:06:57');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `Full_Name` varchar(20) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `Password` varchar(30) NOT NULL,
  `Confirm_Password` varchar(30) NOT NULL,
  `Contact` varchar(10) NOT NULL,
  `Country` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`Full_Name`, `Email`, `Password`, `Confirm_Password`, `Contact`, `Country`) VALUES
('Mahima', 'sinhaabinash251@gmail.com', '1234', '1234', '9416787159', 'China'),
('Mahima', 'sinhaabinash251@gmail.com', '1234', '1234', '9416787159', 'China'),
('ABINASH', 'mahima2022000@gmail.com', '23435', '23435', '9142629868', 'India'),
('', '', '', '', '', ''),
('', '', '', '', '', ''),
('', '', '', '', '', ''),
('', '', '', '', '', ''),
('', '', '', '', '', ''),
('Mahima Mittal', 'sinha@gmail.com', '1234', '1234', '9416787159', 'India'),
('Mahima Mittal', 'sinha@gmail.com', '1234', '1234', '9416787159', 'India'),
('Abinash', 'sinhaabinash251@gmail.com', '1234', '1234', '9142629868', 'India'),
('Mahima Mittal', 'mahima2022000@gmail.com', '12345', '12345', '9416787159', 'India'),
('', 'admin@admin.com', 'admin123', '', '', ''),
('Abinash', 'admin@admin.com', '12345', '12345', '9142629868', 'India');

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `S.NO` int NOT NULL,
  `FullName` varchar(30) NOT NULL,
  `JOBID` varchar(10) NOT NULL,
  `EMAIL` varchar(30) NOT NULL,
  `BRANCH` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `CONTACT` varchar(10) NOT NULL,
  `ADDRESS` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `STATE` varchar(20) NOT NULL,
  `POST` varchar(20) NOT NULL,
  `AADHAR` varchar(12) NOT NULL,
  `JOININGYEAR` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `ENDYEAR` varchar(10) NOT NULL,
  `SIGNATURE` varchar(30) NOT NULL,
  `Status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`S.NO`, `FullName`, `JOBID`, `EMAIL`, `BRANCH`, `CONTACT`, `ADDRESS`, `STATE`, `POST`, `AADHAR`, `JOININGYEAR`, `ENDYEAR`, `SIGNATURE`, `Status`) VALUES
(1, 'Mahima Mittal', '23474', 'sinha@gmail.com', 'ship', '9416787159', 'HISAR, 1097', 'HARYANA', 'MANAGER', '875656348734', '2016', '2050', 'Abinash', ''),
(2, 'Mahima Mittal', '23474', 'sinha@gmail.com', 'ship', '9416787159', 'HISAR, 1097', 'HARYANA', 'MANAGER', '875656348734', '2016', '2050', 'Abinash', ''),
(3, 'Mahima Mittal', '23474', 'sinha@gmail.com', 'ship', '9416787159', 'HISAR, 1097', 'HARYANA', 'MANAGER', '875656348734', '2016', '2050', 'Abinash', ''),
(4, '', '', '', '', '', '', '', '', '', '', '', '', ''),
(5, '', '', '', '', '', '', '', '', '', '', '', '', 'Successfully');

-- --------------------------------------------------------

--
-- Table structure for table `system_settings`
--

CREATE TABLE `system_settings` (
  `id` int NOT NULL,
  `name` text NOT NULL,
  `email` varchar(200) NOT NULL,
  `contact` varchar(20) NOT NULL,
  `address` text NOT NULL,
  `cover_img` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `system_settings`
--

INSERT INTO `system_settings` (`id`, `name`, `email`, `contact`, `address`, `cover_img`) VALUES
(1, 'Courier Management System', 'info@sample.comm', '+6948 8542 623', '2102  Caldwell Road, Rochester, New York, 14608', '');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL,
  `firstname` varchar(200) NOT NULL,
  `lastname` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` text NOT NULL,
  `type` tinyint(1) NOT NULL DEFAULT '2' COMMENT '1 = admin, 2 = staff',
  `branch_id` int NOT NULL,
  `date_created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstname`, `lastname`, `email`, `password`, `type`, `branch_id`, `date_created`) VALUES
(1, 'Administrator', '', 'admin@admin.com', '0192023a7bbd73250516f069df18b500', 1, 0, '2020-11-26 10:57:04'),
(2, 'John', 'Smith', 'jsmith@sample.com', '1254737c076cf867dc53d60a0364f38e', 2, 1, '2020-11-26 11:52:04'),
(3, 'George', 'Wilson', 'gwilson@sample.com', 'd40242fb23c45206fadee4e2418f274f', 2, 4, '2020-11-27 13:32:12');

-- --------------------------------------------------------

--
-- Table structure for table `validate_pass`
--

CREATE TABLE `validate_pass` (
  `email` varchar(50) NOT NULL,
  `otp` int NOT NULL,
  `password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `validate_pass`
--

INSERT INTO `validate_pass` (`email`, `otp`, `password`) VALUES
('sinhaabinash251@gmail.com', 119273, 'sinha123'),
('sinhaabinash251@gmail.com', 119273, 'mahima@1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `branches`
--
ALTER TABLE `branches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `parcels`
--
ALTER TABLE `parcels`
  ADD PRIMARY KEY (`S.No.`);

--
-- Indexes for table `parcel_tracks`
--
ALTER TABLE `parcel_tracks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`S.NO`);

--
-- Indexes for table `system_settings`
--
ALTER TABLE `system_settings`
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
-- AUTO_INCREMENT for table `branches`
--
ALTER TABLE `branches`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `parcels`
--
ALTER TABLE `parcels`
  MODIFY `S.No.` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `parcel_tracks`
--
ALTER TABLE `parcel_tracks`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `S.NO` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `system_settings`
--
ALTER TABLE `system_settings`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
