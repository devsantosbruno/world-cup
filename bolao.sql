-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 11, 2022 at 10:14 PM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bolao`
--

-- --------------------------------------------------------

--
-- Table structure for table `guess`
--

CREATE TABLE `guess` (
  `guess_id` varchar(40) COLLATE utf8_bin DEFAULT NULL,
  `player_name` varchar(100) COLLATE utf8_bin DEFAULT NULL,
  `o1` varchar(100) COLLATE utf8_bin DEFAULT NULL,
  `o2` varchar(100) COLLATE utf8_bin DEFAULT NULL,
  `o3` varchar(100) COLLATE utf8_bin DEFAULT NULL,
  `o4` varchar(100) COLLATE utf8_bin DEFAULT NULL,
  `o5` varchar(100) COLLATE utf8_bin DEFAULT NULL,
  `o6` varchar(100) COLLATE utf8_bin DEFAULT NULL,
  `o7` varchar(100) COLLATE utf8_bin DEFAULT NULL,
  `o8` varchar(100) COLLATE utf8_bin DEFAULT NULL,
  `o9` varchar(100) COLLATE utf8_bin DEFAULT NULL,
  `o10` varchar(100) COLLATE utf8_bin DEFAULT NULL,
  `o11` varchar(100) COLLATE utf8_bin DEFAULT NULL,
  `o12` varchar(100) COLLATE utf8_bin DEFAULT NULL,
  `o13` varchar(100) COLLATE utf8_bin DEFAULT NULL,
  `o14` varchar(100) COLLATE utf8_bin DEFAULT NULL,
  `o15` varchar(100) COLLATE utf8_bin DEFAULT NULL,
  `o16` varchar(100) COLLATE utf8_bin DEFAULT NULL,
  `q1` varchar(100) COLLATE utf8_bin DEFAULT NULL,
  `q2` varchar(100) COLLATE utf8_bin DEFAULT NULL,
  `q3` varchar(100) COLLATE utf8_bin DEFAULT NULL,
  `q4` varchar(100) COLLATE utf8_bin DEFAULT NULL,
  `q5` varchar(100) COLLATE utf8_bin DEFAULT NULL,
  `q6` varchar(100) COLLATE utf8_bin DEFAULT NULL,
  `q7` varchar(100) COLLATE utf8_bin DEFAULT NULL,
  `q8` varchar(100) COLLATE utf8_bin DEFAULT NULL,
  `s1` varchar(100) COLLATE utf8_bin DEFAULT NULL,
  `s2` varchar(100) COLLATE utf8_bin DEFAULT NULL,
  `s3` varchar(100) COLLATE utf8_bin DEFAULT NULL,
  `s4` varchar(100) COLLATE utf8_bin DEFAULT NULL,
  `f1` varchar(100) COLLATE utf8_bin DEFAULT NULL,
  `f2` varchar(100) COLLATE utf8_bin DEFAULT NULL,
  `c1` varchar(100) COLLATE utf8_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `guess`
--

INSERT INTO `guess` (`guess_id`, `player_name`, `o1`, `o2`, `o3`, `o4`, `o5`, `o6`, `o7`, `o8`, `o9`, `o10`, `o11`, `o12`, `o13`, `o14`, `o15`, `o16`, `q1`, `q2`, `q3`, `q4`, `q5`, `q6`, `q7`, `q8`, `s1`, `s2`, `s3`, `s4`, `f1`, `f2`, `c1`) VALUES
('Main id: 221111094441', 'Main', '_none', '_none', '_none', '_none', '_none', '_none', '_none', '_none', '_none', '_none', '_none', '_none', '_none', '_none', '_none', '_none', '_none', '_none', '_none', '_none', '_none', '_none', '_none', '_none', '_none', '_none', '_none', '_none', '_none', '_none', '_none'),
('Test3 id: 221111100340', 'Test3', '_none', '_none', '_none', '_none', '_none', '_none', '_none', '_none', '_none', '_none', '_none', '_none', '_none', '_none', '_none', '_none', '_none', '_none', '_none', '_none', '_none', '_none', '_none', '_none', '_none', '_none', '_none', '_none', '_none', '_none', '_none'),
('Main2 id: 221111100348', 'Main2', '_none', '_none', '_none', '_none', '_none', '_none', '_none', '_none', '_none', '_none', '_none', '_none', '_none', '_none', '_none', '_none', '_none', '_none', '_none', '_none', '_none', '_none', '_none', '_none', '_none', '_none', '_none', '_none', '_none', '_none', '_none');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
