-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 11, 2018 at 06:38 PM
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
  `status` text COLLATE utf8mb4_unicode_ci NOT NULL,
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
(4, 'Das', 'fdsfy', 'seven', '2014', 'uyty', 'uyy', 'uyiy', 'uyiy', '48578', '45785', 'male', '2018-04-04', 'B-', 'mjhkhy', '758', 'jhk', 'jhkhj', 'jhnt', 'ghjgh', 'ju', '173110418123357.png', 'hjkuyh', '2018-04-11 06:33:57', '2018-04-11 06:33:57');

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
(12, '2018_04_10_183013_create_teacher_models_table', 5);

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
(18, 'Mahadeb Kumar Das', 'fdsf', 7868, '836515', '742998', 'ten', 'A', '2014-15', 'rtger', 'fr', '123456', 'male', '2018-04-17', 'B+', 'hindu', '01837831697', 'ku', 'tugj', '498110418084019.png', '2018-04-11 02:40:19', '2018-04-11 02:40:19'),
(19, 'hello', 'jhkh', 42, '424', '242', 'six', 'A', 'hfhg', 'gjt', 'hjty', '578', 'male', '2018-04-09', 'B+', 'hg', '7578578', 'ghj', 'hfg', '238110418095321.png', '2018-04-11 03:53:21', '2018-04-11 03:53:21'),
(20, 'Mahadeb Kumar', 'tet', 55635, '35355655656', '55635', 'seven', 'A', '2014-15', 'l;''olkl;k', 'k;k;', '575', 'male', '2018-04-09', 'B-', 'jtyujt', '68768', 'yty', 'ujtyu', '328110418103229.png', '2018-04-11 04:32:29', '2018-04-11 04:32:29');

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

CREATE TABLE `subject` (
  `id` int(10) UNSIGNED NOT NULL,
  `subid` int(11) NOT NULL,
  `subname` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `fmark` int(11) NOT NULL,
  `class` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `tid` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `subject`
--

INSERT INTO `subject` (`id`, `subid`, `subname`, `fmark`, `class`, `tid`, `created_at`, `updated_at`) VALUES
(2, 101, 'Bangla', 100, 'Seven', 123, '2018-04-09 03:08:08', '2018-04-09 03:08:08'),
(3, 102, 'Banglak', 100, 'Eight', 123, '2018-04-11 04:47:54', '2018-04-11 04:47:54');

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
(4, 123, 'Mahadeb Kumar Das', '4568', '2018-04-09', 'male', 'B+', 'htyht', '01837831697', 'm@gmail.com', 'jyhjy', '970110418120437.png', '2018-04-11 02:53:41', '2018-04-11 06:04:37');

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
(1, 'Admin', 'admin@gmail.com', '$2y$10$TLh/rN8pKcYnt6ZERrVUMOEtlaoVvVC6H0IjeiwTrBSmvCHZKT6OG', '044ZhrZdlgft4X2vlkNMXZWQvfMRWSEPirQmfMR30YDyDAuqvns1rWirx6z0', '2018-04-01 11:08:58', '2018-04-01 11:08:58');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admission`
--
ALTER TABLE `admission`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `info`
--
ALTER TABLE `info`
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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `info`
--
ALTER TABLE `info`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `subject`
--
ALTER TABLE `subject`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `teacher`
--
ALTER TABLE `teacher`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
