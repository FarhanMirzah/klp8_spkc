-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 06, 2022 at 06:23 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kos`
--

-- --------------------------------------------------------

--
-- Table structure for table `analisa`
--

CREATE TABLE `analisa` (
  `id_kriteria` int(11) NOT NULL,
  `id_kos` int(11) NOT NULL,
  `nilai` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `analisa`
--

INSERT INTO `analisa` (`id_kriteria`, `id_kos`, `nilai`) VALUES
(1, 1, '1'),
(2, 1, '3'),
(3, 1, '3'),
(4, 1, '3'),
(1, 2, '2'),
(2, 2, '3'),
(3, 2, '3'),
(4, 2, '2');

-- --------------------------------------------------------

--
-- Table structure for table `kos`
--

CREATE TABLE `kos` (
  `id_kos` int(11) NOT NULL,
  `nama_kos` varchar(20) NOT NULL,
  `nama_pemilik` varchar(20) NOT NULL,
  `no_telp` int(11) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `fasilitas` varchar(50) NOT NULL,
  `biaya` varchar(50) NOT NULL,
  `keamanan` varchar(50) NOT NULL,
  `jarak` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kos`
--

INSERT INTO `kos` (`id_kos`, `nama_kos`, `nama_pemilik`, `no_telp`, `alamat`, `fasilitas`, `biaya`, `keamanan`, `jarak`) VALUES
(1, 'a', 'a', 0, 'a', '1', '3', '3', '3'),
(2, 'b', 'b', 1, 'Pekanbaru', '2', '3', '3', '2');

-- --------------------------------------------------------

--
-- Table structure for table `kriteria`
--

CREATE TABLE `kriteria` (
  `id_kriteria` int(11) NOT NULL,
  `atribut` varchar(50) NOT NULL,
  `bobot_nilai` varchar(50) NOT NULL,
  `nama_kriteria` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kriteria`
--

INSERT INTO `kriteria` (`id_kriteria`, `atribut`, `bobot_nilai`, `nama_kriteria`) VALUES
(1, 'benefit', '5', 'Fasilitas'),
(2, 'cost', '1', 'Biaya'),
(3, 'benefit', '3', 'Keamanan'),
(4, 'cost', '5', 'Jarak');

-- --------------------------------------------------------

--
-- Table structure for table `t_kriteria`
--

CREATE TABLE `t_kriteria` (
  `id_tkriteria` int(11) NOT NULL,
  `id_kriteria` int(11) NOT NULL,
  `keterangan` varchar(100) NOT NULL,
  `nkriteria` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_kriteria`
--

INSERT INTO `t_kriteria` (`id_tkriteria`, `id_kriteria`, `keterangan`, `nkriteria`) VALUES
(1, 1, 'Kasur,Alamari', '1'),
(2, 1, 'kasur, alamari,meja', '2'),
(3, 1, 'kasur,almari,meja,kipas angin', '3'),
(4, 1, 'kasur,almari,meja,kursi,kipas angin', '4'),
(5, 1, 'kasur,alamari,meja,kursi,kipas angin,tv', '5'),
(6, 2, '>=500000', '1'),
(7, 2, '>500000<300000', '2'),
(8, 2, '>300000<250000', '3'),
(9, 2, '>250000<200000', '4'),
(10, 2, '<=200000', '5'),
(11, 3, 'dekat kampus,ruangan kamar luas', '1'),
(12, 3, 'dekat kampus,dekat warung makan', '2'),
(13, 3, 'dekat kampus,dekat warung makan,alfamart dan pasar', '3'),
(14, 3, 'dekat dekat kampus,dekat warung makan,alfamart dan mall', '4'),
(15, 3, 'dekat kampus,dekat warung makan,alfamart,pasar,atm,mall', '5'),
(16, 4, 'keamanan dari cctv', '1'),
(17, 4, 'penjaga kos', '2'),
(18, 4, 'tinggal bersama pemilik kos', '3'),
(19, 4, 'bersama pemilik kos dan terdapat cctv', '4'),
(20, 4, 'tanggung jawab bersama', '5'),
(21, 5, '>=1KM', '1'),
(22, 5, '>1KM<500M', '2'),
(23, 5, '>500M<250M', '3'),
(24, 5, '>250m<50M', '4'),
(25, 5, '<=50M', '5'),
(26, 6, 'terdapat jadwal piket anak kos', '1'),
(27, 6, 'kebersihan diambil dari pihak luar', '2'),
(28, 6, 'pemilik kos membantu kebersihan hunian kos', '3'),
(29, 6, 'kebersihan menjadi tanggung jawab bersama', '4'),
(30, 6, 'kebersihan rutin menjadi tanggung jawab pemilik kos', '5');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kos`
--
ALTER TABLE `kos`
  ADD PRIMARY KEY (`id_kos`);

--
-- Indexes for table `kriteria`
--
ALTER TABLE `kriteria`
  ADD PRIMARY KEY (`id_kriteria`);

--
-- Indexes for table `t_kriteria`
--
ALTER TABLE `t_kriteria`
  ADD PRIMARY KEY (`id_tkriteria`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kriteria`
--
ALTER TABLE `kriteria`
  MODIFY `id_kriteria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `t_kriteria`
--
ALTER TABLE `t_kriteria`
  MODIFY `id_tkriteria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
