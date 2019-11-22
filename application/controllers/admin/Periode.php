<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Periode extends CI_Controller {
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
		$this->load->model('Mperiode');
		$data['periode'] = $this->Mperiode->tampil();

		$this->load->view('admin/header');
		$this->load->view('admin/sidebar');
		$this->load->view('admin/periode/tampil', $data);
		$this->load->view('admin/footer');
	}

	function tambah()
	{
		$data['bulan']= array('Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'December');


		$this->load->view('admin/header');
		$this->load->view('admin/sidebar');
		$this->load->view('admin/periode/tambah', $data);
		$this->load->view('admin/footer');

		if ($this->input->post())
		{
			$this->load->model('Mperiode');
			$this->Mperiode->tambah($this->input->post());
			redirect('admin/periode','refresh');
		}
	}

	function hapus($id_periode)
	{
		//memanggil model
		$this->load->model("Mperiode");
		$this->Mperiode->hapus($id_periode);
		redirect('admin/periode','refresh');
	}


	function edit ($id_periode)
	{
		$data['bulan']= array('Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'December');
		
		//panggil model Mperiode

		$this->load->model('Mperiode');

		//model Mperiode menjalankan function detail
		$data['detail'] = $this->Mperiode->detail($id_periode);

		$this->load->view('admin/header');
		$this->load->view('admin/sidebar');
		$this->load->view('admin/periode/edit', $data);
		$this->load->view('admin/footer');

		//jika ada input post maka
		if ($this->input->post())
		 {
			$this->Mperiode->edit($this->input->post(),$id_periode);
			redirect('admin/periode','refresh');
		}
		
		
	}

}

/* End of file Periode.php */
/* Location: ./application/controllers/admin/Periode.php */