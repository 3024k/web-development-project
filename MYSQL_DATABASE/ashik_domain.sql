-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 18, 2017 at 05:53 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ashik_domain`
--

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `Name` varchar(20) DEFAULT NULL,
  `Email` varchar(50) DEFAULT NULL,
  `Comment` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `contests`
--

CREATE TABLE `contests` (
  `contest_id` int(10) NOT NULL,
  `contest_title` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contests`
--

INSERT INTO `contests` (`contest_id`, `contest_title`) VALUES
(1, 'Light Oj'),
(2, 'Uva'),
(3, 'Codeforces'),
(4, 'Hacker Rank');

-- --------------------------------------------------------

--
-- Table structure for table `new_post`
--

CREATE TABLE `new_post` (
  `post_title` text NOT NULL,
  `post_cat` text NOT NULL,
  `Image1` text NOT NULL,
  `Image2` text NOT NULL,
  `Image3` text NOT NULL,
  `post_desc` text NOT NULL,
  `Date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `post_no` int(11) NOT NULL,
  `post_key` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `problems`
--

CREATE TABLE `problems` (
  `problem_id` int(10) NOT NULL,
  `contest_id` int(10) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `problem_title` text NOT NULL,
  `problem_link` text NOT NULL,
  `problem_desc` text NOT NULL,
  `solution` text NOT NULL,
  `Serial_no` int(10) NOT NULL,
  `problem_key` varchar(255) NOT NULL,
  `status` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `problems`
--

INSERT INTO `problems` (`problem_id`, `contest_id`, `date`, `problem_title`, `problem_link`, `problem_desc`, `solution`, `Serial_no`, `problem_key`, `status`) VALUES
(371, 2, '2016-10-21 09:14:04', 'Ackermann Functions', 'https://uva.onlinejudge.org/index.php?option=com_onlinejudge&Itemid=8&page=show_problem&problem=307', '<div style="left: 23.6167px; top: 26.8497px; font-size: 16.605px; font-family: serif; transform: scaleX(1.12519);" data-canvas-width="741.761955">An Ackermann function has the characteristic that the length of the sequence of numbers generated</div>\r\n<div style="left: 23.6167px; top: 46.7664px; font-size: 16.605px; font-family: serif; transform: scaleX(1.11042);" data-canvas-width="741.77856">by the function cannot be computed directly from the input value. One particular integer Ackermann</div>\r\n<div style="left: 23.6167px; top: 66.6997px; font-size: 16.605px; font-family: serif; transform: scaleX(1.06673);" data-canvas-width="179.56646999999998">function is the following:</div>\r\n<div style="left: 266.45px; top: 102.693px; font-size: 16.605px; font-family: serif;">X</div>\r\n<div style="left: 280.217px; top: 108.633px; font-size: 11.6233px; font-family: serif;">n</div>\r\n<div style="left: 288.417px; top: 108.633px; font-size: 11.6233px; font-family: serif; transform: scaleX(1.36129);" data-canvas-width="16.81198933333333">+1</div>\r\n<div style="left: 310.667px; top: 102.693px; font-size: 16.605px; font-family: serif; transform: scaleX(1.25351);" data-canvas-width="17.528237999999998">:=</div>\r\n<div style="left: 332.817px; top: 69.2117px; font-size: 16.605px; font-family: monospace;">{</div>\r\n<div style="left: 348.183px; top: 88.0167px; font-size: 11.6233px; font-family: serif;">X</div>\r\n<div style="left: 359.067px; top: 91.9886px; font-size: 8.30167px; font-family: monospace;">n</div>\r\n<div style="left: 354.383px; top: 100.55px; font-size: 11.6233px; font-family: serif;">2</div>\r\n<div style="left: 428.017px; top: 89.4997px; font-size: 16.605px; font-family: serif; transform: scaleX(0.955401);" data-canvas-width="9.697319999999998">if</div>\r\n<div style="left: 443.233px; top: 91.3595px; font-size: 16.605px; font-family: serif;">X</div>\r\n<div style="left: 457px; top: 97.3167px; font-size: 11.6233px; font-family: serif;">n</div>\r\n<div style="left: 471.567px; top: 89.4997px; font-size: 16.605px; font-family: serif; transform: scaleX(1.05157);" data-canvas-width="48.968145">is even</div>\r\n<div style="left: 346.183px; top: 115.276px; font-size: 16.605px; font-family: serif;">3</div>\r\n<div style="left: 354.483px; top: 115.276px; font-size: 16.605px; font-family: serif;">X</div>\r\n<div style="left: 368.25px; top: 121.233px; font-size: 11.6233px; font-family: serif;">n</div>\r\n<div style="left: 380.967px; top: 115.276px; font-size: 16.605px; font-family: serif; transform: scaleX(1.14152);" data-canvas-width="24.904178999999992">+ 1</div>\r\n<div style="left: 428.017px; top: 113.416px; font-size: 16.605px; font-family: serif; transform: scaleX(0.955401);" data-canvas-width="9.697319999999998">if</div>\r\n<div style="left: 443.233px; top: 115.276px; font-size: 16.605px; font-family: serif;">X</div>\r\n<div style="left: 457px; top: 121.233px; font-size: 11.6233px; font-family: serif;">n</div>\r\n<div style="left: 471.567px; top: 113.416px; font-size: 16.605px; font-family: serif; transform: scaleX(1.09394);" data-canvas-width="43.90362">is odd</div>', 'uva 371().cpp', 4, 'uva 371 solution', 'on'),
(555, 1, '2016-11-05 04:49:09', 'uyuioo', 'hjkll;[;', 'uuuuuuuuuuuuuuu', '10921.c', 5, 'uui', 'on');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `surname` varchar(50) NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `email` text NOT NULL,
  `password` text NOT NULL,
  `retype_password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `first_name`, `surname`, `user_name`, `email`, `password`, `retype_password`) VALUES
(1, 'Humayun Ahmed', 'Ashik', '3024k_ruet', '3024hik@gmail.com ', '*3024*Ak#', '*3024*Ak# '),
(2, 'Rezaul', 'Karim', 'rezacse13', 'reza132gmail.com ', 'rezareza', 'rezareza ');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contests`
--
ALTER TABLE `contests`
  ADD PRIMARY KEY (`contest_id`);

--
-- Indexes for table `new_post`
--
ALTER TABLE `new_post`
  ADD PRIMARY KEY (`post_no`);

--
-- Indexes for table `problems`
--
ALTER TABLE `problems`
  ADD PRIMARY KEY (`Serial_no`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contests`
--
ALTER TABLE `contests`
  MODIFY `contest_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `new_post`
--
ALTER TABLE `new_post`
  MODIFY `post_no` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `problems`
--
ALTER TABLE `problems`
  MODIFY `Serial_no` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
