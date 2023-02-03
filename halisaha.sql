-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 26 Haz 2022, 15:11:15
-- Sunucu sürümü: 8.0.29
-- PHP Sürümü: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `halisaha`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `admin`
--

CREATE TABLE `admin` (
  `admin_id` int NOT NULL,
  `admin_name` varchar(50) NOT NULL,
  `admin_sifre` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Tablo döküm verisi `admin`
--

INSERT INTO `admin` (`admin_id`, `admin_name`, `admin_sifre`) VALUES
(2, 'umut', '123456');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `city`
--

CREATE TABLE `city` (
  `city_id` int NOT NULL,
  `city_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Tablo döküm verisi `city`
--

INSERT INTO `city` (`city_id`, `city_name`) VALUES
(1, 'İstanbul'),
(2, 'Yalova'),
(3, 'Ankara'),
(4, 'Bursa');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `saha`
--

CREATE TABLE `saha` (
  `saha_id` int NOT NULL,
  `saha_pic` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `saha_name` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `saha_prize` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `saha_tel` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `saha_text` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci,
  `city_id` int DEFAULT NULL,
  `id` int DEFAULT NULL,
  `username` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `durum` tinyint NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Tablo döküm verisi `saha`
--

INSERT INTO `saha` (`saha_id`, `saha_pic`, `saha_name`, `saha_prize`, `saha_tel`, `saha_text`, `city_id`, `id`, `username`, `durum`) VALUES
(11, 'bursa1.jpg\r\n', 'BURSA INFINTY HALISAHA', '255 TL', '05463216458', '\r\nSAHAMIZ KAPALI HALISAHADIR 7/24 AÇIKTIR FALAN FİLA...', 4, 17, 'bugra', 1),
(14, 'yalova2.jpg', 'Osmanım Halısaha', '500₺', '5454654654', 'Hergün Bakım Yapılmaktadır', 4, 1, 'umutk', 1),
(24, 'yalova2.jpg', 'Fatih Halısaha', '215₺', '5454654654', 'Halısaha falan filan', 2, 1, 'umutk', 0),
(26, 'istanbul1.jpg', 'JulSezar Halısaha', '190 TL', '5465165460', 'Halısaha falan filan', 1, 18, 'osman', 0);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL,
  `username` varchar(50) CHARACTER SET utf8mb3 COLLATE utf8_turkish_ci NOT NULL,
  `ad` varchar(50) CHARACTER SET utf8mb3 COLLATE utf8_turkish_ci NOT NULL,
  `soyad` varchar(50) CHARACTER SET utf8mb3 COLLATE utf8_turkish_ci NOT NULL,
  `tel` varchar(50) CHARACTER SET utf8mb3 COLLATE utf8_turkish_ci NOT NULL,
  `email` varchar(50) CHARACTER SET utf8mb3 COLLATE utf8_turkish_ci NOT NULL,
  `sifre` varchar(50) CHARACTER SET utf8mb3 COLLATE utf8_turkish_ci NOT NULL,
  `perm` varchar(50) CHARACTER SET utf8mb3 COLLATE utf8_turkish_ci NOT NULL DEFAULT 'user',
  `status` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `users`
--

INSERT INTO `users` (`id`, `username`, `ad`, `soyad`, `tel`, `email`, `sifre`, `perm`, `status`) VALUES
(1, 'umutk', 'umut', 'karahasan', '05455816315', 'pisporo1@gmail.com', '1234', 'user', 1),
(17, 'bugra', 'bugra', 'akar', '5454654654', 'bugra@gmail.com', '1234', 'user', 1),
(18, 'Osman', 'Osman', 'Ak', '545651651', 'osman@gmail.com', '123', 'user', 1);

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Tablo için indeksler `city`
--
ALTER TABLE `city`
  ADD PRIMARY KEY (`city_id`);

--
-- Tablo için indeksler `saha`
--
ALTER TABLE `saha`
  ADD PRIMARY KEY (`saha_id`),
  ADD KEY `city` (`city_id`),
  ADD KEY `id` (`id`);

--
-- Tablo için indeksler `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Tablo için AUTO_INCREMENT değeri `city`
--
ALTER TABLE `city`
  MODIFY `city_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Tablo için AUTO_INCREMENT değeri `saha`
--
ALTER TABLE `saha`
  MODIFY `saha_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- Tablo için AUTO_INCREMENT değeri `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- Dökümü yapılmış tablolar için kısıtlamalar
--

--
-- Tablo kısıtlamaları `saha`
--
ALTER TABLE `saha`
  ADD CONSTRAINT `city` FOREIGN KEY (`city_id`) REFERENCES `city` (`city_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `id` FOREIGN KEY (`id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
