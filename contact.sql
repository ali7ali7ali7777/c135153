-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 01, 2016 at 04:26 PM
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
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `tel_1` int(11) NOT NULL COMMENT 'تلفن',
  `tel_2` int(11) NOT NULL COMMENT 'تلفن',
  `email` varchar(512) NOT NULL COMMENT 'ایمیل',
  `kod` int(11) NOT NULL COMMENT 'کد شهر',
  `fax` int(11) NOT NULL COMMENT 'فکس',
  `field` text NOT NULL COMMENT 'فیلد اضافه',
  `cont_id` int(11) NOT NULL,
  `mac` text NOT NULL,
  `mobile` bigint(20) NOT NULL COMMENT 'موبایل',
  `about_title_1` longtext NOT NULL,
  `about_title_2` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`tel_1`, `tel_2`, `email`, `kod`, `fax`, `field`, `cont_id`, `mac`, `mobile`, `about_title_1`, `about_title_2`) VALUES
(33414125, 33424024, 'safaiepoor90@yahoo.com', 51, 33437546, 'اضافه', 1, 'جمهوری اسلامی 13 بین خبیر 15 و 17پلاک 177', 9155140419, '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`cont_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `cont_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
