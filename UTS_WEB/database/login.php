<?php
	include 'koneksi.php';

	$username = $_POST['username'];
	$password = $_POST['password'];

	$query = "SELECT * FROM `data_pengunjung` where username='$username' and password='$password'";

	$data_pengunjung = mysqli_query($koneksi,$query);
	$data_profile = mysqli_fetch_array($data_pengunjung);
	$cek = mysqli_num_rows($data_pengunjung);
		session_start();
	if ($cek > 0) {
		$_SESSION['username'] = $username;
		$_SESSION['name'] = $data_profile['nama'];
		$_SESSION['status'] = 'login';
		$_SESSION['status_login'] = 'sukses';
		echo "<script>
			history.back();
		</script>";
	}else{
		$_SESSION['status_login'] = 'gagal';
		$_SESSION['status'] = 'nologin';
		echo "<script>
			history.back();
		</script>";

	}
?>