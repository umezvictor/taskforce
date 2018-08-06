-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Aug 06, 2018 at 11:34 AM
-- Server version: 5.7.19
-- PHP Version: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `taskforce`
--

-- --------------------------------------------------------

--
-- Table structure for table `articles`
--

DROP TABLE IF EXISTS `articles`;
CREATE TABLE IF NOT EXISTS `articles` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `body` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=31 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `articles`
--

INSERT INTO `articles` (`id`, `title`, `body`, `created_at`, `updated_at`) VALUES
(1, 'Saepe quo sed porro sint in dolorem excepturi.', 'Explicabo ad dicta tenetur. Temporibus veniam consequatur maiores corporis. Ab quis et est non iusto aliquid. Natus eos eius deserunt ducimus molestias illo optio non.', '2018-07-06 09:55:13', '2018-07-06 09:55:13'),
(2, 'Est dignissimos iste maxime et consequatur.', 'Est in animi eligendi. Perferendis ex itaque voluptatem cupiditate vel. Placeat quaerat quam repellat consequuntur reiciendis. Atque id sint assumenda qui.', '2018-07-06 09:55:14', '2018-07-06 09:55:14'),
(3, 'Libero animi maiores perferendis et ut.', 'Unde excepturi qui quia autem sint veniam. Qui quia autem corporis laborum. Natus corrupti dolores et velit quaerat praesentium ut. Quo dolore similique maxime ut aut sit doloribus.', '2018-07-06 09:55:14', '2018-07-06 09:55:14'),
(4, 'Voluptatum inventore magnam voluptas at quia.', 'Tempora voluptatem possimus quia sit sunt qui nam. Id ullam eos et quibusdam non. Mollitia aut atque minima quis quisquam maxime modi.', '2018-07-06 09:55:14', '2018-07-06 09:55:14'),
(5, 'Voluptate et eaque enim quidem.', 'Aperiam nisi rerum quia inventore. Accusantium maxime nulla ipsam quae eos. At nostrum eligendi voluptas neque. Deserunt accusantium molestiae qui delectus molestias cupiditate.', '2018-07-06 09:55:14', '2018-07-06 09:55:14'),
(6, 'Iure reprehenderit quos harum nostrum quis.', 'Voluptatem deserunt voluptate repellat reprehenderit repudiandae. Repellendus consectetur optio aliquam recusandae maxime repellat eos.', '2018-07-06 09:55:14', '2018-07-06 09:55:14'),
(7, 'Nihil et molestiae fugit dolores eius.', 'Facere esse labore provident. Aut dolor voluptatibus ut tenetur ut. Debitis inventore ad exercitationem at natus officia in. Accusamus et commodi rem mollitia omnis odit sed dolorem.', '2018-07-06 09:55:14', '2018-07-06 09:55:14'),
(8, 'Praesentium dolor fuga pariatur fugit.', 'Non rem eveniet consequuntur rerum voluptatem in. Doloremque alias rerum accusamus animi. Soluta placeat atque itaque enim eligendi.', '2018-07-06 09:55:14', '2018-07-06 09:55:14'),
(9, 'Ut neque fugiat harum quis.', 'Et non consectetur eos nam quia. Et inventore et autem delectus vero cumque qui molestias. Dignissimos natus iure quo et sequi sed consequatur.', '2018-07-06 09:55:14', '2018-07-06 09:55:14'),
(10, 'Magnam pariatur nam assumenda quis.', 'Consequuntur sequi amet et vitae labore nobis error. Sint et labore velit qui autem. Et autem aut mollitia rerum aut culpa.', '2018-07-06 09:55:14', '2018-07-06 09:55:14'),
(11, 'Quia provident qui commodi dolorem.', 'Saepe eligendi maiores reprehenderit repellat. Repudiandae aut doloribus voluptas suscipit amet quisquam et. Quia qui eaque molestias provident ipsam nihil.', '2018-07-06 09:55:14', '2018-07-06 09:55:14'),
(12, 'Odio laudantium eius tenetur qui ipsum quae.', 'Aut mollitia officiis at qui suscipit. Officia impedit quis quis qui et incidunt. Suscipit culpa facilis voluptates tempora est enim saepe. Rerum doloribus rerum fuga et ut ut rerum est.', '2018-07-06 09:55:14', '2018-07-06 09:55:14'),
(13, 'Suscipit vel aperiam aut ut rerum.', 'Qui sed libero necessitatibus eum molestiae. Consectetur nesciunt delectus modi eum minima aut et. Dolorem et reprehenderit nesciunt animi qui. Ea est ut sit eligendi.', '2018-07-06 09:55:14', '2018-07-06 09:55:14'),
(14, 'Laudantium sit quaerat nisi dolorem qui quos.', 'Blanditiis ex ut quo animi laborum debitis recusandae. Adipisci et dolore quia quis dolor et. Ad voluptas dolores culpa nobis et vero.', '2018-07-06 09:55:14', '2018-07-06 09:55:14'),
(15, 'Sed reprehenderit non expedita autem enim.', 'Est quos explicabo id. Officia voluptas qui aut aut vero odio. Voluptatem ratione et labore voluptatibus. Optio omnis eligendi aut provident nulla voluptas.', '2018-07-06 09:55:14', '2018-07-06 09:55:14'),
(16, 'Aut velit alias veniam sit.', 'Alias facilis blanditiis voluptas aperiam. Laudantium quis molestiae a vel dignissimos labore animi.', '2018-07-06 09:55:14', '2018-07-06 09:55:14'),
(17, 'Ut ut nemo quia ullam distinctio iure.', 'Qui a quia sunt repellat tempore repudiandae. Sed commodi quo quia necessitatibus velit quo. Consequuntur iste totam quis doloribus sunt nobis sed pariatur. Expedita est tempora et similique.', '2018-07-06 09:55:14', '2018-07-06 09:55:14'),
(18, 'Harum ut quisquam dolore nihil voluptatibus at.', 'Est voluptatum earum in sunt. Dolor dolorem id quo nostrum.', '2018-07-06 09:55:14', '2018-07-06 09:55:14'),
(19, 'Asperiores ratione est commodi quo aut.', 'Debitis dolorum minus dolores libero ut animi veniam. Adipisci vero dolorem vitae eos.', '2018-07-06 09:55:14', '2018-07-06 09:55:14'),
(20, 'Voluptatibus asperiores omnis quia aut.', 'Ex quia enim maxime et aspernatur. Est odio et similique vel eaque corrupti quisquam.', '2018-07-06 09:55:14', '2018-07-06 09:55:14'),
(21, 'Voluptate fuga voluptatem id vero quod.', 'Quia quos earum dignissimos fugiat unde placeat enim fuga. Maxime in dolores et eligendi porro. Numquam occaecati est pariatur voluptatem non.', '2018-07-06 09:55:14', '2018-07-06 09:55:14'),
(22, 'Sunt consequatur occaecati ut cum minus.', 'Quia autem iusto omnis nam. Accusamus quo quod ex sit. Dolor id at doloremque ex qui quod. Iste doloribus voluptatem sequi quaerat a. Magnam perferendis deserunt ut sit blanditiis.', '2018-07-06 09:55:14', '2018-07-06 09:55:14'),
(23, 'Sed sit hic laudantium aliquam voluptas.', 'Earum accusamus dolor ut et est non. Omnis consequatur numquam iusto est.', '2018-07-06 09:55:14', '2018-07-06 09:55:14'),
(24, 'Enim ut eligendi dolores qui sint ipsum.', 'Ducimus labore debitis labore dolore ut. Inventore voluptas ut nihil velit voluptatibus. Explicabo nisi cumque beatae.', '2018-07-06 09:55:14', '2018-07-06 09:55:14'),
(25, 'Atque sunt et hic neque quos qui quisquam.', 'In odit ut sint explicabo. Aspernatur non amet possimus et pariatur. Quis delectus voluptate fuga error sed.', '2018-07-06 09:55:14', '2018-07-06 09:55:14'),
(26, 'A ut eius aliquam consequatur fugit voluptas.', 'Commodi rerum quidem sed. Ex et saepe fuga et sit aut. Fugit voluptatem similique cum unde. Cum rerum aut ea ea iusto repellendus tempore.', '2018-07-06 09:55:14', '2018-07-06 09:55:14'),
(27, 'Rerum expedita architecto eveniet eius ex.', 'Est sunt et qui natus est deleniti. Soluta et laudantium quisquam quia. Perferendis aut perferendis vel provident. Enim occaecati natus magni aliquam ipsum assumenda non ut.', '2018-07-06 09:55:14', '2018-07-06 09:55:14'),
(28, 'Labore quae at enim tenetur.', 'Inventore numquam dicta omnis voluptatem laboriosam eligendi. Magni facere alias pariatur architecto animi libero rerum. Blanditiis officiis consequuntur corporis dolorem aut.', '2018-07-06 09:55:14', '2018-07-06 09:55:14'),
(29, 'Praesentium numquam eligendi corporis et qui et.', 'Veritatis voluptatem quisquam odio. Voluptatum iusto excepturi eius. Porro corrupti sunt ut perspiciatis facere sit iste neque. Ea repellendus sit facere hic.', '2018-07-06 09:55:14', '2018-07-06 09:55:14'),
(30, 'Minus placeat et maxime exercitationem quos.', 'Exercitationem et consequuntur voluptas nulla reprehenderit. Deleniti voluptas consectetur culpa esse suscipit delectus. Sed quibusdam in totam magni.', '2018-07-06 09:55:14', '2018-07-06 09:55:14');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

DROP TABLE IF EXISTS `categories`;
CREATE TABLE IF NOT EXISTS `categories` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `title`, `description`, `created_at`, `updated_at`) VALUES
(8, 'Daniella', 'Shoes are nice', '2018-06-27 14:25:55', '2018-06-27 14:25:55'),
(5, 'Mens Watches', 'Rollex NG2019 costs $35,000', '2018-06-26 10:55:21', '2018-06-26 13:39:20'),
(7, 'Laptop', 'Toshiba Ny200 is 450,000', '2018-06-26 13:43:20', '2018-06-26 13:43:20');

-- --------------------------------------------------------

--
-- Table structure for table `complaints`
--

DROP TABLE IF EXISTS `complaints`;
CREATE TABLE IF NOT EXISTS `complaints` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `department` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fullname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `priority` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `myfilename` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'anonymous',
  `status` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `complaints`
--

INSERT INTO `complaints` (`id`, `department`, `fullname`, `email`, `priority`, `subject`, `message`, `myfilename`, `status`, `created_at`, `updated_at`) VALUES
(15, 'Accounts', 'Moses', 'moses@gmail.com', 'high', 'test', 'hello', 'no file', 'open', '2018-07-18 12:32:52', '2018-07-18 12:32:52'),
(12, 'IT', 'gracious aluba', 'grace@gmail.com', 'normal', 'download not working', 'I have solved it, yeepy', 'vick.jpg', 'open', '2018-07-05 14:02:09', '2018-07-05 14:02:09'),
(11, 'Accounts', 'yemisi ojo', 'yemiojo@gmail.com', 'critical', 'unsecure apps', 'hello help me out', 'Tosin Secretary.docx', 'open', '2018-07-04 13:18:19', '2018-07-04 13:18:19'),
(9, 'Sales', 'Lovina Lopez', 'lovina@gmail.com', 'medium', 'Unpaid Leave allowance', 'Please pay my leave allowance. I need the money urgently, as soon as possible.', 'MyLatestCv.docx', 'open', '2018-07-04 12:18:34', '2018-07-04 12:18:34'),
(13, 'Accounts', 'stanley', 'stanley@graphics.com', 'high', 'Stamp payment', 'pay me now', 'olumo.jpg', 'open', '2018-07-05 14:13:50', '2018-07-05 14:13:50'),
(14, 'IT', 'Bolaji Amos', 'amosbolaji@yahoo.com', 'medium', 'Job Enquiry', 'Please send me the', 'Facebook.docx', 'open', '2018-07-05 14:33:39', '2018-07-05 14:33:39');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(7, '2018_04_23_150332_create_users_table', 4),
(4, '2018_04_24_090910_create_test_table', 2),
(5, '2018_04_24_103759_create_tickets_table', 3),
(8, '2018_06_23_054831_create_categories_table', 5),
(9, '2018_06_28_113031_complaints', 6),
(10, '2018_07_06_101713_create_articles_table', 7),
(11, '2018_07_10_120732_create_services_table', 8);

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

DROP TABLE IF EXISTS `services`;
CREATE TABLE IF NOT EXISTS `services` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `title`, `name`, `email`, `phone`, `created_at`, `updated_at`) VALUES
(1, 'Web Developer', 'Victor Umezuruike', 'victorblaze2010@gmail.com', '08035467325', '2018-07-11 11:44:44', '2018-07-11 11:44:44'),
(2, 'Web Developer', 'Uncle Moses', 'moses@gmail.com', '08078654324', '2018-07-11 12:32:54', '2018-07-11 12:32:54'),
(3, 'Marketers', 'Lovina George', 'lovina@gmail.com', '08067547635', '2018-07-11 12:37:12', '2018-07-11 12:37:12'),
(4, 'Accountant', 'Mr Paul Ohiri', 'paulo@yahoo.com', '08056318762', '2018-07-11 12:45:27', '2018-07-11 12:45:27'),
(5, 'Cleaners', 'Ikenna', 'ike@yahoo.com', '08123564553', '2018-07-11 12:49:11', '2018-07-11 12:49:11'),
(6, 'Graphics designer', 'Tony', 'amaechinaifeanyi@gmail.com', '09012541287', '2018-07-11 13:10:05', '2018-07-11 13:10:05');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `username` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `firstname` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lastname` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` text COLLATE utf8mb4_unicode_ci,
  `skills` text COLLATE utf8mb4_unicode_ci,
  `state` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `town` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `confirmed` int(11) DEFAULT '0',
  `verify_token` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=24 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `firstname`, `lastname`, `phone`, `skills`, `state`, `town`, `remember_token`, `confirmed`, `verify_token`, `created_at`, `updated_at`) VALUES
(2, 'victorblaze201010', 'victorblaze2010@yahoo.com', '$2y$10$oH.y0XjxcYYx3/9Z.W0A4.ApOpEF4Q3rNqDw3uGec2a0GsWnTH1Fq', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '', '2018-04-24 12:34:27', '2018-04-24 12:34:27'),
(3, 'victory', 'info.vteck@gmail.com', '$2y$10$z0vZPHZ0nU7bE.xvq30d0eklC5QExEvfFHcbZ9FHTMPA.Ujv5RNFC', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '', '2018-04-24 12:39:24', '2018-04-24 12:39:24'),
(4, 'jerry', 'jerry123@gmail.com', '$2y$10$BzFIGlB1z.nxixjIcSw6Lece98YDYEwx4F8sFIXH2.tVYQZkYckfy', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '', '2018-04-24 12:46:11', '2018-04-24 12:46:11'),
(16, 'victorblaze', 'victorblaze2010@gmail.com', '$2y$10$R5z9ikA/nCUF84u.dJD6resq6B88.xPnVclcvL.gp5k4spmnOJtzW', 'Victor', 'Umezuruike', '08138551452', 'web developer', 'Lagos', 'Oshodi', 'djEjYAzrrChww6II52lI2qdoEA3vpY5Bl5SV4vr9yoiR7DnCJJ51uXGcPIOY', 0, '', '2018-05-03 00:59:24', '2018-05-03 00:59:24'),
(17, 'obitee', 'tboy@yahoo.com', '$2y$10$mfe7AaKis6kHFUc7cawE7O4AUCtJ.AbpzyD75ZZ0SoTP4M0yK1C..', 'temple', 'umezuruike', '08133640216', 'aircraft technician', 'Lagos', 'Ojota', NULL, 0, '17ALpR9wxOScjtKM0SeowD7ereL4EO57LuxiqZsA', '2018-05-04 10:59:25', '2018-05-04 10:59:25'),
(18, 'james', 'garry@yahoo.com', '$2y$10$.W.7a/QRuV4ALvLYBwU6WuCZx0ntQWx0QdQVXqN4XowMbJpURR0.K', 'garry', 'chapman', '08098765434', 'painter', 'lagos', 'yaba', NULL, 0, '14DJS9VcCqWqCODTfbLRczBNJXO85RLgOSxOkdzB', '2018-05-04 11:55:02', '2018-05-04 11:55:02'),
(20, 'jerryboy', 'schoolmaxtas@gmail.com', '$2y$10$AaPw.uCCZluNCqWV/mCGCeFWMadwr/EAfQloR1Z7QeGe9fvvTNCha', 'victor', 'umezuruike', '8092221598', 'plumber', 'Lagos', 'Ojota', NULL, 0, '7YGiT0hQHlVQwsLz3wmfpyO665JhAMDbiWkaHmWL', '2018-05-04 15:10:38', '2018-05-04 15:10:38'),
(21, 'dianadee', 'xthaffersoutsourcing@gmail.com', '$2y$10$OjHpit65iwXgP7G90.KjqOJr6XG7te7Qq7IjtG0gN6aStJK5.e8Qy', 'diana', 'whyte', '08192265345', 'hr, manager', 'Lagos', 'Ojota', NULL, 0, 'iS21Y9fPfMZ7gzhrcXsgaXDDhLGheOnbXIiBUzUk', '2018-05-07 14:29:49', '2018-05-07 14:29:49'),
(22, 'chisomweb', 'chisom@yahoo.com', '$2y$10$IpRiKlUMbKJPDbFyhh6MQuTusM8k8XOZESGlFDdPKKsFXLfxYpoAa', 'chisom', 'dike', '08123456789', 'web developer', 'lagos', 'oshodi', NULL, 0, 'BOeM8Gki7rtdOTwf6Ip7NOw0EbbCORqIWyJXRWXX', '2018-05-23 08:56:22', '2018-05-23 08:56:22'),
(23, 'tboy2018', 'willwoodgate@yahoo.com', '$2y$10$ydB1HdXhIWqbK0i3yMRwQuSSv6PicT0wLe62QRCREN9EeVO8OmGxS', 'obinna', 'temple', '0908775545', 'flight technician', 'lagos', 'oshodi', NULL, 0, 'vAt0Pebp0g5eYuzLKWGqbqEM0f0u4ofJ6ylikOKF', '2018-06-22 10:05:24', '2018-06-22 10:05:24');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
