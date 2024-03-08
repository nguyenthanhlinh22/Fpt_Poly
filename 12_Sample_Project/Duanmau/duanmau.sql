-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 15, 2023 lúc 05:19 PM
-- Phiên bản máy phục vụ: 10.4.28-MariaDB
-- Phiên bản PHP: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `duanmau`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `binh_luan`
--

CREATE TABLE `binh_luan` (
  `ma_bl` int(11) NOT NULL,
  `noi_dung` varchar(255) NOT NULL,
  `ma_hh` int(11) NOT NULL,
  `ma_kh` varchar(20) NOT NULL,
  `ngay_bl` date NOT NULL,
  `rating` tinyint(5) NOT NULL DEFAULT 5
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `binh_luan`
--

INSERT INTO `binh_luan` (`ma_bl`, `noi_dung`, `ma_hh`, `ma_kh`, `ngay_bl`, `rating`) VALUES
(48, 'Quần rất đẹp ', 40, 'admin1', '2023-10-14', 5),
(49, 'Đầm đẹp lắm, tuyệt vời!', 43, 'admin1', '2023-10-14', 5),
(50, 'Áo đẹp form rộng, mặc thoải mái.', 51, 'admin1', '2023-10-14', 5);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hang_hoa`
--

CREATE TABLE `hang_hoa` (
  `ma_hh` int(11) NOT NULL,
  `ten_hh` varchar(50) NOT NULL,
  `don_gia` int(11) NOT NULL,
  `giam_gia` int(11) DEFAULT 0,
  `hinh` varchar(50) NOT NULL,
  `ngay_nhap` date DEFAULT NULL,
  `mo_ta` text NOT NULL,
  `dac_biet` int(1) NOT NULL DEFAULT 0,
  `so_luot_xem` int(11) NOT NULL DEFAULT 0,
  `ma_loai` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `hang_hoa`
--

INSERT INTO `hang_hoa` (`ma_hh`, `ten_hh`, `don_gia`, `giam_gia`, `hinh`, `ngay_nhap`, `mo_ta`, `dac_biet`, `so_luot_xem`, `ma_loai`) VALUES
(39, 'Áo thun basic', 200000, 20000, 'ao_thun.webp', '2023-10-10', 'Áo thun đơn giản', 0, 0, 17),
(40, 'Quần', 250000, 50000, 'quanjean.jpg', '2023-10-10', 'Quần jean thời trang, dễ phối đồ, phong cách hiện đại.', 1, 4, 18),
(41, 'Áo baby tee', 200000, 20000, 'ao_babytee.jpg', '2023-10-14', 'Áo baby tee thời trang, được làm 100% cotton, thoáng mát.', 1, 2, 17),
(42, 'Chân váy jean ', 250000, 40000, 'cvdai.jpg', '2023-10-14', 'Chân váy jean dài, dễ phối đồ, phong cách thời trang hiện đại.', 0, 0, 19),
(43, 'Đầm cổ điển', 300000, 60000, 'thoitrang1.png', '2023-10-14', 'Những chiếc đầm cổ điển mang vẻ đẹp vượt thời gian, form dáng đơn giản, thanh lịch, chất liệu cao cấp, màu sắc nhã nhặn.', 1, 2, 20),
(49, 'Vòng tay bạc ', 200000, 111000, 'vongtay.jpg', '2023-10-14', 'Vòng tay được làm từ bạc, thiết kế sắc xảo, tạo điểm nhấn cho outfit khi kết hợp với sản phẩm này.', 0, 0, 21),
(51, 'Áo len dài form siêu rộng', 200000, 80000, 'aolendai2.jpg', '2023-10-14', 'Áo len dài tay form siêu rộng cho các tín đồ thích rộng rãi thoải mái', 1, 2, 17),
(54, 'Quần dài ống rộng mực loang', 200000, 90000, 'quanongrong.jpg', '2023-10-14', 'Quần dài ống rộng mực loang, 100% cotton, thoáng mát, thời trang.', 0, 0, 18);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khach_hang`
--

CREATE TABLE `khach_hang` (
  `ma_kh` varchar(20) NOT NULL COMMENT 'mã đăng nhập',
  `mat_khau` varchar(50) NOT NULL COMMENT 'mật khẩu',
  `ho_ten` varchar(50) NOT NULL COMMENT 'họ tên',
  `kich_hoat` bit(1) NOT NULL DEFAULT b'0' COMMENT 'trạng thái kích hoạt',
  `hinh` varchar(255) DEFAULT NULL,
  `email` varchar(50) NOT NULL,
  `vai_tro` bit(1) NOT NULL DEFAULT b'0' COMMENT 'vai trò true là nv'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `khach_hang`
--

INSERT INTO `khach_hang` (`ma_kh`, `mat_khau`, `ho_ten`, `kich_hoat`, `hinh`, `email`, `vai_tro`) VALUES
('admin1', '123456', 'Kim Giang', b'1', 'cat.jpg', 'vothikimgiang273@gmail.com', b'0'),
('Giang27', '123456', 'Võ Thị Kim Giang', b'1', 'yang.jpg', 'vtkgiang2703@gmail.com', b'1');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `loai`
--

CREATE TABLE `loai` (
  `ma_loai` int(11) NOT NULL COMMENT 'mã loại hàng',
  `ten_loai` varchar(50) NOT NULL COMMENT 'tên loại hàng'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `loai`
--

INSERT INTO `loai` (`ma_loai`, `ten_loai`) VALUES
(17, 'Áo '),
(18, 'Quần'),
(19, 'Váy'),
(20, 'Đầm'),
(21, 'Phụ kiện');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `binh_luan`
--
ALTER TABLE `binh_luan`
  ADD PRIMARY KEY (`ma_bl`),
  ADD KEY `binh_luan_ibfk_1` (`ma_hh`),
  ADD KEY `binh_luan_ibfk_2` (`ma_kh`);

--
-- Chỉ mục cho bảng `hang_hoa`
--
ALTER TABLE `hang_hoa`
  ADD PRIMARY KEY (`ma_hh`),
  ADD KEY `ma_loai` (`ma_loai`);

--
-- Chỉ mục cho bảng `khach_hang`
--
ALTER TABLE `khach_hang`
  ADD PRIMARY KEY (`ma_kh`);

--
-- Chỉ mục cho bảng `loai`
--
ALTER TABLE `loai`
  ADD PRIMARY KEY (`ma_loai`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `binh_luan`
--
ALTER TABLE `binh_luan`
  MODIFY `ma_bl` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT cho bảng `hang_hoa`
--
ALTER TABLE `hang_hoa`
  MODIFY `ma_hh` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- AUTO_INCREMENT cho bảng `loai`
--
ALTER TABLE `loai`
  MODIFY `ma_loai` int(11) NOT NULL AUTO_INCREMENT COMMENT 'mã loại hàng', AUTO_INCREMENT=22;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `binh_luan`
--
ALTER TABLE `binh_luan`
  ADD CONSTRAINT `binh_luan_ibfk_1` FOREIGN KEY (`ma_hh`) REFERENCES `hang_hoa` (`ma_hh`) ON DELETE CASCADE,
  ADD CONSTRAINT `binh_luan_ibfk_2` FOREIGN KEY (`ma_kh`) REFERENCES `khach_hang` (`ma_kh`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `hang_hoa`
--
ALTER TABLE `hang_hoa`
  ADD CONSTRAINT `hang_hoa_ibfk_1` FOREIGN KEY (`ma_loai`) REFERENCES `loai` (`ma_loai`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
