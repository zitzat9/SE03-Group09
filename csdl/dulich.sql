-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th1 10, 2020 lúc 12:03 AM
-- Phiên bản máy phục vụ: 10.1.37-MariaDB
-- Phiên bản PHP: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `db_banhang`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `bills`
--

CREATE TABLE `bills` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_customer` int(11) DEFAULT NULL,
  `date_order` date DEFAULT NULL,
  `total` float DEFAULT NULL COMMENT 'tổng tiền',
  `payment` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'hình thức thanh toán',
  `note` varchar(500) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `bills`
--

INSERT INTO `bills` (`id`, `id_customer`, `date_order`, `total`, `payment`, `note`, `created_at`, `updated_at`) VALUES
(14, 14, '2017-03-23', 160000, 'COD', 'k', '2017-03-23 04:46:05', '2017-03-23 04:46:05'),
(13, 13, '2017-03-21', 400000, 'ATM', 'Vui lòng giao hàng trước 5h', '2017-03-21 07:29:31', '2017-03-21 07:29:31'),
(12, 12, '2017-03-21', 520000, 'COD', 'Vui lòng chuyển đúng hạn', '2017-03-21 07:20:07', '2017-03-21 07:20:07'),
(11, 11, '2017-03-21', 420000, 'COD', 'không chú', '2017-03-21 07:16:09', '2017-03-21 07:16:09'),
(15, 15, '2017-03-24', 220000, 'COD', 'e', '2017-03-24 07:14:32', '2017-03-24 07:14:32');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `bill_detail`
--

CREATE TABLE `bill_detail` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_bill` int(10) NOT NULL,
  `id_product` int(10) NOT NULL,
  `quantity` int(11) NOT NULL COMMENT 'số lượng',
  `unit_price` double NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `bill_detail`
--

INSERT INTO `bill_detail` (`id`, `id_bill`, `id_product`, `quantity`, `unit_price`, `created_at`, `updated_at`) VALUES
(18, 15, 62, 5, 220000, '2017-03-24 07:14:32', '2017-03-24 07:14:32'),
(17, 14, 2, 1, 160000, '2017-03-23 04:46:05', '2017-03-23 04:46:05'),
(16, 13, 60, 1, 200000, '2017-03-21 07:29:31', '2017-03-21 07:29:31'),
(15, 13, 59, 1, 200000, '2017-03-21 07:29:31', '2017-03-21 07:29:31'),
(14, 12, 60, 2, 200000, '2017-03-21 07:20:07', '2017-03-21 07:20:07'),
(13, 12, 61, 1, 120000, '2017-03-21 07:20:07', '2017-03-21 07:20:07'),
(12, 11, 61, 1, 120000, '2017-03-21 07:16:09', '2017-03-21 07:16:09'),
(11, 11, 57, 2, 150000, '2017-03-21 07:16:09', '2017-03-21 07:16:09');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `customer`
--

CREATE TABLE `customer` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `gender` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `phone_number` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `note` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `news`
--

CREATE TABLE `news` (
  `news_id` int(22) NOT NULL,
  `news_name` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL COMMENT 'tiêu đề',
  `news_sort_content` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL COMMENT 'nội dung',
  `news_content` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL COMMENT 'hình',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `news_img` varchar(222) NOT NULL,
  `news_type` varchar(222) NOT NULL,
  `new_hot` varchar(222) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `news`
--

INSERT INTO `news` (`news_id`, `news_name`, `news_sort_content`, `news_content`, `created_at`, `updated_at`, `news_img`, `news_type`, `new_hot`) VALUES
(1, 'Du lịch Bà Nà Hills', 'Du lịch Bà Nà Hill vẫn luôn luôn là lựa chọn số 1 của tất cả mọi người khi đến Đà Nẵng. Với kinh nghiệm du lịch Bà Nà mình sẽ hướng dẫn BẠN: Du lịch Bà Nà Hill tự túc như thế nào? Phương tiện di chuyển ra sao?  Mua vé cáp treo ở đâu? Ăn uống giá bao nhiêu? Những địa điểm tham quan trên Bà Nà có gì Đẹp? Giúp bạn nắm đầy đủ kinh nghiệm để có thể tự tin đi du lịch Bà Nà Hill trong 1 ngày vui vẻ và tiết kiệm chi phí nhất.', '<p>q</p>', '2020-01-09 21:21:46', '2020-01-09 21:21:46', '/uploads/news/20200110042000.jpg', 'Nội bộ', '1'),
(2, 'Du lịch Maldives', 'Maldives được mệnh danh là “thiên đường du lịch”, nổi tiếng với những hòn đảo tuyệt đẹp cùng những khu nghỉ dưỡng sang trọng. Để có chuyến đi thuận lợi, vui vẻ nhất bạn không nên bỏ qua những chia sẻ về cẩm nang du lịch Maldives dưới đây nhé.', '<p>a</p>', '2020-01-09 22:47:31', '2020-01-09 22:47:31', '/uploads/news/20200110054709.jpg', 'Nội bộ', '1');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `products`
--

CREATE TABLE `products` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `id_type` int(10) UNSIGNED DEFAULT NULL,
  `description` text COLLATE utf8_unicode_ci,
  `image` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `new` varchar(222) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `products`
--

INSERT INTO `products` (`id`, `name`, `id_type`, `description`, `image`, `created_at`, `updated_at`, `new`) VALUES
(71, 'Vịnh Hạ Long', 1, 'Nằm cách Hà Nội khoảng 165km, Vịnh Hạ Long nằm ngoài khơi bờ biển phía đông bắc của Việt Nam, sở hữu khoảng 2.000 đảo và mỏm đá vôi với đủ hình thù và kích cỡ lớn bé khác nhau, nổi lên trên mặt nước biển trong xanh tĩnh lặng. Không khí xung quanh thường được bao phủ trong màn sương, điều này góp phần làm cho nơi đây thêm phần kỳ bí.Bên cạnh đó, vịnh Hạ Long còn là nơi tập trung đa dạng sinh học cao với những hệ sinh thái điển hình cùng với hàng nghìn loài động thực vật vô cùng phong phú, đa dạng. Nơi đây còn gắn liền với những giá trị văn hóa – lịch sử hào hùng của dân tộc.Tên vịnh Hạ Long có thể hiểu là “Nơi rồng đáp xuống”. Theo truyền thuyết địa phương, thuở sơ khai, Ngọc Hoàng phái rồng mẹ mang theo đàn rồng con xuống giúp người dân Việt đánh giặc. Rồng phun lửa thiêu cháy thuyền giặc, rồng nhả châu ngọc dựng thành những bức tường đá sừng sững trên biển, thuyền giặc đâm phải là vỡ tan…Nhiệm vụ hoàn thành, nhưng vì lưu luyến cảnh thanh bình, cây cối tốt tươi, con người cần cù nhân hậu nên mẹ con rồng đã ở lại hạ giới để bảo vệ người dân Việt. Vùng biển nơi rồng mẹ đáp xuống được gọi là Hạ Long, nơi rồng con đáp xuống gọi là Bái Tử Long, và nơi đuôi rồng quẫy nước trắng xoá là Bạch Long Vĩ, tức bán đảo Trà Cổ ngày nay.', '/uploads/product/20200110050951.png', '2020-01-09 22:09:51', '2020-01-09 22:09:51', '1'),
(72, 'Tràng An', 1, 'Tràng An là một vùng thiên nhiên kỳ bí, không bị ảnh hưởng nhiều bởi các hoạt động của con người. Rừng rậm còn hoang sơ, hồ nước, sông suối trong vắt, không khí trong lành, làng quê yên tĩnh, chỉ có âm thanh và sắc màu của thiên nhiên. Cảnh quan địa chất núi đá dạng tháp các-xtơ (karst) Tràng An là một trong những khu vực đẹp và ngoạn mục bởi vẻ đẹp siêu nhiên bậc nhất trên thế giới với muôn hình vạn trạng. Cảnh quan gồm chủ yếu một loạt các tháp các-xtơ dạng nón, với vách dốc đứng, cao 200 m so với nền đất chung quanh. Những rặng núi hẹp nối liền hai đỉnh, được ví như những thanh kiếm khổng lồ, bao quanh các thung, trũng, hố sụt tròn và dài. Các nhà địa chất quốc tế đánh giá đây là một thí dụ điển hình cho tháp đá vôi nhiệt đới ẩm ở giai đoạn cuối của quá trình phát triển địa mạo và là một mô hình để nhận biết, so sánh với các khu vực khác trên thế giới. Cảnh quan chứa đựng một dãy hoàn chỉnh các dạng địa hình đá vôi điển hình, bao gồm tháp, lũng (hố các-xtơ), thung lũng (hố sụt), các cấu trúc sụt lở và các lớp trầm tích, hang ngầm và sông ngầm, hang động và trầm tích hang động. Ðặc biệt, cảnh quan dạng các-xtơ chuyển tiếp giữa cụm đỉnh các-xtơ (bao gồm các tháp liên kết với nhau bằng những dải núi sắc và quèn các-xtơ) với rừng đỉnh các-xtơ (bao gồm các tháp đơn lẻ nằm độc lập trên đồng bằng bồi tích). Mạng lưới các đứt gãy song song giao nhau chia cắt khu vực thành ô mạng, tạo nên các trũng các-xtơ tròn, kín. Các bồn trũng và thung lũng ngập nước này liên thông với nhau bởi các dòng chảy, chảy qua các hang động và hang ngầm, có nhiều hang xuyên núi, tạo cho trần hang có dạng \"xâm thực rãnh\" do dòng chảy và nhiều loại trầm tích hang động, bao gồm các nhũ đá, măng đá, cột đá và rèm đá.', '/uploads/product/20200110051125.jpg', '2020-01-09 22:11:25', '2020-01-09 22:11:25', '1'),
(73, 'Phố cổ Hội An', 2, 'Hội An ra đời vào khoảng nửa cuối thế kỷ 16, thời kỳ Việt Nam nằm dưới sự trị vì của nhà Lê. Vào năm 1527, Mạc Đăng Dung giành ngôi nhà Lê, vùng Đông Kinh thuộc quyền cai quản của nhà Mạc. Năm 1533, Nguyễn Kim nhân danh nhà Lê tập hợp binh sĩ chống lại nhà Mạc. Sau khi Nguyễn Kim chết năm, người con rể Trịnh Kiểm nắm giữ quyền hành, dòng họ Nguyễn Kim bị lấn át.  Năm 1558, người con thứ của Nguyễn Kim là Nguyễn Hoàng cùng gia quyến và một số binh lính lui về cố thủ ở vùng Thuận Hóa và từ sau năm 1570, Nguyễn Hoàng tiếp tục nắm quyền trấn thủ Quảng Nam. Cùng với con trai là Nguyễn Phúc Nguyên, Nguyễn Hoàng xây dựng thành lũy, ra sức phát triển kinh tế Đàng Trong, mở rộng giao thương buôn bán với nước ngoài và Hội An trở thành thương cảng quốc tế sầm uất bậc nhất khu vực Đông Nam Á thời kỳ đó.Hội An nổi tiếng bởi vẻ đẹp kiến trúc truyền thống, hài hòa của những ngôi nhà, bức tường và cả những con đường. Cùng với bao biến cố thăng trầm của lịch sử, phố cổ Hội An vẫn giữ những nét đẹp xưa cổ trầm mặc rêu phong trong từng mái ngói, viên gạch, hàng cây… như chính nét bình dị trong tính cách, tâm hồn thuần hậu, chân chất của người dân địa phương.Kiểu nhà ở phổ biến nhất ở Hội An chính là những ngôi nhà phố một hoặc hai tầng với đặc trưng chiều ngang hẹp, chiều sâu rất dài tạo nên kiểu nhà hình ống. Những vật liệu chính dùng để xây dựng nhà ở đây đều có sức chịu lực và độ bền cao do đặc điểm khí hậu khắc nghiệt và bão lụt hàng năm của vùng này. Thông thường, các ngôi nhà có kết cấu kiểu nhà khung gỗ, hai bên có tường gạch ngăn cách. Khuôn viên trung bình của các ngôi nhà có chiều ngang khoảng 4 đến 8 mét, chiều sâu khoảng 10 đến 40 mét, biến thiên theo từng tuyến phố. Bố cục mặt bằng phổ biến của những ngôi nhà ở đây gồm: vỉa hè, hiên, nhà chính, nhà phụ, hiên, nhà cầu và sân trong, hiên, nhà sau ba gian, vườn sau.', '/uploads/product/20200110051626.jpg', '2020-01-09 22:16:26', '2020-01-09 22:16:26', '1'),
(74, 'Nha trang', 2, 'Kiểu nhà ở phổ biến nhất ở Hội An chính là những ngôi nhà phố một hoặc hai tầng với đặc trưng chiều ngang hẹp, chiều sâu rất dài tạo nên kiểu nhà hình ống. Những vật liệu chính dùng để xây dựng nhà ở đây đều có sức chịu lực và độ bền cao do đặc điểm khí hậu khắc nghiệt và bão lụt hàng năm của vùng này. Thông thường, các ngôi nhà có kết cấu kiểu nhà khung gỗ, hai bên có tường gạch ngăn cách. Khuôn viên trung bình của các ngôi nhà có chiều ngang khoảng 4 đến 8 mét, chiều sâu khoảng 10 đến 40 mét, biến thiên theo từng tuyến phố. Bố cục mặt bằng phổ biến của những ngôi nhà ở đây gồm: vỉa hè, hiên, nhà chính, nhà phụ, hiên, nhà cầu và sân trong, hiên, nhà sau ba gian, vườn sau.Chính vì vậy, trung tầm từ tháng 3 đến tháng 9 là thời điểm thích hợp nhất để có những chuyến đi du lịch Nha Trang thú vị. Nhưng bạn cũng cần lưu ý vào khoảng thời gian này, các khách sạn Nha Trang thường xuyên trong tình trạng cháy phòng, nên bạn hãy đặt phòng trước khi tới đây để tránh mất thời gian đi tìm phòng khách sạn.', '/uploads/product/20200110051830.jpg', '2020-01-09 22:18:30', '2020-01-09 22:18:30', '1'),
(75, 'Phú Quốc', 3, 'Trực thuộc tỉnh Kiên Giang, Phú Quốc được mệnh danh là Đảo Ngọc. Với những bãi biển nước xanh trong vắt như Bãi Sao và Bãi Dài, Phú Quốc thực sự là thiên đường cho những người yêu biển. Thị trấn Dương Đông là nơi tập trung dân cư sầm uất nhất trên đảo Phú Quốc, đặc biệt là khu chợ đêm nằm gần Dinh Cậu. Ngoài ra, làng chài Hàm Ninh, Gành Dầu và quần đảo An Thới cũng là những địa điểm tham quan không thể bỏ qua khi du lịch Phú Quốc. Đặc sản của Phú Quốc không chỉ có các loại hải sản tươi sống mà còn có hồ tiêu Phú Quốc, được trồng dọc theo con đường đất đỏ đi đến Bắc Đảo, Gành Dầu.', '/uploads/product/20200110052030.jpg', '2020-01-09 22:20:30', '2020-01-09 22:20:30', '1'),
(76, 'Bà Rịa Vũng Tàu', 3, 'Cách trung tâm thành phố Hồ Chí Minh chỉ khoảng 3 tiếng lái xe, với đường bờ biển trải dài 20km, Vũng Tàu là một trong những điểm đến yêu thích của du khách phía Nam. Nằm nhô hẳn ra khỏi đất liền như một dải đất, từ nơi đây, người ta có thể nhìn biển Đông cả khi trời mọc lẫn lúc hoàng hôn. Bên cạnh những giá trị cảnh quan thiên nhiên, Vũng Tàu còn là miền đất có truyền thống văn hóa lịch sử lâu đời.Đến với Vũng Tàu bạn sẽ có cảm giác bình yên, dễ chịu với những con đường rộng rãi, thoáng đãng. Dưới là biển xanh, trên là những ngọn núi to, núi nhỏ, cùng những ngôi chùa thanh tịnh… Tất cả tạo nên một Vũng Tàu đầy ma lực, một thành phố Vũng Tàu không chỉ hiền hòa bình dị mà còn vô vàn những danh lam thắng cảnh nổi tiếng.', '/uploads/product/20200110052209.jpg', '2020-01-09 22:22:09', '2020-01-09 22:22:09', '1'),
(78, 'Maldives', 4, 'Maldives là một quốc đảo gồm nhóm các đảo san hô tại Ấn Độ Dương. Maldives nằm ở phía nam quần đảo Lakshadweep thuộc Ấn Độ, và cách khoảng 700km (435 mi) về phía tây nam Sri Lanka. Hai mươi sáu đảo san hô của Maldives bao vòng quanh một lãnh thổ gồm 1.192 đảo nhỏ và khoảng hai trăm đảo trong số này có các cộng đồng địa phương sinh sống. Đây là đất nước phẳng nhất thế giới, có độ cao trung bình 2,3m so với mực nước biển nên thực tế khả năng Maldives bị nhấn chìm trong biển nước là rất lớn do không ít vị trí thấp nhất trái đất hiện nay Maldives như một thiên đường có thật với vẻ đẹp nhiệt đới hoang sơ, làn nước xanh một màu ngọc quyến rũ trong vắt nối dài, ẩm mình bên dưới là các vòng san sô tròn đa dạng sinh vật, cùng những bãi cát trắng mịn, những căn chòi san sát nhau trên mặt nước cùng chiếc cầu tàu cong cong…', '/uploads/product/20200110052532.jpg', '2020-01-09 22:25:32', '2020-01-09 22:25:32', '1'),
(79, 'Ai Cập', 4, 'Du lịch Ai Cập có sức hút mãnh liệt với những nét huyền bí của lịch sử 5000 năm. Đến Ai Cập là phải tới kỳ quan Kim Tự Tháp vĩ đại, bảo tàng Ai Cập lưu trữ nghệ thuật, văn hóa, xã hội, tôn giáo, lăng mộ Pharaoh, đền Luxor, thung lũng Hoàng đế, thư viện Alexandria hoành tráng, đền Abu Simbel. Resort Biển Đỏ có dịch vụ lặn biển thú vị nhất thế giới.  Xem nội dung đầy đủ tại: https://travel.com.vn/du-lich-ai-cap.aspx Nguồn: travel.com.vn', '/uploads/product/20200110052723.jpg', '2020-01-09 22:27:23', '2020-01-09 22:27:23', '1');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `slide`
--

CREATE TABLE `slide` (
  `id` int(11) NOT NULL,
  `link` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `slide`
--

INSERT INTO `slide` (`id`, `link`, `image`) VALUES
(1, '', 'banner1.jpg'),
(2, '', 'banner2.jpg'),
(3, '', 'banner3.jpg'),
(4, '', 'banner4.jpg');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `type_products`
--

CREATE TABLE `type_products` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `type_products`
--

INSERT INTO `type_products` (`id`, `name`, `description`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Miền bắc', 'Nếu từng bị mê hoặc bởi các loại tarlet ngọt thì chắn chắn bạn không thể bỏ qua những loại tarlet mặn. Ngoài hình dáng bắt mắt, lớp vở bánh giòn giòn cùng với nhân mặn như thịt gà, nấm, thị heo ,… của bánh sẽ chinh phục bất cứ ai dùng thử.', 'banh-man-thu-vi-nhat-1.jpg', NULL, NULL),
(2, 'Miền trung', 'Bánh ngọt là một loại thức ăn thường dưới hình thức món bánh dạng bánh mì từ bột nhào, được nướng lên dùng để tráng miệng. Bánh ngọt có nhiều loại, có thể phân loại dựa theo nguyên liệu và kỹ thuật chế biến như bánh ngọt làm từ lúa mì, bơ, bánh ngọt dạng bọt biển. Bánh ngọt có thể phục vụ những mục đính đặc biệt như bánh cưới, bánh sinh nhật, bánh Giáng sinh, bánh Halloween..', '20131108144733.jpg', '2016-10-12 02:16:15', '2016-10-13 01:38:35'),
(3, 'Miền nam', 'Bánh trái cây, hay còn gọi là bánh hoa quả, là một món ăn chơi, không riêng gì của Huế nhưng khi \"lạc\" vào mảnh đất Cố đô, món bánh này dường như cũng mang chút tinh tế, cầu kỳ và đặc biệt. Lấy cảm hứng từ những loại trái cây trong vườn, qua bàn tay khéo léo của người phụ nữ Huế, món bánh trái cây ra đời - ngọt thơm, dịu nhẹ làm đẹp lòng biết bao người thưởng thức.', 'banhtraicay.jpg', '2016-10-18 00:33:33', '2016-10-15 07:25:27'),
(4, 'Quốc tế', 'Với người Việt Nam thì bánh ngọt nói chung đều hay được quy về bánh bông lan – một loại tráng miệng bông xốp, ăn không hoặc được phủ kem lên thành bánh kem. Tuy nhiên, cốt bánh kem thực ra có rất nhiều loại với hương vị, kết cấu và phương thức làm khác nhau chứ không chỉ đơn giản là “bánh bông lan” chung chung đâu nhé!', 'banhkem.jpg', '2016-10-26 03:29:19', '2016-10-26 02:22:22');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `full_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `full_name`, `email`, `password`, `phone`, `address`, `remember_token`, `created_at`, `updated_at`) VALUES
(8, 'Nguyen Tung', 'abc@gmail.com', '$2y$10$fS/4lIu2C68s7LytLyer8emwtRvlVzO2D2w272W3UYpg7A8C7P4.O', '0985741111', 'Yên hòa _ cầu giấy_ Hà nội', 'GvzThAypqQ5SUJUSjfAwQILWTtrRxCA2jLlh6URi8xNTvzOMnaLJCyFrz0JX', '2020-01-07 20:41:17', '2020-01-07 20:41:17'),
(9, 'Nguyen Tung', 'gameofme1102@gmail.com', '$2y$10$N.cMoiuxCLjPWkJPIs9Gd.fKh8FsEVDhOZnUDwvIg7PJXKJqu924S', '0985746822', 'Yên hòa _ cầu giấy_ Hà nội', NULL, '2020-01-08 09:52:04', '2020-01-08 09:52:04');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `bills`
--
ALTER TABLE `bills`
  ADD PRIMARY KEY (`id`),
  ADD KEY `bills_ibfk_1` (`id_customer`);

--
-- Chỉ mục cho bảng `bill_detail`
--
ALTER TABLE `bill_detail`
  ADD PRIMARY KEY (`id`),
  ADD KEY `bill_detail_ibfk_2` (`id_product`);

--
-- Chỉ mục cho bảng `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`news_id`);

--
-- Chỉ mục cho bảng `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `products_id_type_foreign` (`id_type`);

--
-- Chỉ mục cho bảng `slide`
--
ALTER TABLE `slide`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `type_products`
--
ALTER TABLE `type_products`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `bills`
--
ALTER TABLE `bills`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT cho bảng `bill_detail`
--
ALTER TABLE `bill_detail`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT cho bảng `customer`
--
ALTER TABLE `customer`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT cho bảng `news`
--
ALTER TABLE `news`
  MODIFY `news_id` int(22) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=80;

--
-- AUTO_INCREMENT cho bảng `slide`
--
ALTER TABLE `slide`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `type_products`
--
ALTER TABLE `type_products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_id_type_foreign` FOREIGN KEY (`id_type`) REFERENCES `type_products` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
