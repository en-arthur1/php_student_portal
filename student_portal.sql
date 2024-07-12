-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 12, 2024 at 07:28 AM
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
-- Database: `login`
--

-- --------------------------------------------------------

--
-- Table structure for table `student_portal`
--

CREATE TABLE `student_portal` (
  `id` int(10) NOT NULL,
  `firstname` text NOT NULL,
  `lastname` text NOT NULL,
  `index_number` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` int(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `student_portal`
--

INSERT INTO `student_portal` (`id`, `firstname`, `lastname`, `index_number`, `email`, `phone`, `password`) VALUES
(4, 'Enock ', 'Arthur', '08722222', 'enock123@gmail.com', 22, 'f3bb06607732c34aecec5683f27d2fcd'),
(5, 'Enock', 'Arthur', '087222222', 'enock12345@gmail.com', 598827080, 'f3bb06607732c34aecec5683f27d2fcd'),
(6, 'Enock', 'Arthur', '0722000021', 'enock123456@gmail.com', 598827080, '827ccb0eea8a706c4c34a16891f84e7b'),
(7, 'Enock', 'Arthur', 'enockArthur1@gmail.com', '0722000022', 598827082, '827ccb0eea8a706c4c34a16891f84e7b'),
(8, 'Enock', 'Arthur', 'enockArthur1@gmail.com', '0722000023', 598827084, 'e10adc3949ba59abbe56e057f20f883e'),
(9, 'Enock', 'Arthur', '0872222212', 'enockArthur123@gmail.com', 2147483647, 'fcea920f7412b5da7be0cf42b8c93759'),
(10, 'Enock', 'Arthur', '0872222213', 'enockArthur1235@gmail.com', 598827080, 'e9ea90857363708afc42938a00719e76'),
(11, 'Enock ', 'Arthur', '0722000028', 'arthur@gmail.com', 598827088, 'e9ea90857363708afc42938a00719e76'),
(12, 'Aristotle', 'Lecturer', '0722000089', 'aristotle@gmail.com', 598827388, '1b905a912aa4a19c19f76fc4288b462a');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `student_portal`
--
ALTER TABLE `student_portal`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `student_portal`
--
ALTER TABLE `student_portal`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
