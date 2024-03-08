-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: sql310.byetcluster.com
-- Thời gian đã tạo: Th10 02, 2023 lúc 01:04 PM
-- Phiên bản máy phục vụ: 10.4.17-MariaDB
-- Phiên bản PHP: 7.2.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `b18_35098510_db`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `loaitin`
--

CREATE TABLE `loaitin` (
  `idLT` int(11) NOT NULL,
  `lang` char(2) DEFAULT 'vi',
  `Ten` varchar(100) NOT NULL DEFAULT '',
  `slug` varchar(100) NOT NULL,
  `ThuTu` tinyint(11) DEFAULT 0,
  `AnHien` tinyint(1) DEFAULT 1,
  `MoTa` varchar(4000) NOT NULL,
  `idTL` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `loaitin`
--

INSERT INTO `loaitin` (`idLT`, `lang`, `Ten`, `slug`, `ThuTu`, `AnHien`, `MoTa`, `idTL`) VALUES
(3, 'vi', 'Du lịch', 'du-lich', 3, 1, 'Trải nghiệm du lịch với ưu đãi siêu hấp dẫn...', 1),
(4, 'vi', 'Khoa học', 'khoa-hoc', 7, 1, 'Ngày nay khoa học ngày càng phát triển kéo theo sự phát triển của vô số ngành nghề liên quan...', 4),
(9, 'vi', 'Xã hội', 'xa-hoi', 2, 1, '', 1),
(12, 'vi', 'Sống đẹp', 'song-dep', 5, 1, '', 3),
(24, 'vi', 'Mẹo vặt', 'meo-vat', 10, 0, '', 3),
(77, 'vi', 'Chia sẻ', 'chia-se', 6, 1, '', 3),
(78, 'vi', 'Giáo dục', 'giao-duc', 9, 0, '', 1),
(79, 'vi', 'Sức khỏe', 'suc-khoe', 4, 1, '', 4),
(96, 'vi', 'Hồng Quân', '', 8, 1, '', 4);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `theloai`
--

CREATE TABLE `theloai` (
  `idTL` int(11) NOT NULL,
  `lang` char(2) DEFAULT 'vi',
  `TenTL` varchar(255) NOT NULL DEFAULT '',
  `ThuTu` int(11) DEFAULT 0,
  `AnHien` tinyint(1) DEFAULT 1
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `theloai`
--

INSERT INTO `theloai` (`idTL`, `lang`, `TenTL`, `ThuTu`, `AnHien`) VALUES
(3, 'vi', 'Nghệ thuật sống', 2, 1),
(7, 'vi', 'Thư giãn', 5, 0),
(4, 'vi', 'Thường thức', 1, 0),
(1, 'vi', 'Tin xã hội', 2, 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tin`
--

CREATE TABLE `tin` (
  `idTin` int(11) NOT NULL,
  `lang` char(2) NOT NULL DEFAULT 'vi',
  `TieuDe` varchar(255) NOT NULL DEFAULT '',
  `slug` varchar(255) NOT NULL,
  `TomTat` varchar(1000) DEFAULT NULL,
  `urlHinh` varchar(255) DEFAULT NULL,
  `Ngay` date DEFAULT current_timestamp(),
  `Content` text DEFAULT NULL,
  `idLT` int(11) NOT NULL DEFAULT 0,
  `SoLanXem` int(11) DEFAULT 0,
  `NoiBat` tinyint(1) DEFAULT 0,
  `AnHien` tinyint(1) DEFAULT 1,
  `tags` varchar(2000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `tin`
--

INSERT INTO `tin` (`idTin`, `lang`, `TieuDe`, `slug`, `TomTat`, `urlHinh`, `Ngay`, `Content`, `idLT`, `SoLanXem`, `NoiBat`, `AnHien`, `tags`) VALUES
(819, 'vi', 'Một con người đầy đam mê, và nhiệt huyết tuổi trẻ? Tôi là ai?', 'mot-con-nguoi-day-dam-me,-va-nhiet-huyet-tuoi-tre-toi-la-ai-819', 'Ai ai cũng có những  nhiệt huyết mà đam mê, tôi cũng vậy, à trước hết tôi xin tự giới thiệu...', 'https://i.pinimg.com/564x/40/98/2a/40982a8167f0a53dedce3731178f2ef5.jpg', '2023-09-28', '<p>Xin chào! Tôi là Nguyễn Hồng Quân, một người tràn đầy nhiệt huyết và đam mê về lập trình website. Địa chỉ email của tôi là nhq.it.vn@gmail.com, nơi tôi luôn sẵn sàng để kết nối và chia sẻ kiến thức về công nghệ với bạn bè và đồng nghiệp.</p><p>Tôi hiện đang theo học tại FPT Polytechnic, nơi tôi đang nổ lực hết mình để trở thành một chuyên gia trong lĩnh vực này. Website không chỉ là niềm đam mê của tôi mà còn là cầu nối giữa tôi và thế giới, cho phép tôi sáng tạo và thể hiện bản thân.</p><p>Bên cạnh lập trình, tôi có một cuộc sống xã hội phong cách và thân thiện. Tôi luôn tận hưởng cuộc sống và hòa đồng với mọi người xung quanh. Facebook của tôi có tên là \"<a href=\"http://fb.me/t.quan.x\">Quân</a>,\" nơi bạn có thể kết nối và tương tác với tôi một cách dễ dàng.</p><figure class=\"image\"><img src=\"https://scontent.fdad1-4.fna.fbcdn.net/v/t39.30808-6/374651263_956971732265743_1454626683758444061_n.jpg?_nc_cat=100&amp;ccb=1-7&amp;_nc_sid=a2f6c7&amp;_nc_ohc=tSWMDuYkviMAX9PaQzk&amp;_nc_ht=scontent.fdad1-4.fna&amp;oh=00_AfC4qqSBISj9YK3sUIPHMYvCYsWl0S8W8BDmVsqMi-6aQw&amp;oe=651AFC78\" alt=\"Có thể là hình ảnh về 2 người\"></figure><p>Ngoài ra, với chiều cao ấn tượng 2 mét và trọng lượng 60kg, tôi luôn tạo ấn tượng mạnh mẽ khi xuất hiện. Tôi tin rằng mỗi người đều có một câu chuyện độc đáo, và tôi rất háo hức được chia sẻ câu chuyện của mình và lắng nghe câu chuyện của bạn.</p><p>Hãy cùng kết nối và chia sẻ những trải nghiệm thú vị trên hành trình của chúng ta!</p>', 9, 0, 1, 1, NULL),
(820, 'vi', 'Bạn thích gì? Hôm nay tôi sẽ nói sở thích của tôi trước nhé...', 'ban-thich-gi-hom-nay-toi-se-noi-so-thich-cua-toi-truoc-nhe...-820', 'Mỗi người đều có một sở thích cho mình, riêng tôi thì hai. Cùng đón xem sở thích của tôi là gì nào...', 'https://image.slidesharecdn.com/web2-0forteachersiiinkeynote-100528143012-phpapp02/95/web-20-for-educators-109-728.jpg', '2023-10-02', '<p><strong>Sở Thích Của Tôi: Kết Hợp Giữa Lập Trình và Kinh Doanh</strong></p><p>Sở thích cá nhân thường định hình cuộc sống và sự nghiệp của mỗi người, và đối với tôi, hai sở thích lớn nhất trong cuộc đời này luôn là lập trình và kinh doanh. Tôi coi chúng không chỉ là những sở thích riêng lẻ, mà còn là những cơ hội tuyệt vời để kết hợp và xây dựng những dự án độc đáo.</p><p><strong>Lập Trình: Ngôn Ngữ Của Sự Sáng Tạo</strong></p><figure class=\"image\"><img src=\"https://v1study.com/public/images/article/1558338938_laptrinhweb.jpg\" alt=\"Độ tuổi từ 12 - 17: Lập trình Web level 4 | V1Study\"></figure><p>Lập trình là một nghệ thuật. Nó cho phép tôi biến các ý tưởng trừu tượng thành hiện thực, tạo ra các ứng dụng, trang web và giải pháp công nghệ thông tin từ một tấm gương trắng. Việc khám phá các ngôn ngữ lập trình và làm việc với các khung làm việc (frameworks) đã thúc đẩy sự sáng tạo bên trong tôi.</p><p>Không chỉ về khả năng sáng tạo, lập trình còn mở ra cơ hội học hỏi liên tục. Trong thế giới công nghệ đang phát triển nhanh chóng, tôi luôn phải cập nhật kiến thức và theo đuổi những công nghệ mới để không bị tụt lại. Điều này thú vị và thách thức đồng thời.</p><p><strong>Kinh Doanh: Xây Dựng Và Quản Lý Thương Hiệu</strong></p><figure class=\"image\"><img src=\"https://thumbs.dreamstime.com/b/business-plan-planning-strategy-meeting-conference-concept-seminar-50645579.jpg\" alt=\"Business Plan Planning Strategy Meeting Conference Concept Stock Image ...\"></figure><p>Sở thích về kinh doanh đem lại cho tôi cơ hội xây dựng và quản lý thương hiệu của mình. Tôi tận hưởng việc xác định chiến lược kinh doanh, tạo ra sản phẩm hoặc dịch vụ có giá trị và tạo ra một trải nghiệm tích cực cho khách hàng.</p><p>Kinh doanh không chỉ về việc kiếm tiền mà còn về việc xây dựng mối quan hệ với người khác, giải quyết các vấn đề, và tạo ra sự thay đổi tích cực trong xã hội. Điều này đem lại niềm hạnh phúc và ý nghĩa đặc biệt đối với tôi.</p><p><strong>Kết Hợp Hai Sở Thích: Cơ Hội Và Thách Thức</strong></p><p>Khi kết hợp lập trình và kinh doanh, tôi cảm thấy mình đang bước vào một thế giới đầy cơ hội và thách thức. Tôi có thể sáng tạo và phát triển sản phẩm công nghệ, sau đó tạo một mô hình kinh doanh hiệu quả để đưa sản phẩm đó đến với thị trường.</p><p>Tôi tin rằng sự kết hợp giữa lập trình và kinh doanh sẽ mang lại những thành công đáng giá và mang ý nghĩa cho tương lai của tôi.</p>', 96, 0, 1, 1, NULL),
(821, 'vi', 'Lập trình web đã có những thay đổi như thế nào?', 'lap-trinh-web-da-co-nhung-thay-doi-nhu-the-nao-821', 'Cùng với những thay đổi trong thời đại 4.0 ngành lập trình web đã có những thay đổi đáng kể. Cùng Quân đón xem những thay đổi đó là gì nhé...', 'https://d1iv5z3ivlqga1.cloudfront.net/wp-content/uploads/2020/12/30152113/vtc-academy-hoc-lap-trinh-web-nen-bat-dau-tu-dau-1024x538.jpeg', '2023-10-02', '<p>Ngành lập trình web đang trải qua một cuộc cách mạng không ngừng nghỉ, với những sự thay đổi đáng kể trong thời gian gần đây. Cùng với sự phát triển của công nghệ, xu hướng thiết kế và nhu cầu người dùng, việc theo kịp những thay đổi này là một phần quan trọng trong sự thành công của các nhà phát triển web. Dưới đây là một số xu hướng và sự thay đổi quan trọng trong ngành lập trình web và ba trang web mẫu của ba người bạn của tôi:</p><p><strong>1. Xu Hướng Thiết Kế Đáng Kể</strong></p><figure class=\"image\"><img src=\"https://www.invenza.in/wp-content/uploads/mudra-computers-img.jpg\" alt=\"Mudra Computers - Invenza Solutions\"></figure><p>Các trang web ngày nay không chỉ đơn giản là một trang tĩnh. Thiết kế đáng kể bao gồm hiệu ứng, chuyển động, và sử dụng hình ảnh đẹp mắt để tạo ra trải nghiệm tương tác cho người dùng. Ví dụ, bạn có thể tham khảo trang web của bạn <a href=\"http://hanhan.kesug.com\"><strong>Bảo Hân</strong></a>, để xem cách bạn ý sử dụng hiệu ứng và thiết kế đáng chú ý để thu hút người dùng.</p><p><strong>2. Tích Hợp Trải Nghiệm Người Dùng Tốt Hơn</strong></p><figure class=\"image\"><img src=\"https://www.chili.vn/blogs/wp-content/uploads/2020/11/cai-thien-trai-nghiem-nguoi-dung-01.jpg\" alt=\"10 Mẹo cải thiện trải nghiệm người dùng trên website (Phần 1) - Kiến ...\"></figure><p>Ngày càng nhiều trang web đang tập trung vào trải nghiệm người dùng (UX) và khả năng tương tác tốt hơn. Trang web của bạn <a href=\"http://yang27.byethost31.com/\"><strong>Kim Giang</strong></a>, là một ví dụ tuyệt vời về việc tạo ra giao diện dễ sử dụng và tương tác thú vị.</p><p><strong>3. Phát Triển Ứng Dụng Web Tiên Tiến</strong></p><figure class=\"image\"><img src=\"https://www.ngoisaoso.vn/uploads/news/2016/06/13/phat-trien-web.jpg\" alt=\"5 điều đầu tiên bạn cần phải xem xét trước khi xây dựng Website\"></figure><p>Ứng dụng web ngày nay không chỉ đơn giản là các trang tĩnh, mà còn là các ứng dụng đa nhiệm với khả năng chạy trên nhiều thiết bị. Trang web của bạn <a href=\"http://truong.000.pe\"><strong>Bá Trường</strong></a>, là một ví dụ về việc phát triển ứng dụng web tiên tiến với tính năng động và tích hợp cơ sở dữ liệu mạnh mẽ.</p><p><i><strong>Kết Luận</strong></i></p><p>Ngành lập trình web đang thay đổi và phát triển liên tục. Việc duyệt qua các trang web ví dụ của ba người bạn của tôi có thể giúp bạn nhận biết những xu hướng và sự thay đổi quan trọng trong lĩnh vực này, đồng thời tạo động lực để nâng cao kỹ năng và phát triển sự nghiệp trong ngành lập trình web.</p><p>~Tác giả: Quân AI~</p><p>&nbsp;</p><p>&nbsp;</p>', 9, 0, 1, 1, NULL),
(822, 'vi', 'Tên miền quốc gia? Ý nghĩa tên miền quốc tế...', 'ten-mien-quoc-gia-y-nghia-ten-mien-quoc-te...', 'Tên miền quốc gia? Tên miền quốc tế? Bạn đã biết về nó chưa...', 'https://samivietnam.com/wp-content/uploads/2019/12/com-.vn_.jpg', '2023-10-02', '<h2><strong>Miền Quốc Gia (ccTLD - Country Code Top-Level Domain):</strong></h2><p>Miền quốc gia là một loại tên miền máy tính được sử dụng để đại diện cho một quốc gia hoặc một lãnh thổ cụ thể. Mỗi quốc gia có một tên miền quốc gia riêng, được gọi là ccTLD, và thường bắt đầu bằng hai ký tự đại diện cho tên quốc gia hoặc lãnh thổ đó. Ví dụ, .US đại diện cho Hoa Kỳ, .UK đại diện cho Vương Quốc Anh, và .DE đại diện cho Đức. Tên miền quốc gia thường được sử dụng bởi các trang web và tổ chức có liên quan đến quốc gia hoặc lãnh thổ tương ứng.</p><figure class=\"image\"><img src=\"https://nhanhoa.com/uploads/attach/1448613689_ten-mien-quoc-gia-vn-va-nhung-dieu-chua-biet.jpg\" alt=\"Tên miền Quốc gia .VN và những điều chưa biết!\"></figure><h2><strong>Các Tên Miền Quốc Gia (ccTLDs):</strong></h2><p><strong>.US (Hoa Kỳ)</strong>: Tên miền quốc gia của Hoa Kỳ, thường được sử dụng cho các trang web và dự án có liên quan đến Hoa Kỳ. Đây là một trong những tên miền phổ biến nhất trên thế giới.</p><p><strong>.UK (Vương Quốc Anh)</strong>: Đại diện cho Vương Quốc Anh, .UK là tên miền phổ biến cho các trang web và doanh nghiệp tại Anh.</p><p><strong>.DE (Đức)</strong>: Đây là tên miền của Đức, thường được sử dụng cho các trang web và dự án có liên quan đến thị trường Đức.</p><p><strong>.FR (Pháp)</strong>: .FR là tên miền quốc gia của Pháp, thường được sử dụng cho các trang web và tổ chức Pháp.</p><p><strong>.AU (Úc):</strong> .AU là tên miền của Úc, sử dụng rộng rãi trong cả nước và quốc tế cho các trang web và doanh nghiệp có liên quan đến Úc.</p><h2>Miền Quốc Tế (gTLD - Generic Top-Level Domain):</h2><p>Miền quốc tế là một loại tên miền máy tính không liên quan trực tiếp đến quốc gia nào cả và thường được sử dụng trên phạm vi toàn cầu. Những tên miền này được gọi là gTLD và bao gồm các đuôi như .COM, .ORG, .NET, .EDU, .BIZ và nhiều khác. Một số gTLD có ý nghĩa đặc biệt, ví dụ: .COM thường được sử dụng cho các trang web thương mại, .ORG cho các tổ chức phi lợi nhuận, .EDU cho các tổ chức giáo dục, và .BIZ cho các doanh nghiệp. Các tên miền quốc tế thường không liên quan trực tiếp đến một quốc gia cụ thể và có thể đăng ký bởi bất kỳ ai trên toàn cầu.</p><figure class=\"image\"><img src=\"https://ecowebzim.com/wp-content/uploads/2020/07/top-level-domains.png\" alt=\"What Is A Top Level Domain? | Ecowebzim Solutions\"></figure><h2>Ý Nghĩa của Các Loại Tên Miền Quốc Tế (gTLDs):</h2><p><strong>.BIZ</strong>: Được sử dụng cho các doanh nghiệp và tổ chức thương mại. Đây là tên miền dành riêng cho việc kinh doanh và giao dịch trực tuyến.</p><p><strong>.HEALTH</strong>: Đây là tên miền đặc biệt dành cho các trang web và tổ chức liên quan đến lĩnh vực chăm sóc sức khỏe và y tế. Nó đánh dấu sự tin cậy và kiến thức chuyên sâu trong lĩnh vực này.</p><p><strong>.TV</strong>: .TV thường được liên kết với các trang web và nội dung video trực tuyến, đặc biệt là các trang web phát sóng trực tiếp hoặc chương trình truyền hình trực tuyến.</p><p><strong>.EDU</strong>: Được dành riêng cho các tổ chức giáo dục và trường học. Tên miền .EDU thường chỉ được cấp cho các viện đào tạo và trường đại học có uy tín.</p><p><strong>.ORG</strong>: Tên miền này thường được liên kết với các tổ chức phi lợi nhuận và tổ chức xã hội. Nó thể hiện cam kết của các tổ chức này đối với mục tiêu và sứ mệnh xã hội.</p><p>~Tác giả: Quân AI~</p>', 77, 0, 1, 1, NULL),
(823, 'vi', 'Tuổi trẻ và sự tiếc nuối...', 'tuoi-tre-va-su-tiec-nuoi...-823', 'Xin chào mọi người, tôi là Quân, và hôm nay tôi muốn chia sẻ về những khía cạnh của cuộc hành trình của mình, về những đam mê, hoài bão và những thay đổi mà tôi đã trải qua trong cuộc đời.', 'https://s.meta.com.vn/img/thumb.ashx/Data/image/2020/12/09/hinh-nen-anime-may-tinh-4.jpg', '2023-10-02', '<h2>Từ Những Ý Tưởng Đến Hành Động Kinh Doanh:</h2><p>Trong suốt thời gian dài, tôi luôn nảy ra nhiều ý tưởng về kinh doanh nhưng không dám thực hiện. Sự tự nghi ngờ và lo lắng về khả năng thành công đã ngăn tôi bước chân vào thế giới kinh doanh. Nhưng sau một thời gian, tôi nhận ra rằng đối diện với sự không chắc chắn là cách để trưởng thành. Tôi bắt đầu dấn thân vào kinh doanh, và mặc dù có thất bại, nhưng nó đã là một phần quan trọng của cuộc hành trình xây dựng bản thân.</p><figure class=\"image\"><img src=\"https://camnang.online/wp-content/uploads/2017/01/y-tuong-kinh-doanh-dich-vu-1.jpg\" alt=\"Mách bạn những ý tưởng kinh doanh dịch vụ hợp lý\"></figure><h2>Từ Người Nhút Nhát Đến Sự Tự Tin:</h2><p>Tôi từng là một người nhút nhát, luôn tránh xa khỏi tầm ánh mắt của mọi người. Sự tự ti và lo lắng về cách tôi được người khác nhìn nhận đã làm cho tôi trở nên rụt rè. Nhưng dần dần, thông qua việc đối diện với những tình huống xã hội và tìm kiếm sự phát triển bản thân, tôi đã bắt đầu tự tin hơn. Tôi học cách nói lên ý kiến của mình và làm quen với việc giao tiếp trong xã hội.</p><figure class=\"image\"><img src=\"https://eccthai.com/wp-content/uploads/2021/08/su-tu-tin.jpg\" alt=\"Hôm Nay Ta Giàu Có – Sức mạnh của sự tự tin – ECCthai\"></figure><h2>Từ Tình Thầm Lặng Đến Việc Chia Sẻ Tình Cảm:</h2><p>Tôi cũng từng trải qua giai đoạn thích thầm một người mà không dám nói. Sự sợ hãi về sự từ chối và lo lắng về sự phê phán đã khiến tôi giữ cho tình cảm của mình trái tim. Nhưng cuộc sống dạy cho tôi rằng nếu bạn không nói lên tình cảm, bạn sẽ không biết kết quả là gì. Dù kết quả có thế nào, điều quan trọng là tôi đã dám thử.</p><figure class=\"image\"><img src=\"https://i1.wp.com/stthay.net/sites/default/files/field/image/stt-yeu-don-phuong.jpg\" alt=\"Những stt tâm trạng tình yêu thầm lặng có phải là điều ngốc nghếch ...\"></figure><h2>Những Thay Đổi Là Hành Trình Phát Triển:</h2><p>Cuộc hành trình này của tôi đã không ngừng phát triển và thay đổi. Tôi đã học từ những sai lầm và trải nghiệm. Cuộc sống đã giúp tôi trở nên mạnh mẽ hơn, tự tin hơn và dám đối diện với những thử thách. Tôi hiểu rằng sự thay đổi là một phần không thể thiếu của cuộc sống và là cách để chúng ta trưởng thành.</p><p style=\"text-align:center;\"><img src=\"https://widulife.com/wp-content/uploads/2021/03/5-acciones-que-puedes-poner-en-pr%C3%A1ctica-inmediatamente-para-alcanzar-el-%C3%A9xito-mejorar-800x533.jpeg\"></p><h2>Kết Luận:</h2><p>Cuộc hành trình của tôi vẫn còn tiếp diễn, và tôi luôn sẵn sàng đối mặt với những thay đổi và khám phá mới. Cuộc đời là một cuộc phiêu lưu đầy ý nghĩa, và tôi hy vọng rằng bài chia sẻ này có thể truyền đạt một chút động viên và sự khích lệ cho bạn trong hành trình của riêng mình.</p><p>~Tác giả: Quân AI~</p>', 96, 0, 1, 1, NULL),
(824, 'vi', 'Phim và Âm Nhạc: Tác Động Đến Cuộc Sống Của Chúng Ta', 'phim-va-am-nhac:-tac-dong-den-cuoc-song-cua-chung-ta', 'Phim và âm nhạc, hai loại nghệ thuật mạnh mẽ, có khả năng thay đổi và tác động sâu sắc đến cuộc sống của chúng ta.', 'https://i.ytimg.com/vi/vx551oH5Sts/maxresdefault.jpg', '2023-10-02', '<p>Dưới đây là một cái nhìn ngắn về cách chúng có thể ảnh hưởng đến chúng ta:</p><p><strong>1. Giúp Thư Giãn và Giải Trí</strong>: Phim và âm nhạc là cách tuyệt vời để thư giãn và giải trí. Chúng ta có thể chìm đắm vào một câu chuyện hấp dẫn hoặc lắng nghe giai điệu cuốn hút để xua tan căng thẳng sau một ngày dài.</p><figure class=\"image\"><img src=\"https://taidayvabaygio.org/uploads/news/04_2022/bai%202.jpg\" alt=\"GIẢI TRÍ\"></figure><p><strong>2. Tạo Kết Nối Emotion</strong>: Những tác phẩm nghệ thuật này có thể làm cho chúng ta cảm thấy kết nối với những tình cảm và trạng thái tinh thần của nhân vật hoặc nghệ sĩ. Họ có thể kích thích cảm xúc và tạo ra trải nghiệm mà chúng ta không bao giờ quên.</p><figure class=\"image\"><img src=\"https://th.bing.com/th/id/R.af47950077733fa908bc99481ea3f405?rik=Sasc3bIZZTZSow&amp;riu=http%3a%2f%2fwww.tuyengiao.vn%2fUploads%2f2020%2f8%2f25%2f27%2ftan-dung-uu-the-mang-xa-hoi-trong-cong-tac-tuyen-truyen-cua-dang.jpg&amp;ehk=o6fm3VHj54RZ1qurjnf97NeBDJV2YNf%2bzkS%2fz8KioUw%3d&amp;risl=&amp;pid=ImgRaw&amp;r=0\" alt=\"Mạng xã hội là gì? Tầm quan trọng và hữu ích\"></figure><p><strong>3. Truyền Đạt Thông Điệp Sâu Sắc</strong>: Phim và âm nhạc thường mang thông điệp và ý nghĩa sâu sắc về cuộc sống, tình yêu, và con người. Chúng có thể giúp chúng ta suy ngẫm và thấu hiểu hơn về thế giới xung quanh.</p><figure class=\"image\"><img src=\"https://revelogue.com/wp-content/uploads/2020/02/thong-diep-goi-gon-trong-phim-e1581341599556.jpg\" alt=\"Thằng em lý tưởng và câu chuyện ấm áp về tình anh em - Revelogue\"></figure><p><strong>4. Tác Động Tới Tư Duy và Hành Vi</strong>: Những tác phẩm này có thể thay đổi cách chúng ta nghĩ và hành động. Họ có thể truyền cảm hứng và thúc đẩy sự phát triển cá nhân.</p><p><i><strong>Tuy nhiên</strong>, cũng cần lưu ý rằng cách chúng ta tiêu thụ phim và âm nhạc cũng có thể tác động đến cuộc sống của chúng ta. Việc thận trọng và cân nhắc là quan trọng để đảm bảo rằng họ không gây ảnh hưởng tiêu cực đến tâm trí và tư duy của chúng ta.</i></p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p>', 9, 0, 1, 1, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `gt` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `file_img` varchar(300) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hobby` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nghe_nghiep` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `intro` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `group_id` tinyint(1) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`user_id`, `user_name`, `email`, `password`, `created_at`, `gt`, `file_img`, `hobby`, `nghe_nghiep`, `intro`, `group_id`) VALUES
(5, 'vuilam', 'vuilam@gmail.com', 'ratvui', NULL, '0', 'http://nguyenhongquan.id.vn/upload/images/vuilam.png', 'Đấ bóng', 'sinh viên', 'a', 1),
(8, 'vuiqua', 'vuiqua@gmail.com', 'quavui', '2022-06-25 08:46:09', '0', 'https://scontent.fdad1-4.fna.fbcdn.net/v/t39.30808-6/374651263_956971732265743_1454626683758444061_n.jpg?_nc_cat=100&ccb=1-7&_nc_sid=a2f6c7&_nc_ohc=dgawB9Jnw4MAX_BwuWj&_nc_ht=scontent.fdad1-4.fna&oh=00_AfA2hm7y7-QysnTldNQMJhS0_J8eUmQvogDt-n4Mqal2jA&oe=651EF0F8', 'Nhìn mưa rơi', 'Sinh viên', NULL, 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `ykien`
--

CREATE TABLE `ykien` (
  `idYKien` int(11) NOT NULL,
  `idTin` int(11) NOT NULL DEFAULT 0,
  `Ngay` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `NoiDung` text NOT NULL,
  `Email` varchar(255) DEFAULT NULL,
  `HoTen` varchar(255) DEFAULT NULL,
  `AnHien` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `ykien`
--

INSERT INTO `ykien` (`idYKien`, `idTin`, `Ngay`, `NoiDung`, `Email`, `HoTen`, `AnHien`) VALUES
(9, 783, '2018-12-19 18:14:23', 'Chời ơi tầm trung mà có giá gần 10 triệu với hơn 10 triệu thì dẹp cho khỏe mua xiaomi cho xong.', 'bb@bb.com', 'Đời Chẳng Đẹp', 1),
(8, 783, '2018-12-19 18:13:39', 'Nếu tìm hiểu kĩ ai cũng sẽ thấy là độ phân giải không phải là con số quyết định một bức ảnh đẹp, mà chính là cảm biến.', 'aa@aa.com', 'Đời Tươi Đẹp', 1),
(10, 783, '2018-12-19 18:14:57', 'Siêu phẩm đây rồi,quá tuyệt vời cho 1 sản phẩm tầm trung', 'cc@cc.com', 'Đời Chẳng Đẹp Chẳng Xấu', 1),
(11, 786, '2018-12-19 19:54:40', 'Ông ấy không chỉ là HLV thể lực mà ông ấy như người cha trong gia đình đội tuyển. Thấu hiểu tính cách, tâm tư của từng cầu thủ, nhìn vào những ưu điểm của từng cầu thủ để khích lệ, động viên, gắn kết họ thành một tập thể đoàn kết, vững mạnh. Bóng đá là môn thể thao cần tổng thể sức mạnh tập thể. Đoàn kết để tạo nên sức mạnh. Đó là bí quyết thành công của bóng đá Việt Nam trong năm qua. Cám ơn ông thật nhiều!', 'thuduong@gomeo.com', 'Thu Hương', 1),
(12, 786, '2018-12-19 19:55:18', 'Khi đọc những lời chia tay này, tôi mới thấy ông Bae Ji-won rất sâu sát và hiểu tường tận các học trò. Không có gì hơn khi có một người thấy hiểu rõ các học trò như vậy, điều này giúp cho ban huấn luyện phát huy tốt nhất năng lực của cầu thủ và thể lực là một phần không thể thiếu. Buồn vì chúng ta không giữ được ông lại. Xin chân thành cảm ơn những gì ông đã đóng góp cho BĐ VN', 'hung@abc.com', 'Quốc Hung', 1),
(13, 786, '2018-12-19 19:55:49', 'Đọc xong bức tâm thư mà rưng rưng nước mắt. Ông xứng đáng là người hùng thầm lặng nhất của Việt Nam. Ko biết lý do là ji nhưng sự ra đi của ông là 1 tổn thất không hề nhỏ cho bóng đá Việt Nam. Là 1 công dân của Việt Nam xin được cảm ơn những ji mà ông đã cống hiến cho bóng đá nước nhà. Xin được chúc ông sức khoẻ và mong những điều tốt đẹp nhất đến với ông. Xin cảm ơn!', 'hoai@yahoo.com', 'Hoài', 1),
(14, 786, '2018-12-19 19:56:13', 'Phải công nhận tập thể đội tuyển Việt Nam bây giờ đoàn kết trong và cả ngoài sân cỏ. Ở họ thấy không có khoảng cách về tuổi tác, vùng miền hay sự nghi ngờ đố kị nhau như những lớp trước, cái đó cũng là 1 phần của thành công ngày hôm nay. Ông Bae hẳn hiểu rất rõ điều này, cảm ơn ông vì những đóng góp cho Việt Nam suốt thời gian qua.', 'viet@yahoo.com', 'Lê Hoàng Việt', 1),
(15, 786, '2018-12-19 19:56:41', 'Một bài viết rất hay và có tâm đến từ HLV thể lực. Cảm ơn ông trong quãng thời gian qua đã sát cánh cùng đội tuyển gặt hái nhiều thành công mà trong đó thể lực đóng vai trò rất quan trọng đến cầu thủ. Lời chia tay có lẽ nuối tiếc nhất của đội tuyển. Chúc ông nhiều sức khỏe, thành công hơn!', 'jim@gai,com', 'Jim', 1),
(16, 786, '2018-12-19 19:57:16', 'Nhìn danh sách Asian Cup không thấy ông Bae, đã thấy nghi nghi. Giờ thì có thông tin chính thức. Cảm ơn ông rất nhiều. Nhờ có ông mà thể lực của các cầu thủ tốt hơn trước rất nhiều, đá 90 phút vẫn thấy trâu lắm. Nhưng tôi băn khoăn, vì sao ông nghỉ vậy?', 'hoanglong@yahoo.com', 'Hoàng Long', 1),
(17, 786, '2018-12-19 19:57:44', 'Đúng nghĩa là một bác sĩ của đội tuyển. Điều trị về chấn thương mà còn về tâm lý của từng cầu thủ. Tôi thay mặt cổ động viên VN cám ơn ông rất nhiều những gì ông đã cống hiến cho bóng đá VN thời gian qua.', 'mai@gai.com', 'Bang Mai', 1),
(18, 786, '2018-12-19 19:58:20', 'Với một người thầy tràn đầy tình cảm và tâm huyết như ông sao lại để ông ra đi khỏi đội tuyển Việt nam. Những người làm bóng đá của chúng ta đều mong phát triển tốt mà sao không ngòi lại vói nhau nhỉ', 'tuananh@hai.com', 'Tuấn anh', 1),
(19, 786, '2018-12-19 19:59:05', 'Đó là trách nhiệm công việc phải làm của 1 HLV thể lực, không có ông thì cũng có những người khác làm, chừng nào làm mà không lãnh lương thì mới gọi là người hùng thầm lặng.', 'ntd@hanti.com', 'NTD', 1),
(20, 787, '2018-12-19 20:26:38', 'Tôi nhìn thấy con khỉ đầu tiên nhưng tôi lại là một kỹ sư xây dựng khô khan :(', 'ssg@sfsdf.com', 'Trọng Hiền', 1),
(21, 787, '2018-12-19 20:27:26', 'Nó chỉ đúng với một số người thôi, một số người thì ngược lại trong đó có tôi. Một bức hình không thể suy ngược ra tính cách hay khả năng của mỗi con người, có thể với tính cách như vậy sẽ nhìn ra bức hình thì đúng nhưng ngược lại chưa chắc', 'sadas@dsf.com', 'Kính Lúp', 1),
(22, 787, '2018-12-19 20:28:59', 'Còn lý giải về con khỉ thì khá đúng. Mình sống ko đc nguyên tắc lắm tùy cảm hứng sẽ lm vc này vc kia. Thường thức khuya lv và ngủ nướng, dậy sớm ngủ sớm là nhiệm vụ bất khả thi. Có hôm ngủ tới trưa dạy mới nấu cơm ngon cho vợ con xong đi cafe chém gió với bạn ròi chiều mới về lv. Bố mẹ hay cằn nhằn về nếp sống kì cục của mình nhưng cá nhân thì vẫn thấy hạnh phúc vui vẻ , hên là có cô vợ dễ tính chiều chồng hihi.', 'das@dfsd.com', 'Nntuan', 1),
(23, 787, '2018-12-19 20:29:42', 'Tôi chỉ thấy 1 con khỉ thôi nhưng tôi làm nghề kế toán và tính cách khô khan, tôi là phụ nữ nhưng đa số mọi người quen biết bảo tôi là Tom boy.', 'tert@sdfsf.com', 'Quỳnh Thắng', 1),
(24, 788, '2018-12-19 20:39:31', 'Nhân dân Việt Nam mình thật diễm phúc  và tự hào khi có Phật Hoàng Trần Nhân Tông. Chiến tích của người Thầy - Cha - Ông thật lẫy lừng. \r\nNgàn năm con cháu mãi mãi mang ơn và ngưỡng vọng ông.', 'aa@sfd.com', 'Con Cháu', 1),
(25, 788, '2018-12-19 20:42:55', 'Lãnh đạo nhân dân đánh thắng quân Nguyên hùng mạnh, xuất hiện chữ Viết riêng của người Việt, phát triển nền tảng triết học Phật giáo Trúc Lâm Yên Tử, mọi lĩnh vực của đất nước từ văn hóa, kinh tế, quân sự, chính trị... đều phát triễn đến mức độ cao, rực rỡ. \r\nĐó là thời Trần, công của Phật Hoàng với dân tộc, con cháu lớn lắm.', 'as@dd.com', 'Thanh Niên', 1);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `loaitin`
--
ALTER TABLE `loaitin`
  ADD PRIMARY KEY (`idLT`);

--
-- Chỉ mục cho bảng `theloai`
--
ALTER TABLE `theloai`
  ADD PRIMARY KEY (`idTL`),
  ADD UNIQUE KEY `TenTL` (`TenTL`);

--
-- Chỉ mục cho bảng `tin`
--
ALTER TABLE `tin`
  ADD PRIMARY KEY (`idTin`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- Chỉ mục cho bảng `ykien`
--
ALTER TABLE `ykien`
  ADD PRIMARY KEY (`idYKien`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `loaitin`
--
ALTER TABLE `loaitin`
  MODIFY `idLT` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=97;

--
-- AUTO_INCREMENT cho bảng `theloai`
--
ALTER TABLE `theloai`
  MODIFY `idTL` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT cho bảng `tin`
--
ALTER TABLE `tin`
  MODIFY `idTin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=825;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- AUTO_INCREMENT cho bảng `ykien`
--
ALTER TABLE `ykien`
  MODIFY `idYKien` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
