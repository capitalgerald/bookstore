-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 02, 2022 at 08:30 PM
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
-- Database: `bookstore`
--

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `id` int(11) NOT NULL,
  `code` varchar(30) NOT NULL,
  `name` text NOT NULL,
  `author` varchar(30) NOT NULL,
  `edition` varchar(100) NOT NULL,
  `level` varchar(100) NOT NULL,
  `publish_date` varchar(100) NOT NULL,
  `price` varchar(100) NOT NULL,
  `image` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`id`, `code`, `name`, `author`, `edition`, `level`, `publish_date`, `price`, `image`) VALUES
(1, 'PR0001', 'Uganda Primary English Course', 'Kibirango Gerald', '3rd', 'Primary', '8 Aug 2022', '15,000', 'Book 400x500 English1.jpg'),
(2, 'PR0002', '28 Act Math Lessons', 'Bamwine Albert', '2nd', 'Primary', '23 May 2016', '27,500', 'Book 400x500 Math1.jpg'),
(3, 'PR0003', 'The Basics of Social Research', 'Justine Linda', '7th', 'Primary', '17 Dec 2021', '16,800', 'Book 400x500 Social1.jpg'),
(4, 'OR0002', 'History East Africa (1000 AD)', 'Nduga Joseph', '4th', 'Ordinary Level', '27 Aug 2017', '38,000', 'Book 400x500 History1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `order` varchar(200) NOT NULL,
  `latitude` varchar(200) NOT NULL,
  `longitude` varchar(200) NOT NULL,
  `comment` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `name`, `email`, `phone`, `order`, `latitude`, `longitude`, `comment`) VALUES
(5, 'Kibirango Gerald', 'capitalgerald', '0708003786', '[PR0001, 3]', '51.903711527677196', '-7.231442147387752', 'I love this book.'),
(6, 'Simon', 'simon@gmail.com', '0785645324', '[[PR0002, 4], [PR0003, 1]]', '51.741491039526444', '-6.813961678637752', 'Can you lower me the price'),
(7, 'Aisha Namiilo', 'aisha@gmail.com', '0784746773', '[OR0001, 13]', '52.44197118603808', '-9.421335212737716', 'Can you deliver to Mbarara'),
(8, 'Capital', 'capital@gmail.com', '07573787445', '', '52.64612319103591', '-7.42484178889976', 'My comments'),
(9, 'Capital', 'capital@gmail.com', '07573787445', '', '52.64612319103591', '-7.42484178889976', 'My comments'),
(14, 'prem', 'prem@gmail.com', '07498474984', '', '52.71864613007333', '-8.063961436493882', 'I like your services'),
(16, 'jjj', 'jjjj@yahoo.com', '7894804', '', '52.01729413125193', '-3.7243618271188828', 'cccc');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `code` (`code`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
