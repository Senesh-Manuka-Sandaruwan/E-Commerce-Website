-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 19, 2025 at 01:05 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `crunchy_sweets`
--

-- --------------------------------------------------------

--
-- Table structure for table `chocolateproducts`
--

CREATE TABLE `chocolateproducts` (
  `id` int(11) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `sub_product_name` varchar(255) DEFAULT NULL,
  `product_price` decimal(10,2) NOT NULL,
  `product_image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `chocolateproducts`
--

INSERT INTO `chocolateproducts` (`id`, `product_name`, `sub_product_name`, `product_price`, `product_image`) VALUES
(31, 'Dairy Milk Chocolates', 'Cadbury Dairy Milk Advent Calendar 258G', 6500.00, '7622201146214.png'),
(32, 'Dairy Milk Chocolates', 'Cad Dairy Milk Crunchy Bits 180G', 2450.00, '7622201148973.png'),
(33, 'Dairy Milk Chocolates', 'Cadbury Dairy Milk Freddo Friends 300G', 4500.00, '7622201755270.png'),
(34, 'Dairy Milk Chocolates', 'Cadbury Dairy Milk Share Pk 168G', 3250.00, '7622201730253.png'),
(35, 'Dairy Milk Chocolates', 'Cadbury Dairy Milk Oreo Share Pack 159.5G', 2450.00, '7622201731441.png'),
(36, 'Dairy Milk Chocolates', 'Cadbury Dairy Milk And More Nutty Praline Crisp 180G', 2750.00, '7622202025693.png'),
(37, 'Dairy Milk Chocolates', 'Cadbury Dairy Milk And More Caramel Nut Crunch 200G', 2750.00, '7622202029844.png'),
(38, 'Dairy Milk Chocolates', 'Cadbury Dairy Milk Silk Roast Almond Chocolate 143G', 1750.00, '7622201761707.png'),
(39, 'KitKat Chocolates', 'Kitkat Milo Share Pack 10S 160G', 2250.00, '9556001317322.png'),
(40, 'KitKat Chocolates', 'Kitkat Strawberry Flv 5Pk 85G', 1650.00, '9556001315830.png'),
(41, 'KitKat Chocolates', 'Nestle Kitkat Mini 15 Breaks 202.5G', 4250.00, '6294017125946.png'),
(42, 'KitKat Chocolates', 'Kitkat Selection 234G', 4000.00, '8445290637437.png'),
(43, 'KitKat Chocolates', 'Kitkat Dark 52% Borneo 8Pk 136G', 3950.00, '9556001311443.png'),
(44, 'KitKat Chocolates', 'Kitkat Miniatures 20 Breaks 214.5G', 4500.00, '6294017127216.png'),
(46, 'KitKat Chocolates', 'Kitkat 2F Original Bar 20.7G', 250.00, '50189205-1.png'),
(47, 'KitKat Chocolates', 'Kitkat Christmas Break Mini Santa Pouch 55G', 1250.00, '8000300411669.png'),
(48, 'KitKat Chocolates', 'Kitkat Chunky 38G', 650.00, '9556001239754-1.png'),
(49, 'KitKat Chocolates', 'Nestle Kitkat 4F 3Pk 124.5G', 1450.00, '7613035220249-1.png'),
(50, 'KitKat Chocolates', 'Nestle Kitkat Original 2F 17.7G', 250.00, '6294003539153-1.png'),
(51, 'KitKat Chocolates', 'Kitkat 4F 41.5G (D)', 450.00, '40052410-1.png'),
(52, 'KitKat Chocolates', 'Kitkat Dark 170G', 2150.00, '9300605111363-1.png'),
(53, 'KitKat Chocolates', 'Nestle Kitkat 9 Bar Dark 186.3G', 2150.00, '7613036099387.png'),
(54, 'Mars Chocolates', 'Mars Fudge 110G', 1950.00, '5056357912485.png'),
(55, 'Mars Chocolates', 'Mars Minis 227G', 2750.00, '5000159474573.png'),
(56, 'Mars Chocolates', 'Mars Ice Cream Bar', 1550.00, '5000159397360-1.png'),
(57, 'Mars Chocolates', 'Mars Triple Treat Fruit Nut&Choc 4X32G', 1950.00, '5056357905579-1.png'),
(58, 'Mars Chocolates', 'Mars Protein 50G', 1200.00, '5000159516198-1.png'),
(59, 'Mars Chocolates', 'Mars 51G', 450.00, '5000159407236-1.png'),
(60, 'Mars Chocolates', 'Mars 9 Bars 304.2G', 2750.00, '5000159551861.png'),
(61, 'Twix Chocolates', 'Twix Secret Centre Biscuits 132G', 1400.00, '5056357913383.png'),
(62, 'Twix Chocolates', 'Twix Ice Cream Bar', 1550.00, '5000159484657.png'),
(63, 'Twix Chocolates', 'Twix Chocolate Bar 50G', 650.00, '5000159459228-1.png'),
(64, 'Twix Chocolates', 'Twix Cookies Dough 88G', 2250.00, '655956022721.png'),
(65, 'Twix Chocolates', 'Twix White 46G', 550.00, '5000159556804.png'),
(66, 'Twix Chocolates', 'Twix Miniatures 220G', 2450.00, '5000159452885.png'),
(67, 'Twix Chocolates', 'Twix Wafer Rolls 22.5G', 400.00, '6221134010671.png'),
(68, 'Twix Chocolates', 'Twix Cookie Dough 241G', 4250.00, '655956022684.png'),
(69, 'Twix Chocolates', 'Twix Chocolate Bar 25G', 350.00, '5000159459273.png'),
(70, 'Twix Chocolates', 'Twix Salted Caramel Xtra 75G', 850.00, '5000159528917-1.png'),
(71, 'Twix Chocolates', 'Twix 10Bars Box 200G', 1450.00, '5000159531559-1.png'),
(72, 'Twix Chocolates', 'Twix Minis 10Pack 200G', 1550.00, '6294001830900-1.png'),
(73, 'Twix Chocolates', 'Twix White Xtra 75G', 850.00, '5000159516556-1.png'),
(74, 'Twix Chocolates', 'Twix White Fingers 9Bars 207G', 1750.00, '5000159516587-1.png'),
(75, 'Twix Chocolates', 'Twix Caramel Centres 144G', 1650.00, '5060402906459.png'),
(76, 'Twix Chocolates', 'Twix Top 21G', 150.00, '5900951251849-1.png'),
(77, 'Snickers Chocolates', 'Snickers Peanut Butter Ice Cream Bar', 1550.00, '18240.png'),
(78, 'Snickers Chocolates', 'Snickers Crisp Ice Cream Bar 39.2Ml', 1550.00, '5000159526111.png'),
(79, 'Snickers Chocolates', 'Snickers Ice Cream Bar', 1550.00, '5000159343961-1.png'),
(82, 'Snickers Chocolates', 'Snickers Protien Bar 47G', 1200.00, 'Untitled-design-2022-09-23T143951.743.png'),
(83, 'Snickers Chocolates', 'Snickers Minis 10Pck 180G', 2450.00, '6294001830863-1.png'),
(84, 'Snickers Chocolates', 'Snickers 51G', 450.00, '5000159461122-1.png'),
(85, 'Snickers Chocolates', 'Snickers Berry Whip Chocolate 22G', 250.00, '8902433005824.png'),
(86, 'Snickers Chocolates', 'Snickers Duo 83.4G', 950.00, '5000159470643.png'),
(87, 'Snickers Chocolates', 'Snickers Protien Bar Peanut Butter Flv 47G', 1250.00, '5056357900857.png'),
(88, 'Snickers Chocolates', 'Snickers White Ice Cream Bar', 1550.00, '5000159509756-1.png'),
(89, 'Snickers Chocolates', 'Snickers 9 Snacksize Bars 319.5G', 2750.00, 'Snickers-9-Snacksize-Bars-319.5G.png'),
(91, 'Milka Chocolate', 'Milka Pralines Hazelnut Creme 110G', 3450.00, '7622210597380.png'),
(92, 'Milka Chocolate', 'Milka Choco Wafer 30G', 350.00, '76224935.png'),
(95, 'Milka Chocolate', 'Milka Alpine Milk 270G', 4500.00, '7622210719881-1.png'),
(96, 'Milka Chocolate', 'Milka Strawberry Cheesecake 300G', 4500.00, '7622210659408-1.png'),
(97, 'Milka Chocolate', 'Milka Triolade Dark, White & Alpine Chocolate 280G', 4500.00, '7622210719997-1.png'),
(98, 'Milka Chocolate', 'Milka Alpine Milk Chocolate 100G', 1500.00, '3045140105502-1.png'),
(100, 'Milka Chocolate', 'Milka Whole Almond 270G', 4500.00, '7622201735593.png'),
(101, 'Milka Chocolate', 'Milka Wholenut 270G', 4500.00, '7622210719850-1.png'),
(102, 'Milka Chocolate', 'Milka Toffee Whole Nuts Chocolate 300G', 4500.00, '7622300280802-1.png'),
(103, 'Ferrero Rocher Chocolate', 'Ferrero Rocher White Chocolate Hazelnut 90G', 1950.00, '8000500359884-1.png'),
(104, 'Ferrero Rocher Chocolate', 'Ferrero Rocher Moments T16 92.8G', 3250.00, '8000500411469.png'),
(105, 'Ferrero Rocher Chocolate', 'Ferrero Rocher T8 100G', 2350.00, '8000500313183.png'),
(106, 'Ferrero Rocher Chocolate', 'Ferrero Rocher 42P 525G', 11000.00, '8000500011461-1.png'),
(108, 'Ferrero Rocher Chocolate', 'Ferrero Rocher T30 375G', 7750.00, '8000500032237-1.png'),
(109, 'Ferrero Rocher Chocolate', 'Ferrero Rocher 600G 48Pcs', 7500.00, '9300698500242-1.png'),
(110, 'Ferrero Rocher Chocolate', 'Ferrero Rocher 24 Pieces Pack Box 300G', 6800.00, '8000500009673.png'),
(111, 'Ferrero Rocher Chocolate', 'Ferrero Rocher T4 50G', 1350.00, 'Ferrero-Rocher-T4-50G.png'),
(112, 'Ferrero Rocher Chocolate', 'Ferrero Rocher 5N Pc 62.5G', 750.00, '80135906-1.png'),
(113, 'Ferrero Rocher Chocolate', 'Ferrero Rocher 16 Piecs Pack 200G', 4250.00, '8000500003787-1.png'),
(114, 'Toblerone Chocolate', 'Toblerone Original 100G', 1050.00, '7614500010013-1.png'),
(115, 'Toblerone Chocolate', 'Toblerone Crunchy Almond 360G', 5500.00, '9300617300557.png'),
(116, 'Toblerone Chocolate', 'Toblerone Milk Chocolate 360G', 4700.00, '9300617051930.png'),
(118, 'Toblerone Chocolate', 'Tiny Toblerone Pouch 280G', 4500.00, '7622201384708.png'),
(119, 'Toblerone Chocolate', 'Toblerone Tiny Box 200G', 2750.00, '7622210411136.png'),
(120, 'Toblerone Chocolate', 'Toblerone White 360G', 3950.00, '7622210496669-1.png'),
(121, 'Toblerone Chocolate', 'Toblerone Tiny Dubai Bag 272G', 3750.00, '7622210721365-1.png'),
(122, 'Toblerone Chocolate', 'Toblerone 360G Large', 3950.00, '7622210496645-1.png'),
(123, 'Toblerone Chocolate', 'Toblerone Triangle Box 200G', 5500.00, '7622201144296-1.png'),
(124, 'Toblerone Chocolate', 'Toblerone Tiny Dark 34Pieces 272G', 1950.00, '7622210496010-1.png'),
(126, 'Toblerone Chocolate', 'Toblerone Milk 50G', 700.00, 'Untitled-design-44.png'),
(127, 'Toblerone Chocolate', 'Toblerone Crunchy Almonds 100G', 1050.00, '7622300710613-1.png'),
(128, 'Toblerone Chocolate', 'Toblerone Fruit & Nut 100G', 1050.00, '7622300107949-1.png'),
(129, 'Toblerone Chocolate', 'Toblerone White 100G', 1050.00, '7614500010310-1.png'),
(130, 'Toblerone Chocolate', 'Toblerone Dark 100G', 1050.00, '7614500010617-1.png'),
(131, 'Toblerone Chocolate', 'Toblerone Tiny Bag 200G', 3250.00, '7622200009176-1.png'),
(132, 'Toblerone Chocolate', 'Toblerone Tiny Bag White 200G', 3250.00, '7622210392565.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `chocolateproducts`
--
ALTER TABLE `chocolateproducts`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `chocolateproducts`
--
ALTER TABLE `chocolateproducts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=133;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
