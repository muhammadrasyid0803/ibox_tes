<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="Dashboard">
  <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
  <title>Selamat Datang di Aplikasi IBOX</title>

  <!-- Favicons -->
  <link href="<?php echo base_url();?>assets/dashio/img/favicon.png" rel="icon">
  <link href="<?php echo base_url();?>assets/dashio/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Bootstrap core CSS -->
  <link href="<?php echo base_url();?>assets/dashio/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!--external css-->
  <link href="<?php echo base_url();?>assets/dashio/lib/font-awesome/css/font-awesome.css" rel="stylesheet" />
  <!-- Custom styles for this template -->
  <link href="<?php echo base_url();?>assets/dashio/css/style.css" rel="stylesheet">
  <link href="<?php echo base_url();?>assets/dashio/css/style-responsive.css" rel="stylesheet">
  
  <!-- =======================================================
    Template Name: Dashio
    Template URL: https://templatemag.com/dashio-bootstrap-admin-template/
    Author: TemplateMag.com
    License: https://templatemag.com/license/
  ======================================================= -->
</head>

<body>
  <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->
  <div id="login-page">
    <div class="container">
      <form class="form-login" action="<?php echo base_url('login/masuk'); ?>" method="post">
        <h2 class="form-login-heading">Selamat Datang di Aplikasi IBOX</h2>
        <div align="center">
        <a href="">
          <span> <img src="<?php echo base_url();?>assets/dashio/img/logo.jpg" width="50%"  height="100%" style="margin-top: 5%"></span>
        </a>
        </div>
        <div class="login-wrap">
          <input type="text" name="txtUsername" class="form-control" placeholder="User ID" autofocus>
          <br>
          <input type="password" name="txtPassword" class="form-control" placeholder="Password">
          <br>
          <button class="btn btn-theme btn-block" type="submit"><i class="fa fa-lock"></i> SIGN IN</button>
        </div>
      </form>
    </div>
  </div>
  <!-- js placed at the end of the document so the pages load faster -->
  <script src="<?php echo base_url();?>assets/dashio/lib/jquery/jquery.min.js"></script>
  <script src="<?php echo base_url();?>assets/dashio/lib/bootstrap/js/bootstrap.min.js"></script>
  <!--BACKSTRETCH-->
  <!-- You can use an image of whatever size. This script will stretch to fit in any screen size.-->
  <script type="text/javascript" src="<?php echo base_url();?>assets/dashio/lib/jquery.backstretch.min.js"></script>
  <script>
    $.backstretch("<?php echo base_url();?>assets/dashio/img/tes.png", {
      speed: 500
    });
  </script>
</body>

</html>
