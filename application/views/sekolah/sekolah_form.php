<?php
//$file = "buku_form";
$attributes = array('file' => 'sekolah_form');
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
										<label>Nama Sekolah</label>
										<input type="text" name="nama_sekolah" class="form-control" placeholder="" value="<?php echo $nama_sekolah;?>">
									</div>
									<!-- /.form-group -->
									<div class="form-group">
										<label>Alamat Sekolah</label>
										<input type="text" name="alamat_sekolah" class="form-control" placeholder="" value="<?php echo $alamat_sekolah;?>">
									</div>
									<!-- /.form-group -->
									<div class="form-group">
										<label>Tingkat Sekolah</label>
										<input type="text" name="tingkat_sekolah" class="form-control" placeholder="" value="<?php echo $tingkat_sekolah;?>">
									</div>
									<!-- /.form-group -->
									<input type="hidden" name="id_sekolah" value="<?php echo $id_sekolah; ?>">
									<center>
										<button type="submit" class="btn btn-primary"><?php echo $button; ?></button>
										<a href="<?php echo site_url('sekolah'); ?>" class="btn btn-default">Kembali</a>
										
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