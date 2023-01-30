<div class="container">
	<div class="card">
		<div class="card-header text-center"> <h4>Tambah KK Baru</h4> </div>
		<div class="card-body">
			<a href="<?php echo base_url().'petugas/kk_baru' ?>" class='btn btn-sm btn-light btn-outline-dark pull-right'> 
				<i class="fa fa-arrow-left"> </i> Kembali</a>
			<br/>
			<br/>
			<form method="post" action="<?php echo base_url().'petugas/kb_tambah_aksi'; ?>">
				<div class="form-group">
					<label class="font-weight-bold" for="no_kk_baru">No KK Baru</label>
					<input type="text" class="form-control" name="no_kk_baru" placeholder="Masukkan No KK Baru" required="required">
				</div>
				<div class="form-group">
					<label class="font-weight-bold" for="nama_kep_kk">Nama Kepala Keluarga</label>
					<input type="text" class="form-control" name="nama_kep_kk" placeholder="Masukkan Nama Kepala Keluarga" required="required">
				</div>
				<div class="form-group">
					<label class="font-weight-bold" for="alamat">Alamat</label>
					<input class="form-control" name="alamat" placeholder="Masukkan Alamat" required="required">
				</div>
				<div class="form-group">
					<label class="font-weight-bold" for="tgl_pengesah">Tanggal Pengesahan</label><br>
					<input type="date" id="tgl_pengesah" name="tgl_pengesah">
				</div>
				<div class="form-group">
					<label class="font-weight-bold" for="pengesah">Pengesah</label>
					<input class="form-control" name="pengesah" placeholder="Masukkan Nama Pengesah" required="required">
				</div>
				<div class="form-group">
					<label class="font-weight-bold" for="kode_pos">Kode Pos</label>
					<select class="form-control" name="kode_pos" required="required"> <option value="">- Pilih Kode Pos -</option>
						<?php { ?>
							<option value="<?php echo'13320'; ?>"><?php echo 'Jatinegara'; ?></option>
							<option value="<?php echo'30111'; ?>"><?php echo 'Ilir timur'; ?></option>
							<option value="<?php echo'40111'; ?>"><?php echo 'Sumur Bandung'; ?></option>
							<option value="<?php echo'56172'; ?>"><?php echo 'Mertoyudan'; ?></option>
							<option value="<?php echo'56194'; ?>"><?php echo 'Magelang Selatan'; ?></option>
							<option value="<?php echo'56553'; ?>"><?php echo 'Borobudur'; ?></option>
							<option value="<?php echo'56789'; ?>"><?php echo 'Pasar Kemis'; ?></option>
							<option value="<?php echo'59879'; ?>"><?php echo 'Mijen'; ?></option>
							<option value="<?php echo'60516'; ?>"><?php echo 'Sambikerep'; ?></option>
							<option value="<?php echo'75119'; ?>"><?php echo 'Samarinda Utara'; ?></option>
						<?php } ?>
					</select>
				</div>
				<input type="submit" class="btn btn-primary" value="Simpan">
			</form>
		</div>
	</div>
</div>