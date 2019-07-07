-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 04 Jul 2019 pada 14.51
-- Versi server: 10.1.40-MariaDB
-- Versi PHP: 7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `booksdb`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `books`
--

CREATE TABLE `books` (
  `idbuku` int(11) NOT NULL,
  `judul` varchar(100) DEFAULT NULL,
  `pengarang` varchar(100) DEFAULT NULL,
  `penerbit` varchar(100) DEFAULT NULL,
  `idkategori` int(11) DEFAULT NULL,
  `imgfile` varchar(100) DEFAULT NULL,
  `sinopsis` text,
  `thnterbit` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `books`
--

INSERT INTO `books` (`idbuku`, `judul`, `pengarang`, `penerbit`, `idkategori`, `imgfile`, `sinopsis`, `thnterbit`) VALUES
(25, 'Mahouka', 'Tsutomu', 'Shosetsuka', 1, '704366.png', 'Series novel ini menceritakan tentang masa setelah perang dunia ke 3 dimana sihir dan penyihir menguasai dunia yang \"terluka\" pasca perang.', 2008),
(28, 'coba', 'tambah', 'buku', 1, 'buat', 'paging', 2019),
(29, 'coba', 'tambah', 'buku', 1, 'buat', 'paging', 2019),
(30, 'coba', 'tambah', 'buku', 1, 'buat', 'paging', 2019),
(31, 'coba', 'tambah', 'buku', 1, 'buat', 'paging', 2019),
(32, 'coba', 'tambah', 'buku', 1, 'buat', 'paging', 2019),
(33, 'coba', 'tambah', 'buku', 1, 'buat', 'paging', 2019),
(34, 'coba', 'tambah', 'buku', 1, 'buat', 'paging', 2019),
(35, 'coba', 'tambah', 'buku', 1, 'buat', 'paging', 2019),
(36, 'coba', 'tambah', 'buku', 1, 'buat', 'paging', 2019),
(37, 'coba', 'tambah', 'buku', 1, 'buat', 'paging', 2019),
(38, 'coba', 'tambah', 'buku', 1, 'buat', 'paging', 2019),
(39, 'coba', 'tambah', 'buku', 1, 'buat', 'paging', 2019),
(40, 'coba', 'tambah', 'buku', 1, 'buat', 'paging', 2019),
(41, 'coba', 'tambah', 'buku', 1, 'buat', 'paging', 2019),
(42, 'coba', 'tambah', 'buku', 1, 'buat', 'paging', 2019),
(43, 'coba', 'tambah', 'buku', 1, 'buat', 'paging', 2019),
(44, 'coba', 'tambah', 'buku', 1, 'buat', 'paging', 2019),
(45, 'coba', 'tambah', 'buku', 1, 'buat', 'paging', 2019),
(46, 'coba', 'tambah', 'buku', 1, 'buat', 'paging', 2019),
(47, 'coba', 'tambah', 'buku', 1, 'buat', 'paging', 2019),
(48, 'coba', 'tambah', 'buku', 1, 'buat', 'paging', 2019),
(49, 'coba', 'tambah', 'buku', 1, 'buat', 'paging', 2019),
(50, 'coba', 'tambah', 'buku', 1, 'buat', 'paging', 2019),
(51, 'coba', 'tambah', 'buku', 1, 'buat', 'paging', 2019),
(52, 'coba', 'tambah', 'buku', 1, 'buat', 'paging', 2019),
(53, 'coba', 'tambah', 'buku', 1, 'buat', 'paging', 2019),
(54, 'coba', 'tambah', 'buku', 1, 'buat', 'paging', 2019),
(55, 'coba', 'tambah', 'buku', 1, 'buat', 'paging', 2019),
(56, 'coba', 'tambah', 'buku', 1, 'buat', 'paging', 2019),
(57, 'coba', 'tambah', 'buku', 1, 'buat', 'paging', 2019),
(58, 'coba', 'tambah', 'buku', 1, 'buat', 'paging', 2019),
(59, 'coba', 'tambah', 'buku', 1, 'buat', 'paging', 2019),
(60, 'coba', 'tambah', 'buku', 1, 'buat', 'paging', 2019),
(61, 'coba', 'tambah', 'buku', 1, 'buat', 'paging', 2019),
(62, 'coba', 'tambah', 'buku', 1, 'buat', 'paging', 2019),
(63, 'coba', 'tambah', 'buku', 1, 'buat', 'paging', 2019),
(64, 'coba', 'tambah', 'buku', 1, 'buat', 'paging', 2019),
(65, 'coba', 'tambah', 'buku', 1, 'buat', 'paging', 2019),
(66, 'coba', 'tambah', 'buku', 1, 'buat', 'paging', 2019),
(67, 'coba', 'tambah', 'buku', 1, 'buat', 'paging', 2019),
(68, 'coba', 'tambah', 'buku', 1, 'buat', 'paging', 2019),
(69, 'coba', 'tambah', 'buku', 1, 'buat', 'paging', 2019),
(70, 'coba', 'tambah', 'buku', 1, 'buat', 'paging', 2019),
(71, 'coba', 'tambah', 'buku', 1, 'buat', 'paging', 2019),
(72, 'coba', 'tambah', 'buku', 1, 'buat', 'paging', 2019),
(73, 'coba', 'tambah', 'buku', 1, 'buat', 'paging', 2019),
(74, 'coba', 'tambah', 'buku', 1, 'buat', 'paging', 2019),
(75, 'coba', 'tambah', 'buku', 1, 'buat', 'paging', 2019),
(76, 'coba', 'tambah', 'buku', 1, 'buat', 'paging', 2019),
(77, 'coba', 'tambah', 'buku', 1, 'buat', 'paging', 2019),
(78, 'Flat Earth Conspiracy', 'Eric Dubay', 'PT.Gramedia', 1, 'download.jpg', 'Buku ini berisi tentang 101 fakta bumi datar yang merupakan terjermahan dari katalog Eric Dubay', 2017);

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori`
--

CREATE TABLE `kategori` (
  `idkategori` int(11) NOT NULL,
  `kategori` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kategori`
--

INSERT INTO `kategori` (`idkategori`, `kategori`) VALUES
(1, 'Buku Teks'),
(2, 'Majalah'),
(3, 'Skripsi'),
(4, 'Thesis'),
(5, 'Disertasi'),
(6, 'p yakhi');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `username` varchar(50) NOT NULL,
  `password` varchar(32) DEFAULT NULL,
  `fullname` varchar(100) DEFAULT NULL,
  `role` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`username`, `password`, `fullname`, `role`) VALUES
('admin', '123456', 'Administrator', 'admin'),
('caloz', '12345', 'Mikhail', 'operator'),
('calvin', '123', 'Calvin Mikhailouzna', 'operator');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`idbuku`);

--
-- Indeks untuk tabel `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`idkategori`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `books`
--
ALTER TABLE `books`
  MODIFY `idbuku` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=79;

--
-- AUTO_INCREMENT untuk tabel `kategori`
--
ALTER TABLE `kategori`
  MODIFY `idkategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
