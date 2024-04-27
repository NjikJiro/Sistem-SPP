-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 23, 2024 at 03:22 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `to-spp`
--

-- --------------------------------------------------------

--
-- Table structure for table `jurusan`
--

CREATE TABLE `jurusan` (
  `id_jurusan` int(255) NOT NULL,
  `nama_jurusan` varchar(255) NOT NULL,
  `jurusan` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jurusan`
--

INSERT INTO `jurusan` (`id_jurusan`, `nama_jurusan`, `jurusan`, `created_at`, `updated_at`) VALUES
(1, 'Pengembangan Perangkat Lunak dan Gim', 'PPLG', '2024-04-02 03:05:19', '2024-04-02 03:05:19'),
(2, 'Teknik Jaringan Komputer dan Telekomunikasi', 'TJKT', '2024-04-02 03:06:03', '2024-04-02 03:06:03'),
(3, 'Desain Komunikasi Visual', 'DKV', '2024-04-02 03:06:17', '2024-04-02 03:06:17'),
(4, 'Akuntansi Keuangan', 'AK', '2024-04-02 03:06:30', '2024-04-02 03:06:30'),
(5, 'Perbankan Syariah', 'PS', '2024-04-02 03:06:46', '2024-04-02 03:06:46'),
(6, 'Pemasaran', 'PM', '2024-04-02 03:06:55', '2024-04-02 03:06:55'),
(7, 'Manajemen Perkantoran dan Layanan Bisnis', 'MPLB', '2024-04-02 03:09:17', '2024-04-02 03:09:17'),
(8, 'Manajemen Perkantoran dan Logistik', 'MPLG', '2024-04-02 03:09:37', '2024-04-02 03:09:37'),
(9, 'Kuliner', 'KL', '2024-04-02 03:09:49', '2024-04-02 03:09:49'),
(10, 'Teknologi Farmasi', 'TF', '2024-04-02 03:10:00', '2024-04-02 03:10:00');

-- --------------------------------------------------------

--
-- Table structure for table `kelas`
--

CREATE TABLE `kelas` (
  `id_kelas` int(11) NOT NULL,
  `nama_kelas` varchar(255) NOT NULL,
  `jurusan` varchar(255) NOT NULL,
  `tahun` varchar(255) NOT NULL,
  `nominal` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kelas`
--

INSERT INTO `kelas` (`id_kelas`, `nama_kelas`, `jurusan`, `tahun`, `nominal`, `created_at`, `updated_at`) VALUES
(1, 'XII PPLG', 'Pengembangan Perangkat Lunak dan Gim', '2021', '400000', '2024-04-02 04:43:20', '2024-04-02 04:43:20'),
(2, 'XII TJKT 1', 'Teknik Jaringan Komputer dan Telekomunikasi', '2021', '400000', '2024-04-02 04:44:32', '2024-04-02 04:44:32'),
(3, 'XII TJKT 2', 'Teknik Jaringan Komputer dan Telekomunikasi', '2021', '400000', '2024-04-02 04:44:48', '2024-04-02 04:44:48'),
(4, 'XII TJKT 3', 'Teknik Jaringan Komputer dan Telekomunikasi', '2021', '400000', '2024-04-02 04:45:03', '2024-04-02 04:45:03'),
(5, 'XII DKV 1', 'Desain Komunikasi Visual', '2021', '400000', '2024-04-02 04:45:21', '2024-04-02 04:45:21'),
(6, 'XII DKV 2', 'Desain Komunikasi Visual', '2021', '400000', '2024-04-02 04:45:36', '2024-04-02 04:45:36'),
(7, 'XII AK', 'Akuntansi Keuangan', '2021', '350000', '2024-04-03 03:01:16', '2024-04-03 03:01:16');

-- --------------------------------------------------------

--
-- Table structure for table `pembayaran`
--

CREATE TABLE `pembayaran` (
  `id` varchar(255) NOT NULL,
  `nisn` varchar(255) NOT NULL,
  `nama_siswa` varchar(255) NOT NULL,
  `bulan` varchar(255) NOT NULL,
  `tahun` varchar(255) NOT NULL,
  `nominal` varchar(255) NOT NULL,
  `status` enum('1','0') NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pembayaran`
--

INSERT INTO `pembayaran` (`id`, `nisn`, `nama_siswa`, `bulan`, `tahun`, `nominal`, `status`, `created_at`, `updated_at`) VALUES
('PAY660d09f5ced90', '0065957333', 'Adyadma Renjiro', 'Juni', '2022', '400000', '', '2024-04-03 07:49:09', '2024-04-03 07:49:09');

-- --------------------------------------------------------

--
-- Table structure for table `petugas`
--

CREATE TABLE `petugas` (
  `id` int(11) NOT NULL,
  `nama_petugas` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `petugas`
--

INSERT INTO `petugas` (`id`, `nama_petugas`, `username`, `password`, `created_at`, `updated_at`) VALUES
(5, 'Adyadma Renjiro', 'NjikJiro', '$2y$10$AucOKs.sP2/QnBiP6QXkNutyrUJ0d1.Vz6fI1Lawz8g22G5fqAv1u', '2024-04-02 02:34:51', '2024-04-02 02:34:51');

-- --------------------------------------------------------

--
-- Table structure for table `siswa`
--

CREATE TABLE `siswa` (
  `nisn` varchar(255) NOT NULL,
  `nis` varchar(255) NOT NULL,
  `nama_siswa` varchar(255) NOT NULL,
  `jurusan` varchar(255) NOT NULL,
  `tahun` varchar(255) NOT NULL,
  `id_kelas` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `siswa`
--

INSERT INTO `siswa` (`nisn`, `nis`, `nama_siswa`, `jurusan`, `tahun`, `id_kelas`, `created_at`, `updated_at`) VALUES
('0065957333', '11296', 'Adyadma Renjiro', 'Pengembangan Perangkat Lunak dan Gim', '2021', '1', '2024-04-03 04:54:48', '2024-04-03 04:54:48');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `jurusan`
--
ALTER TABLE `jurusan`
  ADD PRIMARY KEY (`id_jurusan`);

--
-- Indexes for table `kelas`
--
ALTER TABLE `kelas`
  ADD PRIMARY KEY (`id_kelas`);

--
-- Indexes for table `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `petugas`
--
ALTER TABLE `petugas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`nisn`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `jurusan`
--
ALTER TABLE `jurusan`
  MODIFY `id_jurusan` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `kelas`
--
ALTER TABLE `kelas`
  MODIFY `id_kelas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `petugas`
--
ALTER TABLE `petugas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
