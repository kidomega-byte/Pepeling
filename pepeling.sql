-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 21 Des 2021 pada 05.19
-- Versi server: 10.4.16-MariaDB
-- Versi PHP: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pepeling`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `kontak`
--

CREATE TABLE `kontak` (
  `kode_kontak` int(20) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `nik` varchar(20) NOT NULL,
  `alamat` varchar(200) NOT NULL,
  `hp` varchar(13) NOT NULL,
  `email` varchar(50) NOT NULL,
  `kritik_saran` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kontak`
--

INSERT INTO `kontak` (`kode_kontak`, `nama`, `nik`, `alamat`, `hp`, `email`, `kritik_saran`) VALUES
(2, 'Anugrah Rachman Ramdany', '3203010601980013', 'Kp. Pasarean RT.02/RW.11 Pamoyanan, Cianjur', '087869962755', 'anugrahrachman8@gmail.com', 'Tingkatkan lagi'),
(3, 'Salma Baiti Rachman', '3203014507010007', 'Kp. Pasarean RT.02/RW.11 Pamoyanan, Cianjur', '089657664452', 'yumeinasal@gmail.com', 'Perbanyak fiturnya');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengaduan`
--

CREATE TABLE `pengaduan` (
  `id_pengaduan` int(11) NOT NULL,
  `nama_pengadu` varchar(50) NOT NULL,
  `nomor_identitas` varchar(20) NOT NULL,
  `alamat_pengadu` varchar(50) NOT NULL,
  `no_hp` varchar(13) NOT NULL,
  `isi_pengaduan` varchar(500) DEFAULT NULL,
  `tanggal` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pengaduan`
--

INSERT INTO `pengaduan` (`id_pengaduan`, `nama_pengadu`, `nomor_identitas`, `alamat_pengadu`, `no_hp`, `isi_pengaduan`, `tanggal`) VALUES
(29, 'Wien Adriani F', '3203284407940003', 'Cipanas', '082113323877', 'Polusi udara', '2021-02-02 04:29:47'),
(31, 'Fitri Yani Rohanah', '3203284902970017', 'Sindanglaya', '083817126370', 'Sampah menumpuk', '2021-02-02 04:30:18'),
(32, 'Anugrah Rachman Ramdany', '3203010601980013', 'Pamoyanan', '087869962755', 'Sungai tercemar', '2021-02-02 04:30:39'),
(33, 'Salma Baiti Rachman', '3203014507010007', 'Cianjur', '089657664452', 'Air kotor', '2021-02-02 04:30:54'),
(34, 'M Dimas Ibna', '3203010304990005', 'Warungjambe', '081805932736', 'Sampah menumpuk', '2021-02-02 04:31:18'),
(37, 'agung', '32131232332', 'ciranjang', '65245325', 'Air kotor', '2021-02-05 13:30:23');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` int(10) NOT NULL,
  `username` varchar(10) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`) VALUES
(2, 'admin', '21232f297a57a5a743894a0e4a801fc3');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `kontak`
--
ALTER TABLE `kontak`
  ADD PRIMARY KEY (`kode_kontak`);

--
-- Indeks untuk tabel `pengaduan`
--
ALTER TABLE `pengaduan`
  ADD PRIMARY KEY (`id_pengaduan`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `kontak`
--
ALTER TABLE `kontak`
  MODIFY `kode_kontak` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `pengaduan`
--
ALTER TABLE `pengaduan`
  MODIFY `id_pengaduan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
