-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 08, 2022 at 08:43 AM
-- Server version: 5.7.14
-- PHP Version: 7.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `apeita`
--

-- --------------------------------------------------------

--
-- Table structure for table `canteen`
--

CREATE TABLE `canteen` (
  `id` int(100) NOT NULL,
  `itemname` varchar(100) NOT NULL,
  `price` int(100) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `canteen`
--

INSERT INTO `canteen` (`id`, `itemname`, `price`, `image`) VALUES
(18, 'specail biriyani', 100, 'abt_ltr_img.png');

-- --------------------------------------------------------

--
-- Table structure for table `complaints`
--

CREATE TABLE `complaints` (
  `id` int(11) NOT NULL,
  `complaint_Type` varchar(100) NOT NULL,
  `description` varchar(250) NOT NULL,
  `image` varchar(100) NOT NULL,
  `status` int(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `complaints`
--

INSERT INTO `complaints` (`id`, `complaint_Type`, `description`, `image`, `status`) VALUES
(94, 'security', 'jyotheesewarreddii', '', 1),
(110, 'Admin', 'jyotheesewarreddy.', '', 0),
(112, 'staff', 'festival', 'Screenshot (1).png', 1),
(113, 'manager', 'reddy', '', 1),
(114, '', 'jyotheesewarreddii', '', 0),
(115, 'office', 'jyotheesewarreddy.', '', 1),
(121, 'security', 'cleaning', 'Screenshot (1).png', 0),
(126, 'staff', 'malavika', 'Screenshot (2).png', 1),
(131, 'canteen', 'food not good', 'abt_ltr_img.png', 0),
(133, 'maintainance', 'hyuhyhui', 'blog_2.png', 0);

-- --------------------------------------------------------

--
-- Table structure for table `notifications2`
--

CREATE TABLE `notifications2` (
  `id` int(15) NOT NULL,
  `subjectofNotification` varchar(50) NOT NULL,
  `MessageofNotifications` varchar(250) NOT NULL,
  `image` varchar(200) NOT NULL,
  `status` int(2) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `notifications2`
--

INSERT INTO `notifications2` (`id`, `subjectofNotification`, `MessageofNotifications`, `image`, `status`) VALUES
(107, ' ugadi  JATHARA', 'perment work from home', '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `rent`
--

CREATE TABLE `rent` (
  `id` int(100) NOT NULL,
  `SelectCompanys` varchar(50) NOT NULL,
  `RentAmount` int(20) NOT NULL,
  `Rentaldate` varchar(10) NOT NULL,
  `status` int(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `rent`
--

INSERT INTO `rent` (`id`, `SelectCompanys`, `RentAmount`, `Rentaldate`, `status`) VALUES
(3, 'Integer Telecom', 500, '2022-08', 1),
(5, 'Conflux systems', 60000, '2022-12', 0),
(9, 'Sagar Software Solutions pvt ltd', 200, '2022-07', 1),
(10, 'Conflux systems', 200, '2022-01', 0),
(12, 'Sagar Software Solutions pvt ltd', 200, '2022-06', 0),
(14, 'sagar software solutions pvt ltd', 200, '20222-06', 0),
(15, 'sagar software solutions pvt ltd', 100, '20222-02', 0);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(20) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mobileno` varchar(20) NOT NULL,
  `password` varchar(50) NOT NULL,
  `company` varchar(100) NOT NULL,
  `role` varchar(20) NOT NULL,
  `status` int(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `mobileno`, `password`, `company`, `role`, `status`) VALUES
(1, 'admin', '   admin@gmail.com', '8989898111', 'Admin', 'Sagar Software Solutions pvt ltd', 'admin', 1),
(2, 'raja', 'raju123@gmail.com', '8231456982', 'staff', 'Sagar Software Solutions pvt ltd', 'staff', 1),
(3, 'jyothi', ' jyothi@gmail.com', '1234567811', 'manager', 'Sagar Software Solutions pvt ltd', 'manager', 1),
(4, 'jyothi', ' sjyotheeswarreddy@gmail.com', '8886758610', 'security', 'Sagar Software Solutions pvt ltd', 'security', 1),
(5, 'prakash', 'jp1@gmail.com', '8231456980', 'office', 'Sagar Software Solutions pvt ltd', 'office', 1),
(6, 'ramya', 'ramya@gmail.com', '7418520960', 'canteen', 'Sagar Software Solutions pvt ltd', 'canteen', 1),
(7, 'Malavika', 'madhuri123@gmail.com', '9999999999', '123', 'iGen American soft', 'office', 1),
(8, 'Dhanista', '111@gmail.com', '9999999999', '000', 'Sagar Software Solutions pvt ltd', 'office', 1),
(9, 'sujana', 'staff@gmail.com', '9123456789', '1', 'iGen American soft', 'staff', 1),
(10, 'malavika', 'malu@gmail.com', '9898989898', '1111', 'Conflux Systems', 'canteen', 1),
(15, 'anil kumar', 'anil@gmail.com', '9949878554', 'anil@123', 'sagar software solutions pvt ltd', 'office', 1);

-- --------------------------------------------------------

--
-- Table structure for table `visitor`
--

CREATE TABLE `visitor` (
  `id` int(20) NOT NULL,
  `name` varchar(50) NOT NULL,
  `company` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mobile` bigint(20) NOT NULL,
  `purpose` varchar(100) NOT NULL,
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `visitor`
--

INSERT INTO `visitor` (`id`, `name`, `company`, `email`, `mobile`, `purpose`, `status`) VALUES
(38, 'jyotheeswar reddy', 'Sagar Software Solutions pvt ltd', 'sjyotheeswarreddy@gmail.com', 8886758615, 'resign letter', 0),
(63, 's jyotheeswar reddy', 'Sagar Software Solutions pvt ltd', 'user1@gmail.com', 8886758615, 'to meet friend', 1),
(64, 's jyotheeswar reddy', 'Conflux systems', 'ashikaf@gmail.com', 7894561230, 'harish', 1),
(71, 'dhanista', 'Sagar Software Solutions pvt ltd', 'dhanista.m@gmail.com', 9999999999, 'to meet friend', 1),
(72, 'malavika', 'Sagar Software Solutions pvt ltd', 'manikyammalavika@gmail.com', 9999999999, 'to meet friend', 1),
(73, 'dhanista', 'Sagar Software Solutions pvt ltd', 'dhanista.m@gmail.com', 9435634234, 'letter', 1),
(74, 'malavika', 'iGen American soft', 'manikyammalavika@gmail.com', 9999999999, 'offer letter', 1),
(76, 'bobby', 'Sagar Software Solutions pvt ltd', 'ak494011@gmail.com', 9984568997, 'meet friend', 1),
(77, 'kumar', 'Sagar Software Solutions pvt ltd', 'ak494011@gmail.com', 9984568998, 'meet friends', 1),
(80, 'kumar', 'Conflux systems', 'ak494011@gmail.com', 9984568997, 'meet friends', 0),
(87, 'kumar', 'Sagar Software Solutions pvt ltd', 'ak494011@gmail.com', 9984568956, 'meet friends', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `canteen`
--
ALTER TABLE `canteen`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `complaints`
--
ALTER TABLE `complaints`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notifications2`
--
ALTER TABLE `notifications2`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rent`
--
ALTER TABLE `rent`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `visitor`
--
ALTER TABLE `visitor`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `canteen`
--
ALTER TABLE `canteen`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
--
-- AUTO_INCREMENT for table `complaints`
--
ALTER TABLE `complaints`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=137;
--
-- AUTO_INCREMENT for table `notifications2`
--
ALTER TABLE `notifications2`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=118;
--
-- AUTO_INCREMENT for table `rent`
--
ALTER TABLE `rent`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `visitor`
--
ALTER TABLE `visitor`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=88;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
