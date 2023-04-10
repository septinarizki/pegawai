<div class="main-panel">
			<div class="content">
				<div class="page-inner">
					<div class="page-header">
						<h4 class="page-title">Edit Usul Belajar</h4>
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
								<a href="#">Usul Belajar</a>
							</li>
						</ul>
					</div>
					<div class="row">
						<div class="col-md-6">
							<div class="card">
								<div class="card-header">
									<div class="card-title">Edit Usul Belajar</div>
								</div>
								<form method="POST" action="<?php echo site_url('UsulBelajar/edit_usulbelajar') ?>" enctype="multipart/form-data">
								<div class="card-body">
								
								<?php foreach($data_usulbelajar as $d) { ?>

									<input type="hidden" value="<?php echo $d->id ?>" name="id" required="">

									<div class="form-group">
										<label>Nama Universitas</label>
										<input value="<?php echo $d->nama_kampus ?>" type="text" placeholder="Nama Universitas ..." class="form-control" name="nama_kampus" required="">
									</div>

									<div class="form-group">
										<label>Jurusan Universitas</label>
										<input value="<?php echo $d->jurusan_kampus ?>" type="text" placeholder="Jurusan Universitas ..." class="form-control" name="jurusan_kampus" required="">
									</div>

									<div class="form-group">
										<label>Akreditasi Universitas</label>
										<input type="text" value="<?php echo $d->akreditasi_kampus ?>" placeholder="Akreditasi Universitas ..." class="form-control" name="akreditasi_kampus" required="">
									</div>

								</div>
							</div>	
						</div>
						<div class="col-md-6">
							<div class="card">
								<div class="card-body">

									<div class="form-group">
										<label>Jenis Pengajuan</label>
										<input type="text" value="<?php echo $d->jenis_pengajuan ?>" class="form-control" name="jenis_pengajuan" placeholder="Jenis Pengajuan ..." required="">
									</div>

									<div class="form-group">
										<label>Tgl Pengajuan</label>
										<input type="date" value="<?php echo $d->tgl_pengajuan ?>" class="form-control" name="tgl_pengajuan" required="">
									</div>

									<div class="form-group">
										<label>Upload Persetujuan Atasan</label>
										<input type="file" name="dokumen_persetujuan" class="form-control">
										<small>Upload Gambar dengan Max File 5MB</small>
									</div>

									<input type="hidden" name="id_pegawai" value="<?php echo $this->session->userdata('ID') ?>" required="">
									<input type="hidden" name="status" value="Menunggu" required="">

								<?php } ?>

								</div>
								<div class="card-action">
									<button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Save Changes</button>
									<a href="<?php echo site_url('UsulBelajar/pegawai') ?>" style="color: white;" class="btn btn-danger"><i class="fa fa-undo"></i> Cancel</a>
								</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
			
		</div>