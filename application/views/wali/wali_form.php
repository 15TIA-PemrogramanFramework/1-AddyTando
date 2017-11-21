<?php
//$file = "anggota_form";
$attributes = array('file' => 'wali_form');
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
									<!-- /.form-group -->
									<div class="form-group">
									<form class="form-horizontal" action="<?php echo $action;?>" method="POST">
										<label>Nama Wali</label>
										<input type="text" name="nama_wali" class="form-control" placeholder="" value="<?php echo $nama_wali;?>">
									</div>
									<!-- /.form-group -->
									<div class="form-group">
										<label>Alamat Wali</label>
										<input type="text" name="alamat_wali" class="form-control" placeholder="" value="<?php echo $alamat_wali;?>">
									</div>
									<!-- /.form-group -->
									<div class="form-group">
										<label>No HP Wali</label>
										<input type="text" name="nohp_wali" class="form-control" placeholder="" value="<?php echo $nohp_wali;?>">
									</div>
									<!-- /.form-group -->
									<input type="hidden" name="id_wali" value="<?php echo $id_wali; ?>">
									<center>
										<button type="submit" class="btn btn-primary"><?php echo $button; ?></button>
										<a href="<?php echo site_url('wali'); ?>" class="btn btn-default">Kembali</a>
										
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