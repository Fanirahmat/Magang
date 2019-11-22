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
				<a class="navbar-brand" href="<?php echo base_url("index.php") ?>"><img src="<?php echo base_url("assets/image/logo.png") ?>"></a>
			</div>
			<div class="collapse navbar-collapse" id="navbar-collapse-1">
				<ul class="nav navbar-nav navbar-right" id="main-menu">
					<li role="presentation"><a href="<?php echo base_url("index.php") ?>"><b>Beranda</b></a></li>
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

							<li role="presentation" class="active">
								<a href="#step2" data-toggle="tab" aria-controls="step2" role="tab" title="Step 2">
									<span class="round-tab">
										<i class="glyphicon glyphicon-pencil"></i>
									</span>
								</a>
							</li>
							<li role="presentation" class="disabled">
								<a href="#complete" data-toggle="tab" aria-controls="complete" role="tab" title="Complete">
									<span class="round-tab">
										<i class="glyphicon glyphicon-ok"></i>
									</span>
								</a>
							</li>
						</ul>
					</div>					
					<div class="tab-content">
						<div class="tab-pane active" role="tabpanel" id="step2">
							<form method="POST" enctype="multipart/form-data">
								<div class="step2">
									<div class="row">
										<div class="col-md-6">
											<div class="form-group">
												<label for="name">Universitas/Kampus</label>
												<input type="text" class="form-control" name="kampus_magang" required="true" placeholder="Universitas">
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<label for="name">Prodi/Kejuruan</label>
												<input type="text" class="form-control" name="jurusan_magang" required="true"placeholder="Prodi">
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-md-6">
											<div class="form-group">
												<label for="text">NIM</label>
												<input type="text" pattern="[0-9 , .]{3,200}" class="form-control" name="nim_magang" required="true" placeholder="NIM">
											</div>
											<div class="form-group">
												<label for="file">Dokumen</label>
												<input type="file" class="form-control" name="file_magang">
												<span class="text-danger">*Surat Pengantar dari Universitas (file format: ZIP/PDF , format nama: Nama anda_nama universitas/sekolah)<br>*Bila belum dapat, boleh dikosongi dahulu</span>
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<label for="Periode">Periode Magang (awal)</label>
													<div class="row">
														<div class="input-group date">
													    	<div class="input-group-addon">
													           <span class="glyphicon glyphicon-th"></span>
													       	</div>
													       <input id="tgl_mulai" type="date" class="form-control datepicker" name="tgl_awal">
													   	</div>
													  </div>
													</div>
													<div class="form-group">
												<label for="Periode">Periode Magang (akhir)</label>
													<div class="row">
														<div class="input-group date">
													    	<div class="input-group-addon">
													           <span class="glyphicon glyphicon-th"></span>
													       	</div>
													       <input id="tgl_mulai" type="date" class="form-control datepicker" name="tgl_akhir">
													   	</div>
													  </div>
													</div>
												</div>
											</div>
										</div>
									</div>

								</div>
								<br>
								<ul class="list-inline pull-right">
									<li><button class="btn btn-primary next-step"> Simpan & Lanjutkan</button></li>
								</ul>
							</form>
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