-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 16, 2024 at 08:59 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `realestate`
--

-- --------------------------------------------------------

--
-- Table structure for table `add_broker`
--

CREATE TABLE `add_broker` (
  `broker_id` int(11) NOT NULL,
  `fullname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `address` text NOT NULL,
  `short_desc` text NOT NULL,
  `mobile` varchar(100) NOT NULL,
  `date` date NOT NULL,
  `photo` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `add_broker`
--

INSERT INTO `add_broker` (`broker_id`, `fullname`, `email`, `address`, `short_desc`, `mobile`, `date`, `photo`) VALUES
(1, 'Jayesh Pawar', 'jayesh@gmail.com', 'Malegaon', 'Demo Broker', '9878657843', '2024-04-03', '1712115032_f83a60467c033009d1f6.jpg'),
(2, 'Rushikesh Bhadhan', 'rushi@gmail.com', 'Dada bhuse house, malegaon', 'Broker For rent property', '9878657843', '2024-04-02', '1712115133_66a7745b871c78e4b95b.jpg'),
(3, 'Pravin Jain', 'pravin@123gmail.com', 'College road, Nashik,  MH', 'Old and Experienced Broker', '9373771748', '2024-05-28', '1716862848_8f07a61a1073bf79cba0.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `add_property`
--

CREATE TABLE `add_property` (
  `property_id` int(11) NOT NULL,
  `broker_id` int(11) NOT NULL,
  `title` text NOT NULL,
  `sqft` int(50) NOT NULL,
  `price` int(50) NOT NULL,
  `city` varchar(20) NOT NULL,
  `address` text NOT NULL,
  `property_type` varchar(20) NOT NULL,
  `pincode` int(20) NOT NULL,
  `bedroom` varchar(200) NOT NULL,
  `bathroom` varchar(200) NOT NULL,
  `garage` varchar(200) NOT NULL,
  `state` varchar(50) NOT NULL,
  `mainphoto` text NOT NULL,
  `photo1` text NOT NULL,
  `photo2` text NOT NULL,
  `photo3` text NOT NULL,
  `photo4` text NOT NULL,
  `is_active` varchar(10) NOT NULL,
  `add_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `add_property`
--

INSERT INTO `add_property` (`property_id`, `broker_id`, `title`, `sqft`, `price`, `city`, `address`, `property_type`, `pincode`, `bedroom`, `bathroom`, `garage`, `state`, `mainphoto`, `photo1`, `photo2`, `photo3`, `photo4`, `is_active`, `add_date`) VALUES
(1, 1, 'New 2 BHK and River view', 250, 6850000, 'Nashik', 'Nashik, Gangpur road', 'Sale', 435463, '2', '2', '1', 'Maharashtra', '1712115306_cd3bcbfce12fa4b955f2.jpg', '1712115306_ecd70d4eb69240159ee6.jpg', '1712115306_e2e0157ab0de371be86c.jpg', '1712115306_ab298d7b20b8a51d52ed.jpg', '1712115306_98573b7ce1e5cf09e197.jpg', 'Yes', '2024-04-01'),
(2, 3, 'Make new Property in Pune - 3BHK', 1200, 4500000, 'Pune', 'Shaniwar Wada, Pune', 'Sale', 432343, '3', '2', '1', 'Maharashtra', '1716863124_9e08c9427da9bb715764.jpg', '1716863124_758b0bedb2af514eee63.webp', '1716863124_cb26e0291ca71ecc4e03.webp', '1716863124_4da6c497eba69a317694.jpg', '1716863124_0ad767e5f9ccce5bcf75.jpg', 'Yes', '2024-05-27');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `user_id` int(11) NOT NULL,
  `fullname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `message` text NOT NULL,
  `mobile` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`user_id`, `fullname`, `email`, `message`, `mobile`) VALUES
(1, 'Mahesh Kawale', 'mahesh@gmail.com', 'I Want to Sale my old property please contact me and help me', '9373771748');

-- --------------------------------------------------------

--
-- Table structure for table `enquiry`
--

CREATE TABLE `enquiry` (
  `enquiry_id` int(11) NOT NULL,
  `user_id` smallint(6) NOT NULL,
  `property_id` smallint(6) NOT NULL,
  `broker_pk` smallint(6) NOT NULL,
  `fullname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `subject` text NOT NULL,
  `requirement` text NOT NULL,
  `mobile` varchar(200) NOT NULL,
  `enquiry_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `enquiry`
--

INSERT INTO `enquiry` (`enquiry_id`, `user_id`, `property_id`, `broker_pk`, `fullname`, `email`, `subject`, `requirement`, `mobile`, `enquiry_date`) VALUES
(1, 2, 1, 1, 'Deepak Bhadhane', 'deepak@gmail.com', '', 'Sir i want this property let me know when we discuss', '9373771748', '2024-04-03 03:42:04'),
(2, 3, 1, 1, 'Depali Chavan', 'depa@gmail.com', '', 'I Love this house i want to bye plz contact me as soon as possible...thank you', '6473827364', '2024-04-05 16:04:00'),
(3, 1, 1, 1, 'Superadmin ', 'admin@gmail.com', '', 'I want to rent\r\n', '7249095504', '2024-04-05 16:32:40'),
(4, 4, 1, 1, 'Sanvi Wagh', 'sanu@gmail.com', '', 'I want This for rent\r\n', '9878657843', '2024-05-22 16:20:07'),
(5, 5, 2, 3, 'Jayesh Pawar', 'jayesh@gmail.com', '', 'I already visit this property let me know about our discussion as soon as possible', '7249095504', '2024-05-28 02:31:09'),
(6, 7, 2, 3, 'Chetan Bacchav ', 'chetan@gmail.com', '', 'Want to invest this property', '9876543256', '2024-06-10 05:04:40');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `user_id` int(11) NOT NULL,
  `fullname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` text NOT NULL,
  `mobile` varchar(100) NOT NULL,
  `address` text NOT NULL,
  `join_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`user_id`, `fullname`, `email`, `password`, `mobile`, `address`, `join_date`) VALUES
(1, 'Superadmin ', 'admin@gmail.com', '0192023a7bbd73250516f069df18b500', '7249095504', 'Satana naka, Malegaon', '2024-04-03 03:25:40'),
(2, 'Deepak Bhadhane', 'deepak@gmail.com', '3b8f9fa2e58b5e835028f1dafc2de1fa', '9373771748', 'Bali Mandir, Nashik', '2024-04-03 03:36:16'),
(4, 'Sanvi Wagh', 'sanu@gmail.com', 'e361b0702e5f7a1b6b4731922393591f', '9878657843', 'surat, gujrat', '2024-05-22 16:18:01'),
(5, 'Jayesh Pawar', 'jayesh@gmail.com', 'f0e7d0d17cff891edbc9cdf92dcd9297', '7249095504', 'Malegaon, Nashik, MH', '2024-05-27 18:30:00'),
(6, 'Vaishali Pawar', 'vaishali@gmail.com', 'f8f6ade3d457280037372c6035bcef04', '9878657843', 'Malegaon, Nashik, MH', '2024-05-27 18:30:00'),
(7, 'Chetan Bacchav ', 'chetan@gmail.com', '58a39bfab24f8c96bfdd68b0c296cf7e', '9876543256', 'Church gate, Malegaon', '2024-06-10 05:03:15');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `add_broker`
--
ALTER TABLE `add_broker`
  ADD PRIMARY KEY (`broker_id`);

--
-- Indexes for table `add_property`
--
ALTER TABLE `add_property`
  ADD PRIMARY KEY (`property_id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `enquiry`
--
ALTER TABLE `enquiry`
  ADD PRIMARY KEY (`enquiry_id`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `add_broker`
--
ALTER TABLE `add_broker`
  MODIFY `broker_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `add_property`
--
ALTER TABLE `add_property`
  MODIFY `property_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `enquiry`
--
ALTER TABLE `enquiry`
  MODIFY `enquiry_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
