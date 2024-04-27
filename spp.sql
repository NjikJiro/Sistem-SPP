-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 25, 2024 at 03:15 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 7.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `spp`
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
(10, 'Teknologi Farmasi', 'TF', '2024-04-02 03:10:00', '2024-04-02 03:10:00'),
(11, 'Elektro', 'EK', '2024-04-25 01:01:33', '2024-04-25 01:01:33');

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
(5, 'Adyadma Renjiro', 'NjikJiro', '$2y$10$AucOKs.sP2/QnBiP6QXkNutyrUJ0d1.Vz6fI1Lawz8g22G5fqAv1u', '2024-04-02 02:34:51', '2024-04-02 02:34:51'),
(8, 'admin', 'admin', '$2y$10$Bg0dfnasp9Sei738i8QgT.FYHVG0l5g0ztG8cBXkAzFMMP8Bkg3Ym', '2024-04-24 05:31:41', '2024-04-24 05:31:41');

-- --------------------------------------------------------

--
-- Table structure for table `riwayat`
--

CREATE TABLE `riwayat` (
  `id` varchar(255) NOT NULL,
  `nisn` varchar(255) NOT NULL,
  `nama_siswa` varchar(255) NOT NULL,
  `bulan` varchar(255) NOT NULL,
  `tahun` varchar(255) NOT NULL,
  `nominal` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `riwayat`
--

INSERT INTO `riwayat` (`id`, `nisn`, `nama_siswa`, `bulan`, `tahun`, `nominal`, `created_at`, `updated_at`) VALUES
('145', '1234', 'Test', 'Juli', '2021', '400000', '2024-04-25 01:03:12', '2024-04-25 01:03:12'),
('37', '0065957333', 'Adyadma Renjiro', 'Juli', '2021', '400000', '2024-04-24 07:16:37', '2024-04-24 07:16:37'),
('73', '0061247333', 'Mateo Jensen', 'Juli', '2021', '350000', '2024-04-24 07:03:33', '2024-04-24 07:03:33');

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
('0061247333', '11288', 'Mateo Jensen', 'Akuntansi Keuangan', '2021', '7', '2024-04-24 04:13:03', '2024-04-24 04:13:03'),
('0065833063', '11303', 'Bastian Emanuel', 'Desain Komunikasi Visual', '2021', '5', '2024-04-24 06:29:57', '2024-04-24 06:29:57'),
('0065957333', '11296', 'Adyadma Renjiro', 'Pengembangan Perangkat Lunak dan Gim', '2021', '1', '2024-04-24 03:37:53', '2024-04-24 03:37:53'),
('1234', '1234', 'Test', 'Desain Komunikasi Visual', '2021', '6', '2024-04-25 01:02:37', '2024-04-25 01:02:37');

-- --------------------------------------------------------

--
-- Table structure for table `tagihan-spp`
--

CREATE TABLE `tagihan-spp` (
  `id_tagihan` int(11) NOT NULL,
  `nisn` varchar(255) NOT NULL,
  `nama_siswa` varchar(255) NOT NULL,
  `bulan` varchar(255) NOT NULL,
  `tahun` varchar(255) NOT NULL,
  `nominal` varchar(255) NOT NULL,
  `status` enum('BELUM LUNAS','LUNAS') NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tagihan-spp`
--

INSERT INTO `tagihan-spp` (`id_tagihan`, `nisn`, `nama_siswa`, `bulan`, `tahun`, `nominal`, `status`, `created_at`, `updated_at`) VALUES
(37, '0065957333', 'Adyadma Renjiro', 'Juli', '2021', '400000', 'LUNAS', '2024-04-24 03:37:53', '2024-04-24 07:16:37'),
(38, '0065957333', 'Adyadma Renjiro', 'Agustus', '2021', '400000', 'BELUM LUNAS', '2024-04-24 03:37:53', '2024-04-24 06:26:17'),
(39, '0065957333', 'Adyadma Renjiro', 'September', '2021', '400000', 'BELUM LUNAS', '2024-04-24 03:37:53', '2024-04-24 06:26:13'),
(40, '0065957333', 'Adyadma Renjiro', 'Oktober', '2021', '400000', 'BELUM LUNAS', '2024-04-24 03:37:53', '2024-04-24 03:37:53'),
(41, '0065957333', 'Adyadma Renjiro', 'November', '2021', '400000', 'BELUM LUNAS', '2024-04-24 03:37:53', '2024-04-24 03:37:53'),
(42, '0065957333', 'Adyadma Renjiro', 'Desember', '2021', '400000', 'BELUM LUNAS', '2024-04-24 03:37:53', '2024-04-24 03:37:53'),
(43, '0065957333', 'Adyadma Renjiro', 'Januari', '2022', '400000', 'BELUM LUNAS', '2024-04-24 03:37:53', '2024-04-24 03:37:53'),
(44, '0065957333', 'Adyadma Renjiro', 'Februari', '2022', '400000', 'BELUM LUNAS', '2024-04-24 03:37:53', '2024-04-24 03:37:53'),
(45, '0065957333', 'Adyadma Renjiro', 'Maret', '2022', '400000', 'BELUM LUNAS', '2024-04-24 03:37:53', '2024-04-24 03:37:53'),
(46, '0065957333', 'Adyadma Renjiro', 'April', '2022', '400000', 'BELUM LUNAS', '2024-04-24 03:37:53', '2024-04-24 03:37:53'),
(47, '0065957333', 'Adyadma Renjiro', 'Mei', '2022', '400000', 'BELUM LUNAS', '2024-04-24 03:37:53', '2024-04-24 03:37:53'),
(48, '0065957333', 'Adyadma Renjiro', 'Juni', '2022', '400000', 'BELUM LUNAS', '2024-04-24 03:37:53', '2024-04-24 03:37:53'),
(49, '0065957333', 'Adyadma Renjiro', 'Juli', '2022', '400000', 'BELUM LUNAS', '2024-04-24 03:37:53', '2024-04-24 03:37:53'),
(50, '0065957333', 'Adyadma Renjiro', 'Agustus', '2022', '400000', 'BELUM LUNAS', '2024-04-24 03:37:53', '2024-04-24 03:37:53'),
(51, '0065957333', 'Adyadma Renjiro', 'September', '2022', '400000', 'BELUM LUNAS', '2024-04-24 03:37:53', '2024-04-24 03:37:53'),
(52, '0065957333', 'Adyadma Renjiro', 'Oktober', '2022', '400000', 'BELUM LUNAS', '2024-04-24 03:37:53', '2024-04-24 03:37:53'),
(53, '0065957333', 'Adyadma Renjiro', 'November', '2022', '400000', 'BELUM LUNAS', '2024-04-24 03:37:53', '2024-04-24 03:37:53'),
(54, '0065957333', 'Adyadma Renjiro', 'Desember', '2022', '400000', 'BELUM LUNAS', '2024-04-24 03:37:53', '2024-04-24 03:37:53'),
(55, '0065957333', 'Adyadma Renjiro', 'Januari', '2023', '400000', 'BELUM LUNAS', '2024-04-24 03:37:53', '2024-04-24 03:37:53'),
(56, '0065957333', 'Adyadma Renjiro', 'Februari', '2023', '400000', 'BELUM LUNAS', '2024-04-24 03:37:53', '2024-04-24 03:37:53'),
(57, '0065957333', 'Adyadma Renjiro', 'Maret', '2023', '400000', 'BELUM LUNAS', '2024-04-24 03:37:53', '2024-04-24 03:37:53'),
(58, '0065957333', 'Adyadma Renjiro', 'April', '2023', '400000', 'BELUM LUNAS', '2024-04-24 03:37:53', '2024-04-24 03:37:53'),
(59, '0065957333', 'Adyadma Renjiro', 'Mei', '2023', '400000', 'BELUM LUNAS', '2024-04-24 03:37:53', '2024-04-24 03:37:53'),
(60, '0065957333', 'Adyadma Renjiro', 'Juni', '2023', '400000', 'BELUM LUNAS', '2024-04-24 03:37:53', '2024-04-24 03:37:53'),
(61, '0065957333', 'Adyadma Renjiro', 'Juli', '2023', '400000', 'BELUM LUNAS', '2024-04-24 03:37:53', '2024-04-24 03:37:53'),
(62, '0065957333', 'Adyadma Renjiro', 'Agustus', '2023', '400000', 'BELUM LUNAS', '2024-04-24 03:37:53', '2024-04-24 03:37:53'),
(63, '0065957333', 'Adyadma Renjiro', 'September', '2023', '400000', 'BELUM LUNAS', '2024-04-24 03:37:53', '2024-04-24 03:37:53'),
(64, '0065957333', 'Adyadma Renjiro', 'Oktober', '2023', '400000', 'BELUM LUNAS', '2024-04-24 03:37:53', '2024-04-24 03:37:53'),
(65, '0065957333', 'Adyadma Renjiro', 'November', '2023', '400000', 'BELUM LUNAS', '2024-04-24 03:37:53', '2024-04-24 03:37:53'),
(66, '0065957333', 'Adyadma Renjiro', 'Desember', '2023', '400000', 'BELUM LUNAS', '2024-04-24 03:37:53', '2024-04-24 03:37:53'),
(67, '0065957333', 'Adyadma Renjiro', 'Januari', '2024', '400000', 'BELUM LUNAS', '2024-04-24 03:37:53', '2024-04-24 03:37:53'),
(68, '0065957333', 'Adyadma Renjiro', 'Februari', '2024', '400000', 'BELUM LUNAS', '2024-04-24 03:37:53', '2024-04-24 03:37:53'),
(69, '0065957333', 'Adyadma Renjiro', 'Maret', '2024', '400000', 'BELUM LUNAS', '2024-04-24 03:37:53', '2024-04-24 03:37:53'),
(70, '0065957333', 'Adyadma Renjiro', 'April', '2024', '400000', 'BELUM LUNAS', '2024-04-24 03:37:53', '2024-04-24 03:37:53'),
(71, '0065957333', 'Adyadma Renjiro', 'Mei', '2024', '400000', 'BELUM LUNAS', '2024-04-24 03:37:53', '2024-04-24 03:37:53'),
(72, '0065957333', 'Adyadma Renjiro', 'Juni', '2024', '400000', 'BELUM LUNAS', '2024-04-24 03:37:53', '2024-04-24 03:37:53'),
(73, '0061247333', 'Mateo Jensen', 'Juli', '2021', '350000', 'LUNAS', '2024-04-24 04:13:03', '2024-04-24 07:03:33'),
(74, '0061247333', 'Mateo Jensen', 'Agustus', '2021', '350000', 'BELUM LUNAS', '2024-04-24 04:13:03', '2024-04-24 06:26:29'),
(75, '0061247333', 'Mateo Jensen', 'September', '2021', '350000', 'BELUM LUNAS', '2024-04-24 04:13:03', '2024-04-24 06:26:32'),
(76, '0061247333', 'Mateo Jensen', 'Oktober', '2021', '350000', 'BELUM LUNAS', '2024-04-24 04:13:03', '2024-04-24 06:26:37'),
(77, '0061247333', 'Mateo Jensen', 'November', '2021', '350000', 'BELUM LUNAS', '2024-04-24 04:13:03', '2024-04-24 04:13:03'),
(78, '0061247333', 'Mateo Jensen', 'Desember', '2021', '350000', 'BELUM LUNAS', '2024-04-24 04:13:03', '2024-04-24 04:13:03'),
(79, '0061247333', 'Mateo Jensen', 'Januari', '2022', '350000', 'BELUM LUNAS', '2024-04-24 04:13:03', '2024-04-24 04:13:03'),
(80, '0061247333', 'Mateo Jensen', 'Februari', '2022', '350000', 'BELUM LUNAS', '2024-04-24 04:13:03', '2024-04-24 04:13:03'),
(81, '0061247333', 'Mateo Jensen', 'Maret', '2022', '350000', 'BELUM LUNAS', '2024-04-24 04:13:03', '2024-04-24 04:13:03'),
(82, '0061247333', 'Mateo Jensen', 'April', '2022', '350000', 'BELUM LUNAS', '2024-04-24 04:13:03', '2024-04-24 04:13:03'),
(83, '0061247333', 'Mateo Jensen', 'Mei', '2022', '350000', 'BELUM LUNAS', '2024-04-24 04:13:03', '2024-04-24 04:13:03'),
(84, '0061247333', 'Mateo Jensen', 'Juni', '2022', '350000', 'BELUM LUNAS', '2024-04-24 04:13:03', '2024-04-24 04:13:03'),
(85, '0061247333', 'Mateo Jensen', 'Juli', '2022', '350000', 'BELUM LUNAS', '2024-04-24 04:13:03', '2024-04-24 04:13:03'),
(86, '0061247333', 'Mateo Jensen', 'Agustus', '2022', '350000', 'BELUM LUNAS', '2024-04-24 04:13:03', '2024-04-24 04:13:03'),
(87, '0061247333', 'Mateo Jensen', 'September', '2022', '350000', 'BELUM LUNAS', '2024-04-24 04:13:03', '2024-04-24 04:13:03'),
(88, '0061247333', 'Mateo Jensen', 'Oktober', '2022', '350000', 'BELUM LUNAS', '2024-04-24 04:13:03', '2024-04-24 04:13:03'),
(89, '0061247333', 'Mateo Jensen', 'November', '2022', '350000', 'BELUM LUNAS', '2024-04-24 04:13:04', '2024-04-24 04:13:04'),
(90, '0061247333', 'Mateo Jensen', 'Desember', '2022', '350000', 'BELUM LUNAS', '2024-04-24 04:13:04', '2024-04-24 04:13:04'),
(91, '0061247333', 'Mateo Jensen', 'Januari', '2023', '350000', 'BELUM LUNAS', '2024-04-24 04:13:04', '2024-04-24 04:13:04'),
(92, '0061247333', 'Mateo Jensen', 'Februari', '2023', '350000', 'BELUM LUNAS', '2024-04-24 04:13:04', '2024-04-24 04:13:04'),
(93, '0061247333', 'Mateo Jensen', 'Maret', '2023', '350000', 'BELUM LUNAS', '2024-04-24 04:13:04', '2024-04-24 04:13:04'),
(94, '0061247333', 'Mateo Jensen', 'April', '2023', '350000', 'BELUM LUNAS', '2024-04-24 04:13:04', '2024-04-24 04:13:04'),
(95, '0061247333', 'Mateo Jensen', 'Mei', '2023', '350000', 'BELUM LUNAS', '2024-04-24 04:13:04', '2024-04-24 04:13:04'),
(96, '0061247333', 'Mateo Jensen', 'Juni', '2023', '350000', 'BELUM LUNAS', '2024-04-24 04:13:04', '2024-04-24 04:13:04'),
(97, '0061247333', 'Mateo Jensen', 'Juli', '2023', '350000', 'BELUM LUNAS', '2024-04-24 04:13:04', '2024-04-24 04:13:04'),
(98, '0061247333', 'Mateo Jensen', 'Agustus', '2023', '350000', 'BELUM LUNAS', '2024-04-24 04:13:04', '2024-04-24 04:13:04'),
(99, '0061247333', 'Mateo Jensen', 'September', '2023', '350000', 'BELUM LUNAS', '2024-04-24 04:13:04', '2024-04-24 04:13:04'),
(100, '0061247333', 'Mateo Jensen', 'Oktober', '2023', '350000', 'BELUM LUNAS', '2024-04-24 04:13:04', '2024-04-24 04:13:04'),
(101, '0061247333', 'Mateo Jensen', 'November', '2023', '350000', 'BELUM LUNAS', '2024-04-24 04:13:04', '2024-04-24 04:13:04'),
(102, '0061247333', 'Mateo Jensen', 'Desember', '2023', '350000', 'BELUM LUNAS', '2024-04-24 04:13:04', '2024-04-24 04:13:04'),
(103, '0061247333', 'Mateo Jensen', 'Januari', '2024', '350000', 'BELUM LUNAS', '2024-04-24 04:13:04', '2024-04-24 04:13:04'),
(104, '0061247333', 'Mateo Jensen', 'Februari', '2024', '350000', 'BELUM LUNAS', '2024-04-24 04:13:04', '2024-04-24 04:13:04'),
(105, '0061247333', 'Mateo Jensen', 'Maret', '2024', '350000', 'BELUM LUNAS', '2024-04-24 04:13:04', '2024-04-24 04:13:04'),
(106, '0061247333', 'Mateo Jensen', 'April', '2024', '350000', 'BELUM LUNAS', '2024-04-24 04:13:04', '2024-04-24 04:13:04'),
(107, '0061247333', 'Mateo Jensen', 'Mei', '2024', '350000', 'BELUM LUNAS', '2024-04-24 04:13:04', '2024-04-24 04:13:04'),
(108, '0061247333', 'Mateo Jensen', 'Juni', '2024', '350000', 'BELUM LUNAS', '2024-04-24 04:13:04', '2024-04-24 04:13:04'),
(109, '0065833063', 'Bastian Emanuel', 'Juli', '2021', '400000', 'BELUM LUNAS', '2024-04-24 06:29:57', '2024-04-24 06:29:57'),
(110, '0065833063', 'Bastian Emanuel', 'Agustus', '2021', '400000', 'BELUM LUNAS', '2024-04-24 06:29:57', '2024-04-24 06:29:57'),
(111, '0065833063', 'Bastian Emanuel', 'September', '2021', '400000', 'BELUM LUNAS', '2024-04-24 06:29:57', '2024-04-24 06:29:57'),
(112, '0065833063', 'Bastian Emanuel', 'Oktober', '2021', '400000', 'BELUM LUNAS', '2024-04-24 06:29:57', '2024-04-24 06:29:57'),
(113, '0065833063', 'Bastian Emanuel', 'November', '2021', '400000', 'BELUM LUNAS', '2024-04-24 06:29:57', '2024-04-24 06:29:57'),
(114, '0065833063', 'Bastian Emanuel', 'Desember', '2021', '400000', 'BELUM LUNAS', '2024-04-24 06:29:57', '2024-04-24 06:29:57'),
(115, '0065833063', 'Bastian Emanuel', 'Januari', '2022', '400000', 'BELUM LUNAS', '2024-04-24 06:29:57', '2024-04-24 06:29:57'),
(116, '0065833063', 'Bastian Emanuel', 'Februari', '2022', '400000', 'BELUM LUNAS', '2024-04-24 06:29:57', '2024-04-24 06:29:57'),
(117, '0065833063', 'Bastian Emanuel', 'Maret', '2022', '400000', 'BELUM LUNAS', '2024-04-24 06:29:57', '2024-04-24 06:29:57'),
(118, '0065833063', 'Bastian Emanuel', 'April', '2022', '400000', 'BELUM LUNAS', '2024-04-24 06:29:57', '2024-04-24 06:29:57'),
(119, '0065833063', 'Bastian Emanuel', 'Mei', '2022', '400000', 'BELUM LUNAS', '2024-04-24 06:29:57', '2024-04-24 06:29:57'),
(120, '0065833063', 'Bastian Emanuel', 'Juni', '2022', '400000', 'BELUM LUNAS', '2024-04-24 06:29:57', '2024-04-24 06:29:57'),
(121, '0065833063', 'Bastian Emanuel', 'Juli', '2022', '400000', 'BELUM LUNAS', '2024-04-24 06:29:57', '2024-04-24 06:29:57'),
(122, '0065833063', 'Bastian Emanuel', 'Agustus', '2022', '400000', 'BELUM LUNAS', '2024-04-24 06:29:57', '2024-04-24 06:29:57'),
(123, '0065833063', 'Bastian Emanuel', 'September', '2022', '400000', 'BELUM LUNAS', '2024-04-24 06:29:57', '2024-04-24 06:29:57'),
(124, '0065833063', 'Bastian Emanuel', 'Oktober', '2022', '400000', 'BELUM LUNAS', '2024-04-24 06:29:57', '2024-04-24 06:29:57'),
(125, '0065833063', 'Bastian Emanuel', 'November', '2022', '400000', 'BELUM LUNAS', '2024-04-24 06:29:57', '2024-04-24 06:29:57'),
(126, '0065833063', 'Bastian Emanuel', 'Desember', '2022', '400000', 'BELUM LUNAS', '2024-04-24 06:29:57', '2024-04-24 06:29:57'),
(127, '0065833063', 'Bastian Emanuel', 'Januari', '2023', '400000', 'BELUM LUNAS', '2024-04-24 06:29:57', '2024-04-24 06:29:57'),
(128, '0065833063', 'Bastian Emanuel', 'Februari', '2023', '400000', 'BELUM LUNAS', '2024-04-24 06:29:57', '2024-04-24 06:29:57'),
(129, '0065833063', 'Bastian Emanuel', 'Maret', '2023', '400000', 'BELUM LUNAS', '2024-04-24 06:29:57', '2024-04-24 06:29:57'),
(130, '0065833063', 'Bastian Emanuel', 'April', '2023', '400000', 'BELUM LUNAS', '2024-04-24 06:29:57', '2024-04-24 06:29:57'),
(131, '0065833063', 'Bastian Emanuel', 'Mei', '2023', '400000', 'BELUM LUNAS', '2024-04-24 06:29:58', '2024-04-24 06:29:58'),
(132, '0065833063', 'Bastian Emanuel', 'Juni', '2023', '400000', 'BELUM LUNAS', '2024-04-24 06:29:58', '2024-04-24 06:29:58'),
(133, '0065833063', 'Bastian Emanuel', 'Juli', '2023', '400000', 'BELUM LUNAS', '2024-04-24 06:29:58', '2024-04-24 06:29:58'),
(134, '0065833063', 'Bastian Emanuel', 'Agustus', '2023', '400000', 'BELUM LUNAS', '2024-04-24 06:29:58', '2024-04-24 06:29:58'),
(135, '0065833063', 'Bastian Emanuel', 'September', '2023', '400000', 'BELUM LUNAS', '2024-04-24 06:29:58', '2024-04-24 06:29:58'),
(136, '0065833063', 'Bastian Emanuel', 'Oktober', '2023', '400000', 'BELUM LUNAS', '2024-04-24 06:29:58', '2024-04-24 06:29:58'),
(137, '0065833063', 'Bastian Emanuel', 'November', '2023', '400000', 'BELUM LUNAS', '2024-04-24 06:29:58', '2024-04-24 06:29:58'),
(138, '0065833063', 'Bastian Emanuel', 'Desember', '2023', '400000', 'BELUM LUNAS', '2024-04-24 06:29:58', '2024-04-24 06:29:58'),
(139, '0065833063', 'Bastian Emanuel', 'Januari', '2024', '400000', 'BELUM LUNAS', '2024-04-24 06:29:58', '2024-04-24 06:29:58'),
(140, '0065833063', 'Bastian Emanuel', 'Februari', '2024', '400000', 'BELUM LUNAS', '2024-04-24 06:29:58', '2024-04-24 06:29:58'),
(141, '0065833063', 'Bastian Emanuel', 'Maret', '2024', '400000', 'BELUM LUNAS', '2024-04-24 06:29:58', '2024-04-24 06:29:58'),
(142, '0065833063', 'Bastian Emanuel', 'April', '2024', '400000', 'BELUM LUNAS', '2024-04-24 06:29:58', '2024-04-24 06:29:58'),
(143, '0065833063', 'Bastian Emanuel', 'Mei', '2024', '400000', 'BELUM LUNAS', '2024-04-24 06:29:58', '2024-04-24 06:29:58'),
(144, '0065833063', 'Bastian Emanuel', 'Juni', '2024', '400000', 'BELUM LUNAS', '2024-04-24 06:29:58', '2024-04-24 06:29:58'),
(145, '1234', 'Test', 'Juli', '2021', '400000', 'LUNAS', '2024-04-25 01:02:37', '2024-04-25 01:03:12'),
(146, '1234', 'Test', 'Agustus', '2021', '400000', 'BELUM LUNAS', '2024-04-25 01:02:37', '2024-04-25 01:02:37'),
(147, '1234', 'Test', 'September', '2021', '400000', 'BELUM LUNAS', '2024-04-25 01:02:37', '2024-04-25 01:02:37'),
(148, '1234', 'Test', 'Oktober', '2021', '400000', 'BELUM LUNAS', '2024-04-25 01:02:37', '2024-04-25 01:02:37'),
(149, '1234', 'Test', 'November', '2021', '400000', 'BELUM LUNAS', '2024-04-25 01:02:37', '2024-04-25 01:02:37'),
(150, '1234', 'Test', 'Desember', '2021', '400000', 'BELUM LUNAS', '2024-04-25 01:02:37', '2024-04-25 01:02:37'),
(151, '1234', 'Test', 'Januari', '2022', '400000', 'BELUM LUNAS', '2024-04-25 01:02:37', '2024-04-25 01:02:37'),
(152, '1234', 'Test', 'Februari', '2022', '400000', 'BELUM LUNAS', '2024-04-25 01:02:37', '2024-04-25 01:02:37'),
(153, '1234', 'Test', 'Maret', '2022', '400000', 'BELUM LUNAS', '2024-04-25 01:02:37', '2024-04-25 01:02:37'),
(154, '1234', 'Test', 'April', '2022', '400000', 'BELUM LUNAS', '2024-04-25 01:02:37', '2024-04-25 01:02:37'),
(155, '1234', 'Test', 'Mei', '2022', '400000', 'BELUM LUNAS', '2024-04-25 01:02:37', '2024-04-25 01:02:37'),
(156, '1234', 'Test', 'Juni', '2022', '400000', 'BELUM LUNAS', '2024-04-25 01:02:37', '2024-04-25 01:02:37'),
(157, '1234', 'Test', 'Juli', '2022', '400000', 'BELUM LUNAS', '2024-04-25 01:02:37', '2024-04-25 01:02:37'),
(158, '1234', 'Test', 'Agustus', '2022', '400000', 'BELUM LUNAS', '2024-04-25 01:02:37', '2024-04-25 01:02:37'),
(159, '1234', 'Test', 'September', '2022', '400000', 'BELUM LUNAS', '2024-04-25 01:02:37', '2024-04-25 01:02:37'),
(160, '1234', 'Test', 'Oktober', '2022', '400000', 'BELUM LUNAS', '2024-04-25 01:02:37', '2024-04-25 01:02:37'),
(161, '1234', 'Test', 'November', '2022', '400000', 'BELUM LUNAS', '2024-04-25 01:02:37', '2024-04-25 01:02:37'),
(162, '1234', 'Test', 'Desember', '2022', '400000', 'BELUM LUNAS', '2024-04-25 01:02:37', '2024-04-25 01:02:37'),
(163, '1234', 'Test', 'Januari', '2023', '400000', 'BELUM LUNAS', '2024-04-25 01:02:37', '2024-04-25 01:02:37'),
(164, '1234', 'Test', 'Februari', '2023', '400000', 'BELUM LUNAS', '2024-04-25 01:02:37', '2024-04-25 01:02:37'),
(165, '1234', 'Test', 'Maret', '2023', '400000', 'BELUM LUNAS', '2024-04-25 01:02:37', '2024-04-25 01:02:37'),
(166, '1234', 'Test', 'April', '2023', '400000', 'BELUM LUNAS', '2024-04-25 01:02:37', '2024-04-25 01:02:37'),
(167, '1234', 'Test', 'Mei', '2023', '400000', 'BELUM LUNAS', '2024-04-25 01:02:37', '2024-04-25 01:02:37'),
(168, '1234', 'Test', 'Juni', '2023', '400000', 'BELUM LUNAS', '2024-04-25 01:02:37', '2024-04-25 01:02:37'),
(169, '1234', 'Test', 'Juli', '2023', '400000', 'BELUM LUNAS', '2024-04-25 01:02:37', '2024-04-25 01:02:37'),
(170, '1234', 'Test', 'Agustus', '2023', '400000', 'BELUM LUNAS', '2024-04-25 01:02:37', '2024-04-25 01:02:37'),
(171, '1234', 'Test', 'September', '2023', '400000', 'BELUM LUNAS', '2024-04-25 01:02:37', '2024-04-25 01:02:37'),
(172, '1234', 'Test', 'Oktober', '2023', '400000', 'BELUM LUNAS', '2024-04-25 01:02:37', '2024-04-25 01:02:37'),
(173, '1234', 'Test', 'November', '2023', '400000', 'BELUM LUNAS', '2024-04-25 01:02:37', '2024-04-25 01:02:37'),
(174, '1234', 'Test', 'Desember', '2023', '400000', 'BELUM LUNAS', '2024-04-25 01:02:37', '2024-04-25 01:02:37'),
(175, '1234', 'Test', 'Januari', '2024', '400000', 'BELUM LUNAS', '2024-04-25 01:02:37', '2024-04-25 01:02:37'),
(176, '1234', 'Test', 'Februari', '2024', '400000', 'BELUM LUNAS', '2024-04-25 01:02:37', '2024-04-25 01:02:37'),
(177, '1234', 'Test', 'Maret', '2024', '400000', 'BELUM LUNAS', '2024-04-25 01:02:37', '2024-04-25 01:02:37'),
(178, '1234', 'Test', 'April', '2024', '400000', 'BELUM LUNAS', '2024-04-25 01:02:37', '2024-04-25 01:02:37'),
(179, '1234', 'Test', 'Mei', '2024', '400000', 'BELUM LUNAS', '2024-04-25 01:02:37', '2024-04-25 01:02:37'),
(180, '1234', 'Test', 'Juni', '2024', '400000', 'BELUM LUNAS', '2024-04-25 01:02:38', '2024-04-25 01:02:38');

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
-- Indexes for table `petugas`
--
ALTER TABLE `petugas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `riwayat`
--
ALTER TABLE `riwayat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`nisn`);

--
-- Indexes for table `tagihan-spp`
--
ALTER TABLE `tagihan-spp`
  ADD PRIMARY KEY (`id_tagihan`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `jurusan`
--
ALTER TABLE `jurusan`
  MODIFY `id_jurusan` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `kelas`
--
ALTER TABLE `kelas`
  MODIFY `id_kelas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `petugas`
--
ALTER TABLE `petugas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tagihan-spp`
--
ALTER TABLE `tagihan-spp`
  MODIFY `id_tagihan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=181;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
