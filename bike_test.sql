-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hostiteľ: 127.0.0.1
-- Čas generovania: Sun 22.Jún 2025, 07:32
-- Verzia serveru: 10.4.32-MariaDB
-- Verzia PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Databáza: `bike_test`
--

-- --------------------------------------------------------

--
-- Štruktúra tabuľky pre tabuľku `cart`
--

CREATE TABLE `cart` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `product_id` int(11) NOT NULL,
  `size` char(2) DEFAULT NULL,
  `quantity` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Sťahujem dáta pre tabuľku `cart`
--

INSERT INTO `cart` (`id`, `user_id`, `product_id`, `size`, `quantity`) VALUES
(48, 32, 4, 's', 2),
(49, 32, 7, 'l', 1);

-- --------------------------------------------------------

--
-- Štruktúra tabuľky pre tabuľku `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `name` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Sťahujem dáta pre tabuľku `categories`
--

INSERT INTO `categories` (`id`, `name`) VALUES
(1, 'bikes'),
(2, 'parts'),
(3, 'accessories');

-- --------------------------------------------------------

--
-- Štruktúra tabuľky pre tabuľku `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `name` varchar(45) DEFAULT NULL,
  `surname` varchar(45) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `message` varchar(256) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Sťahujem dáta pre tabuľku `contact`
--

INSERT INTO `contact` (`id`, `name`, `surname`, `email`, `message`) VALUES
(12, 'Dmitrii', 'Kalashnikov', 'dmitri.112.k@gmail.com', 'hihihihihihih!!!!!!'),
(13, 'Dmitrii', 'Kalashnikov', 'dmitri.112.k@gmail.com', 'Wowowowow'),
(15, 'Dmitrii', 'Kalashnikov', 'dmitri.112.k@gmail.com', 'Heloo\r\n'),
(27, 'Dmitrii', 'Kalashnikov', 'dmitri.112.k@gmail.com', 'abrakadabra'),
(28, 'Dmitrii', 'Kalashnikov', 'dmitri.112.k@gmail.com', 'abrakadabra'),
(29, 'Dmitrii', 'Kalashnikov', 'dmitri.112.k@gmail.com', 'abrakadabra'),
(30, 'Dmitrii', 'Kalashnikov', 'dmitri.112.k@gmail.com', 'abrakadabra'),
(31, 'Dmitrii', 'Kalashnikov', 'dmitri.112.k@gmail.com', 'abrakadabra');

-- --------------------------------------------------------

--
-- Štruktúra tabuľky pre tabuľku `feedback`
--

CREATE TABLE `feedback` (
  `id` int(11) NOT NULL,
  `name` varchar(45) DEFAULT NULL,
  `surname` varchar(45) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `message` varchar(512) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Štruktúra tabuľky pre tabuľku `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `model` varchar(50) DEFAULT NULL,
  `price` decimal(10,2) NOT NULL,
  `popularity` float NOT NULL,
  `description` text DEFAULT NULL,
  `type` varchar(100) DEFAULT NULL,
  `brand` varchar(100) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Sťahujem dáta pre tabuľku `products`
--

INSERT INTO `products` (`id`, `name`, `model`, `price`, `popularity`, `description`, `type`, `brand`, `image`) VALUES
(2, 'MOUNTAIN HOPPER', '3578', 5800.00, 3.2, 'A high-performance mountain bike for rugged terrains.', 'SINGLE SPEED BIKES', 'HOPPER BIKES', 'images/bik6.jpg'),
(3, 'SCOTT SPARK', '4721', 320.50, 1.5, NULL, 'SINGLE SPEED BIKES', NULL, 'images/bik3.jpg'),
(4, 'TREK FUEL EX', '8134', 450.75, 6.3, NULL, 'ROAD BIKES', NULL, 'images/bik1.jpg'),
(5, 'GIANT DEFY', '2598', 280.00, 3.8, NULL, 'MOUNTAIN BIKES', NULL, 'images/bik4.jpg'),
(6, 'CANNONDALE SCALPEL', '6743', 390.25, 0, NULL, 'SINGLE SPEED BIKES', NULL, 'images/bik6.jpg'),
(7, 'SPECIALIZED EPIC', '1289', 475.00, 7.5, NULL, 'MOUNTAIN BIKES', NULL, 'images/s1.jpg'),
(8, 'BMC ROADMACHINE', '9365', 310.80, 0, NULL, 'ROAD BIKES', NULL, 'images/s2.jpg'),
(9, 'PINARELLO DOGMA', '3812', 420.60, 7.1, NULL, 'MOUNTAIN BIKES', NULL, 'images/s3.jpg'),
(10, 'YETI SB130', '5476', 360.90, 0, NULL, 'SINGLE SPEED BIKES', NULL, 'images/s4.jpg'),
(11, 'SANTA CRUZ NOMAD', '7023', 295.45, 9.75, NULL, 'ROAD BIKES', NULL, 'images/r1.jpg'),
(12, 'KONA PROCESS', '1948', 340.20, 5.5, NULL, 'MOUNTAIN BIKES', NULL, 'images/r3.jpg'),
(13, 'MERIDA ONE-FORTY', '8654', 415.30, 0, NULL, 'ROAD BIKES', NULL, 'images/r2.jpg'),
(14, 'ORBEA OCCAM', '3217', 385.65, 9.2, NULL, 'MOUNTAIN BIKES', NULL, 'images/r4.jpg'),
(16, 'Wire Locks', NULL, 7.00, 0, NULL, 'Parts', NULL, 'images/p1.jpg'),
(17, 'Gloves', NULL, 50.00, 0, NULL, 'Parts', NULL, 'images/p3.jpg'),
(18, 'Speed Cassette', NULL, 200.00, 0, NULL, 'Parts', NULL, 'images/p2.jpg'),
(19, 'Road Bike Pedals', NULL, 200.00, 0, NULL, 'Parts', NULL, 'images/p4.jpg'),
(20, 'Rear Derailleur', NULL, 200.00, 0, NULL, 'Parts', NULL, 'images/p5.jpg'),
(21, 'Race XC Crankset', NULL, 200.00, 0, NULL, 'Parts', NULL, 'images/p6.jpg'),
(22, 'Aero Handlebars', NULL, 200.00, 0, NULL, 'Parts', NULL, 'images/p7.jpg'),
(23, 'Grip Tires', NULL, 200.00, 0, NULL, 'Parts', NULL, 'images/p8.jpg'),
(24, 'Bike Wheelset', NULL, 200.00, 0, NULL, 'Parts', NULL, 'images/p9.jpg'),
(25, 'MTB Chainring', NULL, 200.00, 0, NULL, 'Parts', NULL, 'images/p10.jpg'),
(26, 'Suspensions', NULL, 200.00, 0, NULL, 'Parts', NULL, 'images/p11.jpg'),
(27, 'Helmets', NULL, 200.00, 0, NULL, 'Parts', NULL, 'images/p12.jpg'),
(28, 'Middle Frames', NULL, 200.00, 0, NULL, 'Parts', NULL, 'images/p13.jpg'),
(29, 'Brooks Saddle', NULL, 200.00, 0, NULL, 'Parts', NULL, 'images/p14.jpg'),
(30, 'Motocross braces', NULL, 200.00, 0, NULL, 'Parts', NULL, 'images/p15.jpg'),
(31, 'Bike Pumps', NULL, 200.00, 0, NULL, 'Parts', NULL, 'images/p16.jpg'),
(32, 'Bike Fenders', NULL, 7.00, 0, NULL, 'accessories', NULL, 'images/a1.JPG'),
(33, 'Cycling Helmets', NULL, 50.00, 0, NULL, 'accessories', NULL, 'images/a3.png'),
(34, 'Handle Grips', NULL, 200.00, 0, NULL, 'accessories', NULL, 'images/a2.jpg'),
(35, 'Hydration Pack Black', NULL, 200.00, 0, NULL, 'accessories', NULL, 'images/a4.jpg'),
(36, 'Electronics', NULL, 200.00, 0, NULL, 'accessories', NULL, 'images/a5.jpg'),
(37, 'Bike Panniers', NULL, 200.00, 0, NULL, 'accessories', NULL, 'images/a6.jpg'),
(38, 'Timbre Bell', NULL, 200.00, 0, NULL, 'accessories', NULL, 'images/a7.jpg'),
(39, 'Back Stands', NULL, 200.00, 0, NULL, 'accessories', NULL, 'images/a8.jpg'),
(40, 'Disc Breaks', NULL, 200.00, 0, NULL, 'accessories', NULL, 'images/a9.jpg'),
(41, 'Side Stands', NULL, 200.00, 0, NULL, 'accessories', NULL, 'images/a10.jpg'),
(42, 'Mountain Bike Shoes', NULL, 200.00, 0, NULL, 'accessories', NULL, 'images/a11.jpg'),
(43, 'Body Armours', NULL, 200.00, 0, NULL, 'accessories', NULL, 'images/a12.jpg'),
(44, 'Mountain Bags', NULL, 200.00, 0, NULL, 'accessories', NULL, 'images/a13.jpg'),
(45, 'Bicycle Headlight', NULL, 200.00, 0, NULL, 'accessories', NULL, 'images/a14.JPG'),
(46, 'Bicycle Mirrors', NULL, 200.00, 0, NULL, 'accessories', NULL, 'images/a16.JPG'),
(47, 'Water Bottles', NULL, 200.00, 0, NULL, 'accessories', NULL, 'images/a15.JPG');

-- --------------------------------------------------------

--
-- Štruktúra tabuľky pre tabuľku `product_images`
--

CREATE TABLE `product_images` (
  `id` int(11) NOT NULL,
  `product_id` int(11) DEFAULT NULL,
  `image_path` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Štruktúra tabuľky pre tabuľku `product_sizes`
--

CREATE TABLE `product_sizes` (
  `product_id` int(11) NOT NULL,
  `size_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Sťahujem dáta pre tabuľku `product_sizes`
--

INSERT INTO `product_sizes` (`product_id`, `size_id`) VALUES
(2, 1),
(2, 2),
(2, 3),
(3, 1),
(3, 2),
(3, 3),
(4, 1),
(4, 2),
(4, 3),
(5, 1),
(5, 2),
(5, 3),
(6, 1),
(6, 2),
(6, 3),
(7, 1),
(7, 2),
(7, 3),
(8, 1),
(8, 2),
(8, 3),
(9, 1),
(9, 2),
(9, 3),
(10, 1),
(10, 2),
(10, 3),
(11, 1),
(11, 2),
(11, 3),
(12, 1),
(12, 2),
(12, 3),
(13, 1),
(13, 2),
(13, 3),
(14, 1),
(14, 2),
(14, 3);

-- --------------------------------------------------------

--
-- Štruktúra tabuľky pre tabuľku `sizes`
--

CREATE TABLE `sizes` (
  `id` int(11) NOT NULL,
  `size` char(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Sťahujem dáta pre tabuľku `sizes`
--

INSERT INTO `sizes` (`id`, `size`) VALUES
(1, 's'),
(2, 'm'),
(3, 'l');

-- --------------------------------------------------------

--
-- Štruktúra tabuľky pre tabuľku `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(45) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `role` tinyint(4) DEFAULT NULL,
  `created_at` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Sťahujem dáta pre tabuľku `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `role`, `created_at`) VALUES
(26, 't', 'dmitri.112.k@mail.tv', '$2y$10$rdQAbS1Uv6.Uf.aMsKfAk.kaVj1pj8.kf8eJdnNxhZ6t4fhmCbAKq', 0, NULL),
(27, 'admin', 'admin@gmail.com', '$2y$10$P0RH6EtGJsTY4.0EUGN3WOJ/tS2TbBrUn/3nvSvBtjY2jnSwAmliG', 0, NULL),
(28, 'Dmitrii', 'dmitri.112.k@gmail.com', '$2y$10$f/3lMX2BF8Mf6FHW7AknE.iUVzUUxEDiC5HJZ68eL5.7LERGPkksy', 1, NULL),
(29, 'user', 'dmitri.112.k@mail.sk', '$2y$10$cbygEERRXhPRld9xPgWJa.ZUfkU1vKsAGiAst5lZo7gefGEpcYKzq', 1, NULL),
(32, 'u', 'u@uwu.com', '$2y$10$d8Te4GfYbS5y38RJ8OqF2O9cy/mrcLgBWa/UKb9hDGUoQGRvnrHt.', 1, NULL);

--
-- Kľúče pre exportované tabuľky
--

--
-- Indexy pre tabuľku `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_id` (`product_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexy pre tabuľku `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexy pre tabuľku `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexy pre tabuľku `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexy pre tabuľku `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexy pre tabuľku `product_images`
--
ALTER TABLE `product_images`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_id` (`product_id`);

--
-- Indexy pre tabuľku `product_sizes`
--
ALTER TABLE `product_sizes`
  ADD PRIMARY KEY (`product_id`,`size_id`),
  ADD KEY `size_id` (`size_id`);

--
-- Indexy pre tabuľku `sizes`
--
ALTER TABLE `sizes`
  ADD PRIMARY KEY (`id`);

--
-- Indexy pre tabuľku `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pre exportované tabuľky
--

--
-- AUTO_INCREMENT pre tabuľku `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT pre tabuľku `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pre tabuľku `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT pre tabuľku `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pre tabuľku `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT pre tabuľku `product_images`
--
ALTER TABLE `product_images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pre tabuľku `sizes`
--
ALTER TABLE `sizes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pre tabuľku `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- Obmedzenie pre exportované tabuľky
--

--
-- Obmedzenie pre tabuľku `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `cart_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`),
  ADD CONSTRAINT `cart_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Obmedzenie pre tabuľku `product_images`
--
ALTER TABLE `product_images`
  ADD CONSTRAINT `product_images_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`);

--
-- Obmedzenie pre tabuľku `product_sizes`
--
ALTER TABLE `product_sizes`
  ADD CONSTRAINT `product_sizes_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `product_sizes_ibfk_2` FOREIGN KEY (`size_id`) REFERENCES `sizes` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
