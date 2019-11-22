<div class="box box-info">
	<div class="box-header">
		<h3 class="box-title">Pemagang Baru</h3>
	</div>
	<div class="box-body">
		<form method="POST" action="<?= base_url()?>admin/Welcome/beritahu">
			<div class="table-responsive">
				<table class="table table-striped">
					<thead>
						<tr>
							<th>No</th>
							<th>Nama</th>
							<th>Email</th>
							<th>Detail</th>
							<th>Dokumen</th>
							<th>Status</th>
							<th>Catatan (opsional)</th>

						</tr>
					</thead>
					<tbody>
						<?php foreach ($magang as $key => $value): ?>
							<tr>
								<td><?php echo $key+1; ?></td>
								<td><?php echo $value['nama_magang']; ?></td>
								<td><?php echo $value['email_magang']; ?></td>
								<td><button type="button" class="btn btn-sm btn-warning" data-toggle="modal" data-target="#modal" onclick="detail(<?php echo $value['id_magang']; ?>)">Detail</button></td>
								<td>
									<a href="<?php echo base_url("assets/dokumen/$value[file_magang]"); ?>"target="_blank">Download</a>
								</td>
								<td>

									<select name="status_magang[<?php echo $value['id_magang']; ?>]"class="form-control">
										<option value="Pending">Pending</option>
										<option value="Diterima">Diterima</option>
										<option value="Ditolak">Ditolak</option>
									</select>
								</td>
								<td><input type="text" name="catatan[<?php echo $value['id_magang']; ?>]" class="form-control"></td>
							</tr>
						<?php endforeach ?>
					</tbody>
				</table>
			</div>
			<input type="submit" name="submit" class="btn btn-danger">
		</form>
		
	</div>
</div>
</div>
								<!-- Modal -->
									<div class="modal fade" id="modal" role="dialog">
										<div class="modal-dialog modal-lg" role="document">
  											  <div class="modal-content">
     											 <div class="modal-header text-center bg-primary">
												  <h4 class="modal-title w-100 font-weight-bold text-color-light">Detail Data</h4>
												  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          											<span aria-hidden="true">&times;</span>
       											 </button>
												</div>
												<div class="modal-body">
													<div class="row">
														<div class="table-responsive">
															<table class="table table-bordered table-striped" id="detail_data">
																
															</table>
														</div>
													</div>
			                   					 </div>
											</div>
										</div>
									</div>

<script type="text/javascript">
	//detail data pemagang baru
	function detail(id_magang)
	{
		$.getJSON("<?= base_url()?>admin/welcome/detail_data_pemagang_baru/"+id_magang,function(data){
			$('#detail_data').html(
				'<tr><th>Nama</th><td>'+data['nama_magang']+'</td></tr>'+
				'<tr><th>Nim</th><td>'+data['nim_magang']+'</td></tr>'+
				'<tr><th>Sekolah / Kampus</th><td>'+data['kampus_magang']+'</td></tr>'+
				'<tr><th>Jurusan</th><td>'+data['jurusan_magang']+'</td></tr>'+
				'<tr><th>Alamat Rumah</th><td>'+data['alamat_magang']+'</td></tr>'+
				'<tr><th>No. telp / WA</th><td>'+data['nohp_magang']+'</td></tr>'+
				'<tr><th>Jenis Kelamin</th><td>'+data['jk_magang']+'</td></tr>'+
				'<tr><th>Periode</th><td>'+data['tgl_awal']+' s/d '+data['tgl_akhir']+'</td></tr>'
				);
		});
	}
</script>