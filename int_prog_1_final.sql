-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 15 May 2021, 11:10:32
-- Sunucu sürümü: 10.4.14-MariaDB
-- PHP Sürümü: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `int_prog_1_final`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `admininfo`
--

CREATE TABLE `admininfo` (
  `id` int(10) NOT NULL,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `ip` varchar(10) DEFAULT NULL,
  `logindate` date DEFAULT NULL,
  `logoutdate` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `admininfo`
--

INSERT INTO `admininfo` (`id`, `username`, `password`, `ip`, `logindate`, `logoutdate`) VALUES
(1, 'Aytuncan', '123', '::1', '2021-05-15', '2021-05-15');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `personelGrup` varchar(50) NOT NULL,
  `tc` varchar(11) NOT NULL,
  `ad` varchar(50) NOT NULL,
  `soyad` varchar(50) NOT NULL,
  `meslek` varchar(50) NOT NULL,
  `mail` varchar(50) NOT NULL,
  `telefon` varchar(11) NOT NULL,
  `cinsiyet` varchar(15) NOT NULL,
  `dtarihi` date NOT NULL,
  `ktarihi` date NOT NULL DEFAULT current_timestamp(),
  `adres` varchar(100) NOT NULL,
  `kbilgisi` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `users`
--

INSERT INTO `users` (`id`, `personelGrup`, `tc`, `ad`, `soyad`, `meslek`, `mail`, `telefon`, `cinsiyet`, `dtarihi`, `ktarihi`, `adres`, `kbilgisi`) VALUES
(3, 'Sistem Birimi', '   16161616', '   Aytuncan   ', '   ÇETİN   ', '   Siber Güvenlik Departmanı   ', 'aytuncancetin@hotmail.com', '   05555555', '   Erkek   ', '2021-05-11', '2021-05-11', '  Bursa/kestel  ', '  Ordinarius seviyesinde bir yazılımcı  '),
(4, 'Web Birimi', '15151515', 'Selami', 'ŞAHİN', 'Php DEV', 'selamisahin@gmail.com', '0555555554', 'Erkek', '1997-12-01', '2021-05-11', '  DÜNYA  ', '  doktora öğrencisi    '),
(5, 'Web Birimi', '14141414141', 'Ali', 'dinlenmez', 'Backend Developer', 'alidinlenmez@hotmail.com', '05555555553', 'Erkek', '0004-05-05', '2021-05-12', 'Şanlıurfa/Siverek', 'Backend alanında yaptığı projeler ile kendini geliştirmiş ve sektörde adını duyurmuş bir isim.Haliha'),
(7, 'İdari Birim', ' 1111112234', ' Aytuncan  ', ' CETİN ', ' Yazılımcı ', 'aytuncan@gmail.com', ' 0555554456', ' Erkek ', '2021-05-11', '2021-05-15', ' BURSA ', ' Kişi Bİlgisi ');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `admininfo`
--
ALTER TABLE `admininfo`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `admininfo`
--
ALTER TABLE `admininfo`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Tablo için AUTO_INCREMENT değeri `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
