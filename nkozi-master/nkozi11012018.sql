-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 11, 2018 at 11:20 PM
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
(216, 20, 2, 1, '2018wk15', 'OPDNkozi', '2018-01-11 03:55:20'),
(217, 21, 2, 2, '2018wk15', 'OPDNkozi', '2018-01-11 03:55:20'),
(218, 45, 1, 1, '2018wk15', 'OPDNkozi', '2018-01-11 03:55:21'),
(219, 21, 3, 1, '2018wk15', 'OPDNkozi', '2018-01-11 03:55:21'),
(220, 21, 3, 2, '2018wk15', 'OPDNkozi', '2018-01-11 03:55:21'),
(221, 21, 6, 3, '2018wk15', 'OPDNkozi', '2018-01-11 03:55:21'),
(222, 21, 5, 3, '2018wk15', 'OPDNkozi', '2018-01-11 03:55:22');

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
(1, 'OPDNkozi', 'srv', '', '2018-01-11 12:15:04');

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
-- Indexes for table `where`
--
ALTER TABLE `where`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `who`
--
ALTER TABLE `who`
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=223;
--
-- AUTO_INCREMENT for table `what`
--
ALTER TABLE `what`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `where`
--
ALTER TABLE `where`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `who`
--
ALTER TABLE `who`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
