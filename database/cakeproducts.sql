-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 19, 2025 at 01:04 PM
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
-- Table structure for table `cakeproducts`
--

CREATE TABLE `cakeproducts` (
  `id` int(11) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `sub_product_name` varchar(100) NOT NULL,
  `product_price` decimal(10,2) NOT NULL,
  `product_image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cakeproducts`
--

INSERT INTO `cakeproducts` (`id`, `product_name`, `sub_product_name`, `product_price`, `product_image`) VALUES
(15, 'Regular Cakes', 'Classic Black Forest Cake', 4600.00, 'blackF.jpeg'),
(16, 'Regular Cakes', 'Rich Chocolate Truffle Cake', 5100.00, 'mUD1jKdw.jpeg'),
(17, 'Regular Cakes', 'Whipped Cream Pineapple Cake', 4600.00, 'sq-pineapple-cake0022pifr-CCC.jpg'),
(18, 'Regular Cakes', 'Chocolate Vanilla Half & Half Cake', 4500.00, 'choco-vanilla-cake0006chva-AAA.jpg'),
(20, 'Regular Cakes', 'Tropical Fruit n Almond Cake', 5500.00, 'fresh-fruit-cake0014frui-AAA.png'),
(21, 'Regular Cakes', 'Oreo Chocolate Cake', 6200.00, 'oreo-chocolate-drip-cake-cake3968choc-a.png'),
(22, 'Regular Cakes', 'Rich Butterscotch Crunch Cake', 7000.00, 'butterscotch-cake0003butt-AAAA.png'),
(23, 'Gourmet Cakes', 'Eggless Tiramisu Cake', 7500.00, 'sq-scrumptious-tiramisu-cake-cake2636exot-AA.png'),
(24, 'Gourmet Cakes', 'Classic Blueberry Cheesecake', 10000.00, 'viscous-blueberry-cheesecake-cake2859blue-A_1.png'),
(25, 'Gourmet Cakes', 'Lotus Biscoff Baked Cheesecake', 8500.00, 'biscolicious-cheesecake-cake3215bisc-AA.png'),
(26, 'Gourmet Cakes', 'French La Opera Coffee Choco Cake', 9000.00, 'opera-choco-cake-cake2637choc-A.png'),
(27, 'Gourmet Cakes', 'Nutella Hazelnut Cake', 8500.00, 'choco-nutella-hazelnut-cake-cake3216haze-AAA.png'),
(28, 'Gourmet Cakes', 'Belgian Chocolate Cake', 7600.00, 'belgium-chocolate-mousse-cake-cake3217beli-AA.png'),
(29, 'Gourmet Cakes', 'Trio Mousse Cake', 6600.00, 'trippy-trio-cake-cake2858choc-AA.png'),
(30, 'Gourmet Cakes', 'Choco Dream Cake', 5700.00, 'chocolate-dream-cake-cake3750drea-A.png'),
(31, 'Regular Cakes', 'Red Velvet Cream Cake', 8500.00, 'red-velvet-cake0027reex-AAA.png'),
(32, 'Gateaux Cakes', 'Black Forest Gateau', 4800.00, '28.jpg.png'),
(33, 'Gateaux Cakes', 'Fruit Gateau', 5800.00, '3-768x768.png'),
(34, 'Gateaux Cakes', 'Chocolate Gateau', 5500.00, 'Chocolate-Gateau-768x768.png'),
(35, 'Gateaux Cakes', 'Pineapple Gateau', 6500.00, 'Pineapple-Gateau-2-768x768.png'),
(36, 'Gateaux Cakes', 'Vanilla Gateau', 3500.00, 'Vanilla-Gateau-768x768.png'),
(37, 'Gateaux Cakes', 'Coffee Gateau', 3600.00, 'Coffee-Gateau-768x768.png'),
(38, 'Gateaux Cakes', 'Strawberry Gateau', 4500.00, 'Strawberry-Gateaux-768x768.png'),
(39, 'Gateaux Cakes', 'Nut & Fudge Gateau', 4150.00, 'Nut-Fudge-Gateau-768x768.png'),
(40, 'Normal Cakes', 'Butter Cake – Mini', 1100.00, '7F6627E4-1098-4C08-82C1-9BB16E43341A-300x300.png'),
(41, 'Normal Cakes', 'Butter Cake 1.1kg', 3700.00, 'B7E0E147-C4D3-40D7-ABE8-D49E0A821FF6-200x200.png'),
(42, 'Normal Cakes', 'Butter Cake with Cashew – Mini', 1300.00, 'BUTTER-CAKE-WITH-CASHEW-1080x1080-1-300x300.png'),
(43, 'Normal Cakes', 'Butter Cake with Cashew 1.2kg', 4300.00, '4F1A1E30-A699-4EB2-9334-61B25EEFB8FD-200x200.png'),
(44, 'Normal Cakes', 'Fruit Loaf 300g', 2000.00, 'A45E18A0-13E6-447E-AAB4-D683819FEA8E-200x200.png'),
(45, 'Normal Cakes', 'Lemon Loaf', 1400.00, 'E6DE1B65-1CE7-4C3D-9F65-FF4CC163B918-300x300.png'),
(46, 'Normal Cakes', 'Passion Loaf', 1400.00, '0FCAB802-6175-42D9-8779-6FCDA9A90291-300x300.png'),
(48, 'Normal Cakes', 'Battenburg Loaf 8 Slices', 4000.00, 'TCF-12th-oct00938-1-600x600.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cakeproducts`
--
ALTER TABLE `cakeproducts`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cakeproducts`
--
ALTER TABLE `cakeproducts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
