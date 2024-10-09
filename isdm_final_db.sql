-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 07, 2024 at 12:14 PM
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
-- Database: `isdm_final_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `inquiries`
--

CREATE TABLE `inquiries` (
  `id` int(11) NOT NULL,
  `first_name` varchar(255) DEFAULT NULL,
  `last_name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `vehicle` varchar(20) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `time` time DEFAULT NULL,
  `comments` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `inquiries`
--

INSERT INTO `inquiries` (`id`, `first_name`, `last_name`, `email`, `phone`, `vehicle`, `date`, `time`, `comments`) VALUES
(2, 'aS', 'ASA', 'malithnavZZZZZZZZZZZeen@gmail.com', 'X87887', 'F213', '2024-10-17', '12:11:00', 'DFVDFDFsssssssssssssssG'),
(4, 'aS', 'ef', 'malithnaveen@gmail.com', 'X87887', 'F213', '2024-10-23', '13:09:00', 'vbn'),
(5, 'aS', 'ef', 'asc@gmail.com', 'X87887', 'F213', '2024-10-22', '22:16:00', 'fhj'),
(6, 'gjghk', 'ef', 'malithnaveen@gmail.com', 'X87887', 'F213', '2024-10-09', '14:15:00', ''),
(7, 'eref', 'ASA', 'asc@gmail.com', 'X87887', 'F213', '2024-10-23', '15:16:00', ''),
(8, 'eref', 'ef', 'malithnaveen@gmail.com', 'X87887', 'F213', '2024-10-09', '22:26:00', '');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `PaymentID` int(11) NOT NULL,
  `UserName` varchar(255) DEFAULT NULL,
  `Email` varchar(255) DEFAULT NULL,
  `Payment` varchar(20) DEFAULT NULL,
  `PaymentAmount` varchar(10) DEFAULT NULL,
  `VehicleID` int(10) DEFAULT NULL,
  `BillingInformation` varchar(255) DEFAULT NULL,
  `CardNumber` varchar(20) DEFAULT NULL,
  `ExpirationDate` date DEFAULT NULL,
  `CVV` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`PaymentID`, `UserName`, `Email`, `Payment`, `PaymentAmount`, `VehicleID`, `BillingInformation`, `CardNumber`, `ExpirationDate`, `CVV`) VALUES
(2, 'sandun', 'gemba@gmail.com', NULL, '42456', 2445, 'Credit Card', '5453444444444444', '0000-00-00', 787),
(3, 'sandun', 'gemba@gmail.com', NULL, '42456', 2445, 'Credit Card', '5453444444444444', '0000-00-00', 787),
(4, 'sad', 'sdrhdharmasena@gmail.com', NULL, '42456', 45, 'Credit Card', '9965321484513228', '0000-00-00', 454),
(5, 'sad', 'sdrhdharmasena@gmail.com', NULL, '42456', 45, 'Credit Card', '9965321484513228', '0000-00-00', 454),
(6, 'it23844742', 'sdrhdharmasena@gmail.com', NULL, '123', 45, 'Credit Card', '4214545212131842', '0000-00-00', 121);

-- --------------------------------------------------------

--
-- Table structure for table `reservation`
--

CREATE TABLE `reservation` (
  `ReservationID` int(11) NOT NULL,
  `SpotID` varchar(10) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Date` date NOT NULL,
  `Time` time(6) NOT NULL,
  `Duration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `reservation`
--

INSERT INTO `reservation` (`ReservationID`, `SpotID`, `Name`, `Email`, `Date`, `Time`, `Duration`) VALUES
(1, 'B-11', 'g', 'sdrhdhara@gmail.com', '2024-10-17', '19:50:00.000000', 2),
(2, 'A-1', 'd', 'sena@gmail.com', '2024-10-25', '20:04:00.000000', 1),
(3, 'B-23', 'ww', 'ww@gmail.com', '2024-10-30', '20:19:00.000000', 4),
(4, 'B-12', 'ww', 'ww@gmail.com', '2024-10-30', '20:19:00.000000', 4),
(5, 'B-3', 'Sudu Dewage Randika Hansanee Dharmasena ', 'sdrhdharmasena@gmail.com', '2024-10-13', '20:46:00.000000', 1),
(6, 'B-3', 'Sudu Dewage Randika Hansanee Dharmasena ', 'sdrhdharmasena@gmail.com', '2024-10-13', '20:46:00.000000', 1),
(7, 'B-3', 'Sudu Dewage Randika Hansanee Dharmasena ', 'sdrhdharmasena@gmail.com', '2024-10-13', '20:46:00.000000', 1),
(8, 'B-13', 'wwp', 'na@gmail.com', '2024-10-29', '12:34:00.000000', 1),
(10, 'C-12', 'l', 'sdrasena@gmail.com', '2024-10-16', '21:09:00.000000', 1),
(12, 'C-13', 'il', 'sdrhdharmasena@gmail.com', '2024-10-22', '21:20:00.000000', 1),
(13, 'A-4', 'Sudu Dewage Randika Hansanee Dharmasena ', 'sdrhdharmasena@gmail.com', '2024-10-23', '21:19:00.000000', 2);

-- --------------------------------------------------------

--
-- Table structure for table `ureg`
--

CREATE TABLE `ureg` (
  `UserID` int(11) NOT NULL,
  `UserName` varchar(100) NOT NULL,
  `FullName` varchar(255) NOT NULL,
  `Gender` varchar(10) NOT NULL,
  `MobileNumber` varchar(15) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `NIC` varchar(20) NOT NULL,
  `Address` varchar(255) NOT NULL,
  `DOB` date NOT NULL,
  `Password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ureg`
--

INSERT INTO `ureg` (`UserID`, `UserName`, `FullName`, `Gender`, `MobileNumber`, `Email`, `NIC`, `Address`, `DOB`, `Password`) VALUES
(13, 'sssssssssssssss', 'ss', 'Male', '078-2359036', 'a@gmail.com', '20010064444', '531/A1\r\nPolpitimukalana', '2024-10-30', '!@AS12as'),
(14, 'bvbgvgv', 'gfhyc', 'Female', '074-8678558', 'as@gmail.com', '899565', 'knjknl', '2024-10-21', '!@AS12as'),
(18, 'sfff', 'kuruppu', 'Male', '076-2359036', 'shjhnmna@gmail.com', '2001006', '531/A1\r\nPolaa', '2024-11-06', '!@AS12as'),
(19, 'q', 'hjhjhbxj', 'Female', '078-2359036', 'sdrhdhededxesxna@gmail.com', '788965822136', '531/A1\r\nPolpitimukalana', '2024-10-08', '!@AS12as'),
(20, 'hansanee', 'dharmasena', 'Female', '075-8965896', 'gam@gmail.com', '5669855314', 'cscx s', '2024-10-29', '!@AS12as'),
(22, 'e', 'd', 'Male', '076-2359036', 'sdrhdharmffffffffffffasena@gmail.com', '2558964574', '531/A1\r\nPolpitimukalana', '2024-10-07', '!@AS12as'),
(23, 'abc', 'Randika z', 'Female', '076-2359036', 'sdrhzsena@gmail.com', '', '531/A1\r\nPolpitimukalana', '0000-00-00', '!@AS12as'),
(24, 'abc', 'qq', 'Female', '076-2359036', 'sdrhdhaaaaaaaaarmasena@gmail.com', '200183400602', '531/A1\r\nPolpitimukalana', '2024-10-02', '!@AS12as'),
(26, 'hyyt', 'ssssss', 'Male', '048-7896587', 'ghj@gmail.com', '78896548213', 'ssss', '2024-11-01', '!@AS12as'),
(28, 'sssddddddds', 'Rada Hansanee', 'Female', '076-2359036', 'sdrfffffffffffrmasena@gmail.com', '444444444444444', '531/A1\r\nPolpitimukalana', '2024-10-31', '!@AS12as'),
(29, 'zzz', 'zzz', 'Female', '076-2359036', 'sdrhzzzasena@gmail.com', '788965822136', '531/A1\r\nPolpitimukalana', '2024-10-01', '!@AS12as'),
(31, 'zzz', 'zzz', 'Female', '076-2359036', 'sdrhzzzasenxda@gmail.com', '788965822136', '531/A1\r\nPolpitimukalana', '2024-10-01', '!@AS12as'),
(32, 'zz', 'qws', 'Female', '076-2359036', 'sdrhdharmaseuuuuuuuuuuuueeeeeena@gmail.com', '1212121', '531/A1\r\nPolpitimukalana', '2024-10-15', '!@AS12as'),
(33, 'uditha', 'sAD', 'Female', '076-2359036', 'sdTTTTTTTTTTsena@gmail.com', '2001006', '531/A1Zpitimukalana', '2024-10-16', '!@AS12as'),
(34, 'srio', 'ario', 'Female', '076-2359036', 'sdrhdharmagtrsena@gmail.com', '2558964574', '531/A1\r\nPolpitimukalana', '2024-10-09', '!@AS12as'),
(35, 'nath', 'fesdesd', 'Male', '017-8965896', 'df@gmail.com', '787121', 'sdfvdsc xz', '2024-10-17', '!@AS12as'),
(37, 'HAnsi', '5748545bhfgdrfxch', 'Female', '123-1254789', 'VZGfTG@gmail.com', '121545452163', 'axzxzxz', '2024-10-31', '!@AS12as'),
(38, 'srio', 'pulle', 'Female', '012-7896582', 'asd@gmail.com', '78753.03', '32356axasxsax', '2024-10-30', '!@AS12as'),
(39, 'Dilshan', 'Rajapakshe', 'Male', '071-9678767', 'dilshanrajapakshe8@gmail.com', '200231303887', 'Kurunegala', '2002-11-08', 'Hansi@123'),
(41, 'dhame', 'rwxrwe', 'Female', '071-8975964', 'asc@gmail.com', '123456987v', 'gfdgfzfrtrr', '2024-10-21', '!@AS12as'),
(42, 'tyt', 'uii', 'Female', '', '', '', '', '0000-00-00', '!@AS12as');

-- --------------------------------------------------------

--
-- Table structure for table `vehicle`
--

CREATE TABLE `vehicle` (
  `VehicleID` int(11) NOT NULL,
  `UserID` int(11) NOT NULL,
  `FullName` varchar(20) NOT NULL,
  `MobileNumber` varchar(10) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `LicensePlateNo` varchar(10) NOT NULL,
  `Model` varchar(10) NOT NULL,
  `Year` int(11) NOT NULL,
  `Color` varchar(10) NOT NULL,
  `VehicleType` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `vehicle`
--

INSERT INTO `vehicle` (`VehicleID`, `UserID`, `FullName`, `MobileNumber`, `Email`, `LicensePlateNo`, `Model`, `Year`, `Color`, `VehicleType`) VALUES
(11, 0, 'ddwee', '0717858796', 'asc@gmail.com', '85656', 'dsd', 565, 'sddsd', 'Car'),
(12, 25, 'Randika Hansanee', '0762359036', 'sdrhdharmasena@gmail.com', '123d', 'toyota', 2333, 'red', 'Truck'),
(13, 25, 'Raanee', '0762359036', 'asena@gmail.com', '123d', 'toyota', 2333, 'red', 'Car'),
(75, 4, 'ddwee', '0717858796', 'asc@gmail.com', '85656', 'dsd', 565, 'sddsd', 'Car');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `inquiries`
--
ALTER TABLE `inquiries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`PaymentID`);

--
-- Indexes for table `reservation`
--
ALTER TABLE `reservation`
  ADD PRIMARY KEY (`ReservationID`);

--
-- Indexes for table `ureg`
--
ALTER TABLE `ureg`
  ADD PRIMARY KEY (`UserID`),
  ADD UNIQUE KEY `Email` (`Email`);

--
-- Indexes for table `vehicle`
--
ALTER TABLE `vehicle`
  ADD PRIMARY KEY (`VehicleID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `inquiries`
--
ALTER TABLE `inquiries`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `PaymentID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `reservation`
--
ALTER TABLE `reservation`
  MODIFY `ReservationID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `ureg`
--
ALTER TABLE `ureg`
  MODIFY `UserID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
