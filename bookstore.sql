-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 17, 2022 at 08:10 PM
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
-- Table structure for table `address`
--

CREATE TABLE `address` (
  `id` int(11) NOT NULL,
  `country` varchar(100) NOT NULL,
  `district` varchar(100) NOT NULL,
  `county` varchar(100) NOT NULL,
  `subcounty` varchar(100) NOT NULL,
  `parish` varchar(100) NOT NULL,
  `village` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `address`
--

INSERT INTO `address` (`id`, `country`, `district`, `county`, `subcounty`, `parish`, `village`) VALUES
(4, 'Uganda', 'Luwero', 'Katikamu South', 'Makulubita', 'Mawale', 'Kangave'),
(8, 'Uganda', 'Luwero', 'Katikamu South', 'Makulubita', 'Mawale', 'Kiremera'),
(11, 'Uganda', 'Luwero', 'Katikamu South', 'Makulubita', 'Mawale', 'Lukaaka'),
(12, 'Uganda', 'Luwero', 'Katikamu South', 'Makulubita', 'Mawale', 'Balimanyankya'),
(13, 'Uganda', 'Luwero', 'Katikamu South', 'Makulubita', 'Mawale', 'Kalasa'),
(14, 'Uganda', 'Luwero', 'Katikamu South', 'Makulubita', 'Mawale', 'Mawale'),
(15, 'Uganda', 'Luwero', 'Katikamu South', 'Makulubita', 'Mawale', 'Bugozi'),
(16, 'Uganda', 'Luwero', 'Katikamu South', 'Makulubita', 'Mawale', 'Buteza'),
(17, 'Uganda', 'Luwero', 'Katikamu South', 'Makulubita', 'Kagogo', ''),
(18, 'Uganda', 'Luwero', 'Katikamu South', 'Makulubita', 'Kalasa', ''),
(19, 'Uganda', 'Luwero', 'Katikamu South', 'Makulubita', 'Kangave', ''),
(20, 'Uganda', 'Luwero', 'Katikamu South', 'Makulubita', 'Kanyanda', ''),
(21, 'Uganda', 'Luwero', 'Katikamu South', 'Makulubita', 'Kasozi', ''),
(22, 'Uganda', 'Luwero', 'Katikamu South', 'Makulubita', 'Makulubita', ''),
(23, 'Uganda', 'Luwero', 'Katikamu South', 'Makulubita', 'Nsanvu', ''),
(24, 'Uganda', 'Luwero', 'Katikamu South', 'Makulubita', 'Waluleeta', ''),
(25, 'Uganda', 'Luwero', 'Katikamu South', 'Nyimbwa', '', ''),
(26, 'Uganda', 'Luwero', 'Katikamu South', 'Bombo Town Council', '', ''),
(27, 'Uganda', 'Luwero', 'Katikamu South', 'Butuntumula', '', ''),
(28, 'Uganda', 'Luwero', 'Katikamu South', 'Katikamu', '', ''),
(29, 'Uganda', 'Luwero', 'Katikamu South', 'Luwero Sub-County', '', ''),
(30, 'Uganda', 'Luwero', 'Katikamu South', 'Wobulenzi Town Council', '', ''),
(31, 'Uganda', 'Luwero', 'Nakaseke', '', '', ''),
(32, 'Uganda', 'Luwero', 'Katikamu North', '', '', ''),
(33, 'Uganda', 'Luwero', 'Bamunanika', '', '', ''),
(34, 'Uganda', 'Kampala', '', '', '', ''),
(35, 'Uganda', 'Gulu', '', '', '', ''),
(36, 'Uganda', 'Masaka', '', '', '', ''),
(37, 'Uganda', 'Arua', '', '', '', ''),
(38, 'Uganda', 'Lwengo', '', '', '', ''),
(41, 'Burundi', '', '', '', '', ''),
(42, 'Kenya', '', '', '', '', ''),
(43, 'Tanzania', '', '', '', '', ''),
(44, 'Rwanda', '', '', '', '', ''),
(45, 'Uganda', '', '', '', '', ''),
(46, 'Uganda', 'Luwero', 'Katikamu South', 'Makulubita', 'Mawale', 'Kawumu');

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
  `ordered_books` text NOT NULL,
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

INSERT INTO `orders` (`id`, `date`, `name`, `email`, `phone`, `ordered_books`, `country`, `district`, `county`, `subcounty`, `parish`, `village`, `comment`) VALUES
(41, '', 'uu', 'uu@gmail.com', '56565656', '[63,History East Africa (1000 AD),OR0002],[46,The Basics of Social Research,PR0003],[7,Uganda Primary English Course,PR0001]', 'Uganda', 'Luwero', 'Katikamu South', 'Makulubita', 'Mawale', 'Kawumu', ''),
(43, '', 'Ndugga Joseph', 'njosepg@gmail.com', '0784672436', '[56,Primary Mathematics,PR0002],[6,History East Africa (1000 AD),OR0002]', 'Uganda', 'Luwero', 'Katikamu South', 'Makulubita', 'Mawale', 'Kawumu', 'Your books quality is kawaaa'),
(44, '', 'Galiwango Timothy', 'gtmothy@yahoo.com', '0784112234', '[777,History East Africa (1000 AD),OR0002],[67,Primary Mathematics,PR0002],[777,History East Africa (1000 AD),OR0002]', 'Uganda', 'Luwero', 'Katikamu South', 'Makulubita', 'Mawale', 'Kawumu', 'Can you create a physical school in our community'),
(46, '', 'Susan Mile', 'susanmm34@gmail.com', '0786237643', '[2,The Basics of Social Research,PR0003],[1,Primary Mathematics,PR0002],[3,Uganda Primary English Course,PR0001]', 'Uganda', 'Luwero', 'Katikamu South', 'Makulubita', 'Mawale', 'Kawumu', 'Do you have office in Luwero?'),
(47, '', 'Hassan Mohamed', 'hassanmah@ymail.com', '0623786540', '[2,Primary Mathematics,PR0002],[1,Uganda Primary English Course,PR0001]', 'Uganda', 'Luwero', 'Katikamu South', 'Makulubita', 'Mawale', 'Kawumu', 'I need books for coding. Do you have them?'),
(48, '', 'hh', 'hh@gmail.com', '0786737337', '[8,The Basics of Social Research,PR0003],[8,Uganda Primary English Course,PR0001]', 'Uganda', 'Luwero', 'Katikamu South', 'Makulubita', 'Mawale', 'Kawumu', 'ccccc'),
(49, '', 'hh', 'hh@gmail.com', '0786737337', '[8,The Basics of Social Research,PR0003],[8,Uganda Primary English Course,PR0001]', 'Uganda', 'Luwero', 'Katikamu South', 'Makulubita', 'Mawale', 'Kawumu', 'ccccc'),
(50, '', 'Ali', 'ali@gmail.com', '0484774', '', 'Uganda', '', '', '', '', '', 'hhh'),
(51, '', 'Ali', 'ali@gmail.com', '0484774', '', 'Uganda', '', '', '', '', '', 'hhh'),
(52, '', 'linda', 'linda@gmail.com', '9898989', '[11,History East Africa (1000 AD),OR0002],[33,Primary Mathematics,PR0002]', 'Uganda', 'Luwero', 'Katikamu South', 'Makulubita', 'Mawale', 'Kawumu', 'I love your books'),
(53, '', 'Mutyaba', 'mutyabagrace@gmail.com', '08080808', '[1,The Basics of Social Research,PR0003],[43,Uganda Primary English Course,PR0001],[33,History East Africa (1000 AD),OR0002]', 'Uganda', 'Luwero', 'Katikamu South', 'Makulubita', 'Mawale', 'Kawumu', 'Hello do you have past papers'),
(54, '', 'Mutyaba', 'mutyabagrace@gmail.com', '08080808', '[1,The Basics of Social Research,PR0003],[43,Uganda Primary English Course,PR0001],[33,History East Africa (1000 AD),OR0002]', 'Uganda', 'Luwero', 'Katikamu South', 'Makulubita', 'Mawale', 'Kawumu', 'Hello do you have past papers'),
(55, '', 'paul', 'paul@gmail.com', '8464747474', '[33,History East Africa (1000 AD),OR0002],[22,Primary Mathematics,PR0002],[12,Uganda Primary English Course,PR0001]', 'Uganda', 'Luwero', 'Katikamu South', 'Makulubita', 'Mawale', 'Kawumu', 'I just want to thank you for the better services'),
(56, '', 'paul', 'paul@gmail.com', '8464747474', '[33,History East Africa (1000 AD),OR0002],[22,Primary Mathematics,PR0002],[12,Uganda Primary English Course,PR0001]', 'Uganda', 'Luwero', 'Katikamu South', 'Makulubita', 'Mawale', 'Kawumu', 'I just want to thank you for the better services'),
(57, '', 'sarah', 'sarah@gmail.com', '9484844848', '[5,History East Africa (1000 AD),OR0002],[7,Primary Mathematics,PR0002],[1,Uganda Primary English Course,PR0001]', 'Uganda', 'Luwero', 'Katikamu South', 'Makulubita', 'Mawale', 'Kawumu', 'Your books are good'),
(58, '', 'sarah', 'sarah@gmail.com', '9484844848', '[5,History East Africa (1000 AD),OR0002],[7,Primary Mathematics,PR0002],[1,Uganda Primary English Course,PR0001]', 'Uganda', 'Luwero', 'Katikamu South', 'Makulubita', 'Mawale', 'Kawumu', 'Your books are good'),
(59, '', 'jimmy', 'jimmy@gmail.com', '078453421', '[12,The Basics of Social Research,PR0003],[7,Uganda Primary English Course,PR0001]', 'Uganda', 'Luwero', 'Katikamu South', 'Makulubita', 'Mawale', 'Bugozi', 'Do you have  School'),
(60, '', 'jimmy', 'jimmy@gmail.com', '078453421', '[12,The Basics of Social Research,PR0003],[7,Uganda Primary English Course,PR0001]', 'Uganda', 'Luwero', 'Katikamu South', 'Makulubita', 'Mawale', 'Bugozi', 'Do you have  School'),
(61, '', 'jj', 'jjj@gmail.com', '7777', '[56,History East Africa (1000 AD),OR0002],[2,Primary Mathematics,PR0002]', 'Uganda', 'Luwero', 'Katikamu South', 'Makulubita', 'Mawale', 'Kangave', 'You are so good'),
(62, '', 'Junior', 'Junior@gmail.com', '0899887877', '[10,History East Africa (1000 AD),OR0002],[2,Uganda Primary English Course,PR0001]', '\n										Uganda									\n									', 'Luwero', 'Katikamu South', 'Makulubita', 'Mawale', 'Kawumu', 'You are awesome'),
(63, '', 'Junior', 'Junior@gmail.com', '0899887877', '[10,History East Africa (1000 AD),OR0002],[2,Uganda Primary English Course,PR0001]', '\n										Uganda									\n									', 'Luwero', 'Katikamu South', 'Makulubita', 'Mawale', 'Kawumu', 'You are awesome'),
(64, '', 'kk', 'kk@gmail.com', '09877', '[11`=,History East Africa (1000 AD),OR0002],[45,History East Africa (1000 AD),OR0002],[88,Primary Mathematics,PR0002]', '\n										Burundi									\n									', 'Gulu', 'Nakaseke', 'Butuntumula', 'Kalasa', 'Mawale', 'Hi, you are good'),
(65, '', 'kk', 'kk@gmail.com', '09877', '[11`=,History East Africa (1000 AD),OR0002],[45,History East Africa (1000 AD),OR0002],[88,Primary Mathematics,PR0002]', '\n										Burundi									\n									', 'Gulu', 'Nakaseke', 'Butuntumula', 'Kalasa', 'Mawale', 'Hi, you are good');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `address`
--
ALTER TABLE `address`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `address`
--
ALTER TABLE `address`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
