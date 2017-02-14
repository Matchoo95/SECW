-- phpMyAdmin SQL Dump
-- version 4.1.14.8
-- http://www.phpmyadmin.net
--
-- Host: db667536964.db.1and1.com
-- Generation Time: Feb 14, 2017 at 03:46 PM
-- Server version: 5.5.54-0+deb7u2-log
-- PHP Version: 5.4.45-0+deb7u7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db667536964`
--

-- --------------------------------------------------------

--
-- Table structure for table `Appointments`
--

CREATE TABLE IF NOT EXISTS `Appointments` (
  `appointmentID` int(11) NOT NULL,
  `dateCreated` date NOT NULL,
  `dateOfAppointment` date NOT NULL,
  `Listings_listingID` int(11) NOT NULL,
  PRIMARY KEY (`appointmentID`),
  KEY `fk_Appointments_Listings_idx` (`Listings_listingID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `Landlords`
--

CREATE TABLE IF NOT EXISTS `Landlords` (
  `Users_userID` int(11) NOT NULL,
  `companyName` varchar(100) COLLATE latin1_general_ci NOT NULL,
  PRIMARY KEY (`Users_userID`),
  KEY `fk_Landlords_Users1_idx` (`Users_userID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `Listings`
--

CREATE TABLE IF NOT EXISTS `Listings` (
  `listingID` int(11) NOT NULL,
  `information` varchar(10000) COLLATE latin1_general_ci DEFAULT NULL,
  `photoLink` varchar(300) COLLATE latin1_general_ci NOT NULL,
  `price` float NOT NULL,
  `contactNumber` int(11) NOT NULL,
  `addressLineOne` varchar(45) COLLATE latin1_general_ci DEFAULT NULL,
  `addressLineTwo` varchar(45) COLLATE latin1_general_ci DEFAULT NULL,
  `city` varchar(45) COLLATE latin1_general_ci NOT NULL,
  `county` varchar(25) COLLATE latin1_general_ci NOT NULL,
  `postcode` varchar(7) COLLATE latin1_general_ci NOT NULL,
  `Users_userID` int(11) NOT NULL,
  PRIMARY KEY (`listingID`),
  KEY `fk_Listings_Users1_idx` (`Users_userID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `Users`
--

CREATE TABLE IF NOT EXISTS `Users` (
  `userID` int(11) NOT NULL,
  `username` varchar(45) COLLATE latin1_general_ci NOT NULL,
  `password` varchar(45) COLLATE latin1_general_ci NOT NULL,
  `phoneNumber` int(11) DEFAULT NULL,
  `email` varchar(45) COLLATE latin1_general_ci NOT NULL,
  `firstname` varchar(45) COLLATE latin1_general_ci NOT NULL,
  `lastname` varchar(45) COLLATE latin1_general_ci NOT NULL,
  PRIMARY KEY (`userID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `Appointments`
--
ALTER TABLE `Appointments`
  ADD CONSTRAINT `fk_Appointments_Listings` FOREIGN KEY (`Listings_listingID`) REFERENCES `Listings` (`listingID`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `Landlords`
--
ALTER TABLE `Landlords`
  ADD CONSTRAINT `fk_Landlords_Users1` FOREIGN KEY (`Users_userID`) REFERENCES `Users` (`userID`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `Listings`
--
ALTER TABLE `Listings`
  ADD CONSTRAINT `fk_Listings_Users1` FOREIGN KEY (`Users_userID`) REFERENCES `Users` (`userID`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
