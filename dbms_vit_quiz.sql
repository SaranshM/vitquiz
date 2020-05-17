-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 17, 2020 at 08:17 AM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbms_vit_quiz`
--

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `course_code` varchar(255) NOT NULL,
  `course_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`course_code`, `course_name`) VALUES
('CSE1001', 'Operating System'),
('CSE1002', 'Theory of computation and compiler design'),
('CSE1003', 'Database management systems'),
('CSE1004', 'Object oriented programming'),
('CSE1005', 'Problem solving'),
('CSE1006', 'Calculus');

-- --------------------------------------------------------

--
-- Table structure for table `faculty`
--

CREATE TABLE `faculty` (
  `username` varchar(255) NOT NULL,
  `faculty_name` varchar(255) NOT NULL,
  `pwd` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `faculty`
--

INSERT INTO `faculty` (`username`, `faculty_name`, `pwd`) VALUES
('Fac_0001', 'ABC', '$2y$10$hTy728JFWpTY1uW1KII3YOhC0iZRXlTFT5TRxZ2GFV.6roNuRSic6'),
('Fac_0002', 'XYZ', '$2y$10$xJI9HCAXHwQcQpYn.cf/weLrTL1aEEXOGr953p1nLHpxtg1bURdYa'),
('Fac_0003', 'PQR', '$2y$10$xJI9HCAXHwQcQpYn.cf/weLrTL1aEEXOGr953p1nLHpxtg1bURdYa'),
('Fac_0004', 'LMN', '$2y$10$xJI9HCAXHwQcQpYn.cf/weLrTL1aEEXOGr953p1nLHpxtg1bURdYa');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `product_code` varchar(25) NOT NULL,
  `fandom` varchar(25) NOT NULL,
  `category` varchar(25) NOT NULL,
  `product_img_name` varchar(100) NOT NULL DEFAULT 'no_image.jpg',
  `product_name` varchar(100) NOT NULL,
  `price` int(5) NOT NULL,
  `product_qty` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `product_code`, `fandom`, `category`, `product_img_name`, `product_name`, `price`, `product_qty`) VALUES
(1, 'got-cloth-1', 'Game of Thrones', 'Clothing', 'got-cloth-1.jpg', '[T-shirt] The North Remembers', 500, 99),
(2, 'got-cloth-2', 'Game of Thrones', 'Clothing', 'got-cloth-2.jpg', '[T-shirt] King in the North', 500, 99),
(3, 'got-cloth-3', 'Game of Thrones', 'Clothing', 'got-cloth-3.jpg', '[T-shirt] Hodor', 500, 99),
(4, 'got-cloth-4', 'Game of Thrones', 'Clothing', 'got-cloth-4.jpg', 'Hoodie', 750, 99),
(5, 'got-cloth-5', 'Game of Thrones', 'Clothing', 'got-cloth-5.jpg', '[T-shirt] The Direwolves', 500, 99),
(6, 'got-cloth-6', 'Game of Thrones', 'Clothing', 'got-cloth-6.jpg', '[T-shirt] The Lannisters Send Their Regards', 500, 99),
(7, 'got-acc-1', 'Game of Thrones', 'Accessories', 'got-acc-1.jpg', 'Targaryen Necklace', 350, 99),
(8, 'got-acc-2', 'Game of Thrones', 'Accessories', 'got-acc-2.jpg', 'Direwolf Necklace', 350, 99),
(9, 'got-acc-3', 'Game of Thrones', 'Accessories', 'got-acc-3.jpg', 'Stark Necklace', 350, 99),
(10, 'got-acc-4', 'Game of Thrones', 'Accessories', 'got-acc-4.jpg', 'Armour Ring', 350, 99),
(11, 'got-sou-1', 'Game of Thrones', 'Souvenir', 'got-sou-1.jpg', 'Jon Snow Pendrive', 400, 99),
(12, 'got-sou-2', 'Game of Thrones', 'Souvenir', 'got-sou-2.jpg', 'Tyrion Pendrive', 400, 99),
(13, 'got-sou-3', 'Game of Thrones', 'Souvenir', 'got-sou-3.jpg', 'Dragon Pendrive', 400, 99),
(14, 'got-sou-4', 'Game of Thrones', 'Souvenir', 'got-sou-4.jpg', 'Arya Stark Pendrivee', 400, 99),
(15, 'got-sou-5', 'Game of Thrones', 'Souvenir', 'got-sou-5.jpg', 'Darnerys Pendrive', 400, 99),
(16, 'got-sou-6', 'Game of Thrones', 'Souvenir', 'got-sou-6.jpg', 'Winterfell Glass', 600, 99),
(17, 'got-sou-7', 'Game of Thrones', 'Souvenir', 'got-sou-7.jpg', 'Castle Black Glass', 600, 99),
(18, 'got-sou-8', 'Game of Thrones', 'Souvenir', 'got-sou-8.jpg', 'Winterfell Mug', 600, 99),
(19, 'hg-cloth-01', 'Hunger Games', 'Clothing', 'hg-cloth-01.jpg', '[T-shirt] The Girl on Fire', 500, 99),
(20, 'hg-cloth-02', 'Hunger Games', 'Clothing', 'hg-cloth-02.jpg', '[T-shirt] Real or Not Real', 500, 99),
(21, 'hg-cloth-03', 'Hunger Games', 'Clothing', 'hg-cloth-03.jpg', '[T-shirt] The Hanging Tree', 500, 99),
(22, 'hg-cloth-04', 'Hunger Games', 'Clothing', 'hg-cloth-04.jpg', '[T-shirt] May the odds be ever in your favor', 500, 99),
(23, 'hg-cloth-05', 'Hunger Games', 'Clothing', 'hg-cloth-05.jpg', '[T-shirt] Calm Down Bro', 500, 99),
(24, 'hg-cloth-06', 'Hunger Games', 'Clothing', 'hg-cloth-06.jpg', '[T-shirt]The 75th Annual Hunger Games', 500, 99),
(25, 'hg-acc-01', 'Hunger Games', 'Accessories', 'hg-acc-01.jpg', 'Mockingjay Bracelet', 350, 99),
(26, 'hg-acc-02', 'Hunger Games', 'Accessories', 'hg-acc-02.jpg', 'Real or Not Real? Pendant', 350, 99),
(27, 'hg-acc-03', 'Hunger Games', 'Accessories', 'hg-acc-03.jpg', 'Mockingjay Earrings', 350, 99),
(28, 'hg-acc-04', 'Hunger Games', 'Accessories', 'hg-acc-04.jpg', 'Katniss Arrow Earrings', 350, 99),
(29, 'hg-sou-01', 'Hunger Games', 'Souvenir', 'hg-sou-01.png', 'Hunger Games Mug', 250, 99),
(30, 'hg-sou-02', 'Hunger Games', 'Souvenir', 'hg-sou-02.jpg', 'Katniss Tote Bag', 500, 99),
(31, 'hg-sou-03', 'Hunger Games', 'Souvenir', 'hg-sou-03.jpg', 'Mockingjay Iphone Cover', 300, 99),
(32, 'hg-sou-04', 'Hunger Games', 'Souvenir', 'hg-sou-04.jpg', 'Girl on Fire Pillow Cover', 200, 99),
(33, 'hp-cloth-1', 'Harry Potter', 'Clothing', 'hp-cloth-1.jpg', '[T-shirt] Hogwarts Alumni', 500, 99),
(34, 'hp-cloth-2', 'Harry Potter', 'Clothing', 'hp-cloth-2.jpg', '[T-shirt] Hogwarts', 500, 99),
(35, 'hp-cloth-3', 'Harry Potter', 'Clothing', 'hp-cloth-3.jpg', '[T-shirt] Deathly Hollows', 500, 99),
(36, 'hp-cloth-4', 'Harry Potter', 'Clothing', 'hp-cloth-4.jpg', '[T-shirt] Gryffindor', 500, 99),
(37, 'hp-cloth-5', 'Harry Potter', 'Clothing', 'hp-cloth-5.jpg', '[T-shirt] Ravenclaw', 500, 99),
(38, 'hp-cloth-6', 'Harry Potter', 'Clothing', 'hp-cloth-6.jpg', '[T-shirt] Slytherin', 500, 99),
(39, 'hp-cloth-7', 'Harry Potter', 'Clothing', 'hp-cloth-7.jpg', '[T-shirt] Hufflepuff', 500, 99),
(40, 'hp-acc-1', 'Harry Potter', 'Accessories', 'hp-acc-1.jpg', 'Deathly Hollows Pendant', 350, 99),
(41, 'hp-acc-2', 'Harry Potter', 'Accessories', 'hp-acc-2.jpg', 'Time Turn Earings', 350, 99),
(42, 'hp-acc-3', 'Harry Potter', 'Accessories', 'hp-acc-3.jpg', 'Deathly Hollows Ring', 350, 99),
(43, 'hp-acc-7', 'Harry Potter', 'Accessories', 'hp-acc-7.jpg', 'Snitch Necklace', 350, 99),
(44, 'hp-acc-8', 'Harry Potter', 'Accessories', 'hp-acc-8.jpg', 'Snitch Earings', 350, 99),
(45, 'hp-acc-9', 'Harry Potter', 'Accessories', 'hp-acc-9.jpg', 'Bracelet', 350, 99),
(46, 'hp-sou-1', 'Harry Potter', 'Souvenir', 'hp-sou-1.jpg', 'Hogwarts Mug', 450, 99),
(47, 'hp-sou-1', 'Harry Potter', 'Souvenir', 'hp-sou-2.jpg', 'Marauders Map Mug ', 250, 99),
(48, 'hp-sou-1', 'Harry Potter', 'Souvenir', 'hp-sou-3.jpg', 'Harry Potter Mobile Case', 300, 99),
(49, 'hp-sou-1', 'Harry Potter', 'Souvenir', 'hp-sou-4.jpg', 'Marauders Map Mobile Case', 250, 99),
(50, 'hp-sou-1', 'Harry Potter', 'Souvenir', 'hp-sou-5.jpg', 'Deathly Hollows Mobile Case', 250, 99);

-- --------------------------------------------------------

--
-- Table structure for table `q1`
--

CREATE TABLE `q1` (
  `access_code` varchar(255) NOT NULL,
  `a1` varchar(255) NOT NULL,
  `a2` varchar(255) NOT NULL,
  `a3` varchar(255) NOT NULL,
  `a4` varchar(255) NOT NULL,
  `a_c` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `q1`
--

INSERT INTO `q1` (`access_code`, `a1`, `a2`, `a3`, `a4`, `a_c`) VALUES
('627027', 'Option 1 1', 'Option 1 2', 'Option 1 3', 'Option 1 4', 'A'),
('741435', 'Option 1 1', 'Option 1 2', 'Option 1 3', 'Option 1 4', 'D\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `q2`
--

CREATE TABLE `q2` (
  `access_code` varchar(255) NOT NULL,
  `a1` varchar(255) NOT NULL,
  `a2` varchar(255) NOT NULL,
  `a3` varchar(255) NOT NULL,
  `a4` varchar(255) NOT NULL,
  `a_c` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `q2`
--

INSERT INTO `q2` (`access_code`, `a1`, `a2`, `a3`, `a4`, `a_c`) VALUES
('627027', 'Option 2 1', 'Option 2 2', 'Option 2 3', 'Option 2 4', 'A\r\n'),
('741435', 'Option 2 1', 'Option 2 2', 'Option 2 3', 'Option 2 4', 'A\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `q3`
--

CREATE TABLE `q3` (
  `access_code` varchar(255) NOT NULL,
  `a1` varchar(255) NOT NULL,
  `a2` varchar(255) NOT NULL,
  `a3` varchar(255) NOT NULL,
  `a4` varchar(255) NOT NULL,
  `a_c` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `q3`
--

INSERT INTO `q3` (`access_code`, `a1`, `a2`, `a3`, `a4`, `a_c`) VALUES
('627027', 'Option 3 1', 'Option 3 2', 'Option 3 3', 'Option 3 4', 'A\r\n'),
('741435', 'Option 3 1', 'Option 3 2', 'Option 3 3', 'Option 3 4', 'A\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `q4`
--

CREATE TABLE `q4` (
  `access_code` varchar(255) NOT NULL,
  `a1` varchar(255) NOT NULL,
  `a2` varchar(255) NOT NULL,
  `a3` varchar(255) NOT NULL,
  `a4` varchar(255) NOT NULL,
  `a_c` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `q4`
--

INSERT INTO `q4` (`access_code`, `a1`, `a2`, `a3`, `a4`, `a_c`) VALUES
('627027', 'Option 4 1', 'Option 4 2', 'Option 4 3', 'Option 4 4', 'A\r\n'),
('741435', 'Option 4 1', 'Option 4 2', 'Option 4 3', 'Option 4 4', 'A\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `q5`
--

CREATE TABLE `q5` (
  `access_code` varchar(255) NOT NULL,
  `a1` varchar(255) NOT NULL,
  `a2` varchar(255) NOT NULL,
  `a3` varchar(255) NOT NULL,
  `a4` varchar(255) NOT NULL,
  `a_c` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `q5`
--

INSERT INTO `q5` (`access_code`, `a1`, `a2`, `a3`, `a4`, `a_c`) VALUES
('627027', 'Option 5 1', 'Option 5 2', 'Option 5 3', 'Option 5 4', 'A\r\n'),
('741435', 'Option 5 1', 'Option 5 2', 'Option 5 3', 'Option 5 4', 'A\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `q6`
--

CREATE TABLE `q6` (
  `access_code` varchar(255) NOT NULL,
  `a1` varchar(255) NOT NULL,
  `a2` varchar(255) NOT NULL,
  `a3` varchar(255) NOT NULL,
  `a4` varchar(255) NOT NULL,
  `a_c` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `q6`
--

INSERT INTO `q6` (`access_code`, `a1`, `a2`, `a3`, `a4`, `a_c`) VALUES
('627027', 'Option 6 1', 'Option 6 2', 'Option 6 3', 'Option 6 4', 'A\r\n'),
('741435', 'Option 6 1', 'Option 6 2', 'Option 6 3', 'Option 6 4', 'A\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `q7`
--

CREATE TABLE `q7` (
  `access_code` varchar(255) NOT NULL,
  `a1` varchar(255) NOT NULL,
  `a2` varchar(255) NOT NULL,
  `a3` varchar(255) NOT NULL,
  `a4` varchar(255) NOT NULL,
  `a_c` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `q7`
--

INSERT INTO `q7` (`access_code`, `a1`, `a2`, `a3`, `a4`, `a_c`) VALUES
('627027', 'Option 7 1', 'Option 7 2', 'Option 7 3', 'Option 7 4', 'A\r\n'),
('741435', 'Option 7 1', 'Option 7 2', 'Option 7 3', 'Option 7 4', 'A\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `q8`
--

CREATE TABLE `q8` (
  `access_code` varchar(255) NOT NULL,
  `a1` varchar(255) NOT NULL,
  `a2` varchar(255) NOT NULL,
  `a3` varchar(255) NOT NULL,
  `a4` varchar(255) NOT NULL,
  `a_c` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `q8`
--

INSERT INTO `q8` (`access_code`, `a1`, `a2`, `a3`, `a4`, `a_c`) VALUES
('627027', 'Option 8 1', 'Option 8 2', 'Option 8 3', 'Option 8 4', 'A\r\n'),
('741435', 'Option 8 1', 'Option 8 2', 'Option 8 3', 'Option 8 4', 'A\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `q9`
--

CREATE TABLE `q9` (
  `access_code` varchar(255) NOT NULL,
  `a1` varchar(255) NOT NULL,
  `a2` varchar(255) NOT NULL,
  `a3` varchar(255) NOT NULL,
  `a4` varchar(255) NOT NULL,
  `a_c` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `q9`
--

INSERT INTO `q9` (`access_code`, `a1`, `a2`, `a3`, `a4`, `a_c`) VALUES
('627027', 'Option 9 1', 'Option 9 2', 'Option 9 3', 'Option 9 4', 'A\r\n'),
('741435', 'Option 9 1', 'Option 9 2', 'Option 9 3', 'Option 9 4', 'A\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `q10`
--

CREATE TABLE `q10` (
  `access_code` varchar(255) NOT NULL,
  `a1` varchar(255) NOT NULL,
  `a2` varchar(255) NOT NULL,
  `a3` varchar(255) NOT NULL,
  `a4` varchar(255) NOT NULL,
  `a_c` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `q10`
--

INSERT INTO `q10` (`access_code`, `a1`, `a2`, `a3`, `a4`, `a_c`) VALUES
('627027', 'Option 10 1', 'Option 10 2', 'Option 10 3', 'Option 10 4', 'D\r\n'),
('741435', 'Option 10 1', 'Option 10 2', 'Option 10 3', 'Option 10 4', 'D\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `access_code` varchar(255) NOT NULL,
  `q1` varchar(255) NOT NULL,
  `q2` varchar(255) NOT NULL,
  `q3` varchar(255) NOT NULL,
  `q4` varchar(255) NOT NULL,
  `q5` varchar(255) NOT NULL,
  `q6` varchar(255) NOT NULL,
  `q7` varchar(255) NOT NULL,
  `q8` varchar(255) NOT NULL,
  `q9` varchar(255) NOT NULL,
  `q10` varchar(255) NOT NULL,
  `q1_img` varchar(255) DEFAULT NULL,
  `q2_img` varchar(255) DEFAULT NULL,
  `q3_img` varchar(255) DEFAULT NULL,
  `q4_img` varchar(255) DEFAULT NULL,
  `q5_img` varchar(255) DEFAULT NULL,
  `q6_img` varchar(255) DEFAULT NULL,
  `q7_img` varchar(255) DEFAULT NULL,
  `q8_img` varchar(255) DEFAULT NULL,
  `q9_img` varchar(255) DEFAULT NULL,
  `q10_img` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`access_code`, `q1`, `q2`, `q3`, `q4`, `q5`, `q6`, `q7`, `q8`, `q9`, `q10`, `q1_img`, `q2_img`, `q3_img`, `q4_img`, `q5_img`, `q6_img`, `q7_img`, `q8_img`, `q9_img`, `q10_img`) VALUES
('627027', 'First Question', 'Second Question', 'Third Question', 'Fourth Question', 'Fifth Question', 'Sixth Question', 'Seventh Question', 'Eighth Question', 'Ninth Question', 'Tenth Question', 'images/img5ebd727d7412f5.53238755.jpg', 'images/img5ebd727d752760.94060350.jpg', 'images/img5ebd727d7624f0.63267926.jpg', 'images/img5ebd727d76f691.60818890.jpg', '', '', '', '', '', ''),
('741435', 'First Question', 'Second Question', 'Third Question', 'Fourth Question', 'Fifth Question', 'Sixth Question', 'Seventh Question', 'Eighth Question', 'Ninth Question', 'Tenth Question', '10', '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `quiz`
--

CREATE TABLE `quiz` (
  `access_code` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `course_code` varchar(255) NOT NULL,
  `quiz_no` varchar(255) NOT NULL,
  `text_file` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `quiz`
--

INSERT INTO `quiz` (`access_code`, `username`, `course_code`, `quiz_no`, `text_file`) VALUES
('627027', 'Fac_0001', 'CSE1003', 'Quiz 1', 'uploads/quiz5ebd72374ac951.05461503.txt'),
('741435', 'Fac_0002', 'CSE1003', 'Quiz 1', 'uploads/quiz5ebd73ca44a761.78634915.txt');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `username` varchar(255) NOT NULL,
  `student_name` varchar(255) NOT NULL,
  `pwd` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`username`, `student_name`, `pwd`) VALUES
('18BCE0001', 'Saransh Mehta', '$2y$10$t/j9NPr.CGjvR4QGk9xfi.Nq7xD6y20Stu8CcLWmg2RgEsVRsxznm'),
('18BCE0002', 'Deepanshu Dhingra', '$2y$10$h6Wu3H642frt3fxV5knLA.hP8A33SVy908hViEZPsofXB.7atoJyu'),
('18BCE0003', 'Kushal Jain', '$2y$10$h6Wu3H642frt3fxV5knLA.hP8A33SVy908hViEZPsofXB.7atoJyu'),
('18BCE0004', 'Ojas Naik', '$2y$10$h6Wu3H642frt3fxV5knLA.hP8A33SVy908hViEZPsofXB.7atoJyu');

-- --------------------------------------------------------

--
-- Table structure for table `student_quiz_details`
--

CREATE TABLE `student_quiz_details` (
  `access_code` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `accessed_or_not` int(1) NOT NULL,
  `score` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_quiz_details`
--

INSERT INTO `student_quiz_details` (`access_code`, `username`, `accessed_or_not`, `score`) VALUES
('627027', '18bce0001', 1, 9),
('741435', '18bce0001', 1, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`course_code`);

--
-- Indexes for table `faculty`
--
ALTER TABLE `faculty`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `q1`
--
ALTER TABLE `q1`
  ADD PRIMARY KEY (`access_code`);

--
-- Indexes for table `q2`
--
ALTER TABLE `q2`
  ADD PRIMARY KEY (`access_code`);

--
-- Indexes for table `q3`
--
ALTER TABLE `q3`
  ADD PRIMARY KEY (`access_code`);

--
-- Indexes for table `q4`
--
ALTER TABLE `q4`
  ADD PRIMARY KEY (`access_code`);

--
-- Indexes for table `q5`
--
ALTER TABLE `q5`
  ADD PRIMARY KEY (`access_code`);

--
-- Indexes for table `q6`
--
ALTER TABLE `q6`
  ADD PRIMARY KEY (`access_code`);

--
-- Indexes for table `q7`
--
ALTER TABLE `q7`
  ADD PRIMARY KEY (`access_code`);

--
-- Indexes for table `q8`
--
ALTER TABLE `q8`
  ADD PRIMARY KEY (`access_code`);

--
-- Indexes for table `q9`
--
ALTER TABLE `q9`
  ADD PRIMARY KEY (`access_code`);

--
-- Indexes for table `q10`
--
ALTER TABLE `q10`
  ADD PRIMARY KEY (`access_code`);

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`access_code`);

--
-- Indexes for table `quiz`
--
ALTER TABLE `quiz`
  ADD PRIMARY KEY (`access_code`,`username`,`course_code`),
  ADD KEY `f_key1` (`username`),
  ADD KEY `f_key2` (`course_code`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `student_quiz_details`
--
ALTER TABLE `student_quiz_details`
  ADD PRIMARY KEY (`access_code`,`username`),
  ADD KEY `f_key15` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `q1`
--
ALTER TABLE `q1`
  ADD CONSTRAINT `f_key4` FOREIGN KEY (`access_code`) REFERENCES `quiz` (`access_code`) ON DELETE CASCADE;

--
-- Constraints for table `q2`
--
ALTER TABLE `q2`
  ADD CONSTRAINT `f_key5` FOREIGN KEY (`access_code`) REFERENCES `quiz` (`access_code`) ON DELETE CASCADE;

--
-- Constraints for table `q3`
--
ALTER TABLE `q3`
  ADD CONSTRAINT `f_key6` FOREIGN KEY (`access_code`) REFERENCES `quiz` (`access_code`) ON DELETE CASCADE;

--
-- Constraints for table `q4`
--
ALTER TABLE `q4`
  ADD CONSTRAINT `f_key7` FOREIGN KEY (`access_code`) REFERENCES `quiz` (`access_code`) ON DELETE CASCADE;

--
-- Constraints for table `q5`
--
ALTER TABLE `q5`
  ADD CONSTRAINT `f_key8` FOREIGN KEY (`access_code`) REFERENCES `quiz` (`access_code`) ON DELETE CASCADE;

--
-- Constraints for table `q6`
--
ALTER TABLE `q6`
  ADD CONSTRAINT `f_key9` FOREIGN KEY (`access_code`) REFERENCES `quiz` (`access_code`) ON DELETE CASCADE;

--
-- Constraints for table `q7`
--
ALTER TABLE `q7`
  ADD CONSTRAINT `f_key10` FOREIGN KEY (`access_code`) REFERENCES `quiz` (`access_code`) ON DELETE CASCADE;

--
-- Constraints for table `q8`
--
ALTER TABLE `q8`
  ADD CONSTRAINT `f_key11` FOREIGN KEY (`access_code`) REFERENCES `quiz` (`access_code`) ON DELETE CASCADE;

--
-- Constraints for table `q9`
--
ALTER TABLE `q9`
  ADD CONSTRAINT `f_key12` FOREIGN KEY (`access_code`) REFERENCES `quiz` (`access_code`) ON DELETE CASCADE;

--
-- Constraints for table `q10`
--
ALTER TABLE `q10`
  ADD CONSTRAINT `f_key13` FOREIGN KEY (`access_code`) REFERENCES `quiz` (`access_code`) ON DELETE CASCADE;

--
-- Constraints for table `questions`
--
ALTER TABLE `questions`
  ADD CONSTRAINT `f_key3` FOREIGN KEY (`access_code`) REFERENCES `quiz` (`access_code`);

--
-- Constraints for table `quiz`
--
ALTER TABLE `quiz`
  ADD CONSTRAINT `f_key1` FOREIGN KEY (`username`) REFERENCES `faculty` (`username`) ON DELETE CASCADE,
  ADD CONSTRAINT `f_key2` FOREIGN KEY (`course_code`) REFERENCES `course` (`course_code`) ON DELETE CASCADE;

--
-- Constraints for table `student_quiz_details`
--
ALTER TABLE `student_quiz_details`
  ADD CONSTRAINT `f_key14` FOREIGN KEY (`access_code`) REFERENCES `quiz` (`access_code`) ON DELETE CASCADE,
  ADD CONSTRAINT `f_key15` FOREIGN KEY (`username`) REFERENCES `student` (`username`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
