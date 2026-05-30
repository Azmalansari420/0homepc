-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 26, 2026 at 03:01 PM
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
-- Database: `brutisewafoundation`
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
(1, '::1', 'http://localhost/BrutiSewaFoundation/admin/dashboard', '2026-01-02', '14:59:35', 2, 'admin@gmail.com', 'admin'),
(2, '::1', 'http://localhost/BrutiSewaFoundation/admin_con/site_setting/edit/1', '2026-01-02', '15:01:45', 2, 'admin@gmail.com', 'admin'),
(3, '::1', 'http://localhost/BrutiSewaFoundation/admin_con/site_setting/edit/1', '2026-01-02', '15:01:51', 2, 'admin@gmail.com', 'admin'),
(4, '::1', 'http://localhost/BrutiSewaFoundation/admin_con/site_setting/edit/1', '2026-01-02', '15:01:55', 2, 'admin@gmail.com', 'admin'),
(5, '::1', 'http://localhost/BrutiSewaFoundation/admin_con/site_setting/edit/1', '2026-01-02', '15:02:03', 2, 'admin@gmail.com', 'admin'),
(6, '::1', 'http://localhost/BrutiSewaFoundation/admin_con/site_setting/edit/1', '2026-01-02', '15:04:48', 2, 'admin@gmail.com', 'admin'),
(7, '::1', 'http://localhost/BrutiSewaFoundation/admin_con/site_setting/edit/1', '2026-01-02', '15:06:20', 2, 'admin@gmail.com', 'admin'),
(8, '::1', 'http://localhost/BrutiSewaFoundation/admin_con/role/listing', '2026-01-02', '15:06:21', 2, 'admin@gmail.com', 'admin'),
(9, '::1', 'http://localhost/BrutiSewaFoundation/admin_con/role/edit/4', '2026-01-02', '15:06:24', 2, 'admin@gmail.com', 'admin'),
(10, '::1', 'http://localhost/BrutiSewaFoundation/admin_con/role/listing', '2026-01-02', '15:06:34', 2, 'admin@gmail.com', 'admin'),
(11, '::1', 'http://localhost/BrutiSewaFoundation/admin_con/role/listing', '2026-01-02', '15:06:37', 2, 'admin@gmail.com', 'admin'),
(12, '::1', 'http://localhost/BrutiSewaFoundation/admin_con/tbl_admin/listing', '2026-01-02', '15:06:39', 2, 'admin@gmail.com', 'admin'),
(13, '::1', 'http://localhost/BrutiSewaFoundation/admin_con/tbl_admin/listing', '2026-01-02', '15:07:09', 2, 'admin@gmail.com', 'admin'),
(14, '::1', 'http://localhost/BrutiSewaFoundation/admin_con/tbl_admin/listing', '2026-01-02', '15:07:35', 2, 'admin@gmail.com', 'admin'),
(15, '::1', 'http://localhost/BrutiSewaFoundation/admin_con/tbl_admin/edit/4', '2026-01-02', '15:07:39', 2, 'admin@gmail.com', 'admin'),
(16, '::1', 'http://localhost/BrutiSewaFoundation/admin_con/role/listing', '2026-01-02', '15:08:01', 2, 'admin@gmail.com', 'admin'),
(17, '::1', 'http://localhost/BrutiSewaFoundation/admin_con/tbl_admin/listing', '2026-01-02', '15:08:02', 2, 'admin@gmail.com', 'admin'),
(18, '::1', 'http://localhost/BrutiSewaFoundation/admin/dashboard', '2026-01-02', '15:08:04', 2, 'admin@gmail.com', 'admin'),
(19, '::1', 'http://localhost/BrutiSewaFoundation/admin/dashboard', '2026-01-02', '15:08:10', 2, 'admin@gmail.com', 'admin'),
(20, '::1', 'http://localhost/BrutiSewaFoundation/admin_con/tbl_admin/listing', '2026-01-02', '15:08:11', 2, 'admin@gmail.com', 'admin'),
(21, '::1', 'http://localhost/BrutiSewaFoundation/admin_con/tbl_admin/listing', '2026-01-02', '15:09:14', 2, 'admin@gmail.com', 'admin'),
(22, '::1', 'http://localhost/BrutiSewaFoundation/admin_con/tbl_admin/listing', '2026-01-02', '15:09:20', 2, 'admin@gmail.com', 'admin'),
(23, '::1', 'http://localhost/BrutiSewaFoundation/admin_con/tbl_admin/add', '2026-01-02', '15:09:23', 2, 'admin@gmail.com', 'admin'),
(24, '::1', 'http://localhost/BrutiSewaFoundation/admin_con/tbl_admin/add', '2026-01-02', '15:09:33', 2, 'admin@gmail.com', 'admin'),
(25, '::1', 'http://localhost/BrutiSewaFoundation/admin_con/tbl_admin/listing', '2026-01-02', '15:09:34', 2, 'admin@gmail.com', 'admin'),
(26, '::1', 'http://localhost/BrutiSewaFoundation/admin_con/tbl_admin/listing', '2026-01-02', '15:10:05', 2, 'admin@gmail.com', 'admin'),
(27, '::1', 'http://localhost/BrutiSewaFoundation/admin_con/tbl_admin/listing', '2026-01-02', '15:11:10', 2, 'admin@gmail.com', 'admin'),
(28, '::1', 'http://localhost/BrutiSewaFoundation/admin_con/tbl_admin/edit/4', '2026-01-02', '15:11:12', 2, 'admin@gmail.com', 'admin'),
(29, '::1', 'http://localhost/BrutiSewaFoundation/admin_con/tbl_admin/edit/4', '2026-01-02', '15:11:31', 2, 'admin@gmail.com', 'admin'),
(30, '::1', 'http://localhost/BrutiSewaFoundation/admin_con/tbl_admin/edit/4', '2026-01-02', '15:11:38', 2, 'admin@gmail.com', 'admin'),
(31, '::1', 'http://localhost/BrutiSewaFoundation/admin_con/tbl_admin/edit/4', '2026-01-02', '15:11:46', 2, 'admin@gmail.com', 'admin'),
(32, '::1', 'http://localhost/BrutiSewaFoundation/admin_con/tbl_admin/edit/4', '2026-01-02', '15:12:02', 2, 'admin@gmail.com', 'admin'),
(33, '::1', 'http://localhost/BrutiSewaFoundation/admin_con/tbl_admin/edit/4', '2026-01-02', '15:13:07', 2, 'admin@gmail.com', 'admin'),
(34, '::1', 'http://localhost/BrutiSewaFoundation/admin_con/tbl_admin/edit/4', '2026-01-02', '15:16:17', 2, 'admin@gmail.com', 'admin'),
(35, '::1', 'http://localhost/BrutiSewaFoundation/admin_con/tbl_admin/edit/4', '2026-01-02', '15:16:28', 2, 'admin@gmail.com', 'admin'),
(36, '::1', 'http://localhost/BrutiSewaFoundation/admin_con/tbl_admin/edit/4', '2026-01-02', '15:16:38', 2, 'admin@gmail.com', 'admin'),
(37, '::1', 'http://localhost/BrutiSewaFoundation/admin_con/tbl_admin/listing', '2026-01-02', '15:17:03', 2, 'admin@gmail.com', 'admin'),
(38, '::1', 'http://localhost/BrutiSewaFoundation/admin_con/tbl_admin/edit/4', '2026-01-02', '15:17:13', 2, 'admin@gmail.com', 'admin'),
(39, '::1', 'http://localhost/BrutiSewaFoundation/admin_con/tbl_admin/edit/4', '2026-01-02', '15:17:16', 2, 'admin@gmail.com', 'admin'),
(40, '::1', 'http://localhost/BrutiSewaFoundation/admin_con/tbl_admin/edit/4', '2026-01-02', '15:17:48', 2, 'admin@gmail.com', 'admin'),
(41, '::1', 'http://localhost/BrutiSewaFoundation/admin_con/tbl_admin/listing', '2026-01-02', '15:17:50', 2, 'admin@gmail.com', 'admin'),
(42, '::1', 'http://localhost/BrutiSewaFoundation/admin_con/tbl_admin/listing', '2026-01-02', '15:18:31', 2, 'admin@gmail.com', 'admin'),
(43, '::1', 'http://localhost/BrutiSewaFoundation/admin_con/tbl_admin/listing', '2026-01-02', '15:18:54', 2, 'admin@gmail.com', 'admin'),
(44, '::1', 'http://localhost/BrutiSewaFoundation/admin_con/tbl_admin/listing', '2026-01-02', '15:19:04', 2, 'admin@gmail.com', 'admin'),
(45, '::1', 'http://localhost/BrutiSewaFoundation/admin_con/tbl_admin/edit/4', '2026-01-02', '15:19:20', 2, 'admin@gmail.com', 'admin'),
(46, '::1', 'http://localhost/BrutiSewaFoundation/admin_con/tbl_admin/listing', '2026-01-02', '15:19:22', 2, 'admin@gmail.com', 'admin'),
(47, '::1', 'http://localhost/BrutiSewaFoundation/admin_con/tbl_admin/listing', '2026-01-02', '15:19:30', 2, 'admin@gmail.com', 'admin'),
(48, '::1', 'http://localhost/BrutiSewaFoundation/admin/dashboard', '2026-01-02', '15:19:42', 4, 'azmal123', 'azmal123'),
(49, '::1', 'http://localhost/BrutiSewaFoundation/admin_con/role/listing', '2026-01-02', '15:19:45', 2, 'admin@gmail.com', 'admin'),
(50, '::1', 'http://localhost/BrutiSewaFoundation/admin_con/role/edit/4', '2026-01-02', '15:19:47', 2, 'admin@gmail.com', 'admin'),
(51, '::1', 'http://localhost/BrutiSewaFoundation/admin_con/role/listing', '2026-01-02', '15:19:49', 2, 'admin@gmail.com', 'admin'),
(52, '::1', 'http://localhost/BrutiSewaFoundation/admin/dashboard', '2026-01-02', '15:19:52', 4, 'azmal123', 'azmal123'),
(53, '::1', 'http://localhost/BrutiSewaFoundation/admin_con/role/listing', '2026-01-02', '15:22:18', 2, 'admin@gmail.com', 'admin'),
(54, '::1', 'http://localhost/BrutiSewaFoundation/admin_con/role/listing', '2026-01-02', '15:22:44', 2, 'admin@gmail.com', 'admin'),
(55, '::1', 'http://localhost/BrutiSewaFoundation/admin_con/role/listing', '2026-01-02', '15:23:56', 2, 'admin@gmail.com', 'admin'),
(56, '::1', 'http://localhost/BrutiSewaFoundation/admin_con/product/listing', '2026-01-02', '15:24:17', 2, 'admin@gmail.com', 'admin'),
(57, '::1', 'http://localhost/BrutiSewaFoundation/admin_con/product/listing', '2026-01-02', '15:24:46', 2, 'admin@gmail.com', 'admin'),
(58, '::1', 'http://localhost/BrutiSewaFoundation/admin_con/product/add', '2026-01-02', '15:25:07', 2, 'admin@gmail.com', 'admin'),
(59, '::1', 'http://localhost/BrutiSewaFoundation/admin_con/product/add', '2026-01-02', '15:25:58', 2, 'admin@gmail.com', 'admin'),
(60, '::1', 'http://localhost/BrutiSewaFoundation/admin_con/product/add', '2026-01-02', '15:26:18', 2, 'admin@gmail.com', 'admin'),
(61, '::1', 'http://localhost/BrutiSewaFoundation/admin_con/product/add', '2026-01-02', '15:27:09', 2, 'admin@gmail.com', 'admin'),
(62, '::1', 'http://localhost/BrutiSewaFoundation/admin_con/product/add', '2026-01-02', '15:27:25', 2, 'admin@gmail.com', 'admin'),
(63, '::1', 'http://localhost/BrutiSewaFoundation/admin_con/product/add', '2026-01-02', '15:31:32', 2, 'admin@gmail.com', 'admin'),
(64, '::1', 'http://localhost/BrutiSewaFoundation/admin_con/product/add', '2026-01-02', '15:35:06', 2, 'admin@gmail.com', 'admin'),
(65, '::1', 'http://localhost/BrutiSewaFoundation/admin_con/product/listing', '2026-01-02', '15:35:52', 2, 'admin@gmail.com', 'admin'),
(66, '::1', 'http://localhost/BrutiSewaFoundation/admin_con/product/edit/1', '2026-01-02', '15:36:20', 2, 'admin@gmail.com', 'admin'),
(67, '::1', 'http://localhost/BrutiSewaFoundation/admin_con/product/listing', '2026-01-02', '15:36:34', 2, 'admin@gmail.com', 'admin'),
(68, '::1', 'http://localhost/BrutiSewaFoundation/admin_con/product/edit/1', '2026-01-02', '15:36:36', 2, 'admin@gmail.com', 'admin'),
(69, '::1', 'http://localhost/BrutiSewaFoundation/admin_con/product/listing', '2026-01-02', '15:36:51', 2, 'admin@gmail.com', 'admin'),
(70, '::1', 'http://localhost/BrutiSewaFoundation/admin_con/product/edit/1', '2026-01-02', '15:36:52', 2, 'admin@gmail.com', 'admin'),
(71, '::1', 'http://localhost/BrutiSewaFoundation/admin_con/product/edit/1', '2026-01-02', '15:37:12', 2, 'admin@gmail.com', 'admin'),
(72, '::1', 'http://localhost/BrutiSewaFoundation/admin_con/product/listing', '2026-01-02', '15:37:14', 2, 'admin@gmail.com', 'admin'),
(73, '::1', 'http://localhost/BrutiSewaFoundation/admin_con/product/edit/1', '2026-01-02', '15:38:17', 2, 'admin@gmail.com', 'admin'),
(74, '::1', 'http://localhost/BrutiSewaFoundation/admin_con/product/listing', '2026-01-02', '15:38:25', 2, 'admin@gmail.com', 'admin'),
(75, '::1', 'http://localhost/BrutiSewaFoundation/admin_con/product/edit/1', '2026-01-02', '15:38:27', 2, 'admin@gmail.com', 'admin'),
(76, '::1', 'http://localhost/BrutiSewaFoundation/admin_con/product/edit/1', '2026-01-02', '15:38:41', 2, 'admin@gmail.com', 'admin'),
(77, '::1', 'http://localhost/BrutiSewaFoundation/admin_con/product/listing', '2026-01-02', '15:38:52', 2, 'admin@gmail.com', 'admin'),
(78, '::1', 'http://localhost/BrutiSewaFoundation/admin_con/product/edit/1', '2026-01-02', '15:38:58', 2, 'admin@gmail.com', 'admin'),
(79, '::1', 'http://localhost/BrutiSewaFoundation/admin_con/product/listing', '2026-01-02', '15:39:10', 2, 'admin@gmail.com', 'admin'),
(80, '::1', 'http://localhost/BrutiSewaFoundation/admin_con/product/listing', '2026-01-02', '15:39:43', 2, 'admin@gmail.com', 'admin'),
(81, '::1', 'http://localhost/BrutiSewaFoundation/admin_con/product/listing', '2026-01-02', '15:40:12', 2, 'admin@gmail.com', 'admin'),
(82, '::1', 'http://localhost/BrutiSewaFoundation/admin_con/product/listing', '2026-01-02', '15:40:24', 2, 'admin@gmail.com', 'admin'),
(83, '::1', 'http://localhost/BrutiSewaFoundation/admin_con/product/edit/1', '2026-01-02', '15:40:28', 2, 'admin@gmail.com', 'admin'),
(84, '::1', 'http://localhost/BrutiSewaFoundation/admin_con/product/listing', '2026-01-02', '15:40:32', 2, 'admin@gmail.com', 'admin'),
(85, '::1', 'http://localhost/BrutiSewaFoundation/admin_con/product/edit/1', '2026-01-02', '15:40:33', 2, 'admin@gmail.com', 'admin'),
(86, '::1', 'http://localhost/BrutiSewaFoundation/admin_con/product/listing', '2026-01-02', '15:45:39', 2, 'admin@gmail.com', 'admin'),
(87, '::1', 'http://localhost/BrutiSewaFoundation/admin_con/product/edit/1', '2026-01-02', '15:46:11', 2, 'admin@gmail.com', 'admin'),
(88, '::1', 'http://localhost/BrutiSewaFoundation/admin_con/product/listing', '2026-01-02', '15:46:17', 2, 'admin@gmail.com', 'admin'),
(89, '::1', 'http://localhost/BrutiSewaFoundation/admin_con/product/add', '2026-01-02', '15:46:29', 2, 'admin@gmail.com', 'admin'),
(90, '::1', 'http://localhost/BrutiSewaFoundation/admin_con/product/listing', '2026-01-02', '15:48:35', 2, 'admin@gmail.com', 'admin'),
(91, '::1', 'http://localhost/BrutiSewaFoundation/admin_con/product/edit/2', '2026-01-02', '15:59:16', 2, 'admin@gmail.com', 'admin'),
(92, '::1', 'http://localhost/BrutiSewaFoundation/admin_con/product/listing', '2026-01-02', '15:59:18', 2, 'admin@gmail.com', 'admin'),
(93, '::1', 'http://localhost/BrutiSewaFoundation/admin_con/site_setting/edit/1', '2026-01-02', '16:00:12', 2, 'admin@gmail.com', 'admin'),
(94, '::1', 'http://localhost/BrutiSewaFoundation/admin_con/site_setting/edit/1', '2026-01-02', '16:00:32', 2, 'admin@gmail.com', 'admin'),
(95, '::1', 'http://localhost/BrutiSewaFoundation/admin_con/site_setting/edit/1', '2026-01-02', '16:00:58', 2, 'admin@gmail.com', 'admin'),
(96, '::1', 'http://localhost/BrutiSewaFoundation/admin_con/site_setting/edit/1', '2026-01-02', '16:01:59', 2, 'admin@gmail.com', 'admin'),
(97, '::1', 'http://localhost/BrutiSewaFoundation/admin_con/site_setting/edit/1', '2026-01-02', '16:02:47', 2, 'admin@gmail.com', 'admin'),
(98, '::1', 'http://localhost/BrutiSewaFoundation/admin_con/product/listing', '2026-01-02', '16:02:59', 2, 'admin@gmail.com', 'admin'),
(99, '::1', 'http://localhost/BrutiSewaFoundation/admin_con/product/edit/1', '2026-01-02', '16:03:01', 2, 'admin@gmail.com', 'admin'),
(100, '::1', 'http://localhost/BrutiSewaFoundation/admin_con/product/listing', '2026-01-02', '16:03:03', 2, 'admin@gmail.com', 'admin'),
(101, '::1', 'http://localhost/BrutiSewaFoundation/admin_con/product/listing', '2026-01-02', '16:45:57', 2, 'admin@gmail.com', 'admin'),
(102, '::1', 'http://localhost/BrutiSewaFoundation/admin_con/product/listing', '2026-01-02', '16:47:06', 2, 'admin@gmail.com', 'admin'),
(103, '::1', 'http://localhost/BrutiSewaFoundation/admin_con/product/listing', '2026-01-02', '16:48:25', 2, 'admin@gmail.com', 'admin'),
(104, '::1', 'http://localhost/BrutiSewaFoundation/admin_con/product/listing', '2026-01-02', '16:52:47', 2, 'admin@gmail.com', 'admin'),
(105, '::1', 'http://localhost/BrutiSewaFoundation/admin_con/product/listing', '2026-01-02', '16:54:19', 2, 'admin@gmail.com', 'admin'),
(106, '::1', 'http://localhost/BrutiSewaFoundation/admin_con/product/listing', '2026-01-02', '16:54:35', 2, 'admin@gmail.com', 'admin'),
(107, '::1', 'http://localhost/BrutiSewaFoundation/admin_con/role/listing', '2026-01-02', '16:54:37', 2, 'admin@gmail.com', 'admin'),
(108, '::1', 'http://localhost/BrutiSewaFoundation/admin_con/role/edit/4', '2026-01-02', '16:54:38', 2, 'admin@gmail.com', 'admin'),
(109, '::1', 'http://localhost/BrutiSewaFoundation/admin_con/role/listing', '2026-01-02', '16:54:46', 2, 'admin@gmail.com', 'admin'),
(110, '::1', 'http://localhost/BrutiSewaFoundation/admin_con/tbl_admin/listing', '2026-01-02', '16:54:55', 2, 'admin@gmail.com', 'admin'),
(111, '::1', 'http://localhost/BrutiSewaFoundation/admin/dashboard', '2026-01-02', '16:54:58', 4, 'azmal123', 'azmal123'),
(112, '::1', 'http://localhost/BrutiSewaFoundation/admin_con/user_orders/listing', '2026-01-02', '16:55:18', 4, 'azmal123', 'azmal123'),
(113, '::1', 'http://localhost/BrutiSewaFoundation/admin_con/user_orders/listing', '2026-01-02', '16:55:29', 4, 'azmal123', 'azmal123'),
(114, '::1', 'http://localhost/BrutiSewaFoundation/admin_con/user_orders/listing', '2026-01-02', '17:27:00', 4, 'azmal123', 'azmal123'),
(115, '::1', 'http://localhost/BrutiSewaFoundation/admin_con/user_orders/add', '2026-01-02', '17:27:03', 4, 'azmal123', 'azmal123'),
(116, '::1', 'http://localhost/BrutiSewaFoundation/admin_con/user_orders/add', '2026-01-02', '17:27:11', 4, 'azmal123', 'azmal123'),
(117, '::1', 'http://localhost/BrutiSewaFoundation/admin_con/user_orders/add', '2026-01-02', '17:28:00', 4, 'azmal123', 'azmal123'),
(118, '::1', 'http://localhost/BrutiSewaFoundation/admin_con/user_orders/add', '2026-01-02', '17:29:52', 4, 'azmal123', 'azmal123'),
(119, '::1', 'http://localhost/BrutiSewaFoundation/admin_con/user_orders/add', '2026-01-02', '17:30:02', 4, 'azmal123', 'azmal123'),
(120, '::1', 'http://localhost/BrutiSewaFoundation/admin_con/user_orders/add', '2026-01-02', '17:30:36', 4, 'azmal123', 'azmal123'),
(121, '::1', 'http://localhost/BrutiSewaFoundation/admin_con/user_orders/add', '2026-01-02', '17:42:04', 4, 'azmal123', 'azmal123'),
(122, '::1', 'http://localhost/BrutiSewaFoundation/admin_con/user_orders/add', '2026-01-02', '17:43:15', 4, 'azmal123', 'azmal123'),
(123, '::1', 'http://localhost/BrutiSewaFoundation/admin_con/user_orders/add', '2026-01-02', '17:43:52', 4, 'azmal123', 'azmal123'),
(124, '::1', 'http://localhost/BrutiSewaFoundation/admin_con/user_orders/add', '2026-01-02', '17:44:14', 4, 'azmal123', 'azmal123'),
(125, '::1', 'http://localhost/BrutiSewaFoundation/admin_con/user_orders/add', '2026-01-02', '17:45:28', 4, 'azmal123', 'azmal123'),
(126, '::1', 'http://localhost/BrutiSewaFoundation/admin_con/user_orders/add', '2026-01-02', '17:46:16', 4, 'azmal123', 'azmal123'),
(127, '::1', 'http://localhost/BrutiSewaFoundation/admin_con/user_orders/add', '2026-01-02', '17:46:23', 4, 'azmal123', 'azmal123'),
(128, '::1', 'http://localhost/BrutiSewaFoundation/admin_con/user_orders/add', '2026-01-02', '17:46:37', 4, 'azmal123', 'azmal123'),
(129, '::1', 'http://localhost/BrutiSewaFoundation/admin_con/user_orders/add', '2026-01-02', '17:46:49', 4, 'azmal123', 'azmal123'),
(130, '::1', 'http://localhost/BrutiSewaFoundation/admin_con/user_orders/add', '2026-01-02', '17:47:23', 4, 'azmal123', 'azmal123'),
(131, '::1', 'http://localhost/BrutiSewaFoundation/admin_con/user_orders/add', '2026-01-02', '17:49:35', 4, 'azmal123', 'azmal123'),
(132, '::1', 'http://localhost/BrutiSewaFoundation/admin_con/user_orders/add', '2026-01-02', '17:50:23', 4, 'azmal123', 'azmal123'),
(133, '::1', 'http://localhost/BrutiSewaFoundation/admin_con/user_orders/add', '2026-01-02', '17:50:49', 4, 'azmal123', 'azmal123'),
(134, '::1', 'http://localhost/BrutiSewaFoundation/admin_con/user_orders/add', '2026-01-02', '17:54:29', 4, 'azmal123', 'azmal123'),
(135, '::1', 'http://localhost/BrutiSewaFoundation/admin_con/user_orders/add', '2026-01-02', '17:54:45', 4, 'azmal123', 'azmal123'),
(136, '::1', 'http://localhost/BrutiSewaFoundation/admin_con/user_orders/add', '2026-01-02', '17:55:14', 4, 'azmal123', 'azmal123'),
(137, '::1', 'http://localhost/BrutiSewaFoundation/admin_con/user_orders/add', '2026-01-02', '17:55:30', 4, 'azmal123', 'azmal123'),
(138, '::1', 'http://localhost/BrutiSewaFoundation/admin_con/user_orders/add', '2026-01-02', '17:59:26', 4, 'azmal123', 'azmal123'),
(139, '::1', 'http://localhost/BrutiSewaFoundation/admin_con/user_orders/add', '2026-01-02', '18:00:00', 4, 'azmal123', 'azmal123'),
(140, '::1', 'http://localhost/BrutiSewaFoundation/admin_con/user_orders/add', '2026-01-02', '18:14:55', 4, 'azmal123', 'azmal123'),
(141, '::1', 'http://localhost/BrutiSewaFoundation/admin_con/user_orders/listing', '2026-01-02', '18:15:26', 4, 'azmal123', 'azmal123'),
(142, '::1', 'http://localhost/BrutiSewaFoundation/admin_con/user_orders/listing', '2026-01-02', '18:16:44', 4, 'azmal123', 'azmal123'),
(143, '::1', 'http://localhost/BrutiSewaFoundation/admin_con/user_orders/add', '2026-01-02', '18:16:47', 4, 'azmal123', 'azmal123'),
(144, '::1', 'http://localhost/BrutiSewaFoundation/admin_con/user_orders/listing', '2026-01-02', '18:16:59', 4, 'azmal123', 'azmal123'),
(145, '::1', 'http://localhost/BrutiSewaFoundation/admin_con/user_orders/edit/2', '2026-01-02', '18:18:09', 4, 'azmal123', 'azmal123'),
(146, '::1', 'http://localhost/BrutiSewaFoundation/admin_con/user_orders/edit/2', '2026-01-02', '18:21:04', 4, 'azmal123', 'azmal123'),
(147, '::1', 'http://localhost/BrutiSewaFoundation/admin_con/user_orders/edit/2', '2026-01-02', '18:21:06', 4, 'azmal123', 'azmal123'),
(148, '::1', 'http://localhost/BrutiSewaFoundation/admin_con/user_orders/edit/2', '2026-01-02', '18:21:43', 4, 'azmal123', 'azmal123'),
(149, '::1', 'http://localhost/BrutiSewaFoundation/admin_con/user_orders/edit/2', '2026-01-02', '18:23:43', 4, 'azmal123', 'azmal123'),
(150, '::1', 'http://localhost/BrutiSewaFoundation/admin_con/user_orders/edit/2', '2026-01-02', '18:23:44', 4, 'azmal123', 'azmal123'),
(151, '::1', 'http://localhost/BrutiSewaFoundation/admin_con/user_orders/edit/2', '2026-01-02', '18:24:58', 4, 'azmal123', 'azmal123'),
(152, '::1', 'http://localhost/BrutiSewaFoundation/admin_con/user_orders/edit/2', '2026-01-02', '18:25:03', 4, 'azmal123', 'azmal123'),
(153, '::1', 'http://localhost/BrutiSewaFoundation/admin_con/user_orders/add', '2026-01-02', '18:25:11', 4, 'azmal123', 'azmal123'),
(154, '::1', 'http://localhost/BrutiSewaFoundation/admin_con/user_orders/add', '2026-01-02', '18:25:36', 4, 'azmal123', 'azmal123'),
(155, '::1', 'http://localhost/BrutiSewaFoundation/admin_con/user_orders/edit/2', '2026-01-02', '18:25:44', 4, 'azmal123', 'azmal123'),
(156, '::1', 'http://localhost/BrutiSewaFoundation/admin_con/user_orders/edit/2', '2026-01-02', '18:25:45', 4, 'azmal123', 'azmal123'),
(157, '::1', 'http://localhost/BrutiSewaFoundation/admin_con/user_orders/edit/2', '2026-01-02', '18:25:46', 4, 'azmal123', 'azmal123'),
(158, '::1', 'http://localhost/BrutiSewaFoundation/admin_con/tbl_admin/listing', '2026-01-02', '18:27:42', 2, 'admin@gmail.com', 'admin'),
(159, '::1', 'http://localhost/BrutiSewaFoundation/admin_con/user_orders/edit/2', '2026-01-02', '18:27:44', 4, 'azmal123', 'azmal123'),
(160, '::1', 'http://localhost/BrutiSewaFoundation/admin_con/user_orders/edit/2', '2026-01-02', '18:27:54', 4, 'azmal123', 'azmal123'),
(161, '::1', 'http://localhost/BrutiSewaFoundation/admin_con/user_orders/edit/2', '2026-01-02', '18:29:34', 4, 'azmal123', 'azmal123'),
(162, '::1', 'http://localhost/BrutiSewaFoundation/admin_con/user_orders/listing', '2026-01-02', '18:29:47', 4, 'azmal123', 'azmal123'),
(163, '::1', 'http://localhost/BrutiSewaFoundation/admin_con/user_orders/listing', '2026-01-02', '18:29:48', 4, 'azmal123', 'azmal123'),
(164, '::1', 'http://localhost/BrutiSewaFoundation/admin_con/user_orders/add', '2026-01-02', '18:29:49', 4, 'azmal123', 'azmal123'),
(165, '::1', 'http://localhost/BrutiSewaFoundation/admin_con/user_orders/listing', '2026-01-02', '18:29:57', 4, 'azmal123', 'azmal123'),
(166, '::1', 'http://localhost/BrutiSewaFoundation/admin_con/user_orders/add', '2026-01-02', '18:29:57', 4, 'azmal123', 'azmal123'),
(167, '::1', 'http://localhost/BrutiSewaFoundation/admin_con/user_orders/listing', '2026-01-02', '18:30:07', 4, 'azmal123', 'azmal123'),
(168, '::1', 'http://localhost/BrutiSewaFoundation/admin_con/user_orders/edit/2', '2026-01-02', '18:30:12', 4, 'azmal123', 'azmal123'),
(169, '::1', 'http://localhost/BrutiSewaFoundation/admin_con/user_orders/edit/2', '2026-01-02', '18:33:18', 4, 'azmal123', 'azmal123'),
(170, '::1', 'http://localhost/BrutiSewaFoundation/admin_con/user_orders/listing', '2026-01-02', '18:33:56', 4, 'azmal123', 'azmal123'),
(171, '::1', 'http://localhost/BrutiSewaFoundation/admin_con/user_orders/add', '2026-01-02', '18:33:57', 4, 'azmal123', 'azmal123'),
(172, '::1', 'http://localhost/BrutiSewaFoundation/admin_con/user_orders/add', '2026-01-02', '18:35:36', 4, 'azmal123', 'azmal123'),
(173, '::1', 'http://localhost/BrutiSewaFoundation/admin_con/user_orders/listing', '2026-01-02', '18:35:39', 4, 'azmal123', 'azmal123'),
(174, '::1', 'http://localhost/BrutiSewaFoundation/admin_con/user_orders/listing', '2026-01-02', '18:36:34', 4, 'azmal123', 'azmal123'),
(175, '::1', 'http://localhost/BrutiSewaFoundation/admin_con/user_orders/listing', '2026-01-02', '18:37:12', 4, 'azmal123', 'azmal123'),
(176, '::1', 'http://localhost/BrutiSewaFoundation/admin_con/user_orders/edit/2', '2026-01-02', '18:38:47', 4, 'azmal123', 'azmal123'),
(177, '::1', 'http://localhost/BrutiSewaFoundation/admin_con/user_orders/listing', '2026-01-02', '18:38:52', 4, 'azmal123', 'azmal123'),
(178, '::1', 'http://localhost/BrutiSewaFoundation/admin_con/user_orders/edit/2', '2026-01-02', '18:39:34', 4, 'azmal123', 'azmal123'),
(179, '::1', 'http://localhost/BrutiSewaFoundation/admin_con/user_orders/listing', '2026-01-02', '18:39:35', 4, 'azmal123', 'azmal123'),
(180, '::1', 'http://localhost/BrutiSewaFoundation/admin_con/user_orders/edit/1', '2026-01-02', '18:39:44', 4, 'azmal123', 'azmal123'),
(181, '::1', 'http://localhost/BrutiSewaFoundation/admin_con/user_orders/listing', '2026-01-02', '18:39:48', 4, 'azmal123', 'azmal123'),
(182, '::1', 'http://localhost/BrutiSewaFoundation/admin_con/user_orders/listing', '2026-01-02', '18:41:42', 4, 'azmal123', 'azmal123'),
(183, '::1', 'http://localhost/BrutiSewaFoundation/admin_con/user_orders/listing', '2026-01-02', '18:42:46', 4, 'azmal123', 'azmal123'),
(184, '::1', 'http://localhost/BrutiSewaFoundation/admin_con/user_orders/listing', '2026-01-02', '18:43:24', 4, 'azmal123', 'azmal123'),
(185, '::1', 'http://localhost/BrutiSewaFoundation/admin_con/user_orders/listing', '2026-01-02', '18:43:45', 4, 'azmal123', 'azmal123'),
(186, '::1', 'http://localhost/BrutiSewaFoundation/admin_con/user_orders/listing', '2026-01-02', '18:44:07', 4, 'azmal123', 'azmal123'),
(187, '::1', 'http://localhost/BrutiSewaFoundation/admin/access_denied', '2026-01-02', '18:44:08', 4, 'azmal123', 'azmal123'),
(188, '::1', 'http://localhost/BrutiSewaFoundation/admin_con/role/listing', '2026-01-02', '18:44:31', 2, 'admin@gmail.com', 'admin'),
(189, '::1', 'http://localhost/BrutiSewaFoundation/admin_con/role/edit/4', '2026-01-02', '18:44:33', 2, 'admin@gmail.com', 'admin'),
(190, '::1', 'http://localhost/BrutiSewaFoundation/admin_con/role/listing', '2026-01-02', '18:44:35', 2, 'admin@gmail.com', 'admin'),
(191, '::1', 'http://localhost/BrutiSewaFoundation/admin/access_denied', '2026-01-02', '18:44:36', 4, 'azmal123', 'azmal123'),
(192, '::1', 'http://localhost/BrutiSewaFoundation/admin_con/user_orders/listing', '2026-01-02', '18:44:38', 4, 'azmal123', 'azmal123'),
(193, '::1', 'http://localhost/BrutiSewaFoundation/admin_con/user_orders/view/2', '2026-01-02', '18:44:39', 4, 'azmal123', 'azmal123'),
(194, '::1', 'http://localhost/BrutiSewaFoundation/admin_con/user_orders/view/2', '2026-01-02', '18:44:58', 4, 'azmal123', 'azmal123'),
(195, '::1', 'http://localhost/BrutiSewaFoundation/admin_con/user_orders/view/2', '2026-01-02', '18:45:07', 4, 'azmal123', 'azmal123'),
(196, '::1', 'http://localhost/BrutiSewaFoundation/admin_con/user_orders/view/2', '2026-01-02', '18:45:28', 4, 'azmal123', 'azmal123'),
(197, '::1', 'http://localhost/BrutiSewaFoundation/admin_con/user_orders/view/2', '2026-01-02', '18:46:13', 4, 'azmal123', 'azmal123'),
(198, '::1', 'http://localhost/BrutiSewaFoundation/admin_con/user_orders/view/2', '2026-01-02', '18:46:15', 4, 'azmal123', 'azmal123'),
(199, '::1', 'http://localhost/BrutiSewaFoundation/admin_con/user_orders/view/2', '2026-01-02', '18:47:02', 4, 'azmal123', 'azmal123'),
(200, '::1', 'http://localhost/BrutiSewaFoundation/admin_con/user_orders/view/2', '2026-01-02', '18:47:03', 4, 'azmal123', 'azmal123'),
(201, '::1', 'http://localhost/BrutiSewaFoundation/admin_con/user_orders/view/2', '2026-01-02', '18:47:21', 4, 'azmal123', 'azmal123'),
(202, '::1', 'http://localhost/BrutiSewaFoundation/admin_con/user_orders/view/2', '2026-01-02', '18:48:19', 4, 'azmal123', 'azmal123'),
(203, '::1', 'http://localhost/BrutiSewaFoundation/admin_con/user_orders/view/2', '2026-01-02', '18:48:35', 4, 'azmal123', 'azmal123'),
(204, '::1', 'http://localhost/BrutiSewaFoundation/admin_con/user_orders/view/2', '2026-01-02', '18:48:47', 4, 'azmal123', 'azmal123'),
(205, '::1', 'http://localhost/BrutiSewaFoundation/admin_con/user_orders/listing', '2026-01-02', '18:49:02', 4, 'azmal123', 'azmal123'),
(206, '::1', 'http://localhost/BrutiSewaFoundation/admin_con/user_orders/edit/2', '2026-01-02', '18:49:12', 4, 'azmal123', 'azmal123'),
(207, '::1', 'http://localhost/BrutiSewaFoundation/admin_con/user_orders/listing', '2026-01-02', '18:50:05', 4, 'azmal123', 'azmal123'),
(208, '::1', 'http://localhost/BrutiSewaFoundation/admin_con/user_orders/listing', '2026-01-02', '18:50:56', 4, 'azmal123', 'azmal123'),
(209, '::1', 'http://localhost/BrutiSewaFoundation/admin_con/user_orders/view/2', '2026-01-02', '18:51:01', 4, 'azmal123', 'azmal123'),
(210, '::1', 'http://localhost/BrutiSewaFoundation/admin_con/user_orders/listing', '2026-01-02', '18:51:17', 4, 'azmal123', 'azmal123'),
(211, '::1', 'http://localhost/BrutiSewaFoundation/admin_con/user_orders/listing', '2026-01-02', '18:54:33', 4, 'azmal123', 'azmal123'),
(212, '::1', 'http://localhost/BrutiSewaFoundation/admin_con/user_orders/listing', '2026-01-02', '18:54:51', 4, 'azmal123', 'azmal123'),
(213, '::1', 'http://localhost/BrutiSewaFoundation/admin_con/user_orders/listing', '2026-01-02', '18:54:57', 4, 'azmal123', 'azmal123'),
(214, '::1', 'http://localhost/BrutiSewaFoundation/admin_con/user_orders/listing', '2026-01-02', '18:55:19', 4, 'azmal123', 'azmal123'),
(215, '::1', 'http://localhost/BrutiSewaFoundation/admin_con/user_orders/listing', '2026-01-02', '18:55:30', 4, 'azmal123', 'azmal123'),
(216, '::1', 'http://localhost/BrutiSewaFoundation/admin_con/user_orders/listing', '2026-01-02', '18:58:41', 2, 'admin@gmail.com', 'admin'),
(217, '::1', 'http://localhost/BrutiSewaFoundation/admin_con/user_orders/listing', '2026-01-02', '18:58:46', 2, 'admin@gmail.com', 'admin'),
(218, '::1', 'http://localhost/BrutiSewaFoundation/admin_con/user_orders/listing', '2026-01-02', '18:59:14', 4, 'azmal123', 'azmal123'),
(219, '::1', 'http://localhost/BrutiSewaFoundation/admin_con/user_orders/listing', '2026-01-02', '18:59:30', 4, 'azmal123', 'azmal123'),
(220, '::1', 'http://localhost/BrutiSewaFoundation/admin_con/orders/listing', '2026-01-02', '19:04:37', 2, 'admin@gmail.com', 'admin'),
(221, '::1', 'http://localhost/BrutiSewaFoundation/admin_con/orders/listing', '2026-01-02', '19:04:54', 2, 'admin@gmail.com', 'admin'),
(222, '::1', 'http://localhost/BrutiSewaFoundation/admin_con/orders/listing', '2026-01-02', '19:05:22', 2, 'admin@gmail.com', 'admin'),
(223, '::1', 'http://localhost/BrutiSewaFoundation/admin_con/orders/listing', '2026-01-02', '19:05:30', 2, 'admin@gmail.com', 'admin'),
(224, '::1', 'http://localhost/BrutiSewaFoundation/admin_con/orders/listing', '2026-01-02', '19:05:48', 2, 'admin@gmail.com', 'admin'),
(225, '::1', 'http://localhost/BrutiSewaFoundation/admin_con/orders/listing', '2026-01-02', '19:06:46', 2, 'admin@gmail.com', 'admin'),
(226, '::1', 'http://localhost/BrutiSewaFoundation/admin_con/orders/listing', '2026-01-02', '19:07:06', 2, 'admin@gmail.com', 'admin'),
(227, '::1', 'http://localhost/BrutiSewaFoundation/admin_con/orders/add', '2026-01-02', '19:07:19', 2, 'admin@gmail.com', 'admin'),
(228, '::1', 'http://localhost/BrutiSewaFoundation/admin_con/orders/listing', '2026-01-02', '19:07:28', 2, 'admin@gmail.com', 'admin'),
(229, '::1', 'http://localhost/BrutiSewaFoundation/admin_con/user_orders/listing', '2026-01-02', '19:07:54', 4, 'azmal123', 'azmal123'),
(230, '::1', 'http://localhost/BrutiSewaFoundation/admin_con/user_orders/listing', '2026-01-02', '19:08:48', 4, 'azmal123', 'azmal123'),
(231, '::1', 'http://localhost/BrutiSewaFoundation/admin_con/orders/listing', '2026-01-02', '19:08:55', 2, 'admin@gmail.com', 'admin'),
(232, '::1', 'http://localhost/BrutiSewaFoundation/admin_con/orders/edit/2', '2026-01-02', '19:08:58', 2, 'admin@gmail.com', 'admin'),
(233, '::1', 'http://localhost/BrutiSewaFoundation/admin_con/orders/edit/2', '2026-01-02', '19:09:27', 2, 'admin@gmail.com', 'admin'),
(234, '::1', 'http://localhost/BrutiSewaFoundation/admin_con/orders/edit/2', '2026-01-02', '19:10:28', 2, 'admin@gmail.com', 'admin'),
(235, '::1', 'http://localhost/BrutiSewaFoundation/admin_con/orders/listing', '2026-01-02', '19:10:32', 2, 'admin@gmail.com', 'admin'),
(236, '::1', 'http://localhost/BrutiSewaFoundation/admin_con/orders/view/1', '2026-01-02', '19:10:33', 2, 'admin@gmail.com', 'admin'),
(237, '::1', 'http://localhost/BrutiSewaFoundation/admin_con/orders/view/1', '2026-01-02', '19:10:38', 2, 'admin@gmail.com', 'admin'),
(238, '::1', 'http://localhost/BrutiSewaFoundation/admin_con/orders/listing', '2026-01-02', '19:10:48', 2, 'admin@gmail.com', 'admin'),
(239, '::1', 'http://localhost/BrutiSewaFoundation/admin_con/orders/edit/1', '2026-01-02', '19:10:49', 2, 'admin@gmail.com', 'admin'),
(240, '::1', 'http://localhost/BrutiSewaFoundation/admin_con/orders/edit/1', '2026-01-02', '19:11:08', 2, 'admin@gmail.com', 'admin'),
(241, '::1', 'http://localhost/BrutiSewaFoundation/admin_con/orders/edit/1', '2026-01-02', '19:11:31', 2, 'admin@gmail.com', 'admin'),
(242, '::1', 'http://localhost/BrutiSewaFoundation/admin_con/orders/edit/1', '2026-01-02', '19:11:31', 2, 'admin@gmail.com', 'admin'),
(243, '::1', 'http://localhost/BrutiSewaFoundation/admin_con/orders/edit/1', '2026-01-02', '19:12:50', 2, 'admin@gmail.com', 'admin'),
(244, '::1', 'http://localhost/BrutiSewaFoundation/admin_con/orders/edit/1', '2026-01-02', '19:12:51', 2, 'admin@gmail.com', 'admin'),
(245, '::1', 'http://localhost/BrutiSewaFoundation/admin_con/orders/listing', '2026-01-02', '19:14:04', 2, 'admin@gmail.com', 'admin'),
(246, '::1', 'http://localhost/BrutiSewaFoundation/admin_con/orders/edit/2', '2026-01-02', '19:14:22', 2, 'admin@gmail.com', 'admin'),
(247, '::1', 'http://localhost/BrutiSewaFoundation/admin_con/orders/listing', '2026-01-02', '19:14:26', 2, 'admin@gmail.com', 'admin'),
(248, '::1', 'http://localhost/BrutiSewaFoundation/admin_con/orders/view/2', '2026-01-02', '19:14:43', 2, 'admin@gmail.com', 'admin'),
(249, '::1', 'http://localhost/BrutiSewaFoundation/admin_con/orders/listing', '2026-01-02', '19:14:47', 2, 'admin@gmail.com', 'admin'),
(250, '::1', 'http://localhost/BrutiSewaFoundation/admin_con/orders/edit/2', '2026-01-02', '19:14:48', 2, 'admin@gmail.com', 'admin'),
(251, '::1', 'http://localhost/BrutiSewaFoundation/admin_con/orders/edit/2', '2026-01-02', '19:18:01', 2, 'admin@gmail.com', 'admin'),
(252, '::1', 'http://localhost/BrutiSewaFoundation/admin_con/orders/edit/2', '2026-01-02', '19:18:27', 2, 'admin@gmail.com', 'admin'),
(253, '::1', 'http://localhost/BrutiSewaFoundation/admin_con/orders/listing', '2026-01-02', '19:18:34', 2, 'admin@gmail.com', 'admin'),
(254, '::1', 'http://localhost/BrutiSewaFoundation/admin_con/orders/view/2', '2026-01-02', '19:18:35', 2, 'admin@gmail.com', 'admin'),
(255, '::1', 'http://localhost/BrutiSewaFoundation/admin_con/orders/listing', '2026-01-02', '19:18:37', 2, 'admin@gmail.com', 'admin'),
(256, '::1', 'http://localhost/BrutiSewaFoundation/admin_con/orders/edit/2', '2026-01-02', '19:18:38', 2, 'admin@gmail.com', 'admin'),
(257, '::1', 'http://localhost/BrutiSewaFoundation/admin_con/orders/listing', '2026-01-02', '19:18:52', 2, 'admin@gmail.com', 'admin'),
(258, '::1', 'http://localhost/BrutiSewaFoundation/admin_con/orders/listing', '2026-01-02', '19:19:38', 2, 'admin@gmail.com', 'admin'),
(259, '::1', 'http://localhost/BrutiSewaFoundation/admin_con/orders/edit/2', '2026-01-02', '19:19:50', 2, 'admin@gmail.com', 'admin'),
(260, '::1', 'http://localhost/BrutiSewaFoundation/admin_con/orders/listing', '2026-01-02', '19:19:52', 2, 'admin@gmail.com', 'admin'),
(261, '::1', 'http://localhost/BrutiSewaFoundation/admin_con/orders/listing', '2026-01-02', '19:20:03', 2, 'admin@gmail.com', 'admin'),
(262, '::1', 'http://localhost/BrutiSewaFoundation/admin_con/orders/listing', '2026-01-03', '10:22:38', 2, 'admin@gmail.com', 'admin'),
(263, '::1', 'http://localhost/BrutiSewaFoundation/admin/dashboard', '2026-01-03', '10:26:22', 4, 'azmal123', 'azmal123'),
(264, '::1', 'http://localhost/BrutiSewaFoundation/admin_con/user_orders/listing', '2026-01-03', '10:26:24', 4, 'azmal123', 'azmal123'),
(265, '::1', 'http://localhost/BrutiSewaFoundation/admin_con/orders/listing', '2026-01-03', '10:28:42', 2, 'admin@gmail.com', 'admin'),
(266, '::1', 'http://localhost/BrutiSewaFoundation/admin_con/user_orders/listing', '2026-01-03', '10:28:57', 4, 'azmal123', 'azmal123'),
(267, '::1', 'http://localhost/BrutiSewaFoundation/admin_con/orders/listing', '2026-01-03', '10:30:39', 2, 'admin@gmail.com', 'admin'),
(268, '::1', 'http://localhost/BrutiSewaFoundation/admin_con/user_orders/listing', '2026-01-03', '10:30:42', 4, 'azmal123', 'azmal123'),
(269, '::1', 'http://localhost/BrutiSewaFoundation/admin_con/user_orders/listing', '2026-01-03', '10:30:50', 4, 'azmal123', 'azmal123'),
(270, '::1', 'http://localhost/BrutiSewaFoundation/admin_con/orders/listing', '2026-01-03', '10:30:53', 2, 'admin@gmail.com', 'admin'),
(271, '::1', 'http://localhost/BrutiSewaFoundation/admin_con/orders/listing', '2026-01-03', '10:31:42', 2, 'admin@gmail.com', 'admin'),
(272, '::1', 'http://localhost/BrutiSewaFoundation/admin_con/orders/listing', '2026-01-03', '10:31:44', 2, 'admin@gmail.com', 'admin'),
(273, '::1', 'http://localhost/BrutiSewaFoundation/admin_con/user_orders/listing', '2026-01-03', '10:31:46', 4, 'azmal123', 'azmal123'),
(274, '::1', 'http://localhost/BrutiSewaFoundation/admin_con/role/listing', '2026-01-03', '10:36:31', 2, 'admin@gmail.com', 'admin'),
(275, '::1', 'http://localhost/BrutiSewaFoundation/admin_con/role/edit/4', '2026-01-03', '10:36:33', 2, 'admin@gmail.com', 'admin'),
(276, '::1', 'http://localhost/BrutiSewaFoundation/admin_con/role/listing', '2026-01-03', '10:36:38', 2, 'admin@gmail.com', 'admin'),
(277, '::1', 'http://localhost/BrutiSewaFoundation/admin/dashboard', '2026-01-03', '10:39:59', 4, 'azmal123', 'azmal123'),
(278, '::1', 'http://localhost/BrutiSewaFoundation/admin_con/edit_profile/edit', '2026-01-03', '10:40:04', 4, 'azmal123', 'azmal123'),
(279, '::1', 'http://localhost/BrutiSewaFoundation/admin/dashboard', '2026-01-03', '10:40:11', 4, 'azmal123', 'azmal123'),
(280, '::1', 'http://localhost/BrutiSewaFoundation/admin_con/edit_profile/edit', '2026-01-03', '10:40:15', 4, 'azmal123', 'azmal123'),
(281, '::1', 'http://localhost/BrutiSewaFoundation/admin/dashboard', '2026-01-03', '10:41:17', 4, 'azmal123', 'azmal123'),
(282, '::1', 'http://localhost/BrutiSewaFoundation/admin_con/user_orders/listing', '2026-01-03', '10:41:26', 4, 'azmal123', 'azmal123'),
(283, '::1', 'http://localhost/BrutiSewaFoundation/admin_con/user_orders/edit/2', '2026-01-03', '10:41:35', 4, 'azmal123', 'azmal123'),
(284, '::1', 'http://localhost/BrutiSewaFoundation/admin_con/user_orders/listing', '2026-01-03', '10:41:52', 4, 'azmal123', 'azmal123'),
(285, '::1', 'http://localhost/BrutiSewaFoundation/admin_con/orders/listing', '2026-01-03', '10:49:40', 2, 'admin@gmail.com', 'admin'),
(286, '::1', 'http://localhost/BrutiSewaFoundation/admin/dashboard', '2026-01-03', '10:50:00', 2, 'admin@gmail.com', 'admin'),
(287, '::1', 'http://localhost/BrutiSewaFoundation/admin/dashboard', '2026-01-03', '10:51:06', 2, 'admin@gmail.com', 'admin'),
(288, '::1', 'http://localhost/BrutiSewaFoundation/admin/dashboard', '2026-01-03', '10:53:34', 2, 'admin@gmail.com', 'admin'),
(289, '::1', 'http://localhost/BrutiSewaFoundation/admin/dashboard', '2026-01-03', '10:53:53', 2, 'admin@gmail.com', 'admin'),
(290, '::1', 'http://localhost/BrutiSewaFoundation/admin/dashboard', '2026-01-03', '10:54:09', 2, 'admin@gmail.com', 'admin'),
(291, '::1', 'http://localhost/BrutiSewaFoundation/admin/dashboard', '2026-01-03', '10:54:54', 2, 'admin@gmail.com', 'admin'),
(292, '::1', 'http://localhost/BrutiSewaFoundation/admin/dashboard', '2026-01-03', '10:57:05', 2, 'admin@gmail.com', 'admin'),
(293, '::1', 'http://localhost/BrutiSewaFoundation/admin/dashboard', '2026-01-03', '10:57:20', 2, 'admin@gmail.com', 'admin'),
(294, '::1', 'http://localhost/BrutiSewaFoundation/admin/dashboard', '2026-01-03', '10:57:28', 2, 'admin@gmail.com', 'admin'),
(295, '::1', 'http://localhost/BrutiSewaFoundation/admin/dashboard', '2026-01-03', '10:57:59', 2, 'admin@gmail.com', 'admin'),
(296, '::1', 'http://localhost/BrutiSewaFoundation/admin/dashboard', '2026-01-03', '10:58:07', 2, 'admin@gmail.com', 'admin'),
(297, '::1', 'http://localhost/BrutiSewaFoundation/admin/dashboard', '2026-01-03', '10:59:21', 2, 'admin@gmail.com', 'admin'),
(298, '::1', 'http://localhost/BrutiSewaFoundation/admin/dashboard', '2026-01-03', '10:59:23', 2, 'admin@gmail.com', 'admin'),
(299, '::1', 'http://localhost/BrutiSewaFoundation/admin/dashboard', '2026-01-03', '10:59:31', 2, 'admin@gmail.com', 'admin'),
(300, '::1', 'http://localhost/BrutiSewaFoundation/admin/dashboard', '2026-01-03', '10:59:32', 2, 'admin@gmail.com', 'admin'),
(301, '::1', 'http://localhost/BrutiSewaFoundation/admin/dashboard', '2026-01-03', '11:00:27', 2, 'admin@gmail.com', 'admin'),
(302, '::1', 'http://localhost/BrutiSewaFoundation/admin/dashboard', '2026-01-03', '11:02:09', 2, 'admin@gmail.com', 'admin'),
(303, '::1', 'http://localhost/BrutiSewaFoundation/admin_con/orders/listing', '2026-01-03', '11:02:12', 2, 'admin@gmail.com', 'admin'),
(304, '::1', 'http://localhost/BrutiSewaFoundation/admin/dashboard', '2026-01-03', '11:02:20', 2, 'admin@gmail.com', 'admin'),
(305, '::1', 'http://localhost/BrutiSewaFoundation/admin/dashboard', '2026-01-03', '11:02:33', 2, 'admin@gmail.com', 'admin'),
(306, '::1', 'http://localhost/BrutiSewaFoundation/admin/dashboard', '2026-01-03', '11:03:54', 2, 'admin@gmail.com', 'admin'),
(307, '::1', 'http://localhost/BrutiSewaFoundation/admin/dashboard', '2026-01-03', '11:04:18', 2, 'admin@gmail.com', 'admin'),
(308, '::1', 'http://localhost/BrutiSewaFoundation/admin_con/user_orders/add', '2026-01-03', '11:04:26', 4, 'azmal123', 'azmal123'),
(309, '::1', 'http://localhost/BrutiSewaFoundation/admin_con/user_orders/listing', '2026-01-03', '11:04:34', 4, 'azmal123', 'azmal123'),
(310, '::1', 'http://localhost/BrutiSewaFoundation/admin/dashboard', '2026-01-03', '11:04:37', 2, 'admin@gmail.com', 'admin'),
(311, '::1', 'http://localhost/BrutiSewaFoundation/admin/dashboard', '2026-01-03', '11:15:22', 2, 'admin@gmail.com', 'admin'),
(312, '::1', 'http://localhost/BrutiSewaFoundation/admin/dashboard', '2026-01-03', '11:17:00', 2, 'admin@gmail.com', 'admin'),
(313, '::1', 'http://localhost/BrutiSewaFoundation/admin_con/tbl_admin/listing', '2026-01-03', '11:17:01', 2, 'admin@gmail.com', 'admin'),
(314, '::1', 'http://localhost/BrutiSewaFoundation/admin/dashboard', '2026-01-03', '11:17:04', 2, 'admin@gmail.com', 'admin'),
(315, '::1', 'http://localhost/BrutiSewaFoundation/admin_con/orders/listing', '2026-01-03', '11:17:05', 2, 'admin@gmail.com', 'admin'),
(316, '::1', 'http://localhost/BrutiSewaFoundation/admin/dashboard', '2026-01-03', '11:17:06', 2, 'admin@gmail.com', 'admin'),
(317, '::1', 'http://localhost/BrutiSewaFoundation/admin_con/orders/listing', '2026-01-03', '11:17:07', 2, 'admin@gmail.com', 'admin'),
(318, '::1', 'http://localhost/BrutiSewaFoundation/admin_con/orders/listing', '2026-01-03', '11:17:43', 2, 'admin@gmail.com', 'admin'),
(319, '::1', 'http://localhost/BrutiSewaFoundation/admin_con/orders/listing', '2026-01-03', '11:17:58', 2, 'admin@gmail.com', 'admin'),
(320, '::1', 'http://localhost/BrutiSewaFoundation/admin_con/orders/listing', '2026-01-03', '11:20:11', 2, 'admin@gmail.com', 'admin'),
(321, '::1', 'http://localhost/BrutiSewaFoundation/admin_con/user_orders/listing', '2026-01-03', '11:20:49', 4, 'azmal123', 'azmal123'),
(322, '::1', 'http://localhost/BrutiSewaFoundation/admin/dashboard', '2026-01-03', '11:21:13', 4, 'azmal123', 'azmal123'),
(323, '::1', 'http://localhost/BrutiSewaFoundation/admin/dashboard', '2026-01-03', '11:21:57', 4, 'azmal123', 'azmal123'),
(324, '::1', 'http://localhost/BrutiSewaFoundation/admin/dashboard', '2026-01-03', '11:21:58', 4, 'azmal123', 'azmal123'),
(325, '::1', 'http://localhost/BrutiSewaFoundation/admin/dashboard', '2026-01-03', '11:22:03', 4, 'azmal123', 'azmal123'),
(326, '::1', 'http://localhost/BrutiSewaFoundation/admin/dashboard', '2026-01-03', '11:22:06', 2, 'admin@gmail.com', 'admin'),
(327, '::1', 'http://localhost/BrutiSewaFoundation/admin/dashboard', '2026-01-03', '11:22:35', 2, 'admin@gmail.com', 'admin'),
(328, '::1', 'http://localhost/BrutiSewaFoundation/admin/dashboard', '2026-01-03', '11:23:11', 2, 'admin@gmail.com', 'admin'),
(329, '::1', 'http://localhost/BrutiSewaFoundation/admin/dashboard', '2026-01-03', '11:23:19', 2, 'admin@gmail.com', 'admin'),
(330, '::1', 'http://localhost/BrutiSewaFoundation/admin_con/orders/listing', '2026-01-03', '11:23:22', 2, 'admin@gmail.com', 'admin'),
(331, '::1', 'http://localhost/BrutiSewaFoundation/admin_con/orders/listing', '2026-01-03', '11:23:53', 2, 'admin@gmail.com', 'admin'),
(332, '::1', 'http://localhost/BrutiSewaFoundation/admin_con/orders/view/1', '2026-01-03', '11:24:09', 2, 'admin@gmail.com', 'admin'),
(333, '::1', 'http://localhost/BrutiSewaFoundation/admin_con/orders/listing', '2026-01-03', '11:24:12', 2, 'admin@gmail.com', 'admin'),
(334, '::1', 'http://localhost/BrutiSewaFoundation/admin/dashboard', '2026-01-03', '11:28:23', 2, 'admin@gmail.com', 'admin'),
(335, '::1', 'http://localhost/BrutiSewaFoundation/admin/dashboard', '2026-01-03', '11:28:39', 2, 'admin@gmail.com', 'admin'),
(336, '::1', 'http://localhost/BrutiSewaFoundation/admin/dashboard', '2026-01-03', '11:28:57', 2, 'admin@gmail.com', 'admin'),
(337, '::1', 'http://localhost/BrutiSewaFoundation/admin/dashboard', '2026-01-03', '11:30:18', 2, 'admin@gmail.com', 'admin'),
(338, '::1', 'http://localhost/BrutiSewaFoundation/admin/dashboard', '2026-01-03', '11:30:32', 2, 'admin@gmail.com', 'admin'),
(339, '::1', 'http://localhost/BrutiSewaFoundation/admin/dashboard', '2026-01-03', '11:31:20', 2, 'admin@gmail.com', 'admin'),
(340, '::1', 'http://localhost/BrutiSewaFoundation/admin/dashboard', '2026-01-03', '11:31:31', 2, 'admin@gmail.com', 'admin'),
(341, '::1', 'http://localhost/BrutiSewaFoundation/admin/dashboard', '2026-01-03', '11:32:38', 2, 'admin@gmail.com', 'admin'),
(342, '::1', 'http://localhost/BrutiSewaFoundation/admin/dashboard', '2026-01-03', '11:32:46', 2, 'admin@gmail.com', 'admin'),
(343, '::1', 'http://localhost/BrutiSewaFoundation/admin/dashboard', '2026-01-03', '11:33:00', 2, 'admin@gmail.com', 'admin'),
(344, '::1', 'http://localhost/BrutiSewaFoundation/admin/dashboard', '2026-01-03', '11:33:27', 2, 'admin@gmail.com', 'admin'),
(345, '::1', 'http://localhost/BrutiSewaFoundation/admin/dashboard', '2026-01-03', '11:33:40', 2, 'admin@gmail.com', 'admin'),
(346, '::1', 'http://localhost/BrutiSewaFoundation/admin/dashboard', '2026-01-03', '11:34:16', 2, 'admin@gmail.com', 'admin'),
(347, '::1', 'http://localhost/BrutiSewaFoundation/admin/dashboard', '2026-01-03', '11:34:49', 2, 'admin@gmail.com', 'admin'),
(348, '::1', 'http://localhost/BrutiSewaFoundation/admin/dashboard', '2026-01-03', '11:34:54', 2, 'admin@gmail.com', 'admin'),
(349, '::1', 'http://localhost/BrutiSewaFoundation/admin/dashboard', '2026-01-03', '11:35:10', 2, 'admin@gmail.com', 'admin'),
(350, '::1', 'http://localhost/BrutiSewaFoundation/admin/dashboard', '2026-01-03', '11:35:16', 2, 'admin@gmail.com', 'admin'),
(351, '::1', 'http://localhost/BrutiSewaFoundation/admin/dashboard', '2026-01-03', '11:35:27', 2, 'admin@gmail.com', 'admin'),
(352, '::1', 'http://localhost/BrutiSewaFoundation/admin/dashboard', '2026-01-03', '11:35:31', 2, 'admin@gmail.com', 'admin'),
(353, '::1', 'http://localhost/BrutiSewaFoundation/admin/dashboard', '2026-01-03', '11:35:53', 2, 'admin@gmail.com', 'admin'),
(354, '::1', 'http://localhost/BrutiSewaFoundation/admin_con/orders/listing', '2026-01-03', '11:37:28', 2, 'admin@gmail.com', 'admin'),
(355, '::1', 'http://localhost/BrutiSewaFoundation/admin_con/orders/view/3', '2026-01-03', '11:37:31', 2, 'admin@gmail.com', 'admin'),
(356, '::1', 'http://localhost/BrutiSewaFoundation/admin_con/orders/view/3', '2026-01-03', '11:38:40', 2, 'admin@gmail.com', 'admin'),
(357, '::1', 'http://localhost/BrutiSewaFoundation/admin_con/orders/view/3', '2026-01-03', '11:39:11', 2, 'admin@gmail.com', 'admin'),
(358, '::1', 'http://localhost/BrutiSewaFoundation/admin_con/orders/view/3', '2026-01-03', '11:39:33', 2, 'admin@gmail.com', 'admin'),
(359, '::1', 'http://localhost/BrutiSewaFoundation/admin_con/orders/view/3', '2026-01-03', '11:39:59', 2, 'admin@gmail.com', 'admin'),
(360, '::1', 'http://localhost/BrutiSewaFoundation/admin_con/orders/view/3', '2026-01-03', '11:40:09', 2, 'admin@gmail.com', 'admin'),
(361, '::1', 'http://localhost/BrutiSewaFoundation/admin_con/orders/view/3', '2026-01-03', '11:40:18', 2, 'admin@gmail.com', 'admin'),
(362, '::1', 'http://localhost/BrutiSewaFoundation/admin_con/orders/view/3', '2026-01-03', '11:40:27', 2, 'admin@gmail.com', 'admin'),
(363, '::1', 'http://localhost/BrutiSewaFoundation/admin_con/orders/view/3', '2026-01-03', '11:40:41', 2, 'admin@gmail.com', 'admin'),
(364, '::1', 'http://localhost/BrutiSewaFoundation/admin_con/orders/view/3', '2026-01-03', '11:40:52', 2, 'admin@gmail.com', 'admin'),
(365, '::1', 'http://localhost/BrutiSewaFoundation/admin_con/orders/view/3', '2026-01-03', '11:44:35', 2, 'admin@gmail.com', 'admin'),
(366, '::1', 'http://localhost/BrutiSewaFoundation/admin_con/orders/view/3', '2026-01-03', '11:44:40', 2, 'admin@gmail.com', 'admin'),
(367, '::1', 'http://localhost/BrutiSewaFoundation/admin_con/orders/view/3', '2026-01-03', '11:44:56', 2, 'admin@gmail.com', 'admin'),
(368, '::1', 'http://localhost/BrutiSewaFoundation/admin_con/orders/view/3', '2026-01-03', '11:45:03', 2, 'admin@gmail.com', 'admin'),
(369, '::1', 'http://localhost/BrutiSewaFoundation/admin_con/orders/view/3', '2026-01-03', '11:45:53', 2, 'admin@gmail.com', 'admin'),
(370, '::1', 'http://localhost/BrutiSewaFoundation/admin_con/orders/view/3', '2026-01-03', '11:46:23', 2, 'admin@gmail.com', 'admin'),
(371, '::1', 'http://localhost/BrutiSewaFoundation/admin_con/orders/view/3', '2026-01-03', '11:46:35', 2, 'admin@gmail.com', 'admin'),
(372, '::1', 'http://localhost/BrutiSewaFoundation/admin_con/orders/view/3', '2026-01-03', '11:46:49', 2, 'admin@gmail.com', 'admin'),
(373, '::1', 'http://localhost/BrutiSewaFoundation/admin_con/orders/view/3', '2026-01-03', '11:47:42', 2, 'admin@gmail.com', 'admin'),
(374, '::1', 'http://localhost/BrutiSewaFoundation/admin_con/orders/view/3', '2026-01-03', '11:48:20', 2, 'admin@gmail.com', 'admin'),
(375, '::1', 'http://localhost/BrutiSewaFoundation/admin_con/orders/view/1', '2026-01-03', '11:48:25', 2, 'admin@gmail.com', 'admin'),
(376, '::1', 'http://localhost/BrutiSewaFoundation/admin_con/orders/view/2', '2026-01-03', '11:48:29', 2, 'admin@gmail.com', 'admin'),
(377, '::1', 'http://localhost/BrutiSewaFoundation/admin_con/orders/view/2', '2026-01-03', '11:50:16', 2, 'admin@gmail.com', 'admin');
INSERT INTO `activity_records` (`id`, `ip_addreass`, `url`, `date`, `time`, `admin_id`, `admin_username`, `admin_password`) VALUES
(378, '::1', 'http://localhost/BrutiSewaFoundation/admin_con/orders/view/2', '2026-01-03', '11:50:28', 2, 'admin@gmail.com', 'admin'),
(379, '::1', 'http://localhost/BrutiSewaFoundation/admin_con/orders/view/2', '2026-01-03', '11:50:38', 2, 'admin@gmail.com', 'admin'),
(380, '::1', 'http://localhost/BrutiSewaFoundation/admin_con/orders/view/2', '2026-01-03', '11:50:56', 2, 'admin@gmail.com', 'admin'),
(381, '::1', 'http://localhost/BrutiSewaFoundation/admin_con/orders/view/2', '2026-01-03', '11:51:40', 2, 'admin@gmail.com', 'admin'),
(382, '::1', 'http://localhost/BrutiSewaFoundation/admin_con/orders/view/2', '2026-01-03', '11:51:44', 2, 'admin@gmail.com', 'admin'),
(383, '::1', 'http://localhost/BrutiSewaFoundation/admin_con/orders/view/2', '2026-01-03', '11:52:14', 2, 'admin@gmail.com', 'admin'),
(384, '::1', 'http://localhost/BrutiSewaFoundation/admin_con/orders/view/2', '2026-01-03', '11:52:19', 2, 'admin@gmail.com', 'admin'),
(385, '::1', 'http://localhost/BrutiSewaFoundation/admin_con/orders/view/2', '2026-01-03', '11:52:28', 2, 'admin@gmail.com', 'admin'),
(386, '::1', 'http://localhost/BrutiSewaFoundation/admin_con/orders/view/2', '2026-01-03', '11:52:42', 2, 'admin@gmail.com', 'admin'),
(387, '::1', 'http://localhost/BrutiSewaFoundation/admin_con/orders/view/2', '2026-01-03', '11:53:30', 2, 'admin@gmail.com', 'admin'),
(388, '::1', 'http://localhost/BrutiSewaFoundation/admin_con/orders/view/2', '2026-01-03', '11:53:54', 2, 'admin@gmail.com', 'admin'),
(389, '::1', 'http://localhost/BrutiSewaFoundation/admin_con/product/listing', '2026-01-03', '11:54:08', 2, 'admin@gmail.com', 'admin'),
(390, '::1', 'http://localhost/BrutiSewaFoundation/admin_con/product/edit/2', '2026-01-03', '11:54:11', 2, 'admin@gmail.com', 'admin'),
(391, '::1', 'http://localhost/BrutiSewaFoundation/admin_con/orders/view/2', '2026-01-03', '11:54:32', 2, 'admin@gmail.com', 'admin'),
(392, '::1', 'http://localhost/BrutiSewaFoundation/admin_con/orders/view/2', '2026-01-03', '11:54:42', 2, 'admin@gmail.com', 'admin'),
(393, '::1', 'http://localhost/BrutiSewaFoundation/admin_con/product/edit/2', '2026-01-03', '11:54:43', 2, 'admin@gmail.com', 'admin'),
(394, '::1', 'http://localhost/BrutiSewaFoundation/admin_con/orders/view/2', '2026-01-03', '11:54:58', 2, 'admin@gmail.com', 'admin'),
(395, '::1', 'http://localhost/BrutiSewaFoundation/admin_con/orders/view/2', '2026-01-03', '11:55:18', 2, 'admin@gmail.com', 'admin'),
(396, '::1', 'http://localhost/BrutiSewaFoundation/admin_con/orders/view/2', '2026-01-03', '11:55:31', 2, 'admin@gmail.com', 'admin'),
(397, '::1', 'http://localhost/BrutiSewaFoundation/admin_con/orders/view/2', '2026-01-03', '11:55:44', 2, 'admin@gmail.com', 'admin'),
(398, '::1', 'http://localhost/BrutiSewaFoundation/admin_con/orders/view/2', '2026-01-03', '11:55:49', 2, 'admin@gmail.com', 'admin'),
(399, '::1', 'http://localhost/BrutiSewaFoundation/admin_con/orders/view/2', '2026-01-03', '11:56:53', 2, 'admin@gmail.com', 'admin'),
(400, '::1', 'http://localhost/BrutiSewaFoundation/admin_con/orders/view/2', '2026-01-03', '11:57:34', 2, 'admin@gmail.com', 'admin'),
(401, '::1', 'http://localhost/BrutiSewaFoundation/admin_con/orders/view/1', '2026-01-03', '11:57:38', 2, 'admin@gmail.com', 'admin'),
(402, '::1', 'http://localhost/BrutiSewaFoundation/admin_con/orders/listing', '2026-01-03', '11:57:40', 2, 'admin@gmail.com', 'admin'),
(403, '::1', 'http://localhost/BrutiSewaFoundation/admin_con/orders/view/2', '2026-01-03', '11:57:44', 2, 'admin@gmail.com', 'admin'),
(404, '::1', 'http://localhost/BrutiSewaFoundation/admin_con/orders/view/2', '2026-01-03', '11:58:01', 2, 'admin@gmail.com', 'admin'),
(405, '::1', 'http://localhost/BrutiSewaFoundation/admin_con/orders/view/2', '2026-01-03', '11:58:10', 2, 'admin@gmail.com', 'admin'),
(406, '::1', 'http://localhost/BrutiSewaFoundation/admin_con/orders/view/2', '2026-01-03', '11:58:23', 2, 'admin@gmail.com', 'admin'),
(407, '::1', 'http://localhost/BrutiSewaFoundation/admin_con/orders/view/2', '2026-01-03', '11:58:29', 2, 'admin@gmail.com', 'admin'),
(408, '::1', 'http://localhost/BrutiSewaFoundation/admin_con/orders/view/2', '2026-01-03', '11:59:08', 2, 'admin@gmail.com', 'admin'),
(409, '::1', 'http://localhost/BrutiSewaFoundation/admin_con/orders/view/2', '2026-01-03', '11:59:13', 2, 'admin@gmail.com', 'admin'),
(410, '::1', 'http://localhost/BrutiSewaFoundation/admin_con/orders/view/2', '2026-01-03', '11:59:42', 2, 'admin@gmail.com', 'admin'),
(411, '::1', 'http://localhost/BrutiSewaFoundation/admin_con/orders/view/2', '2026-01-03', '11:59:52', 2, 'admin@gmail.com', 'admin'),
(412, '::1', 'http://localhost/BrutiSewaFoundation/admin_con/orders/view/2', '2026-01-03', '12:00:04', 2, 'admin@gmail.com', 'admin'),
(413, '::1', 'http://localhost/BrutiSewaFoundation/admin_con/orders/view/2', '2026-01-03', '12:00:10', 2, 'admin@gmail.com', 'admin'),
(414, '::1', 'http://localhost/BrutiSewaFoundation/admin_con/orders/view/2', '2026-01-03', '12:02:10', 2, 'admin@gmail.com', 'admin'),
(415, '::1', 'http://localhost/BrutiSewaFoundation/admin_con/orders/view/2', '2026-01-03', '12:02:24', 2, 'admin@gmail.com', 'admin'),
(416, '::1', 'http://localhost/BrutiSewaFoundation/admin_con/orders/view/2', '2026-01-03', '12:02:44', 2, 'admin@gmail.com', 'admin'),
(417, '::1', 'http://localhost/BrutiSewaFoundation/admin_con/product/edit/2', '2026-01-03', '12:04:57', 2, 'admin@gmail.com', 'admin'),
(418, '::1', 'http://localhost/BrutiSewaFoundation/admin_con/orders/view/2', '2026-01-03', '12:05:02', 2, 'admin@gmail.com', 'admin'),
(419, '::1', 'http://localhost/BrutiSewaFoundation/admin_con/orders/view/2', '2026-01-03', '12:05:38', 2, 'admin@gmail.com', 'admin'),
(420, '::1', 'http://localhost/BrutiSewaFoundation/admin_con/orders/view/2', '2026-01-03', '12:05:58', 2, 'admin@gmail.com', 'admin'),
(421, '::1', 'http://localhost/BrutiSewaFoundation/admin_con/orders/view/2', '2026-01-03', '12:07:11', 2, 'admin@gmail.com', 'admin'),
(422, '::1', 'http://localhost/BrutiSewaFoundation/admin_con/orders/view/2', '2026-01-03', '12:07:21', 2, 'admin@gmail.com', 'admin'),
(423, '::1', 'http://localhost/BrutiSewaFoundation/admin_con/orders/view/2', '2026-01-03', '12:07:32', 2, 'admin@gmail.com', 'admin'),
(424, '::1', 'http://localhost/BrutiSewaFoundation/admin_con/orders/view/2', '2026-01-03', '12:07:43', 2, 'admin@gmail.com', 'admin'),
(425, '::1', 'http://localhost/BrutiSewaFoundation/admin_con/orders/view/2', '2026-01-03', '12:08:55', 2, 'admin@gmail.com', 'admin'),
(426, '::1', 'http://localhost/BrutiSewaFoundation/admin_con/product/edit/1', '2026-01-03', '12:09:13', 2, 'admin@gmail.com', 'admin'),
(427, '::1', 'http://localhost/BrutiSewaFoundation/admin_con/orders/view/2', '2026-01-03', '12:09:25', 2, 'admin@gmail.com', 'admin'),
(428, '::1', 'http://localhost/BrutiSewaFoundation/admin_con/orders/view/2', '2026-01-03', '12:09:32', 2, 'admin@gmail.com', 'admin'),
(429, '::1', 'http://localhost/BrutiSewaFoundation/admin_con/product/edit/1', '2026-01-03', '12:09:40', 2, 'admin@gmail.com', 'admin'),
(430, '::1', 'http://localhost/BrutiSewaFoundation/admin_con/orders/listing', '2026-01-03', '12:10:09', 2, 'admin@gmail.com', 'admin'),
(431, '::1', 'http://localhost/BrutiSewaFoundation/admin/dashboard', '2026-01-03', '12:10:16', 2, 'admin@gmail.com', 'admin'),
(432, '::1', 'http://localhost/BrutiSewaFoundation/admin_con/product/listing', '2026-01-03', '12:14:56', 2, 'admin@gmail.com', 'admin'),
(433, '::1', 'http://localhost/BrutiSewaFoundation/admin_con/orders/listing', '2026-01-03', '12:14:57', 2, 'admin@gmail.com', 'admin'),
(434, '::1', 'http://localhost/BrutiSewaFoundation/admin_con/orders/view/1', '2026-01-03', '12:14:59', 2, 'admin@gmail.com', 'admin'),
(435, '::1', 'http://localhost/BrutiSewaFoundation/admin_con/orders/listing', '2026-01-03', '12:15:05', 2, 'admin@gmail.com', 'admin'),
(436, '::1', 'http://localhost/BrutiSewaFoundation/admin_con/orders/view/1', '2026-01-03', '12:15:15', 2, 'admin@gmail.com', 'admin'),
(437, '::1', 'http://localhost/BrutiSewaFoundation/admin_con/orders/listing', '2026-01-03', '12:15:17', 2, 'admin@gmail.com', 'admin'),
(438, '::1', 'http://localhost/BrutiSewaFoundation/admin_con/orders/edit/2', '2026-01-03', '12:15:19', 2, 'admin@gmail.com', 'admin'),
(439, '::1', 'http://localhost/BrutiSewaFoundation/admin_con/orders/listing', '2026-01-03', '12:15:22', 2, 'admin@gmail.com', 'admin'),
(440, '::1', 'http://localhost/BrutiSewaFoundation/admin_con/orders/edit/3', '2026-01-03', '12:15:25', 2, 'admin@gmail.com', 'admin'),
(441, '::1', 'http://localhost/BrutiSewaFoundation/admin_con/orders/edit/3', '2026-01-03', '12:30:21', 2, 'admin@gmail.com', 'admin'),
(442, '::1', 'http://localhost/BrutiSewaFoundation/admin_con/orders/listing', '2026-01-03', '12:30:23', 2, 'admin@gmail.com', 'admin'),
(443, '::1', 'http://localhost/BrutiSewaFoundation/admin_con/orders/listing', '2026-01-03', '12:31:09', 2, 'admin@gmail.com', 'admin'),
(444, '::1', 'http://localhost/BrutiSewaFoundation/admin_con/orders/listing', '2026-01-03', '12:31:12', 2, 'admin@gmail.com', 'admin'),
(445, '::1', 'http://localhost/BrutiSewaFoundation/admin_con/orders/listing', '2026-01-03', '12:31:16', 2, 'admin@gmail.com', 'admin'),
(446, '::1', 'http://localhost/BrutiSewaFoundation/admin_con/orders/listing', '2026-01-03', '12:32:39', 2, 'admin@gmail.com', 'admin'),
(447, '::1', 'http://localhost/BrutiSewaFoundation/admin_con/orders/listing', '2026-01-03', '12:32:54', 2, 'admin@gmail.com', 'admin'),
(448, '::1', 'http://localhost/BrutiSewaFoundation/admin_con/orders/listing', '2026-01-03', '12:33:04', 2, 'admin@gmail.com', 'admin'),
(449, '::1', 'http://localhost/BrutiSewaFoundation/admin_con/orders/view/1', '2026-01-03', '12:33:10', 2, 'admin@gmail.com', 'admin'),
(450, '::1', 'http://localhost/BrutiSewaFoundation/admin_con/orders/listing', '2026-01-03', '12:33:12', 2, 'admin@gmail.com', 'admin'),
(451, '::1', 'http://localhost/BrutiSewaFoundation/admin_con/user_orders/listing', '2026-01-03', '12:35:23', 4, 'azmal123', 'azmal123'),
(452, '::1', 'http://localhost/BrutiSewaFoundation/admin/access_denied', '2026-01-03', '12:35:25', 4, 'azmal123', 'azmal123'),
(453, '::1', 'http://localhost/BrutiSewaFoundation/admin_con/user_orders/listing', '2026-01-03', '12:35:26', 4, 'azmal123', 'azmal123'),
(454, '::1', 'http://localhost/BrutiSewaFoundation/admin_con/orders/listing', '2026-01-03', '12:35:43', 2, 'admin@gmail.com', 'admin'),
(455, '::1', 'http://localhost/BrutiSewaFoundation/admin_con/role/listing', '2026-01-03', '12:35:44', 2, 'admin@gmail.com', 'admin'),
(456, '::1', 'http://localhost/BrutiSewaFoundation/admin_con/role/edit/4', '2026-01-03', '12:35:45', 2, 'admin@gmail.com', 'admin'),
(457, '::1', 'http://localhost/BrutiSewaFoundation/admin_con/user_orders/listing', '2026-01-03', '12:36:08', 4, 'azmal123', 'azmal123'),
(458, '::1', 'http://localhost/BrutiSewaFoundation/admin_con/user_orders/view/2', '2026-01-03', '12:36:10', 4, 'azmal123', 'azmal123'),
(459, '::1', 'http://localhost/BrutiSewaFoundation/admin_con/user_orders/listing', '2026-01-03', '12:36:11', 4, 'azmal123', 'azmal123'),
(460, '::1', 'http://localhost/BrutiSewaFoundation/admin_con/role/listing', '2026-01-03', '12:36:32', 2, 'admin@gmail.com', 'admin'),
(461, '::1', 'http://localhost/BrutiSewaFoundation/admin_con/role/edit/4', '2026-01-03', '12:36:34', 2, 'admin@gmail.com', 'admin'),
(462, '::1', 'http://localhost/BrutiSewaFoundation/admin_con/user_orders/listing', '2026-01-03', '12:36:37', 4, 'azmal123', 'azmal123'),
(463, '::1', 'http://localhost/BrutiSewaFoundation/admin/access_denied', '2026-01-03', '12:36:39', 4, 'azmal123', 'azmal123'),
(464, '::1', 'http://localhost/BrutiSewaFoundation/admin_con/user_orders/listing', '2026-01-03', '12:36:41', 4, 'azmal123', 'azmal123'),
(465, '::1', 'http://localhost/BrutiSewaFoundation/admin_con/user_orders/view/2', '2026-01-03', '12:36:42', 4, 'azmal123', 'azmal123'),
(466, '::1', 'http://localhost/BrutiSewaFoundation/admin_con/user_orders/listing', '2026-01-03', '12:36:44', 4, 'azmal123', 'azmal123'),
(467, '::1', 'http://localhost/BrutiSewaFoundation/admin_con/user_orders/listing', '2026-01-03', '12:36:55', 4, 'azmal123', 'azmal123'),
(468, '::1', 'http://localhost/BrutiSewaFoundation/admin/access_denied', '2026-01-03', '12:36:56', 4, 'azmal123', 'azmal123'),
(469, '::1', 'http://localhost/BrutiSewaFoundation/admin_con/user_orders/listing', '2026-01-03', '12:36:58', 4, 'azmal123', 'azmal123'),
(470, '::1', 'http://localhost/BrutiSewaFoundation/admin_con/user_orders/listing', '2026-01-03', '12:37:25', 4, 'azmal123', 'azmal123'),
(471, '::1', 'http://localhost/BrutiSewaFoundation/admin_con/user_orders/listing', '2026-01-03', '12:37:30', 4, 'azmal123', 'azmal123'),
(472, '::1', 'http://localhost/BrutiSewaFoundation/admin_con/user_orders/listing', '2026-01-03', '12:37:46', 4, 'azmal123', 'azmal123'),
(473, '::1', 'http://localhost/BrutiSewaFoundation/admin_con/orders/listing', '2026-01-03', '12:38:10', 2, 'admin@gmail.com', 'admin'),
(474, '::1', 'http://localhost/BrutiSewaFoundation/admin_con/orders/listing', '2026-01-03', '12:45:34', 2, 'admin@gmail.com', 'admin'),
(475, '::1', 'http://localhost/BrutiSewaFoundation/admin_con/user_orders/listing', '2026-01-03', '12:47:03', 4, 'azmal123', 'azmal123'),
(476, '::1', 'http://localhost/BrutiSewaFoundation/admin_con/orders/listing', '2026-01-03', '12:47:33', 2, 'admin@gmail.com', 'admin'),
(477, '::1', 'http://localhost/BrutiSewaFoundation/admin_con/product/listing', '2026-01-03', '12:47:37', 2, 'admin@gmail.com', 'admin'),
(478, '::1', 'http://localhost/BrutiSewaFoundation/admin/dashboard', '2026-01-03', '12:47:38', 2, 'admin@gmail.com', 'admin'),
(479, '::1', 'http://localhost/BrutiSewaFoundation/admin_con/product/listing', '2026-01-03', '12:47:52', 2, 'admin@gmail.com', 'admin'),
(480, '::1', 'http://localhost/BrutiSewaFoundation/admin_con/role/listing', '2026-01-03', '12:47:52', 2, 'admin@gmail.com', 'admin'),
(481, '::1', 'http://localhost/BrutiSewaFoundation/admin_con/role/listing', '2026-01-03', '12:48:05', 2, 'admin@gmail.com', 'admin'),
(482, '::1', 'http://localhost/BrutiSewaFoundation/admin_con/tbl_admin/listing', '2026-01-03', '12:48:06', 2, 'admin@gmail.com', 'admin'),
(483, '::1', 'http://localhost/BrutiSewaFoundation/admin_con/tbl_admin/add', '2026-01-03', '12:48:08', 2, 'admin@gmail.com', 'admin'),
(484, '::1', 'http://localhost/BrutiSewaFoundation/admin_con/tbl_admin/listing', '2026-01-03', '12:48:14', 2, 'admin@gmail.com', 'admin'),
(485, '::1', 'http://localhost/BrutiSewaFoundation/admin_con/product/listing', '2026-01-03', '12:59:45', 2, 'admin@gmail.com', 'admin'),
(486, '::1', 'http://localhost/BrutiSewaFoundation/admin_con/orders/listing', '2026-01-03', '12:59:47', 2, 'admin@gmail.com', 'admin'),
(487, '::1', 'http://localhost/BrutiSewaFoundation/admin_con/product/listing', '2026-01-03', '12:59:48', 2, 'admin@gmail.com', 'admin'),
(488, '::1', 'http://localhost/BrutiSewaFoundation/admin_con/tbl_admin/listing', '2026-01-03', '12:59:49', 2, 'admin@gmail.com', 'admin'),
(489, '::1', 'http://localhost/BrutiSewaFoundation/admin/dashboard', '2026-01-03', '12:59:49', 2, 'admin@gmail.com', 'admin'),
(490, '::1', 'http://localhost/BrutiSewaFoundation/admin/dashboard', '2026-01-03', '13:00:19', 2, 'admin@gmail.com', 'admin'),
(491, '::1', 'http://localhost/BrutiSewaFoundation/admin_con/tbl_admin/listing', '2026-01-03', '13:00:29', 2, 'admin@gmail.com', 'admin'),
(492, '::1', 'http://localhost/BrutiSewaFoundation/admin_con/product/listing', '2026-01-03', '13:00:36', 2, 'admin@gmail.com', 'admin'),
(493, '::1', 'http://localhost/BrutiSewaFoundation/admin_con/orders/listing', '2026-01-03', '13:00:38', 2, 'admin@gmail.com', 'admin'),
(494, '::1', 'http://localhost/BrutiSewaFoundation/admin_con/orders/view/3', '2026-01-03', '13:00:45', 2, 'admin@gmail.com', 'admin'),
(495, '::1', 'http://localhost/BrutiSewaFoundation/admin_con/orders/listing', '2026-01-03', '13:00:49', 2, 'admin@gmail.com', 'admin'),
(496, '::1', 'http://localhost/BrutiSewaFoundation/admin_con/orders/edit/3', '2026-01-03', '13:00:51', 2, 'admin@gmail.com', 'admin'),
(497, '::1', 'http://localhost/BrutiSewaFoundation/admin_con/orders/listing', '2026-01-03', '13:00:54', 2, 'admin@gmail.com', 'admin'),
(498, '::1', 'http://localhost/BrutiSewaFoundation/admin/dashboard', '2026-01-03', '13:00:58', 2, 'admin@gmail.com', 'admin'),
(499, '::1', 'http://localhost/BrutiSewaFoundation/admin_con/orders/listing', '2026-01-03', '13:01:04', 2, 'admin@gmail.com', 'admin'),
(500, '::1', 'http://localhost/BrutiSewaFoundation/admin/dashboard', '2026-01-03', '13:01:08', 2, 'admin@gmail.com', 'admin'),
(501, '::1', 'http://localhost/BrutiSewaFoundation/admin_con/tbl_admin/listing', '2026-01-03', '13:02:51', 2, 'admin@gmail.com', 'admin'),
(502, '::1', 'http://localhost/BrutiSewaFoundation/admin_con/product/listing', '2026-01-03', '13:02:52', 2, 'admin@gmail.com', 'admin'),
(503, '::1', 'http://localhost/BrutiSewaFoundation/admin_con/orders/listing', '2026-01-03', '13:02:53', 2, 'admin@gmail.com', 'admin'),
(504, '::1', 'http://localhost/BrutiSewaFoundation/admin/dashboard', '2026-01-03', '13:03:19', 2, 'admin@gmail.com', 'admin'),
(505, '::1', 'http://localhost/BrutiSewaFoundation/admin_con/product/listing', '2026-01-03', '13:03:57', 2, 'admin@gmail.com', 'admin'),
(506, '::1', 'http://localhost/BrutiSewaFoundation/admin_con/tbl_admin/listing', '2026-01-03', '13:03:57', 2, 'admin@gmail.com', 'admin'),
(507, '::1', 'http://localhost/BrutiSewaFoundation/admin_con/product/listing', '2026-01-03', '13:04:03', 2, 'admin@gmail.com', 'admin'),
(508, '::1', 'http://localhost/BrutiSewaFoundation/admin_con/orders/listing', '2026-01-03', '13:04:50', 2, 'admin@gmail.com', 'admin'),
(509, '::1', 'http://localhost/BrutiSewaFoundation/admin_con/orders/listing', '2026-01-03', '13:05:48', 2, 'admin@gmail.com', 'admin'),
(510, '::1', 'http://localhost/BrutiSewaFoundation/admin_con/orders/listing', '2026-01-03', '13:07:10', 2, 'admin@gmail.com', 'admin'),
(511, '::1', 'http://localhost/BrutiSewaFoundation/admin_con/orders/listing', '2026-01-03', '13:09:34', 2, 'admin@gmail.com', 'admin'),
(512, '::1', 'http://localhost/BrutiSewaFoundation/admin_con/orders/listing', '2026-01-03', '13:10:01', 2, 'admin@gmail.com', 'admin'),
(513, '::1', 'http://localhost/BrutiSewaFoundation/admin_con/orders/listing', '2026-01-03', '13:11:14', 2, 'admin@gmail.com', 'admin'),
(514, '::1', 'http://localhost/BrutiSewaFoundation/admin_con/orders/listing', '2026-01-03', '13:13:28', 2, 'admin@gmail.com', 'admin'),
(515, '::1', 'http://localhost/BrutiSewaFoundation/admin_con/orders/listing', '2026-01-03', '13:13:46', 2, 'admin@gmail.com', 'admin'),
(516, '::1', 'http://localhost/BrutiSewaFoundation/admin_con/orders/listing', '2026-01-03', '13:13:54', 2, 'admin@gmail.com', 'admin'),
(517, '::1', 'http://localhost/BrutiSewaFoundation/admin_con/orders/listing', '2026-01-03', '13:14:37', 2, 'admin@gmail.com', 'admin'),
(518, '::1', 'http://localhost/BrutiSewaFoundation/admin_con/orders/listing', '2026-01-03', '13:14:49', 2, 'admin@gmail.com', 'admin'),
(519, '::1', 'http://localhost/BrutiSewaFoundation/admin_con/orders/listing', '2026-01-03', '13:14:57', 2, 'admin@gmail.com', 'admin'),
(520, '::1', 'http://localhost/BrutiSewaFoundation/admin_con/orders/edit/3', '2026-01-03', '13:15:12', 2, 'admin@gmail.com', 'admin'),
(521, '::1', 'http://localhost/BrutiSewaFoundation/admin_con/orders/listing', '2026-01-03', '13:15:19', 2, 'admin@gmail.com', 'admin'),
(522, '2401:4900:1c8a:b09e:fc90:f72:7458:26e4', 'https://digitalnamo.com/azmal/2026/january/BrutiSewaFoundation/admin/dashboard', '2026-01-03', '13:23:01', 2, 'admin@gmail.com', 'admin'),
(523, '2401:4900:1c8a:b09e:fc90:f72:7458:26e4', 'https://digitalnamo.com/azmal/2026/january/BrutiSewaFoundation/admin_con/tbl_admin/listing', '2026-01-03', '13:23:03', 2, 'admin@gmail.com', 'admin'),
(524, '2401:4900:1c8a:b09e:79d2:c62e:4141:9c4f', 'https://digitalnamo.com/azmal/2026/january/BrutiSewaFoundation/admin/dashboard', '2026-01-03', '13:24:53', 2, 'admin@gmail.com', 'admin'),
(525, '2401:4900:1c8a:b09e:79d2:c62e:4141:9c4f', 'https://digitalnamo.com/azmal/2026/january/BrutiSewaFoundation/admin_con/tbl_admin/listing', '2026-01-03', '13:25:02', 2, 'admin@gmail.com', 'admin'),
(526, '2401:4900:1c8a:b09e:79d2:c62e:4141:9c4f', 'https://digitalnamo.com/azmal/2026/january/BrutiSewaFoundation/admin_con/product/listing', '2026-01-03', '13:25:06', 2, 'admin@gmail.com', 'admin'),
(527, '2401:4900:1c8a:b09e:79d2:c62e:4141:9c4f', 'https://digitalnamo.com/azmal/2026/january/BrutiSewaFoundation/admin_con/orders/listing', '2026-01-03', '13:25:13', 2, 'admin@gmail.com', 'admin'),
(528, '2401:4900:1c8a:b09e:79d2:c62e:4141:9c4f', 'https://digitalnamo.com/azmal/2026/january/BrutiSewaFoundation/admin/access_denied', '2026-01-03', '13:25:41', 4, 'azmal123', 'azmal123'),
(529, '2401:4900:1c8a:b09e:79d2:c62e:4141:9c4f', 'https://digitalnamo.com/azmal/2026/january/BrutiSewaFoundation/admin/dashboard', '2026-01-03', '13:25:44', 4, 'azmal123', 'azmal123'),
(530, '2401:4900:1c8a:b09e:79d2:c62e:4141:9c4f', 'https://digitalnamo.com/azmal/2026/january/BrutiSewaFoundation/admin_con/user_orders/listing', '2026-01-03', '13:25:46', 4, 'azmal123', 'azmal123'),
(531, '2401:4900:1c8a:b09e:79d2:c62e:4141:9c4f', 'https://digitalnamo.com/azmal/2026/january/BrutiSewaFoundation/admin/dashboard', '2026-01-03', '13:25:49', 4, 'azmal123', 'azmal123'),
(532, '2401:4900:1c8a:b09e:79d2:c62e:4141:9c4f', 'https://digitalnamo.com/azmal/2026/january/BrutiSewaFoundation/admin/access_denied', '2026-01-03', '13:26:23', 4, 'azmal123', 'azmal123'),
(533, '2401:4900:1c8a:b09e:79d2:c62e:4141:9c4f', 'https://digitalnamo.com/azmal/2026/january/BrutiSewaFoundation/admin_con/user_orders/listing', '2026-01-03', '13:26:26', 4, 'azmal123', 'azmal123'),
(534, '2401:4900:1c8a:b09e:79d2:c62e:4141:9c4f', 'https://digitalnamo.com/azmal/2026/january/BrutiSewaFoundation/admin/dashboard', '2026-01-03', '13:26:31', 4, 'azmal123', 'azmal123'),
(535, '2401:4900:1c8a:b09e:79d2:c62e:4141:9c4f', 'https://digitalnamo.com/azmal/2026/january/BrutiSewaFoundation/admin/dashboard', '2026-01-03', '13:26:36', 4, 'azmal123', 'azmal123'),
(536, '2401:4900:1c8a:b09e:79d2:c62e:4141:9c4f', 'https://digitalnamo.com/azmal/2026/january/BrutiSewaFoundation/admin_con/user_orders/listing', '2026-01-03', '13:26:39', 4, 'azmal123', 'azmal123'),
(537, '2401:4900:1c8a:b09e:79d2:c62e:4141:9c4f', 'https://digitalnamo.com/azmal/2026/january/BrutiSewaFoundation/admin_con/user_orders/listing', '2026-01-03', '13:26:47', 2, 'admin@gmail.com', 'admin'),
(538, '2401:4900:1c8a:b09e:79d2:c62e:4141:9c4f', 'https://digitalnamo.com/azmal/2026/january/BrutiSewaFoundation/admin_con/tbl_admin/listing', '2026-01-03', '13:26:50', 2, 'admin@gmail.com', 'admin'),
(539, '2401:4900:1c8a:b09e:79d2:c62e:4141:9c4f', 'https://digitalnamo.com/azmal/2026/january/BrutiSewaFoundation/admin_con/product/listing', '2026-01-03', '13:26:52', 2, 'admin@gmail.com', 'admin'),
(540, '2401:4900:74db:dc47:cdda:a176:5205:41cb', 'https://digitalnamo.com/azmal/2026/january/BrutiSewaFoundation/admin/dashboard', '2026-01-03', '13:29:32', 2, 'admin@gmail.com', 'admin'),
(541, '2401:4900:74db:dc47:cdda:a176:5205:41cb', 'https://digitalnamo.com/azmal/2026/january/BrutiSewaFoundation/admin_con/orders/listing', '2026-01-03', '13:29:59', 2, 'admin@gmail.com', 'admin'),
(542, '2401:4900:1c8a:b09e:ed87:b741:bb9:333f', 'https://digitalnamo.com/azmal/2026/january/BrutiSewaFoundation/admin/dashboard', '2026-01-03', '13:45:51', 2, 'admin@gmail.com', 'admin'),
(543, '2401:4900:1c8a:b09e:ed87:b741:bb9:333f', 'https://digitalnamo.com/azmal/2026/january/BrutiSewaFoundation/admin_con/product/listing', '2026-01-03', '13:45:56', 2, 'admin@gmail.com', 'admin'),
(544, '2401:4900:1c8a:b09e:ed87:b741:bb9:333f', 'https://digitalnamo.com/azmal/2026/january/BrutiSewaFoundation/admin_con/product/listing', '2026-01-03', '13:45:58', 2, 'admin@gmail.com', 'admin'),
(545, '2401:4900:1c8a:b09e:ed87:b741:bb9:333f', 'https://digitalnamo.com/azmal/2026/january/BrutiSewaFoundation/admin_con/orders/listing', '2026-01-03', '13:46:01', 2, 'admin@gmail.com', 'admin'),
(546, '2401:4900:1c8a:b09e:ed87:b741:bb9:333f', 'https://digitalnamo.com/azmal/2026/january/BrutiSewaFoundation/admin_con/orders/listing', '2026-01-03', '13:46:02', 2, 'admin@gmail.com', 'admin'),
(547, '2401:4900:1c8a:b09e:ed87:b741:bb9:333f', 'https://digitalnamo.com/azmal/2026/january/BrutiSewaFoundation/admin/access_denied', '2026-01-03', '13:46:18', 4, 'azmal123', 'azmal123'),
(548, '2401:4900:1c8a:b09e:ed87:b741:bb9:333f', 'https://digitalnamo.com/azmal/2026/january/BrutiSewaFoundation/admin_con/user_orders/listing', '2026-01-03', '13:46:20', 4, 'azmal123', 'azmal123'),
(549, '2401:4900:1c8a:b09e:ed87:b741:bb9:333f', 'https://digitalnamo.com/azmal/2026/january/BrutiSewaFoundation/admin/dashboard', '2026-01-03', '13:46:21', 4, 'azmal123', 'azmal123'),
(550, '2401:4900:1c8a:b09e:ed87:b741:bb9:333f', 'https://digitalnamo.com/azmal/2026/january/BrutiSewaFoundation/admin_con/user_orders/listing', '2026-01-03', '13:46:25', 4, 'azmal123', 'azmal123'),
(551, '2401:4900:1c8a:b09e:fc90:f72:7458:26e4', 'https://digitalnamo.com/azmal/2026/january/BrutiSewaFoundation/admin/access_denied', '2026-01-03', '14:29:49', 4, 'azmal123', 'azmal123'),
(552, '2401:4900:1c8a:b09e:fc90:f72:7458:26e4', 'https://digitalnamo.com/azmal/2026/january/BrutiSewaFoundation/admin_con/user_orders/listing', '2026-01-03', '14:29:52', 4, 'azmal123', 'azmal123'),
(553, '2401:4900:1c8a:b09e:fc90:f72:7458:26e4', 'https://digitalnamo.com/azmal/2026/january/BrutiSewaFoundation/admin_con/user_orders/add', '2026-01-03', '14:29:58', 4, 'azmal123', 'azmal123'),
(554, '2401:4900:1c8a:b09e:fc90:f72:7458:26e4', 'https://digitalnamo.com/azmal/2026/january/BrutiSewaFoundation/admin/dashboard', '2026-01-03', '14:30:49', 4, 'azmal123', 'azmal123'),
(555, '2401:4900:1c8a:b09e:2d5b:61d5:f92c:3f7e', 'https://digitalnamo.com/azmal/2026/january/BrutiSewaFoundation/admin_con/product/listing', '2026-01-03', '16:06:08', 2, 'admin@gmail.com', 'admin'),
(556, '2401:4900:1c8a:b09e:101e:4d18:ddda:9f01', 'https://digitalnamo.com/azmal/2026/january/BrutiSewaFoundation/admin_con/user_orders/listing', '2026-01-05', '10:33:19', 4, 'azmal123', 'azmal123'),
(557, '2401:4900:1c8a:b09e:101e:4d18:ddda:9f01', 'https://digitalnamo.com/azmal/2026/january/BrutiSewaFoundation/admin_con/user_orders/add', '2026-01-05', '10:33:22', 4, 'azmal123', 'azmal123'),
(558, '2401:4900:1c8a:b09e:101e:4d18:ddda:9f01', 'https://digitalnamo.com/azmal/2026/january/BrutiSewaFoundation/admin_con/user_orders/listing', '2026-01-05', '10:33:50', 4, 'azmal123', 'azmal123'),
(559, '2401:4900:1c8a:b09e:101e:4d18:ddda:9f01', 'https://digitalnamo.com/azmal/2026/january/BrutiSewaFoundation/admin_con/user_orders/view/4', '2026-01-05', '10:34:07', 4, 'azmal123', 'azmal123'),
(560, '2401:4900:1c8a:b09e:e037:7437:b761:5f95', 'https://digitalnamo.com/azmal/2026/january/BrutiSewaFoundation/admin/dashboard', '2026-01-06', '10:45:27', 2, 'admin@gmail.com', 'admin'),
(561, '2401:4900:1c8a:b09e:e037:7437:b761:5f95', 'https://digitalnamo.com/azmal/2026/january/BrutiSewaFoundation/admin_con/orders/listing', '2026-01-06', '10:45:35', 2, 'admin@gmail.com', 'admin'),
(562, '2401:4900:1c8a:b09e:e037:7437:b761:5f95', 'https://digitalnamo.com/azmal/2026/january/BrutiSewaFoundation/admin_con/site_setting/edit/1', '2026-01-06', '10:46:38', 2, 'admin@gmail.com', 'admin'),
(563, '2401:4900:1c8a:b09e:e037:7437:b761:5f95', 'https://digitalnamo.com/azmal/2026/january/BrutiSewaFoundation/admin_con/site_setting/edit/1', '2026-01-06', '10:47:03', 2, 'admin@gmail.com', 'admin'),
(564, '2401:4900:1c8a:b09e:e037:7437:b761:5f95', 'https://digitalnamo.com/azmal/2026/january/BrutiSewaFoundation/admin_con/site_setting/edit/1', '2026-01-06', '10:47:57', 2, 'admin@gmail.com', 'admin'),
(565, '2401:4900:1c8a:b09e:e037:7437:b761:5f95', 'https://digitalnamo.com/azmal/2026/january/BrutiSewaFoundation/admin/dashboard', '2026-01-06', '10:48:52', 2, 'admin@gmail.com', 'admin'),
(566, '2401:4900:1c8a:b09e:e037:7437:b761:5f95', 'https://digitalnamo.com/azmal/2026/january/BrutiSewaFoundation/admin/dashboard', '2026-01-06', '10:50:17', 2, 'admin@gmail.com', 'admin'),
(567, '2401:4900:1c8a:b09e:e037:7437:b761:5f95', 'https://digitalnamo.com/azmal/2026/january/BrutiSewaFoundation/admin/dashboard', '2026-01-06', '10:50:26', 2, 'admin@gmail.com', 'admin'),
(568, '2401:4900:1c8a:b09e:e037:7437:b761:5f95', 'https://digitalnamo.com/azmal/2026/january/BrutiSewaFoundation/admin_con/product/listing', '2026-01-06', '10:50:37', 2, 'admin@gmail.com', 'admin'),
(569, '2401:4900:1c8a:b09e:e037:7437:b761:5f95', 'https://digitalnamo.com/azmal/2026/january/BrutiSewaFoundation/admin_con/orders/listing', '2026-01-06', '10:50:38', 2, 'admin@gmail.com', 'admin'),
(570, '2401:4900:1c8a:b09e:e037:7437:b761:5f95', 'https://digitalnamo.com/azmal/2026/january/BrutiSewaFoundation/admin_con/orders/view/4', '2026-01-06', '10:50:41', 2, 'admin@gmail.com', 'admin'),
(571, '2401:4900:1c8a:b09e:e037:7437:b761:5f95', 'https://digitalnamo.com/azmal/2026/january/BrutiSewaFoundation/admin_con/orders/listing', '2026-01-06', '10:50:46', 2, 'admin@gmail.com', 'admin'),
(572, '2401:4900:1c8a:b09e:65d6:3db4:5110:f27e', 'https://digitalnamo.com/azmal/2026/january/BrutiSewaFoundation/admin/dashboard', '2026-01-06', '11:44:04', 2, 'admin@gmail.com', 'admin'),
(573, '2401:4900:1c8a:b09e:65d6:3db4:5110:f27e', 'https://digitalnamo.com/azmal/2026/january/BrutiSewaFoundation/admin_con/tbl_admin/listing', '2026-01-06', '11:44:16', 2, 'admin@gmail.com', 'admin'),
(574, '2401:4900:1c8a:b09e:65d6:3db4:5110:f27e', 'https://digitalnamo.com/azmal/2026/january/BrutiSewaFoundation/admin_con/product/listing', '2026-01-06', '11:44:17', 2, 'admin@gmail.com', 'admin'),
(575, '2401:4900:1c8a:b09e:65d6:3db4:5110:f27e', 'https://digitalnamo.com/azmal/2026/january/BrutiSewaFoundation/admin_con/orders/listing', '2026-01-06', '11:44:21', 2, 'admin@gmail.com', 'admin'),
(576, '2401:4900:1c8a:b09e:65d6:3db4:5110:f27e', 'https://digitalnamo.com/azmal/2026/january/BrutiSewaFoundation/admin/dashboard', '2026-01-06', '11:44:24', 2, 'admin@gmail.com', 'admin'),
(577, '2401:4900:1c74:9dd7:213a:c7af:216a:441', 'https://digitalnamo.com/azmal/2026/january/BrutiSewaFoundation/admin/dashboard', '2026-01-27', '15:32:28', 2, 'admin@gmail.com', 'admin'),
(578, '2401:4900:1c74:9dd7:213a:c7af:216a:441', 'https://digitalnamo.com/azmal/2026/january/BrutiSewaFoundation/admin_con/tbl_admin/listing', '2026-01-27', '15:32:33', 2, 'admin@gmail.com', 'admin'),
(579, '2401:4900:1c74:9dd7:213a:c7af:216a:441', 'https://digitalnamo.com/azmal/2026/january/BrutiSewaFoundation/admin_con/product/listing', '2026-01-27', '15:32:34', 2, 'admin@gmail.com', 'admin'),
(580, '2401:4900:1c74:9dd7:213a:c7af:216a:441', 'https://digitalnamo.com/azmal/2026/january/BrutiSewaFoundation/admin_con/orders/listing', '2026-01-27', '15:32:37', 2, 'admin@gmail.com', 'admin'),
(581, '2401:4900:1c74:9dd7:213a:c7af:216a:441', 'https://digitalnamo.com/azmal/2026/january/BrutiSewaFoundation/admin/access_denied', '2026-01-27', '15:33:11', 4, 'azmal123', 'azmal123'),
(582, '2401:4900:1c74:9dd7:213a:c7af:216a:441', 'https://digitalnamo.com/azmal/2026/january/BrutiSewaFoundation/admin/dashboard', '2026-01-27', '15:33:13', 4, 'azmal123', 'azmal123'),
(583, '2401:4900:1c74:9dd7:213a:c7af:216a:441', 'https://digitalnamo.com/azmal/2026/january/BrutiSewaFoundation/admin/dashboard', '2026-01-27', '15:58:30', 4, 'azmal123', 'azmal123'),
(584, '2401:4900:1c74:9dd7:213a:c7af:216a:441', 'https://digitalnamo.com/azmal/2026/january/BrutiSewaFoundation/admin_con/user_orders/listing', '2026-01-27', '15:58:35', 4, 'azmal123', 'azmal123'),
(585, '2401:4900:1c74:9dd7:213a:c7af:216a:441', 'https://digitalnamo.com/azmal/2026/january/BrutiSewaFoundation/admin/dashboard', '2026-01-27', '15:58:45', 4, 'azmal123', 'azmal123'),
(586, '2401:4900:1c74:9dd7:213a:c7af:216a:441', 'https://digitalnamo.com/azmal/2026/january/BrutiSewaFoundation/admin/dashboard', '2026-01-27', '15:58:58', 2, 'admin@gmail.com', 'admin'),
(587, '2401:4900:1c74:9dd7:213a:c7af:216a:441', 'https://digitalnamo.com/azmal/2026/january/BrutiSewaFoundation/admin_con/tbl_admin/listing', '2026-01-27', '15:59:04', 2, 'admin@gmail.com', 'admin'),
(588, '2401:4900:1c74:9dd7:213a:c7af:216a:441', 'https://digitalnamo.com/azmal/2026/january/BrutiSewaFoundation/admin_con/tbl_admin/add', '2026-01-27', '15:59:06', 2, 'admin@gmail.com', 'admin'),
(589, '2401:4900:1c74:9dd7:213a:c7af:216a:441', 'https://digitalnamo.com/azmal/2026/january/BrutiSewaFoundation/admin_con/tbl_admin/listing', '2026-01-27', '15:59:58', 2, 'admin@gmail.com', 'admin'),
(590, '2401:4900:1c74:9dd7:213a:c7af:216a:441', 'https://digitalnamo.com/azmal/2026/january/BrutiSewaFoundation/admin/dashboard', '2026-01-27', '16:00:23', 5, 'Ajay', '12345678'),
(591, '2401:4900:1c74:9dd7:213a:c7af:216a:441', 'https://digitalnamo.com/azmal/2026/january/BrutiSewaFoundation/admin_con/user_orders/listing', '2026-01-27', '16:00:28', 5, 'Ajay', '12345678'),
(592, '2401:4900:1c74:9dd7:213a:c7af:216a:441', 'https://digitalnamo.com/azmal/2026/january/BrutiSewaFoundation/admin_con/user_orders/add', '2026-01-27', '16:00:31', 5, 'Ajay', '12345678'),
(593, '2401:4900:1c74:9dd7:213a:c7af:216a:441', 'https://digitalnamo.com/azmal/2026/january/BrutiSewaFoundation/admin_con/product/listing', '2026-01-27', '16:00:44', 2, 'admin@gmail.com', 'admin'),
(594, '2401:4900:1c74:9dd7:213a:c7af:216a:441', 'https://digitalnamo.com/azmal/2026/january/BrutiSewaFoundation/admin_con/product/add', '2026-01-27', '16:01:18', 2, 'admin@gmail.com', 'admin'),
(595, '2401:4900:1c74:9dd7:213a:c7af:216a:441', 'https://digitalnamo.com/azmal/2026/january/BrutiSewaFoundation/admin_con/product/listing', '2026-01-27', '16:01:29', 2, 'admin@gmail.com', 'admin'),
(596, '2401:4900:1c74:9dd7:213a:c7af:216a:441', 'https://digitalnamo.com/azmal/2026/january/BrutiSewaFoundation/admin_con/product/add', '2026-01-27', '16:01:36', 2, 'admin@gmail.com', 'admin'),
(597, '2401:4900:1c74:9dd7:213a:c7af:216a:441', 'https://digitalnamo.com/azmal/2026/january/BrutiSewaFoundation/admin_con/product/listing', '2026-01-27', '16:02:35', 2, 'admin@gmail.com', 'admin'),
(598, '2401:4900:1c74:9dd7:213a:c7af:216a:441', 'https://digitalnamo.com/azmal/2026/january/BrutiSewaFoundation/admin_con/product/edit/3', '2026-01-27', '16:02:42', 2, 'admin@gmail.com', 'admin'),
(599, '2401:4900:1c74:9dd7:213a:c7af:216a:441', 'https://digitalnamo.com/azmal/2026/january/BrutiSewaFoundation/admin/dashboard', '2026-01-27', '16:03:41', 2, 'admin@gmail.com', 'admin'),
(600, '2401:4900:1c74:9dd7:213a:c7af:216a:441', 'https://digitalnamo.com/azmal/2026/january/BrutiSewaFoundation/admin_con/product/listing', '2026-01-27', '16:03:44', 2, 'admin@gmail.com', 'admin'),
(601, '2401:4900:1c74:9dd7:213a:c7af:216a:441', 'https://digitalnamo.com/azmal/2026/january/BrutiSewaFoundation/admin_con/product/add', '2026-01-27', '16:03:45', 2, 'admin@gmail.com', 'admin'),
(602, '2401:4900:1c74:9dd7:213a:c7af:216a:441', 'https://digitalnamo.com/azmal/2026/january/BrutiSewaFoundation/admin_con/product/listing', '2026-01-27', '16:04:10', 2, 'admin@gmail.com', 'admin'),
(603, '2401:4900:1c74:9dd7:213a:c7af:216a:441', 'https://digitalnamo.com/azmal/2026/january/BrutiSewaFoundation/admin_con/product/edit/4', '2026-01-27', '16:04:18', 2, 'admin@gmail.com', 'admin'),
(604, '2401:4900:1c74:9dd7:213a:c7af:216a:441', 'https://digitalnamo.com/azmal/2026/january/BrutiSewaFoundation/admin_con/product/listing', '2026-01-27', '16:04:28', 2, 'admin@gmail.com', 'admin'),
(605, '2401:4900:1c74:9dd7:213a:c7af:216a:441', 'https://digitalnamo.com/azmal/2026/january/BrutiSewaFoundation/admin_con/product/edit/3', '2026-01-27', '16:04:30', 2, 'admin@gmail.com', 'admin'),
(606, '2401:4900:1c74:9dd7:213a:c7af:216a:441', 'https://digitalnamo.com/azmal/2026/january/BrutiSewaFoundation/admin_con/product/listing', '2026-01-27', '16:04:33', 2, 'admin@gmail.com', 'admin'),
(607, '2401:4900:1c74:9dd7:213a:c7af:216a:441', 'https://digitalnamo.com/azmal/2026/january/BrutiSewaFoundation/admin_con/product/add', '2026-01-27', '16:05:26', 2, 'admin@gmail.com', 'admin'),
(608, '2401:4900:1c74:9dd7:213a:c7af:216a:441', 'https://digitalnamo.com/azmal/2026/january/BrutiSewaFoundation/admin_con/product/listing', '2026-01-27', '16:05:42', 2, 'admin@gmail.com', 'admin'),
(609, '2401:4900:1c74:9dd7:213a:c7af:216a:441', 'https://digitalnamo.com/azmal/2026/january/BrutiSewaFoundation/admin/dashboard', '2026-01-27', '16:05:49', 5, 'Ajay', '12345678'),
(610, '2401:4900:1c74:9dd7:213a:c7af:216a:441', 'https://digitalnamo.com/azmal/2026/january/BrutiSewaFoundation/admin/dashboard', '2026-01-27', '16:05:50', 5, 'Ajay', '12345678'),
(611, '2401:4900:1c74:9dd7:213a:c7af:216a:441', 'https://digitalnamo.com/azmal/2026/january/BrutiSewaFoundation/admin_con/user_orders/listing', '2026-01-27', '16:05:53', 5, 'Ajay', '12345678'),
(612, '2401:4900:1c74:9dd7:213a:c7af:216a:441', 'https://digitalnamo.com/azmal/2026/january/BrutiSewaFoundation/admin_con/user_orders/add', '2026-01-27', '16:06:01', 5, 'Ajay', '12345678'),
(613, '2401:4900:1c74:9dd7:213a:c7af:216a:441', 'https://digitalnamo.com/azmal/2026/january/BrutiSewaFoundation/admin_con/user_orders/listing', '2026-01-27', '16:06:29', 5, 'Ajay', '12345678'),
(614, '2401:4900:1c74:9dd7:213a:c7af:216a:441', 'https://digitalnamo.com/azmal/2026/january/BrutiSewaFoundation/admin_con/user_orders/listing', '2026-01-27', '16:06:32', 5, 'Ajay', '12345678'),
(615, '2401:4900:1c74:9dd7:213a:c7af:216a:441', 'https://digitalnamo.com/azmal/2026/january/BrutiSewaFoundation/admin_con/user_orders/view/5', '2026-01-27', '16:06:52', 5, 'Ajay', '12345678'),
(616, '2401:4900:1c74:9dd7:213a:c7af:216a:441', 'https://digitalnamo.com/azmal/2026/january/BrutiSewaFoundation/admin/dashboard', '2026-01-27', '16:06:54', 5, 'Ajay', '12345678'),
(617, '2401:4900:1c74:9dd7:213a:c7af:216a:441', 'https://digitalnamo.com/azmal/2026/january/BrutiSewaFoundation/admin_con/product/listing', '2026-01-27', '16:06:57', 2, 'admin@gmail.com', 'admin'),
(618, '2401:4900:1c74:9dd7:213a:c7af:216a:441', 'https://digitalnamo.com/azmal/2026/january/BrutiSewaFoundation/admin_con/product/listing', '2026-01-27', '16:06:58', 2, 'admin@gmail.com', 'admin'),
(619, '2401:4900:1c74:9dd7:213a:c7af:216a:441', 'https://digitalnamo.com/azmal/2026/january/BrutiSewaFoundation/admin_con/orders/listing', '2026-01-27', '16:06:59', 2, 'admin@gmail.com', 'admin'),
(620, '2401:4900:1c74:9dd7:213a:c7af:216a:441', 'https://digitalnamo.com/azmal/2026/january/BrutiSewaFoundation/admin_con/orders/view/5', '2026-01-27', '16:07:02', 2, 'admin@gmail.com', 'admin'),
(621, '2401:4900:1c74:9dd7:213a:c7af:216a:441', 'https://digitalnamo.com/azmal/2026/january/BrutiSewaFoundation/admin_con/orders/listing', '2026-01-27', '16:07:06', 2, 'admin@gmail.com', 'admin'),
(622, '2401:4900:1c74:9dd7:213a:c7af:216a:441', 'https://digitalnamo.com/azmal/2026/january/BrutiSewaFoundation/admin_con/orders/edit/5', '2026-01-27', '16:07:08', 2, 'admin@gmail.com', 'admin'),
(623, '2401:4900:1c74:9dd7:213a:c7af:216a:441', 'https://digitalnamo.com/azmal/2026/january/BrutiSewaFoundation/admin_con/orders/listing', '2026-01-27', '16:07:11', 2, 'admin@gmail.com', 'admin'),
(624, '2401:4900:1c74:9dd7:213a:c7af:216a:441', 'https://digitalnamo.com/azmal/2026/january/BrutiSewaFoundation/admin_con/orders/view/5', '2026-01-27', '16:07:12', 2, 'admin@gmail.com', 'admin'),
(625, '2401:4900:1c74:9dd7:213a:c7af:216a:441', 'https://digitalnamo.com/azmal/2026/january/BrutiSewaFoundation/admin_con/orders/listing', '2026-01-27', '16:07:15', 2, 'admin@gmail.com', 'admin'),
(626, '2401:4900:1c74:9dd7:213a:c7af:216a:441', 'https://digitalnamo.com/azmal/2026/january/BrutiSewaFoundation/admin_con/orders/edit/4', '2026-01-27', '16:07:26', 2, 'admin@gmail.com', 'admin'),
(627, '2401:4900:1c74:9dd7:213a:c7af:216a:441', 'https://digitalnamo.com/azmal/2026/january/BrutiSewaFoundation/admin_con/orders/listing', '2026-01-27', '16:07:45', 2, 'admin@gmail.com', 'admin'),
(628, '2401:4900:1c74:9dd7:5102:c56d:6edb:c16b', 'https://digitalnamo.com/azmal/2026/january/BrutiSewaFoundation/admin_con/orders/listing', '2026-01-28', '14:53:32', 2, 'admin@gmail.com', 'admin'),
(629, '2401:4900:1c74:9dd7:5102:c56d:6edb:c16b', 'https://digitalnamo.com/azmal/2026/january/BrutiSewaFoundation/admin/dashboard', '2026-01-28', '14:53:38', 2, 'admin@gmail.com', 'admin'),
(630, '2401:4900:1c74:9dd7:5102:c56d:6edb:c16b', 'https://digitalnamo.com/azmal/2026/january/BrutiSewaFoundation/admin_con/tbl_admin/listing', '2026-01-28', '14:54:21', 2, 'admin@gmail.com', 'admin'),
(631, '2401:4900:1c74:9dd7:5102:c56d:6edb:c16b', 'https://digitalnamo.com/azmal/2026/january/BrutiSewaFoundation/admin_con/product/listing', '2026-01-28', '14:54:24', 2, 'admin@gmail.com', 'admin'),
(632, '2401:4900:1c74:9dd7:5102:c56d:6edb:c16b', 'https://digitalnamo.com/azmal/2026/january/BrutiSewaFoundation/admin_con/product/add', '2026-01-28', '14:54:32', 2, 'admin@gmail.com', 'admin'),
(633, '2401:4900:1c74:9dd7:5102:c56d:6edb:c16b', 'https://digitalnamo.com/azmal/2026/january/BrutiSewaFoundation/admin_con/product/listing', '2026-01-28', '14:55:54', 2, 'admin@gmail.com', 'admin'),
(634, '2401:4900:1c74:9dd7:5102:c56d:6edb:c16b', 'https://digitalnamo.com/azmal/2026/january/BrutiSewaFoundation/admin_con/product/add', '2026-01-28', '14:56:17', 2, 'admin@gmail.com', 'admin'),
(635, '2401:4900:1c74:9dd7:5102:c56d:6edb:c16b', 'https://digitalnamo.com/azmal/2026/january/BrutiSewaFoundation/admin_con/product/listing', '2026-01-28', '14:56:37', 2, 'admin@gmail.com', 'admin'),
(636, '2401:4900:1c74:9dd7:5102:c56d:6edb:c16b', 'https://digitalnamo.com/azmal/2026/january/BrutiSewaFoundation/admin_con/product/edit/7', '2026-01-28', '14:57:48', 2, 'admin@gmail.com', 'admin'),
(637, '2401:4900:1c74:9dd7:5102:c56d:6edb:c16b', 'https://digitalnamo.com/azmal/2026/january/BrutiSewaFoundation/admin_con/product/listing', '2026-01-28', '14:57:54', 2, 'admin@gmail.com', 'admin'),
(638, '2401:4900:1c74:9dd7:5102:c56d:6edb:c16b', 'https://digitalnamo.com/azmal/2026/january/BrutiSewaFoundation/admin_con/product/edit/7', '2026-01-28', '14:58:12', 2, 'admin@gmail.com', 'admin'),
(639, '122.162.147.184', 'https://digitalnamo.com/azmal/2026/january/BrutiSewaFoundation/admin_con/product/listing', '2026-01-28', '14:58:33', 2, 'admin@gmail.com', 'admin'),
(640, '122.162.147.184', 'https://digitalnamo.com/azmal/2026/january/BrutiSewaFoundation/admin_con/product/listing', '2026-01-28', '14:58:48', 2, 'admin@gmail.com', 'admin'),
(641, '122.162.147.184', 'https://digitalnamo.com/azmal/2026/january/BrutiSewaFoundation/admin_con/product/listing', '2026-01-28', '14:58:51', 2, 'admin@gmail.com', 'admin'),
(642, '2401:4900:1c74:9dd7:5102:c56d:6edb:c16b', 'https://digitalnamo.com/azmal/2026/january/BrutiSewaFoundation/admin/dashboard', '2026-01-28', '15:00:13', 2, 'admin@gmail.com', 'admin'),
(643, '2401:4900:1c74:9dd7:5102:c56d:6edb:c16b', 'https://digitalnamo.com/azmal/2026/january/BrutiSewaFoundation/admin_con/product/listing', '2026-01-28', '15:00:16', 2, 'admin@gmail.com', 'admin'),
(644, '2401:4900:1c74:9dd7:5102:c56d:6edb:c16b', 'https://digitalnamo.com/azmal/2026/january/BrutiSewaFoundation/admin_con/product/listing', '2026-01-28', '15:00:29', 2, 'admin@gmail.com', 'admin'),
(645, '2401:4900:1c74:9dd7:5102:c56d:6edb:c16b', 'https://digitalnamo.com/azmal/2026/january/BrutiSewaFoundation/admin_con/tbl_admin/listing', '2026-01-28', '15:00:37', 2, 'admin@gmail.com', 'admin'),
(646, '2401:4900:1c74:9dd7:5102:c56d:6edb:c16b', 'https://digitalnamo.com/azmal/2026/january/BrutiSewaFoundation/admin_con/tbl_admin/add', '2026-01-28', '15:01:03', 2, 'admin@gmail.com', 'admin'),
(647, '2401:4900:1c74:9dd7:5102:c56d:6edb:c16b', 'https://digitalnamo.com/azmal/2026/january/BrutiSewaFoundation/admin_con/tbl_admin/listing', '2026-01-28', '15:01:56', 2, 'admin@gmail.com', 'admin'),
(648, '2401:4900:1c74:9dd7:5102:c56d:6edb:c16b', 'https://digitalnamo.com/azmal/2026/january/BrutiSewaFoundation/admin/access_denied', '2026-01-28', '15:02:30', 6, 'Rohan', '12345678'),
(649, '2401:4900:1c74:9dd7:5102:c56d:6edb:c16b', 'https://digitalnamo.com/azmal/2026/january/BrutiSewaFoundation/admin/access_denied', '2026-01-28', '15:02:36', 6, 'Rohan', '12345678'),
(650, '2401:4900:1c74:9dd7:5102:c56d:6edb:c16b', 'https://digitalnamo.com/azmal/2026/january/BrutiSewaFoundation/admin/access_denied', '2026-01-28', '15:02:57', 6, 'Rohan', '12345678'),
(651, '2401:4900:1c74:9dd7:5102:c56d:6edb:c16b', 'https://digitalnamo.com/azmal/2026/january/BrutiSewaFoundation/admin_con/user_orders/listing', '2026-01-28', '15:03:02', 6, 'Rohan', '12345678'),
(652, '2401:4900:1c74:9dd7:5102:c56d:6edb:c16b', 'https://digitalnamo.com/azmal/2026/january/BrutiSewaFoundation/admin/dashboard', '2026-01-28', '15:03:08', 6, 'Rohan', '12345678'),
(653, '2401:4900:1c74:9dd7:5102:c56d:6edb:c16b', 'https://digitalnamo.com/azmal/2026/january/BrutiSewaFoundation/admin_con/user_orders/listing', '2026-01-28', '15:03:16', 6, 'Rohan', '12345678'),
(654, '2401:4900:1c74:9dd7:5102:c56d:6edb:c16b', 'https://digitalnamo.com/azmal/2026/january/BrutiSewaFoundation/admin_con/user_orders/add', '2026-01-28', '15:03:19', 6, 'Rohan', '12345678'),
(655, '2401:4900:1c74:9dd7:5102:c56d:6edb:c16b', 'https://digitalnamo.com/azmal/2026/january/BrutiSewaFoundation/admin_con/user_orders/listing', '2026-01-28', '15:03:47', 6, 'Rohan', '12345678'),
(656, '2401:4900:1c74:9dd7:5102:c56d:6edb:c16b', 'https://digitalnamo.com/azmal/2026/january/BrutiSewaFoundation/admin_con/user_orders/add', '2026-01-28', '15:04:19', 6, 'Rohan', '12345678'),
(657, '2401:4900:1c74:9dd7:5102:c56d:6edb:c16b', 'https://digitalnamo.com/azmal/2026/january/BrutiSewaFoundation/admin_con/user_orders/listing', '2026-01-28', '15:04:26', 6, 'Rohan', '12345678'),
(658, '2401:4900:1c74:9dd7:5102:c56d:6edb:c16b', 'https://digitalnamo.com/azmal/2026/january/BrutiSewaFoundation/admin_con/user_orders/add', '2026-01-28', '15:04:31', 6, 'Rohan', '12345678'),
(659, '2401:4900:1c74:9dd7:5102:c56d:6edb:c16b', 'https://digitalnamo.com/azmal/2026/january/BrutiSewaFoundation/admin_con/user_orders/listing', '2026-01-28', '15:04:36', 6, 'Rohan', '12345678'),
(660, '2401:4900:1c74:9dd7:5102:c56d:6edb:c16b', 'https://digitalnamo.com/azmal/2026/january/BrutiSewaFoundation/admin_con/user_orders/listing', '2026-01-28', '15:04:46', 2, 'admin@gmail.com', 'admin'),
(661, '2401:4900:1c74:9dd7:5102:c56d:6edb:c16b', 'https://digitalnamo.com/azmal/2026/january/BrutiSewaFoundation/admin_con/orders/listing', '2026-01-28', '15:04:52', 2, 'admin@gmail.com', 'admin'),
(662, '2401:4900:1c74:9dd7:5102:c56d:6edb:c16b', 'https://digitalnamo.com/azmal/2026/january/BrutiSewaFoundation/admin_con/orders/view/8', '2026-01-28', '15:05:03', 2, 'admin@gmail.com', 'admin'),
(663, '2401:4900:1c74:9dd7:5102:c56d:6edb:c16b', 'https://digitalnamo.com/azmal/2026/january/BrutiSewaFoundation/admin_con/orders/listing', '2026-01-28', '15:05:19', 2, 'admin@gmail.com', 'admin'),
(664, '2401:4900:1c74:9dd7:5102:c56d:6edb:c16b', 'https://digitalnamo.com/azmal/2026/january/BrutiSewaFoundation/admin_con/orders/edit/7', '2026-01-28', '15:05:30', 2, 'admin@gmail.com', 'admin'),
(665, '2401:4900:1c74:9dd7:5102:c56d:6edb:c16b', 'https://digitalnamo.com/azmal/2026/january/BrutiSewaFoundation/admin_con/user_orders/edit/7', '2026-01-28', '15:06:55', 2, 'admin@gmail.com', 'admin'),
(666, '2401:4900:1c74:9dd7:5102:c56d:6edb:c16b', 'https://digitalnamo.com/azmal/2026/january/BrutiSewaFoundation/admin_con/user_orders/listing', '2026-01-28', '15:06:59', 2, 'admin@gmail.com', 'admin'),
(667, '2401:4900:1c74:9dd7:5102:c56d:6edb:c16b', 'https://digitalnamo.com/azmal/2026/january/BrutiSewaFoundation/admin_con/user_orders/edit/7', '2026-01-28', '15:07:02', 2, 'admin@gmail.com', 'admin'),
(668, '2401:4900:1c74:9dd7:5102:c56d:6edb:c16b', 'https://digitalnamo.com/azmal/2026/january/BrutiSewaFoundation/admin_con/orders/listing', '2026-01-28', '15:07:47', 2, 'admin@gmail.com', 'admin'),
(669, '2401:4900:1c74:9dd7:5102:c56d:6edb:c16b', 'https://digitalnamo.com/azmal/2026/january/BrutiSewaFoundation/admin_con/user_orders/edit/7', '2026-01-28', '16:24:56', 2, 'admin@gmail.com', 'admin'),
(670, '2409:40e2:160:872a:1d53:d9d:b84c:b4de', 'https://digitalnamo.com/azmal/2026/january/BrutiSewaFoundation/admin/dashboard', '2026-05-07', '20:55:58', 2, 'admin@gmail.com', 'admin'),
(671, '2409:40e2:160:872a:1d53:d9d:b84c:b4de', 'https://digitalnamo.com/azmal/2026/january/BrutiSewaFoundation/admin_con/orders/listing', '2026-05-07', '20:56:21', 2, 'admin@gmail.com', 'admin'),
(672, '2409:40e2:160:872a:1d53:d9d:b84c:b4de', 'https://digitalnamo.com/azmal/2026/january/BrutiSewaFoundation/admin/dashboard', '2026-05-07', '20:57:18', 2, 'admin@gmail.com', 'admin'),
(673, '2409:40e2:160:872a:1d53:d9d:b84c:b4de', 'https://digitalnamo.com/azmal/2026/january/BrutiSewaFoundation/admin_con/tbl_admin/listing', '2026-05-07', '20:57:21', 2, 'admin@gmail.com', 'admin'),
(674, '2409:40e2:160:872a:1d53:d9d:b84c:b4de', 'https://digitalnamo.com/azmal/2026/january/BrutiSewaFoundation/admin/dashboard', '2026-05-07', '20:57:36', 2, 'admin@gmail.com', 'admin'),
(675, '2409:40e2:160:872a:1d53:d9d:b84c:b4de', 'https://digitalnamo.com/azmal/2026/january/BrutiSewaFoundation/admin/dashboard', '2026-05-07', '20:58:20', 4, 'azmal123', 'azmal123'),
(676, '2409:40e2:160:872a:1d53:d9d:b84c:b4de', 'https://digitalnamo.com/azmal/2026/january/BrutiSewaFoundation/admin/dashboard', '2026-05-07', '20:58:26', 4, 'azmal123', 'azmal123'),
(677, '2409:40e2:160:872a:1d53:d9d:b84c:b4de', 'https://digitalnamo.com/azmal/2026/january/BrutiSewaFoundation/admin_con/user_orders/listing', '2026-05-07', '20:58:28', 4, 'azmal123', 'azmal123'),
(678, '2409:40e2:160:872a:1d53:d9d:b84c:b4de', 'https://digitalnamo.com/azmal/2026/january/BrutiSewaFoundation/admin_con/user_orders/view/4', '2026-05-07', '20:58:43', 4, 'azmal123', 'azmal123'),
(679, '2409:40e2:160:872a:1d53:d9d:b84c:b4de', 'https://digitalnamo.com/azmal/2026/january/BrutiSewaFoundation/admin_con/user_orders/listing', '2026-05-07', '20:59:10', 4, 'azmal123', 'azmal123'),
(680, '2409:40e2:160:872a:1d53:d9d:b84c:b4de', 'https://digitalnamo.com/azmal/2026/january/BrutiSewaFoundation/admin/dashboard', '2026-05-07', '21:00:26', 4, 'azmal123', 'azmal123');
INSERT INTO `activity_records` (`id`, `ip_addreass`, `url`, `date`, `time`, `admin_id`, `admin_username`, `admin_password`) VALUES
(681, '2409:40e2:160:872a:1d53:d9d:b84c:b4de', 'https://digitalnamo.com/azmal/2026/january/BrutiSewaFoundation/admin_con/user_orders/add', '2026-05-07', '21:00:26', 4, 'azmal123', 'azmal123'),
(682, '2409:40e2:160:872a:1d53:d9d:b84c:b4de', 'https://digitalnamo.com/azmal/2026/january/BrutiSewaFoundation/admin/dashboard', '2026-05-07', '21:01:17', 4, 'azmal123', 'azmal123'),
(683, '2409:40e2:160:872a:1d53:d9d:b84c:b4de', 'https://digitalnamo.com/azmal/2026/january/BrutiSewaFoundation/admin/dashboard', '2026-05-07', '21:01:21', 4, 'azmal123', 'azmal123'),
(684, '2409:40e2:160:872a:1d53:d9d:b84c:b4de', 'https://digitalnamo.com/azmal/2026/january/BrutiSewaFoundation/admin_con/user_orders/listing', '2026-05-07', '21:01:27', 4, 'azmal123', 'azmal123'),
(685, '2409:40e2:160:872a:1d53:d9d:b84c:b4de', 'https://digitalnamo.com/azmal/2026/january/BrutiSewaFoundation/admin_con/user_orders/listing', '2026-05-07', '21:04:32', 4, 'azmal123', 'azmal123'),
(686, '2409:40e2:160:872a:1d53:d9d:b84c:b4de', 'https://digitalnamo.com/azmal/2026/january/BrutiSewaFoundation/admin_con/user_orders/edit/9', '2026-05-07', '21:04:54', 4, 'azmal123', 'azmal123'),
(687, '2409:40e2:160:872a:1d53:d9d:b84c:b4de', 'https://digitalnamo.com/azmal/2026/january/BrutiSewaFoundation/admin/dashboard', '2026-05-07', '21:06:46', 4, 'azmal123', 'azmal123'),
(688, '2409:40e2:160:872a:1d53:d9d:b84c:b4de', 'https://digitalnamo.com/azmal/2026/january/BrutiSewaFoundation/admin/dashboard', '2026-05-07', '21:06:55', 4, 'azmal123', 'azmal123'),
(689, '2409:40e2:160:872a:1d53:d9d:b84c:b4de', 'https://digitalnamo.com/azmal/2026/january/BrutiSewaFoundation/admin/dashboard', '2026-05-07', '21:08:21', 2, 'admin@gmail.com', 'admin'),
(690, '2409:40e2:160:872a:1d53:d9d:b84c:b4de', 'https://digitalnamo.com/azmal/2026/january/BrutiSewaFoundation/admin_con/product/listing', '2026-05-07', '21:08:38', 2, 'admin@gmail.com', 'admin'),
(691, '2409:40e2:160:872a:1d53:d9d:b84c:b4de', 'https://digitalnamo.com/azmal/2026/january/BrutiSewaFoundation/admin_con/product/add', '2026-05-07', '21:08:46', 2, 'admin@gmail.com', 'admin'),
(692, '2409:40e2:160:872a:1d53:d9d:b84c:b4de', 'https://digitalnamo.com/azmal/2026/january/BrutiSewaFoundation/admin_con/orders/listing', '2026-05-07', '21:09:11', 2, 'admin@gmail.com', 'admin'),
(693, '2409:40e2:160:872a:1d53:d9d:b84c:b4de', 'https://digitalnamo.com/azmal/2026/january/BrutiSewaFoundation/admin_con/orders/view/9', '2026-05-07', '21:09:47', 2, 'admin@gmail.com', 'admin'),
(694, '2409:40e2:160:872a:1d53:d9d:b84c:b4de', 'https://digitalnamo.com/azmal/2026/january/BrutiSewaFoundation/admin/dashboard', '2026-05-07', '21:10:01', 2, 'admin@gmail.com', 'admin'),
(695, '2409:40e2:160:872a:1d53:d9d:b84c:b4de', 'https://digitalnamo.com/azmal/2026/january/BrutiSewaFoundation/admin_con/product/listing', '2026-05-07', '21:10:04', 2, 'admin@gmail.com', 'admin'),
(696, '2409:40e2:160:872a:1d53:d9d:b84c:b4de', 'https://digitalnamo.com/azmal/2026/january/BrutiSewaFoundation/admin_con/orders/listing', '2026-05-07', '21:10:06', 2, 'admin@gmail.com', 'admin'),
(697, '2401:4900:be7c:8858:a94e:dfce:f53b:518b', 'https://digitalnamo.com/azmal/2026/january/BrutiSewaFoundation/admin/dashboard', '2026-05-26', '13:06:54', 2, 'admin@gmail.com', 'admin'),
(698, '2401:4900:be7c:8858:a94e:dfce:f53b:518b', 'https://digitalnamo.com/azmal/2026/january/BrutiSewaFoundation/admin_con/tbl_admin/listing', '2026-05-26', '13:07:47', 2, 'admin@gmail.com', 'admin'),
(699, '2401:4900:be7c:8858:a94e:dfce:f53b:518b', 'https://digitalnamo.com/azmal/2026/january/BrutiSewaFoundation/admin_con/tbl_admin/add', '2026-05-26', '13:07:52', 2, 'admin@gmail.com', 'admin'),
(700, '2401:4900:be7c:8858:a94e:dfce:f53b:518b', 'https://digitalnamo.com/azmal/2026/january/BrutiSewaFoundation/admin_con/tbl_admin/listing', '2026-05-26', '13:08:12', 2, 'admin@gmail.com', 'admin'),
(701, '2401:4900:be7c:8858:a94e:dfce:f53b:518b', 'https://digitalnamo.com/azmal/2026/january/BrutiSewaFoundation/admin_con/product/listing', '2026-05-26', '13:08:20', 2, 'admin@gmail.com', 'admin'),
(702, '2401:4900:be7c:8858:a94e:dfce:f53b:518b', 'https://digitalnamo.com/azmal/2026/january/BrutiSewaFoundation/admin_con/product/add', '2026-05-26', '13:08:41', 2, 'admin@gmail.com', 'admin'),
(703, '2401:4900:be7c:8858:a94e:dfce:f53b:518b', 'https://digitalnamo.com/azmal/2026/january/BrutiSewaFoundation/admin_con/product/listing', '2026-05-26', '13:09:57', 2, 'admin@gmail.com', 'admin'),
(704, '2401:4900:be7c:8858:a94e:dfce:f53b:518b', 'https://digitalnamo.com/azmal/2026/january/BrutiSewaFoundation/admin_con/product/add', '2026-05-26', '13:10:01', 2, 'admin@gmail.com', 'admin'),
(705, '2401:4900:be7c:8858:a94e:dfce:f53b:518b', 'https://digitalnamo.com/azmal/2026/january/BrutiSewaFoundation/admin_con/product/listing', '2026-05-26', '13:10:21', 2, 'admin@gmail.com', 'admin'),
(706, '2401:4900:be7c:8858:a94e:dfce:f53b:518b', 'https://digitalnamo.com/azmal/2026/january/BrutiSewaFoundation/admin_con/product/listing', '2026-05-26', '13:10:26', 2, 'admin@gmail.com', 'admin'),
(707, '2401:4900:be7c:8858:a94e:dfce:f53b:518b', 'https://digitalnamo.com/azmal/2026/january/BrutiSewaFoundation/admin_con/product/listing', '2026-05-26', '13:10:30', 2, 'admin@gmail.com', 'admin'),
(708, '2401:4900:be7c:8858:a94e:dfce:f53b:518b', 'https://digitalnamo.com/azmal/2026/january/BrutiSewaFoundation/admin_con/product/listing', '2026-05-26', '13:10:33', 2, 'admin@gmail.com', 'admin'),
(709, '2401:4900:be7c:8858:a94e:dfce:f53b:518b', 'https://digitalnamo.com/azmal/2026/january/BrutiSewaFoundation/admin_con/product/listing', '2026-05-26', '13:10:34', 2, 'admin@gmail.com', 'admin'),
(710, '2401:4900:1c75:5150:a5ce:ea7b:3c29:f93c', 'https://digitalnamo.com/azmal/2026/january/BrutiSewaFoundation/admin/dashboard', '2026-05-26', '13:12:42', 2, 'admin@gmail.com', 'admin'),
(711, '2401:4900:1c75:5150:a5ce:ea7b:3c29:f93c', 'https://digitalnamo.com/azmal/2026/january/BrutiSewaFoundation/admin_con/product/listing', '2026-05-26', '13:12:43', 2, 'admin@gmail.com', 'admin'),
(712, '2401:4900:1c75:5150:a5ce:ea7b:3c29:f93c', 'https://digitalnamo.com/azmal/2026/january/BrutiSewaFoundation/admin_con/product/listing', '2026-05-26', '13:13:39', 2, 'admin@gmail.com', 'admin'),
(713, '2401:4900:1c75:5150:a5ce:ea7b:3c29:f93c', 'https://digitalnamo.com/azmal/2026/january/BrutiSewaFoundation/admin_con/product/edit/8', '2026-05-26', '13:14:06', 2, 'admin@gmail.com', 'admin'),
(714, '2401:4900:1c75:5150:a5ce:ea7b:3c29:f93c', 'https://digitalnamo.com/azmal/2026/january/BrutiSewaFoundation/admin_con/product/listing', '2026-05-26', '13:14:09', 2, 'admin@gmail.com', 'admin'),
(715, '2401:4900:1c75:5150:a5ce:ea7b:3c29:f93c', 'https://digitalnamo.com/azmal/2026/january/BrutiSewaFoundation/admin_con/orders/listing', '2026-05-26', '13:14:09', 2, 'admin@gmail.com', 'admin'),
(716, '2401:4900:be7c:8858:a94e:dfce:f53b:518b', 'https://digitalnamo.com/azmal/2026/january/BrutiSewaFoundation/admin_con/product/listing', '2026-05-26', '13:14:47', 2, 'admin@gmail.com', 'admin'),
(717, '2401:4900:be7c:8858:a94e:dfce:f53b:518b', 'https://digitalnamo.com/azmal/2026/january/BrutiSewaFoundation/admin_con/product/listing', '2026-05-26', '13:14:50', 2, 'admin@gmail.com', 'admin'),
(718, '2401:4900:be7c:8858:a94e:dfce:f53b:518b', 'https://digitalnamo.com/azmal/2026/january/BrutiSewaFoundation/admin_con/product/edit/7', '2026-05-26', '13:15:10', 2, 'admin@gmail.com', 'admin'),
(719, '2401:4900:be7c:8858:a94e:dfce:f53b:518b', 'https://digitalnamo.com/azmal/2026/january/BrutiSewaFoundation/admin_con/product/listing', '2026-05-26', '13:15:18', 2, 'admin@gmail.com', 'admin'),
(720, '2401:4900:be7c:8858:a94e:dfce:f53b:518b', 'https://digitalnamo.com/azmal/2026/january/BrutiSewaFoundation/admin_con/product/add', '2026-05-26', '13:15:42', 2, 'admin@gmail.com', 'admin'),
(721, '2401:4900:1c75:5150:a5ce:ea7b:3c29:f93c', 'https://digitalnamo.com/azmal/2026/january/BrutiSewaFoundation/admin_con/orders/listing', '2026-05-26', '13:16:01', 2, 'admin@gmail.com', 'admin'),
(722, '2401:4900:1c75:5150:a5ce:ea7b:3c29:f93c', 'https://digitalnamo.com/azmal/2026/january/BrutiSewaFoundation/admin_con/product/listing', '2026-05-26', '13:16:02', 2, 'admin@gmail.com', 'admin'),
(723, '2401:4900:be7c:8858:a94e:dfce:f53b:518b', 'https://digitalnamo.com/azmal/2026/january/BrutiSewaFoundation/admin_con/product/listing', '2026-05-26', '13:16:07', 2, 'admin@gmail.com', 'admin'),
(724, '2401:4900:1c75:5150:a5ce:ea7b:3c29:f93c', 'https://digitalnamo.com/azmal/2026/january/BrutiSewaFoundation/admin_con/product/edit/8', '2026-05-26', '13:16:13', 2, 'admin@gmail.com', 'admin'),
(725, '2401:4900:1c75:5150:a5ce:ea7b:3c29:f93c', 'https://digitalnamo.com/azmal/2026/january/BrutiSewaFoundation/admin_con/tbl_admin/listing', '2026-05-26', '13:16:19', 2, 'admin@gmail.com', 'admin'),
(726, '2401:4900:be7c:8858:a94e:dfce:f53b:518b', 'https://digitalnamo.com/azmal/2026/january/BrutiSewaFoundation/admin_con/orders/listing', '2026-05-26', '13:16:52', 2, 'admin@gmail.com', 'admin'),
(727, '2401:4900:1c75:5150:a5ce:ea7b:3c29:f93c', 'https://digitalnamo.com/azmal/2026/january/BrutiSewaFoundation/admin/dashboard', '2026-05-26', '13:17:31', 6, 'Rohan', '12345678'),
(728, '2401:4900:1c75:5150:a5ce:ea7b:3c29:f93c', 'https://digitalnamo.com/azmal/2026/january/BrutiSewaFoundation/admin_con/user_orders/listing', '2026-05-26', '13:17:33', 6, 'Rohan', '12345678'),
(729, '2401:4900:1c75:5150:a5ce:ea7b:3c29:f93c', 'https://digitalnamo.com/azmal/2026/january/BrutiSewaFoundation/admin_con/user_orders/view/8', '2026-05-26', '13:17:37', 6, 'Rohan', '12345678'),
(730, '2401:4900:1c75:5150:a5ce:ea7b:3c29:f93c', 'https://digitalnamo.com/azmal/2026/january/BrutiSewaFoundation/admin_con/orders/listing', '2026-05-26', '13:17:48', 2, 'admin@gmail.com', 'admin'),
(731, '2401:4900:1c75:5150:a5ce:ea7b:3c29:f93c', 'https://digitalnamo.com/azmal/2026/january/BrutiSewaFoundation/admin_con/orders/view/8', '2026-05-26', '13:17:52', 2, 'admin@gmail.com', 'admin'),
(732, '2401:4900:1c75:5150:a5ce:ea7b:3c29:f93c', 'https://digitalnamo.com/azmal/2026/january/BrutiSewaFoundation/admin_con/orders/listing', '2026-05-26', '13:17:57', 2, 'admin@gmail.com', 'admin'),
(733, '2401:4900:1c75:5150:a5ce:ea7b:3c29:f93c', 'https://digitalnamo.com/azmal/2026/january/BrutiSewaFoundation/admin_con/orders/listing', '2026-05-26', '13:18:09', 2, 'admin@gmail.com', 'admin'),
(734, '2401:4900:1c75:5150:a5ce:ea7b:3c29:f93c', 'https://digitalnamo.com/azmal/2026/january/BrutiSewaFoundation/admin_con/product/listing', '2026-05-26', '13:18:10', 2, 'admin@gmail.com', 'admin'),
(735, '2401:4900:1c75:5150:a5ce:ea7b:3c29:f93c', 'https://digitalnamo.com/azmal/2026/january/BrutiSewaFoundation/admin_con/tbl_admin/listing', '2026-05-26', '13:19:19', 2, 'admin@gmail.com', 'admin'),
(736, '2401:4900:1c75:5150:a5ce:ea7b:3c29:f93c', 'https://digitalnamo.com/azmal/2026/january/BrutiSewaFoundation/admin_con/user_orders/listing', '2026-05-26', '13:20:24', 6, 'Rohan', '12345678'),
(737, '2401:4900:1c75:5150:a5ce:ea7b:3c29:f93c', 'https://digitalnamo.com/azmal/2026/january/BrutiSewaFoundation/admin/dashboard', '2026-05-26', '13:20:24', 6, 'Rohan', '12345678'),
(738, '2401:4900:1c75:5150:a5ce:ea7b:3c29:f93c', 'https://digitalnamo.com/azmal/2026/january/BrutiSewaFoundation/admin_con/user_orders/listing', '2026-05-26', '13:20:25', 6, 'Rohan', '12345678'),
(739, '2401:4900:1c75:5150:a5ce:ea7b:3c29:f93c', 'https://digitalnamo.com/azmal/2026/january/BrutiSewaFoundation/admin_con/user_orders/add', '2026-05-26', '13:20:28', 6, 'Rohan', '12345678'),
(740, '2401:4900:be7c:8858:a94e:dfce:f53b:518b', 'https://digitalnamo.com/azmal/2026/january/BrutiSewaFoundation/admin/dashboard', '2026-05-26', '13:21:27', 2, 'admin@gmail.com', 'admin'),
(741, '2401:4900:be7c:8858:a94e:dfce:f53b:518b', 'https://digitalnamo.com/azmal/2026/january/BrutiSewaFoundation/admin_con/tbl_admin/listing', '2026-05-26', '13:21:30', 2, 'admin@gmail.com', 'admin'),
(742, '2401:4900:be7c:8858:a94e:dfce:f53b:518b', 'https://digitalnamo.com/azmal/2026/january/BrutiSewaFoundation/admin_con/tbl_admin/listing', '2026-05-26', '13:21:35', 2, 'admin@gmail.com', 'admin'),
(743, '2401:4900:be7c:8858:a94e:dfce:f53b:518b', 'https://digitalnamo.com/azmal/2026/january/BrutiSewaFoundation/admin_con/product/listing', '2026-05-26', '13:21:36', 2, 'admin@gmail.com', 'admin'),
(744, '2401:4900:be7c:8858:a94e:dfce:f53b:518b', 'https://digitalnamo.com/azmal/2026/january/BrutiSewaFoundation/admin_con/orders/listing', '2026-05-26', '13:21:42', 2, 'admin@gmail.com', 'admin'),
(745, '2401:4900:1c75:5150:a5ce:ea7b:3c29:f93c', 'https://digitalnamo.com/azmal/2026/january/BrutiSewaFoundation/admin_con/user_orders/listing', '2026-05-26', '13:21:47', 6, 'Rohan', '12345678'),
(746, '2401:4900:1c75:5150:a5ce:ea7b:3c29:f93c', 'https://digitalnamo.com/azmal/2026/january/BrutiSewaFoundation/admin_con/tbl_admin/listing', '2026-05-26', '13:28:00', 2, 'admin@gmail.com', 'admin'),
(747, '2401:4900:1c75:5150:a5ce:ea7b:3c29:f93c', 'https://digitalnamo.com/azmal/2026/january/BrutiSewaFoundation/admin_con/user_orders/listing', '2026-05-26', '13:28:04', 6, 'Rohan', '12345678'),
(748, '2401:4900:1c75:5150:a5ce:ea7b:3c29:f93c', 'https://digitalnamo.com/azmal/2026/january/BrutiSewaFoundation/admin_con/user_orders/view/6', '2026-05-26', '13:28:19', 6, 'Rohan', '12345678'),
(749, '2401:4900:1c75:5150:a5ce:ea7b:3c29:f93c', 'https://digitalnamo.com/azmal/2026/january/BrutiSewaFoundation/admin_con/user_orders/listing', '2026-05-26', '13:28:26', 6, 'Rohan', '12345678'),
(750, '2401:4900:1c75:5150:a5ce:ea7b:3c29:f93c', 'https://digitalnamo.com/azmal/2026/january/BrutiSewaFoundation/admin_con/orders/listing', '2026-05-26', '13:28:31', 2, 'admin@gmail.com', 'admin'),
(751, '::1', 'http://localhost/BrutiSewaFoundation/admin/dashboard', '2026-05-26', '15:46:36', 2, 'admin@gmail.com', 'admin'),
(752, '::1', 'http://localhost/BrutiSewaFoundation/admin_con/product/listing', '2026-05-26', '15:46:53', 2, 'admin@gmail.com', 'admin'),
(753, '::1', 'http://localhost/BrutiSewaFoundation/admin_con/product/listing', '2026-05-26', '15:49:11', 2, 'admin@gmail.com', 'admin'),
(754, '::1', 'http://localhost/BrutiSewaFoundation/admin_con/categories/listing', '2026-05-26', '15:49:52', 2, 'admin@gmail.com', 'admin'),
(755, '::1', 'http://localhost/BrutiSewaFoundation/admin_con/categories/add', '2026-05-26', '15:49:54', 2, 'admin@gmail.com', 'admin'),
(756, '::1', 'http://localhost/BrutiSewaFoundation/admin_con/categories/add', '2026-05-26', '15:51:03', 2, 'admin@gmail.com', 'admin'),
(757, '::1', 'http://localhost/BrutiSewaFoundation/admin_con/categories/listing', '2026-05-26', '15:51:14', 2, 'admin@gmail.com', 'admin'),
(758, '::1', 'http://localhost/BrutiSewaFoundation/admin_con/categories/listing', '2026-05-26', '15:51:27', 2, 'admin@gmail.com', 'admin'),
(759, '::1', 'http://localhost/BrutiSewaFoundation/admin_con/categories/edit/1', '2026-05-26', '15:51:28', 2, 'admin@gmail.com', 'admin'),
(760, '::1', 'http://localhost/BrutiSewaFoundation/admin_con/categories/listing', '2026-05-26', '15:51:29', 2, 'admin@gmail.com', 'admin'),
(761, '::1', 'http://localhost/BrutiSewaFoundation/admin_con/categories/edit/1', '2026-05-26', '15:51:32', 2, 'admin@gmail.com', 'admin'),
(762, '::1', 'http://localhost/BrutiSewaFoundation/admin_con/categories/listing', '2026-05-26', '15:51:35', 2, 'admin@gmail.com', 'admin'),
(763, '::1', 'http://localhost/BrutiSewaFoundation/admin_con/categories/add', '2026-05-26', '15:51:44', 2, 'admin@gmail.com', 'admin'),
(764, '::1', 'http://localhost/BrutiSewaFoundation/admin_con/categories/listing', '2026-05-26', '15:51:48', 2, 'admin@gmail.com', 'admin'),
(765, '::1', 'http://localhost/BrutiSewaFoundation/admin_con/categories/add', '2026-05-26', '15:51:50', 2, 'admin@gmail.com', 'admin'),
(766, '::1', 'http://localhost/BrutiSewaFoundation/admin_con/categories/listing', '2026-05-26', '15:52:08', 2, 'admin@gmail.com', 'admin'),
(767, '::1', 'http://localhost/BrutiSewaFoundation/admin_con/categories/listing', '2026-05-26', '15:53:41', 2, 'admin@gmail.com', 'admin'),
(768, '::1', 'http://localhost/BrutiSewaFoundation/admin_con/sub_categories/listing', '2026-05-26', '15:54:06', 2, 'admin@gmail.com', 'admin'),
(769, '::1', 'http://localhost/BrutiSewaFoundation/admin_con/sub_categories/add', '2026-05-26', '15:54:09', 2, 'admin@gmail.com', 'admin'),
(770, '::1', 'http://localhost/BrutiSewaFoundation/admin_con/sub_categories/add', '2026-05-26', '15:57:15', 2, 'admin@gmail.com', 'admin'),
(771, '::1', 'http://localhost/BrutiSewaFoundation/admin_con/sub_categories/add', '2026-05-26', '15:57:21', 2, 'admin@gmail.com', 'admin'),
(772, '::1', 'http://localhost/BrutiSewaFoundation/admin_con/sub_categories/add', '2026-05-26', '15:57:36', 2, 'admin@gmail.com', 'admin'),
(773, '::1', 'http://localhost/BrutiSewaFoundation/admin_con/sub_categories/add', '2026-05-26', '15:57:49', 2, 'admin@gmail.com', 'admin'),
(774, '::1', 'http://localhost/BrutiSewaFoundation/admin_con/sub_categories/listing', '2026-05-26', '15:57:54', 2, 'admin@gmail.com', 'admin'),
(775, '::1', 'http://localhost/BrutiSewaFoundation/admin_con/sub_categories/listing', '2026-05-26', '15:58:26', 2, 'admin@gmail.com', 'admin'),
(776, '::1', 'http://localhost/BrutiSewaFoundation/admin_con/sub_categories/listing', '2026-05-26', '15:58:33', 2, 'admin@gmail.com', 'admin'),
(777, '::1', 'http://localhost/BrutiSewaFoundation/admin_con/sub_categories/add', '2026-05-26', '15:58:38', 2, 'admin@gmail.com', 'admin'),
(778, '::1', 'http://localhost/BrutiSewaFoundation/admin_con/sub_categories/listing', '2026-05-26', '15:58:44', 2, 'admin@gmail.com', 'admin'),
(779, '::1', 'http://localhost/BrutiSewaFoundation/admin_con/sub_categories/add', '2026-05-26', '15:58:49', 2, 'admin@gmail.com', 'admin'),
(780, '::1', 'http://localhost/BrutiSewaFoundation/admin_con/sub_categories/listing', '2026-05-26', '15:58:55', 2, 'admin@gmail.com', 'admin'),
(781, '::1', 'http://localhost/BrutiSewaFoundation/admin_con/sub_categories/add', '2026-05-26', '15:58:56', 2, 'admin@gmail.com', 'admin'),
(782, '::1', 'http://localhost/BrutiSewaFoundation/admin_con/sub_categories/listing', '2026-05-26', '15:59:02', 2, 'admin@gmail.com', 'admin'),
(783, '::1', 'http://localhost/BrutiSewaFoundation/admin_con/sub_categories/edit/3', '2026-05-26', '15:59:03', 2, 'admin@gmail.com', 'admin'),
(784, '::1', 'http://localhost/BrutiSewaFoundation/admin_con/sub_categories/listing', '2026-05-26', '15:59:06', 2, 'admin@gmail.com', 'admin'),
(785, '::1', 'http://localhost/BrutiSewaFoundation/admin_con/sub_categories/add', '2026-05-26', '15:59:08', 2, 'admin@gmail.com', 'admin'),
(786, '::1', 'http://localhost/BrutiSewaFoundation/admin_con/sub_categories/listing', '2026-05-26', '15:59:13', 2, 'admin@gmail.com', 'admin'),
(787, '::1', 'http://localhost/BrutiSewaFoundation/admin_con/product/listing', '2026-05-26', '16:00:41', 2, 'admin@gmail.com', 'admin'),
(788, '::1', 'http://localhost/BrutiSewaFoundation/admin_con/product/add', '2026-05-26', '16:00:43', 2, 'admin@gmail.com', 'admin'),
(789, '::1', 'http://localhost/BrutiSewaFoundation/admin_con/orders/listing', '2026-05-26', '16:01:58', 2, 'admin@gmail.com', 'admin'),
(790, '::1', 'http://localhost/BrutiSewaFoundation/admin_con/product/listing', '2026-05-26', '16:01:59', 2, 'admin@gmail.com', 'admin'),
(791, '::1', 'http://localhost/BrutiSewaFoundation/admin_con/product/edit/8', '2026-05-26', '16:02:01', 2, 'admin@gmail.com', 'admin'),
(792, '::1', 'http://localhost/BrutiSewaFoundation/admin_con/product/edit/8', '2026-05-26', '16:04:26', 2, 'admin@gmail.com', 'admin'),
(793, '::1', 'http://localhost/BrutiSewaFoundation/admin_con/product/edit/8', '2026-05-26', '16:04:50', 2, 'admin@gmail.com', 'admin'),
(794, '::1', 'http://localhost/BrutiSewaFoundation/admin_con/product/edit/8', '2026-05-26', '16:04:57', 2, 'admin@gmail.com', 'admin'),
(795, '::1', 'http://localhost/BrutiSewaFoundation/admin_con/product/edit/8', '2026-05-26', '16:08:13', 2, 'admin@gmail.com', 'admin'),
(796, '::1', 'http://localhost/BrutiSewaFoundation/admin_con/product/edit/8', '2026-05-26', '16:09:08', 2, 'admin@gmail.com', 'admin'),
(797, '::1', 'http://localhost/BrutiSewaFoundation/admin_con/product/listing', '2026-05-26', '16:09:23', 2, 'admin@gmail.com', 'admin'),
(798, '::1', 'http://localhost/BrutiSewaFoundation/admin_con/product/listing', '2026-05-26', '16:09:58', 2, 'admin@gmail.com', 'admin'),
(799, '::1', 'http://localhost/BrutiSewaFoundation/admin_con/product/edit/8', '2026-05-26', '16:10:00', 2, 'admin@gmail.com', 'admin'),
(800, '::1', 'http://localhost/BrutiSewaFoundation/admin_con/product/listing', '2026-05-26', '16:10:03', 2, 'admin@gmail.com', 'admin'),
(801, '::1', 'http://localhost/BrutiSewaFoundation/admin_con/product/edit/8', '2026-05-26', '16:10:07', 2, 'admin@gmail.com', 'admin'),
(802, '::1', 'http://localhost/BrutiSewaFoundation/admin_con/product/listing', '2026-05-26', '16:10:15', 2, 'admin@gmail.com', 'admin'),
(803, '::1', 'http://localhost/BrutiSewaFoundation/admin_con/product/listing', '2026-05-26', '16:11:00', 2, 'admin@gmail.com', 'admin'),
(804, '::1', 'http://localhost/BrutiSewaFoundation/admin_con/orders/listing', '2026-05-26', '16:12:04', 2, 'admin@gmail.com', 'admin'),
(805, '::1', 'http://localhost/BrutiSewaFoundation/admin_con/orders/view/9', '2026-05-26', '16:12:06', 2, 'admin@gmail.com', 'admin'),
(806, '::1', 'http://localhost/BrutiSewaFoundation/admin_con/orders/view/9', '2026-05-26', '16:41:16', 2, 'admin@gmail.com', 'admin'),
(807, '::1', 'http://localhost/BrutiSewaFoundation/admin_con/product/edit/4', '2026-05-26', '16:41:23', 2, 'admin@gmail.com', 'admin'),
(808, '::1', 'http://localhost/BrutiSewaFoundation/admin_con/orders/listing', '2026-05-26', '16:41:32', 2, 'admin@gmail.com', 'admin'),
(809, '::1', 'http://localhost/BrutiSewaFoundation/admin_con/tbl_admin/listing', '2026-05-26', '16:41:39', 2, 'admin@gmail.com', 'admin'),
(810, '::1', 'http://localhost/BrutiSewaFoundation/admin_con/orders/listing', '2026-05-26', '16:43:11', 2, 'admin@gmail.com', 'admin'),
(811, '::1', 'http://localhost/BrutiSewaFoundation/admin_con/categories/listing', '2026-05-26', '17:24:26', 2, 'admin@gmail.com', 'admin'),
(812, '::1', 'http://localhost/BrutiSewaFoundation/admin_con/sub_categories/listing', '2026-05-26', '17:24:34', 2, 'admin@gmail.com', 'admin'),
(813, '::1', 'http://localhost/BrutiSewaFoundation/admin_con/product/listing', '2026-05-26', '17:24:43', 2, 'admin@gmail.com', 'admin'),
(814, '::1', 'http://localhost/BrutiSewaFoundation/admin_con/product/listing', '2026-05-26', '18:08:22', 2, 'admin@gmail.com', 'admin'),
(815, '::1', 'http://localhost/BrutiSewaFoundation/admin_con/product/listing', '2026-05-26', '18:09:48', 2, 'admin@gmail.com', 'admin'),
(816, '::1', 'http://localhost/BrutiSewaFoundation/admin_con/tbl_admin/listing', '2026-05-26', '18:09:49', 2, 'admin@gmail.com', 'admin'),
(817, '::1', 'http://localhost/BrutiSewaFoundation/admin_con/tbl_admin/listing', '2026-05-26', '18:09:59', 2, 'admin@gmail.com', 'admin'),
(818, '::1', 'http://localhost/BrutiSewaFoundation/admin_con/tbl_admin/edit/6', '2026-05-26', '18:10:15', 2, 'admin@gmail.com', 'admin'),
(819, '::1', 'http://localhost/BrutiSewaFoundation/admin_con/tbl_admin/listing', '2026-05-26', '18:15:54', 2, 'admin@gmail.com', 'admin'),
(820, '::1', 'http://localhost/BrutiSewaFoundation/admin_con/tbl_admin/add', '2026-05-26', '18:15:55', 2, 'admin@gmail.com', 'admin'),
(821, '::1', 'http://localhost/BrutiSewaFoundation/admin_con/tbl_admin/add', '2026-05-26', '18:16:19', 2, 'admin@gmail.com', 'admin'),
(822, '::1', 'http://localhost/BrutiSewaFoundation/admin_con/tbl_admin/add', '2026-05-26', '18:16:30', 2, 'admin@gmail.com', 'admin'),
(823, '::1', 'http://localhost/BrutiSewaFoundation/admin_con/tbl_admin/add', '2026-05-26', '18:16:51', 2, 'admin@gmail.com', 'admin'),
(824, '::1', 'http://localhost/BrutiSewaFoundation/admin_con/tbl_admin/add', '2026-05-26', '18:17:23', 2, 'admin@gmail.com', 'admin'),
(825, '::1', 'http://localhost/BrutiSewaFoundation/admin_con/tbl_admin/listing', '2026-05-26', '18:17:27', 2, 'admin@gmail.com', 'admin'),
(826, '::1', 'http://localhost/BrutiSewaFoundation/admin_con/tbl_admin/edit/4', '2026-05-26', '18:17:29', 2, 'admin@gmail.com', 'admin'),
(827, '::1', 'http://localhost/BrutiSewaFoundation/admin_con/tbl_admin/listing', '2026-05-26', '18:17:35', 2, 'admin@gmail.com', 'admin'),
(828, '::1', 'http://localhost/BrutiSewaFoundation/admin_con/tbl_admin/add', '2026-05-26', '18:17:37', 2, 'admin@gmail.com', 'admin'),
(829, '::1', 'http://localhost/BrutiSewaFoundation/admin_con/tbl_admin/listing', '2026-05-26', '18:17:41', 2, 'admin@gmail.com', 'admin'),
(830, '::1', 'http://localhost/BrutiSewaFoundation/admin_con/tbl_admin/add', '2026-05-26', '18:17:44', 2, 'admin@gmail.com', 'admin'),
(831, '::1', 'http://localhost/BrutiSewaFoundation/admin_con/tbl_admin/edit/5', '2026-05-26', '18:17:48', 2, 'admin@gmail.com', 'admin'),
(832, '::1', 'http://localhost/BrutiSewaFoundation/admin_con/tbl_admin/listing', '2026-05-26', '18:17:52', 2, 'admin@gmail.com', 'admin'),
(833, '::1', 'http://localhost/BrutiSewaFoundation/admin_con/tbl_admin/edit/6', '2026-05-26', '18:17:54', 2, 'admin@gmail.com', 'admin'),
(834, '::1', 'http://localhost/BrutiSewaFoundation/admin_con/tbl_admin/listing', '2026-05-26', '18:17:57', 2, 'admin@gmail.com', 'admin'),
(835, '::1', 'http://localhost/BrutiSewaFoundation/admin_con/tbl_admin/add', '2026-05-26', '18:17:59', 2, 'admin@gmail.com', 'admin'),
(836, '::1', 'http://localhost/BrutiSewaFoundation/admin_con/tbl_admin/add', '2026-05-26', '18:18:02', 2, 'admin@gmail.com', 'admin'),
(837, '::1', 'http://localhost/BrutiSewaFoundation/admin_con/tbl_admin/listing', '2026-05-26', '18:18:07', 2, 'admin@gmail.com', 'admin'),
(838, '::1', 'http://localhost/BrutiSewaFoundation/admin_con/tbl_admin/listing', '2026-05-26', '18:18:23', 2, 'admin@gmail.com', 'admin'),
(839, '::1', 'http://localhost/BrutiSewaFoundation/admin_con/tbl_admin/listing', '2026-05-26', '18:18:31', 2, 'admin@gmail.com', 'admin'),
(840, '::1', 'http://localhost/BrutiSewaFoundation/admin_con/tbl_admin/edit/6', '2026-05-26', '18:21:34', 2, 'admin@gmail.com', 'admin'),
(841, '::1', 'http://localhost/BrutiSewaFoundation/admin_con/tbl_admin/listing', '2026-05-26', '18:21:36', 2, 'admin@gmail.com', 'admin'),
(842, '::1', 'http://localhost/BrutiSewaFoundation/admin_con/tbl_admin/listing', '2026-05-26', '18:22:21', 2, 'admin@gmail.com', 'admin'),
(843, '::1', 'http://localhost/BrutiSewaFoundation/admin_con/tbl_admin/edit/5', '2026-05-26', '18:22:22', 2, 'admin@gmail.com', 'admin'),
(844, '::1', 'http://localhost/BrutiSewaFoundation/admin_con/tbl_admin/listing', '2026-05-26', '18:22:25', 2, 'admin@gmail.com', 'admin'),
(845, '::1', 'http://localhost/BrutiSewaFoundation/admin_con/tbl_admin/edit/4', '2026-05-26', '18:22:26', 2, 'admin@gmail.com', 'admin'),
(846, '::1', 'http://localhost/BrutiSewaFoundation/admin_con/tbl_admin/listing', '2026-05-26', '18:22:28', 2, 'admin@gmail.com', 'admin'),
(847, '::1', 'http://localhost/BrutiSewaFoundation/admin_con/tbl_admin/listing', '2026-05-26', '18:22:44', 2, 'admin@gmail.com', 'admin'),
(848, '::1', 'http://localhost/BrutiSewaFoundation/admin_con/tbl_admin/add', '2026-05-26', '18:24:04', 2, 'admin@gmail.com', 'admin'),
(849, '::1', 'http://localhost/BrutiSewaFoundation/admin_con/tbl_admin/listing', '2026-05-26', '18:24:11', 2, 'admin@gmail.com', 'admin'),
(850, '::1', 'http://localhost/BrutiSewaFoundation/admin_con/tbl_admin/listing', '2026-05-26', '18:24:22', 2, 'admin@gmail.com', 'admin'),
(851, '::1', 'http://localhost/BrutiSewaFoundation/admin_con/tbl_admin/edit/6', '2026-05-26', '18:27:11', 2, 'admin@gmail.com', 'admin');

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
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `slug` text NOT NULL,
  `image` text NOT NULL,
  `status` int(11) NOT NULL,
  `addeddate` datetime NOT NULL,
  `modifieddate` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `slug`, `image`, `status`, `addeddate`, `modifieddate`) VALUES
(1, 'CCTV INSTALLATION', 'cctv-installation', '', 1, '2026-05-26 15:51:13', '2026-05-26 10:21:35'),
(2, 'Car Transport', 'car-transport', '', 1, '2026-05-26 15:51:48', '2026-05-26 10:21:48'),
(3, 'Sewa', 'sewa', '', 1, '2026-05-26 15:52:07', '2026-05-26 10:22:07');

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
(17, 'wol 2', 'wol1@gmail.com', '123456789', 'Test', 'teste ete st', '2024-08-24 14:18:28');

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
(20, '2', '68b29798144c4::1', '::1', '2025-08-30', '11:48:00', 'admin@gmail.com', 'admin', '2026-01-02', '16:54:17', 1),
(21, '2', '68d3c8020ea98::1', '::1', '2025-09-24', '15:59:22', 'admin@gmail.com', 'admin', '2026-01-02', '16:54:17', 1),
(22, '2', '69578fff2b2bd::1', '::1', '2026-01-02', '14:59:35', 'admin@gmail.com', 'admin', '2026-01-02', '16:54:17', 1),
(23, '4', '695794b638153::1', '::1', '2026-01-02', '15:19:42', 'azmal123', 'azmal123', '2026-01-03', '10:28:45', 1),
(24, '2', '6957aae3343fd::1', '::1', '2026-01-02', '16:54:19', 'admin@gmail.com', 'admin', '2026-01-03', '10:28:40', 1),
(25, '4', '6957ab0a8e3cf::1', '::1', '2026-01-02', '16:54:58', 'azmal123', 'azmal123', '2026-01-03', '10:28:45', 1),
(26, '4', '6958a1766c9ad::1', '::1', '2026-01-03', '10:26:22', 'azmal123', 'azmal123', '2026-01-03', '10:28:45', 1),
(27, '2', '6958a20223b0f::1', '::1', '2026-01-03', '10:28:42', 'admin@gmail.com', 'admin', '2026-01-27', '15:33:00', 1),
(28, '4', '6958a211e6a02::1', '::1', '2026-01-03', '10:28:57', 'azmal123', 'azmal123', '2026-01-03', '13:26:40', 1),
(29, '2', '6958cadd2f6522401:4900:1c8a:b09e:fc90:f72:7458:26e4', '2401:4900:1c8a:b09e:fc90:f72:7458:26e4', '2026-01-03', '13:23:01', 'admin@gmail.com', 'admin', '2026-01-27', '15:33:00', 1),
(30, '2', '6958cb4cc99b12401:4900:1c8a:b09e:79d2:c62e:4141:9c4f', '2401:4900:1c8a:b09e:79d2:c62e:4141:9c4f', '2026-01-03', '13:24:52', 'admin@gmail.com', 'admin', '2026-01-27', '15:33:00', 1),
(31, '4', '6958cb7cd12232401:4900:1c8a:b09e:79d2:c62e:4141:9c4f', '2401:4900:1c8a:b09e:79d2:c62e:4141:9c4f', '2026-01-03', '13:25:40', 'azmal123', 'azmal123', '2026-01-03', '13:26:40', 1),
(32, '2', '6958cbbb69e272401:4900:1c8a:b09e:79d2:c62e:4141:9c4f', '2401:4900:1c8a:b09e:79d2:c62e:4141:9c4f', '2026-01-03', '13:26:43', 'admin@gmail.com', 'admin', '2026-01-27', '15:33:00', 1),
(33, '2', '6958cbbf18f0c2401:4900:1c8a:b09e:79d2:c62e:4141:9c4f', '2401:4900:1c8a:b09e:79d2:c62e:4141:9c4f', '2026-01-03', '13:26:47', 'admin@gmail.com', 'admin', '2026-01-27', '15:33:00', 1),
(34, '2', '6958cc649c4a22401:4900:74db:dc47:cdda:a176:5205:41cb', '2401:4900:74db:dc47:cdda:a176:5205:41cb', '2026-01-03', '13:29:32', 'admin@gmail.com', 'admin', '2026-01-27', '15:33:00', 1),
(35, '2', '6958d0373a4d02401:4900:1c8a:b09e:ed87:b741:bb9:333f', '2401:4900:1c8a:b09e:ed87:b741:bb9:333f', '2026-01-03', '13:45:51', 'admin@gmail.com', 'admin', '2026-01-27', '15:33:00', 1),
(36, '4', '6958d052575e92401:4900:1c8a:b09e:ed87:b741:bb9:333f', '2401:4900:1c8a:b09e:ed87:b741:bb9:333f', '2026-01-03', '13:46:18', 'azmal123', 'azmal123', '2026-01-03', '14:33:58', 1),
(37, '4', '6958da852a8f42401:4900:1c8a:b09e:fc90:f72:7458:26e4', '2401:4900:1c8a:b09e:fc90:f72:7458:26e4', '2026-01-03', '14:29:49', 'azmal123', 'azmal123', '2026-01-03', '14:33:58', 1),
(38, '2', '6958f117c359b2401:4900:1c8a:b09e:2d5b:61d5:f92c:3f7e', '2401:4900:1c8a:b09e:2d5b:61d5:f92c:3f7e', '2026-01-03', '16:06:07', 'admin@gmail.com', 'admin', '2026-01-27', '15:33:00', 1),
(39, '4', '695b4617b831a2401:4900:1c8a:b09e:101e:4d18:ddda:9f01', '2401:4900:1c8a:b09e:101e:4d18:ddda:9f01', '2026-01-05', '10:33:19', 'azmal123', 'azmal123', '2026-01-27', '15:58:52', 1),
(40, '2', '695c9a6f25d0d2401:4900:1c8a:b09e:e037:7437:b761:5f95', '2401:4900:1c8a:b09e:e037:7437:b761:5f95', '2026-01-06', '10:45:27', 'admin@gmail.com', 'admin', '2026-01-27', '15:33:00', 1),
(41, '2', '695ca82b3290e2401:4900:1c8a:b09e:65d6:3db4:5110:f27e', '2401:4900:1c8a:b09e:65d6:3db4:5110:f27e', '2026-01-06', '11:44:03', 'admin@gmail.com', 'admin', '2026-01-27', '15:33:00', 1),
(42, '2', '69788d33d3d5c2401:4900:1c74:9dd7:213a:c7af:216a:441', '2401:4900:1c74:9dd7:213a:c7af:216a:441', '2026-01-27', '15:32:27', 'admin@gmail.com', 'admin', '2026-01-27', '15:33:00', 1),
(43, '4', '69788d5edab002401:4900:1c74:9dd7:213a:c7af:216a:441', '2401:4900:1c74:9dd7:213a:c7af:216a:441', '2026-01-27', '15:33:10', 'azmal123', 'azmal123', '2026-01-27', '15:58:52', 1),
(44, '4', '6978934e7d61e2401:4900:1c74:9dd7:213a:c7af:216a:441', '2401:4900:1c74:9dd7:213a:c7af:216a:441', '2026-01-27', '15:58:30', 'azmal123', 'azmal123', '2026-01-27', '15:58:52', 1),
(45, '2', '69789369c87de2401:4900:1c74:9dd7:213a:c7af:216a:441', '2401:4900:1c74:9dd7:213a:c7af:216a:441', '2026-01-27', '15:58:57', 'admin@gmail.com', 'admin', '2026-01-28', '15:00:24', 1),
(46, '5', '697893bf885422401:4900:1c74:9dd7:213a:c7af:216a:441', '2401:4900:1c74:9dd7:213a:c7af:216a:441', '2026-01-27', '16:00:23', 'Ajay', '12345678', NULL, NULL, 0),
(47, '2', '6979d594ab1112401:4900:1c74:9dd7:5102:c56d:6edb:c16b', '2401:4900:1c74:9dd7:5102:c56d:6edb:c16b', '2026-01-28', '14:53:32', 'admin@gmail.com', 'admin', '2026-01-28', '15:00:24', 1),
(48, '2', '6979d735788712401:4900:1c74:9dd7:5102:c56d:6edb:c16b', '2401:4900:1c74:9dd7:5102:c56d:6edb:c16b', '2026-01-28', '15:00:29', 'admin@gmail.com', 'admin', '2026-01-28', '15:02:21', 1),
(49, '6', '6979d7ae228fe2401:4900:1c74:9dd7:5102:c56d:6edb:c16b', '2401:4900:1c74:9dd7:5102:c56d:6edb:c16b', '2026-01-28', '15:02:30', 'Rohan', '12345678', NULL, NULL, 0),
(50, '6', '6979d7c98322e2401:4900:1c74:9dd7:5102:c56d:6edb:c16b', '2401:4900:1c74:9dd7:5102:c56d:6edb:c16b', '2026-01-28', '15:02:57', 'Rohan', '12345678', NULL, NULL, 0),
(51, '2', '6979d83642c2e2401:4900:1c74:9dd7:5102:c56d:6edb:c16b', '2401:4900:1c74:9dd7:5102:c56d:6edb:c16b', '2026-01-28', '15:04:46', 'admin@gmail.com', 'admin', '2026-05-07', '21:11:39', 1),
(52, '2', '69fcaf06852cb2409:40e2:160:872a:1d53:d9d:b84c:b4de', '2409:40e2:160:872a:1d53:d9d:b84c:b4de', '2026-05-07', '20:55:58', 'admin@gmail.com', 'admin', '2026-05-07', '21:11:39', 1),
(53, '4', '69fcaf942fb312409:40e2:160:872a:1d53:d9d:b84c:b4de', '2409:40e2:160:872a:1d53:d9d:b84c:b4de', '2026-05-07', '20:58:20', 'azmal123', 'azmal123', '2026-05-07', '21:07:45', 1),
(54, '2', '69fcb1ed65a872409:40e2:160:872a:1d53:d9d:b84c:b4de', '2409:40e2:160:872a:1d53:d9d:b84c:b4de', '2026-05-07', '21:08:21', 'admin@gmail.com', 'admin', '2026-05-07', '21:11:39', 1),
(55, '2', '6a154d968c23d2401:4900:be7c:8858:a94e:dfce:f53b:518b', '2401:4900:be7c:8858:a94e:dfce:f53b:518b', '2026-05-26', '13:06:54', 'admin@gmail.com', 'admin', NULL, NULL, 0),
(56, '2', '6a154ef1eee302401:4900:1c75:5150:a5ce:ea7b:3c29:f93c', '2401:4900:1c75:5150:a5ce:ea7b:3c29:f93c', '2026-05-26', '13:12:41', 'admin@gmail.com', 'admin', NULL, NULL, 0),
(57, '2', '6a154f6f9f2182401:4900:be7c:8858:a94e:dfce:f53b:518b', '2401:4900:be7c:8858:a94e:dfce:f53b:518b', '2026-05-26', '13:14:47', 'admin@gmail.com', 'admin', NULL, NULL, 0),
(58, '6', '6a155013ce72e2401:4900:1c75:5150:a5ce:ea7b:3c29:f93c', '2401:4900:1c75:5150:a5ce:ea7b:3c29:f93c', '2026-05-26', '13:17:31', 'Rohan', '12345678', NULL, NULL, 0),
(59, '2', '6a1573045281f::1', '::1', '2026-05-26', '15:46:36', 'admin@gmail.com', 'admin', NULL, NULL, 0);

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
(24, NULL, NULL, NULL, NULL, NULL, 'sadd', NULL, NULL, NULL, NULL, NULL, 0),
(26, NULL, NULL, NULL, NULL, NULL, 'sad', NULL, NULL, NULL, NULL, NULL, 0),
(28, NULL, NULL, NULL, NULL, NULL, 'tewt', NULL, NULL, NULL, NULL, NULL, 0);

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
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `order_number` varchar(50) NOT NULL,
  `total_amount` float NOT NULL DEFAULT 0,
  `paid_amount` float DEFAULT 0,
  `pending_amount` float DEFAULT 0,
  `payment_method` varchar(50) DEFAULT NULL,
  `payment_status` int(11) DEFAULT NULL COMMENT '0=pending,1=paid',
  `status` int(11) DEFAULT NULL COMMENT '0=new,1=confirmed,2=shipped,3=delivered,4=cancelled',
  `addeddate` datetime DEFAULT current_timestamp(),
  `modifieddate` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `user_id`, `order_number`, `total_amount`, `paid_amount`, `pending_amount`, `payment_method`, `payment_status`, `status`, `addeddate`, `modifieddate`) VALUES
(1, 4, 'BSF-2026-001', 24995, 0, 0, NULL, NULL, 1, '2026-01-01 18:15:25', '2026-01-03 11:28:54'),
(2, 4, 'BSF-2026-002', 28996, 8996, 20000, NULL, NULL, 0, '2026-01-02 18:16:59', '2026-01-03 13:14:56'),
(3, 4, 'BSF-2026-003', 49990, 0, 0, NULL, NULL, 0, '2026-01-03 11:04:34', '2026-01-03 11:04:34'),
(4, 4, 'BSF-2026-004', 60995, 5000, 55995, NULL, NULL, 1, '2026-01-05 10:33:49', '2026-01-27 16:07:45'),
(5, 5, 'BSF-2026-005', 20028, 0, 0, NULL, NULL, 0, '2026-01-27 16:06:29', '2026-01-27 10:36:29'),
(6, 6, 'BSF-2026-006', 20038, 0, 0, NULL, NULL, 0, '2026-01-28 15:03:47', '2026-01-28 09:33:47'),
(7, 2, 'BSF-2026-007', 1020, 600, 420, NULL, NULL, 0, '2026-01-28 15:04:26', '2026-01-28 15:07:47'),
(8, 6, 'BSF-2026-008', 20, 0, 0, NULL, NULL, 0, '2026-01-28 15:04:36', '2026-01-28 09:34:36'),
(9, 4, 'BSF-2026-009', 20, 0, 0, NULL, NULL, 0, '2026-05-07 21:04:32', '2026-05-07 15:34:32');

-- --------------------------------------------------------

--
-- Table structure for table `order_items`
--

CREATE TABLE `order_items` (
  `id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `product_name` varchar(255) DEFAULT NULL,
  `product_price` float NOT NULL DEFAULT 0,
  `quantity` int(11) NOT NULL,
  `total_price` float NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `order_items`
--

INSERT INTO `order_items` (`id`, `order_id`, `product_id`, `product_name`, `product_price`, `quantity`, `total_price`) VALUES
(9, 1, 1, 'VMS Careline 100 Kg Load Capacity Black Foldable Manual Wheelchair', 4999, 5, 24995),
(16, 2, 2, 'Welltrust Healthcare 190x90x60 cm Mid Steel & ABS Material White & Blue Plain Bed with Side Railing Mattress & Wheel', 13999, 1, 13999),
(17, 2, 1, 'VMS Careline 100 Kg Load Capacity Black Foldable Manual Wheelchair', 4999, 3, 14997),
(18, 3, 1, 'VMS Careline 100 Kg Load Capacity Black Foldable Manual Wheelchair', 4999, 10, 49990),
(21, 5, 4, 'Agarbatti', 20, 1, 20),
(22, 5, 5, 'Diya', 10, 1, 10),
(23, 5, 3, 'Dhana Murti', 1000, 1, 1000),
(24, 5, 1, 'VMS Careline 100 Kg Load Capacity Black Foldable Manual Wheelchair', 4999, 1, 4999),
(25, 5, 2, 'Welltrust Healthcare 190x90x60 cm Mid Steel & ABS Material White & Blue Plain Bed with Side Railing Mattress & Wheel', 13999, 1, 13999),
(26, 4, 2, 'Welltrust Healthcare 190x90x60 cm Mid Steel & ABS Material White & Blue Plain Bed with Side Railing Mattress & Wheel', 13999, 4, 55996),
(27, 4, 1, 'VMS Careline 100 Kg Load Capacity Black Foldable Manual Wheelchair', 4999, 1, 4999),
(28, 6, 1, 'VMS Careline 100 Kg Load Capacity Black Foldable Manual Wheelchair', 4999, 1, 4999),
(29, 6, 2, 'Welltrust Healthcare 190x90x60 cm Mid Steel & ABS Material White & Blue Plain Bed with Side Railing Mattress & Wheel', 13999, 1, 13999),
(30, 6, 3, 'Dhana Murti', 1000, 1, 1000),
(31, 6, 4, 'Agarbatti', 20, 1, 20),
(32, 6, 5, 'Diya', 10, 1, 10),
(33, 6, 6, 'Mala', 10, 1, 10),
(34, 6, 7, 'Coconut Laddu', 0, 1, 0),
(37, 8, 5, 'Diya', 10, 1, 10),
(38, 8, 6, 'Mala', 10, 1, 10),
(41, 7, 4, 'Agarbatti', 20, 1, 20),
(42, 7, 3, 'Dhana Murti', 1000, 1, 1000),
(43, 9, 4, 'Agarbatti', 20, 1, 20),
(44, 9, 7, 'Coconut Laddu', 0, 2, 0);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `cat_id` int(11) DEFAULT NULL,
  `sub_cat_id` int(11) DEFAULT NULL,
  `image` text DEFAULT NULL,
  `multiple_image_json` text DEFAULT NULL,
  `name` text NOT NULL,
  `slug` text NOT NULL,
  `price` text NOT NULL,
  `sku_code` text NOT NULL,
  `description` longblob NOT NULL,
  `status` int(11) NOT NULL,
  `addeddate` datetime NOT NULL,
  `modifieddate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `cat_id`, `sub_cat_id`, `image`, `multiple_image_json`, `name`, `slug`, `price`, `sku_code`, `description`, `status`, `addeddate`, `modifieddate`) VALUES
(1, NULL, NULL, '1767348394.jpg', '[\"1767348532_0.jpg\",\"1767348532_1.jpg\",\"1767348532_2.jpg\",\"1767348550_0.jpg\",\"1767348550_1.jpg\",\"1767348550_2.jpg\",\"1767348550_3.jpg\"]', 'VMS Careline 100 Kg Load Capacity Black Foldable Manual Wheelchair', 'vms-careline-100-kg-load-capacity-black-foldable-manual-wheelchair', '4999', 'Plus VWE-1065', 0x3c703e54686520564d53203130312e36204420782036382e36205720782038362e34204820636d207769746820313030204b67204c6f616420436170616369747920426c61636b20576865656c63686169722053656c65637420506c7573205657452d3130363520697320612072656c6961626c6520616e6420766572736174696c6520776865656c63686169722064657369676e656420746f2070726f76696465206d6f62696c69747920616e6420636f6d666f727420746f20696e646976696475616c732077697468206d6f62696c69747920696d706169726d656e74732e205468697320776865656c6368616972206f666665727320612072616e6765206f6620666561747572657320616e642073706563696669636174696f6e732074686174206d616b65206974207375697461626c6520666f7220766172696f757320757365727320616e6420656e7669726f6e6d656e74732e3c6272202f3e0d0a3c6272202f3e0d0a5468652064696d656e73696f6e73206f662074686520776865656c636861697220617265203130312e36204420782036382e36205720782038362e34204820636d2c20696e6469636174696e67206974732044657074682c20776964746820616e64206865696768742e205468657365206d6561737572656d656e747320656e7375726520746861742074686520776865656c63686169722063616e206163636f6d6d6f64617465207573657273206f6620646966666572656e7420626f647920747970657320636f6d666f727461626c792e2054686520636f6d706163742073697a6520616c736f20616c6c6f777320666f722065617379206d616e65757665726162696c69747920696e207469676874207370616365732c20626f746820696e646f6f727320616e64206f7574646f6f72732e3c6272202f3e0d0a3c6272202f3e0d0a576974682061206c6f6164206361706163697479206f6620313030206b672c20746865205657452d313036352063616e20736166656c7920737570706f727420696e646976696475616c7320776974682076617279696e6720626f6479207765696768747320757020746f2074686174206c696d69742e20546869732066656174757265206d616b6573206974207375697461626c6520666f72206120776964652072616e6765206f662075736572732c20656e737572696e672074686569722073616665747920616e642073746162696c69747920647572696e67207573652e3c6272202f3e0d0a3c6272202f3e0d0a54686520776865656c6368616972206665617475726573206120736c65656b20626c61636b20636f6c6f722c20676976696e672069742061206d6f6465726e20616e64207374796c69736820617070656172616e63652e2054686520626c61636b20636f6c6f7220616c736f2068656c707320746f2068696465206469727420616e6420737461696e732c206d616b696e672069742065617369657220746f206d61696e7461696e2074686520636c65616e6c696e65737320616e642061657374686574696373206f662074686520776865656c63686169722e3c6272202f3e0d0a3c6272202f3e0d0a436f6d666f7274206973207072696f726974697a656420696e20746865205657452d3130363520776865656c63686169722e2049742069732064657369676e6564207769746820612063757368696f6e6564207365617420616e64206261636b726573742c2070726f766964696e67206f7074696d616c20737570706f727420616e6420636f6d666f727420666f7220657874656e64656420706572696f6473206f66207573652e205468652061726d72657374732061726520616c736f2070616464656420746f20656e68616e6365207573657220636f6d666f72742e2054686573652066656174757265732068656c702070726576656e7420646973636f6d666f727420616e6420707265737375726520736f7265732c20616c6c6f77696e6720757365727320746f2073697420636f6d666f727461626c79207468726f7567686f757420746865206461792e3c6272202f3e0d0a3c6272202f3e0d0a546865205657452d313036352069732065717569707065642077697468206c6172676520776865656c7320616e64207374757264792074697265732c20656e61626c696e6720736d6f6f746820616e64206566666f72746c657373206d616e65757665726162696c697479206f76657220766172696f7573207465727261696e732e2054686520776865656c636861697220616c736f20696e636c75646573206572676f6e6f6d69632068616e646c657320666f7220656173792070757368696e6720616e64206d616e6575766572696e672c206d616b696e6720697420636f6e76656e69656e7420666f722063617265676976657273206f7220617474656e64616e74732e3c6272202f3e0d0a3c6272202f3e0d0a4164646974696f6e616c6c792c2074686520776865656c63686169722069732064657369676e6564207769746820736166657479206665617475726573207375636820617320776865656c206c6f636b7320616e6420616e74692d74697070696e67206d656368616e69736d7320746f20656e7375726520757365722073616665747920616e642073746162696c69747920647572696e67207472616e736665727320616e642075736167652e3c6272202f3e0d0a3c6272202f3e0d0a496e2073756d6d6172792c2074686520564d53203130312e36204420782036382e36205720782038362e34204820636d20313030204b67204c6f616420436170616369747920426c61636b20576865656c63686169722053656c65637420506c7573205657452d3130363520697320612072656c6961626c6520616e6420636f6d666f727461626c65206d6f62696c697479206169642e204974732064696d656e73696f6e732c206c6f61642063617061636974792c20636f6d666f72742066656174757265732c20616e64206d616e65757665726162696c697479206d616b652069742061207375697461626c652063686f69636520666f7220696e646976696475616c732077697468206d6f62696c69747920696d706169726d656e74732077686f2072657175697265206120766572736174696c6520616e6420757365722d667269656e646c7920776865656c636861697220666f72206461696c79207573652e3c2f703e0d0a, 1, '2026-01-02 15:35:52', '2026-01-02 15:46:16'),
(2, NULL, NULL, '1767349115.jpg', '[\"1767349115_0.jpg\",\"1767349115_1.jpg\"]', 'Welltrust Healthcare 190x90x60 cm Mid Steel & ABS Material White & Blue Plain Bed with Side Railing Mattress & Wheel', 'welltrust-healthcare-190x90x60-cm-mid-steel-abs-material-white-blue-plain-bed-with-side-railing-mattress-wheel', '13999', 'WSH-1206', 0x3c703e5468652057656c6c7472757374204865616c74686361726520506c61696e2042656420285753482d3132303629206f666665727320612066756e6374696f6e616c20616e642073747572647920736f6c7574696f6e20666f722070617469656e7420636172652c20637261667465642066726f6d206120636f6d62696e6174696f6e206f66206d696420737465656c20616e6420414253206d6174657269616c7320666f7220656e68616e636564206475726162696c6974792e204d6561737572696e672031393078393078363020636d2c2074686973206265642070726f766964657320616d706c6520737061636520666f722070617469656e74732c207768696c652069747320776869746520616e6420626c756520636f6c6f7220736368656d65206769766573206974206120636c65616e20616e64206d6f6465726e20617070656172616e63652e205468652062656420697320657175697070656420776974682073696465207261696c696e67732c20656e737572696e672070617469656e74207361666574792062792070726576656e74696e67206163636964656e74616c2066616c6c73206f72206d6f76656d656e747320647572696e672072657374206f72206d65646963616c2070726f636564757265732e3c2f703e0d0a0d0a3c703e54686973206d6f64656c20636f6d65732077697468206120636f6d666f727461626c65206d6174747265737320616e6420666561747572657320776865656c7320666f722065617379206d6f62696c6974792c20616c6c6f77696e67206361726567697665727320746f20656666696369656e746c79207265706f736974696f6e2074686520626564206173206e65656465642e2049747320737475726479206672616d652c20636f6d62696e656420776974682074686520686967682d7175616c6974792041425320636f6d706f6e656e74732c20656e7375726573206c6f6e672d7465726d2072656c696162696c6974792e20496465616c20666f722075736520696e20686f73706974616c732c266e6273703b3c2f703e0d0a, 1, '2026-01-02 15:48:35', '0000-00-00 00:00:00'),
(3, NULL, NULL, '1769509955.jpg', NULL, 'Dhana Murti', 'dhana-murti', '1000', 'Prasadam', 0x3c703e66616c6b6a666c6b616a64666b6c6a616f6972656f616a726c6b613c2f703e0d0a, 1, '2026-01-27 16:02:35', '2026-01-27 16:04:33'),
(4, NULL, NULL, '1769510050.jpg', NULL, 'Agarbatti', 'agarbatti', '20', 'Prasadam', 0x3c703e616c666a616a656f6972616a2061666a6f6961726f6520616c666c6b6a663c2f703e0d0a, 1, '2026-01-27 16:04:10', '2026-01-27 16:04:28'),
(5, NULL, NULL, '1769510142.jpg', NULL, 'Diya', 'diya', '10', 'Prasadam', 0x3c703e666166663c2f703e0d0a, 1, '2026-01-27 16:05:42', '0000-00-00 00:00:00'),
(6, NULL, NULL, '1769592354.jpg', NULL, 'Mala', 'mala', '10', 'Prasadam', 0x3c703e6c6a666f69616a6c6b64666a206b66616c666b6a64616f206a666c616f646a3c2f703e0d0a, 1, '2026-01-28 14:55:54', '0000-00-00 00:00:00'),
(7, NULL, NULL, '1769592397.jpg', NULL, 'Coconut Laddu', 'coconut-laddu', '', 'Prasadam', 0x3c703e6661646a6c6b666a6f206a66616f6669616f266e6273703b3c2f703e0d0a, 1, '2026-01-28 14:56:37', '2026-01-28 14:58:33'),
(8, 1, 1, '1779781221.jpg', '', 'akjfqlkj', 'akjfqlkj', '99', 'kqjl', 0x3c703e6a716b6c726a6c716a3c2f703e0d0a, 1, '2026-05-26 13:10:21', '2026-05-26 16:10:03');

-- --------------------------------------------------------

--
-- Table structure for table `product_image`
--

CREATE TABLE `product_image` (
  `id` int(11) NOT NULL,
  `p_id` int(11) NOT NULL,
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_image`
--

INSERT INTO `product_image` (`id`, `p_id`, `image`) VALUES
(15, 1, '1767348532_0.jpg'),
(16, 1, '1767348532_1.jpg'),
(17, 1, '1767348532_2.jpg'),
(18, 1, '1767348550_0.jpg'),
(19, 1, '1767348550_1.jpg'),
(20, 1, '1767348550_2.jpg'),
(21, 1, '1767348550_3.jpg'),
(22, 2, '1767349115_0.jpg'),
(23, 2, '1767349115_1.jpg');

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
(4, 'User Account', 'user-account', '{\"main_access\":[\"11\"],\"inner_access\":[[],[],[],[],[],[],[],[],[],[],[],[\"1\",\"2\",\"3\",\"4\",\"5\"]]}', 1, '2024-07-30 13:21:07', '2026-01-03 12:36:32');

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
(1, '1767676677.png', '9856472360', '9586741023', 'email2@gmail.com', 'altemail2@gmail.com', 'your address', 'https://www.facebook.com/', 'https://twitter.com/', 'https://www.instagram.com/', 'https://www.youtube.com/', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d30767295.116023116!2d60.946027684017714!3d19.722272265144735!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30635ff06b92b791%3A0xd78c4fa1854213a6!2sIndia!5e0!3m2!1sen!2sin!4v1713167102172!5m2!1sen!2sin\" width=\"100%\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>');

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
(18, 'sadd', 'asdsaas sd s', 'sadd', '1758709778.webp', '<p>asdsad</p>', 1, '2025-09-24 15:59:38', '2025-09-24 16:00:29'),
(19, 'sad', 'asd', 'sad', '1758709837.webp', '<p>asda</p>', 1, '2025-09-24 16:00:37', '2025-09-24 16:00:39');

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
(299, 'step-addupdate', 'slider', 'slider.php', 'slider', 16),
(302, 'r323', 'slider', 'slider.php', 'slider', 17),
(305, 'sadd', 'slider', 'slider.php', 'slider', 18),
(307, 'sad', 'slider', 'slider.php', 'slider', 19),
(309, 'tewt', 'blog', 'blog.php', 'blog', 1);

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
  `cat_id` int(11) NOT NULL,
  `name` text NOT NULL,
  `slug` text NOT NULL,
  `status` int(11) NOT NULL,
  `addeddate` datetime NOT NULL,
  `modifieddate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sub_categories`
--

INSERT INTO `sub_categories` (`id`, `cat_id`, `name`, `slug`, `status`, `addeddate`, `modifieddate`) VALUES
(1, 1, 'CC1', 'cc1', 1, '2026-05-26 15:57:54', '0000-00-00 00:00:00'),
(2, 1, 'CC2', 'cc2', 1, '2026-05-26 15:58:44', '0000-00-00 00:00:00'),
(3, 2, 'car 1', 'car-1', 1, '2026-05-26 15:58:55', '2026-05-26 15:59:06'),
(4, 2, 'Car 2', 'car-2', 1, '2026-05-26 15:59:02', '0000-00-00 00:00:00'),
(5, 3, 'Sewa 5', 'sewa-5', 1, '2026-05-26 15:59:13', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `id` int(11) NOT NULL,
  `type` int(11) NOT NULL COMMENT '1=admin,2=subadmin',
  `role` int(11) NOT NULL,
  `access` text NOT NULL,
  `selling_mode` text DEFAULT NULL,
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

INSERT INTO `tbl_admin` (`id`, `type`, `role`, `access`, `selling_mode`, `first_name`, `last_name`, `username`, `password`, `email`, `mobile`, `address`, `image`, `gender`, `dob`, `martial`, `age`, `country`, `state`, `hash_key`, `hash_expiry`, `status`, `addeddate`, `modifieddate`) VALUES
(1, 1, 0, '', NULL, 'Azmal', 'Ansari', 'azmal1234', 'azmal123', 'admin@gmail.com', '46546', 'sfsfsdf sdefdsfs fsdf sdf', 'user2.jpg', 'male', '01/01/2022', 'single', '22', 'india', 'elhi', NULL, NULL, 1, NULL, NULL),
(2, 1, 0, '', NULL, 'Admin', 'Admin', 'admin@gmail.com', 'admin', 'admin123@gmail.com', '9582285215', 'delhi', '1724412456.png', 'male', '01/01/2022', 'single', '22', 'india', 'delhi', '6ef5a86a72d307d9d2df14306a26534f64236ca1887fb9ba0cff55e6e0a26390', '2024-08-30 13:34:00', 1, NULL, NULL),
(3, 1, 0, '', NULL, 'Wolverine', 'logen', 'azmal', 'azmal', 'wolverine@gmail.com', '897989', 'sfsfsdf sdefdsfs fsdf sdf', 'user3.jpg', 'male', '01/01/2022', 'single', '22', 'india', 'delhi', NULL, NULL, 1, NULL, NULL),
(4, 2, 4, '{\"main_access\":[\"11\"],\"inner_access\":[[],[],[],[],[],[],[],[],[],[],[],[\"1\",\"2\",\"3\",\"4\",\"5\"]]}', 'Store', 'Rahul', 'Spiderman', 'BSF-001', 'azmal123', 'Rahuljain@gmail.com', '01234645654', '132 Componey , Address India', '1724412456.png', '', '', '', '', '', '', NULL, NULL, 1, '2024-08-24 17:23:45', '2026-05-26 18:22:28'),
(5, 2, 4, '{\"main_access\":[\"11\"],\"inner_access\":[[],[],[],[],[],[],[],[],[],[],[],[\"1\",\"2\",\"3\",\"4\",\"5\"]]}', 'Stall', 'Ajay', 'Kumar', 'BSF-002', '12345678', 'ajay@gmail.com', '9289880082', 'xyz street. yyz bay area', '', '', '', '', '', '', '', NULL, NULL, 1, '2026-01-27 15:59:58', '2026-05-26 18:22:25'),
(6, 2, 4, '{\"main_access\":[\"11\"],\"inner_access\":[[],[],[],[],[],[],[],[],[],[],[],[\"1\",\"2\",\"3\",\"4\",\"5\"]]}', 'Rath', 'Rohan', 'Sharma', 'BSF-003', '12345678', 'ljlkao@gmail.com', '8272920083', 'alkfjdal', '', '', '', '', '', '', '', NULL, NULL, 1, '2026-01-28 15:01:55', '2026-05-26 18:21:36');

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
(1, '1731493179.png', 'Spiderman', 'Client', '<p>Hello </p>', 1, '2024-08-24 18:07:24', '2024-11-13 15:49:39'),
(2, '1750317758.png', 'azmal', 'Client', '<p>ddd</p>', 1, '2025-06-19 12:52:38', '0000-00-00 00:00:00'),
(3, '1750317992.png', 'azmal df', 'Client df', '<p>ddd sd</p>', 1, '2025-06-19 12:52:52', '2025-06-19 12:56:32');

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
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_items`
--
ALTER TABLE `order_items`
  ADD PRIMARY KEY (`id`),
  ADD KEY `order_id` (`order_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_image`
--
ALTER TABLE `product_image`
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=852;

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- AUTO_INCREMENT for table `meta_tags`
--
ALTER TABLE `meta_tags`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `multipleimage`
--
ALTER TABLE `multipleimage`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `order_items`
--
ALTER TABLE `order_items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `product_image`
--
ALTER TABLE `product_image`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

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
-- AUTO_INCREMENT for table `site_setting`
--
ALTER TABLE `site_setting`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `slugs`
--
ALTER TABLE `slugs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=310;

--
-- AUTO_INCREMENT for table `state`
--
ALTER TABLE `state`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `sub_categories`
--
ALTER TABLE `sub_categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `testimonials`
--
ALTER TABLE `testimonials`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
