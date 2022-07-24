-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 29, 2022 at 03:22 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sales_and_stock`
--

-- --------------------------------------------------------

--
-- Table structure for table `branchtable`
--

CREATE TABLE `branchtable` (
  `branchid` int(100) NOT NULL,
  `branchname` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `branchtable`
--

INSERT INTO `branchtable` (`branchid`, `branchname`) VALUES
(1, 'Kariakoo Infinix Tower');

-- --------------------------------------------------------

--
-- Table structure for table `carttable`
--

CREATE TABLE `carttable` (
  `cartid` int(100) NOT NULL,
  `productid` int(100) NOT NULL,
  `quantity` decimal(65,0) NOT NULL,
  `amount` decimal(65,0) NOT NULL,
  `userid` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `customertable`
--

CREATE TABLE `customertable` (
  `customerid` int(100) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `branchid` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customertable`
--

INSERT INTO `customertable` (`customerid`, `fullname`, `address`, `phone`, `branchid`) VALUES
(1, 'Othman Issa', 'Kariakoo', '0777665544', 1);

-- --------------------------------------------------------

--
-- Table structure for table `producttable`
--

CREATE TABLE `producttable` (
  `productid` int(100) NOT NULL,
  `productname` varchar(255) NOT NULL,
  `producttype` varchar(255) NOT NULL,
  `barcode` varchar(255) NOT NULL,
  `amount` decimal(65,0) NOT NULL,
  `quantity` decimal(65,0) NOT NULL,
  `productdate` date NOT NULL,
  `branchid` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `producttable`
--

INSERT INTO `producttable` (`productid`, `productname`, `producttype`, `barcode`, `amount`, `quantity`, `productdate`, `branchid`) VALUES
(1, 'Extension', 'Tronics', 'IG003928421', '11000', '89', '2022-03-29', 1);

-- --------------------------------------------------------

--
-- Table structure for table `selltable`
--

CREATE TABLE `selltable` (
  `sellid` int(100) NOT NULL,
  `customerid` int(100) NOT NULL,
  `productid` int(100) NOT NULL,
  `quantity` decimal(65,0) NOT NULL,
  `amount` decimal(65,0) NOT NULL,
  `discount` decimal(65,0) NOT NULL,
  `checkoutmoney` decimal(65,0) NOT NULL,
  `userid` int(100) NOT NULL,
  `saledate` date NOT NULL,
  `invoice` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `selltable`
--

INSERT INTO `selltable` (`sellid`, `customerid`, `productid`, `quantity`, `amount`, `discount`, `checkoutmoney`, `userid`, `saledate`, `invoice`) VALUES
(1, 1, 1, '11', '121000', '0', '130000', 2, '2022-03-29', 'INV-2903-73615');

-- --------------------------------------------------------

--
-- Table structure for table `usertable`
--

CREATE TABLE `usertable` (
  `userid` int(100) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `pwd` varchar(255) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `role` varchar(255) NOT NULL,
  `status` varchar(11) NOT NULL,
  `branchid` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `usertable`
--

INSERT INTO `usertable` (`userid`, `fname`, `lname`, `address`, `phone`, `email`, `pwd`, `gender`, `role`, `status`, `branchid`) VALUES
(2, 'Admin', 'Admin', 'DIT', '0776554433', 'admin@gmail.com', '$2y$10$rlR1wVes0M/Qh2p0XH7dJ.ISynbkyBVVzW13zs.v/PZ82zUbwnIIm', 'MME', 'Msimamizi', '0', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `branchtable`
--
ALTER TABLE `branchtable`
  ADD PRIMARY KEY (`branchid`);

--
-- Indexes for table `carttable`
--
ALTER TABLE `carttable`
  ADD PRIMARY KEY (`cartid`),
  ADD KEY `productid` (`productid`),
  ADD KEY `userid` (`userid`);

--
-- Indexes for table `customertable`
--
ALTER TABLE `customertable`
  ADD PRIMARY KEY (`customerid`),
  ADD KEY `branchid` (`branchid`);

--
-- Indexes for table `producttable`
--
ALTER TABLE `producttable`
  ADD PRIMARY KEY (`productid`),
  ADD KEY `branchid` (`branchid`);

--
-- Indexes for table `selltable`
--
ALTER TABLE `selltable`
  ADD PRIMARY KEY (`sellid`),
  ADD KEY `customerid` (`customerid`,`userid`),
  ADD KEY `userid` (`userid`),
  ADD KEY `productid` (`productid`);

--
-- Indexes for table `usertable`
--
ALTER TABLE `usertable`
  ADD PRIMARY KEY (`userid`),
  ADD UNIQUE KEY `email` (`email`),
  ADD KEY `branchid` (`branchid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `branchtable`
--
ALTER TABLE `branchtable`
  MODIFY `branchid` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `carttable`
--
ALTER TABLE `carttable`
  MODIFY `cartid` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `customertable`
--
ALTER TABLE `customertable`
  MODIFY `customerid` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `producttable`
--
ALTER TABLE `producttable`
  MODIFY `productid` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `selltable`
--
ALTER TABLE `selltable`
  MODIFY `sellid` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `usertable`
--
ALTER TABLE `usertable`
  MODIFY `userid` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `carttable`
--
ALTER TABLE `carttable`
  ADD CONSTRAINT `carttable_ibfk_1` FOREIGN KEY (`userid`) REFERENCES `usertable` (`userid`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `carttable_ibfk_2` FOREIGN KEY (`productid`) REFERENCES `producttable` (`productid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `customertable`
--
ALTER TABLE `customertable`
  ADD CONSTRAINT `customertable_ibfk_1` FOREIGN KEY (`branchid`) REFERENCES `branchtable` (`branchid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `producttable`
--
ALTER TABLE `producttable`
  ADD CONSTRAINT `producttable_ibfk_1` FOREIGN KEY (`branchid`) REFERENCES `branchtable` (`branchid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `selltable`
--
ALTER TABLE `selltable`
  ADD CONSTRAINT `selltable_ibfk_1` FOREIGN KEY (`userid`) REFERENCES `usertable` (`userid`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `selltable_ibfk_2` FOREIGN KEY (`customerid`) REFERENCES `customertable` (`customerid`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
