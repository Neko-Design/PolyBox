-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 30, 2014 at 09:32 AM
-- Server version: 5.6.12-log
-- PHP Version: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `pb_blog`
--
CREATE DATABASE IF NOT EXISTS `pb_blog` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `pb_blog`;

-- --------------------------------------------------------

--
-- Table structure for table `dribbble`
--

CREATE TABLE IF NOT EXISTS `dribbble` (
  `DRIB_ID` int(11) NOT NULL AUTO_INCREMENT,
  `DRIB_OTW` text NOT NULL,
  `DRIB_TITLE` text NOT NULL,
  `DRIB_URL` text NOT NULL,
  `DRIB_IMG` text NOT NULL,
  PRIMARY KEY (`DRIB_ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `dribbble`
--

INSERT INTO `dribbble` (`DRIB_ID`, `DRIB_OTW`, `DRIB_TITLE`, `DRIB_URL`, `DRIB_IMG`) VALUES
(1, '1', 'MasterGMAT', 'https://dribbble.com/shots/1513438-MasterGmat', 'https://d13yacurqjgara.cloudfront.net/users/4826/screenshots/1513438/shot_1x.png');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE IF NOT EXISTS `posts` (
  `POST_ID` int(11) NOT NULL AUTO_INCREMENT,
  `POST_TITLE` text NOT NULL,
  `POST_DATE` text NOT NULL,
  `POST_USER` text NOT NULL,
  `POST_BODY` text NOT NULL,
  `POST_VIS` text NOT NULL,
  `POST_EXTRA` text NOT NULL,
  `POST_SLUG` text NOT NULL,
  PRIMARY KEY (`POST_ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=405 ;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`POST_ID`, `POST_TITLE`, `POST_DATE`, `POST_USER`, `POST_BODY`, `POST_VIS`, `POST_EXTRA`, `POST_SLUG`) VALUES
(1, 'Welcome to PolyBox!', 'January 1st 2014', 'PolyBox', '<img src="uploads/default.jpg" alt="Dell XPS 15 Laptop">\n\n<h2>Welcome to PolyBox!</h2>\n\n<p>Welcome to PolyBox! This blogging software was developed by Ewen McCahon as a simple and lightweight blog that could be easily modified and styled even by beginner users. All you require for the basic blog is a web server with PHP and MySQL.</p>\n\n<p>In it''s default setting, PolyBox doesn''t use JavaScript or HTML5, so it''s compatible with most users. If you wish to use some of the advanced features, enable the ''Modern Theme'' on the settings page.</p>\n\n<p>I hope you enjoy using PolyBox, and if you wish to contribute to the project, feel free to add any new features and submit a pull request on GitHub. If your feature gets added to the main version, your name or GitHub nickname will be added to the developer list and source code</p>\n\n<p>Happy blogging!</p>', '1', '0', 'welcome-to-polybox'),
(404, '404 - Page not Found', 'The Beginning of Time', 'PolyBox', '<h2>404 - File not Found</h2>\n\n<p>The page you requested, --request_uri--, could not be found. Reasons for this could include a mis-typed URL or Renamed Post. Please have a look at the homepage to find the content you were after.</p>\n\n<p>If you followed a link to get here, please contact the webmaster of the linking page and inform them that their link is broken.</p>', '0', '0', '404');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
