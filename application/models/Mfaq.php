<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mfaq extends CI_Model {

	public function get_faq()
	{
		return $this->db->get('faq')->result();
	}	
	public function get_detail($id_faq)
	{
		return $this->db->where('id_faq', $id_faq)->get('faq')->row();
	}

}

/* End of file Mfaq.php */
/* Location: ./application/models/Mfaq.php */