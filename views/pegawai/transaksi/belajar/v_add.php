<div class="main-panel">
			<div class="content">
				<div class="page-inner">
					<div class="page-header">
						<h4 class="page-title">Create Usul Belajar</h4>
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
								<a href="#">Create</a>
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
									<div class="card-title">Create Usul Belajar</div>
								</div>
								<form method="POST" action="<?php echo site_url('UsulBelajar/tambah_usulbelajar') ?>" enctype="multipart/form-data">
								<div class="card-body">
								
									<div class="form-group">
										<label>Nama Universitas</label>
										<input type="text" placeholder="Nama Universitas ..." class="form-control" name="nama_kampus" required="">
									</div>

									<div class="form-group">
										<label>Jurusan Universitas</label>
										<input type="text" placeholder="Jurusan Universitas ..." class="form-control" name="jurusan_kampus" required="">
									</div>

									<div class="form-group">
										<label>Akreditasi Universitas</label>
										<input type="text" placeholder="Akreditasi Universitas ..." class="form-control" name="akreditasi_kampus" required="">
									</div>

								</div>
							</div>	
						</div>
						<div class="col-md-6">
							<div class="card">
								<div class="card-body">

									<div class="form-group">
										<label>Jenis Pengajuan</label>
										<input type="text" class="form-control" name="jenis_pengajuan" placeholder="Jenis Pengajuan ..." required="">
									</div>

									<div class="form-group">
										<label>Tgl Pengajuan</label>
										<input type="date" class="form-control" name="tgl_pengajuan" required="">
									</div>

									<div class="form-group">
										<label>Upload Persetujuan Atasan</label>
										<input type="file" name="dokumen_persetujuan" class="form-control">
										<small>Upload PDF dengan Max File 5MB</small>
									</div>

									<input type="hidden" name="id_pegawai" value="<?php echo $this->session->userdata('ID') ?>" required="">
									<input type="hidden" name="status" value="Menunggu" required="">

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