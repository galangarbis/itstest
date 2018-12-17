-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 17, 2018 at 05:14 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `trustmedis`
--

-- --------------------------------------------------------

--
-- Table structure for table `pasien`
--

CREATE TABLE `pasien` (
  `pasien_rm` int(11) NOT NULL,
  `pasien_identitas` text NOT NULL,
  `pasien_nama` varchar(100) NOT NULL,
  `pasien_jenis_kelamin` varchar(25) NOT NULL,
  `pasien_golongan_darah` varchar(5) NOT NULL,
  `pasien_tempat_lahir` text NOT NULL,
  `pasien_tanggal_lahir` date NOT NULL,
  `pasien_no_hp` varchar(25) NOT NULL,
  `pasien_alamat` text NOT NULL,
  `pasien_jenis` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pasien`
--

INSERT INTO `pasien` (`pasien_rm`, `pasien_identitas`, `pasien_nama`, `pasien_jenis_kelamin`, `pasien_golongan_darah`, `pasien_tempat_lahir`, `pasien_tanggal_lahir`, `pasien_no_hp`, `pasien_alamat`, `pasien_jenis`) VALUES
(1, '1928310001', 'BpkHeri', 'laki-laki', 'O', 'Surabaya', '2018-12-17', '081891283901', 'Jln Sidoarjo', 'Rawat Jalan'),
(2, '129830023', 'BpkAndi', 'laki-laki', 'AB', 'Sidoarjo', '2018-12-17', '087761278319', 'Jln Surabaya', 'Rawat Inap'),
(3, '1029193001', 'Ibu Sintya', 'perempuan', 'B', 'Medan', '2018-12-17', '08998172391', 'Jln Jakarta', 'Baru Masuk'),
(4, '9091823201', 'Anak Intan', 'perempuan', 'B', 'Jakarta', '2018-12-17', '088138912', 'Medan', 'Rawat intensif'),
(5, '2342323e3', 'Bpk scavva', 'laki-laki', 'A', 'ascasc', '2018-12-17', 'ascasca', 'ascascasc', 'acasc');

-- --------------------------------------------------------

--
-- Table structure for table `rawat_jalan`
--

CREATE TABLE `rawat_jalan` (
  `rawat_jalan_id` int(11) NOT NULL,
  `rawat_jalan_pasien_rm` int(11) NOT NULL,
  `rawat_jalan_tanggal` date NOT NULL,
  `rawat_jalan_jam` time NOT NULL,
  `rawat_jalan_pembayaran` varchar(25) NOT NULL,
  `rawat_jalan_no_asuransi` int(11) NOT NULL,
  `rawat_jalan_penanggung` varchar(100) NOT NULL,
  `rawat_jalan_kadaluarsa` date NOT NULL,
  `rawat_jalan_kelas` varchar(25) NOT NULL,
  `rawat_jalan_unit` varchar(100) NOT NULL,
  `rawat_jalan_dokter` varchar(100) NOT NULL,
  `rawat_jalan_paket` varchar(25) NOT NULL,
  `rawat_jalan_cara_masuk` varchar(100) NOT NULL,
  `rawat_jalan_tarif` decimal(10,2) NOT NULL,
  `rawat_jalan_status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pasien`
--
ALTER TABLE `pasien`
  ADD PRIMARY KEY (`pasien_rm`);

--
-- Indexes for table `rawat_jalan`
--
ALTER TABLE `rawat_jalan`
  ADD PRIMARY KEY (`rawat_jalan_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pasien`
--
ALTER TABLE `pasien`
  MODIFY `pasien_rm` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `rawat_jalan`
--
ALTER TABLE `rawat_jalan`
  MODIFY `rawat_jalan_id` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
