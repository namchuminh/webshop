<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Model_KhachHang extends CI_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();
		
	}

	public function insert($hoten,$taikhoan,$matkhau,$sodienthoai,$email,$diachi){
		$sql = "INSERT INTO `khachhang`(`HoTen`, `TaiKhoan`, `MatKhau`, `SoDienThoai`, `Email`, `DiaChi`) VALUES (?, ?, ?, ?, ?, ?)";
		$result = $this->db->query($sql, array($hoten,$taikhoan,$matkhau,$sodienthoai,$email,$diachi));
		return $result;
	}


	public function getOrderById($makhachhang){
		$sql = "SELECT * FROM hoadon WHERE MaKhachHang = ?";
		$result = $this->db->query($sql, array($makhachhang));
		return $result->result_array();
	}

	public function update($hoten,$matkhau,$sodienthoai,$email,$diachhi,$makhachhang){
		$sql = "UPDATE `khachhang` SET `HoTen` = ?, `MatKhau` = ?, `SoDienThoai` = ?, `Email` = ?, `DiaChi` = ? WHERE MaKhachHang = ?";
		$result = $this->db->query($sql, array($hoten,$matkhau,$sodienthoai,$email,$diachhi,$makhachhang));
		return $result;
	}
}

/* End of file Model_KhachHang.php */
/* Location: ./application/models/Model_KhachHang.php */