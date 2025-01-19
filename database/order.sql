-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 19, 2025 at 01:05 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `crunchy_sweets`
--

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `number` varchar(15) NOT NULL,
  `email` varchar(100) NOT NULL,
  `method` varchar(50) NOT NULL,
  `flat` varchar(50) NOT NULL,
  `street` varchar(100) NOT NULL,
  `city` varchar(50) NOT NULL,
  `country` varchar(50) NOT NULL,
  `total_products` int(11) NOT NULL,
  `total_price` decimal(10,2) NOT NULL,
  `order_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `order`
--

INSERT INTO `order` (`id`, `name`, `number`, `email`, `method`, `flat`, `street`, `city`, `country`, `total_products`, `total_price`, `order_date`) VALUES
(64, 'banu dewa', '0775817094', 'banu123@gmail.com', 'cash on delivery', '163/1', '1,janatha lane,maharagama', 'colombo', 'Sri Lanka', 1, 5400.00, '2025-01-18 17:55:59'),
(66, 'senesh sandaruwan', '0775817094', 'sanu@gmail.com', 'cash on delivery', '163/1', 'dewala rd, maharagama', 'colombo', 'Sri Lanka', 1, 5400.00, '2025-01-19 04:29:25'),
(67, 'senesh sandaruwan', '0775817094', 'sanu@gmail.com', 'cash on delivery', '163/1', 'dewala rd, maharagama', 'colombo', 'Sri Lanka', 3, 1200.00, '2025-01-19 05:09:17'),
(68, 'senesh sandaruwan', '0775817094', 'sanu@gmail.com', 'cash on delivery', '163/1', 'dewala rd, maharagama', 'colombo', 'Sri Lanka', 2, 10200.00, '2025-01-19 06:29:49'),
(69, 'senesh sandaruwan', '0775817094', 'sanu@gmail.com', 'cash on delivery', '163/1', 'dewala rd, maharagama', 'colombo', 'Sri Lanka', 2, 4900.00, '2025-01-19 07:02:31'),
(70, 'Malith Sandaruwan', '0771234564', 'mali123@gmail.com', 'credit card', '5', 'Maharagama', 'colombo', 'Sri Lanka', 2, 4600.00, '2025-01-19 09:43:51');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `order`
--
ALTER TABLE `order`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
