-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 02, 2016 at 01:46 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shop2`
--

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `comment_id` int(11) NOT NULL,
  `comment_user_id` int(11) NOT NULL,
  `Comment_sub_id` int(11) NOT NULL,
  `comment_object_id` int(11) NOT NULL,
  `comment_text` varchar(512) NOT NULL,
  `comment_name` varchar(20) NOT NULL,
  `comment_email` varchar(30) NOT NULL,
  `comment_tel` bigint(20) NOT NULL,
  `comment_status` int(2) NOT NULL,
  `comment_data` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`comment_id`, `comment_user_id`, `Comment_sub_id`, `comment_object_id`, `comment_text`, `comment_name`, `comment_email`, `comment_tel`, `comment_status`, `comment_data`) VALUES
(1, 0, 0, 0, 'سلام متن برای تست', 'یوزر یک', 'user1@yahoo.com', 222222222222, 3, '16:12:08 1395/05/12'),
(2, 0, 0, 0, 'متن دو برای تست', 'یوزر دو', 'uder27@gmail.com', 1111111, 3, '16:12:59 1395/05/12'),
(3, 0, 0, 0, 'متن سوم برای تست', 'یوزر 3', 'user3@ggg.', 333333333, 3, '16:15:38 1395/05/12');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`comment_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `comment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
