--
-- Table structure for table `Users`
--
CREATE TABLE IF NOT EXISTS `Users` (
  `firstname` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `lastname` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `email` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `username` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `password` varchar(50) COLLATE latin1_general_ci NOT NULL,
  PRIMARY KEY (`username`),
  UNIQUE KEY `email` (`email`),
  UNIQUE KEY `username` (`username`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Test data for table `Users`
--
INSERT INTO `Users` (`firstname`, `lastname`, `email`, `username`, `password`) VALUES
('Dave', 'Richardson', 'daverichardson@testmail.com', 'david', 'dave'),
('test', 'test', 'test', 'test', 'test');
