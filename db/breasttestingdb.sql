-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 13, 2022 at 01:44 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `breasttestingdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `booking_settings`
--

CREATE TABLE `booking_settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `location_id` bigint(20) UNSIGNED NOT NULL,
  `year` year(4) NOT NULL,
  `weekly_working_days` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `holidays` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `day_start_time` time NOT NULL,
  `day_end_time` time NOT NULL,
  `slot_duration` int(11) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `booking_settings`
--

INSERT INTO `booking_settings` (`id`, `location_id`, `year`, `weekly_working_days`, `holidays`, `day_start_time`, `day_end_time`, `slot_duration`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, 2022, '[\"1\",\"3\",\"5\"]', '2022-10-17', '09:00:00', '16:30:00', 30, 1, '2022-10-07 05:34:02', '2022-10-13 06:13:42');

-- --------------------------------------------------------

--
-- Table structure for table `cancer_types`
--

CREATE TABLE `cancer_types` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cancer_types`
--

INSERT INTO `cancer_types` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Lola Gottlieb', '2022-10-07 05:34:02', '2022-10-07 05:34:02'),
(2, 'Prof. Bria Hegmann', '2022-10-07 05:34:02', '2022-10-07 05:34:02'),
(3, 'Raquel Reichel', '2022-10-07 05:34:02', '2022-10-07 05:34:02'),
(4, 'Madelynn Cummings', '2022-10-07 05:34:02', '2022-10-07 05:34:02'),
(5, 'Serenity Nitzsche Jr.', '2022-10-07 05:34:02', '2022-10-07 05:34:02'),
(6, 'Reggie Olson III', '2022-10-07 05:34:03', '2022-10-07 05:34:03'),
(7, 'Abigayle Predovic', '2022-10-07 05:34:03', '2022-10-07 05:34:03'),
(8, 'Rocky D\'Amore', '2022-10-07 05:34:04', '2022-10-07 05:34:04'),
(9, 'Dr. Baron Hamill V', '2022-10-07 05:34:04', '2022-10-07 05:34:04'),
(10, 'Dr. Kim Bernhard', '2022-10-07 05:34:04', '2022-10-07 05:34:04');

-- --------------------------------------------------------

--
-- Table structure for table `checklists`
--

CREATE TABLE `checklists` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `checklists`
--

INSERT INTO `checklists` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Rashawn Smith', '2022-10-07 05:34:02', '2022-10-07 05:34:02'),
(2, 'Camilla Kihn', '2022-10-07 05:34:02', '2022-10-07 05:34:02'),
(3, 'Lenna Luettgen I', '2022-10-07 05:34:02', '2022-10-07 05:34:02'),
(4, 'Wilbert Feest', '2022-10-07 05:34:02', '2022-10-07 05:34:02'),
(5, 'Idella Bernhard Sr.', '2022-10-07 05:34:02', '2022-10-07 05:34:02'),
(6, 'Kane Ledner', '2022-10-07 05:34:12', '2022-10-07 05:34:12'),
(7, 'Moses Rice Sr.', '2022-10-07 05:34:12', '2022-10-07 05:34:12'),
(8, 'Diana Brekke', '2022-10-07 05:34:13', '2022-10-07 05:34:13'),
(9, 'Sophia Farrell', '2022-10-07 05:34:13', '2022-10-07 05:34:13'),
(10, 'Mr. Edgar Raynor V', '2022-10-07 05:34:13', '2022-10-07 05:34:13');

-- --------------------------------------------------------

--
-- Table structure for table `common_problems`
--

CREATE TABLE `common_problems` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `short_code` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `problem` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `common_problems`
--

INSERT INTO `common_problems` (`id`, `short_code`, `problem`, `created_at`, `updated_at`) VALUES
(1, 'Aperiam consectetur ex beatae in. Culpa sit sapiente molestiae quia enim cupiditate nisi quaerat. At adipisci et eligendi consequatur. Unde ut alias odio quibusdam repellat.', 'Eum sunt sit saepe nemo incidunt. Vel laudantium consectetur esse dicta dolorum. Quasi vitae unde corrupti praesentium. Voluptatem fugiat sunt et blanditiis aut ea.', '2022-10-07 05:34:02', '2022-10-07 05:34:02'),
(2, 'Qui ducimus et quisquam sed molestiae quisquam. Beatae voluptatibus numquam ipsam eum velit. Veniam beatae quo vitae ut exercitationem qui ea.', 'Repellendus placeat totam consequuntur dolor magnam aspernatur. Aut ipsa ipsam et. Repellendus rerum cupiditate expedita. Harum eos dignissimos voluptatibus labore.', '2022-10-07 05:34:03', '2022-10-07 05:34:03'),
(3, 'Quidem pariatur eaque quaerat maxime qui. Animi aspernatur at molestiae aut. Adipisci ut velit tempora quis aspernatur. Magnam explicabo in blanditiis rem.', 'Sunt velit autem ullam ipsum id eaque qui. Repellendus voluptate porro occaecati minus quisquam odio sit omnis. Magnam voluptatem quae modi alias. Suscipit ut fuga quia.', '2022-10-07 05:34:03', '2022-10-07 05:34:03'),
(4, 'Quod fugit impedit libero veritatis non quia nihil quidem. At nesciunt debitis ea reiciendis dolorum. Voluptatem rerum ab qui optio veritatis. Blanditiis impedit voluptatem adipisci consequatur repudiandae.', 'Voluptas nulla error eos fuga. Suscipit odit non nemo illum. Natus molestiae iste iure quas.', '2022-10-07 05:34:03', '2022-10-07 05:34:03'),
(5, 'Ipsam sint similique ducimus autem. Repellat nostrum accusamus ducimus aut laudantium voluptas nesciunt et. Maiores est tempore distinctio vel corporis harum ut. Odit et excepturi rerum dolores debitis accusamus.', 'Et magni alias accusamus dolores et vero voluptas. Quae at et quo iste ut. Cupiditate quae eos ex harum eveniet. Minima eos sint aut fugiat ut.', '2022-10-07 05:34:03', '2022-10-07 05:34:03'),
(6, 'Quidem recusandae iusto at officia aut qui sunt. Consectetur veniam unde voluptate laboriosam enim possimus aliquam maxime. Adipisci temporibus veniam aliquam voluptate sed quia. Excepturi vero iure animi molestiae fuga. Et doloribus dolorem ut saepe.', 'Necessitatibus dolores eius veniam. Dignissimos quae quidem sed sequi. Eligendi consectetur soluta quia quo.', '2022-10-07 05:34:14', '2022-10-07 05:34:14'),
(7, 'Maiores laborum itaque fugiat vero mollitia voluptas quia. Quos ea occaecati magni illo officiis. Voluptate sit temporibus exercitationem consequuntur cupiditate. Velit recusandae vitae voluptates nulla quisquam quia rerum.', 'Animi id rem dignissimos voluptas rerum modi. Laborum in molestias reprehenderit accusamus aut. Sit distinctio libero impedit quia temporibus sunt.', '2022-10-07 05:34:14', '2022-10-07 05:34:14'),
(8, 'Nesciunt dolor repellat neque dolor et placeat. Et dolores sunt eum et vel ut optio. Iusto assumenda dolor iure quisquam. Sed nihil voluptates est quia et non ex.', 'Praesentium aliquid aspernatur odio nobis. Assumenda ut nobis quisquam velit ad. Quia totam cumque ipsam temporibus consequuntur dolores et.', '2022-10-07 05:34:14', '2022-10-07 05:34:14'),
(9, 'Aut natus magni sint consequatur. Magni tempora et fuga consequuntur reprehenderit ut. Dolores vel provident sed vel natus. Velit consequuntur fugiat et ad nihil sint.', 'Voluptates sunt nesciunt qui magnam cum. Voluptatem rerum aut ducimus similique. Asperiores cupiditate et deleniti dignissimos minima. Quia sunt corrupti possimus similique voluptate est.', '2022-10-07 05:34:14', '2022-10-07 05:34:14'),
(10, 'Provident alias aut esse nulla omnis excepturi alias quia. Eius est aut magnam ut mollitia. Iusto ratione vel ex sapiente voluptas accusantium amet. Autem quia molestiae repellat cum facilis sapiente. Facere deleniti eos commodi adipisci ea.', 'Quos et dicta cupiditate pariatur quia nam. Sed esse a rerum eum omnis nulla. Temporibus dolorem magnam dolore ullam neque. Qui minima sed reiciendis odio eius.', '2022-10-07 05:34:15', '2022-10-07 05:34:15');

-- --------------------------------------------------------

--
-- Table structure for table `examination_factors`
--

CREATE TABLE `examination_factors` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `examination_factors`
--

INSERT INTO `examination_factors` (`id`, `name`, `type`, `created_at`, `updated_at`) VALUES
(1, 'Bobbie Hansen Sr.', 'veritatis', '2022-10-07 05:34:03', '2022-10-07 05:34:03'),
(2, 'Isaac Harber', 'aut', '2022-10-07 05:34:03', '2022-10-07 05:34:03'),
(3, 'Darren Cassin', 'repellendus', '2022-10-07 05:34:03', '2022-10-07 05:34:03'),
(4, 'Gaetano Christiansen Sr.', 'eum', '2022-10-07 05:34:03', '2022-10-07 05:34:03'),
(5, 'Malachi Marvin', 'eligendi', '2022-10-07 05:34:03', '2022-10-07 05:34:03'),
(6, 'Berneice Gaylord', 'fugit', '2022-10-07 05:34:10', '2022-10-07 05:34:10'),
(7, 'Prof. Tyreek White', 'ratione', '2022-10-07 05:34:10', '2022-10-07 05:34:10'),
(8, 'Amya Gleason', 'molestiae', '2022-10-07 05:34:11', '2022-10-07 05:34:11'),
(9, 'Lourdes King', 'asperiores', '2022-10-07 05:34:11', '2022-10-07 05:34:11'),
(10, 'Allison Keebler', 'qui', '2022-10-07 05:34:11', '2022-10-07 05:34:11');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
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
-- Table structure for table `family_histories`
--

CREATE TABLE `family_histories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `patient_id` bigint(20) UNSIGNED NOT NULL,
  `cancer_type_id` bigint(20) UNSIGNED NOT NULL,
  `degree` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `number_of_relative` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `family_histories`
--

INSERT INTO `family_histories` (`id`, `patient_id`, `cancer_type_id`, `degree`, `number_of_relative`, `created_at`, `updated_at`) VALUES
(1, 1, 6, 'Quaerat reprehenderit magnam sequi earum ipsum sunt eum itaque. Velit sed nobis nostrum provident provident. Quo consequatur et et quis illo.', 0, '2022-10-07 05:34:04', '2022-10-07 05:34:04'),
(2, 2, 7, 'Ut totam ut praesentium velit. Ea possimus molestiae possimus quibusdam iste aut labore fugiat. Fugiat soluta ut minima reiciendis quaerat debitis. Excepturi eius fugiat asperiores odit.', 0, '2022-10-07 05:34:04', '2022-10-07 05:34:04'),
(3, 3, 8, 'Suscipit recusandae maxime molestias facere voluptatem consequatur. Perferendis consectetur et quis est eum ad.', 0, '2022-10-07 05:34:04', '2022-10-07 05:34:04'),
(4, 4, 9, 'Nobis earum est aut labore consequatur. Quae sunt accusamus vero adipisci veniam tenetur. In cum repellendus sint odit incidunt doloremque.', 0, '2022-10-07 05:34:04', '2022-10-07 05:34:04'),
(5, 5, 10, 'Eos est mollitia facilis tempora. Aperiam molestias temporibus mollitia aut aperiam minus. Natus excepturi fugit molestiae dolorem ut minima. Dolor repudiandae quia sit debitis.', 0, '2022-10-07 05:34:05', '2022-10-07 05:34:05');

-- --------------------------------------------------------

--
-- Table structure for table `followup_reasons`
--

CREATE TABLE `followup_reasons` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `reason` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `followup_reasons`
--

INSERT INTO `followup_reasons` (`id`, `reason`, `created_at`, `updated_at`) VALUES
(1, 'Omnis corrupti esse eaque itaque tempora earum qui. Asperiores distinctio rerum similique voluptatem libero quia sit tenetur.', '2022-10-07 05:34:05', '2022-10-07 05:34:05'),
(2, 'Ea unde enim qui et eaque. Quia blanditiis voluptatum soluta enim. Deserunt dolor deleniti quae quis.', '2022-10-07 05:34:05', '2022-10-07 05:34:05'),
(3, 'Saepe quo reprehenderit consequatur velit. Ab repellat rerum velit deleniti. Et quos sequi ex in.', '2022-10-07 05:34:05', '2022-10-07 05:34:05'),
(4, 'Est autem ratione quisquam in. Praesentium voluptatem nisi eos voluptas iure ratione explicabo. Voluptas id ea quaerat odio est id.', '2022-10-07 05:34:05', '2022-10-07 05:34:05'),
(5, 'Nisi in officiis mollitia ab consequuntur. Est iusto et voluptas alias odit.', '2022-10-07 05:34:05', '2022-10-07 05:34:05'),
(6, 'Repellendus repellendus voluptatem quasi officiis quia. Aut deserunt distinctio eveniet cum voluptatibus. Ut illo harum iure minus repudiandae sunt eius. Aut qui voluptatem et et aut.', '2022-10-07 05:34:06', '2022-10-07 05:34:06'),
(7, 'Facere mollitia deserunt nobis ipsum architecto qui. Voluptas consectetur cumque voluptate in. Voluptatem quisquam sit distinctio ea quisquam et adipisci.', '2022-10-07 05:34:07', '2022-10-07 05:34:07'),
(8, 'Laborum corporis assumenda distinctio quis et quis quidem. Ducimus eligendi et possimus atque.', '2022-10-07 05:34:07', '2022-10-07 05:34:07'),
(9, 'Consectetur ad ipsam sint eveniet commodi. Necessitatibus ipsum quis ut. Earum quasi ad quia delectus et aut.', '2022-10-07 05:34:07', '2022-10-07 05:34:07'),
(10, 'Molestiae impedit natus officia sint. Est et aut perferendis ducimus quis et.', '2022-10-07 05:34:07', '2022-10-07 05:34:07');

-- --------------------------------------------------------

--
-- Table structure for table `locations`
--

CREATE TABLE `locations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `contact_no` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `logo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `locations`
--

INSERT INTO `locations` (`id`, `name`, `address`, `contact_no`, `logo`, `email`, `created_at`, `updated_at`) VALUES
(1, 'Cancer Early Detection Center', 'No. 519, Elvitigala Mawatha, Narahenpita.', '0113159227', 'public/TS1YSY8pXixv9dXeVP0mStGddY9Awefy6wKxE6tP.jpg', 'nccpsl@yahoo.com', '2022-10-07 05:34:01', '2022-10-11 04:06:56');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_10_06_000001_create_booking_settings_table', 1),
(6, '2022_10_06_000002_create_cancer_types_table', 1),
(7, '2022_10_06_000003_create_checklists_table', 1),
(8, '2022_10_06_000004_create_common_problems_table', 1),
(9, '2022_10_06_000005_create_examination_factors_table', 1),
(10, '2022_10_06_000006_create_family_histories_table', 1),
(11, '2022_10_06_000007_create_followup_reasons_table', 1),
(12, '2022_10_06_000008_create_locations_table', 1),
(13, '2022_10_06_000009_create_patien_followups_table', 1),
(14, '2022_10_06_000010_create_patients_table', 1),
(15, '2022_10_06_000011_create_patient_bookings_table', 1),
(16, '2022_10_06_000012_create_patient_examinations_table', 1),
(17, '2022_10_06_000013_create_patient_investigations_table', 1),
(18, '2022_10_06_000014_create_patient_managment_plans_table', 1),
(19, '2022_10_06_000015_create_patient_problems_table', 1),
(20, '2022_10_06_000016_create_patient_risk_factors_table', 1),
(21, '2022_10_06_000017_create_patient_ultra_sound_scans_table', 1),
(22, '2022_10_06_000018_create_ultra_sound_scan_factors_table', 1),
(23, '2022_10_06_009001_add_foreigns_to_booking_settings_table', 1),
(24, '2022_10_06_009002_add_foreigns_to_family_histories_table', 1),
(25, '2022_10_06_009003_add_foreigns_to_patien_followups_table', 1),
(26, '2022_10_06_009004_add_foreigns_to_patients_table', 1),
(27, '2022_10_06_009005_add_foreigns_to_patient_bookings_table', 1),
(28, '2022_10_06_009006_add_foreigns_to_patient_examinations_table', 1),
(29, '2022_10_06_009007_add_foreigns_to_patient_investigations_table', 1),
(30, '2022_10_06_009008_add_foreigns_to_patient_managment_plans_table', 1),
(31, '2022_10_06_009009_add_foreigns_to_patient_problems_table', 1),
(32, '2022_10_06_009010_add_foreigns_to_patient_risk_factors_table', 1),
(33, '2022_10_06_009011_add_foreigns_to_patient_ultra_sound_scans_table', 1),
(34, '2022_10_07_110229_create_permission_tables', 1);

-- --------------------------------------------------------

--
-- Table structure for table `model_has_permissions`
--

CREATE TABLE `model_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `model_has_roles`
--

CREATE TABLE `model_has_roles` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `model_has_roles`
--

INSERT INTO `model_has_roles` (`role_id`, `model_type`, `model_id`) VALUES
(2, 'App\\Models\\User', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `patients`
--

CREATE TABLE `patients` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `reg_no` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `reg_date` date NOT NULL,
  `age` int(11) NOT NULL,
  `gender` enum('male','female','other') COLLATE utf8mb4_unicode_ci NOT NULL,
  `marital_status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `children` tinyint(1) DEFAULT NULL,
  `address` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `reason_for_visit` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pmhx` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pshx` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pre_pap_date` date DEFAULT NULL,
  `pre_pap_result` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pre_uss_date` date DEFAULT NULL,
  `pre_uss_result` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pre_hpv_date` date DEFAULT NULL,
  `pre_hpv_result` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `patients`
--

INSERT INTO `patients` (`id`, `user_id`, `reg_no`, `reg_date`, `age`, `gender`, `marital_status`, `children`, `address`, `reason_for_visit`, `pmhx`, `pshx`, `pre_pap_date`, `pre_pap_result`, `pre_uss_date`, `pre_uss_result`, `pre_hpv_date`, `pre_hpv_result`, `created_at`, `updated_at`) VALUES
(1, 2, 'Eaque tenetur sit adipisci. Itaque cupiditate aut et. Perspiciatis id distinctio impedit et rerum quia.', '1994-08-17', 0, 'other', 'Tenetur et nam fuga minima voluptatem sed. Ipsam deserunt iusto tempora est rerum fugit. Id laborum est voluptas. Debitis aut laboriosam qui cum voluptatem ex dolores.', 0, 'Quia numquam vel velit beatae. Qui reiciendis sunt nesciunt.', 'Est sunt dolores voluptas et quia a. Deleniti necessitatibus facilis repudiandae magnam earum tenetur. Explicabo neque quos doloremque asperiores officiis.', 'Distinctio vitae perspiciatis beatae cum sed voluptatem. Nam molestias rerum iste id illum et. Officiis est quis consequuntur deserunt nihil. Voluptates tempore dolorem quisquam vero reiciendis aut.', 'Molestiae quo inventore cupiditate sed accusantium sint. Error nihil porro doloribus dolor est accusamus sapiente.', '1970-08-28', 'Est nulla voluptates in commodi quas et voluptas. Sapiente minus assumenda velit magni est quo.', '2013-07-29', 'Sed aut dignissimos rerum sunt et. Dolor quidem nobis repellendus recusandae. Officiis aliquam cum in quas aspernatur rem.', '1992-07-14', 'Qui ab dolores quaerat enim dolores facilis voluptate. Adipisci in beatae ut temporibus corrupti ut recusandae. Aut vitae sapiente vel soluta quidem. Illum ab et laborum quasi iure sed voluptatibus.', '2022-10-07 05:34:03', '2022-10-07 05:34:03'),
(2, 3, 'Modi earum neque aut voluptatem dolores inventore. Commodi sapiente rem possimus quis nihil enim similique et. Commodi in eos aut ipsa sit consequatur.', '1987-09-23', 0, 'male', 'Libero quis praesentium quas nisi modi qui. Necessitatibus ut facilis eum dolores iusto rerum. Fuga ut ipsum ipsum et sed architecto sit nobis.', 1, 'Quae sint fugit iusto qui omnis. Quasi quibusdam qui earum tempora aut harum voluptates. Ex quam et repudiandae est animi.', 'Error nostrum praesentium ab eius voluptatem maxime repellat. Officiis dolorum nihil odit hic consequatur. Doloribus quia consequatur eum accusantium velit sunt sint.', 'Et quaerat consectetur nihil maiores et. Magni qui sapiente debitis dolores. Et consectetur pariatur quos aut laborum recusandae non.', 'Laboriosam consequatur aliquid est non qui nobis. Laboriosam error porro quasi impedit enim.', '2018-12-03', 'Ex voluptatem aut laboriosam ex corrupti voluptatibus. In repellat optio consequuntur aut sit aliquam impedit. Illo numquam fugit fugit a. Delectus sit eveniet et illum.', '1970-05-28', 'Sit rerum voluptatum id omnis dolor cupiditate harum impedit. Ut consectetur non iure est officia soluta. Ut debitis dolorum sed dolorem ipsa sint. Consequatur in tempora repudiandae impedit vero.', '1990-10-16', 'Voluptas est temporibus repudiandae perferendis. Quidem possimus sed non et placeat praesentium. Autem consequatur voluptatibus temporibus non commodi modi.', '2022-10-07 05:34:03', '2022-10-07 05:34:03'),
(3, 4, 'Quia ratione autem quisquam. Cum ipsa amet fugiat suscipit molestias illum sit. Qui aliquam non sed facere enim. Occaecati voluptatem consequatur eligendi accusamus rem. Earum doloremque quia doloremque blanditiis. Velit vel incidunt sit ut accusamus.', '2006-08-09', 0, 'male', 'Aut similique eum quo alias porro. Nostrum omnis quas quae ipsa autem ullam. Odio id molestiae aut a accusamus. Quod qui quia in dolorum ut sunt.', 1, 'Nemo placeat error rerum dolores. Ut ut non ut. Mollitia aliquid asperiores porro perferendis id. Officia eligendi qui possimus porro odit quis inventore.', 'Quidem porro aperiam explicabo harum consequatur non. Pariatur mollitia soluta voluptatibus blanditiis beatae iure ut eius. Et inventore repudiandae omnis non tempore est.', 'Quibusdam aut recusandae sunt odio et et. Iure eos eos aperiam delectus et cumque. Impedit sint nobis mollitia ut sed. Sequi in non similique ducimus repudiandae dolorum provident saepe.', 'Dolorum expedita aut incidunt non in. Magni illo sint vel voluptates quidem vero facere et. Et dolore veniam fugit est molestias explicabo atque culpa.', '1995-05-05', 'Ea voluptas quis ut et. Voluptates placeat animi unde et similique.', '2011-06-27', 'Aut dignissimos ad ratione amet. Cupiditate consequatur dignissimos eligendi inventore consequatur dolores. Non accusamus sit est corrupti.', '1975-05-24', 'Fuga quisquam quis ut a repellendus et. Quia animi est impedit omnis impedit impedit. Eligendi officiis tempora numquam explicabo.', '2022-10-07 05:34:04', '2022-10-07 05:34:04'),
(4, 5, 'Voluptatem et ipsum in enim rem quisquam. Iusto numquam assumenda vel eum quam at facere. Eveniet exercitationem corrupti omnis molestiae. Illo et tempora nisi repellendus eum quis aspernatur.', '1998-12-25', 0, 'female', 'Excepturi commodi vitae ex molestiae enim non. Libero quod blanditiis similique debitis ducimus iure. Qui rerum sunt laborum omnis porro odit at. Et aliquam corrupti totam aliquam enim iusto. Qui molestiae nesciunt voluptatem id et.', 1, 'Praesentium cum et non et. Porro et beatae sunt laudantium exercitationem fugiat. Veniam accusantium et dolores non quia. Aut nemo fugit rerum possimus inventore rerum.', 'Ullam et expedita doloremque occaecati doloremque explicabo exercitationem. Et consectetur repudiandae eum molestiae. Aliquid voluptas aut enim laboriosam. Et qui culpa et voluptas.', 'Dolor veritatis assumenda nobis impedit sed nam. Non voluptas soluta aspernatur magni ad totam illum. Dolores exercitationem nesciunt autem aut quidem. Veniam aut optio quod ratione.', 'Dolor autem nostrum deleniti delectus exercitationem minima nobis. Rerum omnis et numquam et. Sunt voluptatem ducimus earum est dolore aliquid.', '2004-11-02', 'Quae earum omnis ipsa nihil. Qui rerum quibusdam est et enim architecto. Dolores blanditiis veritatis aut dolorem.', '2021-05-22', 'Ut explicabo nihil pariatur quia. Atque eos iure molestiae quam quae laborum aut. Vel eum et earum quo architecto iure.', '1973-04-23', 'Atque autem pariatur earum magni. Nisi recusandae consequatur vel unde debitis. Et accusamus maiores minus blanditiis. Repellat aut et odit voluptatum.', '2022-10-07 05:34:04', '2022-10-07 05:34:04'),
(5, 6, 'Quam natus dolorem in exercitationem. Excepturi ut nam vel laboriosam ratione aut aspernatur. Aut quae maiores ullam et. Qui ut et soluta corrupti sunt error omnis. Ex magnam nobis sed ipsum.', '1978-02-21', 0, 'male', 'Eum voluptatem quia aut maiores laboriosam eius. Excepturi nesciunt libero voluptatibus reiciendis. Minima commodi eveniet autem unde mollitia quis. Saepe quisquam saepe accusantium autem sequi consequatur.', 0, 'Cum et qui voluptatem animi. Eaque ab temporibus doloremque sint aut. Velit et corporis corporis at.', 'Natus odit perspiciatis perspiciatis quae et corporis asperiores. Et maiores quam quo et error consequatur qui. Soluta magni vel adipisci dignissimos labore.', 'Voluptatem nesciunt inventore quo porro ab mollitia dolorem. Sit porro nihil et a fugiat esse. Perspiciatis et fuga rerum inventore magnam facere provident.', 'Eos inventore beatae vel. Ex voluptas omnis est suscipit quis voluptates et possimus. Alias sed ratione perferendis harum.', '1997-04-25', 'Repellendus doloribus natus tenetur quam quia. Ipsam tenetur pariatur quia et nostrum nihil perspiciatis. Dolores sint rerum totam aperiam ea nemo. Dolor maxime soluta ratione.', '2015-07-31', 'Et eos nemo reiciendis est tempora suscipit. Dicta qui aut maxime in. Amet quibusdam numquam ut ipsam.', '2018-03-21', 'Id nihil autem quasi vitae. Rerum sint similique magni.', '2022-10-07 05:34:04', '2022-10-07 05:34:04'),
(6, 7, 'Maiores alias veritatis voluptate et sit aut. Qui quaerat voluptatem enim placeat et ratione veniam officiis. Occaecati quaerat et non molestiae labore autem. Sint quasi corporis non quia quis dolore.', '1989-02-16', 0, 'female', 'Unde molestiae et cupiditate fugiat et est. Repellendus quos voluptas aut officia voluptatibus.', 0, 'Nisi est sint et repellat at repudiandae. Ipsum perspiciatis quasi aut sunt.', 'Quae quasi neque commodi similique. Quis eum nobis sequi velit deleniti error aut. Necessitatibus suscipit reprehenderit aut. Enim voluptates rerum qui laboriosam.', 'Aliquid culpa quia modi ex ratione eos impedit sed. Facilis aperiam voluptas velit nulla. Voluptate expedita qui distinctio assumenda quibusdam repellat ut.', 'Et officia iusto nostrum aliquid ullam. Voluptatibus quo omnis fuga. Est ipsa quos blanditiis unde hic repellat. Cum aut magni placeat qui excepturi provident qui.', '1973-06-02', 'Nulla adipisci odio unde qui quis culpa eaque. Praesentium repellat hic harum velit perferendis nam facere. Modi quaerat pariatur qui earum ad impedit quibusdam labore. Quia vel cum quod quas atque.', '2010-12-03', 'Laborum dolore inventore quas alias assumenda facilis. Debitis vero voluptatibus laudantium nobis omnis beatae.', '2002-03-14', 'Et repudiandae rerum vel. Aliquid at molestiae sed non dolorem. Culpa exercitationem suscipit ut quis dolorum animi dolor veritatis.', '2022-10-07 05:34:06', '2022-10-07 05:34:06'),
(7, 8, 'Officiis omnis vel autem et quisquam eligendi. Qui dolorem cum aperiam necessitatibus sapiente non. Temporibus minus earum praesentium nisi at illo.', '1997-04-22', 0, 'male', 'Illo id temporibus tempore blanditiis. Eos odio dolores aliquam. Sit quos illo architecto in. Unde est est quia voluptatem quos ut. Esse qui maiores quidem consequatur consequuntur.', 1, 'Nesciunt quam tempora enim tempora. Et laudantium qui doloribus et accusamus doloremque. In provident ipsa eligendi explicabo.', 'Ut quisquam perspiciatis est in. Fugiat id optio qui consequatur voluptas. Cupiditate ut minima quisquam laboriosam et. Vero facere ad reprehenderit praesentium esse.', 'Eos minima iure eum aut non dolores. Assumenda consequatur et aut fugit facilis ut molestiae. Molestiae sint repudiandae dolorem aliquam perspiciatis quos. Eius sequi ducimus sit quae nulla animi.', 'Sunt numquam quis incidunt ratione. Sed dicta autem repellat eligendi iure. Voluptatum aliquid eos tempore voluptatem. Id et dolores dolor aliquid.', '1990-09-12', 'Et quaerat itaque optio dolorem eos officiis. Sint molestias eum omnis et nemo eos nobis rerum. Qui dolorem consequatur saepe autem eius. Non placeat corrupti iste expedita enim nostrum.', '1987-11-27', 'Unde neque vel corrupti inventore incidunt animi reprehenderit corporis. Voluptatem non similique maiores.', '1998-12-15', 'Quibusdam animi qui omnis magni occaecati perferendis quis. Error minima fugit explicabo pariatur atque aspernatur est. At modi dolores maiores sit.', '2022-10-07 05:34:07', '2022-10-07 05:34:07'),
(8, 9, 'Provident voluptatem aut quis. Rerum rem rerum ea quod. Iste et est ut expedita natus.', '1979-01-28', 0, 'other', 'Eaque iure vero in nisi ipsa. Saepe dolorum id itaque hic. Omnis voluptatem ut tempore nihil ratione tenetur qui. Tenetur alias magnam deserunt et rerum. Deleniti voluptatem nemo accusantium alias. Deserunt minus veniam et unde unde quidem.', 1, 'In hic aliquam eveniet maxime quidem. Debitis illum amet eum voluptatum. Aspernatur sit consequatur harum iste id.', 'Est quia qui soluta ut. Est dolores labore quasi totam accusamus quisquam. Nemo vitae aspernatur quaerat tenetur quaerat sit.', 'Alias voluptas perferendis voluptatibus et asperiores totam repellat. Fugit doloremque quisquam quod dolorem aut excepturi. Est illo illum esse est. Magnam reiciendis quo deserunt cum.', 'Dolores porro qui voluptates ipsa omnis laborum. Voluptatem necessitatibus exercitationem dolores perspiciatis rerum ut nobis. Harum aut sint maiores quibusdam eligendi voluptas architecto.', '1982-07-13', 'Vero dicta quaerat enim cupiditate in deserunt nobis. Vero quibusdam temporibus sapiente voluptates natus et quasi. Blanditiis dolores impedit sapiente perspiciatis voluptatem rerum consequatur.', '1985-12-13', 'Et facere quis quia eos quis. Voluptates optio est cupiditate non optio iusto ut esse. Et aperiam adipisci saepe impedit iure ut adipisci. Officia possimus ex libero accusamus ipsa odit.', '2018-04-19', 'Officiis non sed animi. Aut atque quos fugiat perspiciatis explicabo vel. In in dolor ab. Molestias earum consequatur et recusandae inventore. Quia eum a ipsa nostrum dolorem recusandae.', '2022-10-07 05:34:07', '2022-10-07 05:34:07'),
(9, 10, 'Enim ipsum exercitationem quod. Et omnis nemo eveniet dicta est. Natus quod repellat eos aut autem nam et. Consequatur cum cumque placeat quaerat perspiciatis tenetur.', '1981-11-23', 0, 'other', 'Minima nobis similique molestiae voluptate tempora modi perferendis. Aut voluptas veniam quibusdam sint eum libero. Maiores qui excepturi eos temporibus modi.', 0, 'Magni hic sapiente beatae architecto reiciendis ab expedita voluptas. Aut voluptas vitae cumque aliquam exercitationem laboriosam. Nobis suscipit quas vel cumque quis voluptatem ut.', 'Suscipit labore et aut. Magni vero animi suscipit vel. Et et perspiciatis odio voluptas qui et.', 'Nobis esse eius aut dolor fugiat quibusdam odio. Debitis harum nesciunt omnis. Dolor nobis reprehenderit sunt tempore odit itaque incidunt cumque.', 'Dolores et asperiores tempora nisi in eligendi. Non sunt et et odio veritatis odio. Dolores quas aut voluptas voluptas cumque accusantium. Praesentium rerum et quia et sunt quia est.', '2003-08-30', 'Et eligendi exercitationem vitae quia. Quae recusandae praesentium tempora animi. Vel vitae neque veniam explicabo. Et quas quaerat doloremque quasi dolor similique.', '1996-06-27', 'Rerum optio unde ea id aliquid. Ut occaecati delectus ut exercitationem est. Voluptas et facilis et aut rerum asperiores. Ullam provident libero omnis non. Et dicta praesentium eum saepe.', '1978-12-21', 'Voluptatem vero sed quas facere voluptatibus nemo recusandae commodi. Doloremque quae voluptas vel porro. Qui sed voluptatem neque eligendi vel. Odit exercitationem suscipit sed omnis.', '2022-10-07 05:34:07', '2022-10-07 05:34:07'),
(10, 11, 'Voluptatum cupiditate asperiores officia et. Quis ab velit quidem voluptatum quis. Voluptatibus ut nulla laborum aliquid.', '2003-02-11', 0, 'other', 'Praesentium distinctio reprehenderit earum ratione vel. Possimus neque ea ut enim amet quis et error. Vel rerum dolorum nulla est saepe voluptas id. Voluptatem libero occaecati eum dolore quidem sed ipsum et.', 0, 'Veritatis ullam dolore occaecati. Asperiores quas rerum eaque eum voluptas. Similique laudantium qui fugiat sed reiciendis laudantium. Laudantium cumque inventore nam odit voluptas enim at.', 'Laboriosam deleniti dolorum veniam odio similique. Qui qui et quibusdam et suscipit totam odio. Voluptatibus error aspernatur commodi ea possimus. Qui ea aut aut consequatur voluptatem.', 'Perferendis asperiores voluptatem aspernatur et quo necessitatibus omnis quo. Quia aperiam accusamus non enim non velit. Placeat architecto officia accusantium repellendus.', 'Eum iusto reprehenderit quod et. Ab eligendi ut a quo sed magni. Quia molestiae consequatur vero impedit ea voluptatem.', '2018-05-07', 'Sit consequuntur pariatur eum nam autem voluptatibus. Dolor quidem labore fugit. Hic et quasi voluptatum.', '1991-07-07', 'Quaerat eos ex tenetur et harum harum enim. Esse maiores ab in consectetur nobis excepturi minima. Laudantium sint rerum numquam ipsam eum dolorum et.', '1990-01-06', 'Qui fugiat enim doloribus accusamus adipisci quia eligendi nihil. Officiis alias deleniti placeat ratione animi sed. Dolor ullam et animi officia tenetur animi deleniti.', '2022-10-07 05:34:07', '2022-10-07 05:34:07'),
(11, 12, 'Exercitationem omnis fugit non quisquam. Beatae dicta sunt magnam officia. Temporibus dolor dolor at ipsum placeat facilis et. Fugit voluptas vel saepe quis aut cum veniam.', '1980-01-18', 0, 'other', 'Et rem non expedita tempora expedita porro. Dolorem nostrum provident voluptates tempora.', 1, 'Est et provident provident eum autem. Quae nobis vel mollitia ullam iure quis. Ratione atque earum non.', 'Quis odio dolore eius. Provident enim et doloribus ratione ut iste magni repellendus. Necessitatibus sit ut autem et tempora occaecati enim. Consequatur dolores qui sapiente corporis.', 'Omnis est harum molestias illo ut nihil ut. Ratione aut quos iste voluptate et repellendus. Illum blanditiis ratione mollitia sit. Inventore laudantium ea itaque aspernatur reprehenderit.', 'Consequatur harum dolorem ullam nisi. Est velit ducimus vitae sint ullam et.', '1985-03-29', 'A qui amet est. Sunt et quasi quo consequatur nesciunt ex. Earum delectus qui quos ipsam fuga beatae magnam eius.', '1990-10-02', 'Quis ab est maxime non ut doloremque. Laborum quo dolor sed possimus dignissimos officiis recusandae aspernatur. Temporibus nobis eveniet voluptates soluta sed.', '1997-07-25', 'Sit magni expedita unde exercitationem aut. Nobis illum ea eum culpa aspernatur. Vel mollitia est dolor fugit saepe reprehenderit non. In ut occaecati est quod enim. Ea voluptatem quam quas sunt cum.', '2022-10-07 05:34:08', '2022-10-07 05:34:08'),
(12, 13, 'Nisi enim aut totam adipisci. Id et rerum autem. Quo perspiciatis non quaerat veritatis veritatis eum exercitationem. Ea ipsum qui ea consectetur dolores temporibus.', '1989-09-12', 0, 'other', 'Doloremque ipsum reprehenderit aut rerum sint. Amet omnis minus quis quas distinctio voluptas. Ut placeat quidem sed.', 0, 'Perferendis qui rerum optio in et reprehenderit. Non dolor dolor velit ut error ea. Explicabo minima eos aut.', 'Maxime sunt eveniet quod. Est reprehenderit dolores non facilis ab est cum. Sed ea deleniti voluptatem.', 'Quasi cum est numquam. Culpa id at magni odio dolorem est vel non. Aperiam itaque aliquam ut illum ipsam. Et quia autem omnis a.', 'Sed et ut rem ducimus veritatis fuga aliquam adipisci. Esse quod nam cupiditate eveniet ipsa delectus. Ea occaecati corporis atque voluptas.', '1981-12-15', 'Dolore aut fugiat modi voluptas soluta. Non molestiae magni doloribus voluptas explicabo consequatur vitae.', '2000-08-10', 'Dolor placeat pariatur nesciunt quis aut. Itaque quia quos veritatis hic cupiditate aut voluptatem. Provident doloribus voluptas vel quas earum est sit. Mollitia et commodi facilis aliquid ex enim.', '1995-12-26', 'Repellendus omnis consequatur accusantium et voluptatem aut. Qui inventore est aliquam. Distinctio illo nemo aut repellat.', '2022-10-07 05:34:08', '2022-10-07 05:34:08'),
(13, 14, 'Repellat accusantium laboriosam corrupti et rerum fugit. Voluptates cumque aut molestias ex. Mollitia esse fugiat voluptas in. Quis unde omnis fugiat facilis et voluptatem.', '1992-11-01', 0, 'male', 'Dolor consequuntur unde iure libero possimus est. Labore excepturi illum eos molestiae. Impedit perferendis maiores debitis quibusdam autem ipsum.', 0, 'Necessitatibus non ullam deserunt cum et provident. In rerum delectus adipisci eum neque. Et ut adipisci ut et. Fuga similique fuga magnam nisi aperiam beatae.', 'Eius est eveniet quia est nisi culpa rerum. Accusamus quisquam odit aut officiis vel qui dolorem ab. Aut eaque dolor fuga et qui et saepe.', 'Officia officiis enim reprehenderit vero veniam. Et sit ut voluptas autem illum autem in. Nostrum magnam natus architecto quis corporis quas non.', 'Enim unde ad laboriosam nemo non quia. Fuga asperiores ipsa voluptas.', '1976-10-28', 'Inventore similique voluptatum reiciendis asperiores. Nam ipsum id consequatur rerum. Facere eaque vitae veniam dolor aut earum dolor.', '1976-10-01', 'Et occaecati rerum harum. Eligendi architecto totam velit ut debitis.', '2001-09-19', 'Asperiores voluptatem voluptates consectetur cupiditate. Maiores facere architecto sunt maiores architecto corporis. Repellendus et eum quia aut neque.', '2022-10-07 05:34:08', '2022-10-07 05:34:08'),
(14, 15, 'Optio eum itaque et praesentium. Accusantium tempora autem omnis delectus natus architecto. Rerum harum excepturi fuga totam. Quo soluta tenetur earum eos. Adipisci earum consequatur velit facere. Dolorem qui id rerum enim doloremque ratione.', '1981-09-13', 0, 'other', 'Numquam provident sed doloremque qui nam ut. Voluptatem enim ullam iure sequi vitae. Harum animi assumenda ut nam qui ut non. Laborum nulla harum fugit occaecati ea qui.', 1, 'Assumenda explicabo aut sed praesentium tempora ut architecto. Laudantium velit explicabo temporibus reprehenderit. Quae eius voluptatem repellendus sed ut est error ex.', 'Eos sunt fuga aspernatur rerum qui. Accusamus amet suscipit est.', 'Aut aliquam quis accusamus veritatis et. Saepe corporis beatae ea inventore architecto ut harum. Doloremque at modi quis optio id. Voluptatem nam sed laudantium voluptatibus sit.', 'Distinctio voluptas est cumque natus doloribus velit. Autem molestias quasi aperiam. Unde cum iusto consectetur voluptates corporis. Vitae provident sunt sequi.', '1997-04-15', 'Repellendus repudiandae consequatur eligendi pariatur aut eligendi. Error et magnam optio alias est quia. Officia illum et corporis velit earum dolor sequi. Nostrum occaecati illum pariatur ut.', '2017-12-10', 'Recusandae beatae fuga minima unde natus officiis ipsum. Facilis voluptas ea sit totam sapiente quia repudiandae. Quo provident in eos et nulla veniam.', '1981-11-30', 'Quia cupiditate assumenda vero. Voluptatem consequuntur dolorum tempora occaecati ex. Maiores nulla velit omnis.', '2022-10-07 05:34:08', '2022-10-07 05:34:08'),
(15, 16, 'Distinctio voluptas consequatur ea maxime culpa. Earum dolores autem fuga in fugiat. Ratione cum voluptatum soluta alias. Recusandae rem delectus maxime vitae.', '2006-03-28', 0, 'male', 'Omnis accusantium mollitia similique consequatur eligendi. Pariatur voluptas neque necessitatibus voluptas ut molestiae. Dolores et labore ab deleniti unde explicabo.', 0, 'Labore quia repudiandae possimus deserunt voluptate maxime. Deserunt animi dolor aliquam rem ullam cum veritatis debitis. Harum dolor blanditiis omnis placeat. Et saepe molestiae quos maxime.', 'Incidunt dolores autem saepe veritatis alias molestiae ad consequatur. Temporibus voluptatem sequi quis est aut nisi enim.', 'Voluptate sunt voluptatem assumenda voluptatem quia impedit sapiente. Dolorem natus cupiditate amet aperiam. Quam autem consequatur veniam. Aut ut delectus nihil alias rerum.', 'Aspernatur dolor excepturi enim nesciunt animi. Reprehenderit et reprehenderit dolor. Fuga non explicabo tempora rerum nihil aut id.', '1995-06-01', 'Qui et cupiditate esse molestias rem. Vero beatae atque esse culpa quo velit sapiente. Dolore quas eum quos consequuntur nihil. Incidunt sunt quia debitis.', '1971-04-20', 'A voluptatem ab neque sed nemo ducimus. Aliquid ut facere fugiat id adipisci voluptate. Qui rerum rerum consequatur et molestiae voluptatem.', '2018-04-26', 'Harum libero sed labore accusamus eveniet architecto aperiam. Molestiae facere iusto ab quod error ad qui. Sequi sit sed voluptatem expedita eum.', '2022-10-07 05:34:08', '2022-10-07 05:34:08'),
(16, 17, 'Quidem accusantium nihil reiciendis autem nihil magni molestiae. Non delectus aut sit aspernatur consequatur. Corporis sint nihil eveniet laudantium.', '1990-12-21', 0, 'other', 'Nesciunt deserunt amet nihil distinctio pariatur aut. Veniam libero et fugiat nobis. Similique et qui reiciendis at minima vero. Voluptates aut qui aspernatur sint.', 0, 'Velit nemo ducimus quia ut doloremque ut quae aut. Mollitia omnis blanditiis asperiores. Et rem id voluptate fugiat recusandae rerum. Sapiente eum perspiciatis et doloribus at voluptatem.', 'Fugit sed officiis eveniet beatae esse sed. Excepturi alias quidem et odio. Rerum id minima reprehenderit at adipisci. Repellendus rerum qui fugiat qui tempore illum fuga.', 'Rerum optio dolores similique. Nam aliquam omnis voluptatem rem debitis pariatur. Fugit recusandae repellendus voluptatum et. Ut beatae autem quas velit quia aliquid.', 'Iste doloribus sed quo ea debitis et alias non. Aut autem laborum nam sed sit. Qui in aut in.', '2004-02-25', 'Est aut fugit est. Maiores et voluptatem eligendi necessitatibus magni eos. Repellat architecto labore sit exercitationem soluta animi. Eius consequatur exercitationem nostrum nihil non.', '1997-06-12', 'Magnam voluptates molestias odio quis illum temporibus. Magni et voluptatem aut tenetur dolor ut quas. Beatae assumenda fugiat aut accusamus. Et sunt quas porro molestiae perferendis cumque.', '1984-02-18', 'Exercitationem in animi rerum libero. Doloribus illo tempora aut dolores. Quod pariatur earum voluptatem odio quis. Porro incidunt omnis aliquid consectetur soluta neque.', '2022-10-07 05:34:08', '2022-10-07 05:34:08'),
(17, 18, 'Aut dolores laudantium consequuntur exercitationem culpa molestiae in sequi. Quas sint et illum. Est maxime aliquam debitis cupiditate sit.', '1971-11-16', 0, 'female', 'Dignissimos dolore iure error sed. Mollitia distinctio velit saepe. Eaque ducimus voluptatem autem. Error cumque sequi repellendus. Corrupti illo nisi facilis recusandae possimus eius possimus.', 1, 'Doloribus velit in maiores. Recusandae excepturi corrupti qui et illum neque. Rerum dolor omnis beatae.', 'Ab pariatur dolorem perferendis aut et repellat. Laudantium distinctio ut alias nam.', 'Tempora inventore quasi similique repudiandae dicta est. Beatae aut sunt reiciendis ipsum.', 'Blanditiis iure nihil dignissimos voluptate nihil enim. Vitae soluta reiciendis excepturi. Dolore eos iure fugiat commodi ea omnis.', '2012-10-12', 'Ipsam molestias aspernatur et odio corporis ad. Et possimus exercitationem corrupti libero et quas impedit. Et mollitia minima repellendus ea.', '2000-07-24', 'Quo et et praesentium voluptatem aliquid et ea. Rerum cumque eos omnis explicabo. Dolores vero debitis voluptatum facere aut harum.', '2005-04-18', 'In aut et ut et. Perferendis quisquam numquam vel aliquid. Earum tempora nulla dolores eos doloremque repudiandae fugit. Placeat omnis est sunt soluta.', '2022-10-07 05:34:09', '2022-10-07 05:34:09'),
(18, 19, 'Nihil ipsa sunt quisquam delectus atque est adipisci. Assumenda aspernatur quo qui. Iusto error facere laboriosam commodi quia rem corporis repellendus. Nihil rerum praesentium quia provident beatae.', '1980-09-28', 0, 'female', 'Enim animi itaque et quos corporis sapiente aut. Quibusdam ad autem cupiditate et. Cum sint et repellendus voluptatem animi est enim. Odio odio suscipit qui velit.', 1, 'Occaecati sit impedit quibusdam. Ullam et eaque rem ut rerum quos. Optio corporis adipisci unde id provident. Eum vero voluptas beatae cumque ut ipsum.', 'Voluptate est ratione nesciunt quis. Ut et maxime est quia dolores similique. Eos dolorem sint sed expedita. Aut incidunt maiores ipsum.', 'Est neque fugit modi neque. Cupiditate pariatur sed omnis quis. Voluptatum ipsum atque vel omnis laboriosam. Qui qui numquam consequatur modi autem et. Dolor ut quo blanditiis ut aut eaque.', 'Ad debitis cum tenetur omnis eveniet eligendi voluptas. Quo illum omnis voluptas illo est. Exercitationem aut esse quod. Iusto in est occaecati temporibus.', '2014-10-12', 'Qui numquam quos est iure eveniet et impedit ut. Est neque consequuntur voluptas incidunt atque omnis. Et asperiores provident et.', '2021-02-20', 'Eligendi aut occaecati architecto minus blanditiis sed quia. Qui eius itaque at provident velit. Totam qui in ut quia et velit.', '1997-04-27', 'Quia consectetur at sed architecto officiis adipisci. Ipsa exercitationem qui odio officia minus illum eum alias. Est omnis error itaque aut.', '2022-10-07 05:34:09', '2022-10-07 05:34:09'),
(19, 20, 'Eveniet laudantium autem eligendi iure aut quis voluptas. Quia non iure praesentium natus ut. Sunt qui beatae similique nostrum dolor. Sed animi aut temporibus non corporis dignissimos. Autem est sunt occaecati adipisci voluptatem tempora.', '1985-03-12', 0, 'male', 'Aspernatur quas error possimus consectetur id blanditiis. Sit nobis ut dolores asperiores dolor enim. Esse aut sunt fugit sed.', 0, 'Dolore nesciunt qui sit veniam tempora labore rerum. Ex autem modi dolor libero eveniet aut. Omnis exercitationem explicabo incidunt excepturi vel quia. Ratione nihil suscipit qui aliquid sed illum.', 'Consectetur non et quos repellat dolores non. Id libero sint quis vero consequatur dolor dolores quia. Quo voluptas iure explicabo et.', 'Ducimus quisquam dolorum aut voluptas. Corporis et quasi ea eligendi fuga hic fuga. Velit consequatur ipsa sunt id ad assumenda ut. Qui quia et consequatur quos quam sunt ut.', 'Corporis et non dolores consectetur repellat sed natus. Doloremque enim quaerat sed voluptates illo corrupti. Quia tenetur quae sunt pariatur eos qui. Saepe ut officiis et sed doloremque sunt.', '1973-12-31', 'Dolorem ut dolores reprehenderit culpa. Nisi aliquam et vel. Ea officiis excepturi hic nemo est doloremque quibusdam.', '1998-12-02', 'Maiores labore sequi neque aliquid asperiores qui neque. Mollitia qui sint aut. Aut quas illum eos aut ut nam eaque. Odit quibusdam est laudantium nesciunt voluptas eos.', '1979-10-18', 'Sapiente velit voluptate quisquam vel numquam provident. Rerum numquam omnis sit praesentium aliquam eligendi eligendi. Eaque architecto omnis non ad et.', '2022-10-07 05:34:09', '2022-10-07 05:34:09'),
(20, 21, 'Et aut harum dolorem consequatur saepe. Qui aut itaque qui laboriosam. Sunt asperiores sapiente similique optio labore. Placeat dignissimos itaque quibusdam nihil neque.', '1983-09-12', 0, 'female', 'Minus pariatur dolores odio assumenda illo. Et aut quis animi dolor sequi non incidunt. Aliquid eos animi odio vero quisquam dolor.', 1, 'Quia qui dolores unde. Omnis dignissimos harum debitis architecto quo esse minus et.', 'Nihil consectetur aut inventore ducimus consequatur ducimus delectus. Magnam molestiae non voluptatum repellendus vero hic. Enim quia omnis excepturi ullam velit.', 'Est eum fuga iusto ipsa. Quos ullam fugit voluptas molestias. Sit iure aperiam occaecati eveniet cupiditate necessitatibus. Voluptatem impedit totam excepturi molestias.', 'Officia magnam et vero ut aut minus optio. Incidunt et veritatis qui sapiente non. Non odio error facere ipsa voluptatem.', '1974-12-06', 'Aut eaque voluptatem fuga. Explicabo et qui quod sed numquam sunt modi. Aut ea quibusdam fugit. Quo voluptate molestiae aliquam alias aperiam aut aut molestiae.', '1981-04-17', 'Tempore amet aliquam aut est dolore esse eligendi. Et odio sint temporibus et voluptas. Animi sequi et omnis veniam aut soluta est. Nobis occaecati nostrum incidunt ipsam fugit esse sit.', '2021-05-13', 'Qui quo suscipit exercitationem earum quia dolore. Magnam doloremque itaque dolorem molestias. Quia distinctio magni autem eveniet ut expedita qui. Aut ducimus debitis deleniti autem.', '2022-10-07 05:34:09', '2022-10-07 05:34:09'),
(21, 22, 'Quia maxime ratione at ut itaque dolorem tempore. Autem corporis sapiente facere ut pariatur vel. Exercitationem in ad aliquam illo ut rerum cumque. Nisi dignissimos corporis deleniti velit omnis aut. Eveniet architecto quis laudantium quia.', '1987-03-21', 0, 'other', 'Ea expedita voluptatem voluptatem numquam. Voluptas debitis est commodi rerum. Et ad aut in repellendus qui qui voluptas.', 1, 'Explicabo doloribus quia qui delectus voluptas repellat quo. Aliquam aliquam dolor vel et. Aut quo voluptas sint fugiat nisi maxime animi provident. Dolorum omnis et at nisi.', 'Aliquam vitae quasi repellat corrupti eos. Dolorem in inventore ut sed. A assumenda ea dolor incidunt veritatis quia.', 'Officiis alias vero a molestias non quia. Aut aliquam tempora quidem rem et a. Eos minima eligendi nobis vitae. Aut ut sapiente dolor sint voluptas.', 'Et voluptatem nobis iure ut. Quia ut repellendus animi ut. Fugit iste nesciunt perferendis deserunt et pariatur molestias.', '2006-03-13', 'Dolor et quasi incidunt. Aut rerum qui dignissimos est suscipit ut. Repellat labore corrupti eum.', '2019-12-14', 'Et qui natus exercitationem molestias. Ipsam voluptate omnis cumque quod non eveniet. Officiis voluptas et sequi impedit. Architecto tempore dolor quia iste veritatis.', '2003-01-01', 'Accusamus et animi dolore quidem error. Ab natus est laborum quo. Animi eum esse eos qui perspiciatis.', '2022-10-07 05:34:10', '2022-10-07 05:34:10'),
(22, 23, 'Odio officiis et sit id. Aut laudantium nulla natus maiores ut. Consectetur nisi recusandae ut perferendis. Adipisci velit voluptatem praesentium.', '2012-04-09', 0, 'female', 'Suscipit aut est repellendus nihil nihil amet perferendis praesentium. Sed perspiciatis iure culpa et eligendi. Ex aut quas incidunt dolorum dolore voluptates veritatis rem. Aperiam dolor provident ut nulla voluptatem fugiat et.', 0, 'Et mollitia tempore molestiae sit reiciendis vitae assumenda. Sit pariatur numquam magnam velit explicabo. Aut consequatur architecto nisi ut. Molestias ipsam dolorum accusantium.', 'Minima nihil reprehenderit ea ut. Earum deserunt quo saepe enim hic. Eaque nesciunt sit est aut aut nobis. Voluptatem quia numquam quo sit dolor est aut.', 'Atque qui et voluptatem ullam. Recusandae ea harum soluta non necessitatibus hic harum. Velit quia voluptatibus consequatur a velit.', 'Nihil ipsum soluta sunt doloremque porro accusamus. Possimus aliquid sed pariatur doloribus. Et eos est aliquid vitae dolores eveniet. Qui modi expedita culpa earum.', '2017-11-18', 'Corporis repudiandae exercitationem rerum dolore. Assumenda hic et molestias. Qui nemo rerum quaerat laboriosam in ut optio. Deleniti qui est nam nam.', '1979-03-03', 'Quidem omnis error eius facilis quas. Voluptatem et et quis nesciunt et sit. Ratione id sed ad eum. Omnis cumque explicabo sapiente non minus nulla.', '1989-02-05', 'Et accusantium qui eligendi architecto nobis. Est optio dolore inventore commodi. Reprehenderit enim assumenda et et. Quas tempore nisi velit consequatur voluptatem cumque sunt.', '2022-10-07 05:34:10', '2022-10-07 05:34:10'),
(23, 24, 'Qui eos debitis qui a sed. Voluptatibus molestiae in qui. Eaque perspiciatis nobis et aut quibusdam nisi est.', '2000-10-15', 0, 'female', 'Dolores eligendi aut recusandae aut repellendus sint. Ex dicta adipisci et deleniti voluptatem. Et fuga hic rerum culpa nulla. Reprehenderit commodi laboriosam quasi ut exercitationem fugit qui.', 0, 'Aut harum nesciunt in quos. Numquam eos velit tempora libero vel sit unde. Neque vel adipisci omnis eum architecto. Fugiat dolorem autem cum dolorum qui. Et aut sed unde sunt.', 'Minima adipisci id natus doloribus. Qui fuga facilis sunt quia perspiciatis. Tenetur maxime ut eveniet illo enim eveniet ea laudantium. Dolorum dicta iusto tempora commodi quas animi velit.', 'Doloribus id et iste impedit sit aut. Qui autem ipsa laboriosam alias.', 'Minus magni ut id molestias illum. Ea libero enim et laudantium. Maxime ipsum accusamus est hic laboriosam. Sed officiis nostrum natus voluptas ad.', '1997-06-29', 'Nam laborum nostrum qui officia sunt ab quasi. Magnam nesciunt repellendus illum aspernatur quidem aut reprehenderit delectus.', '2021-09-14', 'Vel aut ea earum iste facere velit nisi. Est blanditiis adipisci veritatis fugiat quos exercitationem. Perspiciatis dolorem voluptatem dolor pariatur rerum vero. Illum et voluptatibus corporis ut.', '2012-02-09', 'Delectus temporibus non sit quidem fugiat voluptatem dicta corporis. Enim quia excepturi asperiores cum placeat commodi voluptatem iure. Asperiores deserunt voluptatem dolor.', '2022-10-07 05:34:11', '2022-10-07 05:34:11'),
(24, 25, 'Tempora iusto odio sit. Quis et deleniti deleniti recusandae reprehenderit. Cupiditate quis nihil qui et. Non ab dolores rem nesciunt sed temporibus magni. Ea non consequatur totam tempora sequi. Eum hic quae nisi.', '1988-11-26', 0, 'male', 'Numquam earum dignissimos fuga quam non. Sunt dignissimos asperiores quaerat magnam deleniti alias. Impedit aut et veniam corrupti accusantium.', 0, 'Est voluptas voluptatem eos aut id distinctio atque. Dolorem distinctio ut qui. Libero vel animi impedit repellendus eaque nesciunt.', 'Voluptatum illo modi illum harum. Et ut earum in sunt. Quos omnis minima voluptatem. Accusantium voluptas quam odit ullam est rerum ut sit.', 'Tenetur aspernatur eius accusantium ad distinctio. Ut architecto impedit quasi provident quo nostrum. Perferendis dignissimos quam ipsum molestiae.', 'Provident ratione doloribus reprehenderit laboriosam. Pariatur magnam nihil fugiat ut eveniet est.', '1991-02-24', 'Modi repudiandae et earum magnam optio reprehenderit. Adipisci et quo cupiditate ad quis provident in. Et modi qui consectetur nobis id optio delectus ab. Et quis fuga maxime optio.', '1994-04-16', 'Optio autem cupiditate odit esse rerum nihil. Vero iusto est provident rerum consectetur beatae ut rerum. Ut nisi nihil necessitatibus quos optio. Sit sed dolor exercitationem.', '2000-08-01', 'Maxime inventore id omnis sint. Optio est omnis suscipit commodi. Totam corrupti harum fuga.', '2022-10-07 05:34:11', '2022-10-07 05:34:11'),
(25, 26, 'Incidunt facilis qui expedita aut iusto beatae iure. Ullam sunt sit amet ad. Deserunt aut odio assumenda corrupti consequatur nulla id. Et rerum aspernatur non tempora est alias.', '1977-06-17', 0, 'female', 'Sunt excepturi eum eius atque voluptas quos. Eos quod fugiat reiciendis velit. Ab ut eos saepe adipisci quia.', 0, 'Ut rerum nihil et repellendus repellendus inventore eum. Quod non qui corrupti ex voluptatem fuga dolores voluptatum. Quia aspernatur ducimus ratione a earum. Ea non officiis ut ea molestias fugiat.', 'At animi et occaecati vel vitae quis. Porro qui eos vel et. Consequatur illum voluptatem ipsam id sed eius maiores quos. Repudiandae tempora veniam velit repellendus enim illo autem.', 'Rerum qui rerum sunt illum sapiente quis ipsam. Dolore beatae quia eum enim. Non doloribus qui porro.', 'Hic aliquid minus itaque labore sequi quia consequatur. Doloremque eaque esse asperiores molestiae.', '1971-07-20', 'A earum unde quia ea. Qui cum assumenda sunt itaque ut facilis fugiat. Reprehenderit voluptas dolore a odio hic quae. Quia saepe neque repellendus labore nemo et sed.', '2017-02-02', 'Molestias eligendi fuga ut iure a est ipsa. Tempora explicabo ipsum voluptatibus et nihil quas. Soluta harum nesciunt pariatur voluptas et eius.', '1978-07-28', 'Accusantium dolores officiis ut asperiores. Rerum consequuntur tempore repellendus assumenda. Omnis dolorem sequi ab non eos.', '2022-10-07 05:34:11', '2022-10-07 05:34:11'),
(26, 27, 'Molestias quos et unde at est aut. Qui quis sed qui consequatur consequuntur perspiciatis velit. Maxime mollitia repudiandae vero error aperiam aut et. Asperiores aspernatur excepturi neque corporis.', '1997-03-16', 0, 'male', 'Non in temporibus culpa reiciendis sint magnam. Eligendi ullam aut quam voluptatem. Voluptatem odio ea assumenda nostrum distinctio aut eveniet pariatur. Modi dolore culpa neque nisi ea vero qui. Velit minus voluptas accusamus error.', 1, 'Nihil aut ad voluptate voluptas voluptas adipisci omnis. Hic aut aut in neque. Quis rerum cum reiciendis tempora inventore natus aliquid.', 'Magni cum voluptatibus enim facere non. Fuga saepe quia et ut. Non iusto nesciunt molestiae corrupti. Porro illo temporibus cumque asperiores totam vitae.', 'Nulla harum voluptatum eius et vitae rem consectetur. Esse quidem voluptatem sed numquam repellendus. Non dolor dolorem placeat ipsam assumenda et provident ut. Odit tempore expedita aut rerum.', 'Harum alias maiores omnis qui minus. Et totam libero odit in. Ad sed voluptates et et perspiciatis vitae officia.', '2005-07-05', 'Sunt qui quaerat libero exercitationem enim. Sed veniam laboriosam est consectetur aperiam ipsa pariatur expedita. Cum deserunt voluptatem ducimus voluptatem.', '2002-03-03', 'Non et quasi quia aut quasi ut. Omnis voluptas reprehenderit est atque reiciendis natus excepturi. Amet qui asperiores iusto totam sit ducimus provident. Est accusantium hic non tenetur sed qui.', '1972-08-31', 'Labore ad cupiditate est dolorem id quasi. Amet in earum corrupti possimus qui laudantium.', '2022-10-07 05:34:11', '2022-10-07 05:34:11'),
(27, 28, 'Consectetur iure omnis quasi ipsam eius ipsum sunt blanditiis. Excepturi laboriosam fugiat asperiores sit pariatur quo molestias. Et odit blanditiis repellat minus et occaecati. Amet eligendi sed suscipit.', '2009-12-08', 0, 'female', 'Est voluptate sed voluptatum quisquam aspernatur ducimus. Cum corporis qui consequatur doloremque. Occaecati quia autem repudiandae labore. Voluptates ea quisquam voluptas exercitationem exercitationem expedita itaque.', 0, 'Dolores eum impedit nesciunt fugiat id ut. Repudiandae voluptatem eos sunt et. Delectus illo voluptatem aut veritatis voluptatem. Ullam necessitatibus omnis recusandae perspiciatis.', 'Dignissimos est sit quos sit rem debitis omnis reiciendis. Temporibus facere molestiae incidunt. Odio minima omnis nulla esse vitae.', 'Ut in adipisci totam aut itaque expedita ullam. Molestiae temporibus ipsa vel sed. Ipsum perspiciatis id accusamus molestiae amet eveniet.', 'Explicabo enim quos tempore. Iste aut quos sapiente voluptatem in. Sunt tenetur in non eos voluptas.', '1987-07-10', 'Laudantium quisquam accusantium et et. Numquam temporibus totam aut omnis. Repudiandae esse autem optio et eos odit commodi. Sed doloremque numquam voluptatem sed voluptas aperiam vero sed.', '2000-10-02', 'Laborum molestias vel nam omnis sunt. In officiis repellat qui dolor ex. Neque sed in sit quos.', '2006-12-14', 'Dolores itaque ut sit distinctio sed. Atque quod expedita adipisci error. Veritatis ab qui sed maxime necessitatibus. Laborum sequi error excepturi veritatis.', '2022-10-07 05:34:12', '2022-10-07 05:34:12'),
(28, 29, 'Debitis velit perferendis et unde. Architecto itaque nostrum distinctio quasi.', '1999-09-09', 0, 'other', 'Ut adipisci et est voluptate dolores odio maxime. Minus et fuga illo omnis velit quas.', 1, 'Quia dolores dolore eius reiciendis libero et voluptatem. Rerum adipisci dicta debitis quidem provident saepe. Nam odio et tempora ex aspernatur dolores. Fuga quas sed eum consequatur non nemo rerum.', 'Quam quidem possimus temporibus sunt at dolores ea odio. Quia velit quas laboriosam aut. Earum delectus est ratione et voluptatibus. Cum ut consequatur totam et quia.', 'Fuga omnis dolorem alias. Voluptatibus incidunt sit culpa officia minima eveniet.', 'Veritatis culpa nostrum nihil. Recusandae soluta facilis nisi quia ipsa rerum vitae. Autem animi cupiditate nihil praesentium mollitia qui quam aut.', '2004-01-04', 'Omnis dolorum architecto nostrum perferendis. Delectus eum molestiae distinctio qui excepturi.', '2016-01-21', 'Ut deserunt soluta veritatis a voluptas quia. Qui qui vel vero mollitia. Voluptas laudantium non omnis aliquid enim.', '1996-01-08', 'Sunt consequuntur est dolores sit enim nemo. Et a aut ut. Dolorum dolorum eos quas perferendis quos sunt. Quasi facilis in qui officia.', '2022-10-07 05:34:12', '2022-10-07 05:34:12'),
(29, 30, 'Atque autem autem aut animi. Et quae est mollitia. Illo qui eius laborum numquam quos. Maxime ipsa vero tempore sequi at.', '1976-08-22', 0, 'other', 'Odio rerum optio magnam atque libero et et accusamus. Impedit fugit veniam velit eum dolorem cupiditate enim. Culpa voluptatibus omnis autem ipsa dolor.', 1, 'Voluptatum sed facilis rerum cum et tenetur. Ipsa consequatur provident sit voluptatem. Officia voluptates nostrum at.', 'Et sunt ut ut autem velit ut. Repudiandae dolorem eum et blanditiis voluptatum earum corrupti.', 'Aut at est eveniet ad. Laborum doloribus omnis odit non quidem modi impedit. Error eius quia fugit pariatur quia enim modi a. Ullam harum et minima nisi voluptas est.', 'Vel cum dolor quae illum illo. Aut doloribus occaecati natus occaecati dolores cumque nisi. Qui quae ut excepturi inventore corrupti id ex.', '2021-09-10', 'Quia sint amet autem inventore eius voluptatem sunt. Fugit recusandae soluta maxime qui. Neque enim ullam totam modi accusamus sed sed.', '1971-01-09', 'Ab harum culpa non ratione. Enim tenetur ipsa deserunt provident ipsam occaecati harum sit. Nihil quos aspernatur unde voluptatibus voluptatem. Sapiente eos excepturi explicabo sed.', '1986-11-13', 'Nemo aliquid voluptas quis. Earum nihil est sed est. Non est rem dolores ut maiores ut aut. Consequatur nobis quia nulla explicabo qui.', '2022-10-07 05:34:12', '2022-10-07 05:34:12'),
(30, 31, 'In reiciendis asperiores ea nemo enim qui tempora accusamus. Qui vel quaerat ratione vel sit omnis. In velit modi pariatur aut. Consequatur natus ipsam est praesentium corrupti facilis.', '2005-11-02', 0, 'female', 'Eum voluptatem rerum amet impedit. Aliquam est pariatur dignissimos dignissimos. Qui excepturi nemo eligendi earum adipisci a distinctio.', 0, 'Dolores qui ea praesentium voluptas distinctio et dolorem. Magnam consequatur quo dolor ex omnis commodi delectus.', 'Eligendi illum eius magnam. Sed quia minus recusandae molestiae. Expedita maiores doloribus eos nisi. Officiis voluptatem sint dolor deleniti provident eum rem sed.', 'Sint alias nihil fuga voluptatem ea occaecati repudiandae. Alias nihil sapiente explicabo cumque quod. Ad deserunt aut quasi et labore. Dolorem aut saepe nostrum.', 'Est quis perspiciatis aliquid perferendis et sunt. Perferendis eos exercitationem hic. Debitis minima sint qui omnis et. Quis ipsa non et soluta consequatur qui velit.', '2019-03-26', 'Iusto quisquam qui tempora sunt dolor ducimus. Magnam quisquam consequatur necessitatibus accusantium. Et rerum rerum natus non iusto est ut.', '1973-07-01', 'Eligendi architecto et deserunt non ut quisquam blanditiis. Ipsam dolorem et id laborum molestiae voluptatem quibusdam eaque. Explicabo sequi fuga illum voluptates voluptas et consequatur.', '1976-03-26', 'Omnis doloremque recusandae accusamus omnis repudiandae ad. Voluptatum et magni exercitationem maxime. Vel et qui iusto quis rerum.', '2022-10-07 05:34:12', '2022-10-07 05:34:12'),
(31, 32, 'Doloribus optio error sit debitis aut mollitia. Pariatur qui ipsa assumenda omnis. Recusandae et quo praesentium dignissimos.', '1996-02-17', 0, 'other', 'Et officiis sit iste voluptatem voluptatem est est laborum. Qui harum non nostrum aliquid laborum nobis. Voluptatem deserunt quo aut facilis aliquam adipisci et.', 0, 'Quis est laudantium reprehenderit dicta molestiae. Iste error rerum quis numquam ipsum. Maxime enim neque adipisci ut et aut. Dicta corporis et ad maxime.', 'Tempore sed voluptatem labore accusantium ut quo. Quidem porro consectetur quas occaecati accusamus. Ipsam eum libero cum eius. Ullam dolorum vitae ipsa qui ut illum laudantium.', 'Iure sed magnam placeat. Labore tempore aut nihil et vel. Et esse reprehenderit aut nesciunt impedit totam quos deserunt.', 'Illo autem ipsam provident. Qui est vero autem occaecati voluptatem perspiciatis. Vitae minima sapiente id.', '1971-06-16', 'Ratione odit neque qui necessitatibus eos esse. Facilis enim consequatur officiis consequatur. Placeat in impedit ut nihil.', '2003-09-09', 'Fugiat provident fugiat sunt non hic voluptas. Deleniti qui facilis corporis est repudiandae consequatur. Temporibus sapiente dolorem quam explicabo debitis numquam. Dolor non error optio porro.', '1984-12-02', 'Dolor aperiam sint delectus atque tempore voluptate. Aliquid architecto eum illo dolore culpa. Sed placeat est molestias minima quia. Accusantium eum eligendi distinctio ex.', '2022-10-07 05:34:12', '2022-10-07 05:34:12'),
(32, 33, 'Ducimus ducimus optio tenetur asperiores. Unde sit facere et. Suscipit quia est sit ipsam in. Minus id qui harum asperiores tempora occaecati.', '1990-01-03', 0, 'other', 'Reprehenderit officia et non vel in asperiores modi. Voluptatem consequatur a ullam similique nihil voluptate tempore et. Autem dolorum eligendi provident sapiente. Et reprehenderit dicta nemo facere vero nam velit.', 0, 'Dolor quia repellendus eos aut animi qui hic omnis. Id iste voluptates nesciunt quae. Totam est rerum dolores atque libero.', 'Sit consequuntur aut sit repudiandae iusto vitae eos. Voluptatem perferendis repellat ipsa tempora asperiores et facere. Porro eaque harum a eos quo nam.', 'Tempora harum quae consectetur nobis aliquid. Voluptas odit facilis natus exercitationem. Ducimus et ab voluptatem. Quis aperiam non consectetur quia.', 'Atque doloribus nihil culpa ab ut ipsam. Quos quia magni totam illum similique aut dolorum. Eum voluptatem aut blanditiis dolore deserunt et blanditiis.', '1980-01-31', 'Repudiandae hic odio molestias asperiores excepturi expedita a. Qui ducimus dolore velit consequatur perspiciatis nulla. Eveniet nemo ut eos quae ipsam et suscipit.', '1974-06-05', 'Quidem fugiat sit dolores esse. Ea eligendi dolor libero pariatur ut iure voluptatem sit. Ab voluptatum optio culpa et ratione assumenda.', '1971-06-12', 'Impedit qui et et quis eum alias rem suscipit. Architecto ab quam modi beatae cupiditate cupiditate amet. Ut cumque rem voluptas quia.', '2022-10-07 05:34:13', '2022-10-07 05:34:13');
INSERT INTO `patients` (`id`, `user_id`, `reg_no`, `reg_date`, `age`, `gender`, `marital_status`, `children`, `address`, `reason_for_visit`, `pmhx`, `pshx`, `pre_pap_date`, `pre_pap_result`, `pre_uss_date`, `pre_uss_result`, `pre_hpv_date`, `pre_hpv_result`, `created_at`, `updated_at`) VALUES
(33, 34, 'Sit voluptas et qui autem et vitae tempora. Eveniet quia praesentium sapiente ipsum. Veritatis ut qui cumque quod. Atque id nihil ut tenetur soluta pariatur numquam. Odio occaecati eius sint qui. Earum rerum odit ducimus. Eum facere iste laboriosam.', '1971-04-21', 0, 'female', 'Beatae provident sed dicta quod quo dicta nemo. Ut et qui pariatur facere atque numquam doloremque. Sunt molestiae consequatur accusantium exercitationem doloribus.', 1, 'Optio dolor repellendus ex quod rem. Explicabo non cum aut. Et vel repudiandae repellat alias.', 'Quae et amet quas sapiente. Rem rem qui nihil quia. Labore vel tenetur modi tempora rem assumenda. Atque reprehenderit ipsum expedita et odio. Laborum magni voluptatem fugit.', 'Molestiae nisi ducimus quam incidunt placeat repellendus qui. Velit earum vero ut aperiam consequatur non optio. Et sed exercitationem deleniti ullam. Est maiores et consequatur minima ipsam rerum.', 'Enim qui rerum nihil eum laboriosam dolor voluptatem. Dolore adipisci doloribus eum rerum qui amet harum. Tenetur magni et reprehenderit ipsum. Soluta eos sunt non ut voluptatem quidem quod ut.', '2015-04-04', 'Fugit porro sed ex fugiat. Laboriosam aut exercitationem consectetur. Illo et illum et ullam. Veritatis aut aut ipsam voluptatem iste enim. Quam natus quo ullam consequatur aliquid ea quidem.', '2010-05-20', 'Dolor dolorem maiores numquam et neque. Quos nostrum autem in at sunt. Sed sit sed veniam et. Molestiae magnam vero nihil molestiae facilis adipisci sed inventore.', '1999-12-18', 'Et modi non quo suscipit dolor eum fugiat. Quis aut similique consequatur sequi dignissimos ut. Et velit dicta perferendis dignissimos in.', '2022-10-07 05:34:13', '2022-10-07 05:34:13'),
(34, 35, 'Architecto reprehenderit rerum aperiam odio. Illum sed ratione eum voluptatem ipsam velit rerum. Dignissimos labore pariatur quasi aut repellendus. Est omnis aperiam cum optio commodi illum neque.', '2011-03-23', 0, 'other', 'Iure omnis facere fuga. Veniam tempora minima rerum quae eos ratione quia. Doloribus incidunt qui adipisci et vitae a et.', 0, 'Repudiandae aliquid et quia est non. Dolorum dignissimos dolor aperiam in.', 'Velit doloribus soluta minima atque officia. Nemo culpa sed vitae.', 'Est aut perspiciatis nihil beatae aut accusamus eum odit. Consequatur saepe sint sed est sint beatae. Illum sed quaerat ea a.', 'Sapiente eveniet sit quidem voluptas ullam quos eligendi. Suscipit exercitationem officia aliquam veritatis ea. Ipsum velit impedit velit necessitatibus. Quos vitae consequatur omnis.', '2004-02-18', 'Accusamus aperiam consequatur labore praesentium voluptate et asperiores. Tempora iure culpa et assumenda. Laborum laborum officia et in et. Aliquid ratione dolores quia.', '2005-02-14', 'Amet sunt est ipsa et. Iste vel est sint porro sit quod odit. Dicta deserunt aut et est consequuntur et animi. Nam libero ratione dolorem architecto.', '2009-12-01', 'Ut quidem rerum amet placeat harum quos. Neque officiis temporibus tenetur id rerum. Cupiditate quidem assumenda ab repellat.', '2022-10-07 05:34:13', '2022-10-07 05:34:13'),
(35, 36, 'Ipsa eius vero maxime rerum ea non odit. Maiores accusamus at est voluptates beatae. Non voluptatem et consectetur in quaerat eum. Quas aspernatur quo cupiditate at voluptas dolor consequatur delectus.', '1986-10-12', 0, 'female', 'Asperiores harum consequuntur blanditiis. Labore ad ipsa quasi. Consequatur maiores pariatur at accusantium exercitationem tenetur. Sit ut excepturi dicta beatae rem et. Assumenda qui assumenda sed nihil.', 1, 'Rerum culpa esse enim voluptate natus blanditiis. Accusantium veniam odio saepe.', 'Itaque laudantium aspernatur aut atque modi laboriosam quisquam. Ut repellendus ea id natus possimus est optio. Quod in suscipit fugit est cum. Commodi quos quod alias aliquid quia perferendis.', 'Fuga vitae dolores officiis. Rerum mollitia nostrum qui sapiente quidem sequi et. Ab eum corrupti est.', 'Repellendus nisi dolor dolorem rem dolore sint. Sit vel dolor sint iusto cumque ad. Ut est cumque saepe soluta quia.', '1998-10-21', 'Ut dolorem culpa sint. Eius est a adipisci aspernatur minus magnam. Quod tempora odio soluta veniam quibusdam. Nemo veritatis natus harum quod.', '1996-06-07', 'In eos corporis itaque et. Distinctio modi numquam accusantium sit laboriosam officiis. Velit veritatis incidunt placeat ipsum aliquid veritatis.', '1979-08-19', 'Accusantium est velit illo necessitatibus repellat consectetur sint ad. Iusto aut voluptas aut delectus. Ut illo earum dolor.', '2022-10-07 05:34:13', '2022-10-07 05:34:13'),
(36, 37, 'Sit explicabo voluptates voluptas sint. Illo earum quo eos libero nam odit. Commodi rerum libero consectetur eligendi.', '1971-06-30', 0, 'male', 'Accusantium excepturi fugiat modi doloribus magni ad atque. At fuga saepe qui id dolor optio. Necessitatibus ut dolores dolorem velit repudiandae dolores. Quos earum dolore pariatur quidem.', 0, 'Dolor et eos similique suscipit. Rerum omnis quae ut molestiae. Saepe placeat non voluptas minima magnam tempore quibusdam. Veritatis eveniet qui magni est eum.', 'Deserunt ut ad enim repellendus earum temporibus. Molestiae occaecati consequuntur eligendi ut officia. Quia aut ipsum distinctio et culpa et aperiam.', 'Facilis amet quia et. Hic voluptas nostrum vel id ut quia illum. Et sint officiis quod provident.', 'Qui voluptas iure veniam beatae. Minus vero ad a quaerat quos et assumenda magni. In atque nulla vero dolor autem.', '2011-04-07', 'Ab qui voluptas pariatur aut veritatis eaque. Non ea sint officiis voluptatem. Asperiores aspernatur itaque eos neque. Autem provident est ut aut quo.', '1997-07-20', 'Omnis assumenda nihil expedita eum neque. Praesentium dolores facere voluptate aut qui. Placeat amet alias sapiente qui.', '2012-01-14', 'Corporis laboriosam repudiandae hic et vero delectus. Numquam quia dolore nemo ut ut. Quaerat et placeat inventore quo soluta. Iste quia commodi est sint.', '2022-10-07 05:34:14', '2022-10-07 05:34:14'),
(37, 38, 'Veritatis quasi tenetur ea explicabo. Et a et dolore magni. Omnis sequi dolorum deserunt eaque deleniti expedita sit. Iste iusto facere deserunt at.', '2019-01-29', 0, 'male', 'Exercitationem qui quae vero illum mollitia. Ut sint aliquid eius corporis unde voluptatem ut. Veritatis est in quia ea et voluptas sint.', 0, 'Nostrum non iure officiis pariatur mollitia fugit. Itaque eum quis tempore qui facilis. Officiis occaecati est itaque qui nihil. Aspernatur officia et rerum nisi.', 'Est fugit distinctio eos nisi occaecati dolorum qui blanditiis. Velit sequi eum nesciunt aut soluta. Modi voluptatibus rerum ut nemo hic nulla tempore. Laborum et molestiae ea assumenda id.', 'Maxime laborum eum nam qui nostrum. Adipisci qui quos labore est. Architecto minus recusandae suscipit autem.', 'Excepturi et corporis saepe. Commodi vel eum eum natus. Dolorum quia omnis explicabo aliquid dolorem dolorem omnis et. Omnis dolorum nihil dolore.', '2008-02-29', 'Asperiores id occaecati ut minus rem vitae. Omnis eos sit ut. Fugiat commodi dolorem minima et.', '2006-11-09', 'Dolor fuga quo quia repudiandae. Voluptatem et consequatur dignissimos natus quam. Ex et ipsam quas et doloremque voluptatum alias. Eaque sequi tempore tenetur delectus eos.', '2009-09-21', 'Aut facilis et exercitationem ea excepturi aliquam. Quae eius esse quia. Sapiente et cupiditate aliquam consequatur iusto est ut.', '2022-10-07 05:34:14', '2022-10-07 05:34:14'),
(38, 39, 'Iure aut sit nobis id atque temporibus tenetur amet. Labore rerum reprehenderit recusandae ea vel et. Aut eum doloribus qui eos alias harum quas atque. Ullam repellat esse qui itaque. Iusto architecto illum et ab quibusdam.', '2001-03-10', 0, 'other', 'Quia praesentium fugit qui aperiam pariatur. Eveniet fugiat explicabo sit. Repellat et eos quam voluptatem.', 1, 'Omnis et nam libero quam ullam aut nulla sed. Quod animi aut culpa mollitia et et. Rem autem ex dolore ut provident non nihil. Quo officiis consequuntur praesentium nesciunt excepturi.', 'Voluptas eos quo omnis ea. Sit dolorem provident fuga. Commodi exercitationem quae quaerat qui explicabo. Hic cum quibusdam maiores est aperiam nisi. Velit quisquam non et nesciunt.', 'Ut sunt culpa impedit. Accusamus impedit ab tempora. Non ut in cum tempore voluptatem non. Molestiae autem veritatis vel molestiae quia. At ducimus itaque consectetur repudiandae rerum earum.', 'Autem assumenda iure nostrum officiis. Perferendis deserunt consequuntur voluptas ut enim qui officia. Totam quam officiis temporibus quia quia et.', '2016-06-18', 'Unde dolorem vel ut. Et sint et et alias numquam in mollitia. Repudiandae aperiam laborum incidunt occaecati quas pariatur qui odio. Temporibus labore voluptatem fugiat quod eius assumenda.', '1975-12-31', 'Sed nihil doloremque sapiente voluptates. Eius omnis exercitationem dignissimos nostrum quae non autem voluptatem. Odit aperiam est iste blanditiis. Tenetur ut amet reiciendis eum animi.', '2014-05-16', 'Ad cum tempora pariatur iure. Et esse consequatur nemo necessitatibus necessitatibus repellat. Id tempora similique aut minus sunt eius tempora.', '2022-10-07 05:34:14', '2022-10-07 05:34:14'),
(39, 40, 'Eligendi error nesciunt porro ex sunt qui. Est iure numquam quisquam delectus voluptatem doloribus inventore et. Consequatur aperiam eaque optio quas a. Aspernatur voluptate vel sequi quis.', '1972-11-06', 0, 'female', 'Velit vel quos voluptas odio voluptatem consequatur. Sit omnis soluta minima fugit nihil quia. Ut ullam et doloribus ipsum magnam. Occaecati nesciunt voluptas et occaecati eveniet autem et.', 1, 'Occaecati odio est voluptatibus quam. Rerum ut pariatur qui quas enim. Ratione quis nemo tempora. Quis omnis soluta excepturi modi non ut aliquam dolor.', 'Incidunt aut sunt excepturi dolorum omnis aut. Consequatur ducimus porro asperiores sit quidem. Id placeat deserunt amet itaque. Quod dolores corrupti aut totam dolores.', 'Ipsa cupiditate doloremque dolores qui. Nulla sed et a quae minima ut. Sit qui enim accusamus accusantium officiis. Asperiores deserunt eum ea aut adipisci asperiores numquam.', 'Nemo reiciendis dolorem quia magnam nihil ut. Commodi atque et placeat tenetur dolorum est aut dolores. Aut molestias distinctio commodi tenetur. Laborum quae et ut iste corporis.', '1987-08-14', 'Voluptates in et et consequuntur alias dicta. Nobis consectetur ut doloremque non. Recusandae consequatur sunt odit numquam sed id.', '1987-05-23', 'Qui nihil et enim eum labore aut reprehenderit. Delectus cumque natus necessitatibus rerum tenetur aut voluptates. Vitae magnam numquam aut nam voluptates laboriosam. Non rem qui pariatur dolores.', '1979-05-23', 'Et eligendi laboriosam corporis enim dolore soluta. Amet unde debitis cumque. Impedit animi eum aperiam mollitia. Eos corrupti quam molestiae et et ut et velit.', '2022-10-07 05:34:15', '2022-10-07 05:34:15'),
(40, 41, 'Sint reprehenderit quibusdam ducimus esse quo ipsam. Aut consectetur sit dolorum. Quasi eaque adipisci et ea vitae debitis magnam. Aliquid exercitationem sed molestiae repudiandae dolor.', '2020-12-14', 0, 'other', 'Dolorum sed excepturi expedita odio fuga enim. Vitae exercitationem adipisci quia voluptas odio fuga voluptatem. Blanditiis tempora veniam aut nihil porro ipsa voluptates. Ut delectus laudantium laudantium et et eaque.', 1, 'Perferendis eligendi consequatur qui amet commodi aut. Reiciendis ut aut in ex fugiat ut praesentium. Officia adipisci impedit deserunt ratione.', 'Quia sunt dolore veniam consequatur. Ex maxime modi vel quos aut ipsam iste. Et dolores tenetur corrupti impedit repellendus. Sit aut vero animi consectetur explicabo quod.', 'Ipsa ut voluptatibus ullam. Perferendis magni et voluptate deleniti totam sit dolores. Est accusamus incidunt ex exercitationem. Omnis ad quisquam error quod.', 'Occaecati reiciendis illo vel saepe blanditiis laudantium totam. Pariatur omnis in eveniet ipsam sequi voluptatum eos. Est ut est et corporis optio itaque enim pariatur.', '2001-08-05', 'Sed totam perferendis consequatur ipsa quo harum. Autem consequatur cupiditate excepturi aut. Et debitis optio distinctio inventore tempore voluptatibus in.', '1986-12-25', 'Et modi neque voluptatum illum. Et libero molestiae occaecati nihil. Minima ea quidem qui ipsam quis quia dolores et. Ut totam est ad consequuntur.', '1990-10-19', 'Quia odit eaque aut incidunt. Dignissimos voluptatibus omnis et quo neque officiis. Nihil ab dolores sit.', '2022-10-07 05:34:15', '2022-10-07 05:34:15'),
(41, 42, 'Error veritatis architecto officiis officia quia. Odit incidunt aperiam quibusdam. Repellendus dolorem excepturi consequuntur est dolores voluptatem. Sapiente vel consectetur earum maiores quos sunt nihil eos.', '1992-10-12', 0, 'other', 'Et aut amet voluptatem in. Ut deleniti eos dicta aut in. Unde unde repudiandae et et nihil. Molestias velit voluptatem rerum. Voluptas voluptatem aliquam praesentium sapiente vero. Qui est assumenda at consequatur doloremque voluptatem.', 1, 'Ad cupiditate ea ut numquam. Sunt est omnis repudiandae quis ipsam ut autem tempore. Fugiat velit vel perferendis labore excepturi libero. Neque adipisci cupiditate est consequatur est porro.', 'Accusamus est officia molestiae mollitia nobis quam. Libero dolor voluptas qui. Dolorem fuga atque dolore maiores veniam maxime sed.', 'Quis harum doloribus saepe laborum. Provident unde voluptas asperiores qui.', 'Illo quo quia sapiente mollitia fuga qui perferendis quis. Et qui reiciendis non assumenda quam. Quae rem velit porro doloribus dolore doloremque. Possimus minus maxime magnam laborum.', '1973-04-05', 'Non debitis omnis labore autem. Sed et adipisci aut recusandae. Quasi non eius minus ut fugiat assumenda in. Suscipit est quibusdam omnis tempora id dolore incidunt ducimus.', '1995-03-29', 'Culpa debitis ex voluptatibus neque. Corrupti id ex delectus porro facere tempore inventore. Tenetur dolores in amet sequi sed error. Id qui iste dolorem sit.', '2021-01-30', 'Corrupti numquam unde id ab. Eius ea velit est quidem repellat. Temporibus asperiores nostrum quis explicabo. At eveniet ab numquam eaque quas deserunt nisi.', '2022-10-07 05:34:15', '2022-10-07 05:34:15'),
(42, 43, 'Saepe harum quae et deleniti debitis est. Adipisci adipisci eius asperiores aliquam. Atque libero enim numquam dolores eveniet. Cupiditate ut minima doloribus consectetur tempore. Earum aperiam necessitatibus in natus quo.', '2001-09-04', 0, 'male', 'Suscipit dolores accusamus reiciendis velit ipsa velit. Reiciendis deleniti nam et explicabo. Recusandae et et enim molestiae.', 0, 'Sed et inventore explicabo. Maiores accusamus illum quia ratione. Unde nobis incidunt non expedita recusandae optio. Id quia voluptate rem.', 'Culpa cumque mollitia ut nesciunt natus sit sit debitis. Et ullam aspernatur facilis voluptatem itaque rerum. Atque eos aut placeat nulla quasi occaecati labore.', 'Odit dolor porro quaerat est amet. Et eveniet itaque fugit tempora distinctio. Id quidem architecto assumenda doloremque rerum. Corrupti enim non voluptas consequatur sunt quas velit.', 'Aut enim tenetur aut aperiam voluptatem. Distinctio soluta officiis qui nesciunt et sed et. Velit reprehenderit ea eos molestiae eveniet ex.', '1993-06-26', 'Quos officiis autem possimus qui aliquid dolor. Sequi maiores ipsum molestias neque. Ut est autem dolorem adipisci hic. Eos iusto fuga deserunt corrupti accusantium qui.', '2018-04-05', 'At fugit beatae dolores quam nihil ipsa recusandae. Esse consequatur vero libero recusandae. Eaque dignissimos deleniti ad suscipit. Quis assumenda porro et porro.', '1998-07-03', 'Quia ducimus quia fugiat modi quo. Molestiae tempore aspernatur veniam ratione vel vel veniam. Eos eos voluptates vero ratione magni suscipit est.', '2022-10-07 05:34:16', '2022-10-07 05:34:16'),
(43, 44, 'Aut et amet atque. Et modi omnis consectetur quia voluptas. Veritatis repudiandae eum in et. Quos consequatur eveniet ducimus.', '1976-07-03', 0, 'female', 'Qui nihil dolores quaerat facere illum. Perspiciatis qui suscipit repellendus laboriosam. Ut omnis debitis laudantium quae est. Voluptatem laborum ut dolore natus iste ut.', 0, 'Alias vel aliquam ea molestiae rem dolorem. Quas sed eum quod est similique sed praesentium. Voluptatum quia veniam quo doloribus.', 'Asperiores et sunt neque voluptatum dolorem perspiciatis libero et. Nam voluptates perferendis dignissimos beatae. Ipsum pariatur incidunt ut fugiat aut. Et dolorem quis nihil ut ullam.', 'A facilis eum maiores. Esse et rem debitis voluptas. Velit qui mollitia eum illo architecto veniam. Sed sed eum quam officia itaque.', 'Quam nisi veniam neque ex temporibus enim. Doloribus temporibus ex magni exercitationem occaecati quia. Ullam similique nihil velit quod.', '2017-11-27', 'Magni quo distinctio et maiores officia a. Perferendis odio quis quia quibusdam et consequatur. Dignissimos ab exercitationem et. Reiciendis rem eligendi vitae architecto tenetur est molestias.', '2006-02-28', 'Molestiae dicta recusandae perferendis qui tempore iusto rerum. Qui laboriosam omnis incidunt sed. Asperiores eaque rem et eveniet est. Ea provident quo enim aut sed vel tempora natus.', '1998-01-23', 'Perspiciatis quas quia et. Molestiae voluptates voluptas ducimus voluptatem ea explicabo commodi. Molestiae veniam quasi earum voluptas.', '2022-10-07 05:34:16', '2022-10-07 05:34:16'),
(44, 45, 'Earum quam tempora nobis. Cupiditate facilis esse assumenda nihil ea. Quia dolores aut recusandae delectus sit blanditiis.', '1978-11-25', 0, 'female', 'Quod fugit vero saepe possimus soluta nobis. Nesciunt minus dicta ut doloribus doloribus. Blanditiis iusto qui aut pariatur libero soluta.', 0, 'Nesciunt facere qui et tempora dicta ut. Ea voluptas rerum vel esse voluptate. Dolore sit accusantium qui fugiat eum. In sequi et consequuntur unde consequatur vel aut.', 'Deserunt atque quis earum possimus. Aut est modi aut placeat. Aliquid fuga impedit aliquam qui totam doloremque aspernatur.', 'Dolores excepturi blanditiis corrupti magni animi ducimus eius voluptatibus. Enim repellat rerum tenetur ut nihil. Et et aut animi voluptatem et aut.', 'Amet et est ipsa et quidem iure. Unde mollitia qui sed id. Ipsum consequuntur numquam et distinctio voluptas eos necessitatibus. Excepturi ullam quis voluptate qui ad.', '1977-09-13', 'Quasi delectus dolore animi qui at assumenda recusandae. Voluptatum quas qui quia nobis sed officiis.', '2022-03-11', 'Veniam sit qui dignissimos et. Maxime iste sit consequatur voluptatem sit. Aut in quae et tempora.', '2010-12-05', 'Voluptatem veniam perspiciatis consequatur. Quibusdam deserunt dolor omnis id.', '2022-10-07 05:34:16', '2022-10-07 05:34:16'),
(45, 46, 'In rerum quae libero. Vero sunt quaerat reiciendis molestias vel. Illo omnis molestiae pariatur corporis expedita sapiente aut.', '2015-01-18', 0, 'male', 'Nemo voluptatum qui est odit aut. Corrupti ut sapiente et error. Sint et itaque nam aut rerum hic quidem. Aliquid adipisci est tempora exercitationem placeat.', 0, 'Similique maiores sunt hic. Ea velit sint deserunt architecto numquam maiores. Vero consectetur omnis voluptatum tenetur aspernatur suscipit enim. Sit quas ipsa tempore deserunt.', 'Beatae quibusdam autem possimus consequatur. Est eum odit vero soluta atque tenetur. Voluptas voluptas deserunt sed dicta.', 'Est nesciunt soluta quis repellat inventore deserunt recusandae. Voluptate laborum ut ea qui aut eaque.', 'Saepe est eligendi quibusdam quis laboriosam et eligendi est. Fuga et dolor et consequuntur.', '2003-05-27', 'Eum sint quibusdam dicta eveniet sunt. Libero dolor accusantium quisquam. Laboriosam accusamus voluptas ut aut beatae et totam excepturi.', '1979-09-06', 'Veniam ratione est soluta. Et dolores qui nemo et ducimus dicta. Velit assumenda rerum ratione quaerat ipsa et. Dignissimos modi fuga velit delectus dolor.', '1984-07-06', 'Soluta non culpa et quae. Eius expedita quae fuga laboriosam alias facere et voluptas. Corporis exercitationem laudantium fuga id aperiam voluptas autem reiciendis. A similique ea occaecati ut velit.', '2022-10-07 05:34:16', '2022-10-07 05:34:16'),
(46, 47, 'Vel nulla deserunt rerum magnam excepturi. Et fugiat et maiores adipisci tempora. Facilis blanditiis et aperiam adipisci. Aut beatae ut modi nesciunt dicta sunt. Consectetur mollitia rerum dolorem sit.', '1985-11-11', 0, 'male', 'Quia perspiciatis perferendis ut suscipit sed. Quo consectetur fugiat sed. Culpa quis iure nesciunt non. Quis amet consequuntur omnis quod libero velit possimus.', 0, 'Delectus iusto soluta id officiis id nulla. Atque ipsa non ipsam perspiciatis doloremque id alias. Similique labore sit maxime modi similique consequatur. Ut sit similique quos cumque quos.', 'Laudantium voluptas dignissimos eum voluptatem. Eos sunt voluptates delectus. Quas nihil eveniet sit enim quidem.', 'Expedita assumenda exercitationem alias molestias. Ut autem asperiores qui rerum. Officia laborum et molestiae molestias aliquam minus molestias.', 'Quia distinctio distinctio voluptate sint temporibus. Voluptatem consequatur voluptas vero dicta. Ducimus deleniti voluptatem sequi. Perferendis enim dolorum architecto quia enim.', '1997-03-09', 'Quod suscipit et ratione et doloremque. Ea odio aut laudantium animi voluptas debitis atque possimus. Exercitationem nihil molestias magni voluptatibus eveniet aliquid aut sit.', '2006-09-24', 'Quis cumque velit aut maiores ut sed quaerat at. Distinctio aut veniam nesciunt non eius. Atque officiis dolorem nobis accusantium. Quia tempore eveniet consequuntur provident sunt quos dignissimos.', '2011-07-06', 'Non sit inventore nam et suscipit atque recusandae. Sed esse dolores porro. Excepturi quasi harum asperiores sunt. Est earum voluptatem sed in minus sint.', '2022-10-07 05:34:17', '2022-10-07 05:34:17'),
(47, 48, 'Dicta iste vitae aut non laudantium quidem vel. Ipsa quo adipisci et dolores. Autem aperiam ullam eligendi vel ipsa est. Ut neque quaerat assumenda vero autem qui nisi.', '1972-05-22', 0, 'male', 'Voluptate veritatis dolorum ut ut delectus eum. Qui molestias sint fugit ut cumque odit. Quas qui non ut sint et nulla. Fugiat placeat ipsum in dolorem totam aut et. Deleniti est ab qui tempore. Autem et nostrum sunt. Quis hic eos incidunt est qui.', 0, 'Itaque aperiam dolore occaecati distinctio earum autem facilis adipisci. Vel qui pariatur et unde quod qui temporibus reiciendis.', 'Omnis non non ipsam quod quas hic. Voluptate mollitia commodi qui cum ex. Eveniet nihil quidem sed veniam non recusandae. Laudantium qui perspiciatis libero autem fugit debitis possimus dolores.', 'Accusantium nobis adipisci qui ullam id eius. Vel sit iusto at est aut. Ut porro et et libero. Illum sequi est consequatur dignissimos ut. Mollitia vel excepturi consectetur ut qui.', 'Quibusdam voluptatibus deleniti neque sint tenetur. Placeat et expedita aspernatur id aut. Aut assumenda reprehenderit sapiente fuga et qui sit maiores. Et ut qui qui laboriosam.', '1987-10-05', 'Qui sunt similique fugiat laboriosam nemo ea velit. Est debitis dolores at quaerat reiciendis qui. Autem qui qui distinctio. Et aut adipisci at facere aperiam.', '2018-03-18', 'Facilis architecto reprehenderit ut debitis delectus. Aut omnis quisquam nesciunt cum. Rerum et ab eaque eum. Officiis quia et maxime facilis culpa.', '1973-08-29', 'Cupiditate doloremque impedit et libero. Tenetur aut qui suscipit aliquid dignissimos. Aut vero consequatur quae aut.', '2022-10-07 05:34:17', '2022-10-07 05:34:17'),
(48, 49, 'Quia dolore ullam quam enim. Ut voluptates est iusto id inventore. Est vitae exercitationem eos. Sed rerum hic earum exercitationem velit eum. Ratione qui maxime ad.', '2021-09-15', 0, 'male', 'Sit eum odit velit tempora. Ut quasi ullam voluptatem consequuntur corporis aut. Est dolor iure velit qui accusamus iure aut. Autem voluptates placeat ullam. Similique voluptas ut quod rem quae voluptatibus id.', 1, 'Rem commodi vero laboriosam labore quibusdam. Sint harum aut quod alias voluptate. Quasi minima non ut occaecati quo voluptas. In repellat non alias vel magnam nostrum quod.', 'Nihil et placeat nihil autem rerum. Sit quis dicta corporis ut aut soluta. In dolores quod sit possimus nulla in. Earum neque itaque repellendus perspiciatis sit.', 'Qui incidunt quo exercitationem qui ut temporibus rem. Esse fuga esse totam et velit magni et culpa. Eos omnis sed praesentium et.', 'Debitis quis ut ad. Consequatur quia esse in vero nesciunt. Similique sed non facere eum nisi. Beatae qui voluptates deleniti.', '1994-08-24', 'Illum esse unde eius voluptas. Sunt dolorem libero sed alias exercitationem illo.', '1977-09-12', 'At ut qui sapiente dicta ex et. Mollitia veniam recusandae dicta excepturi deserunt at pariatur modi.', '1981-09-10', 'Dolores voluptas qui occaecati qui nulla. Aut labore dolore aliquid facere dicta. Maiores doloremque dolorem dolorem doloribus exercitationem nesciunt. Sed libero ullam sint quia et libero rem natus.', '2022-10-07 05:34:17', '2022-10-07 05:34:17'),
(49, 50, 'Facere ut mollitia non iste earum voluptatibus voluptas. Consequuntur est velit autem illum eveniet et. Repellendus fuga adipisci nihil dicta aut. Nam cupiditate rerum rerum alias molestiae qui doloribus corrupti.', '1978-03-05', 0, 'male', 'Voluptatem unde eos qui tempore delectus voluptatem qui. Aut odio nesciunt eveniet aut ex quisquam dolorem. Nostrum blanditiis eius sed iusto.', 0, 'Quia molestias aliquid dolores itaque deleniti est a ratione. Vel labore asperiores aut pariatur eaque mollitia at repellendus. Sit eum nobis ipsa explicabo est atque est.', 'Et qui quisquam dolores ut rerum. Delectus dolorem iure itaque. In mollitia fugit illum animi ut sunt. Libero rerum temporibus minus omnis laborum quaerat voluptate ratione.', 'Accusamus commodi distinctio voluptatem culpa laudantium ullam. Ea soluta excepturi repellendus tenetur et. Eaque temporibus labore dignissimos laborum sit debitis.', 'Dolorum necessitatibus pariatur qui laboriosam. Et iure ut ipsam qui. Voluptas debitis sed corporis ut est illo necessitatibus. Voluptate ut tempore aut quo odio est quia nesciunt.', '1980-09-01', 'Vel nobis quia quibusdam omnis expedita culpa eum. Iusto numquam ipsam voluptatum optio iusto.', '1972-09-25', 'Est ex corporis repellat non eos fugit perferendis. Et similique tenetur at aut deserunt nulla sint.', '1983-12-21', 'Suscipit rerum velit voluptas optio delectus natus. Dolorem impedit incidunt consequuntur provident. Eaque tempore non et quis qui ut.', '2022-10-07 05:34:18', '2022-10-07 05:34:18'),
(50, 51, 'Iste est consequatur ab consequatur ab voluptas. Sed quisquam atque atque in aperiam nemo. Occaecati ratione expedita quis nesciunt incidunt. In aut ut facilis aut quam.', '2004-07-27', 0, 'other', 'Sed voluptate vel aut autem qui. Officia nulla autem dignissimos sint consequatur quas. Dolor commodi repellendus at et. Ullam rerum laboriosam ut totam voluptas et dolorem.', 1, 'Ut quia beatae officiis possimus. Molestiae commodi autem accusamus distinctio eum ex quam. Dolor aspernatur distinctio sunt quia dicta est voluptatem.', 'Expedita debitis consequatur quis numquam suscipit aspernatur quia. Non molestiae placeat unde rem.', 'Libero autem mollitia aut harum. Deleniti autem consequatur qui. Ut maiores ex dolor rerum atque. Veritatis dolorem quis animi sint voluptas. Vero aut ut id id.', 'Eveniet non consequatur qui id hic. Error nihil placeat quasi doloremque. Ut vitae et ab eius dolorum dolorum consequatur. Eius vitae sapiente blanditiis hic quas corporis.', '1988-03-12', 'Aliquam quibusdam dolorem mollitia ab sed repellat. Expedita eos dolorum molestias incidunt. In optio voluptas dolores est nihil.', '1979-04-21', 'Non voluptas et ut quibusdam voluptatum rerum. Qui nobis aut hic eveniet deserunt. Tempore voluptatem aut sunt debitis.', '1981-07-18', 'Ut aut voluptatem maxime quia ut. Optio praesentium cumque rem ut. Eum quas fugit libero facere molestiae rerum.', '2022-10-07 05:34:18', '2022-10-07 05:34:18');

-- --------------------------------------------------------

--
-- Table structure for table `patient_bookings`
--

CREATE TABLE `patient_bookings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `patient_id` bigint(20) UNSIGNED NOT NULL,
  `location_id` bigint(20) UNSIGNED NOT NULL,
  `booking_date` date NOT NULL,
  `booking_slot` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `booked_by` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `booked_via` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `patient_examinations`
--

CREATE TABLE `patient_examinations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `patient_id` bigint(20) UNSIGNED NOT NULL,
  `examination_factor_id` bigint(20) UNSIGNED NOT NULL,
  `value` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `patient_examinations`
--

INSERT INTO `patient_examinations` (`id`, `patient_id`, `examination_factor_id`, `value`, `created_at`, `updated_at`) VALUES
(1, 21, 6, 'Voluptate ab a blanditiis quibusdam. Magni officia pariatur beatae. Ut enim vitae pariatur. Eaque repellat architecto nulla dignissimos laboriosam.', '2022-10-07 05:34:11', '2022-10-07 05:34:11'),
(2, 22, 7, 'Dolores ut repudiandae molestias commodi voluptatem. Nihil quo dolor ea voluptate. Quis soluta quaerat facere expedita delectus voluptas ducimus.', '2022-10-07 05:34:11', '2022-10-07 05:34:11'),
(3, 23, 8, 'Omnis provident expedita aut eligendi alias ut delectus. Itaque eum sunt autem laudantium tempora quidem. Maxime tenetur dolore est in ad.', '2022-10-07 05:34:11', '2022-10-07 05:34:11'),
(4, 24, 9, 'Dolores ducimus illo fugiat vero. Omnis atque voluptas explicabo dolores dolores molestiae. Qui id est odit cupiditate magni unde aperiam excepturi. Consequatur qui voluptas voluptatibus nemo.', '2022-10-07 05:34:11', '2022-10-07 05:34:11'),
(5, 25, 10, 'Eligendi dolores qui placeat. Cum dolorem cupiditate sint.', '2022-10-07 05:34:11', '2022-10-07 05:34:11');

-- --------------------------------------------------------

--
-- Table structure for table `patient_investigations`
--

CREATE TABLE `patient_investigations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `patient_id` bigint(20) UNSIGNED NOT NULL,
  `pap` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hpv_dna` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `patient_investigations`
--

INSERT INTO `patient_investigations` (`id`, `patient_id`, `pap`, `hpv_dna`, `created_at`, `updated_at`) VALUES
(1, 26, 'Est explicabo qui ut sit aut laborum. Repudiandae et nisi id eius expedita beatae. Dolor nemo dolor quas aut delectus eveniet praesentium. Excepturi voluptas eaque aut ut quis molestiae sunt.', 'Blanditiis voluptas vero reiciendis voluptas unde nemo. Consequatur odit laudantium incidunt non pariatur. Quis necessitatibus voluptatem quos sit architecto quisquam et et.', '2022-10-07 05:34:12', '2022-10-07 05:34:12'),
(2, 27, 'Ratione placeat et non eius rem. Ut aperiam assumenda ex eos ipsam. Repudiandae et quaerat eaque repellat ut laudantium. Est praesentium aliquid consequuntur sit vero officiis impedit dicta.', 'Dolorem quae dignissimos debitis eius magnam sit. Nisi inventore omnis tempora nam eveniet reprehenderit. In accusamus est non deserunt et odit error. In beatae tempora voluptas eum.', '2022-10-07 05:34:12', '2022-10-07 05:34:12'),
(3, 28, 'Sequi eligendi nihil voluptas qui ducimus. At non dicta impedit consequatur quaerat. Magnam quia laudantium laboriosam sit iure sed voluptatem.', 'Consequatur corrupti et voluptatem saepe optio quo. Nesciunt velit sit voluptatibus facere quia rem est. Ad ea perspiciatis corporis nulla quasi.', '2022-10-07 05:34:12', '2022-10-07 05:34:12'),
(4, 29, 'Quibusdam esse est eveniet recusandae non facilis. Iste voluptas aliquid est unde occaecati deserunt. Eos debitis commodi tempora culpa. Aut culpa necessitatibus architecto est dolore.', 'Voluptatem facilis quia voluptas dicta magni molestias necessitatibus. Voluptates cumque consequatur a porro adipisci. Omnis et odio dignissimos sed explicabo.', '2022-10-07 05:34:12', '2022-10-07 05:34:12'),
(5, 30, 'Accusantium aut necessitatibus sed est. Possimus aliquid ut ipsa magnam. Quasi tempora quia dolorem recusandae nulla. Et dolor et distinctio fuga quia qui. Aliquam soluta voluptatum provident veniam.', 'Ab incidunt debitis quasi quisquam laudantium. Temporibus non id quia quo qui doloremque. Cum est beatae quia velit.', '2022-10-07 05:34:12', '2022-10-07 05:34:12');

-- --------------------------------------------------------

--
-- Table structure for table `patient_managment_plans`
--

CREATE TABLE `patient_managment_plans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `checklist_id` bigint(20) UNSIGNED NOT NULL,
  `patient_id` bigint(20) UNSIGNED NOT NULL,
  `date` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `patient_managment_plans`
--

INSERT INTO `patient_managment_plans` (`id`, `checklist_id`, `patient_id`, `date`, `created_at`, `updated_at`) VALUES
(1, 6, 31, '1972-09-23', '2022-10-07 05:34:13', '2022-10-07 05:34:13'),
(2, 7, 32, '2012-02-17', '2022-10-07 05:34:14', '2022-10-07 05:34:14'),
(3, 8, 33, '2000-09-18', '2022-10-07 05:34:14', '2022-10-07 05:34:14'),
(4, 9, 34, '1980-06-24', '2022-10-07 05:34:14', '2022-10-07 05:34:14'),
(5, 10, 35, '1973-03-07', '2022-10-07 05:34:14', '2022-10-07 05:34:14');

-- --------------------------------------------------------

--
-- Table structure for table `patient_problems`
--

CREATE TABLE `patient_problems` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `patient_id` bigint(20) UNSIGNED NOT NULL,
  `common_problem_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `patient_problems`
--

INSERT INTO `patient_problems` (`id`, `patient_id`, `common_problem_id`, `created_at`, `updated_at`) VALUES
(1, 36, 6, '2022-10-07 05:34:15', '2022-10-07 05:34:15'),
(2, 37, 7, '2022-10-07 05:34:15', '2022-10-07 05:34:15'),
(3, 38, 8, '2022-10-07 05:34:15', '2022-10-07 05:34:15'),
(4, 39, 9, '2022-10-07 05:34:15', '2022-10-07 05:34:15'),
(5, 40, 10, '2022-10-07 05:34:15', '2022-10-07 05:34:15');

-- --------------------------------------------------------

--
-- Table structure for table `patient_risk_factors`
--

CREATE TABLE `patient_risk_factors` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `patient_id` bigint(20) UNSIGNED NOT NULL,
  `age_of_menarche` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lrmp` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ocp` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hrt` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `age_of_menopause` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `post_menopausal_bleeding` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `betel_chewing` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `areca_nut` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `smoking` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alcohol` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `other_risk_factor` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sexual_hx` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `occupation_radiation` tinyint(1) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `patient_risk_factors`
--

INSERT INTO `patient_risk_factors` (`id`, `patient_id`, `age_of_menarche`, `lrmp`, `ocp`, `hrt`, `age_of_menopause`, `post_menopausal_bleeding`, `betel_chewing`, `areca_nut`, `smoking`, `alcohol`, `other_risk_factor`, `sexual_hx`, `occupation_radiation`, `created_at`, `updated_at`) VALUES
(1, 41, 'Quaerat nam enim ut porro ea. Dolor aut vel sapiente quo dignissimos. Vitae asperiores nemo tempore error sit sed deserunt. Eligendi fuga aut dolorem voluptatum vero.', 'Et qui fugit labore et placeat. Ducimus eius tenetur assumenda. Tenetur ea quisquam ut quis officiis sed. Dolores aut aut ut.', 'Sunt qui cupiditate error consequatur commodi. Eos repudiandae est aliquam officia. Accusamus quis corporis esse blanditiis ut. Suscipit nulla deleniti ut quo animi adipisci voluptatem.', 'Tempora sit voluptatem sint tenetur consequatur ut. Qui ducimus dolores nihil non cum minus. Aut voluptas omnis sit sed similique veritatis dolores.', 'Aperiam laudantium quis repudiandae excepturi nihil dolor sapiente. Et quas dignissimos hic esse sequi dignissimos similique saepe. Harum occaecati adipisci iste et.', 'Omnis id repellendus suscipit suscipit cupiditate temporibus quam. Magni exercitationem esse est tenetur. Ut ut quia mollitia nesciunt. Explicabo impedit delectus quae qui. Corporis commodi amet voluptatem at.', 'Harum facilis ullam beatae voluptate soluta velit est alias. Corrupti culpa iusto beatae voluptates quo. Molestiae tempore distinctio ullam doloremque alias. Nostrum sit aut nisi odit debitis dolor.', 'Et quidem et animi ut quisquam ad. Ipsa rem mollitia animi eos aliquid voluptate quas. Aut voluptate explicabo numquam ullam rerum cupiditate.', 'Autem vitae veniam eos quia laborum atque eius enim. Culpa consequuntur in consequatur minus saepe cupiditate. Qui nihil itaque mollitia eos vero et. Adipisci aliquid ut voluptas magnam eius.', 'Inventore voluptatem blanditiis temporibus nisi et ut iure. Error sit ut iste ut error et commodi. Cupiditate amet quasi explicabo sint earum vel. Perspiciatis doloremque nisi molestiae voluptate. Molestiae ducimus eum aut ullam et voluptas quidem.', 'Dolorem autem qui aut provident. Qui velit delectus quis distinctio. Consequatur iste fugit quas itaque autem.', 'Voluptas vel aut autem praesentium laborum aut sit. Explicabo maxime est rerum sed sit. Laborum eos ut sit doloremque natus.', 1, '2022-10-07 05:34:16', '2022-10-07 05:34:16'),
(2, 42, 'Incidunt perferendis illo repudiandae enim alias quibusdam. Earum voluptatem voluptatem a et. Dolor omnis rerum dignissimos voluptatem qui reprehenderit quod. Officia officia et porro tempore quidem consequatur.', 'Et veniam qui quaerat quo iste. Eos a nemo voluptatem iure. Quo tenetur laudantium facilis voluptas animi placeat dicta eos. Qui aut quasi veniam et.', 'Atque cum et ut nostrum. Dicta quo excepturi ut dolores perferendis labore id. Temporibus sunt distinctio recusandae necessitatibus molestias. Soluta magnam ipsam et autem voluptatem cupiditate reprehenderit.', 'In ipsa magni non repudiandae aspernatur. Dolorum exercitationem soluta sed totam. Explicabo non veniam explicabo quo id. Provident qui beatae dolores dolorem distinctio.', 'Aut magnam veritatis aliquam. Consequuntur et rerum nobis earum odio. Nulla quia dolor voluptatem nostrum ut.', 'Quas consequatur provident ea. Inventore enim optio quis molestias. Fugit at fugit at aliquam quas nam aliquid. Unde magnam magnam minima quibusdam blanditiis vitae quis. Nostrum id suscipit ea id sit quam.', 'Odio officiis ducimus inventore dolore. Est tempora ea rerum quia. Voluptas error odio ex maiores voluptatem et doloribus esse.', 'Odit beatae illum voluptas. Esse nisi quia est enim. Quo enim autem culpa distinctio saepe. Neque voluptatem labore perspiciatis eveniet possimus cumque. Excepturi qui quo sed vero quos.', 'Vel quasi ut quis minima eum qui ex. Consectetur numquam est omnis ut autem provident quasi. Consequatur minima itaque non rerum similique aliquid. Et et nemo beatae.', 'Mollitia molestiae neque non accusamus ut quod. Dolor est doloribus dolores doloremque expedita odio fugiat. Cupiditate odit ut excepturi quibusdam deserunt pariatur. Libero mollitia nisi quo reiciendis.', 'Est et est quia sunt quis iste ut et. Blanditiis suscipit commodi quam laudantium aut. Provident necessitatibus quibusdam perspiciatis ut sunt velit. Perferendis dolor sit sit.', 'Voluptatibus ut quae enim aut nisi velit animi. Ut repellendus voluptatem dolores. Dicta unde exercitationem neque aut voluptatibus amet dolor eos.', 1, '2022-10-07 05:34:16', '2022-10-07 05:34:16'),
(3, 43, 'Libero non reiciendis quo autem. Aliquid ab dolor est. Cum enim repudiandae placeat magnam quod officiis.', 'Autem voluptas non minima ut exercitationem ratione sapiente. Quia exercitationem non libero sed recusandae amet. Sed ab ut ut eius natus aliquam consequatur. Tempora omnis ut sit.', 'Commodi corrupti ipsa aliquam odio voluptatem et qui. Facere ducimus eveniet consequuntur porro aliquam voluptates inventore. Deserunt corrupti deleniti error quo ut.', 'Optio enim est amet eveniet quas. Aperiam nihil eius tempora cum. Dignissimos eius illum quam.', 'Facere et numquam alias officia. Et sit id nihil inventore velit maxime molestiae. Eius ipsam est animi molestiae veniam. Ex optio similique ea pariatur.', 'Nam placeat quaerat sit consequuntur qui. Enim rerum dolor ipsum sunt quae rerum possimus. Illo qui mollitia perferendis ut modi nulla.', 'Delectus quam enim nihil quae voluptatem. Debitis ea natus corrupti beatae molestias. Explicabo dolorem quas dolores reprehenderit qui molestiae consequatur accusantium. Quisquam optio dolor quo dolores consequatur vel perspiciatis.', 'Nihil voluptas dolores ab officiis nobis ullam. Cum vel dolorem velit. Quis cupiditate officiis quis. Quisquam ea et provident consequatur illum et cum. Quis ex voluptatem quisquam ad sapiente omnis unde. Quia ut molestiae voluptatum qui dolorum quis.', 'Aut et sunt numquam in. Sequi repudiandae molestias illum. Quaerat et ea et quibusdam. Et quisquam officia qui rem sed asperiores earum. Veniam quo iure eos aliquam dolorem. Labore esse occaecati ipsum in.', 'Mollitia voluptas eius voluptatem tempora et officiis aspernatur praesentium. Nisi veniam nihil et officia eligendi officia. Fugit praesentium totam suscipit laboriosam totam.', 'Occaecati nemo amet doloribus voluptatem. Id reprehenderit recusandae animi et sed praesentium. Ab qui suscipit ut deserunt aspernatur soluta.', 'Et voluptatum explicabo qui ullam consequatur quaerat. Assumenda qui vero ut dicta tempore temporibus sint. Occaecati rerum consectetur velit explicabo at. Non architecto suscipit esse labore ut.', 0, '2022-10-07 05:34:16', '2022-10-07 05:34:16'),
(4, 44, 'Quisquam iste architecto perspiciatis delectus dolor ad in voluptates. Repudiandae accusantium quos cumque facilis omnis. Reprehenderit et rerum facere qui dolor animi. Numquam velit rerum ea harum repudiandae. Occaecati qui et perspiciatis.', 'Ipsa unde est sequi. Enim in repellendus mollitia consectetur atque sed dolor. Eligendi necessitatibus modi minus voluptas. Id tempore rerum ut.', 'Aut nihil est nesciunt vel quo. Repellat mollitia ex possimus eos ratione ducimus eius. Aut impedit illo inventore harum assumenda.', 'Ab doloremque odit quia vitae excepturi. Impedit nulla nulla quis sit qui. Dignissimos mollitia rerum repellat qui. Rem repellendus tempore quo nesciunt omnis est.', 'Molestiae hic incidunt ducimus voluptas est. In commodi quod et tempore vero dignissimos est. Voluptatem hic laborum explicabo et nulla dolores odit omnis. Consequatur corporis corrupti suscipit quis qui nesciunt a perferendis.', 'Expedita maiores aperiam vero praesentium. Nulla nulla fugiat et at aut. Hic odio culpa esse laboriosam et consectetur tenetur. Quo sit consequatur inventore neque animi. Ut tempora id et fugit. Commodi laborum doloremque quo omnis voluptas.', 'Molestias quisquam et ratione consequatur laborum ut dolorem. Possimus eligendi sit quidem et dolorem voluptas assumenda. Ab non sed asperiores voluptatem enim qui. Maxime est vitae totam.', 'Sint optio et aperiam pariatur placeat. Delectus porro aspernatur assumenda ut ea. Dolorem in ad perspiciatis quia. Eius vero nihil maiores culpa dolore amet.', 'Omnis amet sunt et nisi. Est accusantium et molestiae ut animi eligendi aperiam molestias. Saepe voluptatum possimus nihil ad. Ut qui porro ea qui. Non exercitationem dolorem est inventore quia ut. Quo exercitationem aliquam dolor.', 'Quidem dolorum est iure dolorem commodi eos officiis quis. Deleniti voluptatibus a nihil architecto aut adipisci. Odit sint incidunt similique ut autem ipsam. Possimus facilis magnam accusamus iste velit quo.', 'Harum consequatur dolore ad magnam quaerat est. Sed error at odit error dolorem. Voluptas quaerat aut explicabo est laborum ut. Eius nihil accusantium amet quae eius et assumenda.', 'Ipsa et quia dolorem. Omnis ipsum incidunt quos accusantium sit. Eaque iure sequi blanditiis omnis. Sed temporibus optio quis iusto eum. Atque similique nesciunt incidunt sunt. Ratione qui natus eveniet numquam. Et est perspiciatis a sapiente est.', 0, '2022-10-07 05:34:17', '2022-10-07 05:34:17'),
(5, 45, 'Quos quae rerum corrupti qui. Et similique iste est voluptatem. Consequuntur debitis hic nisi. Unde nobis est voluptatem ratione quia repellat nemo. Eum cumque dolor et. Soluta et voluptas culpa et et. Nesciunt labore facilis repudiandae.', 'Quaerat quis rerum aperiam beatae. Omnis incidunt est nam et labore dolor. Vero est doloribus sunt at et. Error ea quisquam ea qui et.', 'Distinctio totam voluptatem commodi numquam quos. Id sed sit quis numquam. Earum recusandae et enim non quas. Deleniti eum in nam neque. Quaerat ut modi quidem tempore aut voluptate aut. Qui sint sed animi expedita recusandae.', 'Molestiae et non saepe excepturi accusamus et ipsum. Commodi velit voluptatem aut pariatur rerum adipisci inventore veniam. Architecto natus architecto vel atque. Sit voluptas illum non adipisci eos.', 'Voluptas esse quia itaque dolorem accusantium voluptatum. Modi consequatur itaque nisi. Natus aut quis velit et. Cupiditate est enim omnis inventore reprehenderit perferendis.', 'Culpa accusamus quod corrupti alias consequuntur. Incidunt sapiente et accusamus aliquam voluptatem. Fugiat quis quo et error illum numquam. Commodi magnam perferendis sapiente at esse nostrum. Natus veniam nisi delectus fugit.', 'Illum aliquam sit dicta nihil dolorum. Possimus et sit fugit et. Ducimus assumenda aut sint aut. Qui dolor qui rerum nihil ducimus. Facere autem omnis ut dolores libero iste. Repellendus a culpa voluptas sed. Eos deserunt sit dolorum ut.', 'Dolor incidunt sed tenetur suscipit saepe temporibus. Id totam et et soluta est animi omnis. Tempore facilis distinctio libero animi. Expedita et autem pariatur odio fuga. Est veniam corrupti quo dignissimos reiciendis.', 'Deserunt enim laborum cumque vel sit dicta vero. Dolor adipisci odio consequuntur est maiores autem. Eos fugiat ea eligendi et eum et doloremque vel.', 'Nemo harum nihil voluptatem. Nihil et iure aut sit id voluptas. Sint nemo ab ut voluptate non voluptate. Dolore molestiae laboriosam quod magnam doloremque et modi.', 'Neque nulla aut vel cum voluptatem porro. Eius tenetur natus quos voluptas. Veniam consequatur ipsam vel ipsam incidunt velit saepe. Explicabo laboriosam nam magnam id voluptas.', 'Iure et eum pariatur mollitia pariatur. Dolorem at expedita cumque consequatur voluptas quaerat eum maiores. Libero iure saepe in. Hic ea maiores ad voluptatem ad reiciendis.', 0, '2022-10-07 05:34:17', '2022-10-07 05:34:17');

-- --------------------------------------------------------

--
-- Table structure for table `patient_ultra_sound_scans`
--

CREATE TABLE `patient_ultra_sound_scans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `patient_id` bigint(20) UNSIGNED NOT NULL,
  `ultra_sound_scan_factor_id` bigint(20) UNSIGNED NOT NULL,
  `value` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `patient_ultra_sound_scans`
--

INSERT INTO `patient_ultra_sound_scans` (`id`, `patient_id`, `ultra_sound_scan_factor_id`, `value`, `created_at`, `updated_at`) VALUES
(1, 46, 1, 'Veniam doloribus dolorum tenetur. Aperiam eveniet sunt nobis illum voluptas qui temporibus. Voluptatem est ut odio impedit ipsam qui. Doloremque nobis qui est consequatur voluptatem deserunt rerum.', '2022-10-07 05:34:18', '2022-10-07 05:34:18'),
(2, 47, 2, 'Qui dolore illo rerum ea. Sint facilis nihil nulla vel. Quo provident perspiciatis earum repellendus ea vel.', '2022-10-07 05:34:18', '2022-10-07 05:34:18'),
(3, 48, 3, 'A ut error quae. Numquam voluptas dolor vero debitis architecto modi corrupti. Quod nihil error esse qui cum in. Sunt enim nulla voluptatem sequi nisi.', '2022-10-07 05:34:18', '2022-10-07 05:34:18'),
(4, 49, 4, 'Quo et dolor fugit soluta. Et nihil ut dolorem odio laborum at harum. Aut consequatur omnis corporis cum. Et dolor officia dolores fuga minima id veniam.', '2022-10-07 05:34:18', '2022-10-07 05:34:18'),
(5, 50, 5, 'Modi suscipit tempora est et fugiat impedit. Similique omnis magnam ut ut. Deserunt dolorem debitis aut necessitatibus accusantium.', '2022-10-07 05:34:18', '2022-10-07 05:34:18');

-- --------------------------------------------------------

--
-- Table structure for table `patien_followups`
--

CREATE TABLE `patien_followups` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `patient_id` bigint(20) UNSIGNED NOT NULL,
  `followup_reason_id` bigint(20) UNSIGNED NOT NULL,
  `other_comments` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `patien_followups`
--

INSERT INTO `patien_followups` (`id`, `patient_id`, `followup_reason_id`, `other_comments`, `date`, `created_at`, `updated_at`) VALUES
(1, 6, 6, 'Est voluptatem nostrum voluptatem dolores vitae qui cupiditate. Quisquam sint similique maxime atque non autem velit. Asperiores nihil similique tempora. Qui ex voluptate beatae.', '1995-04-28', '2022-10-07 05:34:07', '2022-10-07 05:34:07'),
(2, 7, 7, 'Sunt quos praesentium deleniti eos. Quas et rem dolores enim voluptatem dolorum voluptas explicabo. Quos nobis corrupti et provident consequuntur ut corporis.', '1985-08-29', '2022-10-07 05:34:07', '2022-10-07 05:34:07'),
(3, 8, 8, 'Maiores non quaerat aut quibusdam ipsam. Aliquam alias rerum nihil voluptas. Quia voluptates suscipit accusantium doloremque mollitia. Voluptatem accusamus ipsum sunt.', '1988-05-02', '2022-10-07 05:34:07', '2022-10-07 05:34:07'),
(4, 9, 9, 'Error facere a consequatur aspernatur quia ut placeat. Distinctio nihil provident quis velit est. Sequi magni voluptate amet dolorum possimus. Voluptas eos vero ut magnam aut quia.', '1991-01-22', '2022-10-07 05:34:07', '2022-10-07 05:34:07'),
(5, 10, 10, 'Quae ut provident nulla ratione. Qui voluptatem ut et qui assumenda a ut sequi. Impedit repudiandae neque quidem. Ea dolor id quis.', '1999-08-20', '2022-10-07 05:34:07', '2022-10-07 05:34:07');

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'list bookingsettings', 'web', '2022-10-07 05:33:48', '2022-10-07 05:33:48'),
(2, 'view bookingsettings', 'web', '2022-10-07 05:33:48', '2022-10-07 05:33:48'),
(3, 'create bookingsettings', 'web', '2022-10-07 05:33:48', '2022-10-07 05:33:48'),
(4, 'update bookingsettings', 'web', '2022-10-07 05:33:48', '2022-10-07 05:33:48'),
(5, 'delete bookingsettings', 'web', '2022-10-07 05:33:48', '2022-10-07 05:33:48'),
(6, 'list cancertypes', 'web', '2022-10-07 05:33:48', '2022-10-07 05:33:48'),
(7, 'view cancertypes', 'web', '2022-10-07 05:33:48', '2022-10-07 05:33:48'),
(8, 'create cancertypes', 'web', '2022-10-07 05:33:48', '2022-10-07 05:33:48'),
(9, 'update cancertypes', 'web', '2022-10-07 05:33:48', '2022-10-07 05:33:48'),
(10, 'delete cancertypes', 'web', '2022-10-07 05:33:48', '2022-10-07 05:33:48'),
(11, 'list checklists', 'web', '2022-10-07 05:33:48', '2022-10-07 05:33:48'),
(12, 'view checklists', 'web', '2022-10-07 05:33:48', '2022-10-07 05:33:48'),
(13, 'create checklists', 'web', '2022-10-07 05:33:48', '2022-10-07 05:33:48'),
(14, 'update checklists', 'web', '2022-10-07 05:33:48', '2022-10-07 05:33:48'),
(15, 'delete checklists', 'web', '2022-10-07 05:33:48', '2022-10-07 05:33:48'),
(16, 'list commonproblems', 'web', '2022-10-07 05:33:48', '2022-10-07 05:33:48'),
(17, 'view commonproblems', 'web', '2022-10-07 05:33:49', '2022-10-07 05:33:49'),
(18, 'create commonproblems', 'web', '2022-10-07 05:33:49', '2022-10-07 05:33:49'),
(19, 'update commonproblems', 'web', '2022-10-07 05:33:49', '2022-10-07 05:33:49'),
(20, 'delete commonproblems', 'web', '2022-10-07 05:33:49', '2022-10-07 05:33:49'),
(21, 'list examinationfactors', 'web', '2022-10-07 05:33:49', '2022-10-07 05:33:49'),
(22, 'view examinationfactors', 'web', '2022-10-07 05:33:49', '2022-10-07 05:33:49'),
(23, 'create examinationfactors', 'web', '2022-10-07 05:33:49', '2022-10-07 05:33:49'),
(24, 'update examinationfactors', 'web', '2022-10-07 05:33:49', '2022-10-07 05:33:49'),
(25, 'delete examinationfactors', 'web', '2022-10-07 05:33:49', '2022-10-07 05:33:49'),
(26, 'list familyhistories', 'web', '2022-10-07 05:33:49', '2022-10-07 05:33:49'),
(27, 'view familyhistories', 'web', '2022-10-07 05:33:49', '2022-10-07 05:33:49'),
(28, 'create familyhistories', 'web', '2022-10-07 05:33:50', '2022-10-07 05:33:50'),
(29, 'update familyhistories', 'web', '2022-10-07 05:33:50', '2022-10-07 05:33:50'),
(30, 'delete familyhistories', 'web', '2022-10-07 05:33:50', '2022-10-07 05:33:50'),
(31, 'list followupreasons', 'web', '2022-10-07 05:33:50', '2022-10-07 05:33:50'),
(32, 'view followupreasons', 'web', '2022-10-07 05:33:50', '2022-10-07 05:33:50'),
(33, 'create followupreasons', 'web', '2022-10-07 05:33:50', '2022-10-07 05:33:50'),
(34, 'update followupreasons', 'web', '2022-10-07 05:33:50', '2022-10-07 05:33:50'),
(35, 'delete followupreasons', 'web', '2022-10-07 05:33:50', '2022-10-07 05:33:50'),
(36, 'list locations', 'web', '2022-10-07 05:33:50', '2022-10-07 05:33:50'),
(37, 'view locations', 'web', '2022-10-07 05:33:50', '2022-10-07 05:33:50'),
(38, 'create locations', 'web', '2022-10-07 05:33:50', '2022-10-07 05:33:50'),
(39, 'update locations', 'web', '2022-10-07 05:33:50', '2022-10-07 05:33:50'),
(40, 'delete locations', 'web', '2022-10-07 05:33:50', '2022-10-07 05:33:50'),
(41, 'list patienfollowups', 'web', '2022-10-07 05:33:50', '2022-10-07 05:33:50'),
(42, 'view patienfollowups', 'web', '2022-10-07 05:33:50', '2022-10-07 05:33:50'),
(43, 'create patienfollowups', 'web', '2022-10-07 05:33:50', '2022-10-07 05:33:50'),
(44, 'update patienfollowups', 'web', '2022-10-07 05:33:50', '2022-10-07 05:33:50'),
(45, 'delete patienfollowups', 'web', '2022-10-07 05:33:50', '2022-10-07 05:33:50'),
(46, 'list patients', 'web', '2022-10-07 05:33:50', '2022-10-07 05:33:50'),
(47, 'view patients', 'web', '2022-10-07 05:33:50', '2022-10-07 05:33:50'),
(48, 'create patients', 'web', '2022-10-07 05:33:50', '2022-10-07 05:33:50'),
(49, 'update patients', 'web', '2022-10-07 05:33:50', '2022-10-07 05:33:50'),
(50, 'delete patients', 'web', '2022-10-07 05:33:50', '2022-10-07 05:33:50'),
(51, 'list patientbookings', 'web', '2022-10-07 05:33:50', '2022-10-07 05:33:50'),
(52, 'view patientbookings', 'web', '2022-10-07 05:33:50', '2022-10-07 05:33:50'),
(53, 'create patientbookings', 'web', '2022-10-07 05:33:51', '2022-10-07 05:33:51'),
(54, 'update patientbookings', 'web', '2022-10-07 05:33:51', '2022-10-07 05:33:51'),
(55, 'delete patientbookings', 'web', '2022-10-07 05:33:51', '2022-10-07 05:33:51'),
(56, 'list patientexaminations', 'web', '2022-10-07 05:33:51', '2022-10-07 05:33:51'),
(57, 'view patientexaminations', 'web', '2022-10-07 05:33:51', '2022-10-07 05:33:51'),
(58, 'create patientexaminations', 'web', '2022-10-07 05:33:51', '2022-10-07 05:33:51'),
(59, 'update patientexaminations', 'web', '2022-10-07 05:33:51', '2022-10-07 05:33:51'),
(60, 'delete patientexaminations', 'web', '2022-10-07 05:33:51', '2022-10-07 05:33:51'),
(61, 'list patientinvestigations', 'web', '2022-10-07 05:33:51', '2022-10-07 05:33:51'),
(62, 'view patientinvestigations', 'web', '2022-10-07 05:33:51', '2022-10-07 05:33:51'),
(63, 'create patientinvestigations', 'web', '2022-10-07 05:33:51', '2022-10-07 05:33:51'),
(64, 'update patientinvestigations', 'web', '2022-10-07 05:33:51', '2022-10-07 05:33:51'),
(65, 'delete patientinvestigations', 'web', '2022-10-07 05:33:51', '2022-10-07 05:33:51'),
(66, 'list patientmanagmentplans', 'web', '2022-10-07 05:33:52', '2022-10-07 05:33:52'),
(67, 'view patientmanagmentplans', 'web', '2022-10-07 05:33:52', '2022-10-07 05:33:52'),
(68, 'create patientmanagmentplans', 'web', '2022-10-07 05:33:52', '2022-10-07 05:33:52'),
(69, 'update patientmanagmentplans', 'web', '2022-10-07 05:33:52', '2022-10-07 05:33:52'),
(70, 'delete patientmanagmentplans', 'web', '2022-10-07 05:33:52', '2022-10-07 05:33:52'),
(71, 'list patientproblems', 'web', '2022-10-07 05:33:52', '2022-10-07 05:33:52'),
(72, 'view patientproblems', 'web', '2022-10-07 05:33:52', '2022-10-07 05:33:52'),
(73, 'create patientproblems', 'web', '2022-10-07 05:33:52', '2022-10-07 05:33:52'),
(74, 'update patientproblems', 'web', '2022-10-07 05:33:52', '2022-10-07 05:33:52'),
(75, 'delete patientproblems', 'web', '2022-10-07 05:33:52', '2022-10-07 05:33:52'),
(76, 'list patientriskfactors', 'web', '2022-10-07 05:33:52', '2022-10-07 05:33:52'),
(77, 'view patientriskfactors', 'web', '2022-10-07 05:33:52', '2022-10-07 05:33:52'),
(78, 'create patientriskfactors', 'web', '2022-10-07 05:33:52', '2022-10-07 05:33:52'),
(79, 'update patientriskfactors', 'web', '2022-10-07 05:33:52', '2022-10-07 05:33:52'),
(80, 'delete patientriskfactors', 'web', '2022-10-07 05:33:52', '2022-10-07 05:33:52'),
(81, 'list patientultrasoundscans', 'web', '2022-10-07 05:33:52', '2022-10-07 05:33:52'),
(82, 'view patientultrasoundscans', 'web', '2022-10-07 05:33:52', '2022-10-07 05:33:52'),
(83, 'create patientultrasoundscans', 'web', '2022-10-07 05:33:52', '2022-10-07 05:33:52'),
(84, 'update patientultrasoundscans', 'web', '2022-10-07 05:33:52', '2022-10-07 05:33:52'),
(85, 'delete patientultrasoundscans', 'web', '2022-10-07 05:33:52', '2022-10-07 05:33:52'),
(86, 'list ultrasoundscanfactors', 'web', '2022-10-07 05:33:52', '2022-10-07 05:33:52'),
(87, 'view ultrasoundscanfactors', 'web', '2022-10-07 05:33:52', '2022-10-07 05:33:52'),
(88, 'create ultrasoundscanfactors', 'web', '2022-10-07 05:33:52', '2022-10-07 05:33:52'),
(89, 'update ultrasoundscanfactors', 'web', '2022-10-07 05:33:52', '2022-10-07 05:33:52'),
(90, 'delete ultrasoundscanfactors', 'web', '2022-10-07 05:33:53', '2022-10-07 05:33:53'),
(91, 'list roles', 'web', '2022-10-07 05:33:56', '2022-10-07 05:33:56'),
(92, 'view roles', 'web', '2022-10-07 05:33:56', '2022-10-07 05:33:56'),
(93, 'create roles', 'web', '2022-10-07 05:33:56', '2022-10-07 05:33:56'),
(94, 'update roles', 'web', '2022-10-07 05:33:56', '2022-10-07 05:33:56'),
(95, 'delete roles', 'web', '2022-10-07 05:33:56', '2022-10-07 05:33:56'),
(96, 'list permissions', 'web', '2022-10-07 05:33:56', '2022-10-07 05:33:56'),
(97, 'view permissions', 'web', '2022-10-07 05:33:56', '2022-10-07 05:33:56'),
(98, 'create permissions', 'web', '2022-10-07 05:33:56', '2022-10-07 05:33:56'),
(99, 'update permissions', 'web', '2022-10-07 05:33:56', '2022-10-07 05:33:56'),
(100, 'delete permissions', 'web', '2022-10-07 05:33:56', '2022-10-07 05:33:56'),
(101, 'list users', 'web', '2022-10-07 05:33:57', '2022-10-07 05:33:57'),
(102, 'view users', 'web', '2022-10-07 05:33:57', '2022-10-07 05:33:57'),
(103, 'create users', 'web', '2022-10-07 05:33:57', '2022-10-07 05:33:57'),
(104, 'update users', 'web', '2022-10-07 05:33:57', '2022-10-07 05:33:57'),
(105, 'delete users', 'web', '2022-10-07 05:33:57', '2022-10-07 05:33:57');

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
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
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'user', 'web', '2022-10-07 05:33:53', '2022-10-07 05:33:53'),
(2, 'super-admin', 'web', '2022-10-07 05:33:57', '2022-10-07 05:33:57');

-- --------------------------------------------------------

--
-- Table structure for table `role_has_permissions`
--

CREATE TABLE `role_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role_has_permissions`
--

INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES
(1, 1),
(1, 2),
(2, 1),
(2, 2),
(3, 1),
(3, 2),
(4, 1),
(4, 2),
(5, 1),
(5, 2),
(6, 1),
(6, 2),
(7, 1),
(7, 2),
(8, 1),
(8, 2),
(9, 1),
(9, 2),
(10, 1),
(10, 2),
(11, 1),
(11, 2),
(12, 1),
(12, 2),
(13, 1),
(13, 2),
(14, 1),
(14, 2),
(15, 1),
(15, 2),
(16, 1),
(16, 2),
(17, 1),
(17, 2),
(18, 1),
(18, 2),
(19, 1),
(19, 2),
(20, 1),
(20, 2),
(21, 1),
(21, 2),
(22, 1),
(22, 2),
(23, 1),
(23, 2),
(24, 1),
(24, 2),
(25, 1),
(25, 2),
(26, 1),
(26, 2),
(27, 1),
(27, 2),
(28, 1),
(28, 2),
(29, 1),
(29, 2),
(30, 1),
(30, 2),
(31, 1),
(31, 2),
(32, 1),
(32, 2),
(33, 1),
(33, 2),
(34, 1),
(34, 2),
(35, 1),
(35, 2),
(36, 1),
(36, 2),
(37, 1),
(37, 2),
(38, 1),
(38, 2),
(39, 1),
(39, 2),
(40, 1),
(40, 2),
(41, 1),
(41, 2),
(42, 1),
(42, 2),
(43, 1),
(43, 2),
(44, 1),
(44, 2),
(45, 1),
(45, 2),
(46, 1),
(46, 2),
(47, 1),
(47, 2),
(48, 1),
(48, 2),
(49, 1),
(49, 2),
(50, 1),
(50, 2),
(51, 1),
(51, 2),
(52, 1),
(52, 2),
(53, 1),
(53, 2),
(54, 1),
(54, 2),
(55, 1),
(55, 2),
(56, 1),
(56, 2),
(57, 1),
(57, 2),
(58, 1),
(58, 2),
(59, 1),
(59, 2),
(60, 1),
(60, 2),
(61, 1),
(61, 2),
(62, 1),
(62, 2),
(63, 1),
(63, 2),
(64, 1),
(64, 2),
(65, 1),
(65, 2),
(66, 1),
(66, 2),
(67, 1),
(67, 2),
(68, 1),
(68, 2),
(69, 1),
(69, 2),
(70, 1),
(70, 2),
(71, 1),
(71, 2),
(72, 1),
(72, 2),
(73, 1),
(73, 2),
(74, 1),
(74, 2),
(75, 1),
(75, 2),
(76, 1),
(76, 2),
(77, 1),
(77, 2),
(78, 1),
(78, 2),
(79, 1),
(79, 2),
(80, 1),
(80, 2),
(81, 1),
(81, 2),
(82, 1),
(82, 2),
(83, 1),
(83, 2),
(84, 1),
(84, 2),
(85, 1),
(85, 2),
(86, 1),
(86, 2),
(87, 1),
(87, 2),
(88, 1),
(88, 2),
(89, 1),
(89, 2),
(90, 1),
(90, 2),
(91, 2),
(92, 2),
(93, 2),
(94, 2),
(95, 2),
(96, 2),
(97, 2),
(98, 2),
(99, 2),
(100, 2),
(101, 2),
(102, 2),
(103, 2),
(104, 2),
(105, 2);

-- --------------------------------------------------------

--
-- Table structure for table `ultra_sound_scan_factors`
--

CREATE TABLE `ultra_sound_scan_factors` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ultra_sound_scan_factors`
--

INSERT INTO `ultra_sound_scan_factors` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Nihil nobis aliquid saepe. Repellendus est deserunt similique sed doloribus et. Quis molestiae at maiores quis.', '2022-10-07 05:34:17', '2022-10-07 05:34:17'),
(2, 'Dolorum delectus eveniet et nisi quod. Nemo sed aut magnam quibusdam. Et ea enim voluptatem est. Maxime fuga reiciendis omnis exercitationem. Totam ut ut saepe necessitatibus et minima in quia. Dolores nisi molestiae quisquam occaecati.', '2022-10-07 05:34:17', '2022-10-07 05:34:17'),
(3, 'Sit vel sint quae repellendus sed rerum vel. Id adipisci est iusto non minima eaque. Enim cum autem esse sit. Iure reprehenderit sint quo dolorem. Vero at excepturi ducimus est. Voluptatem saepe saepe numquam porro sunt architecto.', '2022-10-07 05:34:17', '2022-10-07 05:34:17'),
(4, 'Nihil non molestias minima iste fuga ut eveniet. Aliquid totam maiores eaque sed libero ad. Quasi est quas mollitia et tempora a. Ea rerum sit blanditiis laborum incidunt incidunt qui.', '2022-10-07 05:34:18', '2022-10-07 05:34:18'),
(5, 'Itaque voluptatum ea aut tempore recusandae alias maiores. Tenetur deserunt veritatis ea ullam aut. Nisi dolores quia quia ipsum.', '2022-10-07 05:34:18', '2022-10-07 05:34:18'),
(6, 'Voluptates quaerat optio nostrum vitae veniam repellendus amet. Enim voluptate quo praesentium praesentium nemo sapiente. Quasi molestiae architecto dolor et. Nemo qui vel ullam sapiente quisquam.', '2022-10-07 05:34:18', '2022-10-07 05:34:18'),
(7, 'Ducimus facilis recusandae magni possimus. Adipisci ex facilis cupiditate sit. Blanditiis cumque voluptatem et laborum. Nemo ratione ea est voluptatem laboriosam eligendi rerum. Praesentium expedita corporis delectus doloremque odio.', '2022-10-07 05:34:18', '2022-10-07 05:34:18'),
(8, 'Asperiores ad aliquid in quia occaecati accusamus debitis. Aut dolor quia quos aut nobis doloribus. Nostrum et magni qui omnis odit. Error sed culpa autem temporibus doloremque.', '2022-10-07 05:34:18', '2022-10-07 05:34:18'),
(9, 'Esse et qui sunt cum. Labore voluptatem nisi perferendis et eum. Libero illo facere natus porro.', '2022-10-07 05:34:18', '2022-10-07 05:34:18'),
(10, 'Magnam libero amet soluta placeat harum. Architecto est qui hic sapiente voluptatum mollitia hic. Non vero ut sequi laudantium non magnam excepturi. Sint sed commodi est.', '2022-10-07 05:34:18', '2022-10-07 05:34:18');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_no` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `user_type`, `name`, `email`, `phone_no`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Nobis debitis vero sunt deleniti consequatur est. Non fugiat repellat soluta sit. Voluptatum illo provident neque et illum animi minus dicta. Architecto est ut quidem placeat et et labore.', 'Celine Fisher', 'admin@admin.com', 'Consectetur adipisci quasi et neque qui vitae et id. Consequuntur fugiat ratione temporibus ut molestias. Aut culpa hic in et id dolores.', '2022-10-07 05:33:48', '$2y$10$oMEmMDpT7uPIWi8W.zk.L.aXrx.VJwVoJDNoxWHFq4Dl5GVvv2ODO', 'Yv93Huw64ThlqUL88l37vcobFxYT3sdrOIqAvCgwqQKAAImnHhthnMY0f7wc', '2022-10-07 05:33:48', '2022-10-07 05:33:48'),
(2, 'Praesentium dolorem ducimus esse ut eos. Impedit sed voluptates fugit voluptatem cum est. Laborum molestias sint fuga mollitia molestiae. In accusamus eaque occaecati aliquam tempora vel.', 'Miss Yvette Greenholt', 'rosenbaum.russel@stanton.com', 'Corrupti nam ipsum aut perspiciatis quam maiores repellat enim. Voluptates odit qui laboriosam laborum vel dolor minima. Quis sunt eum voluptate omnis earum laborum. Rerum voluptas tempore ut impedit assumenda.', '2022-10-07 05:34:03', '$2y$10$4yk85cUqpXFpQmpkMUw5/uQx1QOGjSPXYj8xbud5dzKom7emyb6Cq', 'tlgEKm3TRE', '2022-10-07 05:34:03', '2022-10-07 05:34:03'),
(3, 'Molestiae architecto voluptatum dolorem iure vitae aut voluptatem. Recusandae vel iusto expedita. Quae repudiandae illum at veniam delectus ut provident. Dolorem aut explicabo et sunt dolor omnis iste.', 'Leif Kiehn', 'noemy62@hotmail.com', 'In asperiores eum id tenetur excepturi consequatur quos. Placeat aut sint dolor ut nemo. Voluptatibus et nobis corporis et. Sunt voluptatem ipsa voluptates eos commodi blanditiis.', '2022-10-07 05:34:03', '$2y$10$b0c9L7PqgizUaaX902zIjuk7cLTlCsJ4kEu0H0Cy.z8frnchxe4Km', 'PAwHBAEjOs', '2022-10-07 05:34:03', '2022-10-07 05:34:03'),
(4, 'Vel soluta excepturi ut blanditiis. Eos eum autem ullam nisi maiores enim molestias. Dolorum aut qui ipsam aut. Ipsum non voluptates est praesentium ea distinctio iste facilis.', 'Duncan Marquardt', 'wiza.melody@ernser.net', 'Incidunt dolores aliquid nam eaque ab voluptatem consectetur ullam. Ut saepe aspernatur numquam vero sed itaque minima. Est ipsum porro suscipit ducimus. Ex eum quidem voluptas quidem sed. Quae quia quam illo tempore.', '2022-10-07 05:34:04', '$2y$10$zzhU5ECq5Byjd1ni08aP7.ElAyoLrzYBEdZuPyks88Foo0d3mag4K', 'RA7gyDOos2', '2022-10-07 05:34:04', '2022-10-07 05:34:04'),
(5, 'Commodi voluptates esse numquam id modi nostrum qui. Corporis ipsum excepturi dicta. Eligendi modi debitis et voluptas nisi consequuntur ratione. In quam quia officia delectus reprehenderit quo sint. A nihil maxime quasi aut vel eligendi dolores.', 'Jennings Hettinger', 'alexa.kirlin@gmail.com', 'Maiores necessitatibus provident dolor placeat necessitatibus consequatur enim. Necessitatibus in et nesciunt ut delectus. Amet veritatis doloremque cum dolores. Incidunt adipisci est a est.', '2022-10-07 05:34:04', '$2y$10$GIj6YaakPSskLBVkJJhUWuy36ZnKAtI6a6/encii64eUSYC0rENr6', 'FYauT3k3jY', '2022-10-07 05:34:04', '2022-10-07 05:34:04'),
(6, 'Recusandae laborum et ducimus maiores. Sed eos earum ut aut asperiores. Ut atque quo et omnis vero nam.', 'Ms. Earnestine McKenzie IV', 'goldner.anderson@hotmail.com', 'Quia pariatur et veritatis et. Facilis modi est amet atque. Commodi sed quod facere dolor aperiam culpa eveniet natus. Dolores corrupti illo eum est quam perspiciatis. Distinctio aliquid molestiae sit nemo sequi vitae.', '2022-10-07 05:34:04', '$2y$10$D6CbDOcmtC3h4oPE.1AGbuzwdyk8wnt/nVlpRRbqOS/04iCxhsz4C', 'fCU6NnJX7R', '2022-10-07 05:34:04', '2022-10-07 05:34:04'),
(7, 'Quibusdam ut iure expedita. Distinctio eius odio corporis quae sit quibusdam. Ut repudiandae dolorem dignissimos et delectus aut. Aliquid consequuntur sed commodi omnis.', 'Dr. Santino Hoppe Jr.', 'oconner.sidney@terry.org', 'Velit rerum eveniet nobis totam impedit. Repudiandae ratione voluptas alias iste facere. Facilis culpa sed modi nulla voluptatem.', '2022-10-07 05:34:06', '$2y$10$qBgLJw.O8AhJZpgV1YO/z.Uemly7rVfh5.DsaL30VFEoQlxpXOb0O', '9WL3aTrNeG', '2022-10-07 05:34:06', '2022-10-07 05:34:06'),
(8, 'Aut molestiae repudiandae delectus saepe eos dolor. Magni repellendus voluptates ex officia dolorem. Eaque possimus aspernatur dolores praesentium quas aspernatur vel consequatur. In alias deserunt corrupti enim quam dolores.', 'Cameron Hoeger', 'konopelski.tressa@yahoo.com', 'Omnis repudiandae eos et unde et sed. Quis cumque nesciunt quam iure recusandae. A est consequatur molestiae.', '2022-10-07 05:34:06', '$2y$10$EAr46QrUilfjnKedwx/QDO/V2GdNGK0wWODqbH2XhSL5GLumm9VSC', 'tVhjBmRmuk', '2022-10-07 05:34:06', '2022-10-07 05:34:06'),
(9, 'Accusamus corporis nulla minus qui. Illo sit molestias iste animi. Incidunt architecto dolorem quia sit dolores. Qui vel iusto eum atque culpa aliquid enim. Vel voluptate quis ullam sint natus. Quo et sit est quasi. Est quia itaque ut sed.', 'Dr. Cleora Kuphal DVM', 'kjakubowski@gmail.com', 'Iste optio et nostrum dicta in. Ea aut sit natus totam qui. Unde voluptatibus temporibus quo ea voluptatem. Est iste officia possimus et.', '2022-10-07 05:34:07', '$2y$10$PcE/5hPKj4CCDHzN/o21iOkzHEF6GXA6vjL8PKkPKzFA0OcCHgLPa', 'YE4Dutz3WH', '2022-10-07 05:34:07', '2022-10-07 05:34:07'),
(10, 'Labore assumenda voluptatem neque qui eum et. Impedit quia dolores consequatur laboriosam. Veritatis ea inventore ea reiciendis animi dolorem voluptatem. Labore nisi aut quia eveniet.', 'Miss Lelah Veum', 'schmitt.kaelyn@gmail.com', 'Non impedit culpa quasi incidunt quae. Voluptatem similique esse explicabo quidem aperiam. Vel qui eveniet qui ea. Veritatis iure laborum eum aut. Magni error velit quia eveniet non aperiam reprehenderit. Quia dolorem id quos aliquam.', '2022-10-07 05:34:07', '$2y$10$LUJmyCxhMCbe4Pa.tvzYfeyoftPitLe5p3i.uabcz7fqBSzNtVF1i', 'T3o2mMBV3j', '2022-10-07 05:34:07', '2022-10-07 05:34:07'),
(11, 'Iure vel dolores quisquam nostrum id porro neque. Cupiditate eaque dolores consequatur error. Quos rerum odio iusto iure iste. Quidem hic impedit accusamus error et laborum. Quo quae impedit cupiditate nesciunt nobis quia.', 'Miss Melisa Parker DVM', 'jacobi.melany@gmail.com', 'Id sunt tempora non et omnis. Accusamus harum saepe aperiam quia. Quisquam deleniti natus repellendus hic amet.', '2022-10-07 05:34:07', '$2y$10$jy0bcEN.VrEVqT7dS9b4zeP3T10fEEWL6PNwtgDZGe9n8QwBod1tO', 'NgTWVjRvCU', '2022-10-07 05:34:07', '2022-10-07 05:34:07'),
(12, 'Quos esse nesciunt eius dolor. Magni distinctio sint rerum ab placeat aut. Iure consequatur illo exercitationem eveniet. Quas neque soluta voluptatum quia ex eius.', 'Alana Graham', 'aullrich@yahoo.com', 'Sed eligendi rerum labore quia tempora totam. Qui ea aliquid voluptas voluptatibus et assumenda. Officia expedita ut aliquid voluptas magnam. Illo est placeat commodi unde omnis doloribus. Rem nostrum magni aspernatur.', '2022-10-07 05:34:08', '$2y$10$5G1LZK.gMRWVNptrOWm.0OyuIkht1kOI6Mtwt2QJNwdD9IkEv1TZy', 'VIKWVIeLjp', '2022-10-07 05:34:08', '2022-10-07 05:34:08'),
(13, 'Voluptate beatae recusandae nostrum ipsum autem et molestiae sint. Asperiores non suscipit dolorem vero et sed vel. Numquam ut velit doloremque quae sed fugit dignissimos. Et velit voluptas modi aut. Corrupti quis totam quis sit sapiente.', 'Mrs. Jannie Bruen', 'alena03@kunde.com', 'Quo sint quis sed quis adipisci nihil. Temporibus et sed dicta iste repudiandae fuga necessitatibus. Est ut animi doloribus voluptatem suscipit similique. Voluptas autem nulla et nulla. Aliquam voluptate rerum velit aut sequi facilis.', '2022-10-07 05:34:08', '$2y$10$S2RfHurz99p0y8vAZ5bOwepRjlPZZsnZF9Ck3wX8Ub2mRxGNT9Wzy', 'VMGwgHazni', '2022-10-07 05:34:08', '2022-10-07 05:34:08'),
(14, 'Tempore impedit molestias minus voluptas. Libero itaque voluptas mollitia ut soluta. Minus sint impedit suscipit.', 'Delphine Kuvalis', 'miller.vicenta@yahoo.com', 'Aperiam aperiam nam vel corrupti necessitatibus ea. Id quaerat sit et pariatur. Molestiae et eum libero voluptates consectetur. Quidem rerum eius mollitia dolor. Officiis possimus doloribus cupiditate debitis repellendus.', '2022-10-07 05:34:08', '$2y$10$ssgisS0FsBSrLW5VQmkLue7v6vYVYEtDvw.koeVxO67t1GlQAVbva', 'YD1qCxUH5w', '2022-10-07 05:34:08', '2022-10-07 05:34:08'),
(15, 'Enim sequi aliquam qui explicabo. Nihil et facilis ut accusamus vel architecto. Et perspiciatis reiciendis voluptatem iure suscipit in.', 'Dr. Reagan Ruecker MD', 'iwill@robel.com', 'Ipsa repudiandae ipsa distinctio qui impedit. Aut quod et perferendis ex et necessitatibus consectetur. Consequatur consectetur minima ut rerum aut veniam.', '2022-10-07 05:34:08', '$2y$10$pJWephBphWABNPcT2MXsPum91alV/BDwRRvYeboZf0vtHCtRyDkeG', 'RJSGFswVLR', '2022-10-07 05:34:08', '2022-10-07 05:34:08'),
(16, 'Quo sint ab asperiores aliquid. Nemo voluptatem neque nemo ipsum sequi similique architecto id. Quia beatae excepturi et aliquam modi vel. Quia non ex laborum et nam velit.', 'Elijah Bode', 'agoodwin@runolfsson.biz', 'Non repellat aliquam voluptas doloribus odio sunt similique. Ea cum voluptatem culpa saepe dolores enim vitae. Sequi quia provident eos quam possimus eum voluptates. Tempore illo debitis hic molestiae quia velit.', '2022-10-07 05:34:08', '$2y$10$WuMX2gS1etI0tAdNws6oiexFz8.XZhrJsQeqhsp2LkpzgeXG6tj8q', 'mhKJ1LGXUT', '2022-10-07 05:34:08', '2022-10-07 05:34:08'),
(17, 'Voluptatem aut qui vitae eum officia. Consequatur eum necessitatibus explicabo autem. Est laboriosam fugiat eligendi modi corporis ea ducimus.', 'Mr. Maximillian Daniel', 'nathanial44@hotmail.com', 'Blanditiis molestias tenetur voluptate. Id dolorem quo cumque. Optio reiciendis sit quis sint odit et. Ipsum fuga magni vero molestiae id itaque. Numquam ullam labore rerum. Sequi ut dolore non quaerat.', '2022-10-07 05:34:08', '$2y$10$RsbbYhbUJDAVantg2tYJGuTbik6926T1auGrk1.kmsTCFkUpT4oGK', 'ZndeqrYxrf', '2022-10-07 05:34:08', '2022-10-07 05:34:08'),
(18, 'Commodi expedita officiis sit sit. Nemo consectetur dolor consequatur ad. Sit voluptatem eos ut. Delectus est est sint quo repellat voluptas. Aut eius consequuntur qui. Quibusdam adipisci soluta exercitationem velit.', 'Arlo Gutkowski', 'jdibbert@gmail.com', 'Aut adipisci et nostrum tenetur ut est. Eius debitis libero quod consequatur ratione aut architecto. Alias placeat sapiente quis beatae. Id nemo ut doloremque explicabo ut.', '2022-10-07 05:34:09', '$2y$10$XxxqXj1Re2ziDCcUA.g2HO3sRsnTtQwlWVvkmYR36KHL7fWhiDZ/G', '5kXIBDAKRx', '2022-10-07 05:34:09', '2022-10-07 05:34:09'),
(19, 'Fugiat suscipit placeat mollitia pariatur ea distinctio aliquam minus. Minus et aut eum delectus deleniti qui. Nihil officia asperiores quis. Distinctio ut dolore rerum rerum.', 'Tanner Kunze', 'juanita36@hotmail.com', 'Commodi sunt voluptatum nihil minus provident expedita. Exercitationem perferendis reprehenderit officiis rerum. Eum ad cum porro error. Vel accusantium quo voluptates recusandae quasi omnis maxime.', '2022-10-07 05:34:09', '$2y$10$7bXuamMK5KQxOdcjhPSYX.oenw.Z4SbP94eQ4RxjXM3kdmDK0Vsqm', 'MwlaEDBHFQ', '2022-10-07 05:34:09', '2022-10-07 05:34:09'),
(20, 'Et praesentium accusantium corporis distinctio exercitationem voluptatum. Mollitia quo voluptatem enim quo. Nesciunt nemo ullam ut mollitia.', 'Clemmie Hodkiewicz', 'simone89@okeefe.com', 'Ratione ut quidem cupiditate. Ut et dolorum et dolorem. Ipsa soluta aut nemo nobis excepturi illo expedita.', '2022-10-07 05:34:09', '$2y$10$btw.MfFr9L/l0hjO2bTbnu6.FH6pR851vSh9o2V8gdGUBwUbM8.PS', 'tXLeI90ue5', '2022-10-07 05:34:09', '2022-10-07 05:34:09'),
(21, 'Dolorem numquam sit rerum voluptas alias autem consequuntur. Earum eius cum consequatur adipisci fugiat necessitatibus cupiditate. Eum maxime cupiditate et nihil autem voluptatem sapiente.', 'Mrs. Shakira Dietrich', 'twalter@considine.com', 'Vero commodi culpa sint. Ad qui iusto aut voluptas unde nesciunt in. Fugit totam autem qui inventore consectetur dicta. Quidem libero veritatis ipsum numquam qui et. Beatae sit vitae eos ipsam asperiores aut iure.', '2022-10-07 05:34:09', '$2y$10$B9n2FkZeIaTJ6AKo3mT2kerhHjJNAs1afAN92huQcJc5DW6/Jwybi', '4njw99kkFR', '2022-10-07 05:34:09', '2022-10-07 05:34:09'),
(22, 'Dolorum quasi dolorem esse et porro reiciendis unde. Et libero enim possimus consequatur. Adipisci sit non quaerat saepe sed natus dolores et. Corporis est veniam beatae labore molestiae et.', 'Korey Ankunding', 'hwunsch@schuppe.com', 'Veritatis ab optio laborum quis error aut. Sit beatae inventore dolor veniam minus dignissimos. Et doloribus dignissimos id corporis ea cumque est est.', '2022-10-07 05:34:10', '$2y$10$gq3RFtbrps2WWUxCBIRyQuqoKkomZIrz1FnZpNM0Ie8AN.IH5pwFO', 'xuaRfU1bb6', '2022-10-07 05:34:10', '2022-10-07 05:34:10'),
(23, 'Commodi officia accusamus dolorem temporibus eaque. Voluptatem amet ut ea vel. Et consequatur non quasi labore maxime aut exercitationem. Ipsam quo perferendis ut maiores sint dicta eaque. Velit eius mollitia voluptatem voluptatem.', 'Turner Altenwerth', 'fwuckert@hoeger.com', 'Quae quis impedit a consectetur aut inventore. Ipsa explicabo sunt sit. Nostrum qui laborum provident quod et voluptatem praesentium. In qui ex omnis quaerat expedita voluptas quis.', '2022-10-07 05:34:10', '$2y$10$xTFQMtQAhhfa4kqbDptypu.nkkYCqhklTV2xe60bl9pQw55/ULcuW', 'rFk2ilawzs', '2022-10-07 05:34:10', '2022-10-07 05:34:10'),
(24, 'Eum voluptate nam non praesentium molestiae et. Corporis aut consequatur pariatur fuga nemo. Eligendi laudantium vel ipsum sint officia architecto. Deserunt a facilis libero neque adipisci.', 'Prof. Frederik Stiedemann', 'qbraun@gmail.com', 'Enim voluptatem earum ut ipsa. Saepe et eos cum. Laudantium repellendus rerum qui veniam vel. Iusto temporibus tempora nobis ut quam illum et. Dolore voluptatum odio alias tempore omnis vel soluta quasi.', '2022-10-07 05:34:11', '$2y$10$OG2eAXU2xO2evGH0gJg0LOmCEqE0ATmz4qwtHDaMWp4RJWIl8p9ji', 'rPLq0Gwo0M', '2022-10-07 05:34:11', '2022-10-07 05:34:11'),
(25, 'Molestiae omnis ut est. Accusamus officia quasi ea ea quis qui officia. Ut recusandae eligendi perferendis quod rerum voluptatem rerum. Iusto corrupti quis veniam iure voluptas quos.', 'Tania Koss MD', 'ebba00@gmail.com', 'Accusamus sapiente in modi maiores aperiam. Ullam et eveniet provident et. Vel ut nulla maxime aliquam dicta saepe quidem.', '2022-10-07 05:34:11', '$2y$10$I7hJyJc4cCJslyf0waoqse3GFGjZdMHd/r4TnGUwkqxOgxZm.6ahm', 'yKnHkrTAWb', '2022-10-07 05:34:11', '2022-10-07 05:34:11'),
(26, 'Eligendi officia qui quidem dicta qui qui. Aspernatur vero adipisci laudantium enim. Sit voluptatem fugit sapiente laborum.', 'Griffin Eichmann', 'liam96@hotmail.com', 'Ea sit recusandae veritatis neque numquam inventore beatae. Doloremque excepturi laborum nemo minus accusamus sunt veniam enim. Earum magnam et blanditiis tempora maiores et.', '2022-10-07 05:34:11', '$2y$10$t8j5fR.FW/oSFmre2kxfnuFi0NLd1EU6vjjXVi4jH0ZvYi55GE4Hm', 'ypoR6HlBHv', '2022-10-07 05:34:11', '2022-10-07 05:34:11'),
(27, 'Quas incidunt quo et magni deleniti enim qui vitae. Voluptas et est ut sunt adipisci quidem dicta. Et est esse nobis culpa architecto. At sunt est distinctio nisi.', 'Miss Carolyne Jones', 'aditya.schaefer@gmail.com', 'Sed perferendis illum vel sit voluptatem eligendi qui architecto. Et omnis et quo aut optio est quasi.', '2022-10-07 05:34:11', '$2y$10$oATm50uyMGud4SUEpbA4m.LZg1M1EFciUPBaUmwPLz1/3OvPkiAZe', 'zS9u06z0LU', '2022-10-07 05:34:11', '2022-10-07 05:34:11'),
(28, 'Laboriosam aut rem voluptas doloremque. Fugit rerum tempore sed qui doloribus et consequatur. Facere amet quae a et quia. Qui suscipit quis non est. Veniam dolore ut beatae voluptatem similique. Quia rem consequuntur iste incidunt.', 'Brycen Reichert', 'bessie.deckow@gmail.com', 'Aut omnis corrupti veniam nihil et. Rem fugiat impedit non rerum qui repudiandae aut. Qui qui voluptatum iste ullam. Omnis nobis illum ab adipisci. Velit optio excepturi alias tempora.', '2022-10-07 05:34:11', '$2y$10$9YTDQOspeGg.Ry00xDFriuopihqIEwb3uBjijLCa3ZcVaWA7AiFwO', 'he9X1evPRP', '2022-10-07 05:34:11', '2022-10-07 05:34:11'),
(29, 'Ut eveniet ut hic debitis nihil unde ducimus. Repellat minima autem odio. Consequuntur voluptas aliquid veniam voluptatem. Possimus dolorem esse quos qui qui vel. Velit id provident cum quasi distinctio. Aut id deserunt molestiae et laboriosam.', 'Murl Crist', 'block.miles@labadie.com', 'Ut eum facilis doloremque non fugit et tempore. Maxime aliquid nostrum et iure ad dolor. Ea voluptate qui eligendi asperiores ut. Aut et aspernatur exercitationem placeat odit error.', '2022-10-07 05:34:12', '$2y$10$V9dx8BWczrqbdRE0y41hRO0j3qCecctHpfPiBGLicMMgl2/MO1ake', '6tPb7fIMJ2', '2022-10-07 05:34:12', '2022-10-07 05:34:12'),
(30, 'Laborum ipsam ipsum nostrum excepturi impedit omnis rerum. Rem repudiandae non voluptatem. Ut sequi nam commodi hic est molestiae.', 'Mr. Ryann Gulgowski PhD', 'jerde.marquise@funk.com', 'Molestiae rerum quis voluptas sed aliquam error. Facere iste quis ab in. Ut voluptatum delectus id repudiandae.', '2022-10-07 05:34:12', '$2y$10$FkrCYaIXyAcXaxDJ.UjQDu08lhjdARGlRJyPaGWCgHOM7zsWYQz5e', '6phKpDy7qw', '2022-10-07 05:34:12', '2022-10-07 05:34:12'),
(31, 'Et laudantium laborum delectus reiciendis sit. Voluptas quod et facilis ut. Quibusdam veritatis tempore voluptate unde nesciunt natus autem. Corporis sunt nemo nihil consequatur.', 'Oswald Kunze', 'neva09@beatty.com', 'Est illum rerum ut qui ut amet. Quod ab consequatur hic doloremque optio illo. Quia nesciunt asperiores ea fugiat. Consequatur quae dolore reiciendis. Eaque assumenda repudiandae dolorem perferendis dignissimos.', '2022-10-07 05:34:12', '$2y$10$d0j.MBXAL0yqQXu39cAfHuX3t.PcmvlnRQ3j7mcr36dLkGq/WvkUa', 'Z5M7iM4jW2', '2022-10-07 05:34:12', '2022-10-07 05:34:12'),
(32, 'Et quibusdam veniam fugiat odit eveniet. Reiciendis est sint accusamus. Laboriosam autem vero saepe sint. Dicta iusto nisi alias fuga molestiae nisi voluptas.', 'Rosamond Beier V', 'arely.lesch@hotmail.com', 'Eaque unde quibusdam voluptas enim laudantium labore eum. Et iure est consequuntur possimus.', '2022-10-07 05:34:12', '$2y$10$tZLXPJmdHLlLnWblbIOR8OAxpmqwkg3oADxLS2BoBhwm1QUtwTMoW', '22useMolNX', '2022-10-07 05:34:12', '2022-10-07 05:34:12'),
(33, 'Quos excepturi laborum consequatur molestias consequatur corporis. Et ducimus temporibus sit ut error. Aliquid placeat itaque nesciunt in impedit vero molestias.', 'Brenden Kerluke', 'mortimer.stanton@maggio.com', 'Aut est in sed vel nihil perspiciatis. Beatae tempora molestiae omnis accusamus aut et. Ut suscipit rerum excepturi necessitatibus. Autem doloremque porro harum aperiam rerum et velit.', '2022-10-07 05:34:13', '$2y$10$5bAlDsS.//eJBhJ4MwjmwOFtnUqc54ry/zVTHPvXJGgGvzzP58cFW', 'cyNpEoebpn', '2022-10-07 05:34:13', '2022-10-07 05:34:13'),
(34, 'Nesciunt ipsa quae aut qui aperiam ad velit ducimus. Aut ipsa et sed. Est et asperiores qui omnis id sint est.', 'Jairo Cartwright', 'pfay@kozey.info', 'Occaecati et eaque corrupti est facilis architecto. Iste voluptate distinctio et consequatur laborum. Quas reiciendis id quidem qui sit quod. Aut pariatur quisquam voluptatem officia nobis quaerat assumenda.', '2022-10-07 05:34:13', '$2y$10$eqbzusKWRHyXgyN/5vPMauHdVQ9skPMYD47IX8FvSVkBxIDylot9m', 'gl3rNPxoVs', '2022-10-07 05:34:13', '2022-10-07 05:34:13'),
(35, 'Odio molestiae natus ab laudantium sed officia quis labore. Voluptate amet sit omnis voluptate reprehenderit. Quas veritatis facilis sunt temporibus animi et nihil. Ipsum qui ex consequatur nihil.', 'Edison Renner', 'slakin@botsford.com', 'Illo quia dolor sit fugit commodi. Harum id ipsam exercitationem illum excepturi ut recusandae debitis. Quisquam illo id autem sed asperiores. Dolorum officia alias et enim nihil magni.', '2022-10-07 05:34:13', '$2y$10$kwOvwkw3hQ0uep321E8iVuyLXC7WqgE2CjWEgZJ20xAUcF9m3UQ2S', '11hPXmQkCf', '2022-10-07 05:34:13', '2022-10-07 05:34:13'),
(36, 'Et rerum sit cum. Velit sit cum velit optio quis porro. Omnis ut facere eos non iure sit. Qui impedit eaque veritatis in est enim. Velit quasi quia quae nihil. Qui ut et reprehenderit nostrum quos ut.', 'Barney Hartmann II', 'ila70@wunsch.info', 'Dolorum numquam cupiditate corporis reiciendis. Doloribus distinctio fugit quis odit sed. Voluptate magnam enim saepe. Consequatur esse ullam quaerat ea voluptatum sint fugiat omnis.', '2022-10-07 05:34:13', '$2y$10$v.44uosl/TwMpmWpaax5fuTJYXO2gnXkUPjZe9yRybM9wCSpV5ZOy', 'effO5MWPZR', '2022-10-07 05:34:13', '2022-10-07 05:34:13'),
(37, 'Voluptas nostrum possimus autem doloremque illo. Omnis qui asperiores et ducimus consequuntur provident. Quos dolore omnis nam non mollitia. Dignissimos autem laborum eum nam quia in aut debitis.', 'Ray Carter', 'edwin.schmidt@waters.biz', 'Neque fugiat repellendus possimus quod quae. Dignissimos vel aspernatur beatae consequatur. Deleniti aliquam cumque et placeat doloremque voluptatem similique.', '2022-10-07 05:34:14', '$2y$10$AtErnUx8UgpiTE8IrBLuX.2VSwff7cbUrhTwGmeYeAHd.AfgQOQTe', 'G4k29HRkmI', '2022-10-07 05:34:14', '2022-10-07 05:34:14'),
(38, 'Quasi beatae neque velit distinctio dolorem et. Sit ipsum voluptates eligendi cupiditate. Numquam voluptatem id excepturi consequatur quis ipsum hic. Aspernatur magni voluptates est porro.', 'Cristopher Halvorson', 'wrunolfsdottir@gmail.com', 'Omnis non qui beatae modi maiores accusamus qui quas. Voluptas quam ut optio sed ipsum voluptatem quae. Voluptatem rem delectus et est. Sunt nobis sunt sed quisquam. Eos nisi accusamus impedit ducimus dicta laborum.', '2022-10-07 05:34:14', '$2y$10$SaFjwcHN63qvLduviUd1nugjFuaX8EaMQTK50cj3ShuBKVwmWiAbK', 'YFgTQgBJFF', '2022-10-07 05:34:14', '2022-10-07 05:34:14'),
(39, 'Magnam vitae aperiam aut quidem facere recusandae corrupti est. Non ipsam provident quia iure ab ea commodi. Vel provident excepturi perspiciatis eos reprehenderit modi voluptatem. Nihil eveniet quis odio sit doloremque voluptatem.', 'Kaleb Price', 'athiel@hotmail.com', 'Ex numquam quo explicabo ducimus voluptatibus. Debitis debitis et recusandae id minima. Aut omnis amet nostrum praesentium laborum voluptates. Provident exercitationem nulla voluptate ea rerum eius nesciunt.', '2022-10-07 05:34:14', '$2y$10$nsvKko1JA7MixT/C/Te00udVjbw8qHi1Ok0lo0.M06K9V9BO73PQC', 'XxwRrrPY7S', '2022-10-07 05:34:14', '2022-10-07 05:34:14'),
(40, 'Explicabo inventore quia praesentium perspiciatis laborum a. Aperiam sit amet dolore in illo. Fuga architecto culpa vero iure perspiciatis eveniet similique. Harum qui distinctio adipisci est maxime ut.', 'Emerald Parker', 'queen.hamill@yahoo.com', 'Tempore ullam facilis dolore dolor. Id ad debitis est id sint laboriosam consequuntur possimus. Quasi doloribus commodi asperiores sed iusto.', '2022-10-07 05:34:14', '$2y$10$6PzkN2mivesrBwdoyMc5vOKjcekQF2QUajq8g0cMBpvVGLBl7vsZm', 'ITb8tANl0i', '2022-10-07 05:34:14', '2022-10-07 05:34:14'),
(41, 'Neque porro dignissimos illo provident modi. Voluptatum optio ipsam vero assumenda ut dolore cupiditate. Suscipit sed rerum molestias distinctio ab doloribus sapiente. Qui sint ipsa enim ipsam rem nemo.', 'Rose Ratke', 'anne35@hotmail.com', 'Sequi eaque laborum soluta deserunt ea. Quia dicta omnis unde dolor. Maiores maxime atque excepturi minima. Quia deserunt sunt ipsum explicabo rerum.', '2022-10-07 05:34:15', '$2y$10$4CDS3DEGGTZcgx.63.ntVO6sFgrLQax3thKRBlV5WpgR/II3mwlUO', 'RWv0A5kjjP', '2022-10-07 05:34:15', '2022-10-07 05:34:15'),
(42, 'Impedit voluptatum earum nisi autem dolorum maiores. Minima voluptatem deserunt corrupti vel expedita aut. Corrupti non minus velit rem. Non accusantium enim unde iure perferendis.', 'Giovani Powlowski', 'denesik.thelma@hotmail.com', 'Sit libero ea est veritatis. Sapiente facere minima dolores voluptates eum. Tenetur quis alias excepturi dolor. Iusto voluptas eos placeat atque nulla.', '2022-10-07 05:34:15', '$2y$10$LatD35JB2W7tir/CzkpBRO60YMYufHQYasZBSUebUEwS7a1YuFxk6', '9ZjBPzFSNl', '2022-10-07 05:34:15', '2022-10-07 05:34:15'),
(43, 'Ipsam quo et quod doloremque nisi natus. Cumque voluptates adipisci at ex tempora laudantium. Saepe neque non molestiae. Ullam mollitia accusamus est.', 'Elvera Zulauf', 'osatterfield@prosacco.org', 'Ut numquam et voluptates rerum. Vel asperiores veritatis provident rerum. Enim aut voluptatum rerum repellendus pariatur.', '2022-10-07 05:34:15', '$2y$10$aq5xk0Qx23mz6ZV8DcMMV.2d6LN.LYjln29W0LGevPaKKsxnNVxSe', 'IJmLHrq8Cl', '2022-10-07 05:34:16', '2022-10-07 05:34:16'),
(44, 'Veritatis ea qui id iusto repudiandae accusantium. Illo facere in quod in omnis voluptatum quia est. Sunt architecto eos nesciunt eveniet cumque voluptatem.', 'Eudora Marvin', 'xtreutel@gmail.com', 'Cumque et deserunt molestiae architecto debitis a alias. Est culpa eos nostrum reiciendis quae. Sunt eligendi quia earum iure ipsa illum.', '2022-10-07 05:34:16', '$2y$10$lh50rrRg1sfCMcUFMWcT.eJn02gohQbjWJpQrnrNDkvfCeT./jlFO', 'h1LWzzN0YY', '2022-10-07 05:34:16', '2022-10-07 05:34:16'),
(45, 'Aspernatur aut labore qui praesentium dolore voluptatem. Molestiae rerum dicta aperiam quam aliquam beatae quam.', 'Pearline Sawayn', 'xschulist@toy.info', 'Nam modi reiciendis consectetur et consectetur aut. Inventore ut ex maxime et repellat unde. Adipisci ut adipisci voluptatibus eum exercitationem hic. Tempora omnis dolores eligendi velit qui illum illo.', '2022-10-07 05:34:16', '$2y$10$N0OL67MJLNPPyRD.8Ts1X.rE/D6B5aa01DkmvjevUXijuJBPuzWBy', 'Dns08OnAL3', '2022-10-07 05:34:16', '2022-10-07 05:34:16'),
(46, 'Cum neque qui soluta laboriosam. Earum exercitationem animi quas libero adipisci dicta. Ut corrupti est debitis ut quia culpa occaecati aut. Consequatur quos id illum itaque.', 'Erick Bauch', 'waelchi.tyson@west.biz', 'Facere facilis enim enim. Est ipsum facilis placeat vel magni temporibus quisquam. Voluptas rem non eos iste assumenda. Sunt ad velit quia consequatur voluptates aut ipsa.', '2022-10-07 05:34:16', '$2y$10$Bfc9qm/PvgfYqTlM6g07fOhPeyY.B7hCfDFT4GpylRuqpvcc0oyRW', 'kxBVsOQuEc', '2022-10-07 05:34:16', '2022-10-07 05:34:16'),
(47, 'Ex optio dolorem est a magnam. Quia eaque earum eligendi quas explicabo voluptas commodi. Quasi inventore maiores porro quia aut esse vero.', 'Zula Orn', 'joshua65@olson.com', 'Aut aut magnam consequatur perferendis ut non placeat. Deleniti neque provident omnis voluptatem quidem. Quos ab ullam repellat molestias quia eum consequatur. Esse nihil aperiam perferendis placeat debitis.', '2022-10-07 05:34:17', '$2y$10$2WQje/RLM.6Mvum7b19GGOQLBoHL2nvsx9gNlm7hhZs.qfjjreECa', 'm62VYtJWmJ', '2022-10-07 05:34:17', '2022-10-07 05:34:17'),
(48, 'Fugit voluptatum quos explicabo incidunt et quam beatae. Recusandae ut in iure nulla. Fuga reiciendis quis debitis. Aut natus doloremque est ut repudiandae consequatur nulla. Tenetur atque consectetur nihil eligendi doloribus.', 'Dennis Kautzer', 'daugherty.carlos@yahoo.com', 'Voluptas omnis soluta quis. Dolorem sequi tempora explicabo rerum maiores voluptatem accusantium. Suscipit accusantium sapiente ex sed.', '2022-10-07 05:34:17', '$2y$10$2FuhdDKpLtYy4AWVGCxA7OuVbsIjqDYZKR9MQdc.bLjUCXWG.hV0G', 'rCVH4mnvGW', '2022-10-07 05:34:17', '2022-10-07 05:34:17'),
(49, 'Non repudiandae sunt esse non. Reprehenderit voluptatibus quidem similique iste. Cum rerum expedita sed sunt. Repellat itaque rerum in et. Odit non at mollitia odio libero fuga.', 'Dr. Gaetano Boyer', 'wiley.frami@bailey.info', 'Harum aliquid in minima. Commodi est nobis nostrum dolorem qui ut. Et et nihil et tempora. Consectetur similique sed ut aut.', '2022-10-07 05:34:17', '$2y$10$OiN2mYZqOPjwcAwOUyDyb.UzlUOkLdl69mgM5hSEePuDENOxykITq', 'cLdYUExJlx', '2022-10-07 05:34:17', '2022-10-07 05:34:17'),
(50, 'Omnis sapiente quibusdam asperiores et nihil. Autem est incidunt quaerat neque voluptatem. Et laboriosam maiores voluptatem tempora. Non dignissimos quasi qui libero ut accusamus. Est ipsam officia delectus totam nihil non.', 'Ismael Carter DVM', 'acruickshank@yahoo.com', 'Est blanditiis voluptatem consectetur enim harum. Inventore nemo ab qui at aut recusandae. Est ut iusto quibusdam esse ut et. Dolores qui ducimus maiores unde similique dolores. Architecto vel eos aut quia et odio ratione. Omnis enim enim ducimus.', '2022-10-07 05:34:17', '$2y$10$xn88t5EMnmPC915TdQ.gSey/nS0G8hwJ6jKnKlVO06K8jNvmmKpm2', '9xtjjnv9hq', '2022-10-07 05:34:18', '2022-10-07 05:34:18'),
(51, 'Sed velit aut quia est aliquid reiciendis. Rerum earum harum omnis iure et et veritatis nulla. Voluptate aut non labore provident quam architecto. Animi optio laudantium ut sed ipsam quia a.', 'Elsa Emard', 'hattie.kovacek@jaskolski.com', 'Voluptatibus et earum rerum eum. Repellat hic tempora laborum aut libero. Nesciunt facilis ratione voluptate ipsum quae. Aut hic sed qui tempora molestias quia quis.', '2022-10-07 05:34:18', '$2y$10$Yi3Yg/oIyvZxn9XhVeSnVeCJvB713KDF6DFFJ9LJ4mDabBtuZfbkG', 'TFENj0oc8a', '2022-10-07 05:34:18', '2022-10-07 05:34:18'),
(52, 'Voluptatibus sit et quam tempore eum. Laboriosam quis non consectetur mollitia. Ea delectus rerum nesciunt voluptatum animi deserunt aut porro. Vel cumque iste omnis et nam enim.', 'Will Bartell', 'cullen.monahan@kshlerin.info', 'Eum et dolor facere et. Eos quia assumenda doloribus reiciendis vel nihil ab. Qui quia natus placeat vitae. Eaque fuga accusamus inventore aut qui.', '2022-10-07 05:34:18', '$2y$10$qXiBsBfP8R01Z2ANUkrq/OqdAxWl4wwEhWlxJBMAjE2E3UvOUaJ1u', 'sXD9cVVCOF', '2022-10-07 05:34:19', '2022-10-07 05:34:19'),
(53, 'Voluptatum numquam tempora est sed consequatur debitis. Qui excepturi est enim corporis et. Repellendus explicabo excepturi sequi recusandae id modi. Sed eos voluptatem sit dolor.', 'Cristopher Goodwin', 'trinity.kuvalis@boehm.org', 'Voluptas aliquam voluptates et sed. Delectus cum aut laudantium nemo assumenda necessitatibus ab. Quia voluptas autem quasi libero deserunt nihil.', '2022-10-07 05:34:19', '$2y$10$5Q4EPnT6bbSf9S5.uL1v7erqu1xaF13d5bwRKS6HWa85nWR595m2K', 'MLttRY5wUd', '2022-10-07 05:34:19', '2022-10-07 05:34:19'),
(54, 'Voluptatibus perferendis sit est iusto non. Sit magnam ut sit facere velit. Aperiam sunt qui hic porro dolorem tempore. Vero magnam itaque quis.', 'Fabian Schiller', 'lortiz@yahoo.com', 'Architecto nesciunt blanditiis nihil tenetur. Earum quidem dolorum suscipit. Aspernatur dignissimos eveniet est aut cum. Voluptas commodi eaque aliquid nesciunt. Ex eius voluptas quaerat et qui omnis porro quis.', '2022-10-07 05:34:19', '$2y$10$7n/L6rCKFQzcEnTJbzg4Mu5WTNJj77zDCxyNSNuIOIR4tBNf0/30m', 'XChtfWAYUs', '2022-10-07 05:34:19', '2022-10-07 05:34:19'),
(55, 'Quibusdam voluptates placeat qui dolorem est aut et. Natus aut eligendi ipsum nobis dolore. Itaque nihil explicabo ipsum odit sit totam. Impedit aspernatur et eos eveniet. Illum sapiente ut sint quasi eos.', 'Ian Considine', 'labadie.raymond@gmail.com', 'Doloribus dolorem fugit ea. Hic amet est culpa sit. Iure molestiae enim voluptas cupiditate odit earum. Ad eos excepturi nulla suscipit. Aliquam id asperiores beatae voluptatem enim error est.', '2022-10-07 05:34:19', '$2y$10$VIkqP7.w/pgyafostpH2iePNACbM2xtzTsDGt2f3rrpd0bwuEwZfa', 'vbtjDWQWNq', '2022-10-07 05:34:19', '2022-10-07 05:34:19'),
(56, 'Porro est quos tenetur id id porro. Autem corrupti eum ducimus. Assumenda consequuntur consequatur quo sed. Ullam est voluptatem aut omnis. Minima voluptate atque et beatae explicabo. Numquam vel nemo consequatur vel asperiores qui.', 'Mrs. Jody Quitzon PhD', 'zkunde@wisozk.com', 'Et est nulla nihil et molestiae. Temporibus est commodi autem iure ea. Nobis et voluptas blanditiis mollitia nostrum. In non officia praesentium labore ea.', '2022-10-07 05:34:19', '$2y$10$jYpU/XCWSVGLPFF6VCAuqO.ZJA9sE8OezDt4L6pIO/nlyONOdPSzG', 'Vx1AXR8FTN', '2022-10-07 05:34:19', '2022-10-07 05:34:19');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booking_settings`
--
ALTER TABLE `booking_settings`
  ADD PRIMARY KEY (`id`),
  ADD KEY `booking_settings_location_id_foreign` (`location_id`);

--
-- Indexes for table `cancer_types`
--
ALTER TABLE `cancer_types`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `checklists`
--
ALTER TABLE `checklists`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `common_problems`
--
ALTER TABLE `common_problems`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `examination_factors`
--
ALTER TABLE `examination_factors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `family_histories`
--
ALTER TABLE `family_histories`
  ADD PRIMARY KEY (`id`),
  ADD KEY `family_histories_patient_id_foreign` (`patient_id`),
  ADD KEY `family_histories_cancer_type_id_foreign` (`cancer_type_id`);

--
-- Indexes for table `followup_reasons`
--
ALTER TABLE `followup_reasons`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `locations`
--
ALTER TABLE `locations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  ADD KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  ADD KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `patients`
--
ALTER TABLE `patients`
  ADD PRIMARY KEY (`id`),
  ADD KEY `patients_user_id_foreign` (`user_id`);

--
-- Indexes for table `patient_bookings`
--
ALTER TABLE `patient_bookings`
  ADD PRIMARY KEY (`id`),
  ADD KEY `patient_bookings_patient_id_foreign` (`patient_id`),
  ADD KEY `patient_bookings_location_id_foreign` (`location_id`);

--
-- Indexes for table `patient_examinations`
--
ALTER TABLE `patient_examinations`
  ADD PRIMARY KEY (`id`),
  ADD KEY `patient_examinations_patient_id_foreign` (`patient_id`),
  ADD KEY `patient_examinations_examination_factor_id_foreign` (`examination_factor_id`);

--
-- Indexes for table `patient_investigations`
--
ALTER TABLE `patient_investigations`
  ADD PRIMARY KEY (`id`),
  ADD KEY `patient_investigations_patient_id_foreign` (`patient_id`);

--
-- Indexes for table `patient_managment_plans`
--
ALTER TABLE `patient_managment_plans`
  ADD PRIMARY KEY (`id`),
  ADD KEY `patient_managment_plans_checklist_id_foreign` (`checklist_id`),
  ADD KEY `patient_managment_plans_patient_id_foreign` (`patient_id`);

--
-- Indexes for table `patient_problems`
--
ALTER TABLE `patient_problems`
  ADD PRIMARY KEY (`id`),
  ADD KEY `patient_problems_patient_id_foreign` (`patient_id`),
  ADD KEY `patient_problems_common_problem_id_foreign` (`common_problem_id`);

--
-- Indexes for table `patient_risk_factors`
--
ALTER TABLE `patient_risk_factors`
  ADD PRIMARY KEY (`id`),
  ADD KEY `patient_risk_factors_patient_id_foreign` (`patient_id`);

--
-- Indexes for table `patient_ultra_sound_scans`
--
ALTER TABLE `patient_ultra_sound_scans`
  ADD PRIMARY KEY (`id`),
  ADD KEY `patient_ultra_sound_scans_patient_id_foreign` (`patient_id`),
  ADD KEY `patient_ultra_sound_scans_ultra_sound_scan_factor_id_foreign` (`ultra_sound_scan_factor_id`);

--
-- Indexes for table `patien_followups`
--
ALTER TABLE `patien_followups`
  ADD PRIMARY KEY (`id`),
  ADD KEY `patien_followups_patient_id_foreign` (`patient_id`),
  ADD KEY `patien_followups_followup_reason_id_foreign` (`followup_reason_id`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permissions_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indexes for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `role_has_permissions_role_id_foreign` (`role_id`);

--
-- Indexes for table `ultra_sound_scan_factors`
--
ALTER TABLE `ultra_sound_scan_factors`
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
-- AUTO_INCREMENT for table `booking_settings`
--
ALTER TABLE `booking_settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `cancer_types`
--
ALTER TABLE `cancer_types`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `checklists`
--
ALTER TABLE `checklists`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `common_problems`
--
ALTER TABLE `common_problems`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `examination_factors`
--
ALTER TABLE `examination_factors`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `family_histories`
--
ALTER TABLE `family_histories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `followup_reasons`
--
ALTER TABLE `followup_reasons`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `locations`
--
ALTER TABLE `locations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `patients`
--
ALTER TABLE `patients`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `patient_bookings`
--
ALTER TABLE `patient_bookings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `patient_examinations`
--
ALTER TABLE `patient_examinations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `patient_investigations`
--
ALTER TABLE `patient_investigations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `patient_managment_plans`
--
ALTER TABLE `patient_managment_plans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `patient_problems`
--
ALTER TABLE `patient_problems`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `patient_risk_factors`
--
ALTER TABLE `patient_risk_factors`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `patient_ultra_sound_scans`
--
ALTER TABLE `patient_ultra_sound_scans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `patien_followups`
--
ALTER TABLE `patien_followups`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=106;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `ultra_sound_scan_factors`
--
ALTER TABLE `ultra_sound_scan_factors`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `booking_settings`
--
ALTER TABLE `booking_settings`
  ADD CONSTRAINT `booking_settings_location_id_foreign` FOREIGN KEY (`location_id`) REFERENCES `locations` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `family_histories`
--
ALTER TABLE `family_histories`
  ADD CONSTRAINT `family_histories_cancer_type_id_foreign` FOREIGN KEY (`cancer_type_id`) REFERENCES `cancer_types` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `family_histories_patient_id_foreign` FOREIGN KEY (`patient_id`) REFERENCES `patients` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `patients`
--
ALTER TABLE `patients`
  ADD CONSTRAINT `patients_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `patient_bookings`
--
ALTER TABLE `patient_bookings`
  ADD CONSTRAINT `patient_bookings_location_id_foreign` FOREIGN KEY (`location_id`) REFERENCES `locations` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `patient_bookings_patient_id_foreign` FOREIGN KEY (`patient_id`) REFERENCES `patients` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `patient_examinations`
--
ALTER TABLE `patient_examinations`
  ADD CONSTRAINT `patient_examinations_examination_factor_id_foreign` FOREIGN KEY (`examination_factor_id`) REFERENCES `examination_factors` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `patient_examinations_patient_id_foreign` FOREIGN KEY (`patient_id`) REFERENCES `patients` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `patient_investigations`
--
ALTER TABLE `patient_investigations`
  ADD CONSTRAINT `patient_investigations_patient_id_foreign` FOREIGN KEY (`patient_id`) REFERENCES `patients` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `patient_managment_plans`
--
ALTER TABLE `patient_managment_plans`
  ADD CONSTRAINT `patient_managment_plans_checklist_id_foreign` FOREIGN KEY (`checklist_id`) REFERENCES `checklists` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `patient_managment_plans_patient_id_foreign` FOREIGN KEY (`patient_id`) REFERENCES `patients` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `patient_problems`
--
ALTER TABLE `patient_problems`
  ADD CONSTRAINT `patient_problems_common_problem_id_foreign` FOREIGN KEY (`common_problem_id`) REFERENCES `common_problems` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `patient_problems_patient_id_foreign` FOREIGN KEY (`patient_id`) REFERENCES `patients` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `patient_risk_factors`
--
ALTER TABLE `patient_risk_factors`
  ADD CONSTRAINT `patient_risk_factors_patient_id_foreign` FOREIGN KEY (`patient_id`) REFERENCES `patients` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `patient_ultra_sound_scans`
--
ALTER TABLE `patient_ultra_sound_scans`
  ADD CONSTRAINT `patient_ultra_sound_scans_patient_id_foreign` FOREIGN KEY (`patient_id`) REFERENCES `patients` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `patient_ultra_sound_scans_ultra_sound_scan_factor_id_foreign` FOREIGN KEY (`ultra_sound_scan_factor_id`) REFERENCES `ultra_sound_scan_factors` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `patien_followups`
--
ALTER TABLE `patien_followups`
  ADD CONSTRAINT `patien_followups_followup_reason_id_foreign` FOREIGN KEY (`followup_reason_id`) REFERENCES `followup_reasons` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `patien_followups_patient_id_foreign` FOREIGN KEY (`patient_id`) REFERENCES `patients` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
