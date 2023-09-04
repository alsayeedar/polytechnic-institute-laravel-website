-- phpMyAdmin SQL Dump
-- version 4.9.5deb2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Aug 28, 2023 at 06:05 PM
-- Server version: 8.0.34-0ubuntu0.20.04.1
-- PHP Version: 8.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `basati`
--

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2023_08_02_090721_create_settings_table', 2),
(7, '2023_08_02_102008_create_notices_table', 3),
(8, '2023_08_02_171415_add_menu_to_settings_table', 4),
(9, '2023_08_03_032922_create_technologies_table', 5),
(10, '2023_08_03_034725_add_color_to_technologies_table', 6),
(11, '2023_08_03_055737_create_sliders_table', 7),
(12, '2023_08_03_061717_create_pages_table', 8),
(13, '2023_08_03_070527_add_notice_to_settings_table', 9);

-- --------------------------------------------------------

--
-- Table structure for table `notices`
--

CREATE TABLE `notices` (
  `id` bigint UNSIGNED NOT NULL,
  `title` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `body` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_published` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `notices`
--

INSERT INTO `notices` (`id`, `title`, `body`, `is_published`, `created_at`, `updated_at`) VALUES
(1, 'Laborum libero magnam praesentium velit ut. Delectus totam sit voluptate impedit.', 'Perferendis voluptatum quod suscipit ut. Alias eum iusto et quae quidem distinctio quos. Illum dolor accusamus autem esse dolorem excepturi non. Dolor minima qui quasi similique. Perspiciatis in architecto sunt voluptatibus voluptatem quia laborum. Aut et eum consequatur consequatur. Eum non nulla accusantium et dicta similique quasi. Sit enim dolor molestiae et non. Nostrum necessitatibus alias omnis voluptas fugit architecto voluptas. Doloribus laborum vel sunt saepe voluptas rerum.', 0, '2023-08-02 04:57:28', '2023-08-02 04:57:28'),
(2, 'Voluptatibus facilis voluptatem quis fugiat in a iure.', 'Ut cupiditate nam nesciunt dignissimos debitis. Ducimus reiciendis quisquam iste dolorem explicabo officia quia aut. Voluptatum error itaque et ducimus quis. Veniam voluptatem officiis delectus aut qui. Nam cum mollitia a in inventore. Et nulla illum non. Laudantium quisquam iusto alias qui quia consectetur. Velit aperiam eveniet quas provident impedit omnis. Et eum sapiente voluptas impedit ea. Recusandae vel est quisquam sunt sit. Voluptas ut possimus cum magni iusto.', 1, '2023-08-02 04:57:28', '2023-08-02 04:57:28'),
(3, 'Et pariatur est aut molestiae ea. Illo et perferendis sequi cupiditate.', 'Et assumenda sed harum rerum aut in. Excepturi impedit debitis sint porro et neque culpa possimus. Voluptas numquam qui est maxime nihil. Quae explicabo ab commodi.', 0, '2023-08-02 04:57:28', '2023-08-02 04:57:28'),
(4, 'Maxime eum eius est et velit. Et consequatur praesentium ut tempora quasi quod eveniet.', 'Quia maiores est molestias ex quaerat officia et. Veritatis sed qui ab. Beatae magni voluptatum quisquam qui a iure. Et facere ea est doloremque qui. Autem delectus quaerat labore. Nihil dolores officiis sint ullam. Recusandae doloremque voluptas dolorem amet ipsum laborum sit. Aut sint sit ut perspiciatis. Velit sapiente alias adipisci nihil in odio. Nisi dolore non beatae esse explicabo corrupti. Quia cum recusandae aut omnis est doloremque reiciendis alias.', 1, '2023-08-02 04:57:28', '2023-08-02 04:57:28'),
(6, 'Aut tempora voluptatem consequatur sunt.', 'Doloribus sequi aliquam dolor nesciunt eligendi sunt a nisi. Ad ad dolorem et omnis quidem corporis aut. Harum libero sed sint aliquam aut incidunt. Rerum quia incidunt exercitationem et commodi fugiat. Nulla et earum qui sint iste in. Eum perspiciatis optio sit rerum labore. Eius minima voluptatem est qui numquam. Ex dolores sed repudiandae error omnis sapiente recusandae.', 1, '2023-08-02 04:57:29', '2023-08-02 04:57:29'),
(7, 'Assumenda esse molestias assumenda optio molestiae eveniet.', 'Hic dolores veniam rem et omnis dolor. Molestias vero nam nostrum excepturi. Libero distinctio alias iure et cumque et. Nemo itaque optio earum quae in soluta molestias. Consectetur et possimus ut vel natus sed eius. Impedit ab aliquid non ducimus excepturi ipsa. Quo ab hic nam doloremque cumque sapiente ipsum. Officia autem voluptas voluptates voluptates ratione.', 0, '2023-08-02 04:57:29', '2023-08-02 04:57:29'),
(8, 'Accusamus id quia ducimus quam facilis. Reiciendis aut iste sed atque facilis.', 'Animi harum ut fugit illo molestiae voluptatem. Voluptatem qui quidem aut officia perferendis omnis. Aut ex eius blanditiis aliquam qui ea consequuntur sed. Consequatur quo impedit deleniti sit fugiat. Explicabo consequatur ut veritatis aut qui sit. Dignissimos accusantium ea dolore sed reprehenderit explicabo. Temporibus magni asperiores harum consequatur. Exercitationem fugit consequatur quisquam ut quos sed perspiciatis.', 1, '2023-08-02 04:57:29', '2023-08-02 04:57:29'),
(9, 'Reiciendis recusandae aliquid sed commodi quisquam. Harum quo tempora distinctio delectus rerum vitae.', 'Culpa ut qui nostrum et. Nulla accusantium neque officiis temporibus consequatur commodi ea. Veritatis perspiciatis asperiores et assumenda id itaque. Ea occaecati qui a quas. Dolorem quisquam non porro porro non delectus quas. Suscipit aspernatur placeat repellat rem amet ut asperiores. Sunt deserunt quia expedita quia. Quam et velit quam commodi. Eos quia illum hic placeat. Porro dolore illum facere repellendus id aut. A maxime ut officia velit impedit similique quod quasi. Rerum perferendis accusantium id. Ad accusamus dolorum sequi enim earum debitis nisi quia.', 1, '2023-08-02 04:57:29', '2023-08-02 04:57:29'),
(10, 'Voluptates nihil animi facilis consectetur laudantium.', 'Et fugiat exercitationem eos et. Eaque eos sit qui et. In totam sit in itaque quo quo nesciunt. Velit ut quas atque voluptatum eos natus. Adipisci hic repudiandae quo dolorum rem neque. Explicabo et facere quos magnam voluptas cupiditate rerum.', 1, '2023-08-02 04:57:29', '2023-08-02 04:57:29'),
(11, 'Nobis animi laudantium quo. Et accusantium nam velit rem quaerat molestiae.', 'Delectus sapiente veritatis minima debitis iste. Delectus corrupti accusamus quis porro. Non sed qui autem. Quis esse officia qui harum ipsam sequi similique. Qui atque facere corrupti molestiae. Omnis repudiandae nobis quibusdam explicabo mollitia. Possimus quaerat amet impedit sunt ducimus eaque dolor. Sit quibusdam animi consectetur enim. Dolorem et iure voluptatem dolorem. Cupiditate et nostrum fugiat et. Sit iure veritatis ea ullam voluptate et. Sit aperiam vel dolorum est.', 1, '2023-08-02 04:57:29', '2023-08-02 04:57:29'),
(12, 'Ab accusamus harum non ut exercitationem exercitationem repellat ratione.', 'Voluptatum ut harum doloremque neque esse odit. Aspernatur qui minus labore laborum et. Itaque quidem error perspiciatis rem quas vel molestias. Consequatur tempore et expedita non laborum. Consequuntur sed explicabo ut alias aut. Voluptatem aspernatur consequuntur non minima. Rerum et delectus illo sapiente sapiente earum aliquam. A aut ducimus ea laudantium dolores. Laudantium delectus tempore maxime est ut. Impedit fuga sunt minus ut perferendis exercitationem doloremque.', 1, '2023-08-02 04:57:29', '2023-08-02 04:57:29'),
(13, 'In omnis molestias quia dolorum sit impedit odit. Qui enim soluta quia odit.', 'Voluptatem cumque et cum ipsum voluptatem. Eum ut ipsam tempore repellendus. Velit blanditiis sapiente unde voluptatem. Rerum minima odio quia quia debitis ea cum. Numquam assumenda impedit et quos deserunt laboriosam sed sint. Ad voluptatum rerum laudantium aut esse. Dolor labore eveniet qui ut aut. Commodi rerum pariatur aut earum qui minus aliquid. Non ipsa voluptas veritatis. Adipisci libero explicabo quis veritatis voluptatibus. Culpa ex aut soluta. Minus perferendis impedit laborum reiciendis incidunt. Dolorem id animi commodi ratione assumenda consequuntur.', 1, '2023-08-02 04:57:29', '2023-08-02 04:57:29'),
(14, 'Magni ut aut itaque cum dolorum mollitia.', 'Quo veniam possimus deserunt quia voluptas laudantium similique. Soluta pariatur dolor magnam labore qui beatae est. Et natus iste hic magnam omnis qui. Velit incidunt quasi magni libero. Fugit sit ea commodi error illum est. Ut voluptas sed fugiat et quo deserunt voluptates. Fugit consectetur consequuntur delectus earum culpa adipisci eum maiores.', 1, '2023-08-02 04:57:30', '2023-08-02 04:57:30'),
(15, 'Ut voluptatem nisi tempore voluptatem voluptatem quaerat. Ad laboriosam qui voluptas minima at accusantium.', 'Nulla sed ex quae iusto pariatur qui dolor natus. Ipsa consectetur ut qui odio. Quidem vel beatae eaque harum temporibus. Eaque rerum et quo enim. Voluptatem consequatur autem temporibus corporis praesentium aspernatur. Facilis harum aspernatur tempore ea exercitationem voluptate et. Repellendus aliquam nam corporis ut repellat provident reprehenderit. Earum rem labore dolor modi. Quas doloribus fuga dolor dolorem. Minus similique modi ut possimus. Ex nobis dolore qui possimus.', 0, '2023-08-02 04:57:30', '2023-08-02 04:57:30'),
(16, 'Maxime ea reprehenderit quia ipsum aspernatur inventore nemo.', 'Nam quam quas suscipit est aspernatur accusantium. Libero cumque id <b class=\"alert-danger\">quo error</b> aliquam sit at sequi. Quo explicabo perferendis beatae fugiat ratione impedit. Aperiam earum aspernatur soluta quod quo sunt. Placeat mollitia voluptates dolore molestias sit aut nulla. Tempora dolorem facere sint fugit quia aut. Cupiditate commodi voluptate deleniti ullam beatae facere voluptatem totam. Voluptates eveniet repudiandae quos sunt.', 1, '2023-08-02 04:57:30', '2023-08-02 04:57:30'),
(17, 'Mollitia minus facilis repellendus voluptates quo sapiente.', 'Fugit aliquid dolorum possimus ut et. Nihil officia nihil et voluptatum sapiente temporibus velit. Ut blanditiis ut alias earum. Vitae facere exercitationem nobis. Corporis et sit et et asperiores magnam libero. Ut rerum optio quas tempora maiores. Similique incidunt odit quo non enim velit omnis ut. Tempora odit a dolore aspernatur incidunt amet porro qui.', 0, '2023-08-02 04:57:30', '2023-08-02 04:57:30'),
(18, 'Commodi perspiciatis cum hic ea ut voluptate doloremque. Similique debitis ad corporis aspernatur est.', 'Veniam vel numquam maxime. Ut perferendis rem eos et dolores ut consequatur. Aut beatae sit aut aliquid. Qui deleniti odit est illum. Voluptatem doloremque nam voluptate odio sed dolor deleniti. Voluptatibus provident explicabo sit non numquam voluptatem aut suscipit. Est inventore qui accusantium et. Earum non consequatur sapiente accusamus. Perferendis animi sequi quia veritatis quis corporis. Sequi provident sed deserunt sunt provident. Et cum nobis qui ea. Ut perferendis optio porro ipsam numquam eum.', 0, '2023-07-24 04:57:30', '2023-08-02 04:57:30'),
(19, 'Dolorem exercitationem omnis ut harum dicta maiores et. Consequatur eveniet id minima est voluptatum atque.', 'Nam quam quas suscipit est aspernatur accusantium. Libero cumque id <b class=\"alert-danger\">quo error</b> aliquam sit at sequi. Quo explicabo perferendis beatae fugiat ratione impedit. Aperiam earum aspernatur soluta quod quo sunt. Placeat mollitia voluptates dolore molestias sit aut nulla. Tempora dolorem facere sint fugit quia aut. Cupiditate commodi voluptate deleniti ullam beatae facere voluptatem totam. Voluptates eveniet repudiandae quos sunt. Omnis deserunt harum eum molestiae illo. Dignissimos non repellat consequatur illum possimus. Autem laborum ullam amet eos eligendi consequuntur quos. Nulla dolorem sint et rem nihil. Alias ea labore ea eum vitae aut ipsam. Libero suscipit dolores harum perspiciatis sint. Officiis aliquam quas voluptas velit rerum omnis quia eligendi. Sit dolor vel id qui quis. Rerum eveniet amet et. Mollitia perferendis molestiae nesciunt ut non.', 1, '2023-08-03 14:21:32', '2023-08-02 04:57:30'),
(20, 'Animi dicta est aliquid voluptatem.', 'Odio necessitatibus at repellat sed. Sequi autem eveniet ut quas autem est ut quo. Voluptas eius totam eos delectus voluptas nisi. Ullam qui eos illo. Vitae vel et saepe temporibus. Et ea quia fuga aliquid unde aut esse facere. Provident voluptatem ea nam voluptas sed dolorem. Magnam laboriosam necessitatibus rerum incidunt necessitatibus quas omnis. Voluptatem praesentium quia laudantium nam. Cum nostrum aliquid itaque earum. Incidunt consequuntur ullam cumque veniam atque ea aliquid. Excepturi libero doloremque quam non tempore minus. Debitis ad fugiat cum qui commodi qui perferendis inventore. Ab velit dolore doloribus ipsa. Quae minima sint ipsum in numquam nihil. Nostrum molestiae enim qui porro. Magni facere assumenda doloremque ipsum dignissimos ut et debitis.', 0, '2023-08-02 04:57:30', '2023-08-02 04:57:30'),
(21, 'hello world', '<p>Lorem ipsum dolor sit amet <b><font color=\"#000000\" style=\"background-color: rgb(255, 255, 0);\"><u>consectetur </u></font></b>adipisicing elit. Praesentium, optio laborum? Excepturi iusto fuga quas nostrum repellat accusantium, ullam neque ducimus libero voluptate error doloribus laboriosam labore ad reprehenderit vel?<br></p>', 1, '2023-08-10 12:39:14', '2023-08-10 12:52:39');

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE `pages` (
  `id` bigint UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `body` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`id`, `title`, `slug`, `body`, `status`, `created_at`, `updated_at`) VALUES
(1, 'About Us', 'about-us', 'About Us body content', 1, '2023-08-03 00:28:57', '2023-08-03 00:28:57');

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` bigint UNSIGNED NOT NULL,
  `short_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `full_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `logo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `facebook` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `youtube` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `maps` text COLLATE utf8mb4_unicode_ci,
  `mobile` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL,
  `notice` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `header_menu` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin,
  `footer_menu` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `short_title`, `full_title`, `logo`, `address`, `email`, `facebook`, `youtube`, `maps`, `mobile`, `notice`, `header_menu`, `footer_menu`, `created_at`, `updated_at`) VALUES
(1, 'BASATI', 'Badiul Alam Science & Technology Institute, Kasba', 'institutesitelogo5075.png', 'P4WP+W46, Road, Kasba, Brahmanbaria', 'basatibbaria@gmail.com', 'https://www.facebook.com/basatibd', NULL, 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3652.0027855234134!2d91.13270177469738!3d23.747280078672528!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x375474a8074c7039%3A0xaee75cf65ecd310d!2sBadiul%20Alam%20Science%20%26%20Technology%20Institute!5e0!3m2!1sen!2sbd!4v1690903306849!5m2!1sen!2sbd', '[\"01833878264\", \"01833878264\"]', 'Custom Notice From Database. Custom Notice From Database. Custom Notice From Database.', '[{\"text\":\"Home\",\"href\":\"http:\\/\\/127.0.0.1:8000\\/\",\"icon\":\"\",\"tooltip\":\"\",\"children\":[]},{\"text\":\"About Us\",\"href\":\"\",\"icon\":\"\",\"tooltip\":\"\",\"children\":[{\"text\":\"About Us\",\"href\":\"http:\\/\\/127.0.0.1:8000\\/page\\/about-us\",\"icon\":\"\",\"tooltip\":\"\",\"children\":[]}]},{\"text\":\"Technologies\",\"href\":\"\",\"icon\":\"\",\"tooltip\":\"\",\"children\":[{\"text\":\"Electrical Technology\",\"href\":\"http:\\/\\/127.0.0.1:8000\\/technology\\/68\",\"icon\":\"\",\"tooltip\":\"\",\"children\":[]},{\"text\":\"Computer Technology\",\"href\":\"http:\\/\\/127.0.0.1:8000\\/technology\\/66\",\"icon\":\"\",\"tooltip\":\"\",\"children\":[]},{\"text\":\"Civil Technology\",\"href\":\"http:\\/\\/127.0.0.1:8000\\/technology\\/64\",\"icon\":\"\",\"tooltip\":\"\",\"children\":[]}]},{\"text\":\"Contact Us\",\"href\":\"#\",\"icon\":\"\",\"tooltip\":\"\",\"children\":[]}]', '[{\"text\":\"Home\",\"href\":\"http:\\/\\/127.0.0.1:8000\\/\",\"icon\":\"\",\"tooltip\":\"\",\"children\":[]},{\"text\":\"Test\",\"href\":\"#\",\"icon\":\"\",\"tooltip\":\"\",\"children\":[]},{\"text\":\"Contact Us\",\"href\":\"#\",\"icon\":\"\",\"tooltip\":\"\",\"children\":[]}]', '2023-08-02 03:30:41', '2023-08-11 07:15:30');

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE `sliders` (
  `id` bigint UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `position` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`id`, `image`, `position`, `created_at`, `updated_at`) VALUES
(2, 'slide2.jpg', -2, '2023-08-03 00:03:51', '2023-08-08 00:55:30'),
(3, 'slide3.jpg', 3, '2023-08-03 00:03:51', '2023-08-03 00:03:51');

-- --------------------------------------------------------

--
-- Table structure for table `technologies`
--

CREATE TABLE `technologies` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `code` int NOT NULL,
  `logo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `color` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `teachers` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `course_structure` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `class_routine` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `technologies`
--

INSERT INTO `technologies` (`id`, `name`, `code`, `logo`, `color`, `description`, `teachers`, `course_structure`, `class_routine`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Computer', 66, 'computer.png', '#EB1D37', 'cmt description', 'cmt teachers', 'cmt course_structure', 'cmt class_routine', 1, '2023-08-02 21:41:45', '2023-08-02 21:41:45'),
(2, 'Civil', 64, 'civil.png', '#FBB501', 'civil description', 'civil teachers', 'civil course_structure', 'civil class_routine', 1, '2023-08-02 21:43:38', '2023-08-02 21:43:38'),
(3, 'Electrical', 67, 'elec.png', '#84bb26', 'Electrical description', 'Electrical teachers', 'Electrical course_structure', 'Electrical class_routine', 1, '2023-08-02 21:46:33', '2023-08-02 21:46:33'),
(4, 'Electronics', 68, 'electronics.png', '#0065ba', 'Electronics description', 'Electronics teachers', 'Electronics course_structure', 'Electronics class_routine', 1, '2023-08-02 21:50:49', '2023-08-11 04:14:55');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Al Sayeed', 'alsayeedpro@gmail.com', NULL, '$2y$10$UO29QaeykY73hhoDUaZalee9Hc6Tk.HG1NlMG3coKgKZn7/uw1hni', 'T9312hKFl7YmpzQmjGIfkEoAC5Zc7uV9hFcHvEOp6F7EvX5HHgApIlMRqrcQ', '2023-08-03 01:13:19', '2023-08-04 00:30:10');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notices`
--
ALTER TABLE `notices`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `technologies`
--
ALTER TABLE `technologies`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `technologies_code_unique` (`code`);

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
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `notices`
--
ALTER TABLE `notices`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `technologies`
--
ALTER TABLE `technologies`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
