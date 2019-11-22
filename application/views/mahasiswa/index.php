<div id="page-wrapper">
	<div id="page-inner">

		<div class="row">
			<div class="col-md-3">
				<div class="box box-primary">
					<div class="box-body box-profile">
						<img class="profile-user-img img-responsive img-circle" src="<?php echo base_url("assets/img/$magang[foto_magang]"); ?>" alt="User Profile"></img>
						
						<h3 class="profile-username text-center"><?php echo $magang
						['nama_magang']; ?></h3>
						<p class="text-muted text-center"></p>
						<ul class="list-group list-group-unbordered">
							<li class="list-group-item">
								<b>Jenis Kelamin</b><br><a class=""><?php echo $magang['jk_magang'] ?></a>
							</li>
							<li class="list-group-item">
								<b>Email </b><br><a class=""><?php echo $magang['email_magang'] ?></a>
							</li>
							<li class="list-group-item">
								<b>Handphone</b><br><a class=""><?php echo $magang['nohp_magang'] ?></a>
							</li>
						</ul>
					</div>
					<!-- box.body -->
				</div>
				<!-- .box -->
				
				<!-- About Me Box -->
				<div class="box box-primary">
					<div class="box-header with-border">
						<h3 class="box-title">Tentang Saya</h3>
					</div>
					<!-- .box header -->
					<div class="box-body">
						<strong><i class="fa fa-book margin-r-5"></i>Univeritas</strong>
						<p class="text-muted">
							<?php echo $magang['kampus_magang']; ?>
						</p>
						<strong><i class="fa fa-pencil margin-r-5"></i>Prodi</strong>
						<p class="text-muted">
							<?php echo $magang['jurusan_magang']; ?>
						</p>
						<strong><i class="fa fa-map-marker margin-r-5"></i>Alamat</strong>
							<p class="text-muted">
							<?php echo $magang['alamat_magang']; ?></p>
						</div>
						<!-- box body -->
					</div>
					<!-- .box -->
				</div>
				<!-- col -->

				<div class="col-md-9">
					<div class="box box-solid bg-blue">
						<div class="box-header">
							<div class="pull-right box-tools">
								<button class="btn btn-primary btn-sm pull-right" data-toggle="collapse" data-target="#demo"><i class="fa fa-minus"></i></button>
							</div>
							<h3 class="box-title">Pengaturan Akun</h3>
						</div>
					</div>
					<div id="demo" class="collapse">
						<div class="box">
							<div class="box-body">
								<form class="form-horizontal" method="POST" enctype="multipart/form-data"> 
									<div class="form-group">
										<label class="col-sm-2 control-label">Nama</label>
										<div class="col-sm-10">
											<input type="text" class="form-control" name="nama_magang" placeholder="nama" value="<?php echo $magang['nama_magang']; ?>">
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-2 control-label">Email</label>
										<div class="col-sm-10">
											<input type="text" class="form-control" name="email_magang" placeholder="Email" value="<?php echo $magang['email_magang']; ?>">
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-2 control-label">Password</label>
										<div class="col-sm-10">
											<input type="password" class="form-control"
											placeholder="password" name="password_magang">
											<span class="text-danger">* Apabila password tidak ingin di ubah, kosongkan saja</span>
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-2 control-label">Foto</label>
										<div class="col-sm-10">
											<input type="file" class="form-control" name="foto_magang">
										</div>
									</div>
									<div class="form-group">
										<div class="col-sm-offset-2 col-sm-10">
											<button type="submit" class="btn btn-danger">Edit</button>
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>
					<br>
					<br>
					<div class="box box-solid bg-blue">
						<div class="box-header">
							<div class="pull-right box-tools">
								<button class="btn btn-primary btn-sm pull-right" data-toggle="collapse"data-target="#demo1"><i class="fa fa-minus"></i></button>
							</div>
							<h3 class="box-title">Aktivitas</h3>
						</div>
					</div>
					<div class="box collapse" id="demo1">
						<div class="box-body">
							<table class="table table-striped">
								<thead>
									<tr>
										<th>No</th>
										<th>Tanggal</th>
										<th>Aktifitas</th>
									</tr>
								</thead>
								<tbody>
									<?php foreach ($aktifitas as $key => $value): ?>
										<tr>
											<td><?php echo $key+1; ?></td>
											<td><?php echo date("d-F-Y", strtotime($value['tgl_aktifitas'])); ?></td>
											<td><?php echo $value['isi_aktifitas']; ?></td>
										</tr>
										
									<?php endforeach ?>
								</tbody>
							</table>
						</div>
					</div>	
					<br>
					<br>
					<div class="box box-solid bg-blue">
						<div class="box-header">
							<div class="pull-right box-tools">
								<button class="btn btn-primary btn-sm pull-right" data-toggle="collapse"data-target="#demo2"><i class="fa fa-minus"></i></button>
							</div>
							<h3 class="box-title">Upload Surat Magang</h3>
						</div>
					</div>
					<div class="box collapse" id="demo2">
						<div class="box-body">
							<?php
								$cek_data = $this->db->get_where('magang', ['id_magang' => $this->session->userdata('id_magang')])->row_array();
								if ($cek_data['file_magang']) 
								{
									?>
									<span class="text-success" id="text1">*Surat Pengantar sudah terupload....</span>

							<?php
								}
								else
								{
									?>
									<form class="form-horizontal" method="POST" enctype="multipart/form-data" id="upload_file">
										<div class="form-group">
											<label class="col-sm-2 control-label" id="label">Surat Magang</label>
											<div class="col-sm-10">
												<input type="file" class="form-control" name="file_magang" id="unggah">
												<span class="text-danger" id="text">*Surat Pengantar dari Universitas (file format:PDF , format nama: Nama anda_nama universitas/sekolah)</span>
												<span class="text-danger" id="text">*Maksimal Ukuran : 10 MB</span>
											</div>
										</div>
										<div class="form-group">
											<div class="col-sm-offset-2 col-sm-10">
												<button type="submit" class="btn btn-danger" id="tombol">Upload</button>
											</div>
										</div>
									</form>

							<?php
								}
							?>
							
						</div>
					</div>	
				</div>
			</div>	


		</div>
	</div>
	<script type="text/javascript">
		//upload surat magang
		$('#upload_file').submit(function(event){
			event.preventDefault();
			var url = "<?= base_url()?>mahasiswa/Welcome/upload_surat_magang";
			var data = new FormData($("#upload_file")[0]);
			$.ajax({
				url:url,
				type:"post",
	            data:data,
	            contentType: false,
	            processData: false,
	            dataType:"json",
	            success:function(hasil){
	            	if(hasil['status']==1)
	            	{
	            		swal("Berhasil Upload!", "Anda SUdah Upload.", "success");
	            		$("#upload_file").hide("fade");
	            		setTimeout(function(){
	            			$("#text1").hide("fade");
	            		}, 1000);
	            	}
	            	else
	            	{
	            		swal("Gagal!!!", "Lihat kembali Syarat & Ketentuan di bawah form....", "warning");
	            	}
	            }
			});
		});
	</script>