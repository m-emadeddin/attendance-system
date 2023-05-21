-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 20, 2023 at 03:48 PM
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
-- Table structure for table `dept_info`
--

CREATE TABLE `dept_info` (
  `id` varchar(20) NOT NULL,
  `nid` varchar(14) NOT NULL,
  `dept` varchar(50) NOT NULL,
  `year` varchar(50) NOT NULL,
  `sem` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `dept_info`
--

INSERT INTO `dept_info` (`id`, `nid`, `dept`, `year`, `sem`) VALUES
('std_1', '12345678901234', 'Computer and Systems', 'Third', 'Second'),
('std_2', '12341234567890', 'Embedded Systems', 'Third', 'Second'),
('std_3', '12341234567666', 'Flutter Dev', 'Third', 'Second');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `username` varchar(20) NOT NULL,
  `password` text NOT NULL,
  `is_admin` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`username`, `password`, `is_admin`) VALUES
('admin', 'd033e22ae348aeb5660fc2140aec35850c4da997', 1),
('emadeddin', 'bf1b9ea2662573a87dd2070728c9b009e627e049', 1),
('std_1', '33615028dc041431e7ef4249a237d90ea9da3355', 0),
('std_2', '23bffce445d3046c7403d15a46502f4246a0b197', 0),
('std_3', 'b010ed3f99f383465ace0100356c874bfee4c555', 0),
('user', '12dea96fec20593566ab75692c9949596833adc9', 0);

-- --------------------------------------------------------

--
-- Table structure for table `personal_info`
--

CREATE TABLE `personal_info` (
  `id` varchar(20) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(11) NOT NULL,
  `address` varchar(50) NOT NULL,
  `birthday` date NOT NULL,
  `national` varchar(50) NOT NULL,
  `account` varchar(50) NOT NULL,
  `pic` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `personal_info`
--

INSERT INTO `personal_info` (`id`, `name`, `email`, `phone`, `address`, `birthday`, `national`, `account`, `pic`) VALUES
('std_1', 'Muhammed Emadeddin', 'muhammed.emadeddin@gmail.com', '01102114701', 'Shershiema, Hehia, Egypt', '2001-07-23', 'Egyptian', 'muhammed.emadeddin@zu.edu.eg', '8.JPG'),
('std_2', 'Ahmed Atef', 'ahmed.atef@gmail.com', '01010101001', 'Zagazig, Egypt', '2001-01-01', 'Egyptian', 'ahmed.atef@zu.edu.eg', 'any.jpg'),
('std_3', 'Moaz Blzen', 'moza.blzen@gmail.com', '01234567890', 'Zagazig, Egypt', '2001-12-12', 'Egyptian', 'moza.blzen@zu.edu.eg', 'any.jpg');

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

('1', 'Muhammed Emadeddin', 64, 'admin.jpg'),
('2', 'user', 7, 'any.jpg'),
('53f30211', 'CARD3', 1, 'CARD3.JPG'),
('9355b592', 'CARD1', 3, 'CARD1.JPG'),
('std_1', 'Muhammed Emadeddin', 7, 'any.jpg'),
('std_2', 'Ahmed Atef', 2, 'any.jpg'),
('std_3', 'Moaz Ahmed', 2, 'any.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dept_info`
--
ALTER TABLE `dept_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `personal_info`
--
ALTER TABLE `personal_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
