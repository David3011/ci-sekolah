-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 28, 2020 at 03:17 AM
-- Server version: 10.1.40-MariaDB
-- PHP Version: 7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `si_sekolah`
--

-- --------------------------------------------------------

--
-- Table structure for table `guru`
--

CREATE TABLE `guru` (
  `nip` int(11) NOT NULL,
  `nama_guru` varchar(50) NOT NULL,
  `alamat` varchar(500) NOT NULL,
  `nohp` varchar(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `guru`
--

INSERT INTO `guru` (`nip`, `nama_guru`, `alamat`, `nohp`) VALUES
(60670, 'Wantono', 'Jalan Merdeka 01, Sidoarjo', '08145782341'),
(60680, 'Sugeng', 'Perum Griya Kencana, Gresik', '08167356490'),
(60690, 'Suparti', 'Jalan Mawar putih, Sedati', '08175296532'),
(60700, 'Nur Jannah', 'Jalan Sukamaju, Jojoran', '08124748241'),
(60710, 'Sukiat Mukidi', 'Perum Adiparna, Mojokerto', '08567246789');

-- --------------------------------------------------------

--
-- Table structure for table `jadwal`
--

CREATE TABLE `jadwal` (
  `id_jadwal` int(11) NOT NULL,
  `id_kelas` varchar(10) NOT NULL,
  `id_mapel` varchar(11) NOT NULL,
  `nip` int(11) NOT NULL,
  `hari` varchar(10) NOT NULL,
  `jam_mulai` time NOT NULL,
  `jam_akhir` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jadwal`
--

INSERT INTO `jadwal` (`id_jadwal`, `id_kelas`, `id_mapel`, `nip`, `hari`, `jam_mulai`, `jam_akhir`) VALUES
(1, 'K001', 'M005', 60700, 'Selasa', '07:00:00', '09:00:00'),
(2, 'K002', 'M001', 60680, 'Senin', '07:00:00', '09:00:00'),
(3, 'K003', 'M002', 60690, 'Rabu', '07:00:00', '09:00:00'),
(4, 'K004', 'M003', 60670, 'Kamis', '07:00:00', '09:00:00'),
(5, 'K005', 'M004', 60710, 'Jumat', '07:00:00', '09:00:00'),
(6, 'K001', 'M001', 60670, 'Selasa', '10:46:00', '11:46:00');
-- --------------------------------------------------------

--
-- Table structure for table `kelas`
--

CREATE TABLE `kelas` (
  `id_kelas` varchar(11) NOT NULL,
  `nama_kelas` varchar(50) NOT NULL,
  `keterangan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kelas`
--

INSERT INTO `kelas` (`id_kelas`, `nama_kelas`, `keterangan`) VALUES
('K001', '7A', '-'),
('K002', '7B', '-'),
('K003', '7C', '-'),
('K004', '7D', '-'),
('K005', '7E', '-');

-- --------------------------------------------------------

--
-- Table structure for table `mapel`
--

CREATE TABLE `mapel` (
  `id_mapel` varchar(11) NOT NULL,
  `nama_mapel` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mapel`
--

INSERT INTO `mapel` (`id_mapel`, `nama_mapel`) VALUES
('M001', 'Bahasa Indonesia'),
('M002', 'Biologi'),
('M003', 'Fisika'),
('M004', 'Kimia'),
('M005', 'Agama Islam');

-- --------------------------------------------------------

--
-- Table structure for table `nilai`
--

CREATE TABLE `nilai` (
  `id_nilai` int(11) NOT NULL AUTO_INCREMENT,
  `nis` int(11) NOT NULL,
  `id_mapel` varchar(11) NOT NULL,
  `tugas1` int(3) NOT NULL,
  `tugas2` int(3) NOT NULL,
  `tugas3` int(3) NOT NULL,
  `tugas4` int(3) NOT NULL,
  `tugas5` int(3) NOT NULL,
  `tugas6` int(3) NOT NULL,
  `tugas7` int(3) NOT NULL,
  `tugas8` int(3) NOT NULL,
  `uts` int(3) NOT NULL,
  `uas` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `nilai`
--

INSERT INTO `nilai` (`id_nilai`, `nis`, `id_mapel`, `tugas1`, `tugas2`, `tugas3`, `tugas4`, `tugas5`, `tugas6`, `tugas7`, `tugas8`, `uts`, `uas`) VALUES
(1, 1468024, 'M001', 80, 85, 76, 75, 81, 83, 88, 86, 81, 77),
(2, 1468123, 'M001', 80, 82, 90, 85, 87, 83, 82, 79, 80, 82),
(3, 14618012, 'M001', 76, 78, 80, 82, 83, 85, 86, 89, 89, 88),
(4, 1468525, 'M001', 90, 87, 85, 90, 88, 85, 84, 93, 81, 80),
(5, 1468707, 'M001', 95, 78, 83, 77, 88, 81, 80, 87, 83, 80);

-- --------------------------------------------------------

--
-- Table structure for table `petugas`
--

CREATE TABLE `petugas` (
  `id_petugas` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(255) NOT NULL,
  `level` varchar(18) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `petugas`
--

INSERT INTO `petugas` (`id_petugas`, `nama`, `username`, `password`, `level`) VALUES
(17606, 'Putri Dewi Sulistyawati', 'administrator', '11111', 'administrator'),
(60670, 'Wantono', '60670', '123123', 'guru'),
(60680, 'Sugeng', '60680', '123412', 'guru'),
(60690, 'Suparti', '60690', '123451', 'guru'),
(60700, 'Nur Jannah', '60700', '1212345', 'guru');

-- --------------------------------------------------------

--
-- Table structure for table `siswa`
--

CREATE TABLE `siswa` (
  `nis` int(11) NOT NULL,
  `id_kelas` varchar(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `tempat_lahir` varchar(30) NOT NULL,
  `ttl` date NOT NULL,
  `agama` varchar(10) NOT NULL,
  `gender` varchar(2) NOT NULL,
  `alamat` varchar(500) NOT NULL,
  `no_tlp` varchar(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `siswa`
--

INSERT INTO `siswa` (`nis`, `id_kelas`, `nama`, `tempat_lahir`, `ttl`, `agama`, `gender`, `alamat`, `no_tlp`) VALUES
(1468024, 'K001', 'Dedo Suharman', 'Sidoarjo', '1997-04-23', 'Katolik', 'L', 'Kendang Asri 6 Blok B No 666, Juanda, Sidoarjo', '08136890231'),
(1468123, 'K001', 'Faizul Hafoz', 'Surabaya', '1998-02-12', 'Islam', 'L', 'Perum Ploso Regency, Ploso, Surabaya', '08168389123'),
(1468525, 'K001', 'Sholiqul Asiz', 'Sidoarjo', '1998-06-13', '', 'L', 'Pabean Regency Blok D No 99, Tulangan, Sidoarjo', '082635182418'),
(1468707, 'K001', 'Afdol Riziq', 'Magetan', '1996-01-01', 'Islam', 'L', 'Perum Kapal Selam Blok X No 555, Perak, Surabaya', '08856254678'),
(14618012, 'K001', 'Rizki Febigin', 'Gresik', '1998-05-18', 'Islam', 'L', 'Geriskan Lor V No 51, Kebungson, Gresik', '08576782121');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `guru`
--
ALTER TABLE `guru`
  ADD PRIMARY KEY (`nip`);

--
-- Indexes for table `jadwal`
--
ALTER TABLE `jadwal`
  ADD PRIMARY KEY (`Id_jadwal`),
  ADD KEY `jadwal kelas` (`id_kelas`),
  ADD KEY `jadwal pelajaran` (`id_mapel`),
  ADD KEY `jadwal guru` (`nip`);

--
-- Indexes for table `kelas`
--
ALTER TABLE `kelas`
  ADD PRIMARY KEY (`id_kelas`);

--
-- Indexes for table `mapel`
--
ALTER TABLE `mapel`
  ADD PRIMARY KEY (`id_mapel`);

--
-- Indexes for table `nilai`
--
ALTER TABLE `nilai`
  ADD PRIMARY KEY (`id_nilai`),
  ADD KEY `nilai mapel` (`id_mapel`),
  ADD KEY `siswa mendapat nilai` (`nis`);

--
-- Indexes for table `petugas`
--
ALTER TABLE `petugas`
  ADD PRIMARY KEY (`id_petugas`);

--
-- Indexes for table `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`nis`),
  ADD KEY `siswa menempati kelas` (`id_kelas`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `jadwal`
--
ALTER TABLE `jadwal`
  ADD CONSTRAINT `jadwal guru` FOREIGN KEY (`nip`) REFERENCES `guru` (`nip`),
  ADD CONSTRAINT `jadwal kelas` FOREIGN KEY (`id_kelas`) REFERENCES `kelas` (`id_kelas`),
  ADD CONSTRAINT `jadwal pelajaran` FOREIGN KEY (`id_mapel`) REFERENCES `mapel` (`id_mapel`);

--
-- Constraints for table `nilai`
--
ALTER TABLE `nilai`
  ADD CONSTRAINT `nilai mapel` FOREIGN KEY (`id_mapel`) REFERENCES `mapel` (`id_mapel`),
  ADD CONSTRAINT `siswa mendapat nilai` FOREIGN KEY (`nis`) REFERENCES `siswa` (`nis`);

--
-- Constraints for table `siswa`
--
ALTER TABLE `siswa`
  ADD CONSTRAINT `siswa menempati kelas` FOREIGN KEY (`id_kelas`) REFERENCES `kelas` (`id_kelas`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
