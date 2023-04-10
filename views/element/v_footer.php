<!-- End Custom template -->
  </div>
  <!--   Core JS Files   -->
  <script src="<?php echo base_url('assets/js/core/jquery.3.2.1.min.js') ?>"></script>
  <script src="<?php echo base_url('assets/js/core/popper.min.js') ?>"></script>
  <script src="<?php echo base_url('assets/js/core/bootstrap.min.js') ?>"></script>
  <!-- jQuery UI -->
  <script src="<?php echo base_url('assets/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js') ?>"></script>
  <script src="<?php echo base_url('assets/js/plugin/jquery-ui-touch-punch/jquery.ui.touch-punch.min.js') ?>"></script>
  <!-- Bootstrap Toggle -->
  <script src="<?php echo base_url('assets/js/plugin/bootstrap-toggle/bootstrap-toggle.min.js') ?>"></script>
  <!-- jQuery Scrollbar -->
  <script src="<?php echo base_url('assets/js/plugin/bootstrap-notify/bootstrap-notify.min.js') ?>"></script>

  <script src="<?php echo base_url('assets/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js') ?>"></script>
  <!-- Datatables -->
  <script src="<?php echo base_url('assets/js/plugin/datatables/datatables.min.js') ?>"></script>
  <!-- Azzara JS -->
  <script src="<?php echo base_url('assets/js/ready.min.js') ?>"></script>
  <!-- Azzara DEMO methods, don't include it in your project! -->
  <script src="<?php echo base_url('assets/js/setting-demo.js') ?>"></script>

  <script src="<?php echo base_url('assets/js/plugin/sweetalert/sweetalert.min.js') ?>"></script>

  <!-- jQuery Scrollbar -->
  <script src="<?php echo base_url('assets/js/plugin/bootstrap-notify/bootstrap-notify.min.js') ?>"></script>

  <script src="<?php echo base_url('assets/dropify/dist/js/dropify.min.js') ?>"></script>

  <script>
            $(document).ready(function(){
                // Basic
                $('.dropify').dropify();

                // Translated
                $('.dropify-fr').dropify({
                    messages: {
                        default: 'Glissez-déposez un fichier ici ou cliquez',
                        replace: 'Glissez-déposez un fichier ou cliquez pour remplacer',
                        remove:  'Supprimer',
                        error:   'Désolé, le fichier trop volumineux'
                    }
                });

                // Used events
                var drEvent = $('#input-file-events').dropify();

                drEvent.on('dropify.beforeClear', function(event, element){
                    return confirm("Do you really want to delete \"" + element.file.name + "\" ?");
                });

                drEvent.on('dropify.afterClear', function(event, element){
                    alert('File deleted');
                });

                drEvent.on('dropify.errors', function(event, element){
                    console.log('Has Errors');
                });

                var drDestroy = $('#input-file-to-destroy').dropify();
                drDestroy = drDestroy.data('dropify')
                $('#toggleDropify').on('click', function(e){
                    e.preventDefault();
                    if (drDestroy.isDropified()) {
                        drDestroy.destroy();
                    } else {
                        drDestroy.init();
                    }
                })
            });
        </script>
        
  <script >
    $(document).ready(function() {
      $('#add-row').DataTable({
      });
    });
  </script>

  <?php if($this->session->flashdata('success')) { ?>
  
  <script>
    var SweetAlert2Demo = function() {
      var initDemos = function() {
          swal({
            title: "<?php echo $this->session->flashdata('success') ?>",
            text: "<?php echo $this->session->flashdata('success') ?>",
            icon: "success",
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