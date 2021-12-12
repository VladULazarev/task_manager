-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Oct 27, 2021 at 09:10 PM
-- Server version: 5.7.29
-- PHP Version: 7.4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `template`
--

-- --------------------------------------------------------

--
-- Table structure for table `tasks`
--

CREATE TABLE `tasks` (
  `id` int(8) NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tasks`
--

INSERT INTO `tasks` (`id`, `description`, `created_at`) VALUES
(1, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestiae esse rem nesciunt quos, porro ratione reprehenderit unde fuga commodi incidunt fugiat iure omnis eaque autem animi nemo explicabo cum earum.', '2021-10-27'),
(2, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestiae esse rem nesciunt quos, porro ratione reprehenderit unde fuga commodi incidunt fugiat iure omnis eaque autem animi nemo explicabo cum earum.', '2021-10-27'),
(3, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestiae esse rem nesciunt quos, porro ratione reprehenderit unde fuga commodi incidunt fugiat iure omnis eaque autem animi nemo explicabo cum earum.', '2021-10-27'),
(4, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestiae esse rem nesciunt quos, porro ratione reprehenderit unde fuga commodi incidunt fugiat iure omnis eaque autem animi nemo explicabo cum earum.', '2021-10-27'),
(5, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestiae esse rem nesciunt quos, porro ratione reprehenderit unde fuga commodi incidunt fugiat iure omnis eaque autem animi nemo explicabo cum earum.', '2021-10-27'),
(6, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestiae esse rem nesciunt quos, porro ratione reprehenderit unde fuga commodi incidunt fugiat iure omnis eaque autem animi nemo explicabo cum earum.', '2021-10-27'),
(7, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestiae esse rem nesciunt quos, porro ratione reprehenderit unde fuga commodi incidunt fugiat iure omnis eaque autem animi nemo explicabo cum earum.', '2021-10-27'),
(8, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestiae esse rem nesciunt quos, porro ratione reprehenderit unde fuga commodi incidunt fugiat iure omnis eaque autem animi nemo explicabo cum earum.', '2021-10-27'),
(9, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestiae esse rem nesciunt quos, porro ratione reprehenderit unde fuga commodi incidunt fugiat iure omnis eaque autem animi nemo explicabo cum earum.', '2021-10-27'),
(10, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestiae esse rem nesciunt quos, porro ratione reprehenderit unde fuga commodi incidunt fugiat iure omnis eaque autem animi nemo explicabo cum earum.', '2021-10-27'),
(11, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestiae esse rem nesciunt quos, porro ratione reprehenderit unde fuga commodi incidunt fugiat iure omnis eaque autem animi nemo explicabo cum earum.', '2021-10-27'),
(12, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestiae esse rem nesciunt quos, porro ratione reprehenderit unde fuga commodi incidunt fugiat iure omnis eaque autem animi nemo explicabo cum earum.', '2021-10-27'),
(13, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestiae esse rem nesciunt quos, porro ratione reprehenderit unde fuga commodi incidunt fugiat iure omnis eaque autem animi nemo explicabo cum earum.', '2021-10-27'),
(14, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestiae esse rem nesciunt quos, porro ratione reprehenderit unde fuga commodi incidunt fugiat iure omnis eaque autem animi nemo explicabo cum earum.', '2021-10-27'),
(15, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestiae esse rem nesciunt quos, porro ratione reprehenderit unde fuga commodi incidunt fugiat iure omnis eaque autem animi nemo explicabo cum earum.', '2021-10-27'),
(16, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestiae esse rem nesciunt quos, porro ratione reprehenderit unde fuga commodi incidunt fugiat iure omnis eaque autem animi nemo explicabo cum earum.', '2021-10-27'),
(17, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestiae esse rem nesciunt quos, porro ratione reprehenderit unde fuga commodi incidunt fugiat iure omnis eaque autem animi nemo explicabo cum earum.', '2021-10-27'),
(18, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestiae esse rem nesciunt quos, porro ratione reprehenderit unde fuga commodi incidunt fugiat iure omnis eaque autem animi nemo explicabo cum earum.', '2021-10-27'),
(19, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestiae esse rem nesciunt quos, porro ratione reprehenderit unde fuga commodi incidunt fugiat iure omnis eaque autem animi nemo explicabo cum earum.', '2021-10-27'),
(20, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestiae esse rem nesciunt quos, porro ratione reprehenderit unde fuga commodi incidunt fugiat iure omnis eaque autem animi nemo explicabo cum earum.', '2021-10-27'),
(21, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestiae esse rem nesciunt quos, porro ratione reprehenderit unde fuga commodi incidunt fugiat iure omnis eaque autem animi nemo explicabo cum earum.', '2021-10-27'),
(22, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestiae esse rem nesciunt quos, porro ratione reprehenderit unde fuga commodi incidunt fugiat iure omnis eaque autem animi nemo explicabo cum earum.', '2021-10-27'),
(23, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestiae esse rem nesciunt quos, porro ratione reprehenderit unde fuga commodi incidunt fugiat iure omnis eaque autem animi nemo explicabo cum earum.', '2021-10-27'),
(24, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestiae esse rem nesciunt quos, porro ratione reprehenderit unde fuga commodi incidunt fugiat iure omnis eaque autem animi nemo explicabo cum earum.', '2021-10-27'),
(25, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestiae esse rem nesciunt quos, porro ratione reprehenderit unde fuga commodi incidunt fugiat iure omnis eaque autem animi nemo explicabo cum earum.', '2021-10-27'),
(26, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestiae esse rem nesciunt quos, porro ratione reprehenderit unde fuga commodi incidunt fugiat iure omnis eaque autem animi nemo explicabo cum earum.', '2021-10-27'),
(27, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestiae esse rem nesciunt quos, porro ratione reprehenderit unde fuga commodi incidunt fugiat iure omnis eaque autem animi nemo explicabo cum earum.', '2021-10-27'),
(28, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestiae esse rem nesciunt quos, porro ratione reprehenderit unde fuga commodi incidunt fugiat iure omnis eaque autem animi nemo explicabo cum earum.', '2021-10-27'),
(29, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestiae esse rem nesciunt quos, porro ratione reprehenderit unde fuga commodi incidunt fugiat iure omnis eaque autem animi nemo explicabo cum earum.', '2021-10-27'),
(30, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestiae esse rem nesciunt quos, porro ratione reprehenderit unde fuga commodi incidunt fugiat iure omnis eaque autem animi nemo explicabo cum earum.', '2021-10-27'),
(31, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestiae esse rem nesciunt quos, porro ratione reprehenderit unde fuga commodi incidunt fugiat iure omnis eaque autem animi nemo explicabo cum earum.', '2021-10-27'),
(32, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestiae esse rem nesciunt quos, porro ratione reprehenderit unde fuga commodi incidunt fugiat iure omnis eaque autem animi nemo explicabo cum earum.', '2021-10-27'),
(33, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestiae esse rem nesciunt quos, porro ratione reprehenderit unde fuga commodi incidunt fugiat iure omnis eaque autem animi nemo explicabo cum earum.', '2021-10-27'),
(34, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestiae esse rem nesciunt quos, porro ratione reprehenderit unde fuga commodi incidunt fugiat iure omnis eaque autem animi nemo explicabo cum earum.', '2021-10-27');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(8) NOT NULL,
  `login` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tasks`
--
ALTER TABLE `tasks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tasks`
--
ALTER TABLE `tasks`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
