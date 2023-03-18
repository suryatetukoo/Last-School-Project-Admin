<div class="panel panel-default">
                        <div class="panel-heading">
                            Tambah Data Buku
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-12">
                                    	<form name="form_buku" action="?page=buku&aksi=create" method="POST" enctype="multipart/form-data">
											<div class="form-group">
												<label for="judul">Judul</label>
												<input type="text" class="form-control" id="judul" placeholder="Masukan Judul Buku" name="judul" required>
											</div>

											<div class="form-group">
												<label for="pengarang">Pengarang</label>
												<input type="text" class="form-control" id="pengarang" placeholder="Masukan Nama Pengarang" name="pengarang" required>
											</div>

											<div class="form-group">
												<label for="penerbit">Penerbit</label>
												<input type="text" class="form-control" id="penerbit" placeholder="Masukan Nama Penerbit" name="penerbit" required>
											</div>

											<div class="form-group">
												<label for="tahun_terbit">Tahun Terbit</label>
												<select class="form-control" id="tahun_terbit" name="tahun_terbit">
													<?php

														$minTahun=1994;
														$maxTahun=2023;

														for ($i=$minTahun;$i<=$maxTahun;$i++) { 
															echo "<option value='".$i."'>".$i."</option>";
														}
													?>
												</select>
											</div>

											<div class="form-group">
												<label for="jumlah_buku">Jumlah Buku</label>
												<input type="number" class="form-control" id="jumlah_buku" placeholder="Masukan Jumlah Buku" name="jumlah_buku" required>
											</div>

											<div class="form-group">
												<label for="tanggal_masuk">Tanggal Masuk</label>
												<input type="date" class="form-control" id="tanggal_masuk" placeholder="Masukan Tanggal Masuk" name="tanggal_masuk" required>
											</div>

											<div class="form-group">
												<label for="status_buku">Status</label>
												<select class="form-control" name="status_buku" id="status_buku">
													<option value="Tersedia">Tersedia</option>
													<option value="Tidak Tersedia">Tidak Tersedia</option>
												</select>
											</div>

											<div class="form-group">
												<label for="cover">Gambar</label>
												<input type="file" class="form-control" id="cover" name="cover" required>
											</div>

											<div class="form-group">
												<label for="sinopsis">Sinopsis</label>
												<input type="text" class="form-control" id="sinopsis" name="sinopsis" required>
											</div>

											<div class="form-group">
												<button type="reset" class="btn btn-danger">Reset</button>
												<button type="submit" class="btn btn-primary">Simpan</button>
											</div>

										</form>
									</div>
								</div>
							</div>
						</div>