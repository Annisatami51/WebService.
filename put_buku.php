<?php
	//include koneksi ke database
	include "conn.php";

	//echo "update buku";

	//menangkap variabel parameter get
	$id =$_GET['id'];
	//echo $id;

	//bagian ini yang akan/ingin di ubah
	$nama_buku = $_POST['nama'];
	


	$sql = "UPDATE `buku` SET `nama_buku` = '".$nama_buku."'
	WHERE `buku`.`id_buku` = ".$id.";";
	//echo $sql;

		//running Query
		$query = mysqli_query($conn, $sql);
		if($query){
			$msg = "Update data buku berhasil";
		}else{
			$msg = "Update data buku gagal";
		}

		$response = array(
		'status' =>'Ok',
		'msg'=>$msg
		);

		echo json_encode($response);
?>
