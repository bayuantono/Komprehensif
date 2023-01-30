<div class="container-fluid">
	<div class="card">
		<div class="card-header text-center"> <h4>Data Penduduk</h4> </div>
		<div class="card-body">
			<a href="<?php echo base_url().'petugas/hapus_penduduk' ?>" class='btn btn-sm btn-danger'>
				<i class="fa fa-trash"></i> Hapus Semua Data</a> <br/> <br/>
			<div class="table-responsive">
				<table class="table table-bordered table-striped table-hover table-datatable">
					<thead> <tr><th width="1%">No</th> <th>NIK</th> <th>Nama Lengkap</th> <th>Jenis Kelamin</th> <th>Tempat Lahir</th> <th>Tanggal Lahir</th> <th>Agama</th> <th>Kewarganegaraan</th> <th>Pekerjaan</th> <th>Pendidikan</th> <th>Status Perkawinan</th> <th>No KK Lama</th> <th>No KK Baru</th> <th width="13%">Opsi</th> </thead>
				<tbody>
					<?php
					$no = 1;
					foreach ($ktp as $k)
					{	?>
						<tr><td><?php echo $no++; ?></td>
							<td><?php echo $k->nik; ?></td>
							<td><?php echo $k->nama; ?></td>
							<td><?php echo $k->jk; ?></td>
							<td><?php echo $k->tmp_lahir; ?></td>
							<td><?php echo $k->tgl_lahir; ?></td>
							<td><?php echo $k->agama; ?></td>
							<td><?php echo $k->negara; ?></td>
							<td><?php echo $k->pekerjaan; ?></td>
							<td><?php echo $k->pendidikan; ?></td>
							<td><?php echo $k->perkawinan; ?></td>
							<td><?php echo $k->no_kk_lama; ?></td>
							<td><?php echo $k->no_kk_baru; ?></td>
							<td><a href="<?php echo base_url().'petugas/pdd_edit/'.$k->nik; ?>"class="btn btn-sm btn-warning">
							<i class="fa fa-wrench"></i> Edit</a>
							<a targer="_blank" href="<?php echo base_url().'petugas/penduduk_ktp/'.$k->nik; ?>"
								class="btn btn-sm btn-primary"><i class="fa fa-address-card"></i> Cetak Data</a>
							</td>
						</tr>
						<?php } ?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>