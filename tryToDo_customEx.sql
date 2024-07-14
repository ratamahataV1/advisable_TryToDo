-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jul 14, 2024 at 11:24 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tryToDo`
--

-- --------------------------------------------------------

--
-- Table structure for table `ci_user`
--
-- Creation: Jul 10, 2024 at 11:23 AM
-- Last update: Jul 14, 2024 at 09:20 PM
--

CREATE TABLE `ci_user` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `reset_token` varchar(100) DEFAULT NULL,
  `token_expiration` datetime DEFAULT NULL,
  `is_admin` tinyint(1) NOT NULL DEFAULT 0,
  `last_interaction` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ci_user`
--

INSERT INTO `ci_user` (`id`, `name`, `last_name`, `email`, `password`, `created_at`, `reset_token`, `token_expiration`, `is_admin`, `last_interaction`) VALUES
(14, 'john', 'doe', 'johndoe@user.com', '$2y$10$8l2W3kfsSqufPUkzkrCMEOmcrALRk1p1R0/OKhsa3Z5U0ySYlKNEC', '2024-07-07 20:48:04', NULL, NULL, 0, '2024-07-14 23:09:55'),
(24, 'user1', 'userzero', 'user@user.com', '$2y$10$vv3Oyc4YrkkcO2qJ6Aep/uYIEu9jD4nUIeR1J/WVvg7V/29VxpWhu', '2024-07-08 14:46:43', NULL, NULL, 0, '2024-07-10 13:40:43'),
(25, 'resetuser', 'resetuser', 'resetuser@resetuser.com', '$2y$10$89PCZ2Aq.8ZHgHX6UylROesLf5X4jZ4TCYA4DMWJvI2Q4fW81S21a', '2024-07-08 18:21:26', 'f6a2095ed7b94f4899515a0769b9947cc750f39de5704c6258165bdcb024160d9149eeb5081a98310a61ef0144408943aaa4', '2024-07-08 18:21:55', 0, NULL),
(26, 'Admin', 'admin', 'admin@admin.com', '$2y$10$a1iqUhciYdzaD8irlXv4luEi.y/RVJVjFW5gc9XPJzEytROuaA4Eu', '2024-07-09 16:58:27', NULL, NULL, 1, '2024-07-14 23:19:04'),
(29, 'del2', 'del2', 'del2@del.com', '$2y$10$m/pXO9a.G8krJqDyagflYuhI/.emj0jpGRXkPHSFHFSlXYNe.65TO', '2024-07-15 00:12:07', NULL, NULL, 0, '2024-07-14 23:13:34');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--
-- Creation: Jul 08, 2024 at 01:44 PM
--

CREATE TABLE `messages` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `message` text NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `user_id`, `message`, `created_at`) VALUES
(1, 24, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Sagittis eu volutpat odio facilisis mauris sit amet massa vitae. Amet purus gravida quis blandit turpis. Consectetur adipiscing elit duis tristique sollicitudin nibh sit amet commodo. Vestibulum lectus mauris ultrices eros in cursus turpis massa tincidunt. Quisque egestas diam in arcu. Vulputate ut pharetra sit amet aliquam id. Venenatis tellus in metus vulputate eu scelerisque felis imperdiet. Elit ut aliquam purus sit amet. Tortor vitae purus faucibus ornare suspendisse. Sollicitudin tempor id eu nisl nunc mi ipsum. Massa massa ultricies mi quis hendrerit dolor magna. Mauris in aliquam sem fringilla.', '2024-07-08 15:45:09'),
(2, 24, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Sagittis eu volutpat odio facilisis mauris sit amet massa vitae. Amet purus gravida quis blandit turpis. Consectetur adipiscing elit duis tristique sollicitudin nibh sit amet commodo. Vestibulum lectus mauris ultrices eros in cursus turpis massa tincidunt. Quisque egestas diam in arcu. Vulputate ut pharetra sit amet aliquam id. Venenatis tellus in metus vulputate eu scelerisque felis imperdiet. Elit ut aliquam purus sit amet. Tortor vitae purus faucibus ornare suspendisse. Sollicitudin tempor id eu nisl nunc mi ipsum. Massa massa ultricies mi quis hendrerit dolor magna. Mauris in aliquam sem fringilla.', '2024-07-08 15:46:23'),
(3, 24, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Sagittis eu volutpat odio facilisis mauris sit amet massa vitae. Amet purus gravida quis blandit turpis. Consectetur adipiscing elit duis tristique sollicitudin nibh sit amet commodo. Vestibulum lectus mauris ultrices eros in cursus turpis massa tincidunt. Quisque egestas diam in arcu. Vulputate ut pharetra sit amet aliquam id. Venenatis tellus in metus vulputate eu scelerisque felis imperdiet. Elit ut aliquam purus sit amet. Tortor vitae purus faucibus ornare suspendisse. Sollicitudin tempor id eu nisl nunc mi ipsum. Massa massa ultricies mi quis hendrerit dolor magna. Mauris in aliquam sem fringilla.', '2024-07-08 16:27:05'),
(4, 24, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Sagittis eu volutpat odio facilisis mauris sit amet massa vitae. Amet purus gravida quis blandit turpis. Consectetur adipiscing elit duis tristique sollicitudin nibh sit amet commodo. Vestibulum lectus mauris ultrices eros in cursus turpis massa tincidunt. Quisque egestas diam in arcu. Vulputate ut pharetra sit amet aliquam id. Venenatis tellus in metus vulputate eu scelerisque felis imperdiet. Elit ut aliquam purus sit amet. Tortor vitae purus faucibus ornare suspendisse. Sollicitudin tempor id eu nisl nunc mi ipsum. Massa massa ultricies mi quis hendrerit dolor magna. Mauris in aliquam sem fringilla.', '2024-07-08 16:47:09'),
(5, 24, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Sagittis eu volutpat odio facilisis mauris sit amet massa vitae. Amet purus gravida quis blandit turpis. Consectetur adipiscing elit duis tristique sollicitudin nibh sit amet commodo. Vestibulum lectus mauris ultrices eros in cursus turpis massa tincidunt. Quisque egestas diam in arcu. Vulputate ut pharetra sit amet aliquam id. Venenatis tellus in metus vulputate eu scelerisque felis imperdiet. Elit ut aliquam purus sit amet. Tortor vitae purus faucibus ornare suspendisse. Sollicitudin tempor id eu nisl nunc mi ipsum. Massa massa ultricies mi quis hendrerit dolor magna. Mauris in aliquam sem fringilla.', '2024-07-08 16:47:51'),
(6, 14, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Duis ultricies lacus sed turpis tincidunt id. Amet porttitor eget dolor morbi non arcu risus. Lectus magna fringilla urna porttitor rhoncus dolor. Dolor sit amet consectetur adipiscing elit duis tristique. Eros donec ac odio tempor. Ut lectus arcu bibendum at varius vel pharetra vel. Nibh mauris cursus mattis molestie a iaculis at. Amet volutpat consequat mauris nunc congue nisi. Sit amet venenatis urna cursus eget nunc scelerisque. At augue eget arcu dictum varius duis at. Aliquet nec ullamcorper sit amet risus nullam eget. Sit amet facilisis magna etiam tempor orci eu lobortis elementum. Orci ac auctor augue mauris. Cursus eget nunc scelerisque viverra. Sed pulvinar proin gravida hendrerit lectus a. Scelerisque purus semper eget duis at tellus. Nisi quis eleifend quam adipiscing vitae proin sagittis nisl. Auctor elit sed vulputate mi sit amet mauris commodo quis. Nascetur ridiculus mus mauris vitae ultricies leo integer malesuada nunc.', '2024-07-09 14:37:45'),
(7, 14, 'Vitae congue mauris rhoncus aenean vel elit scelerisque mauris pellentesque. Rutrum quisque non tellus orci. Quisque egestas diam in arcu cursus euismod quis viverra nibh. Non odio euismod lacinia at. Nibh praesent tristique magna sit amet purus gravida. Sit amet dictum sit amet justo. Nisl rhoncus mattis rhoncus urna neque viverra. Mattis molestie a iaculis at erat pellentesque adipiscing commodo elit. Metus dictum at tempor commodo ullamcorper. Nibh cras pulvinar mattis nunc sed blandit. Orci a scelerisque purus semper eget duis.', '2024-07-09 14:38:09'),
(8, 14, 'Morbi non arcu risus quis varius. Faucibus in ornare quam viverra orci sagittis eu. Gravida cum sociis natoque penatibus et magnis dis parturient. Id leo in vitae turpis massa sed elementum. Aliquam purus sit amet luctus venenatis. Mi tempus imperdiet nulla malesuada pellentesque elit eget gravida cum. Gravida cum sociis natoque penatibus et magnis dis parturient montes. Et tortor at risus viverra. In nisl nisi scelerisque eu ultrices vitae auctor. Volutpat lacus laoreet non curabitur gravida arcu ac.', '2024-07-09 14:38:21'),
(9, 14, 'Id ornare arcu odio ut sem nulla pharetra diam sit. Dui ut ornare lectus sit amet est placerat in egestas. Dictumst vestibulum rhoncus est pellentesque. Dignissim cras tincidunt lobortis feugiat vivamus. Consectetur lorem donec massa sapien faucibus et molestie ac. Tellus mauris a diam maecenas sed enim ut sem viverra. Sed tempus urna et pharetra pharetra massa massa ultricies. Enim neque volutpat ac tincidunt vitae semper quis lectus. Parturient montes nascetur ridiculus mus mauris vitae. Integer quis auctor elit sed vulputate mi sit amet mauris. Faucibus vitae aliquet nec ullamcorper. Ipsum suspendisse ultrices gravida dictum. Orci sagittis eu volutpat odio facilisis mauris.', '2024-07-09 14:38:30'),
(10, 14, 'Aliquam vestibulum morbi blandit cursus risus at ultrices mi. Pulvinar neque laoreet suspendisse interdum consectetur. Quis blandit turpis cursus in hac habitasse platea dictumst quisque. Ac placerat vestibulum lectus mauris ultrices eros in cursus. Nisl nunc mi ipsum faucibus vitae aliquet nec ullamcorper. Tellus mauris a diam maecenas sed enim. Urna id volutpat lacus laoreet non curabitur gravida. Pharetra convallis posuere morbi leo urna molestie at elementum. Morbi tempus iaculis urna id volutpat lacus laoreet non. Arcu risus quis varius quam. Consequat nisl vel pretium lectus quam id leo in. Lorem ipsum dolor sit amet consectetur adipiscing elit ut. Mus mauris vitae ultricies leo integer malesuada nunc. Mattis molestie a iaculis at erat pellentesque adipiscing commodo elit. Massa enim nec dui nunc mattis enim. Sed vulputate mi sit amet mauris commodo quis.', '2024-07-09 14:38:39');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ci_user`
--
ALTER TABLE `ci_user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ci_user`
--
ALTER TABLE `ci_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
