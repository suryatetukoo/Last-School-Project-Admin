<?php 
	$id = $_GET["id"];
	$hapus = $mysqli->query("SELECT * FROM dt_buku WHERE id_buku ='$_GET[id]'");
	// memilih gambar untuk dihapus
	$namaGambar = mysqli_fetch_array($hapus);
	// nama field gambar
	$lokasi = $namaGambar["cover"];
	// alamat tempat gambar
	$hapusGambar = "images/buku/$lokasi";
	// untuk menghapus gambar dari folder
	unlink($hapusGambar);
	$mysqli->query("DELETE FROM dt_buku WHERE id_buku ='$_GET[id]'");
	header('location:?page=buku');

 ?>
 