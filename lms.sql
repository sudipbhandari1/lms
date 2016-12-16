-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 19, 2016 at 01:14 PM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `lms`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
`id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'saroj', 'saroj'),
(4, 'nepal', 'nepal'),
(6, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

CREATE TABLE IF NOT EXISTS `book` (
`book_id` int(11) NOT NULL,
  `author` varchar(50) NOT NULL,
  `Publisher` varchar(50) NOT NULL,
  `Year` date NOT NULL,
  `Edition` varchar(50) NOT NULL,
  `summary` text NOT NULL,
  `ISBN` varchar(50) NOT NULL,
  `pages` int(11) NOT NULL,
  `weblink` varchar(50) NOT NULL,
  `title` varchar(50) NOT NULL,
  `category` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `book`
--

INSERT INTO `book` (`book_id`, `author`, `Publisher`, `Year`, `Edition`, `summary`, `ISBN`, `pages`, `weblink`, `title`, `category`) VALUES
(3, '<br /><b>Notice</b>:  Undefined index: Author in <', 'worlsnkdnsjdf', '0000-00-00', '11th', 'hubs of technology                                                                ', '4', 1, 'hk', 'computer project', 'Information Technology'),
(4, 'santosh', 'radeshyam', '0000-00-00', '1st', 'networking', '3', 1, 'www,radye.com', 'computer system', 'Information Technology'),
(5, 'saroj koiirala', 'shyam press house', '0000-00-00', '2nd', 'about chemicals', '5', 1, '', 'chemistry', 'Science'),
(6, 'madan', 'nepal publication', '0000-00-00', '6th', 'ansdjsahdjs', '6', 1, '', 'biology', 'Science'),
(8, 'kiran rana', 'dk publication', '0000-00-00', '8th', 'asd', '8', 1, '', 'economy', 'Management'),
(9, 'ramesh pudasaini', 'sk print house', '0000-00-00', '10th', 'calculate', '', 1, '', 'math', 'Management'),
(10, 'nimesh maharjan', 'ddd', '0000-00-00', '1st', 'beauty of nepal', '9', 1, '', 'nepali view', 'Tourism'),
(11, 'akash', 'aaa', '0000-00-00', '1st', 'abcd', '10', 1, '', 'health', 'Humanity'),
(12, 'sarojjjj', 'abs', '0000-00-00', '1st', 'kjhk', '12', 1, '', 'social', 'Humanity'),
(13, 'saroj', 'santosh', '0000-00-00', '1st', 'this is software', '111', 1, 'sodt.cu', 'software', 'Information Technology'),
(14, 'll', 'k', '2020-02-02', 'hkjhkjjh', 'sdjdsfksldfkfdj', '223', 1, 'sdsj.com', 'dfjasdklk', 'Information Technology'),
(15, 'shyam prashad', 'ramashyam', '2016-08-02', '1st', 'kdjdsdjsa', '999', 1, '', 'kantipur', 'mazine'),
(16, 'sndjsndm,sandns', 'smdnsaands,mnd', '2016-08-05', '1st', 'xnfkjsndn', '88888', 1, 'www.sdfdsbf.com', 'snfnskjab,asn', 'Information Technology');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE IF NOT EXISTS `category` (
`id` int(11) NOT NULL,
  `c_name` varchar(50) NOT NULL,
  `c_symbol` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `c_name`, `c_symbol`) VALUES
(1, 'Information Technology', 'IT'),
(2, 'Science', 'sci'),
(3, 'Management', 'mng'),
(4, 'Humanity', 'hum'),
(5, 'Tourism', 'trm'),
(6, 'abc', '12345'),
(7, 'mazine', 'MZ'),
(8, 'porn', 'p0');

-- --------------------------------------------------------

--
-- Table structure for table `fine`
--

CREATE TABLE IF NOT EXISTS `fine` (
`fine_id` int(11) NOT NULL,
  `fine_amount` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `fine`
--

INSERT INTO `fine` (`fine_id`, `fine_amount`) VALUES
(1, 10),
(2, 10);

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE IF NOT EXISTS `students` (
`student_id` int(11) NOT NULL,
  `f_name` varchar(50) NOT NULL,
  `l_name` varchar(50) NOT NULL,
  `adress` varchar(50) NOT NULL,
  `contact` varchar(50) NOT NULL,
  `DoB` date NOT NULL,
  `joined_date` date NOT NULL,
  `gender` varchar(10) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=140092 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`student_id`, `f_name`, `l_name`, `adress`, `contact`, `DoB`, `joined_date`, `gender`) VALUES
(1, 'saroj', 'koirala', 'gothatar', '9843545501', '1995-01-05', '0000-00-00', 'male'),
(2, 'santosh', 'tamang', 'gothatar', '9853545556', '2012-01-01', '0000-00-00', 'male'),
(3, 'bikash', 'pokherel', 'mantar', '9813124724', '2013-01-01', '0000-00-00', 'male'),
(4, 'sujan', 'khanal', 'nayabasti', '9849745711', '2012-02-01', '0000-00-00', 'male'),
(12, 'dfhkjashh', 'dgdg', 'hj', '341341', '2021-02-11', '2008-06-17', 'male'),
(22132, 'sushil', 'koirala', 'djflkaldkfjl', '2341341', '2022-02-02', '0000-00-00', 'male'),
(140090, 'saroj123', 'koirala', 'gothatar', '9843545501', '1995-05-01', '2016-08-03', 'male'),
(140091, 'aasd', 'dsd', 'sdf', '9876543211', '0000-00-00', '0000-00-00', 'male');

-- --------------------------------------------------------

--
-- Table structure for table `transaction`
--

CREATE TABLE IF NOT EXISTS `transaction` (
`t_id` int(11) NOT NULL,
  `student_id` varchar(50) NOT NULL,
  `student_name` varchar(50) NOT NULL,
  `book_title` varchar(50) NOT NULL,
  `issue_date` date NOT NULL,
  `due_date` date NOT NULL,
  `renew_date` date NOT NULL,
  `return_date` date NOT NULL,
  `fine` int(11) NOT NULL,
  `book_isbn` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `transaction`
--

INSERT INTO `transaction` (`t_id`, `student_id`, `student_name`, `book_title`, `issue_date`, `due_date`, `renew_date`, `return_date`, `fine`, `book_isbn`) VALUES
(1, '1', 'saroj', 'social', '2016-08-01', '2016-08-17', '2016-08-01', '2016-08-16', 100, '12'),
(2, '1', 'saroj koirala', 'social', '2020-05-05', '2024-04-15', '2016-08-02', '2016-08-10', 0, '12'),
(3, '1', 'saroj koirala', 'computer system', '2012-12-01', '2015-01-01', '2016-08-04', '2016-08-13', 0, '3'),
(4, '3', 'bikash pokherel', 'computer system', '2013-01-01', '2014-01-01', '0000-00-00', '2013-05-05', 0, '3'),
(5, '1', 'saroj koirala', 'snfnskjab,asn', '2013-08-08', '2015-08-30', '0000-00-00', '2016-01-01', 0, '88888'),
(6, '3', 'bikash pokherel', 'computer system', '2016-08-02', '2016-08-01', '0000-00-00', '0000-00-00', 0, '3'),
(7, '140090', 'saroj123 koirala', 'computer system', '2016-08-25', '2016-10-25', '0000-00-00', '0000-00-00', 0, '3');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `book`
--
ALTER TABLE `book`
 ADD PRIMARY KEY (`book_id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fine`
--
ALTER TABLE `fine`
 ADD PRIMARY KEY (`fine_id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
 ADD PRIMARY KEY (`student_id`);

--
-- Indexes for table `transaction`
--
ALTER TABLE `transaction`
 ADD PRIMARY KEY (`t_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `book`
--
ALTER TABLE `book`
MODIFY `book_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `fine`
--
ALTER TABLE `fine`
MODIFY `fine_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
MODIFY `student_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=140092;
--
-- AUTO_INCREMENT for table `transaction`
--
ALTER TABLE `transaction`
MODIFY `t_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
