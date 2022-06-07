-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 06, 2022 at 12:53 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tubes`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `idadmin` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`idadmin`, `username`, `password`, `name`) VALUES
(1, 'admin', '12345678', 'administrator'),
(2, 'admin2', '12345678', 'Example Admin'),
(3, 'admin3', '12345678', 'Example Admin 3');

-- --------------------------------------------------------

--
-- Table structure for table `kategori_produk`
--

CREATE TABLE `kategori_produk` (
  `id_kategori` int(11) NOT NULL,
  `kategori` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategori_produk`
--

INSERT INTO `kategori_produk` (`id_kategori`, `kategori`) VALUES
(1, 'Laptop'),
(2, 'Komputer'),
(3, 'Mouse'),
(4, 'Keyboard');

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `idproduk` int(11) NOT NULL,
  `id_kategori` int(11) NOT NULL,
  `namaproduk` varchar(100) NOT NULL,
  `harga` int(11) NOT NULL,
  `stok` int(11) NOT NULL,
  `keterangan` text NOT NULL,
  `images` varchar(100) NOT NULL,
  `berat` int(11) NOT NULL,
  `pilihanwarna` varchar(35) NOT NULL,
  `deskripsi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`idproduk`, `id_kategori`, `namaproduk`, `harga`, `stok`, `keterangan`, `images`, `berat`, `pilihanwarna`, `deskripsi`) VALUES
(1, 1, 'Dell G5 15 SE ', 14464000, 14, 'GPU-nya pakai Radeon RX 5600M. Portnya banyak untuk multitasking dari USB-C, card reader, LAN, HDMi 2.0 sampai audio. Harganya USD 1.050. (The Verge)', 'images/laptop-terbaik-dunia-tahun-2020-versi-the-verge-12.png', 4000, 'hitam,putih', 'LAPTOP DELL LATITUDE E5280 CORE i5 GENERASI KE 7KONDISI SIAP PAKAIMULUS 97%DAN ORIGINAL 100% BLM PERNAH BONGKAR MASIH SEGELANSPESIFIKASI :Intel Core i5-7300U (7th) 2.7GHzSSD : 256GB( Super Kencang)RAM : 8GB DDR4Intel HD Graphics 620Ukuran Layar : 13 inchResolusi Layar : HD ( 1366 x 768 )Keyboard : US KeyboardTouchPadHD Web CameraSistem Operasi : Microsoft Windows 10Kondisi Barang-Mulus No minus- Bukan Servisan- Barang original- Engsel Kokoh- Semua Berfungsi Dengan Baik Dan Normal 100%# Dianjurkan Untuk Memesan Packingan Kayu Untuk Keamanan Yg lebih Aman Untuk Orderan Anda.Garansi Full 1 Bulanâ£â£Garansi Toko :- 1 BULAN Setelah Terima Barang,Dengan Syarat Dibawah Ini*Saat Konfirmasi Terima Barang Memberikan Penilaian PUAS / SMILE :)*Memberikan Bintang Dan Ulasan Positif-Garansi Dianggap VOID / Tidak Berlaku Jika Memberikan Ulasan NegatifKelengkapan :UnitCharger OriginalKabel PowerTas BaruMouse BaruNota PembelianSilahkan Di Order Stok Ready Banyak!'),
(5, 1, 'Macbook Pro M1 Pro 2021 16\" inch', 34000000, 5, '6\" inch 512GB 1TB 16 32GB MK183 MK193 MK1A3 - 16/512GB', 'images/laptop-terbaik-dunia-tahun-2020-versi-the-verge-5.png', 7000, 'grey', 'PRODUCT\r\n- Barang Di Jamin Baru / NEW 100% ORIGINAL\r\n- Garansi 1 Tahun (Kita Bantu Klaim Garansi Free)\r\n- Garansi Imei 1thn Bila Terkena Blok Akan Kita Bantu Buka\r\n- Garansi Tukar Unit Baru Jika Produk Cacat Fungsi (3x 24Jam)\r\n- Garansi Tukar Unit Baru Jika Ada Dent Pada Produk (1x 24jam)\r\n*HARUS ADA VIDEO UNBOXING*\r\n\r\nTRANSAKSI MELALUI TOKOPEDIA\r\n- Pengiriman menggunakan JNE / GOJEK\r\n- Pembayaran bisa cicilan kartu kredit\r\n- Varian CC n KREDIT = 2x Bayar\r\nMisal Harga Barang 30jt = 20jt Pakai Kartu Kredit + 10jt Trf Toped\r\n*Bisa lebih mudah langsung Menghubungi kami di tlp yang tertera di profile\r\n'),
(6, 1, 'Dell XPS 15 ', 27484000, 10, 'DELL XPS 7590\r\nCORE I7-9750H (12CPUS) 2.6GHZ\r\nRAM 8GB MASIH BISA UP\r\nSSD 256GB\r\nDUAL VGA INTEL UHD GRAPHICS 630\r\nNVIDIA GEFORCE GTX 1650 4GB DDR5 128-BIT\r\nSEMUA FUNGSI NORMAL\r\nKEYBOARD LAMPU NYALAH PASTINYA', 'images/laptop-terbaik-dunia-tahun-2020-versi-the-verge-11.png', 5000, 'hitam', 'SULTANN MERAPA GUYSSS\r\nHARGA BARU WOW CEK SENDIRI AJA LAH YAAAA BOSKUUHH\r\nUKURAN 15 INCH PAS BANGET DI BAWAK KEMANA2 PASTI\r\nLAYAR 4K 3840 x 2160\r\nKONDISI LUMAYAN MULUSSS\r\nCOCOK UNTUK RENDER , EDITING, DAN GAMING PASTI\r\nDI BAWAK NONGKRONG DAN KERJA MEWAH BANGET PASTINYAAA\r\nLCD BARUUU GUYSSS\r\n\r\nDELL XPS 7590\r\nCORE I7-9750H (12CPUS) 2.6GHZ\r\nRAM 8GB MASIH BISA UP\r\nSSD 256GB\r\nDUAL VGA INTEL UHD GRAPHICS 630\r\nNVIDIA GEFORCE GTX 1650 4GB DDR5 128-BIT\r\nSEMUA FUNGSI NORMAL\r\nKEYBOARD LAMPU NYALAH PASTINYA\r\n\r\nCHARGER DAN UNIT'),
(7, 1, 'Acer Chromebook Spin 13.5', 18000000, 20, '- 8th Generation Intel Core i5-8250U Processor (Up to 3.4GHz)\r\n- 13.5\" (2256 x 1504) Corning Gorilla Glass NBT IPS 10-point multi-touch screen with 3:2 aspect ratio\r\n- 8GB of Onboard LPDDR3 Memory & 128GB eMMC\r\n- 2 - USB Type-C ports USB 3.1 Gen 1 (up to 5 Gbps) DisplayPort over USB Type-C & USB Charging & 1 - USB 3.0 Type-A port\r\n- HD Webcam (1280 x 720) with 88 degree wide angle lens supporting High Dynamic Range (HDR)\r\n- Backlit Keyboard, Corning Gorilla Glass Touchpad & Wacom Stylus Pen\r\n- 3-cell Li-Ion (4670 mAh) Lithium Ion Battery, Up to 10 Hours Battery Life\r\n- Google Chrome Operating System', 'images/laptop-terbaik-dunia-tahun-2020-versi-the-verge-9.png', 4000, 'hitam,putih,silver', 'Spesifikasi product :\r\n\r\nSpin your way to amazing versatility with Acerâ€™s Chromebook Spin 13. This handy machine quickly transforms into anything you need it to beâ€” a Notebook, stand-up Display, Tent or Tabletâ€”thanks to its special 360Â° Hinge. A first for convertible Chromebooks, the elegant aluminum Chromebook Spin 13 uses a fast 8th Gen Intel processor and has a 13.5\" 2256 x 1504 IPS touchscreen display for seeing more of websites and documents\r\nColor : Grey (sesuai photo)\r\n\r\n- 8th Generation Intel Core i5-8250U Processor (Up to 3.4GHz)\r\n- 13.5\" (2256 x 1504) Corning Gorilla Glass NBT IPS 10-point multi-touch screen with 3:2 aspect ratio\r\n- 8GB of Onboard LPDDR3 Memory & 128GB eMMC\r\n- 2 - USB Type-C ports USB 3.1 Gen 1 (up to 5 Gbps) DisplayPort over USB Type-C & USB Charging & 1 - USB 3.0 Type-A port\r\n- HD Webcam (1280 x 720) with 88 degree wide angle lens supporting High Dynamic Range (HDR)\r\n- Backlit Keyboard, Corning Gorilla Glass Touchpad & Wacom Stylus Pen\r\n- 3-cell Li-Ion (4670 mAh) Lithium Ion Battery, Up to 10 Hours Battery Life\r\n- Google Chrome Operating System\r\n\r\nFor Info : WA 08xx.xxx.xxxx (STORE)'),
(8, 3, 'Digital Alliance G8 Revival', 225000, 50, 'UNTUK PROSES KLAIM\r\nClaim harus disertakan bukti video Unboxing dari awal kamu buka packingan\r\nsampai barang terlihat dan kamu cek kalau tidak disertakan video Unboxing kami tidak bisa bantu', 'images/mouse-gaming-murah-yang-bagus.png', 700, 'hitam,putih', 'Digital Alliance Gaming mouse G8 Revival di desain untuk kalangan gamer dengan desain yang sangat menarik, juga ditambahkan adanya 8 tombol . Mempunyai desain ergonomi yang sangat cocok terutama untuk para gamers agar lebih nyaman menggunakan dalam bermain game.Background Led Yang bisa Di sesuaikan dengan Keinginan Penguna.Terdiri Dari Warna LED Merah,Hijau,Biru,menambah bagus tampilan mouse.\r\n\r\nMouse Type G8 Revival RGB\r\nInterface USB golden plated\r\nImage Sensor A3050\r\nAcceleration 20G\r\nResolution DPI 1000/2000/3000/4000\r\nPolling rate 1000Hz\r\nKey 8 Buttons\r\nLeft&right switch Omron 20 million times\r\nLED RGB LED effect+software\r\nCable 1.7M Braided cable with meganet ring\r\nSystem Win 7 /Win8/Win10/Windows VISTA Windows XP\r\nPower supply 5V--100mA\r\nGaransi Resmi 1 Tahun'),
(9, 4, 'Digital Alliance Warrior X RGB', 800000, 30, 'Note :\r\n+ Cek stock terlebih dahulu sebelum order (Ketersediaan Terbatas)\r\n+ Gambar hanya ilustrasi, versi produk dapat berbeda tergantung kebijakan vendor, namun tidak mengurangi spesifikasi dan fungsi produk\r\n+ Request warna, ukuran dll. WAJIB cantumkan pada keterangan saat order. Jika tidak maka unit kami kirim secara random\r\n+ Berat tercantum BELUM termasuk Pack kayu dan Asuransi, Tanpa atc Packing kayu & Asuransi maka segala resiko pengiriman ditanggung PEMBELI', 'images/Meca-Warrior-X-RGB-Version-1-01.png', 1330, 'hitam,putih', 'Spesificasi:\r\n\r\nSWITCH\r\nSwitch Type Mechanical\r\nSwitch Name Outemu\r\nSwitch Color Green, Orange, Blue, Red\r\nSpecial Features Removable Switch, Splash Waterproof\r\nLifespan 50 Million Clicks Lifetime\r\n\r\nKEYBOARD\r\nModel Meca Warrior X RGB\r\nType Mechanical\r\nColor Black\r\nMaterial Top Cover : ABS + Metal, Bottom Cover : ABS\r\n\r\nDimension 357 x 133 x 36mm\r\nInterface USB Gold Plated\r\nKeycaps Double Injection\r\nCable Length 1.8m Braided Cable\r\nSpecial Feature Splash Waterproof\r\nBacklight RGB Color\r\nBacklight Effect LED with 20 Mode\r\n\r\nREADY STOCK!!!!!\r\n\r\nSilahkan Diorder langsung ATC aja');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`idadmin`);

--
-- Indexes for table `kategori_produk`
--
ALTER TABLE `kategori_produk`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`idproduk`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `idadmin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `kategori_produk`
--
ALTER TABLE `kategori_produk`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `idproduk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
