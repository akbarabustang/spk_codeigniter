-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 30 Jul 2017 pada 11.14
-- Versi Server: 10.1.13-MariaDB
-- PHP Version: 5.6.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `spk_sekolah`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `alternatif`
--

CREATE TABLE `alternatif` (
  `id_alternatif` int(11) NOT NULL,
  `id_sekolah` int(11) NOT NULL,
  `status` enum('daftar','unggulan','biasa') NOT NULL,
  `total` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `alternatif`
--

INSERT INTO `alternatif` (`id_alternatif`, `id_sekolah`, `status`, `total`) VALUES
(15, 2, 'unggulan', 0.63513513513514),
(16, 1, 'unggulan', 0),
(17, 3, 'unggulan', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `alternatif_nilai`
--

CREATE TABLE `alternatif_nilai` (
  `id_alternatif_nilai` int(11) NOT NULL,
  `id_alternatif` int(11) NOT NULL,
  `id_kriteria` int(11) NOT NULL,
  `id_nilai` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `alternatif_nilai`
--

INSERT INTO `alternatif_nilai` (`id_alternatif_nilai`, `id_alternatif`, `id_kriteria`, `id_nilai`) VALUES
(31, 8, 6, 11),
(32, 8, 7, 12),
(33, 8, 8, 21),
(34, 8, 9, 22),
(35, 8, 11, 23),
(36, 8, 12, 19),
(37, 9, 6, 11),
(38, 9, 7, 12),
(39, 9, 8, 21),
(40, 9, 9, 22),
(41, 9, 11, 23),
(42, 9, 12, 19),
(43, 10, 6, 11),
(44, 10, 7, 12),
(45, 10, 8, 21),
(46, 10, 9, 22),
(47, 10, 11, 23),
(48, 10, 12, 19),
(49, 11, 6, 11),
(50, 11, 7, 12),
(51, 11, 8, 21),
(52, 11, 9, 22),
(53, 11, 11, 23),
(54, 11, 12, 19),
(55, 12, 6, 11),
(56, 12, 7, 12),
(57, 12, 8, 21),
(58, 12, 9, 22),
(59, 12, 11, 23),
(60, 12, 12, 19),
(61, 13, 6, 11),
(62, 13, 7, 12),
(63, 13, 8, 21),
(64, 13, 9, 22),
(65, 13, 11, 23),
(66, 13, 12, 19),
(67, 14, 6, 11),
(68, 14, 7, 13),
(69, 14, 8, 21),
(70, 14, 9, 22),
(71, 14, 11, 23),
(72, 14, 12, 20),
(73, 15, 6, 24),
(74, 15, 7, 27),
(75, 15, 8, 33),
(76, 15, 9, 37),
(77, 15, 12, 41),
(78, 16, 6, 26),
(79, 16, 7, 30),
(80, 16, 8, 33),
(81, 16, 9, 39),
(82, 16, 12, 40),
(83, 17, 6, 25),
(84, 17, 7, 30),
(85, 17, 8, 33),
(86, 17, 9, 37),
(87, 17, 12, 40);

-- --------------------------------------------------------

--
-- Struktur dari tabel `galeri`
--

CREATE TABLE `galeri` (
  `id_galeri` int(11) NOT NULL,
  `id_tujuan` int(11) NOT NULL,
  `judul` varchar(30) NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `groups`
--

CREATE TABLE `groups` (
  `id` mediumint(8) UNSIGNED NOT NULL,
  `name` varchar(20) NOT NULL,
  `description` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `groups`
--

INSERT INTO `groups` (`id`, `name`, `description`) VALUES
(1, 'admin', 'Administrator'),
(2, 'members', 'General User');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kriteria`
--

CREATE TABLE `kriteria` (
  `id_kriteria` int(11) NOT NULL,
  `nama_kriteria` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kriteria`
--

INSERT INTO `kriteria` (`id_kriteria`, `nama_kriteria`) VALUES
(6, 'SPP'),
(7, 'Akreditasi'),
(8, 'Gedung'),
(9, 'Ketersediaan Fasilitas'),
(12, 'Ketersediaan Ekstrakulikuler');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kriteria_nilai`
--

CREATE TABLE `kriteria_nilai` (
  `id_kriteria_nilai` int(11) NOT NULL,
  `kriteria_id_dari` int(11) NOT NULL,
  `kriteria_id_tujuan` int(11) NOT NULL,
  `nilai` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kriteria_nilai`
--

INSERT INTO `kriteria_nilai` (`id_kriteria_nilai`, `kriteria_id_dari`, `kriteria_id_tujuan`, `nilai`) VALUES
(191, 6, 7, 1),
(192, 6, 8, 1),
(193, 6, 9, 1),
(194, 6, 12, 1),
(195, 7, 8, 1),
(196, 7, 9, 1),
(197, 7, 12, 1),
(198, 8, 9, 1),
(199, 8, 12, 1),
(200, 9, 12, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `login_attempts`
--

CREATE TABLE `login_attempts` (
  `id` int(11) UNSIGNED NOT NULL,
  `ip_address` varchar(15) NOT NULL,
  `login` varchar(100) NOT NULL,
  `time` int(11) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `version` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`version`) VALUES
(0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `nilai_kategori`
--

CREATE TABLE `nilai_kategori` (
  `id_nilai` int(11) NOT NULL,
  `nama_nilai` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `nilai_kategori`
--

INSERT INTO `nilai_kategori` (`id_nilai`, `nama_nilai`) VALUES
(1, 'Sangat Baik'),
(2, 'Baik'),
(3, 'Cukup'),
(4, 'Kurang');

-- --------------------------------------------------------

--
-- Struktur dari tabel `sekolah`
--

CREATE TABLE `sekolah` (
  `id_sekolah` int(11) NOT NULL,
  `nama_sekolah` varchar(40) NOT NULL,
  `nama_kepsek` varchar(30) NOT NULL,
  `alamat_sekolah` text NOT NULL,
  `visi` text NOT NULL,
  `misi` text NOT NULL,
  `no_telpon` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `sekolah`
--

INSERT INTO `sekolah` (`id_sekolah`, `nama_sekolah`, `nama_kepsek`, `alamat_sekolah`, `visi`, `misi`, `no_telpon`) VALUES
(1, 'SMAN 17 Makassar', 'Syamsuddin, S. Pd, MM.', 'Sunu No. 11 Kelurahan Suangga Kecamatan Tallo, Makassar', '“Menjadi sekolah yang unggul dalam prestasi, berkarakter, berwawasan lingkungan dan berdaya saing global berlandaskan IMTAQ dan IPTEK”', 'Misi :\r\n? Menciptakan lingkungan pembelajar yang kondusif dalam upaya meningkatkan mutu pembelajaran;\r\n? Mendorong dan membantu setiap peserta didik untuk mengenali potensi dirinya sehingga dapat dikembangkan secara optimal;\r\n? Menumbuhkembangkan semangat keunggulan dan budaya belajar yang tinggi kepada seluruh warga sekolah;\r\n? Menumbuhkembangkan karakter warga sekolah yang relegius, disiplin, jujur, bertanggung jawab, kreatif dan inovatif;\r\n? Meningkatkan komitmen, kinerja dan loyalitas seluruh pendidik dan tenaga kependidikan terhadap tugas pokok dan fungsinya;\r\n? Meningkatkan apresiasi terhadap seni dan budaya bangsa;\r\n? Melaksanakan pembelajaran yang berbasis lingkungan;\r\n? Menumbuhkan budaya hidup bersih dan sehat;\r\n? Menumbuhkankembangkan semangat mencintai, mengelolah dan memelihara lingkungan oleh seluruh warga sekolah;\r\n? Menerapkan Teknologi Informasi dan Komunikasi dalam pembelajaran dan pengelolaan sekolah;\r\n? Menerapkan sistem manajemen mutu.', '0411- 445825'),
(2, 'SMAIT Al Biruni Makassar', 'Muh. Arafah Kube, ST', 'A.P. Pettarani, Ruko Diamond, No. 12-14', 'BE A LEADERSHIP SCHOOL IN EAST INDONESIA', '• Menciptakan Manusia Kreatif, Mandiri, Berakhlak Mulia, Bertanggung Jawab dan Berwawasan Global\r\n  • Mencetak Peneliti Muda yang Handal dalam Aplikasi Ilmu dan Teknologi\r\n  • Menjalin Ukhwah Antar Orang Tua, Pemerintah dan Masyarakat', '0411-425277'),
(3, 'SMAN 18 Makassar', 'Akbar abustang', 'Komp. Mangga Tiga Permai Daya Makassar', 'Menjadi sekolah yang unggul dalam bidang imtaq dan ipteks yang berwawasan lingkungan', 'Mengaktualisasikan ajaran agama secara konsekuen\r\nMelaksanakan managemen partisipatif berbasis pelayanan prima\r\nMelaksanakan proses pembelajaran berkualitas\r\nMembina bakat dan minat siswa dalam kegiatan ekstrakurikuler\r\nMeningkatkan profesionalisme guru dan staf tata usaha yang berbasis kinerja.\r\nMewujudkan kemitraan seluruh stageholder menuju sekolah yang unggul.\r\nMemaksimalkan kecintaan lingkungan dengan upaya mencegah terjadinya pencemaran lingkungan.\r\nMemaksimalkan kecintaan lingkungan dengan upaya mencegah terjadinya kerusakan lingkungan.\r\nMemaksimalkan kecintaan lingkungan dengan upaya menjaga pelestarian lingkungan.', '0411 - 511121');

-- --------------------------------------------------------

--
-- Struktur dari tabel `subkriteria`
--

CREATE TABLE `subkriteria` (
  `id_subkriteria` int(11) NOT NULL,
  `nama_subkriteria` varchar(50) NOT NULL,
  `id_kriteria` int(11) NOT NULL,
  `tipe` enum('teks','nilai') NOT NULL,
  `nilai_minimum` double DEFAULT NULL,
  `nilai_maksimum` double DEFAULT NULL,
  `op_min` varchar(4) DEFAULT NULL,
  `op_max` varchar(4) DEFAULT NULL,
  `id_nilai` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `subkriteria`
--

INSERT INTO `subkriteria` (`id_subkriteria`, `nama_subkriteria`, `id_kriteria`, `tipe`, `nilai_minimum`, `nilai_maksimum`, `op_min`, `op_max`, `id_nilai`) VALUES
(24, '< 400000 > 1400000', 6, 'nilai', 400000, 1400000, '<', '>', 3),
(25, '< 500000 > 1600000', 6, 'nilai', 500000, 1600000, '<', '>', 2),
(26, '<= 700000 => 1800000', 6, 'nilai', 700000, 1800000, '<=', '=>', 1),
(27, 'A', 7, 'teks', NULL, NULL, NULL, NULL, 1),
(30, 'B', 7, 'teks', NULL, NULL, NULL, NULL, 2),
(31, 'C', 7, 'teks', NULL, NULL, NULL, NULL, 3),
(32, 'D', 7, 'teks', NULL, NULL, NULL, NULL, 4),
(33, 'Lab Komputer', 8, 'teks', NULL, NULL, NULL, NULL, 2),
(34, 'Aula', 8, 'teks', NULL, NULL, NULL, NULL, 2),
(35, 'Kelas', 8, 'teks', NULL, NULL, NULL, NULL, 1),
(36, 'Ruang Kepala Sekolah', 8, 'teks', NULL, NULL, NULL, NULL, 1),
(37, 'Wifi', 9, 'teks', NULL, NULL, NULL, NULL, 3),
(38, 'Lab Komputer', 9, 'teks', NULL, NULL, NULL, NULL, 2),
(39, 'Alarm', 9, 'teks', NULL, NULL, NULL, NULL, 1),
(40, 'Pramuka', 12, 'teks', NULL, NULL, NULL, NULL, 2),
(41, 'OSIS', 12, 'teks', NULL, NULL, NULL, NULL, 1),
(42, 'Palang Merah Remaja', 12, 'teks', NULL, NULL, NULL, NULL, 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `subkriteria_hasil`
--

CREATE TABLE `subkriteria_hasil` (
  `id_subkriteria_hasil` int(11) NOT NULL,
  `id_subkriteria` int(11) NOT NULL,
  `prioritas` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `subkriteria_hasil`
--

INSERT INTO `subkriteria_hasil` (`id_subkriteria_hasil`, `id_subkriteria`, `prioritas`) VALUES
(1, 26, 1),
(2, 25, 0.7972972972972973),
(3, 24, 0.6351351351351351);

-- --------------------------------------------------------

--
-- Struktur dari tabel `subkriteria_nilai`
--

CREATE TABLE `subkriteria_nilai` (
  `id_subkriteria_nilai` int(11) NOT NULL,
  `id_kriteria` int(11) NOT NULL,
  `subkriteria_id_dari` int(11) NOT NULL,
  `subkriteria_id_tujuan` int(11) NOT NULL,
  `nilai` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `subkriteria_nilai`
--

INSERT INTO `subkriteria_nilai` (`id_subkriteria_nilai`, `id_kriteria`, `subkriteria_id_dari`, `subkriteria_id_tujuan`, `nilai`) VALUES
(10, 7, 27, 30, 1),
(11, 7, 27, 31, 1),
(12, 7, 27, 32, 1),
(13, 7, 30, 31, 1),
(14, 7, 30, 32, 1),
(15, 7, 31, 32, 1),
(16, 8, 35, 36, 1),
(17, 8, 35, 33, 1),
(18, 8, 35, 34, 1),
(19, 8, 36, 33, 1),
(20, 8, 36, 34, 1),
(21, 8, 33, 34, 1),
(25, 9, 39, 38, 1),
(26, 9, 39, 37, 1),
(27, 9, 38, 37, 1),
(28, 12, 41, 40, 1),
(29, 12, 41, 42, 1),
(30, 12, 40, 42, 1),
(37, 6, 26, 25, 1),
(38, 6, 26, 24, 2),
(39, 6, 25, 24, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(11) UNSIGNED NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `username` varchar(100) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `salt` varchar(255) DEFAULT NULL,
  `email` varchar(100) NOT NULL,
  `activation_code` varchar(40) DEFAULT NULL,
  `forgotten_password_code` varchar(40) DEFAULT NULL,
  `forgotten_password_time` int(11) UNSIGNED DEFAULT NULL,
  `remember_code` varchar(40) DEFAULT NULL,
  `created_on` int(11) UNSIGNED NOT NULL,
  `last_login` int(11) UNSIGNED DEFAULT NULL,
  `active` tinyint(1) UNSIGNED DEFAULT NULL,
  `first_name` varchar(50) DEFAULT NULL,
  `last_name` varchar(50) DEFAULT NULL,
  `company` varchar(100) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `ip_address`, `username`, `password`, `salt`, `email`, `activation_code`, `forgotten_password_code`, `forgotten_password_time`, `remember_code`, `created_on`, `last_login`, `active`, `first_name`, `last_name`, `company`, `phone`) VALUES
(1, '127.0.0.1', 'administrator', '$2a$07$SeBknntpZror9uyftVopmu61qg0ms8Qv1yV6FG.kQOSM.9QhmTo36', '', 'admin@admin.com', '', NULL, NULL, 'c.JN/a5NatMoXrnk5WrY1.', 1268889823, 1501400400, 1, 'Admin', 'istrator', 'ADMIN', '0');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users_groups`
--

CREATE TABLE `users_groups` (
  `id` int(11) UNSIGNED NOT NULL,
  `user_id` int(11) UNSIGNED NOT NULL,
  `group_id` mediumint(8) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `users_groups`
--

INSERT INTO `users_groups` (`id`, `user_id`, `group_id`) VALUES
(1, 1, 1),
(2, 1, 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `alternatif`
--
ALTER TABLE `alternatif`
  ADD PRIMARY KEY (`id_alternatif`);

--
-- Indexes for table `alternatif_nilai`
--
ALTER TABLE `alternatif_nilai`
  ADD PRIMARY KEY (`id_alternatif_nilai`);

--
-- Indexes for table `galeri`
--
ALTER TABLE `galeri`
  ADD PRIMARY KEY (`id_galeri`);

--
-- Indexes for table `groups`
--
ALTER TABLE `groups`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kriteria`
--
ALTER TABLE `kriteria`
  ADD PRIMARY KEY (`id_kriteria`);

--
-- Indexes for table `kriteria_nilai`
--
ALTER TABLE `kriteria_nilai`
  ADD PRIMARY KEY (`id_kriteria_nilai`);

--
-- Indexes for table `login_attempts`
--
ALTER TABLE `login_attempts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `nilai_kategori`
--
ALTER TABLE `nilai_kategori`
  ADD PRIMARY KEY (`id_nilai`);

--
-- Indexes for table `sekolah`
--
ALTER TABLE `sekolah`
  ADD PRIMARY KEY (`id_sekolah`);

--
-- Indexes for table `subkriteria`
--
ALTER TABLE `subkriteria`
  ADD PRIMARY KEY (`id_subkriteria`);

--
-- Indexes for table `subkriteria_hasil`
--
ALTER TABLE `subkriteria_hasil`
  ADD PRIMARY KEY (`id_subkriteria_hasil`);

--
-- Indexes for table `subkriteria_nilai`
--
ALTER TABLE `subkriteria_nilai`
  ADD PRIMARY KEY (`id_subkriteria_nilai`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users_groups`
--
ALTER TABLE `users_groups`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `uc_users_groups` (`user_id`,`group_id`),
  ADD KEY `fk_users_groups_users1_idx` (`user_id`),
  ADD KEY `fk_users_groups_groups1_idx` (`group_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `alternatif`
--
ALTER TABLE `alternatif`
  MODIFY `id_alternatif` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `alternatif_nilai`
--
ALTER TABLE `alternatif_nilai`
  MODIFY `id_alternatif_nilai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=88;
--
-- AUTO_INCREMENT for table `galeri`
--
ALTER TABLE `galeri`
  MODIFY `id_galeri` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `groups`
--
ALTER TABLE `groups`
  MODIFY `id` mediumint(8) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `kriteria`
--
ALTER TABLE `kriteria`
  MODIFY `id_kriteria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `kriteria_nilai`
--
ALTER TABLE `kriteria_nilai`
  MODIFY `id_kriteria_nilai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=201;
--
-- AUTO_INCREMENT for table `login_attempts`
--
ALTER TABLE `login_attempts`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `nilai_kategori`
--
ALTER TABLE `nilai_kategori`
  MODIFY `id_nilai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `sekolah`
--
ALTER TABLE `sekolah`
  MODIFY `id_sekolah` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `subkriteria`
--
ALTER TABLE `subkriteria`
  MODIFY `id_subkriteria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;
--
-- AUTO_INCREMENT for table `subkriteria_hasil`
--
ALTER TABLE `subkriteria_hasil`
  MODIFY `id_subkriteria_hasil` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `subkriteria_nilai`
--
ALTER TABLE `subkriteria_nilai`
  MODIFY `id_subkriteria_nilai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `users_groups`
--
ALTER TABLE `users_groups`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `users_groups`
--
ALTER TABLE `users_groups`
  ADD CONSTRAINT `fk_users_groups_groups1` FOREIGN KEY (`group_id`) REFERENCES `groups` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_users_groups_users1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
