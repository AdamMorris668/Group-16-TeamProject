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
(B1, 'Wired Keyboard ', 'Simple matte black wired desktop keyboard.', 200, '40.00', '../Images/product-img/B1.jpg'),
(B2, 'Wireless Keyboard ', 'Slim full white wireless desktop keyboard.', 250, '50.00', '../Images/product-img/B2.jpg'),
(B3, 'Gaming Keyboard ', 'Black wireless mechanical gaming keyboard, with RGB lighting.', 1, '70.00', '../Images/product-img/B3.jpg'),
(B4, 'Laser Sensor Keyboard ', 'Portable and rechargeable laser sensor keyboard.', 50, '120.00', '../Images/product-img/B4.jpg'),
(B5, 'Numeric keypad', 'Wired, black metallic, 34 Keys number pad numeric keypad.', 250, '30.00', '../Images/product-img/B5.jpg'),
(C1, 'Wired Mouse ', 'Wired, black matte sensor smooth desktop mouse.', 200, '20.00', '../Images/product-img/C1.jpg'),
(C2, 'Wireless Mouse  ', 'Wireless, rechargeable black matte sensor smooth desktop mouse.', 250, '30.00', '../Images/product-img/C2.jpg'),
(C3, 'Wireless Gaming Mouse  ', 'Wireless, rechargeable black gaming mouse.', 1, '40.00', '../Images/product-img/C3.jpg'),
(C4, 'Wireless vertical Mouse ', 'Wireless, black vertical mouse.', 50, '35.00', '../Images/product-img/C4.jpg'),
(C5, 'Wireless Magic Mouse ', 'Wireless, slim, white smooth touch magic mouse.', 250, '70.00', '../Images/product-img/C5.jpg'),
(D1, 'Camera DSLR  ', 'Black, Professional digital DSLR camera.', 200, '350.00', '../Images/product-img/D1.jpg'),
(D2, 'Compact Camera    ', 'Black, pocket compact camera 42 mega pixel. ', 250, '120.00', '../Images/product-img/D2.jpg'),
(D3, 'Camera 360  ', 'Black, portable 360° angle camera.', 1, '300.00', '../Images/product-img/D3.jpg'),
(D4, 'Web Camera  ', 'Black, wide angle desktop web camera..', 50, '50.00', '../Images/product-img/D4.jpg'),
(D5, 'Photo Print Camera ', 'White, portable photo print camera. .', 250, '250.00', '../Images/product-img/D5.jpg'),
(E1, 'Portable Bluetooth Speaker ', 'White/Black, metallic, rechargeable, portable Bluetooth speaker.', 200, '70.00', '../Images/product-img/E1.jpg'),
(E2, 'Woofer Speaker   ', 'Black, standing woofer with four-sided voice system.', 250, '120.00', '../Images/product-img/E2.jpg'),
(E3, 'Bar speaker  ', 'Black, Metallic framed bar speaker.', 1, '80.00', '../Images/product-img/E3.jpg'),
(E4, 'Portable Mini Ball Bluetooth Speaker ', 'White, Fabricated body, rechargeable, portable Mini Bluetooth speaker.', 50, '70.00', '../Images/product-img/E4.jpg'),
(E5, 'Wired PC speakers ', 'Black, matte wired PC/desktop speakers.', 250, '40.00', '../Images/product-img/E5.jpg'),


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
(8, 'hansraj', '220254236@aston.ac.uk', '4747');
(9, 'kieranfranklinbaily', '210147713@aston.ac.uk', '2002');
