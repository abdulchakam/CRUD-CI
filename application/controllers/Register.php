<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Register extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->library(array('form_validation'));
		$this->load->model('register_model');
	}
	public function index(){

		$this->load->view("frontend/form_register");
	}


	public function add()
    	{
			$register = $this->register_model;
		
				$register->save();
				$this->session->set_flashdata('success', 'Berhasil disimpan');
				$this->load->view('frontend/form_register');
		}

		
	public function member(){
		$this->load->view('frontend/form_register');
	}
	public function tambah(){
		$this->load->view('frontend/form_login');
	}

}

