-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 04, 2023 at 06:06 PM
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
-- Database: `Webd167`
--

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

CREATE TABLE `clients` (
  `client_id` int(11) NOT NULL,
  `name` varchar(40) DEFAULT NULL,
  `company` varchar(40) DEFAULT NULL,
  `email` varchar(40) DEFAULT NULL,
  `phone` varchar(40) DEFAULT NULL,
  `URL` varchar(40) DEFAULT NULL,
  `city` varchar(40) DEFAULT NULL,
  `state_country` varchar(200) DEFAULT NULL,
  `contact_by` enum('Phone','Email') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `clients`
--

INSERT INTO `clients` (`client_id`, `name`, `company`, `email`, `phone`, `URL`, `city`, `state_country`, `contact_by`) VALUES
(1, 'Client A', 'Company 1', 'clienta@example.com', '123-456-7890', 'http://example1.com', 'San Diego', 'USA', 'Email'),
(2, 'Client B', 'Company 2', 'clientb@example.com', '098-765-4321', 'http://example2.com', 'Las Vegas', 'USA', 'Phone'),
(3, 'Client C', 'Company 3', 'clientc@example.com', '321-789-4560', 'http://example3.com', 'New York', 'USA', 'Email');

-- --------------------------------------------------------

--
-- Table structure for table `client_needs`
--

CREATE TABLE `client_needs` (
  `client_id` int(11) DEFAULT NULL,
  `skill_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `client_needs`
--

INSERT INTO `client_needs` (`client_id`, `skill_id`) VALUES
(1, 1),
(1, 6),
(1, 13),
(1, 15),
(2, 2),
(2, 8),
(2, 14),
(2, 19),
(3, 4),
(3, 10),
(3, 12),
(3, 20);

-- --------------------------------------------------------

--
-- Table structure for table `skills`
--

CREATE TABLE `skills` (
  `skill_id` int(11) NOT NULL,
  `skill` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `skills`
--

INSERT INTO `skills` (`skill_id`, `skill`) VALUES
(1, 'Site Design'),
(2, 'Site Redesign'),
(3, 'Online Store'),
(4, 'Marketing'),
(5, 'Maintenance'),
(6, 'HTML/DHTML'),
(7, 'CGI/PERL/C/C++'),
(8, 'Java'),
(9, 'ASP'),
(10, 'XML'),
(11, 'Access'),
(12, 'SQL'),
(13, 'Sybase'),
(14, 'Oracle'),
(15, 'Flash'),
(16, 'Quicktime'),
(17, 'Media Player'),
(18, 'Real'),
(19, 'Marketing Collateral'),
(20, 'Logos'),
(21, 'Packaging'),
(22, 'Annual Reports');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`client_id`);

--
-- Indexes for table `client_needs`
--
ALTER TABLE `client_needs`
  ADD KEY `client_id` (`client_id`),
  ADD KEY `skill_id` (`skill_id`);

--
-- Indexes for table `skills`
--
ALTER TABLE `skills`
  ADD PRIMARY KEY (`skill_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `clients`
--
ALTER TABLE `clients`
  MODIFY `client_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `skills`
--
ALTER TABLE `skills`
  MODIFY `skill_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `client_needs`
--
ALTER TABLE `client_needs`
  ADD CONSTRAINT `client_needs_ibfk_1` FOREIGN KEY (`client_id`) REFERENCES `clients` (`client_id`),
  ADD CONSTRAINT `client_needs_ibfk_2` FOREIGN KEY (`skill_id`) REFERENCES `skills` (`skill_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT*/;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS*/;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION*/;
