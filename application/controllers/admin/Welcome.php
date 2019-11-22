<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller 
{
	public function __construct()
	{
		parent::__construct();
		if(!$this->session->userdata('admin'))
		{
			redirect('admin/login','refresh');
		}

		$this->load->model('Mmagang');
	}

	public function index()
	{
		$data['magang'] = $this->Mmagang->tampil_magang_baru("Pending");

		//memanggil view
		$this->load->view('admin/header');
		$this->load->view('admin/sidebar');
		$this->load->view('admin/index', $data);
		$this->load->view('admin/footer');
		

	}

	public function detail_data_pemagang_baru($id_magang)
	{
		$dt = $this->Mmagang->detail_data($id_magang);
		echo json_encode($dt);
	}
	public function beritahu()
	{
		$input = $this->input->post('status_magang');
			$input2 = $this->input->post('catatan');
			//$this->Mmagang->ubah_status($input);
			foreach ($input as $id_magang => $status)
			{
				$hasil['status_magang'] = $status;
				$this->db->where('id_magang', $id_magang);
				$this->db->update('magang', $hasil);

				foreach ($input2 as $id_magang => $catatan) 
				{
					$hasil['catatan'] = $catatan;
					$data = [
						'id_magang' => $id_magang,
						'status_magang' => $status,
						'catatan' => $catatan
					];
					$this->db->insert('catatan_penolakan', $data);
					$this->kirim_email_pemberitahuan($id_magang);
					//$this->db->delete('magang', ['status_magang' => "Ditolak"]);
				}
			}
			redirect('admin','refresh');
	}

	private function kirim_email_pemberitahuan($id_magang)
	{
		$magang = $this->db->get_where('magang', ['id_magang' => $id_magang])->row_array();
		$catatan = $this->db->get_where('catatan_penolakan', ['id_magang' => $id_magang])->row_array();
		$config = [
			'protocol' => 'smtp',
			'smtp_host' => 'ssl://smtp.googlemail.com',
			'smtp_user' => 'boogjaofc@gmail.com',
			'smtp_pass' => 'Bookingsaja123',
			'smtp_port' => 465,
			'mailtype' => 'html',
			'charset' => 'utf-8',
			'newline' => "\r\n"
		];
		$this->load->library('email', $config);
		$this->email->from('boogjaofc@gmail.com','PT. Integra Inovasi Indonesia');
		$this->email->to($magang['email_magang']);
		$this->email->subject('Announcement');
		$this->email->message('Pengajuan magang anda : '. $catatan['status_magang'] .' <br>Catatan : '.$catatan['catatan'].'<br>Mohon maaf jika kami memiliki kekurangan saat proses pendaftaran');
		if ($this->email->send()) {
			return true;
		}
		else
		{
			echo $this->email->print_debugger();
			die;
		}
	}

	function logout()
	{
		$this->session->unset_userdata('admin');
		redirect('admin/login','refresh');
	}

}

/* End of file welcome.php */
/* Location: ./application/controllers/admin/welcome.php */