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
-- Table structure for table `gro_title`
--

CREATE TABLE `gro_title` (
  `gro_title_m2` varchar(512) NOT NULL DEFAULT 'مدل',
  `gro_title_m3` varchar(512) NOT NULL DEFAULT 'سازنده',
  `gro_title_m4` varchar(512) NOT NULL DEFAULT 'مشخصه 1',
  `gro_title_m5` varchar(512) NOT NULL DEFAULT 'مشخصه 2',
  `gro_title_m6` varchar(512) NOT NULL DEFAULT 'مشخصه 3',
  `gro_title_m7` varchar(512) NOT NULL DEFAULT 'مشخصه 4',
  `gro_title_m8` varchar(512) NOT NULL DEFAULT 'مشخصه 5',
  `gro_title_m9` varchar(512) NOT NULL DEFAULT 'مشخصه 6',
  `gro_title_m10` varchar(512) NOT NULL DEFAULT 'مشخصه 7',
  `gro_title_m11` varchar(512) NOT NULL DEFAULT 'مشخصه 8',
  `gro_title_m1` varchar(512) NOT NULL DEFAULT 'کد کالا'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `gro_title`
--

INSERT INTO `gro_title` (`gro_title_m2`, `gro_title_m3`, `gro_title_m4`, `gro_title_m5`, `gro_title_m6`, `gro_title_m7`, `gro_title_m8`, `gro_title_m9`, `gro_title_m10`, `gro_title_m11`, `gro_title_m1`) VALUES
('مدل', 'سازنده', 'مشخصه 1', 'مشخصه 2', 'مشخصه 3', 'مشخصه 4', 'مشخصه 5', 'مشخصه 6', 'مشخصه 6', 'مشخصه 8', 'کد کالا');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
