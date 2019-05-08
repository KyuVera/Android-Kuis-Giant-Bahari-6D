<?php 

	//Mendapatkan Nilai Dari Variable ID Pegawai yang ingin ditampilkan
	$kode_minimarket = $_GET['kode_minimarket'];
	
	//Importing database
	require_once('koneksi.php');
	
	//Membuat SQL Query dengan pegawai yang ditentukan secara spesifik sesuai ID
	$sql = "SELECT * FROM tb_minimarket WHERE kode_minimarket=$kode_minimarket";
	
	//Mendapatkan Hasil 
	$r = mysqli_query($con,$sql);
	
	//Memasukkan Hasil Kedalam Array
	$result = array();
	$row = mysqli_fetch_array($r);
	array_push($result,array(
			"kode_minimarket"=>$row['kode_minimarket'],
			"nama_minimarket"=>$row['nama_minimarket'],
			"alamat_minimarket"=>$row['alamat_minimarket']
		));

	//Menampilkan dalam format JSON
	echo json_encode(array('result'=>$result));
	
	mysqli_close($con);
?>