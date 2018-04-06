-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 01, 2018 at 02:20 AM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `zad_database`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `Email` int(11) NOT NULL,
  `Username` int(11) NOT NULL,
  `Password` int(11) NOT NULL,
  `ID_admin` int(11) NOT NULL,
  PRIMARY KEY (`ID_admin`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Table structure for table `auction`
--

CREATE TABLE IF NOT EXISTS `auction` (
  `Current_price` int(11) NOT NULL,
  `Bid_price` int(11) NOT NULL,
  `End_time` int(11) NOT NULL,
  `Start_time` int(11) NOT NULL,
  `The_winning_user` int(11) NOT NULL,
  `Stop_bid` int(11) NOT NULL,
  `id_auction` int(11) NOT NULL,
  PRIMARY KEY (`id_auction`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Table structure for table `bid`
--

CREATE TABLE IF NOT EXISTS `bid` (
  `ID_user` int(11) NOT NULL,
  `id_auction` int(11) NOT NULL,
  PRIMARY KEY (`ID_user`,`id_auction`),
  KEY `id_auction` (`id_auction`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Table structure for table `has_a`
--

CREATE TABLE IF NOT EXISTS `has_a` (
  `ID_user` int(11) NOT NULL,
  `id_auction` int(11) NOT NULL,
  PRIMARY KEY (`ID_user`,`id_auction`),
  KEY `id_auction` (`id_auction`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Table structure for table `item`
--

CREATE TABLE IF NOT EXISTS `item` (
  `ID_item` int(11) NOT NULL,
  `Description` int(11) NOT NULL,
  `Item_name` int(11) NOT NULL,
  `Title` int(11) NOT NULL,
  `Price` int(11) NOT NULL,
  `Status` int(11) NOT NULL,
  `Shipping_method` int(11) NOT NULL,
  `id_auction` int(11) NOT NULL,
  PRIMARY KEY (`ID_item`,`id_auction`),
  KEY `id_auction` (`id_auction`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Table structure for table `manage_a`
--

CREATE TABLE IF NOT EXISTS `manage_a` (
  `ID_admin` int(11) NOT NULL,
  `id_auction` int(11) NOT NULL,
  PRIMARY KEY (`ID_admin`,`id_auction`),
  KEY `id_auction` (`id_auction`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Table structure for table `manage_u`
--

CREATE TABLE IF NOT EXISTS `manage_u` (
  `ID_admin` int(11) NOT NULL,
  `ID_user` int(11) NOT NULL,
  PRIMARY KEY (`ID_admin`,`ID_user`),
  KEY `ID_user` (`ID_user`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE IF NOT EXISTS `review` (
  `Status` int(11) NOT NULL,
  `Number` int(11) NOT NULL,
  `Feedback` int(11) NOT NULL,
  `id_r` int(11) NOT NULL,
  `ID_item` int(11) NOT NULL,
  `id_auction` int(11) NOT NULL,
  PRIMARY KEY (`id_r`,`ID_item`,`id_auction`),
  KEY `ID_item` (`ID_item`,`id_auction`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `Password` int(11) NOT NULL,
  `Username` int(11) NOT NULL,
  `ID_user` int(11) NOT NULL,
  `City` int(11) NOT NULL,
  `Phone` int(11) NOT NULL,
  `Email` int(11) NOT NULL,
  `Postcode` int(11) NOT NULL,
  PRIMARY KEY (`ID_user`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `Password` varchar(255) COLLATE utf8_bin NOT NULL,
  `Username` varchar(255) COLLATE utf8_bin NOT NULL,
  `ID_user` int(11) NOT NULL AUTO_INCREMENT,
  `City` varchar(255) COLLATE utf8_bin NOT NULL,
  `Phone` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `Email` varchar(255) COLLATE utf8_bin NOT NULL,
  `Firstname` varchar(255) COLLATE utf8_bin NOT NULL,
  `Lastname` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `sellerpage` int(11) DEFAULT NULL,
  PRIMARY KEY (`ID_user`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=4 ;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `bid`
--
ALTER TABLE `bid`
  ADD CONSTRAINT `bid_ibfk_1` FOREIGN KEY (`ID_user`) REFERENCES `user` (`ID_user`),
  ADD CONSTRAINT `bid_ibfk_2` FOREIGN KEY (`id_auction`) REFERENCES `auction` (`id_auction`);

--
-- Constraints for table `has_a`
--
ALTER TABLE `has_a`
  ADD CONSTRAINT `has_a_ibfk_1` FOREIGN KEY (`ID_user`) REFERENCES `user` (`ID_user`),
  ADD CONSTRAINT `has_a_ibfk_2` FOREIGN KEY (`id_auction`) REFERENCES `auction` (`id_auction`);

--
-- Constraints for table `item`
--
ALTER TABLE `item`
  ADD CONSTRAINT `item_ibfk_1` FOREIGN KEY (`id_auction`) REFERENCES `auction` (`id_auction`);

--
-- Constraints for table `manage_a`
--
ALTER TABLE `manage_a`
  ADD CONSTRAINT `manage_a_ibfk_1` FOREIGN KEY (`ID_admin`) REFERENCES `admin` (`ID_admin`),
  ADD CONSTRAINT `manage_a_ibfk_2` FOREIGN KEY (`id_auction`) REFERENCES `auction` (`id_auction`);

--
-- Constraints for table `manage_u`
--
ALTER TABLE `manage_u`
  ADD CONSTRAINT `manage_u_ibfk_1` FOREIGN KEY (`ID_admin`) REFERENCES `admin` (`ID_admin`),
  ADD CONSTRAINT `manage_u_ibfk_2` FOREIGN KEY (`ID_user`) REFERENCES `user` (`ID_user`);

--
-- Constraints for table `review`
--
ALTER TABLE `review`
  ADD CONSTRAINT `review_ibfk_1` FOREIGN KEY (`ID_item`, `id_auction`) REFERENCES `item` (`ID_item`, `id_auction`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
