<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profil extends CI_Controller 
{
	public function __construct()
	{


		parent::__construct();
		$this->load->model('Mmagang');
		$this->load->model('Mprofil');
	}

	public function index()
	{
		if ($this->session->userdata('logged')==true) 
		{
			$id = $this->session->userdata('id_magang');
			$data['magang'] = $this->Mmagang->detail($id);
			//$data['periode_pemagang'] = $this->Mmagang->get_periode($id]);

			$this->load->view('mahasiswa/header');
			$this->load->view('mahasiswa/sidebar');
			$this->load->view('mahasiswa/profil/profil', $data );
			$this->load->view('mahasiswa/footer');
		} 
		else 
		{
			redirect('Welcome','refresh');
		}
	}
	public function simpan_data_lanjutan()
	{
		if ($this->session->userdata('logged')==true) 
		{
			$id = $this->session->userdata('id_magang');
			$cek = $this->db->get_where('datacv', ['id_magang' => $id])->row_array();
			if (empty($cek)) 
			{
				$this->Mprofil->tambah_datacv($id);
				redirect('mahasiswa/Profil','refresh');
				
			} 
			else 
			{
				$this->Mprofil->update_datacv($id);
				redirect('mahasiswa/Profil','refresh');;
				
			}
		} 
		else 
		{
			redirect('Welcome','refresh');
		}
	}

	function download()
	{
		//mendapatkan data login mahasiswa
		$login = $this->session->userdata('mahasiswa');
		$data["magang"] = $this->Mmagang->detail($login['id_magang']);

		$this->load->view('mahasiswa/profil/download', $data);
	}
	public function detail()
	{
		if ($this->session->userdata('logged')==true) 
		{
			$id = $this->session->userdata('id_magang');
			$dt = $this->db->get_where('magang', ['id_magang' => $id])->row_array();
			echo json_encode($dt);
		} 
		else 
		{
			redirect('Welcome','refresh');
		}
		
	}
	public function detailCV()
	{
		if ($this->session->userdata('logged')==true) 
		{
			$id = $this->session->userdata('id_magang');
			$dt = $this->db->get_where('datacv',  ['id_magang' => $id])->row_array();
			echo json_encode($dt);
		} 
		else 
		{
			redirect('Welcome','refresh');
		}
	}
	public function editDataCV()
	{
		if ($this->session->userdata('logged')==true) 
		{
			$input = $this->input->post();
			$data = [
				'nama_magang' => $input['nama_magang'],
				'ttl_magang' => $input['ttl_magang'],
				'alamat_magang' => $input['alamat_magang'],
				'jk_magang' => $input['jk_magang'],
				'nohp_magang' => $input['nohp_magang'],
				'email_magang' => $input['email_magang']
			];
			$update = $this->db->where('id_magang', $this->session->userdata('id_magang'))->update('magang',$data);
			if ($update) 
			{
				echo "<script>alert('Berhasil update');</script>";	
			} 
			else 
			{
				echo "<script>alert('Gagal update, tanyakan ke pembimbing');</script>";
			}
			
			redirect('mahasiswa/Profil','refresh');
		} 
		else 
		{
			redirect('Welcome','refresh');
		}
		
	}

	Public function lihat_cv()
	{
		if ($this->session->userdata('logged')==true) 
		{
			$id = $this->session->userdata('id_magang');
			$data['cv_magang'] = $this->Mmagang->detail_cv($id);
			$this->load->view('mahasiswa/header');
			$this->load->view('mahasiswa/sidebar');
			$this->load->view('mahasiswa/profil/v_cv',$data);
			$this->load->view('mahasiswa/footer');
		} 
		else 
		{
			redirect('Welcome','refresh');
		}
		
	}

	public function hapus_datacv()
	{
		if ($this->session->userdata('logged')==true) 
		{
			$id = $this->session->userdata('id_magang');
			$hapus = $this->db->where('id_magang', $id)->delete('datacv');
			if ($hapus) {
	            $dt['status']=1;
	            echo json_encode($dt);
	        } else {
	            $dt['status']=0;
	            echo json_encode($dt);
	        }
		} 
		else 
		{
			redirect('Welcome','refresh');
		}
		
	}


}

/* End of file Profil.php */
/* Location: ./application/controllers/mahasiswa/Profil.php */