-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 12 Bulan Mei 2020 pada 15.59
-- Versi server: 10.1.31-MariaDB
-- Versi PHP: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sekolah`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_guru`
--

CREATE TABLE `tb_guru` (
  `id_guru` int(11) NOT NULL,
  `nip` varchar(50) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `tgl_lahir` varchar(50) NOT NULL,
  `pangkat` varchar(50) NOT NULL,
  `pendidikan` varchar(50) NOT NULL,
  `jabatan` varchar(50) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `no_hp` varchar(13) NOT NULL,
  `email` varchar(50) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_guru`
--

INSERT INTO `tb_guru` (`id_guru`, `nip`, `nama`, `tgl_lahir`, `pangkat`, `pendidikan`, `jabatan`, `alamat`, `no_hp`, `email`, `image`) VALUES
(4, '788798', 'yahdi almukaram', '24-05-2020', 'honor', 'S3', 'guru 1', 'duo koto mlalo kecamatan batipuh selatan kabupatan tanah datar', '3897938', 'yahdialmukaram03@gmail.com', '1fa011735157806d6ee9ea6458f7a2a2.jpeg'),
(6, '788798', 'yahdi almukaram', '26-05-2020', 'honor', 'Sma Sederajat', 'guru 1', 'duo koto mlalo kecamatan batipuh selatan kabupatan tanah datar', '082169074845', 'yahdialmukaram03@gmail.com', 'afb08ef0db612407cf56cf3fd892c164.jpg'),
(7, '788798777', 'yahdi almukaram', '20-05-2020', 'honor', 'S1', 'guru 1', 'duo koto mlalo kecamatan batipuh selatan kabupatan tanah datar', '082169074845', 'yahdialmukaram03@gmail.com', '6d2bed0a5f2f873dd29f263adbbdf78d.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_siswa`
--

CREATE TABLE `tb_siswa` (
  `id_siswa` int(11) NOT NULL,
  `nik` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `tgl_lahir` varchar(50) NOT NULL,
  `jenis_kelamin` varchar(33) NOT NULL,
  `no_hp` varchar(15) NOT NULL,
  `agama` varchar(50) NOT NULL,
  `tanggal` varchar(20) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_siswa`
--

INSERT INTO `tb_siswa` (`id_siswa`, `nik`, `nama`, `alamat`, `tgl_lahir`, `jenis_kelamin`, `no_hp`, `agama`, `tanggal`, `image`) VALUES
(18, '1771070307960001', 'nadia ', 'duo koto mlalo kecamatan batipuh selatan kabupatan tanah datar', '1771070307960001', 'Laki-Laki', '082169074845', 'Islam', '06-05-2020 07:13:34', '1881ad7b601357b27c2fa79daef3ad43.PNG'),
(20, '1771070307960001', 'yahdi ', 'malalo', '03/03/2020', 'Laki-Laki', '0863256372', 'Kristen', '07-05-2020 10:39:56', '5078a5ea4ab4a5957e1f6d822b5da65d.PNG'),
(21, '1234567', 'yusi', 'duo koto mlalo kecamatan batipuh selatan kabupatan tanah datar', '19-05-2020', 'Laki-Laki', '082169074845', 'Islam', '07-05-2020 11:31:38', 'b32bcf44696ceb147a9690dc1c7b6846.PNG'),
(22, '1771070307960001', 'ani', 'duo koto mlalo kecamatan batipuh selatan kabupatan tanah datar', '25-05-2020', 'Laki-Laki', '8493590', 'Islam', '09-05-2020 07:02:41', 'a5697c48584329e4fbd43e4bbbd0f316.PNG');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_guru`
--
ALTER TABLE `tb_guru`
  ADD PRIMARY KEY (`id_guru`);

--
-- Indeks untuk tabel `tb_siswa`
--
ALTER TABLE `tb_siswa`
  ADD PRIMARY KEY (`id_siswa`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_guru`
--
ALTER TABLE `tb_guru`
  MODIFY `id_guru` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `tb_siswa`
--
ALTER TABLE `tb_siswa`
  MODIFY `id_siswa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
