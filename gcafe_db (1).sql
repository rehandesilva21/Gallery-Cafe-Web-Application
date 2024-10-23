-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 05, 2024 at 07:34 AM
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
(12, 'Sri Lankan', 'pizza.png'),
(13, 'Chinese', 'portfolio-8.jpg'),
(15, 'Thai', '3.png'),
(16, 'Dessert', '3.png'),
(17, 'Italian', 'italian-food.jpg'),
(18, 'Indian', 'pngwing.com - 2024-10-04T074313.451.png');

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
(5, 'Rehan de Silva', 'wishwarehan824@gmail.com', 'rehan21', '0768164113', 'rehan21');

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
('Experenza', '2019 ICBT Alumini Assosiation batch party', '2024-09-12', '22:48:00', '04.jpg');

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
(1, 4),
(1, 5),
(1, 7),
(1, 10),
(1, 11),
(1, 16),
(1, 17),
(5, 29);

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
(29, 'Margherita Pizza', 'Italian', 'Classic pizza with tomato sauce, fresh mozzarella, and basil', 1500, 'pizza.png'),
(30, 'Grilled Salmon', 'Chinese', 'Fresh salmon fillet grilled to perfection, served with roasted vegetables', 550, 'pngwing.com - 2024-10-04T074313.451.png'),
(31, 'Caesar Salad', 'Thai', 'Crisp romaine lettuce, croutons, parmesan cheese, and Caesar dressing', 650, 'pngwing.com - 2024-10-04T074552.704.png'),
(32, 'Beef Burger', 'Italian', 'Juicy beef patty with lettuce, tomato, cheese, and special sauce', 700, 'pngwing.com - 2024-10-04T074744.005.png'),
(33, 'Pasta Carbonara', 'Italian', 'Spaghetti with crispy pancetta, egg, pecorino cheese, and black pepper', 1200, 'pngwing.com - 2024-10-04T074959.222.png'),
(34, 'Chicken Tikka', 'Indian', 'Tender chicken in a creamy tomato-based sauce, served with basmati rice', 600, 'pngwing.com - 2024-10-04T075314.550.png'),
(35, 'Vege Stir', 'Thai', 'Assorted fresh vegetables stir-fried in a savory sauce, served with rice', 450, 'pngwing.com - 2024-10-04T075706.507.png'),
(36, 'Lava Cake', 'Dessert', 'Warm chocolate cake with a gooey center, served with vanilla ice cream', 380, 'pngwing.com - 2024-10-04T101201.605.png'),
(37, 'Greek Salad', 'Thai', 'Fresh cucumbers, tomatoes, olives, feta cheese, and red onions with olive oil dressing', 270, 'pngwing.com - 2024-10-04T101644.645.png'),
(38, 'Sushi Platter', 'Thai', 'Assorted sushi rolls and sashimi, served with wasabi, ginger, and soy sauce', 550, 'pngwing.com - 2024-10-04T101906.008.png');

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
(2, 'avishka', 'wade', 20, 2400, '2024-09-22', '06:12:10', 'done'),
(3, 'Rehan de Silva', 'Fish Roll', 10, 2000, '2024-10-03', '09:47:31', 'ongoing');

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
('50% discount for All dishes', '50% discount', '2024-08-27', '2024-09-05', '03.jpg');

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
(4, 'W.W.R de Silva', '$rehandesilva373@gmail.com', '0768164113', '2024-09-06', '13:41:00', 2);

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
('kavee_u', 'Kaveesha ', 'kaveeshaudani02@gmail.com', 'kavee123', 'staff'),
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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `cusId` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `order_table`
--
ALTER TABLE `order_table`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `reservation_table`
--
ALTER TABLE `reservation_table`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
