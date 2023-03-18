<div class="panel panel-default">
                        <div class="panel-heading">
                            Tambah Data Anggota 
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-12">
									<form name="form_mahasiswa" action="?page=anggota&aksi=create" method="post" enctype="multipart/form-data">
										
										<div class="form-group">
											<label for="username">Username</label>
											<input type="text" class="form-control" id="username" placeholder="Input Username" name="username" required>
										</div>

										<div class="form-group">
											<label for="Nama">Nama</label>
											<input type="text" class="form-control" id="nama" placeholder="Input Nama" name="nama" required>
										</div>

										<div class="form-group">
											<label for="no_telp">No Telepon</label>
											<input type="number" class="form-control" id="no_telp" placeholder="Input Nomor Telepon" name="no_telp" required>
										</div>

										<div class="form-group">
											<label for="password">Password</label>
											<input type="password" class="form-control" id="password" name="password" required>
										</div>

										<div class="form-group">
											<button type="reset" class="btn btn-danger">Reset</button>
											<button type="submit" class="btn btn-primary">Simpan</button>
										</div>

									</form>