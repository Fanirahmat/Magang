<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mprofil extends CI_Model {

	public function tambah_datacv($id)
	{
		$input = $this->input->post('ckeditor');
		$data = array('id_magang' =>  $id,
					'data' => $input );
		return $this->db->insert('datacv', $data);
	}
	public function update_datacv($id)
	{
		$data = [
					'data' => $input = $this->input->post('ckeditor')
				];
		return $this->db->where('id_magang', $id)->update('datacv',$data);	
	}

}

/* End of file Mprofil.php */
/* Location: ./application/models/Mprofil.php */