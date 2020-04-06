<?php 
	defined('BASEPATH') OR exit('No direct script access allowed');

	class Produk_model extends CI_Model{
	
	//Variabel $_tabel (Nama Tabel di database)
	private $_tabel = "produk";

	//Variabel untuk masing-masing field atau kolom
	public $produk_id;
	public $produk_nama;
	public $produk_harga;
	public $produk_deskripsi;
	public $produk_image="default.jpg";


	//Function untuk memvalidasi Form
	public function rules(){
		return[
			['field' => 'produk_nama',
			'label' => 'Nama',
			'rules' => 'required'],

			['field' => 'produk_harga',
			'label' => 'Harga',
			'rules' => 'numeric'],

			['field' => 'produk_deskripsi',
			'label' => 'Deskripsi',
			'rules' => 'required']
		];
	}

	//Function untuk menampilkan semua data yang ada di tabel
	public function getAll(){
		return $this->db->get($this->_tabel)->result();
	}

	//Function untuk mengambil data berdasarkan id (produk_id)
	public function getById($id)
    {
      return $this->db->get_where($this->_tabel, ["produk_id" => $id])->row();
    }

	//Function untuk menyimpan data yang diinput dari form
	public function save(){
		$post= $this->input->post();
		$this->produk_id = uniqid();
		$this->produk_nama = $post['produk_nama'];
		$this->produk_harga = $post['produk_harga'];
		$this->produk_image = $this->_uploadImage();
		$this->produk_deskripsi = $post['produk_deskripsi'];
		return $this->db->insert($this->_tabel, $this);
	}

	//Function untuk mengupdate atau mengedit data
	public function update(){
		$post= $this->input->post();
		$this->produk_id = $post['produk_id'];
		$this->produk_nama = $post['produk_nama'];
		$this->produk_harga = $post['produk_harga'];
		if (!empty($_FILES["produk_image"]["name"])) {
			$this->produk_image = $this->_uploadImage();
		} else {
			$this->produk_image = $post["old_image"];
		}
		$this->produk_deskripsi = $post['produk_deskripsi'];
		return $this->db->update($this->_tabel, $this, array('produk_id' => $post['produk_id']));
	}

	//Function untuk menghapus data 
	public function delete($id){
		$this->_deleteImage($id);
		return $this->db->delete($this->_tabel, array("produk_id" => $id));
	}

	//function untuk proses upload gambar
	private function _uploadImage()
	{
			$config['upload_path']          = './upload/produk/';
			$config['allowed_types']        = 'gif|jpg|png';
			$config['file_name']            = $this->produk_id;
			$config['overwrite']						= true;
			$config['max_size']             = 1024; // 1MB
			// $config['max_width']            = 1024;
			// $config['max_height']           = 768;
			$this->load->library('upload', $config);
			if ($this->upload->do_upload('produk_image')) {
					return $this->upload->data("file_name");
			}
			return "default.jpg";
	}

	private function _deleteImage($id)
	{
			$product = $this->getById($id);
			if ($product->produk_image != "default.jpg") {
				$filename = explode(".", $product->produk_image)[0];
			return array_map('unlink', glob(FCPATH."upload/produk/$filename.*"));
			}
	}


	function get_all_produk(){
		$hasil = $this->db->get('produk');
		return $hasil->result();
	}
		
}
