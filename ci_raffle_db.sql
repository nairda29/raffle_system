-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 28, 2016 at 11:10 AM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ci_raffle_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `participant`
--

CREATE TABLE `participant` (
  `part_id` int(11) NOT NULL,
  `name` varchar(40) DEFAULT NULL,
  `selected` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `participant`
--

INSERT INTO `participant` (`part_id`, `name`, `selected`) VALUES
(1, 'Rafael', NULL),
(2, 'Addison', NULL),
(3, 'Tanner', NULL),
(4, 'Amos', NULL),
(5, 'Ahmed', NULL),
(6, 'Mannix', NULL),
(7, 'Orlando', NULL),
(8, 'Micah', NULL),
(9, 'Russell', NULL),
(10, 'Tad', NULL),
(11, 'Kaseem', NULL),
(12, 'Hayden', NULL),
(13, 'Keaton', NULL),
(14, 'Jamal', NULL),
(15, 'Dustin', NULL),
(16, 'Connor', NULL),
(17, 'Joseph', NULL),
(18, 'Honorato', NULL),
(19, 'Ryan', NULL),
(20, 'Orson', NULL),
(21, 'Jameson', NULL),
(22, 'Ali', NULL),
(23, 'Emmanuel', NULL),
(24, 'Cullen', NULL),
(25, 'Eaton', NULL),
(26, 'Andrew', NULL),
(27, 'Bert', NULL),
(28, 'Otto', NULL),
(29, 'Jerome', NULL),
(30, 'Daquan', NULL),
(31, 'Jordan', NULL),
(32, 'Allen', NULL),
(33, 'Abdul', NULL),
(34, 'Nicholas', NULL),
(35, 'Stone', NULL),
(36, 'Ryan', NULL),
(37, 'Marvin', NULL),
(38, 'Griffith', NULL),
(39, 'Jelani', NULL),
(40, 'Ivor', NULL),
(41, 'Quamar', NULL),
(42, 'Hamish', NULL),
(43, 'Kenneth', NULL),
(44, 'Ulysses', NULL),
(45, 'George', NULL),
(46, 'Griffith', NULL),
(47, 'Randall', NULL),
(48, 'Kelly', NULL),
(49, 'Damon', NULL),
(50, 'Carson', NULL),
(51, 'Caleb', NULL),
(52, 'Harper', NULL),
(53, 'Uriel', NULL),
(54, 'Samson', NULL),
(55, 'Reuben', NULL),
(56, 'Nathaniel', NULL),
(57, 'Ishmael', NULL),
(58, 'Tarik', NULL),
(59, 'Plato', NULL),
(60, 'Marvin', NULL),
(61, 'Raja', NULL),
(62, 'Dale', NULL),
(63, 'Robert', NULL),
(64, 'Benjamin', NULL),
(65, 'Kuame', NULL),
(66, 'Gray', NULL),
(67, 'Phelan', NULL),
(68, 'Bruce', NULL),
(69, 'Jelani', NULL),
(70, 'Tate', NULL),
(71, 'Mufutau', NULL),
(72, 'Dale', NULL),
(73, 'Garrett', NULL),
(74, 'Aquila', NULL),
(75, 'Wang', NULL),
(76, 'John', NULL),
(77, 'James', NULL),
(78, 'Christian', NULL),
(79, 'Buckminster', NULL),
(80, 'Jared', NULL),
(81, 'Rudyard', NULL),
(82, 'Phelan', NULL),
(83, 'Price', NULL),
(84, 'Evan', NULL),
(85, 'Ralph', NULL),
(86, 'Kennedy', NULL),
(87, 'Ian', NULL),
(88, 'John', NULL),
(89, 'Nero', NULL),
(90, 'Mohammad', NULL),
(91, 'Walter', NULL),
(92, 'Fritz', NULL),
(93, 'Brady', NULL),
(94, 'Xavier', NULL),
(95, 'Jerry', NULL),
(96, 'Cade', NULL),
(97, 'Price', NULL),
(98, 'Darius', NULL),
(99, 'Lars', NULL),
(100, 'Brody', NULL),
(101, 'Rose', NULL),
(102, 'Adr', NULL),
(103, 'eee', NULL),
(104, 'TV', NULL),
(105, 'TV', NULL),
(106, 'TV', NULL),
(107, 'TV', NULL),
(108, 'Flat', NULL),
(109, 'Aircon', NULL),
(110, 'REf', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `prize`
--

CREATE TABLE `prize` (
  `prize_id` int(11) NOT NULL,
  `prize_name` varchar(30) DEFAULT NULL,
  `prize_winner` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `prize`
--

INSERT INTO `prize` (`prize_id`, `prize_name`, `prize_winner`) VALUES
(1, 'Ref', NULL),
(2, 'Ford', 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `participant`
--
ALTER TABLE `participant`
  ADD PRIMARY KEY (`part_id`);

--
-- Indexes for table `prize`
--
ALTER TABLE `prize`
  ADD PRIMARY KEY (`prize_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `participant`
--
ALTER TABLE `participant`
  MODIFY `part_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=111;
--
-- AUTO_INCREMENT for table `prize`
--
ALTER TABLE `prize`
  MODIFY `prize_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
