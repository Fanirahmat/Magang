
    


<div class="box box-info">
			<div class="box-header text-center ">
				<h1>ABSENSI MAGANG</h1>
			</div>
			<div class="box-body text-center">
                <p>Absensi setiap hari, jika tidak absen maka dianggap tidak masuk tanpa izin (Alpa)</p>
                 <?php
                    $id = $this->session->userdata('id_magang');
                    date_default_timezone_set("Asia/Jakarta");
                    $tanggal = date("Y-m-d");
                    $cek_data = $this->db->get_where('absensi', ['id_magang' => $id, 'tanggal' => $tanggal] )->row_array();
                    if (empty($cek_data)) 
                    {
                       ?>

                       <button type="button" class="btn btn-success btn-lg" onclick="simpan_masuk()" id="simpan" >Masuk</button> &nbsp;
                        <button type="button" class="btn btn-warning btn-lg" data-toggle="modal" data-target="#exampleModal" id="izin">
                        Tidak Masuk / Izin
                        </button>
                <?php
                    }
                    else
                    {
                        if ($cek_data['absen']=="Masuk") 
                        {
                            
                ?>
                            <br><br>
                            <div class="col-md-4"></div>
                            <div class="col-md-4">
                                <div class="alert alert-success" role="alert" style="width: 100%;">
                                  Sudah Absen Masuk....
                                </div>
                            </div>
                            <div class="col-md-4"></div>
                 <?php           
                        }
                        else
                        {
                            ?>

            
                            <br><br>
                             <div class="col-md-4"></div>
                            <div class="col-md-4">
                                     <div class="alert alert-warning" role="alert">
                                  Izin sudah dikirim....
                                </div>
                            </div>
                            <div class="col-md-4"></div>
                           

                <?php
                        }
                    }
                ?>
			</div>
</div>
<?= $this->session->flashdata('pesan_izin');?>
        
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                <div class="modal-header text-center bg-primary">
                    <h2 class="modal-title w-100 font-weight-bold text-color-light" id="exampleModalLabel">Form Izin Magang</h2>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form method="post" action="<?= base_url()?>mahasiswa/Absensi/absen_izin">
                        <h5 div="text-2 opacity-10">Masukkan alasan Anda*</h5>
                        <input type="text" name="alasan" id="alasan" required="true" class="form-control" placeholder="Masukkan Alasan Anda">
                        <br>
                        <input type="submit" name="" id="" value="Submit" class="btn btn-success"> &nbsp;
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                    </form>
                </div>
                <div class="modal-footer">
                </div>
                    <div id="pesan"></div>
                </div>
            </div>
        </div>

     
        
         <script type="text/javascript">
            function simpan_masuk()
            {
                $.getJSON("<?= base_url()?>mahasiswa/Absensi/absen_masuk",function(hasil){
                    if (hasil['status']==1) 
                    {
                        swal("Berhasil Masuk!", "Anda sudah absen hari ini!", "success");
                        $("#simpan").hide("fade");
                        $("#izin").hide("fade");
                    } 
                    else 
                    {
                        swal("Gagal absen, coba tanyakan ke pembimbing !!");
                    }
                });
            }
        
        </script>
        

