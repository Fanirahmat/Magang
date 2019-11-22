<!DOCTYPE html>
<html>
<head>
	<title>Profil Mahasiswa</title>

	<link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/bootstrap4/css/bootstrap.min.css") ?>">
</head>
<body>

	<div class="container">
		<div class="row">
					<div class="col-md-9">
						<table class="table">
							<thead>
								<tr>
									<th>NIM</th>
									<td><?php echo $magang['nim_magang'] ?></td>
								</tr>
								<tr>
									<th>Nama Lengkap</th>
									<td><?php echo $magang['nama_magang'] ?></td>
								</tr>
								<tr>
									<tr>
									<th>Email</th>
									<td><?php echo $magang['email_magang'] ?></td>
								</tr>
								
									<th>Universitas</th>
									<td><?php echo $magang['kampus_magang'] ?></td>
								</tr>
								<tr>
									<th>Prodi</th>
									<td><?php echo $magang['jurusan_magang'] ?></td>
								</tr>
								<tr>
									<th>No.HP</th>
									<td><?php echo $magang['nohp_magang'] ?></td>
								</tr>
								<tr>
									<th>Alamat</th>
									<td><?php echo $magang['alamat_magang'] ?></td>
								</tr>
								
								
							</thead>
						</table>
					</div>
					<div class="col-md-12">
						<img src="<?php echo base_url("assets/img/$magang[foto_magang]"); ?>" width="150" height ="150">
					</div>
				</div>
	</div>
<script>
	print()
</script>
</body>
</html>