<div class="box box-info">
	<div class="box-header">
		<h3 class="box-title">Data Periode</h3>
	</div>
	<div class="box-body">
		<div class="table-responsive">
			<table class="table table-striped" id="example">
				<thead>
					<tr>
						<th>No</th>
						<th>Nama pemagang</th>
						<th>Tanggal Mulai</th>
						<th>Tanggal Selesai</th>
						
					</tr>
				</thead>
				<tbody>
					<?php
						$no=0;
						foreach ($periode as $p) {
							$no++;
							echo '<tr>
									<td>'.$no.'</td>
									<td>'.$p->nama_magang.'</td>
									<td>'.date("d-F-Y", strtotime($p->tgl_awal)).'</td>
									<td>'.date("d-F-Y", strtotime($p->tgl_akhir)).'</td>
								</tr>';
						}
					?>
				</tbody>
			</table>
			</div>

		</div>
	</div>