-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 24, 2024 at 05:44 AM
-- Server version: 5.7.33
-- PHP Version: 7.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_belajar`
--

-- --------------------------------------------------------

--
-- Table structure for table `kehadiran`
--

CREATE TABLE `kehadiran` (
  `id` int(11) NOT NULL,
  `nama` varchar(20) NOT NULL,
  `konfirmasi_kehadiran` varchar(20) NOT NULL,
  `ucapan` varchar(255) DEFAULT NULL,
  `waktu_submit` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kehadiran`
--

INSERT INTO `kehadiran` (`id`, `nama`, `konfirmasi_kehadiran`, `ucapan`, `waktu_submit`) VALUES
(1, 'Rizal', 'Berhalangan', 'Mohon maaf tidak bisa datang', '2024-02-06 15:50:55'),
(2, 'Hafizh', 'Hadir', 'Selamat', '2024-02-07 17:52:09'),
(3, 'Robi', 'hadir', 'Oke ditunggu', '2024-02-07 11:07:42'),
(4, 'Angga', 'berhalangan', 'ga Sempet cok ', '2024-02-07 11:08:33'),
(5, 'imam', 'hadir', 'bawa bini', '2024-02-07 11:08:43'),
(6, 'fahmi', 'berhalangan', 'lagi shuffling dt', '2024-02-07 11:08:58'),
(7, 'shabrina', 'berhalangan', 'lagi standby', '2024-02-07 11:09:14'),
(8, 'Mazhar', 'berhalangan', 'jauh bro', '2024-02-07 13:29:26'),
(9, 'test10', 'hadir', 'hahhaa', '2024-02-07 14:27:57'),
(10, 'sekar', 'berhalangan', 'ga bisa dateng', '2024-02-07 14:36:35'),
(11, 'Furqon', 'berhalangan', 'kirim doa aja', '2024-02-08 06:24:56'),
(12, 'Jamal', 'hadir', 'nice info', '2024-02-08 06:36:05'),
(13, 'afdaf', 'hadir', 'dfadfa', '2024-02-08 06:39:39'),
(14, 'test weet', 'hadir', 'fdada', '2024-02-08 06:47:01'),
(15, 'Hafizh Wijaya', 'hadir', 'fdafa', '2024-02-08 06:49:59'),
(16, 'Robi', 'hadir', 'gfsgdfgs', '2024-02-08 06:52:39'),
(17, 'sekar', 'hadir', 'fsdgsf', '2024-02-08 06:52:49'),
(18, 'Mazhar', 'berhalangan', 'aaaaa', '2024-02-08 06:57:10'),
(19, 'trrgs', 'hadir', 'huhu', '2024-02-08 06:57:35'),
(20, 'sekar', 'hadir', 'huhuhu', '2024-02-08 07:08:13'),
(21, 'Robi', 'hadir', 'hahah', '2024-05-04 07:48:53'),
(22, 'Hafizh Wijaya', 'hadir', 'gassss', '2024-05-04 08:16:40'),
(23, 'Hafizh Hadiayana', 'berhalangan', 'maaf ga bisa dateng', '2024-05-04 08:53:26'),
(24, 'Kusno', 'berhalangan', 'maaf ga bisa om', '2024-05-04 09:11:51'),
(25, 'Dwi CS', 'hadir', 'gas aahhh', '2024-05-04 09:12:28');

-- --------------------------------------------------------

--
-- Table structure for table `tamu`
--

CREATE TABLE `tamu` (
  `id` int(11) NOT NULL,
  `nama` varchar(25) NOT NULL,
  `konfirmasi_kehadiran` varchar(50) NOT NULL,
  `ucapan` varchar(255) NOT NULL,
  `waktu_submit` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tamu`
--

INSERT INTO `tamu` (`id`, `nama`, `konfirmasi_kehadiran`, `ucapan`, `waktu_submit`) VALUES
(1, 'a', 'Hadir', 'a hadir', '2024-02-08 00:34:02'),
(2, 'b', 'Tidak Hadir', 'b tidak hadir', '2024-02-08 00:35:25'),
(3, 'c', 'Hadir', 'hadir', '2024-02-08 00:37:08'),
(4, 'd', 'Tidak Hadir', 'd berhalangan', '2024-02-08 00:37:21'),
(5, 'e', 'Hadir', 'mungkin hadir', '2024-02-08 00:37:37'),
(6, 'f', 'Tidak Hadir', 'bingung', '2024-02-08 00:37:52'),
(7, 'g', 'Hadir', 'berangkat', '2024-02-08 00:38:06'),
(8, 'h', 'Hadir', 'bisa jadi', '2024-02-08 00:38:19'),
(9, 'i', 'Hadir', 'mungkin', '2024-02-08 00:38:40'),
(10, 'j', 'Hadir', 'masih menimbang', '2024-02-08 00:38:56'),
(11, 'k', 'Hadir', 'Bisa hadir', '2024-02-08 00:43:08'),
(12, 'L', 'Hadir', 'dateng dong', '2024-02-08 00:43:18'),
(13, 'M', 'Hadir', 'dataeng dbareng L', '2024-02-08 00:43:36'),
(14, 'N', 'Hadir', 'Dateng klo M dateng', '2024-02-08 01:06:17'),
(15, 'O', 'Hadir', 'Datneg klo A dateng', '2024-02-08 01:06:45'),
(16, 'P', 'Tidak Hadir', 'Belum Gajian', '2024-02-09 02:47:18'),
(17, 'Q', 'Hadir', 'Bawa pasangan', '2024-02-09 02:49:08'),
(18, 'R', 'Tidak Hadir', 'Gimana nanti dah', '2024-02-09 02:49:41'),
(19, 'S', 'Hadir', 'Bareng T', '2024-02-09 03:26:39'),
(20, 'T', 'Hadir', 'Bisa', '2024-02-09 08:48:00'),
(21, 'S', 'Hadir', 'Gooo', '2024-02-10 01:13:44'),
(22, 'U', 'Tidak Hadir', 'Tidak', '2024-02-10 01:45:56'),
(23, 'V', 'Hadir', 'Bareng W', '2024-02-10 01:47:56'),
(24, 'X', 'Hadir', 'OTW', '2024-02-10 02:41:31'),
(25, 'Z', 'Hadir', 'OK', '2024-02-10 08:18:13'),
(26, 'Riza', 'Hadir', 'Selamat', '2024-03-30 09:50:17'),
(27, 'Syaiful', 'Hadir', 'gaskeun', '2024-03-30 11:33:00'),
(28, 'Zeza', 'Tidak Hadir', 'OK', '2024-04-28 09:04:39'),
(29, 'Zainul', 'Hadir', 'test1', '2024-04-29 23:33:30'),
(30, 'Adam', 'Tidak Hadir', 'Maaf', '2024-04-30 00:17:03'),
(31, 'testing 1', 'Hadir', 'test 1', '2024-05-04 01:49:31'),
(32, 'testing 2', 'Hadir', 'hadir', '2024-05-04 02:19:29'),
(33, 'testing 1', 'Hadir', 'hadir', '2024-05-04 02:30:18'),
(34, 'Hafizh dan istri', 'Hadir', 'Gassss', '2024-05-04 08:30:42'),
(35, 'Hafizh dan istri 2', 'Tidak Hadir', 'Tidakkk', '2024-05-04 08:43:58');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kehadiran`
--
ALTER TABLE `kehadiran`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tamu`
--
ALTER TABLE `tamu`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kehadiran`
--
ALTER TABLE `kehadiran`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `tamu`
--
ALTER TABLE `tamu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
