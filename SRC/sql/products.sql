-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `product` varchar(30) DEFAULT NULL,
  `product_description` varchar(200) NOT NULL,
  `size` int(11) DEFAULT NULL,
  `price` decimal(10,2) DEFAULT NULL,
  `images` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `product`, `product_description`, `size`, `price`, `images`) VALUES
(A1, 'LCD Monitor', '24” Black LCD Monitor with silver base.', 200, '80.00', '../Images/product-img/A1.jpg'),
(A2, 'LED Monitor', '30” Full Black LED Display Monitor.', 250, '100.00', '../Images/product-img/A2.jpg'),
(A3, 'Curved Monitor', '32” Full Black, Curved Ultrawide Display Monitor.', 1, '150.00', '../Images/product-img/A3.jpg'),
(A4, 'Touch Screen Monitor', '24” Full Black Matte, Smooth touch screen monitor.', 50, '180.00', '../Images/product-img/A4.jpg'),
(A5, 'Large Wall Monitor', '84” Full Black, Edge LED, large screen display.', 250, '220.00', '../Images/product-img/A5.jpg'),

