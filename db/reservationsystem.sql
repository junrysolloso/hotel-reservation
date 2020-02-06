-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 25, 2018 at 03:05 PM
-- Server version: 10.1.24-MariaDB
-- PHP Version: 7.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `reservationsystem`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_login`
--

CREATE TABLE `admin_login` (
  `AdminId` int(11) NOT NULL,
  `UserName` varchar(50) NOT NULL,
  `PassWord` varchar(50) NOT NULL,
  `Position` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `booking_info`
--

CREATE TABLE `booking_info` (
  `BookId` int(11) NOT NULL,
  `CheckIn` date NOT NULL,
  `CheckOut` date NOT NULL,
  `NoPersons` int(11) NOT NULL,
  `NoRooms` int(11) NOT NULL,
  `TotalPay` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `booking_info`
--

INSERT INTO `booking_info` (`BookId`, `CheckIn`, `CheckOut`, `NoPersons`, `NoRooms`, `TotalPay`) VALUES
(1, '2018-03-18', '2018-03-19', 1, 1, 500),
(2, '2018-03-18', '2018-03-19', 1, 1, 500),
(3, '2018-03-20', '2018-03-21', 1, 1, 500),
(4, '2018-03-19', '2018-03-20', 1, 1, 500),
(5, '2018-03-21', '2018-03-22', 1, 1, 500),
(6, '2018-03-26', '2018-03-25', 1, 1, 500),
(7, '2018-03-26', '2018-03-27', 1, 1, 500),
(8, '2018-03-29', '2018-03-30', 1, 1, 500),
(9, '2018-03-28', '2018-03-30', 1, 1, 1000),
(10, '2018-03-29', '2018-03-23', 2, 1, 1000),
(11, '2018-03-28', '2018-03-28', 1, 1, 500),
(12, '2018-03-29', '2018-03-30', 1, 1, 1000),
(13, '2018-03-17', '2018-03-30', 8, 2, 1500),
(14, '2018-03-26', '2018-03-27', 1, 1, 500);

-- --------------------------------------------------------

--
-- Table structure for table `client_info`
--

CREATE TABLE `client_info` (
  `ClientId` int(11) NOT NULL,
  `Fullname` varchar(50) NOT NULL,
  `Address` varchar(255) NOT NULL,
  `ContactNo` varchar(50) NOT NULL,
  `EmailAdd` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `client_info`
--

INSERT INTO `client_info` (`ClientId`, `Fullname`, `Address`, `ContactNo`, `EmailAdd`) VALUES
(1, 'Junry Solloso', 'Del Pilar Cagdianao Dinagat Islands', '09099', 'Sollosor@gmail.com'),
(2, '', '', '', ''),
(3, '$Fname', '$Address', '$CpNo', '$EmailAdd'),
(4, '', 'Del Pilar', '09898', 'sol@gmail.com'),
(5, 'Junry Solloso', 'Del Pilar', '09898', 'sol@gmail.com'),
(6, 'Renie Calaclan', 'San Jose', '909090', 'ambo@gmail.com'),
(7, 'Lea Salo', 'Santa Cruz', '900909090', 'ambot@gmail.com'),
(8, 'Richard Sibugan', 'Santa Cruz', '990909090', 'Ambot@gmail.com'),
(9, 'Rolevic Rapas', 'San Jose', '90090909', 'rafas@gmail.com'),
(10, 'Richard Sibugan', 'Santa Cruz', '09090909', 'rich@gmail.com'),
(11, 'Jean Bosito', 'Del Pilar Cagdianao Dinagat Islands', '00909090', 'Jena@gmail.com'),
(12, 'Erick Solloso', 'Del Pilar Cagdianao Dinagat Islands', '0909090900', 'er@gmail.com'),
(13, 'Kevin Blue', 'Del Pilar Cagdianao Dinagat Islands', '9090090', 'Kev@gmail.com'),
(14, 'Sybel Solloso', 'Del Pilar Cagdianao Dinagat Islands', '9090900909', 'Sy@gmail.com'),
(15, 'Ricks Solloso', 'r333', 'r', 'rick@gmail.com'),
(16, 't', 't', 't', 't'),
(17, 'kon sol', 'Del Pilar Cagdianao Dinagat Islands', '09090', 'd@gmail.com'),
(18, 'fds', 'fd', 'dsf', 'sf'),
(19, 'fd', 'dfd', 'ddf', 'df');

-- --------------------------------------------------------

--
-- Table structure for table `client_login`
--

CREATE TABLE `client_login` (
  `UserId` int(11) NOT NULL,
  `EmailAdd` varchar(50) NOT NULL,
  `Password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `client_login`
--

INSERT INTO `client_login` (`UserId`, `EmailAdd`, `Password`) VALUES
(1, '$EmailAdd', '$ConPword'),
(2, 'sol@gmail.com', '7815696ecbf1c96e6894b779456d330e'),
(3, 'sol@gmail.com', '7815696ecbf1c96e6894b779456d330e'),
(4, 'Ambot@gmail.com', '31ecdfad4aeb5212efc00c57c0180f9c');

-- --------------------------------------------------------

--
-- Table structure for table `confirm_info`
--

CREATE TABLE `confirm_info` (
  `ConfirmId` int(11) NOT NULL,
  `ConfirmStatus` varchar(20) NOT NULL,
  `ConfirmCode` varchar(50) NOT NULL,
  `ConfirmRef` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `confirm_info`
--

INSERT INTO `confirm_info` (`ConfirmId`, `ConfirmStatus`, `ConfirmCode`, `ConfirmRef`) VALUES
(1, 'YES', '130000', ''),
(2, 'YES', '130005', ''),
(3, 'YES', '130006', ''),
(4, 'YES', '130008', ''),
(5, 'YES', '130009', ''),
(6, 'NO', '130010', ''),
(7, 'NO', '130011', ''),
(8, 'YES', '130012', ''),
(9, '', '', '676766rrt'),
(10, 'YES', '130013', ''),
(11, 'YES', '130014', '22dsfsd'),
(12, 'YES', '130015', 'ff88eekjej3'),
(13, 'YES', '130016', '90404040kkfsldkfsl'),
(14, 'YES', '130017', 'rewr3222'),
(15, 'YES', '130018', '');

-- --------------------------------------------------------

--
-- Table structure for table `reservation_info`
--

CREATE TABLE `reservation_info` (
  `ReservId` int(11) NOT NULL,
  `ClientId` int(11) NOT NULL,
  `BookId` int(11) NOT NULL,
  `RoomId` int(11) NOT NULL,
  `ConfirmId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reservation_info`
--

INSERT INTO `reservation_info` (`ReservId`, `ClientId`, `BookId`, `RoomId`, `ConfirmId`) VALUES
(1, 1, 1, 3, 1),
(2, 6, 2, 3, 2),
(3, 7, 3, 3, 3),
(4, 9, 4, 3, 4),
(5, 10, 5, 3, 5),
(6, 11, 6, 3, 6),
(7, 12, 7, 3, 7),
(8, 13, 8, 3, 8),
(9, 14, 9, 2, 10),
(10, 15, 10, 2, 11),
(11, 16, 11, 3, 12),
(12, 17, 12, 2, 13),
(13, 18, 13, 1, 14),
(14, 19, 14, 3, 15);

-- --------------------------------------------------------

--
-- Table structure for table `room_info`
--

CREATE TABLE `room_info` (
  `RoomId` int(11) NOT NULL,
  `RoomType` varchar(30) NOT NULL,
  `RoomCost` int(11) NOT NULL,
  `RoomSize` int(11) NOT NULL,
  `RoomDesc` varchar(2000) NOT NULL,
  `RoomImage` varchar(255) NOT NULL,
  `RoomAvail` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `room_info`
--

INSERT INTO `room_info` (`RoomId`, `RoomType`, `RoomCost`, `RoomSize`, `RoomDesc`, `RoomImage`, `RoomAvail`) VALUES
(1, 'DELUXE', 1500, 4, 'The deluxe room has a surface of 37 m² and is located in the historical part of the hotel. The elegant furnishing and sophisticated colors give the room a warm glow. The room is equipped with an espresso machine and marble bathroom with l\'Occitane room amenities.', 'C:\\xampp\\htdocs\\System\\HotelRS\\upload\\DeluxeRoom.jpg', 10),
(2, 'DOUBLE', 1000, 2, 'The double room has a surface of 20 m² and is located in the historical part of the hotel. The elegant furnishing and sophisticated colors give the room a warm glow. The room is equipped with an espresso machine and marble bathroom with l\'Occitane room amenities.', 'C:\\xampp\\htdocs\\System\\HotelRS\\upload\\DoubleRoom.jpg', 10),
(3, 'SINGLE', 500, 1, 'The single room has a surface of 15 m² and is located in the historical part of the hotel. The elegant furnishing and sophisticated colors give the room a warm glow. The room is equipped with an espresso machine and marble bathroom with l\'Occitane room amenities.', 'C:\\xampp\\htdocs\\System\\HotelRS\\upload\\SingleRoom.jpg', 10);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_login`
--
ALTER TABLE `admin_login`
  ADD PRIMARY KEY (`AdminId`);

--
-- Indexes for table `booking_info`
--
ALTER TABLE `booking_info`
  ADD PRIMARY KEY (`BookId`);

--
-- Indexes for table `client_info`
--
ALTER TABLE `client_info`
  ADD PRIMARY KEY (`ClientId`);

--
-- Indexes for table `client_login`
--
ALTER TABLE `client_login`
  ADD PRIMARY KEY (`UserId`);

--
-- Indexes for table `confirm_info`
--
ALTER TABLE `confirm_info`
  ADD PRIMARY KEY (`ConfirmId`);

--
-- Indexes for table `reservation_info`
--
ALTER TABLE `reservation_info`
  ADD PRIMARY KEY (`ReservId`);

--
-- Indexes for table `room_info`
--
ALTER TABLE `room_info`
  ADD PRIMARY KEY (`RoomId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_login`
--
ALTER TABLE `admin_login`
  MODIFY `AdminId` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `booking_info`
--
ALTER TABLE `booking_info`
  MODIFY `BookId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `client_info`
--
ALTER TABLE `client_info`
  MODIFY `ClientId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `client_login`
--
ALTER TABLE `client_login`
  MODIFY `UserId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `confirm_info`
--
ALTER TABLE `confirm_info`
  MODIFY `ConfirmId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `reservation_info`
--
ALTER TABLE `reservation_info`
  MODIFY `ReservId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `room_info`
--
ALTER TABLE `room_info`
  MODIFY `RoomId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
