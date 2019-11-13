-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 13, 2019 lúc 06:43 AM
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
-- Cơ sở dữ liệu: `reviewdulich`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `image`
--

CREATE TABLE `image` (
  `img_id` int(11) NOT NULL,
  `img_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `img_image` longtext COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `image`
--

INSERT INTO `image` (`img_id`, `img_name`, `img_image`, `created_at`, `updated_at`) VALUES
(16, 'ảnh nề sp', '/uploads/image/20190702085145.jpg', '2019-07-02 01:51:45', '2019-07-02 01:51:45');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `news`
--

CREATE TABLE `news` (
  `news_id` int(11) NOT NULL,
  `news_sort_content` longtext COLLATE utf8_unicode_ci NOT NULL,
  `news_content` longtext COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `news_type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `new_hot` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `news_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `news_img` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `news`
--

INSERT INTO `news` (`news_id`, `news_sort_content`, `news_content`, `created_at`, `updated_at`, `news_type`, `new_hot`, `news_name`, `news_img`) VALUES
(1, 'This article is about large collections of data. For the band, see Big Data (band). For buying and selling of personal and consumer data, see Surveillance capitalism', '\"Big data\" is a field that treats ways to analyze, systematically extract information from, or otherwise deal with data sets that are too large or complex to be dealt with by traditional data-processing application software. Data with many cases (rows) offer greater statistical power, while data with higher complexity (more attributes or columns) may lead to a higher false discovery rate.[2] Big data challenges include capturing data, data storage, data analysis, search, sharing, transfer, visualization, querying, updating, information privacy and data source. Big data was originally associated with three key concepts: volume, variety, and velocity.[3] Other concepts later attributed with big data are veracity (i.e., how much noise is in the data) [4] and value.[5]', '2019-06-21 10:06:45', '2019-06-21 10:06:45', 'Công nghệ', '1', 'Big data', '/uploads/news/20190504185803.png'),
(3, 'Cơn mưa ngang qua', 'Trong tháng 5/2019 có khả năng xuất hiện khoảng 2-3 đợt không khí lạnh (KKL), tuy nhiên cường độ các đợt KKL sẽ không mạnh và chủ yếu nén dải áp thấp ở phía Bắc gây ra các đợt mưa rào và dông ở Bắc Bộ và Bắc Trung Bộ, tập trung vào những ngày đầu tháng và nửa cuối tháng. Nhiệt độ trung bình trên phạm vi toàn quốc phổ biến cao hơn giá trị trung bình nhiều năm (TBNN). Lượng mưa trên khu vực phía Đông Bắc Bộ phổ biến xấp xỉ trên so với TBNN; các nơi khác vẫn ở mức thiếu hụt so với TBNN cùng thời kỳ. Cần tiếp tục đề phòng tố, lốc, mưa đá và gió giật mạnh trong cơn mưa dông trên cả nước, đặc biệt ở các tỉnh vùng núi Bắc Bộ, Bắc Trung Bộ và khu vực Tây Nguyên.  Trong tháng, khu vực Bắc Bộ, Trung Bộ và Nam Bộ có khả năng xuất hiện nắng nóng diện rộng, tập trung vào giữa và cuối tháng; trong đó khu Tây Bắc Bắc Bộ và vùng núi các tỉnh Trung Bộ có nắng nóng gay gắt. Khu vực Nam Trung Bộ phổ biến vẫn ít mưa và còn duy trì tình trạng khô hạn.', '2019-06-21 10:07:39', '2019-06-21 10:07:39', 'Khác', '0', 'Lượng mưa trung bình năm 2018', '/uploads/news/20190504161719.PNG'),
(4, 'Thị trường chứng khoán Qúy I - 2019', '(Ngày 03/04/2019) Bảng xếp hạng Top 10 thị phần môi giới cổ phiếu và chứng chỉ quỹ quý đầu tiên của năm 2019 vừa được Sở giao dịch Chứng khoán Thành phố Hồ Chí Minh (HoSE) công bố. Dẫn đầu bảng xếp hạng là Công ty Cổ phần Chứng khoán SSI (HoSE: SSI).', '2019-06-21 10:09:31', '2019-06-21 10:09:31', 'Liên quan', '1', 'Thị trường chứng khoán Qúy I - 2019', '/uploads/news/20190504161859.png'),
(5, 'Chuyển giao công nghệ phần mềm.', 'Chuyển giao công nghệ phần mềm.', '2019-06-21 10:09:31', '2019-06-21 10:09:31', 'Nội bộ', '0', 'Chuyển giao công nghệ phần mềm.', '/uploads/news/20190504181402.PNG');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `password_resets`
--

CREATE TABLE `password_resets` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `user_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_avartar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `user_type`, `user_avartar`) VALUES
(1, 'Đặng Văn Tú', 'vantund2017@gmail.com', NULL, '$2y$10$fVcH9OKyix4rBytqWv2rHOeq2WRrJVEdJ8EYjmCYETpGYe8R2i3AG', 'FSZ5Ld4JbAnSl6jYLi88BnPBo8FkoWwrVLS1CZpWvzhqFPiWsFS71LmUxxmc', '2019-06-20 20:43:49', '2019-07-03 21:46:02', '1', '/uploads/Users/20190621110730.png'),
(2, 'Dang Van Tu', 'vantund2019@gmail.com', NULL, '$2y$10$ST7ChBXo1jDtpx9QWOk4vObrI4DADzpoVeqAPQNL5uU8SXF73AY7W', NULL, '2019-06-27 00:59:48', '2019-06-27 00:59:48', '0', '/uploads/Users/20190627075948.png'),
(3, 'Dang Van Tu', 'a@gmail.com', NULL, '$2y$10$13/ybQMso0cEbns21WH4iOaubvFkrKCGCS1E1meMPK/YcjB6ZM6wS', NULL, '2019-06-27 02:02:12', '2019-06-27 02:02:12', '0', '/uploads/customers/20190627085743.png'),
(4, 'Minh Hanh', 'life@gmail.com', NULL, '$2y$10$5EgyVb6KPd/cyCnBiISYo.nMCpIsD8oCSt4geyVB2ngZcCSgaJ.tm', NULL, '2019-07-02 19:16:30', '2019-07-02 19:16:30', '0', '/uploads/customers/20190627085743.png');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `image`
--
ALTER TABLE `image`
  ADD PRIMARY KEY (`img_id`);

--
-- Chỉ mục cho bảng `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`news_id`);

--
-- Chỉ mục cho bảng `password_resets`
--
ALTER TABLE `password_resets`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `image`
--
ALTER TABLE `image`
  MODIFY `img_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT cho bảng `news`
--
ALTER TABLE `news`
  MODIFY `news_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `password_resets`
--
ALTER TABLE `password_resets`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
