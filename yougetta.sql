-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 14, 2016 at 05:30 AM
-- Server version: 10.1.9-MariaDB
-- PHP Version: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `yougetta`
--

-- --------------------------------------------------------

--
-- Table structure for table `coffeeorders`
--

DROP TABLE IF EXISTS `coffeeorders`;
CREATE TABLE `coffeeorders` (
  `orderid` int(11) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `coffee_hot` varchar(10) NOT NULL,
  `coffee_size` varchar(10) NOT NULL,
  `coffee_type` varchar(20) NOT NULL,
  `soy` varchar(1) NOT NULL,
  `no_whip` varchar(1) NOT NULL,
  `cream` varchar(1) NOT NULL,
  `sugar` varchar(1) NOT NULL,
  `comments` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `coffeeorders`
--

INSERT INTO `coffeeorders` (`orderid`, `firstname`, `lastname`, `coffee_hot`, `coffee_size`, `coffee_type`, `soy`, `no_whip`, `cream`, `sugar`, `comments`) VALUES
(1, 'Greg', 'Brady', 'Hot', 'Poco', 'Espresso', 'N', 'N', 'N', 'N', ''),
(2, 'Johnny', 'Bravo', 'Hot', 'Enorme', 'Macchiato', 'N', 'N', 'Y', 'Y', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `coffeeorders`
--
ALTER TABLE `coffeeorders`
  ADD PRIMARY KEY (`orderid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `coffeeorders`
--
ALTER TABLE `coffeeorders`
  MODIFY `orderid` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
