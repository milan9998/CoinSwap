<?php

if ($_POST) {
	$name = $_POST['name'] ?? '';
	$lastname = $_POST['lastname'] ?? '';
	$email = $_POST['email'] ?? '';
	$message = $_POST['message'] ?? '';

	
	$name = preg_replace('#[^\w\p{Cyrillic}]+#u', ' ', $name);
	$lastname = preg_replace('#[^\w\p{Cyrillic}]+#u', ' ', $lastname);
	$message = strip_tags($message);
	$message = htmlspecialchars($message, ENT_QUOTES);

	if ($name == '')
		$_error[] = 'Enter your name';
	
	if ($lastname == '')
		$_error[] = 'Enter your last name';

	if ($email == '')
		$_error[] = 'Enter your email';
	else if(!filter_var($email, FILTER_VALIDATE_EMAIL))
		$_error[] = 'Your email is not valid';

	if ($message == '')
		$_error[] = 'Enter your message';

	if (empty($_error)) {
		$headers =	"From: $name <$email>\r\n" .
					"Reply-To: $email\r\n" .
					"X-Mailer: PHP mailer veb programiranje";

	if (true)
		$_message[] = 'Your message has been successfully sent.';
	else
		$_error[] = 'An error has occurred. Your message has not been sent to the site administrator';
	}
}

$page_output = [
	'page_title' => 'Contact',
	'view' => 'module-contact.php'
];

?>