-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 29, 2019 at 10:16 AM
-- Server version: 5.7.24-0ubuntu0.18.04.1
-- PHP Version: 7.2.10-0ubuntu0.18.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bindass_buddy`
--

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `image_id` varchar(255) NOT NULL,
  `user_id` varchar(255) NOT NULL,
  `image_name` varchar(50) NOT NULL,
  `path` varchar(200) NOT NULL,
  `file_name` varchar(100) NOT NULL,
  `upload_time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`image_id`, `user_id`, `image_name`, `path`, `file_name`, `upload_time`) VALUES
('5cedab5ede247', 'f5d48ad6bf640fc56330a459b237d3e71f91836a', 'anjali', 'uploads/images', '1905291559079774.jpeg', '2019-05-29 03:05:54'),
('5cedb7ad8f7d6', 'f5d48ad6bf640fc56330a459b237d3e71f91836a', 'hgjhkjkj', 'uploads/images', '1905291559082925.jpg', '2019-05-29 04:05:25'),
('5cedb8705514c', 'f5d48ad6bf640fc56330a459b237d3e71f91836a', 'next', 'uploads/images', '1905291559083120.jpeg', '2019-05-29 04:05:40'),
('5cedb98a9f80d', '0a5175623f127e6885acf0477ab758db26ea254e', 'try', 'uploads/images', '1905291559083402.jpg', '2019-05-29 04:05:22');

-- --------------------------------------------------------

--
-- Table structure for table `like_post`
--

CREATE TABLE `like_post` (
  `like_id` varchar(255) NOT NULL,
  `post_id` varchar(255) NOT NULL,
  `user_id` varchar(255) NOT NULL,
  `like_count` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `test`
--

CREATE TABLE `test` (
  `name` varchar(29) NOT NULL,
  `mobile` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `test`
--

INSERT INTO `test` (`name`, `mobile`) VALUES
('Anjali Gupta', ''),
('megha singh', ''),
('Anjali Gupta', ''),
('deeksha ', ''),
('pooja yadav', ''),
('', ''),
('bindass buddy', ''),
('internet', '');

-- --------------------------------------------------------

--
-- Table structure for table `tests`
--

CREATE TABLE `tests` (
  `id` varchar(255) NOT NULL,
  `user_id` varchar(225) DEFAULT NULL,
  `user_info_id` varchar(255) DEFAULT NULL,
  `name` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `dob` date NOT NULL,
  `gender` varchar(1) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(8) NOT NULL,
  `created_date` date NOT NULL,
  `otp` varchar(6) NOT NULL,
  `pwd_reset_link` varchar(255) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `login_count` int(255) NOT NULL,
  `last_login` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `profile_pic` varchar(255) NOT NULL,
  `cover_pic` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `name`, `dob`, `gender`, `phone`, `email`, `password`, `created_date`, `otp`, `pwd_reset_link`, `status`, `login_count`, `last_login`, `profile_pic`, `cover_pic`) VALUES
('0a5175623f127e6885acf0477ab758db26ea254e', 'nishi', '1997-03-06', 'f', '8933890968', 'nishi@gmail.com', 'nishi', '2019-01-06', '', '', 0, 0, '2019-01-07 12:13:30', '', ''),
('3823b5202de70dcdbdcb2fa5ff42d3ad97032882', 'ayushi rawat', '1997-03-06', 'f', '8933890968', 'rawatayushimdh@gmail.com', 'ayushi', '2019-01-18', '', '', 0, 0, '2019-01-18 02:53:01', '', ''),
('8297e3b6bd768d3a57c6be032bb39fceb04338ef', 'abhishek', '1999-02-06', 'm', '9876543210', 'abhishek@gmail.com', 'abhishek', '2019-01-12', '', '', 0, 0, '2019-01-12 07:39:57', '', ''),
('b00f37fc2a1eedcae51e2896fc58f0bd546cbe1a', 'nirupma', '2019-04-05', 'f', '9792055982', 'niru@gmail.com', 'niru', '2019-04-08', '', '', 0, 0, '2019-04-08 09:19:30', '', ''),
('f5d48ad6bf640fc56330a459b237d3e71f91836a', 'Anjali Gupta', '1999-11-01', 'f', '9792055982', 'anjalianshu3@gmail.com', 'anjali', '2019-01-21', '', '', 0, 0, '2019-01-21 05:39:14', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `user_info`
--

CREATE TABLE `user_info` (
  `user_info_id` varchar(255) NOT NULL,
  `user_id` varchar(225) NOT NULL,
  `city` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `highschool` varchar(255) NOT NULL,
  `university` varchar(255) NOT NULL,
  `college` varchar(255) NOT NULL,
  `working_profile` varchar(255) NOT NULL,
  `about_me` varchar(255) NOT NULL,
  `skills` varchar(225) NOT NULL,
  `interests` varchar(225) NOT NULL,
  `hobby` varchar(225) NOT NULL,
  `social_view` varchar(225) NOT NULL,
  `political_view` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_info`
--

INSERT INTO `user_info` (`user_info_id`, `user_id`, `city`, `state`, `country`, `highschool`, `university`, `college`, `working_profile`, `about_me`, `skills`, `interests`, `hobby`, `social_view`, `political_view`) VALUES
('5c371ffa14637', 'd9dfd780329256e70669d7e983e6f63521b1f542', 'hcddcbhfdxh', 'a', 'a', 'a', 'a', 'aa', 'a', 'a', 'aa', 'a', 'a', 'a', 'aa'),
('5c46ca3fe4c49', 'f5d48ad6bf640fc56330a459b237d3e71f91836a', 'udaipur', 'rajasthan', 'india', 'NJMS', 'BTEUP', 'GGPL', 'student', 'kya krogye jan kr', 'painting', 'painting', 'dancing', 'kya krogye jan kr', 'kya krogye jan kr'),
('5ca1d3bc26962', '0a5175623f127e6885acf0477ab758db26ea254e', 'b', 'b', 'b', 'NJMS', 'b', 'b', 'student', 'b', 'painting', 'painting', 'b', 'b', 'b');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`image_id`);

--
-- Indexes for table `tests`
--
ALTER TABLE `tests`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `image_id` (`user_info_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `user_info`
--
ALTER TABLE `user_info`
  ADD PRIMARY KEY (`user_info_id`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tests`
--
ALTER TABLE `tests`
  ADD CONSTRAINT `tests_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`),
  ADD CONSTRAINT `tests_ibfk_2` FOREIGN KEY (`user_info_id`) REFERENCES `images` (`image_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
