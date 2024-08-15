-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 07, 2022 at 10:25 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `chashmaghar`
--

-- --------------------------------------------------------

--
-- Table structure for table `category_tbl`
--

CREATE TABLE `category_tbl` (
  `category_id` int(5) NOT NULL,
  `category_name` varchar(20) NOT NULL,
  `category_status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category_tbl`
--

INSERT INTO `category_tbl` (`category_id`, `category_name`, `category_status`) VALUES
(1, 'Sunglasses', 1),
(2, 'Child Glasses', 1),
(3, 'Computer Glasses', 0);

-- --------------------------------------------------------

--
-- Table structure for table `complaint_tbl`
--

CREATE TABLE `complaint_tbl` (
  `complaint_id` int(5) NOT NULL,
  `user_id` int(5) NOT NULL,
  `order_id` int(5) NOT NULL,
  `complaint_desc` varchar(300) NOT NULL,
  `complaint_datetime` datetime NOT NULL,
  `complaint_status` tinyint(1) NOT NULL,
  `complaint_response` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `complaint_tbl`
--

INSERT INTO `complaint_tbl` (`complaint_id`, `user_id`, `order_id`, `complaint_desc`, `complaint_datetime`, `complaint_status`, `complaint_response`) VALUES
(1, 2, 3, 'Frame is broken from one right side.', '2020-02-25 21:21:45', 1, 'Your product will be replaced soon. Our Delivery Partner will come to receive the product.'),
(2, 1, 2, 'The product is not same as shown on website ', '2022-01-05 17:06:51', 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `feedback_tbl`
--

CREATE TABLE `feedback_tbl` (
  `feedback_id` int(5) NOT NULL,
  `user_id` int(5) NOT NULL,
  `product_id` int(5) NOT NULL,
  `order_id` int(5) NOT NULL,
  `feedback_rating` int(1) DEFAULT NULL,
  `feedback_desc` varchar(300) NOT NULL,
  `feedback_datetime` datetime NOT NULL,
  `feedback_status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `feedback_tbl`
--

INSERT INTO `feedback_tbl` (`feedback_id`, `user_id`, `product_id`, `order_id`, `feedback_rating`, `feedback_desc`, `feedback_datetime`, `feedback_status`) VALUES
(1, 2, 2, 3, 2, 'Very Poor Services', '2020-02-26 10:30:06', 1),
(2, 1, 5, 1, 4, 'Good Product', '2021-07-15 21:29:44', 1);

-- --------------------------------------------------------

--
-- Table structure for table `login_tbl`
--

CREATE TABLE `login_tbl` (
  `email_id` varchar(30) NOT NULL,
  `password` varchar(20) NOT NULL,
  `type` varchar(15) NOT NULL,
  `login_status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login_tbl`
--

INSERT INTO `login_tbl` (`email_id`, `password`, `type`, `login_status`) VALUES
('admin@gmail.com', 'Admin@123', '1', 1),
('hiteshpatel42@gmail.com', 'PatelHitesh42', '2', 0),
('jayeshparmar36@gmail.com', 'Jayesh256', '2', 1),
('mananrathore96@gmail.com', 'Manan123', '3', 0),
('radhikapatel56@gmail.com', 'Patelradh56', '3', 0),
('rakeshnagar31@gmail.com', 'RakeshNgr31', '3', 1),
('ranjitchadda56@gmail.com', 'Ranjit852', '2', 1),
('rijataneja21@gmail.com', 'RiyaTaneja21', '2', 1),
('tarunvyas36@gmail.com', 'Tarun654', '3', 0),
('teenashekhawat63@gmail.com', 'Teenashek63', '2', 0),
('ushaahuja06@gmail.com', 'AhujaUsha06', '3', 1);

-- --------------------------------------------------------

--
-- Table structure for table `order_detail_tbl`
--

CREATE TABLE `order_detail_tbl` (
  `order_det_id` int(5) NOT NULL,
  `order_id` int(5) NOT NULL,
  `product_id` int(5) NOT NULL,
  `product_qty` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `order_detail_tbl`
--

INSERT INTO `order_detail_tbl` (`order_det_id`, `order_id`, `product_id`, `product_qty`) VALUES
(1, 1, 5, 2),
(2, 2, 4, 1),
(3, 3, 2, 1),
(4, 5, 4, 3),
(5, 5, 3, 2);

-- --------------------------------------------------------

--
-- Table structure for table `order_mst`
--

CREATE TABLE `order_mst` (
  `order_id` int(5) NOT NULL,
  `user_id` int(5) NOT NULL,
  `order_datetime` datetime NOT NULL,
  `order_status` varchar(20) NOT NULL,
  `order_total` decimal(8,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `order_mst`
--

INSERT INTO `order_mst` (`order_id`, `user_id`, `order_datetime`, `order_status`, `order_total`) VALUES
(1, 1, '2021-07-08 21:00:19', '1', '2149.00'),
(2, 1, '2021-12-21 10:32:57', '1', '399.00'),
(3, 2, '2020-02-14 09:04:07', '0', '940.00'),
(4, 3, '2022-01-31 14:58:03', '0', '1156.00'),
(5, 4, '2022-02-03 23:15:45', '1', '830.00');

-- --------------------------------------------------------

--
-- Table structure for table `payment_tbl`
--

CREATE TABLE `payment_tbl` (
  `payment_id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `payment_method` varchar(20) NOT NULL DEFAULT 'COD',
  `payment_status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `payment_tbl`
--

INSERT INTO `payment_tbl` (`payment_id`, `order_id`, `user_id`, `payment_method`, `payment_status`) VALUES
(1, 2, 1, 'COD', 1),
(2, 1, 1, 'COD', 1),
(3, 5, 4, 'COD', 1),
(4, 4, 3, 'COD', 0),
(5, 3, 2, 'COD', 0);

-- --------------------------------------------------------

--
-- Table structure for table `product_tbl`
--

CREATE TABLE `product_tbl` (
  `product_id` int(5) NOT NULL,
  `category_name` varchar(30) NOT NULL,
  `product_brand` varchar(20) NOT NULL,
  `product_name` varchar(30) NOT NULL,
  `product_img1` varchar(70) NOT NULL,
  `product_img2` varchar(70) NOT NULL,
  `product_img3` varchar(70) NOT NULL,
  `frame_type` varchar(20) NOT NULL,
  `product_price` decimal(8,2) NOT NULL,
  `product_qty` int(3) NOT NULL,
  `product_status` tinyint(1) NOT NULL,
  `seller_id` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product_tbl`
--

INSERT INTO `product_tbl` (`product_id`, `category_name`, `product_brand`, `product_name`, `product_img1`, `product_img2`, `product_img3`, `frame_type`, `product_price`, `product_qty`, `product_status`, `seller_id`) VALUES
(1, 'Child Glasses', 'Ray-Ban', 'Ray-Ban Pilot Glasses', 'a', 'b', 'c', 'Aviator', '543.00', 14, 1, 3),
(2, 'Child Glasses', 'Titan', 'Titan Women\'s Sunglasses', './product_images/120220304233328.jpg', './product_images/220220304233328.jpeg', './product_images/320220304233328.jpg', 'Cat Eye', '450.00', 20, 1, 2),
(3, 'Computer Glasses', 'GUCCI', 'GUCCI Black Sunglasses', 'g', 'h', 'i', 'Cat Eye', '567.00', 23, 1, 1),
(4, 'Sunglasses', 'Fastrack', 'Fastrack Cool Eyewear', 'branch.jpg', 'branch.jpg', 'branch.jpg', 'Circle', '750.00', 60, 1, 5),
(5, 'Computer Glasses', 'Heritage', 'Heritage Camo Spectacles', '', '', '', 'Rectangle', '490.00', 131, 0, 5),
(6, 'Child Glasses', 'Titan', 'Vivoid Plus Spectacles', '', '', '', 'Square', '980.00', 15, 1, 2),
(7, 'Sunglasses', 'Ray Ban', 'Black Aviator', '../Main-website/img/product/120220307145430.jpg', '../Main-website/img/product/220220307145430.', '../Main-website/img/product/320220307145430.', 'Aviator', '458.00', 25, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `seller_tbl`
--

CREATE TABLE `seller_tbl` (
  `seller_id` int(5) NOT NULL,
  `seller_email` varchar(30) NOT NULL,
  `seller_name` varchar(30) NOT NULL,
  `seller_phone` bigint(10) NOT NULL,
  `seller_address1` varchar(150) NOT NULL,
  `seller_address2` varchar(150) NOT NULL,
  `seller_pincode` int(6) NOT NULL,
  `seller_gstin` varchar(15) NOT NULL,
  `seller_status` tinyint(1) NOT NULL,
  `auth_status` tinyint(1) NOT NULL,
  `shop_name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `seller_tbl`
--

INSERT INTO `seller_tbl` (`seller_id`, `seller_email`, `seller_name`, `seller_phone`, `seller_address1`, `seller_address2`, `seller_pincode`, `seller_gstin`, `seller_status`, `auth_status`, `shop_name`) VALUES
(1, 'riyataneja21@gmail.com', 'Riya Taneja', 9632587413, 'Plot-6, Block-9', 'Maninagar, Ahmedabad', 380006, '78BGVFD5263HJ3L', 1, 1, 'Omkar Specs'),
(2, 'hiteshpatel42@gmail.com', 'Hitesh Patel', 8596741230, '3rd Floor, Shanti Complex', 'Naroda, Ahmedabad ', 360004, '85GHFCD85HJU854', 1, 1, 'Lucid Opticals'),
(3, 'ranjitchadda56@gmail.com', 'Ranjit Chadda', 9645235174, '4th Floor, Max Complex', 'Swastik Cross Road, Ahmedabad', 380009, '85GTYHKGH85GH85', 0, 0, 'Sheth Opticals'),
(4, 'teenashekhawat63@gmail.com', 'Teena Shekhawat', 9654132587, '2nd Floor, Phoenix Building  ', 'Vadaj, Ahmedabad', 360005, '23YHNJI45GH456Y', 1, 0, 'Vision Optics'),
(5, 'jayeshparmar36@gmail.com', 'Jayesh Parmar', 7485961230, 'Shop No. 45, Ground Floor, Kalash Complex', 'Panchvati Cross Road, Ahmedabad  ', 350009, '47TGBFD42TG9654', 1, 1, 'Charun Optics');

-- --------------------------------------------------------

--
-- Table structure for table `user_tbl`
--

CREATE TABLE `user_tbl` (
  `user_id` int(5) NOT NULL,
  `user_email` varchar(30) NOT NULL,
  `user_name` varchar(30) NOT NULL,
  `user_dob` date NOT NULL,
  `user_gender` varchar(6) NOT NULL,
  `user_phone` bigint(10) NOT NULL,
  `user_address1` varchar(150) NOT NULL,
  `user_address2` varchar(150) NOT NULL,
  `user_pincode` int(6) NOT NULL,
  `user_status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_tbl`
--

INSERT INTO `user_tbl` (`user_id`, `user_email`, `user_name`, `user_dob`, `user_gender`, `user_phone`, `user_address1`, `user_address2`, `user_pincode`, `user_status`) VALUES
(1, 'mananrathore96@gmail.com', 'Manan Rathore', '2001-07-11', 'Male', 9645781263, 'Flat - 106, Block - 3, Jogeshwari Apartments', 'Naroda, Ahmedabad', 360009, 1),
(2, 'tarunvyas36@gmail.com', 'Tarun Vyas', '1999-10-13', 'Male', 7539512589, 'Flat 205, Swastik Apartments ', 'Adalaj, Ahmedabad', 380003, 1),
(3, 'radhikapatel56@gmail.com', 'Radhika Patel', '2003-09-08', 'Female', 8529637413, 'Flat No. 306, C-Wing, Tejas Apartments', 'Satellite, Ahmedabad', 380002, 0),
(4, 'rakeshnagar31@gmail.com', 'Rakesh Nagar', '1996-12-31', 'Male', 7415692385, 'House No. 67A, Dabur Pole', 'Manek Chowk, Ahmedabad', 360004, 1),
(5, 'ushaahuja06@gmail.com', 'Usha Ahuja', '2001-04-06', 'Female', 8624963125, 'Flat No. 106, Ram Apartments', 'Maninagar, Ahmedabad', 380001, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category_tbl`
--
ALTER TABLE `category_tbl`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `complaint_tbl`
--
ALTER TABLE `complaint_tbl`
  ADD PRIMARY KEY (`complaint_id`),
  ADD UNIQUE KEY `user_id` (`user_id`),
  ADD UNIQUE KEY `order_id` (`order_id`);

--
-- Indexes for table `feedback_tbl`
--
ALTER TABLE `feedback_tbl`
  ADD PRIMARY KEY (`feedback_id`),
  ADD UNIQUE KEY `user_id` (`user_id`),
  ADD UNIQUE KEY `order_id` (`order_id`),
  ADD UNIQUE KEY `product_id` (`product_id`);

--
-- Indexes for table `login_tbl`
--
ALTER TABLE `login_tbl`
  ADD PRIMARY KEY (`email_id`);

--
-- Indexes for table `order_detail_tbl`
--
ALTER TABLE `order_detail_tbl`
  ADD PRIMARY KEY (`order_det_id`);

--
-- Indexes for table `order_mst`
--
ALTER TABLE `order_mst`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `payment_tbl`
--
ALTER TABLE `payment_tbl`
  ADD PRIMARY KEY (`payment_id`);

--
-- Indexes for table `product_tbl`
--
ALTER TABLE `product_tbl`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `seller_tbl`
--
ALTER TABLE `seller_tbl`
  ADD PRIMARY KEY (`seller_id`),
  ADD UNIQUE KEY `seller_email` (`seller_email`);

--
-- Indexes for table `user_tbl`
--
ALTER TABLE `user_tbl`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `user_email` (`user_email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `order_detail_tbl`
--
ALTER TABLE `order_detail_tbl`
  MODIFY `order_det_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `payment_tbl`
--
ALTER TABLE `payment_tbl`
  MODIFY `payment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `product_tbl`
--
ALTER TABLE `product_tbl`
  MODIFY `product_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `seller_tbl`
--
ALTER TABLE `seller_tbl`
  MODIFY `seller_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `user_tbl`
--
ALTER TABLE `user_tbl`
  MODIFY `user_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
