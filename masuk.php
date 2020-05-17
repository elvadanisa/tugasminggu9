<?php
	session_start();
	if(isset($_SESSION['nama'])){
		echo "Anda Belum Keluar! Silahkan <a href='index.php'>Keluar</a> Dulu!";
	}else{
?>

<!DOCTYPE html>
<html>
<head>
	<title>Halaman Masuk</title>
	<link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
		<div class="box-login">
			<font style="font-size: 26px;color: #fff;">Silahkan Masuk</font>
			<form action="" method="post">
				<input type="text" name="email" placeholder="Masukkan Email Anda"/><br>
				<input type="password" name="password" placeholder="Masukkan Password Anda"/><br>
				<input type="submit" name="masuk" value="Masuk"/><br>
			</form>
			<?php
				include "koneksi.php";
				if (isset($_POST['masuk'])){
						$cek = mysqli_query($conn, "SELECT * FROM tb_user WHERE
						email = '".$_POST['email']."' AND password ='".$_POST['password']."'");
						$hasil = mysqli_fetch_array($cek);
						$count = mysqli_num_rows($cek);
						$nama_user = $hasil ['nama'];
						if($count > 0){
							session_start();
							$_SESSION['nama'] = $nama_user;
							header("location:index.php");
					}else{
						echo "Gagal Masuk";
				}
			}
			?>
		</div>

</body>
</html>
<?php } ?>