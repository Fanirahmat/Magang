<div class="row">
	<div class="col-md-3">
	<div class="box box-info">
			<div class="box-header">
				<h3 class="box-title">Filter</h3>
			</div>
			<div class="box-body">
				<form action="<?= base_url()?>admin/Absensi_admin/cari" method="POST">
					<div class="form-group">
						<label for="">Nama Mahasiswa</label>
						<select name="nama_magang" id="nama_magang" class="form-control">
							<option value=""></option>
							<?php
								foreach ($mahasiswa as $mh) {
									echo '<option value="'.$mh->nama_magang.'">'.$mh->nama_magang.'</option>';
								}
							?>
						</select><br>
						<input type="submit" class="btn btn-warning">
					</div>
				</form>
			</div>
		</div>
	</div>
	<div class="col-md-9">
	<div class="box box-info">
	<div class="box-header">
		<h3 class="box-title">Absensi Magang</h3>
	</div>
	<div class="box-body">
		<form method="POST" action="<?= base_url()?>admin/Aktifitas/ubah_status_aktifitas">
		<div class="table-responsive">
		<table class="table table-striped" id="example">
				<thead>
					<tr>
						<th>No</th>
						<th>Nama</th>
						<th>Tanggal</th>
						<th>Absen</th>
						<th>Ket.</th>
					</tr>
				</thead>
				<tbody>
					<?php
					$no=0;
					foreach ($absensi as $ab) {
						$no++;
						echo '<tr>
								<td>'.$no.'</td>
								<td>'.$ab->nama_magang.'</td>
								<td>'.date("d-F-Y", strtotime($ab->tanggal)).'</td>
								<td>'.$ab->absen.'</td>
								<td>'.$ab->alasan.'</td>
							</tr>';
						}
					?>
				</tbody>
			</table>
		</div>
		</form>
	</div>
	</div>
	</div>
</div>





