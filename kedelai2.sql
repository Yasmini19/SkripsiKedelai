-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 21 Apr 2020 pada 06.42
-- Versi server: 10.1.36-MariaDB
-- Versi PHP: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kedelai2`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(50) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id_admin`, `username`, `password`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3');

-- --------------------------------------------------------

--
-- Struktur dari tabel `harga`
--

CREATE TABLE `harga` (
  `id_harga` int(11) NOT NULL,
  `id_tahun` int(11) NOT NULL,
  `jumlah_harga` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `harga`
--

INSERT INTO `harga` (`id_harga`, `id_tahun`, `jumlah_harga`) VALUES
(1, 1, '3084'),
(2, 2, '3278'),
(3, 3, '3499'),
(4, 4, '3876'),
(5, 5, '4036');

-- --------------------------------------------------------

--
-- Struktur dari tabel `impor`
--

CREATE TABLE `impor` (
  `id_impor` int(11) NOT NULL,
  `id_tahun` int(11) NOT NULL,
  `jumlah_impor` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `impor`
--

INSERT INTO `impor` (`id_impor`, `id_tahun`, `jumlah_impor`) VALUES
(1, 1, '1365252'),
(2, 2, '1192717'),
(3, 3, '1115793'),
(4, 4, '1086178'),
(5, 5, '1132145');

-- --------------------------------------------------------

--
-- Struktur dari tabel `konsumsi`
--

CREATE TABLE `konsumsi` (
  `id_konsumsi` int(11) NOT NULL,
  `id_tahun` int(11) NOT NULL,
  `jumlah_konsumsi` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `konsumsi`
--

INSERT INTO `konsumsi` (`id_konsumsi`, `id_tahun`, `jumlah_konsumsi`) VALUES
(1, 1, '8,4'),
(2, 2, '7,98'),
(3, 3, '7,22'),
(4, 4, '7,79'),
(5, 5, '8,3');

-- --------------------------------------------------------

--
-- Struktur dari tabel `produksi`
--

CREATE TABLE `produksi` (
  `id_produksi` int(11) NOT NULL,
  `id_tahun` int(11) NOT NULL,
  `jumlah_produksi` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `produksi`
--

INSERT INTO `produksi` (`id_produksi`, `id_tahun`, `jumlah_produksi`) VALUES
(1, 1, '67306'),
(2, 2, '6716'),
(3, 3, '72348'),
(4, 4, '80835'),
(5, 5, '74762');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tahun`
--

CREATE TABLE `tahun` (
  `id_tahun` int(11) NOT NULL,
  `tahun_ke` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tahun`
--

INSERT INTO `tahun` (`id_tahun`, `tahun_ke`) VALUES
(1, 2002),
(2, 2003),
(3, 2004),
(4, 2005),
(5, 2006);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indeks untuk tabel `harga`
--
ALTER TABLE `harga`
  ADD PRIMARY KEY (`id_harga`),
  ADD KEY `id_tahun` (`id_tahun`);

--
-- Indeks untuk tabel `impor`
--
ALTER TABLE `impor`
  ADD PRIMARY KEY (`id_impor`),
  ADD KEY `id_tahun` (`id_tahun`);

--
-- Indeks untuk tabel `konsumsi`
--
ALTER TABLE `konsumsi`
  ADD PRIMARY KEY (`id_konsumsi`),
  ADD KEY `id_tahun` (`id_tahun`);

--
-- Indeks untuk tabel `produksi`
--
ALTER TABLE `produksi`
  ADD PRIMARY KEY (`id_produksi`),
  ADD KEY `id_tahun` (`id_tahun`);

--
-- Indeks untuk tabel `tahun`
--
ALTER TABLE `tahun`
  ADD PRIMARY KEY (`id_tahun`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `harga`
--
ALTER TABLE `harga`
  MODIFY `id_harga` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `impor`
--
ALTER TABLE `impor`
  MODIFY `id_impor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `konsumsi`
--
ALTER TABLE `konsumsi`
  MODIFY `id_konsumsi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `produksi`
--
ALTER TABLE `produksi`
  MODIFY `id_produksi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `tahun`
--
ALTER TABLE `tahun`
  MODIFY `id_tahun` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `harga`
--
ALTER TABLE `harga`
  ADD CONSTRAINT `harga_ibfk_1` FOREIGN KEY (`id_tahun`) REFERENCES `tahun` (`id_tahun`);

--
-- Ketidakleluasaan untuk tabel `impor`
--
ALTER TABLE `impor`
  ADD CONSTRAINT `impor_ibfk_1` FOREIGN KEY (`id_tahun`) REFERENCES `tahun` (`id_tahun`);

--
-- Ketidakleluasaan untuk tabel `konsumsi`
--
ALTER TABLE `konsumsi`
  ADD CONSTRAINT `konsumsi_ibfk_1` FOREIGN KEY (`id_tahun`) REFERENCES `tahun` (`id_tahun`);

--
-- Ketidakleluasaan untuk tabel `produksi`
--
ALTER TABLE `produksi`
  ADD CONSTRAINT `produksi_ibfk_1` FOREIGN KEY (`id_tahun`) REFERENCES `tahun` (`id_tahun`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
