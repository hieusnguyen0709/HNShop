-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1:3306
-- Thời gian đã tạo: Th10 30, 2021 lúc 01:27 PM
-- Phiên bản máy phục vụ: 5.7.31
-- Phiên bản PHP: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `hnshop-main`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_admin`
--

DROP TABLE IF EXISTS `tbl_admin`;
CREATE TABLE IF NOT EXISTS `tbl_admin` (
  `adminId` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `adminName` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `adminEmail` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `adminUser` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `adminPass` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `level` int(11) NOT NULL,
  PRIMARY KEY (`adminId`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_admin`
--

INSERT INTO `tbl_admin` (`adminId`, `adminName`, `adminEmail`, `adminUser`, `adminPass`, `level`) VALUES
(1, 'Hieu', 'hieusnguyen0709@gmail.com', 'HieuRose', '123456', 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_brand`
--

DROP TABLE IF EXISTS `tbl_brand`;
CREATE TABLE IF NOT EXISTS `tbl_brand` (
  `brandId` int(11) NOT NULL AUTO_INCREMENT,
  `brandName` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`brandId`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_brand`
--

INSERT INTO `tbl_brand` (`brandId`, `brandName`) VALUES
(12, 'Mintbooks'),
(13, 'Chibooks'),
(14, 'Amak'),
(15, 'Alphabooks');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_cart`
--

DROP TABLE IF EXISTS `tbl_cart`;
CREATE TABLE IF NOT EXISTS `tbl_cart` (
  `cartId` int(11) NOT NULL AUTO_INCREMENT,
  `productId` int(11) NOT NULL,
  `sId` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `productName` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `quantity` int(11) NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`cartId`)
) ENGINE=MyISAM AUTO_INCREMENT=377 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_cart`
--

INSERT INTO `tbl_cart` (`cartId`, `productId`, `sId`, `productName`, `price`, `quantity`, `image`) VALUES
(245, 18, '4ck88vopa19nconrq6du1nl560', 'iPhone 12 Pro Max - 512GB', '36690000', 3, '4e0cfe8320.jpg'),
(234, 17, '3af6ebvuvnk0sl2q4gqm1tfpnn', 'Xiaomi Redmi Note 9', '3490000', 1, 'a4f33536b0.png'),
(250, 19, '1m694k0v6k9mpsrseb84cgv1l5', 'iPhone XR - 64GB (VN/A)', '11500000', 1, '15c99cc5b0.jpg'),
(263, 28, 'jo6so7v8ofshmghit1i6afivb6', 'IPhone13', '5490000', 1, 'a7db88a404.jpg'),
(297, 29, 'b91f82rdpbga3psjeu1ji0tt22', 'Sáº£n pháº©m demo', '1', 10, 'd598881b81.jpg'),
(298, 30, 'b91f82rdpbga3psjeu1ji0tt22', 'Sáº£n pháº©m demo 2', '2', 50, '93fec5b2f6.jpg'),
(357, 28, 'to8mvnqi7r4hc2vr7n4in9t622', 'IPhone13', '5490000', 1, 'a7db88a404.jpg'),
(351, 28, '43c87hql2a7pmjq2cpu62o2511', 'IPhone13', '5490000', 1, 'a7db88a404.jpg'),
(356, 23, 'q6mi9pevh5jlih9rvsh1hg9343', 'Oppo A74 8G/128G', '7000000', 5, '5101713008.png'),
(358, 16, 'jq7f7bs9olb4dlcb289ilfmap7', 'Xiaomi Redmi Note 10', '5490000', 3, '61145174dc.png'),
(359, 28, '9j6234892ab3ijk5croq3m9ph5', 'IPhone13', '5490000', 1, 'a7db88a404.jpg'),
(361, 28, 'b0lp48nn4o5p6623aqh787tvb1', 'IPhone13', '5490000', 1, 'a7db88a404.jpg'),
(362, 30, 'oac6ghk6o00j2v10777ibe8q20', 'Sáº£n pháº©m demo 2', '3', 1, '93fec5b2f6.jpg'),
(363, 28, 'brkh2t3uumb6p9ij1grof8iqg5', 'IPhone13', '5490000', 1, 'a7db88a404.jpg'),
(368, 31, '1k6lv5l1gkkn2u0c84giejpo9o', 'Tuá»•i tráº» Ä‘Ã¡ng giÃ¡ bao nhiÃªu ?', '63500', 1, '13964439a1.jpg'),
(375, 104, 'ftn9iift9j1km6iotgl0lfu6fv', 'Demo QR Code', '1', 1, '52e3485f1f.jpg'),
(374, 105, 'ftn9iift9j1km6iotgl0lfu6fv', 'Samsung J5', '1', 1, '30c217e746.jpg');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_category`
--

DROP TABLE IF EXISTS `tbl_category`;
CREATE TABLE IF NOT EXISTS `tbl_category` (
  `catId` int(11) NOT NULL AUTO_INCREMENT,
  `catName` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`catId`)
) ENGINE=MyISAM AUTO_INCREMENT=29 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_category`
--

INSERT INTO `tbl_category` (`catId`, `catName`) VALUES
(25, 'Truyá»‡n tranh'),
(26, 'LÃ£ng máº¡n'),
(27, 'Tiá»ƒu thuyáº¿t'),
(28, 'Self-help');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_comment`
--

DROP TABLE IF EXISTS `tbl_comment`;
CREATE TABLE IF NOT EXISTS `tbl_comment` (
  `comment_id` int(11) NOT NULL AUTO_INCREMENT,
  `name_comment` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `comment` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_id` int(11) NOT NULL,
  PRIMARY KEY (`comment_id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_comment`
--

INSERT INTO `tbl_comment` (`comment_id`, `name_comment`, `comment`, `product_id`) VALUES
(2, 'Hieu', 'San pham dep lam', 19),
(3, 'Hieu', 'San pham nay rat dep', 18);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_compare`
--

DROP TABLE IF EXISTS `tbl_compare`;
CREATE TABLE IF NOT EXISTS `tbl_compare` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `customer_id` int(11) NOT NULL,
  `productId` int(11) NOT NULL,
  `productName` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=34 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_customer`
--

DROP TABLE IF EXISTS `tbl_customer`;
CREATE TABLE IF NOT EXISTS `tbl_customer` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `country` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `zipcode` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=53 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_customer`
--

INSERT INTO `tbl_customer` (`id`, `name`, `address`, `city`, `country`, `zipcode`, `phone`, `email`, `password`, `status`, `created_date`) VALUES
(9, 'hieunguyen', '108/08 duong so 5', 'HCM', 'Viá»‡t Nam', '1999', '0365549764', 'hieus99@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 0, '2021-09-10 13:51:30'),
(8, 'hieunguyen999', '108/08 duong so 5', 'HCM', 'Viá»‡t Nam', '1999', '0365549764', 'hieusnguyen070999@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 0, '2021-09-10 13:51:30'),
(7, 'hieunguyen', '108/08 duong so 5', 'HCM', 'Viá»‡t Nam', '1999', '0365549764', 'hieusnguyen07091999@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 0, '2021-09-10 13:51:30'),
(6, 'hieunguyen123456', '108/08 duong so 5', 'HCM', 'Viá»‡t Nam', '07091999', '0365549764', 'hieusnguyen0709@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 0, '2021-09-10 13:51:30'),
(10, 'hieunguyen999', '108/08 duong so 5', 'HCM', 'Viá»‡t Nam', '1999', '0365549764', '123@gmail.com', '202cb962ac59075b964b07152d234b70', 0, '2021-09-10 13:51:30'),
(11, 'hieurose99', '108/08 duong so 5', 'HCM', 'Viá»‡t Nam', '1999', '0365549764', 'nmh99@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 0, '2021-09-10 13:51:30'),
(12, 'Nguyá»…n Minh Hiáº¿u', '108/08 Ä‘Æ°á»ng sá»‘ 5, P17, Q. GÃ² Váº¥p', 'TP.HCM', 'Viá»‡t Nam', '07/09/1999', '0365549764', 'hieuhieu@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 1, '2021-09-10 13:51:30'),
(13, 'hieurose99', '108/08 duong so 5', 'HCM', 'Viá»‡t Nam', '1999', '0365549764', 'nmh9999@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 1, '2021-09-10 13:51:30'),
(14, 'Nguyá»…n Minh', '108/08 Ä‘Æ°á»ng sá»‘ 5, P17, Q. GÃ² Váº¥p', 'TP.HCM', 'Viá»‡t Nam', '07/09/1999', '0365549764', 'hieunguyen79@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 0, '2021-09-10 13:51:30'),
(19, 'hieunguyen9999', '350 Ä‘Æ°á»ng CÃ¢y TrÃ¢m, Quáº­n GÃ² Váº¥p', 'thÃ nh phá»‘ Há»“ ChÃ­ Minh', 'Viá»‡t Nam', '1999', '01659334515', '123456@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 0, '2021-09-10 13:51:30'),
(20, 'hieunguyen999999', '108/08 duong so 5', 'HCM', 'Viá»‡t Nam', '1999', '0365549764', '12345@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 0, '2021-09-10 13:51:30'),
(22, 'hieunguyen', '108/08 duong so 5', 'HCM', 'Viá»‡t Nam', '1999', '0365549764', 'hieuminh@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 0, '2021-09-10 13:53:44'),
(26, 'hieunguyen', '108/08 duong so 5', 'HCM', 'Viá»‡t Nam', '1999', '0365549764', 'demo111@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 1, '2021-09-10 14:55:09'),
(27, 'hieunguyen', '108/08 duong so 5', 'HCM', 'Viá»‡t Nam', '1999', '0365549764', 'accdemo@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 0, '2021-09-11 03:06:58'),
(30, 'asdasd', 'youngnigga', 'asdasd', 'asdads', '72000', 'asdasda', 'Huydaden@gmail.com', '101193d7181cc88340ae5b2b17bba8a1', 0, '2021-09-12 13:06:15'),
(31, '123', '123', '123', '123', '123', '123', 'nigga@d', '202cb962ac59075b964b07152d234b70', 0, '2021-09-12 13:07:57'),
(32, 'Nguyá»…n HoÃ ng Huy', '25, ÄÆ°á»ng Nguyá»…n Há»¯u Cáº£nh, Khu phá»‘ ÄÃ´ng A, Angie Drive', 'Huyá»‡n DÄ© An', 'Viá»‡t Nam', '64000', '0933172190', 'sieulopho@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 0, '2021-09-17 08:25:01'),
(33, 'hieunguyen', '108/08 duong so 5, quan go vap', 'HCM', 'Viá»‡t Nam', '1999', '0365549764', 'hieusnguyen0709@gmail.com.vn', 'e10adc3949ba59abbe56e057f20f883e', 0, '2021-10-01 08:33:31'),
(34, 'hieunguyen', '108/08 duong so 5, quan go vap', 'HCM', 'Viá»‡t Nam', '1999', '0365549764', 'shieusnguyen0709@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 0, '2021-10-03 11:42:10'),
(50, 'Hiáº¿u Nguyá»…n', ' ', ' ', ' ', ' ', ' ', 'hieussnguyen0709@gmail.com', ' ', 0, '2021-10-04 13:59:31'),
(51, 'Nguyá»…n Hiáº¿u', ' ', ' ', ' ', ' ', ' ', '', ' ', 0, '2021-10-04 14:00:15'),
(52, 'Mai Ngoc Tr', ' ', ' ', ' ', ' ', ' ', '', ' ', 0, '2021-10-04 14:00:55');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_order`
--

DROP TABLE IF EXISTS `tbl_order`;
CREATE TABLE IF NOT EXISTS `tbl_order` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `productId` int(11) NOT NULL,
  `productName` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `customer_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL DEFAULT '0',
  `date_order` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=204 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_order`
--

INSERT INTO `tbl_order` (`id`, `productId`, `productName`, `customer_id`, `quantity`, `price`, `image`, `status`, `date_order`) VALUES
(195, 32, 'TrÃªn Ä‘Æ°á»ng bÄƒng', 11, 1, '80000', '7768d47c7e.jpg', 2, '2021-10-03 05:08:37'),
(196, 31, 'Tuá»•i tráº» Ä‘Ã¡ng giÃ¡ bao nhiÃªu ?', 34, 2, '127000', '13964439a1.jpg', 1, '2021-10-03 11:43:00'),
(197, 43, 'ChÃº ThoÃ²ng - Táº­p 1', 36, 1, '15000', '37d396c079.jpg', 1, '2021-10-03 15:43:07'),
(198, 40, 'Anna Karenina', 44, 2, '400000', 'f99fa5bc5f.jpg', 1, '2021-10-04 12:23:07'),
(199, 37, 'BÃ i giáº£ng cuá»‘i cÃ¹ng', 52, 2, '140000', '5f638b95b7.jpg', 1, '2021-10-04 14:01:32'),
(200, 43, 'ChÃº ThoÃ²ng - Táº­p 1', 6, 1, '15000', '37d396c079.jpg', 2, '2021-10-23 06:30:01'),
(201, 33, 'Äáº¯c nhÃ¢n tÃ¢m', 6, 1, '70000', '47f3726a92.jpg', 2, '2021-10-25 09:13:12'),
(202, 31, 'Tuá»•i tráº» Ä‘Ã¡ng giÃ¡ bao nhiÃªu ?', 11, 1, '63500', '13964439a1.jpg', 1, '2021-10-25 09:33:21');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_product`
--

DROP TABLE IF EXISTS `tbl_product`;
CREATE TABLE IF NOT EXISTS `tbl_product` (
  `productId` int(11) NOT NULL AUTO_INCREMENT,
  `productName` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `catId` int(11) NOT NULL,
  `brandId` int(11) NOT NULL,
  `product_desc` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` int(11) NOT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `quantity` int(11) NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `qrId` int(11) NOT NULL,
  PRIMARY KEY (`productId`)
) ENGINE=MyISAM AUTO_INCREMENT=122 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_product`
--

INSERT INTO `tbl_product` (`productId`, `productName`, `catId`, `brandId`, `product_desc`, `type`, `price`, `quantity`, `image`, `qrId`) VALUES
(120, 'TrÆ°á»›c ngÃ y em Ä‘áº¿n', 26, 13, '<p><span>Láº§n Ä‘áº§u ti&ecirc;n khi nh&igrave;n tháº¥y tá»±a s&aacute;ch n&agrave;y, t&ocirc;i Ä‘&atilde; nghÄ© ngay Ä‘áº¿n khung cáº£nh má»™t cáº­u trai nghá»‹ch ngá»£m l&ecirc;u lá»ng chÆ°a tá»«ng quy phá»¥c báº¥t cá»© ai. Cho Ä‘áº¿n khi gáº·p Ä‘Æ°á»£c c&ocirc; g&aacute;i m&agrave; cáº­u y&ecirc;u &ndash; Ä‘&oacute; cÅ©ng ch&iacute;nh l&agrave; thá»i Ä‘iá»ƒm m&agrave; cáº­u báº¯t Ä‘áº§u thay Ä‘á»•i. Cáº­u Ä‘&atilde; trá»Ÿ th&agrave;nh má»™t báº£n sao kh&aacute;c cá»§a ch&iacute;nh cáº­u, má»™t phi&ecirc;n báº£n tá»‘t Ä‘áº¹p hÆ¡n ban Ä‘áº§u.</span></p>', 1, '182000', 5, '081b472b81.jpg', 553),
(119, 'Cuá»‘n theo chiá»u giÃ³', 26, 13, '<p><span>T&aacute;c pháº©m vá»«a c&oacute; n&eacute;t h&agrave;o h&ugrave;ng nhÆ° má»™t thi&ecirc;n sá»­ thi viáº¿t vá» thá»i chiáº¿n, vá»«a c&oacute; n&eacute;t l&atilde;ng máº¡n cá»§a tiá»ƒu thuyáº¿t t&igrave;nh y&ecirc;u, nhÆ°ng Ä‘iá»u khiáº¿n Ä‘á»™c giáº£ nhiá»u tháº¿ há»‡ t&acirc;m Ä‘áº¯c nháº¥t ch&iacute;nh l&agrave; tinh tháº§n láº¡c quan Ä‘áº§y tin tÆ°á»Ÿng, l&agrave; sá»©c sá»‘ng quáº­t cÆ°á»ng vÆ°á»£t l&ecirc;n nghá»‹ch cáº£nh cá»§a má»—i con ngÆ°á»i. Cho Ä‘áº¿n h&ocirc;m nay, khi Ä‘&atilde; tráº£i qua h&agrave;ng tháº¿ ká»·, c&acirc;u n&oacute;i cá»§a Scarlett váº«n sá»‘ng m&atilde;i trong táº¥m tr&iacute; ch&uacute;ng ta nhÆ° má»™t liá»u doping l&ecirc;n d&acirc;y c&oacute;t tinh tháº§n &ldquo;Sau táº¥t cáº£, ng&agrave;y mai l&agrave; má»™t ng&agrave;y má»›i&rdquo;.</span></p>', 0, '175000', 5, '219ebd4efa.jpg', 729),
(118, 'Anna Karenina', 26, 13, '<p><span>Anna Karenina Ä‘Æ°á»£c xem nhÆ° l&agrave; má»™t Ä‘á»‰nh cao cá»§a tiá»ƒu thuyáº¿t hiá»‡n thá»±c. Nh&acirc;n váº­t ch&iacute;nh trong truyá»‡n Anna Karenina Ä‘Æ°á»£c Tolstoy s&aacute;ng t&aacute;c dá»±a v&agrave;o Maria Aleksandrovna Hartung, ngÆ°á»i con g&aacute;i lá»›n cá»§a Ä‘áº¡i thi h&agrave;o Aleksandr Sergeyevich Pushkin. Sau khi gáº·p c&ocirc; á»Ÿ má»™t bá»¯a Äƒn tá»‘i, &ocirc;ng báº¯t Ä‘áº§u Ä‘á»c truyá»‡n viáº¿t dá»Ÿ dang cá»§a Puskin: Nhá»¯ng ngÆ°á»i kh&aacute;ch há»p máº·t trong biá»‡t thá»±, Tolstoy náº£y ra &yacute; Ä‘á»‹nh viáº¿t Anna Karenina.</span></p>', 1, '200000', 5, '96b05e0e17.jpg', 202),
(117, 'ChuÃ´ng nguyá»‡n há»“n ai', 27, 14, '<p><span>Chu&ocirc;ng nguyá»‡n há»“n ai cá»§a Hemingway ra Ä‘á»i v&agrave; nháº­n Ä‘Æ°á»£c sá»± ch&agrave;o Ä‘&oacute;n ná»“ng nhiá»‡t cá»§a Ä‘á»™c giáº£ v&agrave;o nÄƒm 1940. Lá»i tá»±a Chu&ocirc;ng nguyá»‡n há»“n ai Ä‘Æ°á»£c Hemingway láº¥y tá»« t&aacute;c pháº©m &ldquo;Meditation XVII&rdquo; cá»§a nh&agrave; thÆ¡ John Donne. Sau Ä‘&oacute;, &ocirc;ng cho ra Ä‘á»i nhiá»u t&aacute;c pháº©m m&agrave; Ä‘&atilde; Ä‘Æ°a &ocirc;ng l&ecirc;n h&agrave;ng nhá»¯ng Ä‘áº¡i vÄƒn h&agrave;o cá»§a nh&acirc;n loáº¡i nhÆ° &ldquo;Tuyáº¿t v&ugrave;ng n&uacute;i Kalimanscharo&rdquo;(1948); &ldquo;VÆ°á»£t s&ocirc;ng v&agrave; rá»«ng s&acirc;u&rdquo;(1950) v&agrave; Ä‘áº·c biá»‡t l&agrave; &ldquo;&Ocirc;ng gi&agrave; v&agrave; biá»ƒn cáº£&rdquo; (1952).</span></p>', 0, '108000', 5, '34febc1608.jpg', 581),
(113, 'ChÃº ThoÃ²ng - Táº­p 1', 25, 12, '<p><span>Ch&uacute; Tho&ograve;ng</span></p>', 1, '15000', 5, 'a14887fbe5.jpg', 523),
(114, 'Conan - Táº­p 1', 25, 12, '<p>Conan - Táº­p 1</p>', 0, '15000', 5, 'afe19d6f78.jpg', 777),
(115, 'Doremon - Táº­p 1', 25, 12, '<p><span>Ch&uacute; m&egrave;o m&aacute;y Ä‘áº¿n tá»« tÆ°Æ¡ng lai</span></p>', 0, '15000', 5, 'b3a3f5d595.jpg', 747),
(116, 'BÃ i giáº£ng cuá»‘i cÃ¹ng', 27, 14, '<p><span>B&agrave;i giáº£ng cuá»‘i c&ugrave;ng &ndash; The last lecture &ndash; l&agrave; t&ecirc;n cá»§a má»™t chÆ°Æ¡ng tr&igrave;nh do gi&aacute;o sÆ° Randy Pausch trÆ°á»ng Äáº¡i há»c danh gi&aacute; Carnegie Mellon thuyáº¿t tr&igrave;nh, l&uacute;c Ä‘&oacute; &ocirc;ng Ä‘ang bá»‹ ung thÆ° gan giai Ä‘oáº¡n cuá»‘i. Sau n&agrave;y n&oacute; Ä‘Æ°á»£c Jeffrey Zaslow &ndash; c&acirc;y b&uacute;t t&agrave;i t&igrave;nh cá»§a táº¡p ch&iacute; Wall Street Journal bi&ecirc;n táº­p th&agrave;nh s&aacute;ch, gá»“m 53 b&agrave;i giáº£ng &ndash; Ä‘&oacute; ch&iacute;nh l&agrave; nhá»¯ng b&agrave;i giáº£ng cuá»‘i c&ugrave;ng trong sá»± nghiá»‡p gi&aacute;o dá»¥c cá»§a Randy.</span></p>', 0, '70000', 5, '7d4bdc6a26.jpg', 338),
(121, 'TrÃªn Ä‘Æ°á»ng bÄƒng', 28, 15, '<p><span>Tr&ecirc;n Ä‘Æ°á»ng bÄƒng l&agrave; cuá»‘n s&aacute;ch ná»•i tiáº¿ng nháº¥t cá»§a t&aacute;c giáº£ Tony Buá»•i S&aacute;ng &amp; cÅ©ng l&agrave; t&aacute;c pháº©m truyá»n cáº£m há»©ng báº­c nháº¥t cho c&aacute;c báº¡n tráº», nhá»¯ng ngÆ°á»i thanh ni&ecirc;n thá»i Ä‘áº¡i má»›i &amp; ho&agrave;i b&atilde;o lá»›n vÆ°á»£t khá»i &ldquo;ao l&agrave;ng&rdquo;.</span></p>', 0, '80000', 5, 'a1a5bc642a.jpg', 525),
(112, 'Äi tÃ¬m láº½ sá»‘ng', 27, 14, '<p><span>&ldquo;Äi t&igrave;m láº½ sá»‘ng&rdquo; lu&ocirc;n lu&ocirc;n l&agrave; ná»—i trÄƒn trá»Ÿ cá»§a báº¥t cá»© ai sá»‘ng tr&ecirc;n cuá»™c Ä‘á»i n&agrave;y, Ä‘i t&igrave;m l&yacute; do Ä‘á»ƒ m&igrave;nh tá»“n táº¡i, Ä‘á»ƒ t&igrave;m ra gi&aacute; trá»‹ cá»§a báº£n th&acirc;n. NhÆ°ng, c&oacute; máº¥y ai sinh ra Ä‘&atilde; biáº¿t m&igrave;nh pháº£i l&agrave;m g&igrave;, Ä‘&atilde; biáº¿t m&igrave;nh pháº£i bÆ°á»›c Ä‘i nhÆ° tháº¿ n&agrave;o trong cuá»™c sá»‘ng Ä‘áº§y kh&oacute; khÄƒn. Cuá»‘n s&aacute;ch &ldquo;Äi t&igrave;m láº½ sá»‘ng&rdquo; l&agrave; má»™t t&aacute;c pháº©m kinh Ä‘iá»ƒn má»Ÿ ra má»™t c&aacute;ch nh&igrave;n má»›i gi&uacute;p báº¡n giáº£i Ä‘&aacute;p nhá»¯ng tháº¯c máº¯c, tá»« Ä‘&oacute; t&igrave;m ra &yacute; nghÄ©a cuá»™c sá»‘ng cá»§a báº£n th&acirc;n.</span></p>', 1, '58000', 5, '5c898de45f.png', 575),
(110, 'Tuá»•i tráº» Ä‘Ã¡ng giÃ¡ bao nhiÃªu ', 28, 15, '<p><span>Tuá»•i tráº» Ä‘&aacute;ng gi&aacute; bao nhi&ecirc;u l&agrave; cuá»‘n s&aacute;ch kh&ocirc;ng náº·ng ná» gi&aacute;o Ä‘iá»u, kh&ocirc;ng chá»‰ tr&iacute;ch cá»±c Ä‘oan, Ä‘Æ¡n giáº£n chá»‰ l&agrave; nhá»¯ng t&acirc;m sá»± b&igrave;nh dá»‹ cá»§a ngÆ°á»i Ä‘i trÆ°á»›c, Rosie Nguyá»…n mang Ä‘áº¿n cho báº¡n tráº» nhá»¯ng tÆ° tÆ°á»Ÿng t&iacute;ch cá»±c nháº¥t Ä‘á»ƒ máº¡nh máº½ bÆ°á»›c ch&acirc;n v&agrave;o Ä‘á»i.</span></p>', 1, '63500', 5, 'ea0e38a4d4.jpg', 574),
(109, 'Äáº¯c nhÃ¢n tÃ¢m', 28, 15, '<p><span>T&aacute;c giáº£ Ä‘&atilde; Ä‘Æ°a ra ráº¥t nhiá»u nhá»¯ng b&agrave;i há»c vá» á»©ng xá»­ ráº¥t hay v&agrave; thiáº¿t thá»±c. Má»©c Ä‘á»™ cá»§a nhá»¯ng b&agrave;i há»c, b&iacute; quyáº¿t Ä‘Æ°á»£c t&aacute;c giáº£ n&acirc;ng l&ecirc;n tá»« dá»… d&agrave;ng cho Ä‘áº¿n kh&oacute; khÄƒn, tuy nhi&ecirc;n kh&ocirc;ng pháº£i l&agrave; kh&ocirc;ng thá»±c hiá»‡n Ä‘Æ°á»£c. Quan trá»ng l&agrave; náº±m á»Ÿ sá»± quyáº¿t t&acirc;m, cá»‘ gáº¯ng v&agrave; ki&ecirc;n tr&igrave; cá»§a báº¡n trong viá»‡c váº­n dá»¥ng v&agrave; há»c há»i nhá»¯ng b&agrave;i há»c n&agrave;y Ä‘á»ƒ c&oacute; thá»ƒ Ä‘áº¡t Ä‘Æ°á»£c nhá»¯ng th&agrave;nh c&ocirc;ng nháº¥t Ä‘á»‹nh trong viá»‡c thu phá»¥c l&ograve;ng ngÆ°á»i.</span></p>', 1, '70000', 5, '4c716835e1.jpg', 819);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_qrcode`
--

DROP TABLE IF EXISTS `tbl_qrcode`;
CREATE TABLE IF NOT EXISTS `tbl_qrcode` (
  `qrId` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `qrContent` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `qrImg` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`qrId`)
) ENGINE=MyISAM AUTO_INCREMENT=967 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_qrcode`
--

INSERT INTO `tbl_qrcode` (`qrId`, `qrContent`, `qrImg`) VALUES
(523, 'http://localhost/HNShop/details.php?proid=113', 'QR_881454695.png'),
(777, 'http://localhost/HNShop/details.php?proid=114', 'QR_621795189.png'),
(525, 'http://localhost/HNShop/details.php?proid=121', 'QR_2112423443.png'),
(575, 'http://localhost/HNShop/details.php?proid=112', 'QR_1555321408.png'),
(430, 'http://localhost/HNShop/details.php?proid=108', 'QR_1738547004.png'),
(819, 'http://localhost/HNShop/details.php?proid=109', 'QR_2131694085.png'),
(574, 'http://localhost/HNShop/details.php?proid=110', 'QR_1377526733.png'),
(175, 'http://localhost/HNShop/details.php?proid=107', 'QR_1332132669.png'),
(747, 'http://localhost/HNShop/details.php?proid=115', 'QR_2067743425.png'),
(338, 'http://localhost/HNShop/details.php?proid=116', 'QR_1530492750.png'),
(581, 'http://localhost/HNShop/details.php?proid=117', 'QR_813019175.png'),
(202, 'http://localhost/HNShop/details.php?proid=118', 'QR_763655064.png'),
(729, 'http://localhost/HNShop/details.php?proid=119', 'QR_442322229.png'),
(553, 'http://localhost/HNShop/details.php?proid=120', 'QR_1922451566.png');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_slider`
--

DROP TABLE IF EXISTS `tbl_slider`;
CREATE TABLE IF NOT EXISTS `tbl_slider` (
  `sliderId` int(11) NOT NULL AUTO_INCREMENT,
  `sliderName` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slider_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` int(11) NOT NULL,
  PRIMARY KEY (`sliderId`)
) ENGINE=MyISAM AUTO_INCREMENT=27 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_slider`
--

INSERT INTO `tbl_slider` (`sliderId`, `sliderName`, `slider_image`, `type`) VALUES
(26, 'BÃ¬a sÃ¡ch 5', '067e956777.png', 1),
(25, 'BÃ¬a sÃ¡ch 4', '9366daffdb.jpg', 1),
(24, 'BÃ¬a sÃ¡ch 3', 'b634def911.jpg', 1),
(23, 'BÃ¬a sÃ¡ch 2', '24d7e70b44.jpg', 1),
(22, 'BÃ¬a sÃ¡ch 1', 'd735548431.jpg', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_warehouse`
--

DROP TABLE IF EXISTS `tbl_warehouse`;
CREATE TABLE IF NOT EXISTS `tbl_warehouse` (
  `id_warehouse` int(11) NOT NULL AUTO_INCREMENT,
  `id_sanpham` int(11) NOT NULL,
  `sl_nhap` varchar(50) CHARACTER SET utf8 NOT NULL,
  `sl_ngaynhap` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_warehouse`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_wishlist`
--

DROP TABLE IF EXISTS `tbl_wishlist`;
CREATE TABLE IF NOT EXISTS `tbl_wishlist` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `customer_id` int(11) NOT NULL,
  `productId` int(11) NOT NULL,
  `productName` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
