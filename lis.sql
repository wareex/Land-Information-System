-- phpMyAdmin SQL Dump
-- version 2.11.6
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 18, 2017 at 12:46 AM
-- Server version: 5.0.51
-- PHP Version: 5.2.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `lis`
--
CREATE DATABASE `lis` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `lis`;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(10) NOT NULL auto_increment,
  `username` varchar(30) NOT NULL,
  `password` varchar(40) NOT NULL,
  `repassword` varchar(40) NOT NULL,
  `post` varchar(40) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `repassword`, `post`) VALUES
(1, 'admin', 'admin123', 'admin123', 'Admin'),
(3, 'Mr super', '123456', '123456', 'Staff');

-- --------------------------------------------------------

--
-- Table structure for table `owner`
--

CREATE TABLE `owner` (
  `id` int(10) NOT NULL auto_increment,
  `owner_id` varchar(20) NOT NULL,
  `surname` varchar(40) NOT NULL,
  `othername` varchar(40) NOT NULL,
  `gender` varchar(11) NOT NULL,
  `birth_place` varchar(40) NOT NULL,
  `occupation` varchar(30) NOT NULL,
  `state` varchar(40) NOT NULL,
  `lga` varchar(40) NOT NULL,
  `address` varchar(50) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `percel_id` varchar(50) NOT NULL,
  `val` varchar(50) NOT NULL,
  `land` varchar(40) NOT NULL,
  `location` varchar(40) NOT NULL,
  `area` varchar(50) NOT NULL,
  `plot_no` varchar(30) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `owner`
--

INSERT INTO `owner` (`id`, `owner_id`, `surname`, `othername`, `gender`, `birth_place`, `occupation`, `state`, `lga`, `address`, `phone`, `email`, `percel_id`, `val`, `land`, `location`, `area`, `plot_no`) VALUES
(1, 'LHD00487', 'ADEGOKE', 'RIDWAN AKOREDE', 'MALE', 'ISEYIN', 'COMPUTER SCIENTIST', 'Oyo state', 'ISEYIN LGA', 'Apete', '090737337363', 'rizwan@gmail.com', 'perc00565', '1,00000', 'Commercial', 'Ibadan', 'Ijokodo area, Ibadan', 'plt78353'),
(2, 'LHD00694', 'Ololade', 'Qudus Adigun', 'MALE', 'IBADAN', 'COMPUTER SCIENTIST', 'Oyo state', 'Apete Lga', 'Apete', '0908766554', 'qudus@gmail.com', 'perc00150', '2,000000', 'Residential', 'Ibadan', 'Ayegun', 'Plt78222'),
(3, 'LHD00064', 'Abdul-kareem ', 'Waliyillah Adio', 'MALE', 'Oyo State', 'COMPUTER SCIENTIST', 'Oyo state', 'Atiba Local goverment', 'No 2, ile- ola, oyo, Oyo state', '09037373733', 'waliyad@yahoo.com', 'perc00818', '1000,000', 'Commercial', 'Ogbomoso', 'Ijokodo area, Ogbomoso', 'plt6728'),
(4, 'LHD00279', 'ALADE', 'Adesola DEHINDE', 'MALE', 'Oyo State', 'Egineer', 'Oyo state', 'Ibarapa East', 'No 23,lekuleja Str.', '09038388388', 'basss@yahoo.com', 'perc00862', '500,000000', 'Residential', 'Ogun State', 'Ijebu-Ode', 'Plt46464'),
(5, 'LHD00628', 'ADEOYE', 'ISHOLA', 'MALE', 'IBADAN', 'Civil_Servant', 'Osun Sttate', 'Ejigbo', 'No 34, ile Oba.', '09084474444', 'ishola@gmail.com', 'perc00326', '2,000000', 'Commercial', 'Lagos', 'Isolo', 'Plt5363'),
(8, 'LHD00698', 'MUTIU', 'ISHOLA', 'FEMALE', 'Oyo State', 'COMPUTER SCIENTIST', 'Oyo state', 'Ejigbo', 'No 34, ile Oba.', '09038388388', 'baosoriy.lolo@gmail.com', 'perc00837', '500,000000', 'Residential', 'Ibadan', '20,30', 'OY/PLT/00631'),
(9, 'LHD00496', 'OLALERE', 'RIDWAN ISHOLA', 'MALE', 'OSUN-STATE', 'STUDENT', 'OYO STATE', 'IWO', 'No 56, hghdbfisndknmkd', '09038373736', 'Ridwan@gmail.com', 'perc00112', '3000,000000', 'Residential', 'ISOLO', '30,90 arc', 'OY/PLT/00228'),
(10, 'LHD00210', 'Kollo', 'sade', 'FEMALE', 'IBADAN', 'COMPUTER SCIENTIST', 'Osun Sttate', 'Ejigbo', 'No 34, ile Oba.', '123445567', 'baosoriy.gg@gmail.com', '', '', '', '', '', ''),
(11, 'LHD00046', 'sdsdd', 'ISHOLA', 'FEMALE', 'OSUN-STATE', 'STUDENT', 'fvfvf', 'Ejigbo', 'No 34, ile Oba.', 'ererer', 'baosoriy.hh@gmail.com', 'perc00142', '3000,000000', 'Residential', 'ISOLO', '30,90 arc', 'OY/PLT/00487'),
(12, 'LHD00009', 'sarumi', 'mubaraq', 'MALE', 'ibadan', 'student', 'Oyo state', 'ido', 'No 56, hghdbfisndknmkd', '09075645353', 'sarumi111@gmail.com', 'perc00903', '400,000', 'Residential', 'apete', '50:100', 'OY/PLT/00417');
