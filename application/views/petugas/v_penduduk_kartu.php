<!DOCTYPE html>
<html>
<head>
	<title>Cetak Mutasi Penduduk</title>
</head>
<body>
	<style type="text/css">
		.card{	border: 1px solid #000; width: 450px;	}
		.card-header{
			border-bottom: 1px solid #000; text-align: center; font-weight: bold; padding: 12px; }
			.card-body { padding: 20px; }
	</style>
	<div class="card">
		<div class="card-header">DATA MUTASI PENDUDUK</div>
		<div class="card-body">
			<div class="container">
				<table class="table table-borderless table-sm fs-2">
					<?php
						$no = 1;
						foreach($ktp as $k)
						{	?>
							<tr> <td width="50%">NIK</td> <td width="3%">:</td>
								 <td><?php echo 10000+$k->nik; ?></td></tr>
								<tr> <td>Nama</td> <td>:</td> <td><?php echo $k->nama; ?></td></tr>
								<tr> <td>Jenis Kelamin</td> <td>:</td> <td><?php echo $k->jk; ?></td></tr>
								<tr> <td>Tempat Lahir</td> <td>:</td> <td><?php echo $k->tmp_lahir; ?></td></tr>
								<tr> <td>Tanggal Lahir</td> <td>:</td> <td><?php echo $k->tgl_lahir; ?></td></tr>
								<tr> <td>Agama</td> <td>:</td> <td><?php echo $k->agama; ?></td></tr>
								<tr> <td>Kewarganegaraan</td> <td>:</td> <td><?php echo $k->negara; ?></td></tr>
								<tr> <td>Pekerjaan</td> <td>:</td> <td><?php echo $k->pekerjaan; ?></td></tr>
								<tr> <td>Pendidikan</td> <td>:</td> <td><?php echo $k->pendidikan; ?></td></tr>
								<tr> <td>Status Perkawinan</td> <td>:</td> <td><?php echo $k->perkawinan; ?></td></tr>
								<tr> <td>No KK Lama</td> <td>:</td> <td><?php echo $k->no_kk_lama; ?></td></tr>
								<tr> <td>No KK Baru</td> <td>:</td> <td><?php echo $k->no_kk_baru; ?></td></tr>
					<?php	} ?>
				</table>
			</div>
		</div>
	</div>
<script type="text/javascript">
	window.print();
</script>
</body>
</html>