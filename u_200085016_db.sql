-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 29, 2021 at 06:08 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `u_200085016_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `eventattendees`
--

CREATE TABLE `eventattendees` (
  `UserID` int(11) NOT NULL,
  `EventID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` int(11) NOT NULL,
  `Category` enum('Sport','Culture','Other') NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Time` datetime NOT NULL,
  `Description` varchar(255) NOT NULL,
  `Organiser` varchar(50) NOT NULL,
  `Location` varchar(50) NOT NULL,
  `Image` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `Category`, `Name`, `Time`, `Description`, `Organiser`, `Location`, `Image`) VALUES
(1, 'Sport', 'Football 5-a-side tournament', '2021-05-03 12:00:00', 'Partake in an intense game of 5 a side football in a tournament to see which team reigns supreme.', 'Sports Teams', 'Football pitches', 'Football_image.jpg'),
(2, 'Culture', 'Movie Night', '2021-04-28 22:45:13', 'watch some of the greatest classsics whilst you grab some popcorn', 'Eventbrite', 'Student Union', 'Movie_image.jpg'),
(3, 'Sport', 'Cricket', '2021-05-06 12:00:00', 'If you\'re a big fan of cricket why not attend the Aston Cricket club?', 'Sports Teams', 'Sports Hall', 'Cricket_image.jpg'),
(4, 'Sport', 'Weightlifting', '2021-05-10 12:00:00', 'Prove to everyone how strong you are by visiting the weightlifting challenge to see who can lift the most', 'Sports Teams', 'Gymnasium', 'Weightlifting_image.jpg'),
(5, 'Other', 'Cooking', '2021-05-12 12:00:00', 'Put your cooking skills to the test as you try to make some of the best dishes imaginable\r\n\r\n', 'Chefs', 'Kitchen', 'Cooking_image.jpg'),
(6, 'Culture', 'Eid Ul Fitr', '2021-05-13 12:00:00', 'Celebrate Eid ul Fitr together with people at the university.', 'Muslims', 'Student Union', 'Eid_image.jpg'),
(7, 'Culture', 'Visit the museum', '2021-05-12 12:00:00', 'Look at all the historical figures and pieces of history in the museums.', 'Eventbrite', 'Birmingham Museum and Art Gallery', 'Museum_image.jpg'),
(8, 'Culture', 'Visit the local Art Gallery', '2021-04-28 22:50:17', 'Visit the art gallery to view a wide variety of pa', 'Eventbrite', 'Birmingham Museum and Art Gallery', 'ArtGallery_image.jpg'),
(9, 'Culture', 'Music Festival', '2021-05-23 12:00:00', 'Listen to some of your favourite music together', 'Eventbrite', 'Main Building', 'Music_image.jpg'),
(10, 'Other', 'Wii Sports Competition', '2021-05-30 12:00:00', 'Take place in an intense game of Wii sports where you go against the reigning champion, Mansoor Shah, in a challenging game of bowling', 'Mansoor Shah', 'Student Union', 'WiiSports_image.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `likes`
--

CREATE TABLE `likes` (
  `UserID` int(11) NOT NULL,
  `EventID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `create_datetime` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `create_datetime`) VALUES
(1, 'aaa', 'aaa@gmail.com', '47bce5c74f589f4867dbd57e9ca9f808', '2021-04-18 20:43:19'),
(2, 'aaaaaaa', 'munsi211@gmail.com', '5d793fc5b00a2348c3fb9ab59e5ca98a', '2021-04-27 18:39:56');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `eventattendees`
--
ALTER TABLE `eventattendees`
  ADD KEY `UserID` (`UserID`),
  ADD KEY `EventID` (`EventID`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `likes`
--
ALTER TABLE `likes`
  ADD KEY `UserID` (`UserID`),
  ADD KEY `EventID` (`EventID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `eventattendees`
--
ALTER TABLE `eventattendees`
  ADD CONSTRAINT `eventattendees_ibfk_1` FOREIGN KEY (`EventID`) REFERENCES `events` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `eventattendees_ibfk_2` FOREIGN KEY (`UserID`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `likes`
--
ALTER TABLE `likes`
  ADD CONSTRAINT `likes_ibfk_1` FOREIGN KEY (`UserID`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `likes_ibfk_2` FOREIGN KEY (`EventID`) REFERENCES `events` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
