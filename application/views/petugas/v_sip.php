<div class="container-fluid">
	<div class="card">
		<div class="card-header text-center"> <h4>Data Penduduk dari Server SIP</h4> </div>
		<div class="card-body">
			<a href="<?php echo base_url().'petugas/api_input' ?>" class='btn btn-sm btn-success'>
				<i class="fa fa-plus"></i> Simpan ke Penduduk</a> <br/> <br/>
			<div class="table-responsive">
				<table class="table table-bordered table-striped table-hover table-datatable">
					<thead> <tr><th width="1%">No</th> <th>NIK</th> <th>Nama Lengkap</th> <th>Jenis Kelamin</th> <th>Tempat Lahir</th> <th>Tanggal Lahir</th> <th>No Paspor</th> <th>No Kitas</th> <th>Nama Ayah</th> <th>Nama Ibu</th> <th>Agama</th> <th>Kewarganegaraan</th> <th>Pekerjaan</th> <th>Pendidikan</th> <th>Status Perkawinan</th> <th>Status Hubungan Keluarga</th> <th>No KK Lama</th> </thead>
				<tbody>
					<?php
					$no = 1;
					foreach ($dataktp as $k)
					{	?>
						<tr><td><?php echo $no++; ?></td>
							<td><?php echo $k->nik; ?></td>
							<td><?php echo $k->nama; ?></td>
							<td><?php echo $k->jk; ?></td>
							<td><?php echo $k->tmp_lahir; ?></td>
							<td><?php echo $k->tgl_lahir; ?></td>
							<td><?php echo $k->no_paspor; ?></td>
							<td><?php echo $k->no_kitas; ?></td>
							<td><?php echo $k->nama_ayah; ?></td>
							<td><?php echo $k->nama_ibu; ?></td>
							<td><?php echo $k->agama; ?></td>
							<td><?php echo $k->negara; ?></td>
							<td><?php echo $k->pekerjaan; ?></td>
							<td><?php echo $k->pendidikan; ?></td>
							<td><?php echo $k->perkawinan; ?></td>
							<td><?php echo $k->hub_kel; ?></td>
							<td><?php echo $k->no_kk_lama; ?></td>
						</tr>
						<?php } ?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>