<?php 

// nama host, Username, password dan nama database
$koneksi = mysqli_connect("localhost","u1604045_admin","*Arinda&Budi123","u1604045_invit");

// Periksa Koneksi
if (mysqli_connect_errno()){
	echo "Koneksi database gagal : " . mysqli_connect_error();
}

?>