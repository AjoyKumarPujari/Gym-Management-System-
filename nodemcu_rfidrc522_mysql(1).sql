-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 21, 2021 at 10:37 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 7.3.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `nodemcu_rfidrc522_mysql`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(100) NOT NULL,
  `admin_name` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `admin_name`, `Email`, `Password`) VALUES
(1, 'admin', 'admin@gmail.com', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `devices`
--

CREATE TABLE `devices` (
  `id` int(11) NOT NULL,
  `devicename` varchar(20) NOT NULL,
  `center` varchar(20) NOT NULL,
  `department` varchar(20) NOT NULL,
  `quantity` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `devices`
--

INSERT INTO `devices` (`id`, `devicename`, `center`, `department`, `quantity`) VALUES
(1, 'Dumbles', 'Jorhat', 'Gym Course', '25'),
(2, 'Yoga mate', 'Jorhat', 'Yoga Course', '20');

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE `members` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `plan` varchar(20) NOT NULL,
  `phonenumber` varchar(20) NOT NULL,
  `type` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `address` varchar(20) NOT NULL,
  `dateofstart` date NOT NULL,
  `dateofend` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`id`, `name`, `plan`, `phonenumber`, `type`, `email`, `gender`, `address`, `dateofstart`, `dateofend`) VALUES
(36, 'Alexa', 'Monthly', '8474875105', 'Yoga', 'ajoykumarpujari@gmai', 'Female', 'Sydney', '2021-07-01', '2021-08-01'),
(39, 'John', 'Yearly', '1234567890', 'Gym', 'John@gmai', 'Male', 'UK', '2021-07-01', '2022-07-01'),
(40, 'Vijay ', 'Quarterly', '7002905105', 'Yoga', 'vijaykumar@gmai', 'Male', 'Guwahati', '2021-05-01', '2021-08-01'),
(42, 'Ajoy ', 'Weekly', '8474875105', 'Gym', 'ajoykumar@gmai', 'Male', 'Jorhat ', '2021-07-01', '2021-07-08'),
(43, 'saptarag', 'Yearly', '1111111111', 'Gym', 'sapta@gmail.com', 'Male', 'jorhat', '2021-08-01', '2022-08-01'),
(44, 'Arjun', 'Monthly', '8998899889', 'Yoga', 'arjun@GMAIL.COM', 'Male', 'ASSAM', '2021-07-21', '2021-08-21');

-- --------------------------------------------------------

--
-- Table structure for table `plans`
--

CREATE TABLE `plans` (
  `id` int(11) NOT NULL,
  `planname` varchar(100) NOT NULL,
  `duration` varchar(100) NOT NULL,
  `baseprice` varchar(20) NOT NULL,
  `registrationfee` varchar(100) NOT NULL,
  `discount` varchar(100) NOT NULL,
  `price` varchar(100) NOT NULL,
  `colour` varchar(100) DEFAULT NULL,
  `description` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `plans`
--

INSERT INTO `plans` (`id`, `planname`, `duration`, `baseprice`, `registrationfee`, `discount`, `price`, `colour`, `description`) VALUES
(1, 'Yearly', '12 Months', '8000', '1000', '20', '6400', 'green', 'Yearly Plan'),
(8, 'Quarterly', '3 Months', '2000', '500', '10', '1800', NULL, 'Quarterly Plan'),
(10, 'Monthly', '6 Months', '2000', '500', '5', '1900', NULL, 'Monthly Plan'),
(11, 'Weekly', '1 Week', '500', '100', '0', '500', NULL, 'Weekly Plan');

-- --------------------------------------------------------

--
-- Table structure for table `sales`
--

CREATE TABLE `sales` (
  `id` int(50) NOT NULL,
  `item` varchar(20) NOT NULL,
  `quantity` varchar(20) NOT NULL,
  `unitprice` varchar(20) NOT NULL,
  `totalamount` varchar(20) NOT NULL,
  `customername` varchar(20) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `saledate` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sales`
--

INSERT INTO `sales` (`id`, `item`, `quantity`, `unitprice`, `totalamount`, `customername`, `phone`, `saledate`) VALUES
(21, 'protine Bar', '1', '25', '25', 'aaaa', '1233211234', '2021-06-01'),
(22, 'Multi vitamins 500 g', '2', '300', '600', 'a', '1221123456', '2021-05-01'),
(42, 'Multi vitamins 500 g', '5', '300', '1500', 'Ajoy', '8474875105', '2021-04-01'),
(52, 'Multi vitamins 500 g', '4', '300', '1200', 'Bijay', '1234567890', '2021-04-02'),
(53, 'Multi vitamins 500 g', '2', '300', '600', 'qqq', '1221123456', '2021-02-11'),
(54, 'way Protein 1 Kg', '3', '300', '900', 'yyyy', '1233211234', '2022-07-21');

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `id` int(6) NOT NULL,
  `name` varchar(100) NOT NULL,
  `stafftype` varchar(100) NOT NULL,
  `phonenumber` varchar(100) NOT NULL,
  `altphonenumber` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`id`, `name`, `stafftype`, `phonenumber`, `altphonenumber`, `email`, `gender`, `address`) VALUES
(1, 'Arjun', 'Accountant', '8474875105', '7474875105', 'ajoykumarpujari@gmail.com', 'Male', 'Assam'),
(3, 'John', 'Trainer/Dietitian', '1234567890', '0009998877', 'John@gmail.com', 'Male', 'UK'),
(17, 'Ajoy ', 'Employee', '7002905105', '7002905105', 'Ajoy@gmail.com', 'Male', 'Jorhat'),
(19, 'Joy', 'Receptionist', '1234567890', '1234567890', 'a', 'Male', 'assam');

-- --------------------------------------------------------

--
-- Table structure for table `stock`
--

CREATE TABLE `stock` (
  `id` int(20) NOT NULL,
  `Itemname` varchar(20) NOT NULL,
  `itemtype` varchar(20) NOT NULL,
  `quantity` varchar(20) NOT NULL,
  `buyingprice` varchar(20) NOT NULL,
  `sellingprice` varchar(20) NOT NULL,
  `description` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stock`
--

INSERT INTO `stock` (`id`, `Itemname`, `itemtype`, `quantity`, `buyingprice`, `sellingprice`, `description`) VALUES
(1, 'way Protein 1 Kg', 'Proteins ', '15', '200', '300', 'Suppliment'),
(2, 'protine Bar', 'Suppliments', '17', '20', '25', 'protine bars'),
(3, 'protinr Sake 500ml', 'Protins', '222', '100', '120', 'sake'),
(4, 'Multi vitamins 500 g', 'Suppliments', '4', '200', '300', 'Multi vitamins 500 g');

-- --------------------------------------------------------

--
-- Table structure for table `table_nodemcu_rfidrc522_mysql`
--

CREATE TABLE `table_nodemcu_rfidrc522_mysql` (
  `name` varchar(100) NOT NULL,
  `id` varchar(100) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `mobile` varchar(100) NOT NULL,
  `time in` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `table_nodemcu_rfidrc522_mysql`
--

INSERT INTO `table_nodemcu_rfidrc522_mysql` (`name`, `id`, `gender`, `email`, `mobile`, `time in`) VALUES
('john', '22222', 'Male', 'john@email.com', '12332000', '2021-07-13 06:54:48'),
('Ajoy Kumarpujari', '45193730', 'Female', 'ajoykumarpujari@gmail.com', '08474875105', '2021-07-12 19:18:41');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `devices`
--
ALTER TABLE `devices`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `plans`
--
ALTER TABLE `plans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sales`
--
ALTER TABLE `sales`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stock`
--
ALTER TABLE `stock`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `table_nodemcu_rfidrc522_mysql`
--
ALTER TABLE `table_nodemcu_rfidrc522_mysql`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `devices`
--
ALTER TABLE `devices`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `members`
--
ALTER TABLE `members`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `plans`
--
ALTER TABLE `plans`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `sales`
--
ALTER TABLE `sales`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `stock`
--
ALTER TABLE `stock`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
