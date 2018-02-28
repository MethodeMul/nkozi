-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 28, 2018 at 10:47 AM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `nkozi`
--

-- --------------------------------------------------------

--
-- Table structure for table `concept_dic`
--

CREATE TABLE `concept_dic` (
  `id` int(11) UNSIGNED NOT NULL,
  `type` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `code` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(25) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `concept_dic`
--

INSERT INTO `concept_dic` (`id`, `type`, `code`, `name`) VALUES
(1, 'symptom', '1', 'headache'),
(2, 'symptom', '2', 'fever'),
(3, 'symptom', '3', 'nausea/vomiting'),
(4, 'symptom', '4', 'diarrhea'),
(5, 'symptom', '5', 'weakness'),
(6, 'symptom', '6', 'hiccup'),
(7, 'symptom', '7', 'body pain'),
(8, 'symptom', '8', 'abdominal pain'),
(9, 'symptom', '9', 'respiratory disorder'),
(10, 'symptom', '10', 'dehydratation'),
(11, 'symptom', '11', 'red eye'),
(12, 'symptom', '12', 'hemorragic symptoms'),
(13, 'general', '1', 'conscious'),
(14, 'general', '2', 'confused/agitated'),
(15, 'general', '3', 'unconscious'),
(16, 'general', '4', 'deceased'),
(17, 'status', '1', 'walking'),
(18, 'status', '2', 'bedridden'),
(19, 'status', '3', 'terminal'),
(20, 'pain', '1', '-'),
(21, 'pain', '2', '+ PCM'),
(22, 'pain', '3', '++ tramadol'),
(23, 'pain', '4', '+++ morphine'),
(24, 'intake', '1', 'normal food'),
(25, 'intake', '2', 'normal food with support'),
(26, 'intake', '3', 'liquid only'),
(27, 'intake', '4', 'liquid only with support'),
(28, 'intake', '5', 'IV treatment'),
(29, 'drug', '1', 'prometazine'),
(30, 'drug', '2', 'metoclopramide'),
(31, 'drug', '3', 'loperamide'),
(32, 'drug', '4', 'vit A, B, C'),
(33, 'drug', '5', 'chlorpromazine'),
(34, 'outcome', '1', 'cured'),
(35, 'outcome', '2', 'escaped'),
(36, 'outcome', '3', 'dead'),
(37, 'test', '1', 'negative'),
(38, 'test', '2', 'positive'),
(39, 'test', '3', 'inconclusive'),
(40, 'tent', '8', 'C1'),
(41, 'tent', '2', 'C2'),
(42, 'tent', '3', 'C3'),
(43, 'tent', '4', 'C4'),
(50, 'intake', '6', 'none'),
(51, 'intake', '10', 'with support'),
(52, 'tent', '11', 'C9');

-- --------------------------------------------------------

--
-- Table structure for table `loginuser`
--

CREATE TABLE `loginuser` (
  `id` int(11) NOT NULL,
  `username` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `creation_date` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `loginuser`
--

INSERT INTO `loginuser` (`id`, `username`, `password`, `creation_date`) VALUES
(12, 'user', 'user', '2018-01-08 01:35:00');

-- --------------------------------------------------------

--
-- Table structure for table `record`
--

CREATE TABLE `record` (
  `id` int(11) NOT NULL,
  `value` int(11) DEFAULT NULL,
  `what` int(11) NOT NULL,
  `who` int(11) NOT NULL,
  `when` varchar(55) COLLATE utf8_unicode_ci NOT NULL,
  `where` varchar(55) COLLATE utf8_unicode_ci NOT NULL,
  `upd_date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `record`
--

INSERT INTO `record` (`id`, `value`, `what`, `who`, `when`, `where`, `upd_date`) VALUES
(223, 1, 2, 1, '2018wk9', 'OPDNkozi', '2018-01-26 16:41:13'),
(224, 1, 2, 2, '2018wk9', 'OPDNkozi', '2018-01-26 16:41:13'),
(225, 1, 1, 1, '2018wk9', 'OPDNkozi', '2018-01-26 16:41:13'),
(226, 1, 1, 2, '2018wk9', 'OPDNkozi', '2018-01-26 16:41:13'),
(227, 1, 3, 1, '2018wk9', 'OPDNkozi', '2018-01-26 16:41:13'),
(228, 1, 3, 2, '2018wk9', 'OPDNkozi', '2018-01-26 16:41:13'),
(229, 1, 4, 1, '2018wk9', 'OPDNkozi', '2018-01-26 16:41:13'),
(230, 1, 4, 2, '2018wk9', 'OPDNkozi', '2018-01-26 16:41:13'),
(231, 1, 6, 3, '2018wk9', 'OPDNkozi', '2018-01-26 16:41:13'),
(232, 1, 5, 3, '2018wk9', 'OPDNkozi', '2018-01-26 16:41:13'),
(233, 23, 2, 1, '2018wk1', 'OPDNkozi', '2018-02-06 21:03:21'),
(234, 12, 2, 2, '2018wk1', 'OPDNkozi', '2018-02-06 21:03:22'),
(235, 12, 1, 1, '2018wk1', 'OPDNkozi', '2018-02-06 21:03:22'),
(236, 2, 1, 2, '2018wk1', 'OPDNkozi', '2018-02-06 21:03:22'),
(237, 1, 3, 1, '2018wk1', 'OPDNkozi', '2018-02-06 21:03:22'),
(238, 2, 3, 2, '2018wk1', 'OPDNkozi', '2018-02-06 21:03:22'),
(239, 2, 4, 1, '2018wk1', 'OPDNkozi', '2018-02-06 21:03:22'),
(240, 2, 4, 2, '2018wk1', 'OPDNkozi', '2018-02-06 21:03:23'),
(241, 2, 6, 3, '2018wk1', 'OPDNkozi', '2018-01-26 16:42:05'),
(242, 2, 5, 3, '2018wk1', 'OPDNkozi', '2018-01-26 16:42:05'),
(243, 12, 2, 1, '2018wk2', 'OPDNkozi', '2018-01-26 18:06:57'),
(244, 32, 2, 2, '2018wk2', 'OPDNkozi', '2018-01-26 18:06:57'),
(245, 84, 1, 1, '2018wk2', 'OPDNkozi', '2018-01-26 18:06:57'),
(246, 84, 1, 2, '2018wk2', 'OPDNkozi', '2018-01-26 18:06:57'),
(247, 89, 3, 1, '2018wk2', 'OPDNkozi', '2018-01-26 18:06:57'),
(248, 32, 3, 2, '2018wk2', 'OPDNkozi', '2018-01-26 18:06:58'),
(249, 56, 4, 1, '2018wk2', 'OPDNkozi', '2018-01-26 18:06:58'),
(250, 45, 4, 2, '2018wk2', 'OPDNkozi', '2018-01-26 18:06:58'),
(251, 78, 6, 3, '2018wk2', 'OPDNkozi', '2018-01-26 18:06:58'),
(252, 65, 5, 3, '2018wk2', 'OPDNkozi', '2018-01-26 18:06:58'),
(253, 3, 2, 1, '2018wk3', 'OPDNkozi', '2018-01-26 18:57:07'),
(254, 3, 2, 2, '2018wk3', 'OPDNkozi', '2018-01-26 18:57:07'),
(255, 3, 1, 1, '2018wk3', 'OPDNkozi', '2018-01-26 18:57:07'),
(256, 3, 1, 2, '2018wk3', 'OPDNkozi', '2018-01-26 18:57:07'),
(257, 3, 3, 1, '2018wk3', 'OPDNkozi', '2018-01-26 18:57:07'),
(258, 3, 3, 2, '2018wk3', 'OPDNkozi', '2018-01-26 18:57:07'),
(259, 3, 4, 1, '2018wk3', 'OPDNkozi', '2018-01-26 18:57:07'),
(260, 3, 4, 2, '2018wk3', 'OPDNkozi', '2018-01-26 18:57:07'),
(261, 3, 11, 1, '2018wk3', 'OPDNkozi', '2018-01-26 18:57:07'),
(262, 3, 11, 2, '2018wk3', 'OPDNkozi', '2018-01-26 18:57:07'),
(263, 3, 10, 1, '2018wk3', 'OPDNkozi', '2018-01-26 18:57:08'),
(264, 3, 10, 2, '2018wk3', 'OPDNkozi', '2018-01-26 18:57:08'),
(265, 3, 6, 3, '2018wk3', 'OPDNkozi', '2018-01-26 18:57:08'),
(266, 3, 5, 3, '2018wk3', 'OPDNkozi', '2018-01-26 18:57:08'),
(267, 3, 7, 1, '2018wk3', 'OPDNkozi', '2018-01-26 18:57:08'),
(268, 3, 9, 1, '2018wk3', 'OPDNkozi', '2018-01-26 18:57:08'),
(269, 3, 8, 1, '2018wk3', 'OPDNkozi', '2018-01-26 18:57:08'),
(270, 4, 6, 3, '2018wk4', 'OPDNkozi', '2018-01-29 14:01:40'),
(271, 5, 5, 3, '2018wk4', 'OPDNkozi', '2018-01-29 14:01:40'),
(272, 4, 7, 1, '2018wk4', 'OPDNkozi', '2018-01-29 14:01:40'),
(273, 5, 9, 1, '2018wk4', 'OPDNkozi', '2018-01-29 14:01:40'),
(274, 4, 8, 1, '2018wk4', 'OPDNkozi', '2018-01-29 14:01:40'),
(275, 14, 2, 1, '2018wk4', 'OPDNkozi', '2018-01-29 14:01:39'),
(276, 1, 2, 2, '2018wk4', 'OPDNkozi', '2018-01-29 14:01:39'),
(277, 14, 1, 1, '2018wk4', 'OPDNkozi', '2018-01-29 14:01:39'),
(278, 14, 1, 2, '2018wk4', 'OPDNkozi', '2018-01-29 14:01:40'),
(279, 14, 3, 1, '2018wk4', 'OPDNkozi', '2018-01-29 14:01:40'),
(280, 14, 3, 2, '2018wk4', 'OPDNkozi', '2018-01-29 14:01:40'),
(281, 14, 4, 1, '2018wk4', 'OPDNkozi', '2018-01-29 14:01:40'),
(282, 14, 4, 2, '2018wk4', 'OPDNkozi', '2018-01-29 14:01:40'),
(283, 141, 11, 1, '2018wk4', 'OPDNkozi', '2018-01-29 14:01:40'),
(284, 14, 11, 2, '2018wk4', 'OPDNkozi', '2018-01-29 14:01:40'),
(285, 1, 10, 1, '2018wk4', 'OPDNkozi', '2018-01-29 14:01:40'),
(286, 1, 10, 2, '2018wk4', 'OPDNkozi', '2018-01-29 14:01:40'),
(287, 1, 12, 1, '2018wk4', 'OPDNkozi', '2018-01-29 14:01:40'),
(288, 1, 13, 1, '2018wk4', 'OPDNkozi', '2018-01-29 14:01:40'),
(289, 13, 2, 1, '2018wk4', 'MaternityNkozi', '2018-01-29 15:49:24'),
(290, 1, 2, 2, '2018wk4', 'MaternityNkozi', '2018-01-29 15:49:24'),
(291, 1, 1, 1, '2018wk4', 'MaternityNkozi', '2018-01-29 15:49:24'),
(292, 1, 1, 2, '2018wk4', 'MaternityNkozi', '2018-01-29 15:49:24'),
(293, 1, 3, 1, '2018wk4', 'MaternityNkozi', '2018-01-29 15:49:24'),
(294, 1, 3, 2, '2018wk4', 'MaternityNkozi', '2018-01-29 15:49:24'),
(295, 13, 4, 1, '2018wk4', 'MaternityNkozi', '2018-01-29 15:49:24'),
(296, 31, 4, 2, '2018wk4', 'MaternityNkozi', '2018-01-29 15:49:24'),
(297, 32, 11, 1, '2018wk4', 'MaternityNkozi', '2018-01-29 15:49:24'),
(298, 12, 11, 2, '2018wk4', 'MaternityNkozi', '2018-01-29 14:03:56'),
(299, 2, 10, 1, '2018wk4', 'MaternityNkozi', '2018-01-29 15:49:24'),
(300, 23, 10, 2, '2018wk4', 'MaternityNkozi', '2018-01-29 14:03:56'),
(301, 12, 12, 1, '2018wk4', 'MaternityNkozi', '2018-01-29 15:49:24'),
(302, 42, 13, 1, '2018wk4', 'MaternityNkozi', '2018-01-29 15:49:24'),
(303, 23, 6, 3, '2018wk4', 'MaternityNkozi', '2018-01-29 14:03:56'),
(304, 67, 5, 3, '2018wk4', 'MaternityNkozi', '2018-01-29 14:03:56'),
(305, 1, 7, 1, '2018wk4', 'MaternityNkozi', '2018-01-29 15:49:24'),
(306, 12, 9, 1, '2018wk4', 'MaternityNkozi', '2018-01-29 15:49:24'),
(307, 13, 8, 1, '2018wk4', 'MaternityNkozi', '2018-01-29 15:49:24'),
(308, 1, 2, 1, '2018wk6', 'OPDNkozi', '2018-01-31 05:36:05'),
(309, 1, 2, 2, '2018wk6', 'OPDNkozi', '2018-01-31 05:36:06'),
(310, 1, 1, 1, '2018wk6', 'OPDNkozi', '2018-01-31 05:36:06'),
(311, 1, 1, 2, '2018wk6', 'OPDNkozi', '2018-01-31 05:36:06'),
(312, 6, 3, 1, '2018wk6', 'OPDNkozi', '2018-01-31 05:36:06'),
(313, 7, 3, 2, '2018wk6', 'OPDNkozi', '2018-01-31 05:36:06'),
(314, 8, 4, 2, '2018wk6', 'OPDNkozi', '2018-01-31 05:36:06'),
(315, 8, 6, 1, '2018wk6', 'OPDNkozi', '2018-01-31 05:36:06'),
(316, 8, 6, 2, '2018wk6', 'OPDNkozi', '2018-01-31 05:36:06'),
(317, 8, 5, 1, '2018wk6', 'OPDNkozi', '2018-01-31 05:36:06'),
(318, 8, 5, 2, '2018wk6', 'OPDNkozi', '2018-01-31 05:36:06'),
(319, 8, 7, 1, '2018wk6', 'OPDNkozi', '2018-01-31 05:36:06'),
(320, 8, 8, 1, '2018wk6', 'OPDNkozi', '2018-01-31 05:36:06'),
(321, 8, 9, 1, '2018wk6', 'OPDNkozi', '2018-01-31 05:36:06'),
(322, 8, 10, 1, '2018wk6', 'OPDNkozi', '2018-01-31 05:36:06'),
(323, 8, 11, 1, '2018wk6', 'OPDNkozi', '2018-01-31 05:36:06'),
(324, 8, 13, 1, '2018wk6', 'OPDNkozi', '2018-01-31 05:36:07'),
(325, 8, 12, 1, '2018wk6', 'OPDNkozi', '2018-01-31 05:36:07'),
(326, 2, 4, 1, '2018wk6', 'OPDNkozi', '2018-01-31 05:36:06'),
(327, 2, 6, 1, '2018wk1', 'OPDNkozi', '2018-02-06 21:03:23'),
(328, 3, 6, 2, '2018wk1', 'OPDNkozi', '2018-02-06 21:03:23'),
(329, 3, 5, 1, '2018wk1', 'OPDNkozi', '2018-02-06 21:03:23'),
(330, 5, 5, 2, '2018wk1', 'OPDNkozi', '2018-02-06 21:03:24'),
(331, 34, 7, 1, '2018wk1', 'OPDNkozi', '2018-02-06 21:03:24'),
(332, 46, 8, 1, '2018wk1', 'OPDNkozi', '2018-02-06 21:03:24'),
(333, 1, 2, 1, '2018wk5', 'OPDNkozi', '2018-02-05 10:27:41'),
(334, 2, 2, 2, '2018wk5', 'OPDNkozi', '2018-02-05 10:27:41'),
(335, 24, 1, 1, '2018wk5', 'OPDNkozi', '2018-02-05 10:27:41'),
(336, 787, 1, 2, '2018wk5', 'OPDNkozi', '2018-02-05 10:27:41'),
(337, 45, 3, 1, '2018wk5', 'OPDNkozi', '2018-02-05 10:27:41'),
(338, 5, 3, 2, '2018wk5', 'OPDNkozi', '2018-02-05 10:27:41'),
(339, 8, 4, 1, '2018wk5', 'OPDNkozi', '2018-02-05 10:27:41'),
(340, 8, 4, 2, '2018wk5', 'OPDNkozi', '2018-02-05 10:27:41'),
(341, 7, 6, 1, '2018wk5', 'OPDNkozi', '2018-02-05 10:27:41'),
(342, 7, 6, 2, '2018wk5', 'OPDNkozi', '2018-02-05 10:27:41'),
(343, 7, 5, 1, '2018wk5', 'OPDNkozi', '2018-02-05 10:27:41'),
(344, 7, 5, 2, '2018wk5', 'OPDNkozi', '2018-02-05 10:27:41'),
(345, 5, 7, 1, '2018wk5', 'OPDNkozi', '2018-02-05 10:27:42'),
(346, 6, 8, 1, '2018wk5', 'OPDNkozi', '2018-02-05 10:27:42'),
(347, 45, 9, 1, '2018wk5', 'OPDNkozi', '2018-02-05 10:27:42'),
(348, 44, 10, 1, '2018wk5', 'OPDNkozi', '2018-02-05 10:27:42'),
(349, 4, 13, 1, '2018wk5', 'OPDNkozi', '2018-02-05 10:27:42'),
(350, NULL, 11, 1, '2018wk5', 'OPDNkozi', '2018-02-05 10:27:42'),
(351, NULL, 12, 1, '2018wk5', 'OPDNkozi', '2018-02-05 10:27:42'),
(352, 1, 9, 1, '2018wk1', 'OPDNkozi', '2018-02-06 21:03:25'),
(353, 1, 10, 1, '2018wk1', 'OPDNkozi', '2018-02-06 21:03:25'),
(354, 1, 11, 1, '2018wk1', 'OPDNkozi', '2018-02-06 21:03:25'),
(355, 1, 13, 1, '2018wk1', 'OPDNkozi', '2018-02-06 21:03:26'),
(356, 1, 12, 1, '2018wk1', 'OPDNkozi', '2018-02-06 21:03:26');

-- --------------------------------------------------------

--
-- Table structure for table `what`
--

CREATE TABLE `what` (
  `id` int(11) NOT NULL,
  `name` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `type` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `code` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `upd_time` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `what`
--

INSERT INTO `what` (`id`, `name`, `type`, `code`, `upd_time`) VALUES
(1, 'Malaria', 'dis', NULL, '2018-01-01 15:37:34'),
(2, 'Cholera', 'dis', NULL, '2018-01-01 15:37:34'),
(3, 'Measles', 'dis', NULL, '2018-01-01 15:37:34'),
(4, 'Trauma', 'dis', NULL, '2018-01-01 15:37:34'),
(5, 'Malaria Test', 'test', NULL, '2018-01-01 15:37:34'),
(6, 'Malaria Positive', 'result', NULL, '2018-01-01 15:37:34');

-- --------------------------------------------------------

--
-- Table structure for table `who`
--

CREATE TABLE `who` (
  `id` int(11) NOT NULL,
  `name` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `type` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `code` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `upd_time` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `who`
--

INSERT INTO `who` (`id`, `name`, `type`, `code`, `upd_time`) VALUES
(1, '<5y', 'age', NULL, '2017-07-01 15:38:11'),
(2, '>=5y', 'age', NULL, '2017-07-01 15:38:11'),
(3, 'undefined', 'age', NULL, '2017-07-01 17:38:11');

-- --------------------------------------------------------

--
-- Table structure for table `wwhere`
--

CREATE TABLE `wwhere` (
  `id` int(11) NOT NULL,
  `name` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `type` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `code` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `update_tine` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `wwhere`
--

INSERT INTO `wwhere` (`id`, `name`, `type`, `code`, `update_tine`) VALUES
(1, 'OPD Nkozi', 'srv', '', '2018-01-11 12:15:04'),
(2, 'IPD Nkozi', 'srv', '', '2018-01-29 16:31:00'),
(3, 'Maternity Nkozi', 'srv', '', '2018-01-29 16:31:05'),
(4, 'ED Nkozi', 'srv', '', '2018-01-29 16:31:05');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `loginuser`
--
ALTER TABLE `loginuser`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `record`
--
ALTER TABLE `record`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `what`
--
ALTER TABLE `what`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `who`
--
ALTER TABLE `who`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `wwhere`
--
ALTER TABLE `wwhere`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `loginuser`
--
ALTER TABLE `loginuser`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `record`
--
ALTER TABLE `record`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=357;
--
-- AUTO_INCREMENT for table `what`
--
ALTER TABLE `what`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `who`
--
ALTER TABLE `who`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `wwhere`
--
ALTER TABLE `wwhere`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
