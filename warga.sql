-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 03, 2024 at 06:56 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.1.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `warga`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `auth_key` varchar(32) NOT NULL,
  `password_hash` varchar(255) NOT NULL,
  `password_reset_token` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `status` smallint(6) NOT NULL,
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL,
  `verification_token` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `nama`, `username`, `password`, `auth_key`, `password_hash`, `password_reset_token`, `email`, `status`, `created_at`, `updated_at`, `verification_token`) VALUES
(1, 'Rifai', 'rifain', 'rifain123', '', '0', '', '', 0, 0, 0, ''),
(2, 'Putri', 'putri', 'putri123', '', '0', '', '', 0, 0, 0, ''),
(3, 'Rafi', 'rafi', 'rafi123', '', '0', '', '', 0, 0, 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `migration`
--

CREATE TABLE `migration` (
  `version` varchar(180) NOT NULL,
  `apply_time` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `migration`
--

INSERT INTO `migration` (`version`, `apply_time`) VALUES
('m000000_000000_base', 1708142540),
('m130524_201442_init', 1708142545),
('m190124_110200_add_verification_token_column_to_user_table', 1708142545);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `auth_key` varchar(32) NOT NULL,
  `password_hash` varchar(255) NOT NULL,
  `password_reset_token` varchar(255) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `status` smallint(6) NOT NULL DEFAULT 10,
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL,
  `verification_token` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `auth_key`, `password_hash`, `password_reset_token`, `email`, `status`, `created_at`, `updated_at`, `verification_token`) VALUES
(1, 'admin', 'pOnyXKtRki783DJU2DLuF55dd0_ADYEu', '$2y$13$AZ4VcjJB2bo5kPDCl7WjnOG7GyfdzYLSJbs68NiDLVVrw2qi0u8hS', NULL, 'admin@gmail.com', 9, 1708142563, 1708142563, 'Ca65nfjqE_nqqri9llvQQ5VLWXT3Fa7Z_1708142563'),
(2, 'admin2', '7Tqrhda1uqAUDqiCrB6_f3yZzxo05gm_', '$2y$13$/SK.PccSzpU3kk.02YSY1.1BN4D3spgCGV1sPDmjv8cApk1oyUWQq', NULL, 'admin2@gmail.com', 9, 1708142672, 1708142672, 'aKcoNai_07BKe8u5qpnwgNT8bLSnQlGf_1708142672'),
(3, 'admin3', 'Z0TfCRFGkNpEO9Q7Stcbw4y3uOxby5_1', '$2y$13$ZzVAVYHmB0T/ymAUY6czR.JXLMzHlLmTMCVkrvEzCTNZP4ZCfH9nO', NULL, 'admin3@gmail.com', 10, 1708142813, 1708142813, 'h4Q84Z2kbYSNwBvPV6j7UMrxMKs3SxiZ_1708142813'),
(4, 'qwerty', 'Vx53e4zF5DAcxCn9L0ecrD9OSsB9tu9M', '$2y$13$iwsJlCjMg9cVvFBBOOZ3LO6JPktr43tVIW9A.V70q2EJfOktGqwh.', NULL, 'qwerty@gmail.com', 10, 1708775954, 1708775954, 'fKNwxYE4aJQf-ys6ByyfVEjOZXn02FhA_1708775954');

-- --------------------------------------------------------

--
-- Table structure for table `warga`
--

CREATE TABLE `warga` (
  `id` int(11) NOT NULL,
  `no_kk` varchar(255) NOT NULL,
  `nik` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `jk` int(11) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `agama` varchar(255) NOT NULL,
  `goldar` varchar(255) NOT NULL,
  `tgl_masuk` date NOT NULL DEFAULT curdate(),
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `warga`
--

INSERT INTO `warga` (`id`, `no_kk`, `nik`, `nama`, `jk`, `alamat`, `agama`, `goldar`, `tgl_masuk`, `status`) VALUES
(11, '12', '123', 'fain nur ahmad', 0, 'solo', 'Islam', 'AB', '2024-02-18', 2),
(12, '123', '14211351', 'fain', 1, 'ygsfhwwawqf', 'wfcwqf', 'wf', '2024-02-11', 2),
(13, '123456789', '0987654321', 'Avicenna Helvin', 0, 'Bumi, Rt:04, Rw:08, Tata surya, Bimasakti', 'Islam', 'AB', '2024-02-06', 2),
(14, '56878689', '2345675789', 'qwerty', 0, 'solo', 'Islam', 'A', '2024-02-24', 1),
(15, '3456789', '0986578', 'rifaiiiii', 0, 'soloo', 'Katolik', 'AB', '2024-03-05', 1),
(16, '12', '79900', 'hhhhhahah', 1, 'solo', 'Hindu', 'B', '2024-03-14', 1),
(17, '0987654321', '1234567890', 'abdullah syukron', 0, 'Bumi, Rt:04, Rw:08, Tata surya, Bimasakti', 'Islam', 'AB', '2024-05-13', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migration`
--
ALTER TABLE `migration`
  ADD PRIMARY KEY (`version`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `password_reset_token` (`password_reset_token`);

--
-- Indexes for table `warga`
--
ALTER TABLE `warga`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `warga`
--
ALTER TABLE `warga`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
