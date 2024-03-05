-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 05, 2024 at 12:14 PM
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
-- Database: `db_udo`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_acara`
--

CREATE TABLE `tb_acara` (
  `acara_id` int(11) NOT NULL,
  `text_start` text NOT NULL,
  `text_end` text NOT NULL,
  `datetime` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_acara`
--

INSERT INTO `tb_acara` (`acara_id`, `text_start`, `text_end`, `datetime`) VALUES
(1, '<p>Dengan hormat, Dengan ini kami mengundang Anda dalam acara : Grand Opening Mommy Tbk</p>', '<p>Atas perhatian Anda, kami ucapkan terima kasih.</p>', '2024-03-15 13:31:09');

-- --------------------------------------------------------

--
-- Table structure for table `tb_setting_umum`
--

CREATE TABLE `tb_setting_umum` (
  `su_id` int(11) NOT NULL,
  `title` varchar(30) NOT NULL,
  `judul` varchar(10) NOT NULL,
  `logo` varchar(155) NOT NULL,
  `alamat` text NOT NULL,
  `no_telpon` varchar(20) NOT NULL,
  `email` varchar(155) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_setting_umum`
--

INSERT INTO `tb_setting_umum` (`su_id`, `title`, `judul`, `logo`, `alamat`, `no_telpon`, `email`) VALUES
(1, 'Mommy - Toko Bahan Kue', 'Mommy', 'favicon.png', 'A108 Adam Street, New York, NY 535022', '088809823755', 'contact@example.com');

-- --------------------------------------------------------

--
-- Table structure for table `tb_sosial_media`
--

CREATE TABLE `tb_sosial_media` (
  `sm_id` int(11) NOT NULL,
  `twitter` varchar(155) NOT NULL,
  `facebook` varchar(155) NOT NULL,
  `instagram` varchar(155) NOT NULL,
  `tiktok` varchar(155) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_sosial_media`
--

INSERT INTO `tb_sosial_media` (`sm_id`, `twitter`, `facebook`, `instagram`, `tiktok`) VALUES
(1, 'https://www.instagram.com/kodekreatifid/', '#', '#', '#');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_acara`
--
ALTER TABLE `tb_acara`
  ADD PRIMARY KEY (`acara_id`);

--
-- Indexes for table `tb_setting_umum`
--
ALTER TABLE `tb_setting_umum`
  ADD PRIMARY KEY (`su_id`);

--
-- Indexes for table `tb_sosial_media`
--
ALTER TABLE `tb_sosial_media`
  ADD PRIMARY KEY (`sm_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_acara`
--
ALTER TABLE `tb_acara`
  MODIFY `acara_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_setting_umum`
--
ALTER TABLE `tb_setting_umum`
  MODIFY `su_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_sosial_media`
--
ALTER TABLE `tb_sosial_media`
  MODIFY `sm_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
