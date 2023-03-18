<?php 
	$id					= $_POST["id"];
	$judul				= $_POST["judul"];
	$pengarang 			= $_POST["pengarang"];
	$penerbit			= $_POST["penerbit"];
	$tahun_terbit		= $_POST["tahun_terbit"];
	$jumlah_buku		= $_POST["jumlah_buku"];
	$tanggal_masuk 		= $_POST['tanggal_masuk'];
	$status_buku 		= $_POST['status_buku'];
	$gambar 			= $_FILES["cover"]["name"];
	$sinopsis			= $_POST['sinopsis'];
	// jika gambar tidak diganti
	if(empty($gambar)) {
		$mysqli->query("UPDATE dt_buku SET 
						judul_buku	='$judul',
						pengarang	='$pengarang',
						penerbit	='$penerbit',
						tahun_terbit='$tahun_terbit',
						jumlah_buku ='$jumlah_buku',
						tanggal_masuk='$tanggal_masuk', 
						status_buku='$status_buku',
						sinopsis='$sinopsis'
						WHERE id_buku 	=$id
						");

	}else{
		$hapus = $mysqli->query("SELECT * FROM dt_buku WHERE id_buku =$id");
		// menghapus gambar lama
		$namaGambar = mysqli_fetch_array($hapus);
		// nama field gambar
		$lokasi = $namaGambar["cover"];
		// alamat tempat gambar
		$hapusGambar = "images/buku/$lokasi";
		// untuk menghapus gambar dari folder
		unlink($hapusGambar);
		move_uploaded_file($_FILES['cover']['tmp_name'], 'images/buku/'.$gambar);

		$mysqli->query("UPDATE dt_buku SET 
						judul_buku	='$judul',
						pengarang	='$pengarang',
						penerbit	='$penerbit',
						tahun_terbit='$tahun_terbit',
						jumlah_buku ='$jumlah_buku',
						tanggal_masuk='$tanggal_masuk', 
						status_buku='$status_buku', 
						cover 		='$gambar',
						sinopsis	='$sinopsis' 
						WHERE id_buku 	=$id
						");
	}
	header('location:?page=buku');
 ?> 