-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 21, 2018 at 06:12 PM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.2

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
-- Table structure for table `buku`
--

CREATE TABLE `buku` (
  `id_buku` int(11) NOT NULL,
  `judul` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `penulis` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_kat` char(3) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `buku`
--

INSERT INTO `buku` (`id_buku`, `judul`, `penulis`, `id_kat`) VALUES
(1, 'Analisis Data Kuantitatif', 'Matthew dan Michael', 'K'),
(2, 'Analisis Data Kuantitatif', 'Matthew dan Michael', 'K'),
(3, 'Computer Graphic Design', 'Hendi Hendratman', 'D'),
(4, 'Computer Graphic Design', 'Hendi Hendratman', 'D'),
(5, 'PENGANTAR KURIKULUM', 'Tidak Diketahui', 'K'),
(6, 'DESAIN KOMUNIKASI VISUAL', 'Tidak Diketahui ', 'D');

-- --------------------------------------------------------

--
-- Stand-in structure for view `katalogbuku`
-- (See below for the actual view)
--
CREATE TABLE `katalogbuku` (
`No` int(11)
,`judul` varchar(255)
,`penulis` varchar(255)
,`kategori` varchar(100)
,`Kode Rak` char(3)
,`Posisi Buku` varchar(255)
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

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id_kat`, `keterangan`, `id_rak`) VALUES
('D', 'Desain', 'A1'),
('K', 'Kependidikan', 'A2');

-- --------------------------------------------------------

--
-- Table structure for table `rak`
--

CREATE TABLE `rak` (
  `id_rak` char(3) COLLATE utf8mb4_unicode_ci NOT NULL,
  `posisi_rak` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `rak`
--

INSERT INTO `rak` (`id_rak`, `posisi_rak`) VALUES
('A1', 'Lemari A Rak Nomor 1'),
('A2', 'Lemari A Rak Nomor 2'),
('A3', 'Lemari A Rak Nomor 3'),
('A4', 'Lemari A Rak Nomor 4'),
('A5', 'Lemari A Rak Nomor 5');

-- --------------------------------------------------------

--
-- Stand-in structure for view `totalbuku`
-- (See below for the actual view)
--
CREATE TABLE `totalbuku` (
`judulbuku` varchar(255)
,`Total Buku` bigint(21)
);

-- --------------------------------------------------------

--
-- Structure for view `katalogbuku`
--
DROP TABLE IF EXISTS `katalogbuku`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `katalogbuku`  AS  select `bk`.`id_buku` AS `No`,`bk`.`judul` AS `judul`,`bk`.`penulis` AS `penulis`,`k`.`keterangan` AS `kategori`,`r`.`id_rak` AS `Kode Rak`,`r`.`posisi_rak` AS `Posisi Buku` from ((`buku` `bk` left join `kategori` `k` on((`bk`.`id_kat` = `k`.`id_kat`))) left join `rak` `r` on((`k`.`id_rak` = `r`.`id_rak`))) ;

-- --------------------------------------------------------

--
-- Structure for view `totalbuku`
--
DROP TABLE IF EXISTS `totalbuku`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `totalbuku`  AS  select distinct `buku`.`judul` AS `judulbuku`,(select count(`buku`.`judul`) from `buku` where (`buku`.`judul` = `judulbuku`)) AS `Total Buku` from `buku` ;

--
-- Indexes for dumped tables
--

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
-- Indexes for table `rak`
--
ALTER TABLE `rak`
  ADD PRIMARY KEY (`id_rak`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `buku`
--
ALTER TABLE `buku`
  MODIFY `id_buku` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
