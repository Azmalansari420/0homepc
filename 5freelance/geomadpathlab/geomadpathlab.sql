-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 23, 2025 at 08:47 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `geomadpathlab`
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
(1, '::1', 'http://localhost/geomedicpath/admin/dashboard', '2025-03-17', '15:25:31', 2, 'admin', 'admin'),
(2, '::1', 'http://localhost/geomedicpath/admin_con/site_setting/edit/1', '2025-03-17', '15:25:34', 2, 'admin', 'admin'),
(3, '::1', 'http://localhost/geomedicpath/admin_con/site_setting/edit/1', '2025-03-17', '15:25:48', 2, 'admin', 'admin'),
(4, '::1', 'http://localhost/geomedicpath/admin_con/site_setting/edit/1', '2025-03-17', '15:32:52', 2, 'admin', 'admin'),
(5, '::1', 'http://localhost/geomedicpath/admin_con/categories/listing', '2025-03-17', '15:33:27', 2, 'admin', 'admin'),
(6, '::1', 'http://localhost/geomedicpath/admin_con/categories/listing', '2025-03-17', '15:33:40', 2, 'admin', 'admin'),
(7, '::1', 'http://localhost/geomedicpath/admin_con/categories/add', '2025-03-17', '15:33:42', 2, 'admin', 'admin'),
(8, '::1', 'http://localhost/geomedicpath/admin_con/categories/add', '2025-03-17', '15:34:39', 2, 'admin', 'admin'),
(9, '::1', 'http://localhost/geomedicpath/admin_con/categories/add', '2025-03-17', '15:35:19', 2, 'admin', 'admin'),
(10, '::1', 'http://localhost/geomedicpath/admin_con/categories/add', '2025-03-17', '15:35:24', 2, 'admin', 'admin'),
(11, '::1', 'http://localhost/geomedicpath/admin_con/categories/add', '2025-03-17', '15:35:33', 2, 'admin', 'admin'),
(12, '::1', 'http://localhost/geomedicpath/admin_con/categories/listing', '2025-03-17', '15:35:56', 2, 'admin', 'admin'),
(13, '::1', 'http://localhost/geomedicpath/admin_con/categories/add', '2025-03-17', '15:36:07', 2, 'admin', 'admin'),
(14, '::1', 'http://localhost/geomedicpath/admin_con/categories/listing', '2025-03-17', '15:36:08', 2, 'admin', 'admin'),
(15, '::1', 'http://localhost/geomedicpath/admin_con/categories/add', '2025-03-17', '15:36:13', 2, 'admin', 'admin'),
(16, '::1', 'http://localhost/geomedicpath/admin_con/categories/listing', '2025-03-17', '15:36:15', 2, 'admin', 'admin'),
(17, '::1', 'http://localhost/geomedicpath/admin_con/categories/listing', '2025-03-17', '15:36:31', 2, 'admin', 'admin'),
(18, '::1', 'http://localhost/geomedicpath/admin_con/categories/edit/3', '2025-03-17', '15:37:02', 2, 'admin', 'admin'),
(19, '::1', 'http://localhost/geomedicpath/admin_con/categories/edit/3', '2025-03-17', '15:37:07', 2, 'admin', 'admin'),
(20, '::1', 'http://localhost/geomedicpath/admin_con/categories/listing', '2025-03-17', '15:37:08', 2, 'admin', 'admin'),
(21, '::1', 'http://localhost/geomedicpath/admin_con/categories/listing', '2025-03-17', '15:39:27', 2, 'admin', 'admin'),
(22, '::1', 'http://localhost/geomedicpath/admin_con/sub_categories/listing', '2025-03-17', '15:39:44', 2, 'admin', 'admin'),
(23, '::1', 'http://localhost/geomedicpath/admin_con/sub_categories/add', '2025-03-17', '15:39:46', 2, 'admin', 'admin'),
(24, '::1', 'http://localhost/geomedicpath/admin_con/sub_categories/add', '2025-03-17', '15:41:51', 2, 'admin', 'admin'),
(25, '::1', 'http://localhost/geomedicpath/admin_con/sub_categories/add', '2025-03-17', '15:42:08', 2, 'admin', 'admin'),
(26, '::1', 'http://localhost/geomedicpath/admin_con/sub_categories/add', '2025-03-17', '15:44:30', 2, 'admin', 'admin'),
(27, '::1', 'http://localhost/geomedicpath/admin_con/sub_categories/listing', '2025-03-17', '15:44:59', 2, 'admin', 'admin'),
(28, '::1', 'http://localhost/geomedicpath/admin_con/sub_categories/listing', '2025-03-17', '15:48:40', 2, 'admin', 'admin'),
(29, '::1', 'http://localhost/geomedicpath/admin_con/sub_categories/edit/1', '2025-03-17', '15:48:43', 2, 'admin', 'admin'),
(30, '::1', 'http://localhost/geomedicpath/admin_con/sub_categories/edit/1', '2025-03-17', '15:49:13', 2, 'admin', 'admin'),
(31, '::1', 'http://localhost/geomedicpath/admin_con/sub_categories/listing', '2025-03-17', '15:49:15', 2, 'admin', 'admin'),
(32, '::1', 'http://localhost/geomedicpath/admin_con/sub_categories/edit/1', '2025-03-17', '15:49:22', 2, 'admin', 'admin'),
(33, '::1', 'http://localhost/geomedicpath/admin_con/sub_categories/listing', '2025-03-17', '15:49:24', 2, 'admin', 'admin'),
(34, '::1', 'http://localhost/geomedicpath/admin_con/sub_categories/add', '2025-03-17', '15:49:52', 2, 'admin', 'admin'),
(35, '::1', 'http://localhost/geomedicpath/admin_con/sub_categories/listing', '2025-03-17', '15:50:38', 2, 'admin', 'admin'),
(36, '::1', 'http://localhost/geomedicpath/admin_con/sub_categories/add', '2025-03-17', '15:50:39', 2, 'admin', 'admin'),
(37, '::1', 'http://localhost/geomedicpath/admin_con/sub_categories/listing', '2025-03-17', '15:51:04', 2, 'admin', 'admin'),
(38, '::1', 'http://localhost/geomedicpath/admin_con/sub_categories/listing', '2025-03-17', '15:51:09', 2, 'admin', 'admin'),
(39, '::1', 'http://localhost/geomedicpath/admin_con/sub_categories/listing', '2025-03-17', '15:52:44', 2, 'admin', 'admin'),
(40, '::1', 'http://localhost/geomedicpath/admin_con/services/listing', '2025-03-17', '15:53:06', 2, 'admin', 'admin'),
(41, '::1', 'http://localhost/geomedicpath/admin_con/services/listing', '2025-03-17', '15:53:22', 2, 'admin', 'admin'),
(42, '::1', 'http://localhost/geomedicpath/admin_con/services/add', '2025-03-17', '15:53:23', 2, 'admin', 'admin'),
(43, '::1', 'http://localhost/geomedicpath/admin_con/services/add', '2025-03-17', '15:53:50', 2, 'admin', 'admin'),
(44, '::1', 'http://localhost/geomedicpath/admin_con/services/add', '2025-03-17', '15:54:13', 2, 'admin', 'admin'),
(45, '::1', 'http://localhost/geomedicpath/admin_con/services/add', '2025-03-17', '15:54:19', 2, 'admin', 'admin'),
(46, '::1', 'http://localhost/geomedicpath/admin_con/services/add', '2025-03-17', '15:56:06', 2, 'admin', 'admin'),
(47, '::1', 'http://localhost/geomedicpath/admin_con/services/add', '2025-03-17', '15:57:12', 2, 'admin', 'admin'),
(48, '::1', 'http://localhost/geomedicpath/admin_con/services/add', '2025-03-17', '16:00:20', 2, 'admin', 'admin'),
(49, '::1', 'http://localhost/geomedicpath/admin_con/services/add', '2025-03-17', '16:00:32', 2, 'admin', 'admin'),
(50, '::1', 'http://localhost/geomedicpath/admin_con/services/add', '2025-03-17', '16:27:08', 2, 'admin', 'admin'),
(51, '::1', 'http://localhost/geomedicpath/admin_con/services/add', '2025-03-17', '16:27:14', 2, 'admin', 'admin'),
(52, '::1', 'http://localhost/geomedicpath/admin_con/services/add', '2025-03-17', '16:27:38', 2, 'admin', 'admin'),
(53, '::1', 'http://localhost/geomedicpath/admin_con/services/listing', '2025-03-17', '16:27:57', 2, 'admin', 'admin'),
(54, '::1', 'http://localhost/geomedicpath/admin_con/services/edit/1', '2025-03-17', '16:29:12', 2, 'admin', 'admin'),
(55, '::1', 'http://localhost/geomedicpath/admin_con/services/edit/1', '2025-03-17', '16:30:04', 2, 'admin', 'admin'),
(56, '::1', 'http://localhost/geomedicpath/admin_con/services/edit/1', '2025-03-17', '16:30:28', 2, 'admin', 'admin'),
(57, '::1', 'http://localhost/geomedicpath/admin_con/services/edit/1', '2025-03-17', '16:31:02', 2, 'admin', 'admin'),
(58, '::1', 'http://localhost/geomedicpath/admin_con/services/add', '2025-03-18', '11:23:28', 2, 'admin', 'admin'),
(59, '::1', 'http://localhost/geomedicpath/admin_con/services/listing', '2025-03-18', '11:23:32', 2, 'admin', 'admin'),
(60, '::1', 'http://localhost/geomedicpath/admin_con/services/listing', '2025-03-18', '11:24:10', 2, 'admin', 'admin'),
(61, '::1', 'http://localhost/geomedicpath/admin_con/services/edit/1', '2025-03-18', '11:24:12', 2, 'admin', 'admin'),
(62, '::1', 'http://localhost/geomedicpath/admin_con/services/listing', '2025-03-18', '11:24:23', 2, 'admin', 'admin'),
(63, '::1', 'http://localhost/geomedicpath/admin_con/services/edit/1', '2025-03-18', '11:24:54', 2, 'admin', 'admin'),
(64, '::1', 'http://localhost/geomedicpath/admin_con/services/edit/1', '2025-03-18', '11:25:31', 2, 'admin', 'admin'),
(65, '::1', 'http://localhost/geomedicpath/admin_con/services/listing', '2025-03-18', '11:26:32', 2, 'admin', 'admin'),
(66, '::1', 'http://localhost/geomedicpath/admin_con/services/listing', '2025-03-18', '11:26:55', 2, 'admin', 'admin'),
(67, '::1', 'http://localhost/geomedicpath/admin_con/services/edit/1', '2025-03-18', '11:26:58', 2, 'admin', 'admin'),
(68, '::1', 'http://localhost/geomedicpath/admin_con/services/listing', '2025-03-18', '11:27:01', 2, 'admin', 'admin'),
(69, '::1', 'http://localhost/geomedicpath/admin_con/sub_categories/listing', '2025-03-18', '11:28:44', 2, 'admin', 'admin'),
(70, '::1', 'http://localhost/geomedicpath/admin_con/sub_categories/edit/3', '2025-03-18', '11:28:46', 2, 'admin', 'admin'),
(71, '::1', 'http://localhost/geomedicpath/admin_con/sub_categories/listing', '2025-03-18', '11:28:47', 2, 'admin', 'admin'),
(72, '::1', 'http://localhost/geomedicpath/admin_con/sub_categories/edit/2', '2025-03-18', '11:28:48', 2, 'admin', 'admin'),
(73, '::1', 'http://localhost/geomedicpath/admin_con/sub_categories/listing', '2025-03-18', '11:28:49', 2, 'admin', 'admin'),
(74, '::1', 'http://localhost/geomedicpath/admin_con/sub_categories/edit/1', '2025-03-18', '11:28:49', 2, 'admin', 'admin'),
(75, '::1', 'http://localhost/geomedicpath/admin_con/sub_categories/listing', '2025-03-18', '11:28:50', 2, 'admin', 'admin'),
(76, '::1', 'http://localhost/geomedicpath/admin_con/categories/listing', '2025-03-18', '11:28:51', 2, 'admin', 'admin'),
(77, '::1', 'http://localhost/geomedicpath/admin_con/categories/edit/3', '2025-03-18', '11:28:52', 2, 'admin', 'admin'),
(78, '::1', 'http://localhost/geomedicpath/admin_con/categories/listing', '2025-03-18', '11:28:53', 2, 'admin', 'admin'),
(79, '::1', 'http://localhost/geomedicpath/admin_con/categories/edit/2', '2025-03-18', '11:28:54', 2, 'admin', 'admin'),
(80, '::1', 'http://localhost/geomedicpath/admin_con/categories/listing', '2025-03-18', '11:28:55', 2, 'admin', 'admin'),
(81, '::1', 'http://localhost/geomedicpath/admin_con/categories/edit/1', '2025-03-18', '11:28:56', 2, 'admin', 'admin'),
(82, '::1', 'http://localhost/geomedicpath/admin_con/categories/listing', '2025-03-18', '11:28:57', 2, 'admin', 'admin'),
(83, '::1', 'http://localhost/geomedicpath/admin_con/services/listing', '2025-03-18', '11:33:04', 2, 'admin', 'admin'),
(84, '::1', 'http://localhost/geomedicpath/admin_con/sub_categories/listing', '2025-03-18', '11:33:05', 2, 'admin', 'admin'),
(85, '::1', 'http://localhost/geomedicpath/admin_con/sub_categories/edit/2', '2025-03-18', '11:33:08', 2, 'admin', 'admin'),
(86, '::1', 'http://localhost/geomedicpath/admin_con/sub_categories/listing', '2025-03-18', '11:33:11', 2, 'admin', 'admin'),
(87, '::1', 'http://localhost/geomedicpath/admin_con/services/listing', '2025-03-18', '11:38:24', 2, 'admin', 'admin'),
(88, '::1', 'http://localhost/geomedicpath/admin_con/services/add', '2025-03-18', '11:38:27', 2, 'admin', 'admin'),
(89, '::1', 'http://localhost/geomedicpath/admin_con/services/listing', '2025-03-18', '11:38:39', 2, 'admin', 'admin'),
(90, '::1', 'http://localhost/geomedicpath/admin_con/services/edit/2', '2025-03-18', '11:39:20', 2, 'admin', 'admin'),
(91, '::1', 'http://localhost/geomedicpath/admin_con/services/edit/2', '2025-03-18', '11:39:37', 2, 'admin', 'admin'),
(92, '::1', 'http://localhost/geomedicpath/admin_con/services/listing', '2025-03-18', '11:39:39', 2, 'admin', 'admin'),
(93, '::1', 'http://localhost/geomedicpath/admin_con/sub_categories/listing', '2025-03-18', '11:45:13', 2, 'admin', 'admin'),
(94, '::1', 'http://localhost/geomedicpath/admin_con/sub_categories/edit/3', '2025-03-18', '11:45:15', 2, 'admin', 'admin'),
(95, '::1', 'http://localhost/geomedicpath/admin_con/sub_categories/listing', '2025-03-18', '11:45:16', 2, 'admin', 'admin'),
(96, '::1', 'http://localhost/geomedicpath/admin_con/sub_categories/edit/2', '2025-03-18', '11:45:18', 2, 'admin', 'admin'),
(97, '::1', 'http://localhost/geomedicpath/admin_con/sub_categories/listing', '2025-03-18', '11:45:18', 2, 'admin', 'admin'),
(98, '::1', 'http://localhost/geomedicpath/admin_con/sub_categories/edit/1', '2025-03-18', '11:45:19', 2, 'admin', 'admin'),
(99, '::1', 'http://localhost/geomedicpath/admin_con/sub_categories/listing', '2025-03-18', '11:45:20', 2, 'admin', 'admin'),
(100, '::1', 'http://localhost/geomedicpath/admin_con/services/listing', '2025-03-18', '11:58:15', 2, 'admin', 'admin'),
(101, '::1', 'http://localhost/geomedicpath/admin_con/services/edit/2', '2025-03-18', '11:58:17', 2, 'admin', 'admin'),
(102, '::1', 'http://localhost/geomedicpath/admin_con/services/listing', '2025-03-18', '11:58:29', 2, 'admin', 'admin'),
(103, '::1', 'http://localhost/geomedicpath/admin_con/services/add', '2025-03-18', '11:58:30', 2, 'admin', 'admin'),
(104, '::1', 'http://localhost/geomedicpath/admin_con/services/listing', '2025-03-18', '11:59:57', 2, 'admin', 'admin'),
(105, '::1', 'http://localhost/geomedicpath/admin_con/services/edit/1', '2025-03-18', '11:59:58', 2, 'admin', 'admin'),
(106, '::1', 'http://localhost/geomedicpath/admin_con/services/listing', '2025-03-18', '11:59:59', 2, 'admin', 'admin'),
(107, '::1', 'http://localhost/geomedicpath/admin_con/services/edit/2', '2025-03-18', '12:00:00', 2, 'admin', 'admin'),
(108, '::1', 'http://localhost/geomedicpath/admin_con/services/listing', '2025-03-18', '12:00:01', 2, 'admin', 'admin'),
(109, '::1', 'http://localhost/geomedicpath/admin_con/services/edit/2', '2025-03-18', '12:00:43', 2, 'admin', 'admin'),
(110, '::1', 'http://localhost/geomedicpath/admin_con/services/edit/2', '2025-03-18', '12:01:55', 2, 'admin', 'admin'),
(111, '::1', 'http://localhost/geomedicpath/admin_con/services/listing', '2025-03-18', '12:02:10', 2, 'admin', 'admin'),
(112, '::1', 'http://localhost/geomedicpath/admin_con/services/edit/2', '2025-03-18', '12:02:11', 2, 'admin', 'admin'),
(113, '::1', 'http://localhost/geomedicpath/admin_con/services/listing', '2025-03-18', '12:02:14', 2, 'admin', 'admin'),
(114, '::1', 'http://localhost/geomedicpath/admin_con/services/edit/2', '2025-03-18', '12:02:15', 2, 'admin', 'admin'),
(115, '::1', 'http://localhost/geomedicpath/admin_con/services/listing', '2025-03-18', '12:02:37', 2, 'admin', 'admin'),
(116, '::1', 'http://localhost/geomedicpath/admin_con/services/edit/2', '2025-03-18', '12:02:39', 2, 'admin', 'admin'),
(117, '::1', 'http://localhost/geomedicpath/admin_con/services/listing', '2025-03-18', '12:02:41', 2, 'admin', 'admin'),
(118, '::1', 'http://localhost/geomedicpath/admin_con/services/edit/2', '2025-03-18', '12:02:43', 2, 'admin', 'admin'),
(119, '::1', 'http://localhost/geomedicpath/admin_con/services/edit/2', '2025-03-18', '12:03:05', 2, 'admin', 'admin'),
(120, '::1', 'http://localhost/geomedicpath/admin_con/services/listing', '2025-03-18', '12:03:15', 2, 'admin', 'admin'),
(121, '::1', 'http://localhost/geomedicpath/admin_con/services/edit/2', '2025-03-18', '12:03:17', 2, 'admin', 'admin'),
(122, '::1', 'http://localhost/geomedicpath/admin_con/services/listing', '2025-03-18', '12:03:34', 2, 'admin', 'admin'),
(123, '::1', 'http://localhost/geomedicpath/admin_con/services/edit/2', '2025-03-18', '12:03:35', 2, 'admin', 'admin'),
(124, '::1', 'http://localhost/geomedicpath/admin_con/services/listing', '2025-03-18', '12:04:12', 2, 'admin', 'admin'),
(125, '::1', 'http://localhost/geomedicpath/admin_con/services/edit/2', '2025-03-18', '12:04:21', 2, 'admin', 'admin'),
(126, '::1', 'http://localhost/geomedicpath/admin_con/services/listing', '2025-03-18', '12:04:23', 2, 'admin', 'admin'),
(127, '::1', 'http://localhost/geomedicpath/admin_con/services/edit/2', '2025-03-18', '12:11:34', 2, 'admin', 'admin'),
(128, '::1', 'http://localhost/geomedicpath/admin_con/services/listing', '2025-03-18', '12:11:44', 2, 'admin', 'admin'),
(129, '::1', 'http://localhost/geomedicpath/admin_con/services/edit/2', '2025-03-18', '12:12:50', 2, 'admin', 'admin'),
(130, '::1', 'http://localhost/geomedicpath/admin_con/services/listing', '2025-03-18', '12:13:02', 2, 'admin', 'admin'),
(131, '::1', 'http://localhost/geomedicpath/admin_con/services/edit/2', '2025-03-18', '12:13:09', 2, 'admin', 'admin'),
(132, '::1', 'http://localhost/geomedicpath/admin_con/services/listing', '2025-03-18', '12:13:31', 2, 'admin', 'admin'),
(133, '::1', 'http://localhost/geomedicpath/admin_con/services/edit/2', '2025-03-18', '12:13:50', 2, 'admin', 'admin'),
(134, '::1', 'http://localhost/geomedicpath/admin_con/services/listing', '2025-03-18', '12:18:18', 2, 'admin', 'admin'),
(135, '::1', 'http://localhost/geomedicpath/admin_con/services/edit/1', '2025-03-18', '12:18:20', 2, 'admin', 'admin'),
(136, '::1', 'http://localhost/geomedicpath/admin_con/services/listing', '2025-03-18', '12:18:24', 2, 'admin', 'admin'),
(137, '::1', 'http://localhost/geomedicpath/admin_con/services/edit/2', '2025-03-18', '12:20:18', 2, 'admin', 'admin'),
(138, '::1', 'http://localhost/geomedicpath/admin_con/services/listing', '2025-03-18', '12:20:25', 2, 'admin', 'admin'),
(139, '::1', 'http://localhost/geomedicpath/admin_con/services/listing', '2025-03-18', '12:38:50', 2, 'admin', 'admin'),
(140, '::1', 'http://localhost/geomedicpath/admin_con/testimonials/listing', '2025-03-18', '12:38:52', 2, 'admin', 'admin'),
(141, '::1', 'http://localhost/geomedicpath/admin_con/testimonials/listing', '2025-03-18', '12:45:04', 2, 'admin', 'admin'),
(142, '::1', 'http://localhost/geomedicpath/admin_con/blog/listing', '2025-03-18', '12:46:05', 2, 'admin', 'admin'),
(143, '::1', 'http://localhost/geomedicpath/admin_con/blog/listing', '2025-03-18', '12:46:16', 2, 'admin', 'admin'),
(144, '::1', 'http://localhost/geomedicpath/admin_con/blog/add', '2025-03-18', '12:46:17', 2, 'admin', 'admin'),
(145, '::1', 'http://localhost/geomedicpath/admin_con/blog/add', '2025-03-18', '12:46:36', 2, 'admin', 'admin'),
(146, '::1', 'http://localhost/geomedicpath/admin_con/blog/add', '2025-03-18', '12:46:54', 2, 'admin', 'admin'),
(147, '::1', 'http://localhost/geomedicpath/admin_con/blog/listing', '2025-03-18', '12:48:11', 2, 'admin', 'admin'),
(148, '::1', 'http://localhost/geomedicpath/admin_con/blog/edit/1', '2025-03-18', '12:48:13', 2, 'admin', 'admin'),
(149, '::1', 'http://localhost/geomedicpath/admin_con/blog/listing', '2025-03-18', '12:48:20', 2, 'admin', 'admin'),
(150, '::1', 'http://localhost/geomedicpath/admin_con/blog/listing', '2025-03-18', '12:54:21', 2, 'admin', 'admin'),
(151, '::1', 'http://localhost/geomedicpath/admin_con/blog/listing', '2025-03-18', '12:54:35', 2, 'admin', 'admin'),
(152, '::1', 'http://localhost/geomedicpath/admin_con/labs/listing', '2025-03-18', '12:54:36', 2, 'admin', 'admin'),
(153, '::1', 'http://localhost/geomedicpath/admin_con/labs/add', '2025-03-18', '12:54:37', 2, 'admin', 'admin'),
(154, '::1', 'http://localhost/geomedicpath/admin_con/labs/add', '2025-03-18', '12:55:17', 2, 'admin', 'admin'),
(155, '::1', 'http://localhost/geomedicpath/admin_con/labs/listing', '2025-03-18', '12:55:34', 2, 'admin', 'admin'),
(156, '::1', 'http://localhost/geomedicpath/admin_con/contact/listing', '2025-03-18', '12:58:57', 2, 'admin', 'admin'),
(157, '::1', 'http://localhost/geomedicpath/admin_con/contact/listing', '2025-03-18', '13:03:43', 2, 'admin', 'admin'),
(158, '::1', 'http://localhost/geomedicpath/admin_con/site_setting/edit/1', '2025-03-18', '13:03:44', 2, 'admin', 'admin'),
(159, '::1', 'http://localhost/geomedicpath/admin_con/site_setting/about/2', '2025-03-18', '13:03:49', 2, 'admin', 'admin'),
(160, '::1', 'http://localhost/geomedicpath/admin_con/site_setting/about/2', '2025-03-18', '13:03:58', 2, 'admin', 'admin'),
(161, '::1', 'http://localhost/geomedicpath/admin_con/site_setting/about/2', '2025-03-18', '13:04:12', 2, 'admin', 'admin'),
(162, '::1', 'http://localhost/geomedicpath/admin_con/site_setting/about/2', '2025-03-18', '13:04:23', 2, 'admin', 'admin'),
(163, '::1', 'http://localhost/geomedicpath/admin_con/services/listing', '2025-03-18', '14:11:23', 2, 'admin', 'admin'),
(164, '::1', 'http://localhost/geomedicpath/admin_con/services/edit/2', '2025-03-18', '14:11:25', 2, 'admin', 'admin'),
(165, '::1', 'http://localhost/geomadpathlab/admin/dashboard', '2025-03-23', '09:43:34', 2, 'admin', 'admin'),
(166, '::1', 'http://localhost/geomadpathlab/admin/dashboard', '2025-03-23', '09:50:59', 2, 'admin', 'admin'),
(167, '::1', 'http://localhost/geomadpathlab/admin_con/slider/listing', '2025-03-23', '09:51:00', 2, 'admin', 'admin'),
(168, '::1', 'http://localhost/geomadpathlab/admin_con/slider/edit/4', '2025-03-23', '09:51:03', 2, 'admin', 'admin'),
(169, '::1', 'http://localhost/geomadpathlab/admin_con/slider/listing', '2025-03-23', '09:51:19', 2, 'admin', 'admin'),
(170, '::1', 'http://localhost/geomadpathlab/admin_con/slider/add', '2025-03-23', '09:51:23', 2, 'admin', 'admin'),
(171, '::1', 'http://localhost/geomadpathlab/admin_con/slider/listing', '2025-03-23', '09:52:48', 2, 'admin', 'admin'),
(172, '::1', 'http://localhost/geomadpathlab/admin_con/slider/edit/6', '2025-03-23', '09:52:53', 2, 'admin', 'admin'),
(173, '::1', 'http://localhost/geomadpathlab/admin_con/slider/listing', '2025-03-23', '09:52:53', 2, 'admin', 'admin'),
(174, '::1', 'http://localhost/geomadpathlab/admin_con/slider/listing', '2025-03-23', '09:57:59', 2, 'admin', 'admin'),
(175, '::1', 'http://localhost/geomadpathlab/admin_con/content/about/1', '2025-03-23', '09:59:22', 2, 'admin', 'admin'),
(176, '::1', 'http://localhost/geomadpathlab/admin_con/content/about/1', '2025-03-23', '09:59:33', 2, 'admin', 'admin'),
(177, '::1', 'http://localhost/geomadpathlab/admin_con/content/about/1', '2025-03-23', '09:59:42', 2, 'admin', 'admin'),
(178, '::1', 'http://localhost/geomadpathlab/admin_con/sub_categories/listing', '2025-03-23', '10:06:41', 2, 'admin', 'admin'),
(179, '::1', 'http://localhost/geomadpathlab/admin_con/sub_categories/listing', '2025-03-23', '10:11:09', 2, 'admin', 'admin'),
(180, '::1', 'http://localhost/geomadpathlab/admin_con/process/listing', '2025-03-23', '10:11:10', 2, 'admin', 'admin'),
(181, '::1', 'http://localhost/geomadpathlab/admin_con/process/add', '2025-03-23', '10:11:12', 2, 'admin', 'admin'),
(182, '::1', 'http://localhost/geomadpathlab/admin_con/process/add', '2025-03-23', '10:11:33', 2, 'admin', 'admin'),
(183, '::1', 'http://localhost/geomadpathlab/admin_con/process/listing', '2025-03-23', '10:11:53', 2, 'admin', 'admin'),
(184, '::1', 'http://localhost/geomadpathlab/admin_con/process/listing', '2025-03-23', '10:12:28', 2, 'admin', 'admin'),
(185, '::1', 'http://localhost/geomadpathlab/admin_con/process/edit/1', '2025-03-23', '10:12:30', 2, 'admin', 'admin'),
(186, '::1', 'http://localhost/geomadpathlab/admin_con/process/listing', '2025-03-23', '10:12:34', 2, 'admin', 'admin'),
(187, '::1', 'http://localhost/geomadpathlab/admin_con/process/add', '2025-03-23', '10:12:37', 2, 'admin', 'admin'),
(188, '::1', 'http://localhost/geomadpathlab/admin_con/process/listing', '2025-03-23', '10:12:44', 2, 'admin', 'admin'),
(189, '::1', 'http://localhost/geomadpathlab/admin_con/process/add', '2025-03-23', '10:12:49', 2, 'admin', 'admin'),
(190, '::1', 'http://localhost/geomadpathlab/admin_con/process/listing', '2025-03-23', '10:12:50', 2, 'admin', 'admin'),
(191, '::1', 'http://localhost/geomadpathlab/admin_con/content/about/1', '2025-03-23', '10:15:12', 2, 'admin', 'admin'),
(192, '::1', 'http://localhost/geomadpathlab/admin_con/content/about/1', '2025-03-23', '10:15:28', 2, 'admin', 'admin'),
(193, '::1', 'http://localhost/geomadpathlab/admin_con/content/about/1', '2025-03-23', '10:16:03', 2, 'admin', 'admin'),
(194, '::1', 'http://localhost/geomadpathlab/admin_con/content/about/1', '2025-03-23', '10:16:14', 2, 'admin', 'admin'),
(195, '::1', 'http://localhost/geomadpathlab/admin_con/content/about/2', '2025-03-23', '10:16:16', 2, 'admin', 'admin'),
(196, '::1', 'http://localhost/geomadpathlab/admin_con/content/about/2', '2025-03-23', '10:16:35', 2, 'admin', 'admin'),
(197, '::1', 'http://localhost/geomadpathlab/admin_con/labs/listing', '2025-03-23', '10:24:10', 2, 'admin', 'admin'),
(198, '::1', 'http://localhost/geomadpathlab/admin_con/labs/edit/1', '2025-03-23', '10:24:13', 2, 'admin', 'admin'),
(199, '::1', 'http://localhost/geomadpathlab/admin_con/labs/edit/1', '2025-03-23', '10:29:24', 2, 'admin', 'admin'),
(200, '::1', 'http://localhost/geomadpathlab/admin_con/labs/edit/1', '2025-03-23', '10:29:43', 2, 'admin', 'admin'),
(201, '::1', 'http://localhost/geomadpathlab/admin_con/labs/edit/1', '2025-03-23', '10:29:58', 2, 'admin', 'admin'),
(202, '::1', 'http://localhost/geomadpathlab/admin_con/labs/listing', '2025-03-23', '10:30:10', 2, 'admin', 'admin'),
(203, '::1', 'http://localhost/geomadpathlab/admin_con/labs/edit/1', '2025-03-23', '10:30:12', 2, 'admin', 'admin'),
(204, '::1', 'http://localhost/geomadpathlab/admin_con/labs/edit/1', '2025-03-23', '10:30:39', 2, 'admin', 'admin'),
(205, '::1', 'http://localhost/geomadpathlab/admin_con/labs/edit/1', '2025-03-23', '10:30:42', 2, 'admin', 'admin'),
(206, '::1', 'http://localhost/geomadpathlab/admin_con/labs/listing', '2025-03-23', '10:30:53', 2, 'admin', 'admin'),
(207, '::1', 'http://localhost/geomadpathlab/admin_con/labs/edit/1', '2025-03-23', '10:31:13', 2, 'admin', 'admin'),
(208, '::1', 'http://localhost/geomadpathlab/admin_con/labs/listing', '2025-03-23', '10:31:15', 2, 'admin', 'admin'),
(209, '::1', 'http://localhost/geomadpathlab/admin_con/labs/edit/1', '2025-03-23', '10:31:16', 2, 'admin', 'admin'),
(210, '::1', 'http://localhost/geomadpathlab/admin_con/labs/edit/1', '2025-03-23', '10:31:46', 2, 'admin', 'admin'),
(211, '::1', 'http://localhost/geomadpathlab/admin_con/labs/edit/1', '2025-03-23', '10:32:31', 2, 'admin', 'admin'),
(212, '::1', 'http://localhost/geomadpathlab/admin_con/labs/listing', '2025-03-23', '10:32:33', 2, 'admin', 'admin'),
(213, '::1', 'http://localhost/geomadpathlab/admin_con/labs/edit/1', '2025-03-23', '10:32:35', 2, 'admin', 'admin'),
(214, '::1', 'http://localhost/geomadpathlab/admin_con/labs/listing', '2025-03-23', '10:32:38', 2, 'admin', 'admin'),
(215, '::1', 'http://localhost/geomadpathlab/admin_con/labs/edit/1', '2025-03-23', '10:32:39', 2, 'admin', 'admin'),
(216, '::1', 'http://localhost/geomadpathlab/admin_con/labs/listing', '2025-03-23', '10:35:15', 2, 'admin', 'admin'),
(217, '::1', 'http://localhost/geomadpathlab/admin_con/labs/edit/1', '2025-03-23', '10:35:16', 2, 'admin', 'admin'),
(218, '::1', 'http://localhost/geomadpathlab/admin_con/labs/listing', '2025-03-23', '10:35:23', 2, 'admin', 'admin'),
(219, '::1', 'http://localhost/geomadpathlab/admin_con/labs/listing', '2025-03-23', '10:35:45', 2, 'admin', 'admin'),
(220, '::1', 'http://localhost/geomadpathlab/admin_con/labs/edit/1', '2025-03-23', '10:37:08', 2, 'admin', 'admin'),
(221, '::1', 'http://localhost/geomadpathlab/admin_con/labs/listing', '2025-03-23', '10:37:12', 2, 'admin', 'admin'),
(222, '::1', 'http://localhost/geomadpathlab/admin_con/labs/listing', '2025-03-23', '10:38:26', 2, 'admin', 'admin'),
(223, '::1', 'http://localhost/geomadpathlab/admin_con/video/listing', '2025-03-23', '10:38:57', 2, 'admin', 'admin'),
(224, '::1', 'http://localhost/geomadpathlab/admin_con/video/add', '2025-03-23', '10:38:58', 2, 'admin', 'admin'),
(225, '::1', 'http://localhost/geomadpathlab/admin_con/video/listing', '2025-03-23', '10:39:07', 2, 'admin', 'admin'),
(226, '::1', 'http://localhost/geomadpathlab/admin_con/video/add', '2025-03-23', '10:39:12', 2, 'admin', 'admin'),
(227, '::1', 'http://localhost/geomadpathlab/admin_con/video/listing', '2025-03-23', '10:39:14', 2, 'admin', 'admin'),
(228, '::1', 'http://localhost/geomadpathlab/admin_con/video/edit/1', '2025-03-23', '10:39:16', 2, 'admin', 'admin'),
(229, '::1', 'http://localhost/geomadpathlab/admin_con/video/listing', '2025-03-23', '10:39:18', 2, 'admin', 'admin'),
(230, '::1', 'http://localhost/geomadpathlab/admin_con/contact/listing', '2025-03-23', '11:03:38', 2, 'admin', 'admin'),
(231, '::1', 'http://localhost/geomadpathlab/admin_con/content/about/1', '2025-03-23', '11:03:43', 2, 'admin', 'admin'),
(232, '::1', 'http://localhost/geomadpathlab/admin_con/content/about/1', '2025-03-23', '11:03:53', 2, 'admin', 'admin'),
(233, '::1', 'http://localhost/geomadpathlab/admin_con/site_setting/edit/1', '2025-03-23', '11:03:59', 2, 'admin', 'admin'),
(234, '::1', 'http://localhost/geomadpathlab/admin_con/site_setting/edit/1', '2025-03-23', '12:55:07', 2, 'admin', 'admin'),
(235, '::1', 'http://localhost/geomadpathlab/admin_con/booknow/listing', '2025-03-23', '12:55:09', 2, 'admin', 'admin'),
(236, '::1', 'http://localhost/geomadpathlab/admin_con/booknow/listing', '2025-03-23', '12:57:30', 2, 'admin', 'admin'),
(237, '::1', 'http://localhost/geomadpathlab/admin_con/booknow/listing', '2025-03-23', '12:57:37', 2, 'admin', 'admin'),
(238, '::1', 'http://localhost/geomadpathlab/admin_con/booknow/listing', '2025-03-23', '12:59:09', 2, 'admin', 'admin'),
(239, '::1', 'http://localhost/geomadpathlab/admin_con/booknow/listing', '2025-03-23', '12:59:18', 2, 'admin', 'admin'),
(240, '::1', 'http://localhost/geomadpathlab/admin_con/booknow/listing', '2025-03-23', '12:59:34', 2, 'admin', 'admin'),
(241, '::1', 'http://localhost/geomadpathlab/admin_con/booknow/listing', '2025-03-23', '12:59:39', 2, 'admin', 'admin'),
(242, '::1', 'http://localhost/geomadpathlab/admin_con/booknow/listing', '2025-03-23', '13:00:53', 2, 'admin', 'admin'),
(243, '::1', 'http://localhost/geomadpathlab/admin_con/registration/listing', '2025-03-23', '13:00:54', 2, 'admin', 'admin'),
(244, '::1', 'http://localhost/geomadpathlab/admin_con/registration/listing', '2025-03-23', '13:01:23', 2, 'admin', 'admin'),
(245, '::1', 'http://localhost/geomadpathlab/admin_con/registration/listing', '2025-03-23', '13:01:39', 2, 'admin', 'admin'),
(246, '::1', 'http://localhost/geomadpathlab/admin_con/registration/listing', '2025-03-23', '13:01:59', 2, 'admin', 'admin'),
(247, '::1', 'http://localhost/geomadpathlab/admin_con/registration/listing', '2025-03-23', '13:02:05', 2, 'admin', 'admin'),
(248, '::1', 'http://localhost/geomadpathlab/admin_con/registration/listing', '2025-03-23', '13:02:09', 2, 'admin', 'admin'),
(249, '::1', 'http://localhost/geomadpathlab/admin_con/registration/listing', '2025-03-23', '13:06:37', 2, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `id` int(11) NOT NULL,
  `image` text NOT NULL,
  `name` text NOT NULL,
  `slug` text NOT NULL,
  `content` blob NOT NULL,
  `status` int(11) NOT NULL,
  `addeddate` datetime NOT NULL,
  `modifieddate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`id`, `image`, `name`, `slug`, `content`, `status`, `addeddate`, `modifieddate`) VALUES
(1, '1742282291.jpg', 'Dolor clita vero elitr sea stet dolor justo diam', 'dolor-clita-vero-elitr-sea-stet-dolor-justo-diam', 0x3c70207374796c653d226d617267696e2d626f74746f6d3a203172656d3b20636f6c6f723a20726762283133322c203134322c20313539293b20666f6e742d66616d696c793a20526f626f746f2c2073616e732d73657269663b20666f6e742d73697a653a20313670783b223e4c6f72656d20697073756d20646f6c6f722073697420616d657420636f6e7365637465747572206164697069736963696e6720656c69742e204576656e696574206174206675676974206d696e757320736564206e656d6f206173706572696f726573206c61626f72696f73616d206d61696f726573206d6f646920657870656469746120646f6c6f72696275732c2073756e74207369742071756961207665726f2065756d2069737465206f666669636969733f204e697369206d61676e6920766f6c7570746174756d206675676120626561746165206e6968696c206c61626f72696f73616d20646963746120636f6e736571756174757220696d7065646974206163637573616e7469756d2120537573636970697420656171756520697073616d20706f72726f2073696e742c20706f7373696d75732071756962757364616d20626c616e64697469697320646f6c6f7269627573206120646f6c6f72756d2064697374696e6374696f2070726f766964656e742071756964656d20696420656c6967656e646920726570756469616e6461652063756d717565206e656d6f20617373756d656e6461206f7074696f2c20697073756d2c207072616573656e7469756d207365642076656c69742066616365726520647563696d75733f20496d70656469742071756962757364616d206e6563657373697461746962757320646f6c6f722e20446963746120766f6c75707461746962757320686963206170657269616d206c61626f72696f73616d2e20437570696469746174652c206661636572652071756f732e205175696120706f7373696d757320696c6c756d206569757320766f6c757074617320657865726369746174696f6e656d2070726f766964656e742c20766f6c7570746174756d20696e76656e746f72652064656c656e69746920617373756d656e6461207669746165206f6d6e697320697073756d2c206e756d7175616d20616c6961732063756d2063756c706120696c6c6f206d61676e616d206578636570747572692065737420636f727275707469213c2f703e3c70207374796c653d226d617267696e2d626f74746f6d3a203172656d3b20636f6c6f723a20726762283133322c203134322c20313539293b20666f6e742d66616d696c793a20526f626f746f2c2073616e732d73657269663b20666f6e742d73697a653a20313670783b223e4c6f72656d20697073756d20646f6c6f722073697420616d657420636f6e7365637465747572206164697069736963696e6720656c69742e204576656e696574206174206675676974206d696e757320736564206e656d6f206173706572696f726573206c61626f72696f73616d206d61696f726573206d6f646920657870656469746120646f6c6f72696275732c2073756e74207369742071756961207665726f2065756d2069737465206f666669636969733f204e697369206d61676e6920766f6c7570746174756d206675676120626561746165206e6968696c206c61626f72696f73616d20646963746120636f6e736571756174757220696d7065646974206163637573616e7469756d2120537573636970697420656171756520697073616d20706f72726f2073696e742c20706f7373696d75732071756962757364616d20626c616e64697469697320646f6c6f7269627573206120646f6c6f72756d2064697374696e6374696f2070726f766964656e742071756964656d20696420656c6967656e646920726570756469616e6461652063756d717565206e656d6f20617373756d656e6461206f7074696f2c20697073756d2c207072616573656e7469756d207365642076656c69742066616365726520647563696d75733f20496d70656469742071756962757364616d206e6563657373697461746962757320646f6c6f722e20446963746120766f6c75707461746962757320686963206170657269616d206c61626f72696f73616d2e20437570696469746174652c206661636572652071756f732e205175696120706f7373696d757320696c6c756d206569757320766f6c757074617320657865726369746174696f6e656d2070726f766964656e742c20766f6c7570746174756d20696e76656e746f72652064656c656e69746920617373756d656e6461207669746165206f6d6e697320697073756d2c206e756d7175616d20616c6961732063756d2063756c706120696c6c6f206d61676e616d206578636570747572692065737420636f727275707469213c2f703e3c70207374796c653d226d617267696e2d626f74746f6d3a203172656d3b20636f6c6f723a20726762283133322c203134322c20313539293b20666f6e742d66616d696c793a20526f626f746f2c2073616e732d73657269663b20666f6e742d73697a653a20313670783b223e4c6f72656d20697073756d20646f6c6f722073697420616d657420636f6e7365637465747572206164697069736963696e6720656c69742e204576656e696574206174206675676974206d696e757320736564206e656d6f206173706572696f726573206c61626f72696f73616d206d61696f726573206d6f646920657870656469746120646f6c6f72696275732c2073756e74207369742071756961207665726f2065756d2069737465206f666669636969733f204e697369206d61676e6920766f6c7570746174756d206675676120626561746165206e6968696c206c61626f72696f73616d20646963746120636f6e736571756174757220696d7065646974206163637573616e7469756d2120537573636970697420656171756520697073616d20706f72726f2073696e742c20706f7373696d75732071756962757364616d20626c616e64697469697320646f6c6f7269627573206120646f6c6f72756d2064697374696e6374696f2070726f766964656e742071756964656d20696420656c6967656e646920726570756469616e6461652063756d717565206e656d6f20617373756d656e6461206f7074696f2c20697073756d2c207072616573656e7469756d207365642076656c69742066616365726520647563696d75733f20496d70656469742071756962757364616d206e6563657373697461746962757320646f6c6f722e20446963746120766f6c75707461746962757320686963206170657269616d206c61626f72696f73616d2e20437570696469746174652c206661636572652071756f732e205175696120706f7373696d757320696c6c756d206569757320766f6c757074617320657865726369746174696f6e656d2070726f766964656e742c20766f6c7570746174756d20696e76656e746f72652064656c656e69746920617373756d656e6461207669746165206f6d6e697320697073756d2c206e756d7175616d20616c6961732063756d2063756c706120696c6c6f206d61676e616d206578636570747572692065737420636f727275707469213c2f703e, 1, '2025-03-18 12:48:11', '2025-03-18 12:48:20');

-- --------------------------------------------------------

--
-- Table structure for table `booknow`
--

CREATE TABLE `booknow` (
  `id` int(11) NOT NULL,
  `request_id` text NOT NULL,
  `name` text NOT NULL,
  `email` text NOT NULL,
  `mobile` text NOT NULL,
  `address` text NOT NULL,
  `select_date` date NOT NULL,
  `select_time` text NOT NULL,
  `test_id` int(11) NOT NULL,
  `test_name` text NOT NULL,
  `amount` text NOT NULL,
  `status` int(11) NOT NULL,
  `addeddate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `booknow`
--

INSERT INTO `booknow` (`id`, `request_id`, `name`, `email`, `mobile`, `address`, `select_date`, `select_time`, `test_id`, `test_name`, `amount`, `status`, `addeddate`) VALUES
(4, '67dfb64669dce', 'asdasd', 'email2@gmail.com', '9856472360', 'dfdf', '2025-03-23', '2:00 PM', 2, 'Individual Blood Tests', '500', 1, '2025-03-23'),
(5, '67dfb64e570cf', 'asdasd', 'email2@gmail.com', '9856472360', 'dfdf', '2025-03-23', '2:00 PM', 2, 'Individual Blood Tests', '500', 1, '2025-03-23'),
(6, '67dfb658170f9', 'asdasd', 'email2@gmail.com565', '9856472360', 'dfdf', '2025-03-23', '2:00 PM', 2, 'Individual Blood Tests', '500', 1, '2025-03-23'),
(7, '67dfb66123568', 'asdasd', 'email2@gmail.com565', '9856472360', 'dfdf', '2025-03-23', '2:00 PM', 2, 'Individual Blood Tests', '500', 1, '2025-03-23'),
(8, '67dfb6669e795', 'asdasd', 'email2@gmail.com565', '985647236056', 'dfdf', '2025-03-23', '2:00 PM', 2, 'Individual Blood Tests', '500', 1, '2025-03-23'),
(9, '67dfb6b3a7ea2', 'dsfdsf', 'dsfsdf', '443', '43fdsgfg', '2025-03-23', '1:00 PM', 2, 'Individual Blood Tests', '500', 1, '2025-03-23');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `slug` text NOT NULL,
  `status` int(11) NOT NULL,
  `addeddate` datetime NOT NULL,
  `modifieddate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `slug`, `status`, `addeddate`, `modifieddate`) VALUES
(1, 'Health Packages', 'health-packages', 1, '2025-03-17 15:35:56', '2025-03-18 11:28:57'),
(2, 'Individual Blood Test', 'individual-blood-test', 1, '2025-03-17 15:36:08', '2025-03-18 11:28:55'),
(3, 'Radiology', 'radiology', 1, '2025-03-17 15:36:14', '2025-03-18 11:28:53');

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

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
  `subject` text NOT NULL,
  `message` text NOT NULL,
  `addeddate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `mobile`, `subject`, `message`, `addeddate`) VALUES
(1, 'wol 1', 'wol1@gmail.com', '123456789', 'Test', 'teste ete st', '2024-08-24 14:18:28'),
(2, 'test', 'wolverine@gmail.com', '12346456546', 'asdas', 'ddd', '2025-03-18 12:58:54'),
(3, 'Address: J-185, Delta-2, Greater Noida UP-201308', 'email2@gmail.com', '9856472360', 'dsfsfds', 'sfdsdf', '2025-03-23 10:42:00');

-- --------------------------------------------------------

--
-- Table structure for table `content`
--

CREATE TABLE `content` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `content` longblob NOT NULL,
  `logo` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `content`
--

INSERT INTO `content` (`id`, `name`, `content`, `logo`) VALUES
(1, 'About Us  ', 0x3c64697620636c6173733d226d622d3422207374796c653d22636f6c6f723a20726762283133322c203134322c20313539293b20666f6e742d66616d696c793a20526f626f746f2c2073616e732d73657269663b20666f6e742d73697a653a20313670783b223e3c683520636c6173733d22642d696e6c696e652d626c6f636b20746578742d7072696d61727920746578742d75707065726361736520626f726465722d626f74746f6d20626f726465722d3522207374796c653d22666f6e742d66616d696c793a2022526f626f746f20436f6e64656e736564222c2073616e732d73657269663b20636f6c6f723a20726762283139352c2032342c2037292021696d706f7274616e743b20626f726465722d77696474683a203570782021696d706f7274616e743b223e41626f75742055733c2f68353e3c683120636c6173733d22646973706c61792d3422207374796c653d22666f6e742d66616d696c793a2022526f626f746f20436f6e64656e736564222c2073616e732d73657269663b20666f6e742d7765696768743a203730303b20636f6c6f723a207267622832392c2034322c203737293b223e41636375726174652c2052656c6961626c652c20616e64204166666f726461626c6520426c6f6f642054657374732061742047656f6d656469706174683c2f68313e3c2f6469763e3c70207374796c653d226d617267696e2d626f74746f6d3a203172656d3b20636f6c6f723a20726762283133322c203134322c20313539293b20666f6e742d66616d696c793a20526f626f746f2c2073616e732d73657269663b20666f6e742d73697a653a20313670783b223e47656f6d65646970617468206973206120636f6c6c61626f72617469766520636f6e63657074206f662070726f766964696e67206d6f7374206d65646963616c20736572766963657320756e646572206f6e6520756d6272656c6c612c2077652074616b6520696d6d656e736520707269646520616e6420686f6e6f7220696e2073657276696e67206576657279206e656564206f6620696e646976696475616c732c20636f72706f7261746560732c20616e6420636f6d70616e6965732062792070726f766964696e6720426c6f6f642074657374732c20526164696f6c6f67792c20616e64206d65646963616c20736572766963657320617420746865697220646f6f7220737465702e3c2f703e3c70207374796c653d226d617267696e2d626f74746f6d3a203172656d3b20636f6c6f723a20726762283133322c203134322c20313539293b20666f6e742d66616d696c793a20526f626f746f2c2073616e732d73657269663b20666f6e742d73697a653a20313670783b223e54686973206973206f6e652073756368206f6620697473206b696e64206f66206120636f6e6365707420746861742070726f6d6973657320746f2064656c69766572207175616c6974792077697468206d6178206166666f72646162696c6974792c207765206861766520746965207570732077697468207175616c697479206c6162732c20446f63746f72732c20616e64206d65646963616c2063656e746572732074686174206d616e616765732077697468206d61696e7461696e656420696e7465726e6174696f6e616c207374616e646172647320616e642068617320616c6c2072657175697265642061636372656469746174696f6e7320746f2072756e20616e79206d65646963616c207365727669636520696e20696e6469612e3c2f703e3c64697620636c6173733d22726f7720672d332070742d3322207374796c653d222d2d62732d6775747465722d783a203172656d3b202d2d62732d6775747465722d793a203172656d3b206d617267696e2d746f703a2063616c6328766172282d2d62732d6775747465722d7929202a202d31293b206d617267696e2d72696768743a2063616c6328766172282d2d62732d6775747465722d7829202f202d32293b206d617267696e2d6c6566743a2063616c6328766172282d2d62732d6775747465722d7829202f202d32293b20636f6c6f723a20726762283133322c203134322c20313539293b20666f6e742d66616d696c793a20526f626f746f2c2073616e732d73657269663b20666f6e742d73697a653a20313670783b223e3c64697620636c6173733d22636f6c2d736d2d3320636f6c2d3622207374796c653d22666c65782d62617369733a206175746f3b2077696474683a203138372e39383670783b206d61782d77696474683a20313030253b2070616464696e672d72696768743a2063616c6328766172282d2d62732d6775747465722d7829202f2032293b2070616464696e672d6c6566743a2063616c6328766172282d2d62732d6775747465722d7829202f2032293b206d617267696e2d746f703a20766172282d2d62732d6775747465722d79293b223e3c64697620636c6173733d2262672d6c6967687420746578742d63656e74657220726f756e6465642d636972636c652070792d3422207374796c653d226261636b67726f756e642d636f6c6f723a20726762283233392c203234352c20323439292021696d706f7274616e743b223e3c7370616e20636c6173733d2266612066612d33782066612d757365722d6d6420746578742d7072696d617279206d622d3322207374796c653d22636f6c6f723a20726762283139352c2032342c2037292021696d706f7274616e743b223e3c2f7370616e3e3c683620636c6173733d226d622d3022207374796c653d22666f6e742d66616d696c793a2022526f626f746f20436f6e64656e736564222c2073616e732d73657269663b20636f6c6f723a207267622832392c2034322c203737293b223e5175616c69666965643c736d616c6c20636c6173733d22642d626c6f636b20746578742d7072696d61727922207374796c653d22666f6e742d73697a653a20302e383735656d3b20636f6c6f723a20726762283139352c2032342c2037292021696d706f7274616e743b223e446f63746f72733c2f736d616c6c3e3c2f68363e3c2f6469763e3c2f6469763e3c64697620636c6173733d22636f6c2d736d2d3320636f6c2d3622207374796c653d22666c65782d62617369733a206175746f3b2077696474683a203138372e39383670783b206d61782d77696474683a20313030253b2070616464696e672d72696768743a2063616c6328766172282d2d62732d6775747465722d7829202f2032293b2070616464696e672d6c6566743a2063616c6328766172282d2d62732d6775747465722d7829202f2032293b206d617267696e2d746f703a20766172282d2d62732d6775747465722d79293b223e3c64697620636c6173733d2262672d6c6967687420746578742d63656e74657220726f756e6465642d636972636c652070792d3422207374796c653d226261636b67726f756e642d636f6c6f723a20726762283233392c203234352c20323439292021696d706f7274616e743b223e3c7370616e20636c6173733d2266612066612d33782066612d6d6963726f73636f706520746578742d7072696d617279206d622d3322207374796c653d22636f6c6f723a20726762283139352c2032342c2037292021696d706f7274616e743b223e3c2f7370616e3e3c683620636c6173733d226d622d3022207374796c653d22666f6e742d66616d696c793a2022526f626f746f20436f6e64656e736564222c2073616e732d73657269663b20636f6c6f723a207267622832392c2034322c203737293b223e41636375726174653c736d616c6c20636c6173733d22642d626c6f636b20746578742d7072696d61727922207374796c653d22666f6e742d73697a653a20302e383735656d3b20636f6c6f723a20726762283139352c2032342c2037292021696d706f7274616e743b223e54657374696e673c2f736d616c6c3e3c2f68363e3c2f6469763e3c2f6469763e3c64697620636c6173733d22636f6c2d736d2d3320636f6c2d3622207374796c653d22666c65782d62617369733a206175746f3b2077696474683a203138372e39383670783b206d61782d77696474683a20313030253b2070616464696e672d72696768743a2063616c6328766172282d2d62732d6775747465722d7829202f2032293b2070616464696e672d6c6566743a2063616c6328766172282d2d62732d6775747465722d7829202f2032293b206d617267696e2d746f703a20766172282d2d62732d6775747465722d79293b223e3c64697620636c6173733d2262672d6c6967687420746578742d63656e74657220726f756e6465642d636972636c652070792d3422207374796c653d226261636b67726f756e642d636f6c6f723a20726762283233392c203234352c20323439292021696d706f7274616e743b223e3c7370616e20636c6173733d226661732066612d33782066612d7669616c7320746578742d7072696d617279206d622d3322207374796c653d22636f6c6f723a20726762283139352c2032342c2037292021696d706f7274616e743b223e3c2f7370616e3e3c683620636c6173733d226d622d3022207374796c653d22666f6e742d66616d696c793a2022526f626f746f20436f6e64656e736564222c2073616e732d73657269663b20636f6c6f723a207267622832392c2034322c203737293b223e5061696e6c6573733c736d616c6c20636c6173733d22642d626c6f636b20746578742d7072696d61727922207374796c653d22666f6e742d73697a653a20302e383735656d3b20636f6c6f723a20726762283139352c2032342c2037292021696d706f7274616e743b223e53616d706c6520436f6c6c656374696f6e3c2f736d616c6c3e3c2f68363e3c2f6469763e3c2f6469763e3c2f6469763e, '1742704182.png'),
(2, 'Bootom Home', 0x3c64697620636c6173733d226d622d3422207374796c653d22636f6c6f723a20726762283133322c203134322c20313539293b20666f6e742d66616d696c793a20526f626f746f2c2073616e732d73657269663b20666f6e742d73697a653a20313670783b223e3c683520636c6173733d22642d696e6c696e652d626c6f636b20746578742d7072696d61727920746578742d75707065726361736520626f726465722d626f74746f6d20626f726465722d3522207374796c653d22666f6e742d66616d696c793a202671756f743b526f626f746f20436f6e64656e7365642671756f743b2c2073616e732d73657269663b20636f6c6f723a20726762283139352c2032342c2037292021696d706f7274616e743b20626f726465722d77696474683a203570782021696d706f7274616e743b223e426c6f6f6420546573743c2f68353e3c683120636c6173733d22646973706c61792d3422207374796c653d22666f6e742d66616d696c793a202671756f743b526f626f746f20436f6e64656e7365642671756f743b2c2073616e732d73657269663b20666f6e742d7765696768743a203730303b20636f6c6f723a207267622832392c2034322c203737293b223e496e646976696475616c20426c6f6f6420546573747320e28093204b6e6f7720596f7572204865616c7468204265747465723c2f68313e3c2f6469763e3c70207374796c653d226d617267696e2d626f74746f6d3a203172656d3b20636f6c6f723a20726762283133322c203134322c20313539293b20666f6e742d66616d696c793a20526f626f746f2c2073616e732d73657269663b20666f6e742d73697a653a20313670783b223e2241742047656f6d656469706174682c2077652062656c69657665207468617420756e6465727374616e64696e6720796f7572206865616c7468207374617274732077697468206b6e6f77696e67207468652064657461696c732e204f757220696e646976696475616c20626c6f6f64207465737473206f6666657220796f7520612073696d706c6520616e64206566666563746976652077617920746f206761696e2076616c7561626c6520696e73696768747320696e746f20796f7572206f766572616c6c2077656c6c6e6573732e205768657468657220796f75277265206c6f6f6b696e6720746f206d6f6e69746f72207370656369666963206865616c746820636f6e646974696f6e73206f72206a7573742077616e7420746f20737461792070726f616374697665207769746820796f7572206865616c74682c206f757220626c6f6f642074657374732070726f7669646520616363757261746520616e6420706572736f6e616c697a656420726573756c74732e205769746820656173792061636365737320746f2064657461696c6564207265706f7274732c20796f75e280996c6c2062652061626c6520746f206d616b6520696e666f726d6564206465636973696f6e732061626f757420796f75722077656c6c2d6265696e672e20547275737420757320746f2068656c7020796f752073746179206f6e20746f70206f6620796f7572206865616c7468e280946f6e65207465737420617420612074696d652e223c2f703e3c64697620636c6173733d22726f7720672d332070742d3322207374796c653d222d2d62732d6775747465722d783a203172656d3b202d2d62732d6775747465722d793a203172656d3b206d617267696e2d746f703a2063616c6328766172282d2d62732d6775747465722d7929202a202d31293b206d617267696e2d72696768743a2063616c6328766172282d2d62732d6775747465722d7829202f202d32293b206d617267696e2d6c6566743a2063616c6328766172282d2d62732d6775747465722d7829202f202d32293b20636f6c6f723a20726762283133322c203134322c20313539293b20666f6e742d66616d696c793a20526f626f746f2c2073616e732d73657269663b20666f6e742d73697a653a20313670783b223e3c64697620636c6173733d22636f6c2d736d2d3320636f6c2d3622207374796c653d22666c65782d62617369733a206175746f3b2077696474683a203138372e39383670783b206d61782d77696474683a20313030253b2070616464696e672d72696768743a2063616c6328766172282d2d62732d6775747465722d7829202f2032293b2070616464696e672d6c6566743a2063616c6328766172282d2d62732d6775747465722d7829202f2032293b206d617267696e2d746f703a20766172282d2d62732d6775747465722d79293b223e3c64697620636c6173733d2262672d6c6967687420746578742d63656e74657220726f756e6465642d636972636c652070792d3422207374796c653d226261636b67726f756e642d636f6c6f723a20726762283233392c203234352c20323439292021696d706f7274616e743b223e3c7370616e20636c6173733d2266612066612d33782066612d757365722d6d6420746578742d7072696d617279206d622d3322207374796c653d22636f6c6f723a20726762283139352c2032342c2037292021696d706f7274616e743b223e3c2f7370616e3e3c683620636c6173733d226d622d3022207374796c653d22666f6e742d66616d696c793a202671756f743b526f626f746f20436f6e64656e7365642671756f743b2c2073616e732d73657269663b20636f6c6f723a207267622832392c2034322c203737293b223e5175616c69666965643c736d616c6c20636c6173733d22642d626c6f636b20746578742d7072696d61727922207374796c653d22666f6e742d73697a653a20302e383735656d3b20636f6c6f723a20726762283139352c2032342c2037292021696d706f7274616e743b223e446f63746f72733c2f736d616c6c3e3c2f68363e3c2f6469763e3c2f6469763e3c64697620636c6173733d22636f6c2d736d2d3320636f6c2d3622207374796c653d22666c65782d62617369733a206175746f3b2077696474683a203138372e39383670783b206d61782d77696474683a20313030253b2070616464696e672d72696768743a2063616c6328766172282d2d62732d6775747465722d7829202f2032293b2070616464696e672d6c6566743a2063616c6328766172282d2d62732d6775747465722d7829202f2032293b206d617267696e2d746f703a20766172282d2d62732d6775747465722d79293b223e3c64697620636c6173733d2262672d6c6967687420746578742d63656e74657220726f756e6465642d636972636c652070792d3422207374796c653d226261636b67726f756e642d636f6c6f723a20726762283233392c203234352c20323439292021696d706f7274616e743b223e3c7370616e20636c6173733d2266612066612d33782066612d6d6963726f73636f706520746578742d7072696d617279206d622d3322207374796c653d22636f6c6f723a20726762283139352c2032342c2037292021696d706f7274616e743b223e3c2f7370616e3e3c683620636c6173733d226d622d3022207374796c653d22666f6e742d66616d696c793a202671756f743b526f626f746f20436f6e64656e7365642671756f743b2c2073616e732d73657269663b20636f6c6f723a207267622832392c2034322c203737293b223e41636375726174653c736d616c6c20636c6173733d22642d626c6f636b20746578742d7072696d61727922207374796c653d22666f6e742d73697a653a20302e383735656d3b20636f6c6f723a20726762283139352c2032342c2037292021696d706f7274616e743b223e54657374696e673c2f736d616c6c3e3c2f68363e3c2f6469763e3c2f6469763e3c64697620636c6173733d22636f6c2d736d2d3320636f6c2d3622207374796c653d22666c65782d62617369733a206175746f3b2077696474683a203138372e39383670783b206d61782d77696474683a20313030253b2070616464696e672d72696768743a2063616c6328766172282d2d62732d6775747465722d7829202f2032293b2070616464696e672d6c6566743a2063616c6328766172282d2d62732d6775747465722d7829202f2032293b206d617267696e2d746f703a20766172282d2d62732d6775747465722d79293b223e3c64697620636c6173733d2262672d6c6967687420746578742d63656e74657220726f756e6465642d636972636c652070792d3422207374796c653d226261636b67726f756e642d636f6c6f723a20726762283233392c203234352c20323439292021696d706f7274616e743b223e3c7370616e20636c6173733d226661732066612d33782066612d7669616c7320746578742d7072696d617279206d622d3322207374796c653d22636f6c6f723a20726762283139352c2032342c2037292021696d706f7274616e743b223e3c2f7370616e3e3c683620636c6173733d226d622d3022207374796c653d22666f6e742d66616d696c793a202671756f743b526f626f746f20436f6e64656e7365642671756f743b2c2073616e732d73657269663b20636f6c6f723a207267622832392c2034322c203737293b223e5061696e6c6573733c736d616c6c20636c6173733d22642d626c6f636b20746578742d7072696d61727922207374796c653d22666f6e742d73697a653a20302e383735656d3b20636f6c6f723a20726762283139352c2032342c2037292021696d706f7274616e743b223e53616d706c6520436f6c6c656374696f6e3c2f736d616c6c3e3c2f68363e3c2f6469763e3c2f6469763e3c2f6469763e, '1742705195.webp');

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
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

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
-- Table structure for table `labs`
--

CREATE TABLE `labs` (
  `id` int(11) NOT NULL,
  `image` text NOT NULL,
  `name` text NOT NULL,
  `slug` text NOT NULL,
  `status` int(11) NOT NULL,
  `addeddate` datetime NOT NULL,
  `modifieddate` datetime NOT NULL,
  `multiple_image_json` text NOT NULL,
  `content` longblob NOT NULL,
  `bottomcontent` longblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `labs`
--

INSERT INTO `labs` (`id`, `image`, `name`, `slug`, `status`, `addeddate`, `modifieddate`, `multiple_image_json`, `content`, `bottomcontent`) VALUES
(1, '1742282733.jpg', 'Address: J-185, Delta-2, Greater Noida UP-201308', 'address-j-185-delta-2-greater-noida-up-201308', 1, '2025-03-18 12:55:33', '2025-03-23 10:37:12', '[\"blood-test.webp\",\"blood-test.webp\"]', 0x3c64697620636c6173733d226d622d3422207374796c653d22636f6c6f723a20726762283133322c203134322c20313539293b20666f6e742d66616d696c793a20526f626f746f2c2073616e732d73657269663b20666f6e742d73697a653a20313670783b223e3c683520636c6173733d22642d696e6c696e652d626c6f636b20746578742d7072696d61727920746578742d75707065726361736520626f726465722d626f74746f6d20626f726465722d3522207374796c653d22666f6e742d66616d696c793a2022526f626f746f20436f6e64656e736564222c2073616e732d73657269663b20636f6c6f723a20726762283139352c2032342c2037292021696d706f7274616e743b20626f726465722d77696474683a203570782021696d706f7274616e743b223e41626f75742055733c2f68353e3c683120636c6173733d22646973706c61792d3422207374796c653d22666f6e742d66616d696c793a2022526f626f746f20436f6e64656e736564222c2073616e732d73657269663b20666f6e742d7765696768743a203730303b20636f6c6f723a207267622832392c2034322c203737293b223e41636375726174652c2052656c6961626c652c20616e64204166666f726461626c6520426c6f6f642054657374732061742047656f6d656469706174683c2f68313e3c2f6469763e3c70207374796c653d226d617267696e2d626f74746f6d3a203172656d3b20636f6c6f723a20726762283133322c203134322c20313539293b20666f6e742d66616d696c793a20526f626f746f2c2073616e732d73657269663b20666f6e742d73697a653a20313670783b223e47656f6d65646970617468206973206120636f6c6c61626f72617469766520636f6e63657074206f662070726f766964696e67206d6f7374206d65646963616c20736572766963657320756e646572206f6e6520756d6272656c6c612c2077652074616b6520696d6d656e736520707269646520616e6420686f6e6f7220696e2073657276696e67206576657279206e656564206f6620696e646976696475616c732c20636f72706f7261746560732c20616e6420636f6d70616e6965732062792070726f766964696e6720426c6f6f642074657374732c20526164696f6c6f67792c20616e64206d65646963616c20736572766963657320617420746865697220646f6f7220737465702e3c2f703e3c70207374796c653d226d617267696e2d626f74746f6d3a203172656d3b20636f6c6f723a20726762283133322c203134322c20313539293b20666f6e742d66616d696c793a20526f626f746f2c2073616e732d73657269663b20666f6e742d73697a653a20313670783b223e54686973206973206f6e652073756368206f6620697473206b696e64206f66206120636f6e6365707420746861742070726f6d6973657320746f2064656c69766572207175616c6974792077697468206d6178206166666f72646162696c6974792c207765206861766520746965207570732077697468207175616c697479206c6162732c20446f63746f72732c20616e64206d65646963616c2063656e746572732074686174206d616e616765732077697468206d61696e7461696e656420696e7465726e6174696f6e616c207374616e646172647320616e642068617320616c6c2072657175697265642061636372656469746174696f6e7320746f2072756e20616e79206d65646963616c207365727669636520696e20696e6469612e3c2f703e, 0x3c703e3c7370616e207374796c653d22636f6c6f723a20726762283133322c203134322c20313539293b20666f6e742d66616d696c793a20526f626f746f2c2073616e732d73657269663b20666f6e742d73697a653a20313870783b223e4c6f72656d2c20697073756d20646f6c6f722073697420616d657420636f6e7365637465747572206164697069736963696e6720656c69742e20456f7320726570756469616e64616520696e636964756e74206d6f6c6c6974696120656c6967656e64692074656d706f72612c20646f6c6f72756d20696d70656469742064656c656374757320617420647563696d7573206973746520636f727275707469206c617564616e7469756d207365642071756f20666163657265206c61626f72756d20656e696d206576656e696574206163637573616e7469756d206578636570747572692063756c70612c206f6666696369697320706f72726f206675676974207175616d20726570656c6c656e647573212043756d7175652076656c20766f6c7570746174656d20616c697175616d2071756f6420696d706564697420646f6c6f72756d20636f6e736571756174757220726570656c6c6174207175616d2c20766f6c7570746174756d20646f6c6f72656d7175652c206675676120736165706520616c6961732c206e697369206d6f646920726570756469616e6461652e20446f6c6f72656d20746f74616d20726572756d2c20696e76656e746f72652074656d706f726962757320766f6c757074617320616d657420657865726369746174696f6e656d206d6f6c657374696173206f62636165636174692066756769742c207175616572617420766f6c757074617465732063756c7061206469676e697373696d6f7320616e696d69207175696120646f6c6f72656d7175652071756165206f64696f206e617475733f20566f6c7570746174756d2c20706172696174757220646963746120706572666572656e646973206465736572756e742076657269746174697320726570656c6c656e647573206173706572696f72657320646f6c6f726962757320656e696d2071756f2c2065756d20756e64652064656c656e6974692061737065726e617475722063756d20646f6c6f72656d717565206175742c20636f72706f726973206c61626f72756d2063756c7061206174717565206e756d7175616d3f2053616570652c206e6f6e2e3c2f7370616e3e3c2f703e);

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
(14, '2', '67d7f193782e9::1', '::1', '2025-03-17', '15:25:31', 'admin', 'admin', NULL, NULL, 0),
(15, '2', '67df8a6e0b1e5::1', '::1', '2025-03-23', '09:43:34', 'admin', 'admin', NULL, NULL, 0),
(16, '14', '67dfbadd8560f::1', '::1', '2025-03-23', '13:10:13', 'email2@gmail.com', '9856472360', NULL, NULL, 0);

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
(27, NULL, NULL, NULL, NULL, NULL, 'radiology', NULL, NULL, NULL, NULL, NULL, 0),
(28, NULL, NULL, NULL, NULL, NULL, 'individual-blood-test', NULL, NULL, NULL, NULL, NULL, 0),
(29, NULL, NULL, NULL, NULL, NULL, 'health-packages', NULL, NULL, NULL, NULL, NULL, 0),
(33, NULL, NULL, NULL, NULL, NULL, 'mri', NULL, NULL, NULL, NULL, NULL, 0),
(34, NULL, NULL, NULL, NULL, NULL, 'ultrasound', NULL, NULL, NULL, NULL, NULL, 0),
(35, NULL, NULL, NULL, NULL, NULL, 'x-ray', NULL, NULL, NULL, NULL, NULL, 0),
(44, NULL, NULL, NULL, NULL, NULL, 'hehsrgs', NULL, NULL, NULL, NULL, NULL, 0),
(49, NULL, NULL, NULL, NULL, NULL, 'adfasdas', NULL, NULL, NULL, NULL, NULL, 0),
(50, NULL, NULL, NULL, NULL, NULL, 'individual-blood-tests', NULL, NULL, NULL, NULL, NULL, 0),
(52, NULL, NULL, NULL, NULL, NULL, 'dolor-clita-vero-elitr-sea-stet-dolor-justo-diam', NULL, NULL, NULL, NULL, NULL, 0),
(53, NULL, NULL, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, 0),
(61, NULL, NULL, NULL, NULL, NULL, 'address-j-185-delta-2-greater-noida-up-201308', NULL, NULL, NULL, NULL, NULL, 0);

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

-- --------------------------------------------------------

--
-- Table structure for table `process`
--

CREATE TABLE `process` (
  `id` int(11) NOT NULL,
  `content` text NOT NULL,
  `status` int(11) NOT NULL,
  `addeddate` datetime NOT NULL,
  `modifieddate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `process`
--

INSERT INTO `process` (`id`, `content`, `status`, `addeddate`, `modifieddate`) VALUES
(1, 'Find a health package from the range of whole body and other\r\n                  available health packages', 1, '2025-03-23 10:11:53', '2025-03-23 10:12:34'),
(2, 'Our Phlebo will collect the sample from your doorstep ensuring\r\n                  the highest safety.', 1, '2025-03-23 10:12:44', '0000-00-00 00:00:00'),
(3, 'Test reports can be downloaded easily from Website.', 1, '2025-03-23 10:12:50', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `id` int(11) NOT NULL,
  `role` int(11) NOT NULL COMMENT '1=user',
  `username` text NOT NULL,
  `mobile` text NOT NULL,
  `email` text NOT NULL,
  `password` text NOT NULL,
  `address` text NOT NULL,
  `image` text NOT NULL,
  `status` int(11) NOT NULL,
  `addeddate` datetime NOT NULL,
  `modifieddate` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`id`, `role`, `username`, `mobile`, `email`, `password`, `address`, `image`, `status`, `addeddate`, `modifieddate`) VALUES
(14, 1, 'asdasd', '9856472360', 'email2@gmail.com', '9856472360', 'dfdf', '', 1, '2025-03-23 12:50:38', NULL),
(15, 1, 'asdasd', '9856472360', 'email2@gmail.com565', '9856472360', 'dfdf', '', 1, '2025-03-23 12:50:56', NULL),
(16, 1, 'asdasd', '985647236056', 'email2@gmail.com565', '985647236056', 'dfdf', '', 1, '2025-03-23 12:51:10', NULL);

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
(1, 'HR TEAM', 'hr-team', '{\"main_access\":[\"0\",\"1\",\"2\",\"4\",\"5\"],\"inner_access\":[[\"3\"],[\"3\"],[\"3\"],[],[\"1\",\"2\",\"3\",\"4\"],[\"1\",\"2\",\"3\",\"4\"]]}', 1, '2024-07-30 13:20:06', '2024-07-31 13:01:40'),
(2, 'NATIONAL SALE MANAGER', 'national-sale-manager', '{\"main_access\":[\"2\"],\"inner_access\":[[],[],[\"3\",\"4\"]]}', 1, '2024-07-30 13:20:42', '2024-07-30 16:17:25'),
(3, 'MIS ADMIN', 'mis-admin', '{\"main_access\":[\"1\"],\"inner_access\":[[],[\"2\",\"3\"],[]]}', 1, '2024-07-30 13:20:54', '2024-07-30 16:17:21'),
(4, 'ACCOUNTS TEAM', 'accounts-team', '{\"main_access\":[\"0\"],\"inner_access\":[[\"2\",\"4\"],[],[]]}', 1, '2024-07-30 13:21:07', '2024-07-30 16:17:16'),
(5, 'PRODUCTION TEAM', 'production-team', '{\"main_access\":[\"0\",\"1\",\"2\"],\"inner_access\":[[\"1\",\"2\",\"3\",\"4\"],[\"1\",\"2\",\"3\",\"4\"],[\"1\",\"2\",\"3\",\"4\"]]}', 1, '2024-07-30 13:21:20', '2024-07-30 17:42:01'),
(7, 'test', 'test', '{\"main_access\":[\"0\",\"1\",\"2\",\"7\"],\"inner_access\":[[\"1\",\"3\"],[\"1\",\"2\",\"3\",\"4\"],[\"1\",\"2\",\"3\"],[],[],[],[],[\"3\"]]}', 1, '2024-07-30 17:44:07', '2024-08-20 13:08:46'),
(8, 'Azmal Ansari', 'azmal-ansari', '{\"main_access\":[\"0\",\"1\",\"2\",\"3\"],\"inner_access\":[[\"1\",\"2\",\"3\",\"4\"],[\"1\"],[\"4\"],[\"1\"],[],[]]}', 1, '2024-08-24 17:03:02', '2024-09-06 17:53:18');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` int(11) NOT NULL,
  `image` text NOT NULL,
  `cat_id` int(11) NOT NULL,
  `sub_cat_id` int(11) DEFAULT NULL,
  `name` text NOT NULL,
  `slug` text NOT NULL,
  `small_content` text NOT NULL,
  `amount` text NOT NULL,
  `content` blob NOT NULL,
  `testlist` blob NOT NULL,
  `test_details` blob NOT NULL,
  `status` int(11) NOT NULL,
  `addeddate` datetime NOT NULL,
  `modifieddate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `image`, `cat_id`, `sub_cat_id`, `name`, `slug`, `small_content`, `amount`, `content`, `testlist`, `test_details`, `status`, `addeddate`, `modifieddate`) VALUES
(1, '1742277263.jpg', 3, 1, 'adfasdas', 'adfasdas', 'ddd', '500', 0x647361646173, 0x3c703e646173643c2f703e, 0x3c703e6173646173643c2f703e, 1, '2025-03-17 16:27:57', '2025-03-18 12:18:24'),
(2, '1742280625.png', 1, 0, 'Individual Blood Tests', 'individual-blood-tests', 'sdasdasd', '500', 0x3c64697620636c6173733d22636f6c2d6c672d313222207374796c653d22666c65782d62617369733a206175746f3b2077696474683a2036363070783b2070616464696e672d72696768743a2063616c6328766172282d2d62732d6775747465722d7829202f2032293b2070616464696e672d6c6566743a2063616c6328766172282d2d62732d6775747465722d7829202f2032293b206d617267696e2d746f703a20766172282d2d62732d6775747465722d79293b20636f6c6f723a20726762283133322c203134322c20313539293b20666f6e742d66616d696c793a20526f626f746f2c2073616e732d73657269663b20666f6e742d73697a653a20313670783b223e3c6832207374796c653d22666f6e742d66616d696c793a2022526f626f746f20436f6e64656e736564222c2073616e732d73657269663b20636f6c6f723a207267622832392c2034322c203737293b223e546573742043726974657269613c2f68323e3c7020636c6173733d2270742d3222207374796c653d226d617267696e2d626f74746f6d3a203172656d3b223e48656c707320796f75206b6e6f7720796f75722074657374206265747465723c2f703e3c2f6469763e3c64697620636c6173733d22636f6c2d6c672d313222207374796c653d22666c65782d62617369733a206175746f3b2077696474683a2036363070783b2070616464696e672d72696768743a2063616c6328766172282d2d62732d6775747465722d7829202f2032293b2070616464696e672d6c6566743a2063616c6328766172282d2d62732d6775747465722d7829202f2032293b206d617267696e2d746f703a20766172282d2d62732d6775747465722d79293b20636f6c6f723a20726762283133322c203134322c20313539293b20666f6e742d66616d696c793a20526f626f746f2c2073616e732d73657269663b20666f6e742d73697a653a20313670783b223e3c6469763e3c7020636c6173733d22636f6c6c617073652d6c696e6b2220646174612d62732d746f67676c653d22636f6c6c617073652220687265663d2223636f6c6c617073654578616d706c652220726f6c653d22627574746f6e2220617269612d657870616e6465643d22747275652220617269612d636f6e74726f6c733d22636f6c6c617073654578616d706c6522207374796c653d226d617267696e2d626f74746f6d3a203172656d3b20637572736f723a20706f696e7465723b20666f6e742d73697a653a20323070783b20666f6e742d7765696768743a203630303b20636f6c6f723a20726762283139352c2032342c2037293b223e57686f20616c6c2061726520656c696769626c6520666f7220746869732074657374203f3c2f703e3c64697620636c6173733d22636f6c6c617073652073686f77222069643d22636f6c6c617073654578616d706c65223e3c70207374796c653d226d617267696e2d626f74746f6d3a203172656d3b20636f6c6f723a2072676228302c20302c2030293b223e50656f706c6520776974682074686520666f6c6c6f77696e672073796d70746f6d733a206d6f6f64206368616e67652c206672657175656e7420676173747269632074726f75626c65732c20666174696775652c206368616e676520696e20766973696f6e2c2065786365737369766520686169722066616c6c2c2064727920736b696e2c20636f6c642068616e64732c206d656e74616c20666f6767696e672c20776569676874206368616e6765732c206574632e3c2f703e3c2f6469763e3c2f6469763e3c6469763e3c7020636c6173733d22636f6c6c617073652d6c696e6b2220646174612d62732d746f67676c653d22636f6c6c617073652220687265663d2223636f6c6c617073654578616d706c65332220726f6c653d22627574746f6e2220617269612d657870616e6465643d22747275652220617269612d636f6e74726f6c733d22636f6c6c617073654578616d706c6522207374796c653d226d617267696e2d626f74746f6d3a203172656d3b20637572736f723a20706f696e7465723b20666f6e742d73697a653a20323070783b20666f6e742d7765696768743a203630303b20636f6c6f723a20726762283139352c2032342c2037293b223e5768617420617265207468652062656e6566697473206f6620746869732074657374203f3c2f703e3c64697620636c6173733d22636f6c6c617073652073686f77222069643d22636f6c6c617073654578616d706c6533223e3c70207374796c653d226d617267696e2d626f74746f6d3a203172656d3b20636f6c6f723a2072676228302c20302c2030293b223e4120746879726f696420746573742077696c6c20646566696e6974656c792072656475636520746865206c696b656c69686f6f64206f66206f7468657220736572696f7573206865616c7468206973737565733c2f703e3c2f6469763e3c2f6469763e3c6469763e3c7020636c6173733d22636f6c6c617073652d6c696e6b2220646174612d62732d746f67676c653d22636f6c6c617073652220687265663d2223636f6c6c617073654578616d706c65322220726f6c653d22627574746f6e2220617269612d657870616e6465643d22747275652220617269612d636f6e74726f6c733d22636f6c6c617073654578616d706c653222207374796c653d226d617267696e2d626f74746f6d3a203172656d3b20637572736f723a20706f696e7465723b20666f6e742d73697a653a20323070783b20666f6e742d7765696768743a203630303b20636f6c6f723a20726762283139352c2032342c2037293b223e5768792074616b6520746879726f69642074657374203f3c2f703e3c64697620636c6173733d22636f6c6c617073652073686f77222069643d22636f6c6c617073654578616d706c6532223e3c70207374796c653d226d617267696e2d626f74746f6d3a203172656d3b20636f6c6f723a2072676228302c20302c2030293b223e5468697320746573742077696c6c2072657665616c20746865206578616374206361757365206f66207468652061626f76652073796d70746f6d732e3c2f703e3c2f6469763e3c2f6469763e3c2f6469763e, 0x3c64697620636c6173733d22746573742d686967686c6967687465642d626f7822207374796c653d226261636b67726f756e642d636f6c6f723a20726762283139352c2032342c2037293b2070616464696e673a203172656d3b206d617267696e3a20313070782030707820323070783b20636f6c6f723a20726762283133322c203134322c20313539293b20666f6e742d66616d696c793a20526f626f746f2c2073616e732d73657269663b20666f6e742d73697a653a20313670783b223e3c6834207374796c653d22666f6e742d66616d696c793a202220726f626f746f3d222220636f6e64656e736564222c3d22222073616e732d73657269663b3d222220636f6c6f723a3d222220726762283235352c3d2222203235352c3d222220323535293b223d22223e496e636c7564657320382074657374733c2f68343e3c70207374796c653d226d617267696e2d626f74746f6d3a203072656d3b20636f6c6f723a20726762283235352c203235352c20323535293b223e54332c20546f74616c2054726920496f646f746879726f6e696e652c2054342c20546f74616c20546879726f78696e652c2054534820556c747261202d2073656e7369746976653c2f703e3c2f6469763e, 0x3c64697620636c6173733d22636f6c2d6c672d3520636f6c2d6d642d3622207374796c653d22666c65782d62617369733a206175746f3b2077696474683a2035363070783b206d61782d77696474683a20313030253b2070616464696e672d72696768743a2063616c6328766172282d2d62732d6775747465722d7829202f2032293b2070616464696e672d6c6566743a2063616c6328766172282d2d62732d6775747465722d7829202f2032293b206d617267696e2d746f703a20766172282d2d62732d6775747465722d79293b20636f6c6f723a20726762283133322c203134322c20313539293b20666f6e742d66616d696c793a20526f626f746f2c2073616e732d73657269663b20666f6e742d73697a653a20313670783b223e3c64697620636c6173733d22746573742d64657461696c2d6c656674223e3c6833207374796c653d22666f6e742d66616d696c793a2022526f626f746f20436f6e64656e736564222c2073616e732d73657269663b20636f6c6f723a207267622832392c2034322c203737293b206261636b67726f756e642d636f6c6f723a20726762283139352c2032342c2037293b2070616464696e673a20313070783b223e546573742044657461696c733c2f68333e3c70207374796c653d226d617267696e2d626f74746f6d3a203172656d3b20636f6c6f723a2072676228302c20302c2030293b20666f6e742d73697a653a20313870783b223e54686520746573742061737365737365732074686520746879726f696420676c616e6427732066756e6374696f6e696e6720616e642068656c707320746f20646961676e6f7365206879706572746879726f696469736d206f72206879706f746879726f696469736d2e3c2f703e3c2f6469763e3c2f6469763e3c64697620636c6173733d22636f6c2d6c672d3720636f6c2d6d642d3622207374796c653d22666c65782d62617369733a206175746f3b2077696474683a203738332e39383470783b206d61782d77696474683a20313030253b2070616464696e672d72696768743a2063616c6328766172282d2d62732d6775747465722d7829202f2032293b2070616464696e672d6c6566743a2063616c6328766172282d2d62732d6775747465722d7829202f2032293b206d617267696e2d746f703a20766172282d2d62732d6775747465722d79293b20636f6c6f723a20726762283133322c203134322c20313539293b20666f6e742d66616d696c793a20526f626f746f2c2073616e732d73657269663b20666f6e742d73697a653a20313670783b223e3c64697620636c6173733d22746573742d64657461696c2d6c656674223e3c64697620636c6173733d22726f7722207374796c653d222d2d62732d6775747465722d783a20312e3572656d3b202d2d62732d6775747465722d793a20303b206d617267696e2d746f703a2063616c6328766172282d2d62732d6775747465722d7929202a202d31293b206d617267696e2d72696768743a2063616c6328766172282d2d62732d6775747465722d7829202f202d32293b206d617267696e2d6c6566743a2063616c6328766172282d2d62732d6775747465722d7829202f202d32293b223e3c64697620636c6173733d22636f6c2d6c672d3620636f6c2d6d642d3620636f6c2d736d2d3132206d622d6c672d30206d622d3322207374796c653d22666c65782d62617369733a206175746f3b2077696474683a203337392e39383470783b206d61782d77696474683a20313030253b2070616464696e672d72696768743a2063616c6328766172282d2d62732d6775747465722d7829202f2032293b2070616464696e672d6c6566743a2063616c6328766172282d2d62732d6775747465722d7829202f2032293b206d617267696e2d746f703a20766172282d2d62732d6775747465722d79293b223e3c64697620636c6173733d22746573742d64657461696c732d626f7822207374796c653d2270616464696e673a203135707820313070783b206261636b67726f756e642d636f6c6f723a20726762283139352c2032342c2037293b20626f726465723a2031707820736f6c69642072676228302c20302c2030293b20626f726465722d7261646975733a203570783b223e3c6834207374796c653d22666f6e742d66616d696c793a2022526f626f746f20436f6e64656e736564222c2073616e732d73657269663b20636f6c6f723a20726762283235352c203235352c20323535293b223e46617374696e673c2f68343e3c70207374796c653d226d617267696e2d626f74746f6d3a203172656d3b20636f6c6f723a20726762283235352c203235352c20323535293b223e4e6f742052657175697265643c2f703e3c2f6469763e3c2f6469763e3c64697620636c6173733d22636f6c2d6c672d3620636f6c2d6d642d3620636f6c2d736d2d3132206d622d6c672d30206d622d3322207374796c653d22666c65782d62617369733a206175746f3b2077696474683a203337392e39383470783b206d61782d77696474683a20313030253b2070616464696e672d72696768743a2063616c6328766172282d2d62732d6775747465722d7829202f2032293b2070616464696e672d6c6566743a2063616c6328766172282d2d62732d6775747465722d7829202f2032293b206d617267696e2d746f703a20766172282d2d62732d6775747465722d79293b223e3c64697620636c6173733d22746573742d64657461696c732d626f7822207374796c653d2270616464696e673a203135707820313070783b206261636b67726f756e642d636f6c6f723a20726762283139352c2032342c2037293b20626f726465723a2031707820736f6c69642072676228302c20302c2030293b20626f726465722d7261646975733a203570783b223e3c6834207374796c653d22666f6e742d66616d696c793a2022526f626f746f20436f6e64656e736564222c2073616e732d73657269663b20636f6c6f723a20726762283235352c203235352c20323535293b223e476574205265706f72747320496e3c2f68343e3c70207374796c653d226d617267696e2d626f74746f6d3a203172656d3b20636f6c6f723a20726762283235352c203235352c20323535293b223e57697468696e203132204872733c2f703e3c2f6469763e3c2f6469763e3c64697620636c6173733d22636f6c2d6c672d3620636f6c2d6d642d3620636f6c2d736d2d3132206d742d3322207374796c653d22666c65782d62617369733a206175746f3b2077696474683a203337392e39383470783b206d61782d77696474683a20313030253b2070616464696e672d72696768743a2063616c6328766172282d2d62732d6775747465722d7829202f2032293b2070616464696e672d6c6566743a2063616c6328766172282d2d62732d6775747465722d7829202f2032293b223e3c64697620636c6173733d22746573742d64657461696c732d626f7822207374796c653d2270616464696e673a203135707820313070783b206261636b67726f756e642d636f6c6f723a20726762283139352c2032342c2037293b20626f726465723a2031707820736f6c69642072676228302c20302c2030293b20626f726465722d7261646975733a203570783b223e3c6834207374796c653d22666f6e742d66616d696c793a2022526f626f746f20436f6e64656e736564222c2073616e732d73657269663b20636f6c6f723a20726762283235352c203235352c20323535293b223e486f6d6520436f6c6c656374696f6e3c2f68343e3c70207374796c653d226d617267696e2d626f74746f6d3a203172656d3b20636f6c6f723a20726762283235352c203235352c20323535293b223e417661696c61626c653c2f703e3c2f6469763e3c2f6469763e3c64697620636c6173733d22636f6c2d6c672d3620636f6c2d6d642d3620636f6c2d736d2d3132206d742d3322207374796c653d22666c65782d62617369733a206175746f3b2077696474683a203337392e39383470783b206d61782d77696474683a20313030253b2070616464696e672d72696768743a2063616c6328766172282d2d62732d6775747465722d7829202f2032293b2070616464696e672d6c6566743a2063616c6328766172282d2d62732d6775747465722d7829202f2032293b223e3c64697620636c6173733d22746573742d64657461696c732d626f7822207374796c653d2270616464696e673a203135707820313070783b206261636b67726f756e642d636f6c6f723a20726762283139352c2032342c2037293b20626f726465723a2031707820736f6c69642072676228302c20302c2030293b20626f726465722d7261646975733a203570783b223e3c6834207374796c653d22666f6e742d66616d696c793a2022526f626f746f20436f6e64656e736564222c2073616e732d73657269663b20636f6c6f723a20726762283235352c203235352c20323535293b223e4167652047726f75703c2f68343e3c70207374796c653d226d617267696e2d626f74746f6d3a203172656d3b20636f6c6f723a20726762283235352c203235352c20323535293b223e416c6c20416765733c2f703e3c2f6469763e3c2f6469763e3c2f6469763e3c2f6469763e3c2f6469763e, 1, '2025-03-18 11:38:39', '2025-03-18 12:20:25');

-- --------------------------------------------------------

--
-- Table structure for table `site_setting`
--

CREATE TABLE `site_setting` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `content` text NOT NULL,
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

INSERT INTO `site_setting` (`id`, `name`, `content`, `logo`, `mobile`, `alt_mobile`, `email`, `alt_email`, `address`, `facebook`, `twitter`, `instagram`, `youtube`, `map`) VALUES
(1, '', '', '1742205348.png', '9856472360', '9586741023', 'email2@gmail.com', 'altemail2@gmail.com', 'your address', 'https://www.facebook.com/', 'https://twitter.com/', 'https://www.instagram.com/', 'https://www.youtube.com/', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d30767295.116023116!2d60.946027684017714!3d19.722272265144735!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30635ff06b92b791%3A0xd78c4fa1854213a6!2sIndia!5e0!3m2!1sen!2sin!4v1713167102172!5m2!1sen!2sin\" width=\"100%\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>'),
(2, 'About Us', '<div class=\"mb-4\" style=\"color: rgb(132, 142, 159); font-family: Roboto, sans-serif; font-size: 16px;\"><h5 class=\"d-inline-block text-primary text-uppercase border-bottom border-5\" style=\"font-family: \"Roboto Condensed\", sans-serif; color: rgb(195, 24, 7) !important; border-width: 5px !important;\">About Us</h5><h1 class=\"display-4\" style=\"font-family: \"Roboto Condensed\", sans-serif; font-weight: 700; color: rgb(29, 42, 77);\">Accurate, Reliable, and Affordable Blood Tests at Geomedipath</h1></div><p style=\"margin-bottom: 1rem; color: rgb(132, 142, 159); font-family: Roboto, sans-serif; font-size: 16px;\">Tempor erat elitr at rebum at at clita aliquyam consetetur. Diam dolor diam ipsum et, tempor voluptua sit consetetur sit. Aliquyam diam amet diam et eos sadipscing labore. Clita erat ipsum et lorem et sit, sed stet no labore lorem sit. Sanctus clita duo justo et tempor consetetur takimata eirmod, dolores takimata consetetur invidunt magna dolores aliquyam dolores dolore. Amet erat amet et magna</p><div class=\"row g-3 pt-3\" style=\"--bs-gutter-x: 1rem; --bs-gutter-y: 1rem; margin-top: calc(var(--bs-gutter-y) * -1); margin-right: calc(var(--bs-gutter-x) / -2); margin-left: calc(var(--bs-gutter-x) / -2); color: rgb(132, 142, 159); font-family: Roboto, sans-serif; font-size: 16px;\"><div class=\"col-sm-3 col-6\" style=\"flex-basis: auto; width: 187.984px; max-width: 100%; padding-right: calc(var(--bs-gutter-x) / 2); padding-left: calc(var(--bs-gutter-x) / 2); margin-top: var(--bs-gutter-y);\"><div class=\"bg-light text-center rounded-circle py-4\" style=\"background-color: rgb(239, 245, 249) !important;\"><span class=\"fa fa-3x fa-user-md text-primary mb-3\" style=\"color: rgb(195, 24, 7) !important;\"></span><h6 class=\"mb-0\" style=\"font-family: \"Roboto Condensed\", sans-serif; color: rgb(29, 42, 77);\">Qualified<small class=\"d-block text-primary\" style=\"font-size: 0.875em; color: rgb(195, 24, 7) !important;\">Doctors</small></h6></div></div><div class=\"col-sm-3 col-6\" style=\"flex-basis: auto; width: 187.984px; max-width: 100%; padding-right: calc(var(--bs-gutter-x) / 2); padding-left: calc(var(--bs-gutter-x) / 2); margin-top: var(--bs-gutter-y);\"><div class=\"bg-light text-center rounded-circle py-4\" style=\"background-color: rgb(239, 245, 249) !important;\"><span class=\"fa fa-3x fa-microscope text-primary mb-3\" style=\"color: rgb(195, 24, 7) !important;\"></span><h6 class=\"mb-0\" style=\"font-family: \"Roboto Condensed\", sans-serif; color: rgb(29, 42, 77);\">Accurate<small class=\"d-block text-primary\" style=\"font-size: 0.875em; color: rgb(195, 24, 7) !important;\">Testing</small></h6></div></div><div class=\"col-sm-3 col-6\" style=\"flex-basis: auto; width: 187.984px; max-width: 100%; padding-right: calc(var(--bs-gutter-x) / 2); padding-left: calc(var(--bs-gutter-x) / 2); margin-top: var(--bs-gutter-y);\"><div class=\"bg-light text-center rounded-circle py-4\" style=\"background-color: rgb(239, 245, 249) !important;\"><span class=\"fas fa-3x fa-vials text-primary mb-3\" style=\"color: rgb(195, 24, 7) !important;\"></span><h6 class=\"mb-0\" style=\"font-family: \"Roboto Condensed\", sans-serif; color: rgb(29, 42, 77);\">Painless<small class=\"d-block text-primary\" style=\"font-size: 0.875em; color: rgb(195, 24, 7) !important;\">Sample Collection</small></h6></div></div></div>', '1742283263.png', '', '', '', '', '', '', '', '', '', '');

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
(4, '', '', '', '1742703679.jpg', '', 1, '2024-11-13 13:03:03', '2025-03-23 09:51:19'),
(6, '', '', '', '1742703768.jpg', '', 1, '2025-03-23 09:52:48', '2025-03-23 09:52:53');

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
(308, 'radiology', 'categories', 'category-package.php', 'categories', 3),
(309, 'individual-blood-test', 'categories', 'category-package.php', 'categories', 2),
(310, 'health-packages', 'categories', 'category-package.php', 'categories', 1),
(314, 'mri', 'sub_categories', 'xray-radiology.php', 'sub_categories', 3),
(315, 'ultrasound', 'sub_categories', 'xray-radiology.php', 'sub_categories', 2),
(316, 'x-ray', 'sub_categories', 'xray-radiology.php', 'sub_categories', 1),
(330, 'adfasdas', 'services', 'test-details.php', 'services', 1),
(331, 'individual-blood-tests', 'services', 'test-details.php', 'services', 2),
(333, 'dolor-clita-vero-elitr-sea-stet-dolor-justo-diam', 'blog', 'blog-details.php', 'blog', 1),
(342, 'address-j-185-delta-2-greater-noida-up-201308', 'labs', 'lab-inner.php', 'labs', 1);

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

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
  `cat_id` text NOT NULL,
  `image` text NOT NULL,
  `name` text NOT NULL,
  `slug` text NOT NULL,
  `description` text NOT NULL,
  `status` text NOT NULL,
  `addeddate` datetime NOT NULL,
  `modifieddate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sub_categories`
--

INSERT INTO `sub_categories` (`id`, `cat_id`, `image`, `name`, `slug`, `description`, `status`, `addeddate`, `modifieddate`) VALUES
(1, '3', '1742206499.jpg', 'X-Ray', 'x-ray', 'Professional X-ray services providing accurate, detailed\r\n                      imaging to help diagnose bone, joint, and organ conditions\r\n                      for effective treatment planning.', '1', '2025-03-17 15:44:59', '2025-03-18 11:45:20'),
(2, '3', '1742206837.jpg', 'Ultrasound', 'ultrasound', 'Advanced ultrasound services offering clear, real-time\r\n                      imaging for diagnosing various medical conditions,\r\n                      including pregnancy, organ health, and tissue\r\n                      abnormalities.', '1', '2025-03-17 15:50:37', '2025-03-18 11:45:18'),
(3, '3', '1742206864.webp', 'MRI', 'mri', 'State-of-the-art MRI services delivering detailed,\r\n                      non-invasive images to diagnose brain, spine, joint, and\r\n                      soft tissue conditions.', '1', '2025-03-17 15:51:04', '2025-03-18 11:45:16');

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
(2, 1, 0, '', 'Admin', 'Admin', 'admin', 'admin', 'admin123@gmail.com', '95822980123', 'delhi', '1724412456.png', 'male', '01/01/2022', 'single', '22', 'india', 'delhi', '6ef5a86a72d307d9d2df14306a26534f64236ca1887fb9ba0cff55e6e0a26390', '2024-08-30 13:34:00', 1, NULL, NULL),
(3, 1, 0, '', 'Wolverine', 'logen', 'azmal', 'azmal', 'wolverine@gmail.com', '897989', 'sfsfsdf sdefdsfs fsdf sdf', 'user3.jpg', 'male', '01/01/2022', 'single', '22', 'india', 'delhi', NULL, NULL, 1, NULL, NULL),
(4, 2, 8, '{\"main_access\":[\"0\",\"1\",\"2\",\"3\"],\"inner_access\":[[\"1\",\"2\",\"3\",\"4\"],[\"1\"],[\"4\"],[\"1\"],[],[]]}', '', '', 'azmal12345', 'azmal12345', '', '', '', '', '', '', '', '', '', '', NULL, NULL, 1, '2024-08-24 17:23:45', '2024-11-13 15:44:20');

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
(1, '1731493179.png', 'Spiderman', 'Client', '<p>Hello </p>', 1, '2024-08-24 18:07:24', '2024-11-13 15:49:39');

-- --------------------------------------------------------

--
-- Table structure for table `video`
--

CREATE TABLE `video` (
  `id` int(11) NOT NULL,
  `content` text NOT NULL,
  `status` int(11) NOT NULL,
  `addeddate` datetime NOT NULL,
  `modifieddate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `video`
--

INSERT INTO `video` (`id`, `content`, `status`, `addeddate`, `modifieddate`) VALUES
(1, '<iframe\r\n                width=\"560\"\r\n                height=\"315\"\r\n                src=\"https://www.youtube.com/embed/Ipc0kGn8Y0M?si=soDZox8v6kc-CJyw\"\r\n                title=\"YouTube video player\"\r\n                frameborder=\"0\"\r\n                allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\"\r\n                referrerpolicy=\"strict-origin-when-cross-origin\"\r\n                allowfullscreen\r\n              ></iframe>', 1, '2025-03-23 10:39:07', '2025-03-23 10:39:18'),
(2, '<iframe\r\n                width=\"560\"\r\n                height=\"315\"\r\n                src=\"https://www.youtube.com/embed/Ipc0kGn8Y0M?si=soDZox8v6kc-CJyw\"\r\n                title=\"YouTube video player\"\r\n                frameborder=\"0\"\r\n                allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\"\r\n                referrerpolicy=\"strict-origin-when-cross-origin\"\r\n                allowfullscreen\r\n              ></iframe>', 1, '2025-03-23 10:39:14', '0000-00-00 00:00:00');

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
-- Indexes for table `booknow`
--
ALTER TABLE `booknow`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
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
-- Indexes for table `labs`
--
ALTER TABLE `labs`
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
-- Indexes for table `process`
--
ALTER TABLE `process`
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
-- Indexes for table `video`
--
ALTER TABLE `video`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `activity_records`
--
ALTER TABLE `activity_records`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=250;

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `booknow`
--
ALTER TABLE `booknow`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `content`
--
ALTER TABLE `content`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `country`
--
ALTER TABLE `country`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=240;

--
-- AUTO_INCREMENT for table `labs`
--
ALTER TABLE `labs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `login_details`
--
ALTER TABLE `login_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `meta_tags`
--
ALTER TABLE `meta_tags`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

--
-- AUTO_INCREMENT for table `multipleimage`
--
ALTER TABLE `multipleimage`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `process`
--
ALTER TABLE `process`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `role`
--
ALTER TABLE `role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `site_setting`
--
ALTER TABLE `site_setting`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `slugs`
--
ALTER TABLE `slugs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=343;

--
-- AUTO_INCREMENT for table `state`
--
ALTER TABLE `state`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `sub_categories`
--
ALTER TABLE `sub_categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `testimonials`
--
ALTER TABLE `testimonials`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `video`
--
ALTER TABLE `video`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
