-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 05, 2021 at 07:57 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `onlinemovie`
--

-- --------------------------------------------------------

--
-- Table structure for table `movies`
--

CREATE TABLE `movies` (
  `mid` int(10) NOT NULL,
  `name` varchar(30) NOT NULL,
  `genre` varchar(20) NOT NULL,
  `rdate` varchar(5) NOT NULL,
  `runtime` varchar(4) NOT NULL,
  `decription` varchar(100) NOT NULL,
  `viewers` int(10) DEFAULT 1,
  `imgpath` text NOT NULL,
  `videopath` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `movies`
--

INSERT INTO `movies` (`mid`, `name`, `genre`, `rdate`, `runtime`, `decription`, `viewers`, `imgpath`, `videopath`) VALUES
(1, 'testing', 'testing', '2020', '10', 'Testing', 3, 'splash.jpg', '1- Introduction_2 - coursedownloader.net.mp4'),
(2, 'first sample', 'crime', '2012', '10', 'Online Movie Streaming is a web based system that made up of PHP and MYSQL for the database. You can', 2, 'jp.jpg', '1.mp4'),
(3, 'second movie', 'comedy', '2021', '12', 'Online Movie Streaming is a web based system that made up of PHP and MYSQL for the database. You can', 1, 'btff.jpg', '2.mp4'),
(4, 'third movie', 'musical', '2020', '20', 'Online Movie Streaming is a web based system that made up of PHP and MYSQL for the database. You can', 3, 'ha.jpg', '3.mp4'),
(5, 'fourth movie', 'sport', '2019', '10', 'Online Movie Streaming is a web based system that made up of PHP and MYSQL for the database. You can', 3, 'pok.jpg', '4.mp4'),
(6, 'fifth movie', 'sport', '2018', '10', 'Online Movie Streaming is a web based system that made up of PHP and MYSQL for the database. You can', 1, 'cu.jpg', '5.mp4'),
(7, 'new movie', 'action, crime', '2021', '10', 'Online Movie Streaming is a web based system that made up of PHP and MYSQL for the database. You can', 1, 'cu.jpg', '6.mp4');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(100) NOT NULL,
  `username` varchar(25) NOT NULL,
  `passwd` varchar(20) NOT NULL,
  `name` varchar(20) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `email` varchar(25) NOT NULL,
  `DOB` varchar(10) NOT NULL,
  `mid` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `passwd`, `name`, `phone`, `email`, `DOB`, `mid`) VALUES
(1, 'admin@gmail.com', 'admin', 'alan abiodun', '+234 01001', 'admin@gmail.com', '19/12/2000', 5),
(2, 'ade@gmail.com', 'ade@gmail.com', 'micheal ade', '+234 66666', 'ade@gmail.com', '16/12/1995', 5);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `movies`
--
ALTER TABLE `movies`
  ADD PRIMARY KEY (`mid`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD KEY `mid` (`mid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `movies`
--
ALTER TABLE `movies`
  MODIFY `mid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`mid`) REFERENCES `movies` (`mid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
