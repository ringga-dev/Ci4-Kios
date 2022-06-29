-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 25, 2021 at 05:46 AM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `toko-online`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_web`
--

CREATE TABLE `admin_web` (
  `id` int(11) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `no_phone` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `stts` varchar(10) NOT NULL,
  `role` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_web`
--

INSERT INTO `admin_web` (`id`, `fullname`, `email`, `password`, `no_phone`, `image`, `stts`, `role`) VALUES
(3, 'admin', 'admin@gmail.com', '$2y$10$evOCO2SfrG21hJzp03p54uaAMJSMxhhmGIYxvs0.VEn6cad3pMmX.', '082284621151', 'user.png', '1', 1),
(5, 'ringga septia pribadi', 'ringgadev@gmail.com', '123456', '082284621151', '', '2', 2);

-- --------------------------------------------------------

--
-- Table structure for table `mas_barang`
--

CREATE TABLE `mas_barang` (
  `id` int(11) NOT NULL,
  `nama_barang` varchar(255) NOT NULL,
  `harga` int(11) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `kategori_id` int(11) DEFAULT NULL,
  `image_b1` varchar(255) DEFAULT NULL,
  `image_b2` varchar(255) DEFAULT NULL,
  `image_b3` varchar(255) DEFAULT NULL,
  `image_b4` varchar(255) DEFAULT NULL,
  `promo` varchar(255) DEFAULT '0',
  `deskripsi` longtext DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mas_barang`
--

INSERT INTO `mas_barang` (`id`, `nama_barang`, `harga`, `jumlah`, `kategori_id`, `image_b1`, `image_b2`, `image_b3`, `image_b4`, `promo`, `deskripsi`) VALUES
(2, 'naman kjsdf', 50000, 447445, 1, '1632896273_169f445fd8a986d20b73.png', '1632896273_ea642b799f761a67b911.png', '1632896273_54acd33c59d16238f36f.png', '1632896273_96d2a8e57e5de3ceb454.png', '50', '1231'),
(3, ' baju  remaja', 12000, 31, 1, '1633492234_dd8a3b3635e496e839db.png', '1633492234_9a4a16e7da3df1da2134.png', '1633492234_b35e7e18d640d5001bba.png', '1633492234_a5c49b0bcebe6f4f264a.png', '0', 'addvf dfva dad');

-- --------------------------------------------------------

--
-- Table structure for table `mas_kategori`
--

CREATE TABLE `mas_kategori` (
  `id` int(11) NOT NULL,
  `kategory` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mas_kategori`
--

INSERT INTO `mas_kategori` (`id`, `kategory`) VALUES
(1, 'style'),
(3, 'teknologi');

-- --------------------------------------------------------

--
-- Table structure for table `mas_pengguna`
--

CREATE TABLE `mas_pengguna` (
  `id` int(11) NOT NULL,
  `fullname` varchar(50) NOT NULL DEFAULT '',
  `email` varchar(50) NOT NULL DEFAULT '',
  `password` varchar(50) NOT NULL DEFAULT '',
  `image` varchar(50) NOT NULL DEFAULT '',
  `alamat` text NOT NULL,
  `no_phone` varchar(50) NOT NULL DEFAULT '',
  `stts` varchar(50) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mas_pengguna`
--

INSERT INTO `mas_pengguna` (`id`, `fullname`, `email`, `password`, `image`, `alamat`, `no_phone`, `stts`) VALUES
(8, 'ringga', 'ringga1@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'user.id', 'batam', '0912712622', '1'),
(9, 'ringga', 'ringga_user@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'user.id', 'batam', '0912712622', 'not verification');

-- --------------------------------------------------------

--
-- Table structure for table `mas_toko`
--

CREATE TABLE `mas_toko` (
  `nama` int(11) DEFAULT NULL,
  `rating` int(11) DEFAULT NULL,
  `location` int(11) DEFAULT NULL,
  `status` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `mas_transaksi`
--

CREATE TABLE `mas_transaksi` (
  `id` int(11) NOT NULL,
  `id_barang` int(11) NOT NULL,
  `id_pengguna` int(11) DEFAULT NULL,
  `qty` int(11) NOT NULL,
  `stts` varchar(20) NOT NULL,
  `alamat` text DEFAULT NULL,
  `lat` varchar(50) DEFAULT NULL,
  `long` varchar(50) DEFAULT NULL,
  `message` text NOT NULL,
  `date` varchar(50) DEFAULT NULL,
  `send` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mas_transaksi`
--

INSERT INTO `mas_transaksi` (`id`, `id_barang`, `id_pengguna`, `qty`, `stts`, `alamat`, `lat`, `long`, `message`, `date`, `send`) VALUES
(9, 3, 8, 10, 'DI TERIMA', 'rgjeyj', '-8.323819198017635', '115.27608466704584', 'barng  bagus ok punya', '08-10-2021 11:24:26', '08-10-2021 15:17:54'),
(10, 2, 8, 10, 'DI KIRIM', 'rgjeyj', '-8.323819198017635', '115.05479590573532', 'ehe', '08-10-2021 11:24:26', ''),
(11, 3, 8, 10, 'DI PESAN', 'jaijsjs', '-8.143538820909226', '115.22536392386766', 'nsjsns', '08-10-2021 11:45:46', ''),
(12, 2, 8, 10, 'DI PESAN', 'jaijsjs', '-8.402927720392412', '115.65650955476052', 'nsjsns', '08-10-2021 11:45:46', ''),
(13, 2, 8, 10, 'DI PESAN', 'mungo', '-8.225979935616838', '114.50270504752065', 'pedas', '08-10-2021 15:14:15', ''),
(14, 3, 8, 10, 'DI PESAN', 'batam', '-8.225979935616838', '114.61784052849772', 'oke', '08-10-2021 15:16:03', ''),
(15, 2, 8, 10, 'DI PESAN', 'batam', '-8.225979935616838', '115.23572338488064', 'oke', '08-10-2021 15:16:03', ''),
(16, 2, 8, 10, 'DI PESAN', 'batam', '-8.743374670907196', '115.20920170253761', 'pedas', '08-10-2021 17:00:13', ''),
(17, 3, 8, 10, 'DI PESAN', 'batam', '-8.814227619613076', '115.17152857683016', 'pedas', '08-10-2021 17:00:13', '');

-- --------------------------------------------------------

--
-- Table structure for table `rating`
--

CREATE TABLE `rating` (
  `id` int(11) NOT NULL,
  `id_barang` int(11) DEFAULT NULL,
  `start` varchar(50) DEFAULT NULL,
  `id_pengguna` int(11) DEFAULT NULL,
  `komentar` longtext DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `user_key`
--

CREATE TABLE `user_key` (
  `id_pengguna` int(11) DEFAULT NULL,
  `key` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_key`
--

INSERT INTO `user_key` (`id_pengguna`, `key`) VALUES
(8, 'cR_dgujpRVGHp9oSxUF9do:APA91bGAfIa_n4l1Se7xc-E8M5JrX6QKACJPGxtlfRJ37FQ5OHWjuVLmvbCo05nhBma9Gy_EohIxOQAPh0X0YcHJq-01C3P-xAi9hJpPylww1egKn-4ZjAUN5DRYfo4ucZPiegRLfyn3');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_web`
--
ALTER TABLE `admin_web`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mas_barang`
--
ALTER TABLE `mas_barang`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mas_kategori`
--
ALTER TABLE `mas_kategori`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mas_pengguna`
--
ALTER TABLE `mas_pengguna`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mas_transaksi`
--
ALTER TABLE `mas_transaksi`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_barang` (`id_barang`),
  ADD KEY `id_pengguna` (`id_pengguna`);

--
-- Indexes for table `rating`
--
ALTER TABLE `rating`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_barang` (`id_barang`,`id_pengguna`) USING BTREE;

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_web`
--
ALTER TABLE `admin_web`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `mas_barang`
--
ALTER TABLE `mas_barang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `mas_kategori`
--
ALTER TABLE `mas_kategori`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `mas_pengguna`
--
ALTER TABLE `mas_pengguna`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `mas_transaksi`
--
ALTER TABLE `mas_transaksi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `rating`
--
ALTER TABLE `rating`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
