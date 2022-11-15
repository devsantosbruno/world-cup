-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 15, 2022 at 05:17 AM
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
('Main id: 221111094441', 'Main', 'Holanda', 'Estados_Unidos', 'Argentina', 'Franca', 'Alemanha', 'Marrocos', 'Brasil', 'Gana', 'Inglaterra', 'Senegal', 'Dinamarca', 'Polonia', 'Belgica', 'Espanha', 'Portugal', 'Suica', 'Holanda', 'Franca', 'Alemanha', 'Brasil', 'Inglaterra', 'Dinamarca', 'Belgica', 'Portugal', 'Franca', 'Brasil', 'Dinamarca', 'Belgica', 'Brasil', 'Belgica', 'Brasil'),
('Taiane id: 221112064843', 'Taiane', 'Holanda', 'Estados_Unidos', 'Argentina', 'Australia', 'Alemanha', 'Croacia', 'Brasil', 'Uruguai', 'Inglaterra', 'Equador', 'Franca', 'Mexico', 'Belgica', 'Espanha', 'Portugal', 'Suica', 'Holanda', 'Argentina', 'Alemanha', 'Brasil', 'Inglaterra', 'Franca', 'Espanha', 'Portugal', 'Argentina', 'Brasil', 'Franca', 'Portugal', 'Brasil', 'Portugal', 'Brasil'),
('Rafael id: 221112065253', 'Rafael', 'Holanda', 'Estados_Unidos', 'Argentina', 'Australia', 'Alemanha', 'Croacia', 'Brasil', 'Portugal', 'Inglaterra', 'Equador', 'Franca', 'Mexico', 'Belgica', 'Espanha', 'Uruguai', 'Servia', 'Holanda', 'Argentina', 'Alemanha', 'Brasil', 'Inglaterra', 'Franca', 'Espanha', 'Uruguai', 'Argentina', 'Brasil', 'Franca', 'Espanha', 'Brasil', 'Franca', 'Brasil'),
('Gilberto id: 221112071306', 'Gilberto', 'Holanda', 'Pais_de_Gales', 'Argentina', 'Dinamarca', 'Alemanha', 'Croacia', 'Brasil', 'Uruguai', 'Inglaterra', 'Equador', 'Franca', 'Polonia', 'Belgica', 'Espanha', 'Portugal', 'Servia', 'Holanda', 'Argentina', 'Alemanha', 'Brasil', 'Inglaterra', 'Franca', 'Belgica', 'Servia', 'Holanda', 'Brasil', 'Franca', 'Belgica', 'Brasil', 'Franca', 'Brasil'),
('Debora id: 221112071659', 'Debora', 'Catar', 'Inglaterra', 'Argentina', 'Australia', 'Alemanha', 'Belgica', 'Camaroes', 'Portugal', 'Estados_Unidos', 'Senegal', 'Franca', 'Mexico', 'Canada', 'Espanha', 'Uruguai', 'Brasil', 'Inglaterra', 'Argentina', 'Alemanha', 'Portugal', 'Estados_Unidos', 'Franca', 'Canada', 'Brasil', 'Argentina', 'Alemanha', 'Estados_Unidos', 'Brasil', 'Argentina', 'Brasil', 'Brasil'),
('Yuri id: 221112072024', 'Yuri', 'Holanda', 'Inglaterra', 'Argentina', 'Dinamarca', 'Espanha', 'Croacia', 'Brasil', 'Portugal', 'Pais_de_Gales', 'Senegal', 'Franca', 'Polonia', 'Belgica', 'Alemanha', 'Uruguai', 'Servia', 'Inglaterra', 'Argentina', 'Croacia', 'Brasil', 'Senegal', 'Franca', 'Belgica', 'Uruguai', 'Argentina', 'Brasil', 'Franca', 'Uruguai', 'Brasil', 'Franca', 'Brasil'),
('Eva id: 221113044024', 'Eva', 'Holanda', 'Estados_Unidos', 'Argentina', 'Dinamarca', 'Alemanha', 'Croacia', 'Brasil', 'Uruguai', 'Inglaterra', 'Catar', 'Franca', 'Polonia', 'Belgica', 'Espanha', 'Portugal', 'Camaroes', 'Holanda', 'Argentina', 'Alemanha', 'Brasil', 'Inglaterra', 'Polonia', 'Espanha', 'Portugal', 'Argentina', 'Brasil', 'Polonia', 'Portugal', 'Brasil', 'Portugal', 'Portugal'),
('Raquel id: 221113044300', 'Raquel', 'Holanda', 'Estados_Unidos', 'Argentina', 'Dinamarca', 'Alemanha', 'Croacia', 'Brasil', 'Portugal', 'Inglaterra', 'Senegal', 'Franca', 'Mexico', 'Belgica', 'Espanha', 'Uruguai', 'Servia', 'Holanda', 'Argentina', 'Alemanha', 'Brasil', 'Inglaterra', 'Franca', 'Espanha', 'Servia', 'Holanda', 'Brasil', 'Franca', 'Espanha', 'Brasil', 'Franca', 'Brasil'),
('Nico id: 221113044538', 'Nico', 'Holanda', 'Inglaterra', 'Polonia', 'Franca', 'Espanha', 'Belgica', 'Camaroes', 'Coreia_do_Sul', 'Estados_Unidos', 'Senegal', 'Dinamarca', 'Mexico', 'Croacia', 'Alemanha', 'Portugal', 'Brasil', 'Holanda', 'Polonia', 'Espanha', 'Camaroes', 'Estados_Unidos', 'Mexico', 'Alemanha', 'Brasil', 'Polonia', 'Camaroes', 'Estados_Unidos', 'Alemanha', 'Polonia', 'Alemanha', 'Polonia'),
('Mizael id: 221114090059', 'Mizael', 'Holanda', 'Estados_Unidos', 'Argentina', 'Franca', 'Alemanha', 'Marrocos', 'Brasil', 'Gana', 'Inglaterra', 'Senegal', 'Dinamarca', 'Polonia', 'Belgica', 'Espanha', 'Portugal', 'Suica', 'Holanda', 'Franca', 'Alemanha', 'Brasil', 'Inglaterra', 'Dinamarca', 'Belgica', 'Portugal', 'Franca', 'Brasil', 'Dinamarca', 'Belgica', 'Brasil', 'Belgica', 'Brasil'),
('Mizael 1 id: 221115020803', 'Mizael 1', 'Holanda', 'Pais_de_Gales', 'Argentina', 'Dinamarca', 'Espanha', 'Croacia', 'Brasil', 'Uruguai', 'Inglaterra', 'Senegal', 'Franca', 'Mexico', 'Belgica', 'Alemanha', 'Portugal', 'Servia', 'Holanda', 'Dinamarca', 'Espanha', 'Brasil', 'Inglaterra', 'Franca', 'Belgica', 'Portugal', 'Dinamarca', 'Brasil', 'Franca', 'Belgica', 'Brasil', 'Franca', 'Brasil'),
('Bruno id: 221115020815', 'Bruno', '_none', '_none', '_none', '_none', '_none', '_none', '_none', '_none', '_none', '_none', '_none', '_none', '_none', '_none', '_none', '_none', '_none', '_none', '_none', '_none', '_none', '_none', '_none', '_none', '_none', '_none', '_none', '_none', '_none', '_none', '_none'),
('Pamela id: 221115020825', 'Pamela', '_none', '_none', '_none', '_none', '_none', '_none', '_none', '_none', '_none', '_none', '_none', '_none', '_none', '_none', '_none', '_none', '_none', '_none', '_none', '_none', '_none', '_none', '_none', '_none', '_none', '_none', '_none', '_none', '_none', '_none', '_none');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
