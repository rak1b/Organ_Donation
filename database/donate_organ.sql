-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 11, 2021 at 07:37 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `donate_organ`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(6) UNSIGNED NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(100) NOT NULL,
  `message` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `message`) VALUES
(1, 'Rakib', '', 'This is the text from support'),
(2, 'rased', '', 'This is another text from support'),
(3, 'Jahirul Islam', 'jahir@mail.com', 'Here is the message from jahir\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `doctors`
--

CREATE TABLE `doctors` (
  `id` int(6) UNSIGNED NOT NULL,
  `name` varchar(40) NOT NULL,
  `degree` varchar(50) DEFAULT NULL,
  `experienced_in` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `address` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `doctors`
--

INSERT INTO `doctors` (`id`, `name`, `degree`, `experienced_in`, `email`, `phone`, `address`) VALUES
(1, 'Dr. James Cole', 'MBBS', 'Cardiology', 'james@email.com', '0123545454', 'New york'),
(2, 'Dr. cassendra raily', 'MBBS', 'Neurologist', 'raily@email.com', '0123545454', 'California'),
(4, 'Dr Manisha', 'MS, MSurg, CM', 'Surgery', 'Manisha@mail.com', '222222222', 'California'),
(5, 'Dr.Salma', 'MBBS', 'Gynecologists', 'salma@mail.com', '0192322222', 'Dhaka,Bangladesh');

-- --------------------------------------------------------

--
-- Table structure for table `organs`
--

CREATE TABLE `organs` (
  `id` int(6) UNSIGNED NOT NULL,
  `name` varchar(30) NOT NULL,
  `address` varchar(30) NOT NULL,
  `phone` varchar(50) DEFAULT NULL,
  `part` varchar(50) DEFAULT NULL,
  `other_info` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `organs`
--

INSERT INTO `organs` (`id`, `name`, `address`, `phone`, `part`, `other_info`) VALUES
(1, 'Jamal Khan', 'Banani', '015888486', 'Kidney', ' Willingly\r\n'),
(3, 'Shahidul Islam', 'Dhaka,Bangladesh', '01762322222', 'Heart', 'Informations'),
(4, 'Rasedul Islam', 'Dhaka', '01762322222', 'Heart', 'Information'),
(5, 'Jahid Rahman', 'Dhaka,Bangladesh', '0175555565', 'Eye', 'Information About Donation');

-- --------------------------------------------------------

--
-- Table structure for table `requested`
--

CREATE TABLE `requested` (
  `id` int(6) UNSIGNED NOT NULL,
  `name` varchar(30) NOT NULL,
  `address` varchar(30) NOT NULL,
  `phone` varchar(50) DEFAULT NULL,
  `part` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `requested`
--

INSERT INTO `requested` (`id`, `name`, `address`, `phone`, `part`) VALUES
(2, 'Tanbir alam', 'Banani,Dhaka', '0156665656', 'Kidney'),
(3, 'Jahirul Islam', 'Dhanmondi,Dhaka,Bangladesh', '222222222', 'Heart');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) NOT NULL,
  `fname` varchar(20) NOT NULL,
  `lname` varchar(20) NOT NULL,
  `username` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` int(11) NOT NULL,
  `address` varchar(100) NOT NULL,
  `password` varchar(50) NOT NULL,
  `admin` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fname`, `lname`, `username`, `email`, `phone`, `address`, `password`, `admin`) VALUES
(8, 'Md Rakibul', 'Islam', 'rak1b', 'rakib@gmail.com', 198855577, 'Dhaka,Bangladesh', 'userpass', 0),
(9, 'Admin', 'one', 'admin1', 'admin@admin.com', 1762322222, 'New york', 'admin', 1),
(10, 'Rasedul', 'Islam', 'rased', 'rased@gmail.com', 1762342222, 'Dhaka,Bangladesh', 'rasedpass', 0),
(11, 'Prapty ', 'Chowdhury', 'prapty', 'prapty@mail.com', 1725565656, 'Dhaka,Bangladesh', 'praptypass', 0),
(12, 'Sharnali ', 'paul', 'sharnali', 'sharnali@mail.com', 198555555, 'Dhaka,Bangladesh', 'sharnalipass', 0),
(13, 'Fajle ', 'Rabbi', 'Rabbi', 'Rabbi@mail.com', 14855555, 'Dhaka,Bangladesh', 'rabbipass', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `doctors`
--
ALTER TABLE `doctors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `organs`
--
ALTER TABLE `organs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `requested`
--
ALTER TABLE `requested`
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
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `doctors`
--
ALTER TABLE `doctors`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `organs`
--
ALTER TABLE `organs`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `requested`
--
ALTER TABLE `requested`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
