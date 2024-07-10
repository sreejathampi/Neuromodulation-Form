-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 10, 2024 at 11:53 PM
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
-- Database: `neuromodulation`
--

-- --------------------------------------------------------

--
-- Table structure for table `patient_detail`
--

CREATE TABLE `patient_detail` (
  `id` int(11) NOT NULL,
  `first_name` varchar(25) NOT NULL,
  `surname` text NOT NULL,
  `dob` varchar(25) NOT NULL,
  `age` varchar(25) NOT NULL,
  `total_score` int(11) NOT NULL,
  `created_on` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `patient_detail`
--

INSERT INTO `patient_detail` (`id`, `first_name`, `surname`, `dob`, `age`, `total_score`, `created_on`) VALUES
(9, 'Patient FirstName', 'Patient Surname', '2007-02-07', '17', 68, '10-07-2024 18:58:18'),
(10, 'Patient FirstName1', 'Patient Surname1', '2000-01-12', '24', 67, '10-07-2024 18:56:23'),
(11, 'Patient FirstName2', 'Patient Surname2', '2006-06-10', '18', 71, '10-07-2024 22:20:20'),
(12, 'Patient FirstName4', 'Patient Surname4', '1998-01-22', '26', 58, '10-07-2024 18:59:25'),
(13, 'Patient FirstName5', 'Patient Surname5', '2000-03-15', '24', 44, '10-07-2024 19:00:06'),
(14, 'Patient FirstName6', 'Patient Surname6', '1994-01-10', '30', 88, '10-07-2024 19:06:21');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `patient_detail`
--
ALTER TABLE `patient_detail`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `patient_detail`
--
ALTER TABLE `patient_detail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
