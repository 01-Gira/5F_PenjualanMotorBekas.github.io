-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 21, 2021 at 05:42 PM
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

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id_cust`, `nama_cust`, `alamat_cust`, `telp_cust`, `nik_cust`) VALUES
('CUST001', 'Gira Muhammad Nur Icharisma', 'Karawang', '0812345456', '1910631170189'),
('CUST002', 'Anggun Lenteraningati', 'Karawang', '0812345456', '1910631170161'),
('CUST003', 'Ahmad Faizal', 'Karawang', '0812345456', '1910631170156'),
('CUST004', 'Muhammad Alama Nasra', 'Cikampek', '0812345456', '1910631170030'),
('CUST005', 'Hafizh Hassan Alauddin Rabbani', 'Karawang', '0812345456', '1910631170191');

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
  `harga_beli` int(255) NOT NULL,
  `tgl_jual` date NOT NULL,
  `harga_jual` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `identitas_motor`
--

INSERT INTO `identitas_motor` (`id_motor`, `NoRegistrasi`, `NamaPemilik`, `Alamat`, `NoRangka`, `NoMesin`, `PlatNO`, `Merk`, `Type_Motor`, `Model`, `TahunPembuatan`, `IsiSilinder`, `BahanBakar`, `WarnaTNKB`, `TahunRegistrasi`, `NoBPKB`, `KodeLokasi`, `masaberlakuSTNK`, `gambar_motor`, `tgl_beli`, `harga_beli`, `tgl_jual`, `harga_jual`) VALUES
(26, 'R001', 'Gira Muhammad Nur Icharisma', 'Adiarsa, Karawang', 'NR001', 'NM001', 'T 01 R1', 'Ducati', 'BigBike', 'V4R Superleggera', 2020, '4', 'Performance 92', 'Merah', 2020, 'B001', 'K01', '2022-01-18', '61bd9f3aa5a5b.jpg', '2021-01-01', 2000000000, '2021-12-18', 2000000000),
(27, 'R002', 'Ahmad Faizal', 'Karawang', 'NR002', 'NM002', 'T 130G T1', 'Honda', 'BigBike', 'CBR1000RR', 2018, '4', 'Shell V-Power', 'Hitam', 2019, 'B002', 'K01', '2021-12-18', '61bda053d9c4f.jpg', '2019-01-18', 1300000000, '2021-12-18', 1300000000),
(28, 'R003', 'Anggun Lentera', 'Karawang', 'NR003', 'NM003', 'B 0011 30', 'KTM', 'NakedBike', 'SUPERDUKE 1290 R', 2020, '2', 'Shell V-Power', 'Hitam', 2020, 'B003', 'K32', '2025-12-18', '61bda16e41cec.jpg', '2020-01-01', 500000000, '2021-12-18', 500000000),
(29, 'R004', 'Alam Nasra', 'Cikampek', 'NR004', 'NM004', 'K 0013 R1', 'Kawasaki', 'BigBike', 'H2R', 2017, '4', 'Premium', 'Hitam', 2017, 'B004', 'K04', '2023-01-01', '61bda208349dc.jpg', '2017-01-18', 2147483647, '2021-12-18', 2147483647);

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

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`id_transaksi`, `tgl_transaksi`, `id_cust`, `id_motor`, `harga_jual`, `harga_jual_real`) VALUES
('TSK001', '2021-12-21', '28', 0, '400000000', '500000000'),
('TSK002', '2021-12-21', '26', 0, '10000000', '500000000'),
('TSK003', '2021-12-21', '27', 0, '2000000000', '500000000');

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
('', 'ALAM', 'Karawang', '', '0000-00-00', ''),
('123', 'ALAM123', 'Karawang', '', '0000-00-00', ''),
('2021-12-21', 'selected', '26', '', '0000-00-00', ''),
('21321', '123', '123', '', '0000-00-00', ''),
('alam', 'alam', 'alam', '', '0000-00-00', ''),
('anggun19161', 'Anggun Lentera', '202cb962ac59075b964b07152d234b70', 'Teller', '2021-12-02', 'Teller'),
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
  ADD KEY `harga_jual` (`harga_jual`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id_transaksi`),
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
  MODIFY `id_motor` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
