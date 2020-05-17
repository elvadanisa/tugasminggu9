<?php
	$conn = mysqli_connect('localhost','root','','domain_ku');
	if(!$conn){
		echo 'gagal terhubung ke database';
	}
?>