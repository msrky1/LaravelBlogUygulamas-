-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 28 Nis 2023, 17:40:51
-- Sunucu sürümü: 10.4.22-MariaDB
-- PHP Sürümü: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `laravelblog`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `blogs`
--

CREATE TABLE `blogs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(11) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` date DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `blogs`
--

INSERT INTO `blogs` (`id`, `user_id`, `title`, `slug`, `date`, `description`, `created_at`, `updated_at`, `deleted_at`) VALUES
(93, '1', 'Blog Yazısı 1', 'asdasd', '2023-04-28', 'Blog Yazısı 1', '2023-04-28 11:08:41', '2023-04-28 12:39:01', NULL),
(94, '3', 'Blog Yazısı 3', 'joker', '2023-04-28', 'Blog Yazısı 3 İçerik', '2023-04-28 11:09:18', '2023-04-28 12:39:46', NULL),
(95, '5', 'Blog Yazısı 2', 'deneme', '2023-04-27', 'Blog Yazısı 2 İçerik', '2023-04-28 11:29:14', '2023-04-28 12:39:23', NULL);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `comments`
--

CREATE TABLE `comments` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `blog_id` int(10) UNSIGNED NOT NULL,
  `body` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `comments`
--

INSERT INTO `comments` (`id`, `user_id`, `blog_id`, `body`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 3, 53, 'Comment', '2023-04-25 09:25:44', '2023-04-25 09:25:44', NULL),
(2, 3, 53, 'asdasd', '2023-04-25 09:36:09', '2023-04-25 09:36:09', NULL),
(3, 3, 54, 'asasdasd', '2023-04-25 10:15:54', '2023-04-25 10:15:54', NULL),
(4, 1, 53, 'Ağzındaki diş çürük', '2023-04-25 13:26:31', '2023-04-25 13:26:31', NULL),
(5, 1, 54, 'Joker Mahmut Sarıkaya', '2023-04-25 14:18:48', '2023-04-25 14:18:48', NULL),
(6, 1, 54, 'Bende Biliyorum', '2023-04-25 14:22:52', '2023-04-25 14:22:52', NULL),
(7, 3, 55, 'Deneme', '2023-04-28 04:36:52', '2023-04-28 04:36:52', NULL),
(8, 3, 76, 'deneme', '2023-04-28 05:16:22', '2023-04-28 05:16:22', NULL),
(9, 1, 87, 'Joker', '2023-04-28 09:03:37', '2023-04-28 09:03:37', NULL),
(10, 3, 94, 'Deneme', '2023-04-28 11:09:50', '2023-04-28 11:09:50', NULL),
(11, 5, 93, 'asdasdasd', '2023-04-28 11:29:51', '2023-04-28 11:29:51', NULL),
(12, 1, 95, 'Test', '2023-04-28 11:32:26', '2023-04-28 11:32:26', NULL),
(13, 1, 95, 'asdad', '2023-04-28 11:35:28', '2023-04-28 11:35:28', NULL),
(14, 1, 94, 'asdasd', '2023-04-28 11:50:05', '2023-04-28 11:50:05', NULL);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `likes`
--

CREATE TABLE `likes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `blog_id` int(10) UNSIGNED NOT NULL,
  `like` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `likes`
--

INSERT INTO `likes` (`id`, `user_id`, `blog_id`, `like`, `created_at`, `updated_at`) VALUES
(107, 3, 55, 1, '2023-04-28 07:49:42', '2023-04-28 07:49:42'),
(108, 3, 85, 1, '2023-04-28 07:50:51', '2023-04-28 07:50:51'),
(112, 1, 85, 1, '2023-04-28 07:53:12', '2023-04-28 07:53:12'),
(113, 1, 87, 1, '2023-04-28 09:03:31', '2023-04-28 09:03:31'),
(114, 1, 55, 1, '2023-04-28 09:04:00', '2023-04-28 09:04:00'),
(117, 3, 93, 1, '2023-04-28 11:27:18', '2023-04-28 11:27:18'),
(119, 1, 93, 1, '2023-04-28 11:27:46', '2023-04-28 11:27:46'),
(120, 5, 94, 1, '2023-04-28 11:28:44', '2023-04-28 11:28:44'),
(121, 5, 93, 1, '2023-04-28 11:28:50', '2023-04-28 11:28:50'),
(122, 5, 95, 1, '2023-04-28 11:29:39', '2023-04-28 11:29:39'),
(123, 1, 95, 1, '2023-04-28 11:32:22', '2023-04-28 11:32:22'),
(124, 1, 94, 1, '2023-04-28 11:50:10', '2023-04-28 11:50:10');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2014_10_12_100000_create_password_resets_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2023_04_19_133938_create_blogs_table', 2),
(8, '2023_04_25_115123_create_comments_table', 3),
(9, '2023_04_26_192013_create_likes_table', 4);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'user' COMMENT 'Admin veya kullanıcı',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `status`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Mahmut Sarıkaya', 'msrky1@gmail.com', NULL, '$2y$10$fZZz/wNBq.ouwCvhBHJUDOIMaHIBTPtaVQ8MMbZfAPZRP.S1Jtggq', 'admin', NULL, '2023-04-19 07:07:55', '2023-04-26 15:01:28'),
(3, 'Ahmet Keskin', 'ahmet@gmail.com', NULL, '$2y$10$yz9ydjcYEDQ0uSK9QWLcweiZrcapE/6CNh.AMmBCG47WyYZyQUWki', 'pasif', NULL, '2023-04-25 06:51:57', '2023-04-28 11:31:17'),
(4, 'Ramazan Çolak', 'ramazan@gmail.com', NULL, '$2y$10$SvbFPsWs4fCcpoIO7v3cOuvdb.QWL2WzKXyEU5bqPFlwF.AMI152i', 'pasif', NULL, '2023-04-27 08:40:59', '2023-04-28 11:27:59'),
(5, 'Ahmet Sarıkaya', 'ahmetsari@gmail.com', NULL, '$2y$10$LjMOgzPS9Kx02meNB7QKluCBXJkpfoclz8HCJujqtZ9QXkpybxNNG', 'user', NULL, '2023-04-28 11:28:36', '2023-04-28 11:34:14');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Tablo için indeksler `likes`
--
ALTER TABLE `likes`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Tablo için indeksler `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Tablo için indeksler `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Tablo için indeksler `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=96;

--
-- Tablo için AUTO_INCREMENT değeri `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- Tablo için AUTO_INCREMENT değeri `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Tablo için AUTO_INCREMENT değeri `likes`
--
ALTER TABLE `likes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=125;

--
-- Tablo için AUTO_INCREMENT değeri `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Tablo için AUTO_INCREMENT değeri `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Tablo için AUTO_INCREMENT değeri `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
