-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 18 May 2025, 14:45:27
-- Sunucu sürümü: 10.4.32-MariaDB
-- PHP Sürümü: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `etkinlik_db`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `admin`
--

CREATE TABLE `admin` (
  `admin_ID` int(11) NOT NULL,
  `kullanıcı_adi` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `baslangic_tarihi` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `basvurular`
--

CREATE TABLE `basvurular` (
  `Basvuru_ID` int(11) NOT NULL,
  `basvuru_tarihi` date NOT NULL,
  `Katilimci_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `etkinlikler`
--

CREATE TABLE `etkinlikler` (
  `Etkinlik_ID` int(11) NOT NULL,
  `etkinlik_zamani` datetime NOT NULL,
  `Katilimci_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `events`
--

CREATE TABLE `events` (
  `etkinlik_id` int(11) NOT NULL,
  `etkinlik_ad` varchar(50) NOT NULL,
  `etkinlik_tarih` date NOT NULL,
  `tanim` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Tablo döküm verisi `events`
--

INSERT INTO `events` (`etkinlik_id`, `etkinlik_ad`, `etkinlik_tarih`, `tanim`) VALUES
(5, 'test7', '2025-05-30', 'olacakkk'),
(6, 'racon', '2025-06-12', 'bayramınız mübarek olsun');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `girisler`
--

CREATE TABLE `girisler` (
  `Giris_ID` int(11) NOT NULL,
  `giris_zamani` datetime DEFAULT current_timestamp(),
  `qr_code` varchar(255) NOT NULL,
  `Katilimci_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Tetikleyiciler `girisler`
--
DELIMITER $$
CREATE TRIGGER `before_giris_insert` BEFORE INSERT ON `girisler` FOR EACH ROW BEGIN
    IF NEW.qr_code = '' THEN
        SET NEW.qr_code = CONCAT('QR_', NEW.Katilimci_ID);
    END IF;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `katilimci_girisleri`
--

CREATE TABLE `katilimci_girisleri` (
  `ad` varchar(255) NOT NULL,
  `soyad` varchar(255) NOT NULL,
  `giris_zamani` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `kullanicilar`
--

CREATE TABLE `kullanicilar` (
  `Katilimci_ID` int(11) NOT NULL,
  `ad` varchar(255) NOT NULL,
  `soyad` varchar(255) NOT NULL,
  `email` varchar(50) NOT NULL,
  `katilimci_turu` varchar(50) NOT NULL,
  `qr_code` varchar(100) NOT NULL,
  `etkinlik_adi` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Tablo döküm verisi `kullanicilar`
--

INSERT INTO `kullanicilar` (`Katilimci_ID`, `ad`, `soyad`, `email`, `katilimci_turu`, `qr_code`, `etkinlik_adi`) VALUES
(1, 'test', 'deneme', 'birisi@mail.com', 'admin', '', ''),
(2, 'test2', 'deneme', 'birisi2@mail.com', 'admin', '', ''),
(3, 'memati', 'bas', 'memati@bas.tr', 'Görevli', '', 'Y&Y');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `standlar`
--

CREATE TABLE `standlar` (
  `stand_ID` int(11) NOT NULL,
  `stand_adi` varchar(255) NOT NULL,
  `Etkinlik_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_ID`);

--
-- Tablo için indeksler `basvurular`
--
ALTER TABLE `basvurular`
  ADD PRIMARY KEY (`Basvuru_ID`),
  ADD KEY `fk_basvurular_kullanicilar` (`Katilimci_ID`),
  ADD KEY `idx_basvuru_tarihi` (`basvuru_tarihi`);

--
-- Tablo için indeksler `etkinlikler`
--
ALTER TABLE `etkinlikler`
  ADD PRIMARY KEY (`Etkinlik_ID`),
  ADD KEY `fk_etkinlikler_kullanicilar` (`Katilimci_ID`);

--
-- Tablo için indeksler `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`etkinlik_id`);

--
-- Tablo için indeksler `girisler`
--
ALTER TABLE `girisler`
  ADD PRIMARY KEY (`Giris_ID`),
  ADD KEY `fk_girisler_kullanicilar` (`Katilimci_ID`);

--
-- Tablo için indeksler `kullanicilar`
--
ALTER TABLE `kullanicilar`
  ADD PRIMARY KEY (`Katilimci_ID`),
  ADD KEY `idx_kullanici_id` (`Katilimci_ID`);

--
-- Tablo için indeksler `standlar`
--
ALTER TABLE `standlar`
  ADD PRIMARY KEY (`stand_ID`),
  ADD UNIQUE KEY `Etkinlik_ID` (`Etkinlik_ID`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- Tablo için AUTO_INCREMENT değeri `basvurular`
--
ALTER TABLE `basvurular`
  MODIFY `Basvuru_ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- Tablo için AUTO_INCREMENT değeri `etkinlikler`
--
ALTER TABLE `etkinlikler`
  MODIFY `Etkinlik_ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- Tablo için AUTO_INCREMENT değeri `events`
--
ALTER TABLE `events`
  MODIFY `etkinlik_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Tablo için AUTO_INCREMENT değeri `girisler`
--
ALTER TABLE `girisler`
  MODIFY `Giris_ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- Tablo için AUTO_INCREMENT değeri `kullanicilar`
--
ALTER TABLE `kullanicilar`
  MODIFY `Katilimci_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Tablo için AUTO_INCREMENT değeri `standlar`
--
ALTER TABLE `standlar`
  MODIFY `stand_ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- Dökümü yapılmış tablolar için kısıtlamalar
--

--
-- Tablo kısıtlamaları `basvurular`
--
ALTER TABLE `basvurular`
  ADD CONSTRAINT `basvurular_ibfk_1` FOREIGN KEY (`Katilimci_ID`) REFERENCES `kullanicilar` (`Katilimci_ID`) ON UPDATE CASCADE;

--
-- Tablo kısıtlamaları `etkinlikler`
--
ALTER TABLE `etkinlikler`
  ADD CONSTRAINT `etkinlikler_ibfk_1` FOREIGN KEY (`Katilimci_ID`) REFERENCES `kullanicilar` (`Katilimci_ID`) ON UPDATE CASCADE;

--
-- Tablo kısıtlamaları `girisler`
--
ALTER TABLE `girisler`
  ADD CONSTRAINT `girisler_ibfk_1` FOREIGN KEY (`Katilimci_ID`) REFERENCES `kullanicilar` (`Katilimci_ID`) ON UPDATE CASCADE;

--
-- Tablo kısıtlamaları `standlar`
--
ALTER TABLE `standlar`
  ADD CONSTRAINT `standlar_ibfk_1` FOREIGN KEY (`Etkinlik_ID`) REFERENCES `etkinlikler` (`Etkinlik_ID`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
