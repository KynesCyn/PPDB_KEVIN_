-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 07, 2024 at 03:39 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ppdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `data_bayar`
--

CREATE TABLE `data_bayar` (
  `id` int(11) NOT NULL,
  `no_pendaftaran` varchar(302) NOT NULL,
  `tanggal` varchar(3200) NOT NULL,
  `nama_siswa` varchar(2300) NOT NULL,
  `asal_sekolah` varchar(3000) NOT NULL,
  `gelombang` varchar(2300) NOT NULL,
  `jumlah` bigint(230) NOT NULL,
  `bayar` bigint(210) NOT NULL,
  `kembalian` bigint(230) NOT NULL,
  `sisa` bigint(200) NOT NULL,
  `keterangan` varchar(2300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `data_bayar`
--

INSERT INTO `data_bayar` (`id`, `no_pendaftaran`, `tanggal`, `nama_siswa`, `asal_sekolah`, `gelombang`, `jumlah`, `bayar`, `kembalian`, `sisa`, `keterangan`) VALUES
(19, 'BYR001', '15-05-2024', 'Agoy', 'TB', 'pertama', 2, 30000, 29998, 0, 'Lunas'),
(20, 'BYR002', '15-05-2024', 'Tuti', 'Widhi', 'kedua', 2000000, 3000000, 1000000, 0, 'Lunas'),
(21, 'BYR005', '15-05-2024', 'Bagas', 'dsadas', 'pertama', 2, 9, 7, 0, 'Lunas'),
(22, 'BYR004', '16-05-2024', 'Riko', 'DOSQ', 'kedua', 2000000, 2000000, 0, 0, 'Lunas'),
(23, 'BYR003', '17-05-2024', 'Ubay', 'CMB', 'kedua', 2000000, 2000000, 0, 0, 'Lunas'),
(24, 'BYR006', '17-05-2024', 'Andika', 'DOSQ', 'ketiga', 400000, 400000, 0, 0, 'Lunas'),
(25, 'BYR007', '07-06-2024', 'Kevin', 'SMk', 'pertama', 0, 0, 0, 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `data_ortu`
--

CREATE TABLE `data_ortu` (
  `id` int(111) NOT NULL,
  `nama_siswa` varchar(123) NOT NULL,
  `nama_ortu` varchar(123) NOT NULL,
  `alamat_ortu` varchar(123) NOT NULL,
  `no_telOrtu` varchar(123) NOT NULL,
  `pekerjaan_ortu` varchar(123) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `data_ortu`
--

INSERT INTO `data_ortu` (`id`, `nama_siswa`, `nama_ortu`, `alamat_ortu`, `no_telOrtu`, `pekerjaan_ortu`) VALUES
(32, 'Widhi', 'Kepo', 'Belakang Pom CIkeas', '', 'Kepo'),
(33, 'Bagas', '', '', '', ''),
(34, 'Riko', 'Kepo', 'Leuwinanggung', '', 'apaja'),
(35, 'Ubay', '', '', '', ''),
(36, 'Andika', '', '', '', ''),
(37, 'Kevin', 'a', 'a', '', 'a');

-- --------------------------------------------------------

--
-- Table structure for table `data_siswa`
--

CREATE TABLE `data_siswa` (
  `id` int(111) NOT NULL,
  `no_pendaftaran` varchar(123) NOT NULL,
  `nama_siswa` varchar(123) NOT NULL,
  `ttl` varchar(123) NOT NULL,
  `jenis_kel` varchar(123) NOT NULL,
  `agama` varchar(123) NOT NULL,
  `no_telSiswa` varchar(123) NOT NULL,
  `asal_sekolah` varchar(123) NOT NULL,
  `alamat_sekolah` varchar(123) NOT NULL,
  `jurusan` varchar(123) NOT NULL,
  `tanggal` varchar(111) NOT NULL,
  `ukuran` varchar(1231) NOT NULL,
  `gelombang` varchar(3213) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `data_siswa`
--

INSERT INTO `data_siswa` (`id`, `no_pendaftaran`, `nama_siswa`, `ttl`, `jenis_kel`, `agama`, `no_telSiswa`, `asal_sekolah`, `alamat_sekolah`, `jurusan`, `tanggal`, `ukuran`, `gelombang`) VALUES
(32, 'BYR002', 'Widhi', '10-05-2007', 'Perempuan', 'Islam', '089723', 'CMB', 'Cikeas', 'REKAYASA PERANGKAT LUNAK', '12-05-2024', 'L', 'kedua'),
(33, 'BYR003', 'Bagas', '085155024200', 'Perempuan', 'Islam', '085155024200', 'CMB', 'Leuwinanggung', 'PEMASARAN', '12-05-2024', 'L', 'kedua'),
(34, 'BYR004', 'Riko', '08-09-2009', 'Laki-Laki', 'Islam', '0898743', 'DOSQ', 'Leuwinanggung', 'MANANJEMEN PERKANTORAN', '13-05-2024', 'XXL', 'kedua'),
(35, 'BYR005', 'Ubay', '085155024200', 'Perempuan', 'Islam', 'dasdsa', 'dsadas', 'Leuwinanggung', 'REKAYASA PERANGKAT LUNAK', '15-05-2024', 'L', 'pertama'),
(36, 'BYR006', 'Andika', '21-09-2003', 'Laki-Laki', 'Katolik', '089832', 'DOSQ', 'Wanher', 'AKUTANSI KEUANGAN DAN LEMBAGA', '17-05-2024', 'S', 'ketiga'),
(37, 'BYR007', 'Kevin', '22-08-2023', 'Laki-Laki', 'Islam', '0897586850', 'MTS NEGERI', 'jakarta', 'REKAYASA PERANGKAT LUNAK', '07-06-2024', 'L', 'pertama');

-- --------------------------------------------------------

--
-- Table structure for table `data_wali`
--

CREATE TABLE `data_wali` (
  `id` int(111) NOT NULL,
  `nama_siswa` varchar(123) NOT NULL,
  `nama_wali` varchar(123) NOT NULL,
  `alamat_wali` varchar(123) NOT NULL,
  `no_telWali` varchar(123) NOT NULL,
  `pekerjaan_wali` varchar(123) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `data_wali`
--

INSERT INTO `data_wali` (`id`, `nama_siswa`, `nama_wali`, `alamat_wali`, `no_telWali`, `pekerjaan_wali`) VALUES
(32, 'Widhi', '', '', '', ''),
(33, 'Bagas', '', '', '', ''),
(34, 'Riko', '', '', '', ''),
(35, 'Ubay', '', '', '', ''),
(36, 'Andika', '', '', '', ''),
(37, 'Kevin', 'a', 'a', '', 'a');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_gel`
--

CREATE TABLE `tbl_gel` (
  `id` int(123) NOT NULL,
  `gelombang` varchar(213) NOT NULL,
  `nominal` bigint(123) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_gel`
--

INSERT INTO `tbl_gel` (`id`, `gelombang`, `nominal`) VALUES
(1, 'pertama', 200000),
(2, 'kedua', 300000),
(3, 'ketiga', 400000);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(111) NOT NULL,
  `nama` varchar(111) NOT NULL,
  `username` varchar(111) NOT NULL,
  `password` varchar(111) NOT NULL,
  `level` enum('Admin','Petugas') NOT NULL,
  `gambar` varchar(999) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `nama`, `username`, `password`, `level`, `gambar`) VALUES
(1, 'Kevin', 'kevin', '123', '', 'rey.png'),
(2, 'Widhi', 'widhi', '123', '', 'bayu.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_bayar`
--
ALTER TABLE `data_bayar`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `data_ortu`
--
ALTER TABLE `data_ortu`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `data_siswa`
--
ALTER TABLE `data_siswa`
  ADD PRIMARY KEY (`id`),
  ADD KEY `gelombang` (`gelombang`(768));

--
-- Indexes for table `data_wali`
--
ALTER TABLE `data_wali`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `tbl_gel`
--
ALTER TABLE `tbl_gel`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data_bayar`
--
ALTER TABLE `data_bayar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `data_siswa`
--
ALTER TABLE `data_siswa`
  MODIFY `id` int(111) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `tbl_gel`
--
ALTER TABLE `tbl_gel`
  MODIFY `id` int(123) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(111) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
