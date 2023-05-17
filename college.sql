-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 17, 2023 at 09:03 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `college`
--

-- --------------------------------------------------------

--
-- Table structure for table `login-info`
--

CREATE TABLE `login-info` (
  `username` varchar(20) NOT NULL,
  `password` text NOT NULL,
  `is_admin` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `login-info`
--

INSERT INTO `login-info` (`username`, `password`, `is_admin`) VALUES
('emadeddin', 'asdasdsadasda', 1);

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `id` varchar(20) NOT NULL,
  `name` varchar(25) NOT NULL,
  `score` int(11) NOT NULL,
  `avatar` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `name`, `score`, `avatar`) VALUES
('0154313', 'Ahmed Atef', 0, 'admin.jpg'),
('1', 'Muhammed Emadeddin', 50, 'admin.jpg'),
('1036556576', 'jOmUJFLvpF', 150, 'GYsvBkuKwK.jpg'),
('1995165452', 'VTMpFInZEQ', 404, 'snmyZcpdNs.jpg'),
('3885143567', 'zxRIraTeuM', 402, 'VzQcbSVFhJ.jpg'),
('4962153797', 'MtSKOMfOJH', 220, 'znKAEENVDj.jpg'),
('6262726063', 'DdwgcIeAsF', 346, 'XpPRzpacgn.jpg'),
('7388532899', 'EfSPNcBzSo', 425, 'yoWOFVFGKi.jpg'),
('7415067037', 'WEhpFGoqQj', 165, 'loZNOziMWN.jpg'),
('8253254308', 'xkGuQwveiH', 41, 'IDAvzkCEfM.jpg'),
('8598199894', 'iLEVjcrGAd', 109, 'hVaxybMdSU.jpg'),
('9822839375', 'UpXzxoCSwk', 269, 'rhEPJwpVGJ.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `login-info`
--
ALTER TABLE `login-info`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
