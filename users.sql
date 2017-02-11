-- phpMyAdmin SQL Dump
-- version 4.4.12
-- http://www.phpmyadmin.net
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 11 Şub 2017, 13:00:32
-- Sunucu sürümü: 5.6.25
-- PHP Sürümü: 5.6.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `users`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `messages`
--

CREATE TABLE IF NOT EXISTS `messages` (
  `id` int(11) NOT NULL,
  `message` varchar(500) DEFAULT NULL,
  `sender_id` int(11) NOT NULL,
  `receiver_id` int(11) NOT NULL,
  `sendtime` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Tablo döküm verisi `messages`
--

INSERT INTO `messages` (`id`, `message`, `sender_id`, `receiver_id`, `sendtime`) VALUES
(1, 'asdfasdf', 1, 1, '0000-00-00 00:00:00'),
(2, 'zxcvzxcvzx', 1, 1, '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `pages`
--

CREATE TABLE IF NOT EXISTS `pages` (
  `id` int(11) NOT NULL,
  `name` varchar(45) COLLATE utf8_turkish_ci NOT NULL,
  `logourl` varchar(150) COLLATE utf8_turkish_ci DEFAULT NULL,
  `title` varchar(45) CHARACTER SET utf8 DEFAULT NULL,
  `navbar` varchar(45) COLLATE utf8_turkish_ci NOT NULL,
  `navbar_color` varchar(45) COLLATE utf8_turkish_ci DEFAULT NULL,
  `navbar_opacity` varchar(45) COLLATE utf8_turkish_ci DEFAULT NULL,
  `slider` varchar(45) COLLATE utf8_turkish_ci NOT NULL,
  `slider_color` varchar(45) COLLATE utf8_turkish_ci DEFAULT NULL,
  `slider_opacity` varchar(45) COLLATE utf8_turkish_ci DEFAULT NULL,
  `footer` varchar(45) COLLATE utf8_turkish_ci NOT NULL,
  `footer_color` varchar(45) COLLATE utf8_turkish_ci DEFAULT NULL,
  `footer_opacity` varchar(45) COLLATE utf8_turkish_ci DEFAULT NULL,
  `description` varchar(45) COLLATE utf8_turkish_ci NOT NULL,
  `keywords` varchar(45) COLLATE utf8_turkish_ci NOT NULL,
  `template_id` int(11) DEFAULT NULL,
  `page_text` varchar(5000) COLLATE utf8_turkish_ci DEFAULT NULL,
  `slider_text` varchar(1000) COLLATE utf8_turkish_ci DEFAULT NULL,
  `contact_email` varchar(150) COLLATE utf8_turkish_ci DEFAULT NULL,
  `contact_info` varchar(1000) COLLATE utf8_turkish_ci DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `pages`
--

INSERT INTO `pages` (`id`, `name`, `logourl`, `title`, `navbar`, `navbar_color`, `navbar_opacity`, `slider`, `slider_color`, `slider_opacity`, `footer`, `footer_color`, `footer_opacity`, `description`, `keywords`, `template_id`, `page_text`, `slider_text`, `contact_email`, `contact_info`) VALUES
(1, 'home', '', '', 'navbar-1', '', '', 'slider-3', NULL, NULL, 'footer-1', '', '', 'Ana Sayfa', '', 1, '', '', '', ''),
(2, 'about', 'logo.gif', '', 'navbar-1', '', '', 'slider-2', NULL, NULL, 'footer-1', '', '', 'description', 'keywords', 1, '', '', '', ''),
(3, 'products', 'logo.gif', '', 'navbar-1', NULL, NULL, 'slider-2', NULL, NULL, 'footer-1', NULL, NULL, 'description', 'keywords', 1, NULL, NULL, NULL, NULL),
(4, 'references', 'logo.gif', '', 'navbar-1', '', '', 'slider-2', NULL, NULL, 'footer-1', '', '', 'description', 'keywords', 1, NULL, NULL, NULL, NULL),
(5, 'contact', '', '', 'navbar-1', '', '', 'slider-2', NULL, NULL, 'footer-1', '', '', 'description', 'keywords', 1, '', '', 'ercecanbalcioglu@gmail.com', '<h3>Ä°letiÅŸim</h3><h3><h5>Ä°letiÅŸim deneme<br />Tel: 123 12 12<br />Adres: Ankara/ Ã‡ankaya<br />Ä°letiÅŸim deneme</h5><div><br /></div></h3>');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `photos`
--

CREATE TABLE IF NOT EXISTS `photos` (
  `id` int(11) NOT NULL,
  `name` varchar(45) COLLATE utf8_turkish_ci DEFAULT NULL,
  `imgurl` varchar(150) COLLATE utf8_turkish_ci DEFAULT NULL,
  `product_id` varchar(45) COLLATE utf8_turkish_ci DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `photos`
--


-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `products`
--

CREATE TABLE IF NOT EXISTS `products` (
  `id` int(11) NOT NULL,
  `title` varchar(45) DEFAULT NULL,
  `name` varchar(45) NOT NULL,
  `imgurl` varchar(250) NOT NULL,
  `stock` varchar(45) NOT NULL,
  `price` varchar(45) NOT NULL,
  `keywords` varchar(500) DEFAULT NULL,
  `description` varchar(100) DEFAULT NULL,
  `category` varchar(45) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=55 DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `products`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `product_categories`
--

CREATE TABLE IF NOT EXISTS `product_categories` (
  `id` int(11) NOT NULL,
  `category_list_name` varchar(45) CHARACTER SET utf8 NOT NULL,
  `category_name` varchar(45) CHARACTER SET utf8 NOT NULL,
  `parent_id` varchar(45) CHARACTER SET utf8 DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=113 DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `product_categories`
--


-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `reference`
--

CREATE TABLE IF NOT EXISTS `reference` (
  `id` int(11) NOT NULL,
  `title` varchar(45) DEFAULT NULL,
  `name` varchar(45) NOT NULL,
  `imgurl` varchar(100) NOT NULL,
  `keywords` varchar(100) DEFAULT NULL,
  `description` varchar(45) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `reference`
--


-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `sliderphotos`
--

CREATE TABLE IF NOT EXISTS `sliderphotos` (
  `id` int(11) NOT NULL,
  `name` varchar(100) CHARACTER SET latin1 DEFAULT NULL,
  `title` varchar(45) CHARACTER SET latin1 DEFAULT NULL,
  `description` varchar(150) CHARACTER SET latin1 DEFAULT NULL,
  `date` varchar(45) CHARACTER SET latin1 DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=50 DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `sliderphotos`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `sociallinks`
--

CREATE TABLE IF NOT EXISTS `sociallinks` (
  `id` int(11) NOT NULL,
  `name` varchar(45) DEFAULT NULL,
  `url` varchar(45) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `sociallinks`
--

INSERT INTO `sociallinks` (`id`, `name`, `url`) VALUES
(1, 'Twitter', 'ercecanbalcioglu.com'),
(2, 'Facebook', 'ercecanbalcioglu.com'),
(3, 'Skype', 'ercecanbalcioglu.com'),
(4, 'Youtube', 'ercecanbalcioglu.com'),
(5, 'Rss', 'ercecanbalcioglu.com');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `template`
--

CREATE TABLE IF NOT EXISTS `template` (
  `id` int(11) NOT NULL,
  `name` varchar(45) COLLATE utf8_turkish_ci NOT NULL,
  `navbar_color` varchar(45) CHARACTER SET latin1 DEFAULT NULL,
  `navbar_opacity` varchar(45) CHARACTER SET latin1 DEFAULT NULL,
  `background` varchar(150) CHARACTER SET latin1 DEFAULT NULL,
  `background_color` varchar(45) CHARACTER SET latin1 DEFAULT NULL,
  `background_opacity` varchar(45) CHARACTER SET latin1 DEFAULT NULL,
  `font_size` varchar(45) CHARACTER SET latin1 DEFAULT NULL,
  `font_family` varchar(45) CHARACTER SET latin1 DEFAULT NULL,
  `footer_color` varchar(45) CHARACTER SET latin1 DEFAULT NULL,
  `footer_description` varchar(500) COLLATE utf8_turkish_ci DEFAULT NULL,
  `footer_opacity` varchar(45) CHARACTER SET latin1 DEFAULT NULL,
  `logo_navbar` varchar(150) CHARACTER SET latin1 DEFAULT NULL,
  `logo_favicon` varchar(150) CHARACTER SET latin1 DEFAULT NULL,
  `is_on` int(11) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `template`
--

INSERT INTO `template` (`id`, `name`, `navbar_color`, `navbar_opacity`, `background`, `background_color`, `background_opacity`, `font_size`, `font_family`, `footer_color`, `footer_description`, `footer_opacity`, `logo_navbar`, `logo_favicon`, `is_on`) VALUES
(1, 'template_1', '', '1', 'background9.jpg', 'Whitesmoke', '', '9', '', '', '\r\nTasarÄ±mlarÄ±mÄ±z benzersiz bir ÅŸekilde tasarÄ±mcÄ±larÄ±n saray,  klasik motifleri\r\n ve ihtiÅŸamÄ±nÄ± Ã¼rÃ¼nlerimize yansÄ±tarak canlandÄ±rdÄ±ÄŸÄ± Ã¶zgÃ¼n tasarÄ±mlardÄ±r...\r\n\r\nFirmamÄ±z ayrÄ±ca istediÄŸiniz tasarÄ±mÄ±n Ã¼retiminde size yardÄ±mcÄ± olmaktan memnuniyet duyar...', '0.8', 'unallar-ambalaj-ana.png', 'logo.JPG', 1),
(2, 'template_7', 'yellow', '0.6', '', 'red', '', '28', '', 'blue', NULL, '0.7', '', '', 0),
(3, 'template_2', '', '0.5', '', '', '', '28', '', '', NULL, '0.5', '', '', 0),
(4, 'template_3', '', '0.5', '', '', '', '28', '', '', NULL, '0.5', '', '', 0),
(5, 'template_4', '', '0.5', '', '', '', '28', '', '', NULL, '0.5', '', '', 0);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL,
  `username` varchar(45) NOT NULL,
  `password` varchar(40) NOT NULL,
  `login_session` varchar(45) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Tablo döküm verisi `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `login_session`) VALUES
(1, 'admin', 'd033e22ae348aeb5660fc2140aec35850c4da997', NULL);

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sender_id_idx` (`sender_id`),
  ADD KEY `receiver_id_idx` (`receiver_id`);

--
-- Tablo için indeksler `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`),
  ADD KEY `template_id_idx` (`template_id`);

--
-- Tablo için indeksler `photos`
--
ALTER TABLE `photos`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `category_name_idx` (`category`);

--
-- Tablo için indeksler `product_categories`
--
ALTER TABLE `product_categories`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `reference`
--
ALTER TABLE `reference`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `sliderphotos`
--
ALTER TABLE `sliderphotos`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `sociallinks`
--
ALTER TABLE `sociallinks`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `template`
--
ALTER TABLE `template`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name_UNIQUE` (`name`);

--
-- Tablo için indeksler `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username_UNIQUE` (`username`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- Tablo için AUTO_INCREMENT değeri `pages`
--
ALTER TABLE `pages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- Tablo için AUTO_INCREMENT değeri `photos`
--
ALTER TABLE `photos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=24;
--
-- Tablo için AUTO_INCREMENT değeri `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=55;
--
-- Tablo için AUTO_INCREMENT değeri `product_categories`
--
ALTER TABLE `product_categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=113;
--
-- Tablo için AUTO_INCREMENT değeri `reference`
--
ALTER TABLE `reference`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
--
-- Tablo için AUTO_INCREMENT değeri `sliderphotos`
--
ALTER TABLE `sliderphotos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=50;
--
-- Tablo için AUTO_INCREMENT değeri `sociallinks`
--
ALTER TABLE `sociallinks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- Tablo için AUTO_INCREMENT değeri `template`
--
ALTER TABLE `template`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- Tablo için AUTO_INCREMENT değeri `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- Dökümü yapılmış tablolar için kısıtlamalar
--

--
-- Tablo kısıtlamaları `messages`
--
ALTER TABLE `messages`
  ADD CONSTRAINT `receiver_id` FOREIGN KEY (`receiver_id`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `sender_id` FOREIGN KEY (`sender_id`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Tablo kısıtlamaları `pages`
--
ALTER TABLE `pages`
  ADD CONSTRAINT `template_id` FOREIGN KEY (`template_id`) REFERENCES `template` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
