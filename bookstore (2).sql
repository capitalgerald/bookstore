-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 03, 2022 at 06:48 AM
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
(2, 'PR0002', 'Primary Mathematics', 'Bamwine Albert', '2nd', 'Primary', '23 May 2016', '27,500', 'Book 400x500 Math2.jpg'),
(3, 'PR0003', 'The Basics of Social Research', 'Justine Linda', '7th', 'Primary', '17 Dec 2021', '16,800', 'Book 400x500 Social1.jpg'),
(4, 'OR0002', 'History East Africa (1000 AD)', 'Nduga Joseph', '4th', 'Ordinary Level', '27 Aug 2017', '38,000', 'Book 400x500 History1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `date` varchar(200) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `order` varchar(200) NOT NULL,
  `country` varchar(200) NOT NULL,
  `district` varchar(200) NOT NULL,
  `county` varchar(200) NOT NULL,
  `subcounty` varchar(200) NOT NULL,
  `parish` varchar(200) NOT NULL,
  `village` varchar(200) NOT NULL,
  `comment` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `date`, `name`, `email`, `phone`, `order`, `country`, `district`, `county`, `subcounty`, `parish`, `village`, `comment`) VALUES
(5, '', 'Kibirango Gerald', 'capitalgerald', '0708003786', '[[\"PR0001\", 3],[\"OR984\",6]]', 'Uganda', 'Luwero', 'Katikamu South', 'Makulubita', 'Mawale', 'Kawumu', 'Do you have a brach in Semuto?'),
(6, '', 'Simon', 'simon@gmail.com', '0785645324', '[[PR0002, 4], [PR0003, 1]]', 'Uganda', 'Arua', 'xxx', 'xxx', 'xxx', 'xxx', 'Can you lower me the price'),
(7, '', 'Aisha Namiilo', 'aisha@gmail.com', '0784746773', '[OR0001, 13]', 'Uganda', 'Masaka', 'xxxx', 'xxx', 'xxx', 'xxx', 'Can you deliver to Masaka'),
(28, '', 'Nakimera', 'Nakimera@gmail.com', '0789675432', '', 'Uganda', 'Luwero', 'Katikamu South', 'Makulubita', 'Mawale', 'Kawumu', 'Your books are good'),
(29, '', 'Masembe Stepehn', 'Masembe.stepehn@gmail.com', '078355322', '', 'Uganda', 'Luwero', 'Katikamu South', 'Makulubita', 'Mawale', 'Kawumu', 'Do you sell in bulk?'),
(30, '', 'Sekandi', 'Sekandipaul66@gmail.com', '0783553876', '', 'Uganda', 'Luwero', 'Katikamu South', 'Makulubita', 'Mawale', 'Kawumu', 'I also need passed papers');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
