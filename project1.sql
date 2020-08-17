-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 09, 2019 at 10:59 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project1`
--

-- --------------------------------------------------------

--
-- Table structure for table `about`
--

CREATE TABLE `about` (
  `id` int(11) NOT NULL,
  `header_img` text COLLATE utf32_unicode_ci NOT NULL,
  `nav_img` text COLLATE utf32_unicode_ci NOT NULL,
  `discription` text COLLATE utf32_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_unicode_ci;

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`id`, `header_img`, `nav_img`, `discription`) VALUES
(1, 'bg-banner-02.jpg', 'item-12.jpg', 'hgciushcioshvckjsvkjbxvkjbxvkkvbkxbvkjvnksvnskvj');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(20) COLLATE utf32_unicode_ci NOT NULL,
  `password` text COLLATE utf32_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_unicode_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(4, 'lamia', '202cb962ac59075b964b07152d234b70'),
(5, 'cdc', 'fe87e76fd7180e936ca1d207448702ca'),
(6, 'rfgtr', 'e369853df766fa44e1ed0ff613f563bd'),
(7, 'lamya', '202cb962ac59075b964b07152d234b70');

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `id` int(11) NOT NULL,
  `name` varchar(20) COLLATE utf32_unicode_ci NOT NULL,
  `u-date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `discription` text COLLATE utf32_unicode_ci NOT NULL,
  `img` text COLLATE utf32_unicode_ci NOT NULL,
  `price` varchar(20) COLLATE utf32_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_unicode_ci;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`id`, `name`, `u-date`, `discription`, `img`, `price`) VALUES
(1, 'Black Friday Guide: ', '2019-07-31 16:15:39', 'blouse', 'item-15.jpg', '500$'),
(2, 'discount', '2019-08-31 03:20:02', 'sale', 'banner-02.jpg', '200');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(11) NOT NULL,
  `id_product` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `sent` enum('0','1') COLLATE utf32_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_unicode_ci;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `id_product`, `id_user`, `quantity`, `sent`) VALUES
(1, 2, 7, 0, '1'),
(4, 2, 0, 0, '0'),
(13, 2, 0, 0, '0'),
(15, 2, 7, 0, '0'),
(16, 2, 7, 0, '0'),
(17, 2, 7, 0, '0'),
(18, 2, 7, 2, '0'),
(19, 2, 7, 1, '0'),
(22, 4, 7, 1, '0'),
(23, 9, 7, 1, '0'),
(24, 4, 7, 3, '0'),
(25, 9, 7, 1, '0'),
(26, 9, 7, 1, '0');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `name` varchar(20) COLLATE utf32_unicode_ci NOT NULL,
  `img` text COLLATE utf32_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_unicode_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `name`, `img`) VALUES
(1, 'blouse', 'blog-02.jpg'),
(2, 'pants', 'gallery-07.jpg'),
(3, 'shoes', 'item-17.jpg'),
(4, 'bags', 'item-01.jpg'),
(5, 'watches', 'item-cart-03.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `id` int(11) NOT NULL,
  `name` varchar(20) COLLATE utf32_unicode_ci NOT NULL,
  `message` text COLLATE utf32_unicode_ci NOT NULL,
  `seen` enum('0','1') COLLATE utf32_unicode_ci NOT NULL,
  `email` varchar(20) COLLATE utf32_unicode_ci NOT NULL,
  `phone` varchar(20) COLLATE utf32_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `name` varchar(20) COLLATE utf32_unicode_ci NOT NULL,
  `price` int(11) NOT NULL,
  `category` varchar(30) COLLATE utf32_unicode_ci NOT NULL,
  `sale` int(11) NOT NULL,
  `img` text COLLATE utf32_unicode_ci NOT NULL,
  `discription` text COLLATE utf32_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_unicode_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `name`, `price`, `category`, `sale`, `img`, `discription`) VALUES
(2, 'blouse', 300, '1', 200, 'item-10.jpg', '43r3'),
(3, 't-shirt', 299, '1', 270, 'item-15.jpg', 'item-15.jpg'),
(4, 'item-17', 200, '2', 180, 'item-12.jpg', 'unique'),
(5, 'converse', 300, '3', 250, 'banner-07.jpg', 'converse'),
(6, 'bag', 500, '4', 460, 'gallery-09.jpg', 'pink bag'),
(7, 'watche', 1000, '5', 880, 'item-cart-03.jpg', 'black'),
(8, 'black watches', 1000, '5', 880, 'item-05.jpg', 'classic'),
(9, 'melton', 300, '2', 260, 'item-11.jpg', 'pant'),
(10, 'white shoes', 400, '3', 350, 'gallery-15.jpg', 'shoes'),
(11, 'bag', 490, '4', 399, 'item-02.jpg', 'casual');

-- --------------------------------------------------------

--
-- Table structure for table `rate`
--

CREATE TABLE `rate` (
  `id_product` int(11) NOT NULL,
  `rate` int(11) NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_unicode_ci;

--
-- Dumping data for table `rate`
--

INSERT INTO `rate` (`id_product`, `rate`, `id_user`) VALUES
(2, 2, 0),
(0, 0, 0),
(0, 0, 0),
(0, 0, 0),
(0, 0, 0),
(0, 0, 0),
(0, 0, 0),
(0, 0, 0),
(0, 0, 0),
(0, 0, 0),
(0, 0, 0),
(0, 0, 0),
(0, 0, 0),
(0, 0, 0),
(0, 0, 0),
(0, 0, 0),
(0, 0, 0),
(0, 0, 0),
(0, 0, 0),
(0, 0, 0),
(0, 0, 0),
(0, 0, 0),
(0, 0, 0),
(0, 0, 0),
(0, 0, 0),
(0, 0, 0),
(0, 0, 0),
(0, 5, 0),
(3, 4, 7);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(20) COLLATE utf32_unicode_ci NOT NULL,
  `password` varchar(200) COLLATE utf32_unicode_ci NOT NULL,
  `firstname` varchar(20) COLLATE utf32_unicode_ci NOT NULL,
  `lastname` varchar(20) COLLATE utf32_unicode_ci NOT NULL,
  `gender` enum('0','1') COLLATE utf32_unicode_ci NOT NULL,
  `phone` int(11) NOT NULL,
  `age` int(11) NOT NULL,
  `u-date` date NOT NULL,
  `address` varchar(30) COLLATE utf32_unicode_ci NOT NULL,
  `email` varchar(30) COLLATE utf32_unicode_ci NOT NULL,
  `img` text COLLATE utf32_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `firstname`, `lastname`, `gender`, `phone`, `age`, `u-date`, `address`, `email`, `img`) VALUES
(1, 'ss', '202cb962ac59075b964b', 'dff', 'jbhj', '', 433, 87, '2019-07-03', 'mansoura', 'lamia_defdefdfd@yahoo.com', 'Lighthouse.jpg'),
(2, 'lamiaaa', '02b1be0d48924c327124', 'lamia', 'ashraf', '1', 24, 66, '2019-07-03', 'mansoura', 'lamia.ashraf.arfa44@gmail.com', 'Chrysanthemum.jpg'),
(4, 'lamia', '202cb962ac59075b964b', '', '', '0', 0, 0, '0000-00-00', '', '', ''),
(5, 'lamiaa', '202cb962ac59075b964b', '', '', '0', 0, 0, '0000-00-00', '', '', ''),
(6, 'lamiaashraf', '202cb962ac59075b964b', '', '', '0', 0, 0, '0000-00-00', '', '', ''),
(7, 'lamiaashraf1', '202cb962ac59075b964b07152d234b70', '', '', '0', 0, 0, '0000-00-00', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `wishlist`
--

CREATE TABLE `wishlist` (
  `id` int(11) NOT NULL,
  `id_product` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `sent` enum('0','1') COLLATE utf32_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `wishlist`
--
ALTER TABLE `wishlist`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about`
--
ALTER TABLE `about`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `wishlist`
--
ALTER TABLE `wishlist`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
