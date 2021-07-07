<?php

//Variabel database
    $con = mysqli_connect("localhost","root","","database"); //localhost,username,password,nama database
	if(mysqli_connect_errno()){ // mengecek apakah koneksi database error
		echo 'Gagal melakukan koneksi ke Database : '.mysqli_connect_error(); // pesan ketika koneksi database error
	}
?>