<?php
$name = $_POST['nama'];
$email = $_POST['email'];
$comment = $_POST['comment'];

$to = "dikdik.darmawan06@gmail.com";
$subject = $email;
$txt = $comment;
$headers = "From: dikdikd@cehiji.com" . "\r\n" .
"CC: '.${email}.'";

mail($to,$subject,$txt,$headers);

		echo "<script>
			history.back();
		</script>";
?> 