-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 19, 2023 lúc 04:09 PM
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
-- Cơ sở dữ liệu: `da1_vephim`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `comments`
--

CREATE TABLE `comments` (
  `ma_binh_luan` int(11) NOT NULL,
  `ma_nguoi_dung` int(11) NOT NULL,
  `ma_phim` int(11) NOT NULL,
  `content` varchar(255) NOT NULL,
  `create_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `comments`
--

INSERT INTO `comments` (`ma_binh_luan`, `ma_nguoi_dung`, `ma_phim`, `content`, `create_at`) VALUES
(9, 2, 14, 'Tốt lắmmmmm', '2023-11-19 08:49:28'),
(11, 4, 14, 'Chất lượng tốt', '2023-11-19 10:18:58'),
(12, 4, 14, 'Tuyệt', '2023-11-19 10:19:48'),
(13, 4, 14, 'OK', '2023-11-19 10:20:56'),
(14, 4, 14, 'Chất lượng tốttttttttttt', '2023-11-19 10:21:05'),
(16, 2, 18, 'Tốt lắmmmmm', '2023-11-19 10:59:16'),
(17, 4, 18, 'OK', '2023-11-19 10:59:43'),
(18, 4, 18, 'Tốt lắmmmmm', '2023-11-19 11:15:31');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `datve`
--

CREATE TABLE `datve` (
  `ma_dat_ve` int(11) NOT NULL,
  `ma_nguoi_dung` int(11) NOT NULL,
  `ma_phim` int(11) NOT NULL,
  `ma_suat_chieu` int(11) NOT NULL,
  `so_ghe` varchar(200) NOT NULL,
  `ngay_dat_ve` timestamp NOT NULL DEFAULT current_timestamp(),
  `so_ve` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `ghe`
--

CREATE TABLE `ghe` (
  `ma_ghe` int(11) NOT NULL,
  `so_ghe` varchar(10) NOT NULL,
  `trang_thai` varchar(20) DEFAULT 'chua_dat'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `ghe`
--

INSERT INTO `ghe` (`ma_ghe`, `so_ghe`, `trang_thai`) VALUES
(61, '1', 'chua_dat'),
(62, '2', 'chua_dat'),
(63, '3', 'chua_dat'),
(64, '4', 'chua_dat'),
(65, '5', 'chua_dat'),
(66, '6', 'chua_dat'),
(67, '7', 'chua_dat'),
(68, '8', 'chua_dat'),
(69, '9', 'chua_dat'),
(70, '10', 'chua_dat'),
(71, '11', 'chua_dat'),
(72, '12', 'chua_dat'),
(73, '13', 'chua_dat'),
(74, '14', 'chua_dat'),
(75, '15', 'chua_dat'),
(76, '16', 'chua_dat'),
(77, '17', 'chua_dat'),
(78, '18', 'chua_dat'),
(79, '19', 'chua_dat'),
(80, '20', 'chua_dat'),
(81, '21', 'chua_dat'),
(82, '22', 'chua_dat'),
(83, '23', 'chua_dat'),
(84, '24', 'chua_dat'),
(85, '25', 'chua_dat'),
(86, '26', 'chua_dat'),
(87, '27', 'chua_dat'),
(88, '28', 'chua_dat'),
(89, '29', 'chua_dat'),
(90, '30', 'chua_dat'),
(91, '31', 'chua_dat'),
(92, '32', 'chua_dat'),
(93, '33', 'chua_dat'),
(94, '34', 'chua_dat'),
(95, '35', 'chua_dat'),
(96, '36', 'chua_dat'),
(97, '37', 'chua_dat'),
(98, '38', 'chua_dat'),
(99, '39', 'chua_dat'),
(100, '40', 'chua_dat'),
(101, '41', 'chua_dat'),
(102, '42', 'chua_dat'),
(103, '43', 'chua_dat'),
(104, '44', 'chua_dat'),
(105, '45', 'chua_dat'),
(106, '46', 'chua_dat'),
(107, '47', 'chua_dat'),
(108, '48', 'chua_dat'),
(109, '49', 'chua_dat'),
(110, '50', 'chua_dat'),
(111, '51', 'chua_dat'),
(112, '52', 'chua_dat'),
(113, '53', 'chua_dat'),
(114, '54', 'chua_dat'),
(115, '55', 'chua_dat'),
(116, '56', 'chua_dat'),
(117, '57', 'chua_dat'),
(118, '58', 'chua_dat'),
(119, '59', 'chua_dat'),
(120, '60', 'chua_dat');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nguoidung`
--

CREATE TABLE `nguoidung` (
  `ma_nguoi_dung` int(11) NOT NULL,
  `ten_dang_nhap` varchar(50) NOT NULL,
  `mat_khau` varchar(255) NOT NULL,
  `email` varchar(100) NOT NULL,
  `role` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `nguoidung`
--

INSERT INTO `nguoidung` (`ma_nguoi_dung`, `ten_dang_nhap`, `mat_khau`, `email`, `role`) VALUES
(2, 'vanh', '111111', 'a@gmail.com', 0),
(3, 'vanh', '11111111', 'vanh@gmail.com', 0),
(4, 'admin', '123456', 'admin@gmail.com', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `phim`
--

CREATE TABLE `phim` (
  `ma_phim` int(11) NOT NULL,
  `price` double(10,2) NOT NULL DEFAULT 0.00,
  `ten_phim` varchar(255) NOT NULL,
  `image_phim` varchar(255) DEFAULT NULL,
  `ngay_phat_hanh` date NOT NULL,
  `mo_ta` text NOT NULL,
  `dao_dien` varchar(100) NOT NULL,
  `thoi_luong_phut` int(100) NOT NULL,
  `ma_theloai` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `phim`
--

INSERT INTO `phim` (`ma_phim`, `price`, `ten_phim`, `image_phim`, `ngay_phat_hanh`, `mo_ta`, `dao_dien`, `thoi_luong_phut`, `ma_theloai`) VALUES
(14, 80000.00, 'Biệt Đội Siêu Anh Hùng (2012)', '1700325993avenger.jpg', '2023-11-21', 'Phim biệt đội', 'Joss Whedon', 120, 2),
(18, 75000.00, 'Aquaman: Đế Vương Atlantis', '170038988737ccef0ba67d085a37bed1c104fb0287.png', '2019-06-19', 'Aquaman: Đế Vương Atlantis - Aquaman (2018) là phim Sau những sự kiện trong Justice League, Arthur Curry / Aquaman trở về biển cả và bắt đầu đảm nhận quyền thừa kế vương quốc Atlantis dưới sự cố vấn của công chúa Mera.', 'Jason Momoa', 190, 2),
(19, 99000.00, 'The Amazing Spider-Man (2012) - Netflix Nederland - Films en Series on ', '1700393545The-Amazing-Spiderman-768x432.jpg', '2023-11-20', 'Người nhện', 'Joss Whedon', 195, 2);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `suatchieu`
--

CREATE TABLE `suatchieu` (
  `ma_suat_chieu` int(11) NOT NULL,
  `ma_phim` int(11) DEFAULT NULL,
  `thoi_gian_chieu` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `suatchieu`
--

INSERT INTO `suatchieu` (`ma_suat_chieu`, `ma_phim`, `thoi_gian_chieu`) VALUES
(19, 14, '2023-11-19 21:00:00'),
(20, 14, '2023-11-19 23:00:00'),
(21, 14, '2023-11-20 18:00:00'),
(28, 18, '2023-11-19 20:30:00'),
(29, 18, '2023-11-20 22:40:00'),
(30, 18, '2023-11-23 18:00:00'),
(31, 19, '2023-11-21 17:26:00'),
(32, 19, '2023-11-21 21:26:00'),
(33, 19, '2023-11-23 22:31:00'),
(34, 19, '2023-11-23 22:28:00');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `theloai`
--

CREATE TABLE `theloai` (
  `ma_theloai` int(11) NOT NULL,
  `ten_theloai` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `theloai`
--

INSERT INTO `theloai` (`ma_theloai`, `ten_theloai`) VALUES
(1, 'Hành Động'),
(2, 'Viễn Tưởng'),
(3, 'Kinh Dị'),
(5, 'Phưu Lưu'),
(6, 'Tâm lý & Tình Cảm'),
(7, 'Hoạt Hình'),
(8, 'Hài Kịch'),
(9, 'Lịch Sử'),
(10, 'Thể Thao');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`ma_binh_luan`),
  ADD KEY `ma_nguoi_dung` (`ma_nguoi_dung`),
  ADD KEY `ma_phim` (`ma_phim`);

--
-- Chỉ mục cho bảng `datve`
--
ALTER TABLE `datve`
  ADD PRIMARY KEY (`ma_dat_ve`),
  ADD KEY `ma_nguoi_dung` (`ma_nguoi_dung`),
  ADD KEY `ma_phim` (`ma_phim`),
  ADD KEY `ma_suat_chieu` (`ma_suat_chieu`);

--
-- Chỉ mục cho bảng `ghe`
--
ALTER TABLE `ghe`
  ADD PRIMARY KEY (`ma_ghe`);

--
-- Chỉ mục cho bảng `nguoidung`
--
ALTER TABLE `nguoidung`
  ADD PRIMARY KEY (`ma_nguoi_dung`);

--
-- Chỉ mục cho bảng `phim`
--
ALTER TABLE `phim`
  ADD PRIMARY KEY (`ma_phim`),
  ADD KEY `ma_theloai` (`ma_theloai`);

--
-- Chỉ mục cho bảng `suatchieu`
--
ALTER TABLE `suatchieu`
  ADD PRIMARY KEY (`ma_suat_chieu`),
  ADD KEY `suatchieu_ibfk_1` (`ma_phim`);

--
-- Chỉ mục cho bảng `theloai`
--
ALTER TABLE `theloai`
  ADD PRIMARY KEY (`ma_theloai`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `comments`
--
ALTER TABLE `comments`
  MODIFY `ma_binh_luan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT cho bảng `datve`
--
ALTER TABLE `datve`
  MODIFY `ma_dat_ve` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT cho bảng `ghe`
--
ALTER TABLE `ghe`
  MODIFY `ma_ghe` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=121;

--
-- AUTO_INCREMENT cho bảng `nguoidung`
--
ALTER TABLE `nguoidung`
  MODIFY `ma_nguoi_dung` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `phim`
--
ALTER TABLE `phim`
  MODIFY `ma_phim` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT cho bảng `suatchieu`
--
ALTER TABLE `suatchieu`
  MODIFY `ma_suat_chieu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT cho bảng `theloai`
--
ALTER TABLE `theloai`
  MODIFY `ma_theloai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_ibfk_1` FOREIGN KEY (`ma_nguoi_dung`) REFERENCES `nguoidung` (`ma_nguoi_dung`),
  ADD CONSTRAINT `comments_ibfk_2` FOREIGN KEY (`ma_phim`) REFERENCES `phim` (`ma_phim`);

--
-- Các ràng buộc cho bảng `datve`
--
ALTER TABLE `datve`
  ADD CONSTRAINT `datve_ibfk_1` FOREIGN KEY (`ma_nguoi_dung`) REFERENCES `nguoidung` (`ma_nguoi_dung`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `datve_ibfk_2` FOREIGN KEY (`ma_phim`) REFERENCES `phim` (`ma_phim`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `datve_ibfk_3` FOREIGN KEY (`ma_suat_chieu`) REFERENCES `suatchieu` (`ma_suat_chieu`);

--
-- Các ràng buộc cho bảng `phim`
--
ALTER TABLE `phim`
  ADD CONSTRAINT `phim_ibfk_1` FOREIGN KEY (`ma_theloai`) REFERENCES `theloai` (`ma_theloai`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `suatchieu`
--
ALTER TABLE `suatchieu`
  ADD CONSTRAINT `suatchieu_ibfk_1` FOREIGN KEY (`ma_phim`) REFERENCES `phim` (`ma_phim`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
