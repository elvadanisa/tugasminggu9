<?php
	session_start();
	if(!isset($_SESSION['nama'])){
		header("location:masuk.php");
	}else{
?>
<!DOCTYPE html>
<html>
<head>
	<title>Halaman Beranda</title>
	<link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
	<header>
		<ul>
			<a href="index.php"><li>Beranda</li><a/>
			<a href="profil.php"><li>Profil</li><a/>
			<a href="keluar.php"><li>Keluar</li><a/>
		</ul>
	</header>

	<section>
		<center>
			<font style="font-size:40px;">Selamat Datang <?php echo $_SESSION['nama'] ?> 
			di Halaman Beranda</font>
		</center>
	</section>

	<footer>
		Copyright &copy; 2020 elvadanisa. All Rights Reserved.
	</footer>
</body>
</html>
<?php } ?>