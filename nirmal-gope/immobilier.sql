-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 24, 2021 at 04:47 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `immobilier`
--

-- --------------------------------------------------------

--
-- Table structure for table `logement`
--

CREATE TABLE `logement` (
  `id_logement` int(11) NOT NULL,
  `titre` varchar(50) NOT NULL,
  `adresse` varchar(100) NOT NULL,
  `ville` varchar(100) NOT NULL,
  `cp` varchar(100) NOT NULL,
  `surface` int(11) NOT NULL,
  `prix` int(11) NOT NULL,
  `photo` varchar(255) DEFAULT NULL,
  `type` varchar(100) NOT NULL,
  `description` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `logement`
--

INSERT INTO `logement` (`id_logement`, `titre`, `adresse`, `ville`, `cp`, `surface`, `prix`, `photo`, `type`, `description`) VALUES
(33, 'Paris logement', '15 gare du nord', 'paris', '75010', 659, 9872967, 'logement_1614178777.jpg', 'location', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus neque minima nulla omnis, doloribus earum perferendis, in illo repellendus dolore quam temporibus placeat sequi nam totam fugit. Dolore, ut sapiente!'),
(34, 'Creteil logement', '15 rue de port', 'creteil', '94000', 54, 5465785, 'logement_1614178855.jpg', 'vente', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus neque minima nulla omnis, doloribus earum perferendis, in illo repellendus dolore quam temporibus placeat sequi nam totam fugit. Dolore, ut sapiente!'),
(35, 'Vincenne logement', '35 rue hugo', 'vincenne', '94300', 35, 152237, 'logement_1614178894.jpg', 'location', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus neque minima nulla omnis, doloribus earum perferendis, in illo repellendus dolore quam temporibus placeat sequi nam totam fugit. Dolore, ut sapiente!');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `logement`
--
ALTER TABLE `logement`
  ADD PRIMARY KEY (`id_logement`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `logement`
--
ALTER TABLE `logement`
  MODIFY `id_logement` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
