-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 28, 2024 at 07:06 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ql_bansach`
--

-- --------------------------------------------------------

--
-- Table structure for table `authors`
--

CREATE TABLE `authors` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `DateOfBirth` date DEFAULT NULL,
  `InfoAuthor` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `authors`
--

INSERT INTO `authors` (`id`, `name`, `DateOfBirth`, `InfoAuthor`) VALUES
(1, 'Shiv Khera', '1961-08-23', 'Shiv Khera là một tác giả, nhà hoạt động và diễn giả truyền động lực người Ấn Độ, nổi tiếng với cuốn sách You Can Win. Ông đã phát động phong trào chống lại sự bảo lưu dựa trên đẳng cấp ở Ấn Độ, thành lập một tổ chức mang tên Country First Foundation'),
(2, 'Aoyama Gosho', '1963-06-21', 'Aoyama Gosho từ lúc còn trẻ đã là một người vẽ rất giỏi. Khi còn học ở trường cấp 2, Aoyama đã từng đoạt giải nhất một cuộc thi vẽ tranh với bức vẽ mang tên \"Cuộc chiến Yukiai\", và bức tranh này đã được trưng bày tại cửa hàng Daimaru ở Tottori, quê hương của ông. Ông tốt nghiệp trường cấp ba Ikuei. Sau đó, ông theo học ngành Mỹ thuật tại trường Đại học Nhật Bản'),
(3, 'Matt Crossick', '0000-00-00', 'Đang cập nhật'),
(4, 'Trần Văn Hạo', '0000-00-00', 'Đang cập nhật'),
(5, 'Vũ Công Tấn Tài', '0000-00-00', 'Vũ Công Tấn Tài, hiện tại mình đang làm việc như là một lập trình viên full-stack toàn thời gian trong lĩnh vực phát triển ứng dụng Web và tham gia vào các dự án triển khai hệ thống CI/CD phục vụ cho các yêu cầu nâng cao chất lượng sản phẩm.Bên cạnh công việc chính, mình cũng thường tham gia hướng dẫn các lớp học lập trình cũng như tổ chức các buổi chia sẻ kinh nghiệm làm việc cho các bạn sinh viên. Với mong muốn chia sẻ thật nhiều kiến thức, trong cuốn sách này, mình sẽ đem đến và chia sẻ với các bạn nhiều điều về nghề lập trình cũng như công việc của những nhà phát triển phần mềm – hay chúng ta vẫn quen gọi là “lập trình viên”.'),
(6, 'Nhà xuất bản kim đồng', '1957-10-20', 'Nhà xuất bản Kim Đồng là một nhà xuất bản lớn tại Việt Nam, chuyên xuất bản các sách dành cho trẻ em và tuổi mới lớn. Ngày thành lập của nhà xuất bản Kim Đồng là ngày 20 tháng 10 năm 1957. Nhà xuất bản Kim Đồng đã và đang đóng góp quan trọng trong việc phát triển văn học thiếu nhi và góp phần nuôi dưỡng tình yêu đọc sách cho thế hệ trẻ Việt Nam.'),
(7, 'Fujiko F. Fujio', '1933-12-01', 'Tác giả của truyện Doraemon là Fujiko F. Fujio. Fujiko F. Fujio là bút danh chung của hai tác giả người Nhật Bản là Hiroshi Fujimoto (1933-1996). Cả hai tác giả đã hợp tác để tạo ra loạt truyện tranh nổi tiếng Doraemon.'),
(8, ' Trần Thanh Phong', NULL, 'Trần Thanh Phong cái tên không còn quá xa lạ với lĩnh vực kinh doanh. Anh là ông chủ của một chuỗi cửa hàng thời trang Bingo với hơn 10 năm lăn lộn trong ngành bán lẻ, xây dựng hàng trăm shop thời trang bán lẻ.'),
(9, 'Amy Odell', NULL, 'Tác giả cuốn sách - Amy Odell - là một cựu biên tập viên thời trang. Tác phẩm viết về giới blogger, nhân vật tạo trend, nhà thiết kế, người nổi tiếng, biên tập viên và người mẫu… tất đều dưới góc nhìn thú vị, hài hước, khác với truyền thông tô vẽ.'),
(10, 'Lý Thành Cơ', NULL, 'Đang cập nhật'),
(11, 'Nhiều tác giả', NULL, 'Đang cập nhật'),
(12, 'Vãn Tình', NULL, 'Vân Tình là một nhà văn nổi tiếng người Trung Quốc. Mặc dù vậy, những thông tin cá nhân của cô vẫn luôn là ẩn số. Sinh ra tại Trung Quốc, nơi mà nên văn học rất phát triển với hàng loạt tác phẩm ngôn tinh đình đám, những tiểu thuyết văn học kinh điển, nhưng Văn Tình vẫn có được chỗ đứng vững chắc, tỏa sáng như những ngôi sao giữa lang văn nhờ những tác phẩm hay, chất lượng.'),
(13, 'Edmondo De Amicis', '1886-10-18', 'Edmondo De Amicis được sinh ra tại Oneglia, thành phố biển Imperia của xứ Liguria, Italia. Khi trưởng thành, ông vào trường quân đội của Modena và trở thành sĩ quan quân đội Ý. Ông đã tham gia chiến dầu dành Custoza trong cuộc chiến giành độc lập lần thứ 3 của quân đội Italia chống lại để quốc Áo.'),
(14, 'Nguyễn Nhật Ánh', NULL, 'Nhà văn Nguyễn Nhật Ánh được biết đến qua nhiều tác phẩm văn học về đề tài tuổi mới lớn. Cốt truyện đơn giản, tình cảm trong sáng, cảnh đẹp làng quê là những nét đặc trưng trong các truyện ngắn của Nguyễn Nhật Ánh. Ngoài Tôi thấy hoa vàng trên cỏ xanh, truyện ngắn Mắt Biếc và Cô gái đến từ hôm qua của bác đều đã được chuyển thể thành phim và mang lại tiếng vang lớn.t'),
(15, 'Napoleon Hill', '1883-10-26', 'Napoleon Hill (sinh ngày 26 tháng 10 năm 1883 – mất ngày 8 tháng 11 năm 1970) là một tác giả người Mỹ, một trong những người sáng lập nên một thể loại văn học hiện đại đó là môn “thành công học” (là khoa học về sự thành công của cá nhân).'),
(16, 'Melanie Barnes', NULL, 'Melanie Barnes được biết đến với vai trò là nhà văn và nhiếp ảnh gia. Cô làm việc tại blog Geoffrey and Grace và trang Instagram @geoffreyandgrace – Điểm đến cho cảm hứng sống chậm và sống tối giản.'),
(17, 'Dale Carnegie', '1888-11-24', 'Dale Carnegie tên đầy đủ là Dale Breckenridge Carnegie sinh năm 1888 tại Maryville, Missouri của nước Mỹ. Gia đình ông làm nghề nông chính vì vậy cuộc sống thời thơ ấu của tác giả đều gắn liền với những buổi sáng dậy sớm vắt sữa bò, và làm việc phụ gia đình. Ông tốt nghiệp trường State Teacher’s College tại Warrensburg. Và sau đó đã làm rất nhiều những công việc khác nhau để kiếm sống. Dale Carnegie mất vào ngày 1 tháng 11 năm 1955 vì căn bệnh Hodgkin tại Forest Hills, New York, và được hỏa thiêu tại nghĩa trang quê nhà Belton, Cass County, Missouri.'),
(18, 'Trác Nhã', NULL, 'Khéo ăn khéo nói sẽ có được thiên hạ thấm và chạm đến biết bao thế hệ độc giả bởi nó được viết bởi tác giả Trác Nhã – nhà văn người Trung Quốc với văn phong mượt mà, nhẹ nhàng mà rất thú vị, sâu sắc.'),
(19, 'Thích Nhất Hạnh', '1926-10-11', 'Thích Nhất Hạnh (tên khai sinh Nguyễn Xuân Bảo, sinh ngày 11 tháng 10 năm 1926) là một thiền sư, giảng viên, nhà văn, nhà thơ, nhà khảo cứu, nhà hoạt động xã hội, và người vận động cho hòa bình người Việt Nam.Ông sinh ra ở Thừa Thiên-Huế, miền Trung Việt Nam, xuất gia theo Thiền tông vào năm 16 tuổi, trở thành một nhà sư vào năm 1949.'),
(20, 'Studio Ponoc', NULL, 'Studio Ponoc là hãng phim hoạt hình Nhật vừa mới thành lập vào năm 2015 có trụ sở đặt tại Musashino, Tokyo. Giám đốc hãng là Yoshiaki Nishimura, nhà sản xuất kỳ cựu của Studio Ghibli, người từng nhận hai đề cử Oscar liên tiếp cho The Tale of Princess Kaguya và When Marnie Was There.'),
(21, 'Oded Galor', NULL, '“Hành trình nhân loại: Nguồn gốc của thịnh vượng và bất bình đẳng” được viết bởi Oded Galor – một trong những nhà kinh tế có ảnh hưởng nhất trong lĩnh vực tăng trưởng và phát triển. Ông được đánh giá là một ứng cử viên danh giá cho giải Nobel Kinh tế và là một trong những bộ óc xuất chúng của thế kỷ 21. '),
(22, 'Logan Ury', NULL, 'Sau khi tốt nghiệp ngành Tâm lý học tại Harvard, Logan Ury điều hành nhóm nghiên cứu về khoa học hành vi tại Google. Cô cũng là người đứng sau chương trình trò chuyện nổi tiếng Talks at Google: Modern Romance. Hiện tại, cô đang là Giám đốc về Khoa học Mối quan hệ của ứng dụng Hinge.'),
(23, 'William O’Neil', '1933-03-25', 'William J. O’Neil (sinh ngày 25 tháng 3 năm 1933) là một doanh nhân, nhà môi giới chứng khoán và nhà văn người Mỹ, người đã thành lập công ty môi giới chứng khoán William O’Neil & Co. Inc vào năm 1963 và tờ báo kinh doanh Investor’s Business Daily năm 1984. Ông là tác giả của các cuốn sách Làm giàu từ chứng khoán, 24 bài học cần thiết để đầu tư thành công và Nhà đầu tư thành công cùng nhiều cuốn sách khác, và là tác giả của chiến lược đầu tư CAN SLIM.'),
(24, 'Vạn Lý Độc Hành', NULL, 'Tác giả Đỗ Hoàng Dương (ông lấy bút danh Vạn Lý Độc Hành vì rất đam mê đi du lịch), là doanh nhân nên việc viết tiểu thuyết dài 49 ngàn chữ, đã là một nỗ lực sáng tạo đáng quý. Khi thưởng thức tác phẩm đầu tay (NXB Hội Nhà văn) của ông, bạn đọc có nhiều bất ngờ thú vị bởi sự miêu tả tinh tế về “mảnh đất tình quê” thân thương; những hoài niệm tuổi thơ, tình bạn học trò mà “ai cũng thấy bóng dáng mình trong đó”; những rung động đầu đời thơ mộng cùng “tình yêu tự nguyện” bồng bột, dại khờ song ngọt ngào và khó quên.'),
(25, 'Emanuel James Rohn', '1930-06-17', 'Emanuel James Rohn, Emanuel James \"Jim\" Rohn sinh ra ở Yakima, Washington. Ông là con một trong gia đình. Cha mẹ ông là Emmanuel và Clara Rohn. Gia đình Rohn sở hữu một trang trại tại Caldwell, Idaho. Rohn rời trường đại học chỉ sau một năm học và bắt đầu sự nghiệp bằng công việc quản lý nhân sự cho cửa hàng bách hóa Sears. Vào khoảng thời gian này, một người bạn đã mời ông đến tham dự một buổi thuyết trình của doanh nhân nổi tiếng John Earl Shoaff.'),
(26, 'Cảnh Thiên', NULL, ' Cảnh Thiên là tác giả của cuốn sách Đừng lựa chọn an nhàn khi còn trẻ và nhiều loại sách khác. Tuy nhiên, thông tin về tác giả cũng không được tiết lộ nhiều, các độc giả lâu năm chỉ biết tác giả Cảnh Thiên là người Trung Quốc, từng nhiều năm làm ở vị trí biên tập và truyền thông, cung Sư Tử, thích văn chương, mỹ thực và những nỗi niềm hạnh phúc nho nhỏ, những câu chuyện vui buồn thực tế đã và đang xảy ra trong cuộc sống.'),
(27, 'Alan Loy McGinnis', NULL, 'Alan Loy McGinnis là một tác giả, nhà trị liệu tâm lý Cơ đốc, đồng thời là người sáng lập và giám đốc của Trung tâm Tư vấn Thung lũng ở Glendale, California, Hoa Kỳ. Ông là mục sư của nhà thờ Grandview Presbyterian vào khoảng năm 1970. Ngày nay có hơn 3 triệu bản sách của ông được in'),
(28, 'Taketoshi Ozawa', NULL, 'Tác giả Taketoshi Ozawa nguyên là viện trưởng trung tâm chăm sóc sức khỏe bệnh viện Yokohama Kousei, người sáng lập Hiệp hội Endlife Care – tổ chức chuyên đào tạo y tá, hộ sỹ tại Nhật Bản. Là bác sỹ, ông đã tận tay chăm sóc sức khỏe cho hơn 2.800 bệnh nhân, trong đó có phương pháp “Dignity Therapy” để mỗi người bệnh vượt lên nỗi đau thể xác, tinh thần và tìm ra ý nghĩa của cuộc đời mình. Đó là liệu pháp tôn trọng phẩm cách bệnh nhân, với mục đích là tác động tới tâm lý xã hội và giúp bệnh nhân cởi bỏ những phiền não về sự tồn tại, giá trị tồn tại của bản thân.'),
(29, 'Pam Grout', NULL, 'Pam Grout là một người phụ nữ thành công với cuộc sống rực rỡ sắc màu, và tình yêu thương vô tận dành cho cô con gái nhỏ. Cô và sách của cô rất đáng để bạn đọc phải suy ngẫm. Eccthai cùng bạn tìm hiểu nữ văn sĩ này. Amazon giới thiệu: Pam Grout  là một người lãng mạn vô vọng, người vẫn tin rằng thế giới là một nơi tuyệt đẹp, rằng con người cao quý và bất cứ điều gì đều có thể.'),
(30, 'Brian bartes', NULL, 'Brian bartes là một trong những tác giả sở hữu rất nhiều quyển sách thuộc top “best seller”. Và khi quyển sách Bài học cuộc sống được chính thức xuất bản cũng đã nhận được rất nhiều phản hồi tích cực từ đọc giả. Với những chủ đề về cuộc sống, Brian Bartes đã thực sự chinh phục được đọc giả bởi bản thân ông đã dành rất nhiều thời gian cho việc nghiên cứu.'),
(31, 'Eckhart Tolle ', NULL, 'Eckhart Tolle (sinh năm 1948 ở Đức) là một nhà tâm linh, nổi tiếng nhất với vai trò tác giả cuốn sách Sức Mạnh Của Hiện Tại và Thức Tỉnh Mục Đích Sống. Năm 2011, ông được nhà sách Watkins Books xem là người có ảnh hưởng nhất thế giới về tâm linh. Năm 2008, một bài viết của The New York Times đã gọi Tolle là “tác giả về tâm linh nổi tiếng nhất nước Mỹ”.'),
(32, 'Nicola Yoon', NULL, 'Nicola Yoon sinh năm 1972, mang quốc tịch Mỹ, gốc Jamaica, lớn lên ở Jamaica và Brooklyn, New York. Cô theo học chuyên ngành kỹ sư điện tử tại Đại học Cornell. Sau khi tốt nghiệp Yoon theo học chương trình Thạc sĩ Viết sáng tạo tại Cao đẳng Emerson.'),
(33, 'Mèo Maverick', NULL, 'Mèo Maverick là tác giả người Trung Quốc, tên thật là Triệu Tinh. Cô là tác giả của rất nhiều cuốn sách best seller, đồng thời là hot blogger trên các trang mạng xã hội nổi tiếng. Thông tin cá nhân của tác giả hiện chưa được tiết lộ nhiều.Bạn đang xem: Mèo maverick là ai'),
(34, 'Kohata Yao', NULL, 'Kohata Yao đã cùng chồng sáng lập Học viện Reiki Hatsuga, một nơi hỗ trợ phát triển tâm linh có trụ sở tại Tokyo và Osaka.\n            Sau khi kết hôn, bà đã giác ngộ thế giới tâm linh và đạo pháp một cách tự nhiên, thay đổi thế giới quan của bản thân nhờ nhân duyên với bộ môn Reiki – phương pháp Healing có nguồn gốc từ xa xưa của Nhật Bản.\n            Bà là tác giả của nhiều cuốn sách như Phương pháp thanh tẩy bản thân (Nhà xuất bản Kanki), Chakra (Luân xa) nhập môn (Nhà sách Nagaoka), Phương pháp thư giãn trí não (Nhà xuất bản Chukei).'),
(35, 'Gary Keller', '1957-07-21', 'Gary Keller là đồng sáng lập và chủ tịch Hội đồng Quản trị của Keller William Reatly International, công ty kinh doanh nhượng quyền bất động dản lớn nhất nước Mỹ. Là Doanh nhân của Năm của Earnst & Young. Ông đã từng xuất bản 3 quyển sách bán chạy nhất nước Mỹ liên quan đến bất động sản. Ngoài ra, Gary đã giúp vô số người nhận ra kết quả phi thuưường của việc chỉ tập tủng vào Sứ mệnh của họ.'),
(36, ' Brooke Mcalary', NULL, 'Đang cập nhật');

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(100) NOT NULL,
  `description` text DEFAULT NULL,
  `publish_date` date DEFAULT NULL,
  `price` bigint(20) DEFAULT NULL,
  `quality` int(11) DEFAULT 0,
  `img` varchar(100) DEFAULT NULL,
  `author_id` bigint(20) UNSIGNED NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`id`, `name`, `description`, `publish_date`, `price`, `quality`, `img`, `author_id`, `category_id`) VALUES
(1, 'You Can Win - Bí Quyết Của Người Chiến Thắng (Tái Bản)', 'You Can Win - Bí Quyết Của Người Chiến Thắng .Với cách đặt vấn đề dễ hiểu, thiết thực và sâu sắc, <strong>Bí quyết của người chiến thắng sẽ giúp bạn tránh rơi vào cảm giác mất phương hướng, biết xác định mục tiêu và những giá trị cần ưu tiên trong cuộc sống. Có  thể xem cuốn sách này như một quyển sổ tay liệt kê những công cụ cần  thiết để kiến tao thành công và giúp bạn tạo lập một cuộc sống tốt đẹp.  Cũng có thể xem nó như một cuốn cảm nang dạy nấu ăn, bao gồm những chỉ  dần về nguyên liệu, công thức và cách pha trộn theo tỉ lệ thích hợp để  có được thành công. Nhưng  trên hết, đây là cuốn sách từng bước dẫn dặt bạn đi từ mơ ước, khát vọng  thành công đến khám phá năng lực của bản thân và biến ước mơ thành hiện  thực .Bí  quyết sẽ giúp bạn xây dựng mục tiêu mới, hình thành ý niệm mới về mục  đích sống, phát triển tư tưởng mới về bản thân và tương lai. Một  trong những mục đích của cuốn sách là giúp bạn đề ra kế hoạch hành động  cho tương lai. Nếu chưa bao giờ làm vậy, bạn hãy xác định xem- Bạn muốn đạt được điều gì? - Bạn muốn đạt được mục tiêu bằng cách nào?- Thời điểm bạn muốn đạt được mục tiêu là khi nào? Những  nguyên tắc trình bày trong cuốn sách đều mang tính phổ quát, áp dụng cho  mọi tình huống, tổ chức hoặc quốc gia. Hy vọng cuốn sách sẽ mang lại  cho bạn nhiều điều mới mẻ v&agragrave; những khám phá thú vị.', '2015-12-14', 120000, 86, '/asset/img/f543773110ede6e472494f5e9aed4253.jpg', 1, 1),
(2, 'Thám tử lừng danh conan - Tập 89', 'Thám tử lừng danh Conan là một series manga trinh thám được sáng tác bởi Aoyama Gōshō. Tác phẩm được đăng tải trên tạp chí Weekly Shōnen Sunday của nhà xuất bản Shogakukan vào năm 1994 và được đóng gói thành 104 tập tankōbon tính đến tháng 10 năm 2023', '1994-01-19', 58000, 26, '/asset/img/conan89.u2469.d20160901.t170642.630976.jpg', 2, 2),
(3, 'Thám tử lừng danh conan - Tập 87', 'Thám tử lừng danh Conan là một series manga trinh thám được sáng tác bởi Aoyama Gōshō. Tác phẩm được đăng tải trên tạp chí Weekly Shōnen Sunday của nhà xuất bản Shogakukan vào năm 1994 và được đóng gói thành 104 tập tankōbon tính đến tháng 10 năm 2023', '1994-01-19', 56000, 31, '/asset/img/conan-87-u335-d20160516-t151643.u2487.d20161019.t142926.381590.jpg', 2, 2),
(4, 'Thám tử lừng danh conan - Tập 90', 'Thám tử lừng danh Conan là một series manga trinh thám được sáng tác bởi Aoyama Gōshō. Tác phẩm được đăng tải trên tạp chí Weekly Shōnen Sunday của nhà xuất bản Shogakukan vào năm 1994 và được đóng gói thành 104 tập tankōbon tính đến tháng 10 năm 2023', '1994-01-19', 76000, 23, '/asset/img/conan90.u2751.d20170221.t111539.890106.png', 2, 2),
(5, 'Hành Trang Lập Trình', 'trong cuốn sách này, tác giả sẽ đem đến cho các bạn nhiều điều về nghề lập trình cũng như công việc của những nhà phát triển phần mềm – hay chúng ta vẫn hay gọi là nghề “lập trình viên”.', '2020-01-02', 76000, 23, '/asset/img/hanhtrang.jpg', 5, 4),
(6, 'Sách giáo khoa địa lý 12', 'Sách Giáo trình Địa lý 12 (Bộ sách giáo dục Địa lý): Đây là sách giáo trình chính thức theo chương trình giảng dạy của Bộ Giáo dục và Đào tạo Việt Nam. Sách này cung cấp kiến thức về Địa lý theo từng chủ đề, bao gồm thông tin về địa hình, khí hậu, dân cư, kinh tế, văn hóa và môi trường của các vùng và quốc gia trên thế giới.', NULL, 12000, 86, '/asset/img/h1.jpg', 6, 3),
(7, 'Sách giáo khoa Giáo dục công dân 12', 'Sách Giáo dục Công dân 12 (Bộ sách giáo dục Giáo dục công dân): Đây là sách giáo trình chính thức theo chương trình giảng dạy của Bộ Giáo dục và Đào tạo Việt Nam. Sách này cung cấp kiến thức về Giáo dục công dân theo các chủ đề như công dân và xã hội, công dân và quyền lợi, công dân và trách nhiệm, và công dân và pháp luật. Nó cung cấp cả lý thuyết và ví dụ thực tế để học sinh hiểu và thực hành các khái niệm và kỹ năng của Giáo dục công dân.', NULL, 12000, 86, '/asset/img/h3.jpg', 6, 3),
(8, 'Sách giáo khoa Toán 12(Hình học)', 'Sách Giáo trình Toán học 12 (Bộ sách giáo dục Toán học): Đây là sách giáo trình chính thức theo chương trình giảng dạy của Bộ Giáo dục và Đào tạo Việt Nam. Sách này cung cấp kiến thức về Hình học theo các phần như hình học không gian, hình học đường thẳng, hình học bề mặt, hình học không gian và các hình học khác.', NULL, 12000, 86, '/asset/img/h2.jpg', 6, 3),
(9, 'Sách giáo khoa Sinh học 12', 'Sách Giáo trình Sinh học 12 (Bộ sách giáo dục Sinh học): Đây là sách giáo trình chính thức theo chương trình giảng dạy của Bộ Giáo dục và Đào tạo Việt Nam. Sách này cung cấp kiến thức về Sinh học theo các phần như cấu tạo và chức năng của tế bào, di truyền học, sinh sản, di truyền và tiến hóa, sinh học động vật, sinh học thực vật, sinh học vi khuẩn và vi sinh vật.', NULL, 12000, 86, '/asset/img/h4.jpg', 6, 3),
(10, 'Sách giáo khoa Tiếng Anh 12', 'Sách Giáo trình Tiếng Anh 12 (Bộ sách giáo dục Tiếng Anh): Đây là sách giáo trình chính thức theo chương trình giảng dạy của Bộ Giáo dục và Đào tạo Việt Nam. Sách này cung cấp kiến thức về Tiếng Anh theo các chủ đề như ngữ pháp, từ vựng, kỹ năng nghe, nói, đọc và viết. Nó cung cấp cả lý thuyết và các bài tập để học sinh rèn kỹ năng Tiếng Anh của mình.', NULL, 12000, 86, '/asset/img/h5.jpg', 6, 3),
(11, 'Sách giáo khoa Toán học 12(giải tích)', 'Sách Giáo trình Toán học 12 (Bộ sách giáo dục Toán học): Đây là sách giáo trình chính thức theo chương trình giảng dạy của Bộ Giáo dục và Đào tạo Việt Nam. Sách này cung cấp kiến thức về Giải tích theo các phần như hàm số, giới hạn và liên tục, đạo hàm và ứng dụng, tích phân và ứng dụng, phương trình vi phân và ứng dụng, và các chủ đề liên quan khác. Nó cung cấp cả lý thuyết và ví dụ, bài tập để học sinh rèn kỹ năng Giải tích.', NULL, 12000, 86, '/asset/img/h7.jpg', 6, 3),
(12, 'Sách giáo khoa Công nghệ 12 ', 'SSách Giáo trình Công nghệ 12 (Bộ sách giáo dục Công nghệ): Đây là sách giáo trình chính thức theo chương trình giảng dạy của Bộ Giáo dục và Đào tạo Việt Nam. Sách này cung cấp kiến thức về Công nghệ theo các phần như công nghệ thông tin, công nghệ chế tạo, công nghệ nông nghiệp và công nghệ thực phẩm. Nó cung cấp cả lý thuyết và ví dụ, bài tập để học sinh hiểu và áp dụng kiến thức Công nghệ.', NULL, 12000, 86, '/asset/img/h8.jpg', 6, 3),
(13, 'Sách giáo khoa Vật lý 12', 'Sách Giáo trình Vật lý 12 (Bộ sách giáo dục Vật lý): Đây là sách giáo trình chính thức theo chương trình giảng dạy của Bộ Giáo dục và Đào tạo Việt Nam. Sách này cung cấp kiến thức về Vật lý theo các phần như cơ học, nhiệt động học, điện từ học và quang học. Nó cung cấp cả lý thuyết và ví dụ, bài tập để học sinh hiểu và áp dụng kiến thức Vật lý.', NULL, 12000, 86, '/asset/img/h9.jpg', 6, 3),
(14, 'Sách giáo khoa Tin học 12', 'Sách Giáo trình Tin học 12 (Bộ sách giáo dục Tin học): Đây là sách giáo trình chính thức theo chương trình giảng dạy của Bộ Giáo dục và Đào tạo Việt Nam. Sách này cung cấp kiến thức về Tin học theo các phần như lập trình, cơ sở dữ liệu, mạng máy tính và thiết kế web. Nó cung cấp cả lý thuyết và ví dụ, bài tập để học sinh hiểu và áp dụng kiến thức Tin học.', NULL, 12000, 86, '/asset/img/h10.jpg', 6, 3),
(15, 'Sách giáo khoa Lịch sử 12', 'Sách Giáo trình Lịch sử 12 (Bộ sách giáo dục Lịch sử): Đây là sách giáo trình chính thức theo chương trình giảng dạy của Bộ Giáo dục và Đào tạo Việt Nam. Sách này cung cấp kiến thức về Lịch sử theo các phần như Lịch sử thế giới hiện đại, Lịch sử Việt Nam từ 1858 đến 1945, Lịch sử Đông Nam Á và Lịch sử thế giới hiện đại từ năm 1945 đến nay. Nó cung cấp cả lý thuyết và thông tin chi tiết về các sự kiện, nhân vật và quá trình lịch sử.', NULL, 12000, 86, '/asset/img/h6.jpg', 6, 3),
(16, 'Từ điển pháp luật việt nam', 'Sách Giáo trình Lịch sử 12 (Bộ sách giáo dục Lịch sử): Đây là sách giáo trình chính thức theo chương trình giảng dạy của Bộ Giáo dục và Đào tạo Việt Nam. Sách này cung cấp kiến thức về Lịch sử theo các phần như Lịch sử thế giới hiện đại, Lịch sử Việt Nam từ 1858 đến 1945, Lịch sử Đông Nam Á và Lịch sử thế giới hiện đại từ năm 1945 đến nay. Nó cung cấp cả lý thuyết và thông tin chi tiết về các sự kiện, nhân vật và quá trình lịch sử.', NULL, 12000, 86, '/asset/img/h11.jpg', 6, 3),
(17, 'Nobita và cuộc chiến vũ trụ', 'Sách Giáo trình Lịch sử 12 (Bộ sách giáo dục Lịch sử): Đây là sách giáo trình chính thức theo chương trình giảng dạy của Bộ Giáo dục và Đào tạo Việt Nam. Sách này cung cấp kiến thức về Lịch sử theo các phần như Lịch sử thế giới hiện đại, Lịch sử Việt Nam từ 1858 đến 1945, Lịch sử Đông Nam Á và Lịch sử thế giới hiện đại từ năm 1945 đến nay. Nó cung cấp cả lý thuyết và thông tin chi tiết về các sự kiện, nhân vật và quá trình lịch sử.', '1985-03-16', 30000, 86, '/asset/img/h12.jpg', 7, 2),
(18, 'Nobita du hành biển phương nam', 'Đây là tác phẩm thứ 19 trong loạt phim hoạt hình \"Doraemon\" rất được yêu thích của tác giả Fujiko.F.Fujio, được công chiếu vào mùa xuân năm 1998. Vô tình nhặt được bản đồ kho báu, Nobita đã phát hiện ra đảo châu báu. Nhóm bạn dùng bảo bối của Doraemon, giong thuyền nhắm thẳng hướng đại dương bao la. Nhưng do biến cố của siêu không gian, mọi người đã bị lạc vào thời đại hải tặc...!?', '1998-03-07', 30000, 86, '/asset/img/h13.jpg', 7, 2),
(19, 'Nobita tây du ký', 'Nobita Tây Du Ký\" (hoặc còn được gọi là \"Journey to the West with Nobita\") là một phiên bản đặc biệt của loạt truyện tranh Doraemon của tác giả Fujiko F. Fujio. Trong câu chuyện này, các nhân vật chính là Nobita, Doraemon và nhóm bạn của Nobita bị cuốn vào một cuộc phiêu lưu kỳ diệu dựa trên truyện cổ tích Trung Quốc nổi tiếng \"Tây Du Ký\".', '2012-11-20', 30000, 86, '/asset/img/h14.jpg', 7, 2),
(20, 'Nobita và truyền thuyết vua mặt trời', 'Nobita và truyền thuyết vua mặt trời\" (Doraemon: Nobita and the Legend of the Sun King) là một bộ phim hoạt hình Nhật Bản thuộc series Doraemon, dựa trên manga cùng tên của Fujiko F. Fujio. Bộ phim được phát hành vào năm 2000.<br/>\n            Câu chuyện xoay quanh nhân vật chính là Nobita, một cậu bé bất hạnh và luôn gặp rắc rối trong cuộc sống hàng ngày. Nobita và các bạn của mình, cùng với chú mèo máy Doraemon, thời gian được gửi từ tương lai để giúp đỡ, bị cuốn vào một cuộc phiêu lưu đến xứ sở cổ đại nằm dưới lòng đại dương', '2000-03-04', 30000, 86, '/asset/img/h15.jpg', 7, 2),
(21, 'Nobita và những phát sư gió bí ẩn', 'Nobita và những phát sư gió bí ẩn\" là một tập phim hoạt hình thuộc loạt phim Doraemon, được sáng tác bởi Fujiko F. Fujio. Doraemon là một bộ truyện tranh nổi tiếng của Nhật Bản với nhân vật chính là chú mèo máy Doraemon, người đã được gửi từ tương lai để giúp đỡ cậu bé Nobita.<br/>\n            Trong tập phim \"Nobita và những phát sư gió bí ẩn\", Nobita và các bạn bị cuốn vào một cuộc phiêu lưu thú vị. Câu chuyện bắt đầu khi Nobita tìm thấy một cuốn sách cổ về những phát sư gió, và cậu và các bạn quyết định điều tra sự thật về những phát sư này.', '2003-03-08', 30000, 86, '/asset/img/h16.jpg', 7, 2),
(22, 'Nobita và lâu đài dưới đáy biển', 'Nobita và lâu đài dưới đáy biển (Doraemon: Nobitas Great Adventure in the Underwater Castle) là một bộ phim hoạt hình Nhật Bản thuộc series Doraemon, dựa trên manga cùng tên của Fujiko F. Fujio. Bộ phim được phát hành vào năm 1983.<br/>\n            Câu chuyện bắt đầu khi Nobita và nhóm bạn của mình tình cờ khám phá ra một bản đồ bí ẩn cho thấy vị trí của một lâu đài cổ nằm dưới đáy biển. Với sự giúp đỡ của chú mèo máy Doraemon, họ sử dụng một thiết bị thời gian để du hành tới thời điểm lâu đài còn tồn tại.', '1983-03-12', 30000, 86, '/asset/img/h17.jpg', 7, 2),
(23, 'Nobita thám hiểm vùng đất mới', 'Nguyên mẫu Doraemon gồm 826 truyện ngắn do chính tác giả Fujiko.F.Fujio chọn lọc. Bộ truyện đã mang đến tiếng cười và gắn liền với kỷ niệm thời thơ ấu của biết bao thế hệ độc giả. Cuốn sách này tập hợp những câu chuyện vô cùng thú vị về chú mèo máy Doraemon.', '1982-03-13', 30000, 20, '/asset/img/h20.jpg', 7, 2),
(24, 'NOBITA VÀ CHUYẾN DU HÀNH BIỂN PHƯƠNG NAM', 'Đây là tác phẩm thứ 19 trong loạt phim hoạt hình \"Doraemon\" rất được yêu thích của tác giả Fujiko.F.Fujio, được công chiếu vào mùa xuân năm 1998. Vô tình nhặt được bản đồ kho báu, Nobita đã phát hiện ra đảo châu báu. Nhóm bạn dùng bảo bối của Doraemon, giong thuyền nhắm thẳng hướng đại dương bao la. Nhưng do biến cố của siêu không gian, mọi người đã bị lạc vào thời đại hải tặc...!? Đây là phiên bản tranh truyện màu được vẽ lại từ tập phim hoạt hình cùng tên của tác giả Fujiko.F.Fujio.', '1982-03-13', 30000, 20, '/asset/img/h18.jpg', 7, 2),
(25, 'Nobita ở vương quốc chó mèo', 'Truyện bắt đầu khi Nobita bắt gặp một chú chó dễ thương ở sân bóng. Cậu mang nó về nhà và đặt tên là Số Một (Ichi). Trong một đêm mưa, Nobita và Doraemon gặp một con mèo đang dầm mưa, Nobita nhận nuôi nó, đặt tên là Ướt Sũng (Zubu). Tuy nhiên rắc rối xảy ra với Nobita khi mẹ cậu nghi ngờ rằng cậu đang nuôi động vật trong nhà. Khi rắc rối đó được giải quyết bằng một cỗ máy của Doraemon thì lại có một rắc rối khác: Đó là việc các chó mèo bỏ hoang đang bị dồn lên núi vì cảnh sát đang truy nã chúng. Nobita đã đưa chúng về thời điểm 300 triệu năm trước (khi con người và khủng long chưa hề tồn tại).', '2004-03-02', 30000, 20, '/asset/img/h19.jpg', 7, 2),
(26, 'Khởi Nghiệp Du Kích', 'Quyển sách dành cho người khởi nghiệp kinh doanh với số vốn ít ỏi.\n            Hầu hết các doanh nhân trẻ khi chân ướt chân ráo khởi động doanh nghiệp của mình đều trong tình trạng thiếu hụt nguồn lực. Trong khi đó, đối thủ có sẵn trên thương trường thì luôn có lợi thế, kinh nghiệm và nhiều nguồn lực hơn. Để giành chiến thắng, người đến sau phải biết vận dụng những chiến thuật đặc biệt, linh hoạt, khôn ngoan và khéo léo, đúng theo tinh thần của chiến lược chiến tranh du kích.', '2020-04-01', 30000, 86, '/asset/img/h21.jpg', 8, 1),
(27, 'Nghành công nghiệp thời trang', 'NGÀNH CÔNG NGHIỆP THỜI TRANG sẽ cung cấp cho bạn hiểu biết về thế giới phù hoa này dưới một góc nhìn thú vị và hài hước, khác hẳn với những gì truyền thông thường tô vẽ.\n            Bạn biết gì về ngành công nghiệp thời trang?\n            Liệu đây có phải nơi mọi người chỉ thích mặc toàn đen vì cho rằng đây là thứ trang phục thời trang nhất?\n            Hay đây là ngành công nghiệp vận hành theo cách khiến cho người tiêu dùng, nhất là phụ nữ, luôn cảm thấy bản thân mình thua kém họ cảm thấy mình quá nghèo, quá béo, quá thiếu gợi cảm, quá thiếu gu thẩm mỹ và quá tầm thường ?\n            Dù đúng hay sai, những điều này vốn dĩ chỉ là thứ bạn nhìn thấy được qua truyền thông.', '2020-04-01', 30000, 86, '/asset/img/h22.jpg', 9, 1),
(28, 'Thế giới rộng lớn đừng đi một mình', '\"Sợ thì sợ, nhưng nếu cứ sống mãi trong vùng sợ, liệu chúng ta có biết được tuổi trẻ của mình dài bao nhiêu?\"\n            Càng lớn, con người càng đem theo bên mình nhiều nỗi sợ. Sợ thất nghiệp, thất tình, sự nghiệp bấp bênh, không có tiết kiệm cho tuổi già, sợ bây giờ hoang phí, sau này sẽ hối hận.\n            Chúng ta sợ nhiều thứ là vậy, nhưng chúng ta lại chưa bao giờ biết sợ tuổi trẻ của mình sẽ trôi đi một cách lãng phí.\n            Liệu, những nỗi sợ đó là đúng hay sai, chôn vùi tuổi trẻ trong công việc, cho sự nghiệp, để những năm tháng về sau an nhàn là nên hay không nên?\n            Chúng ta nào đâu biết được, vì thậm chí không ai đoán được ngày mai.\n            Vậy thì có gì để mà sợ hãi cái tương lai thậm chí còn chưa xảy đến?\n            Thế giới ngoài kia có rất nhiều điều tuyệt vời.', NULL, 30000, 86, '/asset/img/h23.jpg', 10, 1),
(29, 'Vì Thương', 'Tuyển tập Vì Thương... ghi lại tâm tình của những người con khi nghĩ về đấng sinh thành, đồng thời cho thấy thêm một nét tình cảm thiêng liêng khác được bồi đắp giữa cha mẹ và con cái: Tình bạn. Vừa là tình thâm, vừa là bạn thân, những người cha, người mẹ được nhắc đến ở đây không chỉ hy sinh thầm lặng vì con cái như dòng chảy luân hồi xưa nay mà còn luôn đồng hành, kề vai sát cánh cùng con trên mọi nẻo đường...', NULL, 30000, 86, '/asset/img/h24.jpg', 11, 8),
(30, 'Khí chất bao nhiêu hạnh phúc bấy nhiêu', '“Khí chất bao nhiêu hạnh phúc bấy nhiêu” đem đến góc nhìn mới, hướng tiếp cận khác biệt cho những người phụ nữ đang khát khao để trưởng thành và mong muốn trở nên bản lĩnh hơn trong cuộc sống. Mỗi cá nhân họ sẽ là một họa sĩ vẽ nên câu chuyện hạnh phúc của riêng mình mà không phụ thuộc vào người khác, để tự tin sánh đôi bên người bạn đời, và dù nếu chưa có, họ vẫn có thể hiên ngang vì đã chăm sóc bản thân mình thật tốt.', '2018-08-01', 30000, 86, '/asset/img/h25.jpg', 12, 8),
(31, 'Những tấm lòng cao cả', 'Những tấm lòng cao cả là tiểu thuyết nổi tiếng với độc giả mọi lứa tuổi trên toàn thế giới. Không chỉ là dòng nhật ký của cậu bé mười tuổi, tác phẩm còn chất chứa những bài học nhân văn xuất hiện trong đời sống thường nhật. Bằng văn phong giản dị song hành cùng ý nghĩa giáo dục sâu sắc, ngòi bút của Edmondo de Amicis đã làm rung động trái tim người đọc và để lại nhiều dư âm trong lòng.', '1886-10-18', 30000, 86, '/asset/img/h26.jpg', 13, 8),
(32, 'Tôi thấy hoa vàng trên cỏ xanh', 'Tôi thấy hoa vàng trên cỏ xanh là một tiểu thuyết dành cho thanh thiếu niên của nhà văn Nguyễn Nhật Ánh, xuất bản lần đầu tại Việt Nam vào ngày 9 tháng 12 năm 2010 bởi Nhà xuất bản Trẻ với phần tranh minh họa do Đỗ Hoàng Tường thực hiện. Đây là một trong các truyện dài của Nguyễn Nhật Ánh, ra đời sau Đảo mộng mơ và trước Lá nằm trong lá. Tác phẩm như một tập nhật ký xoay quanh cuộc sống của những đứa trẻ ở một vùng quê Việt Nam nghèo khó, nổi bật lên là thông điệp về tình anh em, tình làng nghĩa xóm và những tâm tư của tuổi mới lớn. Theo Nguyễn Nhật Ánh, đây là lần đầu tiên ông đưa vào truyện của mình những nhân vật phản diện, đặt ra vấn đề đạo đức như sự vô tâm hay cái ác.', '2010-12-09', 30000, 86, '/asset/img/h27.jpg', 14, 8),
(33, 'Chiến thắng con quỷ trong bạn', 'Được Napoleon Hill viết lần đầu vào năm 1938, cuốn sách “Chiến Thắng Con Quỷ Trong Bạn” (xuất bản năm 2011) vẫn là một bản thảo chưa bao giờ xuất bản trong hơn 70 năm. Được chỉnh sửa và chú thích nội dung bởi Sharon Lechter, người góp phần đưa tác phẩm đến gần hơn với bạn đọc, cuốn sách là một bản tóm tắt các lời khuyên chân thành về các phương pháp thành công trong cuộc sống. Giờ đây, độc giả có thể hiểu hơn về niềm tin cá nhân của Hill, những sức mạnh đang kìm hãm chúng ta có được một cuộc sống thành công và các nguyên tắc sẽ cho phép chúng ta vượt qua những sức mạnh đó.', NULL, 30000, 86, '/asset/img/h28.jpg', 15, 8),
(34, 'Hạt Giống Tâm Hồn', 'Bộ sách Hạt giống tâm hồn này gồm những câu chuyện có giá trị vĩnh hằng của cuộc sống, những câu chuyện chân tình, giản dị từ những con người bình dị đó sẽ giúp bạn cảm nhận, tìm lại được những giá trị của bản thân và ý nghĩa cuộc sống mà ta đã băng qua quá nhanh và vô tình lãng quên.<br/>\n            Ý nghĩa sâu sắc từ những câu chuyện ngắn này sẽ như một bàn tay xoa dịu tâm hồn, tiếp thêm nguồn động viên và sức mạnh giúp chúng ta có thể vượt qua những trở ngại tinh thần, những khó khăn thử thách trong cuộc sống để khẳng định mình, theo đuổi ước mơ và vươn đến những điều tốt đẹp hơn.', '2020-11-15', 30000, 86, '/asset/img/h29.jpg', 12, 8),
(35, 'Sống chậm', 'Trong cuốn sách Sống Chậm, tác giả Melanie Barnes giới thiệu đến chúng ta lối sống chậm rãi. Cuốn sách giống như một bản tóm tắt chi tiết về cách sống chậm.\n            Sống chậm là gì?\n            Sống chậm có ý nghĩa gì?\n            Những thách thức của thời đại lên lối sống này.\n            Sau cùng, tác giả sẽ có những hướng dẫn ngắn gọn, cực kỳ hiệu quả để chúng ta có thể sống chậm mỗi ngày. Bạn hoàn toàn có thể thực hành ngay tại nhà, trong từng việc bạn làm, mà không cần đến một chuyên gia nào.', NULL, 30000, 86, '/asset/img/h30.jpg', 16, 8),
(36, 'Đắc nhân tâm', 'Đắc nhân tâm (Được lòng người), tên tiếng Anh là How to Win Friends and Influence People là một quyển sách nhằm tự giúp bản thân (self-help) bán chạy nhất từ trước đến nay. Quyển sách này do Dale Carnegie viết và đã được xuất bản lần đầu vào năm 1936, nó đã được bán 15 triệu bản trên khắp thế giới. Nó cũng là quyển sách bán chạy nhất của New York Times trong 10 năm. Tác phẩm được đánh giá là cuốn sách đầu tiên và hay nhất trong thể loại này, có ảnh hưởng thay đổi cuộc đời đối với hàng triệu người trên thế giới.', '2020-11-15', 30000, 86, '/asset/img/h31.jpg', 17, 8),
(37, 'Khéo ăn nói sẽ được lòng thiên hạ', 'Xã hội hiện đại, từ xin việc đến thăng chức, từ tình yêu đến hôn nhân, từ giao lưu đến hợp tác… không việc gì không cần tài ăn nói.\n            Khéo ăn nói giống như sở hữu loại “dầu bôi trơn” đảm bảo các mối quan hệ của bạn “vận hành” trơn tru. Không khéo ăn nói, gặp chuyện nhỏ mắc trở ngại, gặp chuyện lớn vấp thất bại.\n            Làm thế nào để nói năng trôi chảy? Làm thế nào để nói lời “đi vào lòng người”? Trong những dịp khác nhau, với những người khác nhau, ở những tình huống không giống nhau… có cuốn sách này gợi ý, bạn sẽ thành người khéo ăn nói.', '2014-09-01', 30000, 86, '/asset/img/h32.jpg', 18, 8),
(38, 'Giận', 'Cuốn sách “Giận” gồm 11 phần và những bài thiền tập hướng dẫn chúng ta buông bỏ sân hận, dập tắt lửa giận, tiếng nói của yêu thương chân thật,…<br/>\n            Ngôn từ gẫn gũi, nhẹ nhàng và dễ đi sâu vào lòng người,.. cuốn sách “Giận” luôn nhận được sự phản hồi tích cực bởi những phương thức mà tác giả đưa ra trong sách khiến độc giả nhận ra rất nhiều bài học từ sự chữa lành hiệu quả.<br/>\n            Không phải ngẫu nhiên mà cuốn sách “Giận” được bán chạy ở Hoa Kỳ - 50.000 bản mỗi tuần, trong vòng 9 tháng kể từ ngày sách được xuất bản. Tại Hàn Quốc, sách cũng bán được 1 triệu bản trong vòng 11 tháng.<br/>\n            Đọc sách của Thiền sư Thích Nhất Hạnh, bạn đọc dần sẽ giác ngộ và sống đơn giản và trọn vẹn hơn.<br/>', '2001-09-10', 30000, 86, '/asset/img/h33.jpg', 19, 8),
(39, 'Hành Trình Nhân Loại', '“Hành trình nhân loại: Nguồn gốc của thịnh vượng và bất bình đẳng” được viết bởi Oded Galor – một trong những nhà kinh tế có ảnh hưởng nhất trong lĩnh vực tăng trưởng và phát triển. Ông được đánh giá là một ứng cử viên danh giá cho giải Nobel Kinh tế và là một trong những bộ óc xuất chúng của thế kỷ 21.<br/>\n            Kể từ khi xuất bản đầu tiên bằng tiếng Hebrew năm 2020, cuốn sách ngay lập tức trở thành tác phẩm bán chạy nhất tại Israel. Và chỉ trong vòng 3 tháng, tác phẩm đã bán được bản quyền cho hơn 20 quốc gia và 30 vùng lãnh thổ trên thế giới. Việt Nam chính thức là ngôn ngữ thứ 30 mua bản quyền của cuốn sách này, từ bản tiếng Anh có cập nhật và chỉnh sửa.', NULL, 30000, 86, '/asset/img/h35.jpg', 21, 8),
(40, 'Tâm lý học giải mã tình yêu', 'Có thể bạn nghĩ rằng mình không nhất thiết phải mua một cuốn sách dạy về tình yêu, bởi yêu là một phản ứng hoá học bất ngờ, chứ không phải một quyết định được tính toán trước. Thế nhưng, bạn đã nhầm! Cảm xúc yêu đương có thể đến từ bản năng tự nhiên nhưng việc hẹn hò thì không như vậy. Bạn không thể gặp một ai đó và biết ngay họ là người bạn đời phù hợp với mình. Những mối quan hệ tuyệt vời là đỉnh cao của một loạt các quyết định: hẹn hò với ai, làm thế nào để kết thúc mối quan hệ khi gặp sai người và khi nào thì cam kết với đúng người,… Nhưng đôi khi chính bộ não của chúng ta lại gây cản trở bằng cách đưa ra những quyết định sai lầm, dẫn đến việc hành trình tìm kiếm tình yêu dài lâu trở nên khó khăn.', '2022-11-01', 30000, 86, '/asset/img/h36.jpg', 22, 8),
(41, 'Gió thổi mùa trằng', 'Chính là đôi lời giới thiệu về quyển sách Gió Thổi Mùa Trăng Năm Ấy – được xuất bản lần đầu tiên bởi những giấc mơ thôi thúc tác giả Vạn Lý Độc Hành ( Đỗ Nguyễn Hoàng Dương ), khi nói rằng: “mình chỉ viết ra để giải tỏa những câu chuyện chất chứa trong lòng bấy lâu. Các nhân vật cứ nói chuyện với nhau trong bữa ăn giấc ngủ của mình, nên mình phải viết nó ra. Chỉ đơn giản là như vậy, chứ mình không có ý định dấn thân vào con đường văn chương.”', NULL, 30000, 86, '/asset/img/h38.jpg', 24, 8),
(42, 'Chìa khóa thành công', 'Trước khi “diễn đạt những ý tưởng cũ theo những cách mới” từ người thầy của mình, tác giả mong muốn bạn trang bị cho mình một “hệ thống chỉ dẫn” tốt bao gồm nhiều yếu tố. Thứ nhất là triết lí dùng suy nghĩ để căng buồm định hướng cho bản thân, không chờ đợi một hướng gió hay đổ lỗi cho những tác nhân bên ngoài, tất cả xuất phát từ chính bạn.', NULL, 30000, 86, '/asset/img/h39.jpg', 25, 8),
(43, 'Đừng lựa chọn an nhàn khi còn trẻ', 'Cuốn sách \"Đừng lựa chọn an nhàn khi còn trẻ” được phát hành bản Tiếng Việt vào tháng 9 năm 2019, chịu trách nhiệm bởi Nhà xuất bản Thế Giới.\n            Trong cuốn sách, tác giả Cảnh Thiên thẳng thắn chia sẻ những quan niệm, trải nghiệm mà bản thân có. Với văn phong nhẹ nhàng, tinh tế mà sâu sắc; với những câu chuyện bổ ích, chân thật và có tầm ảnh hưởng tích cực đến người đọc chắc hẳn bạn sẽ thấy đâu đó trong cuốn sách này đang tiềm ẩn một điều gì đó về bạn.', '2019-09-01', 30000, 86, '/asset/img/h40.jpg', 26, 8),
(44, 'Sức mạnh tình bạn', 'Thử thách khó khăn và quan trọng nhất của con người chính là sự tương tác trong mối quan hệ giữa người với người, mang tính xã hội hết sức phức tạp. Và khi chúng ta thất bại hay thành công trong một mối quan hệ nào đó cũng là lúc ta học được nhiều điều nhất, cũng như rút ra được những kinh nghiệm quý báu cho những mối quan hệ về sau.<br/>\n            Trong “tổ chức xã hội” ấy, có thể nói tình bạn chính là nhân tố trung tâm, ảnh hưởng vô cùng sâu rộng đến tất cả các mối quan hệ khác như bạn bè, vợ chồng, con cái, đồng nghiệp... Nếu biết cư xử khéo léo trong tình bạn thì chúng ta cũng sẽ biết cách thu hút người khác, xây dựng nhóm làm việc hiệu quả, nuôi dạy con cái, điều hòa quan hệ gia đình và gắn bó với ', NULL, 30000, 86, '/asset/img/h41.jpg', 27, 8),
(45, 'Sống hết minh cho ngày hôm nay', 'Sống Hết Mình Cho Ngày Hôm Nay - Cuốn sách lập kỷ lục với 30 vạn bản được bán ra trong vòng 1 năm. Sống Hết Mình Cho Ngày Hôm Nay sẽ giúp bạn tìm thấy chính mình giữa bộn bề của thế giới này, để từ đó biết sống hết mình cho hôm nay, thôi chấp niệm về quá khứ và lo lắng vô ích cho những điều chưa xảy ra ở tương lai. Với những giá trị giản dị mà sâu sắc, cuốn sách dễ dàng đi vào lòng bạn đọc và để lại nhiều dấu ấn tích cực.', NULL, 30000, 86, '/asset/img/h42.jpg', 28, 8),
(46, 'Hãy sống một cuộc đời như bạn muốn', 'Hãy sống cuộc đời như bạn muốn, cuốn sách kỹ năng của tác giả Pam Grout sẽ hướng dẫn bạn cách thay đổi thái độ, nắm bắt ý tưởng, và phát triển năng lực tiềm ẩn của bản thân để đạt đến tiềm năng thành công. Bằng cách nghĩ lớn, mơ lớn và đặt ra các câu hỏi lớn, mỗi người chúng ta chắc chắn sẽ tạo sự khác biệt trong cuộc sống của bản thân và những người xung quanh.<br/>\n            Chúng ta luôn luôn đặt ra cho bản thân câu hỏi rằng, làm thế nào để sống một cuộc sống như chúng ta mơ ước? Mà quên mất một thực tế rằng dù đau đáu về một cuộc sống như thế nhưng chúng ta vẫn đang quẩn quanh với những lịch trình hàng ngày, những việc làm nhàm chán đến mức gần như làm tê liệt ý chí vùng vẫy thoát ra khỏi nó. Chúng ta muốn sống khác nhưng vẫn dành quá nhiều thời gian xem tivi mỗi ngày, sa đà vào những bữa tiệc vui chơi quên ngày tháng, vẫn chấp nhận gắn bó với công việc mà mình không yêu thích, v.v… Vâng, để có một cuộc sống như mơ ước, việc bạn chỉ khao khát, thèm muốn và làm một vài hành động đơn lẻ thôi không đủ, bởi để sống khác cần đến sự tổng hòa của rất nhiều yếu tố.', '2014-06-20', 30000, 86, '/asset/img/h43.jpg', 29, 8),
(47, 'Bài học cuộc sống', 'Neil Armstrong mơ được đặt chân lên mặt trăng. Thomas Edison mơ tạo ra một nguồn sáng hoạt động đơn giản và ít tốn kém. Anh em nhà Wright mơ được cưỡi cỗ máy biết bay thần kỳ. Bill Gates mơ đến một ngày bàn làm việc nào cũng có một chiếc máy vi tính. Ước mơ to lớn của bạn là gì? Và bạn sẽ làm gì ngay từ hôm nay để biến ước mơ đó thành hiện thực?<br/>\n\n            Chuyện gì sẽ xảy ra nếu bạn gom góp tất cả các bài học quan trọng nhất về cuộc đời này mà bạn muốn con, cháu mình sẽ được học? Sẽ ra sao nếu bạn áp dụng những quy tắc thành công này vào cuộc sống?<br/>\n\n            Trong Bài Học Cuộc Sống, tác giả của nhiều cuốn sách best seller Brian Bartes chia sẻ những bài học quan trọng nhất về cuộc sống mà ông muốn chính bốn đứa con của mình học được. Dù bạn đang tìm kiếm chìa khóa thành công cho chính mình, hay một món quà cho người khác, thì cuốn sách chính là cuốn cẩm nang tuyệt vời để gây dựng một cuộc sống tươi đẹp.\n            ', NULL, 30000, 86, '/asset/img/h44.jpg', 30, 8),
(48, 'Thức Tỉnh Mục Đích Sống', 'Mục đích chính của “Thức tỉnh mục đích sống”  không phải là để cung cấp thêm thông tin hay những niềm tin mù quáng cho trí năng của bạn, hay cố thuyết phục bạn về một điều gì, mà nó mang đến cho bạn một sự chuyển hóa trong nhận thức, tức là thức tỉnh bạn ra khỏi những dòng suy nghĩ miên man ở trong đầu. Nếu được như vậy thì bạn sẽ không chỉ thấy cuốn sách là “thú vị”. Vì thú vị có nghĩa là bạn còn đứng ở bên ngoài, tìm vui với những ý nghĩ, và khái niệm ở trong đầu bạn để tư duy rằng mình đồng ý hay không nên đồng ý với cuốn sách. Vì “Thức tỉnh mục đích sống”  được viết cho bạn, do đó cuốn sách hoặc rất vô nghĩa đối với bạn, hoặc nó làm cho nhận thức của bạn có sự thay đổi lớn. Tuy nhiên cuốn sách này chỉ có thểthức tỉnh những người đã sẵn sàng để tỉnh thức. Mà không phải ai cũng sẵn sàng để tỉnh thức. Nếu trong lúc này bạn chưa rõ tỉnh thức có nghĩa là gì, thì bạn cũng không cần bận tâm nhiều về nghĩa của từ ấy, hãy cứ tiếp tục đọc và khi nào trong bạn có sự tỉnh thức, thì bạn sẽ hiểu “tỉnh thức” có nghĩa là gì. Quá trình tỉnh thức một khi đã bắt đầu ở trong bạn rồi thì không thể đảo ngược lại; và để cho quá trình này được bắt đầu, bạn chỉ cần trải qua trạng thái tỉnh thức - dù chỉ trong một thoáng chốc. Đối với một số người thì một thoáng chốc của trạng thái tỉnh thức đó sẽ xảy đến khi họ đọc cuốn sách này.', NULL, 30000, 86, '/asset/img/h45.jpg', 31, 8),
(49, 'Nếu chỉ còn một ngày để sống', '“Nếu chỉ còn một ngày để sống” (tựa gốc “Everything, Everything”) của tác giả Nicola Yoon là tiểu thuyết bán chạy số 1 trong 9 tháng liền, theo New York Times. Tác phẩm cũng đã được chuyển thể thành phim điện ảnh ra mắt tháng 5-2017.<br/>\n            Tại Việt Nam, sách được NXB Văn học phối hợp với Minbooks phát hành tháng 7-2017.<br/>\n            Madeline mắc hội chứng thiếu hụt miễn dịch tổ hợp trầm trọng (SCID), còn gọi “Hội chứng em bé bong bóng”. Căn bệnh khiến cô dị ứng với cả thế giới, bất cứ thứ gì cũng có thể gây bệnh. Madeline buộc phải sống trong một môi trường vô trùng, hoàn toàn cách ly, được chăm sóc tận tình bởi một cô y tá chuyên nghiệp và người mẹ là bác sĩ.', '2017-07-01', 30000, 86, '/asset/img/h46.jpg', 32, 8),
(50, 'Giới Hạn Của Bạn Chỉ Là Xuất Phát Điểm Của Tôi', 'Giới Hạn Của Bạn Chỉ Là Xuất Phát Điểm Của Tôi<br/>\n            Giới hạn là gì?<br/>\n            Giới hạn liệu có phải ranh giới an toàn của mỗi người?<br/>\n            Có lẽ không, giới hạn là để phá bỏ<br/>\n            Bởi giới hạn của bạn chỉ là xuất phát điểm của người khác.<br/>\n            Tôi tin rằng bạn có những ước mơ rất tuyệt vời, tôi cũng tin rằng bạn có thể thực hiện được nó. Nhưng ước mơ mà không hành động thì mãi mãi chỉ nằm trong mộng tưởng, hành trình dài mà không đi thì mãi mãi vẫn chẳng thể chạm đích. Giới hạn đặt ra để bứt phá, chứ không phải điểm tận cùng. Tôi hy vọng mỗi sáng đánh thức bạn dậy không phải là tiếng chuông đồng hồ mà là khát vọng lớn lao trong trái tim bạn.', '2018-07-07', 30000, 86, '/asset/img/h47.jpg', 33, 8),
(51, 'BẠN CHỈ CẦN SỐNG TỐT, TRỜI XANH TỰ AN BÀI', 'Chẳng phải có ai đó đã từng nói rằng: Trên đời này, ta thường quên mất việc của bản thân, thích xen vào việc của người khác và lo lắng chuyện của ông trời. Vậy thì muốn vui vẻ, chỉ cần để tâm đến việc của mình, đừng xen vào việc của người khác và hãy để trời xanh tự an bài.<br/>\n\n            Làm người, nên hiểu mệnh, đừng xem mệnh. Mệnh ở đây chính là những điều ta đã gieo trong quá khứ, việc đang làm trong hiện tại và tất cả sẽ ảnh hưởng đến tương lai. Hiểu mình là ai, đang đứng ở vị trí nào, cần sống và cư xử ra sao để trước hết thấy bản thân tự tại, trung dung. Thế giới của người khác, vận của trời, nếu không bước vào được thì đừng cố chen vào, làm khó người khó mình. Hà tất phải như vậy?', NULL, 30000, 86, '/asset/img/h48.jpg', 34, 8),
(52, 'Điều Ý Nghĩa Nhất Trong Từng Khoảnh Khắc Cuộc Đời', 'The One Thing - Điều Ý Nghĩa Nhất Trong Từng Khoảnh Khắc Cuộc Đời (Tái Bản 2018)<br/>\n            Bạn muốn ít sự sao nhãng. Bạn muốn ít sự lựa chọn. Hàng ngày, bạn phải trả lời cả đống email, tin nhắn qua điện thoại, tin nhắn trên internet khiến bạn sao nhãng và ức chế tâm lý nặng nề. Bạn luôn phải đáp ứng cùng lúc ít nhất hai vai trò. Khi đi làm, bạn phải là một nhân viên tốt, hoàn thành xuất sắc công việc, đồng thời khi tan sở về nhà, bạn phải trở thành người chồng/vợ, người cha/mẹ, người con tốt, hoàn thành nghĩa vụ với gia đình mình. Cái giá bạn phải trả là gì? Chất lượng công việc đi xuống, trễ deadline, lương thấp, không thăng tiến và ức chế nặng.', '2018-05-22', 30000, 86, '/asset/img/h49.jpg', 35, 8),
(53, 'Sống chậm mà chất', 'Tận hưởng cuộc sống qua từng khoảnh khắc.<br/>\n            Cuốn sách này sẽ không đưa đến cho bạn những khái niệm mới. Nó viết về những khái niệm đã trở nên quen thuộc trong suốt thời gian qua tại Việt Nam: sống chậm, sống tối giản, chánh niệm… Nó sẽ là góc nhìn và sự tổng hợp đến từ tác giả Brooke McAlary – người xếp hạng 1 trên bảng iTune Health Postcast của Apple năm 2016 với Postcast The Slow Home được hơn 1 triệu lượt tải về trên khắp thế giới.', '2020-01-01', 30000, 86, '/asset/img/h50.jpg', 36, 8),
(65, '123', '123', '2024-01-01', 120000, 2, 'uploads/book/65/Pj5d2IOYV2opSDNpD0GXRNW9FLuWL6P6vhDvoAbe.jpg', 10, 4),
(66, '456', '123', '2024-01-02', 1233, 15, 'uploads/book/66/pXTooiQ2opoGQsohEG8iiggjlZNVqXrPcdu1slrE.jpg', 15, 8),
(67, 'hihi', '789', '2024-01-04', 14568, 78, 'uploads/book/67/Pp2gGL0cavtwkReQc9yNYDi0nOTYxyrm25d6uqvv.jpg', 4, 2),
(68, '123', '4124', '2024-01-10', 58000, 456, 'upload/book/68/HWnsqxZK9pfUDWglcjejHIntVOhsUL37dPuUFH88.jpg', 16, 8);

-- --------------------------------------------------------

--
-- Table structure for table `carts`
--

CREATE TABLE `carts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `quantity` int(11) DEFAULT 0,
  `price` bigint(20) NOT NULL,
  `book_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `carts`
--

INSERT INTO `carts` (`id`, `quantity`, `price`, `book_id`, `user_id`) VALUES
(1, 0, 76000, 5, 1),
(2, 4, 12000, 11, 1),
(3, 0, 76000, 5, 2),
(4, 1, 30000, 26, 1),
(5, 0, 30000, 27, 1),
(6, 0, 30000, 28, 2),
(7, 0, 30000, 27, 2),
(8, 1, 30000, 27, 2),
(9, 1, 30000, 28, 2),
(10, 1, 30000, 28, 1);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `slug` varchar(50) NOT NULL,
  `description` text DEFAULT NULL,
  `discount_id` bigint(20) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `slug`, `description`, `discount_id`) VALUES
(1, 'Kỹ năng sống', 'ky-nang-song', 'Sách Kỹ năng sống là tập hợp các hành vi tích cực và khả năng thích nghi cho phép mỗi cá nhân đối phó hiệu quả với các nhu cầu và thách thức của cuộc sống hàng ngày', 1),
(2, 'Truyện Tranh', 'truyen-tranh', 'Truyện tranh hay mạn họa là một phương tiện được sử dụng để diễn đạt ý tưởng bằng hình ảnh, thường kết hợp với văn bản hoặc thông tin hình ảnh khác. Thông thường, nó có dạng một chuỗi các khung hình liên tiếp. Các yếu tố văn bản như ô bóng chữ, chú thích, và Từ tượng thanh có thể chỉ ra đối thoại, diễn đạt, hiệu ứng âm thanh hoặc thông tin khác', 2),
(3, 'Sách Giáo Khoa', 'sach-giao-khoa', 'SGK là loại sách cung cấp kiến thức, được biên soạn với mục đích dạy và học tại trường học[1][2]. Thuật ngữ sách giáo khoa còn có nghĩa mở rộng là một loại sách chuẩn cho một ngành học. Sách giáo khoa được phân loại dựa theo đối tượng sử dụng hoặc chủ đề của sách. Việc xuất bản sách giáo khoa thường dành cho các nhà xuất bản chuyên ngành.', 3),
(4, 'Sách Công Nghệ Thông Tin', 'sach-cong-nghe-thông-tin', 'Cung cấp cho người đọc những kiến thức về công nghệ thông tin ', 4),
(8, 'Tiểu thuyết', 'tieu-thuyet', 'Tiểu thuyết là một thể loại văn học dài, tập trung vào việc xây dựng câu chuyện và phát triển nhân vật. Đây là một hình thức tường thuật tường minh, cho phép tác giả khám phá và khắc họa sâu hơn về tâm lý, ý nghĩa và sự phát triển của các nhân vật và sự kiện trong câu chuyện.', 2);

-- --------------------------------------------------------

--
-- Table structure for table `favoritebooks`
--

CREATE TABLE `favoritebooks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `price` bigint(20) DEFAULT NULL,
  `book_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `favoritebooks`
--

INSERT INTO `favoritebooks` (`id`, `price`, `book_id`, `user_id`) VALUES
(1, 30000, 27, 1),
(2, 30000, 26, 1),
(3, 30000, 26, 2),
(18, 30000, 40, 2),
(19, 12000, 8, 2),
(20, 30000, 26, 2);

-- --------------------------------------------------------

--
-- Table structure for table `invoices`
--

CREATE TABLE `invoices` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `ShippingAddress` varchar(255) DEFAULT NULL,
  `ShippingPhone` varchar(50) DEFAULT NULL,
  `total` int(11) DEFAULT NULL,
  `quanlity` int(50) DEFAULT NULL,
  `status` varchar(50) DEFAULT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `invoice_details`
--

CREATE TABLE `invoice_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `quantity` int(50) DEFAULT NULL,
  `invoice_id` bigint(20) UNSIGNED NOT NULL,
  `book_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `OrderStatus` varchar(50) NOT NULL,
  `NameRecipient` varchar(50) NOT NULL,
  `RecipientPhone` varchar(10) NOT NULL,
  `invoices_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `promotional`
--

CREATE TABLE `promotional` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `discount` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `promotional`
--

INSERT INTO `promotional` (`id`, `discount`) VALUES
(1, 10),
(2, 20),
(3, 30),
(4, 40),
(5, 50);

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `Comment` text DEFAULT NULL,
  `rating` int(11) DEFAULT NULL,
  `book_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` varchar(200) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `phone` varchar(10) DEFAULT NULL,
  `role` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `address`, `password`, `phone`, `role`) VALUES
(1, 'Bảo Ngọc', 'bpbn11@gmail.com', 'Bình Phước', '', '0379699529', 1),
(2, 'Như Quỳnh', 'nhuquynh@gmail.com', 'Bình Định', '', '0913630913', 1),
(3, 'Tuấn Việt', 'tuanviet@gmail.com', 'Đắk Lắk', '', '0951264125', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `authors`
--
ALTER TABLE `authors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`id`),
  ADD KEY `books_author_id_foreign` (`author_id`),
  ADD KEY `books_categories_id_foreign` (`category_id`);

--
-- Indexes for table `carts`
--
ALTER TABLE `carts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `carts_book_id_foreign` (`book_id`),
  ADD KEY `carts_user_id_foreign` (`user_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_CATEGORIES_DISCOUNT` (`discount_id`);

--
-- Indexes for table `favoritebooks`
--
ALTER TABLE `favoritebooks`
  ADD PRIMARY KEY (`id`),
  ADD KEY `favoritebooks_book_id_foreign` (`book_id`),
  ADD KEY `favoritebooks_user_id_foreign` (`user_id`);

--
-- Indexes for table `invoices`
--
ALTER TABLE `invoices`
  ADD PRIMARY KEY (`id`),
  ADD KEY `invoices_user_id_foreign` (`user_id`);

--
-- Indexes for table `invoice_details`
--
ALTER TABLE `invoice_details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `invoice_details_invoice_id_foreign` (`invoice_id`),
  ADD KEY `invoice_details_book_id_foreign` (`book_id`);

--
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `payments_invoices_id_foreign` (`invoices_id`);

--
-- Indexes for table `promotional`
--
ALTER TABLE `promotional`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`id`),
  ADD KEY `reviews_book_id_foreign` (`book_id`),
  ADD KEY `reviews_user_id_foreign` (`user_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD UNIQUE KEY `users_phone_unique` (`phone`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `authors`
--
ALTER TABLE `authors`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;

--
-- AUTO_INCREMENT for table `carts`
--
ALTER TABLE `carts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `favoritebooks`
--
ALTER TABLE `favoritebooks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `invoices`
--
ALTER TABLE `invoices`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `invoice_details`
--
ALTER TABLE `invoice_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `promotional`
--
ALTER TABLE `promotional`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `books`
--
ALTER TABLE `books`
  ADD CONSTRAINT `books_author_id_foreign` FOREIGN KEY (`author_id`) REFERENCES `authors` (`id`),
  ADD CONSTRAINT `books_categories_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`);

--
-- Constraints for table `carts`
--
ALTER TABLE `carts`
  ADD CONSTRAINT `carts_book_id_foreign` FOREIGN KEY (`book_id`) REFERENCES `books` (`id`),
  ADD CONSTRAINT `carts_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `categories`
--
ALTER TABLE `categories`
  ADD CONSTRAINT `FK_CATEGORIES_DISCOUNT` FOREIGN KEY (`discount_id`) REFERENCES `promotional` (`id`);

--
-- Constraints for table `favoritebooks`
--
ALTER TABLE `favoritebooks`
  ADD CONSTRAINT `favoritebooks_book_id_foreign` FOREIGN KEY (`book_id`) REFERENCES `books` (`id`),
  ADD CONSTRAINT `favoritebooks_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `invoices`
--
ALTER TABLE `invoices`
  ADD CONSTRAINT `invoices_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `invoice_details`
--
ALTER TABLE `invoice_details`
  ADD CONSTRAINT `invoice_details_book_id_foreign` FOREIGN KEY (`book_id`) REFERENCES `books` (`id`),
  ADD CONSTRAINT `invoice_details_invoice_id_foreign` FOREIGN KEY (`invoice_id`) REFERENCES `invoices` (`id`);

--
-- Constraints for table `payments`
--
ALTER TABLE `payments`
  ADD CONSTRAINT `payments_invoices_id_foreign` FOREIGN KEY (`invoices_id`) REFERENCES `invoices` (`id`);

--
-- Constraints for table `reviews`
--
ALTER TABLE `reviews`
  ADD CONSTRAINT `reviews_book_id_foreign` FOREIGN KEY (`book_id`) REFERENCES `books` (`id`),
  ADD CONSTRAINT `reviews_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
