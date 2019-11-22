<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Faq extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Mfaq');
	}
	public function index()
	{
		$this->load->view('v_faq');		
	}
	public function get_tabel_faq()
	{
		$dt = $this->Mfaq->get_faq();
		echo json_encode($dt);
	}
	public function jawab($id_faq)
	{
		$dt = $this->Mfaq->get_detail($id_faq);
		echo json_encode($dt);
	}

}

/* End of file Faq.php */
/* Location: ./application/controllers/Faq.php */