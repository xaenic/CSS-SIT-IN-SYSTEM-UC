-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 06, 2024 at 04:27 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `uc_css_monitoring`
--

-- --------------------------------------------------------

--
-- Table structure for table `announcement`
--

CREATE TABLE `announcement` (
  `id` int(11) NOT NULL,
  `title` varchar(254) NOT NULL,
  `content` varchar(254) NOT NULL,
  `status` int(11) NOT NULL,
  `visibility` varchar(254) NOT NULL,
  `date_created` datetime NOT NULL DEFAULT current_timestamp(),
  `date_updated` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `announcement`
--

INSERT INTO `announcement` (`id`, `title`, `content`, `status`, `visibility`, `date_created`, `date_updated`) VALUES
(3, 'test', '<p>test</p>', 1, 'Student', '2024-05-05 22:24:50', NULL),
(4, 'sadas', '<p>dadadada</p>', 1, 'All', '2024-05-05 22:26:19', NULL),
(5, 'asdasd', '<p>adadad</p>', 1, 'All', '2024-05-05 22:26:35', NULL),
(6, 'asda', '<p>dadad</p>', 1, 'All', '2024-05-05 22:26:58', NULL),
(7, 'adad', '<p>adada</p>', 1, 'All', '2024-05-05 22:27:07', NULL),
(8, 'Amaw man diay ka noh', '<p><i>BOGO</i></p><p><br></p><p><u>BOGO&nbsp;</u><br><br>KA</p>', 1, 'All', '2024-05-05 22:48:34', NULL),
(9, 'NO CLASS', '<p>Hello guys,</p><p>Please please allow each of your<b> group to participate</b> in the creation of File Maintenance UI as this is</p><p><code>your semi final requirement.&nbsp;</code></p><p><i>Thank you</i></p>', 1, 'Student', '2024-05-05 22:54:38', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `announcement_reader`
--

CREATE TABLE `announcement_reader` (
  `user_id` int(11) NOT NULL,
  `announcement_id` int(11) NOT NULL,
  `is_read` int(11) NOT NULL,
  `date_created` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `content` varchar(254) NOT NULL,
  `date_created` datetime NOT NULL DEFAULT current_timestamp(),
  `resolved` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `user_id`, `content`, `date_created`, `resolved`) VALUES
(1, 47, 'asdasda', '2024-05-06 22:08:57', 0),
(2, 47, 'asdasd', '2024-05-06 22:09:20', 0),
(3, 47, 'asdas', '2024-05-06 22:09:25', 0),
(4, 47, 'okay do', '2024-05-06 22:09:37', 0);

-- --------------------------------------------------------

--
-- Table structure for table `labs`
--

CREATE TABLE `labs` (
  `id` int(80) NOT NULL,
  `room_number` int(80) NOT NULL,
  `room_name` varchar(80) NOT NULL,
  `active` int(11) NOT NULL DEFAULT 1,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `labs`
--

INSERT INTO `labs` (`id`, `room_number`, `room_name`, `active`, `created_at`, `updated_at`) VALUES
(1, 524, 'Main Laboratory', 1, '2024-02-28 16:47:41', '2024-02-28 16:47:41'),
(2, 0, 'wewewewewew', 1, '2024-02-28 20:59:10', '2024-02-28 20:59:10'),
(3, 0, 'sadasd', 1, '2024-02-28 20:59:31', '2024-02-28 20:59:31'),
(4, 0, '23232', 1, '2024-02-28 20:59:49', '2024-02-28 20:59:49'),
(5, 0, '23232323232', 1, '2024-02-28 20:59:53', '2024-02-28 20:59:53'),
(6, 0, 'dasdsadsa', 1, '2024-02-28 20:59:58', '2024-02-28 20:59:58'),
(7, 0, 'olok', 1, '2024-02-28 21:00:07', '2024-02-28 21:00:07'),
(8, 524, 'wew', 1, '2024-02-28 21:03:05', '2024-02-28 21:03:05'),
(9, 524, 'wew2', 1, '2024-02-28 21:03:39', '2024-02-28 21:03:39'),
(10, 525, 'test', 1, '2024-02-28 21:04:11', '2024-02-28 21:04:11'),
(11, 525, 'test2', 1, '2024-02-28 21:04:20', '2024-02-28 21:04:20');

-- --------------------------------------------------------

--
-- Table structure for table `reset_token`
--

CREATE TABLE `reset_token` (
  `id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `date_created` datetime NOT NULL,
  `token` varchar(254) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `schedules`
--

CREATE TABLE `schedules` (
  `id` int(11) NOT NULL,
  `day` varchar(80) NOT NULL,
  `start_time` time NOT NULL,
  `end_time` time NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `schedules`
--

INSERT INTO `schedules` (`id`, `day`, `start_time`, `end_time`, `created_at`, `updated_at`) VALUES
(15, 'MONDAY', '07:30:00', '08:30:00', '2024-02-28 23:33:29', '2024-02-28 23:33:29'),
(16, 'TUESDAY', '07:30:00', '08:30:00', '2024-02-28 23:33:29', '2024-02-28 23:33:29'),
(17, 'WEDNESDAY', '07:30:00', '08:30:00', '2024-02-28 23:33:29', '2024-02-28 23:33:29'),
(18, 'MONDAY', '02:30:00', '01:30:00', '2024-02-28 23:35:06', '2024-02-28 23:35:06'),
(19, 'TUESDAY', '02:30:00', '01:30:00', '2024-02-28 23:35:06', '2024-02-28 23:35:06'),
(20, 'WEDNESDAY', '02:30:00', '01:30:00', '2024-02-28 23:35:06', '2024-02-28 23:35:06');

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `session_id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `lab_name` varchar(80) NOT NULL,
  `purpose` varchar(254) NOT NULL,
  `time_in` datetime NOT NULL DEFAULT current_timestamp(),
  `time_out` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`session_id`, `student_id`, `lab_name`, `purpose`, `time_in`, `time_out`) VALUES
(19, 47, 'Lab 524', 'Java', '2024-05-06 17:57:21', '2024-05-06 17:57:22'),
(20, 47, 'Lab 528', 'C++', '2024-05-06 17:57:32', '2024-05-06 17:57:32');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` int(80) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `id_no` int(255) NOT NULL,
  `course` varchar(255) NOT NULL,
  `year` varchar(80) NOT NULL,
  `no_sessions` int(11) NOT NULL DEFAULT 30,
  `active` int(60) NOT NULL DEFAULT 0,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `email`, `password`, `first_name`, `last_name`, `id_no`, `course`, `year`, `no_sessions`, `active`, `created_at`, `updated_at`) VALUES
(47, 'allanvillegas35@gmail.com', '263fec58861449aacc1c328a4aff64aff4c62df4a2d50b3f207fa89b6e242c9aa778e7a8baeffef85b6ca6d2e7dc16ff0a760d59c13c238f6bcdc32f8ce9cc62', 'Allan', 'Villegas', 21419023, '1st', '3rd', 28, 1, '2024-05-03 18:17:20', '2024-05-03 18:17:20');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(50) NOT NULL DEFAULT 'staff',
  `active` int(50) NOT NULL DEFAULT 1,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `first_name`, `last_name`, `email`, `password`, `role`, `active`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'Admin', 'admin@gmail.com', '7fcf4ba391c48784edde599889d6e3f1e47a27db36ecc050cc92f259bfac38afad2c68a1ae804d77075e8fb722503f3eca2b2c1006ee6f6c7b7628cb45fffd1d', 'admin', 1, '2024-02-26 23:41:42', '2024-02-26 23:41:42'),
(2, 'Allan', 'Villegas', 'allan@gmail.com', '7fcf4ba391c48784edde599889d6e3f1e47a27db36ecc050cc92f259bfac38afad2c68a1ae804d77075e8fb722503f3eca2b2c1006ee6f6c7b7628cb45fffd1d', 'staff', 1, '2024-02-28 21:28:08', '2024-02-28 21:28:08');

-- --------------------------------------------------------

--
-- Table structure for table `verify_token`
--

CREATE TABLE `verify_token` (
  `id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `token` varchar(254) NOT NULL,
  `date_created` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `announcement`
--
ALTER TABLE `announcement`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `announcement_reader`
--
ALTER TABLE `announcement_reader`
  ADD KEY `user_id_announce` (`user_id`),
  ADD KEY `announcement_id_announce` (`announcement_id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id_feedback` (`user_id`);

--
-- Indexes for table `labs`
--
ALTER TABLE `labs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reset_token`
--
ALTER TABLE `reset_token`
  ADD PRIMARY KEY (`id`),
  ADD KEY `student_id_token` (`student_id`);

--
-- Indexes for table `schedules`
--
ALTER TABLE `schedules`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`session_id`),
  ADD KEY `fk_student_id` (`student_id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `verify_token`
--
ALTER TABLE `verify_token`
  ADD PRIMARY KEY (`id`),
  ADD KEY `student_id_verify` (`student_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `announcement`
--
ALTER TABLE `announcement`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `labs`
--
ALTER TABLE `labs`
  MODIFY `id` int(80) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `reset_token`
--
ALTER TABLE `reset_token`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `schedules`
--
ALTER TABLE `schedules`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `sessions`
--
ALTER TABLE `sessions`
  MODIFY `session_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(80) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `verify_token`
--
ALTER TABLE `verify_token`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `announcement_reader`
--
ALTER TABLE `announcement_reader`
  ADD CONSTRAINT `announcement_id_announce` FOREIGN KEY (`announcement_id`) REFERENCES `announcement` (`id`),
  ADD CONSTRAINT `user_id_announce` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`);

--
-- Constraints for table `feedback`
--
ALTER TABLE `feedback`
  ADD CONSTRAINT `user_id_feedback` FOREIGN KEY (`user_id`) REFERENCES `students` (`id`);

--
-- Constraints for table `reset_token`
--
ALTER TABLE `reset_token`
  ADD CONSTRAINT `student_id_token` FOREIGN KEY (`student_id`) REFERENCES `students` (`id`);

--
-- Constraints for table `sessions`
--
ALTER TABLE `sessions`
  ADD CONSTRAINT `fk_student_id` FOREIGN KEY (`student_id`) REFERENCES `students` (`id`);

--
-- Constraints for table `verify_token`
--
ALTER TABLE `verify_token`
  ADD CONSTRAINT `student_id_verify` FOREIGN KEY (`student_id`) REFERENCES `students` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
