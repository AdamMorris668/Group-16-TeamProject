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
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `product` varchar(30) NOT NULL,
  `product_description` varchar(200) NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `type` varchar(100) NOT NULL,
  `images` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `product`, `product_description`, `quantity`, `price`, `type`, `images`) VALUES
(1, 'LCD Monitor', '24” Black LCD Monitor with silver base, Refresh Rate. Resolution. 1920 x 1080.
Panel Type: IPS. Aspect Ratio. 16:9.
Display Resolution: FHD. Brightness. 250(Typ), 200(min) cd/m2.
Color Gamut: 72% Response Time. 5ms (Faster)
Contrast Ratio (DFC) 1000:1 (Typ.) Viewing Angle. 178 / 178.
Surface Treatment. Anti glare ,3H.', 200, '80.00', 'monitor', '../Images/product-img/A1.jpg'),
(2, 'LED Monitor', '30” Full Black LED Display Monitor. IPS Display
Sleek Cut Design
Black Stabilizer
Reader Mode/Flicker Safe', 250, '100.00', 'monitor', '../Images/product-img/A2.jpg'),
(3, 'Curved Monitor', '32” Full Black, Curved Ultrawide Display Monitor.21:9 Curved QHD
Flicker-Safe IPS DISPLAY
SRGB OVER 99% / 10-bit-colour via Display Port
THUNDERBOLT™ 2 / MAC® COMPATIBLE
Wall Mountable (100x100)
ENERGY STAR® QUALIFIED', 1, '150.00', 'monitor', '../Images/product-img/A3.jpg'),
(4, 'Touch Screen Monitor', '24” Full Black Matte, Smooth touch screen monitor. 【ALL IN ONE】--27 inch led industrial grade front panel IP65 touch panel PC. 10 Point Capacitive G+G touch screen. Compact, fully functional, all the power and functionality of a desktop computer in all in one design, ideal for industrial and commercial applications.
【POWERFUL PROCESSOR】--Industrial touchscreen panel PC uses Intel Core i3-3110M processor with high performance and low power consumption.
【STABLE PERFORMANCE】--Industrial touchscreen panel PC is designed, tested and manufactured in strict accordance with the reliability and stability standards of industrial products. Support 7 * 24-hour uninterrupted operation.
【MULTIPLE APPLICATION】--10 Point Capacitive G+G touch screen is ideal for industrial and commercial applications, such as production line management, industrial workshop, equipment control system, security management system, intelligent manufacturing management, advertising information playback, catering order cashier, network monitoring management and etc.', 50, '180.00', 'monitor', '../Images/product-img/A4.jpg'),
(5, 'Large Wall Monitor', '84” Full Black, Edge LED, large screen display.Brightness: 700 cd/m2
Operation (Hours / Days): 24/7
Orientation: Landscape / Portrait
Resolution: 3,840 x 2,160 Pixels
Built-in speakers ', 250, '220.00', 'monitor', '../Images/product-img/A5.jpg'),
(6, 'Wired Keyboard ', 'Simple matte black wired desktop keyboard.Mini UK keyboard: PERIBOARD-409 is a mini keyboard ( 31.4 x 14.6 x 2 cm) with low profile keycaps in UK layout. The keyboard has a big enter key and pound sterling key, it is an exclusive design for the UK users.
Basic and Brilliant: The neat mini keyboard is suitable for all applications. Without Logo printed on the keyboard, it is easy for you to integrate it in your own system.
Solid and Powerful: The keys are built with durable UV coating, it offers 10.000.000 times switch life cycle. Because of the one piece design, there's no worrying about breaking the keyboards feet. The keyboard is built with high quality ABS material and membrane switch.
Plug and Play: This keyboard does not require any extra drivers to work. Simply plug it into a USB 2.0 port and use it. Cable is about 1.8 meter. It is long enough for you to connect with your computer, whether it is on or under your desk.
System requirements: Windows 7, 8, 10. Wired USB connection. Package includes: 1 PERIBOARD-409, 1 instruction manual. 24-month limited warranty in the UK
 ', 200, '40.00', 'keyboard', '../Images/product-img/B1.jpg'),
(7, 'Wireless Keyboard ', 'Slim full white wireless desktop keyboard.Cable-Free: Bluetooth Connection with your mobile devices such as tablets and mobile phones. Bring you more convenience when you need to type. Operating distance up to 10 meters.
Broad Compatibility: Use with all four major operating systems supporting Bluetooth (iOS, Android, Mac OS and Windows), including iPad 10.2-inch / Air / iPad Pro / iPad 9.7-inch / iPad Mini / iPhone / Android Tablets like Samsung Galaxy Tab, Google Nexus / Windows, etc. After the keyboard is connected to your device, please remember to to press Fn+q for iOS, Fn+w for android, Fn+e for windows, otherwise, the @ and " position might be opposite.
Convenient Layout: QWERTY layout with hot keys customized for all iPads, including volume, music control, brightness, etc.
Long Battery Life: Energy-saving design and automatic sleep mode allow up to 4 months between battery changes. (based on 2 hours' non-stop use per day) (2 X AAA batteries included)
 ', 250, '50.00', 'keyboard', '../Images/product-img/B2.jpg'),
(8, 'Gaming Keyboard ', 'Black wireless mechanical gaming keyboard, with RGB lighting.IP32 water resistant - prevents accidental damage from liquid spills
10-zone RGB illumination - gorgeous color schemes and reactive effects
Whisper quiet gaming switches - nearly Silent use for 20 million low-friction keypresses
Premium magnetic wrist rest - provides full palm support and comfort
Dedicated multimedia controls - adjust volume and settings on the fly
Keyboard layout: English QWERTY. These layouts differ from the product images that show the American QWERTY layout', 1, '70.00', 'keyboard', '../Images/product-img/B3.jpg'),
(9, 'Laser Sensor Keyboard ', 'Portable and rechargeable laser sensor keyboard.Modern design and technology.

Highly portable

Supports USB interface and Bluetooth for convenient linking to other devices.

Perfect for editing documents directly on your phone.', 50, '120.00', 'keyboard', '../Images/product-img/B4.jpg'),
(10, 'Numeric keypad', 'Wired, black metallic, 34 Keys number pad numeric keypad. 200R Maximum contact resistance
Vmax = 4V, Vnom = 3.5V LED contact rating', 250, '30.00', 'keyboard', '../Images/product-img/B5.jpg'),
(11, 'Wired Mouse ', 'Wired, black matte sensor smooth desktop mouse.3 button mouse with scroll wheel
Optical tracking - no mouse ball
USB connection
suitable for right or left-handed use
1000 dpi optical sensor for precise movement', 200, '20.00', 'mouse', '../Images/product-img/C1.jpg'),
(12, 'Wireless Mouse  ', 'Wireless, rechargeable black matte sensor smooth desktop mouse.Stay productive wherever the day takes you without wires to tie you down. Designed for ultimate comfort, control, and consistency – this wireless mouse is the perfect companion for everything you need to do. With its contoured design, long-lasting battery, and precise tracking, you’re ready to stay on top of your day.', 250, '30.00', 'mouse', '../Images/product-img/C2.jpg'),
(13, 'Wireless Gaming Mouse  ', 'Wireless, rechargeable black gaming mouse. hyperspeed wireless technology: With low latency and seamless frequency hopping in noisy environments, you won’t even realize you’re gaming with a wireless mouse. With dual-mode, use Bluetooth for extended battery life when working', 1, '40.00', 'mouse', '../Images/product-img/C3.jpg'),
(14, 'Wireless vertical Mouse ', 'Wireless, black vertical mouse.Connectivity: USB 2.0 2,4Ghz Dongel, optical sensor, high sensitivity in comparison with other conventional optical mice. Sampling rates 1000 - 1600dpi (freely selectable with dpi selection switch) / precise operation on nearly every surface
5 buttons & scroll wheel, left & right mouse buttons, Forwards & backwards button optimally provides remarkable comfort while surfing the internet. Easy to operate buttons and scroll wheel
Prevent possible mouse arm or tennis elbow (RSI syndrome). The right choice for internet surfers as well as for people who work long periods on the computer every day.
Improved handling compared with conventional mice.', 50, '35.00', 'mouse', '../Images/product-img/C4.jpg'),
(15, 'Wireless Magic Mouse ', 'Wireless, slim, white smooth touch magic mouse.Magic Mouse is wireless and rechargeable, with an optimised foot design that lets it glide smoothly across your desk. The Multi-Touch surface allows you to perform simple gestures such as swiping between web pages and scrolling through documents.
', 250, '70.00', 'mouse', '../Images/product-img/C5.jpg'),
(16, 'Camera DSLR  ', 'Black, Professional digital DSLR camera.Take beautiful photos and movies with background blur
Easily connect, shoot and share on the move
Express your creativity with easy to follow guidance', 200, '350.00', 'camera', '../Images/product-img/D1.jpg'),
(17, 'Compact Camera    ', 'Black, pocket compact camera 42 mega pixel.FHD 1080P & 44MP digital camera: This digital camera has an HD video resolution of 1080P and an image resolution of 44MP to significantly improve image sharpness and capture clear videos. This rechargeable photo camera can help you capture the most exciting and memorable moments and give you high-quality pictures or videos.
16x digital zoom and flash light: this children's camera supports 16x digital zoom. You can magnify or decrease the subject by pressing the W/T button while taking videos and taking still pictures to enlarge or decrease distant objects and capture all the details you need. And the built-in brightening light helps you take high-quality pictures in the dark. With the pause function, you can pause recording or playback of videos.
Webcam recording and vlogging: this teenager camera photo camera can be used as a webcam, so you can enjoy video chats or real-time streaming. You can use USB to provide high quality live streaming on YouTube, Facebook, Twitter or other social media or transfer pictures and videos from the camera to your computer and then share your beautiful photos and videos on Facebook, YouTube and other social media. ', 250, '120.00', 'camera', '../Images/product-img/D2.jpg'),
(18, 'Camera 360  ', 'Black, portable 360° angle camera.360 Capture & Reframing: X3 captures 5.7K 360 Active HDR video, so you'll never miss the action. Choose your favorite angle after the fact with easy reframing tools in the AI-powered Insta360 app.
Dual 1/2" 48MP Sensors: X3's new sensors pack in more pixels for greater clarity and detail, even in low light. Capture 72MP photos, 8K timelapses and more.
4K Single-Lens Mode: Shoot wide-angle footage just like a single-lens action cam. Get maximum resolution with 4K30fps or an extremely wide 170° field of view with 2.7K MaxView.
FlowState Stabilization & 360 Horizon Lock: FlowState Stabilization and horizon leveling algorithms come together to deliver incredibly smooth videos.
Impossible Third Person View: X3 makes the Invisible Selfie Stick totally disappear from your shots for impossible third-person perspectives. Now shoot at up to 60fps with Me Mode.', 1, '300.00', 'camera', '../Images/product-img/D3.jpg'),
(19, 'Web Camera  ', 'Black, wide angle desktop web camera. Device Type - Web camera - fixed
Optical Sensor Type - - 1,300,000 pixels (1280 x 1024)
Interfaces - Hi-Speed USB
Camera - Colour
System Requirements - Microsoft Windows Vista / XP', 50, '50.00', 'camera', '../Images/product-img/D4.jpg'),
(20, 'Photo Print Camera ', 'White, portable photo print camera. Create big, smaller, with the new Polaroid Go camera. Meet your portable, wearable, partner in creativity: one small camera, lots of big ideas, and all the features you love from our classic models.

Only compatible with the Polaroid Go film..', 250, '250.00', 'camera', '../Images/product-img/D5.jpg'),
(21, 'Portable Bluetooth Speaker ', 'White/Black, metallic, rechargeable, portable Bluetooth speaker. Refined and redesigned, the Ultimate Ears BOOM 3 is a super-portable wireless speaker built for adventure. It rocks 360° sound and is waterproof, dust-proof and drop-proof. The BOOM 3 features the 'magic' button for hands-on control and a wider Bluetooth range than previous models.

360-degree Sound
BOOM 3 creates immersive sound in every direction to fill the room. It produces audio up to 90dB, with deep bass, all carefully balanced so you can hear every note.

Wireless Freedom
With Bluetooth connectivity, you can use your mobile phone, tablet or any other Bluetooth enabled device to take full control of the speaker across a 45 metre range. Pair it with up to eight Bluetooth devices for a choice of playlists.

Magic Button
Play, pause and skip songs with just one touch, directly on the speaker.', 200, '70.00', 'speaker', '../Images/product-img/E1.jpg'),
(22, 'Woofer Speaker   ', 'Black, standing woofer with four-sided voice system. Complete, powerful Bluetooth PA system with speakers, subwoofers, poles, and cables
Rich, detailed sound from 8" loudspeakers with five DSP presets to choose from
Deep, impactful bass from a high-performance 10" woofer with Class-D technology
Connect microphones, instruments, and more with built in mixers and media player', 250, '120.00', 'speaker', '../Images/product-img/E2.jpg'),
(23, 'Bar speaker  ', 'Black, Metallic framed bar speaker.Standing just under 8 cm (3") tall, this soundbar can fit under most TVs. A high-quality steel wall bracket is included to mount it flush to the wall. And small LED lights on the front indicate when certain features are enabled.', 1, '80.00', 'speaker', '../Images/product-img/E3.jpg'),
(24, 'Portable Mini Ball Bluetooth S', 'White, Fabricated body, rechargeable, portable Mini Bluetooth speaker.The Top-Quality PA Ball Speaker EDL-430/WS features an extensive reflector design and the speaker configuration is of a particular high-quality. The speaker delivers high-quality sound also suitable for radiation music and comes in a white ABS cabinet.', 50, '70.00', 'speaker', '../Images/product-img/E4.jpg'),
(25, 'Wired PC speakers ', 'Black, matte wired PC/desktop speakers.
Active speaker for computers and notebooks
Power supply via USB port (bus-powered)
On/off switch
Volume control
Frequency range: 200 Hz - 16 kHz
Sine-wave power output: 2x 120 mW (2 W RMS)
Dimensions: 7 x 6.7 x 14.5 cm
Connection: 3.5 mm jack plug', 250, '40.00', 'speaker', '../Images/product-img/E5.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_login`
--
ALTER TABLE `admin_login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
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
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
