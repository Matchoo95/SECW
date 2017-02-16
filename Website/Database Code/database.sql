-- phpMyAdmin SQL Dump
-- version 4.1.14.8
-- http://www.phpmyadmin.net
--
-- Host: db667536964.db.1and1.com
-- Generation Time: Feb 16, 2017 at 03:42 PM
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
  `appointmentID` int(25) NOT NULL AUTO_INCREMENT,
  `dateCreated` date NOT NULL,
  `dateOfAppointment` date NOT NULL,
  `Listings_listingID` int(11) NOT NULL,
  PRIMARY KEY (`appointmentID`),
  KEY `fk_Appointments_Listings_idx` (`Listings_listingID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=1 ;

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
  `listingID` int(25) NOT NULL AUTO_INCREMENT,
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
  `bedroom` int(10) NOT NULL,
  `type` varchar(25) COLLATE latin1_general_ci NOT NULL,
  PRIMARY KEY (`listingID`),
  UNIQUE KEY `contactNumber_2` (`contactNumber`),
  UNIQUE KEY `contactNumber_3` (`contactNumber`),
  UNIQUE KEY `contactNumber_4` (`contactNumber`),
  KEY `fk_Listings_Users1_idx` (`Users_userID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=3 ;

--
-- Dumping data for table `Listings`
--

INSERT INTO `Listings` (`listingID`, `information`, `photoLink`, `price`, `contactNumber`, `addressLineOne`, `addressLineTwo`, `city`, `county`, `postcode`, `Users_userID`, `bedroom`, `type`) VALUES
(1, 'Student Mundial Property ID: 3574 - Student Residence - Middle Street is our newest development and is situated just a three minute walk from the Portsmouth University Quarter and less than 20 metres from the Eldon Building, Nuffield Campus, ideal for students studying within the Faculty of Creative and Cultural Industries. This like our other buildings is being built to our high specifications, ensuring we offer our students the best in student living. \r\n\r\nThis new purpose built student accommodation includes a range of studios from Bronze to Suites as well as a disabled access studio on every floor. In addition students living in the Middle Street student accommodation will have the use of some great communal areas, a lounge (a great place to meet with your new friends in the building and watch TV on the large projector screen), study rooms, state of the art gym (now there is no excuse) and laundry room, of course. \r\n\r\nThe building is also just minutes from the city centre and Gunwharf Quays (a large shopping complex which boasts great shopping, restaurants and nightlife). \r\n\r\nPortsmouth has excellent transport links, with National Express and a train station servicing connections to London, Gatwick airport and Heathrow airport. So whether you are local, from the UK, or an international student, it’s easy to get to and around Portsmouth', 'http://www.rightmove.co.uk/student-accommodation/property-64048895.html#', 305, 2080196866, '22 Middle Street', NULL, 'Portsmouth', 'Hampshire', 'PO1 567', 1, 1, 'Flat'),
(2, 'Student Mundial Property ID: 3573 - Student Residence - Middle Street is our newest development and is situated just a three minute walk from the Portsmouth University Quarter and less than 20 metres from the Eldon Building, Nuffield Campus, ideal for students studying within the Faculty of Creative and Cultural Industries. This like our other buildings is being built to our high specifications, ensuring we offer our students the best in student living. \r\n\r\nThis new purpose built student accommodation includes a range of studios from Bronze to Suites as well as a disabled access studio on every floor. In addition students living in the Middle Street student accommodation will have the use of some great communal areas, a lounge (a great place to meet with your new friends in the building and watch TV on the large projector screen), study rooms, state of the art gym (now there is no excuse) and laundry room, of course. \r\n\r\nThe building is also just minutes from the city centre and Gunwharf Quays (a large shopping complex which boasts great shopping, restaurants and nightlife). \r\n\r\nPortsmouth has excellent transport links, with National Express and a train station servicing connections to London, Gatwick airport and Heathrow airport. So whether you are local, from the UK, or an international student, it’s easy to get to and around Portsmouth', 'http://www.rightmove.co.uk/student-accommodation/property-64048901.html#', 285, 2080126866, '22 Middle Street', NULL, 'Portsmouth', 'Hampshire', 'PO1 567', 1, 1, 'Flat');

-- --------------------------------------------------------

--
-- Table structure for table `Users`
--

CREATE TABLE IF NOT EXISTS `Users` (
  `userID` int(25) NOT NULL AUTO_INCREMENT,
  `username` varchar(45) COLLATE latin1_general_ci NOT NULL,
  `password` varchar(45) COLLATE latin1_general_ci NOT NULL,
  `phone` int(11) DEFAULT NULL,
  `email` varchar(45) COLLATE latin1_general_ci NOT NULL,
  `firstname` varchar(45) COLLATE latin1_general_ci NOT NULL,
  `lastname` varchar(45) COLLATE latin1_general_ci NOT NULL,
  PRIMARY KEY (`userID`),
  UNIQUE KEY `username` (`username`),
  UNIQUE KEY `email` (`email`),
  UNIQUE KEY `phone` (`phone`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=4 ;

--
-- Dumping data for table `Users`
--

INSERT INTO `Users` (`userID`, `username`, `password`, `phone`, `email`, `firstname`, `lastname`) VALUES
(1, 'matt', 'matt', 2147483647, 'up769535@myport.ac.uk', 'Matt', 'Hawkins');

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
