<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class Login extends CI_Controller {
	public function __construct()
	{
	parent::__construct();
	$this->load->library(array('form_validation'));
	}
 
	public function index()
	{
		$this->form_validation->set_rules('fusername','Username','required|alpha_numeric');
		$this->form_validation->set_rules('fpassword','Password','required|alpha_numeric');
		
		if($this->form_validation->run() == FALSE)
		{
			$this->load->view('frontend/form_login');
		} else {
			$this->load->model('user_model');
			$valid_user = $this->user_model->check_credential();
			
			if($valid_user == FALSE)
			{
				$this->session->set_flashdata('error','Wrong Username / Password!');
				redirect('login');
			} else {
				// if the username and password is a match
				$this->session->set_userdata('username', $valid_user->username);
				$this->session->set_userdata('hak_akses', $valid_user->group);
				
				switch($valid_user->hak_akses){
					case 1 : //admin
								redirect('admin/products'); 
								break;
					case 2 : //member
								redirect(base_url());
								break;
					default: break; 
				}
			}
		}
	}
	public function logout()
	{
		$this->session->sess_destroy();
		redirect('index.php');
	}
}
