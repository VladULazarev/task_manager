-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jul 06, 2022 at 11:14 AM
-- Server version: 5.7.33
-- PHP Version: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `taskmanager`
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
(1, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestiae esse rem nesciunt quos, porro ratione reprehenderit unde fuga commodi incidunt fugiat iure omnis eaque autem animi nemo explicabo cum earum.', '2022-06-29'),
(2, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestiae esse rem nesciunt quos, porro ratione reprehenderit unde fuga commodi incidunt fugiat iure omnis eaque autem animi nemo explicabo cum earum.', '2022-06-29'),
(3, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestiae esse rem nesciunt quos, porro ratione reprehenderit unde fuga commodi incidunt fugiat iure omnis eaque autem animi nemo explicabo cum earum.', '2022-06-29'),
(4, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestiae esse rem nesciunt quos, porro ratione reprehenderit unde fuga commodi incidunt fugiat iure omnis eaque autem animi nemo explicabo cum earum.', '2022-06-29'),
(5, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestiae esse rem nesciunt quos, porro ratione reprehenderit unde fuga commodi incidunt fugiat iure omnis eaque autem animi nemo explicabo cum earum.', '2022-06-29'),
(6, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestiae esse rem nesciunt quos, porro ratione reprehenderit unde fuga commodi incidunt fugiat iure omnis eaque autem animi nemo explicabo cum earum.', '2022-06-29'),
(7, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestiae esse rem nesciunt quos, porro ratione reprehenderit unde fuga commodi incidunt fugiat iure omnis eaque autem animi nemo explicabo cum earum.', '2022-06-29'),
(8, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestiae esse rem nesciunt quos, porro ratione reprehenderit unde fuga commodi incidunt fugiat iure omnis eaque autem animi nemo explicabo cum earum.', '2022-06-29'),
(9, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestiae esse rem nesciunt quos, porro ratione reprehenderit unde fuga commodi incidunt fugiat iure omnis eaque autem animi nemo explicabo cum earum.', '2022-06-29'),
(10, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestiae esse rem nesciunt quos, porro ratione reprehenderit unde fuga commodi incidunt fugiat iure omnis eaque autem animi nemo explicabo cum earum.', '2022-06-29'),
(11, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestiae esse rem nesciunt quos, porro ratione reprehenderit unde fuga commodi incidunt fugiat iure omnis eaque autem animi nemo explicabo cum earum.', '2022-06-29'),
(12, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestiae esse rem nesciunt quos, porro ratione reprehenderit unde fuga commodi incidunt fugiat iure omnis eaque autem animi nemo explicabo cum earum.', '2022-06-29'),
(13, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestiae esse rem nesciunt quos, porro ratione reprehenderit unde fuga commodi incidunt fugiat iure omnis eaque autem animi nemo explicabo cum earum.', '2022-06-29'),
(14, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestiae esse rem nesciunt quos, porro ratione reprehenderit unde fuga commodi incidunt fugiat iure omnis eaque autem animi nemo explicabo cum earum.', '2022-06-29'),
(15, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestiae esse rem nesciunt quos, porro ratione reprehenderit unde fuga commodi incidunt fugiat iure omnis eaque autem animi nemo explicabo cum earum.', '2022-06-29'),
(16, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestiae esse rem nesciunt quos, porro ratione reprehenderit unde fuga commodi incidunt fugiat iure omnis eaque autem animi nemo explicabo cum earum.', '2022-06-29'),
(17, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestiae esse rem nesciunt quos, porro ratione reprehenderit unde fuga commodi incidunt fugiat iure omnis eaque autem animi nemo explicabo cum earum.', '2022-06-29'),
(18, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestiae esse rem nesciunt quos, porro ratione reprehenderit unde fuga commodi incidunt fugiat iure omnis eaque autem animi nemo explicabo cum earum.', '2022-06-29'),
(19, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestiae esse rem nesciunt quos, porro ratione reprehenderit unde fuga commodi incidunt fugiat iure omnis eaque autem animi nemo explicabo cum earum.', '2022-06-29'),
(20, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestiae esse rem nesciunt quos, porro ratione reprehenderit unde fuga commodi incidunt fugiat iure omnis eaque autem animi nemo explicabo cum earum.', '2022-06-29'),
(21, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestiae esse rem nesciunt quos, porro ratione reprehenderit unde fuga commodi incidunt fugiat iure omnis eaque autem animi nemo explicabo cum earum.', '2022-06-29'),
(22, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestiae esse rem nesciunt quos, porro ratione reprehenderit unde fuga commodi incidunt fugiat iure omnis eaque autem animi nemo explicabo cum earum.', '2022-06-29'),
(23, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestiae esse rem nesciunt quos, porro ratione reprehenderit unde fuga commodi incidunt fugiat iure omnis eaque autem animi nemo explicabo cum earum.', '2022-06-29'),
(25, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestiae esse rem nesciunt quos, porro ratione reprehenderit unde fuga commodi incidunt fugiat iure omnis eaque autem animi nemo explicabo cum earum.', '2022-07-06');

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
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
