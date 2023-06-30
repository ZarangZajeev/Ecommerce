-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 10, 2023 at 02:01 PM
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
-- Database: `shopping_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart_tbl`
--

CREATE TABLE `cart_tbl` (
  `c_id` int(11) NOT NULL,
  `customer_username` varchar(30) NOT NULL,
  `pro_id` int(11) NOT NULL,
  `qty` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cart_tbl`
--

INSERT INTO `cart_tbl` (`c_id`, `customer_username`, `pro_id`, `qty`) VALUES
(235, 'nimmy', 6, 1);

-- --------------------------------------------------------

--
-- Table structure for table `catagory_tbl`
--

CREATE TABLE `catagory_tbl` (
  `name` varchar(30) NOT NULL,
  `image` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `catagory_tbl`
--

INSERT INTO `catagory_tbl` (`name`, `image`) VALUES
('ACCESSORIES', 'upload/acces.jpg'),
('BEAUTY', 'images/100.jpg'),
('DIGITAL', 'images/10.jpg'),
('ELECTRONICS', 'images/106.jpg'),
('FASHION', 'images/101.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `ordersum_tbl`
--

CREATE TABLE `ordersum_tbl` (
  `orderid` int(11) NOT NULL,
  `prize` int(11) NOT NULL,
  `pro_id` int(11) NOT NULL,
  `qty` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ordersum_tbl`
--

INSERT INTO `ordersum_tbl` (`orderid`, `prize`, `pro_id`, `qty`) VALUES
(81, 663, 4, 3),
(82, 1999, 6, 1),
(83, 2999, 7, 1),
(83, 1999, 6, 1),
(84, 2009, 8, 3),
(84, 340, 5, 3),
(84, 32000, 12, 3),
(84, 1999, 6, 3),
(85, 663, 4, 10),
(86, 663, 4, 9),
(87, 663, 4, 10),
(88, 32000, 12, 1),
(89, 663, 4, 3),
(89, 340, 5, 3),
(90, 340, 5, 4),
(91, 340, 5, 19),
(92, 663, 4, 2),
(93, 663, 4, 9),
(94, 2999, 7, 1),
(95, 4800, 9, 1),
(96, 955, 37, 1),
(97, 351, 233, 1),
(98, 2999, 7, 1),
(99, 2999, 7, 1),
(100, 2999, 7, 1),
(101, 2999, 7, 1),
(102, 340, 5, 1),
(103, 20000, 6, 1),
(104, 340, 5, 1),
(104, 20000, 6, 1),
(104, 2999, 7, 1),
(104, 2009, 8, 1),
(104, 4800, 9, 1),
(104, 351, 233, 1),
(104, 489, 42, 1),
(104, 24890, 189, 1),
(104, 499, 210, 1),
(105, 567, 232, 1),
(105, 105, 27, 1),
(105, 229, 41, 1),
(105, 178, 52, 1),
(105, 663, 108, 1),
(105, 110, 132, 1),
(105, 19, 58, 1),
(105, 78, 123, 1),
(105, 319, 88, 1),
(105, 955, 37, 1),
(105, 17876, 188, 1),
(105, 23, 118, 1),
(106, 456, 217, 1),
(106, 955, 37, 1),
(106, 489, 42, 1),
(106, 225, 47, 1),
(106, 663, 72, 1),
(106, 78, 123, 1),
(106, 23, 118, 1),
(106, 123, 93, 1),
(106, 70, 158, 1),
(107, 764, 212, 1),
(107, 70, 35, 1),
(107, 225, 47, 1),
(107, 35, 62, 1),
(107, 489, 42, 1),
(107, 178, 52, 1),
(107, 10, 57, 1),
(108, 2009, 8, 1),
(109, 67, 55, 1),
(110, 489, 42, 1),
(111, 67, 55, 1),
(112, 340, 99, 1),
(113, 40, 19, 1),
(114, 340, 5, 1),
(115, 2999, 7, 1),
(116, 20000, 6, 1),
(118, 340, 5, 1),
(119, 20000, 6, 1),
(120, 20000, 6, 1),
(121, 340, 5, 1),
(122, 340, 5, 1),
(123, 340, 5, 1),
(124, 340, 5, 1),
(125, 20000, 6, 1);

-- --------------------------------------------------------

--
-- Table structure for table `order_tbl`
--

CREATE TABLE `order_tbl` (
  `order_id` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `total` int(11) NOT NULL,
  `time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `order_tbl`
--

INSERT INTO `order_tbl` (`order_id`, `username`, `total`, `time`) VALUES
(81, 'mathew', 11984, '2022-09-07 20:00:28'),
(82, 'mathew', 4998, '2022-09-08 18:17:29'),
(83, 'mathew', 4998, '2022-09-08 18:21:16'),
(84, 'nimmy', 109044, '2022-09-09 19:20:27'),
(85, 'nimmy', 6630, '2022-11-05 18:46:19'),
(86, 'nimmy', 5967, '2022-11-05 18:46:56'),
(87, 'nimmy', 6630, '2022-11-05 19:11:25'),
(88, 'nimmy', 32000, '2022-11-05 20:29:43'),
(89, 'nimmy', 3009, '2022-11-06 15:08:27'),
(90, 'nimmy', 1360, '2022-11-06 16:04:32'),
(91, 'hakkem', 6460, '2022-11-06 16:06:58'),
(92, 'nimmy', 1326, '2022-11-06 16:17:00'),
(93, 'hakkem', 5967, '2022-11-07 18:48:59'),
(94, 'hakkem', 2999, '2022-11-07 18:50:00'),
(95, 'hakkem', 4800, '2022-11-07 18:50:05'),
(96, 'hakkem', 955, '2022-11-07 18:50:11'),
(97, 'hakkem', 351, '2022-11-07 18:50:17'),
(98, 'hakkem', 2999, '2022-11-07 18:51:30'),
(99, 'hakkem', 2999, '2022-11-07 18:51:59'),
(100, 'hakkem', 2999, '2022-11-07 18:52:34'),
(101, 'hakkem', 2999, '2022-11-07 18:53:33'),
(102, 'hakkem', 340, '2022-11-07 18:54:31'),
(103, 'hakkem', 20000, '2022-11-07 18:54:42'),
(104, 'hakkem', 56377, '2022-11-07 18:55:23'),
(105, 'nimmy', 21963, '2022-11-07 19:04:54'),
(106, 'thomas', 3745, '2022-11-07 19:07:22'),
(107, 'sandhya', 1806, '2022-11-07 19:09:36'),
(108, 'nimmy', 2009, '2022-11-08 13:46:13'),
(109, 'abi', 67, '2022-11-08 14:39:24'),
(110, 'abi', 489, '2022-11-08 14:39:57'),
(111, 'abi', 67, '2022-11-08 14:40:14'),
(112, 'abi', 340, '2022-11-08 14:40:30'),
(113, 'abi', 40, '2022-11-08 14:41:17'),
(114, 'pooj', 340, '2022-11-14 14:10:18'),
(115, 'nimmy', 2999, '2022-11-16 19:37:37'),
(116, 'nimmy', 20000, '2022-11-16 19:37:51'),
(118, 'nimmy', 340, '2022-11-16 21:12:30'),
(119, 'nimmy', 20000, '2022-11-16 21:15:16'),
(120, 'nimmy', 20000, '2022-11-16 21:15:42'),
(121, 'nimmy', 21003, '2022-11-16 21:16:31'),
(122, 'nimmy', 340, '2022-11-16 21:17:56'),
(123, 'hakkem', 340, '2022-11-17 11:43:57'),
(124, 'nimmy', 340, '2022-11-29 15:23:13'),
(125, 'nimmy', 20000, '2022-12-06 10:42:46');

-- --------------------------------------------------------

--
-- Table structure for table `payment_history_tbl`
--

CREATE TABLE `payment_history_tbl` (
  `customer_username` varchar(30) NOT NULL,
  `amount` int(11) NOT NULL,
  `bill_no` int(11) NOT NULL,
  `time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `payment_history_tbl`
--

INSERT INTO `payment_history_tbl` (`customer_username`, `amount`, `bill_no`, `time`) VALUES
('mathew', 11984, 81, '2022-09-07 20:00:28'),
('mathew', 4998, 82, '2022-09-08 18:17:29'),
('mathew', 4998, 83, '2022-09-08 18:21:16'),
('nimmy', 109044, 84, '2022-09-09 19:20:27'),
('nimmy', 6630, 85, '2022-11-05 18:46:19'),
('nimmy', 5967, 86, '2022-11-05 18:46:56'),
('nimmy', 6630, 87, '2022-11-05 19:11:25'),
('nimmy', 32000, 88, '2022-11-05 20:29:43'),
('nimmy', 3009, 89, '2022-11-06 15:08:27'),
('nimmy', 1360, 90, '2022-11-06 16:04:32'),
('hakkem', 6460, 91, '2022-11-06 16:06:58'),
('nimmy', 1326, 92, '2022-11-06 16:17:00'),
('hakkem', 5967, 93, '2022-11-07 18:48:59'),
('hakkem', 2999, 94, '2022-11-07 18:50:00'),
('hakkem', 4800, 95, '2022-11-07 18:50:05'),
('hakkem', 955, 96, '2022-11-07 18:50:11'),
('hakkem', 351, 97, '2022-11-07 18:50:17'),
('hakkem', 2999, 98, '2022-11-07 18:51:30'),
('hakkem', 2999, 99, '2022-11-07 18:51:59'),
('hakkem', 2999, 100, '2022-11-07 18:52:34'),
('hakkem', 2999, 101, '2022-11-07 18:53:33'),
('hakkem', 340, 102, '2022-11-07 18:54:31'),
('hakkem', 20000, 103, '2022-11-07 18:54:42'),
('hakkem', 56377, 104, '2022-11-07 18:55:23'),
('nimmy', 21963, 105, '2022-11-07 19:04:54'),
('thomas', 3745, 106, '2022-11-07 19:07:22'),
('sandhya', 1806, 107, '2022-11-07 19:09:36'),
('nimmy', 2009, 108, '2022-11-08 13:46:13'),
('abi', 67, 109, '2022-11-08 14:39:24'),
('abi', 489, 110, '2022-11-08 14:39:57'),
('abi', 67, 111, '2022-11-08 14:40:14'),
('abi', 340, 112, '2022-11-08 14:40:30'),
('abi', 40, 113, '2022-11-08 14:41:17'),
('pooj', 340, 114, '2022-11-14 14:10:18'),
('nimmy', 2999, 115, '2022-11-16 19:37:37'),
('nimmy', 20000, 116, '2022-11-16 19:37:51'),
('nimmy', 0, 117, '2022-11-16 21:11:44'),
('nimmy', 340, 118, '2022-11-16 21:12:30'),
('nimmy', 20000, 119, '2022-11-16 21:15:16'),
('nimmy', 20000, 120, '2022-11-16 21:15:42'),
('nimmy', 21003, 121, '2022-11-16 21:16:31'),
('nimmy', 340, 122, '2022-11-16 21:17:56'),
('hakkem', 340, 123, '2022-11-17 11:43:57'),
('nimmy', 340, 124, '2022-11-29 15:23:13'),
('nimmy', 20000, 125, '2022-12-06 10:42:46');

-- --------------------------------------------------------

--
-- Table structure for table `payment_tbl`
--

CREATE TABLE `payment_tbl` (
  `customer_username` varchar(30) NOT NULL,
  `balanace` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `payment_tbl`
--

INSERT INTO `payment_tbl` (`customer_username`, `balanace`) VALUES
('abi', 4),
('apple', 1000),
('hakkem', 2147373616),
('jestinsir', 1000),
('mathew', 2147461884),
('nimmy', 2147148272),
('pooj', 2147483647),
('sandhya', 2147481859),
('soumyabca', 2147483647),
('thomachan', 1000),
('thomachan123', 1000),
('thomas', 2147479939);

-- --------------------------------------------------------

--
-- Table structure for table `product_tbl`
--

CREATE TABLE `product_tbl` (
  `pro_id` int(11) NOT NULL,
  `name` varchar(300) NOT NULL,
  `description` varchar(500) NOT NULL,
  `image` varchar(100) NOT NULL,
  `catagory` varchar(20) NOT NULL,
  `subcatagory` varchar(20) NOT NULL,
  `company_username` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product_tbl`
--

INSERT INTO `product_tbl` (`pro_id`, `name`, `description`, `image`, `catagory`, `subcatagory`, `company_username`) VALUES
(4, 'Martucci School Bags', 'School Bag<br>\nPolyester<br>\nFor Boys & Girls<br>\nWaterproof<br>\nNumber of Compartments: 4<br>', 'images/new/marbag.jpg', 'ACCESSORIES', 'BAG', 'ibm'),
(5, 'boAt Bluetooth Speaker', 'Power Output(RMS): 14 W<br>Power Source: USB Chargeable<br>\nBattery life: 8 hr<br>\nBluetooth Version: 2.1<br>Wireless range: 10 m<br>\nWireless music streaming via bluetooth', 'images/new/bluetooth speaker.jpg', 'ELECTRONICS', 'BLUETOOTH SPEAKER', 'ibm'),
(6, 'Pressure Cooker', 'Made of: Aluminium<br>Pack of: 2<br>Capacity: 3 L, 5 L<br>Lid Type: Inner Lid', 'images/new/cooker.jpg', 'ACCESSORIES', 'COOKER', 'ibm'),
(7, 'Whirlpool  Washing Machine', 'Semi Automatic Top Load<br>\n1400 rpm : Higher the spin speed, lower the drying time<br>\nNumber of wash programs - 3<br>\n5 Star Rating<BR>\n7.5 kg<br>', 'images/new/wirlpool1.5.jpg', 'ELECTRONICS', 'WASHING MACHINE', 'ibm'),
(8, 'Hp Laptop', 'Stylish & Portable Thin and Light Laptop<br>\n14 inch Full HD, IPS Brightview,micro-edge,WLED- Backlit, Brightness: 250 nits, 157 ppi, Color Gamut: 45%NTSC<br>\nLight Laptop without Optical Disk Drive<br>', 'upload/10092.jpg', 'DIGITAL', 'laptop', 'ibm'),
(9, 'Acer Desktop', 'Windows 10 Home<br>\nIntel Core i5<br>\nHDD Capacity 500 GB<br>\nRAM 8 GB DDR3<br>\n18.5 inch Display<br>', 'upload/19068.jpg', 'DIGITAL', 'desktop', 'ibm'),
(10, 'TataTurmeric Powder  (100 g)', 'Form FactorPowder<br>\nPack of: 1<br>\nQuantity: 100 g<br>\nReady MasalaNo<br>', 'upload/a.jpg', 'GROCERY', 'kitchen powder', 'ibm'),
(11, 'TOTS AND MOMS Ragi Powder', 'Certified Since 4 yrs<br> Traditional & Homemade<br>', 'images/grocery/c.jpg', 'GROCERY', 'flour', 'ibm'),
(12, 'Men Collar Casual Shirt', 'Fits:Slim<br>|Size:XL<br>', 'images/fashion/a.jpg', 'FASHION', 'shirt', 'ibm'),
(13, 'Women  Multicolor Dress', 'Fit Type: Regular<br> Comfortable for Kids<br> Fabric: Net || Style: Bow Dress, Fit Type: Regular Fit & Flare<br> Stylish and Trendy || Ideal for Festive Event, Functions, Holiday & Wedding, Festive, Parties, Family, Friends, Friday, Christmas, New Year Parties, School Wearing, Shows, and any other special occasions<br> Sales Package- 1 Frock<br> Size: The Frock size and measurements might be different from other clothes children normally wear. For best fitting, please take measurements for your', 'images/fashion/b.jpg', 'FASHION', 'frock', 'ibm'),
(14, 'Casio Watch', ' Water Resistant:::: Yes<br> Display Type:::: Analog<br> Style Code:::: A1362<br> Series:::: Enticer Men\'s ( MTP-VD01D-1EVUDF )<br> Occasion:::: Casual, Formal<br> Watch Type:::: Wrist Watch<br> Pack of:::: 1<br> Sales Package:::: 1 Box, 1 Watch, 1 Warranty Card With Serial Number, 1 Warranty Term Sheet, 1 User Manual<br>', 'images/fashion/c.jpg', 'FASHION', 'watch', 'ibm'),
(15, 'Casuals For Men', 'Color:::: White<br> Inner material:::: EVA or Rubber<br> Outer material:::: Textile<br> Ideal for:::: Men<br> Occasion:::: Casual<br> Sole material:::: PVC<br> Closure:::: Lace-Ups<br> pack of:::: 1<br>', 'images/fashion/10.jpg', 'FASHION', 'shoe', 'ibm'),
(16, 'Eyeliner 3 ml', 'Non Organic Eyeliner<br> Waterproof<br> Liquid<br> Tip Type: Brush<br>', 'images/beauty/a.jpg', 'BEAUTY', 'eyeliner', 'ibm'),
(17, 'sephora Lipstick', 'Gives a Matte finish look<br> Texture is: Liquid<br> Quantity: 21 ml<br> Long lasting<br>', 'images/beauty/b.jpg', 'BEAUTY', 'lipstick', 'ibm'),
(18, 'Nea Papaya Face Wash ', 'For Men & Women<br> Gel Based<br> For All Skin Types<br> Applied For: Fresh Renewal, Refreshing, Tan Removal, Radiance & Glow, Skin Defense<br> Comes in Tube<br>', 'images/beauty/c.jpg', 'BEAUTY', 'FACE WASH', 'ibm'),
(19, 'indulekha Hair Oil  (250 ml)', 'For Men & Women<br> Suitable For All Hair Types<br> Applied For Hair Strengthening, Split-ends, Anti-hair Fall<br>', 'images/beauty/12.jpg', 'BEAUTY', 'hair oil', 'ibm'),
(20, 'Intex Bluetooth Home Theatre', 'Power Output(RMS): 55 W<br> Power Source: AC Adapter<br> Bluetooth Version: 5.1<br> Wireless range: 8 m<br> Wireless music streaming via Bluetooth<br> Memory Card Slot<br> Fully Functioned Remote Control<br>', 'images/electronics/a.jpg', 'ELECTRONICS', 'home theatre', 'ibm'),
(21, 'boAt Bluetooth Soundbar ', 'Power Output(RMS): 60 W<br> Power Source: AC Adapter<br> Wireless music streaming via Bluetooth<br>', 'images/electronics/b.jpg', 'ELECTRONICS', 'sound bar', 'ibm'),
(22, 'JBL Bluetooth Speaker', ' Memory Card Slot	No Power Source	Battery Power Output	3W Frequency Response	180Hz-20000Hz Outdoor Usage	Yes Colour	Red Dimensions Width	827 Height	683 Depth	308 Product details Battery	Lithium-ion Polymer Battery Capacity	600 mAh Charging Time	1.5 hrs Bluetooth	Yes Headphone Jack	Yes Connector Type	3.5 mm Audio Input Compatible Devices	Mobile, Computer, Tablet Audio features Signal to Noise Ratio	80 dB Other details Controls	Volume Control', 'images/electronics/c.jpg', 'ELECTRONICS', 'BLUETOOTH SPEAKER', 'ibm'),
(23, 'PanasonicLED', 'LED B22 Bulb Base<br> Pack of 2<br> Power Consumption: 15 W<br> Cool Daylight (6500-7500K)<br> Light Color: White<br> 1380 Lumen<br>', 'images/electronics/10.jpg', 'ELECTRONICS', 'light', 'ibm'),
(24, 'Dukes Kaju Kukkies with real taste of Kaju Cookies', 'Type: Cookies<br>\nQuantity: 400 g<br>\nBase Flavor: Cashew<br>\nVegetarian<br>', 'images/new/bisuit1.jpg', 'GROCERY', 'BISCUIT', 'ibm'),
(25, 'PARLE Melody Chocolate', '\nBrand    PARLE<BR>\nModel Name    Melody Chocolaty<BR>\nQuantity    391 g<BR>\nType    Toffee<BR>\nMaximum Shelf Life    12 Months<BR>\nFood Preference    Vegetarian<BR>\nIngredients    NA<BR>\nNutrient Content    NA<BR>', 'images/new/melody1.jpg', 'GROCERY', 'TOFFY', 'ibm'),
(26, 'Daawat Basmati Rice (5 kg)', '\r\nBrand    Daawat<BR>\r\nModel Name    Biryani<BR>\r\nRice Type    Basmati Rice<BR>\r\nQuantity    5 kg<BR>\r\nColor    White<BR>\r\nMaximum Shelf Life    24 Months<BR>\r\nNutrient Content    NA<BR>\r\nContainer Type    Bag<BR>', 'images/new/dawath5.jpg', 'GROCERY', 'RICE', 'ibm'),
(27, 'INDIAGATE Basmati Rice(1 kg)', 'Brand    INDIA GATE<BR>\nModel Name    Dubar<BR>\nRice Type    Basmati Rice<BR>\nQuantity    1 kg<BR>\nColor    White<BR>\nMaximum Shelf Life    24 Months<BR>\nNutrient Content    NA<BR>\nContainer Type    Pouch<BR>\nCountry of Origin    India<BR>', 'images/new/indiagate1.jpg', 'GROCERY', 'RICE', 'ibm'),
(28, 'Pavizham vadi matta 5KG', 'Brand    Pavizham<br>\nModel Name    white ponni Sorted Rice<br>\nRice Type    Ponni Rice<br>\nQuantity    5 kg<br>\nTexture    Polished<br>\nColor    White<br>\nGrain Size    Long Grain<br>\nMaximum Shelf Life    6 Months<br>\nCuisine    Indian<br>\nOrigin    Kerala<br>\nNutrient Content    Total fat - 0.25 g, Sodium - 4 mg, Total Carbohydrate - 36 g, Dietary fiber - 0.1 g, Protein - 2.9 g, Calcium -0.02%, Iron 3.3 %.<br>\nCaloric Value    158 cal<br>\nContainer Type    Bag<br>\nCountry of Origin    india<b', 'images/new/pav.jpg', 'GROCERY', 'RICE', 'ibm'),
(29, 'Pavizham vadi matta 10KG', 'Brand    Pavizham<br>\nModel Name    white ponni Sorted Rice<br>\nRice Type    Ponni Rice<br>\nQuantity    5 kg<br>\nTexture    Polished<br>\nColor    White<br>\nGrain Size    Long Grain<br>\nMaximum Shelf Life    6 Months<br>\nCuisine    Indian<br>\nOrigin    Kerala<br>\nNutrient Content    Total fat - 0.25 g, Sodium - 4 mg, Total Carbohydrate - 36 g, Dietary fiber - 0.1 g, Protein - 2.9 g, Calcium -0.02%, Iron 3.3 %.<br>\nCaloric Value    158 cal<br>\nContainer Type    Bag<br>\nCountry of Origin    india<b', 'images/new/pav1.jpg', 'GROCERY', 'RICE', 'ibm'),
(30, 'Nirmal matta 5KG', 'Brand    Nirmal<br>\nModel Name    Matta Sorted Rice<br>\nRice Type    Matta Rice<br>\nQuantity    5 kg<br>\nTexture    Polished<br>\nColor    White<br>\nGrain Size    Long Grain<br>\nMaximum Shelf Life    6 Months<br>\nCuisine    Indian<br>\nOrigin    Kerala<br>\nNutrient Content    Total fat - 0.25 g, Sodium - 4 mg, Total Carbohydrate - 36 g, Dietary fiber - 0.1 g, Protein - 2.9 g, Calcium -0.02%, Iron 3.3 %.<br>\nCaloric Value    158 cal<br>\nContainer Type    Bag<br>\nCountry of Origin    india<br>', 'images/new/nirmal1.jpg', 'GROCERY', 'RICE', 'ibm'),
(31, 'Nirmal matta 10KG', 'Brand    Nirmal<br>\nModel Name    Matta Sorted Rice<br>\nRice Type    Matta Rice<br>\nQuantity    10 kg<br>\nTexture    Polished<br>\nColor    White<br>\nGrain Size    Long Grain<br>\nMaximum Shelf Life    6 Months<br>\nCuisine    Indian<br>\nOrigin    Kerala<br>\nNutrient Content    Total fat - 0.25 g, Sodium - 4 mg, Total Carbohydrate - 36 g, Dietary fiber - 0.1 g, Protein - 2.9 g, Calcium -0.02%, Iron 3.3 %.<br>\nCaloric Value    158 cal<br>\nContainer Type    Bag<br>\nCountry of Origin    india<br>', 'images/new/nirmal2.jpg', 'GROCERY', 'RICE', 'ibm'),
(32, 'lal Quilla basmathi rice 5KG', 'Brand    LAL QILLA<br>\nModel Name    Classic White Line Basmati Rice 5Kg - Gluten free<br>\nRice Type    Basmati Rice<br>\nQuantity    5 kg<br>\nColor    White<br>\nMaximum Shelf Life    24 Months<br>\nCuisine    Indian<br>\nDietary Preference    Gluten Free<br>\nNutrient Content    Na<br>\nContainer Type    Bag<br>\nCountry of Origin    India<br>', 'images/new/lal1.jpg', 'GROCERY', 'RICE', 'ibm'),
(33, 'lal Quilla basmathi rice 1KG', 'Brand    LAL QILLA<br>\nModel Name    Classic White Line Basmati Rice 1Kg - Gluten free<br>\nRice Type    Basmati Rice<br>\nQuantity    1kg<br>\nColor    White<br>\nMaximum Shelf Life    24 Months<br>\nCuisine    Indian<br>\nDietary Preference    Gluten Free<br>\nNutrient Content    Na<br>\nContainer Type    Bag<br>\nCountry of Origin    India<br>', 'images/new/lal2.jpg', 'GROCERY', 'RICE', 'ibm'),
(34, 'Double Horse  Rice 5KG', 'Brand    Double Horese<br>\nModel Name   Sorted Rice<br>\nRice Type    Matta Rice<br>\nQuantity    5kg<br>\nTexture    Polished<br>\nColor    White<br>\nGrain Size    Long Grain<br>\nMaximum Shelf Life    6 Months<br>\nCuisine    Indian<br>\nOrigin    Kerala<br>\nNutrient Content    Total fat - 0.25 g, Sodium - 4 mg, Total Carbohydrate - 36 g, Dietary fiber - 0.1 g, Protein - 2.9 g, Calcium -0.02%, Iron 3.3 %.<br>\nCaloric Value    158 cal<br>\nContainer Type    Bag<br>\nCountry of Origin    india<br>', 'images/new/DH1.jpg', 'GROCERY', 'RICE', 'ibm'),
(35, 'Double Horse  10KG Rice', 'Brand    Double Horse<br>\nModel Name   Sorted Rice<br>\nRice Type    Matta Rice<br>\nQuantity    10kg<br>\nTexture    Polished<br>\nColor    White<br>\nGrain Size    Long Grain<br>\nMaximum Shelf Life    6 Months<br>\nCuisine    Indian<br>\nOrigin    Kerala<br>\nNutrient Content    Total fat - 0.25 g, Sodium - 4 mg, Total Carbohydrate - 36 g, Dietary fiber - 0.1 g, Protein - 2.9 g, Calcium -0.02%, Iron 3.3 %.<br>\nCaloric Value    158 cal<br>\nContainer Type    Bag<br>\nCountry of Origin    india<br>', 'images/new/DH2.jpg', 'GROCERY', 'RICE', 'ibm'),
(36, 'Moments 125GM', 'Brand    FERRERO ROCHER <br>   \nModel Name    Moments,Box of 24 Units\nType    Semisweet Chocolate<br>\nMaximum Shelf Life    8 Months<br>\nWith Nuts    Yes<br>\nGift Pack    Yes<br>\nFood Preference    Vegetarian<br>\nCountry of Origin    India<br>', 'images/new/moments1.jpg', 'GROCERY', 'TOFFY', 'ibm'),
(37, 'Moments 250GM', 'Brand    FERRERO ROCHER <br>   \nModel Name    Moments,Box of 48Units\nType    Semisweet Chocolate<br>\nMaximum Shelf Life    8 Months<br>\nWith Nuts    Yes<br>\nGift Pack    Yes<br>\nFood Preference    Vegetarian<br>\nCountry of Origin    India<br>', 'images/new/moments2.jpg', 'GROCERY', 'TOFFY', 'ibm'),
(38, 'Ferror Rouchier 125GM', 'Brand    FERRERO ROCHER <br>   \nModel Name    Moments,Box of 24 Units\nType    Semisweet Chocolate<br>\nMaximum Shelf Life    8 Months<br>\nWith Nuts    Yes<br>\nGift Pack    Yes<br>\nFood Preference    Vegetarian<br>\nCountry of Origin    India<br>', 'images/new/ferror1.jpg', 'GROCERY', 'TOFFY', 'ibm'),
(39, 'Ferror Rouchier 255GM', 'Brand    FERRERO ROCHER <br>   \nModel Name    Moments,Box of 48Units\nType    Semisweet Chocolate<br>\nMaximum Shelf Life    8 Months<br>\nWith Nuts    Yes<br>\nGift Pack    Yes<br>\nFood Preference    Vegetarian<br>\nCountry of Origin    India<br>', 'images/new/ferror2.jpg', 'GROCERY', 'TOFFY', 'ibm'),
(40, 'Dairy Milk Silk 100GM', '\nBrand    Cadbury<br>\nModel Name    Dairy Milk Silk Chocolate Bar 100 g <br>\nType    Milk Chocolate<br>\nMaximum Shelf Life    9 Months<br>\nGourmet    No<br>\nGift Pack    No<br>\nFood Preference    Vegetarian<br>', 'images/new/silk1.jpg', 'GROCERY', 'TOFFY', 'ibm'),
(41, 'Dairy Milk Silk 200GM', '\nBrand    Cadbury<br>\nModel Name    Dairy Milk Silk Chocolate Bar 200 g <br>\nType    Milk Chocolate<br>\nMaximum Shelf Life    9 Months<br>\nGourmet    No<br>\nGift Pack    No<br>\nFood Preference    Vegetarian<br>', 'images/new/silk2.jpg', 'GROCERY', 'TOFFY', 'ibm'),
(42, 'Dairy Milk F&N 100GM', '\nBrand    Cadbury<br>\nModel Name    Dairy Milk Fruit and Nuts Chocolate Bar 100 g <br>\nType    Milk Chocolate<br>\nMaximum Shelf Life    9 Months<br>\nGourmet    No<br>\nGift Pack    No<br>\nFood Preference    Vegetarian<br>', 'images/new/fruit&nut.jpg', 'GROCERY', 'TOFFY', 'ibm'),
(43, 'Dairy Milk F&N 200GM', '\nBrand    Cadbury<br>\nModel Name    Dairy Milk Fruit and NutsChocolate Bar 200 g <br>\nType    Milk Chocolate<br>\nMaximum Shelf Life    9 Months<br>\nGourmet    No<br>\nGift Pack    No<br>\nFood Preference    Vegetarian<br>', 'images/new/fruit&nut2.jpg', 'GROCERY', 'TOFFY', 'ibm'),
(44, 'Amul Milk Chocalate 100GM', '\nBrand    Amul<br>\nModel Name    Milk Chocolate<br>\nType    Milk Chocolate<br>\nMaximum Shelf Life    12 Months<br>\nGourmet    No<br>\nGift Pack    No<br>\nFood Preference    Vegetarian<br>', 'images/new/milkcho.jpg', 'GROCERY', 'TOFFY', 'ibm'),
(45, 'Amul Milk Chocalate 200GM', '\nBrand    Amul<br>\nModel Name    Milk Chocolate<br>\nType    Milk Chocolate<br>\nMaximum Shelf Life    12 Months<br>\nGourmet    No<br>\nGift Pack    No<br>\nFood Preference    Vegetarian<br>', 'images/new/milkcho1.jpg', 'GROCERY', 'TOFFY', 'ibm'),
(46, 'Tiger 100GM', 'Brand    BRITANNIA<br>\nModel Name    Tiger Glucose Biscuits<br>\nQuantity    100 g<br>\nType    Plain<br>\nBase Flavors    Milk, Vanilla<br>\nOrganic    No<br>\nFood Preference    Vegetarian<br>\nDietary Preference    No Cholesterol, No Trans Fat<br>\nContainer Type    Pouch<br>\nMaximum Shelf Life    5 Months<br>\n', 'images/new/tiger1.jpg', 'GROCERY', 'BISCUIT', 'ibm'),
(47, 'Tiger 200GM', 'Brand    BRITANNIA<br>\nModel Name    Tiger Glucose Biscuits<br>\nQuantity    200 g<br>\nType    Plain<br>\nBase Flavors    Milk, Vanilla<br>\nOrganic    No<br>\nFood Preference    Vegetarian<br>\nDietary Preference    No Cholesterol, No Trans Fat<br>\nContainer Type    Pouch<br>\nMaximum Shelf Life    5 Months<br>\n', 'images/new/tiger2.jpg', 'GROCERY', 'BISCUIT', 'ibm'),
(48, 'Parle G 100GM', 'Brand    PARLE <br>\nModel Name    G glucose biscuit<br>\nQuantity    100 g<br>\nType    Plain<br>\nBase Flavors    Plain<br>\nOrganic    Yes<br>\nFood Preference    Vegetarian<br>\nContainer Type    Pouch<br>\nMaximum Shelf Life    7 Months<br>\nnutrient Content    Energy 462 kcl<br>', 'images/new/parle1.jpg', 'GROCERY', 'BISCUIT', 'ibm'),
(49, 'Parle G 200GM', 'Brand    PARLE <br>\nModel Name    G glucose biscuit<br>\nQuantity    200 g<br>\nType    Plain<br>\nBase Flavors    Plain<br>\nOrganic    Yes<br>\nFood Preference    Vegetarian<br>\nContainer Type    Pouch<br>\nMaximum Shelf Life    7 Months<br>\nnutrient Content    Energy 462 kcl<br>', 'images/new/parle2.jpg', 'GROCERY', 'BISCUIT', 'ibm'),
(50, 'Hide and seek 100GM', 'Brand    HIde And Seek <br>\nModel Name    HIde And Seek biscuit<br>\nQuantity    100 g<br>\nType    Plain<br>\nBase Flavors    Plain<br>\nOrganic    Yes<br>\nFood Preference    Vegetarian<br>\nContainer Type    Pouch<br>\nMaximum Shelf Life    7 Months<br>\nnutrient Content    Energy 462 kcl<br>', 'images/new/h&s1.jpg', 'GROCERY', 'BISCUIT', 'ibm'),
(51, 'Moms Magic 200GM', 'Brand    Moms Magic <br>\nModel Name   Moms Magic biscuit<br>\nQuantity    200 g<br>\nType    Plain<br>\nBase Flavors    Plain<br>\nOrganic    Yes<br>\nFood Preference    Vegetarian<br>\nContainer Type    Pouch<br>\nMaximum Shelf Life    7 Months<br>\nnutrient Content    Energy 462 kcl<br>', 'images/new/moms.jpg', 'GROCERY', 'BISCUIT', 'ibm'),
(52, '20-20 biscuit 200GM', 'Brand    20-20 <br>\nModel Name    20-20 biscuit<br>\nQuantity    200 g<br>\nType    Plain<br>\nBase Flavors    Plain<br>\nOrganic    Yes<br>\nFood Preference    Vegetarian<br>\nContainer Type    Pouch<br>\nMaximum Shelf Life    7 Months<br>\nnutrient Content    Energy 462 kcl<br>', 'images/new/20-20.jpg', 'GROCERY', 'BISCUIT', 'ibm'),
(53, 'Unibic Chocolate 200GM', 'Brand    UNIBIC <br>\nModel Name    UNIBIC biscuit<br>\nQuantity    200 g<br>\nType    Plain<br>\nBase Flavors    Plain<br>\nOrganic    Yes<br>\nFood Preference    Vegetarian<br>\nContainer Type    Pouch<br>\nMaximum Shelf Life    7 Months<br>\nnutrient Content    Energy 462 kcl<br>', 'images/new/chochorip.jpg', 'GROCERY', 'BISCUIT', 'ibm'),
(54, 'Hide and seek 200GM', 'Brand    HIde And Seek <br>\nModel Name    HIde And Seek biscuit<br>\nQuantity    200 g<br>\nType    Plain<br>\nBase Flavors    Plain<br>\nOrganic    Yes<br>\nFood Preference    Vegetarian<br>\nContainer Type    Pouch<br>\nMaximum Shelf Life    7 Months<br>\nnutrient Content    Energy 462 kcl<br>', 'images/new/h&s2.jpg', 'GROCERY', 'BISCUIT', 'ibm'),
(55, 'Unibic Chocolate and Nuts ', 'Brand    UNIBIC <br>\nModel Name    UNIBIC biscuit<br>\nQuantity    200 g<br>\nType    Plain<br>\nBase Flavors    Plain<br>\nOrganic    Yes<br>\nFood Preference    Vegetarian<br>\nContainer Type    Pouch<br>\nMaximum Shelf Life    7 Months<br>\nnutrient Content    Energy 462 kcl<br>', 'images/new/choconut.jpg', 'GROCERY', 'BISCUIT', 'ibm'),
(56, 'Dizo Bluettoth Speaker 10W', 'Dolby? trueHD/Dolby Digital Plus/Dolby Pro Logic II<br>\nDTS-HD Master Audio/DTS-HD High Resolution Audio/DTS Neo:6<br>\nDTS-Express/DTS 96/24<br>\nDSD Disc (SACD) Playback via HDMI (2.8 MHz)<br>\nDigital Core Engine with Texas Instruments AureusTM DSP<br>\n192 kHz/24-bit DAC<br>\nHDMI Audio Return Channel (ARC)<br>\nPhase Control<br>\nPioneer Sound Enhancements<br>\nAdvanced Sound Retriever (2ch)<br>\nAuto Level Control (2ch)<br>\nMidnight<br>\nLoudness<br>\nAdvanced Surround Modes<br>\nAction, Drama, Advanc', 'images/new/blue2.jpg', 'ELECTRONICS', 'BLUETOOTH SPEAKER', 'ibm'),
(57, 'Realmi Bluetooth speaker 10W', 'Dolby? trueHD/Dolby Digital Plus/Dolby Pro Logic II<br>\nDTS-HD Master Audio/DTS-HD High Resolution Audio/DTS Neo:6<br>\nDTS-Express/DTS 96/24<br>\nDSD Disc (SACD) Playback via HDMI (2.8 MHz)<br>\nDigital Core Engine with Texas Instruments AureusTM DSP<br>\n192 kHz/24-bit DAC<br>\nHDMI Audio Return Channel (ARC)<br>\nPhase Control<br>\nPioneer Sound Enhancements<br>\nAdvanced Sound Retriever (2ch)<br>\nAuto Level Control (2ch)<br>\nMidnight<br>\nLoudness<br>\nAdvanced Surround Modes<br>\nAction, Drama, Advanc', 'images/new/blue3.jpg', 'ELECTRONICS', 'BLUETOOTH SPEAKER', 'ibm'),
(58, 'Redmi Bluetooth speaker 15W', 'Dolby? trueHD/Dolby Digital Plus/Dolby Pro Logic II<br>\nDTS-HD Master Audio/DTS-HD High Resolution Audio/DTS Neo:6<br>\nDTS-Express/DTS 96/24<br>\nDSD Disc (SACD) Playback via HDMI (2.8 MHz)<br>\nDigital Core Engine with Texas Instruments AureusTM DSP<br>\n192 kHz/24-bit DAC<br>\nHDMI Audio Return Channel (ARC)<br>\nPhase Control<br>\nPioneer Sound Enhancements<br>\nAdvanced Sound Retriever (2ch)<br>\nAuto Level Control (2ch)<br>\nMidnight<br>\nLoudness<br>\nAdvanced Surround Modes<br>\nAction, Drama, Advanc', 'images/new/blue4.jpg', 'ELECTRONICS', 'BLUETOOTH SPEAKER', 'ibm'),
(59, 'Bluetooth Speaker 5W', 'Dolby? trueHD/Dolby Digital Plus/Dolby Pro Logic II<br>\nDTS-HD Master Audio/DTS-HD High Resolution Audio/DTS Neo:6<br>\nDTS-Express/DTS 96/24<br>\nDSD Disc (SACD) Playback via HDMI (2.8 MHz)<br>\nDigital Core Engine with Texas Instruments AureusTM DSP<br>\n192 kHz/24-bit DAC<br>\nHDMI Audio Return Channel (ARC)<br>\nPhase Control<br>\nPioneer Sound Enhancements<br>\nAdvanced Sound Retriever (2ch)<br>\nAuto Level Control (2ch)<br>\nMidnight<br>\nLoudness<br>\nAdvanced Surround Modes<br>\nAction, Drama, Advanc', 'images/new/blue5.jpg', 'ELECTRONICS', 'BLUETOOTH SPEAKER', 'ibm'),
(60, 'Bluetooth Speaker 10W', 'Dolby? trueHD/Dolby Digital Plus/Dolby Pro Logic II<br>\nDTS-HD Master Audio/DTS-HD High Resolution Audio/DTS Neo:6<br>\nDTS-Express/DTS 96/24<br>\nDSD Disc (SACD) Playback via HDMI (2.8 MHz)<br>\nDigital Core Engine with Texas Instruments AureusTM DSP<br>\n192 kHz/24-bit DAC<br>\nHDMI Audio Return Channel (ARC)<br>\nPhase Control<br>\nPioneer Sound Enhancements<br>\nAdvanced Sound Retriever (2ch)<br>\nAuto Level Control (2ch)<br>\nMidnight<br>\nLoudness<br>\nAdvanced Surround Modes<br>\nAction, Drama, Advanc', 'images/new/blue6.jpg', 'ELECTRONICS', 'BLUETOOTH SPEAKER', 'ibm'),
(61, 'Bluetooth Speaker 15W', 'Dolby? trueHD/Dolby Digital Plus/Dolby Pro Logic II<br>\nDTS-HD Master Audio/DTS-HD High Resolution Audio/DTS Neo:6<br>\nDTS-Express/DTS 96/24<br>\nDSD Disc (SACD) Playback via HDMI (2.8 MHz)<br>\nDigital Core Engine with Texas Instruments AureusTM DSP<br>\n192 kHz/24-bit DAC<br>\nHDMI Audio Return Channel (ARC)<br>\nPhase Control<br>\nPioneer Sound Enhancements<br>\nAdvanced Sound Retriever (2ch)<br>\nAuto Level Control (2ch)<br>\nMidnight<br>\nLoudness<br>\nAdvanced Surround Modes<br>\nAction, Drama, Advanc', 'images/new/blue7.jpg', 'ELECTRONICS', 'BLUETOOTH SPEAKER', 'ibm'),
(62, 'Bose Sound Bar 25W', 'Dolby? trueHD/Dolby Digital Plus/Dolby Pro Logic II<br>\nDTS-HD Master Audio/DTS-HD High Resolution Audio/DTS Neo:6<br>\nDTS-Express/DTS 96/24<br>\nDSD Disc (SACD) Playback via HDMI (2.8 MHz)<br>\nDigital Core Engine with Texas Instruments AureusTM DSP<br>\n192 kHz/24-bit DAC<br>\nHDMI Audio Return Channel (ARC)<br>\nPhase Control<br>\nPioneer Sound Enhancements<br>\nAdvanced Sound Retriever (2ch)<br>\nAuto Level Control (2ch)<br>\nMidnight<br>\nLoudness<br>\nAdvanced Surround Modes<br>\nAction, Drama, Advanc', 'images/new/bar1.jpg', 'ELECTRONICS', 'SOUND BAR', 'ibm'),
(63, 'Audio Technica Sound Bar ', 'Dolby? trueHD/Dolby Digital Plus/Dolby Pro Logic II<br>\nDTS-HD Master Audio/DTS-HD High Resolution Audio/DTS Neo:6<br>\nDTS-Express/DTS 96/24<br>\nDSD Disc (SACD) Playback via HDMI (2.8 MHz)<br>\nDigital Core Engine with Texas Instruments AureusTM DSP<br>\n192 kHz/24-bit DAC<br>\nHDMI Audio Return Channel (ARC)<br>\nPhase Control<br>\nPioneer Sound Enhancements<br>\nAdvanced Sound Retriever (2ch)<br>\nAuto Level Control (2ch)<br>\nMidnight<br>\nLoudness<br>\nAdvanced Surround Modes<br>\nAction, Drama, Advanc', 'images/new/bar2.jpg', 'ELECTRONICS', 'SOUND BAR', 'ibm'),
(64, 'Denon Sound Bar ', 'Dolby? trueHD/Dolby Digital Plus/Dolby Pro Logic II<br>\nDTS-HD Master Audio/DTS-HD High Resolution Audio/DTS Neo:6<br>\nDTS-Express/DTS 96/24<br>\nDSD Disc (SACD) Playback via HDMI (2.8 MHz)<br>\nDigital Core Engine with Texas Instruments AureusTM DSP<br>\n192 kHz/24-bit DAC<br>\nHDMI Audio Return Channel (ARC)<br>\nPhase Control<br>\nPioneer Sound Enhancements<br>\nAdvanced Sound Retriever (2ch)<br>\nAuto Level Control (2ch)<br>\nMidnight<br>\nLoudness<br>\nAdvanced Surround Modes<br>\nAction, Drama, Advanc', 'images/new/bar3.jpg', 'ELECTRONICS', 'SOUND BAR', 'ibm'),
(65, 'Roland Sound Bar ', 'Dolby? trueHD/Dolby Digital Plus/Dolby Pro Logic II<br>\nDTS-HD Master Audio/DTS-HD High Resolution Audio/DTS Neo:6<br>\nDTS-Express/DTS 96/24<br>\nDSD Disc (SACD) Playback via HDMI (2.8 MHz)<br>\nDigital Core Engine with Texas Instruments AureusTM DSP<br>\n192 kHz/24-bit DAC<br>\nHDMI Audio Return Channel (ARC)<br>\nPhase Control<br>\nPioneer Sound Enhancements<br>\nAdvanced Sound Retriever (2ch)<br>\nAuto Level Control (2ch)<br>\nMidnight<br>\nLoudness<br>\nAdvanced Surround Modes<br>\nAction, Drama, Advanc', 'images/new/bar4.jpg', 'ELECTRONICS', 'SOUND BAR', 'ibm'),
(66, 'Audio Zone Sound Bar ', 'Dolby? trueHD/Dolby Digital Plus/Dolby Pro Logic II<br>\nDTS-HD Master Audio/DTS-HD High Resolution Audio/DTS Neo:6<br>\nDTS-Express/DTS 96/24<br>\nDSD Disc (SACD) Playback via HDMI (2.8 MHz)<br>\nDigital Core Engine with Texas Instruments AureusTM DSP<br>\n192 kHz/24-bit DAC<br>\nHDMI Audio Return Channel (ARC)<br>\nPhase Control<br>\nPioneer Sound Enhancements<br>\nAdvanced Sound Retriever (2ch)<br>\nAuto Level Control (2ch)<br>\nMidnight<br>\nLoudness<br>\nAdvanced Surround Modes<br>\nAction, Drama, Advanc', 'images/new/bar5.jpg', 'ELECTRONICS', 'SOUND BAR', 'ibm'),
(67, 'Boat Sound Bar ', 'Dolby? trueHD/Dolby Digital Plus/Dolby Pro Logic II<br>\nDTS-HD Master Audio/DTS-HD High Resolution Audio/DTS Neo:6<br>\nDTS-Express/DTS 96/24<br>\nDSD Disc (SACD) Playback via HDMI (2.8 MHz)<br>\nDigital Core Engine with Texas Instruments AureusTM DSP<br>\n192 kHz/24-bit DAC<br>\nHDMI Audio Return Channel (ARC)<br>\nPhase Control<br>\nPioneer Sound Enhancements<br>\nAdvanced Sound Retriever (2ch)<br>\nAuto Level Control (2ch)<br>\nMidnight<br>\nLoudness<br>\nAdvanced Surround Modes<br>\nAction, Drama, Advanc', 'images/new/bar6.jpg', 'ELECTRONICS', 'SOUND BAR', 'ibm'),
(68, 'Sweets Audio Sound Bar ', 'Dolby? trueHD/Dolby Digital Plus/Dolby Pro Logic II<br>\nDTS-HD Master Audio/DTS-HD High Resolution Audio/DTS Neo:6<br>\nDTS-Express/DTS 96/24<br>\nDSD Disc (SACD) Playback via HDMI (2.8 MHz)<br>\nDigital Core Engine with Texas Instruments AureusTM DSP<br>\n192 kHz/24-bit DAC<br>\nHDMI Audio Return Channel (ARC)<br>\nPhase Control<br>\nPioneer Sound Enhancements<br>\nAdvanced Sound Retriever (2ch)<br>\nAuto Level Control (2ch)<br>\nMidnight<br>\nLoudness<br>\nAdvanced Surround Modes<br>\nAction, Drama, Advanc', 'images/new/bar7.jpg', 'ELECTRONICS', 'SOUND BAR', 'ibm'),
(69, 'Abc Audio Sound Bar ', 'Dolby? trueHD/Dolby Digital Plus/Dolby Pro Logic II<br>\nDTS-HD Master Audio/DTS-HD High Resolution Audio/DTS Neo:6<br>\nDTS-Express/DTS 96/24<br>\nDSD Disc (SACD) Playback via HDMI (2.8 MHz)<br>\nDigital Core Engine with Texas Instruments AureusTM DSP<br>\n192 kHz/24-bit DAC<br>\nHDMI Audio Return Channel (ARC)<br>\nPhase Control<br>\nPioneer Sound Enhancements<br>\nAdvanced Sound Retriever (2ch)<br>\nAuto Level Control (2ch)<br>\nMidnight<br>\nLoudness<br>\nAdvanced Surround Modes<br>\nAction, Drama, Advanc', 'images/new/bar8.jpg', 'ELECTRONICS', 'SOUND BAR', 'ibm'),
(70, 'Redmi Sound Bar ', 'Dolby? trueHD/Dolby Digital Plus/Dolby Pro Logic II<br>\nDTS-HD Master Audio/DTS-HD High Resolution Audio/DTS Neo:6<br>\nDTS-Express/DTS 96/24<br>\nDSD Disc (SACD) Playback via HDMI (2.8 MHz)<br>\nDigital Core Engine with Texas Instruments AureusTM DSP<br>\n192 kHz/24-bit DAC<br>\nHDMI Audio Return Channel (ARC)<br>\nPhase Control<br>\nPioneer Sound Enhancements<br>\nAdvanced Sound Retriever (2ch)<br>\nAuto Level Control (2ch)<br>\nMidnight<br>\nLoudness<br>\nAdvanced Surround Modes<br>\nAction, Drama, Advanc', 'images/new/bar9.jpg', 'ELECTRONICS', 'SOUND BAR', 'ibm'),
(71, 'Realmi Sound Bar ', 'Dolby? trueHD/Dolby Digital Plus/Dolby Pro Logic II<br>\nDTS-HD Master Audio/DTS-HD High Resolution Audio/DTS Neo:6<br>\nDTS-Express/DTS 96/24<br>\nDSD Disc (SACD) Playback via HDMI (2.8 MHz)<br>\nDigital Core Engine with Texas Instruments AureusTM DSP<br>\n192 kHz/24-bit DAC<br>\nHDMI Audio Return Channel (ARC)<br>\nPhase Control<br>\nPioneer Sound Enhancements<br>\nAdvanced Sound Retriever (2ch)<br>\nAuto Level Control (2ch)<br>\nMidnight<br>\nLoudness<br>\nAdvanced Surround Modes<br>\nAction, Drama, Advanc', 'images/new/bar10.jpg', 'ELECTRONICS', 'SOUND BAR', 'ibm'),
(72, 'Sony Home Theatre', 'Dolby? trueHD/Dolby Digital Plus/Dolby Pro Logic II<br>\nDTS-HD Master Audio/DTS-HD High Resolution Audio/DTS Neo:6<br>\nDTS-Express/DTS 96/24<br>\nDSD Disc (SACD) Playback via HDMI (2.8 MHz)<br>\nDigital Core Engine with Texas Instruments AureusTM DSP<br>\n192 kHz/24-bit DAC<br>\nHDMI Audio Return Channel (ARC)<br>\nPhase Control<br>\nPioneer Sound Enhancements<br>\nAdvanced Sound Retriever (2ch)<br>\nAuto Level Control (2ch)<br>\nMidnight<br>\nLoudness<br>\nAdvanced Surround Modes<br>\nAction, Drama, Advanc', 'images/new/theatre1.jpg', 'ELECTRONICS', 'HOME THEATRE', 'ibm'),
(73, 'Intex Home Theatre', 'Dolby? trueHD/Dolby Digital Plus/Dolby Pro Logic II<br>\nDTS-HD Master Audio/DTS-HD High Resolution Audio/DTS Neo:6<br>\nDTS-Express/DTS 96/24<br>\nDSD Disc (SACD) Playback via HDMI (2.8 MHz)<br>\nDigital Core Engine with Texas Instruments AureusTM DSP<br>\n192 kHz/24-bit DAC<br>\nHDMI Audio Return Channel (ARC)<br>\nPhase Control<br>\nPioneer Sound Enhancements<br>\nAdvanced Sound Retriever (2ch)<br>\nAuto Level Control (2ch)<br>\nMidnight<br>\nLoudness<br>\nAdvanced Surround Modes<br>\nAction, Drama, Advanc', 'images/new/theatre2.jpg', 'ELECTRONICS', 'HOME THEATRE', 'ibm'),
(74, 'Philips Home Theatre', 'Dolby? trueHD/Dolby Digital Plus/Dolby Pro Logic II<br>\nDTS-HD Master Audio/DTS-HD High Resolution Audio/DTS Neo:6<br>\nDTS-Express/DTS 96/24<br>\nDSD Disc (SACD) Playback via HDMI (2.8 MHz)<br>\nDigital Core Engine with Texas Instruments AureusTM DSP<br>\n192 kHz/24-bit DAC<br>\nHDMI Audio Return Channel (ARC)<br>\nPhase Control<br>\nPioneer Sound Enhancements<br>\nAdvanced Sound Retriever (2ch)<br>\nAuto Level Control (2ch)<br>\nMidnight<br>\nLoudness<br>\nAdvanced Surround Modes<br>\nAction, Drama, Advanc', 'images/new/theatre3.jpg', 'ELECTRONICS', 'HOME THEATRE', 'ibm'),
(75, 'F&D Home Theatre', 'Dolby? trueHD/Dolby Digital Plus/Dolby Pro Logic II<br>\nDTS-HD Master Audio/DTS-HD High Resolution Audio/DTS Neo:6<br>\nDTS-Express/DTS 96/24<br>\nDSD Disc (SACD) Playback via HDMI (2.8 MHz)<br>\nDigital Core Engine with Texas Instruments AureusTM DSP<br>\n192 kHz/24-bit DAC<br>\nHDMI Audio Return Channel (ARC)<br>\nPhase Control<br>\nPioneer Sound Enhancements<br>\nAdvanced Sound Retriever (2ch)<br>\nAuto Level Control (2ch)<br>\nMidnight<br>\nLoudness<br>\nAdvanced Surround Modes<br>\nAction, Drama, Advanc', 'images/new/theatre4.jpg', 'ELECTRONICS', 'HOME THEATRE', 'ibm'),
(76, 'Zebronics Home Theatre', 'Dolby? trueHD/Dolby Digital Plus/Dolby Pro Logic II<br>\nDTS-HD Master Audio/DTS-HD High Resolution Audio/DTS Neo:6<br>\nDTS-Express/DTS 96/24<br>\nDSD Disc (SACD) Playback via HDMI (2.8 MHz)<br>\nDigital Core Engine with Texas Instruments AureusTM DSP<br>\n192 kHz/24-bit DAC<br>\nHDMI Audio Return Channel (ARC)<br>\nPhase Control<br>\nPioneer Sound Enhancements<br>\nAdvanced Sound Retriever (2ch)<br>\nAuto Level Control (2ch)<br>\nMidnight<br>\nLoudness<br>\nAdvanced Surround Modes<br>\nAction, Drama, Advanc', 'images/new/theatre5.jpg', 'ELECTRONICS', 'HOME THEATRE', 'ibm'),
(77, 'LG Home Theatre', 'Dolby? trueHD/Dolby Digital Plus/Dolby Pro Logic II<br>\nDTS-HD Master Audio/DTS-HD High Resolution Audio/DTS Neo:6<br>\nDTS-Express/DTS 96/24<br>\nDSD Disc (SACD) Playback via HDMI (2.8 MHz)<br>\nDigital Core Engine with Texas Instruments AureusTM DSP<br>\n192 kHz/24-bit DAC<br>\nHDMI Audio Return Channel (ARC)<br>\nPhase Control<br>\nPioneer Sound Enhancements<br>\nAdvanced Sound Retriever (2ch)<br>\nAuto Level Control (2ch)<br>\nMidnight<br>\nLoudness<br>\nAdvanced Surround Modes<br>\nAction, Drama, Advanc', 'images/new/theatre6.jpg', 'ELECTRONICS', 'HOME THEATRE', 'ibm'),
(78, 'Samsung Home Theatre', 'Dolby? trueHD/Dolby Digital Plus/Dolby Pro Logic II<br>\nDTS-HD Master Audio/DTS-HD High Resolution Audio/DTS Neo:6<br>\nDTS-Express/DTS 96/24<br>\nDSD Disc (SACD) Playback via HDMI (2.8 MHz)<br>\nDigital Core Engine with Texas Instruments AureusTM DSP<br>\n192 kHz/24-bit DAC<br>\nHDMI Audio Return Channel (ARC)<br>\nPhase Control<br>\nPioneer Sound Enhancements<br>\nAdvanced Sound Retriever (2ch)<br>\nAuto Level Control (2ch)<br>\nMidnight<br>\nLoudness<br>\nAdvanced Surround Modes<br>\nAction, Drama, Advanc', 'images/new/theatre7.jpg', 'ELECTRONICS', 'HOME THEATRE', 'ibm'),
(79, 'Panasonic Home Theatre', 'Dolby? trueHD/Dolby Digital Plus/Dolby Pro Logic II<br>\nDTS-HD Master Audio/DTS-HD High Resolution Audio/DTS Neo:6<br>\nDTS-Express/DTS 96/24<br>\nDSD Disc (SACD) Playback via HDMI (2.8 MHz)<br>\nDigital Core Engine with Texas Instruments AureusTM DSP<br>\n192 kHz/24-bit DAC<br>\nHDMI Audio Return Channel (ARC)<br>\nPhase Control<br>\nPioneer Sound Enhancements<br>\nAdvanced Sound Retriever (2ch)<br>\nAuto Level Control (2ch)<br>\nMidnight<br>\nLoudness<br>\nAdvanced Surround Modes<br>\nAction, Drama, Advanc', 'images/new/theatre8.jpg', 'ELECTRONICS', 'HOME THEATRE', 'ibm'),
(80, 'Realmi Home Theatre', 'Dolby? trueHD/Dolby Digital Plus/Dolby Pro Logic II<br>\nDTS-HD Master Audio/DTS-HD High Resolution Audio/DTS Neo:6<br>\nDTS-Express/DTS 96/24<br>\nDSD Disc (SACD) Playback via HDMI (2.8 MHz)<br>\nDigital Core Engine with Texas Instruments AureusTM DSP<br>\n192 kHz/24-bit DAC<br>\nHDMI Audio Return Channel (ARC)<br>\nPhase Control<br>\nPioneer Sound Enhancements<br>\nAdvanced Sound Retriever (2ch)<br>\nAuto Level Control (2ch)<br>\nMidnight<br>\nLoudness<br>\nAdvanced Surround Modes<br>\nAction, Drama, Advanc', 'images/new/theatre9.jpg', 'ELECTRONICS', 'HOME THEATRE', 'ibm'),
(81, 'Redmi Home Theatre', 'Dolby? trueHD/Dolby Digital Plus/Dolby Pro Logic II<br>\nDTS-HD Master Audio/DTS-HD High Resolution Audio/DTS Neo:6<br>\nDTS-Express/DTS 96/24<br>\nDSD Disc (SACD) Playback via HDMI (2.8 MHz)<br>\nDigital Core Engine with Texas Instruments AureusTM DSP<br>\n192 kHz/24-bit DAC<br>\nHDMI Audio Return Channel (ARC)<br>\nPhase Control<br>\nPioneer Sound Enhancements<br>\nAdvanced Sound Retriever (2ch)<br>\nAuto Level Control (2ch)<br>\nMidnight<br>\nLoudness<br>\nAdvanced Surround Modes<br>\nAction, Drama, Advanc', 'images/new/theatre10.jpg', 'ELECTRONICS', 'HOME THEATRE', 'ibm'),
(82, 'Everyday 7W LED', 'LED Life: 25,000 BH<br>\nLumen Efficacy: 100 Lm/W<br>\nVoltage Range: 100-320 VAC<br>\nPower Factor: P.F ? 0.95<br>\nSurge Protection: 3.5 KV<br>\nBEE Star Rating & BIS Approved<br>', 'images/new/every7.jpg', 'ELECTRONICS', 'LIGHT', 'ibm'),
(83, 'Everyday 12W LED', 'LED Life: 25,000 BH<br>\nLumen Efficacy: 100 Lm/W<br>\nVoltage Range: 100-320 VAC<br>\nPower Factor: P.F ? 0.95<br>\nSurge Protection: 3.5 KV<br>\nBEE Star Rating & BIS Approved<br>', 'images/new/every12.jpg', 'ELECTRONICS', 'LIGHT', 'ibm'),
(84, 'Syska 7W LED', 'LED Life: 25,000 BH<br>\nLumen Efficacy: 100 Lm/W<br>\nVoltage Range: 100-320 VAC<br>\nPower Factor: P.F ? 0.95<br>\nSurge Protection: 3.5 KV<br>\nBEE Star Rating & BIS Approved<br>', 'images/new/syska7.jpg', 'ELECTRONICS', 'LIGHT', 'ibm'),
(86, 'Philips 7W LED', 'LED Life: 25,000 BH<br>\nLumen Efficacy: 100 Lm/W<br>\nVoltage Range: 100-320 VAC<br>\nPower Factor: P.F ? 0.95<br>\nSurge Protection: 3.5 KV<br>\nBEE Star Rating & BIS Approved<br>', 'images/new/philips7.jpg', 'ELECTRONICS', 'LIGHT', 'jango'),
(87, 'Strip Light 5M', 'LED Life: 25,000 BH<br>\nLumen Efficacy: 100 Lm/W<br>\nVoltage Range: 100-320 VAC<br>\nPower Factor: P.F ? 0.95<br>\nSurge Protection: 3.5 KV<br>\nBEE Star Rating & BIS Approved<br>', 'images/new/strip.jpg', 'ELECTRONICS', 'LIGHT', 'jango'),
(88, 'Spot Light 30W', 'LED Life: 25,000 BH<br>\nLumen Efficacy: 100 Lm/W<br>\nVoltage Range: 100-320 VAC<br>\nPower Factor: P.F ? 0.95<br>\nSurge Protection: 3.5 KV<br>\nBEE Star Rating & BIS Approved<br>', 'images/new/spot.jpg', 'ELECTRONICS', 'LIGHT', 'jango'),
(89, 'LED Tube Light 10W', 'LED Life: 25,000 BH<br>\nLumen Efficacy: 100 Lm/W<br>\nVoltage Range: 100-320 VAC<br>\nPower Factor: P.F ? 0.95<br>\nSurge Protection: 3.5 KV<br>\nBEE Star Rating & BIS Approved<br>', 'images/new/led.jpg', 'ELECTRONICS', 'LIGHT', 'jango'),
(90, 'CFL Light', 'LED Life: 25,000 BH<br>\nLumen Efficacy: 100 Lm/W<br>\nVoltage Range: 100-320 VAC<br>\nPower Factor: P.F ? 0.95<br>\nSurge Protection: 3.5 KV<br>\nBEE Star Rating & BIS Approved<br>', 'images/new/cfl.jpg', 'ELECTRONICS', 'LIGHT', 'jango'),
(91, 'Filament Bulb', 'LED Life: 25,000 BH<br>\nLumen Efficacy: 100 Lm/W<br>\nVoltage Range: 100-320 VAC<br>\nPower Factor: P.F ? 0.95<br>\nSurge Protection: 3.5 KV<br>\nBEE Star Rating & BIS Approved<br>', 'images/new/filam.jpg', 'ELECTRONICS', 'LIGHT', 'jango'),
(92, 'Parachute Hair Oil 100ML', 'Brand    Parachute<br>\nModel Name    Pure Coconut<br>\nQuantity    100ML L<br>\nIdeal For    Men & Women<br>\nApplied For    Hair Growth, Hair Strengthening<br>\nOrganic    No<br>\nType    Coconut Oil<br>\nHair Type    All Hair Types<br>\nMaximum Shelf Life    18 Months<br>', 'images/new/para10.jpg', 'BEAUTY', 'HAIR OIL', 'jango'),
(93, 'Parachute Hair Oil 500ML', 'Brand    Parachute<br>\nModel Name    Pure Coconut<br>\nQuantity    500ML <br>\nIdeal For    Men & Women<br>\nApplied For    Hair Growth, Hair Strengthening<br>\nOrganic    No<br>\nType    Coconut Oil<br>\nHair Type    All Hair Types<br>\nMaximum Shelf Life    18 Months<br>', 'images/new/para20.jpg', 'BEAUTY', 'HAIR OIL', 'jango'),
(94, 'Parachute Hair Oil 1000ML', 'Brand    Parachute<br>\nModel Name    Pure Coconut<br>\nQuantity    1L <br>\nIdeal For    Men & Women<br>\nApplied For    Hair Growth, Hair Strengthening<br>\nOrganic    No<br>\nType    Coconut Oil<br>\nHair Type    All Hair Types<br>\nMaximum Shelf Life    18 Months<br>', 'images/new/para1.jpg', 'BEAUTY', 'HAIR OIL', 'jango'),
(95, 'Parachute Jasmine Hair Oil 200ML', 'Brand    Parachute<br>\nModel Name    Jasmine OIL<br>\nQuantity    200ML <br>\nIdeal For    Men & Women<br>\nApplied For    Hair Growth, Hair Strengthening<br>\nOrganic    No<br>\nType    Coconut Oil<br>\nHair Type    All Hair Types<br>\nMaximum Shelf Life    18 Months<br>', 'images/new/jas2.jpg', 'BEAUTY', 'HAIR OIL', 'jango'),
(96, 'Parachute Jasmine Hair Oil 500ML', 'Brand    Parachute<br>\nModel Name    Jasmine OIL<br>\nQuantity    500ML <br>\nIdeal For    Men & Women<br>\nApplied For    Hair Growth, Hair Strengthening<br>\nOrganic    No<br>\nType    Coconut Oil<br>\nHair Type    All Hair Types<br>\nMaximum Shelf Life    18 Months<br>', 'images/new/jas1.jpg', 'BEAUTY', 'HAIR OIL', 'jango'),
(97, 'Nihar Shanti Hair Oil 200ML', 'Brand    Nihar Shanti <br>\nModel Name    Pure Coconut<br>\nQuantity    200mL <br>\nIdeal For    Men & Women<br>\nApplied For    Hair Growth, Hair Strengthening<br>\nOrganic    No<br>\nType    Coconut Oil<br>\nHair Type    All Hair Types<br>\nMaximum Shelf Life    18 Months<br>', 'images/new/nihar1.jpg', 'BEAUTY', 'HAIR OIL', 'jango'),
(98, 'Nihar Shanti Hair Oil 500ML', 'Brand    Nihar Shanti <br>\nModel Name    Pure Coconut<br>\nQuantity    500mL <br>\nIdeal For    Men & Women<br>\nApplied For    Hair Growth, Hair Strengthening<br>\nOrganic    No<br>\nType    Coconut Oil<br>\nHair Type    All Hair Types<br>\nMaximum Shelf Life    18 Months<br>', 'images/new/nihar2.jpg', 'BEAUTY', 'HAIR OIL', 'jango'),
(99, 'Dabur Amla Hair Oil 100ML', 'Brand    Dabur<br>\nModel Name    Pure Amla hair oil<br>\nQuantity    100mL <br>\nIdeal For    Men & Women<br>\nApplied For    Hair Growth, Hair Strengthening<br>\nOrganic    No<br>\nType    Coconut Oil<br>\nHair Type    All Hair Types<br>\nMaximum Shelf Life    18 Months<br>', 'images/new/amla1.jpg', 'BEAUTY', 'HAIR OIL', 'jango'),
(100, 'Dabur Amla Hair Oil 500ML', 'Brand    Dabur<br>\nModel Name    Pure Amla hair oil<br>Quantity    500mL <br>\nIdeal For    Men & Women<br>\nApplied For    Hair Growth, Hair Strengthening<br>\nOrganic    No<br>\nType    Coconut Oil<br>\nHair Type    All Hair Types<br>\nMaximum Shelf Life    18 Months<br>', 'images/new/amla2.jpg', 'BEAUTY', 'HAIR OIL', 'jango'),
(101, 'Bajaj Almond Oil 500ML', 'Brand    Bajaj<br>\nModel Name    Almond Oil<br>\nQuantity    500mL <br>\nIdeal For    Men & Women<br>\nApplied For    Hair Growth, Hair Strengthening<br>\nOrganic    No<br>\nType    Coconut Oil<br>\nHair Type    All Hair Types<br>\nMaximum Shelf Life    18 Months<br>', 'images/new/bajaj.jpg', 'BEAUTY', 'HAIR OIL', 'jango'),
(102, 'Himalaya neem Face Wash', 'Pack of    1<br>\nBrand    Himalaya<br>\nQuantity    7100ml<br>\nIdeal For    Men & Women<br>\nFace Wash Type    Gel<br>\nIngredient Type    Natural<br>\nMaximum Shelf Life    24 Months<br>\nSkin Type    All Skin Types<br>\nContainer Type    Tube<br>\n', 'images/new/hima1.jpg', 'BEAUTY', 'FACE WASH', 'jango'),
(103, 'Lakme Face Wash 100GM', 'Pack of    1<br>\nBrand    lakme<br>\nQuantity    100 ml<br>\nIdeal For    Men & Women<br>\nFace Wash Type    Gel<br>\nIngredient Type    Natural<br>\nMaximum Shelf Life    24 Months<br>\nSkin Type    All Skin Types<br>\nContainer Type    Tube<br>\n', 'images/new/lak1.jpg', 'BEAUTY', 'FACE WASH', 'jango'),
(104, 'Lakme Face Wash 200GM', 'Pack of    1<br>\nBrand    LAKME<br>\nQuantity    200ml<br>\nIdeal For    Men & Women<br>\nFace Wash Type    Gel<br>\nIngredient Type    Natural<br>\nMaximum Shelf Life    24 Months<br>\nSkin Type    All Skin Types<br>\nContainer Type    Tube<br>\n', 'images/new/lak2.jpg', 'BEAUTY', 'FACE WASH', 'jango'),
(105, 'Pond Face Wash 100ML', 'Pack of    1<br>\nBrand    Ponds<br>\nQuantity    100 ml<br>\nIdeal For    Men & Women<br>\nFace Wash Type    Gel<br>\nIngredient Type    Natural<br>\nMaximum Shelf Life    24 Months<br>\nSkin Type    All Skin Types<br>\nContainer Type    Tube<br>\n', 'images/new/pond1.jpg', 'BEAUTY', 'FACE WASH', 'jango'),
(106, 'Pond Face Wash 200ML', 'Pack of    1<br>\nBrand   Ponds<br>\nQuantity    200 ml<br>\nIdeal For    Men & Women<br>\nFace Wash Type    Gel<br>\nIngredient Type    Natural<br>\nMaximum Shelf Life    24 Months<br>\nSkin Type    All Skin Types<br>\nContainer Type    Tube<br>\n', 'images/new/pond2.jpg', 'BEAUTY', 'FACE WASH', 'jango'),
(107, 'Garnier Face Wash ', 'Pack of    1<br>\nBrand    Garnier<br>\nQuantity    75 ml<br>\nIdeal For    Men & Women<br>\nFace Wash Type    Gel<br>\nIngredient Type    Natural<br>\nMaximum Shelf Life    24 Months<br>\nSkin Type    All Skin Types<br>\nContainer Type    Tube<br>\n', 'images/new/garn1.jpg', 'BEAUTY', 'FACE WASH', 'jango'),
(108, 'Himalaya Mens Face Wash', 'Pack of    1<br>\nBrand    Himalaya<br>\nQuantity    75 ml<br>\nIdeal For    Men <br>\nFace Wash Type    Gel<br>\nIngredient Type    Natural<br>\nMaximum Shelf Life    24 Months<br>\nSkin Type    All Skin Types<br>\nContainer Type    Tube<br>\n', 'images/new/hima2.jpg', 'BEAUTY', 'FACE WASH', 'jango'),
(109, 'Harp And Bliss Face Wash', 'Pack of    1<br>\nBrand   Harp and bliss<br>\nQuantity    200 ml<br>\nIdeal For    Men & Women<br>\nFace Wash Type    Gel<br>\nIngredient Type    Natural<br>\nMaximum Shelf Life    24 Months<br>\nSkin Type    All Skin Types<br>\nContainer Type    Tube<br>\n', 'images/new/harp.jpg', 'BEAUTY', 'FACE WASH', 'jango'),
(110, 'Aroma Face Wash 100GM', 'Pack of    1<br>\nBrand    Aroma<br>\nQuantity    100 ml<br>\nIdeal For    Men & Women<br>\nFace Wash Type    Gel<br>\nIngredient Type    Natural<br>\nMaximum Shelf Life    24 Months<br>\nSkin Type    All Skin Types<br>\nContainer Type    Tube<br>\n', 'images/new/aroma.jpg', 'BEAUTY', 'FACE WASH', 'jango'),
(111, 'Aroma Face Wash 200GM', 'Pack of    1<br>\nBrand    Aroma<br>\nQuantity    200 ml<br>\nIdeal For    Men & Women<br>\nFace Wash Type    Gel<br>\nIngredient Type    Natural<br>\nMaximum Shelf Life    24 Months<br>\nSkin Type    All Skin Types<br>\nContainer Type    Tube<br>\n', 'images/new/aroma2.jpg', 'BEAUTY', 'FACE WASH', 'jango'),
(112, 'Kalp Face Wash', 'Pack of    1<br>\nBrand    kalp<br>\nQuantity    175 ml<br>\nIdeal For    Men & Women<br>\nFace Wash Type    Gel<br>\nIngredient Type    Natural<br>\nMaximum Shelf Life    24 Months<br>\nSkin Type    All Skin Types<br>\nContainer Type    Tube<br>\n', 'images/new/kalp.jpg', 'BEAUTY', 'FACE WASH', 'jango'),
(113, 'Loreal Lipstick', 'Form    Liquid<br>\nSkin Type    All Skin Types<br>\nSkin Tone    Medium<br>\nFinish    Matte<br>\nDuration    5-8 hrs<br>\nColor    Nude<br>', 'images/new/loreal.jpg', 'BEAUTY', 'LIPSTICK', 'jango'),
(114, 'Urban Decay Lipstick', 'Form    Liquid<br>\nSkin Type    All Skin Types<br>\nSkin Tone    Medium<br>\nFinish    Matte<br>\nDuration    5-8 hrs<br>\nColor    Nude<br>', 'images/new/urban.jpg', 'BEAUTY', 'LIPSTICK', 'jango'),
(115, 'MAC Cosmetics Lipstick', 'Form    Liquid<br>\nSkin Type    All Skin Types<br>\nSkin Tone    Medium<br>\nFinish    Matte<br>\nDuration    5-8 hrs<br>\nColor    Nude<br>', 'images/new/mac.jpg', 'BEAUTY', 'LIPSTICK', 'jango'),
(116, 'CoverGirl Lipstick', 'Form    Liquid<br>\nSkin Type    All Skin Types<br>\nSkin Tone    Medium<br>\nFinish    Matte<br>\nDuration    5-8 hrs<br>\nColor    Nude<br>', 'images/new/lip1.jpg', 'BEAUTY', 'LIPSTICK', 'jango'),
(117, 'Too faced Lipstick', 'Form    Liquid<br>\nSkin Type    All Skin Types<br>\nSkin Tone    Medium<br>\nFinish    Matte<br>\nDuration    5-8 hrs<br>\nColor    Nude<br>', 'images/new/lip2.jpg', 'BEAUTY', 'LIPSTICK', 'jango'),
(118, 'Fenty Beauty Lipstick', 'Form    Liquid<br>\nSkin Type    All Skin Types<br>\nSkin Tone    Medium<br>\nFinish    Matte<br>\nDuration    5-8 hrs<br>\nColor    Nude<br>', 'images/new/lip3.jpg', 'BEAUTY', 'LIPSTICK', 'jango'),
(119, 'Bobbi Brown Lipstick', 'Form    Liquid<br>\nSkin Type    All Skin Types<br>\nSkin Tone    Medium<br>\nFinish    Matte<br>\nDuration    5-8 hrs<br>\nColor    Nude<br>', 'images/new/lip4.jpg', 'BEAUTY', 'LIPSTICK', 'jango'),
(120, 'Lakme Eyeliner', 'Non Organic Eyeliner<br>\nWaterproof<br>\nLiquid<br>\nTip Type: Brush<br>', 'images/new/eye1.jpg', 'BEAUTY', 'EYELINER', 'jango'),
(121, 'Colorbar Eyeliner', 'Non Organic Eyeliner<br>\nWaterproof<br>\nLiquid<br>\nTip Type: Brush<br>', 'images/new/eye2.jpg', 'BEAUTY', 'EYELINER', 'jango'),
(122, 'L\'Oreal Eyeliner', 'Non Organic Eyeliner<br>\nWaterproof<br>\nLiquid<br>\nTip Type: Brush<br>', 'images/new/eye3.jpg', 'BEAUTY', 'EYELINER', 'jango'),
(123, 'Revlon Eyeliner', 'Non Organic Eyeliner<br>\nWaterproof<br>\nLiquid<br>\nTip Type: Brush<br>', 'images/new/eye4.jpg', 'BEAUTY', 'EYELINER', 'jango'),
(124, 'MAC Eyeliner', 'Non Organic Eyeliner<br>\nWaterproof<br>\nLiquid<br>\nTip Type: Brush<br>', 'images/new/eye5.jpg', 'BEAUTY', 'EYELINER', 'jango'),
(125, 'Bobbi Brown Eyeliner', 'Non Organic Eyeliner<br>\nWaterproof<br>\nLiquid<br>\nTip Type: Brush<br>', 'images/new/eye6.jpg', 'BEAUTY', 'EYELINER', 'jango'),
(126, 'Faces Eyeliner', 'Non Organic Eyeliner<br>\nWaterproof<br>\nLiquid<br>\nTip Type: Brush<br>', 'images/new/eye7.jpg', 'BEAUTY', 'EYELINER', 'jango'),
(127, 'Sun umbrella', 'For Girls<br>\nSize: 62 inch<br>\nColor: Multicolor<br>', 'images/new/umb1.jpg', 'Accessories', 'UMBRELLA', 'jango'),
(128, 'Citizen umbrella', 'For Men<br>\r\nSize: 25 inch<br>\r\nFoldable<br>\r\nColor: Black<br>\r\n', 'images/new/umb2.jpg', 'Accessories', 'UMBRELLA', 'jango'),
(129, 'Popy  umbrella', 'For Men, Women, Boys, Girls<br>\r\nSize: 21 inch<br>\r\nFoldable<br>\r\nColor: Bronze<br>', 'images/new/umb3.jpg', 'Accessories', 'UMBRELLA', 'jango'),
(130, 'Jyoti umbrella', 'For Boys, Girls, Men, Women<br>\r\nSize: 13 inch<br>\r\nFoldable<br>\r\nColor: Multicolor<br>', 'images/new/umb4.jpg', 'Accessories', 'UMBRELLA', 'jango'),
(131, 'Amazon Basics umbrella', 'For Men, Women<br>\r\nSize: 21 inch<br>\r\nFoldable<br>\r\nColor: Blue<br>', 'images/new/umb5.jpg', 'Accessories', 'UMBRELLA', 'jango'),
(132, 'Asian umbrella', 'Ideal For: Boys and Girls<br>\r\nAge: 5+ Years<br>', 'images/new/umb6.jpg', 'Accessories', 'UMBRELLA', 'jango'),
(133, 'sagar umbrella', 'For Boys, Men, Girls, Women<br>\nSize: 25 inch<br>\nFoldable<br>\nColor: Multicolor<br>', 'images/new/umb7.jpg', 'Accessories', 'UMBRELLA', 'jango'),
(134, 'John\'s umbrella', 'For NA<br>\nSize: 21 inch<br>\nFoldable<br>', 'images/new/umb8.jpg', 'Accessories', 'UMBRELLA', 'jango'),
(135, 'Tablet umbrella', 'For Boys<br>\r\nSize: 4 inch<br>\r\nColor: Maroon<br>', 'images/new/umb9.jpg', 'Accessories', 'UMBRELLA', 'jango'),
(136, 'Eseries umbrella', 'Size: 21 inch<br>\r\nFoldable<br>\r\nColor: Violet<br>', 'images/new/umb10.jpg', 'Accessories', 'UMBRELLA', 'jango'),
(137, 'Burberry umbrella', 'Size: 25 inch<br>\r\nFoldable<br>\r\nColor: Multicolor<br>', 'images/new/umb11.jpg', 'Accessories', 'UMBRELLA', 'jango'),
(138, 'Dell Laptop', 'Stylish & Portable Thin and Light Laptop<br>15.6 Inch FHD<br> WVA AG Narrow Border<br>Light Laptop without Optical Disk Drive<br>', 'images/new/lap1.jpg', 'DIGITAL', 'Laptop', 'jango'),
(139, 'Lenovo Ideapad laptop', 'Stylish & Portable Thin and Light Laptop<br>\r\n15.6 inch Full HD LED Backlit Anti-glare IPS Display <br>\r\nLight Laptop without Optical Disk Drive<br>', 'images/new/lap2.jpg', 'Digital', 'Laptop', 'jango'),
(140, 'HD LAPTOP', '15.6 inch Full HD high-brightness Acer <br>Finger Print Sensor for Faster System Access<br>Light Laptop without Optical Disk Drive<br>Stylish & Portable Thin and Light Laptop', 'images/new/lap3.jpg', 'Digital', 'Laptop', 'jango'),
(141, 'FASTTRACK watch', 'This is a genuine Fastrack product. <br> The product comes with a standard<br>manufacturer warranty for 6 Months.<br>', 'images/new/watch.jpg', 'Digital', 'watch', 'jango'),
(142, 'Dasani water bottle', 'Made of: PET<br> Bottle Type: Bottle<br> Capacity: 1000 ml<br> Pack of: 6<br>', 'images/new/bottle2.jpg', 'ACCESSORIES', 'bottle', 'jango'),
(143, 'Nestle water bottle', 'Made of: PET<br> Bottle Type: Bottle<br> Capacity: 1000 ml<br> Pack of: 6<br>', 'images/new/bottle3.jpg', 'ACCESSORIES', 'bottle', 'jango'),
(144, 'Danone water bottle', 'Made of: PET<br> Bottle Type: Bottle<br> Capacity: 1000 ml<br> Pack of: 6<br>', 'images/new/bottle4.jpg', 'ACCESSORIES', 'bottle', 'jango'),
(145, 'Glaceau Smartwater bottle', 'Made of: PET<br> Bottle Type: Bottle<br> Capacity: 1000 ml<br> Pack of: 6<br>', 'images/new/bottle5.jpg', 'ACCESSORIES', 'bottle', 'jango'),
(146, 'Poland spring water bottle', 'Made of: PET<br> Bottle Type: Bottle<br> Capacity: 1000 ml<br> Pack of: 6<br>', 'images/new/bottle5.jpg', 'ACCESSORIES', 'bottle', 'jango'),
(147, 'fiji water bottle', 'Made of: PET<br> Bottle Type: Bottle<br> Capacity: 1000 ml<br> Pack of: 6<br>', 'images/new/bottle6.jpg', 'ACCESSORIES', 'bottle', 'jango'),
(148, 'Ozarka water bottle', 'Made of: PET<br> Bottle Type: Bottle<br> Capacity: 1000 ml<br> Pack of: 6<br>', 'images/new/bottle7.jpg', 'ACCESSORIES', 'bottle', 'jango'),
(149, 'perrier water bottle', 'Made of: PET<br> Bottle Type: Bottle<br> Capacity: 1000 ml<br> Pack of: 6<br>', 'images/new/bottle8.jpg', 'ACCESSORIES', 'bottle', 'jango');
INSERT INTO `product_tbl` (`pro_id`, `name`, `description`, `image`, `catagory`, `subcatagory`, `company_username`) VALUES
(150, 'Evian water bottle', 'Made of: PET<br> Bottle Type: Bottle<br> Capacity: 1000 ml<br> Pack of: 6<br>', 'images/new/bottle9.jpg', 'ACCESSORIES', 'bottle', 'jango'),
(151, 'NanoNine SS Lunch Box.', 'Lunch Box Material: Stainless Steel<br>\nIdeal Usage: School, Office, College<br>\nCapacity: 180 ml<br>\nNumber of Containers: 1<br>', 'images/new/box1.jpg', 'ACCESSORIES', 'lunch box', 'jango'),
(152, 'Home Puff Lunch Box', 'Lunch Box Material: glass<br>\nIdeal Usage: School, Office, College<br>\nCapacity: 1600 ml<br>\nNumber of Containers: 4<br>', 'images/new/box2.jpg', 'ACCESSORIES', 'lunch box', 'jango'),
(153, 'Allo Food safe Glass Lunch Box', 'Lunch Box Material: Glass<br>\nIdeal Usage: Office, School, College<br>\nThermoware<br>\nCapacity: 580 ml<br>\nNumber of Containers: 1<br>', 'images/new/box3.jpg', 'ACCESSORIES', 'lunch box', 'jango'),
(154, 'Oliveware Teso Lunch Box', 'Lunch Box Material: Glass<br> Ideal Usage: Office, School, College<br> Thermoware<br> Capacity: 580 ml<br> Number of Containers: 4<br>', 'images/new/box4.jpg', 'ACCESSORIES', 'lunch box', 'jango'),
(155, 'Milton Lunch Box', 'Lunch Box Material: Plastic<br> Ideal Usage: College, Office, School<br> Capacity: 280 ml<br> Number of Containers: 3<br>', 'images/new/box5.jpg', 'ACCESSORIES', 'lunch box', 'jango'),
(156, 'Signoraware Steel Lunch Box', 'Lunch Box Material: stainless steel<br>\nIdeal Usage: College, Office, School<br>\nCapacity: 280 ml<br>\nNumber of Containers: 2<br>', 'images/new/box6.jpg', 'ACCESSORIES', 'lunch box', 'jango'),
(157, 'Tupperware lunch box', 'Lunch Box Material: plastic<br>\nIdeal Usage: College, Office, School<br>\nCapacity: 280 ml<br>Number of Containers: 2<br>', 'images/new/box7.jpg', 'ACCESSORIES', 'lunch box', 'jango'),
(158, 'cello lunch box', 'Lunch Box Material: plastic<br> Ideal Usage: Office, School, College<br> Thermoware<br> Capacity: 580 ml<br> Number of Containers: 2<br', 'images/new/box8.jpg', 'ACCESSORIES', 'lunch box', 'jango'),
(159, 'vaya lunch box', 'Lunch Box Material: stainless steel<br> Ideal Usage: Office, School, College<br> Thermoware<br> Capacity: 580 ml<br> Number of Containers: 1<br>', 'images/new/box9.jpg', 'ACCESSORIES', 'lunch box', 'jango'),
(160, 'American Tourister bag', '', 'images/new/bag10 .jpg', 'ACCESSORIES', 'BAG', 'jango'),
(161, 'Safari BAG', 'two year warranty<br>multicolor<br>', 'images/new/bag1.jpg', 'ACCESSORIES', 'BAG', 'jango'),
(162, 'Wildcraft bag', 'two year warranty<br>multicolor<br>', 'images/new/bag2.jpg', 'ACCESSORIES', 'BAG', 'jango'),
(163, 'VIP bag', 'two year warranty<br>multicolor<br>', 'images/new/bag3.jpg', 'ACCESSORIES', 'BAG', 'jango'),
(164, 'Skybags', 'two year warranty<br>multicolor<br>', 'images/new/bag4.jpg', 'ACCESSORIES', 'BAG', 'jango'),
(165, 'Samsonite bags', 'two year warranty<br>multicolor<br>', 'images/new/bag5.jpg', 'ACCESSORIES', 'BAG', 'jango'),
(166, 'Dussle Dorf Bags', 'two year warranty<br>multicolor<br>', 'images/new/bag9.jpg', 'ACCESSORIES', 'BAG', 'jango'),
(167, 'Aristocrat bags', 'two year warranty<br>multicolor<br>', 'images/new/bag6.jpg', 'ACCESSORIES', 'BAG', 'jango'),
(168, 'Delsey bags', 'two year warranty<br>multicolor<br>', 'images/new/bag7.jpg', 'ACCESSORIES', 'BAG', 'jango'),
(169, 'carlton bags', 'two year warranty<br>multicolor<br>', 'images/new/bag8.jpg', 'ACCESSORIES', 'BAG', 'jango'),
(170, 'Hawkings SS pressure cooker', 'Made of: Stainless Steel<br>\r\nPack of: 1<br>\r\nWith Induction Bottom<br>\r\nCapacity: 5 L<br>\r\nLid Type: Inner Lid<br>', 'images/new/COOKER 7.jpg', 'ACCESSORIES', 'COOKER', 'jango'),
(171, 'Prestige pressure cooker', 'Made of: Aluminium<br>\r\nPack of: 1<br>\r\nCapacity: 5 L, 3 L<br>\r\nLid Type: Outer Lid<br>', 'images/new/COOKER 6.jpg', 'ACCESSORIES', 'COOKER', 'jango'),
(172, 'Butterfly pressure cooker 3L', 'Made of: Aluminium<br>\r\nPack of: 1<br>\r\nCapacity: 3 L<br>\r\nLid Type: Outer Lid<br>', 'images/new/COOKER 1.jpg', 'ACCESSORIES', 'COOKER', 'jango'),
(173, 'Pigeon alum pressure cooker', 'Made of: Hard Anodized<br>\r\nPack of: 3<br>\r\nWith Induction Bottom<br>\r\nCapacity: 2 L, 3 L, 5 L<br>\r\nLid Type: Outer Lid<br>', 'images/new/COOKER 5.jpg', 'ACCESSORIES', 'COOKER', 'jango'),
(174, 'Hawkings pressure cooker', 'Made of: Aluminium<br>\r\nPack of: 1<br>\r\nCapacity: 5 L<br>\r\nLid Type: Inner Lid<br>', 'images/new/COOKER 2.jpg', 'ACCESSORIES', 'COOKER', 'jango'),
(175, 'Pigeon SS pressure cooker', 'Made of: Aluminium<br>\r\nPack of: 1<br>\r\nCapacity: 3 L<br>\r\nLid Type: Outer Lid<br>', 'images/new/COOKER 3.jpg', 'ACCESSORIES', 'COOKER', 'jango'),
(176, 'Pegion pressure cooker', 'Made of: Hard Anodized, Aluminium<br>\r\nPack of: 2<br>\r\nCapacity: 3 L, 2 L<br>\r\nLid Type: Inner Lid<br>', 'images/new/COOKER 4.jpg', 'ACCESSORIES', 'COOKER', 'jango'),
(177, 'Sonata watch', 'For Men<br>one year warranty<br>multicolor<br>', 'images/new/watch10.jpg', 'DIGITAL', 'WATCH', 'jango'),
(178, 'Fastrack watch', 'for Men<br>1 year warranty<br>multicolor<br>', 'images/new/watch8.jpg', 'DIGITAL', 'WATCH', 'jango'),
(179, 'Tommy Hilfiger watch', 'for Men<br>two year warranty<br>multicolor<br>', 'images/new/watch7.jpg', 'DIGITAL', 'WATCH', 'jango'),
(180, 'Timex watch', 'for Men<br>1 year warranty<br>multicolor<br>', 'images/new/watch6.jpg', 'DIGITAL', 'WATCH', 'jango'),
(181, 'Titan watch', 'for Men<br>two year warranty<br>multicolor<br>', 'images/new/watch5.jpg', 'DIGITAL', 'WATCH', 'jango'),
(182, 'MI watch', 'for Men<br>1 year warranty<br>multicolor<br>', 'images/new/watch4.jpg', 'DIGITAL', 'WATCH', 'jango'),
(183, 'Fossil watch', 'for Men<br>two year warranty<br>multicolor<br>', 'images/new/watch3.jpg', 'DIGITAL', 'WATCH', 'jango'),
(184, 'samsung ', 'for Men<br>two year warranty<br>multicolor<br>', 'images/new/watch2.jpg', 'DIGITAL', 'WATCH', 'jango'),
(185, 'apple', 'for Men<br>two year warranty<br>multicolor<br>', 'images/new/watch1.jpg', 'DIGITAL', 'WATCH', 'jango'),
(186, 'Samsung washing machine', '680 rpm : Higher the spin speed, lower the drying time<br>\n3 Star Rating<br>\n6.5 kg<br>', 'images/new/washing machine1.jpg', 'ELECTRONICS', 'WASHING MACHINE', 'jango'),
(187, 'whirlpool washing machine', '740 rpm : Higher the spin speed, lower the drying time<br>\nNumber of wash programs - 12<br>\n5 Star Rating<br>\n6 kg<br>', 'images/new/washing machine2.jpg', 'ELECTRONICS', 'WASHING MACHINE', 'jango'),
(188, 'MarQ washing machine', 'Semi Automatic Top Load<br>\n1350 RPM : Higher the spin speed, lower the drying time<br>\nNumber of wash programs - 2<br>\n5 Star Rating<br>\n6 kg<br.', 'images/new/washing machine3.jpg', 'ELECTRONICS', 'WASHING MACHINE', 'jango'),
(189, 'Croma washing machine', 'Semi Automatic Top Load<br>\n1400 rpm : Higher the spin speed, lower the drying time<br>\nNumber of wash programs - 2<br>\n5 Star Rating<br>\n6.5 kg<br>', 'images/new/washing machine4.jpg', 'ELECTRONICS', 'WASHING MACHINE', 'jango'),
(190, 'Haier washing machine', '800 rpm : Higher the spin speed, lower the drying time<br>\nNumber of wash programs - 8<br>\n5 Star Rating<br>\n6.5 kg<br>', 'images/new/washing machine5.jpg', 'ELECTRONICS', 'WASHING MACHINE', 'parle'),
(191, 'Panasonic washing machine', 'Semi Automatic Top Load<br>\n1350 rpm : Higher the spin speed, lower the drying time<br>\n5 Star Rating<br>\n7 kg<br>', 'images/new/washing machine6.jpg', 'ELECTRONICS', 'WASHING MACHINE', 'parle'),
(192, 'Realme washing machine', 'Semi Automatic Top Load<br>\n1400 RPM : Higher the spin speed, lower the drying time<br>\nNumber of wash programs - 2<br>\n5 Star Rating<br>\n7 kg<br>', 'images/new/washing machine7.jpg', 'ELECTRONICS', 'WASHING MACHINE', 'parle'),
(193, 'LG washing machine', '700 rpm : Higher the spin speed, lower the drying time<br>\n5 Star Rating<br>\n7 kg<br>', 'images/new/washing machine8.jpg', 'ELECTRONICS', 'WASHING MACHINE', 'parle'),
(194, 'ONIDA washing machine', '780 rpm : Higher the spin speed, lower the drying time<br>\r\nNumber of wash programs - 2 <br>\r\n6.5 kg<br>', 'images/new/washing machine9.jpg', 'ELECTRONICS', 'WASHING MACHINE', 'parle'),
(195, 'CANDY Star washing machine', '800 rpm : Higher the spin speed, lower the drying time\r\n6.5 kg', 'images/new/washing machine10.jpg', 'ELECTRONICS', 'WASHING MACHINE', 'parle'),
(196, 'IFB washing machine', '1000 rpm : Higher the spin speed, lower the drying time\nNumber of wash programs - 11\n5 Star Rating\n6.5 kg', 'images/new/washing machine11.jpg', 'ELECTRONICS', 'WASHING MACHINE', 'parle'),
(197, 'Mac Book Air', 'Stylish & Portable Thin and Light Laptop<br>15.6 Inch FHD<br> WVA AG Narrow Border<br>Light Laptop without Optical Disk Drive<br>', 'images/new/laptop6.jpg', 'DIGITAL', 'LAPTOP', 'parle'),
(198, 'Asus Laptop ', 'Stylish & Portable Thin and Light Laptop<br>15.6 Inch FHD<br> WVA AG Narrow Border<br>Light Laptop without Optical Disk Drive<br>', 'images/new/laptop5.jpg', 'DIGITAL', 'LAPTOP', 'parle'),
(199, 'Predator i5 Laptop', 'Stylish & Portable Thin and Light Laptop<br>15.6 Inch FHD<br> WVA AG Narrow Border<br>Light Laptop without Optical Disk Drive<br>', 'images/new/laptop4.jpg', 'DIGITAL', 'LAPTOP', 'parle'),
(200, 'Mi Laptop', 'Stylish & Portable Thin and Light Laptop<br>15.6 Inch FHD<br> WVA AG Narrow Border<br>Light Laptop without Optical Disk Drive<br>', 'images/new/laptop3.jpg', 'DIGITAL', 'LAPTOP', 'parle'),
(201, 'Realmi Laptop', 'Stylish & Portable Thin and Light Laptop<br>15.6 Inch FHD<br> WVA AG Narrow Border<br>Light Laptop without Optical Disk Drive<br>', 'images/new/laptop2.jpg', 'DIGITAL', 'LAPTOP', 'parle'),
(202, 'Honor Laptop', 'Stylish & Portable Thin and Light Laptop<br>15.6 Inch FHD<br> WVA AG Narrow Border<br>Light Laptop without Optical Disk Drive<br>', 'images/new/laptop1.jpg', 'DIGITAL', 'LAPTOP', 'parle'),
(203, 'Asus Desktop', 'Windows 10 Home<br>\nIntel Core i5<br>\nHDD Capacity 500 GB<br>\nRAM 8 GB DDR3<br>\n18.5 inch Display<br>', 'images/new/desk1.jpg', 'DIGITAL', 'DESKTOP', 'parle'),
(204, 'Mac Desktop', 'MAC OS<br>\n15 bionic<br>\nHDD Capacity 500 GB<br>\nRAM 8 GB DDR3<br>\n18.5 inch Display<br>', 'images/new/desk2.jpg', 'DIGITAL', 'DESKTOP', 'parle'),
(205, 'Dell Desktop', 'Windows 10 Home<br>\nIntel Core i5<br>\nHDD Capacity 500 GB<br>\n18.5 inch Display<br>', 'images/new/desk3.jpg', 'DIGITAL', 'DESKTOP', 'parle'),
(206, 'Lenova Desktop', 'Windows 10 Home<br>\nIntel Core i5<br>\nHDD Capacity 500 GB<br>\nRAM 8 GB DDR3<br>\n18.5 inch Display<br>', 'images/new/desk4.jpg', 'DIGITAL', 'DESKTOP', 'parle'),
(207, 'Hp Desktop', 'Windows 10 Home<br>\nIntel Core i5<br>\nHDD Capacity 500 GB<br>\nRAM 8 GB DDR3<br>\n18.5 inch Display<br>', 'images/new/desk5.jpg', 'DIGITAL', 'DESKTOP', 'parle'),
(208, 'Toshiba Desktop', 'Windows 10 Home<br>\nIntel Core i5<br>\nHDD Capacity 500 GB<br>\nRAM 8 GB DDR3<br>\n18.5 inch Display<br>', 'images/new/desk7.jpg', 'DIGITAL', 'DESKTOP', 'parle'),
(209, 'Microsoft Desktop', 'Windows 10 Home<br>\nIntel Core i5<br>\nHDD Capacity 500 GB<br>\nRAM 8 GB DDR3<br>\n18.5 inch Display<br>', 'images/new/desk8.jpg', 'DIGITAL', 'DESKTOP', 'parle'),
(210, 'zoff Jeera Powder  ', 'Form FactorPowder<br>\nPack of: 1<br>\nQuantity: 100 g<br>\nReady MasalaNo<br>', 'images/new/zoff.jpg', 'GROCERY', 'KITCHEN POWDER', 'parle'),
(211, 'EVEREST Sambhar Masala  ', 'Form FactorPowder<br>\nPack of: 1<br>\nQuantity: 100 g<br>\nReady MasalaNo<br>', 'images/new/evers.jpg', 'GROCERY', 'KITCHEN POWDER', 'parle'),
(212, 'MDH Biryani Masala ', 'Form FactorPowder<br>\nPack of: 1<br>\nQuantity: 50 g<br>\nReady MasalaYes<br>', 'images/new/biri.jpg', 'GROCERY', 'KITCHEN POWDER', 'parle'),
(213, 'BADSHAH Chilli Powder  ', 'Form FactorPowder<br>\nPack of: 1<br>\nQuantity: 100 g<br>\nReady MasalaNo<br>', 'images/new/bad.jpg', 'GROCERY', 'KITCHEN POWDER', 'parle'),
(214, 'Catch Turmeric Powder', 'Form FactorPowder<br>\r\nPack of: 1<br>\r\nQuantity: 100 g<br>\r\nReady MasalaNo<br>', 'images/new/tur.jpg', 'GROCERY', 'KITCHEN POWDER', 'parle'),
(215, 'Aachi Sambar Powder', 'Form FactorPowder<br>\nPack of: 1<br>\nQuantity: 50 g<br>\nReady MasalaYes<br>', 'images/new/sam.jpg', 'GROCERY', 'KITCHEN POWDER', 'parle'),
(216, 'BADSHAH Pani Puri Masala ', 'Form FactorPowder<br> Pack of: 1<br> Quantity: 50 g<br> Ready MasalaYes<br>', 'images/new/bad1.jpg', 'GROCERY', 'KITCHEN POWDER', 'parle'),
(217, 'Cameron men casual shirt', 'Men Regular Fit Solid Mandarin Collar Casual Shirt<br>\n\nFits:Regular|Size:XL<br>', 'images/new/shirt1.jpg', 'fashion', 'shirt', 'parle'),
(218, 'Roadstar men casual shirt', 'Men Regular Fit Checkered Spread Collar Casual Shirt<br>\r\n\r\nFits:Regular|Size:S<br>', 'images/new/shirt2.jpg', 'fashion', 'shirt', 'parle'),
(219, 'Pepzo men casual shirt', 'Men Regular Fit Solid Spread Collar Casual Shirt<br>', 'images/new/shirt3.jpg', 'fashion', 'shirt', 'parle'),
(220, 'FUBAR men casual shirt', 'Men Slim Fit Solid Mandarin Collar Casual Shirt<br>Fits:Slim|Size:XL<br> fashion', 'images/new/shirt10.jpg', 'fashion', 'shirt', 'parle'),
(221, 'Lizzy men\'s casual shirt', 'Men Regular Fit Solid Mandarin Collar Casual Shirt<br>\n\nFits:Regular|Size:L<br>', 'images/new/shirt4.jpg', 'fashion', 'shirt', 'parle'),
(222, 'Blue dove men casual shirt', 'Men Regular Fit Color Block Button Down Collar Casual Shirt<br>\nFits:Regular|Size:XL<br>', 'images/new/shirt5.jpg', 'fashion', 'shirt', 'parle'),
(223, 'Allen Solly men casual shirt', 'Anti-Bacterial Men Slim Fit Solid Spread Collar Casual Shirt<br>', 'images/new/shirt6.jpg', 'fashion', 'shirt', 'parle'),
(224, 'BOSQUE men casual shirt', 'Anti-Bacterial Men Slim Fit Solid Spread Collar Casual Shirt<br>\n\nFits:Regular|Size<br>', 'images/new/shirt7.jpg', 'fashion', 'shirt', 'parle'),
(225, 'PROTOCOL Casual shirt', 'Men Slim Fit Solid Mandarin Collar Casual Shirt<br>Fits:Slim|Size:XL<br> fashion', 'images/new/shirt7.jpg', 'fashion', 'shirt', 'parle'),
(226, 'ALLWIN PAUL men casual shirt', 'Men Regular Fit Checkered Cut Away Collar Casual Shirt<br>', 'images/new/shirt9.jpg', 'fashion', 'shirt', 'parle'),
(227, 'BDREE Women Frock', 'Printed Rayon Blend Stitched Anarkali Gown  (Dark Green)<br>\r\n\r\nSize:M<br>', 'images/new/frock1.jpg', 'fashion', 'frock', 'parle'),
(228, 'Lee Moda women frock', 'Women Printed Viscose Rayon Flared Kurta  (Brown)<br>\r\nsize: L <br>', 'images/new/frock2.jpg', 'fashion', 'frock', 'parle'),
(229, 'HIVA TRENDS Women frock', 'Women Fit and Flare Multicolor Dress<br>\r\n\r\nnum of  frock:2<br>', 'images/new/frock3.jpg', 'fashion', 'frock', 'parle'),
(230, 'DD\'S Creation women frock', 'Embellished Satin Blend Stitched Anarkali Gown  (Maroon)<br>', 'images/new/frock4.jpg', 'fashion', 'frock', 'parle'),
(231, 'Felicipe women frock', 'Printed Pure Cotton Stitched Anarkali Gown  (Multicolor)<br>', 'images/new/frock5.jpg', 'fashion', 'frock', 'parle'),
(232, 'MAA FAB women frock', 'Women A-line Orange Dress<br>\r\nSize: M <br>', 'images/new/frock6.jpg', 'fashion', 'frock', 'parle'),
(233, 'FASHION DREAM Girls frock', 'Girls Calf Length Casual Dress  (Blue, 3/4 Sleeve)<br>\r\nsize:s<br>', 'images/new/frock7.jpg', 'fashion', 'frock', 'parle'),
(234, 'MAHADEV CREATTION women frock', 'Girls Calf Length Casual Dress  (Blue, 3/4 Sleeve)<br>\r\nSize:XL<br>', 'images/new/frock8.jpg', 'fashion', 'frock', 'parle');

-- --------------------------------------------------------

--
-- Table structure for table `pro_dtl_tbl`
--

CREATE TABLE `pro_dtl_tbl` (
  `pro_id` int(11) NOT NULL,
  `stock` int(11) NOT NULL,
  `prize` int(11) NOT NULL,
  `mrp` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pro_dtl_tbl`
--

INSERT INTO `pro_dtl_tbl` (`pro_id`, `stock`, `prize`, `mrp`) VALUES
(4, 3, 663, 2139),
(5, 0, 340, 385),
(6, 39, 20000, 2999),
(7, 42, 2999, 6999),
(8, 47, 2009, 3000),
(9, 49, 4800, 6000),
(10, 49, 16690, 19000),
(11, 49, 189, 400),
(12, 48, 32000, 34999),
(13, 49, 11490, 12500),
(14, 50, 199, 600),
(15, 27, 50000, 50000),
(16, 30, 9500, 9500),
(17, 10, 1800, 1800),
(18, 10, 500, 500),
(19, 23, 40, 40),
(20, 10, 38, 38),
(21, 10, 45, 45),
(22, 9, 17, 17),
(23, 10, 500, 500),
(24, 9, 320, 320),
(25, 8, 1800, 1800),
(26, 8, 1500, 1500),
(27, 9, 105, 105),
(28, 10, 130, 130),
(29, 10, 90, 90),
(30, 9, 150, 150),
(31, 10, 1999, 1999),
(32, 10, 2500, 2500),
(33, 9, 1800, 1800),
(34, 10, 80, 80),
(35, 49, 70, 150),
(36, 49, 90, 100),
(37, 48, 955, 1060),
(38, 48, 119, 138),
(39, 50, 218, 329),
(40, 50, 367, 439),
(41, 50, 229, 339),
(42, 49, 489, 550),
(43, 50, 550, 630),
(44, 49, 130, 150),
(45, 50, 245, 324),
(46, 50, 445, 550),
(47, 50, 225, 289),
(48, 50, 345, 471),
(49, 49, 289, 378),
(50, 49, 467, 546),
(51, 50, 79, 100),
(52, 49, 178, 199),
(53, 50, 67, 100),
(54, 50, 167, 199),
(55, 48, 67, 78),
(56, 50, 114, 135),
(57, 50, 10, 10),
(58, 49, 19, 20),
(59, 50, 10, 10),
(60, 50, 19, 20),
(61, 49, 39, 45),
(62, 50, 35, 45),
(63, 50, 25, 30),
(64, 50, 18, 20),
(65, 50, 78, 85),
(66, 50, 23, 25),
(67, 49, 3490, 6490),
(68, 50, 299, 499),
(69, 49, 308, 999),
(70, 49, 1400, 1700),
(71, 49, 319, 525),
(72, 50, 663, 2139),
(73, 50, 340, 385),
(74, 50, 1999, 2999),
(75, 49, 2999, 6999),
(76, 50, 2009, 3000),
(77, 49, 4800, 6000),
(78, 49, 1690, 1900),
(79, 50, 189, 400),
(80, 50, 3200, 3499),
(81, 50, 1490, 1980),
(82, 50, 199, 600),
(83, 49, 3400, 4000),
(84, 49, 3200, 6490),
(86, 50, 308, 999),
(87, 50, 1490, 1700),
(88, 50, 319, 525),
(89, 50, 663, 2139),
(90, 50, 340, 385),
(91, 50, 1999, 2999),
(92, 49, 2999, 6999),
(93, 50, 123, 233),
(94, 49, 234, 321),
(95, 50, 144, 244),
(96, 50, 254, 341),
(97, 50, 319, 525),
(98, 50, 663, 2139),
(99, 49, 340, 385),
(100, 50, 299, 499),
(101, 50, 308, 999),
(102, 50, 189, 400),
(103, 50, 123, 233),
(104, 50, 234, 321),
(105, 50, 144, 244),
(106, 50, 254, 341),
(107, 50, 319, 525),
(108, 49, 663, 2139),
(109, 50, 340, 385),
(110, 49, 299, 499),
(111, 50, 308, 999),
(112, 50, 189, 400),
(113, 50, 39, 45),
(114, 49, 35, 45),
(115, 50, 25, 30),
(116, 50, 23, 25),
(117, 50, 78, 85),
(118, 50, 23, 25),
(119, 50, 39, 45),
(120, 49, 35, 45),
(121, 49, 25, 30),
(122, 50, 23, 25),
(123, 49, 78, 85),
(124, 50, 90, 120),
(125, 50, 85, 124),
(126, 50, 99, 138),
(127, 50, 78, 90),
(128, 50, 90, 145),
(129, 50, 87, 156),
(130, 49, 86, 178),
(131, 50, 98, 156),
(132, 50, 110, 145),
(133, 50, 121, 134),
(134, 50, 134, 156),
(135, 50, 145, 178),
(136, 49, 123, 143),
(137, 48, 98, 124),
(138, 48, 499, 600),
(139, 50, 399, 499),
(140, 50, 489, 690),
(141, 50, 500, 600),
(142, 48, 578, 600),
(143, 49, 390, 490),
(144, 50, 500, 570),
(145, 50, 670, 700),
(146, 50, 450, 500),
(147, 50, 460, 570),
(148, 50, 32300, 32990),
(149, 49, 37890, 35899),
(150, 50, 47281, 47380),
(151, 50, 850, 856),
(152, 49, 100, 120),
(153, 50, 99, 110),
(154, 49, 88, 100),
(155, 50, 45, 99),
(156, 50, 78, 88),
(157, 50, 50, 90),
(158, 50, 70, 88),
(159, 50, 67, 90),
(160, 50, 50, 70),
(161, 49, 104, 198),
(162, 49, 200, 300),
(163, 50, 450, 500),
(164, 50, 460, 600),
(165, 50, 500, 700),
(166, 50, 500, 600),
(167, 50, 590, 670),
(168, 49, 400, 500),
(169, 50, 500, 600),
(170, 49, 1500, 1800),
(171, 50, 900, 1000),
(172, 49, 1300, 1600),
(173, 50, 1200, 1500),
(174, 50, 1000, 1200),
(175, 50, 900, 1000),
(176, 50, 900, 1000),
(177, 50, 1000, 1100),
(178, 50, 1000, 1200),
(179, 48, 1200, 1300),
(180, 50, 3300, 4000),
(181, 50, 3000, 3500),
(182, 48, 4000, 4600),
(183, 50, 3000, 3500),
(184, 50, 3560, 3999),
(185, 50, 3300, 4000),
(186, 50, 4000, 4500),
(187, 50, 9999, 11100),
(188, 49, 17876, 17996),
(189, 49, 24890, 24990),
(190, 49, 89000, 110000),
(191, 50, 34000, 40999),
(192, 50, 65000, 67999),
(193, 50, 48000, 50999),
(194, 50, 43000, 50999),
(195, 50, 47000, 55999),
(196, 50, 22000, 25000),
(197, 48, 85000, 90000),
(198, 50, 19700, 23000),
(199, 50, 20999, 22000),
(200, 50, 21000, 23000),
(201, 50, 19800, 21000),
(202, 50, 17500, 19000),
(203, 50, 19000, 21000),
(204, 49, 77000, 99990),
(205, 49, 88, 90),
(206, 50, 99, 110),
(207, 50, 56, 100),
(208, 50, 78, 100),
(209, 50, 77, 90),
(210, 50, 499, 500),
(211, 50, 789, 801),
(212, 49, 764, 756),
(213, 50, 456, 488),
(214, 50, 567, 589),
(215, 50, 351, 405),
(216, 50, 954, 984),
(217, 49, 456, 432),
(218, 50, 556, 567),
(219, 50, 678, 789),
(220, 50, 615, 654),
(221, 49, 890, 899),
(222, 50, 788, 790),
(223, 50, 699, 703),
(224, 50, 449, 556),
(225, 50, 456, 562),
(226, 49, 556, 578),
(227, 50, 996, 992),
(228, 50, 499, 500),
(229, 50, 789, 801),
(230, 49, 764, 756),
(231, 50, 456, 488),
(232, 49, 567, 589),
(233, 49, 351, 405),
(234, 48, 954, 984);

-- --------------------------------------------------------

--
-- Table structure for table `recomendation`
--

CREATE TABLE `recomendation` (
  `user_id` varchar(11) NOT NULL,
  `pro_id` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `recomendation`
--

INSERT INTO `recomendation` (`user_id`, `pro_id`) VALUES
('hakkem', '6'),
('hakkem', '5'),
('hakkem', '6'),
('hakkem', '7'),
('hakkem', '8'),
('hakkem', '9'),
('hakkem', '233'),
('hakkem', '42'),
('hakkem', '189'),
('hakkem', '210'),
('nimmy', '232'),
('nimmy', '27'),
('nimmy', '41'),
('nimmy', '52'),
('nimmy', '108'),
('nimmy', '132'),
('nimmy', '58'),
('nimmy', '123'),
('nimmy', '88'),
('nimmy', '37'),
('nimmy', '188'),
('nimmy', '118'),
('thomas', '217'),
('thomas', '37'),
('thomas', '42'),
('thomas', '47'),
('thomas', '72'),
('thomas', '123'),
('thomas', '118'),
('thomas', '93'),
('thomas', '158'),
('sandhya', '212'),
('sandhya', '35'),
('sandhya', '47'),
('sandhya', '62'),
('sandhya', '42'),
('sandhya', '52'),
('sandhya', '57'),
('nimmy', '8'),
('abi', '55'),
('abi', '42'),
('abi', '55'),
('abi', '99'),
('abi', '19'),
('pooj', '5'),
('nimmy', '7'),
('nimmy', '6'),
('hakkem', '5'),
('nimmy', '5'),
('nimmy', '6');

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE `review` (
  `rev_id` int(11) NOT NULL,
  `proid` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `review` varchar(1000) NOT NULL,
  `rating` int(11) NOT NULL,
  `aprove` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `review`
--

INSERT INTO `review` (`rev_id`, `proid`, `username`, `review`, `rating`, `aprove`) VALUES
(1, 7, 'mathew', 'gwfihwoaG', 4, 1),
(3, 5, 'nimmy', 'good product must buy', 5, 1),
(4, 6, 'nimmy', 'average product ', 3, 1),
(5, 8, 'nimmy', 'best product at this price point', 5, 1),
(6, 5, 'nimmy', 'good and awsome product', 5, 1),
(7, 4, 'nimmy', 'good', 5, 1),
(8, 5, 'hakkem', 'hububnini', 5, 1),
(9, 5, 'hakkem', 'fddd', 3, 1),
(10, 5, 'hakkem', 'ggg', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `user_tbl`
--

CREATE TABLE `user_tbl` (
  `username` varchar(30) NOT NULL,
  `name` varchar(30) NOT NULL,
  `phone` int(11) NOT NULL,
  `email` varchar(60) NOT NULL,
  `address` varchar(60) NOT NULL,
  `password` blob NOT NULL,
  `image` varchar(30) NOT NULL,
  `role` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_tbl`
--

INSERT INTO `user_tbl` (`username`, `name`, `phone`, `email`, `address`, `password`, `image`, `role`) VALUES
('abi', 'fgfggvc', 2147483647, 'aban@gmail.com', 'uhhkh', 0x6637373166656431366263376135303239333235383636306165636630376331, 'images/user.jpg', 'user'),
('admin', 'admin', 2147483647, 'thomasjose920@gmail.com', 'rheifhew', 0x3231323332663239376135376135613734333839346130653461383031666333, 'images/user.jpg', 'admin'),
('fytgv', 'thomachan', 3463434, 'gvwsgwg@gmail.com', 'hgygv', 0x3234336536316539343130613966353737643264363632633637303235656539, 'nullimages/user.jpg', 'user'),
('ibm', 'Thomas jose', 2147483647, 'nimmyanniethomas112@gmail.com', 'fwem', 0x3231323332663239376135376135613734333839346130653461383031666333, 'null', 'company'),
('jango', 'jango', 2147483647, 'thomas@gma', 'tfgkh', 0x6463653961363435306161633561643731353831346565373234636665366135, 'null', 'company'),
('jestinsir', 'jestin', 2147483647, 'jestinjose@gmail.com', 'bcadepartment', 0x6636643233613261346332373134336166366562353035306138636264373032, 'images/user.jpg', 'user'),
('mathew', 'Thomas Jose', 2147483647, 'thomasjose920@gmail.com', 'Azhakathu(h) karikkattor center po', 0x3737373464336266663932313034383135323061633436333433323030666633, 'null', 'user'),
('nimmy', 'nimmy', 2147483647, 'nimmyanniethomas112@gmail.com', 'utdcujk', 0x6566396537336636666235336530363065633162363533383865313133623836, 'images/user.jpg', 'user'),
('parle', 'parle', 2147483647, 'nimmyanniethomas112@gmail.com', 'fwem', 0x6464306333616264623538303932383931613634663834323565356266626561, 'null', 'company'),
('pooj', 'pooja', 2147483647, '301sajisandhya@gmail.com', 'munnar', 0x6336383730316265626339316232316564363935346338316434306662393135, 'null', 'user'),
('Renault', 'renault', 958676768, 'thomasjose992@gmail.com', 'seugfowglv', 0x3737373464336266663932313034383135323061633436333433323030666633, 'null', 'company'),
('sandhya', 'sandhya', 2147483647, '2002sajisandhya@gmail.com', 'htyfuyj', 0x3233633131633936646637346633303463376530636136366664376534333034, 'null', 'user'),
('soumyabca', 'soumya', 1000000000, 'soumyamiss@gmail.com', 'datamining', 0x6365656633633530633063636135313930643966383638323232636636373538, 'null', 'user'),
('thomachan', 'thomachan', 2147483647, 'thomasjose9900@gmail.com', 'Azhakathu(h) karikkattor center po', 0x3737373464336266663932313034383135323061633436333433323030666633, 'null', 'user'),
('thomachan123', 'thomachan', 2147483647, 'thomasjose9220@gmail.com', 'ctuvikhoihnjkibv', 0x3263383162303562383339323239313738643666636265303166313336636534, 'null', 'user'),
('thomas', 'thomas', 2147483647, 'thomas@gma', 'fwem', 0x3263383162303562383339323239313738643666636265303166313336636534, 'null', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart_tbl`
--
ALTER TABLE `cart_tbl`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `catagory_tbl`
--
ALTER TABLE `catagory_tbl`
  ADD PRIMARY KEY (`name`);

--
-- Indexes for table `order_tbl`
--
ALTER TABLE `order_tbl`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `payment_tbl`
--
ALTER TABLE `payment_tbl`
  ADD PRIMARY KEY (`customer_username`);

--
-- Indexes for table `product_tbl`
--
ALTER TABLE `product_tbl`
  ADD PRIMARY KEY (`pro_id`);

--
-- Indexes for table `pro_dtl_tbl`
--
ALTER TABLE `pro_dtl_tbl`
  ADD PRIMARY KEY (`pro_id`);

--
-- Indexes for table `review`
--
ALTER TABLE `review`
  ADD PRIMARY KEY (`rev_id`);

--
-- Indexes for table `user_tbl`
--
ALTER TABLE `user_tbl`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart_tbl`
--
ALTER TABLE `cart_tbl`
  MODIFY `c_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=236;

--
-- AUTO_INCREMENT for table `order_tbl`
--
ALTER TABLE `order_tbl`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=126;

--
-- AUTO_INCREMENT for table `product_tbl`
--
ALTER TABLE `product_tbl`
  MODIFY `pro_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=246;

--
-- AUTO_INCREMENT for table `review`
--
ALTER TABLE `review`
  MODIFY `rev_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
