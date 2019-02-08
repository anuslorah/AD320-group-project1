-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: mysql.websitesinseattle.com
-- Generation Time: Feb 05, 2019 at 07:53 PM
-- Server version: 5.6.34-log
-- PHP Version: 7.1.22

-- Database: `besthappy`
--

CREATE DATABASE besthappy;-- --------------------------------------------------------

--
-- Table structure for table `bar`
--

CREATE TABLE `bar` (
  `barName` varchar(32) NOT NULL,
  `streetAddress` text NOT NULL,
  `city` varchar(32) NOT NULL,
  `zipcode` int(5) NOT NULL,
  `phone` int(10) NOT NULL,
  `happyHour` text NOT NULL,
  `awesome` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `bar`
--

INSERT INTO `bar` (`barName`, `streetAddress`, `city`, `zipcode`, `phone`, `happyHour`, `awesome`) VALUES
('Beer Star', '9801 16th Ave SW', 'Seattle', 98106, 0, '4-6pm', 'Huge beer selection! Dog friendly!'),
('Beer Star', '9801 16th Ave SW', 'Seattle', 98106, 2064533088, '4-6pm', 'Huge beer selection! Dog friendly!'),
('Capitol Cider', '818 E Pike St, Seattle, WA 98122', 'Seattle', 98102, 2069316456, 'M-F 4-6pm', 'Everything is GF except the beer!!!'),
('Hell Hunt', ' Pikk 39', 'Tallinn', 10133, 372, '4 to 5 daily', 'Great seection of beers and best pelmeni in town'),
('PADA', 'Rumbi tÃ¤nav T1', 'Tallinn', 10415, 1234567890, 'daily 3-5', 'open til 4am!'),
('Witness', '410 Broadway E', 'Seattle', 98102, 1231231234, '3-6', 'Greate place!');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bar`
--
ALTER TABLE `bar`
  ADD PRIMARY KEY (`barName`,`phone`);
COMMIT;

