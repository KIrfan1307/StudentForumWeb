-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 07, 2023 at 04:05 PM
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
  `author` int(11) NOT NULL,
  `description_type` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `descriptions`
--

INSERT INTO `descriptions` (`id`, `description_title`, `description_content`, `author`, `description_type`, `created_at`) VALUES
(1, '2022-23 Project Submission', 'Bill Gates Institute of Computer Science and Management, Osmanabad informs all the students studying in B.Sc. (CS) 6th semester, BCA 6th semester, BBA 6th semester, that last date of project submission is 4th March 2023.\r\nSo be quick to submit your projects.', 1, 'Notice', '2023-02-22 09:31:03'),
(2, 'Exams Apr/May 2022', 'Due to schedule related issues, this semester\'s University Assessments may prepone up to 10 days. So exams may start on to 21st of March, 2023.', 1, 'Reminder', '2023-02-22 09:51:11'),
(3, 'Second Term (UA) Examination Form', 'We would like to inform students studying in B.Sc.(CS) 1, 2, 3, 4, 5 & 6th semester that Second Term Examination Forms are released to fill up till 28th February, 2023.', 6, 'Circular', '2023-02-22 10:12:35'),
(4, 'Microsoft AI', 'Join the age AI with Microsoft :\n\"Microsoft is committed to making the promise of AI real with advancements grounded in our mission to help every person on the planet to achieve more.\"\n- Satya Nadela, CEO Microsoft.', 2, 'Information', '2023-02-22 10:52:33'),
(5, 'Project submission team', 'Project Submission Team\r\n1. Mrs.Aarti Deshmukh.\r\n2. Mr. Ismail Hannure.\r\n This is the project submission team and will guide you throughout the whole project submission process.', 3, 'Announcement', '2023-03-08 15:29:52');

-- --------------------------------------------------------

--
-- Table structure for table `forum`
--

CREATE TABLE `forum` (
  `id` int(11) NOT NULL,
  `forum_content` text NOT NULL,
  `author` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `forum`
--

INSERT INTO `forum` (`id`, `forum_content`, `author`, `created_at`) VALUES
(1, 'Is learning Python on 2023 worth it?', 'YashGaikwad', '2023-04-06 09:33:24'),
(2, 'Yes, python is getting too much highlight, and popularity since last few years because of its programmer friendly behavior.\r\nYou can make your career in python.\r\nData science is effective field of python\'s demand.', 'IsmailHannure', '2023-04-06 09:33:29'),
(3, 'Is there any must learn course for Computer Science students?', 'AniketGurav', '2023-04-06 09:33:34'),
(4, 'It is up to your choice.\r\nBrowse related courses you want to make career in.', 'AartiDeshmukh', '2023-04-06 09:33:38');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` text NOT NULL,
  `usertype` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `user_details` text NOT NULL DEFAULT 'General User',
  `totalposts` int(11) NOT NULL DEFAULT 0,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `usertype`, `created_at`, `user_details`, `totalposts`, `password`) VALUES
(1, 'ArshadRazvi', 'Principal', '2023-04-06 09:27:51', 'Principal, Bill Gates Institute of Computer Science and Management, Dharashiv.', 2, '$2y$10$lQUonthk8nIPSDA.j0UKwOh0SkAXWblGwsxzx1bl.MxNagqZdBcFm'),
(2, 'DNJamale', 'Faculty', '2023-04-05 07:32:30', 'Senior Lecturer, Bill Gates Institute of Computer Science and Management, Dharashiv.', 0, '$2y$10$WndjGISPrJOXztxXY3E/R.hH/wTYpXtyzbXSaVvKNRR4MrZcdA5k6'),
(3, 'IsmailHannure', 'Faculty', '2023-04-05 08:29:03', 'Lecturer, Bill Gates Institute of Computer Science and Management, Dharashiv.', 0, '$2y$10$bjvCpcIf066E0tQZVfxoWeF8LZJ.MYgz5udGIZ.meymP0e2QLGvs2'),
(4, 'AartiDeshmukh', 'Faculty', '2023-04-06 10:04:50', 'Lecturer, Bill Gates Institute of Computer Science and Management, Dharashiv.', 0, '$2y$10$wW2Q0fWAMfCiCQkN0aJtGOgNPLSJFp5GdL7ju41Sdbt7pCDeZOnk6'),
(5, 'ShrutiMadake', 'Faculty', '2023-04-05 08:34:51', 'Lecturer, Bill Gates Institute of Computer Science and Management, Dharashiv.', 0, '$2y$10$tny4eUT8lNXjOGk2asZ2ku0fHRzb0KYz.YZ.uyctvRmwooXfPWJd6'),
(6, 'Office', 'Office', '2023-04-06 10:34:56', 'Official account of Office, Bill Gates Institute of Computer Science and Management.', 0, '$2y$10$FzPOaOrZckivH9CtU.J.1eQND3DafH8.cEU112i/98MYfMDN8Hsvm'),
(7, 'YashGaikwad', 'Student', '2023-04-06 09:04:44', 'Student, Bill Gates Institute of Computer Science and Management, Dharashiv.', 0, '$2y$10$Awyi5OJmwnj7/BG7sGMX5.Mx9bSBLZ0ku845NcuoOCVVU4rv8u81O'),
(8, 'AniketGurav', 'Student', '2023-04-06 09:05:50', 'Student, Bill Gates Institute of Computer Science and Management, Dharashiv.', 0, '$2y$10$2RC32LeIAF2JpiDfPDrQVuM8Q1E7HbDyPmeOLEkIXhbjbWNd7GnYq'),
(9, 'AvirajPatil', 'Student', '2023-04-06 09:07:20', 'Student, Bill Gates Institute of Computer Science and Management, Dharashiv.', 0, '$2y$10$ptBHTH6JWtUTnu4To0q7xe2zKsyGLiojgCL/1xPcJaxl1ExCXcfli'),
(10, 'SaurabhShitole', 'Student', '2023-04-05 08:35:40', 'Student, Bill Gates Institute of Computer Science and Management, Dharashiv.', 0, '$2y$10$6Rmh36u9ki0b5vSrq4n.9ujOtXc55cxUdbohVEdTpNWhwz6k58xGq'),
(11, 'IrfanKazi', 'Student', '2023-04-07 09:04:54', 'Student, Bill Gates Institute of Computer Science and Management, Dharashiv.', 0, '$2y$10$/FC7BFK3SIwgfeOcv2l/uO18CjzjZKPkDPfgnF2BXYwM62mOTKUey'),
(12, 'AbhijitGawali', 'Student', '2023-04-07 09:39:55', 'Student, Bill Gates Institute of Computer Science and Management, Dharashiv.', 0, '$2y$10$DM0E08FPDBPcOqNvcCvNfeFraJTYfbSIlc/L.NeS.lJj4LXWCzp7C');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `forum`
--
ALTER TABLE `forum`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
