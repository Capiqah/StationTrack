-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 01, 2025 at 05:56 AM
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
-- Database: `stationtrack`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(20) NOT NULL,
  `admin_name` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `admin_username` varchar(20) NOT NULL,
  `admin_password` varchar(20) NOT NULL,
  `admin_email` varchar(20) NOT NULL,
  `admin_phone` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `admin_name`, `admin_username`, `admin_password`, `admin_email`, `admin_phone`) VALUES
(1, 'Aida', 'Aida', '12345', 'josh@gmail.com', '19'),
(2, 'Sir Lewis Hamilton', 'Lewis ', '44', 'Roscoe@gmail.com', '016-3647204'),
(3, 'yati', 'yati', 'ebmsb2025', 'ebmsb@engbeng.com.my', '0126601856');

-- --------------------------------------------------------

--
-- Table structure for table `request_analysis`
--

CREATE TABLE `request_analysis` (
  `analysis_id` int(20) NOT NULL,
  `staff_id` int(20) DEFAULT NULL,
  `stationery_id` int(20) DEFAULT NULL,
  `admin_id` int(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `staff_id` int(20) NOT NULL,
  `staff_name` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `staff_department` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `staff_username` varchar(20) NOT NULL,
  `staff_email` varchar(30) NOT NULL,
  `staff_password` varchar(20) NOT NULL,
  `staff_phone` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`staff_id`, `staff_name`, `staff_department`, `staff_username`, `staff_email`, `staff_password`, `staff_phone`) VALUES
(0, 'Lando norris ', 'finance, admin and personnel', 'Lando', 'Landooo3@gmail.com', '123456', '019-6419501'),
(17, 'Oscar Piastri', 'Information Technology', 'Oscar', 'Oscar@gmail.com', '81', '012-3456789');

-- --------------------------------------------------------

--
-- Table structure for table `stationery`
--

CREATE TABLE `stationery` (
  `stationery_name` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `stationery_quantity` int(30) NOT NULL,
  `stationery_description` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `stationery_status` varchar(30) DEFAULT NULL,
  `stationery_date` date DEFAULT NULL,
  `stationery_id` int(20) NOT NULL,
  `staff_id` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `stationery`
--

INSERT INTO `stationery` (`stationery_name`, `stationery_quantity`, `stationery_description`, `stationery_status`, `stationery_date`, `stationery_id`, `staff_id`) VALUES
('A4 Paper', 10, 'opis', 'Approve', '2025-07-08', 11, 2033),
('Office Folder', 3, 'for audit', NULL, '2025-07-24', 37, 2033),
('A4 Paper', 2, 'office', NULL, '2025-07-09', 38, 2020),
('Higlighter', 3, 'for meeting', NULL, '2025-07-29', 39, 2033),
('A4 Paper', 2, 'for meeting', NULL, '2025-07-29', 40, 2023),
('Notebook', 1, 'for office ', NULL, '2025-08-01', 41, 2033);

-- --------------------------------------------------------

--
-- Table structure for table `stationery_update`
--

CREATE TABLE `stationery_update` (
  `update_id` int(20) NOT NULL,
  `update_name` varchar(30) NOT NULL,
  `update_quantity` int(20) NOT NULL,
  `update_left` int(20) NOT NULL,
  `update_uom` varchar(20) NOT NULL,
  `admin_id` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `stationery_update`
--

INSERT INTO `stationery_update` (`update_id`, `update_name`, `update_quantity`, `update_left`, `update_uom`, `admin_id`) VALUES
(7, 'A4 Paper', 10, 7, 'Box', 0),
(8, 'Calculator', 3, 2, 'Pcs', 0),
(9, 'Catridge', 0, 0, 'Unit', 0),
(11, 'Envelope', 0, 0, 'Pcs', 0);

-- --------------------------------------------------------

--
-- Table structure for table `supplier`
--

CREATE TABLE `supplier` (
  `supplier_id` int(20) NOT NULL,
  `supplier_name` varchar(30) NOT NULL,
  `supplier_address` varchar(100) NOT NULL,
  `supplier_link` varchar(500) NOT NULL,
  `supplier_phone` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `supplier`
--

INSERT INTO `supplier` (`supplier_id`, `supplier_name`, `supplier_address`, `supplier_link`, `supplier_phone`) VALUES
(3, 'JAYA MART (M) SDN BHD', 'Kuala Lumpur', 'https://jayamart.com.my/', '03-42965232'),
(4, 'U TRADING & SUPPLIES SDN BHD', 'Kuala Lumpur', 'https://utrading.com.my/about/', '03-3341 2158');

-- --------------------------------------------------------

--
-- Table structure for table `supplier_request`
--

CREATE TABLE `supplier_request` (
  `suprequest_id` int(20) NOT NULL,
  `supplier_id` int(20) NOT NULL,
  `admin_id` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `request_analysis`
--
ALTER TABLE `request_analysis`
  ADD PRIMARY KEY (`analysis_id`),
  ADD KEY `staff` (`staff_id`),
  ADD KEY `stationery` (`stationery_id`),
  ADD KEY `admin` (`admin_id`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`staff_id`);

--
-- Indexes for table `stationery`
--
ALTER TABLE `stationery`
  ADD PRIMARY KEY (`stationery_id`),
  ADD KEY `staff_id` (`staff_id`);

--
-- Indexes for table `stationery_update`
--
ALTER TABLE `stationery_update`
  ADD PRIMARY KEY (`update_id`),
  ADD KEY `adminFK` (`admin_id`);

--
-- Indexes for table `supplier`
--
ALTER TABLE `supplier`
  ADD PRIMARY KEY (`supplier_id`);

--
-- Indexes for table `supplier_request`
--
ALTER TABLE `supplier_request`
  ADD PRIMARY KEY (`suprequest_id`),
  ADD KEY `supp_id` (`supplier_id`),
  ADD KEY `adminid` (`admin_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `staff_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `stationery`
--
ALTER TABLE `stationery`
  MODIFY `stationery_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `stationery_update`
--
ALTER TABLE `stationery_update`
  MODIFY `update_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `supplier`
--
ALTER TABLE `supplier`
  MODIFY `supplier_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `supplier_request`
--
ALTER TABLE `supplier_request`
  MODIFY `suprequest_id` int(20) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `request_analysis`
--
ALTER TABLE `request_analysis`
  ADD CONSTRAINT `admin` FOREIGN KEY (`admin_id`) REFERENCES `admin` (`admin_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `staff` FOREIGN KEY (`staff_id`) REFERENCES `staff` (`staff_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `stationery` FOREIGN KEY (`stationery_id`) REFERENCES `stationery` (`stationery_id`) ON DELETE CASCADE;

--
-- Constraints for table `supplier_request`
--
ALTER TABLE `supplier_request`
  ADD CONSTRAINT `admin_id` FOREIGN KEY (`admin_id`) REFERENCES `admin` (`admin_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `supplier_id` FOREIGN KEY (`supplier_id`) REFERENCES `supplier` (`supplier_id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
