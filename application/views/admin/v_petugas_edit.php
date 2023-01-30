<div class="container">
	<div class="card">
		<?php
			if(isset($_GET['alert'])){
				if($_GET['alert']=="gagal"){
					echo "<div class='alert alert-danger font-weight-bold text-center'>EDIT DATA GAGAL</div>";
				}	
			}
		?>
		<div class="card-header text-center"><h4>Edit Petugas</h4></div>
		<div class="card-body">
			<a href="<?php echo base_url().'admin/petugas' ?>" class='btn btn-sm btn-light btn-outline-dark pull-right'>
				<i class="fa fa-arrow-left"></i> Kembali</a>
				<br/><br/>
				<?php foreach($petugas as $p)
				{	?>
						<form method="post" action="<?php echo base_url().'admin/petugas_update'; ?>">
							<div class="form-group">
								<label class="font-weight-bold" for="nama">Nomor Induk Kepegawaian</label>
								<input type="hidden" value="<?php echo $p->id; ?>" name="id">
								<input type="text" class="form-control" name="nik" placeholder="Masukkan NIK" 
									required="required" value="<?php echo $p->NIK; ?>">
							</div>
							<div class="form-group">
								<label class="font-weight-bold" for="nama">Nama Lengkap</label>
								<input type="text" class="form-control" name="nama" placeholder="Masukkan Nama Lengkap" 
									required="required" value="<?php echo $p->M_biodata_pegawai_nama; ?>">
							</div>
							<div class="form-group">
								<label class="font-weight-bold" for="username">Username</label>
								<input type="text" class="form-control" name="username" placeholder="Masukkan username" 
									required="required" value="<?php echo $p->username; ?>">
							</div>
							<div class="form-group">
								<label class="font-weight-bold" for="password">Password</label>
								<input type="password" class="form-control" name="password" placeholder="Masukkan password">
								<small class="form-text text-muted">Kosongkan jika tidak ingin mengubah password.</small>
							</div>
							<div class="form-group">
								<label class="font-weight-bold" for="no_telp">Nomor Telp</label>
								<input type="tel" pattern="^\d{12}$" class="form-control" name="no_telp" placeholder="Masukkan Nomor Telp" 
									required="required" value="<?php echo $p->no_telp; ?>">
							</div>
							<input type="submit" class="btn btn-primary" value="Simpan">
						</form>
			<?php } ?>
		</div>
	</div>
</div>
