-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 28 Jun 2020 pada 12.07
-- Versi server: 10.4.13-MariaDB
-- Versi PHP: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_portal_berita`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `article`
--

CREATE TABLE `article` (
  `ID` int(10) NOT NULL,
  `title` text DEFAULT NULL,
  `sub_title` text NOT NULL,
  `content` longtext DEFAULT NULL,
  `img` longtext NOT NULL,
  `user_id` int(10) NOT NULL DEFAULT 1,
  `post_date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `article`
--

INSERT INTO `article` (`ID`, `title`, `sub_title`, `content`, `img`, `user_id`, `post_date`) VALUES
(18, 'Ternyata Hacker juga Bisa Ambyar, Ini Curhatannya Saat Bobol Situs Milik Pengadilan Agama Sleman', '<p>Urusan patah hati ternyata masalah kompleks yang bisa dialami oleh siapapun tanpa terkecuali, termasuk&nbsp;<em>hacker&nbsp;</em>bertangan dingin.&nbsp;<em>Hacker&nbsp;</em>yang kerjaan sehari-harinya hanya melihat layar dan kode, ternyata bisa juga ambyar kalau sedang patah hati. Nah kalau kita paling cuma bisa mencurahkan kesedihan dan keambyaran di media sosial,&nbsp;<em>hacker&nbsp;</em>bisa meretas situs-situs pemerintahan dan memenuhinya dengan pesan-pesan patah hati.&nbsp;Seperti yang dialami oleh seorang&nbsp;<em>Hacker</em>&nbsp;asal Sleman satu ini.', '<p>Urusan patah hati ternyata masalah kompleks yang bisa dialami oleh siapapun tanpa terkecuali, termasuk&nbsp;<em>hacker&nbsp;</em>bertangan dingin.&nbsp;<em>Hacker&nbsp;</em>yang kerjaan sehari-harinya hanya melihat layar dan kode, ternyata bisa juga ambyar kalau sedang patah hati. Nah kalau kita paling cuma bisa mencurahkan kesedihan dan keambyaran di media sosial,&nbsp;<em>hacker&nbsp;</em>bisa meretas situs-situs pemerintahan dan memenuhinya dengan pesan-pesan patah hati.&nbsp;Seperti yang dialami oleh seorang&nbsp;<em>Hacker</em>&nbsp;asal Sleman satu ini.</p>\r\n\r\n<p><img alt=\"\" src=\"https://www.hipwee.com/hiburan/curhatan-galau-hacker/\" /></p>\r\n', 'https://www.hipwee.com/hiburan/curhatan-galau-hacker/', 1, '2020-06-28 16:41:55');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` int(10) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `nama_depan` varchar(100) NOT NULL,
  `nama_belakang` varchar(100) NOT NULL,
  `akses` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`, `nama_depan`, `nama_belakang`, `akses`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'Admin', '', 'admin'),
(2, 'barnando', 'a437e63169fd2290b39078696734cdfa', 'Barnando', 'Akbarto', 'admin'),
(3, 'user', 'ee11cbb19052e40b07aac0ca060c23ee', 'User', '', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `article`
--
ALTER TABLE `article`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `user_id_2` (`user_id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `article`
--
ALTER TABLE `article`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `article`
--
ALTER TABLE `article`
  ADD CONSTRAINT `article_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id_user`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
