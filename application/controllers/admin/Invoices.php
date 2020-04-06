<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Invoices extends CI_Controller {
	public function __construct(){
		parent::__construct();
	
		
		//load model -> model_products
		$this->load->model('order_model');
	}
	
	public function index()
	{
		$data['invoices'] = $this->order_model->all();
		$this->load->view('admin/view_invoices', $data);
	}

    public function detail($invoice_id)
    {
        $data['invoice'] = $this->order_model->get_invoice_by_id($invoice_id);
        $data['orders']  = $this->order_model->get_orders_by_invoice($invoice_id);
		$this->load->view('admin/detail_invoices', $data);
    }
}
