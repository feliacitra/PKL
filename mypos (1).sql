-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 16, 2020 at 01:51 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.3.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mypos`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_berkas`
--

CREATE TABLE `tb_berkas` (
  `kd_berkas` int(11) NOT NULL,
  `nama_berkas` varchar(255) DEFAULT NULL,
  `keterangan_berkas` varchar(255) DEFAULT NULL,
  `tipe_berkas` varchar(100) DEFAULT NULL,
  `ukuran_berkas` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_berkas`
--

INSERT INTO `tb_berkas` (`kd_berkas`, `nama_berkas`, `keterangan_berkas`, `tipe_berkas`, `ukuran_berkas`) VALUES
(1, 'Book1.xlsx', 'file dinsos', '.xlsx', 9.83),
(2, 'ccb.xls', 'berkas pegawai dinsos', '.xls', 29.5),
(3, 'ccb1.xls', 'gggg', '.xls', 29.5),
(4, 'Book1_(2).xlsx', 'dahdbgebf', '.xlsx', 9.83),
(5, 'Book1_(2)1.xlsx', 'felindut', '.xlsx', 9.83),
(6, 'Book1_(2)2.xlsx', 'sass', '.xlsx', 9.83),
(7, 'Book1_(2).xlsx', 'ya', '.xlsx', 9.83),
(8, 'Book1_(2)1.xlsx', 'ya', '.xlsx', 9.83);

-- --------------------------------------------------------

--
-- Table structure for table `tb_upload`
--

CREATE TABLE `tb_upload` (
  `kd_upload` int(11) NOT NULL,
  `nama_upload` varchar(255) DEFAULT NULL,
  `keterangan_upload` varchar(255) DEFAULT NULL,
  `tipe_upload` varchar(100) DEFAULT NULL,
  `ukuran_upload` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_upload`
--

INSERT INTO `tb_upload` (`kd_upload`, `nama_upload`, `keterangan_upload`, `tipe_upload`, `ukuran_upload`) VALUES
(1, 'Book1_(2).xlsx', NULL, '.xlsx', 9.83),
(2, 'Book1_(2)1.xlsx', 'tayo', '.xlsx', 9.83),
(3, 'Book1_(2)2.xlsx', 'felindut', '.xlsx', 9.83),
(4, 'Book1_(2)3.xlsx', 'oke\r\n', '.xlsx', 9.83);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `username` varchar(40) NOT NULL,
  `password` varchar(40) NOT NULL,
  `name` varchar(100) NOT NULL,
  `address` varchar(200) DEFAULT NULL,
  `level` int(1) NOT NULL COMMENT '1. admin 2. dinas'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `username`, `password`, `name`, `address`, `level`) VALUES
(1, 'admin', 'd033e22ae348aeb5660fc2140aec35850c4da997', 'isnaini', 'lamongan', 1),
(2, 'dinsos', '4303ca5d230640d2b5868586e5ac77fcf75a4153', 'dinas sosial', 'purwokerto', 2),
(3, 'kemendikbud', 'c81a771a6ea6416c4ee789364fc1b2135a95dace', 'Kementrian Pendidikan dan Kebudayaan', 'Purwokerto', 2);

-- --------------------------------------------------------

--
-- Table structure for table `user_access`
--

CREATE TABLE `user_access` (
  `id` int(11) NOT NULL,
  `level` int(11) NOT NULL,
  `useraccess` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_access`
--

INSERT INTO `user_access` (`id`, `level`, `useraccess`) VALUES
(1, 1, 1),
(2, 1, 2),
(3, 2, 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_berkas`
--
ALTER TABLE `tb_berkas`
  ADD PRIMARY KEY (`kd_berkas`);

--
-- Indexes for table `tb_upload`
--
ALTER TABLE `tb_upload`
  ADD PRIMARY KEY (`kd_upload`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `user_access`
--
ALTER TABLE `user_access`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_berkas`
--
ALTER TABLE `tb_berkas`
  MODIFY `kd_berkas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tb_upload`
--
ALTER TABLE `tb_upload`
  MODIFY `kd_upload` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user_access`
--
ALTER TABLE `user_access`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
