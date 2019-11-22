<div class="box box-info">
	<div class="box-header">
		<h3 class="box-title">Edit Periode</h3>
	</div>
	<div class="box-body">
		<form method="POST" class="form-horizontal">
			<div class="form-group">
				<label class="control-label col-sm-2">Bulan</label>
				<div class="col-sm-10">
					<select name="bulan" class="form-control" required="true">
						<option value="">- Pilih Bulan -</option>
						<?php foreach ($bulan as $key => $value): ?>
							<option value="<?php echo $value ?>"<?php if ($detail['bulan']==$value){echo "selected";} ?>><?php echo $value ?></option>
						<?php endforeach ?>
					</select>
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-sm-2">Tahun</label>
				<div class="col-sm-10">
					<select name="tahun" class="form-control" required="true">
						<option value="">- Pilih Tahun -</option>
						<?php for($i=date("Y");$i<=date("Y")+1;$i++):?>
							<option value="<?php echo $i; ?>"<?php if ($detail['tahun']==$value){echo "selected";} ?>><?php echo  $i ?></option>
						<?php endfor ?>
					</select>
				</div>
			</div>

			<div class="form-group">
				<label class="control-label col-sm-2">Status</label>
				<div class="col-sm-10">
					<select name="status" class="form-control" required="true">
						<option value="">- Pilih Status -</option>
						<option value="Aktif"<?php if ($detail['status']=="Aktif"){echo "selected";} ?>>Aktif</option>
						<option value="Tidak Aktif"<?php if ($detail['status']=="Tidak Aktif"){echo "selected";} ?>>Tidak Aktif</option>
					</select>
				</div>
			</div>
			
			<div class="form-group">
				<div class="col-sm-10 col-lg-offset-2">
					<button class="btn btn-primary btn sm" onclick="return confirm('Apakah anda yakin ?')">Simpan</button>
				</div>
			</div>
		</form>
	</div>
</div>