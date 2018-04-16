-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 16, 2018 at 05:05 AM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `psb`
--

-- --------------------------------------------------------

--
-- Table structure for table `anggota`
--

CREATE TABLE `anggota` (
  `id_anggota` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `alamat` text NOT NULL,
  `angkatan` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `buku`
--

CREATE TABLE `buku` (
  `id_buku` int(11) NOT NULL,
  `judul` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `penulis` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_kat` char(3) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Stand-in structure for view `DetailBuku`
-- (See below for the actual view)
--
CREATE TABLE `DetailBuku` (
`judulbuku` varchar(255)
,`Total Buku` bigint(21)
,`Buku Yang dipinjam` bigint(21)
,`Sisa Buku` bigint(22)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `KatalogBuku`
-- (See below for the actual view)
--
CREATE TABLE `KatalogBuku` (
`No` int(11)
,`judul` varchar(255)
,`penulis` varchar(255)
,`id_kat` char(3)
,`kategori` varchar(100)
,`Kode_Rak` char(3)
,`Posisi_Buku` varchar(255)
);

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id_kat` char(3) COLLATE utf8mb4_unicode_ci NOT NULL,
  `keterangan` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `id_rak` char(3) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `peminjaman`
--

CREATE TABLE `peminjaman` (
  `id_peminjaman` int(11) NOT NULL,
  `id_anggota` int(11) NOT NULL,
  `id_buku` int(11) NOT NULL,
  `tanggal_pinjam` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Stand-in structure for view `peminjamanBuku`
-- (See below for the actual view)
--
CREATE TABLE `peminjamanBuku` (
`id_peminjaman` int(11)
,`tanggal_pinjam` datetime
,`idBuku` int(11)
,`nama` varchar(255)
,`judul` varchar(255)
);

-- --------------------------------------------------------

--
-- Table structure for table `petugas`
--

CREATE TABLE `petugas` (
  `id_petugas` int(11) NOT NULL,
  `nama_petugas` varchar(30) NOT NULL,
  `jabatan_petugas` varchar(30) NOT NULL,
  `AccessLevel` int(2) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `petugas`
--

INSERT INTO `petugas` (`id_petugas`, `nama_petugas`, `jabatan_petugas`, `AccessLevel`, `username`, `password`) VALUES
(1, 'Administrator', 'Pengembang IT', 0, 'admin', '21232f297a57a5a743894a0e4a801fc3');

-- --------------------------------------------------------

--
-- Table structure for table `rak`
--

CREATE TABLE `rak` (
  `id_rak` char(3) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lemari_rak` char(2) COLLATE utf8mb4_unicode_ci NOT NULL,
  `posisi_rak` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure for view `DetailBuku`
--
DROP TABLE IF EXISTS `DetailBuku`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `DetailBuku`  AS  select distinct `buku`.`judul` AS `judulbuku`,(select count(`buku`.`judul`) from `buku` where (`buku`.`judul` = `judulbuku`)) AS `Total Buku`,(select count(`peminjamanBuku`.`judul`) from `peminjamanBuku` where (`peminjamanBuku`.`judul` = `judulbuku`)) AS `Buku Yang dipinjam`,((select count(`buku`.`judul`) from `buku` where (`buku`.`judul` = `judulbuku`)) - (select count(`peminjamanBuku`.`judul`) from `peminjamanBuku` where (`peminjamanBuku`.`judul` = `judulbuku`))) AS `Sisa Buku` from `buku` ;

-- --------------------------------------------------------

--
-- Structure for view `KatalogBuku`
--
DROP TABLE IF EXISTS `KatalogBuku`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `KatalogBuku`  AS  select `bk`.`id_buku` AS `No`,`bk`.`judul` AS `judul`,`bk`.`penulis` AS `penulis`,`bk`.`id_kat` AS `id_kat`,`k`.`keterangan` AS `kategori`,`r`.`id_rak` AS `Kode_Rak`,`r`.`posisi_rak` AS `Posisi_Buku` from ((`buku` `bk` left join `kategori` `k` on((`bk`.`id_kat` = `k`.`id_kat`))) left join `rak` `r` on((`k`.`id_rak` = `r`.`id_rak`))) ;

-- --------------------------------------------------------

--
-- Structure for view `peminjamanBuku`
--
DROP TABLE IF EXISTS `peminjamanBuku`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `peminjamanBuku`  AS  select `p`.`id_peminjaman` AS `id_peminjaman`,`p`.`tanggal_pinjam` AS `tanggal_pinjam`,`p`.`id_buku` AS `idBuku`,`a`.`nama` AS `nama`,`b`.`judul` AS `judul` from ((`peminjaman` `p` left join `anggota` `a` on((`p`.`id_anggota` = `a`.`id_anggota`))) left join `buku` `b` on((`p`.`id_buku` = `b`.`id_buku`))) ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `anggota`
--
ALTER TABLE `anggota`
  ADD PRIMARY KEY (`id_anggota`);

--
-- Indexes for table `buku`
--
ALTER TABLE `buku`
  ADD PRIMARY KEY (`id_buku`),
  ADD KEY `kategori` (`id_kat`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kat`),
  ADD KEY `id_rak` (`id_rak`);

--
-- Indexes for table `peminjaman`
--
ALTER TABLE `peminjaman`
  ADD PRIMARY KEY (`id_peminjaman`);

--
-- Indexes for table `petugas`
--
ALTER TABLE `petugas`
  ADD PRIMARY KEY (`id_petugas`);

--
-- Indexes for table `rak`
--
ALTER TABLE `rak`
  ADD PRIMARY KEY (`id_rak`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `anggota`
--
ALTER TABLE `anggota`
  MODIFY `id_anggota` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `buku`
--
ALTER TABLE `buku`
  MODIFY `id_buku` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `peminjaman`
--
ALTER TABLE `peminjaman`
  MODIFY `id_peminjaman` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `petugas`
--
ALTER TABLE `petugas`
  MODIFY `id_petugas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
