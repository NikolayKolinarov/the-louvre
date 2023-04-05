-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Време на генериране:  5 апр 2023 в 13:27
-- Версия на сървъра: 10.4.22-MariaDB
-- Версия на PHP: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данни: `thelouvre`
--

-- --------------------------------------------------------

--
-- Структура на таблица `exhibits`
--

CREATE TABLE `exhibits` (
  `Id` int(11) NOT NULL,
  `Name` varchar(255) DEFAULT NULL,
  `Category` varchar(255) DEFAULT NULL,
  `Place` varchar(255) DEFAULT NULL,
  `MadePlace` varchar(255) DEFAULT NULL,
  `FilePath` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Схема на данните от таблица `exhibits`
--

INSERT INTO `exhibits` (`Id`, `Name`, `Category`, `Place`, `MadePlace`, `FilePath`) VALUES
(1, 'The Mona Lisa', 'Portrait', '1', 'Italy', '../images/mona_lisa.jpg'),
(2, 'Niki', 'Nature', '2', 'Bulgaria', '../images/mona_lisa.jpg');

-- --------------------------------------------------------

--
-- Структура на таблица `place`
--

CREATE TABLE `place` (
  `Id` int(11) NOT NULL,
  `Room` varchar(255) DEFAULT NULL,
  `Floor` varchar(255) DEFAULT NULL,
  `ExhibitsId` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Схема на данните от таблица `place`
--

INSERT INTO `place` (`Id`, `Room`, `Floor`, `ExhibitsId`) VALUES
(1, '1', '1', 1),
(2, '2', '1', 2);

-- --------------------------------------------------------

--
-- Структура на таблица `user`
--

CREATE TABLE `user` (
  `userId` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `pass` varchar(255) DEFAULT NULL,
  `userType` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Схема на данните от таблица `user`
--

INSERT INTO `user` (`userId`, `name`, `email`, `pass`, `userType`) VALUES
(1, 'admin', 'admin@gmail.com', '123456', 'admin'),
(15, 'Nikolay', 'niki@mail.bg', '20eabe5d64b0e216796e834f52d61fd0b70332fc', 'user');

--
-- Indexes for dumped tables
--

--
-- Индекси за таблица `exhibits`
--
ALTER TABLE `exhibits`
  ADD PRIMARY KEY (`Id`);

--
-- Индекси за таблица `place`
--
ALTER TABLE `place`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `ExhibitsId` (`ExhibitsId`);

--
-- Индекси за таблица `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`userId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `exhibits`
--
ALTER TABLE `exhibits`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `userId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- Ограничения за дъмпнати таблици
--

--
-- Ограничения за таблица `place`
--
ALTER TABLE `place`
  ADD CONSTRAINT `place_ibfk_1` FOREIGN KEY (`ExhibitsId`) REFERENCES `exhibits` (`Id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
