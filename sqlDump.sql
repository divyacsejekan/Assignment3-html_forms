-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889 
-- Generation Time: Jan 17, 2019 at 12:49 PM
-- Server version: 5.7.23
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `FirstDB`
--

-- --------------------------------------------------------

--
-- Table structure for table `CandidateDB`
--

CREATE TABLE `CandidateDB` (
  `cname` varchar(30) DEFAULT NULL,
  `addr` varchar(30) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `mobno` bigint(30) DEFAULT NULL,
  `high_qual` varchar(30) DEFAULT NULL,
  `dob` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `CandidateDB`
--

INSERT INTO `CandidateDB` (`cname`, `addr`, `email`, `mobno`, `high_qual`, `dob`) VALUES
('mayur', 'pune', 'gajarmayur@gmail.com', 9762005527, 'macs', '2012-12-12');

