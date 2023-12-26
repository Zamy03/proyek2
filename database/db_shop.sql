-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 08, 2023 at 10:04 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_shop`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `idadmin` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `nomor` int(15) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pakaian`
--

CREATE TABLE `pakaian` (
  `idpakaian` int(11) NOT NULL,
  `namapakaian` varchar(225) NOT NULL,
  `deskripsi` varchar(255) NOT NULL,
  `ukuran` varchar(5) NOT NULL,
  `warna` varchar(25) NOT NULL,
  `kode_pakaian` varchar(3) NOT NULL,
  `stok` int(11) NOT NULL,
  `hargapakaian` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pakaian_keluar`
--

CREATE TABLE `pakaian_keluar` (
  `idpakaiankeluar` int(11) NOT NULL,
  `idpakaian` int(11) NOT NULL,
  `tanggal` timestamp NOT NULL DEFAULT current_timestamp(),
  `penerima` varchar(255) NOT NULL,
  `qty` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pakaian_masuk`
--

CREATE TABLE `pakaian_masuk` (
  `idpakaianmasuk` int(11) NOT NULL,
  `idpakaian` int(11) NOT NULL,
  `tanggal` timestamp NOT NULL DEFAULT current_timestamp(),
  `keterangan` varchar(255) NOT NULL,
  `qty` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `idtransaksi` int(11) NOT NULL,
  `iduser` int(11) NOT NULL,
  `idadmin` int(11) NOT NULL,
  `waktu_transaksi` timestamp NOT NULL DEFAULT current_timestamp(),
  `jumlah` int(255) NOT NULL,
  `metode_pembayaran` varchar(255) NOT NULL,
  `status_transaksi` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `iduser` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `nomor_hp` int(15) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `wishlist`
--

CREATE TABLE `wishlist` (
  `idwishlist` int(11) NOT NULL,
  `iduser` int(11) NOT NULL,
  `idpakaian` int(11) NOT NULL,
  `namapakaian` varchar(255) NOT NULL,
  `hargapakaian` float NOT NULL,
  `gambarpakaian` varchar(255) NOT NULL,
  `wkt_wishlist` timestamp NOT NULL DEFAULT current_timestamp(),
  `status_wishlist` varchar(255) NOT NULL,
  `qty` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`idadmin`);

--
-- Indexes for table `pakaian`
--
ALTER TABLE `pakaian`
  ADD PRIMARY KEY (`idpakaian`);

--
-- Indexes for table `pakaian_keluar`
--
ALTER TABLE `pakaian_keluar`
  ADD PRIMARY KEY (`idpakaiankeluar`),
  ADD KEY `idpakaian` (`idpakaian`);

--
-- Indexes for table `pakaian_masuk`
--
ALTER TABLE `pakaian_masuk`
  ADD PRIMARY KEY (`idpakaianmasuk`),
  ADD KEY `idpakaian` (`idpakaian`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`idtransaksi`),
  ADD KEY `iduser` (`iduser`),
  ADD KEY `idadmin` (`idadmin`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`iduser`);

--
-- Indexes for table `wishlist`
--
ALTER TABLE `wishlist`
  ADD PRIMARY KEY (`idwishlist`),
  ADD KEY `iduser` (`iduser`),
  ADD KEY `idpakaian` (`idpakaian`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `idadmin` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pakaian`
--
ALTER TABLE `pakaian`
  MODIFY `idpakaian` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pakaian_keluar`
--
ALTER TABLE `pakaian_keluar`
  MODIFY `idpakaiankeluar` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pakaian_masuk`
--
ALTER TABLE `pakaian_masuk`
  MODIFY `idpakaianmasuk` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `idtransaksi` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `iduser` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `wishlist`
--
ALTER TABLE `wishlist`
  MODIFY `idwishlist` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `pakaian_keluar`
--
ALTER TABLE `pakaian_keluar`
  ADD CONSTRAINT `pakaian_keluar_ibfk_1` FOREIGN KEY (`idpakaian`) REFERENCES `pakaian` (`idpakaian`);

--
-- Constraints for table `pakaian_masuk`
--
ALTER TABLE `pakaian_masuk`
  ADD CONSTRAINT `pakaian_masuk_ibfk_1` FOREIGN KEY (`idpakaian`) REFERENCES `pakaian` (`idpakaian`);

--
-- Constraints for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD CONSTRAINT `transaksi_ibfk_1` FOREIGN KEY (`iduser`) REFERENCES `user` (`iduser`) ON DELETE CASCADE,
  ADD CONSTRAINT `transaksi_ibfk_2` FOREIGN KEY (`idadmin`) REFERENCES `admin` (`idadmin`);

--
-- Constraints for table `wishlist`
--
ALTER TABLE `wishlist`
  ADD CONSTRAINT `wishlist_ibfk_1` FOREIGN KEY (`iduser`) REFERENCES `user` (`iduser`) ON DELETE CASCADE,
  ADD CONSTRAINT `wishlist_ibfk_2` FOREIGN KEY (`idpakaian`) REFERENCES `pakaian` (`idpakaian`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
