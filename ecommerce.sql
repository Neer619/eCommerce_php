-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 03, 2020 at 08:00 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecommerce`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `admin_name` varchar(40) NOT NULL,
  `admin_pwd` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `admin_name`, `admin_pwd`) VALUES
(1, 'admin', 'password');

-- --------------------------------------------------------

--
-- Table structure for table `camera`
--

CREATE TABLE `camera` (
  `id` int(11) NOT NULL,
  `photo` varchar(300) NOT NULL,
  `price` int(10) NOT NULL,
  `brand` varchar(300) NOT NULL,
  `model_name` varchar(300) NOT NULL,
  `model_num` varchar(300) NOT NULL,
  `megapixel` varchar(10) NOT NULL,
  `sensor_type` varchar(300) NOT NULL,
  `type` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(10) NOT NULL,
  `photo` varchar(400) NOT NULL,
  `product_name` varchar(300) NOT NULL,
  `product_price` int(10) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `photo`, `product_name`, `product_price`, `user_id`) VALUES
(1, '../images/mobile/2eccf10e69fa2bfd03e89b0c796b266f.jpeg', 'Samsung  Galaxy S10 Lite', 0, 0),
(2, '../images/mobile/2eccf10e69fa2bfd03e89b0c796b266f.jpeg', 'Samsung  Galaxy S10 Lite', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `laptop`
--

CREATE TABLE `laptop` (
  `id` int(11) NOT NULL,
  `photo` varchar(300) NOT NULL,
  `price` int(11) NOT NULL,
  `brand` varchar(300) NOT NULL,
  `model_name` varchar(300) NOT NULL,
  `model_num` varchar(300) NOT NULL,
  `ram` varchar(300) NOT NULL,
  `gpu` varchar(300) NOT NULL,
  `os` varchar(300) NOT NULL,
  `processor` varchar(300) NOT NULL,
  `hdd_space` varchar(300) NOT NULL,
  `battery` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `mobile`
--

CREATE TABLE `mobile` (
  `id` int(11) NOT NULL,
  `photo` varchar(300) NOT NULL,
  `price` int(10) NOT NULL DEFAULT 0,
  `brand` varchar(300) NOT NULL,
  `model_name` varchar(300) NOT NULL,
  `model_number` varchar(300) NOT NULL,
  `ram` varchar(300) NOT NULL,
  `gpu` varchar(300) NOT NULL,
  `os` varchar(300) NOT NULL,
  `processor_type` varchar(300) NOT NULL,
  `processor_core` varchar(300) NOT NULL,
  `internal_storage` varchar(300) NOT NULL,
  `battery` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mobile`
--

INSERT INTO `mobile` (`id`, `photo`, `price`, `brand`, `model_name`, `model_number`, `ram`, `gpu`, `os`, `processor_type`, `processor_core`, `internal_storage`, `battery`) VALUES
(4, 'images/mobile/2eccf10e69fa2bfd03e89b0c796b266f.jpeg', 0, 'Samsung ', 'Galaxy S10 Lite', 'SM-G770FZWSINU', '8 GB', 'Qualcomm | Adreno 640', ' Android 10', ' Qualcomm Snapdragon 855 (SM8150)', ' Octa Core', ' 128 GB', '4500 mAh'),
(5, '../images/mobile/566dd373db4036a58a558513eef869e8.jpeg', 13, 'Honor', '9X ', 'STK-L22', '4 GB', 'Qualcomm | Adreno 640', ' Android Pie 9', ' Kirin 710F', ' Octa Core', ' 128 GB', ' 4000 mAh'),
(6, '../images/mobile/16de77f7e0bf6bf466619ba4229090f5.jpeg', 25, 'Samsung ', 'Galaxy A51', ' SM-A515FZBWINS', ' 6 GB', ' ARM | Mali G72 MP3', ' Android 10', ' Exynos 9611', 'Octa Core', ' 128 GB', ' 4000 mAh'),
(7, '../images/mobile/4bb16532bb14f7b42d8d16ffa134394e.jpeg', 17999, 'Realme ', 'X2 ', 'RMX1992', ' 4 GB', 'Adreno 618', ' Android Pie 9', 'Qualcomm Snapdragon 730G', ' Octa Core', ' 64 GB', ' 4000 mAh'),
(8, '../images/mobile/9df7cbddcf76d6005ea385c7ffdbe850.jpeg', 9999, 'Realme ', '5', 'RMX1911', ' 3 GB', ' Adreno 610', ' Android Pie 9.0', ' Qualcomm Snapdragon 665 2 GHz', ' Octa Core', ' 32 GB', ' 5000 mAH'),
(9, '../images/mobile/c6a1c1023a12b822a42bf4282bc09f28.jpeg', 13990, 'Vivo ', 'Z1Pro', ' Vivo 1951/PD1911F_EX', ' 4 GB', ' Adreno 616', ' Android Pie 9', ' Qualcomm Snapdragon 712 AIE Octa Core 2.3GHz', ' Octa Core', '64GB', '4000mAh'),
(10, '../images/mobile/ceeed04e9368e58a7ca94308c5048184.jpeg', 17999, 'Samsung ', 'Galaxy A70', ' SM-A705GZBHINS', '6 GB', ' Qualcomm Adreno 612', 'Android Pie 9.0', ' Qualcomm Snapdragron 675', 'Octa Core', ' 128 GB', ' 4500 mAh'),
(11, '../images/mobile/33365ec9f9330bd26463b0c88d3ee50c.jpeg', 14999, 'Motorola ', ' Motorola One Vision', ' PAFB0023IN', ' 4 GB', ' Mali-G72 MP3', ' Android Pie 9', ' Samsung Exynos 9609', ' Octa Core', ' 128 GB', ' 3500 mAh');

-- --------------------------------------------------------

--
-- Table structure for table `speaker`
--

CREATE TABLE `speaker` (
  `id` int(11) NOT NULL,
  `photo` varchar(300) NOT NULL,
  `price` int(10) NOT NULL,
  `brand` varchar(300) NOT NULL,
  `model_name` varchar(300) NOT NULL,
  `model_num` varchar(300) NOT NULL,
  `type` varchar(300) NOT NULL,
  `wired` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `user_first` varchar(80) NOT NULL,
  `user_last` varchar(80) NOT NULL,
  `user_email` varchar(100) NOT NULL,
  `user_uid` varchar(100) NOT NULL,
  `user_pwd` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `user_first`, `user_last`, `user_email`, `user_uid`, `user_pwd`) VALUES
(1, 'neer', 'neer', 'neer@gmail.com', 'neer', 'neer'),
(2, 'kumar', 'kumar', 'kumar@gmail.com', 'kumar', 'kumar');

-- --------------------------------------------------------

--
-- Table structure for table `watch`
--

CREATE TABLE `watch` (
  `id` int(11) NOT NULL,
  `price` int(10) NOT NULL,
  `brand` varchar(300) NOT NULL,
  `model_name` varchar(300) NOT NULL,
  `type` varchar(300) NOT NULL,
  `dial_color` varchar(300) NOT NULL,
  `water_res` int(1) NOT NULL,
  `strap_type` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admin_name` (`admin_name`);

--
-- Indexes for table `camera`
--
ALTER TABLE `camera`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `laptop`
--
ALTER TABLE `laptop`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mobile`
--
ALTER TABLE `mobile`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `speaker`
--
ALTER TABLE `speaker`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `watch`
--
ALTER TABLE `watch`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `camera`
--
ALTER TABLE `camera`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `laptop`
--
ALTER TABLE `laptop`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `mobile`
--
ALTER TABLE `mobile`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `speaker`
--
ALTER TABLE `speaker`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `watch`
--
ALTER TABLE `watch`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
