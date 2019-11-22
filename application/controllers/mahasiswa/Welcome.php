<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller 

{

	// buat construct

	function __construct()
	{
		parent::__construct();
		$this->load->model('Mmagang');
		$this->load->model('Maktifitas');
	}



	public function index()
	{
		if ($this->session->userdata('logged')==true) 
		{
			$id = $this->session->userdata('id_magang');
			$data['magang'] = $this->Mmagang->detail($id);

			$data['aktifitas'] = $this->Maktifitas->tampil_aktifitas_magang($id);

			//$data['detail'] = $this->Mmagang->detail_magang($login['id_magang']);

			$this->load->view('mahasiswa/header');
			$this->load->view('mahasiswa/sidebar');
			$this->load->view('mahasiswa/index' ,$data);
			$this->load->view('mahasiswa/footer');

			if ($this->input->post())
			{
				$this->Mmagang->ubah_magang($this->input->post(), $id);
				redirect('mahasiswa','refresh');
			}
		} 
		else 
		{
			redirect('Welcome','refresh');
		}
		
	}
	public function upload_surat_magang()
	{
		$id = $this->session->userdata('id_magang');
		$config['upload_path'] = './assets/SuratMagang';
		$config['allowed_types'] = 'pdf';
		$config['max_size']  = '1000000';
		$config['max_width']  = '1024000000000000000000';
		$config['max_height']  = '768000000000000000000000';
		
		$this->load->library('upload', $config);
		
		if ( ! $this->upload->do_upload('file_magang'))
		{
			$error = array('status' =>0, 'error' => $this->upload->display_errors());
			echo json_encode($error);
		}
		else
		{
			$input = $this->upload->data('file_name');
			$data = [
				'file_magang' => $input
			];
			$this->db->where('id_magang', $id)->update('magang', $data);
			$data = array('status'=>1, 'upload_data' => $this->upload->data());
			echo json_encode($data);
		}
	}

	

}

/* End of file Welcome.php */
/* Location: ./application/controllers/mahasiswa/Welcome.php */