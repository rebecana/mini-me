<?php

if (isset($_POST['submit'])) {
	$name = $_POST['name'];
	$email = $_POST['email'];
	$message = $_POST['message'];

	$mailTo = "anarebeca.petre@yahoo.com"
	$headers = "From: ".mailFrom;
	$txt = "You have received an e-mail from ".$name.".\n\n".$message;

	mail($mailTo, $subject, $txt, $headers);
	header("Location: index.php?mailsend");
}