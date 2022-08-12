-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jul 16, 2022 at 03:21 PM
-- Server version: 5.7.26
-- PHP Version: 7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `nhanhuong`
--

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

DROP TABLE IF EXISTS `blogs`;
CREATE TABLE IF NOT EXISTS `blogs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `blog_title` varchar(256) NOT NULL,
  `blog_title_slug` varchar(256) NOT NULL,
  `blog_content` text NOT NULL,
  `blog_cat` varchar(30) NOT NULL,
  `blog_thumb` varchar(300) NOT NULL,
  `blog_author` int(11) DEFAULT NULL,
  `blog_status` int(1) NOT NULL DEFAULT '1',
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `deleted_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `blog_title`, `blog_title_slug`, `blog_content`, `blog_cat`, `blog_thumb`, `blog_author`, `blog_status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Thông tin ăn vặt ĐN', 'Thong-tin-an-vat-dn', 'Thông tin ăn vặt ĐN\r\n\r\nThông tin ăn vặt ĐN', '1,2', 'an-vat-da-nang.jpg', 1, 1, '2020-10-25 00:00:00', '2020-10-25 00:00:00', NULL),
(2, 'Cách làm bánh ngon', 'Cach-lam-banh-ngon', '<p>\r\nCùng thực hiện làm bánh bột lọc với công thức siêu nhanh và siêu đơn giản dưới đây sẽ giúp bạn tiết kiệm tối đa thời gian và công sức mà vẫn có một đĩa bánh bột lọc ngon chiêu đãi gia đình và bạn bè.</p>\r\n<p><img title=\"cach-lam-banh-bot-loc\" src=\"../images/blogs_img/cach-lam-banh-bot-loc-1.jpg\" /></p>\r\n<p>\r\nNguyên liệu làm bánh bột lọc:\r\n\r\n- 400gr bột năng\r\n\r\n- 200gr tôm\r\n\r\n- 200gr thịt ba chỉ\r\n\r\n- tỏi,ớt bột,ớt quả,hành lá\r\n\r\n- Đường, bột nêm, dầu ăn, mắm, muối.</p>\r\n\r\n<p>Các bước thực hiện làm bánh bột lọc:\r\n\r\n- Thịt ba chỉ xắt hạt lựu.\r\n\r\n- Tôm dùng loại có vỏ hoặc không có vỏ đều được.(nếu tốm to không vỏ cắt làm đôi hoặc làm 3).\r\n\r\nƯớp tôm với hành tỏi băm,1/2 thìa cà phê hạt tiêu,1 thìa cà phê bột nêm và 1 thìa cà phê muối. Sau đó trộn đều và để gia vị ngấm trong 10 phút.\r\n\r\nThịt ba chỉ cũng ướp giống tôm nhưng cho thêm chút ớt bột cho có màu đẹp.\r\n\r\nCho dầu ăn vào chảo, phi thơm hành tỏi băm, cho thịt vào xào,cho thêm một thìa canh đường và rim thịt trong 15p. Sau đó cho tôm vào rim cùng thịt. Lúc này có thể nêm nếm gia vị cho vừa miệng, rim thêm khoảng 10-15p nữa là xong.</p>\r\n\r\n<p><img title=\"cach-lam-banh-bot-loc\" src=\"../images/blogs_img/cach-lam-banh-bot-loc-2.jpg\" /></p>\r\n\r\n<p>Công đoạn nhồi bột:\r\n\r\nCách làm bánh bột lọc siêu nhanh, siêu đơn giản - 2\r\n\r\nLấy 250gr bột năng cho vào một cái bát riêng (A). Chỗ còn lại cho sang một cái bát khác to hơn(B).</p>\r\n\r\n<p>Lấy 250ml nước sôi đổ vào bát bột nhỏ (A), lúc này bột bắt đầu hơi trong,để nguội chút rồi đem trộn với chỗ bột còn lại ở bát to hơn (B), sau đó nhồi, nhồi đến khi nào bột mịn và không dính tay là được (lưu ý khi mới đổ nước sôi vào bát bột A các bạn dùng thìa to khuấy đều một lúc cho bột bớt nóng rồi mới đổ bột từ bát A sang bát B nhé, lúc này bột sẽ vẫn rất nong nên cứ tiếp tục dùng thìa quấy đều một lúc mới dùng tay nhào).</p>\r\n\r\n<p>Cách làm bánh bột lọc siêu nhanh, siêu đơn giản - 3\r\n\r\nBọc bột vào một cái túi nilong để chánh bột bị khô. Lấy miếng bột ra véo bột nhỏ bằng ngón tay, vo tròn lại để cho bánh đều tay hơn, sau đó lại cất vào túi nilon.\r\n\r\nCách làm bánh bột lọc siêu nhanh, siêu đơn giản - 4\r\n\r\nẤn dẹt miếng bột cho một miếng tôm và một miếng thịt vào giữa, gấp mép lại với nhau cho khít. Lưu ý chỉ gấp phần mép không gấp phần có tôm thịt. Nên làm nhiều bánh một chút để tủ đá ăn dần, mỗi khi muốn ăn chỉ mang ra luộc ăn.\r\n\r\nĐun sôi nồi nước thả bánh vào luộc trong 10p, khi nào bánh nổi lên thì vớt ra một cái bát có đựng nước lạnh, khi bánh vào nước lạnh bánh sẽ trong hơn.Vớt bánh ra trộn mỡ hành cho khỏi dính.</p>\r\n\r\n<p>Cách làm bánh bột lọc siêu nhanh, siêu đơn giản - 5\r\n\r\nMột số lưu ý khi làm bánh bột lọc:\r\n\r\nCách làm bánh bột lọc siêu nhanh, siêu đơn giản - 6\r\n\r\n- Bánh bột lọc gói lá và hấp sẽ ngon hơn bánh bột lọc luộc, tuy nhiên nếu không có điều kiện kiếm lá gói bánh thì bạn cũng có thể thực hiện làm bánh không lá luộc cũng rất ngon.</p>\r\n\r\n<p>Có thể làm nhiều một lần rồi bảo quản ngăn đá, khi ăn bạn chỉ cần lấy bánh và luộc là xong.\r\n\r\n- Nếu bạn thấy nhồi bột quá khó bạn có thể pha loãng bột rồi đổ vào thìa hoặc bát để hấp.\r\n\r\n- Công thức của người Huế làm bằng bột sắn lọc chứ không phải bột năng. Nhân chị làm bằng thịt nạc vai và tôm đồng. Lúc quấy bột có cho dầu để khi chín không bị dính vào lá.\r\n                            </p>', '2', 'cach-lam-banh-bot-loc-1.jpg', 1, 1, '2020-10-26 00:00:00', '2020-10-26 00:00:00', NULL),
(3, 'Top Nhà hàng xịn', 'To-nha-hang-xin', 'Top Nhà hàng xịn\r\n\r\nTop Nhà hàng xịn', '1', 'an-vat-da-nang.jpg', 1, 1, '2020-10-26 00:00:00', '2020-10-26 00:00:00', '2020-10-26 00:00:00'),
(4, 'Cách làm bánh ngon 2', 'Cach-lam-banh-ngon-2', '<p>\r\n2 Cùng thực hiện làm bánh bột lọc với công thức siêu nhanh và siêu đơn giản dưới đây sẽ giúp bạn tiết kiệm tối đa thời gian và công sức mà vẫn có một đĩa bánh bột lọc ngon chiêu đãi gia đình và bạn bè.</p>\r\n<p><img title=\"cach-lam-banh-bot-loc\" src=\"../images/blogs_img/cach-lam-banh-bot-loc-1.jpg\" /></p>\r\n<p>\r\nNguyên liệu làm bánh bột lọc:\r\n\r\n- 400gr bột năng\r\n\r\n- 200gr tôm\r\n\r\n- 200gr thịt ba chỉ\r\n\r\n- tỏi,ớt bột,ớt quả,hành lá\r\n\r\n- Đường, bột nêm, dầu ăn, mắm, muối.</p>\r\n\r\n<p>Các bước thực hiện làm bánh bột lọc:\r\n\r\n- Thịt ba chỉ xắt hạt lựu.\r\n\r\n- Tôm dùng loại có vỏ hoặc không có vỏ đều được.(nếu tốm to không vỏ cắt làm đôi hoặc làm 3).\r\n\r\nƯớp tôm với hành tỏi băm,1/2 thìa cà phê hạt tiêu,1 thìa cà phê bột nêm và 1 thìa cà phê muối. Sau đó trộn đều và để gia vị ngấm trong 10 phút.\r\n\r\nThịt ba chỉ cũng ướp giống tôm nhưng cho thêm chút ớt bột cho có màu đẹp.\r\n\r\nCho dầu ăn vào chảo, phi thơm hành tỏi băm, cho thịt vào xào,cho thêm một thìa canh đường và rim thịt trong 15p. Sau đó cho tôm vào rim cùng thịt. Lúc này có thể nêm nếm gia vị cho vừa miệng, rim thêm khoảng 10-15p nữa là xong.</p>\r\n\r\n<p><img title=\"cach-lam-banh-bot-loc\" src=\"../images/blogs_img/cach-lam-banh-bot-loc-2.jpg\" /></p>\r\n\r\n<p>Công đoạn nhồi bột:\r\n\r\nCách làm bánh bột lọc siêu nhanh, siêu đơn giản - 2\r\n\r\nLấy 250gr bột năng cho vào một cái bát riêng (A). Chỗ còn lại cho sang một cái bát khác to hơn(B).</p>\r\n\r\n<p>Lấy 250ml nước sôi đổ vào bát bột nhỏ (A), lúc này bột bắt đầu hơi trong,để nguội chút rồi đem trộn với chỗ bột còn lại ở bát to hơn (B), sau đó nhồi, nhồi đến khi nào bột mịn và không dính tay là được (lưu ý khi mới đổ nước sôi vào bát bột A các bạn dùng thìa to khuấy đều một lúc cho bột bớt nóng rồi mới đổ bột từ bát A sang bát B nhé, lúc này bột sẽ vẫn rất nong nên cứ tiếp tục dùng thìa quấy đều một lúc mới dùng tay nhào).</p>\r\n\r\n<p>Cách làm bánh bột lọc siêu nhanh, siêu đơn giản - 3\r\n\r\nBọc bột vào một cái túi nilong để chánh bột bị khô. Lấy miếng bột ra véo bột nhỏ bằng ngón tay, vo tròn lại để cho bánh đều tay hơn, sau đó lại cất vào túi nilon.\r\n\r\nCách làm bánh bột lọc siêu nhanh, siêu đơn giản - 4\r\n\r\nẤn dẹt miếng bột cho một miếng tôm và một miếng thịt vào giữa, gấp mép lại với nhau cho khít. Lưu ý chỉ gấp phần mép không gấp phần có tôm thịt. Nên làm nhiều bánh một chút để tủ đá ăn dần, mỗi khi muốn ăn chỉ mang ra luộc ăn.\r\n\r\nĐun sôi nồi nước thả bánh vào luộc trong 10p, khi nào bánh nổi lên thì vớt ra một cái bát có đựng nước lạnh, khi bánh vào nước lạnh bánh sẽ trong hơn.Vớt bánh ra trộn mỡ hành cho khỏi dính.</p>\r\n\r\n<p>Cách làm bánh bột lọc siêu nhanh, siêu đơn giản - 5\r\n\r\nMột số lưu ý khi làm bánh bột lọc:\r\n\r\nCách làm bánh bột lọc siêu nhanh, siêu đơn giản - 6\r\n\r\n- Bánh bột lọc gói lá và hấp sẽ ngon hơn bánh bột lọc luộc, tuy nhiên nếu không có điều kiện kiếm lá gói bánh thì bạn cũng có thể thực hiện làm bánh không lá luộc cũng rất ngon.</p>\r\n\r\n<p>Có thể làm nhiều một lần rồi bảo quản ngăn đá, khi ăn bạn chỉ cần lấy bánh và luộc là xong.\r\n\r\n- Nếu bạn thấy nhồi bột quá khó bạn có thể pha loãng bột rồi đổ vào thìa hoặc bát để hấp.\r\n\r\n- Công thức của người Huế làm bằng bột sắn lọc chứ không phải bột năng. Nhân chị làm bằng thịt nạc vai và tôm đồng. Lúc quấy bột có cho dầu để khi chín không bị dính vào lá.\r\n                            </p>', '2', 'cach-lam-banh-bot-loc-2.jpg', 1, 1, '2020-10-26 00:00:00', '2022-02-27 16:22:13', NULL),
(5, 'Cách làm bánh ngon 3', 'Cach-lam-banh-ngon-3', '<p>\r\n3 Cùng thực hiện làm bánh bột lọc với công thức siêu nhanh và siêu đơn giản dưới đây sẽ giúp bạn tiết kiệm tối đa thời gian và công sức mà vẫn có một đĩa bánh bột lọc ngon chiêu đãi gia đình và bạn bè.</p>\r\n<p><img title=\"cach-lam-banh-bot-loc\" src=\"../images/blogs_img/cach-lam-banh-bot-loc-1.jpg\" /></p>\r\n<p>\r\nNguyên liệu làm bánh bột lọc:\r\n\r\n- 400gr bột năng\r\n\r\n- 200gr tôm\r\n\r\n- 200gr thịt ba chỉ\r\n\r\n- tỏi,ớt bột,ớt quả,hành lá\r\n\r\n- Đường, bột nêm, dầu ăn, mắm, muối.</p>\r\n\r\n<p>Các bước thực hiện làm bánh bột lọc:\r\n\r\n- Thịt ba chỉ xắt hạt lựu.\r\n\r\n- Tôm dùng loại có vỏ hoặc không có vỏ đều được.(nếu tốm to không vỏ cắt làm đôi hoặc làm 3).\r\n\r\nƯớp tôm với hành tỏi băm,1/2 thìa cà phê hạt tiêu,1 thìa cà phê bột nêm và 1 thìa cà phê muối. Sau đó trộn đều và để gia vị ngấm trong 10 phút.\r\n\r\nThịt ba chỉ cũng ướp giống tôm nhưng cho thêm chút ớt bột cho có màu đẹp.\r\n\r\nCho dầu ăn vào chảo, phi thơm hành tỏi băm, cho thịt vào xào,cho thêm một thìa canh đường và rim thịt trong 15p. Sau đó cho tôm vào rim cùng thịt. Lúc này có thể nêm nếm gia vị cho vừa miệng, rim thêm khoảng 10-15p nữa là xong.</p>\r\n\r\n<p><img title=\"cach-lam-banh-bot-loc\" src=\"../images/blogs_img/cach-lam-banh-bot-loc-2.jpg\" /></p>\r\n\r\n<p>Công đoạn nhồi bột:\r\n\r\nCách làm bánh bột lọc siêu nhanh, siêu đơn giản - 2\r\n\r\nLấy 250gr bột năng cho vào một cái bát riêng (A). Chỗ còn lại cho sang một cái bát khác to hơn(B).</p>\r\n\r\n<p>Lấy 250ml nước sôi đổ vào bát bột nhỏ (A), lúc này bột bắt đầu hơi trong,để nguội chút rồi đem trộn với chỗ bột còn lại ở bát to hơn (B), sau đó nhồi, nhồi đến khi nào bột mịn và không dính tay là được (lưu ý khi mới đổ nước sôi vào bát bột A các bạn dùng thìa to khuấy đều một lúc cho bột bớt nóng rồi mới đổ bột từ bát A sang bát B nhé, lúc này bột sẽ vẫn rất nong nên cứ tiếp tục dùng thìa quấy đều một lúc mới dùng tay nhào).</p>\r\n\r\n<p>Cách làm bánh bột lọc siêu nhanh, siêu đơn giản - 3\r\n\r\nBọc bột vào một cái túi nilong để chánh bột bị khô. Lấy miếng bột ra véo bột nhỏ bằng ngón tay, vo tròn lại để cho bánh đều tay hơn, sau đó lại cất vào túi nilon.\r\n\r\nCách làm bánh bột lọc siêu nhanh, siêu đơn giản - 4\r\n\r\nẤn dẹt miếng bột cho một miếng tôm và một miếng thịt vào giữa, gấp mép lại với nhau cho khít. Lưu ý chỉ gấp phần mép không gấp phần có tôm thịt. Nên làm nhiều bánh một chút để tủ đá ăn dần, mỗi khi muốn ăn chỉ mang ra luộc ăn.\r\n\r\nĐun sôi nồi nước thả bánh vào luộc trong 10p, khi nào bánh nổi lên thì vớt ra một cái bát có đựng nước lạnh, khi bánh vào nước lạnh bánh sẽ trong hơn.Vớt bánh ra trộn mỡ hành cho khỏi dính.</p>\r\n\r\n<p>Cách làm bánh bột lọc siêu nhanh, siêu đơn giản - 5\r\n\r\nMột số lưu ý khi làm bánh bột lọc:\r\n\r\nCách làm bánh bột lọc siêu nhanh, siêu đơn giản - 6\r\n\r\n- Bánh bột lọc gói lá và hấp sẽ ngon hơn bánh bột lọc luộc, tuy nhiên nếu không có điều kiện kiếm lá gói bánh thì bạn cũng có thể thực hiện làm bánh không lá luộc cũng rất ngon.</p>\r\n\r\n<p>Có thể làm nhiều một lần rồi bảo quản ngăn đá, khi ăn bạn chỉ cần lấy bánh và luộc là xong.\r\n\r\n- Nếu bạn thấy nhồi bột quá khó bạn có thể pha loãng bột rồi đổ vào thìa hoặc bát để hấp.\r\n\r\n- Công thức của người Huế làm bằng bột sắn lọc chứ không phải bột năng. Nhân chị làm bằng thịt nạc vai và tôm đồng. Lúc quấy bột có cho dầu để khi chín không bị dính vào lá.\r\n                            </p>', '2', 'cach-lam-banh-bot-loc-3.jpg', 1, 1, '2020-10-26 00:00:00', '2020-10-26 00:00:00', NULL),
(6, 'Cách làm bánh ngon 4', 'Cach-lam-banh-ngon-4', '<p>\r\nCùng thực hiện làm bánh bột lọc với công thức siêu nhanh và siêu đơn giản dưới đây sẽ giúp bạn tiết kiệm tối đa thời gian và công sức mà vẫn có một đĩa bánh bột lọc ngon chiêu đãi gia đình và bạn bè.</p>\r\n<p><img title=\"cach-lam-banh-bot-loc\" src=\"../images/blogs_img/cach-lam-banh-bot-loc-1.jpg\" /></p>\r\n<p>\r\nNguyên liệu làm bánh bột lọc:\r\n\r\n- 400gr bột năng\r\n\r\n- 200gr tôm\r\n\r\n- 200gr thịt ba chỉ\r\n\r\n- tỏi,ớt bột,ớt quả,hành lá\r\n\r\n- Đường, bột nêm, dầu ăn, mắm, muối.</p>\r\n\r\n<p>Các bước thực hiện làm bánh bột lọc:\r\n\r\n- Thịt ba chỉ xắt hạt lựu.\r\n\r\n- Tôm dùng loại có vỏ hoặc không có vỏ đều được.(nếu tốm to không vỏ cắt làm đôi hoặc làm 3).\r\n\r\nƯớp tôm với hành tỏi băm,1/2 thìa cà phê hạt tiêu,1 thìa cà phê bột nêm và 1 thìa cà phê muối. Sau đó trộn đều và để gia vị ngấm trong 10 phút.\r\n\r\nThịt ba chỉ cũng ướp giống tôm nhưng cho thêm chút ớt bột cho có màu đẹp.\r\n\r\nCho dầu ăn vào chảo, phi thơm hành tỏi băm, cho thịt vào xào,cho thêm một thìa canh đường và rim thịt trong 15p. Sau đó cho tôm vào rim cùng thịt. Lúc này có thể nêm nếm gia vị cho vừa miệng, rim thêm khoảng 10-15p nữa là xong.</p>\r\n\r\n<p><img title=\"cach-lam-banh-bot-loc\" src=\"../images/blogs_img/cach-lam-banh-bot-loc-2.jpg\" /></p>\r\n\r\n<p>Công đoạn nhồi bột:\r\n\r\nCách làm bánh bột lọc siêu nhanh, siêu đơn giản - 2\r\n\r\nLấy 250gr bột năng cho vào một cái bát riêng (A). Chỗ còn lại cho sang một cái bát khác to hơn(B).</p>\r\n\r\n<p>Lấy 250ml nước sôi đổ vào bát bột nhỏ (A), lúc này bột bắt đầu hơi trong,để nguội chút rồi đem trộn với chỗ bột còn lại ở bát to hơn (B), sau đó nhồi, nhồi đến khi nào bột mịn và không dính tay là được (lưu ý khi mới đổ nước sôi vào bát bột A các bạn dùng thìa to khuấy đều một lúc cho bột bớt nóng rồi mới đổ bột từ bát A sang bát B nhé, lúc này bột sẽ vẫn rất nong nên cứ tiếp tục dùng thìa quấy đều một lúc mới dùng tay nhào).</p>\r\n\r\n<p>Cách làm bánh bột lọc siêu nhanh, siêu đơn giản - 3\r\n\r\nBọc bột vào một cái túi nilong để chánh bột bị khô. Lấy miếng bột ra véo bột nhỏ bằng ngón tay, vo tròn lại để cho bánh đều tay hơn, sau đó lại cất vào túi nilon.\r\n\r\nCách làm bánh bột lọc siêu nhanh, siêu đơn giản - 4\r\n\r\nẤn dẹt miếng bột cho một miếng tôm và một miếng thịt vào giữa, gấp mép lại với nhau cho khít. Lưu ý chỉ gấp phần mép không gấp phần có tôm thịt. Nên làm nhiều bánh một chút để tủ đá ăn dần, mỗi khi muốn ăn chỉ mang ra luộc ăn.\r\n\r\nĐun sôi nồi nước thả bánh vào luộc trong 10p, khi nào bánh nổi lên thì vớt ra một cái bát có đựng nước lạnh, khi bánh vào nước lạnh bánh sẽ trong hơn.Vớt bánh ra trộn mỡ hành cho khỏi dính.</p>\r\n\r\n<p>Cách làm bánh bột lọc siêu nhanh, siêu đơn giản - 5\r\n\r\nMột số lưu ý khi làm bánh bột lọc:\r\n\r\nCách làm bánh bột lọc siêu nhanh, siêu đơn giản - 6\r\n\r\n- Bánh bột lọc gói lá và hấp sẽ ngon hơn bánh bột lọc luộc, tuy nhiên nếu không có điều kiện kiếm lá gói bánh thì bạn cũng có thể thực hiện làm bánh không lá luộc cũng rất ngon.</p>\r\n\r\n<p>Có thể làm nhiều một lần rồi bảo quản ngăn đá, khi ăn bạn chỉ cần lấy bánh và luộc là xong.\r\n\r\n- Nếu bạn thấy nhồi bột quá khó bạn có thể pha loãng bột rồi đổ vào thìa hoặc bát để hấp.\r\n\r\n- Công thức của người Huế làm bằng bột sắn lọc chứ không phải bột năng. Nhân chị làm bằng thịt nạc vai và tôm đồng. Lúc quấy bột có cho dầu để khi chín không bị dính vào lá.\r\n                            </p>', '2', 'cach-lam-banh-bot-loc-4.jpg', 1, 1, '2020-10-26 00:00:00', '2020-10-26 00:00:00', NULL),
(7, 'Cách làm bánh ngon 5', 'Cach-lam-banh-ngon-5', '<p>\r\nCùng thực hiện làm bánh bột lọc với công thức siêu nhanh và siêu đơn giản dưới đây sẽ giúp bạn tiết kiệm tối đa thời gian và công sức mà vẫn có một đĩa bánh bột lọc ngon chiêu đãi gia đình và bạn bè.</p>\r\n<p><img title=\"cach-lam-banh-bot-loc\" src=\"../images/blogs_img/cach-lam-banh-bot-loc-1.jpg\" /></p>\r\n<p>\r\nNguyên liệu làm bánh bột lọc:\r\n\r\n- 400gr bột năng\r\n\r\n- 200gr tôm\r\n\r\n- 200gr thịt ba chỉ\r\n\r\n- tỏi,ớt bột,ớt quả,hành lá\r\n\r\n- Đường, bột nêm, dầu ăn, mắm, muối.</p>\r\n\r\n<p>Các bước thực hiện làm bánh bột lọc:\r\n\r\n- Thịt ba chỉ xắt hạt lựu.\r\n\r\n- Tôm dùng loại có vỏ hoặc không có vỏ đều được.(nếu tốm to không vỏ cắt làm đôi hoặc làm 3).\r\n\r\nƯớp tôm với hành tỏi băm,1/2 thìa cà phê hạt tiêu,1 thìa cà phê bột nêm và 1 thìa cà phê muối. Sau đó trộn đều và để gia vị ngấm trong 10 phút.\r\n\r\nThịt ba chỉ cũng ướp giống tôm nhưng cho thêm chút ớt bột cho có màu đẹp.\r\n\r\nCho dầu ăn vào chảo, phi thơm hành tỏi băm, cho thịt vào xào,cho thêm một thìa canh đường và rim thịt trong 15p. Sau đó cho tôm vào rim cùng thịt. Lúc này có thể nêm nếm gia vị cho vừa miệng, rim thêm khoảng 10-15p nữa là xong.</p>\r\n\r\n<p><img title=\"cach-lam-banh-bot-loc\" src=\"../images/blogs_img/cach-lam-banh-bot-loc-2.jpg\" /></p>\r\n\r\n<p>Công đoạn nhồi bột:\r\n\r\nCách làm bánh bột lọc siêu nhanh, siêu đơn giản - 2\r\n\r\nLấy 250gr bột năng cho vào một cái bát riêng (A). Chỗ còn lại cho sang một cái bát khác to hơn(B).</p>\r\n\r\n<p>Lấy 250ml nước sôi đổ vào bát bột nhỏ (A), lúc này bột bắt đầu hơi trong,để nguội chút rồi đem trộn với chỗ bột còn lại ở bát to hơn (B), sau đó nhồi, nhồi đến khi nào bột mịn và không dính tay là được (lưu ý khi mới đổ nước sôi vào bát bột A các bạn dùng thìa to khuấy đều một lúc cho bột bớt nóng rồi mới đổ bột từ bát A sang bát B nhé, lúc này bột sẽ vẫn rất nong nên cứ tiếp tục dùng thìa quấy đều một lúc mới dùng tay nhào).</p>\r\n\r\n<p>Cách làm bánh bột lọc siêu nhanh, siêu đơn giản - 3\r\n\r\nBọc bột vào một cái túi nilong để chánh bột bị khô. Lấy miếng bột ra véo bột nhỏ bằng ngón tay, vo tròn lại để cho bánh đều tay hơn, sau đó lại cất vào túi nilon.\r\n\r\nCách làm bánh bột lọc siêu nhanh, siêu đơn giản - 4\r\n\r\nẤn dẹt miếng bột cho một miếng tôm và một miếng thịt vào giữa, gấp mép lại với nhau cho khít. Lưu ý chỉ gấp phần mép không gấp phần có tôm thịt. Nên làm nhiều bánh một chút để tủ đá ăn dần, mỗi khi muốn ăn chỉ mang ra luộc ăn.\r\n\r\nĐun sôi nồi nước thả bánh vào luộc trong 10p, khi nào bánh nổi lên thì vớt ra một cái bát có đựng nước lạnh, khi bánh vào nước lạnh bánh sẽ trong hơn.Vớt bánh ra trộn mỡ hành cho khỏi dính.</p>\r\n\r\n<p>Cách làm bánh bột lọc siêu nhanh, siêu đơn giản - 5\r\n\r\nMột số lưu ý khi làm bánh bột lọc:\r\n\r\nCách làm bánh bột lọc siêu nhanh, siêu đơn giản - 6\r\n\r\n- Bánh bột lọc gói lá và hấp sẽ ngon hơn bánh bột lọc luộc, tuy nhiên nếu không có điều kiện kiếm lá gói bánh thì bạn cũng có thể thực hiện làm bánh không lá luộc cũng rất ngon.</p>\r\n\r\n<p>Có thể làm nhiều một lần rồi bảo quản ngăn đá, khi ăn bạn chỉ cần lấy bánh và luộc là xong.\r\n\r\n- Nếu bạn thấy nhồi bột quá khó bạn có thể pha loãng bột rồi đổ vào thìa hoặc bát để hấp.\r\n\r\n- Công thức của người Huế làm bằng bột sắn lọc chứ không phải bột năng. Nhân chị làm bằng thịt nạc vai và tôm đồng. Lúc quấy bột có cho dầu để khi chín không bị dính vào lá.\r\n                            </p>', '2', 'cach-lam-banh-bot-loc-1.jpg', 1, 1, '2020-10-26 00:00:00', '2020-10-26 00:00:00', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `blogs_cat`
--

DROP TABLE IF EXISTS `blogs_cat`;
CREATE TABLE IF NOT EXISTS `blogs_cat` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `blogs_cat_name` varchar(256) NOT NULL,
  `blogs_cat_order` int(11) DEFAULT NULL,
  `blogs_cat_status` int(11) DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `blogs_cat`
--

INSERT INTO `blogs_cat` (`id`, `blogs_cat_name`, `blogs_cat_order`, `blogs_cat_status`) VALUES
(1, 'Thông tin Ẩm thực', 1, 0),
(2, 'Hướng dẫn', 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `customerorder`
--

DROP TABLE IF EXISTS `customerorder`;
CREATE TABLE IF NOT EXISTS `customerorder` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `customer_name` varchar(200) DEFAULT NULL,
  `customer_tel` varchar(20) NOT NULL,
  `customer_addr` text NOT NULL,
  `customer_id` varchar(11) DEFAULT NULL,
  `order_price` int(11) DEFAULT NULL,
  `order_status` int(11) DEFAULT '0',
  `order_note` varchar(500) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `deleted_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=23 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `customerorder`
--

INSERT INTO `customerorder` (`id`, `customer_name`, `customer_tel`, `customer_addr`, `customer_id`, `order_price`, `order_status`, `order_note`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'andjfn 1', '1232334', 'fmgkkbgj 123', NULL, NULL, 0, 'fmfgmgk', '2020-12-26 08:46:18', '2022-01-24 16:49:56', NULL),
(2, 'Trần Nguyễn Gia Hân 2', '4545565', 'vbvfgbg', NULL, NULL, 1, 'vdfdf', '2020-12-05 07:50:29', '2020-12-05 07:50:29', NULL),
(3, NULL, '2333', 'ggffv', NULL, NULL, 0, 'dgvbbfsf á à', '2020-12-05 07:49:40', '2020-12-26 10:00:00', '2020-12-26 10:00:00'),
(4, NULL, '01222', 'dd', NULL, NULL, 0, 'cxxxx', '2020-12-05 07:28:54', '2020-12-05 07:28:54', '2020-12-05 07:28:54'),
(5, 'andjfn 3', '1232334', 'fmgkkbgj', NULL, NULL, 0, 'fmfgmgk', '2020-12-26 08:50:43', '2020-12-26 08:50:43', NULL),
(6, 'Đạt 4', '123123123', 'Đà nãng, jjj', '36', NULL, 0, 'abcfegg', '2020-12-26 10:07:37', '2020-12-26 10:07:37', NULL),
(7, 'Nguyên Thị 5', '1222122112', 'HCM city, q3', '37', NULL, 0, 'fhfhgfjgjffjf', '2020-12-26 10:10:08', '2020-12-26 10:26:59', NULL),
(8, 'aa 6', '01222', 'dd', '38', NULL, 0, 'vvv', '2021-01-23 14:26:06', '2022-01-29 16:19:14', NULL),
(9, 'cvcvc 7', '04228247', 'dcđ', '39', NULL, 0, 'cdc', '2021-11-21 00:35:00', '2021-11-21 00:35:00', NULL),
(10, 'andjfn 8', '1232334', 'fmgkkbgj 123', NULL, NULL, 0, 'fmfgmgk', '2020-12-26 08:46:18', '2020-12-26 10:00:48', NULL),
(11, NULL, '2333', 'ggffv', NULL, NULL, 0, 'dgvbbfsf á à', '2020-12-05 07:49:40', '2020-12-26 10:00:00', '2020-12-26 10:00:00'),
(12, 'Đạt 9', '123123123', 'Đà nãng, jjj', '36', NULL, 0, 'abcfegg', '2020-12-26 10:07:37', '2020-12-26 10:07:37', NULL),
(13, 'Nguyên Thị 10', '1222122112', 'HCM city, q3', '37', NULL, 0, 'fhfhgfjgjffjf', '2020-12-26 10:10:08', '2020-12-26 10:26:59', NULL),
(14, 'aa 11', '01222', 'dd', '38', NULL, 0, 'cxxxx', '2021-01-23 14:26:06', '2021-01-23 14:26:06', NULL),
(15, 'Trần Nguyễn Gia Hân 12', '4545565', 'vbvfgbg', NULL, NULL, 1, 'vdfdf', '2020-12-05 07:50:29', '2020-12-05 07:50:29', NULL),
(16, 'aa 13', '01222', 'dd', '38', NULL, 0, 'cxxxx', '2021-01-23 14:26:06', '2021-01-23 14:26:06', NULL),
(17, 'Đạt 14', '123123123', 'Đà nãng, jjj', '36', NULL, 0, 'abcfegg', '2020-12-26 10:07:37', '2020-12-26 10:07:37', NULL),
(18, 'andjfn 15', '1232334', 'fmgkkbgj 123', NULL, NULL, 0, 'fmfgmgk', '2020-12-26 08:46:18', '2020-12-26 10:00:48', NULL),
(19, 'Nguyên Thị 16', '1222122112', 'HCM city, q3', '37', NULL, 0, 'fhfhgfjgjffjf', '2020-12-26 10:10:08', '2020-12-26 10:26:59', NULL),
(21, 'Hao3', '032232332144', 'vfv444', '8', NULL, 0, 'gggg', '2022-01-30 08:26:36', '2022-01-30 08:26:36', NULL),
(22, 'Lan', '6578887688', 'hcmc11', '11', NULL, 0, 'jjnh kkbb11', '2022-01-30 08:40:21', '2022-01-30 08:53:45', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `insideorder`
--

DROP TABLE IF EXISTS `insideorder`;
CREATE TABLE IF NOT EXISTS `insideorder` (
  `order_id` int(11) NOT NULL,
  `prod_id` int(11) NOT NULL,
  `number` int(11) DEFAULT NULL,
  `price` int(11) NOT NULL,
  `del` int(11) DEFAULT NULL,
  PRIMARY KEY (`order_id`,`prod_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
CREATE TABLE IF NOT EXISTS `products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `prod_name` varchar(256) NOT NULL,
  `prod_name_slug` varchar(256) NOT NULL,
  `prod_img` varchar(300) NOT NULL,
  `prod_img2` varchar(300) DEFAULT NULL,
  `prod_img3` varchar(300) DEFAULT NULL,
  `prod_img4` varchar(300) DEFAULT NULL,
  `prod_desc` text NOT NULL,
  `prod_price` int(11) NOT NULL,
  `prod_price2` int(11) DEFAULT NULL,
  `prod_cat` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `deleted_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `products_cat`
--

DROP TABLE IF EXISTS `products_cat`;
CREATE TABLE IF NOT EXISTS `products_cat` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `prod_cat_name` varchar(256) NOT NULL,
  `prod_cat_desc` varchar(500) DEFAULT NULL,
  `prod_cat_order` int(11) DEFAULT NULL,
  `del` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `subs`
--

DROP TABLE IF EXISTS `subs`;
CREATE TABLE IF NOT EXISTS `subs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `subs_email` varchar(256) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `deleted_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(200) DEFAULT NULL,
  `user_email` varchar(256) DEFAULT NULL,
  `user_tel` varchar(20) DEFAULT NULL,
  `user_addr` varchar(300) DEFAULT NULL,
  `role` int(11) DEFAULT '0',
  `user_point` int(11) DEFAULT NULL,
  `user_pass` varchar(100) DEFAULT NULL,
  `user_avatar` varchar(300) DEFAULT NULL,
  `user_birth` datetime DEFAULT NULL,
  `remember_token` varchar(60) DEFAULT NULL,
  `email_verified_at` datetime DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`),
  UNIQUE KEY `user_email` (`user_email`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `user_name`, `user_email`, `user_tel`, `user_addr`, `role`, `user_point`, `user_pass`, `user_avatar`, `user_birth`, `remember_token`, `email_verified_at`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Nguyên Thị 32', 'uscer@gmail.com', '1222122112', 'HCM city, q3', 0, 3, NULL, NULL, NULL, '0', NULL, '2020-12-26 10:10:07', '2020-12-26 10:26:59', NULL),
(2, 'Đạt333', 'ubser@gmail.com', '123123123', 'Đà nãng, jjj', 0, 1, NULL, NULL, NULL, '0', NULL, '2020-12-26 10:07:37', '2020-12-26 10:07:37', NULL),
(3, 'cvcvc', 'usenr@gmail.com', '04228247', 'dcđ', 0, 6, NULL, NULL, NULL, '0', NULL, '2021-11-21 00:35:00', '2021-11-21 00:35:00', NULL),
(4, 'Nguyên Thị 4', 'userhh@gmail.com', '1222122112', 'HCM city, q3', 0, 3, NULL, NULL, NULL, '0', NULL, '2020-12-26 10:10:07', '2020-12-26 10:26:59', NULL),
(5, 'Nguyên Thị', 'usner@gmail.com', '1222122112', 'HCM city, q3', 0, 5, NULL, NULL, NULL, '0', NULL, '2020-12-26 10:10:07', '2020-12-26 10:26:59', NULL),
(6, 'Nguyên Thị', 'usehhr@gmail.com', '1222122112', 'HCM city, q3', 0, 5, NULL, NULL, NULL, '0', NULL, '2020-12-26 10:10:07', '2020-12-26 10:26:59', NULL),
(7, 'andjfn', 'uiiser@gmail.com', '1232334', 'fmgkkbgj', 0, 4, NULL, NULL, NULL, '0', NULL, '2020-12-26 08:50:43', '2020-12-26 08:50:43', NULL),
(8, 'Hao3', 'haodcdng@gmail.com', '032232332144', 'vfv444', 1, NULL, '$2y$10$xtNk9MKkpRpA2FD2kYRr4.o/030KgL38Ticjy33HgKwfNFol6Lp5q', NULL, NULL, '3JtYqG0Jut0UIEydm4LIBmysXkQagU0faMAbXE9sFRBpoIMFqyycHECYe26b', NULL, '2022-01-28 14:14:49', '2022-01-30 08:26:36', NULL),
(9, 'user', 'user@gmail.com', '0322323321', NULL, 2, NULL, '$2y$10$xtNk9MKkpRpA2FD2kYRr4.o/030KgL38Ticjy33HgKwfNFol6Lp5q', NULL, NULL, 'ofKyJBtoWstf5Gme4cqXnMwJyxr0MYoAh5xrBgGLOP6DOfPZSjqeE1WtfUnc', NULL, '2022-01-28 14:14:49', '2022-01-28 14:14:49', NULL),
(11, 'Lan', '', '6578887688', 'hcmc11', 0, NULL, NULL, NULL, NULL, NULL, NULL, '2022-01-30 08:40:21', '2022-01-30 08:53:45', NULL);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
