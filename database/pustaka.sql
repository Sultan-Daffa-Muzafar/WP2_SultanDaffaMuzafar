-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 15 Mar 2024 pada 04.05
-- Versi server: 10.4.28-MariaDB
-- Versi PHP: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pustaka`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `buku`
--

CREATE TABLE `buku` (
  `id` int(11) NOT NULL,
  `judul_buku` varchar(128) NOT NULL,
  `id_kategori` int(11) NOT NULL,
  `pengarang` varchar(64) NOT NULL,
  `penerbit` varchar(64) NOT NULL,
  `tahun_terbit` year(4) NOT NULL,
  `isbn` varchar(64) NOT NULL,
  `stok` int(11) NOT NULL,
  `dipinjam` int(11) NOT NULL,
  `dibooking` int(11) NOT NULL,
  `image` varchar(256) DEFAULT 'book-default-cover.jpg'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `buku`
--

INSERT INTO `buku` (`id`, `judul_buku`, `id_kategori`, `pengarang`, `penerbit`, `tahun_terbit`, `isbn`, `stok`, `dipinjam`, `dibooking`, `image`) VALUES
(1, 'Statistika dengan Program Komputer', 1, 'Ahmad Kholiqul Aminl', 'Deep Publishlx ', '2014', '9786022809432', 4, 1, -1, 'img1700838326.jpg'),
(2, 'Mudah Belajar Komputer untuk Anak', 0, 'Bambang Agus Setiawan', 'Huta Media', '2010', '9786025118500', 6, 1, 2, 'img1700839517.jpg'),
(5, 'PHP Komplet', 1, 'Jubilee', 'Elex Media Komputindo', '2014', '8346753547', 7, 1, 1, 'img1700845630.jpg'),
(16, 'Kolaborasi Codeigniter dan Ajax dalam Perancangan CMS', 1, 'Anton Subagia', 'Elex Media komputindo', '2017', '43345356577', 11, 0, 0, 'img1700845727.jpg'),
(17, 'From Hobby to Money', 4, 'Deasylawati', 'Elex Media Komputindo', '2015', '87968686787879', 8, 0, 0, 'img1557403658.jpg'),
(18, 'Buku Saku Pramuka', 8, 'Rudi Himawan', 'Pusat Perbukuan', '2016', '97868687978796', 13, 0, 0, 'img1557404613.jpg'),
(19, 'Rahasia Keajaiban Bumi', 3, 'Nurul Ihsan', 'Luxima', '2014', '565756565768868', 12, 0, 0, 'img1557404689.jpg'),
(20, 'Buku Pintar Puasa Wajib dan Sunnah Sepanjang Masa', 7, 'Ali Hasan', 'Luxima', '2011', '32342342344234', 13, 0, 0, 'img1557404775.jpg'),
(21, 'Aspek Hukum dalam Penelitian', 6, 'Rianto Adi', 'Buku Obor', '2015', '7565646455757', 11, 0, 0, 'img1557404853.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` int(5) NOT NULL,
  `nama_kategori` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `nama_kategori`) VALUES
(1, 'Komputer'),
(2, 'Bahasa'),
(3, 'Sains'),
(4, 'Hobby'),
(5, 'Komunikasi'),
(6, 'Hukum'),
(7, 'Agama'),
(8, 'Populer'),
(9, 'Komik'),
(14, 'Populer'),
(20, 'Laga');

-- --------------------------------------------------------

--
-- Struktur dari tabel `role`
--

CREATE TABLE `role` (
  `Id` int(11) NOT NULL,
  `role` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `role`
--

INSERT INTO `role` (`Id`, `role`) VALUES
(1, 'administrator'),
(2, 'member');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `Id` int(11) NOT NULL,
  `nama` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `image` varchar(128) NOT NULL,
  `password` varchar(256) NOT NULL,
  `role_id` int(11) NOT NULL,
  `is_active` int(1) NOT NULL,
  `tanggal_input` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`Id`, `nama`, `email`, `image`, `password`, `role_id`, `is_active`, `tanggal_input`) VALUES
(2, 'Sultan', 'sultandaffamuzafar4@gmail.com', 'default.jpg', 'PASSWORD', 1, 1, 11),
(3, 'Sultan Daffa Muzafar', 'rianfadilah@gmail.com', 'default.jpg', '$2y$10$l2AkXApWxNgm6oFV1goCtug9Ab2AK2bqi9vf86jR66KEidcDUg7Wq', 2, 1, 1699104402),
(5, 'Daffa', 'romi@gmail.com', 'default.jpg', '$2y$10$3aRokWTIAZqs1mcOCPRv0O.P0uCVOF0XG6J.JBgVJh0CMACL3nz9i', 1, 1, 1699746681),
(7, 'SULTAN DAFFA MUZAFAR', 'sultandaffamuzafar10@gmail.com', 'pro1701937880.jpg', '$2y$10$tbQhq7ZPrpmYss5aRevefOjkMZsnG3tzaDbKEoQcY7qsmUCsx42Wa', 2, 1, 1699747940),
(9, 'SULTAN DAFFA MUZAFAR', 'sultan@gmail.com', 'pro1705219990.jpg', '$2y$10$3NE8NnIXRmhi4KYAt3nZS.MiY.KTOi7t/qPVVngTLMzmIIAoHwqC2', 1, 1, 1700899352),
(10, 'yuniiia agustino', 'yuni@gmail.com', 'default.jpg', '$2y$10$yMDPvWCvX8hxAnmca6V1teyNJ/2Sj0UBlURIPS0fN841NILdxQTLS', 2, 1, 1701906254),
(11, 'SULTAN DAFFA MUZAFAR', 'a@gmail.com', 'default.jpg', '$2y$10$n3tFXtepKMQoEeDO5f3uU.HGhDyUUgrJ8iLm0OFW1UGUscTflHsGe', 2, 1, 1710403925);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `buku`
--
ALTER TABLE `buku`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indeks untuk tabel `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`Id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `buku`
--
ALTER TABLE `buku`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT untuk tabel `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT untuk tabel `role`
--
ALTER TABLE `role`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
