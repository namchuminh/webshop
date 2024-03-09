<?php require(APPPATH.'views/web/layouts/header.php'); ?>
<!-- START SECTION BREADCRUMB -->
<div class="breadcrumb_section bg_gray page-title-mini">
    <div class="container"><!-- STRART CONTAINER -->
        <div class="row align-items-center">
        	<div class="col-md-6">
                <div class="page-title">
            		<h1><?php echo $title; ?></h1>
                </div>
            </div>
            <div class="col-md-6">
                <ol class="breadcrumb justify-content-md-end">
                    <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>">Trang Chủ</a></li>
                    <li class="breadcrumb-item"><a href="<?php echo base_url('san-pham/'); ?>">Sản Phẩm</a></li>
                    <li class="breadcrumb-item active"><?php echo $title; ?></li>
                </ol>
            </div>
        </div>
    </div><!-- END CONTAINER-->
</div>
<!-- END SECTION BREADCRUMB -->

<div class="section">
    <div class="container">
        <div class="row">
            <div class="col-lg-9">
                <div class="row align-items-center mb-4 pb-1">
                    <div class="col-12">
                        <div class="product_header">
                            <div class="product_header_left">
                            </div>
                            <div class="product_header_right">
                                <div class="custom_select">
                                    <select class="form-control form-control-sm">
                                        <option value="order">Sắp Xếp Mặc Định</option>
                                        <option value="popularity">Mới Nhất</option>
                                        <option value="date">Cũ Nhất</option>
                                        <option value="price">Giá Tăng</option>
                                        <option value="price-desc">Giá Giảm</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> 
                <div class="row shop_container">

                    <?php foreach ($list as $key => $value): ?>                
                        <div class="col-md-4 col-6">
                            <div class="product">
                                <div class="product_img">
                                    <a href="<?php echo base_url("san-pham/".$value['DuongDan'].'/'); ?>">
                                        <img style="height: 290px;" src="<?php echo $value['AnhChinh']; ?>" alt="<?php echo $value['TenSanPham']; ?>">
                                    </a>
                                    <div class="product_action_box">
                                        <ul class="list_none pr_action_btn">
                                            <li class="add-to-cart"><a href="#"><i class="icon-basket-loaded"></i> Thêm Giỏ Hàng</a></li>
                                            <li><a href="#"><i class="icon-heart"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product_info">
                                    <h6 class="product_title"><a href="shop-product-detail.html"><?php echo $value['TenSanPham']; ?></a></h6>
                                    <div class="product_price">
                                        <span class="price"><?php echo number_format($value['GiaBan']); ?></span>
                                        <?php if($value['GiaBan'] != $value['GiaGoc']){ ?>
                                            <del><?php echo number_format($value['GiaGoc']); ?></del>
                                            <?php $phan_tram_khuyen_mai = ($value['GiaGoc'] - $value['GiaBan']) / $value['GiaGoc'] * 100; ?>
                                            <div class="on_sale">
                                                <span>Giảm <?php echo round($phan_tram_khuyen_mai, 0); ?>%</span>
                                            </div>
                                        <?php } ?>
                                    </div>
                                    <div class="rating_wrap">
                                        <div class="rating">
                                            <div class="product_rate" style="width:100%"></div>
                                        </div>
                                    </div>
                                    <div class="pr_desc">
                                        <p><?php echo $value['MoTaNgan']; ?></p>
                                    </div>
                                    <div class="list_product_action_box">
                                        <ul class="list_none pr_action_btn">
                                            <li class="add-to-cart"><a href="#"><i class="icon-basket-loaded"></i> Thêm Giỏ Hàng</a></li>
                                            <li><a href="#"><i class="icon-heart"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach ?>
                </div>
                <div class="row">
                    <div class="col-12">
                        <ul class="pagination mt-3 justify-content-center pagination_style1">
                            <?php for($i = 1; $i <= $totalPages; $i++){ ?>
                                <li class="page-item"><a class="page-link" href="<?php echo base_url('san-pham/trang/'.$i.'/') ?>"><?php echo $i; ?></a></li>
                            <?php } ?>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 order-lg-first mt-4 pt-2 mt-lg-0 pt-lg-0">
                <div class="sidebar">
                    <div class="widget">
                        <h5 class="widget_title">Tìm Kiếm</h5>
                        <div class="search_form">
                            <form action="<?php echo base_url('tim-kiem/') ?>"> 
                                <input required class="form-control" name="s" placeholder="Nhập tên sản phẩm..." type="text">
                                <button type="submit" title="Subscribe" class="btn icon_search" value="Tìm Kiếm">
                                    <i class="ion-ios-search-strong"></i>
                                </button>
                            </form>
                        </div>
                    </div>
                    <div class="widget">
                        <h5 class="widget_title">Chuyên Mục</h5>
                        <ul class="widget_categories">
                            <?php foreach ($categoryNumber as $key => $value): ?>
                                <li><a href="<?php echo base_url('chuyen-muc/'.$value['DuongDanChuyenMuc'].'/'); ?>"><span class="categories_name"><?php echo $value['TenChuyenMuc']; ?></span><span class="categories_num">(<?php echo $value['SoLuongSanPham']; ?>)</span></a></li>
                            <?php endforeach ?>
                        </ul>
                    </div>
                    <div class="widget">
                        <h5 class="widget_title">Phổ Biến</h5>
                        <ul class="widget_recent_post">
                            <?php foreach ($popular as $key => $value): ?>
                                <?php if($key >= 5){ break; } ?>
                                <li>
                                    <div class="post_img">
                                        <a href="<?php echo base_url('san-pham/'.$value['DuongDan'].'/'); ?>"><img style="height: 100px; width: 100px;" src="<?php echo $value['HinhAnh'] ?>" alt="shop_small1"></a>
                                    </div>
                                    <div class="post_content">
                                        <h6 class="product_title" style="white-space: unset;"><a href="<?php echo base_url('san-pham/'.$value['DuongDan'].'/'); ?>"><?php echo $value['TenSanPham']; ?></a></h6>
                                        <div class="product_price">
                                            <span class="price"><?php echo number_format($value['GiaBan']); ?></span>
                                            <del><?php echo number_format($value['GiaGoc']); ?></del>
                                        </div>
                                        <div class="rating_wrap">
                                            <div class="rating">
                                                <div class="product_rate" style="width:100%"></div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            <?php endforeach ?>
                        </ul>
                    </div>
                    <div class="widget">
                        <div class="shop_banner">
                            <a href="<?php echo base_url('chuyen-muc/'.$banner1[0]['DuongDan'].'/'); ?>" class="banner_img">
                                <img style="width: 255px; height: 350px;" src="<?php echo $banner1[0]['HinhAnh'] ?>" alt="sidebar_banner_img">
                            </a> 
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</div>

<?php require(APPPATH.'views/web/layouts/footer.php'); ?>