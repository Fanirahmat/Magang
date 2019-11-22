<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller 
{
	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Mlogin');
	}

	public function index()
	{
		$this->load->view('admin/v_login');
		if($this->input->post())
		{
			$username = $this->input->post('username');
			$password = $this->input->post('password');

			$cek = $this->Mlogin->login_admin($username,$password);
			if($cek=="berhasil")
			{
				redirect('admin','refresh');
			}
			else
			{
				redirect('admin/login','refresh');
			}
		}
		
	}

}

/* End of file Login.php */
/* Location: ./application/controllers/admin/Login.php */