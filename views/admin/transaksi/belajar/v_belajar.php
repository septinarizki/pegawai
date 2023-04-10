<div class="main-panel">
			<div class="content">
				<div class="page-inner">
					<div class="page-header">
						<h4 class="page-title">Data Usul Belajar</h4>
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
								<a href="#">Usul Belajar</a>
							</li>
						</ul>
					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="card">
								<div class="card-header">
									<div class="d-flex align-items-center">
										<h4 class="card-title">Data Usul Belajar</h4>
									</div>
								</div>
								<div class="card-body">
									<div class="table-responsive">
										<table id="add-row" class="display table table-striped table-hover" >
											<thead>
												<tr>
													<th>No</th>
													<th>NIP</th>
													<th>Nama Pegawai</th>
													<th>Jenis Pebgajuan</th>
													<th>Tgl Pengajuan</th>
													<th>Status</th>
													<th>Action</th>
												</tr>
											</thead>
											
											<tbody>
												<?php
													$no = 1;
													foreach($data_usulbelajar as $row) {
												?>
												<tr>
													<td><?php echo $no++ ?></td>
													<td><?php echo $row->nip ?></td>
													<td><?php echo $row->nama_pegawai ?></td>
													<td><?php echo $row->jenis_pengajuan ?></td>
													<td><?php echo date('d F Y', strtotime($row->tgl_pengajuan)) ?></td>
													<td>
														<?php if($row->status == 'Menunggu') { ?>
															<div class="badge badge-warning">Menunggu</div>
														<?php }elseif($row->status == 'Ditolak') { ?>
															<div class="badge badge-danger">Ditolak</div>
														<?php }else { ?>
															<div class="badge badge-success">Diterima</div>
														<?php } ?>
													</td>
													<td>
														<?php if($row->status == 'Menunggu') { ?>
															<a style="color: white;" href="#modalDetailUsulBelajar<?php echo $row->id ?>" data-toggle="modal" class="btn btn-success btn-xs"><i class="fa fa-eye"></i> Detail</a>

															<a style="color: white;" href="#modalTolakUsulBelajar<?php echo $row->id ?>" data-toggle="modal" class="btn btn-danger btn-xs"><i class="fa fa-thumbs-down"></i> Tolak</a>

															<a style="color: white;" href="#modalTerimaUsulBelajar<?php echo $row->id ?>" data-toggle="modal" class="btn btn-primary btn-xs"><i class="fa fa-thumbs-up"></i> Terima</a>
														
														<?php }else { ?>
															
															<a style="color: white;" href="#modalDetailUsulBelajar<?php echo $row->id ?>" data-toggle="modal" class="btn btn-success btn-xs"><i class="fa fa-eye"></i> Detail</a>

														<?php } ?>
													</td>
												</tr>
											<?php } ?>
											</tbody>
										</table>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

									<?php 
										foreach($data_usulbelajar as $d) {
									?>

									<div class="modal fade" id="modalTolakUsulBelajar<?php echo $d->id ?>" tabindex="-1" role="dialog" aria-hidden="true">
										<div class="modal-dialog" role="document">
											<div class="modal-content">
												<div class="modal-header no-bd">
													<h5 class="modal-title">
														<span class="fw-mediumbold">
														Tolak</span> 
														<span class="fw-light">
															Usul Belajar
														</span>
													</h5>
													<button type="button" class="close" data-dismiss="modal" aria-label="Close">
														<span aria-hidden="true">&times;</span>
													</button>
												</div>
												<form method="POST" enctype="multipart/form-data" action="<?php echo site_url('UsulBelajar/tolak_usulbelajar') ?>">
												<div class="modal-body">
													<input type="hidden" name="id" value="<?php echo $d->id ?>">
													<input type="hidden" name="status" value="Ditolak">
													<h4>Apakah Anda Ingin Menolak Belajar Ini ?</h4>
												</div>
												<div class="modal-footer no-bd">
													<button type="submit" class="btn btn-danger"><i class="fa fa-thumbs-down"></i> Tolak</button>
													<button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-undo"></i> Close</button>
												</div>
												</form>
											</div>
										</div>
									</div>

									<?php } ?>

									<?php 
										foreach($data_usulbelajar as $t) {
									?>

									<div class="modal fade" id="modalTerimaUsulBelajar<?php echo $t->id ?>" tabindex="-1" role="dialog" aria-hidden="true">
										<div class="modal-dialog" role="document">
											<div class="modal-content">
												<div class="modal-header no-bd">
													<h5 class="modal-title">
														<span class="fw-mediumbold">
														Terima</span> 
														<span class="fw-light">
															Usul Belajar
														</span>
													</h5>
													<button type="button" class="close" data-dismiss="modal" aria-label="Close">
														<span aria-hidden="true">&times;</span>
													</button>
												</div>
												<form method="POST" enctype="multipart/form-data" action="<?php echo site_url('UsulBelajar/terima_usulbelajar') ?>">
												<div class="modal-body">
													<input type="hidden" name="id" value="<?php echo $t->id ?>">
													<input type="hidden" name="status" value="Diterima">
													<h4>Apakah Anda Ingin Menerima Cuti Ini ?</h4>
												</div>
												<div class="modal-footer no-bd">
													<button type="submit" class="btn btn-primary"><i class="fa fa-thumbs-up"></i> Terima</button>
													<button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-undo"></i> Close</button>
												</div>
												</form>
											</div>
										</div>
									</div>

									<?php } ?>

									<?php 
										foreach($data_usulbelajar as $c) {
									?>

									<div class="modal fade" id="modalDetailUsulBelajar<?php echo $c->id ?>" tabindex="-1" role="dialog" aria-hidden="true">
										<div class="modal-dialog" role="document">
											<div class="modal-content">
												<div class="modal-header no-bd">
													<h5 class="modal-title">
														<span class="fw-mediumbold">
														Detail</span> 
														<span class="fw-light">
															Usul Belajar
														</span>
													</h5>
													<button type="button" class="close" data-dismiss="modal" aria-label="Close">
														<span aria-hidden="true">&times;</span>
													</button>
												</div>
												<form method="POST" enctype="multipart/form-data" action="">
												<div class="modal-body">
													<div class="table-responsive">
														<table class="table">
															<tr>
																<td>NIP</td>
																<td>:</td>
																<td><?php echo $c->nip ?></td>
															</tr>

															<tr>
																<td>Nama Pegawai</td>
																<td>:</td>
																<td><?php echo $c->nama_pegawai ?></td>
															</tr>

															<tr>
																<td>Tgl Pengajuan</td>
																<td>:</td>
																<td><?php echo date('d F Y', strtotime($c->tgl_pengajuan)) ?></td>
															</tr>

															<tr>
																<td>Status</td>
																<td>:</td>
																<td>
																	<?php if($c->status == 'Menunggu') { ?>
																		<div class="badge badge-warning">Menunggu</div>
																	<?php }elseif($c->status == 'Ditolak') { ?>
																		<div class="badge badge-danger">Ditolak</div>
																	<?php }else { ?>
																		<div class="badge badge-success">Diterima</div>
																	<?php } ?>
																</td>
															</tr>
														</table>

														<br/>
														
														<table class="table table-bordered">
															<tr>
																<th>Nama Universitas</th>
																<th>Jurusan</th>
																<th>Akreditasi</th>
																<?php if($this->session->userdata('LEVEL') == 'admin') { ?>
																	<th>Dokumen</th>
																<?php } ?>
															</tr>
															<tr>
																<td><?php echo $c->nama_kampus ?></td>
																<td><?php echo $c->jurusan_kampus ?></td>
																<td><?php echo $c->akreditasi_kampus ?></td>
																
																<?php if($this->session->userdata('LEVEL') == 'admin') { ?>
																	<td>
																		<a href="<?php echo site_url('UsulBelajar/downloadDokumen/'.$c->id) ?>" class="btn btn-sm btn-secondary"> Download Dokumen</a>
																	</td>
																<?php } ?>
															</tr>
														</table>

													</div>
												</div>
												<div class="modal-footer no-bd">
													<button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-undo"></i> Close</button>
												</div>
												</form>
											</div>
										</div>
									</div>

									<?php } ?>