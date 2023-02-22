-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 22, 2023 at 04:52 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `forumstudent`
--

-- --------------------------------------------------------

--
-- Table structure for table `descriptions`
--

CREATE TABLE `descriptions` (
  `id` int(11) NOT NULL,
  `description_title` text NOT NULL,
  `description_content` text NOT NULL,
  `author` text NOT NULL,
  `description_type` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `descriptions`
--

INSERT INTO `descriptions` (`id`, `description_title`, `description_content`, `author`, `description_type`, `created_at`) VALUES
(1, '2022-23 Project Submission', 'Bill Gates Institute of Computer Science and Management, Osmanabad informs all the students studying in B.Sc. (CS) 6th semester, BCA 6th semester, BBA 6th semester, that last date of project submission is 4th March 2023.\r\nSo be quick to submit your projects.', 'Principal', 'Notice', '2023-02-22 09:31:03'),
(2, 'Exams Apr/May 2022', 'Due to schedule related issues, this semester\'s University Assessments may prepone up to 10 days. So exams may start on to 21st of March, 2023.', 'Principal', 'Reminder', '2023-02-22 09:51:11'),
(3, 'Second Term (UA) Examination Form', 'We would like to inform students studying in B.Sc.(CS) 1, 2, 3, 4, 5 & 6th semester that Second Term Examination Forms are released to fill up till 28th February, 2023.', 'Office', 'Circular', '2023-02-22 10:12:35'),
(4, 'Microsoft AI', 'Join the age AI with Microsoft :\n\"Microsoft is committed to making the promise of AI real with advancements grounded in our mission to help every person on the planet to achieve more.\"\n- Satya Nadela, CEO Microsoft.', 'D . N. Jamale.', 'Information', '2023-02-22 10:52:33');

-- --------------------------------------------------------

--
-- Table structure for table `forum`
--

CREATE TABLE `forum` (
  `id` int(11) NOT NULL,
  `forum_content` text NOT NULL,
  `number_of_replies` int(11) NOT NULL DEFAULT 0,
  `author` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `status` varchar(3) NOT NULL DEFAULT 'LET'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `forum`
--

INSERT INTO `forum` (`id`, `forum_content`, `number_of_replies`, `author`, `created_at`, `status`) VALUES
(1, 'Is learning Python on 2023 worth it?', 0, 'Yash Gaikwad', '2023-02-22 13:03:07', 'LET'),
(2, 'Is there any must learn course for Computer Science students?', 0, 'Aniket Gurav', '2023-02-22 12:36:10', 'LET');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` text NOT NULL,
  `usertype` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `usertype`, `created_at`) VALUES
(1, 'Dr. Arshad Rizvi', 'Principal', '2023-02-22 13:26:38'),
(2, 'D.N.Jamale', 'Faculty', '2023-02-22 13:27:38'),
(3, 'Ismail Hannure', 'Faculty', '2023-02-22 13:28:46'),
(4, 'Aarti Deshmukh', 'Faculty', '2023-02-22 13:28:46'),
(5, 'Madake Madam', 'Faculty', '2023-02-22 13:29:37');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `descriptions`
--
ALTER TABLE `descriptions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `forum`
--
ALTER TABLE `forum`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `descriptions`
--
ALTER TABLE `descriptions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `forum`
--
ALTER TABLE `forum`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
