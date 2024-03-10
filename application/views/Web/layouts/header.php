<!DOCTYPE html>
<html lang="en">
<head>
<!-- Meta -->
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta content="Anil z" name="author">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="<?php echo $config[0]['MoTaWeb']; ?>">
<meta name="keywords" content="ecommerce, electronics store, Fashion store, furniture store,  bootstrap 4, clean, minimal, modern, online store, responsive, retail, shopping, ecommerce store">

<!-- SITE TITLE -->
<title><?php echo $config[0]['TenWebsite']; ?> - <?php echo $title; ?></title>
<!-- Favicon Icon -->
<link rel="shortcut icon" type="image/x-icon" href="<?php echo $config[0]['Logo']; ?>">
<!-- Animation CSS -->
<link rel="stylesheet" href="<?php echo base_url('public/web/'); ?>assets/css/animate.css">	
<!-- Latest Bootstrap min CSS -->
<link rel="stylesheet" href="<?php echo base_url('public/web/'); ?>assets/bootstrap/css/bootstrap.min.css">
<!-- Google Font -->
<link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900&display=swap" rel="stylesheet"> 
<link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800,900&display=swap" rel="stylesheet"> 
<!-- Icon Font CSS -->
<link rel="stylesheet" href="<?php echo base_url('public/web/'); ?>assets/css/all.min.css">
<link rel="stylesheet" href="<?php echo base_url('public/web/'); ?>assets/css/ionicons.min.css">
<link rel="stylesheet" href="<?php echo base_url('public/web/'); ?>assets/css/themify-icons.css">
<link rel="stylesheet" href="<?php echo base_url('public/web/'); ?>assets/css/linearicons.css">
<link rel="stylesheet" href="<?php echo base_url('public/web/'); ?>assets/css/flaticon.css">
<link rel="stylesheet" href="<?php echo base_url('public/web/'); ?>assets/css/simple-line-icons.css">
<!--- owl carousel CSS-->
<link rel="stylesheet" href="<?php echo base_url('public/web/'); ?>assets/owlcarousel/css/owl.carousel.min.css">
<link rel="stylesheet" href="<?php echo base_url('public/web/'); ?>assets/owlcarousel/css/owl.theme.css">
<link rel="stylesheet" href="<?php echo base_url('public/web/'); ?>assets/owlcarousel/css/owl.theme.default.min.css">
<!-- Magnific Popup CSS -->
<link rel="stylesheet" href="<?php echo base_url('public/web/'); ?>assets/css/magnific-popup.css">
<!-- jquery-ui CSS -->
<link rel="stylesheet" href="<?php echo base_url('public/web/'); ?>assets/css/jquery-ui.css">
<!-- Slick CSS -->
<link rel="stylesheet" href="<?php echo base_url('public/web/'); ?>assets/css/slick.css">
<link rel="stylesheet" href="<?php echo base_url('public/web/'); ?>assets/css/slick-theme.css">
<!-- Style CSS -->
<link rel="stylesheet" href="<?php echo base_url('public/web/'); ?>assets/css/style.css">
<link rel="stylesheet" href="<?php echo base_url('public/web/'); ?>assets/css/responsive.css">

</head>

<body>
 
<!-- START HEADER -->
<header class="header_wrap fixed-top header_with_topbar">
	<div class="top-header light_skin bg_dark d-none d-md-block">
        <div class="custom-container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-8">
                    <div class="header_topbar_info">
                        <div class="download_wrap">
                            <span class="me-3">Miễn phí giao hàng với đơn hàng lớn hơn 50,000 VND</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-4">
                    <div class="d-flex align-items-center justify-content-center justify-content-md-end">
                        <div class="header_offer">
                            <a href="http://localhost/webshop/dang-nhap/" style="color: white;">Đăng Nhập</a>
                        </div>
                        <div class="download_wrap">
                            <a href="http://localhost/webshop/dang-ky/" style="color: white;">Đăng Ký</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="bottom_header dark_skin main_menu_uppercase">
    	<div class="container">
            <nav class="navbar navbar-expand-lg"> 
                <a class="navbar-brand" href="<?php echo base_url(); ?>">
                    <img class="logo_light" src="<?php echo $config[0]['Logo']; ?>" alt="logo" />
                    <img class="logo_dark" src="<?php echo $config[0]['Logo']; ?>" alt="logo" />
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-expanded="false"> 
                    <span class="ion-android-menu"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
                    <ul class="navbar-nav">
                        <li class="dropdown">
                            <a class="nav-link" href="<?php echo base_url(); ?>" style="font-family: system-ui;"><i class="linearicons-home"></i> Trang Chủ</a>   
                        </li>
                        <li class="dropdown">
                            <a class="nav-link" href="<?php echo base_url('san-pham/'); ?>" style="font-family: system-ui;"><i class="linearicons-box"></i> Sản Phẩm</a>   
                        </li>
                        <li class="dropdown">
                            <a class="nav-link" href="<?php echo base_url('chuyen-muc/'); ?>" style="font-family: system-ui;"><i class="linearicons-layers"></i> Chuyên Mục</a>   
                        </li>
                        <li><a class="nav-link nav_item" href="<?php echo base_url('tin-tuc/'); ?>" style="font-family: system-ui;"><i class="linearicons-news"></i> Tin Tức</a></li> 
                        <li><a class="nav-link nav_item" href="<?php echo base_url('lien-he/'); ?>" style="font-family: system-ui;"><i class="linearicons-phone-wave"></i> Liên Hệ</a></li> 
                    </ul>
                </div>
                <ul class="navbar-nav attr-nav align-items-center">
                    <li><a href="javascript:void(0);" class="nav-link search_trigger"><i class="linearicons-magnifier"></i></a>
                        <div class="search_wrap">
                            <span class="close-search"><i class="ion-ios-close-empty"></i></span>
                            <form action="<?php echo base_url('san-pham/'); ?>">
                                <input type="text" placeholder="Nhập tên sản phẩm" class="form-control" name="s" id="search_input">
                                <button type="submit" class="search_icon"><i class="ion-ios-search-strong"></i></button>
                            </form>
                        </div><div class="search_overlay"></div>
                    </li>
                    <li class="dropdown cart_dropdown"><a class="nav-link cart_trigger" href="#" data-bs-toggle="dropdown"><i class="linearicons-cart"></i><span class="cart_count">2</span></a>
                        <div class="cart_box dropdown-menu dropdown-menu-right">
                            <ul class="cart_list">
                                <li>
                                    <a href="#" class="item_remove"><i class="ion-close"></i></a>
                                    <a href="#"><img src="assets/images/cart_thamb1.jpg" alt="cart_thumb1">Variable product 001</a>
                                    <span class="cart_quantity"> 1 x <span class="cart_amount"> <span class="price_symbole">$</span></span>78.00</span>
                                </li>
                                <li>
                                    <a href="#" class="item_remove"><i class="ion-close"></i></a>
                                    <a href="#"><img src="assets/images/cart_thamb2.jpg" alt="cart_thumb2">Ornare sed consequat</a>
                                    <span class="cart_quantity"> 1 x <span class="cart_amount"> <span class="price_symbole">$</span></span>81.00</span>
                                </li>
                            </ul>
                            <div class="cart_footer">
                                <p class="cart_total"><strong>Subtotal:</strong> <span class="cart_price"> <span class="price_symbole">$</span></span>159.00</p>
                                <p class="cart_buttons"><a href="#" class="btn btn-fill-line view-cart">View Cart</a><a href="#" class="btn btn-fill-out checkout">Checkout</a></p>
                            </div>
                        </div>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
</header>
<!-- END HEADER -->

<!-- START MAIN CONTENT -->
<div class="main_content">