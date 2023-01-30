<div class="container-fluid">
	<div class="card">
		<div class="card-header text-center"> <h4>KK Lama</h4> </div>
		<div class="card-body"> 
			<a href="<?php echo base_url().'petugas/kk_lama_tambah' ?>" 
				class='btn btn-sm btn-success pull-right'> <i class="fa fa-plus"></i> Kartu Keluarga</a> <br/> <br/>
			<div class="table-responsive">
			<table class="table table-bordered table-striped table-hover table-datatable">
				<thead> <tr><th width="1%">No</th> <th>No KK Lama</th> <th>Nama Kepala Keluarga</th> <th>Alamat</th> 
				<th>Tanggal Pengesahan</th> <th>Pengesah</th> <th>Kode Pos</th> <th width="13%">Opsi</th> </tr> </thead>
				<tbody>
					<?php
					$no = 1;
					foreach ($kk_lama as $kl)
					{	?>
						<tr><td><?php echo $no++; ?></td>
							<td><?php echo $kl->no_kk_lama; ?></td>
							<td><?php echo $kl->nama_kep_kel; ?></td>
							<td><?php echo $kl->alamat; ?></td>
							<td><?php echo $kl->tgl_pengesah; ?></td>
							<td><?php echo $kl->pengesah; ?></td>
							<td><?php echo $kl->kode_pos; ?></td>
							<td><a href="<?php echo base_url().'petugas/kl_edit/'.$kl->no_kk_lama; ?>"class="btn btn-sm btn-warning">
							<i class="fa fa-wrench"></i> Edit</a>
							<a href="<?php echo base_url().'petugas/kl_hapus/'.$kl->no_kk_lama; ?>" class="btn btn-sm btn-danger">
							<i class="fa fa-wrench"></i> Hapus</a>
							</td>
						</tr>
						<?php
					}
					?>
				</tbody>
			</table>
		</div>
	</div>
</div>
</div>