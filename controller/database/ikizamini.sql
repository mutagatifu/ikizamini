-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 22, 2018 at 05:15 PM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `ikizamini`
--

-- --------------------------------------------------------

--
-- Table structure for table `examtype`
--

CREATE TABLE IF NOT EXISTS `examtype` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `createdDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updateDate` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `examtype`
--

INSERT INTO `examtype` (`id`, `name`, `createdDate`, `updateDate`) VALUES
(1, 'THEORY &PRACTICAL(INDEPENDENTCANDIDATES)', '2018-11-21 10:38:41', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `intara`
--

CREATE TABLE IF NOT EXISTS `intara` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `intara`
--

INSERT INTO `intara` (`id`, `name`) VALUES
(1, 'umujyi wa kigali'),
(2, 'iburasirazuba'),
(3, 'iburengerazuba'),
(4, 'amajyepfo'),
(5, 'amajyaruguru');

-- --------------------------------------------------------

--
-- Table structure for table `locations`
--

CREATE TABLE IF NOT EXISTS `locations` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `district` varchar(50) NOT NULL,
  `province` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `province` (`province`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=31 ;

--
-- Dumping data for table `locations`
--

INSERT INTO `locations` (`id`, `district`, `province`) VALUES
(1, 'musanze', 5),
(2, 'rulindo', 5),
(3, 'gasabo', 1),
(4, 'kicukiro', 1),
(5, 'nyarugenge', 1),
(6, 'Bugesera', 2),
(7, 'Gatsibo', 2),
(8, 'Kayonza', 2),
(9, 'Kirehe.', 2),
(10, 'Ngoma.', 2),
(11, 'Nyagatare.', 2),
(12, 'Rwamagana.', 2),
(13, 'karongi', 3),
(14, 'rubavu', 3),
(15, 'rusizi', 3),
(16, 'ngororero', 3),
(17, 'nyamasheke', 3),
(18, 'rutsiro', 3),
(19, 'nyabihu', 3),
(20, 'gisagara', 4),
(21, 'huye', 4),
(22, 'kamonyi', 4),
(23, 'muhanga', 4),
(24, 'nyamagabe', 4),
(25, 'nyanza', 4),
(26, 'nyaruguru', 4),
(27, 'ruhango', 4),
(28, 'burera', 5),
(29, 'gicumbi', 5),
(30, 'gakenke', 5);

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE IF NOT EXISTS `message` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `studentId` int(11) NOT NULL,
  `schoolId` int(11) NOT NULL,
  `contents` varchar(200) NOT NULL,
  `createdDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `registrationterm`
--

CREATE TABLE IF NOT EXISTS `registrationterm` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `month` varchar(50) NOT NULL COMMENT 'month of registration',
  `from` date NOT NULL COMMENT 'the beggining of exam term',
  `to` date NOT NULL COMMENT 'the end of three month term of exams',
  `createdDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updateDate` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `registrationterm`
--

INSERT INTO `registrationterm` (`id`, `month`, `from`, `to`, `createdDate`, `updateDate`) VALUES
(1, 'july 2018', '2018-07-02', '2018-10-03', '2018-11-21 10:25:36', '0000-00-00 00:00:00'),
(2, 'october 2019', '2018-10-05', '2019-01-04', '2018-11-22 08:31:19', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `school`
--

CREATE TABLE IF NOT EXISTS `school` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `location` int(11) NOT NULL,
  `streetname` varchar(100) NOT NULL,
  `owner` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `created_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_time` datetime NOT NULL,
  `rates` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `location` (`location`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `school`
--

INSERT INTO `school` (`id`, `name`, `location`, `streetname`, `owner`, `email`, `phone`, `created_time`, `updated_time`, `rates`) VALUES
(1, 'alpha driving school', 1, '116 KK 15 RD,kigali', 'ngabonziza', 'alpha@gmail.com', '789010203', '2018-11-21 09:07:44', '0000-00-00 00:00:00', 1),
(2, 'united driving school', 4, '119 KK 15 RD,kigali', 'rwidegembya', 'united@gmail.com', '782010204', '2018-11-22 08:54:44', '0000-00-00 00:00:00', 0),
(3, 'only once driving school', 5, '119 KK 18 RG,kigali', 'kigenza', 'once@gmail.com', '782457896', '2018-11-22 09:45:01', '0000-00-00 00:00:00', 0);

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE IF NOT EXISTS `services` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `price` int(11) NOT NULL,
  `schoolId` int(11) NOT NULL,
  `created_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_time` datetime NOT NULL,
  PRIMARY KEY (`id`),
  KEY `schoolId` (`schoolId`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `name`, `price`, `schoolId`, `created_time`, `updated_time`) VALUES
(1, 'kwigisha', 2000000, 1, '2018-11-21 07:57:31', '0000-00-00 00:00:00'),
(2, 'kureba gusa', 2000000, 1, '2018-11-21 08:17:34', '0000-00-00 00:00:00'),
(3, 'gutwara imodoka', 20000088, 1, '2018-11-21 08:18:14', '0000-00-00 00:00:00'),
(4, 'gutwara igale', 20000088, 1, '2018-11-21 08:26:32', '0000-00-00 00:00:00'),
(5, 'gutwara igale', 20000088, 1, '2018-11-21 08:33:18', '0000-00-00 00:00:00'),
(6, 'gutwara igale', 20000088, 1, '2018-11-21 09:17:34', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `sites`
--

CREATE TABLE IF NOT EXISTS `sites` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `location` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `streetname` varchar(30) NOT NULL,
  `dateCreated` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `dateUpdate` datetime NOT NULL,
  PRIMARY KEY (`id`),
  KEY `location` (`location`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `sites`
--

INSERT INTO `sites` (`id`, `location`, `name`, `streetname`, `dateCreated`, `dateUpdate`) VALUES
(1, 1, 'mulindi 1', '2K MLINDI', '2018-11-21 12:11:47', '0000-00-00 00:00:00'),
(2, 3, 'mukarange1', '2K MKARANg', '2018-11-21 12:13:34', '0000-00-00 00:00:00'),
(3, 4, 'kagarama ', '116 KK 15 RD,kigali', '2018-11-22 07:46:38', '0000-00-00 00:00:00'),
(4, 5, 'nyamirambo ', 'KN 222 st,kigali', '2018-11-22 07:53:12', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE IF NOT EXISTS `staff` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `phone_number` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `position` varchar(50) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `age` int(3) NOT NULL,
  `location` int(11) NOT NULL,
  `school_id` int(11) NOT NULL,
  `profile_image` varchar(50) NOT NULL,
  `created_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_time` datetime NOT NULL,
  PRIMARY KEY (`id`),
  KEY `school_id` (`school_id`),
  KEY `location` (`location`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`id`, `name`, `phone_number`, `email`, `position`, `gender`, `age`, `location`, `school_id`, `profile_image`, `created_time`, `updated_time`) VALUES
(1, 'kanyange cassian', '0780201412', 'kabuga1@gmail.com', 'secretaire', 'female', 23, 3, 2, 'employees_service.PNG', '2018-11-21 13:09:10', '0000-00-00 00:00:00'),
(2, 'kanyange cassian', '0780201412', 'kabuga1@gmail.com', 'secretaire', 'female', 23, 1, 1, 'employees_service.PNG', '2018-11-22 10:13:26', '0000-00-00 00:00:00'),
(3, 'kanyange cassian', '0780120405', 'kanyange@gmail.com', 'technician', 'female', 23, 1, 1, 'employees_service.PNG', '2018-11-22 10:13:52', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE IF NOT EXISTS `students` (
  `NationalID` int(20) NOT NULL,
  `firstName` varchar(20) NOT NULL,
  `lastName` varchar(20) NOT NULL,
  `gender` varchar(15) NOT NULL,
  `age` int(5) NOT NULL,
  `phoneNumber` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `location` int(11) NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `update_date` datetime NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`NationalID`),
  KEY `location` (`location`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`NationalID`, `firstName`, `lastName`, `gender`, `age`, `phoneNumber`, `email`, `location`, `created_date`, `update_date`, `status`) VALUES
(2147483647, 'karimunda', 'jado', 'male', 26, '0788096535', 'jado@gmail.com', 3, '2018-11-21 09:51:15', '0000-00-00 00:00:00', 1);

-- --------------------------------------------------------

--
-- Table structure for table `studregistration`
--

CREATE TABLE IF NOT EXISTS `studregistration` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `NationalID` int(11) NOT NULL,
  `schoolId` int(11) NOT NULL,
  `serviceID` int(11) NOT NULL,
  `datecreated` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `NationalID` (`NationalID`),
  KEY `schoolId` (`schoolId`),
  KEY `serviceID` (`serviceID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `timetableofexam`
--

CREATE TABLE IF NOT EXISTS `timetableofexam` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `from` date NOT NULL,
  `to` date NOT NULL,
  `site` int(11) NOT NULL,
  `examType` int(11) NOT NULL,
  `duration` varchar(20) NOT NULL COMMENT 'duration in days',
  `termRegistration` int(11) NOT NULL,
  `createdDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updateDate` datetime NOT NULL,
  PRIMARY KEY (`id`),
  KEY `site` (`site`),
  KEY `termRegistration` (`termRegistration`),
  KEY `examType` (`examType`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `timetableofexam`
--

INSERT INTO `timetableofexam` (`id`, `from`, `to`, `site`, `examType`, `duration`, `termRegistration`, `createdDate`, `updateDate`) VALUES
(1, '2018-02-11', '2019-02-03', 2, 1, '2 days', 1, '2018-11-21 14:19:38', '0000-00-00 00:00:00'),
(2, '2018-07-09', '2019-07-10', 3, 1, '2 days', 1, '2018-11-22 08:05:46', '0000-00-00 00:00:00'),
(3, '2018-07-11', '2019-07-12', 4, 1, '2 days', 1, '2018-11-22 08:07:18', '0000-00-00 00:00:00'),
(4, '2018-10-07', '2018-10-08', 4, 1, '2 days', 2, '2018-11-22 08:33:09', '0000-00-00 00:00:00');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `locations`
--
ALTER TABLE `locations`
  ADD CONSTRAINT `locations_ibfk_1` FOREIGN KEY (`province`) REFERENCES `intara` (`id`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Constraints for table `school`
--
ALTER TABLE `school`
  ADD CONSTRAINT `school_ibfk_1` FOREIGN KEY (`location`) REFERENCES `locations` (`id`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Constraints for table `services`
--
ALTER TABLE `services`
  ADD CONSTRAINT `services_ibfk_1` FOREIGN KEY (`schoolId`) REFERENCES `school` (`id`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Constraints for table `sites`
--
ALTER TABLE `sites`
  ADD CONSTRAINT `sites_ibfk_1` FOREIGN KEY (`location`) REFERENCES `locations` (`id`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Constraints for table `staff`
--
ALTER TABLE `staff`
  ADD CONSTRAINT `staff_ibfk_1` FOREIGN KEY (`school_id`) REFERENCES `school` (`id`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `staff_ibfk_2` FOREIGN KEY (`location`) REFERENCES `locations` (`id`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Constraints for table `students`
--
ALTER TABLE `students`
  ADD CONSTRAINT `students_ibfk_1` FOREIGN KEY (`location`) REFERENCES `locations` (`id`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Constraints for table `studregistration`
--
ALTER TABLE `studregistration`
  ADD CONSTRAINT `studregistration_ibfk_1` FOREIGN KEY (`NationalID`) REFERENCES `students` (`NationalID`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `studregistration_ibfk_2` FOREIGN KEY (`schoolId`) REFERENCES `school` (`id`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `studregistration_ibfk_3` FOREIGN KEY (`serviceID`) REFERENCES `services` (`id`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Constraints for table `timetableofexam`
--
ALTER TABLE `timetableofexam`
  ADD CONSTRAINT `timetableofexam_ibfk_1` FOREIGN KEY (`site`) REFERENCES `sites` (`id`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `timetableofexam_ibfk_2` FOREIGN KEY (`termRegistration`) REFERENCES `registrationterm` (`id`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `timetableofexam_ibfk_3` FOREIGN KEY (`examType`) REFERENCES `examtype` (`id`) ON DELETE NO ACTION ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
