-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jan 16, 2021 at 05:36 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sdi1600191`
--

-- --------------------------------------------------------

--
-- Table structure for table `adeia_eidikou_skopou`
--

CREATE TABLE `adeia_eidikou_skopou` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `surname` varchar(255) DEFAULT NULL,
  `mail` varchar(255) DEFAULT NULL,
  `afm` int(11) DEFAULT NULL,
  `date_start` date NOT NULL,
  `date_end` date DEFAULT NULL,
  `num_of_kids` varchar(255) DEFAULT NULL,
  `first_kid_rank` varchar(255) DEFAULT NULL,
  `second_kid_rank` varchar(255) DEFAULT NULL,
  `third_kid_rank` varchar(255) DEFAULT NULL,
  `fourth_kid_rank` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `adeia_eidikou_skopou`
--

INSERT INTO `adeia_eidikou_skopou` (`id`, `name`, `surname`, `mail`, `afm`, `date_start`, `date_end`, `num_of_kids`, `first_kid_rank`, `second_kid_rank`, `third_kid_rank`, `fourth_kid_rank`) VALUES
(22, 'Alex', 'Xan', 'alxan@hotmail.com', 123456789, '2021-01-17', '2021-01-23', 'one', 'nipiagwgio', 'NULL', 'NULL', 'NULL'),
(24, 'Alex', 'Xan', 'alxan@hotmail.com', 123456789, '2021-01-31', '2021-02-06', '4', 'nipiagwgio', 'dimotiko', 'lykeio', 'dimotiko'),
(26, 'Alex', 'Xan', 'alxan@hotmail.com', 123456789, '2021-01-31', '2021-02-06', '5', 'nipiagwgio', 'nipiagwgio', 'nipiagwgio', 'nipiagwgio');

-- --------------------------------------------------------

--
-- Table structure for table `reservation`
--

CREATE TABLE `reservation` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `surname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `afm` int(11) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `reason` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `reservation`
--

INSERT INTO `reservation` (`id`, `name`, `surname`, `email`, `afm`, `date`, `time`, `reason`) VALUES
(1, 'pant', 'mal', 'pant@mail.com', 111111111, '2020-12-23', '14:08:00', 'enimerwsi'),
(7, 'Pant', 'Mal', 'pantmal@hotmail.com', 123456789, '2020-12-30', '12:33:00', 'enimerwsi'),
(8, 'pant', 'mal', 'pantmal@hotmail.com', 123456789, '2021-01-09', '12:33:00', 'other'),
(9, 'pant', 'mal', 'pantmal@hotmail.com', 123456789, '2020-12-30', '12:07:00', 'parapona'),
(10, 'pant', 'mal', 'pantmal@hotmail.com', 123456789, '2020-12-29', '14:01:00', 'katathesi'),
(13, 'pant', 'mal', 'pantmal@hotmail.com', 123456789, '2020-12-28', '12:43:00', 'other'),
(14, 'pant', 'mal', 'pantmal@hotmail.com', 123456777, '2021-01-16', '14:44:00', 'other');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(255) NOT NULL,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `afm` int(11) NOT NULL,
  `afm_ergodoti` int(11) DEFAULT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL,
  `parent` varchar(255) NOT NULL,
  `tilergasia_start` date DEFAULT NULL,
  `tilergasia_end` date DEFAULT NULL,
  `anastoli_start` date DEFAULT NULL,
  `anastoli_end` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `email`, `afm`, `afm_ergodoti`, `first_name`, `last_name`, `role`, `parent`, `tilergasia_start`, `tilergasia_end`, `anastoli_start`, `anastoli_end`) VALUES
(5, 'PantMal', 'HgeMIN6Txsu4M', 'pm@hotmail.com', 123456777, 123456788, 'Pant', 'Mal', 'ergazomenos', 'no', '2021-01-02', '2021-01-09', '2021-01-17', '2021-01-23'),
(8, 'AlexXan', '$2y$10$mz/b2CWpuq7FjaRODwGVqu90ILMKvhMU6tIGF7/tC4bx6P7lvB8TG', 'alxan@hotmail.com', 123456789, 123456788, 'Alex', 'Xan', 'ergazomenos', 'yes', '2021-02-21', '2021-02-27', NULL, NULL),
(10, 'FanisBirbo', '$2y$10$y/JJR6isEj4X.aH/t.Dknu3JUGfaCbzCbNnoDOZj0U72WedjuxC0a', 'fanbirb@gmail.com', 123456788, NULL, 'Fanis', 'Birbo', 'ergodotis', 'yes', NULL, NULL, NULL, NULL),
(11, 'NewUser', '$2y$10$1tScNCPCuH525KN3ctJSmOEQUJf3rQJraeacWly7kajhHZv2ltUhC', 'pantmal@hotmail.com', 123456666, 123456788, 'New', 'User', 'ergazomenos', 'no', NULL, NULL, NULL, NULL),
(13, 'NewUser1', '$2y$10$uvmj/41NiNL.8M5AwA2iPeXUi7NKq4MWd29gnkRSUXcc3RqnznIQi', 'pantmal@hotmail.com', 123456666, 123455555, 'New1', 'User1', 'ergazomenos', 'no', NULL, NULL, NULL, NULL),
(14, 'NewUser2', '$2y$10$keovGi.ZxKUo2igrsaTUWOBVllx4VvrIG6JyZwGbahjwVqYmbtgWy', 'pantmal@hotmail.com', 123455555, NULL, 'New2', 'User2', 'ergodotis', 'no', NULL, NULL, NULL, NULL),
(15, 'NewUser15', '$2y$10$OQ.JP/t0bUD9tjupkuJCiOljmi7STdzP/a7ZXyv9skobVnRgSK8Wu', 'pantmal@hotmail.com', 111111111, NULL, 'New', 'User', 'ergodotis', 'no', NULL, NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adeia_eidikou_skopou`
--
ALTER TABLE `adeia_eidikou_skopou`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reservation`
--
ALTER TABLE `reservation`
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
-- AUTO_INCREMENT for table `adeia_eidikou_skopou`
--
ALTER TABLE `adeia_eidikou_skopou`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `reservation`
--
ALTER TABLE `reservation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
