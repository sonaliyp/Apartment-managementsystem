
CREATE DATABASE  apartmentdb;

USE  apartmentdb;

CREATE TABLE IF NOT EXISTS `events` (
  `name` varchar(30) NOT NULL,
  `description` varchar(200) NOT NULL,
  `edate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



CREATE TABLE IF NOT EXISTS `floorplan` (
  `floorplanId` int(11) NOT NULL AUTO_INCREMENT,
  `floorplanName` varchar(20) NOT NULL,
  PRIMARY KEY (`floorplanId`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;


INSERT INTO `floorplan` (`floorplanId`, `floorplanName`) VALUES
(1, 'Kipling'),
(2, 'Thoreau Floorplan'),
(3, 'Emerson Floorplan'),
(4, 'Hawthorne');



CREATE TABLE IF NOT EXISTS `reviews` (
  `reviewsId` int(11) NOT NULL AUTO_INCREMENT,
  `userID` varchar(20) NOT NULL,
  `details` varchar(500) NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`reviewsId`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;


INSERT INTO `reviews` (`reviewsId`, `userID`, `details`, `date`) VALUES
(6, 'Abc@dkg', 'We lived in', '2014-05-03'),
(7, 'Abc@dkg', 'We lived in this community for more than 8 years ( Bld C, Bld I and Bld T) . We feel like our home. ', '2014-04-26'),
(8, 'Abc@dkg', 'The quick response of the Maintenance service and staff response is greatly recognized and appreciated. ', '2014-04-12'),
(9, 'Abc@dkg', 'Good place to live with a Nice park next to it.', '2014-04-25');



CREATE TABLE IF NOT EXISTS `rooms` (
  `roomID` int(11) NOT NULL AUTO_INCREMENT,
  `floorplanId` int(11) NOT NULL,
  `floorplanDeatils` varchar(50) NOT NULL,
  `bed` int(11) NOT NULL,
  `bath` int(11) NOT NULL,
  `sqrft` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `floor` varchar(20) NOT NULL,
  `washer_d` varchar(20) NOT NULL,
  PRIMARY KEY (`roomID`),
  KEY `floorplanId` (`floorplanId`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2348 ;



INSERT INTO `rooms` (`roomID`, `floorplanId`, `floorplanDeatils`, `bed`, `bath`, `sqrft`, `price`, `floor`, `washer_d`) VALUES
(110, 1, 'Hurry up $400 discou', 3, 3, 900, 2600, '2', 'yes'),
(111, 2, 'Good Location, sun light is good.', 1, 1, 550, 1500, '2', 'No'),
(112, 3, 'Nice apartment for children, garden is near to thi', 2, 2, 1013, 2300, '1', 'Full W/D  '),
(113, 2, 'Nice creek view.', 1, 2, 800, 1900, '2', 'yes');


CREATE TABLE IF NOT EXISTS `users` (
  `userID` int(11) NOT NULL AUTO_INCREMENT,
  `emailAddress` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `firstName` varchar(255) NOT NULL,
  `lastName` varchar(255) NOT NULL,
  `city` varchar(20) NOT NULL,
  `state` varchar(20) NOT NULL,
  `country` varchar(20) NOT NULL,
  `isAdmin` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`userID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;


INSERT INTO `users` (`userID`, `emailAddress`, `password`, `firstName`, `lastName`, `city`, `state`, `country`, `isAdmin`) VALUES
(1, 'sonali@gmail.com', 'abc', 'sonali', 'phatak', 'Santa clara', 'CA', 'USA', 1),
(2, 'a', 'A', 'B', 'c', 'D', 'G', 'Y', 0),
(3, 'emailAddress', 'password', 'firstName', 'lastName', 'city', 'state', 'country', 2),
(4, 'abc@gmail.com', 'abc', 'Yash', 'phatak', 'santa clara ', 'CA', 'USA', 2),
(5, 'abc@gmail.com', 'abc', 'Yash', 'phatak', 'santa clara ', 'CA', 'USA', 2),
(6, 'ab@gmail.com', 'ab', 'Yashodhan', 'phatak', 'santa clara ', 'CA', 'USA', 2);


ALTER TABLE `rooms`
  ADD CONSTRAINT `rooms_ibfk_1` FOREIGN KEY (`floorplanId`) REFERENCES `floorplan` (`floorplanId`);

