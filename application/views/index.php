<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="content-type" content="text/html; charset=UTF-8">
  <meta charset="utf-8">
  <title>Bootstrap 3 Affix Sidebar</title>
  <meta name="generator" content="Bootply" />
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <link href="<?php echo base_url('assets/AdminLTE/bootstrap/css/bootstrap.min.css') ?>" rel="stylesheet">
		<!--[if lt IE 9]>
			<script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
      <![endif]-->
      <link href="<?php echo base_url()."assets"; ?>/css/styles.css" rel="stylesheet">
    </head>
    <body id="index">
      <div class="container">
        <div id="logo">
			<!---logo--->
        </div>
        <div id="loginbox" style="margin-top:20px;" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
          <div class="panel panel-info" style="border-color:#02B2FD;">
            <div class="panel-heading" id="panel-heading">
              <div class="panel-title">Login</div>
              <!-- <div style="float:right; font-size: 80%; position: relative; top:-10px"><a href="#">Forgot password?</a></div> //-->
            </div>

            <div style="padding: 30px 20px 0 20px" class="panel-body" >

              <div style="display:none" id="login-alert" class="alert alert-danger col-sm-12"></div>

              <form id="loginform" class="form-horizontal" role="form" method="post" action="<?php echo base_url()."index.php/login/ceklogin"; ?>">

                <div style="margin-bottom: 25px" class="input-group">
                  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                  <input id="login-username" type="text" class="form-control" name="username" value="" placeholder="username">
                </div>

                <div style="margin-bottom: 25px" class="input-group">
                  <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                  <input id="login-password" type="password" class="form-control" name="password" placeholder="password">
                </div>
                <div style="margin-top:10px" class="form-group">
                  <!-- Button -->

                  <div class="col-sm-12 controls">
                    <input type="submit" name="login" value="Login" id="btn-login" class="btn btn-success">
                  </div>
                </div>


                <div class="form-group">
                  <div class="col-md-12 control">
                    <div style="border-top: 1px solid#888; padding-top:15px; font-size:85%" >
                      Belum Punya Akun ?
                      <a href="<?php echo base_url()."index.php/login/hal_registrasi"; ?>">
                        Registrasi Disini
                      </a>
                    </div>
                  </div>
                </div>
                <div style="padding-top:10px; text-align:center;"  class="form-group">
                <?php echo "<label for='password' class='control-label'>".$this->session->flashdata('pesan')."</label>" ?>
                </div>
              </form>

            </div>
          </div>
        </div>
      </div>


      <!-- script references -->
      <script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
      <script src="<?php echo base_url()."assets"; ?>/js/bootstrap.min.js"></script>
      <script src="<?php echo base_url()."assets"; ?>/js/scripts.js"></script>
    </body>
    </html>
