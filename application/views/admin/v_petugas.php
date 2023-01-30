<head>
<style>
h4 {
  font-style: italic;
}
h2 {
  font-weight: bold;
}
</style>
</head>
<div class="container">
	<div class="card">
		<?php
			if(isset($_GET['alert'])){
				if($_GET['alert']=="berhasil"){
					echo "<div class='alert alert-success font-weight-bold text-center'>EDIT DATA BERHASIL</div>";
				}	
			}
		?>
		<div class="card-header text-center"><i class="fa fa-home"></i><h3>Da<h2>ta<h4>Petugas</h4></h2></h3> </div>
		<div class="card-body"> <a href="<?php echo base_url().'admin/petugas_tambah' ?>"
				class='btn btn-sm btn-success pull-right'> <i class="fa fa-plus"></i> Petugas Baru</a><br/><br/>
		<div class="table-responsive">
			<table class="table table-bordered table-striped table-hover table-datatable">
				<thead> <tr><th width="1%">No</th> <th>NIK</th> <th>Nama</th> <th>Username</th> 
				<th>No Telp</th> <th width="16%">Opsi</th> </tr> </thead>
				<?php
				$no = 1;
				foreach ($petugas as $p)
				{
					?>
					<tr><td><?php echo $no++; ?></td>
						<td><?php echo $p->NIK; ?></td>
						<td><?php echo $p->M_biodata_pegawai_nama; ?></td>
						<td><?php echo $p->username; ?></td>
						<td><?php echo $p->no_telp; ?></td>
						<td><a href="<?php echo base_url().'admin/petugas_edit/'.$p->id; ?>" class="btn btn-sm btn-warning">
							<i class="fa fa-wrench"></i> Edit</a>
							<a href="<?php echo base_url().'admin/petugas_hapus/'.$p->id; ?>" class="btn btn-sm btn-danger">
							<i class="fa fa-wrench"></i> Hapus</a>
						</td>
					</tr>
					<?php
				}
				?>
			</table>
		</div>
	</div>
</div>