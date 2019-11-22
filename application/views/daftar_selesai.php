<!DOCTYPE html>
<html>
<head>
	<title>FORM REGISTRASI MAGANG</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url ("assets/bootstrap/css/bootstrap.css") ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/custom css/custom_reg.css") ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/customcss/home.css") ?>">
</head>
<body>
	<nav class="navbar navbar-default">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse-1" aria-expanded="false">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href=""><img src="<?php echo base_url("assets/image/logo.png") ?>"></a>
			</div>
			<div class="collapse navbar-collapse" id="navbar-collapse-1">
				<ul class="nav navbar-nav navbar-right" id="main-menu">
					<li role="presentation" class="active"><a href="index.php"><b>Beranda</b></a></li>
					<li role="presentation"><a href="<?php echo base_url("daftar") ?>"><b>Daftar</b></a></li>
				
				</ul>
			</div> 
		</div> 
	</nav>

	<div class="container">
		<div class="row">
			<section>
				<div class="wizard">
					<div class="wizard-inner">
						<div class="connecting-line"></div>
						<ul class="nav nav-tabs" role="tablist">

							<li role="presentation" class="disabled">
								<a href="#step1" data-toggle="tab" aria-controls="step1" role="tab" title="Step 1">
									<span class="round-tab">
										<i class="glyphicon glyphicon-folder-open"></i>
									</span>
								</a>
							</li>

							<li role="presentation" class="disabled">
								<a href="#step2" data-toggle="tab" aria-controls="step2" role="tab" title="Step 2">
									<span class="round-tab">
										<i class="glyphicon glyphicon-pencil"></i>
									</span>
								</a>
							</li>
							<li role="presentation" class="active">
								<a href="#complete" data-toggle="tab" aria-controls="complete" role="tab" title="Complete">
									<span class="round-tab">
										<i class="glyphicon glyphicon-ok"></i>
									</span>
								</a>
							</li>
						</ul>
					</div>			

					<div class="tab-content">
						<div class="tab-pane active" role="tabpanel" id="complete">
							<h3>Detail Pemagang</h3>

							<table class="table">
								<tr>
									<th>---</th>
									<td><?= $this->session->flashdata('pesan');?></td>
								</tr>
								<tr>
									<th>NIM</th>
									<td><?php echo $detail['nim_magang']; ?></td>
								</tr>
								<tr>
									<th>Nama</th>
									<td><?php echo $detail['nama_magang']; ?></td>
								</tr>
								<tr>
									<th>Jenis Kelamin</th>
									<td><?php echo $detail['jk_magang'] ?></td>
								</tr>
								<tr>
									<th>Handphoe</th>
									<td><?php echo $detail['nohp_magang']; ?></td>
								</tr>
								<tr>
									<th>E-mail</th>
									<td><?php echo $detail['email_magang'] ?></td>
								</tr>
								<tr>
									<th>Kampus/Univeritas</th>
									<td><?php echo $detail['kampus_magang']; ?></td>
								</tr>
								<tr>
									<th>Prodi/Kejuruan</th>
									<td><?php echo $detail['jurusan_magang']; ?></td>
								</tr>
								<tr>
									<th>Alamat</th>
									<td><?php echo $detail['alamat_magang']; ?></td>
								</tr>
								<tr>
									<th>Periode Magang</th>
									<td>
										<?php echo $detail['tgl_awal']; ?> <strong>s/d</strong> <?php echo $detail['tgl_akhir']; ?>
									</td>
								</tr>
							</table>
							<ul class="list-inline pull-right">
								<li><a href="<?php echo base_url("Welcome"); ?>" class="btn btn-primary next-step">Login</a></li>
							</ul>
						</div>
						<div class="clearfix"></div>
					</div>

				</div>
			</section>
		</div>
	</div>

</div>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>

</body>
</html>