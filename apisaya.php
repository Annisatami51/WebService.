<?php
	//koneksi ke database mysql
	include "conn.php";

	//membuat query/ sql untuk mengambil seluruh data buku
	$sql ="SELECT * FROM buku";
	$query = mysqli_query($conn, $sql);
	while($data = mysqli_fetch_array($query)){
		//echo $data ["id_buku"]." ";

		$item[] = array(
			'id_buku'  =>$data["id_buku"],
			'nama_buku'=>$data["nama_buku"],
			'nama_pengarang'=>$data["pengarang"],
			'harga_buku'=>$data["harga"]
		);
	}

	$response = array(
		'status'=>'OK',
		'data'=>$item
	);

	echo json_encode($response);
?>