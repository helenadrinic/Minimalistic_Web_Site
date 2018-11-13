<? php

	if (isset($_POST['submit'])){

		$to = "drinic_h@outlook.com";
		$email = $_POST['email'];
		$subject = $_POST['subject'];
		$txt = $_POST['message'];
		$headers = "From: {$email}" . "\r\n" . "CC:zlatavredanpapir@gmail.com";

		mail($to,$subject,$txt,$headers);
	}

	?>