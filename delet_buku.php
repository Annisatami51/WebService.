<?php
	include "conn.php";
	//menangkap variabel parameter get
	$id =$_GET['id'];
	//echo $id;

	$sql = " DELETE FROM buku WHERE `id_buku` = ".$id.";";
	//echo $sql;
	//running Query
	$query = mysqli_query($conn, $sql);
	if($query){
		$msg = "Delet data buku berhasil";
	}else{
		$msg = "Delet data buku gagal";
	}

	//echo $msg;
	//echo 'test';
	$response = array(
		'status' =>'Ok',
		'msg'=>$msg
	);

	echo json_encode($response);
?>