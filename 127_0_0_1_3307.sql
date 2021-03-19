-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3307
-- Generation Time: Dec 17, 2020 at 10:06 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `osp`
--
CREATE DATABASE IF NOT EXISTS `osp` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `osp`;

-- --------------------------------------------------------

--
-- Table structure for table `assets`
--

CREATE TABLE `assets` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `date_purchase` date NOT NULL,
  `prod_available` int(20) NOT NULL,
  `prod_total` int(20) NOT NULL,
  `cost_price` int(20) NOT NULL,
  `selling_price` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `assets`
--

INSERT INTO `assets` (`id`, `name`, `date_purchase`, `prod_available`, `prod_total`, `cost_price`, `selling_price`) VALUES
(2, 'keyboard1', '2020-09-10', 21, 48, 30, 55),
(3, 'mouse1', '2020-09-09', 23, 78, 25, 55),
(5, 'mouse1', '2020-09-17', 23, 78, 35, 55),
(6, 'mouse1', '2020-09-17', 23, 78, 35, 55),
(7, 'mouse', '2020-09-05', 23, 78, 25, 14);

-- --------------------------------------------------------

--
-- Table structure for table `assign_tech`
--

CREATE TABLE `assign_tech` (
  `no` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `info` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `name` varchar(50) NOT NULL,
  `address1` varchar(255) NOT NULL,
  `address2` varchar(255) NOT NULL,
  `city` varchar(50) NOT NULL,
  `state` varchar(255) NOT NULL,
  `zip` varchar(14) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mobile` varchar(50) NOT NULL,
  `assigntech` varchar(50) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `assign_tech`
--

INSERT INTO `assign_tech` (`no`, `id`, `info`, `description`, `name`, `address1`, `address2`, `city`, `state`, `zip`, `email`, `mobile`, `assigntech`, `date`) VALUES
(33, 30, 'keyboard', 'it is not working properly', 'Pankaj', 'chaubey colony', 'family store', 'banaras', 'madhya pradesh', '471001', 'saurabh789@gmail.com', '8959325034', 'md jiya', '2020-09-17'),
(34, 35, 'keyboard', 'it is not working properly', 'vedant', 'rambhag colony', 'railway road', 'kanpur', 'up', '248011', 'vedant789@gmail.com', '8959325039', 'saurabh', '2020-10-18'),
(35, 36, 'keyboard', 'it is not working properly', 'Kapil', 'rambhag colony', 'railway road', 'kanpur', 'up', '248011', 'vedant789@gmail.com', '8959325039', 'saurabh', '2020-11-20');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(13) NOT NULL,
  `name` varchar(50) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `email` varchar(50) NOT NULL,
  `message` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `subject`, `email`, `message`) VALUES
(2, 'Pankaj', 'Shirt size is so small', 'saurabh789@gmail.com', 'nothing'),
(3, 'Pankaj', 'Shirt size is so small', 'vedant789@gmail.com', 'p'),
(4, 'Pankaj', 'Shirt size is so small', 'saurabh709@gmail.com', 'jio'),
(5, 'vedant', 'Shirt size is so small', 'vedant78@gmail.com', 'something is there'),
(6, 'kapil Gupta', 'keyboard is not working', 'kapil@gmail.com', 'is this service is available');

-- --------------------------------------------------------

--
-- Table structure for table `customer_bill`
--

CREATE TABLE `customer_bill` (
  `id` int(13) NOT NULL,
  `customer_name` varchar(100) NOT NULL,
  `customer_address` varchar(255) NOT NULL,
  `prod_name` varchar(50) NOT NULL,
  `prod_available` int(12) NOT NULL,
  `prod_quantity` int(13) NOT NULL,
  `each_price` int(13) NOT NULL,
  `total_price` int(13) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer_bill`
--

INSERT INTO `customer_bill` (`id`, `customer_name`, `customer_address`, `prod_name`, `prod_available`, `prod_quantity`, `each_price`, `total_price`, `date`) VALUES
(2, 'Pankaj', 'chaubey colony', 'keyboard1', 21, 2, 55, 110, '2020-10-01'),
(4, 'rahul', 'choubey colony', 'mouse', 20, 2, 50, 100, '2020-10-02');

-- --------------------------------------------------------

--
-- Table structure for table `reset`
--

CREATE TABLE `reset` (
  `id` int(11) NOT NULL,
  `code` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `reset`
--

INSERT INTO `reset` (`id`, `code`, `email`) VALUES
(5, '15f5bc0a427c7e', 'ankit.gupta0646@gmail.com'),
(6, '15f7dca02adeea', ''),
(7, '15f7dca282a405', ''),
(8, '15f7dca3bb5bd6', ''),
(9, '15f7dca6f9a4e1', ''),
(10, '15f7dcacd8bf48', ''),
(11, '15f7dcae1b93b4', ''),
(12, '15f7dcaeab59b8', ''),
(13, '15f7dcaf043bec', ''),
(14, '15fda467ce1412', ''),
(15, '15fda46bd78fd4', ''),
(16, '15fda46cb7d97f', ''),
(17, '15fda46d95f9c7', ''),
(18, '15fda471f8a5f2', ''),
(19, '15fda487c61c8a', ''),
(20, '15fda48835e0bf', ''),
(21, '15fda489f646f3', ''),
(22, '15fdb184e6fdb9', '');

-- --------------------------------------------------------

--
-- Table structure for table `submit_report`
--

CREATE TABLE `submit_report` (
  `id` int(13) NOT NULL,
  `info` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `name` varchar(50) NOT NULL,
  `address1` varchar(255) NOT NULL,
  `address2` varchar(255) NOT NULL,
  `city` varchar(50) NOT NULL,
  `state` varchar(50) NOT NULL,
  `zip` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mobile` varchar(50) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `submit_report`
--

INSERT INTO `submit_report` (`id`, `info`, `description`, `name`, `address1`, `address2`, `city`, `state`, `zip`, `email`, `mobile`, `date`) VALUES
(30, 'keyboard', 'it is not working properly', 'Pankaj', 'chaubey colony', 'family store', 'banaras', 'madhya pradesh', '471001', 'saurabh789@gmail.com', '8959325034', '2020-08-29'),
(31, 'keyboard', 'it is not working properly', 'Pankaj', 'chaubey colony', 'family store', 'banaras', 'madhya pradesh', '471001', 'saurabh789@gmail.com', '8959325034', '2020-09-25'),
(32, 'keyboard', 'something', 'Pankaj', 'chaubey colony', 'family store', 'banaras', 'madhya pradesh', '471001', 'saurabh789@gmail.com', '8959325034', '2020-09-19'),
(34, 'repair', 'it is not working properly', 'Pankaj', 'chaubey colony', 'family store', 'banaras', 'madhya pradesh', '471001', 'saurabh789@gmail.com', '8959325034', '2020-09-11');

-- --------------------------------------------------------

--
-- Table structure for table `technician`
--

CREATE TABLE `technician` (
  `id` int(13) NOT NULL,
  `name` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `city` varchar(50) NOT NULL,
  `mobile` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `technician`
--

INSERT INTO `technician` (`id`, `name`, `password`, `city`, `mobile`, `email`) VALUES
(2, 'Pankaj Gupta', '1234', 'banaras', '8959325034', 'saurabh789@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `userregistration`
--

CREATE TABLE `userregistration` (
  `id` int(13) NOT NULL,
  `name` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `conpassword` varchar(50) NOT NULL,
  `phone` varchar(13) NOT NULL,
  `email` varchar(50) NOT NULL,
  `userrole` varchar(50) NOT NULL DEFAULT 'subscriber'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `userregistration`
--

INSERT INTO `userregistration` (`id`, `name`, `password`, `conpassword`, `phone`, `email`, `userrole`) VALUES
(1, 'Pankaj 1', '123456', '123456', '8959325039', 'ankit.gupta0646@gmail.com', 'admin'),
(2, 'satya', '1234', '1234', '8959325039', 'saurabh789@gmail.com', 'subscriber'),
(3, 'saurabh ', '1234', '1234', '8959325038', 'saurabh779@gmail.com', 'subscriber'),
(8, 'Pankaj', '1234', '1234', '8959325034', 'saurabh7@gmail.com', 'subscriber'),
(9, 'vedant', '1234', '1234', '8959325039', 'vedant789@gmail.com', 'subscriber'),
(10, 'kapil', '1234', '1234', '9630435702', 'kapil@gmail.com', 'subscriber');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `assets`
--
ALTER TABLE `assets`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `assign_tech`
--
ALTER TABLE `assign_tech`
  ADD PRIMARY KEY (`no`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer_bill`
--
ALTER TABLE `customer_bill`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reset`
--
ALTER TABLE `reset`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `submit_report`
--
ALTER TABLE `submit_report`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `technician`
--
ALTER TABLE `technician`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `userregistration`
--
ALTER TABLE `userregistration`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `assets`
--
ALTER TABLE `assets`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `assign_tech`
--
ALTER TABLE `assign_tech`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(13) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `customer_bill`
--
ALTER TABLE `customer_bill`
  MODIFY `id` int(13) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `reset`
--
ALTER TABLE `reset`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `submit_report`
--
ALTER TABLE `submit_report`
  MODIFY `id` int(13) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `technician`
--
ALTER TABLE `technician`
  MODIFY `id` int(13) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `userregistration`
--
ALTER TABLE `userregistration`
  MODIFY `id` int(13) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
