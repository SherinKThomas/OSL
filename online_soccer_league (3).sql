-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 19, 2021 at 08:01 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `online soccer league`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_tbl`
--

CREATE TABLE `admin_tbl` (
  `ad_reg_id` int(10) NOT NULL,
  `ad_name` varchar(30) NOT NULL,
  `ad_username` varchar(30) NOT NULL,
  `ad_email` varchar(30) NOT NULL,
  `ad_password` varchar(50) NOT NULL,
  `ad_phone` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `club_coach`
--

CREATE TABLE `club_coach` (
  `id` int(10) NOT NULL,
  `cl_reg_id` int(10) NOT NULL,
  `c_reg_id` int(10) NOT NULL,
  `status` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `club_coach`
--

INSERT INTO `club_coach` (`id`, `cl_reg_id`, `c_reg_id`, `status`) VALUES
(3, 5, 6, 1);

-- --------------------------------------------------------

--
-- Table structure for table `club_members`
--

CREATE TABLE `club_members` (
  `id` int(10) NOT NULL,
  `club_id` int(10) NOT NULL,
  `player_id` int(10) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `club_members`
--

INSERT INTO `club_members` (`id`, `club_id`, `player_id`, `status`) VALUES
(7, 5, 12, 1),
(8, 5, 14, 1);

-- --------------------------------------------------------

--
-- Table structure for table `club_reg_tbl`
--

CREATE TABLE `club_reg_tbl` (
  `cl_reg_id` int(10) NOT NULL,
  `cl_username` varchar(30) NOT NULL,
  `cl_password` varchar(50) NOT NULL,
  `cl_email` varchar(30) NOT NULL,
  `cl_name` varchar(30) DEFAULT NULL,
  `cl_address` varchar(50) DEFAULT NULL,
  `cl_sponsor` varchar(30) DEFAULT NULL,
  `cl_reg_number` varchar(10) DEFAULT NULL,
  `cl_phone` varchar(10) DEFAULT NULL,
  `cl_place` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `club_reg_tbl`
--

INSERT INTO `club_reg_tbl` (`cl_reg_id`, `cl_username`, `cl_password`, `cl_email`, `cl_name`, `cl_address`, `cl_sponsor`, `cl_reg_number`, `cl_phone`, `cl_place`) VALUES
(5, 'Kerala12', 'f17f335e51e366141178e7b967ea150a', 'Kerala12@gmail.com', 'Kerala Blasters', 'Kerala', 'Kingfisher', 'KL12345', '9446600812', 'Kerala'),
(6, 'Goa12', 'a8e14510e73317ab97d9acfe14dc94af', 'Goa12@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `coach_reg_tbl`
--

CREATE TABLE `coach_reg_tbl` (
  `c_reg_id` int(10) NOT NULL,
  `c_username` varchar(30) NOT NULL,
  `c_password` varchar(50) NOT NULL,
  `c_email` varchar(30) NOT NULL,
  `c_name` varchar(30) DEFAULT NULL,
  `c_age` varchar(5) DEFAULT NULL,
  `c_gender` varchar(6) DEFAULT NULL,
  `c_address` varchar(50) DEFAULT NULL,
  `c_exp` varchar(20) DEFAULT NULL,
  `c_pre_club` varchar(30) DEFAULT NULL,
  `c_phone` varchar(10) DEFAULT NULL,
  `c_city` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `coach_reg_tbl`
--

INSERT INTO `coach_reg_tbl` (`c_reg_id`, `c_username`, `c_password`, `c_email`, `c_name`, `c_age`, `c_gender`, `c_address`, `c_exp`, `c_pre_club`, `c_phone`, `c_city`) VALUES
(6, 'Moncy12', '17d8bda8af2fdc025d98168cd337a30d', 'Moncy@gmail.com', 'Moncy', '55', 'male', 'Moncy House', '2 years in KBFC', 'ATK', '9087654321', 'PTA'),
(7, 'Sandes12', '068defed982d1271558a195fb52cbf23', 'Sandes@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `coach_req_tbl`
--

CREATE TABLE `coach_req_tbl` (
  `co_req_id` int(10) NOT NULL,
  `cl_reg_id` int(10) NOT NULL,
  `c_reg_id` int(10) NOT NULL,
  `status` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `coach_req_tbl`
--

INSERT INTO `coach_req_tbl` (`co_req_id`, `cl_reg_id`, `c_reg_id`, `status`) VALUES
(2, 5, 6, 1),
(3, 5, 5, 0);

-- --------------------------------------------------------

--
-- Table structure for table `player_reg_tbl`
--

CREATE TABLE `player_reg_tbl` (
  `p_reg_id` int(10) NOT NULL,
  `p_username` varchar(30) NOT NULL,
  `p_password` varchar(50) NOT NULL,
  `p_email` varchar(30) NOT NULL,
  `p_name` varchar(30) DEFAULT NULL,
  `p_age` varchar(5) DEFAULT NULL,
  `p_address` varchar(50) DEFAULT NULL,
  `p_position` varchar(20) DEFAULT NULL,
  `p_pre_club` varchar(30) DEFAULT NULL,
  `p_city` varchar(20) DEFAULT NULL,
  `p_phone` varchar(10) DEFAULT NULL,
  `p_gender` varchar(6) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `player_reg_tbl`
--

INSERT INTO `player_reg_tbl` (`p_reg_id`, `p_username`, `p_password`, `p_email`, `p_name`, `p_age`, `p_address`, `p_position`, `p_pre_club`, `p_city`, `p_phone`, `p_gender`) VALUES
(12, 'Sherin12', '929eba325d5cfc2438fbb9224c4d6c89', 'sherinkthomas1212@gmail.com', 'Sherin K Thomas ', '25', 'Koikkamavumkal House', 'Stricker', 'KBFC', 'Kottayam', '9074140407', 'male'),
(13, 'Ahil12', '19a6515ac94a5b0dc1d904eebe73deeb', 'Ahil@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(14, 'Jinson12', 'a3fd330252056d36afa9f32959a5af0a', 'Jinson@gmail.com', 'Jinson Davis', '50', 'Koovapally', 'Stricker', 'Kolkatta', 'Kottayam', '9087654321', 'male');

-- --------------------------------------------------------

--
-- Table structure for table `req_tbl`
--

CREATE TABLE `req_tbl` (
  `req_id` int(10) NOT NULL,
  `p_reg_id` int(10) DEFAULT NULL,
  `cl_reg_id` int(10) NOT NULL,
  `status` int(20) NOT NULL,
  `c_reg_id` int(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `req_tbl`
--

INSERT INTO `req_tbl` (`req_id`, `p_reg_id`, `cl_reg_id`, `status`, `c_reg_id`) VALUES
(7, 12, 5, 1, NULL),
(8, 14, 5, 1, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `venue_tbl`
--

CREATE TABLE `venue_tbl` (
  `v_id` int(10) NOT NULL,
  `v_name` varchar(30) NOT NULL,
  `v_place` varchar(30) NOT NULL,
  `v_open_time` varchar(10) NOT NULL,
  `v_close_time` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_tbl`
--
ALTER TABLE `admin_tbl`
  ADD PRIMARY KEY (`ad_reg_id`);

--
-- Indexes for table `club_coach`
--
ALTER TABLE `club_coach`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `club_members`
--
ALTER TABLE `club_members`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `club_reg_tbl`
--
ALTER TABLE `club_reg_tbl`
  ADD PRIMARY KEY (`cl_reg_id`);

--
-- Indexes for table `coach_reg_tbl`
--
ALTER TABLE `coach_reg_tbl`
  ADD PRIMARY KEY (`c_reg_id`);

--
-- Indexes for table `coach_req_tbl`
--
ALTER TABLE `coach_req_tbl`
  ADD PRIMARY KEY (`co_req_id`);

--
-- Indexes for table `player_reg_tbl`
--
ALTER TABLE `player_reg_tbl`
  ADD PRIMARY KEY (`p_reg_id`);

--
-- Indexes for table `req_tbl`
--
ALTER TABLE `req_tbl`
  ADD PRIMARY KEY (`req_id`);

--
-- Indexes for table `venue_tbl`
--
ALTER TABLE `venue_tbl`
  ADD PRIMARY KEY (`v_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_tbl`
--
ALTER TABLE `admin_tbl`
  MODIFY `ad_reg_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1002;

--
-- AUTO_INCREMENT for table `club_coach`
--
ALTER TABLE `club_coach`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `club_members`
--
ALTER TABLE `club_members`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `club_reg_tbl`
--
ALTER TABLE `club_reg_tbl`
  MODIFY `cl_reg_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `coach_reg_tbl`
--
ALTER TABLE `coach_reg_tbl`
  MODIFY `c_reg_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `coach_req_tbl`
--
ALTER TABLE `coach_req_tbl`
  MODIFY `co_req_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `player_reg_tbl`
--
ALTER TABLE `player_reg_tbl`
  MODIFY `p_reg_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `req_tbl`
--
ALTER TABLE `req_tbl`
  MODIFY `req_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `venue_tbl`
--
ALTER TABLE `venue_tbl`
  MODIFY `v_id` int(10) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
