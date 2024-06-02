-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 02, 2024 at 02:49 PM
-- Server version: 8.0.37
-- PHP Version: 8.1.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `alxihsql_4chan`
--

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` int UNSIGNED NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `message` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `Username` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `Password` varchar(60) NOT NULL,
  `Created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `timestamp`, `message`, `Username`, `Password`, `Created_at`) VALUES
(1, '2024-06-01 17:32:12', 'Hi', '', '', '2024-06-02 06:42:30'),
(2, '2024-06-01 17:43:30', 'Hello', '', '', '2024-06-02 06:42:30'),
(3, '2024-06-02 00:32:52', '?', '', '', '2024-06-02 06:42:30'),
(4, '2024-06-02 08:10:15', 'Hey', '', '', '2024-06-02 08:10:15'),
(5, '2024-06-02 08:15:17', '_', '', '', '2024-06-02 08:15:17'),
(6, '2024-06-02 08:45:01', 'Go', '', '', '2024-06-02 08:45:01'),
(7, '2024-06-02 09:00:45', 'Op', '', '', '2024-06-02 09:00:45'),
(8, '2024-06-02 09:09:42', 'Hi', '', '', '2024-06-02 09:09:42'),
(9, '2024-06-02 09:09:45', 'Hi', '', '', '2024-06-02 09:09:45'),
(10, '2024-06-02 09:09:48', 'Hi', '', '', '2024-06-02 09:09:48'),
(11, '2024-06-02 09:09:50', 'Hi', '', '', '2024-06-02 09:09:50'),
(12, '2024-06-02 09:09:53', 'Hi', '', '', '2024-06-02 09:09:53');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`),
  ADD KEY `Username` (`Username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
