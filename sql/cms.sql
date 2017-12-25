-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 25, 2017 at 12:15 PM
-- Server version: 10.1.29-MariaDB
-- PHP Version: 7.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
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
-- Table structure for table `article`
--

CREATE TABLE `article` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(50) COLLATE utf8_polish_ci NOT NULL,
  `author` varchar(50) COLLATE utf8_polish_ci NOT NULL,
  `contents` text COLLATE utf8_polish_ci NOT NULL,
  `id_category` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Dumping data for table `article`
--

INSERT INTO `article` (`id`, `title`, `author`, `contents`, `id_category`) VALUES
(4, 'Lorem Ipsum', 'Unknown', ' \r\nLorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum dapibus tristique iaculis. Praesent volutpat maximus aliquam. Pellentesque ullamcorper, justo sed suscipit consectetur, elit lorem congue ante, quis accumsan diam justo vel erat. Suspendisse urna lorem, interdum vel massa nec, ullamcorper condimentum nisi. Nullam volutpat ornare nisi, a pellentesque eros tincidunt at. Integer ac elementum purus. Suspendisse congue rhoncus orci, a pharetra lorem consequat nec. Donec ornare, felis eu ullamcorper sollicitudin, metus tellus condimentum sem, eget ultricies tortor sapien in eros. Praesent consequat, tortor sed pulvinar ultricies, sapien lacus congue nisi, sed vehicula quam nisi vitae risus. Ut pharetra urna dolor, eget porttitor ligula pellentesque eu. Aliquam iaculis at nibh at tempus.\r\n\r\nMauris tincidunt, lacus eget scelerisque interdum, nunc elit tempus massa, nec posuere libero odio a diam. Vivamus eu nisl augue. Aenean euismod felis id efficitur imperdiet. Vestibulum ut sem rutrum nulla porttitor luctus vel sit amet urna. Maecenas sed eros facilisis, fermentum eros cursus, ullamcorper sem. Praesent quam est, eleifend vel suscipit a, viverra a odio. Quisque et dolor libero.\r\n\r\nDonec varius a risus id imperdiet. Curabitur a condimentum nulla. Proin mollis accumsan nisl, eu tincidunt enim tempus sit amet. Curabitur sagittis libero at pharetra placerat. Aenean porta dictum est, eget varius mi molestie ac. Sed scelerisque maximus dapibus. In hac habitasse platea dictumst. Quisque sagittis tempor velit nec mollis. Curabitur bibendum finibus risus ut lobortis. Vestibulum neque magna, vehicula non commodo egestas, vestibulum a metus. Suspendisse vitae laoreet enim. Fusce quis neque vulputate justo semper pharetra.\r\n\r\nSuspendisse potenti. Nulla tempus odio ut eleifend finibus. In viverra tempor ipsum non euismod. Ut porta nisl ligula, ut sagittis urna molestie vel. Quisque in imperdiet diam. Praesent risus ipsum, suscipit a erat non, consequat consectetur nulla. Praesent eget turpis quis metus blandit suscipit venenatis et mauris. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Vivamus dictum vestibulum felis, et condimentum nibh consequat quis. Suspendisse potenti. Praesent pretium dui nec hendrerit maximus. Pellentesque tempus aliquam massa sit amet fermentum. Quisque cursus, mi at lobortis luctus, ex neque lacinia risus, id mollis enim arcu nec enim.\r\n\r\nNunc in quam augue. Proin in dignissim turpis. Vivamus a tempus magna. Sed bibendum urna eu tincidunt feugiat. Sed in tincidunt elit, vitae vulputate diam. Sed id sapien eu sapien sodales convallis. Suspendisse potenti. Etiam tristique blandit ullamcorper. Nunc porta ipsum rutrum risus dictum, pretium faucibus nibh euismod. Suspendisse nulla leo, volutpat eget tincidunt non, pretium eu mi. Sed eget rutrum diam, non sollicitudin velit. Cras consectetur dapibus turpis, non pellentesque ante consectetur quis. Phasellus pretium iaculis semper. Duis vitae odio vitae ante cursus viverra. Curabitur tincidunt mauris quam, ut tempus nibh pharetra sed. Quisque ex metus, varius eu tempor sit amet, consequat sit amet est.', 3);

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(30) COLLATE utf8_polish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `name`) VALUES
(1, 'sports'),
(2, 'news'),
(3, 'culture'),
(4, 'technology'),
(5, 'society'),
(6, 'history'),
(7, 'entertainment');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `article`
--
ALTER TABLE `article`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `article`
--
ALTER TABLE `article`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
