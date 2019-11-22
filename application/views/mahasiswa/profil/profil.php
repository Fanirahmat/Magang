
		<div class="box box-info">
			<div class="box-header">
				<h2 >	&emsp;	&emsp;PROFIL</h2>
			</div>
			<div class="box-body">
				<ul class="timeline timeline-inverse" style="">
					<li>
						<div class="timeline-item" style="background: white;border:none;">
							<h3 class="timeline-header"><a href="#">Data Pribadi</a></h3>
							<br>
							<div class="row">
								<div class="col-md-3">
									<img src="<?php echo base_url("assets/img/$magang[foto_magang]") ?>" alt="" width="180" height="200" >
								</div>
								<div class="col-md-7">
									<div class="table-responsive">
										<table class="table table-striped">
											<tr><th>Nama Lengkap</th><td><?php echo $magang['nama_magang']; ?></td></tr>
											<tr><th>Tempat, Tgl Lahir</th><td><?php echo $magang['ttl_magang']; ?></td></tr>
											<tr><th>Alamat</th><td><?php echo $magang['alamat_magang']; ?></td></tr>
											<tr><th>Jenis Kelamin</th><td><?php echo $magang['jk_magang']; ?></td></tr>
											<tr><th>No. Hp</th><td><?php echo $magang['nohp_magang']; ?></td></tr>
											<tr><th>Email</th><td><?php echo $magang['email_magang']; ?></td></tr>
										</table>
									</div>
								</div>
							</div>
							<br>
							<button type="button" class="btn btn-warning "  onclick="tm_detail()" data-toggle="modal" data-target="#ModalEdit" >
							  Edit Data Pribadi
							</button>
						</div>
					</li>
					<li>
						<div class="timeline-item" style="background: white;border:none;">
							<h3 class="timeline-header"><a href="#">Data lanjutan</a> / <small>(riwayat pendidikan, pangalaman, skill, dll)</small></h3>
							<br>
								<ul>
									<li style="color: red;">Jika Tidak memiliki data lanjutan, boleh dikosongi</li>
									<li style="color: red;">Langsung saja ketik ulang kemudian tekan tombol "kirim" jika ingin mengedit data yang sudah dikirim</li>
									<li style="color: red;">Jika ingin menghapus data lanjutan yang sudah dikirim, tekan saja tombol <button class="btn btn-xs btn-danger" onclick="hapus_datacv()">Hapus</button> </li>
								</ul>
								<form method="post" action="<?= base_url()?>mahasiswa/Profil/simpan_data_lanjutan">
									<br>
									<textarea class="ckeditor" id="inputan" name="ckeditor"></textarea>
									<br>
									<input type="submit" name="submit" class="btn btn-sm btn-primary"> 
								</form>				
						</div>
					</li>
				</ul>
				&emsp;	&emsp;	&emsp; 	&ensp;
				<a href="<?= base_url()?>mahasiswa/Profil/lihat_cv" class="hidden-print btn btn-sm btn-success">LIHAT CV</a>
			</div>
		</div>
	

<div class="modal fade" id="ModalEdit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
    	<form method="post" action="<?= base_url()?>mahasiswa/Profil/editDataCV">
      <div class="modal-header">
        <h3 class="modal-title text-center" id="exampleModalLabel">Data Pribadi</h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        
        	<div class="col-md-6">
        		<label>Nama Lengkap</label>
	        	<input type="text" name="nama_magang" id="nama_magang" placeholder="" class="form-control">
	        	<label>TTL</label>
	        	<input type="text" name="ttl_magang" id="ttl_magang" placeholder="" class="form-control">
	        	<label>Alamat</label>
	        	<input type="text" name="alamat_magang" id="alamat_magang" class="form-control">	
        	</div>
        	<div class="col-md-6">
        		<label>Jenis Kelamin</label>
	        	<input type="text" name="jk_magang" id="jk_magang" class="form-control">
	        	<label>No. hp</label>
	        	<input type="text" name="nohp_magang" id="nohp_magang" class="form-control">
	        	<label>Email</label>
	        	<input type="email" name="email_magang" id="email_magang" class="form-control">
					<br>
        	</div>
					&emsp;
					
					<button type="button" class="btn btn-secondary " data-dismiss="modal">Close</button>
       	  <input type="submit" name="submit" class="btn btn-success">
        	<br>
					<br>
        <p></p>
      </div>
		
       </form>
    </div>
  </div>
</div>
	
	<script type="text/javascript">
		//detail
		function tm_detail()
		{
			$.getJSON("<?= base_url()?>mahasiswa/Profil/detail",function(data){
				$('#nama_magang').val(data['nama_magang']);
				$('#ttl_magang').val(data['ttl_magang']);
				$('#alamat_magang').val(data['alamat_magang']);
				$('#jk_magang').val(data['jk_magang']);
				$('#nohp_magang').val(data['nohp_magang']);
				$('#email_magang').val(data['email_magang']);
			});
		}

		//detail datacv
		$.getJSON("<?= base_url()?>mahasiswa/Profil/detailCV",function(dt){
			$('#inputan').val(dt['data']);
		});

		//hapus data cv
		function hapus_datacv()
		{
			swal({
				  title: "Kamu Yakin?",
				  text: "Once deleted, Kamu akan menghapus data lanjutanmu!",
				  icon: "warning",
				  buttons: true,
				  dangerMode: true,
				})
				.then((willDelete) => {
				  if (willDelete) 
				  {
				  		$.getJSON("<?= base_url()?>mahasiswa/Profil/hapus_datacv",function(hasil){
						 if (hasil['status']==1) 
		                    {
		                        swal("Poof! Datamu sudah terhapus, silahkan refresh", {
							      icon: "success",
							    });
		                        
		                    } 
		                    else 
		                    {
		                       swal({
								  title: "Gagal Hapus",
								  text: "Mungkin terjadi kesalahan, tanyakan ke pembimbing !!",
								  icon: "error",
								  button: "Ok !!!",
								});
		                    }
		                   // document.location.reload(true);
						});  
				  } 
				  else 
				  {
				    swal("Batal Hapus");
				  }
				});
		}
	</script>