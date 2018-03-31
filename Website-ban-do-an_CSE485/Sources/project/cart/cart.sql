-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Máy chủ: localhost:3306
-- Thời gian đã tạo: Th3 31, 2018 lúc 08:12 PM
-- Phiên bản máy phục vụ: 5.7.21-0ubuntu0.17.10.1
-- Phiên bản PHP: 5.6.34-1+ubuntu17.10.1+deb.sury.org+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `cart`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `com`
--

CREATE TABLE `com` (
  `id` int(11) NOT NULL,
  `name` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(100) NOT NULL,
  `price` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `com`
--

INSERT INTO `com` (`id`, `name`, `image`, `price`) VALUES
(1, 'Cơm Rang Dưa Bò', '../image/comrangduabo.jpg', 50000),
(2, 'Cơm Cá Kho', '../image/comcakho.jpg', 50000),
(3, 'Cơm Rang Hải Sản', '../image/comranghaisan.jpg', 55000),
(4, 'Cơm Hải Sản ', '../image/comxaocantoi.jpg', 55000);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `ruoubia`
--

CREATE TABLE `ruoubia` (
  `id` int(11) NOT NULL,
  `name` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(100) NOT NULL,
  `price` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `ruoubia`
--

INSERT INTO `ruoubia` (`id`, `name`, `image`, `price`) VALUES
(1, 'Chivas', '../image/chivas.jpg', 50000),
(2, 'Marlboro', '../image/marlboro.jpg', 50000),
(3, 'Bia', '../image/bia.jpg', 55000),
(4, 'Vodka ', '../image/vodka.jpg', 55000);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `com`
--
ALTER TABLE `com`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `ruoubia`
--
ALTER TABLE `ruoubia`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `com`
--
ALTER TABLE `com`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT cho bảng `ruoubia`
--
ALTER TABLE `ruoubia`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
