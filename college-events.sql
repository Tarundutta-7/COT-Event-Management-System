-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 22, 2025 at 09:41 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.1.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `college-events`
--

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` int(11) NOT NULL,
  `event_name` varchar(100) NOT NULL,
  `event_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `event_name`, `event_date`) VALUES
(3, 'Sports Day', '2025-07-10'),
(4, 'Workshop on AI and Machine Learning', '2025-07-20'),
(5, 'Tech Fest', '2025-06-15'),
(6, 'Cultural Night', '2025-06-30'),
(8, 'Coding Marathon', '2025-07-20'),
(9, 'Startup Pitch Day', '2025-07-25'),
(10, 'Hackathon', '2025-08-05'),
(11, 'Photography Exhibition', '2025-08-10'),
(12, 'Music Battle', '2025-08-15'),
(13, 'Robotics Workshop', '2025-08-20'),
(14, 'Science Fair', '2025-08-25'),
(15, 'Literature Fest', '2025-09-01'),
(16, 'Art & Craft Expo', '2025-09-05'),
(17, 'Alumni Meet', '2025-09-10'),
(18, 'Drama Night', '2025-09-15'),
(19, 'Entrepreneurship Talk', '2025-09-20');

-- --------------------------------------------------------

--
-- Table structure for table `registrations`
--

CREATE TABLE `registrations` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `event` varchar(100) NOT NULL,
  `registration_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `registrations`
--

INSERT INTO `registrations` (`id`, `name`, `email`, `event`, `registration_date`) VALUES
(4, 'sayed hamid raza ', 'maviabeig@gmail.com', 'Sports Day', '2025-05-21 13:43:40'),
(7, 'Tarun Dutta', 'tarundutta2001@gmail.com', 'Startup Pitch Day', '2025-05-21 16:09:37'),
(8, 'Sonali', 'sonalidutta1111994@gmail.com', 'Art & Craft Expo', '2025-05-22 07:06:10'),
(9, 'varun', 'varun123@gmail.com', 'Science Fair', '2025-05-22 07:19:11');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `registrations`
--
ALTER TABLE `registrations`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `registrations`
--
ALTER TABLE `registrations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
