-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 27, 2018 at 05:12 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 7.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laravel`
--

-- --------------------------------------------------------

--
-- Table structure for table `admission`
--

CREATE TABLE `admission` (
  `id` int(10) UNSIGNED NOT NULL,
  `sname` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `sbname` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `class` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `year` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `fname` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `mname` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `foccupation` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `moccupation` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `income` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `gnid` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `dob` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `blood` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `religion` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `gname` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `preschool` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '0',
  `preaddress` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `peraddress` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `quotas` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admission`
--

INSERT INTO `admission` (`id`, `sname`, `sbname`, `class`, `year`, `fname`, `mname`, `foccupation`, `moccupation`, `income`, `gnid`, `gender`, `dob`, `blood`, `religion`, `phone`, `gname`, `preschool`, `status`, `preaddress`, `peraddress`, `image`, `quotas`, `created_at`, `updated_at`) VALUES
(5, 'Mahadeb Kumar Das', '.মহাদেব কুমার দাস', 'nine', '2016', 'Nittya Das', 'Aroti Rani Das', 'Farmer', 'House-wife', '50000', '1960147851785', 'male', '1998-02-01', 'B+', 'Hindu', '01758120057', 'n', 'school', 1, 'Faridpur', 'Faridpur', '826130418122426.png', 'nai', '2018-04-13 06:24:26', '2018-04-13 06:24:26'),
(6, 'Mahadeb Kumar Das', 'মহাদেব কুমার দাস', 'nine', '2018', 'Nittya Das', 'Aroti Rani Das', 'Farmer', 'House-wife', '50000', '4482648', 'Male', '2018-04-03', 'B+', 'Hindu', '01875631854', 'hy', 'school', 1, 'fhrtyh', 'tyu6tu', '586160418024848.png', 'tyu6tuj', '2018-04-16 08:48:48', '2018-04-16 08:48:48'),
(7, 'Mahadeb Kumar Das', 'মহাদেব কুমার দাস', 'nine', '2018', 'Nittya Das', 'Aroti Rani Das', 'Farmer', 'House-wife', '50000', '4482648', 'Male', '2018-04-03', 'B+', 'Hindu', '01875631854', 'hy', 'school', 1, 'fhrtyh', 'tyu6tu', '201160418024929.png', 'tyu6tuj', '2018-04-16 08:49:29', '2018-04-16 08:49:29'),
(8, 'Mahadeb Kumar Das', 'মহাদেব কুমার দাস', 'nine', '2018', 'Nittya Das', 'Aroti Rani Das', 'Farmer', 'House-wife', '50000', '4482648', 'Male', '2018-04-03', 'B+', 'Hindu', '01875631854', 'hy', 'school', 1, 'fhrtyh', 'tyu6tu', '837160418025010.png', 'tyu6tuj', '2018-04-16 08:50:10', '2018-04-16 08:50:10'),
(9, 'Mahadeb Kumar Das', 'মহাদেব কুমার দাস', 'nine', '2018', 'Nittya Das', 'Aroti Rani Das', 'Farmer', 'House-wife', '50000', '4482648', 'Male', '2018-04-03', 'B+', 'Hindu', '01837831697', 'hy', 'school', 1, 'fhrtyh', 'tyu6tu', '373160418025133.png', 'tyu6tuj', '2018-04-16 08:51:33', '2018-04-16 08:51:33'),
(10, 'Mahadeb Kumar Das', 'মহাদেব কুমার দাস', 'nine', '2018', 'Nittya Das', 'Aroti Rani Das', 'Farmer', 'House-wife', '50000', '4482648', 'Male', '2018-04-03', 'B+', 'Hindu', '01837831697', 'hy', 'school', 1, 'fhrtyh', 'tyu6tu', '142160418025156.png', 'tyu6tuj', '2018-04-16 08:51:56', '2018-04-16 08:51:56'),
(11, 'Akash Das', 'আকাশ দাস', 'null', '2016', 'bb', 'cc', 'Farmer', 'House-wife', '50000', '124578965745644', 'Male', '2018-04-16', 'B+', 'Hindu', '01785647854', 'nn', 'school', 0, 'faridpur', 'faridpur', '833260418122945.PNG', 'nai', '2018-04-26 06:29:45', '2018-04-26 06:29:45');

-- --------------------------------------------------------

--
-- Table structure for table `attendenc`
--

CREATE TABLE `attendenc` (
  `id` int(10) UNSIGNED NOT NULL,
  `sid` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `roll` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `class` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `section` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `in_time` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `out_time` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `attendenc`
--

INSERT INTO `attendenc` (`id`, `sid`, `roll`, `class`, `section`, `date`, `in_time`, `out_time`, `status`, `created_at`, `updated_at`) VALUES
(1, '101', '836514', 'Ten', 'A', '2018-04-27', '10', '04', '1', '2018-04-13 10:03:36', '2018-04-13 10:03:36'),
(2, '101', '836514', 'Ten', 'A', '2018-04-16', '10', '04', '1', '2018-04-13 10:41:54', '2018-04-13 10:41:54'),
(3, '101', '836514', 'Ten', 'A', '2018-04-16', '10', '04', '1', '2018-04-13 10:43:22', '2018-04-13 10:43:22'),
(4, '102', '836514', 'Ten', 'A', '2018-04-16', '10', '04', '1', '2018-04-13 10:43:30', '2018-04-13 10:43:30'),
(5, '106', '836514', 'Six', 'A', '2018-04-23', '10', '04', '1', '2018-04-13 21:33:30', '2018-04-13 21:33:30'),
(6, '105', '05', 'Six', 'B', '2018-04-18', '10:00', '16:00', '1', '2018-04-17 09:52:55', '2018-04-17 09:52:55');

-- --------------------------------------------------------

--
-- Table structure for table `class`
--

CREATE TABLE `class` (
  `id` int(10) UNSIGNED NOT NULL,
  `class` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `section` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `class`
--

INSERT INTO `class` (`id`, `class`, `section`, `created_at`, `updated_at`) VALUES
(1, 'Seven', 'C', '2018-04-16 08:44:30', '2018-04-16 08:44:30'),
(2, 'Seven', 'C', '2018-04-16 08:45:32', '2018-04-16 08:45:32'),
(3, 'Eight', 'D', '2018-04-16 08:45:48', '2018-04-16 08:45:48'),
(4, 'Eight', 'k', '2018-04-16 11:31:09', '2018-04-16 11:31:09'),
(5, 'Eight', 'k', '2018-04-16 11:31:28', '2018-04-16 11:31:28');

-- --------------------------------------------------------

--
-- Table structure for table `exam`
--

CREATE TABLE `exam` (
  `id` int(10) UNSIGNED NOT NULL,
  `exam_id` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `held_on` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `year` year(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `exam`
--

INSERT INTO `exam` (`id`, `exam_id`, `held_on`, `year`, `created_at`, `updated_at`) VALUES
(2, 'mid', '01-04-2017', 2017, '2018-04-13 21:39:48', '2018-04-16 01:14:25'),
(3, 'final', '05-06-2017', 2017, '2018-04-13 21:40:22', '2018-04-16 01:15:19'),
(4, 'hello', 'hi', 2014, '2018-04-13 21:40:31', '2018-04-13 21:40:31'),
(5, 'hey', 'hh', 2016, '2018-04-13 21:44:23', '2018-04-16 10:42:38');

-- --------------------------------------------------------

--
-- Table structure for table `info`
--

CREATE TABLE `info` (
  `id` int(10) UNSIGNED NOT NULL,
  `sname` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `age` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` text COLLATE utf8mb4_unicode_ci,
  `image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `info`
--

INSERT INTO `info` (`id`, `sname`, `age`, `phone`, `gender`, `image`, `created_at`, `updated_at`) VALUES
(4, 'hridoy', '50', '556', 'Female', '', '2018-03-31 11:06:41', '2018-04-03 22:58:31'),
(6, 'Mahadeb Kumar Das', '19', '01837831697', 'Male', '', '2018-04-01 10:10:15', '2018-04-03 22:58:41'),
(7, 'Mahadeb Kumar Da', '20', '018658547', 'Male', '323040418034946.png', '2018-04-03 21:49:46', '2018-04-03 22:58:47'),
(8, 'Das', '18', '198595', NULL, '533040418050241.png', '2018-04-03 23:02:41', '2018-04-03 23:02:41'),
(9, 'Mahadeb Kumar', '18', '058', NULL, '849040418015018.png', '2018-04-04 07:50:18', '2018-04-04 07:50:18'),
(10, 'abid', '18', '57', NULL, '717040418015040.png', '2018-04-04 07:50:40', '2018-04-04 07:50:40');

-- --------------------------------------------------------

--
-- Table structure for table `mark`
--

CREATE TABLE `mark` (
  `id` int(10) UNSIGNED NOT NULL,
  `sub_code` int(11) NOT NULL,
  `sub_name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `sid` int(11) NOT NULL,
  `mark` int(11) NOT NULL,
  `examid` int(11) NOT NULL,
  `year` year(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `mark`
--

INSERT INTO `mark` (`id`, `sub_code`, `sub_name`, `sid`, `mark`, `examid`, `year`, `created_at`, `updated_at`) VALUES
(97, 110, '', 2018605, 80, 2, 2020, NULL, NULL),
(98, 1, '', 2018605, 80, 2, 2020, NULL, NULL),
(99, 102, '', 2018605, 80, 2, 2020, '2018-04-27 12:16:46', NULL),
(100, 110, '', 2018605, 80, 2, 2020, '2018-04-27 12:16:51', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2018_03_28_151840_create_info_models_table', 1),
(8, '2018_04_08_164730_create_registration_models_table', 2),
(9, '2018_04_09_083912_create_subject_models_table', 3),
(11, '2018_04_09_155856_create_admission_models_table', 4),
(12, '2018_04_10_183013_create_teacher_models_table', 5),
(13, '2018_04_13_130052_create_mark_models_table', 6),
(14, '2018_04_13_155656_create_attendenc_models_table', 7),
(15, '2018_04_13_190251_create_exam_models_table', 8),
(16, '2018_04_16_135705_create_class_models_table', 9);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `id` int(10) UNSIGNED NOT NULL,
  `sname` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `sbname` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `sid` int(11) NOT NULL,
  `roll` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `reg` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `class` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `section` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `session` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `fname` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `mname` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `gnid` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `dob` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `blood` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `religion` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `gname` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`id`, `sname`, `sbname`, `sid`, `roll`, `reg`, `class`, `section`, `session`, `fname`, `mname`, `gnid`, `gender`, `dob`, `blood`, `religion`, `phone`, `gname`, `address`, `image`, `created_at`, `updated_at`) VALUES
(22, 'Mahadeb Kumar Das', 'মহাদেব কুমার দাস', 2018601, '01', '742998', 'six', 'A', '2018-19', 'Nittya Das', 'Aroti Rani Das', '152788585872571575', 'male', '1998-02-01', 'B+', 'Hindu', '1758120057', 'Nittya', 'Faridpur', '441170418034423.png', '2018-04-17 09:44:23', '2018-04-17 09:44:23'),
(23, 'Mahadeb Kumar Das', 'মহাদেব কুমার দাস', 2018605, '05', '742993', 'six', 'A', '2018-19', 'Nittya Das', 'Aroti Rani Das', '15278858587257', 'male', '1998-02-01', 'null', 'Hindu', '01837831688', 'Nittya', 'Faridpur', '928180418055511.png', '2018-04-17 23:55:11', '2018-04-17 23:55:11'),
(29, 'Akash Das', 'আকাশ দাস', 20180601, '01', '100', 'nine', 'B', '2018-19', 'bb', 'cc', '1960147851785', 'male', '2018-04-16', 'B+', 'Hindu', '01785455412', 'jj', 'faridpur', '351260418123154.PNG', '2018-04-26 06:31:54', '2018-04-26 06:31:54');

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

CREATE TABLE `subject` (
  `id` int(10) UNSIGNED NOT NULL,
  `sub_code` int(11) NOT NULL,
  `sub_name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `fmark` int(11) NOT NULL,
  `class` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `tid` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `subject`
--

INSERT INTO `subject` (`id`, `sub_code`, `sub_name`, `fmark`, `class`, `tid`, `created_at`, `updated_at`) VALUES
(4, 102, 'English', 100, 'Seven', 100, '2018-04-11 11:47:20', '2018-04-11 11:47:20'),
(5, 110, 'math', 100, 'Ten', 105, '2018-04-11 11:50:20', '2018-04-11 11:50:20'),
(6, 110, 'Bangla', 100, 'Six', 105, '2018-04-11 11:50:47', '2018-04-21 09:24:57'),
(7, 1, 'Chemistri', 100, 'Six', 123, '2018-04-13 06:29:45', '2018-04-21 09:24:50'),
(8, 102, 'math', 100, 'Six', 155, '2018-04-21 09:24:40', '2018-04-21 09:24:40'),
(9, 110, 'Banglak', 100, 'Six', 155, '2018-04-21 10:18:30', '2018-04-21 10:18:30'),
(10, 102, 'Bangla', 100, 'Nine', 155, '2018-04-26 06:33:19', '2018-04-26 06:33:19'),
(11, 103, 'English', 100, 'Nine', 105, '2018-04-26 06:33:50', '2018-04-26 06:33:50');

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

CREATE TABLE `teacher` (
  `id` int(10) UNSIGNED NOT NULL,
  `tid` int(11) NOT NULL,
  `tname` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `tnid` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `dob` date NOT NULL,
  `gender` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `blood` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `religion` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `teacher`
--

INSERT INTO `teacher` (`id`, `tid`, `tname`, `tnid`, `dob`, `gender`, `blood`, `religion`, `phone`, `email`, `address`, `image`, `created_at`, `updated_at`) VALUES
(6, 105, 'fghhhhhhhhfff', '145522', '2018-04-11', 'female', 'O+', 'tr', '27528', 'h@gmail.com', 'hfhtyuh', '362140418034403.png', '2018-04-11 11:49:53', '2018-04-14 09:44:03'),
(7, 155, 'Mahadeb Das', '41856555', '2018-04-19', 'male', 'B+', 'Hert', '7458', 'admin@gmail.com', 'ftrtrtyr', '259140418034454.png', '2018-04-14 09:44:54', '2018-04-14 09:44:54');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin@gmail.com', '$2y$10$TLh/rN8pKcYnt6ZERrVUMOEtlaoVvVC6H0IjeiwTrBSmvCHZKT6OG', 'RFFxXoAtw0NkARPI9xhZuD3zAgjJhZFntxsRXd7kbyDOTnbGw3b5A6zpXdg4', '2018-04-01 11:08:58', '2018-04-01 11:08:58');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admission`
--
ALTER TABLE `admission`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `attendenc`
--
ALTER TABLE `attendenc`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `class`
--
ALTER TABLE `class`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `exam`
--
ALTER TABLE `exam`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `info`
--
ALTER TABLE `info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mark`
--
ALTER TABLE `mark`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subject`
--
ALTER TABLE `subject`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teacher`
--
ALTER TABLE `teacher`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admission`
--
ALTER TABLE `admission`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `attendenc`
--
ALTER TABLE `attendenc`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `class`
--
ALTER TABLE `class`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `exam`
--
ALTER TABLE `exam`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `info`
--
ALTER TABLE `info`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `mark`
--
ALTER TABLE `mark`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=125;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
--
-- AUTO_INCREMENT for table `subject`
--
ALTER TABLE `subject`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `teacher`
--
ALTER TABLE `teacher`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
