-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 28, 2012 at 10:08 AM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `seek`
--

-- --------------------------------------------------------

--
-- Table structure for table `chat`
--

CREATE TABLE IF NOT EXISTS `chat` (
  `mID` int(20) NOT NULL AUTO_INCREMENT,
  `rID` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `text` varchar(100) NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`mID`,`rID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE IF NOT EXISTS `feedback` (
  `rID` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `text` varchar(20) NOT NULL,
  `rating` varchar(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`rID`,`email`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `list`
--

CREATE TABLE IF NOT EXISTS `list` (
  `rID` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `status` varchar(2) NOT NULL,
  `time1` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `ulat` varchar(30) NOT NULL,
  `ulong` varchar(30) NOT NULL,
  PRIMARY KEY (`rID`,`email`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `request`
--

CREATE TABLE IF NOT EXISTS `request` (
  `rID` int(20) NOT NULL AUTO_INCREMENT,
  `email` varchar(20) NOT NULL,
  `title1` varchar(50) NOT NULL,
  `desc1` varchar(100) NOT NULL,
  `mlat` varchar(30) NOT NULL,
  `mlong` varchar(30) NOT NULL,
  `status1` int(3) NOT NULL DEFAULT '0',
  `creation` datetime NOT NULL,
  `closure` datetime NOT NULL,
  PRIMARY KEY (`rID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=183 ;

-- --------------------------------------------------------

--
-- Table structure for table `shoe`
--

CREATE TABLE IF NOT EXISTS `shoe` (
  `sID` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `shoe` varchar(50) NOT NULL,
  `name` varchar(20) NOT NULL,
  PRIMARY KEY (`sID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `email` varchar(20) NOT NULL,
  `password` char(32) NOT NULL,
  `name` varchar(20) NOT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
