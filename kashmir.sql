-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 04, 2022 at 10:58 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kashmir`
--

-- --------------------------------------------------------

--
-- Table structure for table `cashier`
--

CREATE TABLE `cashier` (
  `CASHIER ID` int(255) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `CNIC` varchar(255) NOT NULL,
  `Phone` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cashier`
--

INSERT INTO `cashier` (`CASHIER ID`, `Name`, `CNIC`, `Phone`, `Email`, `Password`) VALUES
(1, 'faayez', '282988379897398', '03240539099', 'aatique987@gmail.com', '8899');

-- --------------------------------------------------------

--
-- Table structure for table `chef`
--

CREATE TABLE `chef` (
  `CHEF ID` int(255) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `CNIC` varchar(255) NOT NULL,
  `Phone` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `chef`
--

INSERT INTO `chef` (`CHEF ID`, `Name`, `CNIC`, `Phone`, `Email`, `Password`) VALUES
(1, 'mukarram', '8120175011601', '03240539099', 'aatique987@gmail.com', '1122');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `msg_id` int(255) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `EMAIL` varchar(255) NOT NULL,
  `MESSAGE` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`msg_id`, `Name`, `EMAIL`, `MESSAGE`) VALUES
(10, 'Atique Ahmad', 'aatique987@gmail.com', 'The valley, the mountains and the river – everything about the stunning land\r\n'),
(15, 'Muaz', 'muaz987@gmail.com', 'hi there! '),
(17, 'Adnan Zubair', 'adnandanicha98@gmail.com', 'Chinese food, canned vegetables, soups and processed meats'),
(18, 'Atique Ahmad', 'aatique987@gmail.com', 'Chinese food, canned vegetables, soups and processed sgar');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `CUSTOMER ID` int(255) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `CNIC` varchar(255) NOT NULL,
  `Phone` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Password` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`CUSTOMER ID`, `Name`, `CNIC`, `Phone`, `Email`, `Password`) VALUES
(7, 'ATQ', '8120175011601', '03240539096', 'aatique9800@gmail.com', 6677),
(9, 'Rana Ahmad Waheed', '8120137699337', '03240588099', 'rana987@gmail.com', 0),
(11, 'muaz', '8120175022783', '03240539077', 'muaz987@gmail.com', 8899),
(13, 'Usama', '8120384799389', '03340539099', 'usama123@gmail.com', 2233),
(15, 'Atique ', '81201378229809', '03240539099', 'aatique000@gmail.com', 1122),
(17, 'MALIK', '7837837798268990', '03240539099', 'aatique987@gmail.com', 4455),
(19, 'AHMADA', '83764876746873', '03240539099', 'ahmad@gmail.com', 1122);

-- --------------------------------------------------------

--
-- Table structure for table `manager`
--

CREATE TABLE `manager` (
  `MANAGER ID` int(255) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `CNIC` varchar(255) NOT NULL,
  `Phone` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `manager`
--

INSERT INTO `manager` (`MANAGER ID`, `Name`, `CNIC`, `Phone`, `Email`, `Password`) VALUES
(1, 'Atique ', '03240539099', '8120175011601', 'aatique987@gmail.com', '1133');

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `Order id` int(255) NOT NULL,
  `Customer Name` varchar(255) NOT NULL,
  `Customer Phone` varchar(255) NOT NULL,
  `Customer Email` varchar(255) NOT NULL,
  `Products Name` varchar(255) NOT NULL,
  `Products Price` int(255) NOT NULL,
  `Products Quantity` int(255) NOT NULL,
  `Total Price` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `order`
--

INSERT INTO `order` (`Order id`, `Customer Name`, `Customer Phone`, `Customer Email`, `Products Name`, `Products Price`, `Products Quantity`, `Total Price`) VALUES
(29, 'MALIK', '03240539099', 'aatique987@gmail.com', 'Raita / Salad', 50, 3, 150),
(31, 'muaz', '03240539077', 'muaz987@gmail.com', 'Zinger Burger', 300, 1, 300),
(33, 'muaz', '03240539077', 'muaz987@gmail.com', 'Pizza', 600, 1, 600),
(35, 'MALIK', '03240539099', 'aatique987@gmail.com', 'Soup', 200, 2, 400);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `ID` int(10) NOT NULL,
  `PNAME` varchar(250) NOT NULL,
  `P_PRICE` double(9,2) NOT NULL,
  `P_image` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`ID`, `PNAME`, `P_PRICE`, `P_image`) VALUES
(1, 'DRINK BOTTLE', 100.00, './ajk_img/img1%20(1).jpg'),
(2, 'Sandwich', 200.00, './ajk_img/img1%20(2).jpg'),
(3, 'Pizza', 600.00, './ajk_img/img1%20(3).jpg'),
(4, 'Shawarma', 300.00, './ajk_img/img1%20(4).jpg'),
(5, 'Soup', 200.00, './ajk_img/img1%20(5).jpg'),
(6, 'Raita / Salad', 50.00, './ajk_img/img1%20(6).jpg'),
(7, 'Zinger Burger', 300.00, './ajk_img/img1%20(7).jpg'),
(8, 'Kabab', 200.00, './ajk_img/img1%20(8).jpg');

-- --------------------------------------------------------

--
-- Table structure for table `waiter`
--

CREATE TABLE `waiter` (
  `WAITER ID` int(255) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `CNIC` varchar(255) NOT NULL,
  `Phone` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `waiter`
--

INSERT INTO `waiter` (`WAITER ID`, `Name`, `CNIC`, `Phone`, `Email`, `Password`) VALUES
(1, 'Mobeen', '8120193898922', '03240539099', 'mobeen987@gmail.com', '3344'),
(6, 'Adnan', '828282839377980', '03240539099', 'Adnan987@gmail.com', '1177');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cashier`
--
ALTER TABLE `cashier`
  ADD PRIMARY KEY (`CASHIER ID`),
  ADD UNIQUE KEY `CNIC` (`CNIC`),
  ADD UNIQUE KEY `Email` (`Email`);

--
-- Indexes for table `chef`
--
ALTER TABLE `chef`
  ADD PRIMARY KEY (`CHEF ID`),
  ADD UNIQUE KEY `CNIC` (`CNIC`),
  ADD UNIQUE KEY `Email` (`Email`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`msg_id`),
  ADD UNIQUE KEY `MESSAGE` (`MESSAGE`) USING HASH;

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`CUSTOMER ID`),
  ADD UNIQUE KEY `CNIC` (`CNIC`);

--
-- Indexes for table `manager`
--
ALTER TABLE `manager`
  ADD PRIMARY KEY (`MANAGER ID`),
  ADD UNIQUE KEY `CNIC` (`CNIC`),
  ADD UNIQUE KEY `Email` (`Email`);

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`Order id`),
  ADD UNIQUE KEY `Products Name` (`Products Name`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `waiter`
--
ALTER TABLE `waiter`
  ADD PRIMARY KEY (`WAITER ID`),
  ADD UNIQUE KEY `CNIC` (`CNIC`),
  ADD UNIQUE KEY `Email` (`Email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cashier`
--
ALTER TABLE `cashier`
  MODIFY `CASHIER ID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `chef`
--
ALTER TABLE `chef`
  MODIFY `CHEF ID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `msg_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `CUSTOMER ID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `manager`
--
ALTER TABLE `manager`
  MODIFY `MANAGER ID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `order`
--
ALTER TABLE `order`
  MODIFY `Order id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `waiter`
--
ALTER TABLE `waiter`
  MODIFY `WAITER ID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
