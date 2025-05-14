-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3344
-- Generation Time: Apr 23, 2023 at 01:27 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 7.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hbw`
--

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `uid` int(10) NOT NULL,
  `uname` varchar(50) NOT NULL,
  `uemail` varchar(50) NOT NULL,
  `hname` varchar(50) NOT NULL,
  `uphno` int(10) NOT NULL,
  `uperson` int(20) NOT NULL,
  `uroom` int(20) NOT NULL,
  `typeroom` varchar(50) NOT NULL,
  `amount` int(20) NOT NULL,
  `adate` date NOT NULL,
  `ddate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`uid`, `uname`, `uemail`, `hname`, `uphno`, `uperson`, `uroom`, `typeroom`, `amount`, `adate`, `ddate`) VALUES
(1, 'Narendra Deshmukh', 'dnarendra765@gmail.com', 'SkyLight', 2147483647, 5, 202, 'AC', 4000, '2023-04-23', '2023-04-28'),
(2, 'Rajshri Jadhav', 'rajshridjadhav2244@gmail.com', 'SkyLight', 2147483647, 10, 201, 'AC', 8000, '2023-04-23', '2023-05-03'),
(3, 'Shubhangi Futane', 'shubhangifutane059@gmail.com', 'SkyLight', 2147483647, 6, 303, 'AC', 4800, '2023-04-23', '2023-04-29'),
(4, 'Akshada Patil', 'akshadapatil0209@gmail.com', 'SkyLight', 1234567890, 2, 212, 'AC', 1600, '2023-04-23', '2023-04-25'),
(5, 'Priti Kokate', 'kokatepriti288@gmail.com', 'SkyLight', 2147483647, 10, 426, 'AC', 8000, '2023-04-23', '2023-05-03'),
(6, 'Prerana Chavan', 'preranac90@gmail.com', 'SkyLight', 1234567890, 5, 201, 'AC', 4000, '2023-04-23', '2023-04-28');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
