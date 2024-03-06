<?php require(APPPATH.'views/admin/layouts/header.php'); ?>
<div class="content-wrapper" style="min-height: 1203.31px;">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Quản Lý Hóa Đơn</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?php echo base_url('admin/'); ?>">Trang Chủ</a></li>
              <li class="breadcrumb-item active">Quản Lý Hóa Đơn</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- /.row -->
        <div class="row">
          <div class="col-12">
            <div class="card">
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <table class="table table-hover">
                  <thead>
                    <tr>
                      <th>Mã Hóa Đơn</th>
                      <th>Tên Khách Hàng</th>
                      <th>Địa Chỉ Nhận</th>
                      <th>Số Lượng</th>
                      <th>Giảm Giá</th>
                      <th>Tổng Tiền</th>
                      <th>Thời Gian</th>
                      <th>Thanh Toán</th>
                      <th>Trạng Thái</th>
                      <th>Hành Động</th>
                    </tr>
                  </thead>
                  <tbody>
                  	<?php foreach ($list as $key => $value): ?>
	                    <tr>
	                      <td>000<?php echo $value['MaHoaDon']; ?></td>
	                      <td>
                          <a href="<?php echo base_url('admin/khach-hang/'.$value['MaKhachHang'].'/xem/'); ?>"><?php echo $value['HoTen']; ?></a>
                        </td>
	                      <td><?php echo $value['DiaChi']; ?></td>
	                      <td>
	                      	<?php echo $value['SoLuong']; ?> sản phẩm
	                      </td>
                        <td>
                          Giảm <?php echo number_format($value['GiaTriGiam']); ?> VND
                        </td>
                        <td>
                          <?php echo number_format($value['TongTien']); ?> VND
                        </td>
                        <td>
                          <?php echo $value['ThoiGian']; ?>
                        </td>
                        <td>
                          <?php echo $value['ThanhToan'] == 0 ? "Chưa thanh toán" : "Đã thanh toán"; ?>
                        </td>
                        <td>
                          <?php if($value['TrangThai'] == 0){ ?>
                            Đã hủy đơn
                          <?php }else if($value['TrangThai'] == 1){ ?>
                            Chờ duyệt đơn
                          <?php }else if($value['TrangThai'] == 2){ ?>
                            Chuẩn bị hàng
                          <?php }else if($value['TrangThai'] == 3){ ?>
                            Đã giao hàng
                          <?php }else if($value['TrangThai'] == 4){ ?>
                            Đã hoàn tiền
                          <?php } ?>
                        </td>
	                      <td>
                          <a href="<?php echo base_url('admin/hoa-don/'.$value['MaHoaDon'].'/xem/'); ?>" class="btn btn-primary" style="color: white;">
                            <i class="fas fa-edit"></i>
                              <span>XỬ LÝ HÓA ĐƠN</span>
                            </a>
	                      </td>
	                    </tr>
                    <?php endforeach ?>
                  </tbody>
                </table>
              </div>
              <div class="card-footer clearfix">
                <ul class="pagination pagination-sm m-0 float-right">
                	<?php for($i = 1; $i <= $totalPages; $i++){ ?>
                  		<li class="page-item"><a class="page-link" href="<?php echo base_url('admin/hoa-don/'.$i.'/trang/') ?>"><?php echo $i; ?></a></li>
                  	<?php } ?>      
                </ul>
              </div>
            </div>
            <!-- /.card -->
          </div>
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
<?php require(APPPATH.'views/admin/layouts/footer.php'); ?>
