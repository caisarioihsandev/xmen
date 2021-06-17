-- phpMyAdmin SQL Dump
-- version 4.9.5deb2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 17, 2021 at 11:08 PM
-- Server version: 8.0.25-0ubuntu0.20.04.1
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `xmen`
--

-- --------------------------------------------------------

--
-- Table structure for table `matching_superhero_skill`
--

CREATE TABLE `matching_superhero_skill` (
  `matching_id` int NOT NULL,
  `superhero_id` int NOT NULL,
  `skill_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `matching_superhero_skill`
--

INSERT INTO `matching_superhero_skill` (`matching_id`, `superhero_id`, `skill_id`) VALUES
(1, 2, 5),
(2, 2, 6),
(3, 5, 2),
(4, 5, 3),
(5, 5, 4),
(6, 3, 1);

-- --------------------------------------------------------

--
-- Table structure for table `skill`
--

CREATE TABLE `skill` (
  `skill_id` int NOT NULL,
  `skill_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `skill`
--

INSERT INTO `skill` (`skill_id`, `skill_name`) VALUES
(1, 'Bisa Terbang'),
(2, 'Bisa Membuat Hujan'),
(3, 'Bisa Membuat Petir'),
(4, 'Bisa Mengendalikan Angin dan Badai'),
(5, 'Bisa Sembuh Dengan Cepat'),
(6, 'Mempunyai Cakar Yang Lebih Kuat Dari Baja'),
(7, 'Makan Beling'),
(8, 'Bisa Tidur Tanpa Merem'),
(9, 'Bisa Merem Tanpa Tidur');

-- --------------------------------------------------------

--
-- Table structure for table `superhero`
--

CREATE TABLE `superhero` (
  `superhero_id` int NOT NULL,
  `superhero_name` varchar(255) NOT NULL,
  `superhero_gender` enum('Laki-laki','Perempuan') CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `superhero`
--

INSERT INTO `superhero` (`superhero_id`, `superhero_name`, `superhero_gender`) VALUES
(1, 'Proffesor X', 'Laki-laki'),
(2, 'Wolverine', 'Laki-laki'),
(3, ' Raven', 'Perempuan'),
(4, 'Beast', 'Laki-laki'),
(5, 'Storm', 'Perempuan'),
(6, ' Raven', 'Perempuan');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `matching_superhero_skill`
--
ALTER TABLE `matching_superhero_skill`
  ADD PRIMARY KEY (`matching_id`),
  ADD KEY `superhero_id` (`superhero_id`),
  ADD KEY `skill_id` (`skill_id`);

--
-- Indexes for table `skill`
--
ALTER TABLE `skill`
  ADD PRIMARY KEY (`skill_id`);

--
-- Indexes for table `superhero`
--
ALTER TABLE `superhero`
  ADD PRIMARY KEY (`superhero_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `matching_superhero_skill`
--
ALTER TABLE `matching_superhero_skill`
  MODIFY `matching_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `skill`
--
ALTER TABLE `skill`
  MODIFY `skill_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `superhero`
--
ALTER TABLE `superhero`
  MODIFY `superhero_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `matching_superhero_skill`
--
ALTER TABLE `matching_superhero_skill`
  ADD CONSTRAINT `matching_superhero_skill_ibfk_1` FOREIGN KEY (`superhero_id`) REFERENCES `superhero` (`superhero_id`),
  ADD CONSTRAINT `matching_superhero_skill_ibfk_2` FOREIGN KEY (`skill_id`) REFERENCES `skill` (`skill_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
