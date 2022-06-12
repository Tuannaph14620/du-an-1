-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th12 11, 2021 lúc 06:31 AM
-- Phiên bản máy phục vụ: 10.4.19-MariaDB
-- Phiên bản PHP: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `mancityshop`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `bill`
--

CREATE TABLE `bill` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `id_user` int(11) NOT NULL,
  `address` varchar(100) NOT NULL,
  `phone` varchar(11) NOT NULL,
  `total` int(12) NOT NULL DEFAULT 0,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `pttt` tinyint(1) NOT NULL,
  `ptgh` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `bill`
--

INSERT INTO `bill` (`id`, `name`, `id_user`, `address`, `phone`, `total`, `created_at`, `pttt`, `ptgh`) VALUES
(10, 'Nguyễn Anh Tuấn', 2, 'Dược Hạ -Tiên Dược - Sóc Sơn - Hà Nội', '0398861434', 3900000, '2021-11-30 14:39:48', 0, 0),
(11, 'Nguyễn Anh Tuấn', 2, 'Dược Hạ -Tiên Dược - Sóc Sơn - Hà Nội', '0398861434', 6218000, '2021-11-30 14:41:42', 0, 0),
(12, 'Nguyễn Anh Tuấn', 2, 'Dược Hạ -Tiên Dược - Sóc Sơn - Hà Nội', '0398861434', 1950000, '2021-11-30 14:44:56', 0, 0),
(13, 'Nguyễn Văn Đạt', 2, 'Thạch Đà - Mê Linh', '0398861434', 3900000, '2021-12-01 02:41:23', 0, 0),
(14, 'Nguyễn Anh Tuấn', 1, 'Dược Hạ -Tiên Dược - Sóc Sơn - Hà Nội', '0165 357 45', 5268000, '2021-12-01 03:31:54', 0, 0),
(15, 'Trần Trung Chiến', 1, 'Quỳnh Lưu - Nghệ An', '0398861434', 1159000, '2021-12-01 03:35:46', 0, 0),
(16, 'Nguyễn Anh Tuấn', 2, 'Dược Hạ -Tiên Dược - Sóc Sơn - Hà Nội', '0398861434', 2318000, '2021-12-03 04:24:21', 0, 0),
(17, 'sdfsfdg', 2, 'Dược Hạ -Tiên Dược - Sóc Sơn - Hà Nội', '0398861434', 15600000, '2021-12-06 07:49:08', 0, 0),
(18, 'Nguyễn Anh Tuấn', 2, 'Dược Hạ -Tiên Dược - Sóc Sơn - Hà Nội', '0398861434', 3477000, '2021-12-06 17:16:36', 1, 1),
(19, 'Nguyễn Anh Tuấn', 2, 'Dược Hạ -Tiên Dược - Sóc Sơn - Hà Nội', '0398861434', 4318000, '2021-12-06 17:19:51', 1, 1),
(20, 'Nguyễn Anh Tuấn', 2, 'Dược Hạ -Tiên Dược - Sóc Sơn - Hà Nội', '0398861434', 2318000, '2021-12-06 17:22:08', 1, 1),
(21, 'Nguyễn Anh Tuấn', 2, 'Dược Hạ -Tiên Dược - Sóc Sơn - Hà Nội', '0398861434', 3900000, '2021-12-06 17:24:38', 0, 0),
(22, 'Nguyễn Anh Tuấn', 2, 'Dược Hạ -Tiên Dược - Sóc Sơn - Hà Nội', '0398861434', 2318000, '2021-12-06 17:25:21', 0, 1),
(23, 'Nguyễn Tiến Bảo', 2, 'Vân Hòa - Ba Vì', '034325432', 3900000, '2021-12-07 08:27:28', 0, 1),
(24, 'Nguyễn Anh Tuấn', 2, 'Dược Hạ -Tiên Dược - Sóc Sơn - Hà Nội', '0398861434', 3477000, '2021-12-07 08:43:55', 0, 0),
(25, 'Nguyễn Anh Tuấn', 2, 'Dược Hạ -Tiên Dược - Sóc Sơn - Hà Nội', '0398861434', 1950000, '2021-12-07 08:51:55', 0, 0),
(26, 'Nguyễn Anh Tuấn', 2, 'Dược Hạ -Tiên Dược - Sóc Sơn - Hà Nội', '0398861434', 5850000, '2021-12-07 09:07:50', 1, 1),
(27, 'Nguyễn Anh Tuấn', 2, 'Dược Hạ -Tiên Dược - Sóc Sơn - Hà Nội', '0398861434', 5850000, '2021-12-10 13:55:16', 0, 0),
(28, 'Nguyễn Anh Tuấn', 2, 'Dược Hạ -Tiên Dược - Sóc Sơn - Hà Nội', '0398861434', 1950000, '2021-12-10 14:12:35', 0, 0),
(29, 'Nguyễn Anh Tuấn', 2, 'Dược Hạ -Tiên Dược - Sóc Sơn - Hà Nội', '0398861434', 1950000, '2021-12-10 14:13:07', 1, 1),
(30, 'Nguyễn Anh Tuấn', 2, 'Dược Hạ -Tiên Dược - Sóc Sơn - Hà Nội', '0398861434', 235000, '2021-12-10 14:15:11', 1, 0),
(31, 'Nguyễn Anh Tuấn', 2, 'Dược Hạ -Tiên Dược - Sóc Sơn - Hà Nội', '0398861434', 235000, '2021-12-10 14:15:52', 0, 0),
(32, 'Nguyễn Anh Tuấn', 2, 'Dược Hạ -Tiên Dược - Sóc Sơn - Hà Nội', '0398861434', 3900000, '2021-12-10 14:17:33', 0, 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `categories`
--

INSERT INTO `categories` (`id`, `name`) VALUES
(1, 'Trang phục sân tập'),
(2, 'Trang phục sân khách'),
(3, 'Trang phục sân nhà');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `comment`
--

CREATE TABLE `comment` (
  `id` int(11) NOT NULL,
  `content` varchar(300) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_pro` int(11) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `comment`
--

INSERT INTO `comment` (`id`, `content`, `id_user`, `id_pro`, `created_at`) VALUES
(1, 'Hàng chất lượng', 1, 8, '2021-11-22 14:38:38'),
(11, 'dgdsgs', 2, 19, '2021-11-24 07:24:43'),
(12, 'ưefwfe', 2, 2, '2021-11-24 07:44:41'),
(21, 'sfewefg', 2, 16, '2021-11-30 14:56:19'),
(30, 'sDFasf', 2, 9, '2021-12-06 07:22:49'),
(31, 'dzfg', 2, 18, '2021-12-06 07:47:15'),
(32, 'đạt bảo hay', 1, 15, '2021-12-06 16:33:26'),
(33, 'ssss', 2, 20, '2021-12-10 14:38:26'),
(34, 'ssss', 2, 20, '2021-12-10 20:40:31');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(11) NOT NULL,
  `content` varchar(400) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `phone`, `content`, `created_at`) VALUES
(3, 'Nguyễn Anh Tuấn', 'anhtuans2783@gmail.com', '0165 357 45', 'ok', '2021-12-10 13:30:57'),
(5, 'Nguyễn Tuấn', 'anhtuans2783@gmail.com', '0398861434', 'Hay Qúa Bạn Oi', '2021-12-10 13:46:14'),
(6, 'Nguyễn Anh Tuấn', 'anhtuans2783@gmail.com', '0165 357 45', 'ádad', '2021-12-11 10:11:22');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `tittle` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `image` varchar(20) NOT NULL,
  `loi_dan` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `news`
--

INSERT INTO `news` (`id`, `tittle`, `content`, `created_at`, `image`, `loi_dan`) VALUES
(1, 'Rodrigo stunner helps City down Everton', ' Trong khoảng thời gian thi đấu tốt nhất trong màu áo Man City, Cancelo đã là một trong những ngôi sao của Man City mùa này.\r\n\r\nAnh ấy đã đá chính tất cả 12 trận đấu tại Premier League của chúng tôi và điều này chỉ cho thấy phẩm chất tấn công của anh ấy đáng giá như thế nào.\r\n\r\nCho dù đó là từ vị trí hậu vệ phải ưa thích của anh ấy hay vị trí hậu vệ trái mà anh ấy lấp đầy trong trận gặp Toffees, tốc độ, khả năng lừa bóng và kỹ thuật của hậu vệ người Bồ Đào Nha mang đến một mối đe dọa duy nhất từ ​​hậu vệ cánh.\r\n\r\nĐó là bàn thắng sau đó tỏ ra quyết định trước Everton, khi anh ấy mở khóa hàng thủ của đội khách bằng một đường chuyền chất lượng cao nhất.\r\n\r\nCác học trò của Rafael Benitez dường như không bị đe dọa rất nhiều sau khi phá đường chuyền của Foden, nhưng Cancelo đã chọn một lỗ hổng ở tuyến sau sâu bằng một đường chuyền tuyệt vời ở bên ngoài giày của anh ấy, khiến Sterling biết ơn khi chỉ đạo đội nhà.   ', '2021-11-25 00:00:00', 'rodri.webp', 'Trong khoảng thời gian thi đấu tốt nhất trong màu áo Man City, Cancelo đã là một trong những ngôi sao của Man City mùa này....'),
(2, 'WHY WAIT?  BLACK FRIDAY SALE NOW ON!', ' With as much as 50% off some items, it is the perfect time to grab a deal and maybe even get one or two early Christmas gifts in the bag.\r\n\r\nYou can save 40% off all third kit items (including baby and mini kits), plus 20% off all home kit items and junior goalkeeper kits.\r\nNgoài ra còn có 30% được tiết kiệm cho áo khoác và áo khoác được chọn trước trận đấu, giảm giá 40% cho các kiểu ‘Madchester’ được chọn và bạn có thể tiết kiệm được một khoản giảm giá khổng lồ 50% cho mũ và giày đã chọn.\r\n\r\nTất cả các giao dịch trên đều có hiệu lực từ bây giờ trong một khoảng thời gian giới hạn, nhưng chỉ khi còn hàng.\r\n\r\nBạn có thể mua trong CityStore hoặc tại CityStore trực tuyến, đảm bảo bạn có thể nhận được một ưu đãi tuyệt vời cho dù bạn ở đâu.\r\n\r\nVà trong khi bạn đang đọc kỹ, đừng quên rằng chúng tôi hiện đã có sẵn nhiều loại quần áo và quà tặng cho Lễ Giáng sinh - bao gồm cả bộ quần áo Giáng sinh ở Thành phố cực kỳ phổ biến của chúng tôi.\r\n\r\nGiảm giá Thứ Sáu Đen đang diễn ra - đừng bỏ lỡ! ', '2021-11-25 00:00:00', 'black.webp', 'With as much as 50% off some items, it is the perfect time to grab a deal and maybe even get one or two early Christmas gifts in the bag...'),
(3, 'HẸN GẶP LẠI NHỮNG NGƯỜI NỔI TIẾNG THÀNH PHỐ CỦA BẠN CHO MỘT CHUYỆN GIÁNG SINH ĐẶC BIỆT', ' So whatever the reason, do you know of someone who you think deserves an extra special surprise this yuletide season? If so, then we want to hear from you.\r\n\r\nSimply  fill in the form below to tell us who you are nominating and why you feel they deserve some festive City sparkle in their life.\r\n\r\nMake sure you are logged in to your Cityzens account or register for free with the button below to be able to submit your special fan stories.\r\n\r\n\r\nThe deadline for nominations is November 30, so make sure you get in before then!\r\n\r\nThe Cityzens Christmas Surprise has seen some truly special City supporters rewarded in recent years.\r\n\r\nYou can re-live some of those stories and find out more about what they had done to deserve recognition – and how they got a star-studded festive surprise – by watching these videos from Christmases past...  ', '2021-11-29 00:00:00', 'tt5.webp', 'So whatever the reason, do you know of someone who you think deserves an extra special surprise this yuletide season? If so, then we want to hear from you...'),
(6, ' Pep Guardiola thở phào sau chiến thắng trước West Ham', ' HLV Pep Guardiola thừa nhận Man City đã có một trận đấu khó khăn trước West Ham, ông cũng rất vui khi Man xanh giành 3 điểm trọn vẹn.Tại vòng 13 Ngoại hạng Anh, Man City tiếp West Ham trên sân nhà. Đội bóng thành Manchester đã chơi chủ động, họ áp đảo hoàn toàn đối thủ và giành chiến thắng 2-1. Với 3 điểm có được, đội chủ sân Etihad đã cân bằng điểm số với đội đầu bảng Chelsea nhưng đá nhiều hơn một trận.Man City đang đạt phong độ cực cao trong thời gian gần đây. Họ đã có 5 chiến thắng liên tiếp trên mọi mặt trận. Chiều sâu đội hình tốt giúp The Citizens được đánh giá là ứng viên hàng đầu cho chức vô địch Premier League và Champions League.\r\n\r\nPhát biểu sau trận đấu với West Ham, HLV Pep Guardiola cho biết: “Chúng tôi biết rằng đây là một trận đấu khó khăn bởi West Ham chơi rất tốt từ đầu mùa giải”.\r\n\r\n“Chúng tôi đã cố gắng kiểm soát bóng và tạo ra những cơ hội. Man City đã có một trận đấu vất vả nhưng chúng tôi đã giành 3 điểm quan trọng. Tôi hài lòng với những gì các học trò thể hiện. Bây giờ đang là thời điểm quan trọng nhất của mùa giải và tôi muốn các cầu thủ tập trung cao độ”.\r\n\r\nTiền vệ Rodri của Man City nói thêm: “Hôm nay là một ngày khó khăn do điều kiện thời tiết không ủng hộ, tuyết đã rơi rất nhiều. West Ham cũng chiến đấu kiên cường, nhưng những nỗ lực của chúng tôi đã được đền đáp. Tôi rất vui khi Man City giành chiến thắng, chúng tôi muốn nối dài chuỗi trận ấn tượng”.', '2021-11-29 00:00:00', 'tt6.webp', ' HLV Pep Guardiola thừa nhận Man City đã có một trận đấu khó khăn trước West Ham, ông cũng rất vui khi Man xanh giành 3 điểm trọn vẹn...');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `order_detail`
--

CREATE TABLE `order_detail` (
  `id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `id_pro` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` decimal(10,0) NOT NULL COMMENT 'giá sản phẩm',
  `size` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `order_detail`
--

INSERT INTO `order_detail` (`id`, `order_id`, `id_pro`, `quantity`, `price`, `size`) VALUES
(21, 10, 17, 2, '3900000', 'S'),
(23, 11, 15, 2, '2318000', 'L'),
(24, 12, 16, 1, '1950000', 'S'),
(25, 13, 6, 2, '3900000', 'S'),
(26, 14, 15, 1, '1159000', 'M'),
(27, 14, 17, 1, '1950000', 'S'),
(28, 14, 8, 1, '2159000', 'S'),
(29, 15, 15, 1, '1159000', 'S'),
(30, 16, 15, 2, '2318000', 'S'),
(31, 17, 18, 6, '11700000', 'M'),
(32, 17, 17, 2, '3900000', 'S'),
(33, 18, 15, 3, '3477000', 'M'),
(34, 19, 3, 2, '4318000', 'S'),
(35, 20, 15, 2, '2318000', 'S'),
(36, 21, 16, 2, '3900000', 'S'),
(37, 22, 4, 2, '2318000', 'S'),
(38, 23, 18, 2, '3900000', 'XL'),
(39, 24, 4, 3, '3477000', 'S'),
(40, 25, 20, 1, '1950000', 'S'),
(41, 26, 18, 3, '5850000', 'S'),
(42, 27, 18, 3, '5850000', 'S'),
(43, 28, 17, 1, '1950000', 'S'),
(44, 29, 18, 1, '1950000', 'S'),
(45, 30, 5, 1, '235000', 'S'),
(46, 31, 11, 1, '235000', 'S'),
(47, 32, 19, 2, '3900000', 'S');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `price` int(12) NOT NULL,
  `historical_cost` int(12) NOT NULL,
  `image` varchar(20) NOT NULL,
  `view` int(11) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `content` text NOT NULL,
  `id_cate` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `products`
--

INSERT INTO `products` (`id`, `name`, `price`, `historical_cost`, `image`, `view`, `created_at`, `content`, `id_cate`) VALUES
(2, 'Manchester City Authentic Home Shirt 21/22', 1950000, 1500000, 'home1.png', 9, '2021-11-22 00:00:00', ' Huy hiệu chính thức của Câu lạc bộ trên ngực trái\r\nLogo PUMA Cat trên ngực phải và cả hai tay áo\r\nĐồ họa phía trước thăng hoa, lấy cảm hứng từ lễ kỷ niệm 10 năm 93:20\r\nCổ chữ V với lớp dán hoàn thiện và băng kéo dài để thêm thoải mái\r\nCấu tạo tay áo Raglan với bảng điều khiển vai lưới\r\nBản đồ cơ thể Jacquard ở mặt sau để tăng khả năng thở\r\nVòng bít ngoại quan tương phản trên cả hai tay áo\r\nBăng dính trên vai trên\r\nViền thẳng với kết thúc bằng kim duy nhất\r\nDryCELL - Các vật liệu có chức năng cao hút mồ hôi ra khỏi da của bạn và giúp bạn luôn khô ráo và thoải mái khi tập luyện\r\nNhãn Sản phẩm được Cấp phép Xác thực trên viền\r\nLợi nhuận\r\n100% Polyester tái chế\r\nTừ 93:20 đến vô cùng. Kỷ niệm 10 năm chiến dịch vô địch 2011/12 mang tính biểu tượng với bộ đồ đá banh sân nhà mới của Manchester City.', 3),
(3, 'Manchester City Home Long  Shirt 21/22', 2159000, 1700000, 'home2.png', 15, '2021-11-22 00:00:00', ' Huy hiệu chính thức của Câu lạc bộ trên ngực trái\r\nLogo PUMA Cat trên ngực phải và cả hai tay áo\r\nĐồ họa phía trước thăng hoa, lấy cảm hứng từ lễ kỷ niệm 10 năm 93:20\r\nCổ chữ V với lớp dán hoàn thiện và băng kéo dài để thêm thoải mái\r\nCấu tạo tay áo Raglan với bảng điều khiển vai lưới\r\nBản đồ cơ thể Jacquard ở mặt sau để tăng khả năng thở\r\nVòng bít ngoại quan tương phản trên cả hai tay áo\r\nBăng dính trên vai trên\r\nViền thẳng với kết thúc bằng kim duy nhất\r\nDryCELL - Các vật liệu có chức năng cao hút mồ hôi ra khỏi da của bạn và giúp bạn luôn khô ráo và thoải mái khi tập luyện\r\nNhãn Sản phẩm được Cấp phép Xác thực trên viền\r\nLợi nhuận\r\n100% Polyester tái chế\r\nTừ 93:20 đến vô cùng. Kỷ niệm 10 năm chiến dịch vô địch 2011/12 mang tính biểu tượng với bộ đồ đá banh sân nhà mới của Manchester City.', 3),
(4, 'Manchester City Authentic Football Shorts 21/22', 1159000, 700000, 'home3.png', 25, '2021-11-22 00:00:00', ' Huy hiệu chính thức của Câu lạc bộ trên ngực trái\r\nLogo PUMA Cat trên ngực phải và cả hai tay áo\r\nĐồ họa phía trước thăng hoa, lấy cảm hứng từ lễ kỷ niệm 10 năm 93:20\r\nCổ chữ V với lớp dán hoàn thiện và băng kéo dài để thêm thoải mái\r\nCấu tạo tay áo Raglan với bảng điều khiển vai lưới\r\nBản đồ cơ thể Jacquard ở mặt sau để tăng khả năng thở\r\nVòng bít ngoại quan tương phản trên cả hai tay áo\r\nBăng dính trên vai trên\r\nViền thẳng với kết thúc bằng kim duy nhất\r\nDryCELL - Các vật liệu có chức năng cao hút mồ hôi ra khỏi da của bạn và giúp bạn luôn khô ráo và thoải mái khi tập luyện\r\nNhãn Sản phẩm được Cấp phép Xác thực trên viền\r\nLợi nhuận\r\n100% Polyester tái chế\r\nTừ 93:20 đến vô cùng. Kỷ niệm 10 năm chiến dịch vô địch 2011/12 mang tính biểu tượng với bộ đồ đá banh sân nhà mới của Manchester City.', 3),
(5, 'Manchester City Football Socks 21/22', 235000, 100000, 'home4.png', 25, '2021-11-22 00:00:00', ' Huy hiệu chính thức của Câu lạc bộ trên ngực trái\r\nLogo PUMA Cat trên ngực phải và cả hai tay áo\r\nĐồ họa phía trước thăng hoa, lấy cảm hứng từ lễ kỷ niệm 10 năm 93:20\r\nCổ chữ V với lớp dán hoàn thiện và băng kéo dài để thêm thoải mái\r\nCấu tạo tay áo Raglan với bảng điều khiển vai lưới\r\nBản đồ cơ thể Jacquard ở mặt sau để tăng khả năng thở\r\nVòng bít ngoại quan tương phản trên cả hai tay áo\r\nBăng dính trên vai trên\r\nViền thẳng với kết thúc bằng kim duy nhất\r\nDryCELL - Các vật liệu có chức năng cao hút mồ hôi ra khỏi da của bạn và giúp bạn luôn khô ráo và thoải mái khi tập luyện\r\nNhãn Sản phẩm được Cấp phép Xác thực trên viền\r\nLợi nhuận\r\n100% Polyester tái chế\r\nTừ 93:20 đến vô cùng. Kỷ niệm 10 năm chiến dịch vô địch 2011/12 mang tính biểu tượng với bộ đồ đá banh sân nhà mới của Manchester City.', 3),
(6, 'Manchester City Goalkeeper Shirt 21/22', 1950000, 1500000, 'home5.png', 54, '2021-11-22 00:00:00', ' Huy hiệu chính thức của Câu lạc bộ trên ngực trái\r\nLogo PUMA Cat trên ngực phải và cả hai tay áo\r\nĐồ họa phía trước thăng hoa, lấy cảm hứng từ lễ kỷ niệm 10 năm 93:20\r\nCổ chữ V với lớp dán hoàn thiện và băng kéo dài để thêm thoải mái\r\nCấu tạo tay áo Raglan với bảng điều khiển vai lưới\r\nBản đồ cơ thể Jacquard ở mặt sau để tăng khả năng thở\r\nVòng bít ngoại quan tương phản trên cả hai tay áo\r\nBăng dính trên vai trên\r\nViền thẳng với kết thúc bằng kim duy nhất\r\nDryCELL - Các vật liệu có chức năng cao hút mồ hôi ra khỏi da của bạn và giúp bạn luôn khô ráo và thoải mái khi tập luyện\r\nNhãn Sản phẩm được Cấp phép Xác thực trên viền\r\nLợi nhuận\r\n100% Polyester tái chế\r\nTừ 93:20 đến vô cùng. Kỷ niệm 10 năm chiến dịch vô địch 2011/12 mang tính biểu tượng với bộ đồ đá banh sân nhà mới của Manchester City.', 3),
(7, 'Manchester City Goalkeeper Shorts 21/22', 1159000, 700000, 'home6.png', 12, '2021-11-22 00:00:00', ' Huy hiệu chính thức của Câu lạc bộ trên ngực trái\r\nLogo PUMA Cat trên ngực phải và cả hai tay áo\r\nĐồ họa phía trước thăng hoa, lấy cảm hứng từ lễ kỷ niệm 10 năm 93:20\r\nCổ chữ V với lớp dán hoàn thiện và băng kéo dài để thêm thoải mái\r\nCấu tạo tay áo Raglan với bảng điều khiển vai lưới\r\nBản đồ cơ thể Jacquard ở mặt sau để tăng khả năng thở\r\nVòng bít ngoại quan tương phản trên cả hai tay áo\r\nBăng dính trên vai trên\r\nViền thẳng với kết thúc bằng kim duy nhất\r\nDryCELL - Các vật liệu có chức năng cao hút mồ hôi ra khỏi da của bạn và giúp bạn luôn khô ráo và thoải mái khi tập luyện\r\nNhãn Sản phẩm được Cấp phép Xác thực trên viền\r\nLợi nhuận\r\n100% Polyester tái chế\r\nTừ 93:20 đến vô cùng. Kỷ niệm 10 năm chiến dịch vô địch 2011/12 mang tính biểu tượng với bộ đồ đá banh sân nhà mới của Manchester City.', 3),
(8, 'Manchester City Authentic Away Shirt 21/22', 2159000, 1700000, 'away1.png', 23, '2021-11-22 00:00:00', ' Huy hiệu chính thức của Câu lạc bộ trên ngực trái\r\nLogo PUMA Cat trên ngực phải và cả hai tay áo\r\nĐồ họa phía trước thăng hoa, lấy cảm hứng từ lễ kỷ niệm 10 năm 93:20\r\nCổ chữ V với lớp dán hoàn thiện và băng kéo dài để thêm thoải mái\r\nCấu tạo tay áo Raglan với bảng điều khiển vai lưới\r\nBản đồ cơ thể Jacquard ở mặt sau để tăng khả năng thở\r\nVòng bít ngoại quan tương phản trên cả hai tay áo\r\nBăng dính trên vai trên\r\nViền thẳng với kết thúc bằng kim duy nhất\r\nDryCELL - Các vật liệu có chức năng cao hút mồ hôi ra khỏi da của bạn và giúp bạn luôn khô ráo và thoải mái khi tập luyện\r\nNhãn Sản phẩm được Cấp phép Xác thực trên viền\r\nLợi nhuận\r\n100% Polyester tái chế\r\nTừ 93:20 đến vô cùng. Kỷ niệm 10 năm chiến dịch vô địch 2011/12 mang tính biểu tượng với bộ đồ đá banh sân nhà mới của Manchester City.', 2),
(9, 'Manchester City Away Long  Shirt 21/22', 1950000, 1500000, 'away2.png', 58, '2021-11-22 00:00:00', ' Huy hiệu chính thức của Câu lạc bộ trên ngực trái\r\nLogo PUMA Cat trên ngực phải và cả hai tay áo\r\nĐồ họa phía trước thăng hoa, lấy cảm hứng từ lễ kỷ niệm 10 năm 93:20\r\nCổ chữ V với lớp dán hoàn thiện và băng kéo dài để thêm thoải mái\r\nCấu tạo tay áo Raglan với bảng điều khiển vai lưới\r\nBản đồ cơ thể Jacquard ở mặt sau để tăng khả năng thở\r\nVòng bít ngoại quan tương phản trên cả hai tay áo\r\nBăng dính trên vai trên\r\nViền thẳng với kết thúc bằng kim duy nhất\r\nDryCELL - Các vật liệu có chức năng cao hút mồ hôi ra khỏi da của bạn và giúp bạn luôn khô ráo và thoải mái khi tập luyện\r\nNhãn Sản phẩm được Cấp phép Xác thực trên viền\r\nLợi nhuận\r\n100% Polyester tái chế\r\nTừ 93:20 đến vô cùng. Kỷ niệm 10 năm chiến dịch vô địch 2011/12 mang tính biểu tượng với bộ đồ đá banh sân nhà mới của Manchester City.', 2),
(10, 'Manchester City Authentic Football Shorts 21/22', 1950000, 1500000, 'away3.png', 61, '2021-11-22 00:00:00', ' Huy hiệu chính thức của Câu lạc bộ trên ngực trái\r\nLogo PUMA Cat trên ngực phải và cả hai tay áo\r\nĐồ họa phía trước thăng hoa, lấy cảm hứng từ lễ kỷ niệm 10 năm 93:20\r\nCổ chữ V với lớp dán hoàn thiện và băng kéo dài để thêm thoải mái\r\nCấu tạo tay áo Raglan với bảng điều khiển vai lưới\r\nBản đồ cơ thể Jacquard ở mặt sau để tăng khả năng thở\r\nVòng bít ngoại quan tương phản trên cả hai tay áo\r\nBăng dính trên vai trên\r\nViền thẳng với kết thúc bằng kim duy nhất\r\nDryCELL - Các vật liệu có chức năng cao hút mồ hôi ra khỏi da của bạn và giúp bạn luôn khô ráo và thoải mái khi tập luyện\r\nNhãn Sản phẩm được Cấp phép Xác thực trên viền\r\nLợi nhuận\r\n100% Polyester tái chế\r\nTừ 93:20 đến vô cùng. Kỷ niệm 10 năm chiến dịch vô địch 2011/12 mang tính biểu tượng với bộ đồ đá banh sân nhà mới của Manchester City.', 2),
(11, 'Manchester City Socks 21/22', 235000, 100000, 'away4.png', 26, '2021-11-22 00:00:00', ' Huy hiệu chính thức của Câu lạc bộ trên ngực trái\r\nLogo PUMA Cat trên ngực phải và cả hai tay áo\r\nĐồ họa phía trước thăng hoa, lấy cảm hứng từ lễ kỷ niệm 10 năm 93:20\r\nCổ chữ V với lớp dán hoàn thiện và băng kéo dài để thêm thoải mái\r\nCấu tạo tay áo Raglan với bảng điều khiển vai lưới\r\nBản đồ cơ thể Jacquard ở mặt sau để tăng khả năng thở\r\nVòng bít ngoại quan tương phản trên cả hai tay áo\r\nBăng dính trên vai trên\r\nViền thẳng với kết thúc bằng kim duy nhất\r\nDryCELL - Các vật liệu có chức năng cao hút mồ hôi ra khỏi da của bạn và giúp bạn luôn khô ráo và thoải mái khi tập luyện\r\nNhãn Sản phẩm được Cấp phép Xác thực trên viền\r\nLợi nhuận\r\n100% Polyester tái chế\r\nTừ 93:20 đến vô cùng. Kỷ niệm 10 năm chiến dịch vô địch 2011/12 mang tính biểu tượng với bộ đồ đá banh sân nhà mới của Manchester City.', 2),
(12, 'Manchester City Goalkeeper Shirt 21/22', 1950000, 1500000, 'away5.png', 12, '2021-11-22 00:00:00', ' Huy hiệu chính thức của Câu lạc bộ trên ngực trái\r\nLogo PUMA Cat trên ngực phải và cả hai tay áo\r\nĐồ họa phía trước thăng hoa, lấy cảm hứng từ lễ kỷ niệm 10 năm 93:20\r\nCổ chữ V với lớp dán hoàn thiện và băng kéo dài để thêm thoải mái\r\nCấu tạo tay áo Raglan với bảng điều khiển vai lưới\r\nBản đồ cơ thể Jacquard ở mặt sau để tăng khả năng thở\r\nVòng bít ngoại quan tương phản trên cả hai tay áo\r\nBăng dính trên vai trên\r\nViền thẳng với kết thúc bằng kim duy nhất\r\nDryCELL - Các vật liệu có chức năng cao hút mồ hôi ra khỏi da của bạn và giúp bạn luôn khô ráo và thoải mái khi tập luyện\r\nNhãn Sản phẩm được Cấp phép Xác thực trên viền\r\nLợi nhuận\r\n100% Polyester tái chế\r\nTừ 93:20 đến vô cùng. Kỷ niệm 10 năm chiến dịch vô địch 2011/12 mang tính biểu tượng với bộ đồ đá banh sân nhà mới của Manchester City.', 2),
(13, 'Manchester City Goalkeeper Shorts 21/22', 1159000, 700000, 'away6.png', 1, '2021-11-22 00:00:00', ' Huy hiệu chính thức của Câu lạc bộ trên ngực trái\r\nLogo PUMA Cat trên ngực phải và cả hai tay áo\r\nĐồ họa phía trước thăng hoa, lấy cảm hứng từ lễ kỷ niệm 10 năm 93:20\r\nCổ chữ V với lớp dán hoàn thiện và băng kéo dài để thêm thoải mái\r\nCấu tạo tay áo Raglan với bảng điều khiển vai lưới\r\nBản đồ cơ thể Jacquard ở mặt sau để tăng khả năng thở\r\nVòng bít ngoại quan tương phản trên cả hai tay áo\r\nBăng dính trên vai trên\r\nViền thẳng với kết thúc bằng kim duy nhất\r\nDryCELL - Các vật liệu có chức năng cao hút mồ hôi ra khỏi da của bạn và giúp bạn luôn khô ráo và thoải mái khi tập luyện\r\nNhãn Sản phẩm được Cấp phép Xác thực trên viền\r\nLợi nhuận\r\n100% Polyester tái chế\r\nTừ 93:20 đến vô cùng. Kỷ niệm 10 năm chiến dịch vô địch 2011/12 mang tính biểu tượng với bộ đồ đá banh sân nhà mới của Manchester City.', 2),
(14, 'Manchester City Pre-Match Jacket', 1950000, 1500000, 'train1.png', 31, '2021-12-07 00:00:00', ' Huy hiệu chính thức của Câu lạc bộ trên ngực trái\r\nLogo PUMA Cat trên ngực phải và cả hai tay áo\r\nĐồ họa phía trước thăng hoa, lấy cảm hứng từ lễ kỷ niệm 10 năm 93:20\r\nCổ chữ V với lớp dán hoàn thiện và băng kéo dài để thêm thoải mái\r\nCấu tạo tay áo Raglan với bảng điều khiển vai lưới\r\nBản đồ cơ thể Jacquard ở mặt sau để tăng khả năng thở\r\nVòng bít ngoại quan tương phản trên cả hai tay áo\r\nBăng dính trên vai trên\r\nViền thẳng với kết thúc bằng kim duy nhất\r\nDryCELL - Các vật liệu có chức năng cao hút mồ hôi ra khỏi da của bạn và giúp bạn luôn khô ráo và thoải mái khi tập luyện\r\nNhãn Sản phẩm được Cấp phép Xác thực trên viền\r\nLợi nhuận\r\n100% Polyester tái chế\r\nTừ 93:20 đến vô cùng. Kỷ niệm 10 năm chiến dịch vô địch 2011/12 mang tính biểu tượng với bộ đồ đá banh sân nhà mới của Manchester City.', 1),
(15, 'Manchester City Pre-Match 1/4 Zip Top', 1159000, 700000, 'train2.png', 95, '2021-11-23 00:00:00', ' Huy hiệu chính thức của Câu lạc bộ trên ngực trái\r\nLogo PUMA Cat trên ngực phải và cả hai tay áo\r\nĐồ họa phía trước thăng hoa, lấy cảm hứng từ lễ kỷ niệm 10 năm 93:20\r\nCổ chữ V với lớp dán hoàn thiện và băng kéo dài để thêm thoải mái\r\nCấu tạo tay áo Raglan với bảng điều khiển vai lưới\r\nBản đồ cơ thể Jacquard ở mặt sau để tăng khả năng thở\r\nVòng bít ngoại quan tương phản trên cả hai tay áo\r\nBăng dính trên vai trên\r\nViền thẳng với kết thúc bằng kim duy nhất\r\nDryCELL - Các vật liệu có chức năng cao hút mồ hôi ra khỏi da của bạn và giúp bạn luôn khô ráo và thoải mái khi tập luyện\r\nNhãn Sản phẩm được Cấp phép Xác thực trên viền\r\nLợi nhuận\r\n100% Polyester tái chế\r\nTừ 93:20 đến vô cùng. Kỷ niệm 10 năm chiến dịch vô địch 2011/12 mang tính biểu tượng với bộ đồ đá banh sân nhà mới của Manchester City.', 1),
(16, 'Manchester City Pre-Match Shirt', 1950000, 1500000, 'train4.png', 95, '2021-11-22 00:00:00', ' Huy hiệu chính thức của Câu lạc bộ trên ngực trái\r\nLogo PUMA Cat trên ngực phải và cả hai tay áo\r\nĐồ họa phía trước thăng hoa, lấy cảm hứng từ lễ kỷ niệm 10 năm 93:20\r\nCổ chữ V với lớp dán hoàn thiện và băng kéo dài để thêm thoải mái\r\nCấu tạo tay áo Raglan với bảng điều khiển vai lưới\r\nBản đồ cơ thể Jacquard ở mặt sau để tăng khả năng thở\r\nVòng bít ngoại quan tương phản trên cả hai tay áo\r\nBăng dính trên vai trên\r\nViền thẳng với kết thúc bằng kim duy nhất\r\nDryCELL - Các vật liệu có chức năng cao hút mồ hôi ra khỏi da của bạn và giúp bạn luôn khô ráo và thoải mái khi tập luyện\r\nNhãn Sản phẩm được Cấp phép Xác thực trên viền\r\nLợi nhuận\r\n100% Polyester tái chế\r\nTừ 93:20 đến vô cùng. Kỷ niệm 10 năm chiến dịch vô địch 2011/12 mang tính biểu tượng với bộ đồ đá banh sân nhà mới của Manchester City.', 1),
(17, 'Manchester City Pre-Match Jacket', 1950000, 1500000, 'train3.png', 20, '2021-11-22 00:00:00', ' Huy hiệu chính thức của Câu lạc bộ trên ngực trái\r\nLogo PUMA Cat trên ngực phải và cả hai tay áo\r\nĐồ họa phía trước thăng hoa, lấy cảm hứng từ lễ kỷ niệm 10 năm 93:20\r\nCổ chữ V với lớp dán hoàn thiện và băng kéo dài để thêm thoải mái\r\nCấu tạo tay áo Raglan với bảng điều khiển vai lưới\r\nBản đồ cơ thể Jacquard ở mặt sau để tăng khả năng thở\r\nVòng bít ngoại quan tương phản trên cả hai tay áo\r\nBăng dính trên vai trên\r\nViền thẳng với kết thúc bằng kim duy nhất\r\nDryCELL - Các vật liệu có chức năng cao hút mồ hôi ra khỏi da của bạn và giúp bạn luôn khô ráo và thoải mái khi tập luyện\r\nNhãn Sản phẩm được Cấp phép Xác thực trên viền\r\nLợi nhuận\r\n100% Polyester tái chế\r\nTừ 93:20 đến vô cùng. Kỷ niệm 10 năm chiến dịch vô địch 2011/12 mang tính biểu tượng với bộ đồ đá banh sân nhà mới của Manchester City.', 1),
(18, 'Manchester City Pre-Match Shirt', 1950000, 1500000, 'train5.png', 25, '2021-11-22 00:00:00', ' Huy hiệu chính thức của Câu lạc bộ trên ngực trái\r\nLogo PUMA Cat trên ngực phải và cả hai tay áo\r\nĐồ họa phía trước thăng hoa, lấy cảm hứng từ lễ kỷ niệm 10 năm 93:20\r\nCổ chữ V với lớp dán hoàn thiện và băng kéo dài để thêm thoải mái\r\nCấu tạo tay áo Raglan với bảng điều khiển vai lưới\r\nBản đồ cơ thể Jacquard ở mặt sau để tăng khả năng thở\r\nVòng bít ngoại quan tương phản trên cả hai tay áo\r\nBăng dính trên vai trên\r\nViền thẳng với kết thúc bằng kim duy nhất\r\nDryCELL - Các vật liệu có chức năng cao hút mồ hôi ra khỏi da của bạn và giúp bạn luôn khô ráo và thoải mái khi tập luyện\r\nNhãn Sản phẩm được Cấp phép Xác thực trên viền\r\nLợi nhuận\r\n100% Polyester tái chế\r\nTừ 93:20 đến vô cùng. Kỷ niệm 10 năm chiến dịch vô địch 2011/12 mang tính biểu tượng với bộ đồ đá banh sân nhà mới của Manchester City.', 1),
(19, 'Manchester City Pre-Match Pants', 1950000, 1500000, 'train6.png', 58, '2021-11-22 00:00:00', ' Huy hiệu chính thức của Câu lạc bộ trên ngực trái\r\nLogo PUMA Cat trên ngực phải và cả hai tay áo\r\nĐồ họa phía trước thăng hoa, lấy cảm hứng từ lễ kỷ niệm 10 năm 93:20\r\nCổ chữ V với lớp dán hoàn thiện và băng kéo dài để thêm thoải mái\r\nCấu tạo tay áo Raglan với bảng điều khiển vai lưới\r\nBản đồ cơ thể Jacquard ở mặt sau để tăng khả năng thở\r\nVòng bít ngoại quan tương phản trên cả hai tay áo\r\nBăng dính trên vai trên\r\nViền thẳng với kết thúc bằng kim duy nhất\r\nDryCELL - Các vật liệu có chức năng cao hút mồ hôi ra khỏi da của bạn và giúp bạn luôn khô ráo và thoải mái khi tập luyện\r\nNhãn Sản phẩm được Cấp phép Xác thực trên viền\r\nLợi nhuận\r\n100% Polyester tái chế\r\nTừ 93:20 đến vô cùng. Kỷ niệm 10 năm chiến dịch vô địch 2011/12 mang tính biểu tượng với bộ đồ đá banh sân nhà mới của Manchester City.', 1),
(20, 'Manchester City Pre-Match Pants', 1950000, 1500000, 'train7.png', 14, '2021-12-07 00:00:00', 'Huy hiệu chính thức của Câu lạc bộ trên ngực trái\r\nLogo PUMA Cat trên ngực phải và cả hai tay áo\r\nĐồ họa phía trước thăng hoa, lấy cảm hứng từ lễ kỷ niệm 10 năm 93:20\r\nCổ chữ V với lớp dán hoàn thiện và băng kéo dài để thêm thoải mái\r\nCấu tạo tay áo Raglan với bảng điều khiển vai lưới\r\nBản đồ cơ thể Jacquard ở mặt sau để tăng khả năng thở\r\nVòng bít ngoại quan tương phản trên cả hai tay áo\r\nBăng dính trên vai trên\r\nViền thẳng với kết thúc bằng kim duy nhất\r\nDryCELL - Các vật liệu có chức năng cao hút mồ hôi ra khỏi da của bạn và giúp bạn luôn khô ráo và thoải mái khi tập luyện\r\nNhãn Sản phẩm được Cấp phép Xác thực trên viền\r\nLợi nhuận\r\n100% Polyester tái chế\r\nTừ 93:20 đến vô cùng. Kỷ niệm 10 năm chiến dịch vô địch 2011/12 mang tính biểu tượng với bộ đồ đá banh sân nhà mới của Manchester City.', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(10) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `address` varchar(100) NOT NULL,
  `permission` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `phone`, `address`, `permission`) VALUES
(1, 'Trần Trung Chiến', 'chienttph14575@fpt.edu.vn', '1111', '0398861434', 'Quỳnh Lưu - Nghệ An', 1),
(2, 'Nguyễn Anh Tuấn', 'anhtuans2783@gmail.com', '1111', '0398861434', 'Dược Hạ -Tiên Dược - Sóc Sơn - Hà Nội', 0),
(7, 'Nguyễn Tuấn', 'anhtuanz2783@gmail.com', '111', 'Dược Hạ -T', '0398861434', 1),
(8, 'RipSocola', 'tuannaph14620@fpt.edu.vn', '16032002', '034356223', 'Hà Nội', 1);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `bill`
--
ALTER TABLE `bill`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_USER_BILL` (`id_user`);

--
-- Chỉ mục cho bảng `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_PRO_CMT` (`id_pro`),
  ADD KEY `FK_USER_CMT` (`id_user`);

--
-- Chỉ mục cho bảng `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `order_detail`
--
ALTER TABLE `order_detail`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_PRO_ORDER` (`id_pro`),
  ADD KEY `FK_BILL_ORDER` (`order_id`);

--
-- Chỉ mục cho bảng `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_SP_DM` (`id_cate`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `bill`
--
ALTER TABLE `bill`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT cho bảng `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `comment`
--
ALTER TABLE `comment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT cho bảng `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `order_detail`
--
ALTER TABLE `order_detail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT cho bảng `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `bill`
--
ALTER TABLE `bill`
  ADD CONSTRAINT `FK_USER_BILL` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`);

--
-- Các ràng buộc cho bảng `comment`
--
ALTER TABLE `comment`
  ADD CONSTRAINT `FK_PRO_CMT` FOREIGN KEY (`id_pro`) REFERENCES `products` (`id`),
  ADD CONSTRAINT `FK_USER_CMT` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`);

--
-- Các ràng buộc cho bảng `order_detail`
--
ALTER TABLE `order_detail`
  ADD CONSTRAINT `FK_BILL_ORDER` FOREIGN KEY (`order_id`) REFERENCES `bill` (`id`),
  ADD CONSTRAINT `FK_PRO_ORDER` FOREIGN KEY (`id_pro`) REFERENCES `products` (`id`);

--
-- Các ràng buộc cho bảng `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `FK_SP_DM` FOREIGN KEY (`id_cate`) REFERENCES `categories` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
