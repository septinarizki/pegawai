<?php if($this->session->userdata('LEVEL') == 'admin') { ?>

<div class="sidebar">      
      <div class="sidebar-wrapper scrollbar-inner">
        <div class="sidebar-content">
          <div class="user">
                  <center><img src="<?php echo base_url('assets/fotopegawai/user_default.png') ?>" width="80" height="80" alt="..." class="rounded-circle"></center>
              <div class="clearfix"></div>
          </div>
          
          <?php foreach($data_user as $row) { ?>
            <?php if($row->id == $this->session->userdata('ID')) { ?>
            <h4><center><?php echo $row->username ?></center></h4>
          <?php } } ?>
          
          <ul class="nav">
            <li class="nav-item <?php if(isset($active_dashboard)){echo $active_dashboard ;}?>">
              <a href="<?php echo site_url('Dashboard')?>">
                <i class="fas fa-home"></i>
                <p>Dashboard</p>
              </a>
            </li>
            <li class="nav-section">
              <span class="sidebar-mini-icon">
                <i class="fa fa-ellipsis-h"></i>
              </span>
              <h4 class="text-section">Components</h4>
            </li>
            
            <li class="nav-item <?php if(isset($active_pegawai)){echo $active_pegawai ;}?>">
              <a href="<?php echo site_url('Pegawai')?>">
                <i class="fas fa-users"></i>
                <p>Pegawai</p>
              </a>
            </li>

            <li class="nav-item <?php if(isset($active_usulcuti)){echo $active_usulcuti ;}?>">
              <a href="<?php echo site_url('UsulCuti')?>">
                <i class="fas fa-briefcase"></i>
                <p>Usul Cuti</p>
              </a>
            </li>

            <li class="nav-item <?php if(isset($active_usulbelajar)){echo $active_usulbelajar ;}?>">
              <a href="<?php echo site_url('UsulBelajar')?>">
                <i class="fas fa-book"></i>
                <p>Usul Ijin Belajar</p>
              </a>
            </li>

            <li class="nav-item <?php if(isset($active_profile)){echo $active_profile ;}?>">
              <a href="<?php echo site_url('Pegawai/profile')?>">
                <i class="fas fa-user"></i>
                <p>Profile</p>
              </a>
            </li>
            
            <li class="nav-item">
              <a href="#modalLogoutAdmin" data-toggle="modal">
                <i class="fas fa-lock"></i>
                <p>Logout</p>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>

    <?php } ?>

<?php if($this->session->userdata('LEVEL') == 'pegawai') { ?>

<div class="sidebar">      
      <div class="sidebar-wrapper scrollbar-inner">
        <div class="sidebar-content">
          <div class="user">
            <div class="user">
                <?php foreach($data_pegawai as $k) { ?>
                  <?php if($k->id == $this->session->userdata('ID')) { ?>  
                    
                    <center><img src="<?php echo base_url('assets/fotopegawai/') ?><?php echo $k->foto ?>" width="80" height="80" alt="..." class="rounded-circle"></center>
                
                <?php } } ?>
              <div class="clearfix"></div>
            </div>
            <h4><center><?php echo $this->session->userdata('NAMA') ?></center></h4>
          </div>
          <ul class="nav">
            <li class="nav-item <?php if(isset($active_dashboardpegawai)){echo $active_dashboardpegawai ;}?>">
              <a href="<?php echo site_url('Dashboard/pegawai')?>">
                <i class="fas fa-home"></i>
                <p>Dashboard</p>
              </a>
            </li>
            <li class="nav-section">
              <span class="sidebar-mini-icon">
                <i class="fa fa-ellipsis-h"></i>
              </span>
              <h4 class="text-section">Components</h4>
            </li>

            <li class="nav-item <?php if(isset($active_usulcutipegawai)){echo $active_usulcutipegawai ;}?>">
              <a href="<?php echo site_url('UsulCuti/pegawai')?>">
                <i class="fas fa-briefcase"></i>
                <p>Usul Cuti</p>
              </a>
            </li>

            <li class="nav-item <?php if(isset($active_usulbelajapegawai)){echo $active_usulbelajarpegawai ;}?>">
              <a href="<?php echo site_url('UsulBelajar/pegawai')?>">
                <i class="fas fa-book"></i>
                <p>Usul Ijin Belajar</p>
              </a>
            </li>
            
            <li class="nav-item">
              <a href="#modalLogoutPegawai" data-toggle="modal">
                <i class="fas fa-lock"></i>
                <p>Logout</p>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>

    <?php } ?>

      <div class="modal fade" id="modalLogoutAdmin" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header no-bd">
                          <h5 class="modal-title">
                            <span class="fw-mediumbold">
                            Logout</span> 
                            <span class="fw-light">
                              Sistem
                            </span>
                          </h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <form method="POST" enctype="multipart/form-data" action="<?php echo site_url('Login/logout')?>">
                        <div class="modal-body">
                          <h4>Apakah Anda Ingin Keluar Dari Sistem Ini ?</h4>
                        </div>
                        <div class="modal-footer no-bd">
                          <button type="submit" class="btn btn-primary"><i class="fa fa-lock"></i> Logout</button>
                          <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-undo"></i> Close</button>
                        </div>
                        </form>
                      </div>
                    </div>
                  </div>

                  <div class="modal fade" id="modalLogoutPegawai" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header no-bd">
                          <h5 class="modal-title">
                            <span class="fw-mediumbold">
                            Logout</span> 
                            <span class="fw-light">
                              Sistem
                            </span>
                          </h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <form method="POST" enctype="multipart/form-data" action="<?php echo site_url('Login/logoutPegawai')?>">
                        <div class="modal-body">
                          <h4>Apakah Anda Ingin Keluar Dari Sistem Ini ?</h4>
                        </div>
                        <div class="modal-footer no-bd">
                          <button type="submit" class="btn btn-primary"><i class="fa fa-lock"></i> Logout</button>
                          <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-undo"></i> Close</button>
                        </div>
                        </form>
                      </div>
                    </div>
                  </div>