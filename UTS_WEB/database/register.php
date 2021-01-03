<?php
	include 'koneksi.php';
	$name = $_POST['name'];
	$username = $_POST['username'];
	$password = $_POST['password'];
	$email = $_POST['email'];
	$query = "INSERT INTO `data_pengunjung`(`nama`, `username`, `password`, `email`) VALUES ('$name','$username','$password','$email')";
	session_start();
	$queryselect = "SELECT * FROM `data_pengunjung` where username='$username'";
	$select = mysqli_query($koneksi,$queryselect);
	$cek = mysqli_num_rows($select);
	if ($cek > 0 ){
		$_SESSION['status_register'] = 'gagal';
			echo "<script>
			history.back();
			</script>";
	}else{
		$_SESSION['status_register'] = 'sukses';
			mysqli_query($koneksi,$query);
			echo "<script>
			history.back();
			</script>";

	}
?>