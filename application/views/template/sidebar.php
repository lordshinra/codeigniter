<!-- Left side column. contains the sidebar -->
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="<?php echo base_url('assets/images/default_pic.png') ?>" class="img-circle" alt="User Image" />
            </div>
            <div class="pull-left info">
                <p><?php echo $this->session->userdata('username') ?></p>
            </div>
        </div>
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu">
            <li class="header">MAIN NAVIGATION</li>
            <li <?php if($this->uri->segment(1)=="dashboard"){echo "class='active'";} ?>>
                <a href="<?php echo base_url(); ?>">
                    <i class="fa fa-dashboard"></i> <span>Dashboard</span></i>
                </a>
            </li>
            <?php $uri = $this->uri->segment(1); ?>
            <li class="treeview <?php if($uri=="mastersiswa" || $uri=="masterguru"){echo "active";} ?>">
              <a href="#">
                <i class="fa fa-user"></i>
                <span>Siswa & Guru</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li <?php if($uri=="mastersiswa"){echo "class='active'";} ?>><a href="<?php echo base_url()."index.php/mastersiswa"; ?>"><i class="fa fa-circle-o"></i> <span>Master Siswa</span></i></a></li>
                <li <?php if($uri=="masterguru"){echo "class='active'";} ?>><a href="<?php echo base_url()."index.php/masterguru"; ?>"><i class="fa fa-circle-o"></i> <span>Master Guru</span></i></a></li>
              </ul>
            </li>

            <li class="treeview <?php if($uri=="mastermapel" || $uri=="masterwaktu" || $uri=="masterjadwal"){echo "active";} ?>">
              <a href="#">
                <i class="fa fa-book"></i>
                <span>Akademik</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li <?php if($uri=="mastermapel"){echo "class='active'";} ?>><a href="<?php echo base_url()."index.php/mastermapel"; ?>"><i class="fa fa-circle-o"></i> <span>Master Mapel</span></i></a></li>
                <li <?php if($uri=="masterwaktu"){echo "class='active'";} ?>><a href="<?php echo base_url()."index.php/masterwaktu"; ?>"><i class="fa fa-circle-o"></i> <span>Master Waktu</span></i></a></li>
                <li <?php if($uri=="masterjadwal"){echo "class='active'";} ?>><a href="<?php echo base_url()."index.php/masterjadwal"; ?>"><i class="fa fa-circle-o"></i> <span>Master Jadwal</span></i></a></li>
              </ul>
            </li>
        </ul>
    </section>
    <!-- /.sidebar -->
</aside>

<!-- =============================================== -->

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
