<a href="?page=anggota&aksi=tambah" class="btn btn-primary" style="margin-bottom: 10px; " ><i class="fa fa-plus" style="margin-right: 7px;"> </i>Tambah Data</a>

<div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                             Tabel Anggota
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>No</th>
											<th>Username</th>
											<th>Nama</th>
											<th>Nomor Telepon</th>
											<th>Password</th>
											<th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    	
                                    	<?php
										 	$mahasiswa = $mysqli->query("SELECT * FROM dt_user WHERE role = 'Member' ");
										 	$no = 0;
										 	while( $m = $mahasiswa->fetch_assoc()){
											$no++;
										 ?>

                                    	<tr>
                                    		<th scope="row"><?= $no; ?></th>
										  	<td><?= $m["username"]; ?></td>
										  	<td><?= $m["nama"]; ?></td>
										  	<td><?= $m["no_telp"]; ?></td>
										  	<td><?= $m["password"]; ?></td>
										  	<td>
										  		<a href="?page=anggota&aksi=edit&id=<?php echo $m['id_user'];?>" class="btn btn-info">Edit <i class="fa fa-edit text-white"></i></a></button>
												<a href="?page=anggota&aksi=delete&id=<?php echo $m['id_user']; ?>" class="btn btn-danger" onclick="return confirm('Anda yakin mau menghapus data ini?');">Hapus <i class="fa fa-trash text-white"></i></a>
										  	</td>
										  <?php } ?>
                                    	</tr>
                                    </tbody>
                                </table>
                            </div>
                            <a href="./laporan/laporan_anggota_exel.php" class="btn btn-default" target="blank" style="margin-top: 10px; "><i class="fa fa-print" style="margin-right: 7px;"> </i>ExportToExcel</a>
