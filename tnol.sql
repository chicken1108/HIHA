-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 23, 2020 at 03:14 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tnol`
--

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(3, '2014_10_12_000000_create_users_table', 1),
(4, '2014_10_12_100000_create_password_resets_table', 1),
(5, '2019_08_19_000000_create_failed_jobs_table', 1),
(6, '2020_01_09_140115_create_table_category', 1),
(7, '2020_01_09_141226_create_table_news', 2),
(8, '2020_01_09_142015_add_news_image_column_to_tbl_news', 3),
(10, '2020_01_10_092713_create_table_banner', 4),
(11, '2020_01_11_143826_create_table_document_category', 5),
(12, '2020_01_11_143939_create_table_document', 6),
(13, '2020_02_12_143752_create_table_tests', 7),
(14, '2020_02_12_144436_create_table_questions', 8),
(16, '2020_02_23_104941_create_table_test_result', 9);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_banner`
--

CREATE TABLE `tbl_banner` (
  `ban_id` bigint(20) UNSIGNED NOT NULL,
  `ban_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ban_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ban_active` bigint(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_banner`
--

INSERT INTO `tbl_banner` (`ban_id`, `ban_title`, `ban_image`, `ban_active`, `created_at`, `updated_at`) VALUES
(1, 'banner 1', 'slide1.png', 0, '2020-01-10 02:52:13', '2020-01-10 07:07:00'),
(2, 'banner 2', 'slide2.png', 0, '2020-01-10 02:53:45', '2020-01-10 02:53:45'),
(3, 'banner 3', 'slide3.png', 0, '2020-01-10 02:54:19', '2020-01-10 02:54:19'),
(5, 'banner 4', 'slide4.png', 1, '2020-01-10 02:58:41', '2020-01-10 07:04:48');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_category`
--

CREATE TABLE `tbl_category` (
  `cate_id` bigint(20) UNSIGNED NOT NULL,
  `cate_slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cate_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_category`
--

INSERT INTO `tbl_category` (`cate_id`, `cate_slug`, `cate_title`, `created_at`, `updated_at`) VALUES
(1, 'tin-tuc-hoat-dong', 'Tin tức hoạt động', '2020-01-09 08:13:37', '2020-01-09 08:37:02'),
(2, 'kien-thuc-tin-hoc', 'Kiến thức tin học', '2020-01-09 08:16:24', '2020-01-09 08:16:24');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_document`
--

CREATE TABLE `tbl_document` (
  `doc_id` bigint(20) UNSIGNED NOT NULL,
  `doc_slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `doc_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `doc_desc` text COLLATE utf8mb4_unicode_ci,
  `doc_content` text COLLATE utf8mb4_unicode_ci,
  `doc_file` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `doc_docateid` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_document`
--

INSERT INTO `tbl_document` (`doc_id`, `doc_slug`, `doc_title`, `doc_desc`, `doc_content`, `doc_file`, `doc_docateid`, `created_at`, `updated_at`) VALUES
(1, 'tai-lieu-co-ban-1', 'Tài liệu cơ bản 1', NULL, NULL, '07TanCongMang.pdf', 1, '2020-01-11 08:44:49', '2020-01-11 08:59:30'),
(2, 'tai-lieu-co-ban-2', 'tài liệu cơ bản 2', NULL, NULL, '7a014-GD4_ca3_13h00.pdf', 1, '2020-01-11 08:47:02', '2020-01-11 08:47:02'),
(3, 'tai-lieu-co-ban-3', 'Tài liệu cơ bản 3', NULL, NULL, '07-Scheduler.pdf', 1, '2020-01-11 08:47:36', '2020-01-11 08:47:36'),
(4, 'tai-lieu-nang-cao-1', 'Tài liệu nâng cao 1', NULL, NULL, '23166-77432-1-PB.pdf', 2, '2020-01-11 08:48:13', '2020-01-11 08:48:13'),
(5, 'tai-lieu-nang-cao-2', 'Tài liệu nâng cao 2', NULL, NULL, '23811-79672-1-PB.pdf', 2, '2020-01-11 08:48:44', '2020-01-11 08:48:44'),
(6, 'tai-lieu-nang-cao-3', 'Tài liệu nâng cao 3', NULL, NULL, '23811-79672-1-PB_3.pdf', 2, '2020-01-11 08:49:05', '2020-01-11 08:49:05');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_document_category`
--

CREATE TABLE `tbl_document_category` (
  `docate_id` bigint(20) UNSIGNED NOT NULL,
  `docate_slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `docate_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_document_category`
--

INSERT INTO `tbl_document_category` (`docate_id`, `docate_slug`, `docate_title`, `created_at`, `updated_at`) VALUES
(1, 'tin-hoc-co-ban', 'Tin học cơ bản', '2020-01-11 08:03:47', '2020-01-11 08:03:47'),
(2, 'tin-hoc-nang-cao', 'Tin học nâng cao', '2020-01-11 08:04:01', '2020-01-11 08:04:01');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_news`
--

CREATE TABLE `tbl_news` (
  `news_id` bigint(20) UNSIGNED NOT NULL,
  `news_slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `news_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `news_desc` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `news_detail` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `news_cateid` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `news_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_news`
--

INSERT INTO `tbl_news` (`news_id`, `news_slug`, `news_title`, `news_desc`, `news_detail`, `news_cateid`, `created_at`, `updated_at`, `news_image`) VALUES
(1, 'bien-hoa-da-phong-cach-cung-ao-len', 'BIẾN HÓA ĐA PHONG CÁCH CÙNG ÁO LEN', 'sadad', 'sadas', 2, '2020-01-09 20:48:12', '2020-01-10 02:17:49', 'qltv.png'),
(2, 'ke-hoach-thi-lai-khoa-250', 'Kế hoạch thi lại khóa 250', 'Trung Tâm Tin Học ĐH Khoa Học Tự Nhiên sẽ tổ chức đợt thi lại dành cho học viên các lớp Ứng Dụng CNTT Cơ bản - Nâng cao Khóa 250. Những bạn K250 chưa thi hoặc thi không đạt đều có thể đăng ký trong đợt này. Thông tin chi tiết, các bạn xem kỹ nội dung bên dưới nhé', '<pre>\r\n&lt;h1 class=&#39;tieu-de-bai-viet-chi-tiet&#39;&gt;Kế hoạch thi lại kh&oacute;a 250&lt;/h1&gt;&lt;div class=&#39;noi-dung-bai-viet-chi-tiet&#39;&gt;&lt;div style=&#39;margin: 10px 0&#39;&gt;&lt;p class=&#39;tieu-de-nho&#39;&gt;&lt;span class=&#39;glyphicon glyphicon-time&#39;&gt;&lt;/span&gt; ng&agrave;y 06-09-2019&lt;/p&gt;&lt;div class=&#39;fb-like&#39; data-href=&#39;https://csc.edu.vn/tin-hoc-van-phong/tin-tuc/tin-tuc-hoat-dong-thvp/Ke-hoach-thi-lai-khoa-250-6194&#39; data-layout=&#39;button_count&#39; data-action=&#39;like&#39; data-size=&#39;small&#39; data-show-faces=&#39;false&#39; data-share=&#39;true&#39;&gt;&lt;/div&gt;&lt;/div&gt;&lt;div&gt;\r\n	Ch&amp;agrave;o c&amp;aacute;c bạn!&lt;/div&gt;\r\n&lt;div&gt;\r\n	&lt;a href=&quot;<a class=\"attribute-value\" href=\"view-source:https://csc.edu.vn/lich-khai-giang/tin-hoc-van-phong\">https://csc.edu.vn/lich-khai-giang/tin-hoc-van-phong</a>&quot;&gt;Trung T&amp;acirc;m Tin Học ĐH Khoa Học Tự Nhi&amp;ecirc;n&lt;/a&gt;&amp;nbsp;sẽ tổ chức đợt thi lại d&amp;agrave;nh cho học vi&amp;ecirc;n c&amp;aacute;c lớp Ứng Dụng CNTT Cơ bản - N&amp;acirc;ng cao Kh&amp;oacute;a 250. Những bạn K250 chưa thi hoặc thi kh&amp;ocirc;ng đạt đều c&amp;oacute; thể đăng k&amp;yacute; trong đợt n&amp;agrave;y. Th&amp;ocirc;ng tin chi tiết, c&amp;aacute;c bạn xem kỹ nội dung b&amp;ecirc;n dưới nh&amp;eacute;&lt;/div&gt;\r\n&lt;div&gt;\r\n	&amp;nbsp;&lt;/div&gt;\r\n&lt;h3 style=&quot;margin-left: 40px;&quot;&gt;\r\n	&lt;strong&gt;1) &amp;nbsp;Th&amp;ocirc;ng b&amp;aacute;o thi&lt;/strong&gt;&lt;/h3&gt;\r\n&lt;ul&gt;\r\n	&lt;li style=&quot;margin-left: 40px;&quot;&gt;\r\n		Ng&amp;agrave;y thi:&lt;strong&gt;&amp;nbsp;&lt;/strong&gt;&lt;strong&gt;11/05/2019&lt;/strong&gt;&lt;/li&gt;\r\n	&lt;li style=&quot;margin-left: 40px;&quot;&gt;\r\n		Địa điểm thi: 227 Nguyễn Văn Cừ, Q.5 &amp;ndash; Ph&amp;ograve;ng m&amp;aacute;y 2C (lầu 2)&lt;/li&gt;\r\n	&lt;li style=&quot;margin-left: 40px;&quot;&gt;\r\n		Thời gian thi: 13g00 - 15g30&lt;/li&gt;\r\n&lt;/ul&gt;\r\n&lt;div style=&quot;margin-left: 40px;&quot;&gt;\r\n	&lt;em&gt;&lt;strong&gt;***Lưu &amp;yacute;:&lt;/strong&gt;&lt;/em&gt;&lt;/div&gt;\r\n&lt;div style=&quot;margin-left: 80px;&quot;&gt;\r\n	- &amp;nbsp;Khi đi thi, c&amp;aacute;c bạn phải mang theo giấy tờ t&amp;ugrave;y th&amp;acirc;n c&amp;oacute; d&amp;aacute;n ảnh (CMND, Bằng l&amp;aacute;i xe&amp;hellip;)&lt;/div&gt;\r\n&lt;div style=&quot;margin-left: 80px;&quot;&gt;\r\n	- &amp;nbsp;HV kh&amp;ocirc;ng thi lần 1, khi dự thi lần 2 phải nộp Đơn đăng k&amp;yacute; dự thi (theo mẫu quy định). Đ&amp;iacute;nh k&amp;egrave;m theo đơn n&amp;agrave;y: 02 tấm ảnh 4x6 (mặt sau ghi r&amp;otilde; Họ t&amp;ecirc;n, ng&amp;agrave;y sinh, nơi sinh) v&amp;agrave; bản photo CMND/Hộ chiếu... (thẻ c&amp;oacute; h&amp;igrave;nh)&lt;/div&gt;\r\n&lt;div style=&quot;margin-left: 80px;&quot;&gt;\r\n	&amp;nbsp;&lt;/div&gt;\r\n&lt;h3 style=&quot;margin-left: 40px;&quot;&gt;\r\n	&lt;strong&gt;2) &amp;nbsp;Th&amp;ocirc;ng b&amp;aacute;o kết quả&lt;/strong&gt;&lt;/h3&gt;\r\n&lt;ul style=&quot;margin-left: 40px;&quot;&gt;\r\n	&lt;li&gt;\r\n		Thời hạn đăng k&amp;yacute; thi lại :&lt;strong&gt;&amp;nbsp;Từ 02/08/2019 đến 07/08/2019&lt;/strong&gt;&lt;/li&gt;\r\n	&lt;li&gt;\r\n		Ng&amp;agrave;y c&amp;ocirc;ng bố kết quả:&lt;strong&gt;&amp;nbsp;Thứ 6, 16/08/2019&lt;/strong&gt;&lt;/li&gt;\r\n	&lt;li&gt;\r\n		Thời hạn nhận đơn ph&amp;uacute;c khảo:&amp;nbsp;&lt;strong&gt;Từ 16/08/2019 đến 18/08/2019&lt;/strong&gt;&lt;/li&gt;\r\n	&lt;li&gt;\r\n		Ng&amp;agrave;y c&amp;ocirc;ng bố điểm ph&amp;uacute;c khảo:&amp;nbsp;&lt;strong&gt;Thứ 4, 20/08/2019&lt;/strong&gt;&lt;/li&gt;\r\n	&lt;li&gt;\r\n		C&amp;aacute;c bạn xem điểm thi tại:&amp;nbsp;&lt;a href=&quot;<a class=\"attribute-value\" href=\"view-source:http://csc.edu.vn/tra-cuu-diem-thi\">http://csc.edu.vn/tra-cuu-diem-thi</a>&quot;&gt;http://csc.edu.vn/tra-cuu-diem-thi&lt;/a&gt;&lt;/li&gt;\r\n&lt;/ul&gt;\r\n&lt;p&gt;\r\n	Ch&amp;uacute;c c&amp;aacute;c bạn thi tốt!&lt;/p&gt;\r\n</pre>\r\n\r\n<p>&nbsp;</p>', 1, '2020-01-10 07:48:04', '2020-01-10 07:48:04', 'thi-lai-k250.png'),
(3, 'ke-hoach-thi-khoa-246', 'Kế hoạch thi Khóa 246', 'Thông báo Thi cuối khóa dành cho các bạn đang theo học lớp Ứng dụng CNTT Cơ bản, Ứng dụng CNTT Nâng cao Khóa 246', '<pre>\r\n &lt;h1 class=&#39;tieu-de-bai-viet-chi-tiet&#39;&gt;Kế hoạch thi Kh&oacute;a 246&lt;/h1&gt;&lt;div class=&#39;noi-dung-bai-viet-chi-tiet&#39;&gt;&lt;div style=&#39;margin: 10px 0&#39;&gt;&lt;p class=&#39;tieu-de-nho&#39;&gt;&lt;span class=&#39;glyphicon glyphicon-time&#39;&gt;&lt;/span&gt; ng&agrave;y 06-09-2019&lt;/p&gt;&lt;div class=&#39;fb-like&#39; data-href=&#39;https://csc.edu.vn/tin-hoc-van-phong/tin-tuc/tin-tuc-hoat-dong-thvp/Ke-hoach-thi-Khoa-246-6148&#39; data-layout=&#39;button_count&#39; data-action=&#39;like&#39; data-size=&#39;small&#39; data-show-faces=&#39;false&#39; data-share=&#39;true&#39;&gt;&lt;/div&gt;&lt;/div&gt;&lt;p&gt;\r\n	Trung T&amp;acirc;m Tin Học ĐH Khoa Học Tự Nhi&amp;ecirc;n cảm ơn c&amp;aacute;c bạn học vi&amp;ecirc;n đ&amp;atilde; gắn b&amp;oacute; với Trung t&amp;acirc;m trong suốt qu&amp;aacute; tr&amp;igrave;nh học tập. Kỳ thi cuối kh&amp;oacute;a được xem l&amp;agrave; một sự tổng kết cho những kiến thức qu&amp;yacute; gi&amp;aacute; được t&amp;iacute;ch lũy trong to&amp;agrave;n kh&amp;oacute;a học. Đ&amp;acirc;y c&amp;ograve;n l&amp;agrave; điều kiện để x&amp;eacute;t cấp Chứng chỉ Ứng dụng CNTT &amp;ndash; Chuẩn kỹ năng CNTT mới theo chuẩn của Bộ Gi&amp;aacute;o Dục, cho c&amp;aacute;c bạn c&amp;oacute; kết quả thi đạt.&amp;nbsp;&lt;/p&gt;\r\n&lt;div&gt;\r\n	Trung T&amp;acirc;m xin gửi th&amp;ocirc;ng b&amp;aacute;o Thi cuối kh&amp;oacute;a d&amp;agrave;nh cho c&amp;aacute;c bạn đang theo học lớp Ứng dụng CNTT Cơ bản, Ứng dụng CNTT N&amp;acirc;ng cao&amp;nbsp;(Kh&amp;oacute;a 246)&lt;/div&gt;\r\n&lt;div style=&quot;margin-left: 40px;&quot;&gt;\r\n	&lt;p&gt;\r\n		&lt;strong&gt;- &amp;nbsp;Kế hoạch thi lần 1&lt;/strong&gt;&lt;/p&gt;\r\n&lt;/div&gt;\r\n&lt;ul style=&quot;margin-left: 80px;&quot;&gt;\r\n	&lt;li&gt;\r\n		Ng&amp;agrave;y c&amp;ocirc;ng bố kết quả thi: &lt;span style=&quot;color:#0000ff;&quot;&gt;Thứ S&amp;aacute;u, ng&amp;agrave;y 15/02/2019&lt;/span&gt;&lt;/li&gt;\r\n	&lt;li&gt;\r\n		Ng&amp;agrave;y nhận đơn ph&amp;uacute;c khảo:&amp;nbsp;&lt;span style=&quot;color:#0000ff;&quot;&gt;Từ 15/02/2019&amp;nbsp;đến 17/02/2019&lt;/span&gt;&lt;/li&gt;\r\n	&lt;li&gt;\r\n		Ng&amp;agrave;y c&amp;ocirc;ng bố kết quả ph&amp;uacute;c khảo: &lt;span style=&quot;color:#0000ff;&quot;&gt;14:00 Thứ Ba, ng&amp;agrave;y 19/02/2019&lt;/span&gt;&lt;/li&gt;\r\n	&lt;li&gt;\r\n		Thời hạn đăng k&amp;yacute; thi lần 2 tại Văn ph&amp;ograve;ng ghi danh TTTH_ĐH.KHTN (227 NVC, Q.5): &lt;span style=&quot;color:#0000ff;&quot;&gt;Từ ng&amp;agrave;y 15/02/2019&amp;nbsp;đến 20/02/2019&lt;/span&gt;&lt;/li&gt;\r\n&lt;/ul&gt;\r\n&lt;p&gt;\r\n	&amp;nbsp;&lt;/p&gt;\r\n&lt;div style=&quot;margin-left: 40px;&quot;&gt;\r\n	&lt;strong&gt;- Kế hoạch thi lần 2:&lt;/strong&gt;&amp;nbsp; D&amp;agrave;nh cho học vi&amp;ecirc;n c&amp;aacute;c lớp Ứng dụng CNTT cơ bản, Ứng dụng CNTT n&amp;acirc;ng cao kh&amp;oacute;a 246 thi lần 1 kh&amp;ocirc;ng đạt hoặc bỏ thi (HV c&amp;aacute;c lớp chuy&amp;ecirc;n đề kh&amp;ocirc;ng tổ chức thi lần 2)&lt;/div&gt;\r\n&lt;ul style=&quot;margin-left: 80px;&quot;&gt;\r\n	&lt;li&gt;\r\n		Ng&amp;agrave;y thi lần 2: &lt;span style=&quot;color:#0000ff;&quot;&gt;Chủ nhật, ng&amp;agrave;y 24/02/2019&lt;/span&gt;&lt;/li&gt;\r\n	&lt;li&gt;\r\n		Ng&amp;agrave;y c&amp;ocirc;ng bố kết quả thi lần 2: &lt;span style=&quot;color:#0000ff;&quot;&gt;Thứ S&amp;aacute;u, ng&amp;agrave;y 01/03/2019&lt;/span&gt;&lt;/li&gt;\r\n	&lt;li&gt;\r\n		Ng&amp;agrave;y nhận đơn ph&amp;uacute;c khảo thi lần 2:&lt;span style=&quot;color:#0000ff;&quot;&gt; Từ 01/03/2018&amp;nbsp;đến 03/03/2019&lt;/span&gt;&lt;/li&gt;\r\n	&lt;li&gt;\r\n		Ng&amp;agrave;y c&amp;ocirc;ng bố kết quả ph&amp;uacute;c khảo thi lần 2: &lt;span style=&quot;color:#0000ff;&quot;&gt;Thứ Tư, ng&amp;agrave;y 06/03/2019&lt;/span&gt;&lt;/li&gt;\r\n&lt;/ul&gt;\r\n&lt;p&gt;\r\n	&amp;nbsp;&lt;/p&gt;\r\n&lt;div style=&quot;margin-left: 40px;&quot;&gt;\r\n	&lt;strong&gt;- &amp;nbsp;Lưu &amp;yacute;:&lt;/strong&gt;&lt;/div&gt;\r\n&lt;ul style=&quot;margin-left: 80px;&quot;&gt;\r\n	&lt;li&gt;\r\n		&lt;div&gt;\r\n			HV lớp Ứng dụng CNTT cơ bản, Ứng dụng CNTT n&amp;acirc;ng cao phải nộp Đơn đăng k&amp;yacute; dự thi (theo mẫu qui định). Đ&amp;iacute;nh k&amp;egrave;m theo đơn n&amp;agrave;y: 02 tấm ảnh 4x6 (mặt sau ghi r&amp;otilde; Họ t&amp;ecirc;n, ng&amp;agrave;y sinh, nơi sinh) v&amp;agrave; bản photo CMND/Hộ chiếu ... (thẻ c&amp;oacute; h&amp;igrave;nh).&lt;/div&gt;\r\n	&lt;/li&gt;\r\n	&lt;li&gt;\r\n		&lt;div&gt;\r\n			&lt;strong&gt;KHI ĐI THI MANG THEO GIẤY TỜ T&amp;Ugrave;Y TH&amp;Acirc;N C&amp;Oacute; D&amp;Aacute;N ẢNH.&lt;/strong&gt;&lt;/div&gt;\r\n	&lt;/li&gt;\r\n&lt;/ul&gt;\r\n&lt;p&gt;\r\n	&amp;nbsp;&lt;/p&gt;\r\n&lt;div&gt;\r\n	Ch&amp;uacute;c c&amp;aacute;c bạn thi đạt kết quả tốt.&lt;/div&gt;</pre>', 1, '2020-01-10 07:50:48', '2020-01-10 07:50:48', 'ke-hoach-thi-k246.png'),
(4, 'ke-hoach-khai-giang-nam-2019', 'Kế hoạch khai giảng năm 2019', 'Trong suốt 30 năm hoạt động, Trung Tâm Tin Học Trường  Đại học Khoa học Tự Nhiên Tp.HCM tự hào và vinh dự là địa điểm đào tạo Tin học Uy tín và chất lượng được đông đảo các bạn học viên quan tâm và yêu mến.', '<pre>\r\n          &lt;h1 class=&#39;tieu-de-bai-viet-chi-tiet&#39;&gt;Kế hoạch khai giảng năm 2019&lt;/h1&gt;&lt;div class=&#39;noi-dung-bai-viet-chi-tiet&#39;&gt;&lt;div style=&#39;margin: 10px 0&#39;&gt;&lt;p class=&#39;tieu-de-nho&#39;&gt;&lt;span class=&#39;glyphicon glyphicon-time&#39;&gt;&lt;/span&gt; ng&agrave;y 06-09-2019&lt;/p&gt;&lt;div class=&#39;fb-like&#39; data-href=&#39;https://csc.edu.vn/tin-hoc-van-phong/tin-tuc/tin-tuc-hoat-dong-thvp/Ke-hoach-khai-giang-nam-2019-6135&#39; data-layout=&#39;button_count&#39; data-action=&#39;like&#39; data-size=&#39;small&#39; data-show-faces=&#39;false&#39; data-share=&#39;true&#39;&gt;&lt;/div&gt;&lt;/div&gt;&lt;p&gt;\r\n	Trong suốt 30 năm hoạt động, &lt;strong&gt;Trung T&amp;acirc;m Tin Học Trường&amp;nbsp; Đại học Khoa học Tự Nhi&amp;ecirc;n Tp.HCM&lt;/strong&gt; tự h&amp;agrave;o v&amp;agrave; vinh dự l&amp;agrave; địa điểm đ&amp;agrave;o tạo Tin học Uy t&amp;iacute;n v&amp;agrave; chất lượng được đ&amp;ocirc;ng đảo c&amp;aacute;c bạn học vi&amp;ecirc;n quan t&amp;acirc;m v&amp;agrave; y&amp;ecirc;u mến.&lt;/p&gt;\r\n&lt;p&gt;\r\n	Nằm&amp;nbsp; trong hệ thống đ&amp;agrave;o tạo chung của to&amp;agrave;n Trung T&amp;acirc;m, ng&amp;agrave;nh Tin học Ứng dụng gửi đến to&amp;agrave;n thể c&amp;aacute;c bạn học vi&amp;ecirc;n kế hoạch khai giảng c&amp;aacute;c lớp &lt;strong&gt;Tin học Cơ bản - N&amp;acirc;ng cao, Tin học Văn ph&amp;ograve;ng chuẩn Quốc tế MOS, C&amp;aacute;c lớp chuy&amp;ecirc;n đề Excel &lt;/strong&gt;trong&amp;nbsp;&lt;strong&gt; &lt;/strong&gt;năm 2019 tại Trung T&amp;acirc;m, qua đ&amp;oacute; c&amp;aacute;c bạn c&amp;oacute; thể chủ động sắp xếp thời gian tham gia c&amp;aacute;c kh&amp;oacute;a học c&amp;aacute;ch tốt nhất.&lt;/p&gt;\r\n&lt;table align=&quot;center&quot; border=&quot;1&quot; cellpadding=&quot;0&quot; cellspacing=&quot;0&quot; height=&quot;417&quot; width=&quot;366&quot;&gt;\r\n	&lt;tbody&gt;\r\n		&lt;tr&gt;\r\n			&lt;td style=&quot;width:180px;&quot;&gt;\r\n				&lt;p style=&quot;text-align: center;&quot;&gt;\r\n					&lt;strong&gt;&lt;span style=&quot;background-color:#ffffff;&quot;&gt;Đợt khai giảng&lt;/span&gt;&lt;/strong&gt;&lt;/p&gt;\r\n			&lt;/td&gt;\r\n			&lt;td style=&quot;width:180px;&quot;&gt;\r\n				&lt;p style=&quot;text-align: center;&quot;&gt;\r\n					&lt;strong&gt;&lt;span style=&quot;background-color:#ffffff;&quot;&gt;Thời gian dự kiến&lt;/span&gt;&lt;/strong&gt;&lt;/p&gt;\r\n			&lt;/td&gt;\r\n		&lt;/tr&gt;\r\n		&lt;tr&gt;\r\n			&lt;td style=&quot;width:180px;&quot;&gt;\r\n				&lt;p style=&quot;text-align: center;&quot;&gt;\r\n					Đợt 1&lt;/p&gt;\r\n			&lt;/td&gt;\r\n			&lt;td style=&quot;width:180px;&quot;&gt;\r\n				&lt;p style=&quot;text-align: center;&quot;&gt;\r\n					26/12/2018&lt;/p&gt;\r\n			&lt;/td&gt;\r\n		&lt;/tr&gt;\r\n		&lt;tr&gt;\r\n			&lt;td style=&quot;width:180px;&quot;&gt;\r\n				&lt;p style=&quot;text-align: center;&quot;&gt;\r\n					Đợt 2&lt;/p&gt;\r\n			&lt;/td&gt;\r\n			&lt;td style=&quot;width:180px;&quot;&gt;\r\n				&lt;p style=&quot;text-align: center;&quot;&gt;\r\n					25/02/2019&lt;/p&gt;\r\n			&lt;/td&gt;\r\n		&lt;/tr&gt;\r\n		&lt;tr&gt;\r\n			&lt;td style=&quot;width:180px;&quot;&gt;\r\n				&lt;p style=&quot;text-align: center;&quot;&gt;\r\n					Đợt 3&lt;/p&gt;\r\n			&lt;/td&gt;\r\n			&lt;td style=&quot;width:180px;&quot;&gt;\r\n				&lt;p style=&quot;text-align: center;&quot;&gt;\r\n					01/04/2019&lt;/p&gt;\r\n			&lt;/td&gt;\r\n		&lt;/tr&gt;\r\n		&lt;tr&gt;\r\n			&lt;td style=&quot;width:180px;&quot;&gt;\r\n				&lt;p style=&quot;text-align: center;&quot;&gt;\r\n					Đợt 4&lt;/p&gt;\r\n			&lt;/td&gt;\r\n			&lt;td style=&quot;width:180px;&quot;&gt;\r\n				&lt;p style=&quot;text-align: center;&quot;&gt;\r\n					13/05/2019&lt;/p&gt;\r\n			&lt;/td&gt;\r\n		&lt;/tr&gt;\r\n		&lt;tr&gt;\r\n			&lt;td style=&quot;width:180px;&quot;&gt;\r\n				&lt;p style=&quot;text-align: center;&quot;&gt;\r\n					Đợt 5&lt;/p&gt;\r\n			&lt;/td&gt;\r\n			&lt;td style=&quot;width:180px;&quot;&gt;\r\n				&lt;p style=&quot;text-align: center;&quot;&gt;\r\n					17/06/2019&lt;/p&gt;\r\n			&lt;/td&gt;\r\n		&lt;/tr&gt;\r\n		&lt;tr&gt;\r\n			&lt;td style=&quot;width:180px;&quot;&gt;\r\n				&lt;p style=&quot;text-align: center;&quot;&gt;\r\n					Đợt 6&lt;/p&gt;\r\n			&lt;/td&gt;\r\n			&lt;td style=&quot;width:180px;&quot;&gt;\r\n				&lt;p style=&quot;text-align: center;&quot;&gt;\r\n					22/07/2019&lt;/p&gt;\r\n			&lt;/td&gt;\r\n		&lt;/tr&gt;\r\n		&lt;tr&gt;\r\n			&lt;td style=&quot;width:180px;&quot;&gt;\r\n				&lt;p style=&quot;text-align: center;&quot;&gt;\r\n					Đợt 7&lt;/p&gt;\r\n			&lt;/td&gt;\r\n			&lt;td style=&quot;width:180px;&quot;&gt;\r\n				&lt;p style=&quot;text-align: center;&quot;&gt;\r\n					26/08/2019&lt;/p&gt;\r\n			&lt;/td&gt;\r\n		&lt;/tr&gt;\r\n		&lt;tr&gt;\r\n			&lt;td style=&quot;width:180px;&quot;&gt;\r\n				&lt;p style=&quot;text-align: center;&quot;&gt;\r\n					&amp;nbsp;Đợt 8&lt;/p&gt;\r\n			&lt;/td&gt;\r\n			&lt;td style=&quot;width: 180px; text-align: center;&quot;&gt;\r\n				02/10/2019&lt;/td&gt;\r\n		&lt;/tr&gt;\r\n		&lt;tr&gt;\r\n			&lt;td style=&quot;width:180px;&quot;&gt;\r\n				&lt;p style=&quot;text-align: center;&quot;&gt;\r\n					Đợt 9&lt;/p&gt;\r\n			&lt;/td&gt;\r\n			&lt;td style=&quot;width: 180px; text-align: center;&quot;&gt;\r\n				06/11/2019&lt;/td&gt;\r\n		&lt;/tr&gt;\r\n		&lt;tr&gt;\r\n			&lt;td style=&quot;width:180px;&quot;&gt;\r\n				&lt;p style=&quot;text-align: center;&quot;&gt;\r\n					Đợt 10&lt;/p&gt;\r\n			&lt;/td&gt;\r\n			&lt;td style=&quot;width:180px;&quot;&gt;\r\n				&lt;p style=&quot;text-align: center;&quot;&gt;\r\n					13/12/2019&lt;/p&gt;\r\n			&lt;/td&gt;\r\n		&lt;/tr&gt;\r\n	&lt;/tbody&gt;\r\n&lt;/table&gt;</pre>', 1, '2020-01-10 07:52:59', '2020-01-10 07:52:59', 'ke-hoach-khai-giang-2019.png'),
(5, 'khoa-hoc-tin-hoc-van-phong-cho-thieu-nhi-office-for-kids', 'Khóa học Tin học văn phòng cho Thiếu nhi (Office for Kids)', 'Office for Kids với chương trình học sinh động, giúp trẻ dễ dàng tiếp thu kiến thức mới và các hoạt động trong lớp sẽ giúp các em trở nên năng động hơn và đặc biệt là các em sẽ cảm thấy yêu thích môn Tin học hơn sau khóa học này', '<pre>\r\n&lt;h1 class=&#39;tieu-de-bai-viet-chi-tiet&#39;&gt;Kh&oacute;a học Tin học văn ph&ograve;ng cho Thiếu nhi (Office for Kids)&lt;/h1&gt;&lt;div class=&#39;noi-dung-bai-viet-chi-tiet&#39;&gt;&lt;div style=&#39;margin: 10px 0&#39;&gt;&lt;p class=&#39;tieu-de-nho&#39;&gt;&lt;span class=&#39;glyphicon glyphicon-time&#39;&gt;&lt;/span&gt; ng&agrave;y 27-02-2019&lt;/p&gt;&lt;div class=&#39;fb-like&#39; data-href=&#39;https://csc.edu.vn/tin-hoc-van-phong/tin-tuc/tin-tuc-hoat-dong-thvp/Khoa-hoc-Tin-hoc-van-phong-cho-Thieu-nhi-Office-for-Kids-4080&#39; data-layout=&#39;button_count&#39; data-action=&#39;like&#39; data-size=&#39;small&#39; data-show-faces=&#39;false&#39; data-share=&#39;true&#39;&gt;&lt;/div&gt;&lt;/div&gt;&lt;p style=&quot;text-align: center;&quot;&gt;\r\n	&lt;img alt=&quot;&quot; src=&quot;<a class=\"attribute-value\" href=\"view-source:https://csc.edu.vn/data/images/tin-tuc/tin-hoc-van-phong/tin%20tuc%20hoat%20dong/k241/web-02(1).png\">/data/images/tin-tuc/tin-hoc-van-phong/tin%20tuc%20hoat%20dong/k241/web-02(1).png</a>&quot; style=&quot;width: 800px; height: 600px;&quot; /&gt;&lt;/p&gt;\r\n&lt;p style=&quot;text-align: justify;&quot;&gt;\r\n	&lt;span style=&quot;font-size:14px;&quot;&gt;Trong thời đại C&amp;ocirc;ng nghệ th&amp;ocirc;ng tin ph&amp;aacute;t triển vượt bậc như hiện nay, ng&amp;agrave;nh c&amp;ocirc;ng nghệ đ&amp;atilde; mang đến cho con người rất nhiều lợi &amp;iacute;ch trong học tập cũng như c&amp;ocirc;ng việc. Cũng ch&amp;iacute;nh v&amp;igrave; vậy, hầu như c&amp;aacute;c bậc phụ huynh ng&amp;agrave;y nay đều hướng con em m&amp;igrave;nh tiếp x&amp;uacute;c với c&amp;aacute;c thiết bị c&amp;ocirc;ng nghệ ngay từ rất sớm.&lt;/span&gt;&lt;/p&gt;\r\n&lt;p style=&quot;text-align: justify;&quot;&gt;\r\n	&lt;span style=&quot;font-size:14px;&quot;&gt;Bởi lẽ, kiến thức Tin học đ&amp;oacute;ng vai tr&amp;ograve; quan trọng trong việc x&amp;acirc;y dựng nền Gi&amp;aacute;o dục to&amp;agrave;n diện cho trẻ. V&amp;agrave; việc trang bị kiến thức Tin học văn ph&amp;ograve;ng cho trẻ em đang l&amp;agrave; vấn đề được rất nhiều phụ huynh quan t&amp;acirc;m lựa chọn.&lt;/span&gt;&lt;/p&gt;\r\n&lt;p style=&quot;text-align: justify;&quot;&gt;\r\n	&lt;span style=&quot;font-size:14px;&quot;&gt;Với mong muốn x&amp;acirc;y dựng nền tảng kiến thức vững chắc v&amp;agrave; trở n&amp;ecirc;n chủ động hơn trong việc sử dụng m&amp;aacute;y t&amp;iacute;nh, Trung T&amp;acirc;m Tin Học ĐH KHTN mang đến cho c&amp;aacute;c em một chương tr&amp;igrave;nh học mới với t&amp;ecirc;n gọi Tin học văn ph&amp;ograve;ng cho thiếu nhi (Office for Kids).&lt;/span&gt;&lt;/p&gt;\r\n&lt;p style=&quot;text-align: justify;&quot;&gt;\r\n	&lt;span style=&quot;font-size:14px;&quot;&gt;Đến với kh&amp;oacute;a học, c&amp;aacute;c em sẽ được trang bị những kỹ năng cần thiết, gi&amp;uacute;p c&amp;aacute;c em nhanh ch&amp;oacute;ng tiếp cận với c&amp;ocirc;ng nghệ mới, học được c&amp;aacute;ch l&amp;agrave;m việc hiệu quả với m&amp;aacute;y t&amp;iacute;nh, ph&amp;aacute;t triển kỹ năng tư duy v&amp;agrave; c&amp;aacute;ch giải quyết vấn đề.&lt;/span&gt;&lt;/p&gt;\r\n&lt;p style=&quot;text-align: justify;&quot;&gt;\r\n	&lt;span style=&quot;font-size:14px;&quot;&gt;Trung T&amp;acirc;m Tin Học ĐH KHTN với chương tr&amp;igrave;nh học sinh động, gi&amp;uacute;p trẻ dễ d&amp;agrave;ng tiếp thu kiến thức mới v&amp;agrave; c&amp;aacute;c hoạt động trong lớp sẽ gi&amp;uacute;p c&amp;aacute;c em trở n&amp;ecirc;n năng động hơn v&amp;agrave; đặc biệt l&amp;agrave; c&amp;aacute;c em sẽ cảm thấy y&amp;ecirc;u th&amp;iacute;ch m&amp;ocirc;n Tin học hơn sau kh&amp;oacute;a học n&amp;agrave;y.&lt;/span&gt;&lt;/p&gt;\r\n&lt;p style=&quot;text-align: justify;&quot;&gt;\r\n	&lt;span style=&quot;font-size:16px;&quot;&gt;&lt;a href=&quot;<a class=\"attribute-value\" href=\"view-source:http://office4kid.csc.edu.vn/\">http://office4kid.csc.edu.vn/</a>&quot;&gt;&lt;strong&gt;Xem th&amp;ocirc;ng tin chi tiết Kh&amp;oacute;a học Tin học văn ph&amp;ograve;ng cho Thiếu nhi tại đ&amp;acirc;y&lt;/strong&gt;&lt;/a&gt;&lt;/span&gt;&lt;/p&gt;\r\n&lt;p style=&quot;text-align: right;&quot;&gt;\r\n	&lt;span style=&quot;font-size:14px;&quot;&gt;Ng&amp;agrave;nh Tin học ứng dụng&lt;/span&gt;&lt;/p&gt;\r\n&lt;p style=&quot;text-align: right;&quot;&gt;\r\n	&lt;span style=&quot;font-size:14px;&quot;&gt;Trung T&amp;acirc;m Tin Học ĐH KHTN&lt;/span&gt;&lt;/p&gt;\r\n&lt;p style=&quot;outline: none; box-sizing: border-box; margin: 0px 0px 1.5rem; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; font-size: 1.5rem; line-height: 2.1rem; font-family: Lato, sans-serif; color: rgb(86, 92, 100); text-align: justify; background-color: rgb(245, 245, 245);&quot;&gt;\r\n	&amp;nbsp;&lt;/p&gt;\r\n&lt;/div&gt;</pre>', 1, '2020-01-10 07:55:12', '2020-01-10 07:55:12', 'tin-hoc-thieu-nhi.png'),
(6, 'du-kien-dua-mon-tin-hoc-tro-thanh-mon-hoc-chinh-trong-he-giao-duc-pho-thong', 'Dự kiến đưa môn Tin học trở thành môn học chính trong hệ Giáo dục phổ thông', 'Dự thảo nhằm thu thập ý kiến khách quan về việc đưa Tin học vào thành môn học bắc buộc từ lớp 3 đến lớp 9 và là môn học được lựa chọn theo nguyện vọng và định hướng nghề nghiệp của học sinh ở cấp THPT.', '<pre>\r\n &lt;h1 class=&#39;tieu-de-bai-viet-chi-tiet&#39;&gt;Dự kiến đưa m&ocirc;n Tin học trở th&agrave;nh m&ocirc;n học ch&iacute;nh trong hệ Gi&aacute;o dục phổ th&ocirc;ng&lt;/h1&gt;&lt;div class=&#39;noi-dung-bai-viet-chi-tiet&#39;&gt;&lt;div style=&#39;margin: 10px 0&#39;&gt;&lt;p class=&#39;tieu-de-nho&#39;&gt;&lt;span class=&#39;glyphicon glyphicon-time&#39;&gt;&lt;/span&gt; ng&agrave;y 15-01-2019&lt;/p&gt;&lt;div class=&#39;fb-like&#39; data-href=&#39;https://csc.edu.vn/tin-hoc-van-phong/tin-tuc/tin-tuc-hoat-dong-thvp/Du-kien-dua-mon-Tin-hoc-tro-thanh-mon-hoc-chinh-trong-he-Giao-duc-pho-thong-2028&#39; data-layout=&#39;button_count&#39; data-action=&#39;like&#39; data-size=&#39;small&#39; data-show-faces=&#39;false&#39; data-share=&#39;true&#39;&gt;&lt;/div&gt;&lt;/div&gt;&lt;p style=&quot;text-align: justify;&quot;&gt;\r\n	&lt;strong&gt;Theo vnxpress (14/01/2018), hiện nay Tin học giữ vai tr&amp;ograve; quan trọng trong việc chuẩn bị cho học sinh khả năng tiếp nhận th&amp;ocirc;ng tin, mở rộng tri thức v&amp;agrave; tăng khả năng s&amp;aacute;ng tạo. C&amp;oacute; thể n&amp;oacute;i, m&amp;ocirc;n học n&amp;agrave;y ch&amp;iacute;nh l&amp;agrave; trợ thủ đắc lực cho thế hệ học sinh ng&amp;agrave;y nay trong việc học tập v&amp;agrave; ứng dụng nền c&amp;ocirc;ng nghệ hiện đại để phục vụ cho việc ph&amp;aacute;t triển nội dung kiến thức mới. Vai tr&amp;ograve; của m&amp;ocirc;n Tin học trong chương tr&amp;igrave;nh gi&amp;aacute;o dục hiện nay cũng từ đ&amp;oacute; m&amp;agrave; thay đổi.&lt;/strong&gt;&lt;/p&gt;\r\n&lt;p style=&quot;text-align: center;&quot;&gt;\r\n	&lt;img alt=&quot;&quot; src=&quot;<a class=\"attribute-value\" href=\"view-source:https://csc.edu.vn/data/images/tin-tuc/tin-hoc-van-phong/bai-viet/1_ORUF1.jpg\">/data/images/tin-tuc/tin-hoc-van-phong/bai-viet/1_ORUF1.jpg</a>&quot; style=&quot;width: 550px; height: 413px;&quot; /&gt;&lt;/p&gt;\r\n&lt;p style=&quot;text-align: center;&quot;&gt;\r\n	Nguồn h&amp;igrave;nh ảnh: giaoducthoidai.vn&lt;/p&gt;\r\n&lt;p style=&quot;text-align: justify;&quot;&gt;\r\n	Do vậy, thay v&amp;igrave; vẫn l&amp;agrave; m&amp;ocirc;n tự chọn th&amp;igrave; Tin học sẽ trở th&amp;agrave;nh m&amp;ocirc;n học bắc buộc từ lớp 3 đến lớp 9. L&amp;ecirc;n đến cấp THPT, Tin học sẽ l&amp;agrave; m&amp;ocirc;n học được lựa chọn theo nguyện vọng v&amp;agrave; định hướng nghề nghiệp của học sinh, ph&amp;acirc;n h&amp;oacute;a theo hai định hướng &amp;ldquo;Tin học ứng dụng&amp;rdquo; v&amp;agrave; &amp;ldquo;Khoa học m&amp;aacute;y t&amp;iacute;nh&amp;quot;.&lt;/p&gt;\r\n&lt;p style=&quot;text-align: justify;&quot;&gt;\r\n	Ban soạn thảo x&amp;aacute;c định,&amp;nbsp;m&amp;ocirc;n Tin học kh&amp;ocirc;ng chỉ&amp;nbsp; kế thừa chương tr&amp;igrave;nh hiện h&amp;agrave;nh. Song, c&amp;ograve;n được khai th&amp;aacute;c theo chương tr&amp;igrave;nh tin học phổ th&amp;ocirc;ng của c&amp;aacute;c nước ti&amp;ecirc;n tiến tr&amp;ecirc;n Thế giới; đảm bảo t&amp;iacute;nh cơ bản, khoa học v&amp;agrave; sư phạm. Chương tr&amp;igrave;nh chọn lọc nội dung cơ bản, kh&amp;aacute;i qu&amp;aacute;t h&amp;oacute;a từ ba mạch tri thức: Khoa học m&amp;aacute;y t&amp;iacute;nh (Computer Science), C&amp;ocirc;ng nghệ th&amp;ocirc;ng tin v&amp;agrave; truyền th&amp;ocirc;ng (Information and Communication Technology) v&amp;agrave; Học vấn số h&amp;oacute;a phổ dụng (Digital Literacy); quan t&amp;acirc;m đ&amp;uacute;ng mức đến nội dung về đạo đức, văn h&amp;oacute;a, ph&amp;aacute;p luật v&amp;agrave; ảnh hưởng của tin học l&amp;ecirc;n x&amp;atilde; hội.&lt;/p&gt;\r\n&lt;p style=&quot;text-align: justify;&quot;&gt;\r\n	Nhằm đạt được ba mạch tri thức tr&amp;ecirc;n, nội dung của chương tr&amp;igrave;nh được tổ chức th&amp;agrave;nh 7 chủ đề lớn xuy&amp;ecirc;n suốt trong cả ba cấp học l&amp;agrave;: M&amp;aacute;y t&amp;iacute;nh v&amp;agrave; x&amp;atilde; hội tri thức; Mạng m&amp;aacute;y t&amp;iacute;nh v&amp;agrave; Internet; Tổ chức lưu trữ, t&amp;igrave;m kiếm v&amp;agrave; trao đổi th&amp;ocirc;ng tin; Đạo đức, ph&amp;aacute;p luật v&amp;agrave; văn h&amp;oacute;a trong m&amp;ocirc;i trường số h&amp;oacute;a; Ứng dụng tin học; Giải quyết vấn đề với sự trợ gi&amp;uacute;p của m&amp;aacute;y t&amp;iacute;nh v&amp;agrave; Hướng nghiệp với tin học.&lt;/p&gt;\r\n&lt;p style=&quot;text-align: justify;&quot;&gt;\r\n	Tuy nhi&amp;ecirc;n, để thực hiện tốt kế hoạch đ&amp;atilde; đề ra, c&amp;aacute;c cơ sở gi&amp;aacute;o dục phải ch&amp;uacute; trọng đầu tư, x&amp;acirc;y dựng hệ thống Internet ở trường học, mỗi ph&amp;ograve;ng học Tin học (cả l&amp;yacute; thuyết v&amp;agrave; thực h&amp;agrave;nh) cần phải được trang bị m&amp;aacute;y chiếu, n&amp;acirc;ng cấp hệ điều h&amp;agrave;nh, bộ c&amp;ocirc;ng cụ văn ph&amp;ograve;ng v&amp;agrave; c&amp;aacute;c phần mềm th&amp;ocirc;ng dụng kh&amp;aacute;c.&amp;nbsp;Đối với c&amp;aacute;c trường học c&amp;oacute; ti&amp;ecirc;u chuẩn cao, n&amp;ecirc;n đẩy mạnh v&amp;agrave;o cơ sở vật chất, trang bị th&amp;ecirc;m m&amp;aacute;y ảnh số, m&amp;aacute;y t&amp;iacute;nh bảng v&amp;agrave; c&amp;aacute;c thiết bị th&amp;ocirc;ng minh nhằm phục vụ tốt nhất cho gi&amp;aacute;o dục.&lt;/p&gt;\r\n&lt;p style=&quot;text-align: justify;&quot;&gt;\r\n	Sắp tới, dự thảo chương tr&amp;igrave;nh Tin học sẽ được c&amp;ocirc;ng bố c&amp;ugrave;ng với c&amp;aacute;c m&amp;ocirc;n học kh&amp;aacute;c để lấy kiến kh&amp;aacute;ch quan trước khi ban h&amp;agrave;nh. Theo nghị quyết của Quốc hội, chậm nhất từ năm học 2020-2021 chương tr&amp;igrave;nh s&amp;aacute;ch gi&amp;aacute;o khoa mới được &amp;aacute;p dụng đối với cấp tiểu học, từ năm học 2021-2022 đối với cấp THCS v&amp;agrave; từ năm học 2022-2023 đối với cấp THPT.&lt;/p&gt;\r\n&lt;p style=&quot;text-align: right;&quot;&gt;\r\n	&lt;strong&gt;Tổng hợp th&amp;ocirc;ng tin từ vnexpress&lt;/strong&gt;&lt;/p&gt;\r\n&lt;p style=&quot;text-align: right;&quot;&gt;\r\n	Ng&amp;agrave;nh TIn Học Ứng Dụng&lt;/p&gt;\r\n&lt;p style=&quot;text-align: right;&quot;&gt;\r\n	Trung T&amp;acirc;m Tin Học - ĐH Khoa Học Tự Nhi&amp;ecirc;n&lt;/p&gt;\r\n&lt;/div&gt;</pre>', 1, '2020-01-10 07:57:36', '2020-01-10 07:57:36', 'giao-duc-tin-hoc.jpg'),
(7, 'thong-bao-ke-hoach-thi-chung-chi-ung-dung-cntt-co-ban-nang-cao-khoa-245', '[Thông báo] Kế hoạch thi Chứng chỉ Ứng dụng CNTT Cơ bản - Nâng cao (Khóa 245)', 'Thông báo Thi cuối khóa dành cho các bạn đang theo học lớp Ứng dụng CNTT Cơ bản, Ứng dụng CNTT Nâng cao Khóa 245', '<pre>\r\n&lt;h1 class=&#39;tieu-de-bai-viet-chi-tiet&#39;&gt;[Th&ocirc;ng b&aacute;o] Kế hoạch thi Chứng chỉ Ứng dụng CNTT Cơ bản - N&acirc;ng cao (Kh&oacute;a 245)&lt;/h1&gt;&lt;div class=&#39;noi-dung-bai-viet-chi-tiet&#39;&gt;&lt;div style=&#39;margin: 10px 0&#39;&gt;&lt;p class=&#39;tieu-de-nho&#39;&gt;&lt;span class=&#39;glyphicon glyphicon-time&#39;&gt;&lt;/span&gt; ng&agrave;y 15-01-2019&lt;/p&gt;&lt;div class=&#39;fb-like&#39; data-href=&#39;https://csc.edu.vn/tin-hoc-van-phong/tin-tuc/tin-tuc-hoat-dong-thvp/Thong-bao-Ke-hoach-thi-Chung-chi-Ung-dung-CNTT-Co-ban---Nang-cao-Khoa-245-982&#39; data-layout=&#39;button_count&#39; data-action=&#39;like&#39; data-size=&#39;small&#39; data-show-faces=&#39;false&#39; data-share=&#39;true&#39;&gt;&lt;/div&gt;&lt;/div&gt;&lt;p&gt;\r\n	Trung T&amp;acirc;m Tin Học ĐH Khoa Học Tự Nhi&amp;ecirc;n cảm ơn c&amp;aacute;c bạn học vi&amp;ecirc;n đ&amp;atilde; gắn b&amp;oacute; với Trung t&amp;acirc;m trong suốt qu&amp;aacute; tr&amp;igrave;nh học tập. Kỳ thi cuối kh&amp;oacute;a được xem l&amp;agrave; một sự tổng kết cho những kiến thức qu&amp;yacute; gi&amp;aacute; được t&amp;iacute;ch lũy trong to&amp;agrave;n kh&amp;oacute;a học. Đ&amp;acirc;y c&amp;ograve;n l&amp;agrave; điều kiện để x&amp;eacute;t cấp Chứng chỉ Ứng dụng CNTT &amp;ndash; Chuẩn kỹ năng CNTT mới theo chuẩn của Bộ Gi&amp;aacute;o Dục, cho c&amp;aacute;c bạn c&amp;oacute; kết quả thi đạt.&amp;nbsp;&lt;/p&gt;\r\n&lt;div&gt;\r\n	Trung T&amp;acirc;m xin gửi th&amp;ocirc;ng b&amp;aacute;o Thi cuối kh&amp;oacute;a d&amp;agrave;nh cho c&amp;aacute;c bạn đang theo học lớp Ứng dụng CNTT Cơ bản, Ứng dụng CNTT N&amp;acirc;ng cao&amp;nbsp;(Kh&amp;oacute;a 243)&lt;/div&gt;\r\n&lt;div style=&quot;margin-left: 40px;&quot;&gt;\r\n	- &amp;nbsp;C&amp;aacute;c lớp dự thi:&lt;strong&gt;&amp;nbsp;&lt;font color=&quot;#990000&quot; style=&quot;font-family: arial, sans-serif; font-size: 12.8px;&quot;&gt;&lt;u&gt;c&amp;aacute;c lớp UD CNTT cơ bản - n&amp;acirc;ng cao &amp;amp; chuy&amp;ecirc;n đề&lt;/u&gt;&lt;/font&gt;&lt;span style=&quot;font-family: arial, sans-serif; font-size: 12.8px;&quot;&gt;&amp;nbsp;&lt;/span&gt;&lt;i style=&quot;font-family: arial, sans-serif; font-size: 12.8px;&quot;&gt;(khai giảng 21/11/2018)&lt;/i&gt;&lt;span style=&quot;font-family: arial, sans-serif; font-size: 12.8px;&quot;&gt;,&amp;nbsp;&lt;/span&gt;&lt;b style=&quot;font-family: arial, sans-serif; font-size: 12.8px;&quot;&gt;&lt;font color=&quot;#990000&quot;&gt;&lt;u&gt;lớp cấp tốc, lớp luyện&lt;/u&gt;&lt;/font&gt;&amp;nbsp;&lt;/b&gt;&lt;i style=&quot;font-family: arial, sans-serif; font-size: 12.8px;&quot;&gt;(khai giảng 06/12/2018)&lt;/i&gt;&lt;/strong&gt;&lt;/div&gt;\r\n&lt;div style=&quot;margin-left: 40px;&quot;&gt;\r\n	&lt;p&gt;\r\n		&lt;strong&gt;- &amp;nbsp;Kế hoạch thi lần 1&lt;/strong&gt;&lt;/p&gt;\r\n&lt;/div&gt;\r\n&lt;ul style=&quot;margin-left: 80px;&quot;&gt;\r\n	&lt;li&gt;\r\n		Ng&amp;agrave;y c&amp;ocirc;ng bố kết quả thi: &lt;span style=&quot;color:#0000ff;&quot;&gt;Thứ Bảy, ng&amp;agrave;y 05/01/2019&lt;/span&gt;&lt;/li&gt;\r\n	&lt;li&gt;\r\n		Ng&amp;agrave;y nhận đơn ph&amp;uacute;c khảo:&amp;nbsp;&lt;span style=&quot;color:#0000ff;&quot;&gt;Từ 05/01/2019&amp;nbsp;đến 06/01/2019&lt;/span&gt;&lt;/li&gt;\r\n	&lt;li&gt;\r\n		Ng&amp;agrave;y c&amp;ocirc;ng bố kết quả ph&amp;uacute;c khảo: &lt;span style=&quot;color:#0000ff;&quot;&gt;14:00 Thứ Ba, ng&amp;agrave;y 08/01/2019&lt;/span&gt;&lt;/li&gt;\r\n	&lt;li&gt;\r\n		Thời hạn đăng k&amp;yacute; thi lần 2 tại Văn ph&amp;ograve;ng ghi danh TTTH_ĐH.KHTN (227 NVC, Q.5): &lt;span style=&quot;color:#0000ff;&quot;&gt;Từ ng&amp;agrave;y 05/01/2019&amp;nbsp;đến 09/01/2019&lt;/span&gt;&lt;/li&gt;\r\n&lt;/ul&gt;\r\n&lt;p&gt;\r\n	&amp;nbsp;&lt;/p&gt;\r\n&lt;div style=&quot;margin-left: 40px;&quot;&gt;\r\n	&lt;strong&gt;- Kế hoạc thi lần 2:&lt;/strong&gt;&amp;nbsp; D&amp;agrave;nh cho học vi&amp;ecirc;n c&amp;aacute;c lớp Ứng dụng CNTT cơ bản, Ứng dụng CNTT n&amp;acirc;ng cao kh&amp;oacute;a 244 thi lần 1 kh&amp;ocirc;ng đạt hoặc bỏ thi (HV c&amp;aacute;c lớp chuy&amp;ecirc;n đề kh&amp;ocirc;ng tổ chức thi lần 2)&lt;/div&gt;\r\n&lt;ul style=&quot;margin-left: 80px;&quot;&gt;\r\n	&lt;li&gt;\r\n		Ng&amp;agrave;y thi lần 2: &lt;span style=&quot;color:#0000ff;&quot;&gt;Chủ nhật, ng&amp;agrave;y 13/01/2019&lt;/span&gt;&lt;/li&gt;\r\n	&lt;li&gt;\r\n		Ng&amp;agrave;y c&amp;ocirc;ng bố kết quả thi lần 2: &lt;span style=&quot;color:#0000ff;&quot;&gt;Thứ S&amp;aacute;u, ng&amp;agrave;y 18/01/2019&lt;/span&gt;&lt;/li&gt;\r\n	&lt;li&gt;\r\n		Ng&amp;agrave;y nhận đơn ph&amp;uacute;c khảo thi lần 2:&lt;span style=&quot;color:#0000ff;&quot;&gt; Từ 18/01/2018&amp;nbsp;đến 20/01/2019&lt;/span&gt;&lt;/li&gt;\r\n	&lt;li&gt;\r\n		Ng&amp;agrave;y c&amp;ocirc;ng bố kết quả ph&amp;uacute;c khảo thi lần 2: &lt;span style=&quot;color:#0000ff;&quot;&gt;Thứ Tư, ng&amp;agrave;y 23/01/2019&lt;/span&gt;&lt;/li&gt;\r\n&lt;/ul&gt;\r\n&lt;p&gt;\r\n	&amp;nbsp;&lt;/p&gt;\r\n&lt;div style=&quot;margin-left: 40px;&quot;&gt;\r\n	&lt;strong&gt;- &amp;nbsp;Lưu &amp;yacute;:&lt;/strong&gt;&lt;/div&gt;\r\n&lt;ul style=&quot;margin-left: 80px;&quot;&gt;\r\n	&lt;li&gt;\r\n		&lt;div&gt;\r\n			HV lớp Ứng dụng CNTT cơ bản, Ứng dụng CNTT n&amp;acirc;ng cao phải nộp Đơn đăng k&amp;yacute; dự thi (theo mẫu qui định). Đ&amp;iacute;nh k&amp;egrave;m theo đơn n&amp;agrave;y: 02 tấm ảnh 4x6 (mặt sau ghi r&amp;otilde; Họ t&amp;ecirc;n, ng&amp;agrave;y sinh, nơi sinh) v&amp;agrave; bản photo CMND/Hộ chiếu ... (thẻ c&amp;oacute; h&amp;igrave;nh).&lt;/div&gt;\r\n	&lt;/li&gt;\r\n	&lt;li&gt;\r\n		&lt;div&gt;\r\n			&lt;strong&gt;KHI ĐI THI MANG THEO GIẤY TỜ T&amp;Ugrave;Y TH&amp;Acirc;N C&amp;Oacute; D&amp;Aacute;N ẢNH.&lt;/strong&gt;&lt;/div&gt;\r\n	&lt;/li&gt;\r\n&lt;/ul&gt;\r\n&lt;p&gt;\r\n	&amp;nbsp;&lt;/p&gt;\r\n&lt;div&gt;\r\n	Ch&amp;uacute;c c&amp;aacute;c bạn thi đạt kết quả tốt.&lt;/div&gt;</pre>', 1, '2020-01-10 07:59:08', '2020-01-10 07:59:08', 'ke-hoach-thi-k245.png');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_questions`
--

CREATE TABLE `tbl_questions` (
  `qes_id` bigint(20) UNSIGNED NOT NULL,
  `qes_content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `qes_answer_a` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `qes_answer_b` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `qes_answer_c` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `qes_answer_d` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `qes_correct_answer` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `qes_test_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_questions`
--

INSERT INTO `tbl_questions` (`qes_id`, `qes_content`, `qes_answer_a`, `qes_answer_b`, `qes_answer_c`, `qes_answer_d`, `qes_correct_answer`, `qes_test_id`, `created_at`, `updated_at`) VALUES
(1, 'Trong các sóng vô tuyến, sóng có dải tần số cao nhất là:', 'Infrared', 'Microwave', 'Radio', 'Tất cả các đáp án đều sai', 'A', 2, '2020-02-13 07:40:29', '2020-02-13 08:10:28'),
(2, 'Cáp xoắn đôi nhằm giải quyết vấn đề gì?', 'Tăng khoảng cách truyền', 'Tăng tốc độ khi truyền', 'Giảm nhiễu điện từ gây bởi bản thân chúng với nhau', 'Tất cả các đáp án đều đúng', 'C', 1, '2020-02-13 07:45:49', '2020-02-13 07:45:49'),
(3, 'Tỉ số tín hiệu trên nhiễu SNR được xác định theo biểu thức nào sau\r\nđây?', 'SNR=2log2(S/N) (dB)', 'SNR=2log10(S/N) (dB)', 'SNR=10log2(S/N) (dB)', 'SNR=10log10(S/N) (dB)', 'D', 1, '2020-02-13 07:47:05', '2020-02-13 07:47:05'),
(4, 'Tần số trong phạm vi 30 Mhz đến 1 Ghz thuộc dãy tần số sóng vô\r\nhướng nào?', 'Microwave', 'Radio', 'Infrared', 'Wifi', 'B', 1, '2020-02-13 07:47:49', '2020-02-13 07:47:49'),
(5, 'Trong các sóng vô tuyến, sóng có dải tần số cao nhất là:', 'Infrared', 'Microwave', 'Radio', 'Tất cả các đáp án đều sai', 'A', 1, '2020-02-13 08:08:45', '2020-02-13 08:10:52');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_tests`
--

CREATE TABLE `tbl_tests` (
  `test_id` bigint(20) UNSIGNED NOT NULL,
  `test_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `test_description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `test_note` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `test_total_questions` int(11) NOT NULL,
  `test_times` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_tests`
--

INSERT INTO `tbl_tests` (`test_id`, `test_name`, `test_description`, `test_note`, `test_total_questions`, `test_times`, `created_at`, `updated_at`) VALUES
(1, 'Bài thi số 1', NULL, NULL, 50, 60, '2020-02-12 08:23:34', '2020-02-13 07:01:21'),
(2, 'Bài thi số 2', NULL, NULL, 10000, 1000000000, '2020-02-13 07:01:41', '2020-02-13 07:01:41');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_test_result`
--

CREATE TABLE `tbl_test_result` (
  `ter_id` bigint(20) UNSIGNED NOT NULL,
  `ter_test_id` bigint(20) UNSIGNED NOT NULL,
  `ter_num_correct` int(11) NOT NULL,
  `ter_num_wrong` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_test_result`
--

INSERT INTO `tbl_test_result` (`ter_id`, `ter_test_id`, `ter_num_correct`, `ter_num_wrong`, `created_at`, `updated_at`) VALUES
(1, 1, 46, 4, '2020-02-23 04:08:05', '2020-02-23 04:08:05'),
(2, 1, 47, 3, '2020-02-23 04:09:06', '2020-02-23 04:09:06'),
(3, 1, 46, 4, '2020-02-23 04:09:56', '2020-02-23 04:09:56'),
(4, 1, 47, 3, '2020-02-23 04:10:33', '2020-02-23 04:10:33'),
(5, 1, 46, 4, '2020-02-23 04:15:50', '2020-02-23 04:15:50'),
(6, 1, 47, 3, '2020-02-23 04:16:27', '2020-02-23 04:16:27'),
(7, 1, 46, 4, '2020-02-23 07:08:04', '2020-02-23 07:08:04'),
(8, 1, 46, 4, '2020-02-23 07:08:37', '2020-02-23 07:08:37'),
(9, 1, 46, 4, '2020-02-23 07:08:44', '2020-02-23 07:08:44'),
(10, 1, 46, 4, '2020-02-23 07:09:07', '2020-02-23 07:09:07'),
(11, 1, 46, 4, '2020-02-23 07:10:07', '2020-02-23 07:10:07'),
(12, 1, 46, 4, '2020-02-23 07:10:59', '2020-02-23 07:10:59'),
(13, 1, 50, 0, '2020-02-23 07:11:28', '2020-02-23 07:11:28'),
(14, 1, 50, 0, '2020-02-23 07:11:53', '2020-02-23 07:11:53');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `level` int(2) NOT NULL DEFAULT '0',
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `level`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Nguyễn Khải', 'nguyenkhai321ls@gmail.com', 1, '$2y$10$KyJxQAZfQukklPzj.LHCMeDorgYZNffy5ZRW18MXI3Daq3bKGefaa', NULL, '2020-01-12 06:25:29', '2020-01-12 06:25:29'),
(2, 'Nguyễn Khải', 'nbk7545@gmail.com', 0, '$2y$10$0dyXBSJYfBAwZD2HLHInPu1In.LbZVvQ7Rd7523Bl8f6ViBhs2e4u', NULL, '2020-01-12 06:31:11', '2020-01-12 06:31:11');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `tbl_banner`
--
ALTER TABLE `tbl_banner`
  ADD PRIMARY KEY (`ban_id`);

--
-- Indexes for table `tbl_category`
--
ALTER TABLE `tbl_category`
  ADD PRIMARY KEY (`cate_id`);

--
-- Indexes for table `tbl_document`
--
ALTER TABLE `tbl_document`
  ADD PRIMARY KEY (`doc_id`),
  ADD KEY `tbl_document_doc_docateid_foreign` (`doc_docateid`);

--
-- Indexes for table `tbl_document_category`
--
ALTER TABLE `tbl_document_category`
  ADD PRIMARY KEY (`docate_id`);

--
-- Indexes for table `tbl_news`
--
ALTER TABLE `tbl_news`
  ADD PRIMARY KEY (`news_id`),
  ADD KEY `tbl_news_news_cateid_foreign` (`news_cateid`);

--
-- Indexes for table `tbl_questions`
--
ALTER TABLE `tbl_questions`
  ADD PRIMARY KEY (`qes_id`),
  ADD KEY `tbl_questions_qes_test_id_foreign` (`qes_test_id`);

--
-- Indexes for table `tbl_tests`
--
ALTER TABLE `tbl_tests`
  ADD PRIMARY KEY (`test_id`);

--
-- Indexes for table `tbl_test_result`
--
ALTER TABLE `tbl_test_result`
  ADD PRIMARY KEY (`ter_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `tbl_banner`
--
ALTER TABLE `tbl_banner`
  MODIFY `ban_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_category`
--
ALTER TABLE `tbl_category`
  MODIFY `cate_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_document`
--
ALTER TABLE `tbl_document`
  MODIFY `doc_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_document_category`
--
ALTER TABLE `tbl_document_category`
  MODIFY `docate_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_news`
--
ALTER TABLE `tbl_news`
  MODIFY `news_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tbl_questions`
--
ALTER TABLE `tbl_questions`
  MODIFY `qes_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_tests`
--
ALTER TABLE `tbl_tests`
  MODIFY `test_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_test_result`
--
ALTER TABLE `tbl_test_result`
  MODIFY `ter_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_document`
--
ALTER TABLE `tbl_document`
  ADD CONSTRAINT `tbl_document_doc_docateid_foreign` FOREIGN KEY (`doc_docateid`) REFERENCES `tbl_document_category` (`docate_id`) ON DELETE CASCADE;

--
-- Constraints for table `tbl_news`
--
ALTER TABLE `tbl_news`
  ADD CONSTRAINT `tbl_news_news_cateid_foreign` FOREIGN KEY (`news_cateid`) REFERENCES `tbl_category` (`cate_id`) ON DELETE CASCADE;

--
-- Constraints for table `tbl_questions`
--
ALTER TABLE `tbl_questions`
  ADD CONSTRAINT `tbl_questions_qes_test_id_foreign` FOREIGN KEY (`qes_test_id`) REFERENCES `tbl_tests` (`test_id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
