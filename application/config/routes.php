<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'TrangChu';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;


$route['admin'] = 'Admin/TrangChu';

$route['admin/dang-nhap'] = 'Admin/DangNhap/index';
$route['admin/dang-xuat'] = 'Admin/DangXuat/index';

$route['admin/chuyen-muc'] = 'Admin/ChuyenMuc';
$route['admin/chuyen-muc/(:any)/trang'] = 'Admin/ChuyenMuc/page/$1';
$route['admin/chuyen-muc/them'] = 'Admin/ChuyenMuc/add';
$route['admin/chuyen-muc/(:any)/sua'] = 'Admin/ChuyenMuc/update/$1';
$route['admin/chuyen-muc/(:any)/xoa'] = 'Admin/ChuyenMuc/delete/$1';

$route['admin/tin-tuc'] = 'Admin/TinTuc';
$route['admin/tin-tuc/(:any)/trang'] = 'Admin/TinTuc/page/$1';
$route['admin/tin-tuc/them'] = 'Admin/TinTuc/add';
$route['admin/tin-tuc/(:any)/sua'] = 'Admin/TinTuc/update/$1';
$route['admin/tin-tuc/(:any)/xoa'] = 'Admin/TinTuc/delete/$1';

$route['admin/ma-giam-gia'] = 'Admin/MaGiamGia';
$route['admin/ma-giam-gia/(:any)/trang'] = 'Admin/MaGiamGia/page/$1';
$route['admin/ma-giam-gia/them'] = 'Admin/MaGiamGia/add';
$route['admin/ma-giam-gia/(:any)/sua'] = 'Admin/MaGiamGia/update/$1';
$route['admin/ma-giam-gia/(:any)/xoa'] = 'Admin/MaGiamGia/delete/$1';

$route['admin/lien-he'] = 'Admin/LienHe';
$route['admin/lien-he/(:any)/trang'] = 'Admin/LienHe/page/$1';
$route['admin/lien-he/(:any)/xem'] = 'Admin/LienHe/view/$1';

$route['admin/cau-hinh'] = 'Admin/CauHinh';

$route['admin/khach-hang'] = 'Admin/KhachHang';
$route['admin/khach-hang/(:any)/trang'] = 'Admin/KhachHang/page/$1';
$route['admin/khach-hang/(:any)/xem'] = 'Admin/KhachHang/view/$1';
$route['admin/khach-hang/(:any)/trang-thai'] = 'Admin/KhachHang/status/$1';


$route['admin/ca-nhan'] = 'Admin/CaNhan';

$route['admin/giao-dien'] = 'Admin/GiaoDien';
$route['admin/giao-dien/(:any)/trang'] = 'Admin/GiaoDien/page/$1';
$route['admin/giao-dien/them'] = 'Admin/GiaoDien/add';
$route['admin/giao-dien/(:any)/sua'] = 'Admin/GiaoDien/update/$1';
$route['admin/giao-dien/(:any)/xoa'] = 'Admin/GiaoDien/delete/$1';

$route['admin/hoa-don'] = 'Admin/HoaDon';
$route['admin/hoa-don/(:any)/trang'] = 'Admin/HoaDon/page/$1';
$route['admin/hoa-don/(:any)/xem'] = 'Admin/HoaDon/view/$1';
$route['admin/hoa-don/(:any)/thanh-toan'] = 'Admin/HoaDon/pay/$1';
$route['admin/hoa-don/(:any)/huy'] = 'Admin/HoaDon/cancel/$1';
$route['admin/hoa-don/(:any)/trang-thai'] = 'Admin/HoaDon/status/$1';

$route['admin/san-pham'] = 'Admin/SanPham';
$route['admin/san-pham/(:any)/trang'] = 'Admin/SanPham/page/$1';
$route['admin/san-pham/them'] = 'Admin/SanPham/add';
$route['admin/san-pham/(:any)/sua'] = 'Admin/SanPham/update/$1';
$route['admin/san-pham/(:any)/xoa'] = 'Admin/SanPham/delete/$1';
$route['admin/san-pham/(:any)/nhap'] = 'Admin/SanPham/import/$1';
$route['admin/san-pham/(:any)/lich-su'] = 'Admin/SanPham/history/$1';


$route['san-pham'] = 'Web/SanPham/index';
$route['san-pham/(:any)'] = 'Web/SanPham/detail/$1';


