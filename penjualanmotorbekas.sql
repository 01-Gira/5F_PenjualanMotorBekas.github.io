-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 06, 2021 at 04:43 PM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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
  `MasaBerlakuSTNK` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `identitas_motor`
--

INSERT INTO `identitas_motor` (`id_motor`, `NoRegistrasi`, `NamaPemilik`, `Alamat`, `NoRangka`, `NoMesin`, `PlatNO`, `Merk`, `Type_Motor`, `Model`, `TahunPembuatan`, `IsiSilinder`, `BahanBakar`, `WarnaTNKB`, `TahunRegistrasi`, `NoBPKB`, `KodeLokasi`, `MasaBerlakuSTNK`) VALUES
(2, '123123', 'GIRAA', 'Karawang', 'Ahmad', 'Ahmad Faizal', 'asd', 'asd', 'asda', 'sdasdas', 0000, '1', 'Premium', 'Hitam', 0000, 'afaf', 'asfaf', '2021-12-06');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` varchar(25) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `password` varchar(25) NOT NULL,
  `hak_akses` enum('Pemilik','Teller','Teknisi','Customer') NOT NULL,
  `create_date` date NOT NULL,
  `manager` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `nama`, `password`, `hak_akses`, `create_date`, `manager`) VALUES
('anggun19161', 'Anggun Lenteraningati	', '12341234', 'Teller', '2021-12-02', 'Teller'),
('faizal19156', 'Ahmad Faizal', '123', 'Customer', '2021-12-02', 'Customer'),
('gira19189', 'Gira Muhammad Nur Icharisma', '123', 'Pemilik', '2021-12-02', 'Owner'),
('hasan19191', 'Hafizh Hasan Alauddin Rabbani	', '12345671', 'Customer', '2021-12-02', 'Customer');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `identitas_motor`
--
ALTER TABLE `identitas_motor`
  ADD PRIMARY KEY (`id_motor`);

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
  MODIFY `id_motor` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
