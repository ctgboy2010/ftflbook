-- phpMyAdmin SQL Dump
-- version 4.2.6deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 31, 2014 at 01:29 PM
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
-- Table structure for table `userinfo`
--

CREATE TABLE IF NOT EXISTS `userinfo` (
`id` int(10) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `email` varchar(127) NOT NULL,
  `password` varchar(127) NOT NULL,
  `dob` date NOT NULL,
  `gender` varchar(7) NOT NULL,
  `hobby` varchar(255) NOT NULL,
  `favourite_food` varchar(255) NOT NULL,
  `comment` text NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

--
-- Dumping data for table `userinfo`
--

INSERT INTO `userinfo` (`id`, `first_name`, `last_name`, `email`, `password`, `dob`, `gender`, `hobby`, `favourite_food`, `comment`, `created`, `modified`) VALUES
(1, 'Farida', 'Islam', 'info@gmail.com', '123456', '0000-00-00', 'Female', '', '', 'Hello this is good', '1988-12-12 00:00:00', '1989-12-05 00:00:00'),
(2, 'shajed', 'hoque', 'info@gmail.com', '123456', '0000-00-00', 'Male', '', '', 'aloasj', '1988-12-12 00:00:00', '1989-12-05 00:00:00'),
(4, 'shajed', 'hoque', 'info@gmail.com', '123456', '0000-00-00', 'Male', '', '', 'Hi"', '1988-12-12 00:00:00', '2014-12-29 11:05:31'),
(8, 'jony', 'khan', 'khan@ino.com', '147852', '0000-00-00', 'Male', '', '', 'Hello', '2014-12-29 09:43:24', '2014-12-29 09:43:24'),
(9, 'karim', 'islam', 'karim@mail.com', '963258', '0000-00-00', 'Male', '', '', 'Good to see u', '2014-12-29 09:44:48', '2014-12-29 09:44:48'),
(10, 'Farida', 'Islam', 'm.a.kowsar@gmail.com', '123456', '0000-00-00', 'Female', '', '', 'very good"', '1988-12-12 00:00:00', '1989-12-05 00:00:00'),
(11, 'Farida', 'Islam', 'm.a.kowsar@gmail.com', '123456', '0000-00-00', 'Female', '', '', 'very good"', '1988-12-12 00:00:00', '1989-12-05 00:00:00'),
(13, 'JAHID', 'ALAM', 'jahid@info.com', '1245897', '0000-00-00', 'Male', '', '', 'Hello\r\nhow?', '2014-12-29 11:00:18', '2014-12-29 11:00:18'),
(14, 'JAHID', 'ALAM', 'jahid@info.com', '1245897', '0000-00-00', 'Female', '', '', 'fdhsdrgyrdfsbv"', '2014-12-29 11:01:40', '2014-12-29 11:05:58'),
(15, 'TEST', 'TEST', 'ass@ss.com', '111111', '2014-02-01', 'Male', '', '', 'kdfhk', '2014-12-29 11:12:47', '2014-12-29 15:37:14'),
(16, 'Google', 'Gmail', 'google@mail.com', '1147852', '0000-00-00', 'Male', 'programming', 'Chicken', '1245', '2014-12-29 11:49:37', '0000-00-00 00:00:00'),
(19, 'Shajedul', 'Hoque', 'ctgboy2010@gmail.com', '123456', '2014-01-01', 'Male', '', '', 'Hello', '2014-12-31 13:19:09', '0000-00-00 00:00:00'),
(20, 'Shahidul', 'Hoque', 'shahid@gmail.com', '1234567890', '2011-04-04', 'Male', '', '', 'Good', '2014-12-31 13:23:22', '2014-12-31 13:27:56');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `userinfo`
--
ALTER TABLE `userinfo`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `userinfo`
--
ALTER TABLE `userinfo`
MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=21;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
