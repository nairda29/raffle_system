-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 29, 2016 at 11:03 PM
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
  `reg_code` int(11) NOT NULL,
  `name` varchar(40) DEFAULT NULL,
  `maiden_name` varchar(40) NOT NULL,
  `batch` varchar(15) NOT NULL,
  `bday` varchar(15) NOT NULL,
  `contact_number` varchar(15) NOT NULL,
  `annual_fee` varchar(10) NOT NULL,
  `selected` tinyint(1) DEFAULT NULL,
  `encoder_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `participant`
--

INSERT INTO `participant` (`part_id`, `reg_code`, `name`, `maiden_name`, `batch`, `bday`, `contact_number`, `annual_fee`, `selected`, `encoder_id`) VALUES
(1, 0, 'Rafael', '', '', '', '', '0', NULL, 0),
(2, 0, 'Addison', '', '', '', '', '0', NULL, 0),
(3, 0, 'Tanner', '', '', '', '', '0', NULL, 0),
(4, 0, 'Amos', '', '', '', '', '0', NULL, 0),
(5, 0, 'Ahmed', '', '', '', '', '0', NULL, 0),
(6, 0, 'Mannix', '', '', '', '', '0', NULL, 0),
(7, 0, 'Orlando', '', '', '', '', '0', NULL, 0),
(8, 0, 'Micah', '', '', '', '', '0', NULL, 0),
(9, 0, 'Russell', '', '', '', '', '0', NULL, 0),
(10, 0, 'Tad', '', '', '', '', '0', NULL, 0),
(11, 0, 'Kaseem', '', '', '', '', '0', NULL, 0),
(12, 0, 'Hayden', '', '', '', '', '0', NULL, 0),
(13, 0, 'Keaton', '', '', '', '', '0', NULL, 0),
(14, 0, 'Jamal', '', '', '', '', '0', NULL, 0),
(15, 0, 'Dustin', '', '', '', '', '0', NULL, 0),
(16, 0, 'Connor', '', '', '', '', '0', NULL, 0),
(17, 0, 'Joseph', '', '', '', '', '0', NULL, 0),
(18, 0, 'Honorato', '', '', '', '', '0', NULL, 0),
(19, 0, 'Ryan', '', '', '', '', '0', NULL, 0),
(20, 0, 'Orson', '', '', '', '', '0', NULL, 0),
(21, 0, 'Jameson', '', '', '', '', '0', NULL, 0),
(22, 0, 'Ali', '', '', '', '', '0', NULL, 0),
(23, 0, 'Emmanuel', '', '', '', '', '0', NULL, 0),
(24, 0, 'Cullen', '', '', '', '', '0', NULL, 0),
(25, 0, 'Eaton', '', '', '', '', '0', NULL, 0),
(26, 0, 'Andrew', '', '', '', '', '0', NULL, 0),
(27, 0, 'Bert', '', '', '', '', '0', NULL, 0),
(28, 0, 'Otto', '', '', '', '', '0', NULL, 0),
(29, 0, 'Jerome', '', '', '', '', '0', NULL, 0),
(30, 0, 'Daquan', '', '', '', '', '0', 1, 0),
(31, 0, 'Jordan', '', '', '', '', '0', NULL, 0),
(32, 0, 'Allen', '', '', '', '', '0', NULL, 0),
(33, 0, 'Abdul', '', '', '', '', '0', NULL, 0),
(34, 0, 'Nicholas', '', '', '', '', '0', NULL, 0),
(35, 0, 'Stone', '', '', '', '', '0', NULL, 0),
(36, 0, 'Ryan', '', '', '', '', '0', NULL, 0),
(37, 0, 'Marvin', '', '', '', '', '0', NULL, 0),
(38, 0, 'Griffith', '', '', '', '', '0', NULL, 0),
(39, 0, 'Jelani', '', '', '', '', '0', NULL, 0),
(40, 0, 'Ivor', '', '', '', '', '0', NULL, 0),
(41, 0, 'Quamar', '', '', '', '', '0', NULL, 0),
(42, 0, 'Hamish', '', '', '', '', '0', NULL, 0),
(43, 0, 'Kenneth', '', '', '', '', '0', NULL, 0),
(44, 0, 'Ulysses', '', '', '', '', '0', NULL, 0),
(45, 0, 'George', '', '', '', '', '0', NULL, 0),
(46, 0, 'Griffith', '', '', '', '', '0', NULL, 0),
(47, 0, 'Randall', '', '', '', '', '0', NULL, 0),
(48, 0, 'Kelly', '', '', '', '', '0', NULL, 0),
(49, 0, 'Damon', '', '', '', '', '0', NULL, 0),
(50, 0, 'Carson', '', '', '', '', '0', NULL, 0),
(51, 0, 'Caleb', '', '', '', '', '0', NULL, 0),
(52, 0, 'Harper', '', '', '', '', '0', NULL, 0),
(53, 0, 'Uriel', '', '', '', '', '0', NULL, 0),
(54, 0, 'Samson', '', '', '', '', '0', NULL, 0),
(55, 0, 'Reuben', '', '', '', '', '0', NULL, 0),
(56, 0, 'Nathaniel', '', '', '', '', '0', NULL, 0),
(57, 0, 'Ishmael', '', '', '', '', '0', NULL, 0),
(58, 0, 'Tarik', '', '', '', '', '0', NULL, 0),
(59, 0, 'Plato', '', '', '', '', '0', NULL, 0),
(60, 0, 'Marvin', '', '', '', '', '0', NULL, 0),
(61, 0, 'Raja', '', '', '', '', '0', NULL, 0),
(62, 0, 'Dale', '', '', '', '', '0', NULL, 0),
(63, 0, 'Robert', '', '', '', '', '0', NULL, 0),
(64, 0, 'Benjamin', '', '', '', '', '0', NULL, 0),
(65, 0, 'Kuame', '', '', '', '', '0', NULL, 0),
(66, 0, 'Gray', '', '', '', '', '0', NULL, 0),
(67, 0, 'Phelan', '', '', '', '', '0', NULL, 0),
(68, 0, 'Bruce', '', '', '', '', '0', NULL, 0),
(69, 0, 'Jelani', '', '', '', '', '0', NULL, 0),
(70, 0, 'Tate', '', '', '', '', '0', NULL, 0),
(71, 0, 'Mufutau', '', '', '', '', '0', NULL, 0),
(72, 0, 'Dale', '', '', '', '', '0', NULL, 0),
(73, 0, 'Garrett', '', '', '', '', '0', NULL, 0),
(74, 0, 'Aquila', '', '', '', '', '0', NULL, 0),
(75, 0, 'Wang', '', '', '', '', '0', NULL, 0),
(76, 0, 'John', '', '', '', '', '0', NULL, 0),
(77, 0, 'James', '', '', '', '', '0', NULL, 0),
(78, 0, 'Christian', '', '', '', '', '0', NULL, 0),
(79, 0, 'Buckminster', '', '', '', '', '0', NULL, 0),
(80, 0, 'Jared', '', '', '', '', '0', NULL, 0),
(81, 0, 'Rudyard', '', '', '', '', '0', NULL, 0),
(82, 0, 'Phelan', '', '', '', '', '0', NULL, 0),
(83, 0, 'Price', '', '', '', '', '0', NULL, 0),
(84, 0, 'Evan', '', '', '', '', '0', NULL, 0),
(85, 0, 'Ralph', '', '', '', '', '0', NULL, 0),
(86, 0, 'Kennedy', '', '', '', '', '0', NULL, 0),
(87, 0, 'Ian', '', '', '', '', '0', NULL, 0),
(88, 0, 'John', '', '', '', '', '0', NULL, 0),
(89, 0, 'Nero', '', '', '', '', '0', NULL, 0),
(90, 0, 'Mohammad', '', '', '', '', '0', NULL, 0),
(91, 0, 'Walter', '', '', '', '', '0', NULL, 0),
(92, 0, 'Fritz', '', '', '', '', '0', NULL, 0),
(93, 0, 'Brady', '', '', '', '', '0', NULL, 0),
(94, 0, 'Xavier', '', '', '', '', '0', 1, 0),
(95, 0, 'Jerry', '', '', '', '', '0', NULL, 0),
(96, 0, 'Cade', '', '', '', '', '0', NULL, 0),
(97, 0, 'Price', '', '', '', '', '0', NULL, 0),
(98, 0, 'Darius', '', '', '', '', '0', NULL, 0),
(99, 0, 'Lars', '', '', '', '', '0', NULL, 0),
(100, 0, 'Brody', '', '', '', '', '0', NULL, 0),
(101, 0, 'Rose', '', '', '', '', '0', NULL, 0),
(102, 0, 'Adr', '', '', '', '', '0', NULL, 0),
(103, 0, 'eee', '', '', '', '', '0', NULL, 0),
(104, 0, 'TV', '', '', '', '', '0', NULL, 0),
(105, 0, 'TV', '', '', '', '', '0', NULL, 0),
(106, 0, 'TV', '', '', '', '', '0', NULL, 0),
(107, 0, 'TV', '', '', '', '', '0', NULL, 0),
(108, 0, 'Flat', '', '', '', '', '0', NULL, 0),
(109, 0, 'Aircon', '', '', '', '', '0', NULL, 0),
(110, 0, 'REf', '', '', '', '', '0', NULL, 0);

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
(6, 'Bus', 94),
(8, 'TV', 30);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `uid` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(130) NOT NULL,
  `priv` varchar(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`uid`, `username`, `password`, `priv`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'admin'),
(2, 'user1', '24c9e15e52afc47c225b757e7bee1f9d', 'user'),
(3, 'user2', '7e58d63b60197ceb55a1c487989a3720', 'user'),
(4, 'user3', '92877af70a45fd6a2ed7fe81e1236b78', 'user'),
(5, 'user4', '3f02ebe3d7929b091e3d8ccfde2f3bc6', 'user'),
(6, 'user5', '0a791842f52a0acfbb3a783378c066b8', 'user');

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
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`uid`);

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
  MODIFY `prize_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
