-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 22, 2022 at 10:46 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project_gewoonpizza`
--
CREATE DATABASE IF NOT EXISTS `project_gewoonpizza` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `project_gewoonpizza`;

-- --------------------------------------------------------

--
-- Table structure for table `menukaart`
--

CREATE TABLE `menukaart` (
  `ID` int(20) NOT NULL,
  `prijs` decimal(5,2) NOT NULL,
  `beschrijving` varchar(20) NOT NULL,
  `naam` varchar(20) NOT NULL,
  `fotolink` varchar(250) NOT NULL,
  `cat` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `menukaart`
--

INSERT INTO `menukaart` (`ID`, `prijs`, `beschrijving`, `naam`, `fotolink`, `cat`) VALUES
(23, '10.00', 'lekker pizza dunner', 'pizza', 'https://familiefavorieten.nl/wp-content/uploads/2020/05/Pizza-zelf-maken.jpg', 0),
(25, '10.00', 'een pizza salami', 'pizza salami', 'https://d1mlbwr23caxox.cloudfront.net/public/sites/default/files/recipe-images/Pizza_Salami_1_1.JPG?VersionId=Dfl6TOFPCpk2ycMBWMe7iJkDj9M0lzWA', 0),
(26, '10.00', 'een pizza met ananas', 'pizza hawaii', 'https://www.tantefanny.nl/wp-content/uploads/sites/2/2018/02/Pizza_Hawaii-700x800.jpg', 0),
(27, '10.00', 'lekker pizza dunner', 'pizza duner', 'https://ohmydish.nl/wp-content/uploads/2017/09/Pizza-chicken-kebab.jpg', 0),
(28, '2.50', 'blikje fanta', 'fanta', 'https://beheer.kippie.nl/thumbnail/14/c3/2c/1633952632/Fanta%20(blik)_1920x1920.jpg', 1),
(29, '2.50', 'verfrissend!', 'fanta exotic', 'https://www.kantoorartikelen.nl/autoimg/2540710/1200x1200/resize/fanta-exotic-zero-frisdrank-0-33-l-blik-pak-24-x-330-milliliter-.jpg', 1),
(30, '2.50', 'cola cherry lekker!', 'cola cherry', 'https://www.ah-boodschappen.nl/storage/product-image/poster/11604.jpg', 1),
(33, '12.00', 'goeie pizza', 'pizza', 'https://images.ctfassets.net/uexfe9h31g3m/6oBxgSjH9KoYuQqS2uO4Kc/a4b920125e77646ca7a573932a6301d6/GLUTEN-FREE-PIZZA.jpg?w=1200&h=600&fm=jpg&fit=thumb&q=90&fl=progressive', 0);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `roll` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `roll`) VALUES
(1, 'daniel', 'daniel', 'admin'),
(2, 'gebruiker1', 'gebruiker1', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `menukaart`
--
ALTER TABLE `menukaart`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `menukaart`
--
ALTER TABLE `menukaart`
  MODIFY `ID` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
