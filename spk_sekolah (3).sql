-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 05 Agu 2017 pada 20.30
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
  `nama_kriteria` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kriteria`
--

INSERT INTO `kriteria` (`id_kriteria`, `nama_kriteria`) VALUES
(13, 'SI  Sikap Spritual Siswa sesuai tingkat kompetensi'),
(14, 'SI  Sikap Sosial Siswa sesuai tingkat kompetensi'),
(15, 'SI  Pengetahuan Siswa sesuai tingkat kompetensi'),
(16, 'SP Mengembangkan Silabus (9 Komponen)'),
(17, 'SP Mengembangkan RPP dari silabus, secara lengkap dan sistematis'),
(18, 'SP Siswa menggunakan buku teks pelajaran dalam proses pembelajaran'),
(19, 'SKL Guru memiliki kualifikasi akademik minimum sarjana (S1) atau diploma empat (D4) dari program studi terakreditasi'),
(20, 'SKL Guru memiliki sertifikat pendidik');

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
(4, 'Kurang'),
(5, 'Sangat Kurang');

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
(3, 'SMAN 18 Makassar', 'Akbar abustang', 'Komp. Mangga Tiga Permai Daya Makassar', 'Menjadi sekolah yang unggul dalam bidang imtaq dan ipteks yang berwawasan lingkungan', 'Mengaktualisasikan ajaran agama secara konsekuen\r\nMelaksanakan managemen partisipatif berbasis pelayanan prima\r\nMelaksanakan proses pembelajaran berkualitas\r\nMembina bakat dan minat siswa dalam kegiatan ekstrakurikuler\r\nMeningkatkan profesionalisme guru dan staf tata usaha yang berbasis kinerja.\r\nMewujudkan kemitraan seluruh stageholder menuju sekolah yang unggul.\r\nMemaksimalkan kecintaan lingkungan dengan upaya mencegah terjadinya pencemaran lingkungan.\r\nMemaksimalkan kecintaan lingkungan dengan upaya mencegah terjadinya kerusakan lingkungan.\r\nMemaksimalkan kecintaan lingkungan dengan upaya menjaga pelestarian lingkungan.', '0411 - 511121'),
(4, 'SMK Kartika', 'ana', 'jl.sunu', 'yaaaa', 'taaa', '88'),
(5, 'SMA TES', 'akbar', 'jl. masjid raya', 'memajukan yang dibelakang', 'membantu visi memajukan yang dibelakang', '99898');

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
(45, '=> 91 <= 100', 13, 'nilai', 91, 100, '=>', '<=', 1),
(46, '=> 81 <= 90', 13, 'nilai', 81, 90, '=>', '<=', 2),
(47, '=> 71 <= 80', 13, 'nilai', 71, 80, '=>', '<=', 3),
(48, '=> 61 <= 70', 13, 'nilai', 61, 70, '=>', '<=', 4),
(49, '=> 0 <= 60', 13, 'nilai', 0, 60, '=>', '<=', 5),
(50, '=> 91 <= 100', 14, 'nilai', 91, 100, '=>', '<=', 1),
(51, '=> 81 <= 90', 14, 'nilai', 81, 90, '=>', '<=', 2),
(52, '=> 71 <= 80', 14, 'nilai', 71, 80, '=>', '<=', 3),
(53, '=> 61 <= 70', 14, 'nilai', 61, 70, '=>', '<=', 4),
(54, '=> 0 <= 60', 14, 'nilai', 0, 60, '=>', '<=', 5),
(55, '=> 91 <= 100', 15, 'nilai', 91, 100, '=>', '<=', 1),
(56, '=> 81 <= 90', 15, 'nilai', 81, 90, '=>', '<=', 2),
(57, '=> 71 <= 80', 15, 'nilai', 71, 80, '=>', '<=', 3),
(58, '=> 61 <= 70', 15, 'nilai', 61, 70, '=>', '<=', 4),
(59, '=> 0 <= 60', 15, 'nilai', 0, 60, '=>', '<=', 5),
(60, 'Memuat 9 komponen dalam silabus', 16, 'teks', NULL, NULL, NULL, NULL, 1),
(61, 'Memuat 8 komponen dalam silabus', 16, 'teks', NULL, NULL, NULL, NULL, 2),
(62, 'Memuat 7 komponen dalam silabus', 16, 'teks', NULL, NULL, NULL, NULL, 3),
(63, 'Memuat 6 komponen dalam silabus', 16, 'teks', NULL, NULL, NULL, NULL, 4),
(64, 'Memuat kurang dari 6 komponen dalam silabus', 16, 'teks', NULL, NULL, NULL, NULL, 5),
(65, '100% mata pelajaran', 17, 'teks', NULL, NULL, NULL, NULL, 1),
(66, '95%-99% mata pelajaran', 17, 'teks', NULL, NULL, NULL, NULL, 2),
(67, '90%-94% mata pelajaran', 17, 'teks', NULL, NULL, NULL, NULL, 3),
(68, '85%-89% mata pelajaran', 17, 'teks', NULL, NULL, NULL, NULL, 4),
(69, 'Kurang dari 85% mata pelajaran', 17, 'teks', NULL, NULL, NULL, NULL, 5),
(70, '100% menggunakan buku teks', 18, 'teks', NULL, NULL, NULL, NULL, 1),
(71, '95%-99% menggunakan buku teks', 18, 'teks', NULL, NULL, NULL, NULL, 2),
(72, '90%-94% menggunakan buku teks', 18, 'teks', NULL, NULL, NULL, NULL, 3),
(73, '85%-89% menggunakan buku teks', 18, 'teks', NULL, NULL, NULL, NULL, 4),
(74, 'Kurang dari 85% menggunakan buku teks', 18, 'teks', NULL, NULL, NULL, NULL, 5),
(75, '20% atau lebih berpendidikan S2 dan/atau S3, seleb', 19, 'teks', NULL, NULL, NULL, NULL, 1),
(76, '100% berpendidikan S1/D4', 19, 'teks', NULL, NULL, NULL, NULL, 2),
(77, '91%-99% berpendidikan S1/D4', 19, 'teks', NULL, NULL, NULL, NULL, 3),
(78, '81%-90% berpendidikan S1/D4', 19, 'teks', NULL, NULL, NULL, NULL, 4),
(79, 'Kurang dari 81% berpendidikan S1/D4', 19, 'teks', NULL, NULL, NULL, NULL, 5),
(80, '86%-100% memiliki sertifikat pendidik', 20, 'teks', NULL, NULL, NULL, NULL, 1),
(81, '71%-85% memiliki sertifikat pendidik', 20, 'teks', NULL, NULL, NULL, NULL, 2),
(82, '56%-70% memiliki sertifikat pendidik', 20, 'teks', NULL, NULL, NULL, NULL, 3),
(83, '41%-55% memiliki sertifikat pendidik', 20, 'teks', NULL, NULL, NULL, NULL, 4),
(84, 'Kurang dari 41% memiliki sertifikat pendidik', 20, 'teks', NULL, NULL, NULL, NULL, 5);

-- --------------------------------------------------------

--
-- Struktur dari tabel `subkriteria_hasil`
--

CREATE TABLE `subkriteria_hasil` (
  `id_subkriteria_hasil` int(11) NOT NULL,
  `id_subkriteria` int(11) NOT NULL,
  `prioritas` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
(1, '127.0.0.1', 'administrator', '$2a$07$SeBknntpZror9uyftVopmu61qg0ms8Qv1yV6FG.kQOSM.9QhmTo36', '', 'admin@admin.com', '', 'suPo-mllp0t.uEXFBxuWeu01206297e748015fbf', 1501472329, 'c.JN/a5NatMoXrnk5WrY1.', 1268889823, 1501511275, 1, 'Akbar', 'Abustang', 'ADMIN', '0'),
(2, '127.0.0.1', 'akbar_abustang@ymail.com', '$2y$08$2.WYS75wI9v6szcwD9sOm.cNc1wVNdC4h6vHo7peYi4X6oxnOs1Eq', NULL, 'akbar_abustang@ymail.com', NULL, NULL, NULL, NULL, 1501430021, 1501946014, 1, 'Akbar', 'Satyani', 'Web Developer', '082394315392');

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
(5, 1, 1),
(6, 1, 2),
(8, 2, 1),
(9, 2, 2);

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
  MODIFY `id_alternatif` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `alternatif_nilai`
--
ALTER TABLE `alternatif_nilai`
  MODIFY `id_alternatif_nilai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=104;
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
  MODIFY `id_kriteria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `kriteria_nilai`
--
ALTER TABLE `kriteria_nilai`
  MODIFY `id_kriteria_nilai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=301;
--
-- AUTO_INCREMENT for table `login_attempts`
--
ALTER TABLE `login_attempts`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `nilai_kategori`
--
ALTER TABLE `nilai_kategori`
  MODIFY `id_nilai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `sekolah`
--
ALTER TABLE `sekolah`
  MODIFY `id_sekolah` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `subkriteria`
--
ALTER TABLE `subkriteria`
  MODIFY `id_subkriteria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=85;
--
-- AUTO_INCREMENT for table `subkriteria_hasil`
--
ALTER TABLE `subkriteria_hasil`
  MODIFY `id_subkriteria_hasil` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `subkriteria_nilai`
--
ALTER TABLE `subkriteria_nilai`
  MODIFY `id_subkriteria_nilai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=115;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `users_groups`
--
ALTER TABLE `users_groups`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
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
