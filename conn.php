<?php
	$servername = "localhost";
	$username ="root";
	$password ="";
	$databasename ="tugas1";

	$conn = mysqli_connect($servername, $username, $password, $databasename);
	if(!$conn){
		die("koneksi tidak ada");
	}
?>