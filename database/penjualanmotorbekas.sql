-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 18, 2021 at 06:35 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `penjualanmotorbekas`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id_cust` varchar(255) NOT NULL,
  `nama_cust` varchar(255) NOT NULL,
  `alamat_cust` varchar(255) NOT NULL,
  `telp_cust` varchar(255) NOT NULL,
  `nik_cust` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `identitas_motor`
--

CREATE TABLE `identitas_motor` (
  `id_motor` int(10) NOT NULL,
  `NoRegistrasi` varchar(10) NOT NULL,
  `NamaPemilik` varchar(30) NOT NULL,
  `Alamat` varchar(50) NOT NULL,
  `NoRangka` varchar(17) NOT NULL,
  `NoMesin` varchar(12) NOT NULL,
  `PlatNO` varchar(10) NOT NULL,
  `Merk` varchar(20) NOT NULL,
  `Type_Motor` varchar(20) NOT NULL,
  `Model` varchar(20) NOT NULL,
  `TahunPembuatan` year(4) NOT NULL,
  `IsiSilinder` varchar(10) NOT NULL,
  `BahanBakar` varchar(20) NOT NULL,
  `WarnaTNKB` varchar(10) NOT NULL,
  `TahunRegistrasi` year(4) NOT NULL,
  `NoBPKB` varchar(15) NOT NULL,
  `KodeLokasi` varchar(10) NOT NULL,
  `masaberlakuSTNK` date NOT NULL,
  `gambar_motor` varchar(255) NOT NULL,
  `tgl_beli` date NOT NULL,
  `harga_beli` varchar(255) NOT NULL,
  `tgl_jual` date NOT NULL,
  `harga_jual` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `identitas_motor`
--

INSERT INTO `identitas_motor` (`id_motor`, `NoRegistrasi`, `NamaPemilik`, `Alamat`, `NoRangka`, `NoMesin`, `PlatNO`, `Merk`, `Type_Motor`, `Model`, `TahunPembuatan`, `IsiSilinder`, `BahanBakar`, `WarnaTNKB`, `TahunRegistrasi`, `NoBPKB`, `KodeLokasi`, `masaberlakuSTNK`, `gambar_motor`, `tgl_beli`, `harga_beli`, `tgl_jual`, `harga_jual`) VALUES
(5, '123131', 'GIRA MUHAMMAD NUR ICHARISMA ', 'Karawang', '123131', '131313', 'T 1313 1', 'Honda', '13131', '1313', 2021, '4', 'Premium', 'Hitam', 2021, '1231313', '131313', '0000-00-00', '', '2021-12-15', '131313131', '0000-00-00', '131313'),
(6, '123123', 'GIRA MUHAMMAD NUR ICHARISMA ', '123123', '123ad', 'adasd', 'asdasd', 'Honda', 'asdasdasd', '12313', 2021, '4', 'Premium', 'Hitam', 2021, '123123', '313', '0000-00-00', '', '2021-12-18', '13131313', '0000-00-00', '13131313'),
(9, 'asdasdasd', 'asd', 'asd', 'asd', 'asd', 'asd', 'Honda', 'asdasd', '123', 2021, '1', 'Premium', 'Hitam', 2021, 'B001', '123', '0000-00-00', '', '2021-12-18', '1241414', '0000-00-00', '12313'),
(10, '12313', 'GIRA MUHAMMAD NUR ICHARISMA ', 'Karawang', '123', '1321', '1313', 'Honda', '1313', '1313', 2021, '4', 'Premium', 'Hitam', 2021, '1313', '31313', '2021-12-18', '', '2021-12-18', '1313131', '0000-00-00', '1313');

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `id_transaksi` varchar(255) NOT NULL,
  `tgl_transaksi` date NOT NULL,
  `id_cust` varchar(255) NOT NULL,
  `id_motor` int(10) NOT NULL,
  `harga_jual` varchar(255) NOT NULL,
  `harga_jual_real` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` varchar(25) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `hak_akses` enum('Pemilik','Teller','Teknisi','Customer') NOT NULL,
  `create_date` date NOT NULL,
  `manager` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `nama`, `password`, `hak_akses`, `create_date`, `manager`) VALUES
('anggun19161', 'Anggun', '202cb962ac59075b964b07152d234b70', 'Teller', '2021-12-02', 'Teller'),
('faizal19156', 'Ahmad Faizal', '202cb962ac59075b964b07152d234b70', 'Teknisi', '2021-12-02', 'Teknisi'),
('gira19189', 'Gira Muhammad Nur Icharisma', '202cb962ac59075b964b07152d234b70', 'Pemilik', '2021-12-02', 'Owner'),
('hasan19191', 'Hafizh Hassan ', '202cb962ac59075b964b07152d234b70', 'Customer', '2021-12-02', 'Customer');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id_cust`);

--
-- Indexes for table `identitas_motor`
--
ALTER TABLE `identitas_motor`
  ADD PRIMARY KEY (`id_motor`),
  ADD UNIQUE KEY `harga_jual` (`harga_jual`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id_transaksi`),
  ADD KEY `id_motor` (`id_motor`),
  ADD KEY `id_cust` (`id_cust`),
  ADD KEY `harga_jual` (`harga_jual`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `identitas_motor`
--
ALTER TABLE `identitas_motor`
  MODIFY `id_motor` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD CONSTRAINT `transaksi_ibfk_1` FOREIGN KEY (`id_motor`) REFERENCES `identitas_motor` (`id_motor`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `transaksi_ibfk_2` FOREIGN KEY (`id_cust`) REFERENCES `customer` (`id_cust`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
