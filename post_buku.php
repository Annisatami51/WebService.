<?php
	//koneksi ke database mysql
	include "conn.php";

	//mendapatkan variabel post
	$id_buku = isset($_POST["id"]) ? $_POST["id"] : "";
	//echo $id_buku;
	$nama_buku = isset($_POST["nama"]) ? $_POST["nama"] : "";
	//echo $nama_buku;
	$harga = isset($_POST["harga"]) ? $_POST["harga"] : "";
	//echo $harga;
	$pengarang = isset($_POST["pengarang"]) ? $_POST["pengarang"] : "";
	//echo $nama_pengarang;

	//Query menambahkan data
	$sql = "INSERT INTO `buku` (`id_buku`, `nama_buku`, `pengarang`, `harga`) VALUES ('".$id_buku."', '".$nama_buku."', '".$pengarang."', '".$harga."');";
	//echo $sql;

	//running Query
	$query = mysqli_query($conn, $sql);
	if($query){
		$msg = "Simpan data buku berhasil";
	}else{
		$msg = "Simpan data buku gagal";
	}

	//echo $msg;
	//echo 'test';
	$response = array(
		'status' =>'Ok',
		'msg'=>$msg
	);

	echo json_encode($response);
?>