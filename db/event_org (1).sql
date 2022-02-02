-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 17, 2021 at 01:54 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.3.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `event_org`
--

-- --------------------------------------------------------

--
-- Table structure for table `agriculture`
--

CREATE TABLE `agriculture` (
  `id` int(11) NOT NULL,
  `file_name` varchar(23) NOT NULL,
  `file_code` varchar(23) NOT NULL,
  `issue_Date` date NOT NULL,
  `f_data` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id` int(50) NOT NULL,
  `event_type` varchar(250) NOT NULL,
  `first_name` varchar(250) NOT NULL,
  `last_name` varchar(250) NOT NULL,
  `age` int(50) NOT NULL,
  `email` varchar(250) NOT NULL,
  `country` varchar(255) NOT NULL,
  `phone` varchar(250) NOT NULL,
  `gender` varchar(15) NOT NULL,
  `hotel` varchar(255) NOT NULL,
  `transport` varchar(250) NOT NULL,
  `created_on` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id`, `event_type`, `first_name`, `last_name`, `age`, `email`, `country`, `phone`, `gender`, `hotel`, `transport`, `created_on`) VALUES
(1, '', 'Robel', 'Teshale', 29, 'robelteshale07@gmail.com', '', '+251914120885', 'Male', '', '', '2021-12-16'),
(2, '', 'Rob', 'Tes', 29, 'robelteshale07@gmail.com', '', '+251914120885', 'Female', '', '', '2021-12-16'),
(3, '', 'Ro', 'Teshale', 1, 'robelteshale07@gmail.com', '', '+251914120885', 'Female', '', '', '2021-12-16');

-- --------------------------------------------------------

--
-- Table structure for table `ekuraz`
--

CREATE TABLE `ekuraz` (
  `id` int(11) NOT NULL,
  `file_name` varchar(23) NOT NULL,
  `file_code` varchar(34) NOT NULL,
  `issue_Date` date NOT NULL,
  `f_data` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `filling`
--

CREATE TABLE `filling` (
  `id` int(11) NOT NULL,
  `file_name` varchar(250) NOT NULL,
  `file_code` varchar(250) NOT NULL,
  `issue_Date` date NOT NULL,
  `f_data` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `filling`
--

INSERT INTO `filling` (`id`, `file_name`, `file_code`, `issue_Date`, `f_data`) VALUES
(1, 'erobel', '777', '2021-11-15', '1636966020_emanhashimcv.docx');

-- --------------------------------------------------------

--
-- Table structure for table `gaz`
--

CREATE TABLE `gaz` (
  `id` int(11) NOT NULL,
  `file_name` varchar(23) NOT NULL,
  `file_code` varchar(30) NOT NULL,
  `issue_Date` date NOT NULL,
  `f_data` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `hotel`
--

CREATE TABLE `hotel` (
  `hotel_id` int(50) NOT NULL,
  `hotel_name` varchar(250) NOT NULL,
  `hotel_location` varchar(250) NOT NULL,
  `hotel_standard` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hotel`
--

INSERT INTO `hotel` (`hotel_id`, `hotel_name`, `hotel_location`, `hotel_standard`) VALUES
(1, 'xx', 'xzx', 'xxzxz'),
(2, 'helton', 'Addis Ababa, Ethiopia ', '5 Star hotel');

-- --------------------------------------------------------

--
-- Table structure for table `image_image`
--

CREATE TABLE `image_image` (
  `Id` int(50) NOT NULL,
  `image` text NOT NULL,
  `file_name` varchar(250) NOT NULL,
  `file_code` varchar(250) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `kamaz`
--

CREATE TABLE `kamaz` (
  `id` int(11) NOT NULL,
  `file_name` varchar(23) NOT NULL,
  `file_code` varchar(23) NOT NULL,
  `issue_Date` date NOT NULL,
  `f_data` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `lada`
--

CREATE TABLE `lada` (
  `id` int(11) NOT NULL,
  `file_name` varchar(23) NOT NULL,
  `file_code` varchar(1000) NOT NULL,
  `detail` varchar(1000) NOT NULL,
  `issue_Date` date NOT NULL,
  `start_Date` date NOT NULL,
  `end_Date` date NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `lada`
--

INSERT INTO `lada` (`id`, `file_name`, `file_code`, `detail`, `issue_Date`, `start_Date`, `end_Date`, `image`) VALUES
(30, 'fd', 'ha22', 'fdfdfdf', '2021-12-16', '2021-12-19', '2021-12-24', '1639655880_coffee Back and Front.jpg'),
(31, 'oxygen', 'ha22', 'dddddddddddddddddddssssssss', '2021-12-17', '2021-12-20', '2021-12-30', '1639727160_bazra c1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `oxygen`
--

CREATE TABLE `oxygen` (
  `id` int(11) NOT NULL,
  `file_name` varchar(25) NOT NULL,
  `file_code` varchar(23) NOT NULL,
  `issue_Date` date NOT NULL,
  `f_data` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `pharma`
--

CREATE TABLE `pharma` (
  `id` int(11) NOT NULL,
  `file_name` varchar(23) NOT NULL,
  `file_code` varchar(24) NOT NULL,
  `issue_Date` date NOT NULL,
  `f_data` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `project_list`
--

CREATE TABLE `project_list` (
  `id` int(30) NOT NULL,
  `name` varchar(200) NOT NULL,
  `description` text NOT NULL,
  `status` tinyint(2) NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `manager_id` int(30) NOT NULL,
  `user_ids` text NOT NULL,
  `date_created` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `project_list`
--

INSERT INTO `project_list` (`id`, `name`, `description`, `status`, `start_date`, `end_date`, `manager_id`, `user_ids`, `date_created`) VALUES
(3, 'Lada', 'To sales the Lada cars&amp;nbsp;', 0, '2021-11-24', '2021-12-24', 10, '12', '2021-11-24 12:01:07');

-- --------------------------------------------------------

--
-- Table structure for table `system_settings`
--

CREATE TABLE `system_settings` (
  `id` int(30) NOT NULL,
  `name` text NOT NULL,
  `email` varchar(200) NOT NULL,
  `contact` varchar(20) NOT NULL,
  `address` text NOT NULL,
  `cover_img` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `system_settings`
--

INSERT INTO `system_settings` (`id`, `name`, `email`, `contact`, `address`, `cover_img`) VALUES
(1, 'Bazra Project Management System', 'info@sample.comm', '+6948 8542 623', '2102  Caldwell Road, Rochester, New York, 14608', '');

-- --------------------------------------------------------

--
-- Table structure for table `task_list`
--

CREATE TABLE `task_list` (
  `id` int(30) NOT NULL,
  `project_id` int(30) NOT NULL,
  `task` varchar(200) NOT NULL,
  `description` text NOT NULL,
  `status` tinyint(4) NOT NULL,
  `date_created` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `task_list`
--

INSERT INTO `task_list` (`id`, `project_id`, `task`, `description`, `status`, `date_created`) VALUES
(1, 1, 'Sample Task 1', '								&lt;span style=&quot;color: rgb(0, 0, 0); font-family: &amp;quot;Open Sans&amp;quot;, Arial, sans-serif; font-size: 14px; text-align: justify;&quot;&gt;Fusce ullamcorper mattis semper. Nunc vel risus ipsum. Sed maximus dapibus nisl non laoreet. Pellentesque quis mauris odio. Donec fermentum facilisis odio, sit amet aliquet purus scelerisque eget.&amp;nbsp;&lt;/span&gt;													', 3, '2020-12-03 11:08:58'),
(2, 1, 'Sample Task 2', 'Sample Task 2							', 1, '2020-12-03 13:50:15'),
(3, 2, 'Task Test', 'Sample', 1, '2020-12-03 13:52:25'),
(4, 2, 'test 23', 'Sample test 23', 1, '2020-12-03 13:52:40'),
(5, 3, 'marketing ', 'the markiting&amp;nbsp;', 2, '2021-11-24 12:04:21'),
(6, 3, 'promotions', 'promotions for sales&amp;nbsp;', 1, '2021-11-24 12:04:43'),
(7, 4, 'promotions', 'promotions for wallet&amp;nbsp;', 2, '2021-11-24 12:05:29');

-- --------------------------------------------------------

--
-- Table structure for table `transport`
--

CREATE TABLE `transport` (
  `id` int(50) NOT NULL,
  `transport_type` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transport`
--

INSERT INTO `transport` (`id`, `transport_type`) VALUES
(1, 'car'),
(2, 'car');

-- --------------------------------------------------------

--
-- Table structure for table `uaz`
--

CREATE TABLE `uaz` (
  `id` int(11) NOT NULL,
  `file_name` varchar(24) NOT NULL,
  `file_code` varchar(23) NOT NULL,
  `issue_Date` date NOT NULL,
  `f_data` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(30) NOT NULL,
  `firstname` varchar(200) NOT NULL,
  `lastname` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` text NOT NULL,
  `type` tinyint(1) NOT NULL DEFAULT 2 COMMENT '1 = admin, 2 = staff',
  `avatar` text NOT NULL DEFAULT 'no-image-available.png',
  `date_created` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstname`, `lastname`, `email`, `password`, `type`, `avatar`, `date_created`) VALUES
(1, 'Administrator', '', 'admin@admin.com', '0192023a7bbd73250516f069df18b500', 1, 'no-image-available.png', '2020-11-26 10:57:04'),
(9, 'Robel', 'Teshale', 'robelteshale07@gmail.com', 'd6cc2d384052bbab82c170dac5f02928', 1, '1637744100_Business Card 1.jpg', '2021-11-24 11:55:06'),
(10, 'haymanot', 'temesgen', 'haimi@gmail.com', '1e765a77d70350564c08e658aa55c663', 2, '1637744160_bazra logo ppt4.jpg', '2021-11-24 11:56:24'),
(11, 'eman', 'hashim', 'eman@gmail.com', 'e241d2b7022d3129e381c4f330c97f49', 2, '1637744160_bazra logo ppt.jpg', '2021-11-24 11:56:51'),
(12, 'emebet', 'redaei', 'emebet@gmail.com', '39d04bcad644a38af79d7f9709771b0e', 3, '1637744220_Getu Haile 3.jpg', '2021-11-24 11:57:28'),
(13, 'hana', 'alex', 'hana@gmail.com', '02b5e1eb1ad55b0e609890c981b3062b', 3, '1637744280_Business Card 1.jpg', '2021-11-24 11:58:09'),
(14, 'Robel', 'teshale', 'user01@gmail.com', 'b75705d7e35e7014521a46b532236ec3', 1, '1637917020_Business Card 1.jpg', '2021-11-26 11:57:50'),
(15, 'Robel', 'teshale', 'robelteshale22@gmail.com', 'c20ad4d76fe97759aa27a0c99bff6710', 1, '1638788520_pass.jpg', '2021-12-06 14:02:06');

-- --------------------------------------------------------

--
-- Table structure for table `user_productivity`
--

CREATE TABLE `user_productivity` (
  `id` int(30) NOT NULL,
  `project_id` int(30) NOT NULL,
  `task_id` int(30) NOT NULL,
  `comment` text NOT NULL,
  `subject` varchar(200) NOT NULL,
  `date` date NOT NULL,
  `start_time` time NOT NULL,
  `end_time` time NOT NULL,
  `user_id` int(30) NOT NULL,
  `time_rendered` float NOT NULL,
  `date_created` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_productivity`
--

INSERT INTO `user_productivity` (`id`, `project_id`, `task_id`, `comment`, `subject`, `date`, `start_time`, `end_time`, `user_id`, `time_rendered`, `date_created`) VALUES
(1, 1, 1, '							&lt;p&gt;Sample Progress&lt;/p&gt;&lt;ul&gt;&lt;li&gt;Test 1&lt;/li&gt;&lt;li&gt;Test 2&lt;/li&gt;&lt;li&gt;Test 3&lt;/li&gt;&lt;/ul&gt;																			', 'Sample Progress', '2020-12-03', '08:00:00', '10:00:00', 1, 2, '2020-12-03 12:13:28'),
(2, 1, 1, '							Sample Progress						', 'Sample Progress 2', '2020-12-03', '13:00:00', '14:00:00', 1, 1, '2020-12-03 13:48:28'),
(3, 1, 2, '							Sample						', 'Test', '2020-12-03', '08:00:00', '09:00:00', 5, 1, '2020-12-03 13:57:22'),
(4, 1, 2, 'asdasdasd', 'Sample Progress', '2020-12-02', '08:00:00', '10:00:00', 2, 2, '2020-12-03 14:36:30');

-- --------------------------------------------------------

--
-- Table structure for table `wallet`
--

CREATE TABLE `wallet` (
  `id` int(11) NOT NULL,
  `file_name` varchar(23) NOT NULL,
  `file_code` varchar(23) NOT NULL,
  `issue_Date` date NOT NULL,
  `f_data` varchar(23) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `agriculture`
--
ALTER TABLE `agriculture`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ekuraz`
--
ALTER TABLE `ekuraz`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `filling`
--
ALTER TABLE `filling`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gaz`
--
ALTER TABLE `gaz`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hotel`
--
ALTER TABLE `hotel`
  ADD PRIMARY KEY (`hotel_id`);

--
-- Indexes for table `image_image`
--
ALTER TABLE `image_image`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `kamaz`
--
ALTER TABLE `kamaz`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lada`
--
ALTER TABLE `lada`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `oxygen`
--
ALTER TABLE `oxygen`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pharma`
--
ALTER TABLE `pharma`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `project_list`
--
ALTER TABLE `project_list`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `system_settings`
--
ALTER TABLE `system_settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `task_list`
--
ALTER TABLE `task_list`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transport`
--
ALTER TABLE `transport`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `uaz`
--
ALTER TABLE `uaz`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_productivity`
--
ALTER TABLE `user_productivity`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `wallet`
--
ALTER TABLE `wallet`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `agriculture`
--
ALTER TABLE `agriculture`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `ekuraz`
--
ALTER TABLE `ekuraz`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `filling`
--
ALTER TABLE `filling`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `gaz`
--
ALTER TABLE `gaz`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `hotel`
--
ALTER TABLE `hotel`
  MODIFY `hotel_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `image_image`
--
ALTER TABLE `image_image`
  MODIFY `Id` int(50) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kamaz`
--
ALTER TABLE `kamaz`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `lada`
--
ALTER TABLE `lada`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `oxygen`
--
ALTER TABLE `oxygen`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pharma`
--
ALTER TABLE `pharma`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `project_list`
--
ALTER TABLE `project_list`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `system_settings`
--
ALTER TABLE `system_settings`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `task_list`
--
ALTER TABLE `task_list`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `transport`
--
ALTER TABLE `transport`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `uaz`
--
ALTER TABLE `uaz`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `user_productivity`
--
ALTER TABLE `user_productivity`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `wallet`
--
ALTER TABLE `wallet`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
