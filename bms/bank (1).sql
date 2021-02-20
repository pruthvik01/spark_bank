-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 20, 2021 at 12:15 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bank`
--

-- --------------------------------------------------------

--
-- Table structure for table `transaction`
--

CREATE TABLE `transaction` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `reciver_id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `customer_id` varchar(35) NOT NULL,
  `account_no` bigint(11) NOT NULL,
  `ammount` float NOT NULL,
  `added_on` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transaction`
--

INSERT INTO `transaction` (`id`, `user_id`, `reciver_id`, `name`, `customer_id`, `account_no`, `ammount`, `added_on`) VALUES
(1, 3, 2, 'moiz', '6353981250@spark', 123456789101, 500, '2021-02-10 23:36:19'),
(2, 3, 2, 'moiz', '6353981250@spark', 123456789101, 670, '2021-02-12 20:09:18'),
(3, 11, 10, 'Sachin', '6578952010@spark', 123456789101, 62000, '2021-02-20 12:26:02'),
(4, 2, 3, 'karnik Shah', '6354987520@spark', 123456789101, 300, '2021-02-20 12:27:57'),
(5, 11, 10, 'Sachin', '6578952010@spark', 123456789101, 500, '2021-02-20 12:39:07'),
(6, 2, 1, 'pruthvik Shah', '8200487331@spark', 123456789101, 500, '2021-02-20 12:40:56'),
(7, 11, 10, 'Sachin', '6578952010@spark', 123456789101, 7500, '2021-02-20 14:56:08'),
(8, 11, 1, 'pruthvik Shah', '8200487331@spark', 123456789101, 4500, '2021-02-20 14:57:47');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `email` varchar(75) NOT NULL,
  `mobile` varchar(15) NOT NULL,
  `customer_id` varchar(30) NOT NULL,
  `upi_pin` int(11) NOT NULL,
  `account_no` bigint(11) NOT NULL,
  `current_balance` float NOT NULL,
  `added_on` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `mobile`, `customer_id`, `upi_pin`, `account_no`, `current_balance`, `added_on`) VALUES
(1, 'pruthvik Shah', 'pruthvikshah01@yahoo.com', '8200487331', '8200487331@spark', 192370, 123456789101, 9957700, '2021-01-02 18:25:02'),
(2, 'moiz', 'moiiz@gmail.com', '6353981250', '6353981250@spark', 112233, 123456789101, 57000, '2021-01-02 18:27:10'),
(3, 'karnik Shah', 'karnik@gmail.com', '6354987520', '6354987520@spark', 636520, 123456789101, 50250, '2021-01-02 18:27:10'),
(4, 'jay patel', 'jay@gmail.com', '8548586500', '8548586500@spark', 999620, 123456789101, 121515000, '2021-01-02 18:44:17'),
(5, 'shrey ', 'Shrey@gmail.com', '9506679890', '9506679890@spark', 521058, 123456789101, 534884000, '2021-01-02 18:44:17'),
(6, 'harsh', 'harsh@yahoo.com', '8785552560', '8785552560@spark', 982560, 123456789101, 6520000, '2021-01-02 18:44:17'),
(7, 'dhyey patel', 'dhyey@gmail.com', '1588821480', '1588821480@spark', 112236, 123456789101, 56050, '2021-01-02 18:56:45'),
(8, 'margish patel', 'margish@gmail.com', '6558741201', '6558741201@spark', 987452, 123456789101, 45200, '2021-01-02 22:57:13'),
(10, 'Sachin', 'sachin@gmail.com', '6578952010', '6578952010@spark', 111111, 123456789101, 79500, '2021-02-20 12:18:12'),
(11, 'Virat', 'virat18@gmail.com', '6532568088', '6532568088@spark', 181818, 69559988990, 575500, '2021-02-20 12:19:53');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `transaction`
--
ALTER TABLE `transaction`
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
-- AUTO_INCREMENT for table `transaction`
--
ALTER TABLE `transaction`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
