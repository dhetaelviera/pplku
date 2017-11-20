-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 14 Nov 2017 pada 18.05
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
  `status` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `penawaranikan`
--

INSERT INTO `penawaranikan` (`idPenawaran`, `tanggalPenawaran`, `idAgen`, `opsiIkan`, `jenisIkan`, `jumlahIkan`, `hargaIkan`, `status`) VALUES
(7, '2017-09-13', 3, 1, 'kakap', 100, 8000, 2),
(8, '2017-09-13', 3, 1, 'kakap', 80, 7000, 2),
(9, '2017-11-13', 6, 2, 'tongkol', 25, 8000, 2),
(10, '2017-11-14', 6, 1, 'gurami', 20, 7500, 1),
(11, '2017-11-14', 3, 1, 'nila', 20, 8250, 2),
(12, '2017-11-14', 3, 2, 'kakap', 25, 7800, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `status`
--

CREATE TABLE `status` (
  `idStatus` int(11) NOT NULL,
  `keteranganStatus` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `status`
--

INSERT INTO `status` (`idStatus`, `keteranganStatus`) VALUES
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
(4, 'confirmed');

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
(2, '2017-11-14', 11, 3, 5, 3);

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
(1, 'dheta', 'dhetaindraed@gmail.com', '', '', '', '', '0', 0, 'dheta', '$2y$10$If4urSY3QETiJ5mfESnaYOBDoSvDPOQ8WJQgs/1eT1/BcuFFh7uJu', 2, 't0DtIqESxdH4IqoOEV7dZZ4Nskcy6YBMr1hhfUTtlqBKCysl3zJiWqGrwZDx', '2017-10-23 02:54:19', '2017-10-23 02:54:19'),
(2, 'dian', 'dian@gmail.com', '', '', '', '', '0', 0, 'dian', '$2y$10$3W1ch6Cnii8dwaa2VvEzveRIun5AxZx8ukfccKozy1OzZI3JXEqRi', 2, 'u65p6GVEAiBeKL2aJ96q8otyjjWyROtcV9AASSacjnyncbgA19xV22aJHY3N', '2017-10-23 03:02:51', '2017-10-23 03:02:51'),
(3, 'adi', 'adi@gmail.com', '', '', '', '', '0', 123456789, 'adi', '$2y$10$khQ7E4R2lT83IPkdWsLme.b.D5F.IrxiWV9zO7u.mApNsi02ghdZW', 1, 'UmPQuf7nQ8O0pDllKfB8Z6a8DXyCOGhwNs7ipyTrqHaoxh12OzndLX54sNc2', '2017-10-23 03:06:29', '2017-10-23 03:06:29'),
(4, 'meme', 'meme@gmail.com', '', '', '', '', '0', 0, 'meme', '$2y$10$3aXPJr8t3tD2iiqj3thpO.HKJqzJ1TR37QAmikoP/fka2Xwok4zaG', 2, 'Aou6gA9yxQKv46Y7vAYKzpX2h6gkEyFuMII11VdHckcbGAlYGQCq7b3A6mt0', '2017-10-23 10:11:16', '2017-10-23 10:11:16'),
(5, 'Farisya Ahdin M', 'farisyahdin@gmail.com', 'gebang', '', '', '', '0', 98765431, 'faris', '$2y$10$2aCY7wCSZs/LmhNmaBGC2eNUmQ796IH/3Tqz.NM8/G2xoUVFN6a1S', 2, 'I6We4FacV7VQoS1ONxJtDWBhFvXLSchqBqrz7v4knHK2m4JzADmVGBhchKnG', '2017-10-28 03:03:17', '2017-10-28 03:03:17'),
(6, 'abbi', 'abbi@gmail.com', 'banyuwangi', 'rogojampi', '', '', '0', 234567891, 'abbi', '$2y$10$1MN7vVXSYxx4W4EtIo6IR.cHtHbBZIWuscBrNZQMlmNyU5bQ.z0v2', 1, 'w2lRyQS7D0GKuBrrX0rZl2Cixp4y67GTBXmrqGdFrHfjOgY6sEWMUCQFEbso', '2017-10-30 21:22:55', '2017-10-30 21:22:55'),
(7, 'ainun', 'ainun@gmail.com', 'bondowoso', 'bondowoso', 'bondowoso', '', '081317025552', 0, 'ainun', '$2y$10$mj20Eh.gaqsqL6IHDZh5pOlVI75fF20Yz.IxX.EQ4YGjNeee8zFjW', 1, 'MvuagGFJkg81jAof26PDcaRCgXczmn4xrr4PrVDBOzSgaOxFtihqDTLgbaHh', '2017-10-30 21:44:28', '2017-10-30 21:44:28'),
(8, 'devi', 'devi@gmail.com', 'blitar', 'blitar', 'blitar', 'jawa timur', '081324567812', 0, 'devi', '$2y$10$rp3j.2DvlokWD6wPgV5tCuFTa/F08WqE1.zDC1RzczFgYBdvgPnCe', 2, 'ViynHCGzjEPp5ZcGukCvj9tl9GmAxoE9MYtaNf2Bw81R2A2mHNxisBO5ac7Z', '2017-10-30 21:54:40', '2017-10-30 21:54:40'),
(9, 'umi', 'umi@gmail.com', 'jember', 'kaliwates', 'jember', 'kalimantan', '08128738728', 0, 'umi', '$2y$10$qZjUd6mGKpQhJ.UQ.zzmkuNPrVuAViMxf3dI2IgD331h4xVONTh6O', 1, 'iydf88Sf32m1KtdcD4AqPZ5KYpI2O2KtumrhU6H3JFoHgmzis33Bv7NeLTpP', '2017-11-09 19:16:48', '2017-11-09 19:16:48');

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
-- Indexes for table `status`
--
ALTER TABLE `status`
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
-- AUTO_INCREMENT for table `status`
--
ALTER TABLE `status`
  MODIFY `idStatus` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `statustransaksi`
--
ALTER TABLE `statustransaksi`
  MODIFY `idStatus` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `idTransaksi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
