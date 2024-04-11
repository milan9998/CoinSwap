<!DOCTYPE html>
<html>
<head>
	<meta charset="utf8">
	<meta description="Sve o Eldoradu">
	<meta keywords="menjacnica, eldorado, html, css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">  <!--responsive design-->
	<title>Eldorado</title>
	<link rel="stylesheet" href="./public/css/style.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
	<above-header>
		<?php if (($_SESSION['loggedin'] ?? '') == 1): ?>
			<a title="Logout" href="./index.php?module=login&action=logout"><i class="fa fa-sign-out" aria-hidden="true"></i></a>
		<?php else: ?>
			<a href="./index.php?module=login" title="Login"><i class="fa fa-sign-in" aria-hidden="true"></i></a>
			<a href="./index.php?module=register" title="Sign up"><i class="fa fa-user-plus" aria-hidden="true"></i></a>
		<?php endif; ?>
		<form method="post" action="./index.php?modul=login">
			<input type="text" name="search" placeholder="Search">
			<button name="submit-search"><i class="fa fa-search" aria-hidden="true"></i></button>
		</form>
	</above-header>
	<header>
	</header>