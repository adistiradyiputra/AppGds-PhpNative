-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 01, 2019 at 05:28 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 7.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gds`
--

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `nama` text NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `level` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `nama`, `username`, `password`, `level`) VALUES
(3, 'Eris ', 'user', '345', 1),
(5, 'huhu', 'admin', '123', 0);

-- --------------------------------------------------------

--
-- Table structure for table `pelanggaran`
--

CREATE TABLE `pelanggaran` (
  `id` int(20) NOT NULL,
  `pelanggaran` varchar(255) NOT NULL,
  `point` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pelanggaran`
--

INSERT INTO `pelanggaran` (`id`, `pelanggaran`, `point`) VALUES
(2, 'Terlambat', 5),
(3, 'Tawuran', 80),
(4, 'Rambut Panjang', 3),
(5, 'Vandalisme', 10),
(6, 'Berkelahi ', 60),
(7, 'Membawa Rokok', 50),
(8, 'Atribut ', 3),
(9, 'Sepatu Berwarna', 3);

-- --------------------------------------------------------

--
-- Table structure for table `siswa`
--

CREATE TABLE `siswa` (
  `id` int(11) NOT NULL,
  `nisn` int(18) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `kelas` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `siswa`
--

INSERT INTO `siswa` (`id`, `nisn`, `nama`, `kelas`) VALUES
(6, 123456789, 'Adistira', 'XII RPL 1'),
(7, 32092121, 'ROBI', 'XII MM 2'),
(12, 3230101, 'andi', 'XII MM 3'),
(13, 320121112, 'Dimas', 'XII MM 1'),
(14, 3282912, 'Bagus', 'XII RPL 2'),
(15, 2147483647, 'Fery', 'XII MM 4'),
(16, 232143123, 'Friska', 'XII PSPT 1'),
(17, 31312102, 'Isyana Saras', 'XII PSPT 2');

-- --------------------------------------------------------

--
-- Table structure for table `t_pelanggaran`
--

CREATE TABLE `t_pelanggaran` (
  `id` int(50) NOT NULL,
  `id_pelanggaran` varchar(100) NOT NULL,
  `id_siswa` varchar(100) NOT NULL,
  `note` varchar(255) NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_pelanggaran`
--

INSERT INTO `t_pelanggaran` (`id`, `id_pelanggaran`, `id_siswa`, `note`, `tanggal`) VALUES
(36, '2', '14', '30 menit', '2019-11-15'),
(37, '8', '14', 'Bet kelas 10', '2019-11-15'),
(38, '4', '6', 'adadasd', '2019-11-16'),
(39, '5', '13', 'Mencoret Dinding', '2019-11-17'),
(41, '9', '16', 'Warna Hijau', '1970-01-01'),
(42, '7', '6', 'Jam 9.80\r\n', '2019-11-20'),
(43, '5', '16', 'jam 9.00', '1970-01-01'),
(44, '6', '16', 'jam9.00', '1970-01-01');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pelanggaran`
--
ALTER TABLE `pelanggaran`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `t_pelanggaran`
--
ALTER TABLE `t_pelanggaran`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `pelanggaran`
--
ALTER TABLE `pelanggaran`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `siswa`
--
ALTER TABLE `siswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `t_pelanggaran`
--
ALTER TABLE `t_pelanggaran`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
