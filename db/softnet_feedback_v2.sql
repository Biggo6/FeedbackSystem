-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 10, 2016 at 12:22 PM
-- Server version: 10.1.8-MariaDB
-- PHP Version: 5.6.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `softnet_feedback`
--

-- --------------------------------------------------------

--
-- Table structure for table `departments`
--

CREATE TABLE `departments` (
  `id` int(11) NOT NULL,
  `dept_name` varchar(100) NOT NULL,
  `status` int(11) NOT NULL,
  `updated_at` datetime NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `departments`
--

INSERT INTO `departments` (`id`, `dept_name`, `status`, `updated_at`, `created_at`) VALUES
(1, 'Network', 1, '2016-10-09 14:09:16', '2016-10-09 14:09:16'),
(2, 'Call Center', 1, '2016-10-09 14:14:45', '2016-10-09 14:14:45');

-- --------------------------------------------------------

--
-- Table structure for table `feedbacks`
--

CREATE TABLE `feedbacks` (
  `id` int(11) NOT NULL,
  `department` int(11) NOT NULL,
  `subdepartment` varchar(100) NOT NULL,
  `qn_id` int(11) NOT NULL,
  `qn_answer` int(11) NOT NULL,
  `updated_at` datetime NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedbacks`
--

INSERT INTO `feedbacks` (`id`, `department`, `subdepartment`, `qn_id`, `qn_answer`, `updated_at`, `created_at`) VALUES
(1, 1, 'IP', 10, 3, '2016-10-10 10:19:52', '2016-10-10 10:19:52'),
(2, 1, 'IP', 9, 3, '2016-10-10 10:19:52', '2016-10-10 10:19:52'),
(3, 1, 'IP', 8, 2, '2016-10-10 10:19:52', '2016-10-10 10:19:52'),
(4, 1, 'IP', 7, 3, '2016-10-10 10:19:52', '2016-10-10 10:19:52'),
(5, 1, 'IP', 6, 2, '2016-10-10 10:19:52', '2016-10-10 10:19:52'),
(6, 1, 'IP', 5, 3, '2016-10-10 10:19:52', '2016-10-10 10:19:52'),
(7, 1, 'IP', 4, 4, '2016-10-10 10:19:52', '2016-10-10 10:19:52'),
(8, 1, 'IP', 3, 1, '2016-10-10 10:19:52', '2016-10-10 10:19:52'),
(9, 1, 'IP', 2, 4, '2016-10-10 10:19:52', '2016-10-10 10:19:52');

-- --------------------------------------------------------

--
-- Table structure for table `login_history`
--

CREATE TABLE `login_history` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `logintime` datetime NOT NULL,
  `logouttime` datetime NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login_history`
--

INSERT INTO `login_history` (`id`, `user_id`, `logintime`, `logouttime`, `created_at`, `updated_at`) VALUES
(1, 1, '2016-10-09 07:52:44', '2016-10-09 08:05:27', '2016-10-09 07:52:44', '2016-10-09 08:05:27'),
(2, 1, '2016-10-09 08:05:52', '2016-10-09 08:10:17', '2016-10-09 08:05:52', '2016-10-09 08:10:17'),
(3, 1, '2016-10-09 08:22:01', '2016-10-09 08:24:01', '2016-10-09 08:22:01', '2016-10-09 08:24:01'),
(4, 1, '2016-10-09 08:24:07', '2016-10-09 08:25:51', '2016-10-09 08:24:07', '2016-10-09 08:25:51'),
(5, 1, '2016-10-09 08:26:42', '2016-10-09 08:38:09', '2016-10-09 08:26:42', '2016-10-09 08:38:09'),
(6, 1, '2016-10-09 08:38:53', '2016-10-09 11:02:46', '2016-10-09 08:38:53', '2016-10-09 11:02:46'),
(7, 1, '2016-10-09 11:02:51', '2016-10-09 11:37:57', '2016-10-09 11:02:51', '2016-10-09 11:37:57'),
(8, 2, '2016-10-09 11:38:04', '0000-00-00 00:00:00', '2016-10-09 11:38:04', '2016-10-09 11:38:04'),
(9, 1, '2016-10-09 11:42:59', '2016-10-09 13:14:31', '2016-10-09 11:42:59', '2016-10-09 13:14:31'),
(10, 1, '2016-10-09 13:14:36', '2016-10-09 13:18:18', '2016-10-09 13:14:36', '2016-10-09 13:18:18'),
(11, 1, '2016-10-09 13:25:18', '2016-10-09 13:40:02', '2016-10-09 13:25:18', '2016-10-09 13:40:02'),
(12, 1, '2016-10-09 13:40:09', '2016-10-09 13:40:26', '2016-10-09 13:40:09', '2016-10-09 13:40:26'),
(13, 1, '2016-10-09 13:40:31', '2016-10-09 13:41:44', '2016-10-09 13:40:31', '2016-10-09 13:41:44'),
(14, 1, '2016-10-09 13:42:15', '2016-10-09 13:42:26', '2016-10-09 13:42:15', '2016-10-09 13:42:26'),
(15, 1, '2016-10-09 13:44:15', '2016-10-09 13:44:33', '2016-10-09 13:44:15', '2016-10-09 13:44:33'),
(16, 1, '2016-10-09 13:44:42', '2016-10-09 13:44:51', '2016-10-09 13:44:42', '2016-10-09 13:44:51'),
(17, 1, '2016-10-09 13:44:57', '2016-10-09 13:45:16', '2016-10-09 13:44:57', '2016-10-09 13:45:16'),
(18, 1, '2016-10-09 13:45:26', '2016-10-09 13:46:06', '2016-10-09 13:45:26', '2016-10-09 13:46:06'),
(19, 1, '2016-10-09 13:46:19', '2016-10-09 13:49:19', '2016-10-09 13:46:19', '2016-10-09 13:49:19'),
(20, 1, '2016-10-09 13:49:26', '2016-10-09 13:51:22', '2016-10-09 13:49:26', '2016-10-09 13:51:22'),
(21, 1, '2016-10-09 13:51:27', '2016-10-09 13:52:02', '2016-10-09 13:51:27', '2016-10-09 13:52:02'),
(22, 1, '2016-10-09 13:52:30', '2016-10-09 13:53:14', '2016-10-09 13:52:30', '2016-10-09 13:53:14'),
(23, 1, '2016-10-09 13:54:06', '2016-10-09 14:32:05', '2016-10-09 13:54:06', '2016-10-09 14:32:05'),
(24, 1, '2016-10-09 14:33:03', '0000-00-00 00:00:00', '2016-10-09 14:33:03', '2016-10-09 14:33:03'),
(25, 1, '2016-10-10 04:25:08', '2016-10-10 04:25:41', '2016-10-10 04:25:08', '2016-10-10 04:25:41'),
(26, 1, '2016-10-10 04:25:51', '0000-00-00 00:00:00', '2016-10-10 04:25:51', '2016-10-10 04:25:51'),
(27, 1, '2016-10-10 05:28:34', '2016-10-10 07:49:04', '2016-10-10 05:28:34', '2016-10-10 07:49:04'),
(28, 1, '2016-10-10 07:49:55', '2016-10-10 07:50:35', '2016-10-10 07:49:55', '2016-10-10 07:50:35'),
(29, 1, '2016-10-10 07:50:41', '2016-10-10 07:51:35', '2016-10-10 07:50:41', '2016-10-10 07:51:35'),
(30, 1, '2016-10-10 07:54:17', '2016-10-10 07:54:20', '2016-10-10 07:54:17', '2016-10-10 07:54:20'),
(31, 1, '2016-10-10 08:54:36', '2016-10-10 09:02:19', '2016-10-10 08:54:36', '2016-10-10 09:02:19'),
(32, 1, '2016-10-10 09:03:29', '2016-10-10 09:06:02', '2016-10-10 09:03:29', '2016-10-10 09:06:02'),
(33, 1, '2016-10-10 09:11:11', '2016-10-10 09:19:27', '2016-10-10 09:11:11', '2016-10-10 09:19:27');

-- --------------------------------------------------------

--
-- Table structure for table `possible_solns`
--

CREATE TABLE `possible_solns` (
  `id` int(11) NOT NULL,
  `solution_name` varchar(100) NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `possible_solns`
--

INSERT INTO `possible_solns` (`id`, `solution_name`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Very Good', 1, '2016-10-09 14:51:56', '2016-10-09 14:51:56'),
(2, 'Not that Much', 1, '2016-10-09 14:53:35', '2016-10-09 14:53:35');

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `id` int(11) NOT NULL,
  `body` text NOT NULL,
  `published` int(11) NOT NULL,
  `isRequired` int(11) NOT NULL,
  `rateValues` int(11) NOT NULL,
  `ratename` varchar(100) NOT NULL,
  `maximumRateDescription` varchar(100) NOT NULL,
  `manimumRateDescription` varchar(100) NOT NULL,
  `json_format` text NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`id`, `body`, `published`, `isRequired`, `rateValues`, `ratename`, `maximumRateDescription`, `manimumRateDescription`, `json_format`, `created_at`, `updated_at`) VALUES
(2, 'Do you understand the strategic goals of the broader organization?', 1, 1, 5, 'Satisfaction', 'NO', 'YES', 'a:1:{s:9:"questions";a:5:{s:4:"type";s:6:"rating";s:22:"maximumRateDescription";s:2:"NO";s:22:"mininumRateDescription";s:3:"YES";s:4:"name";s:12:"Satisfaction";s:5:"title";s:66:"Do you understand the strategic goals of the broader organization?";}}', '2016-10-10 09:03:53', '2016-10-10 09:03:53'),
(3, 'Do you know what you should do to help the company meet its goals and objectives?', 1, 1, 5, 'Satisfaction', 'Completely satisfied', 'Not Satisfied', 'a:1:{s:9:"questions";a:5:{s:4:"type";s:6:"rating";s:22:"maximumRateDescription";s:20:"Completely satisfied";s:22:"mininumRateDescription";s:13:"Not Satisfied";s:4:"name";s:12:"Satisfaction";s:5:"title";s:81:"Do you know what you should do to help the company meet its goals and objectives?";}}', '2016-10-10 09:04:37', '2016-10-10 09:04:37'),
(4, 'Can you see a clear link between your work and the company’s goals and objectives?', 1, 1, 5, 'Satisfaction', 'Completely satisfied', 'Not Satisfied', 'a:1:{s:9:"questions";a:5:{s:4:"type";s:6:"rating";s:22:"maximumRateDescription";s:20:"Completely satisfied";s:22:"mininumRateDescription";s:13:"Not Satisfied";s:4:"name";s:12:"Satisfaction";s:5:"title";s:84:"Can you see a clear link between your work and the company’s goals and objectives?";}}', '2016-10-10 09:04:51', '2016-10-10 09:04:51'),
(5, 'Are you proud to be a member of your team?', 1, 1, 5, 'Satisfaction', 'Completely satisfied', 'Not Satisfied', 'a:1:{s:9:"questions";a:5:{s:4:"type";s:6:"rating";s:22:"maximumRateDescription";s:20:"Completely satisfied";s:22:"mininumRateDescription";s:13:"Not Satisfied";s:4:"name";s:12:"Satisfaction";s:5:"title";s:42:"Are you proud to be a member of your team?";}}', '2016-10-10 09:05:01', '2016-10-10 09:05:01'),
(6, 'Does your team inspire you to do your best work?', 1, 1, 5, 'Satisfaction', 'Completely satisfied', 'Not Satisfied', 'a:1:{s:9:"questions";a:5:{s:4:"type";s:6:"rating";s:22:"maximumRateDescription";s:20:"Completely satisfied";s:22:"mininumRateDescription";s:13:"Not Satisfied";s:4:"name";s:12:"Satisfaction";s:5:"title";s:48:"Does your team inspire you to do your best work?";}}', '2016-10-10 09:05:12', '2016-10-10 09:05:12'),
(7, 'Does your team help you to complete your work?', 1, 1, 5, 'Satisfaction', 'Completely satisfied', 'Not Satisfied', 'a:1:{s:9:"questions";a:5:{s:4:"type";s:6:"rating";s:22:"maximumRateDescription";s:20:"Completely satisfied";s:22:"mininumRateDescription";s:13:"Not Satisfied";s:4:"name";s:12:"Satisfaction";s:5:"title";s:46:"Does your team help you to complete your work?";}}', '2016-10-10 09:05:21', '2016-10-10 09:05:21'),
(8, 'Do you have the appropriate amount of information to make correct decisions about your work?', 1, 1, 5, 'Satisfaction', 'Completely satisfied', 'Not Satisfied', 'a:1:{s:9:"questions";a:5:{s:4:"type";s:6:"rating";s:22:"maximumRateDescription";s:20:"Completely satisfied";s:22:"mininumRateDescription";s:13:"Not Satisfied";s:4:"name";s:12:"Satisfaction";s:5:"title";s:92:"Do you have the appropriate amount of information to make correct decisions about your work?";}}', '2016-10-10 09:05:29', '2016-10-10 09:05:29'),
(9, 'Do you have a good understanding of informal structures and processes at the organization?', 1, 1, 5, 'Satisfaction', 'Completely satisfied', 'Not Satisfied', 'a:1:{s:9:"questions";a:5:{s:4:"type";s:6:"rating";s:22:"maximumRateDescription";s:20:"Completely satisfied";s:22:"mininumRateDescription";s:13:"Not Satisfied";s:4:"name";s:12:"Satisfaction";s:5:"title";s:90:"Do you have a good understanding of informal structures and processes at the organization?";}}', '2016-10-10 09:05:37', '2016-10-10 09:05:37'),
(10, 'When something unexpected comes up in your work, do you usually know who to ask for help?', 1, 1, 5, 'Satisfaction', 'Completely satisfied', 'Not Satisfied', 'a:1:{s:9:"questions";a:5:{s:4:"type";s:6:"rating";s:22:"maximumRateDescription";s:20:"Completely satisfied";s:22:"mininumRateDescription";s:13:"Not Satisfied";s:4:"name";s:12:"Satisfaction";s:5:"title";s:89:"When something unexpected comes up in your work, do you usually know who to ask for help?";}}', '2016-10-10 09:05:46', '2016-10-10 09:05:46');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(11) NOT NULL,
  `role_name` varchar(100) NOT NULL,
  `status` int(11) NOT NULL,
  `system` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `role_name`, `status`, `system`, `created_at`, `updated_at`) VALUES
(1, 'Administrator', 1, 1, '2016-10-09 10:25:52', '2016-10-09 10:25:52'),
(2, 'Author', 1, 0, '2016-10-09 15:09:41', '2016-10-09 15:09:41'),
(3, 'Staff', 1, 0, '2016-10-09 15:15:09', '2016-10-09 15:15:09');

-- --------------------------------------------------------

--
-- Table structure for table `subdepartments`
--

CREATE TABLE `subdepartments` (
  `id` int(11) NOT NULL,
  `dept_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subdepartments`
--

INSERT INTO `subdepartments` (`id`, `dept_id`, `name`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, 'IP ', 1, '2016-10-09 14:26:35', '2016-10-09 14:26:35');

-- --------------------------------------------------------

--
-- Table structure for table `system_settings`
--

CREATE TABLE `system_settings` (
  `id` int(11) NOT NULL,
  `logo` varchar(100) NOT NULL,
  `powerby` varchar(100) NOT NULL,
  `app_name` varchar(100) NOT NULL,
  `editor` varchar(100) NOT NULL,
  `footer_title` varchar(100) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `system_settings`
--

INSERT INTO `system_settings` (`id`, `logo`, `powerby`, `app_name`, `editor`, `footer_title`, `created_at`, `updated_at`) VALUES
(1, 'http://localhost/SoftnetFeedbackSystem/public/uploads/companylogos/kjha7wahd8.png', 'Softnet Technologies', 'Feedback System', 'basic', 'Softnet Technologies | Feedback System', '2016-10-09 11:13:28', '2016-10-10 08:55:33');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `remember_token` varchar(100) NOT NULL,
  `role_id` int(11) NOT NULL,
  `active` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `remember_token`, `role_id`, `active`, `created_at`, `updated_at`) VALUES
(1, 'admin', '$2y$10$hI8eIzCJo8FyN9N9dQ1bc.y.S7SEiwXViEIlzDaJv9x6s4IM8GIVq', 'xBuVTdEQeMBhNKFTbmUuWJHNgnsvFaOrfqhmJHHLXiBOBUuly17HPOMdKna4', 1, 1, '2016-09-29 06:20:40', '2016-10-10 09:19:27'),
(2, 'admin2', '$2y$10$gfgkqgNCy2yM3M49NTlRw.7HxeX1Fw2Z6PTm1ALI/nPh7F.cjrfL6', '', 1, 1, '2016-10-09 11:37:09', '2016-10-09 11:37:09');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `departments`
--
ALTER TABLE `departments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feedbacks`
--
ALTER TABLE `feedbacks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login_history`
--
ALTER TABLE `login_history`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `possible_solns`
--
ALTER TABLE `possible_solns`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subdepartments`
--
ALTER TABLE `subdepartments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `system_settings`
--
ALTER TABLE `system_settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `departments`
--
ALTER TABLE `departments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `feedbacks`
--
ALTER TABLE `feedbacks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `login_history`
--
ALTER TABLE `login_history`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
--
-- AUTO_INCREMENT for table `possible_solns`
--
ALTER TABLE `possible_solns`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `subdepartments`
--
ALTER TABLE `subdepartments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `system_settings`
--
ALTER TABLE `system_settings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
