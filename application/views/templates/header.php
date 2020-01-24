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
 
  <link href="<?php echo base_url();?>assets/dashio/lib/fullcalendar/bootstrap-fullcalendar.css" rel="stylesheet" />
  <link href="<?php echo base_url();?>assets/dashio/lib/font-awesome/css/font-awesome.css" rel="stylesheet" />

  <!-- DataTable -->
  <link href="<?php echo base_url();?>assets/dashio/lib/advanced-datatable/css/demo_page.css" rel="stylesheet" />
  <link href="<?php echo base_url();?>assets/dashio/lib/advanced-datatable/css/demo_table.css" rel="stylesheet" />
  <link rel="stylesheet" href="<?php echo base_url();?>assets/dashio/lib/advanced-datatable/css/DT_bootstrap.css" />
  <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/dashio/DataTables/datatables.min.css"/>


  <script src="<?php echo base_url();?>assets/dashio/lib/jquery/jquery.min.js"></script>

  <!-- Toastr Css -->
  <link href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="<?php echo base_url();?>assets/dashio/css/style.css" rel="stylesheet">
  <link href="<?php echo base_url();?>assets/dashio/css/style-responsive.css" rel="stylesheet">
  <link href="<?php echo base_url();?>assets/dashio/css/table-responsive.css" rel="stylesheet">

  <!-- Validasi Css -->
  <style type="text/css">
    .pesan{
      display: none;
      color: red; 
      margin: 10px;
    }
  </style>

  <!-- =======================================================
    Template Name: Dashio
    Template URL: https://templatemag.com/dashio-bootstrap-admin-template/
    Author: TemplateMag.com
    License: https://templatemag.com/license/
  ======================================================= -->
</head>

<body>
  <section id="container">
    <!-- **********************************************************************************************************************************************************
        TOP BAR CONTENT & NOTIFICATIONS
        *********************************************************************************************************************************************************** -->
    <!--header start-->
    <header class="header black-bg">
      <div class="sidebar-toggle-box">
        <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
      </div>
      <!--logo start-->
      <a href="<?php echo base_url('Dashboard/'); ?>" class="logo"><b>IB<span>OX</span></b></a>
      <!--logo end-->
      
      <div class="top-menu">
        <ul class="nav pull-right top-menu">
          <li><a class="logout" href="<?php echo base_url('login/logout'); ?>">Logout</a></li>
        </ul>
      </div>
    </header>
    <!--header end-->
    <!-- **********************************************************************************************************************************************************
        MAIN SIDEBAR MENU
        *********************************************************************************************************************************************************** -->
    <!--sidebar start-->
    <aside>
      <div id="sidebar" class="nav-collapse ">
        <!-- sidebar menu start-->
        <ul class="sidebar-menu" id="nav-accordion">
          <p class="centered"><a href="profile.html"><img src="<?php echo base_url();?>assets/dashio/img/ui-sam.jpg" class="img-circle" width="80"></a></p>
          <h5 class="centered"><?php echo $this->session->userdata('name'); ?></h5>
          <li class="mt">
            <a class="<?php echo activate_menu('Dashboard'); ?>" href="<?php echo site_url('Dashboard');?>">
              <i class="fa fa-dashboard"></i>
              <span>Dashboard</span>
              </a>
          </li>
          <!-- <li class="sub-menu">
            <a href="javascript:;">
              <i class="fa fa-desktop"></i>
              <span>UI Elements</span>
              </a>
            <ul class="sub">
              <li><a href="general.html">General</a></li>
              <li><a href="buttons.html">Buttons</a></li>
              <li><a href="panels.html">Panels</a></li>
              <li><a href="font_awesome.html">Font Awesome</a></li>
            </ul>
          </li>
          <li class="sub-menu">
            <a href="javascript:;">
              <i class="fa fa-cogs"></i>
              <span>Components</span>
              </a>
            <ul class="sub">
              <li><a href="grids.html">Grids</a></li>
              <li><a href="calendar.html">Calendar</a></li>
              <li><a href="gallery.html">Gallery</a></li>
              <li><a href="todo_list.html">Todo List</a></li>
              <li><a href="dropzone.html">Dropzone File Upload</a></li>
              <li><a href="inline_editor.html">Inline Editor</a></li>
              <li><a href="file_upload.html">Multiple File Upload</a></li>
            </ul>
          </li>
          <li class="sub-menu">
            <a href="javascript:;">
              <i class="fa fa-book"></i>
              <span>Extra Pages</span>
              </a>
            <ul class="sub">
              <li><a href="blank.html">Blank Page</a></li>
              <li><a href="login.html">Login</a></li>
              <li><a href="lock_screen.html">Lock Screen</a></li>
              <li><a href="profile.html">Profile</a></li>
              <li><a href="invoice.html">Invoice</a></li>
              <li><a href="pricing_table.html">Pricing Table</a></li>
              <li><a href="faq.html">FAQ</a></li>
              <li><a href="404.html">404 Error</a></li>
              <li><a href="500.html">500 Error</a></li>
            </ul>
          </li>
          <li class="sub-menu">
            <a href="javascript:;">
              <i class="fa fa-tasks"></i>
              <span>Forms</span>
              </a>
            <ul class="sub">
              <li><a href="form_component.html">Form Components</a></li>
              <li><a href="advanced_form_components.html">Advanced Components</a></li>
              <li><a href="form_validation.html">Form Validation</a></li>
              <li><a href="contactform.html">Contact Form</a></li>
            </ul>
          </li>
          <li class="sub-menu">
            <a href="javascript:;">
              <i class="fa fa-th"></i>
              <span>Data Tables</span>
              </a>
            <ul class="sub">
              <li><a href="basic_table.html">Basic Table</a></li>
              <li><a href="responsive_table.html">Responsive Table</a></li>
              <li><a href="advanced_table.html">Advanced Table</a></li>
            </ul>
          </li> -->
          <li>
            <a class="<?php echo activate_menu('Jobs'); ?>" href="<?php echo site_url('Jobs');?>">
              <i class="fa fa-cogs"></i>
              <span>Joblist </span>
              <!-- <span class="label label-theme pull-right mail-info">3</span> -->
              </a>
          </li>
          <li>
            <a class="<?php echo activate_menu('Asset_group'); ?>" href="<?php echo site_url('Asset_group');?>">
              <i class="fa fa-tasks"></i>
              <span>Asset Group </span>
              <!-- <span class="label label-theme pull-right mail-info">3</span> -->
              </a>
          </li>
          <li>
            <a class="<?php echo activate_menu('Privantive'); ?>" href="<?php echo site_url('Privantive');?>">
              <i class="fa fa-tasks"></i>
              <span>Privantive Maintenance </span>
              <!-- <span class="label label-theme pull-right mail-info">3</span> -->
              </a>
          </li>
         
          <!-- <li class="sub-menu">
            <a href="javascript:;">
              <i class=" fa fa-bar-chart-o"></i>
              <span>Pssd</span>
              </a>
            <ul class="sub">
              <li><a href="morris.html">Morris</a></li>
              <li><a href="chartjs.html">Chartjs</a></li>
              <li><a href="flot_chart.html">Flot Charts</a></li>
              <li><a href="xchart.html">xChart</a></li>
            </ul>
          </li>
          <li class="sub-menu">
            <a href="javascript:;">
              <i class="fa fa-comments-o"></i>
              <span>Chat Room</span>
              </a>
            <ul class="sub">
              <li><a href="lobby.html">Lobby</a></li>
              <li><a href="chat_room.html"> Chat Room</a></li>
            </ul>
          </li>
          <li>
            <a href="google_maps.html">
              <i class="fa fa-map-marker"></i>
              <span>Google Maps </span>
              </a>
          </li> -->
        </ul>
        <!-- sidebar menu end-->
      </div>
    </aside>
    <!--sidebar end-->
    <!-- **********************************************************************************************************************************************************
        MAIN CONTENT
        *********************************************************************************************************************************************************** -->
    <!--main content start-->
    <section id="main-content">
      <section class="wrapper">