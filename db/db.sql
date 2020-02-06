CREATE TABLE `client_info` (
  `ClientId` int(11) PRIMARY KEY AUTO_INCREMENT,
  `Fullname` varchar(50) NOT NULL,
  `Address` varchar(255) NOT NULL,
  `ContactNo` varchar(50) NOT NULL,
  `EmailAdd` varchar(50) NOT NULL
);
CREATE TABLE `client_login` (
  `UserId` int(11) PRIMARY KEY AUTO_INCREMENT,
  `EmailAdd` varchar(50) NOT NULL,
  `Password` varchar(50) NOT NULL
);
CREATE TABLE `booking_info` (
  `BookId` int(11) PRIMARY KEY AUTO_INCREMENT,
  `CheckIn` date NOT NULL,
  `CheckOut` date NOT NULL,
  `NoPersons` int(11) NOT NULL,
  `NoRooms` int(11) NOT NULL,
  `TotalPay` int(11) NOT NULL
);
CREATE TABLE `reservation_info` (
 `ReservId` int(11) PRIMARY KEY AUTO_INCREMENT,
 `ClientId` int(11) NOT NULL,
 `BookId` int(11) NOT NULL,
 `RoomId` int(11) NOT NULL,
 `ConfirmId` int(11) NOT NULL
);
CREATE TABLE `room_info` (
  `RoomId` int(11) PRIMARY KEY AUTO_INCREMENT,
  `RoomType` varchar(30) NOT NULL,
  `RoomCost` int(11) NOT NULL,
  `RoomSize` int(11) NOT NULL,
  `RoomDesc` varchar(2000) NOT NULL,
  `RoomImage` varchar(255) NOT NULL,
  `RoomAvail` int(11) NOT NULL
);
CREATE TABLE confirm_info (
  `ConfirmId` int(11) PRIMARY KEY AUTO_INCREMENT,
  `ConfirmStatus` varchar(20) NOT NULL,
  `ConfirmCode` varchar(50) NOT NULL
);