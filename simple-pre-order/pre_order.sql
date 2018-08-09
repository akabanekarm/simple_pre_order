-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 09, 2018 at 09:06 PM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 5.6.36

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pre_order`
--

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `order_id` int(11) NOT NULL,
  `order_by` varchar(255) NOT NULL,
  `deliver_date` varchar(255) NOT NULL,
  `bread` varchar(255) NOT NULL,
  `sauce` varchar(255) NOT NULL,
  `sandwich_type` varchar(255) NOT NULL,
  `cheese` varchar(255) NOT NULL,
  `vegies` varchar(255) NOT NULL,
  `order_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `order`
--

INSERT INTO `order` (`order_id`, `order_by`, `deliver_date`, `bread`, `sauce`, `sandwich_type`, `cheese`, `vegies`, `order_date`) VALUES
(1, 'Person1', '2018-08-19', 'Italian Herb', 'Honey Mustard', 'Italian (Salami , Ham & Pepperoni)', 'Peperjack', 'Pepers - Banana', '2018-08-08 16:00:00'),
(2, 'Person2', '2018-08-20', 'Jalapeno Parmesan', 'Mayo', 'Oven Roasted Turkey', 'Swiss', 'Cucumber', '2018-08-08 16:00:00'),
(3, 'Person2', '2018-08-20', 'Jalapeno Parmesan', 'Mayo', 'Oven Roasted Turkey', 'Swiss', 'Cucumber', '2018-08-08 16:00:00'),
(4, 'Person2', '2018-08-20', 'Jalapeno Parmesan', 'Mayo', 'Oven Roasted Turkey', 'Swiss', 'Cucumber', '2018-08-08 16:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`order_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `order`
--
ALTER TABLE `order`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
