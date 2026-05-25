-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 25, 2026 at 04:40 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `devops_hub`
--

-- --------------------------------------------------------

--
-- Table structure for table `exam_results`
--

CREATE TABLE `exam_results` (
  `id` int(11) NOT NULL,
  `tool_name` varchar(100) DEFAULT NULL,
  `question_type` varchar(50) DEFAULT NULL,
  `score` int(11) DEFAULT NULL,
  `total` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `exam_results`
--

INSERT INTO `exam_results` (`id`, `tool_name`, `question_type`, `score`, `total`, `created_at`) VALUES
(1, NULL, NULL, 1, 3, '2026-05-25 08:51:18'),
(2, NULL, NULL, 1, 1, '2026-05-25 09:02:08'),
(3, NULL, NULL, 0, 3, '2026-05-25 09:06:07');

-- --------------------------------------------------------

--
-- Table structure for table `mcq_questions`
--

CREATE TABLE `mcq_questions` (
  `id` int(11) NOT NULL,
  `tool_name` varchar(100) DEFAULT NULL,
  `question_type` varchar(100) DEFAULT NULL,
  `question` text DEFAULT NULL,
  `option1` varchar(255) DEFAULT NULL,
  `option2` varchar(255) DEFAULT NULL,
  `option3` varchar(255) DEFAULT NULL,
  `option4` varchar(255) DEFAULT NULL,
  `correct_answer` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `mcq_questions`
--

INSERT INTO `mcq_questions` (`id`, `tool_name`, `question_type`, `question`, `option1`, `option2`, `option3`, `option4`, `correct_answer`, `created_at`) VALUES
(1, 'Docker', 'Basic', '        asa', '1', '2', 'wew', 'weq', 'wew', '2026-05-25 08:14:07'),
(2, 'Kubernetes', 'Basic', 'sd', 'a', 'b', 'c', 'd', 'd', '2026-05-25 08:20:24'),
(3, 'Kubernetes', 'Advanced', 'dsfjlkdsj', 'sd', 'sdfds', 'dsfds', 'fds', 'dsfds', '2026-05-25 08:22:18'),
(4, 'Kubernetes', 'Advanced', 'adsad', 'a', 'b', 'c', 'd', 'c', '2026-05-25 09:02:48'),
(5, 'Kubernetes', 'Advanced', 'dadadas', 'a', 'b', 'c', 'd', 'c', '2026-05-25 09:02:58');

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `id` int(11) NOT NULL,
  `tool_name` varchar(100) DEFAULT NULL,
  `question_type` varchar(100) DEFAULT NULL,
  `question` text DEFAULT NULL,
  `answer` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`id`, `tool_name`, `question_type`, `question`, `answer`, `created_at`) VALUES
(1, 'Docker', 'Basic', 'Simplified software development and deployment', 'aaasjkkkkkkk', '2026-05-24 13:42:05'),
(2, 'Docker', 'Advanced', 'sdasd', 'asdsad', '2026-05-24 13:47:16'),
(3, 'Docker', 'Basic', 'sadasd', 'asdsa', '2026-05-24 13:47:23'),
(4, 'Kubernetes', 'Basic', 'sdasd', 'sadas', '2026-05-24 14:00:27'),
(5, 'Terraform', 'Scenario Based', 'asad', 'sadasd', '2026-05-24 14:05:50');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `exam_results`
--
ALTER TABLE `exam_results`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mcq_questions`
--
ALTER TABLE `mcq_questions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `exam_results`
--
ALTER TABLE `exam_results`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `mcq_questions`
--
ALTER TABLE `mcq_questions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
