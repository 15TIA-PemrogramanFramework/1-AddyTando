-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 21 Nov 2017 pada 13.05
-- Versi Server: 5.6.24
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `tando`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `murid`
--

CREATE TABLE IF NOT EXISTS `murid` (
  `nisn_murid` int(11) NOT NULL,
  `nama_murid` varchar(255) NOT NULL,
  `alamat_murid` varchar(255) NOT NULL,
  `angkatan` varchar(255) NOT NULL,
  `id_sekolah` int(11) NOT NULL,
  `id_wali` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `murid`
--

INSERT INTO `murid` (`nisn_murid`, `nama_murid`, `alamat_murid`, `angkatan`, `id_sekolah`, `id_wali`) VALUES
(1002, 'Ricky yang', 'jl riau', '2015', 2, 3),
(8989, 'Fajrye', 'Rumbai', '2010', 3, 4),
(55555, 'Vicky Artha Ganteng', 'Rumbai', '1870', 2, 4),
(102013, 'ani', 'rumbai', '1', 1, 1),
(102014, 'Sherly', 'Rumbai', '1', 2, 1),
(102015, 'Susan', 'Riau', '2017', 3, 4),
(102017, 'aaa', 'aaa232', 'aa', 2, 1),
(201020, 'Michael', 'Jl. Yosudarso', '2010', 2, 3);

-- --------------------------------------------------------

--
-- Struktur dari tabel `sekolah`
--

CREATE TABLE IF NOT EXISTS `sekolah` (
  `id_sekolah` int(11) NOT NULL,
  `nama_sekolah` varchar(255) NOT NULL,
  `alamat_sekolah` varchar(255) NOT NULL,
  `tingkat_sekolah` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `sekolah`
--

INSERT INTO `sekolah` (`id_sekolah`, `nama_sekolah`, `alamat_sekolah`, `tingkat_sekolah`) VALUES
(2, 'Darma Yudha', 'Riau Ujung', 'SMA'),
(3, 'Dharma Loka', 'Sigungung', 'SMA');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`username`, `password`, `status`) VALUES
('addy', 'addy', 'staff'),
('Anjasmara', 'lolipop', 'staff'),
('tando', 'tando', 'admin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `wali`
--

CREATE TABLE IF NOT EXISTS `wali` (
  `id_wali` int(11) NOT NULL,
  `nama_wali` varchar(255) NOT NULL,
  `alamat_wali` varchar(255) NOT NULL,
  `nohp_wali` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `wali`
--

INSERT INTO `wali` (`id_wali`, `nama_wali`, `alamat_wali`, `nohp_wali`) VALUES
(3, 'tando', 'limbung', '082284379360'),
(4, 'Erick', 'Riau', '0822843799999');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `murid`
--
ALTER TABLE `murid`
  ADD PRIMARY KEY (`nisn_murid`);

--
-- Indexes for table `sekolah`
--
ALTER TABLE `sekolah`
  ADD PRIMARY KEY (`id_sekolah`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `wali`
--
ALTER TABLE `wali`
  ADD PRIMARY KEY (`id_wali`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `sekolah`
--
ALTER TABLE `sekolah`
  MODIFY `id_sekolah` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `wali`
--
ALTER TABLE `wali`
  MODIFY `id_wali` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
