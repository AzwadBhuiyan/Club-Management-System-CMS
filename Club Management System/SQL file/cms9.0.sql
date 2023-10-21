-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 08, 2023 at 03:28 PM
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
-- Database: `cms`
--

-- --------------------------------------------------------

--
-- Table structure for table `application_info`
--

CREATE TABLE `application_info` (
  `application_id` bigint(20) UNSIGNED NOT NULL,
  `application_title` varchar(255) NOT NULL,
  `application_type` varchar(255) NOT NULL,
  `application_date` date NOT NULL,
  `application_description` text NOT NULL,
  `applicant_name` varchar(255) NOT NULL,
  `club_name` varchar(255) NOT NULL,
  `onm_status` tinyint(4) NOT NULL DEFAULT 3,
  `cits_status` tinyint(4) NOT NULL DEFAULT 3,
  `facilities_status` tinyint(4) NOT NULL DEFAULT 3,
  `security_status` tinyint(4) NOT NULL DEFAULT 3,
  `finance_status` tinyint(4) NOT NULL DEFAULT 3,
  `adminisrtration_status` tinyint(4) NOT NULL DEFAULT 3,
  `councilaffairs_status` tinyint(4) NOT NULL DEFAULT 3,
  `mpr_status` tinyint(4) NOT NULL DEFAULT 3,
  `onm_response` text DEFAULT NULL,
  `cits_response` text DEFAULT NULL,
  `facilities_response` text DEFAULT NULL,
  `security_response` text DEFAULT NULL,
  `finance_response` text DEFAULT NULL,
  `adminisrtration_response` text DEFAULT NULL,
  `councilaffairs_response` text DEFAULT NULL,
  `mpr_response` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `application_info`
--

INSERT INTO `application_info` (`application_id`, `application_title`, `application_type`, `application_date`, `application_description`, `applicant_name`, `club_name`, `onm_status`, `cits_status`, `facilities_status`, `security_status`, `finance_status`, `adminisrtration_status`, `councilaffairs_status`, `mpr_status`, `onm_response`, `cits_response`, `facilities_response`, `security_response`, `finance_response`, `adminisrtration_response`, `councilaffairs_response`, `mpr_response`, `created_at`, `updated_at`) VALUES
(1, 'IUB Tech Fest', 'Festival', '2023-08-18', 'dasd', 'sadas', '', 2, 0, 3, 3, 3, 3, 3, 3, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-08-16 06:30:39', '2023-08-16 06:30:39'),
(2, 'IUB Tech Fest', 'Festival', '2023-08-19', 'asdasdgfsgetg efewfew fdsfsdf fdsfsdfdfsd', 'Azwad', '', 3, 0, 0, 3, 3, 3, 3, 3, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-08-16 06:31:38', '2023-08-16 06:31:38'),
(3, 'IUB music club festival', 'Seminar', '2023-08-31', 'dasdas', 'dsad', '', 3, 3, 0, 3, 3, 3, 3, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-08-16 06:40:30', '2023-08-16 06:40:30'),
(4, 'IUB music competition', 'Competition', '2023-08-26', 'cxzczxc', 'czxczx', '', 3, 0, 3, 0, 3, 3, 3, 3, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-08-16 06:42:47', '2023-08-16 06:42:47'),
(5, 'IUB Tech Fest', 'General application', '2023-08-19', 'dasdsa', 'dasdas', '', 3, 3, 3, 3, 0, 0, 3, 3, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-08-16 07:27:49', '2023-08-16 07:27:49'),
(6, 'dasdas', 'Competition', '2023-08-18', 'dasdas', 'dasd', 'chess club', 3, 3, 3, 3, 3, 0, 0, 3, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-08-16 07:30:31', '2023-08-16 07:30:31'),
(7, 'Azwad', 'Workshop', '2023-08-17', 'dasd', 'dasd', '', 0, 0, 3, 3, 3, 3, 3, 3, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-08-16 07:33:24', '2023-08-16 07:33:24'),
(8, 'Utshob', 'Show', '2023-08-12', 'hi whats up', 'rahat', '', 2, 0, 0, 3, 3, 0, 3, 3, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-08-23 03:46:28', '2023-08-23 03:46:28'),
(9, 'hsagf', 'Workshop', '2023-08-26', 'hhhhh', 'rahat', '', 2, 0, 3, 3, 3, 0, 3, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-08-23 03:50:21', '2023-08-23 03:50:21'),
(10, 'Party', 'Party', '2023-10-11', 'Partyyyyyy!!!', 'gad', 'chess club', 1, 0, 0, 0, 3, 3, 3, 3, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-10-07 01:48:21', '2023-10-07 01:48:21');

-- --------------------------------------------------------

--
-- Table structure for table `blub club`
--

CREATE TABLE `blub club` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `contact_number` varchar(255) NOT NULL,
  `gender` enum('male','female','other') NOT NULL,
  `club_position` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `chess club`
--

CREATE TABLE `chess club` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `contact_number` varchar(255) NOT NULL,
  `gender` enum('male','female','other') NOT NULL,
  `club_position` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `chess club`
--

INSERT INTO `chess club` (`id`, `user_id`, `user_name`, `user_email`, `contact_number`, `gender`, `club_position`, `created_at`, `updated_at`) VALUES
(1, 128232, 'rraasd', 'qwew@gnas.com', '134134134', 'male', 'Normal', NULL, NULL),
(3, 1233221, 'Henry Ford', 'henry@gmail.com', '123123123', 'male', 'Treasurer', NULL, NULL),
(4, 1231234, 'rht', 'rh999@gmail.com', '12124', 'male', 'Normal', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `club2`
--

CREATE TABLE `club2` (
  `id` int(8) NOT NULL,
  `name` text NOT NULL,
  `email` text NOT NULL,
  `contact` int(14) NOT NULL,
  `gender` text NOT NULL,
  `position` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `club2`
--

INSERT INTO `club2` (`id`, `name`, `email`, `contact`, `gender`, `position`) VALUES
(183213213, 'rahat', 'rahat@gmail.com', 1234, 'Male', 'Vice-President'),
(12345, 'Arko', 'arko@gmail.com', 12327847, 'Male', 'Treasurer'),
(1820713, 'Azwad', 'azwad@gmail.com', 123455, 'Male', 'Member'),
(123467, 'Ahmed', 'ahmed@gmail.com', 12747364, 'Male', 'Executive Member');

-- --------------------------------------------------------

--
-- Table structure for table `club_list`
--

CREATE TABLE `club_list` (
  `club_id` int(3) NOT NULL,
  `club_name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `club_list`
--

INSERT INTO `club_list` (`club_id`, `club_name`) VALUES
(102, 'ww'),
(101, 'chess club'),
(0, ''),
(103, 'Drama Club'),
(105, 'Fight Club'),
(106, 'karate_club'),
(0, 'iub music club'),
(333, 'blub club'),
(999, 'dance club');

-- --------------------------------------------------------

--
-- Table structure for table `dance club`
--

CREATE TABLE `dance club` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `contact_number` varchar(255) NOT NULL,
  `gender` enum('male','female','other') NOT NULL,
  `club_position` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `departments`
--

CREATE TABLE `departments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `iub music club`
--

CREATE TABLE `iub music club` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `contact_number` varchar(255) NOT NULL,
  `gender` enum('male','female','other') NOT NULL,
  `club_position` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `karate_club`
--

CREATE TABLE `karate_club` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `contact_number` varchar(255) NOT NULL,
  `gender` enum('male','female','other') NOT NULL,
  `club_position` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `karate_club`
--

INSERT INTO `karate_club` (`id`, `user_id`, `user_name`, `user_email`, `contact_number`, `gender`, `club_position`, `created_at`, `updated_at`) VALUES
(1, 128232, 'asdasd', 'qwd@gfma.com', '81281432', 'female', 'Normal', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(2, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(3, '2023_07_30_112550_create_clubs_table', 2),
(4, '2023_08_16_114334_create_application_infos_table', 3),
(5, '2023_09_18_164308_create_users_table', 4),
(6, '2023_09_22_100834_create_new_user_requests_table', 5),
(7, '2023_09_22_111035_create_new_user_requests_table', 6),
(8, '2023_09_23_145751_create_users_table', 7),
(9, '2014_10_12_100000_create_password_resets_table', 8),
(10, '2023_09_23_160738_create_users_table', 9),
(11, '2023_09_23_162654_create_users_table', 10),
(12, '2023_09_23_163020_create_users_table', 11),
(13, '2023_09_22_142332_create_upcoming_events_table', 12),
(14, '2023_10_04_183837_create_post_info_table', 13);

-- --------------------------------------------------------

--
-- Table structure for table `new_user_requests`
--

CREATE TABLE `new_user_requests` (
  `user_id` varchar(255) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `contact_number` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `new_user_requests`
--

INSERT INTO `new_user_requests` (`user_id`, `user_name`, `user_email`, `contact_number`, `gender`, `password`, `created_at`, `updated_at`) VALUES
('18264748', 'Abdul Azwad Bhuiyan', 'abc@gmail.com', '0123232', 'male', '$2y$10$yBNyFoJ6cEOLpfOHoIAzQOrKX45CZYsbdtwqunQBEQ8p0c5mmV1yW', '2023-09-22 06:33:27', '2023-09-22 06:33:27'),
('1826474832', 'Azwad Rahat Arkods', 'abcdsdsd@gmail.com', '01232323454', 'male', '$2y$10$NZze9NpowpcwKKFuwsMe6Omwcavdpd.iLHByFZ7WA1DzzT89yjPpO', '2023-09-22 06:42:46', '2023-09-22 06:42:46'),
('18264748d', 'Azwad Rahat Arko', 'abcdsd@gmail.com', '01232323', 'male', '$2y$10$3iSxju7fN5z6/Fi09VjP/.ulErGCJYctj2FF6e35.7dd0RerMqzV2', '2023-09-22 06:41:50', '2023-09-22 06:41:50');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `post_info`
--

CREATE TABLE `post_info` (
  `post_id` bigint(20) UNSIGNED NOT NULL,
  `post_title` varchar(255) NOT NULL,
  `post_type` varchar(255) NOT NULL,
  `post_date` date NOT NULL,
  `post_description` text NOT NULL,
  `writers_name` varchar(255) NOT NULL,
  `club_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `testeventapply`
--

CREATE TABLE `testeventapply` (
  `Name` text NOT NULL,
  `Type` text NOT NULL,
  `Date` date NOT NULL,
  `Summary` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `upcoming_events`
--

CREATE TABLE `upcoming_events` (
  `event_id` bigint(20) UNSIGNED NOT NULL,
  `event_name` varchar(255) NOT NULL,
  `club_name` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `description` text NOT NULL,
  `picture` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` varchar(255) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `contact_number` varchar(255) NOT NULL,
  `gender` enum('male','female') NOT NULL,
  `password` varchar(255) NOT NULL,
  `bio` text DEFAULT NULL,
  `user_type` enum('super admin','club admin','official','general') NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_name`, `user_email`, `contact_number`, `gender`, `password`, `bio`, `user_type`, `created_at`, `updated_at`) VALUES
('1001', 'cits', 'cits@gmail.com', '213123123', 'male', 'cits1234', NULL, 'official', NULL, NULL),
('1002', 'onm', 'onm@gmail.com', '12345678', 'male', 'onm1234', NULL, 'official', NULL, NULL),
('1003', 'facilities', 'facilities@gmail.com', '0221934124', 'female', 'facilities1234', NULL, 'official', NULL, NULL),
('1004', 'security', 'security@gmail.com', '12394874', 'female', 'security1234', NULL, 'official', NULL, NULL),
('1005', 'administration', 'administration@gmail.com', '21312124', 'male', 'administration1234', NULL, 'official', NULL, NULL),
('1006', 'councilaffairs', 'councilaffairs@gmail.com', '12431455', 'male', 'councilaffairs1234', NULL, 'official', NULL, NULL),
('1007', 'mpr', 'mpr@gmail.com', '019548575', 'female', 'mpr1234', NULL, 'official', NULL, NULL),
('1234', 'asdf', 'asdfss@gmail.com', '1111234567', 'female', 'asdf1234', NULL, 'official', NULL, NULL),
('1234231', 'Sanzar Adnan Alam', 'sanzar@gmail.com', '012432332', 'male', 'sanzar1234', 'Hi, this is Sanzar.', 'official', NULL, NULL),
('1234567', 'Rahatul Karim', 'rahat@gmail.com', '01234567', 'male', 'rahat1234', 'Hi I\'m Rahat', 'super admin', NULL, NULL),
('1820713', 'Abdul Azwad Bhuiyan', 'azwad@gmail.com', '01938599887', 'male', 'azwad1234', 'Hi I\'m Azwad', 'club admin', NULL, NULL),
('1883002', 'chess club', 'chess@gmail.com', '000012312312', 'male', 'chess1234', NULL, 'club admin', NULL, NULL),
('1920714', 'Arko Ahmed', 'arko@gmail.com', '012342311', 'male', 'arko1234', NULL, 'general', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `application_info`
--
ALTER TABLE `application_info`
  ADD PRIMARY KEY (`application_id`);

--
-- Indexes for table `blub club`
--
ALTER TABLE `blub club`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `chess club`
--
ALTER TABLE `chess club`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dance club`
--
ALTER TABLE `dance club`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `departments`
--
ALTER TABLE `departments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `iub music club`
--
ALTER TABLE `iub music club`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `karate_club`
--
ALTER TABLE `karate_club`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `new_user_requests`
--
ALTER TABLE `new_user_requests`
  ADD UNIQUE KEY `new_user_requests_user_id_unique` (`user_id`),
  ADD UNIQUE KEY `new_user_requests_user_email_unique` (`user_email`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `post_info`
--
ALTER TABLE `post_info`
  ADD PRIMARY KEY (`post_id`);

--
-- Indexes for table `upcoming_events`
--
ALTER TABLE `upcoming_events`
  ADD PRIMARY KEY (`event_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD UNIQUE KEY `users_user_id_unique` (`user_id`),
  ADD UNIQUE KEY `users_user_email_unique` (`user_email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `application_info`
--
ALTER TABLE `application_info`
  MODIFY `application_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `blub club`
--
ALTER TABLE `blub club`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `chess club`
--
ALTER TABLE `chess club`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `dance club`
--
ALTER TABLE `dance club`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `departments`
--
ALTER TABLE `departments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `iub music club`
--
ALTER TABLE `iub music club`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `karate_club`
--
ALTER TABLE `karate_club`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `post_info`
--
ALTER TABLE `post_info`
  MODIFY `post_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `upcoming_events`
--
ALTER TABLE `upcoming_events`
  MODIFY `event_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;