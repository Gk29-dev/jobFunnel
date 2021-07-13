-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 13, 2021 at 04:14 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `job`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_info`
--

CREATE TABLE `admin_info` (
  `Admin_name` varchar(20) COLLATE utf8_bin NOT NULL,
  `Admin_email` varchar(30) COLLATE utf8_bin NOT NULL,
  `Admin_password` varchar(20) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `admin_info`
--

INSERT INTO `admin_info` (`Admin_name`, `Admin_email`, `Admin_password`) VALUES
('Ram Kumar', 'ramkumar@gmail.com', 'ram123');

-- --------------------------------------------------------

--
-- Table structure for table `applied_job`
--

CREATE TABLE `applied_job` (
  `candidate_id` int(10) NOT NULL,
  `candidate_name` varchar(30) COLLATE utf8_bin NOT NULL,
  `candidate_email` varchar(30) COLLATE utf8_bin NOT NULL,
  `key_skill` varchar(30) COLLATE utf8_bin NOT NULL,
  `experience` varchar(20) COLLATE utf8_bin NOT NULL,
  `job_id` int(10) NOT NULL,
  `company_name` varchar(20) COLLATE utf8_bin NOT NULL,
  `comp_email` varchar(30) COLLATE utf8_bin NOT NULL,
  `designation` varchar(20) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `applied_job`
--

INSERT INTO `applied_job` (`candidate_id`, `candidate_name`, `candidate_email`, `key_skill`, `experience`, `job_id`, `company_name`, `comp_email`, `designation`) VALUES
(2, 'Gaurav', 'gaurav@gmail.com', 'PHP', '5 years', 1, 'greenwave pvt.Ltd', 'ankit4gaurav@gmail.com', 'system analyst'),
(2, 'Gaurav', 'gaurav@gmail.com', 'PHP', '5 years', 2, 'Radha PVT.LTD', 'ankit4gaurav@gmail.com', 'product manager'),
(3, 'Ankit Kumar', 'ankitkumar29.01.1998@gmail.com', 'Problem Solving', '4+ years', 1, 'greenwave pvt.Ltd', 'ankit4gaurav@gmail.com', 'system analyst'),
(2, 'Gaurav', 'gaurav@gmail.com', 'PHP', '5 years', 3, 'xyz Pvt. Ltd', 'ankit4gaurav@gmail.com', 'tester');

-- --------------------------------------------------------

--
-- Table structure for table `candidate_details`
--

CREATE TABLE `candidate_details` (
  `candidate_id` int(15) NOT NULL,
  `cname` varchar(20) COLLATE utf8_bin NOT NULL,
  `email` varchar(30) COLLATE utf8_bin NOT NULL,
  `mob_no` bigint(20) NOT NULL,
  `age` int(10) NOT NULL,
  `gender` varchar(15) COLLATE utf8_bin NOT NULL,
  `key_skill` varchar(20) COLLATE utf8_bin NOT NULL,
  `qualification` varchar(20) COLLATE utf8_bin NOT NULL,
  `experience` varchar(10) COLLATE utf8_bin NOT NULL,
  `c_password` varchar(20) COLLATE utf8_bin NOT NULL,
  `resume` blob NOT NULL,
  `address` varchar(50) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `candidate_details`
--

INSERT INTO `candidate_details` (`candidate_id`, `cname`, `email`, `mob_no`, `age`, `gender`, `key_skill`, `qualification`, `experience`, `c_password`, `resume`, `address`) VALUES
(1, 'Gaurav', 'gaurav@gmail.com', 919654195768, 23, 'Male', 'communication', 'mca', '2 years', 'ankit1998', 0x433a66616b65706174684b554e414c5f524553554d455f2831295f757064617465645b315d2e706466, 'D-112 d.d.a flats kalkaji'),
(2, 'Gaurav', 'gaurav@gmail.com', 919654195768, 34, 'Male', 'PHP', 'm.tech', '5 years', 'ankit1998', 0x4b554e414c5f524553554d455f2831295f757064617465645b315d2e706466, 'D-112 d.d.a flats kalkaji'),
(3, 'Ankit', 'ankitkumar29.01.1998@gmail.com', 9654195768, 21, 'Male', 'Problem Solving', 'm.tech', '5+', '123456', 0x436f7665722050616765202d2046696e616c2053796e6f7073697320284d43412036292e706466, 'D-112 d.d.a flats kalkaji'),
(4, 'Kunal', 'kunal123@gmail.com', 12345678, 25, 'Male', 'communication', 'm.tech', '5+ years', 'kunal123', 0x4b554e414c5f524553554d455f2831295f757064617465645b315d2e706466, 'D-112 d.d.a flats kalkaji');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `category` varchar(30) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `category`) VALUES
(1, 'web developer'),
(2, 'testing'),
(3, 'product manager'),
(4, 'database administrator'),
(5, 'system analyst'),
(6, 'network engineer');

-- --------------------------------------------------------

--
-- Table structure for table `company_details`
--

CREATE TABLE `company_details` (
  `c_id` int(10) NOT NULL,
  `c_name` varchar(20) COLLATE utf8_bin NOT NULL,
  `email` varchar(30) COLLATE utf8_bin NOT NULL,
  `industry` varchar(20) COLLATE utf8_bin NOT NULL,
  `mobile` bigint(30) NOT NULL,
  `website` varchar(40) COLLATE utf8_bin NOT NULL,
  `logo` blob NOT NULL,
  `address` varchar(50) COLLATE utf8_bin NOT NULL,
  `password` varchar(20) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `company_details`
--

INSERT INTO `company_details` (`c_id`, `c_name`, `email`, `industry`, `mobile`, `website`, `logo`, `address`, `password`) VALUES
(1, 'ankit', 'ankit4gaurav@gmail.com', 'automobile', 26026347, 'https://localhost.com', 0x53637265656e73686f7420283131292e706e67, 'D-112 d.d.a flats kalkaji', 'ashi@123'),
(2, 'gaurav', 'gaurav123@gmail.com', 'E-Commerce', 9654195767, 'https://www.tcs.com', 0x526561637420767320416e67756c617220537461636b204f766572666c6f772e706e67, 'D-96 d.d.a flats kalkaji', 'ram123'),
(3, 'Greenwave Pvt. Ltd', 'greenwave@gmail.com', 'E-Commerce', 987654321, 'https://greenwave.com', 0x57494e5f32303139303231345f30305f30305f33385f50726f2e6a7067, 'D-112 d.d.a flats kalkaji', 'green123');

-- --------------------------------------------------------

--
-- Table structure for table `post_job`
--

CREATE TABLE `post_job` (
  `job_id` int(10) NOT NULL,
  `category` varchar(30) COLLATE utf8_bin NOT NULL,
  `job_title` varchar(20) COLLATE utf8_bin NOT NULL,
  `job_type` varchar(10) COLLATE utf8_bin NOT NULL,
  `salary` bigint(20) NOT NULL,
  `skill_required` varchar(30) COLLATE utf8_bin NOT NULL,
  `exp_required` varchar(30) COLLATE utf8_bin NOT NULL,
  `job_location` varchar(20) COLLATE utf8_bin NOT NULL,
  `job_exp_date` date NOT NULL,
  `emp_required` int(10) NOT NULL,
  `comp_name` varchar(30) COLLATE utf8_bin NOT NULL,
  `comp_email` varchar(50) COLLATE utf8_bin NOT NULL,
  `job_description` varchar(50) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `post_job`
--

INSERT INTO `post_job` (`job_id`, `category`, `job_title`, `job_type`, `salary`, `skill_required`, `exp_required`, `job_location`, `job_exp_date`, `emp_required`, `comp_name`, `comp_email`, `job_description`) VALUES
(1, 'system analyst', 'full stack developer', 'part time', 9000, 'PHP', 'fresher', 'mumbai,india', '2021-04-21', 2, 'greenwave pvt.Ltd', 'ankit4gaurav@gmail.com', 'hello guys'),
(2, 'product manager', 'Product Manager', 'contract', 7000, 'MYSQL', '5-10', 'Delhi,india', '2021-04-09', 4, 'Radha PVT.LTD', 'ankit4gaurav@gmail.com', 'fslfslfslfdjslk'),
(3, 'tester', 'Tester', 'part time', 7000, 'Hackerank', '5-10 years', 'Chennai, india', '2021-03-28', 5, 'xyz Pvt. Ltd', 'ankit4gaurav@gmail.com', 'Hello Everyone, This Job only for Experienced Test');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_info`
--
ALTER TABLE `admin_info`
  ADD PRIMARY KEY (`Admin_email`);

--
-- Indexes for table `applied_job`
--
ALTER TABLE `applied_job`
  ADD KEY `FOREIGN KEY` (`candidate_id`);

--
-- Indexes for table `candidate_details`
--
ALTER TABLE `candidate_details`
  ADD PRIMARY KEY (`candidate_id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `company_details`
--
ALTER TABLE `company_details`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `post_job`
--
ALTER TABLE `post_job`
  ADD PRIMARY KEY (`job_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
