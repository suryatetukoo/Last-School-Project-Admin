<?php
		$username 		= $_POST['username'];
		$nama 		= $_POST['nama'];
		$no_telp 	= $_POST['no_telp'];
		$password 	= $_POST['password'];
		$mysqli->query("INSERT INTO dt_user SET username='$username',nama='$nama',no_telp='$no_telp',password='$password',role='Member'");
		header('location:?page=anggota');
		exit;
?>
