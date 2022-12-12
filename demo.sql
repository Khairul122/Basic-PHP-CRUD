-- phpMyAdmin SQL Dump

-- version 5.1.0

-- https://www.phpmyadmin.net/

--

-- Host: 127.0.0.1

-- Waktu pembuatan: 11 Des 2022 pada 18.57

-- Versi server: 10.4.19-MariaDB

-- Versi PHP: 7.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";

START TRANSACTION;

SET time_zone = "+00:00";

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */

;

/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */

;

/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */

;

/*!40101 SET NAMES utf8mb4 */

;

--

-- Database: `demo`

--

-- --------------------------------------------------------

--

-- Struktur dari tabel `product`

--

CREATE TABLE
    `product` (
        `id_barang` int(11) NOT NULL,
        `nama_barang` varchar(255) NOT NULL,
        `harga` int(11) NOT NULL,
        `tanggal` timestamp NOT NULL DEFAULT current_timestamp()
    ) ENGINE = InnoDB DEFAULT CHARSET = latin1;

--

-- Dumping data untuk tabel `product`

--

INSERT INTO
    `product` (
        `id_barang`,
        `nama_barang`,
        `harga`,
        `tanggal`
    )
VALUES (
        3,
        'CPU',
        7000,
        '2021-02-10 14:30:12'
    ), (
        6,
        'Laptop',
        1000,
        '2022-12-11 17:32:49'
    ), (
        7,
        'Keyboard',
        2000,
        '2022-12-11 17:33:05'
    ), (
        8,
        'Mouse gaming',
        0,
        '2022-12-11 17:36:18'
    ), (
        9,
        'FAn',
        12000,
        '2022-12-11 17:40:28'
    ), (
        10,
        'Kursi Gaming',
        21000,
        '2022-12-11 17:41:17'
    ), (
        11,
        'Layar',
        11,
        '2022-12-11 17:44:52'
    ), (
        19,
        'ab',
        12,
        '2022-12-11 17:49:47'
    ), (
        20,
        'abc',
        123,
        '2022-12-11 17:51:18'
    );

--

-- Indexes for dumped tables

--

--

-- Indeks untuk tabel `product`

--

ALTER TABLE `product` ADD PRIMARY KEY (`id_barang`);

--

-- AUTO_INCREMENT untuk tabel yang dibuang

--

--

-- AUTO_INCREMENT untuk tabel `product`

--

ALTER TABLE
    `product` MODIFY `id_barang` int(11) NOT NULL AUTO_INCREMENT,
    AUTO_INCREMENT = 22;

COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */

;

/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */

;

/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */

;