-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jan 18, 2022 at 06:06 PM
-- Server version: 5.7.33
-- PHP Version: 7.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `eshop`
--

-- --------------------------------------------------------

--
-- Table structure for table `client`
--

CREATE TABLE `client` (
  `id` int(11) NOT NULL,
  `firstname` varchar(200) NOT NULL,
  `lastname` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `phone` varchar(200) NOT NULL,
  `address` varchar(200) NOT NULL,
  `city` varchar(200) NOT NULL,
  `postalcode` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `client`
--

INSERT INTO `client` (`id`, `firstname`, `lastname`, `email`, `password`, `phone`, `address`, `city`, `postalcode`) VALUES
(1, 'kostas', 'xatz', 'funses18@gmail.com', '$2y$10$oW/fRfgXx28zSmNnWJ0JXugBzgNbSu/V1ggdtL/WlrjGa9PEPVUFm', '6945836892', 'koundylaki', 'heraklion', '71305');

-- --------------------------------------------------------

--
-- Table structure for table `mobilephone`
--

CREATE TABLE `mobilephone` (
  `productid` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `photoURL` varchar(350) NOT NULL,
  `model` varchar(200) NOT NULL,
  `screenSize` varchar(200) NOT NULL,
  `CPU` varchar(200) NOT NULL,
  `RAM` int(11) NOT NULL,
  `camera` varchar(200) NOT NULL,
  `battery` varchar(200) NOT NULL,
  `SAR` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mobilephone`
--

INSERT INTO `mobilephone` (`productid`, `price`, `quantity`, `photoURL`, `model`, `screenSize`, `CPU`, `RAM`, `camera`, `battery`, `SAR`) VALUES
(1, 976, 41, '', 'Iphone 13', '6.1', 'Apple A15 Bionic (5 nm)', 4, '12', '3240', '0.99 W/kg (head) 0.98 W/kg (body)'),
(2, 1729, 44, '', 'Iphone 13 Pro', '6.1', 'Apple A15 Bionic (5 nm)', 6, '12', '3095', '1.20 W/kg (head) 1.19 W/kg (body)'),
(3, 1801, 16, '', 'Iphone 13 Pro Max', '6.7', 'Apple A15 Bionic (5 nm)', 6, '12', '4352', '1.18 W/kg (head) 1.20 W/kg (body)'),
(4, 2815, 50, '', 'Iphone 12', '6.1', 'Apple A14 Bionic (5 nm)', 4, '12', '2815', '0.99 W/kg (head) 0.99 W/kg (body)'),
(5, 1145, 31, '', 'Iphone 12 Pro', '6.1', 'Apple A14 Bionic (5 nm)', 6, '12', '2815', '0.99 W/kg (head) 0.99 W/kg (body)'),
(6, 1225, 27, '', 'Iphone 12 Pro Max', '6.7', 'Apple A14 Bionic (5 nm)', 6, '12', '3687', '0.99 W/kg (head) 0.99 W/kg (body'),
(7, 1499, 29, '', 'Samsung Galaxy Z Fold 3\r\n', '7.6', 'Qualcomm SM8350 Snapdragon 888 5G (5 nm)', 12, '12', '4400', '0.73 W/kg (head) 1.22 W/kg (body)'),
(8, 858, 13, '', 'Samsung Galaxy Z Flip 3', '6.7', 'Qualcomm SM8350 Snapdragon 888 5G (5 nm)', 8, '12', '3300', '0.86 W/kg (head) 1.58 W/kg (body)'),
(9, 695, 37, '', 'Samsung Galaxy S 21\r\n', '6.2', 'Exynos 2100 (5 nm)', 8, '64', '4000', '0.74 W/kg (head) 1.08 W/kg (body)'),
(10, 995, 13, '', 'Samsung Galaxy S 21 Ultra\r\n', '6.8', 'Exynos 2100 (5 nm)', 12, '108', '5000', '0.77 W/kg (head) 1.02 W/kg (body)'),
(11, 799, 37, '', 'Samsung Galaxy S 21+\r\n', '6.7', 'Exynos 2100 (5 nm)', 8, '64', '4800', '0.65 W/kg (head) 0.95 W/kg (body)'),
(12, 899, 8, '', 'Samsung Galaxy S 20 Ultra\r\n', '6.9', 'Exynos 990 (7 nm+)', 12, '108', '5000', 'SAR: 0.94 W/kg (head) 0.95 W/kg (body)'),
(13, 199, 34, '', 'Xiaomi Poco X3 Pro\r\n', '6.67', 'Qualcomm Snapdragon 860 (7 nm)', 6, '48', '5160', '0.99 W/kg (head) 0.67 W/kg (body)'),
(14, 305, 38, '', 'Xiaomi Poco F3\r\n', '6.67', 'Qualcomm SM8250-AC Snapdragon 870 5G (7 nm)', 6, '48', '4520', 'SAR: 1.06 W/kg (head) 0.72 W/kg (body)'),
(15, 205, 32, '', 'Xiaomi Redmi Note 9 Pro\r\n', '6.67', 'Qualcomm SM7125 Snapdragon 720G (8 nm)', 8, '64', '5020', '0.87 W/kg (head) 0.71 W/kg (body)'),
(16, 259, 50, '', 'Xiaomi Mi 11 Lite\r\n', '6.55', 'Qualcomm SM7150 Snapdragon 732G (8 nm)', 4, '64', '4250', '1.07 W/kg (head) 0.82 W/kg (body)'),
(17, 419, 36, '', 'Xiaomi 11T\r\n', '6.67', 'MediaTek MT6893 Dimensity 1200 5G (6 nm)', 8, '108', '5000', '1.09 W/kg (head) 0.83 W/kg (body)'),
(18, 279, 20, '', 'Xiaomi Redmi Note 10 Pro\r\n', '6.67', 'Qualcomm SM7150 Snapdragon 732G (8 nm)', 6, '108', '5020', '1.09 W/kg (head) 1.06 W/kg (body)'),
(19, 389, 8, '', 'Huawei Nova 9\r\n', '6.57', 'Qualcomm SM7325 Snapdragon 778G 4G (6 nm)', 8, '50', '4300', '0.99 W/kg (head) 0.67 W/kg (body)'),
(20, 729, 12, '', 'Huawei P40 Pro\r\n', '6.58', 'Kirin 990 5G (7 nm+)', 8, '50', '4200', '1.06 W/kg (head) 0.72 W/kg (body)'),
(21, 246, 46, '', 'Huawei P40 Lite\r\n', '6.4', 'Kirin 810 (7 nm)', 6, '48', '4200', '0.87 W/kg (head) 0.71 W/kg (body)'),
(22, 589, 50, '', 'Huawei P30 Dual\r\n', '6.1', 'Kirin 980 (7 nm)', 4, '40', '3650', '1.07 W/kg (head) 0.82 W/kg (body)'),
(23, 744, 26, '', 'Huawei P30 Pro\r\n', '6.47', 'Kirin 980 (7 nm)', 6, '40', '4200', '1.09 W/kg (head) 0.83 W/kg (body)'),
(24, 280, 4, '', 'Huawei P Smart Z\r\n', '6.59', 'Kirin 710F (12 nm)', 4, '16', '4000', '1.09 W/kg (head) 1.06 W/kg (body)');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `orderID` int(11) NOT NULL,
  `productID` int(11) NOT NULL,
  `userID` int(11) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mobilephone`
--
ALTER TABLE `mobilephone`
  ADD PRIMARY KEY (`productid`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`orderID`),
  ADD KEY `productID` (`productID`),
  ADD KEY `userID` (`userID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `client`
--
ALTER TABLE `client`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `mobilephone`
--
ALTER TABLE `mobilephone`
  MODIFY `productid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `orderID` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`productID`) REFERENCES `orders` (`orderID`),
  ADD CONSTRAINT `orders_ibfk_2` FOREIGN KEY (`userID`) REFERENCES `orders` (`orderID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
