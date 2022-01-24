-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 12 Jul 2021 pada 15.09
-- Versi server: 10.4.19-MariaDB
-- Versi PHP: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `web_perwalian`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_daftarhadir`
--

CREATE TABLE `tb_daftarhadir` (
  `id_hadir` int(11) NOT NULL,
  `nim_mhs` int(15) NOT NULL,
  `nama_mhs` varchar(50) NOT NULL,
  `keterangan` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_daftarhadir`
--

INSERT INTO `tb_daftarhadir` (`id_hadir`, `nim_mhs`, `nama_mhs`, `keterangan`) VALUES
(28, 19040146, 'Wirayuda', 'Hadir'),
(30, 19040167, 'Moh. Fiqih Erinsyah', 'Hadir'),
(32, 19040145, 'Diana Nur Laeli', 'Alpha'),
(37, 19040166, 'Muhammad Syarif Fauzi Fadilah', 'Hadir');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_keluhan`
--

CREATE TABLE `tb_keluhan` (
  `id_keluhan` int(15) NOT NULL,
  `nim` int(15) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `keluhan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_keluhan`
--

INSERT INTO `tb_keluhan` (`id_keluhan`, `nim`, `nama`, `keluhan`) VALUES
(2, 19040167, 'Moh. Fiqih Erinsyah', 'Long long time ago, there lived a great king in Bengkulu. His name is king Ratu Agung. He ruled Sungai Serut Kingdom for years and during those years, the people in the kingdom live peacefully and prosperous. The king has seven children. The last child was the only daughter in the family and her name is Putri Gading Cempaka.'),
(4, 19040166, 'Muhammad Syarif Fauzi Fadilah', 'Dahlah ternak tuyul sadja! mwehe'),
(5, 19040167, 'faqih', 'hmm');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_profil`
--

CREATE TABLE `tb_profil` (
  `id_profil` int(5) NOT NULL,
  `nim` int(15) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `ttl` varchar(50) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `no_telp` varchar(20) NOT NULL,
  `ipk` varchar(5) NOT NULL,
  `foto` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_profil`
--

INSERT INTO `tb_profil` (`id_profil`, `nim`, `nama`, `ttl`, `alamat`, `no_telp`, `ipk`, `foto`) VALUES
(5, 19040167, 'Moh. Fiqih Erinsyah', 'Brebes, 16 Juni 2000', 'Jl. Raya Grinting-Bulakamba', '089677138599', '3,85', '1619068344942.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_user`
--

CREATE TABLE `tb_user` (
  `id_user` int(15) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` text NOT NULL,
  `role` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_user`
--

INSERT INTO `tb_user` (`id_user`, `username`, `password`, `role`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 1),
(2, 'fiqih@gmail.com', '78a54319bcb86681cf8713a6ccfce474', 1),
(3, '19040167', '7662ebd54a6256a22bfdbaad53e2b0a7', 2);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_daftarhadir`
--
ALTER TABLE `tb_daftarhadir`
  ADD PRIMARY KEY (`id_hadir`);

--
-- Indeks untuk tabel `tb_keluhan`
--
ALTER TABLE `tb_keluhan`
  ADD PRIMARY KEY (`id_keluhan`);

--
-- Indeks untuk tabel `tb_profil`
--
ALTER TABLE `tb_profil`
  ADD PRIMARY KEY (`id_profil`);

--
-- Indeks untuk tabel `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_daftarhadir`
--
ALTER TABLE `tb_daftarhadir`
  MODIFY `id_hadir` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT untuk tabel `tb_keluhan`
--
ALTER TABLE `tb_keluhan`
  MODIFY `id_keluhan` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `tb_profil`
--
ALTER TABLE `tb_profil`
  MODIFY `id_profil` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id_user` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
