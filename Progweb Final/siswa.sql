-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 08, 2021 at 01:12 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `siswa`
--

-- --------------------------------------------------------

--
-- Table structure for table `siswa`
--

CREATE TABLE `siswa` (
  `id` int(100) NOT NULL,
  `jenis_pendaftaran` varchar(100) NOT NULL,
  `tanggal_masuk_sekolah` varchar(100) NOT NULL,
  `nis` varchar(100) NOT NULL,
  `nisn` varchar(100) NOT NULL,
  `nomor_ujian` varchar(100) NOT NULL,
  `paud` varchar(100) NOT NULL,
  `tk` varchar(100) NOT NULL,
  `skhun` varchar(100) NOT NULL,
  `ijazah` varchar(100) NOT NULL,
  `hobi` varchar(100) NOT NULL,
  `cita` varchar(100) NOT NULL,
  `nama_lengkap` varchar(100) NOT NULL,
  `kelamin` varchar(100) NOT NULL,
  `nik` varchar(100) NOT NULL,
  `agama` varchar(100) NOT NULL,
  `khusus` varchar(100) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `rt` varchar(100) NOT NULL,
  `rw` varchar(100) NOT NULL,
  `dusun` varchar(100) NOT NULL,
  `desa` varchar(100) NOT NULL,
  `kecamatan` varchar(100) NOT NULL,
  `tempat_tinggal` varchar(100) NOT NULL,
  `transportasi` varchar(100) NOT NULL,
  `hp` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `telp` varchar(100) NOT NULL,
  `bantuan` varchar(100) NOT NULL,
  `no_bantuan` varchar(100) NOT NULL,
  `nama_lengkap_ayah_kandung` varchar(100) NOT NULL,
  `tahun_lahir_ayah_kandung` varchar(100) NOT NULL,
  `pendidikan_ayah_kandung` varchar(100) NOT NULL,
  `pekerjaan_ayah_kandung` varchar(100) NOT NULL,
  `penghasilan_ayah_kandung` varchar(100) NOT NULL,
  `khusus_ayah_kandung` varchar(100) NOT NULL,
  `nama_lengkap_ibu_kandung` varchar(100) NOT NULL,
  `tahun_lahir_ibu_kandung` varchar(100) NOT NULL,
  `pendidikan_ibu_kandung` varchar(100) NOT NULL,
  `pekerjaan_ibu_kandung` varchar(100) NOT NULL,
  `penghasilan_ibu_kandung` varchar(100) NOT NULL,
  `khusus_ibu_kandung` varchar(100) NOT NULL,
  `kewarganegaraan` varchar(100) NOT NULL,
  `kodepos` varchar(100) NOT NULL,
  `tempat_lahir` varchar(100) NOT NULL,
  `tanggal_lahir` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `siswa`
--

INSERT INTO `siswa` (`id`, `jenis_pendaftaran`, `tanggal_masuk_sekolah`, `nis`, `nisn`, `nomor_ujian`, `paud`, `tk`, `skhun`, `ijazah`, `hobi`, `cita`, `nama_lengkap`, `kelamin`, `nik`, `agama`, `khusus`, `alamat`, `rt`, `rw`, `dusun`, `desa`, `kecamatan`, `tempat_tinggal`, `transportasi`, `hp`, `email`, `telp`, `bantuan`, `no_bantuan`, `nama_lengkap_ayah_kandung`, `tahun_lahir_ayah_kandung`, `pendidikan_ayah_kandung`, `pekerjaan_ayah_kandung`, `penghasilan_ayah_kandung`, `khusus_ayah_kandung`, `nama_lengkap_ibu_kandung`, `tahun_lahir_ibu_kandung`, `pendidikan_ibu_kandung`, `pekerjaan_ibu_kandung`, `penghasilan_ibu_kandung`, `khusus_ibu_kandung`, `kewarganegaraan`, `kodepos`, `tempat_lahir`, `tanggal_lahir`) VALUES
(17, '1', '2021-05-04', '33', '3333', '11', '1', '1', '22', '22', '1', '2', 'RINGGO MURTADHO YANWAR', '1', '222', '1', '1', 'SKSAD[', '8', '7', 'DNK', 'AA', 'A', '1', '2', '20222', 'gembrit02@gmail.com', '222', '2', '222', 'ANWAR HADI SUYONO', '1974', '1', '1', '1', '1', 'DYAN SULISTYORINI', '1974', '1', '1', '6', '1', '1', '222', 'NADA', '2021-01-14'),
(24, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `siswa`
--
ALTER TABLE `siswa`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
