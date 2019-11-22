
<div class="box box-info">
	<div class="box-header">
		<h3 class="box-title">Data Magang</h3>
	</div>
	<div class="box-body">
		<div class="table-responsive">
			<table class="table table-striped" id="example">
				<thead>
					<tr>
						<th>No</th>
						<th>Nama</th>
						<th>Email</th>
						<th>Kampus</th>
						<th>Jurusan</th>
						<th>No.Handphone</th>
						<th>Alamat</th>
						<th>Surat Magang</th>
					</tr>
				</thead>
				<tbody>
					<?php foreach ($magang as $key => $value):?>
					<tr>
						<td><?php echo $key+1; ?></td>
						<td><?php echo $value['nama_magang']; ?></td>
						<td><?php echo $value['email_magang']; ?></td>
						<td><?php echo $value['kampus_magang']; ?></td>
						<td><?php echo $value['jurusan_magang']; ?></td>
						<td><?php echo $value['nohp_magang']; ?></td>
						<td><?php echo $value['alamat_magang']; ?></td>
						<td>
							<a href="<?php echo base_url("assets/SuratMagang/$value[file_magang]"); ?>"target="_blank">Download</a>
						</td>
					</tr>
				<?php endforeach ?>
				</tbody>
			</table>
		</div>
		
	</div>
</div>