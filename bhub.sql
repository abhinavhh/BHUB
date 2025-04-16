-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 15, 2024 at 11:36 PM
-- Server version: 5.6.16
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `bhub`
--

-- --------------------------------------------------------

--
-- Table structure for table `author`
--

CREATE TABLE IF NOT EXISTS `author` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `contact_no` varchar(20) NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `author`
--

INSERT INTO `author` (`id`, `name`, `gender`, `email`, `contact_no`, `password`) VALUES
(1, 'John', 'Male', 'john@gmail.com', '9495505076', '123');

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE IF NOT EXISTS `books` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(30) NOT NULL,
  `author` varchar(30) NOT NULL,
  `description` text NOT NULL,
  `price` varchar(30) NOT NULL,
  `photo` tinytext NOT NULL,
  `document` tinytext NOT NULL,
  `status` varchar(30) NOT NULL,
  `category` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`id`, `title`, `author`, `description`, `price`, `photo`, `document`, `status`, `category`) VALUES
(1, 'Data Structures and Algorithms', '1', '<span style="color: rgb(77, 81, 86); font-family: arial, sans-serif;">Data Structures And Algorithms Made Easy: Data Structure And Algorithmic Puzzles" is a book that offers solutions to complex data structures and algorithms.&nbsp;</span>Narasimha Karumanchi is the founder of CareerMonk Publications and author of few books on data structures, algorithms, and design patterns. ', '600', '2023-11-19-01-49-4061CVP-MfUoL._SY466_.jpg', 'Smart Wearable Belt for the Blind.pdf', 'active', 'free'),
(2, 'Python Programming', '1', 'Python is the easiest to learn and once you have a good grounding in it, you can move on to another, more complicated language. Python is a beautiful computer language. It is simple, and it is intuitive. ', '1800', '2023-11-19-02-12-0671OOiDmOlHL._SY466_.jpg', 'Indian Legal Documents Corpus for Court Judgment.pdf', 'active', 'free'),
(3, 'Interview Questions on C Progr', '1', 'Most interesting questions asked in Interviews for C Programming. Each section starts with a question, followed by detailed thoughts on the question to help you think independently and then, we present the answer with the detailed explanation.', '700', '2023-11-19-02-17-4871hbqZobThL._SY466_.jpg', 'Smart Crop Protection System.pdf', 'active', 'paid'),
(4, 'Agile in Engineering', '1', 'Agile in Engineering is a comprehensive guide that explores the application of Agile principles and methodologies in the field of engineering. Written by Dipen Tamboli, this book delves into the various aspects of Agile practices and their adaptation to the unique challenges faced by engineering organizations.', '200', '2023-11-19-02-20-52715qNaIpTCL._SY466_.jpg', 'Smart E-dustbin.pdf', 'active', 'paid'),
(5, 'Compilers', '1', 'Compilers Principles, Techniques and Tools, known to professors, students, and developers worldwide as the Dragon Book, is available in a new edition. Every chapter has been completely revised to reflect developments in software engineering, programming languages, and computer architecture that have occurred since 1986, when the last edition published. The authors, recognizing that few readers will ever go on to construct a compiler, retain their focus on the broader set of problems faced in software design and software development.', '400', '2023-11-19-02-26-14410JJMBiihL._SY445_SX342_.jpg', 'waste segregation using yolo.pdf', 'active', 'free');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE IF NOT EXISTS `payment` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `book_id` int(11) NOT NULL,
  `amount` int(11) NOT NULL,
  `card_type` varchar(30) NOT NULL,
  `card_name` varchar(30) NOT NULL,
  `card_no` varchar(30) NOT NULL,
  `payment_date` date NOT NULL,
  `payment_status` varchar(20) NOT NULL,
  `book_status` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`id`, `user_id`, `book_id`, `amount`, `card_type`, `card_name`, `card_no`, `payment_date`, `payment_status`, `book_status`) VALUES
(1, 1, 3, 700, 'credit', 'Anandu', '2345678765432222', '2024-04-16', 'completed', 'purchased');

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE IF NOT EXISTS `reviews` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `user_id` int(10) NOT NULL,
  `book_id` int(11) NOT NULL,
  `review` varchar(100) NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `reviews`
--

INSERT INTO `reviews` (`id`, `user_id`, `book_id`, `review`, `date`) VALUES
(1, 1, 3, 'best book. recommended for everyone.', '2024-04-15');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `address` text NOT NULL,
  `pincode` int(15) NOT NULL,
  `email` varchar(100) NOT NULL,
  `contact_no` varchar(20) NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `gender`, `address`, `pincode`, `email`, `contact_no`, `password`) VALUES
(1, 'mike', 'male', 'qwerty', 682025, 'mike@gmail.com', '1234567890', '123'),
(2, 'gokul', 'male', 'qwert', 0, 'gokul@gmail.com', '7355612289', '123'),
(3, 'Anandhu', 'male', 'qwert', 682456, 'anandhu@gmail.com', '7355612289', 'Anandhu@123');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
