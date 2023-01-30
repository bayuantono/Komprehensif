<div class="container">
	<div class="jumbotron text-center">
		<div class="col-sm-8 mx-auto">
			<h1>MUTASI KARTU KELUARGA</h1>
			<p>Selamat datang di Sistem Informasi Mutasi Kartu Keluarga</p>
			<b>Sistem ini terhubung dengan Sistem Informasi Penduduk (SIP) menggunakan web service untuk mengambil data penduduk yaitu NIK, nama, jenis kelamin, tempat tanggal lahir, agama, kewarganegaraan, pendidikan, status perkawinan dan nomor KK lama.</b>
			<p>Anda telah login sebagai <b><?php echo $this->session->userdata('nama'); ?></b> [petugas].</p>
		</div>
	</div>
	<div class="card">
		<div class="card-header">
			<div class="row">
		<div class="col-md-3">
			<div class="card bg-danger text-white">
				<div class="card-body"><h1><?php echo $this->M_data->get_data('ktp')->num_rows(); ?>
					<div class="pull-right"><i class="fa fa-users"></i></div></h1>Jumlah Penduduk
				</div>
			</div>
		</div>
		<div class="col-md-3">
			<div class="card bg-primary text-white">
				<div class="card-body"><h1><?php echo $this->M_data->get_data('kk_lama')->num_rows(); ?>
					<div class="pull-right"><i class="fa fa-book"></i></div></h1>Jumlah KK Lama
				</div>
			</div>
		</div>
		<div class="col-md-3">
			<div class="card bg-warning text-white">
				<div class="card-body"><h1><?php echo $this->M_data->get_data('kk_baru')->num_rows(); ?>
					<div class="pull-right"><i class="fa fa-users"></i></div></h1>Jumlah KK Baru
				</div>
			</div>
		</div>
		<div class="col-md-3">
			<div class="card bg-info text-white">
				<div class="card-body"><h1><?php echo $this->M_data->get_data('m_biodata_pegawai')->num_rows(); ?>
					<div class="pull-right"><i class="fa fa-users"></i></div></h1>Jumlah Petugas
				</div>
			</div>
		</div>
	</div>