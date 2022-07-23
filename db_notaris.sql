-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 14, 2020 at 03:48 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_notaris`
--

-- --------------------------------------------------------

--
-- Table structure for table `data_ajb`
--

CREATE TABLE `data_ajb` (
  `Id_Nasabah` varchar(20) NOT NULL,
  `nik` varchar(15) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `tpt` varchar(20) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `jenis_kel` varchar(1) NOT NULL,
  `agama` varchar(20) NOT NULL,
  `alamat` varchar(15) NOT NULL,
  `pekerjaan` varchar(20) NOT NULL,
  `no_hp` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_ajb`
--

INSERT INTO `data_ajb` (`Id_Nasabah`, `nik`, `nama`, `tpt`, `tgl_lahir`, `jenis_kel`, `agama`, `alamat`, `pekerjaan`, `no_hp`) VALUES
('445555', 'q232352', 'bima', 'karawang', '2020-12-09', 'p', 'kristen', 'kosambi', 'kuli', '2147483647');

-- --------------------------------------------------------

--
-- Table structure for table `data_karyawan`
--

CREATE TABLE `data_karyawan` (
  `id_karyawan` varchar(20) NOT NULL,
  `nik` int(20) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `tpt` varchar(30) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `agama` varchar(10) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `no_hp` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_karyawan`
--

INSERT INTO `data_karyawan` (`id_karyawan`, `nik`, `nama`, `tpt`, `tgl_lahir`, `agama`, `alamat`, `no_hp`) VALUES
('20161221565', 317361, 'Yudi S', 'Karawang S', '2020-01-02', 'islam', 'cikalong, jatisari, karawang B', '2147483647');

-- --------------------------------------------------------

--
-- Table structure for table `data_ph`
--

CREATE TABLE `data_ph` (
  `id_nasabah` varchar(20) NOT NULL,
  `nik` int(20) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `tpt` varchar(30) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `jenis_kel` varchar(1) NOT NULL,
  `agama` varchar(10) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `pekerjaan` varchar(30) NOT NULL,
  `no_hp` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `data_roya`
--

CREATE TABLE `data_roya` (
  `id_nasabah` varchar(20) NOT NULL,
  `nik` int(20) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `tpt` varchar(20) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `jenis_kel` varchar(2) NOT NULL,
  `agama` varchar(10) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `pekerjaan` varchar(20) NOT NULL,
  `no_hp` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `nik` varchar(30) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `jk` varchar(10) NOT NULL,
  `alamat` varchar(30) NOT NULL,
  `user` varchar(10) NOT NULL,
  `pass` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`nik`, `nama`, `jk`, `alamat`, `user`, `pass`) VALUES
('q232352', 'pandi', 'L', 'koambi', '6777', '1234');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_ajb`
--
ALTER TABLE `data_ajb`
  ADD PRIMARY KEY (`Id_Nasabah`);

--
-- Indexes for table `data_karyawan`
--
ALTER TABLE `data_karyawan`
  ADD PRIMARY KEY (`id_karyawan`);

--
-- Indexes for table `data_ph`
--
ALTER TABLE `data_ph`
  ADD PRIMARY KEY (`id_nasabah`);

--
-- Indexes for table `data_roya`
--
ALTER TABLE `data_roya`
  ADD PRIMARY KEY (`id_nasabah`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`nik`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
