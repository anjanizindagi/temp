-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jan 07, 2019 at 06:11 PM
-- Server version: 5.7.21-1ubuntu1
-- PHP Version: 7.2.3-1ubuntu1

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
  `path` varchar(255) NOT NULL,
  `file_name` varchar(100) NOT NULL,
  `upload_time` datetime NOT NULL
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
  `created_date` datetime NOT NULL,
  `otp` varchar(6) NOT NULL,
  `pwd_reset_link` varchar(255) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `login_count` int(255) NOT NULL,
  `last_login` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `img_url` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `name`, `dob`, `gender`, `phone`, `email`, `password`, `created_date`, `otp`, `pwd_reset_link`, `status`, `login_count`, `last_login`, `img_url`) VALUES
('d9dfd780329256e70669d7e983e6f63521b1f542', 'nishi', '1997-03-06', 'f', '8933890968', 'ayushi@gmail.com', 'ayushi', '2019-01-06 00:00:00', '', '', 0, 0, '2019-01-07 12:13:30', ''),
('0a5175623f127e6885acf0477ab758db26ea254e', 'nishi', '1997-03-06', 'f', '8933890968', 'nishi@gmail.com', 'nishi', '2019-01-06 00:00:00', '', '', 0, 0, '2019-01-07 12:13:30', '');

-- --------------------------------------------------------

--
-- Table structure for table `user_info`
--

CREATE TABLE `user_info` (
  `user_info_id` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `highschool` varchar(255) NOT NULL,
  `intermediate` varchar(255) NOT NULL,
  `college` varchar(255) NOT NULL,
  `working_profile` varchar(255) NOT NULL,
  `about_me` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD UNIQUE KEY `email` (`email`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
