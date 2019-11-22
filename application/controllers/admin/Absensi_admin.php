<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Absensi_admin extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Mabsensi','ma');
	}
	public function index()
	{
		$data['absensi']=$this->ma->tampil_absen();
		$data['mahasiswa'] = $this->ma->get_magang();
		$this->load->view('admin/header');
		$this->load->view('admin/sidebar');
		$this->load->view('admin/v_absensi_admin', $data);
		$this->load->view('admin/footer');		
	}

	public function cari()
	{
		$nama = $this->input->post('nama_magang');
		if ($nama==null)
		{
			redirect('admin/Absensi_admin','refresh');	
		}
		else
		{
			$data['absensi']=$this->ma->cari_absen($nama);
			$data['mahasiswa'] = $this->ma->get_magang();
			$this->load->view('admin/header');
			$this->load->view('admin/sidebar');
			$this->load->view('admin/v_absensi_admin', $data);
			$this->load->view('admin/footer');
		}
	}

}

/* End of file Absensi_admin.php */
/* Location: ./application/controllers/admin/Absensi_admin.php */