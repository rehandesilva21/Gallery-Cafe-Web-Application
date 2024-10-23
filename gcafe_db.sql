-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Sep 29, 2024 at 07:20 AM
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
-- Database: `gcafe_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(50) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `name`, `image`) VALUES
(2, 'Sri Lanka', '1600654380_cover 2.jpg'),
(3, 'india', 'chinesefood.jpg'),
(4, 'japanese', '141017150059-sri-lanka-food-3.jpg'),
(9, 'Italian', '01.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `cusId` int(10) UNSIGNED NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(150) NOT NULL,
  `userName` varchar(50) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`cusId`, `name`, `email`, `userName`, `phone`, `password`) VALUES
(1, 'avishka', 'avishaka03@gmail.com', 'aviya', '0715454698', 'aviya'),
(2, 'Hansaka Ravishan', 'hansakaravi02@gmail.com', 'hansaka02', '0712875690', 'hansaka'),
(3, 'W.W.R de Silva', 'rehandesilva373@gmail.com', 'rehan21', '0768164113', 'rehan21'),
(4, 'Max stealth', 'mxs@gmail.com', 'mx21', '780298176', 'mx321');

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE `event` (
  `name` varchar(100) NOT NULL,
  `description` varchar(600) NOT NULL,
  `startDate` date NOT NULL,
  `startTime` time NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`name`, `description`, `startDate`, `startTime`, `image`) VALUES
('yryyr', 'utuytyt', '2024-09-12', '22:48:00', '04.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `favourite`
--

CREATE TABLE `favourite` (
  `cus_id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `favourite`
--

INSERT INTO `favourite` (`cus_id`, `menu_id`) VALUES
(1, 2),
(1, 3),
(1, 4),
(1, 5),
(1, 7);

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(100) NOT NULL,
  `Category` varchar(50) NOT NULL,
  `description` varchar(1000) NOT NULL,
  `price` int(11) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`id`, `name`, `Category`, `description`, `price`, `image`) VALUES
(1, 'Chicken Mix Rice', 'Sri Lanka', 'lorem', 1500, 'indian_food.jpg'),
(2, 'rice and curry', 'Sri Lanka', 'white rice with 5 currys', 750, 'riceandcurry.jpg'),
(3, 'Seafood mix rice', 'Sri Lanka', 'lorem', 2000, 'chinesefood.jpg'),
(4, 'mix rice', 'Sri Lanka', 'lorem', 2100, 'soup.jpg'),
(5, 'super pizza', 'Pizza', 'lorem', 750, 'indian_food.jpg'),
(6, 'wade', 'india', 'lorem', 120, 'chinesefood.jpg'),
(7, 'Milk Rice', 'Sri Lanka', 'Milk rice with lunu miris', 350, '1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `order_table`
--

CREATE TABLE `order_table` (
  `id` int(11) UNSIGNED NOT NULL,
  `cusname` varchar(100) NOT NULL,
  `itemName` varchar(100) NOT NULL,
  `qty` int(11) NOT NULL,
  `totprice` int(11) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `order_table`
--

INSERT INTO `order_table` (`id`, `cusname`, `itemName`, `qty`, `totprice`, `date`, `time`, `status`) VALUES
(1, 'avishka', 'Chicken Mix Rice', 5, 7500, '2024-09-22', '06:12:10', 'done'),
(2, 'avishka', 'wade', 20, 2400, '2024-09-22', '06:12:10', 'done');

-- --------------------------------------------------------

--
-- Table structure for table `promotion`
--

CREATE TABLE `promotion` (
  `name` varchar(100) NOT NULL,
  `description` varchar(600) NOT NULL,
  `startDate` date NOT NULL,
  `endDate` date NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `promotion`
--

INSERT INTO `promotion` (`name`, `description`, `startDate`, `endDate`, `image`) VALUES
('50% discount for All dishes', '50% discount', '2024-08-27', '2024-09-05', '03.jpg'),
('adjad', 'lorem', '2024-07-31', '2024-08-29', '1600656600_checken2.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `reservation_table`
--

CREATE TABLE `reservation_table` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(200) NOT NULL,
  `email` varchar(150) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `resdate` date NOT NULL,
  `restime` time NOT NULL,
  `noGuest` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `reservation_table`
--

INSERT INTO `reservation_table` (`id`, `name`, `email`, `phone`, `resdate`, `restime`, `noGuest`) VALUES
(4, 'W.W.R de Silva', '$rehandesilva373@gmail.com', '0768164113', '2024-09-06', '13:41:00', 2),
(5, 'Stewan', '$steve@gmail.com', '29832129', '2024-09-27', '14:44:00', 4);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `username` varchar(50) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `usertype` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`username`, `name`, `email`, `password`, `usertype`) VALUES
('rehan21', 'Rehan', 'rehandesilva373@gmail.com', 'rehan123', 'admin'),
('shana', 'Hansaka', 'hansakaravi02@gmail.com', '12345', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`cusId`);

--
-- Indexes for table `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`name`);

--
-- Indexes for table `favourite`
--
ALTER TABLE `favourite`
  ADD PRIMARY KEY (`cus_id`,`menu_id`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_table`
--
ALTER TABLE `order_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `promotion`
--
ALTER TABLE `promotion`
  ADD PRIMARY KEY (`name`);

--
-- Indexes for table `reservation_table`
--
ALTER TABLE `reservation_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `cusId` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `order_table`
--
ALTER TABLE `order_table`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `reservation_table`
--
ALTER TABLE `reservation_table`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
