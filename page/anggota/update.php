<?php 
	$id 		= $_POST["id"];
	$username 	= $_POST["username"];
	$nama 		= $_POST["nama"];
	$no_telp 	= $_POST["no_telp"];
	$password	= $_POST["password"];
	
	$mysqli->query("UPDATE dt_user SET 
					username 	= '$username',
					nama 		= '$nama',
					no_telp 	= '$no_telp',
					password 	= '$password'
					WHERE id_user = $id
					");
	header('location:?page=anggota');
 ?>