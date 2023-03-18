<?php 

							$judul 				= $_POST['judul'];
							$pengarang 			= $_POST['pengarang'];
							$penerbit 			= $_POST['penerbit'];
							$tahun_terbit 		= $_POST['tahun_terbit'];
							$jumlah_buku 		= $_POST['jumlah_buku'];
							$tanggal_masuk 		= $_POST['tanggal_masuk'];
							$status_buku 		= $_POST['status_buku'];
							$gambar 			= $_FILES['cover']['name'];
							$sinopsis			= $_POST['sinopsis'];

							$mysqli->query("INSERT INTO dt_buku SET judul_buku='$judul',pengarang='$pengarang',penerbit='$penerbit',tahun_terbit='$tahun_terbit',jumlah_buku='$jumlah_buku',status_buku='$status_buku',tanggal_masuk='$tanggal_masuk',cover='$gambar',sinopsis='$sinopsis'");

							move_uploaded_file($_FILES['cover']['tmp_name'], 'images/buku/'.$gambar);
							header('location:?page=buku');
							exit;

						?>


						
