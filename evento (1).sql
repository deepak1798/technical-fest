-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 10, 2017 at 07:15 AM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `evento`
--

DELIMITER $$
--
-- Procedures
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `sadd` (IN `event_id` VARCHAR(25), IN `p_name` VARCHAR(50), IN `usn` VARCHAR(50), IN `college` VARCHAR(50), IN `phone` VARCHAR(50), IN `email` VARCHAR(40))  INSERT INTO participant(event_id,p_name,usn,college,phone,email) VALUES(event_id,p_name,usn,college,phone,email)$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` varchar(40) NOT NULL,
  `password` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `password`) VALUES
('admin', 'password');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `cat_id` int(5) NOT NULL,
  `cat_name` varchar(20) NOT NULL,
  `cat_desc` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`cat_id`, `cat_name`, `cat_desc`) VALUES
(1, 'sports', 'Join in to have some fun!Showcase your talent in games like football,badminton or mini militia and win attractive cash prizes'),
(2, 'technical', 'Reach out to your technical side!show off your coding or literary skills and be the best of the best'),
(3, 'cultural', 'Dance,drama and music can never be left out of any fest!Join us and make your day memorable!');

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE `event` (
  `cat_id` int(11) NOT NULL,
  `event_id` varchar(25) NOT NULL,
  `event_name` varchar(25) NOT NULL,
  `no_of_mem` int(10) NOT NULL,
  `reg_fee` int(20) NOT NULL,
  `venue` varchar(50) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `prize` int(20) NOT NULL,
  `photo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`cat_id`, `event_id`, `event_name`, `no_of_mem`, `reg_fee`, `venue`, `date`, `time`, `prize`, `photo`) VALUES
(1, 'bad', 'Badminton', 3, 100, 'Badminton Court', '2017-11-15', '10:00:00', 1000, '1509711992_7562.png'),
(1, 'bas', 'Basketball', 3, 150, 'Basketball Court', '2017-11-15', '09:30:00', 1500, '1509710395_4083.jpeg'),
(2, 'cir', 'Circuitrix', 2, 100, 'Room 217', '2017-11-15', '14:00:00', 1000, '1510151039_2602.jpeg'),
(3, 'classi', 'ClassicalDance', 5, 200, 'Auditorium', '2017-11-15', '14:00:00', 3000, '1509895004_5787.jpg'),
(2, 'cod', 'Coding', 1, 50, 'Room 105', '2017-11-15', '11:00:00', 500, '1509779292_1168.jpg'),
(3, 'coll', 'Collage', 2, 100, 'Room 314', '2017-11-15', '15:00:00', 1000, '1509895204_6306.jpg'),
(2, 'deb', 'Debugging', 2, 100, 'Room 117', '2017-11-15', '12:30:00', 800, '1509815977_7162.jpg'),
(1, 'foot', 'Football', 11, 300, 'Ground', '2017-11-15', '09:30:00', 3000, '1509711802_1193.jpeg'),
(1, 'hoc', 'hockey', 11, 3435, 'GROUND', '1279-12-12', '12:00:00', 2345, '1510291316_6778.jpeg'),
(1, 'mini', 'MiniMilitia', 3, 50, 'Room 105', '2017-11-15', '12:00:00', 800, '1509711683_2602.png'),
(3, 'paint', 'Painting', 1, 50, 'Room 123', '2017-11-15', '12:00:00', 800, '1509895804_5186.jpg'),
(2, 'pap', 'PaperPresentation', 2, 100, 'Seminar hall', '2017-11-15', '10:00:00', 1000, '1509815548_1011.jpg'),
(3, 'photo', 'Photography', 1, 50, 'Room 213', '2017-11-15', '09:30:00', 1500, '1509894886_7683.jpg'),
(2, 'quad', 'QuadCopter', 2, 100, 'Ground', '2017-11-15', '11:30:00', 1000, '1509816418_3046.jpg'),
(2, 'rub', 'RubixCube', 1, 50, 'Room 113', '2017-11-15', '12:30:00', 500, '1509815308_3027.jpg'),
(3, 'solod', 'SoloDance', 1, 50, 'Auditorium', '2017-11-15', '16:00:00', 1500, '1509895432_1822.jpeg'),
(1, 'treas', 'TreasureHunt', 4, 50, 'Ground', '2017-11-15', '11:00:00', 800, '1509711597_4734.jpg'),
(3, 'vocal', 'VocalSolo', 1, 50, 'Room 301', '2017-11-15', '10:00:00', 1000, '1509895372_3644.jpeg'),
(1, 'vol', 'Volleyball', 6, 150, 'Volleyball Court', '2017-11-15', '10:00:00', 2000, '1509710498_3105.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `participant`
--

CREATE TABLE `participant` (
  `event_id` varchar(25) NOT NULL,
  `p_name` varchar(50) NOT NULL,
  `usn` varchar(50) NOT NULL,
  `college` varchar(50) NOT NULL,
  `phone` bigint(15) NOT NULL,
  `email` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `participant`
--

INSERT INTO `participant` (`event_id`, `p_name`, `usn`, `college`, `phone`, `email`) VALUES
('bad', 'Rahul', '1by15is029', 'bmsit', 9711002299, 'rahul@gmail.com'),
('bad', 'Srikanth', '1by15is049', 'bmsit', 9133992299, 'srikanth911@gmail.com'),
('bad', 'Sindhu', '1ms15cv022', 'msrit', 9988110202, 'sindhu87@gmail.com'),
('bad', 'richa', '1mv15is067', 'sir mvit', 9870789876, 'richa@gmail.com'),
('bad', 'Saina', '1rv14cs098', 'reva', 9770011029, 'saina@gmail.com'),
('bad', 'ash', '1sc15cs015', 'svce', 4556787956, 'as@gmail.com'),
('bas', 'Siddhart', '1MV15IS044', 'sir mvit', 9916032598, 'siddharth@gmail.com'),
('cir', 'Rohit', '1mv12ec098', 'sir mvit', 9980011928, 'rohit27@gmail.com'),
('classi', 'Nisha', '1sc15cs022', 'svce', 9881100110, 'nisha@yahoo.co.in'),
('deb', 'mehul', '1by15cs098', 'bmsit', 9889988090, 'me@gmail.com'),
('deb', 'Ashish', '1mv15is012', 'sir mvit', 9999999998, 'ashish@gmail.com'),
('foot', 'Sagar', '1bm14ec023', 'bmsce', 9110022989, 'sagar@gmail.com'),
('foot', 'Ashish', '1mv15is012', 'sir mvit', 9999999998, 'ashish@gmail.com'),
('mini', 'Mithun', '1mv15is017', 'sir mvit', 9534453688, 'mithun@gmail.com'),
('paint', 'Rakshitha', '1mv17is011', 'sir mvit', 9234123492, 'rakshitah@gmail.com'),
('photo', 'Ram', '1mv15ec027', 'sir mvit', 9110033212, 'ram@gmail.com'),
('quad', 'Neha', '1by15cs011', 'bmsit', 9880011221, 'neha99@gmail.com'),
('treas', 'Sachin', '1bm13cs098', 'bmsce', 9800110011, 'sachin97@gmail.com'),
('vol', 'sama', '1sc15is087', 'svce', 4656897800, 'sama@gmail.com');

-- --------------------------------------------------------

--
-- Stand-in structure for view `v1`
-- (See below for the actual view)
--
CREATE TABLE `v1` (
`event_name` varchar(25)
,`venue` varchar(50)
,`time` time
);

-- --------------------------------------------------------

--
-- Structure for view `v1`
--
DROP TABLE IF EXISTS `v1`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v1`  AS  select `event`.`event_name` AS `event_name`,`event`.`venue` AS `venue`,`event`.`time` AS `time` from `event` ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`event_id`,`cat_id`),
  ADD KEY `cat_id` (`cat_id`);

--
-- Indexes for table `participant`
--
ALTER TABLE `participant`
  ADD PRIMARY KEY (`event_id`,`usn`),
  ADD KEY `event_id` (`event_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `cat_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `event`
--
ALTER TABLE `event`
  ADD CONSTRAINT `event_ibfk_1` FOREIGN KEY (`cat_id`) REFERENCES `category` (`cat_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `participant`
--
ALTER TABLE `participant`
  ADD CONSTRAINT `participant_ibfk_1` FOREIGN KEY (`event_id`) REFERENCES `event` (`event_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
