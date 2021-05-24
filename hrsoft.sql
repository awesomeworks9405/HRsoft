-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 24, 2021 at 01:06 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sdi`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `category_id` int(100) NOT NULL,
  `category_name` varchar(500) NOT NULL,
  `description` text NOT NULL,
  `date_added` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`category_id`, `category_name`, `description`, `date_added`) VALUES
(1, '360 Degree', 'Category for Employee Review on page one with radio inputs', '2021-03-31 11:56:35'),
(2, 'Performance Competencies', 'Evaluate your own performance in terms of results achieved, teamwork and professional growth (Self Assessment)', '2021-03-31 12:04:15'),
(3, 'Team Work', 'Category for Team Work Assessment', '2021-03-31 12:05:27'),
(4, 'Progress made in Professional Development', 'Track records of professional development', '2021-03-31 12:09:02'),
(5, 'Manager\'s Assesment', 'Evaluate the employee’s performance in terms of results achieved, teamwork and professional growth', '2021-03-31 12:11:47'),
(6, 'First Half - 2021', 'January - June Objectives, target, weight and achieved results', '2021-03-31 12:31:37'),
(7, 'Second Half - 2021', 'July - December Objectives, target, weight and achieved results', '2021-03-31 12:32:14');

-- --------------------------------------------------------

--
-- Table structure for table `dir_approval`
--

CREATE TABLE `dir_approval` (
  `dir_approval_id` int(100) NOT NULL,
  `promotion_id` int(100) NOT NULL,
  `employee_appr_id` int(100) NOT NULL,
  `approval_status` varchar(500) NOT NULL,
  `description` text NOT NULL,
  `date_added` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dir_approval`
--

INSERT INTO `dir_approval` (`dir_approval_id`, `promotion_id`, `employee_appr_id`, `approval_status`, `description`, `date_added`) VALUES
(1, 4, 8, 'Approved', 'Promotion Approved by Director', '2021-05-21 21:57:55'),
(2, 2, 6, 'Approved', 'Promotion Approved by Me', '2021-05-22 19:23:40');

-- --------------------------------------------------------

--
-- Table structure for table `employee_appr`
--

CREATE TABLE `employee_appr` (
  `employee_appr_id` int(100) NOT NULL,
  `login_id` int(11) DEFAULT NULL,
  `fname` varchar(500) NOT NULL,
  `designation` varchar(500) NOT NULL,
  `employee_idn` varchar(500) NOT NULL,
  `team` varchar(500) NOT NULL,
  `current_level` varchar(500) NOT NULL,
  `manager_name` varchar(500) NOT NULL,
  `manager_idn` varchar(500) NOT NULL,
  `date` date NOT NULL,
  `dlr` date NOT NULL,
  `date_added` datetime NOT NULL,
  `date_updated` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employee_appr`
--

INSERT INTO `employee_appr` (`employee_appr_id`, `login_id`, `fname`, `designation`, `employee_idn`, `team`, `current_level`, `manager_name`, `manager_idn`, `date`, `dlr`, `date_added`, `date_updated`) VALUES
(5, NULL, 'Adebayo John', 'Marketing', 'AJ098', 'Alpha', 'Undergraduate Intern', 'John Legend', 'JD3452', '0000-00-00', '0000-00-00', '2021-04-19 17:16:30', '2021-04-19 17:16:30'),
(6, NULL, 'Charity', 'Sec', 'LGH2021', 'Alpha', 'Community Developer Trainee', 'Tony Stack', 'TSK606', '2021-04-26', '2021-04-16', '2021-04-26 15:00:14', '2021-04-26 15:00:14'),
(7, NULL, 'Amos Lucky', 'Research', 'AL3409', 'Team 3', 'Assistant Community Developer', 'Emperor Kingsley', 'EK7867', '2021-04-28', '2021-03-31', '2021-04-28 12:25:19', '2021-04-28 12:25:19'),
(8, 3, 'TonyStack', 'Senior', 'MB4567', 'Alpha', 'Graduate Intern', 'John Legend', 'JD3452', '2021-04-29', '2021-04-05', '2021-04-29 16:17:50', '2021-04-29 16:17:50'),
(9, 5, 'Charity Kudi', 'Sec', 'CK2020', 'Alpha', 'Undergraduate Intern', 'TonyStack', 'TS2019', '2021-05-20', '2021-04-26', '2021-05-20 13:12:50', '2021-05-20 13:12:50'),
(10, 6, 'Andrew Chalie', 'Desk', 'EC2021', 'Alpha', 'Graduate Intern', 'John Legend', 'JD3452', '2021-05-20', '2021-04-27', '2021-05-20 13:52:22', '2021-05-20 13:52:22');

-- --------------------------------------------------------

--
-- Table structure for table `forms`
--

CREATE TABLE `forms` (
  `id` int(11) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `age` int(11) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `email` varchar(200) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `address` varchar(200) NOT NULL,
  `occupation` varchar(100) NOT NULL,
  `heq` varchar(100) NOT NULL,
  `training` varchar(100) NOT NULL,
  `dateadded` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `forms`
--

INSERT INTO `forms` (`id`, `fname`, `age`, `gender`, `email`, `phone`, `address`, `occupation`, `heq`, `training`, `dateadded`) VALUES
(1, 'Tony phillips', 25, 'Male', 'Phillipsanthony2001@gmail.com', '08121069145', 'No 3 Beach Road', 'programmer', 'ssce', 'Executive Educators Development Programme (EEDP)', '2021-01-11');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `login_id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(200) NOT NULL,
  `role` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`login_id`, `username`, `password`, `role`) VALUES
(1, '_sdi', 'e03b11af17a8eaf9ddf496d8700abc1db1d25067f04ea3c45db6d631f112ad0bbd4e147ea50deedff56c1a1f718ec31a', 'hr'),
(2, 'sammy_coder', 'sammy', 'user'),
(3, 'tony', 'e03b11af17a8eaf9ddf496d8700abc1d8a2cc0673b1c428315fe84c0138d95c3ddda30baf81e7d9aa821f1ca47098193', 'user'),
(4, 'oracode', 'e03b11af17a8eaf9ddf496d8700abc1df50900159e09ebc41fe28dc9bf52968195214ff07cecde57bcefe55a09559ddf', 'director'),
(5, 'charity', 'e03b11af17a8eaf9ddf496d8700abc1ddfa4219bc5f4a9081e67051f50677ab88324dc378006edf7b2642cb61da71a11', 'user'),
(6, 'andrew', 'e03b11af17a8eaf9ddf496d8700abc1d3988ed18f203fe3ca4d0a0ede27b5c27eaec8e3242572b8821e571e70c51905d', 'user');

-- --------------------------------------------------------

--
-- Table structure for table `promotions`
--

CREATE TABLE `promotions` (
  `promotion_id` int(100) NOT NULL,
  `employee_appr_id` int(100) NOT NULL,
  `promotion_status` varchar(500) NOT NULL,
  `new_level` varchar(500) NOT NULL,
  `description` text NOT NULL,
  `date_added` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `promotions`
--

INSERT INTO `promotions` (`promotion_id`, `employee_appr_id`, `promotion_status`, `new_level`, `description`, `date_added`) VALUES
(1, 5, 'Promoted', 'Graduate Intern', 'kpjojoi', '2021-04-26 14:48:15'),
(2, 6, 'Promoted', 'Executive Community Developer', 'Now promoted to Executive Community Developer', '2021-04-28 00:28:27'),
(3, 7, 'Not Promoted', 'Select New Level', 'Not Promoted. Remains in Assistant Community Developer', '2021-04-28 12:27:10'),
(4, 8, 'Promoted', 'Community Developer Trainee', 'Resume Office immediately', '2021-05-20 16:35:48');

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `question_id` int(100) NOT NULL,
  `name` text NOT NULL,
  `category_id` int(200) NOT NULL,
  `date_added` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`question_id`, `name`, `category_id`, `date_added`) VALUES
(1, 'Follows company’s rules and regulations and procedures', 1, '2021-03-24 05:09:27'),
(2, 'Aligned to and works in line with the vision, mission an core values of the company', 1, '2021-03-24 05:09:46'),
(3, 'Makes a good impression of the company on the customers, clients and vendors', 1, '2021-03-24 05:11:15'),
(4, 'Shows respect to others and communicates professionally with colleagues', 1, '2021-03-24 05:11:54'),
(5, 'Is customer-centric in communication with others', 1, '2021-03-24 09:58:40'),
(6, 'Communicates precisely and gets what is needed', 1, '2021-03-24 09:58:40'),
(7, 'Has good work ethics', 1, '2021-03-24 10:20:55'),
(8, 'Helps colleagues whenever needed', 1, '2021-03-24 10:25:10'),
(9, 'Is a person whom you would ask for help and advice', 1, '2021-03-24 10:25:50'),
(10, 'Listens to colleagues and accepts others’ ideas', 1, '2021-03-24 10:26:55'),
(11, 'Follows timelines rigorously and does the tasks thoroughly', 1, '2021-03-24 10:27:37'),
(12, 'Takes responsibility for his/her own action', 1, '2021-03-24 10:29:04'),
(13, 'Takes ownership of tasks and leads everyone ', 1, '2021-03-24 10:30:02'),
(14, 'Learns new skills, attends trainings and updates himself/herself to grow as a professional', 1, '2021-03-24 10:31:14'),
(16, 'Has good Leadership qualities', 1, '2021-03-24 12:04:45'),
(25, 'Planning', 2, '2021-03-30 19:15:42'),
(26, 'Problem Solving', 2, '2021-03-30 19:22:08'),
(27, 'Managing Change', 2, '2021-03-30 19:22:34'),
(28, 'Innovation', 2, '2021-03-30 19:22:48'),
(29, 'Achieving Results', 2, '2021-03-30 19:23:05'),
(30, 'Technical Skills', 3, '2021-03-30 20:15:51'),
(31, 'Interpersonal Communication', 3, '2021-03-30 20:17:44'),
(32, 'Flexibility Contributing Ideas', 3, '2021-03-30 20:18:24'),
(33, 'Focus', 4, '2021-03-30 20:18:47'),
(34, 'Trainings Received', 4, '2021-03-30 20:19:03'),
(35, 'Trainings Required', 4, '2021-03-30 20:19:18'),
(36, 'Application Of Knowledge Gained', 4, '2021-03-30 20:20:14'),
(37, 'Achievements', 4, '2021-03-30 20:20:29'),
(38, 'Performance Competencies', 5, '2021-03-30 20:21:03'),
(39, 'Progress Made in Professional Development', 5, '2021-03-30 20:22:30'),
(40, 'Job Knowledge', 5, '2021-03-30 20:23:33'),
(41, 'Problem Solving Skills', 5, '2021-03-30 20:23:50'),
(42, 'Productivity', 5, '2021-03-30 20:24:07'),
(43, 'Communication Skills', 5, '2021-03-30 20:24:44'),
(44, 'Leadership Qualities', 5, '2021-03-30 20:25:47'),
(45, 'Objectives', 6, '2021-03-30 21:14:02'),
(46, 'Target', 6, '2021-03-30 21:15:28'),
(47, 'Weight', 6, '2021-03-30 21:15:46'),
(49, 'Achieved', 6, '2021-03-30 21:17:39'),
(50, 'Objectives', 7, '2021-03-30 21:18:45'),
(51, 'Target', 7, '2021-03-30 21:19:00'),
(52, 'Weight', 7, '2021-03-30 21:19:10'),
(53, 'Achieved', 7, '2021-03-30 21:19:26');

-- --------------------------------------------------------

--
-- Table structure for table `responses`
--

CREATE TABLE `responses` (
  `response_id` int(100) NOT NULL,
  `question_id` int(100) NOT NULL,
  `employee_appr_id` int(100) NOT NULL,
  `response` text NOT NULL,
  `date_added` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `responses`
--

INSERT INTO `responses` (`response_id`, `question_id`, `employee_appr_id`, `response`, `date_added`) VALUES
(1, 1, 5, 'Not Applicable', '2021-04-19 17:16:30'),
(2, 2, 5, 'Strongly Disagree', '2021-04-19 17:16:30'),
(3, 3, 5, 'Disagree', '2021-04-19 17:16:30'),
(4, 4, 5, 'Sometimes Agree', '2021-04-19 17:16:30'),
(5, 5, 5, 'Agree', '2021-04-19 17:16:30'),
(6, 6, 5, 'Strongly Agree', '2021-04-19 17:16:30'),
(7, 7, 5, 'Agree', '2021-04-19 17:16:30'),
(8, 8, 5, 'Sometimes Agree', '2021-04-19 17:16:30'),
(9, 9, 5, 'Disagree', '2021-04-19 17:16:30'),
(10, 10, 5, 'Strongly Disagree', '2021-04-19 17:16:30'),
(11, 11, 5, 'Not Applicable', '2021-04-19 17:16:30'),
(12, 12, 5, 'Strongly Disagree', '2021-04-19 17:16:30'),
(13, 13, 5, 'Disagree', '2021-04-19 17:16:30'),
(14, 14, 5, 'Sometimes Agree', '2021-04-19 17:16:30'),
(15, 16, 5, 'Agree', '2021-04-19 17:16:30'),
(16, 45, 5, 'vhgvhv', '2021-04-19 17:16:30'),
(17, 46, 5, 'hvhvhvhv', '2021-04-19 17:16:30'),
(18, 47, 5, 'hvhvhgvv', '2021-04-19 17:16:30'),
(19, 49, 5, 'jvhvhvbj', '2021-04-19 17:16:30'),
(20, 50, 5, 'vjhvhjvj', '2021-04-19 17:16:30'),
(21, 51, 5, 'vgvbvhvj', '2021-04-19 17:16:30'),
(22, 52, 5, 'hvhgvjbjv', '2021-04-19 17:16:30'),
(23, 53, 5, 'vjvhvjh', '2021-04-19 17:16:30'),
(24, 25, 5, 'vjvhvjbjv', '2021-04-19 17:16:30'),
(25, 26, 5, 'jvjbjv', '2021-04-19 17:16:30'),
(26, 27, 5, 'bjhvhvjh', '2021-04-19 17:16:30'),
(27, 28, 5, 'jvghvjhkjhg', '2021-04-19 17:16:30'),
(28, 29, 5, 'chgvjhvjhgv', '2021-04-19 17:16:30'),
(29, 30, 5, 'hvjjgvgvjhvh', '2021-04-19 17:16:30'),
(30, 31, 5, 'vjvhv', '2021-04-19 17:16:30'),
(31, 32, 5, 'vhgvjh', '2021-04-19 17:16:30'),
(32, 33, 5, 'vhgvjhghjvhg', '2021-04-19 17:16:30'),
(33, 34, 5, 'vgjhvgv', '2021-04-19 17:16:30'),
(34, 35, 5, 'jhvhgvjh', '2021-04-19 17:16:30'),
(35, 36, 5, 'vhgvjh', '2021-04-19 17:16:30'),
(36, 37, 5, 'vbjhvh', '2021-04-19 17:16:30'),
(37, 1, 6, 'Not Applicable', '2021-04-26 15:00:14'),
(38, 2, 6, 'Strongly Disagree', '2021-04-26 15:00:14'),
(39, 3, 6, 'Disagree', '2021-04-26 15:00:14'),
(40, 4, 6, 'Sometimes Agree', '2021-04-26 15:00:14'),
(41, 5, 6, 'Agree', '2021-04-26 15:00:14'),
(42, 6, 6, 'Strongly Agree', '2021-04-26 15:00:14'),
(43, 7, 6, 'Agree', '2021-04-26 15:00:14'),
(44, 8, 6, 'Sometimes Agree', '2021-04-26 15:00:14'),
(45, 9, 6, 'Disagree', '2021-04-26 15:00:14'),
(46, 10, 6, 'Strongly Disagree', '2021-04-26 15:00:14'),
(47, 11, 6, 'Not Applicable', '2021-04-26 15:00:14'),
(48, 12, 6, 'Strongly Disagree', '2021-04-26 15:00:14'),
(49, 13, 6, 'Disagree', '2021-04-26 15:00:14'),
(50, 14, 6, 'Sometimes Agree', '2021-04-26 15:00:14'),
(51, 16, 6, 'Agree', '2021-04-26 15:00:14'),
(52, 45, 6, 'ffdfhjg', '2021-04-26 15:00:14'),
(53, 46, 6, 'hvhgv', '2021-04-26 15:00:14'),
(54, 47, 6, 'hgcgh', '2021-04-26 15:00:14'),
(55, 49, 6, 'vbv', '2021-04-26 15:00:14'),
(56, 50, 6, 'jhvhgv', '2021-04-26 15:00:14'),
(57, 51, 6, 'jhvhg', '2021-04-26 15:00:14'),
(58, 52, 6, 'vjhvjh', '2021-04-26 15:00:14'),
(59, 53, 6, 'gvjhjv', '2021-04-26 15:00:14'),
(60, 25, 6, 'hgvjhj', '2021-04-26 15:00:14'),
(61, 26, 6, 'vhgvj', '2021-04-26 15:00:14'),
(62, 27, 6, 'hjhg', '2021-04-26 15:00:14'),
(63, 28, 6, 'vhjg', '2021-04-26 15:00:14'),
(64, 29, 6, 'jhgv', '2021-04-26 15:00:14'),
(65, 30, 6, 'hvhj', '2021-04-26 15:00:14'),
(66, 31, 6, 'chjghj', '2021-04-26 15:00:14'),
(67, 32, 6, 'fjhghjg', '2021-04-26 15:00:14'),
(68, 33, 6, 'jgf', '2021-04-26 15:00:14'),
(69, 34, 6, 'gjhgh', '2021-04-26 15:00:14'),
(70, 35, 6, 'gfjhghjgjhghg', '2021-04-26 15:00:14'),
(71, 36, 6, 'hgfhgjhg', '2021-04-26 15:00:14'),
(72, 37, 6, 'jhgjhgjhgjhgj', '2021-04-26 15:00:14'),
(73, 1, 7, 'Strongly Agree', '2021-04-28 12:25:19'),
(74, 2, 7, 'Agree', '2021-04-28 12:25:19'),
(75, 3, 7, 'Sometimes Agree', '2021-04-28 12:25:19'),
(76, 4, 7, 'Disagree', '2021-04-28 12:25:19'),
(77, 5, 7, 'Strongly Disagree', '2021-04-28 12:25:19'),
(78, 6, 7, 'Not Applicable', '2021-04-28 12:25:19'),
(79, 7, 7, 'Strongly Disagree', '2021-04-28 12:25:19'),
(80, 8, 7, 'Disagree', '2021-04-28 12:25:19'),
(81, 9, 7, 'Sometimes Agree', '2021-04-28 12:25:19'),
(82, 10, 7, 'Agree', '2021-04-28 12:25:19'),
(83, 11, 7, 'Strongly Agree', '2021-04-28 12:25:19'),
(84, 12, 7, 'Agree', '2021-04-28 12:25:19'),
(85, 13, 7, 'Sometimes Agree', '2021-04-28 12:25:19'),
(86, 14, 7, 'Disagree', '2021-04-28 12:25:19'),
(87, 16, 7, 'Strongly Disagree', '2021-04-28 12:25:19'),
(88, 45, 7, 'jghjghg', '2021-04-28 12:25:19'),
(89, 46, 7, 'higbih', '2021-04-28 12:25:19'),
(90, 47, 7, 'ihbhbhb', '2021-04-28 12:25:19'),
(91, 49, 7, 'ghhhbug', '2021-04-28 12:25:19'),
(92, 50, 7, 'bhigugf', '2021-04-28 12:25:19'),
(93, 51, 7, 'jhgh', '2021-04-28 12:25:19'),
(94, 52, 7, 'gi', '2021-04-28 12:25:19'),
(95, 53, 7, 'ghiuuhiuuiih', '2021-04-28 12:25:19'),
(96, 25, 7, 'tdytfyt', '2021-04-28 12:25:19'),
(97, 26, 7, 'tyffuyy', '2021-04-28 12:25:19'),
(98, 27, 7, 'fyffg', '2021-04-28 12:25:19'),
(99, 28, 7, 'ufyfcg', '2021-04-28 12:25:19'),
(100, 29, 7, 'uyfgu', '2021-04-28 12:25:19'),
(101, 30, 7, 'fgyutfuyg', '2021-04-28 12:25:19'),
(102, 31, 7, 'uyfyf', '2021-04-28 12:25:19'),
(103, 32, 7, 'f', '2021-04-28 12:25:19'),
(104, 33, 7, 'ufyty', '2021-04-28 12:25:19'),
(105, 34, 7, 'tyfyu', '2021-04-28 12:25:19'),
(106, 35, 7, 'tufu', '2021-04-28 12:25:19'),
(107, 36, 7, 'tfguyf', '2021-04-28 12:25:19'),
(108, 37, 7, 'tyfuy', '2021-04-28 12:25:19'),
(109, 1, 8, 'Strongly Agree', '2021-04-29 16:17:50'),
(110, 2, 8, 'Agree', '2021-04-29 16:17:50'),
(111, 3, 8, 'Sometimes Agree', '2021-04-29 16:17:50'),
(112, 4, 8, 'Disagree', '2021-04-29 16:17:50'),
(113, 5, 8, 'Strongly Disagree', '2021-04-29 16:17:50'),
(114, 6, 8, 'Not Applicable', '2021-04-29 16:17:50'),
(115, 7, 8, 'Strongly Disagree', '2021-04-29 16:17:50'),
(116, 8, 8, 'Disagree', '2021-04-29 16:17:50'),
(117, 9, 8, 'Sometimes Agree', '2021-04-29 16:17:50'),
(118, 10, 8, 'Agree', '2021-04-29 16:17:50'),
(119, 11, 8, 'Strongly Agree', '2021-04-29 16:17:50'),
(120, 12, 8, 'Agree', '2021-04-29 16:17:50'),
(121, 13, 8, 'Sometimes Agree', '2021-04-29 16:17:50'),
(122, 14, 8, 'Disagree', '2021-04-29 16:17:50'),
(123, 16, 8, 'Strongly Disagree', '2021-04-29 16:17:50'),
(124, 45, 8, 'gfdytfggh', '2021-04-29 16:17:50'),
(125, 46, 8, 'fghjjhg', '2021-04-29 16:17:50'),
(126, 47, 8, 'jfhg', '2021-04-29 16:17:50'),
(127, 49, 8, 'jhg', '2021-04-29 16:17:50'),
(128, 50, 8, 'fhf', '2021-04-29 16:17:50'),
(129, 51, 8, 'fjh', '2021-04-29 16:17:50'),
(130, 52, 8, 'fjhfjhf', '2021-04-29 16:17:50'),
(131, 53, 8, 'jhffg', '2021-04-29 16:17:50'),
(132, 25, 8, 'hjfhgk', '2021-04-29 16:17:50'),
(133, 26, 8, 'gjfjgfjhg', '2021-04-29 16:17:50'),
(134, 27, 8, 'fjgfjgf', '2021-04-29 16:17:50'),
(135, 28, 8, 'jfjhgfhgf', '2021-04-29 16:17:50'),
(136, 29, 8, 'gfjhgfjhf', '2021-04-29 16:17:50'),
(137, 30, 8, 'fghfhfgj', '2021-04-29 16:17:50'),
(138, 31, 8, 'fhfhgfhjgjfhg', '2021-04-29 16:17:50'),
(139, 32, 8, 'fjhfhgfjh', '2021-04-29 16:17:50'),
(140, 33, 8, 'gjgfjhffgjf', '2021-04-29 16:17:50'),
(141, 34, 8, 'hgfghfg', '2021-04-29 16:17:50'),
(142, 35, 8, 'fhgfjghfhgfjh', '2021-04-29 16:17:50'),
(143, 36, 8, 'fghfhgfh', '2021-04-29 16:17:50'),
(144, 37, 8, 'fhggyfg', '2021-04-29 16:17:50'),
(145, 1, 9, 'Not Applicable', '2021-05-20 13:12:50'),
(146, 2, 9, 'Strongly Disagree', '2021-05-20 13:12:50'),
(147, 3, 9, 'Disagree', '2021-05-20 13:12:50'),
(148, 4, 9, 'Sometimes Agree', '2021-05-20 13:12:50'),
(149, 5, 9, 'Agree', '2021-05-20 13:12:50'),
(150, 6, 9, 'Strongly Agree', '2021-05-20 13:12:50'),
(151, 7, 9, 'Agree', '2021-05-20 13:12:50'),
(152, 8, 9, 'Sometimes Agree', '2021-05-20 13:12:50'),
(153, 9, 9, 'Disagree', '2021-05-20 13:12:50'),
(154, 10, 9, 'Strongly Disagree', '2021-05-20 13:12:50'),
(155, 11, 9, 'Not Applicable', '2021-05-20 13:12:50'),
(156, 12, 9, 'Strongly Disagree', '2021-05-20 13:12:50'),
(157, 13, 9, 'Disagree', '2021-05-20 13:12:50'),
(158, 14, 9, 'Sometimes Agree', '2021-05-20 13:12:50'),
(159, 16, 9, 'Agree', '2021-05-20 13:12:50'),
(160, 45, 9, 'dhgjgdhjcjh', '2021-05-20 13:12:50'),
(161, 46, 9, 'jkghckhjvdb,j', '2021-05-20 13:12:50'),
(162, 47, 9, 'jkgjgvxkljj;l', '2021-05-20 13:12:50'),
(163, 49, 9, 'hgjfjh', '2021-05-20 13:12:50'),
(164, 50, 9, 'bbkjb', '2021-05-20 13:12:50'),
(165, 51, 9, ',j', '2021-05-20 13:12:50'),
(166, 52, 9, 'kjhvbm,n', '2021-05-20 13:12:50'),
(167, 53, 9, ',jnbm,', '2021-05-20 13:12:50'),
(168, 25, 9, 'n,m', '2021-05-20 13:12:50'),
(169, 26, 9, 'b,mn', '2021-05-20 13:12:50'),
(170, 27, 9, ',mnb', '2021-05-20 13:12:50'),
(171, 28, 9, ',n,n', '2021-05-20 13:12:50'),
(172, 29, 9, 'mb,.m', '2021-05-20 13:12:50'),
(173, 30, 9, 'n,mn,b', '2021-05-20 13:12:50'),
(174, 31, 9, ',kh', '2021-05-20 13:12:50'),
(175, 32, 9, 'jhb,k', '2021-05-20 13:12:50'),
(176, 33, 9, 'hjghvb', '2021-05-20 13:12:50'),
(177, 34, 9, 'm,,', '2021-05-20 13:12:50'),
(178, 35, 9, 'jmnvm,j', '2021-05-20 13:12:50'),
(179, 36, 9, '.k,', '2021-05-20 13:12:50'),
(180, 37, 9, 'b,..', '2021-05-20 13:12:50'),
(181, 1, 10, 'Strongly Agree', '2021-05-20 13:52:22'),
(182, 2, 10, 'Agree', '2021-05-20 13:52:22'),
(183, 3, 10, 'Sometimes Agree', '2021-05-20 13:52:22'),
(184, 4, 10, 'Disagree', '2021-05-20 13:52:22'),
(185, 5, 10, 'Strongly Disagree', '2021-05-20 13:52:22'),
(186, 6, 10, 'Not Applicable', '2021-05-20 13:52:22'),
(187, 7, 10, 'Strongly Disagree', '2021-05-20 13:52:22'),
(188, 8, 10, 'Disagree', '2021-05-20 13:52:22'),
(189, 9, 10, 'Sometimes Agree', '2021-05-20 13:52:22'),
(190, 10, 10, 'Agree', '2021-05-20 13:52:22'),
(191, 11, 10, 'Strongly Agree', '2021-05-20 13:52:22'),
(192, 12, 10, 'Agree', '2021-05-20 13:52:22'),
(193, 13, 10, 'Sometimes Agree', '2021-05-20 13:52:22'),
(194, 14, 10, 'Disagree', '2021-05-20 13:52:22'),
(195, 16, 10, 'Strongly Disagree', '2021-05-20 13:52:22'),
(196, 45, 10, 'uyjgk', '2021-05-20 13:52:22'),
(197, 46, 10, 'hbk', '2021-05-20 13:52:22'),
(198, 47, 10, 'hgjhkg', '2021-05-20 13:52:22'),
(199, 49, 10, 'vhb', '2021-05-20 13:52:22'),
(200, 50, 10, 'kb', '2021-05-20 13:52:22'),
(201, 51, 10, 'jhvb', '2021-05-20 13:52:22'),
(202, 52, 10, 'm,b', '2021-05-20 13:52:22'),
(203, 53, 10, 'hbjhb', '2021-05-20 13:52:22'),
(204, 25, 10, 'hb', '2021-05-20 13:52:22'),
(205, 26, 10, 'nb', '2021-05-20 13:52:22'),
(206, 27, 10, 'kb', '2021-05-20 13:52:22'),
(207, 28, 10, 'kjb', '2021-05-20 13:52:22'),
(208, 29, 10, 'kjbk', '2021-05-20 13:52:22'),
(209, 30, 10, 'jbk', '2021-05-20 13:52:22'),
(210, 31, 10, 'nbjh', '2021-05-20 13:52:22'),
(211, 32, 10, 'bk', '2021-05-20 13:52:22'),
(212, 33, 10, 'bk', '2021-05-20 13:52:22'),
(213, 34, 10, 'bkj', '2021-05-20 13:52:22'),
(214, 35, 10, 'b', '2021-05-20 13:52:22'),
(215, 36, 10, 'jkb', '2021-05-20 13:52:22'),
(216, 37, 10, 'kb', '2021-05-20 13:52:22');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `dir_approval`
--
ALTER TABLE `dir_approval`
  ADD PRIMARY KEY (`dir_approval_id`);

--
-- Indexes for table `employee_appr`
--
ALTER TABLE `employee_appr`
  ADD PRIMARY KEY (`employee_appr_id`);

--
-- Indexes for table `forms`
--
ALTER TABLE `forms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`login_id`);

--
-- Indexes for table `promotions`
--
ALTER TABLE `promotions`
  ADD PRIMARY KEY (`promotion_id`);

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`question_id`);

--
-- Indexes for table `responses`
--
ALTER TABLE `responses`
  ADD PRIMARY KEY (`response_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `category_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `dir_approval`
--
ALTER TABLE `dir_approval`
  MODIFY `dir_approval_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `employee_appr`
--
ALTER TABLE `employee_appr`
  MODIFY `employee_appr_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `forms`
--
ALTER TABLE `forms`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `login_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `promotions`
--
ALTER TABLE `promotions`
  MODIFY `promotion_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `question_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT for table `responses`
--
ALTER TABLE `responses`
  MODIFY `response_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=217;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
