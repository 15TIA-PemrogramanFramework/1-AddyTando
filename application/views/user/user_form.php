<?php
//$file = "petugas_form";
$attributes = array('file' => 'user_form');
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
									<?php if($tambah == true){ ?>
										<label>Username</label>
										<input type="text" name="username" class="form-control" placeholder="" value="<?php echo $username;?>">
										<?php } else { ?>
										<input type="hidden" name="username" value="<?php echo $username; ?>">
										<?php } ?>
									</div>
									<!-- /.form-group -->
									<div class="form-group">
										<label>Password</label>
										<input type="text" name="password" class="form-control" placeholder="" value="<?php echo $password;?>">
									</div>
									<!-- /.form-group -->
									<div class="form-group">
										<label>Status</label>
										<select class="form-control select2" name="status" style="width: 100%;">
											<option selected="selected" value="admin">Admin</option>
											<option value="staff">Staff</option>
										</select>
									</div>
									<center>
										<button type="submit" class="btn btn-primary"><?php echo $button; ?></button>
										<a href="<?php echo site_url('user_controller'); ?>" class="btn btn-default">Kembali</a>
										
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