<div class="container">
	<div class="card">
		<div class="card-header text-center"><h4>Edit KK Baru</h4></div>
		<div class="card-body">
			<a href="<?php echo base_url().'petugas/kk_baru' ?>" class='btn btn-sm btn-light btn-outline-dark pull-right'>
				<i class="fa fa-arrow-left"></i> Kembali</a>
				<br/><br/>
				<?php foreach($kk_baru as $b)
				{	?>
				<form method="post" action="<?php echo base_url().'petugas/kb_update'; ?>">
				<div class="form-group">
					<label class="font-weight-bold" for="no_kk_baru">Nomor KK Baru</label>
					<input type="hidden" name="id" value="<?php echo $b->no_kk_baru; ?>">
					<input type="text" class="form-control" name="no_kk_baru" placeholder="Masukkan Nomor KK Baru" 
					required="required" value="<?php echo $b->no_kk_baru; ?>">
				</div>
				<div class="form-group">
					<label class="font-weight-bold" for="nama_kep_kk">Nama Kepala Keluarga</label>
					<input type="text" class="form-control" name="nama_kep_kk" placeholder="Masukkan Nama Kepala Keluarga" 
					required="required" value="<?php echo $b->nama_kep_kk; ?>">
				</div>
				<div class="form-group">
					<label class="font-weight-bold" for="alamat">Alamat</label>
					<input class="form-control" name="alamat" placeholder="Masukkan Alamat" 
					required="required" value="<?php echo $b->alamat; ?>">
				</div>
				<div class="form-group">
					<label class="font-weight-bold" for="tgl_pengesah">Tanggal Pengesahan</label><br>
					<input type="date" id="tgl_pengesah" name="tgl_pengesah"required="required" value="<?php echo $b->tgl_pengesah; ?>"" >
				</div>
				<div class="form-group">
					<label class="font-weight-bold" for="pengesah">Pengesah</label>
					<input class="form-control" name="pengesah" placeholder="Masukkan Nama Pengesah" 
					required="required" value="<?php echo $b->pengesah; ?>">
				</div>
				<div class="form-group">
					<label class="font-weight-bold" for="kode_pos">Kode Pos</label>
					<select class="form-control" name="kode_pos" required="required">
									<option value="">- Pilih Kode Pos -</option>
									<option <?php if($b->kode_pos=="13320")
										{ echo "selected='selected'"; } ?> value="13320">Jatinegara</option>
									<option <?php if($b->kode_pos=="30111")
										{ echo "selected='selected'"; } ?> value="30111">Ilir Timur</option>
									<option <?php if($b->kode_pos=="40111")
										{ echo "selected='selected'"; } ?> value="40111">Sumur Bandung</option>
									<option <?php if($b->kode_pos=="56172")
										{ echo "selected='selected'"; } ?> value="56172">Mertoyudan</option>
									<option <?php if($b->kode_pos=="56194")
										{ echo "selected='selected'"; } ?> value="56194">Magelang Selatan</option>
									<option <?php if($b->kode_pos=="56553")
										{ echo "selected='selected'"; } ?> value="56553">Borobudur</option>
									<option <?php if($b->kode_pos=="56789")
										{ echo "selected='selected'"; } ?> value="56789">Pasar Kemis</option>
									<option <?php if($b->kode_pos=="59879")
										{ echo "selected='selected'"; } ?> value="59879">Mijen</option>
									<option <?php if($b->kode_pos=="60516")
										{ echo "selected='selected'"; } ?> value="60516">Sambi Kerep</option>
									<option <?php if($b->kode_pos=="60216")
										{ echo "selected='selected'"; } ?> value="60216">Lontar</option>
									<option <?php if($b->kode_pos=="75119")
										{ echo "selected='selected'"; } ?> value="75119">Samarinda Utara</option>
								</select>
							</div>
							<input type="submit" class="btn btn-primary" value="Simpan">
						</form>
			<?php } ?>
		</div>
	</div>
</div>