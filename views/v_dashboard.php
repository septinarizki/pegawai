<?php if($this->session->userdata('LEVEL') == 'admin') { ?>

<div class="main-panel">
      <div class="content">
        <div class="page-inner">
          <div class="page-header">
            <h4 class="page-title">Dashboard</h4>
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
                <a href="#">Dashboard</a>
              </li>
              <li class="separator">
                <i class="flaticon-right-arrow"></i>
              </li>
              <li class="nav-item">
                <a href="#">Dashboard</a>
              </li>
            </ul>
          </div>
          <div class="row">
            
            <div class="col-sm-6 col-md-4">
              <div class="card card-stats card-round">
                <div class="card-body ">
                  <div class="row align-items-center">
                    <div class="col-icon">
                      <div class="icon-big text-center icon-primary bubble-shadow-small">
                        <i class="fas fa-users"></i>
                      </div>
                    </div>
                    <div class="col col-stats ml-3 ml-sm-0">
                      <div class="numbers">
                        <p class="card-category">Data Pegawai</p>
                        <?php foreach($count_pegawai as $d) { ?>
                          <h4 class="card-title"><?php echo $d->pegawai ?></h4>
                        <?php } ?>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-sm-6 col-md-4">
              <div class="card card-stats card-round">
                <div class="card-body ">
                  <div class="row align-items-center">
                    <div class="col-icon">
                      <div class="icon-big text-center icon-primary bubble-shadow-small">
                        <i class="fas fa-briefcase"></i>
                      </div>
                    </div>
                    <div class="col col-stats ml-3 ml-sm-0">
                      <div class="numbers">
                        <p class="card-category">Data Usul Cuti</p>
                        <?php foreach($count_usulcuti as $row) { ?>
                          <h4 class="card-title"><?php echo $row->cuti ?></h4>
                        <?php } ?>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-md-4">
              <div class="card card-stats card-round">
                <div class="card-body ">
                  <div class="row align-items-center">
                    <div class="col-icon">
                      <div class="icon-big text-center icon-primary bubble-shadow-small">
                        <i class="fas fa-book"></i>
                      </div>
                    </div>
                    <div class="col col-stats ml-3 ml-sm-0">
                      <div class="numbers">
                        <p class="card-category">Data Ijin Belajar</p>
                        <?php foreach($count_usulbelajar as $g) { ?>
                          <h4 class="card-title"><?php echo $g->belajar ?></h4>
                        <?php } ?>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        
        </div>
      </div>
      
    </div>

<?php } ?>

<?php if($this->session->userdata('LEVEL') == 'pegawai') { ?>

  <div class="main-panel">
      <div class="content">
        <div class="page-inner">
          <div class="page-header">
            <h4 class="page-title">Data Pegawai</h4>
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
                <a href="#">Pegawai</a>
              </li>
            </ul>
          </div>
          <div class="row">
            <div class="col-md-6">
              <div class="card">
                <div class="card-header">
                  <div class="card-title">Data Pegawai</div>
                </div>
                <form method="POST" action="#" enctype="multipart/form-data">
                <div class="card-body">
                
                <?php foreach($data_pegawai as $d) { ?>
                  <?php if($d->id == $this->session->userdata('ID')) { ?>

                  <input type="hidden" value="<?php echo $d->id ?>" name="id" required="">

                  <div class="form-group">
                    <label>NIP</label>
                    <input type="number" readonly="" value="<?php echo $d->nip ?>" class="form-control" name="nip" placeholder="NIP ..." required="">
                  </div>

                  <div class="form-group">
                    <label>Nama Pegawai</label>
                    <input type="text" readonly="" value="<?php echo $d->nama_pegawai ?>" class="form-control" name="nama_pegawai" placeholder="Nama Pegawai ..." required="">
                  </div>

                  <div class="form-group">
                    <label>Tgl Lahir</label>
                    <input type="date" readonly="" class="form-control" value="<?php echo $d->tgl_lahir ?>" name="tgl_lahir" required="">
                  </div>

                </div>
              </div>  
            </div>
            <div class="col-md-6">
              <div class="card">
                <div class="card-body">

                  <div class="form-group">
                    <label>Jabatan</label>
                    <input type="text" readonly="" class="form-control" value="<?php echo $d->jabatan ?>" name="jabatan" placeholder="Jabatan ..." required="">
                  </div>
                  
                  <div class="form-group">
                    <label>No Handphone</label>
                    <input type="number" readonly="" class="form-control" value="<?php echo $d->nohp ?>" name="nohp" placeholder="No Handphone ..." required="">
                  </div>

                  <div class="form-group">
                    <img src="<?php echo base_url('assets/fotopegawai/') ?><?php echo $d->foto ?>" width="150" height="150">
                  </div>

                  <input type="hidden" name="level" value="<?php echo $d->level ?>" required="">

                <?php } } ?>

                </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
      
    </div>

<?php } ?>

