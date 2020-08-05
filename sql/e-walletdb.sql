-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 05, 2020 at 03:17 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `e-walletdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `ecom_customers`
--

CREATE TABLE `ecom_customers` (
  `id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ecom_customers`
--

INSERT INTO `ecom_customers` (`id`, `email`, `username`, `password`) VALUES
(23, 'radicemmy@gmail.com', 'emmy', '12345'),
(24, 'johnsimon1133@gmail.com', 'john ', '124'),
(25, 'gaiyajock10@gmail.com', 'emmy2', 'emmy2');

-- --------------------------------------------------------

--
-- Table structure for table `ecom_customers_wallets`
--

CREATE TABLE `ecom_customers_wallets` (
  `id` int(11) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `amount` varchar(100) NOT NULL DEFAULT '0',
  `reference` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ecom_customers_wallets`
--

INSERT INTO `ecom_customers_wallets` (`id`, `first_name`, `last_name`, `phone`, `email`, `amount`, `reference`) VALUES
(1, 'Mathew', 'Ewaoche', '08068258134', 'radicemmy@gmail.com', '63000', '975198144'),
(2, 'john', 'simon', '08085623800', 'johnsimon1133@gmail.com', '30900', '102803863'),
(3, 'jock', 'milly', '08085623800', 'gaiyajock10@gmail.com', '60600', '735737364');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ecom_customers`
--
ALTER TABLE `ecom_customers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ecom_customers_wallets`
--
ALTER TABLE `ecom_customers_wallets`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ecom_customers`
--
ALTER TABLE `ecom_customers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `ecom_customers_wallets`
--
ALTER TABLE `ecom_customers_wallets`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
