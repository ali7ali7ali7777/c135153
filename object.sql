-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 10, 2016 at 12:26 PM
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
-- Table structure for table `object`
--

CREATE TABLE `object` (
  `object_id` int(11) NOT NULL,
  `object_date` datetime NOT NULL,
  `object_code` int(11) NOT NULL,
  `object_name` varchar(512) NOT NULL,
  `object_unit` varchar(512) NOT NULL,
  `object_sale` varchar(20) NOT NULL,
  `object_sale_di` varchar(20) NOT NULL COMMENT 'قیمت با تخفیف',
  `object_m1` varchar(512) NOT NULL,
  `object_m2` varchar(512) NOT NULL,
  `object_m3` varchar(512) NOT NULL,
  `object_m4` varchar(512) NOT NULL,
  `object_m5` varchar(512) NOT NULL,
  `object_m6` varchar(512) NOT NULL,
  `object_m7` varchar(512) NOT NULL,
  `object_m8` varchar(512) NOT NULL,
  `object_m9` varchar(512) NOT NULL,
  `object_m10` varchar(512) NOT NULL,
  `object_m11` varchar(512) NOT NULL,
  `object_status` int(11) NOT NULL COMMENT 'یک فعال و دو غیر فعال',
  `object_pupolar` int(11) NOT NULL COMMENT 'محبوب',
  `object_visit` int(11) NOT NULL COMMENT 'بازدید'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `object`
--

INSERT INTO `object` (`object_id`, `object_date`, `object_code`, `object_name`, `object_unit`, `object_sale`, `object_sale_di`, `object_m1`, `object_m2`, `object_m3`, `object_m4`, `object_m5`, `object_m6`, `object_m7`, `object_m8`, `object_m9`, `object_m10`, `object_m11`, `object_status`, `object_pupolar`, `object_visit`) VALUES
(1, '2016-08-10 10:12:38', 10101001, 'شلوار لی', 'عدد', '250000', '240.000', '', '', '', '', '', '', '', '', '', '', '', 1, 0, 0),
(2, '2016-08-10 10:18:48', 10201001, 'دستبند فنری', 'عدد', '200.000.000', '19.500.000', '', '', '', '', '', '', '', '', '', '', '', 1, 0, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `object`
--
ALTER TABLE `object`
  ADD PRIMARY KEY (`object_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `object`
--
ALTER TABLE `object`
  MODIFY `object_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
