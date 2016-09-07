-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 07, 2016 at 12:16 PM
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
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `category_id` int(11) NOT NULL,
  `category_name` varchar(50) NOT NULL COMMENT 'نام فیلد',
  `category_fild` int(11) NOT NULL COMMENT 'نوع فیلد(اعداد یا نوشته)',
  `category_gro` int(11) NOT NULL COMMENT 'این دسته بندی برای کدام گروه است'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
(3, 0, 0, 0, 'متن سوم برای تست', 'یوزر 3', 'user3@ggg.', 333333333, 3, '16:15:38 1395/05/12'),
(4, 0, 0, 0, '9', '9', '9', 9, 3, '10:24:07 1395/05/18'),
(5, 0, 0, 0, 's', 's', 's', 0, 3, '12:28:17 1395/05/23'),
(6, 0, 0, 0, 's', 's', 's', 0, 3, '12:37:19 1395/05/23'),
(7, 0, 0, 0, 's', 's', 's', 0, 3, '12:38:20 1395/05/23'),
(8, 0, 0, 0, 's', 's', 's', 0, 3, '12:45:47 1395/05/23'),
(9, 22, 0, 0, 'عجب سایت باحالی', '', '', 0, 3, '15:10:00 1395/06/09'),
(10, 0, 0, 0, 'س', 'س', 'س', 0, 3, '15:10:41 1395/06/09');

-- --------------------------------------------------------

--
-- Table structure for table `company`
--

CREATE TABLE `company` (
  `company_id` int(11) NOT NULL,
  `company_name` varchar(512) NOT NULL,
  `company_email` varchar(50) NOT NULL,
  `company_number1` varchar(11) NOT NULL,
  `company_number2` varchar(11) NOT NULL,
  `company_address1` varchar(512) NOT NULL,
  `company_address2` varchar(512) NOT NULL,
  `company_city` varchar(50) NOT NULL,
  `company_province` varchar(50) NOT NULL,
  `company_country` varchar(50) NOT NULL,
  `company_post_code` varchar(20) NOT NULL,
  `company_preamble` varchar(512) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
(33414125, 33424024, 'safaiepoor90@yahoo.com', 51, 33437546, 'اضافه', 1, 'جمهوری اسلامی 13 -بین خبیری 15 و 17', 9155140419, 'مطالب خود را جهت مشاهده در صفحه درباره ما اینجا یادداشت فرمائید . \r\nمطالب خود را جهت مشاهده در صفحه درباره ما اینجا یادداشت فرمائید . مطالب خود را جهت مشاهده در صفحه درباره ما اینجا یادداشت فرمائید . مطالب خود را جهت مشاهده در صفحه درباره ما اینجا یادداشت فرمائید . مطالب خود را جهت مشاهده در صفحه درباره ما اینجا یادداشت فرمائید . مطالب خود را جهت مشاهده در صفحه درباره ما اینجا یادداشت فرمائید . مطالب خود را جهت مشاهده در صفحه درباره ما اینجا یادداشت فرمائید .', 'مطالب خود را جهت مشاهده در صفحه درباره ما اینجا یادداشت فرمائید . مطالب خود را جهت مشاهده در صفحه درباره ما اینجا یادداشت فرمائید . مطالب خود را جهت مشاهده در صفحه درباره ما اینجا یادداشت فرمائید . مطالب خود را جهت مشاهده در صفحه درباره ما اینجا یادداشت فرمائید . مطالب خود را جهت مشاهده در صفحه درباره ما اینجا یادداشت فرمائید . مطالب خود را جهت مشاهده در صفحه درباره ما اینجا یادداشت فرمائید . مطالب خود را جهت مشاهده در صفحه درباره ما اینجا یادداشت فرمائید . مطالب خود را جهت مشاهده در صفحه درباره ما اینجا یادداشت فرمائید .');

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
  `object_sale` bigint(20) NOT NULL,
  `object_sale_di` bigint(20) NOT NULL COMMENT 'قیمت با تخفیف',
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
  `object_pupolar` float NOT NULL COMMENT 'محبوب',
  `object_visit` int(11) NOT NULL COMMENT 'بازدید'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `object`
--

INSERT INTO `object` (`object_id`, `object_date`, `object_code`, `object_name`, `object_unit`, `object_sale`, `object_sale_di`, `object_m1`, `object_m2`, `object_m3`, `object_m4`, `object_m5`, `object_m6`, `object_m7`, `object_m8`, `object_m9`, `object_m10`, `object_m11`, `object_status`, `object_pupolar`, `object_visit`) VALUES
(2, '2016-08-10 10:18:48', 10201002, 'دستبند فنری', 'عدد', 20000000, 0, '', '', '', '', '', '', '', '', '', '', '', 1, 0, 0),
(3, '2016-08-11 10:10:36', 10103002, 'پلیور', 'جین', 250000, 240000, '333', '', '', '', '', '', '', '', '', '', '', 1, 0, 0),
(4, '2016-08-11 10:11:20', 10104010, 'تیشرت یقه دار', 'جین', 300000, 280000, '222', '', '', '', '', '', '', '', '', '', '', 1, 1, 0),
(5, '2016-08-11 10:21:36', 10106002, 'گرمکن ورزشی سفید', 'دست', 2800000, 2650000, '', '', '', '', '', '', '', '', '', '', '', 1, 0, 0),
(6, '2016-08-11 13:27:30', 10102002, 'ساق', 'عدد', 20000, 15000, '', '', '', '', '', '', '', '', '', '', '', 1, 3, 0),
(7, '2016-08-11 13:28:08', 10104007, 'حلقه ای مارک دار', 'جین', 180000, 170000, '111', '', '', '', '', '', '', '', '', '', '', 1, 3, 0),
(8, '2016-08-11 13:28:43', 10401002, 'ساعت پروانه ای', 'عدد', 750000, 700000, '', '', '', '', '', '', '', '', '', '', '', 1, 0, 0),
(9, '2016-08-11 13:29:08', 10301002, 'کفش اسپرت زنانه', 'عدد', 895000, 890000, '', '', '', '', '', '', '', '', '', '', '', 1, 0, 0),
(10, '2016-08-11 13:30:46', 10107002, 'شرت', 'جین', 170000, 0, '', '', '', '', '', '', '', '', '', '', '', 1, 2, 5),
(11, '2016-09-06 18:27:00', 10101001, 'شلوار کتان صابونی', 'عدد', 950000, 800000, '', '', '', '', '', '', '', '', '', '', '', 1, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `object_in`
--

CREATE TABLE `object_in` (
  `object_in_factor` int(11) NOT NULL,
  `object_in_id` varchar(50) NOT NULL COMMENT 'شماره آیدی کالا',
  `object_person_id` varchar(50) NOT NULL COMMENT 'شخص یا شرکتی که کالا خریداری شده از آن',
  `object_in_purchase_price` int(11) NOT NULL COMMENT 'قیمت خرید',
  `object_in_price_out` varchar(50) NOT NULL COMMENT 'قیمت پیش فرض برای فروش',
  `object_in_date` date NOT NULL COMMENT 'تاریخ',
  `object_in_time` time NOT NULL COMMENT 'ساعت',
  `object_in_number` int(11) NOT NULL COMMENT 'تعداد در هر بسته',
  `object_in_number_cartoons` int(11) NOT NULL COMMENT 'تعداد در هر کارتون',
  `object_in_number_packages` int(11) NOT NULL COMMENT 'تعداد در هر بسته',
  `object_in_initial_number` int(11) NOT NULL COMMENT 'تعداد وارد شده اولیه'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `object_out`
--

CREATE TABLE `object_out` (
  `object_out_id` int(11) NOT NULL COMMENT 'شماره آی دی',
  `object_out_factor` int(11) NOT NULL COMMENT 'شماره فاکتور',
  `object_out_person_id` int(11) NOT NULL COMMENT 'شماره آی دی کاریر یا کارخانه',
  `object_out_code` int(11) NOT NULL COMMENT 'شماره کد کالا',
  `object_out_qun` int(11) NOT NULL COMMENT 'تعداد کالا',
  `object_out_sales_price` bigint(11) NOT NULL COMMENT 'قیمت فروش',
  `object_out_status` int(11) NOT NULL COMMENT 'وضعیت پرداخت',
  `object_out_type` int(11) NOT NULL COMMENT 'فروش از سایت یا حضوری',
  `object_out_Discount` int(11) NOT NULL COMMENT 'درصد تخفیف',
  `object_out_preamble` varchar(512) CHARACTER SET utf8mb4 NOT NULL,
  `object_out_date` date NOT NULL COMMENT 'تاریخ',
  `object_out_time` time NOT NULL COMMENT 'ساعت',
  `object_out_ip` varchar(20) CHARACTER SET utf8mb4 NOT NULL,
  `object_out_h_s` int(11) NOT NULL COMMENT 'نحوه ارسال سفارش',
  `object_out_payment` int(11) NOT NULL COMMENT 'درگاه پرداخت'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `object_out`
--

INSERT INTO `object_out` (`object_out_id`, `object_out_factor`, `object_out_person_id`, `object_out_code`, `object_out_qun`, `object_out_sales_price`, `object_out_status`, `object_out_type`, `object_out_Discount`, `object_out_preamble`, `object_out_date`, `object_out_time`, `object_out_ip`, `object_out_h_s`, `object_out_payment`) VALUES
(16, 1000, 22, 10103002, 3, 240000, 2, 2, 0, 'یادداشت ویژه ای ثبت نشد', '1395-06-14', '17:17:18', '::1', 3, 3),
(17, 1000, 22, 10106002, 6, 2650000, 2, 2, 0, 'یادداشت ویژه ای ثبت نشد', '1395-06-14', '17:17:18', '::1', 3, 3),
(18, 1000, 22, 10107002, 1, 170000, 2, 2, 0, 'یادداشت ویژه ای ثبت نشد', '1395-06-14', '17:17:18', '::1', 3, 3),
(19, 1000, 22, 10104007, 7, 170000, 2, 2, 0, 'یادداشت ویژه ای ثبت نشد', '1395-06-14', '17:17:18', '::1', 3, 3);

-- --------------------------------------------------------

--
-- Table structure for table `stat`
--

CREATE TABLE `stat` (
  `stat_user_id` varchar(50) NOT NULL,
  `stat_ip` varchar(50) NOT NULL,
  `stat_date` date NOT NULL,
  `stat_time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `stock`
--

CREATE TABLE `stock` (
  `stock_object_id` varchar(50) NOT NULL,
  `stock_number` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `unit`
--

CREATE TABLE `unit` (
  `unit_single` int(11) NOT NULL,
  `unit_name` varchar(20) NOT NULL,
  `unit_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `unit`
--

INSERT INTO `unit` (`unit_single`, `unit_name`, `unit_id`) VALUES
(2, 'دست', 1),
(1, 'عدد', 2),
(6, 'جین', 3);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(512) NOT NULL,
  `user_family` varchar(512) NOT NULL,
  `user_email` varchar(50) NOT NULL,
  `user_pass` varchar(512) NOT NULL,
  `user_type` int(11) NOT NULL,
  `user_tell1` varchar(11) NOT NULL,
  `user_tell2` varchar(11) NOT NULL,
  `user_address1` varchar(512) NOT NULL,
  `user_address2` varchar(512) NOT NULL,
  `user_city` varchar(50) NOT NULL,
  `user_province` varchar(50) NOT NULL,
  `user_country` varchar(20) NOT NULL,
  `user_post_code` varchar(20) NOT NULL,
  `user_preamble` varchar(512) NOT NULL,
  `user_mobile` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `user_name`, `user_family`, `user_email`, `user_pass`, `user_type`, `user_tell1`, `user_tell2`, `user_address1`, `user_address2`, `user_city`, `user_province`, `user_country`, `user_post_code`, `user_preamble`, `user_mobile`) VALUES
(22, 'علیرضا', 'صفایی', 'safaiepoor90@gmail.com', '6512bd43d9caa6e02c990b0a82652dca', 2, '33437546', '33424024', 'جمهوری 13 پلاک 177', 'جمهوری 13 پلاک 180', 'مشهد', '', 'خراسان رضوی', '', '', 9155140419);

-- --------------------------------------------------------

--
-- Table structure for table `wishlist`
--

CREATE TABLE `wishlist` (
  `wish_id` int(11) NOT NULL,
  `wish_user_id` int(11) NOT NULL,
  `wish_object_code` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`comment_id`);

--
-- Indexes for table `company`
--
ALTER TABLE `company`
  ADD PRIMARY KEY (`company_id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`cont_id`);

--
-- Indexes for table `gro`
--
ALTER TABLE `gro`
  ADD PRIMARY KEY (`gro_id`);

--
-- Indexes for table `object`
--
ALTER TABLE `object`
  ADD PRIMARY KEY (`object_id`);

--
-- Indexes for table `object_in`
--
ALTER TABLE `object_in`
  ADD PRIMARY KEY (`object_in_factor`);

--
-- Indexes for table `object_out`
--
ALTER TABLE `object_out`
  ADD PRIMARY KEY (`object_out_id`);

--
-- Indexes for table `unit`
--
ALTER TABLE `unit`
  ADD PRIMARY KEY (`unit_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `wishlist`
--
ALTER TABLE `wishlist`
  ADD PRIMARY KEY (`wish_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `comment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `company`
--
ALTER TABLE `company`
  MODIFY `company_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `cont_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `gro`
--
ALTER TABLE `gro`
  MODIFY `gro_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=112;
--
-- AUTO_INCREMENT for table `object`
--
ALTER TABLE `object`
  MODIFY `object_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `object_in`
--
ALTER TABLE `object_in`
  MODIFY `object_in_factor` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `object_out`
--
ALTER TABLE `object_out`
  MODIFY `object_out_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'شماره آی دی', AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `unit`
--
ALTER TABLE `unit`
  MODIFY `unit_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT for table `wishlist`
--
ALTER TABLE `wishlist`
  MODIFY `wish_id` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
