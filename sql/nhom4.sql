-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1:3306
-- Thời gian đã tạo: Th12 05, 2021 lúc 03:05 AM
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
-- Cơ sở dữ liệu: `nhom4`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `manufactures`
--

DROP TABLE IF EXISTS `manufactures`;
CREATE TABLE IF NOT EXISTS `manufactures` (
  `manu_id` int(11) NOT NULL AUTO_INCREMENT,
  `manu_name` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`manu_id`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `manufactures`
--

INSERT INTO `manufactures` (`manu_id`, `manu_name`) VALUES
(1, 'Apple'),
(2, 'Samsung'),
(3, 'Xiaomi'),
(4, 'Oppo'),
(5, 'LG'),
(6, 'Lenovo'),
(7, 'Huawei');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `products`
--

DROP TABLE IF EXISTS `products`;
CREATE TABLE IF NOT EXISTS `products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `manu_id` int(11) DEFAULT NULL,
  `type_id` int(11) DEFAULT NULL,
  `price` int(11) NOT NULL,
  `image` varchar(150) COLLATE utf8_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `feature` tinyint(4) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=66 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `products`
--

INSERT INTO `products` (`id`, `name`, `manu_id`, `type_id`, `price`, `image`, `description`, `feature`, `created_at`) VALUES
(1, 'Laptop Apple MacBook MacBook Pro 16 M1 Max 2021 10 Core cpu', 1, 2, 90990000, 'apple-macbook-pro-16-m1-pro-2021-10-core-cpu-600x600.jpg', 'MacBook Pro 16 2021 với những cải tiến vượt bậc về mặt hiệu năng, hứa hẹn giúp người dùng có trải nghiệm mượt mà trong các tác vụ nặng như chỉnh sửa hình ảnh phức tạp, render video,... hướng đến đối tượng người dùng có nhu cầu sản xuất, sáng tạo nội dung, kỹ thuật, côn nghệ chuyên nghiệp', 1, '2021-11-07 06:48:17'),
(2, 'Laptop Apple MacBook MacBook Pro 14 M1 Pro 2021 10 core cpu 1 1', 1, 2, 64990000, 'apple-macbook-pro-14-m1-pro-2021-10-core-cpu-1-1-600x600.jpg', 'MacBook Pro 14 inch M1 Pro 2021 sở hữu bộ CPU Apple M1 Pro cấu trúc 10 nhân mang một sức mạnh hiệu năng vô cùng mạnh mẽ được sản xuất dựa trên tiến trình là 5 nm, có tận 33.7 tỷ bóng bán dẫn đạt tốc độ băng thông lên đến 200GB/s memory bandwidth cho hiệu suất của Apple nhanh hơn khoảng 70% so với thế hệ tiền nhiệm Apple M1', 1, '2021-11-07 06:48:17'),
(3, 'Điện thoại Samsung Galaxy A52s 5G ', 2, 1, 10990000, 'samsung-galaxy-a52s-5g-mint-600x600.jpg', 'Samsung Galaxy A52s tiếp tục sử dụng ngôn ngữ thiết kế nguyên khối theo phong cách trẻ trung với các tuỳ chọn màu sắc như: Đen, trắng, tím và xanh mint.', 0, '2021-11-07 06:27:03'),
(4, 'Laptop Lenovo YOGA Slim 7 Carbon 13ITL5 i5 1135G7/16GB/512GB/Win10', 6, 2, 28590000, 'yog-600x400.jpg', 'Với trọng lượng chỉ 0.966 kg, Lenovo YOGA đem lại cho người dùng một cảm giác cực kỳ mới lạ và thú vị bởi cân nặng siêu nhẹ đáng kinh ngạc của chiếc laptop này. Cộng thêm vào đó là độ mỏng chỉ 15 mm mang cho bạn cảm giác thoải mái và nhẹ nhàng, dễ dàng xách đi bất cứ đâu. Với chất liệu bằng Carbon ở mặt lưng đem đến cho laptop một khả năng chống sốc, cực kỳ bền bỉ và đạt tiêu chuẩn độ bền quân đội MIL-STD-810G sau khi vượt qua đến 9 cấp độ thử nghiệm', 1, '2021-11-08 11:14:41'),
(5, 'Điện thoại Xiaomi 11T white 5G 128GB AMOLED', 3, 1, 10490000, 'xiaomi-11t-white-1-2-600x600.jpg', 'Xiaomi trang bị cho 11T 3 camera sau gồm camera chính độ phân giải 108 MP, camera góc rộng 8 MP 120 độ và camera telemacro 5 MP cùng hệ thống phần cứng tối tân được trang bị bên trong cực kỳ ấn tượng. Chỉ cần giơ máy lên chụp là bạn đã có những bức ảnh sắc nét đáng kinh ngạc, khả năng thu phóng cũng cực tốt, cho bạn chụp được rõ từng chi tiết dù đối tượng ở khá xa', 1, '2021-11-08 06:29:43'),
(6, 'Điện thoại OPPO Reno5 Trắng Reno Series', 4, 1, 8690000, 'oppo-reno5-trang-600x600-1-600x600.jpg', 'Có thể nói OPPO Reno5 là mẫu điện thoại phô diễn được đỉnh cao thiết kế và công nghệ chế tác của OPPO khi bề mặt lưng được phủ lớp Reno Glow với ngàn tinh thể phát sáng siêu nhỏ tạo nên hiệu ứng chuyển sắc vô cùng hút mắt', 1, '2021-11-08 06:33:13'),
(7, 'Laptop Apple MacBook Air M1 2020 8GB/512GB/8-core GPU', 1, 2, 34990000, 'macbook-air-m1-2020-gold-600x600.jpg', 'Tôn lên vẻ cá tính, sang trọng, laptop được bọc bởi một lớp kim loại nguyên khối cùng với những đường nét trang nhã, tinh tế. Hơn thế nữa, với trọng lượng khá nhẹ chỉ 1.29 kg và độ mỏng từ 4.1 mm đến 16.1 mm có thể dễ dàng mang theo, chiếc laptop này sẽ là người bạn đồng hành cùng bạn mọi lúc mọi nơi như đi công tác, đi học, đi họp,...', 1, '2021-11-07 06:42:20'),
(8, 'Laptop LG Gram 17 17z90pgah78a5 2021 i7 1165G7/16GB/1TB SSD/Win10', 5, 2, 54890000, 'lg-gram-17-i7-17z90pgah78a5-3-600x600.jpg', 'Chiếc laptop này được trang bị chip Intel Core i7 Tiger Lake với đồ họa tích hợp Intel Iris Xe nâng cao hiệu suất làm việc văn phòng, mang đến khả năng tạo nội dung trên các phần mềm thiết kế, khả năng chơi game cũng mượt hơn. Tốc độ xung nhịp 2.80 GHz đạt tối đa Turbo Boost 4.7 GHz xử lý gọn gàng các tác vụ từ nhẹ cho tới nặng trên các ứng dụng như: Photoshop, AI, Premiere,... truy xuất file có độ phân giải lên đến 8K thật nhanh chóng.', 1, '2021-11-07 06:51:41'),
(9, 'Laptop LG Gram 14 2021 i7 14z90pgah75a5 1165G7/16GB/512GB/Win 10', 5, 2, 47890000, 'lg-gram-14-i7-14z90pgah75a5-0-600x600.jpg', 'Laptop LG Gram mang kiểu dáng thanh lịch và đậm tính di động chỉ mỏng 16.8 mm và nhẹ 999 gram được làm từ hợp kim Nano Carbon - Magie, dễ dàng di chuyển hội họp hay siêu tiện lợi khi mang đi công tác xa.', 0, '2021-11-07 06:56:13'),
(10, 'Máy tính bảng Samsung Galaxy Tab S7 FE 4G', 2, 3, 13990000, 'samsung-galaxy-tab-s7-fe-green-600x600.jpg', 'Galaxy Tab S7 FE sẽ khiến bạn choáng ngợp với dụng lượng pin cực khủng 10090 mAh đảm bảo cho cường độ làm việc, giải trí liên tục trong nhiều giờ liền.', 0, '2021-11-07 07:05:16'),
(11, 'Máy tính bảng Samsung Galaxy Tab S7', 2, 3, 18990000, 'samsung-galaxy-tab-s7-gold-new-600x600.jpg', 'Galaxy Tab S7 vẫn giữ nguyên thiết kế kim loại nguyên khối, góc cạnh như người tiền nhiệm Samsung Galaxy Tab S6 trước đó, cho cảm giác sang trọng và cao cấp, cầm vào tay rất vừa vặn và thoải mái.', 1, '2021-11-07 07:05:16'),
(12, 'Tai nghe Bluetooth True Wireless LG TONE-FB5', 5, 4, 2990000, 'bluetooth-true-wireless-lg-tone-fp5-ava-600x600.jpg', 'Cổng sạc:	Type-C\r\nCông nghệ âm thanh:	Active Noise CancellationMeridian\r\nTương thích:	Android, iOS (iPhone, iPad), Windows\r\nỨng dụng kết nối:	TONE Free\r\nTiện ích:	Chống nước IPX4Chống ồnSạc không dây\r\nHỗ trợ kết nối:	Bluetooth 5.2\r\nĐiều khiển bằng:	Cảm ứng chạm', 0, '2021-11-07 13:41:36'),
(13, 'Máy tính bảng iPad Pro M1 11 inch WiFi 128GB', 1, 3, 23790000, 'ipad-pro-m1-11-inch-wifi-gray-9-600x600.jpg', 'iPad Pro M1 11 inch Wifi 128GB (2021) được gia công rắn chắc bằng khung nhôm, trọng lượng chỉ 466 g cho tổng thể gọn nhẹ giúp người dùng cảm thấy thoải mái, dễ chịu hơn mỗi khi cầm nắm sử dụng.', 1, '2021-11-07 07:07:47'),
(14, 'Máy tính bảng Huawei MatePad 11 ', 7, 3, 13990000, 'huawei-matepad-11-grey-600x600.jpg', 'Hiệu năng mạnh mẽ từ Qualcomm Snapdragon 865, máy có thể chơi hầu hết các tựa game hiện nay như: PUBG, Liên Quân với thiết lập đồ họa cao mà vẫn mượt mà, mang đến cho bạn trải nghiệm giải trí cực kỳ ổn định.', 0, '2021-11-07 07:15:16'),
(15, 'Laptop LG Gram 16 2021 i7 16z90pgah75a5 1165G7/16GB/512GB/Win10', 5, 2, 50890000, 'lg-gram-16-i7-16z90pgah75a5-600x600.jpg', 'Vỏ của chiếc laptop này được làm từ hợp kim Nano Carbon - Magie cứng cáp, bền bỉ và mang đến sự sang trọng. Thiết kế bo thẳng 4 góc cộng với bản lề ẩn giúp hạn chế bị phân tâm, tăng khả năng tập trung vào công việc.', 1, '2021-11-07 07:35:35'),
(16, 'Máy tính bảng Lenovo Tab M10 - FHD Plus ', 6, 3, 6190000, 'tab-m10-fhd-plus-600-600x600.jpg', 'Lenovo Tab M10 - FHD Plus được bảo vệ hoàn toàn bởi khung kim loại rắn chắc, các cạnh viền hơi vuông, cong uyển chuyển, sáng bóng. Chiếc máy tính bảng sở hữu vẻ ngoài toát lên vẻ hiện đại thời thượng trong thiết kế đơn giản mà đầy thu hút.', 0, '2021-11-07 07:29:18'),
(17, 'Tai nghe Bluetooth True Wireless LG TONE-FB8', 5, 4, 2990000, 'bluetooth-true-wireless-lg-tone-fp8-den-thumb-600x600.jpg', 'Cổng sạc:	Type-C\r\nCông nghệ âm thanh:	Active Noise CancellationMeridian\r\nTương thích:	Android, iOS (iPhone, iPad), Windows\r\nỨng dụng kết nối:	TONE Free\r\nTiện ích:	Chống nước IPX4Chống ồnSạc không dây\r\nHỗ trợ kết nối:	Bluetooth 5.2\r\nĐiều khiển bằng:	Cảm ứng chạm', 0, '2021-11-07 13:41:36'),
(18, 'Máy tính bảng Xiaomi Pad 5 256GB', 3, 3, 10490000, 'xiaomi-pad-5-grey-600x600.jpg', 'Máy tính bảng Xiaomi Pad 5 được trang bị một màn hình siêu ấn tượng với tấm nền IPS LCD kích thước lớn lên đến 11 inch, hỗ trợ độ phân giải WQHD+ cực nét, mang đến khả năng hiển thị sống động, cho bạn đắm chìm trong các không gian giải trí.', 1, '2021-11-07 07:07:47'),
(19, 'Máy tính bảng Huawei MatePad 128GB', 7, 3, 7790000, 'huawei-matepad-xam-128gb-600x600.jpg', 'Sở hữu thiết kế cao cấp, giải trí bùng nổ với màn hình siêu lớn và dàn âm thanh vòm 4 loa cực kỳ sống động, được tùy chọn bộ nhớ trong siêu khủng 128 GB, máy tính bảng Huawei MatePad sẽ là một lựa chọn hoàn hảo cho mọi nhu cầu của bạn dù công việc hay vui chơi.', 0, '2021-11-07 07:20:09'),
(20, 'Máy tính bảng Lenovo Tab P11 Plus ', 6, 3, 8190000, 'lenovo-tab-p11-plus-2-600x600.jpg', 'Máy tính bảng Lenovo Tab P11 Plus mang đến hiệu suất hoạt động khá ấn tượng nhờ vi xử lý MediaTek Helio G90T sản xuất trên tiến trình 12 nm với xung nhịp cao nhất có thể lên đến 2.05 GHz đem lại khả năng xử lý những tác vụ từ cơ bản đến nâng cao đều mượt mà', 1, '2021-11-07 07:24:05'),
(21, 'Tai nghe Có Dây EP OPPO MH151', 4, 4, 590000, 'co-day-ep-oppo-mh151-10-600x600.jpg', 'Dây được làm chắc chắn, chống rối, uốn cong và cuộn lại linh hoạt, tạo sự thuận tiện khi cất giữ và mang đi khi du lịch, công tác, đi học, đi làm,... Có 2 phiên bản màu đen thanh lịch và màu bạc tươi sáng, đường viền xanh bóng bắt mắt tạo điểm nhấn cho tai nghe thêm thời trang, cá tính.', 0, '2021-11-07 13:38:15'),
(22, 'Tai nghe Bluetooth True Wireless OPPO ENCO Buds', 4, 4, 790000, 'bluetooth-tws-oppo-enco-buds-eti81-ava-2-600x600.jpg', 'Bề mặt housing và hộp sạc được bao phủ bởi sắc trắng trang nhã, màu xanh da trời thanh thuần, housing dạng công thái học kết hợp đệm tai silicone mềm nhẹ (có 3 kích thước) giúp người dùng đeo tai nghe Bluetooth thoải mái cả ngày. ', 0, '2021-11-07 13:38:15'),
(23, 'Laptop Lenovo Yoga Duet 7 13IML05 i7 10510U/8GB/512GB/Pen/Win10', 6, 2, 29490000, 'lenovo-yoga-duet-7-13iml05-i7-82as007cvn-154221-024257-600x600.jpg', 'Tổng trọng lượng của laptop Lenovo Yoga Duet 7 13IML05 i7 chỉ 1.1683 kg (bao gồm máy là 0.7988 kg và bàn phím và 0.3695 kg) cùng độ mỏng 9.19 mm dù vỏ máy được làm từ kim loại, là đột phá cho sự gọn nhẹ ngày càng được tối ưu hóa của dòng laptop tiện dụng.', 1, '2021-11-07 06:42:20'),
(24, 'Laptop Lenovo Ideapad Gaming 3 15IMH05 i7 Win10 (81Y4013UVN) ', 6, 2, 25990000, 'lenovo-ideapad-gaming-3-15imh05-i7-81y4013uvn-600x600.jpg', 'Lenovo IdeaPad có thiết kế khá đơn giản, không đem lại cảm giác hầm hố mà vẫn mạnh mẽ đầy thu hút với điểm nhấn là những đường vát chéo ở các góc máy. Máy có độ dày khoảng 24.9 mm cùng trọng lượng 2.2 kg cho bạn thoải mái mang theo hằng ngày đến lớp, quán cà phê mà không sợ nặng hay cồng kềnh', 1, '2021-11-07 06:51:41'),
(25, 'Tai nghe Bluetooth True 2 Xiaomi ZBW4493GL Trắng', 3, 4, 2590000, '226701-600x600.jpg', 'Tai nghe Bluetooth True Wireless Earphones 2 Xiaomi ZBW4493GL có hộp sạc bảo vệ, vừa vặn với kích thước của tai nghe. ', 0, '2021-11-07 13:34:45'),
(26, 'Điện thoại Samsung Galaxy Z Flip3 5G 256GB', 2, 1, 26990000, 'samsung-galaxy-z-flip-3-black-1-600x600.jpg', 'Samsung Galaxy Z Flip3 5G dễ dàng lấy lòng phái nữ khi thiết kế của nó được lấy cảm hứng từ hộp đựng phấn trang điểm. Kết hợp với 7 màu sắc khác nhau, giúp bạn thoải mái thể hiện cá tính, từ mạnh mẽ sang trọng đến hiện đại trẻ trung.', 1, '2021-11-07 06:27:03'),
(27, 'Điện thoại Xiaomi Redmi Note 10S', 3, 1, 6490000, 'xiaomi-redmi-note-10s-trang-600x600.jpg', 'Redmi Note 10S được trang bị bộ bốn camera với camera chính 64 MP khẩu độ f/1.79 cho khả năng lấy nét nhanh giúp ghi lại những khoảnh khắc đáng nhớ xung quanh bất kỳ lúc nào bạn muốn.', 0, '2021-11-07 06:29:43'),
(28, 'Tai nghe Bluetooth Wireless Xiaomi 2 ', 3, 4, 790000, 'bluetooth-tws-xiaomi-earbuds-basic-2-ava-1-600x600.jpg', 'Tai nghe Bluetooth True Wireless Xiaomi Earbuds Basic 2 BHR4272GL có kích thước nhỏ gọn chỉ nặng 35.4 g không hề nặng tai khi sử dụng lâu. Tai nghe tặng kèm 2 nút đệm tai với kích thước khác nhau giúp bạn dễ dàng lựa chọn phù hợp với tai tránh lỏng lẻo, rơi rớt', 0, '2021-11-07 13:34:45'),
(29, 'Điện thoại iPhone 13 Pro Max 256GB', 1, 1, 36990000, 'iphone-13-pro-max-gold-1-600x600.jpg', 'iPhone 13 Pro Max vẫn sẽ kế thừa thiết kế đặc trưng của iPhone 12 Series, vẫn là một sản phẩm với khung viền được hoàn thiện từ thép không gỉ, hai mặt trước sau được trang bị kính cường lực bóng bẩy.\r\n\r\n', 1, '2021-11-07 05:45:01'),
(30, 'Laptop Lenovo Yoga Slim 7 14ITL05 i7 1165G7/8GB/512GB/Win10', 6, 2, 27490000, 'lenovo-yoga-slim-7-14itl05-i7-1165g7-8gb-600x600.jpg', 'Laptop Lenovo độc đáo với lớp vỏ ngoài kim loại bền bỉ khẳng định cá tính, kết hợp cùng thiết kế bản lề chắc chắn có khả năng mở góc lên đến 180 độ cho phép người dùng thoải mái mở rộng góc nhìn, dễ dàng chia sẻ hình ảnh, dữ liệu mà không cần di chuyển máy phức tạp.', 1, '2021-11-08 11:06:53'),
(31, 'Apple Watch S6 LTE 40mm viền thép dây cao su ', 1, 5, 16991000, 'apple-watch-s6-lte-40mm-vien-thep-day-cao-su-xanh-la-thumb-600x600.jpg', 'Apple Watch S6 LTE 40mm viền thép dây cao su đen là một trong những dòng đồng hồ được ưa chuộng với thiết kế tinh tinh tế trong từng chi tiết, khung viền được gia công chắc chắn, dây đeo cao su đàn hồi tốt, màn hình sắc nét 1.57 inch hiển thị đủ thông tin. Đây là chiếc đồng hồ hứa hẹn đem đến cho bạn sự hài lòng khi đeo trên tay', 1, '2021-11-07 06:47:46'),
(32, 'Tai nghe Bluetooth True Wireless Galaxy Buds Pro', 2, 4, 4990000, 'tai-nghe-bluetooth-true-wireless-galaxy-buds-pro-ava-1-600x600.jpg', 'Tai nghe Bluetooth True Wireless Samsung Buds Pro sở hữu vẻ ngoài đẹp mắt thời thượng với hai màu đen và trắng. Thiết kế mới trên hình dạng tai nghe cổ điển, có khả năng làm giảm bớt sự khó chịu khi sử dụng tai nghe trong nhiều giờ và tai nghe cũng nằm chắc chắn phía trong tai khi bạn tập luyện hay vận động. Đồng thời, các lỗ thoát khí giúp cân bằng áp suất trong tai và tăng lưu lượng không khí, tạo cảm giác mềm mại dễ chịu khi sử dụng.', 1, '2021-11-08 11:06:53'),
(33, 'Apple Watch Series 7 LTE 41mm', 1, 5, 14990000, 'apple-watch-series-7-lte-45mm-vien-thep-vang-thumb-660x600.jpg', 'Apple Watch S7 LTE 41 mm viền nhôm dây cao su có thiết kế được nâng cấp hơn so với phiên bản tiền nhiệm. Sở hữu vẻ ngoài sang trọng và hiện đại, Apple Watch S7 được thiết kế các góc bo tròn mềm mại với mặt đồng hồ được vác cong tạo cảm giác liền mạch hơn với khung viền. Phần khung viền được thiết kế mỏng hơn 40% và làm từ vật liệu nhôm tái chế 100% thân thiện với môi trường. Dây đeo cao su có độ đàn hồi tốt, thoải mái khi đeo và chống thấm mồ hôi hiệu quả', 1, '2021-11-07 06:55:01'),
(34, 'Samsung Galaxy Watch viền thép dây da', 2, 5, 3490000, 'samsung-galaxy-watch-active-2-40-mm-day-da3-thumb-1-1-600x600.jpg', 'Đồng hồ thông minh Samsung Galaxy Watch Active 2 40mm với những cải tiến về mặt thiết kế cũng như nâng cấp thêm một số tính năng hữu ích khác sẽ là người bạn đồng hành chăm sóc sức khỏe hằng ngày của bạn', 0, '2021-11-07 07:02:27'),
(35, 'Điện thoại iPhone 13 Pro Max 128GB', 1, 1, 33990000, 'iphone-13-pro-max-sierra-blue-600x600.jpg', 'iPhone mới kế thừa thiết kế đặc trưng từ iPhone 12 Pro Max khi sở hữu khung viền vuông vức, mặt lưng kính cùng màn hình tai thỏ tràn viền nằm ở phía trước.', 1, '2021-11-07 05:52:24'),
(36, 'Điện thoại Samsung Galaxy Z Fold3 5G 512GB', 2, 1, 44990000, 'samsung-galaxy-z-fold-3-green-1-600x600.jpg', 'Đầu tiên, khung viền Galaxy Z Fold3 được hoàn thiện bằng chất liệu Armor Aluminum cao cấp nhất từ trước đến giờ nhằm tăng cường được độ bền, mà vẫn đảm bảo được trọng lượng cân đối đem tới cảm giác vô cùng chắc chắn và cao cấp.', 1, '2021-11-07 06:19:25'),
(37, 'Samsung Galaxy Watch viền nhôm dây sillicone', 2, 5, 2490000, 'samsung-galaxy-watch-active-2-44-mm-sillicon-thumb-1-1-600x600.jpg', 'Samsung Galaxy Watch 4 LTE Classic 46mm mang nét sang trọng, hiện đại cùng với bộ khung viền thép không gỉ cứng cáp, màn hình SUPER AMOLED được bao bọc bởi lớp kính cường lực Gorrilla Glass Dx+ bền bỉ, chịu lực tốt. Dây đeo silicone êm nhẹ, độ đàn hồi cao, không thấm nước, thiết kế đục lỗ cho người dùng sự thông thoáng khi mang', 0, '2021-11-07 07:07:53'),
(38, 'Đồng hồ thông minh Mi Watch ', 3, 5, 2590000, 'mi-watch-xanh-thumb-600x600.jpg', 'Đồng hồ thông minh Mi Watch này mang phong cách trẻ trung, cá tính và đậm chất thể thao. Đồng hồ được trang bị công nghệ màn hình AMOLED với kích thước 1.39 inch cùng độ phân giải 454 x 454 pixels và độ sáng lên đến 450 nits giúp người dùng có thể quan sát thông tin rõ nét, chất lượng. Bên cạnh đó, đồng hồ còn được trang bị mặt kính cường lực Gorilla Glass 3 hạn chế trầy xước và tăng độ bền cho thiết bị.', 1, '2021-11-07 07:07:53'),
(39, 'Điện thoại Xiaomi 11 Lite 5G NE pink', 3, 1, 9490000, 'xiaomi-11-lite-5g-ne-pink-600x600.jpg', 'Xiaomi 11 Lite 5G NE một phiên bản có ngoại hình rất giống với Mi 11 Lite được ra mắt trước đây. Chiếc smartphone này của Xiaomi mang trong mình một hiệu năng ổn định, thiết kế sang trọng và màn hình lớn đáp ứng tốt các tác vụ hằng ngày của bạn một cách dễ dàng. Máy được chế tác nguyên khối, sở hữu một thân hình siêu mỏng nhẹ chỉ có trọng lượng 158 g và mỏng 6.8 mm, tạo cảm giác cầm nắm thoải mái, để vào túi quần hay túi áo cũng không quá nặng nề', 1, '2021-11-08 10:10:21'),
(40, 'Vòng đeo tay thông minh Oppo Band', 4, 5, 711000, 'oppo-band-thumb-600x600.jpg', 'Vòng đeo tay thông minh Oppo Band mang đến một diện mạo mới - đầy cá tính và năng động. Dây đeo silicone nhẹ nhàng, không thấm nước, cho bạn thỏa sức hoạt động suốt cả ngày mà không lo tù bí, nặng tay. Màn hình AMOLED 1.1 inch vừa phải, tạo cảm giác thanh lịch khi đeo trên tay nhưng cũng vừa đủ để bạn quan sát thông tin hiển thị một cách dễ dàng. Mặt khác, chiếc vòng đeo tay còn được trang bị mặt kính cường lực cong 2.5D có độ cứng cao, khó nứt vỡ, sẵn sàng đồng hành cùng bạn trước những hoạt động thường ngày khác.', 0, '2021-11-08 07:11:43'),
(41, 'Laptop Lenovo Yoga Duet 7 13IML05 i5 10210U/8GB/512GB/Touch', 6, 2, 26590000, 'lenovo-yoga-duet-7-13iml05-i5-82as007bvn-153521-023547-600x600.jpg', 'Với trọng lượng 1.1683 kg (bao gồm máy là 0.7988 kg và bàn phím và 0.3695 kg), Yoga Duet 7 đủ nhẹ và linh hoạt để sử dụng ở mọi nơi. Độ dày chỉ 9.19 mm thì bạn có thể dễ dàng cho vào túi xách và mang theo đi bất cứ đâu mà mình muốn.', 1, '2021-11-07 06:36:54'),
(42, 'Laptop Lenovo ThinkBook 14s G2 ITL i7 1165G7/8GB/512GB/Win10', 6, 2, 24990000, 'lenovo-thinkbook-14s-g2-itl-i7-20va000mvn-600x600.jpg', 'Lenovo trang bị cho ThinkBook 14s G2 ITL con chip Intel Core i7 Tiger Lake có xung nhịp trung bình là 2.8 GHz và hỗ trợ khả năng Turbo boost lên đến 4.7 GHz giúp bạn tối ưu hiệu suất làm việc từ Word, Excel,... cho đến các phần mềm hiệu năng cao hơn như đồ hoạ, lập trình.', 1, '2021-11-07 06:36:54'),
(43, 'Máy tính bảng iPad mini 6 WiFi Cellular 256GB ', 1, 3, 24990000, 'ipad-mini-6-wifi-cellular-purple-1-600x600.jpg', 'iPad mini 6 có thiết kế bên ngoài được thừa hưởng từ dòng iPad Pro nhưng với kích thước nhỏ gọn hơn, giúp bạn dễ dàng mang đi bất cứ đâu, sẵn sàng học tập, làm việc hay giải trí mà không hề có cảm giác vướng víu.', 1, '2021-11-07 07:01:05'),
(44, 'Máy tính bảng iPad 9 WiFi Cellular 256GB', 1, 3, 18990000, 'ipad-gen-9-wifi-cellular-grey-600x600.jpg', 'iPad 9 sử dụng tấm nền IPS LCD với công nghệ Retina độc quyền từ Apple có độ phân giải cao 1620 x 2160 Pixels, độ sáng lên tới 500 nits cho màu sắc sinh động, hình ảnh rõ ràng đến từng chi tiết nhỏ. Kích thước tiêu chuẩn 10.2 inch phù hợp để làm việc theo nhóm, xem bóng đá hoặc thiết kế tuyệt tác tiếp theo của bạn.', 1, '2021-11-07 07:01:05'),
(45, 'Tai nghe Bluetooth 1 Apple MLWK3 Trắng', 1, 4, 6790000, 'bluetooth-airpods-pro-magsafe-charge-apple-mlwk3-avatar-600x600.jpg', 'Tai nghe Bluetooth AirPods Pro MagSafe Charge Apple MLWK3 trắng được chế tác với vẻ ngoài tinh giản, gam màu trắng trẻ trung, sáng đẹp, phối hợp tuyệt vời với mọi trang phục từ đời thường đến công sở, dự tiệc của bạn. ', 0, '2021-11-07 13:25:16'),
(46, 'Tai nghe Bluetooth AirPods 3 Apple MME73 ', 1, 4, 5490000, 'tai-nghe-bluetooth-airpods-3-191021-085229-600x600.jpg', 'Airpods 3 có thiết kế tương tự như AirPods Pro nhưng không còn phần eartips, đường viền và thân ngắn hơn cho âm thanh truyền tải đến tai tối ưu. Bề mặt tai nghe Bluetooth Apple phủ sắc trắng thời thượng, được làm từ các vật liệu tái chế với độ bền cao, bảo vệ môi trường sống của con người. ', 1, '2021-11-07 13:25:16'),
(47, 'Oppo Watch 46mm dây silicone vàng đồng', 4, 5, 5752000, 'oppo-watch-46mm-day-silicone-hong-thumb-1-1-600x600.jpg', 'Đồng hồ thông minh Oppo Watch màu vàng hồng phiên bản 46mm sử dụng mặt đồng hồ vuông, bo cong nhẹ ở 4 cạnh, cùng với mặt kính vát cong 2D có chiều sâu tạo cảm giác như mặt kính cong 3D, màn hình AMOLED 1.91 inch độ phân giải 402 x 476 pixels cho chất lượng hiển thị sắc nét. Dây đeo silicone cho cảm giác mang được dễ chịu và thoải mái.', 1, '2021-11-07 07:14:54'),
(48, 'Oppo Watch 41mm dây silicone đen', 4, 5, 6490000, 'oppo-watch-41mm-day-silicone-den-thumb-1-1-600x600.jpg', 'Đồng hồ thông minh Oppo Watch màu đen phiên bản 41mm sử dụng mặt đồng hồ dạng hình vuông với 4 góc bo tròn nhẹ, màn hình AMOLED 1.6 inch (320 x 360 pixels) cùng mật độ điểm ảnh 326ppi cho chất lượng hiển thị cực kì rõ nét. Dây đeo silicone tạo cảm giác vô cùng mềm mại, không bị đau khi đeo lâu.', 1, '2021-11-07 07:04:02'),
(49, 'Tai nghe Bluetooth LG Tone Free HBS-FN4 ', 5, 4, 2790000, 'tai-nghe-bluetooth-true-wireless-lg-hbs-fn4-avatar-1-1-600x600.jpg', 'Chống ồn, cách âm tốt với thiết kế kín chặt bên trong tai, hỗ trợ vòng đệm silicone tạo sự thoải mái dù dùng suốt ngày dài. Chất liệu silicone sử dụng cho vòng đệm là loại dùng trong y khoa, êm mềm, không gây kích ứng, an toàn cho mọi người dùng. Đặc biệt, tai nghe ngưng và phát nhạc tự động thông qua hệ cảm biến khi tai nghe được gắn hoặc tháo rời khỏi tai người dùng, tiết kiệm pin hiệu quả cho thiết bị.', 0, '2021-11-08 11:14:41'),
(50, 'Tai nghe Bluetooth Samsung Galaxy 2 R177N', 2, 4, 2990000, 'bluetooth-true-wireless-samsung-buds-2-r177n-avatar2-600x600.jpg', 'Bao phủ bên ngoài mỗi hộp sạc Galaxy Buds 2 R177N là gam màu trắng thuần khiết, khi mở hộp ra, tràn khắp mặt trong hộp và housing là những màu sắc độc đáo, tuyệt đẹp gồm đen Graphite, tím Lavender và xanh Olive.', 1, '2021-11-07 13:31:09'),
(51, 'Điện thoại OPPO Reno6 5g-aurora Z 5G', 4, 1, 9490000, 'oppo-reno6-z-5g-aurora-1-600x600.jpg', 'Hệ thống camera sau được trang bị tối tân, trong đó có camera chính 64 MP, camera góc siêu rộng 8 MP và camera macro 2 MP cùng camera trước 32 MP luôn sẵn sàng bắt trọn mọi cảm xúc trong khung hình, giúp người dùng thoải mái ghi lại những khoảnh khắc trong cuộc sống một cách ấn tượng nhất', 0, '2021-11-07 19:12:04'),
(52, 'Apple Watch S6 LTE 44mm viền nhôm dây cao su', 1, 5, 11992000, 's6-lte-44mm-vien-nhom-day-cao-su-xanh-thumb-1-600x600.jpg', 'Apple Watch S6 LTE 44mm viền nhôm dây cao su xanh dương mang nét thanh lịch, các chi tiết được gia công chắc chắn, tinh xảo. Màn hình OLED 1.78 inch với thiết kế tràn viền giúp hình ảnh hiển thị rõ nét, chân thực. Nhờ có mặt kính Ion-X strengthened glass cứng cáp, chống trầy xước và chống va đập hiệu quả, đồng hồ an toàn trước những va chạm thường ngày. Dây đeo silicone êm nhẹ, độ đàn hồi cao, cho người dùng cảm giác dễ chịu suốt ngày dài', 1, '2021-11-07 19:16:00'),
(53, 'Vòng đeo tay thông minh Mi Band 6', 3, 5, 990000, 'mi-band-6-thumb-1-1-600x600.jpg', 'Vòng đeo tay thông minh Mi Band 6 là phiên bản đáng mong đợi của nhà Xiaomi với thiết kế màn hình tràn viền cho bạn góc nhìn tốt hơn. Mặt kính cường lực chống trầy xước tốt cùng dây đeo cao su với thiết kế ôm trọn cổ tay, không thấm nước khi đeo, mang lại cho bạn cảm giác dễ chịu cả ngày dài.', 0, '2021-11-08 10:46:21'),
(54, 'Máy tính bảng Samsung Galaxy Tab S6 Lite', 2, 3, 9990000, 'samsung-galaxy-tab-s6-lite-600x600-2-600x600.jpg', 'Sau thành công của Galaxy Tab S6, Samsung tiếp tục chinh phục người dùng với Galaxy Tab S6 Lite có phân khúc giá rẻ hơn. Thiết bị vẫn hỗ trợ bút S Pen thần thánh, thiết kế kim loại cao cấp và màn hình, âm thanh giải trí đỉnh cao. Máy tính bảng Galaxy Tab S6 Lite sở hữu thiết ấn tượng với độ dày chỉ 7mm và trọng lượng siêu nhẹ 467g, giúp người dùng dễ dàng bỏ vào túi xách hay mang theo bất kì đâu.', 1, '2021-11-08 11:00:26'),
(55, 'Samsung Galaxy Watch Active viền thép dây da', 2, 5, 5490000, 'samsung-galaxy-watch-active-2-44-mm-day-da-thumb-1-1-600x600.jpg', 'Đồng hồ thông minh Samsung Galaxy Watch Active 2 thực sự là huấn luyện viên thể thao chuyên nghiệp của bạn với việc tích hợp những chế độ luyện tập khác nhau cho phù hợp với cơ địa và thể trạng của từng người. Đồng hồ thông minh Samsung Galaxy Watch Active 2 44mm là phiên bản có sự cải tiến về công nghệ để mang đến những trải nghiệm tốt nhất cho người dùng với nhiều tính năng chăm sóc sức khỏe, nhận cuộc gọi trực tiếp cũng như nhiều tính năng tiện ích khác', 0, '2021-11-08 10:46:21'),
(56, 'Apple Watch SE 40mm viền nhôm dây cao su', 1, 5, 8450000, 'se-40mm-vien-nhom-day-cao-su-hong-thumb-1-600x600.jpg', 'Apple Watch SE 40mm viền nhôm dây cao su hồng có khung viền chắc chắn, thiết kế bo tròn 4 góc giúp thao tác vuốt chạm thoải mái hơn. Mặt kính cường lực Ion-X strengthened glass với kích thước 1.57 inch, hiển thị rõ ràng. Khung viền nhôm chắc chắn cùng dây đeo cao su có độ đàn hồi cao, êm ái, tạo cảm giác thoải mái khi đeo.', 1, '2021-11-07 06:54:03'),
(57, 'Máy tính bảng Huawei MatePad T8', 7, 3, 3290000, 'huawei-matepad-t8-xanh-600x600.jpg', 'Huawei MatePad T8 là một trong những mẫu máy tính bảng giá rẻ của Huawei có thiết kế nguyên khối cùng một cấu hình cơ bản, đủ dùng cho các tác vụ hằng ngày của mọi người dùng. Máy tính bảng Huawei MatePad T8 mang cho mình thiết kế chắc chắn, viền màn hình 2 bên mỏng tạo cho trải nghiệm xem rộng rãi và cảm giác cầm nắm tốt.', 0, '2021-11-08 11:00:26'),
(58, 'Tai nghe Bluetooth Galaxy 1 Pro Bạc', 2, 4, 4990000, 'bluetooth-true-wireless-galaxy-buds-pro-bac-ava-600x600.jpg', 'Tai nghe Bluetooth True Wireless Samsung Buds Pro sở hữu vẻ ngoài đẹp mắt thời thượng với hai màu đen và trắng. Thiết kế mới trên hình dạng tai nghe cổ điển, có khả năng làm giảm bớt sự khó chịu khi sử dụng tai nghe trong nhiều giờ và tai nghe cũng nằm chắc chắn phía trong tai khi bạn tập luyện hay vận động. Đồng thời, các lỗ thoát khí giúp cân bằng áp suất trong tai và tăng lưu lượng không khí, tạo cảm giác mềm mại dễ chịu khi sử dụng.', 1, '2021-11-07 13:31:09'),
(59, 'Điện thoại iPhone 13 Pro Max 1TB', 1, 1, 48490000, 'iphone-13-pro-max-silver-600x600.jpg', 'Để đảm bảo hiệu năng cho iPhone 13 Pro Max, nhà Táo sử dụng con chip Apple A15 Bionic được sản xuất theo tiến trình 5 nm cải tiến, số lượng bóng dẫn lên đến 15.8 nghìn tỷ cho năng lực tính toán và xử lý các tác vụ của điện thoại tăng mạnh. ', 1, '2021-11-07 05:52:24'),
(60, 'Điện thoại OPPO Reno6 Pro 5G', 4, 1, 18490000, 'oppo-reno6-pro-blue-1-600x600.jpg', 'Reno6 Pro 5G trang bị bộ vi xử lý mạnh mẽ Snapdragon 870 đến từ Qualcomm, đạt tốc độ xử lý cao trên xung nhịp lên đến 3.2 GHz, hiệu suất CPU tăng lên 12% và GPU 10% so với thế hệ chipset tiền nhiệm, mang đến trải nghiệm ấn tượng trên từng tác vụ giải trí lẫn công việc', 1, '2021-11-07 06:33:13');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `protypes`
--

DROP TABLE IF EXISTS `protypes`;
CREATE TABLE IF NOT EXISTS `protypes` (
  `type_id` int(11) NOT NULL AUTO_INCREMENT,
  `type_name` varchar(150) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`type_id`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `protypes`
--

INSERT INTO `protypes` (`type_id`, `type_name`) VALUES
(1, 'Điện Thoại'),
(2, 'Laptop'),
(3, 'Tablet'),
(4, 'Tai nghe'),
(5, 'Đồng hồ thông minh');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
