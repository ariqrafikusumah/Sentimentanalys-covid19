-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 27 Jan 2021 pada 07.00
-- Versi server: 10.4.6-MariaDB
-- Versi PHP: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `p3`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `agama`
--

CREATE TABLE `agama` (
  `id` int(11) NOT NULL,
  `nama` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `agama`
--

INSERT INTO `agama` (`id`, `nama`) VALUES
(1, 'Islam'),
(2, 'Protestan'),
(3, 'Katolik'),
(4, 'Hindu'),
(5, 'Buddha'),
(6, 'Konghucu');

-- --------------------------------------------------------

--
-- Struktur dari tabel `asal_i`
--

CREATE TABLE `asal_i` (
  `id` int(11) NOT NULL,
  `asal` varchar(50) NOT NULL,
  `id_institusi` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `asal_i`
--

INSERT INTO `asal_i` (`id`, `asal`, `id_institusi`) VALUES
(1, 'Poltekpos', 1),
(2, 'YPMM', 2),
(3, 'YPIU', 3),
(4, 'AL-Falah', 4),
(5, 'Polban', 1),
(6, 'Adiaksa', 2),
(7, 'Al-Azhar', 3),
(8, 'Anak Bangsa', 4);

-- --------------------------------------------------------

--
-- Struktur dari tabel `institusi`
--

CREATE TABLE `institusi` (
  `id_institusi` int(11) NOT NULL,
  `nama` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `institusi`
--

INSERT INTO `institusi` (`id_institusi`, `nama`) VALUES
(1, 'Perguruan Tinggi'),
(2, 'SMA / sederajat'),
(3, 'SMP / sederajat'),
(4, 'SD / sederajat');

-- --------------------------------------------------------

--
-- Struktur dari tabel `jk`
--

CREATE TABLE `jk` (
  `id_jk` int(11) NOT NULL,
  `jenis` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `jk`
--

INSERT INTO `jk` (`id_jk`, `jenis`) VALUES
(1, 'Laki-Laki'),
(2, 'Perempuan');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pekerjaan`
--

CREATE TABLE `pekerjaan` (
  `id` int(11) NOT NULL,
  `nama` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pekerjaan`
--

INSERT INTO `pekerjaan` (`id`, `nama`) VALUES
(1, 'PNS'),
(2, 'Swasta'),
(3, 'Wira Swasta'),
(4, 'Buruh'),
(5, 'TNI'),
(6, 'Polri'),
(7, 'Petani'),
(8, 'Peternak'),
(9, 'Guru atau Dosen');

-- --------------------------------------------------------

--
-- Stand-in struktur untuk tampilan `pro`
-- (Lihat di bawah untuk tampilan aktual)
--
CREATE TABLE `pro` (
`nik` int(12)
,`nama` varchar(30)
,`jenis` varchar(10)
,`email` varchar(30)
,`jenjang` varchar(30)
,`asal_institusi` varchar(30)
,`data_created` int(11)
);

-- --------------------------------------------------------

--
-- Struktur dari tabel `provider`
--

CREATE TABLE `provider` (
  `id` int(11) NOT NULL,
  `nama` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `provider`
--

INSERT INTO `provider` (`id`, `nama`) VALUES
(1, 'XL'),
(2, 'Axis'),
(3, 'Simpati'),
(4, 'AS'),
(5, 'Tri'),
(6, 'SmartFriend');

-- --------------------------------------------------------

--
-- Struktur dari tabel `q`
--

CREATE TABLE `q` (
  `id` int(11) NOT NULL,
  `q1` varchar(256) NOT NULL,
  `q2` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `q`
--

INSERT INTO `q` (`id`, `q1`, `q2`) VALUES
(1, 'Apakah Anda Mendapatkan Bantuan Pemerintah berupa paket internet untuk membantu proses pembelajaran', 'Apakah menurut anda bantuan pemerintah tersebut dapat membantu proses pembelajaran disaat seperti ini');

-- --------------------------------------------------------

--
-- Struktur dari tabel `respon`
--

CREATE TABLE `respon` (
  `id` int(11) NOT NULL,
  `r1` varchar(256) NOT NULL,
  `r2` varchar(256) NOT NULL,
  `nik` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `respon`
--

INSERT INTO `respon` (`id`, `r1`, `r2`, `nik`) VALUES
(9, 'ya dan saya senang sekali', 'yaa dan dapat meringankan beban orang tua yang membuat bahagia perasaannya', 1184076),
(10, 'tidak dan saya benci sekali karena kuota saya cepat habis karna zoom terus', 'biasa saja karena jumlah kuota yang dibagikan tidak begitu besar', 1234);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `nik` int(12) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `id_jk` int(11) NOT NULL,
  `email` varchar(30) NOT NULL,
  `id_institusi` int(11) NOT NULL,
  `asal_institusi` varchar(30) NOT NULL,
  `id_agama` int(11) NOT NULL,
  `id_pekerjaan` int(11) NOT NULL,
  `id_provider` int(11) NOT NULL,
  `password` varchar(256) NOT NULL,
  `role_id` int(11) NOT NULL,
  `data_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`nik`, `nama`, `id_jk`, `email`, `id_institusi`, `asal_institusi`, `id_agama`, `id_pekerjaan`, `id_provider`, `password`, `role_id`, `data_created`) VALUES
(1234, 'roro', 2, 'roro@gmail.com', 2, 'YPMM', 2, 3, 1, '12345', 2, 1611725236),
(1184076, 'ariq', 1, 'ariqGokil@gmail.com', 1, 'Poltekpos', 1, 1, 3, '12345', 2, 1611725193),
(1184090, 'adit', 1, 'aditluthfi21@gmail.com', 1, 'ypmm', 1, 1, 3, '12345', 1, 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_role`
--

CREATE TABLE `user_role` (
  `id` int(11) NOT NULL,
  `role` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user_role`
--

INSERT INTO `user_role` (`id`, `role`) VALUES
(1, 'Admin'),
(2, 'Member');

-- --------------------------------------------------------

--
-- Stand-in struktur untuk tampilan `uspro`
-- (Lihat di bawah untuk tampilan aktual)
--
CREATE TABLE `uspro` (
`nik` int(12)
,`nama` varchar(30)
,`jenis` varchar(10)
,`email` varchar(30)
,`jenjang` varchar(30)
,`asal_institusi` varchar(30)
);

-- --------------------------------------------------------

--
-- Stand-in struktur untuk tampilan `v_r1`
-- (Lihat di bawah untuk tampilan aktual)
--
CREATE TABLE `v_r1` (
`Respon1` varchar(256)
,`nama` varchar(30)
,`jenjang` varchar(30)
,`Sentiment` varchar(7)
);

-- --------------------------------------------------------

--
-- Stand-in struktur untuk tampilan `v_r2`
-- (Lihat di bawah untuk tampilan aktual)
--
CREATE TABLE `v_r2` (
`Respon2` varchar(256)
,`nama` varchar(30)
,`jenjang` varchar(30)
,`Sentiment` varchar(7)
);

-- --------------------------------------------------------

--
-- Struktur untuk view `pro`
--
DROP TABLE IF EXISTS `pro`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `pro`  AS  select `user`.`nik` AS `nik`,`user`.`nama` AS `nama`,`jk`.`jenis` AS `jenis`,`user`.`email` AS `email`,`institusi`.`nama` AS `jenjang`,`user`.`asal_institusi` AS `asal_institusi`,`user`.`data_created` AS `data_created` from ((`user` join `jk` on(`jk`.`id_jk` = `user`.`id_jk`)) join `institusi` on(`institusi`.`id_institusi` = `user`.`id_institusi`)) ;

-- --------------------------------------------------------

--
-- Struktur untuk view `uspro`
--
DROP TABLE IF EXISTS `uspro`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `uspro`  AS  select `user`.`nik` AS `nik`,`user`.`nama` AS `nama`,`jk`.`jenis` AS `jenis`,`user`.`email` AS `email`,`institusi`.`nama` AS `jenjang`,`user`.`asal_institusi` AS `asal_institusi` from ((`user` join `jk` on(`user`.`id_jk` = `jk`.`id_jk`)) join `institusi` on(`user`.`id_institusi` = `institusi`.`id_institusi`)) where `user`.`role_id` = 2 ;

-- --------------------------------------------------------

--
-- Struktur untuk view `v_r1`
--
DROP TABLE IF EXISTS `v_r1`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_r1`  AS  select `respon`.`r1` AS `Respon1`,`user`.`nama` AS `nama`,`institusi`.`nama` AS `jenjang`,case when `respon`.`r1` like '%suka%' then 'Positif' when `respon`.`r1` like '%senang%' then 'Positif' when `respon`.`r1` like '%bahagia%' then 'Positif' when `respon`.`r1` like '%jijik%' then 'Negatif' when `respon`.`r1` like '%benci%' then 'Negatif' when `respon`.`r1` like '%laknat%' then 'Negatif' when `respon`.`r1` like '%biasa%' then 'Netral' when `respon`.`r1` like '%suport%' then 'Netral' end AS `Sentiment` from ((`respon` join `user` on(`user`.`nik` = `respon`.`nik`)) join `institusi` on(`institusi`.`id_institusi` = `user`.`id_institusi`)) ;

-- --------------------------------------------------------

--
-- Struktur untuk view `v_r2`
--
DROP TABLE IF EXISTS `v_r2`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_r2`  AS  select `respon`.`r2` AS `Respon2`,`user`.`nama` AS `nama`,`institusi`.`nama` AS `jenjang`,case when `respon`.`r2` like '%suka%' then 'Positif' when `respon`.`r2` like '%senang%' then 'Positif' when `respon`.`r2` like '%bahagia%' then 'Positif' when `respon`.`r2` like '%jijik%' then 'Negatif' when `respon`.`r2` like '%benci%' then 'Negatif' when `respon`.`r2` like '%laknat%' then 'Negatif' when `respon`.`r2` like '%biasa%' then 'Netral' when `respon`.`r2` like '%suport%' then 'Netral' end AS `Sentiment` from ((`respon` join `user` on(`user`.`nik` = `respon`.`nik`)) join `institusi` on(`institusi`.`id_institusi` = `user`.`id_institusi`)) ;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `agama`
--
ALTER TABLE `agama`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `asal_i`
--
ALTER TABLE `asal_i`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_institusi` (`id_institusi`);

--
-- Indeks untuk tabel `institusi`
--
ALTER TABLE `institusi`
  ADD PRIMARY KEY (`id_institusi`);

--
-- Indeks untuk tabel `jk`
--
ALTER TABLE `jk`
  ADD PRIMARY KEY (`id_jk`);

--
-- Indeks untuk tabel `pekerjaan`
--
ALTER TABLE `pekerjaan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `provider`
--
ALTER TABLE `provider`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `q`
--
ALTER TABLE `q`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `respon`
--
ALTER TABLE `respon`
  ADD PRIMARY KEY (`id`),
  ADD KEY `nik` (`nik`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`nik`),
  ADD UNIQUE KEY `email` (`email`),
  ADD KEY `id_institusi` (`id_institusi`),
  ADD KEY `id_jk` (`id_jk`),
  ADD KEY `role_id` (`role_id`),
  ADD KEY `id_agama` (`id_agama`),
  ADD KEY `id_pekerjaan` (`id_pekerjaan`),
  ADD KEY `id_provider` (`id_provider`);

--
-- Indeks untuk tabel `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `agama`
--
ALTER TABLE `agama`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `asal_i`
--
ALTER TABLE `asal_i`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `pekerjaan`
--
ALTER TABLE `pekerjaan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `provider`
--
ALTER TABLE `provider`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `q`
--
ALTER TABLE `q`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `respon`
--
ALTER TABLE `respon`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `user_role`
--
ALTER TABLE `user_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `asal_i`
--
ALTER TABLE `asal_i`
  ADD CONSTRAINT `asal_i_ibfk_1` FOREIGN KEY (`id_institusi`) REFERENCES `institusi` (`id_institusi`);

--
-- Ketidakleluasaan untuk tabel `respon`
--
ALTER TABLE `respon`
  ADD CONSTRAINT `respon_ibfk_1` FOREIGN KEY (`nik`) REFERENCES `user` (`nik`),
  ADD CONSTRAINT `respon_ibfk_2` FOREIGN KEY (`nik`) REFERENCES `user` (`nik`);

--
-- Ketidakleluasaan untuk tabel `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`id_institusi`) REFERENCES `institusi` (`id_institusi`),
  ADD CONSTRAINT `user_ibfk_2` FOREIGN KEY (`id_jk`) REFERENCES `jk` (`id_jk`),
  ADD CONSTRAINT `user_ibfk_3` FOREIGN KEY (`role_id`) REFERENCES `user_role` (`id`),
  ADD CONSTRAINT `user_ibfk_4` FOREIGN KEY (`id_agama`) REFERENCES `agama` (`id`),
  ADD CONSTRAINT `user_ibfk_5` FOREIGN KEY (`id_pekerjaan`) REFERENCES `pekerjaan` (`id`),
  ADD CONSTRAINT `user_ibfk_6` FOREIGN KEY (`id_provider`) REFERENCES `provider` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
