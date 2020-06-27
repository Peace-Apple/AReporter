-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jun 27, 2020 at 06:10 PM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `AReporter_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `incidents`
--

CREATE TABLE `incidents` (
  `id` int(10) NOT NULL,
  `victimname` varchar(30) NOT NULL,
  `victimaddress` varchar(30) NOT NULL,
  `victimsex` varchar(15) NOT NULL,
  `reportername` varchar(30) NOT NULL,
  `reportercontact` int(10) UNSIGNED ZEROFILL NOT NULL,
  `location` varchar(30) NOT NULL,
  `date` date NOT NULL,
  `time` time(6) NOT NULL,
  `description` varchar(500) NOT NULL,
  `witness` varchar(15) NOT NULL,
  `injury` varchar(15) NOT NULL,
  `treatment` varchar(15) NOT NULL,
  `police` varchar(15) NOT NULL,
  `certify` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `incidents`
--

INSERT INTO `incidents` (`id`, `victimname`, `victimaddress`, `victimsex`, `reportername`, `reportercontact`, `location`, `date`, `time`, `description`, `witness`, `injury`, `treatment`, `police`, `certify`) VALUES
(22, 'Ethan', 'Bweyogerere', 'Male', 'Apple', 0789034567, 'Kampala', '2020-05-12', '02:00:00.000000', 'There was some theft', 'Yes', 'No', 'No', 'Yes', 'on'),
(24, 'Ethan', 'Bweyogerere', 'Male', 'Apple', 0789034567, 'Kampala', '2020-05-12', '02:00:00.000000', 'There was some theft', 'Yes', 'No', 'No', 'Yes', 'on'),
(27, 'Ethan', 'Bweyogerere', 'Male', 'Apple', 0789034567, 'Kampala', '2020-05-12', '02:00:00.000000', 'There was some theft', 'Yes', 'No', 'No', 'Yes', 'on'),
(28, 'Ethan', 'Bweyogerere', 'Male', 'Apple', 0789034567, 'Kampala', '2020-05-12', '02:00:00.000000', 'There was some theft', 'Yes', 'No', 'No', 'Yes', 'on'),
(29, 'Ethan', 'Bweyogerere', 'Male', 'Apple', 0789034567, 'Kampala', '2020-05-12', '02:00:00.000000', 'There was some theft', 'Yes', 'No', 'No', 'Yes', 'on'),
(30, 'mark', 'kibuli', 'Male', 'Don', 0759051203, 'kibuli', '2020-02-13', '00:00:00.000000', 'the person was knocked by a car', 'Yes', 'Yes', 'Yes', 'No', 'on'),
(31, 'Joel', 'Bweyos', 'Male', 'Apple', 0903393033, 'Kenya', '0344-12-31', '14:23:00.000000', 'He lies alot', 'No', 'Yes', 'No', 'Yes', 'on'),
(32, 'Achie', 'Mutungo, Zone 8', 'Female', 'Ethan', 0705467839, 'Bweyos', '2020-06-24', '12:23:00.000000', 'Moving forward and making a change', 'Yes', 'No', 'No', 'No', 'on');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(10) NOT NULL,
  `username` text NOT NULL,
  `email` varchar(50) NOT NULL,
  `contact` int(15) NOT NULL,
  `password` varchar(50) NOT NULL,
  `admin` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `email`, `contact`, `password`, `admin`) VALUES
(20, 'Apple', 'astonreba@gmail.com', 678, 'apple', 0),
(21, 'Ethan', 'ethan@gmail.com', 1234, 'ethan', 0),
(22, 'Ethan', 'astonreba@gmail.com', 234, 'asdf', 0),
(23, 'Francis', 'f@g.c', 90890, 'frank', 0),
(24, 'apple7', 'astonreba@gmail.com', 89, '123', 0),
(25, 'Donald', 'don@gmail.com', 789123456, 'don', 0),
(26, 'Acio', 'astonreba@gmail.com', 123, 'acio', 0),
(27, 'Deyo', 'deyo@gmail.com', 2147483647, 'deo', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `incidents`
--
ALTER TABLE `incidents`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `incidents`
--
ALTER TABLE `incidents`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
