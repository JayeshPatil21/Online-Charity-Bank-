-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 14, 2022 at 10:45 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.3.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cb`
--

-- --------------------------------------------------------

--
-- Table structure for table `donateamt`
--

CREATE TABLE `donateamt` (
  `user` varchar(250) NOT NULL,
  `DName` varchar(250) NOT NULL,
  `Amt` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `donateamt`
--

INSERT INTO `donateamt` (`user`, `DName`, `Amt`) VALUES
('Nikhil', 'Pure Food & Water', 5000),
('Nikhil', 'Pure Food & Water', 800),
('Nikhil', 'Medical', 2000),
('Nikhil', 'Medical', 2000),
('Nikhil', 'Pure Food & Water', 1000),
('Nikhil', 'Pure Food & Water', 1000),
('Nikhil', 'Pure Food & Water', 1000),
('Nikhil', 'education', 1000),
('Nikhil', 'education', 1000),
('jayesh', 'Pure Food & Water', 1000),
('Nikhil', 'orphange', 2000),
('Nikhil', 'test', 8500),
('sarthak', 'demo2', 100),
('Nikhil', 'indian army', 200),
('PR', 'laxmichitfund', 1000),
('RN', 'demo2', 1800),
('Joshi', 'Medical', 500),
('Nikhil', 'Medical', 500),
('Nikhil', 'test', 500),
('jn', 'education', 500),
('jn', 'Pure Food & Water', 2000),
('jn', 'Medical', 500),
('jn', 'Medical', 500),
('jn', 'Medical', 1000),
('jn', 'demo2', 500),
('jn', 'demo2', 100),
('anil', 'indian army niii', 500),
('anil', 'Aaradhay helping trust', 500),
('jn', 'indian army niii', 500),
('NikhilKumar', 'Puer Food & Water', 1000),
('jn', 'Aaradhay helping trust', 1000),
('jn', 'Aaradhay helping trust', 500),
('jn', 'cloths jayesh', 1000),
('jn', 'MEDICAL NVP', 1000),
('jn', 'MEDICAL NVP', 500),
('jn', 'SANITIZATION', 1000),
('SONU', 'SANITIZATION VS', 1000),
('neha', 'Puer Food & Water', 12000),
('jn', 'PUER FOOD & WATER', 50000),
('jn', 'HEALTH AND MEDICINE ', 20000),
('jn', 'PUER FOOD & WATER', 30000),
('jn', 'EDUCATION ', 30000),
('jn', 'ORPHANAGE ', 40000),
('jayesh', 'PUER FOOD & WATER', 10000),
('jayesh', 'HEALTH AND MEDICINE ', 100000),
('jayesh', 'EDUCATION ', 10000),
('jayesh', 'PUER FOOD & WATER', 10000),
('jay', 'EDUCATION ', 0),
('jay', 'EDUCATION ', 10000),
('jn', 'PUER FOOD & WATER', 10000),
('jn', 'PUER FOOD & WATER', 0),
('jayesh', 'HEALTH AND MEDICINE ', 30000);

-- --------------------------------------------------------

--
-- Table structure for table `donationreg`
--

CREATE TABLE `donationreg` (
  `DName` varchar(250) NOT NULL,
  `EID` varchar(250) NOT NULL,
  `AMT` int(11) NOT NULL,
  `SID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `donationreg`
--

INSERT INTO `donationreg` (`DName`, `EID`, `AMT`, `SID`) VALUES
('PUER FOOD & WATER', 'Food@gmail.com', 110000, 3),
('HEALTH AND MEDICINE ', 'health@gmail.com ', 150000, 2),
('EDUCATION ', 'education@gmail.com', 50000, 3),
('ORPHANAGE ', 'orphanage@gmail.com ', 40000, 4);

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `user` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL,
  `AT` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`user`, `password`, `AT`) VALUES
('Nikhil', '123', 'Admin'),
('Vashnavi', '123', 'user'),
('PR', '123', 'User'),
('RN', '123', 'User'),
('jn', '$2y$12$SwlWXZvlt7lessmKgpDUje5vWskw3Tvl0OHOV3vEfl.oORjAxGZu6', 'Admin'),
('NikhilKumar Arvindbhia Joshi', '$2y$12$fxnv7e9T6HYkR69ffdbB8eRpLB.4IwYZfTlvjBDBJzvMFPchC4UNe', 'User'),
('NikhilKumar', '$2y$12$jxT2JjsLp8A4PCu9zcYKFuIavbtdUNoodxA7CqUGt0nErWJlFmEVK', 'User'),
('SONU', '$2y$12$Z0t58Uo7beawebjhx009E.ZFN505VUOedeEu3W3VeAwf3KBi6lEhG', 'User'),
('kj', '$2y$12$cTdDIL92gUy90NBPMiQE6uBaftCPVJgNOr7nMhLtYWfoTbapQLygi', 'User'),
('jayesh', '$2y$12$WWRlByTxFBso6t88M4usvus4dCbiOUjdOhYECDuZrtltjDY6U15dS', 'User'),
('jay', '$2y$12$9J2EIu4wpJpgRQiy3niv5OPuxF8lGhaDbwv8o.cprTSPR4hbA422y', 'User'),
('ram', '$2y$12$B3uHZeeev8x8W2PYJ6djPeEgy3KY/Uk1I/OQHQ7mBvM5TA2wTWufq', 'User');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
