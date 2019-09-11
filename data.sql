-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Sep 09, 2019 at 03:38 PM
-- Server version: 5.7.27-log
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mhrwlddc_tkb`
--

-- --------------------------------------------------------

--
-- Table structure for table `TMQ`
--

CREATE TABLE `TMQ` (
  `id` int(10) UNSIGNED NOT NULL,
  `thu2` text CHARACTER SET utf8 NOT NULL,
  `thu3` text CHARACTER SET utf8 NOT NULL,
  `thu4` text CHARACTER SET utf8 NOT NULL,
  `thu5` text CHARACTER SET utf8 NOT NULL,
  `thu6` text CHARACTER SET utf8 NOT NULL,
  `thu7` text CHARACTER SET utf8 NOT NULL,
  `time` text CHARACTER SET utf8 NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `TMQ`
--

INSERT INTO `TMQ` (`id`, `thu2`, `thu3`, `thu4`, `thu5`, `thu6`, `thu7`, `time`) VALUES
(1, 'Chào cờ \r\nVăn \r\nHóa \r\nToán \r\nLý', 'Toán \r\nCông nghệ \r\nToán \r\nAnh \r\nSinh\r\nAnh', 'Văn \r\nVăn \r\nLý \r\nĐịa \r\nGDCD', 'Sử \r\nAnh \r\nToán \r\nThể dục \r\nThể dục\r\nToán', 'Lý \r\nAnh \r\nSinh \r\nTin \r\nHóa', 'SH \r\nSH \r\nAnh \r\nToán \r\nVăn\r\nHóa <br /> Văn <br> Lý', '09:02:11 08-09-2019');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `TMQ`
--
ALTER TABLE `TMQ`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `TMQ`
--
ALTER TABLE `TMQ`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
