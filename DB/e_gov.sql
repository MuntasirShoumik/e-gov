-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 19, 2022 at 12:53 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `e_gov`
--

-- --------------------------------------------------------

--
-- Table structure for table `accountant`
--

CREATE TABLE `accountant` (
  `id` int(11) NOT NULL,
  `fname` text NOT NULL,
  `lname` text NOT NULL,
  `gender` text NOT NULL,
  `dateofbirth` int(11) NOT NULL,
  `fathername` text NOT NULL,
  `mothername` text NOT NULL,
  `uname` text NOT NULL,
  `nid` int(200) NOT NULL,
  `address` text NOT NULL,
  `city` text NOT NULL,
  `postal` text NOT NULL,
  `email` text NOT NULL,
  `phone` text NOT NULL,
  `ssc` text NOT NULL,
  `hsc` text NOT NULL,
  `hons` text NOT NULL,
  `cv` text NOT NULL,
  `pass` text NOT NULL,
  `img` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `accountant`
--

INSERT INTO `accountant` (`id`, `fname`, `lname`, `gender`, `dateofbirth`, `fathername`, `mothername`, `uname`, `nid`, `address`, `city`, `postal`, `email`, `phone`, `ssc`, `hsc`, `hons`, `cv`, `pass`, `img`) VALUES
(70, 'Shariar Mahmud', 'Sachcha', 'male', 0, 'father', 'mother', 'sachcha', 1744355448, 'Thakurgaon', 'THAKURGAON', '1211', 'sachcha.bphs@gmail.com', '01710584800', '4.00', '4.00', '3.70', '../uploads/Expert Q&A 1.pdf', 'Sachcha1@', '../uploads/DSC_6644.JPG');

-- --------------------------------------------------------

--
-- Table structure for table `issue`
--

CREATE TABLE `issue` (
  `date` date NOT NULL,
  `nid` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `mobile` varchar(50) NOT NULL,
  `issue` varchar(50) NOT NULL,
  `des` varchar(5000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `issue`
--

INSERT INTO `issue` (`date`, `nid`, `name`, `mobile`, `issue`, `des`) VALUES
('2008-12-22', '2222222222', 'muntasir', '01917479587', 'approval', 'dsss');

-- --------------------------------------------------------

--
-- Table structure for table `land_owner`
--

CREATE TABLE `land_owner` (
  `title` varchar(50) NOT NULL,
  `name` varchar(20) NOT NULL,
  `father` varchar(20) DEFAULT NULL,
  `mother` varchar(20) DEFAULT NULL,
  `birthday` date NOT NULL,
  `NID` varchar(10) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `email` varchar(30) DEFAULT NULL,
  `mobile` varchar(11) NOT NULL,
  `division` varchar(20) NOT NULL,
  `city` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `password` varchar(30) NOT NULL,
  `get_notification` tinyint(1) NOT NULL,
  `image` varchar(150) DEFAULT NULL,
  `pdf` varchar(150) NOT NULL,
  `id` int(11) NOT NULL,
  `isApproved` tinyint(1) NOT NULL,
  `amount` decimal(10,0) NOT NULL,
  `paid` decimal(10,0) NOT NULL,
  `due` decimal(10,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `land_owner`
--

INSERT INTO `land_owner` (`title`, `name`, `father`, `mother`, `birthday`, `NID`, `gender`, `email`, `mobile`, `division`, `city`, `address`, `password`, `get_notification`, `image`, `pdf`, `id`, `isApproved`, `amount`, `paid`, `due`) VALUES
('Mr.', 'muntasir', 'rahman', 'sfsf', '2022-12-01', '1111111111', 'female', 'shoumikrahman105@gmail.com', '01717479566', 'Barishal', 'Brahmanbaria', 'rrr', '11111Aa@', 1, '../uploads/Figure_3.png', '../uploads/Use_R_for_data_analysis_and_research (1).pdf', 8, 1, '470', '400', '470'),
('Mr.', 'rafat', 'rahman', 'rahman', '1996-02-22', '1234123412', 'female', '', '01864609842', 'Rajshahi', 'khkh', 'ooirt', '11111Aa@', 1, '', '../uploads/CSS Task.pdf', 15, 1, '0', '0', '0'),
('Mr.', 'Muntasir', 'rahman', '', '1999-12-26', '1717171717', 'male', 'shomikrahman.sr@gmail.com', '01917479587', 'Chattogram', 'Brahmanbaria', 'sadar', '11111Aa@', 0, '../uploads/ccd diagram 2.jpg', '../uploads/GradeReportByCurriculum20-43763-2 (1).pdf', 16, 1, '0', '0', '0'),
('Mr.', 'muntasir', '', '', '2022-12-01', '3333333333', 'male', 'shoumikrahman105@gmail.com', '01917479587', 'Khulna', 'Brahmanbaria', 'gjjhhj', '11111Aa@', 1, '../uploads/Figure_3.png', '../uploads/Use_R_for_data_analysis_and_research (1).pdf', 10, 1, '2000', '0', '2000'),
('Mr.', 'muntasir', 'rahman', 'hsjjddf', '2022-12-03', '4444444444', 'male', 'shoumikrahman105@gmail.com', '01917479587', 'Dhaka', 'Brahmanbaria', 'hh', '11111Aa@', 0, '../uploads/Considerations-Before-Choosing-an-ERP-Implementation-Partner.jpg', '../uploads/Use_R_for_data_analysis_and_research (1).pdf', 12, 1, '3000', '0', '0'),
('Mr.', 'muntasir', '', '', '2022-12-03', '5555555555', 'male', '', '01917479587', 'Dhaka', 'Brahmanbaria', 'fsf', '11111Aa@', 0, '../uploads/Figure_3.png', '../uploads/Use_R_for_data_analysis_and_research (1).pdf', 11, 0, '0', '0', '0'),
('Mr.', 'Muntasir', 'dddd', 'jjjjjj', '2022-12-07', '6767676767', 'male', 'sgho@gmail.com', '01924356756', 'Dhaka', 'dsdsd', 'gfgfgf', '22222Aa@', 0, '../uploads/Figure_3.png', '../uploads/1909.11573.pdf', 14, 1, '0', '0', '0'),
('Mr.', 'rahmansr', 'mls', 'rbb', '2022-12-01', '7777777777', 'female', '', '01917479500', 'Dhaka', 'Brahmanbaria', 'feew', '11111Aa@', 1, '../uploads/received_802544820817658.jpeg', '../uploads/CSS Task.pdf', 13, 0, '0', '0', '0');

-- --------------------------------------------------------

--
-- Table structure for table `land_owner_tax`
--

CREATE TABLE `land_owner_tax` (
  `id` int(11) NOT NULL,
  `nid` varchar(100) NOT NULL,
  `tax_amount` int(11) NOT NULL,
  `paid` int(11) NOT NULL,
  `due` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tax`
--

CREATE TABLE `tax` (
  `id` int(11) NOT NULL,
  `nid` varchar(100) NOT NULL,
  `name` text NOT NULL,
  `amount` varchar(100) NOT NULL,
  `paid` varchar(100) NOT NULL,
  `due` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tax`
--

INSERT INTO `tax` (`id`, `nid`, `name`, `amount`, `paid`, `due`) VALUES
(1, '1111111111', 'muntasir', '4000', '2000', '2000');

-- --------------------------------------------------------

--
-- Table structure for table `tax_history`
--

CREATE TABLE `tax_history` (
  `id` int(11) NOT NULL,
  `nid` varchar(50) NOT NULL,
  `date` date NOT NULL,
  `paid` int(11) NOT NULL,
  `due` int(11) NOT NULL,
  `tax_for` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tax_history`
--

INSERT INTO `tax_history` (`id`, `nid`, `date`, `paid`, `due`, `tax_for`) VALUES
(1, '1111111111', '2022-12-09', 500, 1500, ''),
(2, '1111111111', '2022-12-09', 30, 1470, ''),
(3, '1111111111', '2022-12-09', 600, 870, ''),
(4, '1111111111', '2022-12-09', 400, 470, 'land tax');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accountant`
--
ALTER TABLE `accountant`
  ADD PRIMARY KEY (`nid`),
  ADD UNIQUE KEY `UNIQUE` (`id`);

--
-- Indexes for table `issue`
--
ALTER TABLE `issue`
  ADD PRIMARY KEY (`nid`);

--
-- Indexes for table `land_owner`
--
ALTER TABLE `land_owner`
  ADD PRIMARY KEY (`NID`),
  ADD KEY `id` (`id`);
ALTER TABLE `land_owner` ADD FULLTEXT KEY `father` (`father`);

--
-- Indexes for table `land_owner_tax`
--
ALTER TABLE `land_owner_tax`
  ADD PRIMARY KEY (`nid`),
  ADD KEY `id` (`id`);

--
-- Indexes for table `tax`
--
ALTER TABLE `tax`
  ADD PRIMARY KEY (`nid`),
  ADD KEY `id` (`id`);

--
-- Indexes for table `tax_history`
--
ALTER TABLE `tax_history`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `accountant`
--
ALTER TABLE `accountant`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;

--
-- AUTO_INCREMENT for table `land_owner`
--
ALTER TABLE `land_owner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `land_owner_tax`
--
ALTER TABLE `land_owner_tax`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tax`
--
ALTER TABLE `tax`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tax_history`
--
ALTER TABLE `tax_history`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
