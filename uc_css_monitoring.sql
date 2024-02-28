-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 28, 2024 at 04:47 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";

START TRANSACTION;

SET time_zone = "+00:00";

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */
;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */
;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */
;
/*!40101 SET NAMES utf8mb4 */
;

--
-- Database: `uc_css_monitoring`
--

-- --------------------------------------------------------

--
-- Table structure for table `labs`
--

CREATE TABLE `labs` (
    `id` int(80) NOT NULL, `room_number` int(80) NOT NULL, `room_name` varchar(80) NOT NULL, `active` int(11) NOT NULL DEFAULT 1, `created_at` datetime NOT NULL DEFAULT current_timestamp(), `updated_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4 COLLATE = utf8mb4_general_ci;

--
-- Dumping data for table `labs`
--

INSERT INTO
    `labs` (
        `id`, `room_number`, `room_name`, `active`, `created_at`, `updated_at`
    )
VALUES (
        1, 524, 'Main Laboratory', 1, '2024-02-28 16:47:41', '2024-02-28 16:47:41'
    ),
    (
        2, 0, 'wewewewewew', 1, '2024-02-28 20:59:10', '2024-02-28 20:59:10'
    ),
    (
        3, 0, 'sadasd', 1, '2024-02-28 20:59:31', '2024-02-28 20:59:31'
    ),
    (
        4, 0, '23232', 1, '2024-02-28 20:59:49', '2024-02-28 20:59:49'
    ),
    (
        5, 0, '23232323232', 1, '2024-02-28 20:59:53', '2024-02-28 20:59:53'
    ),
    (
        6, 0, 'dasdsadsa', 1, '2024-02-28 20:59:58', '2024-02-28 20:59:58'
    ),
    (
        7, 0, 'olok', 1, '2024-02-28 21:00:07', '2024-02-28 21:00:07'
    ),
    (
        8, 524, 'wew', 1, '2024-02-28 21:03:05', '2024-02-28 21:03:05'
    ),
    (
        9, 524, 'wew2', 1, '2024-02-28 21:03:39', '2024-02-28 21:03:39'
    ),
    (
        10, 525, 'test', 1, '2024-02-28 21:04:11', '2024-02-28 21:04:11'
    ),
    (
        11, 525, 'test2', 1, '2024-02-28 21:04:20', '2024-02-28 21:04:20'
    );

-- --------------------------------------------------------

--
-- Table structure for table `schedules`
--

CREATE TABLE `schedules` (
    `id` int(11) NOT NULL, `day` varchar(80) NOT NULL, `start_time` time NOT NULL, `end_time` time NOT NULL, `created_at` datetime NOT NULL DEFAULT current_timestamp(), `updated_at` datetime DEFAULT current_timestamp()
) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4 COLLATE = utf8mb4_general_ci;

--
-- Dumping data for table `schedules`
--

INSERT INTO
    `schedules` (
        `id`, `day`, `start_time`, `end_time`, `created_at`, `updated_at`
    )
VALUES (
        15, 'MONDAY', '07:30:00', '08:30:00', '2024-02-28 23:33:29', '2024-02-28 23:33:29'
    ),
    (
        16, 'TUESDAY', '07:30:00', '08:30:00', '2024-02-28 23:33:29', '2024-02-28 23:33:29'
    ),
    (
        17, 'WEDNESDAY', '07:30:00', '08:30:00', '2024-02-28 23:33:29', '2024-02-28 23:33:29'
    ),
    (
        18, 'MONDAY', '02:30:00', '01:30:00', '2024-02-28 23:35:06', '2024-02-28 23:35:06'
    ),
    (
        19, 'TUESDAY', '02:30:00', '01:30:00', '2024-02-28 23:35:06', '2024-02-28 23:35:06'
    ),
    (
        20, 'WEDNESDAY', '02:30:00', '01:30:00', '2024-02-28 23:35:06', '2024-02-28 23:35:06'
    );

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
    `id` int(80) NOT NULL, `email` varchar(255) NOT NULL, `password` varchar(255) NOT NULL, `first_name` varchar(255) NOT NULL, `last_name` varchar(255) NOT NULL, `id_no` int(255) NOT NULL, `course` varchar(255) NOT NULL, `year` varchar(80) NOT NULL, `no_sessions` int(11) NOT NULL DEFAULT 30, `active` int(60) NOT NULL DEFAULT 1, `created_at` datetime NOT NULL DEFAULT current_timestamp(), `updated_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4 COLLATE = utf8mb4_general_ci;

--
-- Dumping data for table `students`
--

INSERT INTO
    `students` (
        `id`, `email`, `password`, `first_name`, `last_name`, `id_no`, `course`, `year`, `no_sessions`, `active`, `created_at`, `updated_at`
    )
VALUES (
        18, 'allanvillegas35@gmail.com', '3c9909afec25354d551dae21590bb26e38d53f2173b8d3dc3eee4c047e7ab1c1eb8b85103e3be7ba613b31bb5c9c36214dc9f14a42fd7a2fdb84856bca5c44c2', 'Allan', '3123123', 213123, '3123213', '12312', 30, 1, '2024-02-19 22:26:24', '2024-02-19 22:26:24'
    ),
    (
        19, 'allanvillegas35@gmail.com1', '3c9909afec25354d551dae21590bb26e38d53f2173b8d3dc3eee4c047e7ab1c1eb8b85103e3be7ba613b31bb5c9c36214dc9f14a42fd7a2fdb84856bca5c44c2', 'Allan', '3123123', 213123, '3123213', '12312', 30, 1, '2024-02-19 22:26:56', '2024-02-19 22:26:56'
    ),
    (
        20, 'allanvillegas699@gmail.com', '263fec58861449aacc1c328a4aff64aff4c62df4a2d50b3f207fa89b6e242c9aa778e7a8baeffef85b6ca6d2e7dc16ff0a760d59c13c238f6bcdc32f8ce9cc62', 'Allan', 'Villegas', 21419023, '1st', '1st', 30, 1, '2024-02-22 00:14:54', '2024-02-22 00:14:54'
    ),
    (
        21, 'xaenic@gmail.com', '263fec58861449aacc1c328a4aff64aff4c62df4a2d50b3f207fa89b6e242c9aa778e7a8baeffef85b6ca6d2e7dc16ff0a760d59c13c238f6bcdc32f8ce9cc62', 'Allan', 'Villegas', 213123, '1st', '1st', 30, 1, '2024-02-26 23:24:01', '2024-02-26 23:24:01'
    ),
    (
        22, 'allanvill2egas35@gmail.com', '7fcf4ba391c48784edde599889d6e3f1e47a27db36ecc050cc92f259bfac38afad2c68a1ae804d77075e8fb722503f3eca2b2c1006ee6f6c7b7628cb45fffd1d', 'Allan', 'Villegas', 213123, '1st', '1st', 30, 1, '2024-02-26 23:44:14', '2024-02-26 23:44:14'
    ),
    (
        23, 'choykoy4311@gmail.com', '263fec58861449aacc1c328a4aff64aff4c62df4a2d50b3f207fa89b6e242c9aa778e7a8baeffef85b6ca6d2e7dc16ff0a760d59c13c238f6bcdc32f8ce9cc62', 'Allan', 'Villegas', 21419023, '1st', '3rd', 30, 1, '2024-02-28 16:03:06', '2024-02-28 16:03:06'
    ),
    (
        24, 'asdasd@gmail.com', '263fec58861449aacc1c328a4aff64aff4c62df4a2d50b3f207fa89b6e242c9aa778e7a8baeffef85b6ca6d2e7dc16ff0a760d59c13c238f6bcdc32f8ce9cc62', 'Xaenuc', 'Xaenuc', 213213, '1st', '2nd', 30, 1, '2024-02-28 18:19:14', '2024-02-28 18:19:14'
    );

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
    `id` int(11) NOT NULL, `first_name` varchar(255) NOT NULL, `last_name` varchar(255) NOT NULL, `email` varchar(255) NOT NULL, `password` varchar(255) NOT NULL, `role` varchar(50) NOT NULL DEFAULT 'staff', `active` int(50) NOT NULL DEFAULT 1, `created_at` datetime NOT NULL DEFAULT current_timestamp(), `updated_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4 COLLATE = utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO
    `user` (
        `id`, `first_name`, `last_name`, `email`, `password`, `role`, `active`, `created_at`, `updated_at`
    )
VALUES (
        1, 'Admin', 'Admin', 'admin@gmail.com', '7fcf4ba391c48784edde599889d6e3f1e47a27db36ecc050cc92f259bfac38afad2c68a1ae804d77075e8fb722503f3eca2b2c1006ee6f6c7b7628cb45fffd1d', 'admin', 1, '2024-02-26 23:41:42', '2024-02-26 23:41:42'
    ),
    (
        2, 'Allan', 'Villegas', 'allan@gmail.com', '7fcf4ba391c48784edde599889d6e3f1e47a27db36ecc050cc92f259bfac38afad2c68a1ae804d77075e8fb722503f3eca2b2c1006ee6f6c7b7628cb45fffd1d', 'staff', 1, '2024-02-28 21:28:08', '2024-02-28 21:28:08'
    );

--
-- Indexes for dumped tables
--

--
-- Indexes for table `labs`
--
ALTER TABLE `labs` ADD PRIMARY KEY (`id`);

--
-- Indexes for table `schedules`
--
ALTER TABLE `schedules` ADD PRIMARY KEY (`id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students` ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user` ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `labs`
--
ALTER TABLE `labs`
MODIFY `id` int(80) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT = 12;

--
-- AUTO_INCREMENT for table `schedules`
--
ALTER TABLE `schedules`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT = 21;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
MODIFY `id` int(80) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT = 25;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT = 3;

COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */
;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */
;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */
;