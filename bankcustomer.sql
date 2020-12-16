-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 16, 2020 at 08:40 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bankcustomer`
--

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` int(2) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Balance` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `Name`, `Email`, `Balance`) VALUES
(1, 'Ethan Hunt', 'missionimpossible7@gmail.com', 8516),
(2, 'John Wick', 'johnwick4@gmail.com', 1),
(3, 'Harry Potter', 'Harrypotter8@gmail.com', 10449),
(4, 'Aragorn II T.', 'lordoftherings3@gmail.com', 3020),
(5, 'Jon Snow', 'lordoftherings3@gmail.com', 60021),
(6, 'Chandler Bing', 'chandlerbing10@gmail.com', 70011),
(7, 'Joey Tribbiani', 'joeytribbiani11@gmail.com', 87954),
(8, 'Ross Geller', 'rossgeller12@gmail.com', 90001),
(9, 'Monica Geller', 'monicageller13@gmail.com', 100000),
(10, 'Rachel Green', 'rachelgreen14@gmail.com', 20000),
(11, 'Phoebe Buffay', 'phoebebuffay14@gmail.com', 30005),
(12, 'Bruce Wayne', 'thebatman@gmail.com', 500000000);

-- --------------------------------------------------------

--
-- Table structure for table `transaction`
--

CREATE TABLE `transaction` (
  `No` int(10) NOT NULL,
  `Sender` varchar(55) NOT NULL,
  `Receiver` varchar(55) NOT NULL,
  `Balance` int(255) NOT NULL,
  `Date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transaction`
--

INSERT INTO `transaction` (`No`, `Sender`, `Receiver`, `Balance`, `Date`) VALUES
(0, 'Ethan Hunt', 'Harry Potter', 22, '2020-12-15 00:00:00'),
(0, 'Ethan Hunt', 'Aragorn II T.', 1000, '2020-12-15 00:00:00'),
(0, 'John Wick', 'Harry Potter', 18000, '2020-12-15 00:00:00'),
(0, 'John Wick', 'Aragorn II T.', 2, '2020-12-15 00:00:00'),
(0, 'John Wick', 'Aragorn II T.', 1998, '2020-12-15 00:00:00'),
(0, 'Harry Potter', 'John Wick', 8000, '2020-12-15 14:19:17'),
(0, 'John Wick', 'Aragorn II T.', 10, '2020-12-15 14:20:35'),
(0, 'John Wick', 'Aragorn II T.', 10, '2020-12-15 14:21:57'),
(0, 'John Wick', 'Ethan Hunt', 11, '0000-00-00 00:00:00'),
(0, 'John Wick', 'Jon Snow', 14, '2020-12-15 14:26:23'),
(0, 'Ethan Hunt', 'Jon Snow', 7, '2020-12-15 14:28:15'),
(0, 'Ethan Hunt', 'Harry Potter', 444, '2020-12-15 14:30:02'),
(0, 'Ethan Hunt', 'Chandler Bing', 11, '2020-12-16 10:51:05'),
(0, 'Ethan Hunt', 'Harry Potter', 4, '2020-12-16 11:00:51'),
(0, 'Ethan Hunt', 'Harry Potter', 1, '2020-12-16 11:25:10'),
(0, 'Ethan Hunt', 'Ross Geller', 1, '2020-12-16 12:13:59'),
(0, 'John Wick', 'Joey Tribbiani', 7954, '2020-12-16 12:26:06'),
(0, 'Ethan Hunt', 'Phoebe Buffay', 5, '2020-12-16 12:46:22');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
