-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 07 May 2018, 22:08:04
-- Sunucu sürümü: 10.1.31-MariaDB
-- PHP Sürümü: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `giris`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `username` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `password` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `bakiye` int(15) NOT NULL,
  `debt` int(11) NOT NULL,
  `yetki` varchar(50) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `login`
--

INSERT INTO `login` (`id`, `username`, `password`, `bakiye`, `debt`, `yetki`) VALUES
(3, 'olcay', '123456', 474, 20, 'user'),
(4, 'serhat', '654321', 323, 5000, 'user'),
(5, 'sahin', '14531453', 200, 0, 'admin'),
(11, 'muhammed', '123321', 0, 0, 'user'),
(12, 'hÃ¼srev', '196161', 0, 0, 'user'),
(18, 'alico', '123123', 123, 123, 'user'),
(19, 'urazhoca', 'betikdiller', 123123, 654, 'user');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
