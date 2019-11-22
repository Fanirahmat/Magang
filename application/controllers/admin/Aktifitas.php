<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Aktifitas extends CI_Controller 
{
	public function __construct()
	{
		parent::__construct();
		if(!$this->session->userdata('admin'))
		{
			redirect('admin/login','refresh');
		}
		$this->load->model('Maktifitas');

	}

	public function index()
	{
		//$data['data_aktifitas'] = $this->Maktifitas->aktifitas_magang();
		$data['aktifitas'] = $this->Maktifitas->tampil_aktifitas();
		$data['mahasiswa'] = $this->Maktifitas->get_magang();
		$this->load->view('admin/header');
		$this->load->view('admin/sidebar');
		$this->load->view('admin/tampil_aktifitas', $data);
		$this->load->view('admin/footer');		
	}

	public function detail($id_aktifitas)
	{
		$dt = $this->Maktifitas->tm_detail($id_aktifitas);
		echo json_encode($dt);
	}
	public function cari()
	{
		$nama = $this->input->post('nama_magang');
		if ($nama==null)
		{
			redirect('admin/aktifitas','refresh');	
		}
		else
		{
			$data['aktifitas'] = $this->Maktifitas->cari($nama);
			$data['mahasiswa'] = $this->Maktifitas->get_magang();
			$this->load->view('admin/header');
			$this->load->view('admin/sidebar');
			$this->load->view('admin/tampil_aktifitas', $data);
			$this->load->view('admin/footer');	
		}
	}
	public function ubah_status_aktifitas()
	{
		$input = $this->input->post('status_aktifitas');
		foreach ($input as $id_aktifitas => $status) 
		{
			$hasil['status_aktifitas'] = $status;
			$this->db->where('id_aktifitas', $id_aktifitas);
			$this->db->update('aktifitas', $hasil);
		}
		redirect('admin/aktifitas','refresh');
	}
	function hapus($id)
	{
		$this->Maktifitas->hapus_aktifitas($id);
		redirect('admin/aktifitas','refresh');
	}

}

/* End of file Aktifitas.php */
/* Location: ./application/controllers/admin/Aktifitas.php */