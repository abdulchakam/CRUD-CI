<?php 
	defined('BASEPATH') OR exit('No direct script access allowed');

class Register_model extends CI_Model{

		//Variabel $_tabel (Nama Tabel di database)
		private $_tabel = "users";

		//Variabel untuk masing-masing field atau kolom
		public $id;
		public $username;
		public $email;
		public $password;
		public $hak_akses;

		//Function untuk menyimpan data yang diinput dari form
	public function save(){ 

		$post= $this->input->post();
		$this->id = uniqid();
		$this->username = $post['fusername'];
		$this->email = $post['femail'];
		$this->password = md5($post['fpassword']);
		$this->hak_akses= $post['fgroup'];
		return $this->db->insert($this->_tabel, $this);
	}


} 
