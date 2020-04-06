<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cart extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('produk_model');
	}
 
	public function index()
	{
		//menampilkan produk dengan fungsi get_all_produk yg ada di produk-model
		$data['produks'] = $this->produk_model->get_all_produk();
		$this->load->view('frontend/index', $data);
	}
	

	function add_to_cart(){
		$data =  array(
			'id' => $this->input->post('produk_id'),
			'name' => $this->input->post('produk_nama'),
			'price' => $this->input->post('produk_harga'),
			'qty' => $this->input->post('quantity'),
		);
		$this->cart->insert($data);
		echo $this->show_cart();
	}

	function show_cart(){
		$output = '';
		$no = 0 ;
		foreach ($this->cart->contents() as $items){
			$no++;
			$output .='
				<tr>
					<td>'.$items['name'].'</td>
					<td>'.number_format($items['price']).'</td>
					<td>'.$items['qty'].'</td>
					<td>'.number_format($items['subtotal']).'</td>
					<td>
						<button type="button" id="'.$items['rowid'].'" 
							class="hapus_cart btn btn-danger btn-sm">Batal
						</button>
					</td>
				</tr>
			';
		}
		$output .='
			<tr class="table-warning">
				<th colspan="3">Total</th>
				<th colspan="2">'.'Rp '.number_format($this->cart->total()).'</th>
			</tr>
		';
		return $output;
	}

	function load_cart(){
		echo $this->show_cart();
	}

	function hapus_cart(){
		$data =  array(
			'rowid' => $this ->input->post('row_id'),
			'qty' => 0,
		);

		$this->cart->update($data);
		echo $this->show_cart();
	}

	function show_checkout(){
		$output = '';
		$no = 0 ;
		foreach ($this->cart->contents() as $items){
			$no++;
			$output .='
				<tr>
					<td>'.$items['name'].'</td>
					<td>'.number_format($items['price']).'</td>
					<td>'.$items['qty'].'</td>
					<td>'.number_format($items['subtotal']).'</td>
				</tr>
			';
		}
		$output .='
			<tr class="table-warning">
				<th colspan="3">Total</th>
				<th colspan="2">'.'Rp '.number_format($this->cart->total()).'</th>
			</tr>
		';
		return $output;
		echo $output;
	}

	function load_checkout(){
		echo $this->show_checkout();
	}
}
