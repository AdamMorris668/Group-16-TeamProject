-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 30, 2023 at 12:18 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `techtopiadatabase`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_login`
--

CREATE TABLE `admin_login` (
  `id` int(11) NOT NULL,
  `email` varchar(60) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_login`
--

INSERT INTO `admin_login` (`id`, `email`, `username`, `password`) VALUES
(1, 'adammorris', '210101298@aston.ac.uk', '1122'),
(2, 'hamasmahroof', '200151713@aston.ac.uk', '2211'),
(3, 'hussainahmed', '210152094@aston.ac.uk', '4433'),
(4, 'jawrajsingh', '210160435@aston.ac.uk', '3535'),
(5, 'ibrahimriasat', '210136485@aston.ac.uk', '2525'),
(6, 'rayanabdulsmad', '210060906@aston.ac.uk', '2020'),
(7, 'alialomairi', '200239516@aston.ac.uk', '2626'),
(8, 'hansraj', '220254236@aston.ac.uk', '4747'),
(9, 'kieranfranklinbaily', '210147713@aston.ac.uk', '2002');

-- --------------------------------------------------------

--
-- Table structure for table `basket`
--

CREATE TABLE `basket` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Dumping data for table `basket`
--

INSERT INTO `basket` (`id`, `user_id`, `product_id`, `quantity`) VALUES
(56, 10, 19, 1);

-- --------------------------------------------------------

--
-- Table structure for table `contactus`
--

CREATE TABLE `contactus` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `user_firstname` varchar(25) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_subject` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_message` varchar(2000) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `message_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contactus`
--

INSERT INTO `contactus` (`id`, `user_id`, `user_firstname`, `user_subject`, `user_message`, `message_date`) VALUES
(9, 10, 'alex', 'alex', 'alex', '2023-03-27'),
(15, 10, 'alex', 'alex', 'alex', '2023-03-27');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `order_status` varchar(50) COLLATE utf8mb4_unicode_520_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `user_id`, `product_id`, `quantity`, `order_status`) VALUES
(1, 10, 2, 1, 'cancelled'),
(2, 10, 2, 1, 'processing'),
(4, 10, 6, 3,'delivered');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `product` varchar(30) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `product_description` varchar(200) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `size` int(11) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `type` varchar(100) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `images` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `product`, `product_description`, `size`, `price`, `type`, `images`) VALUES
(1, 'LCD Monitor', '24” Black LCD Monitor with silver base.', 196, '80.00', 'monitor', 'images/monitors/A1.jpg'),
(2, 'LED Monitor', '30” Full Black LED Display Monitor.', 247, '100.00', 'monitor', 'images/monitors/A2.jpg'),
(3, 'Curved Monitor', '32” Full Black, Curved Ultrawide Display Monitor.', 1, '150.00', 'monitor', 'images/monitors/A3.jpg'),
(4, 'Touch Screen Monitor', '24” Full Black Matte, Smooth touch screen monitor.', 50, '180.00', 'monitor', 'images/monitors/A4.jpg'),
(5, 'Large Wall Monitor', '84” Full Black, Edge LED, large screen display.', 250, '220.00', 'monitor', 'images/monitors/A5.jpg'),
(6, 'Wired Keyboard ', 'Simple matte black wired desktop keyboard.', 195, '40.00', 'keyboard', 'images/keyboards/B1.jpg'),
(7, 'Wireless Keyboard ', 'Slim full white wireless desktop keyboard.', 250, '50.00', 'keyboard', 'images/keyboards/B2.jpg'),
(8, 'Gaming Keyboard ', 'Black wireless mechanical gaming keyboard, with RGB lighting.', 1, '70.00', 'keyboard', 'images/keyboards/B3.jpg'),
(9, 'Laser Sensor Keyboard ', 'Portable and rechargeable laser sensor keyboard.', 50, '120.00', 'keyboard', 'images/keyboards/B4.jpg'),
(10, 'Numeric keypad', 'Wired, black metallic, 34 Keys number pad numeric keypad.', 250, '30.00', 'keyboard', 'images/keyboards/B5.jpg'),
(11, 'Wired Mouse ', 'Wired, black matte sensor smooth desktop mouse.', 200, '20.00', 'mouse', 'images/mouse/C1.jpg'),
(12, 'Wireless Mouse  ', 'Wireless, rechargeable black matte sensor smooth desktop mouse.', 250, '30.00', 'mouse', 'images/mouse/C2.jpg'),
(13, 'Wireless Gaming Mouse  ', 'Wireless, rechargeable black gaming mouse.', 1, '40.00', 'mouse', 'images/mouse/C3.jpg'),
(14, 'Wireless vertical Mouse ', 'Wireless, black vertical mouse.', 50, '35.00', 'mouse', 'images/mouse/C4.jpg'),
(15, 'Wireless Magic Mouse ', 'Wireless, slim, white smooth touch magic mouse.', 250, '70.00', 'mouse', 'images/mouse/C5.jpg'),
(16, 'Camera DSLR  ', 'Black, Professional digital DSLR camera.', 200, '350.00', 'camera', 'images/cameras/D1.jpg'),
(17, 'Compact Camera    ', 'Black, pocket compact camera 42 mega pixel. ', 250, '120.00', 'camera', 'images/cameras/D2.jpg'),
(18, 'Camera 360  ', 'Black, portable 360° angle camera.', 1, '300.00', 'camera', 'images/cameras/D3.jpg'),
(19, 'Web Camera  ', 'Black, wide angle desktop web camera..', 50, '50.00', 'camera', 'images/cameras/D4.jpg'),
(20, 'Photo Print Camera ', 'White, portable photo print camera. .', 0, '250.00', 'camera', 'images/cameras/D5.jpg'),
(21, 'Portable Bluetooth Speaker ', 'White/Black, metallic, rechargeable, portable Bluetooth speaker.', 200, '70.00', 'speaker', 'images/speakers/E1.jpg'),
(22, 'Woofer Speaker   ', 'Black, standing woofer with four-sided voice system.', 250, '120.00', 'speaker', 'images/speakers/E2.jpg'),
(23, 'Bar speaker  ', 'Black, Metallic framed bar speaker.', 1, '80.00', 'speaker', 'images/speakers/E3.jpg'),
(24, 'Portable Mini Ball Bluetooth S', 'White, Fabricated body, rechargeable, portable Mini Bluetooth speaker.', 50, '70.00', 'speaker', 'images/speakers/E4.jpg'),
(25, 'Wired PC speakers ', 'Black, matte wired PC/desktop speakers.', 250, '40.00', 'speaker', 'images/speakers/E5.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_firstname` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_lastname` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_address` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `join_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `email`, `password`, `user_firstname`, `user_lastname`, `user_address`, `join_date`) VALUES
(1, 'jawraj', 'jawraj@gmail.com', '$2y$10$rzAs/6IUjRYH/TZXyJYsf.kj251JRZadMba1TAbGXYP2Xpql5Zeja', 'Jawraj', 'Singh', '21 GT road', '2023-03-26'),
(2, 'mark', 'mark@gmail.com', '$2y$10$rAWfe9kF/DXssgzcqkHe0Of.tftCW3XOQ.gzFJoz.9wisyCmwiLpG', 'Mark', 'Mark', '21 GT road', '2023-03-26'),
(6, 'stefano', 'stefano@gmail.com', '$2y$10$HJwWNTI.cVjtHk00uOhFY.jSrT21krROGjM9Y8u5eXTxJ33LgDGny', 'stefano', 'stefano', '24 stefano', '2023-03-26'),
(10, 'alex', 'alex@gmail.com', '$2y$10$pQlN0Rz45ltkgQZULV5rHeX/xN5GK8woNTHC6CXtyBDtCiaDr5TvC', 'alex', 'alex', '1 alex', '2023-03-27');

-- --------------------------------------------------------

--
-- Table structure for table `wishlist`
--

CREATE TABLE `wishlist` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_login`
--
ALTER TABLE `admin_login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `basket`
--
ALTER TABLE `basket`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contactus`
--
ALTER TABLE `contactus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `wishlist`
--
ALTER TABLE `wishlist`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_login`
--
ALTER TABLE `admin_login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `basket`
--
ALTER TABLE `basket`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT for table `contactus`
--
ALTER TABLE `contactus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `wishlist`
--
ALTER TABLE `wishlist`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
