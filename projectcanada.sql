-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 28, 2024 at 04:22 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `projectcanada`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `email`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `feed_back`
--

CREATE TABLE `feed_back` (
  `id` int(255) NOT NULL,
  `user_id` int(55) NOT NULL,
  `email` varchar(55) NOT NULL,
  `request` text NOT NULL,
  `response` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `feed_back`
--

INSERT INTO `feed_back` (`id`, `user_id`, `email`, `request`, `response`) VALUES
(1, 0, 'fredolotoin28@gmail.com', 'what is a variable?', 'a variable is an identofier'),
(2, 0, 'fredolotoin28@gmail.com', 'what is a variable?', 'ok');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `date_of_birth` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `region` varchar(255) NOT NULL,
  `postal_code` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `phone`, `date_of_birth`, `gender`, `address`, `country`, `city`, `region`, `postal_code`, `password`) VALUES
(1, 'b', 'b@n', '66', '66', 'g', 'gg', 'gg', 'gg', 'gg', '1d3', ''),
(2, 'rrr', 'kdkd@mail', '', '', 'on', 'dpdpd', '', 'pdpd', '', 'undefined', ''),
(3, 'rrr', 'kdkd@mail', '09089786756', '2024-12-13', 'on', 'dpdpd', '', 'pdpd', '', 'undefined', ''),
(4, 'rrr', 'kdkd@mail', '09089786756', '2024-12-13', 'on', 'dpdpd', '', 'pdpd', '', 'undefined', ''),
(5, 'rrr', 'kdkd@mail', '09089786756', '2024-12-13', 'on', 'dpdpd', '', 'pdpd', '', 'undefined', ''),
(6, 'rrr', 'kdkd@mail', '09089786756', '2024-12-13', 'on', 'dpdpd', '', 'pdpd', '', 'undefined', ''),
(7, 'rrr', 'kdkd@mail', '09089786756', '2024-12-13', 'on', 'dpdpd', 'Nigeria', 'pdpd', 'Edo', 'undefined', ''),
(8, 'rrr', 'kdkd@mail', '09089786756', '2024-12-13', 'on', 'dpdpd', 'Nigeria', 'pdpd', 'Edo', 'undefined', ''),
(9, 'rrr', 'kdkd@mail', '09089786756', '2024-12-13', 'on', 'dpdpd', 'Nigeria', 'pdpd', 'Edo', 'undefined', ''),
(10, 'rrr', 'kdkd@mail', '09089786756', '2024-12-13', 'on', 'dpdpd', 'Nigeria', 'pdpd', 'Edo', 'undefined', ''),
(11, '', '', '', '', '', '', '', '', '', '', ''),
(12, 'first', 'first@mail.com', '0808716262', '2024-12-14', 'on', 'france', 'Barbados', 'paris', 'hoston', 'undefined', 'PROJECT52783169410110'),
(13, 'first', 'first@mail.com', '0808716262', '2024-12-14', 'on', 'france', 'Barbados', 'paris', 'hoston', 'undefined', 'PROJECT128725011191064'),
(14, 'first', 'first@mail.com', '0808716262', '2024-12-22', 'on', 'france', 'Barbados', 'paris', 'hoston', 'undefined', 'PROJECT129528103611104'),
(15, 'bread tea', 'fredolotoin28@gmail.com', '0808716262', '2024-12-14', 'on', 'france', 'Barbados', 'paris', 'hoston', 'undefined', 'PROJECT812111653104790'),
(16, 'first', 'first@mail.com', '0808716262', '2024-12-14', 'on', 'france', 'Barbados', 'paris', 'hoston', 'undefined', 'PROJECT110129705811642'),
(17, 'first', 'first@mail.com', '0808716262', '2024-12-14', 'on', 'france', 'Barbados', 'paris', 'hoston', 'undefined', 'PROJECT621105109731241'),
(18, 'first', 'first@mail.com', '0808716262', '2024-12-14', 'on', 'france', 'Barbados', 'paris', 'hoston', 'undefined', 'PROJECT56230798411011'),
(19, 'first', 'first@mail.com', '0808716262', '2024-12-14', 'on', 'france', 'Barbados', 'paris', 'hoston', 'undefined', 'PROJECT20108671125349'),
(20, 'first', 'first@mail.com', '0808716262', '2024-12-14', 'on', 'france', 'Barbados', 'paris', 'hoston', 'undefined', 'PROJECT365071221081141'),
(21, '', '', '', '', '', '', '', '', '', '', 'PROJECT614257910111283'),
(22, 'bread tea', 'fredolotoin28@gmail.com', '0808716262', '2024-12-24', 'on', 'france', 'Barbados', 'paris', 'hoston', 'undefined', 'PROJECT43851011907216');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feed_back`
--
ALTER TABLE `feed_back`
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
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `feed_back`
--
ALTER TABLE `feed_back`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
