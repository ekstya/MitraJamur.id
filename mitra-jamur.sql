-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 24, 2022 at 06:03 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mitra-jamur`
--

-- --------------------------------------------------------

--
-- Table structure for table `bukti_pembelian`
--

CREATE TABLE `bukti_pembelian` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `pembayaran_pembelian_id` bigint(20) UNSIGNED NOT NULL,
  `bukti` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `bukti_workshop`
--

CREATE TABLE `bukti_workshop` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `pembayaran_workshop_id` bigint(20) UNSIGNED NOT NULL,
  `bukti` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `desa`
--

CREATE TABLE `desa` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kecamatan_id` bigint(20) UNSIGNED NOT NULL,
  `namaDesa` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `detail_pembelian`
--

CREATE TABLE `detail_pembelian` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `pembelian_id` bigint(20) UNSIGNED NOT NULL,
  `produk_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jadwal_panen`
--

CREATE TABLE `jadwal_panen` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tanggalMulai` date NOT NULL,
  `jumlahBaglog` int(11) NOT NULL,
  `musim` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `kabupaten`
--

CREATE TABLE `kabupaten` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `provinsi_id` bigint(20) UNSIGNED NOT NULL,
  `namaKabupaten` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `kecamatan`
--

CREATE TABLE `kecamatan` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kabupaten_id` bigint(20) UNSIGNED NOT NULL,
  `namaKecamatan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(55, '2022_04_19_163924_create_provinsi_table', 1),
(56, '2022_04_19_163939_create_kabupaten_table', 1),
(57, '2022_04_19_163950_create_kecamatan_table', 1),
(58, '2022_04_19_164003_create_desa_table', 1),
(59, '2022_04_19_164019_create_user_table', 1),
(60, '2022_04_19_164158_create_workshop_table', 1),
(61, '2022_04_19_164215_create_pendaftaran_workshop_table', 1),
(62, '2022_04_19_164244_create_pembayaran_workshop_table', 1),
(63, '2022_04_19_164307_create_produk_table', 1),
(64, '2022_04_19_164354_create_pembelian_table', 1),
(65, '2022_04_19_164404_create_detail_pembelian_table', 1),
(66, '2022_04_19_164422_create_pembayaran_pembelian_table', 1),
(67, '2022_04_19_164438_create_jadwal_panen_table', 1),
(68, '2022_04_23_205953_create_bukti_pembelian_table', 1),
(69, '2022_04_23_210007_create_bukti_workshop_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `pembayaran_pembelian`
--

CREATE TABLE `pembayaran_pembelian` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tanggalPembayaran` date DEFAULT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `pembelian_id` bigint(20) UNSIGNED NOT NULL,
  `statusPembayaran` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pembayaran_workshop`
--

CREATE TABLE `pembayaran_workshop` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tanggalPembayaran` date DEFAULT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `pendaftaran_workshop_id` bigint(20) UNSIGNED NOT NULL,
  `statusPembayaran` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pembelian`
--

CREATE TABLE `pembelian` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tanggalPembelian` date NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `totalPembelian` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pendaftaran_workshop`
--

CREATE TABLE `pendaftaran_workshop` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tanggalPendaftaran` date NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `workshop_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `gambarProduk` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `namaProduk` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hargaProduk` int(11) NOT NULL,
  `stokProduk` int(11) NOT NULL,
  `deskripsiProduk` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `provinsi`
--

CREATE TABLE `provinsi` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `namaProvinsi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `namaUser` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `noHp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `desa_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `namaUser`, `noHp`, `email`, `role`, `desa_id`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'admin', '$2y$10$2tIP37oNr.ZL0scscC9z9.dfwXn.a17fUYgO.NVxiqAkjiEg/rkHm', 'Admin Mitra-JAMUR', '087857765446', 'admin@example.com', 'admin', NULL, '2022-04-23 23:47:29', '2022-04-23 23:47:29', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `workshop`
--

CREATE TABLE `workshop` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `gambarWorkshop` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `namaWorkshop` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `waktuWorkshop` date NOT NULL,
  `hargaWorkshop` int(11) NOT NULL,
  `deskripsiWorkshop` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bukti_pembelian`
--
ALTER TABLE `bukti_pembelian`
  ADD PRIMARY KEY (`id`),
  ADD KEY `bukti_pembelian_pembayaran_pembelian_id_foreign` (`pembayaran_pembelian_id`);

--
-- Indexes for table `bukti_workshop`
--
ALTER TABLE `bukti_workshop`
  ADD PRIMARY KEY (`id`),
  ADD KEY `bukti_workshop_pembayaran_workshop_id_foreign` (`pembayaran_workshop_id`);

--
-- Indexes for table `desa`
--
ALTER TABLE `desa`
  ADD PRIMARY KEY (`id`),
  ADD KEY `desa_kecamatan_id_foreign` (`kecamatan_id`);

--
-- Indexes for table `detail_pembelian`
--
ALTER TABLE `detail_pembelian`
  ADD PRIMARY KEY (`id`),
  ADD KEY `detail_pembelian_pembelian_id_foreign` (`pembelian_id`),
  ADD KEY `detail_pembelian_produk_id_foreign` (`produk_id`);

--
-- Indexes for table `jadwal_panen`
--
ALTER TABLE `jadwal_panen`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jadwal_panen_user_id_foreign` (`user_id`);

--
-- Indexes for table `kabupaten`
--
ALTER TABLE `kabupaten`
  ADD PRIMARY KEY (`id`),
  ADD KEY `kabupaten_provinsi_id_foreign` (`provinsi_id`);

--
-- Indexes for table `kecamatan`
--
ALTER TABLE `kecamatan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `kecamatan_kabupaten_id_foreign` (`kabupaten_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pembayaran_pembelian`
--
ALTER TABLE `pembayaran_pembelian`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pembayaran_pembelian_user_id_foreign` (`user_id`),
  ADD KEY `pembayaran_pembelian_pembelian_id_foreign` (`pembelian_id`);

--
-- Indexes for table `pembayaran_workshop`
--
ALTER TABLE `pembayaran_workshop`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pembayaran_workshop_user_id_foreign` (`user_id`),
  ADD KEY `pembayaran_workshop_pendaftaran_workshop_id_foreign` (`pendaftaran_workshop_id`);

--
-- Indexes for table `pembelian`
--
ALTER TABLE `pembelian`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pembelian_user_id_foreign` (`user_id`);

--
-- Indexes for table `pendaftaran_workshop`
--
ALTER TABLE `pendaftaran_workshop`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pendaftaran_workshop_user_id_foreign` (`user_id`),
  ADD KEY `pendaftaran_workshop_workshop_id_foreign` (`workshop_id`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `provinsi`
--
ALTER TABLE `provinsi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `user_username_unique` (`username`),
  ADD UNIQUE KEY `user_email_unique` (`email`),
  ADD KEY `user_desa_id_foreign` (`desa_id`);

--
-- Indexes for table `workshop`
--
ALTER TABLE `workshop`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bukti_pembelian`
--
ALTER TABLE `bukti_pembelian`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `bukti_workshop`
--
ALTER TABLE `bukti_workshop`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `desa`
--
ALTER TABLE `desa`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `detail_pembelian`
--
ALTER TABLE `detail_pembelian`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jadwal_panen`
--
ALTER TABLE `jadwal_panen`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kabupaten`
--
ALTER TABLE `kabupaten`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kecamatan`
--
ALTER TABLE `kecamatan`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;

--
-- AUTO_INCREMENT for table `pembayaran_pembelian`
--
ALTER TABLE `pembayaran_pembelian`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pembayaran_workshop`
--
ALTER TABLE `pembayaran_workshop`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pembelian`
--
ALTER TABLE `pembelian`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pendaftaran_workshop`
--
ALTER TABLE `pendaftaran_workshop`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `provinsi`
--
ALTER TABLE `provinsi`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `workshop`
--
ALTER TABLE `workshop`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `bukti_pembelian`
--
ALTER TABLE `bukti_pembelian`
  ADD CONSTRAINT `bukti_pembelian_pembayaran_pembelian_id_foreign` FOREIGN KEY (`pembayaran_pembelian_id`) REFERENCES `pembayaran_pembelian` (`id`);

--
-- Constraints for table `bukti_workshop`
--
ALTER TABLE `bukti_workshop`
  ADD CONSTRAINT `bukti_workshop_pembayaran_workshop_id_foreign` FOREIGN KEY (`pembayaran_workshop_id`) REFERENCES `pembayaran_workshop` (`id`);

--
-- Constraints for table `desa`
--
ALTER TABLE `desa`
  ADD CONSTRAINT `desa_kecamatan_id_foreign` FOREIGN KEY (`kecamatan_id`) REFERENCES `kecamatan` (`id`);

--
-- Constraints for table `detail_pembelian`
--
ALTER TABLE `detail_pembelian`
  ADD CONSTRAINT `detail_pembelian_pembelian_id_foreign` FOREIGN KEY (`pembelian_id`) REFERENCES `pembelian` (`id`),
  ADD CONSTRAINT `detail_pembelian_produk_id_foreign` FOREIGN KEY (`produk_id`) REFERENCES `produk` (`id`);

--
-- Constraints for table `jadwal_panen`
--
ALTER TABLE `jadwal_panen`
  ADD CONSTRAINT `jadwal_panen_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`);

--
-- Constraints for table `kabupaten`
--
ALTER TABLE `kabupaten`
  ADD CONSTRAINT `kabupaten_provinsi_id_foreign` FOREIGN KEY (`provinsi_id`) REFERENCES `provinsi` (`id`);

--
-- Constraints for table `kecamatan`
--
ALTER TABLE `kecamatan`
  ADD CONSTRAINT `kecamatan_kabupaten_id_foreign` FOREIGN KEY (`kabupaten_id`) REFERENCES `kabupaten` (`id`);

--
-- Constraints for table `pembayaran_pembelian`
--
ALTER TABLE `pembayaran_pembelian`
  ADD CONSTRAINT `pembayaran_pembelian_pembelian_id_foreign` FOREIGN KEY (`pembelian_id`) REFERENCES `pembelian` (`id`),
  ADD CONSTRAINT `pembayaran_pembelian_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`);

--
-- Constraints for table `pembayaran_workshop`
--
ALTER TABLE `pembayaran_workshop`
  ADD CONSTRAINT `pembayaran_workshop_pendaftaran_workshop_id_foreign` FOREIGN KEY (`pendaftaran_workshop_id`) REFERENCES `pendaftaran_workshop` (`id`),
  ADD CONSTRAINT `pembayaran_workshop_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`);

--
-- Constraints for table `pembelian`
--
ALTER TABLE `pembelian`
  ADD CONSTRAINT `pembelian_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`);

--
-- Constraints for table `pendaftaran_workshop`
--
ALTER TABLE `pendaftaran_workshop`
  ADD CONSTRAINT `pendaftaran_workshop_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`),
  ADD CONSTRAINT `pendaftaran_workshop_workshop_id_foreign` FOREIGN KEY (`workshop_id`) REFERENCES `workshop` (`id`);

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_desa_id_foreign` FOREIGN KEY (`desa_id`) REFERENCES `desa` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
