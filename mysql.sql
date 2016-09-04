-- phpMyAdmin SQL Dump
-- version 3.2.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Sep 25, 2010 at 08:09 AM
-- Server version: 5.1.41
-- PHP Version: 5.3.1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `work`
--
CREATE DATABASE `department` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `department`;

-- --------------------------------------------------------

--
-- Table structure for table `subscription`
--

CREATE TABLE IF NOT EXISTS `subscription` (
`id` int(11) NOT NULL,
  `name` longtext NOT NULL,
  `houseno` mediumtext NOT NULL,
  `flatno` longtext NOT NULL,
  `subscriptionamount` int(11) NOT NULL,
  `dateofsubscription` longtext NOT NULL,
  `contactno` int(15) NOT NULL,
  `email` longtext NOT NULL,
  `transactionnum` varchar(10) NOT NULL,
  `status` text NOT NULL
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=25 ; 

--
-- Dumping data for table `subscription`
--

INSERT INTO `subscription` (`id`, `name`, `houseno`, `flatno`, `subscriptionamount`, `dateofsubscription`, `contactno`, `email`, `transactionnum`, `status`) VALUES
(20, 'Salam Rahman', '33', 'J10', 2500, '12/12/14', 1670259077, 'salamrahman@gmail.com', 'k26a4iee', 'PAID'),
(21, 'Kuddus Mia', '54', 'D25', 1500, '16/12/14', 1670259077, 'kuddusmia@yahoo.com', 'tdg0jb32', 'PAID'),
(22, 'Kamal Uddin', '12', 'D22', 2000, '15/12/14', 1670259077, 'kamaluddin@yahoo.com', 'xvwz6j5o', 'PAID'),
(23, 'Mr. Jabbar', '45', 'T12', 3000, '15/12/14', 1670259077, 'jabbar@gmail.com', 'wa43bwad', ''),
(24, 'Mr.Rahim', '66', 'J20', 1000, '15/12/14', 1670259077, 'rahim@gmail.com', '70ec3p2i', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `subscription`
--
ALTER TABLE `subscription`
 ADD PRIMARY KEY (`id`);
 
--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `subscription`
--
ALTER TABLE `subscription`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=25;