-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 20, 2021 at 08:07 PM
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
-- Database: `coffeeloca`
--

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `OrderID` int(11) NOT NULL,
  `Time` datetime NOT NULL DEFAULT current_timestamp(),
  `OStatus` varchar(32) NOT NULL DEFAULT 'ORDER PENDING',
  `ProductID` int(11) NOT NULL,
  `Qty` int(11) NOT NULL,
  `price` float(10,2) NOT NULL,
  `TotalPrice` float(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`OrderID`, `Time`, `OStatus`, `ProductID`, `Qty`, `price`, `TotalPrice`) VALUES
(28, '2021-06-16 01:47:14', '', 6, 1, 12.40, 0.00),
(29, '2021-06-16 01:51:17', '', 6, 1, 12.40, 0.00),
(30, '2021-06-16 01:55:34', '', 6, 1, 12.40, 0.00),
(31, '2021-06-16 02:05:42', '', 6, 1, 12.40, 0.00),
(32, '2021-06-16 02:07:00', '', 6, 1, 12.40, 0.00),
(33, '2021-06-16 02:07:14', '', 6, 1, 12.40, 0.00),
(34, '2021-06-16 02:09:04', '', 6, 1, 12.40, 0.00),
(35, '2021-06-16 02:10:53', '', 6, 1, 12.40, 0.00),
(36, '2021-06-16 02:13:32', '', 6, 1, 12.40, 0.00),
(37, '2021-06-16 02:16:01', '', 6, 1, 12.40, 0.00),
(38, '2021-06-16 02:16:24', '', 6, 1, 12.40, 0.00),
(39, '2021-06-17 00:12:04', '', 6, 1, 12.40, 0.00),
(40, '2021-06-17 00:16:37', '', 6, 1, 12.40, 0.00),
(41, '2021-06-17 00:18:37', '', 13, 1, 23.10, 0.00),
(42, '2021-06-17 00:47:32', 'ORDER PENDING', 7, 1, 9.50, 0.00),
(43, '2021-06-17 13:39:01', 'DELIVERED', 6, 1, 12.40, 0.00),
(44, '2021-06-17 13:57:08', 'DELIVERED', 8, 1, 8.00, 0.00),
(45, '2021-06-18 23:46:32', 'ORDER PENDING', 12, 2, 23.10, 0.00),
(46, '2021-06-20 18:06:48', 'ORDER PENDING', 6, 1, 10.00, 0.00),
(47, '2021-06-20 18:09:04', 'ORDER PENDING', 12, 1, 23.10, 0.00),
(48, '2021-06-20 18:13:30', 'ORDER PENDING', 6, 1, 10.00, 0.00),
(49, '2021-06-20 18:17:55', 'ORDER PENDING', 6, 1, 10.00, 0.00),
(50, '2021-06-20 18:20:05', 'ORDER PENDING', 12, 1, 23.10, 0.00),
(51, '2021-06-20 19:48:11', 'ORDER PENDING', 12, 1, 23.10, 0.00),
(52, '2021-06-20 19:50:24', 'ORDER PENDING', 12, 1, 23.10, 0.00),
(53, '2021-06-20 23:37:10', 'ORDER PENDING', 12, 1, 23.10, 0.00),
(54, '2021-06-20 23:41:45', 'ORDER PENDING', 12, 1, 23.10, 0.00),
(55, '2021-06-21 00:06:08', 'ORDER PENDING', 12, 1, 23.10, 0.00),
(56, '2021-06-21 00:06:33', 'ORDER PENDING', 12, 1, 23.10, 0.00),
(57, '2021-06-21 00:08:50', 'ORDER PENDING', 12, 1, 23.10, 0.00),
(58, '2021-06-21 00:13:08', 'ORDER PENDING', 7, 1, 9.50, 0.00),
(59, '2021-06-21 00:16:17', 'ORDER PENDING', 7, 1, 9.50, 0.00),
(60, '2021-06-21 00:16:49', 'ORDER PENDING', 7, 1, 9.50, 0.00),
(61, '2021-06-21 00:19:11', 'ORDER PENDING', 7, 1, 9.50, 0.00),
(62, '2021-06-21 00:50:01', 'ORDER PENDING', 7, 1, 9.50, 0.00),
(63, '2021-06-21 01:48:01', 'ORDER PENDING', 6, 1, 10.00, 0.00),
(64, '2021-06-21 02:02:17', 'ORDER PENDING', 13, 1, 23.10, 0.00);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD UNIQUE KEY `OrderID` (`OrderID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
