-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 15, 2017 at 06:45 AM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `orderly`
--

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `ID` int(11) NOT NULL,
  `OrderNumber` varchar(11) NOT NULL,
  `ProviderID` int(11) NOT NULL,
  `Details` varchar(65000) NOT NULL,
  `UserCreationID` int(11) NOT NULL,
  `DateCreation` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `UserSentID` int(11) DEFAULT NULL,
  `DateSent` date DEFAULT NULL,
  `Comment` varchar(256) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`ID`, `OrderNumber`, `ProviderID`, `Details`, `UserCreationID`, `DateCreation`, `UserSentID`, `DateSent`, `Comment`) VALUES
(1, 'LXE17-1', 79, 'a:44:{i:0;a:2:{s:1:"P";s:3:"153";s:1:"N";s:1:"3";}i:1;a:2:{s:1:"P";s:3:"154";s:1:"N";s:1:"5";}i:2;a:2:{s:1:"P";s:3:"155";s:1:"N";s:1:"1";}i:3;a:2:{s:1:"P";s:3:"185";s:1:"N";s:1:"1";}i:4;a:2:{s:1:"P";s:3:"217";s:1:"N";s:1:"2";}i:5;a:2:{s:1:"P";s:3:"186";s:1:"N";s:1:"4";}i:6;a:2:{s:1:"P";s:3:"192";s:1:"N";s:1:"1";}i:7;a:2:{s:1:"P";s:3:"156";s:1:"N";s:1:"1";}i:8;a:2:{s:1:"P";s:3:"157";s:1:"N";s:1:"2";}i:9;a:2:{s:1:"P";s:3:"220";s:1:"N";s:1:"3";}i:10;a:2:{s:1:"P";s:3:"221";s:1:"N";s:1:"1";}i:11;a:2:{s:1:"P";s:3:"227";s:1:"N";s:1:"1";}i:12;a:2:{s:1:"P";s:3:"158";s:1:"N";s:1:"1";}i:13;a:2:{s:1:"P";s:3:"187";s:1:"N";s:1:"3";}i:14;a:2:{s:1:"P";s:3:"188";s:1:"N";s:1:"1";}i:15;a:2:{s:1:"P";s:3:"159";s:1:"N";s:1:"2";}i:16;a:2:{s:1:"P";s:3:"189";s:1:"N";s:1:"6";}i:17;a:2:{s:1:"P";s:3:"160";s:1:"N";s:1:"1";}i:18;a:2:{s:1:"P";s:3:"161";s:1:"N";s:1:"1";}i:19;a:2:{s:1:"P";s:3:"162";s:1:"N";s:1:"4";}i:20;a:2:{s:1:"P";s:3:"163";s:1:"N";s:1:"1";}i:21;a:2:{s:1:"P";s:3:"164";s:1:"N";s:1:"1";}i:22;a:2:{s:1:"P";s:3:"165";s:1:"N";s:1:"3";}i:23;a:2:{s:1:"P";s:3:"166";s:1:"N";s:1:"1";}i:24;a:2:{s:1:"P";s:3:"167";s:1:"N";s:1:"1";}i:25;a:2:{s:1:"P";s:3:"168";s:1:"N";s:1:"3";}i:26;a:2:{s:1:"P";s:3:"190";s:1:"N";s:1:"1";}i:27;a:2:{s:1:"P";s:3:"218";s:1:"N";s:1:"3";}i:28;a:2:{s:1:"P";s:3:"169";s:1:"N";s:1:"1";}i:29;a:2:{s:1:"P";s:3:"191";s:1:"N";s:1:"1";}i:30;a:2:{s:1:"P";s:3:"170";s:1:"N";s:1:"1";}i:31;a:2:{s:1:"P";s:3:"171";s:1:"N";s:1:"3";}i:32;a:2:{s:1:"P";s:3:"172";s:1:"N";s:1:"1";}i:33;a:2:{s:1:"P";s:3:"173";s:1:"N";s:1:"1";}i:34;a:2:{s:1:"P";s:3:"174";s:1:"N";s:1:"4";}i:35;a:2:{s:1:"P";s:3:"175";s:1:"N";s:1:"4";}i:36;a:2:{s:1:"P";s:3:"176";s:1:"N";s:1:"1";}i:37;a:2:{s:1:"P";s:3:"178";s:1:"N";s:1:"1";}i:38;a:2:{s:1:"P";s:3:"179";s:1:"N";s:1:"2";}i:39;a:2:{s:1:"P";s:3:"182";s:1:"N";s:1:"1";}i:40;a:2:{s:1:"P";s:3:"180";s:1:"N";s:1:"1";}i:41;a:2:{s:1:"P";s:3:"181";s:1:"N";s:1:"2";}i:42;a:2:{s:1:"P";s:3:"184";s:1:"N";s:1:"1";}i:43;a:2:{s:1:"P";s:3:"219";s:1:"N";s:1:"1";}}', 1, '2017-02-22 11:54:43', 2, '2017-02-27', 'prova commento'),
(2, 'LXE17-2', 65, 'a:2:{i:0;a:2:{s:1:"P";s:2:"43";s:1:"N";s:1:"3";}i:1;a:2:{s:1:"P";s:2:"44";s:1:"N";s:1:"1";}}', 1, '2017-02-23 10:06:57', 1, '2017-02-28', 'prova'),
(3, 'LXE17-3', 65, 'a:1:{i:0;a:2:{s:1:"P";s:2:"44";s:1:"N";s:1:"1";}}', 1, '2017-02-27 22:35:24', 17, '2017-02-28', NULL),
(4, 'LXE17-4', 91, 'a:3:{i:0;a:2:{s:1:"P";s:3:"216";s:1:"N";s:1:"4";}i:1;a:2:{s:1:"P";s:3:"215";s:1:"N";s:2:"10";}i:2;a:2:{s:1:"P";s:3:"214";s:1:"N";s:1:"1";}}', 1, '2017-02-27 23:25:40', NULL, NULL, NULL),
(5, 'LXE17-5', 70, 'a:6:{i:0;a:2:{s:1:"P";s:3:"208";s:1:"N";s:1:"1";}i:1;a:2:{s:1:"P";s:3:"209";s:1:"N";s:1:"2";}i:2;a:2:{s:1:"P";s:3:"210";s:1:"N";s:1:"2";}i:3;a:2:{s:1:"P";s:3:"211";s:1:"N";s:1:"2";}i:4;a:2:{s:1:"P";s:3:"212";s:1:"N";s:1:"1";}i:5;a:2:{s:1:"P";s:3:"213";s:1:"N";s:1:"1";}}', 1, '2017-03-13 05:02:34', NULL, NULL, NULL),
(6, 'LXE17-6', 76, 'a:3:{i:0;a:2:{s:1:"P";s:2:"69";s:1:"N";s:1:"3";}i:1;a:2:{s:1:"P";s:2:"70";s:1:"N";s:1:"2";}i:2;a:2:{s:1:"P";s:2:"71";s:1:"N";s:1:"2";}}', 1, '2017-03-13 05:05:05', NULL, NULL, NULL),
(7, 'LXE17-7', 80, 'a:1:{i:0;a:2:{s:1:"P";s:2:"85";s:1:"N";s:1:"9";}}', 1, '2017-03-13 05:05:12', NULL, NULL, NULL),
(8, 'LXE17-8', 84, 'a:13:{i:0;a:2:{s:1:"P";s:3:"140";s:1:"N";s:1:"1";}i:1;a:2:{s:1:"P";s:3:"222";s:1:"N";s:1:"1";}i:2;a:2:{s:1:"P";s:3:"223";s:1:"N";s:1:"1";}i:3;a:2:{s:1:"P";s:3:"127";s:1:"N";s:1:"1";}i:4;a:2:{s:1:"P";s:3:"139";s:1:"N";s:1:"1";}i:5;a:2:{s:1:"P";s:3:"133";s:1:"N";s:1:"1";}i:6;a:2:{s:1:"P";s:3:"143";s:1:"N";s:1:"1";}i:7;a:2:{s:1:"P";s:3:"144";s:1:"N";s:1:"1";}i:8;a:2:{s:1:"P";s:3:"151";s:1:"N";s:1:"1";}i:9;a:2:{s:1:"P";s:3:"150";s:1:"N";s:1:"1";}i:10;a:2:{s:1:"P";s:3:"129";s:1:"N";s:1:"4";}i:11;a:2:{s:1:"P";s:3:"134";s:1:"N";s:1:"4";}i:12;a:2:{s:1:"P";s:3:"145";s:1:"N";s:1:"8";}}', 1, '2017-03-13 05:05:54', NULL, NULL, NULL),
(9, 'LXE17-9', 83, 'a:2:{i:0;a:2:{s:1:"P";s:2:"87";s:1:"N";s:1:"1";}i:1;a:2:{s:1:"P";s:2:"88";s:1:"N";s:1:"4";}}', 1, '2017-03-13 05:06:06', NULL, NULL, NULL),
(10, 'LXE17-10', 73, 'a:3:{i:0;a:2:{s:1:"P";s:2:"64";s:1:"N";s:1:"1";}i:1;a:2:{s:1:"P";s:2:"60";s:1:"N";s:1:"4";}i:2;a:2:{s:1:"P";s:2:"59";s:1:"N";s:1:"3";}}', 1, '2017-03-13 05:06:18', NULL, NULL, NULL),
(11, 'LXE17-11', 64, 'a:2:{i:0;a:2:{s:1:"P";s:3:"152";s:1:"N";s:1:"1";}i:1;a:2:{s:1:"P";s:2:"41";s:1:"N";s:1:"2";}}', 1, '2017-03-13 05:06:28', NULL, NULL, NULL),
(12, 'LXE17-12', 67, 'a:1:{i:0;a:2:{s:1:"P";s:2:"51";s:1:"N";s:1:"4";}}', 1, '2017-03-13 05:06:37', NULL, NULL, NULL),
(13, 'LXE17-13', 77, 'a:2:{i:0;a:2:{s:1:"P";s:2:"73";s:1:"N";s:1:"1";}i:1;a:2:{s:1:"P";s:2:"72";s:1:"N";s:1:"1";}}', 1, '2017-03-13 05:06:46', NULL, NULL, NULL),
(14, 'LXE17-14', 65, 'a:1:{i:0;a:2:{s:1:"P";s:2:"44";s:1:"N";s:1:"1";}}', 1, '2017-03-13 11:48:27', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `provider` varchar(100) CHARACTER SET latin1 COLLATE latin1_general_cs NOT NULL,
  `name` varchar(50) CHARACTER SET latin1 COLLATE latin1_general_cs DEFAULT NULL,
  `stored` decimal(3,0) DEFAULT NULL,
  `unit` varchar(50) CHARACTER SET latin1 COLLATE latin1_general_cs NOT NULL,
  `description` varchar(100) CHARACTER SET latin1 COLLATE latin1_general_cs DEFAULT NULL,
  `pcode` varchar(50) CHARACTER SET latin1 COLLATE latin1_general_cs NOT NULL,
  `packageN` int(5) NOT NULL DEFAULT '1',
  `MinStored` int(5) NOT NULL,
  `mode` varchar(1) CHARACTER SET latin1 COLLATE latin1_general_cs NOT NULL,
  `hide` varchar(1) CHARACTER SET latin1 COLLATE latin1_general_cs DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `provider`, `name`, `stored`, `unit`, `description`, `pcode`, `packageN`, `MinStored`, `mode`, `hide`) VALUES
(41, 'Tmf food milk', 'Full cream milk', '27', 'Crate ', 'Bottle', '', 9, 12, 'd', 'v'),
(42, 'Tmf food milk', 'Light white milk', '27', 'Crate', 'Bottle', '', 9, 12, 'd', 'v'),
(43, 'Black gold cacao', 'Chai powder', '3', ' Bags', '', '', 1, 1, 'd', 'v'),
(44, 'Black gold cacao', 'Chocolate powder', '16', 'Box', 'Bags', '', 11, 6, 'd', 'v'),
(45, 'Red rock add water capi', 'Add water', '40', 'Case', 'Cases', '', 1, 30, 'd', 'v'),
(46, 'Red rock add water capi', 'Capi lemonade', '30', '', 'Bottles', '', 1, 0, 'd', 'h'),
(47, 'Red rock add water capi', 'Capi cranberry', '30', '', 'Bottles', '', 1, 0, 'd', 'h'),
(48, 'Red rock add water capi', 'Capi ginger beer', '30', '', 'Bottle', '', 1, 0, 'd', 'h'),
(49, 'Red rock add water capi', 'Capi blood orange ', '30', '', 'Bottles ', '', 1, 0, 'd', 'h'),
(50, 'Wine glasses', 'Luxe wine glasses ', '50', '', 'Glasses ', '', 1, 0, 'd', 'h'),
(51, 'Wine glasses', 'Luxe wine glass', '54', 'Box', 'Glass', '', 12, 20, 'd', 'v'),
(52, 'Coopers glasses', 'Coopers glasses ', '20', 'Box', 'Glasses', '', 5, 10, 'd', 'v'),
(53, 'Luxe coffee', 'Coffee ', '6', 'Box x 12kg', 'Box', '', 1, 6, 'd', 'v'),
(54, 'Luxe coffee', 'Decaf coffee', '4', 'Bags X 500gr', 'Bags', '', 1, 4, 'd', 'v'),
(55, 'Luxe coffee', 'Caramel syrup', '2', '', 'Litres', '', 1, 0, 'd', 'v'),
(56, 'Luxe coffee', 'Vanilla syrup', '2', '', 'Litres', '', 1, 0, 'd', 'v'),
(1, 'Apani Sparklin Water', 'Apani sparkling water', '25', 'Cases', '', '', 1, 6, 'd', 'v'),
(58, 'Smoney brewery cider', 'Sydney cider', '48', 'Box', 'Bottles ', '', 24, 10, 'd', 'v'),
(59, 'Somage tea', 'English breakfast ', '4', 'Bag', 'Bag', '', 1, 2, 'd', 'v'),
(60, 'Somage tea', 'Earl grey', '4', 'Bag', 'Bag', '', 1, 2, 'd', 'v'),
(61, 'Somage tea', 'Peppermint ', '1', 'Bag', 'Bag', '', 1, 1, 'd', 'v'),
(62, 'Somage tea', 'Lemongrass ', '1', 'Bag', 'Bag', '', 1, 1, 'd', 'v'),
(63, 'Somage tea', 'Chamomile ', '1', 'Bag', 'Bag', '', 1, 1, 'd', 'v'),
(64, 'Somage tea', 'China Sencha ', '1', 'Bag', 'Bag', '', 1, 1, 'd', 'v'),
(65, 'Somage tea', 'Liquorice ', '1', 'Bag', 'Bag', '', 1, 1, 'd', 'v'),
(66, 'Somage tea', 'Rooibos', '1', 'Bag', 'Bag', '', 1, 0, 'd', 'v'),
(67, 'Ilg coopers', '1221109 pale ale', '1', 'Keg', 'Kegs', '', 1, 1, 'd', 'v'),
(68, 'Spiral food soy milk', 'Bonsoy milk', '30', 'Carton', 'Carton', '', 1, 15, 'd', 'v'),
(69, 'Coca cola', 'Coca cola ', '4', 'Cases', 'Cases ', '', 1, 0, 'd', 'v'),
(70, 'Coca cola', 'Diet coke', '3', 'Cases', 'Cases ', '', 1, 0, 'd', 'v'),
(71, 'Coca cola', 'Zero coke', '3', 'Cases', 'Cases ', '', 1, 0, 'd', 'v'),
(72, 'Wine stock', 'Laurent Perrier  champagne ', '12', 'Case', 'Bottle', '', 6, 6, 'd', 'v'),
(73, 'Wine stock', 'A. Retief Shiraz ', '12', 'Case', 'Bottle', '', 6, 6, 'd', 'v'),
(74, 'Qed', 'Freeman Pinot Gris ', '12', 'Box', 'Bottles ', '', 6, 6, 'd', 'v'),
(75, 'Qed', 'Somah Chardonnay ', '12', 'Box', 'Bottles', '', 6, 6, 'd', 'v'),
(76, 'Qed', 'Ocuirc Sauvignon Blanc ', '24', 'Box', 'Bottles ', '', 11, 12, 'd', 'v'),
(77, 'Qed', 'Head red Nouveau ', '12', 'Box', 'Bottles ', '', 6, 6, 'd', 'v'),
(78, 'Qed', 'Head red Rose`', '12', 'Box', 'Bottles ', '', 6, 6, 'd', 'v'),
(79, 'Qed', 'Tmania Pinot Noir', '12', 'Box', 'Bottles ', '', 6, 6, 'd', 'v'),
(80, 'Grange meat', 'New York steak', '3', 'Whole fillet', '', '', 1, 0, 'd', 'v'),
(81, 'Grange meat', 'Ham ', '2', 'Whole ham', ' ', '', 1, 0, 'd', 'v'),
(85, 'Grange meat', 'Minced beef', '12', 'Kg', '', '', 1, 0, 'd', 'v'),
(86, 'Joto', 'Tassal Sliced smoked salmon 1kg', '7', 'Kg ', 'Kg', '', 1, 0, 'd', 'v'),
(87, 'Product distribution', 'Pickle ', '1', 'Bucket', 'Bucket', '', 1, 2, 'd', 'v'),
(88, 'Product distribution', 'Pickle relish ', '12', 'Box', 'Jar', '', 3, 6, 'd', 'v'),
(113, 'Peaches in cream', 'Kale', '20', 'Bunch', '', '', 1, 0, 'i', 'v'),
(91, 'Peaches in cream', 'Broccoli', '3', 'Box', '', '', 1, 0, 'i', 'v'),
(114, 'Peaches in cream', 'Garlic bulb', '1', 'GR 500', '', '', 1, 0, 'i', 'v'),
(93, 'Peaches in cream', 'Avocado', '3', 'Tray', '', '', 1, 0, 'i', 'v'),
(94, 'Peaches in cream', 'Rocket', '2', 'Box', '', '', 1, 0, 'i', 'v'),
(95, 'Peaches in cream', 'Shallot', '6', 'Bunch', '', '', 1, 0, 'i', 'v'),
(97, 'Peaches in cream', 'Brussel sprouts', '4', 'Box 5kg', '', '', 1, 0, 'i', 'h'),
(98, 'Peaches in cream', 'Green corale leaves', '20', 'Unit', '', '', 1, 0, 'i', 'v'),
(99, 'Peaches in cream', 'Red cabbage', '5', 'Unit', '', '', 1, 0, 'i', 'v'),
(102, 'Peaches in cream', 'Celery', '4', 'Bunch', '', '', 1, 0, 'i', 'v'),
(103, 'Peaches in cream', 'Roma tomatoes', '2', 'Box', '', '', 1, 0, 'i', 'v'),
(105, 'Peaches in cream', 'Button mushrooms', '1', 'Box', '', '', 1, 0, 'i', 'v'),
(106, 'Peaches in cream', 'Lemons', '1', 'Box', '', '', 1, 0, 'i', 'v'),
(107, 'Peaches in cream', 'Basil plant', '4', 'Unit', '', '', 1, 0, 'i', 'v'),
(108, 'Peaches in cream', 'Spanish onions', '3', 'Kg', '', '', 1, 0, 'i', 'v'),
(109, 'Peaches in cream', 'Rosemary', '2', 'Market bunch', '', '', 1, 0, 'i', 'v'),
(110, 'Peaches in cream', 'Red capsicum', '1', 'Box', '', '', 1, 0, 'i', 'h'),
(111, 'Peaches in cream', 'Yellow capsicum', '1', 'Box', '', '', 1, 0, 'i', 'v'),
(112, 'Peaches in cream', 'Carrots', '12', 'Kg', 'If you want to order a bag select 10kg', '', 1, 0, 'i', 'v'),
(115, 'Peaches in cream', 'White cabbage', '8', 'Unit', '', '', 1, 0, 'i', 'v'),
(116, 'Peaches in cream', 'White onion', '10', 'Kg', 'If you want to order a bag select 10kg', '', 1, 0, 'i', 'v'),
(117, 'Peaches in cream', 'Pumpkin jet peeled', '8', 'Kg', '', '', 1, 0, 'i', 'h'),
(118, 'Peaches in cream', 'Red sorrel', '1', 'Box', '', '', 1, 0, 'i', 'h'),
(119, 'Peaches in cream', 'Green beans', '10', 'Kg', '', '', 1, 0, 'i', 'v'),
(120, 'Peaches in cream', 'Cherry tomatoes', '12', 'Unit', '', '', 1, 0, 'i', 'v'),
(121, 'Peaches in cream', 'Washed potatoes', '10', 'Kg', '', '', 1, 0, 'i', 'v'),
(122, 'Peaches in cream', 'Eggplant', '12', 'Unit', '', '', 1, 0, 'i', 'v'),
(123, 'Peaches in cream', 'Apples red', '20', 'Unit', '', '', 1, 0, 'i', 'h'),
(124, 'Peaches in cream', 'Baby spinach', '2', 'Box', '', '', 1, 0, 'i', 'v'),
(125, 'Camillo Fana', 'Prova', '27', 'Unit', 'MinStored 12. Package 9. Stored 27', '', 9, 12, 'd', 'v'),
(126, 'Kent', 'Spray & wipe 5l -CLEANSPRAY5-', '1', 'Bottle', 'Bottle', 'Cleanspray5', 1, 1, 'd', 'v'),
(127, 'Kent', 'Dishwasher detergent 5l -CLEANWASH5-', '1', 'Bottle', 'Bottle ', '', 1, 1, 'd', 'v'),
(128, 'Kent', 'Black straws ', '1', 'Box', 'Order if 1/5 Box left ', '', 1, 0, 'd', 'v'),
(129, 'Kent', 'luxe paper bags x500 -BF04LUX-', '4', 'Packet', 'Packet', 'BF04LUX', 1, 2, 'd', 'v'),
(130, 'Kent', 'Tin foil', '1', 'Roll', 'Roll', 'FOILGP45', 1, 0, 'd', 'v'),
(131, 'Kent', 'Gloves Large', '25', 'Packet', 'Packet', 'GLOVELATEXL', 1, 12, 'd', 'v'),
(132, 'Kent', 'Manual dish detergent 5l', '1', 'Bottle ', 'Bottle ', 'CLEANDET5', 1, 1, 'd', 'v'),
(133, 'Kent', 'Floor cleaner 5l', '1', 'Bottle ', 'Bottle ', 'CLEANFLOOR5', 1, 1, 'd', 'v'),
(134, 'Kent', 'Plastic bags large', '4', 'Bag', 'Bag', '', 1, 2, 'd', 'v'),
(135, 'Kent', 'Sandwich wrap', '3', 'Packet', 'Packet', '', 1, 2, 'd', 'v'),
(136, 'Camillo Fana', 'Prova2', '27', 'Cases', 'MinStored 12. Package 9. Stored 27', '', 9, 12, 'i', 'v'),
(137, 'Kent', 'Quality luxe napkin', '4', 'Box', 'Box', '2DQLUXE', 1, 3, 'd', 'v'),
(138, 'Kent', 'White paper tray', '2', 'Packet', 'Packet', '', 1, 1, 'd', 'v'),
(139, 'Kent', 'Dishwasher rinseaid', '1', 'Bottle', 'Bottle', 'CLEANRINSE5', 1, 1, 'd', 'v'),
(140, 'Kent', 'Cheap luxe Napkin ', '1', 'Box', 'Box', '1LLUXE', 1, 1, 'd', 'v'),
(141, 'Kent', 'Scourers ', '4', 'Unit', 'Unit', 'SCOURERSS', 1, 2, 'd', 'v'),
(142, 'Kent', 'Sponges', '6', 'Unit', 'Unit', 'SCOURERSP', 1, 2, 'd', 'v'),
(143, 'Kent', 'Glass cleaner ', '1', 'Bottle', 'Bottle ', 'CLEANGLASS5', 1, 1, 'd', 'v'),
(144, 'Kent', 'Hand soup', '1', 'Bottle', 'Bottle', 'CLEANHAND5', 1, 1, 'd', 'v'),
(145, 'Kent', 'Plastic fork', '8', 'Packet', 'Packet', 'FORK', 1, 5, 'd', 'v'),
(146, 'Kent', 'Plastic spoon', '6', 'Packet', 'Packet', 'TSPOON', 1, 4, 'd', 'v'),
(147, 'Kent', 'Small salad container', '1', 'Box', 'Box', '', 1, 1, 'd', 'v'),
(148, 'Kent', 'Small salad lids', '1', 'Box', 'Box', '', 1, 1, 'd', 'v'),
(149, 'Kent', 'Large salad lids', '1', 'Box', 'Box', '', 1, 1, 'd', 'h'),
(150, 'Kent', 'Large salad lids', '1', 'Box', 'Box', '', 1, 1, 'd', 'v'),
(151, 'Kent', 'Large salad container', '1', 'Box', 'Box', '', 1, 1, 'd', 'v'),
(152, 'Tmf food milk', 'Almond milk', '9', 'Case', 'Bottle', '', 6, 3, 'd', 'v'),
(153, 'Two providores', 'Almonds flakes 1kg trumps', '3', 'Bag', 'Bag', '', 1, 2, 'd', 'v'),
(154, 'Two providores', 'Bag garbage 72-80L heavy duty', '6', 'Bag', 'Bag', '', 1, 4, 'd', 'v'),
(155, 'Two providores', 'Bbq sauce 4.7L masterfoods ', '1', 'Bottle', 'Bottle', '', 1, 1, 'd', 'v'),
(156, 'Two providores', 'Cottonseed oil 20L simply', '1', 'Bottle', 'Bottle', '', 1, 1, 'd', 'v'),
(157, 'Two providores', 'Cranberry dried sweet 1kg trumps', '3', 'Bag', 'Bag', '', 1, 2, 'd', 'v'),
(158, 'Two providores', 'Equal stick pencil 500 equal', '1', 'Box', 'Box', '', 1, 1, 'd', 'v'),
(159, 'Two providores', 'Grease proof paper 1/3 cut (CA-GP-THIRD) cast away', '2', 'Packet', 'Packet', '', 1, 1, 'd', 'v'),
(160, 'Two providores', 'Honey 3kg allowrie ', '1', 'Bottle ', 'Bottle ', '', 1, 1, 'd', 'v'),
(161, 'Two providores', 'Jam strawberry 2.5kg monbulk ', '1', 'Bucket', 'Bucket', '', 1, 1, 'd', 'v'),
(162, 'Two providores', 'Knife plastic black 100s costwise ', '5', 'Packet', 'Packet', '', 1, 3, 'd', 'v'),
(163, 'Two providores', 'Marshmallows mixed 500gr trumps', '1', 'Bag', 'Bag', '', 1, 1, 'd', 'v'),
(164, 'Two providores', 'Mustard- Dijon 5kg beaufor ', '1', 'Bucket', 'Bucket', '', 1, 1, 'd', 'v'),
(165, 'Two providores', 'Olive oil extra virgin 4l sandhurst', '4', 'Bottle', 'Bottle', '', 1, 3, 'd', 'v'),
(166, 'Two providores', 'Peanut butter smooth 2kg Kraft ', '1', 'Bucket', 'Bucket', '', 1, 1, 'd', 'v'),
(167, 'Two providores', 'Pepper whole black 400gr Krio krush', '1', 'Bucket', 'Bucket', '', 1, 1, 'd', 'v'),
(168, 'Two providores', 'Pine nuts medium 1kg', '3', 'Bag', 'Bag', '', 1, 2, 'd', 'v'),
(169, 'Two providores', 'Raw stick sugar 2500 CSR', '1', 'Box', 'Box', '', 1, 1, 'd', 'v'),
(170, 'Two providores', 'Sea salt table 14 kg olssons ', '1', 'Box', 'Box', '', 1, 1, 'd', 'v'),
(171, 'Two providores', 'Sesame seeds black 1kg frutex ', '4', 'Bucket', 'Bucket', '', 1, 3, 'd', 'v'),
(172, 'Two providores', 'Soy sauce (gluten free) 1,6L kikkoman ', '8', 'Box', 'Bottle', '', 6, 6, 'd', 'v'),
(173, 'Two providores', 'Tabasco sauce red 150ml Tabasco ', '1', 'Bottle', 'Bottle', '', 1, 1, 'd', 'v'),
(174, 'Two providores', 'Tahini paste 1kg green hill', '4', 'Bottle', 'Bottle', '', 1, 3, 'd', 'v'),
(175, 'Two providores', 'Tomato sauce 4L Heinz ', '4', 'Bottle', 'Bottle', '', 1, 3, 'd', 'v'),
(176, 'Two providores', 'Towel paper rolls 90Mx16 (PSHT90) prime source', '16', 'Box', 'Roll', '', 16, 10, 'd', 'v'),
(177, 'Two providores', 'Tuna in oil 425grx12 solemare ', '12', 'Box', 'Can', '', 12, 6, 'd', 'v'),
(178, 'Two providores', 'Vegemite 2.5kg Kraft ', '1', 'Bucket', 'Bucket', '', 1, 1, 'd', 'v'),
(179, 'Two providores', 'Vegetable oil 20L', '2', 'Bottle', 'Bottle', '', 1, 2, 'd', 'v'),
(180, 'Two providores', 'Vinegar balsamic 5L don cesure ', '1', 'Bottle', 'Bottle', '', 1, 1, 'd', 'v'),
(181, 'Two providores', 'Vinegar- cider apple 2L cornwell ', '2', 'Bottle', 'Bottle', '', 1, 2, 'd', 'v'),
(182, 'Two providores', 'Vinegar - White 20L edlyn ', '1', 'Bottle', 'Bottle', '', 1, 1, 'd', 'v'),
(183, 'Two providores', 'Walnut pieces & halves 1kg trumps', '3', 'Bag', 'Bag', '', 1, 2, 'd', 'h'),
(184, 'Two providores', 'White sugar 2kg CSR', '1', 'Box', 'Box', '', 1, 1, 'd', 'v'),
(185, 'Two providores', 'Butter portions 8gr x 200 western star ', '1', 'Box', 'Box', '', 1, 1, 'd', 'v'),
(186, 'Two providores', 'Cheddar mild block 2.4kg devondale ', '4', 'Block', 'Block', '', 1, 2, 'd', 'v'),
(187, 'Two providores', 'Goats cheese marinated 2kg Meredith ', '3', 'Bucket', 'Bucket', '', 1, 2, 'd', 'v'),
(188, 'Two providores', 'Grand Padano 16mnth 2kg aprx collato ', '1', 'Piece', 'Piece', '', 1, 1, 'd', 'v'),
(189, 'Two providores', 'Halloumi chefs 750gr cypriana ', '8', 'Block ', 'Block ', '', 1, 6, 'd', 'v'),
(190, 'Two providores', 'Provolone piccante 5kg auricchio ', '1', 'Piece', 'Piece', '', 1, 1, 'd', 'v'),
(191, 'Two providores', 'Ricotta fresh basket 2kg paesanella ', '1', 'Piece', 'Piece ', '', 1, 1, 'd', 'v'),
(192, 'Two providores', 'Chips- shoestring 15kg(202136) McCain ', '1', 'Box', 'Box', '', 1, 1, 'd', 'v'),
(193, 'Phoenix', 'Apple & guava ', '60', 'Box', 'Bottle', 'PO44-PACK', 20, 30, 'd', 'v'),
(194, 'Phoenix', 'Blood orange ', '60', 'Box', 'Bottle', 'PSM80-PACK', 20, 30, 'd', 'v'),
(195, 'Phoenix', 'Charlies apple sack ', '5', 'Box', 'Box', 'CKJ0202-SINGLE', 1, 5, 'd', 'v'),
(196, 'Phoenix', 'Charlies orange juice bottle ', '5', 'Box', 'Box', 'CJ0301-PACK', 1, 5, 'd', 'v'),
(197, 'Phoenix', 'Coconut water ', '4', 'Box', 'Box', 'CCK0351-PACK', 1, 4, 'd', 'v'),
(198, 'Phoenix', 'Cola', '60', 'Box', 'Bottle ', 'PS151-PACK', 20, 30, 'd', 'v'),
(199, 'Phoenix', 'Cranberry & lime ', '60', 'Box', 'Bottle', '', 20, 30, 'd', 'v'),
(200, 'Phoenix', 'Ginger beer', '60', 'Box', 'Bottle', '', 20, 30, 'd', 'v'),
(201, 'Phoenix', 'Lemonade ', '60', 'Box', 'Bottle ', 'CS153-PACK', 20, 30, 'd', 'v'),
(202, 'Phoenix', 'Lemon lime & bitter ', '60', 'Box', 'Bottle', 'PS154-PACK', 20, 30, 'd', 'v'),
(203, 'Phoenix', 'Orange Apple & mango ', '60', 'Box', 'Bottle ', '', 20, 30, 'd', 'v'),
(204, 'Phoenix', 'Charlies Apple bottle ', '4', 'Box', 'Box', 'CJ0302-PACK', 1, 4, 'd', 'v'),
(205, 'Phoenix', 'Charlies orange sack', '4', 'Box', 'Box', '', 1, 4, 'd', 'v'),
(206, 'Two providores', 'Raisins golden 500grgalaxy', '3', 'Bag', 'Bag', '', 1, 2, 'd', 'h'),
(207, 'Two providores', 'Cayenne pepper 500gr krio krush ', '1', 'Bucket', 'Bucket ', '', 1, 1, 'd', 'v'),
(208, 'Biopak', '12oz branded LUXE paper cup', '2', 'Box', 'Box', 'PCE-12-LUXE', 1, 2, 'd', 'v'),
(209, 'Biopak', '12oz white lids', '2', 'Box', 'Box', 'BCL-12PLA', 1, 2, 'd', 'v'),
(210, 'Biopak', '8oz branded luxe paper cup', '2', 'Box', 'Box', 'PCE-8-LUXE', 1, 2, 'd', 'v'),
(211, 'Biopak', '8oz white lids', '2', 'Box', 'Box', 'BCL-8PLA', 1, 2, 'd', 'v'),
(212, 'Biopak', 'Plastic Sauce cup', '1', 'Box ', 'Box', 'R/60', 1, 1, 'd', 'v'),
(213, 'Biopak', 'Plastic sauce lid', '1', 'Box', 'Box ', 'C/76', 1, 1, 'd', 'v'),
(214, 'BUSH FRESH MEAT ', 'Whole chicken breast', '16', '12 Kg', 'Kg', '', 12, 0, 'd', 'v'),
(215, 'BUSH FRESH MEAT ', 'Sliced chicken breast', '12', 'Kg', 'Kg', '', 1, 8, 'd', 'v'),
(216, 'BUSH FRESH MEAT ', 'Bacon', '4', 'Kg', 'Kg', '', 1, 3, 'd', 'v'),
(217, 'Two providores', 'Cashews unsalted roasted 1kg trumps', '3', 'Kg', 'Bag', '', 1, 3, 'd', 'v'),
(218, 'Two providores', 'Quinoa white 1kg trumps', '3', 'Kg', 'Bag', '', 1, 3, 'd', 'v'),
(219, 'Two providores', 'Worcestershire sauce 4l fountain', '1', 'Bottle', 'Bottle', '', 1, 1, 'd', 'v'),
(220, 'Two providores', 'Currants 1kg trumps', '3', 'Kg', 'Bag', '', 1, 3, 'd', 'v'),
(221, 'Two providores', 'Easy bake paper x40cm cast away', '1', 'Roll', 'Roll', '', 1, 1, 'd', 'v'),
(222, 'Kent', 'Coffee tray 2 cups ', '1', 'Line', 'Line', 'Carry2e', 1, 1, 'd', 'v'),
(223, 'Kent', 'Coffee tray 4 cups ', '1', 'Line', 'Line ', 'Carry4e', 1, 1, 'd', 'v'),
(224, 'Kent', 'T.a. Coffee spoon ', '6', 'Packet', 'Packet ', 'Tspoon', 1, 5, 'd', 'v'),
(225, 'Kent', 'Plastic water glasses ', '20', 'Packet', 'Packet', '6pl', 1, 15, 'd', 'v'),
(226, 'Kent', 'Gloves Small', '10', 'Packet ', 'Packet ', 'Glovelatexs', 1, 5, 'd', 'v'),
(227, 'Two providores', 'Equal stevia stick 300 crs ', '1', 'Box', 'Box', '', 1, 1, 'd', 'v');

-- --------------------------------------------------------

--
-- Table structure for table `supliers`
--

CREATE TABLE `supliers` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(64) NOT NULL,
  `phone` varchar(11) NOT NULL,
  `agent_name` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `supliers`
--

INSERT INTO `supliers` (`id`, `name`, `email`, `phone`, `agent_name`) VALUES
(68, 'Coopers glasses', 'kellie.palise@premiumbeverages.com.au', '', 'Kelly '),
(64, 'Tmf food milk', 'tmffoodservices@gmail.com', '45780431', 'John'),
(67, 'Wine glasses', 'customerservicensw@casama.com.au', '', 'Kelly '),
(65, 'Black gold cacao', 'blackgoldcacao@gmail.com', '404075713', 'Frank'),
(66, 'Red rock add water capi', 'sales@redrockbeverages.com.au', '96670078', 'Sylvie '),
(69, 'Luxe coffee', 'info@luxebakery.com.au', '', 'Bianca '),
(70, 'Biopak', 'sales@biopak.com.au', '8060', ''),
(71, 'Apani Sparklin Water', 'customerservice@vittoriacoffee.com', '', ''),
(72, 'Smoney brewery cider', 'Orders@sydneybrewery.com', '412288144', 'Richard '),
(73, 'Somage tea', 'orders@somage.com.au', '1300766243', ''),
(74, 'Ilg coopers', 'orders@ilg.com.au', '96758400', ''),
(75, 'Spiral food soy milk', 'adminsydney@spiralfoods.com.au', '82314400', ''),
(76, 'Coca cola', 'Danielle.Dounis@ccamatil.com', '417238399', 'Katie'),
(77, 'Wine stock', 'orders@winestock.com.au', '422226698', 'Emmanuel'),
(78, 'Qed', 'michael@qedwines.com.au', '406368727', 'Mark'),
(79, 'Two providores', 'orders@twoprovidores.com.au', '95652255', ''),
(80, 'Grange meat', 'costasmeats@bigpond.com', '2147483647', 'Joe'),
(81, 'Phoenix', 'duane.ibanez@soulfresh.com.au', '431689415', 'Duane'),
(82, 'Joto', 'orders@joto.com.au', '295570533', ''),
(83, 'Product distribution', 'sales@productdistribution.com.au', '438248374', 'Jane'),
(84, 'Kent', 'nick@kentpaper.com.au', '413129979', 'Nick'),
(86, 'Peaches in cream', 'Clafiona@hotmail.com', '425390948', 'Nathan'),
(91, 'BUSH FRESH MEAT ', 'ajbush55@yahoo.com.au', '93895064', '');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL COMMENT 'auto incrementing user_id of each user, unique index',
  `user_name` varchar(64) COLLATE utf8_unicode_ci NOT NULL COMMENT 'user''s name, unique',
  `user_password_hash` varchar(255) COLLATE utf8_unicode_ci NOT NULL COMMENT 'user''s password in salted and hashed format',
  `user_email` varchar(64) COLLATE utf8_unicode_ci NOT NULL COMMENT 'user''s email, unique',
  `administrator` varchar(3) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='user data';

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_name`, `user_password_hash`, `user_email`, `administrator`) VALUES
(1, 'camillo', '$2y$10$dThghRzdIAyGbLGFTl0oUOd2mtWqlyR2maQ6uWbYL5D5lCvOAa5N6', 'camillo.fana@gmail.com', 'yes'),
(2, 'Giacomo', '$2y$10$X/5gLLsSI692dEhFiM./L.9UvFja/eXp1iZfTWFRyYT66v7C2JeCm', 'giacomo.fana@gmail.com', 'yes'),
(19, 'Rona', '$2y$10$IDfcyK5jHTJExrPk4kSYteUSpcwK1qJJKYjQNpJ2Octj8wa6t6aqm', 'ronasturing@hotmail.com', ''),
(16, 'Francesca', '$2y$10$HMbGGeTYfVY4NJxtot3BtOvzefWgStUHKgxkWw7xpzgnK70vn61su', 'franci.orli@hotmail.com', ''),
(20, 'Natasha', '$2y$10$j8750KvFu/NLU0bXMBbi5.Aq50YK52AK48enGRdbLHpuPhcAHgxou', 'natinewman@gmail.com', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `id` (`ID`),
  ADD KEY `ProviderID` (`ProviderID`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `supliers`
--
ALTER TABLE `supliers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `user_name` (`user_name`),
  ADD UNIQUE KEY `user_email` (`user_email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=228;
--
-- AUTO_INCREMENT for table `supliers`
--
ALTER TABLE `supliers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=93;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'auto incrementing user_id of each user, unique index', AUTO_INCREMENT=21;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
