-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 14, 2024 at 02:28 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `yaqiin`
--

-- --------------------------------------------------------

--
-- Table structure for table `discharged`
--

CREATE TABLE `discharged` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(100) NOT NULL,
  `doctor_name` varchar(200) NOT NULL,
  `d_reason` varchar(200) NOT NULL,
  `patient_number` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `discharged`
--

INSERT INTO `discharged` (`id`, `name`, `doctor_name`, `d_reason`, `patient_number`) VALUES
(1, 'jamac cabdule  ', '49', 'sababta loo saaray waa bogsaday', '1'),
(2, 'jamac cabdule  ', '49', 'WAXAA LOO SAARAY WAA BOGSADAY', '1'),
(3, 'jamac cabdule  ', '49', 'WAXAA LOO SAARAY WAA BOGSADAY', '1'),
(4, 'farah yare  ', '30', 'WAXAA LOO FASAXAY WAA RAYSATY', '2'),
(5, 'farah yare  ', '30', '', '2');

-- --------------------------------------------------------

--
-- Table structure for table `inpatient_registeration`
--

CREATE TABLE `inpatient_registeration` (
  `id` int(10) UNSIGNED NOT NULL,
  `patient_number` varchar(200) NOT NULL,
  `patient_name` varchar(200) NOT NULL,
  `doctor_name` varchar(100) NOT NULL,
  `description` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `inpatient_registeration`
--

INSERT INTO `inpatient_registeration` (`id`, `patient_number`, `patient_name`, `doctor_name`, `description`) VALUES
(55, '1', 'jamac cabdule  ', '49', 'waxaa loo jiifiyay kilyaha dartood'),
(57, '3', 'hassan ali  ', '44', 'waxa loo jiifiyay calool xanuun'),
(58, '4', 'haliimo cali  ', 'ruqiyo', 'waxaa loo jiifiyay fool'),
(59, '11', 'hassan  ', 'yahye', 'waxa loo jiifiyay shuban iyo matag'),
(60, '7', 'hassan ali  ', 'yahye', 'waxaa loo jiifiyay sabab badan');

-- --------------------------------------------------------

--
-- Table structure for table `number`
--

CREATE TABLE `number` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(150) NOT NULL,
  `cost` decimal(10,2) NOT NULL,
  `doctor_name` varchar(250) NOT NULL,
  `serial_number` int(11) NOT NULL,
  `date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `number`
--

INSERT INTO `number` (`id`, `name`, `cost`, `doctor_name`, `serial_number`, `date`) VALUES
(7, 'jamac cabdule', 5.00, '49', 1, '2024-05-07'),
(8, 'farah yare', 5.00, '30', 2, '2024-05-31'),
(9, 'hassan ali', 5.00, '44', 3, '2024-05-13'),
(10, 'haliimo cali', 5.00, 'ruqiyo', 4, '2024-05-27'),
(12, 'hassan', 5.00, 'yahye', 11, '2024-05-22'),
(13, 'hassan ali', 5.00, 'yahye', 7, '2024-06-11'),
(14, 'yusuf cali', 5.00, 'yahye', 8, '2024-06-10'),
(15, 'ubax maxamed', 5.00, 'yahye', 9, '2024-06-11');

-- --------------------------------------------------------

--
-- Table structure for table `op`
--

CREATE TABLE `op` (
  `id` int(11) NOT NULL,
  `name` varchar(250) NOT NULL,
  `doctor_name` varchar(200) NOT NULL,
  `serial_number` int(200) NOT NULL,
  `reason` varchar(500) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `op`
--

INSERT INTO `op` (`id`, `name`, `doctor_name`, `serial_number`, `reason`, `date`) VALUES
(0, 'farah yare', '30', 2, '', '2024-06-13'),
(0, 'jamac cabdule', '49', 1, '', '0000-00-00'),
(0, 'farah yare', '30', 2, '', '0000-00-00'),
(0, 'hassan ali', '44', 3, '', '0000-00-00'),
(0, 'hassan ali', '44', 3, '', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(50) UNSIGNED NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `edu_level` varchar(100) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `usertype` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `first_name`, `last_name`, `edu_level`, `gender`, `username`, `password`, `usertype`) VALUES
(31, 'hassan', 'jamac', 'master', 'male', 'hasanyu', '1234', 'admin'),
(32, 'aweys', 'dahir', 'phd in software engineering', 'male', '@aweys', '1234', 'admin'),
(33, 'aweys', 'dahir', 'phd in software engineering', 'male', '@aweys', '1234', 'admin'),
(34, 'yahye', 'cali dahir', 'master', 'male', '@yahye', '1234', 'admin'),
(35, 'yahye', 'cali dahir', 'master', 'male', '@yahye', '1234', 'admin'),
(36, 'yahye', 'cali dahir', 'master', 'male', '@yahye', '1234', 'admin'),
(37, 'hhg', 'gg', 'ggg', 'male', 'ggg', 'ggg', 'doctor'),
(38, 'hhg', 'gg', 'ggg', 'male', 'ggg', 'ggg', 'doctor'),
(39, 'hhg', 'gg', 'ggg', 'male', 'ggg', 'ggg', 'doctor'),
(40, 'hhg', 'gg', 'ggg', 'male', 'ggg', 'ggg', 'doctor'),
(41, 'hhg', 'gg', 'ggg', 'male', 'ggg', 'ggg', 'doctor'),
(42, 'hdhhd', 'fhfhfh', 'ffhhf', 'male', 'fjfjjf', 'jfjfj', 'admin'),
(43, 'hdhhd', 'fhfhfh', 'ffhhf', 'male', 'fjfjjf', 'jfjfj', 'admin'),
(44, 'fkkfk', 'fkfkkf', 'fkfkfk', 'male', 'fkfkkf', '333', 'doctor'),
(45, 'hassan', 'dahir', 'php', 'male', '@hassan', '1234', 'admin'),
(46, 'hassan', 'dahir', 'php', 'male', '@hassan', '1234', 'admin'),
(47, 'aweys', 'mohamud', 'master of computer sceince', 'male', '@caawiye', '1234', 'admin'),
(48, 'osman', 'dahir', 'master of public health', 'male', 'osman', '1234', 'pharmacy'),
(49, 'ruqiyo', 'mohamed', 'master of gynocology ', 'female', 'ruqiyo', '1234', 'doctor'),
(50, 'cali ', 'ibrahim', 'master', 'male', '@cali', '1234', 'admin'),
(51, 'aweis', 'dahir', 'master of computer sceince', 'male', 'aweys', '1234', 'admin'),
(52, 'yahye', 'cali', 'mbbs', 'male', 'yahye', '1234', 'doctor'),
(53, 'aways', 'dahir', 'master of computer sceince', 'male', 'aweis', '1234', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `discharged`
--
ALTER TABLE `discharged`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `inpatient_registeration`
--
ALTER TABLE `inpatient_registeration`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `number`
--
ALTER TABLE `number`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `discharged`
--
ALTER TABLE `discharged`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `inpatient_registeration`
--
ALTER TABLE `inpatient_registeration`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT for table `number`
--
ALTER TABLE `number`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(50) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
