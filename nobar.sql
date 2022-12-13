-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Dec 13, 2022 at 02:40 PM
-- Server version: 5.7.34
-- PHP Version: 7.4.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `nobar`
--

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
(4, '2022_12_13_034448_videos', 3);

-- --------------------------------------------------------

--
-- Table structure for table `videos`
--

CREATE TABLE `videos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `path` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `videos`
--

INSERT INTO `videos` (`id`, `name`, `description`, `path`, `created_at`, `updated_at`) VALUES
(4, 'It\'s Only Me - Kaleb J', 'Menurut Gangga, single \"Blue Jeans\" merupakan metafora dari rasa cinta itu sendiri, bahwa objek sederhana yang dapat ditemukan dalam kehidupan sehari-hari bisa menjadi lebih bermakna karena cinta. Ia memberi contoh, \"Misalnya mengenang kemeja yang sering dipakai saat pergi bersama dengan kekasih atau pergi ke kafe yang dulu dikunjungi bersama, khususnya yang berkaitan dengan perpisahan yang menyakitkan.', '/videos/vRD1NTm4aIcwb3vHGt1cIFtz6BUd07S5JTpKpy2Z.mp4', '2022-12-12 21:32:25', '2022-12-12 23:23:24'),
(5, 'It\'s You - Sezairi', 'Sezairi bercerita, lagu tersebut mengisahkan tentang kisah cintanya dengan sang istri, Syaza Qistina Tan. Sezairi dan Syaza telah menikah selama enam tahun. Lagu ini diciptakan untuk mengenang kembali peristiwa \'kegagalan\' pada hari pernikahan mereka. Karena lupa membawa secarik kertas itu, pernikahan Sezairi dan istrinya dilewati tanpa membacakan wedding speech. Kesalahan itu masih menjadi hal yang terus menempel di kepala Sezairi. Ia merasa bersalah kepada sang istri, Bunda.', '/videos/7COeI0oXX4GW8m0GKqYn54cYmWOnxvhftKm5a5QG.mp4', '2022-12-12 21:34:26', '2022-12-12 21:34:26'),
(6, 'Andaikan Kau Datang Kembali - Andmesh', 'Penyanyi Andmesh Kamaleng \'Andmesh\' merilis kembali lagu ‘Andaikan Kau Datang’ yang membuatnya ingat Sang Ayah, Ibu dan kakaknya yang telah tiada, sangat bermakna.\r\n\r\nLagu yang jadi Original Soundtrack (OST) film yang diadaptasi dari Korea \'Miracle In Cell No.7\' ini miliki kesan mendalam untuk Andmesh yang telah ditinggal ayahnya wafat.', '/videos/8k1fJe6mxV5hZBHGpvaXytLqmFTpTZZQPTAZniIr.mp4', '2022-12-12 23:22:03', '2022-12-12 23:22:03'),
(7, 'Kasih Putih - Glenn Fredly', 'Dalam lagu Kasih Putih ini, ternyata Glenn Fredly menyimpan kisah cinta yang kelam sehingga ia sangat menjiwai dalam menyanyikannya. Karena kisah itulah, Glenn Fredly meminta Yovie Widianto yang dikenal sebagai penulis lagu handal untuk menulis kisah cintanya lewat lagu ini.\r\n\r\nLirik lagu ini sangatlah indah dan menarik untuk didengar di manapun dan kapanpun. Terlebih lagi karena lagu ini memiliki banyak makna, tidak melulu perihal cinta sepasang kekasih, tetapi bisa diartikan dalam cinta sesama, seperti mengingatkan pentingnya bertoleransi, mengingatkan kita untuk berdamai dengan bumi kita sendiri.', '/videos/YEMqu9TCb2oosnw0EVm2KVa513DR29Zu3SINTGrO.mp4', '2022-12-12 23:22:36', '2022-12-12 23:22:36');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `videos`
--
ALTER TABLE `videos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `videos`
--
ALTER TABLE `videos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
