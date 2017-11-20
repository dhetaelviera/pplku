-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 20 Nov 2017 pada 07.10
-- Versi Server: 10.1.16-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `golekiwak`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `level`
--

CREATE TABLE `level` (
  `idLevel` int(11) NOT NULL,
  `level` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `level`
--

INSERT INTO `level` (`idLevel`, `level`) VALUES
(1, 'agen'),
(2, 'pengusaha');

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `opsiikan`
--

CREATE TABLE `opsiikan` (
  `id` int(11) NOT NULL,
  `opsi` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `opsiikan`
--

INSERT INTO `opsiikan` (`id`, `opsi`) VALUES
(1, 'ikan laut'),
(2, 'ikan tawar');

-- --------------------------------------------------------

--
-- Struktur dari tabel `penawaranikan`
--

CREATE TABLE `penawaranikan` (
  `idPenawaran` int(11) NOT NULL,
  `tanggalPenawaran` date NOT NULL,
  `idAgen` int(11) NOT NULL,
  `opsiIkan` int(11) NOT NULL,
  `jenisIkan` varchar(20) NOT NULL,
  `jumlahIkan` int(11) NOT NULL,
  `hargaIkan` int(11) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1',
  `totalSAW` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `penawaranikan`
--

INSERT INTO `penawaranikan` (`idPenawaran`, `tanggalPenawaran`, `idAgen`, `opsiIkan`, `jenisIkan`, `jumlahIkan`, `hargaIkan`, `status`, `totalSAW`) VALUES
(1, '2017-09-13', 3, 1, 'kakap', 100, 8000, 2, 1.0571428571428572),
(2, '2017-09-13', 3, 1, 'kakap', 80, 7000, 2, 0.9200000000000002),
(3, '2017-11-13', 6, 2, 'tongkol', 25, 8000, 2, 0.9571428571428572),
(4, '2017-11-14', 6, 1, 'gurami', 20, 7500, 1, 0.7085714285714286),
(5, '2017-11-14', 3, 1, 'nila', 20, 8250, 2, 0.7514285714285716),
(6, '2017-11-14', 3, 2, 'kakap', 25, 7800, 1, 0.9457142857142857);

-- --------------------------------------------------------

--
-- Struktur dari tabel `statuspenawaran`
--

CREATE TABLE `statuspenawaran` (
  `idStatus` int(11) NOT NULL,
  `keteranganStatus` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `statuspenawaran`
--

INSERT INTO `statuspenawaran` (`idStatus`, `keteranganStatus`) VALUES
(1, 'ditawarkan'),
(2, 'terjual');

-- --------------------------------------------------------

--
-- Struktur dari tabel `statustransaksi`
--

CREATE TABLE `statustransaksi` (
  `idStatus` int(11) NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `statustransaksi`
--

INSERT INTO `statustransaksi` (`idStatus`, `status`) VALUES
(1, 'terima'),
(2, 'tolak'),
(3, 'proses'),
(4, 'confirmed'),
(5, 'lanjutkan');

-- --------------------------------------------------------

--
-- Struktur dari tabel `transaksi`
--

CREATE TABLE `transaksi` (
  `idTransaksi` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `penawaran` int(11) NOT NULL,
  `agen` int(11) NOT NULL,
  `pengusaha` int(11) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '3'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `transaksi`
--

INSERT INTO `transaksi` (`idTransaksi`, `tanggal`, `penawaran`, `agen`, `pengusaha`, `status`) VALUES
(1, '2017-11-14', 9, 6, 5, 1),
(2, '2017-11-14', 11, 3, 5, 2),
(3, '2017-11-17', 8, 3, 5, 1),
(4, '2017-11-18', 7, 3, 5, 3);

-- --------------------------------------------------------

--
-- Struktur dari tabel `transaksifinal`
--

CREATE TABLE `transaksifinal` (
  `id` int(11) NOT NULL,
  `transaksi` int(11) NOT NULL,
  `bukti` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kecamatan` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kabupaten` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `provinsi` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `noTelepon` varchar(13) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rekening` int(20) NOT NULL,
  `username` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sebagai` int(11) NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `alamat`, `kecamatan`, `kabupaten`, `provinsi`, `noTelepon`, `rekening`, `username`, `password`, `sebagai`, `remember_token`, `created_at`, `updated_at`) VALUES
(3, 'adi', 'adi@gmail.com', 'banyuwangi', 'genteng', 'banyuwangi', '', '0809755438', 123456789, 'adi', '$2y$10$khQ7E4R2lT83IPkdWsLme.b.D5F.IrxiWV9zO7u.mApNsi02ghdZW', 1, 'c6Ou1iqAm46K6vjzXGKkGQ4W1BeWamV7tlBLvdx6hvyYD1cMVIs3ZeaoEsjM', '2017-10-23 03:06:29', '2017-10-23 03:06:29'),
(5, 'Farisya Ahdin M', 'farisyahdin@gmail.com', 'gebang', 'gebang', '', '', '08123017777 ', 98765431, 'faris', '$2y$10$2aCY7wCSZs/LmhNmaBGC2eNUmQ796IH/3Tqz.NM8/G2xoUVFN6a1S', 2, 'KesirMxADzdWACj0oNlkHzkDwnkHS6aw38qWKrN1vMvD5o00GxIMlMmmSi66', '2017-10-28 03:03:17', '2017-10-28 03:03:17'),
(6, 'abbi', 'abbi@gmail.com', 'banyuwangi', 'rogojampi', '', '', '0', 234567891, 'abbi', '$2y$10$1MN7vVXSYxx4W4EtIo6IR.cHtHbBZIWuscBrNZQMlmNyU5bQ.z0v2', 1, 'J5Iv2bKVOJfdm6Qvq0cDQbIOOcQXvUTyxgfS8O4cIYdQMP1PfTvCSJIhXQaG', '2017-10-30 21:22:55', '2017-10-30 21:22:55');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `level`
--
ALTER TABLE `level`
  ADD PRIMARY KEY (`idLevel`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `opsiikan`
--
ALTER TABLE `opsiikan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `penawaranikan`
--
ALTER TABLE `penawaranikan`
  ADD PRIMARY KEY (`idPenawaran`);

--
-- Indexes for table `statuspenawaran`
--
ALTER TABLE `statuspenawaran`
  ADD PRIMARY KEY (`idStatus`);

--
-- Indexes for table `statustransaksi`
--
ALTER TABLE `statustransaksi`
  ADD PRIMARY KEY (`idStatus`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`idTransaksi`);

--
-- Indexes for table `transaksifinal`
--
ALTER TABLE `transaksifinal`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `level`
--
ALTER TABLE `level`
  MODIFY `idLevel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `opsiikan`
--
ALTER TABLE `opsiikan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `penawaranikan`
--
ALTER TABLE `penawaranikan`
  MODIFY `idPenawaran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `statuspenawaran`
--
ALTER TABLE `statuspenawaran`
  MODIFY `idStatus` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `statustransaksi`
--
ALTER TABLE `statustransaksi`
  MODIFY `idStatus` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `idTransaksi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `transaksifinal`
--
ALTER TABLE `transaksifinal`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
