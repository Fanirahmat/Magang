<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mlogin extends CI_Model 
{


	function login_admin($username,$password)
	{
		$pass=sha1($password);

		$this->db->where('username', $username);
		$this->db->where('password', $pass);
		$ambil = $this->db->get('admin');

		$cek = $ambil->num_rows();


		if($cek==1)
		{
			$akun = $ambil->row_array();
			$this->session->set_userdata('admin', $akun);

			return 'berhasil';
		}
		else
		{
			return 'gagal';
		}
	}

	

}

/* End of file Mlogin.php */
/* Location: ./application/models/Mlogin.php */