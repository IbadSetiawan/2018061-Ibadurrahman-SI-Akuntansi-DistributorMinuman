-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 05 Jun 2023 pada 14.38
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 8.0.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `si_akun_dismin`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `barang`
--

CREATE TABLE `barang` (
  `id_barang` varchar(20) NOT NULL,
  `id_pegawai` varchar(20) NOT NULL,
  `merk` text NOT NULL,
  `harga` int(20) NOT NULL,
  `masuk` int(20) NOT NULL,
  `keluar` int(20) NOT NULL,
  `total` int(20) NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `barang`
--

INSERT INTO `barang` (`id_barang`, `id_pegawai`, `merk`, `harga`, `masuk`, `keluar`, `total`, `tanggal`) VALUES
('Ba211', 'Pe210', 'Ale - Ale', 20000, 50, 34, 16, '2023-05-10');

-- --------------------------------------------------------

--
-- Struktur dari tabel `customer`
--

CREATE TABLE `customer` (
  `id_customer` varchar(20) NOT NULL,
  `nama_customer` text NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `no_telp` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `customer`
--

INSERT INTO `customer` (`id_customer`, `nama_customer`, `alamat`, `no_telp`) VALUES
('Cus123', 'Joko Susilo', 'Gresik', '089781233464'),
('Cus124', 'Sarmiati', 'Tanggerang', '081234568135');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kas_bank`
--

CREATE TABLE `kas_bank` (
  `kode_unik` varchar(20) NOT NULL,
  `id_pengeluaran` varchar(20) NOT NULL,
  `id_pemasukan` varchar(20) NOT NULL,
  `deskripsi` text NOT NULL,
  `kas_keluar` int(50) NOT NULL,
  `kas_masuk` int(50) NOT NULL,
  `total` int(50) NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `kas_bank`
--

INSERT INTO `kas_bank` (`kode_unik`, `id_pengeluaran`, `id_pemasukan`, `deskripsi`, `kas_keluar`, `kas_masuk`, `total`, `tanggal`) VALUES
('Kas12345', 'Peng678', 'Mas789', 'Data dari penjualan dan pembelian ale - ale', 1200000, 1700000, 500000, '2023-05-10'),
('Kas12346', 'Peng678', 'Mas789', 'Data yang dimasukkan adalah pembelian dan penjualan produk merk Ale - Ale', 1900000, 2550000, 650000, '2023-06-04');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pegawai`
--

CREATE TABLE `pegawai` (
  `id_pegawai` varchar(20) NOT NULL,
  `nama_pegawai` text NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `pendidikan` varchar(20) NOT NULL,
  `no_telp` varchar(20) NOT NULL,
  `jabatan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pegawai`
--

INSERT INTO `pegawai` (`id_pegawai`, `nama_pegawai`, `alamat`, `pendidikan`, `no_telp`, `jabatan`) VALUES
('Pe210', 'Mansur Abdi', 'Surabaya blok B', 'SMA', '089178266478', 'Gudang'),
('Pe211', 'Cahyani Permatasari', 'Jakarta Pusat', 'S1 Admin', '083489546187', 'Admin Pemasukan'),
('Pe212', 'Hesti Purwitasari', 'Bandung Gg. Galau', 'S1 Admin', '081956718349', 'Admin Pengeluaran'),
('Pe213', 'Ahmad Ardi Selamet', 'Surabaya Perum Pertiwi', 'Magister Keuangan', '087145163169', 'Akuntan'),
('Pe214', 'Abdi Indrawan', 'Bogor Selatan Gg.Buntu', 'SMP', '081575825190', 'Gudang');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pemasukan`
--

CREATE TABLE `pemasukan` (
  `id_pemasukan` varchar(20) NOT NULL,
  `id_pegawai` varchar(20) NOT NULL,
  `id_penjualan` varchar(20) NOT NULL,
  `merk` text NOT NULL,
  `kas_masuk` int(50) NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pemasukan`
--

INSERT INTO `pemasukan` (`id_pemasukan`, `id_pegawai`, `id_penjualan`, `merk`, `kas_masuk`, `tanggal`) VALUES
('Mas789', 'Pe211', 'Ju546', 'Ale - Ale', 1700000, '2023-05-10'),
('Mas790', 'Pe210', 'Ju546', 'Ale-Ale', 1890000, '2023-06-04');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pembelian`
--

CREATE TABLE `pembelian` (
  `id_pembelian` varchar(20) NOT NULL,
  `id_suplier` varchar(20) NOT NULL,
  `id_barang` varchar(20) NOT NULL,
  `merk` text NOT NULL,
  `masuk` int(20) NOT NULL,
  `kas_keluar` int(50) NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pembelian`
--

INSERT INTO `pembelian` (`id_pembelian`, `id_suplier`, `id_barang`, `merk`, `masuk`, `kas_keluar`, `tanggal`) VALUES
('Bel98', 'Sup654', 'Ba211', 'Ale - Ale', 50, 1200000, '2023-05-10'),
('Bel99', 'Sup654', 'Ba211', 'Ale-Ale', 60, 1780000, '2023-06-04');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengeluaran`
--

CREATE TABLE `pengeluaran` (
  `id_pengeluaran` varchar(20) NOT NULL,
  `id_pegawai` varchar(20) NOT NULL,
  `id_pembelian` varchar(20) NOT NULL,
  `merk` text NOT NULL,
  `kas_keluar` int(50) NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pengeluaran`
--

INSERT INTO `pengeluaran` (`id_pengeluaran`, `id_pegawai`, `id_pembelian`, `merk`, `kas_keluar`, `tanggal`) VALUES
('Peng678', 'Pe212', 'Bel98', 'Ale - Ale', 1200000, '2023-05-10'),
('Peng679', 'Pe210', 'Bel98', 'Ale-Ale', 1800000, '2023-06-04');

-- --------------------------------------------------------

--
-- Struktur dari tabel `penjualan`
--

CREATE TABLE `penjualan` (
  `id_penjualan` varchar(20) NOT NULL,
  `id_customer` varchar(20) NOT NULL,
  `id_barang` varchar(20) NOT NULL,
  `merk` text NOT NULL,
  `keluar` int(20) NOT NULL,
  `kas_masuk` int(50) NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `penjualan`
--

INSERT INTO `penjualan` (`id_penjualan`, `id_customer`, `id_barang`, `merk`, `keluar`, `kas_masuk`, `tanggal`) VALUES
('Ju546', 'Cus123', 'Ba211', 'Ale-Ale', 12, 1700000, '2023-05-10'),
('Ju547', 'Cus123', 'Ba211', 'Ale-Ale', 15, 1600000, '2023-05-27'),
('Ju548', 'Cus123', 'Ba211', 'Ale-Ale', 20, 1550000, '2023-05-24');

-- --------------------------------------------------------

--
-- Struktur dari tabel `suplier`
--

CREATE TABLE `suplier` (
  `id_suplier` varchar(20) NOT NULL,
  `nama_suplier` text NOT NULL,
  `no_telp` varchar(20) NOT NULL,
  `perusahaan` varchar(50) NOT NULL,
  `alamat` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `suplier`
--

INSERT INTO `suplier` (`id_suplier`, `nama_suplier`, `no_telp`, `perusahaan`, `alamat`) VALUES
('Sup654', 'Nur Cahyono', '081264719012', 'PT. Makmur Sejati', 'Magelang Gg. Buntu');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`id_barang`),
  ADD KEY `id_pegawai` (`id_pegawai`);

--
-- Indeks untuk tabel `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id_customer`);

--
-- Indeks untuk tabel `kas_bank`
--
ALTER TABLE `kas_bank`
  ADD PRIMARY KEY (`kode_unik`),
  ADD KEY `id_pemasukan` (`id_pemasukan`),
  ADD KEY `id_pengeluaran` (`id_pengeluaran`);

--
-- Indeks untuk tabel `pegawai`
--
ALTER TABLE `pegawai`
  ADD PRIMARY KEY (`id_pegawai`);

--
-- Indeks untuk tabel `pemasukan`
--
ALTER TABLE `pemasukan`
  ADD PRIMARY KEY (`id_pemasukan`),
  ADD KEY `id_pegawai` (`id_pegawai`),
  ADD KEY `id_penjualan` (`id_penjualan`);

--
-- Indeks untuk tabel `pembelian`
--
ALTER TABLE `pembelian`
  ADD PRIMARY KEY (`id_pembelian`),
  ADD KEY `id_suplier` (`id_suplier`),
  ADD KEY `id_barang` (`id_barang`);

--
-- Indeks untuk tabel `pengeluaran`
--
ALTER TABLE `pengeluaran`
  ADD PRIMARY KEY (`id_pengeluaran`),
  ADD KEY `id_pegawai` (`id_pegawai`),
  ADD KEY `id_pembelian` (`id_pembelian`);

--
-- Indeks untuk tabel `penjualan`
--
ALTER TABLE `penjualan`
  ADD PRIMARY KEY (`id_penjualan`),
  ADD KEY `id_customer` (`id_customer`),
  ADD KEY `id_barang` (`id_barang`);

--
-- Indeks untuk tabel `suplier`
--
ALTER TABLE `suplier`
  ADD PRIMARY KEY (`id_suplier`);

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `barang`
--
ALTER TABLE `barang`
  ADD CONSTRAINT `barang_ibfk_1` FOREIGN KEY (`id_pegawai`) REFERENCES `pegawai` (`id_pegawai`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `kas_bank`
--
ALTER TABLE `kas_bank`
  ADD CONSTRAINT `kas_bank_ibfk_1` FOREIGN KEY (`id_pemasukan`) REFERENCES `pemasukan` (`id_pemasukan`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `kas_bank_ibfk_2` FOREIGN KEY (`id_pengeluaran`) REFERENCES `pengeluaran` (`id_pengeluaran`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `pemasukan`
--
ALTER TABLE `pemasukan`
  ADD CONSTRAINT `pemasukan_ibfk_1` FOREIGN KEY (`id_pegawai`) REFERENCES `pegawai` (`id_pegawai`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `pemasukan_ibfk_2` FOREIGN KEY (`id_penjualan`) REFERENCES `penjualan` (`id_penjualan`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `pembelian`
--
ALTER TABLE `pembelian`
  ADD CONSTRAINT `pembelian_ibfk_1` FOREIGN KEY (`id_suplier`) REFERENCES `suplier` (`id_suplier`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `pembelian_ibfk_2` FOREIGN KEY (`id_barang`) REFERENCES `barang` (`id_barang`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `pengeluaran`
--
ALTER TABLE `pengeluaran`
  ADD CONSTRAINT `pengeluaran_ibfk_1` FOREIGN KEY (`id_pegawai`) REFERENCES `pegawai` (`id_pegawai`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `pengeluaran_ibfk_2` FOREIGN KEY (`id_pembelian`) REFERENCES `pembelian` (`id_pembelian`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `penjualan`
--
ALTER TABLE `penjualan`
  ADD CONSTRAINT `penjualan_ibfk_1` FOREIGN KEY (`id_customer`) REFERENCES `customer` (`id_customer`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `penjualan_ibfk_2` FOREIGN KEY (`id_barang`) REFERENCES `barang` (`id_barang`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
