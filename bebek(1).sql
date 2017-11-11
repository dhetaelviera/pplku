-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 06 Nov 2017 pada 04.17
-- Versi Server: 10.1.16-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bebek`
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
  `idIkan` int(11) NOT NULL,
  `opsi` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
(1, '2017-09-12', 0, 0, 'nila', 40, 35000, 1),
(2, '2017-09-12', 0, 0, 'nila', 30, 35000, 1),
(3, '2017-09-13', 0, 0, 'gurami', 30, 6500, 1),
(4, '2017-11-04', 0, 2, 'kakap', 80, 7000, 1);

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
-- Struktur dari tabel `tbmatrik`
--

CREATE TABLE `tbmatrik` (
  `id` int(11) NOT NULL,
  `idPenawaran` int(11) NOT NULL,
  `c1` int(11) NOT NULL,
  `c2` int(11) NOT NULL,
  `c3` int(11) NOT NULL,
  `poin` int(11) NOT NULL
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

INSERT INTO `users` (`id`, `name`, `email`, `alamat`, `kecamatan`, `kabupaten`, `provinsi`, `noTelepon`, `username`, `password`, `sebagai`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'dheta', 'dhetaindraed@gmail.com', '', '', '', '', '0', 'dheta', '$2y$10$If4urSY3QETiJ5mfESnaYOBDoSvDPOQ8WJQgs/1eT1/BcuFFh7uJu', 2, 't0DtIqESxdH4IqoOEV7dZZ4Nskcy6YBMr1hhfUTtlqBKCysl3zJiWqGrwZDx', '2017-10-23 02:54:19', '2017-10-23 02:54:19'),
(2, 'dian', 'dian@gmail.com', '', '', '', '', '0', 'dian', '$2y$10$3W1ch6Cnii8dwaa2VvEzveRIun5AxZx8ukfccKozy1OzZI3JXEqRi', 2, 'u65p6GVEAiBeKL2aJ96q8otyjjWyROtcV9AASSacjnyncbgA19xV22aJHY3N', '2017-10-23 03:02:51', '2017-10-23 03:02:51'),
(3, 'adi', 'adi@gmail.com', '', '', '', '', '0', 'adi', '$2y$10$khQ7E4R2lT83IPkdWsLme.b.D5F.IrxiWV9zO7u.mApNsi02ghdZW', 1, 'GMwnDqIcpEwfnsluXHdiQ6hOU8czdKeXtvSTTcXalR7MNkfqN2EX59rnxnsZ', '2017-10-23 03:06:29', '2017-10-23 03:06:29'),
(4, 'meme', 'meme@gmail.com', '', '', '', '', '0', 'meme', '$2y$10$3aXPJr8t3tD2iiqj3thpO.HKJqzJ1TR37QAmikoP/fka2Xwok4zaG', 2, 'Aou6gA9yxQKv46Y7vAYKzpX2h6gkEyFuMII11VdHckcbGAlYGQCq7b3A6mt0', '2017-10-23 10:11:16', '2017-10-23 10:11:16'),
(5, 'Farisya Ahdin M', 'farisyahdin@gmail.com', 'gebang', '', '', '', '0', 'faris', '$2y$10$2aCY7wCSZs/LmhNmaBGC2eNUmQ796IH/3Tqz.NM8/G2xoUVFN6a1S', 2, 'SyKEN1foYgnn2Lia49Yq3LzlIp3yA1KkTWMcbQxyKIePHNLX5x1kDSJe96of', '2017-10-28 03:03:17', '2017-10-28 03:03:17'),
(6, 'abbi', 'abbi@gmail.com', 'banyuwangi', 'rogojampi', '', '', '0', 'abbi', '$2y$10$1MN7vVXSYxx4W4EtIo6IR.cHtHbBZIWuscBrNZQMlmNyU5bQ.z0v2', 1, 'Y8NTsWLKJQ5gGZxKByv9R5454DuVias8OlHu9iS1MaY36FJIfzwJ3hxCkAiW', '2017-10-30 21:22:55', '2017-10-30 21:22:55'),
(7, 'ainun', 'ainun@gmail.com', 'bondowoso', 'bondowoso', 'bondowoso', '', '081317025552', 'ainun', '$2y$10$mj20Eh.gaqsqL6IHDZh5pOlVI75fF20Yz.IxX.EQ4YGjNeee8zFjW', 1, 'MvuagGFJkg81jAof26PDcaRCgXczmn4xrr4PrVDBOzSgaOxFtihqDTLgbaHh', '2017-10-30 21:44:28', '2017-10-30 21:44:28'),
(8, 'devi', 'devi@gmail.com', 'blitar', 'blitar', 'blitar', 'jawa timur', '081324567812', 'devi', '$2y$10$rp3j.2DvlokWD6wPgV5tCuFTa/F08WqE1.zDC1RzczFgYBdvgPnCe', 2, 'ViynHCGzjEPp5ZcGukCvj9tl9GmAxoE9MYtaNf2Bw81R2A2mHNxisBO5ac7Z', '2017-10-30 21:54:40', '2017-10-30 21:54:40');

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
  ADD PRIMARY KEY (`idIkan`);

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
-- Indexes for table `tbmatrik`
--
ALTER TABLE `tbmatrik`
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
  MODIFY `idIkan` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `penawaranikan`
--
ALTER TABLE `penawaranikan`
  MODIFY `idPenawaran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `status`
--
ALTER TABLE `status`
  MODIFY `idStatus` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tbmatrik`
--
ALTER TABLE `tbmatrik`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
