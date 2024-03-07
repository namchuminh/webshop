<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Model_SanPham extends CI_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();
		
	}

	public function add($TenSanPham,$DuongDan,$GiaGoc,$GiaBan,$LoaiSanPham,$AnhChinh,$HinhAnh,$MoTaNgan,$MoTaDai,$MaChuyenMuc,$The){
		$data = array(
	        "TenSanPham" => $TenSanPham,
	        "DuongDan" => $DuongDan,
	        "GiaGoc" => $GiaGoc,
	        "GiaBan" => $GiaBan,
	        "LoaiSanPham" => $LoaiSanPham,
	        "AnhChinh" => $AnhChinh,
	        "HinhAnh" => $HinhAnh,
	        "MoTaNgan" => $MoTaNgan,
	        "MoTaDai" => $MoTaDai,
	        "MaChuyenMuc" => $MaChuyenMuc,
	        "The" => $The
	    );

	    $this->db->insert('sanpham', $data);
	    $lastInsertedId = $this->db->insert_id();

	    return $lastInsertedId;
	}

	public function checkNumber()
	{
		$sql = "SELECT sanpham.*, chuyenmuc.TenChuyenMuc FROM sanpham,chuyenmuc WHERE sanpham.MaChuyenMuc = chuyenmuc.MaChuyenMuc AND sanpham.TrangThai = 1";
		$result = $this->db->query($sql);
		return $result->num_rows();
	}

	public function getAll($start = 0, $end = 10){
		$sql = "SELECT sanpham.*, chuyenmuc.TenChuyenMuc, chuyenmuc.MaChuyenMuc FROM sanpham, chuyenmuc WHERE sanpham.MaChuyenMuc = chuyenmuc.MaChuyenMuc AND sanpham.TrangThai = 1 ORDER BY sanpham.MaSanPham DESC LIMIT ?, ?";
		$result = $this->db->query($sql, array($start, $end));
		return $result->result_array();
	}

	public function getById($MaSanPham){
		$sql = "SELECT * FROM sanpham WHERE MaSanPham = ? AND TrangThai = 1";
		$result = $this->db->query($sql, array($MaSanPham));
		return $result->result_array();
	}

	public function update($TenSanPham,$DuongDan,$GiaGoc,$GiaBan,$LoaiSanPham,$AnhChinh,$HinhAnh,$MoTaNgan,$MoTaDai,$MaChuyenMuc,$The,$MaSanPham){
		$sql = "UPDATE sanpham SET TenSanPham = ?, DuongDan = ?, GiaGoc = ?, GiaBan = ?, LoaiSanPham = ?, AnhChinh = ?, HinhAnh = ?, MoTaNgan = ?, MoTaDai = ?, MaChuyenMuc = ?, The = ? WHERE MaSanPham = ?";
		$result = $this->db->query($sql, array($TenSanPham,$DuongDan,$GiaGoc,$GiaBan,$LoaiSanPham,$AnhChinh,$HinhAnh,$MoTaNgan,$MoTaDai,$MaChuyenMuc,$The,$MaSanPham));
		return $result;
	}

	public function delete($MaSanPham){
		$sql = "UPDATE sanpham SET TrangThai = 0 WHERE MaSanPham = ?";
		$result = $this->db->query($sql, array($MaSanPham));
		return $result;
	}

}

/* End of file Model_ChuyenMuc.php */
/* Location: ./application/models/Model_ChuyenMuc.php */