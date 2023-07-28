-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- 主機： 127.0.0.1:3306
-- 產生時間： 2023-06-06 11:26:42
-- 伺服器版本： 8.0.31
-- PHP 版本： 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `clock`
--

-- --------------------------------------------------------

--
-- 資料表結構 `basesalary`
--

DROP TABLE IF EXISTS `basesalary`;
CREATE TABLE IF NOT EXISTS `basesalary` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `basesalary` int NOT NULL DEFAULT '176' COMMENT '基本薪資',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `basesalary`
--

INSERT INTO `basesalary` (`id`, `basesalary`, `created_at`, `updated_at`) VALUES
(1, 176, NULL, '2023-06-05 08:15:51'),
(2, 176, '2023-06-06 08:16:23', '2023-06-06 08:16:23');

-- --------------------------------------------------------

--
-- 資料表結構 `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `uuid` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- 資料表結構 `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=42 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(36, '2014_10_12_000000_create_users_table', 1),
(37, '2014_10_12_100000_create_password_resets_table', 1),
(38, '2019_08_19_000000_create_failed_jobs_table', 1),
(39, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(40, '2023_05_26_155344_create_punchrecord_table', 1),
(41, '2023_06_05_114735_create_basesalary_table', 2);

-- --------------------------------------------------------

--
-- 資料表結構 `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- 資料表結構 `personal_access_tokens`
--

DROP TABLE IF EXISTS `personal_access_tokens`;
CREATE TABLE IF NOT EXISTS `personal_access_tokens` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- 資料表結構 `punchrecord`
--

DROP TABLE IF EXISTS `punchrecord`;
CREATE TABLE IF NOT EXISTS `punchrecord` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT COMMENT '編號',
  `date` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT '月份',
  `nameid` bigint UNSIGNED NOT NULL COMMENT '工讀生編號',
  `punch_in` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT '上班打卡時間',
  `punch_out` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT '下班打卡時間',
  `time` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT '時數',
  `mark` tinyint(1) DEFAULT NULL COMMENT '更改',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `punchrecord_nameid_foreign` (`nameid`)
) ENGINE=MyISAM AUTO_INCREMENT=55 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `punchrecord`
--

INSERT INTO `punchrecord` (`id`, `date`, `nameid`, `punch_in`, `punch_out`, `time`, `mark`, `created_at`, `updated_at`) VALUES
(1, '6/2', 2, '10:00', '12:00', '2時0分', 1, '2023-06-02 04:04:16', '2023-06-02 04:04:47'),
(3, '6/2', 3, '14:00', '16:00', '2時0分', 0, '2023-06-02 06:05:48', '2023-06-02 08:23:38'),
(4, '6/2', 5, '12:00', '13:00', '1時0分', 1, '2023-06-02 06:09:31', '2023-06-02 06:09:31'),
(5, '6/2', 10, '12:00', '13:00', '1時0分', 1, '2023-06-02 06:09:57', '2023-06-02 06:09:57'),
(6, '6/2', 9, '12:00', '13:00', '1時0分', 1, '2023-06-02 06:12:29', '2023-06-02 06:12:29'),
(17, '6/2', 2, '16:00', '17:00', '1時0分', NULL, '2023-06-02 08:22:57', '2023-06-02 09:00:08'),
(18, '6/2', 11, '16:40', '17:43', '1時3分', NULL, '2023-06-02 08:40:42', '2023-06-02 09:43:19'),
(19, '6/2', 8, '16:44', '17:43', '0時59分', NULL, '2023-06-02 08:44:41', '2023-06-02 09:43:04'),
(40, '6/5', 10, '12:00', '13:01', '1時1分', NULL, '2023-06-05 04:12:34', '2023-06-05 05:01:22'),
(39, '6/5', 9, '12:00', '13:01', '1時1分', NULL, '2023-06-05 04:12:21', '2023-06-05 05:01:24'),
(38, '6/5', 3, '10:00', '12:04', '2時4分', NULL, '2023-06-05 02:25:17', '2023-06-05 04:04:29'),
(41, '6/5', 3, '14:01', '15:00', '0時59分', NULL, '2023-06-05 06:01:31', '2023-06-05 07:00:15'),
(42, '6/5', 2, '15:03', '17:00', '1時57分', NULL, '2023-06-05 07:03:56', '2023-06-05 09:00:21'),
(44, '6/5', 8, '16:43', '17:40', '0時57分', NULL, '2023-06-05 08:43:34', '2023-06-05 09:40:38'),
(45, '6/5', 10, '16:43', '17:41', '0時58分', NULL, '2023-06-05 08:43:38', '2023-06-05 09:41:41'),
(46, '6/5', 12, '16:45', '17:40', '0時55分', NULL, '2023-06-05 08:45:17', '2023-06-05 09:40:58'),
(47, '6/6', 10, '11:59', '13:01', '1時0分', NULL, '2023-06-06 03:59:57', '2023-06-06 05:01:19'),
(49, '6/6', 9, '12:19', '13:01', '0時42分', NULL, '2023-06-06 04:19:43', '2023-06-06 05:01:14'),
(50, '6/6', 6, '12:05', '13:02', '1時0分', 1, '2023-06-06 04:22:24', '2023-06-06 05:07:40'),
(51, '6/6', 12, '13:47', '14:56', '1時0分', NULL, '2023-06-06 05:47:12', '2023-06-06 06:56:59'),
(52, '6/6', 11, '15:00', '17:40', '2時40分', 0, '2023-06-06 08:35:09', '2023-06-06 09:53:22'),
(53, '6/6', 6, '16:40', '17:40', '1時0分', 0, '2023-06-06 09:53:51', '2023-06-06 09:53:51'),
(54, '6/6', 2, '16:40', '17:40', '1時0分', 0, '2023-06-06 09:54:35', '2023-06-06 09:54:35');

-- --------------------------------------------------------

--
-- 資料表結構 `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT COMMENT '編號',
  `name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT '身份',
  `username` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cardID` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT '卡號',
  `studentID` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT '學號',
  `remember_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_username_unique` (`username`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `users`
--

INSERT INTO `users` (`id`, `name`, `role`, `username`, `password`, `cardID`, `studentID`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, '管理員', NULL, 'admin', '$2y$10$h2JeGlrwz5ZJhckktMReb.1X8alWAW55.cGVHtFTgzdql17fm.RcW', NULL, NULL, NULL, '2023-06-02 02:24:12', '2023-06-02 02:24:12'),
(2, '簡至昊', '1', NULL, NULL, '1214448021', 'D1094162012', NULL, '2023-06-02 02:57:21', '2023-06-05 06:10:29'),
(3, '劉彥芝', NULL, NULL, NULL, '1216331429', 'D1094421701', NULL, '2023-06-02 02:58:27', '2023-06-02 04:18:46'),
(4, '蔡定辰', NULL, NULL, NULL, NULL, 'D1094161033', NULL, '2023-06-02 02:58:47', '2023-06-02 02:58:47'),
(5, '許肇恒', NULL, NULL, NULL, NULL, 'D1094161032', NULL, '2023-06-02 02:59:00', '2023-06-02 02:59:00'),
(6, '王鈺欣', NULL, NULL, NULL, '1098286645', 'D1104442702', NULL, '2023-06-02 02:59:29', '2023-06-06 05:03:54'),
(7, '謝承祐', NULL, NULL, NULL, NULL, 'D1104111708', NULL, '2023-06-02 02:59:39', '2023-06-02 02:59:39'),
(8, '劉伃芹', NULL, NULL, NULL, '1098412693', 'D1104431013', NULL, '2023-06-02 02:59:49', '2023-06-05 08:43:26'),
(9, '謝宜軒', NULL, NULL, NULL, '1147044437', 'D1104431034', NULL, '2023-06-02 03:00:08', '2023-06-02 08:44:32'),
(10, '林宜蓁', NULL, NULL, NULL, '1214068293', 'D1104221043', NULL, '2023-06-02 03:00:18', '2023-06-05 04:12:28'),
(11, '林育成', NULL, NULL, NULL, '1215639509', 'D1104111051', NULL, '2023-06-02 03:00:27', '2023-06-02 08:26:03'),
(12, '沈倢宇', NULL, NULL, NULL, '1215596981', 'D1114431002', NULL, '2023-06-02 03:00:37', '2023-06-05 08:45:07');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
