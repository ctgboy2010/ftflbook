-- phpMyAdmin SQL Dump
-- version 4.2.6deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 01, 2015 at 10:42 PM
-- Server version: 5.5.40-0ubuntu1
-- PHP Version: 5.5.12-2ubuntu4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `ftflbook`
--

-- --------------------------------------------------------

--
-- Table structure for table `dropmulti`
--

CREATE TABLE IF NOT EXISTS `dropmulti` (
`id` int(10) NOT NULL,
  `full_name` varchar(50) NOT NULL,
  `hobby` varchar(200) NOT NULL,
  `food` varchar(200) NOT NULL,
  `cities` varchar(200) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Dumping data for table `dropmulti`
--

INSERT INTO `dropmulti` (`id`, `full_name`, `hobby`, `food`, `cities`, `created`, `modified`) VALUES
(6, 'UK', 'Travelling,Programming', 'Food2,Food3,Food4', 'Khulna,Comilla,Dinajpur,Faridpur', '2015-01-01 12:17:32', '0000-00-00 00:00:00'),
(7, 'shahalal', 'Travelling,Programming,Games', 'Food2,Food3,Food4', 'City17,city18,city19', '2015-01-01 12:19:21', '0000-00-00 00:00:00'),
(8, 'Mohammad', 'Travelling,Games', 'Food2,Food3,', 'Chittagong,Jshore', '2015-01-01 12:22:21', '0000-00-00 00:00:00'),
(9, 'hello', 'Travelling,Programming', '', 'Chittagong,Jshore', '2015-01-01 12:27:29', '0000-00-00 00:00:00'),
(10, 'UK', 'Travelling,Programming', 'Food2,Food4', 'Chittagong,Jshore', '2015-01-01 12:35:44', '0000-00-00 00:00:00'),
(11, 'google', 'Book,Travelling,Programming', 'Food2,Food3,Food4', 'Dhaka,Khulna,Jshore', '2015-01-01 14:11:11', '0000-00-00 00:00:00'),
(12, 'Shajedul Hoque', 'Book,Travelling', 'Food1', 'Chittagong,Khulna,Jshore', '2015-01-01 14:12:22', '0000-00-00 00:00:00'),
(13, 'yahoo.com', 'Book,Travelling,Programming', 'Food2,Food3', 'Khulna,Jshore', '2015-01-01 16:05:36', '0000-00-00 00:00:00'),
(15, 'google', 'Book,Programming', 'Food2,Food4', 'Dhaka,Khulna,Dinajpur', '2015-01-01 22:04:36', '0000-00-00 00:00:00'),
(16, 'google', 'Reading Book,Programming', 'Food2,Food3', 'Dhaka,Khulna', '2015-01-01 22:22:07', '2015-01-01 22:31:36');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dropmulti`
--
ALTER TABLE `dropmulti`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dropmulti`
--
ALTER TABLE `dropmulti`
MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=17;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
