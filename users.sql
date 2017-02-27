-- phpMyAdmin SQL Dump
-- version 4.4.12
-- http://www.phpmyadmin.net
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 16 Şub 2017, 07:58:18
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
(1, 'home', '', 'Toptan Ambalajda TÃ¼rkiye''nin MarkasÄ±', 'navbar-1', '', '', 'slider-2', NULL, NULL, 'footer-1', '', '', 'Ana Sayfa ', 'Mobilya, Ana Sayfa Mobilya, Ev Dekorasyon', 1, '', '<p>				Click here for more info about this free website template created by TemplateMonster.com. This is a Bootstrap template that goes with several layout options (for desktop, tablet, smartphone landscape and portrait) to fit all popular screen resolutions. The PSD source files of this template are available for free for the registered members of TemplateMonster.com. Feel free to get them!						</p>', '', ''),
(2, 'about', 'logo.gif', 'TÃ¼rkiye''nin', 'navbar-1', '', '', 'slider-2', NULL, NULL, 'footer-1', '', '', 'description', 'keywords', 1, '<p>				asdfasd</p><div>sadf</div><div>asd</div><div>fasd</div><div><br /></div><div><br /></div><div><br /></div><div>asdfasdfas</div><div>f</div><div>asdf</div><div>asdf</div><div>asd</div><div>fas</div><div>dfa</div><div>dsf</div><div>ads</div><div>f</div><div><br /></div>', '', '', ''),
(3, 'products', 'logo.gif', 'Türkiye''nin', 'navbar-1', NULL, NULL, 'slider-2', NULL, NULL, 'footer-1', NULL, NULL, 'description', 'keywords', 1, NULL, NULL, NULL, NULL),
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
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `photos`
--

INSERT INTO `photos` (`id`, `name`, `imgurl`, `product_id`) VALUES
(4, '', NULL, NULL),
(23, '', '04.jpg', '53'),
(24, 'Deneme', 'add-a-page-04.png', '25');

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
  `description` varchar(500) DEFAULT NULL,
  `category` varchar(45) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=55 DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `products`
--

INSERT INTO `products` (`id`, `title`, `name`, `imgurl`, `stock`, `price`, `keywords`, `description`, `category`) VALUES
(25, 'Erce', 'Deneme', 'background.png', '500', '50 tl', 'Mutfak;Mobilya;Deneme-mobilya;deneme-erce;erce-mobilya-deneme', 'raydolap mutfak deneme erce', 'sub16-1'),
(26, '', '', '13407053_1285179724850070_3022049347853529755_n.png', '', '', 'Mobilya;', '', 'Mutfak'),
(27, '', '', '13729189_1224517750953975_4457178851222112167_n.jpg', '', '', 'Mutfak; Deneme', '', 'Mutfak'),
(28, '', '', '11988702.jpg', '', '', '', '', 'Banyo'),
(29, '', '', '12115710_10154114462316840_3312573224713728753_n.jpg', '', '', '', '', 'Banyo'),
(30, '', '', 'arrows.png', '', '', '', '', 'Mutfak'),
(31, '', '', 'favicon.ico', '', '', '', '', 'Mutfak'),
(34, 'Deneme', 'deneme', '03.jpg', '', '', 'Deneme', 'deneme', 'Mutfak'),
(35, 'deneme', 'Deneme', '01.jpg', '600', '1', '', '', 'Mutfak'),
(36, '', '', '12115710_10154114462316840_3312573224713728753_n.jpg', '', '', '', '', 'Mutfak'),
(37, '', '', '12115710_10154114462316840_3312573224713728753_n.jpg', '', '', '', '', 'Mutfak'),
(38, '', '', '75731.jpg', '', '', '', '', 'Mutfak'),
(39, '', '', '75731.jpg', '', '', '', '', 'Mutfak'),
(40, '', '', '', '', '', '', '', 'Mutfak'),
(41, 'erce', 'erce', '75731.jpg', '', '', '', '', 'Mutfak'),
(42, 'erce', 'erce', '75731.jpg', '', '', '', '', 'Mutfak'),
(43, '', '', '01.jpg', '', '', '', '', 'Mutfak'),
(44, '', '', '01.jpg', '', '', '', '', 'Mutfak'),
(45, '', '', '01.jpg', '', '', '', '', 'Mutfak'),
(46, '', '', '01.jpg', '', '', '', '', 'Mutfak'),
(47, '', '', '01.jpg', '', '', '', '', 'Mutfak'),
(48, '', '', '01.jpg', '', '', '', '', 'Mutfak'),
(49, '', '', '02.jpg', '', '', '', '', 'Mutfak'),
(50, '', '', '75731.jpg', '', '', '', '', 'Mutfak'),
(51, '', '', '75731.jpg', '', '', '', '', 'Mutfak'),
(52, '', '', '01.jpg', '', '', '', '', 'Mutfak'),
(53, '', '', '75731.jpg', '', '', '', '', 'Mutfak'),
(54, 'Deneme 01-18-2017', 'Deneme 01-18-2017', 'slide-1.jpg', '', '', 'mobilya;banyo;deneme;banyo-deneme;mobilya', 'Deneme 01-18-2017', 'Mutfak');

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

INSERT INTO `product_categories` (`id`, `category_list_name`, `category_name`, `parent_id`) VALUES
(1, 'Mutfak', 'mutfak', NULL),
(2, 'Banyo', 'banyo', NULL),
(3, 'Raydolap', 'raydolap', NULL),
(6, 'sub1-2', 'sub1-2', '1'),
(16, 'sub2-2', 'sub2-2', '2'),
(21, 'sub1-3', 'sub1-3', '1'),
(22, 'sub16-1', 'sub16-1', '16'),
(38, 'deneme1', 'deneme1', ''),
(39, 'erce', 'erce', ''),
(41, 'erce2', 'erce2', '1'),
(42, 'erce alt menu', 'erce alt menu', '41'),
(107, 'asd', 'asd', '22'),
(108, 'asd', 'asd', '22'),
(109, 'artÄ±k en son deneme', 'artÄ±k en son deneme', '1'),
(110, 'artÄ±k en son deneme', 'artÄ±k en son deneme', '1'),
(111, 'asd', 'asd', '22'),
(112, 'asdfasdf', 'asd', '6');

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
  `description` varchar(500) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `reference`
--

INSERT INTO `reference` (`id`, `title`, `name`, `imgurl`, `keywords`, `description`) VALUES
(2, 'asz', 'xcvz', 'xcvz', NULL, NULL),
(3, 'zxcv', 'zxcvzx', 'xcv', NULL, NULL),
(4, 'zxcv', 'zxcvzx', 'zxcv', NULL, NULL),
(5, 'cvx', 'xzcv', 'zxc', NULL, NULL),
(6, 'zxcxc', 'xcv', 'vzxc', NULL, NULL),
(7, 'zxcvzx', 'vzxcv', 'v', NULL, NULL),
(8, 'vzxcv', 'cvzxc', 'zxzx', NULL, NULL),
(9, 'xzcv', 'zxcv', 'cvzxcvzx', NULL, NULL),
(11, 'xzz', 'cv', 'xcv', NULL, NULL),
(12, 'asdf', 'asdf', 'vs2.jpg', 'asdf', 'asdf');

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

INSERT INTO `sliderphotos` (`id`, `name`, `title`, `description`, `date`) VALUES
(28, 'slide-1.jpg', 'Erce<zxc<zxc<z', 'ercexc<zxc<zxc', '2'),
(29, 'slide-2.jpg', '', '', '2'),
(30, 'slide-3.jpg', '', '', '3'),
(32, 'slide-4.jpg', 'Erce', 'erce', '5'),
(34, 'slide-5.jpg', 'sdf', 'asdf', '4'),
(37, '01.jpg', '', '', '2'),
(38, '02.jpg', '', '', '3'),
(48, 'slide-1.jpg', '', '', '2'),
(49, '03.jpg', '', '', '1');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=25;
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
