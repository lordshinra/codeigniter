<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8">
		<meta charset="utf-8">
		<title>Coba-Coba Codeigniter</title>
		<meta name="generator" content="Bootply" />
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<link href="<?php echo base_url()."assets"; ?>/css/bootstrap.min.css" rel="stylesheet">
		<!--[if lt IE 9]>
			<script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
    <link href="<?php echo base_url()."assets"; ?>/css/style.css" rel="stylesheet">
    <link href="<?php echo base_url()."assets"; ?>/css/sidebar.css" rel="stylesheet">
    <link href="<?php echo base_url()."assets"; ?>/css/styles.css" rel="stylesheet">
	<link href="http://cdn.datatables.net/plug-ins/1.10.7/integration/bootstrap/3/dataTables.bootstrap.css" rel="stylesheet">
    <!-- script references -->
    <script src="<?php echo base_url()."assets"; ?>/js/jquery.min.js"></script>
	<script src="<?php echo base_url()."assets"; ?>/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url()."assets"; ?>/js/jquery.dataTables.min.js"></script>
	<script src="http://cdn.datatables.net/plug-ins/1.10.7/integration/bootstrap/3/dataTables.bootstrap.js"></script>
    <script src="<?php echo base_url()."assets"; ?>/js/sidebar.js"></script>

    <script type="text/javascript">
    $(function() {
      $('.collapse').collapse();
    });
    $('#myModal').on('shown.bs.modal', function () {
      $('#myInput').focus()
    });
    </script>
	</head>
	<body>
  <div class="navbar navbar-static navbar-default navbar-fixed-top">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle toggle-left hidden-md hidden-lg" data-toggle="sidebar" data-target=".sidebar-left">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Just Project</a>
        </div>

        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
        <button type="button" class="navbar-toggle toggle-right" data-toggle="sidebar">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button><span class="caret"></span></a>
          <ul class="dropdown-menu dropdown-menu-right" role="menu">
            <li><a href="<?php echo base_url()."index.php/home"; ?>"><i class="glyphicon glyphicon-home"></i>Home</a></li>
            <li><a href="#about"><i class="glyphicon glyphicon-info-sign"></i>About</a></li>
            <li><a href="#contact"><i class="glyphicon glyphicon-phone-alt"></i>Kontak</a></li>
            <li class="divider"></li>
            <li><a href="<?php echo base_url()."index.php/project/logout"; ?>"><i class="glyphicon glyphicon-log-out"></i>Keluar</a></li>
      </div>
    </div>
    
    <div class="container-fluid">
    <div class="row">
      <div class="col-xs-5 col-sm-1 col-md-2 sidebar sidebar-left sidebar-animate sidebar-md-show" style="background-color:">
        <ul class="nav navbar-stacked">
          <?php
          $this->load->view("sidebar");
          ?>
        </ul>
      </div>
      <div class="main col-md-8 col-md-offset-3">
        <div class="page-header col-md-9" style="text-align:center;margin-top:10px;">
          <h2>Just Project</h2>
        </div>
        <div class="content">
          <div class="col-md-11">
        <?php
        $this->load->view($contents);
        ?>
      </div>
        </div>
      </div>
    </div>
  </div>
<!--footer-->
<div id="footer">
      <div class="container">
        <p class="muted credit">Copyright <a href="">Reza Satria</a> 2015</p>
      </div>
</div>
<!--/footer-->

	</body>
</html>