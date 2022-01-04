-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Jan 04, 2022 at 10:42 AM
-- Server version: 5.7.34
-- PHP Version: 7.4.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vacation`
--

-- --------------------------------------------------------

--
-- Table structure for table `application`
--

CREATE TABLE `application` (
  `id` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `datefrom` date NOT NULL,
  `dateto` date NOT NULL,
  `reason` text NOT NULL,
  `status` varchar(50) NOT NULL,
  `submited` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `application`
--

INSERT INTO `application` (`id`, `userid`, `datefrom`, `dateto`, `reason`, `status`, `submited`) VALUES
(5, 1, '2020-01-01', '2020-01-01', 'fsdfsd', 'pending', '2022-01-03 15:10:33'),
(6, 1, '2020-01-01', '2020-01-01', 'wfsdfsd', 'pending', '2022-01-03 15:11:34'),
(7, 1, '2020-01-01', '2020-01-01', 'dfjgkdlfjglkdfjd            \r\n         ', 'accepted', '2022-01-03 15:13:44'),
(8, 1, '2022-02-02', '2022-02-02', 'iujoijoion            \r\n         ', 'pending', '2022-01-03 15:18:19'),
(9, 1, '2021-12-28', '2021-12-28', 'bkjbkjbbjkbkj            \r\n         ', 'pending', '2022-01-03 15:24:01'),
(10, 1, '2022-01-11', '2022-01-11', '            \r\n         bkjhui', 'pending', '2022-01-03 15:25:30'),
(11, 1, '2022-01-13', '2022-01-13', '            \r\n         bnmbmn', 'pending', '2022-01-03 15:27:07'),
(12, 2, '2022-01-11', '2022-01-11', '            \r\n         vbnvnb', 'pending', '2022-01-03 15:30:03'),
(13, 2, '2022-01-19', '2022-01-19', '            \r\n         hjhjkhjk', 'pending', '2022-01-03 15:30:11'),
(14, 2, '2022-01-05', '2022-01-25', '            \r\n         yuio', 'pending', '2022-01-03 15:30:27'),
(15, 2, '2022-01-18', '2022-01-18', '            \r\n         bnm', 'pending', '2022-01-03 15:43:39'),
(16, 2, '2022-01-13', '2022-01-13', '            \r\n         bjkbjhbj', 'pending', '2022-01-03 15:47:21'),
(17, 2, '2022-01-03', '2022-01-28', '            \r\n         zxcvbnm', 'pending', '2022-01-03 15:48:36'),
(18, 2, '2022-01-20', '2022-01-20', '            \r\n         tyuio', 'pending', '2022-01-03 15:55:39'),
(19, 2, '2022-01-04', '2022-01-04', '            \r\n         cvbn', 'pending', '2022-01-03 15:56:51'),
(20, 2, '2022-01-25', '2022-01-25', '            \r\n         vghvgh', 'pending', '2022-01-03 15:59:27'),
(21, 2, '2022-01-14', '2022-01-14', '            \r\n         cvbn', 'pending', '2022-01-03 16:03:30'),
(22, 2, '2022-01-07', '2022-01-31', '            \r\n         fcvghjbknj', 'pending', '2022-01-03 16:03:43'),
(23, 2, '2022-01-19', '2022-01-19', '            cvbnm\r\n         ', 'pending', '2022-01-03 16:05:36'),
(24, 2, '2022-01-16', '2022-01-16', '            \r\n         ghcjvbknkm`', 'pending', '2022-01-03 16:07:35'),
(25, 2, '2022-01-20', '2022-01-20', '            \r\n         bhbh', 'pending', '2022-01-03 16:19:39'),
(26, 2, '2022-01-22', '2022-01-22', '            \r\n         zxcvbn', 'pending', '2022-01-03 16:22:36'),
(27, 2, '2022-01-18', '2022-01-18', '            xc\r\n         ', 'pending', '2022-01-03 16:24:08'),
(28, 2, '2022-01-10', '2022-01-10', '            \r\n         ghjk', 'pending', '2022-01-03 16:29:33'),
(29, 2, '2022-01-04', '2022-01-04', '            \r\n         gh', 'pending', '2022-01-03 16:32:12'),
(30, 2, '2022-01-10', '2022-01-10', '            \r\n         vghnjkbjk', 'pending', '2022-01-03 17:57:26'),
(31, 2, '2022-01-09', '2022-01-09', '            \r\n         bhjbhbj', 'pending', '2022-01-03 17:58:53'),
(32, 2, '2022-01-10', '2022-01-10', '            \r\n         bhjb', 'pending', '2022-01-03 18:05:17'),
(33, 2, '2022-01-10', '2022-01-10', '            buhbuybyu\r\n         ', 'pending', '2022-01-03 18:06:32'),
(34, 2, '2022-01-09', '2022-01-09', '            \r\n         bhbh', 'pending', '2022-01-03 18:07:59'),
(35, 2, '2022-01-10', '2022-01-10', '            \r\n         bghjbbuybuy', 'pending', '2022-01-03 18:10:21'),
(36, 2, '2022-01-20', '2022-01-20', '            \r\n         dfgdf', 'pending', '2022-01-03 18:15:58'),
(37, 2, '2022-01-10', '2022-01-10', '            \r\n         bhbj`', 'pending', '2022-01-03 18:46:09'),
(38, 2, '2022-01-03', '2022-01-03', '            \r\n         bbhu`', 'pending', '2022-01-03 18:46:57'),
(39, 2, '2022-01-18', '2022-01-18', '            \r\n         g', 'pending', '2022-01-03 18:48:07'),
(40, 2, '2022-01-04', '2022-01-04', '            \r\n         hu', 'pending', '2022-01-03 19:04:39'),
(41, 2, '2022-01-04', '2022-01-04', '            \r\n         hu', 'pending', '2022-01-03 19:06:16'),
(42, 2, '2022-01-18', '2022-01-18', '            \r\n         g', 'pending', '2022-01-03 19:06:54'),
(43, 2, '2022-01-03', '2022-01-03', '            \r\n         bbhu`', 'pending', '2022-01-03 19:06:59'),
(44, 2, '2022-01-05', '2022-01-05', '            \r\n         bhjbj', 'pending', '2022-01-03 19:07:07'),
(45, 2, '2022-01-05', '2022-01-05', '            \r\n         bhjbj', 'pending', '2022-01-03 19:07:56'),
(46, 10, '2022-01-05', '2022-01-05', '            \r\n         hgbhj', 'pending', '2022-01-03 20:05:14'),
(47, 10, '2022-01-25', '2022-01-25', '            ghjbhj\r\n         ', 'pending', '2022-01-03 20:06:29'),
(48, 10, '2022-01-20', '2022-01-20', '            \r\n         bjkbjh', 'pending', '2022-01-03 20:16:54'),
(49, 10, '2022-01-05', '2022-02-01', '            \r\n         xcvbn', 'accepted', '2022-01-03 20:21:15'),
(50, 10, '2022-01-20', '2022-01-20', '            \r\n         cvbn', 'accepted', '2022-01-04 12:30:32'),
(51, 10, '2022-01-03', '2022-01-31', '            \r\n         vbnm', 'denied', '2022-01-04 12:30:43');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `email` varchar(200) NOT NULL,
  `type` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `created_at`, `firstname`, `lastname`, `email`, `type`) VALUES
(9, 'qwer', '$2y$10$XDv0OZKtKsmFQ8u20ovd7uLpeQ1Btdij4maJUmpNZ7mzNpO4Eu0wa', '2022-01-03 19:38:17', 'zxc', 'ghjghgdf', 'hgjgfhj@ghjgjh.com', 'Admin'),
(10, 'iop', '$2y$10$VxNw9a7ImsIztewHWWhlxe49hfkiclabQ7sYfaSBPlR5tOr.zQpCC', '2022-01-03 19:45:23', 'Iop', 'Poi', 'Iop@Poi.com', 'User'),
(11, 'harry', '$2y$10$DColpzDAgLcPAox5r3TQF.LW8hvjTBOx0wam7I1RKawvwuNIfeQD2', '2022-01-03 21:01:12', 'Harry', 'Nafpaktitis', 'harry@skamnos.com', 'Admin'),
(13, 'User', '$2y$10$LF1NWomQGTliPR2pSOSGLOB5xNoixlLI8vIK/RlIUnAAzP.sS1nVq', '2022-01-03 21:30:47', 'Us', 'Ser', 'us@ser.com', 'User'),
(14, 'Admin', '$2y$10$QEpupqJL68D588ukJVmQ0e2vdwrOQneyt2jL5TDoxXjG7/4U6wLMa', '2022-01-03 21:31:43', 'Ad', 'Min', 'ad@min.com', 'Admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `application`
--
ALTER TABLE `application`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `application`
--
ALTER TABLE `application`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
