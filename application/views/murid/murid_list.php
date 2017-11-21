<?php
//$file = "anggota_list";
$attributes = array('file' => 'murid_list');
$this->load->view('Templates/Head');
$this->load->view('Templates/Header');
$this->load->view('Templates/Navigation', $attributes);
$jabatan = $this->session->userdata('jabatan');
?>

<body class="hold-transition skin-blue sidebar-mini">
	<div class="wrapper">
		<!-- Left side column. contains the logo and sidebar -->
		<!-- Content Wrapper. Contains page content -->
		<div class="content-wrapper">
			<!-- Content Header (Page header) -->
			<!-- Main content -->
			<section class="content">
			
				<div class="row">
				<?php if($jabatan == 'staff') { ?>
				<div class="col-md-12 text-right">
		<a href="<?php echo site_url('murid/tambah_data') ?>" class="btn btn-primary" style="margin-top:20px;margin-bottom:20px;"><i class="fa fa-plus"></i> Tambah</a>
	</div>
	<?php } ?>
					<div class="col-xs-12">
						<!-- /.box -->

						<div class="box">
							<!-- /.box-header -->
							<div class="box-body">
								<table id="example1" class="table table-bordered table-hover">
									<thead>
										<tr>
											<th style="text-align:center; vertical-align:middle;">NISN Murid</th>
											<th style="text-align:center; vertical-align:middle;">Nama Murid</th>
											<th style="text-align:center; vertical-align:middle;">Alamat Murid</th>
											<th style="text-align:center; vertical-align:middle;">Angkatan</th>
											<th style="text-align:center; vertical-align:middle;">Tingkat</th>
											<th style="text-align:center; vertical-align:middle;">Sekolah</th>
											<th style="text-align:center; vertical-align:middle;">Nama Wali</th>
											<th style="text-align:center; vertical-align:middle;">Aksi</th>
										</tr>
									</thead>
									<tbody>
										<?php foreach ($murid as $key => $value) { ?>
										<tr>
											<td align="center" style="vertical-align:middle;"><?php echo $value->nisn_murid;?></td>
											<td align="center" style="vertical-align:middle;"><?php echo $value->nama_murid;?></td>
											<td align="center" style="vertical-align:middle;"><?php echo $value->alamat_murid;?></td>
											<td align="center" style="vertical-align:middle;"><?php echo $value->angkatan;?></td>
											<td align="center" style="vertical-align:middle;"><?php echo $value->tingkat_sekolah;?></td>
											<td align="center" style="vertical-align:middle;"><?php echo $value->nama_sekolah;?></td>
											<td align="center" style="vertical-align:middle;"><?php echo $value->nama_wali;?></td>
											<td align="center" style="vertical-align:middle;">
												<?php echo anchor(site_url("murid/edit/".$value->nisn_murid),
													'<i class="fa fa-pencil"></i>', 
													'class="btn btn-warning"');?>
												<?php
												echo anchor(site_url("murid/delete/".$value->nisn_murid),
													'<i class="fa fa-trash"></i>', 
													'class="btn btn-danger"');
													?>
												</td>
											</tr>
											<?php } ?> 
										</tbody>
									</table>
								</div>
								<!-- /.box-body -->
							</div>
							<!-- /.box -->
						</div>
						<!-- /.col -->
					</div>
					<!-- /.row -->
				</section>
				<!-- /.content -->
			</div>
			<!-- /.content-wrapper -->

			<?php
			$this->load->view('Templates/Footer');
			?>