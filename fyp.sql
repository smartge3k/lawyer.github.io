-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 10, 2018 at 07:22 PM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fyp`
--

-- --------------------------------------------------------

--
-- Table structure for table `lawyers_proficiencies`
--

CREATE TABLE `lawyers_proficiencies` (
  `id` int(11) NOT NULL,
  `lawyer_id` int(11) NOT NULL,
  `lawyer_proficiency` varchar(500) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lawyers_proficiencies`
--

INSERT INTO `lawyers_proficiencies` (`id`, `lawyer_id`, `lawyer_proficiency`) VALUES
(1, 1, 'family'),
(2, 1, 'children'),
(3, 1, 'criminal'),
(4, 2, 'family'),
(5, 2, 'land'),
(6, 3, 'family'),
(7, 3, 'education'),
(8, 3, 'incometax'),
(9, 1, 'land'),
(10, 1, 'education');

-- --------------------------------------------------------

--
-- Table structure for table `lawyers_signup`
--

CREATE TABLE `lawyers_signup` (
  `lawyer_id` int(50) NOT NULL,
  `lawyer_firstname` varchar(50) NOT NULL,
  `lawyers_lastname` varchar(50) NOT NULL,
  `lawyers_email` varchar(50) NOT NULL,
  `lawyers_cnic` varchar(15) NOT NULL,
  `lawyers_mob` varchar(50) NOT NULL,
  `lawyers_dob` varchar(150) NOT NULL,
  `city` varchar(500) NOT NULL,
  `province` varchar(500) NOT NULL,
  `lawyers_matric` varchar(50) NOT NULL,
  `lawyers_inter` varchar(50) NOT NULL,
  `lawyers_llb` varchar(50) NOT NULL,
  `lawyers_llm` varchar(50) NOT NULL,
  `lawyers_experience` varchar(100) NOT NULL,
  `lawyers_licenceno` varchar(20) NOT NULL,
  `lawyers_lissue` varchar(20) NOT NULL,
  `lawyers_lexpire` varchar(200) NOT NULL,
  `lawyers_gender` varchar(10) NOT NULL,
  `lawyers_password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lawyers_signup`
--

INSERT INTO `lawyers_signup` (`lawyer_id`, `lawyer_firstname`, `lawyers_lastname`, `lawyers_email`, `lawyers_cnic`, `lawyers_mob`, `lawyers_dob`, `city`, `province`, `lawyers_matric`, `lawyers_inter`, `lawyers_llb`, `lawyers_llm`, `lawyers_experience`, `lawyers_licenceno`, `lawyers_lissue`, `lawyers_lexpire`, `lawyers_gender`, `lawyers_password`) VALUES
(1, 'Jacks', 'Mark', 'test@test.com', '12345-1234567-1', '+92300-1234568', '1-Aug-1987', 'Rawalpindi', 'Punjab', 'Tests', 'Tests', 'Tests', 'Tests', 'ten', '222222222222222', '1-Jan-2009', '1-Jan-2020', 'male', 'l3galAid'),
(2, 'Muhammad', 'Ali', 'ali@abc.com', '11111-1111111-1', '+92300-1111111', '1-Mar-1980', 'Rawalpindi', 'Punjab', 'Federat Govt High School, Islamabad', 'Govt. College, Islamabad', 'Govt. Law College, Rawalpindi', 'Govt. Law College, Rawalpindi', 'eight', '1234567890', '1-Jan-2010', '1-Jan-2020', 'male', 'l3galAid'),
(3, 'Asad', 'Khan', 'asad@abc.com', '22222-2222222-2', '0300-2222222', '1-Jan-1980', 'Rawalpindi', 'Punjab', 'Federat Govt High School, Islamabad', 'Govt. College, Islamabad', 'Govt. Law College, Rawalpindi', 'Govt. Law College, Rawalpindi', 'eight', '1234567890', '1-Jan-2010', '1-Jan-2020', 'male', 'l3galAid');

-- --------------------------------------------------------

--
-- Table structure for table `users_signup`
--

CREATE TABLE `users_signup` (
  `user_id` int(50) NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `user_email` varchar(50) NOT NULL,
  `user_password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users_signup`
--

INSERT INTO `users_signup` (`user_id`, `user_name`, `user_email`, `user_password`) VALUES
(1, 'kulsoom_ayyaz', 'kulsoom_ayyaz@yahoo.com', 'Pakistan01');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `lawyers_proficiencies`
--
ALTER TABLE `lawyers_proficiencies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lawyers_signup`
--
ALTER TABLE `lawyers_signup`
  ADD PRIMARY KEY (`lawyer_id`);

--
-- Indexes for table `users_signup`
--
ALTER TABLE `users_signup`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `lawyers_proficiencies`
--
ALTER TABLE `lawyers_proficiencies`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `lawyers_signup`
--
ALTER TABLE `lawyers_signup`
  MODIFY `lawyer_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `users_signup`
--
ALTER TABLE `users_signup`
  MODIFY `user_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
