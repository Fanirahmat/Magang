<div class="box box-info">
	<div class="box-header text-center">
		<h3>Laporan Aktifitas</h3>
	</div>
	<div class="box-body">
		<form method="POST" action="<?= base_url()?>mahasiswa/Aktifitas/tambah_aktifitas" enctype="multipart/form-data">
			<div class="row">
				<div class="col-md-6">
					<div class="form-group">
						<label>Tanggal</label>
						<input type="date" class="form-control" name="tgl_aktifitas">
						<span class="text-danger">* Apabila tanggal sesuai hari ini, kosongkan saja</span>
					</div>
					<div class="form-group">
						<label>Capture Hasil</label>
						<input type="file" class="form-control" required="true" name="capture_aktifitas">
					</div>
				</div>
				<div class="col-md-6">
					<div class="form-group">
						<label>Kegiatan</label>
						<textarea name="isi_aktifitas" placeholder="Isi Aktifitas" cols="30" rows="6" class="form-control" required="true"></textarea>
					</div>
				</div>
			</div>
			<input type="submit" class="btn btn-primary"> &nbsp;
			<a href="<?= base_url()?>mahasiswa/Aktifitas/cetak_pdf" class="btn btn-success">Lampirkan Ke PDF</a>
		</form>
		<hr>
		<div class="table-responsive">
			<table class="table table-striped">
				<thead>
					<tr>
						<th>No</th>
						<th>Tanggal</th>
						<th>Aktifitas</th>
						<th>Capture</th>
						<th>Status</th>
						<th>Aksi</th>
					</tr>
				</thead>
				<tbody>
					<?php foreach ($aktifitas as $key => $value): ?>
						<tr>
							<td><?php echo $key+1; ?></td>
							<td><?php echo date("d-F-Y", strtotime($value['tgl_aktifitas'])); ?></td>
							<td><?php echo $value['isi_aktifitas']; ?></td>
							<td><img src="<?= base_url("assets/capture_aktivitas/$value[capture_aktifitas]")?>" width="100px" height="75px"></td>
							<td><?php echo $value['status_aktifitas']; ?></td>
							<td>
								<a href="<?php echo base_url("mahasiswa/aktifitas/hapus/$value[id_aktifitas]") ?>" class="btn btn-danger" onclick="return confirm ('Yakin mau hapus?');">Hapus</a>
							</td>
						</tr>

					<?php endforeach ?>
				</tbody>
			</table>
		</div>
	</div>
</div>