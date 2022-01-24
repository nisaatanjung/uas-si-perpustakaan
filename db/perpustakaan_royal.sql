-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 24, 2022 at 09:39 AM
-- Server version: 10.4.16-MariaDB
-- PHP Version: 7.3.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `perpustakaan_royal`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_buku`
--

CREATE TABLE `tbl_buku` (
  `kode_buku` varchar(12) NOT NULL,
  `judul` varchar(50) NOT NULL,
  `penulis` varchar(50) NOT NULL,
  `penerbit` varchar(40) NOT NULL,
  `keterangan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_buku`
--

INSERT INTO `tbl_buku` (`kode_buku`, `judul`, `penulis`, `penerbit`, `keterangan`) VALUES
('KB-001', 'Mastering PHP', 'Warman Adhitya', 'Balai Pustaka', 'Sedang dipinjam'),
('KB-002', 'Jago Statistika', 'Nining Surianingsih Putri', 'Airlangga', 'Ada'),
('KB-003', 'Metode Penelitian', 'Muhammad Fikri', 'Intan Pustaka', 'Ada'),
('KB-004', 'Algoritma & Teknik Pemograman', 'Budi Sutedjo, M.Kom', 'Andi Yogyakarta', 'Ada'),
('KB-005', 'Pemrograman Sistem Pakar', 'Anik Andriani, M.Kom', 'Mediakom', 'Sedang dipinjam');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_mahasiswa`
--

CREATE TABLE `tbl_mahasiswa` (
  `nim` int(11) NOT NULL,
  `nm_mhs` varchar(40) NOT NULL,
  `kelas` varchar(20) NOT NULL,
  `prodi` varchar(20) NOT NULL,
  `no_hp` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_mahasiswa`
--

INSERT INTO `tbl_mahasiswa` (`nim`, `nm_mhs`, `kelas`, `prodi`, `no_hp`) VALUES
(18220001, 'Yumna Agnesia', 'SI 7P', 'Sistem Informasi', '081208120812'),
(18220002, 'Nisa', 'SI 7P', 'Sistem Informasi', '081308130813'),
(18220003, 'Purnama', 'SI 7P', 'Sistem Informasi', '081408140814');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `username` varchar(25) NOT NULL,
  `paswd` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `level` int(1) NOT NULL,
  `ket` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`username`, `paswd`, `email`, `nama`, `level`, `ket`) VALUES
('admin', 'admin', 'petugasperpustakaan@gmail.com', 'Maya Sari', 1, 'Staff Perpustakaan'),
('admin1', 'admin1', 'admin1_royal@gmail.com', 'Dian Handayani', 1, 'staf perpustakaan'),
('nisaatanjung', '123456', 'nisaatanjung7@gmail.com', 'Khairunnisa Tanjung', 2, 'Mahasiswa');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_buku`
--
ALTER TABLE `tbl_buku`
  ADD PRIMARY KEY (`kode_buku`);

--
-- Indexes for table `tbl_mahasiswa`
--
ALTER TABLE `tbl_mahasiswa`
  ADD PRIMARY KEY (`nim`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`username`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
