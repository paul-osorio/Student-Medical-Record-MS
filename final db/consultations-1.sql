-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 16, 2023 at 01:19 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `clinicms_db_test`
--

-- --------------------------------------------------------

--
-- Table structure for table `consultations`
--

CREATE TABLE `consultations` (
  `id` int(20) NOT NULL,
  `reference_no` varchar(55) NOT NULL,
  `emp_id` varchar(55) NOT NULL,
  `student_id` varchar(20) NOT NULL,
  `date_of_consultation` date NOT NULL,
  `symptoms` varchar(255) NOT NULL,
  `othersymptoms` varchar(150) NOT NULL,
  `body_temp` varchar(20) NOT NULL,
  `suspected_covid` varchar(20) NOT NULL,
  `tested_covid` varchar(20) NOT NULL,
  `confined` varchar(10) NOT NULL,
  `how_long` decimal(20,0) NOT NULL,
  `medicine` varchar(50) NOT NULL,
  `quantity` int(3) NOT NULL,
  `referred` varchar(10) NOT NULL,
  `hospital` varchar(150) NOT NULL,
  `reason` varchar(150) NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `consultations`
--

INSERT INTO `consultations` (`id`, `reference_no`, `emp_id`, `student_id`, `date_of_consultation`, `symptoms`, `othersymptoms`, `body_temp`, `suspected_covid`, `tested_covid`, `confined`, `how_long`, `medicine`, `quantity`, `referred`, `hospital`, `reason`, `status`) VALUES
(1, 'CON2N2DMUHNFF', '22-1245', '16-0243', '2023-04-03', 'Diarrhea', 'None', '36.7', 'No', 'No', 'No', '0', 'Diatabs', 0, 'No', '-', '-', 'cleared');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `consultations`
--
ALTER TABLE `consultations`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
