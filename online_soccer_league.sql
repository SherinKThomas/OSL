-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 14, 2020 at 06:55 PM
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
-- Table structure for table `club_reg_tbl`
--

CREATE TABLE `club_reg_tbl` (
  `cl_reg_id` int(10) NOT NULL,
  `cl_username` varchar(30) NOT NULL,
  `cl_password` varchar(50) NOT NULL,
  `cl_email` varchar(30) NOT NULL,
  `cl_name` varchar(30) DEFAULT NULL,
  `cl_sponsor` varchar(30) DEFAULT NULL,
  `cl_reg_number` varchar(10) DEFAULT NULL,
  `type` varchar(20) DEFAULT 'club'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
  `c_address` varchar(50) DEFAULT NULL,
  `c_position` varchar(20) DEFAULT NULL,
  `c_prev_club` varchar(30) DEFAULT NULL,
  `type` varchar(10) NOT NULL DEFAULT 'coach'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
  `type` varchar(10) NOT NULL DEFAULT 'player'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
-- Indexes for table `player_reg_tbl`
--
ALTER TABLE `player_reg_tbl`
  ADD PRIMARY KEY (`p_reg_id`);

--
-- Indexes for table `venue_tbl`
--
ALTER TABLE `venue_tbl`
  ADD PRIMARY KEY (`v_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `club_reg_tbl`
--
ALTER TABLE `club_reg_tbl`
  MODIFY `cl_reg_id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `coach_reg_tbl`
--
ALTER TABLE `coach_reg_tbl`
  MODIFY `c_reg_id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `player_reg_tbl`
--
ALTER TABLE `player_reg_tbl`
  MODIFY `p_reg_id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `venue_tbl`
--
ALTER TABLE `venue_tbl`
  MODIFY `v_id` int(10) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
