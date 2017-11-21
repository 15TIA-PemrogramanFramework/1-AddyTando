<?php $jabatan = $this->session->userdata('jabatan'); ?>
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <!-- search form -->
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        
        <li <?php if($file == 'murid_list' || $file == 'murid_form') { ?> class="active" <?php } ?>>
          <a href="<?php echo site_url('murid'); ?>">
            <i class="fa fa-eercast"></i> <span>Murid</span>
          </a>
        </li>
        <li <?php if($file == 'sekolah_list' || $file == 'sekolah_form') { ?> class="active" <?php } ?>>
          <a href="<?php echo site_url('sekolah'); ?>">
            <i class="fa fa-building"></i> <span>Sekolah</span>
          </a>
        </li>
        <?php if($jabatan == 'admin') { ?>
        <li <?php if($file == 'user_list' || $file == 'user_form') { ?> class="active" <?php } ?>>
          <a href="<?php echo site_url('user_controller'); ?>">
            <i class="fa fa-user-o"></i> <span>User</span>
          </a>
        </li>
        <?php } ?>
        <li <?php if($file == 'wali_list' || $file == 'wali_form') { ?> class="active" <?php } ?>>
          <a href="<?php echo site_url('wali'); ?>">
            <i class="fa fa-eercast"></i> <span>Wali</span>
          </a>
        </li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>