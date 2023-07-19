-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 03, 2022 at 12:45 PM
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
-- Database: `power_carwash_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `bk_id` bigint(20) NOT NULL,
  `bk_date` date NOT NULL,
  `bk_timeIn` time NOT NULL,
  `bk_status` varchar(20) NOT NULL,
  `serv_id` bigint(20) NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `sp_Id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`bk_id`, `bk_date`, `bk_timeIn`, `bk_status`, `serv_id`, `user_id`, `sp_Id`) VALUES
(40, '2022-10-26', '08:00:00', 'Pending', 15, 17, 5),
(41, '2022-10-26', '15:00:00', 'Pending', 15, 17, 5),
(42, '2022-10-26', '18:00:00', 'Pending', 15, 17, 5),
(43, '2022-10-26', '08:00:00', 'Pending', 15, 17, 1),
(44, '2022-10-26', '08:00:00', 'Pending', 15, 17, 1),
(45, '2022-10-26', '17:00:00', 'Pending', 15, 17, 1),
(46, '2022-10-26', '16:00:00', 'Pending', 15, 17, 1),
(47, '2022-10-26', '08:00:00', 'Pending', 15, 17, 1),
(48, '2022-10-26', '08:00:00', 'Pending', 15, 17, 1),
(52, '2022-10-26', '15:00:00', 'Pending', 15, 17, 2),
(53, '2022-10-26', '08:00:00', 'Pending', 15, 17, 1),
(54, '2022-10-26', '08:00:00', 'Pending', 15, 17, 1),
(55, '2022-10-26', '08:00:00', 'Pending', 15, 17, 5),
(56, '2022-10-26', '08:00:00', 'Pending', 16, 17, 3),
(57, '2022-10-26', '15:00:00', 'Pending', 16, 17, 3),
(58, '2022-10-28', '08:00:00', 'Pending', 16, 17, 5);

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `emp_id` bigint(20) NOT NULL,
  `emp_name` varchar(50) NOT NULL,
  `emp_email` varchar(100) NOT NULL,
  `emp_number` int(10) NOT NULL,
  `emp_adress` varchar(150) NOT NULL,
  `emp_salary` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `services_cart`
--

CREATE TABLE `services_cart` (
  `serv_id` bigint(20) NOT NULL,
  `vehicle_type` varchar(255) NOT NULL,
  `serv_type` varchar(100) NOT NULL,
  `serv_image` varchar(255) NOT NULL,
  `serv_price` double NOT NULL,
  `serv_descrip` varchar(250) NOT NULL,
  `sp_Id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `services_cart`
--

INSERT INTO `services_cart` (`serv_id`, `vehicle_type`, `serv_type`, `serv_image`, `serv_price`, `serv_descrip`, `sp_Id`) VALUES
(13, 'Car', 'Gold', 'cExt.jpg', 60, 'Full wash/dry', 2),
(14, 'Bus', 'Gold', '', 110, 'bjscdyucwdcvwegcwecbwe', 1),
(15, 'truck', 'Platinum', 'carInt.jpg', 30, 'hxghecvewhgvwvxvewych', 1),
(16, 'SUV', 'Gold', 'ackCombo.jpg', 110, '', 3),
(17, 'Bakkie', 'Platinum', '', 50, 'Full-wash/dry/polish-tyre.', 2),
(18, 'truck', 'platinum', '', 500, 'full wash/dry and polish', 2);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `fullname` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `Confirm_Password` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `contacts` varchar(10) NOT NULL,
  `address` varchar(100) NOT NULL,
  `user_type` varchar(50) NOT NULL DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `user_id`, `fullname`, `password`, `Confirm_Password`, `email`, `contacts`, `address`, `user_type`) VALUES
(16, 2328246579533861, 'Saturday', ' 1234', '1234', 'burkley@gmail.com', '0823409468', 'Witbank Khayalethu 1022', 'admin'),
(17, 73425024137373809, 'Touch', ' 12345', '12345', 'saturday@gmail.com', '0766009649', 'Witbank AckerVille 1022', 'user');

-- --------------------------------------------------------

--
-- Table structure for table `wspot`
--

CREATE TABLE `wspot` (
  `sp_Id` int(11) NOT NULL,
  `sp_Name` varchar(100) NOT NULL,
  `sp_Adress` varchar(250) NOT NULL,
  `sp_Contacts` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `wspot`
--

INSERT INTO `wspot` (`sp_Id`, `sp_Name`, `sp_Adress`, `sp_Contacts`) VALUES
(1, 'Emalahleni Ackerville', 'Emalahleni 1052 Ackerville', '0823031018'),
(2, 'Emalahleni DelJudor', 'Witbank 1022 Deljudor12', '0724723405'),
(3, 'Emalahleni Klarinet', 'Witbank 1022 Klarinet15', '0724723405'),
(5, 'Emalahleni LynVille', 'Witbank LynVille 1022', '0746557656');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`bk_id`),
  ADD KEY `serv_fk` (`serv_id`),
  ADD KEY `user_fk` (`user_id`),
  ADD KEY `sp_fk` (`sp_Id`) USING BTREE;

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`emp_id`);

--
-- Indexes for table `services_cart`
--
ALTER TABLE `services_cart`
  ADD PRIMARY KEY (`serv_id`),
  ADD KEY `serv_id` (`serv_id`),
  ADD KEY `serv&sp_fk` (`sp_Id`) USING BTREE;

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `fullname` (`fullname`),
  ADD KEY `email` (`email`);

--
-- Indexes for table `wspot`
--
ALTER TABLE `wspot`
  ADD PRIMARY KEY (`sp_Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `bk_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `emp_id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `services_cart`
--
ALTER TABLE `services_cart`
  MODIFY `serv_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `wspot`
--
ALTER TABLE `wspot`
  MODIFY `sp_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `booking`
--
ALTER TABLE `booking`
  ADD CONSTRAINT `booking_ibfk_1` FOREIGN KEY (`sp_Id`) REFERENCES `wspot` (`sp_Id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `serv_fk` FOREIGN KEY (`serv_id`) REFERENCES `services_cart` (`serv_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `user_fk` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `services_cart`
--
ALTER TABLE `services_cart`
  ADD CONSTRAINT `services_cart_ibfk_1` FOREIGN KEY (`sp_Id`) REFERENCES `wspot` (`sp_Id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
