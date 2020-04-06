<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class Order extends CI_Controller {
 
	public function __construct()
	{
		parent::__construct();
		// if(!$this->session->userdata('username'))
		// {
		// 	redirect('login');
		// }
		$this->load->model('Order_model');
	}
	
	public function index()
	{
		$is_processed = $this->Order_model->process();
		if($is_processed){
			$this->cart->destroy();
			redirect('order/success');
		} else {
			$this->session->set_flashdata('error','Failed to processed your order, please try again!');
			redirect('cart');
		}
	}
 
	public function success()
	{
		redirect(base_url());
		
	}
}
