-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 15, 2021 at 05:47 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `student_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `user_id` int(200) NOT NULL,
  `fname` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `cpassword` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`user_id`, `fname`, `email`, `password`, `cpassword`) VALUES
(3, 'manu', 'manumander77@gmail.com', '$2y$10$7nDnUrYlUFkBE8L0aU7BQOF.oCwUabF0.gXootcx6HIVGHVLO4iyS', '$2y$10$0mrMR2AKxwt5ObPGbCJIH.J8ywK01EatqjEXgDoGNzpn7abhupAvC'),
(4, 'manu', 'manu@gmail.com', '$2y$10$pppuuvXteb5Tjcs/RTBNkebTiiVDnfH3Jq7S//UNLCUQYRuNb4igi', '$2y$10$.vcRZHqqPqvr03CK2V742.KLyXCck6zzwUH9DKCrdKjj//lGo7wlK'),
(5, 'qwe', 'g@gmail.com', '$2y$10$Bz/ICDXObq.W4kkwn0zXQOPQNg.hBd9c6ayig1h8Zr64iV2fe/NrS', '$2y$10$jKMnEGr5G6HJBMW6PasLCuqhELeXFC/UPNkw8GpvglRvKslnFCate');

-- --------------------------------------------------------

--
-- Table structure for table `student_deatil`
--

CREATE TABLE `student_deatil` (
  `st_id` int(200) NOT NULL,
  `fname` varchar(200) NOT NULL,
  `lname` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `father_name` varchar(200) NOT NULL,
  `birthdate` date NOT NULL,
  `mobile` varchar(200) NOT NULL,
  `gender` varchar(200) NOT NULL,
  `district` varchar(200) NOT NULL,
  `city` varchar(200) NOT NULL,
  `state` varchar(200) NOT NULL,
  `nation` varchar(200) NOT NULL,
  `photo` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student_deatil`
--

INSERT INTO `student_deatil` (`st_id`, `fname`, `lname`, `email`, `father_name`, `birthdate`, `mobile`, `gender`, `district`, `city`, `state`, `nation`, `photo`) VALUES
(8, 'Manpreeet', 'kaur', 'manu@gmail.com', 'Mohan singh', '2018-05-06', '8847649951', 'female', 'mansa', 'bareta', 'punjab', 'india', 'IMG-20180126-WA0016.jpg'),
(11, 'Guri', 'singh', 'g@gmail.com', 'satpal singh', '2021-05-09', '7576764764', 'male', 'mansa', 'bareta', 'punjab', 'india', 'IMG-20180126-WA0016.jpg'),
(12, 'Manpreeet', 'kaur', 'manu@gmail.com', 'Mohan singh', '2018-05-06', '8847649951', 'female', 'mansa', 'bareta', 'punjab', 'india', 'IMG_20180312_201223.jpg'),
(13, 'Guriiii', 'singh', 'g@gmail.com', 'satpal singh', '2021-05-09', '7576764764', 'male', 'mansa', 'baretaaa', 'punjab', 'india', ''),
(14, 'Guriiii', 'singh', 'manu@gmail.com', 'mohan singh', '2021-05-10', '1234567816', 'male', 'mansa', 'bhudlada', 'punjab', 'india', ''),
(15, 'manuuu', 'kaur', 'manu@gmail.com', 'mohan singh', '2021-05-11', '1234567816', 'female', 'mansa', 'dfdff', 'punjab', 'india', '');

-- --------------------------------------------------------

--
-- Table structure for table `teacher_detail`
--

CREATE TABLE `teacher_detail` (
  `st_id` int(200) NOT NULL,
  `fname` varchar(200) NOT NULL,
  `lname` varchar(200) NOT NULL,
  `father_name` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `birthdate` date NOT NULL,
  `mobile` varchar(200) NOT NULL,
  `gender` varchar(200) NOT NULL,
  `qualification` varchar(200) NOT NULL,
  `teaching_subject` varchar(200) NOT NULL,
  `joining` varchar(200) NOT NULL,
  `city` varchar(200) NOT NULL,
  `state` varchar(200) NOT NULL,
  `photo` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `teacher_detail`
--

INSERT INTO `teacher_detail` (`st_id`, `fname`, `lname`, `father_name`, `email`, `birthdate`, `mobile`, `gender`, `qualification`, `teaching_subject`, `joining`, `city`, `state`, `photo`) VALUES
(1, 'manu', 'kaur', 'mohan singh', 'manu@gmail.com', '2021-05-04', '123456788', 'female', 'M.sc', 'chemistry', '2021-05-18', 'bareta', 'punjab', 'IMG_20180312_201223.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `student_deatil`
--
ALTER TABLE `student_deatil`
  ADD PRIMARY KEY (`st_id`),
  ADD UNIQUE KEY `st_id` (`st_id`);

--
-- Indexes for table `teacher_detail`
--
ALTER TABLE `teacher_detail`
  ADD PRIMARY KEY (`st_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `user_id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `student_deatil`
--
ALTER TABLE `student_deatil`
  MODIFY `st_id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `teacher_detail`
--
ALTER TABLE `teacher_detail`
  MODIFY `st_id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
