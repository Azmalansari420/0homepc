-- phpMyAdmin SQL Dump
-- version 5.2.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jun 28, 2026 at 04:07 AM
-- Server version: 11.8.8-MariaDB-log
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `u171934876_vkn`
--

-- --------------------------------------------------------

--
-- Table structure for table `activity_records`
--

CREATE TABLE `activity_records` (
  `id` int(11) NOT NULL,
  `ip_addreass` text NOT NULL,
  `url` text NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `admin_id` int(11) NOT NULL,
  `admin_username` varchar(50) NOT NULL,
  `admin_password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `activity_records`
--

INSERT INTO `activity_records` (`id`, `ip_addreass`, `url`, `date`, `time`, `admin_id`, `admin_username`, `admin_password`) VALUES
(1, '::1', 'http://localhost/1ADMINPANELS/codigneter3new/admin/dashboard', '2025-12-06', '15:04:38', 2, 'admin@gmail.com', 'admin'),
(2, '::1', 'http://localhost/1ADMINPANELS/codigneter3new/admin_con/slider/listing', '2025-12-06', '15:04:40', 2, 'admin@gmail.com', 'admin'),
(3, '::1', 'http://localhost/1ADMINPANELS/codigneter3new/admin_con/slider/edit/18', '2025-12-06', '15:04:41', 2, 'admin@gmail.com', 'admin'),
(4, '::1', 'http://localhost/1ADMINPANELS/codigneter3new/admin_con/slider/edit/18', '2025-12-08', '10:55:59', 2, 'admin@gmail.com', 'admin'),
(5, '::1', 'http://localhost/1ADMINPANELS/codigneter3new/admin_con/site_setting/edit/1', '2025-12-08', '10:56:05', 2, 'admin@gmail.com', 'admin'),
(6, '::1', 'http://localhost/1ADMINPANELS/codigneter3new/admin_con/site_setting/edit/1', '2025-12-08', '10:56:09', 2, 'admin@gmail.com', 'admin'),
(7, '::1', 'http://localhost/3testing/codigneter3new/admin/dashboard', '2025-12-31', '11:59:28', 2, 'admin@gmail.com', 'admin'),
(8, '::1', 'http://localhost/3testing/codigneter3new/admin_con/slider/listing', '2025-12-31', '11:59:29', 2, 'admin@gmail.com', 'admin'),
(9, '::1', 'http://localhost/3testing/codigneter3new/admin_con/slider/edit/19', '2025-12-31', '11:59:31', 2, 'admin@gmail.com', 'admin'),
(10, '::1', 'http://localhost/3testing/codigneter3new/admin_con/slider/listing', '2025-12-31', '11:59:49', 2, 'admin@gmail.com', 'admin'),
(11, '::1', 'http://localhost/3testing/codigneter3new/admin_con/slider/edit/18', '2025-12-31', '12:00:45', 2, 'admin@gmail.com', 'admin'),
(12, '::1', 'http://localhost/3testing/codigneter3new/admin_con/slider/listing', '2025-12-31', '12:00:54', 2, 'admin@gmail.com', 'admin'),
(13, '::1', 'http://localhost/3testing/codigneter3new/admin_con/slider/add', '2025-12-31', '12:01:21', 2, 'admin@gmail.com', 'admin'),
(14, '::1', 'http://localhost/3testing/codigneter3new/admin_con/slider/listing', '2025-12-31', '12:01:29', 2, 'admin@gmail.com', 'admin'),
(15, '::1', 'http://localhost/3testing/codigneter3new/admin_con/site_setting/edit/1', '2025-12-31', '12:04:28', 2, 'admin@gmail.com', 'admin'),
(16, '::1', 'http://localhost/3testing/codigneter3new/admin_con/site_setting/edit/1', '2025-12-31', '12:04:42', 2, 'admin@gmail.com', 'admin'),
(17, '::1', 'http://localhost/3testing/codigneter3new/admin_con/site_setting/edit/1', '2025-12-31', '12:06:20', 2, 'admin@gmail.com', 'admin'),
(18, '::1', 'http://localhost/3testing/codigneter3new/admin_con/site_setting/edit/1', '2025-12-31', '12:06:21', 2, 'admin@gmail.com', 'admin'),
(19, '::1', 'http://localhost/3testing/codigneter3new/admin_con/site_setting/edit/1', '2025-12-31', '12:06:24', 2, 'admin@gmail.com', 'admin'),
(20, '::1', 'http://localhost/3testing/codigneter3new/admin_con/site_setting/edit/1', '2025-12-31', '12:06:29', 2, 'admin@gmail.com', 'admin'),
(21, '::1', 'http://localhost/3testing/codigneter3new/admin_con/site_setting/edit/1', '2025-12-31', '12:07:54', 2, 'admin@gmail.com', 'admin'),
(22, '::1', 'http://localhost/3testing/codigneter3new/admin_con/site_setting/edit/1', '2025-12-31', '12:07:57', 2, 'admin@gmail.com', 'admin'),
(23, '::1', 'http://localhost/3testing/codigneter3new/admin_con/site_setting/edit/1', '2025-12-31', '12:08:13', 2, 'admin@gmail.com', 'admin'),
(24, '::1', 'http://localhost/3testing/codigneter3new/admin_con/site_setting/edit/1', '2025-12-31', '12:11:48', 2, 'admin@gmail.com', 'admin'),
(25, '::1', 'http://localhost/3testing/codigneter3new/admin_con/site_setting/edit/1', '2025-12-31', '12:11:49', 2, 'admin@gmail.com', 'admin'),
(26, '::1', 'http://localhost/3testing/codigneter3new/admin_con/site_setting/edit/1', '2025-12-31', '12:13:14', 2, 'admin@gmail.com', 'admin'),
(27, '::1', 'http://localhost/3testing/codigneter3new/admin_con/site_setting/edit/1', '2025-12-31', '12:13:15', 2, 'admin@gmail.com', 'admin'),
(28, '::1', 'http://localhost/3testing/codigneter3new/admin_con/site_setting/edit/1', '2025-12-31', '12:13:24', 2, 'admin@gmail.com', 'admin'),
(29, '::1', 'http://localhost/3testing/codigneter3new/admin_con/site_setting/edit/1', '2025-12-31', '12:13:27', 2, 'admin@gmail.com', 'admin'),
(30, '::1', 'http://localhost/3testing/codigneter3new/admin_con/site_setting/edit/1', '2025-12-31', '12:13:46', 2, 'admin@gmail.com', 'admin'),
(31, '::1', 'http://localhost/3testing/codigneter3new/admin_con/site_setting/edit/1', '2025-12-31', '12:14:08', 2, 'admin@gmail.com', 'admin'),
(32, '::1', 'http://localhost/3testing/codigneter3new/admin_con/site_setting/edit/1', '2025-12-31', '12:14:28', 2, 'admin@gmail.com', 'admin'),
(33, '::1', 'http://localhost/3testing/codigneter3new/admin_con/site_setting/edit/1', '2025-12-31', '12:15:25', 2, 'admin@gmail.com', 'admin'),
(34, '::1', 'http://localhost/3testing/codigneter3new/admin_con/site_setting/edit/1', '2025-12-31', '12:15:44', 2, 'admin@gmail.com', 'admin'),
(35, '::1', 'http://localhost/3testing/codigneter3new/admin_con/site_setting/edit/1', '2025-12-31', '12:16:04', 2, 'admin@gmail.com', 'admin'),
(36, '::1', 'http://localhost/3testing/codigneter3new/admin_con/site_setting/edit/1', '2025-12-31', '12:16:54', 2, 'admin@gmail.com', 'admin'),
(37, '::1', 'http://localhost/3testing/codigneter3new/admin_con/slider/listing', '2025-12-31', '12:16:56', 2, 'admin@gmail.com', 'admin'),
(38, '::1', 'http://localhost/3testing/codigneter3new/admin_con/slider/edit/18', '2025-12-31', '12:16:58', 2, 'admin@gmail.com', 'admin'),
(39, '::1', 'http://localhost/3testing/codigneter3new/admin_con/slider/listing', '2025-12-31', '12:17:07', 2, 'admin@gmail.com', 'admin'),
(40, '::1', 'http://localhost/3testing/codigneter3new/admin_con/slider/add', '2025-12-31', '12:17:19', 2, 'admin@gmail.com', 'admin'),
(41, '::1', 'http://localhost/3testing/codigneter3new/admin_con/slider/listing', '2025-12-31', '12:17:37', 2, 'admin@gmail.com', 'admin'),
(42, '::1', 'http://localhost/1ADMINPANELS/codigneter3new/admin/dashboard', '2026-02-03', '12:40:24', 2, 'admin@gmail.com', 'admin'),
(43, '::1', 'http://localhost/1ADMINPANELS/codigneter3new/admin/dashboard', '2026-02-03', '12:41:34', 2, 'admin@gmail.com', 'admin'),
(44, '::1', 'http://localhost/1ADMINPANELS/codigneter3new/admin/dashboard', '2026-02-03', '12:42:10', 2, 'admin@gmail.com', 'admin'),
(45, '::1', 'http://localhost/1ADMINPANELS/codigneter3new/admin/dashboard', '2026-02-03', '12:42:55', 2, 'admin@gmail.com', 'admin'),
(46, '::1', 'http://localhost/1ADMINPANELS/codigneter3new/admin_con/slider/listing', '2026-02-03', '12:43:01', 2, 'admin@gmail.com', 'admin'),
(47, '::1', 'http://localhost/1ADMINPANELS/codigneter3new/admin_con/slider/listing', '2026-02-03', '12:55:53', 2, 'admin@gmail.com', 'admin'),
(48, '::1', 'http://localhost/1ADMINPANELS/codigneter3new/admin_con/slider/listing', '2026-02-03', '12:56:00', 1, 'azmal123', 'azmal123'),
(49, '::1', 'http://localhost/1ADMINPANELS/codigneter3new/admin_con/slider/listing', '2026-02-03', '12:56:03', 1, 'azmal123', 'azmal123'),
(50, '::1', 'http://localhost/1ADMINPANELS/codigneter3new/admin/dashboard', '2026-02-03', '12:56:04', 1, 'azmal123', 'azmal123'),
(51, '::1', 'http://localhost/1ADMINPANELS/codigneter3new/admin_con/slider/listing', '2026-02-03', '12:56:37', 1, 'azmal123', 'azmal123'),
(52, '::1', 'http://localhost/1ADMINPANELS/codigneter3new/admin/dashboard', '2026-02-03', '12:56:48', 1, 'azmal123', 'azmal123'),
(53, '::1', 'http://localhost/1ADMINPANELS/codigneter3new/admin/dashboard', '2026-02-03', '12:57:15', 1, 'azmal123', 'azmal123'),
(54, '::1', 'http://localhost/allaycrm/admin/dashboard', '2026-02-03', '17:07:51', 1, 'azmal123', 'azmal123'),
(55, '::1', 'http://localhost/allaycrm/admin/dashboard', '2026-02-03', '17:16:58', 1, 'azmal123', 'azmal123'),
(56, '::1', 'http://localhost/allaycrm/admin_con/notice/listing', '2026-02-03', '17:18:39', 1, 'azmal123', 'azmal123'),
(57, '::1', 'http://localhost/allaycrm/admin_con/notice/listing', '2026-02-03', '17:19:53', 1, 'azmal123', 'azmal123'),
(58, '::1', 'http://localhost/allaycrm/admin_con/notice/listing', '2026-02-03', '17:20:04', 1, 'azmal123', 'azmal123'),
(59, '::1', 'http://localhost/allaycrm/admin_con/notice/listing', '2026-02-03', '17:20:08', 1, 'azmal123', 'azmal123'),
(60, '::1', 'http://localhost/1ADMINPANELS/codigneter3new/admin/dashboard', '2026-02-12', '13:10:42', 2, 'admin@gmail.com', 'admin'),
(61, '::1', 'http://localhost/1ADMINPANELS/codigneter3new/admin_con/site_setting/edit/1', '2026-02-12', '13:10:43', 2, 'admin@gmail.com', 'admin'),
(62, '::1', 'http://localhost/1ADMINPANELS/codigneter3new/admin_con/slider/listing', '2026-02-12', '13:10:48', 2, 'admin@gmail.com', 'admin'),
(63, '::1', 'http://localhost/1ADMINPANELS/codigneter3new/admin_con/slider/listing', '2026-02-12', '13:10:48', 2, 'admin@gmail.com', 'admin'),
(64, '::1', 'http://localhost/1ADMINPANELS/codigneter3new/admin_con/contact/listing', '2026-02-12', '13:10:49', 2, 'admin@gmail.com', 'admin'),
(65, '::1', 'http://localhost/1ADMINPANELS/codigneter3new/admin_con/contact/listing', '2026-02-12', '13:10:50', 2, 'admin@gmail.com', 'admin'),
(66, '::1', 'http://localhost/1ADMINPANELS/codigneter3new/admin/dashboard', '2026-02-12', '13:10:50', 2, 'admin@gmail.com', 'admin'),
(67, '::1', 'http://localhost/1ADMINPANELS/codigneter3new/admin/dashboard', '2026-03-11', '12:50:29', 2, 'admin@gmail.com', 'admin'),
(68, '::1', 'http://localhost/1ADMINPANELS/codigneter3new/admin_con/contact/listing', '2026-03-11', '12:50:44', 2, 'admin@gmail.com', 'admin'),
(69, '::1', 'http://localhost/1ADMINPANELS/codigneter3new/admin_con/contact/listing', '2026-03-11', '12:50:52', 2, 'admin@gmail.com', 'admin'),
(70, '::1', 'http://localhost/1ADMINPANELS/codigneter3new/admin_con/contact/listing', '2026-03-11', '12:50:55', 2, 'admin@gmail.com', 'admin'),
(71, '::1', 'http://localhost/heystar-holiday-travles/admin/dashboard', '2026-04-20', '10:51:00', 2, 'admin@gmail.com', 'admin'),
(72, '::1', 'http://localhost/heystar-holiday-travles/admin/dashboard', '2026-04-20', '10:51:22', 2, 'admin@gmail.com', 'admin'),
(73, '::1', 'http://localhost/heystar-holiday-travles/admin_con/site_setting/edit/1', '2026-04-20', '10:51:23', 2, 'admin@gmail.com', 'admin'),
(74, '::1', 'http://localhost/heystar-holiday-travles/admin_con/site_setting/edit/1', '2026-04-20', '10:51:32', 2, 'admin@gmail.com', 'admin'),
(75, '::1', 'http://localhost/heystar-holiday-travles/admin_con/site_setting/edit/1', '2026-04-20', '10:52:42', 2, 'admin@gmail.com', 'admin'),
(76, '::1', 'http://localhost/heystar-holiday-travles/admin_con/site_setting/edit/1', '2026-04-20', '10:57:15', 2, 'admin@gmail.com', 'admin'),
(77, '::1', 'http://localhost/heystar-holiday-travles/admin_con/slider/listing', '2026-04-20', '11:08:44', 2, 'admin@gmail.com', 'admin'),
(78, '::1', 'http://localhost/heystar-holiday-travles/admin_con/slider/edit/21', '2026-04-20', '11:08:46', 2, 'admin@gmail.com', 'admin'),
(79, '::1', 'http://localhost/heystar-holiday-travles/admin_con/slider/edit/21', '2026-04-20', '11:09:04', 2, 'admin@gmail.com', 'admin'),
(80, '::1', 'http://localhost/heystar-holiday-travles/admin_con/slider/listing', '2026-04-20', '11:09:32', 2, 'admin@gmail.com', 'admin'),
(81, '::1', 'http://localhost/heystar-holiday-travles/admin_con/slider/listing', '2026-04-20', '11:09:34', 2, 'admin@gmail.com', 'admin'),
(82, '::1', 'http://localhost/heystar-holiday-travles/admin_con/slider/listing', '2026-04-20', '11:09:35', 2, 'admin@gmail.com', 'admin'),
(83, '::1', 'http://localhost/heystar-holiday-travles/admin_con/slider/listing', '2026-04-20', '11:09:36', 2, 'admin@gmail.com', 'admin'),
(84, '::1', 'http://localhost/heystar-holiday-travles/admin_con/slider/edit/21', '2026-04-20', '11:09:45', 2, 'admin@gmail.com', 'admin'),
(85, '::1', 'http://localhost/heystar-holiday-travles/admin_con/slider/listing', '2026-04-20', '11:09:49', 2, 'admin@gmail.com', 'admin'),
(86, '::1', 'http://localhost/heystar-holiday-travles/admin_con/slider/listing', '2026-04-20', '11:10:20', 2, 'admin@gmail.com', 'admin'),
(87, '::1', 'http://localhost/heystar-holiday-travles/admin_con/slider/edit/21', '2026-04-20', '11:10:22', 2, 'admin@gmail.com', 'admin'),
(88, '::1', 'http://localhost/heystar-holiday-travles/admin_con/slider/listing', '2026-04-20', '11:10:24', 2, 'admin@gmail.com', 'admin'),
(89, '::1', 'http://localhost/vkn/admin/dashboard', '2026-06-18', '20:55:09', 2, 'admin@gmail.com', 'admin'),
(90, '::1', 'http://localhost/vkn/admin/dashboard', '2026-06-18', '20:55:24', 2, 'admin@gmail.com', 'admin'),
(91, '::1', 'http://localhost/vkn/admin_con/site_setting/edit/1', '2026-06-18', '20:55:26', 2, 'admin@gmail.com', 'admin'),
(92, '::1', 'http://localhost/vkn/admin_con/site_setting/edit/1', '2026-06-18', '20:55:38', 2, 'admin@gmail.com', 'admin'),
(93, '::1', 'http://localhost/vkn/admin_con/slider/listing', '2026-06-18', '20:59:45', 2, 'admin@gmail.com', 'admin'),
(94, '::1', 'http://localhost/vkn/admin_con/slider/edit/21', '2026-06-18', '21:00:41', 2, 'admin@gmail.com', 'admin'),
(95, '::1', 'http://localhost/vkn/admin_con/slider/listing', '2026-06-18', '21:01:12', 2, 'admin@gmail.com', 'admin'),
(96, '::1', 'http://localhost/vkn/admin_con/slider/edit/21', '2026-06-18', '21:01:15', 2, 'admin@gmail.com', 'admin'),
(97, '::1', 'http://localhost/vkn/admin_con/slider/listing', '2026-06-18', '21:01:17', 2, 'admin@gmail.com', 'admin'),
(98, '::1', 'http://localhost/vkn/admin_con/slider/listing', '2026-06-18', '21:08:55', 2, 'admin@gmail.com', 'admin'),
(99, '::1', 'http://localhost/vkn/admin_con/category/listing', '2026-06-18', '21:08:56', 2, 'admin@gmail.com', 'admin'),
(100, '::1', 'http://localhost/vkn/admin_con/category/add', '2026-06-18', '21:08:58', 2, 'admin@gmail.com', 'admin'),
(101, '::1', 'http://localhost/vkn/admin_con/category/listing', '2026-06-18', '21:10:09', 2, 'admin@gmail.com', 'admin'),
(102, '::1', 'http://localhost/vkn/admin_con/category/listing', '2026-06-18', '21:10:21', 2, 'admin@gmail.com', 'admin'),
(103, '::1', 'http://localhost/vkn/admin_con/category/add', '2026-06-18', '21:10:23', 2, 'admin@gmail.com', 'admin'),
(104, '::1', 'http://localhost/vkn/admin_con/category/listing', '2026-06-18', '21:11:03', 2, 'admin@gmail.com', 'admin'),
(105, '::1', 'http://localhost/vkn/admin_con/category/add', '2026-06-18', '21:11:14', 2, 'admin@gmail.com', 'admin'),
(106, '::1', 'http://localhost/vkn/admin_con/category/listing', '2026-06-18', '21:11:16', 2, 'admin@gmail.com', 'admin'),
(107, '::1', 'http://localhost/vkn/admin_con/category/edit/3', '2026-06-18', '21:13:20', 2, 'admin@gmail.com', 'admin'),
(108, '::1', 'http://localhost/vkn/admin_con/category/listing', '2026-06-18', '21:13:44', 2, 'admin@gmail.com', 'admin'),
(109, '::1', 'http://localhost/vkn/admin_con/category/edit/3', '2026-06-18', '21:14:09', 2, 'admin@gmail.com', 'admin'),
(110, '::1', 'http://localhost/vkn/admin_con/category/listing', '2026-06-18', '21:14:20', 2, 'admin@gmail.com', 'admin'),
(111, '::1', 'http://localhost/vkn/admin_con/category/edit/3', '2026-06-18', '21:14:22', 2, 'admin@gmail.com', 'admin'),
(112, '::1', 'http://localhost/vkn/admin_con/category/edit/3', '2026-06-18', '21:14:53', 2, 'admin@gmail.com', 'admin'),
(113, '::1', 'http://localhost/vkn/admin_con/category/listing', '2026-06-18', '21:15:01', 2, 'admin@gmail.com', 'admin'),
(114, '::1', 'http://localhost/vkn/admin_con/category/edit/3', '2026-06-18', '21:15:03', 2, 'admin@gmail.com', 'admin'),
(115, '::1', 'http://localhost/vkn/admin_con/category/listing', '2026-06-18', '21:15:08', 2, 'admin@gmail.com', 'admin'),
(116, '::1', 'http://localhost/vkn/admin_con/category/edit/3', '2026-06-18', '21:15:09', 2, 'admin@gmail.com', 'admin'),
(117, '::1', 'http://localhost/vkn/admin_con/category/edit/3', '2026-06-18', '21:16:42', 2, 'admin@gmail.com', 'admin'),
(118, '::1', 'http://localhost/vkn/admin_con/category/listing', '2026-06-18', '21:16:45', 2, 'admin@gmail.com', 'admin'),
(119, '::1', 'http://localhost/vkn/admin_con/category/edit/3', '2026-06-18', '21:16:48', 2, 'admin@gmail.com', 'admin'),
(120, '::1', 'http://localhost/vkn/admin_con/category/listing', '2026-06-18', '21:16:50', 2, 'admin@gmail.com', 'admin'),
(121, '::1', 'http://localhost/vkn/admin_con/category/edit/2', '2026-06-18', '21:16:57', 2, 'admin@gmail.com', 'admin'),
(122, '::1', 'http://localhost/vkn/admin_con/category/listing', '2026-06-18', '21:17:00', 2, 'admin@gmail.com', 'admin'),
(123, '::1', 'http://localhost/vkn/admin_con/category/edit/1', '2026-06-18', '21:17:02', 2, 'admin@gmail.com', 'admin'),
(124, '::1', 'http://localhost/vkn/admin_con/category/listing', '2026-06-18', '21:17:10', 2, 'admin@gmail.com', 'admin'),
(125, '::1', 'http://localhost/vkn/admin_con/category/listing', '2026-06-18', '21:21:04', 2, 'admin@gmail.com', 'admin'),
(126, '::1', 'http://localhost/vkn/admin_con/sub_categories/listing', '2026-06-18', '21:21:56', 2, 'admin@gmail.com', 'admin'),
(127, '::1', 'http://localhost/vkn/admin_con/sub_categories/add', '2026-06-18', '21:22:20', 2, 'admin@gmail.com', 'admin'),
(128, '::1', 'http://localhost/vkn/admin_con/sub_categories/add', '2026-06-18', '21:23:54', 2, 'admin@gmail.com', 'admin'),
(129, '::1', 'http://localhost/vkn/admin_con/sub_categories/listing', '2026-06-18', '21:25:14', 2, 'admin@gmail.com', 'admin'),
(130, '::1', 'http://localhost/vkn/admin_con/sub_categories/add', '2026-06-18', '21:25:32', 2, 'admin@gmail.com', 'admin'),
(131, '::1', 'http://localhost/vkn/admin_con/sub_categories/listing', '2026-06-18', '21:25:40', 2, 'admin@gmail.com', 'admin'),
(132, '::1', 'http://localhost/vkn/admin_con/sub_categories/listing', '2026-06-18', '21:26:36', 2, 'admin@gmail.com', 'admin'),
(133, '::1', 'http://localhost/vkn/admin_con/sub_categories/edit/2', '2026-06-18', '21:26:39', 2, 'admin@gmail.com', 'admin'),
(134, '::1', 'http://localhost/vkn/admin_con/sub_categories/listing', '2026-06-18', '21:26:43', 2, 'admin@gmail.com', 'admin'),
(135, '::1', 'http://localhost/vkn/admin_con/sub_categories/listing', '2026-06-18', '21:30:56', 2, 'admin@gmail.com', 'admin'),
(136, '::1', 'http://localhost/vkn/admin_con/services/listing', '2026-06-18', '21:32:01', 2, 'admin@gmail.com', 'admin'),
(137, '::1', 'http://localhost/vkn/admin_con/services/add', '2026-06-18', '22:12:32', 2, 'admin@gmail.com', 'admin'),
(138, '::1', 'http://localhost/vkn/admin_con/services/add', '2026-06-18', '22:13:23', 2, 'admin@gmail.com', 'admin'),
(139, '::1', 'http://localhost/vkn/admin_con/services/add', '2026-06-18', '22:13:45', 2, 'admin@gmail.com', 'admin'),
(140, '::1', 'http://localhost/vkn/admin_con/services/add', '2026-06-18', '22:16:41', 2, 'admin@gmail.com', 'admin'),
(141, '::1', 'http://localhost/vkn/admin_con/services/add', '2026-06-18', '22:17:03', 2, 'admin@gmail.com', 'admin'),
(142, '::1', 'http://localhost/vkn/admin_con/services/add', '2026-06-18', '22:19:15', 2, 'admin@gmail.com', 'admin'),
(143, '::1', 'http://localhost/vkn/admin_con/services/add', '2026-06-18', '22:19:22', 2, 'admin@gmail.com', 'admin'),
(144, '::1', 'http://localhost/vkn/admin_con/services/listing', '2026-06-18', '22:19:45', 2, 'admin@gmail.com', 'admin'),
(145, '::1', 'http://localhost/vkn/admin_con/services/listing', '2026-06-18', '22:20:20', 2, 'admin@gmail.com', 'admin'),
(146, '::1', 'http://localhost/vkn/admin_con/services/edit/1', '2026-06-18', '22:20:33', 2, 'admin@gmail.com', 'admin'),
(147, '::1', 'http://localhost/vkn/admin_con/services/listing', '2026-06-18', '22:20:36', 2, 'admin@gmail.com', 'admin'),
(148, '::1', 'http://localhost/vkn/admin_con/sub_categories/listing', '2026-06-18', '22:25:21', 2, 'admin@gmail.com', 'admin'),
(149, '::1', 'http://localhost/vkn/admin_con/sub_categories/listing', '2026-06-18', '22:26:19', 2, 'admin@gmail.com', 'admin'),
(150, '::1', 'http://localhost/vkn/admin_con/services/listing', '2026-06-18', '22:26:21', 2, 'admin@gmail.com', 'admin'),
(151, '::1', 'http://localhost/vkn/admin_con/services/add', '2026-06-18', '22:27:16', 2, 'admin@gmail.com', 'admin'),
(152, '::1', 'http://localhost/vkn/admin_con/services/add', '2026-06-18', '22:27:30', 2, 'admin@gmail.com', 'admin'),
(153, '::1', 'http://localhost/vkn/admin_con/services/listing', '2026-06-18', '22:27:41', 2, 'admin@gmail.com', 'admin'),
(154, '::1', 'http://localhost/vkn/admin_con/services/listing', '2026-06-18', '22:38:18', 2, 'admin@gmail.com', 'admin'),
(155, '::1', 'http://localhost/vkn/admin_con/portfolio/listing', '2026-06-18', '22:38:20', 2, 'admin@gmail.com', 'admin'),
(156, '::1', 'http://localhost/vkn/admin_con/portfolio/listing', '2026-06-18', '22:38:54', 2, 'admin@gmail.com', 'admin'),
(157, '::1', 'http://localhost/vkn/admin_con/portfolio/add', '2026-06-18', '22:38:56', 2, 'admin@gmail.com', 'admin'),
(158, '::1', 'http://localhost/vkn/admin_con/portfolio/add', '2026-06-18', '22:39:23', 2, 'admin@gmail.com', 'admin'),
(159, '::1', 'http://localhost/vkn/admin_con/portfolio/listing', '2026-06-18', '22:39:49', 2, 'admin@gmail.com', 'admin'),
(160, '::1', 'http://localhost/vkn/admin_con/portfolio/add', '2026-06-18', '22:39:53', 2, 'admin@gmail.com', 'admin'),
(161, '::1', 'http://localhost/vkn/admin_con/portfolio/listing', '2026-06-18', '22:40:01', 2, 'admin@gmail.com', 'admin'),
(162, '::1', 'http://localhost/vkn/admin_con/portfolio/listing', '2026-06-18', '22:45:07', 2, 'admin@gmail.com', 'admin'),
(163, '::1', 'http://localhost/vkn/admin_con/testimonials/listing', '2026-06-18', '22:45:09', 2, 'admin@gmail.com', 'admin'),
(164, '::1', 'http://localhost/vkn/admin_con/testimonials/edit/3', '2026-06-18', '22:45:11', 2, 'admin@gmail.com', 'admin'),
(165, '::1', 'http://localhost/vkn/admin_con/testimonials/listing', '2026-06-18', '22:45:17', 2, 'admin@gmail.com', 'admin'),
(166, '::1', 'http://localhost/vkn/admin_con/testimonials/listing', '2026-06-18', '22:50:06', 2, 'admin@gmail.com', 'admin'),
(167, '::1', 'http://localhost/vkn/admin_con/partner/listing', '2026-06-18', '22:50:09', 2, 'admin@gmail.com', 'admin'),
(168, '::1', 'http://localhost/vkn/admin_con/partner/add', '2026-06-18', '22:50:10', 2, 'admin@gmail.com', 'admin'),
(169, '::1', 'http://localhost/vkn/admin_con/partner/add', '2026-06-18', '22:50:45', 2, 'admin@gmail.com', 'admin'),
(170, '::1', 'http://localhost/vkn/admin_con/partner/listing', '2026-06-18', '22:50:55', 2, 'admin@gmail.com', 'admin'),
(171, '::1', 'http://localhost/vkn/admin_con/partner/edit/1', '2026-06-18', '22:50:57', 2, 'admin@gmail.com', 'admin'),
(172, '::1', 'http://localhost/vkn/admin_con/partner/listing', '2026-06-18', '22:50:58', 2, 'admin@gmail.com', 'admin'),
(173, '::1', 'http://localhost/vkn/admin_con/partner/add', '2026-06-18', '22:51:00', 2, 'admin@gmail.com', 'admin'),
(174, '::1', 'http://localhost/vkn/admin_con/partner/listing', '2026-06-18', '22:51:07', 2, 'admin@gmail.com', 'admin'),
(175, '::1', 'http://localhost/vkn/admin_con/site_setting/edit/1', '2026-06-18', '22:58:45', 2, 'admin@gmail.com', 'admin'),
(176, '::1', 'http://localhost/vkn/admin_con/site_setting/edit/1', '2026-06-18', '22:58:49', 2, 'admin@gmail.com', 'admin'),
(177, '::1', 'http://localhost/vkn/admin_con/contact/listing', '2026-06-18', '23:03:29', 2, 'admin@gmail.com', 'admin'),
(178, '::1', 'http://localhost/vkn/admin_con/site_setting/edit/1', '2026-06-18', '23:03:34', 2, 'admin@gmail.com', 'admin'),
(179, '::1', 'http://localhost/vkn/admin_con/slider/listing', '2026-06-18', '23:03:35', 2, 'admin@gmail.com', 'admin'),
(180, '::1', 'http://localhost/vkn/admin_con/category/listing', '2026-06-18', '23:03:35', 2, 'admin@gmail.com', 'admin'),
(181, '::1', 'http://localhost/vkn/admin_con/services/listing', '2026-06-18', '23:03:36', 2, 'admin@gmail.com', 'admin'),
(182, '::1', 'http://localhost/vkn/admin_con/services/listing', '2026-06-18', '23:03:37', 2, 'admin@gmail.com', 'admin'),
(183, '2401:4900:a016:ee56:4844:e68:aabb:9bc4', 'https://sademo.online/azmal/2026/june/vkn/admin/dashboard', '2026-06-18', '23:13:23', 2, 'admin@gmail.com', 'admin'),
(184, '2401:4900:a016:ee56:4844:e68:aabb:9bc4', 'https://sademo.online/azmal/2026/june/vkn/admin_con/site_setting/edit/1', '2026-06-18', '23:13:28', 2, 'admin@gmail.com', 'admin'),
(185, '2401:4900:a016:ee56:4844:e68:aabb:9bc4', 'https://sademo.online/azmal/2026/june/vkn/admin_con/slider/listing', '2026-06-18', '23:14:06', 2, 'admin@gmail.com', 'admin'),
(186, '2401:4900:a016:ee56:4844:e68:aabb:9bc4', 'https://sademo.online/azmal/2026/june/vkn/admin_con/category/listing', '2026-06-18', '23:14:10', 2, 'admin@gmail.com', 'admin'),
(187, '2401:4900:a016:ee56:4844:e68:aabb:9bc4', 'https://sademo.online/azmal/2026/june/vkn/admin_con/services/listing', '2026-06-18', '23:14:22', 2, 'admin@gmail.com', 'admin'),
(188, '2401:4900:a016:ee56:4844:e68:aabb:9bc4', 'https://sademo.online/azmal/2026/june/vkn/admin_con/portfolio/listing', '2026-06-18', '23:14:28', 2, 'admin@gmail.com', 'admin'),
(189, '2401:4900:a016:ee56:4844:e68:aabb:9bc4', 'https://sademo.online/azmal/2026/june/vkn/admin_con/testimonials/listing', '2026-06-18', '23:14:33', 2, 'admin@gmail.com', 'admin'),
(190, '2401:4900:a016:ee56:4844:e68:aabb:9bc4', 'https://sademo.online/azmal/2026/june/vkn/admin_con/partner/listing', '2026-06-18', '23:14:38', 2, 'admin@gmail.com', 'admin'),
(191, '2401:4900:a016:ee56:4844:e68:aabb:9bc4', 'https://sademo.online/azmal/2026/june/vkn/admin_con/contact/listing', '2026-06-18', '23:14:41', 2, 'admin@gmail.com', 'admin'),
(192, '2401:4900:a016:ee56:4844:e68:aabb:9bc4', 'https://sademo.online/azmal/2026/june/vkn/admin/dashboard', '2026-06-18', '23:14:46', 2, 'admin@gmail.com', 'admin'),
(193, '2401:4900:a016:ee56:4844:e68:aabb:9bc4', 'https://sademo.online/azmal/2026/june/vkn/admin/dashboard', '2026-06-18', '23:18:14', 2, 'admin@gmail.com', 'admin'),
(194, '2401:4900:a016:ee56:4844:e68:aabb:9bc4', 'https://sademo.online/azmal/2026/june/vkn/admin_con/site_setting/edit/1', '2026-06-18', '23:18:18', 2, 'admin@gmail.com', 'admin'),
(195, '106.219.228.97', 'https://sademo.online/azmal/2026/june/vkn/admin_con/site_setting/edit/1', '2026-06-18', '23:21:06', 2, 'admin@gmail.com', 'admin'),
(196, '106.219.228.97', 'https://sademo.online/azmal/2026/june/vkn/admin_con/slider/listing', '2026-06-18', '23:21:11', 2, 'admin@gmail.com', 'admin'),
(197, '106.219.228.97', 'https://sademo.online/azmal/2026/june/vkn/admin_con/site_setting/edit/1', '2026-06-18', '23:21:17', 2, 'admin@gmail.com', 'admin'),
(198, '2401:4900:a016:ee56:4844:e68:aabb:9bc4', 'https://sademo.online/azmal/2026/june/vkn/admin_con/site_setting/edit/1', '2026-06-18', '23:22:48', 2, 'admin@gmail.com', 'admin'),
(199, '2401:4900:a016:ee56:4844:e68:aabb:9bc4', 'https://sademo.online/azmal/2026/june/vkn/admin_con/slider/listing', '2026-06-18', '23:23:53', 2, 'admin@gmail.com', 'admin'),
(200, '2401:4900:a016:ee56:4844:e68:aabb:9bc4', 'https://sademo.online/azmal/2026/june/vkn/admin_con/category/listing', '2026-06-18', '23:24:05', 2, 'admin@gmail.com', 'admin'),
(201, '2401:4900:a016:ee56:4844:e68:aabb:9bc4', 'https://sademo.online/azmal/2026/june/vkn/admin_con/services/listing', '2026-06-18', '23:24:36', 2, 'admin@gmail.com', 'admin'),
(202, '2401:4900:a016:ee56:4844:e68:aabb:9bc4', 'https://sademo.online/azmal/2026/june/vkn/admin_con/services/edit/1', '2026-06-18', '23:24:41', 2, 'admin@gmail.com', 'admin'),
(203, '2401:4900:a016:ee56:4844:e68:aabb:9bc4', 'https://sademo.online/azmal/2026/june/vkn/admin_con/testimonials/listing', '2026-06-18', '23:28:06', 2, 'admin@gmail.com', 'admin'),
(204, '2401:4900:a016:ee56:4844:e68:aabb:9bc4', 'https://sademo.online/azmal/2026/june/vkn/admin_con/site_setting/edit/1', '2026-06-18', '23:28:23', 2, 'admin@gmail.com', 'admin'),
(205, '2401:4900:a016:ee56:4844:e68:aabb:9bc4', 'https://sademo.online/azmal/2026/june/vkn/admin_con/site_setting/edit/1', '2026-06-18', '23:28:29', 2, 'admin@gmail.com', 'admin'),
(206, '2401:4900:a016:ee56:4844:e68:aabb:9bc4', 'https://sademo.online/azmal/2026/june/vkn/admin_con/site_setting/edit/1', '2026-06-18', '23:30:09', 2, 'admin@gmail.com', 'admin'),
(207, '2401:4900:a016:ee56:4844:e68:aabb:9bc4', 'https://sademo.online/azmal/2026/june/vkn/admin_con/testimonials/listing', '2026-06-18', '23:30:11', 2, 'admin@gmail.com', 'admin'),
(208, '2401:4900:a016:ee56:4844:e68:aabb:9bc4', 'https://sademo.online/azmal/2026/june/vkn/admin_con/testimonials/edit/3', '2026-06-18', '23:30:15', 2, 'admin@gmail.com', 'admin'),
(209, '2401:4900:a016:ee56:4844:e68:aabb:9bc4', 'https://sademo.online/azmal/2026/june/vkn/admin_con/testimonials/listing', '2026-06-18', '23:32:03', 2, 'admin@gmail.com', 'admin'),
(210, '2401:4900:a016:ee56:4844:e68:aabb:9bc4', 'https://sademo.online/azmal/2026/june/vkn/admin_con/testimonials/edit/3', '2026-06-18', '23:32:09', 2, 'admin@gmail.com', 'admin'),
(211, '2401:4900:a016:ee56:4844:e68:aabb:9bc4', 'https://sademo.online/azmal/2026/june/vkn/admin_con/testimonials/listing', '2026-06-18', '23:32:15', 2, 'admin@gmail.com', 'admin'),
(212, '2401:4900:a016:ee56:4844:e68:aabb:9bc4', 'https://sademo.online/azmal/2026/june/vkn/admin_con/testimonials/edit/2', '2026-06-18', '23:32:17', 2, 'admin@gmail.com', 'admin'),
(213, '2401:4900:a016:ee56:4844:e68:aabb:9bc4', 'https://sademo.online/azmal/2026/june/vkn/admin_con/testimonials/listing', '2026-06-18', '23:33:13', 2, 'admin@gmail.com', 'admin'),
(214, '2401:4900:a016:ee56:4844:e68:aabb:9bc4', 'https://sademo.online/azmal/2026/june/vkn/admin_con/testimonials/edit/1', '2026-06-18', '23:33:17', 2, 'admin@gmail.com', 'admin'),
(215, '2401:4900:a016:ee56:4844:e68:aabb:9bc4', 'https://sademo.online/azmal/2026/june/vkn/admin_con/testimonials/listing', '2026-06-18', '23:34:37', 2, 'admin@gmail.com', 'admin'),
(216, '42.104.189.78', 'https://sademo.online/azmal/2026/june/vkn/admin_con/partner/listing', '2026-06-18', '23:41:15', 2, 'admin@gmail.com', 'admin'),
(217, '42.104.189.78', 'https://sademo.online/azmal/2026/june/vkn/admin_con/testimonials/listing', '2026-06-18', '23:41:53', 2, 'admin@gmail.com', 'admin'),
(218, '42.104.189.78', 'https://sademo.online/azmal/2026/june/vkn/admin_con/testimonials/add', '2026-06-18', '23:41:55', 2, 'admin@gmail.com', 'admin'),
(219, '42.104.189.78', 'https://sademo.online/azmal/2026/june/vkn/admin_con/testimonials/listing', '2026-06-18', '23:42:40', 2, 'admin@gmail.com', 'admin'),
(220, '42.104.189.78', 'https://sademo.online/azmal/2026/june/vkn/admin_con/partner/listing', '2026-06-18', '23:43:09', 2, 'admin@gmail.com', 'admin'),
(221, '42.104.189.78', 'https://sademo.online/azmal/2026/june/vkn/admin_con/partner/add', '2026-06-18', '23:43:12', 2, 'admin@gmail.com', 'admin'),
(222, '42.104.189.78', 'https://sademo.online/azmal/2026/june/vkn/admin_con/partner/listing', '2026-06-18', '23:43:34', 2, 'admin@gmail.com', 'admin'),
(223, '42.104.189.78', 'https://sademo.online/azmal/2026/june/vkn/admin_con/partner/add', '2026-06-18', '23:43:46', 2, 'admin@gmail.com', 'admin'),
(224, '42.104.189.78', 'https://sademo.online/azmal/2026/june/vkn/admin_con/partner/listing', '2026-06-18', '23:43:59', 2, 'admin@gmail.com', 'admin'),
(225, '42.104.189.78', 'https://sademo.online/azmal/2026/june/vkn/admin_con/partner/add', '2026-06-18', '23:44:21', 2, 'admin@gmail.com', 'admin'),
(226, '2401:4900:a016:ee56:3127:12d2:84d4:a310', 'https://sademo.online/azmal/2026/june/vkn/admin_con/partner/listing', '2026-06-18', '23:46:29', 2, 'admin@gmail.com', 'admin'),
(227, '2401:4900:a016:ee56:3127:12d2:84d4:a310', 'https://sademo.online/azmal/2026/june/vkn/admin_con/partner/add', '2026-06-18', '23:46:44', 2, 'admin@gmail.com', 'admin'),
(228, '2401:4900:a016:ee56:3127:12d2:84d4:a310', 'https://sademo.online/azmal/2026/june/vkn/admin_con/partner/listing', '2026-06-18', '23:46:50', 2, 'admin@gmail.com', 'admin'),
(229, '2401:4900:a016:ee56:3127:12d2:84d4:a310', 'https://sademo.online/azmal/2026/june/vkn/admin_con/partner/add', '2026-06-18', '23:46:57', 2, 'admin@gmail.com', 'admin'),
(230, '2401:4900:a016:ee56:3127:12d2:84d4:a310', 'https://sademo.online/azmal/2026/june/vkn/admin_con/partner/add', '2026-06-18', '23:47:00', 2, 'admin@gmail.com', 'admin'),
(231, '2401:4900:a016:ee56:3127:12d2:84d4:a310', 'https://sademo.online/azmal/2026/june/vkn/admin_con/partner/add', '2026-06-18', '23:47:10', 2, 'admin@gmail.com', 'admin'),
(232, '2401:4900:a016:ee56:3127:12d2:84d4:a310', 'https://sademo.online/azmal/2026/june/vkn/admin_con/partner/listing', '2026-06-18', '23:47:12', 2, 'admin@gmail.com', 'admin'),
(233, '2401:4900:a016:ee56:3127:12d2:84d4:a310', 'https://sademo.online/azmal/2026/june/vkn/admin_con/partner/add', '2026-06-18', '23:47:14', 2, 'admin@gmail.com', 'admin'),
(234, '2401:4900:a016:ee56:3127:12d2:84d4:a310', 'https://sademo.online/azmal/2026/june/vkn/admin_con/partner/listing', '2026-06-18', '23:47:30', 2, 'admin@gmail.com', 'admin'),
(235, '2402:3a80:4551:e81f:9ea:e3b7:79b1:4146', 'https://sademo.online/azmal/2026/june/vkn/admin_con/partner/listing', '2026-06-18', '23:48:47', 2, 'admin@gmail.com', 'admin'),
(236, '2402:3a80:4551:e81f:9ea:e3b7:79b1:4146', 'https://sademo.online/azmal/2026/june/vkn/admin_con/contact/listing', '2026-06-18', '23:49:22', 2, 'admin@gmail.com', 'admin'),
(237, '2402:3a80:4551:e81f:9ea:e3b7:79b1:4146', 'https://sademo.online/azmal/2026/june/vkn/admin/dashboard', '2026-06-18', '23:49:37', 2, 'admin@gmail.com', 'admin'),
(238, '2402:3a80:4551:e81f:9ea:e3b7:79b1:4146', 'https://sademo.online/azmal/2026/june/vkn/admin_con/site_setting/edit/1', '2026-06-18', '23:49:40', 2, 'admin@gmail.com', 'admin'),
(239, '2402:3a80:4551:e81f:9ea:e3b7:79b1:4146', 'https://sademo.online/azmal/2026/june/vkn/admin_con/slider/listing', '2026-06-18', '23:49:59', 2, 'admin@gmail.com', 'admin'),
(240, '2402:3a80:4551:e81f:9ea:e3b7:79b1:4146', 'https://sademo.online/azmal/2026/june/vkn/admin_con/category/listing', '2026-06-18', '23:50:03', 2, 'admin@gmail.com', 'admin'),
(241, '2402:3a80:4551:e81f:9ea:e3b7:79b1:4146', 'https://sademo.online/azmal/2026/june/vkn/admin_con/services/listing', '2026-06-18', '23:50:07', 2, 'admin@gmail.com', 'admin'),
(242, '2402:3a80:4551:e81f:9ea:e3b7:79b1:4146', 'https://sademo.online/azmal/2026/june/vkn/admin_con/portfolio/listing', '2026-06-18', '23:50:12', 2, 'admin@gmail.com', 'admin'),
(243, '2402:3a80:4551:e81f:9ea:e3b7:79b1:4146', 'https://sademo.online/azmal/2026/june/vkn/admin_con/testimonials/listing', '2026-06-18', '23:50:15', 2, 'admin@gmail.com', 'admin'),
(244, '2402:3a80:4551:e81f:9ea:e3b7:79b1:4146', 'https://sademo.online/azmal/2026/june/vkn/admin/dashboard', '2026-06-18', '23:51:03', 2, 'admin@gmail.com', 'admin'),
(245, '2402:3a80:4551:e81f:9ea:e3b7:79b1:4146', 'https://sademo.online/azmal/2026/june/vkn/admin/dashboard', '2026-06-18', '23:52:01', 2, 'admin@gmail.com', 'admin'),
(246, '2402:3a80:4551:e81f:9ea:e3b7:79b1:4146', 'https://sademo.online/azmal/2026/june/vkn/admin_con/site_setting/edit/1', '2026-06-18', '23:52:45', 2, 'admin@gmail.com', 'admin'),
(247, '2402:3a80:4551:e81f:9ea:e3b7:79b1:4146', 'https://sademo.online/azmal/2026/june/vkn/admin_con/category/listing', '2026-06-18', '23:52:48', 2, 'admin@gmail.com', 'admin'),
(248, '2402:3a80:4551:e81f:9ea:e3b7:79b1:4146', 'https://sademo.online/azmal/2026/june/vkn/admin_con/category/listing', '2026-06-18', '23:53:01', 2, 'admin@gmail.com', 'admin'),
(249, '2402:3a80:4551:e81f:9ea:e3b7:79b1:4146', 'https://sademo.online/azmal/2026/june/vkn/admin_con/services/listing', '2026-06-18', '23:53:07', 2, 'admin@gmail.com', 'admin'),
(250, '2402:3a80:4551:e81f:9ea:e3b7:79b1:4146', 'https://sademo.online/azmal/2026/june/vkn/admin_con/partner/listing', '2026-06-18', '23:53:10', 2, 'admin@gmail.com', 'admin'),
(251, '2402:3a80:4551:e81f:9ea:e3b7:79b1:4146', 'https://sademo.online/azmal/2026/june/vkn/admin_con/contact/listing', '2026-06-18', '23:53:42', 2, 'admin@gmail.com', 'admin'),
(252, '49.205.176.19', 'https://sademo.online/azmal/2026/june/vkn/admin/dashboard', '2026-06-19', '11:14:07', 2, 'admin@gmail.com', 'admin'),
(253, '49.205.176.19', 'https://sademo.online/azmal/2026/june/vkn/admin_con/site_setting/edit/1', '2026-06-19', '11:14:12', 2, 'admin@gmail.com', 'admin'),
(254, '49.205.176.19', 'https://sademo.online/azmal/2026/june/vkn/admin/dashboard', '2026-06-19', '11:15:54', 2, 'admin@gmail.com', 'admin'),
(255, '49.205.176.19', 'https://sademo.online/azmal/2026/june/vkn/admin_con/slider/listing', '2026-06-19', '11:30:33', 2, 'admin@gmail.com', 'admin'),
(256, '49.205.176.19', 'https://sademo.online/azmal/2026/june/vkn/admin_con/slider/add', '2026-06-19', '11:30:34', 2, 'admin@gmail.com', 'admin'),
(257, '49.205.176.19', 'https://sademo.online/azmal/2026/june/vkn/admin_con/slider/listing', '2026-06-19', '11:30:48', 2, 'admin@gmail.com', 'admin'),
(258, '49.205.176.19', 'https://sademo.online/azmal/2026/june/vkn/admin_con/slider/add', '2026-06-19', '11:31:02', 2, 'admin@gmail.com', 'admin'),
(259, '49.205.176.19', 'https://sademo.online/azmal/2026/june/vkn/admin_con/slider/listing', '2026-06-19', '11:31:23', 2, 'admin@gmail.com', 'admin'),
(260, '49.205.176.19', 'https://sademo.online/azmal/2026/june/vkn/admin_con/portfolio/listing', '2026-06-19', '11:31:38', 2, 'admin@gmail.com', 'admin'),
(261, '49.205.176.19', 'https://sademo.online/azmal/2026/june/vkn/admin_con/testimonials/listing', '2026-06-19', '11:31:44', 2, 'admin@gmail.com', 'admin'),
(262, '49.205.176.19', 'https://sademo.online/azmal/2026/june/vkn/admin_con/partner/listing', '2026-06-19', '11:31:49', 2, 'admin@gmail.com', 'admin'),
(263, '49.205.176.19', 'https://sademo.online/azmal/2026/june/vkn/admin_con/partner/edit/7', '2026-06-19', '11:31:51', 2, 'admin@gmail.com', 'admin'),
(264, '49.205.176.19', 'https://sademo.online/azmal/2026/june/vkn/admin_con/partner/listing', '2026-06-19', '11:32:02', 2, 'admin@gmail.com', 'admin'),
(265, '49.205.176.19', 'https://sademo.online/azmal/2026/june/vkn/admin_con/partner/edit/6', '2026-06-19', '11:32:04', 2, 'admin@gmail.com', 'admin'),
(266, '49.205.176.19', 'https://sademo.online/azmal/2026/june/vkn/admin_con/partner/listing', '2026-06-19', '11:32:15', 2, 'admin@gmail.com', 'admin'),
(267, '49.205.176.19', 'https://sademo.online/azmal/2026/june/vkn/admin_con/partner/edit/5', '2026-06-19', '11:32:17', 2, 'admin@gmail.com', 'admin'),
(268, '49.205.176.19', 'https://sademo.online/azmal/2026/june/vkn/admin_con/partner/listing', '2026-06-19', '11:32:25', 2, 'admin@gmail.com', 'admin'),
(269, '49.205.176.19', 'https://sademo.online/azmal/2026/june/vkn/admin_con/services/listing', '2026-06-19', '11:35:57', 2, 'admin@gmail.com', 'admin'),
(270, '49.205.176.19', 'https://sademo.online/azmal/2026/june/vkn/admin_con/services/edit/2', '2026-06-19', '11:36:04', 2, 'admin@gmail.com', 'admin'),
(271, '49.205.176.19', 'https://sademo.online/azmal/2026/june/vkn/admin_con/services/listing', '2026-06-19', '11:36:38', 2, 'admin@gmail.com', 'admin'),
(272, '49.205.176.19', 'https://sademo.online/azmal/2026/june/vkn/admin_con/services/edit/1', '2026-06-19', '11:36:41', 2, 'admin@gmail.com', 'admin'),
(273, '49.205.176.19', 'https://sademo.online/azmal/2026/june/vkn/admin_con/services/listing', '2026-06-19', '11:36:48', 2, 'admin@gmail.com', 'admin'),
(274, '49.205.176.19', 'https://sademo.online/azmal/2026/june/vkn/admin_con/services/edit/1', '2026-06-19', '11:36:50', 2, 'admin@gmail.com', 'admin'),
(275, '49.205.176.19', 'https://sademo.online/azmal/2026/june/vkn/admin_con/services/listing', '2026-06-19', '11:37:05', 2, 'admin@gmail.com', 'admin'),
(276, '49.205.176.19', 'https://sademo.online/azmal/2026/june/vkn/admin_con/portfolio/listing', '2026-06-19', '11:37:11', 2, 'admin@gmail.com', 'admin'),
(277, '49.205.176.19', 'https://sademo.online/azmal/2026/june/vkn/admin_con/portfolio/add', '2026-06-19', '11:37:15', 2, 'admin@gmail.com', 'admin'),
(278, '49.205.176.19', 'https://sademo.online/azmal/2026/june/vkn/admin_con/portfolio/listing', '2026-06-19', '11:37:44', 2, 'admin@gmail.com', 'admin'),
(279, '49.205.176.19', 'https://sademo.online/azmal/2026/june/vkn/admin_con/portfolio/add', '2026-06-19', '11:37:46', 2, 'admin@gmail.com', 'admin'),
(280, '49.205.176.19', 'https://sademo.online/azmal/2026/june/vkn/admin_con/portfolio/listing', '2026-06-19', '11:38:12', 2, 'admin@gmail.com', 'admin'),
(281, '49.205.176.19', 'https://sademo.online/azmal/2026/june/vkn/admin_con/portfolio/add', '2026-06-19', '11:38:13', 2, 'admin@gmail.com', 'admin'),
(282, '49.205.176.19', 'https://sademo.online/azmal/2026/june/vkn/admin_con/portfolio/listing', '2026-06-19', '11:38:22', 2, 'admin@gmail.com', 'admin'),
(283, '49.205.176.19', 'https://sademo.online/azmal/2026/june/vkn/admin_con/portfolio/add', '2026-06-19', '11:38:24', 2, 'admin@gmail.com', 'admin'),
(284, '49.205.176.19', 'https://sademo.online/azmal/2026/june/vkn/admin_con/portfolio/listing', '2026-06-19', '11:38:35', 2, 'admin@gmail.com', 'admin'),
(285, '49.205.176.19', 'https://sademo.online/azmal/2026/june/vkn/admin_con/portfolio/add', '2026-06-19', '11:38:37', 2, 'admin@gmail.com', 'admin'),
(286, '49.205.176.19', 'https://sademo.online/azmal/2026/june/vkn/admin_con/portfolio/listing', '2026-06-19', '11:38:46', 2, 'admin@gmail.com', 'admin'),
(287, '49.205.176.19', 'https://sademo.online/azmal/2026/june/vkn/admin_con/portfolio/add', '2026-06-19', '11:38:47', 2, 'admin@gmail.com', 'admin'),
(288, '49.205.176.19', 'https://sademo.online/azmal/2026/june/vkn/admin_con/portfolio/listing', '2026-06-19', '11:41:13', 2, 'admin@gmail.com', 'admin'),
(289, '49.205.176.19', 'https://sademo.online/azmal/2026/june/vkn/admin_con/portfolio/add', '2026-06-19', '11:41:15', 2, 'admin@gmail.com', 'admin'),
(290, '49.205.176.19', 'https://sademo.online/azmal/2026/june/vkn/admin_con/portfolio/listing', '2026-06-19', '11:41:26', 2, 'admin@gmail.com', 'admin'),
(291, '49.205.176.19', 'https://sademo.online/azmal/2026/june/vkn/admin_con/portfolio/add', '2026-06-19', '11:41:28', 2, 'admin@gmail.com', 'admin'),
(292, '49.205.176.19', 'https://sademo.online/azmal/2026/june/vkn/admin_con/portfolio/listing', '2026-06-19', '11:41:37', 2, 'admin@gmail.com', 'admin'),
(293, '49.205.176.19', 'https://sademo.online/azmal/2026/june/vkn/admin_con/portfolio/add', '2026-06-19', '11:43:27', 2, 'admin@gmail.com', 'admin'),
(294, '49.205.176.19', 'https://sademo.online/azmal/2026/june/vkn/admin_con/portfolio/listing', '2026-06-19', '11:43:43', 2, 'admin@gmail.com', 'admin'),
(295, '49.205.176.19', 'https://sademo.online/azmal/2026/june/vkn/admin_con/portfolio/add', '2026-06-19', '11:43:44', 2, 'admin@gmail.com', 'admin'),
(296, '49.205.176.19', 'https://sademo.online/azmal/2026/june/vkn/admin_con/portfolio/listing', '2026-06-19', '11:43:55', 2, 'admin@gmail.com', 'admin'),
(297, '49.205.176.19', 'https://sademo.online/azmal/2026/june/vkn/admin_con/portfolio/add', '2026-06-19', '11:43:57', 2, 'admin@gmail.com', 'admin'),
(298, '49.205.176.19', 'https://sademo.online/azmal/2026/june/vkn/admin_con/portfolio/listing', '2026-06-19', '11:44:03', 2, 'admin@gmail.com', 'admin'),
(299, '49.205.176.19', 'https://sademo.online/azmal/2026/june/vkn/admin_con/portfolio/add', '2026-06-19', '11:44:05', 2, 'admin@gmail.com', 'admin'),
(300, '49.205.176.19', 'https://sademo.online/azmal/2026/june/vkn/admin_con/portfolio/listing', '2026-06-19', '11:44:16', 2, 'admin@gmail.com', 'admin'),
(301, '49.205.176.19', 'https://sademo.online/azmal/2026/june/vkn/admin_con/portfolio/edit/13', '2026-06-19', '11:44:19', 2, 'admin@gmail.com', 'admin'),
(302, '49.205.176.19', 'https://sademo.online/azmal/2026/june/vkn/admin_con/portfolio/listing', '2026-06-19', '11:44:22', 2, 'admin@gmail.com', 'admin'),
(303, '49.205.176.19', 'https://sademo.online/azmal/2026/june/vkn/admin_con/portfolio/add', '2026-06-19', '11:44:23', 2, 'admin@gmail.com', 'admin'),
(304, '49.205.176.19', 'https://sademo.online/azmal/2026/june/vkn/admin_con/portfolio/listing', '2026-06-19', '11:44:32', 2, 'admin@gmail.com', 'admin'),
(305, '49.205.176.19', 'https://sademo.online/azmal/2026/june/vkn/admin/dashboard', '2026-06-19', '11:48:30', 2, 'admin@gmail.com', 'admin'),
(306, '49.205.176.19', 'https://sademo.online/azmal/2026/june/vkn/admin_con/site_setting/edit/1', '2026-06-19', '11:48:33', 2, 'admin@gmail.com', 'admin'),
(307, '49.205.176.19', 'https://sademo.online/azmal/2026/june/vkn/admin_con/slider/listing', '2026-06-19', '11:48:39', 2, 'admin@gmail.com', 'admin'),
(308, '49.205.176.19', 'https://sademo.online/azmal/2026/june/vkn/admin_con/slider/edit/23', '2026-06-19', '11:48:41', 2, 'admin@gmail.com', 'admin'),
(309, '49.205.176.19', 'https://sademo.online/azmal/2026/june/vkn/admin_con/slider/listing', '2026-06-19', '11:48:42', 2, 'admin@gmail.com', 'admin'),
(310, '49.205.176.19', 'https://sademo.online/azmal/2026/june/vkn/admin_con/slider/edit/22', '2026-06-19', '11:48:43', 2, 'admin@gmail.com', 'admin'),
(311, '49.205.176.19', 'https://sademo.online/azmal/2026/june/vkn/admin_con/slider/listing', '2026-06-19', '11:48:44', 2, 'admin@gmail.com', 'admin'),
(312, '49.205.176.19', 'https://sademo.online/azmal/2026/june/vkn/admin_con/slider/edit/21', '2026-06-19', '11:48:45', 2, 'admin@gmail.com', 'admin'),
(313, '49.205.176.19', 'https://sademo.online/azmal/2026/june/vkn/admin_con/slider/listing', '2026-06-19', '11:48:46', 2, 'admin@gmail.com', 'admin'),
(314, '49.205.176.19', 'https://sademo.online/azmal/2026/june/vkn/admin_con/category/listing', '2026-06-19', '11:48:49', 2, 'admin@gmail.com', 'admin'),
(315, '49.205.176.19', 'https://sademo.online/azmal/2026/june/vkn/admin_con/services/listing', '2026-06-19', '11:48:53', 2, 'admin@gmail.com', 'admin'),
(316, '49.205.176.19', 'https://sademo.online/azmal/2026/june/vkn/admin/dashboard', '2026-06-19', '11:50:23', 2, 'admin@gmail.com', 'admin'),
(317, '49.205.176.19', 'https://sademo.online/azmal/2026/june/vkn/admin_con/site_setting/edit/1', '2026-06-19', '11:50:26', 2, 'admin@gmail.com', 'admin'),
(318, '49.205.176.19', 'https://sademo.online/azmal/2026/june/vkn/admin_con/slider/listing', '2026-06-19', '11:50:29', 2, 'admin@gmail.com', 'admin'),
(319, '49.205.176.19', 'https://sademo.online/azmal/2026/june/vkn/admin_con/slider/listing', '2026-06-19', '11:50:33', 2, 'admin@gmail.com', 'admin'),
(320, '49.205.176.19', 'https://sademo.online/azmal/2026/june/vkn/admin_con/slider/listing', '2026-06-19', '11:50:36', 2, 'admin@gmail.com', 'admin'),
(321, '49.205.176.19', 'https://sademo.online/azmal/2026/june/vkn/admin_con/slider/add', '2026-06-19', '11:59:40', 2, 'admin@gmail.com', 'admin'),
(322, '49.205.176.19', 'https://sademo.online/azmal/2026/june/vkn/admin_con/slider/listing', '2026-06-19', '11:59:47', 2, 'admin@gmail.com', 'admin'),
(323, '49.205.176.19', 'https://sademo.online/azmal/2026/june/vkn/admin_con/portfolio/listing', '2026-06-19', '12:10:05', 2, 'admin@gmail.com', 'admin'),
(324, '49.205.176.19', 'https://sademo.online/azmal/2026/june/vkn/admin_con/portfolio/listing', '2026-06-19', '12:10:14', 2, 'admin@gmail.com', 'admin'),
(325, '49.205.176.19', 'https://sademo.online/azmal/2026/june/vkn/admin_con/partner/listing', '2026-06-19', '12:10:45', 2, 'admin@gmail.com', 'admin'),
(326, '49.205.176.19', 'https://sademo.online/azmal/2026/june/vkn/admin_con/partner/listing', '2026-06-19', '12:10:49', 2, 'admin@gmail.com', 'admin'),
(327, '49.205.176.19', 'https://sademo.online/azmal/2026/june/vkn/admin_con/partner/listing', '2026-06-19', '12:10:52', 2, 'admin@gmail.com', 'admin'),
(328, '49.205.176.19', 'https://sademo.online/azmal/2026/june/vkn/admin_con/site_setting/edit/1', '2026-06-19', '12:11:54', 2, 'admin@gmail.com', 'admin'),
(329, '49.205.176.19', 'https://sademo.online/azmal/2026/june/vkn/admin_con/site_setting/edit/1', '2026-06-19', '12:12:03', 2, 'admin@gmail.com', 'admin'),
(330, '49.205.176.19', 'https://sademo.online/azmal/2026/june/vkn/admin_con/slider/listing', '2026-06-19', '12:12:07', 2, 'admin@gmail.com', 'admin'),
(331, '49.205.176.19', 'https://sademo.online/azmal/2026/june/vkn/admin_con/category/listing', '2026-06-19', '12:12:10', 2, 'admin@gmail.com', 'admin'),
(332, '49.205.176.19', 'https://sademo.online/azmal/2026/june/vkn/admin_con/services/listing', '2026-06-19', '12:12:14', 2, 'admin@gmail.com', 'admin'),
(333, '49.205.176.19', 'https://sademo.online/azmal/2026/june/vkn/admin_con/portfolio/listing', '2026-06-19', '12:12:16', 2, 'admin@gmail.com', 'admin'),
(334, '49.205.176.19', 'https://sademo.online/azmal/2026/june/vkn/admin_con/site_setting/edit/1', '2026-06-19', '12:13:26', 2, 'admin@gmail.com', 'admin'),
(335, '49.205.176.19', 'https://sademo.online/azmal/2026/june/vkn/admin_con/site_setting/edit/1', '2026-06-19', '12:13:37', 2, 'admin@gmail.com', 'admin'),
(336, '49.205.176.19', 'https://sademo.online/azmal/2026/june/vkn/admin_con/category/listing', '2026-06-19', '12:14:07', 2, 'admin@gmail.com', 'admin'),
(337, '49.205.176.19', 'https://sademo.online/azmal/2026/june/vkn/admin_con/category/edit/3', '2026-06-19', '12:14:10', 2, 'admin@gmail.com', 'admin'),
(338, '49.205.176.19', 'https://sademo.online/azmal/2026/june/vkn/admin_con/category/listing', '2026-06-19', '12:14:47', 2, 'admin@gmail.com', 'admin'),
(339, '49.205.176.19', 'https://sademo.online/azmal/2026/june/vkn/admin_con/category/edit/2', '2026-06-19', '12:14:50', 2, 'admin@gmail.com', 'admin'),
(340, '49.205.176.19', 'https://sademo.online/azmal/2026/june/vkn/admin_con/category/listing', '2026-06-19', '12:15:03', 2, 'admin@gmail.com', 'admin'),
(341, '49.205.176.19', 'https://sademo.online/azmal/2026/june/vkn/admin_con/category/edit/1', '2026-06-19', '12:15:05', 2, 'admin@gmail.com', 'admin'),
(342, '49.205.176.19', 'https://sademo.online/azmal/2026/june/vkn/admin_con/category/listing', '2026-06-19', '12:15:16', 2, 'admin@gmail.com', 'admin'),
(343, '2401:4900:8201:9e47:cca4:6eb0:7ad5:ff04', 'https://sademo.online/azmal/2026/june/vkn/admin/dashboard', '2026-06-19', '21:44:45', 2, 'admin@gmail.com', 'admin'),
(344, '2401:4900:8201:9e47:cca4:6eb0:7ad5:ff04', 'https://sademo.online/azmal/2026/june/vkn/admin/dashboard', '2026-06-19', '21:45:04', 2, 'admin@gmail.com', 'admin'),
(345, '2401:4900:8201:9e47:cca4:6eb0:7ad5:ff04', 'https://sademo.online/azmal/2026/june/vkn/admin_con/slider/listing', '2026-06-19', '21:45:09', 2, 'admin@gmail.com', 'admin'),
(346, '2401:4900:8201:9e47:cca4:6eb0:7ad5:ff04', 'https://sademo.online/azmal/2026/june/vkn/admin_con/slider/add', '2026-06-19', '21:45:17', 2, 'admin@gmail.com', 'admin'),
(347, '2401:4900:8201:9e47:cca4:6eb0:7ad5:ff04', 'https://sademo.online/azmal/2026/june/vkn/admin_con/slider/listing', '2026-06-19', '21:45:47', 2, 'admin@gmail.com', 'admin'),
(348, '2401:4900:8201:9e47:cca4:6eb0:7ad5:ff04', 'https://sademo.online/azmal/2026/june/vkn/admin_con/slider/add', '2026-06-19', '21:48:49', 2, 'admin@gmail.com', 'admin');
INSERT INTO `activity_records` (`id`, `ip_addreass`, `url`, `date`, `time`, `admin_id`, `admin_username`, `admin_password`) VALUES
(349, '2401:4900:8201:9e47:cca4:6eb0:7ad5:ff04', 'https://sademo.online/azmal/2026/june/vkn/admin_con/slider/listing', '2026-06-19', '21:49:04', 2, 'admin@gmail.com', 'admin'),
(350, '119.252.210.107', 'https://sademo.online/azmal/2026/june/vkn/admin_con/slider/listing', '2026-06-19', '21:51:23', 2, 'admin@gmail.com', 'admin'),
(351, '119.252.210.107', 'https://sademo.online/azmal/2026/june/vkn/admin_con/slider/add', '2026-06-19', '21:51:26', 2, 'admin@gmail.com', 'admin'),
(352, '119.252.210.107', 'https://sademo.online/azmal/2026/june/vkn/admin_con/slider/listing', '2026-06-19', '21:51:45', 2, 'admin@gmail.com', 'admin'),
(353, '119.252.210.107', 'https://sademo.online/azmal/2026/june/vkn/admin_con/slider/listing', '2026-06-19', '21:51:49', 2, 'admin@gmail.com', 'admin'),
(354, '119.252.210.107', 'https://sademo.online/azmal/2026/june/vkn/admin_con/contact/listing', '2026-06-19', '21:54:42', 2, 'admin@gmail.com', 'admin'),
(355, '119.252.210.107', 'https://sademo.online/azmal/2026/june/vkn/admin_con/contact/listing', '2026-06-19', '21:54:50', 2, 'admin@gmail.com', 'admin'),
(356, '119.252.210.107', 'https://sademo.online/azmal/2026/june/vkn/admin_con/contact/listing', '2026-06-19', '21:55:01', 2, 'admin@gmail.com', 'admin'),
(357, '119.252.210.107', 'https://sademo.online/azmal/2026/june/vkn/admin_con/partner/listing', '2026-06-19', '21:55:03', 2, 'admin@gmail.com', 'admin'),
(358, '119.252.210.107', 'https://sademo.online/azmal/2026/june/vkn/admin_con/testimonials/listing', '2026-06-19', '21:55:04', 2, 'admin@gmail.com', 'admin'),
(359, '119.252.210.107', 'https://sademo.online/azmal/2026/june/vkn/admin_con/portfolio/listing', '2026-06-19', '21:55:05', 2, 'admin@gmail.com', 'admin'),
(360, '119.252.210.107', 'https://sademo.online/azmal/2026/june/vkn/admin_con/services/listing', '2026-06-19', '21:55:07', 2, 'admin@gmail.com', 'admin'),
(361, '119.252.210.107', 'https://sademo.online/azmal/2026/june/vkn/admin_con/services/add', '2026-06-19', '21:55:12', 2, 'admin@gmail.com', 'admin'),
(362, '119.252.210.107', 'https://sademo.online/azmal/2026/june/vkn/admin_con/services/add', '2026-06-19', '21:55:40', 2, 'admin@gmail.com', 'admin'),
(363, '119.252.210.107', 'https://sademo.online/azmal/2026/june/vkn/admin_con/services/add', '2026-06-19', '21:55:43', 2, 'admin@gmail.com', 'admin'),
(364, '119.252.210.107', 'https://sademo.online/azmal/2026/june/vkn/admin_con/services/listing', '2026-06-19', '21:57:01', 2, 'admin@gmail.com', 'admin'),
(365, '119.252.210.107', 'https://sademo.online/azmal/2026/june/vkn/admin/dashboard', '2026-06-19', '21:59:02', 2, 'admin@gmail.com', 'admin'),
(366, '119.252.210.107', 'https://sademo.online/azmal/2026/june/vkn/admin_con/site_setting/edit/1', '2026-06-19', '21:59:05', 2, 'admin@gmail.com', 'admin'),
(367, '119.252.210.107', 'https://sademo.online/azmal/2026/june/vkn/admin_con/site_setting/edit/1', '2026-06-19', '21:59:07', 2, 'admin@gmail.com', 'admin'),
(368, '119.252.210.107', 'https://sademo.online/azmal/2026/june/vkn/admin_con/slider/listing', '2026-06-19', '21:59:12', 2, 'admin@gmail.com', 'admin'),
(369, '119.252.210.107', 'https://sademo.online/azmal/2026/june/vkn/admin_con/slider/listing', '2026-06-19', '21:59:19', 2, 'admin@gmail.com', 'admin'),
(370, '119.252.210.107', 'https://sademo.online/azmal/2026/june/vkn/admin_con/slider/listing', '2026-06-19', '21:59:24', 2, 'admin@gmail.com', 'admin'),
(371, '119.252.210.107', 'https://sademo.online/azmal/2026/june/vkn/admin_con/category/listing', '2026-06-19', '21:59:25', 2, 'admin@gmail.com', 'admin'),
(372, '119.252.210.107', 'https://sademo.online/azmal/2026/june/vkn/admin_con/services/listing', '2026-06-19', '21:59:28', 2, 'admin@gmail.com', 'admin'),
(373, '119.252.210.107', 'https://sademo.online/azmal/2026/june/vkn/admin_con/services/edit/3', '2026-06-19', '22:00:09', 2, 'admin@gmail.com', 'admin'),
(374, '119.252.210.107', 'https://sademo.online/azmal/2026/june/vkn/admin_con/services/listing', '2026-06-19', '22:00:21', 2, 'admin@gmail.com', 'admin'),
(375, '119.252.210.107', 'https://sademo.online/azmal/2026/june/vkn/admin_con/services/listing', '2026-06-19', '22:00:30', 2, 'admin@gmail.com', 'admin'),
(376, '119.252.210.107', 'https://sademo.online/azmal/2026/june/vkn/admin/dashboard', '2026-06-19', '22:01:01', 2, 'admin@gmail.com', 'admin'),
(377, '119.252.210.107', 'https://sademo.online/azmal/2026/june/vkn/admin_con/services/listing', '2026-06-19', '22:01:18', 2, 'admin@gmail.com', 'admin'),
(378, '119.252.210.107', 'https://sademo.online/azmal/2026/june/vkn/admin_con/portfolio/listing', '2026-06-19', '22:01:20', 2, 'admin@gmail.com', 'admin'),
(379, '119.252.210.107', 'https://sademo.online/azmal/2026/june/vkn/admin_con/testimonials/listing', '2026-06-19', '22:01:23', 2, 'admin@gmail.com', 'admin'),
(380, '119.252.210.107', 'https://sademo.online/azmal/2026/june/vkn/admin_con/partner/listing', '2026-06-19', '22:01:25', 2, 'admin@gmail.com', 'admin'),
(381, '119.252.210.107', 'https://sademo.online/azmal/2026/june/vkn/admin_con/contact/listing', '2026-06-19', '22:01:26', 2, 'admin@gmail.com', 'admin'),
(382, '119.252.210.107', 'https://sademo.online/azmal/2026/june/vkn/admin_con/contact/listing', '2026-06-19', '22:06:48', 2, 'admin@gmail.com', 'admin'),
(383, '119.252.210.107', 'https://sademo.online/azmal/2026/june/vkn/admin_con/services/listing', '2026-06-19', '22:06:52', 2, 'admin@gmail.com', 'admin'),
(384, '119.252.210.107', 'https://sademo.online/azmal/2026/june/vkn/admin_con/services/edit/2', '2026-06-19', '22:06:55', 2, 'admin@gmail.com', 'admin'),
(385, '119.252.210.107', 'https://sademo.online/azmal/2026/june/vkn/admin_con/services/listing', '2026-06-19', '22:07:06', 2, 'admin@gmail.com', 'admin'),
(386, '122.162.145.71', 'https://sademo.online/azmal/2026/june/vkn/admin/dashboard', '2026-06-20', '10:54:59', 3, 'azmal', 'azmal'),
(387, '122.162.145.71', 'https://sademo.online/azmal/2026/june/vkn/admin_con/services/listing', '2026-06-20', '10:55:02', 3, 'azmal', 'azmal'),
(388, '122.162.145.71', 'https://sademo.online/azmal/2026/june/vkn/admin_con/services/edit/3', '2026-06-20', '10:55:04', 3, 'azmal', 'azmal'),
(389, '122.162.145.71', 'https://sademo.online/azmal/2026/june/vkn/admin_con/services/listing', '2026-06-20', '10:55:07', 3, 'azmal', 'azmal'),
(390, '122.162.145.71', 'https://sademo.online/azmal/2026/june/vkn/admin_con/services/edit/1', '2026-06-20', '10:55:09', 3, 'azmal', 'azmal'),
(391, '122.162.145.71', 'https://sademo.online/azmal/2026/june/vkn/admin_con/services/listing', '2026-06-20', '10:55:12', 3, 'azmal', 'azmal'),
(392, '122.162.145.71', 'https://sademo.online/azmal/2026/june/vkn/admin_con/category/listing', '2026-06-20', '10:55:14', 3, 'azmal', 'azmal'),
(393, '122.162.145.71', 'https://sademo.online/azmal/2026/june/vkn/admin_con/category/edit/3', '2026-06-20', '10:55:15', 3, 'azmal', 'azmal'),
(394, '2401:4900:81e7:389e:33b5:3d80:8277:9f9e', 'https://sademo.online/azmal/2026/june/vkn/admin_con/slider/listing', '2026-06-20', '11:11:36', 2, 'admin@gmail.com', 'admin'),
(395, '2401:4900:81e7:389e:33b5:3d80:8277:9f9e', 'https://sademo.online/azmal/2026/june/vkn/admin_con/services/listing', '2026-06-20', '11:11:44', 2, 'admin@gmail.com', 'admin'),
(396, '2401:4900:81e7:389e:33b5:3d80:8277:9f9e', 'https://sademo.online/azmal/2026/june/vkn/admin_con/services/listing', '2026-06-20', '11:11:58', 2, 'admin@gmail.com', 'admin'),
(397, '2401:4900:81e7:389e:33b5:3d80:8277:9f9e', 'https://sademo.online/azmal/2026/june/vkn/admin_con/category/listing', '2026-06-20', '11:12:07', 2, 'admin@gmail.com', 'admin'),
(398, '2401:4900:81e7:389e:33b5:3d80:8277:9f9e', 'https://sademo.online/azmal/2026/june/vkn/admin_con/site_setting/edit/1', '2026-06-20', '11:12:11', 2, 'admin@gmail.com', 'admin'),
(399, '2401:4900:81e7:389e:33b5:3d80:8277:9f9e', 'https://sademo.online/azmal/2026/june/vkn/admin_con/slider/listing', '2026-06-20', '11:12:15', 2, 'admin@gmail.com', 'admin'),
(400, '2401:4900:81e7:389e:33b5:3d80:8277:9f9e', 'https://sademo.online/azmal/2026/june/vkn/admin_con/category/listing', '2026-06-20', '11:12:17', 2, 'admin@gmail.com', 'admin'),
(401, '2401:4900:81e7:389e:33b5:3d80:8277:9f9e', 'https://sademo.online/azmal/2026/june/vkn/admin_con/category/edit/3', '2026-06-20', '11:12:22', 2, 'admin@gmail.com', 'admin'),
(402, '2401:4900:81e7:389e:33b5:3d80:8277:9f9e', 'https://sademo.online/azmal/2026/june/vkn/admin_con/category/listing', '2026-06-20', '11:12:48', 2, 'admin@gmail.com', 'admin'),
(403, '2401:4900:81e7:389e:33b5:3d80:8277:9f9e', 'https://sademo.online/azmal/2026/june/vkn/admin_con/category/edit/3', '2026-06-20', '11:12:51', 2, 'admin@gmail.com', 'admin'),
(404, '2401:4900:81e7:389e:33b5:3d80:8277:9f9e', 'https://sademo.online/azmal/2026/june/vkn/admin_con/category/listing', '2026-06-20', '11:12:53', 2, 'admin@gmail.com', 'admin'),
(405, '2401:4900:81e7:389e:33b5:3d80:8277:9f9e', 'https://sademo.online/azmal/2026/june/vkn/admin_con/category/edit/2', '2026-06-20', '11:12:55', 2, 'admin@gmail.com', 'admin'),
(406, '2401:4900:81e7:389e:33b5:3d80:8277:9f9e', 'https://sademo.online/azmal/2026/june/vkn/admin_con/category/listing', '2026-06-20', '11:12:59', 2, 'admin@gmail.com', 'admin'),
(407, '2401:4900:81e7:389e:33b5:3d80:8277:9f9e', 'https://sademo.online/azmal/2026/june/vkn/admin_con/category/edit/1', '2026-06-20', '11:13:01', 2, 'admin@gmail.com', 'admin'),
(408, '2401:4900:81e7:389e:33b5:3d80:8277:9f9e', 'https://sademo.online/azmal/2026/june/vkn/admin_con/category/listing', '2026-06-20', '11:13:13', 2, 'admin@gmail.com', 'admin'),
(409, '2401:4900:81e7:389e:33b5:3d80:8277:9f9e', 'https://sademo.online/azmal/2026/june/vkn/admin_con/category/edit/1', '2026-06-20', '11:13:14', 2, 'admin@gmail.com', 'admin'),
(410, '2401:4900:81e7:389e:33b5:3d80:8277:9f9e', 'https://sademo.online/azmal/2026/june/vkn/admin_con/category/listing', '2026-06-20', '11:13:16', 2, 'admin@gmail.com', 'admin'),
(411, '2401:4900:81e7:389e:33b5:3d80:8277:9f9e', 'https://sademo.online/azmal/2026/june/vkn/admin_con/category/edit/3', '2026-06-20', '11:13:17', 2, 'admin@gmail.com', 'admin'),
(412, '2401:4900:81e7:389e:33b5:3d80:8277:9f9e', 'https://sademo.online/azmal/2026/june/vkn/admin_con/category/edit/3', '2026-06-20', '11:14:20', 2, 'admin@gmail.com', 'admin'),
(413, '2401:4900:81e7:389e:33b5:3d80:8277:9f9e', 'https://sademo.online/azmal/2026/june/vkn/admin_con/category/edit/3', '2026-06-20', '11:14:32', 2, 'admin@gmail.com', 'admin'),
(414, '2401:4900:81e7:389e:33b5:3d80:8277:9f9e', 'https://sademo.online/azmal/2026/june/vkn/admin_con/contact/listing', '2026-06-20', '11:14:38', 2, 'admin@gmail.com', 'admin'),
(415, '2401:4900:81e7:389e:33b5:3d80:8277:9f9e', 'https://sademo.online/azmal/2026/june/vkn/admin/dashboard', '2026-06-20', '11:14:40', 2, 'admin@gmail.com', 'admin'),
(416, '2401:4900:81e7:389e:33b5:3d80:8277:9f9e', 'https://sademo.online/azmal/2026/june/vkn/admin_con/site_setting/edit/1', '2026-06-20', '11:14:43', 2, 'admin@gmail.com', 'admin'),
(417, '2401:4900:81e7:389e:33b5:3d80:8277:9f9e', 'https://sademo.online/azmal/2026/june/vkn/admin_con/testimonials/listing', '2026-06-20', '11:14:54', 2, 'admin@gmail.com', 'admin'),
(418, '2401:4900:81e7:389e:33b5:3d80:8277:9f9e', 'https://sademo.online/azmal/2026/june/vkn/admin_con/partner/listing', '2026-06-20', '11:14:57', 2, 'admin@gmail.com', 'admin'),
(419, '2401:4900:81e7:389e:33b5:3d80:8277:9f9e', 'https://sademo.online/azmal/2026/june/vkn/admin_con/contact/listing', '2026-06-20', '11:14:59', 2, 'admin@gmail.com', 'admin'),
(420, '2401:4900:81e7:389e:33b5:3d80:8277:9f9e', 'https://sademo.online/azmal/2026/june/vkn/admin_con/contact/listing', '2026-06-20', '11:40:34', 2, 'admin@gmail.com', 'admin'),
(421, '2401:4900:81e7:389e:33b5:3d80:8277:9f9e', 'https://sademo.online/azmal/2026/june/vkn/admin/dashboard', '2026-06-20', '11:40:40', 2, 'admin@gmail.com', 'admin'),
(422, '2401:4900:81e7:389e:33b5:3d80:8277:9f9e', 'https://sademo.online/azmal/2026/june/vkn/admin/dashboard', '2026-06-20', '11:40:56', 2, 'admin@gmail.com', 'admin'),
(423, '2401:4900:81e7:389e:33b5:3d80:8277:9f9e', 'https://sademo.online/azmal/2026/june/vkn/admin_con/site_setting/edit/1', '2026-06-20', '11:40:56', 2, 'admin@gmail.com', 'admin'),
(424, '2401:4900:81e7:389e:33b5:3d80:8277:9f9e', 'https://sademo.online/azmal/2026/june/vkn/admin_con/slider/listing', '2026-06-20', '11:41:14', 2, 'admin@gmail.com', 'admin'),
(425, '2401:4900:81e7:389e:33b5:3d80:8277:9f9e', 'https://sademo.online/azmal/2026/june/vkn/admin/dashboard', '2026-06-20', '11:41:17', 2, 'admin@gmail.com', 'admin'),
(426, '2401:4900:81e7:389e:33b5:3d80:8277:9f9e', 'https://sademo.online/azmal/2026/june/vkn/admin_con/site_setting/edit/1', '2026-06-20', '11:41:19', 2, 'admin@gmail.com', 'admin'),
(427, '2401:4900:81e7:389e:33b5:3d80:8277:9f9e', 'https://sademo.online/azmal/2026/june/vkn/admin_con/slider/listing', '2026-06-20', '11:41:32', 2, 'admin@gmail.com', 'admin'),
(428, '2401:4900:81e7:389e:33b5:3d80:8277:9f9e', 'https://sademo.online/azmal/2026/june/vkn/admin_con/testimonials/listing', '2026-06-20', '11:41:36', 2, 'admin@gmail.com', 'admin'),
(429, '2401:4900:81e7:389e:33b5:3d80:8277:9f9e', 'https://sademo.online/azmal/2026/june/vkn/admin_con/partner/listing', '2026-06-20', '11:41:40', 2, 'admin@gmail.com', 'admin'),
(430, '2401:4900:81e7:389e:33b5:3d80:8277:9f9e', 'https://sademo.online/azmal/2026/june/vkn/admin_con/contact/listing', '2026-06-20', '11:41:42', 2, 'admin@gmail.com', 'admin'),
(431, '2401:4900:81e7:389e:33b5:3d80:8277:9f9e', 'https://sademo.online/azmal/2026/june/vkn/admin_con/category/listing', '2026-06-20', '11:42:19', 2, 'admin@gmail.com', 'admin'),
(432, '2401:4900:81e7:389e:33b5:3d80:8277:9f9e', 'https://sademo.online/azmal/2026/june/vkn/admin_con/category/listing', '2026-06-20', '12:44:48', 2, 'admin@gmail.com', 'admin'),
(433, '2401:4900:81e7:389e:33b5:3d80:8277:9f9e', 'https://sademo.online/azmal/2026/june/vkn/admin_con/category/add', '2026-06-20', '12:44:56', 2, 'admin@gmail.com', 'admin'),
(434, '2401:4900:81e7:389e:33b5:3d80:8277:9f9e', 'https://sademo.online/azmal/2026/june/vkn/admin_con/category/listing', '2026-06-20', '12:44:58', 2, 'admin@gmail.com', 'admin'),
(435, '2401:4900:81e7:389e:33b5:3d80:8277:9f9e', 'https://sademo.online/azmal/2026/june/vkn/admin_con/contact/listing', '2026-06-20', '12:44:59', 2, 'admin@gmail.com', 'admin'),
(436, '2401:4900:81e7:389e:33b5:3d80:8277:9f9e', 'https://sademo.online/azmal/2026/june/vkn/admin/dashboard', '2026-06-20', '12:45:03', 2, 'admin@gmail.com', 'admin'),
(437, '2401:4900:81e7:389e:33b5:3d80:8277:9f9e', 'https://sademo.online/azmal/2026/june/vkn/admin_con/services/listing', '2026-06-20', '12:45:08', 2, 'admin@gmail.com', 'admin'),
(438, '2401:4900:81e7:389e:33b5:3d80:8277:9f9e', 'https://sademo.online/azmal/2026/june/vkn/admin_con/services/add', '2026-06-20', '12:45:10', 2, 'admin@gmail.com', 'admin'),
(439, '2401:4900:81e7:389e:33b5:3d80:8277:9f9e', 'https://sademo.online/azmal/2026/june/vkn/admin_con/services/listing', '2026-06-20', '12:45:52', 2, 'admin@gmail.com', 'admin'),
(440, '2401:4900:81e7:389e:33b5:3d80:8277:9f9e', 'https://sademo.online/azmal/2026/june/vkn/admin_con/services/add', '2026-06-20', '12:45:58', 2, 'admin@gmail.com', 'admin'),
(441, '2401:4900:81e7:389e:33b5:3d80:8277:9f9e', 'https://sademo.online/azmal/2026/june/vkn/admin_con/services/listing', '2026-06-20', '12:46:20', 2, 'admin@gmail.com', 'admin'),
(442, '2401:4900:81e7:389e:33b5:3d80:8277:9f9e', 'https://sademo.online/azmal/2026/june/vkn/admin_con/services/add', '2026-06-20', '12:46:33', 2, 'admin@gmail.com', 'admin'),
(443, '2401:4900:81e7:389e:33b5:3d80:8277:9f9e', 'https://sademo.online/azmal/2026/june/vkn/admin_con/services/listing', '2026-06-20', '12:46:48', 2, 'admin@gmail.com', 'admin'),
(444, '2401:4900:81e7:389e:33b5:3d80:8277:9f9e', 'https://sademo.online/azmal/2026/june/vkn/admin_con/services/add', '2026-06-20', '12:47:08', 2, 'admin@gmail.com', 'admin'),
(445, '2401:4900:81e7:389e:33b5:3d80:8277:9f9e', 'https://sademo.online/azmal/2026/june/vkn/admin_con/services/listing', '2026-06-20', '12:47:22', 2, 'admin@gmail.com', 'admin'),
(446, '2401:4900:81e7:389e:33b5:3d80:8277:9f9e', 'https://sademo.online/azmal/2026/june/vkn/admin_con/services/add', '2026-06-20', '12:47:46', 2, 'admin@gmail.com', 'admin'),
(447, '2401:4900:81e7:389e:33b5:3d80:8277:9f9e', 'https://sademo.online/azmal/2026/june/vkn/admin_con/services/listing', '2026-06-20', '12:47:56', 2, 'admin@gmail.com', 'admin'),
(448, '2401:4900:81e7:389e:33b5:3d80:8277:9f9e', 'https://sademo.online/azmal/2026/june/vkn/admin_con/services/add', '2026-06-20', '12:48:08', 2, 'admin@gmail.com', 'admin'),
(449, '2401:4900:81e7:389e:33b5:3d80:8277:9f9e', 'https://sademo.online/azmal/2026/june/vkn/admin_con/services/listing', '2026-06-20', '12:48:21', 2, 'admin@gmail.com', 'admin'),
(450, '2401:4900:81e7:389e:33b5:3d80:8277:9f9e', 'https://sademo.online/azmal/2026/june/vkn/admin_con/services/add', '2026-06-20', '12:48:34', 2, 'admin@gmail.com', 'admin'),
(451, '2401:4900:81e7:389e:33b5:3d80:8277:9f9e', 'https://sademo.online/azmal/2026/june/vkn/admin_con/services/listing', '2026-06-20', '12:48:43', 2, 'admin@gmail.com', 'admin'),
(452, '2401:4900:81e7:389e:33b5:3d80:8277:9f9e', 'https://sademo.online/azmal/2026/june/vkn/admin_con/services/add', '2026-06-20', '12:49:00', 2, 'admin@gmail.com', 'admin'),
(453, '2401:4900:81e7:389e:33b5:3d80:8277:9f9e', 'https://sademo.online/azmal/2026/june/vkn/admin_con/services/listing', '2026-06-20', '12:49:08', 2, 'admin@gmail.com', 'admin'),
(454, '2401:4900:81e7:389e:33b5:3d80:8277:9f9e', 'https://sademo.online/azmal/2026/june/vkn/admin_con/services/add', '2026-06-20', '12:49:22', 2, 'admin@gmail.com', 'admin'),
(455, '2401:4900:81e7:389e:33b5:3d80:8277:9f9e', 'https://sademo.online/azmal/2026/june/vkn/admin_con/services/listing', '2026-06-20', '12:49:36', 2, 'admin@gmail.com', 'admin'),
(456, '2401:4900:81e7:389e:33b5:3d80:8277:9f9e', 'https://sademo.online/azmal/2026/june/vkn/admin_con/services/add', '2026-06-20', '12:49:42', 2, 'admin@gmail.com', 'admin'),
(457, '2401:4900:81e7:389e:33b5:3d80:8277:9f9e', 'https://sademo.online/azmal/2026/june/vkn/admin_con/services/listing', '2026-06-20', '12:49:57', 2, 'admin@gmail.com', 'admin'),
(458, '2401:4900:81e7:389e:33b5:3d80:8277:9f9e', 'https://sademo.online/azmal/2026/june/vkn/admin_con/services/add', '2026-06-20', '12:50:12', 2, 'admin@gmail.com', 'admin'),
(459, '2401:4900:81e7:389e:33b5:3d80:8277:9f9e', 'https://sademo.online/azmal/2026/june/vkn/admin_con/services/listing', '2026-06-20', '12:50:25', 2, 'admin@gmail.com', 'admin'),
(460, '2401:4900:81e7:389e:33b5:3d80:8277:9f9e', 'https://sademo.online/azmal/2026/june/vkn/admin_con/services/edit/15', '2026-06-20', '12:52:26', 2, 'admin@gmail.com', 'admin'),
(461, '2401:4900:81e7:389e:33b5:3d80:8277:9f9e', 'https://sademo.online/azmal/2026/june/vkn/admin_con/services/listing', '2026-06-20', '12:52:37', 2, 'admin@gmail.com', 'admin'),
(462, '2401:4900:81e7:389e:33b5:3d80:8277:9f9e', 'https://sademo.online/azmal/2026/june/vkn/admin_con/services/edit/14', '2026-06-20', '12:52:41', 2, 'admin@gmail.com', 'admin'),
(463, '2401:4900:81e7:389e:33b5:3d80:8277:9f9e', 'https://sademo.online/azmal/2026/june/vkn/admin_con/services/listing', '2026-06-20', '12:52:54', 2, 'admin@gmail.com', 'admin'),
(464, '2401:4900:81e7:389e:33b5:3d80:8277:9f9e', 'https://sademo.online/azmal/2026/june/vkn/admin_con/services/edit/13', '2026-06-20', '12:52:59', 2, 'admin@gmail.com', 'admin'),
(465, '2401:4900:81e7:389e:33b5:3d80:8277:9f9e', 'https://sademo.online/azmal/2026/june/vkn/admin_con/services/listing', '2026-06-20', '12:53:07', 2, 'admin@gmail.com', 'admin'),
(466, '2401:4900:81e7:389e:33b5:3d80:8277:9f9e', 'https://sademo.online/azmal/2026/june/vkn/admin_con/services/edit/12', '2026-06-20', '12:55:00', 2, 'admin@gmail.com', 'admin'),
(467, '2401:4900:81e7:389e:33b5:3d80:8277:9f9e', 'https://sademo.online/azmal/2026/june/vkn/admin_con/services/listing', '2026-06-20', '12:55:11', 2, 'admin@gmail.com', 'admin'),
(468, '2401:4900:81e7:389e:33b5:3d80:8277:9f9e', 'https://sademo.online/azmal/2026/june/vkn/admin_con/services/edit/11', '2026-06-20', '12:55:15', 2, 'admin@gmail.com', 'admin'),
(469, '2401:4900:81e7:389e:33b5:3d80:8277:9f9e', 'https://sademo.online/azmal/2026/june/vkn/admin_con/services/listing', '2026-06-20', '12:55:26', 2, 'admin@gmail.com', 'admin'),
(470, '2401:4900:81e7:389e:33b5:3d80:8277:9f9e', 'https://sademo.online/azmal/2026/june/vkn/admin_con/services/edit/10', '2026-06-20', '12:55:31', 2, 'admin@gmail.com', 'admin'),
(471, '2401:4900:81e7:389e:33b5:3d80:8277:9f9e', 'https://sademo.online/azmal/2026/june/vkn/admin_con/services/listing', '2026-06-20', '12:55:46', 2, 'admin@gmail.com', 'admin'),
(472, '2401:4900:81e7:389e:33b5:3d80:8277:9f9e', 'https://sademo.online/azmal/2026/june/vkn/admin_con/services/edit/9', '2026-06-20', '12:55:50', 2, 'admin@gmail.com', 'admin'),
(473, '2401:4900:81e7:389e:33b5:3d80:8277:9f9e', 'https://sademo.online/azmal/2026/june/vkn/admin_con/services/listing', '2026-06-20', '12:56:04', 2, 'admin@gmail.com', 'admin'),
(474, '2401:4900:81e7:389e:33b5:3d80:8277:9f9e', 'https://sademo.online/azmal/2026/june/vkn/admin_con/services/listing', '2026-06-20', '12:56:16', 2, 'admin@gmail.com', 'admin'),
(475, '2401:4900:81e7:389e:33b5:3d80:8277:9f9e', 'https://sademo.online/azmal/2026/june/vkn/admin_con/services/edit/4', '2026-06-20', '12:58:06', 2, 'admin@gmail.com', 'admin'),
(476, '2401:4900:81e7:389e:33b5:3d80:8277:9f9e', 'https://sademo.online/azmal/2026/june/vkn/admin_con/services/listing', '2026-06-20', '12:58:16', 2, 'admin@gmail.com', 'admin'),
(477, '2401:4900:81e7:389e:33b5:3d80:8277:9f9e', 'https://sademo.online/azmal/2026/june/vkn/admin_con/services/edit/5', '2026-06-20', '12:58:19', 2, 'admin@gmail.com', 'admin'),
(478, '2401:4900:81e7:389e:33b5:3d80:8277:9f9e', 'https://sademo.online/azmal/2026/june/vkn/admin_con/services/listing', '2026-06-20', '12:58:28', 2, 'admin@gmail.com', 'admin'),
(479, '2401:4900:81e7:389e:33b5:3d80:8277:9f9e', 'https://sademo.online/azmal/2026/june/vkn/admin_con/services/edit/6', '2026-06-20', '12:58:31', 2, 'admin@gmail.com', 'admin'),
(480, '2401:4900:81e7:389e:33b5:3d80:8277:9f9e', 'https://sademo.online/azmal/2026/june/vkn/admin_con/services/listing', '2026-06-20', '12:58:38', 2, 'admin@gmail.com', 'admin'),
(481, '2401:4900:81e7:389e:33b5:3d80:8277:9f9e', 'https://sademo.online/azmal/2026/june/vkn/admin_con/services/edit/7', '2026-06-20', '12:58:40', 2, 'admin@gmail.com', 'admin'),
(482, '2401:4900:81e7:389e:33b5:3d80:8277:9f9e', 'https://sademo.online/azmal/2026/june/vkn/admin_con/services/listing', '2026-06-20', '12:58:56', 2, 'admin@gmail.com', 'admin'),
(483, '2401:4900:81e7:389e:33b5:3d80:8277:9f9e', 'https://sademo.online/azmal/2026/june/vkn/admin_con/services/edit/6', '2026-06-20', '12:59:24', 2, 'admin@gmail.com', 'admin'),
(484, '2401:4900:81e7:389e:33b5:3d80:8277:9f9e', 'https://sademo.online/azmal/2026/june/vkn/admin_con/services/listing', '2026-06-20', '12:59:33', 2, 'admin@gmail.com', 'admin'),
(485, '2401:4900:81e7:389e:33b5:3d80:8277:9f9e', 'https://sademo.online/azmal/2026/june/vkn/admin_con/services/listing', '2026-06-20', '13:04:23', 2, 'admin@gmail.com', 'admin'),
(486, '2401:4900:81e7:389e:33b5:3d80:8277:9f9e', 'https://sademo.online/azmal/2026/june/vkn/admin_con/services/listing', '2026-06-20', '13:04:30', 2, 'admin@gmail.com', 'admin'),
(487, '2401:4900:81e7:389e:33b5:3d80:8277:9f9e', 'https://sademo.online/azmal/2026/june/vkn/admin_con/services/edit/6', '2026-06-20', '13:04:35', 2, 'admin@gmail.com', 'admin'),
(488, '2401:4900:81e7:389e:33b5:3d80:8277:9f9e', 'https://sademo.online/azmal/2026/june/vkn/admin_con/services/edit/6', '2026-06-20', '13:22:15', 2, 'admin@gmail.com', 'admin'),
(489, '2401:4900:81e7:389e:33b5:3d80:8277:9f9e', 'https://sademo.online/azmal/2026/june/vkn/admin_con/services/edit/6', '2026-06-20', '13:22:27', 2, 'admin@gmail.com', 'admin'),
(490, '2401:4900:81e7:389e:33b5:3d80:8277:9f9e', 'https://sademo.online/azmal/2026/june/vkn/admin/dashboard', '2026-06-20', '13:22:30', 2, 'admin@gmail.com', 'admin'),
(491, '2401:4900:81e7:389e:33b5:3d80:8277:9f9e', 'https://sademo.online/azmal/2026/june/vkn/admin_con/site_setting/edit/1', '2026-06-20', '13:22:34', 2, 'admin@gmail.com', 'admin'),
(492, '2401:4900:81e7:389e:33b5:3d80:8277:9f9e', 'https://sademo.online/azmal/2026/june/vkn/admin_con/site_setting/edit/1', '2026-06-20', '13:22:45', 2, 'admin@gmail.com', 'admin'),
(493, '2401:4900:81e7:389e:33b5:3d80:8277:9f9e', 'https://sademo.online/azmal/2026/june/vkn/admin_con/site_setting/edit/1', '2026-06-20', '13:22:46', 2, 'admin@gmail.com', 'admin'),
(494, '2401:4900:81e7:389e:33b5:3d80:8277:9f9e', 'https://sademo.online/azmal/2026/june/vkn/admin_con/site_setting/edit/1', '2026-06-20', '13:24:59', 2, 'admin@gmail.com', 'admin'),
(495, '2401:4900:81e7:389e:33b5:3d80:8277:9f9e', 'https://sademo.online/azmal/2026/june/vkn/admin_con/site_setting/edit/1', '2026-06-20', '13:25:02', 2, 'admin@gmail.com', 'admin'),
(496, '122.162.145.71', 'https://sademo.online/azmal/2026/june/vkn/admin_con/site_setting/edit/1', '2026-06-20', '14:01:00', 3, 'azmal', 'azmal'),
(497, '119.252.211.7', 'https://sademo.online/azmal/2026/june/vkn/admin_con/site_setting/edit/1', '2026-06-20', '15:25:06', 2, 'admin@gmail.com', 'admin'),
(498, '119.252.211.7', 'https://sademo.online/azmal/2026/june/vkn/admin_con/site_setting/edit/1', '2026-06-20', '15:25:16', 2, 'admin@gmail.com', 'admin'),
(499, '119.252.211.7', 'https://sademo.online/azmal/2026/june/vkn/admin_con/services/listing', '2026-06-20', '15:25:19', 2, 'admin@gmail.com', 'admin'),
(500, '119.252.211.7', 'https://sademo.online/azmal/2026/june/vkn/admin_con/category/listing', '2026-06-20', '15:25:26', 2, 'admin@gmail.com', 'admin'),
(501, '119.252.211.7', 'https://sademo.online/azmal/2026/june/vkn/admin_con/site_setting/edit/1', '2026-06-20', '15:34:55', 2, 'admin@gmail.com', 'admin'),
(502, '119.252.211.7', 'https://sademo.online/azmal/2026/june/vkn/admin_con/site_setting/edit/1', '2026-06-20', '15:35:14', 2, 'admin@gmail.com', 'admin'),
(503, '119.252.211.7', 'https://sademo.online/azmal/2026/june/vkn/admin_con/site_setting/edit/1', '2026-06-20', '15:37:46', 2, 'admin@gmail.com', 'admin'),
(504, '119.252.211.7', 'https://sademo.online/azmal/2026/june/vkn/admin_con/site_setting/edit/1', '2026-06-20', '15:38:21', 2, 'admin@gmail.com', 'admin'),
(505, '119.252.211.7', 'https://sademo.online/azmal/2026/june/vkn/admin_con/site_setting/edit/1', '2026-06-20', '15:38:49', 2, 'admin@gmail.com', 'admin'),
(506, '2401:7400:4000:9342:602d:70f5:3650:1801', 'https://sademo.online/azmal/2026/june/vkn/admin/dashboard', '2026-06-22', '14:08:17', 2, 'admin@gmail.com', 'admin'),
(507, '2401:7400:4000:9342:602d:70f5:3650:1801', 'https://sademo.online/azmal/2026/june/vkn/admin_con/site_setting/edit/1', '2026-06-22', '14:08:26', 2, 'admin@gmail.com', 'admin'),
(508, '2401:7400:4000:9342:602d:70f5:3650:1801', 'https://sademo.online/azmal/2026/june/vkn/admin_con/site_setting/edit/1', '2026-06-22', '14:12:47', 2, 'admin@gmail.com', 'admin'),
(509, '2401:7400:4000:9342:602d:70f5:3650:1801', 'https://sademo.online/azmal/2026/june/vkn/admin_con/services/listing', '2026-06-22', '14:12:54', 2, 'admin@gmail.com', 'admin'),
(510, '2401:7400:4000:9342:602d:70f5:3650:1801', 'https://sademo.online/azmal/2026/june/vkn/admin_con/portfolio/listing', '2026-06-22', '14:13:06', 2, 'admin@gmail.com', 'admin'),
(511, '2401:7400:4000:9342:602d:70f5:3650:1801', 'https://sademo.online/azmal/2026/june/vkn/admin_con/slider/listing', '2026-06-22', '14:13:07', 2, 'admin@gmail.com', 'admin'),
(512, '2401:7400:4000:9342:602d:70f5:3650:1801', 'https://sademo.online/azmal/2026/june/vkn/admin_con/site_setting/edit/1', '2026-06-22', '14:13:09', 2, 'admin@gmail.com', 'admin'),
(513, '2401:7400:4000:9342:602d:70f5:3650:1801', 'https://sademo.online/azmal/2026/june/vkn/admin/dashboard', '2026-06-22', '14:13:12', 2, 'admin@gmail.com', 'admin'),
(514, '2401:7400:4000:9342:602d:70f5:3650:1801', 'https://sademo.online/azmal/2026/june/vkn/admin_con/site_setting/edit/1', '2026-06-22', '14:13:54', 2, 'admin@gmail.com', 'admin'),
(515, '2401:7400:4000:9342:602d:70f5:3650:1801', 'https://sademo.online/azmal/2026/june/vkn/admin_con/site_setting/edit/1', '2026-06-22', '14:14:18', 2, 'admin@gmail.com', 'admin'),
(516, '2401:7400:4000:9342:602d:70f5:3650:1801', 'https://sademo.online/azmal/2026/june/vkn/admin_con/services/listing', '2026-06-22', '14:14:41', 2, 'admin@gmail.com', 'admin'),
(517, '2401:7400:4000:9342:602d:70f5:3650:1801', 'https://sademo.online/azmal/2026/june/vkn/admin_con/site_setting/edit/1', '2026-06-22', '14:15:05', 2, 'admin@gmail.com', 'admin'),
(518, '2401:7400:4000:9342:602d:70f5:3650:1801', 'https://sademo.online/azmal/2026/june/vkn/admin_con/slider/listing', '2026-06-22', '14:15:08', 2, 'admin@gmail.com', 'admin'),
(519, '2401:7400:4000:9342:602d:70f5:3650:1801', 'https://sademo.online/azmal/2026/june/vkn/admin_con/category/listing', '2026-06-22', '14:15:11', 2, 'admin@gmail.com', 'admin'),
(520, '2401:7400:4000:9342:602d:70f5:3650:1801', 'https://sademo.online/azmal/2026/june/vkn/admin_con/services/listing', '2026-06-22', '14:15:27', 2, 'admin@gmail.com', 'admin'),
(521, '2401:7400:4000:9342:602d:70f5:3650:1801', 'https://sademo.online/azmal/2026/june/vkn/admin_con/contact/listing', '2026-06-22', '14:15:58', 2, 'admin@gmail.com', 'admin'),
(522, '2401:7400:4000:9342:602d:70f5:3650:1801', 'https://sademo.online/azmal/2026/june/vkn/admin_con/partner/listing', '2026-06-22', '14:16:02', 2, 'admin@gmail.com', 'admin'),
(523, '2401:7400:4000:9342:602d:70f5:3650:1801', 'https://sademo.online/azmal/2026/june/vkn/admin_con/testimonials/listing', '2026-06-22', '14:16:04', 2, 'admin@gmail.com', 'admin'),
(524, '2401:7400:4000:9342:602d:70f5:3650:1801', 'https://sademo.online/azmal/2026/june/vkn/admin_con/portfolio/listing', '2026-06-22', '14:16:09', 2, 'admin@gmail.com', 'admin'),
(525, '2401:7400:4000:9342:602d:70f5:3650:1801', 'https://sademo.online/azmal/2026/june/vkn/admin_con/services/listing', '2026-06-22', '14:16:12', 2, 'admin@gmail.com', 'admin'),
(526, '2401:7400:4000:9342:602d:70f5:3650:1801', 'https://sademo.online/azmal/2026/june/vkn/admin_con/services/edit/15', '2026-06-22', '14:16:27', 2, 'admin@gmail.com', 'admin'),
(527, '2401:7400:4000:9342:602d:70f5:3650:1801', 'https://sademo.online/azmal/2026/june/vkn/admin_con/services/listing', '2026-06-22', '14:17:08', 2, 'admin@gmail.com', 'admin'),
(528, '2401:7400:4000:9342:602d:70f5:3650:1801', 'https://sademo.online/azmal/2026/june/vkn/admin_con/services/edit/7', '2026-06-22', '14:17:14', 2, 'admin@gmail.com', 'admin'),
(529, '2401:7400:4000:9342:602d:70f5:3650:1801', 'https://sademo.online/azmal/2026/june/vkn/admin_con/site_setting/edit/1', '2026-06-22', '14:17:34', 2, 'admin@gmail.com', 'admin'),
(530, '2401:7400:4000:9342:602d:70f5:3650:1801', 'https://sademo.online/azmal/2026/june/vkn/admin_con/slider/listing', '2026-06-22', '14:17:45', 2, 'admin@gmail.com', 'admin'),
(531, '2401:7400:4000:9342:602d:70f5:3650:1801', 'https://sademo.online/azmal/2026/june/vkn/admin_con/services/listing', '2026-06-22', '14:17:46', 2, 'admin@gmail.com', 'admin'),
(532, '2401:7400:4000:9342:602d:70f5:3650:1801', 'https://sademo.online/azmal/2026/june/vkn/admin_con/services/edit/5', '2026-06-22', '14:20:09', 2, 'admin@gmail.com', 'admin'),
(533, '2401:7400:4000:9342:602d:70f5:3650:1801', 'https://sademo.online/azmal/2026/june/vkn/admin_con/site_setting/edit/1', '2026-06-22', '14:33:16', 2, 'admin@gmail.com', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `id` int(11) NOT NULL,
  `image` text NOT NULL,
  `name` text NOT NULL,
  `slug` text NOT NULL,
  `content` longblob NOT NULL,
  `status` int(11) NOT NULL,
  `addeddate` date NOT NULL,
  `modifieddate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`id`, `image`, `name`, `slug`, `content`, `status`, `addeddate`, `modifieddate`) VALUES
(1, '1758712940.webp', 'tewt', 'tewt', 0x3c703e726561723c2f703e, 1, '2025-09-24', '2025-09-24 16:52:24');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `image` text NOT NULL,
  `name` text NOT NULL,
  `slug` text NOT NULL,
  `content` text NOT NULL,
  `banner` text NOT NULL,
  `status` int(11) NOT NULL,
  `addeddate` datetime NOT NULL,
  `modifieddate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `image`, `name`, `slug`, `content`, `banner`, `status`, `addeddate`, `modifieddate`) VALUES
(1, '1781851516.png', 'Technical Services', 'technical-services', 'Reliable maintenance solutions including HVAC, electromechanical works, plumbing, CCTV installation, civil works, painting, tiling, and carpentry services across Dubai.', '94751771.jpg', 1, '2026-06-18 21:10:09', '2026-06-20 11:13:13'),
(2, '1781851503.jpg', 'Security Services', 'security-services', 'Professional security guards, VIP protection, event security, and surveillance solutions backed by experienced management and SIRA licensed personnel.\r\n', '765617436.07', 1, '2026-06-18 21:11:03', '2026-06-19 12:15:03'),
(3, '1781851487.jpg', 'Cleaning Services', 'cleaning-services', 'Premium residential and commercial cleaning services focused on creating a safe, hygienic, and healthy environment with exceptional quality standards.', '114553170.jpg', 1, '2026-06-18 21:11:15', '2026-06-20 11:12:48');

-- --------------------------------------------------------

--
-- Table structure for table `city`
--

CREATE TABLE `city` (
  `id` int(11) NOT NULL,
  `state_id` int(11) NOT NULL,
  `name` text NOT NULL,
  `slug` text NOT NULL,
  `status` int(11) NOT NULL,
  `addeddate` datetime NOT NULL,
  `modifieddate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;

--
-- Dumping data for table `city`
--

INSERT INTO `city` (`id`, `state_id`, `name`, `slug`, `status`, `addeddate`, `modifieddate`) VALUES
(1, 32, 'North and Middle Andaman', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, 32, 'South Andaman', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, 32, 'Nicobar', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(4, 1, 'Adilabad', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(5, 1, 'Anantapur', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(6, 1, 'Chittoor', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(7, 1, 'East Godavari', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(8, 1, 'Guntur', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(9, 1, 'Hyderabad', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(10, 1, 'Kadapa', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(11, 1, 'Karimnagar', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(12, 1, 'Khammam', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(13, 1, 'Krishna', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(14, 1, 'Kurnool', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(15, 1, 'Mahbubnagar', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(16, 1, 'Medak', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(17, 1, 'Nalgonda', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(18, 1, 'Nellore', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(19, 1, 'Nizamabad', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(20, 1, 'Prakasam', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(21, 1, 'Rangareddi', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(22, 1, 'Srikakulam', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(23, 1, 'Vishakhapatnam', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(24, 1, 'Vizianagaram', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(25, 1, 'Warangal', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(26, 1, 'West Godavari', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(27, 3, 'Anjaw', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(28, 3, 'Changlang', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(29, 3, 'East Kameng', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(30, 3, 'Lohit', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(31, 3, 'Lower Subansiri', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(32, 3, 'Papum Pare', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(33, 3, 'Tirap', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(34, 3, 'Dibang Valley', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(35, 3, 'Upper Subansiri', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(36, 3, 'West Kameng', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(37, 2, 'Barpeta', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(38, 2, 'Bongaigaon', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(39, 2, 'Cachar', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(40, 2, 'Darrang', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(41, 2, 'Dhemaji', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(42, 2, 'Dhubri', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(43, 2, 'Dibrugarh', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(44, 2, 'Goalpara', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(45, 2, 'Golaghat', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(46, 2, 'Hailakandi', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(47, 2, 'Jorhat', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(48, 2, 'Karbi Anglong', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(49, 2, 'Karimganj', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(50, 2, 'Kokrajhar', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(51, 2, 'Lakhimpur', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(52, 2, 'Marigaon', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(53, 2, 'Nagaon', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(54, 2, 'Nalbari', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(55, 2, 'North Cachar Hills', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(56, 2, 'Sibsagar', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(57, 2, 'Sonitpur', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(58, 2, 'Tinsukia', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(59, 4, 'Araria', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(60, 4, 'Aurangabad', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(61, 4, 'Banka', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(62, 4, 'Begusarai', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(63, 4, 'Bhagalpur', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(64, 4, 'Bhojpur', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(65, 4, 'Buxar', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(66, 4, 'Darbhanga', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(67, 4, 'Purba Champaran', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(68, 4, 'Gaya', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(69, 4, 'Gopalganj', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(70, 4, 'Jamui', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(71, 4, 'Jehanabad', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(72, 4, 'Khagaria', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(73, 4, 'Kishanganj', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(74, 4, 'Kaimur', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(75, 4, 'Katihar', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(76, 4, 'Lakhisarai', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(77, 4, 'Madhubani', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(78, 4, 'Munger', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(79, 4, 'Madhepura', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(80, 4, 'Muzaffarpur', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(81, 4, 'Nalanda', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(82, 4, 'Nawada', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(83, 4, 'Patna', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(84, 4, 'Purnia', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(85, 4, 'Rohtas', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(86, 4, 'Saharsa', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(87, 4, 'Samastipur', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(88, 4, 'Sheohar', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(89, 4, 'Sheikhpura', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(90, 4, 'Saran', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(91, 4, 'Sitamarhi', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(92, 4, 'Supaul', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(93, 4, 'Siwan', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(94, 4, 'Vaishali', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(95, 4, 'Pashchim Champaran', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(96, 36, 'Bastar', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(97, 36, 'Bilaspur', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(98, 36, 'Dantewada', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(99, 36, 'Dhamtari', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(100, 36, 'Durg', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(101, 36, 'Jashpur', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(102, 36, 'Janjgir-Champa', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(103, 36, 'Korba', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(104, 36, 'Koriya', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(105, 36, 'Kanker', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(106, 36, 'Kawardha', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(107, 36, 'Mahasamund', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(108, 36, 'Raigarh', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(109, 36, 'Rajnandgaon', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(110, 36, 'Raipur', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(111, 36, 'Surguja', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(112, 29, 'Diu', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(113, 29, 'Daman', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(114, 25, 'Central Delhi', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(115, 25, 'East Delhi', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(116, 25, 'New Delhi', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(117, 25, 'North Delhi', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(118, 25, 'North East Delhi', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(119, 25, 'North West Delhi', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(120, 25, 'South Delhi', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(121, 25, 'South West Delhi', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(122, 25, 'West Delhi', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(123, 26, 'North Goa', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(124, 26, 'South Goa', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(125, 5, 'Ahmedabad', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(126, 5, 'Amreli District', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(127, 5, 'Anand', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(128, 5, 'Banaskantha', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(129, 5, 'Bharuch', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(130, 5, 'Bhavnagar', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(131, 5, 'Dahod', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(132, 5, 'The Dangs', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(133, 5, 'Gandhinagar', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(134, 5, 'Jamnagar', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(135, 5, 'Junagadh', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(136, 5, 'Kutch', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(137, 5, 'Kheda', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(138, 5, 'Mehsana', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(139, 5, 'Narmada', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(140, 5, 'Navsari', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(141, 5, 'Patan', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(142, 5, 'Panchmahal', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(143, 5, 'Porbandar', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(144, 5, 'Rajkot', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(145, 5, 'Sabarkantha', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(146, 5, 'Surendranagar', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(147, 5, 'Surat', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(148, 5, 'Vadodara', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(149, 5, 'Valsad', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(150, 6, 'Ambala', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(151, 6, 'Bhiwani', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(152, 6, 'Faridabad', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(153, 6, 'Fatehabad', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(154, 6, 'Gurgaon', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(155, 6, 'Hissar', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(156, 6, 'Jhajjar', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(157, 6, 'Jind', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(158, 6, 'Karnal', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(159, 6, 'Kaithal', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(160, 6, 'Kurukshetra', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(161, 6, 'Mahendragarh', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(162, 6, 'Mewat', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(163, 6, 'Panchkula', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(164, 6, 'Panipat', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(165, 6, 'Rewari', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(166, 6, 'Rohtak', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(167, 6, 'Sirsa', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(168, 6, 'Sonepat', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(169, 6, 'Yamuna Nagar', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(170, 6, 'Palwal', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(171, 7, 'Bilaspur', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(172, 7, 'Chamba', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(173, 7, 'Hamirpur', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(174, 7, 'Kangra', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(175, 7, 'Kinnaur', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(176, 7, 'Kulu', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(177, 7, 'Lahaul and Spiti', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(178, 7, 'Mandi', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(179, 7, 'Shimla', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(180, 7, 'Sirmaur', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(181, 7, 'Solan', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(182, 7, 'Una', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(183, 8, 'Anantnag', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(184, 8, 'Badgam', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(185, 8, 'Bandipore', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(186, 8, 'Baramula', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(187, 8, 'Doda', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(188, 8, 'Jammu', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(189, 8, 'Kargil', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(190, 8, 'Kathua', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(191, 8, 'Kupwara', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(192, 8, 'Leh', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(193, 8, 'Poonch', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(194, 8, 'Pulwama', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(195, 8, 'Rajauri', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(196, 8, 'Srinagar', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(197, 8, 'Samba', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(198, 8, 'Udhampur', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(199, 34, 'Bokaro', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(200, 34, 'Chatra', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(201, 34, 'Deoghar', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(202, 34, 'Dhanbad', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(203, 34, 'Dumka', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(204, 34, 'Purba Singhbhum', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(205, 34, 'Garhwa', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(206, 34, 'Giridih', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(207, 34, 'Godda', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(208, 34, 'Gumla', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(209, 34, 'Hazaribagh', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(210, 34, 'Koderma', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(211, 34, 'Lohardaga', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(212, 34, 'Pakur', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(213, 34, 'Palamu', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(214, 34, 'Ranchi', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(215, 34, 'Sahibganj', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(216, 34, 'Seraikela and Kharsawan', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(217, 34, 'Pashchim Singhbhum', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(218, 34, 'Ramgarh', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(219, 9, 'Bidar', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(220, 9, 'Belgaum', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(221, 9, 'Bijapur', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(222, 9, 'Bagalkot', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(223, 9, 'Bellary', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(224, 9, 'Bangalore Rural District', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(225, 9, 'Bangalore Urban District', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(226, 9, 'Chamarajnagar', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(227, 9, 'Chikmagalur', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(228, 9, 'Chitradurga', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(229, 9, 'Davanagere', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(230, 9, 'Dharwad', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(231, 9, 'Dakshina Kannada', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(232, 9, 'Gadag', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(233, 9, 'Gulbarga', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(234, 9, 'Hassan', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(235, 9, 'Haveri District', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(236, 9, 'Kodagu', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(237, 9, 'Kolar', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(238, 9, 'Koppal', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(239, 9, 'Mandya', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(240, 9, 'Mysore', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(241, 9, 'Raichur', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(242, 9, 'Shimoga', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(243, 9, 'Tumkur', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(244, 9, 'Udupi', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(245, 9, 'Uttara Kannada', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(246, 9, 'Ramanagara', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(247, 9, 'Chikballapur', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(248, 9, 'Yadagiri', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(249, 10, 'Alappuzha', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(250, 10, 'Ernakulam', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(251, 10, 'Idukki', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(252, 10, 'Kollam', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(253, 10, 'Kannur', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(254, 10, 'Kasaragod', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(255, 10, 'Kottayam', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(256, 10, 'Kozhikode', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(257, 10, 'Malappuram', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(258, 10, 'Palakkad', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(259, 10, 'Pathanamthitta', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(260, 10, 'Thrissur', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(261, 10, 'Thiruvananthapuram', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(262, 10, 'Wayanad', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(263, 11, 'Alirajpur', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(264, 11, 'Anuppur', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(265, 11, 'Ashok Nagar', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(266, 11, 'Balaghat', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(267, 11, 'Barwani', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(268, 11, 'Betul', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(269, 11, 'Bhind', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(270, 11, 'Bhopal', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(271, 11, 'Burhanpur', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(272, 11, 'Chhatarpur', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(273, 11, 'Chhindwara', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(274, 11, 'Damoh', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(275, 11, 'Datia', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(276, 11, 'Dewas', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(277, 11, 'Dhar', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(278, 11, 'Dindori', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(279, 11, 'Guna', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(280, 11, 'Gwalior', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(281, 11, 'Harda', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(282, 11, 'Hoshangabad', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(283, 11, 'Indore', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(284, 11, 'Jabalpur', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(285, 11, 'Jhabua', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(286, 11, 'Katni', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(287, 11, 'Khandwa', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(288, 11, 'Khargone', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(289, 11, 'Mandla', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(290, 11, 'Mandsaur', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(291, 11, 'Morena', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(292, 11, 'Narsinghpur', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(293, 11, 'Neemuch', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(294, 11, 'Panna', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(295, 11, 'Rewa', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(296, 11, 'Rajgarh', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(297, 11, 'Ratlam', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(298, 11, 'Raisen', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(299, 11, 'Sagar', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(300, 11, 'Satna', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(301, 11, 'Sehore', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(302, 11, 'Seoni', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(303, 11, 'Shahdol', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(304, 11, 'Shajapur', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(305, 11, 'Sheopur', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(306, 11, 'Shivpuri', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(307, 11, 'Sidhi', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(308, 11, 'Singrauli', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(309, 11, 'Tikamgarh', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(310, 11, 'Ujjain', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(311, 11, 'Umaria', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(312, 11, 'Vidisha', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(313, 12, 'Ahmednagar', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(314, 12, 'Akola', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(315, 12, 'Amrawati', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(316, 12, 'Aurangabad', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(317, 12, 'Bhandara', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(318, 12, 'Beed', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(319, 12, 'Buldhana', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(320, 12, 'Chandrapur', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(321, 12, 'Dhule', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(322, 12, 'Gadchiroli', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(323, 12, 'Gondiya', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(324, 12, 'Hingoli', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(325, 12, 'Jalgaon', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(326, 12, 'Jalna', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(327, 12, 'Kolhapur', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(328, 12, 'Latur', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(329, 12, 'Mumbai City', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(330, 12, 'Mumbai suburban', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(331, 12, 'Nandurbar', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(332, 12, 'Nanded', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(333, 12, 'Nagpur', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(334, 12, 'Nashik', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(335, 12, 'Osmanabad', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(336, 12, 'Parbhani', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(337, 12, 'Pune', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(338, 12, 'Raigad', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(339, 12, 'Ratnagiri', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(340, 12, 'Sindhudurg', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(341, 12, 'Sangli', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(342, 12, 'Solapur', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(343, 12, 'Satara', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(344, 12, 'Thane', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(345, 12, 'Wardha', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(346, 12, 'Washim', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(347, 12, 'Yavatmal', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(348, 13, 'Bishnupur', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(349, 13, 'Churachandpur', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(350, 13, 'Chandel', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(351, 13, 'Imphal East', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(352, 13, 'Senapati', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(353, 13, 'Tamenglong', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(354, 13, 'Thoubal', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(355, 13, 'Ukhrul', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(356, 13, 'Imphal West', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(357, 14, 'East Garo Hills', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(358, 14, 'East Khasi Hills', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(359, 14, 'Jaintia Hills', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(360, 14, 'Ri-Bhoi', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(361, 14, 'South Garo Hills', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(362, 14, 'West Garo Hills', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(363, 14, 'West Khasi Hills', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(364, 15, 'Aizawl', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(365, 15, 'Champhai', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(366, 15, 'Kolasib', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(367, 15, 'Lawngtlai', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(368, 15, 'Lunglei', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(369, 15, 'Mamit', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(370, 15, 'Saiha', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(371, 15, 'Serchhip', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(372, 16, 'Dimapur', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(373, 16, 'Kohima', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(374, 16, 'Mokokchung', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(375, 16, 'Mon', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(376, 16, 'Phek', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(377, 16, 'Tuensang', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(378, 16, 'Wokha', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(379, 16, 'Zunheboto', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(380, 17, 'Angul', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(381, 17, 'Boudh', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(382, 17, 'Bhadrak', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(383, 17, 'Bolangir', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(384, 17, 'Bargarh', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(385, 17, 'Baleswar', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(386, 17, 'Cuttack', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(387, 17, 'Debagarh', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(388, 17, 'Dhenkanal', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(389, 17, 'Ganjam', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(390, 17, 'Gajapati', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(391, 17, 'Jharsuguda', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(392, 17, 'Jajapur', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(393, 17, 'Jagatsinghpur', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(394, 17, 'Khordha', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(395, 17, 'Kendujhar', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(396, 17, 'Kalahandi', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(397, 17, 'Kandhamal', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(398, 17, 'Koraput', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(399, 17, 'Kendrapara', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(400, 17, 'Malkangiri', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(401, 17, 'Mayurbhanj', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(402, 17, 'Nabarangpur', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(403, 17, 'Nuapada', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(404, 17, 'Nayagarh', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(405, 17, 'Puri', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(406, 17, 'Rayagada', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(407, 17, 'Sambalpur', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(408, 17, 'Subarnapur', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(409, 17, 'Sundargarh', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(410, 27, 'Karaikal', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(411, 27, 'Mahe', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(412, 27, 'Puducherry', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(413, 27, 'Yanam', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(414, 18, 'Amritsar', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(415, 18, 'Bathinda', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(416, 18, 'Firozpur', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(417, 18, 'Faridkot', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(418, 18, 'Fatehgarh Sahib', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(419, 18, 'Gurdaspur', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(420, 18, 'Hoshiarpur', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(421, 18, 'Jalandhar', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(422, 18, 'Kapurthala', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(423, 18, 'Ludhiana', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(424, 18, 'Mansa', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(425, 18, 'Moga', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(426, 18, 'Mukatsar', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(427, 18, 'Nawan Shehar', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(428, 18, 'Patiala', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(429, 18, 'Rupnagar', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(430, 18, 'Sangrur', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(431, 19, 'Ajmer', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(432, 19, 'Alwar', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(433, 19, 'Bikaner', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(434, 19, 'Barmer', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(435, 19, 'Banswara', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(436, 19, 'Bharatpur', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(437, 19, 'Baran', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(438, 19, 'Bundi', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(439, 19, 'Bhilwara', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(440, 19, 'Churu', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(441, 19, 'Chittorgarh', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(442, 19, 'Dausa', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(443, 19, 'Dholpur', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(444, 19, 'Dungapur', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(445, 19, 'Ganganagar', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(446, 19, 'Hanumangarh', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(447, 19, 'Juhnjhunun', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(448, 19, 'Jalore', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(449, 19, 'Jodhpur', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(450, 19, 'Jaipur', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(451, 19, 'Jaisalmer', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(452, 19, 'Jhalawar', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(453, 19, 'Karauli', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(454, 19, 'Kota', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(455, 19, 'Nagaur', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(456, 19, 'Pali', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(457, 19, 'Pratapgarh', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(458, 19, 'Rajsamand', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(459, 19, 'Sikar', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(460, 19, 'Sawai Madhopur', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(461, 19, 'Sirohi', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(462, 19, 'Tonk', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(463, 19, 'Udaipur', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(464, 20, 'East Sikkim', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(465, 20, 'North Sikkim', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(466, 20, 'South Sikkim', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(467, 20, 'West Sikkim', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(468, 21, 'Ariyalur', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(469, 21, 'Chennai', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(470, 21, 'Coimbatore', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(471, 21, 'Cuddalore', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(472, 21, 'Dharmapuri', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(473, 21, 'Dindigul', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(474, 21, 'Erode', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(475, 21, 'Kanchipuram', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(476, 21, 'Kanyakumari', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(477, 21, 'Karur', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(478, 21, 'Madurai', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(479, 21, 'Nagapattinam', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(480, 21, 'The Nilgiris', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(481, 21, 'Namakkal', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(482, 21, 'Perambalur', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(483, 21, 'Pudukkottai', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(484, 21, 'Ramanathapuram', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(485, 21, 'Salem', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(486, 21, 'Sivagangai', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(487, 21, 'Tiruppur', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(488, 21, 'Tiruchirappalli', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(489, 21, 'Theni', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(490, 21, 'Tirunelveli', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(491, 21, 'Thanjavur', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(492, 21, 'Thoothukudi', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(493, 21, 'Thiruvallur', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(494, 21, 'Thiruvarur', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(495, 21, 'Tiruvannamalai', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(496, 21, 'Vellore', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(497, 21, 'Villupuram', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(498, 22, 'Dhalai', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(499, 22, 'North Tripura', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(500, 22, 'South Tripura', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(501, 22, 'West Tripura', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(502, 33, 'Almora', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(503, 33, 'Bageshwar', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(504, 33, 'Chamoli', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(505, 33, 'Champawat', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(506, 33, 'Dehradun', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(507, 33, 'Haridwar', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(508, 33, 'Nainital', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(509, 33, 'Pauri Garhwal', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(510, 33, 'Pithoragharh', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(511, 33, 'Rudraprayag', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(512, 33, 'Tehri Garhwal', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(513, 33, 'Udham Singh Nagar', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(514, 33, 'Uttarkashi', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(515, 23, 'Agra', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(516, 23, 'Allahabad', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(517, 23, 'Aligarh', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(518, 23, 'Ambedkar Nagar', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(519, 23, 'Auraiya', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(520, 23, 'Azamgarh', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(521, 23, 'Barabanki', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(522, 23, 'Badaun', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(523, 23, 'Bagpat', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(524, 23, 'Bahraich', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(525, 23, 'Bijnor', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(526, 23, 'Ballia', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(527, 23, 'Banda', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(528, 23, 'Balrampur', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(529, 23, 'Bareilly', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(530, 23, 'Basti', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(531, 23, 'Bulandshahr', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(532, 23, 'Chandauli', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(533, 23, 'Chitrakoot', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(534, 23, 'Deoria', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(535, 23, 'Etah', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(536, 23, 'Kanshiram Nagar', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(537, 23, 'Etawah', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(538, 23, 'Firozabad', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(539, 23, 'Farrukhabad', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(540, 23, 'Fatehpur', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(541, 23, 'Faizabad', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(542, 23, 'Gautam Buddha Nagar', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(543, 23, 'Gonda', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(544, 23, 'Ghazipur', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(545, 23, 'Gorkakhpur', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(546, 23, 'Ghaziabad', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(547, 23, 'Hamirpur', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(548, 23, 'Hardoi', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(549, 23, 'Mahamaya Nagar', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(550, 23, 'Jhansi', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(551, 23, 'Jalaun', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(552, 23, 'Jyotiba Phule Nagar', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(553, 23, 'Jaunpur District', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(554, 23, 'Kanpur Dehat', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(555, 23, 'Kannauj', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(556, 23, 'Kanpur Nagar', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(557, 23, 'Kaushambi', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(558, 23, 'Kushinagar', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(559, 23, 'Lalitpur', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(560, 23, 'Lakhimpur Kheri', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(561, 23, 'Lucknow', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(562, 23, 'Mau', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(563, 23, 'Meerut', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(564, 23, 'Maharajganj', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(565, 23, 'Mahoba', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(566, 23, 'Mirzapur', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(567, 23, 'Moradabad', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(568, 23, 'Mainpuri', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(569, 23, 'Mathura', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(570, 23, 'Muzaffarnagar', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(571, 23, 'Pilibhit', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(572, 23, 'Pratapgarh', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(573, 23, 'Rampur', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(574, 23, 'Rae Bareli', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(575, 23, 'Saharanpur', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(576, 23, 'Sitapur', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(577, 23, 'Shahjahanpur', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(578, 23, 'Sant Kabir Nagar', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(579, 23, 'Siddharthnagar', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(580, 23, 'Sonbhadra', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(581, 23, 'Sant Ravidas Nagar', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(582, 23, 'Sultanpur', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(583, 23, 'Shravasti', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(584, 23, 'Unnao', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(585, 23, 'Varanasi', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(586, 24, 'Birbhum', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(587, 24, 'Bankura', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(588, 24, 'Bardhaman', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(589, 24, 'Darjeeling', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(590, 24, 'Dakshin Dinajpur', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(591, 24, 'Hooghly', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(592, 24, 'Howrah', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(593, 24, 'Jalpaiguri', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(594, 24, 'Cooch Behar', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(595, 24, 'Kolkata', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(596, 24, 'Malda', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(597, 24, 'Midnapore', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(598, 24, 'Murshidabad', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(599, 24, 'Nadia', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(600, 24, 'North 24 Parganas', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(601, 24, 'South 24 Parganas', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(602, 24, 'Purulia', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(603, 24, 'Uttar Dinajpur', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `email` text NOT NULL,
  `mobile` text NOT NULL,
  `subject` text DEFAULT NULL,
  `message` text NOT NULL,
  `addeddate` datetime NOT NULL,
  `mark_as_read` int(11) NOT NULL,
  `page_url` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `content`
--

CREATE TABLE `content` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `content` longblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `content`
--

INSERT INTO `content` (`id`, `name`, `content`) VALUES
(1, 'About Us', ''),
(2, 'Privacy Policy', ''),
(3, 'Terms & Conditions', '');

-- --------------------------------------------------------

--
-- Table structure for table `country`
--

CREATE TABLE `country` (
  `id` int(11) NOT NULL,
  `iso` char(2) NOT NULL,
  `name` varchar(80) NOT NULL,
  `nicename` varchar(80) NOT NULL,
  `iso3` char(3) DEFAULT NULL,
  `numcode` smallint(6) DEFAULT NULL,
  `phonecode` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `country`
--

INSERT INTO `country` (`id`, `iso`, `name`, `nicename`, `iso3`, `numcode`, `phonecode`) VALUES
(1, 'AF', 'AFGHANISTAN', 'Afghanistan', 'AFG', 4, 93),
(2, 'AL', 'ALBANIA', 'Albania', 'ALB', 8, 355),
(3, 'DZ', 'ALGERIA', 'Algeria', 'DZA', 12, 213),
(4, 'AS', 'AMERICAN SAMOA', 'American Samoa', 'ASM', 16, 1684),
(5, 'AD', 'ANDORRA', 'Andorra', 'AND', 20, 376),
(6, 'AO', 'ANGOLA', 'Angola', 'AGO', 24, 244),
(7, 'AI', 'ANGUILLA', 'Anguilla', 'AIA', 660, 1264),
(8, 'AQ', 'ANTARCTICA', 'Antarctica', NULL, NULL, 0),
(9, 'AG', 'ANTIGUA AND BARBUDA', 'Antigua and Barbuda', 'ATG', 28, 1268),
(10, 'AR', 'ARGENTINA', 'Argentina', 'ARG', 32, 54),
(11, 'AM', 'ARMENIA', 'Armenia', 'ARM', 51, 374),
(12, 'AW', 'ARUBA', 'Aruba', 'ABW', 533, 297),
(13, 'AU', 'AUSTRALIA', 'Australia', 'AUS', 36, 61),
(14, 'AT', 'AUSTRIA', 'Austria', 'AUT', 40, 43),
(15, 'AZ', 'AZERBAIJAN', 'Azerbaijan', 'AZE', 31, 994),
(16, 'BS', 'BAHAMAS', 'Bahamas', 'BHS', 44, 1242),
(17, 'BH', 'BAHRAIN', 'Bahrain', 'BHR', 48, 973),
(18, 'BD', 'BANGLADESH', 'Bangladesh', 'BGD', 50, 880),
(19, 'BB', 'BARBADOS', 'Barbados', 'BRB', 52, 1246),
(20, 'BY', 'BELARUS', 'Belarus', 'BLR', 112, 375),
(21, 'BE', 'BELGIUM', 'Belgium', 'BEL', 56, 32),
(22, 'BZ', 'BELIZE', 'Belize', 'BLZ', 84, 501),
(23, 'BJ', 'BENIN', 'Benin', 'BEN', 204, 229),
(24, 'BM', 'BERMUDA', 'Bermuda', 'BMU', 60, 1441),
(25, 'BT', 'BHUTAN', 'Bhutan', 'BTN', 64, 975),
(26, 'BO', 'BOLIVIA', 'Bolivia', 'BOL', 68, 591),
(27, 'BA', 'BOSNIA AND HERZEGOVINA', 'Bosnia and Herzegovina', 'BIH', 70, 387),
(28, 'BW', 'BOTSWANA', 'Botswana', 'BWA', 72, 267),
(29, 'BV', 'BOUVET ISLAND', 'Bouvet Island', NULL, NULL, 0),
(30, 'BR', 'BRAZIL', 'Brazil', 'BRA', 76, 55),
(31, 'IO', 'BRITISH INDIAN OCEAN TERRITORY', 'British Indian Ocean Territory', NULL, NULL, 246),
(32, 'BN', 'BRUNEI DARUSSALAM', 'Brunei Darussalam', 'BRN', 96, 673),
(33, 'BG', 'BULGARIA', 'Bulgaria', 'BGR', 100, 359),
(34, 'BF', 'BURKINA FASO', 'Burkina Faso', 'BFA', 854, 226),
(35, 'BI', 'BURUNDI', 'Burundi', 'BDI', 108, 257),
(36, 'KH', 'CAMBODIA', 'Cambodia', 'KHM', 116, 855),
(37, 'CM', 'CAMEROON', 'Cameroon', 'CMR', 120, 237),
(38, 'CA', 'CANADA', 'Canada', 'CAN', 124, 1),
(39, 'CV', 'CAPE VERDE', 'Cape Verde', 'CPV', 132, 238),
(40, 'KY', 'CAYMAN ISLANDS', 'Cayman Islands', 'CYM', 136, 1345),
(41, 'CF', 'CENTRAL AFRICAN REPUBLIC', 'Central African Republic', 'CAF', 140, 236),
(42, 'TD', 'CHAD', 'Chad', 'TCD', 148, 235),
(43, 'CL', 'CHILE', 'Chile', 'CHL', 152, 56),
(44, 'CN', 'CHINA', 'China', 'CHN', 156, 86),
(45, 'CX', 'CHRISTMAS ISLAND', 'Christmas Island', NULL, NULL, 61),
(46, 'CC', 'COCOS (KEELING) ISLANDS', 'Cocos (Keeling) Islands', NULL, NULL, 672),
(47, 'CO', 'COLOMBIA', 'Colombia', 'COL', 170, 57),
(48, 'KM', 'COMOROS', 'Comoros', 'COM', 174, 269),
(49, 'CG', 'CONGO', 'Congo', 'COG', 178, 242),
(50, 'CD', 'CONGO, THE DEMOCRATIC REPUBLIC OF THE', 'Congo, the Democratic Republic of the', 'COD', 180, 242),
(51, 'CK', 'COOK ISLANDS', 'Cook Islands', 'COK', 184, 682),
(52, 'CR', 'COSTA RICA', 'Costa Rica', 'CRI', 188, 506),
(53, 'CI', 'COTE D\'IVOIRE', 'Cote D\'Ivoire', 'CIV', 384, 225),
(54, 'HR', 'CROATIA', 'Croatia', 'HRV', 191, 385),
(55, 'CU', 'CUBA', 'Cuba', 'CUB', 192, 53),
(56, 'CY', 'CYPRUS', 'Cyprus', 'CYP', 196, 357),
(57, 'CZ', 'CZECH REPUBLIC', 'Czech Republic', 'CZE', 203, 420),
(58, 'DK', 'DENMARK', 'Denmark', 'DNK', 208, 45),
(59, 'DJ', 'DJIBOUTI', 'Djibouti', 'DJI', 262, 253),
(60, 'DM', 'DOMINICA', 'Dominica', 'DMA', 212, 1767),
(61, 'DO', 'DOMINICAN REPUBLIC', 'Dominican Republic', 'DOM', 214, 1809),
(62, 'EC', 'ECUADOR', 'Ecuador', 'ECU', 218, 593),
(63, 'EG', 'EGYPT', 'Egypt', 'EGY', 818, 20),
(64, 'SV', 'EL SALVADOR', 'El Salvador', 'SLV', 222, 503),
(65, 'GQ', 'EQUATORIAL GUINEA', 'Equatorial Guinea', 'GNQ', 226, 240),
(66, 'ER', 'ERITREA', 'Eritrea', 'ERI', 232, 291),
(67, 'EE', 'ESTONIA', 'Estonia', 'EST', 233, 372),
(68, 'ET', 'ETHIOPIA', 'Ethiopia', 'ETH', 231, 251),
(69, 'FK', 'FALKLAND ISLANDS (MALVINAS)', 'Falkland Islands (Malvinas)', 'FLK', 238, 500),
(70, 'FO', 'FAROE ISLANDS', 'Faroe Islands', 'FRO', 234, 298),
(71, 'FJ', 'FIJI', 'Fiji', 'FJI', 242, 679),
(72, 'FI', 'FINLAND', 'Finland', 'FIN', 246, 358),
(73, 'FR', 'FRANCE', 'France', 'FRA', 250, 33),
(74, 'GF', 'FRENCH GUIANA', 'French Guiana', 'GUF', 254, 594),
(75, 'PF', 'FRENCH POLYNESIA', 'French Polynesia', 'PYF', 258, 689),
(76, 'TF', 'FRENCH SOUTHERN TERRITORIES', 'French Southern Territories', NULL, NULL, 0),
(77, 'GA', 'GABON', 'Gabon', 'GAB', 266, 241),
(78, 'GM', 'GAMBIA', 'Gambia', 'GMB', 270, 220),
(79, 'GE', 'GEORGIA', 'Georgia', 'GEO', 268, 995),
(80, 'DE', 'GERMANY', 'Germany', 'DEU', 276, 49),
(81, 'GH', 'GHANA', 'Ghana', 'GHA', 288, 233),
(82, 'GI', 'GIBRALTAR', 'Gibraltar', 'GIB', 292, 350),
(83, 'GR', 'GREECE', 'Greece', 'GRC', 300, 30),
(84, 'GL', 'GREENLAND', 'Greenland', 'GRL', 304, 299),
(85, 'GD', 'GRENADA', 'Grenada', 'GRD', 308, 1473),
(86, 'GP', 'GUADELOUPE', 'Guadeloupe', 'GLP', 312, 590),
(87, 'GU', 'GUAM', 'Guam', 'GUM', 316, 1671),
(88, 'GT', 'GUATEMALA', 'Guatemala', 'GTM', 320, 502),
(89, 'GN', 'GUINEA', 'Guinea', 'GIN', 324, 224),
(90, 'GW', 'GUINEA-BISSAU', 'Guinea-Bissau', 'GNB', 624, 245),
(91, 'GY', 'GUYANA', 'Guyana', 'GUY', 328, 592),
(92, 'HT', 'HAITI', 'Haiti', 'HTI', 332, 509),
(93, 'HM', 'HEARD ISLAND AND MCDONALD ISLANDS', 'Heard Island and Mcdonald Islands', NULL, NULL, 0),
(94, 'VA', 'HOLY SEE (VATICAN CITY STATE)', 'Holy See (Vatican City State)', 'VAT', 336, 39),
(95, 'HN', 'HONDURAS', 'Honduras', 'HND', 340, 504),
(96, 'HK', 'HONG KONG', 'Hong Kong', 'HKG', 344, 852),
(97, 'HU', 'HUNGARY', 'Hungary', 'HUN', 348, 36),
(98, 'IS', 'ICELAND', 'Iceland', 'ISL', 352, 354),
(99, 'IN', 'INDIA', 'India', 'IND', 356, 91),
(100, 'ID', 'INDONESIA', 'Indonesia', 'IDN', 360, 62),
(101, 'IR', 'IRAN, ISLAMIC REPUBLIC OF', 'Iran, Islamic Republic of', 'IRN', 364, 98),
(102, 'IQ', 'IRAQ', 'Iraq', 'IRQ', 368, 964),
(103, 'IE', 'IRELAND', 'Ireland', 'IRL', 372, 353),
(104, 'IL', 'ISRAEL', 'Israel', 'ISR', 376, 972),
(105, 'IT', 'ITALY', 'Italy', 'ITA', 380, 39),
(106, 'JM', 'JAMAICA', 'Jamaica', 'JAM', 388, 1876),
(107, 'JP', 'JAPAN', 'Japan', 'JPN', 392, 81),
(108, 'JO', 'JORDAN', 'Jordan', 'JOR', 400, 962),
(109, 'KZ', 'KAZAKHSTAN', 'Kazakhstan', 'KAZ', 398, 7),
(110, 'KE', 'KENYA', 'Kenya', 'KEN', 404, 254),
(111, 'KI', 'KIRIBATI', 'Kiribati', 'KIR', 296, 686),
(112, 'KP', 'KOREA, DEMOCRATIC PEOPLE\'S REPUBLIC OF', 'Korea, Democratic People\'s Republic of', 'PRK', 408, 850),
(113, 'KR', 'KOREA, REPUBLIC OF', 'Korea, Republic of', 'KOR', 410, 82),
(114, 'KW', 'KUWAIT', 'Kuwait', 'KWT', 414, 965),
(115, 'KG', 'KYRGYZSTAN', 'Kyrgyzstan', 'KGZ', 417, 996),
(116, 'LA', 'LAO PEOPLE\'S DEMOCRATIC REPUBLIC', 'Lao People\'s Democratic Republic', 'LAO', 418, 856),
(117, 'LV', 'LATVIA', 'Latvia', 'LVA', 428, 371),
(118, 'LB', 'LEBANON', 'Lebanon', 'LBN', 422, 961),
(119, 'LS', 'LESOTHO', 'Lesotho', 'LSO', 426, 266),
(120, 'LR', 'LIBERIA', 'Liberia', 'LBR', 430, 231),
(121, 'LY', 'LIBYAN ARAB JAMAHIRIYA', 'Libyan Arab Jamahiriya', 'LBY', 434, 218),
(122, 'LI', 'LIECHTENSTEIN', 'Liechtenstein', 'LIE', 438, 423),
(123, 'LT', 'LITHUANIA', 'Lithuania', 'LTU', 440, 370),
(124, 'LU', 'LUXEMBOURG', 'Luxembourg', 'LUX', 442, 352),
(125, 'MO', 'MACAO', 'Macao', 'MAC', 446, 853),
(126, 'MK', 'MACEDONIA, THE FORMER YUGOSLAV REPUBLIC OF', 'Macedonia, the Former Yugoslav Republic of', 'MKD', 807, 389),
(127, 'MG', 'MADAGASCAR', 'Madagascar', 'MDG', 450, 261),
(128, 'MW', 'MALAWI', 'Malawi', 'MWI', 454, 265),
(129, 'MY', 'MALAYSIA', 'Malaysia', 'MYS', 458, 60),
(130, 'MV', 'MALDIVES', 'Maldives', 'MDV', 462, 960),
(131, 'ML', 'MALI', 'Mali', 'MLI', 466, 223),
(132, 'MT', 'MALTA', 'Malta', 'MLT', 470, 356),
(133, 'MH', 'MARSHALL ISLANDS', 'Marshall Islands', 'MHL', 584, 692),
(134, 'MQ', 'MARTINIQUE', 'Martinique', 'MTQ', 474, 596),
(135, 'MR', 'MAURITANIA', 'Mauritania', 'MRT', 478, 222),
(136, 'MU', 'MAURITIUS', 'Mauritius', 'MUS', 480, 230),
(137, 'YT', 'MAYOTTE', 'Mayotte', NULL, NULL, 269),
(138, 'MX', 'MEXICO', 'Mexico', 'MEX', 484, 52),
(139, 'FM', 'MICRONESIA, FEDERATED STATES OF', 'Micronesia, Federated States of', 'FSM', 583, 691),
(140, 'MD', 'MOLDOVA, REPUBLIC OF', 'Moldova, Republic of', 'MDA', 498, 373),
(141, 'MC', 'MONACO', 'Monaco', 'MCO', 492, 377),
(142, 'MN', 'MONGOLIA', 'Mongolia', 'MNG', 496, 976),
(143, 'MS', 'MONTSERRAT', 'Montserrat', 'MSR', 500, 1664),
(144, 'MA', 'MOROCCO', 'Morocco', 'MAR', 504, 212),
(145, 'MZ', 'MOZAMBIQUE', 'Mozambique', 'MOZ', 508, 258),
(146, 'MM', 'MYANMAR', 'Myanmar', 'MMR', 104, 95),
(147, 'NA', 'NAMIBIA', 'Namibia', 'NAM', 516, 264),
(148, 'NR', 'NAURU', 'Nauru', 'NRU', 520, 674),
(149, 'NP', 'NEPAL', 'Nepal', 'NPL', 524, 977),
(150, 'NL', 'NETHERLANDS', 'Netherlands', 'NLD', 528, 31),
(151, 'AN', 'NETHERLANDS ANTILLES', 'Netherlands Antilles', 'ANT', 530, 599),
(152, 'NC', 'NEW CALEDONIA', 'New Caledonia', 'NCL', 540, 687),
(153, 'NZ', 'NEW ZEALAND', 'New Zealand', 'NZL', 554, 64),
(154, 'NI', 'NICARAGUA', 'Nicaragua', 'NIC', 558, 505),
(155, 'NE', 'NIGER', 'Niger', 'NER', 562, 227),
(156, 'NG', 'NIGERIA', 'Nigeria', 'NGA', 566, 234),
(157, 'NU', 'NIUE', 'Niue', 'NIU', 570, 683),
(158, 'NF', 'NORFOLK ISLAND', 'Norfolk Island', 'NFK', 574, 672),
(159, 'MP', 'NORTHERN MARIANA ISLANDS', 'Northern Mariana Islands', 'MNP', 580, 1670),
(160, 'NO', 'NORWAY', 'Norway', 'NOR', 578, 47),
(161, 'OM', 'OMAN', 'Oman', 'OMN', 512, 968),
(162, 'PK', 'PAKISTAN', 'Pakistan', 'PAK', 586, 92),
(163, 'PW', 'PALAU', 'Palau', 'PLW', 585, 680),
(164, 'PS', 'PALESTINIAN TERRITORY, OCCUPIED', 'Palestinian Territory, Occupied', NULL, NULL, 970),
(165, 'PA', 'PANAMA', 'Panama', 'PAN', 591, 507),
(166, 'PG', 'PAPUA NEW GUINEA', 'Papua New Guinea', 'PNG', 598, 675),
(167, 'PY', 'PARAGUAY', 'Paraguay', 'PRY', 600, 595),
(168, 'PE', 'PERU', 'Peru', 'PER', 604, 51),
(169, 'PH', 'PHILIPPINES', 'Philippines', 'PHL', 608, 63),
(170, 'PN', 'PITCAIRN', 'Pitcairn', 'PCN', 612, 0),
(171, 'PL', 'POLAND', 'Poland', 'POL', 616, 48),
(172, 'PT', 'PORTUGAL', 'Portugal', 'PRT', 620, 351),
(173, 'PR', 'PUERTO RICO', 'Puerto Rico', 'PRI', 630, 1787),
(174, 'QA', 'QATAR', 'Qatar', 'QAT', 634, 974),
(175, 'RE', 'REUNION', 'Reunion', 'REU', 638, 262),
(176, 'RO', 'ROMANIA', 'Romania', 'ROM', 642, 40),
(177, 'RU', 'RUSSIAN FEDERATION', 'Russian Federation', 'RUS', 643, 70),
(178, 'RW', 'RWANDA', 'Rwanda', 'RWA', 646, 250),
(179, 'SH', 'SAINT HELENA', 'Saint Helena', 'SHN', 654, 290),
(180, 'KN', 'SAINT KITTS AND NEVIS', 'Saint Kitts and Nevis', 'KNA', 659, 1869),
(181, 'LC', 'SAINT LUCIA', 'Saint Lucia', 'LCA', 662, 1758),
(182, 'PM', 'SAINT PIERRE AND MIQUELON', 'Saint Pierre and Miquelon', 'SPM', 666, 508),
(183, 'VC', 'SAINT VINCENT AND THE GRENADINES', 'Saint Vincent and the Grenadines', 'VCT', 670, 1784),
(184, 'WS', 'SAMOA', 'Samoa', 'WSM', 882, 684),
(185, 'SM', 'SAN MARINO', 'San Marino', 'SMR', 674, 378),
(186, 'ST', 'SAO TOME AND PRINCIPE', 'Sao Tome and Principe', 'STP', 678, 239),
(187, 'SA', 'SAUDI ARABIA', 'Saudi Arabia', 'SAU', 682, 966),
(188, 'SN', 'SENEGAL', 'Senegal', 'SEN', 686, 221),
(189, 'CS', 'SERBIA AND MONTENEGRO', 'Serbia and Montenegro', NULL, NULL, 381),
(190, 'SC', 'SEYCHELLES', 'Seychelles', 'SYC', 690, 248),
(191, 'SL', 'SIERRA LEONE', 'Sierra Leone', 'SLE', 694, 232),
(192, 'SG', 'SINGAPORE', 'Singapore', 'SGP', 702, 65),
(193, 'SK', 'SLOVAKIA', 'Slovakia', 'SVK', 703, 421),
(194, 'SI', 'SLOVENIA', 'Slovenia', 'SVN', 705, 386),
(195, 'SB', 'SOLOMON ISLANDS', 'Solomon Islands', 'SLB', 90, 677),
(196, 'SO', 'SOMALIA', 'Somalia', 'SOM', 706, 252),
(197, 'ZA', 'SOUTH AFRICA', 'South Africa', 'ZAF', 710, 27),
(198, 'GS', 'SOUTH GEORGIA AND THE SOUTH SANDWICH ISLANDS', 'South Georgia and the South Sandwich Islands', NULL, NULL, 0),
(199, 'ES', 'SPAIN', 'Spain', 'ESP', 724, 34),
(200, 'LK', 'SRI LANKA', 'Sri Lanka', 'LKA', 144, 94),
(201, 'SD', 'SUDAN', 'Sudan', 'SDN', 736, 249),
(202, 'SR', 'SURINAME', 'Suriname', 'SUR', 740, 597),
(203, 'SJ', 'SVALBARD AND JAN MAYEN', 'Svalbard and Jan Mayen', 'SJM', 744, 47),
(204, 'SZ', 'SWAZILAND', 'Swaziland', 'SWZ', 748, 268),
(205, 'SE', 'SWEDEN', 'Sweden', 'SWE', 752, 46),
(206, 'CH', 'SWITZERLAND', 'Switzerland', 'CHE', 756, 41),
(207, 'SY', 'SYRIAN ARAB REPUBLIC', 'Syrian Arab Republic', 'SYR', 760, 963),
(208, 'TW', 'TAIWAN, PROVINCE OF CHINA', 'Taiwan, Province of China', 'TWN', 158, 886),
(209, 'TJ', 'TAJIKISTAN', 'Tajikistan', 'TJK', 762, 992),
(210, 'TZ', 'TANZANIA, UNITED REPUBLIC OF', 'Tanzania, United Republic of', 'TZA', 834, 255),
(211, 'TH', 'THAILAND', 'Thailand', 'THA', 764, 66),
(212, 'TL', 'TIMOR-LESTE', 'Timor-Leste', NULL, NULL, 670),
(213, 'TG', 'TOGO', 'Togo', 'TGO', 768, 228),
(214, 'TK', 'TOKELAU', 'Tokelau', 'TKL', 772, 690),
(215, 'TO', 'TONGA', 'Tonga', 'TON', 776, 676),
(216, 'TT', 'TRINIDAD AND TOBAGO', 'Trinidad and Tobago', 'TTO', 780, 1868),
(217, 'TN', 'TUNISIA', 'Tunisia', 'TUN', 788, 216),
(218, 'TR', 'TURKEY', 'Turkey', 'TUR', 792, 90),
(219, 'TM', 'TURKMENISTAN', 'Turkmenistan', 'TKM', 795, 7370),
(220, 'TC', 'TURKS AND CAICOS ISLANDS', 'Turks and Caicos Islands', 'TCA', 796, 1649),
(221, 'TV', 'TUVALU', 'Tuvalu', 'TUV', 798, 688),
(222, 'UG', 'UGANDA', 'Uganda', 'UGA', 800, 256),
(223, 'UA', 'UKRAINE', 'Ukraine', 'UKR', 804, 380),
(224, 'AE', 'UNITED ARAB EMIRATES', 'United Arab Emirates', 'ARE', 784, 971),
(225, 'GB', 'UNITED KINGDOM', 'United Kingdom', 'GBR', 826, 44),
(226, 'US', 'UNITED STATES', 'United States', 'USA', 840, 1),
(227, 'UM', 'UNITED STATES MINOR OUTLYING ISLANDS', 'United States Minor Outlying Islands', NULL, NULL, 1),
(228, 'UY', 'URUGUAY', 'Uruguay', 'URY', 858, 598),
(229, 'UZ', 'UZBEKISTAN', 'Uzbekistan', 'UZB', 860, 998),
(230, 'VU', 'VANUATU', 'Vanuatu', 'VUT', 548, 678),
(231, 'VE', 'VENEZUELA', 'Venezuela', 'VEN', 862, 58),
(232, 'VN', 'VIET NAM', 'Viet Nam', 'VNM', 704, 84),
(233, 'VG', 'VIRGIN ISLANDS, BRITISH', 'Virgin Islands, British', 'VGB', 92, 1284),
(234, 'VI', 'VIRGIN ISLANDS, U.S.', 'Virgin Islands, U.s.', 'VIR', 850, 1340),
(235, 'WF', 'WALLIS AND FUTUNA', 'Wallis and Futuna', 'WLF', 876, 681),
(236, 'EH', 'WESTERN SAHARA', 'Western Sahara', 'ESH', 732, 212),
(237, 'YE', 'YEMEN', 'Yemen', 'YEM', 887, 967),
(238, 'ZM', 'ZAMBIA', 'Zambia', 'ZMB', 894, 260),
(239, 'ZW', 'ZIMBABWE', 'Zimbabwe', 'ZWE', 716, 263);

-- --------------------------------------------------------

--
-- Table structure for table `filter`
--

CREATE TABLE `filter` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `status` int(11) NOT NULL,
  `addeddate` date NOT NULL,
  `modifieddate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `filter`
--

INSERT INTO `filter` (`id`, `name`, `status`, `addeddate`, `modifieddate`) VALUES
(1, 'azmal', 1, '2025-09-01', '0000-00-00'),
(2, 'sharukh', 1, '2025-09-03', '0000-00-00'),
(3, 'spiderman', 0, '2025-09-24', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `login_details`
--

CREATE TABLE `login_details` (
  `id` int(11) NOT NULL,
  `user_id` text NOT NULL,
  `device_id` text NOT NULL,
  `ip_address` text NOT NULL,
  `login_date` date NOT NULL,
  `login_time` time NOT NULL,
  `username` text NOT NULL,
  `password` text NOT NULL,
  `logout_date` date DEFAULT NULL,
  `logout_time` time DEFAULT NULL,
  `login_status` int(11) NOT NULL COMMENT '0=login,1=logout,'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `login_details`
--

INSERT INTO `login_details` (`id`, `user_id`, `device_id`, `ip_address`, `login_date`, `login_time`, `username`, `password`, `logout_date`, `logout_time`, `login_status`) VALUES
(16, '3', '680a1a0c64157::1', '::1', '2025-04-24', '16:31:32', 'azmal', 'azmal', '2025-04-24', '16:33:24', 1),
(17, '2', '6853ac63d8d8a::1', '::1', '2025-06-19', '11:51:23', 'admin@gmail.com', 'admin', '2025-06-20', '10:48:39', 1),
(18, '2', '685b8b409ec86::1', '::1', '2025-06-25', '11:08:08', 'admin@gmail.com', 'admin', '2025-06-25', '11:08:50', 1),
(19, '2', '6863c5b3605da::1', '::1', '2025-07-01', '16:55:39', 'admin@gmail.com', 'admin', '2025-07-01', '17:00:52', 1),
(20, '2', '68b29798144c4::1', '::1', '2025-08-30', '11:48:00', 'admin@gmail.com', 'admin', '2025-09-24', '16:56:14', 1),
(21, '2', '68d3c8020ea98::1', '::1', '2025-09-24', '15:59:22', 'admin@gmail.com', 'admin', '2025-09-24', '16:56:14', 1),
(22, '2', '68e4c086b8701::1', '::1', '2025-10-07', '12:55:58', 'admin@gmail.com', 'admin', '2025-10-07', '13:07:20', 1),
(23, '2', '690344da1a909::1', '::1', '2025-10-30', '16:28:34', 'admin@gmail.com', 'admin', '2025-10-30', '16:29:50', 1),
(24, '2', '692ebc4466af1::1', '::1', '2025-12-02', '15:45:32', 'admin@gmail.com', 'admin', '2025-12-05', '12:51:42', 1),
(25, '2', '6932721b6b91f::1', '::1', '2025-12-05', '11:18:11', 'admin@gmail.com', 'admin', '2025-12-05', '12:51:42', 1),
(26, '3', '69327554e28a8::1', '::1', '2025-12-05', '11:31:56', 'azmal', 'azmal', '2025-12-05', '11:31:59', 1),
(27, '3', '6932756c73d44::1', '::1', '2025-12-05', '11:32:20', 'azmal', 'azmal', '2025-12-05', '11:32:24', 1),
(28, '4', '693276191eda9::1', '::1', '2025-12-05', '11:35:13', 'azmal12345', 'azmal12345', '2025-12-05', '12:34:50', 1),
(29, '2', '693276e3bd4e4::1', '::1', '2025-12-05', '11:38:35', 'admin@gmail.com', 'admin', '2025-12-05', '12:51:42', 1),
(30, '4', '693279e5ddbf5::1', '::1', '2025-12-05', '11:51:25', 'azmal12345', 'azmal12345', '2025-12-05', '12:34:50', 1),
(31, '4', '6932841584f90::1', '::1', '2025-12-05', '12:34:53', 'azmal12345', 'azmal12345', '2025-12-05', '12:34:57', 1),
(32, '2', '6932841f6d147::1', '::1', '2025-12-05', '12:35:03', 'admin@gmail.com', 'admin', '2025-12-05', '12:51:42', 1),
(33, '2', '6933f8aeb7045::1', '::1', '2025-12-06', '15:04:38', 'admin@gmail.com', 'admin', '2025-12-08', '10:57:45', 1),
(34, '2', '6936616610847::1', '::1', '2025-12-08', '10:55:58', 'admin@gmail.com', 'admin', '2025-12-08', '10:57:45', 1),
(35, '2', '6954c2c83209b::1', '::1', '2025-12-31', '11:59:28', 'admin@gmail.com', 'admin', '2025-12-31', '12:22:58', 1),
(36, '2', '69819f604730d::1', '::1', '2026-02-03', '12:40:24', 'admin@gmail.com', 'admin', '2026-02-03', '12:45:31', 1),
(37, '1', '6981a30898669::1', '::1', '2026-02-03', '12:56:00', 'azmal123', 'azmal123', '2026-02-03', '12:56:16', 1),
(38, '1', '6981a33800596::1', '::1', '2026-02-03', '12:56:48', 'azmal123', 'azmal123', '2026-02-03', '12:56:51', 1),
(39, '1', '6981a3539c9e3::1', '::1', '2026-02-03', '12:57:15', 'azmal123', 'azmal123', '2026-02-03', '12:57:18', 1),
(40, '1', '6981de0f0ded5::1', '::1', '2026-02-03', '17:07:51', 'azmal123', 'azmal123', NULL, NULL, 0),
(41, '2', '698d83f9f0057::1', '::1', '2026-02-12', '13:10:41', 'admin@gmail.com', 'admin', NULL, NULL, 0),
(42, '2', '69b117bd1f2ab::1', '::1', '2026-03-11', '12:50:29', 'admin@gmail.com', 'admin', NULL, NULL, 0),
(43, '2', '69e5b7bca7372::1', '::1', '2026-04-20', '10:51:00', 'admin@gmail.com', 'admin', NULL, NULL, 0),
(44, '2', '6a340dd4cb047::1', '::1', '2026-06-18', '20:55:08', 'admin@gmail.com', 'admin', NULL, NULL, 0),
(45, '2', '6a342e3b101672401:4900:a016:ee56:4844:e68:aabb:9bc4', '2401:4900:a016:ee56:4844:e68:aabb:9bc4', '2026-06-18', '23:13:23', 'admin@gmail.com', 'admin', NULL, NULL, 0),
(46, '2', '6a34d7275b8b849.205.176.19', '49.205.176.19', '2026-06-19', '11:14:07', 'admin@gmail.com', 'admin', NULL, NULL, 0),
(47, '2', '6a356af4ed9912401:4900:8201:9e47:cca4:6eb0:7ad5:ff04', '2401:4900:8201:9e47:cca4:6eb0:7ad5:ff04', '2026-06-19', '21:44:44', 'admin@gmail.com', 'admin', NULL, NULL, 0),
(48, '2', '6a356b08800e62401:4900:8201:9e47:cca4:6eb0:7ad5:ff04', '2401:4900:8201:9e47:cca4:6eb0:7ad5:ff04', '2026-06-19', '21:45:04', 'admin@gmail.com', 'admin', NULL, NULL, 0),
(49, '2', '6a356d49f1da1119.252.210.107', '119.252.210.107', '2026-06-19', '21:54:41', 'admin@gmail.com', 'admin', NULL, NULL, 0),
(50, '2', '6a356e4dade37119.252.210.107', '119.252.210.107', '2026-06-19', '21:59:01', 'admin@gmail.com', 'admin', NULL, NULL, 0),
(51, '2', '6a3570204a8a3119.252.210.107', '119.252.210.107', '2026-06-19', '22:06:48', 'admin@gmail.com', 'admin', NULL, NULL, 0),
(52, '3', '6a36242b0fce5122.162.145.71', '122.162.145.71', '2026-06-20', '10:54:59', 'azmal', 'azmal', NULL, NULL, 0),
(53, '2', '6a36281051a9f2401:4900:81e7:389e:33b5:3d80:8277:9f9e', '2401:4900:81e7:389e:33b5:3d80:8277:9f9e', '2026-06-20', '11:11:36', 'admin@gmail.com', 'admin', NULL, NULL, 0),
(54, '2', '6a3628b46e9742401:4900:81e7:389e:33b5:3d80:8277:9f9e', '2401:4900:81e7:389e:33b5:3d80:8277:9f9e', '2026-06-20', '11:14:20', 'admin@gmail.com', 'admin', NULL, NULL, 0),
(55, '2', '6a3628c0595692401:4900:81e7:389e:33b5:3d80:8277:9f9e', '2401:4900:81e7:389e:33b5:3d80:8277:9f9e', '2026-06-20', '11:14:32', 'admin@gmail.com', 'admin', NULL, NULL, 0),
(56, '2', '6a362edad123f2401:4900:81e7:389e:33b5:3d80:8277:9f9e', '2401:4900:81e7:389e:33b5:3d80:8277:9f9e', '2026-06-20', '11:40:34', 'admin@gmail.com', 'admin', NULL, NULL, 0),
(57, '2', '6a36637a96501119.252.211.7', '119.252.211.7', '2026-06-20', '15:25:06', 'admin@gmail.com', 'admin', NULL, NULL, 0),
(58, '2', '6a3663843860c119.252.211.7', '119.252.211.7', '2026-06-20', '15:25:16', 'admin@gmail.com', 'admin', NULL, NULL, 0),
(59, '2', '6a36667204c7f119.252.211.7', '119.252.211.7', '2026-06-20', '15:37:46', 'admin@gmail.com', 'admin', NULL, NULL, 0),
(60, '2', '6a38f479116122401:7400:4000:9342:602d:70f5:3650:1801', '2401:7400:4000:9342:602d:70f5:3650:1801', '2026-06-22', '14:08:17', 'admin@gmail.com', 'admin', NULL, NULL, 0);

-- --------------------------------------------------------

--
-- Table structure for table `meta_tags`
--

CREATE TABLE `meta_tags` (
  `id` int(11) NOT NULL,
  `page_name` varchar(150) DEFAULT NULL,
  `meta_title` text DEFAULT NULL,
  `meta_auther` varchar(150) DEFAULT NULL,
  `meta_keyword` text DEFAULT NULL,
  `meta_description` text DEFAULT NULL,
  `slug` text DEFAULT NULL,
  `add_date_time` datetime DEFAULT NULL,
  `update_date_time` datetime DEFAULT NULL,
  `update_history` text DEFAULT NULL,
  `is_delete` int(2) DEFAULT NULL,
  `status` int(2) DEFAULT NULL,
  `type` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `meta_tags`
--

INSERT INTO `meta_tags` (`id`, `page_name`, `meta_title`, `meta_auther`, `meta_keyword`, `meta_description`, `slug`, `add_date_time`, `update_date_time`, `update_history`, `is_delete`, `status`, `type`) VALUES
(28, NULL, NULL, NULL, NULL, NULL, 'tewt', NULL, NULL, NULL, NULL, NULL, 0),
(30, NULL, NULL, NULL, NULL, NULL, 'sad', NULL, NULL, NULL, NULL, NULL, 0),
(32, NULL, NULL, NULL, NULL, NULL, 'sdd', NULL, NULL, NULL, NULL, NULL, 0),
(33, NULL, NULL, NULL, NULL, NULL, 'sadd', NULL, NULL, NULL, NULL, NULL, 0),
(34, NULL, NULL, NULL, NULL, NULL, 'sd', NULL, NULL, NULL, NULL, NULL, 0),
(36, NULL, NULL, NULL, NULL, NULL, 'experience-hassle-free-online-cab-booking-in-india', NULL, NULL, NULL, NULL, NULL, 0),
(47, NULL, NULL, NULL, NULL, NULL, 'all-types-of-hvac-works', NULL, NULL, NULL, NULL, NULL, 0),
(49, NULL, NULL, NULL, NULL, NULL, 'electromechanical-works', NULL, NULL, NULL, NULL, NULL, 0),
(51, NULL, NULL, NULL, NULL, NULL, 'sfddgfsf', NULL, NULL, NULL, NULL, NULL, 0),
(52, NULL, NULL, NULL, NULL, NULL, 'djkfjdfn-ajf-dlf', NULL, NULL, NULL, NULL, NULL, 0),
(54, NULL, NULL, NULL, NULL, NULL, 'dasda', NULL, NULL, NULL, NULL, NULL, 0),
(55, NULL, NULL, NULL, NULL, NULL, 'ofajfjak', NULL, NULL, NULL, NULL, NULL, 0),
(57, NULL, NULL, NULL, NULL, NULL, '-1', NULL, NULL, NULL, NULL, NULL, 0),
(59, NULL, NULL, NULL, NULL, NULL, 'security-services', NULL, NULL, NULL, NULL, NULL, 0),
(62, NULL, NULL, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, 0),
(63, NULL, NULL, NULL, NULL, NULL, 'floor-cleaning', NULL, NULL, NULL, NULL, NULL, 0),
(64, NULL, NULL, NULL, NULL, NULL, 'dfsfs', NULL, NULL, NULL, NULL, NULL, 0),
(65, NULL, NULL, NULL, NULL, NULL, 'fgdgdg', NULL, NULL, NULL, NULL, NULL, 0),
(66, NULL, NULL, NULL, NULL, NULL, 'cleaning-services', NULL, NULL, NULL, NULL, NULL, 0),
(67, NULL, NULL, NULL, NULL, NULL, 'technical-services', NULL, NULL, NULL, NULL, NULL, 0),
(72, NULL, NULL, NULL, NULL, NULL, 'equipment-maintenance-1', NULL, NULL, NULL, NULL, NULL, 0),
(80, NULL, NULL, NULL, NULL, NULL, 'industrial-cleaning', NULL, NULL, NULL, NULL, NULL, 0),
(81, NULL, NULL, NULL, NULL, NULL, 'commercial-cleaning', NULL, NULL, NULL, NULL, NULL, 0),
(82, NULL, NULL, NULL, NULL, NULL, 'residential-cleaning', NULL, NULL, NULL, NULL, NULL, 0),
(83, NULL, NULL, NULL, NULL, NULL, 'mobile-patrol-services', NULL, NULL, NULL, NULL, NULL, 0),
(84, NULL, NULL, NULL, NULL, NULL, 'cctv-monitoring', NULL, NULL, NULL, NULL, NULL, 0),
(85, NULL, NULL, NULL, NULL, NULL, 'event-security', NULL, NULL, NULL, NULL, NULL, 0),
(86, NULL, NULL, NULL, NULL, NULL, 'manned-guarding', NULL, NULL, NULL, NULL, NULL, 0),
(87, NULL, NULL, NULL, NULL, NULL, 'electrical-services', NULL, NULL, NULL, NULL, NULL, 0),
(88, NULL, NULL, NULL, NULL, NULL, 'hvac-air-conditioning', NULL, NULL, NULL, NULL, NULL, 0),
(89, NULL, NULL, NULL, NULL, NULL, 'equipment-maintenance', NULL, NULL, NULL, NULL, NULL, 0),
(90, NULL, NULL, NULL, NULL, NULL, 'plumbing-services', NULL, NULL, NULL, NULL, NULL, 0);

-- --------------------------------------------------------

--
-- Table structure for table `multipleimage`
--

CREATE TABLE `multipleimage` (
  `id` int(11) NOT NULL,
  `title` text NOT NULL,
  `multiple_image_json` text NOT NULL,
  `single_image` text NOT NULL,
  `multiple_images` text NOT NULL,
  `status` int(11) NOT NULL,
  `addeddate` text NOT NULL,
  `modifieddate` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `multipleimage`
--

INSERT INTO `multipleimage` (`id`, `title`, `multiple_image_json`, `single_image`, `multiple_images`, `status`, `addeddate`, `modifieddate`) VALUES
(36, '', '[\"1750319898_TaOFp.jpg\"]', '', '', 1, '', '2025-06-19 13:28:18'),
(37, '', '[\"1750319907_qIdTm.png\"]', '[{\"single_title\":\"asdsad\",\"single_sub_title\":\"asdsad\",\"single_image\":\"6853de4b933960logo2.png\"},{\"single_title\":\"2w3qe\",\"single_sub_title\":\"wqedwqe\",\"single_image\":\"6853db3bd02421yryjX.png\"}]', '[{\"multiple_title\":\"dd\",\"multiple_sub_title\":\"aas\",\"multiple_image\":[\"1796022470TaOFp.jpg\",\"314443939udVtd.png\",\"1659890241wati.png\"]},{\"multiple_title\":\"23424\",\"multiple_sub_title\":\"234234\",\"multiple_image\":[\"936920487CyuN7.png\",\"1612994684ran.png\",\"1709470510Qqc9M.png\"]}]', 1, '', '2025-06-19 15:24:19');

-- --------------------------------------------------------

--
-- Table structure for table `partner`
--

CREATE TABLE `partner` (
  `id` int(11) NOT NULL,
  `image` text NOT NULL,
  `name` text NOT NULL,
  `slug` text NOT NULL,
  `status` int(11) NOT NULL,
  `addeddate` date NOT NULL,
  `modifieddate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `partner`
--

INSERT INTO `partner` (`id`, `image`, `name`, `slug`, `status`, `addeddate`, `modifieddate`) VALUES
(3, '1781806414.png', 'GEO', 'geo', 1, '2026-06-18', '0000-00-00'),
(4, '1781806438.png', 'MapMaster', 'mapmaster', 1, '2026-06-18', '0000-00-00'),
(5, '1781848945.png', 'DIG IT', 'dig-it', 1, '2026-06-18', '2026-06-19'),
(6, '1781848935.png', 'DarkSide', 'darkside', 1, '2026-06-18', '2026-06-19'),
(7, '1781848922.png', 'FifthFloor', 'fifthfloor', 1, '2026-06-18', '2026-06-19');

-- --------------------------------------------------------

--
-- Table structure for table `portfolio`
--

CREATE TABLE `portfolio` (
  `id` int(11) NOT NULL,
  `cat_id` int(11) NOT NULL,
  `image` text NOT NULL,
  `status` int(11) NOT NULL,
  `addeddate` date NOT NULL,
  `modifieddate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `portfolio`
--

INSERT INTO `portfolio` (`id`, `cat_id`, `image`, `status`, `addeddate`, `modifieddate`) VALUES
(1, 1, '1781802588.avif', 1, '2026-06-18', '0000-00-00'),
(2, 2, '1781802600.jpg', 1, '2026-06-18', '0000-00-00'),
(3, 1, '1781849264.webp', 1, '2026-06-19', '0000-00-00'),
(4, 1, '1781849292.jpg', 1, '2026-06-19', '0000-00-00'),
(5, 1, '1781849302.webp', 1, '2026-06-19', '0000-00-00'),
(7, 1, '1781849326.jpg', 1, '2026-06-19', '0000-00-00'),
(8, 2, '1781849473.png', 1, '2026-06-19', '0000-00-00'),
(9, 2, '1781849486.jpg', 1, '2026-06-19', '0000-00-00'),
(10, 2, '1781849497.png', 1, '2026-06-19', '0000-00-00'),
(11, 3, '1781849623.jpeg', 1, '2026-06-19', '0000-00-00'),
(12, 3, '1781849635.webp', 1, '2026-06-19', '0000-00-00'),
(13, 3, '1781849643.avif', 1, '2026-06-19', '2026-06-19'),
(14, 3, '1781849656.jpg', 1, '2026-06-19', '0000-00-00'),
(15, 3, '1781849672.jpg', 1, '2026-06-19', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `id` int(11) NOT NULL,
  `role` int(11) NOT NULL COMMENT '1=user,2=vendor',
  `username` text NOT NULL,
  `slug` text NOT NULL,
  `mobile` text NOT NULL,
  `email` text NOT NULL,
  `password` text NOT NULL,
  `status` int(11) NOT NULL,
  `addeddate` datetime NOT NULL,
  `modifieddate` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE `role` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `slug` text NOT NULL,
  `role_access` longtext NOT NULL,
  `status` int(11) NOT NULL,
  `addeddate` datetime NOT NULL,
  `modifieddate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`id`, `name`, `slug`, `role_access`, `status`, `addeddate`, `modifieddate`) VALUES
(4, 'ACCOUNTS TEAM', 'accounts-team', '{\"main_access\":[\"2\",\"3\",\"4\",\"5\",\"6\",\"7\"],\"inner_access\":[[\"1\",\"2\",\"3\",\"4\"],[\"1\",\"2\",\"3\",\"4\"],[\"3\"],[\"1\",\"3\",\"4\"],[\"1\",\"2\",\"3\",\"4\"],[\"1\",\"2\",\"3\",\"4\"],[\"3\"],[\"3\"],[]]}', 1, '2024-07-30 13:21:07', '2025-12-05 12:33:08'),
(5, 'PRODUCTION TEAM', 'production-team', '{\"main_access\":[\"0\",\"1\",\"2\"],\"inner_access\":[[\"1\",\"2\",\"3\",\"4\"],[\"1\",\"2\",\"3\",\"4\"],[\"1\",\"2\",\"3\",\"4\"],[],[],[]]}', 1, '2024-07-30 13:21:20', '2025-06-19 13:11:00');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` int(11) NOT NULL,
  `cat_id` int(11) NOT NULL COMMENT '\r\n',
  `sub_cat_id` int(11) DEFAULT NULL,
  `image` text NOT NULL,
  `name` text NOT NULL,
  `slug` text NOT NULL,
  `content` longblob NOT NULL,
  `status` text NOT NULL,
  `addeddate` date NOT NULL,
  `modifieddate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `cat_id`, `sub_cat_id`, `image`, `name`, `slug`, `content`, `status`, `addeddate`, `modifieddate`) VALUES
(2, 3, 0, '1781849198.avif', 'Floor Cleaning', 'floor-cleaning', 0x3c703e3c62723e3c2f703e, '1', '2026-06-18', '2026-06-19'),
(4, 1, 0, '1781940496.jpg', 'Electrical Services', 'electrical-services', 0x3c703e50726f66657373696f6e616c20696e7374616c6c6174696f6e2c206d61696e74656e616e63652c20616e6420726570616972206f6620656c656374726963616c2073797374656d7320666f72207265736964656e7469616c2c20636f6d6d65726369616c2c20616e6420696e647573747269616c207370616365732e3c2f703e, '1', '2026-06-20', '2026-06-20'),
(5, 1, 0, '1781940508.jpg', 'HVAC & Air Conditioning', 'hvac-air-conditioning', 0x3c703e436f6d706c6574652068656174696e672c2076656e74696c6174696f6e2c20616e642061697220636f6e646974696f6e696e6720736f6c7574696f6e7320696e636c7564696e6720696e7374616c6c6174696f6e2c20736572766963696e672c20616e6420726570616972732e3c2f703e, '1', '2026-06-20', '2026-06-20'),
(6, 1, 0, '1781940573.jpg', 'Plumbing Services', 'plumbing-services', 0x3c703e52656c6961626c6520706c756d62696e6720736f6c7574696f6e7320636f766572696e67207069706520696e7374616c6c6174696f6e2c206c65616b61676520726570616972732c20647261696e6167652073797374656d732c20616e64206d61696e74656e616e63652e3c2f703e, '1', '2026-06-20', '2026-06-20'),
(7, 1, 0, '1781940536.jpg', 'Equipment Maintenance', 'equipment-maintenance', 0x3c703e526567756c617220696e7370656374696f6e2c20736572766963696e672c20616e6420726570616972206f66206d616368696e65727920616e6420746563686e6963616c2065717569706d656e7420746f20656e73757265206f7074696d616c20706572666f726d616e63652e3c2f703e, '1', '2026-06-20', '2026-06-20'),
(9, 2, 0, '1781940363.png', 'Manned Guarding', 'manned-guarding', 0x3c703e547261696e656420736563757269747920706572736f6e6e656c20666f72207265736964656e7469616c20736f636965746965732c206f6666696365732c20636f6e737472756374696f6e2073697465732c20616e6420636f6d6d65726369616c2070726f706572746965732e3c2f703e, '1', '2026-06-20', '2026-06-20'),
(10, 2, 0, '1781940346.png', 'Event Security', 'event-security', 0x3c703e50726f66657373696f6e616c2063726f776420636f6e74726f6c20616e64207365637572697479206d616e6167656d656e7420666f72206576656e74732c2066756e6374696f6e732c20616e6420676174686572696e67732e3c2f703e, '1', '2026-06-20', '2026-06-20'),
(11, 2, 0, '1781940326.jpg', 'CCTV Monitoring', 'cctv-monitoring', 0x3c703e32342f37207375727665696c6c616e6365206d6f6e69746f72696e6720736572766963657320746f20656e737572652073616665747920616e6420717569636b20726573706f6e736520746f20616e7920737573706963696f75732061637469766974792e3c2f703e, '1', '2026-06-20', '2026-06-20'),
(12, 2, 0, '1781940311.webp', 'Mobile Patrol Services', 'mobile-patrol-services', 0x3c703e526567756c617220706174726f6c20696e7370656374696f6e73206f66207072656d6973657320746f206465746572207468726561747320616e6420656e7375726520636f6e74696e756f75732073656375726974792070726573656e63652e3c2f703e, '1', '2026-06-20', '2026-06-20'),
(13, 3, 0, '1781940187.webp', 'Residential Cleaning', 'residential-cleaning', 0x3c703e3c7370616e207374796c653d22666f6e742d73697a653a20302e3831323572656d3b223e436f6d70726568656e7369766520686f6d6520636c65616e696e6720736572766963657320696e636c7564696e67206465657020636c65616e696e672c20726567756c61722075706b6565702c20616e642073616e6974697a6174696f6e2e3c2f7370616e3e3c2f703e, '1', '2026-06-20', '2026-06-20'),
(14, 3, 0, '1781940174.jpg', 'Commercial Cleaning', 'commercial-cleaning', 0x3c703e3c7370616e207374796c653d22666f6e742d73697a653a20302e3831323572656d3b223e50726f66657373696f6e616c20636c65616e696e6720736f6c7574696f6e7320666f72206f6666696365732c2072657461696c2073746f7265732c20616e6420627573696e6573732073706163657320746f206d61696e7461696e20612068796769656e696320656e7669726f6e6d656e742e3c2f7370616e3e3c2f703e, '1', '2026-06-20', '2026-06-20'),
(15, 3, 0, '1781940157.jpg', 'Industrial Cleaning', 'industrial-cleaning', 0x3c703e3c7370616e207374796c653d22666f6e742d73697a653a20302e3831323572656d3b223e5370656369616c697a656420636c65616e696e6720736572766963657320666f7220666163746f726965732c2077617265686f757365732c20616e6420696e647573747269616c20666163696c69746965732e3c2f7370616e3e3c2f703e, '1', '2026-06-20', '2026-06-20');

-- --------------------------------------------------------

--
-- Table structure for table `site_setting`
--

CREATE TABLE `site_setting` (
  `id` int(11) NOT NULL,
  `logo` text NOT NULL,
  `mobile` varchar(50) NOT NULL,
  `alt_mobile` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `alt_email` varchar(100) NOT NULL,
  `address` text NOT NULL,
  `facebook` text NOT NULL,
  `twitter` text NOT NULL,
  `instagram` text NOT NULL,
  `youtube` text NOT NULL,
  `map` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `site_setting`
--

INSERT INTO `site_setting` (`id`, `logo`, `mobile`, `alt_mobile`, `email`, `alt_email`, `address`, `facebook`, `twitter`, `instagram`, `youtube`, `map`) VALUES
(1, '656647903.png', '+971 54 780 3440', '+971 42 528116', 'info@vkngroup.com', 'sales@vkngroup.com', 'VKN Group of Companies,\r\n\r\nM04 AI Ahrar Building,\r\nNear Al Bayan Kitchen,\r\nAbu Baker Al Siddique Metro Station Exit-1, Dubai', 'https://www.facebook.com/', 'https://twitter.com/', 'https://www.instagram.com/', 'https://www.youtube.com/', '<iframe\r\n        src=\"https://maps.google.com/maps?q=Abu%20Baker%20Al%20Siddiq%20Metro%20Station%20Dubai&t=&z=14&ie=UTF8&iwloc=&output=embed\"\r\n        width=\"100%\"\r\n        height=\"500\"\r\n        style=\"border:0;\"\r\n        allowfullscreen=\"\"\r\n        loading=\"lazy\">\r\n    </iframe>');

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE `slider` (
  `id` int(11) NOT NULL,
  `title` text NOT NULL,
  `sub_title` text NOT NULL,
  `slug` text NOT NULL,
  `image` text NOT NULL,
  `content` text NOT NULL,
  `status` int(11) NOT NULL,
  `addeddate` datetime NOT NULL,
  `modifieddate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`id`, `title`, `sub_title`, `slug`, `image`, `content`, `status`, `addeddate`, `modifieddate`) VALUES
(25, '', '', '', '1781885747.png', '', 1, '2026-06-19 21:45:47', '0000-00-00 00:00:00'),
(26, '', '', '', '1781885944.png', '', 1, '2026-06-19 21:49:04', '0000-00-00 00:00:00'),
(27, '', '', '', '1781886104.png', '', 1, '2026-06-19 21:51:44', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `slugs`
--

CREATE TABLE `slugs` (
  `id` int(11) NOT NULL,
  `slug` text NOT NULL,
  `table_name` varchar(100) NOT NULL,
  `page_name` varchar(150) NOT NULL,
  `controller_name` varchar(150) NOT NULL,
  `p_id` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `slugs`
--

INSERT INTO `slugs` (`id`, `slug`, `table_name`, `page_name`, `controller_name`, `p_id`) VALUES
(328, 'all-types-of-hvac-works', 'sub_categories', 'service-details.php', 'sub_categories', 1),
(330, 'electromechanical-works', 'sub_categories', 'service-details.php', 'sub_categories', 2),
(335, 'dasda', 'partner', 'services-list.php', 'partner', 1),
(336, 'ofajfjak', 'partner', 'services-list.php', 'partner', 2),
(341, 'security-services', 'category', 'services-list.php', 'category', 2),
(345, 'floor-cleaning', 'services', 'service-details.php', 'services', 2),
(346, 'dfsfs', 'services', 'service-details.php', 'services', 3),
(347, 'fgdgdg', 'services', 'service-details.php', 'services', 1),
(348, 'cleaning-services', 'category', 'services-list.php', 'category', 3),
(349, 'technical-services', 'category', 'services-list.php', 'category', 1),
(354, 'equipment-maintenance-1', 'services', 'service-details.php', 'services', 8),
(362, 'industrial-cleaning', 'services', 'service-details.php', 'services', 15),
(363, 'commercial-cleaning', 'services', 'service-details.php', 'services', 14),
(364, 'residential-cleaning', 'services', 'service-details.php', 'services', 13),
(365, 'mobile-patrol-services', 'services', 'service-details.php', 'services', 12),
(366, 'cctv-monitoring', 'services', 'service-details.php', 'services', 11),
(367, 'event-security', 'services', 'service-details.php', 'services', 10),
(368, 'manned-guarding', 'services', 'service-details.php', 'services', 9),
(369, 'electrical-services', 'services', 'service-details.php', 'services', 4),
(370, 'hvac-air-conditioning', 'services', 'service-details.php', 'services', 5),
(371, 'equipment-maintenance', 'services', 'service-details.php', 'services', 7),
(372, 'plumbing-services', 'services', 'service-details.php', 'services', 6);

-- --------------------------------------------------------

--
-- Table structure for table `state`
--

CREATE TABLE `state` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `slug` text NOT NULL,
  `country_id` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `addeddate` datetime NOT NULL,
  `modifieddate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;

--
-- Dumping data for table `state`
--

INSERT INTO `state` (`id`, `name`, `slug`, `country_id`, `status`, `addeddate`, `modifieddate`) VALUES
(1, 'ANDHRA PRADESH', '', 105, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, 'ASSAM', '', 105, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, 'ARUNACHAL PRADESH', '', 105, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(4, 'BIHAR', '', 105, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(5, 'GUJRAT', '', 105, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(6, 'HARYANA', '', 105, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(7, 'HIMACHAL PRADESH', '', 105, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(8, 'JAMMU & KASHMIR', '', 105, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(9, 'KARNATAKA', '', 105, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(10, 'KERALA', '', 105, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(11, 'MADHYA PRADESH', '', 105, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(12, 'MAHARASHTRA', '', 105, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(13, 'MANIPUR', '', 105, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(14, 'MEGHALAYA', '', 105, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(15, 'MIZORAM', '', 105, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(16, 'NAGALAND', '', 105, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(17, 'ORISSA', '', 105, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(18, 'PUNJAB', '', 105, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(19, 'RAJASTHAN', '', 105, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(20, 'SIKKIM', '', 105, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(21, 'TAMIL NADU', '', 105, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(22, 'TRIPURA', '', 105, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(23, 'UTTAR PRADESH', '', 105, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(24, 'WEST BENGAL', '', 105, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(25, 'DELHI', '', 105, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(26, 'GOA', '', 105, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(27, 'PONDICHERY', '', 105, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(28, 'LAKSHDWEEP', '', 105, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(29, 'DAMAN & DIU', '', 105, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(30, 'DADRA & NAGAR', '', 105, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(31, 'CHANDIGARH', '', 105, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(32, 'ANDAMAN & NICOBAR', '', 105, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(33, 'UTTARANCHAL', '', 105, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(34, 'JHARKHAND', '', 105, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(35, 'CHATTISGARH', '', 105, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `sub_categories`
--

CREATE TABLE `sub_categories` (
  `id` int(11) NOT NULL,
  `cat_id` int(11) NOT NULL,
  `image` text NOT NULL,
  `name` text NOT NULL,
  `slug` text NOT NULL,
  `status` int(11) NOT NULL,
  `addeddate` date NOT NULL,
  `modifieddate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sub_categories`
--

INSERT INTO `sub_categories` (`id`, `cat_id`, `image`, `name`, `slug`, `status`, `addeddate`, `modifieddate`) VALUES
(1, 1, '1781798113.jpg', 'All Types of HVAC Works', 'all-types-of-hvac-works', 1, '2026-06-18', '0000-00-00'),
(2, 2, '1781798113.jpg', 'Electromechanical Works', 'electromechanical-works', 1, '2026-06-18', '2026-06-18');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `id` int(11) NOT NULL,
  `type` int(11) NOT NULL COMMENT '1=admin,2=subadmin',
  `role` int(11) NOT NULL,
  `access` text NOT NULL,
  `first_name` text NOT NULL,
  `last_name` text NOT NULL,
  `username` text NOT NULL,
  `password` text NOT NULL,
  `email` varchar(100) NOT NULL,
  `mobile` varchar(15) NOT NULL,
  `address` text NOT NULL,
  `image` text NOT NULL,
  `gender` text NOT NULL,
  `dob` text NOT NULL,
  `martial` text NOT NULL,
  `age` text NOT NULL,
  `country` text NOT NULL,
  `state` text NOT NULL,
  `hash_key` text DEFAULT NULL,
  `hash_expiry` datetime DEFAULT NULL,
  `status` int(11) NOT NULL,
  `addeddate` datetime DEFAULT NULL,
  `modifieddate` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`id`, `type`, `role`, `access`, `first_name`, `last_name`, `username`, `password`, `email`, `mobile`, `address`, `image`, `gender`, `dob`, `martial`, `age`, `country`, `state`, `hash_key`, `hash_expiry`, `status`, `addeddate`, `modifieddate`) VALUES
(1, 1, 0, '', 'Azmal', 'Ansari', 'azmal123', 'azmal123', 'admin@gmail.com', '46546', 'sfsfsdf sdefdsfs fsdf sdf', 'user2.jpg', 'male', '01/01/2022', 'single', '22', 'india', 'elhi', NULL, NULL, 1, NULL, NULL),
(2, 1, 0, '', 'Admin', 'Admin', 'admin@gmail.com', 'admin', 'admin123@gmail.com', '9582285215', 'delhi', '1724412456.png', 'male', '01/01/2022', 'single', '22', 'india', 'delhi', '6ef5a86a72d307d9d2df14306a26534f64236ca1887fb9ba0cff55e6e0a26390', '2024-08-30 13:34:00', 1, NULL, NULL),
(3, 1, 0, '', 'Wolverine', 'logen', 'azmal', 'azmal', 'wolverine@gmail.com', '897989', 'sfsfsdf sdefdsfs fsdf sdf', 'user3.jpg', 'male', '01/01/2022', 'single', '22', 'india', 'delhi', NULL, NULL, 1, NULL, NULL),
(4, 2, 4, '{\"main_access\":[\"2\",\"3\",\"4\",\"5\",\"6\",\"7\"],\"inner_access\":[[\"1\",\"2\",\"3\",\"4\"],[\"1\",\"2\",\"3\",\"4\"],[\"3\"],[\"1\",\"3\",\"4\"],[\"1\",\"2\",\"3\",\"4\"],[\"1\",\"2\",\"3\",\"4\"],[\"3\"],[\"3\"],[]]}', '', '', 'azmal12345', 'azmal12345', '', '', '', '', '', '', '', '', '', '', NULL, NULL, 1, '2024-08-24 17:23:45', '2025-12-05 12:21:49');

-- --------------------------------------------------------

--
-- Table structure for table `testimonials`
--

CREATE TABLE `testimonials` (
  `id` int(11) NOT NULL,
  `image` text NOT NULL,
  `name` text NOT NULL,
  `position` text NOT NULL,
  `content` text NOT NULL,
  `status` int(11) NOT NULL,
  `addeddate` datetime NOT NULL,
  `modifieddate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `testimonials`
--

INSERT INTO `testimonials` (`id`, `image`, `name`, `position`, `content`, `status`, `addeddate`, `modifieddate`) VALUES
(1, '1731493179.png', 'Rachel', 'Operational Manager- GG Finance', 'Professional Staff, excellent cleaning standards, and attention to details. Great all-in-one service provider.', 1, '2024-08-24 18:07:24', '2026-06-18 23:34:35'),
(2, '1750317758.png', 'Deepak Vats', 'CSO- HIC Bank', 'Outstanding security and maintenance services. ', 1, '2025-06-19 12:52:38', '2026-06-18 23:33:13'),
(3, '1750317992.png', 'Azmal Ansari', 'Security Manager- HBD Investment', 'Outstanding security and maintenance services. we feel much more safer and more organized now.', 1, '2025-06-19 12:52:52', '2026-06-18 23:32:14'),
(4, '', 'John Doe', 'CEO- GIN Ventures', 'This is to share our deep appreciation for the efforts Bhaskar Dutta and the 20+ VKN team members who stayed back and served us during the crisis, helping out with not only security work.', 1, '2026-06-18 23:42:40', '0000-00-00 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `activity_records`
--
ALTER TABLE `activity_records`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `city`
--
ALTER TABLE `city`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `content`
--
ALTER TABLE `content`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `country`
--
ALTER TABLE `country`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `filter`
--
ALTER TABLE `filter`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login_details`
--
ALTER TABLE `login_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `meta_tags`
--
ALTER TABLE `meta_tags`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `multipleimage`
--
ALTER TABLE `multipleimage`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `partner`
--
ALTER TABLE `partner`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `portfolio`
--
ALTER TABLE `portfolio`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `site_setting`
--
ALTER TABLE `site_setting`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slugs`
--
ALTER TABLE `slugs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `state`
--
ALTER TABLE `state`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sub_categories`
--
ALTER TABLE `sub_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testimonials`
--
ALTER TABLE `testimonials`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `activity_records`
--
ALTER TABLE `activity_records`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=534;

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `city`
--
ALTER TABLE `city`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=604;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `content`
--
ALTER TABLE `content`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `country`
--
ALTER TABLE `country`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=240;

--
-- AUTO_INCREMENT for table `filter`
--
ALTER TABLE `filter`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `login_details`
--
ALTER TABLE `login_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT for table `meta_tags`
--
ALTER TABLE `meta_tags`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=91;

--
-- AUTO_INCREMENT for table `multipleimage`
--
ALTER TABLE `multipleimage`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `partner`
--
ALTER TABLE `partner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `portfolio`
--
ALTER TABLE `portfolio`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `role`
--
ALTER TABLE `role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `site_setting`
--
ALTER TABLE `site_setting`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `slugs`
--
ALTER TABLE `slugs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=373;

--
-- AUTO_INCREMENT for table `state`
--
ALTER TABLE `state`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `sub_categories`
--
ALTER TABLE `sub_categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `testimonials`
--
ALTER TABLE `testimonials`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
