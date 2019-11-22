<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Absensi extends CI_Controller {
  

  	public function index()
  	{
        if ($this->session->userdata('logged')==true) {
            $this->load->view('mahasiswa/header');
            $this->load->view('mahasiswa/sidebar');
            $this->load->view('mahasiswa/v_absensi');
            $this->load->view('mahasiswa/footer');  
        } 
        else 
        {
            redirect('Welcome','refresh');
        }
    }
    public function absen_izin()
    {
      if ($this->session->userdata('logged')==true) {
          $alasan = $this->input->post('alasan');
           date_default_timezone_set("Asia/Jakarta");
          $tanggal = date("Y-m-d");
          $jam = date("h:i:sa");
           $data = [
               'id_magang' => $this->session->userdata('id_magang'),
               'tanggal' => $tanggal,
               'jam_absen' => $jam,
               'absen' => 2,
               'alasan' => $alasan
           ];
           $this->db->insert('absensi', $data);
           
           //$this->session->set_flashdata('pesan_izin', '<div class="alert alert-success">Berhasil mengirim izin</div>');
           
           redirect('mahasiswa/Absensi','refresh');
        }
        else 
        {
          redirect('Welcome','refresh');
        }
    }

    
    public function absen_masuk()
    {
      if ($this->session->userdata('logged')==true) {
          date_default_timezone_set("Asia/Jakarta");
          $tanggal = date("Y-m-d");
          $jam = date("h:i:sa");
          $data = [
              'id_magang' => $this->session->userdata('id_magang'),
              'tanggal' => $tanggal,
              'jam_absen' => $jam,
              'absen' => 1
          ];
          $masuk = $this->db->insert('absensi', $data);
          if ($masuk) 
          {
              $dt['status']=1;
              echo json_encode($dt);
          } 
          else 
          {
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

/* End of file Absensi.php */
/* Location: ./application/controllers/mahasiswa/Absensi.php */