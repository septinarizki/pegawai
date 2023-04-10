<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <title><?php echo $title ?></title>
  <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
  <link rel="icon" href="<?php echo base_url('assets/img/icon.ico') ?>" type="image/x-icon"/>
  <meta name="description" content="">
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="format-detection" content="telephone=no">
        
  <!-- Fonts and icons -->
  <script src="<?php echo base_url('assets/js/plugin/webfont/webfont.min.js') ?>"></script>
  <script>
    WebFont.load({
      google: {"families":["Open+Sans:300,400,600,700"]},
      custom: {"families":["Flaticon", "Font Awesome 5 Solid", "Font Awesome 5 Regular", "Font Awesome 5 Brands"], urls: ["<?php echo base_url('assets/css/fonts.css') ?>"]},
      active: function() {
        sessionStorage.fonts = true;
      }
    });
  </script>

  <!-- CSS Files -->
  <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css') ?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/css/azzara.min.css') ?>">
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link rel="stylesheet" href="<?php echo base_url('assets/css/demo.css') ?>">

  <link rel="stylesheet" href="<?php echo base_url('assets/dropify/dist/css/demo.css') ?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/dropify/dist/css/dropify.min.css') ?>">
  
</head>
<body>
  <div class="wrapper">
    <!--
        Tip 1: You can change the background color of the main header using: data-background-color="blue | purple | light-blue | green | orange | red"
    -->
    <div class="main-header" data-background-color="blue">
      <!-- Logo Header -->
      <div class="logo-header">

        <button class="navbar-toggler sidenav-toggler ml-auto" type="button" data-toggle="collapse" data-target="collapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon">
            <i class="fa fa-bars" style="color: white;"></i>
          </span>
        </button>
        <button class="topbar-toggler more"><i class="fa fa-ellipsis-v"></i></button>
        <div class="navbar-minimize">
          <button class="btn btn-minimize btn-rounded">
            <i class="fa fa-bars" style="color: white;"></i>
          </button>
        </div>
      </div>
      <!-- End Logo Header -->
    </div>