<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$name = $_POST["name"];
	$email = $_POST["email"];
	$message = $_POST["message"];
	
	// Validate input
	if (empty($name) || empty($email) || empty($message)) {
		header("Location: contact.html?error=emptyfields");
		exit();
	}
	elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
		header("Location: contact.html?error=invalidemail");
		exit();
	}
	else {
		// Send email
		$to = "youremail@example.com";
		$subject = "New message from your website";
		$body = "Name: $name\nEmail: $email\nMessage:\n$message";
		$headers = "From: $email\nReply-To: $email";

		if (mail($to, $subject, $body, $headers)) {
			header("Location: contact.html?success=true");
			exit();
		} else {
			header("Location: contact.html?error=mailfailed");
			exit();
		}
	}
}
else {
	header("Location: contact.html");
	exit();
}
?>
