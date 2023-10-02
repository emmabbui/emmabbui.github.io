-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Sep 28, 2023 at 08:03 AM
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
  `contact_by` enum('Phone','Email') DEFAULT NULL,
  `web_services` set('Site Design','Site Redesign','Online Store','Marketing','Maintenance') DEFAULT NULL,
  `programming_services` set('HTML/DHTML','CGI/PERL/C/C++','Java','ASP','XML') DEFAULT NULL,
  `database_services` set('Access','SQL','Sybase','Oracle') DEFAULT NULL,
  `multimedia_services` set('Flash','Quicktime','Media Player','Real') DEFAULT NULL,
  `corporate_design_services` set('Marketing Collateral','Logos','Packaging','Annual Reports') DEFAULT NULL,
  `other_comments` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `clients`
--

INSERT INTO `clients` (`client_id`, `name`, `company`, `email`, `phone`, `URL`, `city`, `state_country`, `contact_by`, `web_services`, `programming_services`, `database_services`, `multimedia_services`, `corporate_design_services`, `other_comments`) VALUES
(12345, 'Jared', 'Subway', 'jaredfogle@subway.com', '1234567890', 'ilikesandwhiches', 'sub city', 'subway USA', 'Phone', 'Site Design,Site Redesign,Online Store', 'CGI/PERL/C/C++,Java', 'Sybase', 'Flash,Quicktime', 'Marketing Collateral,Packaging', 'helo'),
(12348, 'Larry', 'n/a', 'larrydarry@daygo.org', 'n/a', 'n/a', 'sunny daygo', 'sun day', 'Email', 'Site Design,Site Redesign,Online Store,Marketing,Maintenance', 'Java', 'SQL', 'Real', 'Annual Reports', 'poop'),
(12349, 'Larry', 'n/a', 'larrydarry@daygo.org', 'n/a', 'n/a', 'sunny daygo', 'sun day', 'Email', 'Site Design,Site Redesign,Online Store,Marketing,Maintenance', 'Java', 'SQL', 'Real', 'Annual Reports', 'poop');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`client_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `clients`
--
ALTER TABLE `clients`
  MODIFY `client_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12350;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
