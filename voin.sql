-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 11, 2019 at 04:00 PM
-- Server version: 10.1.43-MariaDB-0ubuntu0.18.04.1
-- PHP Version: 7.2.24-0ubuntu0.18.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `voin`
--

-- --------------------------------------------------------

--
-- Table structure for table `capabilities`
--

CREATE TABLE `capabilities` (
  `id` int(11) NOT NULL,
  `name` varchar(255) CHARACTER SET utf8 NOT NULL,
  `desc` varchar(255) CHARACTER SET utf8 NOT NULL,
  `category_id` int(11) DEFAULT NULL,
  `icon` text COLLATE utf8mb4_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `capabilities`
--

INSERT INTO `capabilities` (`id`, `name`, `desc`, `category_id`, `icon`) VALUES
(3, 'Трекинг', 'The dog\'s location tracking', 1, 'uploads/hijskKva3nHIR5ew5gPb0FYUAl8EGNNmVLOmt4lG.png'),
(5, 'Безопасность', 'Children protection against dogs', 1, 'uploads/du2x6ucPWADh5MlPI6AvbCPEKtrElkNOpQOj3fe4.png'),
(7, 'Биометрия', 'Dog’s biometric indexes monitoring', 1, 'uploads/6ylyRJF7dIWZe9sGBCF0di6J24ncDuvF0EqrB1mv.png'),
(9, 'Фото и видеофиксация', 'Photofixation and video recording of the actions around the dog', 1, 'uploads/fk73SKoZ1JvKv7rewQOWQUls6FWf389kTYrZAT5I.png'),
(16, '', 'Recording and transmission of commands at a distance', 3, 'uploads/G5lF2pHmoTCIOvRYbJjmFA4zJE7521104nxWhc9T.png'),
(17, '', 'Dog’s biometric indexes monitoring', 3, 'uploads/ROopX22VVecIYByiMDslYIgupNIHqLjuoLueNZDq.png'),
(18, '', 'Photofixation and video recording of the actions around the dog', 3, 'uploads/K3nqg2pcA8vUWufRneDAHrkQBtO29K3OEVrIloql.png'),
(19, '', 'Voice intercommunication', 3, 'uploads/Jc0yshCO6sxtRbd9IsVmWdKNtbGXzh8CJMY87ye7.png'),
(20, '', 'Head protection', 3, 'uploads/NClyL28wWlGvzU3qSHJ9zFVPQ9qD7RAv0p0DejuP.png'),
(21, '', 'The dog\'s location tracking', 3, 'uploads/Zz6Zqi4uTXADJIjp3iyZCbk29zqJ41BUg1zCePxl.png'),
(22, '', 'Voice intercommunication', 1, 'uploads/Asi5bRS5fKn0ZjgQOu74Nsiwqz8syNwiVzF6uuju.png');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`) VALUES
(1, 'Домашние'),
(3, 'War');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `text` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `post_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `text`, `post_id`) VALUES
(1, 'new one', 1),
(2, 'secon one', 1);

-- --------------------------------------------------------

--
-- Table structure for table `complexes`
--

CREATE TABLE `complexes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `img` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `complexes`
--

INSERT INTO `complexes` (`id`, `name`, `description`, `img`) VALUES
(3, 'Headphones', 'Bone conduction headphones with active noise control. The reason of using these headphones consists in forming vibration signals which transmitted through the bones of the dog’s skull, thereby providing better voice command from the owner. Determined by dog’s skull bones.', 'uploads/vauPIAs6LLCnnARk7BMZCw3mH4gJqpBWOJkz2Xon.jpeg'),
(4, 'Microcomputer', 'Microcomputer is the main part of the complex. It interacts with headphones, video camera and biometric sensors, after that the information from which the microcomputer processes and transmits to a owner mobile device. Provides information processing and transmission to an owner mobile device.', 'uploads/2DanFX1GZGBiYiimyWnzxesZrNInlfW7cjjue5Et.jpeg'),
(5, 'Video camera', 'A video camera is necessary for photo and video recording of current activity around the animal and forming of its path. \r\nDual camera for photofixation and video recording of current activity around the animal and forming the route.', 'uploads/qMzC8cRPgBKRzBg1H8fpFDCNuKf4jzzUFw5MidR6.jpeg'),
(6, 'Dog-collar', 'The dog-collar is used to attach microcomputer and other modules to it.\r\nMicrocomputer and other modules attaching base.', 'uploads/yiU0zjE5uKCQmkC11A3jD2SZtlRCaMiSLPcTmIBY.jpeg'),
(7, 'Mobile application', 'The application is installed on a mobile device and allows to track location, send voice commands, track the biometric status and current activity around the animal.\r\nProvides location tracking, voice commands sending, biometric indexes monitoring and observation of current activity around the animal.', 'uploads/hJd5hA6CC0b3KjXA9clAf2DrQWPBJ8GVZNNvAykp.jpeg'),
(8, 'Biometric', 'Biometric sensors allow to check the dog’s physical condition in real time\r\nProvides dog’s biometric indexes real time monitoring.', 'uploads/rljQHc0d4JW1n6EgGKpHnLPPUeWmuVXINdClYJWO.jpeg');

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
(1, '2019_11_15_062156_create_users_table', 1),
(2, '2019_11_15_100508_create_complexes_table', 2),
(3, '2019_11_17_151834_create_capabilities_table', 3),
(4, '2019_11_17_152935_create_cap_categories_table', 4),
(5, '2019_11_17_155143_create_capabilities_table', 5),
(6, '2019_11_17_155428_create_categories_table', 5),
(7, '2019_11_17_172803_create_posts_table', 6),
(8, '2019_11_17_172831_create_comments_table', 6);

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `name`) VALUES
(1, 'new one');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `secondname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `surname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_source` int(11) NOT NULL,
  `id_role` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `email`, `name`, `secondname`, `surname`, `phone`, `id_source`, `id_role`) VALUES
(1, 'EdAdmin', '12345678', 'ed@mail.ru', 'Eduard', 'Rustemovich', 'Karimov', '88005553535', 1, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `capabilities`
--
ALTER TABLE `capabilities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `complexes`
--
ALTER TABLE `complexes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `capabilities`
--
ALTER TABLE `capabilities`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `complexes`
--
ALTER TABLE `complexes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
