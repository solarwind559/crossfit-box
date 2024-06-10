-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 07, 2024 at 02:27 PM
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
-- Database: `fitness_center`
--

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `classes`
--

CREATE TABLE `classes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `day` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `clubs`
--

CREATE TABLE `clubs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `event_date` datetime NOT NULL DEFAULT current_timestamp(),
  `content` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `title`, `image`, `location`, `event_date`, `content`, `created_at`, `updated_at`) VALUES
(1, 'Swimming and the CrossFit Games: Why Is It Everyone\'s Weak Link?', 'build/assets/img/image1.png', 'Our fitness club', '2024-05-31 14:19:18', 'Stretching is a fundamental part of any workout programme and is essential for well rounded fitness sessions. On this course you will build upon the knowledge from your previous fitness qualification and explore advanced stretching techniques. This includes equipment stretches, a wider range of stretching types and more specific progressions.', '2024-05-01 10:16:27', NULL),
(2, 'A Movie in the Park:\r\nKung Fu Panda', 'build/assets/img/image12.jpg', 'Our fitness club', '2024-05-30 14:19:18', 'Stretching is a fundamental part of any workout programme and is essential for well rounded fitness sessions. On this course you will build upon the knowledge from your previous fitness qualification and explore advanced stretching techniques. This includes equipment stretches, a wider range of stretching types and more specific progressions.', '2024-05-07 10:16:27', NULL),
(3, 'Swimming and the CrossFit Games: Why Is It Everyone\'s Weak Link?', 'build/assets/img/image11.jpg', 'Our fitness club', '2024-05-29 14:19:18', 'Stretching is a fundamental part of any workout programme and is essential for well rounded fitness sessions. On this course you will build upon the knowledge from your previous fitness qualification and explore advanced stretching techniques. This includes equipment stretches, a wider range of stretching types and more specific progressions.', '2024-05-01 10:16:27', NULL),
(4, 'A Movie in the Park:\r\nKung Fu Panda', 'build/assets/img/big_image3.jpg', 'Our fitness club', '2024-05-24 14:19:18', 'Stretching is a fundamental part of any workout programme and is essential for well rounded fitness sessions. On this course you will build upon the knowledge from your previous fitness qualification and explore advanced stretching techniques. This includes equipment stretches, a wider range of stretching types and more specific progressions.', '2024-05-07 10:16:27', NULL),
(7, 'Test Event', 'http://127.0.0.1:8000/storage/images/1717762980_image6.jpg', 'Boomerang Street', '2024-06-30 18:20:00', '<p>Event is scheduled</p>', '2024-06-07 09:23:00', '2024-06-07 09:23:00');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(255) NOT NULL,
  `payload` longtext NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `total_jobs` int(11) NOT NULL,
  `pending_jobs` int(11) NOT NULL,
  `failed_jobs` int(11) NOT NULL,
  `failed_job_ids` longtext NOT NULL,
  `options` mediumtext DEFAULT NULL,
  `cancelled_at` int(11) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `finished_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(1, '0001_01_01_000000_create_users_table', 1),
(2, '0001_01_01_000001_create_cache_table', 1),
(3, '0001_01_01_000002_create_jobs_table', 1),
(4, '2024_05_11_100604_create_clubs_table', 1),
(5, '2024_05_11_100642_create_classes_table', 1),
(6, '2024_05_11_100658_create_trainers_table', 1),
(7, '2024_05_14_140746_create_posts_table', 2),
(9, '2024_05_21_100811_create_workout_table', 3),
(10, '2024_05_21_100605_create_events_table', 4);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `title`, `image`, `content`, `created_at`, `updated_at`) VALUES
(10, 'Ullam omnis velit esse', 'build/assets/img/image5.jpg', 'Each Wednesday, our club has a friendly competition.\nMen use a 45-lb. barbell and 24-in. box Women use a 35-lb. barbell and 20-in. boxPost reps completed to comments or register for the Liftoff and log your score on the leaderboard.', '2024-05-04 05:48:22', '2024-05-14 11:25:32'),
(11, 'Occaecati consectetur qui architecto', 'build/assets/img/image12.jpg', 'Laudantium consequatur dolorem quia voluptates suscipit. Totam voluptates nisi qui earum. Provident temporibus quia neque accusamus earum esse omnis. Doloribus voluptas nobis vel nulla reiciendis. Consequatur ipsam corrupti quidem dolorum odio inventore. Dolores est et quae nemo. Assumenda voluptas quam nihil a assumenda qui nulla.', '2024-05-02 23:33:51', '2024-05-14 11:25:32'),
(12, 'Eum dolor omnis quae nulla libero', 'build/assets/img/image11.jpg', 'Hic repellendus quas enim. Debitis distinctio accusantium consectetur nulla molestias ducimus dolores. Voluptatem minus ut quia eligendi eum. Accusantium aperiam a sint enim. Quam qui cumque eos quia voluptatem qui molestiae. Commodi est necessitatibus ea autem saepe dolorem nihil eveniet. Consequatur libero amet error impedit voluptatum dolore consectetur.', '2024-05-02 15:49:04', '2024-05-14 11:25:32'),
(13, 'Qui aliquam iusto', 'build/assets/img/image13.jpg', 'Voluptatibus voluptatem odit dolor sit. Eaque atque vel doloribus qui. Saepe et illum autem. Et fugiat nesciunt quod delectus ipsa natus rerum minus. Fugiat cupiditate totam cum et. Corrupti quasi quo rem ipsa. Dolorem aut autem nihil iste.', '2024-05-12 07:04:12', '2024-05-14 11:25:32'),
(14, 'Cupiditate qui autem voluptatem harum', 'build/assets/img/image1.png', 'Ut ut at quia illum illo ipsam dolores ea. Et facere atque corrupti est doloribus magnam ab. Reiciendis consectetur debitis magni placeat accusantium nulla. Voluptas facilis veniam qui. Deleniti voluptatum dicta repudiandae eaque beatae voluptatem et fugit. In nam quisquam vel quam sed inventore.', '2024-05-10 14:06:18', '2024-05-14 11:25:32'),
(15, 'Dolorem impedit eos sunt consequuntur', 'build/assets/img/image12.jpg', 'Tenetur rerum amet reiciendis similique. Vero ab aut consectetur quia molestiae. Praesentium qui dolore omnis qui natus vel repellat. Nisi voluptates voluptatibus ipsam quidem quos. In rerum tempora corporis. Porro quis rem qui ut sed corporis.', '2024-05-06 14:03:39', '2024-05-14 11:25:32'),
(16, 'Maxime aperiam voluptates ipsam', 'build/assets/img/image13.jpg', 'Reiciendis minus sed harum omnis. Dignissimos aut voluptas qui dolor in nihil. Quaerat quae eum et impedit soluta. Rerum id qui ex et accusantium.', '2024-05-09 16:53:49', '2024-05-14 11:25:32'),
(21, 'Lorem Ipsum', 'http://127.0.0.1:8000/storage/images/1717762693_image13.jpg', '<p>Test post</p>', '2024-06-07 09:18:15', '2024-06-07 09:18:15');

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('Rqff5RU4qwcODiM4BIxYVzhqAlNTcQxhpALhPFaf', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/125.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoid0lVVFROMWlkSUpHdWJqSWFwMDhEaG5YZ2dNQklTaFBVN0k4RXg0diI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mzg6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9zY2hlZHVsZS9ldmVudC83Ijt9czo1MDoibG9naW5fd2ViXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6MTt9', 1717763158);

-- --------------------------------------------------------

--
-- Table structure for table `trainers`
--

CREATE TABLE `trainers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `surname` varchar(255) NOT NULL,
  `email` varchar(100) NOT NULL DEFAULT 'trainer@example.com',
  `speciality` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `type` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `trainers`
--

INSERT INTO `trainers` (`id`, `name`, `surname`, `email`, `speciality`, `image`, `description`, `type`, `created_at`, `updated_at`) VALUES
(1, 'Reid Dach V', 'Williamson', 'trainer@example.com', 'Physical Therapy', 'build/assets/img/team1.jpg', 'Voluptate rem eaque adipisci. Repudiandae quidem qui dolores cupiditate. Omnis debitis suscipit voluptates voluptatem omnis atque ratione. Quia ut omnis quis magni enim.', 2, '2024-05-02 11:50:58', '2024-05-12 11:50:58'),
(2, 'Janice Hills', 'Nader', 'trainer@example.com', 'Pilates', 'build/assets/img/team2.jpg', 'Et a pariatur enim excepturi explicabo. Libero laborum et ut officiis molestiae. Enim possimus molestiae cum ut. Velit illo vel soluta molestiae.', 1, '2024-05-12 11:50:58', '2024-05-12 11:50:58'),
(3, 'Talia Friesen', 'Willms', 'trainer@example.com', 'Bodybuilding', 'build/assets/img/team3.jpg', 'Cumque velit aut aut velit numquam. Ducimus eos est ut et qui et ex. Exercitationem laudantium non et et. Aperiam laudantium voluptas earum accusantium.', 2, '2024-05-04 11:50:58', '2024-05-12 11:50:58'),
(4, 'Hiram Wiza', 'Kling', 'trainer@example.com', 'Boxing', 'build/assets/img/team1.jpg', 'Veritatis optio aut velit repellendus blanditiis assumenda. Et voluptas dicta eaque quia sunt quis nihil ipsa. Rerum aut aut reprehenderit eveniet.', 2, '2024-05-12 11:50:58', '2024-05-12 11:50:58'),
(5, 'Jaida Schultz I', 'Kunze', 'trainer@example.com', 'Yoga', 'build/assets/img/team2.jpg', 'Reprehenderit eligendi quisquam ad doloribus vitae at in. Ipsa pariatur rerum placeat eum error. Aut vero id consequatur consequuntur voluptatem sit quasi.', 1, '2024-05-12 11:50:58', '2024-05-12 11:50:58'),
(6, 'Jeffry Dicki', 'Hoeger', 'trainer@example.com', 'Cycling', 'build/assets/img/team3.jpg', 'Cum consequatur nulla laborum. Labore voluptatem porro numquam saepe et dolores. Dignissimos libero qui qui sed aut nihil. Voluptatibus possimus quos laboriosam beatae molestiae.', 1, '2024-05-12 11:50:58', '2024-05-12 11:50:58'),
(7, 'Wade White', 'Kilback', 'trainer@example.com', 'Weight Loss', 'build/assets/img/team1.jpg', 'Libero sapiente illum vel ullam laudantium. Et id sit recusandae odio. Beatae nemo sapiente dolorum enim ipsum asperiores. Autem nesciunt id inventore quo.', 3, '2024-05-12 11:50:58', '2024-05-12 11:50:58');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Main Admin', 'admin@admin.com', NULL, '$2y$12$I44AzE3f9vNrVboj6AjU.ecnERDKHT6L0t0u8x/d/H0KbWVT/gzJi', 'oGxXGcwUPo3ggGcy85DE8Yla1t8yH1FbqEONM6OXc1YEoGyfSxkjyD6NbHrn', '2024-05-27 08:21:52', '2024-05-27 08:21:52');

-- --------------------------------------------------------

--
-- Table structure for table `workouts`
--

CREATE TABLE `workouts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `workout_date` date NOT NULL DEFAULT current_timestamp(),
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `workouts`
--

INSERT INTO `workouts` (`id`, `image`, `content`, `workout_date`, `created_at`, `updated_at`) VALUES
(1, 'build/assets/img/image3.jpg', 'Men use a 45-lb. barbell and 24-in. box Women use a 35-lb. barbell and 20-in. boxPost reps completed to comments or register for the Liftoff and log your score on the leaderboard.', '2024-05-01', NULL, NULL),
(2, 'build/assets/img/image4.jpg', 'Men use a 45-lb. barbell and 24-in. box Women use a 35-lb. barbell and 20-in. boxPost reps completed to comments or register for the Liftoff and log your score on the leaderboard.', '2024-05-08', NULL, NULL),
(3, 'build/assets/img/image5.jpg', 'Men use a 45-lb. barbell and 24-in. box Women use a 35-lb. barbell and 20-in. boxPost reps completed to comments or register for the Liftoff and log your score on the leaderboard.', '2024-05-15', NULL, NULL),
(4, 'build/assets/img/image6.jpg', 'Men use a 45-lb. barbell and 24-in. box Women use a 35-lb. barbell and 20-in. boxPost reps completed to comments or register for the Liftoff and log your score on the leaderboard.', '2024-05-22', NULL, NULL),
(5, 'build/assets/img/image3.jpg', 'Men use a 45-lb. barbell and 24-in. box Women use a 35-lb. barbell and 20-in. boxPost reps completed to comments or register for the Liftoff and log your score on the leaderboard.', '2024-05-29', NULL, NULL),
(6, 'build/assets/img/image3.jpg', 'Men use a 45-lb. barbell and 24-in. box Women use a 35-lb. barbell and 20-in. boxPost reps completed to comments or register for the Liftoff and log your score on the leaderboard.', '2024-06-05', NULL, NULL),
(7, 'build/assets/img/image4.jpg', 'Men use a 45-lb. barbell and 24-in. box Women use a 35-lb. barbell and 20-in. boxPost reps completed to comments or register for the Liftoff and log your score on the leaderboard.', '2024-06-12', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `classes`
--
ALTER TABLE `classes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `clubs`
--
ALTER TABLE `clubs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indexes for table `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `trainers`
--
ALTER TABLE `trainers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `workouts`
--
ALTER TABLE `workouts`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `classes`
--
ALTER TABLE `classes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `clubs`
--
ALTER TABLE `clubs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `trainers`
--
ALTER TABLE `trainers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `workouts`
--
ALTER TABLE `workouts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
