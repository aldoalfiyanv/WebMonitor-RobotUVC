-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 24, 2021 at 07:46 PM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 5.6.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `database`
--

-- --------------------------------------------------------

--
-- Table structure for table `datasensor`
--

CREATE TABLE `datasensor` (
  `id` int(20) NOT NULL,
  `data` varchar(30) NOT NULL,
  `waktu` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `datasensor`
--

INSERT INTO `datasensor` (`id`, `data`, `waktu`) VALUES
(2, '14', '2021-05-24 09:01:03'),
(3, '14', '2021-05-24 09:01:15'),
(4, '1', '2021-05-24 09:01:47'),
(5, '1', '2021-05-24 09:02:03'),
(6, '1', '2021-05-24 09:02:16'),
(7, '1', '2021-05-24 09:02:29'),
(8, '1', '2021-05-24 09:02:43'),
(9, '0', '2021-05-24 09:02:56'),
(10, '1', '2021-05-24 09:03:09'),
(11, '1', '2021-05-24 09:03:22'),
(12, '1', '2021-05-24 09:03:39'),
(13, '1', '2021-05-24 09:03:56'),
(14, '1', '2021-05-24 09:04:09'),
(15, '1', '2021-05-24 09:04:22'),
(16, '1', '2021-05-24 09:04:35'),
(17, '1', '2021-05-24 09:04:48'),
(18, '1', '2021-05-24 09:05:02'),
(19, '1', '2021-05-24 09:05:15'),
(20, '1', '2021-05-24 09:05:28');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `trn_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `trn_date`) VALUES
(1, 'admin', 'admin@gmail.com', '21232f297a57a5a743894a0e4a801fc3', '2021-04-05 17:54:10'),
(2, 'aldoalfiyanv', 'aldoalfiyan72@gmail.com', '9d1ec50ba9ceb580b76d015dbd49c17e', '2021-04-15 15:53:24');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `datasensor`
--
ALTER TABLE `datasensor`
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
-- AUTO_INCREMENT for table `datasensor`
--
ALTER TABLE `datasensor`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
