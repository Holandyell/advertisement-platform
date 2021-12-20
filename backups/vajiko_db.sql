-- phpMyAdmin SQL Dump
-- version 4.9.5deb2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 20, 2021 at 07:16 AM
-- Server version: 8.0.27-0ubuntu0.20.04.1
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vajiko_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `advertisement`
--

CREATE TABLE `advertisement` (
  `id` int NOT NULL,
  `category_id` int NOT NULL,
  `location_id` int NOT NULL,
  `title` varchar(255) NOT NULL,
  `price` int NOT NULL,
  `description` text NOT NULL,
  `thumbnail` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `advertisement`
--

INSERT INTO `advertisement` (`id`, `category_id`, `location_id`, `title`, `price`, `description`, `thumbnail`) VALUES
(1, 2, 2, 'იყიდება BMW 320', 3000, 'კარგ მდგომარეობაში', ''),
(2, 2, 1, 'Mercedes', 5000, 'ikideba mercedesi, titkmis axali', 'https://www.diariomotor.com/imagenes/picscache/750x/mercedes-modelos_750x.jpg'),
(3, 1, 1, 'ikideba leptopi', 500, 'sul axali', 'https://id-media.apjonlinecdn.com/catalog/product/cache/b3b166914d87ce343d4dc5ec5117b502/1/6/167y5pa_2_1.png'),
(4, 2, 3, 'Dodge', 50000, 'ubralod cxoveli', 'https://www.hushhush.com/wp-content/uploads/2019/01/1968-dodge-charger-r-t-hemi.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int NOT NULL,
  `title` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `title`) VALUES
(1, 'Computers'),
(2, 'Cars'),
(3, 'Sport');

-- --------------------------------------------------------

--
-- Table structure for table `location`
--

CREATE TABLE `location` (
  `id` int NOT NULL,
  `title` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `location`
--

INSERT INTO `location` (`id`, `title`) VALUES
(1, 'Batumi'),
(2, 'Rustavi'),
(3, 'Akhaltsikhe'),
(4, 'Quteisi'),
(20, 'Tbilisi'),
(40, ''),
(41, '');

-- --------------------------------------------------------

--
-- Table structure for table `mark`
--

CREATE TABLE `mark` (
  `id` int NOT NULL,
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `mark`
--

INSERT INTO `mark` (`id`, `title`) VALUES
(1, 'BMW');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `usersId` int NOT NULL,
  `usersName` varchar(128) COLLATE utf8mb4_general_ci NOT NULL,
  `usersEmail` varchar(128) COLLATE utf8mb4_general_ci NOT NULL,
  `usersUid` varchar(128) COLLATE utf8mb4_general_ci NOT NULL,
  `usersPwd` varchar(128) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`usersId`, `usersName`, `usersEmail`, `usersUid`, `usersPwd`) VALUES
(1, 'vazha buianovi', 'vazha.buianovi1@gmail.com', 'windtalker', 'impuls123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `advertisement`
--
ALTER TABLE `advertisement`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `location`
--
ALTER TABLE `location`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mark`
--
ALTER TABLE `mark`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`usersId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `advertisement`
--
ALTER TABLE `advertisement`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `location`
--
ALTER TABLE `location`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `mark`
--
ALTER TABLE `mark`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `usersId` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
