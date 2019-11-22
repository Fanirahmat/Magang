<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Daftar extends CI_Controller 
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Mmagang');
		$this->load->model('Mperiode');
	}

	public function index()
	{
		$this->load->view('daftar');

		if($this->input->post())
		{
			$input = $this->input->post();
			$id = $this->Mmagang->daftar_magang($input);
			if ($id=="gagal")
			{
				echo "<script>alert('Email sudah terdaftar'); location='".base_url('daftar')."'</script>";
			}
			else
			{
				if ($id=="gagal_no") 
				{
					echo "<script>alert('Nomor sudah terdaftar'); location='".base_url('daftar')."'</script>";
				} 
				else 
				{
					redirect("daftar/kampus/$id",'refresh');
				}
				
				
			}

		}
	}

	public function kampus($id_magang)
	{
		//$data['periode'] = $this->Mperiode->tampil_periode_tahun();
		$cek_data = $this->db->get_where('magang', ['id_magang' => $id_magang])->row_array();
		if ($cek_data) 
		{
			$this->load->view('daftar_2');
			if ($this->input->post())
			{
				//memasukkan data
				$input = $this->input->post();
				$inputan['kampus_magang'] = $input['kampus_magang'];
				$inputan['jurusan_magang'] = $input['jurusan_magang'];
				$inputan['nim_magang'] = $input['nim_magang'];
				$inputan['status_magang'] = "pending";
				$inputan['is_actived'] = 0;
				$inputan['date_created'] = time('hh:mm:ss');

				$this->Mmagang->daftarmagang($inputan,$id_magang);
				$this->Mmagang->periode_pemagang($id_magang);
				$this->session->set_flashdata('pesan', '<div class="alert alert-success"> silahkan cek email untuk aktifasi </div>');
				redirect("daftar/selesai/$id_magang",'refresh');
			}	
		}
		else
		{
			echo "<script>alert('Data yang kamu masukkan belum tersimpan, mungkin terjadi kesalahan');</script>";
			redirect('Daftar','refresh');
		}
	}

	function selesai($id_magang)
	{
		$cek_data = $this->db->get_where('magang', ['id_magang' => $id_magang])->row_array();
		if ($cek_data) 
		{
			$data['detail'] = $this->Mmagang->detail($id_magang);
			//$data['periode'] = $this->Mmagang->periode_magang($id_magang);
			$this->load->view('daftar_selesai', $data);

			//menyiapkan token
			$token = base64_encode(random_bytes(32));
			$magang = $this->db->get_where('magang', ['id_magang' => $id_magang])->row_array();
			$user_token = [
				'email' => $magang['email_magang'],
				'token' => $token,
				'date_created' => time('hh:mm:ss')
			];
			$this->db->insert('user_token', $user_token);
			$this->_sendEmail($token,'verify',$id_magang);
		}
		else
		{
			echo "<script>alert('Data yang kamu masukkan belum tersimpan, mungkin terjadi kesalahan');</script>";
			redirect('Daftar','refresh');
		}
	}

	private function _sendEmail($token,$type,$id_magang)
	{
		$magang = $this->db->get_where('magang', ['id_magang' => $id_magang])->row_array();
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
		if ($type == 'verify') 
		{
			$this->email->subject('Account Verification');
			$this->email->message('Click This link to verify your account : <a href="'. base_url() .'Daftar/verify?email='. 
				$magang['email_magang'] . '&token='. urlencode($token) .'">Activate</a>');
		}
		else if ($type == 'forgot')
		{
			//untuk fitur lupa password
		}

		//mengirim email verifikasi
		if ($this->email->send()) {
			return true;
		}
		else
		{
			echo $this->email->print_debugger();
			die;
		}
	}

	public function verify()
	{
		$email_magang = $this->input->get('email');
		$token = $this->input->get('token');
		$magang = $this->db->get_where('magang', ['email_magang' => $email_magang])->row_array();

		if ($magang) 
		{
			$user_token = $this->db->get_where('user_token', ['token' => $token])->row_array();
			if ($user_token) 
			{
				if (time() - $user_token['date_created'] < (60*60*24)) 
				{
					$this->db->set('is_actived', 1);
					$this->db->where('email_magang', $email_magang);
					$this->db->update('magang');
					$this->db->delete('user_token', ['email' => $email_magang]);
					$this->session->set_flashdata('pesan_login', '<div class="alert alert-success">'. $email_magang .' telah aktif , tunggu konfirmasi penerimaan untuk login</div>');
					redirect('Welcome/alert','refresh');
				}
				else
				{
					$this->db->delete('magang', ['email' => $email_magang]);
					$this->db->delete('user_token', ['email' => $email_magang]);
					$this->session->set_flashdata('pesan_login', '<div class="alert alert-danger">Activation Failed; Token Kadaluarsa</div>');
					redirect('Welcome/alert','refresh');
				}
			}
			else
			{
				$this->session->set_flashdata('pesan_login', '<div class="alert alert-danger">Activation Failed; Email Salah</div>');
				redirect('Welcome/alert','refresh');
			}
		}
		else
		{
			$this->session->set_flashdata('pesan_login', '<div class="alert alert-danger">Activation Failed; Email Salah</div>');
			redirect('Welcome/alert','refresh');
		}
	}

	

}

/* End of file Daftar.php */
/* Location: ./application/controllers/Daftar.php */