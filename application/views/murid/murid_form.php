<?php
//$file = "anggota_form";
$attributes = array('file' => 'murid_form');
$this->load->view('Templates/Head');
$this->load->view('Templates/Header');
$this->load->view('Templates/Navigation', $attributes);
?>
<body class="hold-transition skin-blue sidebar-mini">
	<div class="wrapper">
		<!-- Content Wrapper. Contains page content -->
		<div class="content-wrapper">
			<!-- Content Header (Page header) -->
			<!-- Main content -->
			<section class="content">
				<div class="box box-default">
					<!-- /.box-header -->
					<div class="box-body">
						<div class="row">
							<div class="col-md-12">
								
									<div class="form-group">
									<form class="form-horizontal" action="<?php echo $action;?>" method="POST">
										<label>NISN Murid</label>
										<input type="text" name="nisn_murid" class="form-control" placeholder="" value="<?php echo $nisn_murid;?>">
									</div>
									<!-- /.form-group -->
									<div class="form-group">
										<label>Nama Murid</label>
										<input type="text" name="nama_murid" class="form-control" placeholder="" value="<?php echo $nama_murid;?>">
									</div>
									<!-- /.form-group -->
									<div class="form-group">
										<label>Alamat Murid</label>
										<input type="text" name="alamat_murid" class="form-control" placeholder="" value="<?php echo $alamat_murid;?>">
									</div>
									<!-- /.form-group -->
									<div class="form-group">
										<label>Angkatan</label>
										<input type="text" name="angkatan" class="form-control" placeholder="" value="<?php echo $angkatan;?>">
									</div>
									<!-- /.form-group -->
									<div class="form-group">
										<label>Sekolah</label>
										<select class="form-control select2" name="id_sekolah" id="petugas" style="width: 100%;">
											<?php foreach ($sekolah as $key => $value) { ?>
										<option value="<?php echo $value->id_sekolah; ?>"><?php echo $value->nama_sekolah;?></option>
										<?php } ?>
										</select>
									</div>
									<div class="form-group">
										<label>Wali</label>
										<select class="form-control select2" name="id_wali" id="petugas" style="width: 100%;">
											<?php foreach ($wali as $key => $value) { ?>
										<option value="<?php echo $value->id_wali; ?>"><?php echo $value->nama_wali;?></option>
										<?php } ?>
										</select>
									</div>
									<!-- /.form-group -->
									
									<center>
										<button type="submit" class="btn btn-primary"><?php echo $button; ?></button>
										<a href="<?php echo site_url('murid'); ?>" class="btn btn-default">Kembali</a>
										
									</center>
								</form>
							</div>
						</div>
						<!-- /.row -->
					</div>
					<!-- /.box-body -->
				</div>
				<!-- /.box -->
			</section>
		<!-- /.content -->
		</div> 
		<!-- /.content-wrapper -->
		<?php
		$this->load->view('Templates/Footer');
		?>