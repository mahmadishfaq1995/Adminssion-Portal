-- phpMyAdmin SQL Dump
-- version 4.4.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 17, 2017 at 06:10 PM
-- Server version: 5.6.25
-- PHP Version: 5.6.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `university`
--

-- --------------------------------------------------------

--
-- Table structure for table `acadamic_info`
--

CREATE TABLE IF NOT EXISTS `acadamic_info` (
  `register_id` int(6) NOT NULL DEFAULT '0',
  `ainfo_id` int(6) NOT NULL,
  `year_matric` int(4) NOT NULL,
  `rollno_matric` int(11) NOT NULL,
  `marks_matric` int(4) NOT NULL,
  `total_matric` int(4) NOT NULL,
  `board_matric` varchar(50) NOT NULL,
  `year_inter1` int(4) DEFAULT NULL,
  `rollno_inter1` int(11) DEFAULT NULL,
  `marks_inter1` int(4) DEFAULT NULL,
  `total_inter1` int(4) DEFAULT NULL,
  `major_inter1` varchar(50) DEFAULT NULL,
  `board_inter1` varchar(50) DEFAULT NULL,
  `year_inter2` int(11) NOT NULL,
  `rollno_inter2` int(11) NOT NULL,
  `marks_inter2` int(11) DEFAULT NULL,
  `total_inter2` int(11) DEFAULT NULL,
  `major_inter2` varchar(50) NOT NULL,
  `board_inter2` varchar(50) NOT NULL,
  `form_submitted_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `course_offering`
--

CREATE TABLE IF NOT EXISTS `course_offering` (
  `course_id` int(11) NOT NULL,
  `map_id` int(11) NOT NULL,
  `course_code` varchar(50) NOT NULL,
  `course_title` varchar(100) NOT NULL,
  `credit_hours` varchar(50) NOT NULL,
  `semester` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `faculty`
--

CREATE TABLE IF NOT EXISTS `faculty` (
  `faculty_id` int(11) NOT NULL,
  `faculty_name` varchar(50) NOT NULL,
  `designation` varchar(50) NOT NULL,
  `description` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `mail`
--

CREATE TABLE IF NOT EXISTS `mail` (
  `mail_id` int(11) NOT NULL,
  `sender_name` varchar(100) NOT NULL,
  `sender` varchar(100) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `message` text NOT NULL,
  `message_date` date NOT NULL,
  `status` varchar(50) NOT NULL,
  `reply` text NOT NULL,
  `replied_by` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `notice_board`
--

CREATE TABLE IF NOT EXISTS `notice_board` (
  `notice_id` int(11) NOT NULL,
  `notice_type` varchar(20) NOT NULL,
  `notice_desc` varchar(200) NOT NULL,
  `notice_note` varchar(100) NOT NULL,
  `notice_link` varchar(300) NOT NULL,
  `added_by` varchar(50) NOT NULL,
  `added_on` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `personal_info`
--

CREATE TABLE IF NOT EXISTS `personal_info` (
  `pinfo_id` int(6) NOT NULL,
  `register_id` int(6) NOT NULL,
  `name` varchar(50) NOT NULL,
  `dob` date NOT NULL,
  `gender` varchar(6) NOT NULL,
  `cnic` char(13) NOT NULL,
  `relation` varchar(20) NOT NULL DEFAULT 'father',
  `father_name` varchar(50) NOT NULL,
  `father_cnic` char(13) NOT NULL,
  `father_income` varchar(8) NOT NULL,
  `phone_no` varchar(15) DEFAULT NULL,
  `mobile_no` char(11) NOT NULL,
  `email` varchar(60) NOT NULL,
  `address` varchar(200) NOT NULL,
  `district` varchar(30) NOT NULL,
  `image` varchar(12) NOT NULL,
  `form_submitted_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `regsiter`
--

CREATE TABLE IF NOT EXISTS `regsiter` (
  `register_id` int(6) NOT NULL,
  `roll_no` int(6) NOT NULL DEFAULT '0',
  `pset` char(1) NOT NULL,
  `full_name` varchar(50) NOT NULL,
  `cnic` char(13) NOT NULL,
  `email` varchar(60) NOT NULL,
  `gender` varchar(6) NOT NULL,
  `username` varchar(25) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(25) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `access_right` varchar(10) NOT NULL DEFAULT 'user',
  `pinfo_status` enum('0','1') NOT NULL DEFAULT '0',
  `form_status` enum('0','1') NOT NULL DEFAULT '0',
  `submit_form` enum('0','1') NOT NULL DEFAULT '0',
  `challan_verify_status` enum('0','1') DEFAULT '0',
  `challan_verify_type` varchar(50) DEFAULT NULL,
  `register_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `challan_versify_timestamp` datetime DEFAULT NULL,
  `testmarks` int(2) DEFAULT NULL,
  `ishafiz` enum('0','1') NOT NULL DEFAULT '0',
  `aggregate` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `resultupload`
--

CREATE TABLE IF NOT EXISTS `resultupload` (
  `ID` int(6) NOT NULL,
  `registerid` int(6) DEFAULT NULL,
  `CNIC` varchar(13) DEFAULT NULL,
  `Rollnumber` int(5) DEFAULT NULL,
  `testmarks` int(2) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COMMENT='intermediate table to import csv file';

-- --------------------------------------------------------

--
-- Table structure for table `roadmap`
--

CREATE TABLE IF NOT EXISTS `roadmap` (
  `map_id` int(11) NOT NULL,
  `map_degree` varchar(50) NOT NULL,
  `map_semesters` int(11) NOT NULL,
  `updated_by` int(11) NOT NULL,
  `updated_on` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `seatingplan`
--

CREATE TABLE IF NOT EXISTS `seatingplan` (
  `roomid` int(3) unsigned zerofill NOT NULL DEFAULT '000',
  `room` varchar(40) DEFAULT NULL,
  `block` varchar(40) DEFAULT NULL,
  `building` varchar(25) DEFAULT NULL,
  `capacity` smallint(5) unsigned zerofill DEFAULT NULL,
  `sequencefrom` int(5) DEFAULT NULL,
  `sequenceto` int(5) DEFAULT NULL,
  `inv` int(11) DEFAULT NULL,
  `sup` int(1) DEFAULT NULL,
  `batch` int(2) NOT NULL,
  `rollnumberfrom` smallint(5) unsigned zerofill DEFAULT NULL,
  `rollnumberto` smallint(5) unsigned zerofill DEFAULT NULL,
  `gender` char(6) DEFAULT NULL,
  `allocated` bit(1) DEFAULT NULL,
  `entry` varchar(25) DEFAULT NULL,
  `reportingtime` char(12) NOT NULL,
  `starttime` char(12) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `seatingplan1`
--

CREATE TABLE IF NOT EXISTS `seatingplan1` (
  `roomid` int(3) unsigned zerofill NOT NULL DEFAULT '000',
  `room` varchar(40) DEFAULT NULL,
  `block` varchar(40) DEFAULT NULL,
  `building` varchar(25) DEFAULT NULL,
  `capacity` smallint(5) unsigned zerofill DEFAULT NULL,
  `sequencefrom` int(5) DEFAULT NULL,
  `sequenceto` int(5) DEFAULT NULL,
  `inv` int(11) DEFAULT NULL,
  `sup` int(1) DEFAULT NULL,
  `batch` int(2) NOT NULL,
  `rollnumberfrom` smallint(5) unsigned zerofill DEFAULT NULL,
  `rollnumberto` smallint(5) unsigned zerofill DEFAULT NULL,
  `gender` char(6) DEFAULT NULL,
  `allocated` bit(1) DEFAULT NULL,
  `entry` varchar(25) DEFAULT NULL,
  `reportingtime` char(12) NOT NULL,
  `starttime` char(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `table 14`
--

CREATE TABLE IF NOT EXISTS `table 14` (
  `rollnumber` varchar(5) DEFAULT NULL,
  `marks` varchar(2) DEFAULT NULL,
  `COL 3` varchar(18) DEFAULT NULL,
  `rollnumber2` int(5) DEFAULT NULL,
  `marks2` int(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_challan_submit`
--

CREATE TABLE IF NOT EXISTS `tbl_challan_submit` (
  `challan_id` int(11) NOT NULL,
  `register_id` int(11) NOT NULL,
  `challan_img` varchar(200) NOT NULL,
  `is_verified` enum('0','1') NOT NULL DEFAULT '0',
  `submitted_on` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `test_result`
--

CREATE TABLE IF NOT EXISTS `test_result` (
  `result_id` int(11) NOT NULL,
  `register_id` int(11) NOT NULL,
  `total_marks` int(11) NOT NULL DEFAULT '50',
  `marks_obtained` int(11) NOT NULL DEFAULT '0',
  `matric_marks` int(11) NOT NULL,
  `inter1_marks` int(11) NOT NULL,
  `inter2_marks` int(11) NOT NULL,
  `result_percentage` int(11) NOT NULL DEFAULT '0',
  `result_status` varchar(50) NOT NULL DEFAULT 'none'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `acadamic_info`
--
ALTER TABLE `acadamic_info`
  ADD PRIMARY KEY (`ainfo_id`),
  ADD UNIQUE KEY `register_id` (`register_id`);

--
-- Indexes for table `course_offering`
--
ALTER TABLE `course_offering`
  ADD PRIMARY KEY (`course_id`);

--
-- Indexes for table `faculty`
--
ALTER TABLE `faculty`
  ADD PRIMARY KEY (`faculty_id`);

--
-- Indexes for table `mail`
--
ALTER TABLE `mail`
  ADD PRIMARY KEY (`mail_id`);

--
-- Indexes for table `notice_board`
--
ALTER TABLE `notice_board`
  ADD PRIMARY KEY (`notice_id`);

--
-- Indexes for table `personal_info`
--
ALTER TABLE `personal_info`
  ADD PRIMARY KEY (`pinfo_id`),
  ADD UNIQUE KEY `register_id` (`register_id`);

--
-- Indexes for table `regsiter`
--
ALTER TABLE `regsiter`
  ADD PRIMARY KEY (`register_id`),
  ADD UNIQUE KEY `cnic` (`cnic`);

--
-- Indexes for table `resultupload`
--
ALTER TABLE `resultupload`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `roadmap`
--
ALTER TABLE `roadmap`
  ADD PRIMARY KEY (`map_id`);

--
-- Indexes for table `seatingplan`
--
ALTER TABLE `seatingplan`
  ADD PRIMARY KEY (`roomid`);

--
-- Indexes for table `tbl_challan_submit`
--
ALTER TABLE `tbl_challan_submit`
  ADD PRIMARY KEY (`challan_id`);

--
-- Indexes for table `test_result`
--
ALTER TABLE `test_result`
  ADD PRIMARY KEY (`result_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `acadamic_info`
--
ALTER TABLE `acadamic_info`
  MODIFY `ainfo_id` int(6) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `course_offering`
--
ALTER TABLE `course_offering`
  MODIFY `course_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `faculty`
--
ALTER TABLE `faculty`
  MODIFY `faculty_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `mail`
--
ALTER TABLE `mail`
  MODIFY `mail_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `notice_board`
--
ALTER TABLE `notice_board`
  MODIFY `notice_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `personal_info`
--
ALTER TABLE `personal_info`
  MODIFY `pinfo_id` int(6) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `regsiter`
--
ALTER TABLE `regsiter`
  MODIFY `register_id` int(6) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `resultupload`
--
ALTER TABLE `resultupload`
  MODIFY `ID` int(6) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `roadmap`
--
ALTER TABLE `roadmap`
  MODIFY `map_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_challan_submit`
--
ALTER TABLE `tbl_challan_submit`
  MODIFY `challan_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `test_result`
--
ALTER TABLE `test_result`
  MODIFY `result_id` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
