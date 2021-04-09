-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 09, 2021 at 01:39 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 7.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cybercom_creation`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `adminId` int(11) NOT NULL,
  `userName` varchar(30) NOT NULL,
  `password` varchar(40) NOT NULL,
  `status` varchar(15) NOT NULL,
  `createdDate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`adminId`, `userName`, `password`, `status`, `createdDate`) VALUES
(1, 'cdparikh24', '1234', 'enabled', '0000-00-00 00:00:00'),
(2, 'pparikh2480', '', 'disabled', '2021-03-12 10:06:15');

-- --------------------------------------------------------

--
-- Table structure for table `attribute`
--

CREATE TABLE `attribute` (
  `attributeId` int(11) NOT NULL,
  `name` varchar(40) NOT NULL,
  `entityTypeId` enum('product','category') NOT NULL,
  `code` varchar(20) NOT NULL,
  `inputType` varchar(20) NOT NULL,
  `backendType` varchar(60) NOT NULL,
  `sortOrder` int(11) NOT NULL,
  `backendModel` varchar(60) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `attribute`
--

INSERT INTO `attribute` (`attributeId`, `name`, `entityTypeId`, `code`, `inputType`, `backendType`, `sortOrder`, `backendModel`) VALUES
(1, 'Color', 'product', 'color', 'select', 'int', 1, ''),
(2, 'Brand', 'product', 'brand', 'select', 'int', 2, ''),
(3, 'Material', 'product', 'Material', 'select', 'int', 3, '');

-- --------------------------------------------------------

--
-- Table structure for table `attribute_option`
--

CREATE TABLE `attribute_option` (
  `optionId` int(11) NOT NULL,
  `name` varchar(40) NOT NULL,
  `attributeId` int(11) NOT NULL,
  `sortOrder` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `attribute_option`
--

INSERT INTO `attribute_option` (`optionId`, `name`, `attributeId`, `sortOrder`) VALUES
(4, 'yellow', 1, 3),
(5, 'red', 1, 2),
(6, 'green', 1, 1),
(7, 'blue', 1, 4),
(8, 'gucci', 2, 2),
(9, 'zara', 2, 1),
(10, 'biba', 2, 3),
(11, 'libas', 2, 4),
(12, 'red', 2, 5),
(13, 'black', 1, 5),
(16, 'brown', 1, 6);

-- --------------------------------------------------------

--
-- Table structure for table `brand`
--

CREATE TABLE `brand` (
  `brandId` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `image` varchar(90) NOT NULL,
  `status` varchar(15) NOT NULL,
  `createdDate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `cartId` int(11) NOT NULL,
  `customerId` int(11) NOT NULL,
  `sessionId` varchar(32) NOT NULL,
  `total` int(11) NOT NULL,
  `discount` int(11) NOT NULL,
  `paymentMethodId` int(11) NOT NULL,
  `shippingMethodId` int(11) NOT NULL,
  `shippingAmount` int(11) NOT NULL,
  `createdDate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`cartId`, `customerId`, `sessionId`, `total`, `discount`, `paymentMethodId`, `shippingMethodId`, `shippingAmount`, `createdDate`) VALUES
(9, 7, '', 0, 0, 0, 0, 0, '2021-03-31 06:24:27'),
(10, 1, '', 0, 0, 0, 0, 0, '2021-03-31 06:25:46'),
(11, 5, '', 0, 0, 2, 0, 0, '2021-03-31 06:25:52'),
(12, 4, '', 0, 0, 0, 0, 0, '2021-03-31 06:26:23'),
(13, 14, '', 0, 0, 0, 0, 0, '2021-03-31 08:13:05'),
(14, 21, '', 0, 0, 0, 0, 0, '2021-04-01 10:08:46'),
(15, 22, '', 0, 0, 0, 12, 100, '2021-04-02 07:12:40'),
(16, 0, '', 0, 0, 0, 0, 0, '2021-04-05 07:22:37'),
(17, 2, '', 0, 0, 0, 0, 0, '2021-04-05 07:34:51'),
(18, 19, '', 0, 0, 0, 0, 0, '2021-04-06 10:27:53'),
(19, 9, '', 0, 0, 0, 0, 0, '2021-04-06 10:34:30');

-- --------------------------------------------------------

--
-- Table structure for table `cartaddress`
--

CREATE TABLE `cartaddress` (
  `cartAddressId` int(11) NOT NULL,
  `cartId` int(11) NOT NULL,
  `addressId` int(11) NOT NULL,
  `address` varchar(90) NOT NULL,
  `addressType` varchar(11) NOT NULL,
  `city` varchar(40) NOT NULL,
  `state` varchar(50) NOT NULL,
  `country` varchar(50) NOT NULL,
  `zipcode` varchar(10) NOT NULL,
  `sameAsBilling` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cartaddress`
--

INSERT INTO `cartaddress` (`cartAddressId`, `cartId`, `addressId`, `address`, `addressType`, `city`, `state`, `country`, `zipcode`, `sameAsBilling`) VALUES
(1, 11, 0, '  same', '', 'anand', 'gujarat', 'india', '123456', 0),
(3, 11, 0, ' radhe', 'billing', 'Nadiad', 'guj', 'India', '1234', 0),
(4, 10, 0, '12', 'billing', 'bnv', 'ds', 'infoa', '123', 0),
(5, 11, 0, '  same as billling', 'shipping', 'anand', 'goa', 'india', '123456', 0),
(6, 13, 0, '11/12 Krishnam Bunglows, Bh Santram Deri', 'billing', 'nadiad', 'gujarat', 'India', '387002', 0),
(7, 0, 0, ' 11/12 Krishnam Bunglows, Bh Santram Deri', '', 'nadiad', 'gujarat', 'India', '387002', 0),
(8, 0, 0, ' 11/12 Krishnam Bunglows, Bh Santram Deriii', '', 'nadiad', 'gujarat', 'India', '387002', 0),
(9, 17, 0, '', 'shipping', 'nadiad', 'gujarat', 'india', '387001', 0),
(10, 17, 0, 'Krishnam Bunglows', 'billing', 'nadiad', 'gujarat', 'india', '387002', 0),
(11, 18, 0, '', 'billing', 'goa', 'goa', 'india', '123456', 0);

-- --------------------------------------------------------

--
-- Table structure for table `cartitem`
--

CREATE TABLE `cartitem` (
  `cartItemId` int(11) NOT NULL,
  `cartId` int(11) NOT NULL,
  `productId` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `basePrice` int(11) NOT NULL,
  `discount` int(11) NOT NULL,
  `createdDate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cartitem`
--

INSERT INTO `cartitem` (`cartItemId`, `cartId`, `productId`, `quantity`, `basePrice`, `discount`, `createdDate`) VALUES
(1, 1, 1, 28, 100, 10, '2021-03-30 10:03:51'),
(2, 1, 3, 1, 80, 0, '2021-03-30 18:10:02'),
(3, 1, 7, 2, 0, 0, '2021-03-31 06:06:25'),
(4, 1, 18, 3, 10, 0, '2021-03-31 06:23:44'),
(5, 9, 9, 6, 0, 0, '2021-03-31 06:25:14'),
(6, 11, 6, 4, 300, 0, '2021-03-31 06:26:07'),
(7, 0, 0, 25, 0, 0, '0000-00-00 00:00:00'),
(8, 14, 18, 1, 10, 0, '2021-04-01 10:09:52'),
(9, 0, 0, 5, 0, 0, '0000-00-00 00:00:00'),
(10, 0, 0, 5, 0, 0, '0000-00-00 00:00:00'),
(11, 0, 0, 5, 0, 0, '0000-00-00 00:00:00'),
(12, 0, 0, 5, 0, 0, '0000-00-00 00:00:00'),
(13, 13, 1, 2, 100, 10, '2021-04-01 10:15:56'),
(14, 0, 0, 5, 0, 0, '0000-00-00 00:00:00'),
(15, 0, 0, 6, 0, 0, '0000-00-00 00:00:00'),
(16, 11, 1, 1, 100, 10, '2021-04-01 10:21:00'),
(17, 0, 0, 4, 0, 0, '0000-00-00 00:00:00'),
(18, 0, 0, 5, 0, 0, '0000-00-00 00:00:00'),
(19, 0, 0, 2, 0, 0, '0000-00-00 00:00:00'),
(20, 0, 0, 2, 0, 0, '0000-00-00 00:00:00'),
(21, 0, 0, 5, 0, 0, '0000-00-00 00:00:00'),
(22, 13, 19, 1, 10, 0, '2021-04-02 06:17:34'),
(23, 15, 1, 2, 100, 10, '2021-04-02 07:12:47'),
(24, 15, 20, 1, 50, 0, '2021-04-02 07:13:15'),
(25, 16, 1, 8, 100, 10, '2021-04-05 07:29:55');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `categoryId` int(11) NOT NULL,
  `name` varchar(80) NOT NULL,
  `status` varchar(20) NOT NULL,
  `description` varchar(80) NOT NULL,
  `parentId` int(10) NOT NULL,
  `pathId` varchar(50) NOT NULL,
  `featured` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`categoryId`, `name`, `status`, `description`, `parentId`, `pathId`, `featured`) VALUES
(1, 'Bedroom', 'disabled', 'bedroom', 0, '1', 1),
(2, 'beds', 'disabled', 'beds', 1, '1=2', 0),
(4, 'Living Room', 'enabled', 'Living room', 0, '4', 1),
(6, 'Sofa cover', 'enabled', 'cover', 2, '1=2=6', 0),
(11, 'Panel bed', 'enabled', 'Panel bed', 2, '1=2=11', 0),
(13, 'Sofa cover', 'enabled', '', 4, '4=13', 0),
(14, 'sofaa ', 'enabled', '', 4, '4=14', 0);

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `categoryId` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `status` varchar(15) NOT NULL,
  `description` varchar(80) NOT NULL,
  `parentId` int(10) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`categoryId`, `name`, `status`, `description`, `parentId`) VALUES
(2, 'Entertainmenttt', 'disabled', 'cbvcncn', 0),
(3, 'Entertainment', 'disabled', 'vb', 0);

-- --------------------------------------------------------

--
-- Table structure for table `category_images`
--

CREATE TABLE `category_images` (
  `categoryImageId` int(11) NOT NULL,
  `imageName` varchar(90) NOT NULL,
  `categoryId` int(50) NOT NULL,
  `createdDate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category_images`
--

INSERT INTO `category_images` (`categoryImageId`, `imageName`, `categoryId`, `createdDate`) VALUES
(1, 'bedroom.jpg', 1, '2021-03-24 09:07:27'),
(2, 'livingroom.jpg', 4, '2021-03-24 09:09:19');

-- --------------------------------------------------------

--
-- Table structure for table `cms_page`
--

CREATE TABLE `cms_page` (
  `pageId` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `identifier` varchar(80) NOT NULL,
  `content` text NOT NULL,
  `status` varchar(15) NOT NULL,
  `createdDate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cms_page`
--

INSERT INTO `cms_page` (`pageId`, `title`, `identifier`, `content`, `status`, `createdDate`) VALUES
(1, '123', '', '<h1 style=\"text-align: center;\">hello hi</h1>', 'enabled', '2021-03-14 09:36:26'),
(2, 'about us', '', '<p style=\"text-align: center;\"><span style=\"text-decoration: underline;\"><em><strong>terms and contition</strong></em></span></p>', 'enabled', '2021-03-17 08:31:44');

-- --------------------------------------------------------

--
-- Table structure for table `config`
--

CREATE TABLE `config` (
  `configId` int(11) NOT NULL,
  `groupId` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `code` varchar(50) NOT NULL,
  `value` varchar(50) NOT NULL,
  `createdDate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `config`
--

INSERT INTO `config` (`configId`, `groupId`, `title`, `code`, `value`, `createdDate`) VALUES
(1, 1, 'WebsiteName', 'WebsiteName', 'QuesteCom', '2021-04-05 09:12:02'),
(2, 1, 'website 3', 'website 3', '1C', '2021-04-05 09:12:02'),
(3, 1, '123', '', '', '0000-00-00 00:00:00'),
(4, 2, '123', '13', 'acx', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `config_group`
--

CREATE TABLE `config_group` (
  `groupId` int(11) NOT NULL,
  `name` varchar(40) NOT NULL,
  `createdDate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `config_group`
--

INSERT INTO `config_group` (`groupId`, `name`, `createdDate`) VALUES
(1, 'Group1', '2021-04-05 08:37:02'),
(2, 'Group2', '2021-04-05 08:57:01');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `created` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `email`, `phone`, `title`, `created`) VALUES
(5, 'Chandni Devang', 'chandniparikh@gmail.com', '1234567899', 'lawyer 1', '2021-02-07 12:35:00'),
(6, 'Chandni Parikh', 'chandniparikh@gmail.com', '0997972870', 'lawyer', '2021-03-13 19:36:00'),
(7, 'Harshil Parikh d', 'harshilparikh@gmail.com', '0997972870', 'Employee', '2021-02-07 19:42:00'),
(8, 'Chandni Parikh', 'chandniparikh@gmail.com', '1234567890', 'lawyer', '2021-02-14 20:34:00'),
(9, 'david', 'david@gmail.com', '1234567890', 'teacher', '2021-02-08 12:36:00');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `customerId` int(11) NOT NULL,
  `firstName` varchar(20) NOT NULL,
  `lastName` varchar(20) NOT NULL,
  `mobile` int(10) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(40) NOT NULL,
  `status` varchar(15) NOT NULL,
  `createdDate` datetime NOT NULL,
  `updatedDate` datetime NOT NULL,
  `groupId` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`customerId`, `firstName`, `lastName`, `mobile`, `email`, `password`, `status`, `createdDate`, `updatedDate`, `groupId`) VALUES
(1, 'harshilP', 'parikh', 1234567890, 'xyz123@gmail.com', '1c592e3481c4df3b64a4dd38fae38280', 'enabled', '2021-02-13 22:43:45', '2021-03-17 15:38:14', 1),
(2, 'harshilpp', 'parikh', 1234567890, 'xyz@gmail.com', '1234', 'enabled', '2021-02-13 22:44:04', '2021-02-21 07:51:30', 2),
(4, 'jack', 'jones', 1234567890, 'xyz@gmail.com', '7426d5652f54759e70b8d4ed5dff7757', 'enabled', '2021-02-17 10:09:21', '2021-02-17 13:40:23', NULL),
(5, 'megha', 'patel', 1234567890, 'megha@gmail.com', '1234', 'disabled', '2021-02-18 08:17:15', '0000-00-00 00:00:00', NULL),
(7, 'charle', '', 0, '', '', 'enabled', '2021-03-04 14:50:53', '0000-00-00 00:00:00', 1),
(8, '', '', 0, '', '', 'enabled', '2021-03-04 14:55:47', '0000-00-00 00:00:00', 2),
(9, 'Rahul', 'Shah', 1234567890, 'rahul@gmail.com', '1234', 'disabled', '2021-03-04 15:17:01', '0000-00-00 00:00:00', 2),
(11, '', '', 0, '', '', 'enabled', '2021-03-05 09:01:00', '0000-00-00 00:00:00', 1),
(12, '', '', 0, '', '', 'enabled', '2021-03-08 11:10:40', '0000-00-00 00:00:00', 1),
(13, 'Rahul', '', 0, '', '', 'enabled', '2021-03-08 11:11:39', '2021-03-08 11:11:48', 2),
(14, 'Janki ', 'Mehta', 1234567890, 'jaki@yahoo.com', '', 'disabled', '2021-03-12 16:50:42', '0000-00-00 00:00:00', 2),
(19, 'Rahul', '', 0, '', '', 'enabled', '2021-03-12 16:55:36', '0000-00-00 00:00:00', 1),
(20, 'Rahul', '', 0, '', '', 'enabled', '2021-03-12 17:21:39', '0000-00-00 00:00:00', 1),
(21, 'Julie', 'Jonas', 0, 'julie@gmail.com', '', 'disabled', '2021-03-12 17:37:55', '0000-00-00 00:00:00', 2),
(22, 'Monika', 'Yadav', 0, '', '', '', '2021-04-02 07:10:55', '2021-04-02 07:10:55', 1);

-- --------------------------------------------------------

--
-- Table structure for table `customer_address`
--

CREATE TABLE `customer_address` (
  `addressId` int(11) NOT NULL,
  `address` varchar(50) NOT NULL,
  `city` varchar(30) NOT NULL,
  `state` varchar(20) NOT NULL,
  `zipcode` int(10) NOT NULL,
  `country` varchar(20) NOT NULL,
  `addressType` varchar(20) NOT NULL,
  `customerId` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer_address`
--

INSERT INTO `customer_address` (`addressId`, `address`, `city`, `state`, `zipcode`, `country`, `addressType`, `customerId`) VALUES
(1, 'krishnam scoiety', 'nadiad', 'gujarat', 387002, 'India', 'shipping', 0),
(2, '12345', '', '', 0, '', 'billing', 0),
(4, '12', 'bnv', 'ds', 123, 'infoa', 'billing', 1),
(7, '', 'nadiad', 'gujarat', 387001, 'india', 'shipping', 2),
(8, 'Krishnam Bunglows', 'nadiad', 'gujarat', 387002, 'india', 'billing', 2),
(9, '', 'goa', 'goa', 123456, 'india', 'billing', 19),
(10, '', 'nadiad', 'gujarat', 387002, 'India', 'shipping', 0),
(11, '11/12 Krishnam Bunglows, Bh Santram Deri', 'nadiad', 'gujarat', 387002, 'India', 'billing', 0),
(12, '', 'nadiad', 'gujarat', 387002, 'India', 'shipping', 0),
(13, '11/12 Krishnam Bunglows, Bh Santram Deri', 'nadiad', 'gujarat', 387002, 'India', 'billing', 14),
(14, '', '', '', 0, '', 'shipping', 0),
(15, '12/13', 'Nadiad', 'guj', 1234, 'India', 'billing', 0),
(16, '', 'anand', 'goa', 123456, 'india', 'shipping', 0),
(17, '12/13', 'Nadiad', 'guj', 1234, 'India', 'billing', 0),
(18, '', 'anand', 'goa', 123456, 'india', 'shipping', 5),
(19, '12/13', 'Nadiad', 'guj', 1234, 'India', 'billing', 5),
(20, '', 'bhopal', 'MP', 0, 'India', 'shipping', 7),
(21, 'nexus', 'bhopal', 'MP', 123456, 'india', 'billing', 7),
(22, '', 'bhopal', 'MP', 0, 'India', 'shipping', 7),
(23, 'nexus', 'bhopal', 'MP', 123456, 'india', 'billing', 7),
(24, '', 'bhopal', 'MP', 0, 'India', 'shipping', 7),
(25, 'nexus', 'bhopal', 'MP', 123456, 'india', 'billing', 7);

-- --------------------------------------------------------

--
-- Table structure for table `customer_group`
--

CREATE TABLE `customer_group` (
  `groupId` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `default` tinyint(4) NOT NULL DEFAULT 0,
  `createdDate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer_group`
--

INSERT INTO `customer_group` (`groupId`, `name`, `default`, `createdDate`) VALUES
(1, 'retail', 0, '0000-00-00 00:00:00'),
(2, 'wholesale', 0, '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `form1`
--

CREATE TABLE `form1` (
  `id` int(11) NOT NULL,
  `Name` varchar(20) NOT NULL,
  `Password` varchar(30) NOT NULL,
  `Address` varchar(40) NOT NULL,
  `Game` varchar(15) NOT NULL,
  `Gender` varchar(10) NOT NULL,
  `Age` varchar(5) NOT NULL,
  `File` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `form1`
--

INSERT INTO `form1` (`id`, `Name`, `Password`, `Address`, `Game`, `Gender`, `Age`, `File`) VALUES
(1, 'chandni', '1234567890', 'abc', 'hockey', 'female', '18', 'leaf2.JPG'),
(2, 'harshil', 'abcdefghijk', 'krishname bunglows', 'cricket', 'male', '19', 'leaf2.JPG');

-- --------------------------------------------------------

--
-- Table structure for table `form3`
--

CREATE TABLE `form3` (
  `id` int(11) NOT NULL,
  `FirstName` varchar(30) NOT NULL,
  `LastName` varchar(30) NOT NULL,
  `BirthDate` varchar(30) NOT NULL,
  `Gender` varchar(10) NOT NULL,
  `Country` varchar(20) NOT NULL,
  `Email` varchar(40) NOT NULL,
  `Phone` int(10) NOT NULL,
  `Password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `form3`
--

INSERT INTO `form3` (`id`, `FirstName`, `LastName`, `BirthDate`, `Gender`, `Country`, `Email`, `Phone`, `Password`) VALUES
(1, 'CHandni', 'parikh', '01-03-2011', 'male', 'India', '17it060@charusat.edu.in', 1234567890, '1234'),
(2, 'CHandni', 'parikh', '03-03-2009', 'female', 'China', 'cdparikh24680@gmail.com', 2147483647, 'abc');

-- --------------------------------------------------------

--
-- Table structure for table `form4`
--

CREATE TABLE `form4` (
  `id` int(11) NOT NULL,
  `Name` varchar(30) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `Subject` varchar(50) NOT NULL,
  `Message` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `form4`
--

INSERT INTO `form4` (`id`, `Name`, `Email`, `Subject`, `Message`) VALUES
(1, 'chandni', '17it060@charusat.edu.in', 'hello', 'how are you');

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `orderId` int(11) NOT NULL,
  `sessionId` int(11) NOT NULL,
  `customerId` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `discount` int(11) NOT NULL,
  `paymentMethodId` int(11) NOT NULL,
  `shippingMethodId` int(11) NOT NULL,
  `shippingAmount` int(11) NOT NULL,
  `createdDate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `order`
--

INSERT INTO `order` (`orderId`, `sessionId`, `customerId`, `total`, `discount`, `paymentMethodId`, `shippingMethodId`, `shippingAmount`, `createdDate`) VALUES
(1, 0, 5, 0, 0, 2, 0, 0, '2021-04-08 08:32:58'),
(2, 0, 5, 0, 0, 2, 0, 0, '2021-04-08 08:34:50'),
(3, 0, 5, 0, 0, 2, 0, 0, '2021-04-08 08:35:19'),
(4, 0, 5, 0, 0, 2, 0, 0, '2021-04-08 08:36:36'),
(5, 0, 5, 0, 0, 2, 0, 0, '2021-04-08 08:39:04'),
(6, 0, 5, 0, 0, 2, 0, 0, '2021-04-08 08:42:09'),
(7, 0, 5, 0, 0, 2, 0, 0, '2021-04-08 08:43:00'),
(8, 0, 5, 0, 0, 2, 0, 0, '2021-04-08 08:44:03'),
(9, 0, 5, 0, 0, 2, 0, 0, '2021-04-08 08:45:11');

-- --------------------------------------------------------

--
-- Table structure for table `orderaddress`
--

CREATE TABLE `orderaddress` (
  `orderAddressId` int(11) NOT NULL,
  `orderId` int(11) NOT NULL,
  `addressId` int(11) NOT NULL,
  `addressType` varchar(20) NOT NULL,
  `address` varchar(50) NOT NULL,
  `city` varchar(50) NOT NULL,
  `state` varchar(30) NOT NULL,
  `country` varchar(50) NOT NULL,
  `zipcode` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `orderitem`
--

CREATE TABLE `orderitem` (
  `orderItemId` int(11) NOT NULL,
  `orderId` int(11) NOT NULL,
  `productId` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `basePrice` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `discount` int(11) NOT NULL,
  `createdDate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orderitem`
--

INSERT INTO `orderitem` (`orderItemId`, `orderId`, `productId`, `quantity`, `basePrice`, `price`, `discount`, `createdDate`) VALUES
(1, 3, 6, 4, 300, 0, 0, '2021-04-08 08:35:19'),
(2, 3, 1, 1, 100, 0, 10, '2021-04-08 08:35:19'),
(3, 4, 6, 4, 300, 0, 0, '2021-04-08 08:36:36'),
(4, 4, 1, 1, 100, 0, 10, '2021-04-08 08:36:36'),
(5, 5, 6, 4, 300, 0, 0, '2021-04-08 08:39:04'),
(6, 5, 1, 1, 100, 0, 10, '2021-04-08 08:39:04'),
(7, 6, 6, 4, 300, 0, 0, '2021-04-08 08:42:09'),
(8, 6, 1, 1, 100, 0, 10, '2021-04-08 08:42:09'),
(9, 7, 6, 4, 300, 0, 0, '2021-04-08 08:43:00'),
(10, 7, 1, 1, 100, 0, 10, '2021-04-08 08:43:00'),
(11, 8, 6, 4, 300, 0, 0, '2021-04-08 08:44:03'),
(12, 8, 1, 1, 100, 0, 10, '2021-04-08 08:44:03'),
(13, 9, 6, 4, 300, 0, 0, '2021-04-08 08:45:11'),
(14, 9, 1, 1, 100, 0, 10, '2021-04-08 08:45:12');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `methodId` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `code` varchar(30) NOT NULL,
  `description` varchar(50) NOT NULL,
  `status` varchar(15) NOT NULL,
  `createdDate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`methodId`, `name`, `code`, `description`, `status`, `createdDate`) VALUES
(1, 'Cod', '1234', '       credit card', 'enabled', '0000-00-00 00:00:00'),
(2, 'Card', 'abcd', '  cvb', 'disabled', '2021-02-21 14:49:38');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `productId` int(11) NOT NULL,
  `sku` varchar(12) NOT NULL,
  `name` varchar(30) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `discount` double(9,2) NOT NULL,
  `quantity` int(10) NOT NULL,
  `description` varchar(80) NOT NULL,
  `status` varchar(15) NOT NULL,
  `createdDate` datetime NOT NULL,
  `updatedDate` datetime NOT NULL,
  `color` varchar(60) DEFAULT NULL,
  `brand` varchar(60) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`productId`, `sku`, `name`, `price`, `discount`, `quantity`, `description`, `status`, `createdDate`, `updatedDate`, `color`, `brand`) VALUES
(1, 'ABCDEFGHIJ', 'Laptop1', '100.00', 10.00, 4, '   abcd', 'enabled', '2021-02-15 22:07:36', '2021-04-06 10:23:53', 'green', 'libas'),
(3, 'ZBCDEFGHIJK', 'Phone', '80.00', 0.00, 0, '   hello id ', 'enabled', '2021-02-19 18:09:58', '2021-03-22 06:38:45', '', ''),
(4, 'ABCDEFGHIJ', 'Shoes', '100.00', 0.00, 5, '  ', 'disabled', '0000-00-00 00:00:00', '2021-03-05 10:47:04', NULL, NULL),
(6, 'ABCDEFGHIJ', 'Shoes', '300.00', 0.00, 0, '', 'enabled', '0000-00-00 00:00:00', '2021-02-19 07:37:11', NULL, NULL),
(7, 'ABCDEFGHIJ', 'Shoes', '0.00', 0.00, 0, '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL, NULL),
(8, 'ABCDEFGHIJ', 'Shoes', '0.00', 0.00, 0, '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL, NULL),
(9, 'ABCDEFGHIJ', 'Shoes', '0.00', 0.00, 0, '', 'enabled', '0000-00-00 00:00:00', '2021-03-20 05:21:54', '', ''),
(10, 'ABCDEFGHIJ', 'Shoes', '0.00', 0.00, 0, '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL, NULL),
(11, 'ABCDEFGHIJ', 'Shoes', '0.00', 0.00, 0, '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL, NULL),
(12, 'ABCDEFGHIJ', 'Shoes', '0.00', 0.00, 0, '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL, NULL),
(18, '123', 'Bat', '10.00', 0.00, 5, ' 1234', 'disabled', '2021-02-16 22:07:58', '2021-03-22 05:15:44', '', ''),
(19, '7890', 'Mobile', '10.00', 0.00, 8, ' mobile phone', 'disabled', '2021-02-17 10:43:24', '0000-00-00 00:00:00', NULL, NULL),
(20, '12', 'Sandals', '50.00', 0.00, 4, ' good quality', 'disabled', '2021-02-17 11:47:10', '2021-04-05 07:14:10', '', ''),
(21, '12', 'vnb', '12.00', 0.00, 1, ' mnn', 'enabled', '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL, NULL),
(22, '123', 'Tshirt', '10.00', 8.00, 18, ' good ', 'disabled', '0000-00-00 00:00:00', '2021-02-19 18:12:30', NULL, NULL),
(23, '2', 'Bags', '20.00', 0.00, 10, ' Multi purpose', 'disabled', '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL, NULL),
(24, '12345', 'bags', '19.00', 9.00, 7, ' mn', 'disabled', '0000-00-00 00:00:00', '2021-02-28 11:15:20', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `productmedia`
--

CREATE TABLE `productmedia` (
  `imageId` int(11) NOT NULL,
  `image` varchar(100) NOT NULL,
  `label` varchar(80) NOT NULL,
  `small` tinyint(1) NOT NULL,
  `thumb` tinyint(1) NOT NULL,
  `base` tinyint(1) NOT NULL,
  `gallery` tinyint(1) NOT NULL,
  `productId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `productmedia`
--

INSERT INTO `productmedia` (`imageId`, `image`, `label`, `small`, `thumb`, `base`, `gallery`, `productId`) VALUES
(3, '1stleaf.png', 'row 1', 3, 5, 3, 0, 2),
(4, '2ndleaf.png', 'row2', 0, 0, 0, 0, 2),
(5, '3rdleaf.png', 'r3', 0, 0, 0, 0, 2),
(8, '', '', 3, 3, 4, 0, 0),
(9, 'leaf2.JPG', '', 0, 0, 0, 0, 2),
(10, '', '', 0, 0, 0, 0, 2),
(11, '0c09c121-e945-4b7e-acbf-dff4e0d01acb___GCREC_Bact.Sp 3379.JPG', 'row 2', 0, 1, 1, 0, 19),
(12, '0b943ada-01a9-4ce0-a607-e799394856de___Crnl_L.Mold 7008.JPG', 'row3', 0, 0, 0, 0, 19),
(13, 'Chandni_Photo.jpg', 'row 2', 0, 0, 0, 13, 19),
(17, '1227789hh12_00001.jpg', 'row5', 0, 0, 0, 17, 19),
(18, 'img_1.png', '', 1, 0, 0, 0, 19),
(19, 'SVM.png', 'svm1', 1, 1, 1, 19, 20),
(26, '', '', 0, 0, 0, 0, 20),
(27, 'p11.png', '', 0, 0, 0, 0, 19),
(28, '', '', 0, 0, 0, 0, 19);

-- --------------------------------------------------------

--
-- Table structure for table `product_group_price`
--

CREATE TABLE `product_group_price` (
  `entityId` int(11) NOT NULL,
  `productId` int(11) NOT NULL,
  `customerGroupId` int(11) NOT NULL,
  `price` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product_group_price`
--

INSERT INTO `product_group_price` (`entityId`, `productId`, `customerGroupId`, `price`) VALUES
(1, 1, 1, '700.00'),
(2, 1, 2, '200.00'),
(3, 3, 1, '75.00'),
(4, 3, 2, '60.00'),
(5, 19, 1, '60.00'),
(6, 19, 2, '50.00'),
(7, 6, 1, '30.00'),
(8, 6, 2, '40.00'),
(9, 20, 1, '70.00'),
(10, 20, 2, '0.00'),
(11, 8, 1, '70.00'),
(12, 8, 2, '50.00');

-- --------------------------------------------------------

--
-- Table structure for table `shipping`
--

CREATE TABLE `shipping` (
  `shippingId` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `code` varchar(30) NOT NULL,
  `amount` int(10) NOT NULL,
  `description` varchar(50) NOT NULL,
  `status` varchar(15) NOT NULL,
  `createdDate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `shipping`
--

INSERT INTO `shipping` (`shippingId`, `name`, `code`, `amount`, `description`, `status`, `createdDate`) VALUES
(1, 'express', '1234', 200, '           cv', 'disabled', '0000-00-00 00:00:00'),
(2, 'normal', '5678', 100, '   vbb', 'disabled', '0000-00-00 00:00:00'),
(4, 'chandni', '1234', 12, ' chhh', 'disabled', '0000-00-00 00:00:00'),
(11, '', '101', 0, '  ', 'enabled', '2021-03-10 16:54:09'),
(12, 'SpeedPost', '202', 100, ' speedPost', 'enabled', '2021-03-12 14:46:09');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `photo` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`photo`) VALUES
('leaf.JPG');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`adminId`);

--
-- Indexes for table `attribute`
--
ALTER TABLE `attribute`
  ADD PRIMARY KEY (`attributeId`);

--
-- Indexes for table `attribute_option`
--
ALTER TABLE `attribute_option`
  ADD PRIMARY KEY (`optionId`),
  ADD KEY `attributeId` (`attributeId`);

--
-- Indexes for table `brand`
--
ALTER TABLE `brand`
  ADD PRIMARY KEY (`brandId`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`cartId`);

--
-- Indexes for table `cartaddress`
--
ALTER TABLE `cartaddress`
  ADD PRIMARY KEY (`cartAddressId`),
  ADD KEY `addressId` (`addressId`);

--
-- Indexes for table `cartitem`
--
ALTER TABLE `cartitem`
  ADD PRIMARY KEY (`cartItemId`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`categoryId`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`categoryId`);

--
-- Indexes for table `category_images`
--
ALTER TABLE `category_images`
  ADD PRIMARY KEY (`categoryImageId`);

--
-- Indexes for table `cms_page`
--
ALTER TABLE `cms_page`
  ADD PRIMARY KEY (`pageId`);

--
-- Indexes for table `config`
--
ALTER TABLE `config`
  ADD PRIMARY KEY (`configId`),
  ADD KEY `groupId` (`groupId`);

--
-- Indexes for table `config_group`
--
ALTER TABLE `config_group`
  ADD PRIMARY KEY (`groupId`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`customerId`),
  ADD KEY `test` (`groupId`);

--
-- Indexes for table `customer_address`
--
ALTER TABLE `customer_address`
  ADD PRIMARY KEY (`addressId`);

--
-- Indexes for table `customer_group`
--
ALTER TABLE `customer_group`
  ADD PRIMARY KEY (`groupId`);

--
-- Indexes for table `form1`
--
ALTER TABLE `form1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `form3`
--
ALTER TABLE `form3`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `form4`
--
ALTER TABLE `form4`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`orderId`);

--
-- Indexes for table `orderaddress`
--
ALTER TABLE `orderaddress`
  ADD PRIMARY KEY (`orderAddressId`);

--
-- Indexes for table `orderitem`
--
ALTER TABLE `orderitem`
  ADD PRIMARY KEY (`orderItemId`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`methodId`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`productId`);

--
-- Indexes for table `productmedia`
--
ALTER TABLE `productmedia`
  ADD PRIMARY KEY (`imageId`);

--
-- Indexes for table `product_group_price`
--
ALTER TABLE `product_group_price`
  ADD PRIMARY KEY (`entityId`);

--
-- Indexes for table `shipping`
--
ALTER TABLE `shipping`
  ADD PRIMARY KEY (`shippingId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `adminId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `attribute`
--
ALTER TABLE `attribute`
  MODIFY `attributeId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `attribute_option`
--
ALTER TABLE `attribute_option`
  MODIFY `optionId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `brand`
--
ALTER TABLE `brand`
  MODIFY `brandId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `cartId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `cartaddress`
--
ALTER TABLE `cartaddress`
  MODIFY `cartAddressId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `cartitem`
--
ALTER TABLE `cartitem`
  MODIFY `cartItemId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `categoryId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `categoryId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `category_images`
--
ALTER TABLE `category_images`
  MODIFY `categoryImageId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `cms_page`
--
ALTER TABLE `cms_page`
  MODIFY `pageId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `config`
--
ALTER TABLE `config`
  MODIFY `configId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `config_group`
--
ALTER TABLE `config_group`
  MODIFY `groupId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `customerId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `customer_address`
--
ALTER TABLE `customer_address`
  MODIFY `addressId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `customer_group`
--
ALTER TABLE `customer_group`
  MODIFY `groupId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `form1`
--
ALTER TABLE `form1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `form3`
--
ALTER TABLE `form3`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `form4`
--
ALTER TABLE `form4`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `order`
--
ALTER TABLE `order`
  MODIFY `orderId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `orderaddress`
--
ALTER TABLE `orderaddress`
  MODIFY `orderAddressId` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `orderitem`
--
ALTER TABLE `orderitem`
  MODIFY `orderItemId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `methodId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `productId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `productmedia`
--
ALTER TABLE `productmedia`
  MODIFY `imageId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `product_group_price`
--
ALTER TABLE `product_group_price`
  MODIFY `entityId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `shipping`
--
ALTER TABLE `shipping`
  MODIFY `shippingId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `attribute_option`
--
ALTER TABLE `attribute_option`
  ADD CONSTRAINT `attribute_option_ibfk_1` FOREIGN KEY (`attributeId`) REFERENCES `attribute` (`attributeId`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `config`
--
ALTER TABLE `config`
  ADD CONSTRAINT `config_ibfk_1` FOREIGN KEY (`groupId`) REFERENCES `config_group` (`groupId`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `customer`
--
ALTER TABLE `customer`
  ADD CONSTRAINT `test` FOREIGN KEY (`groupId`) REFERENCES `customer_group` (`groupId`) ON DELETE SET NULL ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
