-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 17, 2021 at 03:00 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `restoran`
--

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) CHARACTER SET utf8 NOT NULL,
  `kategori` varchar(255) NOT NULL,
  `deskrpsi` text CHARACTER SET utf8 NOT NULL,
  `image` text CHARACTER SET utf8 NOT NULL,
  `harga` decimal(15,0) NOT NULL,
  `created_date` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`id`, `nama`, `kategori`, `deskrpsi`, `image`, `harga`, `created_date`, `updated_date`) VALUES
(1, 'Espresso', 'minuman', 'Minuman kopi paling dasar ini biasanya disajikan dalam demitasse alias cangkir khusus espresso berukuran 30 mililiter (satu shot) sampai 118 mililiter. Espresso bertekstur pekat dan pahit, dengan buih putih alias crema di atasnya yang terbentuk dari tekanan minyak dalam bijih kopi.', 'espresso.jpg', '30000', '2021-05-12 21:16:30', NULL),
(2, 'Ristretto', 'minuman', 'Dalam bahasa Italia, ristretto berarti \"terbatas\" atau \"terlarang\". Serupa dengan espresso, hanya saja takaran air dalam minuman ini lebih sedikit. Namun, waktu press dalam pembuatan ristretto sama dengan espresso.', 'ristretto.jpg', '32000', '2021-05-12 21:16:30', NULL),
(3, 'Americano', 'minuman', 'Americano terdiri dari satu shot espresso yang dituangkan dalam cangkir berukuran 178 mililiter yang dicampur dengan air panas hingga memenuhi gelas. Jenis lainnya adalah doppio, yakni segelas Americano dengan dua shot espresso. Minuman ini kerap disajikan dalam panas maupun dingin yang disebut iced Americano.', 'americano.jpg', '33000', '2021-05-12 21:16:30', NULL),
(4, 'Cappuccino', 'minuman', 'Kamu pasti selalu menemukan cappuccino dalam buku menu tiap kali pergi ke kedai kopi, atau bahkan kafe-kafe biasa. Cappuccino adalah olahan espresso yang paling banyak digemari, terutama bagi penikmat kopi dengan rasa lebih mild.\r\n\r\nMinuman ini terdiri dari espresso dan steamed milk dengan rasio 1:1. Namun, ada juga yang memakai perbandingan 1/3 espresso, 1/3 steamed milk, dan 1/3 susu foam. Biasanya disajikan dalam cangkir berkapasitas 88 mililiter hingga 177 mililiter.', 'cappuccino.jpg', '35000', '2021-05-12 21:16:30', NULL),
(5, 'Macchiato', 'minuman', 'Kalau kamu gak terlalu menikmati kopi yang cenderung pahit, kamu bisa pesan macchiato sebagai alternatif. Rasio steamed milk dalam minuman ini lebih besar dari espresso, sehingga ada sentuhan milky dan gurih. \r\n\r\nBiasanya semua olahan kopi di coffee shop autentik tidak menambahkan pemanis, tapi kamu bisa meminta barista untuk menyertakan gula dalam minumanmu.', 'macchiato.jpg', '37000', '2021-05-12 21:16:30', NULL),
(6, 'Cortado', 'minuman', 'Dalam bahasa Spanyol, cotardo artinya \"memotong\". Banyak orang yang menyamakan cortado dengan macchiato karena komposisinya mirip. Namun perbandingan espresso dan steamed milk cortado biasanya 1:1, meski di sejumlah tempat ada yang memakai rasio 1:2.', 'cortado.jpg', '39000', '2021-05-12 21:16:30', NULL),
(7, 'Latte', 'minuman', 'Perlu diingat, latte dan cappuccino adalah dua jenis racikan berbeda. Demikian dengan komposisi dan rasio bahannya. Latte biasanya menggunakan perbandingan espresso dan susu 2:1. Selain rasanya nikmat, latte biasanya disajikan dalam cangkir dengan motif indah di atasnya atau yang banyak disebut latte art.', 'latte.jpg', '41000', '2021-05-12 21:16:30', NULL),
(8, 'Flat White', 'minuman', 'Banyak pengertian berbeda mengenai olahan minuman berbasis espresso satu ini. Ada yang menyebut kalau flat white termasuk latte, sebagian beranggapan kalau ini merupakan cappuccino tanpa foam.\r\n\r\nFlat white biasanya terdiri dari 60 mililiter textured milk alias microfoam atau gelembung yang terbentuk saat susu dipanaskan. Kemudian dua shot espresso dituang di atasnya dan dicampur menjadi satu.', 'flat-white.jpg', '43000', '2021-05-12 21:16:30', NULL),
(9, 'Affogato', 'minuman', 'Sederhananya, affogato adalah es krim vanila yang dituang espresso shot. Paduan pahitnya kopi hitam dan es krim yang manis dan lembut menciptakan sensasi rasa menyenangkan. Apalagi saat es krim perlahan meleleh begitu tersiram espresso.', 'affogato.jpg', '44000', '2021-05-12 21:16:30', NULL),
(10, 'Mocaccino', 'minuman', 'Espresso, susu, dan cokelat merupakan paduan ideal dari secangkir moccacino. Dibanding kopi, lembutnya cokelat dan susu lebih mendominasi. Biasanya minuman ini menggunakan cokelat bubuk untuk campuran dan garnish, tapi ada juga yang memakai sirup cokelat di atasnya.', 'mocaccino.jpg', '45000', '2021-05-12 21:16:30', NULL),
(11, 'Bandeng Pesmol', 'makanan', 'Dari ikan Bandeng Segar', 'Bandeng Pesmol.jpeg', '40000', '2021-05-12 22:46:30', NULL),
(12, 'Lontong Sayur Polos', 'makanan', 'Dengan potongan Ayam dan Telur', 'Lontong sayur polos.jpeg', '10000', '2021-05-12 22:51:33', NULL),
(13, 'Rice bowl Ayam asam manis', 'makanan', 'Dengan Saus Asam Manis yang Pas', 'Rice bowl Ayam asam manis.jpeg', '15000', '2021-05-12 22:51:33', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `pembayaran`
--

CREATE TABLE `pembayaran` (
  `id` int(11) NOT NULL,
  `no_pesanan` int(11) NOT NULL,
  `total_bayar` decimal(15,0) NOT NULL,
  `created_date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pembayaran`
--

INSERT INTO `pembayaran` (`id`, `no_pesanan`, `total_bayar`, `created_date`) VALUES
(2, 1, '125000', '2021-05-12 21:29:00'),
(3, 2, '30000', '2021-05-12 21:29:00'),
(4, 3, '64000', '2021-05-12 21:29:00'),
(5, 4, '33000', '2021-05-12 21:29:00'),
(6, 5, '116000', '2021-05-12 21:29:00'),
(7, 6, '97000', '2021-05-12 21:29:00'),
(8, 7, '68000', '2021-05-12 21:29:00');

-- --------------------------------------------------------

--
-- Table structure for table `pesanan`
--

CREATE TABLE `pesanan` (
  `id` int(11) NOT NULL,
  `no_pesanan` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL,
  `quantity` int(2) NOT NULL,
  `subtotal` decimal(15,0) NOT NULL,
  `lunas` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pesanan`
--

INSERT INTO `pesanan` (`id`, `no_pesanan`, `menu_id`, `quantity`, `subtotal`, `lunas`) VALUES
(33, 1, 1, 3, '90000', 1),
(34, 1, 4, 1, '35000', 1),
(35, 2, 1, 1, '30000', 1),
(36, 3, 2, 2, '64000', 1),
(38, 4, 3, 1, '33000', 1),
(39, 5, 8, 2, '86000', 1),
(40, 5, 1, 1, '30000', 1),
(41, 6, 2, 2, '64000', 1),
(42, 6, 3, 1, '33000', 1),
(43, 7, 3, 1, '33000', 1),
(44, 7, 4, 1, '35000', 1),
(47, 8, 11, 1, '40000', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pesanan`
--
ALTER TABLE `pesanan`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `pembayaran`
--
ALTER TABLE `pembayaran`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `pesanan`
--
ALTER TABLE `pesanan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
