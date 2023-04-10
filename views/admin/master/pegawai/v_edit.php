<div class="main-panel">
			<div class="content">
				<div class="page-inner">
					<div class="page-header">
						<h4 class="page-title">Edit Data Pegawai</h4>
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
								<a href="#">Edit Data</a>
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
									<div class="card-title">Edit Data Pegawai</div>
								</div>
								<form method="POST" action="<?php echo site_url('Pegawai/edit_pegawai') ?>" enctype="multipart/form-data">
								<div class="card-body">
								
								<?php foreach($data_pegawai as $d) { ?>

									<input type="hidden" value="<?php echo $d->id ?>" name="id" required="">

									<div class="form-group">
										<label>NIP</label>
										<input type="number" value="<?php echo $d->nip ?>" class="form-control" name="nip" placeholder="NIP ..." required="">
									</div>

									<div class="form-group">
										<label>Nama Pegawai</label>
										<input type="text" value="<?php echo $d->nama_pegawai ?>" class="form-control" name="nama_pegawai" placeholder="Nama Pegawai ..." required="">
									</div>

									<div class="form-group">
										<label>Tgl Lahir</label>
										<input type="date" class="form-control" value="<?php echo $d->tgl_lahir ?>" name="tgl_lahir" required="">
									</div>

									<div class="form-group">
										<label>Jabatan</label>
										<input type="text" class="form-control" value="<?php echo $d->jabatan ?>" name="jabatan" placeholder="Jabatan ..." required="">
									</div>

								</div>
							</div>	
						</div>
						<div class="col-md-6">
							<div class="card">
								<div class="card-body">

									<div class="form-group">
										<label>No Handphone</label>
										<input type="number" class="form-control" value="<?php echo $d->nohp ?>" name="nohp" placeholder="No Handphone ..." required="">
									</div>
									
									<div class="form-group">
										<label>Password</label>
										<input type="password" class="form-control" name="password" placeholder="Password ..." required="">
									</div>

									<div class="form-group">
										<label>Upload Gambar</label>
										<input type="file" name="foto" class="form-control">
										<small>Upload Gambar dengan Max File 5MB</small>
									</div>

									<input type="hidden" name="level" value="<?php echo $d->level ?>" required="">

								<?php } ?>

								</div>
								<div class="card-action">
									<button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Save Changes</button>
									<a href="<?php echo site_url('Pegawai') ?>" style="color: white;" class="btn btn-danger"><i class="fa fa-undo"></i> Cancel</a>
								</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
			
		</div>