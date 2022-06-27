-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 26, 2022 at 06:13 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `workshop`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminlogin`
--

CREATE TABLE `adminlogin` (
  `ID` int(11) NOT NULL,
  `user` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `adminlogin`
--

INSERT INTO `adminlogin` (`ID`, `user`, `password`) VALUES
(1, 'admin', 'admin'),
(2, 'admin1', 'admin1');

-- --------------------------------------------------------

--
-- Table structure for table `putstudadmin`
--

CREATE TABLE `putstudadmin` (
  `Name` varchar(15) DEFAULT NULL,
  `USN` varchar(10) DEFAULT NULL,
  `Mail` varchar(20) DEFAULT NULL,
  `Department` varchar(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `putstudadmin`
--

INSERT INTO `putstudadmin` (`Name`, `USN`, `Mail`, `Department`) VALUES
('', '', '', ''),
('Nagesh Kolkar', '1CG19IS034', 'nageshkollkar46@gmai', 'ISE');

-- --------------------------------------------------------

--
-- Stand-in structure for view `result`
-- (See below for the actual view)
--
CREATE TABLE `result` (
`Name` varchar(15)
,`USN` varchar(10)
,`DS` varchar(2)
,`DC` varchar(20)
,`M2` varchar(2)
);

-- --------------------------------------------------------

--
-- Table structure for table `studlogin`
--

CREATE TABLE `studlogin` (
  `user` varchar(67) NOT NULL,
  `password` varchar(65) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `studlogin`
--

INSERT INTO `studlogin` (`user`, `password`) VALUES
('', ''),
('1CG19IS034', '1cg19is034'),
('1cg19is039', '1cg19is039');

-- --------------------------------------------------------

--
-- Table structure for table `studresult`
--

CREATE TABLE `studresult` (
  `sUSN` varchar(10) DEFAULT NULL,
  `DS` varchar(2) DEFAULT NULL,
  `DC` varchar(20) DEFAULT NULL,
  `M2` varchar(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `studresult`
--

INSERT INTO `studresult` (`sUSN`, `DS`, `DC`, `M2`) VALUES
('', '', '', ''),
('1CG19IS034', '34', '45', '50');

-- --------------------------------------------------------

--
-- Structure for view `result`
--
DROP TABLE IF EXISTS `result`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `result`  AS SELECT `p`.`Name` AS `Name`, `p`.`USN` AS `USN`, `s`.`DS` AS `DS`, `s`.`DC` AS `DC`, `s`.`M2` AS `M2` FROM (`putstudadmin` `p` join `studresult` `s`) WHERE `p`.`USN` = `s`.`sUSN` ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adminlogin`
--
ALTER TABLE `adminlogin`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adminlogin`
--
ALTER TABLE `adminlogin`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
