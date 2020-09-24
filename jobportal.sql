-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 17, 2019 at 10:28 AM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;


-- --------------------------------------------------------

--

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `register_id` int(11) NOT NULL,
  `firstname` varchar(256) DEFAULT NULL,
  `lastname` varchar(256) DEFAULT NULL,
  `address` varchar(256) DEFAULT NULL,
   `village` varchar(256) DEFAULT NULL,
    `taluka` varchar(256) DEFAULT NULL,
     `district` varchar(256) DEFAULT NULL,
      `state` varchar(256) DEFAULT NULL,
  `email` varchar(256) DEFAULT NULL,
  `username` varchar(256) DEFAULT NULL,
  `gender` varchar(30) DEFAULT NULL,
  `mobile` varchar(100) DEFAULT NULL,
   `type` varchar(100) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `dor` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `patients`
--

INSERT INTO `register` (`register_id`, `firstname`, `lastname`, `address`, `village`, `taluka`, `district`, `state`,`email`, `username`, `gender`, `mobile`,`type`, `password`, `dor`) VALUES
(1, 'Brian', 'Msyamboza', 'P.O. Box 32153','fgrfg','ujyh','fgg','yhhgt','shubhangighadge45@gmail.com', 'shubh', 'female', '3456766','admin','123' ,'2019-07-11');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `jobapply` (
  `apply_id` int(11) NOT NULL,
  `name` varchar(256) DEFAULT NULL,
  `email` varchar(256) DEFAULT NULL,
  `phn` varchar(100) DEFAULT NULL,
  `village` varchar(100) DEFAULT NULL,
  `taluka` varchar(100) DEFAULT NULL,
  `district` varchar(100) DEFAULT NULL,
  `state` varchar(100) DEFAULT NULL,

  `dor` date DEFAULT NULL,
  `job_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `patients`
--

INSERT INTO `jobapply` (`apply_id`,`name`,`email`,`phn`,`village`,`taluka`,`district`,`state`,`dor`,`job_id`) VALUES
(201, 'shubh','shubh@gmail.com','3456766123','abc','pqr','xyz','mno','2020-06-11',101);



-- --------------------------------------------------------



CREATE TABLE `jobs_master` (
  `job_id` int(11) NOT NULL,
   `jobkey` varchar(256) DEFAULT NULL,
  `jobvillage` varchar(256) DEFAULT NULL,
   `jobtaluka` varchar(256) DEFAULT NULL,
    `jobdistrict` varchar(256) DEFAULT NULL,
     `jobstate` varchar(256) DEFAULT NULL,
    `jobby` varchar(256) DEFAULT NULL,
   `jobdesc` varchar(256) DEFAULT NULL,
  `jobdate` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `patients`
--

INSERT INTO `jobs_master` (`job_id`,`jobkey`, `jobvillage`,`jobtaluka`,`jobdistrict`,`jobstate`,`jobby`, `jobdesc`, `jobdate`) VALUES
(101, 'aaaaaa', 'jobvillage', 'jobtaluka','jobdistrict', 'jobstate','jobby','jobdesc','2020-07-11');

-- Indexes for dumped tables
--

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`register_id`);

ALTER TABLE `jobs_master`
  ADD PRIMARY KEY (`job_id`);

ALTER TABLE `jobapply`
  ADD PRIMARY KEY (`apply_id`);
--
--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `registers`
--
ALTER TABLE `register`
  MODIFY `register_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;

ALTER TABLE `jobs_master`
  MODIFY `job_id` int(101) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;

ALTER TABLE `jobapply`
  MODIFY `apply_id` int(101) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
