-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 01, 2022 at 04:41 AM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 7.4.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_tiket`
--

-- --------------------------------------------------------

--
-- Table structure for table `form`
--

CREATE TABLE `form` (
  `id_tiket` int(20) NOT NULL,
  `nama_lengkap` varchar(50) NOT NULL,
  `nomer_identitas` bigint(16) NOT NULL,
  `no_hp` int(13) NOT NULL,
  `tempat_wisata` varchar(50) NOT NULL,
  `tanggal_kunjungan` date NOT NULL,
  `pengunjung_dewasa` int(10) NOT NULL,
  `pengunjung_anak` int(10) NOT NULL,
  `harga_tiket` int(255) NOT NULL,
  `total_bayar` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `form`
--

INSERT INTO `form` (`id_tiket`, `nama_lengkap`, `nomer_identitas`, `no_hp`, `tempat_wisata`, `tanggal_kunjungan`, `pengunjung_dewasa`, `pengunjung_anak`, `harga_tiket`, `total_bayar`) VALUES
(1, 'bagus', 123456, 89755433, 'malbor', '2022-03-02', 2, 1, 10000, 100000),
(14, 'bagas', 2147483647, 42432432, 'pasar gede', '2022-04-14', 2, 3, 5000, 17500),
(15, 'bagas', 2147483647, 987654, 'pasar klewer', '2022-04-14', 2, 3, 7000, 24500),
(16, 'czxc', 1234567891234567, 2147483647, 'pasar gede', '2022-04-23', 1, 1, 5000, 7500),
(17, 'bay', 1234567891234567, 2147483647, 'pasar gede', '2022-04-23', 1, 1, 5000, 7500),
(18, 'bay', 1234567891234567, 2147483647, 'pasar klewer', '2022-04-23', 1, 1, 7000, 10500),
(19, 'bay', 1234567891234567, 2147483647, 'pasar klewer', '2022-04-23', 1, 1, 0, 0),
(20, 'bagas', 2147483647, 42432432, 'pasar gede', '2022-04-14', 2, 3, 5000, 17500),
(21, 'dasd', 543241, 98653, 'pasar gede', '2022-04-03', 2, 1, 10000, 25000),
(22, 'dasd', 543241, 98653, 'pasar gede', '2022-04-03', 2, 1, 10000, 25000),
(23, 'czxc', 1234567891234567, 2147483647, 'pasar klewer', '2022-04-03', 2, 1, 12000, 0),
(24, 'czxc', 1234567891234567, 2147483647, 'pasar klewer', '2022-04-03', 2, 1, 12000, 0),
(25, 'czxc', 1234567891234567, 2147483647, 'pasar klewer', '2022-04-03', 2, 1, 12000, 30000),
(26, 'czxc', 1234567891234567, 2147483647, 'pasar klewer', '2022-04-03', 2, 1, 12000, 30000),
(27, 'czxc', 1234567891234567, 2147483647, 'pasar klewer', '2022-04-03', 2, 1, 12000, 0),
(28, 'Bagus', 1234567891234567, 2147483647, 'pasar gede', '2022-04-02', 1, 1, 10000, 15000),
(29, 'saya', 1234567891234567, 2147483647, 'pasar klewer', '2022-04-04', 2, 5, 12000, 54000),
(30, 'saya', 1234567891234567, 2147483647, 'pasar klewer', '2022-04-04', 2, 5, 12000, 54000);

-- --------------------------------------------------------

--
-- Table structure for table `wisata`
--

CREATE TABLE `wisata` (
  `id_wisata` int(20) NOT NULL,
  `nama_wisata` varchar(50) NOT NULL,
  `alamat_wisata` varchar(50) NOT NULL,
  `harga` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `wisata`
--

INSERT INTO `wisata` (`id_wisata`, `nama_wisata`, `alamat_wisata`, `harga`) VALUES
(1, 'Pasar Gede', 'Jl.Jend. Urip Sumoharjo, Sudiroprajan, Kec. Jebres', '10000'),
(2, 'Pasar Klewer', 'Jl.Doktor Radjiman, Gajahan, Baluwarti, Ps.Kliwon', '12000'),
(3, 'Pasar Nusukan', 'Nusukan, Kec. Banjarsari, Kota Surakarta', '7000');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `form`
--
ALTER TABLE `form`
  ADD PRIMARY KEY (`id_tiket`);

--
-- Indexes for table `wisata`
--
ALTER TABLE `wisata`
  ADD PRIMARY KEY (`id_wisata`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `form`
--
ALTER TABLE `form`
  MODIFY `id_tiket` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `wisata`
--
ALTER TABLE `wisata`
  MODIFY `id_wisata` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
