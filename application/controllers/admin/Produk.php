<?php
class Produk extends CI_Controller {

	//Function yang pertama kali dijalankan ketika controller ini dipakai
	public function __construct()
	{
	parent::__construct();
	$this->load->model("produk_model");
	$this->load->library(array('table'));
	$this->load->library(array('form_validation'));

	}

	public function index()
	{
		$data["produks"] = $this->produk_model->getAll();
		$this->load->view("admin/produk/lihat_produk", $data);
	}



	public function add()
    	{
			$produk = $this->produk_model;
			$validation = $this->form_validation;
			$validation->set_rules($produk->rules());	
			if ($validation->run()) {
				$produk->save();
				$this->session->set_flashdata('success', 'Berhasil disimpan');
			}
			$this->load->view("admin/produk/tambah_produk");
		}



		public function edit($id = null)
    	{
			if (!isset($id)) redirect('admin/produk/lihat_produk');
			$produk = $this->produk_model;
			$validation = $this->form_validation;
			$validation->set_rules($produk->rules());
			if ($validation->run()) {
				$produk->update();
				$this->session->set_flashdata('success', 'Berhasil disimpan');
				redirect('admin/produk');
			}
			$data["produk"] = $produk->getById($id);
			if (!$data["produk"]) show_404();
			
			$this->load->view("admin/produk/edit_produk", $data);
		}



		public function delete($id=null)
    	{
			if (!isset($id)) show_404();
			
			if ($this->produk_model->delete($id)) {
				redirect(site_url('admin/produk'));
        }
    }
}
