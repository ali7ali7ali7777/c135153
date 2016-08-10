-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 10, 2016 at 12:25 PM
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
-- Table structure for table `gro`
--

CREATE TABLE `gro` (
  `gro_id` int(11) NOT NULL,
  `gro_name` varchar(512) NOT NULL COMMENT 'نام گروه',
  `gro_kod` int(5) NOT NULL COMMENT 'کد اختصاصی',
  `gro_show` int(11) NOT NULL,
  `gro_status` int(11) NOT NULL COMMENT 'یک فعال و دو غیر فعال'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `gro`
--

INSERT INTO `gro` (`gro_id`, `gro_name`, `gro_kod`, `gro_show`, `gro_status`) VALUES
(85, 'پوشاک', 101, 0, 1),
(86, 'بدلیجات', 102, 0, 1),
(87, 'شلوار مردانه', 10101, 0, 1),
(88, 'دستبند', 10201, 0, 1),
(89, 'شلوار زنانه', 10102, 0, 1),
(90, 'شلوار  بچه گانه', 10105, 0, 1),
(91, 'ژاکت', 10103, 0, 1),
(92, 'تیشرت', 10104, 0, 1),
(93, 'گرمکن', 10106, 0, 1),
(94, 'زیر', 10107, 0, 1),
(101, 'کفش', 103, 0, 1),
(103, 'ساعت', 104, 0, 1),
(110, 'ساعت دیواری', 10401, 0, 1),
(111, 'کفش اسپرت', 10301, 0, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `gro`
--
ALTER TABLE `gro`
  ADD PRIMARY KEY (`gro_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `gro`
--
ALTER TABLE `gro`
  MODIFY `gro_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=112;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
