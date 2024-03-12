<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class GioHang extends MY_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Web/Model_SanPham');
	}

	public function index()
	{
		
	}

	public function add($product_id, $quantity) {
        $cart = $this->session->userdata('cart');
        
        if (!$cart) {
            $cart = array();
        }

        if(empty($quantity) || $quantity <= 0){
        	return;
        }
        
        if(count($this->Model_SanPham->getById($product_id)) == 0){
        	return;
        }

        $price = $this->Model_SanPham->getById($product_id)[0]['GiaBan'];
        $image = $this->Model_SanPham->getById($product_id)[0]['AnhChinh'];
        $name =  $this->Model_SanPham->getById($product_id)[0]['TenSanPham'];
        $slug = $this->Model_SanPham->getById($product_id)[0]['DuongDan'];
        if (isset($cart[$product_id])) {
            $cart[$product_id]['number'] += $quantity;
        } else {
            $cart[$product_id] = array(
                'id' => $product_id,
                'number' => $quantity,
                'price' => $price,
                'image' => $image,
                'name' => $name,
                'slug' => $slug, 
            );
        }

        $sumCart = 0;

        foreach ($cart as $key => $value) {
        	$sumCart += $value['price'] * $value['number'];
        }


        if(isset($_SESSION['saleCode'])){
            $saleCode = $this->session->userdata('saleCode');
            $sumCart = $sumCart - $saleCode;
        }

        $this->session->set_userdata('cart', $cart);
        $this->session->set_userdata('sumCart', $sumCart);
        $this->session->set_userdata('numberCart', count($cart));

        $data = array(
		    'sumCart' => number_format($sumCart),
		    'numberCart' => count($cart),
            'cart' => $cart
		);

		$json = json_encode($data);

		echo $json;
    }

}

/* End of file GioHang.php */
/* Location: ./application/controllers/GioHang.php */