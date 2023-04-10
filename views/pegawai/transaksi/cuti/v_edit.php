<div class="main-panel">
			<div class="content">
				<div class="page-inner">
					<div class="page-header">
						<h4 class="page-title">Edit Usul Cuti</h4>
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
								<a href="#">Edit</a>
							</li>
							<li class="separator">
								<i class="flaticon-right-arrow"></i>
							</li>
							<li class="nav-item">
								<a href="#">Usul Cuti</a>
							</li>
						</ul>
					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="card">
								<div class="card-header">
									<div class="card-title">Edit Usul Cuti</div>
								</div>
								<form method="POST" action="<?php echo site_url('UsulCuti/edit_usulcuti') ?>" enctype="multipart/form-data">
								<div class="card-body">

									<?php foreach($data_usulcuti as $d) { ?>

									<input type="hidden" value="<?php echo $d->id ?>" name="id" required="">
									
									<div class="form-group">
										<label>Jenis Cuti</label>
										<input value="<?php echo $d->jenis_cuti ?>" type="text" class="form-control" name="jenis_cuti" placeholder="Jenis Cuti ..." required="">
									</div>

									<div class="form-group">
										<label>Tgl Mulai</label>
										<input type="date" value="<?php echo $d->tgl_mulai ?>" class="form-control" name="tgl_mulai" required="">
									</div>

									<div class="form-group">
										<label>Tgl Selesai</label>
										<input type="date" value="<?php echo $d->tgl_selesai ?>" class="form-control" name="tgl_selesai" required="">
									</div>

									<div class="form-group">
										<label>Nama Pasien</label>
											<div class="input-group mb-3">
												<input type="number" value="<?php echo $d->jml_hari ?>" name="jml_hari" required="" class="form-control" placeholder="Jumlah Hari ...">
													<div class="input-group-append">
														<button class="btn btn-primary" id="basic-addon2"><i class="fa fa-calendar"></i> Hari</button>
													</div>
											</div>
									</div>

										<input type="hidden" name="id_pegawai" value="<?php echo $this->session->userdata('ID') ?>" required="">
										<input type="hidden" name="status" value="Menunggu" required="">

									<?php } ?>
								</div>
							</div>	
						</div>
						
							<div class="card-action">
								<button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Save Changes</button>
								<a href="<?php echo site_url('UsulCuti/pegawai') ?>" style="color: white;" class="btn btn-danger"><i class="fa fa-undo"></i> Cancel</a>
							</div>
						</form>
					</div>
				</div>
			</div>
			
		</div>