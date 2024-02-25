-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 25, 2024 at 06:02 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `online_voting`
--

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `contact` bigint(10) NOT NULL,
  `password` varchar(10) NOT NULL,
  `address` varchar(100) NOT NULL,
  `image` varchar(255) NOT NULL,
  `role` int(1) NOT NULL,
  `status` int(1) NOT NULL,
  `votes` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `contact`, `password`, `address`, `image`, `role`, `status`, `votes`) VALUES
(2, 'Deepak Singh', 8655148716, 'deepak123', 'Kalamboli, Panvel', 'family.jpg', 2, 1, 3),
(3, 'Shreya Singh', 97345244554, 'deepak123', 'dkdjfkdjf', 'family.jpg', 1, 1, 0),
(4, 'Vikash Bhandari', 8655148716, 'varun123', 'immrdeepaksingh@gmail.com', 'Deepak.jpg', 1, 1, 0),
(5, 'Vikash Bhandari', 8655148716, 'varun123', 'immrdeepaksingh@gmail.com', 'Deepak.jpg', 1, 0, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
