<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <title><?php echo $title ?></title>
  <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
  <link rel="icon" href="<?php echo base_url('assets/img/icon.ico') ?>" type="image/x-icon"/>

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
</head>
<body class="login">
  <div class="wrapper wrapper-login">
    <div class="container container-login animated fadeIn">
      <form method="POST" action="<?php echo site_url('Login/cek_login') ?>">
      <h3 class="text-center">Silahkan Login Admin</h3>
      <div class="login-form">
        <div class="form-group form-floating-label">
          <input id="username" name="username" maxlength="15" type="text" class="form-control input-border-bottom" required>
          <label for="username" class="placeholder">Username</label>
        </div>
        <div class="form-group form-floating-label">
          <input id="password" maxlength="15" name="password" type="password" class="form-control input-border-bottom" required>
          <label for="password" class="placeholder">Password</label>
        </div>
        <div class="form-action mb-3">
          <button type="submit" class="btn btn-primary btn-rounded btn-login">Sign In</button>
        </div>
        </form>
        <div class="login-account">
          <span class="msg">Klik Disini Untuk Login Pegawai ?</span>
          <a href="#" id="show-signup" class="link">Disini</a>
        </div>
      </div>
    </div>

    <div class="container container-signup animated fadeIn">
      <form method="POST" action="<?php echo site_url('Login/cek_loginPegawai') ?>">
      <h3 class="text-center">Silahkan Login Pegawai</h3>
      <div class="login-form">
        <div class="form-group form-floating-label">
          <input  id="nip" name="nip" type="text" class="form-control input-border-bottom" required>
          <label for="nip" class="placeholder">NIP</label>
        </div>
        <div class="form-group form-floating-label">
          <input id="password" name="password" type="password" class="form-control input-border-bottom" required>
          <label for="password" class="placeholder">Password</label>
        </div>
        <div class="form-action">
          <button type="submit" class="btn btn-primary btn-rounded btn-login">Sign In</button>
        </div>
        </form>
        <div class="login-account">
          <span class="msg">Klik Disini Untuk Login Admin ?</span>
          <a href="#" id="show-signin" class="link">Disini</a>
        </div>
      </div>
    </div>
  </div>
  <script src="<?php echo base_url('assets/js/core/jquery.3.2.1.min.js') ?>"></script>
  <script src="<?php echo base_url('assets/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js') ?>"></script>
  <script src="<?php echo base_url('assets/js/core/popper.min.js') ?>"></script>
  <script src="<?php echo base_url('assets/js/core/bootstrap.min.js') ?>"></script>
  <script src="<?php echo base_url('assets/js/ready.js') ?>"></script>
  <script src="<?php echo base_url('assets/js/plugin/sweetalert/sweetalert.min.js') ?>"></script>

  <!-- jQuery Scrollbar -->
  <script src="<?php echo base_url('assets/js/plugin/bootstrap-notify/bootstrap-notify.min.js') ?>"></script>

  <?php if($this->session->flashdata('error')) { ?>

  <script>
    var SweetAlert2Demo = function() {
      var initDemos = function() {
          swal({
            title: "<?php echo $this->session->flashdata('error') ?>",
            text: "<?php echo $this->session->flashdata('error') ?>",
            icon: "error",
            buttons: {
              confirm: {
                text: "OKE",
                value: true,
                visible: true,
                className: "btn btn-success",
                closeModal: true
              }
            }
          });
      };

      return {
        init: function() {
          initDemos();
        },
      };
    }();

    jQuery(document).ready(function() {
      SweetAlert2Demo.init();
    });
  </script>

  <?php } ?>

</body>
</html>
