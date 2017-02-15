-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 02, 2017 at 08:21 PM
-- Server version: 5.6.16
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `urbra`
--

-- --------------------------------------------------------

--
-- Table structure for table `administrators`
--

CREATE TABLE IF NOT EXISTS `administrators` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `category` enum('corporate','individual') NOT NULL,
  `address` varchar(100) NOT NULL,
  `web_link` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `administrators`
--

INSERT INTO `administrators` (`id`, `name`, `category`, `address`, `web_link`) VALUES
(1, 'Kush', 'corporate', 'blue streams', 'wwww.bs.com'),
(2, 'hello', 'corporate', 'address', 'www.link.com');

-- --------------------------------------------------------

--
-- Table structure for table `articles`
--

CREATE TABLE IF NOT EXISTS `articles` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(100) NOT NULL,
  `article` text NOT NULL,
  `date` date NOT NULL,
  `resource` varchar(10) NOT NULL,
  `expiry` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `articles`
--

INSERT INTO `articles` (`id`, `title`, `article`, `date`, `resource`, `expiry`) VALUES
(1, 'asdsd', 'asdasdsdjjjj', '2017-01-11', 'asass.pdf', '2017-01-19 17:43:00'),
(2, 'yes', 'b', '2017-01-25', '199653.pdf', '2017-01-19 17:43:36'),
(3, 'new article', 'foo bar', '2017-01-27', '11822.pdf', '2017-01-31 22:30:00'),
(4, 'mnmnmn', 'jkjbnmb', '2017-01-26', '521963.pdf', '2017-02-01 02:00:00'),
(5, 'mnmnmn', 'jkjbnmb', '2017-01-26', '802597.pdf', '2017-02-01 02:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `bod`
--

CREATE TABLE IF NOT EXISTS `bod` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `image` varchar(10) NOT NULL,
  `details` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `bod`
--

INSERT INTO `bod` (`id`, `name`, `image`, `details`) VALUES
(8, 'Frank', '668697.jpg', 'Director');

-- --------------------------------------------------------

--
-- Table structure for table `custodians`
--

CREATE TABLE IF NOT EXISTS `custodians` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `category` enum('corporate','individual') NOT NULL,
  `address` varchar(100) NOT NULL,
  `web_link` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `custodians`
--

INSERT INTO `custodians` (`id`, `name`, `category`, `address`, `web_link`) VALUES
(1, 'q', 'corporate', 'qwerty', 'qq'),
(2, 'q', 'corporate', 'q', 'q'),
(4, 'patrick', 'corporate', 'sdfsdfd', 'qq'),
(5, 'p', 'corporate', 'p', 'p'),
(6, 'a', 'corporate', 'a', 'a');

-- --------------------------------------------------------

--
-- Table structure for table `departments`
--

CREATE TABLE IF NOT EXISTS `departments` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `image` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `departments`
--

INSERT INTO `departments` (`id`, `image`) VALUES
(3, '856711.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE IF NOT EXISTS `events` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `details` text NOT NULL,
  `end-date` date NOT NULL,
  `pdf` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `fund_managers`
--

CREATE TABLE IF NOT EXISTS `fund_managers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `category` enum('corporate','individual') NOT NULL,
  `address` varchar(100) NOT NULL,
  `web_link` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `fund_managers`
--

INSERT INTO `fund_managers` (`id`, `name`, `category`, `address`, `web_link`) VALUES
(1, 'z', 'corporate', 'z', 'z');

-- --------------------------------------------------------

--
-- Table structure for table `home_services`
--

CREATE TABLE IF NOT EXISTS `home_services` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `imagename` varchar(10) NOT NULL,
  `heading` varchar(50) NOT NULL,
  `text` text NOT NULL,
  `position` int(3) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `home_services`
--

INSERT INTO `home_services` (`id`, `imagename`, `heading`, `text`, `position`) VALUES
(1, '74687.jpg', 'Workshops', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes\r\n', 1),
(2, '742293.jpg', 'Media Releases', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes\r\n', 2),
(3, '212458.jpg', 'Reports', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes\r\n', 3);

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE IF NOT EXISTS `pages` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`id`, `name`) VALUES
(1, 'administrators'),
(2, 'articles'),
(3, 'bod'),
(4, 'custodians'),
(5, 'departments'),
(6, 'schemes'),
(7, 'fund_managers'),
(8, 'resources'),
(9, 'tenders'),
(10, 'trustees'),
(11, 'users'),
(12, 'vacancies'),
(13, 'index');

-- --------------------------------------------------------

--
-- Table structure for table `page_alloc`
--

CREATE TABLE IF NOT EXISTS `page_alloc` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `page_id` int(11) NOT NULL,
  `uid` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=72 ;

--
-- Dumping data for table `page_alloc`
--

INSERT INTO `page_alloc` (`id`, `page_id`, `uid`) VALUES
(30, 1, 15),
(31, 2, 15),
(32, 3, 15),
(33, 4, 15),
(34, 5, 15),
(35, 6, 15),
(36, 7, 15),
(37, 8, 15),
(38, 9, 15),
(39, 10, 15),
(40, 11, 15),
(41, 12, 15),
(42, 13, 15),
(46, 1, 17),
(47, 2, 17),
(48, 3, 17),
(49, 4, 17),
(50, 5, 17),
(51, 6, 17),
(52, 7, 17),
(53, 8, 17),
(54, 9, 17),
(55, 10, 17),
(56, 11, 17),
(57, 12, 17),
(58, 13, 17),
(59, 1, 18),
(60, 2, 18),
(61, 3, 18),
(62, 4, 18),
(63, 5, 18),
(64, 6, 18),
(65, 7, 18),
(66, 8, 18),
(67, 9, 18),
(68, 10, 18),
(69, 11, 18),
(70, 12, 18),
(71, 13, 18);

-- --------------------------------------------------------

--
-- Table structure for table `rbs`
--

CREATE TABLE IF NOT EXISTS `rbs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `category` enum('corporate','individual') NOT NULL,
  `address` varchar(100) NOT NULL,
  `web_link` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `rbs`
--

INSERT INTO `rbs` (`id`, `name`, `category`, `address`, `web_link`) VALUES
(1, 's', 'corporate', 's', 's');

-- --------------------------------------------------------

--
-- Table structure for table `resources`
--

CREATE TABLE IF NOT EXISTS `resources` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `category` enum('act','regulation','compliance','other') NOT NULL,
  `end_date` date NOT NULL,
  `pdf` varchar(15) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `resources`
--

INSERT INTO `resources` (`id`, `name`, `category`, `end_date`, `pdf`) VALUES
(2, 'act', 'act', '2017-01-31', '63163.pdf'),
(3, 'foo', 'regulation', '0000-00-00', '356174.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `slideshow`
--

CREATE TABLE IF NOT EXISTS `slideshow` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `imagename` varchar(10) NOT NULL,
  `caption` text NOT NULL,
  `link` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `slideshow`
--

INSERT INTO `slideshow` (`id`, `imagename`, `caption`, `link`) VALUES
(1, '855644.jpg', 'caption', 'link'),
(7, '532725.jpg', 'mnbmn', 'mnb');

-- --------------------------------------------------------

--
-- Table structure for table `tenders`
--

CREATE TABLE IF NOT EXISTS `tenders` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ref_no` varchar(10) NOT NULL,
  `desc` text NOT NULL,
  `category` varchar(10) NOT NULL,
  `deadline` date NOT NULL,
  `date_pub` date NOT NULL,
  `date_awarded` date NOT NULL,
  `attachment` varchar(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `tenders`
--

INSERT INTO `tenders` (`id`, `ref_no`, `desc`, `category`, `deadline`, `date_pub`, `date_awarded`, `attachment`) VALUES
(6, '1', '1', '1', '2017-01-09', '2017-01-28', '2017-01-28', '480958.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `tmp`
--

CREATE TABLE IF NOT EXISTS `tmp` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `item_id` int(11) NOT NULL,
  `sid` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `tmp`
--

INSERT INTO `tmp` (`id`, `item_id`, `sid`) VALUES
(2, 9, 1),
(3, 9, 1),
(4, 8, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tmp_slideshow`
--

CREATE TABLE IF NOT EXISTS `tmp_slideshow` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `imagename` varchar(10) NOT NULL,
  `caption` varchar(100) NOT NULL,
  `link` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `trustees`
--

CREATE TABLE IF NOT EXISTS `trustees` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `category` enum('corporate','individual') NOT NULL,
  `address` varchar(100) NOT NULL,
  `web_link` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `trustees`
--

INSERT INTO `trustees` (`id`, `name`, `category`, `address`, `web_link`) VALUES
(1, 'KCB Bank Uganda Limited', 'corporate', 'Commercial Plaza, Plot 7 Kampala road,', 'link.com'),
(2, 'Vivo Energy Uganda Provident Trust Limited', 'corporate', 'Plot 9/11 7th Street Industrial Area', 'dada.com'),
(5, 'trustee', 'corporate', 'address', 'weblink.com');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `firstName` varchar(50) NOT NULL,
  `lastName` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(128) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `unique_id` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=19 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstName`, `lastName`, `email`, `password`) VALUES
(17, 'p', 'p', 'p@p.com', '83878c91171338902e0fe0fb97a8c47a'),
(18, 'frank', 'frank', 'frank@gmail.com', '26253c50741faa9c2e2b836773c69fe6');

-- --------------------------------------------------------

--
-- Table structure for table `vacancies`
--

CREATE TABLE IF NOT EXISTS `vacancies` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(200) NOT NULL,
  `start_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `end_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `description` text NOT NULL,
  `attachment` varchar(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `vacancies`
--

INSERT INTO `vacancies` (`id`, `title`, `start_date`, `end_date`, `description`, `attachment`) VALUES
(1, 'qwqwq', '2017-02-02 16:24:37', '2017-02-02 16:24:37', 'qwsasasa', '839638.pdf'),
(2, 'foobar', '2017-01-27 08:00:00', '2017-02-15 08:00:00', 'hgfhjgfhjjh', 'hgfhfhg'),
(3, 'sdsds', '2017-02-02 16:28:55', '2017-02-02 16:28:55', 'sdsd', 'kjhkjhk');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
