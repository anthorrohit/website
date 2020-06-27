-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 27, 2020 at 04:52 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cart_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `id` int(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `h1` varchar(255) NOT NULL,
  `blog` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`id`, `title`, `image`, `h1`, `blog`) VALUES
(3, 'Payment after delivery.', 'a1.jpg', '', 'Cash or digital payment taken after delivery.'),
(5, 'Minimum touched product', 'c1.jpg', '', 'Your product are touched by minimum people that good for you.'),
(6, 'Pure washed product.', 'logo.jpg', '', 'Your product are touched by minimum people.');

-- --------------------------------------------------------

--
-- Table structure for table `cart1`
--

CREATE TABLE `cart1` (
  `id` int(255) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `product_image` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `qty` varchar(255) NOT NULL,
  `total_price` varchar(255) NOT NULL,
  `dis` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cart1`
--

INSERT INTO `cart1` (`id`, `product_name`, `product_image`, `price`, `qty`, `total_price`, `dis`) VALUES
(71, 'Pomogranate', 'arjun-kapoor-oqLnHkvny3U-unsplash.jpg', '52', '1', '52', '523652'),
(72, 'banana', 'banana.jpg', '42', '1', '42', '474\\\n5'),
(73, 'coconut\n', 'coconut.jpg', '52', '1', '52', '87542'),
(74, 'grapes', 'grapes.jpg', '63', '1', '63', '8754296');

-- --------------------------------------------------------

--
-- Table structure for table `jds_orders`
--

CREATE TABLE `jds_orders` (
  `id` int(225) NOT NULL,
  `name` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `grand_total` varchar(255) NOT NULL,
  `products` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jds_orders`
--

INSERT INTO `jds_orders` (`id`, `name`, `phone`, `address`, `grand_total`, `products`) VALUES
(1, 'Anthor Rohit', 'WHATSAPP NO', 'near beur jail anishabad', 'amarnath leaves(1),Beans(1),Beetroot(1),bitter gourd(1),Pomogranate(1),banana(1),coconut\r\n(1),grapes(1)', '341'),
(2, 'Anthor Rohit', '7004656133', 'near beur jail anishabad', 'amarnath leaves(1),Beans(1),Beetroot(1),bitter gourd(1),Pomogranate(1),banana(1),coconut\r\n(1),grapes(1)', '341'),
(3, 'Anthor Rohit', '7004656133', 'near beur jail anishabad', 'amarnath leaves(1),Beans(1),Beetroot(1),bitter gourd(1),Pomogranate(1),banana(1),coconut\r\n(1),grapes(1)', '341'),
(4, 'Rohit kumar', '7492992562', 'near bahadurpur road', 'amarnath leaves(1),Beans(1),Beetroot(1),bitter gourd(1),Pomogranate(1),banana(1),coconut\r\n(1),grapes(1)', '341'),
(5, 'Anthor Rohit', '7004656133', 'near beur jail anishabad', 'amarnath leaves(1),Beans(1),Beetroot(1),bitter gourd(1),Pomogranate(1),banana(1),coconut\r\n(1),grapes(1)', '341'),
(6, 'Anthor Rohit', '7004656133', 'near beur jail anishabad', 'Pomogranate(1),banana(1)', '94'),
(7, 'Anthor Rohit', '7492992562', 'near beur jail anishabad', 'Pomogranate(1),banana(1),coconut\r\n(1)', '146'),
(8, 'Anthor Rohit', '01010101010', 'near beur jail anishabad', 'Pomogranate(1),banana(1),coconut\r\n(1),grapes(1)', '209');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(255) NOT NULL,
  `product_name` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(255) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `product_image` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `dis` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `product_name`, `product_image`, `price`, `dis`) VALUES
(1, 'amarnath leaves', 'amarnath leaves.jpg', '20.00', 'fw6456'),
(3, 'Beans', 'bean.jpg', '15.00', '4564565'),
(4, 'Beetroot', 'beetroot.jpg', '45.00', '45645645'),
(5, 'bitter gourd', 'bitter gourd.jpg', '52.00', '5645'),
(6, 'bora', 'bora.jpg', '20.00', '56456456'),
(7, 'bottel gourd', '20200612_160557.jpg', '45.00', '5465645656456'),
(8, 'brinjal', 'bringle.jpg', '50.00', '5464535'),
(9, 'brocali', 'brocoli.jpg', '20.00', '4534564'),
(10, 'cabbage', 'ca.jpg', '23.00', '4564534'),
(11, 'capcicum', 'capcicum.jpg', '65.00', '453453453'),
(12, 'carrot', 'carrot.jpg', '25.00', '4532.5'),
(13, 'cauliflower', 'cauliflower.jpg', '25.00', '453453453'),
(14, 'coriender (dhaniya)', 'coriender dhaniya.jpg', '19.00', '45345354354'),
(15, 'corn', 'corn.jpg', '60.00', '453453453453'),
(16, 'cucumber', 'cucumber.jpg', '52.00', '453453453'),
(17, 'ginger', 'ginger.jpg', '23.00', '453453453'),
(18, 'garlic', 'gralic.jpg', '25.00', '453454534'),
(19, 'lady finger', 'lady fringer.jpg', '85.00', '4534534535'),
(22, 'amarnath leaves', 'amarnath leaves.jpg', '20.00', '53453453'),
(23, 'arbi', 'arbi.jpg', '20.00', '453453453'),
(24, 'Beans', 'bean.jpg', '15.00', '453453453'),
(25, 'Beetroot', 'beetroot.jpg', '45.00', '45345353'),
(26, 'bitter gourd', 'bitter gourd.jpg', '52.00', '45354453'),
(27, 'bora', 'bora.jpg', '20.00', '45345453'),
(28, 'bottel gourd', '20200612_160557.jpg', '45.00', ''),
(29, 'brinjal', 'bringle.jpg', '50.00', ''),
(30, 'brocali', 'brocoli.jpg', '20.00', ''),
(31, 'cabbage', 'ca.jpg', '23.00', ''),
(32, 'capcicum', 'capcicum.jpg', '65.00', ''),
(33, 'carrot', 'carrot.jpg', '25.00', ''),
(34, 'cauliflower', 'cauliflower.jpg', '25.00', ''),
(35, 'coriender (dhaniya)', 'coriender dhaniya.jpg', '19.00', ''),
(36, 'corn', 'corn.jpg', '60.00', ''),
(37, 'cucumber', 'cucumber.jpg', '52.00', ''),
(38, 'ginger', 'ginger.jpg', '23.00', ''),
(39, 'garlic', 'gralic.jpg', '25.00', ''),
(40, 'lady finger', 'lady fringer.jpg', '85.00', '');

-- --------------------------------------------------------

--
-- Table structure for table `products_fruit`
--

CREATE TABLE `products_fruit` (
  `id` int(255) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `product_image` varchar(255) NOT NULL,
  `price` int(255) NOT NULL,
  `dis` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products_fruit`
--

INSERT INTO `products_fruit` (`id`, `product_name`, `product_image`, `price`, `dis`) VALUES
(1, 'Pomogranate', 'arjun-kapoor-oqLnHkvny3U-unsplash.jpg', 52, '523652'),
(2, 'banana', 'banana.jpg', 42, '474\\\r\n5'),
(3, 'coconut\r\n', 'coconut.jpg', 52, '87542'),
(4, 'grapes', 'grapes.jpg', 63, '8754296'),
(5, 'hybrid coconut', 'hybrid coconut.jpg', 40, 'rgdftrg85'),
(6, 'jamun', 'jamun.jpg', 99, 'esghfgh52'),
(7, 'lichi', 'lichi.jpg', 52, 'erydtf852'),
(8, 'malda mango', 'malda mango.jpg', 95, '852ytyj'),
(9, 'mask melon', 'mask melon.jpg', 56, 'estrdyf852'),
(10, 'orange', 'orange.jpg', 95, 'qretry852'),
(11, 'pear', 'pear.jpg', 52, 'waresrd852'),
(12, 'pine apple', 'pine apple.jpg', 445, 'estrhfg852'),
(13, 'sweet potato', 'sweet potato.jpg', 95, 'sdfxcbg852'),
(14, 'water melon', 'watermelon.jpg', 99, 'warsgfgh8520');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cart1`
--
ALTER TABLE `cart1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jds_orders`
--
ALTER TABLE `jds_orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products_fruit`
--
ALTER TABLE `products_fruit`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `cart1`
--
ALTER TABLE `cart1`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=75;

--
-- AUTO_INCREMENT for table `jds_orders`
--
ALTER TABLE `jds_orders`
  MODIFY `id` int(225) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `products_fruit`
--
ALTER TABLE `products_fruit`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
