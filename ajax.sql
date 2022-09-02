-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 26, 2022 at 05:28 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ajax`
--

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `author` text NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `author`, `message`) VALUES
(1, 'Gerald', 'Get data from a database without refreshing the browser using AJAX - Learn AJAX programming'),
(2, 'Daniel', 'jQuery Tutorial- AJAX Load Content With No Page Refresh, jQuery Tutorial- AJAX Load Content With No Page Refresh,jQuery Tutorial- AJAX Load Content With No Page Refresh'),
(3, 'Gerald', 'Get data from a database without refreshing the browser using AJAX - Learn AJAX programming'),
(4, 'Daniel', 'jQuery Tutorial- AJAX Load Content With No Page Refresh, jQuery Tutorial- AJAX Load Content With No Page Refresh,jQuery Tutorial- AJAX Load Content With No Page Refresh'),
(5, 'Gerald', 'Get data from a database without refreshing the browser using AJAX - Learn AJAX programming'),
(6, 'Daniel', 'jQuery Tutorial- AJAX Load Content With No Page Refresh, jQuery Tutorial- AJAX Load Content With No Page Refresh,jQuery Tutorial- AJAX Load Content With No Page Refresh'),
(7, 'Gerald', 'Get data from a database without refreshing the browser using AJAX - Learn AJAX programming'),
(8, 'Daniel', 'jQuery Tutorial- AJAX Load Content With No Page Refresh, jQuery Tutorial- AJAX Load Content With No Page Refresh,jQuery Tutorial- AJAX Load Content With No Page Refresh'),
(9, 'Gerald', 'Get data from a database without refreshing the browser using AJAX - Learn AJAX programming'),
(10, 'Daniel', 'jQuery Tutorial- AJAX Load Content With No Page Refresh, jQuery Tutorial- AJAX Load Content With No Page Refresh,jQuery Tutorial- AJAX Load Content With No Page Refresh');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
