-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Anamakine: localhost
-- Üretim Zamanı: 25 Ara 2022, 11:50:27
-- Sunucu sürümü: 8.0.17
-- PHP Sürümü: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `ogrblog`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `dersler`
--

CREATE TABLE `dersler` (
  `id` int(11) NOT NULL,
  `lessonName` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `dersler`
--

INSERT INTO `dersler` (`id`, `lessonName`) VALUES
(1, 'Yazılım Projeleri'),
(2, 'Diferansiyel Denklemler'),
(3, 'Algoritmalar'),
(5, 'İşletim Sistemleri'),
(6, 'Diferansiyel Denklemler');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `iletisim`
--

CREATE TABLE `iletisim` (
  `id` int(11) NOT NULL,
  `Name` varchar(30) NOT NULL,
  `PhoneNumber` varchar(11) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `Subject` varchar(30) NOT NULL,
  `Message` varchar(250) NOT NULL,
  `UserCode` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `iletisim`
--

INSERT INTO `iletisim` (`id`, `Name`, `PhoneNumber`, `Email`, `Subject`, `Message`, `UserCode`) VALUES
(1, 'Edison', '1564567898', 'deneme@gmail.com', 'test', 'asdfadsf', 1),
(2, 'dasd', 'asda', 'asdasd', 'asd', '	asdad						', 1);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `kullanicilar`
--

CREATE TABLE `kullanicilar` (
  `id` int(11) NOT NULL,
  `Name` varchar(30) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `Password` varchar(30) NOT NULL,
  `IsActive` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `kullanicilar`
--

INSERT INTO `kullanicilar` (`id`, `Name`, `Email`, `Password`, `IsActive`) VALUES
(1, 'Edison', 'edison@deneme.com', '1232', 1),
(2, 'HarunVeli', 'hvt@gmail.com', '1232', 1),
(3, 'Admin', 'admin@hotmail.com', 'admin', 1),
(5, 'Bilgecan Dede', 'dede@gmail.com', 'asdas', 1),
(7, 'deneme', 'test@hotmail.com', '159', 1);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `makaleler`
--

CREATE TABLE `makaleler` (
  `id` int(11) NOT NULL,
  `Title` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `Subject` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `Article` varchar(600) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `UserName` varchar(30) NOT NULL,
  `UserMail` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `makaleler`
--

INSERT INTO `makaleler` (`id`, `Title`, `Subject`, `Article`, `UserName`, `UserMail`) VALUES
(1, 'Tesla Semi', 'Tesla Semi Verimliliğiyle Baş Döndürüyor', 'fadsfasdfıuhasdkljfhadslkjfhklsadjfhlksadhfkljsadhfkajsdhfkashdfkljhadsfkjlhasdfkljhsadfkjhsdfsdfsadfasdfsadf', 'Edison', 'edison@deneme.com'),
(2, '2022 Vize Notları', 'Notlar açıklandı', '2022 vize sınavları neyse ki finaller gelmeden açıklandı. Meraklı bekleyiş bitti.', 'HarunVeli', 'hvt@gmail.com'),
(3, '2022 Final Takvimi Belli Oldu', 'Final', 'Merakla beklenen final takvimi belli oldu.								', 'HarunVeli', 'hvt@gmail.com'),
(4, 'Yeni Kampüs Açıldı', 'Neü Kampüs', 'İnşaası yeni biten mühendislik kampüsü kullanıma açıldı.								', 'Edison', 'edison@deneme.com'),
(6, 'Makale sayfası test ediliyor!', 'test', 'adfasdfasdfsadfasdf\r\nasdfasdfasdfasdfsad\r\ngfvdsagfdsagknjsfldgbkjdshflşgkjdsfşlgkjsdflşkgjlsdfşkgjsşdfkljgsdf\r\ngsdfgkljsdflşghjsdflkghjsdfşkljhgklsdşfgklşsdfjgklşdfsjglşksdfjglşksdfjglkşsdfg			', 'deneme', '159'),
(7, 'fvdsfvfdsv', 'svsfdvsdfv', 'davdsfvsdfgfsdg', 'HarunVeli', 'hvt@gmail.com');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `yorumlar`
--

CREATE TABLE `yorumlar` (
  `id` int(11) NOT NULL,
  `Comment` varchar(500) NOT NULL,
  `UserName` varchar(30) NOT NULL,
  `UserMail` varchar(30) NOT NULL,
  `ArticleId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `yorumlar`
--

INSERT INTO `yorumlar` (`id`, `Comment`, `UserName`, `UserMail`, `ArticleId`) VALUES
(1, 'Komedi ya.', 'HarunVeli', 'hvt@gmail.com', 4),
(2, 'Muhteşem :)', 'Edison', 'edison@deneme.com', 4),
(3, 'Muhteşem makale çok beğendim yeni gelmeli :D', 'HarunVeli', 'hvt@gmail.com', 4),
(4, 'Çok başarılı bir makale olmuş.', 'Ziyaretçi', '', 4),
(5, 'Aylar sonra gelen üzüntü :(', 'Ziyaretçi', '', 3),
(6, 'Sonunda be kardeşim finallere 2 hafta kaldı zaten. :-}', 'Ziyaretçi', '', 2),
(8, 'güzeeeel.', 'Edison', 'edison@deneme.com', 3),
(11, 'asdas :)', 'deneme', '159', 3),
(12, '___test başarılı___', 'Ziyaretçi', '', 6),
(13, 'fgasfasfsdf', 'Ziyaretçi', '', 6),
(14, 'agdkgdghddf', 'HarunVeli', 'hvt@gmail.com', 7);

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `dersler`
--
ALTER TABLE `dersler`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `iletisim`
--
ALTER TABLE `iletisim`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `kullanicilar`
--
ALTER TABLE `kullanicilar`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `makaleler`
--
ALTER TABLE `makaleler`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `yorumlar`
--
ALTER TABLE `yorumlar`
  ADD PRIMARY KEY (`id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `dersler`
--
ALTER TABLE `dersler`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Tablo için AUTO_INCREMENT değeri `iletisim`
--
ALTER TABLE `iletisim`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Tablo için AUTO_INCREMENT değeri `kullanicilar`
--
ALTER TABLE `kullanicilar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Tablo için AUTO_INCREMENT değeri `makaleler`
--
ALTER TABLE `makaleler`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Tablo için AUTO_INCREMENT değeri `yorumlar`
--
ALTER TABLE `yorumlar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
