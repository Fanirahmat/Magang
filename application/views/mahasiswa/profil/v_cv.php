<style>
	@media print{
	@page{
		size:portrait;
	}
	.box-info
	{
		border-top:none;
	}
	#foto{
		padding:none;
		

	}
	.foto{
		
		border: 10px outset gray;
		border-radius: 50%;
	}

	#table{
		
		margin-left: 40%;
		margin-top:-35%;
		
		
	}
	

	.line-title{
		border: 0;
		border-style: inset;
		border-top: 2px solid #5D6D7E;
	}
	img {
		
	}
	#data-lanjutan{
		margin-top:-8%;
	}
	.footer{
		position:fixed;
		bottom: 0;
		width:80%;
		
		
		
	}
}
</style>

<div class="box box-info">
			<div class="box-header">
				
				<h2 class="hidden-print"> 	&emsp; 	&emsp;DATA CV</h2>
			</div>
			<div class="box-body">
				
				<ul class="timeline">
					<li>
					
						<div class="timeline-item" style="background: white;border:none;">
						<img src="<?= base_url()?>assets2/img/logo-integra.png" style="position: absolute; width: 90px; height: auto;">
							<table style="width: 100%;" >
							<tr>
								<td>
									<td align="center">
									<span style="line-height: 1.6; font-weight: bold;">
										PT INTEGRA INOVASI INDONESIA
										<br>YOGYAKARTA INDONESIA
									</span>
									
									</td>
								</td>
							</tr>
							</table>

							<hr class="line-title">
							
							<div class="row">
								<div class="col-md-3" id="">
									<img src="<?php echo base_url("assets/img/$cv_magang[foto_magang]") ?>" alt="" width="180" height="200" class="foto">
								</div>
								<div class="col-md-7">	
									<div class="table-responsive" id="table">
										<table class="table table-borderless" >
											<tr><th>Nama Lengkap</th><td><?php echo $cv_magang['nama_magang']; ?></td></tr>
											<tr><th>Tempat, Tgl Lahir</th><td><?php echo $cv_magang['ttl_magang']; ?></td></tr>
											<tr><th>Alamat</th><td><?php echo $cv_magang['alamat_magang']; ?></td></tr>
											<tr><th>Jenis Kelamin</th><td><?php echo $cv_magang['jk_magang']; ?></td></tr>
											<tr><th>No. Hp</th><td><?php echo $cv_magang['nohp_magang']; ?></td></tr>
											<tr><th>Email</th><td><?php echo $cv_magang['email_magang']; ?></td></tr>
										</table>
									</div>
								</div>
							</div>
						</div>
					</li>
					<li>
						<div class="timeline-item" id="data-lanjutan"style="background: white;border:none;">
							<h3 class="timeline-header hidden-print"><a href="#">DATA LANJUTAN</a></h3>
							<hr class="line-title">
							<br>
							<div class="row">
								<div class="col-md-12">
									<?php echo $cv_magang['data']; ?>
								</div>	
							</div>
							<div class="footer text-center">
							<hr class="line-title">
							<h5 >PT INTEGRA INOVASI INDONESIA - © Copyright 2019. All Rights Reserved.</h5>

							</div>

						</div>
						
						
					</li>
					<br><br><br>
				</ul>
				&emsp;	&emsp; 	&emsp; 
				<a href="<?= base_url()?>mahasiswa/Profil" class="hidden-print btn btn-sm btn-danger">Kembali</a>
				<a href="#" class="hidden-print btn btn-sm btn-info" onclick="window.print()">Cetak CV</a>
			</div>
		</div>