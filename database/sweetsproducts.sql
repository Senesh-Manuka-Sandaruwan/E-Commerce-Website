-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 19, 2025 at 01:06 PM
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
-- Table structure for table `sweetsproducts`
--

CREATE TABLE `sweetsproducts` (
  `id` int(11) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `sub_product_name` varchar(255) NOT NULL,
  `product_price` decimal(10,2) NOT NULL,
  `product_image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sweetsproducts`
--

INSERT INTO `sweetsproducts` (`id`, `product_name`, `sub_product_name`, `product_price`, `product_image`) VALUES
(3, 'Donuts', 'Nutella burst', 400.00, 'nutella-donut--300x300.png'),
(4, 'Donuts', 'Dark chocolate glazed', 200.00, 'Nutella-glazed--300x300.png'),
(5, 'Donuts', 'Double chocolate', 250.00, 'double-chocolate--300x300.png'),
(6, 'Donuts', 'Choco custard', 250.00, 'Choco-custard--300x300.png'),
(7, 'Donuts', 'Blueberry cheesecake', 390.00, 'Blueberry-cheesecake--300x300.png'),
(8, 'Donuts', '12 pack donut assortment', 2150.00, '12ve-300x300.png'),
(9, 'Donuts', 'All glazed pack of 6 cappucinno', 1100.00, '6-pack-glazed-cappucinno-300x300.png'),
(10, 'Donuts', 'All glazed pack of 6 chocolate', 1100.00, '6-pack-glazed-chocolate-glazed-300x300.png'),
(11, 'Donuts', 'All glazed pack of 6 strawberry', 1100.00, '6-pack-glazed-strawberry-300x300.png'),
(12, 'Donuts', 'All glazed pack of 6 sugar', 1100.00, '6-pack-glazed-sugar-300x300.png'),
(13, 'Donuts', 'festive 6 pack', 1750.00, 'festive6-300x300.png'),
(19, 'Brownies', 'Moreish Millionaire Brownie', 400.00, 'choco-millionaire-brownie-brow2942choc-AA.png'),
(20, 'Brownies', 'Roasted Classic Choco Delish Brownie', 350.00, 'sq-roasted-classic-choco-delish-brownie-brow2489-AA.png'),
(21, 'Brownies', 'Set Of 6 Assorted Brownie', 2100.00, 'nutella-brownie-brow4060-a.png'),
(22, 'Brownies', 'Classic Walnut Brownie', 350.00, 'classic-walnut-brownie-brow4057waln-a.png'),
(24, 'Brownies', 'Kitkat Brownie', 390.00, 'kitkat-brownie-brow4443-A.png'),
(25, 'Brownies', 'Nutella Brownie', 400.00, 'nutella--brownie-brow4056Nute-a.png'),
(26, 'Brownies', 'Dainty Choco Explosion Brownie', 450.00, 'heavenly-choco-brownie-brow2948choc-AA.png'),
(27, 'Brownies', 'Double Chocolate Brownie', 420.00, 'doble-chocolate-brownie-brow4054choc-a.png'),
(28, 'Brownies', 'Set Of 2 Delicious Happy Birthday Brownie', 650.00, 'sq-delicious-happy-birthday-brownie-brow2347-A_1.png'),
(29, 'Brownies', 'Set of 6 Personalised Choco Brownies', 2300.00, 'sq-set-of-six-personalised-brownies-brow2252-A_0.png'),
(30, 'Brownies', 'Set Of 2 Personalised Birthday Chocolate Brownies', 1000.00, 'sq-set-of-two-personalised-birthday-brownies-brow2255-A_0.png'),
(31, 'Brownies', '6 Choco Walnut Anniversary Brownies', 2250.00, 'sq-6-choco-walnut-anniversary-brownies-brow2025-A.png'),
(32, 'Brownies', 'Set Of Two Personalised Chocolate Birthday Brownies', 1000.00, 'sq-set-of-two-personalised-birthday-brownies-brow2254-A_0.png'),
(33, 'Brownies', 'Delicious Happy Anniversary Brownie', 750.00, 'sq-heavenly-happy-anniversary-brownies-brow2346-C_0.png'),
(34, 'Brownies', 'Butterscotch Jar Cake 200 ml N Walnut Brownie', 1800.00, 'sq-butterscotch-jar-cake-200-ml-n-walnut-brownie-brow2202butt-A_0.png'),
(35, 'Brownies', 'Set Of 6 Choco Love Brownies', 2150.00, 'sq-set-of-6-choco-love-brownies-brow1763-A_0.png'),
(36, 'Brownies', 'Set of Two Personalised Anniversary Choco Brownie', 1000.00, 'sq-set-of-two-personalised-anniversary-brownie-brow2253-A_1.png'),
(37, 'Brownies', 'Choco Walnut Brownies Set of 6', 2250.00, 'sq-6-choco-walnut-brownies-brow2024-A.png'),
(38, 'Brownies', 'Six Chocolatey Brownies', 2300.00, 'six-chocolatey-brownies-brow3170choc-A_0.png'),
(39, 'Cup Cakes', 'Chocolicious Choco Chip Cup Cake', 300.00, 'sq-chocolicious-choco-chip-cup-cake-cupc2487choc-AB.png'),
(41, 'Cup Cakes', 'Enticing V Day Cup Cakes 6 Pcs', 2600.00, 'enticing-v-day-cup-cakes-cupc3192flav-A.png'),
(42, 'Cup Cakes', 'Heavenly Red Velvet Cupcake', 300.00, 'sq-heavenly-red-velvet-cupcake-cupc2488redv-AB.png'),
(43, 'Cup Cakes', 'Quirky Six Yummy Chocolate Cupcakes', 2500.00, 'quirky-six-yummy-chocolate-cupcakes-cupc3386choc-A.png'),
(44, 'Cup Cakes', 'Six Lovebirds Chocolate Cupcakes', 2500.00, 'six-lovebirds-chocolate-cupcakes-cupc3385choc-A.png'),
(45, 'Cup Cakes', 'Kitkat Cupcakes', 350.00, 'kitkat-cupcakes-cupc4444kikat-AA.png'),
(46, 'Cup Cakes', 'Vanilla Coffee Infused Cupcakes', 300.00, 'sq-vanilla-coffee-infused-cupcakes-cupc2486coff-AB.png'),
(47, 'Cup Cakes', 'Dripping Blueberry Cupcake', 300.00, 'sq-blueberry-cupcake-topped-with-cream-sprinkles-cupc2485blue-A_0.png'),
(48, 'Cup Cakes', 'Little Bites Of Love Cupcakes', 2100.00, 'little-bites-of-love-vanilla-cupcakes-cupc3182vani-A.png'),
(49, 'Cup Cakes', 'Delightful Vanilla Flavored Cupcake', 280.00, 'sq-delightful-vanilla-flavored-cupcake-cupc2484vani-A_0.png'),
(50, 'Cup Cakes', 'Set Of 6 Multi Flavored Cupcakes', 2100.00, 'sq-set-of-6-multi-flavored-cupcakes-cupc1773flav-A_2.png'),
(51, 'Cup Cakes', 'Chocolate Cupcake Swirl Frosting', 300.00, 'sq-choco-decadence-cupcakes-cupc1636choc-A_0.png'),
(52, 'Cup Cakes', 'Happy Birthday Personalised Cupcakes 2 Pieces', 850.00, 'sq-happy-birthday-personalised-cupcakes-2-pieces-cupc1320flav-A_0.png'),
(53, 'Cup Cakes', 'Personalised Birthday Cupcakes', 2100.00, 'sq-personalised-birthday-cupcakes-cupc1742flav-A_1.png'),
(54, 'Cup Cakes', 'Red Velvet Jar Cake 200 ml N Coffee Cupcake', 1450.00, 'sq-red-velvet-jar-cake-200-ml-n-coffee-cupcake-cupc2205redv-A_1.png'),
(55, 'Cup Cakes', 'Blueberry Jar Cakes 200 ml with Red Velvet Cupcakes', 1650.00, 'sq-blueberry-jar-cakes-200-ml-with-red-velvet-cupcakes-cupc2201redv-A_1.png'),
(56, 'Cup Cakes', '6 Blueberry Pineapple Vanilla Cupcakes', 1950.00, 'sq-6-blueberry-pineapple-vanilla-cupcakes-cupc1777flav-A_0.png'),
(57, 'Cup Cakes', 'Love You Baby Custom Cupcakes', 2350.00, 'sq-love-you-baby-custom-cupcakes-cupc1744flav-A_0.png'),
(58, 'Cup Cakes', 'Personalised Birthday Cupcakes 2 Pieces', 550.00, 'sq-cupcakeersonalised-birthday-cupcakes-2-pieces-cupc1318flav-A_1.png'),
(59, 'Cup Cakes', 'Choco Chip Cupcake', 300.00, 'sq-overloaded-choco-cupcake-cupc0189choc-A_1.png'),
(60, 'Cup Cakes', 'Personalised Anniversary Cupcakes Set', 2350.00, 'sq-personalised-anniversary-cupcakes-set-cupc1741flav-A_0.png'),
(61, 'Cup Cakes', 'Red Velvet Cupcake', 300.00, 'sq-radiant-red-velvet-cupcake-cupc0200redv-A_1.png'),
(62, 'Cup Cakes', 'Pineapple Cupcake', 280.00, 'sq-cupcakeineapple-love-cupc0198-pine-A_0.png'),
(63, 'Cup Cakes', 'Oreo Cream Cupcake', 300.00, 'sq-cupcakealatable-oreo-cupcake-cupc0184vaor-A_0.png'),
(64, 'Cup Cakes', 'Set Of 6 Chocolate Cupcakes For Bro', 1550.00, 'sq-set-of-6-chocolate-cupcakes-for-bro-cupc1674choc-A_0.png'),
(65, 'Cup Cakes', 'Chocolate Cupcake With Sprinkles N Gems', 300.00, 'sq-chocolaty-roller-coaster-ride-cupc0201choc-A_0.png'),
(66, 'Cup Cakes', 'Double Chocolate Cupcake', 300.00, 'sq-showstopper-choco-cupcake-cupc0193choc-A_0.png'),
(67, 'Cup Cakes', 'Set Of 6 Chocolate Choco Chips & Oreo Cup Cakes', 1900.00, 'sq-set-of-6-oreo-cup-cakes-cupc1774flav-A_0.png'),
(68, 'Cup Cakes', 'Funfetti Vanilla Cupcake', 280.00, 'sq-cupcakeineapple-love-cupc0198-pine-A_0.png'),
(69, 'Cup Cakes', 'Chocolate Glaze Cupcake', 300.00, 'sq-relishing-chocolate-swirls-cupc0179choc-A_0.png'),
(70, 'Cup Cakes', 'Cute Strawberry Cupcake', 590.00, 'sq-yummy-pink-beauty-cupc0199stra-A_0.png'),
(71, 'Cup Cakes', 'Bunnilicious Vanilla Cupcake Duo', 750.00, 'bunnilicious-vanilla-cupcake-duo-cupc3288vani-A.png'),
(72, 'Cup Cakes', 'Set Of 6 Chocolate Cupcakes For Mom', 2600.00, 'sq-set-of-6-chocolate-cupcakes-for-mom-cupc1673choc-A_0.png'),
(73, 'Cookies', 'Choco Chip Cookies', 450.00, 'crumbly-choco-chip-cookies-coo2731choco-AA.png'),
(75, 'Cookies', 'Wholesome Corn Cookies', 450.00, 'wholesome-corn-cookies-coo2733corn-AA.png'),
(76, 'Cookies', 'Handmade Almond Cookies', 850.00, 'handmade-almond-cookies-coo2730alm-AAA.png'),
(77, 'Cookies', 'Coconut Cookies', 650.00, 'real-coconut-cookies-coo2732coco-AA.png'),
(78, 'Cookies', 'Multi Grain Cookies', 650.00, 'multi-grain-cookies-coo4069flav-AAA.png'),
(79, 'Cookies', 'Crunchy Ginger Cookies 120gm', 600.00, 'crunchy-ginger-cookies-coo4447ginger-A.png'),
(80, 'Cookies', 'Crispy Jeera Cookies 150gm', 600.00, 'crispy-jeera-cookies-coo4058jeer-a_2.png'),
(81, 'Cookies', 'Pista Cookies 150gm', 700.00, 'pista cookies 150gm-cook4333pista-AA.png'),
(83, 'Pastries', 'Chocolate Truffle Pastry', 270.00, 'tasty-chocolate-truffle-past0162choc-AAA_0.png'),
(84, 'Pastries', 'Sweet N Fresh Pineapple Pastry', 270.00, 'squ-sweet-n-fresh-pineapple-pastry-past2505pine-E.png'),
(85, 'Pastries', 'Set of Two Happy Birthday Pastry', 620.00, 'sq-set-of-two-happy-birthday-pastry-past2345choc-A_0.png'),
(86, 'Pastries', 'Strawberry Baked Cheesecake Slice', 700.00, 'strawberry-baked-cheesecake-slice-past3621stra-AA_0.png'),
(87, 'Pastries', 'Pistachio Tres Leches Cake', 900.00, 'pistachio-tres-leches-cake-tresleches4215-AA.png'),
(88, 'Pastries', 'Butterscotch Pastries', 270.00, 'enchanting-butterscotch-pastries-past0213butt-AAA.png'),
(89, 'Pastries', 'Red Velvet Pastry', 270.00, 'mouth-watering-red-velvet-past0163redv-AAA.png'),
(90, 'Pastries', 'Blueberry Cheese Pastry', 750.00, 'blueberry-cheese-pastry-past1723blue-AA.png'),
(91, 'Pastries', 'Strawberry Pastries', 390.00, 'strawberry-pastries-past3620stra-AA.png'),
(92, 'Pastries', 'Rose Tres Leches Cake', 810.00, 'rose-tres-leches-cake-tresleches4212-AA_2.png'),
(93, 'Pastries', 'Kit Kat Pastries', 270.00, 'scrumptious-kit-kat-pastries-past0211choc-AAA_0.png'),
(94, 'Pastries', 'Biscoff Baked Cheesecake Slice', 720.00, 'biscoff-baked-cheesecake-slice-past4381biscoff-A.png'),
(95, 'Pastries', 'Black Forest Pastry', 270.00, 'extravagant-blackforest-past0159blac-AAA.png'),
(96, 'Pastries', 'Choco Chip Pastries', 270.00, 'sq-overwhelming-choco-chip-pastries-past0208choc-AAA.png'),
(97, 'Pastries', 'Oreo Bake Cheesecake Slice', 720.00, 'oreo-bake-cheesecake-slice-past4382oreo-AA.png'),
(98, 'Pastries', 'New York Bake Cheesecake Slice', 540.00, 'new-york-bake-cheesecake-slice-past4309chesse-A.png'),
(99, 'Pastries', 'Six Pineapple Chocolate and Red Velvet Anniversary Pastries', 1950.00, 'sq-six-pineapple-chocolate-and-red-velvet-anniversary-pastries-past2341flav-A_1.png'),
(100, 'Pastries', 'Crunch Topped Cheesecake Pastry', 750.00, 'crunch-topped-cheesecake-pastry-past2866ches-A.png'),
(101, 'Pastries', 'Anniversary Pastry Red Velvet', 690.00, 'sq-anniversary-pastry-red-velvet-past2342redv-A_0.png'),
(102, 'Pastries', 'Nutella Cheesecake Pastry', 690.00, 'spongy-nutella-pastry-past3005nute-A.png'),
(104, 'Pastries', 'Drool Worthy Chocolate and Butterscotch Pastries', 1100.00, 'sq-drool-worthy-chocolate-and-butterscotch-pateries-past2344flav-A_0.png'),
(105, 'Pastries', 'Red Velvet Pineapple Butterscotch Pastries Combo', 1680.00, 'sq-red-velvet-pineapple-butterscotch-pastries-combo-past2308flav-A_1.png'),
(106, 'Pastries', '3 In 1 Pack Of Red Velvet Black And White Forest Pastries', 1680.00, 'sq-3-in-1-pack-of-red-velvet-black-and-white-forest-pastries-past2309flav-A_0.png'),
(107, 'Pastries', 'Assorted Velvet Pineapple Truffle Pastries', 1680.00, 'sq-assorted-velvet-pineapple-truffle-pastries-past2307flav-A_1.png'),
(108, 'Pastries', 'Chocolate Truffle Pastry 3 Pcs', 900.00, 'chocolate-truffle-pastry-past3474choc-A.png'),
(109, 'Pastries', 'Six Assorted Red Velvet Chocolate and White Forest Pastries', 1950.00, 'sq-six-assorted-red-velvet-chocolate-and-pineapple-pastries-past2343flav-A_0.png'),
(110, 'Pastries', 'Choco Chip Truffle N Kit Kat Delight Pastries', 2050.00, 'sq-choco-chip-truffle-n-kit-kat-delight-pastries-past2310flav-A_0.png'),
(111, 'Pastries', 'Trio Chocolate Mousse 100ml', 390.00, 'magical-trio-mousse-past2862choc-A.png'),
(112, 'Pastries', 'Candied Caramel Mousse', 600.00, 'candied-caramel-mousse-past2864carm-A.png'),
(113, 'Pastries', 'Filter Coffee Mousse 100ml Each', 540.00, 'rich-choco-filter-coffee-mousse-past2867choc-A.png'),
(114, 'Muffins', 'Chocolate Chip Muffins', 350.00, 'chocolate-chip-muffins-vertical-1545482594.png'),
(115, 'Muffins', 'Blueberry Yogurt Mini Muffins', 550.00, 'delish-blueberry-yoguret-mini-muffins-pin-1547834788.png'),
(116, 'Muffins', 'Lemon Poppy Seed Muffins', 350.00, 'delish-lemon-poppy-seed-muffins-still003-1552395349.png'),
(117, 'Muffins', 'Blueberry Glazed Donut Muffins', 550.00, 'delish-blueberry-glazed-doughnut-muffins-pinterest-still002-1588874056.png'),
(118, 'Muffins', 'Classic Blueberry Muffins', 450.00, '1494454750-blueberry-muffins-pinterest-1-1024.png'),
(119, 'Muffins', 'Pecan Pie Muffins', 550.00, 'pecan-pie-muffins-vertical-1538169080.png'),
(120, 'Muffins', 'Carrot Cake Muffins', 480.00, 'delish-carrot-cake-muffins-still002-1553527691.png'),
(121, 'Muffins', 'Honey Butter Cornbread Muffins', 550.00, 'delish-hosted-maple-butter-corn-bread-still001-1644523499.png'),
(122, 'Muffins', 'Gingerbread Muffins with Maple-Cinnamon Glaze', 600.00, 'delish-food-lion-gingerbread-muffins-still002-1636479441.png'),
(123, 'Muffins', 'Brown Butter Bran Muffins', 520.00, 'bran-muffins-4-jpg-1626289879.png'),
(124, 'Muffins', 'Easy Applesauce Muffins', 480.00, 'delish-apple-sauce-muffins-093021-05-jg-1634049732.png'),
(125, 'Muffins', 'Stuffin Muffins', 720.00, '1479164487-delish-stuffin-muffins-pin-02.png'),
(126, 'Muffins', 'Churro Mini Muffins', 450.00, 'gallery-1472763229-delish-churro-mini-muffins-pin-2.png'),
(127, 'Muffins', 'Healthy Pumpkin Muffins', 500.00, 'singleimagebug-healthy-pumpkin-muffins-1564609445.png'),
(128, 'Muffins', 'Keto Double Chocolate Muffins', 550.00, '20200429-keto-double-chocolate-muffins-delish-ehg-10408-lo-1634842143.png'),
(129, 'Muffins', 'Apple Cinnamon Muffins', 400.00, 'delish-091621-apple-cinnamon-muffins-03-jg-1632846306.png'),
(130, 'Muffins', 'Keto Blueberry Muffins', 450.00, 'delish-keto-blueberry-muffins-033-1543600110.png'),
(131, 'Muffins', 'Banana Nut Muffins', 380.00, '200618-delish-banana-nut-muffins-vertical-2-14700-eb-1593466103.png'),
(132, 'Muffins', 'Strawberry Muffins', 450.00, 'strawberry-muffins1-1649266844.png'),
(133, 'Jar Cakes', 'Belgian Chocolate Mousse Jar Cake', 660.00, 'belgian-chocolate-mousse-jar-cake-jar4066beli-AA.png'),
(134, 'Jar Cakes', 'Red Velvet N Oreo Chocolate Jar Cakes', 1200.00, 'red-velvet-and-oreo-chocolate-jar-cakes-jar3761toi-A_0.png'),
(135, 'Jar Cakes', 'Chocochips And Oreo Jar Cake Combo', 900.00, 'sq-chocochips-oreo-jar-cake-jar249chocoreo-AA.png'),
(136, 'Jar Cakes', 'Strawberry Jar Cake', 450.00, 'strawberry-jar-cake-jar3623stra-BB.png'),
(137, 'Jar Cakes', 'Red Velvet Single Jar Cake', 750.00, 'red-velvet-single-jar-cake-jar1288redv-AAA.png'),
(138, 'Jar Cakes', 'Personalised Bday Red Velvet Jar Cakes', 1200.00, 'sq-personalised-bday-red-velvet-jar-cakes-jar245redv-AA_0.png'),
(139, 'Jar Cakes', 'Choco Mud Jar Cake', 450.00, 'choco-mud-single-jar-cake-jar3543chocmum-AA.png'),
(140, 'Jar Cakes', 'Chocolate Mousse And Blueberry Jar Cake Combo', 900.00, 'sq-chocolate-mousse-blueberry-jar-cake-jar251chocblue-AA.png'),
(141, 'Jar Cakes', 'Biscoff Cheesecake Jar', 900.00, 'biscofflicious-cheese-jar-delight-jar3214bisc-BB_0.png'),
(142, 'Jar Cakes', 'Choco Crunch Jar Cake', 450.00, 'choco-crunch-jar-cake-jar4409crchoc-A.png'),
(143, 'Jar Cakes', 'Nutella Hazelnut Jar Cake', 780.00, 'hazynutty-goodness-jarcake-jar3213haze-AAA.png'),
(144, 'Jar Cakes', 'Choco-Chips And Fruit Jar Cake Combo', 900.00, 'sq-choco-chips-Cruit-jar-cake-combo-jar252chocfruit-AA.png'),
(145, 'Jar Cakes', 'Chocolate Single Jar Cake', 450.00, 'sq-6C-Chocolate-Jar-Cake-AAA.png'),
(146, 'Jar Cakes', 'Delicious Birthday Print Chocolate Jar Cake', 1200.00, 'sq-Aelicious-birthday-print-jar-cake-jar214choc-AA_0.png'),
(147, 'Jar Cakes', 'Butterscotch Single Jar Cake', 450.00, 'butterscotch-single-jar-cake-jar1290buttr-CC.png'),
(148, 'Jar Cakes', 'Banoffee Jar Cake Set', 900.00, 'banoffee-jar-cake-jarc0710exot-AA.png'),
(149, 'Jar Cakes', 'Set Of Two Custom Chocolate Jar Cakes', 1200.00, 'sq-set-of-two-custom-chocolate-jar-cakes-jar2141choc-AA.png'),
(150, 'Jar Cakes', 'Choco Chip Single Jar Cake', 450.00, 'sq-8E-Chocochip-Jar-Cake-AA.png'),
(151, 'Jar Cakes', 'Romantic Red Velvet Anniversary Photo Jar Cakes', 1200.00, 'sq-romantic-red-velvet-anniversary-jar-cakes-jar2139redv-AA.png'),
(152, 'Jar Cakes', 'Blueberry Single Jar Cake', 450.00, 'blueberry-single-jar-cake-jar1285bluebr-CC.png'),
(153, 'Jar Cakes', 'Fruit Jar Cake Set of 2', 900.00, 'fruit-single-jar-cake-jar1286fruit-BBB.png'),
(154, 'Jar Cakes', 'Oreo Single Jar Cake', 450.00, 'sq-Oreo-Jar-Cake-3-CC.png'),
(155, 'Jar Cakes', 'Two Red Velvet Jar Cake', 900.00, 'red-velvet-jar-cake-jar2055redv-AA_0.png'),
(156, 'Jar Cakes', 'Fruit Single Jar Cake', 450.00, 'fruit-single-jar-cake-jar1286fruit-BB.png'),
(157, 'Jar Cakes', 'Two Blueberry Jar cake', 900.00, 'blueberry-jar-cake-jar2058blue-BB.png'),
(158, 'Jar Cakes', 'Chocolate Mousse Single Jar Cake', 450.00, 'sq-2E-Chocolate_Mousse-Jar-Cake-AA.png'),
(159, 'Jar Cakes', 'Two Chocolate Mousse Jar Cake', 900.00, 'sq-chocolate-mousse-blueberry-jar-cake-jar251chocblue-AA.png'),
(160, 'Jar Cakes', 'Two Oreo Jar Cake', 900.00, 'oreo-jar-cake-jar2057oreo-BBB.png'),
(161, 'Jar Cakes', 'Two Birthday Personalised Chocolate Jar Cakes', 1200.00, 'sq-two-birthday-personalised-chocolate-jar-cakes-jar247choc-AA.png'),
(162, 'Jar Cakes', 'Loving Couple Red Velvet Jar Cake Duo', 1200.00, 'loving-couple-red-velvet-jar-cake-duo-jar3384redv-A.png'),
(163, 'Jar Cakes', 'Decadent Chocolate Jar Cake Duo', 1200.00, 'decadent-chocolate-jar-cake-duo-jar3382choc-A.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `sweetsproducts`
--
ALTER TABLE `sweetsproducts`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `sweetsproducts`
--
ALTER TABLE `sweetsproducts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=164;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
