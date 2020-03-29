-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 28 Mar 2020 pada 06.41
-- Versi server: 10.4.10-MariaDB-log
-- Versi PHP: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `penjualan`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `barang`
--

CREATE TABLE `barang` (
  `kd_brg` char(6) NOT NULL,
  `nm_brg` varchar(30) DEFAULT NULL,
  `satuan` varchar(10) DEFAULT NULL,
  `harga` double DEFAULT NULL,
  `harga_beli` double DEFAULT NULL,
  `stok` int(4) DEFAULT NULL,
  `stok_min` int(4) DEFAULT NULL,
  `gambar` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `barang`
--

INSERT INTO `barang` (`kd_brg`, `nm_brg`, `satuan`, `harga`, `harga_beli`, `stok`, `stok_min`, `gambar`) VALUES
('', '', '', 0, 0, 0, 0, ''),
('B-0001', 'buku tulis putih item', 'Buah', 1000, 900, 193, 5, ''),
('B-0002', 'Gethuk magelang enak tenan', 'Box', 1500, 2000, 211, 10, ''),
('B-0003', 'Pensil Lancip tenan', 'Buah', 3000, 2500, 93, 5, ''),
('B-0004', 'Gethuk Lindri', 'Buah', 5000, 4000, 100, 5, ''),
('B-0005', 'Mangga', 'Buah', 10000, 9000, 0, 10, ''),
('B-0006', 'Wingko', 'Buah', 10000, 9000, 100, 10, ''),
('B-0007', 'Mangga', 'Buah', 10000, 9000, 100, 10, ''),
('B-0008', 'HP', 'Buah', 2000000, 1800000, 10, 2, ''),
('B-0009', 'Jam Tangan', 'Buah', 250000, 230000, 10, 2, ''),
('B-9999', 'Bumbu', 'Box', 11, 11, 11, 11, ''),
('FD0001', 'Flash Disk', 'Buah', 100000, 900000, 1, 1, ''),
('w', 'Adminhi', 'sa', 29, 2, 12, 2, '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `berita`
--

CREATE TABLE `berita` (
  `id_berita` int(5) UNSIGNED NOT NULL,
  `id_kategori` int(3) UNSIGNED NOT NULL DEFAULT 0,
  `judul` varchar(100) NOT NULL DEFAULT '',
  `headline` text NOT NULL,
  `isi` text NOT NULL,
  `pengirim` varchar(15) NOT NULL DEFAULT '',
  `tanggal` datetime NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `berita`
--

INSERT INTO `berita` (`id_berita`, `id_kategori`, `judul`, `headline`, `isi`, `pengirim`, `tanggal`) VALUES
(1, 1, 'Arsenal 1  vs Everton 1', 'Arsenal 1  vs Everton 1', 'Arsenal 1  vs Everton 1, yoooooooooooooooo', 'admin', '2013-12-09 15:38:22'),
(2, 3, 'IT Joss', 'IT trend 2014', 'IT trend 2014IT trend 2014IT trend 2014IT trend 2014 IT trend 2014IT trend 2014IT trend 2014IT trend 2014IT trend 2014 IT trend 2014IT trend 2014IT trend 2014 yoyoyoyoyo yoyoyyoo', 'paijo', '2013-12-09 16:16:06'),
(3, 2, 'ZOO', 'Sidang MKD kayak kebun binatang', 'Sidang MKD kayak kebun binatang, hiii gilani\r\n', 'paijo', '2015-12-08 11:00:50');

-- --------------------------------------------------------

--
-- Struktur dari tabel `bukutamu`
--

CREATE TABLE `bukutamu` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama` varchar(15) NOT NULL,
  `situs` varchar(50) NOT NULL,
  `email` varchar(30) NOT NULL,
  `pesan` text NOT NULL,
  `waktu` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `bukutamu`
--

INSERT INTO `bukutamu` (`id`, `nama`, `situs`, `email`, `pesan`, `waktu`) VALUES
(2, 'ajib', 'http://ajibsusanto.blogspot.com', 'ajibsusanto@gmail.com', 'josss gandosssss', '2013-12-23 15:55:47'),
(3, 'AHMAD AULIA WIG', 'http://ok.com', 'aulia@gmail.com', 'ok brooo', '2013-12-23 17:07:56'),
(4, 'Ajib Susanto', 'http://ajibsusanto.net', 'ajibsusanto@gmail.com', 'mohon info lebih lanjut bro', '2018-12-17 07:32:32');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` int(3) UNSIGNED NOT NULL,
  `nm_kategori` varchar(30) NOT NULL DEFAULT '',
  `deskripsi` varchar(200) NOT NULL DEFAULT ''
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `nm_kategori`, `deskripsi`) VALUES
(1, 'Olah Raga', 'Olah Raga'),
(2, 'Politik', 'Politik'),
(3, 'IT', 'IT');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kota`
--

CREATE TABLE `kota` (
  `IdKota` varchar(10) NOT NULL,
  `NamaKota` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `kota`
--

INSERT INTO `kota` (`IdKota`, `NamaKota`) VALUES
('SMG', 'Semarang'),
('KDS', 'Kudus'),
('DMK', 'Demak'),
('KDL', 'Kendal'),
('BTG', 'Batang'),
('PKL', 'Pekalongan');

-- --------------------------------------------------------

--
-- Struktur dari tabel `produk`
--

CREATE TABLE `produk` (
  `produk_id` int(11) NOT NULL,
  `produk_nama` varchar(100) NOT NULL,
  `produk_harga` double NOT NULL,
  `produk_image` varchar(50) NOT NULL,
  `produk_deskripsi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `produk`
--

INSERT INTO `produk` (`produk_id`, `produk_nama`, `produk_harga`, `produk_image`, `produk_deskripsi`) VALUES
(1, 'Hp Oppo R17', 8999000, '1.jpg', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.'),
(2, 'Hp Samsung Galaxy A51', 4399000, '2.jpg', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.'),
(3, 'Hp Asus Max M11', 4790000, '3.jpg', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.'),
(4, 'Hp Samsung Galaxy A20S', 2399000, '4.jpg', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.'),
(5, 'Hp Realme XT', 4399000, '5.jpg', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.'),
(6, 'Hp Oppo A9', 3430000, '6.jpg', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(4) NOT NULL,
  `user_id` varchar(10) NOT NULL,
  `name` varchar(30) DEFAULT NULL,
  `password` varchar(32) DEFAULT NULL,
  `hak_akses` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `user_id`, `name`, `password`, `hak_akses`) VALUES
(1, 'admin', 'a71b', '827ccb0eea8a706c4c34a16891f84e7b', 0),
(2, 'ghiyatsi', 'ghiyatsi', '827ccb0eea8a706c4c34a16891f84e7b', 1),
(6, 'me', 'me', 'ab86a1e1ef70dff97959067b723c5c24', 2),
(7, 'admin1', 'Me', '827ccb0eea8a706c4c34a16891f84e7b', 0),
(8, 'paijo', 'paijo', '44529fdc8afb86d58c6c02cd00c02e43', 0),
(9, 'panjul', 'panjul', '827ccb0eea8a706c4c34a16891f84e7b', 2),
(10, 'najwa', 'najwa', '827ccb0eea8a706c4c34a16891f84e7b', 0),
(11, 'aulia', 'aulia', '827ccb0eea8a706c4c34a16891f84e7b', 2),
(12, 'anis', 'anis', '827ccb0eea8a706c4c34a16891f84e7b', 0),
(13, 'punjul', 'punjul', '2f029d48f3ed3f0d5f3c9a4853c192cf', 1);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`kd_brg`);

--
-- Indeks untuk tabel `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`id_berita`);

--
-- Indeks untuk tabel `bukutamu`
--
ALTER TABLE `bukutamu`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`),
  ADD KEY `id_2` (`id`);

--
-- Indeks untuk tabel `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indeks untuk tabel `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`produk_id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `user_id_idx` (`user_id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `berita`
--
ALTER TABLE `berita`
  MODIFY `id_berita` int(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `bukutamu`
--
ALTER TABLE `bukutamu`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori` int(3) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `produk`
--
ALTER TABLE `produk`
  MODIFY `produk_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50000002;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
