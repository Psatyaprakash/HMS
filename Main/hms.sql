-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 26, 2023 at 03:04 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hms`
--

-- --------------------------------------------------------

--
-- Table structure for table `diseases`
--

CREATE TABLE `diseases` (
  `disease_id` int(11) NOT NULL,
  `disease_name` varchar(20) NOT NULL,
  `disease_affected` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `diseases`
--

INSERT INTO `diseases` (`disease_id`, `disease_name`, `disease_affected`) VALUES
(1, 'Flu', 236),
(2, 'Fever', 246),
(3, 'Stomach Upset', 300),
(4, 'd4', 56),
(5, 'd5', 86);

-- --------------------------------------------------------

--
-- Table structure for table `doctor`
--

CREATE TABLE `doctor` (
  `d_id` int(11) NOT NULL,
  `firstname` varchar(10) NOT NULL,
  `lastname` varchar(10) NOT NULL,
  `email` text NOT NULL,
  `mobile` int(10) NOT NULL,
  `gender` enum('male','female') NOT NULL,
  `dob` date NOT NULL,
  `address` text NOT NULL,
  `d_image` varchar(250) NOT NULL,
  `d_password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `doctor`
--

INSERT INTO `doctor` (`d_id`, `firstname`, `lastname`, `email`, `mobile`, `gender`, `dob`, `address`, `d_image`, `d_password`) VALUES
(7, 'OReilly', 'as', 'tony@stark.industries', 192837465, 'male', '2023-08-16', 'aasv', '', 'zgvtbdz'),
(8, 'O\'Reilly', 'as', 'tony@stark.industries', 192837465, 'male', '2023-08-16', 'aasv', '', 'yuyuyuyy'),
(14, 'Chinmay', 'Bhatta', 'cbhatta@gmail.com', 192837465, 'male', '2023-08-19', 'silicon valley', '1692418862Flowering.png', '123'),
(15, 'Chinmay', 'Bhatta', 'tony@stark.industries', 1234567889, 'male', '2023-08-19', 'silicon valley', '1692422899Others.jpeg', 'tony');

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

CREATE TABLE `patient` (
  `p_id` int(10) NOT NULL,
  `p_name` varchar(20) NOT NULL,
  `p_email` text NOT NULL,
  `p_dob` date NOT NULL,
  `p_gender` enum('male','female') NOT NULL,
  `p_phone` int(10) NOT NULL,
  `p_address` text NOT NULL,
  `p_image` varchar(250) NOT NULL,
  `p_password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `patient`
--

INSERT INTO `patient` (`p_id`, `p_name`, `p_email`, `p_dob`, `p_gender`, `p_phone`, `p_address`, `p_image`, `p_password`) VALUES
(172, 'abc', 'abc@mail', '2023-08-19', 'male', 1234567890, 'jokers', '1692385056light-waves.webp', ''),
(173, 'abc', 'abc@mail', '2023-08-19', 'male', 1234567890, 'jokers', '1692385308photo_2021-10-23_02-43-43.jpg', 'abc@mail'),
(179, 'friday', 'jarvis@2014', '2023-08-19', 'male', 1234567890, 'avengers tower', '1692422790Main-image.jpeg', '2014'),
(181, 'Prakash', 'moon@gmail.com', '2023-10-24', 'male', 1234567890, 'Bhubaneswar', '1698143628food 3.jpg', '403');

-- --------------------------------------------------------

--
-- Table structure for table `patient_admit`
--

CREATE TABLE `patient_admit` (
  `patient_id` int(11) NOT NULL,
  `entry_date` date NOT NULL,
  `room_no` int(11) NOT NULL,
  `reason` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `patient_discharge`
--

CREATE TABLE `patient_discharge` (
  `patient_id` int(11) NOT NULL,
  `discharge_date` date NOT NULL,
  `total_bill` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `patient_diseases`
--

CREATE TABLE `patient_diseases` (
  `Sl.no` int(11) NOT NULL,
  `patient_id` int(10) NOT NULL,
  `disease_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `patient_diseases`
--

INSERT INTO `patient_diseases` (`Sl.no`, `patient_id`, `disease_id`) VALUES
(75, 172, 1),
(76, 172, 2),
(97, 173, 1),
(98, 173, 2),
(101, 179, 1),
(102, 179, 2),
(105, 181, 1);

-- --------------------------------------------------------

--
-- Table structure for table `room`
--

CREATE TABLE `room` (
  `room_no` int(11) NOT NULL,
  `doctor_id` int(11) NOT NULL,
  `patient_id` int(11) NOT NULL,
  `room-fees` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `specialisation`
--

CREATE TABLE `specialisation` (
  `s_id` int(11) NOT NULL,
  `s_name` varchar(10) NOT NULL,
  `s_place` text NOT NULL,
  `s_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `specialisation`
--

INSERT INTO `specialisation` (`s_id`, `s_name`, `s_place`, `s_date`) VALUES
(1, 'Sspe1', 'pla1', '2023-08-07'),
(2, 'Sspe2', 'pla2', '2023-08-08'),
(3, 'Sspe3', 'pla3', '2023-08-09'),
(4, 'Sspe4', 'pla4', '2023-08-10');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `diseases`
--
ALTER TABLE `diseases`
  ADD PRIMARY KEY (`disease_id`);

--
-- Indexes for table `doctor`
--
ALTER TABLE `doctor`
  ADD PRIMARY KEY (`d_id`);

--
-- Indexes for table `patient`
--
ALTER TABLE `patient`
  ADD PRIMARY KEY (`p_id`);

--
-- Indexes for table `patient_diseases`
--
ALTER TABLE `patient_diseases`
  ADD PRIMARY KEY (`Sl.no`),
  ADD KEY `fk_patient` (`patient_id`),
  ADD KEY `fk_disease` (`disease_id`);

--
-- Indexes for table `room`
--
ALTER TABLE `room`
  ADD PRIMARY KEY (`room_no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `diseases`
--
ALTER TABLE `diseases`
  MODIFY `disease_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `doctor`
--
ALTER TABLE `doctor`
  MODIFY `d_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `patient`
--
ALTER TABLE `patient`
  MODIFY `p_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=182;

--
-- AUTO_INCREMENT for table `patient_diseases`
--
ALTER TABLE `patient_diseases`
  MODIFY `Sl.no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=106;

--
-- AUTO_INCREMENT for table `room`
--
ALTER TABLE `room`
  MODIFY `room_no` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `patient_diseases`
--
ALTER TABLE `patient_diseases`
  ADD CONSTRAINT `fk_disease` FOREIGN KEY (`disease_id`) REFERENCES `diseases` (`disease_id`),
  ADD CONSTRAINT `fk_patient` FOREIGN KEY (`patient_id`) REFERENCES `patient` (`p_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
