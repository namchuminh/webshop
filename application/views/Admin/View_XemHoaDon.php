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
              <li class="breadcrumb-item"><a href="<?php echo base_url('admin/hoa-don/'); ?>">Quản Lý Hóa Đơn</a></li>
              <li class="breadcrumb-item active">Hóa Đơn 000<?php echo $detail[0]['MaHoaDon']; ?></li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <section class="content">
      <div class="container-fluid">
        <!-- /.row -->
        <div class="row">
          <div class="col-12">
            <div class="card">
              <h4 class="text-center mt-3">Thông Tin Hóa Đơn 000<?php echo $detail[0]['MaHoaDon']; ?></h4>
              <div style="line-height: 20px;word-spacing: 2px;" class="m-3 detail-order">
                  <span style="display: flex;">
                      <b>Mã Hóa Đơn: </b>
                      <p style="margin-left: 10px;">000<?php echo $detail[0]['MaHoaDon'] ?></p>
                  </span>
                  <span style="display: flex;">
                      <b>Tên Khách Hàng: </b>
                      <p style="margin-left: 10px;"><?php echo $detail[0]['HoTen'] ?></p>
                  </span>
                  <span style="display: flex;">
                      <b>Địa Chỉ Nhận: </b>
                      <p style="margin-left: 10px;"><?php echo $detail[0]['DiaChi'] ?></p>
                  </span>
                  <span style="display: flex;">
                      <b>Tổng Tiền: </b>
                      <p style="margin-left: 10px;"><?php echo number_format($detail[0]['TongTien']) ?> VND</p>
                  </span>
                  <span style="display: flex;">
                      <b>Thời Gian: </b>
                      <p style="margin-left: 10px;"><?php echo $detail[0]['ThoiGian'] ?></p>
                  </span>
                  <span style="display: flex;">
                      <b>Thanh Toán: </b>
                      <p style="margin-left: 10px;"><?php echo $detail[0]['ThanhToan'] == 1 ? "Đã thanh Toán" : "Chưa Thanh Toán"; ?> </p>
                  </span>
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <table class="table table-hover">
                  <thead>
                    <tr>
                      <th>#</th>
                      <th class="not_print">Hình Ảnh</th>
                      <th>Tên Sản Phẩm</th>
                      <th>Giá Bán</th>
                      <th>Số Lượng</th>
                      <th>Đơn Giá</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php foreach ($list as $key => $value): ?>
                      <tr>
                        <td><?php echo $key + 1; ?></td>
                        <td class="not_print">
                          <img style="width: 100px; height: 100px;" src="<?php echo $value['HinhAnh'] ?>">
                        </td>
                        <td><?php echo $value['TenSanPham']; ?></td>
                        <td><?php echo number_format($value['GiaBan']); ?> VND</td>
                        <td>
                          <?php echo $value['SoLuong']; ?> sản phẩm
                        </td>
                        <td>
                          <?php echo number_format($value['SoLuong'] * $value['GiaBan']); ?> VND
                        </td>
                      </tr>
                    <?php endforeach ?>
                  </tbody>
                </table>
              </div>
              <div class="card-footer clearfix mt-3" style="background: white;">
                <a class="btn btn-success not_print" href="<?php echo base_url('admin/hoa-don/'); ?>">Quay Lại</a>
                <button class="btn btn-primary not_print" onclick="window.print()">In Hóa Đơn</button>
                <?php if(($detail[0]['ThanhToan'] == 0) && ($detail[0]['TrangThai'] != 0) && ($detail[0]['TrangThai'] != 4)){ ?>
                  <a class="btn btn-warning not_print" href="<?php echo base_url('admin/hoa-don/'.$detail[0]['MaHoaDon'].'/thanh-toan/'); ?>"  style="color: white;">Xác Nhận Thanh Toán</a>
                <?php } ?>
                <?php if($detail[0]['TrangThai'] == 1){ ?>
                  <a class="btn btn-info not_print" href="<?php echo base_url('admin/hoa-don/'.$detail[0]['MaHoaDon'].'/trang-thai/'); ?>"  style="color: white;">Duyệt Đơn Hàng</a>
                <?php }else if($detail[0]['TrangThai'] == 2){ ?>
                  <a class="btn btn-info not_print" href="<?php echo base_url('admin/hoa-don/'.$detail[0]['MaHoaDon'].'/trang-thai/'); ?>"  style="color: white;">Giao Hàng</a>
                <?php }else if($detail[0]['TrangThai'] == 3){ ?>
                  <a class="btn btn-info not_print" href="<?php echo base_url('admin/hoa-don/'.$detail[0]['MaHoaDon'].'/trang-thai/'); ?>"  style="color: white;">Hoàn Tiền</a>
                <?php } ?>
                <?php if(($detail[0]['TrangThai'] <= 2) && ($detail[0]['TrangThai'] != 0)){ ?>
                  <a class="btn btn-danger not_print" href="<?php echo base_url('admin/hoa-don/'.$detail[0]['MaHoaDon'].'/huy/'); ?>"  style="color: white;">Hủy Đơn Hàng</a>
                <?php } ?>
              </div>
            </div>
            <!-- /.card -->
          </div>
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
</div>
<?php require(APPPATH.'views/admin/layouts/footer.php'); ?>

<style type="text/css">
  @media print{
    .main-footer{
      display: none !important;
    }

    .content-wrapper{
      background-color: white;
    }

    .not_print{
      display: none !important;
    }

  }
</style>