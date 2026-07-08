-- phpMyAdmin SQL Dump
-- version 5.2.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jul 08, 2026 at 03:33 PM
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
-- Database: `jadwal_siswa`
--

-- --------------------------------------------------------

--
-- Table structure for table `guru`
--

CREATE TABLE `guru` (
  `kd_guru` varchar(10) NOT NULL,
  `nm_guru` varchar(100) DEFAULT NULL,
  `jenkel` enum('L','P') DEFAULT NULL,
  `pend_terakhir` varchar(50) DEFAULT NULL,
  `hp` varchar(20) DEFAULT NULL,
  `alamat` text,
  `id_user` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `guru`
--

INSERT INTO `guru` (`kd_guru`, `nm_guru`, `jenkel`, `pend_terakhir`, `hp`, `alamat`, `id_user`) VALUES
('G-001', 'monic', 'P', 'sma', '112', 'q', 10),
('G-002', '1', 'L', '1', '1', '1', 29),
('G-003', 'siska', 'P', 'sma', '0909090', 'jl sekolah rt000', 32);

-- --------------------------------------------------------

--
-- Table structure for table `jadwal_kelas`
--

CREATE TABLE `jadwal_kelas` (
  `No` varchar(50) NOT NULL,
  `Kelas` varchar(50) NOT NULL,
  `Thn_Ajaran` varchar(20) NOT NULL,
  `Semester` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jadwal_kelas`
--

INSERT INTO `jadwal_kelas` (`No`, `Kelas`, `Thn_Ajaran`, `Semester`) VALUES
('1', 'pai1', '2025/2026', 'Genap'),
('2', 'ipa1', '2026/2027', 'Genap');

-- --------------------------------------------------------

--
-- Table structure for table `kelas`
--

CREATE TABLE `kelas` (
  `id_kelas` varchar(10) NOT NULL,
  `nm_kelas` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kelas`
--

INSERT INTO `kelas` (`id_kelas`, `nm_kelas`) VALUES
('1', 'teknik informatika'),
('M-001', 'pai1'),
('M-002', 'ipa1'),
('M-003', 'ips1'),
('M-004', 'ips2');

-- --------------------------------------------------------

--
-- Table structure for table `mapel`
--

CREATE TABLE `mapel` (
  `kd_mapel` varchar(10) NOT NULL,
  `nm_mapel` varchar(10) DEFAULT NULL,
  `kkm` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mapel`
--

INSERT INTO `mapel` (`kd_mapel`, `nm_mapel`, `kkm`) VALUES
('M-001', 'mtk', 70),
('M-002', 'pai', 75),
('M-003', 'tik', 70),
('M-004', 'pai', 60),
('M-005', 'fisika', 75);

-- --------------------------------------------------------

--
-- Table structure for table `siswa`
--

CREATE TABLE `siswa` (
  `id_siswa` int(11) NOT NULL,
  `Nis` varchar(10) NOT NULL,
  `Id_user` int(11) NOT NULL,
  `Nm_siswa` varchar(100) NOT NULL,
  `jenkel` enum('L','P') NOT NULL,
  `Hp` varchar(15) DEFAULT NULL,
  `Id_kelas` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `siswa`
--

INSERT INTO `siswa` (`id_siswa`, `Nis`, `Id_user`, `Nm_siswa`, `jenkel`, `Hp`, `Id_kelas`) VALUES
(1, '2511500079', 27, 'monica', 'P', '112', 1),
(2, '2511500072', 28, 'moni', 'L', '1122', 1);

-- --------------------------------------------------------

--
-- Table structure for table `skripsi_2511500079`
--

CREATE TABLE `skripsi_2511500079` (
  `id_skripsi_079` varchar(5) CHARACTER SET utf8mb4 NOT NULL,
  `judul_skripsi_079` varchar(50) CHARACTER SET utf8mb4 NOT NULL,
  `topik_skripsi_079` varchar(20) CHARACTER SET utf8mb4 NOT NULL,
  `semester_079` varchar(20) CHARACTER SET utf8mb4 NOT NULL,
  `thn_ajaran_079` varchar(20) CHARACTER SET utf8mb4 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `skripsi_2511500079`
--

INSERT INTO `skripsi_2511500079` (`id_skripsi_079`, `judul_skripsi_079`, `topik_skripsi_079`, `semester_079`, `thn_ajaran_079`) VALUES
('S001', 'masyarakat', 'membangun keluarga', 'Genap', '2025/2026'),
('S002', 'pembangunan', 'membahas biaya', 'Genap', '2024/2025');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `role` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `role`) VALUES
(1, 'admin', '12345', 'admin'),
(5, 'G-001', '1234', 'guru'),
(6, 'G-001', '1234', 'guru'),
(7, 'G-001', '1234', 'guru'),
(8, 'G-001', '1234', 'guru'),
(9, 'G-001', '1234', 'guru'),
(10, 'G-001', '1234', 'guru'),
(11, '2511500079', 'root', 'siswa'),
(12, '', '1234', 'siswa'),
(13, '', '1234', 'siswa'),
(15, '2511500079', 'root', 'siswa'),
(16, '2511500079', 'root', 'siswa'),
(17, '2511500079', 'root', 'siswa'),
(18, '2511500079', 'root', 'siswa'),
(19, '2511500079', 'root', 'siswa'),
(20, '2511500079', 'root', 'siswa'),
(21, '2511500079', 'root', 'siswa'),
(22, '2511500079', 'root', 'siswa'),
(23, '2511500079', 'root', 'siswa'),
(24, '2511500079', 'root', 'siswa'),
(25, '2511500079', 'root', 'siswa'),
(26, '2511500079', 'root', 'siswa'),
(27, '2511500079', 'root', 'siswa'),
(28, '2511500072', '12345', 'siswa'),
(29, 'G-002', '1234', 'guru'),
(30, '2511500071', '1234', 'siswa'),
(31, '2511500071', '1234', 'siswa'),
(32, 'G-003', '1234', 'guru'),
(33, '2511500071', '1234', 'siswa'),
(34, '9000', '1234', 'skripsi_079'),
(35, '9000', '1234', 'skripsi_079'),
(36, '9000', '1234', 'skripsi_079'),
(37, '9000', '1234', 'skripsi_079'),
(38, '9000', '1234', 'skripsi_079'),
(39, '9000', '1234', 'skripsi_079'),
(40, '9000', '1234', 'skripsi_079'),
(41, '9000', '1234', 'skripsi_079'),
(42, '9000', '1234', 'skripsi_079'),
(43, '9000', '1234', 'skripsi_079'),
(44, '9000', '1234', 'skripsi_079'),
(45, '1', '1234', 'siswa'),
(46, '1', '1234', 'siswa'),
(47, '1', '1234', 'siswa'),
(48, '1', '1234', 'siswa'),
(49, '2', '1234', 'siswa'),
(50, '3', '1234', 'siswa'),
(51, 'S002', '1234', 'skripsi_079'),
(52, 'S001', '1234', 'skripsi_079'),
(53, 'S002', '1234', 'skripsi_079'),
(54, 'S003', '1234', 'skripsi_079');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `guru`
--
ALTER TABLE `guru`
  ADD PRIMARY KEY (`kd_guru`);

--
-- Indexes for table `kelas`
--
ALTER TABLE `kelas`
  ADD PRIMARY KEY (`id_kelas`);

--
-- Indexes for table `mapel`
--
ALTER TABLE `mapel`
  ADD PRIMARY KEY (`kd_mapel`);

--
-- Indexes for table `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`id_siswa`),
  ADD UNIQUE KEY `Nis` (`Nis`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `siswa`
--
ALTER TABLE `siswa`
  MODIFY `id_siswa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
