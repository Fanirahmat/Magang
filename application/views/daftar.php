<!DOCTYPE html>
<html>
<head>
	<title>FORM REGISTRASI MAGANG</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url ("assets/bootstrap/css/bootstrap.css") ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/custom css/custom_reg.css") ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/customcss/home.css") ?>">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
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
				<a class="navbar-brand" href="index.php"><img src="<?php echo base_url("assets/image/logo.png") ?>"></a>
			</div>
			<div class="collapse navbar-collapse" id="navbar-collapse-1">
				<ul class="nav navbar-nav navbar-right" id="main-menu">
					<li role="presentation" class=""><a href="index.php"><b>Beranda</b></a></li>
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

							<li role="presentation" class="active">
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
						<div class="tab-pane active" role="tabpanel" id="step1">
							<form method="POST">
								<div class="step1">
									<div class="row">
										<div class="col-md-6">
											<div class="form-group">
												<label for="name">Nama</label>
												<input type="text" class="form-control" name="nama_magang" required="true" placeholder="Nama Anda" >
						
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<label for="name">Jenis Kelamin</label>
												<select name="jk_magang" class="form-control">
													<option value="">-Jenis Kelamin-</option>
													<option value="Laki-Laki">Laki-Laki</option>
													<option value="Perempuan">Perempuan</option>
												</select>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-md-6">
											<div class="form-group">
												<label for="email">E-Mail</label>
												<input type="email" class="form-control" name="email" required="true" placeholder="Masukan E-Mail">
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<label for="name">Password</label>
												<input type="password" class="form-control" name="password" required="true" placeholder="Masukan Password">
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-md-6">
											<div class="form-group">	
												<label for="name">No. Handphone</label>
												<input type="text" class="form-control" pattern="[0-9]{3,20}" name="no_hp" required="true" placeholder="Masukan Nomor Telepon">
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">	
												<label for="alamat">Alamat Lengkap</label>
												<input type="text" class="form-control" name="alamat" required="true" placeholder="Masukan Alamat Lengkap">
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

						<div class="tab-pane" role="tabpanel" id="step3">
							<ul class="list-inline pull-right">
								<li><button type="button" class="btn btn-primary btn-info-full next-step">Save and continue</button></li>
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