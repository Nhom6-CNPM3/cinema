-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th5 15, 2024 lúc 10:55 AM
-- Phiên bản máy phục vụ: 10.4.28-MariaDB
-- Phiên bản PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `cinema_database`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(255) NOT NULL,
  `payload` longtext NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `total_jobs` int(11) NOT NULL,
  `pending_jobs` int(11) NOT NULL,
  `failed_jobs` int(11) NOT NULL,
  `failed_job_ids` longtext NOT NULL,
  `options` mediumtext DEFAULT NULL,
  `cancelled_at` int(11) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `finished_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '0001_01_01_000000_create_users_table', 1),
(2, '0001_01_01_000001_create_cache_table', 1),
(3, '0001_01_01_000002_create_jobs_table', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('0Xakl8AoRW8EyAY3sKcSIOg4hw2sGwiZNJUo9Jpj', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/124.0.0.0 Safari/537.36 Edg/124.0.0.0', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiS053V3ZaVW1FWml0QlFXWFo4cUkwOW1JUFU4ODIzaEZIRnBLUUd0biI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9kYXNoYm9hcmQiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX1zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aToxO30=', 1715701412);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbcombo`
--

CREATE TABLE `tbcombo` (
  `id_combo` int(10) UNSIGNED NOT NULL,
  `tencombo` varchar(255) DEFAULT NULL,
  `chitiet` text DEFAULT NULL,
  `gia` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `tbcombo`
--

INSERT INTO `tbcombo` (`id_combo`, `tencombo`, `chitiet`, `gia`) VALUES
(1, 'Combo 01', '1 bắp + 1 nước', 20000),
(2, 'Combo 02', '1 bắp + 2 nước', 25000),
(3, 'Combo 03', '2 bắp + 2 nước', 30000);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbghe`
--

CREATE TABLE `tbghe` (
  `id_ghe` int(10) UNSIGNED NOT NULL,
  `sohang` varchar(255) DEFAULT NULL,
  `soghe` int(11) DEFAULT NULL,
  `id_phong` int(10) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `tbghe`
--

INSERT INTO `tbghe` (`id_ghe`, `sohang`, `soghe`, `id_phong`) VALUES
(1, 'R001', 1, 1),
(2, 'R001', 2, 1),
(3, 'R001', 3, 1),
(4, 'R001', 4, 1),
(5, 'R001', 5, 1),
(6, 'R002', 6, 1),
(7, 'R002', 7, 1),
(8, 'R002', 8, 1),
(9, 'R002', 9, 1),
(10, 'R002', 10, 1),
(11, 'R003', 11, 1),
(12, 'R003', 12, 1),
(13, 'R004', 13, 1),
(14, 'R004', 14, 1),
(15, 'R004', 15, 1),
(16, 'R004', 16, 1),
(17, 'R005', 17, 1),
(18, 'R005', 18, 1),
(19, 'R005', 19, 1),
(20, 'R005', 20, 1),
(21, 'R001', 1, 2),
(22, 'R001', 2, 2),
(23, 'R001', 3, 2),
(24, 'R001', 4, 2),
(25, 'R002', 5, 2),
(26, 'R002', 6, 2),
(27, 'R002', 7, 2),
(28, 'R002', 8, 2),
(29, 'R003', 9, 2),
(30, 'R003', 10, 2),
(31, 'R003', 11, 2),
(32, 'R003', 12, 2),
(33, 'R004', 13, 2),
(34, 'R004', 14, 2),
(35, 'R004', 15, 2),
(36, 'R004', 16, 2),
(37, 'R005', 17, 2),
(38, 'R005', 18, 2),
(39, 'R005', 19, 2),
(40, 'R005', 20, 2),
(41, 'R001', 1, 3),
(42, 'R001', 2, 3),
(43, 'R001', 3, 3),
(44, 'R001', 4, 3),
(45, 'R002', 5, 3),
(46, 'R002', 6, 3),
(47, 'R002', 7, 3),
(48, 'R002', 8, 3),
(49, 'R003', 9, 3),
(50, 'R003', 10, 3),
(51, 'R003', 11, 3),
(52, 'R003', 12, 3),
(53, 'R004', 13, 3),
(54, 'R004', 14, 3),
(55, 'R004', 15, 3),
(56, 'R004', 16, 3),
(57, 'R005', 17, 3),
(58, 'R005', 18, 3),
(59, 'R005', 19, 3),
(60, 'R005', 20, 3),
(61, 'R001', 1, 4),
(62, 'R001', 2, 4),
(63, 'R001', 3, 4),
(64, 'R001', 4, 4),
(65, 'R002', 5, 4),
(66, 'R002', 6, 4),
(67, 'R002', 7, 4),
(68, 'R002', 8, 4),
(69, 'R003', 9, 4),
(70, 'R003', 10, 4),
(71, 'R003', 11, 4),
(72, 'R003', 12, 4),
(73, 'R004', 13, 4),
(74, 'R004', 14, 4),
(75, 'R004', 15, 4),
(76, 'R004', 16, 4),
(77, 'R005', 17, 4),
(78, 'R005', 18, 4),
(79, 'R005', 19, 4),
(80, 'R005', 20, 4);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tblichchieu`
--

CREATE TABLE `tblichchieu` (
  `id_lichchieu` int(10) UNSIGNED NOT NULL,
  `id_phim` int(10) UNSIGNED DEFAULT NULL,
  `id_rap` int(10) UNSIGNED DEFAULT NULL,
  `id_phong` int(10) UNSIGNED DEFAULT NULL,
  `ngay` date DEFAULT NULL,
  `gio` time DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `tblichchieu`
--

INSERT INTO `tblichchieu` (`id_lichchieu`, `id_phim`, `id_rap`, `id_phong`, `ngay`, `gio`) VALUES
(10, 1, 1, 1, '2024-05-10', '09:00:00'),
(11, 1, 1, 1, '2024-05-10', '13:30:00'),
(12, 1, 1, 1, '2024-05-11', '15:45:00'),
(13, 1, 1, 2, '2024-05-10', '09:00:00'),
(14, 1, 1, 2, '2024-05-10', '13:30:00'),
(15, 1, 1, 2, '2024-05-11', '15:45:00'),
(16, 1, 2, 3, '2024-05-10', '09:00:00'),
(17, 1, 2, 3, '2024-05-10', '13:30:00'),
(18, 1, 2, 3, '2024-05-11', '15:45:00'),
(19, 1, 2, 4, '2024-05-10', '09:00:00'),
(20, 1, 2, 4, '2024-05-10', '13:30:00'),
(21, 1, 2, 4, '2024-05-11', '15:45:00'),
(28, 2, 1, 1, '2024-05-10', '09:00:00'),
(29, 2, 1, 1, '2024-05-10', '13:30:00'),
(30, 2, 1, 1, '2024-05-11', '15:45:00'),
(31, 2, 1, 2, '2024-05-10', '09:00:00'),
(32, 2, 1, 2, '2024-05-10', '13:30:00'),
(33, 2, 1, 2, '2024-05-11', '15:45:00'),
(34, 2, 2, 3, '2024-05-10', '09:00:00'),
(35, 2, 2, 3, '2024-05-10', '13:30:00'),
(36, 2, 2, 3, '2024-05-11', '15:45:00'),
(37, 2, 2, 4, '2024-05-10', '09:00:00'),
(38, 2, 2, 4, '2024-05-10', '13:30:00'),
(39, 2, 2, 4, '2024-05-11', '15:45:00'),
(46, 3, 1, 1, '2024-05-10', '09:00:00'),
(47, 3, 1, 1, '2024-05-10', '13:30:00'),
(48, 3, 1, 1, '2024-05-11', '15:45:00'),
(49, 3, 1, 2, '2024-05-10', '09:00:00'),
(50, 3, 1, 2, '2024-05-10', '13:30:00'),
(51, 3, 1, 2, '2024-05-11', '15:45:00'),
(52, 3, 2, 3, '2024-05-10', '09:00:00'),
(53, 3, 2, 3, '2024-05-10', '13:30:00'),
(54, 3, 2, 3, '2024-05-11', '15:45:00'),
(55, 3, 2, 4, '2024-05-10', '09:00:00'),
(56, 3, 2, 4, '2024-05-10', '13:30:00'),
(57, 3, 2, 4, '2024-05-11', '15:45:00'),
(64, 4, 1, 1, '2024-05-10', '09:00:00'),
(65, 4, 1, 1, '2024-05-10', '13:30:00'),
(66, 4, 1, 1, '2024-05-11', '15:45:00'),
(67, 4, 1, 2, '2024-05-10', '09:00:00'),
(68, 4, 1, 2, '2024-05-10', '13:30:00'),
(69, 4, 1, 2, '2024-05-11', '15:45:00'),
(70, 4, 2, 3, '2024-05-10', '09:00:00'),
(71, 4, 2, 3, '2024-05-10', '13:30:00'),
(72, 4, 2, 3, '2024-05-11', '15:45:00'),
(73, 4, 2, 4, '2024-05-10', '09:00:00'),
(74, 4, 2, 4, '2024-05-10', '13:30:00'),
(75, 4, 2, 4, '2024-05-11', '15:45:00');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbphim`
--

CREATE TABLE `tbphim` (
  `id_phim` int(10) UNSIGNED NOT NULL,
  `atenphim` varchar(255) DEFAULT NULL,
  `hinhanh` varchar(255) DEFAULT NULL,
  `nsx` varchar(255) DEFAULT NULL,
  `theloai` varchar(255) DEFAULT NULL,
  `quocgia` varchar(255) DEFAULT NULL,
  `daodien` varchar(255) DEFAULT NULL,
  `dienvien` varchar(255) DEFAULT NULL,
  `thoiluong` int(11) DEFAULT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `ngaykhoichieu` date DEFAULT NULL,
  `trailer` text DEFAULT NULL,
  `noidung` text DEFAULT NULL,
  `giave` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `tbphim`
--

INSERT INTO `tbphim` (`id_phim`, `atenphim`, `hinhanh`, `nsx`, `theloai`, `quocgia`, `daodien`, `dienvien`, `thoiluong`, `updated_at`, `created_at`, `ngaykhoichieu`, `trailer`, `noidung`, `giave`) VALUES
(1, 'Cái Giá Của Hạnh Phúc', '6638abe3c2156.jpg', 'Lalaland Entertainment', 'Tâm Lý', 'Viet Nam', 'Nguyễn Ngọc Lâm', 'Xuân Lan, Thái Hoà, Lâm Thanh Nhã, Uyển Ân, Hữu Châu, Trâm Anh, Trương Thanh Long, Quang Minh, Bé Quyên,...', 115, '2024-05-09 12:13:25', '2024-05-06 03:07:31', '2024-04-19', 'https://www.youtube.com/watch?v=79BznZKQwIQ&pp=ygUldHJhaWxlciBjw6FpIGdpw6EgY-G7p2EgaOG6oW5oIHBow7pjIA%3D%3D', 'Bà Dương và ông Thoại luôn cố gắng để xây dựng một hình ảnh gia đình tài giỏi và danh giá trong mắt mọi người. Tuy nhiên dưới lớp vỏ bọc hào nhoáng ấy là những biến cố và lục đục gia đình đầy sóng gió. Nhìn kĩ hơn một chút bức tranh gia đình hạnh phúc ấy, rất nhiều “khuyết điểm” sẽ lộ ra gây bất ngờ. Phim mới  Cái Giá Của Hạnh Phúc dự kiến ra mắt tại các rạp chiếu phim toàn quốc từ 19.04.2024.\r\n\r\nXem thêm tại: https://www.galaxycine.vn/dat-ve/vu-tru-tieu-tam-cai-gia-cua-hanh-phuc/', 100000),
(2, 'Vây Hãm: Kẻ Trừng Phạt', '6638ac452dbe5.jpg', 'Bigpunch Pictures Hong Film B.A. Entertainment', 'Hành Động, Tội phạm', 'Hàn Quốc', 'Heo Myeong Haeng', 'Ma Dong-seok, Kim Mu-yeol, Lee Joo-bin', 109, '2024-05-09 08:05:48', '2024-05-06 03:07:31', '2024-04-26', 'https://youtu.be/kwOgIPZvdgg', 'Siêu cớm Ma Seok-do tái xuất để đối đầu với những tội phạm tinh vi trong giới công nghệ. Nắm đấm trứ danh liệu có phát huy được sức mạnh trước liên minh tội phạm của thiên tài công nghệ và ông trùm nhà cái lớn nhất châu Á?', 100000),
(3, 'Tarot', '6638ac6133742.jpg', 'Scott Glassgold', 'Hồi hộp, Kinh Dị', ' Mỹ', 'Spenser Cohen, Anna Halberg', 'Avantika, Jacob Batalon, Olwen Fouéré', 92, '2024-05-09 10:25:12', '2024-05-06 03:07:31', '2024-05-03', 'https://youtu.be/mqiEnk8Lrco', 'Một bộ phim điện ảnh về bói toán mà lại còn là bộ môn rất thịnh hành hiện nay – Tarot, chắc hẳn sẽ khiến bạn không thể không tò mò. Tarot là tác phẩm được đạo diễn kiêm biên kịch bởi Spenser Cohen. Anna Halberg và Nicholas Adams trong vai trò đồng biên kịch', 100000),
(4, 'Panda Đại Náo Lãnh Địa Vua Sư Tử', '6638ac87165b5.jpg', 'Karsten Kiilerich', 'Hoạt Hình', 'Đan Mạch', 'KARSTEN KIILERICH', NULL, 88, '2024-05-09 10:25:18', '2024-05-06 03:07:31', '2024-05-03', 'https://youtu.be/rRH92bl22PY', 'Để giải cứu rồng con Tiểu Long đang bị bắt cóc sang châu Phi, Gấu trúc Bư quyết định ra đi tìm đường cứu bạn. Trên hành trình của mình, Bư đã khám phá ra một thế giới hoàn toàn xa lạ và phải đối mặt với những con hà mã đáng sợ, những con linh cẩu khôn ngoan và những con khỉ đột chiêu trò. Dựa vào trí thông minh của mình, Bư đã tìm đường băng xuyên châu Phi trước khi giải cứu Tiểu Long và cứu ngôi nhà trong rừng rậm của những người bạn mới trước âm mưu tàn ác của sư tử Malume.\n', 100000),
(5, 'Tà Khúc Triệu Vong', '6638aca207e46.jpg', NULL, 'Kinh dị', 'Hàn Quốc', '  Han Dong-seok', 'Kim Yoon-hye, Song I-jae, Park Ji-hoon, Lee Sang-ah', 107, '2024-05-09 10:25:23', '2024-05-06 03:07:31', '2024-04-26', 'https://youtu.be/a-ChbOxP464', 'Là tựa phim kinh dị mới gây rúng động bởi điệu múa gọi hồn đậm chất tâm linh chưa từng có, TÀ KHÚC TRIỆU VONG kể về một nữ diễn viên có khả năng thực hiện nghi thức cấm để triệu hồi quỷ dữ. Từ đây, loạt án mạ.ng bí ẩn liên tiếp ập đến kéo theo những sự kiện kỳ lạ xảy ra tại một ngôi trường bị bỏ hoang.\nXem thêm tại: https://www.galaxycine.vn/dat-ve/vu-tru-tieu-tam-cai-gia-cua-hanh-phuc/', 100000),
(6, 'Ổ Nhện', '6638acc5bdbfe.jpg', 'Tania Vincent', 'Kinh dị', 'Pháp', 'Ricard Cussó, Tania Vincent', ' Deborah Mailman, David Wenham, Ed Oxenbould', 106, '2024-05-09 10:25:26', '2024-05-06 03:07:31', '2024-05-10', 'https://youtu.be/YyaJQj5TCts', 'Các cư dân của một tòa nhà chung cư tồi tàn ở Pháp chiến đấu chống lại đội quân nhện sinh sản nhanh chóng và đầy nguy hiểm.\nXem thêm tại: https://www.galaxycine.vn/dat-ve/vu-tru-tieu-tam-cai-gia-cua-hanh-phuc/', 100000),
(7, 'Đoàn Tàu Cõi Âm', '6638acdd2ea22.jpg', 'Rizal Mantovani', 'Kinh Dị', 'Indonesia', 'Rizal Mantovani', 'Hanna Malasan; Zara Leola; Putri Ayudya; Fadly Faisal; Kiki Narendra;...', 90, '2024-05-09 10:25:30', '2024-05-06 03:07:31', '2024-05-10', 'https://youtu.be/2ITsWov6I00', 'Từng toa tàu biến mất bí ẩn mỗi khi băng qua đường hầm cùng hàng loạt viễn cảnh ghê rợn và đẫm máu liên tiếp ập đến khiến hành khách phải đối diện với ranh giới sinh tử trước mắt.\nXem thêm tại: https://www.galaxycine.vn/dat-ve/vu-tru-tieu-tam-cai-gia-cua-hanh-phuc/', 100000),
(8, 'Godzilla x Kong: Đế Chế Mới', '6638acf2cc58b.jpg', 'Thomas Tull, Mary Parent, Jon Jashni, Eric McLeod, Brian Rogers, Alex Garcia', 'Hành Động, Phiêu Lưu', ' Mỹ', ' Adam Wingard', 'Rebecca Hall; Brian Tyree Henry; Dan Stevens; Kaylee Hottle; Alex Ferns; Fala Chen,...', 115, '2024-05-09 10:25:32', '2024-05-06 03:07:31', '2024-03-29', 'https://youtu.be/RXc2bs_aBuA', 'Kong và Godzilla - hai sinh vật vĩ đại huyền thoại, hai kẻ thủ truyền kiếp sẽ cùng bắt tay thực thi một sứ mệnh chung mang tính sống còn để bảo vệ nhân loại, và trận chiến gắn kết chúng với loài người mãi mãi sẽ bắt đầu.\nXem thêm tại: https://www.galaxycine.vn/dat-ve/vu-tru-tieu-tam-cai-gia-cua-hanh-phuc/', 100000);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbphong`
--

CREATE TABLE `tbphong` (
  `id_phong` int(10) UNSIGNED NOT NULL,
  `tenphong` varchar(255) DEFAULT NULL,
  `id_rap` int(10) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `tbphong`
--

INSERT INTO `tbphong` (`id_phong`, `tenphong`, `id_rap`) VALUES
(1, 'Phòng KDV - 001', 1),
(2, 'Phòng KDV - 002', 1),
(3, 'Phòng S - 001', 2),
(4, 'Phòng S - 002', 2);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbrap`
--

CREATE TABLE `tbrap` (
  `id_rap` int(10) UNSIGNED NOT NULL,
  `tenrap` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `tbrap`
--

INSERT INTO `tbrap` (`id_rap`, `tenrap`) VALUES
(1, 'Galaxy KDV'),
(2, 'Galaxy SS'),
(3, 'Galaxy TA');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbtintuc`
--

CREATE TABLE `tbtintuc` (
  `id_tintuc` int(10) UNSIGNED NOT NULL,
  `tieude` varchar(255) DEFAULT NULL,
  `noidung` text DEFAULT NULL,
  `hinhanh` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `tbtintuc`
--

INSERT INTO `tbtintuc` (`id_tintuc`, `tieude`, `noidung`, `hinhanh`) VALUES
(1, 'Xem Phim Hay – Ngất Ngây Cùng Bánh Phồng Dế Rec Rec', 'Bánh Phồng Dế Rec Rec – Snack Dế giàu đạm nhiều dinh dưỡng. Đi xem phim nhâm nhi bắp rang từ lâu đã là một trải nghiệm quá quen thuộc, nếu vẫn còn phân vân giữa các vị bắp khác nhau thì Galaxy Cinema mời Stars “đổi gió” với snack Rec Rec ngon mà không nhàm chán! \r\nBánh Phồng Dế Rec Rec mang nhiều hương vị đa dạng để Stars có cơ hội thưởng thức trọn vị thơm ngon đậm đà. Vị Mala: mang đến tinh túy từ Tứ Xuyên với vị cay kết hợp từ hạt tiêu và ớt, phù hợp với những ai muốn trải nghiệm sự kích thích vị giác một cách tuyệt đối.\r\n Vị Gochujang: Kết hợp các loại nguyên liệu bột đỏ, đậu ớt và đậu nành lên men để cho ra mùi vị ngọt ấm pha chút cay nhẹ. Dễ ăn dễ nghiện. \r\nVị Tom Yum: Chất chua cay trong chanh, sả, ớt và riềng biến từng miếng snack thật đậm vị hấp dẫn mang dấu ấn rõ nét từ ẩm thực Thái Lan. \r\nĐến Galaxy Cinema thử ngay Bánh Phồng Dế Rec Rec – Snack Hảo Hạng Đồng Hành Cho Sức Khỏe Không Giới Hạn. \r\nThời gian: từ ngày 05.04.2024. Giá bán: 35.000vnđ/bịch (extra 25.000vnđ/bịch). Địa điểm: Các cụm rạp Galaxy Cinema tại TP.HCM.\r\n\r\nXem thêm tại: https://www.galaxycine.vn/khuyen-mai/xem-phim-hay--ngat-ngay-cung-banh-phong-de-rec-rec/', '6638af608cb21.jpg'),
(2, 'Tất tần tật về Hành Tinh Khỉ', 'Trong các bộ phim tháng 5, được mong chờ nhất có lẽ là Hành Tinh Khỉ: Vương Quốc Mới. Bộ phim sẽ đóng vai trò là phần phim mở đầu một trilogy mới cho thương hiệu Planet of the Apes sau trilogy tiền truyện bao gồm Rise of the Planet of the Apes (2011), Dawn of the planet of the Apes (2014) và War for the Planet of the Apes (2017).\r\nHành Tinh Khỉ: Vương Quốc Mới lấy bối cảnh tương lai đã nhiều năm trôi qua kể từ phần phim 2017. Thời gian thực tế cũng lâu không kém. Đã tròn 7 năm kể từ trilogy đầu tiên kết lại, nên không có gì ngạc nhiên khi bạn không còn nhớ một số chi tiết trọng yếu làm nên thế giới đầy ấn tượng này. Hãy cùng Moveek nhìn lại những sự kiện và dòng thời gian dẫn đến bộ phim sắp tới nào.\r\nSự Trỗi Dậy Của Hành Tinh Khỉ (Rise of the Planet of the Apes)\r\nPlanet of the Apes là một thương hiệu lâu đời ở Hollywood và được xem là một thương hiệu kinh điển của thể loại sci-fi. Bộ phim đầu tiên của thương hiệu là phần phim cùng tên ra mắt vào năm 1968, bắt đầu với sự kiện một phi hành gia hạ cánh khẩn cấp xuống một hành tinh mà khỉ là loài thống trị. Còn loài người đã trở thành giống loài cấp thấp.\r\nKhông lâu sau đó, anh ta mới nhận ra nơi đây thực chất là Trái Đất ở vài trăm năm sau cái ngày anh khởi hành chuyến bay lên vũ trụ. Trong khi đó, Sự Trỗi Dậy Của Hành Tinh Khỉ bắt đầu ở cột mốc vài thế kỷ trước sự kiện trong phần phim 1968, khi con người vẫn là loài thống trị hành tinh xanh. Nên phần này và 2 phần sau được xem là trilogy tiền truyện.\r\nBộ phim và lịch sử loài khỉ bắt đầu với nhà khoa học Will Rodman muốn tìm phương thuốc chữa Alzheimer cho bố nên đã phát triển phương thuốc ALZ-112 dựa trên một loại virus. ALZ-112 được thí nghiệm lên tinh tinh, với cô tinh tinh Bright Eyes là tinh tinh cho thấy sự phát triển đáng kinh ngạc của ALZ-112.\r\nBright Eyes trở nên thông minh hơn, biết giải đố phức tạp, hiểu tiếng người và thân thiện với những người chăm sóc. Will nhìn thấy thành công của mình trong Bright Eyes, nhưng khi Will muốn trình cô tinh tinh này với hội đồng quản trị, Bright Eyes lại phát điên và bị bắn hạ. Will sau đó phát hiện ra Bright Eyes chỉ hung dữ vì cô mới sinh con. Tinh tinh con chính là Caesar.\r\nCái chết của Bright Eyes biến Caesar thành trẻ mồ côi với cơ hội sống rất thấp. Một đồng nghiệp đã chăm sóc Bright Eyes đã thuyết phục Will nhận nuôi Caesar, chỉ để phát hiện một sự thật phi thường. Caesar thấm nhuần ALZ-112 trong bụng mẹ nên phát triển một trí thông minh phi thường.\r\n5 năm sống với Will là 5 năm Caesar trải nghiệm những khía cạnh tốt, xấu của loài người, từ sự hiền từ yêu thương của cha nuôi Will đến sự tham lam vô độ của những tay tập đoàn. Sau khi trải qua những sự kiện chứng minh con người phải là giống loài đáng tin với khỉ, Caesar đã giải phóng các loài linh trưởng ở vườn thú trên khắp San Francisco, chia sẻ phiên bản thuốc được cải tiến là ALZ-113 cho bầy đàn, khơi dậy một cuộc nổi loạn và chạy vào rừng để bắt đầu một cuộc sống mới.\r\nTuy nhiên, ALZ-113 có một tác dụng phụ khủng khiếp đối với loài người. Do được phát triển từ một thể virus, ALZ-113 đã tạo ra một dịch bệnh cúm chết chóc và nhanh chóng lan ra toàn cầu, đẩy con người đến chỗ gần như tuyệt chủng. Song, thể virus này lại làm những loài linh trưởng họ hàng gần với chúng ta thông minh vượt trội, thúc đẩy một bước tiến hóa mới. Đại dịch ấy sau được lịch sử gọi là Simian Flu (Cúm Khỉ).', '6637a26s232e4.png');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbusers`
--

CREATE TABLE `tbusers` (
  `id_user` int(10) UNSIGNED NOT NULL,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `sdt` varchar(11) DEFAULT NULL,
  `role` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `tbusers`
--

INSERT INTO `tbusers` (`id_user`, `username`, `password`, `email`, `sdt`, `role`) VALUES
(1, 'admin', '$2y$12$u.Q9vZ4862.h6oX2hhCyEe3p.V8vT6NXWD1waBPxGbOqOUOXqnQ.S', 'admin@gmail.com', '0399999999', 1),
(8, 'user', '$2y$12$L1pGaYHWeOOG1PQQo5v7oeNOtfthBS8Y.NdUfBi1e1KMX1/FJuK2y', 'user@gmail.com', '0392399998', 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbve`
--

CREATE TABLE `tbve` (
  `id_ve` int(10) UNSIGNED NOT NULL,
  `id_lichchieu` int(10) UNSIGNED DEFAULT NULL,
  `id_user` int(10) UNSIGNED DEFAULT NULL,
  `id_ghe` int(10) UNSIGNED DEFAULT NULL,
  `id_combo` int(10) UNSIGNED DEFAULT NULL,
  `payments` varchar(20) NOT NULL DEFAULT 'pending'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `tbve`
--

INSERT INTO `tbve` (`id_ve`, `id_lichchieu`, `id_user`, `id_ghe`, `id_combo`, `payments`) VALUES
(1, 10, 1, 1, 1, 'paid'),
(2, 28, 1, 19, 1, 'paid'),
(18, 10, 1, 1, 3, 'paid'),
(19, 10, 1, 16, 1, 'paid'),
(20, 10, 1, 1, NULL, 'paid');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Chỉ mục cho bảng `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Chỉ mục cho bảng `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Chỉ mục cho bảng `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Chỉ mục cho bảng `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Chỉ mục cho bảng `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Chỉ mục cho bảng `tbcombo`
--
ALTER TABLE `tbcombo`
  ADD PRIMARY KEY (`id_combo`);

--
-- Chỉ mục cho bảng `tbghe`
--
ALTER TABLE `tbghe`
  ADD PRIMARY KEY (`id_ghe`),
  ADD KEY `id_phong` (`id_phong`);

--
-- Chỉ mục cho bảng `tblichchieu`
--
ALTER TABLE `tblichchieu`
  ADD PRIMARY KEY (`id_lichchieu`),
  ADD KEY `id_phim` (`id_phim`),
  ADD KEY `id_rap` (`id_rap`),
  ADD KEY `id_phong` (`id_phong`);

--
-- Chỉ mục cho bảng `tbphim`
--
ALTER TABLE `tbphim`
  ADD PRIMARY KEY (`id_phim`);

--
-- Chỉ mục cho bảng `tbphong`
--
ALTER TABLE `tbphong`
  ADD PRIMARY KEY (`id_phong`),
  ADD KEY `id_rap` (`id_rap`);

--
-- Chỉ mục cho bảng `tbrap`
--
ALTER TABLE `tbrap`
  ADD PRIMARY KEY (`id_rap`);

--
-- Chỉ mục cho bảng `tbtintuc`
--
ALTER TABLE `tbtintuc`
  ADD PRIMARY KEY (`id_tintuc`);

--
-- Chỉ mục cho bảng `tbusers`
--
ALTER TABLE `tbusers`
  ADD PRIMARY KEY (`id_user`);

--
-- Chỉ mục cho bảng `tbve`
--
ALTER TABLE `tbve`
  ADD PRIMARY KEY (`id_ve`),
  ADD KEY `id_combo` (`id_combo`),
  ADD KEY `id_ghe` (`id_ghe`),
  ADD KEY `id_lichchieu` (`id_lichchieu`),
  ADD KEY `id_user` (`id_user`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `tbcombo`
--
ALTER TABLE `tbcombo`
  MODIFY `id_combo` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT cho bảng `tbghe`
--
ALTER TABLE `tbghe`
  MODIFY `id_ghe` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=241;

--
-- AUTO_INCREMENT cho bảng `tblichchieu`
--
ALTER TABLE `tblichchieu`
  MODIFY `id_lichchieu` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=82;

--
-- AUTO_INCREMENT cho bảng `tbphim`
--
ALTER TABLE `tbphim`
  MODIFY `id_phim` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT cho bảng `tbphong`
--
ALTER TABLE `tbphong`
  MODIFY `id_phong` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `tbrap`
--
ALTER TABLE `tbrap`
  MODIFY `id_rap` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT cho bảng `tbtintuc`
--
ALTER TABLE `tbtintuc`
  MODIFY `id_tintuc` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `tbusers`
--
ALTER TABLE `tbusers`
  MODIFY `id_user` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT cho bảng `tbve`
--
ALTER TABLE `tbve`
  MODIFY `id_ve` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `tbghe`
--
ALTER TABLE `tbghe`
  ADD CONSTRAINT `tbghe_ibfk_1` FOREIGN KEY (`id_phong`) REFERENCES `tbphong` (`id_phong`);

--
-- Các ràng buộc cho bảng `tblichchieu`
--
ALTER TABLE `tblichchieu`
  ADD CONSTRAINT `tblichchieu_ibfk_1` FOREIGN KEY (`id_phim`) REFERENCES `tbphim` (`id_phim`),
  ADD CONSTRAINT `tblichchieu_ibfk_2` FOREIGN KEY (`id_rap`) REFERENCES `tbrap` (`id_rap`),
  ADD CONSTRAINT `tblichchieu_ibfk_3` FOREIGN KEY (`id_phong`) REFERENCES `tbphong` (`id_phong`);

--
-- Các ràng buộc cho bảng `tbphong`
--
ALTER TABLE `tbphong`
  ADD CONSTRAINT `tbphong_ibfk_1` FOREIGN KEY (`id_rap`) REFERENCES `tbrap` (`id_rap`);

--
-- Các ràng buộc cho bảng `tbve`
--
ALTER TABLE `tbve`
  ADD CONSTRAINT `tbve_ibfk_1` FOREIGN KEY (`id_combo`) REFERENCES `tbcombo` (`id_combo`),
  ADD CONSTRAINT `tbve_ibfk_2` FOREIGN KEY (`id_ghe`) REFERENCES `tbghe` (`id_ghe`),
  ADD CONSTRAINT `tbve_ibfk_3` FOREIGN KEY (`id_lichchieu`) REFERENCES `tblichchieu` (`id_lichchieu`),
  ADD CONSTRAINT `tbve_ibfk_4` FOREIGN KEY (`id_user`) REFERENCES `tbusers` (`id_user`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
