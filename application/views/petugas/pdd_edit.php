<div class="container">
	<div class="card">
		<div class="card-header text-center"><h4>Edit Data Penduduk</h4></div>
		<div class="card-body">
			<a href="<?php echo base_url().'petugas/penduduk' ?>" class='btn btn-sm btn-light btn-outline-dark pull-right'>
				<i class="fa fa-arrow-left"></i> Kembali</a>
				<br/><br/>
				<?php foreach($ktp as $k)
				{	?>
				<form method="post" action="<?php echo base_url().'petugas/pdd_update'; ?>">
				<div class="form-group">
						<label class="font-weight-bold" for="nik">NIK</label>
						<input type="hidden" name="nik" value="<?php echo $k->nik; ?>">
						<input type="text" class="form-control" name="nik" placeholder="Masukkan NIK" 
									required="required" value="<?php echo $k->nik; ?>">
				</div><div class="form-group">
					<label class="font-weight-bold" for="nama">Nama</label>
					<input type="text" class="form-control" name="nama" placeholder="Masukkan Nama Penduduk" 
					required="required" value="<?php echo $k->nama; ?>">
				</div>
				<div class="form-group">
					<label class="font-weight-bold" for="jk">Jenis Kelamin</label>
					<select class="form-control" name="jk" required="required">
						<option value="">- Pilih Jenis Kelamin -</option>
						<option <?php if($k->jk=="L")
						{ echo "selected='selected'"; } ?> value="L">Laki-laki</option>
						<option <?php if($k->jk=="P")
						{ echo "selected='selected'"; } ?> value="P">Perempuan</option>
					</select>
				</div>
				<div class="form-group">
					<label class="font-weight-bold" for="tmp_lahir">Tempat Lahir</label>
					<input class="form-control" name="tmp_lahir" placeholder="Masukkan Tempat Lahir" 
					required="required" value="<?php echo $k->tmp_lahir; ?>">
				</div>
				<div class="form-group">
					<label class="font-weight-bold" for="tgl_lahir">Tanggal Lahir</label><br>
					<input type="date" id="tgl_lahir" name="tgl_lahir"required="required" value="<?php echo $k->tgl_lahir; ?>" >
				</div>
				<div class="form-group">
					<label class="font-weight-bold" for="agama">Agama</label>
					<select class="form-control" name="agama" required="required">
						<option value="">- Pilih Agama -</option>
						<option <?php if($k->agama=="Islam")
						{ echo "selected='selected'"; } ?> value="Islam">Islam</option>
						<option <?php if($k->agama=="Kristen")
						{ echo "selected='selected'"; } ?> value="Kristen">Kristen</option>
						<option <?php if($k->agama=="Katholik")
						{ echo "selected='selected'"; } ?> value="Katholik">Katholik</option>
						<option <?php if($k->agama=="Hindu")
						{ echo "selected='selected'"; } ?> value="Katholik">Hindu</option>
						<option <?php if($k->agama=="Budha")
						{ echo "selected='selected'"; } ?> value="Budha">Budha</option>
						<option <?php if($k->agama=="Khong Hucu")
						{ echo "selected='selected'"; } ?> value="Khong Hucu">Khong Hucu</option>
					</select>
				</div>
				<div class="form-group">
					<label class="font-weight-bold" for="negara">Kewarganegaraan</label>
					<select class="form-control" name="negara" required="required">
						<option value="">- Pilih Kewarganegaraan -</option>
						<option <?php if($k->negara=="WNI")
						{ echo "selected='selected'"; } ?> value="WNI">WNI</option>
						<option <?php if($k->negara=="WNA")
						{ echo "selected='selected'"; } ?> value="WNA">WNA</option>
					</select>
				</div>
				<div class="form-group">
					<label class="font-weight-bold" for="pekerjaan">Pekerjaan</label>
					<select class="form-control" name="pekerjaan" required="required">
						<option value="">- Pilih Pekerjaan -</option>
						<option <?php if($k->pekerjaan=="Tidak Bekerja/Belum Bekerja")
						{ echo "selected='selected'"; } ?> value="Tidak Bekerja/Belum Bekerja">Tidak Bekerja/Belum Bekerja</option>
						<option <?php if($k->pekerjaan=="Mengurus Rumah Tangga")
						{ echo "selected='selected'"; } ?> value="Mengurus Rumah Tangga">Mengurus Rumah Tangga</option>
						<option <?php if($k->pekerjaan=="Pelajar/Mahasiswa")
						{ echo "selected='selected'"; } ?> value="Pelajar/Mahasiswa">Pelajar/Mahasiswa</option>
						<option <?php if($k->pekerjaan=="PNS")
						{ echo "selected='selected'"; } ?> value="PNS">PNS</option>
						<option <?php if($k->pekerjaan=="TNI")
						{ echo "selected='selected'"; } ?> value="TNI">TNI</option>
						<option <?php if($k->pekerjaan=="Kepolisian RI")
						{ echo "selected='selected'"; } ?> value="Kepolisian RI">Kepolisian RI</option>
						<option <?php if($k->pekerjaan=="Karyawan Swasta")
						{ echo "selected='selected'"; } ?> value="Karyawan Swasta">Karyawan Swasta</option>
						<option <?php if($k->pekerjaan=="Buruh")
						{ echo "selected='selected'"; } ?> value="Buruh">Buruh</option>
						<option <?php if($k->pekerjaan=="Wiraswasta")
						{ echo "selected='selected'"; } ?> value="Wiraswasta">Wiraswasta</option>
					</select>
				</div>
				<div class="form-group">
					<label class="font-weight-bold" for="pendidikan">Pendidikan</label>
					<select class="form-control" name="pendidikan" required="required">
						<option value="">- Pilih Pendidikan -</option>
						<option <?php if($k->pendidikan=="Tidak/Belum Sekolah")
						{ echo "selected='selected'"; } ?> value="Tidak/Belum Sekolah">Tidak/Belum Sekolah</option>
						<option <?php if($k->pendidikan=="Belum Tamat SD/Sederajat")
						{ echo "selected='selected'"; } ?> value="Belum Tamat SD/Sederajat">Belum Tamat SD/Sederajat</option>
						<option <?php if($k->pendidikan=="Tamat SD/Sederajat")
						{ echo "selected='selected'"; } ?> value="Tamat SD/Sederajat">Tamat SD/Sederajat</option>
						<option <?php if($k->pendidikan=="SLTP/Sederajat")
						{ echo "selected='selected'"; } ?> value="SLTP/Sederajat">SLTP/Sederajat</option>
						<option <?php if($k->pendidikan=="SLTA/Sederajat")
						{ echo "selected='selected'"; } ?> value="SLTA/Sederajat">SLTA/Sederajat</option>
						<option <?php if($k->pendidikan=="Diploma I/II")
						{ echo "selected='selected'"; } ?> value="Diploma I/II">Diploma I/II</option>
						<option <?php if($k->pendidikan=="Akademi/Diploma III/S.Muda")
						{ echo "selected='selected'"; } ?> value="Akademi/Diploma III/S.Muda">Akademi/Diploma III/S.Muda</option>
						<option <?php if($k->pendidikan=="Diploma IV/Strata I")
						{ echo "selected='selected'"; } ?> value="Diploma IV/Strata I">Diploma IV/Strata I</option>
						<option <?php if($k->pendidikan=="Strata II")
						{ echo "selected='selected'"; } ?> value="Strata II">Strata II</option>
						<option <?php if($k->pendidikan=="Strata III")
						{ echo "selected='selected'"; } ?> value="Strata III">Strata III</option>
					</select>
				</div>
				<div class="form-group">
					<label class="font-weight-bold" for="perkawinan">Perkawinan</label>
					<select class="form-control" name="perkawinan" required="required">
						<option value="">- Pilih Status Perkawinan -</option>
						<option <?php if($k->perkawinan=="Belum Kawin")
						{ echo "selected='selected'"; } ?> value="Belum Kawin">Belum Kawin</option>
						<option <?php if($k->perkawinan=="Kawin")
						{ echo "selected='selected'"; } ?> value="Kawin">Kawin</option>
						<option <?php if($k->perkawinan=="Cerai Hidup")
						{ echo "selected='selected'"; } ?> value="Cerai Hidup">Cerai Hidup</option>
						<option <?php if($k->perkawinan=="Cerai Mati")
						{ echo "selected='selected'"; } ?> value="Cerai Mati">Cerai Mati</option>
					</select>
				</div>
				<div class="form-group">
					<label class="font-weight-bold" for="no_kk_lama">No KK Lama</label>
					<select class="form-control" name="no_kk_lama" required="required">
						<option value="">- Pilih No KK Lama -</option>
						<option <?php if($k->no_kk_lama=="32500101")
						{ echo "selected='selected'"; } ?> value="32500101">32500101</option>
						<option <?php if($k->no_kk_lama=="34200105")
						{ echo "selected='selected'"; } ?> value="34200105">34200105</option>
						<option <?php if($k->no_kk_lama=="39200199")
						{ echo "selected='selected'"; } ?> value="39200199">39200199</option>
					</select>
				</div>
				<div class="form-group">
					<label class="font-weight-bold" for="no_kk_baru">No KK Baru</label>
					<select class="form-control" name="no_kk_baru" required="required">
						<option value="">- Pilih No KK Baru -</option>
						<option <?php if($k->no_kk_baru=="33101121")
						{ echo "selected='selected'"; } ?> value="33101121">33101121</option>
						<option <?php if($k->no_kk_baru=="33123001")
						{ echo "selected='selected'"; } ?> value="33123001">33123001</option>
						<option <?php if($k->no_kk_baru=="33555221")
						{ echo "selected='selected'"; } ?> value="33555221">33555221</option>
					</select>
				</div>
				
				<input type="submit" class="btn btn-primary" value="Simpan">
			</form>
			<?php } ?>
		</div>
	</div>
</div>