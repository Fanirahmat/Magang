<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Aktifitas extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->library('pdf');
		$this->load->model('Mmagang');
		$this->load->model('Maktifitas');	
	}
	public function index()
	{
		if ($this->session->userdata('logged')==true) 
		{
			$id = $this->session->userdata('id_magang');
			$data['aktifitas'] = $this->Maktifitas->tampil_aktifitas_magang($id);
			//$data['periode_pemagang'] = $this->Mmagang->periode_magang($login['id_magang']);


			$this->load->view('mahasiswa/header');
			$this->load->view('mahasiswa/sidebar');
			$this->load->view('mahasiswa/aktifitas', $data );
			$this->load->view('mahasiswa/footer');
		} 
		else 
		{
			redirect('Welcome','refresh');
		}
	}
	public function tambah_aktifitas()
	{
		if ($this->session->userdata('logged')==true) 
		{
			$config['upload_path'] = './assets/capture_aktivitas';
			$config['allowed_types'] = 'gif|jpg|png|jpeg';
			$config['max_size']  = '100000000000';
			$config['max_width']  = '10240000000000';
			$config['max_height']  = '76800000000000000';
			
			$this->load->library('upload', $config);
			
			if ( ! $this->upload->do_upload('capture_aktifitas')){
				echo "<script>alert('Yaaah... Gagal Tambah, tanyakan ke pembimbing');</script>";
				redirect('mahasiswa/aktifitas','refresh');
			}
			else
			{
				$input = $this->input->post();
				$id = $this->session->userdata('id_magang');
				//date_default_timezone_set("Asia/Jakarta");
          		$tanggal = date("Y-m-d");
				if ($input['tgl_aktifitas']=="") 
				{
					$data = [
						'id_magang' => $id,
						'tgl_aktifitas' => $tanggal,
						'isi_aktifitas' => $input['isi_aktifitas'],
						'status_aktifitas' => "pending",
						'capture_aktifitas' => $this->upload->data('file_name')
					];
				} 
				else 
				{
					$data = [
						'id_magang' => $id,
						'tgl_aktifitas' => $input['tgl_aktifitas'],
						'isi_aktifitas' => $input['isi_aktifitas'],
						'status_aktifitas' => "pending",
						'capture_aktifitas' => $this->upload->data('file_name')
					];
				}
				
				
				
				$this->db->insert('aktifitas', $data);
				echo "<script>alert('Berhasil Tambah');</script>";
				redirect('mahasiswa/aktifitas','refresh');	
			}
		} 
		else 
		{
			redirect('Welcome','refresh');
		}
	}

	function hapus($id)
	{
		if ($this->session->userdata('logged')==true) 
		{
			$this->Maktifitas->hapus_aktifitas_mahasiswa($id);
			redirect('mahasiswa/aktifitas','refresh');
		} 
		else 
		{
			redirect('Welcome','refresh');
		}
	}

	
	// function untuk cetak laporan aktifitas dengan PDF
    public function cetak_pdf()
    {
    	if ($this->session->userdata('logged')==true) 
		{
			$id = $this->session->userdata('id_magang');
	    	$cek_status = $this->db->get_where('aktifitas', ['id_magang' => $id, 'status_aktifitas' => 'pending'])->row_array();
	    	if ($cek_status) 
	    	{
	    		echo "<script>alert('Tidak Bisa Cetak, karena ada aktiftas yang masih pending');</script>";
	    		redirect('mahasiswa/aktifitas','refresh');
	    	}
	    	else
	    	{
	    		$pdf = new FPDF('P','mm','A4'); //L = lanscape P= potrait
		        // membuat halaman baru
		        $pdf->AddPage();
		        // setting jenis font yang akan digunakan
		        $pdf->SetFont('Arial','B',16);
		        $ya = 44;
		        // mencetak string 
		        $pdf->Cell(190,7,'Laporan Data Aktifitas Mahasiswa Selama Magang',0,1,'C');
		        $pdf->SetFont('Arial','B',12);
		        $pdf->Cell(190,7,'PT. INTEGRA INOVASI INDONESIA',0,1,'C');
		        // Memberikan space kebawah agar tidak terlalu rapat
		        $pdf->Cell(10,7,'',0,1);
		        $pdf->SetFont('Arial','B',10);
		        $pdf->Cell(15,6,'No.',1,0);
		        $pdf->Cell(55,6,'NAMA MAHASISWA',1,0);
		        $pdf->Cell(40,6,'TANGGAL',1,0);
		        $pdf->Cell(55,6,'ISI AKTIFITAS',1,0);
		        $pdf->Cell(25,6,'STATUS',1,1);
		        $pdf->SetFont('Arial','',10);
		        $data = $this->Maktifitas->tampil_aktifitas_cetak_pdf($id);
		        $no=0;
		        foreach ($data as $row){
		        	$no++;
		            $pdf->Cell(15,6,$no,1,0);
		            $pdf->Cell(55,6,$row->nama_magang,1,0);
		            $pdf->Cell(40,6,date("d-F-Y", strtotime($row->tgl_aktifitas)),1,0);
		            $pdf->Cell(55,6,$row->isi_aktifitas,1,0);
		            $pdf->Cell(25,6,$row->status_aktifitas,1,1);  
		        }
		        $pdf->Output();
	    	}
		} 
		else 
		{
			redirect('Welcome','refresh');
		}
    }

}

/* End of file Aktifitas.php */
/* Location: ./application/controllers/mahasiswa/Aktifitas.php */