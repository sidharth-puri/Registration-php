-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 11, 2020 at 08:20 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `Id` int(11) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `Address` varchar(255) NOT NULL,
  `Pincode` int(11) NOT NULL,
  `Phone` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`Id`, `Name`, `Email`, `Password`, `Address`, `Pincode`, `Phone`) VALUES
(1, 'sidharth ', 'sidharth@gmail.com', '12345678', 'sector-10', 134109, 1234567890),
(3, 'nishant', 'nishant@gmail.com', '12345678', 'sector-10', 134109, 1234567890),
(4, 'rahul', 'rahul@gmail.com', '12345678', 'sector-11 panchkula', 134109, 1234567890),
(5, 'devansh', 'divansh@gmail.com', '12345678', 'chandigarh', 12345, 1234567890),
(6, 'ravi', 'ravi@gmail.com', '12345678', 'chd', 12345, 1234567890),
(7, 'rohan', 'rahan@gmail.com', '12345678', 'delhi', 12345, 1234567890),
(8, 'rohan', 'rahan@gmail.com', '12345678', 'delhi', 12345, 1234567890),
(9, 'rohan', 'rahan@gmail.com', '12345678', 'delhi', 12345, 1234567890),
(10, 'dev', 'dev@gmail.com', '123456710', 'sector-10', 134109, 1234567890),
(11, 'aj', 'aj@gmail.com', '12345678', 'sector-10', 134109, 1234567890),
(12, 'himanshu', 'Himanshu@gmail.com', 'Himanshu22', 'sector-10', 134109, 1234567890),
(15, 'dinesh puri', 'dinesh@gmail.com', 'dinesh1234', 'chandigarh', 134109, 987654321);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
