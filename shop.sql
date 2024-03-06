-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 06, 2024 at 08:35 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shop`
--

-- --------------------------------------------------------

--
-- Table structure for table `cauhinh`
--

CREATE TABLE `cauhinh` (
  `TenWebsite` varchar(255) NOT NULL,
  `MoTaWeb` text NOT NULL,
  `Logo` text NOT NULL,
  `DiaChi` text NOT NULL,
  `Email` varchar(255) NOT NULL,
  `SoDienThoai` varchar(11) NOT NULL,
  `PhiShip` int(11) NOT NULL,
  `MienPhiShip` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `cauhinh`
--

INSERT INTO `cauhinh` (`TenWebsite`, `MoTaWeb`, `Logo`, `DiaChi`, `Email`, `SoDienThoai`, `PhiShip`, `MienPhiShip`) VALUES
('Cửa hàng ABC', 'ABCDE', 'http://localhost/webshop/uploads/z4617362817818_39cacdb57658e537cb0e22dc18e885d81.jpg', 'Hà Nội', 'lienhe@gmail.com', '0379962045', 30000, 50000);

-- --------------------------------------------------------

--
-- Table structure for table `chitiethoadon`
--

CREATE TABLE `chitiethoadon` (
  `MaChiTietHoaDon` int(11) NOT NULL,
  `MaHoaDon` int(11) NOT NULL,
  `MaSanPham` int(11) NOT NULL,
  `SoLuong` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `chuyenmuc`
--

CREATE TABLE `chuyenmuc` (
  `MaChuyenMuc` int(11) NOT NULL,
  `TenChuyenMuc` varchar(500) NOT NULL,
  `DuongDan` text NOT NULL,
  `HinhAnh` text NOT NULL,
  `TrangThai` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `chuyenmuc`
--

INSERT INTO `chuyenmuc` (`MaChuyenMuc`, `TenChuyenMuc`, `DuongDan`, `HinhAnh`, `TrangThai`) VALUES
(1, 'Chuyên mục số 1', 'chuyen-muc-so-1', 'http://localhost/webshop/uploads/z4617362764788_9dae16f7c421e020eeb4418f62eeb52e.jpg', 1),
(2, 'Chuyên mục số 2', 'chuyen-muc-so-2', 'http://localhost/webshop/uploads/z4617362804277_275c9f23eb1124b7f6a8496671f60b25.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `giaodien`
--

CREATE TABLE `giaodien` (
  `MaGiaoDien` int(11) NOT NULL,
  `MaChuyenMuc` int(11) NOT NULL,
  `HinhAnh` text NOT NULL,
  `LoaiGiaoDien` int(11) NOT NULL,
  `TrangThai` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `giaodien`
--

INSERT INTO `giaodien` (`MaGiaoDien`, `MaChuyenMuc`, `HinhAnh`, `LoaiGiaoDien`, `TrangThai`) VALUES
(1, 2, 'http://localhost/webshop/uploads/z4617362804277_275c9f23eb1124b7f6a8496671f60b254.jpg', 1, 1),
(2, 2, 'http://localhost/webshop/uploads/z4617362745335_4456bfd0f397a69bb165e385ba8916cb.jpg', 2, 1),
(3, 2, 'http://localhost/webshop/uploads/z4617362741623_98c0302df70bfe02dd581fa8a0e35aa61.jpg', 4, 1);

-- --------------------------------------------------------

--
-- Table structure for table `hoadon`
--

CREATE TABLE `hoadon` (
  `MaHoaDon` int(11) NOT NULL,
  `MaKhachHang` int(11) NOT NULL,
  `TongTien` int(11) NOT NULL,
  `ThoiGian` datetime NOT NULL DEFAULT current_timestamp(),
  `ThanhToan` int(11) NOT NULL,
  `MaGiamGia` int(11) NOT NULL,
  `SoLuong` int(11) NOT NULL,
  `TrangThai` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `khachhang`
--

CREATE TABLE `khachhang` (
  `MaKhachHang` int(11) NOT NULL,
  `HoTen` varchar(255) NOT NULL,
  `TaiKhoan` varchar(255) NOT NULL,
  `MatKhau` varchar(255) NOT NULL,
  `SoDienThoai` varchar(11) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `DiaChi` text NOT NULL,
  `NgayThamGia` datetime NOT NULL DEFAULT current_timestamp(),
  `TrangThai` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `khachhang`
--

INSERT INTO `khachhang` (`MaKhachHang`, `HoTen`, `TaiKhoan`, `MatKhau`, `SoDienThoai`, `Email`, `DiaChi`, `NgayThamGia`, `TrangThai`) VALUES
(1, 'Nguyễn Văn Test', 'test', '21232f297a57a5a743894a0e4a801fc3', '0999888999', 'nguyenvantest@gmail.com', 'Hà Nội', '2024-03-05 18:35:52', 1),
(2, 'Nguyễn Văn Bình', 'nguyenvanb', '21232f297a57a5a743894a0e4a801fc3', '0999888999', 'nguyenvanb@gmail.com', 'Hà Nội', '2024-03-05 20:40:51', 1);

-- --------------------------------------------------------

--
-- Table structure for table `lichsunhap`
--

CREATE TABLE `lichsunhap` (
  `MaLichSuNhap` int(11) NOT NULL,
  `MaSanPham` int(11) NOT NULL,
  `MaNhanVien` int(11) NOT NULL,
  `SoLuongCu` int(11) NOT NULL,
  `SoLuongMoi` int(11) NOT NULL,
  `ThoiGian` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `lienhe`
--

CREATE TABLE `lienhe` (
  `MaLienHe` int(11) NOT NULL,
  `MaKhachHang` int(11) NOT NULL,
  `TieuDe` text NOT NULL,
  `NoiDung` text NOT NULL,
  `ThoiGian` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `lienhe`
--

INSERT INTO `lienhe` (`MaLienHe`, `MaKhachHang`, `TieuDe`, `NoiDung`, `ThoiGian`) VALUES
(1, 1, 'Đây là liên hệ mẫu', 'Abcde', '2024-03-05 18:36:18');

-- --------------------------------------------------------

--
-- Table structure for table `magiamgia`
--

CREATE TABLE `magiamgia` (
  `MaGiamGia` int(11) NOT NULL,
  `Code` varchar(255) NOT NULL,
  `SoLuong` int(11) NOT NULL,
  `DaSuDung` int(11) NOT NULL,
  `ThoiGian` datetime NOT NULL DEFAULT current_timestamp(),
  `GiaTriGiam` int(11) NOT NULL,
  `TrangThai` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `magiamgia`
--

INSERT INTO `magiamgia` (`MaGiamGia`, `Code`, `SoLuong`, `DaSuDung`, `ThoiGian`, `GiaTriGiam`, `TrangThai`) VALUES
(1, 'NAMDEPTRAI', 20, 0, '2024-03-06 00:00:00', 10000, 1),
(2, 'KHACHHANGMOI', 50, 0, '2024-03-06 00:00:00', 20000, 1);

-- --------------------------------------------------------

--
-- Table structure for table `nhanvien`
--

CREATE TABLE `nhanvien` (
  `MaNhanVien` int(11) NOT NULL,
  `HoTen` varchar(255) NOT NULL,
  `TaiKhoan` varchar(255) NOT NULL,
  `MatKhau` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `SoDienThoai` varchar(11) NOT NULL,
  `TrangThai` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `nhanvien`
--

INSERT INTO `nhanvien` (`MaNhanVien`, `HoTen`, `TaiKhoan`, `MatKhau`, `Email`, `SoDienThoai`, `TrangThai`) VALUES
(1, 'Nguyễn Văn An', 'admin', '21232f297a57a5a743894a0e4a801fc3', 'nguyenvana@gmail.com', '0998999888', 1);

-- --------------------------------------------------------

--
-- Table structure for table `sanpham`
--

CREATE TABLE `sanpham` (
  `MaSanPham` int(11) NOT NULL,
  `TenSanPham` varchar(500) NOT NULL,
  `DuongDan` text NOT NULL,
  `GiaGoc` int(11) NOT NULL,
  `GiaBan` int(11) NOT NULL,
  `LoaiSanPham` int(11) NOT NULL DEFAULT 1,
  `AnhChinh` text NOT NULL,
  `HinhAnh` text NOT NULL,
  `MoTaNgan` text NOT NULL,
  `MoTaDai` text NOT NULL,
  `MaChuyenMuc` int(11) NOT NULL,
  `The` text NOT NULL,
  `SoLuong` int(11) NOT NULL,
  `TrangThai` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tintuc`
--

CREATE TABLE `tintuc` (
  `MaTinTuc` int(11) NOT NULL,
  `TieuDe` varchar(500) NOT NULL,
  `NoiDung` text NOT NULL,
  `DuongDan` text NOT NULL,
  `The` text NOT NULL,
  `MaNhanVien` int(11) NOT NULL,
  `HinhAnh` text NOT NULL,
  `ThoiGian` datetime NOT NULL DEFAULT current_timestamp(),
  `TrangThai` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tintuc`
--

INSERT INTO `tintuc` (`MaTinTuc`, `TieuDe`, `NoiDung`, `DuongDan`, `The`, `MaNhanVien`, `HinhAnh`, `ThoiGian`, `TrangThai`) VALUES
(1, 'Tin tức 1', '<p>Loại đồ chơi phổ biến của trẻ em vừa bị phát hiện chứa hàn the quá mức cho phép, trẻ nhiễm độc có thể bị đau đầu, nôn mửa, thậm chí hôn mê.</p><p>Chỉ 10 trong số 30 sản phẩm bán chạy nhất của loại đồ chơi \"chất nhờn ma quái\" ở Trung Quốc đáp ứng tiêu chuẩn của Liên minh châu Âu (EU), theo một báo cáo công bố Ngày Quyền của người tiêu dùng thế giới 15/3. Mức độ hàn the - một chất kết tinh thường được sử dụng trong tẩy rửa thực phẩm, gốm sứ, mỹ phẩm - cao gấp 7 lần tiêu chuẩn của EU.</p><p>Báo cáo được công bố bởi <i>Toxics-Free Corps,</i> tổ chức phi lợi nhuận ở Thâm Quyến. Theo đó, trẻ em chơi <a href=\"https://vnexpress.net/tag/slime-979102\">slime </a>có chứa hàm lượng hàn the hòa tan quá mức cho phép, có nguy cơ bị ngộ độc, đặc biệt nếu tay trẻ có vết xước, hoặc chạm vào miệng. Tùy vào mức độ nhiễm độc có thể gây đau đầu, nôn mửa, buồn nôn và thậm chí dẫn đến hôn mê.</p><figure class=\"image\"><picture><source srcset=\"https://i1-giadinh.vnecdn.net/2023/03/18/102552633-hi048201955-jpeg-9304-1679155712.jpg?w=680&amp;h=0&amp;q=100&amp;dpr=1&amp;fit=crop&amp;s=j23cYpY6j-PtQlWQLjtAxw 1x, https://i1-giadinh.vnecdn.net/2023/03/18/102552633-hi048201955-jpeg-9304-1679155712.jpg?w=1020&amp;h=0&amp;q=100&amp;dpr=1&amp;fit=crop&amp;s=brE343Ef3xOGFHQz1ibN9Q 1.5x, https://i1-giadinh.vnecdn.net/2023/03/18/102552633-hi048201955-jpeg-9304-1679155712.jpg?w=680&amp;h=0&amp;q=100&amp;dpr=2&amp;fit=crop&amp;s=yVazuwGJNDhG_Y6HC0zDDg 2x\"><img src=\"https://i1-giadinh.vnecdn.net/2023/03/18/102552633-hi048201955-jpeg-9304-1679155712.jpg?w=680&amp;h=0&amp;q=100&amp;dpr=1&amp;fit=crop&amp;s=j23cYpY6j-PtQlWQLjtAxw\" alt=\"Slime là đồ chơi phổ biến với trẻ em ở nhiều quốc gia trên thế giới. Ảnh: Asianparent\" width=\"680\" height=\"383\"></picture></figure><p>Slime là đồ chơi phổ biến với trẻ em ở nhiều quốc gia trên thế giới. Ảnh:<i> Asianparent</i></p><p>Wu Huixian, một trong các tác giả nghiên cứu và là mẹ của một cậu con trai 5 tuổi, nói rằng đã biết slime từ năm 2021 khi mua sắm cùng con. Sau đó, cô bắt đầu nghiên cứu các đồ chơi trên thị trường Trung Quốc để tìm hiểu thêm về thành phần hóa học của chúng.</p><p>\"Một cuộc tìm kiếm nhanh trên mạng cho thấy tôi đã đúng. Tôi đã ngăn con trai chơi slime ngay khi biết về khả năng nhiễm độc hàn the\", Wu nói.</p><p>Cũng theo chuyên gia này, việc không có tiêu chuẩn hàn the đối với<a href=\"https://vnexpress.net/tag/do-choi-tre-em-53661\"> đồ chơi trẻ em</a> ở Trung Quốc là trở ngại chính cho việc điều tiết thị trường. Quốc gia này đã đặt ra tiêu chuẩn lây nhiễm cho 8 loại hóa chất trong đồ chơi, nhưng hàn the không nằm trong số đó. Vì lý do này, <i>Toxics-Free Corps</i> đã sử dụng các tiêu chuẩn của EU cho nghiên cứu của họ.</p><p>Một tìm kiếm trên trang thương mại điện tử <i>Taobao</i> về loại đồ chơi này cho ra hàng nghìn sản phẩm, nhiều cửa hàng có đến 5.000 đơn đặt hàng mỗi tháng. Báo cáo cũng cho biết nhà bán lẻ trực tuyến, gồm JD.com và Tmall, đã đưa ra tiêu chuẩn kiểm tra sơ bộ chất lượng mặt hàng đồ chơi này từ các nhà cung cấp. Nhưng họ cũng thừa nhận có \"kiến thức chuyên môn hạn chế\" về vấn đề này.</p><p>\"Với rất nhiều đồ chơi được bán trên thị trường, cha mẹ và các nền tảng thương mại khó phân biệt được loại nào độc hại. Cần có một tiêu chuẩn rõ ràng\", Wu cho biết.</p><p>Năm 2018, cơ quan An ninh y tế quốc gia Pháp (ANSES) khuyến cáo, slime chứa nhiều chất độc hại, gây dị ứng, bỏng, chàm hóa da (eczema), ảnh hưởng tới thần kinh và khả năng sinh sản.</p><p>Giáo sư Gérard Lasfargues - Giám đốc trung tâm Khoa học giám định của ANSES nói rằng cơ quan này mỗi năm ghi nhận hàng chục trẻ em bị tác dụng phụ khi tiếp xúc với các loại đồ chơi là chất dẻo và nhờn.</p>', 'tin-tuc-1', 'tin tức, tin tức mới', 1, 'http://localhost/webshop/uploads/z4617362741623_98c0302df70bfe02dd581fa8a0e35aa6.jpg', '2024-03-05 17:32:24', 1),
(4, 'Tin tức 2', '<p>bacde</p>', 'tin-tuc-2', 'apple, iphone 14, iphone', 1, 'http://localhost/webshop/uploads/z4617362804277_275c9f23eb1124b7f6a8496671f60b253.jpg', '2024-03-05 17:50:23', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `chitiethoadon`
--
ALTER TABLE `chitiethoadon`
  ADD PRIMARY KEY (`MaChiTietHoaDon`),
  ADD KEY `MaHoaDon` (`MaHoaDon`,`MaSanPham`),
  ADD KEY `MaSanPham` (`MaSanPham`);

--
-- Indexes for table `chuyenmuc`
--
ALTER TABLE `chuyenmuc`
  ADD PRIMARY KEY (`MaChuyenMuc`);

--
-- Indexes for table `giaodien`
--
ALTER TABLE `giaodien`
  ADD PRIMARY KEY (`MaGiaoDien`),
  ADD KEY `MaChuyenMuc` (`MaChuyenMuc`);

--
-- Indexes for table `hoadon`
--
ALTER TABLE `hoadon`
  ADD PRIMARY KEY (`MaHoaDon`),
  ADD KEY `MaKhachHang` (`MaKhachHang`),
  ADD KEY `MaGiamGia` (`MaGiamGia`);

--
-- Indexes for table `khachhang`
--
ALTER TABLE `khachhang`
  ADD PRIMARY KEY (`MaKhachHang`);

--
-- Indexes for table `lichsunhap`
--
ALTER TABLE `lichsunhap`
  ADD PRIMARY KEY (`MaLichSuNhap`),
  ADD KEY `MaSanPham` (`MaSanPham`,`MaNhanVien`),
  ADD KEY `MaNhanVien` (`MaNhanVien`);

--
-- Indexes for table `lienhe`
--
ALTER TABLE `lienhe`
  ADD PRIMARY KEY (`MaLienHe`),
  ADD KEY `MaKhachHang` (`MaKhachHang`);

--
-- Indexes for table `magiamgia`
--
ALTER TABLE `magiamgia`
  ADD PRIMARY KEY (`MaGiamGia`);

--
-- Indexes for table `nhanvien`
--
ALTER TABLE `nhanvien`
  ADD PRIMARY KEY (`MaNhanVien`);

--
-- Indexes for table `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`MaSanPham`),
  ADD KEY `MaChuyenMuc` (`MaChuyenMuc`);

--
-- Indexes for table `tintuc`
--
ALTER TABLE `tintuc`
  ADD PRIMARY KEY (`MaTinTuc`),
  ADD KEY `MaNhanVien` (`MaNhanVien`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `chitiethoadon`
--
ALTER TABLE `chitiethoadon`
  MODIFY `MaChiTietHoaDon` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `chuyenmuc`
--
ALTER TABLE `chuyenmuc`
  MODIFY `MaChuyenMuc` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `giaodien`
--
ALTER TABLE `giaodien`
  MODIFY `MaGiaoDien` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `hoadon`
--
ALTER TABLE `hoadon`
  MODIFY `MaHoaDon` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `khachhang`
--
ALTER TABLE `khachhang`
  MODIFY `MaKhachHang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `lichsunhap`
--
ALTER TABLE `lichsunhap`
  MODIFY `MaLichSuNhap` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `lienhe`
--
ALTER TABLE `lienhe`
  MODIFY `MaLienHe` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `magiamgia`
--
ALTER TABLE `magiamgia`
  MODIFY `MaGiamGia` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `nhanvien`
--
ALTER TABLE `nhanvien`
  MODIFY `MaNhanVien` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `MaSanPham` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tintuc`
--
ALTER TABLE `tintuc`
  MODIFY `MaTinTuc` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `chitiethoadon`
--
ALTER TABLE `chitiethoadon`
  ADD CONSTRAINT `chitiethoadon_ibfk_1` FOREIGN KEY (`MaSanPham`) REFERENCES `sanpham` (`MaSanPham`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `chitiethoadon_ibfk_2` FOREIGN KEY (`MaHoaDon`) REFERENCES `hoadon` (`MaHoaDon`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Constraints for table `giaodien`
--
ALTER TABLE `giaodien`
  ADD CONSTRAINT `giaodien_ibfk_1` FOREIGN KEY (`MaChuyenMuc`) REFERENCES `chuyenmuc` (`MaChuyenMuc`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Constraints for table `hoadon`
--
ALTER TABLE `hoadon`
  ADD CONSTRAINT `hoadon_ibfk_1` FOREIGN KEY (`MaGiamGia`) REFERENCES `magiamgia` (`MaGiamGia`),
  ADD CONSTRAINT `hoadon_ibfk_2` FOREIGN KEY (`MaKhachHang`) REFERENCES `khachhang` (`MaKhachHang`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Constraints for table `lichsunhap`
--
ALTER TABLE `lichsunhap`
  ADD CONSTRAINT `lichsunhap_ibfk_1` FOREIGN KEY (`MaNhanVien`) REFERENCES `nhanvien` (`MaNhanVien`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `lichsunhap_ibfk_2` FOREIGN KEY (`MaSanPham`) REFERENCES `sanpham` (`MaSanPham`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Constraints for table `lienhe`
--
ALTER TABLE `lienhe`
  ADD CONSTRAINT `lienhe_ibfk_1` FOREIGN KEY (`MaKhachHang`) REFERENCES `khachhang` (`MaKhachHang`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Constraints for table `sanpham`
--
ALTER TABLE `sanpham`
  ADD CONSTRAINT `sanpham_ibfk_1` FOREIGN KEY (`MaChuyenMuc`) REFERENCES `chuyenmuc` (`MaChuyenMuc`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Constraints for table `tintuc`
--
ALTER TABLE `tintuc`
  ADD CONSTRAINT `tintuc_ibfk_1` FOREIGN KEY (`MaNhanVien`) REFERENCES `nhanvien` (`MaNhanVien`) ON DELETE CASCADE ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
