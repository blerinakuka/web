-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 26, 2023 at 08:36 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `prod`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `Id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`Id`, `name`, `email`, `message`) VALUES
(1, 'Blerina', 'blerinakuka@gmail.com', 'ggggggggggggggggggggggggg');

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `Id` int(11) NOT NULL,
  `i_image` varchar(255) NOT NULL,
  `i_title` varchar(255) NOT NULL,
  `i_body` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`Id`, `i_image`, `i_title`, `i_body`) VALUES
(5, './images/seti1.webp', '5-Step Routine', '$180'),
(6, './images/seti2.webp', '3-Step Routine', '$90'),
(7, './images/seti3.webp', 'Serum + Moisturizer', '$110'),
(8, './images/seti4.webp', 'Serum + Moisturizer', '$110'),
(9, './images/item1.webp', 'Facial Cleanser', '$30'),
(10, './images/item2.webp', 'Rose Water Toner', '$28'),
(11, './images/item3.webp', 'Vitamin C Serum', '$54'),
(12, './images/item4.webp', 'Retinol Serum', '$64'),
(13, './images/item5.webp', 'Anti-Aging Eye Cream', '$44'),
(14, './images/item6.webp', 'Hydrating Moisturizer', '$48'),
(15, './images/item7.webp', 'Brightening Moisturizer', '$48'),
(16, './images/item8.webp', 'Retinol Moisturizer', '$58'),
(17, './images/item9.webp', 'Detox Mask', '$38');

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `Id` int(11) NOT NULL,
  `menu_image` varchar(255) NOT NULL,
  `menu_title` varchar(255) NOT NULL,
  `menu_body` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`Id`, `menu_image`, `menu_title`, `menu_body`) VALUES
(5, './images/rc-reunion_360x.webp', 'Mental Health is Health', 'By celebrating our uniqueness and making people feel more conected, Clear+ aims to reduce the stigma associated with mental health.'),
(6, './images/image-2_c505ea63-6d45-4573-a64a-6865e6de09bc_360x.webp', 'Word Choice in Mental Health', 'How a simple change in our language--to focus on the person, not on their mental health challenge--can make all the difference in the lives of those around us.'),
(7, './images/how-to-support-others_360x.webp', 'Miranda Jenner & CEO of NAMI', 'Miranda sits down with the CEO of National Alliance on Mental Illness(NAMI),Dan Gillison, to chat about chronic loneliness and the healing power of human connection.'),
(8, './images/ri-index-ambassadors-400x400_360x.webp', 'Introducing the Rare Impact Ambassador program', 'Bringing together 28 college and graduate students across the U.S. who have been nominated by our mental health community partners as mental health champions in their community.'),
(9, './images/ri-article-image-ywm-400x400_360x.webp', 'Your Words Matter', 'Because the stories you share, the words you use, and how you respond have an impact on someone\'s mental health.'),
(10, './images/ri-index-eoy-report-400x400-300DPI_360x.webp', 'Rare Beauty Social Impact 2021', 'Highlighting the growth that we\'ve fostered together so far, and the steps we\'ve taken to create positive change in the Clear+ community and beyond.');

-- --------------------------------------------------------

--
-- Table structure for table `shop`
--

CREATE TABLE `shop` (
  `shopId` int(11) NOT NULL,
  `shop_image` varchar(255) NOT NULL,
  `shop_title` varchar(255) NOT NULL,
  `shop_body` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `shop`
--

INSERT INTO `shop` (`shopId`, `shop_image`, `shop_title`, `shop_body`) VALUES
(4, './images/a6907ddaabe4d7babb112293e734c0e8.jpg', 'hhhhhhhhhh', 'gggggggggggg'),
(5, './images/a6907ddaabe4d7babb112293e734c0e8.jpg', 'hhhhhhhhhh', 'gggggggggggg');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `userID` int(11) NOT NULL,
  `email` varchar(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `userpassword` binary(60) NOT NULL,
  `role` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`userID`, `email`, `username`, `userpassword`, `role`) VALUES
(5, 'auronalidem', 'auronalidemaj', 0x2432792431302464474c65792e6452467263337448352e314d6838702e6b7343656f57554d7373427a3233626d792f725368695048726f5a39467347, '1'),
(6, 'blerinakuka', 'Blair', 0x243279243130246e4461625845736c4943783444517250364337656a4f6941684c6a4c2f70392f54636b5a4e50474236332f5a4a2e51636c79726c43, '1'),
(7, 'auronibossi', 'auron123456', 0x243279243130246d324b4e576652306f77646463756847612e6e546c4f415878382f7148676b554c6a6f4d624c79557a4d71476f613667766c546e61, '0');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `shop`
--
ALTER TABLE `shop`
  ADD PRIMARY KEY (`shopId`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`userID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `shop`
--
ALTER TABLE `shop`
  MODIFY `shopId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `userID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
