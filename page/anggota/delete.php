<?php 
	$id = $_GET["id"];
	$mysqli->query("DELETE FROM dt_user WHERE id_user ='$_GET[id]'");
	header('location:?page=anggota');
	
 ?>
 