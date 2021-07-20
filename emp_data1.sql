-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 20, 2021 at 11:29 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 7.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ems`
--

-- --------------------------------------------------------

--
-- Table structure for table `emp_data1`
--

CREATE TABLE `emp_data1` (
  `id` int(10) NOT NULL,
  `f_name` varchar(40) NOT NULL,
  `l_name` varchar(40) NOT NULL,
  `emp_mobile` int(10) NOT NULL,
  `emp_salary` double NOT NULL,
  `emp_email` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `emp_data1`
--

INSERT INTO `emp_data1` (`id`, `f_name`, `l_name`, `emp_mobile`, `emp_salary`, `emp_email`) VALUES
(1, 'Karumoju ', 'Roshni', 2147483647, 48392.98, 'chinnamaninrs@gmail.com'),
(2, 'Arasavilli', 'Pragati', 2147483647, 27384.78, 'pragati123@gmail.com'),
(3, 'Sowmya', 'Nayak', 2147483647, 75684.87, 'sowmyanayak123@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `emp_data1`
--
ALTER TABLE `emp_data1`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `emp_data1`
--
ALTER TABLE `emp_data1`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
