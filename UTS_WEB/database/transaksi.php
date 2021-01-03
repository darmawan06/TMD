<?php
	session_start();

	$_SESSION['transaksi_aman'] = 'sukses';
		echo "<script>
			history.back();
		</script>";
?>