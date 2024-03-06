-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Mar 06, 2024 at 02:57 PM
-- Server version: 8.0.30
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
  `acara_id` int NOT NULL,
  `text_start` text COLLATE utf8mb4_general_ci NOT NULL,
  `text_end` text COLLATE utf8mb4_general_ci NOT NULL,
  `datetime` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_acara`
--

INSERT INTO `tb_acara` (`acara_id`, `text_start`, `text_end`, `datetime`) VALUES
(1, '<p>Dengan hormat, Dengan ini kami mengundang Anda dalam acara : Grand Opening Mommy Tbk</p>', '<p>Atas perhatian Anda, kami ucapkan terima kasih.</p>', '2024-03-22 13:31:09');

-- --------------------------------------------------------

--
-- Table structure for table `tb_galeri`
--

CREATE TABLE `tb_galeri` (
  `galeri_id` int NOT NULL,
  `galeri` varchar(155) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_galeri`
--

INSERT INTO `tb_galeri` (`galeri_id`, `galeri`) VALUES
(1, 'galeri_1709730378.jpg'),
(2, 'galeri_1709730383.jpg'),
(3, 'galeri_1709730389.jpg'),
(4, 'galeri_1709730395.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tb_portofolio`
--

CREATE TABLE `tb_portofolio` (
  `portofolio_id` int NOT NULL,
  `nama_lengkap` varchar(155) NOT NULL,
  `jabatan` varchar(30) NOT NULL,
  `deskripsi` text NOT NULL,
  `sampul` varchar(155) NOT NULL,
  `rating` enum('1','2','3','4','5') NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tb_portofolio`
--

INSERT INTO `tb_portofolio` (`portofolio_id`, `nama_lengkap`, `jabatan`, `deskripsi`, `sampul`, `rating`, `created_at`) VALUES
(1, 'Saul Goodman', 'Ceo Founder', 'Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.', 'sampul_1709731419.jpg', '5', '2024-03-06 20:23:39'),
(2, 'John Larson', 'Entrepreneur', 'Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster veniam enim culpa labore duis sunt culpa nulla illum cillum fugiat legam esse veniam culpa fore nisi cillum quid.', 'sampul_1709731481.jpg', '4', '2024-03-06 20:24:41');

-- --------------------------------------------------------

--
-- Table structure for table `tb_setting_umum`
--

CREATE TABLE `tb_setting_umum` (
  `su_id` int NOT NULL,
  `title` varchar(30) COLLATE utf8mb4_general_ci NOT NULL,
  `judul` varchar(10) COLLATE utf8mb4_general_ci NOT NULL,
  `logo` varchar(155) COLLATE utf8mb4_general_ci NOT NULL,
  `alamat` text COLLATE utf8mb4_general_ci NOT NULL,
  `no_telpon` varchar(20) COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(155) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_setting_umum`
--

INSERT INTO `tb_setting_umum` (`su_id`, `title`, `judul`, `logo`, `alamat`, `no_telpon`, `email`) VALUES
(1, 'Mommy | Toko Bahan Kue', 'Mommy', 'logo_1709713552.png', 'A108 Adam Street, New York, NY 535022', '088809823755', 'contact@example.com');

-- --------------------------------------------------------

--
-- Table structure for table `tb_sosial_media`
--

CREATE TABLE `tb_sosial_media` (
  `sm_id` int NOT NULL,
  `twitter` varchar(155) COLLATE utf8mb4_general_ci NOT NULL,
  `facebook` varchar(155) COLLATE utf8mb4_general_ci NOT NULL,
  `instagram` varchar(155) COLLATE utf8mb4_general_ci NOT NULL,
  `tiktok` varchar(155) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_sosial_media`
--

INSERT INTO `tb_sosial_media` (`sm_id`, `twitter`, `facebook`, `instagram`, `tiktok`) VALUES
(1, 'https://www.instagram.com/kodekreatifid/', '#', '#', '#');

-- --------------------------------------------------------

--
-- Table structure for table `tb_ucapan`
--

CREATE TABLE `tb_ucapan` (
  `ucapan_id` int NOT NULL,
  `nama_lengkap` varchar(155) NOT NULL,
  `konfirmasi` enum('1','2') NOT NULL,
  `deskripsi` varchar(150) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tb_users`
--

CREATE TABLE `tb_users` (
  `user_id` int NOT NULL,
  `nama_lengkap` varchar(155) NOT NULL,
  `username` varchar(35) NOT NULL,
  `email` varchar(150) NOT NULL,
  `password` varchar(155) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tb_users`
--

INSERT INTO `tb_users` (`user_id`, `nama_lengkap`, `username`, `email`, `password`) VALUES
(1, 'Administrator', 'admin', 'admin@gmail.com', '$2a$12$VBUNQpuZRoDOB/AOhjykc.KVGQBWyiqvnp7QCf3c5NzaOYDysYAoS');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_acara`
--
ALTER TABLE `tb_acara`
  ADD PRIMARY KEY (`acara_id`);

--
-- Indexes for table `tb_galeri`
--
ALTER TABLE `tb_galeri`
  ADD PRIMARY KEY (`galeri_id`);

--
-- Indexes for table `tb_portofolio`
--
ALTER TABLE `tb_portofolio`
  ADD PRIMARY KEY (`portofolio_id`);

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
-- Indexes for table `tb_ucapan`
--
ALTER TABLE `tb_ucapan`
  ADD PRIMARY KEY (`ucapan_id`);

--
-- Indexes for table `tb_users`
--
ALTER TABLE `tb_users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_acara`
--
ALTER TABLE `tb_acara`
  MODIFY `acara_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_galeri`
--
ALTER TABLE `tb_galeri`
  MODIFY `galeri_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tb_portofolio`
--
ALTER TABLE `tb_portofolio`
  MODIFY `portofolio_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tb_setting_umum`
--
ALTER TABLE `tb_setting_umum`
  MODIFY `su_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_sosial_media`
--
ALTER TABLE `tb_sosial_media`
  MODIFY `sm_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_ucapan`
--
ALTER TABLE `tb_ucapan`
  MODIFY `ucapan_id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_users`
--
ALTER TABLE `tb_users`
  MODIFY `user_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
