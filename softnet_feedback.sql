-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 09, 2016 at 05:29 PM
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
(24, 1, '2016-10-09 14:33:03', '0000-00-00 00:00:00', '2016-10-09 14:33:03', '2016-10-09 14:33:03');

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
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
(1, 'http://localhost/SoftnetFeedbackSystem/public/uploads/companylogos/i7mobglmf9.png', 'Softnet Technologies', 'Feedback System', 'basic', 'Softnet Technologies | Feedback System', '2016-10-09 11:13:28', '2016-10-09 14:33:12');

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
(1, 'admin', '$2y$10$hI8eIzCJo8FyN9N9dQ1bc.y.S7SEiwXViEIlzDaJv9x6s4IM8GIVq', 'SZ3DbfCdZShYwZWWMRZKVzFGzT6kMbpn9LvC2sMaNQqhpVte7e6iHy7FsYL2', 1, 1, '2016-09-29 06:20:40', '2016-10-09 14:32:06'),
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
-- AUTO_INCREMENT for table `login_history`
--
ALTER TABLE `login_history`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT for table `possible_solns`
--
ALTER TABLE `possible_solns`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
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
