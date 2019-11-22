<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Maktifitas extends CI_Model 
{

	function tampil_aktifitas_magang($id)
	{
		
		//$this->db->join('periode_pemagang', 'aktifitas.id_periode_pemagang = periode_pemagang.id_periode_pemagang', 'left');
		$ambil = $this->db->query("SELECT * FROM `aktifitas` WHERE id_magang = $id ORDER BY tgl_aktifitas");
		$data = $ambil->result_array();
		return $data;

	}
	//tm detail
	public function tm_detail($id_aktifitas)
	{
		return $this->db->where('id_aktifitas', $id_aktifitas)->get('aktifitas')->row();
	}
	public function tampil_aktifitas_cetak_pdf($id)
	{
		return $this->db->join('magang', 'magang.id_magang = aktifitas.id_magang')
				 ->where('aktifitas.id_magang', $id)
				 ->order_by('tgl_aktifitas')
				 ->get('aktifitas')
				 ->result();
	}

	function aktifitas_magang()
	{
		$this->db->join('periode_pemagang', 'aktifitas.id_periode_pemagang = periode_pemagang.id_periode_pemagang', 'left');
		$this->db->join('magang', 'periode_pemagang.id_magang = magang.id_magang', 'left');
		$ambil = $this->db->get('aktifitas');
		$data = $ambil->result_array();
		return $data;
	}


	function tampil_aktifitas()
	{
		$ambil = $this->db->join('magang', 'aktifitas.id_magang = magang.id_magang', 'left')->where('magang.status_magang','Diterima')->order_by('tgl_aktifitas')->get('aktifitas');
		$data = $ambil->result_array();


		$semua=array();
		foreach ($data as $key => $value) 
		{
			$ambil1 = $this->db->join('magang', 'aktifitas.id_magang = magang.id_magang', 'left')->order_by('tgl_aktifitas')->get('aktifitas');
			$data1 = $ambil1->result_array();
			$value['detail']=$data1;
			$semua[] = $value;
		}
		return $semua;

	}
	public function cari($nama)
	{
		$ambil = $this->db->where('nama_magang',$nama)
						  ->join('magang', 'aktifitas.id_magang = magang.id_magang', 'left')
						  ->order_by('tgl_aktifitas')
						  ->get('aktifitas');
		$data = $ambil->result_array();


		$semua=array();
		foreach ($data as $key => $value) 
		{
			$ambil1 = $this->db->where('nama_magang',$nama)
							   ->join('magang', 'aktifitas.id_magang = magang.id_magang', 'left')
							   ->order_by('tgl_aktifitas')
							   ->get('aktifitas');
			$data1 = $ambil1->result_array();
			$value['detail']=$data1;
			$semua[] = $value;
		}

		return $semua;
	}

	public function get_magang()
	{
		return $this->db->where('status_magang', 'Diterima')->get('magang')->result();
	}

	function hapus_aktifitas($id)
	{
		$this->db->where('id_aktifitas', $id);
		$this->db->delete('aktifitas');
	}

	function hapus_aktifitas_mahasiswa($id)
	{
		$this->db->where('id_aktifitas', $id);
		$this->db->delete('aktifitas');
	}

	

	

}

/* End of file Maktifitas.php */
/* Location: ./application/models/Maktifitas.php */