<?php 
	$id = $_GET["id"];
	$edit = $mysqli->query("SELECT * FROM dt_buku WHERE id_buku =$id");
	$e = mysqli_fetch_array($edit);
 ?>

 <div class="panel panel-default">
                        <div class="panel-heading">
                            Edit Data Buku
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-12">	
								 <form name="form_buku" action="?page=buku&aksi=update" method="post" enctype="multipart/form-data">
								 	<div class="form-group">
										<label for="judul">Judul</label>
										<input type="hidden" name="id" value="<?= $e["id_buku"]; ?>">
								 		<input type="text" class="form-control" id="judul" name="judul" value="<?= $e["judul_buku"]; ?>" required>
								 	</div>

								 	<div class="form-group">
								 		<label for="pengarang">Pengarang</label>
								 		<input type="text" class="form-control" id="pengarang" name="pengarang" value="<?= $e["pengarang"]; ?>" required>
								 	</div>

								 	<div class="form-group">
								 		<label for="penerbit">Penerbit</label>
								 		<input type="text" class="form-control" id="penerbit" name="penerbit" value="<?= $e["penerbit"]; ?>" required>
								 	</div>

								 	<div class="form-group">
										<label for="tahun_terbit">Tahun Terbit</label>
											<select class="form-control" id="tahun_terbit" name="tahun_terbit" value="<?= $e["tahun_terbit"]; ?>">
												<?php

													$tahun=1994;

													for ($i=$tahun;$i<=$tahun +19;$i++) { 
														echo "<option value='".$i."'>".$i."</option>";
													}
												?>
											</select>
									</div>

									<div class="form-group">
										<label for="jumlah_buku">Jumlah Buku</label>
										<input type="number" class="form-control" id="jumlah_buku" name="jumlah_buku" value="<?= $e["jumlah_buku"]; ?>" required>
									</div>

									<div class="form-group">
										<label for="tanggal_masuk">Tanggal Masuk</label>
										<input type="date" class="form-control" id="tanggal_masuk" placeholder="Masukan Tanggal Masuk" name="tanggal_masuk" value="<?= $e['tanggal_masuk'] ?>" required>
									</div>

									<div class="form-group">
										<label for="status_buku">Status</label>
										<select class="form-control" name="status_buku" id="status_buku" value="<?= $e["status_buku"]; ?>">
											<option value="Tersedia">Tersedia</option>
											<option value="Tidak Tersedia">Tidak Tersedia</option>
										</select>
									</div>

								 	<div class="form-group">
								 		<label for="cover">Gambar</label>
								 		<input type="file" class="form-control" id="cover" name="cover">
								 		<span><?= $e["cover"] ?? '' ?></span>
								 	</div>
									 
									<div class="form-group">
								 		<label for="sinopsis">Sinopsis</label>
								 		<input type="text" class="form-control" id="sinopsis" name="sinopsis">
								 		<span><?= $e["sinopsis"] ?? '' ?></span>
								 	</div>


								 	<div class="form-group">
								 		<button type="reset" class="btn btn-danger">Reset</button>
										<button type="submit" class="btn btn-primary">Perbarui</button>
								 	</div>

								 </form>