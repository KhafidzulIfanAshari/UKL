-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 13, 2018 at 05:50 AM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hotelreservation`
--

-- --------------------------------------------------------

--
-- Table structure for table `room`
--

CREATE TABLE `room` (
  `idRoom` int(11) NOT NULL,
  `roomClassId` int(11) NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `room`
--

INSERT INTO `room` (`idRoom`, `roomClassId`, `status`) VALUES
(1, 1, ' '),
(2, 1, ' '),
(3, 1, ''),
(4, 1, ''),
(5, 1, ''),
(6, 1, ''),
(7, 1, ' '),
(8, 1, ''),
(9, 1, ''),
(10, 1, ''),
(11, 1, ''),
(12, 1, ''),
(13, 1, ''),
(14, 1, ''),
(15, 1, ''),
(16, 1, ''),
(17, 1, ''),
(18, 1, ''),
(19, 1, ''),
(20, 1, ''),
(21, 1, ''),
(22, 1, ''),
(23, 1, ''),
(24, 1, ''),
(25, 1, ''),
(26, 1, ''),
(27, 1, ''),
(28, 1, ''),
(29, 1, ''),
(30, 1, ''),
(31, 1, ''),
(32, 1, ''),
(33, 1, ''),
(34, 1, ''),
(35, 1, ''),
(36, 1, ''),
(37, 1, ''),
(38, 1, ''),
(39, 1, ''),
(40, 1, ''),
(41, 1, ''),
(42, 1, ''),
(43, 1, ''),
(44, 1, ''),
(45, 1, ''),
(46, 1, ''),
(47, 1, ''),
(48, 1, ''),
(49, 1, ''),
(50, 1, ''),
(51, 2, ' '),
(52, 2, ' '),
(53, 2, ''),
(54, 2, ''),
(55, 2, ''),
(56, 2, ''),
(57, 2, ''),
(58, 2, ''),
(59, 2, ''),
(60, 2, ''),
(61, 2, ''),
(62, 2, ''),
(63, 2, ''),
(64, 2, ''),
(65, 2, ''),
(66, 2, ''),
(67, 2, ''),
(68, 2, ''),
(69, 2, ''),
(70, 2, ''),
(71, 2, ''),
(72, 2, ''),
(73, 2, ''),
(74, 2, ''),
(75, 2, ''),
(76, 2, ''),
(77, 2, ''),
(78, 2, ''),
(79, 2, ''),
(80, 2, ''),
(81, 2, ''),
(82, 2, ''),
(83, 2, ''),
(84, 2, ''),
(85, 2, ''),
(86, 2, ''),
(87, 2, ''),
(88, 2, ''),
(89, 2, ''),
(90, 2, ''),
(91, 2, ''),
(92, 2, ''),
(93, 2, ''),
(94, 2, ''),
(95, 2, ''),
(96, 2, ''),
(97, 2, ''),
(98, 2, ''),
(99, 2, ''),
(100, 2, ''),
(101, 3, ' '),
(102, 3, ' '),
(103, 3, ''),
(104, 3, ''),
(105, 3, ''),
(106, 3, ''),
(107, 3, ''),
(108, 3, ''),
(109, 3, ''),
(110, 3, ''),
(111, 3, ''),
(112, 3, ''),
(113, 3, ''),
(114, 3, ''),
(115, 3, ''),
(116, 3, ''),
(117, 3, ''),
(118, 3, ''),
(119, 3, ''),
(120, 3, ''),
(121, 3, ''),
(122, 3, ''),
(123, 3, ''),
(124, 3, ''),
(125, 3, ''),
(126, 3, ''),
(127, 3, ''),
(128, 3, ''),
(129, 3, ''),
(130, 3, ''),
(131, 3, ''),
(132, 3, ''),
(133, 3, ''),
(134, 3, ''),
(135, 3, ''),
(136, 3, ''),
(137, 3, ''),
(138, 3, ''),
(139, 3, ''),
(140, 3, ''),
(141, 3, ''),
(142, 3, ''),
(143, 3, ''),
(144, 3, ''),
(145, 3, ''),
(146, 3, ''),
(147, 3, ''),
(148, 3, ''),
(149, 3, ''),
(150, 3, '');

-- --------------------------------------------------------

--
-- Table structure for table `roomclass`
--

CREATE TABLE `roomclass` (
  `idRoomClass` int(11) NOT NULL,
  `roomClass` varchar(10) NOT NULL,
  `price` int(50) NOT NULL,
  `roomPic` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `roomclass`
--

INSERT INTO `roomclass` (`idRoomClass`, `roomClass`, `price`, `roomPic`) VALUES
(1, 'Alpha', 100000, 'alpha.jpeg'),
(2, 'Bravo', 200000, 'bravo.jpeg'),
(3, 'Charlie', 300000, 'charlie.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `roomreservation`
--

CREATE TABLE `roomreservation` (
  `idRoomReservation` int(11) NOT NULL,
  `roomId` int(11) NOT NULL,
  `userId` int(11) NOT NULL,
  `customer` text NOT NULL,
  `price` int(11) NOT NULL,
  `checkin` date NOT NULL,
  `checkout` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `idUser` int(10) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `identifier` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`idUser`, `username`, `password`, `identifier`) VALUES
(51301, 'cmlu', 'dG9oc2FrYQ==', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `room`
--
ALTER TABLE `room`
  ADD PRIMARY KEY (`idRoom`),
  ADD KEY `idRoomClass` (`roomClassId`);

--
-- Indexes for table `roomclass`
--
ALTER TABLE `roomclass`
  ADD PRIMARY KEY (`idRoomClass`);

--
-- Indexes for table `roomreservation`
--
ALTER TABLE `roomreservation`
  ADD PRIMARY KEY (`idRoomReservation`),
  ADD KEY `idRoom` (`roomId`),
  ADD KEY `idUser` (`userId`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`idUser`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `room`
--
ALTER TABLE `room`
  MODIFY `idRoom` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=151;

--
-- AUTO_INCREMENT for table `roomclass`
--
ALTER TABLE `roomclass`
  MODIFY `idRoomClass` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `roomreservation`
--
ALTER TABLE `roomreservation`
  MODIFY `idRoomReservation` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `room`
--
ALTER TABLE `room`
  ADD CONSTRAINT `room_ibfk_1` FOREIGN KEY (`roomClassId`) REFERENCES `roomclass` (`idRoomClass`);

--
-- Constraints for table `roomreservation`
--
ALTER TABLE `roomreservation`
  ADD CONSTRAINT `roomreservation_ibfk_1` FOREIGN KEY (`roomId`) REFERENCES `room` (`idRoom`),
  ADD CONSTRAINT `roomreservation_ibfk_2` FOREIGN KEY (`userId`) REFERENCES `user` (`idUser`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
