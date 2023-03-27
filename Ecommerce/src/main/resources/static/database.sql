-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 13, 2023 at 10:52 AM
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
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `description` varchar(255) NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `category` varchar(100) NOT NULL,
  `image_name` varchar(255) NOT NULL,
  `rating` int(5) NOT NULL,
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `description`, `quantity`, `price`, `category`, `image_name`, `rating`) VALUES
(1, 'LCD Monitor', '24” Black LCD Monitor with silver base.', 200, '80.00', 'monitor', '../productImages/A1.jpg', '0'),
(2, 'LED Monitor', '30” Full Black LED Display Monitor.', 250, '100.00', 'monitor', '../productImages/A2.jpg', '3'),
(3, 'Curved Monitor', '32” Full Black, Curved Ultrawide Display Monitor.', 1, '150.00', 'monitor', '../productImages/A3.jpg', '4'),
(4, 'Touch Screen Monitor', '24” Full Black Matte, Smooth touch screen monitor.', 50, '180.00', 'monitor', '../productImages/A4.jpg', '5'),
(5, 'Large Wall Monitor', '84” Full Black, Edge LED, large screen display.', 250, '220.00', 'monitor', '../productImages/A5.jpg', '3'),
(6, 'Wired Keyboard ', 'Simple matte black wired desktop keyboard.', 200, '40.00', 'keyboard', '../productImages/B1.jpg', '4'),
(7, 'Wireless Keyboard ', 'Slim full white wireless desktop keyboard.', 250, '50.00', 'keyboard', '../productImages/B2.jpg', '2'),
(8, 'Gaming Keyboard ', 'Black wireless mechanical gaming keyboard, with RGB lighting.', 1, '70.00', 'keyboard', '../productImages/B3.jpg', '3'),
(9, 'Laser Sensor Keyboard ', 'Portable and rechargeable laser sensor keyboard.', 50, '120.00', 'keyboard', '../productImages/B4.jpg', '1'),
(10, 'Numeric keypad', 'Wired, black metallic, 34 Keys number pad numeric keypad.', 250, '30.00', 'keyboard', '../productImages/B5.jpg', '2'),
(11, 'Wired Mouse ', 'Wired, black matte sensor smooth desktop mouse.', 200, '20.00', 'mouse', '../productImages/C1.jpg', '4'),
(12, 'Wireless Mouse  ', 'Wireless, rechargeable black matte sensor smooth desktop mouse.', 250, '30.00', 'mouse', '../productImages/C2.jpg', '5'),
(13, 'Wireless Gaming Mouse  ', 'Wireless, rechargeable black gaming mouse.', 1, '40.00', 'mouse', '../productImages/C3.jpg', '4'),
(14, 'Wireless vertical Mouse ', 'Wireless, black vertical mouse.', 50, '35.00', 'mouse', '../productImages/C4.jpg', '3'),
(15, 'Wireless Magic Mouse ', 'Wireless, slim, white smooth touch magic mouse.', 250, '70.00', 'mouse', '../productImages/C5.jpg', '2'),
(16, 'Camera DSLR  ', 'Black, Professional digital DSLR camera.', 200, '350.00', 'camera', '../productImages/D1.jpg', '5'),
(17, 'Compact Camera    ', 'Black, pocket compact camera 42 mega pixel. ', 250, '120.00', 'camera', '../productImages/D2.jpg', '2'),
(18, 'Camera 360  ', 'Black, portable 360° angle camera.', 1, '300.00', 'camera', '../productImages/D3.jpg', '1'),
(19, 'Web Camera  ', 'Black, wide angle desktop web camera..', 50, '50.00', 'camera', '../productImages/D4.jpg', '5'),
(20, 'Photo Print Camera ', 'White, portable photo print camera. .', 250, '250.00', 'camera', '../productImages/D5.jpg', '1'),
(21, 'Portable Bluetooth Speaker ', 'White/Black, metallic, rechargeable, portable Bluetooth speaker.', 200, '70.00', 'speaker', '../productImages/E1.jpg', '5'),
(22, 'Woofer Speaker   ', 'Black, standing woofer with four-sided voice system.', 250, '120.00', 'speaker', '../productImages/E2.jpg', '4'),
(23, 'Bar speaker  ', 'Black, Metallic framed bar speaker.', 1, '80.00', 'speaker', '../productImages/E3.jpg', '3'),
(24, 'Portable Mini Ball Bluetooth S', 'White, Fabricated body, rechargeable, portable Mini Bluetooth speaker.', 50, '70.00', 'speaker', '../productImages/E4.jpg', '4'),
(25, 'Wired PC speakers ', 'Black, matte wired PC/desktop speakers.', 250, '40.00', 'speaker', '../productImages/E5.jpg', '4');


--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);



--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;