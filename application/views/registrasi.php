<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="content-type" content="text/html; charset=UTF-8">
  <meta charset="utf-8">
  <title>Bootstrap 3 Affix Sidebar</title>
  <meta name="generator" content="Bootply" />
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <link href="<?php echo base_url()."assets"; ?>/css/bootstrap.min.css" rel="stylesheet">
    <!--[if lt IE 9]>
      <script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
      <![endif]-->
      <link href="<?php echo base_url()."assets"; ?>/css/styles.css" rel="stylesheet">
    </head>
    <body>
      <div class="container">
        <div id="loginbox" style="margin-top:50px;" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
          <div class="panel panel-info" >
            <div class="panel-heading">
              <div class="panel-title">Registrasi</div>
              <!-- <div style="float:right; font-size: 80%; position: relative; top:-10px"><a href="#">Forgot password?</a></div> //-->
            </div>

            <div style="padding: 30px 20px 0 20px" class="panel-body" >

              <div style="display:none" id="login-alert" class="alert alert-danger col-sm-12"></div>

              <form id="loginform" class="form-horizontal" role="form" method="post" action="<?php echo base_url()."index.php/login/registrasi"; ?>">

                <div style="margin-bottom: 25px" class="input-group">
                  <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
                  <input id="login-email" type="text" class="form-control" name="email" value="" placeholder="email">
                </div>

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
                    <input type="submit" name="registrasi" value="Registrasi" id="btn-login" class="btn btn-success">
                  </div>
                </div>


                <div class="form-group">
                  <div class="col-md-12 control">
                    <div style="border-top: 1px solid#888; padding-top:15px; font-size:85%" >
                      Sudah Punya Akun ?
                      <a href="<?php echo base_url()."index.php/login"; ?>">
                        Login Disini
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
