  <div class="main-panel">
      <div class="content">
        <div class="page-inner">
          <div class="page-header">
            <h4 class="page-title">Data Profile</h4>
            <ul class="breadcrumbs">
              <li class="nav-home">
                <a href="#">
                  <i class="flaticon-home"></i>
                </a>
              </li>
              <li class="separator">
                <i class="flaticon-right-arrow"></i>
              </li>
              <li class="nav-item">
                <a href="#">Data</a>
              </li>
              <li class="separator">
                <i class="flaticon-right-arrow"></i>
              </li>
              <li class="nav-item">
                <a href="#">Profile</a>
              </li>
            </ul>
          </div>
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header">
                  <div class="card-title">Data Profile</div>
                </div>
                <form method="POST" action="<?php echo site_url('Pegawai/edit_profile') ?>" enctype="multipart/form-data">
                <div class="card-body">
                
                <?php foreach($data_user as $d) { ?>
                  <?php if($d->id == $this->session->userdata('ID')) { ?>

                  <input type="hidden" value="<?php echo $d->id ?>" name="id" required="">
                  <input type="hidden" value="<?php echo $d->level ?>" name="level" required="">

                  <div class="form-group">
                    <label>Username</label>
                    <input type="text" value="<?php echo $d->username ?>" class="form-control" name="username" placeholder="Username ..." required="">
                  </div>

                  <div class="form-group">
                    <label>Password</label>
                    <input type="password" class="form-control" name="password" placeholder="Password ..." required="">
                  </div>

                <?php } } ?>

                </div>
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Ubah Data</button>
                </div>
                </form>
              </div>  
            </div>

                
          </div>
        </div>
      </div>
      
    </div>