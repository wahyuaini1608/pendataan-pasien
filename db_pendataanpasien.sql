-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 24, 2022 at 03:08 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.3.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_pendataanpasien`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_pasien`
--

CREATE TABLE `tb_pasien` (
  `id` int(4) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `jk` enum('laki-laki','perempuan') NOT NULL,
  `no_telp` decimal(13,0) NOT NULL,
  `agama` enum('islam','kristen','hindu',' buddha','konghucu',' katolik') NOT NULL,
  `tanggal_masuk` date NOT NULL,
  `gejala` varchar(20) NOT NULL,
  `tempat_lahir` varchar(20) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `no_kamar` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_pasien`
--

INSERT INTO `tb_pasien` (`id`, `nama`, `alamat`, `jk`, `no_telp`, `agama`, `tanggal_masuk`, `gejala`, `tempat_lahir`, `tanggal_lahir`, `no_kamar`) VALUES
(1, 'Agus Wiyono', 'Sayung', 'laki-laki', '82432894619', 'kristen', '2022-10-02', 'muntaber', 'Demak', '1980-07-22', 1),
(2, 'lulu', 'pangg', 'laki-laki', '8347325612', 'islam', '2022-10-12', 'batuk', 'demak', '2022-10-12', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_pasien`
--
ALTER TABLE `tb_pasien`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_pasien`
--
ALTER TABLE `tb_pasien`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
