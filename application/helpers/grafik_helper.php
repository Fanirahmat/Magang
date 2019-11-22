<?php 

function grafik()
{
	$bulan = array('Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November','Desember');

	$tahun=date("Y");

	//memanggil semua fungsi milik CI
	$ci =& get_instance();
	$semua=array();
	foreach ($bulan as $key => $nama_bulan)
	{
		$ci->db->join('periode_magang','periode_pemagang.id_periode = periode_magang.id_periode','left');
		$ci->db->where('bulan', $nama_bulan);
		$ci->db->where('tahun', $tahun);
		$ambil = $ci->db->get('periode_pemagang');
		$total = $ambil->num_rows();
		$semua[]=$total;
	}

	return $semua;
}

function pdf($isi)
{
	include_once APPPATH.'libraries/dompdf/autoload.inc.php';

	$file_name = 'profil.pdf';
	$html_code = $isi;
	$pdf = new Dompdf\Dompdf(array('enable_remote' => true));
	$pdf->load_html($html_code);
	$pdf->render();
	$file = $pdf->output();
	file_put_contents($file_name, $file);
	header('Content-type: application/pdf');
	header('Content-Disposition: inline; filename="file.pdf"');
	header('Content-Transfer-Encoding: binary');
	header('Content-Length: ' . filesize($file_name));
	header('Accept-Ranges: bytes');
	readfile($file_name);
}
?>