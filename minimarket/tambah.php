<?php

	if($_SERVER['REQUEST_METHOD']=='POST'){
		
		//Mendapatkan Nilai Variable
		$kode_minimarket = $_POST['kode_minimarket'];
		$nama_minimarket = $_POST['nama_minimarket'];
		$alamat_minimarket = $_POST['alamat_minimarket'];
		
		//Pembuatan Syntax SQL
		$sql = "INSERT INTO tb_minimarket (kode_minimarket,nama_minimarket,alamat_minimarket) VALUES ('$kode_minimarket','$nama_minimarket','$alamat_minimarket')";
		
		//Import File Koneksi database
		require_once('koneksi.php');
		
		//Eksekusi Query database
		if(mysqli_query($con,$sql)){
			echo 'Berhasil Menambahkan Data Minimarket';
		}else{
			echo 'Gagal Menambahkan Data Minimarket';
		}
		
		mysqli_close($con);
	}
?>