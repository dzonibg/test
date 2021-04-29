-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 29, 2021 at 06:03 PM
-- Server version: 5.7.24
-- PHP Version: 7.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(11) NOT NULL,
  `name` varchar(191) NOT NULL,
  `email` varchar(191) NOT NULL,
  `password` varchar(191) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `password`) VALUES
(1, 'test', 'n@n.com', '$2y$10$mX5ucQ86Hfag2podssGhuOUiILNdFhfcG96GZZkC3xliL/zu3.UXG'),
(2, 'test', 'n@n.com', '$2y$10$G0DMfOh5ey.uWYImZL7c2OWwfVD0aTFdGU1P9rHRu5K5wLtrrU7QS'),
(3, 'test', 'n@n.com', '$2y$10$OkGGlbCJRnQuPJNw4Zz3SOIX/kSYwG6i9dkGK7ljJOgsVfIwoTi5O'),
(4, 'Nikola', 'test@test.com', '$2y$10$mn7nwMbIl0Xnui5hAW4U/exOg0opgxB7IYrUxwXCRASbqfNMv04Ia'),
(5, 'nik', 'nikola@n.com', '$2y$10$09/hTvMakppu8qhqwcMve.UxP8SWFdYU6FD.ZC/0vrsVx180KHJWO'),
(6, '', '', '$2y$10$n2QmxA8qctwKqvRwtpETHu4dJ.VTO5XhD.aPRbyNFpd0Ino6QbmCG'),
(7, '', '', '$2y$10$tpX4yh2fbVJOnoO.4R9J/.gtmoWlHz6gxppUgR4S7l30TQwq5mmg6'),
(8, '', '', '$2y$10$AbIS6nzwZ42nouxBg8OEDusyKpbzEiz474YgEcYYCfz50rAMPA3SK'),
(9, '', '', '$2y$10$X7KPHth9VDYPM9zk0u4ZCen0su0UImsvS6UCr2luoHTnmfyyRbEbu'),
(10, 'Nikola', 't@t.t', '$2y$10$nTSXf/4gHZeD/Cfzi22jOe4ECX7KaDupVXAkyBC8ySUCUeCamDbPu'),
(11, 'Dzoni', 'n@n.org', '$2y$10$pB/VqUZRwIBzdxF6vXMwf.ohEZRXTRQvWrPxGhwEs1Ejq.DOFIqtK');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `name` varchar(191) NOT NULL,
  `email` varchar(191) NOT NULL,
  `body` varchar(191) NOT NULL,
  `is_approved` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `product_id`, `name`, `email`, `body`, `is_approved`) VALUES
(2, 0, 'Nikola', 'test@test.com', 'Text.', 1),
(3, 0, 'Nikola', 'n@n.com', 'Text.', 1),
(4, 1, 'N', 'nnnn', 'Lemon!!!', 1),
(5, 1, 'Lemon again', 'nnn', 'Test', 0),
(6, 4, 'Nikola', 'test@test.com', 'Text.', 0),
(7, 1, 'Nikola', 'test@test.com', 'Text.', 0),
(8, 1, 'Nikola', 'nikola@n.com', 'Comment!', 0);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `title` varchar(191) NOT NULL,
  `description` varchar(191) NOT NULL,
  `image` varchar(191) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `title`, `description`, `image`) VALUES
(1, 'Lemon', 'Edited Lemon.', 'image'),
(2, 'Lemon', 'a lemon.....', 'image'),
(3, 'Lemon', 'a lemon.', 'cfgdhabe87216qsrmtljopkni5726.jpg'),
(4, 'Another Lemon.', 'Lots of lemonade.', 'hdgbcefa34855nslirktmqjpo5020.jpg'),
(5, 'Lemon', 'a lemon.', 'fgcedhba53106qtsmnpjiklor2993.jpg'),
(6, 'Lemon', 'Lots of lemonade.', 'hcagbfde56244risolnqjktmp9380.jpg'),
(7, 'Lemon', 'a lemon.', 'dagbfhce43688lmspjqikonrt8367.jpg'),
(8, 'another', 'Edited Lemon.', 'gafdehbc14551roismjtnplkq9067.jpg'),
(9, 'another', 'Edited Lemon.', 'dacfegbh37530onmiksplqtrj7966.jpg'),
(10, 'Another Lemon.', 'a lemon.', 'adebhfcg85417ljkqmntrpsoi6411.jpg'),
(11, 'Lemon', 'Lots of lemonade.', 'afhgcdeb15993tnoipsklqmjr3543.jpg'),
(12, 'Lemon', 'a lemon.', 'bhecfadg68052rnplikjotmqs1982.jpg'),
(13, 'another', 'a lemon.', 'bhdfgeca25064oqmtskjplrin3842.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `test`
--

CREATE TABLE `test` (
  `id` int(11) NOT NULL,
  `name` varchar(191) NOT NULL,
  `email` varchar(191) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `test`
--

INSERT INTO `test` (`id`, `name`, `email`) VALUES
(1, 'Nikola', 'n@n.com'),
(2, 'Nikola', 'n@n.com'),
(3, 'Nikola', 'n@n.com'),
(4, 'Nikola', 'n@n.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `test`
--
ALTER TABLE `test`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `test`
--
ALTER TABLE `test`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
