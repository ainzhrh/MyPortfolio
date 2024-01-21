-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 23, 2021 at 05:27 PM
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
-- Database: `cl`
--

-- --------------------------------------------------------

--
-- Table structure for table `order_details`
--

CREATE TABLE `order_details` (
  `OrderID` int(11) NOT NULL,
  `ProductID` int(11) NOT NULL,
  `OrderedTime` datetime NOT NULL DEFAULT current_timestamp(),
  `Qty` int(11) NOT NULL,
  `status` text NOT NULL DEFAULT 'ORDER PENDING',
  `price` float(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `order_details`
--

INSERT INTO `order_details` (`OrderID`, `ProductID`, `OrderedTime`, `Qty`, `status`, `price`) VALUES
(2, 6, '2021-06-23 23:25:23', 1, 'ORDER PENDING', 10.00),
(2, 6, '2021-06-23 23:25:23', 1, 'ORDER PENDING', 10.00),
(2, 7, '2021-06-23 23:25:23', 1, 'ORDER PENDING', 9.50),
(2, 7, '2021-06-23 23:25:23', 1, 'ORDER PENDING', 9.50),
(2, 8, '2021-06-23 23:25:23', 2, 'ORDER PENDING', 10.00),
(2, 8, '2021-06-23 23:25:23', 2, 'ORDER PENDING', 10.00);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `order_details`
--
ALTER TABLE `order_details`
  ADD KEY `OrderID` (`OrderID`,`ProductID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
