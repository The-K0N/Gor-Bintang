-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 27 Jan 2022 pada 14.42
-- Versi Server: 5.5.39
-- PHP Version: 5.4.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_gor`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_paket`
--

CREATE TABLE IF NOT EXISTS `tbl_paket` (
`id` int(11) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `no_gedung` varchar(15) NOT NULL,
  `keterangan` varchar(255) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data untuk tabel `tbl_paket`
--

INSERT INTO `tbl_paket` (`id`, `foto`, `no_gedung`, `keterangan`) VALUES
(2, 'gedung2.jpg', 'Gedung 2', 'Fasilitas Menengah'),
(3, 'gedung2.jpg', 'Gedung 2', 'Fasilitas Menengah, Wasit'),
(4, 'gedung2.jpg', 'Gedung 2', 'Fasilitas Menengah, Wasit, Cock'),
(5, 'gedung3.png', 'Gedung 3', 'Lantai Interlock, Wasit'),
(6, 'gedung3.png', 'Gedung 3', 'Lantai Interlock, Free Cock'),
(7, 'gedung3.png', 'Gedung 3', 'Lantai Interlock, Free Cock, Wasit');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_pelanggan`
--

CREATE TABLE IF NOT EXISTS `tbl_pelanggan` (
`id` int(11) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `no_hp` varchar(13) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `keterangan` varchar(255) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data untuk tabel `tbl_pelanggan`
--

INSERT INTO `tbl_pelanggan` (`id`, `foto`, `nama`, `no_hp`, `alamat`, `keterangan`) VALUES
(1, 'Putrii.png', 'Putri Azizah', '081917172368', 'Gersik', 'Pelajar SMA'),
(2, 'Alifya.png', 'Alifya', '081916022543', 'Lembar', 'Kerja');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_user`
--

CREATE TABLE IF NOT EXISTS `tbl_user` (
`id` int(11) NOT NULL,
  `fullname` varchar(50) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `role` enum('admin','pelanggan') NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data untuk tabel `tbl_user`
--

INSERT INTO `tbl_user` (`id`, `fullname`, `username`, `password`, `role`) VALUES
(1, 'Admin', 'admin', 'admin', 'admin'),
(2, 'surya khoirrahman', 'surya', 'surya', 'pelanggan'),
(10, 'Selien Hadi', 'selien', 'selien', ''),
(11, 'Muammar', 'amar', 'amar1234', ''),
(12, 'Roni', 'roni', 'roni', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_paket`
--
ALTER TABLE `tbl_paket`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_pelanggan`
--
ALTER TABLE `tbl_pelanggan`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_paket`
--
ALTER TABLE `tbl_paket`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `tbl_pelanggan`
--
ALTER TABLE `tbl_pelanggan`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
