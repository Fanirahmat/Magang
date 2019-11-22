<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Magang extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		if(!$this->session->userdata('admin'))
		{
			redirect('admin/login','refresh');
			
		}
	}

	public function index()
	{

		//mmebuat model

		$this->load->model("Mmagang");
		$data['magang'] = $this->Mmagang->tampil();



		$this->load->view('admin/header');
		$this->load->view('admin/sidebar');
		$this->load->view('admin/magang/tampil',$data);
		$this->load->view('admin/footer');
	}
	
}

/* End of file Magang.php */
/* Location: ./application/controllers/admin/Magang.php */