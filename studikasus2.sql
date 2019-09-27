-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Waktu pembuatan: 27 Sep 2019 pada 11.37
-- Versi server: 5.7.26
-- Versi PHP: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `studikasus2`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `mobil`
--

CREATE TABLE `mobil` (
  `mobil_id` int(11) NOT NULL,
  `nama_mobil` varchar(100) NOT NULL,
  `tanggal_release` date NOT NULL,
  `harga` varchar(255) NOT NULL,
  `perusahaan_id` int(11) NOT NULL,
  `tipe_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `mobil`
--

INSERT INTO `mobil` (`mobil_id`, `nama_mobil`, `tanggal_release`, `harga`, `perusahaan_id`, `tipe_id`) VALUES
(1, 'mobil1', '2019-09-27', '90000', 1, 0),
(2, 'mobil1', '2019-09-27', '90000', 10, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `perusahaan`
--

CREATE TABLE `perusahaan` (
  `perusahaan_id` int(11) NOT NULL,
  `nama_perusahaan` varchar(50) NOT NULL,
  `kontak_perusahaan` varchar(20) NOT NULL,
  `email_perusahaan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `perusahaan`
--

INSERT INTO `perusahaan` (`perusahaan_id`, `nama_perusahaan`, `kontak_perusahaan`, `email_perusahaan`) VALUES
(10, 'perusahaan 1 - edited', '0810000', 'perusahaan1@mail.com'),
(12, 'perusahaan 2', '08100000', 'perusahaan2@gmail.com');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tipe_mobil`
--

CREATE TABLE `tipe_mobil` (
  `tipe_id` int(11) NOT NULL,
  `nama_tipe` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `tipe_mobil`
--

INSERT INTO `tipe_mobil` (`tipe_id`, `nama_tipe`) VALUES
(1, 'tipe satu'),
(3, 'tipe dua'),
(4, 'tipe tiga');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `username`, `password`) VALUES
(1, 'testing', 'ae2b1fca515949e5d54fb22b8ed95575');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `mobil`
--
ALTER TABLE `mobil`
  ADD PRIMARY KEY (`mobil_id`);

--
-- Indeks untuk tabel `perusahaan`
--
ALTER TABLE `perusahaan`
  ADD PRIMARY KEY (`perusahaan_id`),
  ADD UNIQUE KEY `nama_perusahaan` (`nama_perusahaan`);

--
-- Indeks untuk tabel `tipe_mobil`
--
ALTER TABLE `tipe_mobil`
  ADD PRIMARY KEY (`tipe_id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `mobil`
--
ALTER TABLE `mobil`
  MODIFY `mobil_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `perusahaan`
--
ALTER TABLE `perusahaan`
  MODIFY `perusahaan_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `tipe_mobil`
--
ALTER TABLE `tipe_mobil`
  MODIFY `tipe_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
