<?php
	session_start();
	session_destroy();
	session_unset();
	session_start();
	$_SESSION['status'] = 'nologin';
	$_SESSION['status_login'] = '';
	$_SESSION['status_register'] = '';
	$_SESSION['transaksi_aman'] = '';
	$session = "";
	echo "<script>
			history.back();
		</script>";
?>