-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 31, 2018 at 09:36 AM
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
-- Table structure for table `age`
--

CREATE TABLE `age` (
  `id` int(11) NOT NULL,
  `name` varchar(45) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `code` varchar(45) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `upd_time` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `age`
--

INSERT INTO `age` (`id`, `name`, `code`, `upd_time`) VALUES
(1, '0-28 days', '0-28d', '2018-03-23 11:10:00'),
(2, '29 days - 4 years', '29d-4y', '2018-03-23 11:10:00'),
(3, '5-59 years', '5-59y', '2018-03-23 11:16:09'),
(4, '60 years & above', '>=60y', '2018-03-23 11:16:06'),
(5, 'Under five years', '<5y', '2018-03-23 10:26:00'),
(6, 'Five years and above', '>=5y', '2018-03-23 11:17:06'),
(7, '10-19 years', '10-19 y', '2018-03-23 11:17:09'),
(8, '20-24 years', '20-24y', '2018-03-23 11:17:03'),
(9, '>=25 years', '>=25 y', '2018-03-23 11:17:01'),
(10, '9 years', '9y', '2018-03-23 11:17:05'),
(11, '10 years', '10y', '2018-03-23 11:17:08'),
(12, '11 years', '11y', '2018-03-23 11:19:01'),
(13, '12 years', '12y', '2018-03-23 11:20:01'),
(14, '13 years', '13y', '2018-03-23 11:20:01'),
(15, '14 years', '14y', '2018-03-23 11:20:01'),
(16, '9-14 years', '9-14y', '2018-03-23 11:20:01'),
(17, '15+ years', '>=15y', '2018-03-23 11:20:01'),
(18, 'Under 1', '<1y', '2018-03-23 11:20:01'),
(19, '1-4 years', '1-4y', '2018-03-23 11:20:01');

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
-- Table structure for table `death`
--

CREATE TABLE `death` (
  `id` int(11) NOT NULL,
  `name` varchar(45) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `code` varchar(45) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `upd_time` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
(12, 'user', '12dea96fec20593566ab75692c9949596833adc9', '2018-01-12 18:35:00');

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
(216, 2, 2, 1, '2018wk1', '1', '2018-02-28 14:13:56'),
(217, 2, 2, 2, '2018wk1', '1', '2018-02-28 14:13:56'),
(218, 45, 1, 1, '2018wk1', '1', '2018-02-28 14:13:56'),
(219, 21, 3, 1, '2018wk1', '1', '2018-02-28 14:13:56'),
(220, 21, 3, 2, '2018wk1', '1', '2018-02-28 14:13:56'),
(221, 21, 6, 3, '2018wk1', '1', '2018-01-11 03:55:21'),
(222, 21, 5, 3, '2018wk1', '1', '2018-01-11 03:55:22'),
(223, 11, 2, 1, '2018wk2', '1', '2018-01-12 03:40:36'),
(224, 11, 2, 2, '2018wk2', '1', '2018-01-12 03:40:37'),
(225, 1, 1, 1, '2018wk2', '1', '2018-01-12 03:40:37'),
(226, 1, 1, 2, '2018wk2', '1', '2018-01-12 03:40:37'),
(227, 1, 3, 1, '2018wk2', '1', '2018-01-12 03:40:37'),
(228, 1, 3, 2, '2018wk2', '1', '2018-01-12 03:40:38'),
(229, 1, 4, 1, '2018wk2', '1', '2018-01-12 03:40:38'),
(230, 1, 4, 2, '2018wk2', '1', '2018-01-12 03:40:38'),
(231, 1, 6, 3, '2018wk2', '1', '2018-01-12 03:40:38'),
(232, 1, 5, 3, '2018wk2', '1', '2018-01-12 03:40:38'),
(234, 2, 2, 2, '2018wk2', '1', '2018-01-12 08:35:03'),
(235, 65, 2, 1, '2018wk3', '1', '2018-03-03 23:13:42'),
(236, 615, 2, 2, '2018wk3', '1', '2018-03-03 23:13:42'),
(237, 61, 1, 1, '2018wk3', '1', '2018-03-03 23:13:42'),
(238, 212, 3, 1, '2018wk3', '1', '2018-03-03 23:13:42'),
(239, 65, 2, 1, '2018wk3', '1', '2018-01-12 09:37:00'),
(240, 615, 2, 2, '2018wk2', '1', '2018-01-12 09:37:00'),
(241, 61, 1, 1, '2018wk2', '1', '2018-01-12 09:37:00'),
(242, 212, 3, 1, '2018wk2', '1', '2018-01-12 09:37:00'),
(243, 14, 2, 1, '2018wk3', '1', '2018-01-12 10:00:59'),
(244, 14, 4, 2, '2018wk4', '1', '2018-01-12 10:01:00'),
(245, 12, 1, 1, '2018wk4', '1', '2018-01-12 10:00:59'),
(246, 1, 2, 1, '2018wk4', '1', '2018-01-12 13:09:28'),
(247, 1, 2, 2, '2018wk4', '1', '2018-01-12 13:09:28'),
(248, 1, 4, 1, '2018wk4', '1', '2018-01-12 13:09:29'),
(249, 12, 2, 1, '2018wk4', '1', '2018-01-12 16:13:05'),
(250, 21, 2, 2, '2018wk4', '1', '2018-01-12 16:13:05'),
(251, 656, 1, 1, '2018wk4', '1', '2018-01-12 16:13:05'),
(252, 8, 1, 2, '2018wk4', '1', '2018-01-12 16:13:05'),
(253, 8, 3, 1, '2018wk4', '1', '2018-01-12 16:13:05'),
(254, 8, 3, 2, '2018wk4', '1', '2018-01-12 16:13:05'),
(255, 8, 4, 1, '2018wk4', '1', '2018-01-12 16:13:05'),
(256, 8, 4, 2, '2018wk4', '1', '2018-01-12 16:13:05'),
(257, 32, 6, 3, '2018wk4', '1', '2018-01-12 16:13:05'),
(258, 34, 5, 3, '2018wk4', '1', '2018-01-12 16:13:06'),
(259, 1, 2, 1, '2018wk2', '1', '2018-01-12 16:16:47'),
(260, 1, 2, 2, '2018wk2', '1', '2018-01-12 16:16:47'),
(261, 1, 1, 1, '2018wk2', '1', '2018-01-12 16:16:47'),
(262, 1, 1, 2, '2018wk2', '1', '2018-01-12 16:16:47'),
(263, 12, 3, 1, '2018wk2', '1', '2018-01-12 16:16:47'),
(264, 224, 3, 2, '2', '1', '2018-01-12 16:16:48'),
(265, 32, 4, 1, '2', '1', '2018-01-12 16:16:48'),
(266, 12, 4, 2, '2', '1', '2018-01-12 16:16:48'),
(269, 1, 2, 1, '2', '1', '2018-01-12 16:32:48'),
(270, 1, 6, 3, '2', '1', '2018-01-12 16:32:48'),
(271, 1, 2, 1, '2', '1', '2018-01-12 18:15:36'),
(272, 2, 2, 2, '2', '1', '2018-01-12 18:15:36'),
(273, 2, 1, 1, '2', '1', '2018-01-12 18:15:36'),
(274, 4, 1, 2, '2', '1', '2018-01-12 18:15:36'),
(275, 4, 3, 1, '2', '1', '2018-01-12 18:15:36'),
(276, 4, 3, 2, '2', '1', '2018-01-12 18:15:36'),
(277, 4, 4, 1, '2', '1', '2018-01-12 18:15:36'),
(278, 4, 4, 2, '2', '1', '2018-01-12 18:15:36'),
(279, 4, 6, 3, '2', '1', '2018-01-12 18:15:36'),
(280, 4, 5, 3, '2', '1', '2018-01-12 18:15:36'),
(281, 111, 2, 1, '2', '1', '2018-02-28 12:00:10'),
(282, 22, 2, 1, '2', '1', '2018-02-28 13:58:52'),
(283, 2, 2, 2, '2', '1', '2018-02-28 13:58:52'),
(284, 45, 1, 1, '', '', '2018-02-28 13:58:52'),
(285, 21, 3, 1, '', '', '2018-02-28 13:58:52'),
(286, 21, 3, 2, '', '', '2018-02-28 13:58:52'),
(287, 22, 2, 1, '2018wk1', '1', '2018-02-28 14:00:04'),
(288, 2, 2, 2, '2018wk1', '1', '2018-02-28 14:00:04'),
(289, 45, 1, 1, '2018wk1', '1', '2018-02-28 14:00:04'),
(290, 21, 3, 1, '2018wk1', '1', '2018-02-28 14:00:04'),
(291, 21, 3, 2, '2018wk1', '1', '2018-02-28 14:00:04'),
(292, 2, 2, 1, '2018wk1', '1', '2018-02-28 14:00:24'),
(293, 2, 2, 2, '2018wk1', '1', '2018-02-28 14:00:24'),
(294, 45, 1, 1, '2018wk1', '1', '2018-02-28 14:00:24'),
(295, 21, 3, 1, '2018wk1', '1', '2018-02-28 14:00:24'),
(296, 21, 3, 2, '2018wk1', '1', '2018-02-28 14:00:24'),
(297, 1, 2, 1, '2018wk1', '1', '2018-02-28 14:01:04'),
(298, 2, 2, 2, '2018wk1', '1', '2018-02-28 14:01:04'),
(299, 45, 1, 1, '2018wk1', '1', '2018-02-28 14:01:04'),
(300, 21, 3, 1, '2018wk1', '1', '2018-02-28 14:01:04'),
(301, 21, 3, 2, '2018wk1', '1', '2018-02-28 14:01:04'),
(302, 2, 2, 1, '2018wk1', '1', '2018-02-28 14:01:59'),
(303, 2, 2, 2, '2018wk1', '1', '2018-02-28 14:01:59'),
(304, 45, 1, 1, '2018wk1', '1', '2018-02-28 14:01:59'),
(305, 21, 3, 1, '2018wk1', '1', '2018-02-28 14:01:59'),
(306, 21, 3, 2, '2018wk1', '1', '2018-02-28 14:01:59'),
(307, 1, 4, 2, '2018wk1', '1', '2018-02-28 14:05:09'),
(308, 111, 1, 2, '', '1', '2018-02-28 14:10:03'),
(309, 111, 1, 2, '', '1', '2018-02-28 14:11:02'),
(310, 222, 1, 2, '', '1', '2018-02-28 14:11:25'),
(311, 77, 1, 2, '', '1', '2018-02-28 14:12:31'),
(312, 77, 1, 2, '', '1', '2018-02-28 14:13:05'),
(313, 77, 1, 2, '', '1', '2018-02-28 14:13:25'),
(314, 77, 1, 2, '1', '1', '2018-02-28 14:13:56'),
(315, 1, 4, 1, '3', '1', '2018-03-03 23:13:42'),
(316, 1, 4, 1, '3', '1', '2018-03-03 23:13:42'),
(317, 1, 2, 1, '3', '3', '2018-03-03 23:16:26'),
(318, 23, 3, 1, '2018wk3', '3', '2018-03-03 23:16:26');

-- --------------------------------------------------------

--
-- Table structure for table `sex`
--

CREATE TABLE `sex` (
  `id` int(11) NOT NULL,
  `name` varchar(45) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `code` varchar(45) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `upd_time` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sex`
--

INSERT INTO `sex` (`id`, `name`, `code`, `upd_time`) VALUES
(1, 'Male', 'M', '2018-03-23 00:00:00'),
(2, 'Female', 'F', '2018-03-23 06:30:00');

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
(6, 'Malaria Positive', 'result', NULL, '2018-01-01 15:37:34'),
(7, 'CD4 tests', 'test', NULL, '2018-03-30 14:37:34'),
(8, 'Viral Load Tests', 'test', NULL, '2018-03-30 14:37:34');

-- --------------------------------------------------------

--
-- Table structure for table `when`
--

CREATE TABLE `when` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `code` varchar(25) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `type` varchar(5) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `value` bigint(14) DEFAULT NULL,
  `month` varchar(8) NOT NULL,
  `year` varchar(4) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `start` datetime DEFAULT NULL,
  `end` datetime DEFAULT NULL,
  `nbDays` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `when`
--

INSERT INTO `when` (`id`, `name`, `code`, `type`, `value`, `month`, `year`, `start`, `end`, `nbDays`) VALUES
(1, '2018JanuaryWk1', NULL, 'w', 1, 'January', '2018', '2017-12-31 00:00:00', '2018-01-06 00:00:00', 7),
(2, '2018JanuaryWk2', NULL, 'w', 2, 'January', '2018', '2018-01-07 00:00:00', '2018-01-13 00:00:00', 7),
(3, '2018JanuaryWk3', NULL, 'w', 3, 'January', '2018', '2018-01-14 00:00:00', '2018-01-20 00:00:00', 7),
(4, '2018JanuaryWk4', NULL, 'w', 4, 'January', '2018', '2018-01-21 00:00:00', '2018-01-27 00:00:00', 7),
(5, '2018JanuaryWk5', NULL, 'w', 5, 'January', '2018', '2018-01-28 00:00:00', '2018-02-03 00:00:00', 7),
(6, '2018FebruraryWk6', NULL, 'w', 6, 'February', '2018', '2018-02-04 00:00:00', '2018-01-10 00:00:00', 7),
(7, '2018FebruraryWk7', NULL, 'w', 7, 'February', '2018', '2018-02-11 00:00:00', '2018-02-17 00:00:00', 7),
(8, '2018FebruraryWk8', NULL, 'w', 8, 'February', '2018', '2018-02-18 00:00:00', '2018-02-24 00:00:00', 7),
(9, '2018FebruraryWk9', NULL, 'w', 9, 'February', '2018', '2018-02-25 00:00:00', '2018-03-03 00:00:00', 7),
(10, '2018MarchWk10', NULL, 'w', 10, 'March', '2018', '2018-03-04 00:00:00', '2018-03-10 00:00:00', 7),
(11, '2018MarchWk11', NULL, 'w', 11, 'March', '2018', '2018-03-11 00:00:00', '2018-03-17 00:00:00', 7),
(12, '2018MarchWk12', NULL, 'w', 12, 'March', '2018', '2018-03-18 00:00:00', '2018-03-24 00:00:00', 7),
(13, '2018MarchWk13', NULL, 'w', 13, 'March', '2018', '2018-03-25 00:00:00', '2018-03-31 00:00:00', 7),
(14, '2018AprilWk14', NULL, 'w', 14, 'April', '2018', '2018-04-01 00:00:00', '2018-04-07 00:00:00', 7),
(15, '2018AprilWk15', NULL, 'w', 15, 'April', '2018', '2018-04-08 00:00:00', '2018-04-14 00:00:00', 7);

-- --------------------------------------------------------

--
-- Table structure for table `where`
--

CREATE TABLE `where` (
  `id` int(11) NOT NULL,
  `name` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `type` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `code` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `update_tine` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `where`
--

INSERT INTO `where` (`id`, `name`, `type`, `code`, `update_tine`) VALUES
(1, 'OutPatient Department', 'srv', '', '2018-01-11 12:15:04'),
(2, 'Emmergency Department', 'srv', '', '2018-01-12 11:16:00'),
(3, 'InPatient Department', 'srv', '', '2018-01-12 13:08:00'),
(4, 'Maternity', 'srv', ' ', '2018-01-12 13:08:00'),
(5, 'Immunization', 'srv', ' ', '2018-01-12 12:37:00'),
(7, 'ANC_PNC_FP', 'srv', '', '2018-03-30 13:37:00'),
(6, 'Laboratory', 'srv', '', '2018-03-30 12:37:00');

-- --------------------------------------------------------

--
-- Table structure for table `who`
--

CREATE TABLE `who` (
  `id` int(11) NOT NULL,
  `age_id` int(11) DEFAULT NULL,
  `sex_id` int(11) DEFAULT NULL,
  `upd_time` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `who`
--

INSERT INTO `who` (`id`, `age_id`, `sex_id`, `upd_time`) VALUES
(1, 1, 1, '2018-03-31 10:21:19');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `age`
--
ALTER TABLE `age`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `death`
--
ALTER TABLE `death`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `sex`
--
ALTER TABLE `sex`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `what`
--
ALTER TABLE `what`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `when`
--
ALTER TABLE `when`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `uniquewncode` (`code`);

--
-- Indexes for table `where`
--
ALTER TABLE `where`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `who`
--
ALTER TABLE `who`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_ageID` (`age_id`),
  ADD KEY `FK_sexID` (`sex_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `age`
--
ALTER TABLE `age`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `death`
--
ALTER TABLE `death`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `loginuser`
--
ALTER TABLE `loginuser`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `record`
--
ALTER TABLE `record`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=319;
--
-- AUTO_INCREMENT for table `sex`
--
ALTER TABLE `sex`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `what`
--
ALTER TABLE `what`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `where`
--
ALTER TABLE `where`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `who`
--
ALTER TABLE `who`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `who`
--
ALTER TABLE `who`
  ADD CONSTRAINT `FK_ageID` FOREIGN KEY (`age_id`) REFERENCES `age` (`id`),
  ADD CONSTRAINT `FK_sexID` FOREIGN KEY (`sex_id`) REFERENCES `sex` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
