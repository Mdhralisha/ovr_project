-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 29, 2023 at 03:07 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ovehiclerental`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `admin_name` varchar(255) DEFAULT NULL,
  `admin_address` varchar(255) DEFAULT NULL,
  `admin_email` varchar(255) DEFAULT NULL,
  `admin_contact` bigint(20) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `admin_name`, `admin_address`, `admin_email`, `admin_contact`, `password`) VALUES
(1, 'Alisha Manandhar', 'kamalbinayak, Bhaktapur', 'mdhralisha590@gmail.com', 9803988722, '$2y$10$6csqrtsy2bhl8pTRr/sicOVfdkPcfb5r9NtGK1x0Rf3vZ6iVi3dmu'),
(2, 'Nischal Shakya', 'Kumaripati, Lalitpur', 'shakyanischal55@gmail.com', 9840151590, '$2y$10$uGraFRf6OuvkEEGAlAgOueFRlW/feWMpgiXMJmKaGKvjhdipfPdmm');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `category_id` int(11) NOT NULL,
  `category_name` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`category_id`, `category_name`) VALUES
(1, 'Two wheeler'),
(2, 'Four Wheeler');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `customer_id` int(11) NOT NULL,
  `customer_name` varchar(255) DEFAULT NULL,
  `customer_contact` bigint(20) DEFAULT NULL,
  `customer_email` varchar(255) DEFAULT NULL,
  `customer_address` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`customer_id`, `customer_name`, `customer_contact`, `customer_email`, `customer_address`, `password`) VALUES
(1, 'Alisha Manandhar', 9861770873, 'mdhralisha590@gmail.com', 'kamalbinayak, Bhaktapur', '$2y$10$Uk21nC20thCRgGCcCfPhFufhKFLnzoWbgPo7.TAhR9BLTX7hlG9l2'),
(2, 'Megan Giri', 9803806203, 'megangiri0527@gmail.com', 'Imadol, Lalitpur', '$2y$10$gVW/gDPXsTZX8pX37Ci7cO6MyYuN1uPCBszFn00xEXBYsYcKwAsbO'),
(3, 'Swechchha Chhetri', 9841211652, 'cswechchha@gmail.com', 'Bhairahawa', '$2y$10$5oVL/RqDeUhDA0ujOcFEUOqOmnwfJwcvZru3hePW2PQso27VB3Rfq'),
(4, 'Sujal Manandhar', 9881382883, 'mdhrsujal@gmail.com', 'Bhaktapur', '$2y$10$uG0UEDxOfArDPCkXDvAfwujcoyjHA8ElmNHAoNBhuCIyFEyYqinDu'),
(5, 'Manisha Manandhar', 9841085500, 'mdhrmanisha@gmail.com', 'Kalanki', '$2y$10$eYKWYTRS//YVaW9qnGH1wOwJjvUMYsT7Dl7KZ5kMYLDDREO1f1fsq'),
(6, 'Nischal Shakya', 9840151590, 'shakyanischal55@gmail.com', 'Kumaripati, Lalitpur', '$2y$10$HkHk1a4bsKWnZbduyDrV6eYTLfs3T8Dj8SKLQZ6qNLPlaohPwGcTi'),
(7, 'Urusha Manandhar', 9861781324, 'mdhrurusha@gmail.com', 'Chapagaun, Lalitpur', '$2y$10$V5cBSibGz4PjvvJP83KbgO2wVPoyYOqKrBtCo6XrFyUbQD47/5bzS'),
(8, 'Ramesh Kunwar', 9841085500, 'rameshkunwar@gmail.com', 'Dhobighat, Lalitpur', '$2y$10$eI6xi4/d34VUbLa9ZVYf1OHqlwY8/L50ItctfK4wNZv/3vp2MO.yy'),
(9, 'Aakanshya Gimire', 9861781321, 'aakanshyag@gmail.com', 'chabel, kathmandu', '$2y$10$YZjNi6ox2SdftBmxJhTD0OEdYtv47MPkVmC5YOT2SU4KlCKu8nE9q'),
(10, 'Sujala Manandhar', 9841210065, 'mdhrsujal@gmail.com', 'kamalpokhari, Bkt', '$2y$10$GIiLtahV3TdrGhBLQ2KWzOdiuT9QlIo6zkmYp4cVMa7rp9pBNIXOe'),
(11, 'Benju Mdhr', 9840151520, 'benju@gmail.com', 'Kathmandu', '$2y$10$/PWNsSo9UJ39O8z4IeeSNOZSTLTs16tvJ2IJ90XnWc46m2NjlJCci'),
(12, 'Mdhr', 984323832, 'mdhr@gmail.com', 'Bhairahawa', '$2y$10$yLutsJk8cFS.G4Yw/lFEDOUD80IsAXCw5IE8YOef0waPgq8aT81.W'),
(13, 'Anisha Manandhar', 9841085526, 'mdhranisha590@gmai.com', 'BKT', '$2y$10$GO6PvDJZGWKbUHlP1usuuuSp.P5G.lfAsJ7qneCTdx1gP8/VXzX0K');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `payment_id` int(11) NOT NULL,
  `payment_type` varchar(255) DEFAULT NULL,
  `payment_status` varchar(255) DEFAULT NULL,
  `payment_amount` bigint(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`payment_id`, `payment_type`, `payment_status`, `payment_amount`) VALUES
(1, 'cash', 'completed', 2400),
(2, 'cash', 'completed', 1000),
(3, 'cash', 'pending', 1800),
(4, 'cash', 'pending', 4800),
(5, 'cash', 'pending', 4800),
(6, 'cash', 'pending', 5000),
(7, 'cash', 'pending', 800),
(8, 'cash', 'pending', 5600),
(9, 'cash', 'pending', 5600),
(10, 'cash', 'pending', 6400),
(11, 'cash', 'pending', 2400),
(12, 'cash', 'completed', 2400),
(13, 'cash', 'pending', 7500),
(14, 'cash', 'completed', 900),
(15, 'cash', 'pending', 1200),
(16, 'cash', 'pending', 1200),
(17, 'cash', 'pending', 1800),
(18, 'cash', 'pending', 1800),
(19, 'cash', 'completed', 1200),
(20, 'cash', 'pending', 2800),
(21, 'cash', 'pending', 2800),
(22, 'cash', 'pending', 2400),
(23, 'cash', 'pending', 2400),
(24, 'cash', 'pending', 2400),
(25, 'cash', 'completed', 4200),
(26, 'cash', 'pending', 600),
(27, 'cash', 'pending', 1200),
(28, 'cash', 'completed', 4000),
(29, 'cash', 'completed', 1600),
(30, 'cash', 'pending', 1200),
(31, 'cash', 'pending', 900),
(32, 'cash', 'pending', 5000),
(33, 'cash', 'pending', 4200),
(34, 'cash', 'completed', 2800),
(35, 'cash', 'pending', 2800),
(36, 'cash', 'pending', 3000);

-- --------------------------------------------------------

--
-- Table structure for table `rent`
--

CREATE TABLE `rent` (
  `rental_id` int(11) NOT NULL,
  `rental_status` varchar(255) DEFAULT NULL,
  `start_date` varchar(255) DEFAULT NULL,
  `end_date` varchar(255) DEFAULT NULL,
  `customer_id` int(11) DEFAULT NULL,
  `vehicle_id` int(11) DEFAULT NULL,
  `terms_condition` varchar(255) DEFAULT NULL,
  `pickup_time` varchar(255) DEFAULT NULL,
  `dropoff_time` varchar(255) DEFAULT NULL,
  `payment_id` int(11) DEFAULT NULL,
  `file_uoloads` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `rent`
--

INSERT INTO `rent` (`rental_id`, `rental_status`, `start_date`, `end_date`, `customer_id`, `vehicle_id`, `terms_condition`, `pickup_time`, `dropoff_time`, `payment_id`, `file_uoloads`) VALUES
(13, 'Returned', '2023-07-20', '2023-07-22', 1, 1, 'agreed', '4 pm', '5.00 pm', 12, NULL),
(15, 'Returned', '2023-07-20', '2023-07-20', 2, 13, 'agreed', '8 am', '9 am', 14, NULL),
(22, 'Returned', '2023-07-21', '2023-07-23', 6, 17, 'agreed', '10 am', '10 am', 19, NULL),
(24, 'Returned', '2023-08-13', '2023-08-15', 10, 15, 'agreed', '4 pm', '4pm', 25, 'font awesome icon.png'),
(27, 'Returned', '2023-08-15', '2023-08-19', 8, 1, 'agreed', '10 am', '5.00 pm', 28, 'Screenshot (1).png'),
(28, 'Returned', '2023-08-14', '2023-08-15', 5, 1, 'agreed', '4 pm', '4pm', 29, 'Screenshot (1).png'),
(29, 'Rejected', '2023-08-14', '2023-08-15', 3, 17, 'agreed', '1pm', '2 pm', 30, 'font awesome cdn.png'),
(30, 'Cancelled', '2023-08-14', '2023-08-14', 3, 13, 'agreed', '10 am', '4pm', 31, 'font awesome icon.png'),
(31, 'Approved', '2023-08-15', '2023-08-19', 1, 29, 'agreed', '10 am', '10 am', 32, 'usermngmnt.jpeg'),
(32, 'Rejected', '2023-08-18', '2023-08-20', 11, 15, 'agreed', '1pm', '2 pm', 33, 'Screenshot (2).png'),
(33, 'Returned', '2023-08-18', '2023-08-20', 11, 15, 'agreed', '1pm', '5pm', 34, 'Screenshot (3).png'),
(34, 'pending', '2023-08-20', '2023-08-21', 1, 15, 'agreed', '4 pm', '4pm', 35, 'font awesome icon.png'),
(35, 'pending', '2023-08-20', '2023-08-21', 13, 42, 'agreed', '10 am', '10 am', 36, 'slideimg2.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `vehicle`
--

CREATE TABLE `vehicle` (
  `vehicle_id` int(11) NOT NULL,
  `vehicle_name` varchar(255) DEFAULT NULL,
  `vehicle_status` varchar(255) DEFAULT NULL,
  `hourly_rate` int(11) DEFAULT NULL,
  `vehicle_brand` varchar(255) DEFAULT NULL,
  `color` varchar(255) DEFAULT NULL,
  `vehicle_condition` varchar(255) DEFAULT NULL,
  `vehicle_image` varchar(255) DEFAULT NULL,
  `category_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `vehicle`
--

INSERT INTO `vehicle` (`vehicle_id`, `vehicle_name`, `vehicle_status`, `hourly_rate`, `vehicle_brand`, `color`, `vehicle_condition`, `vehicle_image`, `category_id`) VALUES
(1, 'Micro', 'Not Available', 1300, 'Hyundai', 'White', 'On Maintenance', 'white van.jpeg', 2),
(13, 'Aprilla SR 150', 'Available', 900, 'Aprilla', 'Black', 'Good', 'APRILLA.jpeg', 1),
(15, 'I20', 'On Rent', 1400, 'Hyundai', 'Red', 'Good', 'hyundai i20.jpg', 2),
(17, 'Dio', 'Available', 600, 'Hero Honda', 'Blue&White', 'Very Good', 'Honda-Dio.png', 1),
(28, 'Ecco Van', 'Available', 1200, 'Maruti Suzuki', 'Grey Black', 'Very Good', 'ecoovan.jpeg', 2),
(29, 'Alto', 'On Rent', 1000, 'Maruti Suzuki', 'Maroon', 'Good', 'suzuki alto.jpeg', 2),
(30, 'Duke', 'Available', 900, 'KTM', 'Black', 'Good', 'Duke-Bike.png', 1),
(37, 'FZS', 'Not Available', 800, 'yamaha', 'greyblack', 'On Maintenance', 'FZS.webp', 1),
(41, 'Kawasaki', 'Available', 750, 'Hero Honda', 'Green', 'Very Good', 'KAWASAKI.jpeg', 1),
(42, 'Nexon', 'On Rent', 1500, 'TATA', 'Blue', 'Very Good', 'nexon.p.jpeg', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`customer_id`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`payment_id`);

--
-- Indexes for table `rent`
--
ALTER TABLE `rent`
  ADD PRIMARY KEY (`rental_id`),
  ADD KEY `customer_id` (`customer_id`),
  ADD KEY `vehicle_id` (`vehicle_id`);

--
-- Indexes for table `vehicle`
--
ALTER TABLE `vehicle`
  ADD PRIMARY KEY (`vehicle_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `customer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `payment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `rent`
--
ALTER TABLE `rent`
  MODIFY `rental_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `vehicle`
--
ALTER TABLE `vehicle`
  MODIFY `vehicle_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `rent`
--
ALTER TABLE `rent`
  ADD CONSTRAINT `rent_ibfk_1` FOREIGN KEY (`customer_id`) REFERENCES `customer` (`customer_id`),
  ADD CONSTRAINT `rent_ibfk_2` FOREIGN KEY (`vehicle_id`) REFERENCES `vehicle` (`vehicle_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
