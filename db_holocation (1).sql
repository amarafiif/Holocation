-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jul 28, 2023 at 08:25 AM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_holocation`
--

-- --------------------------------------------------------

--
-- Table structure for table `article`
--

CREATE TABLE `article` (
  `id` int NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `article`
--

INSERT INTO `article` (`id`, `title`, `content`, `image`, `created_at`) VALUES
(7, 'Cara menjadi orang yang baik', 'Ketika kamu merasa bahwa kamu sedang tidak baik, kamu bisa memaksakan kehendakmu untuk menjadi baik dengan menggunakan ikan sepat ikan gabus, kenapa begitu? karena ikan tidak bisa berpikir layaknya manusia konvensional pada umumnya', '1689598346.png', '2023-07-17 12:52:26');

-- --------------------------------------------------------

--
-- Table structure for table `destination`
--

CREATE TABLE `destination` (
  `id` int NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `price` decimal(10,3) NOT NULL,
  `image` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `complete_address` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `destination`
--

INSERT INTO `destination` (`id`, `name`, `description`, `price`, `image`, `location`, `complete_address`) VALUES
(8, 'Jogja Sunset Candi Ratu Bokoh', 'Salah satu obyek wisata yang mempunuyai histpry yang panjang serta menawarkan suasana yang indah. Khususnya saat matahari tenggelam atau sunset. Ratusan orang berjubel di obyek wisata ini untuk menyaksikan mentari kembali pulang ke peraduannya. Keindahan sinar mentari yang akan tenggelam berlatar gerbang Ratu Boko serta langit yang cerah menjadikan pemandangan di Ratu Boko ini benar-benar menggoda dan sangat sahdu.\r\n\r\nNamun tidak jarang, banyak wisatawan yang menggerutu karena niatnya mengabadikan sunset, tertutup oleh banyaknya wisatawan yang ada di gerbang.\r\n\r\nNamun terlepas dari hal tersebut, obyek wisata yang berada 3 KM arah selatan dari Candi Prambanan ini, tetaplah menjadi destinasi favorit. Kawasan Ratu Boko berlokasi di atas sebuah bukit dengan ketinggian ± 195.97 m diatas permukaan laut.                                                        ', 40.000, '1688525958.png', 'Yogyakarta', 'Jl. Raya Piyungan - Kec. Prambanan, Daerah Istimewa Yogyakarta'),
(9, 'Keraton Yogya Tamansari', 'Taman Sari Water Castle atau dikenal sebagai Taman Sari Jogja adalah situs bekas taman atau kebun istana Keraton Ngayogyakarta Hadiningrat.\r\nSedikit menapaki sejarah Taman Sari Jogja, tempat ini dibangun sekitar tahun 1758 sampai 1765, yakni pada masa pemerintahan Sultan Hamengku Buwono I. Pada awalnya, taman ini bernama The Fragrant Garden dan kemudian baru efektif digunakan pada tahun 1765 sampai 1812 sebagai pesanggrahan Garjitawati atau bekas keraton lama. Garjitawati didirikan dan dimanfaatkan oleh Susuhunan Paku Buwono II sebagai tempat peristirahatan kereta kuda yang kemudian dibawa ke Imogiri. Biaya pembangunan tempat ini ditanggung oleh tumenggung Prawirosentiko yang pada masa itu menjabat sebagai Bupati Madiun. Fungsi Taman Sari sendiri dijadikan sebagai taman istana. Namun, jika Anda perhatikan model bangunannya, terdapat banyak bangunan tinggi seperti benteng pertahanan dari musuh. Komplek Taman Sari sendiri terbagi menjadi empat bagian, yaitu sebelah selatan, barat, timur, dan tenggara. Namun, saat ini sisa-sisa bagian Taman Sari yang bisa dilihat hanya area yang terdapat di barat daya kompleks Kedhaton saja. Di tanah seluas 10 hektar ini terdapat 57 bangunan, termasuk gedung, danau, kolam pemandian, jembatan gantung, lorong bawah tanah, hingga pulau buatan. Saking luasnya, rasanya tidak cukup datang ke sini hanya satu kali untuk mengeksplor semua spot menarik tersebut. ', 20.000, '1688631813.png', 'Yogyakarta', 'Patehan, Kecamatan Kraton, Kota Yogyakarta, Daerah Istimewa Yogyakarta 55133'),
(10, 'Gunung Merapa Jeep Lava Tour', 'Lokasi Lava Tour Merapi berada di lereng Gunung Merapi di Kawasan Kaliurang Yogyakarta. Untuk lebih lengkapnya, alamat Lava Tour Merapi terletak di Jl. Kaliurang Kecamatan Pakem, Kabupaten Sleman, Daerah Istimewa Yogyakarta. Agar bisa melakukan tour merapi ini, maka anda bisa menggunakan jasa-jasa trip yang tersedia. Dan rata-rata lokasi dari masing-masing biro ini berada di sekitaran Kaliurang Sleman Jogja. Biro Lava Tour Merapi cukup melimpah dan bisa disesuaikan dengan paket mana yang paling cocok dengan anda. Anda bisa menggunakan Google Maps untuk memudahkan dalam menemukan biro wisata untuk menemani anda selama Lava Tour Merapi. Atau gunakan saja maps dibawah ini agar laju kendaraan anda semakin mudah dengan petunjuk akuratnya.', 300.000, '1688699062.png', 'Yogyakarta', 'Jl. Kaliurang Kecamatan Pakem, Kabupaten Sleman, Daerah Istimewa Yogyakarta.'),
(12, 'Pantai Bali Tanah Lot', '                                Tanah Lot salah satu pura penting bagi umat Hindu Bali dan lokasi pura terletak di atas batu besar yang berada di lepas pantai. Selain itu, Pura Tanah Lot merupakan ikon pariwisata pulau Bali dan telah menjadi salah satu objek wisata terkenal di pulau Bali yang wajib di kunjungi. Karena saking terkenalnya tempat wisata di Bali ini, maka hampir setiap hari, objek wisata ini selalu ramai dengan kunjungan wisatawan. Selanjutnya, Pura Tanah Lot bangun di atas baru karang besar yang berada di tepi pantai. Pada saat air laut pasang, pura akan kelihatan di kelilingi air laut. Sedangkan pada saat air laut surut, pengunjung akan dapat berjalan mendekati lokasi pura. Selain itu, pengunjung atau wisatawan tidak di perbolehkan untuk memasuki area dalam pura (Lokasi Umat Hindu Sembahyang di pura).\r\n\r\nSelain itu, Pura Tanah Lot merupakan bagian dari Pura Kahyangan Jagat di Bali, di tujukan sebagai tempat memuja dewa penjaga laut.\r\n\r\nLebih lanjut, selain pura Tanah Lot, terdapat juga pura lain yang bernama Pura Batu Bolong. Kemudian, pura Batu Bolong juga terlihat dari tepi pantai Tanah Lot. Lokasi pura Batu Bolong berada di atas tebing yang menjorok ke laut mirip dengan tempat wisata Pura Luhur Uluwatu Bali.                            ', 50.000, '492-Bali3.png', 'Bali', 'Beraban, Kediri, Tabanan Regency, Bali 82121'),
(13, 'Nusa Penida', 'Nusa Penida merupakan salah satu pulau eksotis di Bali. Ada tiga pulau Nusa yang populer, tetapi Nusa Penida merupakan pulau terbesar dari Nusa Ceningan dan Nusa Lembongan. Nusa Penida identik dengan wisata pantai yang cantik. Gak heran kalau Nusa Penida disebut salah satu kepingan surga di Bali. Ada banyak spot menarik yang bisa kamu temukan di sana. Seakan jadi primadona baru wisata Bali, minat para wisatawan mengunjungi Nusa Penida tak pernah surut. ', 800.000, '1688861364.png', 'Bali', 'Nusa Penida, Kabupaten Klungkung, Bali.');

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE `review` (
  `id` int NOT NULL,
  `id_destination` int DEFAULT NULL,
  `visitor_name` varchar(255) DEFAULT NULL,
  `review` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `review`
--

INSERT INTO `review` (`id`, `id_destination`, `visitor_name`, `review`) VALUES
(8, 9, 'Muhammad Ammar Afif', 'Semoga selalu sehat dan bahagia'),
(12, 8, 'Muhammad Ammar Afif', 'Disini mantap, ada kolam ikan lelenya sumpah gokill banget asli'),
(13, 12, 'Fresh Banget', 'Banget Gokil');

-- --------------------------------------------------------

--
-- Table structure for table `ticket`
--

CREATE TABLE `ticket` (
  `id` int NOT NULL,
  `ticket_code` varchar(255) DEFAULT NULL,
  `id_destination` int DEFAULT NULL,
  `id_users` int NOT NULL,
  `visitor_name` varchar(255) DEFAULT NULL,
  `arrival_date` varchar(255) NOT NULL,
  `ticket_total` int DEFAULT NULL,
  `price_total` decimal(10,3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `ticket`
--

INSERT INTO `ticket` (`id`, `ticket_code`, `id_destination`, `id_users`, `visitor_name`, `arrival_date`, `ticket_total`, `price_total`) VALUES
(2, 'HOL64aa9d35172e7', 8, 6, 'Febrian', '2023-07-27', 2, 80.000),
(3, 'HOL64aa9d9d09aa7', 8, 6, 'ikan', '2023-07-12', 4, 160.000),
(4, 'HOL64ac662f800e6', 8, 6, 'Renaldy Saputra', '2023-08-05', 3, 120.000),
(6, 'HOL64b1df4abb148', 13, 8, 'Malik', '2023-07-26', 1, 800.000),
(7, 'HOL64b1df73e13a6', 13, 8, 'User1', '2023-07-25', 3, 2400.000),
(10, 'HOL64bb4736e1599', 12, 9, 'Muhammad Ammar Afif', '2023-07-24', 5, 250.000),
(11, 'HOL64bb4efb2665c', 8, 9, 'Amarafif', '2023-07-30', 2, 80.000);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(10) DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `username`, `password`, `role`) VALUES
(4, 'Muhammad Ammar Afif', 'amarafif230@gmail.com', 'amarafif', 'sabar123qw', 'user'),
(5, 'Administrator', 'admin@amarafiif.my.id', 'admin', 'sabar123qw', 'admin'),
(7, 'Muhammad Ammar ', 'amarafif230@gmail.com', 'amarafif', 'sabar123qw', 'user'),
(9, 'User', 'user@gmail.com', 'user', 'sabar123qw', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `article`
--
ALTER TABLE `article`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `destination`
--
ALTER TABLE `destination`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `review`
--
ALTER TABLE `review`
  ADD PRIMARY KEY (`id`),
  ADD KEY `review_ibfk_1` (`id_destination`);

--
-- Indexes for table `ticket`
--
ALTER TABLE `ticket`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_destination` (`id_destination`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `article`
--
ALTER TABLE `article`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `destination`
--
ALTER TABLE `destination`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `review`
--
ALTER TABLE `review`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `ticket`
--
ALTER TABLE `ticket`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `review`
--
ALTER TABLE `review`
  ADD CONSTRAINT `review_ibfk_1` FOREIGN KEY (`id_destination`) REFERENCES `destination` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `ticket`
--
ALTER TABLE `ticket`
  ADD CONSTRAINT `ticket_ibfk_1` FOREIGN KEY (`id_destination`) REFERENCES `destination` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
