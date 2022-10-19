-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 19 Okt 2022 pada 17.12
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `penjualan`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `auto_numbers`
--

CREATE TABLE `auto_numbers` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL,
  `number` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `auto_numbers`
--

INSERT INTO `auto_numbers` (`id`, `name`, `number`, `created_at`, `updated_at`) VALUES
(1, '790c8338f3d865e7f90c131ee2c5c627', 8, '2022-10-18 15:56:12', '2022-10-19 01:27:29'),
(2, '36c50bd6228154a9ea5711c4e2230e35', 3, '2022-10-18 16:01:25', '2022-10-19 01:17:45'),
(3, '4600104faa23698fda3aada3b7402df0', 6, '2022-10-18 19:20:17', '2022-10-18 21:51:34'),
(4, 'd9690582e9354accf7bdc96551e7002a', 8, '2022-10-18 19:21:03', '2022-10-19 01:54:25'),
(5, 'ed6f4029cb432b5ef9b368da8d36b1dd', 1, '2022-10-18 21:35:34', '2022-10-18 21:35:34'),
(6, 'c37bb50b10d6dabae054f2290a96e266', 9, '2022-10-18 21:37:22', '2022-10-19 07:44:33'),
(7, '72e895a052ee5e5de36f8ec098a7b36e', 2, '2022-10-18 21:43:33', '2022-10-18 21:45:19'),
(8, 'a88c27b0fbb9dd02b7e4ee60791eb1b9', 5, '2022-10-19 01:35:09', '2022-10-19 07:44:33');

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_10_16_152841_create_tbl_admin', 1),
(6, '2022_10_16_152859_create_tbl_transaksi', 1),
(7, '2022_10_16_152923_create_tbl_transaksi_detail', 1),
(8, '2022_10_16_152946_create_tbl_supplier', 1),
(9, '2022_10_16_153004_create_tbl_barang', 1),
(10, '2022_10_16_153022_create_tbl_jenis', 1),
(11, '2017_08_03_055212_create_auto_numbers', 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_admin` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `admin_level` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `admin_nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `admin_status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `tbl_admin`
--

INSERT INTO `tbl_admin` (`id`, `id_admin`, `username`, `password`, `admin_level`, `admin_nama`, `admin_status`, `created_at`, `updated_at`) VALUES
(2, 'Adm002', 'd019', '200519', 'CEO', 'Daniel', 'Aktif', '2022-10-18 21:50:51', '2022-10-18 21:50:51'),
(3, 'Adm003', 'um30', '47910', 'Sekertaris', 'Umdatul', 'Aktif', '2022-10-19 01:17:45', '2022-10-19 01:20:54');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_barang`
--

CREATE TABLE `tbl_barang` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_barang` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `barang_kode` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `barang_nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_jenis` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_supplier` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `harga_jual` int(11) NOT NULL,
  `barang_status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `tbl_barang`
--

INSERT INTO `tbl_barang` (`id`, `id_barang`, `barang_kode`, `barang_nama`, `id_jenis`, `id_supplier`, `harga_jual`, `barang_status`, `created_at`, `updated_at`) VALUES
(6, 'Brng006', 'B001', 'Sepatu', 'Jns001', 'Sppl006', 100, 'Asli', '2022-10-18 21:57:08', '2022-10-18 21:57:08'),
(7, 'Brng007', 'B001', 'Laptop', 'Asus', 'Sp001', 90, 'Baru', '2022-10-19 01:24:02', '2022-10-19 01:24:16'),
(8, 'Brng008', 'B002', 'Sapu', 'Jns008', 'Sppl006', 100, 'Asli', '2022-10-19 01:54:25', '2022-10-19 01:54:25');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_jenis`
--

CREATE TABLE `tbl_jenis` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_jenis` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenis_nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenis_status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `tbl_jenis`
--

INSERT INTO `tbl_jenis` (`id`, `id_jenis`, `jenis_nama`, `jenis_status`, `created_at`, `updated_at`) VALUES
(1, 'Jns001', 'Pro', 'Sangat Pro', '2022-10-18 15:56:12', '2022-10-18 15:56:12'),
(2, 'Jns002', 'Hello', 'Word', '2022-10-18 15:56:50', '2022-10-18 15:56:50'),
(3, 'Jns008', 'Appolo', 'Baru', '2022-10-19 01:27:29', '2022-10-19 01:27:39');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_supplier`
--

CREATE TABLE `tbl_supplier` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_supplier` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `supplier_nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `supplier_alamat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `supplier_phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `supplier_status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `tbl_supplier`
--

INSERT INTO `tbl_supplier` (`id`, `id_supplier`, `supplier_nama`, `supplier_alamat`, `supplier_phone`, `supplier_status`, `created_at`, `updated_at`) VALUES
(6, 'Sppl006', 'Store Daniel', 'Jember', '9021831', 'Aktif', '2022-10-18 21:51:34', '2022-10-18 21:51:42');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_transaksi`
--

CREATE TABLE `tbl_transaksi` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_transaksi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_admin` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `transaksi_tanggal` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `transaksi_nonota` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `transaksi_status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `tbl_transaksi`
--

INSERT INTO `tbl_transaksi` (`id`, `id_transaksi`, `id_admin`, `transaksi_tanggal`, `transaksi_nonota`, `transaksi_status`, `created_at`, `updated_at`) VALUES
(4, 'Trs002', 'Adm002', '2022-10-19', '0983', 'Aktif', '2022-10-18 21:52:35', '2022-10-18 21:52:35');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_transaksi_detail`
--

CREATE TABLE `tbl_transaksi_detail` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_transaksi_detail` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_transaksi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_barang` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `transaksi_jenis` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `transaksi_harga` int(11) NOT NULL,
  `transaksi_jumlah` int(11) NOT NULL,
  `transaksi_detail_status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `tbl_transaksi_detail`
--

INSERT INTO `tbl_transaksi_detail` (`id`, `id_transaksi_detail`, `id_transaksi`, `id_barang`, `transaksi_jenis`, `transaksi_harga`, `transaksi_jumlah`, `transaksi_detail_status`, `created_at`, `updated_at`) VALUES
(2, 'Trd001', '2', '2', '2', 2, 2, '2', '2022-10-19 01:35:09', '2022-10-19 01:35:09');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `auto_numbers`
--
ALTER TABLE `auto_numbers`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indeks untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indeks untuk tabel `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbl_barang`
--
ALTER TABLE `tbl_barang`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbl_jenis`
--
ALTER TABLE `tbl_jenis`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbl_supplier`
--
ALTER TABLE `tbl_supplier`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbl_transaksi`
--
ALTER TABLE `tbl_transaksi`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbl_transaksi_detail`
--
ALTER TABLE `tbl_transaksi_detail`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `auto_numbers`
--
ALTER TABLE `auto_numbers`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `tbl_barang`
--
ALTER TABLE `tbl_barang`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `tbl_jenis`
--
ALTER TABLE `tbl_jenis`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `tbl_supplier`
--
ALTER TABLE `tbl_supplier`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `tbl_transaksi`
--
ALTER TABLE `tbl_transaksi`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `tbl_transaksi_detail`
--
ALTER TABLE `tbl_transaksi_detail`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
