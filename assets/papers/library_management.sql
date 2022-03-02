-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 03, 2022 at 02:36 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `library_management`
--

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

CREATE TABLE `book` (
  `book_id` int(11) NOT NULL,
  `title` varchar(200) DEFAULT NULL,
  `price` smallint(6) DEFAULT NULL,
  `no_of_books_available` smallint(6) DEFAULT NULL,
  `author` varchar(50) DEFAULT NULL,
  `publisher_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `book`
--

INSERT INTO `book` (`book_id`, `title`, `price`, `no_of_books_available`, `author`, `publisher_id`) VALUES
(200001, 'Wings of fire', 600, 10, 'APJ Abdul kalam', 190010);

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `name` varchar(25) NOT NULL,
  `psw` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `name`, `psw`) VALUES
(1, 'hjl', 'bkl'),
(2, 'jhh', 'jhkg'),
(3, 'jhh', 'jhkg'),
(4, 'vhvhj', 'hjbbh'),
(7, 'sneka', '123'),
(8, 'sneka', '123'),
(9, 'dfghj', 'sis'),
(10, 'sibee jeyachandran', 'sibee 16'),
(11, 'sssneka', 'psw'),
(17, 'sruu', 'poi'),
(18, 'sruu', 'poi'),
(19, 'cfvgbhnj', 'abc');

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `member_id` int(11) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `memb_type` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`member_id`, `name`, `address`, `memb_type`) VALUES
(1, 'sruthi', 'baba street', 'gold'),
(2, 'sruthi', 'baba street', 'gold'),
(3, 'snekkaaaaa', 'fyguhjkl', 'cfyvgbuhnjmk');

-- --------------------------------------------------------

--
-- Table structure for table `publisher`
--

CREATE TABLE `publisher` (
  `publisher_id` int(11) DEFAULT NULL,
  `book_id` int(11) DEFAULT NULL,
  `address` varchar(250) DEFAULT NULL,
  `name` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `publisher`
--

INSERT INTO `publisher` (`publisher_id`, `book_id`, `address`, `name`) VALUES
(1, 200001, '17babastreet', 'apj abdul kalam');

-- --------------------------------------------------------

--
-- Table structure for table `validation`
--

CREATE TABLE `validation` (
  `book_id` int(11) DEFAULT NULL,
  `member_id` int(11) DEFAULT NULL,
  `borrowed_date` date DEFAULT NULL,
  `return_date` date DEFAULT NULL,
  `borrowed_days` tinyint(4) DEFAULT NULL,
  `late_submission_record` tinyint(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `validation`
--

INSERT INTO `validation` (`book_id`, `member_id`, `borrowed_date`, `return_date`, `borrowed_days`, `late_submission_record`) VALUES
(200001, 1, '0000-00-00', '0000-00-00', 20, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `book`
--
ALTER TABLE `book`
  ADD PRIMARY KEY (`book_id`),
  ADD UNIQUE KEY `book_id` (`book_id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`member_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `member`
--
ALTER TABLE `member`
  MODIFY `member_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
