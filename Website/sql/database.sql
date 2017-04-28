-- Host: db667536964.db.1and1.com

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
-- Table structure for table `Listings`
--

CREATE TABLE IF NOT EXISTS `Listings` (
  `listingID` int(25) NOT NULL AUTO_INCREMENT,
  `information` varchar(10000) COLLATE latin1_general_ci DEFAULT NULL,
  `photoLink` varchar(1000) COLLATE latin1_general_ci NOT NULL,
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
  KEY `fk_Listings_Users1_idx` (`Users_userID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=142 ;

--
-- Dumping data for table `Listings`
--

INSERT INTO `Listings` (`listingID`, `information`, `photoLink`, `price`, `contactNumber`, `addressLineOne`, `addressLineTwo`, `city`, `county`, `postcode`, `Users_userID`, `bedroom`, `type`) VALUES
(1, '1', '1', 1, 1, '1', '1', '1', '1', '1', 1, 1, 'Flat'),
(2, 'Student Mundial Property ID: 3573 - Student Residence - Middle Street is our newest development and is situated just a three minute walk from the Portsmouth University Quarter and less than 20 metres from the Eldon Building, Nuffield Campus, ideal for students studying within the Faculty of Creative and Cultural Industries. This like our other buildings is being built to our high specifications, ensuring we offer our students the best in student living. \r\n\r\nThis new purpose built student accommodation includes a range of studios from Bronze to Suites as well as a disabled access studio on every floor. In addition students living in the Middle Street student accommodation will have the use of some great communal areas, a lounge (a great place to meet with your new friends in the building and watch TV on the large projector screen), study rooms, state of the art gym (now there is no excuse) and laundry room, of course. \r\n\r\nThe building is also just minutes from the city centre and Gunwharf Quays (a large shopping complex which boasts great shopping, restaurants and nightlife). \r\n\r\nPortsmouth has excellent transport links, with National Express and a train station servicing connections to London, Gatwick airport and Heathrow airport. So whether you are local, from the UK, or an international student, it’s easy to get to and around Portsmouth', 'http://www.rightmove.co.uk/student-accommodation/property-64048901.html#', 285, 2080126866, '22 Middle Street', NULL, 'Portsmouth', 'Hampshire', 'PO1 567', 1, 1, 'Flat'),
(135, '12345', '12345', 12345, 123456, '12345', '12345', '12345', '123456', '12345', 475, 1, 'Flat'),
(136, '', '123', 123, 123, '123', '123', '123', '123', '123', 1, 1, 'Flat'),
(138, '12345123451234512345', '123456', 12345, 12345, '12345', '12345', '12345', '12345', '12345', 1, 1, 'Flat'),
(139, '1', '1', 1, 1, '1', '1', '1', '1', '1', 1, 1, 'Flat'),
(140, 'dede', 'ded', 2147480000, 2147483647, '21474836482147483648', '2147483648', '2147483648', '2147483648', '2147483', 477, 1, 'Flat'),
(141, '', '', -1.11111e24, 111, 'de', 'ede', 'ded', 'ded', 'ede', 477, 10, 'Bungalow');

-- --------------------------------------------------------

--
-- Table structure for table `Users`
--

CREATE TABLE IF NOT EXISTS `Users` (
  `userID` int(25) NOT NULL AUTO_INCREMENT,
  `username` varchar(45) COLLATE latin1_general_ci NOT NULL,
  `password` varchar(45) COLLATE latin1_general_ci NOT NULL,
  `email` varchar(45) COLLATE latin1_general_ci NOT NULL,
  `firstname` varchar(45) COLLATE latin1_general_ci NOT NULL,
  `lastname` varchar(45) COLLATE latin1_general_ci NOT NULL,
  `accountType` varchar(10) COLLATE latin1_general_ci NOT NULL DEFAULT 'student',
  PRIMARY KEY (`userID`),
  UNIQUE KEY `username` (`username`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=478 ;

--
-- Dumping data for table `Users`
--

INSERT INTO `Users` (`userID`, `username`, `password`, `email`, `firstname`, `lastname`, `accountType`) VALUES
(1, 'matt', '12345', 'up769535@myport.ac.uk', 'Matt', 'Hawkins', 'vendor'),
(470, '123', '1', '12323543534', '123', '123', 'student'),
(472, 'test', 'test1', 'test1', 'test', 'test', 'vendor'),
(473, '12345', '12345', '12345', '12345', '12345', 'student'),
(474, 'jeff', '12345', 'jeff@fredrick.com', 'jeff', 'fredricks', 'vendor'),
(475, 'hello', 'hello', 'hello', 'hello', 'hello', 'vendor'),
(476, '2', '2', '2', '1', '2', 'student'),
(477, 'admin', 'admin', 'admin', 'admin', 'admin', 'vendor');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
